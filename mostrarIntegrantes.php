<?php
//cantidad de registros a llenar
$cantidad=$_POST['cantidad'];

$asistentes;
$licencia;
$participacion;
$justificacion;
$nota;
$observacion;

//llenamos asistencias
for ($x = 0; $x < $cantidad; $x++) {
    if($_POST['asistencia'.($x+1)]==NULL){
        $asistentes[$x]=0;
    }
    else{
        $asistentes[$x]=1;
    }
}
//llenamos licencias
for ($z = 0; $z < $cantidad; $z++) {
    if($_POST['licencia'.($z+1)]==NULL){
        $licencia[$z]=0;
    }
    else{
        $licencia[$z]=1;
    }
}
//lenado de participacion
for ($p = 0; $p < $cantidad; $p++) {
    if($_POST['participacion'.($p+1)]==NULL){
        $participacion[$p]=0;
    }
    else{
        $participacion[$p]=1;
    }
}
//llenado de justificacion
for($ll=0;$ll<$cantidad;$ll++){
    if($_POST['justificacion'.($ll+1)]==NULL){
        $justificacion[$ll]='nada';
    }
    else{
        $justificacion[$ll]=$_POST['justificacion'.($ll+1)];
    }
}
//llenado de nota
for($n=0;$n<$cantidad;$n++){
    if($_POST['nota'.($n+1)]==NULL){
        $nota[$n]=0;
    }
    else{
        $nota[$n]=$_POST['nota'.($n+1)];
    }
}
//llenado de observacion
for($o=0;$o<$cantidad;$o++){
    if($_POST['obs'.($o+1)]==NULL){
        $observacion[$o]='nada';
    }
    else{
        $observacion[$o]=$_POST['obs'.($o+1)];
    }
}
echo $cantidad."<br>";
/**/?>
<table>
    <tr><td>asistencia</td><td>licencia</td><td>participacion</td><td>justificacion</td><td>nota</td><td>obs</td></tr>
    <?php
       for ($a = 0; $a < $cantidad; $a++) {
        echo '<tr><td>'.$asistentes[$a].'</td><td>'.$licencia[$a].'</td><td>'.$participacion[$a].'</td><td>'.$justificacion[$a].'</td><td>'.$nota[$a].'</td><td>'.$observacion[$a].'</td></tr>';
    }
        ?>
</table>

<!--

<form action="" method="">
    <table >
        <thead>
            <tr><td>integante</td><td>asistencia</td><td>licencia</td><td>participacion</td><td>justificacion</td><td>calificacion</td><td>observaciones</td></tr>
        </thead>
        <tbody>
            <tr>
                <td>integrante</td>
                <td><input type='checkbox' name='asistencia[]' id='cba1' onchange='clickAsistencia(1)'></td>
                <td><input type='checkbox' name='licecia[]' id='cbl1' onchange='clickLicencia(1)'></td>
                <td><input type='checkbox' name='participacion[]' id='cbp1' onchange='clickParticipacion(1)'></td>
                <td><textarea name='justificacion[]' id='taj1' disabled='false'></textarea></td>
                <td><input type='number' min='0' max='100' value='0' name='nota[]' id='nn1' disabled='false'></td>
                <td><textarea name='obs[]' id='tao1' disabled='false'></textarea>
            </tr>
            </tr>
        </tbody>
        <tfoot>

        </tfoot>
    </table>
</form>
<style type="text/css">
    table,thead,tr,td{
        
    }
    thead{
        background-color: #9e8e8e;
    }
</style>
<script type="text/javascript">
    function clickAsistencia(num){
        var asistencia=document.getElementById("cba"+num);
        var licencia=document.getElementById("cbl"+num);
        var nota=document.getElementById("nn"+num);
        var observacion=document.getElementById("tao"+num);
        var justificacion=document.getElementById("taj"+num);

        if(!asistencia.checked){
            nota.disabled=true;
            observacion.disabled=true;
            justificacion.disabled=false;
        }
        else{
            justificacion.disabled=true;
            observacion.disabled=false;
            licencia.checked=false;
            nota.disabled=false;
        }

    }
    function clickLicencia(num){
        var asistencia=document.getElementById("cba"+num);
        var licencia=document.getElementById("cbl"+num);
        var nota=document.getElementById("nn"+num);
        var observacion=document.getElementById("tao"+num);
        var justificacion=document.getElementById("taj"+num);
        var participacion=document.getElementById("cbp"+num);
        if(!licencia.checked){
            nota.disabled=false;
            justificacion.disabled=true;
            observacion.disabled=false;
            participacion.checked=false;

        }
        else{
            justificacion.disabled=false;
            asistencia.checked=false;
            nota.disabled=true;
            observacion.disabled=true;
            participacion.checked=false;
        }
    }
    function clickParticipacion(num){
        var asistencia=document.getElementById("cba"+num);
        var licencia=document.getElementById("cbl"+num);
        var nota=document.getElementById("nn"+num);
        var observacion=document.getElementById("tao"+num);
        var justificacion=document.getElementById("taj"+num);
        var participacion=document.getElementById("cbp"+num);
        if(!participacion.checked){
            nota.disabled=true;
            observacion.disabled=true;
            justificacion.disabled=true;

        }
        else{
            justificacion.disabled=true;
            asistencia.checked=true;
            nota.disabled=false;
            observacion.disabled=false;
            licencia.checked=false;
        }
    }
</script>-->