<?php

return array(
    'native' => array(
        'name' => 'kohana33',
        'lifetime' => 604800, // 7 days
    ),
    'cookie' => array(
        'name' => 'kohana33',
        'encrypted' => TRUE,
        'lifetime' => 604800,
    ),
    'database' => array(
        'name' => 'kohana33',
        'encrypted' => TRUE,
        'lifetime' => 604800,
        'group' => 'default',
        'table' => 'sessions',
        'columns' => array(
            'session_id' => 'session_id',
            'last_active' => 'last_active',
            'contents' => 'contents'
        ),
        'gc' => 500, // 1:x chance that garbage collection will be run
    ),
);
?>
