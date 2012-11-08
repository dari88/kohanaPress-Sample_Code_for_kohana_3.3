<?php

defined('SYSPATH') or die('No direct access allowed.');

$body1 = <<< EOT
WordPress風kohanaサイトへようこそ！
ユーザー登録を致しましたのでパスワードをお届けします。
EOT;

$body2 = <<< EOT
WordPress風kohanaサイトをよろしくお願いします。

                                     ウエッブマスター　kohana太郎
                                     
EOT;

return array
    (
    'mail_register' => array
        (
        'from' => 'kohana_master@gmail.com',
        'subject' => '[kohana] あなたのユーザー名とパスワード',
        'body1' => $body1,
        'body2' => $body2,
    ),
    'headerimages' => array
        (
        'IMG_004363.JPG', 'IMG_012491.JPG', 'IMG_012578.JPG', 'IMG_013769.JPG',
        'IMG_013789.JPG', 'IMG_013793.JPG', 'IMG_013829.JPG', 'IMG_013831.JPG',
        'IMG_013871.JPG', 'IMG_013941.JPG', 'IMG_014460.JPG', 'IMG_014483.JPG',
        'IMG_014506.JPG', 'IMG_014544.JPG', 'IMG_015851.JPG', 'IMG_015934.JPG',
        'IMG_016073.JPG', 'IMG_016246.JPG', 'IMG_016247.JPG', 'IMG_016250.JPG',
        'IMG_016253.JPG', 'IMG_016520.JPG', 'IMG_016522.JPG', 'IMG_016531.JPG',
        'IMG_016565.JPG', 'IMG_016612.JPG', 'IMG_016613.JPG', 'IMG_016624.JPG',
        'IMG_016659.JPG', 'IMG_016710.JPG', 'IMG_016749.JPG', 'IMG_016761.JPG',
        'IMG_016776.JPG', 'IMG_016919.JPG', 'IMG_016929.JPG', 'IMG_017091.JPG',
        'IMG_017174.JPG', 'IMG_017224.JPG', 'IMG_017242.JPG', 'IMG_017448.JPG',
        'IMG_017484.JPG', 'IMG_017521.JPG', 'IMG_017593.JPG', 'IMG_017654.JPG',
        'IMG_017814.JPG', 'IMG_018265.JPG', 'IMG_018290.JPG', 'IMG_018301.jpg',
        'IMG_018415.JPG', 'IMG_018496.JPG'
    ),
);