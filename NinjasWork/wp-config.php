<?php

define('FS_METHOD', 'direct');

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
define( 'DB_NAME', 'db671588699' );

/** MySQL database username */
define( 'DB_USER', 'dbo671588699' );

/** MySQL database password */
define( 'DB_PASSWORD', 'uxKRgviBnuvwSIkDMhQf' );

/** MySQL hostname */
define( 'DB_HOST', 'db671588699.db.1and1.com' );

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
define('AUTH_KEY',         'MA%I?+1I$au+ibaNF#>O,DNc74WaVDZ&mO@Vm/fm;uVd`T]0OFacF=Kg2Rc**me9');
define('SECURE_AUTH_KEY',  'SVj?CjlY%-vLY:9;+.uy{;RxfPw9mTnErb2573sf[%NG`p<3a5+-i+XNN.M935,r');
define('LOGGED_IN_KEY',    '--IJmfIpQVj+. Ma-8tMJYcazEz+w~2#N`5;V+5VENE&~$)V.DCuvi?6&4sShcs.');
define('NONCE_KEY',        'bu52o{|4rQnD>E5k+Xjba<R:?o_ufe{6g/ppWR;IVM i<SY.=7=f-;I*aV)$aH2i');
define('AUTH_SALT',        '? UW^SLAy2(72FJ_k#|tHqIX)&Fc+rypnw(7{p72c`HOx|&z@0rROh,i.mIg&bA;');
define('SECURE_AUTH_SALT', '3u2>U-W%)KBX?3LRAZQ1i#>mPED*=VLFer{O-n[C$GS709Ja*o:?}Zx&$jb}IP2T');
define('LOGGED_IN_SALT',   '+iGaP<a.q56^_m](5+KeM1Q9Qeu!!K+_(`PzNQcjWeOpR,Evv4+ul%o_G+X;82a|');
define('NONCE_SALT',       'n`LbGF?Fl;)3B#l1tr3tFzyW(q64OUHTT?WPb{LJe[KhJZroc!3+)~n,gl2 f=!U');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gsWfMagN';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
