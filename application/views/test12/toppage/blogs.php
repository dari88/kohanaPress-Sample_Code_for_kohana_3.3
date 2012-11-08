<?PHP
foreach ($data as $d) {
    $blogid = $d['ID'];
    $post_author = $d['post_author'];
    $user_login = Model::factory('test12_posts')->id2name($post_author);
    $post_title = HTML::chars($d['post_title']);
    $post_content = $d['post_content'];
    $post_date = $d['post_date'];
    ?>

    <article id="post-25" class="post-25 post type-post status-publish format-standard hentry category-1">
        <header class="entry-header">
            <h1 class="entry-title"><a href="test12?p=<?php echo $blogid ?>" title="パーマリンク" rel="bookmark"><?php echo $post_title ?></a></h1>

            <div class="entry-meta">
                <span class="sep">投稿日:</span><a href="test12?p=<?php echo $blogid ?>" title="" rel="bookmark">
                    <time class="entry-date" datetime="<?php echo $post_date ?>" pubdate><?php echo $post_date ?></time></a>
                <span class="by--author"> <span class="sep">作成者:</span> <span class="author vcard">
                        <a class="url fn n" href="test12?author=<?php echo $user_login ?>" title="<?php echo $user_login ?> の投稿をすべて表示" rel="author"><?php echo $user_login ?></a></span></span>	
            </div><!-- .entry-meta -->

            <div class="comments-link">
                <a href="test12?p=<?php echo $blogid ?>#respond" title="コメント"><span class="leave-reply">返信</span></a>			</div>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <p><?php echo $post_content ?></p>
        </div><!-- .entry-content -->

        <footer class="entry-meta">
            <span class="cat-links">
                <span class="entry-utility-prep entry-utility-prep-cat-links">カテゴリー:</span> <a href="test12?cat=1" title="未分類 の投稿をすべて表示" rel="category">未分類</a></span>
            <span class="sep"> | </span>
            <span class="comments-link"><a href="test12?p=<?php echo $blogid ?>#respond" title="コメント">
                    <span class="leave-reply">コメントをどうぞ</span></a></span>

        </footer><!-- #entry-meta -->
    </article><!-- #post-25 -->

<?php } ?>

<?php
if (!$single) {
    echo '<br />';
    echo '<a href=' . $firstpage . '>&lt;&lt;</a>';
    echo '<a href=' . $beforepage . '>&nbsp;&lt;</a>';
    echo '　前のページ　　　　　次のページ　';
    echo '<a href=' . $nextpage . '>&gt;&nbsp;</a>';
    echo '<a href=' . $lastpage . '>&gt;&gt;</a>';
}
?>