<!DOCTYPE html>
<html lang="en">
    
    <?php $pagina = "Servicios" ?>
    
    <!--RECURSOS-->
    <?php include "segmentos/recursos.php" ?>
    
    <body>
        <!--CABECERA-->
        <?php include "segmentos/cabecera.php" ?>
        
        <section id="title" class="emerald">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Servicios</h1>
                        <!--<p>Pellentesque habitant morbi tristique senectus et netus et malesuada</p>-->
                    </div>
                    
                    <!--<div class="col-sm-6"></div>-->
                    
                </div>
            </div>
        </section><!--/#title-->     

        <section id="services">
            <div class="container">
                
                <!--CONTENIDO NUESTROS SERVICIOS-->
                <?php include "segmentos/contenido_nuestros_servicios.php" ?>
                
                <br>
                
                <!--CONTENIDO NUESTROS CLIENTES-->
                <?php include "segmentos/contenido_nuestros_clientes.php" ?>
                
            </div>
        </section><!--/#services-->

        <!--PIE DE PAGINA-->
        <?php include "segmentos/pie_de_pagina.php" ?>

    </body>
</html>