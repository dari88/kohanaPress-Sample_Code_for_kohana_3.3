<!DOCTYPE html>
<!--[if IE 8]>
<html xmlns="http://www.w3.org/1999/xhtml" class="ie8"  dir="ltr" lang="ja">
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html xmlns="http://www.w3.org/1999/xhtml"  dir="ltr" lang="ja">
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>WordPress &rsaquo; アップロード &#8212; WordPress</title>
<script type="text/javascript">
//<![CDATA[
addLoadEvent = function(func){if(typeof jQuery!="undefined")jQuery(document).ready(func);else if(typeof wpOnload!='function'){wpOnload=func;}else{var oldonload=wpOnload;wpOnload=function(){oldonload();func();}}};
var userSettings = {'url':'/wordpress/','uid':'3','time':'1337407616'};
var ajaxurl = 'http://localhost/wordpress/wp-admin/admin-ajax.php', pagenow = 'media-upload-popup', adminpage = 'media-upload-popup',
isRtl = 0;
//]]>
</script>
<link rel='stylesheet' href='loadcss?c=1&dir=ltr&load=wp-admin,media' type='text/css' media='all' />
<link rel='stylesheet' id='imgareaselect-css'  href='/includes/wp/includes/js/imgareaselect/imgareaselect.css' type='text/css' media='all' />
<link rel='stylesheet' id='colors-css'  href='/includes/wp/admin/css/colors-fresh.css' type='text/css' media='all' />
<!--[if lte IE 7]>
<link rel='stylesheet' id='ie-css'  href='/includes/wp/admin/css/ie.css?ver=20111130' type='text/css' media='all' />
<![endif]-->

<script type='text/javascript'>
/* <![CDATA[ */
var pluploadL10n = {"queue_limit_exceeded":"\u30ad\u30e5\u30fc\u306b\u5165\u308c\u305f\u30d5\u30a1\u30a4\u30eb\u304c\u591a\u3059\u304e\u307e\u3059\u3002","file_exceeds_size_limit":"%s \u306f\u3001\u3053\u306e\u30b5\u30a4\u30c8\u306e\u30a2\u30c3\u30d7\u30ed\u30fc\u30c9\u30b5\u30a4\u30ba\u4e0a\u9650\u3092\u8d85\u3048\u3066\u3044\u307e\u3059\u3002","zero_byte_file":"\u3053\u306e\u30d5\u30a1\u30a4\u30eb\u306f\u7a7a\u3067\u3059\u3002\u5225\u306e\u30d5\u30a1\u30a4\u30eb\u3092\u304a\u8a66\u3057\u304f\u3060\u3055\u3044\u3002","invalid_filetype":"\u3053\u306e\u30d5\u30a1\u30a4\u30eb\u30bf\u30a4\u30d7\u306f\u8a31\u53ef\u3055\u308c\u3066\u3044\u307e\u305b\u3093\u3002\u5225\u306e\u30d5\u30a1\u30a4\u30eb\u3092\u304a\u8a66\u3057\u304f\u3060\u3055\u3044\u3002","not_an_image":"\u3053\u306e\u30d5\u30a1\u30a4\u30eb\u306f\u753b\u50cf\u3067\u306f\u3042\u308a\u307e\u305b\u3093\u3002\u5225\u306e\u30d5\u30a1\u30a4\u30eb\u3092\u304a\u8a66\u3057\u304f\u3060\u3055\u3044\u3002","image_memory_exceeded":"\u30e1\u30e2\u30ea\u306e\u8a31\u5bb9\u91cf\u3092\u8d85\u3048\u307e\u3057\u305f\u3002\u5225\u306e\u5c0f\u3055\u3044\u30b5\u30a4\u30ba\u306e\u30d5\u30a1\u30a4\u30eb\u3067\u3082\u3046\u4e00\u5ea6\u304a\u8a66\u3057\u304f\u3060\u3055\u3044\u3002","image_dimensions_exceeded":"\u30d5\u30a1\u30a4\u30eb\u30b5\u30a4\u30ba\u306e\u4e0a\u9650\u3092\u8d85\u3048\u3066\u3044\u308b\u3088\u3046\u3067\u3059\u3002\u5225\u306e\u30d5\u30a1\u30a4\u30eb\u3092\u304a\u8a66\u3057\u304f\u3060\u3055\u3044\u3002","default_error":"\u30a2\u30c3\u30d7\u30ed\u30fc\u30c9\u4e2d\u306b\u30a8\u30e9\u30fc\u304c\u767a\u751f\u3057\u307e\u3057\u305f\u3002\u5f8c\u307b\u3069\u518d\u5ea6\u304a\u8a66\u3057\u304f\u3060\u3055\u3044\u3002","missing_upload_url":"\u8a2d\u5b9a\u306b\u30a8\u30e9\u30fc\u304c\u3042\u308a\u307e\u3057\u305f\u3002\u30b5\u30fc\u30d0\u30fc\u7ba1\u7406\u8005\u306b\u304a\u554f\u3044\u5408\u308f\u305b\u304f\u3060\u3055\u3044\u3002","upload_limit_exceeded":"\u30d5\u30a1\u30a4\u30eb\u306e\u30a2\u30c3\u30d7\u30ed\u30fc\u30c9\u306f1\u3064\u307e\u3067\u3067\u3059\u3002","http_error":"HTTP \u30a8\u30e9\u30fc\u3002","upload_failed":"\u30a2\u30c3\u30d7\u30ed\u30fc\u30c9\u306b\u5931\u6557\u3057\u307e\u3057\u305f\u3002","big_upload_failed":"%1$s\u30d6\u30e9\u30a6\u30b6\u30fc\u30a2\u30c3\u30d7\u30ed\u30fc\u30c0\u30fc%2$s\u3067\u3053\u306e\u30d5\u30a1\u30a4\u30eb\u3092\u30a2\u30c3\u30d7\u30ed\u30fc\u30c9\u3057\u3066\u307f\u3066\u304f\u3060\u3055\u3044\u3002","big_upload_queued":"%s \u306f\u3001\u30d6\u30e9\u30a6\u30b6\u4e0a\u304b\u3089\u30de\u30eb\u30c1\u30d5\u30a1\u30a4\u30eb\u30a2\u30c3\u30d7\u30ed\u30fc\u30c0\u30fc\u3092\u4f7f\u3046\u969b\u306e\u30a2\u30c3\u30d7\u30ed\u30fc\u30c9\u30b5\u30a4\u30ba\u4e0a\u9650\u3092\u8d85\u3048\u3066\u3044\u307e\u3059\u3002","io_error":"IO \u30a8\u30e9\u30fc\u3002","security_error":"\u30bb\u30ad\u30e5\u30ea\u30c6\u30a3\u30a8\u30e9\u30fc\u3002","file_cancelled":"\u30d5\u30a1\u30a4\u30eb\u3092\u30ad\u30e3\u30f3\u30bb\u30eb\u3057\u307e\u3057\u305f\u3002","upload_stopped":"\u30a2\u30c3\u30d7\u30ed\u30fc\u30c9\u3092\u4e2d\u6b62\u3057\u307e\u3057\u305f\u3002","dismiss":"\u975e\u8868\u793a\u306b\u3059\u308b","crunching":"\u51e6\u7406\u4e2d\u2026","deleted":"\u30b4\u30df\u7bb1\u3078\u79fb\u52d5\u3057\u307e\u3057\u305f\u3002","error_uploading":"\u201c%s\u201d \u306e\u30a2\u30c3\u30d7\u30ed\u30fc\u30c9\u306b\u5931\u6557\u3057\u307e\u3057\u305f\u3002"};/* ]]> */
</script>
<script type='text/javascript' src='loadjs?c=1&load=jquery,utils,plupload,plupload-html5,plupload-flash,plupload-silverlight,plupload-html4,plupload-handlers,json2'></script>
</head>
<body id="media-upload" class="no-js">
<script type="text/javascript">
document.body.className = document.body.className.replace('no-js', 'js');
</script>
	<script type="text/javascript">post_id = 61;</script>
	<div id="media-upload-header">
	<ul id='sidemenu'>
	<li id='tab-type'><a href='test12_mediaupload' class='current'>コンピューターから</a></li>
	<li id='tab-type_url'><a href='test12_mediaupload'>URL から</a></li>
	<li id='tab-library'><a href='test12_mediaupload'>メディアライブラリ</a></li>
</ul>
	</div>
	
<form enctype="multipart/form-data" method="post" action="test12_mediaupload" class="media-upload-form type-form validate" id="image-form">
<input type="submit" name="save" id="save" class="hidden" value="変更を保存"  /><input type="hidden" name="post_id" id="post_id" value="61" />
<input type="hidden" id="_wpnonce" name="_wpnonce" value="e6e3bef16a" /><input type="hidden" name="_wp_http_referer" value="test12_mediaupload" />
<h3 class="media-title">自分のコンピューターからメディアファイルを追加</h3>


<div id="media-upload-notice"></div>
<div id="media-upload-error"></div>

<script type="text/javascript">
var resize_height = 1024, resize_width = 1024,
wpUploaderInit = {"runtimes":"html5,silverlight,flash,html4","browse_button":"plupload-browse-button","container":"plupload-upload-ui","drop_element":"drag-drop-area","file_data_name":"async-upload","multiple_queues":true,"max_file_size":"8388608b","url":"http:\/\/localhost\/wordpress\/wp-admin\/async-upload.php","flash_swf_url":"http:\/\/localhost\/wordpress\/wp-includes\/js\/plupload\/plupload.flash.swf","silverlight_xap_url":"http:\/\/localhost\/wordpress\/wp-includes\/js\/plupload\/plupload.silverlight.xap","filters":[{"title":"\u30a2\u30c3\u30d7\u30ed\u30fc\u30c9\u3067\u304d\u308b\u30d5\u30a1\u30a4\u30eb","extensions":"*"}],"multipart":true,"urlstream_upload":true,"multipart_params":{"post_id":61,"_wpnonce":"e6e3bef16a","type":"file","tab":"type","short":"1"}};
</script>

<div id="plupload-upload-ui" class="hide-if-no-js">
<div id="drag-drop-area">
	<div class="drag-drop-inside">
	<p class="drag-drop-info">ここにファイルをドロップ</p>
	<p>または</p>
	<p class="drag-drop-buttons"><input id="plupload-browse-button" type="button" value="ファイルを選択" class="button" /></p>
	</div>
</div>
	<p class="upload-flash-bypass">
	複数ファイル用のアップローダーを利用中です。<a href="#">ブラウザーアップローダー</a>もお試しください。	</p>
	</div>

<div id="html-upload-ui" class="hide-if-js">
	<p id="async-upload-wrap">
		<label class="screen-reader-text" for="async-upload">アップロード</label>
		<input type="file" name="async-upload" id="async-upload" />
		<input type="submit" name="html-upload" id="html-upload" class="button" value="アップロード"  />		<a href="#" onclick="try{top.tb_remove();}catch(e){}; return false;">キャンセル</a>
	</p>
	<div class="clear"></div>
	<p class="upload-html-bypass hide-if-no-js">
	現在ブラウザー付随のアップローダーを使われています。新しい WordPress アップローダーは複数ファイル選択やドラッグ＆ドロップにも対応しています。<a href="#">新アップローダーもご利用ください</a>。	</p>
	</div>

<span class="max-upload-size">アップロードするファイルのサイズ上限は8MBです。</span>
	<span class="after-file-upload">ファイルのアップロード完了後、タイトルと説明を追加できます。</span>
	
<script type="text/javascript">
//<![CDATA[
jQuery(function($){
	var preloaded = $(".media-item.preloaded");
	if ( preloaded.length > 0 ) {
		preloaded.each(function(){prepareMediaItem({id:this.id.replace(/[^0-9]/g, '')},'');});
	}
	updateMediaForm();
});
//]]>
</script>
    
    
<div id="media-items">
    
<?php $uploaded=false ?>

<?php if ($uploaded): ?>
<div id="media-item-p16thtj9eq1o7k1kc21l9fgu614c54" class="media-item child-of-61 open">
<img class="pinkynail toggle" alt="" src="http://localhost/wordpress/wp-content/uploads/2012/05/IMG_016949-150x150.jpg">
<input id="type-of-69" type="hidden" value="image">
<a class="toggle describe-toggle-on" href="#">表示する</a>
<a class="toggle describe-toggle-off" href="#">隠す</a>
<input type="hidden" value="0" name="attachments[69][menu_order]">
<div class="filename new">
<span class="title">IMG_016949</span>
</div>
<table class="slidetoggle describe startclosed" style="display: table;">
<thead id="media-head-69" class="media-item-info">
<tr valign="top">
<td id="thumbnail-head-69" class="A1B1">
<p>
<a target="_blank" href="http://localhost/wordpress/?attachment_id=69">
<img class="thumbnail" alt="" src="http://localhost/wordpress/wp-content/uploads/2012/05/IMG_016949-150x150.jpg">
</a>
</p>
<p>
<input id="imgedit-open-btn-69" class="button" type="button" value="画像を編集" onclick="imageEdit.open( 69, "6f82d6aa52" )">
<img class="imgedit-wait-spin" alt="" src="http://localhost/wordpress/wp-admin/images/wpspin_light.gif">
</p>
</td>
<td>
<p>
<strong>ファイル名:</strong>
IMG_016949.jpg
</p>
<p>
<strong>ファイル形式:</strong>
image/jpeg
</p>
<p>
<strong>アップロード日:</strong>
2012年5月19日
</p>
<p>
<strong>サイズ:</strong>
<span id="media-dims-69">1024&nbsp;&times;&nbsp;683</span>
</p>
</td>
</tr>
</thead>
<tbody>
<tr>
<td id="imgedit-response-69" class="imgedit-response" colspan="2"></td>
</tr>
<tr>
<td id="image-editor-69" class="image-editor" colspan="2" style="display:none"></td>
</tr>
<tr class="post_title form-required">
<th class="label" valign="top" scope="row">
<label for="attachments[69][post_title]">
<span class="alignleft">タイトル</span>
<span class="alignright">
<abbr class="required" title="required">*</abbr>
</span>
<br class="clear">
</label>
</th>
<td class="field">
<input id="attachments[69][post_title]" class="text" type="text" aria-required="true" value="IMG_016949" name="attachments[69][post_title]">
</td>
</tr>
<tr class="image_alt">
<th class="label" valign="top" scope="row">
<label for="attachments[69][image_alt]">
<span class="alignleft">代替テキスト</span>
<br class="clear">
</label>
</th>
<td class="field">
<input id="attachments[69][image_alt]" class="text" type="text" value="" name="attachments[69][image_alt]">
<p class="help">画像の代替テキスト 例:&ldquo;The Mona Lisa&rdquo;</p>
</td>
</tr>
<tr class="post_excerpt">
<th class="label" valign="top" scope="row">
<label for="attachments[69][post_excerpt]">
<span class="alignleft">キャプション</span>
<br class="clear">
</label>
</th>
<td class="field">
<input id="attachments[69][post_excerpt]" class="text" type="text" value="" name="attachments[69][post_excerpt]">
</td>
</tr>
<tr class="post_content">
<th class="label" valign="top" scope="row">
<label for="attachments[69][post_content]">
<span class="alignleft">説明</span>
<br class="clear">
</label>
</th>
<td class="field">
<textarea id="attachments[69][post_content]" name="attachments[69][post_content]"></textarea>
</td>
</tr>
<tr class="url">
<th class="label" valign="top" scope="row">
<label for="attachments[69][url]">
<span class="alignleft">リンク URL</span>
<br class="clear">
</label>
</th>
<td class="field">
<input class="text urlfield" type="text" value="http://localhost/wordpress/wp-content/uploads/2012/05/IMG_016949.jpg" name="attachments[69][url]">
<br>
<button class="button urlnone" title="" type="button">なし</button>
<button class="button urlfile" title="http://localhost/wordpress/wp-content/uploads/2012/05/IMG_016949.jpg" type="button">ファイルの URL</button>
<button class="button urlpost" title="http://localhost/wordpress/?attachment_id=69" type="button">添付ファイル投稿 URL</button>
<p class="help">リンク URL を入力するか、または上のいずれかをクリックしてください。</p>
</td>
</tr>
<tr class="align">
<th class="label" valign="top" scope="row">
<label for="attachments[69][align]">
<span class="alignleft">配置</span>
<br class="clear">
</label>
</th>
<td class="field">
<input id="image-align-none-69" type="radio" value="none" name="attachments[69][align]">
<label class="align image-align-none-label" for="image-align-none-69">なし</label>
<input id="image-align-left-69" type="radio" checked="checked" value="left" name="attachments[69][align]">
<label class="align image-align-left-label" for="image-align-left-69">左</label>
<input id="image-align-center-69" type="radio" value="center" name="attachments[69][align]">
<label class="align image-align-center-label" for="image-align-center-69">中央</label>
<input id="image-align-right-69" type="radio" value="right" name="attachments[69][align]">
<label class="align image-align-right-label" for="image-align-right-69">右</label>
</td>
</tr>
<tr class="image-size">
<th class="label" valign="top" scope="row">
<label for="attachments[69][image-size]">
<span class="alignleft">サイズ</span>
<br class="clear">
</label>
</th>
<td class="field">
<div class="image-size-item">
<input id="image-size-thumbnail-69" type="radio" value="thumbnail" name="attachments[69][image-size]">
<label for="image-size-thumbnail-69">サムネイル</label>
<label class="help" for="image-size-thumbnail-69">(150&nbsp;&times;&nbsp;150)</label>
</div>
<div class="image-size-item">
<input id="image-size-medium-69" type="radio" checked="checked" value="medium" name="attachments[69][image-size]">
<label for="image-size-medium-69">中</label>
<label class="help" for="image-size-medium-69">(300&nbsp;&times;&nbsp;200)</label>
</div>
<div class="image-size-item">
<input id="image-size-large-69" type="radio" value="large" name="attachments[69][image-size]" disabled="disabled">
<label for="image-size-large-69">大</label>
</div>
<div class="image-size-item">
<input id="image-size-full-69" type="radio" value="full" name="attachments[69][image-size]">
<label for="image-size-full-69">フルサイズ</label>
<label class="help" for="image-size-full-69">(1024&nbsp;&times;&nbsp;683)</label>
</div>
</td>
</tr>
<tr class="submit">
<td></td>
<td class="savesend">
<input id="send[69]" class="button" type="submit" value="投稿に挿入" name="send[69]">
<a id="wp-post-thumbnail-69" class="wp-post-thumbnail" onclick="WPSetAsThumbnail("69", "ab3cf1a8ab");return false;" href="#">アイキャッチ画像として使用</a>
<a class="del-link" onclick="document.getElementById('del_attachment_69').style.display='block';return false;" href="#">削除</a>
<div id="del_attachment_69" class="del-attachment" style="display:none;">
<strong>IMG_016949.jpg</strong>
を削除しようとしています。
<a id="del[69]" class="button" href="post.php?action=delete&post=69&_wpnonce=61f098eee7">続ける</a>
<a class="button" onclick="this.parentNode.style.display='none';return false;" href="#">キャンセル</a>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<?php endif; ?>
    
</div>

<p class="savebutton ml-submit" <?php if ($uploaded) echo ' style="display: block;"'; ?> >
    
    
<input type="submit" name="save" id="save" class="button" value="すべての変更を保存"  /></p>
</form>

<script type='text/javascript'>
/* <![CDATA[ */
var commonL10n = {"warnDelete":"\u9078\u629e\u3057\u305f\u9805\u76ee\u3092\u5b8c\u5168\u306b\u524a\u9664\u3057\u3088\u3046\u3068\u3057\u3066\u3044\u307e\u3059\u3002\n\u4e2d\u6b62\u3059\u308b\u306b\u306f '\u30ad\u30e3\u30f3\u30bb\u30eb' \u3092\u3001\u524a\u9664\u3059\u308b\u306b\u306f 'OK' \u3092\u30af\u30ea\u30c3\u30af\u3057\u3066\u304f\u3060\u3055\u3044\u3002"};var imageEditL10n = {"error":"\u30d7\u30ec\u30d3\u30e5\u30fc\u753b\u50cf\u3092\u8aad\u307f\u8fbc\u3080\u3053\u3068\u304c\u3067\u304d\u307e\u305b\u3093\u3067\u3057\u305f\u3002\u30da\u30fc\u30b8\u3092\u8aad\u307f\u8fbc\u307f\u76f4\u3057\u3066\u3082\u3046\u4e00\u5ea6\u304a\u8a66\u3057\u304f\u3060\u3055\u3044\u3002"};var setPostThumbnailL10n = {"setThumbnail":"\u30a2\u30a4\u30ad\u30e3\u30c3\u30c1\u753b\u50cf\u3068\u3057\u3066\u4f7f\u7528","saving":"\u4fdd\u5b58\u3057\u3066\u3044\u307e\u3059\u2026","error":"\u753b\u50cf\u3092\u30b5\u30e0\u30cd\u30a4\u30eb\u306b\u8a2d\u5b9a\u3067\u304d\u307e\u305b\u3093\u3067\u3057\u305f\u3002\u4ed6\u306e\u6dfb\u4ed8\u30d5\u30a1\u30a4\u30eb\u3092\u304a\u8a66\u3057\u304f\u3060\u3055\u3044\u3002","done":"\u5b8c\u4e86"};/* ]]> */
</script>
<script type='text/javascript' src='loadjs?c=1&load=hoverIntent,common,jquery-color,imgareaselect,image-edit,set-post-thumbnail'></script>
<script type="text/javascript">if(typeof wpOnload=='function')wpOnload();</script>
</body>
</html>
