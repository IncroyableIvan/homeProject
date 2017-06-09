<?php
  session_start();

  if($_SESSION['isConnected'] == true) {
    require_once('functions/baseFunction.php');
    if(isset($_GET['id']) && !empty($_GET['id']) && isset($_GET['date']) && !empty($_GET['date'])) {
      $workingtime = getWorkingTime($_GET['id'], $_GET['date']);
      $action = "updatewt.php";
      $button_message = "Editer";
      $hasid = true;
    }else{
      $hasid = false;
      $action ="addWorkingTime.php";
      $button_message = "Ajouter";
    }
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
  <?php
  require_once("functions/baseFunction.php");
  $working_time = getAllWorkTime();
  $workers = getAllWorkers();
  ?>
  <div class="container">
    <div class="row">
      <div class="page-header">
        <h1>Horaires</h1>
      </div>
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Ajouter</h3>
          </div>
          <div class="panel-body">
            <form method="post" action="functions/<?php echo $action ?>">
              <div class="form-group">
                  <label>Worker</label><br>
                  <?php if ($hasid) {
                    $idworkert = $workingtime['id'];
                    echo "<input name =\"id_worker\" type=\"hidden\" value = \"$idworkert\"/> ";
                  }?>
                  <select name="id_work" class="custom-select" <?php if ($hasid) {
                    echo "disabled";
                  }?> >
                    <?php

                     foreach ($workers as $value) {
                       $idw = $value['id'];
                       $result = $value['name']. " " . $value['last_name'];

                       if( $hasid && $idw == $workingtime['id']){
                         $selected = "selected=\"selected\"";
                       }else{
                         $selected = "";
                       }

                       echo "<option $selected value=\"$idw\">$result</option>";
                     }
                   ?>
                </select><br><br>
                <label>Date</label>
                <input type="date" name="jour" class="form-control" <?php if ($hasid) {
                  $date = $workingtime['jour'];
                  echo "value=\"$date\"";
                  echo "readonly=\"readonly\"";
                }?>>
                <label>Heures travaillées</label>
                <input type="number" name="work_time" class="form-control" <?php if ($hasid) {
                  $heures = $workingtime['work_time'];
                  echo "value=\"$heures\"";
                }?>>
              </div>
              <button type="submit" class="btn btn-primary"><?php echo $button_message; ?></button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading">Données horaires</div>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th>Prénom</th>
              <th>Nom</th>
              <th>Date</th>
              <th>Heures travaillées</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($working_time as $value) {
              $idworker = $value['id'];
              $datew = $value['jour'];
               echo "<tr>";
               echo "<td>" . $value['name'] . "</td>";
               echo "<td>" . $value['last_name'] . "</td>";
               echo "<td>" . $value['jour'] . "</td>";
               echo "<td>" . $value['work_time'] . "</td>";
               echo "<td> <a href=\"working_time.php?id=$idworker&date=$datew\"> Edit <i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i> </a> </td>";
               echo "<td> <form method=\"POST\" action=\"functions/deleteWorkTime.php\"> <input name=\"datew\" type=\"hidden\" value=\"$datew\"/> <input name=\"idworker\" type=\"hidden\" value=\"$idworker\"/> Delete <button><i class=\"fa fa-times\" aria-hidden=\"true\"></i></button> </form> </td>";
               echo "</tr>";
             }
           ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  </body>
</html>
