<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'x6FIT!)w`gM_50yr8qv(iKtA^FO;CQVv<4w&.IXRr2=](mm1A3H{5N*t=$pgUj+t' );
define( 'SECURE_AUTH_KEY',  'a;|@NVu oTK{@XdF)7n=Tl6j4cQ2b~FUZ@emti{,,xTV3[S&xtv~!e>2)nGn($)H' );
define( 'LOGGED_IN_KEY',    '^3K^P[N=mK)!s7n09gCrO}XjD@.QvY:+c]6QRP/iDPP<PJI;za;hgQ%#~N9i2r3S' );
define( 'NONCE_KEY',        '+&t^]!dXXN0Kw2L*9L2lOJNnvD= S lVbqtY_%cp+DVTL>K~<=|TC?.jMZ8R*Fr$' );
define( 'AUTH_SALT',        'E621EG7Gg]HY,M7{LA)-a_H]Z2)+%W$[sat4O5X)mNq{%v&#/W+|omEHk)HOU!$U' );
define( 'SECURE_AUTH_SALT', '#;|2/cSS~or`G!T#/=BWzA-PN-!,k=c|4;2-ZDdL<oU97;RgHdUcYP8V{jJ.kBGm' );
define( 'LOGGED_IN_SALT',   '_2BLuBYxo^KPd3@Z7pp dd=3.dYC7gWJ!ZBld1UTDeY) lVkZ|R)2WbEXJu0)? `' );
define( 'NONCE_SALT',       'g+[YqMD(g6+q!FC4F(el-6E[b7?br/;#-~AT@TO%F[asQ_~{V+O@vW+bPXHl7GUC' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
