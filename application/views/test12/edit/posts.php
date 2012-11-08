<div class="wrap">

    <ul class='subsubsub'>
        <li class='all'><a href='test12_edit?option=all'>すべて <span class="count"></span></a> |</li>
        <li class='publish'><a href='test12_edit'>公開済み <span class="count"></span></a> |</li>
        <li class='draft'><a href='test12_edit?option=draft'>下書き <span class="count"></span></a> |</li>
        <li class='trash'><a href='test12_edit?option=trash'>ゴミ箱 <span class="count"></span></a></li>
    </ul>
    <form id="posts-filter" action="" method="get">

        <input type="hidden" name="_wp_http_referer" value="test12_edit" />
        <input type="hidden" name="option" value="<?php echo $option ?>" />
        <input type="hidden" name="page" value="<?php echo $page ?>" />
        
        <table class="wp-list-table widefat fixed posts" cellspacing="0">
            <thead>
                <tr>
                    <th scope='col' id='cb' class='manage-column column-cb check-column'  style=""><input type="checkbox" /></th><th scope='col' id='title' class='manage-column column-title sortable desc'  style=""><a href="http://localhost/wordpress/wp-admin/edit.php?orderby=title&#038;order=asc"><span>タイトル</span><span class="sorting-indicator"></span></a></th><th scope='col' id='author' class='manage-column column-author sortable desc'  style=""><a href="http://localhost/wordpress/wp-admin/edit.php?orderby=author&#038;order=asc"><span>作成者</span><span class="sorting-indicator"></span></a></th><th scope='col' id='categories' class='manage-column column-categories'  style="">カテゴリー</th><th scope='col' id='tags' class='manage-column column-tags'  style="">タグ</th><th scope='col' id='comments' class='manage-column column-comments num sortable desc'  style=""><a href="http://localhost/wordpress/wp-admin/edit.php?orderby=comment_count&#038;order=asc"><span><span class="vers"><img alt="コメント" src="http://localhost/wordpress/wp-admin/images/comment-grey-bubble.png" /></span></span><span class="sorting-indicator"></span></a></th><th scope='col' id='date' class='manage-column column-date sortable asc'  style=""><a href="http://localhost/wordpress/wp-admin/edit.php?orderby=date&#038;order=desc"><span>日時</span><span class="sorting-indicator"></span></a></th>	</tr>
            </thead>

            <tfoot>
                <tr>
                    <th scope='col'  class='manage-column column-cb check-column'  style=""><input type="checkbox" /></th><th scope='col'  class='manage-column column-title sortable desc'  style=""><a href="http://localhost/wordpress/wp-admin/edit.php?orderby=title&#038;order=asc"><span>タイトル</span><span class="sorting-indicator"></span></a></th><th scope='col'  class='manage-column column-author sortable desc'  style=""><a href="http://localhost/wordpress/wp-admin/edit.php?orderby=author&#038;order=asc"><span>作成者</span><span class="sorting-indicator"></span></a></th><th scope='col'  class='manage-column column-categories'  style="">カテゴリー</th><th scope='col'  class='manage-column column-tags'  style="">タグ</th><th scope='col'  class='manage-column column-comments num sortable desc'  style=""><a href="http://localhost/wordpress/wp-admin/edit.php?orderby=comment_count&#038;order=asc"><span><span class="vers"><img alt="コメント" src="http://localhost/wordpress/wp-admin/images/comment-grey-bubble.png" /></span></span><span class="sorting-indicator"></span></a></th><th scope='col'  class='manage-column column-date sortable asc'  style=""><a href="http://localhost/wordpress/wp-admin/edit.php?orderby=date&#038;order=desc"><span>日時</span><span class="sorting-indicator"></span></a></th>	</tr>
            </tfoot>

            <tbody id="the-list">

                <?PHP
                foreach ($data as $d) {
                    $id = $d['ID'];
                    $post_author = $d['post_author'];
                    $user_login = Model::factory('test12_posts')->id2name($post_author);
                    $post_title = HTML::chars($d['post_title']);
                    $post_status = $d['post_status'];
                    $post_date = $d['post_date'];
                    $post_excerpt = $d['post_excerpt'];
//                    $tn2_name = $d['tn2_name'];
//                    $org_name = $d['org_name'];
//                    $extention = $d['extention'];
                    ?>

                    <tr valign="top" class="post-106 post type-post status-publish format-standard hentry category-1 alternate iedit author-self" id="post-106">
                        <th class="check-column" scope="row"><input type="checkbox" value="<?php echo $id ?>" name="post[]"></th>
                        <td class="post-title page-title column-title"><strong><a title="これを編集する" href="test12_postnew?id=<?php echo $id ?>&action=edit" class="row-title"><?php echo $post_title ?></a></strong>
                            <div class="row-actions"><span class="edit"><a title="この項目を編集" href="test12_postnew?id=<?php echo $id ?>&action=edit">編集</a> | </span>
                                <span class="inline hide-if-no-js"><a title="この項目をインラインで編集" class="editinline" href="#">クイック編集</a> | </span>
                                <span class="trash"><a href="test12_edit?action=trash&post[]=<?php echo $id ?>&page=<?php echo $page ?>&option=<?php echo $option ?>" title="この項目をゴミ箱へ移動する " class="submitdelete">ゴミ箱</a> | </span>
                                <span class="view"><a rel="permalink" title="これを表示" href="test12?p=<?php echo $id ?>">表示</a></span>
                            </div>
                            <div id="inline_106" class="hidden">
                                <div class="post_title"></div>
                                <div class="post_name">106</div>
                                <div class="post_author">1</div>
                                <div class="comment_status">open</div>
                                <div class="ping_status">open</div>
                                <div class="_status">publish</div>
                                <div class="jj">01</div>
                                <div class="mm">06</div>
                                <div class="aa">2012</div>
                                <div class="hh">15</div>
                                <div class="mn">53</div>
                                <div class="ss">53</div>
                                <div class="post_password"></div><div id="category_106" class="post_category">1</div><div id="post_tag_106" class="tags_input"></div><div class="sticky"></div><div class="post_format"></div></div></td>			
                        <td class="author column-author"><a href="test12_edit"><?php echo $user_login ?></a></td>
                        <td class="categories column-categories"><a href=""><?php echo $post_excerpt ?></a></td>
                        <td class="tags column-tags">タグなし</td>
                        <td class="comments column-comments"><div class="post-com-count-wrapper">
                                <a class="post-com-count" title="0件の承認待ち" href=""><span class="comment-count">0</span></a>			</div></td>
                        <td class="date column-date"><abbr title="<?php echo $post_date ?>"><?php echo $post_date ?></abbr><br><?php echo $post_status ?></td>		
                    </tr>

                <?php } ?>
            </tbody>
        </table>

        <div class="tablenav bottom">

            <div class="alignleft actions">
                <select name='action'>
                    <option value='-1' selected='selected'>一括操作</option>
                    <option value='trash'>ゴミ箱へ移動</option>
                    <option value='delete'>!! 完全に削除 !!</option>
                </select>
                <input type="submit" name="" id="doaction2" class="button-secondary action" value="適用"  />
            </div>
            <div class="alignleft actions">
            </div>
            <div class='tablenav-pages one-page'><span class="displaying-num">9項目</span>
                <span class='pagination-links'><a class='first-page disabled' title='最初のページへ' href='http://localhost/wordpress/wp-admin/edit.php'>&laquo;</a>
                    <a class='prev-page disabled' title='前のページへ' href='http://localhost/wordpress/wp-admin/edit.php?paged=1'>&lsaquo;</a>
                    <span class="paging-input">1 / <span class='total-pages'>1</span></span>
                    <a class='next-page disabled' title='次のページへ' href='http://localhost/wordpress/wp-admin/edit.php?paged=1'>&rsaquo;</a>
                    <a class='last-page disabled' title='最後のページへ' href='http://localhost/wordpress/wp-admin/edit.php?paged=1'>&raquo;</a></span></div>
            <br class="clear" />
        </div>

    </form>

</div>
<?php
if (!$single) {
    echo $pagination;
}
?>



