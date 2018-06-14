<?php defined('PHP_') OR die('no access');
function slug(){
    return trim(str_replace($_SERVER['SCRIPT_NAME'],'',
      parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)),'/');
}

function index(&$data=['title'=>""],$include=''){
  global $index,$action;
  if(isset($action)){
    $post = include('php/form-handler.php');
    if( isset($post) ){
      extract($post);
    }
  }
  extract($data);
  if($include==''){
    include(PHP_.'header.php');
    include(PHP_.'main.php');
    include(PHP_.'footer.php');
  }else{
    include(PHP_.$include.'.php');
  }
}

function json($data){
    if(!headers_sent()){
        header('Content-Type: application/json');
    }
    return json_encode($data);
}
