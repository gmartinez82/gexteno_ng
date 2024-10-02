<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'vta_factura_gestion';
$db_nombre_pagina = 'vta_factura_gestion';

$criterio = new Criterio(VtaFactura::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaFactura::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(VtaFactura::GEN_TABLA);
//$criterio->setCriteriosInicial();
$criterio->addOrden(VtaFactura::GEN_ATTR_ID, Criterio::_DESC);
//$criterio->addOrden(VtaFactura::GEN_ATTR_FECHA_EMISION, Criterio::_DESC);
//$criterio->addOrden(VtaFactura::GEN_ATTR_NUMERO_FACTURA_COMPLETO, Criterio::_DESC);
$criterio->setCriterios();


$pagina_actual = VtaFactura::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$vta_facturas = VtaFactura::getVtaFacturasDesdeBackend($paginador, $criterio);

// -----------------------------------------------------------------------------
// se recuperan variables via GET
// -----------------------------------------------------------------------------
$accion = Gral::getVars(Gral::VARS_GET, 'accion', '', Gral::TIPO_STRING);
$cli_cliente_id = Gral::getVars(Gral::VARS_GET, 'cli_cliente_id', 0, Gral::TIPO_INTEGER);
$vta_presupuesto_id = Gral::getVars(Gral::VARS_GET, 'vta_presupuesto_id', 0, Gral::TIPO_INTEGER);

$cli_cliente = CliCliente::getOxId($cli_cliente_id);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>


<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('VtaFactura') ?> </div>
        <div class='contenedor central'>

            <div class="div_listado_buscador" modulo="vta_factura_gestion">
                <?php include 'ajax/modulos/vta_factura_gestion/vta_factura_gestion_buscador_top.php' ?>
            </div>

            <div class="div_listado_datos" modulo="vta_factura_gestion">
                <?php //include 'ajax/modulos/vta_factura_gestion/vta_factura_gestion_datos.php' ?>
            </div>

            <br />

        </div>

    </div>
    <div id='pie'><?php include 'parciales/pie.php' ?></div>
    <div id="div_contextual"></div>
    <div class="div_modal"></div>
    <div class="div_modal_modal"></div>
    <div class="div_modal_ficha"></div>
    <div class="div_modal_cheque_buscador"></div>
    

</body>
</html>
<script type='text/javascript'>
    <?php Gral::_echo($mi_hash) ?>
    refreshAdmAll('vta_factura_gestion', <?php echo $pagina_actual ?>);
    
    <?php if($accion === 'crear'){ ?>
        verModalGenerarFactura('orden-venta', <?php echo $cli_cliente_id ?>, <?php echo $vta_presupuesto_id ?>);        
    <?php } ?>
</script>

