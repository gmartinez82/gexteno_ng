<?php
set_time_limit(0);
ini_set('memory_limit', '-1');

include_once '_autoload.php';
$user = UsUsuario::autenticado();

$widget_key = 'resumen_iva';
$widget_codigo = 'WIDGET_HOME_RESUMEN_IVA';
$widget_key_camelizado = Gral::setDbCamelizar($widget_key, '_');

$filtrar = Gral::getVars(Gral::VARS_GET, 'filtrar', 0);
if ($filtrar) {
    $widget_cmb_gral_mes_id = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_gral_mes_id', 0);
    $widget_cmb_anio = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_anio', 0);
} else {
    // ---------------------------------------------------------------------
    // se determinan rango de fechas del reporte (por default)
    // ---------------------------------------------------------------------
    $widget_cmb_gral_mes_id = date('m');
    $widget_cmb_anio = date('Y');
    // ---------------------------------------------------------------------     
}

// ----------------------------------------------------------------------------
// Consulta VtaFactura
// ----------------------------------------------------------------------------
$criterio = new Criterio();
$criterio->addDistinct(true);

// solo se agregan facturas autorizadas
$criterio->add(VtaFactura::GEN_ATTR_CAE, Criterio::VACIO, Criterio::DISTINTO);
if ($widget_cmb_gral_mes_id != 0) {
    $criterio->add(GralMes::GEN_ATTR_ID, $widget_cmb_gral_mes_id, Criterio::IGUAL);
}
if ($widget_cmb_anio != 0) {
    $criterio->add(VtaFactura::GEN_ATTR_ANIO, $widget_cmb_anio , Criterio::IGUAL);
}
if ($widget_cmb_vta_punto_venta_id != 0) {
    $criterio->add(VtaPuntoVenta::GEN_ATTR_ID, $widget_cmb_vta_punto_venta_id, Criterio::IGUAL);
}
$criterio->addTabla(VtaFactura::GEN_TABLA);
$criterio->addRealJoin(GralMes::GEN_TABLA, GralMes::GEN_ATTR_ID, VtaFactura::GEN_ATTR_GRAL_MES_ID);
$criterio->addRealJoin(VtaPuntoVenta::GEN_TABLA, VtaPuntoVenta::GEN_ATTR_ID, VtaFactura::GEN_ATTR_VTA_PUNTO_VENTA_ID);
$criterio->addOrden(VtaFactura::GEN_ATTR_FECHA_EMISION, Criterio::_ASC);
$criterio->setCriterios();
$vta_facturas = VtaFactura::getVtaFacturas(null, $criterio);
//Gral::prr($vta_facturas);
//exit;

// ----------------------------------------------------------------------------
// Consulta VtaNotaCredito
// ----------------------------------------------------------------------------
$criterio = new Criterio();
$criterio->addDistinct(true);

// solo se agregan facturas autorizadas
$criterio->add(VtaNotaCredito::GEN_ATTR_CAE, Criterio::VACIO, Criterio::DISTINTO);
if ($widget_cmb_gral_mes_id != 0) {
    $criterio->add(GralMes::GEN_ATTR_ID, $widget_cmb_gral_mes_id, Criterio::IGUAL);
}
if ($widget_cmb_anio != 0) {
    $criterio->add(VtaNotaCredito::GEN_ATTR_ANIO, $widget_cmb_anio , Criterio::IGUAL);
}
if ($widget_cmb_vta_punto_venta_id != 0) {
    $criterio->add(VtaPuntoVenta::GEN_ATTR_ID, $widget_cmb_vta_punto_venta_id, Criterio::IGUAL);
}
$criterio->addTabla(VtaNotaCredito::GEN_TABLA);
$criterio->addRealJoin(GralMes::GEN_TABLA, GralMes::GEN_ATTR_ID, VtaNotaCredito::GEN_ATTR_GRAL_MES_ID);
$criterio->addRealJoin(VtaPuntoVenta::GEN_TABLA, VtaPuntoVenta::GEN_ATTR_ID, VtaNotaCredito::GEN_ATTR_VTA_PUNTO_VENTA_ID);
$criterio->addOrden(VtaNotaCredito::GEN_ATTR_FECHA_EMISION, Criterio::_ASC);
$criterio->setCriterios();
$vta_nota_creditos = VtaNotaCredito::getVtaNotaCreditos(null, $criterio);
//Gral::prr($vta_nota_creditos);
//exit;

// ----------------------------------------------------------------------------
// Consulta VtaNotaDebito
// ----------------------------------------------------------------------------
$criterio = new Criterio();
$criterio->addDistinct(true);

// solo se agregan facturas autorizadas
$criterio->add(VtaNotaDebito::GEN_ATTR_CAE, Criterio::VACIO, Criterio::DISTINTO);
if ($widget_cmb_gral_mes_id != 0) {
    $criterio->add(GralMes::GEN_ATTR_ID, $widget_cmb_gral_mes_id, Criterio::IGUAL);
}
if ($widget_cmb_anio != 0) {
    $criterio->add(VtaNotaDebito::GEN_ATTR_ANIO, $widget_cmb_anio , Criterio::IGUAL);
}
if ($widget_cmb_vta_punto_venta_id != 0) {
    $criterio->add(VtaPuntoVenta::GEN_ATTR_ID, $widget_cmb_vta_punto_venta_id, Criterio::IGUAL);
}
$criterio->addTabla(VtaNotaDebito::GEN_TABLA);
$criterio->addRealJoin(GralMes::GEN_TABLA, GralMes::GEN_ATTR_ID, VtaNotaDebito::GEN_ATTR_GRAL_MES_ID);
$criterio->addRealJoin(VtaPuntoVenta::GEN_TABLA, VtaPuntoVenta::GEN_ATTR_ID, VtaNotaDebito::GEN_ATTR_VTA_PUNTO_VENTA_ID);
$criterio->addOrden(VtaNotaDebito::GEN_ATTR_FECHA_EMISION, Criterio::_ASC);
$criterio->setCriterios();
$vta_nota_debitos = VtaNotaDebito::getVtaNotaDebitos(null, $criterio);
//Gral::prr($vta_nota_debitos);
//exit;

// ----------------------------------------------------------------------------
// Consulta PdeFactura
// ----------------------------------------------------------------------------
$criterio = new Criterio();
$criterio->addDistinct(true);

if ($widget_cmb_gral_mes_id != 0) {
    $criterio->add(GralMes::GEN_ATTR_ID, $widget_cmb_gral_mes_id, Criterio::IGUAL);
}
if ($widget_cmb_anio != 0) {
    $criterio->add(PdeFactura::GEN_ATTR_ANIO, $widget_cmb_anio , Criterio::IGUAL);
}
$criterio->addTabla(PdeFactura::GEN_TABLA);
$criterio->addRealJoin(GralMes::GEN_TABLA, GralMes::GEN_ATTR_ID, PdeFactura::GEN_ATTR_GRAL_MES_ID);
$criterio->addOrden(PdeFactura::GEN_ATTR_FECHA_EMISION, Criterio::_ASC);
$criterio->setCriterios();
$pde_facturas = PdeFactura::getPdeFacturas(null, $criterio);
//Gral::prr($pde_facturas);
//exit;

// ----------------------------------------------------------------------------
// Consulta PdeNotaCredito
// ----------------------------------------------------------------------------
$criterio = new Criterio();
$criterio->addDistinct(true);

if ($widget_cmb_gral_mes_id != 0) {
    $criterio->add(GralMes::GEN_ATTR_ID, $widget_cmb_gral_mes_id, Criterio::IGUAL);
}
if ($widget_cmb_anio != 0) {
    $criterio->add(PdeNotaCredito::GEN_ATTR_ANIO, $widget_cmb_anio , Criterio::IGUAL);
}
$criterio->addTabla(PdeNotaCredito::GEN_TABLA);
$criterio->addRealJoin(GralMes::GEN_TABLA, GralMes::GEN_ATTR_ID, PdeNotaCredito::GEN_ATTR_GRAL_MES_ID);
$criterio->addOrden(PdeNotaCredito::GEN_ATTR_FECHA_EMISION, Criterio::_ASC);
$criterio->setCriterios();
$pde_nota_creditos = PdeNotaCredito::getPdeNotaCreditos(null, $criterio);
//Gral::prr($pde_nota_creditos);
//exit;

// ----------------------------------------------------------------------------
// Consulta PdeNotaDebito
// ----------------------------------------------------------------------------
$criterio = new Criterio();
$criterio->addDistinct(true);

if ($widget_cmb_gral_mes_id != 0) {
    $criterio->add(GralMes::GEN_ATTR_ID, $widget_cmb_gral_mes_id, Criterio::IGUAL);
}
if ($widget_cmb_anio != 0) {
    $criterio->add(PdeNotaDebito::GEN_ATTR_ANIO, $widget_cmb_anio , Criterio::IGUAL);
}
$criterio->addTabla(PdeNotaDebito::GEN_TABLA);
$criterio->addRealJoin(GralMes::GEN_TABLA, GralMes::GEN_ATTR_ID, PdeNotaDebito::GEN_ATTR_GRAL_MES_ID);
$criterio->addOrden(PdeNotaDebito::GEN_ATTR_FECHA_EMISION, Criterio::_ASC);
$criterio->setCriterios();
$pde_nota_debitos = PdeNotaDebito::getPdeNotaDebitos(null, $criterio);
//Gral::prr($pde_nota_debitos);
//exit;

// -----------------------------------------------------------------------------
// Creacion de Arrays
// -----------------------------------------------------------------------------
$arr_resumen_fechas = false;

foreach ($vta_facturas as $vta_factura) {
    
    $fecha = substr($vta_factura->getFechaEmision(), 0, 10);
    
    // -------------------------------------------------------------------------
    // se instancia la tabla de resumen
    // -------------------------------------------------------------------------
    $vta_factura_importe = $vta_factura->getResumenComprobante();
    //$vta_factura_importe_subtotal = $vta_factura_importe->getImporteSubtotal();
    $vta_factura_importe_iva = $vta_factura_importe->getImporteIva();
    //$vta_factura_importe_tributo = $vta_factura_importe->getImporteTributo();
    //$vta_factura_importe_total = $vta_factura_importe->getImporteTotal();
    
    $arr_resumen_fechas['TOTAL']['VTA_FACTURA_IVA'] += $vta_factura_importe_iva;
}

foreach ($vta_nota_creditos as $vta_nota_credito) {
    
    $fecha = substr($vta_nota_credito->getFechaEmision(), 0, 10);
    
    // -------------------------------------------------------------------------
    // se instancia la tabla de resumen
    // -------------------------------------------------------------------------
    $vta_nota_credito_importe = $vta_nota_credito->getResumenComprobante();
    //$vta_nota_credito_importe_subtotal = $vta_nota_credito_importe->getImporteSubtotal();
    $vta_nota_credito_importe_iva = $vta_nota_credito_importe->getImporteIva();
    //$vta_nota_credito_importe_tributo = $vta_nota_credito_importe->getImporteTributo();
    //$vta_nota_credito_importe_total = $vta_nota_credito_importe->getImporteTotal();
    
    $arr_resumen_fechas['TOTAL']['VTA_NOTA_CREDITO_IVA'] += $vta_nota_credito_importe_iva;
}

foreach ($vta_nota_debitos as $vta_nota_debito) {
    
    $fecha = substr($vta_nota_debito->getFechaEmision(), 0, 10);
    
    // -------------------------------------------------------------------------
    // se instancia la tabla de resumen
    // -------------------------------------------------------------------------
    $vta_nota_debito_importe = $vta_nota_debito->getResumenComprobante();
    //$vta_nota_debito_importe_subtotal = $vta_nota_debito_importe->getImporteSubtotal();
    $vta_nota_debito_importe_iva = $vta_nota_debito_importe->getImporteIva();
    //$vta_nota_debito_importe_tributo = $vta_nota_debito_importe->getImporteTributo();
    //$vta_nota_debito_importe_total = $vta_nota_debito_importe->getImporteTotal();
    
    $arr_resumen_fechas['TOTAL']['VTA_NOTA_DEBITO_IVA'] += $vta_nota_debito_importe_iva;
}

foreach ($pde_facturas as $pde_factura) {
    
    $fecha = substr($pde_factura->getFechaEmision(), 0, 10);
    
    // -------------------------------------------------------------------------
    // se instancia la tabla de resumen
    // -------------------------------------------------------------------------
    $pde_factura_importe = $pde_factura->getResumenComprobante();
    //$pde_factura_importe_subtotal = $pde_factura_importe->getImporteSubtotal();
    $pde_factura_importe_iva = $pde_factura_importe->getImporteIva();
    //$pde_factura_importe_tributo = $pde_factura_importe->getImporteTributo();
    //$pde_factura_importe_total = $pde_factura_importe->getImporteTotal();
    
    $arr_resumen_fechas['TOTAL']['PDE_FACTURA_IVA'] += $pde_factura_importe_iva;
}

foreach ($pde_nota_creditos as $pde_nota_credito) {
    
    $fecha = substr($pde_nota_credito->getFechaEmision(), 0, 10);
    
    // -------------------------------------------------------------------------
    // se instancia la tabla de resumen
    // -------------------------------------------------------------------------
    $pde_nota_credito_importe = $pde_nota_credito->getResumenComprobante();
    //$pde_nota_credito_importe_subtotal = $pde_nota_credito_importe->getImporteSubtotal();
    $pde_nota_credito_importe_iva = $pde_nota_credito_importe->getImporteIva();
    //$pde_nota_credito_importe_tributo = $pde_nota_credito_importe->getImporteTributo();
    //$pde_nota_credito_importe_total = $pde_nota_credito_importe->getImporteTotal();
    
    $arr_resumen_fechas['TOTAL']['PDE_NOTA_CREDITO_IVA'] += $pde_nota_credito_importe_iva;
}

foreach ($pde_nota_debitos as $pde_nota_debito) {
    
    $fecha = substr($pde_nota_debito->getFechaEmision(), 0, 10);
    
    // -------------------------------------------------------------------------
    // se instancia la tabla de resumen
    // -------------------------------------------------------------------------
    $pde_nota_debito_importe = $pde_nota_debito->getResumenComprobante();
    //$pde_nota_debito_importe_subtotal = $pde_nota_debito_importe->getImporteSubtotal();
    $pde_nota_debito_importe_iva = $pde_nota_debito_importe->getImporteIva();
    //$pde_nota_debito_importe_tributo = $pde_nota_debito_importe->getImporteTributo();
    //$pde_nota_debito_importe_total = $pde_nota_debito_importe->getImporteTotal();
    
    $arr_resumen_fechas['TOTAL']['PDE_NOTA_DEBITO_IVA'] += $pde_nota_debito_importe_iva;
}

// -----------------------------------------------------------------------------
// Se calcula el total de IVA
// -----------------------------------------------------------------------------
    $arr_resumen_fechas['TOTAL']['TOTAL_VTA'] +=
        $arr_resumen_fechas['TOTAL']['VTA_FACTURA_IVA']
        - $arr_resumen_fechas['TOTAL']['VTA_NOTA_CREDITO_IVA']
        + $arr_resumen_fechas['TOTAL']['VTA_NOTA_DEBITO_IVA'];
    
    $arr_resumen_fechas['TOTAL']['TOTAL_PDE'] +=
        $arr_resumen_fechas['TOTAL']['PDE_FACTURA_IVA']
        - $arr_resumen_fechas['TOTAL']['PDE_NOTA_CREDITO_IVA']
        + $arr_resumen_fechas['TOTAL']['PDE_NOTA_DEBITO_IVA'];
    
    $arr_resumen_fechas['TOTAL']['TOTAL_NETO'] +=
        $arr_resumen_fechas['TOTAL']['TOTAL_VTA']
        - $arr_resumen_fechas['TOTAL']['TOTAL_PDE'];

//Gral::prr($arr_resumen_fechas);
//exit;

?>

<div class="buscador">
    <?php include "parts/buscador.php"; ?>
</div>

<div class="subtitulo">
    <strong>Resumen de impuestos emitidos el <?php echo $widget_cmb_gral_mes_id ?>/<?php echo $widget_cmb_anio ?>.</strong>
</div>

<div class="datos">

    <div class="loading"></div>

    <?php if ($arr_resumen_fechas) { ?>
    
        <div class="bloque">
            <?php include "bloque_resumen_iva_por_fecha.php" ?>
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