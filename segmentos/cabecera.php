    <!--Cabecera de la web-->
    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="recursos/images/logo.svg" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li <?php if($pagina == "Principal") echo ' class="active" ' ?> >
                        <a href="index.php"><span style="color:#ffffff;" class="glyphicon blanco glyphicon-home"></span>  Principal </a>
                    </li>
                    
                    <li <?php if($pagina == "Acerca de nosotros") echo ' class="active" ' ?> >
                        <a href="acerca_de_nosotros.php">Acerca de nosotros</a>
                    </li>
                    
                    <li <?php if($pagina == "Servicios") echo ' class="active" ' ?> >
                        <a href="servicios.php">Servicios</a>
                    </li>
                    
                    <li <?php if($pagina == "Contactos") echo ' class="active" ' ?> >
                        <a href="contactos.php">Contactos</a>
                    </li>
                    <!--
                    <li>
                        <a href="contact-us.html">Iniciar sesión</a>
                    </li> 
                    -->
                </ul>
            </div>
        </div>
    </header><!--/header-->