<?php
/**
 * Created by PhpStorm.
 * User: Mary
 * Date: 17/10/2018
 * Time: 0:03
 */
?>
<style type="text/css">
    body {
        color: #fff;
        background: rgba(212, 188, 37, 0.49);
    }
    .form-control {
        min-height: 41px;
        background: #fff;
        box-shadow: none !important;
        border-color: #e3e3e3;
    }
    .form-control:focus {
        border-color: #70c5c0;
    }
    .form-control, .btn {
        border-radius: 2px;
    }
    .login-form {
        width: 350px;
        margin: 0 auto;
        padding: 100px 0 30px;
    }
    .login-form form {
        color: #7a7a7a;
        border-radius: 2px;
        margin-bottom: 15px;
        font-size: 13px;
        background: #ececec;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
        position: relative;
    }
    .login-form h2 {
        font-size: 22px;
        margin: 35px 0 25px;
    }
    .login-form .avatar {
        position: absolute;
        margin: 0 auto;
        left: 0;
        right: 0;
        top: -50px;
        width: 95px;
        height: 95px;
        border-radius: 50%;
        z-index: 9;
        background: #70c5c0;
        padding: 15px;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
    }
    .login-form .avatar img {
        width: 100%;
    }
    .login-form input[type="checkbox"] {
        margin-top: 2px;
    }
    .login-form .btn {
        font-size: 16px;
        font-weight: bold;
        background: #70c5c0;
        border: none;
        margin-bottom: 20px;
    }
    .login-form .btn:hover, .login-form .btn:focus {
        background: #50b8b3;
        outline: none !important;
    }
    .login-form a {
        color: #fff;
        text-decoration: underline;
    }
    .login-form a:hover {
        text-decoration: none;
    }
    .login-form form a {
        color: #7a7a7a;
        text-decoration: none;
    }
    .login-form form a:hover {
        text-decoration: underline;
    }

</style>

<body id="LoginForm">
<h1 class="form-heading"></h1>
<div class="container center">
    <div>
        <h5 class="red-text">
        <?php echo isset($_SESSION["error_login"])?$_SESSION["error_login"]:""?>
        </h5>
    </div>
    <div class="container">

        <div class="login-form">
            <div class="panel">
                <form method="post" action="<?php echo URL?>login/Verify">
                    <div class="panel">
                        <h3 align="center" text color="blue">Inicio de Sesión</h3>
                        <p><h5 textcolor="blue">Por favor ingresa tu e-mail y contraseña</h5></p>
                    </div>
                    <div class='form-group'>
                        <div class='input-field col s15'>
                           <h5> <input  value="" placeholder="Email" type='email' name='nickname' id='nickname' REQUIRED></h5>
                        </div>


                        <div class='input-field col s12'>
                           <h5 > <input  value="" placeholder="Contraseña" type='password' name='pass' id='pass'REQUIRED></h5>
                        </div>

                    <br />
                        <div class="form-group">
                            <h3 align="center"><button class="btn btn-outline-primary " type='submit' name='btn_login'>Entrar.</button></h3>
                        </div>



                    <p class="text text-black-50 "><h5>¿Aún no tienes cuenta con nosotros?</h5></p>
                    <h3 align="center"><a  href="<?php echo URL?>personas" class="btn btn-outline-primary " id="signin">Registra </a></h3>

                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

