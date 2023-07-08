

<!DOCTYPE html>
<html lang="es">    

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- style css -->
        <link rel="stylesheet" href="css/login.css">
        <!-- Template Main CSS File -->
        <link href="css/flex.css" rel="stylesheet">        
    </head> 

                <div class="card">
                    <div class="login-box">
                        <div class="login-snip">
                            <input id="tab-1" type="radio" name="tab" class="sign-in " checked><label for="tab-1" class="tab"><a>Acceso</a></label>
                            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"><a>Registro</a></label>
                            <div class="login-space">
                                <form action="loginRegistro/servidor/login/logear.php" method="POST" autocomplete="off">
                                    <div class="login">
                                        <div class="group">
                                            <input id="usuario" name="usuario" type="text" class="input"  placeholder="Usuario/E-mail" required>
                                        </div>
                                        <div class="group">
                                            <input id="password" name="password" type="password" class="input" data-type="password" placeholder="Contraseña" required>
                                        </div>
                                        
                                        <div class="group">
                                        </span>
                                            <input name="btnacceso" type="submit" class="button" value="Iniciar sesión">                                            
                                        </div>
                                        <?php 
                                            $include="./loginRegistro/servidor/logear.php"; 
                                        ?>
                                </form>

                                    <div class="hr"></div>
                                    <div class="foot">
                                        <a href="#"></a>
                                    </div>
                                </div>

                                <form action="./vista/login/store.php" method="POST" autocomplete="off">
                                    <div class="sign-up-form">
                                        <div class="group">
                                            <label for="ImputNameCompleto" class="form-label">Nombre Completo</label>
                                            <input id="ImputNameCompleto" name="apellidos_nombre" required type="text" class="input" placeholder="Ingresar nombre completo">
                                        </div>
                                        
                                        <div class="group genero" name="genero_usuario">
                                            <label for="InputFemenino" class="label"> <input id="InputFemenino" name="genero_usuario" required type="radio" value="femenino">Femenino</label>  
                                            <label for="InputMasculino" class="label"> <input id="InputMasculino" name="genero_usuario" type="radio" value="masculino">Masculino</label>                                       
                                        </div> 

                                        <div class="group">
                                            <label for="InputEmail1" class="label">Usuraio / E-mail</label>
                                            <input id="usuario" name="usuario" required type="text" class="input" placeholder="Ingresar usuario">
                                        </div> 

                                        <div class="group">
                                            <label for="InputPass" class="label">Contraseña</label>
                                            <input id="password" name="password" required type="password" class="input" data-type="password" placeholder="Crear tu contraseña">
                                        </div>

                                        <div class="group">
                                            <label for="InputPass" class="label">Confirmar contraseña</label>
                                            <input id="password" required type="password" class="input" data-type="password" placeholder="Confirme contraseña" >
                                        </div>

                                        <div class="group">
                                            <label for="InputLocalidad" class="label">Localidad</label>
                                            <input id="InputLocalidad" name="localidad_usuario" required type="text" class="input" placeholder="ingresar localidad">
                                        </div>

                                        <div class="group">                                     
                                            <input id="InputFecha" name="fecha_creausuario" required type="hidden" class="form-control"  value="<?php date_default_timezone_set('America/Bogota'); echo date("j/m/Y  h:i A"); ?>">
                                        </div>

                                        <div class="group">
                                            <input id="InputEstado" name="estado_usuario" required class="form-control" type="hidden" value="Activo">
                                            <input id="rol_usuario" name="rol_usuario" required type="hidden" class="input" value="Invitado">
                                        </div>

                                        <div class="group">
                                            <input type="submit" class="button" value="Registrarse">
                                        </div>  
                                                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      
</html>














