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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ArchiDesign' );

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
define( 'AUTH_KEY',         'Ut2QPQBjCt4MYrJW7hY4NrEd8jDagYvdS48DFjVt093F8AC2KcUcJj6WMEGehJl1' );
define( 'SECURE_AUTH_KEY',  'wlmGVyAM4XEeUB8Jv3TJXXvgYEqeTNUp0l3tthWulMh5H5lYzHKCppel0x7PfKq0' );
define( 'LOGGED_IN_KEY',    '3IGjOj3Cks5Tx8NEyA0jGRBKjzSya2iqcbkK8qo0xnWM3gryAECDmpkHM8F3aAkp' );
define( 'NONCE_KEY',        'zUl18IkEECT0VQIb4xXgyEh5PC7rTrmaDvPy9w2WKj94Ndpgxs07dM7oE0Q3L9Di' );
define( 'AUTH_SALT',        'dB3VB50k9KTbDelBUHrkR3JYQ6G6Ytq5khWUmqe5WkT3Ns1kiOD1NfW0gtTqqS65' );
define( 'SECURE_AUTH_SALT', 'IYmyvQBapgjQfJ2wXfHUzXOsc29peGO6m8ebZzGJ0UyJ9D7UiLw2Jf3vU4rDlH1l' );
define( 'LOGGED_IN_SALT',   'ra5Fc9Wt5mtGgMlOaDP5jY3VIT4MGkSaimX6oitfmZSrobklSEWl5NWkfGln4BC1' );
define( 'NONCE_SALT',       'f1tVGIZdPMrIPg9lgP5YmKq8z3wj2nhI4y62ATEZzNehtfj1kfEDd5eR6auI0W1U' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
