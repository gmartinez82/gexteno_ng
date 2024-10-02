<?php

set_time_limit(0);
ini_set('memory_limit', '-1');

include_once '_autoload.php';
include_once '../../control/init.php';
$user = UsUsuario::autenticado();

$widget_key = 'vta_orden_venta_estadisticas_vendedor';
$widget_codigo = 'WIDGET_HOME_VTA_ORDEN_VENTA_ESTADISTICAS_VENDEDOR';
$widget_key_camelizado = Gral::setDbCamelizar($widget_key, '_');

$mostrar_buscador_filtros_sucursal = false;
$mostrar_buscador_filtros_vendedor = false;

$filtrar = Gral::getVars(Gral::VARS_GET, 'filtrar', 0);
if ($filtrar) {
    $txt_desde = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_txt_desde', '');
    $txt_hasta = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_txt_hasta', '');
    
    $widget_cmb_gral_sucursal_id = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_gral_sucursal_id', -1);
    $widget_cmb_vta_vendedor_id = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_vta_vendedor_id', -1);
    $cmb_con_sucursal_vinculada = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_con_sucursal_vinculada', 0);
    $cmb_con_vendedor_vinculado = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_con_vendedor_vinculado', 0);
    $cmb_busqueda = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_busqueda', 0);
    $cmb_sucursal_vinculo_automatico = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_sucursal_vinculo_automatico', -1);
    $cmb_cli_cliente_tipo_gestion_id = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_cli_cliente_tipo_gestion_id', 0);
    $cmb_cli_cliente_tipo_estado_venta_id = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_cli_cliente_tipo_estado_venta_id', 0);
    $cmb_solo_propias = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_solo_propias', 0);
    $widget_cmb_vta_presupuesto_tipo_emision_id = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_vta_presupuesto_tipo_emision_id', 0);
    $cmb_ordenamiento = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_ordenamiento', 0);
    $cmb_ordenamiento_modo = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_ordenamiento_modo', 0);
    $cmb_cli_cliente_periodicidad_gestion_id = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_cli_cliente_periodicidad_gestion_id', 0);

    $txt_desde = Gral::getFechaToDb($txt_desde);
    $txt_hasta = Gral::getFechaToDb($txt_hasta);
    
    $gral_sucursal_seleccionado = GralSucursal::getOxId($widget_cmb_gral_sucursal_id);
    $vta_vendedor_seleccionado = VtaVendedor::getOxId($widget_cmb_vta_vendedor_id);
    
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
    
    $widget_cmb_gral_sucursal_id = -1;
    $widget_cmb_vta_vendedor_id = -1;
    $cmb_con_sucursal_vinculada = 1;
    $cmb_con_vendedor_vinculado = 1;
    
    $cmb_busqueda = GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_SUCURSAL;    
    
    if($vta_vendedor_autenticado){
        if($vta_vendedor_autenticado->getVtaTipoVendedor()->getCodigo() == VtaTipoVendedor::TIPO_SUCURSAL){
            $cmb_busqueda = GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_SUCURSAL;                    
        }else{
            $cmb_busqueda = GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_VENDEDOR;            
        }
    }
    $cmb_solo_propias = 0;
    $cmb_ordenamiento = GralSiNo::GRAL_SINO_VENDEDOR_CANTIDAD_VENTAS;
    $cmb_ordenamiento_modo = GralSiNo::GRAL_SINO_ORDENAMIENTO_MODO_DESCENDENTE;
}

$cli_clientes = GenWidget::getWidgetVtaOrdenVentaEstadisticasVendedor($cmb_busqueda, $cmb_con_sucursal_vinculada, $widget_cmb_gral_sucursal_id, $cmb_con_vendedor_vinculado, $widget_cmb_vta_vendedor_id, $cmb_sucursal_vinculo_automatico, $cmb_cli_cliente_tipo_gestion_id, $cmb_cli_cliente_tipo_estado_venta_id, $cmb_cli_cliente_periodicidad_gestion_id);
//Gral::prr($cli_clientes);
//exit;

$arr_ventas_en_periodo = CliCliente::getArrVentasEnPeriodo_2($cmb_busqueda, $cli_clientes, $widget_cmb_vta_vendedor_id, $widget_cmb_gral_sucursal_id, $txt_desde, $txt_hasta, $cmb_solo_propias, $widget_cmb_vta_presupuesto_tipo_emision_id, $cmb_ordenamiento, $cmb_ordenamiento_modo);
//Gral::prr($arr_ventas_en_periodo);
//exit;

$importe_ventas = $arr_ventas_en_periodo['RESUMEN']['TOTAL_IMPORTE_VENTAS'];
$cantidad_ventas = $arr_ventas_en_periodo['RESUMEN']['CANTIDAD_VENTAS'];
$cantidad_clientes_vendidos = $arr_ventas_en_periodo['RESUMEN']['CLIENTES_VENDIDOS'];
$cantidad_clientes_no_vendidos = $arr_ventas_en_periodo['RESUMEN']['CLIENTES_NO_VENDIDOS'];
$cantidad_clientes_vinculados = $arr_ventas_en_periodo['RESUMEN']['CLIENTES_VINCULADOS'];

$porcentaje_clientes_vendidos  = Gral::rnd(($cantidad_clientes_vendidos / $cantidad_clientes_vinculados) * 100, 0);
$porcentaje_clientes_no_vendidos  = Gral::rnd(($cantidad_clientes_no_vendidos / $cantidad_clientes_vinculados) * 100, 0);

$porcentaje_clientes_vendidos_bgcolor = '';
$porcentaje_clientes_vendidos_color = 'white';
if($porcentaje_clientes_vendidos > 60){
    $porcentaje_clientes_vendidos_bgcolor = '#80bd52';
}elseif($porcentaje_clientes_vendidos >= 50){
    $porcentaje_clientes_vendidos_bgcolor = '#f7be00';
    $porcentaje_clientes_vendidos_color = '#013254';
}else{
    $porcentaje_clientes_vendidos_bgcolor = '#c00004';    
}
?>

<div class="buscador">
    <?php include "parts/buscador.php"; ?>
</div>

<div class="subtitulo">
    <strong>Ventas realizadas entre el <?php echo Gral::getFechaToWEB($txt_desde) ?> y <?php echo Gral::getFechaToWEB($txt_hasta) ?>.</strong> <br />
    Se consideran OV que hayan sido aprobadas, no necesariamente facturadas.<br />

    <div style="display: none;">
        Si no se elige una sucursal se mostraran los clientes que <strong>NO tienen sucursal asignada</strong>.<br />
        Si no se elige un vendedor se mostraran los clientes que <strong>NO tienen vendedor asignado</strong>.
        <br />
    </div>
    
    <br />
    IMPORTANTE: El widget muestra (por defecto) todas las ventas que la empresa realizo al cliente, independientemente de que vendedor realizo la venta. <br />Si se quieren filtrar solo las ventas del vendedor elegido se debe aplicar el filtro SOLO PROPIAS = SI
</div>

<div class="datos">

    <div class="loading"></div>
    
    <div style="text-align: center;">
        <?php if($cmb_busqueda == GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_SUCURSAL && $gral_sucursal_seleccionado){ ?>
            <h2 class="info-seleccion">Sucursal<br /> <strong><?php Gral::_echo(($gral_sucursal_seleccionado) ? $gral_sucursal_seleccionado->getDescripcion() : '') ?></strong></h2>
        <?php } elseif($cmb_busqueda == GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_VENDEDOR && $vta_vendedor_seleccionado) { ?>
            <h2 class="info-seleccion">Vendedor<br /> <strong><?php Gral::_echo(($vta_vendedor_seleccionado) ? $vta_vendedor_seleccionado->getDescripcion() : '') ?></strong></h2>
        <?php } ?>
    </div>
    
     <?php include "bloque_leyendas_cli_cliente_tipo_estado_ventas.php" ?>
    
    <?php if (count($cli_clientes) > 0) { ?>
    
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

<script>

    $(function ($)
    {
        setInitWidget<?php echo $widget_key_camelizado ?>();
    });

    function setInitWidget<?php echo $widget_key_camelizado ?>()
    {
        setClick<?php echo $widget_key_camelizado ?>BtnBuscar();
        setChange<?php echo $widget_key_camelizado ?>CmbTipoBusqueda();
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
    
    function setChange<?php echo $widget_key_camelizado ?>CmbTipoBusqueda(){
        $("#widget_<?php echo $widget_key ?>_cmb_busqueda").unbind();
        $("#widget_<?php echo $widget_key ?>_cmb_busqueda").click(function ()
        {
            var codigo = $(this).val();
            
            $('.col.par.POR_VINCULO').hide();
            $('.col.par.' + codigo).show();
    });
    }
</script>