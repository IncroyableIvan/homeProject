<?php
  session_start();

  if($_SESSION['isConnected'] == true) {
  } else {
    header('Location: loginRegister.php');
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> CRUD </title>
    <?php include('template/header.php'); ?>
  </head>
  <body>
  <?php include('template/menu.php'); ?>
  </body>
</html>
