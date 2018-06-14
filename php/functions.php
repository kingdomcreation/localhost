<?php !defined(PHP_) OR die('no access');

function index(&$data=['title'=>""],$include=''){
  global $index;
  extract($data);
  if($include==''){
    include(PHP_.'header.php');
    include(PHP_.'main.php');
    include(PHP_.'footer.php');
  }else{
    include(PHP_.$index.'.php');
  }
}
