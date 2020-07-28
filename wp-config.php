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
if(strstr($_SERVER['SERVER_NAME'], 'fictional-university.local')){
	define( 'DB_NAME', 'local' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );
}else{
	define( 'DB_NAME', 'db895ybn53p3as' );
	define( 'DB_USER', 'u5ejz9bctr4sv' );
	define( 'DB_PASSWORD', 'BlueNoteJam' );
	define( 'DB_HOST', '127.0.0.1' );
}



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
define('AUTH_KEY',         'goZBV2SZ0NTRFBnd7mkbfDDziqzPixVNeKgPzTsZxcIs7hI094QsEPexzeET9rERSTvwP20j054TB1jVwTc+pQ==');
define('SECURE_AUTH_KEY',  'T8QTDhmlTQMYWRkpQj6I/LuYU9xlTAChHkBkGJ204N5sX3X+CtljoZzSPYJ+O69UMXvGFEvdZIuAYbtKfQjzcg==');
define('LOGGED_IN_KEY',    'bB0pBIviG8jTn3CWQT+72J+bp75hklGGxCt0uI0aAvDU/lr3/zGJ/nsPUCc/YHjjPgYWafwEW2szC+ya2vVXjw==');
define('NONCE_KEY',        'xfKbHjX4yca/NOqJ6i2efW6XnRgN2AMiU8x5iAlzNY0XizkBDigEu11J3ThciuO60Twl+KElUXz4DJqPIEgMvw==');
define('AUTH_SALT',        'pYcJgGcjXpxnNvi/F2n140AU3OP11zHd7bMyGXdC9DXv8lvo9ReXeQQuqlwdPhyl9N5011jvSQSWvMErjG9xvQ==');
define('SECURE_AUTH_SALT', 'p5hasYEd3qtQMDUq0d23NaysB/IY8WbvImKYyUuLE4KtmCv+psCjygD4oAgKnDhlAIVTHG8zCybc2geKdBJUiQ==');
define('LOGGED_IN_SALT',   'sWg5ybMrFQGgNeibmUz0ltdWseitWzCSOIPFunDLEwHRgGcJrFwIfMtXesxMk2X73U81/xV68vmi4NloQmee+A==');
define('NONCE_SALT',       'XWGSynAX+eLil3+G4g+gokZIoFY8TZdkMpaZjCaum8XFs/u5GTJayh7TTGUwwv/geN4eEPCAR7GYiDnUY7Ra8A==');

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
