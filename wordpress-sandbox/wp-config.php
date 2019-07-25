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
define('DB_NAME', 'a_wordpress_sandbox');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '0r}k=(=vo6yPOtcv9Ho33mh<o%t=n3D8DQZ(M;JNDk3U))ta;TJHp2Z&0r@lG,LX');
define('SECURE_AUTH_KEY',  '(7t6J..y$nJ F1g}:vwCR|}QNzR&2a$52Lk`mAX;8$`k>+DsvYA89NsNjH{Z8zA/');
define('LOGGED_IN_KEY',    '}bTxB N37 p+*Y<ZPVO_a?6/?e(G%v,Bz]wUv>$b?W1ZOb*rE~9w:6F7Y-t3$N%f');
define('NONCE_KEY',        'zD0/lV$SGEIr$2FO(X,]^GACiTTh4#pUm4 Wdme@/O1JZO;NI5EUotU%Y[)9~0o@');
define('AUTH_SALT',        'K#-NT@6l:u/)O}inlCdV&9%-o{V)8T$Lx*LtK+be*ngzeRU$?*LWs;M_AObZZiST');
define('SECURE_AUTH_SALT', 'DTdh>+[/`UkPI;L6g3Oas<&N0_`.s~ C6m#N?UMM@SYoqkcT|Qrvq2[s~yPVUt>u');
define('LOGGED_IN_SALT',   '5te~Q:65Vv?u4okT6Nd`[_[qTl;K[|kc^g_=,l7]a#w2~,Xhk0pqe]i<7@i{s.z2');
define('NONCE_SALT',       '*2:G P<6H_7?HGog|fJt#zA{:pe~@.38)31S-[2W]<f?h?B&^Pni#j]9^[Pj;2e:');

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
