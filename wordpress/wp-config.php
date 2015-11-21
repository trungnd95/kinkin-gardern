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
define('DB_NAME', 'shop_hoa');

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
define('AUTH_KEY',         'Hus4X:`Cd}_BbN|^7gdusOsm|@+Er$FV#:vaN-);4WY%7j;I+s11IJJZlZ%-z0<l');
define('SECURE_AUTH_KEY',  '52Wo+_X`yTpw.1I/Pur6<|d*EXntj&YG5%SzvcF/1h39A`C?Jy&d<+C/PbelhqD4');
define('LOGGED_IN_KEY',    'vy^/+K4R5[%n,[&zj@sHgAuL+QCjot{LL[-(Sf`|cC}$+ntfKd[7Su-_g|Bu=..?');
define('NONCE_KEY',        '}](u-Y<XLCme|+NC)QC1[#nO/MRHm!XeQ-H_*^1|YC<@v5+$OxYWcKl |YALd@{M');
define('AUTH_SALT',        'lZ+ba9A61 ?vZmnF8lgMpk{-5Jm9+$Kc`m2[<s;d5(*5vQ;I{.L=_(|I.</MFf|Y');
define('SECURE_AUTH_SALT', 'J8 +joN[Rcu4% 0eod,-K,A)T5V)`y&||p,zF3b~+/5T5wTicfSaSxczQ@ni<-AH');
define('LOGGED_IN_SALT',   '`ynUj?[<hgO*I`OnjU|M3KhiC AhDmS->jbrp(rx+3pPj<1%&m%-BLiC,fAfO@m>');
define('NONCE_SALT',       'u{sZa^WHpd+o} +vJ=$u-:9rKLY@l#UNt+_+hNS+ 4jR!.ne&jiL!9HL$^ktG}|a');

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
