<?php

define( 'WP_CACHE', true ); // By SiteGround Optimizer


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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db2agynilsurtq' );

/** Database username */
define( 'DB_USER', 'ucajtkqelhc6z' );

/** Database password */
define( 'DB_PASSWORD', 'rfp8wvgkxsug' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'HzJj|;&*{x@w;5BpD/ LJY[TKb8IP]j`c563@_zE#ZvBmvK<RPit1nG8[:R]}X/[' );
define( 'SECURE_AUTH_KEY',   '% M8Rq%]H3+9F?U>yFfH^5SPrK?mW@x>DMDo0U DE2AcDU)Q{8~})_R&7sw}pbe~' );
define( 'LOGGED_IN_KEY',     '3YHj/:uU-$Np#3g=HpxHT70=}9D2fHxj2),l=!tvlU?XH*U5ng`wi1#=*oM=V@9%' );
define( 'NONCE_KEY',         'Jr?#&ER_(f=GeS)Y,vF;;]63m`S^P=;eMnw-QIMx0w+Km!AWr|YX6}~m`1kd22mG' );
define( 'AUTH_SALT',         '^b/-l9I7Cm<L<Xa9+PsEt3pi5cHmG/eQL;ar[E3p)__rq?w/<b4xyvv=aBshzn,C' );
define( 'SECURE_AUTH_SALT',  'qP*3$_*JGM7ZqYd{lAMMZS97X*=`c!Vk0,Z{tb<zv(T{|hGiT0yP &p,@B~,@*Fh' );
define( 'LOGGED_IN_SALT',    'tDUE*;:^(</k1_)/yST_w]XF:7|~p?6]#Q3iAJFYv~/8ATT6BEKf[Zo=L^NPRsP]' );
define( 'NONCE_SALT',        'Q-b[}mor>JSey&Q&a4y2px]4)QCgLCPN?C$+;HzS?w$ur>IbB)j5?fRv4E`@4O>X' );
define( 'WP_CACHE_KEY_SALT', '1fzG`_wL*.7D+JL.$`P9FdbDt^ncDT_yAjY&gLt<A$N5,zO)*lB+4?|~#]D=&5KF' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sbu_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system

// Ativa o modo de depuração
define('WP_DEBUG', true);

// Ativa o log de erros
define('WP_DEBUG_LOG', true);

// Desativa a exibição de erros na tela
define('WP_DEBUG_DISPLAY', false);