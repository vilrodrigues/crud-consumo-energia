<?php

define('DB_NAME', 'consumo_energia');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

/** caminho absoluto para a pasta do sistema **/
if (!defined('ABSPATH')){
	define('ABSPATH', dirname(__FILE__) . '/');
}
	
define('HEADER', ABSPATH . '../src/shared/header.php');
define('FOOTER', ABSPATH . '../src/shared/footer.php');

?>