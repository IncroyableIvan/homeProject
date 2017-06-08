<?php
require_once('baseFunction.php');
deleteWorkers($_POST);
header('Location: ../workers.php');
?>
