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
define( 'DB_NAME', 'id2011085_wp_71b11404da142bbd46432b8ebbdb30be' );

/** MySQL database username */
define( 'DB_USER', 'id2011085_wp_71b11404da142bbd46432b8ebbdb30be' );

/** MySQL database password */
define( 'DB_PASSWORD', 'c6334adf11c477c6da8fb228862d29fa4e50db4c' );

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
define('AUTH_KEY',         'GT|LMd>CjHt@$fRu]gOA[a6DCF+,yB1%(QvIVd:eHgWxh!+_ANDJAI$YSI/&Gw=W');
define('SECURE_AUTH_KEY',  'hJnMM.Ih2]kaGh}mf&!~;2a{XyY6_+n|1]nzW/B(~_=8Oq,BT9M+Be{RLxQLp[ S');
define('LOGGED_IN_KEY',    'BD>R3eT.}7|21W+n,at_?|(TkoYu:Ydu54A;?dv}k*d4,(.}Ju,G166l#;#J|dR1');
define('NONCE_KEY',        'n8;!;4|T8Qi>kxDc&z-1|6-b`5IK;C+S)jf$R^r3#g^j6#=v-NK`U0#0/4{IxWdZ');
define('AUTH_SALT',        'INgMEs%.fM#MQ4D|<{G]I9p}wj=c[XWV{!Je1~@e0Sf;S`t.JJQM8pOWWlo:P}:V');
define('SECURE_AUTH_SALT', '&T@qd7caj,3$[}[]PG;wCm{q&$hs>S<QK@XZi0~56}I*vof2oS3t +Z7+i+ScfR%');
define('LOGGED_IN_SALT',   'y*s pRhVwz>W;::+ !a]FIKy{g1_1KysUjmLjS`[}*(~}+h(%AW JFwEO+S0h-_^');
define('NONCE_SALT',       '{=GATO;+uFBQ)#[<6/GZld]Uvds-pW!<Ep?0dqIhUV53N,B/%tl[%:9TEW8wKsG{');


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
