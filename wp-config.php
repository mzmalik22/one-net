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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lushbeau_wp558' );

/** Database username */
define( 'DB_USER', 'lushbeau_wp558' );

/** Database password */
define( 'DB_PASSWORD', '51-opS)19N' );

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
define( 'AUTH_KEY',         'syvzuedciyruthx1zrgoykfxj71scyrh37jkyznkefgpx5juxdtwwnofutru0srh' );
define( 'SECURE_AUTH_KEY',  'emukvrrtullnrkuycumsqmrff4r7cksw6dxr6dqfe85tkmc7ifmpictiapnlgzzs' );
define( 'LOGGED_IN_KEY',    'hmxkv0aokheycic1fpq3pwnrlxt7i66k95sck5akpqtlw8m6ad6mqgz6q9nmweac' );
define( 'NONCE_KEY',        'nkfnqfnscspuwxusjtjfgvrdny2viagwxqrqdwvjtpcitq0flsrz6dpr1hhc5acp' );
define( 'AUTH_SALT',        'vqkh6znvlugibcf2s2jz93ii5ab72ar6ql5ykqy2tkg3tjqltejbajnmch55brpr' );
define( 'SECURE_AUTH_SALT', 'frqqzwulaxl2ybtagoz4lzufinc5dvzvhgoux8jufwmzbbeijfpfnqnormy7kpvx' );
define( 'LOGGED_IN_SALT',   'pujj9qnxjqoutapm8sxvs9wovszfjbbtdx3bibi24mkhvyosr5mtiaxfjyq5tqjg' );
define( 'NONCE_SALT',       'pqgpcdx6ckyvgdcimlyuqgtcyb9n7ly9xs9zy95i34lj6s5uyvz4cntzenso2e54' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpvn_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
