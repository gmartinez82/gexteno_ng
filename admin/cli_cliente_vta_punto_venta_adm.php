<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'cli_cliente_vta_punto_venta';
$db_nombre_pagina = 'cli_cliente_vta_punto_venta_adm';


$criterio = new Criterio(CliClienteVtaPuntoVenta::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CliClienteVtaPuntoVenta::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(CliClienteVtaPuntoVenta::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = CliClienteVtaPuntoVenta::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$cli_cliente_vta_punto_ventas = CliClienteVtaPuntoVenta::getCliClienteVtaPuntoVentasDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('CliClienteVtaPuntoVentas') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="cli_cliente_vta_punto_venta">
              <?php include 'ajax/modulos/cli_cliente_vta_punto_venta/cli_cliente_vta_punto_venta_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="cli_cliente_vta_punto_venta">
              <?php //include 'ajax/modulos/cli_cliente_vta_punto_venta/cli_cliente_vta_punto_venta_datos.php' ?>
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
    refreshAdmAll('cli_cliente_vta_punto_venta', <?php echo $pagina_actual ?>);
</script>

