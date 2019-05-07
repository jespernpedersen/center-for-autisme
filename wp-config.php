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
define( 'DB_NAME', 'cfa' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mAlZKIo5l~K!SbHPkV2S`>!!$(KMhV;F:iD[#}9RD~E<<Jv-90jyM:SkxP}97;o3' );
define( 'SECURE_AUTH_KEY',  'J:CxKA@zi*Ch7o&tad<$CNC~fpG-6Z:X+u6q[r&Rsg7v-9&kSH`%bX]I&p93G|d>' );
define( 'LOGGED_IN_KEY',    '$WoEcF[TFs}yZwQ=^7X`L^~MIQ<>H.s]X16F%NfXt!+Vwh$2B5(3h^]HVV}7]j]|' );
define( 'NONCE_KEY',        'In7l42RpT|t <QLxKx>Z`5&Zfd=l`Y#>bpUAv%FET9]`u3<yvOsNyCa(q19x>9`K' );
define( 'AUTH_SALT',        'YKr-.S8rBTjt3EPqGTT;x*4zrY;}`Ux`)(-:U0ej<w9:a{~Vafn|@W9G+z=8mTMm' );
define( 'SECURE_AUTH_SALT', '+:4sl,|(w!ko?$HYkdhTDUEqf~yQH7eua8PQ@e__a6]$/+@KAay,.jV}gHdFB&qo' );
define( 'LOGGED_IN_SALT',   'h;Da<iV8bE.I030V/>bUMz}^Rt6xe7?.+KU#+-:#C806#$0)tp`JFrEQg ic]oB+' );
define( 'NONCE_SALT',       '*uHJjWFCY,,Gj6+*hriX.D/F1u<>m8?3g]GnT*jJ+si%r{E_5t.#piPpDfa`0?Jg' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cfa_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
