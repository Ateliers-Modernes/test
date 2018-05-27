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
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'test');

/** MySQL database password */
define('DB_PASSWORD', 'mariadb.test');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'W0`LWI#<8qvx^KUPRC:qi mpj6}f0C2/s<m{Be,%(:g~ka7|Eo&==7V!TxZb0Jw1');
define('SECURE_AUTH_KEY',  '8L8Wb<Imbh!gl/gR4-`65W-^^[BSse$T2o#Om7&&c1A.BNwZPqMY&,^Kw6|NR1 U');
define('LOGGED_IN_KEY',    ']!OM4691dk#id)42ZC{ ONz~Lb#?)8:a6hPXXthrMZYw^CU<*EyS+{N.mIlrh36R');
define('NONCE_KEY',        'Q?Bg5^.M:~hlyS@fOMAGzc&!_TT|aDPp5>F=O~/%%T9[,Reqn9t:ZfTj$&p57zH7');
define('AUTH_SALT',        '$Og/se|ujHZI!K:bwyO:%;N&pA:X:UMJ_ o+QihTxjZ{:=C#OPqNA;~ee lEK.I{');
define('SECURE_AUTH_SALT', 'Iz7O>|HYEYk|t66#3sl;}j}s2wYV:Rs&@7ewTXQDhb<6H7OD&5lZLA5EIGc9?4nX');
define('LOGGED_IN_SALT',   'qc[PJ_>7?>k.byvq.%B@%2QNc$uIqu{=:V@TWtT(v8%FHnhk@i|7ww/%i3P/g7KZ');
define('NONCE_SALT',       'Cj) +0;MKgl*Dhl&dU`?>Q|Re,)m}=h ~KXU=Brq(R#UoVbz>6]m(wR2ZwW-Fv2s');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
