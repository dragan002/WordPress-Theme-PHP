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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '}Lh;dogUAU# 6p$:=/K5m58Jm@>r?%MKj-g{Yiqb_uapn[?t&7VYK%V|)bK*F7+d' );
define( 'SECURE_AUTH_KEY',   'VK^KO`)2Qt09xadRx9``:#]N&z(wpf{0<eQ!0;pFX.Oiu+0*gcf3ON@wF]ci$]9+' );
define( 'LOGGED_IN_KEY',     'cd2fDr4([wKQntHWj:)Yw#wiV&]f@_kS$iD)$Xz! x?M^#JId<1o2/K@sQC:!UD&' );
define( 'NONCE_KEY',         '.8Mid&]*%(1!e|D&K:3(k!<VJ2TE)9&H]4h;!Gfpug%?~7 j~<#H2{YiQP:MOWB~' );
define( 'AUTH_SALT',         'w&Aq{Q#y^Helo/Al{t5g|)QBNlprS/@[ N]<~s^VTUciq#1= ^%f-S)rjIgOX/Ls' );
define( 'SECURE_AUTH_SALT',  'c?e=#wp~gxMfQpKu($T}J<wRz#E~vPXqjyJgRP*%9,<p]qhLQD<jg_>%R!c&&hFF' );
define( 'LOGGED_IN_SALT',    '{]^C%DbNn,Zo!Hgk<S_jrc05DQC/ @{LgYLe* sFekg&jF> T[-D4l=h)rpuJ6H7' );
define( 'NONCE_SALT',        '4RIK@b_q},gKZ28ota?DB!Cz sgf><W*Ulw[vJqN)g:~DDuUEo!FM;{*dDhv;%)T' );
define( 'WP_CACHE_KEY_SALT', 'WhsdAyv*9/:T55K#y~Dgs@TVJrlf1_s(n1P(#:v=J#PNL6HEZta*mi2CzXlQ^${U' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


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
	define( 'WP_DEBUG', true );
}


define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
