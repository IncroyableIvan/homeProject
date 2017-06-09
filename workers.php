<?php
      session_start();

      if($_SESSION['isConnected'] == true) {
        require_once('functions/baseFunction.php');
        if(isset($_GET['id']) && !empty($_GET['id'])) {
          $workerupdate = getWorker($_GET['id']);
          $action = "updateWorker.php";
          $button_message = "Editer";
          $hasid = true;
        }else{
          $hasid = false;
          $action ="addWorker.php";
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
  $workers = getAllWorkers();
  ?>
  <div class="container">
	   <div class="row">
       <div class="page-header">
         <h1>Employés</h1>
       </div>
       <div class="col-md-4">
         <div class="panel panel-default">
           <div class="panel-heading">
             <h3 class="panel-title">Ajouter </h3>
           </div>
           <div class="panel-body">
          <form  method="post" action="functions/<?php echo $action ?>">
            <div class="form-group">
              <input name = "id" type="hidden" <?php if ($hasid) {
                $idworker = $workerupdate['id'];
                echo "value=\"$idworker\"";
              }?>/>
              <label>Prénom</label>
              <input type="text" name="name" class="form-control" placeholder="Enter first name" <?php if ($hasid) {
                $name = $workerupdate['name'];
                echo "value=\"$name\"";
              }?> >
              <label>Nom</label>
              <input type="text" name="last_name" class="form-control" placeholder="Enter last name" <?php if ($hasid) {
                $nom = $workerupdate['last_name'];
                echo "value=\"$nom\"";
              }?>>
              <label>Poste</label>
              <input type="text" name="status" class="form-control" placeholder="Enter status"<?php if ($hasid) {
                $status = $workerupdate['status'];
                echo "value=\"$status\"";
              }?>>
              <label>Email</label>
              <input type="mail" name="mail" class="form-control" placeholder="Enter mail"<?php if ($hasid) {
                $mail = $workerupdate['mail'];
                echo "value=\"$mail\"";
              }?>>
            </div>
            <button type="submit" class="btn btn-primary"><?php echo $button_message; ?></button>
          </form>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="panel panel-default">
            <div class="panel-heading">Données employés</div>
          </div>
          <table class="table">
            <thead>
              <tr>
                <th>id</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Poste</th>
                <th>Email</th>
                <th>Actions</th>
              </tr>
             </thead>
             <tbody>
               <?php
                foreach ($workers as $value) {
                  $idworker = $value['id'];
                  echo "<tr>";
                  echo "<td>" . $value['id'] . "</td>";
                  echo "<td>" . $value['name'] . "</td>";
                  echo "<td>" . $value['last_name'] . "</td>";
                  echo "<td>" . $value['status'] . "</td>";
                  echo "<td>" . $value['mail'] . "</td>";
                  echo "<td> <a  href=\"workers.php?id=$idworker\"> Edit <i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i> </a> </td>";
                  echo "<td> <form method=\"POST\" action=\"functions/deleteWorker.php\"> <input name=\"id\" type=\"hidden\" value=\"$idworker\"/> Delete <button><i class=\"fa fa-times\" aria-hidden=\"true\"></i></button> </form> </td>";
                  echo "</tr>";
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
