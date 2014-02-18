# ShortCodes Module

## Overview

ShortCodes Module is based on Daniel Hensby's post at [SSbits](http://www.ssbits.com/tutorials/2010/2-4-using-short-codes-to-embed-a-youtube-video/). It adds a shortcodes for inserting YouTube and Vimeo videos to pages, as well as adding a buttons to the TinyMCE WYSIWYG editor.

## Requirements

SilverStripe 2.4 or newer.

## Installation Instructions

### Composer

Run the following to add this module as a requirement and install it via composer.

	$ composer require studiobonito/silverstripe-youtubevideos

### Manual

Copy the 'shortcodes' folder to your the root of your SilverStripe installation.

## Usage Overview

Use the following shortcode in any `HTMLTextField` to embed a YouTube video

	[youtube id=4af1bFh3duo][/youtube]

or a Vimeo video

	[vimeo id=29471008][/vimeo]

You can also specify a height and width which can be used by the templates that render the videos

	[youtube id=4af1bFh3duo width=300 height=150][/youtube]