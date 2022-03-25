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
define( 'DB_NAME', 'ideationlab_wordpress' );

/** Database username */
define( 'DB_USER', 'ideationlab' );

/** Database password */
define( 'DB_PASSWORD', 'tIxLdBpW!22' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'Z?sv.|n:f$1a#LG!>ZIzpVb?N4Z!,yl0QD.IqNN4oSe*wWB1jKVOO/,l`fReu4 h' );
define( 'SECURE_AUTH_KEY',  '(rY0#XwL$R1=9U5:e Wy5`0 Yi ]gODUQO&W6#ye cy`o@^PuFnnP8L_W`qgssZl' );
define( 'LOGGED_IN_KEY',    'a;TUwjdr~y_!K{,C^l{d)xD&h4cAXS<9]{Y;wq=TqsM*BJ;-!IEU6yA,F=T2>GXc' );
define( 'NONCE_KEY',        'Am$1HYeIG:+]6>;sX/5UVObCNbiJ/V[fc9o=(7L4q{WiBrvUQv$Q]/$Z#eG3oeJ%' );
define( 'AUTH_SALT',        'KOL/[4!$~YCQ^/pp.^ r]vDhxgww-O.hPg12rBXFHcK v5p;5zy+R~A;V=N~o?3|' );
define( 'SECURE_AUTH_SALT', 'e4y.l,b@dfzKw3_L.y$sJ9rQPCgEe,1Q[f0X><kzE2KsZA%X%|/$S!h8]o)i=N|i' );
define( 'LOGGED_IN_SALT',   'u1Qedhd +4t%k5ItVFRpdi4,oA4E]2UM%<2}C|}2-.g8:UBsTJ^AJwtB/,N3zBci' );
define( 'NONCE_SALT',       '?igepMDmI`#]&L[@zm-ttvW>Eb1}u<uA{hy!J^qQR=aA)S9I%(kudMg~)!(e$c2t' );

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
