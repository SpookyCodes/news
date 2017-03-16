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
define('DB_NAME', 'lesson4');

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
define('AUTH_KEY',         '7x{5yp=68=+,gEj;zdQvi$E4O]KB;35zn.;}Az4pn1a8!!/hb^.qI9]1z7{J(b/e');
define('SECURE_AUTH_KEY',  '>Rf(c<rY|Q8|@j@=lXcWX+aze2V3XZ`~BOOS;uwPE(<jXx{&{Y,vNP{d2F|/L%l`');
define('LOGGED_IN_KEY',    '86vTuM>G7a{.7%gZ*,H[xY<@U^ek^o^mnOFIxwaXB 4qg_ uXo~~SZ;L)|~UB@Z1');
define('NONCE_KEY',        'YsZ&pXvWF8qPJ:(T&`XAj)No1K?*l0UPw0>&kK}ryBG4|M0+h,1Ju.lKmr1BnU^p');
define('AUTH_SALT',        '=W krx#bQ[LvS{~P01GS*-!aa6Xhg]FB!mD7]BshM-/8S{C)`/^ieep7iW92}4*P');
define('SECURE_AUTH_SALT', '8fm}>Bt:5+kg{ki2a_!H7Rs1+(J##<IIW~E}z7DA >ZQ&K,$f+szfYoOxbkmPd{B');
define('LOGGED_IN_SALT',   '9d,xJy4AAkE35V-@uzS*o0!:~s.JqT7F#Qm4RC+AIE-/LMk)Bdxya&d[F8|Bw!Bv');
define('NONCE_SALT',       '7;[;tch:LR*cI<<7nyQ|/$0Fqula}8ok[s7Og@jWQ|<ww55pH(s$;K5epn$7>{*j');

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
