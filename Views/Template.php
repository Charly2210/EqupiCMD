<?php
namespace Views;
new Template();
class Template
{
    public static function header()
    {
        ?>
        <!DOCTYPE html>
        <!------------------------------------------------------------------------------->
        <html lang="en">
        <!------------------------------------------------------------------------------->
        <head>
            <meta charset="UTF-8">
            <link href="<?php echo URL?>/Public/css/bootstrap.css" type="text/css" rel="stylesheet">
            <link href="<?php echo URL?>/Public/css/bootstrap.css" type="text/css" rel="stylesheet">
            <link href="<?php echo URL?>/Public/css/bootstrap-reboot.css" type="text/css" rel="stylesheet">
            <link rel="stylesheet" href="<?php echo URL?>/Public/style.css">
            <script type="text/javascript" src="<?php echo URL?>/Public/js/bootstrap.bundle.min.js"></script>
            <script type="text/javascript" src="<?php echo URL?>/Public/js/bootstrap.js"></script>
            <script type="text/javascript" src="<?php echo URL?>/Public/js/jquery.min.js"></script>


            <link href="css/full-slider.css" rel="stylesheet">
        </head>




        <main>

            <title>Biblioteca Digital </title>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <div class="container">
                    <a src="Public/img/libros1.jpg" width="20" height="20" class="navbar-brand js-scroll-trigger" href="<?php echo URL?>login" class="btn btn-primary js-scroll-trigger" >BiblioTec</a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

                        <i class="fas fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a   src="valle.jpg" width="20" height="20" class="navbar-brand js-scroll-trigger" href="<?php echo URL?>Quiensomos" class="btn btn-primary js-scroll-trigger" id="informes">Quien somos</a>
                                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                            </li>
                            <li class="nav-item">
                                <a   src="valle.jpg" width="20" height="20" class="navbar-brand js-scroll-trigger" href="<?php echo URL?>Informacion" class="btn btn-primary js-scroll-trigger" id="informes">Informes</a>
                                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                            </li>
                            <li class="nav-item">
                                <a   src="valle.jpg" width="20" height="20" class="navbar-brand js-scroll-trigger" href="<?php echo URL?>Contactanos" class="btn btn-primary js-scroll-trigger" id="informes">Contactanos</a>
                                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                            </li>
                        </ul>
                    </div>
                </div>

            </nav>

        </main>
        <!------------------------------------------------------------>
        </html>
        <?php
    }

    public function footer(){
        ?>
        <footer class="container">
            <p class="float-right"><a href="#">Back to top</a></p>
            <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
        <?php

    }
}

