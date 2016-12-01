# White Widget Wordpress Boilerplate #

### How do I get set up? ###

1. Download and install composer - [https://getcomposer.org/](https://getcomposer.org/)
2. Run `composer install` to install the Blankslate parent theme and the CPT and ACF plugins
3. Create a `wp-config.php` file based on `wp-config-sample.php`
4. Create a local server (I use MAMP Pro)
5. Activate the White Widget Boilerplate theme

### Notes ###

Do not install new themes and/or plugins via the Wordpress Admin Dashboard. If you want to add a new theme/plugin, include it in `composer.json` instead and run `composer update`. You may browse for available themes/plugins at [https://wpackagist.org/](https://wpackagist.org/).

To make sure you don't accidentally install a theme/plugin via the Wordpress Dashboard, you can disable editing by adding this line to your `wp-config.php`:
```
define('DISALLOW_FILE_MODS', true);
```

Also, make sure you enable `WP_DEBUG` in `wp-config.php`:
```
define('WP_DEBUG', true);
```

### Versions ###

* Wordpress: 4.6.1
* PHP: 5.6.25
* Jquery: 3.1.1
* Bootstrap: 4.0.0

### Who do I talk to? ###

* Jaye (jaye@whitewidget.com)
* Meio (meio@whitewidget.com)
* RR (rr@whitewidget.com)
* Dre (andrea@whitewidget.com)