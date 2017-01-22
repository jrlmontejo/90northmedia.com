# 90northmedia.com #

### How do I get set up? ###

1. Download and install composer - [https://getcomposer.org/](https://getcomposer.org/)
2. Run `composer install` to install the CPT and ACF plugins.
3. Create a local server (I use MAMP Pro).
4. Import `90northmedia_db.sql` to your local database.
5. On your newly imported database, update the `siteurl` and `home` values on the `wp_options` table.
6. Edit your database details on `wp-config.php`.
7. Access the site using the address from your local server.

### Default Login Details ###

Username: 90northmedia
Password: 123456

### Notes ###

Do not install new themes and/or plugins via the Wordpress Admin Dashboard. If you want to add a new theme/plugin, include it in `composer.json` instead and run `composer update`. You may browse for available themes/plugins at [https://wpackagist.org/](https://wpackagist.org/).

To make sure you don't accidentally install a theme/plugin via the Wordpress Dashboard, you can disable editing by adding this line to your `wp-config.php`:
```php
<?php define('DISALLOW_FILE_MODS', true); ?>
```

Also, make sure you enable `WP_DEBUG` in `wp-config.php`:
```php
<?php define('WP_DEBUG', true); ?>
```

### Versions ###

* Wordpress: 4.7.1
* PHP: 5.6.10
* Jquery: 3.1.1
* Bootstrap: 4.0.0

### Who do I talk to? ###

* Jaye (jrlmontejo@gmail.com)