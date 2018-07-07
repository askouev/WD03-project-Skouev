<?php 

$details = R::find('about', 1);

$aboutName = $details[0]['name'];
$aboutDescription = $details[0]['description'];

$title = "Главная страница";
$content = "Основные данные контента";

ob_start();
include ROOT . 'templates/main/main.tpl';
$content = ob_get_contents();
ob_end_clean();


include ROOT . 'templates/_parts/_header.tpl';
include ROOT . 'templates/template.tpl';
include ROOT . 'templates/_parts/_footer.tpl';

 ?>