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
define('DB_NAME', 'bubospec_camptechsolutions');

/** MySQL database username */
define('DB_USER', 'bubospec_jerz');

/** MySQL database password */
define('DB_PASSWORD', 'accessdenied123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'v%i^z#epwQ}_SsGWx/T#7+6e<coc#W!WDMVyQDYJ2S.{ErZs^RC8+Ynpe%r7X)/Z');
define('SECURE_AUTH_KEY',  't9b+1qXl+iiB*&WZ{}Y#;ol!uo)e^n:bcAa`y9r:y6N*-:nS-]aYgnR*vt}RidU+');
define('LOGGED_IN_KEY',    '8!*.;m,4cy, A>3mc_L@IsIZva~5|{KjI ]wOt(?cff%!-:MGbq#Jr%3_.n>f{pm');
define('NONCE_KEY',        'yOp@-4_I]b7RS5<86u)DU/lc6@Ic>QLGj+UfbCaxt$#Z:G*^36Inp9[N)X~xcvI)');
define('AUTH_SALT',        'C,MZ*wy$@<GVPfH(4b4G$O/.RdZULItRu^Lxc%1TM/GEDi_1{hoihMxnx8o|B/.7');
define('SECURE_AUTH_SALT', '`m>2gN{G{q3<U`~~8PNcuFpUvkJ@CUH.R)PV&;B9S8.TZ/6VHKaI#PY}9L)nrmA ');
define('LOGGED_IN_SALT',   'L56yO(z V{YM);^*wU/OHxrp:DTN<PMAWtV0]EU0&W.3];CZ98gLczw(N7`4`lQ#');
define('NONCE_SALT',       'eg9@tl51O,mqr< HX),Z@MR]/m:Gxxok_3lPbE?<a;U2sw3z?/OpDI4oXYMXk7|>');

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

define( 'AUTOSAVE_INTERVAL', 300 );
define( 'WP_POST_REVISIONS', 5 );
define( 'EMPTY_TRASH_DAYS', 7 );
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
