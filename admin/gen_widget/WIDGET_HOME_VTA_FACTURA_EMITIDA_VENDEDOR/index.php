<?php
include_once '_autoload.php';
$user = UsUsuario::autenticado();

$widget_key = 'vta_factura_emitida_vendedor';
$widget_codigo = 'WIDGET_HOME_' . strtoupper($widget_key);
$widget_key_camelizado = Gral::setDbCamelizar($widget_key, '_');

$cli_cliente = false;
$vta_facturas = array();
$vta_ajuste_debes = array();
        
$filtrar = Gral::getVars(Gral::VARS_GET, 'filtrar', 0);
if ($filtrar) {
    $txt_desde = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_txt_desde', '');
    $txt_hasta = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_txt_hasta', '');
    $widget_cmb_vta_vendedor_id = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_vta_vendedor_id', 0);
    $widget_cmb_cli_cliente_id = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_cli_cliente_id', 0);
    $widget_cmb_otros = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_otros', 0);

    $txt_desde = Gral::getFechaToDb($txt_desde);
    $txt_hasta = Gral::getFechaToDb($txt_hasta);
    
    $cli_cliente = CliCliente::getOxId($widget_cmb_cli_cliente_id);
    if ($cli_cliente) {
        $importe_total_saldo_inicial_en_fecha = $cli_cliente->getSaldoDeCuentaEnFechaImporte(1, $txt_hasta, false, $widget_cmb_otros);
    //    $importe_total_saldo_inicial_en_fecha = -123;
        //$arr_comprobante_totales_saldo_a_fecha = $cli_cliente->getSaldoDeCuentaEnFecha($gral_empresa_id, $fecha, $vta_comprobantes, $incluir_ajustes);
        //Gral::prr($importe_total_saldo_inicial_en_fecha);
        //Gral::prr($arr_comprobante_totales_saldo_a_fecha);
    }

    // ----------------------------------------------------------------------------
    // Consulta VtaFactura
    // ----------------------------------------------------------------------------
    $vta_facturas = GenWidget::getWidgetVtaFacturaEmitidaVendedor($txt_desde, $txt_hasta, $widget_cmb_vta_vendedor_id, $widget_cmb_cli_cliente_id);
    //Gral::prr($vta_facturas);
    //exit;

    // ----------------------------------------------------------------------------
    // Consulta VtaAjusteDebe
    // ----------------------------------------------------------------------------
    $vta_ajuste_debes = GenWidget::getWidgetVtaAjusteDebeEmitidaVendedor($txt_desde, $txt_hasta, $widget_cmb_vta_vendedor_id, $widget_cmb_cli_cliente_id);
    //Gral::prr($vta_ajuste_debes);
    //exit;    
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
    $txt_desde = Date::sumarDias(date('Y-m-d'), 0);
    $txt_hasta = date('Y-m-d');
    // ---------------------------------------------------------------------
    
    $widget_cmb_cli_cliente_id = 0;
}
?>
<link href='<?php echo Gral::getPath('path_http') ?>admin/gen_widget/<?php echo $widget_codigo ?>/css/widget.css?<?php echo date('dHs') ?>' rel='stylesheet' type='text/css' />

<div class="buscador">
    <?php include "parts/buscador.php"; ?>
</div>

<div class="subtitulo">
    Listado de facturas emitidas entre el <strong><?php echo Gral::getFechaToWEB($txt_desde) ?> y <?php echo Gral::getFechaToWEB($txt_hasta) ?>.</strong>
    <br />
    En algun caso el importe resumen podria no coincidir con el saldo de las facturas emitidas, esto podria ser porque el cliente tenga algun comprobante que afecte a su cuenta fuera del rango elegido o bien que tenga algun comprobante no imputado correctamente. En cualquiera de estos casos puede comunicarse con el area de administracion para cualquier consulta.  
</div>

<div class="datos">

    <div class="loading"></div>
    
    <?php if (count($vta_facturas) > 0 || count($vta_ajuste_debes) > 0) { ?>
    
        <?php if ($cli_cliente) { ?>
            <div class="bloque">
                <?php include "bloque_resumen_cliente.php" ?>
            </div>
        <?php } ?>
    
        <?php if (count($vta_facturas) > 0) { ?>
            <div class="bloque">
                <?php include "bloque_resumen_facturas_emitidas.php" ?>
            </div>
        <?php } ?>

        <?php if (count($vta_ajuste_debes) > 0) { ?>
            <?php if ($widget_cmb_otros == 1) { ?>
                <div class="bloque">
                    <?php include "bloque_resumen_ajuste_debe_emitidos.php" ?>
                </div>
            <?php } ?>
        <?php } ?>
    
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
            $.ajax({
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
                    
                    setInit();
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("errorx "+ objeto.status);
                }
            });
        });
    }
</script>
