<?php define('PHP_','php/'); include(PHP_.'functions.php'); 
$index = $data['url'] = slug();
$pages = [
  'about'=>"About Us",
  'contact'=>"Contact Form",
  'index'=>"Project name"
];
if(isset($pages[$_GET['p']])){
  $index = $_GET['p']; 
}else{
  $index = empty($index)?'index':$index;
}
$title = $data['title'] = $pages[$index];

if( isset($_POST['action']) ){
	$action = isset($pages[$index.'/'.$_POST['action']])?$_POST['action']:FALSE;
}

index($data);
