<?php define('PHP_','php/'); include(PHP_.'functions.php'); 
$index = 'index';
$pages = [
  'index'=>"Project name"
];
$title = $data['title'] = $pages[$index];

index($data);
