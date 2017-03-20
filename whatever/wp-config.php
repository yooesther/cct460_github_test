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
define('DB_NAME', 'ccit4071_whatever');

/** MySQL database username */
define('DB_USER', 'ccit4071_theuser');

/** MySQL database password */
define('DB_PASSWORD', '!(_zV877u=zv');

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
define('AUTH_KEY',         '.{`]zp:|uH,EZXg Osq>/BF$EB8*]qZa?aIu eagZ-S&mO=&lfT{=~]:@oDUr0Fk');
define('SECURE_AUTH_KEY',  '{#TV1Z(q[Lo5^[*#>gRN{`q~Ix%/Xtq**e=6l:!K!41>h6?LXzidLd$<Qd%Njjx0');
define('LOGGED_IN_KEY',    '@r6@)a*1LMiZH43YaX4|`)L(5#ay;Gr;,#X):~JAn!E&#Mdz^9&jy}km6BLF]tjw');
define('NONCE_KEY',        'A^_&RA4:EXNnBa(64N=g:?@.bite>`,xF,+l?%^xz]oYx[|=5,fm<rZS5hEnor*7');
define('AUTH_SALT',        '^*84dXtoJi*=KBlU4Z=7d:82Rk?}VXm#QI4N/3oE>JAafEZNm@nw,g;N.Sw~6v!=');
define('SECURE_AUTH_SALT', '12)X}vIW_NNvBFd>OF]jW>)41$)Ga7<^}sJxqBH`S a]v$n61ZopV?._V1x0KzVF');
define('LOGGED_IN_SALT',   'v1ElTfmpo?oD:mEZ0*0|%u!4rWd3s#tAi+^H?s;DH7ebhmGs63o.jsBC8iN8 n+S');
define('NONCE_SALT',       'stCd!z jtypGJ]D(A{A@wc:mw6o!Up@`Hv2NhiYLN/})D1L:y1/<bVbJDXyb?U8e');

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
