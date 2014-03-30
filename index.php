<?php
if(isset ($_REQUEST[md5("habilitado")])){
    ?>
<a href="seguimiento.php">grupo empresas</a>
    <?php
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <title>Sistema de Apoyo Empresa TIS</title>
    </head>
    <body>
        <header>

        </header>
        <div id="contenido" class="container">
            <form class="form-horizontal" role="form" action="logear.php" method="post">
                <div class="form-group">
                  <label for="ejemplo_email_3" class="col-lg-2 control-label">Usuario</label>
                  <div class="col-lg-3">
                      <input type="text" class="form-control" id="ejemplo_email_3" name="usuario" placeholder="usuario">
                  </div>
                </div>
                <div class="form-group">
                  <label for="ejemplo_password_3" class="col-lg-2 control-label">Contraseña</label>
                  <div class="col-lg-3">
                      <input type="password" name="pass" class="form-control" id="ejemplo_password_3" 
                           placeholder="Contraseña">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-3">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> No cerrar sesión
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button type="submit" class="btn btn-default">Entrar</button>
                  </div>
                </div>
              </form>
            </div>
        <footer>

        </footer>
    </body>
</html>
