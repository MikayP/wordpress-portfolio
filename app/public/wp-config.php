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
define('AUTH_KEY',         '2H7b4MpXoA4GJgLYEzUSWFyuxtlDdPu5et7X5Y8wjl008EScA6z2m3H2hzQKNpW5+C0IUvQNzZN3Sk2WdIR7ng==');
define('SECURE_AUTH_KEY',  '8ivAT/DHJV7e/YJ5JvdP/6WurPJZViqu6X7BE57Pd8udHZRXN2EZRG4s/wiwOkXimKpYAsxlQkDl6zTxXpC0VQ==');
define('LOGGED_IN_KEY',    '5AhSe2jU97m9yTcgsjzu5Pjb40O4eIJN6ecolxCFM0D7ZXZwaryohyiO2VAcMvUvyyhVWCKLmmtkVOyrZ0srIA==');
define('NONCE_KEY',        'WuFOt5x+6wFaibe1aRbSylOweHP9UaXwPf1v1b1FmrQyS/Rg+dEjqxgmsFa6ahYPRkQdk8DiV+7sDDaaWXvQ+g==');
define('AUTH_SALT',        'nOgg9WTSMX2Scsoew8tauhDz0JnBIUjCAKylM4BqkP0k8Mvnrh7ZrtONaREugrBJHg8g8W1ddmW547+qB8dJOA==');
define('SECURE_AUTH_SALT', 'A9y2oyZokawQ9dKiS4mNAp/WNNkZooXfnyzWWy4Zn/8JisQwD+YFMtzqtvNZ8958lRI9rw8d8OzTISiRU+hZtA==');
define('LOGGED_IN_SALT',   '5Kj/okcwDhakNJEEgJXEAILIL+bqBzmYtSNvCCxVFkLRocQH4Qoym1zyVZ1T6Xo0ON2LODJDCo0AEKDRAM9qAQ==');
define('NONCE_SALT',       'tgvm0rz2PUS0LfYSM5MSlHPhXm9Whn4qh7GOgwuOcVwxrTMuHPtmCnO3qc/WiI5SplzcS5+z3x3omBmB0ezbFQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
