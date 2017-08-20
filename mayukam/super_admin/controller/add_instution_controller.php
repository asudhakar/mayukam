<?php 
	include_once '../model/db.php';
	print_r($_REQUEST);
	$conn = db_connect();
	if(insert('`institutions`',$_REQUEST,$conn)){
		echo "Instered";
	}else{
		echo "Not Inserted";
	}
 ?>