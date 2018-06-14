<?php !defined(PHP_) OR die('no access');
function slug(){
    return trim(str_replace($_SERVER['SCRIPT_NAME'],'',
      parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)),'/');
}

function index(&$data=['title'=>""],$include=''){
  global $index;
  extract($data);
  if($include==''){
    include(PHP_.'header.php');
    include(PHP_.'main.php');
    include(PHP_.'footer.php');
  }else{
    include(PHP_.$include.'.php');
  }
}
