# HeroIcons Generator

![Packagist Version (custom server)](https://img.shields.io/packagist/v/yemenopensource/hero-icons)

HeroIcons is a Laravel package that provides a convenient command for generating hero icons as constants on a PHP class. This package is designed to simplify the process of working with hero icons in your Laravel projects.

## Installation

You can install the package via Composer:

```bash
composer require yemenopensource/hero-icons
```

## Usage

To generate the hero icons class, simply run the following command:

```bash
php artisan generate:hero-icons
```

The command will scan the SVG files in the specified directory and generate a PHP class with constants representing each icon. The generated PHP class will be saved in the app/Utilities folder of your Laravel project.

## Configuration


The package provides a configuration file that allows you to customize its behavior.

You can publish the configuration file by using the following command:

```bash
php artisan vendor:publish --provider="YOS\HeroIcons\ServiceProvider" --tag="config"
```

After publishing the configuration file, you can find it at config/heroicons.php. Open this file and modify it according to your requirements.

In the configuration file, you can modify the following settings:

- `blade-ui-kit-path`: The vendor path of the Blade UI Kit package where the SVG files exist.
- `namespace`: The namespace and directory path of the output of the generated class.
- `class`: The output class name.

## Contributing

Contributions are welcome! If you find any issues or have suggestions for improvements, please feel free to create an issue or a pull request.

## License

The package is part of yemen open source and it is licensed under the MIT license.

## Credits

- [Muath Alsowadi](https://github.com/muath-ye)
