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
define('DB_NAME', 'maa');

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
define('AUTH_KEY',         '1;-aaI.e#YR](8z`E=5iB+wuE1!8HkJa%1[:w(@E>{N(F@voSi3wm$d{z5v-U4?H');
define('SECURE_AUTH_KEY',  '0^ylkPBwsg]0/L`c+-Ic*J0Jq9cmDn{|+)6-@6jX+q/6^b7RD*F>O}acSahAN/GB');
define('LOGGED_IN_KEY',    'i#fB[MPFvX[s*Ca3T4A~w*4Gz@6T6 jT]/PC3G,gL*HZV/0|2vZ&&IODJ_[5[?]]');
define('NONCE_KEY',        '~Ai)~9?:p<{DK66la+Zhwq]H xB]hT8K~F9l$bFC=XJ{g6V_xm{_A;)EiHv&]>o%');
define('AUTH_SALT',        'pOdAEtFXQ~7tI|=19|%c39S=.VkDL[Mr1`LM|[f[5^RkEHfCT.d*I9}n%,a!dlcv');
define('SECURE_AUTH_SALT', 'ns.BPN@OC4tPT_ n+g}RQEY|XVFF8D|k3;q=a=aa<w;DI xva|!rP_]J]Lc0yrLA');
define('LOGGED_IN_SALT',   '0dFUp,vzP|XNDPx@DgjMdM+g0Vaqj}w7+ J(]Z*A}an)nR]?/E)y?+1lH12Om4*U');
define('NONCE_SALT',       '_%OyVDS/GsWo6S.jA1~s^A -}){[[sHXI`%}sn#M$L_vS>5VN`6:VF)#,8J%E;WD');

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
