<form id="wp-link" tabindex="-1">
    <input type="hidden" id="_ajax_linking_nonce" name="_ajax_linking_nonce" value="8c32a48e63" />	<div id="link-selector">
        <div id="link-options">
            <p class="howto">リンク先 URL を入力してください</p>
            <div>
                <label><span>URL</span>
                    <input id="url-field" type="text" tabindex="10" name="href" /></label>
            </div>
            <div>
                <label><span>タイトル</span>
                    <input id="link-title-field" type="text" tabindex="20" name="linktitle" /></label>
            </div>
            <div class="link-target">
                <label><input type="checkbox" id="link-target-checkbox" tabindex="30" /> リンクを新ウィンドウまたはタブで開く</label>
            </div>
        </div>
        <p class="howto toggle-arrow " id="internal-toggle">または既存のコンテンツにリンク</p>
        <div id="search-panel" style="display:none">
            <div class="link-search-wrapper">
                <label>
                    <span>検索</span>
                    <input type="text" id="search-field" class="link-search-field" tabindex="60" autocomplete="off" />
                    <img class="waiting" src="/includes/wp/admin/images/wpspin_light.gif" alt="" />
                </label>
            </div>
            <div id="search-results" class="query-results">
                <ul></ul>
                <div class="river-waiting">
                    <img class="waiting" src="/includes/wp/admin/images/wpspin_light.gif" alt="" />
                </div>
            </div>
            <div id="most-recent-results" class="query-results">
                <div class="query-notice"><em>検索キーワードが指定されていません。最近の項目を表示しています。</em></div>
                <ul></ul>
                <div class="river-waiting">
                    <img class="waiting" src="/includes/wp/admin/images/wpspin_light.gif" alt="" />
                </div>
            </div>
        </div>
    </div>
    <div class="submitbox">
        <div id="wp-link-cancel">
            <a class="submitdelete deletion" href="#">キャンセル</a>
        </div>
        <div id="wp-link-update">
            <input type="submit" tabindex="100" value="リンク追加" class="button-primary" id="wp-link-submit" name="wp-link-submit">
        </div>
    </div>
</form>