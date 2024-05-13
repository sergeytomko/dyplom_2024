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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dyplom' );

/** Database username */
define( 'DB_USER', 'admin' );

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
define( 'AUTH_KEY',         'sVLF_JyZLQCXPji~/8XM>L9o64+0#eyfCDFZRgMPzD%%XYFe}Ju9ZcEz32[Zx^S2' );
define( 'SECURE_AUTH_KEY',  'E0W~2~^d_]l>vXo2c1eBpemsY@z:fj~x-pfW].{BJlww5|~vW[YT6)5#g29gV&Ox' );
define( 'LOGGED_IN_KEY',    'D/;xHiQ7PO1M6]F.!UV;V(>NHHh1EGC;wDsSWR|)f9|y}5u`1%8??1d3518 tCN6' );
define( 'NONCE_KEY',        '6,F<HjKqow $EVxu-5B6v_b_0T%$xAcE1h25`/ >s2My*jOO;;S0_O7=KT;.fqpC' );
define( 'AUTH_SALT',        'cR <[_I-3g@AV0W4ekFe=7V_)Bz~+7!>zI+B_*@i5v|[mNDm$jy#L) PELFLmqz.' );
define( 'SECURE_AUTH_SALT', 'o4)Pi&[jJod*n3jZ`=}@Pv>Cu-XxWVMkt.)#y=eqspl`Y8nD9pK|rQ-v3xv09z&M' );
define( 'LOGGED_IN_SALT',   ';XHWzd?])XY8qiDBCnc8^.7=?-UfHW(AJhmR*Q~oX5AB#rr4h@D3aqLi1=2DRgjH' );
define( 'NONCE_SALT',       'wLrQF# p8=bO#RxJ7gX(,:ou2Bq:>3qf`TB$tR688[v!-RB4LzY)j;M##du).~hd' );

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
