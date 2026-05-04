<?php 

if( $index == 'contact/form' ){
  
	$form['name'] = isset($_POST['name']) ? $_POST['name'] : '';
	$form['contact'] = isset($_POST['contact']) ? $_POST['contact'] : '';
	$form['phone'] = isset($_POST['phone']) ? $_POST['phone'] : '';
	$form['email'] = isset($_POST['email']) ? $_POST['email'] : '';
	
  if( empty($form['name']) ||
 			empty($form['contact']) ||
			empty($form['phone']) || 
			empty($form['email'])){
    $data['error'] = "Missing required fields";
    return $form;
  }
  if( !filter_var($form['email'],FILTER_VALIDATE_EMAIL) ){
    $data['error'] = "Must be a valid email";
    return $form;
  }
}


if( $index == 'contact/form' && $action == 'new'){
	
  $data['status'] = 'success';
	redirect($data);
  return true;
}
