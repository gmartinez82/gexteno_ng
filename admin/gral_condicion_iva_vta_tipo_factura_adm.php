<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'gral_condicion_iva_vta_tipo_factura';
$db_nombre_pagina = 'gral_condicion_iva_vta_tipo_factura_adm';


$criterio = new Criterio(GralCondicionIvaVtaTipoFactura::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralCondicionIvaVtaTipoFactura::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(GralCondicionIvaVtaTipoFactura::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = GralCondicionIvaVtaTipoFactura::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$gral_condicion_iva_vta_tipo_facturas = GralCondicionIvaVtaTipoFactura::getGralCondicionIvaVtaTipoFacturasDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('GralCondicionIvaVtaTipoFactura') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="gral_condicion_iva_vta_tipo_factura">
              <?php include 'ajax/modulos/gral_condicion_iva_vta_tipo_factura/gral_condicion_iva_vta_tipo_factura_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="gral_condicion_iva_vta_tipo_factura">
              <?php //include 'ajax/modulos/gral_condicion_iva_vta_tipo_factura/gral_condicion_iva_vta_tipo_factura_datos.php' ?>
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
    refreshAdmAll('gral_condicion_iva_vta_tipo_factura', <?php echo $pagina_actual ?>);
</script>

