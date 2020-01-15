<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wBZJA5dTJnDMJGDj7JbnIVsdixONyO+Bnv0ygDOy2LyUgND1rBv08Yu3QUkMh6yawcI97Zz5P71GLCmS+0iKMg==');
define('SECURE_AUTH_KEY',  'Ec+9VWaXWcHFeDH80SMmwkkoDKJXxxgB3oWbmr9oxp/Ht1A41OajMMDjT45WQ3/sWnrDacZfTzVbiU6HqZ6S2w==');
define('LOGGED_IN_KEY',    '+8C3y+q+Ou297tAjj408qM54XGOyc/4g3HCtIX59wbIu4yOMTQ320//2ky10DVitxgk6whSxXTvQCipmvh6Fxg==');
define('NONCE_KEY',        'TRg1QrzC0HXPbNcETCTU0Z7EmOe3foxNqezylmo6oYUjViuj80G6DPIV/hhC8j++/PS2GxWn7BTsZDyCfUfS7A==');
define('AUTH_SALT',        'J0ZdsxQRnVji4B2MYYxlJSG5+1IrukeBCBauVhtpPU8Z6xknuagH1WOZeUTcM3XLEO3B+JZlpwzBLxbyMCuE1g==');
define('SECURE_AUTH_SALT', 'XTh6KSKN32EBWxYXGLXG38ARCuawcCY1MGxzQl00UOmu3s3ujIek7r547lc6edl2nfc2nhN8+an3OUhnWG+ZPg==');
define('LOGGED_IN_SALT',   'fV2FHAl4NT9SZXZ3WKsrIENMhyf2qdn9sxfQWnJKmcy2fo99QQ43n3jz0cUfGjbB8FU7n4VZAZmutHslg0GzeA==');
define('NONCE_SALT',       'yy5raOVfhcdtRb8kNPJeTgx6nHAbgBr+dDDS3QksXWapJthNzVAkiB5aYynJrbPobUtmToTojLDza7llyVA5tQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
