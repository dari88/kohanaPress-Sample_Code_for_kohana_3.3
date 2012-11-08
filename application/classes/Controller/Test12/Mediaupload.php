<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Test12_mediaupload extends Controller {

    public function action_index() {

        $loginuser = Auth_Wplogin::instance()->get_user();
        if (!$loginuser)
            $this->redirect('test12');
        $user_ID = Auth_Wplogin::instance()->user_ID($loginuser);

        $dblimit = 20*1024*1024; // user's database limit.
        $model = Model::factory('Test12_Posts');
        $totalsize = $model->gettotalimagesize($user_ID);
        $remaining = (int) (($dblimit - $totalsize) / 1024 / 1024);
        
        if ($remaining < 0)
            $remaining = 0;

        $view = View::factory('test12/postnew/uploadify');
        $view->folder = $loginuser;
        $view->remaining = $remaining;
        $this->response->body($view);
    }

}

?>
