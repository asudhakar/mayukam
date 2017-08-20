<?php 

	function logout(){
		session_start();
		session_destroy();   
		return true;
	}

	function create_session($session_data){
		session_start();
		$_SESSION['admin'] = $session_data;
		return true;
	}



 ?>