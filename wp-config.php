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
define('DB_NAME', 'clublusitano');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');
define( 'WP_SITEURL',  'http://local.clublusitano.com' );
define( 'WP_HOME', 'http://local.clublusitano.com' );

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
define('AUTH_KEY',         '5r_@.fxyZ?]KPm|GSEVD&lzMw-O^4bVWmRo,N(O=Bp4IT+Qw.ss;z(I@e:LtWc-D');
define('SECURE_AUTH_KEY',  'l6WzZA> k++i@`vf-:3V==92i&K8IF4auDxmRl?iWS+gqde[w^Q$9|#waC9CHuH_');
define('LOGGED_IN_KEY',    ';L.&n|E{{/]m-7 +em|$V|9_|&.NJrGfh6$W24qb^ctu|j$>CXAtG]rA{,GZ3{li');
define('NONCE_KEY',        'Jo?E2QZ:zG/b[vk8DF<+/xfeY,R9T^!*cFG~5J~S8cV%bA,[a@aADIAbE}7seG;B');
define('AUTH_SALT',        'TLKLy9n|~ndbRT*z,a;c:AdwErPG=CmCOF4>NFpMVeJ#Z,K%bH*|>EZ(DJSUqT[y');
define('SECURE_AUTH_SALT', 'LQS<dk/Z}<Oy]1-i#b +}Xfo-,Cq+^}Ll]L?+z1Ki:WuXfbVAIWs5<|VaUk+ztxa');
define('LOGGED_IN_SALT',   ')rRRY;f__1maA{Ps~UhANYg!fce9A.-eEmsju|`2Q)N=}h0JO9T%_9pS1|r_+Y`<');
define('NONCE_SALT',       '-!S;5*:DJ[.Ex^nzBXvV0LI=+=ia!=7O_f7,.tmw?>hQiiJ@FPFyK|3J7}Vsb66i');

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

define('WP_MEMORY_LIMIT', '96M');

define('WP_ENV', 'development');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
