<?php
include_once '_autoload.php';
$user = UsUsuario::autenticado();

$widget_key = 'vta_orden_venta_estadisticas_sucursal';
$widget_codigo = 'WIDGET_HOME_VTA_ORDEN_VENTA_ESTADISTICAS_SUCURSAL';
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
    $widget_cmb_ins_etiqueta_id = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_ins_etiqueta_id', 0);
    $widget_cmb_gral_actividad_id = Gral::getVars(Gral::VARS_GET, 'widget_'.$widget_key.'_cmb_gral_actividad_id', 0);
    $widget_cmb_gral_escenario_id = Gral::getVars(Gral::VARS_GET, 'widget_'.$widget_key.'_cmb_gral_escenario_id', 0);
    $txt_cantidad = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_txt_cantidad', 10);

    $txt_desde = Gral::getFechaToDb($txt_desde);
    $txt_hasta = Gral::getFechaToDb($txt_hasta);
} else {
    // ---------------------------------------------------------------------
    // se determinan rango de fechas del reporte (por default)
    // ---------------------------------------------------------------------
    $txt_desde = '2021-08-01';
    $txt_hasta = '2021-08-04';
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
    $txt_cantidad = 10;
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
VtaOrdenVenta::setAplicarFiltrosDeAlcance($criterio);

// solo se agregan ordenes de venta que no se encuentren canceladas
$criterio->add(VtaOrdenVentaTipoEstado::GEN_ATTR_CODIGO, VtaOrdenVentaTipoEstado::TIPO_CANCELADO, Criterio::DISTINTO);

if ($txt_desde != '') {
    $criterio->add(VtaOrdenVenta::GEN_ATTR_CREADO, $txt_desde . ' 00:00:00', Criterio::MAYORIGUAL);
}

if ($txt_hasta != '') {
    $criterio->add(VtaOrdenVenta::GEN_ATTR_CREADO, $txt_hasta . ' 23:59:59', Criterio::MENORIGUAL);
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

if ($widget_cmb_ins_etiqueta_id != 0) {
    $criterio->add(InsEtiqueta::GEN_ATTR_ID, $widget_cmb_ins_etiqueta_id, Criterio::IGUAL);
}

$criterio->addTabla(VtaOrdenVenta::GEN_TABLA);
//$criterio->addRealJoin(VtaPresupuestoInsInsumo::GEN_TABLA, VtaPresupuestoInsInsumo::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID, 'LEFT JOIN');
//$criterio->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaPresupuestoInsInsumo::GEN_ATTR_VTA_PRESUPUESTO_ID, 'LEFT JOIN');
//$criterio->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID, 'LEFT JOIN'); // se agrega en la aplicacion del alcance
$criterio->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, 'LEFT JOIN');
$criterio->addRealJoin(InsInsumoInsEtiqueta::GEN_TABLA, InsInsumoInsEtiqueta::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID, 'LEFT JOIN');
$criterio->addRealJoin(InsEtiqueta::GEN_TABLA, InsEtiqueta::GEN_ATTR_ID, InsInsumoInsEtiqueta::GEN_ATTR_INS_ETIQUETA_ID, 'LEFT JOIN');
$criterio->addRealJoin(GralTipoIva::GEN_TABLA, GralTipoIva::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_GRAL_TIPO_IVA_ID, 'LEFT JOIN');
$criterio->addRealJoin(InsTipoListaPrecio::GEN_TABLA, InsTipoListaPrecio::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, 'LEFT JOIN');
$criterio->addRealJoin(VtaOrdenVentaTipoEstado::GEN_TABLA, VtaOrdenVentaTipoEstado::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_ID, 'LEFT JOIN');
$criterio->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_CLI_CLIENTE_ID, 'LEFT JOIN');
$criterio->addRealJoin(GeoLocalidad::GEN_TABLA, GeoLocalidad::GEN_ATTR_ID, CliCliente::GEN_ATTR_GEO_LOCALIDAD_ID, 'LEFT JOIN');
$criterio->addRealJoin(GeoZona::GEN_TABLA, GeoZona::GEN_ATTR_ID, CliCliente::GEN_ATTR_GEO_ZONA_ID, 'LEFT JOIN');
$criterio->addRealJoin(GralActividad::GEN_TABLA, GralActividad::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_GRAL_ACTIVIDAD_ID, 'LEFT JOIN');
$criterio->addRealJoin(GralEscenario::GEN_TABLA, GralEscenario::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_GRAL_ESCENARIO_ID, 'LEFT JOIN');
//$criterio->addRealJoin(GralSucursal::GEN_TABLA, GralSucursal::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_GRAL_SUCURSAL_ID, 'LEFT JOIN'); // se agrega en la aplicacion del alcance
$criterio->addRealJoin(InsCategoria::GEN_TABLA, InsCategoria::GEN_ATTR_ID, InsInsumo::GEN_ATTR_INS_CATEGORIA_ID, 'LEFT JOIN');
$criterio->addRealJoin(VtaVendedor::GEN_TABLA, VtaVendedor::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_VTA_VENDEDOR_ID, 'LEFT JOIN');
$criterio->addRealJoin(CliCategoria::GEN_TABLA, CliCategoria::GEN_ATTR_ID, CliCliente::GEN_ATTR_CLI_CATEGORIA_ID, 'LEFT JOIN');
$criterio->addRealJoin(CliClienteCliRubro::GEN_TABLA, CliClienteCliRubro::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
$criterio->addRealJoin(CliRubro::GEN_TABLA, CliRubro::GEN_ATTR_ID, CliClienteCliRubro::GEN_ATTR_CLI_RUBRO_ID, 'LEFT JOIN');
$criterio->addOrden(VtaOrdenVenta::GEN_ATTR_CREADO, Criterio::_ASC);
$criterio->setCriterios();

$vta_orden_ventas = VtaOrdenVenta::getVtaOrdenVentas(null, $criterio);
//Gral::prr($vta_orden_ventas);
//exit;

// ----------------------------------------------------------------------------
// Creacion de Arrays (Desde Consulta VtaOrdenVenta)
// ----------------------------------------------------------------------------
// creo array de fechas
$arr_fechas = Date::getArrayFechasXRango($txt_desde, $txt_hasta);

// creo array de resumen tipo listas
$ins_tipo_lista_precios = InsTipoListaPrecio::getInsTipoListaPrecios(null, null, true);
foreach ($ins_tipo_lista_precios as $ins_tipo_lista_precio) {
    $arr_resumen_tipo_listas[$ins_tipo_lista_precio->getCodigo()]['descripcion'] = $ins_tipo_lista_precio->getDescripcion();
}

$arr_resumen_fechas = array();

foreach ($vta_orden_ventas as $vta_orden_venta) {
    $fecha = substr($vta_orden_venta->getCreado(), 0, 10);
    $vta_presupuesto = $vta_orden_venta->getVtaPresupuesto();
    $ins_tipo_lista_precio = $vta_presupuesto->getInsTipoListaPrecio();
    $importe_total_con_iva = $vta_orden_venta->getImporteTotal();

    // creo array de resumen fechas
    $arr_resumen_fechas['POR_FECHA'][$fecha][$ins_tipo_lista_precio->getCodigo()]['importe_total'] += $importe_total_con_iva;
    $arr_resumen_fechas['POR_FECHA'][$fecha]['TOTAL_POR_FECHA']['importe_total'] += $importe_total_con_iva;
    $arr_resumen_fechas['POR_LISTA_PRECIO'][$ins_tipo_lista_precio->getCodigo()][$fecha]['importe_total'] += $importe_total_con_iva;
    $arr_resumen_fechas['POR_LISTA_PRECIO'][$ins_tipo_lista_precio->getCodigo()]['TOTAL_POR_TIPO_LISTA']['importe_total'] += $importe_total_con_iva;

    // creo array de resumen ranking productos
    $ins_insumo = $vta_orden_venta->getInsInsumo();
    if($ins_insumo->getId() != 'null'){
        $arr_resumen_ranking_productos[$ins_insumo->getId()]['descripcion'] = $ins_insumo->getDescripcion();
        $arr_resumen_ranking_productos[$ins_insumo->getId()]['ventas'] ++;
        $arr_resumen_ranking_productos[$ins_insumo->getId()]['unidades'] += $vta_orden_venta->getCantidad();
        $arr_resumen_ranking_productos[$ins_insumo->getId()]['importe_total'] += $importe_total_con_iva;
    }
    
    // creo array de resumen ranking clientes
    $cli_cliente = $vta_presupuesto->getCliCliente();
    if ($cli_cliente->getId() == 'null') {
        $arr_resumen_ranking_clientes[$cli_cliente->getId()]['descripcion'] = VtaPresupuesto::TEXTO_CONSUMIDOR_FINAL;
    } else {
        $arr_resumen_ranking_clientes[$cli_cliente->getId()]['descripcion'] = $cli_cliente->getDescripcion();
    }
    $arr_resumen_ranking_clientes[$cli_cliente->getId()]['ventas'] ++;
    $arr_resumen_ranking_clientes[$cli_cliente->getId()]['unidades'] = '';
    $arr_resumen_ranking_clientes[$cli_cliente->getId()]['importe_total'] += $importe_total_con_iva;
}

//Gral::prr($arr_fechas);
//Gral::prr($arr_resumen_tipo_listas);
//Gral::prr($arr_resumen_fechas);
//Gral::prr($arr_resumen_ranking_productos);
//Gral::prr($arr_resumen_ranking_clientes);
//exit;

// ----------------------------------------------------------------------------
// Ordenamiento y Longitud de Arrays (Desde Consulta VtaOrdenVenta)
// ----------------------------------------------------------------------------

$arr_resumen_ranking_productos_por_importe = $arr_resumen_ranking_productos;
$arr_resumen_ranking_productos_por_ventas = $arr_resumen_ranking_productos;
$arr_resumen_ranking_productos_por_unidades = $arr_resumen_ranking_productos;

$arr_resumen_ranking_clientes_por_importe = $arr_resumen_ranking_clientes;
$arr_resumen_ranking_clientes_por_ventas = $arr_resumen_ranking_clientes;

// -----------------------------------------------------------------------------
// se genera array ranking de productos ordenado por importe
// -----------------------------------------------------------------------------
$arr_resumen_ranking_productos_por_importe = Gral::getOrdenarArrayUsort($arr_resumen_ranking_productos_por_importe, $orden = 'importe_total', GralSiNo::GRAL_SINO_ORDENAMIENTO_MODO_DESCENDENTE);
$arr_resumen_ranking_productos_por_importe = array_slice($arr_resumen_ranking_productos_por_importe, 0, $txt_cantidad);

// -----------------------------------------------------------------------------
// se genera array ranking de productos ordenado por ventas
// -----------------------------------------------------------------------------
$arr_resumen_ranking_productos_por_ventas = Gral::getOrdenarArrayUsort($arr_resumen_ranking_productos_por_ventas, $orden = 'ventas', GralSiNo::GRAL_SINO_ORDENAMIENTO_MODO_DESCENDENTE);
$arr_resumen_ranking_productos_por_ventas = array_slice($arr_resumen_ranking_productos_por_ventas, 0, $txt_cantidad);

// -----------------------------------------------------------------------------
// se genera array ranking de productos ordenado por cantidad
// -----------------------------------------------------------------------------
$arr_resumen_ranking_productos_por_unidades = Gral::getOrdenarArrayUsort($arr_resumen_ranking_productos_por_unidades, $orden = 'unidades', GralSiNo::GRAL_SINO_ORDENAMIENTO_MODO_DESCENDENTE);
$arr_resumen_ranking_productos_por_unidades = array_slice($arr_resumen_ranking_productos_por_unidades, 0, $txt_cantidad);

// -----------------------------------------------------------------------------
// se genera array ranking de clientes ordenado por importe
// -----------------------------------------------------------------------------
$arr_resumen_ranking_clientes_por_importe = Gral::getOrdenarArrayUsort($arr_resumen_ranking_clientes_por_importe, $orden = 'importe_total', GralSiNo::GRAL_SINO_ORDENAMIENTO_MODO_DESCENDENTE);
$arr_resumen_ranking_clientes_por_importe = array_slice($arr_resumen_ranking_clientes_por_importe, 0, $txt_cantidad);

// -----------------------------------------------------------------------------
// se genera array ranking de clientes ordenado por ventas
// -----------------------------------------------------------------------------
$arr_resumen_ranking_clientes_por_ventas = Gral::getOrdenarArrayUsort($arr_resumen_ranking_clientes_por_ventas, $orden = 'ventas', GralSiNo::GRAL_SINO_ORDENAMIENTO_MODO_DESCENDENTE);
$arr_resumen_ranking_clientes_por_ventas = array_slice($arr_resumen_ranking_clientes_por_ventas, 0, $txt_cantidad);

//Gral::prr($arr_resumen_ranking_productos_por_importe);
//Gral::prr($arr_resumen_ranking_productos_por_ventas);
//Gral::prr($arr_resumen_ranking_productos_por_unidades);
//Gral::prr($arr_resumen_ranking_clientes_por_importe);
//Gral::prr($arr_resumen_ranking_clientes_por_ventas);
//exit;

?>

<div class="buscador">
    <?php include "parts/buscador.php"; ?>
</div>

<div class="subtitulo">
    <strong>Ventas realizadas entre el <?php echo Gral::getFechaToWEB($txt_desde) ?> y <?php echo Gral::getFechaToWEB($txt_hasta) ?>.</strong>
    Se consideran OV que hayan sido aprobadas, no necesariamente facturadas.
</div>

<div class="datos">

    <div class="loading"></div>

    <?php if (count($vta_orden_ventas) > 0) { ?>
    
        <div class="bloque centrado">
            <?php include "bloque_resumen_ventas_por_fecha.php" ?>
        </div>

        <div class="bloque centrado">
            <?php include "bloque_ranking_productos_por_ventas.php" ?>
            <?php include "bloque_ranking_productos_por_unidades.php" ?>
            <?php include "bloque_ranking_productos_por_importe.php" ?>
        </div>

        <div class="bloque centrado">
            <?php include "bloque_ranking_clientes_por_ventas.php" ?>
            <?php include "bloque_ranking_clientes_por_importe.php" ?>
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