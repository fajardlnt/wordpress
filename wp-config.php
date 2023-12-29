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
define( 'DB_NAME', 'amicalemuslim' );

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
define( 'AUTH_KEY',         'JJ2ZcEcEE3nK42JJgUYeQL86GThKWag0AUpEpFxTod7yLu6l7iQKi9gpunWYRDZ5' );
define( 'SECURE_AUTH_KEY',  'vvS81pjLPanmR7KDvuynQknfhcXstFCG6ymIE7sMyvrC3JMMImivKVBh52Kaa0ZZ' );
define( 'LOGGED_IN_KEY',    'Yroi4ZZ3KKTWj1WkPZU1HcUsSLQRXDWMfPK8h6gABNTHOQEcXKvjTt1imww0EiLw' );
define( 'NONCE_KEY',        'i4xbwYjusGO0G2dwlR30Xz7gNMCWDNBYK9krkiiUDEgtVT38rK9coAFSEhOZnyZy' );
define( 'AUTH_SALT',        'TiqEa9nBBST8dNlIsZBfoVZT3UDFWAAXzlwTx3RcHmNPm5p1qxWUbAPiVv59BBiA' );
define( 'SECURE_AUTH_SALT', 'xcZfCB90QoKhi1X0uVg6834fDicx9MVocw9oxEPILMnkCLy9i24yNkmqFBzSc6nT' );
define( 'LOGGED_IN_SALT',   'psSACiLTauVGpKFU6Jwlyd5ZJ1eZ3Sh8WCH1XTkXV0g70iRWJDrJYcLmZyeqzLxH' );
define( 'NONCE_SALT',       '5VnrPsua81mU9XKjwGT2YiYJELMoKyXLNkP1Czsm51vTKt3TAjjAMxkPBtys9nZ8' );

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
