<?php
session_start();
require('config/config.php');
require('model/functions.fn.php');

/*===============================
	Dashboard
===============================*/

 if(!isset($_SESSION) OR empty($_SESSION)){
	header('Location: login.php');
	exit();
}

$db = new PDO('mysql:host=localhost;dbname=IIM_GIT', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
$musics = listMusics($db);

include 'view/_header.php';
include 'view/dashboard.php';
include 'view/_footer.php';