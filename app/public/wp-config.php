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


define('AUTH_KEY',         'JL+eaqCUO0MMx0rOn3k4FLeWjQrEMc8VEXvMgVqL+Dk2yX+NQrBoxEBwNKRrjc5zcHqnXYkMUWhLDNNpykTrpA==');
define('SECURE_AUTH_KEY',  '7b/efuS0/6SmiRYByhf/2l8uYbCtpE1Gs57yuuKqpRTIAl2zE+mbCUnqorCSWr4BcPU4xwChQXP4HNCqIy7eeg==');
define('LOGGED_IN_KEY',    'ejxv+s8N6LYrYrJe6ww5v9s8Ehc8bToIg5zM4Az/vB+w6y2Z4lOAf931rWroJzG04jm5CgPpYW21ZnyvrnAjRg==');
define('NONCE_KEY',        'aWbROglIJBN9r3HLX++cJXiioWI4cCGbATAZENS67J604S42Tzh7ZAuQvBV+7dsOV0bjbd6pX3n3kWCNHfbLag==');
define('AUTH_SALT',        'uEPtAyQE2w7Q3P2wdtbQbJDaXn5tFoQQyNiNhVxBN3z8aDMtlTzufykF71RzIOpGqNJZNW+N6ewnJH5x8zpBYA==');
define('SECURE_AUTH_SALT', 'y5of03JhKz3CSYYf/vPMPp3P2GkT623Z7zHkfKUwa8kV4PqkjtRqlVvCejH2Uw+5ILTraTzC6WdOWsojTyr1WA==');
define('LOGGED_IN_SALT',   'cvWt0IiIhTX8kBs4O0elfR3Iun6z2PteIp8+3FuC7G17Lk6wiDNV0vds9OpesFzg3Cfu23YBBe4B9JkpFxyA4w==');
define('NONCE_SALT',       'b6/6wgn6XCpiFJ5Ml1D7xWx+4gJ00dp/MbPAnk3eETVLeE2rijzTu6gm3lbrB2Olx9vMRWWw32XYbus8Yn85jg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
