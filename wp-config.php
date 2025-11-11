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
define( 'DB_NAME', 'galazka2' );

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
define( 'AUTH_KEY',         'IMc,d!`zp<3V1!)QGXZb&*!C]^R$|j:>%kQ%7H;4:j/3k_px=;P%ue%-<33O <~A' );
define( 'SECURE_AUTH_KEY',  'KfI&MbocPJ|t&> <BVHxxub,nfG-dvh~tJ>~52CZRJ+-@R`0L}dT%j+?oXIcjq@A' );
define( 'LOGGED_IN_KEY',    'X#FoNF]Wc@~ofGq^*j,q~xgl.pCDH3nt<@g~zlS_~Tv[t,|@Yy9NF%6GJ3aqw /;' );
define( 'NONCE_KEY',        '@.$&~2;uhw=Y#NP {NMy8H2fT?(*YM0VqGVu-/LZ>K*;iSxZ82Wt(Sw Ti?jaL!I' );
define( 'AUTH_SALT',        'Me 2K<BKcI8RD=d/RJVRvft=)S*-y/z047mm=}3x!X}l?)z~9JVLKD/X:HMyP}4G' );
define( 'SECURE_AUTH_SALT', '#7kdtC=>5$)|kb.:!2-6+`-AC[%>kN0:,^N~PmtLu&]VItT-S,;z1i(PFTW/dq>=' );
define( 'LOGGED_IN_SALT',   'd|.hvbtZC<#|}Cs{W{D1o_mmU`^pGEuh4X~HbFo`T.-[A%wth?AU*bE;EE(!5w1@' );
define( 'NONCE_SALT',       '{J>07$a(U|hE,Q=lcg{w!Wpzueh;h5~%[ / .,cl2;Nt2ud_iTQ5.>dy[9AX3,fd' );

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
