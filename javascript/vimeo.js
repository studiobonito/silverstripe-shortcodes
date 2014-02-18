/*global window */
(function (window) {
    'use strict';

    window.tinymce.create('tinymce.plugins.VimeoShortCodePlugin', {
        init: function (ed, url) {
            var t = this;

            t.editor = ed;

            ed.addCommand('insertVimeoShortCode', function () {
                var str = '[vimeo id=][/vimeo]';

                ed.execCommand('mceInsertContent', false, str);
            });

            // Register button
            ed.addButton('vimeo', {
                title: 'Insert Vimeo ShortCode',
                image: 'shortcodes/images/vimeo.png',
                cmd: 'insertVimeoShortCode'
            });
        },

        getInfo: function () {
            return {
                longname: 'ShortCodes Module - Vimeo',
                author: 'Studio Bonito Ltd',
                authorurl: 'http://www.studiobonito.co.uk',
                infourl: 'http://www.studiobonito.co.uk',
                version: '1.0.0'
            };
        }
    });

    // Register plugin
    window.tinymce.PluginManager.add('vimeo', window.tinymce.plugins.VimeoShortCodePlugin);
}(window));