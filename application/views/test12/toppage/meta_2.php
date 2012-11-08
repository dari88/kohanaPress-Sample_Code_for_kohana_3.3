<aside id="meta-2" class="widget widget_meta"><h3 class="widget-title">メタ情報</h3>			
    <ul>
<?php if ($loginuser): echo <<<EOT
        <li><a href="test12_admin">サイト管理</a></li>
        <li><a href="test12_logout">ログアウト</a></li>\n
EOT;
else : echo <<< EOT
        <li><a href="test12_register">登録</a></li>			
        <li><a href="test12_login">ログイン</a></li>
EOT;
endif; ?> 
       
        <li><a href="http://localhost/wordpress/?feed=rss2" title="このサイトを RSS2.0 で購読">投稿の <abbr title="Really Simple Syndication">RSS</abbr></a></li>
        <li><a href="http://localhost/wordpress/?feed=comments-rss2" title="すべての投稿への最新コメントを RSS で購読">コメントの <abbr title="Really Simple Syndication">RSS</abbr></a></li>
        <li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress.org</a></li>
    </ul>
</aside>	
