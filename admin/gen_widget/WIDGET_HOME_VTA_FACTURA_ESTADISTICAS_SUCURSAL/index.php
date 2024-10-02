<?php
include_once '_autoload.php';
include_once '../../control/seguridad_modulo.php';
include_once '../../control/init.php';

$user = UsUsuario::autenticado();

$widget_key = 'vta_factura_estadisticas_sucursal';
$widget_codigo = 'WIDGET_HOME_VTA_FACTURA_ESTADISTICAS_SUCURSAL';
$widget_key_camelizado = Gral::setDbCamelizar($widget_key, '_');

$filtrar = Gral::getVars(Gral::VARS_GET, 'filtrar', 0);
if ($filtrar) {
    $txt_desde = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_txt_desde', '');
    $txt_hasta = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_txt_hasta', '');

    $widget_cmb_gral_sucursal_id = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_gral_sucursal_id', 0);
    $widget_cmb_vta_vendedor_id = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_vta_vendedor_id', 0);
    $widget_cmb_cli_cliente_id = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_cli_cliente_id', 0);
    $widget_cmb_cli_categoria_id = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_cli_categoria_id', 0);
    $widget_cmb_cli_rubro_id = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_cli_rubro_id', 0);
    $widget_cmb_gral_actividad_id = Gral::getVars(Gral::VARS_GET, 'widget_'.$widget_key.'_cmb_gral_actividad_id', 0);
    $widget_cmb_gral_escenario_id = Gral::getVars(Gral::VARS_GET, 'widget_'.$widget_key.'_cmb_gral_escenario_id', 0);
    
    $txt_desde = Gral::getFechaToDb($txt_desde);
    $txt_hasta = Gral::getFechaToDb($txt_hasta);
} else {
    // ---------------------------------------------------------------------
    // se determinan rango de fechas del reporte (por default)
    // ---------------------------------------------------------------------
    $txt_desde = '2021-08-01';
    $txt_hasta = '2021-08-06';
    $txt_desde = date('Y-m-01'); // desde el primer dia del mes
    $txt_hasta = Date::sumarDias(date('Y-m-d'), 0);
    
    // si el dia del mes es menor a 3 se envia reporte del mes anterior
    if ((int) date('d') < 4) {
        $txt_desde = Date::getPrimeraFechaMesAnterior();
        $txt_hasta = Date::getUltimaFechaMesAnterior();
    }
    $txt_desde = Date::sumarDias(date('Y-m-d'), -7);
    $txt_hasta = date('Y-m-d');
    // --------------------------------------------------------------------- 
    $widget_cmb_gral_sucursal_id = 0;
    $widget_cmb_vta_vendedor_id = 0;
    
}

// ----------------------------------------------------------------------------
// se instancia la sucursal seleccionada
// ----------------------------------------------------------------------------
$gral_sucursal_elegida = GralSucursal::getOxId($widget_cmb_gral_sucursal_id);

// ----------------------------------------------------------------------------
// Consulta VtaOrdenVenta
// ----------------------------------------------------------------------------
$criterio = new Criterio();
$criterio->addDistinct(true);
VtaFactura::setAplicarFiltrosDeAlcance($criterio);
//$criterio->add(GralSucursal::GEN_ATTR_ID, $gral_sucursals_autorizadas_ids, Criterio::IN_ARRAY);

// solo se agregan ordenes de venta que no se encuentren canceladas
//$criterio->add(VtaOrdenVentaTipoEstado::GEN_ATTR_CODIGO, VtaOrdenVentaTipoEstado::TIPO_CANCELADO, Criterio::DISTINTO);

if ($txt_desde != '') {
    $criterio->add(VtaFactura::GEN_ATTR_FECHA_EMISION, $txt_desde , Criterio::MAYORIGUAL);
}

if ($txt_hasta != '') {
    $criterio->add(VtaFactura::GEN_ATTR_FECHA_EMISION, $txt_hasta , Criterio::MENORIGUAL);
}
if ($widget_cmb_gral_sucursal_id != 0) {
    $criterio->add(GralSucursal::GEN_ATTR_ID, $widget_cmb_gral_sucursal_id, Criterio::IGUAL);
}

if ($widget_cmb_vta_vendedor_id != 0) {
    $criterio->add(VtaVendedor::GEN_ATTR_ID, $widget_cmb_vta_vendedor_id, Criterio::IGUAL);
}

if ($widget_cmb_cli_cliente_id != 0) {
    $criterio->add(CliCliente::GEN_ATTR_ID, $widget_cmb_cli_cliente_id, Criterio::IGUAL);
}

if ($widget_cmb_cli_categoria_id != 0) {
    $criterio->add(CliCategoria::GEN_ATTR_ID, $widget_cmb_cli_categoria_id, Criterio::IGUAL);
}

if ($widget_cmb_cli_rubro_id != 0) {
    $criterio->add(CliRubro::GEN_ATTR_ID, $widget_cmb_cli_rubro_id, Criterio::IGUAL);
}

if ($widget_cmb_gral_actividad_id != 0) {
    $criterio->add(GralActividad::GEN_ATTR_ID, $widget_cmb_gral_actividad_id, Criterio::IGUAL);
}

if ($widget_cmb_gral_escenario_id != 0) {
    $criterio->add(GralEscenario::GEN_ATTR_ID, $widget_cmb_gral_escenario_id, Criterio::IGUAL);
}

$criterio->addTabla(VtaFactura::GEN_TABLA);
//$criterio->addRealJoin(GralSucursal::GEN_TABLA, GralSucursal::GEN_ATTR_ID, VtaFactura::GEN_ATTR_GRAL_SUCURSAL_ID, 'LEFT JOIN'); // se agrega en la aplicacion del alcance
$criterio->addRealJoin(VtaVendedor::GEN_TABLA, VtaVendedor::GEN_ATTR_ID, VtaFactura::GEN_ATTR_VTA_VENDEDOR_ID, 'LEFT JOIN');
$criterio->addRealJoin(GralActividad::GEN_TABLA, GralActividad::GEN_ATTR_ID, VtaFactura::GEN_ATTR_GRAL_ACTIVIDAD_ID, 'LEFT JOIN');
$criterio->addRealJoin(GralEscenario::GEN_TABLA, GralEscenario::GEN_ATTR_ID, VtaFactura::GEN_ATTR_GRAL_ESCENARIO_ID, 'LEFT JOIN');
$criterio->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaFactura::GEN_ATTR_CLI_CLIENTE_ID, 'LEFT JOIN');
$criterio->addRealJoin(CliCategoria::GEN_TABLA, CliCategoria::GEN_ATTR_ID, CliCliente::GEN_ATTR_CLI_CATEGORIA_ID, 'LEFT JOIN');
$criterio->addRealJoin(CliClienteCliRubro::GEN_TABLA, CliClienteCliRubro::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
$criterio->addRealJoin(CliRubro::GEN_TABLA, CliRubro::GEN_ATTR_ID, CliClienteCliRubro::GEN_ATTR_CLI_RUBRO_ID, 'LEFT JOIN');
$criterio->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaFactura::GEN_ATTR_VTA_PRESUPUESTO_ID, 'LEFT JOIN');
$criterio->addRealJoin(InsTipoListaPrecio::GEN_TABLA, InsTipoListaPrecio::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, 'LEFT JOIN');
$criterio->addOrden(VtaFactura::GEN_ATTR_ID, Criterio::_ASC);
$criterio->setCriterios();

$vta_facturas = VtaFactura::getVtaFacturas(null, $criterio);
//Gral::prr($vta_facturas);
//exit;

// ----------------------------------------------------------------------------
// Creacion de Arrays (Desde Consulta VtaFactura)
// ----------------------------------------------------------------------------
// creo array de fechas
$arr_fechas = Date::getArrayFechasXRango($txt_desde, $txt_hasta);

// creo array de resumen tipo listas
$ins_tipo_lista_precios = InsTipoListaPrecio::getInsTipoListaPrecios(null, null, true);
foreach ($ins_tipo_lista_precios as $ins_tipo_lista_precio) {
    $arr_resumen_tipo_listas[$ins_tipo_lista_precio->getCodigo()]['descripcion'] = $ins_tipo_lista_precio->getDescripcion();
}

$arr_resumen_fechas = array();

foreach ($vta_facturas as $vta_factura) {
    
    $fecha = substr($vta_factura->getFechaEmision(), 0, 10);
    $vta_presupuesto = $vta_factura->getVtaPresupuesto();
    $ins_tipo_lista_precio = $vta_presupuesto->getInsTipoListaPrecio();
    
    // -------------------------------------------------------------------------
    // se instancia la tabla de resumen
    // -------------------------------------------------------------------------
    $vta_factura_importe = $vta_factura->getResumenComprobante();
    $importe_total_con_iva = $vta_factura_importe->getImporteTotal();
    
    // -------------------------------------------------------------------------
    // se consultan las NC vinculadas a la FAC
    // -------------------------------------------------------------------------
    $importe_afectado_nc = 0;
    $vta_factura_vta_nota_creditos = $vta_factura->getVtaFacturaVtaNotaCreditos(null, null, true);
    foreach($vta_factura_vta_nota_creditos as $vta_factura_vta_nota_credito){
        $importe_afectado_nc += $vta_factura_vta_nota_credito->getImporteAfectado();
    }
    
    $importe_total_con_iva_neto = $importe_total_con_iva - $importe_afectado_nc;
    
    // -------------------------------------------------------------------------
    // se consultan las RBO vinculadas a la FAC
    // -------------------------------------------------------------------------
    $importe_afectado_rbo = 0;
    $vta_factura_vta_recibos = $vta_factura->getVtaFacturaVtaRecibos(null, null, true);
    foreach($vta_factura_vta_recibos as $vta_factura_vta_recibo){
        $importe_afectado_rbo += $vta_factura_vta_recibo->getImporteAfectado();
    }
    
    // creo array de resumen fechas
    $arr_resumen_fechas['POR_FECHA'][$fecha][$ins_tipo_lista_precio->getCodigo()]['importe_total'] += $importe_total_con_iva;
    $arr_resumen_fechas['POR_FECHA'][$fecha][$ins_tipo_lista_precio->getCodigo()]['importe_total_neto'] += $importe_total_con_iva_neto;
    $arr_resumen_fechas['POR_FECHA'][$fecha][$ins_tipo_lista_precio->getCodigo()]['importe_total_anulado'] += $importe_afectado_nc;
    $arr_resumen_fechas['POR_FECHA'][$fecha][$ins_tipo_lista_precio->getCodigo()]['importe_total_anulado_porcentaje'] = number_format(($arr_resumen_fechas['POR_FECHA'][$fecha][$ins_tipo_lista_precio->getCodigo()]['importe_total_anulado'] / $arr_resumen_fechas['POR_FECHA'][$fecha][$ins_tipo_lista_precio->getCodigo()]['importe_total']) * 100, 2);
    $arr_resumen_fechas['POR_FECHA'][$fecha][$ins_tipo_lista_precio->getCodigo()]['importe_total_cobrado'] += $importe_afectado_rbo;
    $arr_resumen_fechas['POR_FECHA'][$fecha][$ins_tipo_lista_precio->getCodigo()]['importe_total_cobrado_porcentaje'] = number_format(($arr_resumen_fechas['POR_FECHA'][$fecha][$ins_tipo_lista_precio->getCodigo()]['importe_total_cobrado'] / $arr_resumen_fechas['POR_FECHA'][$fecha][$ins_tipo_lista_precio->getCodigo()]['importe_total_neto']) * 100, 2);
    $arr_resumen_fechas['POR_FECHA'][$fecha]['TOTAL_POR_FECHA']['importe_total'] += $importe_total_con_iva;
    $arr_resumen_fechas['POR_FECHA'][$fecha]['TOTAL_POR_FECHA']['importe_total_neto'] += $importe_total_con_iva_neto;
    $arr_resumen_fechas['POR_FECHA'][$fecha]['TOTAL_POR_FECHA']['importe_total_anulado'] += $importe_afectado_nc;
    $arr_resumen_fechas['POR_FECHA'][$fecha]['TOTAL_POR_FECHA']['importe_total_anulado_porcentaje'] = number_format(($arr_resumen_fechas['POR_FECHA'][$fecha]['TOTAL_POR_FECHA']['importe_total_anulado'] / $arr_resumen_fechas['POR_FECHA'][$fecha]['TOTAL_POR_FECHA']['importe_total']) * 100, 2);
    $arr_resumen_fechas['POR_FECHA'][$fecha]['TOTAL_POR_FECHA']['importe_total_cobrado'] += $importe_afectado_rbo;
    $arr_resumen_fechas['POR_FECHA'][$fecha]['TOTAL_POR_FECHA']['importe_total_cobrado_porcentaje'] = number_format(($arr_resumen_fechas['POR_FECHA'][$fecha]['TOTAL_POR_FECHA']['importe_total_cobrado'] / $arr_resumen_fechas['POR_FECHA'][$fecha]['TOTAL_POR_FECHA']['importe_total_neto']) * 100, 2);
    $arr_resumen_fechas['POR_LISTA_PRECIO'][$ins_tipo_lista_precio->getCodigo()][$fecha]['importe_total'] += $importe_total_con_iva;
    $arr_resumen_fechas['POR_LISTA_PRECIO'][$ins_tipo_lista_precio->getCodigo()]['TOTAL_POR_TIPO_LISTA']['importe_total'] += $importe_total_con_iva;
    $arr_resumen_fechas['POR_LISTA_PRECIO'][$ins_tipo_lista_precio->getCodigo()]['TOTAL_POR_TIPO_LISTA']['importe_total_neto'] += $importe_total_con_iva_neto;
    $arr_resumen_fechas['POR_LISTA_PRECIO'][$ins_tipo_lista_precio->getCodigo()]['TOTAL_POR_TIPO_LISTA']['importe_total_anulado'] += $importe_afectado_nc;
    $arr_resumen_fechas['POR_LISTA_PRECIO'][$ins_tipo_lista_precio->getCodigo()]['TOTAL_POR_TIPO_LISTA']['importe_total_anulado_porcentaje'] = number_format(($arr_resumen_fechas['POR_LISTA_PRECIO'][$ins_tipo_lista_precio->getCodigo()]['TOTAL_POR_TIPO_LISTA']['importe_total_anulado'] / $arr_resumen_fechas['POR_LISTA_PRECIO'][$ins_tipo_lista_precio->getCodigo()]['TOTAL_POR_TIPO_LISTA']['importe_total']) * 100, 2);
    $arr_resumen_fechas['POR_LISTA_PRECIO'][$ins_tipo_lista_precio->getCodigo()]['TOTAL_POR_TIPO_LISTA']['importe_total_cobrado'] += $importe_afectado_rbo;
    $arr_resumen_fechas['POR_LISTA_PRECIO'][$ins_tipo_lista_precio->getCodigo()]['TOTAL_POR_TIPO_LISTA']['importe_total_cobrado_porcentaje'] = number_format(($arr_resumen_fechas['POR_LISTA_PRECIO'][$ins_tipo_lista_precio->getCodigo()]['TOTAL_POR_TIPO_LISTA']['importe_total_cobrado'] / $arr_resumen_fechas['POR_LISTA_PRECIO'][$ins_tipo_lista_precio->getCodigo()]['TOTAL_POR_TIPO_LISTA']['importe_total_neto']) * 100, 2);
    $arr_resumen_fechas['TOTAL']['importe_total'] += $importe_total_con_iva;
    $arr_resumen_fechas['TOTAL']['importe_total_neto'] += $importe_total_con_iva_neto;
    $arr_resumen_fechas['TOTAL']['importe_total_anulado'] += $importe_afectado_nc;
    $arr_resumen_fechas['TOTAL']['importe_total_anulado_porcentaje'] = number_format(($arr_resumen_fechas['TOTAL']['importe_total_anulado'] / $arr_resumen_fechas['TOTAL']['importe_total']) * 100, 2);
    $arr_resumen_fechas['TOTAL']['importe_total_cobrado'] += $importe_afectado_rbo;
    $arr_resumen_fechas['TOTAL']['importe_total_cobrado_porcentaje'] = number_format(($arr_resumen_fechas['TOTAL']['importe_total_cobrado'] / $arr_resumen_fechas['TOTAL']['importe_total_neto']) * 100, 2);
}

//Gral::prr($arr_fechas);
//Gral::prr($arr_resumen_tipo_listas);
//Gral::prr($arr_resumen_fechas);
//exit;

?>

<div class="buscador">
    <?php include "parts/buscador.php"; ?>
</div>

<div class="subtitulo">
    <strong>Facturas de Venta emitidas entre el <?php echo Gral::getFechaToWEB($txt_desde) ?> y <?php echo Gral::getFechaToWEB($txt_hasta) ?>.</strong>
</div>

<div class="datos">

    <div class="loading"></div>

    <?php if (count($vta_facturas) > 0) { ?>
    
        <div class="bloque">
            <?php include "bloque_resumen_ventas_por_fecha.php" ?>
        </div>

        <br />
        <br />
        <br />
    <?php } else { ?>
        <div style="font-size: 14px; font-weight: normal; color: #666666; text-align: left; padding: 20px 40px; background-color: #f4f4f4;">
            No hay datos registrados.
        </div>
    <?php } ?>

</div>


</div>
<script>

    $(function ($)
    {
        setInitWidget<?php echo $widget_key_camelizado ?>();
    });

    function setInitWidget<?php echo $widget_key_camelizado ?>()
    {
        setClick<?php echo $widget_key_camelizado ?>BtnBuscar();
    }

    function setClick<?php echo $widget_key_camelizado ?>BtnBuscar()
    {
        $("#widget_<?php echo $widget_key ?>_btn_buscar").unbind();
        $("#widget_<?php echo $widget_key ?>_btn_buscar").click(function ()
        {
            var elem = $(this);
            var form = $(this).parents('form');
            $.ajax(
                    {
                        type: 'GET',
                        url: "gen_widget/<?php echo $widget_codigo ?>/index.php",
                        data: form.serialize() + "&filtrar=1",
                        dataType: "html",
                        beforeSend: function (objeto) {
                            elem.parents('.cuerpo_widget .contenedor').find('.loading').html(img_loading);
                            elem.parents('.cuerpo_widget .contenedor').find('.canvas').hide();
                        },
                        success: function (data) {
                            elem.parents('.cuerpo_widget .contenedor').html(data);
                        },
                        error: function (objeto, quepaso, otroobj) {
                            //alert("errorx "+ objeto.status);
                        }
                    });
        });
    }
</script>