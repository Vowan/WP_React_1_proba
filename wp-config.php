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
define('DB_NAME', 'wordpressREST_1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'nbuser');

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
define('AUTH_KEY',         'Dannl.=*yaQz7`5f>C/>T4Ky^Yc#K*y|zZL=lb*c9wN7$*`E]p+f}O )B(.XX3cf');
define('SECURE_AUTH_KEY',  '>|fy`=uKbcI5aw%[s]nBuzVA9e.72Yi0z~~bf6X|WL<ib%vsI*R6%C?4^rBJC:).');
define('LOGGED_IN_KEY',    'RTs#Znn(s+FDql0a<?:o?=d`7L.mh+4Qet2H]k|yHrom1>=vZBw]L~|2GJ4i56P>');
define('NONCE_KEY',        'QlgQ-u!XKsQ6PkYDo~GCYX6qbHP4KEk:cb>a4pO`HR}!*567qOFRAmJhgi0uP#*v');
define('AUTH_SALT',        '2N~OVYrEav$^7$K`lDLQ:NC/Y-2riwOO,aVLG<%Z}Etgqy-qF?ej_QFPJP7:zgL}');
define('SECURE_AUTH_SALT', 'e:[%.$VO4NO!@<!zmo;&d]Fjv.9x?mu^Sx9?smw{y</N[KF=0pjmKk;gm<z[H)YC');
define('LOGGED_IN_SALT',   '-^]19bWWG-6IZ<yHg:/xd/,rO9`.f}R:l[-KsNsJG=A!<bx?9t:8oshe`~!&biVj');
define('NONCE_SALT',       '?r <WY{sBo~@nwa.A,h2>^F>,L>(V7ppn=^MB86JZFe3]S7 a(/t<c`+B<zfR1i-');

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

define('FS_METHOD', 'direct');
