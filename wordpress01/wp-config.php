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
define('DB_NAME', 'cong');

/** MySQL database username */
define('DB_USER', 'cong');

/** MySQL database password */
define('DB_PASSWORD', 'anhlathe1');

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
define('AUTH_KEY',         'sk|B)mhn[K6cOT$@aZ>|kfl~g,RlT/gNKYg3)Zh;@kh#R#PY/F@9JWz_F5SjUSFB');
define('SECURE_AUTH_KEY',  'Tib|os0vZ68;|Ni;:wkAc!Y{ILnt)%,u^M{>0$N9vV}/;MHJ7Aqiu=U.Z:1Bu|7U');
define('LOGGED_IN_KEY',    'MLxzRW*E<6hP!$t@BuuOuq{fI,;nVbLu.:JLd=h0koJe&R55yB k,`F/C.s4A,ke');
define('NONCE_KEY',        ';CO#b%I.azWj&UBRm7XC(3}T@Q%`< x[IO(1058Hz7< mj!0EiY>|&{j,_<~>(m>');
define('AUTH_SALT',        'nb9u>Q<4w`m7Q0zD:lIohyhZ.IY5!+GKt@~78m)H<-kId0`OU&!t-rDoQKmK aMx');
define('SECURE_AUTH_SALT', '2sBmY. KG:a92*jB>Pq*eq_S2vBV7/DH5L:5g#-A2h!^{X}?MQIS9b*})psSrU``');
define('LOGGED_IN_SALT',   'Hev56m~?Rw ;,1L__g!646qK5m~c&Tg44s%,_K=O3#%TkUaa,2@tvrIz;d<MQV%`');
define('NONCE_SALT',       'mX(j3QX*x4NKB`V5nOu7/kk&*{:;C0?_kJf>cXdqj<[-[I8w/infW=KdHMWPc:(S');

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
