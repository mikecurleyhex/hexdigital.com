<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hex');

/** MySQL database username */
define('DB_USER', 'hexuser');

/** MySQL database password */
define('DB_PASSWORD', '852456H3x');

/** MySQL hostname */
define('DB_HOST', 'd2b45d6396eaed86afc06ec019ddbe3d8baf53b3.rackspaceclouddb.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_MEMORY_LIMIT', '256M');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '<x0tdhL~,*YZ1q$qv> {v=qvRq07)Wqh$DllrMVAP?Xx&UYfl%`wU||y?@tfk}5E');
define('SECURE_AUTH_KEY',  'r>yL<~0UD:8-!EQ:2X(1X3Wf&d$fd|7Fd-+FrYB8F6LT2xJBNwBTfTiWd!y:JW]z');
define('LOGGED_IN_KEY',    '_Pc16+v&nJroF%J<ky!d#daaOw/M^h1!B_-mC0?0vfE(Wt8=0N?9W@a8]+$u9<I4');
define('NONCE_KEY',        'n<gDLz(L_95M&iw.vNAb&V@eu)g,et+>2K+9YKx<<;NmvcL.5aq6:BU ~n.G=q(1');
define('AUTH_SALT',        '3NNm|cQUydqHw:GzO|ki@h2i^+74Uf4K?wqRn8jFIYSX0h>dVuS*SZO 5-EI !Hu');
define('SECURE_AUTH_SALT', 'DdD3DQ|`dIn9]3eUTJ+r*xjK^YD:5TX=0;vmW%^9lM~1R&<STT8Di(UV>{&hdvz:');
define('LOGGED_IN_SALT',   '5{?b4k59,$[(SSx-awvEb5N:Q_}WoZ/q(Up?eT@{$W/$i$R -Y?9fvfp|[@-,cQS');
define('NONCE_SALT',       'E/WqHR/QyFRkTDL=>)(T#2BS|-=?xCYhQc(KV<fR^&Xxb)B17QHs#:1kx|E%!uB0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'hx_';

/** 
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');


/* display_errors */	
ini_set('display_errors', 0);


/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
