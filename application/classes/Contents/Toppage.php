<?php defined('SYSPATH') OR die('No direct access allowed.');

class Contents_Toppage {

    static function blogs($page, $author, $p) {
        
        $user_ID = Auth_Wplogin::instance()->user_ID($author);

        $model = Model::factory('Test12_Posts');
        if ($user_ID) {
            $array = array('post_author' => $user_ID, 'post_status' => 'publish');
        } elseif ($p) {
            $array = array('ID' => $p, 'post_status' => 'publish');
        } else {
            $array = array('post_status' => 'publish');
        }

        $select = $model->selectblogs($array);
        $paginator = Paginator::factory($select);

        if ($p) {
            $view = View::factory('test12/toppage/blogs');
            $view->data = $paginator;
            $view->single = TRUE;

            return $view->render();
        }

        if (!$page) {
            $page = 1;
        }

        $paginator->set_current_page_number($page);
        $pagecount = $paginator->count();

        $op = '';
        if ($author) {
            $op = '&author=' . $author;
        }
        $hp = 'test12';
        $firstpage = $hp . '?page=1' . $op;
        $beforepage = $hp . '?page=' . ($page - 1) . $op;
        $nextpage = $hp . '?page=' . ($page + 1) . $op;
        $lastpage = $hp . '?page=' . $pagecount . $op;
        if ($page == 1)
            $beforepage = $hp . '?page=1' . $op;
        if ($page == $pagecount)
            $nextpage = $hp . '?page=' . $pagecount . $op;

        $view = View::factory('test12/toppage/blogs');
        $view->data = $paginator;
        $view->single = FALSE;
        $view->firstpage = $firstpage;
        $view->beforepage = $beforepage;
        $view->nextpage = $nextpage;
        $view->lastpage = $lastpage;

        return $view->render();
    }

    static function recentposts2() {

        $model = Model::factory('Test12_Posts');
        $array = array('post_status' => 'publish');
        $select = $model->selectblogs($array);
        $paginator = Paginator::factory($select);

        $view = View::factory('test12/toppage/recent_posts_2');
        $view->data = $paginator;
        return $view->render();
    }

}

?>
