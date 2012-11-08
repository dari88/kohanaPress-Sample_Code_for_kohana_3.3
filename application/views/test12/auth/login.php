<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="ja">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>WordPress &rsaquo; ログイン</title>
        <link rel='stylesheet' id='wp-admin-css'  href='loadcss?dir=rtl&load=wp-admin' type='text/css' media='all' />
        <link rel='stylesheet' id='colors-fresh-css'  href='loadcss?dir=rtl&load=colors-fresh' type='text/css' media='all' />
        <meta name='robots' content='noindex,nofollow' />

        <script type="text/javascript">
            addLoadEvent = function(func){if(typeof jQuery!="undefined")jQuery(document).ready(func);else if(typeof wpOnload!='function'){wpOnload=func;}else{var oldonload=wpOnload;wpOnload=function(){oldonload();func();}}};
            function s(id,pos){g(id).left=pos+'px';}
            function g(id){return document.getElementById(id).style;}
            function shake(id,a,d){c=a.shift();s(id,c);if(a.length>0){setTimeout(function(){shake(id,a,d);},d);}else{try{g(id).position='static';wp_attempt_focus();}catch(e){}}}
            addLoadEvent(function(){ var p=new Array(15,30,15,0,-15,-30,-15,0);p=p.concat(p.concat(p));var i=document.forms[0].id;g(i).position='relative';shake(i,p,20);});
        </script>

    </head>
    <body class="login">
        <style type="text/css">
            <!--
            .login h1 a {
                background: url("/includes/img/kohana/logo-new.png") no-repeat scroll center top transparent;
                display: block;
                height: 67px;
                overflow: hidden;
                padding-bottom: 15px;
                text-indent: -9999px;
                width: 326px;
            }
            -->
        </style>
        <div id="login"><h1><a href="http://kohanaframework.org/" title="Powered by kohana">kohanaPress</a></h1>
            <?php
            if ($errors):
                echo '<div id="login_error">' . "\n";
                foreach ($errors as $value) {
                    echo "<strong>エラー</strong>: $value<br />" . "\n";
                }
                echo '</div>' . "\n";
            endif;
            ?>
            <form name="loginform" id="loginform" action="" method="post">
                <p>
                    <label for="user_login">ユーザー名<br />
                        <input type="text" name="user_login" id="user_login" class="input" value="<?php echo $user_login ?>" size="20" tabindex="10" /></label>
                </p>
                <p>
                    <label for="user_pass">パスワード<br />
                        <input type="password" name="user_pass" id="user_pass" class="input" value="" size="20" tabindex="20" /></label>
                </p>
                <p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever" tabindex="90" /> ログイン状態を保存する</label></p>
                <p class="submit">
                    <input type="submit" name="wp-submit" id="wp-submit" class="button-primary" value="ログイン" tabindex="100" />
                    <input type="hidden" name="redirect_to" value="test12" />
                    <input type="hidden" name="testcookie" value="1" />
                </p>
            </form>

            <p id="nav">
                <a href="test12_register">登録</a> |
                <a href="test12_lostpassword" title="パスワード紛失取り扱い">パスワードをお忘れですか ?</a>
            </p>

            <script type="text/javascript">
                function wp_attempt_focus(){
                    setTimeout( function(){ try{
                            d = document.getElementById('user_pass');
                            d.value = '';
                            d.focus();
                            d.select();
                        } catch(e){}
                    }, 200);
                }

                if(typeof wpOnload=='function')wpOnload();
            </script>

            <p id="backtoblog"><a href="test12" title="迷子になってしまいましたか ?">&larr; kohanaPress へ戻る</a></p>
        </div>


        <div class="clear"></div>
    </body>
</html>
