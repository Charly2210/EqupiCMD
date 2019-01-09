
<style type="text/css">
    body {
        color: #fffb54;
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

<div class="container center">

        <div class="login-form">
            <div class="main-div">
                <form id="registrar" class="needs-validation" action="<?php echo URL?>personas/crear" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <div class="panel">
                        <h3 align="center">Registro</h3>
                        <h6><p>Por favor llena todos los campos</p></h6>
                    </div>
                    <div class='form-group'>
                        <div class='input-field col s15'>
                           <h5> <input class='validate' placeholder="Nombre" type='text' id="nombre" name="nombre"'></h5>
                        </div>

                        <div class='input-field col s15'>
                            <h5><input class='validate' placeholder="Apellido paterno" type='text' id="ap_p" name="ap_p"></h5>
                        </div>

                        <div class='input-field col s12'>
                            <h5><input class='validate' placeholder="Apellido materno" type='text' id="ap_m" name="ap_m"></h5>
                        </div>


                        <div class='input-field col s12'>
                            <h5><input class='validate' placeholder="Edad" type='text' id="edad" name="edad"></h5>
                        </div>

                        <div class='input-field col s12'>
                        <h5><select class='input-field col s12' name="id_sexo" id="id_sexo"></h5>
                            <option value="">Selecciona Sexo</option>
                            <?php
                            if(isset($datos[1])){
                                while($fila = mysqli_fetch_assoc($datos[1])){ ?>
                                    <option value=" <?php echo $fila['id_sexo'] ?>"> <?php echo $fila['descripcion'] ?> </option>
                                <?php }
                            }
                            ?>
                        </select>
                        </div>
                        <div class='input-field col s12'>
                            <h5><input class='validate' placeholder="E-mail" type='email' name='nickname' id='nickname'></h5>
                        </div>
                        <div class='input-field col s12'>
                            <h5><input class='validate' placeholder="Contraseña" type='password' name='pass' id='pass'></h5>
                        </div>

                        <div class='input-field col s12'>
                       <h5 align="cenetr"> <select class='input-field col s12' name="id_tipo_usuario" id="id_tipo_usuario"></h5>
                            <option value="">Seleccion de Usuario</option>
                            <?php
                            if(isset($datos[2])){
                                while($fila = mysqli_fetch_assoc($datos[2])){ ?>
                                    <option value="<?php echo $fila['id_tipo_usuario'] ?>"><?php echo $fila['descripcion'] ?></option>
                                <?php }
                            }
                            ?>
                        </select>
                        </div>

                        <div class="container">
                           <h4><button id="registrar" type="submit" value="" class="btn btn-primary" href="<?php echo URL?>login"   >Registrar  </button></h4>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</div>