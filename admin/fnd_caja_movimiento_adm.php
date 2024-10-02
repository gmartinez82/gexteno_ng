<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'fnd_caja_movimiento';
$db_nombre_pagina = 'fnd_caja_movimiento_adm';


$criterio = new Criterio(FndCajaMovimiento::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
FndCajaMovimiento::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(FndCajaMovimiento::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = FndCajaMovimiento::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$fnd_caja_movimientos = FndCajaMovimiento::getFndCajaMovimientosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('FndCajaMovimientos') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="fnd_caja_movimiento">
              <?php include 'ajax/modulos/fnd_caja_movimiento/fnd_caja_movimiento_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="fnd_caja_movimiento">
              <?php //include 'ajax/modulos/fnd_caja_movimiento/fnd_caja_movimiento_datos.php' ?>
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
    refreshAdmAll('fnd_caja_movimiento', <?php echo $pagina_actual ?>);
</script>

