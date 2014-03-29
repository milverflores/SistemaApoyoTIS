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
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Sistema de Apoyo Empresa TIS</title>
    </head>
    <body>
        <header>

        </header>
        <div id="contenido">
            <form id="logeo" action="logear.php" method="post">
                usuario : <input type="text" name="usuario" placeholder="usuario"><br>
                password :<input type="password" name="pass" placeholder="password"><br>
                <input type="submit" name="logear">
            </form>
        </div>
        <footer>

        </footer>
    </body>
</html>
