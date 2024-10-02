<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'vta_comprobante_gestion';
$db_nombre_pagina = 'vta_comprobante_gestion';

$pagina_actual = VtaComprobante::getSesPag();
$paginador = new Paginador(15, $pagina_actual);


$criterio_factura = new Criterio(VtaComprobante::SES_CRITERIOS_FACTURA);
$criterio_factura->add(VtaFactura::GEN_ATTR_CLI_CLIENTE_ID, 0, Criterio::IGUAL);
$criterio_factura->add(VtaFactura::GEN_ATTR_FECHA_EMISION, date('Y-m-d'), Criterio::MAYORIGUAL, 'fecha_desde', Criterio::_AND);
$criterio_factura->add(VtaFactura::GEN_ATTR_FECHA_EMISION, date('Y-m-d'), Criterio::MENORIGUAL, 'fecha_hasta', Criterio::_AND);
$criterio_factura->setCriteriosInicial();

$criterio_nota_debito = new Criterio(VtaComprobante::SES_CRITERIOS_NOTA_DEBITO);
$criterio_nota_debito->add(VtaNotaDebito::GEN_ATTR_CLI_CLIENTE_ID, 0, Criterio::IGUAL);
$criterio_nota_debito->add(VtaNotaDebito::GEN_ATTR_FECHA_EMISION, date('Y-m-d'), Criterio::MAYORIGUAL, 'fecha_desde', Criterio::_AND);
$criterio_nota_debito->add(VtaNotaDebito::GEN_ATTR_FECHA_EMISION, date('Y-m-d'), Criterio::MENORIGUAL, 'fecha_hasta', Criterio::_AND);
$criterio_nota_debito->setCriteriosInicial();

$criterio_nota_credito = new Criterio(VtaComprobante::SES_CRITERIOS_NOTA_CREDITO);
$criterio_nota_credito->add(VtaNotaCredito::GEN_ATTR_CLI_CLIENTE_ID, 0, Criterio::IGUAL);
$criterio_nota_credito->add(VtaNotaCredito::GEN_ATTR_FECHA_EMISION, date('Y-m-d'), Criterio::MAYORIGUAL, 'fecha_desde', Criterio::_AND);
$criterio_nota_credito->add(VtaNotaCredito::GEN_ATTR_FECHA_EMISION, date('Y-m-d'), Criterio::MENORIGUAL, 'fecha_hasta', Criterio::_AND);
$criterio_nota_credito->setCriteriosInicial();

$criterio_recibo = new Criterio(VtaComprobante::SES_CRITERIOS_RECIBO);
$criterio_recibo->add(VtaRecibo::GEN_ATTR_CLI_CLIENTE_ID, 0, Criterio::IGUAL);
$criterio_recibo->add(VtaRecibo::GEN_ATTR_FECHA_EMISION, date('Y-m-d'), Criterio::MAYORIGUAL, 'fecha_desde', Criterio::_AND);
$criterio_recibo->add(VtaRecibo::GEN_ATTR_FECHA_EMISION, date('Y-m-d'), Criterio::MENORIGUAL, 'fecha_hasta', Criterio::_AND);
$criterio_recibo->setCriteriosInicial();


?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>


<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('VtaComprobante') ?> </div>
        <div class='contenedor central'>

            <div class="div_listado_buscador" modulo="vta_comprobante_gestion">
                <?php include 'ajax/modulos/vta_comprobante_gestion/vta_comprobante_gestion_buscador_top.php' ?>
            </div>

            <div class="div_listado_datos" modulo="vta_comprobante_gestion">
                <?php //include 'ajax/modulos/vta_comprobante_gestion/vta_comprobante_gestion_datos.php'  ?>
            </div>

            <br />

        </div>

    </div>
    <div id='pie'><?php include 'parciales/pie.php' ?></div>
    <div id="div_contextual"></div>
    <div class="div_modal"></div>

</body>
</html>
<script type='text/javascript'>
<?php Gral::_echo($mi_hash) ?>
    refreshAdmAll('vta_comprobante_gestion', <?php echo $pagina_actual ?>);
</script>

