<?php
  require_once('baseFunction.php');
  updateWorker($_POST);
  header('Location: ../workers.php');
?>
