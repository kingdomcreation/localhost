<?php define('PHP_','php/'); include(PHP_.'functions.php'); 
$index = 'index';
$title = "";
$data['title'] = "Project name";
function index(&$data=['title'=>""]){
  global $index;
  extract($data);
  include(PHP_.'header.php');
  include(PHP_.$index.'.php');
  include(PHP_.'footer.php');
}
index($data);
