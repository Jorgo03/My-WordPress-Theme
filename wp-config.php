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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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


define('AUTH_KEY',         '1eJ+wVsXZPpa0TrEMgqc6DmgU7FOkAHwCXVvpBWyfHuDfS3URoK0ENuM7kn4WmYrO4p023lUzkdT1FiPrLv76w==');
define('SECURE_AUTH_KEY',  '++3B8nfxVQAGYzvi8DTQUECGmoY4EwYy8vsQdLkLlVL5pNbbRTYEtl44b43K5oUyazNIMn8igSODnobygSNxig==');
define('LOGGED_IN_KEY',    'ZMJihQ4oiaChh9OwkDIn44h/mUVovZDKtc/iQRi4YjcnIuYItGlTqTgGo8d3IpZLDdOYuMML3eh+oCwhuqFpqQ==');
define('NONCE_KEY',        'rczB7AlwJTKxLPbJsAJLovuoyUOS4xbnzmzA8X4uhuQfioLfOnnImV9mk8hzA37NOw93jce7nnhPtQ0c8/vjDw==');
define('AUTH_SALT',        'ECPKU3saHgHfd+1G+ChqrtwY7TrSkvgzQ1OohV5SLy7LtWYh2PE7TFaI1vrT6L62aWjw4bs3Fwu9IwIiHlc1Ug==');
define('SECURE_AUTH_SALT', '7itYJdQ17HTSR+1qQ88Orr33IbUnT0bozpWDgkn/mOXA1Ii15p/rMQIk4ubAP4XH+nn4XqtSTuImAeB4xbOllw==');
define('LOGGED_IN_SALT',   'ikb5P9qgbh4QT0SZJK1oQFTJqSdM3DcISvxHmFz3uipwPYsGRdtAxqn5IHzKhjk5jMz1FFUIB37O8s/pZbOS2Q==');
define('NONCE_SALT',       'Udlp2X6uTeAdNSZTQtbLxJ4zxx2nnnB/x1EJav3F0VML34kAqoaZEHE6IYeo5wXSOjK2j/84v6pJ7ksgSPgPgA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
