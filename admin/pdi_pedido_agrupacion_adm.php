<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'pdi_pedido_agrupacion';
$db_nombre_pagina = 'pdi_pedido_agrupacion_adm';


$criterio = new Criterio(PdiPedidoAgrupacion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdiPedidoAgrupacion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(PdiPedidoAgrupacion::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = PdiPedidoAgrupacion::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$pdi_pedido_agrupacions = PdiPedidoAgrupacion::getPdiPedidoAgrupacionsDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PdiPedidoAgrupacions') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="pdi_pedido_agrupacion">
              <?php include 'ajax/modulos/pdi_pedido_agrupacion/pdi_pedido_agrupacion_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="pdi_pedido_agrupacion">
              <?php //include 'ajax/modulos/pdi_pedido_agrupacion/pdi_pedido_agrupacion_datos.php' ?>
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
    refreshAdmAll('pdi_pedido_agrupacion', <?php echo $pagina_actual ?>);
</script>

