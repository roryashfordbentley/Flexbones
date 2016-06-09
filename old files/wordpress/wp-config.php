<?php
/**
* The base configurations of the WordPress.
* Copy this into your Wordpress root - along with local-config.php
* Delete if not used
* Delete wp-config-local.php on external server OR/AND add wp-config-local.php to gitignore
*/
define('WP_DEBUG', false);
define('DB_NAME', 'barebones');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost');
// ... production db constants
//  DB SETUP
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
// PRevent file access from the backend
define('DISALLOW_FILE_EDIT',true);
// SALTS - generate new ones here: https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
define('AUTH_KEY',         'i.b!O9>!Tc^)4!fc<sZZ`o:Q1<AFH.W.0%Q< -*O_OTF;x0-aBYc 7g>^bR%CsPY');
define('SECURE_AUTH_KEY',  'V)pJF1Ft7IQSdNM&HEX#>WXzgQ[tkYa.9r>K6723Pi%-wnAvm-[}.q/ ^+%Al`b4');
define('LOGGED_IN_KEY',    '[Th4fF{C(V4g7oaI4V+vX0gz(kt5Uug8_}Sto,6mPZIZdpL82@<br~ U54QID)&c');
define('NONCE_KEY',        '+>f8^(6[@nQWqkBq6Ogz%U?+s!Nf1J-E|iQGd7NBk192?.W|q}daN=Yli}nhLHqQ');
define('AUTH_SALT',        'm9tZl{^B.Z]&=ymJCa/-~w0X|tYb).:ySEO!Nrd)aLLBKq#h`yW/OXJ&(D-W ft}');
define('SECURE_AUTH_SALT', 'Q^HMKLh9pOyqdh|eN[ yo-d#Jn%+29Z6/U3]d*G&5{=KZQ7ZVA_/+$MYjeX:#2np');
define('LOGGED_IN_SALT',   'k+8&>`z{Qix`^-}o8wr6}fu1.aOZh?6Z%+y;GA>lp~$n0_n)=I RZ.0Z9JLg(}84');
define('NONCE_SALT',       'wi}pKiaLLA(yTb;]u|Y6L;|,IR9t}oup@S6wq}I~|VS&E@.b5oE7!Em`GM-j=dcz');
// WordPress Database Table prefix.
$table_prefix  = 'As5fghte_';
// WordPress Localized Language, defaults to English.
define('WPLANG', '');
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
