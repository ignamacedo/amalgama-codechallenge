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
define( 'DB_NAME', 'amalgama' );

/** Database username */
define( 'DB_USER', 'amalgama' );

/** Database password */
define( 'DB_PASSWORD', 'ignacio' );

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
define( 'AUTH_KEY',         '3q -G5[Wf8nJYoqAiYP/o73e_`%}RBG6vkwK,vK:Xq^Z+!]+uN~AF}d<PNPUH(#M' );
define( 'SECURE_AUTH_KEY',  '=g^l9T5GM|%[*!Pw#mdQ]JJ63`G*B|p.F.6XQkz+W0w@)mnsbMC@znTiN2M`807;' );
define( 'LOGGED_IN_KEY',    'Qt#U ~vUCN]4hH8-d=ex_t~{hNzLQShIiS1*_Rsx=_L+XHc%O5fo%m d$/l=/}yq' );
define( 'NONCE_KEY',        'f~@7bTKI*tq:Cdh7J3^)V0|Tw!W_WwJl1$!w/}##d7r)^6)<?J(uq (f$O!#ga-{' );
define( 'AUTH_SALT',        '&h>K4k14&6OXhg=Rb5v%q^L2$6s|^oN|+CiT!$66[Yv$TbA:#`&dTZ&U?abvck9!' );
define( 'SECURE_AUTH_SALT', 'GxyI;1pRL 05tC}1p&:!D:y<UkbgUbGXF~OIRf>G}r6SU9+Vk3-:*rZt7jIvW!/>' );
define( 'LOGGED_IN_SALT',   'R@H555#dX<B9v!W!)K:ii[#g9v-2uv7H~mWJ7%1ZoNV%~x_[Z#j;>&6:Kl&hPR_!' );
define( 'NONCE_SALT',       '&4,Z1vO|f/~T8l2pDnJlw`=6ORxM?+%1P8kxvc?/~oZ**O:R,q%kHX GG}(<W~Zw' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('FS_METHOD','direct');
