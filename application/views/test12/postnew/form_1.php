<form name="post" action="" method="post" id="post">

    <input type='hidden' id='post_ID' name='post_ID' value='<?php echo $post_ID ?>' />
    
    <div id="poststuff" class="metabox-holder has-right-sidebar">
        <div id="side-info-column" class="inner-sidebar">
            <div id="side-sortables" class="meta-box-sortables"><div id="submitdiv" class="postbox " >
                    <div class="handlediv" title="クリックで切替"><br /></div><h3 class='hndle'><span>公開</span></h3>
                    <div class="inside">
                        <div class="submitbox" id="submitpost">

                            <div id="minor-publishing">

                                <div style="display:none;">
                                    <p class="submit">
                                        <input type="submit" name="save" id="save" class="button" value="保存"  /></p></div>

                                <div id="minor-publishing-actions">
                                    <div id="save-action">
                                        <input  type="submit" name="save" id="save-post" value="下書きとして保存" tabindex="4" class="button button-highlighted" />
                                        <img src="/includes/wp/admin/images/wpspin_light.gif" class="ajax-loading" id="draft-ajax-loading" alt="" />
                                    </div>

                                    <div class="clear"></div>
                                </div>
                                <div id="misc-publishing-actions">

                                </div>
                                <div class="clear"></div>
                            </div>

                            <div id="major-publishing-actions">

                                <div id="publishing-action">
                                    <img src="/includes/wp/admin/images/wpspin_light.gif" class="ajax-loading" id="ajax-loading" alt="" />
                                    <input name="original_publish" type="hidden" id="original_publish" value="公開" />
                                    <input type="submit" name="publish" id="publish" class="button-primary" value="公開" tabindex="5" accesskey="p"  /></div>
                                <div class="clear"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div id="formatdiv" class="postbox " >
                    <div class="handlediv" title="クリックで切替"><br /></div><h3 class='hndle'><span>フォーマット</span></h3>
                    <div class="inside">
                        <div id="post-formats-select">
                            <input type="radio" name="post_format" class="post-format" id="post-format-0" value="0"  checked='checked' /> <label for="post-format-0">標準</label>
                            <br /><input type="radio" name="post_format" class="post-format" id="post-format-aside" value="aside"  /> <label for="post-format-aside">アサイド</label>
                            <br /><input type="radio" name="post_format" class="post-format" id="post-format-link" value="link"  /> <label for="post-format-link">リンク</label>
                            <br /><input type="radio" name="post_format" class="post-format" id="post-format-gallery" value="gallery"  /> <label for="post-format-gallery">ギャラリー</label>
                            <br /><input type="radio" name="post_format" class="post-format" id="post-format-status" value="status"  /> <label for="post-format-status">ステータス</label>
                            <br /><input type="radio" name="post_format" class="post-format" id="post-format-quote" value="quote"  /> <label for="post-format-quote">引用</label>
                            <br /><input type="radio" name="post_format" class="post-format" id="post-format-image" value="image"  /> <label for="post-format-image">画像</label>
                            <br />
                        </div>
                    </div>
                </div>
                <div id="categorydiv" class="postbox " >
                    <div class="handlediv" title="クリックで切替"><br /></div><h3 class='hndle'><span>カテゴリー</span></h3>
                    <div class="inside">
                        <div id="taxonomy-category" class="categorydiv">
                            <ul id="category-tabs" class="category-tabs">
                                <li class="tabs"><a href="#category-all" tabindex="3">カテゴリー一覧</a></li>
                                <li class="hide-if-no-js"><a href="#category-pop" tabindex="3">よく使うもの</a></li>
                            </ul>

                            <div id="category-pop" class="tabs-panel" style="display: none;">
                                <ul id="categorychecklist-pop" class="categorychecklist form-no-clear" >

                                    <li id="popular-category-1" class="popular-category">
                                        <label class="selectit">
                                            <input id="in-popular-category-1" type="checkbox"  value="1" />
                                            未分類			</label>
                                    </li>

                                </ul>
                            </div>

                            <div id="category-all" class="tabs-panel">
                                <input type='hidden' name='post_category[]' value='0' />			
                                <ul id="categorychecklist" class="list:category categorychecklist form-no-clear">

                                    <li id='category-1' class="popular-category"><label class="selectit">
                                            <input value="1" type="checkbox" name="post_category[]" id="in-category-1" /> 未分類</label></li>
                                </ul>
                            </div>
                            <div id="category-adder" class="wp-hidden-children">
                                <h4>
                                    <a id="category-add-toggle" href="#category-add" class="hide-if-no-js" tabindex="3">
                                        + 新規カテゴリーを追加					</a>
                                </h4>
                                <p id="category-add" class="category-add wp-hidden-child">
                                    <label class="screen-reader-text" for="newcategory">新規カテゴリーを追加</label>
                                    <input type="text" name="newcategory" id="newcategory" class="form-required form-input-tip" value="新規カテゴリー名" tabindex="3" aria-required="true"/>
                                    <label class="screen-reader-text" for="newcategory_parent">
                                        親カテゴリー:					</label>
                                    <select name='newcategory_parent' id='newcategory_parent' class='postform'  tabindex="3">
                                        <option value='-1'>&mdash; 親カテゴリー &mdash;</option>
                                        <option class="level-0" value="1">未分類</option>
                                    </select>
                                    <input type="button" id="category-add-submit" class="add:categorychecklist:category-add button category-add-sumbit" value="新規カテゴリーを追加" tabindex="3" />
                                    <input type="hidden" id="_ajax_nonce-add-category" name="_ajax_nonce-add-category" value="cd39ec3061" />					<span id="category-ajax-response"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tagsdiv-post_tag" class="postbox " >
                    <div class="handlediv" title="クリックで切替"><br /></div><h3 class='hndle'><span>タグ</span></h3>
                    <div class="inside">
                        <div class="tagsdiv" id="post_tag">
                            <div class="jaxtag">
                                <div class="nojs-tags hide-if-js">
                                    <p>タグの追加もしくは削除</p>
                                    <textarea name="tax_input[post_tag]" rows="3" cols="20" class="the-tags" id="tax-input-post_tag" ></textarea></div>
                                <div class="ajaxtag hide-if-no-js">
                                    <label class="screen-reader-text" for="new-tag-post_tag">タグ</label>
                                    <div class="taghint">新規タグを追加</div>
                                    <p><input type="text" id="new-tag-post_tag" name="newtag[post_tag]" class="newtag form-input-tip" size="16" autocomplete="off" value="" />
                                        <input type="button" class="button tagadd" value="追加" tabindex="3" /></p>
                                </div>
                                <p class="howto">タグが複数ある場合はコンマで区切ってください</p>
                            </div>
                            <div class="tagchecklist"></div>
                        </div>
                        <p class="hide-if-no-js"><a href="#titlediv" class="tagcloud-link" id="link-post_tag">よく使われているタグから選択</a></p>
                    </div>
                </div>
                <div id="postimagediv" class="postbox " >
                    <div class="handlediv" title="クリックで切替"><br /></div><h3 class='hndle'><span>アイキャッチ画像</span></h3>
                    <div class="inside">
                        <p class="hide-if-no-js">
                            <a title="アイキャッチ画像を設定" href="test12_mediaupload?TB_iframe=1" id="set-post-thumbnail" class="thickbox">アイキャッチ画像を設定</a></p></div>
                </div>
            </div></div>

        <div id="post-body">
            <div id="post-body-content">
                <div id="titlediv">
                    <div id="titlewrap">
                        <label class="hide-if-no-js" style="visibility:hidden" id="title-prompt-text" for="title">タイトルを入力してください</label>
                        <input type="text" name="post_title" size="30" tabindex="1" value="<?php echo $post_title ?>" id="title" autocomplete="off" />
                    </div>
                    <div class="inside">
                        <div id="edit-slug-box">
                        </div>
                    </div>
                    <input type="hidden" id="samplepermalinknonce" name="samplepermalinknonce" value="21d6df3181" /></div>

                <div id="postdivrich" class="postarea">

                    <div id="wp-content-wrap" class="wp-editor-wrap tmce-active">
                        <link rel='stylesheet' id='editor-buttons-css'  href='loadcss?c=1&dir=rtl&AMP;load=editor-buttons' type='text/css' media='all' />
                        <div id="wp-content-editor-tools" class="wp-editor-tools"><a id="content-html" class="hide-if-no-js wp-switch-editor switch-html" onclick="switchEditors.switchto(this);">HTML</a>
                            <a id="content-tmce" class="hide-if-no-js wp-switch-editor switch-tmce" onclick="switchEditors.switchto(this);">ビジュアル</a>
                            <div id="wp-content-media-buttons" class="hide-if-no-js wp-media-buttons">
                                <a href="test12_mediaupload?TB_iframe=1&width=420&height=320" class="thickbox add_media"  id="content-add_media" title="メディアを追加" onclick="return false;">アップロード/挿入 <img src="/includes/wp/admin/images/media-button.png?ver=20111005" width="15" height="15" /></a>
                            </div>
                        </div>
                        <div id="wp-content-editor-container" class="wp-editor-container">
                            <textarea class="wp-editor-area" rows="20" tabindex="1" cols="40" name="content" id="content" ><?php echo $content ?></textarea></div>
                    </div>


                    <table id="post-status-info" cellspacing="0"><tbody><tr>
                                <td id="wp-word-count">語数: <span class="word-count">0</span></td>
                                <td class="autosave-info">
                                    <span class="autosave-message">&nbsp;</span>
                                </td>
                            </tr></tbody></table>

                </div>

                <div id="normal-sortables" class="meta-box-sortables"><div id="postexcerpt" class="postbox  hide-if-js" >
                        <div class="handlediv" title="クリックで切替"><br /></div><h3 class='hndle'><span>抜粋</span></h3>
                        <div class="inside">
                            <label class="screen-reader-text" for="excerpt">抜粋</label><textarea rows="1" cols="40" name="excerpt" tabindex="6" id="excerpt"></textarea>
                            <p>抜粋は投稿内容から自分で作成する要約で、テーマの中で使用できます (オプション)。<a href="http://wpdocs.sourceforge.jp/Template_Tags/the_excerpt" target="_blank">詳しくは解説ページ</a>をご覧ください。</p>
                        </div>
                    </div>
                    <div id="trackbacksdiv" class="postbox  hide-if-js" >
                        <div class="handlediv" title="クリックで切替"><br /></div><h3 class='hndle'><span>トラックバック送信</span></h3>
                        <div class="inside">
                            <p><label for="trackback_url">トラックバック送信先:</label> 
                                <input type="text" name="trackback_url" id="trackback_url" class="code" tabindex="7" value="" /><br /> (複数送信の場合は URL を半角スペースで区切る)</p>
                            <p>トラックバックはリンクしたことをリンク先に知らせる方法として、レガシーなブログシステムに対して用いられます。ほかの WordPress のサイトにリンクする場合は、リンク先<a href="http://wpdocs.sourceforge.jp/Introduction_to_Blogging#Managing_Comments" target="_blank">ピンバック</a>による通知を自動的に受けるので、さらにトラックバックをする必要はありません。</p>
                        </div>
                    </div>
                    <div id="postcustom" class="postbox  hide-if-js" >
                        <div class="handlediv" title="クリックで切替"><br /></div><h3 class='hndle'><span>カスタムフィールド</span></h3>
                        <div class="inside">
                            <div id="postcustomstuff">
                                <div id="ajax-response"></div>

                                <table id="list-table" style="display: none;">
                                    <thead>
                                        <tr>
                                            <th class="left">名前</th>
                                            <th>値</th>
                                        </tr>
                                    </thead>
                                    <tbody id="the-list" class="list:meta">
                                        <tr><td></td></tr>
                                    </tbody>
                                </table><p><strong>カスタムフィールドを追加:</strong></p>
                                <table id="newmeta">
                                    <thead>
                                        <tr>
                                            <th class="left"><label for="metakeyselect">名前</label></th>
                                            <th><label for="metavalue">値</label></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td id="newmetaleft" class="left">
                                                <input type="text" id="metakeyinput" name="metakeyinput" tabindex="7" value="" />
                                            </td>
                                            <td><textarea id="metavalue" name="metavalue" rows="2" cols="25" tabindex="8"></textarea></td>
                                        </tr>

                                        <tr><td colspan="2" class="submit">
                                                <input type="submit" name="addmeta" id="addmetasub" class="add:the-list:newmeta" value="カスタムフィールドを追加" tabindex="9"  />
                                                <input type="hidden" id="_ajax_nonce-add-meta" name="_ajax_nonce-add-meta" value="2166f0612b" /></td></tr>
                                    </tbody>
                                </table>
                            </div>
                            <p>カスタムフィールドは投稿に特別なメタデータを追加するために使うものです。追加されたカスタムフィールドは<a href="http://wpdocs.sourceforge.jp/Using_Custom_Fields" target="_blank">テーマの中で利用</a>できます。</p>
                        </div>
                    </div>
                    <div id="commentstatusdiv" class="postbox  hide-if-js" >
                        <div class="handlediv" title="クリックで切替"><br /></div><h3 class='hndle'><span>ディスカッション</span></h3>
                        <div class="inside">
                            <input name="advanced_view" type="hidden" value="1" />
                            <p class="meta-options">
                                <label for="comment_status" class="selectit">
                                    <input name="comment_status" type="checkbox" id="comment_status" value="open"  checked='checked' /> コメントの投稿を許可する。</label><br />
                                <label for="ping_status" class="selectit">
                                    <input name="ping_status" type="checkbox" id="ping_status" value="open"  checked='checked' /> このページで <a href="http://wpdocs.sourceforge.jp/%E3%83%96%E3%83%AD%E3%82%B0%E5%85%A5%E9%96%80#.E3.82.B3.E3.83.A1.E3.83.B3.E3.83.88.E7.AE.A1.E7.90.86" target="_blank">トラックバックとピンバック</a>を許可する。</label>
                            </p>
                        </div>
                    </div>
                    <div id="slugdiv" class="postbox  hide-if-js" >
                        <div class="handlediv" title="クリックで切替"><br /></div><h3 class='hndle'><span>スラッグ</span></h3>
                        <div class="inside">
                            <label class="screen-reader-text" for="post_name">スラッグ</label>
                            <input name="post_name" type="text" size="13" id="post_name" value="" />
                        </div>
                    </div>
                    <div id="authordiv" class="postbox  hide-if-js" >
                        <div class="handlediv" title="クリックで切替"><br /></div><h3 class='hndle'><span>作成者</span></h3>
                        <div class="inside">
                            <label class="screen-reader-text" for="post_author_override">作成者</label>
                            <select name='post_author_override' id='post_author_override' class=''>
                                <option value='1' selected='selected'>admin</option>
                                <option value='3'>dari88</option>
                                <option value='4'>kawamoto</option>
                            </select></div>
                    </div>
                </div><div id="advanced-sortables" class="meta-box-sortables"></div>
            </div>
        </div>
        <br class="clear" />
    </div><!-- /poststuff -->
</form>