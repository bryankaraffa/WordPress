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
// Require RightScale DB Information
require_once('./config/db.php');
/** The name of the database for WordPress */
define('DB_NAME', $database_DB);

/** MySQL database username */
define('DB_USER', $username_DB);

/** MySQL database password */
define('DB_PASSWORD', $password_DB);

/** MySQL hostname */
define('DB_HOST', $hostname_DB);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'YkAT8I4+,^RGh1N!yhE.]NHNFyBR Pce>$|Yf+D>1.}J}*Fj@PKGRc~MA/*l9}|-');
define('SECURE_AUTH_KEY',  'z71-.-WcmfbRO&8`+Ps+zo5hrgO]ey8ri^;,zrESp@Q,|n-$|.ze|+-y-cHqVgf)');
define('LOGGED_IN_KEY',    'mLQO:lI,4TPl<:us.6efR+8Swyf~5U*3$lJ@p><~,aNi+nM?!#qr]J-S=WSCzt#R');
define('NONCE_KEY',        '53hCJ4KJYC? 7L<w$bvX*h+Hc*cvVvg3DQHC%%Got>bJgrqr_!+B<pPu-P(r)gfU');
define('AUTH_SALT',        'As$%MRx|Vym#A|$fkf2g|X+|-p/?|YwT9C[|vNx@ZPWuS2mNa!Hp.sia9]|Eh=c-');
define('SECURE_AUTH_SALT', '~>=)R|[ J$+Aw 7Pw)-n(c<BE3kb(J-7Bj0K&6fa*6Am<$Y-14HtsS!PzrA~l_)!');
define('LOGGED_IN_SALT',   'WOOOb2H7s6[x&;Jex^/~0]qAh-0F=Bd7I|=-Gh>zo!.3D=F5|S-9C]iY6l+ww)2N');
define('NONCE_SALT',       'K=`r?|Qg&cgg|0)}E|3;`B#s/%u8b^N-@;jg|nmoo9`AB<6:#rO#(o&f!r/m&s#t');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
