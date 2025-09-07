<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'u997831895_xxic6' );

/** Database username */
define( 'DB_USER', 'u997831895_ouzm1' );

/** Database password */
define( 'DB_PASSWORD', '6Q0w0wwkQs' );

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
define( 'AUTH_KEY',          '1t#o}GN4WdC17pWdM_*-J^D,K02WM{<l;cx<0%wxJ2N|Y*R+u{72sd*cyvb7go%/' );
define( 'SECURE_AUTH_KEY',   '[6!tO+x]ExZ`7)eR)a`mmw:9&OZ#F19mkOk[5%)BmnI&:$~:B{+RS5t~,oqGrlp;' );
define( 'LOGGED_IN_KEY',     ']!E?3S?4,t6aq8(`2.dA(@A:K<Tm2D_>V%A?|.*pN<p6+nP+c0o<U;Dv^Y n){$q' );
define( 'NONCE_KEY',         '2Q]GYJZ>j@@0SELv3Wu@_p}./w-eW#lJLFeX;jF:^Nj*]fCQIY?;e4IHL}|=)9kf' );
define( 'AUTH_SALT',         '?gIH:D!n>R#f,(r~q[kW+DpnOyr)9Jy^(f0gKBJF$dKyI//HV.[wma}005WES{nz' );
define( 'SECURE_AUTH_SALT',  'rmUc+UXSxb[*{cOqy@^;/yYw`>yr,%ZDI{X_qReJ83J,7/x}/wnLGx8yGUlgppbU' );
define( 'LOGGED_IN_SALT',    'c-L~v`pHRoCT37=TS7Sl<(yCADn@j8#;q^VsHWD{$/Im!mX(@>GR$fO$8clBo4>9' );
define( 'NONCE_SALT',        ' S//j|ygQh#;]yHz$;.AF;tt#ll6Qac)Xp/2o<bBl*kk;2U/h_@6J9[L1nBEeC=N' );
define( 'WP_CACHE_KEY_SALT', '(N[UUQw^5@};e(E Zo<,6.A*l*kW)IAyvSr+_<W,Le q%@`],btCIos9<>37nav4' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '5d237cb659e5d82eac8b1c7f1552ca10' );
define( 'WP_AUTO_UPDATE_CORE', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
