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
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         '35TI8l*;JP)d.sK1w^HYA<ze&>eGFr5=-`bu@p!r#b:I]N[xN#$-%Uc,(t(TqZ0C' );
define( 'SECURE_AUTH_KEY',  '5VAT;_,o$(KP7o30F#|3+_bk4E0vE6<9xj^N`<.H?lt?eu$q6:<2GgIUJxB%.NK ' );
define( 'LOGGED_IN_KEY',    'f4bCj_@!~]ad6K7F75m1F3o{XoL7y6^~osX(b=${8^PgzWm9Se.qf(/>(xvL^PHt' );
define( 'NONCE_KEY',        'J2vXPf.}~`woD{;Da-aJ9(!6)SK}Hh_P#YrzBLrX6LoS}n=T5fw8%r)g;Fc<?lHa' );
define( 'AUTH_SALT',        'V`L;9n($R:oZm1-[+n;B/<?te:Gul~&XB?0MP7979*PZAg0-HPTsXCYaf.UrMS?K' );
define( 'SECURE_AUTH_SALT', '<~sX><}B!FXfmycU@DAsd2-cfsm;slp<TAT>r_w3U7H-JM%!GY|&-&l@vSV$m]Z$' );
define( 'LOGGED_IN_SALT',   '?; I;[QXgLmO+f*S}k01eJm!6@mBcS:$;Lv/%sn!v=djf`tl9P*L.CH=`-;n4^*I' );
define( 'NONCE_SALT',       '_Z{.J8sT&-<t9zn$QR;}6)b0XyrUwC 3^FxT!?qOl0<BHXg36Ye5H6wWV&@&:qMq' );

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
