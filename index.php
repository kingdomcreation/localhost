<?php define('PHP_','php/'); include(PHP_.'functions.php'); 

$index = $data['url'] = slug();

$pages = [
  'about'=>"About Us",
  'contact'=>"Contact Form",
  'contact/new'=>'New Message',
  'contact/form'=>'New Message',
  'contact/form/new'=>'New Message',
  'index'=>"Project name"
];

if(isset($_GET['p']) && isset($pages[$_GET['p']])){
  $index = $_GET['p']; 
}else{
  $index = empty($index)?'index':$index;
}
$title = $data['title'] = $pages[$index];

if( isset($_POST['action']) ){
	$action = isset($pages[$index.'/'.$_POST['action']])?$_POST['action']:FALSE;
}

if(isset($action)){
  $form = include(PHP_.$index.'-handler.php');
  if( is_array($form) ){
    $data = array_merge($data,$form);
  }
}

if( isset($_GET['json']) ){
  index($data,FALSE);
  echo json($data);
}else if( isset($_GET['ajax']) ){
  $data['ajax'] = TRUE;
  echo index($data,FALSE);
}else{
  index($data);
}
