<?php
require('config/config.php');
require('model/functions.fn.php');
session_start();

if (
  isset($_POST['Username']) && isset($_POST['Email']) && isset($_POST['Password']) &&
  !empty($_POST['Username']) && !empty($_POST['Email']) && !empty($_POST['Password'])
) {

  $db = new PDO('mysql:host=localhost;dbname=IIM_GIT', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
  userRegistration($db, $_POST['Username'], $_POST['Email'], $_POST['Password']);

  header('Location: login.php');
} else {
  $_SESSION['message'] = 'Erreur : Formulaire incomplet';
  header('Location: register.php');
}
