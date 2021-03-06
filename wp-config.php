<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'uqbarwik_wp');

/** MySQL database username */
define('DB_USER', 'uqbarwik_wp');

/** MySQL database password */
define('DB_PASSWORD', '(Pv.S95yn2');

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
define('AUTH_KEY',         'edmlecpcu7xbrkatewjufa3sfluj31mqpc55vrgwryndkkm4yvqdrgcjal10emhp');
define('SECURE_AUTH_KEY',  'gb7xowh2go5kd4zswdqgbxs7ghhgl4k2s3kqqbk8gcghdz0dvrx2hwbpdrias9za');
define('LOGGED_IN_KEY',    'mrqdrgsqpkarxasywj84ec7ohlv7crs2ce1hkyfvpykoniwz2yqyerwly7lkxdl1');
define('NONCE_KEY',        'bd1evvsgcv3yu1gavsl17ooa67ousz9fm0n39afqhh0ngak8qjafhwis2koxzpea');
define('AUTH_SALT',        'eepvmgsud01i4edwa4yakxcdv5naanmajtt130tsiskuxiiw8nll5ps0iqmyetu0');
define('SECURE_AUTH_SALT', 's8jzrclwpi0g9gj5vk4aviclzos6dlymuhgqsbbpsbvlfip57ihl6surfxwpteie');
define('LOGGED_IN_SALT',   'aevxw3xkvym1iu9bxwzz24rfsclh5aue2cp6djj41sm1cqi7hpwwfontmvw5towd');
define('NONCE_SALT',       'embvcmruw7jokrdrk6szsmvpyhb2kncaz9a3uczxsbumbkuf69evrc8mbxb80wqo');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* Multisite */
define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'uqbar-wiki.org');
define('PATH_CURRENT_SITE', '/wordpress/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
