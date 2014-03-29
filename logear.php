<?php
include 'clases/Acceso.php';
$usuario=$_POST['usuario'];
$pass=$_POST['pass'];
echo 'usuario es :'.$usuario."<br>";
echo 'password es :'.$pass."<br>";
$acceso=new Acceso($usuario, $pass);
if ($acceso->existeUsuario()) {
    $var=  md5("habilitado");
    header("Location:index.php?".$var);
}
else{
    echo 'no existe';
}
?>
