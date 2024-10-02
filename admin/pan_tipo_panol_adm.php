<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'pan_tipo_panol';
$db_nombre_pagina = 'pan_tipo_panol_adm';


$criterio = new Criterio(PanTipoPanol::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PanTipoPanol::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(PanTipoPanol::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = PanTipoPanol::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$pan_tipo_panols = PanTipoPanol::getPanTipoPanolsDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PanTipoPanols') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="pan_tipo_panol">
              <?php include 'ajax/modulos/pan_tipo_panol/pan_tipo_panol_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="pan_tipo_panol">
              <?php //include 'ajax/modulos/pan_tipo_panol/pan_tipo_panol_datos.php' ?>
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
    refreshAdmAll('pan_tipo_panol', <?php echo $pagina_actual ?>);
</script>

