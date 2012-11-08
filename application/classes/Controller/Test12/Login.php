<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Test12_login extends Controller {

    public function action_index() {

        if (isset($_POST['user_login'])) {
            $post = Validation::factory($_POST)
                    ->rule('user_login', 'not_empty', array(':value', 'ユーザー名'))
                    ->rule('user_login', 'max_length', array(':value', 24))
                    ->rule('user_login', 'regex', array(':value', '/^[a-z0-9_.]++$/iD'))
                    ->rule('user_pass', 'not_empty', array(':value', 'パスワード'))
                    ->rule('user_pass', 'min_length', array(':value', 6))
                    ->rule('user_pass', 'max_length', array(':value', 12));

            $posts = $post->data();
            $user_login = $posts['user_login'];
            $user_pass = $posts['user_pass'];
            $autherror = NULL;

            if ($post->check()) {
                $auth = Auth_Wplogin::instance();
                $result = $auth->login($user_login, $user_pass);
                if ($result) {
                    $this->redirect('test12');
                }
                $autherror = 'ログイン認証エラーです<br />' .
                        'ユーザー名とパスワードを確認して下さい';
            }

            $errors = $post->errors('test12');
            if ($autherror)
                $errors[] = $autherror;
            $user_login = HTML::chars($_POST['user_login']);
        } else {
            $user_login = "";
            
        }

        $this->response->body(View::factory('test12/auth/login')
                        ->bind('user_login', $user_login)
                        ->bind('errors', $errors)
        );
    }

}

?>
