<?php

define('DB_NAME', 'barebones');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost');
define('DB_COLLATE', '');

define('AUTH_KEY',         'Ylxj(%4M|l=Vfi }<,T12&Rrh-h6Jt`,r`3{5HaG]%>n@<:R3Ns$1|[i#/{-5<ON');
define('SECURE_AUTH_KEY',  'Ph1+vzEq>twte;aQ*F(zNyK]-Zvvl{i0vwaFI5C.+TLg]~JP6@: +K=qLgdCjZAU');
define('LOGGED_IN_KEY',    's!qBz_Dpw:Fe9eplI7viGT$9zydC4J%IQQQa)8W}-W/#c@/bNM7~s~>|0y}@nNtq');
define('NONCE_KEY',        '^Dx{Lo[9{h iaLmDdFt+[woGTaeGLhJ0$-/mP#Ye: m-}eSbn/+0+gL}>3`8 {uH');
define('AUTH_SALT',        't39:9H=-Y6K5|d)ax|G`ejxFCsqaI9Mq=N-QMC6A`Y5Hjqu>)ZW;E920M!=`*|-R');
define('SECURE_AUTH_SALT', 'lJQEl#rSCYza6N,Yn5{1lgx~M)Rx5x_ PxSJ|lZs]x{<;(KL4% RQ9&kU}f16|EP');
define('LOGGED_IN_SALT',   '|9qWp/W%g-T.]CVW_g)a-BTEwU( 8A.@(qZ7v)@}RC`z{[prC=^oX-fKMWD.5DWd');
define('NONCE_SALT',       'nimJ%+f>u`CYA|Ab5|o-c]/`.xv7p:xQ%fO][3}+rDG@tjM}+n]6I|fsqq>lK5f7');

$table_prefix  = 'As5fghte_';
$folder = '/flexbones';

define("WP_DEBUG",true);
define("WP_CONTENT_DIR", dirname(__FILE__). "/app" );
define("WP_CONTENT_URL","http://". $_SERVER["HTTP_HOST"] . $folder . "/wp-content");
define('UPLOADS', 'app/uploads');

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
