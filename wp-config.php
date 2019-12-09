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
define( 'DB_NAME', 'emerdrop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'MGuyrIdniNPgdzMvtOT4WFyAl7TOTcYDNLbZnA2n9dkOA4s0UlWvPVNX3jkGagay' );
define( 'SECURE_AUTH_KEY',  'P0Cn8t1MtsW4WNq3bgzV0qEBwlBYRRHYQRW4JHJ7mSQd1frMQJQAh7AkPfqkKoEu' );
define( 'LOGGED_IN_KEY',    'Iu3RNZz0oQ5RNWVrDGsWCOOmSUqfzw7GQwGw88ucAKLMlC4N8Swi0sWVp3q2UUci' );
define( 'NONCE_KEY',        'vkq8hABS0f2TmpHYKTHQFAcxJ4UMVyveAJOsiIFXOx9CqG2tyteziJesfwylZfAd' );
define( 'AUTH_SALT',        'VLEMK8vOYNQPjgaZRe10DPmQUWZTlEggBD1Hp7I85uUSQ4xwL5VmGfh51E6tO4HH' );
define( 'SECURE_AUTH_SALT', '6y0T2sE5n6v18nK1njTuq6OiLJPn99FvjFAPlYdjkzvAWi2DsRqlMSPRNjFi05J0' );
define( 'LOGGED_IN_SALT',   '93hIHeruyKCNPBpx6LymDQUkXYyx7NpQnLlTH7V2ye3Zmu2fpfkqd4DeBgLWJcd7' );
define( 'NONCE_SALT',       'fa6FahUjQJuM6hxjH3kY9lb5tuQRZStDfPvYQ63YOBByCcL8ekxstWNjT56aGMti' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
