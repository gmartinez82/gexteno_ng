<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'prd_proceso_productivo';
$db_nombre_pagina = 'prd_proceso_productivo_adm';


$criterio = new Criterio(PrdProcesoProductivo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrdProcesoProductivo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(PrdProcesoProductivo::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = PrdProcesoProductivo::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$prd_proceso_productivos = PrdProcesoProductivo::getPrdProcesoProductivosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PrdProcesoProductivos') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="prd_proceso_productivo">
              <?php include 'ajax/modulos/prd_proceso_productivo/prd_proceso_productivo_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="prd_proceso_productivo">
              <?php //include 'ajax/modulos/prd_proceso_productivo/prd_proceso_productivo_datos.php' ?>
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
    refreshAdmAll('prd_proceso_productivo', <?php echo $pagina_actual ?>);
</script>

