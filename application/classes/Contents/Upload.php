<?php defined('SYSPATH') OR die('No direct access allowed.');

class Contents_Upload {

    static function images($page, $author) {

        $model = Model::factory('Test12_Posts');
        if ($author) {
            $array = array('post_author' => $author);
        } else {
            $array = NULL;
        }

        $select = $model->selectimage($array);
        $paginator = Paginator::factory($select);

        if (!$page) {
            $page = 1;
        }

        $pagecount = $paginator->count();
        $page = ($page > $pagecount) ? $pagecount : $page;
        $paginator->set_current_page_number($page);

        $view = View::factory('test12/upload/media');
        $view->data = $paginator;
        $view->single = FALSE;
        $view->page = $page;
        $view->pagination = $paginator->render('elastic');

        return $view->render();
    }

}

?>
