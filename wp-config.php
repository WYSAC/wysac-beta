<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wysacbetDB7rago');

/** MySQL database username */
define('DB_USER', 'wysacbetDB7rago');

/** MySQL database password */
define('DB_PASSWORD', 'B8suMSBGGM');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'MDOt-#KSZh[19Gls~CK18dlw4CKRw~|1Vdks08GNs@|JRZg|08Gksz!<;6ait+AHP');
define('SECURE_AUTH_KEY',  'mALqWem]6gnvcFQUcn}3^>MUcj>37Fjv$BIQY$,{3Xfnuw~|:Rdls18GOs-![OVdk');
define('LOGGED_IN_KEY',    '3[5Chow~GOV-![1Vdks08GNs-![NVdk[08Gksz!JRZg|}4Cgov@BJRY@|}4Ygovx*');
define('NONCE_KEY',        '{eqyAHPX+.{2Xemu2AHPt+.]PWem;6DLpx*#LSai#;6Dipx*DLSa~#;z^>0Ucjr7');
define('AUTH_SALT',        'Iy.{Tbj<6Eiqy*ELTb*<2Aemu+AHPX+.{2Xemu2AHPt+.]PWem;6D,}4Bgov@BJR');
define('SECURE_AUTH_SALT', 's:Vdkmu+<LTbi<;6Eiqx*HPX+.]2Wemt2AHPt+.]PWip;6DLpx*#LSai#;9elt+9H');
define('LOGGED_IN_SALT',   'XyALT8GNs@|NVck}4Cksz!JRY!>0Cgov8FNUz,}Uckr4BJQv^>NYgn}7Fjv$,#19d');
define('NONCE_SALT',       '9t*DLSa_]29elt+9HOW~#;SahpQYfn}3BInv$,IQYf,3Bfnu^EMUb^<3Xjqy7EM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
