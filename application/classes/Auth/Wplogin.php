<?php defined('SYSPATH') or die('No direct access allowed.');

class Auth_Wplogin extends Auth {

// Logs a user in.
    protected function _login($username, $password, $remember) {

        if (is_string($password)) {
            $password = $this->hash($password);
        }

        $dbpassword = $this->password($username);

        if ($dbpassword == $password) {
            $this->complete_login($username);
            return TRUE;
        }

        return FALSE;
    }

// Get the stored password for a username.
    public function password($username) {

        $userdata = DB::select('ID', 'user_login', 'user_pass')
                ->from('wp332_users')
                ->where('user_login', '=', $username)
                ->execute();

        $dbpassword = $userdata->get('user_pass', FALSE);
        return $dbpassword;
    }

// Compare password with original (hashed). 
    public function check_password($password) {

        $username = $this->get_user();
        if (!$username)
            return FALSE;

        $dbpassword = $this->password($username);
        if (!$dbpassword)
            return FALSE;

        return ($this->hash($password) == $dbpassword);
    }

    static function generate_password($length = 12, $special_chars = 0) {

        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        if ($special_chars >= 1)
            $chars .= '!@#$%^&*()';
        if ($special_chars >= 2)
            $chars .= '-_ []{}<>~`+=,.;:/?|';

        $password = '';
        mt_srand();
        for ($i = 0; $i < $length; $i++) {
            $password .= substr($chars, (mt_rand(0,strlen($chars)-1)), 1);
        }

        return $password;
    }
    
    // Get the ID for a username.
    public function user_ID($username) {

        $userdata = DB::select('ID', 'user_login')
                ->from('wp332_users')
                ->where('user_login', '=', $username)
                ->execute();

        $id = $userdata->get('ID', FALSE);
        return $id;
    }

}
