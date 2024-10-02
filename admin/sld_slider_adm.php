<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'sld_slider';
$db_nombre_pagina = 'sld_slider_adm';


$criterio = new Criterio(SldSlider::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
SldSlider::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(SldSlider::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = SldSlider::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$sld_sliders = SldSlider::getSldSlidersDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('SldSliders') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="sld_slider">
              <?php include 'ajax/modulos/sld_slider/sld_slider_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="sld_slider">
              <?php //include 'ajax/modulos/sld_slider/sld_slider_datos.php' ?>
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
    refreshAdmAll('sld_slider', <?php echo $pagina_actual ?>);
</script>

