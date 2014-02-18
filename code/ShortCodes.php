<?php
class ShortCodes
{

    public static function YouTubeShortCodeHandler($arguments, $caption = null, $parser = null)
    {
        if (empty($arguments['id'])) {
            return false;
        }

        $customise = array();
        /*** SET DEFAULTS ***/
        $customise['YouTubeID'] = $arguments['id'];
        //play the video on page load
        $customise['Autoplay'] = false;
        //set the caption
        $customise['Caption'] = $caption ? Convert::raw2xml($caption) : false;
        //set dimensions
        $customise['Width'] = 640;
        $customise['Height'] = 385;

        //overide the defaults with the arguments supplied
        $customise = array_merge($customise, $arguments);

        //get our YouTube template
        $template = new SSViewer(
            array(
                'YouTube',
                SHORTCODES_DIR . '/templates/YouTube.ss'
            )
        );

        //return the customised template
        return $template->process(new ArrayData($customise));
    }

    public static function VimeoShortCodeHandler($arguments, $caption = null, $parser = null)
    {
        if (empty($arguments['id'])) {
            return false;
        }

        $customise = array();
        /*** SET DEFAULTS ***/
        $customise['VimeoID'] = $arguments['id'];
        //play the video on page load
        $customise['Autoplay'] = false;
        //set the caption
        $customise['Caption'] = $caption ? Convert::raw2xml($caption) : false;
        //set dimensions
        $customise['Width'] = 480;
        $customise['Height'] = 320;

        //overide the defaults with the arguments supplied
        $customise = array_merge($customise, $arguments);

        //get our YouTube template
        $template = new SSViewer(
            array(
                'Vimeo',
                SHORTCODES_DIR . '/templates/Vimeo.ss'
            )
        );

        return $template->process(new ArrayData($customise));
    }
}