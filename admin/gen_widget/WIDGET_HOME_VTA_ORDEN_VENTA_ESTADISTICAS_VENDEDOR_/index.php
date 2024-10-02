<?php

set_time_limit(0);
ini_set('memory_limit', '-1');

include_once '_autoload.php';
include_once '../../control/init.php';
$user = UsUsuario::autenticado();

//$gral_sucursales_cmb = GralSucursal::getGralSucursalsCmbPorAlcanceYDetalleClientes(false);
//$vta_vendedors_cmb = VtaVendedor::getVtaVendedorsCmbXAlcanceYDetalleClientes(false);

$mostrar_buscador_filtros_sucursal = false;
$mostrar_buscador_filtros_vendedor = false;

    
$widget_key = 'vta_orden_venta_estadisticas_vendedor';
$widget_codigo = 'WIDGET_HOME_VTA_ORDEN_VENTA_ESTADISTICAS_VENDEDOR';
$widget_key_camelizado = Gral::setDbCamelizar($widget_key, '_');

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
    $cmb_solo_propias = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_solo_propias', 0);
    $widget_cmb_vta_presupuesto_tipo_emision_id = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_vta_presupuesto_tipo_emision_id', 0);
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
    /*
    if(count($gral_sucursales_cmb) > 1){
        $cmb_busqueda = GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_SUCURSAL;        
    }else{
        $cmb_busqueda = GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_VENDEDOR;
    }
    */
    $cmb_solo_propias = 0;
    $cmb_ordenamiento = GralSiNo::GRAL_SINO_VENDEDOR_CANTIDAD_VENTAS;
    $cmb_ordenamiento_modo = GralSiNo::GRAL_SINO_ORDENAMIENTO_MODO_DESCENDENTE;
}

if($cmb_busqueda == GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_SUCURSAL){
    
}

// ----------------------------------------------------------------------------
// Consulta CliCliente
// ----------------------------------------------------------------------------
$criterio = new Criterio();
$criterio->addDistinct(true);
$criterio->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);

if ($cmb_busqueda == GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_SUCURSAL) {
    
    if ($cmb_con_sucursal_vinculada == 1) {
        if ($widget_cmb_gral_sucursal_id != 0) {
            $criterio->add(GralSucursal::GEN_ATTR_ID, $widget_cmb_gral_sucursal_id, Criterio::IGUAL);
        }else{
            $criterio->add(GralSucursal::GEN_ATTR_ID, ' and true', Criterio::IS_NOT_NULL);            
        }
    }else{
        $criterio->add(GralSucursal::GEN_ATTR_ID, ' and true', Criterio::IS_NULL);
    }
    
    if($cmb_sucursal_vinculo_automatico != -1){
        // de acuerdo al tipo de vinculo, automatico o no
        $criterio->add(GralSucursalCliCliente::GEN_ATTR_AUTOMATICO, $cmb_sucursal_vinculo_automatico, Criterio::IGUAL);
    }

    if($cmb_cli_cliente_tipo_gestion_id != 0){
        // de acuerdo al tipo de gestion
        $criterio->add(CliClienteTipoGestion::GEN_ATTR_ID, $cmb_cli_cliente_tipo_gestion_id, Criterio::IGUAL);
    }
    
}elseif($cmb_busqueda == GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_VENDEDOR){
    
    if ($cmb_con_vendedor_vinculado == 1) {
        if ($widget_cmb_vta_vendedor_id != 0) {
            $criterio->add(VtaVendedor::GEN_ATTR_ID, $widget_cmb_vta_vendedor_id, Criterio::IGUAL);
        }else{
            $criterio->add(VtaVendedor::GEN_ATTR_ID, ' and true', Criterio::IS_NOT_NULL);            
        }
    }else{
        $criterio->add(VtaVendedor::GEN_ATTR_ID, ' and true', Criterio::IS_NULL);
    }
    
}

$criterio->addTabla(CliCliente::GEN_TABLA);
if ($cmb_busqueda == GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_SUCURSAL) {
    $criterio->addRealJoin(GralSucursalCliCliente::GEN_TABLA, GralSucursalCliCliente::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
    $criterio->addRealJoin(GralSucursal::GEN_TABLA, GralSucursal::GEN_ATTR_ID, GralSucursalCliCliente::GEN_ATTR_GRAL_SUCURSAL_ID, 'LEFT JOIN');
}elseif($cmb_busqueda == GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_VENDEDOR){
    $criterio->addRealJoin(CliClienteVtaVendedor::GEN_TABLA, CliClienteVtaVendedor::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
    $criterio->addRealJoin(VtaVendedor::GEN_TABLA, VtaVendedor::GEN_ATTR_ID, CliClienteVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, 'LEFT JOIN');
}
$criterio->addRealJoin(CliClienteTipoGestion::GEN_TABLA, CliClienteTipoGestion::GEN_ATTR_ID, CliCliente::GEN_ATTR_CLI_CLIENTE_TIPO_GESTION_ID, 'LEFT JOIN');
$criterio->addOrden(CliCliente::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
$criterio->setCriterios();
//$p = new Paginador(10, 1);
$p = null;
$cli_clientes_del_vendedor = CliCliente::getCliClientes($p, $criterio);
//Gral::pr(count($cli_clientes_del_vendedor));
//Gral::prr($cli_clientes_del_vendedor);
//exit;

// ----------------------------------------------------------------------------
// Creacion de Arrays (Desde Consulta CliCliente)
// ----------------------------------------------------------------------------
$arr_ventas_clientes_en_periodo = array();
foreach ($cli_clientes_del_vendedor as $cli_cliente) {
    $arr_ventas_cliente_en_periodo = $cli_cliente->getArrVentasEnPeriodo($txt_desde, $txt_hasta, $cmb_busqueda, $widget_cmb_gral_sucursal_id, $widget_cmb_vta_vendedor_id, $cmb_solo_propias, $widget_cmb_vta_presupuesto_tipo_emision_id);
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
$cantidad_clientes_vendidos = 0;
$cantidad_clientes_no_vendidos = 0;
$cantidad_clientes_vinculados = count($arr_ventas_clientes_en_periodo);

foreach ($arr_ventas_clientes_en_periodo as $arr_resumen_ranking_cliente) {
    if($arr_resumen_ranking_cliente['CANTIDAD_VENTAS'] > 0){
        $importe_ventas = $importe_ventas + $arr_resumen_ranking_cliente['IMPORTE_TOTAL'];
        $cantidad_ventas = $cantidad_ventas + $arr_resumen_ranking_cliente['CANTIDAD_VENTAS'];
        $cantidad_clientes_vendidos++;
    } 
    $arr_agrupador_tipo_estado_venta[$arr_resumen_ranking_cliente['CLIENTE_TIPO_ESTADO_VENTA']]++; // totalizador de tipo de estado de venta
}
$cantidad_clientes_no_vendidos = $cantidad_clientes_vinculados - $cantidad_clientes_vendidos;

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
    <div>
        IMPORTANTE: El widget muestra (por defecto) todas las ventas que LA EMPRESA realiza al cliente, independientemente de que sucursal o vendedor efectuó la operación. <br />Si se quieren identificar solo las ventas de la sucursal o vendedor sobre SUS clientes se debe aplicar el filtro SOLO PROPIAS = SI.
    </div>
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
        <tr>
            <td align="center" class="CLIENTE_NIVEL_1"><div style="font-weight: bold; font-size: 20px;"><?php Gral::_echoInt($arr_agrupador_tipo_estado_venta[1]) ?></div></td>
            <td align="center" class="CLIENTE_NIVEL_2"><div style="font-weight: bold; font-size: 20px;"><?php Gral::_echoInt($arr_agrupador_tipo_estado_venta[2]) ?></div></td>
            <td align="center" class="CLIENTE_NIVEL_3"><div style="font-weight: bold; font-size: 20px;"><?php Gral::_echoInt($arr_agrupador_tipo_estado_venta[3]) ?></div></td>
            <td align="center" class="CLIENTE_NIVEL_4"><div style="font-weight: bold; font-size: 20px;"><?php Gral::_echoInt($arr_agrupador_tipo_estado_venta[4]) ?></div></td>
            <td align="center" class="CLIENTE_NIVEL_5"><div style="font-weight: bold; font-size: 20px;"><?php Gral::_echoInt($arr_agrupador_tipo_estado_venta[5]) ?></div></td>
            <td align="center" class="CLIENTE_NIVEL_0"><div style="font-weight: bold; font-size: 20px;"><?php Gral::_echoInt($arr_agrupador_tipo_estado_venta[0]) ?></div></td>
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