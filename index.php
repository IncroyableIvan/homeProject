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
    <title> Home Project DWM7 </title>
    <?php include('template/header.php'); ?>
  </head>
  <body>
  <?php include('template/menu.php'); ?>

  <div class="container">
  <div class="row">
    <div class="page-header">
    <h1>Bienvenue <?php echo strtoupper ( $_SESSION['username'])?></h1>
  </div>
</div>
  </body>
</html>
