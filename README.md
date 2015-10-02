# ShortCodes Module

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

## Overview

ShortCodes Module is based on Daniel Hensby's post at [SSbits](http://www.ssbits.com/tutorials/2010/2-4-using-short-codes-to-embed-a-youtube-video/). It adds a shortcodes for inserting YouTube and Vimeo videos to pages, as well as adding a buttons to the TinyMCE WYSIWYG editor.

## Requirements

- SilverStripe 2.4 or newer.

## Install

### Via Composer

Run the following to add this module as a requirement and install it via composer.

```bash
$ composer require studiobonito/silverstripe-youtubevideos
```

### Manually

Copy the 'shortcodes' folder to your the root of your SilverStripe installation.

## Usage

Use the following shortcode in any `HTMLTextField` to embed a YouTube video

	[youtube id=4af1bFh3duo][/youtube]

or a Vimeo video

	[vimeo id=29471008][/vimeo]

You can also specify a height and width which can be used by the templates that render the videos

	[youtube id=4af1bFh3duo width=300 height=150][/youtube]

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email support@studiobonito.co.uk instead of using the issue tracker.

## Credits

- [Tom Densham][link-author]
- [All Contributors][link-contributors]

## License

The BSD-2-Clause License. Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/studiobonito/silverstripe-shortcodes.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-BSD-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/studiobonito/silverstripe-shortcodes.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/studiobonito/silverstripe-shortcodes
[link-downloads]: https://packagist.org/packages/studiobonito/silverstripe-shortcodes
[link-author]: https://github.com/nedmas
[link-contributors]: ../../contributors