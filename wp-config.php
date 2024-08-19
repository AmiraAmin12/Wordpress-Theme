<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'oxford' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );


if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8HwGH8opwhm7VnLgFE3qgzSOxb2tLEkFQSu0w9PJsdMhDXWQrKWKz3BLd5RFHlAY' );
define( 'SECURE_AUTH_KEY',  '2MApbbQrZGlf3xDvd0sBbLdvBAKo2KwpUcOcaQt05f3eEHJ3JNntkq9453ZNGwXj' );
define( 'LOGGED_IN_KEY',    'jgPJGirgnWtsKjOgLwOnauM7jgQJcMmEIP5VTMfaD0SLk91QgRPGRxTf1lI8VfB5' );
define( 'NONCE_KEY',        'sqHLBOGfzA2ind5xvgXGzI1gmoPKy1wYRwwA4WgHcCD1lwMa3wHZKdT3XVYir6Ij' );
define( 'AUTH_SALT',        'SeinHwEUbuIU0ScNQgwW0WVhJC5oyQ38k6BnmDOcMWzPG2yrjYK7VNoERYbMrHTA' );
define( 'SECURE_AUTH_SALT', 'olgfoOZp11ZT2ofy1SjGjEcIMnqmmvd0rBueg59bmGzVHAQclPo8KOFGLKRqbdDn' );
define( 'LOGGED_IN_SALT',   'q85b7CU2toq53eIxAFcipkEyHFo8Z0QSBwvTHQ5rix5Iivp7r0M5WHooLl0567D1' );
define( 'NONCE_SALT',       'zKaFbJabRo1HNWAZo72dNrjdCSuJW7uIDWR8nqW3kfj5TYxjj4v8YDVQAwJ0H2xg' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define('AUTOSAVE_INTERVAL', 60);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
