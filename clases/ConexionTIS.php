<?php
//conexion  a la base de datos
class  ConexionTIS
{
    private $servidor;
    private $puerto;
    private $nombre;
    private $usuario;
    private $clave;
    function __construct()
    {
        $this->servidor="localhost";
        $this->puerto="5432";
        $this->nombre="bdtis";
        $this->usuario="tis";
        $this->clave="tis";
    }
    function Conectar()
    {
        $BaseDato=pg_connect("host=$this->servidor port=$this->puerto dbname=$this->nombre user=$this->usuario password=$this->clave")
                or die ('Error de conexión. Póngase en contacto con el administrador');
        return $BaseDato;
    }
    function Consultas($Consulta)
    {
        $conx=$this->Conectar();
        if(!$conx)
            return 0; //Si no se pudo conectar
        else
        {
            //Valor es resultado de base de dato y Consulta es la Consulta a realizar
            $Resultado=pg_query($conx,$Consulta);
            return $Resultado;// retorna si fue afectada una fila
        }
    }
    function getGruposDoc($grupo){
        $resultado= $this->Consultas("SELECT * FROM getgrupoempresas(202);");
        $cantidad=  pg_affected_rows($resultado);
        while ($row = pg_fetch_assoc($resultado)) {
            
            ?><article style="background-image: url( <?php echo $row["logoemp"]; ?>)" class="grupo-empresa"><?php
                    echo $row['grupodoc']."<br>";
                    echo "<section class='centro'>".$row['nombreemp']."</section>";
                    echo '<article class="representante">'.$this->getRepresentante($row["codemp"]).'</article>';
                    echo '<a href="seguimiento.php?codEmp='.$row["codemp"].'" class="detalle" >enlace</a>';
            ?></article><?php
        }
    }
    //SELECT * FROM getrepresentante(500)
    function getRepresentante($codEmp) {
        $resp;
        $resultadoResp= $this->Consultas("SELECT * FROM getrepresentante(".$codEmp.");");
        while ($reg = pg_fetch_assoc($resultadoResp)) {
            $resp=$reg['nombreusuario'];
        }
        return $resp;
    }
    function getUsuarioDocente($codUser) {
        $resp;
        $resultadoResp= $this->Consultas("SELECT * FROM getUsuarioDocente(".$codUser.");");
        while ($reg = pg_fetch_assoc($resultadoResp)) {
            $resp=$reg['nombreusuario'];
        }
        return $resp;
    }
    function validarUsuario($us,$pass) {
        $sqlVal="SELECT * FROM verificarusuario('".$us."','".$pass."')";
        $respVal=  $this->Consultas($sqlVal);
        return $respVal;
    }
    function getIntegrantesRepresentante($codEmp) {
        $sqlIntRep="SELECT * FROM getintegrtrep(".$codEmp.");";
        $respIntRep=  $this->Consultas($sqlIntRep);
        return $respIntRep;
    }
}
//fin clase conexion
?>
