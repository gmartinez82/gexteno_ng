<?php
//include_once 'control/seguridad.php';
include_once '_autoload.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';

$user = UsUsuario::autenticado();

$db_nombre_objeto = 'us_noautorizado';
$db_nombre_pagina = 'us_noautorizado';

// Deslogueo
$logout = Gral::getVars(2, "logout", 0);
if (trim($logout) == "logout") {
    UsLogin::registrarLogout($user, 1); // registra logout
    Login::logout();
    header("Location: login.php");
    exit;
}

$tipo = Gral::getVars(2, 'tipo', 'CREDENCIAL', Gral::TIPO_STRING);
$cod = Gral::getVars(2, 'cod', '', Gral::TIPO_STRING);
$clase = Gral::getVars(2, 'clase', '', Gral::TIPO_STRING);
$id = Gral::getVars(2, 'id', '', Gral::TIPO_STRING);

?>
<?php include 'parciales/head.php' ?>

<style>
    .noautorizado{
        margin: 50px auto 150px auto;
        width:50%;

        padding:30px;
        border:#ccc solid 1px;
        text-align:center;
    }
    .noautorizado .titulo{
        font-size:20px;
        font-weight:bold;
        color:#FF0000;
    }
    .noautorizado .texto{
        font-size:14px;
        color:#000;
        margin:15px;
    }
    .noautorizado .boton{
        display: block;
        background-color: #000080;
        color: #fff;
        padding: 10px;
        margin: 0 auto;
        width: 300px;
        text-align: center;
        font-size:14px;
    }
    .noautorizado .par{
        font-size: 14px;
    }    
    .noautorizado .par .label{
        background-color: #f4f4f4;
        padding: 5px;
    }    
    .noautorizado .par .dato{
        color: #000;
        background-color: #dedede;
        padding: 5px;
    }    
</style>


<body>
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php'; ?>

    <div id='menu'>
        <?php include 'parciales/menuh.php' ?>
    </div>

    <div id='cuerpo'>
        <form id='formu' name='formu' method='post' action=''>
            <div class='adm_cuerpo_titulo'><?php Lang::_lang('Inicio') ?> </div>
            <div class='contenedor central'>

                <div class="noautorizado">
                    <img src="imgs/noautorizado.png" />
                    <div class="titulo"><?php echo Lang::_lang('ACCESO RESTRINGIDO') ?></div>
                    <div class="texto">
                        Está intentando realizar una accion a la que no tiene alcance.<br />
                        Comuniquese con el adminsitrador del sistema.<br /><br />
                        <a class="boton" href="<?php echo $_SERVER['HTTP_REFERER'] ?>">Click aquí para <strong>Regresar a la página anterior</strong></a></div>

                    <?php if(trim($tipo) != ''){ ?>    
                    <div class="par">
                        <div class="label">Tipo</div>
                        <div class="dato"><?php echo $tipo ?></div>
                    </div>
                    <?php } ?>

                    <?php if(trim($clase) != ''){ ?>    
                    <div class="par">
                        <div class="label">Clase</div>
                        <div class="dato"><?php echo $clase ?></div>
                    </div>
                    <?php } ?>

                    <?php if(trim($id) != ''){ ?>    
                    <div class="par">
                        <div class="label">ID</div>
                        <div class="dato"><?php echo $id ?></div>
                    </div>
                    <?php } ?>
                    
                    <?php if(trim($cod) != ''){ ?>    
                    <div class="par">
                        <div class="label">Codigo</div>
                        <div class="dato"><?php echo $cod ?></div>
                    </div>
                    <?php } ?>
                    
                </div>


            </div>

        </form>
    </div>

    <div id='pie'><?php include 'parciales/pie.php' ?></div>

    <div class="div_modal"></div>

</body>
</html>
