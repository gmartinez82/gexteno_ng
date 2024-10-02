<?php
include_once "_autoload.php";

$err = Gral::getVars(2, "err");
switch ($err) {
    case 1: $error_msg = "Datos Incorrectos";
        $class = "error";
        break;
    case 2: $error_msg = "Acceso Restringido";
        $class = "error";
        break;

    case 100: $error_msg = "Usuario Inexistente";
        $class = "error";
        break;
    case 101: $error_msg = "Usuario No Concuerda";
        $class = "error";
        break;
}
?>
    <?php include 'parciales/head.php' ?>

    <body class="<?php echo Gral::getConfig('cont_entorno') ?>">
        
        <form id="formu" name="formu" method="post" action="control/control.php">
            
            <?php if(DbConfig::PATH_LOGO_EMPRESA_BLANCO){ ?>
                <div class="login-logo-empresa">
                    <img src="<?php echo DbConfig::PATH_HTTP ?><?php echo DbConfig::PATH_LOGO_EMPRESA ?>" class="logo-proyecto" alt="logo-proyecto" />
                </div>
            <?php } ?>            
            
            <div class="login">
                <div class="acceso">Acceso al Sistema</div>

                <div class="titulo"><?php echo DbConfig::CONFIG_SISTEMA_NOMBRE ?></div>
                                
                <div class="col c1">

                    <div class="<?php echo $class ?>"><?php echo $error_msg ?></div>

                    <div class="label">Usuario</div>
                    <div class="input"><input name="txt_usuario" type="text" id="txt_usuario" /></div>

                    <div class="label">Contrase&ntilde;a</div>
                    <div class="input"><input name="txt_pass" type="password" id="txt_pass" /></div>

                    <div class="action"><input name="login" type="submit" id="login" value="Ingresar" /></div>

                </div>


                <div class="col c2">    
                    <div class="mas-links">
                        <div class="mas-links-titulo">Indicaciones</div>

                        <div class="link"><a href="login_recuperar_clave.php">Recuperar Clave</a></div>

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
