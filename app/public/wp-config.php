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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ur/6DXIZaYjeL1bVWcfU+ZqD+NEj7+FdOo/io2o2WJX8aDPKVcMlkDOzAtmrSqD8p3QXATYoBxyrKYqyd+UfTA==');
define('SECURE_AUTH_KEY',  'GsS2RK3r4Bpdzl2gVmBKQfx9I8u8v8RvBqUq1Mn4dueCs35aGCkMzhHeHIL/HTekBiiRkn+z3f5rKrWwVswxEQ==');
define('LOGGED_IN_KEY',    'dntMjOrgCVeYlQnlIMbwE0hvHRnVxNJTtqNg2XvmvaVnarQu36azcNu8LSC5EA6+Ns8Yla8YEggJYWrydJI8+g==');
define('NONCE_KEY',        'wlQwv8VKKtZWor6D9DNlkFgzv92PV6rd1cJsB48yx3SCxFBql/Yu9UPLubujbI0C/+pN7e1iELhSy4dUTg55SA==');
define('AUTH_SALT',        'kI118vOpoKW6m1ZoQ4TV7VglprmhcTMQ9/Uf5KGSSHz3lSNeIkYd5PkiacUnXRWBgz3X8/r0e+n3AGY4MX4TRg==');
define('SECURE_AUTH_SALT', 'X+ZcKag38CHxA/MKSuHbjjx+JuNWOMrDil4dVF/ZHXrIr0wInMYAjNOPzaJDGTq8zUofvVxeXWkjuqmoLsvT+Q==');
define('LOGGED_IN_SALT',   'LtEW+TbMwNkzdAT5t60ht111TSSb9P6XwaA6Z0a7kxHKW0hY8OHZZFM5gklLbP6QMkNiW4bmvjWYEMv4R+drlA==');
define('NONCE_SALT',       '96wbiXgL1z7f/GM70Ypptu2FAUI/m/ejKefFHF0hLiPSZbr+pa5zK1pftBeB9INUb7gCB00XPA3wHZETYjJ//Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
