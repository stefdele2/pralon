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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'y(:aDv%p0APv<0Y]Aq0pB=}UA_x(!;T[uzir5A0BAB^_=GfxaZ56!nqkVf3Vs-{M');
define('SECURE_AUTH_KEY',  'Y;wMia7H:9kjm|(,.52U@QT_9Th<jTXnQE34mH[5Xtaspy>[ A%`+@NY~|ef>y@v');
define('LOGGED_IN_KEY',    '^)X{R]=6qOx! MN+G ARlKrucWND7Ye>H_G M<X7[@%L3~<6^|c&$ITY86Z`;b<k');
define('NONCE_KEY',        '|xH>(7AYBM?qfz|.)20l[;[M1}60rd2NP~Dm_*p 3}<Ev?wBVQ#T]0WRrE!+yI/1');
define('AUTH_SALT',        '<{O1qE?C#biAci4t=zZI[S^)6Ir-<D;`mD/LbfzZn10#:!4@7WH.pnz;/+Zv>upP');
define('SECURE_AUTH_SALT', '+EqTgh8h6@49.+J9f3_~1jn<4!$NGK8f^!o`&%JQrZeFs0,S.N o8:eU$9qL9Sus');
define('LOGGED_IN_SALT',   'Bebo&Z(7?o@tgV{P%8*}<g4/T.2yW8w0Ul+dFh=$9+5V/Tf;+gYN@y|q`%q7o<x/');
define('NONCE_SALT',       'R5%wTbf#d{MA:$TM((ZfjA-D)ymaozI1Bu&g!X7%:H:*t1soOg9Pnr wQ]O@y)B^');

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
