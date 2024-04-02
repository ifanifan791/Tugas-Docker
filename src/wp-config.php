<?php
define( 'WP_REDIS_HOST', 'redis-server' );
define( 'WP_REDIS_PORT', 6379 );
define( 'WP_REDIS_PREFIX', 'dolanan' );
define( 'WP_REDIS_DATABASE', 0 ); // 0-15
define( 'WP_REDIS_TIMEOUT', 1 );
define( 'WP_REDIS_READ_TIMEOUT', 1 );

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
define( 'DB_NAME', 'wordpress_dp' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'sandi_wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'vDJ<#s=:YW,qgMo{zW!mki6FKVJm(!Q(Z2]!}rmarl=bzQyRuF}W.]_PSy=TwAB9' );
define( 'SECURE_AUTH_KEY',  'PtbuB[o:f%XSweYR+TEoEMQs!J|>9bI~7iOGMPh@m25OF,[1w:HwmT8GH-Qle5jq' );
define( 'LOGGED_IN_KEY',    'S;j2>0M2Y|5[2+v&_0HE<]1Tt56vRD_}<r`:Kpt ~igqla7j_H-(~qb%$UK<5(_E' );
define( 'NONCE_KEY',        'eg= tdW=2|;hO1fol)n=V! GekoY&Ayf8MKTdu)iZg!_#xK{t;sZ0.=j(F$hH[^&' );
define( 'AUTH_SALT',        '5IoPrb;*Dcn17 ]S YFM&qG(TI$GGKYnJ/Fmw)=$$?{(&Y$Pujk.y&ApuV0l0M0f' );
define( 'SECURE_AUTH_SALT', '%G3Hbq1wo5CI;J`KPH,=:r:-I:|HD&mvIsZds8I6Ox{n:9GGD[~uY%B0oN2i-a5?' );
define( 'LOGGED_IN_SALT',   'Oj0~,Ndq9nFtf$oTg?O*v|&;:W3n` kf#F2fh0;N6b^m>uwKWcs9J$dm|S16]n$7' );
define( 'NONCE_SALT',       'r/w_L~Esq`RWp[cy))iw;JSPU.:7m oaV4!b.pLiLb~Gry2TKDU6lJoWWN@^@OUA' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tugas1';

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

define('FS_METHOD', 'direct');