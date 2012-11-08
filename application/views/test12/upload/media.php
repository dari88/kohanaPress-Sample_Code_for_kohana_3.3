<div class="wrap">
    <form id="posts-filter" action="" method="get">
        <input type="hidden" id="_wpnonce" name="_wpnonce" value="fcef64b0b2" />
        <input type="hidden" name="_wp_http_referer" value="test12/upload" />
        <input type="hidden" name="page" value="<?php echo $page ?>" />
        <table class="wp-list-table widefat fixed media" cellspacing="0">
            <thead>
                <tr>
                    <th scope='col' id='cb' class='manage-column column-cb check-column'  style=""><input type="checkbox" /></th>
                    <th scope='col' id='icon' class='manage-column column-icon'  style=""></th>
                    <th scope='col' id='title' class='manage-column column-title sortable desc'  style="">
                        <a href="http://localhost/wordpress/wp-admin/upload.php?orderby=title&#038;order=asc">
                            <span>ファイル</span><span class="sorting-indicator"></span>
                        </a>
                    </th>
                    <th scope='col' id='author' class='manage-column column-author sortable desc'  style="">
                        <a href="http://localhost/wordpress/wp-admin/upload.php?orderby=author&#038;order=asc">
                            <span>作成者</span><span class="sorting-indicator"></span>
                        </a>
                    </th>
                    <th scope='col' id='parent' class='manage-column column-parent sortable desc'  style="">
                        <a href="http://localhost/wordpress/wp-admin/upload.php?orderby=parent&#038;order=asc">
                            <span>リンク先:</span><span class="sorting-indicator"></span>
                        </a>
                    </th>
                    <th scope='col' id='comments' class='manage-column column-comments num sortable desc'  style="">
                        <a href="http://localhost/wordpress/wp-admin/upload.php?orderby=comment_count&#038;order=asc">
                            <span><span class="vers">
                                    <img alt="コメント" src="http://localhost/wordpress/wp-admin/images/comment-grey-bubble.png" />
                                </span></span>
                            <span class="sorting-indicator"></span>
                        </a>
                    </th>
                    <th scope='col' id='date' class='manage-column column-date sortable asc'  style="">
                        <a href="http://localhost/wordpress/wp-admin/upload.php?orderby=date&#038;order=desc">
                            <span>日付</span><span class="sorting-indicator"></span>
                        </a>
                    </th>
                </tr>
            </thead>

            <tfoot>
                <tr>
                    <th scope='col'  class='manage-column column-cb check-column'  style="">
                        <input type="checkbox" />
                    </th>
                    <th scope='col'  class='manage-column column-icon'  style=""></th>
                    <th scope='col'  class='manage-column column-title sortable desc'  style="">
                        <a href="">
                            <span>ファイル</span><span class="sorting-indicator"></span>
                        </a>
                    </th>
                    <th scope='col'  class='manage-column column-author sortable desc'  style="">
                        <a href="">
                            <span>作成者</span><span class="sorting-indicator"></span>
                        </a>
                    </th>
                    <th scope='col'  class='manage-column column-parent sortable desc'  style="">
                        <a href="">
                            <span>リンク先:</span><span class="sorting-indicator"></span>
                        </a>
                    </th>
                    <th scope='col'  class='manage-column column-comments num sortable desc'  style="">
                        <a href="">
                            <span><span class="vers">
                                    <img alt="コメント" src="/includes/wp/admin/images/comment-grey-bubble.png" />
                                </span></span>
                            <span class="sorting-indicator"></span>
                        </a>
                    </th>
                    <th scope='col'  class='manage-column column-date sortable asc'  style="">
                        <a href="">
                            <span>日付</span><span class="sorting-indicator"></span>
                        </a>
                    </th>	
                </tr>
            </tfoot>

            <tbody id="the-list">

                <?PHP
                foreach ($data as $d) {
                    $id = $d['ID'];
                    $post_author = $d['post_author'];
                    $user_login = Model::factory('test12_posts')->id2name($post_author);
                    $title = HTML::chars($d['title']);
                    $description = $d['description'];
                    $post_date = $d['post_date'];
                    $tn1_name = $d['tn1_name'];
                    $tn2_name = $d['tn2_name'];
                    $org_name = $d['org_name'];
                    $extention = $d['extention'];
                    ?>


                    <tr id='post-83' class='author-self status-inherit' valign="top">
                        <th scope="row" class="check-column">
                            <input type="checkbox" name="media[]" value="<?php echo $id ?>" />
                        </th>
                        <td class="column-image media-icon">				
                            <a href="<?php echo "test12_mediaview?id=" . $id . "&type=tn2" ?>" class="thickbox"  rel="mediavew1" title="<?php echo $org_name ?>" >
                                <img  src="<?php echo "test12_mediaview?id=" . $id . "&type=tn1" ?>"  alt="<?php echo $org_name ?>" title="大きな画像" />				
                            </a>

                        </td>
                        <td class='title column-title'>
                            <strong><a href="<?php echo "test12_mediaview?id=" . $id . "&type=org&html=1" ?>" target="_blank" title="オリジナル画像" ><?php echo $org_name ?></a></strong>
                            <p><?php echo $extention ?></p>
                            <div class="row-actions">
                                <span class='edit'><a href="test12_upload">編集</a> | </span>
                                <span class='delete'><a class='submitdelete' onclick='return showNotice.warn();' href='test12_upload?page=<?php echo $page ?>&action=delete&media[]=<?php echo $id ?>'>完全に削除する</a> | </span>
                                <span class='view'><a href="test12_upload" title="&#8220;自動下書き&#8221; を表示" rel="permalink">表示</a></span>
                            </div>		
                        </td>
                        <td class='author column-author'><?php echo $user_login ?></td>
                        <td class='parent column-parent'>
                            <strong><a href="">メディア</a></strong>
                        </td>
                        <td class="comments column-comments num">
                            <div class="post-com-count-wrapper">
                                <a href='' title='0件の承認待ち' class='post-com-count'><span class='comment-count'>0</span></a>			
                            </div>
                        </td>
                        <td class='date column-date'><?php echo $post_date ?></td>
                    </tr>


                <?php } ?>
            </tbody>
        </table>

        <div class="tablenav bottom">

            <div class="alignleft actions">
                <select name='action'>
                    <option value='-1' selected='selected'>一括操作</option>
                    <option value='delete'>完全に削除する</option>
                </select>
                <input type="submit" name="" id="doaction" class="button-secondary action" value="適用"  />
            </div>
            <div class="alignleft actions">
            </div>
            <br class="clear" />
        </div>

        <div id="ajax-response"></div>
        <div id="find-posts" class="find-box" style="display:none;">
            <div id="find-posts-head" class="find-box-head">投稿またはページを検索</div>
            <div class="find-box-inside">
                <div class="find-box-search">

                    <input type="hidden" name="affected" id="affected" value="" />
                    <input type="hidden" id="_ajax_nonce" name="_ajax_nonce" value="12c8d3362a" />				<label class="screen-reader-text" for="find-posts-input">検索</label>
                    <input type="text" id="find-posts-input" name="ps" value="" />
                    <input type="button" id="find-posts-search" value="検索" class="button" /><br />

                    <input type="radio" name="find-posts-what" id="find-posts-post" value="post"  checked='checked' />
                    <label for="find-posts-post">投稿</label>
                    <input type="radio" name="find-posts-what" id="find-posts-page" value="page"  />
                    <label for="find-posts-page">固定ページ</label>
                </div>
                <div id="find-posts-response"></div>
            </div>
            <div class="find-box-buttons">
                <input id="find-posts-close" type="button" class="button alignleft" value="閉じる" />
                <input type="submit" name="find-posts-submit" id="find-posts-submit" class="button-primary alignright" value="選択"  />		</div>
        </div>
        <br class="clear" />

    </form>
</div>
<?php
if (!$single) {
echo $pagination;
}
?>



