<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'odtv_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Q+gxd1?U]W3@~:U}^ux,Z@Hq#w[Qt6F^c<</}qgf5K(,*I,Eb@es AHs}4m_lA%k');
define('SECURE_AUTH_KEY',  '{zi@> z50(#q{a}c`9 Dbl&^1OWGIMu$V+gq}sV,_y(6w(5*#Rf{H`KD4JG*v|p+');
define('LOGGED_IN_KEY',    '+]l[Q(2G^ze+17XSlp7h!},X3PqMKEdBxt-]P/`yaITs1Ta&vKZ])s8ObdW8K2Km');
define('NONCE_KEY',        '@]!?}#;;tTMhwL0QOeyvrs(((IWwtR71!b0I.%| O=8j9DkpsbK42}4J[ i>;Gxn');
define('AUTH_SALT',        'PYy7#[B]OTqkwtn[3AF}&|ykPOABo/KOoqA|*nC<1>i.,ETE)Bph5l]w-]UH/)$]');
define('SECURE_AUTH_SALT', 'RDH;(D=Uf.*7e.--~f)b.0,LE_xm?{ww12&-(/g+Ug@U!%oC5]8;nX7d8jJA#YIT');
define('LOGGED_IN_SALT',   'r{xRD##Fj9O(2Zbm6JrzM@A$b_w:=Debq`hM[5lMqH2VcT]p8G[L886+0wVJu7qa');
define('NONCE_SALT',       'g$`?lt(dSQDwa30%B~3#NQ.Pk-MBu{?5C-ffcn$Xx::SasM%O/vyyx^_jb{-%|Xn');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define('WP_ENV', 'development');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
