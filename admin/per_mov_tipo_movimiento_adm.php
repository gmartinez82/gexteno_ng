<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'per_mov_tipo_movimiento';
$db_nombre_pagina = 'per_mov_tipo_movimiento_adm';


$criterio = new Criterio(PerMovTipoMovimiento::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PerMovTipoMovimiento::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(PerMovTipoMovimiento::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = PerMovTipoMovimiento::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$per_mov_tipo_movimientos = PerMovTipoMovimiento::getPerMovTipoMovimientosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PerMovTipoMovimientos') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="per_mov_tipo_movimiento">
              <?php include 'ajax/modulos/per_mov_tipo_movimiento/per_mov_tipo_movimiento_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="per_mov_tipo_movimiento">
              <?php //include 'ajax/modulos/per_mov_tipo_movimiento/per_mov_tipo_movimiento_datos.php' ?>
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
    refreshAdmAll('per_mov_tipo_movimiento', <?php echo $pagina_actual ?>);
</script>

