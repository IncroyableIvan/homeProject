<?php
  require_once('baseFunction.php');
  addNewWorker($_POST);
  header('Location: ../workers.php');
?>
