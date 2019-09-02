<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bang' );

/** MySQL database username */
define( 'DB_USER', 'bang' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bang' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('FS_METHOD','direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'T,SxiRRgocLS#3`^S=O&$&-Lq~U/OZ1*tjOV8+R~RI6q/1O9TyIwX:a&|#qH|Y?+' );
define( 'SECURE_AUTH_KEY',  'Ym72vj<j J~D60A8z3Fk>:#vUA-2AFri8Iz=g%=n(/<TsdVKr[0ob3gC(>Q5M1z6' );
define( 'LOGGED_IN_KEY',    'X{7X@zMH3L=;Hi3x>q;T<{kr6JYN)c`x|E34w w-fT3DPhc^5l<O<_%^ft(QjMQg' );
define( 'NONCE_KEY',        '3<dkk-%dGr&hZWGwiWMaw$e:v8ll#b*K5}M,-{/+qE{&eTc.%2DMHh4aVg|a_9%q' );
define( 'AUTH_SALT',        '*EM,<P/1mWV{%e8S^ S^3|;$Z>J+{H+,As{.fLx8>^9CChq18|Bmt13FwWfn;ERs' );
define( 'SECURE_AUTH_SALT', '+^$~}#RE3f[4e7aM 3nu(i_>kWuxm<Rv*+r=#fj=.U?<6&Zuy{YN?0b07rNg{5,]' );
define( 'LOGGED_IN_SALT',   'h;}L|Ly5XN,`x$E@@_&$:,GR#9&TbSKKj.!a(|>-$%~kdS=E;t-RNgx;Py<74=.h' );
define( 'NONCE_SALT',       'R)7W8swM7wguYrGEi_3_N.%9{[)vV|zEdh{0x2- 2 L,NXUPN:j*G@y4.&(OTB&5' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_bang';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
