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
define('DB_NAME', 'vilarosa_blog');

/** MySQL database username */
define('DB_USER', 'vilarosa_blog');

/** MySQL database password */
define('DB_PASSWORD', 'vila321rosa$');

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
define('AUTH_KEY',         '4U*k7zN6f8KLcfujBN(EI+N~thTU@U0D,KNM7/dSjtiD(=ie5ek}F;x4j>cQf1w$');
define('SECURE_AUTH_KEY',  'S${54%>5nq&.l&.[*9+w`--9w#`s(0}} ^zFKJca2ML0RK($6:;pg.7=lpC.Vt|D');
define('LOGGED_IN_KEY',    'n>p<4E/pa$06#,47_lwNV>0CCge5;2kl=>a2;9RM=jgZ25t+u<L:G$C[CUCReuUO');
define('NONCE_KEY',        ' Gdo/S-%Uu0zT~Kgt@gZL08FRcpt.|Yr--*/qY`~+7G|zIa=TCr+hd9%EJtTpKw)');
define('AUTH_SALT',        'aiUlldv=FPG4 B=2M+9_8gJu!|S_M}RvO2*gZTtazwl[%]vvt9F^^|dVw,A~h|y8');
define('SECURE_AUTH_SALT', 'G%>1u._pJX,+5/t.Jrd/+Ij!Q+XQ53x=C?u|&?jRQ2iWlJ-Mt9WpnAAOmN@+[9gG');
define('LOGGED_IN_SALT',   'dG:$NPU%,{vaD{qJV3r@a%[?PX^^7aO^0_{PL{#_ekxg1O<!5%}q?sOFtU(Z+:OX');
define('NONCE_SALT',       'Af,#!e{gO/Lnnf6HW7ZA&3SjU2;ao%;k)_`L8r*vG::[VeUGYQbV+Z2{?vI)xtxv');

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
