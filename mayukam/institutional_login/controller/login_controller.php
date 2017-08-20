<?php 
	include_once '../model/db.php';
	include_once 'default_functions.php';
	$conn = db_connect();
	$where = "`institution_code` ='".$_REQUEST['institution_code']."' AND `institution_incharge_pass` = '".$_REQUEST['institution_incharge_pass']."'";
	$selected_rows = select('*', '`institutions`',$where, $conn);
	if($selected_rows != "empty"){
		create_session($selected_rows[0]);
		header("Location: ../view/home.php");
	}else{
		header("Location: ../view/login.php?status=error");
	}
 ?>