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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'qatarpac' );

/** Database password */
define( 'DB_PASSWORD', 'qatar@#$123' );

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
define( 'AUTH_KEY',         'U(Kp T_cSHTj>@XQA+TW)lGHh_rXbl_Qffox5.E.-tq@@.>`!}6 vqF/q 7B:T#1' );
define( 'SECURE_AUTH_KEY',  '~[E_ qA*S9pAeg^)RM[YnT=u(E8YuuFptC,!!lhRxdvRrYPRt8D6BkHjquo}+OQC' );
define( 'LOGGED_IN_KEY',    'LArqoT@!S>Cj@$j99G4CcMAsrxzMU&^Onh&|-Taekhaq&yM65JZQa7c<<83EbaC1' );
define( 'NONCE_KEY',        '}y@_bSf5rbkJTZ(5ORw!=9MJbQU#^9.` }#LXY;&4/eZY_FqZGGS08B1>Qui$&Pq' );
define( 'AUTH_SALT',        '$OR<p946gohq44-8q73~{X:gyM5CxBw`2]h!@*}_Vk$KIEj6yim=oj4o0Eo],V3s' );
define( 'SECURE_AUTH_SALT', 'lX%cT(Gb&k@?Y1$Do;#uj%$]P-kC8H3el_H3h$c?@`+6SCC=?M[8Mo$bBe!>OOwS' );
define( 'LOGGED_IN_SALT',   'Ywycfv0Bq/?Gus*6VOG>0NNHIrraO[j6DzC?jo)k5^rd=#J 9GPvk0EumR=>0Soa' );
define( 'NONCE_SALT',       'spxU5T/Q_RU~_F>p#Fxj7DUHmSY_z[_[eEs|5c*>PQiM5D2=XS.i4I2N{(<Wp(fN' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define('ALLOW_UNFILTERED_UPLOADS', true);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
