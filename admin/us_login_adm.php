<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'us_login';
$db_nombre_pagina = 'us_login_adm';


$criterio = new Criterio(UsLogin::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
UsLogin::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(UsLogin::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = UsLogin::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$us_logins = UsLogin::getUsLoginsDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('UsLogins') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="us_login">
              <?php include 'ajax/modulos/us_login/us_login_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="us_login">
              <?php //include 'ajax/modulos/us_login/us_login_datos.php' ?>
          </div>

          <br />

        </div>

    </div>
    
    <div id='pie'><?php include 'parciales/pie.php' ?></div>
    <div id="div_contextual"></div>
    
    <div class="div_modal"></div>
    <div class="div_modal_modal"></div>
    <div class="div_modal_modal_modal"></div>

</body>
</html>
<script type='text/javascript'>
    <?php Gral::_echo($mi_hash) ?>
    refreshAdmAll('us_login', <?php echo $pagina_actual ?>);
</script>

