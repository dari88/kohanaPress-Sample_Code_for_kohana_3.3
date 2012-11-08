<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Test12_uploadify extends Controller {

    public function action_index() {

        try {
            if (empty($_FILES)) {
                throw new Exception('Invalid access!');
            }

            $filename = $_FILES['Filedata']['name'];
            $fileParts = pathinfo($filename);
            $ext = strtolower($fileParts['extension']);
            $typesArray = array('jpg', 'gif', 'png');

            if (!in_array($ext, $typesArray)) {
                throw new Exception('Invalid file type!');
            }

            $timestamp = time();
            $tempFile = $_FILES['Filedata']['tmp_name'];
            $targetPath = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
            $targetPath = str_replace('//', '/', $targetPath);
            $uniq_filename = $timestamp . '_' . Auth_Wplogin::generate_password(4);
            $targetFile = $targetPath . $uniq_filename . '.' . $ext;
            $thumbnail_1 = $targetPath . $uniq_filename . '_320x.' . $ext;
            $thumbnail_2 = $targetPath . $uniq_filename . '_1024x.' . $ext;

            $imagick = new Imagick($tempFile);
            $size = $imagick->getImageLength();
            if ($size > 10250000) {
                throw new Exception('File size over!');
            }
            $width = $imagick->getImageWidth();
            $height = $imagick->getImageHeight();
            $imagick->writeImage($targetFile);
            if ($width > 1024 or $height > 1024) {
                $imagick->thumbnailImage(1024, 1024, TRUE);
                $imagick->writeImage($thumbnail_2);
            } else {
                $imagick->writeImage($thumbnail_2);
            }
            $imagick->thumbnailImage(320, 320, TRUE);
            $imagick->writeImage($thumbnail_1);
            $imagick->Destroy();

            $loginuser = substr($_REQUEST['folder'], 1);
            $user_ID = Auth_Wplogin::instance()->user_ID($loginuser);
            if (!$loginuser) {
                throw new Exception('Login!');
            }
            
            $tn1_img = file_get_contents($thumbnail_1);
            $tn2_img = file_get_contents($thumbnail_2);
            $org_img = file_get_contents($targetFile);

            $post_array = array(
                'post_author' => $user_ID,
                'data_size' => $size,
                'extention' => $ext,
                'org_name' => $filename,
                'uq_name' => $uniq_filename . '.' . $ext,
                'tn1_name' => $uniq_filename . '_320x.' . $ext,
                'tn2_name' => $uniq_filename . '_1024x.' . $ext,
                'tn1_img' => $tn1_img,
                'tn2_img' => $tn2_img,
                'org_img' => $org_img,
            );

            $dblimit = 20*1024*1024; // user's database limit.

            $model = Model::factory('Test12_Posts');
            $totalsize = $model->gettotalimagesize($user_ID);

            if ($totalsize > $dblimit) {
                throw new Exception('DB limit!');
            }
            
            $model->postnewimages($post_array);

            unlink($thumbnail_1);
            unlink($thumbnail_2);
            unlink($targetFile);

            echo str_replace($_SERVER['DOCUMENT_ROOT'], '', $targetFile);
        } catch (Exception $e) {
            $log = print_r($e->getMessage(), TRUE) . "\n";
            $logfile = $targetPath . 'log.txt';
            file_put_contents($logfile, $log, FILE_APPEND | LOCK_EX);
            throw new Exception($e->getMessage());
            die('Invalid');
        }
    }

}

?>