<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'gral_fp_agrupacion';
$db_nombre_pagina = 'gral_fp_agrupacion_adm';


$criterio = new Criterio(GralFpAgrupacion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralFpAgrupacion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(GralFpAgrupacion::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = GralFpAgrupacion::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$gral_fp_agrupacions = GralFpAgrupacion::getGralFpAgrupacionsDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('GralFpAgrupacion') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="gral_fp_agrupacion">
              <?php include 'ajax/modulos/gral_fp_agrupacion/gral_fp_agrupacion_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="gral_fp_agrupacion">
              <?php //include 'ajax/modulos/gral_fp_agrupacion/gral_fp_agrupacion_datos.php' ?>
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
    refreshAdmAll('gral_fp_agrupacion', <?php echo $pagina_actual ?>);
</script>

