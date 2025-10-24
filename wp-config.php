<?php
// ✅ SHOW ERRORS (for troubleshooting)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * The base configuration for WordPress
 *
 * @package WordPress
 */

// ✅ DATABASE SETTINGS for InfinityFree
define( 'DB_NAME', 'if0_40238652_jf_testing_database' ); // your InfinityFree DB name
define( 'DB_USER', 'if0_40238652' );                      // your InfinityFree DB user
define( 'DB_PASSWORD', 'Jf115500' );                      // your vPanel password
define( 'DB_HOST', 'sql110.infinityfree.com' );           // InfinityFree DB host

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 * (kept as-is)
 */
define( 'AUTH_KEY',          '9}`)h];%`e,QxOGN*_Z4|sqR S<%xWyCZk&nFV!Wpx=IH]b~mM!bHF7y|J!$% 9N' );
define( 'SECURE_AUTH_KEY',   '^2H].DYw~^mZJ aH,6X@>8-kRIOn8#NcBlrM$`oEm-Q[jnf%>?{&X6GI^JqphO;d' );
define( 'LOGGED_IN_KEY',     'NyPCsj=C:8[M AzFEMUeq/S5}>)Aq22zpc-gHF<mr=S&$zc]LGmtv^lj&0?}U|l{' );
define( 'NONCE_KEY',         '8+^O(bm0YD~CU,sMTIP_Ux1cj+Zent 2gR,gKAu&M%IH;X@{>m^O3H0g :wqu$&:' );
define( 'AUTH_SALT',         'H08h0j*^@V|D<X|pAWF~}Bt2~(DvW[(Q1r j^5icnr7{sJdU<B(eh.#Ds;AIRPu?' );
define( 'SECURE_AUTH_SALT',  '(P}_I@$ES_DY7=C[XnaC@TE2?uwU_6P#j0bDX`=9rsSM0<FCNQZ,c#mVvDI`BeO7' );
define( 'LOGGED_IN_SALT',    '8361W*MRs?K(IL+o^ml2n>rbWJ(]@=<#x1E`+9ff6L9a:t4<`_tl}Ahz#TR#n*l ' );
define( 'NONCE_SALT',        'w;-Z&-T#[:U_U=Zo<42WN4NNfNKba>_u_d<WixzzfSIJQ/a7NF09FZ{A@mK6mE~m' );
define( 'WP_CACHE_KEY_SALT', 'Bl`W$(|B[jcm`|Uog-?va{9tb%9V9<HPm#.gsA[o^xQvV$rq`AV4$Pn`pVtAO<wF' );

/**#@-*/

/** WordPress database table prefix. */
$table_prefix = 'wp_';

/* Add custom values between this line and the "stop editing" line. */

/** ✅ FORCE SITE URLS */
define('WP_HOME', 'https://jfautotestingsite.xo.je'); 
define('WP_SITEURL', 'https://jfautotestingsite.xo.je');

/** ✅ Enable debug for testing */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);

/** ✅ Set environment type to production */
define( 'WP_ENVIRONMENT_TYPE', 'production' );

/* ✅ FIX for InfinityFree ABSPATH issue */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' ); // ✅ FIXED: better path resolution
}

/* ✅ Optional: log the ABSPATH being used */
error_log('ABSPATH is set to: ' . ABSPATH);

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


