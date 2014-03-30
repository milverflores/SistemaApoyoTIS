<?php
/**
 * @author milver
 */
include 'ConexionTIS.php';
class Acceso {
    private $conexion;
    private $usuario;
    private $contrasena;
    function __construct($us,$pass) {
        $this->conexion=new ConexionTIS();
        $this->usuario=$us;
        $this->contrasena=$pass;
    }
    public function existeUsuario() {
        $respuesta=  $this->conexion->validarUsuario($this->usuario, $this->contrasena);
        $valor;
        $resp=FALSE;
        while ($reg = pg_fetch_assoc($respuesta)) {
            $valor=$reg['verificarusuario'];
        }
        if ($valor=='t') {
            $resp=TRUE;
        }
        return $resp;
    }
    public function getRol() {
        
    }
}
?>
