(function(){
    var init, ed, qt, first_init, mce = true;

    if ( typeof(tinymce) == 'object' ) {
        // mark wp_theme/ui.css as loaded
        tinymce.DOM.files[tinymce.baseURI.getURI() + '/themes/advanced/skins/wp_theme/ui.css'] = true;

        for ( ed in tinyMCEPreInit.mceInit ) {
            if ( first_init ) {
                init = tinyMCEPreInit.mceInit[ed] = tinymce.extend( {}, first_init, tinyMCEPreInit.mceInit[ed] );
            } else {
                init = first_init = tinyMCEPreInit.mceInit[ed];
            }

            if ( mce )
                try {
                    tinymce.init(init);
                } catch(e){}
        }
    }

    if ( typeof(QTags) == 'function' ) {
        for ( qt in tinyMCEPreInit.qtInit ) {
            try {
                quicktags( tinyMCEPreInit.qtInit[qt] );
            } catch(e){}
        }
    }
})();

var wpActiveEditor;

jQuery('.wp-editor-wrap').mousedown(function(e){
    wpActiveEditor = this.id.slice(3, -5);
});
