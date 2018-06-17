<?php defined('PHP_') OR die('no access');
function slug(){
    return trim(str_replace($_SERVER['SCRIPT_NAME'],'',
      parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)),'/');
}

function modal(&$data,$opts,$wrapper='modal'){
  global $index;
  $data['data'] = $opts;
  $index = $wrapper;
  $title = $data['title'];
  $modal = index($data,FALSE);
  $data['title'] = $title;
  unset($data['index'],$data['id']);
  return $modal;
}

function index(&$data=['title'=>""],$include=''){
  global $index,$action;
  extract($data);
  if($include===FALSE){
    ob_start();
    index($data,$index);
    return ob_get_clean();
  }else if($include==''){
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

function redirect($data){
  if( isset($_GET['ajax']) || isset($_GET['json']) ){
    return isset($data['status']) && $data['status'] == 'success';
  }
  if(!headers_sent()){
    if(isset($data['status']) ){
      header('Location: index.php?status='.$data['status']);
    }
  }
}
