<?php 

require 'config.php';
require 'db.php';

/* .......................................
РОУТЕР
.........................................*/
// request URL = http://project/portfolio/
$uri = $_SERVER['REQUEST_URI'];
// обрезка слеша
$uri = rtrim($uri, '/');
// обработка от инъекций
$uri = filter_var($uri, FILTER_SANITIZE_URL);
// обрезка первого символа (слеша)
$uri = substr($uri, 1);
// разбивание строки на два массива
$uri = explode('?', $uri);

switch ($uri[0]) {
	case '':
		include 'modules/main/index.php';
		break;

	case 'about':
		include 'modules/about/index.php';
		break;	

	case 'contacts':
		include 'modules/contacts/index.php';
		break;

	case 'blog':
		include 'modules/blog/index.php';
		break;
	
	default:
		echo "404 and main page";
		break;
}



 ?>