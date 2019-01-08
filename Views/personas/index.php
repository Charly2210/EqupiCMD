<?php
/**
 * Created by PhpStorm.
 * User: Mary
 * Date: 12/12/2018
 * Time: 21:45
 */

?>
<div class="container center">
    <div class="container">

        <div class="login-form">
            <div class="main-div">
                <form id="registrar" class="needs-validation" action="<?php echo URL?>personas/crear" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <div class="panel">
                        <h3>Registro</h3>
                        <p>LLena todos los campos</p>
                    </div>
                    <div class='form-group'>
                        <div class='input-field col s15'>
                            <input class='validate' placeholder="Nombre" type='text' id="nombre" name="nombre"'>
                        </div>
                        <br>

                        <div class='input-field col s15'>
                            <input class='validate' placeholder="Apellido paterno" type='text' id="ap_p" name="ap_p">
                        </div>
                        <br>

                        <div class='input-field col s12'>
                            <input class='validate' placeholder="Apellido materno" type='text' id="ap_m" name="ap_m">
                        </div>
                        <br>

                        <div class='input-field col s12'>
                            <input class='validate' placeholder="Edad" type='text' id="edad" name="edad">
                        </div>
                        <br>
                        <select class='input-field col s12' name="id_sexo" id="id_sexo">
                            <option value="">Selecciona Sexo</option>
                            <?php
                            if(isset($datos[1])){
                                while($fila = mysqli_fetch_assoc($datos[1])){ ?>
                                    <option value=" <?php echo $fila['id_sexo'] ?>"> <?php echo $fila['descripcion'] ?> </option>
                                <?php }
                            }
                            ?>
                        </select>
                        <br>
                        <br>
                        <div class='input-field col s12'>
                            <input class='validate' placeholder="E-mail" type='email' name='nickname' id='nickname'>
                        </div>
                        <br>
                        <div class='input-field col s12'>
                            <input class='validate' placeholder="Contraseña" type='password' name='pass' id='pass'>
                        </div>
                        <br>
                        <select class='input-field col s12' name="id_tipo_usuario" id="id_tipo_usuario">
                            <option value="">Selecciona Tipo Usuario</option>
                            <?php
                            if(isset($datos[2])){
                                while($fila = mysqli_fetch_assoc($datos[2])){ ?>
                                    <option value="<?php echo $fila['id_tipo_usuario'] ?>"><?php echo $fila['descripcion'] ?></option>
                                <?php }
                            }
                            ?>
                        </select>
                        <br>
                        <br>
                        <div class="container">
                            <button id="registrar" type="submit" value="" class="btn btn-primary" href="<?php echo URL?>login"   >Registrar  </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>