tinyMCEPreInit = {
    base : "http://localhost/includes/wp/includes/js/tinymce",
    suffix : "",
    query : "ver=345-20111127",
    mceInit : {
        'content':{
            mode:"exact",
            width:"100%",
            theme:"advanced",
            skin:"wp_theme",
            language:"ja",
            spellchecker_languages:"+English=en,Danish=da,Dutch=nl,Finnish=fi,French=fr,German=de,Italian=it,Polish=pl,Portuguese=pt,Spanish=es,Swedish=sv",
            theme_advanced_toolbar_location:"top",
            theme_advanced_toolbar_align:"left",
            theme_advanced_statusbar_location:"bottom",
            theme_advanced_resizing:true,
            theme_advanced_resize_horizontal:false,
            dialog_type:"modal",
            formats:{
                alignleft : [
                {
                    selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li', 
                    styles : {
                        textAlign : 'left'
                    }
                },

                {
                selector : 'img,table', 
                classes : 'alignleft'
            }
            ],
            aligncenter : [
            {
                selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li', 
                styles : {
                    textAlign : 'center'
                }
            },

            {
            selector : 'img,table', 
            classes : 'aligncenter'
        }
        ],
        alignright : [
        {
            selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li', 
            styles : {
                textAlign : 'right'
            }
        },

        {
        selector : 'img,table', 
        classes : 'alignright'
    }
    ],
    strikethrough : {
        inline : 'del'
    }
},
relative_urls:false,
remove_script_host:false,
convert_urls:false,
remove_linebreaks:true,
gecko_spellcheck:true,
keep_styles:false,
entities:"38,amp,60,lt,62,gt",
accessibility_focus:true,
tabfocus_elements:"major-publishing-actions",
media_strict:false,
paste_remove_styles:true,
paste_remove_spans:true,
paste_strip_class_attributes:"all",
paste_text_use_dialog:true,
extended_valid_elements:"article[*],aside[*],audio[*],canvas[*],command[*],datalist[*],details[*],embed[*],figcaption[*],figure[*],footer[*],header[*],hgroup[*],keygen[*],mark[*],meter[*],nav[*],output[*],progress[*],section[*],source[*],summary,time[*],video[*],wbr",
wpeditimage_disable_captions:false,
wp_fullscreen_content_css:"http://localhost/includes/wp/includes/js/tinymce/plugins/wpfullscreen/css/wp-fullscreen.css",
plugins:"inlinepopups,spellchecker,tabfocus,paste,media,fullscreen,wordpress,wpeditimage,wpgallery,wplink,wpdialogs,wpfullscreen",
content_css:"http://localhost/includes/wp/themes/twentyeleven/editor-style.css",
elements:"content",
wpautop:true,
apply_source_formatting:false,
theme_advanced_buttons1:"bold,italic,strikethrough,|,bullist,numlist,blockquote,|,justifyleft,justifycenter,justifyright,|,link,unlink,wp_more,|,spellchecker,wp_fullscreen,wp_adv",
theme_advanced_buttons2:"formatselect,underline,justifyfull,forecolor,|,pastetext,pasteword,removeformat,|,charmap,|,outdent,indent,|,undo,redo,wp_help",
theme_advanced_buttons3:"",
theme_advanced_buttons4:""
}
},
qtInit : {
    'content':{
        id:"content",
        buttons:"strong,em,link,block,del,ins,img,ul,ol,li,code,more,spell,close,fullscreen"
    },
    'replycontent':{
        id:"replycontent",
        buttons:"strong,em,link,block,del,ins,img,ul,ol,li,code,spell,close"
    }
},
ref : {
    plugins:"inlinepopups,spellchecker,tabfocus,paste,media,fullscreen,wordpress,wpeditimage,wpgallery,wplink,wpdialogs,wpfullscreen",
    theme:"advanced",
    language:"ja"
},
load_ext : function(url,lang){
    var sl=tinymce.ScriptLoader;
    sl.markDone(url+'/langs/'+lang+'.js');
    sl.markDone(url+'/langs/'+lang+'_dlg.js');
}
};
