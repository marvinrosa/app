<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="jumbotron">

    <div class="container">
        <h2 class="center"> <?php echo $titulo_inicio;?></h2>
    </div>

</div>

<div class="container-fluid" xmlns="http://www.w3.org/1999/html">


    <div class="col-md-4 center-block " style="float: none; margin: 80px auto;" >

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title"><?php echo $title_panel;?></div>
            </div>
            <div class="panel-body">
                <?php if(validation_errors()){echo '<div class="alert alert-danger" role="alert">'. validation_errors().'</div>';}?>
                <?php echo form_open('signin');?>
                    <div class="form-group">
                        <label for="email">Correo eléctronico</label>
                        <input type="email" name="correo" value="<?php echo set_value('correo');?>" class="form-control" id="email" placeholder="Correo eléctronico">
                    </div>
                    <div class="form-group">
                        <label for="pass">Contraseña</label>
                        <input type="password" name="pass" class="form-control" id="pass" placeholder="Contraseña">
                    </div>
                    <button type="submit" class="btn btn-default">Entrar</button>
                </form>
            </div>

    </div>




</div>

<!---

             <?php if(validation_errors()){echo '<div class="alert alert-danger" role="alert">. validation_errors();.</div>';}?>


<?php form_open('welcome');?>
                    <div class="form-group">
                        <label for="username-email">Correo o Usuario</label>
                        <input value='' id="username-email" name="correo" placeholder="Correo o usuario" type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input id="password" value='' placeholder="Contraseña" name="clave" type="text" class="form-control" />
                    </div>
                    <div class="input-group">
                        <div class="checkbox">
                            <label>
                                <input id="login-remember" type="checkbox" name="remember" value="1"> Recordarme
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default"> Enviar </button>

                    </div>

                </form>
-->