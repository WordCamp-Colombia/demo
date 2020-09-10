# Kili Boilerplate

Kili Boilerplate is a modern WordPress stack that helps you get started with the best theme development tools and project structure.

## Features
* Better folder structure
* Dependency management with [Composer](http://getcomposer.org)
* Easy WordPress configuration with environment specific files
* Environment variables with [Dotenv](https://github.com/vlucas/phpdotenv)
* Autoloader for mu-plugins (use regular plugins as mu-plugins)
* Enhanced security (separated web root and secure passwords with [wp-password-bcrypt](https://github.com/roots/wp-password-bcrypt))

## Requirements
* PHP >= 5.6 [Install Pilothouse](https://github.com/Pilothouse-App/Pilothouse/wiki/Installation) or [Install Mamp Pro](https://www.mamp.info/en/downloads/)
* Composer - [Install](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)


## Installation

1. Download the latest release and setup.

2. Copy `.env.example` to `.env` and update environment variables:
  * `DB_NAME` - Database name
  * `DB_USER` - Database user
  * `DB_PASSWORD` - Database password
  * `DB_HOST` - Database host
  * `WP_ENV` - Set to environment (`development`, `staging`, `production`)
  * `WP_HOME` - Full URL to WordPress home (https://example.dev)
  * `AUTH_KEY`, `SECURE_AUTH_KEY`, `LOGGED_IN_KEY`, `NONCE_KEY`, `AUTH_SALT`, `SECURE_AUTH_SALT`, `LOGGED_IN_SALT`, `NONCE_SALT`
    If you want to automatically generate the security keys you can search for an online salt generator (https://api.wordpress.org/secret-key/1.1/salt/)

## Starting the app
1. You can start the app with Composer, this will launch the required containers:

 ```
 $ composer install
 ```

2. Run Pilothouse or Mamp Pro
    
3. Go to the url server for example ```https://example.dev``` to start installing WordPress

## Staging Deploy

## Production Deploy

## Troubleshooting
