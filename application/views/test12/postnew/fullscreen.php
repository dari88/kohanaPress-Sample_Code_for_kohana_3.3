<div id="wp-fullscreen-body">
    <div id="fullscreen-topbar">
        <div id="wp-fullscreen-toolbar">
            <div id="wp-fullscreen-close"><a href="#" onclick="fullscreen.off();return false;">フルスクリーンモードを終了</a></div>
            <div id="wp-fullscreen-central-toolbar" style="width:606px;">

                <div id="wp-fullscreen-mode-bar"><div id="wp-fullscreen-modes">
                        <a href="#" onclick="fullscreen.switchmode('tinymce');return false;">ビジュアル</a>
                        <a href="#" onclick="fullscreen.switchmode('html');return false;">HTML</a>
                    </div></div>

                <div id="wp-fullscreen-button-bar"><div id="wp-fullscreen-buttons" class="wp_themeSkin">

                        <div>
                            <a title="太字 (Ctrl + B)" onclick="fullscreen.b();return false;" class="mceButton mceButtonEnabled mce_bold" href="#" id="wp_fs_bold" role="button" aria-pressed="false">
                                <span class="mceIcon mce_bold"></span>
                            </a>
                        </div>

                        <div>
                            <a title="斜体 (Ctrl + I)" onclick="fullscreen.i();return false;" class="mceButton mceButtonEnabled mce_italic" href="#" id="wp_fs_italic" role="button" aria-pressed="false">
                                <span class="mceIcon mce_italic"></span>
                            </a>
                        </div>
                        <div><span aria-orientation="vertical" role="separator" class="mceSeparator"></span></div>

                        <div>
                            <a title="番号なしリスト (Alt + Shift + U)" onclick="fullscreen.ul();return false;" class="mceButton mceButtonEnabled mce_bullist" href="#" id="wp_fs_bullist" role="button" aria-pressed="false">
                                <span class="mceIcon mce_bullist"></span>
                            </a>
                        </div>

                        <div>
                            <a title="番号付きリスト (Alt + Shift + O)" onclick="fullscreen.ol();return false;" class="mceButton mceButtonEnabled mce_numlist" href="#" id="wp_fs_numlist" role="button" aria-pressed="false">
                                <span class="mceIcon mce_numlist"></span>
                            </a>
                        </div>
                        <div><span aria-orientation="vertical" role="separator" class="mceSeparator"></span></div>

                        <div>
                            <a title="Blockquote (Alt + Shift + Q)" onclick="fullscreen.blockquote();return false;" class="mceButton mceButtonEnabled mce_blockquote" href="#" id="wp_fs_blockquote" role="button" aria-pressed="false">
                                <span class="mceIcon mce_blockquote"></span>
                            </a>
                        </div>

                        <div class="wp-fullscreen-both">
                            <a title="画像の挿入／編集 (Alt + Shift + M)" onclick="fullscreen.medialib();return false;" class="mceButton mceButtonEnabled mce_image" href="#" id="wp_fs_image" role="button" aria-pressed="false">
                                <span class="mceIcon mce_image"></span>
                            </a>
                        </div>
                        <div><span aria-orientation="vertical" role="separator" class="mceSeparator"></span></div>

                        <div class="wp-fullscreen-both">
                            <a title="リンクの挿入／編集 (Alt + Shift + A)" onclick="fullscreen.link();return false;" class="mceButton mceButtonEnabled mce_link" href="#" id="wp_fs_link" role="button" aria-pressed="false">
                                <span class="mceIcon mce_link"></span>
                            </a>
                        </div>

                        <div>
                            <a title="リンクを外す (Alt + Shift + S)" onclick="fullscreen.unlink();return false;" class="mceButton mceButtonEnabled mce_unlink" href="#" id="wp_fs_unlink" role="button" aria-pressed="false">
                                <span class="mceIcon mce_unlink"></span>
                            </a>
                        </div>
                        <div><span aria-orientation="vertical" role="separator" class="mceSeparator"></span></div>

                        <div>
                            <a title="ヘルプ (Alt + Shift + H)" onclick="fullscreen.help();return false;" class="mceButton mceButtonEnabled mce_help" href="#" id="wp_fs_help" role="button" aria-pressed="false">
                                <span class="mceIcon mce_help"></span>
                            </a>
                        </div>

                    </div></div>

                <div id="wp-fullscreen-save">
                    <span>保存しました。</span>
                    <img src="images/wpspin_light.gif" alt="" />
                    <input type="button" class="button-primary" value="保存" onclick="fullscreen.save();" />
                </div>

            </div>
        </div>
    </div>

    <div id="wp-fullscreen-wrap" style="width:606px;">
        <label id="wp-fullscreen-title-prompt-text" for="wp-fullscreen-title">タイトルを入力してください</label>
        <input type="text" id="wp-fullscreen-title" value="" autocomplete="off" />

        <div id="wp-fullscreen-container">
            <textarea id="wp_mce_fullscreen"></textarea>
        </div>

        <div id="wp-fullscreen-status">
            <div id="wp-fullscreen-count">語数: <span class="word-count">0</span></div>
            <div id="wp-fullscreen-tagline">Just write.</div>
        </div>
    </div>
</div>
<div class="fullscreen-overlay" id="fullscreen-overlay"></div>
<div class="fullscreen-overlay fullscreen-fader fade-600" id="fullscreen-fader"></div>
