<?php
include_once '_autoload.php';
$user = UsUsuario::autenticado();

$widget_key = 'vta_orden_venta_facturada_no_remitida';
$widget_codigo = 'WIDGET_HOME_VTA_ORDEN_VENTA_FACTURADA_NO_REMITIDA';
$widget_key_camelizado = Gral::setDbCamelizar($widget_key, '_');

$filtrar = Gral::getVars(Gral::VARS_GET, 'filtrar', 0);
if ($filtrar) {
    $txt_desde = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_txt_desde', '');
    $txt_hasta = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_txt_hasta', '');
    $widget_cmb_gral_sucursal_id   = Gral::getVars(Gral::VARS_GET, 'widget_'.$widget_key.'_cmb_gral_sucursal_id', 0);
    $widget_cmb_vta_presupuesto_tipo_venta_id   = Gral::getVars(Gral::VARS_GET, 'widget_'.$widget_key.'_cmb_vta_presupuesto_tipo_venta_id', 0);
    
    $txt_desde = Gral::getFechaToDb($txt_desde);
    $txt_hasta = Gral::getFechaToDb($txt_hasta);
} else {
    // ---------------------------------------------------------------------
    // se determinan rango de fechas del reporte (por default)
    // ---------------------------------------------------------------------
    $txt_desde = '2021-11-23';
    $txt_hasta = '2021-11-23';
    $txt_desde = date('Y-m-01'); // desde el primer dia del mes
    $txt_hasta = Date::sumarDias(date('Y-m-d'), 0);
    // si el dia del mes es menor a 3 se envia reporte del mes anterior
    if ((int) date('d') < 4) {
        $txt_desde = Date::getPrimeraFechaMesAnterior();
        $txt_hasta = Date::getUltimaFechaMesAnterior();
    }
    $txt_desde = Date::sumarDias(date('Y-m-d'), -30);
    $txt_hasta = date('Y-m-d');
    // ---------------------------------------------------------------------
    $vta_presupuesto_tipo_venta = VtaPresupuestoTipoVenta::getOxCodigo(VtaPresupuestoTipoVenta::TIPO_VENTA_A);
    $widget_cmb_vta_presupuesto_tipo_venta_id = $vta_presupuesto_tipo_venta->getId();
}

// -----------------------------------------------------------------------------
// Consulta
// -----------------------------------------------------------------------------
$vta_orden_ventas = VtaOrdenVenta::getVtaOrdenVentasFacturadasNoRemitidas($txt_desde, $txt_hasta, $widget_cmb_gral_sucursal_id, $widget_cmb_vta_presupuesto_tipo_venta_id);
//Gral::prr($vta_orden_ventas);
//exit;
?>

<div class="buscador">
    <?php include "parts/buscador.php"; ?>
</div>

<div class="subtitulo">
    Ordenes de Venta <strong>ACTIVAS</strong> generadas entre el <?php echo Gral::getFechaToWEB($txt_desde) ?> y <?php echo Gral::getFechaToWEB($txt_hasta) ?> que han sido <strong>FACTURADAS</strong> pero <strong>NO TOTALMENTE REMITIDAS</strong>.
</div>

<div class="datos">

    <div class="loading"></div>

    <?php if (count($vta_orden_ventas) > 0) { ?>
    
        <div class="bloque">
            <?php include "bloque_resumen_vta_orden_ventas.php" ?>
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
        setClick<?php echo $widget_key_camelizado ?>BtnGenerarPDF();
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
    
    function setClick<?php echo $widget_key_camelizado ?>BtnGenerarPDF()
    {
        $("#widget_<?php echo $widget_key ?>_btn_generar_pdf").unbind();
        $("#widget_<?php echo $widget_key ?>_btn_generar_pdf").click(function ()
        {
            var form = $(this).parents('form');
            form.attr("target", "_blank");
            form.attr('action', "gen_widget/<?php echo $widget_codigo ?>/pdf/pdf.php").submit();
            
        });
    }
    
</script>
