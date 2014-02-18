/*global window */
(function (window) {
    'use strict';

    window.tinymce.create('tinymce.plugins.YouTubeShortCodePlugin', {
        init: function (ed, url) {
            var t = this;

            t.editor = ed;

            ed.addCommand('insertYouTubeShortCode', function () {
                var str = '[youtube id=][/youtube]';

                ed.execCommand('mceInsertContent', false, str);
            });

            // Register button
            ed.addButton('youtube', {
                title: 'Insert YouTube ShortCode',
                image: 'shortcodes/images/youtube.png',
                cmd: 'insertYouTubeShortCode'
            });
        },

        getInfo: function () {
            return {
                longname: 'ShortCodes Module - YouTube',
                author: 'Studio Bonito Ltd',
                authorurl: 'http://www.studiobonito.co.uk',
                infourl: 'http://www.studiobonito.co.uk',
                version: '1.0.0'
            };
        }
    });

    // Register plugins
    window.tinymce.PluginManager.add('youtube', window.tinymce.plugins.YouTubeShortCodePlugin);
}(window));