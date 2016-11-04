<?php
# Database Configuration
define( 'DB_NAME', 'wp_mamie' );
define( 'DB_USER', 'mamie' );
define( 'DB_PASSWORD', 'Twrjy2aeJ1z84AJSELnH' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         '>?(-Qe#n$96|p@<R{5_L7wUwK.)h F,i3sw=2XK=U<P;$AV~ Sm!A~)Ep%l:=bV1');
define('SECURE_AUTH_KEY',  '_(6j-)Z{g;mORzA+%ld~|/{C#h]u][Wu$3Jl&~JA&JGK)/oG^9d,-.$6_rF|yu`M');
define('LOGGED_IN_KEY',    '(l@V3rUF~].JC^k`W1IH3!qTrzgvQ}|n?r,B]c7=e+pD-o|-|E%k]!uq+N$~_Qpr');
define('NONCE_KEY',        'E|yBX{-yZ0O2|3fe6/+<TX%|f* rr:tI]k/q%`#iVqeXv[L TJk+VuTekCO!&C8v');
define('AUTH_SALT',        'COJJU CblbW|M-sN5P@)!-085+H-cRl|Tl@i%#=[j,(@wL3IRSJexj!)iYvw_f:,');
define('SECURE_AUTH_SALT', 'bCp>;qc-|x0KZ`[7XHcE<sW9culu4b9s<7WcZ?PE5I:<7[PF4pp=r^4Y@n8|+ &H');
define('LOGGED_IN_SALT',   'y#xRv,%&l?1|fPn]It1-MT&PL{CM0F Aqe$dg0k|E`_2F[_OQ0|9k@*IYN,ths?~');
define('NONCE_SALT',       'diwY9V|2::7_z>8{}1r4=e4aU7b+6-z2${DgS`1~(J%!>sUi,-P,eZ}GG wq2k^|');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'mamie' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '860b672b61db366e9b8f9086176533fb06c01697' );

define( 'WPE_CLUSTER_ID', '100819' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'mamie.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-100819', );

$wpe_special_ips=array ( 0 => '104.199.126.30', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
