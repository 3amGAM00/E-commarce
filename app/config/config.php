
<?php

define('DS',DIRECTORY_SEPARATOR);
define('DEFULT_LANGUAGE','ar');
define('DEFULT_DIRECTION','ltr');

define('APP_PATH',dirname(readlink(__FILE__)).DS.'..'.DS);
define('TEMPLATE_PATH',dirname(readlink(__FILE__)).DS.'template.php');

define('PATH_VIEWS',APP_PATH.'views'.DS);
define('PATH_PROCESS',APP_PATH.'process'.DS);
define('PATH_CONTROLLER',APP_PATH.'Controllers'.DS);
define('LAYOUTS_PATH',APP_PATH.'layouts'.DS);

define('DATABASE_HOST_NAME','localhost');
define('DATABASE_NAME','laravel');
define('DATABASE_USER_NAME','root');
define('DATABASE_PASSWORD','');

define('SESSION_NAME','Ecomarc-sass');
define('SESSION_LIFE_TIME',0);
define('SESSION_SSL',true);
define('SESSION_HTTP',true);
define('SESSION_PATH','/');
define('SESSION_DOMAIN','localhost');
define('SESSION_SAVE_PATH',APP_PATH.'..'.DS.'sessions');

define('PATH_CSS','public'.DS);
define('PATH_JS','public'.DS);
define('PATH_IMG','public'.DS);
define('PATH_LANG','lang'.DS);



