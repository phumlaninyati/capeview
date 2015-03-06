<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'capeview');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'z6lWrC8`M $)0Nj/aZ9l6R&j7-Ql}PwV|^0$XB6nKanQffArD+.-wxlC4$@oih,V');
define('SECURE_AUTH_KEY',  '--%IG-I|VMAsU*/+|DM$RmdVRGGNx#2+Y@|q>O)FX|DLGhOU!tQ7 )zV1Q`S~?Fo');
define('LOGGED_IN_KEY',    '}PVj^QTA=y;=]g+33|DfC: Njpr,Ij],L+}Y:Mp6KTckHNk@Ruf847I2-LL9B=j#');
define('NONCE_KEY',        's]0C6MV*#d+tzEHYZOfa7CcnUI}[QC]-aiD|L;bnc#^h*)jA.`& p4|c/k$f:apj');
define('AUTH_SALT',        'H<;l>*hEIy=V50U-*Oj4mu)sjssTrz=a|?_SY%k1b$EMO%DqH0`S!-2x`jj?Zw=*');
define('SECURE_AUTH_SALT', 'KcI_*;>0i9;HHLz]8t.pp[<Y!vL1ole2XqjWnfbYs6okKxN;@-3i_g*sx1bF1aQf');
define('LOGGED_IN_SALT',   ':Ci41]~E78JtG_+!<8NCY8o7NXDkpCVUL*mH!TA.K8[`pK-u:eIOi^jXv.>|2GTa');
define('NONCE_SALT',       '_Vw},7a?`.$+G#y;(ZH^8k`QIFGANa8$AVdC#C7<g}pvBlmjb`i5[oA]_Vxnx|S|');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
