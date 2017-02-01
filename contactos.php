<!DOCTYPE html>
<html lang="en">
    
    <?php $pagina = "Contactos" ?>
    
    <!--RECURSOS-->
    <?php include "segmentos/recursos.php" ?>
    
<body>
    <!--CABECERA-->
    <?php include "segmentos/cabecera.php" ?>

    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Contactanos</h1>
                </div>
            </div>
        </div>
    </section><!--/#title-->    

    <section id="contact-page" class="container">
        <div class="row">
            <!--CONTENIDO DE CONTACTOS-->
            <?php include "segmentos/contenido_contactos.php" ?>
            
            <!--UBICACION DE NUESTRAS OFICINAS-->
            <div class="col-sm-10"><!--Ubicaciones de nuestras oficinas-->    
                <h3><span class="glyphicon glyphicon-map-marker"></span>Ubicaciones de nuestra oficinas</h3>
            
                <ul>
                    <!--Ubicacion oficina principal-->
                    <?php include "segmentos/ubicacion_oficina_principal.php" ?>
                    
                    <br><br>
                    
                    
                    <!--Ubicacion sucursal la guaira y maiquetia-->
                    <?php include "segmentos/ubicacion_sucursal_la_guaira_maiquetia.php" ?>
                    
                    <br><br>
                    
                    <!--Ubicacion sucursal guanta-->
                    <?php include "segmentos/ubicacion_sucursal_guanta.php" ?>
                    
                </ul>
            </div><!--Ubicaciones de nuestras oficinas-->
        </div>
    </section><!--/#contact-page-->

    <!--PIE DE PAGINA-->
    <?php include "segmentos/pie_de_pagina.php" ?>
    
    <script>
            jQuery(document).ready(function($) {

                $('#myCarousel').carousel({
                        interval: 5000
                });

                $('#carousel-text').html($('#slide-content-0').html());

                //Handles the carousel thumbnails
               $('[id^=carousel-selector-]').click( function(){
                    var id = this.id.substr(this.id.lastIndexOf("-") + 1);
                    var id = parseInt(id);
                    $('#myCarousel').carousel(id);
                });


                // When the carousel slides, auto update the text
                $('#myCarousel').on('slid.bs.carousel', function (e) {
                         var id = $('.item.active').data('slide-number');
                        $('#carousel-text').html($('#slide-content-'+id).html());
                });
            });
        
        /*
        jQuery(document).ready(function($) {

                $('#myCarousel').carousel({
                        interval: 5000
                });

                $('#carousel-text').html($('#slide-content-0').html());

                //Handles the carousel thumbnails
                $('[id^=carousel-selector-]').click( function(){
                        var id_selector = $(this).attr("id");
                        var id = id_selector.substr(id_selector.length -1);
                        var id = parseInt(id);
                        $('#myCarousel').carousel(id);
                });


                // When the carousel slides, auto update the text
                $('#myCarousel').on('slid', function (e) {
                        var id = $('.item.active').data('slide-number');
                        $('#carousel-text').html($('#slide-content-'+id).html());
                });
        });
        */
    </script>
</body>
</html>