<?php
include_once "_autoload.php";

if (Gral::esPost()) {
    $hdn_uid = Gral::getVars(1, 'hdn_uid', 0);
    $hdn_uus = Gral::getVars(1, 'hdn_uus', 0);
    $hdn_uhash = Gral::getVars(1, 'hdn_uhash', 'nohash');

    // control de existencia de usuario
    $us_usuario = UsUsuario::getOxHash($hdn_uhash);
    if (!$us_usuario) {
        header('Location: login.php?err=100');
    } elseif ($us_usuario->getId() != $hdn_uid or $us_usuario->getUsuario() != $hdn_uus) {
        header('Location: login.php?err=101');
    }

    $txt_clave = Gral::getVars(1, 'txt_clave');
    $txt_clave_repetida = Gral::getVars(1, 'txt_clave_repetida');

    $estado = true;
    // controles
    if (Ctrl::esVacio($txt_clave)) {
        $estado = false;
        $mensaje_error = 'Debe ingresar datos';
        $mensaje_css = 'error';
    }
    if (Ctrl::esVacio($txt_clave_repetida)) {
        $estado = false;
        $mensaje_error = 'Debe ingresar datos';
        $mensaje_css = 'error';
    }

    if (UsClave::esClaveValida($txt_clave, $error)) {
        if ($txt_clave == $txt_clave_repetida) {
            $estado = true;
        } else {
            $estado = false;
            $mensaje_error = 'Las Claves no concuerdan';
            $mensaje_css = 'error';
        }
    } else {
        $estado = false;
        $mensaje_error = 'Formato de Clave Invalido';
        $mensaje_css = 'error';
    }


    if ($estado) {
        $mensaje_css = 'no-error';
        $mensaje_error = 'Se actualizo su clave correctamente, por favor presione aqui para volver a loguearse';

        // cambia clave y accede al sistema
        $us_usuario->setNuevaClave($txt_clave);
        UsLogin::registrarLogin($us_usuario, 1);
        Login::autenticar($us_usuario->getId());
        header('Location: index.php');
    }
} else {
    $uid = Gral::getVars(2, 'uid', 0);
    $uus = Gral::getVars(2, 'uus', 0);
    $uhash = Gral::getVars(2, 'uhash', 'nohash');

    // control de existencia de usuario
    $us_usuario = UsUsuario::getOxHash($uhash);
    if (!$us_usuario) {
        header('Location: login.php?err=100');
    } elseif ($us_usuario->getId() != $uid or $us_usuario->getUsuario() != $uus) {
        header('Location: login.php?err=101');
    }

    $hdn_uid = $uid;
    $hdn_uus = $uus;
    $hdn_uhash = $uhash;
}
html:
?>
    <?php include 'parciales/head.php' ?>

    <body class="<?php echo Gral::getConfig('cont_entorno') ?>">
        <form id="formu" name="formu" method="post" action="">  

            <?php if(DbConfig::PATH_LOGO_EMPRESA){ ?>
                <div class="login-logo-empresa">
                    <img src="<?php echo DbConfig::PATH_HTTP ?><?php echo DbConfig::PATH_LOGO_EMPRESA ?>" class="logo-proyecto" alt="logo-proyecto" />
                </div>
            <?php } ?>            
            
            <div class="login">

                <div class="acceso">Recuperacion de Clave</div>

                <div class="titulo"><?php echo Gral::getConfig('gral_cliente') ?></div>
                                
                <div class="col c1">

                    <div class="<?php echo $mensaje_css ?>"><?php echo $mensaje_error ?></div>

                    <div class="label">Clave Nueva</div>
                    <div class="input"><input name="txt_clave" type="password" id="txt_clave" value="" /></div>

                    <div class="label">Repita Clave Nueva</div>
                    <div class="input"><input name="txt_clave_repetida" type="password" id="txt_clave_repetida" value="" /></div>

                    <div class="input"><input name="hdn_uid" type="hidden" id="hdn_uid" value="<?php echo $hdn_uid ?>" /></div>
                    <div class="input"><input name="hdn_uus" type="hidden" id="hdn_uus" value="<?php echo $hdn_uus ?>" /></div>
                    <div class="input"><input name="hdn_uhash" type="hidden" id="hdn_uhash" value="<?php echo $hdn_uhash ?>" /></div>

                    <div class="action">
                        <input name="login" type="submit" id="login" value="Enviar" />
                        <input name="login" type="button" id="login" value="Volver al Login" class="secundario" onclick="location.href = 'login.php'" />  
                    </div>

                </div>


                <div class="col c2">    
                    <div class="mas-links">
                        <div class="mas-links-titulo">Indicaciones</div>

                        <div class="indicaciones">Por razones de seguridad nueva clave debe tener <strong>entre 7 y 15 caracteres</strong>, ademas de minimamente <strong>un numero</strong> y <strong>una letra mayuscula</strong>.</div>

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
