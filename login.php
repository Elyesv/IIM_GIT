<?php session_start();

/******************************** 
	 DATABASE & FUNCTIONS 
********************************/
require('config/config.php');
require('model/functions.fn.php');


/********************************
			PROCESS
********************************/

if(isset($_POST['Email']) && isset($_POST['Password'])){
	if(!empty($_POST['Email']) && !empty($_POST['Password'])){

		// TODO
		$db = new PDO('mysql:host=localhost;dbname=IIM_GIT', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

		// Force user connection to access dashboard
		userConnection($db, $_POST['Email'], $_POST['Password']);
		
		header('Location: dashboard.php');

	}else{
		$error = 'Champs requis !';
	}
}

/******************************** 
			VIEW 
********************************/
include 'view/_header.php';
include 'view/login.php';
include 'view/_footer.php';