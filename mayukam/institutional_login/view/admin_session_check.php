<?php 

	function landing_page_check(){
		session_start();
		if(!isset($_SESSION['admin']) || empty($_SESSION['admin'])){
			header("Location: login.php");
		}
	}

	function login_page_check(){
		session_start();
		if(isset($_SESSION['admin'])){
			header("Location: ../index.php");
		}
	}


 ?>