<?php defined('SYSPATH') or die('No direct access allowed.');

return array(
	'driver'       => 'Wplogin',
	'hash_method'  => 'sha256',
	'hash_key'     => 'gta%iM$slenopregd&hlby#tdneale*y',
	'lifetime'     => 1209600, // 14 days
	'session_type' => Session::$default,
	'session_key'  => 'auth_user',
);
