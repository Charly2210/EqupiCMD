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
            <link rel="stylesheet" href="<?php echo URL?>/dist/css/bootstrap.min.css">
            <link href="<?php echo URL?>/Public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <link href="<?php echo URL?>/Public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
            <link href="<?php echo URL?>/Public/css/grayscale.css" rel="stylesheet">
            <link rel="stylesheet" href="<?php echo URL?>/Public/Style2.css">
            <link rel="stylesheet" href="<?php echo URL?>/Public/EstiloLogin.css">

            <script type="text/javascript" src="<?php echo URL?>/Public/js/bootstrap.bundle.min.js"></script>
            <script type="text/javascript" src="<?php echo URL?>/Public/js/bootstrap.js"></script>
            <script type="text/javascript" src="<?php echo URL?>/Public/js/jquery.min.js"></script>
            <script src="<?php echo URL?>/dist/js/jquery.js"></script>
            <script src="<?php echo URL?>/dist/js/bootstrap.min.js"></script>
            <script src="<?php echo URL?>/Public/vendor/jquery/jquery.min.js"></script>
            <script src="<?php echo URL?>/Public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="<?php echo URL?>/Public/vendor/jquery-easing/jquery.easing.min.js"></script>
            <script src="<?php echo URL?>/Public/js/grayscale.min.js"></script>





            <link href="css/full-slider.css" rel="stylesheet">
        </head>


        <body>
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
            <nav class="navbar navbar-expand-lg navbar-dark  fixed-bottom bg-dark ">
                <div class="container">
                    <p class="text-left text-white">Copyright &copy; Derechos Reservados BIBLIOTEC</p>
                </div>
            </nav>

        </footer>
        <?php

    }




}