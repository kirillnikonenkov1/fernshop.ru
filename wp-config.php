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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'f0466270_app_wordpress_0' );

/** MySQL database username */
define( 'DB_USER', 'root');

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'sFtsyka~Ckv=;c-PtHNE%C,O`Un([d2|v5bN4$sx`qlF0+LM9o+Lc>-jh|TSKF>s' );
define( 'SECURE_AUTH_KEY',  'Eu/9G<*c6^X2O,en)SP5XTnzw^&:y)OwgZlkGHn_6s{`O?qZSc_Xv2HM?5I%m3`}' );
define( 'LOGGED_IN_KEY',    'd!wJCWc?>KQXwLa_(A{:{[EG=j)lPsZ:@F?Sbo:dP%-nOG|W>f~?hBf[;[8K=>*d' );
define( 'NONCE_KEY',        'Nh4Y.+/Z%G,FW9`:3t[lVxKJVQ!DI|;O5P3Tz5QYXw1v>1Up-wIe>AVCNg,Kg}~f' );
define( 'AUTH_SALT',        'v0*wXL~I8(D6zPo(TZ1.}rb?qC4d4l3M1}4S,<4@=u=/~7e-abc!u-5@8{xJgKc@' );
define( 'SECURE_AUTH_SALT', 'pI5PaK?,O<t0Ce,Zk `OYJq0o?$;Y6/{ 7H0B_w5i~,GOqO4vt|]r6|p-&:!~r-S' );
define( 'LOGGED_IN_SALT',   '(Bd;7<XkD|H!M Y@cvh<.WjSrKg|$>D3Sf[0n%f$R%.xBAQ ;4IKj5~9PA6I4xpA' );
define( 'NONCE_SALT',       'I)sJP-Y5kMYvK3In6f2 :F$?8)}ecT{/+;;;Al&<@TW:.LV.~j.1)B@&3Kzx%Ehr' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
