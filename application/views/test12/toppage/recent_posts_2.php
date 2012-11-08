<aside id="recent-posts-2" class="widget widget_recent_entries">		
    <h3 class="widget-title">最近の投稿</h3>		
    <ul>
        <?PHP
        foreach ($data as $d) {
            $blogid = $d['ID'];
            $post_title = HTML::chars($d['post_title']);
            ?>
            <li><a href="test12?p=<?php echo $blogid ?>" title="<?php echo $post_title ?>"><?php echo $post_title ?></a></li>
        <?php } ?>
    </ul>
</aside>

