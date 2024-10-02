<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'prd_orden_trabajo';
$db_nombre_pagina = 'prd_orden_trabajo_adm';


$criterio = new Criterio(PrdOrdenTrabajo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrdOrdenTrabajo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(PrdOrdenTrabajo::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = PrdOrdenTrabajo::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$prd_orden_trabajos = PrdOrdenTrabajo::getPrdOrdenTrabajosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PrdOrdenTrabajos') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="prd_orden_trabajo">
              <?php include 'ajax/modulos/prd_orden_trabajo/prd_orden_trabajo_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="prd_orden_trabajo">
              <?php //include 'ajax/modulos/prd_orden_trabajo/prd_orden_trabajo_datos.php' ?>
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
    refreshAdmAll('prd_orden_trabajo', <?php echo $pagina_actual ?>);
</script>

