<?php

set_time_limit(0);
ini_set('memory_limit', '-1');

include_once '_autoload.php';
$user = UsUsuario::autenticado();

$widget_key = 'vta_orden_venta_estadisticas_vendedor';
$widget_codigo = 'WIDGET_HOME_VTA_ORDEN_VENTA_ESTADISTICAS_VENDEDOR';
$widget_key_camelizado = Gral::setDbCamelizar($widget_key, '_');

$filtrar = Gral::getVars(Gral::VARS_GET, 'filtrar', 0);
if ($filtrar) {
    $txt_desde = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_txt_desde', '');
    $txt_hasta = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_txt_hasta', '');

    $widget_cmb_vta_vendedor_id = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_vta_vendedor_id', 0);
    $widget_cmb_vta_presupuesto_tipo_emision_id = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_vta_presupuesto_tipo_emision_id', 0);
    $cmb_solo_propias = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_solo_propias', 0);
    $cmb_ordenamiento = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_ordenamiento', 0);
    $cmb_ordenamiento_modo = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_ordenamiento_modo', 0);

    $txt_desde = Gral::getFechaToDb($txt_desde);
    $txt_hasta = Gral::getFechaToDb($txt_hasta);
} else {
    // ---------------------------------------------------------------------
    // se determinan rango de fechas del reporte (por default)
    // ---------------------------------------------------------------------
    $txt_desde = '2021-04-01';
    $txt_hasta = '2021-04-14';
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
    $widget_cmb_vta_vendedor_id = -1;
    $cmb_solo_propias = 0;
    $cmb_ordenamiento = GralSiNo::GRAL_SINO_VENDEDOR_CANTIDAD_VENTAS;
    $cmb_ordenamiento_modo = GralSiNo::GRAL_SINO_ORDENAMIENTO_MODO_DESCENDENTE;
}

// ----------------------------------------------------------------------------
// Consulta CliCliente
// ----------------------------------------------------------------------------
$criterio = new Criterio();
$criterio->addDistinct(true);
$criterio->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);

if ($widget_cmb_vta_vendedor_id != 0) {
    $criterio->add(VtaVendedor::GEN_ATTR_ID, $widget_cmb_vta_vendedor_id, Criterio::IGUAL);
}else{
    $criterio->add(VtaVendedor::GEN_ATTR_ID, ' and true', Criterio::IS_NULL);    
}

$criterio->addTabla(CliCliente::GEN_TABLA);
$criterio->addRealJoin(CliClienteVtaVendedor::GEN_TABLA, CliClienteVtaVendedor::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
$criterio->addRealJoin(VtaVendedor::GEN_TABLA, VtaVendedor::GEN_ATTR_ID, CliClienteVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, 'LEFT JOIN');
$criterio->addOrden(CliCliente::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
$criterio->setCriterios();
$cli_clientes_del_vendedor = CliCliente::getCliClientes(null, $criterio);
//Gral::prr($cli_clientes_del_vendedor);
//exit;

// ----------------------------------------------------------------------------
// Creacion de Arrays (Desde Consulta CliCliente)
// ----------------------------------------------------------------------------
$arr_ventas_clientes_en_periodo = array();
foreach ($cli_clientes_del_vendedor as $cli_cliente) {
    $arr_ventas_cliente_en_periodo = $cli_cliente->getArrVentasEnPeriodo($txt_desde, $txt_hasta, $widget_cmb_vta_vendedor_id, $cmb_solo_propias, $widget_cmb_vta_presupuesto_tipo_emision_id);
    $arr_ventas_clientes_en_periodo = array_merge($arr_ventas_clientes_en_periodo, $arr_ventas_cliente_en_periodo);
}
//Gral::prr($arr_ventas_clientes_en_periodo);
//exit;
// ----------------------------------------------------------------------------
// Ordenamiento y Longitud de Arrays (Desde Consulta CliCliente) ordenado por diferencia dias
// ----------------------------------------------------------------------------
if ($cmb_ordenamiento == GralSiNo::GRAL_SINO_VENDEDOR_ALFABETICO) {
    $arr_ventas_clientes_en_periodo = Gral::getOrdenarArrayUsort($arr_ventas_clientes_en_periodo, $orden = 'CLI_CLIENTE_DESCRIPCION', $cmb_ordenamiento_modo);
}
if ($cmb_ordenamiento == GralSiNo::GRAL_SINO_VENDEDOR_CANTIDAD_VENTAS) {
    $arr_ventas_clientes_en_periodo = Gral::getOrdenarArrayUsort($arr_ventas_clientes_en_periodo, $orden = 'CANTIDAD_VENTAS', $cmb_ordenamiento_modo);
}
if ($cmb_ordenamiento == GralSiNo::GRAL_SINO_VENDEDOR_IMPORTE_TOTAL) {
    $arr_ventas_clientes_en_periodo = Gral::getOrdenarArrayUsort($arr_ventas_clientes_en_periodo, $orden = 'IMPORTE_TOTAL', $cmb_ordenamiento_modo);
}
if ($cmb_ordenamiento == GralSiNo::GRAL_SINO_VENDEDOR_DIFERENCIA_DIAS) {
    $arr_ventas_clientes_en_periodo = Gral::getOrdenarArrayUsort($arr_ventas_clientes_en_periodo, $orden = 'ULTIMA_FECHA_VENTA_DIFERENCIA_DIAS', $cmb_ordenamiento_modo);
}

//Gral::prr($arr_ventas_clientes_en_periodo);
//exit;

$importe_ventas = 0;
$cantidad_ventas = 0;
$cantidad_clientes = 0;
$cantidad_clientes_vinculados = count($arr_ventas_clientes_en_periodo);

foreach ($arr_ventas_clientes_en_periodo as $arr_resumen_ranking_cliente) {
    if($arr_resumen_ranking_cliente['CANTIDAD_VENTAS'] > 0){
        $importe_ventas = $importe_ventas + $arr_resumen_ranking_cliente['IMPORTE_TOTAL'];
        $cantidad_ventas = $cantidad_ventas + $arr_resumen_ranking_cliente['CANTIDAD_VENTAS'];
        $cantidad_clientes++;
    } 
}

?>

<div class="buscador">
    <?php include "parts/buscador.php"; ?>
</div>

<div class="subtitulo">
    <strong>Ventas realizadas entre el <?php echo Gral::getFechaToWEB($txt_desde) ?> y <?php echo Gral::getFechaToWEB($txt_hasta) ?>.</strong>
    Se consideran OV que hayan sido aprobadas, no necesariamente facturadas.<br />

    Si no se elige un vendedor se mostraran los clientes que <strong>NO tienen vendedor asignado</strong>.
    <br />
    <br />
    IMPORTANTE: El widget muestra (por defecto) todas las ventas que la empresa realizo al cliente, independientemente de que vendedor realizo la venta. <br />Si se quieren filtrar solo las ventas del vendedor elegido se debe aplicar el filtro SOLO PROPIAS = SI
</div>

<div class="referencias">
    <table class="" cellpadding="4" align="center" style="font-size: 10px;">
        <tr>
            <td width="90" align="center" class="CLIENTE_NIVEL_1"><div style="font-weight: bold;">Activo</div><div>menos de 30 dias</div></td>
            <td width="90" align="center" class="CLIENTE_NIVEL_2"><div style="font-weight: bold;">Semi Activos</div><div>entre 31 y 60 dias</div></td>
            <td width="90" align="center" class="CLIENTE_NIVEL_3"><div style="font-weight: bold;">Inactivos</div><div>entre 61 y 90 dias</div></td>
            <td width="90" align="center" class="CLIENTE_NIVEL_4"><div style="font-weight: bold;">Zona Critica</div><div>entre 91 y 120 dias</div></td>
            <td width="90" align="center" class="CLIENTE_NIVEL_5"><div style="font-weight: bold;">Baja</div><div>mas de 120 dias</div></td>
            <td width="90" align="center" class="CLIENTE_NIVEL_0"><div style="font-weight: bold;">Sin Ventas</div><div>Sin Ventas</div></td>
        </tr>
    </table>
</div>

<div class="datos">

    <div class="loading"></div>

    <?php if (count($cli_clientes_del_vendedor) > 0) { ?>
    
        <?php include "bloque_ranking_clientes_sin_ventas_por_diferencia_dias.php" ?>
    
    <?php } else { ?>
        <div style="font-size: 14px; font-weight: normal; color: #666666; text-align: left; padding: 20px 40px; background-color: #f4f4f4;">
            No hay datos registrados.
        </div>
    <?php } ?>

        <br />
        <br />
        <br />
    
</div>

<style>
    .CLIENTE_NIVEL_0{
        background-color: #666666!important;
        color: #fff;
    }
    .CLIENTE_NIVEL_1{
        background-color: #80bd52!important;
        color: #000;
    }
    .CLIENTE_NIVEL_2{
        background-color: #f6f605!important;
        color: #000;
    }
    .CLIENTE_NIVEL_3{
        background-color: #f7be00!important;
        color: #000;
    }
    .CLIENTE_NIVEL_4{
        background-color: #ea7d22!important;
        color: #fff;
    }
    .CLIENTE_NIVEL_5{
        background-color: #c00004!important;
        color: #fff;
    }
</style>

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