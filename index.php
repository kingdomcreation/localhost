<?php define('PHP_','php/'); include(PHP_.'functions.php'); 
$index = $data['url'] = slug();
$pages = [
  'about'=>"About Us",
  'contact'=>"Contact Form",
  'contact/new'=>'New Message',
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

if( isset($_GET['json']) ){
  ob_start();
  index($data,$index);
  ob_end_clean();
  echo json($data);
}else if( isset($_GET['ajax']) ){
  $data['ajax'] = TRUE;
  include('php/'.$index.'.php');
}else{
  index($data);
}
