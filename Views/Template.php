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
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <link href="<?php echo URL?>/Public/css/bootstrap.css" type="text/css" rel="stylesheet">
            <link href="<?php echo URL?>/Public/css/bootstrap.css" type="text/css" rel="stylesheet">
            <link href="<?php echo URL?>/Public/css/bootstrap-reboot.css" type="text/css" rel="stylesheet">
            <link rel="stylesheet" href="<?php echo URL?>/Public/style.css">
            <link href="<?php echo URL?>/Public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <link href="<?php echo URL?>/Public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
            <link href="<?php echo URL?>/Public/css/grayscale.css" rel="stylesheet">
            <link rel="stylesheet" href="<?php echo URL?>/Public/Style2.css">
            <link rel="stylesheet" href="<?php echo URL?>/Public/EstiloLogin.css">

            <link rel="stylesheet" href="<?php echo URL ?>Public/css/sweetalert.css">






            <script type="text/javascript" src="<?php echo URL?>/Public/js/bootstrap.bundle.min.js"></script>
            <script type="text/javascript" src="<?php echo URL?>/Public/js/bootstrap.js"></script>
            <script type="text/javascript" src="<?php echo URL?>/Public/js/jquery.min.js"></script>
            <script src="<?php echo URL?>/Public/vendor/jquery/jquery.min.js"></script>
            <script src="<?php echo URL?>/Public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="<?php echo URL?>/Public/vendor/jquery-easing/jquery.easing.min.js"></script>
            <script src="<?php echo URL?>/Public/js/grayscale.min.js"></script>


            <script type="text/javascript" src="<?php echo URL ?>Public/js/jquery.validate.min.js">
                //<script src="<?php echo URL ?>Public/js/sweetalert.min.js" type="text/javascript"></script>
            <script src="<?php echo URL ?>Public/js/jquery.js"></script>
            <script src="<?php echo URL ?>Public/js/bootstrap.min.js"></script>
            <script src="<?php echo URL ?>Public/js/sweetalert.min.js" type="text/javascript"></script>




            <link href="css/full-slider.css" rel="stylesheet">
        </head>


        <body>
        <main>

            <title>Biblioteca Digital </title>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <div class="container">
                    <div class="nav-wrapper cyan lighten-2">
                        <?php if(!isset($_SESSION["username"]))
                        {?>
                            <div class="container">
                                <a class="navbar-brand js-scroll-trigger" href="<?php echo URL?>login" class="btn btn-primary js-scroll-trigger" id="sesion">Iniciar sesion</a>

                            </div>
                        <?php }?>
                    </div>
                    <div class="collapse navbar-collapse " id="navbarResponsive">

                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">

                                <a class="navbar-brand js-scroll-trigger" href="<?php echo URL?>Quiensomos" class="btn btn-primary js-scroll-trigger" id="informes">Quien somos</a>

                            </li>

                            <li class="nav-item">

                                <a class="navbar-brand js-scroll-trigger" href="<?php echo URL?>Contactanos" class="btn btn-primary js-scroll-trigger" id="informes">Contactanos</a>


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