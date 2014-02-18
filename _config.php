<?php

$dir = basename(dirname(__FILE__));
if ($dir === 'shortcodes') {
    define('SHORTCODES_DIR', $dir);
} else {
    user_error('ShortCodes: Directory name must be "shortcodes" (currently "' . $dir . '")', E_USER_ERROR);
}

ShortcodeParser::get()->register('youtube', array('ShortCodes', 'YouTubeShortCodeHandler'));
ShortcodeParser::get()->register('vimeo', array('ShortCodes', 'VimeoShortCodeHandler'));

HtmlEditorConfig::get('cms')->enablePlugins(
    array(
        'youtube' => '../../../shortcodes/javascript/youtube.min.js',
        'vimeo'   => '../../../shortcodes/javascript/vimeo.min.js'
    )
);
HtmlEditorConfig::get('cms')->insertButtonsAfter('anchor', 'youtube', 'vimeo');