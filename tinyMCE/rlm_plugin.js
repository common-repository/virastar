(function() {

    tinymce.create('tinymce.plugins.rlmplugin', {

        init : function(ed, url){
            ed.addButton('rlmplugin', {
                title : 'embed rlm to selected text',
                onclick : function() {
                     ed.selection.setContent(ed.selection.getContent() + '&lrm;');
                },
                image: url + "/rlm.png"
            });
        },

        getInfo : function() {
            return {
                longname : 'Virastar',
                author : 'aliaghdam',
                authorurl : 'http://aliaghdam.com/',
                infourl : '',
                version : "1.0"
            };
        }
    });

    tinymce.PluginManager.add('rlmplugin', tinymce.plugins.rlmplugin);
    
})();
