<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'para_pharmacy' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'E>}aX.Q_9YsI*lsoU7O+DEz2ybO<y?:H.qu~NT)}npFWyu-?Xru#:OeV^71D/?8*' );
define( 'SECURE_AUTH_KEY',  'T+ikm+sEUg*}W8p4I4hmx8AmaMT;O|#GB2_.Z-J9a,{RKW.C|<46r-nw]rQ.oNYt' );
define( 'LOGGED_IN_KEY',    '0SRVAa4PIpO*YPap:.iLJvo{]S!`/5U/D9]9%d+~ib2p/d)C[G$q_2ysDXbils}t' );
define( 'NONCE_KEY',        '%3t ^[#^gef-3[v}zo8E?8$QQ!p9LlG@xTx:[KpkvyWFC^&krZJxN:2gm~CJUtia' );
define( 'AUTH_SALT',        'ylS3~?gh-04MatfrAKAbx~grbk}!;]*!0+>(xxZvP5k!f` oNjJI}<BG>IbqScr-' );
define( 'SECURE_AUTH_SALT', 'c$Uq#/?p+p}9>0EK8_4F-%&e+MN%bSJ9d/YmR*%hKZRf#~3*wP8o&9oF#>on-8uO' );
define( 'LOGGED_IN_SALT',   'V6-uu<}wn6%-08wjM^iwQlkf2O+;*ts:0Mf{]mwYS<UpY?ao)RU;%qe+e`)6Ds3]' );
define( 'NONCE_SALT',       'z/58!Zxmrj1qLlK}R8s)e}^_iwa&N-nK2; IWk2J:{E+cb4$6:mdM1^i,_vNGk;Z' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
