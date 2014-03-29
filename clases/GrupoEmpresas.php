<?php
include "ConexionTIS.php";
class GrupoEmpresa {
    private $coneccion;
    function __construct() {
        $this->coneccion=new ConexionTIS();
    }
    public function getGrupoEmpresas() {
        
        $this->coneccion->getGruposDoc($grupo);
    }
    public function getNombreDocente($codUs) {
        $resp=$this->coneccion->getUsuarioDocente($codUs);
        return $resp;
    }
    public function dameIntegrantes($cod) {
        $resultado=  $this->coneccion->getIntegrantesRepresentante($cod);
        $contador=1;
            while ($reg = pg_fetch_assoc($resultado)) {
                echo '<tr><td>'.$reg["nombre"]."</td>
                    <td><input value='1' checked='true' type='checkbox' name='asistencia".$contador."' id='cba".$contador."' onclick='clickAsistencia(".$contador.")'></td>
                    <td><input type='checkbox' name='licencia".$contador."' id='cbl".$contador."' onclick='clickLicencia(".$contador.")'></td>
                    <td><input type='checkbox' name='participacion".$contador."' id='cbp".$contador."' onclick='clickParticipacion(".$contador.")'></td>
                    <td><textarea name='justificacion".$contador."' id='taj".$contador."' disabled='false'></textarea></td>
                    <td><input type='number' min='0' max='100' value='0' name='nota".$contador."' id='nn".$contador."' disabled='false'></td>
                    <td><textarea name='obs".$contador."' id='tao".$contador."' disabled='false'></textarea></tr>";
                $contador=$contador+1;
            }
            echo "<tr><input type='hidden' name='cantidad' value='".($contador-1)."' ></tr>";
    }

}
?>



