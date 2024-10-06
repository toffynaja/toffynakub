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
define( 'DB_NAME', 'toffynakub' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '12345678' );

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
define( 'AUTH_KEY',         'G)0J@Wb%mKTo;0ho[%iVP9T5VUQi@8mMeNWf:l*0xd9^ZddU=K{_i1Ue9HK;},#c' );
define( 'SECURE_AUTH_KEY',  '&|OOv}-FRy7tHbmPq9Ik4;IGHkJXaUV)2W<=tZ),6?V.gVZ$]]Qf{8_`;Yc0;;5%' );
define( 'LOGGED_IN_KEY',    '=$^bQ<h83Ey6VYHhWhlSA3ky-> AH:o1T|bng<oC&qVafrj,e_izbNch.Lue-CIV' );
define( 'NONCE_KEY',        '!R!nL<X^}PL&jW< )jw@t|$[jb&i_Y{qSg>rH7t4l`f1y|p;xt;LC@C3HFma9RCr' );
define( 'AUTH_SALT',        '+mC6%@}4dp1~}|y]YAF`CJ4rg+4lPl74S| nUOFH<xQsoH<,uM.>Aeb2RQ|@ahpU' );
define( 'SECURE_AUTH_SALT', '#Ko(QdNE+!!Fk?4ogL4[b_?LW{!o?<6W~e_va<tIpe@U[BwBXxdnOCq]Y+.-dP~;' );
define( 'LOGGED_IN_SALT',   'V`5<|a+51naN$/[}dhQV]xyLc|;/gTP{`{T.W;;?|MybcqPDpaPb34a`d!h<*@yx' );
define( 'NONCE_SALT',       '=.oyOdlpGCBWC=w>[Gc77-YD1l9_N!.B)>O@8a;-xj.%lt8;s&Vo:OD&<X7]Y8Wg' );

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
