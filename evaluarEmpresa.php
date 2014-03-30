<?php
    $cod=$_GET['codEmp'];
?>
<form method="post" action="mostrarIntegrantes.php" name="evaluar" role="form">
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr><td>integante</td><td>asistencia</td><td>licencia</td><td>participacion</td><td>justificacion</td><td>calificacion</td><td>observaciones</td></tr>
            </thead>
            <tbody>
                <?php
                     $emp=new GrupoEmpresa();
                     $emp->dameIntegrantes($cod);
                ?>
                <tr><td colspan="7"><input type="submit" value="evaluar" class="btn btn-primary bt-lg btn-block"></td></tr>
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>
</form>
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
</script>
