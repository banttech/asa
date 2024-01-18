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
define( 'DB_NAME', 'banttyak_asa' );

/** Database username */
define( 'DB_USER', 'banttyak_asa' );

/** Database password */
define( 'DB_PASSWORD', 'zwfTQR7L[UC3' );

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
define( 'AUTH_KEY',         'q_[@F+C;(MBs]H/$3zmzbb^e%d1dj&Ta^Pdjjd G#}<B]^Y2AKkiE3:Rx-TTZ!;q' );
define( 'SECURE_AUTH_KEY',  'l^oD1<OCJMl[u37Slv)DU>hLi4$nl#a<0s;lnM3<oo:,1qu6%g~|&zQ^{%NT%KQf' );
define( 'LOGGED_IN_KEY',    '3M{5X}G~:XyZ]EHjm;,av8mzAO!yWCc<+(34P$_*IU3MQ=[qkX * )Ii{Cr^3o9F' );
define( 'NONCE_KEY',        'sK!|Ym4ZX<1N7%RSkJ*2R<)v.}Bgsp{ZjyS;F{CTgU|4b:Ae]2d[x9;c8|I}w81.' );
define( 'AUTH_SALT',        'MV&UqPhFC;^L qH8j`^u 5T&pQ$u9Myp#5wGt00K>i3&9?++D/cGxg0J)Zl3}VE[' );
define( 'SECURE_AUTH_SALT', '&3c!NQQ!F]G=:jT%XIz;zkP$,OQpGns(7LEwcbwf=JSw^)wm 4#OsPS,KEOmF5B`' );
define( 'LOGGED_IN_SALT',   'S$gTfK;GC 2rPF8%ku`R}k9bM7|[rX3>qEA#W((N(%)Uk}CF7 #&QYg9?NW=QA5b' );
define( 'NONCE_SALT',       'aVaZ9V9X.=qM~%FL-}=na=RwgI !L(s_tTmZJ^dh(`)wTinu*?<d/2qeV.dTv6`]' );

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
