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
define('DB_NAME', 'le-red_data');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
 define('AUTH_KEY',         '%db@=9[k]_R=TXQC+G=|F}#a_L]Kp#Y)%.tE`3U*;+4+DR.:v#|Cj?%rtwmY?{v/');
 define('SECURE_AUTH_KEY',  'WI$Ypx{r,( @?kLN?YM2i12=z.IyoX;n!A#(=/fc8V~&a=Poq!5|1Sm&0[lqHRXh');
 define('LOGGED_IN_KEY',    'Y wc(W7J+Ayc]8<8uZ/,UD%-AXuzR0!T(}wPlSO?;x+CHJ}KYIr6 jy;>]a&#Cy,');
 define('NONCE_KEY',        'x zxUM/.vKg0|rV7NW6+v_rn~py@.mnei+S.`u1}3QubGu}-6oJ^]X^,thPO(;Lx');
 define('AUTH_SALT',        ' t.)d`}hRJk;w40O-[.8Z/3&r(XEq.Z*s!.ni{}sNyhG3DeHG^1)N0VZ A}2Pk@Q');
 define('SECURE_AUTH_SALT', 'd(7Ny(VC5_O+YR|-ob4?o_NMi @?w +!N2.D5KlC]_7XOq ;+F$qlN,P?BtxWvTf');
 define('LOGGED_IN_SALT',   'L|Y+>iFyzDa<L$bR<S2<Dh^g2?HzfAM+o{~k<0fn(@Y5%o(G{5V/LP{`C^9~HG@@');
 define('NONCE_SALT',       '.H@I.t#A`-vX+opY%KWjiKBN2[ZI^g_E}aa0FTAtEbEX3N.vZog=Na}i.~!A< M>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gcke9a_';

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
