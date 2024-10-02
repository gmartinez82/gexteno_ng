<?php
include_once '_autoload.php';
$user = UsUsuario::autenticado();
?>
<?php
$filtrar = Gral::getVars(2, 'filtrar', 0);
if ($filtrar) {
    // ---------------------------------------------------------------------
    // se recuperan filtros elegidos pro el usuario
    // ---------------------------------------------------------------------
    $desde = Gral::getVars(2, 'widget_comprobantes_sin_cae_txt_desde', '');
    $hasta = Gral::getVars(2, 'widget_comprobantes_sin_cae_txt_hasta', '');

    $desde = Gral::getFechaToDb($desde);
    $hasta = Gral::getFechaToDb($hasta);
} else {
    // ---------------------------------------------------------------------
    // se determinan rango de fechas del reporte (por default)
    // ---------------------------------------------------------------------
    $desde = '2018-01-01';
    $hasta = '2018-01-07';
    $desde = date('Y-m-01'); // desde el primer dia del mes
    $hasta = Date::sumarDias(date('Y-m-d'), 0);

    // si el dia del mes es menor a 3 se envia reporte del mes anterior
    if ((int) date('d') < 4) {
        $desde = Date::getPrimeraFechaMesAnterior();
        //$hasta = Date::getUltimaFechaMesAnterior();
    }
    // ---------------------------------------------------------------------    
}

// ---------------------------------------------------------------------
// se obtienen los datos
// ---------------------------------------------------------------------

$vta_facturas = VtaFactura::getVtaFacturasSinCaeParaWidget($desde, $hasta);
$vta_nota_creditos = VtaNotaCredito::getVtaNotaCreditosSinCaeParaWidget($desde, $hasta);
$vta_nota_debitos = VtaNotaDebito::getVtaNotaDebitosSinCaeParaWidget($desde, $hasta);

$arr_nro_comprobantes_inexistentes_factura = VtaFactura::getArrComprobantesParaAtender($desde, $hasta);
$arr_nro_comprobantes_inexistentes_nota_credito = VtaNotaCredito::getArrComprobantesParaAtender($desde, $hasta);
$arr_nro_comprobantes_inexistentes_nota_debito = VtaNotaDebito::getArrComprobantesParaAtender($desde, $hasta);
?>

<style>

    #cuerpo_widget_CONTROL_COMPROBANTES_SIN_CAE .datos .par
    {
        text-align: left;
        padding: 0px;
        font-size: 12px;
    }
    #cuerpo_widget_CONTROL_COMPROBANTES_SIN_CAE .datos .par.sin-cae
    {
        font-size: 16px;
        padding-left: 25px;
        background-image: url(gen_widget/CONTROL_COMPROBANTES_SIN_CAE/images/icn_alerta.png);
        background-repeat:no-repeat;
        background-size: 20px;
        background-position: 5px 5px;
    }
    #cuerpo_widget_CONTROL_COMPROBANTES_SIN_CAE .datos .par.detalle{
        margin-left: 25px;
    }
    #cuerpo_widget_CONTROL_COMPROBANTES_SIN_CAE .datos .info-comprobantes
    {
        border: #ccc dotted 1px;
        width: 90%;
        background-color: #fff;
        margin: 10px 5px;
        padding: 10px;
    }
    #cuerpo_widget_CONTROL_COMPROBANTES_SIN_CAE .datos .info-comprobante-uno{
        margin: 10px 5px;
    }    
    #cuerpo_widget_CONTROL_COMPROBANTES_SIN_CAE .datos .par .label
    {
        width: 85%;
        text-align: left;
        border-bottom: #CCCCCC dotted 1px;
        color: #666;
        vertical-align: top;
    }
    #cuerpo_widget_CONTROL_COMPROBANTES_SIN_CAE .datos .par.sin-cae .label
    {
        color: #C00;
    }
    #cuerpo_widget_CONTROL_COMPROBANTES_SIN_CAE .datos .par.detalle .label{
        color: #C00;
    }
    #cuerpo_widget_CONTROL_COMPROBANTES_SIN_CAE .datos .par .dato
    {
        width: 8%;
        vertical-align: top;
        font-weight: bold;
        color: #000;
    }
    #cuerpo_widget_CONTROL_COMPROBANTES_SIN_CAE .datos .par.sin-cae .dato
    {
        border: #C00 solid 1px;
        background-color: #FF9;
        font-size: 14px;
        color: #C00;

        padding: 2px;
        text-align: center;
    }

</style>

<div class="buscador">
    <?php include "parts/buscador.php"; ?>
</div>

<div class="subtitulo">
    Comprobantes sin CAE registrados entre el <?php echo Gral::getFechaToWEB($desde) ?> y <?php echo Gral::getFechaToWEB($hasta) ?>.
</div>
<div class="datos">

    <div class="info-comprobantes">

        <div class="info-comprobante-uno">
            <!-- Facturas -->
            <div class="par <?php echo (count($vta_facturas) > 0 ) ? 'sin-cae' : ''; ?>">
                <div class="label">
                    <?php Lang::_lang("Facturas sin CAE"); ?>
                </div>
                <div class="dato">
                    <?php Gral::_echo(count($vta_facturas)); ?>
                </div>
            </div>
            <?php foreach ($vta_facturas as $vta_factura): ?>
                <div class="par detalle">
                    <div class="label">
                        <?php Gral::_echo($vta_factura->getCodigo()); ?> - 
                        <?php Gral::_echo(Gral::getFechaToWEB($vta_factura->getFechaEmision())); ?> - 
                        <?php Gral::_echo($vta_factura->getPersonaDescripcion()); ?> - 
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="info-comprobante-uno">
            <!-- Notas de Credito -->
            <div class="par <?php echo (count($vta_nota_creditos) > 0 ) ? 'sin-cae' : ''; ?>">
                <div class="label">
                    <?php Lang::_lang("Notas de Credito sin CAE"); ?>
                </div>
                <div class="dato">
                    <?php Gral::_echo(count($vta_nota_creditos)); ?>
                </div>
            </div>
            <?php foreach ($vta_nota_creditos as $vta_nota_credito): ?>
                <div class="par detalle">
                    <div class="label">
                        <?php Gral::_echo($vta_nota_credito->getCodigo()); ?> - 
                        <?php Gral::_echo(Gral::getFechaToWEB($vta_nota_credito->getFechaEmision())); ?> - 
                        <?php Gral::_echo($vta_nota_credito->getPersonaDescripcion()); ?> - 
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="info-comprobante-uno">
            <!-- Notas de Debito -->
            <div class="par <?php echo (count($vta_nota_debitos) > 0 ) ? 'sin-cae' : ''; ?>">
                <div class="label">
                    <?php Lang::_lang("Notas de Debito sin CAE"); ?>
                </div>
                <div class="dato">
                    <?php Gral::_echo(count($vta_nota_debitos)); ?>
                </div>
            </div>
            <?php foreach ($vta_nota_debitos as $vta_nota_debito): ?>
                <div class="par detalle">
                    <div class="label">
                        <?php Gral::_echo($vta_nota_debito->getCodigo()); ?> - 
                        <?php Gral::_echo(Gral::getFechaToWEB($vta_nota_debito->getFechaEmision())); ?> - 
                        <?php Gral::_echo($vta_nota_debito->getPersonaDescripcion()); ?> - 
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="info-comprobante-uno">
            <div class="par <?php echo (count($arr_nro_comprobantes_inexistentes_factura) > 0 ) ? 'sin-cae' : ''; ?>">
                <div class="label">
                    Facturas para Atender (Salteadas o Duplicadas)
                </div>
                <div class="dato">
                    <?php Gral::_echo(count($arr_nro_comprobantes_inexistentes_factura)); ?>
                </div>
            </div>

            <?php foreach ($arr_nro_comprobantes_inexistentes_factura as $arr_factura): ?>
                <div class="par detalle">
                    <div class="label">
                        <?php Gral::_echo($arr_factura['mensaje']); ?> 
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="info-comprobante-uno">
            <div class="par <?php echo (count($arr_nro_comprobantes_inexistentes_nota_credito) > 0 ) ? 'sin-cae' : ''; ?>">
                <div class="label">
                    Notas de Credito para Atender (Salteadas o Duplicadas)
                </div>
                <div class="dato">
                    <?php Gral::_echo(count($arr_nro_comprobantes_inexistentes_nota_credito)); ?>
                </div>
            </div>

            <?php foreach ($arr_nro_comprobantes_inexistentes_nota_credito as $arr_nota_credito): ?>
                <div class="par detalle">
                    <div class="label">
                        <?php Gral::_echo($arr_nota_credito['mensaje']); ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="info-comprobante-uno">
            <div class="par <?php echo (count($arr_nro_comprobantes_inexistentes_nota_debito) > 0 ) ? 'sin-cae' : ''; ?>">
                <div class="label">
                    Notas de Debito para Atender (Salteadas o Duplicadas)
                </div>
                <div class="dato">
                    <?php Gral::_echo(count($arr_nro_comprobantes_inexistentes_nota_debito)); ?>
                </div>
            </div>

            <?php foreach ($arr_nro_comprobantes_inexistentes_nota_debito as $arr_nota_debito): ?>
                <div class="par detalle">
                    <div class="label">
                        <?php Gral::_echo($arr_nota_debito['mensaje']); ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>

<script>
    $(function ($) {
        setInitWidgetControlComprobantesSinCAE();
    });

    function setInitWidgetControlComprobantesSinCAE()
    {
        setClickControlComprobantesSinCAEBtnBuscar();
    }

    function setClickControlComprobantesSinCAEBtnBuscar()
    {
        $("#widget_comprobantes_sin_cae_btn_buscar").unbind();
        $("#widget_comprobantes_sin_cae_btn_buscar").click(function ()
        {
            var elem = $(this);
            var form = $(this).parents('form');
            $.ajax(
                    {
                        type: 'GET',
                        url: "gen_widget/CONTROL_COMPROBANTES_SIN_CAE/index.php",
                        data: form.serialize() + "&filtrar=1",
                        dataType: "html",
                        beforeSend: function (objeto) {
                            //elem.parents('#cuerpo_widget_CONTROL_COMPROBANTES_SIN_CAE .contenedor').html(img_loading);
                        },
                        success: function (data) {
                            elem.parents('#cuerpo_widget_CONTROL_COMPROBANTES_SIN_CAE .contenedor').html(data);
                        },
                        error: function (objeto, quepaso, otroobj) {
                            //alert("errorx "+ objeto.status);
                        }
                    });
        });
    }

</script>