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
define( 'DB_NAME', 'rectubmx_wp296' );

/** Database username */
define( 'DB_USER', 'rectubmx_wp296' );

/** Database password */
define( 'DB_PASSWORD', 'V]0p5Sp6f.' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'nqxncmuqb8haucndf7kc1juwkrexxftdnh5codum0wu8cwxw7xuvtrx9yw4a2hmx' );
define( 'SECURE_AUTH_KEY',  'umhtgrxdatk77rbgollwuxxxbki88sl3qwtgbzy93f6m71p8vka5tsuujjnxeszf' );
define( 'LOGGED_IN_KEY',    'vzz5z7oiwnmadkbcs3dachgvgxehcuitfekszceizhgarqhp4a9s9s98xik0ukd6' );
define( 'NONCE_KEY',        'mekj7hzkfdaddav0zelwslfopcrtmawrna1ts7eqv6kjkrrlomcwiwy7shldsgfh' );
define( 'AUTH_SALT',        'cvdsmkiuceas4vaecsue0g0e8cbmst0bagtpnqvk813s4korvp9guf37odqxsjza' );
define( 'SECURE_AUTH_SALT', 'o4pw2vgoboriqh3kn20zmolgbt1kxrgtzxf78jxzieofsftgkemmgbafscdqy4ib' );
define( 'LOGGED_IN_SALT',   'ltioxojnupsie27ny6zecklcnh3yqww9ibjoq6047x8orsrysxezlpw4eksi2j9g' );
define( 'NONCE_SALT',       'boijgco9luzcwjleq6y9c7nqfvxmsyj3sp9i3aetxbgbxx1ljwicttnzn6mjaene' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp0g_';

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
