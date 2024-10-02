<?php
include_once '_autoload.php';
$user = UsUsuario::autenticado();

$widget_key = 'gral_sucursal_valoracion_timeline';
$widget_codigo = 'WIDGET_HOME_' . strtoupper($widget_key);
$widget_key_camelizado = Gral::setDbCamelizar($widget_key, '_');

$filtrar = Gral::getVars(Gral::VARS_GET, 'filtrar', 0);
if ($filtrar) {
    $txt_desde = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_txt_desde', '', Gral::TIPO_STRING);
    $txt_hasta = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_txt_hasta', '', Gral::TIPO_STRING);
    $cmb_gral_sucursal_id = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_gral_sucursal_id', 0, Gral::TIPO_INTEGER);
    $cmb_gral_sucursal_tipo_id = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_gral_sucursal_tipo_id', 0, Gral::TIPO_INTEGER);
    
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
    // ---------------------------------------------------------------------
    
    $cmb_gral_sucursal_id = 0;
    $cmb_gral_sucursal_tipo_id = GralSucursalTipo::getGralSucursalTipoPorDefault()->getId();
}

// -----------------------------------------------------------------------------
// se determina el tipo de periodicidad
// -----------------------------------------------------------------------------
$diferencia_tiempo = Date::getDiferenciaTiempo('d', $txt_desde, $txt_hasta);
if($diferencia_tiempo >= 60){
    $periodicidad = Date::PERIODICIDAD_MENSUAL;
}else{
    $periodicidad = Date::PERIODICIDAD_DIARIO;
}

$arr_widget = GenWidget::getWidgetGralSucursalValoracionTimeline($periodicidad, $txt_desde, $txt_hasta, $cmb_gral_sucursal_id, $cmb_gral_sucursal_tipo_id);
//Gral::prr($arr_widget);

$arr_resumens = GenWidget::getWidgetGralSucursalValoracionTimelineArrayDatos($txt_desde, $txt_hasta, $cmb_gral_sucursal_id, $cmb_gral_sucursal_tipo_id);
//Gral::prr($arr_resumens);

$arr_linea_dataset_json     = json_encode($arr_widget['arr_linea_dataset']);
$arr_dato_descripcions_json = json_encode($arr_widget['arr_descripcion']);
$arr_fechas_json         = json_encode($arr_widget['arr_fechas']);
$arr_valores_lineas_timeline_json = json_encode($arr_widget['arr_valores_lineas_timeline']);
$arr_cantidad_x_fecha     = json_encode($arr_widget['arr_cantidad_x_fecha']);

?>

<div class="buscador">
    <?php include "parts/buscador.php"; ?>
</div>

<div class="subtitulo">
    Representa la valoracion de sucursales entre el <?php echo Gral::getFechaToWEB($txt_desde) ?> y <?php echo Gral::getFechaToWEB($txt_hasta) ?>.<br />
</div>

<div class="datos">
    <div class="loading"></div>   
    
    <div class="datos-canvas" style="display: inline-block; width: 65%;">
        <!------------  GRAFICO  -------------->
        <canvas id="canvas_<?php echo $widget_key ?>" class="canvas"></canvas>
    </div>
    
    <?php if ($arr_resumens) { ?>
    <div class="datos-tabla" style="display: inline-block; width: 33%; background-color: transparent;">
        <?php include "bloque_resumen_detalle.php" ?>
    </div>
    <?php } ?>
</div>

<script>
    
    var config_<?php echo $widget_key ?> = {
        type: 'line',
        data: {
            labels: <?php echo $arr_dato_descripcions_json ?>,
            datasets: <?php echo $arr_linea_dataset_json ?>
        },
        options: {
            responsive: true,
            tooltips: {
                mode: 'index',
                intersect: false,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                        return datasetLabel + ': ' + number_format(tooltipItem.yLabel, 2);
                    }
                }
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            scales: {
                xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Fechas'
                        },
                        ticks: {
                            autoSkip: false,
                            maxRotation: 90,
                            minRotation: 90
                        }
                    }],
                yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Puntos Promedio'
                        },
                        ticks:
                        {
                            min: 0,
                            beginAtZero: false,
                            callback: function (value, index, values) {
                                return value.toLocaleString();
                            }
                        }
                    }]
            }
        }
    };

    $(function ($) {
        var ctx = document.getElementById("canvas_<?php echo $widget_key ?>").getContext("2d");
        window.myLine = new Chart(ctx, config_<?php echo $widget_key ?>);
        
        setInitWidget<?php echo $widget_key_camelizado; ?>();
    });
    
    function setInitWidget<?php echo $widget_key_camelizado; ?>()
    {
        setClick<?php echo $widget_key_camelizado; ?>BtnBuscar();
    }
    
    function setClick<?php echo $widget_key_camelizado; ?>BtnBuscar()
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
