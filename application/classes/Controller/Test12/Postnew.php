<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Test12_postnew extends Controller {

    public function action_index() {

        $loginuser = Auth_Wplogin::instance()->get_user();
        if (!$loginuser)
            $this->redirect('test12');

        $user_ID = Auth_Wplogin::instance()->user_ID($loginuser);

        $model = Model::factory('Test12_Posts');

        if (isset($_POST['post_title'])) {
            isset($_POST['post_ID']) ? $id = $_POST['post_ID'] : die('Invalid!');
            if ($id) {
                $array = array('ID' => $id);
                $select = $model->selectblogs($array)->as_array();
                $select ? $select = $select[0] : die('Invalid id!');
                if (!($select['post_author'] == $user_ID))
                    die('Invalid user!');
            }

            $post = Validation::factory($_POST)
                    ->rule('post_title', 'not_empty', array(':value', 'タイトル'))
                    ->rule('post_title', 'max_length', array(':value', 100))
                    ->rule('content', 'not_empty', array(':value', '記事'))
                    ->rule('content', 'max_length', array(':value', 10000));

            $posts = $post->data();

            if ($post->check()) {

                $post_time = Cookie::get('post_time');
                if (!$post_time)
                    die('Invalid!');
                $interval = $id ? 10 : 60;
                if (time() - $post_time > $interval) {
                    Cookie::set('post_time', time());
                    $config = HTMLPurifier_Config::createDefault();
                    $purifier = new HTMLPurifier($config);
                    $content = $purifier->purify($posts['content']);

                    $post_array = array(
                        'post_author' => $user_ID,
                        'post_title' => $posts['post_title'],
                        'post_content' => $content
                    );
                    $post_array['post_status'] = isset($_POST['save']) ? 'draft' : 'publish';

                    if ($id) {
                        $post_array = $post_array + $select;
                        $model->editpost($id, $post_array);
                        $this->redirect('test12?p=' . $id);
                    }

                    $model->postnew($post_array);
                    $this->redirect('test12');
                } else {
                    $errors[] = $interval.'sec rule: しばらく待ってから投稿して下さい';
                    $post_title = HTML::chars($posts['post_title']);
                    $content = $posts['content'];
                    $id = $posts['post_ID'];
                }
            } else {
                $errors = $post->errors('test12');
                $post_title = HTML::chars($posts['post_title']);
                $content = $posts['content'];
                $id = $posts['post_ID'];
            }
        } else {
            Cookie::set('post_time', time());
            if (isset($_GET['action']) AND $_GET['action'] == 'edit') {
                isset($_GET['id']) ? $id = $_GET['id'] : die('Invalid!');
                $array = array('ID' => $id);
                $select = $model->selectblogs($array)->as_array();
                $select ? $select = $select[0] : die('Invalid id!');
                if (!($select['post_author'] == $user_ID))
                    die('Invalid user!');
                $errors = '';
                $post_title = HTML::chars($select['post_title']);
                $content = $select['post_content'];
            } else {
                $errors = '';
                $post_title = "";
                $content = "";
                $id = '';
            }
        }

        $view = View::factory('test12/postnew/postnew');
        $view->errors = $errors;
        $view->head02 = View::factory('test12/postnew/head02');
        $view->adminmenu = View::factory('test12/postnew/adminmenu');
        $view->adminmenu->menu = 'post';
        $view->help = View::factory('test12/postnew/help');
        $view->screen_option = View::factory('test12/postnew/screen_option');
        $view->form_1 = View::factory('test12/postnew/form_1');
        $view->form_1->post_title = $post_title;
        $view->form_1->content = $content;
        $view->form_1->post_ID = $id;
        $view->form_2 = View::factory('test12/postnew/form_2');
        $view->wpadminbar = View::factory('test12/postnew/wpadminbar');
        $view->wpadminbar->loginuser = $loginuser;
        $view->form_3 = View::factory('test12/postnew/form_3');
        $view->fullscreen = View::factory('test12/postnew/fullscreen');

        $this->response->body($view);
    }

}

?>
