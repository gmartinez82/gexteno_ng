<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'app_mov_modulo';
$db_nombre_pagina = 'app_mov_modulo_adm';


$criterio = new Criterio(AppMovModulo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
AppMovModulo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(AppMovModulo::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = AppMovModulo::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$app_mov_modulos = AppMovModulo::getAppMovModulosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('AppMovModulos') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="app_mov_modulo">
              <?php include 'ajax/modulos/app_mov_modulo/app_mov_modulo_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="app_mov_modulo">
              <?php //include 'ajax/modulos/app_mov_modulo/app_mov_modulo_datos.php' ?>
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
    refreshAdmAll('app_mov_modulo', <?php echo $pagina_actual ?>);
</script>

