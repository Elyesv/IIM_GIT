<?php
session_start();
require('config/config.php');
require('model/functions.fn.php');

/*===============================
	Dashboard
===============================*/

if (!isset($_SESSION) or empty($_SESSION)) {
  header('Location: login.php');
  exit();
}

$db = new PDO('mysql:host=localhost' . ';dbname=IIM_GIT' . $dbname, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$musics = listMusics($db);

include 'view/_header.php';
include 'view/dashboard.php';
include 'view/_footer.php';
