![Screenshot](https://github.com/tomatophp/filament-eddy/blob/master/arts/3x1io-tomato-eddy.jpg)

# Filament Eddy

[![Latest Stable Version](https://poser.pugx.org/tomatophp/filament-eddy/version.svg)](https://packagist.org/packages/tomatophp/filament-eddy)
[![PHP Version Require](http://poser.pugx.org/tomatophp/filament-eddy/require/php)](https://packagist.org/packages/tomatophp/filament-eddy)
[![License](https://poser.pugx.org/tomatophp/filament-eddy/license.svg)](https://packagist.org/packages/tomatophp/filament-eddy)
[![Downloads](https://poser.pugx.org/tomatophp/filament-eddy/d/total.svg)](https://packagist.org/packages/tomatophp/filament-eddy)

Eddy Server Manager & Tasks Runner for FilamentPHP

## Installation

```bash
composer require tomatophp/filament-eddy
```
after install your package please run this command

```bash
php artisan filament-eddy:install
```

finally register the plugin on `/app/Providers/Filament/AdminPanelProvider.php`

```php
->plugin(\TomatoPHP\FilamentEddy\FilamentEddyPlugin::make())
```

## Publish Assets

you can publish config file by use this command

```bash
php artisan vendor:publish --tag="filament-eddy-config"
```

you can publish views file by use this command

```bash
php artisan vendor:publish --tag="filament-eddy-views"
```

you can publish languages file by use this command

```bash
php artisan vendor:publish --tag="filament-eddy-lang"
```

you can publish migrations file by use this command

```bash
php artisan vendor:publish --tag="filament-eddy-migrations"
```

## Support

you can join our discord server to get support [TomatoPHP](https://discord.gg/Xqmt35Uh)

## Docs

you can check docs of this package on [Docs](https://docs.tomatophp.com/plugins/laravel-package-generator)

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security

Please see [SECURITY](SECURITY.md) for more information about security.

## Credits

- [Fady Mondy](mailto:info@3x1.io)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
