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
define('DB_NAME', 'wp_1ehb_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '+U]H2!pU$.ODxI{lRf{P-B)cr}7`B|{]+S/A$dhLx}a-#]5^#YqU{)}|@MpwWLK/');
define('SECURE_AUTH_KEY',  '$(C;}7>{RlS,$({0aI><b#k=u4w}.*Sdx[Z$#9Vxbd$P|^1gFo}hXdE 0@/jbOQ,');
define('LOGGED_IN_KEY',    '!ef)5Vu^0+t{hG0e#`nF0iES0WiS7s2R+^CZ3cO=p`hBQg`|gA_/&#{/L FT^zfl');
define('NONCE_KEY',        '+%d%*3Kx*=t%TI,-wYP3DE1kSecI;m`+(ikN5|!4F>J!Ax-1-}=->wJ|*s`S6`8Z');
define('AUTH_SALT',        'ygU<)r[:!s_gbR:6o Dt|h*r#n8(*_}*Z7#TZ|@sA<PKnU .9_G-@Hf#Te-GI1dg');
define('SECURE_AUTH_SALT', 'w@?!_PUDG!j{=1S9peOpg}|q2/ze4Y?h)c/RQ4v_|=JTuG#XC4Ee7NPZ b2|/;@j');
define('LOGGED_IN_SALT',   'H<mw<sJ8!~Tcy_`MjX(Q(`Hg<Z,_w>J=-T/fwi3140;.-tKh`uC4Fn`SC$1/ATyy');
define('NONCE_SALT',       '6hL[5g`PBclpdnaRI@)<&O+|t!k?ABt:lZ3R)mSL7?0WU!-v 1szE7kU!?`c<y=Y');

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
