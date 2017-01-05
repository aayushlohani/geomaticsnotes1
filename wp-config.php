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
define('DB_NAME', 'geomaticsnotes');

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
define('AUTH_KEY',         '+}!L^[VE~MKo:yLc|N9M:;XDGJb0<IYiwoq<%js&bPG_Yz7I<?QOHh=$dQ?>ri (');
define('SECURE_AUTH_KEY',  '@bb,F?G9Uwp{--9]MRd?JVOg0}!]c;(&0`g8fw6DStYlCIVD?}ZqiEH`1!s)}I|(');
define('LOGGED_IN_KEY',    'IBRzP+F7QKCIdFae%OkvQ-z&3ZbnC{G>a5q,gZ-JoYvyKfItLp.B/,;PwQk-lT+F');
define('NONCE_KEY',        'IZ:/[Xtdh:IIU4M$mWnX@e|PQF+322!EbuvwE=*IFIej62NP9_d23v8C[|}`]1NH');
define('AUTH_SALT',        ';<YUT6]r,N)[>SH;{,tLZ{@^#h~.$ss{3w*3beTQ.->gm_Qz6Y_%*(T:>B&;uYNR');
define('SECURE_AUTH_SALT', 'NFxrfP&<o6F}>:Mvc/?O:Yho^=GlBLQr7( o^*!9U8=g6&8kmWAhhyt6hLdM?)~U');
define('LOGGED_IN_SALT',   'n:K>&/Oh*z/G#ptH<K`7p]y>eFy~gAv-u~cZ [*Unp#><#Ltm=:-Qm/uJ%ew%inj');
define('NONCE_SALT',       '^^d:-FF5&*h`84{#Ii5oopwPARpxj:sMj|W&YV[l$nN)Yl}8o%V!A-?PL}T7SaLB');

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
