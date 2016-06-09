<?php

if (file_exists(dirname( __FILE__) . '/wp-config-local.php')) {
    include(dirname( __FILE__) . '/wp-config-local.php');
    define('WP_LOCAL_DEV',true);
} else {
    define('DB_NAME', 'codeblue_polyp');
    define('DB_USER', 'codeblue_rory');
    define('DB_PASSWORD', '0987poiu');
    define('DB_HOST', 'localhost');
    define('WP_DEBUG', false);
}

define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY',         'SXKzt65:ONrs2lJK9;7`Upm_i0pe@Nn3 x[YhbIj!=(<<GS;MbQEX/y>zTst9528');
define('SECURE_AUTH_KEY',  '?}1<K!;kiE_U%m2Kiw~O4TuIw_4k.7oAG(x0e8w=BMSA%YbOcf`8F?Q/`0u~&Yc;');
define('LOGGED_IN_KEY',    'wgOZo-fWw[i,sW%fo^|+BMRZ-|y;hYQv1Yy;NP*Iy,vppah,r(e.2:O]H_eaZ8m!');
define('NONCE_KEY',        'r%Il=.,;6tEX98BZ&)%L Y0^opHs%GgC5;B9k5r7VaG$8u^I-;]Rkq+@3wFAk[N$');
define('AUTH_SALT',        '|3R{s`=Ah&7nB$@|U]Gu&~1oQ>ly*-(Yj3Y|P#S&zz+|cXs~t~QTXbgjQQehZSm,');
define('SECURE_AUTH_SALT', 'p%>:-rPiy|Gu~W=kY`@5PQ?HBQdQm1xCt1~N(/.gH3GQ9B|Lt3Z*e>[(TK d^|P#');
define('LOGGED_IN_SALT',   '8JzRap-D}Q)m!Q2[FULESI->+F7u`gAmV-4h2_AwK7A(^.n]U}g?y:8PL3Qh/Kj&');
define('NONCE_SALT',       '!|9f)sjE_ni,e?6MO!{lsJM{61oYTJlY7#QG]E.yS$r0Zrhl:4.``i0~cm,QQpgl');

$table_prefix = 'As5fghte_';

define('WPLANG', 'en_GB');

define("WP_DEBUG", false);
define("WP_CONTENT_DIR", dirname(__FILE__) . "/wp-content" );
define("WP_CONTENT_URL","http://". $_SERVER["HTTP_HOST"]. "/barebones/wp-content");

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

