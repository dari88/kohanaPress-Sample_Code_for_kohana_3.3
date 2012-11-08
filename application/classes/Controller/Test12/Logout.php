<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Test12_logout extends Controller {

    public function action_index() {

        Auth::instance()->logout();
        $this->redirect('test12');
    }

}

?>
