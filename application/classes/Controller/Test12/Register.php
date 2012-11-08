<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Test12_register extends Controller {

    public function action_index() {

        $user = Model::factory('Test12_Register');

        if (isset($_POST['user_login'])) {
            $post = Validation::factory($_POST)
                    ->rule('user_login', 'not_empty', array(':value', 'ユーザー名'))
                    ->rule('user_login', 'max_length', array(':value', 24))
                    ->rule('user_login', 'regex', array(':value', '/^[a-z0-9_.]++$/iD'))
                    ->rule('user_login', array($user, 'unique_username'))
                    ->rule('user_email', 'not_empty', array(':value', 'メールアドレス'))
                    ->rule('user_email', 'max_length', array(':value', 60))
                    ->rule('user_email', 'email')
                    ->rule('user_email', 'email_domain')
                    ->rule('user_email', array($user, 'unique_email'));

            $posts = $post->data();

            if ($post->check()) {
                $password = Auth_Wplogin::generate_password();
                $post_array = array(
                    'id' => '',
                    'user_login' => $posts['user_login'],
                    'user_pass' => auth::instance()->hash($password),
                    'user_nicename' => $posts['user_login'],
                    'user_email' => $posts['user_email'],
                    'user_url' => '',
                    'user_registered' => date('Y-m-d H:i:s'),
                    'user_activation_key' => '',
                    'user_status' => 0,
                    'display_name' => $posts['user_login']
                );
                $user->register($post_array);


                $config = Kohana::$config->load('test12')->mail_register;
                foreach ($config as $key => $value) {
                    $$key = $value;
                }
                
                $user_login = $posts['user_login'];
                $date = Date::formatted_time();

                $body = <<< EOT
$user_login 様

$body1

ユーザー名: $user_login
パスワード: $password
http://localhost/kohana/test12

$body2 $date

EOT;

                $Z_Mail = new Zend_Mail('localhost');
                $Z_Mail
                        ->setBodyText($body)
                        ->setFrom($from)
                        ->addTo($posts['user_email'])
                        ->setSubject($subject)
                        ->send();

                $this->redirect('test12');
            }

            $errors = $post->errors('test12');
            $user_login = HTML::chars($_POST['user_login']);
            $user_email = HTML::chars($_POST['user_email']);
        } else {
            $user_login = "";
            $user_email = "";
        }

        $this->response->body(View::factory('test12/auth/register')
                        ->bind('user_login', $user_login)
                        ->bind('user_email', $user_email)
                        ->bind('errors', $errors));
    }

}

?>
