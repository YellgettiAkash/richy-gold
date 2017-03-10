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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'L:GJ?GW%HT6+AHQ:]4:jGv7:HD7i6Yz#{$J;;+e&`SEmb1k6^-p]2/dc#0JCiJa%');
define('SECURE_AUTH_KEY',  'R7u#on+aAS#lho,wZQm_?b?r2M_<L}v$zJe-f-nJ5MQxdm*e@#M`ifW0K3pIl.GQ');
define('LOGGED_IN_KEY',    '^^fix| AcuqAH79Nrh_vG0*AqGuH3Ux!`ia7Uo:yT6QT+~0}K[2nJv)|+D-$Q>Bq');
define('NONCE_KEY',        'lqT<N*(<60HUWU!`@Y$>!mS*W6I7R0Qn4fq_z#yjw!=H3[;fWlAtnolY v$8:fb#');
define('AUTH_SALT',        'lmy/Ec*Xpd1UUnY8#|!{^RRaw`Cpz0Dq)pUig4TCc(/Y{%8E)}$qEhTbv3X))INd');
define('SECURE_AUTH_SALT', 'k>i>_&c/&q@a6(aB%+nX@mVrc`G)@0KAG-].3;zI5|Bq$hIcR$kyE4W3?*L+F[Nd');
define('LOGGED_IN_SALT',   'Pmcz1B <W9Rc2FE{OR_rIxG$+Cq5c6ir{Jv@q6FMzGG&:ok|3lN)5S+FdkKsb@&9');
define('NONCE_SALT',       'f1Q09[DdG2%[tD6Q[wD24Bt@-U +$889:-}~q_H4N%(Kjh_Hz$m~c0p/ok6|-ccW');

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
