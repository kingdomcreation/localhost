<?php defined('PHP_') OR die('Locking direct access to script'); 

if( $index == 'contact' ){
  
  $form = array(
    'email' => isset($_POST['email']) ? $_POST['email'] : '';
  );
  if( empty($email) ){
    $data['error'] = "Missing required fields!";
  }
}


if( $index == 'contact' && $action == 'new'){
  header('Location: index.php?status=success');
}

return $form;
