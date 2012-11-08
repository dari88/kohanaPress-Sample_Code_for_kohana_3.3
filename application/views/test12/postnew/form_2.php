<form method="get" action="">
    <table style="display:none;">
        <tbody id="com-reply">
            <tr id="replyrow" style="display:none;">
                <td colspan="2" class="colspanchange">
                    <div id="replyhead" style="display:none;"><h5>コメントに返信</h5></div>
                    <div id="edithead" style="display:none;">
                        <div class="inside">
                            <label for="author">名前</label>
                            <input type="text" name="newcomment_author" size="50" value="" tabindex="101" id="author" />
                        </div>
                        <div class="inside">
                            <label for="author-email">メールアドレス</label>
                            <input type="text" name="newcomment_author_email" size="50" value="" tabindex="102" id="author-email" />
                        </div>
                        <div class="inside">
                            <label for="author-url">URL</label>
                            <input type="text" id="author-url" name="newcomment_author_url" size="103" value="" tabindex="103" />
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div id="replycontainer">
                        <div id="wp-replycontent-wrap" class="wp-editor-wrap html-active">
                            <div id="wp-replycontent-editor-container" class="wp-editor-container">
                                <textarea class="wp-editor-area" rows="20" tabindex="104" cols="40" name="replycontent" id="replycontent"></textarea>
                            </div>
                        </div>
                    </div>
                    <p id="replysubmit" class="submit">
                        <a href="#comments-form" class="cancel button-secondary alignleft" tabindex="106">キャンセル</a>
                        <a href="#comments-form" class="save button-primary alignright" tabindex="104">
                            <span id="savebtn" style="display:none;">コメントを更新</span>
                            <span id="replybtn" style="display:none;">返事を送信</span></a>
                        <img class="waiting" style="display:none;" src="/includes/wp/admin/images/wpspin_light.gif" alt="" />
                        <span class="error" style="display:none;"></span>
                        <br class="clear" />
                    </p>
                    <input type="hidden" name="user_ID" id="user_ID" value="1" />
                    <input type="hidden" name="action" id="action" value="" />
                    <input type="hidden" name="comment_ID" id="comment_ID" value="" />
                    <input type="hidden" name="comment_post_ID" id="comment_post_ID" value="" />
                    <input type="hidden" name="status" id="status" value="" />
                    <input type="hidden" name="position" id="position" value="1" />
                    <input type="hidden" name="checkbox" id="checkbox" value="0" />
                    <input type="hidden" name="mode" id="mode" value="single" />
                    <input type="hidden" id="_ajax_nonce-replyto-comment" name="_ajax_nonce-replyto-comment" value="b17e745ead" />
                    <input type="hidden" id="_wp_unfiltered_html_comment" name="_wp_unfiltered_html_comment" value="b4fcfa0e6b" />
                </td>
            </tr>
        </tbody>
    </table>
</form>