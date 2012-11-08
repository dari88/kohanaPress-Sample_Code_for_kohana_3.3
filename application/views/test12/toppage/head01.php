<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width" />
<title>kohanaPress | Just another WordPress site</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="loadcss?dir=rtl&load=twentyeleven" />
<link rel="pingback" href="http://localhost/wordpress/xmlrpc.php" />
<!--[if lt IE 9]>
<script src="http://localhost/wordpress/wp-content/themes/twentyeleven/js/html5.js" type="text/javascript"></script>
<![endif]-->
<link rel="alternate" type="application/rss+xml" title="WordPress &raquo; フィード" href="http://localhost/wordpress/?feed=rss2" />
<link rel="alternate" type="application/rss+xml" title="WordPress &raquo; コメントフィード" href="http://localhost/wordpress/?feed=comments-rss2" />

<?php if ($loginuser): echo 
    "<link rel='stylesheet' id='admin-bar-css'  href='loadcss?dir=rtl&load=admin-bar' type='text/css' media='all' />"."\n";
endif; ?>
    
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://localhost/wordpress/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://localhost/wordpress/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="kohana 3.2.0" />
<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>

<?php if ($loginuser): echo <<<EOT
<style type="text/css" media="print">#wpadminbar { display:none; }</style>
<style type="text/css" media="screen">
	html { margin-top: 28px !important; }
	* html body { margin-top: 28px !important; }
</style>\n
EOT;
endif; ?>