<?php

define("DB_NAME", "flexbones");
define("DB_USER", "root");
define("DB_PASSWORD", "root");
define("DB_HOST", "localhost");
define("WP_DEBUG", true);
define("WP_DEBUG_DISPLAY", false);
define("WP_DEBUG_LOG", true);
define("WP_CONTENT_DIR", dirname(__FILE__). "/app" );
define("WP_CONTENT_URL", "http://". $_SERVER["HTTP_HOST"]. "/flexbones/app");
define("WP_HOME","http://localhost/flexbones");
define("WP_SITEURL","http://localhost/flexbones/wp");
define("WPLANG", "en_GB");
