<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Test12_mediaview extends Controller {

    public function action_index() {

        $loginuser = Auth_Wplogin::instance()->get_user();
        if (!$loginuser)
            die('Invalid!');
        $user_ID = Auth_Wplogin::instance()->user_ID($loginuser);
        isset($_GET['id']) ? $id = $_GET['id'] : die('Invalid!');
        isset($_GET['type']) ? $type = $_GET['type'] : die('Invalid!');
        $html = isset($_GET['html']) ? 1 : NULL;

        $model = Model::factory('Test12_Posts');
        $img = $model->getimage($id, $type . '_img');
        $ext = $model->getimage($id, 'extention');
        $org_name = $model->getimage($id, 'org_name');

        $content_type = array(
            'jpg' => 'image/jpeg',
            'png' => 'image/png',
            'gif' => 'image/gif',
        );

        if ($html) {
            echo "<html><head><meta http-equiv='Content-Type' content='text/html; charset=UTF-8' /></head>";
            echo "<body><image src='test12_mediaview?id={$id}&type={$type}' /><br />{$org_name}</body></html>";
        } else {
            header("Accept-Ranges: bytes");
            header("Content-Length: " . strlen($img));
            header("Content-type: image/jpeg");
            ob_clean();
            flush();
            print $img;
        }
    }

}

?>
