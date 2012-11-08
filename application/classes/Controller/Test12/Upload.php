<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Test12_upload extends Controller {

    public function action_index() {

        $loginuser = Auth_Wplogin::instance()->get_user();
        if (!$loginuser)
            $this->redirect('test12');
        $page = isset($_GET['page']) ? $_GET['page'] : NULL;
        $p = isset($_GET['p']) ? $_GET['p'] : NULL;

        $user_ID = Auth_Wplogin::instance()->user_ID($loginuser);

        $action = isset($_GET['action']) ? $_GET['action'] : FALSE;
        if ($action) {
            if ($action == 'delete') {
                $model = Model::factory('Test12_Posts');
                foreach ($_GET['media'] as $id) {
                    if ($model->getimage($id, 'post_author') == $user_ID) {
                        $model->deleteimage($id);
                    } else {
                        die('Invalid!');
                    }
                }
            }
        }

        $dblimit = 20*1024*1024; // user's database limit.
        $model = Model::factory('Test12_Posts');
        $totalsize = $model->gettotalimagesize($user_ID);
        $remaining = (int) (($dblimit - $totalsize) / 1024 / 1024);
        if ($remaining < 0)
            $remaining = 0;

        $view = View::factory('test12/upload/upload');
        $view->head02 = View::factory('test12/postnew/head02');
        $view->adminmenu = View::factory('test12/postnew/adminmenu');
        $view->adminmenu->menu = 'media';
        $view->help = View::factory('test12/postnew/help');
        $view->screen_option = View::factory('test12/postnew/screen_option');
        if ($p == 'upload') {
            $view->media = View::factory('test12/postnew/uploadify');
            $view->media->folder = $loginuser;
            $view->media->remaining = $remaining;
        } else {
            $view->media = Contents_Upload::images($page, $user_ID);
        }
        $view->wpadminbar = View::factory('test12/postnew/wpadminbar');
        $view->wpadminbar->loginuser = $loginuser;

        $this->response->body($view);
    }

}

?>
