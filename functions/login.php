<?php
session_start();
$db = new PDO('mysql:host=localhost;dbname=company', 'root', '');

$user = $db->prepare('SELECT * FROM administrator WHERE user = :username AND password = :password');
$user->bindParam(':username', $_POST['username']);
$user->bindParam(':password', $_POST['password']);
$user->execute();

if($user->fetch()[0] == false) {

  $_SESSION['loginMessage'] = 'Utilisateur non valide';
  header('Location: ../loginRegister.php');

} else {

  $_SESSION['loginMessage'] = 'valide';
  $_SESSION['isConnected'] = true;
  header('Location: ../index.php');
}
?>
