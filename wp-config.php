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
define( 'DB_NAME', 'blog_17douke_co' );

/** MySQL database username */
define( 'DB_USER', 'blog_17douke_co' );

/** MySQL database password */
define( 'DB_PASSWORD', 'aP7WnJFKb7' );

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
define( 'AUTH_KEY',         'eV5J8CoPbh}|B~?1lFbM$o >KJW&h<GiNlk2[$HYc{ G NGT79]N~llUo#.h{EP+' );
define( 'SECURE_AUTH_KEY',  '2`y379 U~!Lh}_oq1X@`v}uwB;-sUfRlbP|WB!wzyP+%gm`*deFcCJvdT?]8&[<0' );
define( 'LOGGED_IN_KEY',    'kPz$L,%*c#?E_pP/4wT]3pAYRp-a{+BLwnxNnF={$p5kpPJ[(wl:Rz&*U,.M,5=|' );
define( 'NONCE_KEY',        'BZ(SY-(LVKUXK>ZBL{VhT0[0g#g}yiwI!4[xz{rN)RQt?V|;JE-=v|c?}`Pg9VdN' );
define( 'AUTH_SALT',        'r`RoX6ets1!6 :`~ TtDrrzWm~Htx}&DKBs4CmNb]|*^K@IoetubcZ+CNqiGPi@t' );
define( 'SECURE_AUTH_SALT', '?LRxJEoUI-_fPH6.<xAPyUC&uM=!9?N94c6*9QJZY]|d-r^D?Jc^s(S1[:T]PLn8' );
define( 'LOGGED_IN_SALT',   'X&6@l<SDx}C]rdj0uh/bof:M$t*fqtO8PcDy2u;b)3O&NX.&.WMu.zq711/6r}eH' );
define( 'NONCE_SALT',       'eSU#;bdu/h-}dPrd>%HU@Pzx^ftlRXYL_$tO-)](b&F%aGT3f7*o`n~-9m:|F<zc' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
