
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Login  </title>
    <?php include('template/header.php'); ?>
  </head>
  <body>

    <?php
        session_start();

        if(isset($_SESSION['loginMessage']) && !empty($_SESSION['loginMessage'])) {
          $message = $_SESSION['loginMessage'] ;
          echo "<h2>Erreur: $message</h2>";
          $_SESSION['loginMessage'] = "";
        }


    ?>
  <form method="post" action="functions/login.php">

    <div class="container col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 col-lg-offset-4 col-lg-4">
            <br />
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Login</h1>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-user" style="width: auto"></i>
                            </span>
                            <input id="txtUsuario" runat="server" type="text" class="form-control" name="username" placeholder="Utilisateur" required="" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-lock" style="width: auto"></i>
                            </span>
                            <input id="txtSenha" runat="server" type="password" class="form-control" name="password" placeholder="Mot de passe" required="" />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default" style="width: 100%">
                        Login<i class="glyphicon glyphicon-log-in"></i>
                    </button>
                </div>
            </div>
        </div>
  </form>



  </body>
</html>
