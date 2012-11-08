<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Test12_posts extends Model {

    public function postnew($array) {

        $date = Date::formatted_time();
        $post = array(
            'ID' => '',
            'post_author' => '0',
            'post_date' => $date,
            'post_date_gmt' => $date,
            'post_content' => 'NOT POSTED!!!',
            'post_title' => 'NOT POSTED!!!',
            'post_excerpt' => '',
            'post_status' => 'publish',
            'comment_status' => 'open',
            'ping_status' => 'open',
            'post_password' => '',
            'post_name' => '',
            'to_ping' => '',
            'pinged' => '',
            'post_modified' => $date,
            'post_modified_gmt' => $date,
            'post_content_filtered' => '',
            'post_parent' => '0',
            'guid' => '',
            'menu_order' => '0',
            'post_type' => 'post',
            'post_mime_type' => '',
            'comment_count' => '0',
        );

        foreach ($array as $key => $value) {
            $post[$key] = $value;
        }

        $id = DB::insert(array_keys($post))
                ->values($post)
                ->table('wp332_posts')
                ->execute();

        return $id;
    }

    public function editpost($id, $array) {
        $date = Date::formatted_time();
        $array['post_modified'] = $date;
        $array['post_modified_gmt'] = $date;
        $update = DB::update('wp332_posts')
                ->where('ID', '=', $id)
                ->set($array);
        return $update->execute();
    }

    public function selectblogs($array) {
        $select = DB::select('*')
                ->order_by('ID', 'DESC')
                ->from('wp332_posts');
        if ($array) {
            $select->where_open();
            foreach ($array as $key => $value) {
                $select->and_where($key, '=', $value);
            }
            $select->where_close();
        }

        return $select->execute();
    }

    public function getpost($id, $c) {
        $select = DB::select('ID', $c)
                ->where('ID', '=', $id)
                ->from('wp332_posts')
                ->execute();
        return $select->get($c);
    }

    public function deletepost($id) {
        $delete = DB::delete('wp332_posts')
                ->where('id', '=', $id);
        return $delete->execute();
    }

    public function postnewimages($array) {

        $date = Date::formatted_time();
        $post = array(
            'ID' => '',
            'post_author' => '0',
            'post_date' => $date,
            'post_date_gmt' => $date,
            'data_size' => '0',
            'extention' => '',
            'org_name' => '',
            'uq_name' => '',
            'tn1_name' => '',
            'tn2_name' => '',
            'title' => '',
            'description' => '',
            'tn1_img' => '',
            'tn2_img' => '',
            'org_img' => '',
        );

        foreach ($array as $key => $value) {
            $post[$key] = $value;
        }

        $id = DB::insert(array_keys($post))
                ->values($post)
                ->table('wp332_post_images')
                ->execute();

        return $id;
    }

    public function selectimage($array) {
        $select = DB::select('ID', 'post_author', 'post_date', 'post_date_gmt', 'data_size', 'extention', 'org_name', 'uq_name', 'tn1_name', 'tn2_name', 'title', 'description')
                ->order_by('ID', 'DESC')
                ->from('wp332_post_images');
        if ($array) {
            $select->where_open();
            foreach ($array as $key => $value) {
                $select->and_where($key, '=', $value);
            }
            $select->where_close();
        }

        return $select->execute();
    }

    public function getimage($id, $c) {
        $select = DB::select('ID', $c)
                ->where('ID', '=', $id)
                ->from('wp332_post_images')
                ->execute();
        return $select->get($c);
    }

    public function gettotalimagesize($post_author) {
        $query = DB::select(array(DB::expr('sum(data_size)'), 'total_size'))
                ->from('wp332_post_images')
                ->where('post_author', '=', $post_author)
                ->execute();
        return $query->get('total_size');
    }

    public function deleteimage($id) {
        $delete = DB::delete('wp332_post_images')
                ->where('id', '=', $id);
        return $delete->execute();
    }

    public function id2name($id) {
        $select = DB::select('ID', 'user_login')
                ->where('ID', '=', $id)
                ->from('wp332_users')
                ->execute();

        return $select->get('user_login', FALSE);
    }

}

?>
