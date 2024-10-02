<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'vta_punto_venta_ws_fe_param_punto_venta';
$db_nombre_pagina = 'vta_punto_venta_ws_fe_param_punto_venta_adm';


$criterio = new Criterio(VtaPuntoVentaWsFeParamPuntoVenta::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaPuntoVentaWsFeParamPuntoVenta::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(VtaPuntoVentaWsFeParamPuntoVenta::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = VtaPuntoVentaWsFeParamPuntoVenta::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$vta_punto_venta_ws_fe_param_punto_ventas = VtaPuntoVentaWsFeParamPuntoVenta::getVtaPuntoVentaWsFeParamPuntoVentasDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('VtaPuntoVentaWsFeParamPuntoVenta') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="vta_punto_venta_ws_fe_param_punto_venta">
              <?php include 'ajax/modulos/vta_punto_venta_ws_fe_param_punto_venta/vta_punto_venta_ws_fe_param_punto_venta_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="vta_punto_venta_ws_fe_param_punto_venta">
              <?php //include 'ajax/modulos/vta_punto_venta_ws_fe_param_punto_venta/vta_punto_venta_ws_fe_param_punto_venta_datos.php' ?>
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
    refreshAdmAll('vta_punto_venta_ws_fe_param_punto_venta', <?php echo $pagina_actual ?>);
</script>

