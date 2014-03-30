<?php
include 'clases/Acceso.php';
$usuario=$_POST['usuario'];
$pass=$_POST['pass'];
echo 'usuario es :'.$usuario."<br>";
echo 'password es :'.$pass."<br>";
$acceso=new Acceso($usuario, $pass);
if ($acceso->existeUsuario()) {
    $var=  md5("habilitado");
    echo '<script type="text/javascript">
            window.location="seguimiento.php";
          </script>';
    
}
else{
    echo 'no existe';
}

?>
