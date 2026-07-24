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
define( 'AUTH_KEY',          '-/~vHE2P;YT@q!_SjN31K%}vw3g52DCRM.Wt~ph[CPr:K4Z|i,?dhdFPVi}mpt8Q' );
define( 'SECURE_AUTH_KEY',   '_u=5E=I0!~6O)vTJv-ZCP?,+i)<q67v-^Yivy jmzv5c]CXkz6Ubage|=dl[4`1r' );
define( 'LOGGED_IN_KEY',     'N4MMbC<?EJFyT;uv+iG8U:BVwXTeik;ROQV;Za_b>/z1<D5(z;e!#xk|5]oB^=!B' );
define( 'NONCE_KEY',         '*t]ISU!_<:>y~_*KD/`_wl?{Cunrc$c@5Em.VwJh}%WE>k$q$nso9YxH28mk#<bb' );
define( 'AUTH_SALT',         '$W*Bk@G3oHQy_55iEL>dZ+Vz(0n4CB^$5Y:e?%xNY5=*:Ctqq4+ZOtLf-TPu9{8Z' );
define( 'SECURE_AUTH_SALT',  '8V+*HQn}4rYDr6seacl|- ^q,[b/TYrGSPP{rnoKED78DPMS]LgV0hgGL$Tp6._n' );
define( 'LOGGED_IN_SALT',    '0ByVr/Wt*Yx;X=FUqoI?cC!y<J^E2 eDVdVtUqd~yx=.`Nes8`CoP,H|cGIOCko&' );
define( 'NONCE_SALT',        'X_&Bu0}Rqxa|}|2+c}=jHu%.d1:0;4Uqk<m>9uVJ2/:5F0;Nk<9j_99`W.C`wi8$' );
define( 'WP_CACHE_KEY_SALT', 'vMw%sS.HBLR{EQXy:nCJzw!demw iQ=wk9EC ~m~D=X*cU_bE1YWM#,(q)rj0 BY' );


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
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
