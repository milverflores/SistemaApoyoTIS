<?php
    include 'clases/GrupoEmpresas.php';
    $emp=new GrupoEmpresa();
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript" src="js/app.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Seguimiento a Grupo Empresas</title>
        <link rel="stylesheet" href="css/stily.css">
    </head>
    <body>
        <header>
            <div id="banner" class="page-header">
                <h1><?php echo $emp->getNombreDocente(301)?></h1>
                <h2>Gestion CPTIS012014</h2>
            </div>
        </header>
        <section id="contenido" class="container">
            <?php
            if(isset($_GET['codEmp'])){
                include 'evaluarEmpresa.php';
            }
            else {
                $emp->getGrupoEmpresas();
            }
            ?>
        </section>
       <?php
            include './php/footer.php';
       ?>
    </body>
    
</html>
