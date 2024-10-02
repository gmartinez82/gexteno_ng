<?php
include_once "_autoload.php";

if (Gral::esPost()) {
    $no_existe = false;

    $txt_usuario = Gral::getVars(1, 'txt_usuario', 'NOUSUARIO', Gral::TIPO_USUARIO);

    if (trim($txt_usuario) == '') {
        // caja vacia
        $mensaje_error = 'Debe ingresar datos';
        $mensaje_css = 'error';

        goto html;
    }

    $us_usuario = UsUsuario::getOxUsuario($txt_usuario);
    if (!$us_usuario) {
        $us_usuario = UsUsuario::getOxEmail($txt_usuario);
    }

    if (!$us_usuario) {
        $no_existe = true;
        $mensaje_error = 'El usuario no existe en la base de datos';
        $mensaje_css = 'error';
    } else {
        if (!Ctrl::esEmail($us_usuario->getEmail())) {
            // email erroneo
            $mensaje_error = 'Email del Usuario Erroneo: ' . $us_usuario->getEmail();
            $mensaje_css = 'error';
        } else {
            // enviar email
            $envio = $us_usuario->enviarEmailRecuperarClave();
            if ($envio) {
                $mensaje_error = 'Usuario Existente: Se envio un email a su casilla de correos: ' . $us_usuario->getEmail();
                $mensaje_css = 'no-error';
            } else {
                // error al enviar mail	
                $mensaje_error = 'PHPMailer Error al enviar email a casilla ' . $us_usuario->getEmail();
                $mensaje_css = 'error';
            }
        }
    }
}
html:
?>
    <?php include 'parciales/head.php' ?>

    <body class="<?php echo Gral::getConfig('cont_entorno') ?>">
        <form id="formu" name="formu" method="post" action="">  

            <?php if(DbConfig::PATH_LOGO_EMPRESA_BLANCO){ ?>
                <div class="login-logo-empresa">
                    <img src="<?php echo DbConfig::PATH_HTTP ?><?php echo DbConfig::PATH_LOGO_EMPRESA_BLANCO ?>" class="logo-proyecto" alt="logo-proyecto" />
                </div>
            <?php } ?>            
            
            <div class="login">

                <div class="acceso">Recuperacion de Clave</div>

                <div class="titulo"><?php echo Gral::getConfig('gral_cliente') ?></div>
                                
                <div class="col c1">

                    <div class="<?php echo $mensaje_css ?>"><?php echo $mensaje_error ?></div>

                    <div class="label">Usuario o Email</div>
                    <div class="input"><input name="txt_usuario" type="text" id="txt_usuario" value="<?php echo $txt_usuario ?>" /></div>

                    <div class="action">
                        <input name="login" type="submit" id="login" value="Enviar" />
                        <input name="login" type="button" id="login" value="Volver al Login" class="secundario" onclick="location.href = 'login.php'" />  
                    </div>

                </div>

                <div class="col c2">    
                    <div class="mas-links">
                        <div class="mas-links-titulo">Indicaciones</div>

                        <div class="indicaciones">Ingrese su <strong>usuario</strong> o <strong>email</strong> en la caja de texto.</div>

                        <div class="indicaciones">El sistema detectara su usuario, si existe en el sistema y le enviara un email a su cuenta de correo con los datos para regenerar su clave de acceso.</div>

                    </div>

                    <div class="poweredby">
                        <div class="labell">Desarrollado por</div>
                        <div class="dato"><a href="http://www.dbinario.com" target="_blank">dbinario.com</a></div>
                    </div>

                </div>

            </div>

            <div id="pie">&nbsp;</div>
        </form>
    </body>
</html>
