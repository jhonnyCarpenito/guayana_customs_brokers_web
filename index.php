<!DOCTYPE html>
<html lang="en">

    <?php $pagina = "Principal" ?>
    
    <!--RECURSOS-->
    <?php include "segmentos/recursos.php" ?>
    
    <body>

        <!--CABECERA-->
        <?php include "segmentos/cabecera.php" ?>

        <!--CARRUSEL-->
        <?php include "segmentos/carrusel.php" ?>

        <!--REDES SOCIALES-->
        <?php include "segmentos/redes_sociales.php" ?>

        <!--PIE DE PAGINA-->
        <?php include "segmentos/pie_de_pagina.php" ?>

    </body>
</html>

<!--Codigo javascript-->
<!--
<script>
    $(document).ready(function(){
        $('.main-slider').carousel()
    });
    
    $(document).ready(function(){
        $('.main-slider').carousel({
            interval: 3000
        });
    });
</script>
-->