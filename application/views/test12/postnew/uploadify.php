<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="loadcss?c=1&load=uploadify" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="loadjs?c=1&load=jquery-142min,swfobject-uploadify,jquery-uploadify-v214min"></script>
        <script type="text/javascript">
            // <![CDATA[
            $(document).ready(function() {
                $('#file_upload').uploadify({
                    'uploader'  : '/includes/uploadify/uploadify.swf',
                    'script'    : 'test12_uploadify',
                    'cancelImg' : '/includes/uploadify/cancel.png',
                    'folder'    : <?php echo "'/".$folder."'" ?>,
                    'ID'        : '1',
                    'queueID'   : 'queue',
                    'fileExt'   : '*.jpg;*.gif;*.png',
                    'fileDesc'  : 'Image Files',
                    'sizeLimit' : 10240000,
                    'multi'     : true,
                    'auto'      : false
                });
            });
            // ]]>
        </script>
        <title>Uploadifyを使って複数の画像をアップロードする</title>
    </head>
    <body>
        <p>ファイルをアップロードして下さい （DB残量： <?php echo $remaining ?> MB）</p>
        <div style="background-color: #505050; min-height: 200px; margin-bottom: 10px; 
             padding:10px; overflow: auto; width: 400px;" id="queue"></div>
        <input type="file" id="file_upload" name="file_upload" /><br />
        <a href="javascript:$('#file_upload').uploadifyUpload();">アップロードする</a>
    </body>
</html>
