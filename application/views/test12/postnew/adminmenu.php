<?php
$open = ' wp-has-current-submenu wp-menu-open open-if-no-js ';
$close = ' wp-not-current-submenu ';
?>

<div id="adminmenuback"></div>
<div id="adminmenuwrap">
    <div id="adminmenushadow"></div>
    <ul id="adminmenu" role="navigation">


        <li class="wp-first-item wp-has-submenu wp-not-current-submenu menu-top menu-top-first menu-icon-dashboard menu-top-last" id="menu-dashboard">
            <div class='wp-menu-image'><a href='test12_edit'><br /></a></div><div class="wp-menu-arrow"><div></div></div><a href='test12_edit' class="wp-first-item wp-has-submenu wp-not-current-submenu menu-top menu-top-first menu-icon-dashboard menu-top-last" tabindex="1" aria-haspopup="true">ダッシュボード</a>
            <div class='wp-submenu'>
                <div class='wp-submenu-wrap'>
                    <div class='wp-submenu-head'>ダッシュボード</div>
                    <ul>
                        <li class="wp-first-item"><a href='test12_edit' class="wp-first-item" tabindex="1">ホーム</a></li>
                        <li><a href='test12_edit' tabindex="1">更新 
                                <span class='update-plugins count-1' title=''>
                                    <span class='update-count'>0</span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>

        <li class="wp-not-current-submenu wp-menu-separator"><div class="separator"></div></li>

        <li class="wp-has-submenu <?php echo ($menu == 'post') ? $open : $close; ?> open-if-no-js menu-top menu-icon-post menu-top-first" id="menu-posts">
            <div class='wp-menu-image'><a href='test12_edit'><br /></a></div>
            <div class="wp-menu-arrow"><div></div></div>
            <a href='test12_edit' class="wp-has-submenu <?php echo ($menu == 'post') ? $open : $close; ?> menu-top menu-icon-post menu-top-first" tabindex="1">投稿</a>
            <div class='wp-submenu'>
                <div class='wp-submenu-wrap'>
                    <div class='wp-submenu-head'>投稿</div>
                    <ul>
                        <li class="wp-first-item">
                            <a href='test12_edit' class="wp-first-item" tabindex="1">投稿一覧</a>
                        </li>
                        <li class="current"><a href='test12_postnew' class="current" tabindex="1">新規追加</a></li>
                        <li><a href='edit-tags.php?taxonomy=category' tabindex="1">カテゴリー</a></li>
                        <li><a href='edit-tags.php?taxonomy=post_tag' tabindex="1">タグ</a></li>
                    </ul>
                </div>
            </div>
        </li>

        <li class="wp-has-submenu <?php echo ($menu == 'media') ? $open : $close; ?> menu-top menu-icon-media" id="menu-media">
            <div class='wp-menu-image'><a href='test12_upload'><br /></a></div><div class="wp-menu-arrow"><div></div></div><a href='test12_upload' class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-media" tabindex="1" aria-haspopup="true">メディア</a>
            <div class='wp-submenu'>
                <div class='wp-submenu-wrap'>
                    <div class='wp-submenu-head'>メディア</div>
                    <ul>
                        <li class="wp-first-item">
                            <a href='test12_upload' class="wp-first-item" tabindex="1">ライブラリ</a>
                        </li>
                        <li><a href='test12_upload?p=upload' tabindex="1">新規追加</a></li>
                    </ul>
                </div>
            </div>
        </li>

        <li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-links" id="menu-links">
            <div class='wp-menu-image'><a href='link-manager.php'><br /></a></div><div class="wp-menu-arrow"><div></div></div><a href='link-manager.php' class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-links" tabindex="1" aria-haspopup="true">リンク</a>
            <div class='wp-submenu'>
                <div class='wp-submenu-wrap'>
                    <div class='wp-submenu-head'>リンク</div>
                    <ul>
                        <li class="wp-first-item">
                            <a href='link-manager.php' class="wp-first-item" 
                               tabindex="1">すべてのリンク</a>
                        </li>
                        <li><a href='link-add.php' tabindex="1">新規追加</a></li>
                        <li><a href='edit-tags.php?taxonomy=link_category' tabindex="1">リンクカテゴリー</a></li>
                    </ul>
                </div>
            </div>
        </li>

        <li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page" id="menu-pages">
            <div class='wp-menu-image'><a href='edit.php?post_type=page'><br /></a></div>
            <div class="wp-menu-arrow"><div></div></div>
            <a href='edit.php?post_type=page' class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page" 
               tabindex="1" aria-haspopup="true">固定ページ</a>
            <div class='wp-submenu'>
                <div class='wp-submenu-wrap'>
                    <div class='wp-submenu-head'>固定ページ</div>
                    <ul>
                        <li class="wp-first-item">
                            <a href='edit.php?post_type=page' class="wp-first-item" tabindex="1">固定ページ一覧</a>
                        </li>
                        <li><a href='post-new.php?post_type=page' tabindex="1">新規追加</a></li>
                    </ul>
                </div>
            </div>
        </li>

        <li class="wp-not-current-submenu menu-top menu-icon-comments menu-top-last" id="menu-comments">
            <div class='wp-menu-image'><a href='edit-comments.php'><br /></a></div>
            <div class="wp-menu-arrow"><div></div></div>
            <a href='edit-comments.php' class="wp-not-current-submenu menu-top menu-icon-comments menu-top-last"
               tabindex="1">コメント 
                <span class='awaiting-mod count-0'>
                    <span class='pending-count'>0</span>
                </span>
            </a>
        </li>

        <li class="wp-not-current-submenu wp-menu-separator"><div class="separator"></div></li>

        <li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-appearance menu-top-first" id="menu-appearance">
            <div class='wp-menu-image'><a href='themes.php'><br /></a></div><div class="wp-menu-arrow"><div></div></div><a href='themes.php' class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-appearance menu-top-first" tabindex="1" aria-haspopup="true">外観</a>
            <div class='wp-submenu'>
                <div class='wp-submenu-wrap'>
                    <div class='wp-submenu-head'>外観</div>
                    <ul>
                        <li class="wp-first-item"><a href='themes.php' class="wp-first-item" tabindex="1">テーマ</a></li>
                        <li><a href='widgets.php' tabindex="1">ウィジェット</a></li>
                        <li><a href='nav-menus.php' tabindex="1">メニュー</a></li>
                        <li><a href='themes.php?page=theme_options' tabindex="1">テーマ設定</a></li>
                        <li><a href='themes.php?page=custom-background' tabindex="1">背景</a></li>
                        <li><a href='themes.php?page=custom-header' tabindex="1">ヘッダー</a></li>
                        <li><a href='theme-editor.php' tabindex="1">テーマ編集</a></li>
                    </ul>
                </div>
            </div>
        </li>

        <li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-plugins" id="menu-plugins">
            <div class='wp-menu-image'><a href='plugins.php'><br /></a></div><div class="wp-menu-arrow"><div></div></div><a href='plugins.php' class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-plugins" tabindex="1" aria-haspopup="true">プラグイン <span class='update-plugins count-1'><span class='plugin-count'>1</span></span></a>
            <div class='wp-submenu'>
                <div class='wp-submenu-wrap'>
                    <div class='wp-submenu-head'>プラグイン <span class='update-plugins count-1'>
                            <span class='plugin-count'>1</span></span>
                    </div>
                    <ul>
                        <li class="wp-first-item">
                            <a href='plugins.php' class="wp-first-item" tabindex="1">インストール済みプラグイン</a>
                        </li>
                        <li><a href='plugin-install.php' tabindex="1">新規追加</a></li>
                        <li><a href='plugin-editor.php' tabindex="1">プラグイン編集</a></li>
                    </ul>
                </div>
            </div>
        </li>

        <li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-users" id="menu-users">
            <div class='wp-menu-image'><a href='users.php'><br /></a></div><div class="wp-menu-arrow"><div></div></div><a href='users.php' class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-users" tabindex="1" aria-haspopup="true">ユーザー</a>
            <div class='wp-submenu'>
                <div class='wp-submenu-wrap'>
                    <div class='wp-submenu-head'>ユーザー</div>
                    <ul>
                        <li class="wp-first-item"><a href='users.php' class="wp-first-item" tabindex="1">ユーザー一覧</a></li>
                        <li><a href='user-new.php' tabindex="1">新規追加</a></li>
                        <li><a href='profile.php' tabindex="1">あなたのプロフィール</a></li>
                    </ul>
                </div>
            </div>
        </li>

        <li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-tools" id="menu-tools">
            <div class='wp-menu-image'><a href='tools.php'><br /></a></div>
            <div class="wp-menu-arrow"><div></div></div>
            <a href='tools.php' class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-tools" tabindex="1" aria-haspopup="true">ツール</a>
            <div class='wp-submenu'>
                <div class='wp-submenu-wrap'>
                    <div class='wp-submenu-head'>ツール</div>
                    <ul>
                        <li class="wp-first-item"><a href='tools.php' class="wp-first-item" tabindex="1">利用可能なツール</a></li>
                        <li><a href='import.php' tabindex="1">インポート</a></li>
                        <li><a href='export.php' tabindex="1">エクスポート</a></li>
                    </ul>
                </div>
            </div>
        </li>

        <li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-settings menu-top-last" id="menu-settings">
            <div class='wp-menu-image'>
                <a href='options-general.php'><br /></a>
            </div>
            <div class="wp-menu-arrow"><div></div></div>
            <a href='options-general.php' class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-settings menu-top-last" tabindex="1" aria-haspopup="true">設定</a>
            <div class='wp-submenu'>
                <div class='wp-submenu-wrap'>
                    <div class='wp-submenu-head'>設定</div>
                    <ul>
                        <li class="wp-first-item">
                            <a href='options-general.php' class="wp-first-item" tabindex="1">一般</a>
                        </li>
                        <li><a href='options-writing.php' tabindex="1">投稿設定</a></li>
                        <li><a href='options-reading.php' tabindex="1">表示設定</a></li>
                        <li><a href='options-discussion.php' tabindex="1">ディスカッション</a></li>
                        <li><a href='options-media.php' tabindex="1">メディア</a></li>
                        <li><a href='options-privacy.php' tabindex="1">プライバシー</a></li>
                        <li><a href='options-permalink.php' tabindex="1">パーマリンク設定</a></li>
                    </ul>
                </div>
            </div>
        </li>
        
        <li id="collapse-menu" class="hide-if-no-js">
            <div id="collapse-button">
                <div></div>
            </div>
            <span>メニューを閉じる</span>
        </li>
    </ul>
</div>