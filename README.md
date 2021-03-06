# Blade Bootstrap Icons

[![Version](https://img.shields.io/packagist/v/isaacdagel/blade-bootstrap-icons)](https://packagist.org/packages/isaacdagel/blade-bootstrap-icons)
[![Total Downloads](https://img.shields.io/packagist/dt/isaacdagel/blade-bootstrap-icons)](https://packagist.org/packages/isaacdagel/blade-bootstrap-icons)
[![Required Laravel Version](https://img.shields.io/badge/Laravel-%3E%3D7.0-red)](https://packagist.org/packages/isaacdagel/blade-bootstrap-icons)
[![License](https://img.shields.io/packagist/l/isaacdagel/blade-bootstrap-icons)](https://packagist.org/packages/isaacdagel/blade-bootstrap-icons)

A package to easily integrate Bootstrap SVG icons into your Laravel project.

## Requirements

This package is designed to work with Laravel 7.0 or higher.

## Installation

The package can be installed via Composer:

```bash
composer require isaacdagel/blade-bootstrap-icons
```

## Usage

For a list of all available icons and their names, refer to [this page](https://icons.getbootstrap.com/).

Insert an icon anywhere into a blade template by calling the appropriate component. The component name format is 'x-boostrap-icon-[hyphenated icon name]'. For example:

```blade
<x-bootstrap-icon-chevron-left/>
```

You can specify custom classes on top of the default 'bi' and 'bi-[hyphenated icon name]' classes:

```blade
<x-bootstrap-icon-chevron-left class="custom-class"/>
```

You can add inline styles:

```blade
<x-bootstrap-icon-chevron-left style="color: red"/>
```

You can specify the height and width (the default for both is 1em):

```blade
<x-bootstrap-icon-chevron-left width="1.5em" height="1.5em"/>
```

You can set the viewBox property (the default is '0 0 16 16'):

```blade
<x-bootstrap-icon-chevron-left viewBox="0 0 20 20"/>
```

You can also set the fill property (the default is 'currentColor'):

```blade
<x-bootstrap-icon-chevron-left fill="green"/>
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Credits

[Bootstrap Icons](https://github.com/twbs/icons) are created and maintained by the Bootstrap team.

## License

This package is released under the MIT License. Please see [License File](LICENSE.md) for more information.
