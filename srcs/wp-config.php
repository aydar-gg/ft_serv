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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_db' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'n6wYyB`7%]*&+J-_[+]E)O4Ta9@|cx(+Tid@KZk(!w$>S,<A+uQw%>[Y2fVv|)n^');
define('SECURE_AUTH_KEY',  '>^*-n-KusURS#E9j2s`Z)?7FhfZ)+{$TTKQ`bk?AhH3*Eq<wsp}ByLa+-_sD9|#H');
define('LOGGED_IN_KEY',    '~;_Vv;F*75d{TLq4S#VA%*Bg9].#^N+ge9S`C+!W2lb0(+o5Equ/C{$UDx!lMAID');
define('NONCE_KEY',        'S}bk<%:gdtS[N*+Y*+XfTJIZRF.{8lMJ`5|9GJnd}$8]jQou&2KkEf^I;FEl=AIX');
define('AUTH_SALT',        '&)^k22AS-eON^9:nN9|xdWPej6u-zs!2Orvn3~6Tx`ps;M=;b+Q_CZv^QV#w9,e:');
define('SECURE_AUTH_SALT', '/FQ%Nt(}lUddx,MstX-Qbh[-2|KG5,s|8|_qZ:p]g[NrBmh2mB.YEj_c>Tr}zDqc');
define('LOGGED_IN_SALT',   '_D&QiYIb89u6NQ(O1:^#XwQgOU)=2q2L{4)H$t+<uZ~-qDnV#-Y,KV`ovsxS!+ja');
define('NONCE_SALT',       '4/}[s$c(K@luoz1K8]NfBYziuGizP+Rkh9arXU88[ wsh.Qa#4RQ<7xM3/1ijPE{');

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
