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
define( 'DB_NAME', 'assurance_etudiant' );

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
define( 'AUTH_KEY',         'qb`pbl-~lXg4SmrxeSly2qjNs8%mQBy!KDd;e2Pkn}B6I>zx8Ky6}PV X0Dx/4ai' );
define( 'SECURE_AUTH_KEY',  'siK=cfza%EWw]L~SQU?F{V@-nk(!u<!Nr93*Yd!(jB5fj Llb0g1vzNrl/!9@3#r' );
define( 'LOGGED_IN_KEY',    'K!sRnb~5 rSc|>MK|C%Yjr+v&GRVnT%+IcP29Oj;6Qq,>Th1R{A%8JH||R%g1@:E' );
define( 'NONCE_KEY',        '(!^ABE^HG;Ng#{nc_a5KO- r}0Wo7}V$Hp4}RrjwYlW#!)%5}u(zrL~OONiGM=d9' );
define( 'AUTH_SALT',        'CsFrg-Ayf@-R-fm0WIdN*n->3Q:J)rJAY#A.a),{q?Xj[zwu(th*|]dI5^eK2l>e' );
define( 'SECURE_AUTH_SALT', 'ho~D<M!EJxA@e^H,BDp^IBpo)+mU|:Oonk7>99j)Z)DxqF+XPwc`?|`|4H&}b1l%' );
define( 'LOGGED_IN_SALT',   'ED._Pn^:OqIrX-iXG7~NkD;UCPRJ+K_G(=`i>&`a(z7_kTx?._hkR8FBUO`:*@=p' );
define( 'NONCE_SALT',       'hTIGdbt|Qo$fA/jr*;qqULyodGz|zJ+,C0Z4$~~>KN2t_7Q/_hhWXWqJcJd,CO^-' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
