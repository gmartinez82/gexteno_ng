<?php
include_once '_autoload.php';
$user = UsUsuario::autenticado();

$widget_key = 'fnd_caja_flujo_efectivo_timeline';
$widget_codigo = 'WIDGET_HOME_FND_CAJA_FLUJO_EFECTIVO_TIMELINE';
$widget_key_camelizado = Gral::setDbCamelizar($widget_key, '_');

$filtrar = Gral::getVars(Gral::VARS_GET, 'filtrar', 0);
if ($filtrar) {
    // ---------------------------------------------------------------------
    // se recuperan filtros elegidos pro el usuario
    // ---------------------------------------------------------------------
    $desde = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_txt_desde', '');
    $hasta = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_txt_hasta', '');
    $widget_cmb_gral_caja_id = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_gral_caja_id', 0);
    $widget_cmb_fnd_cajero_id = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_fnd_cajero_id', 0);
    $widget_cmb_fnd_caja_tipo_estado_id = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_fnd_caja_tipo_estado_id', 0);

    $desde = Gral::getFechaToDb($desde);
    $hasta = Gral::getFechaToDb($hasta);
} else {
    // ---------------------------------------------------------------------
    // se determinan rango de fechas del reporte (por default)
    // ---------------------------------------------------------------------
    $desde = '2019-01-01';
    $hasta = '2019-01-31';
    $desde = date('Y-m-01'); // desde el primer dia del mes
    $hasta = Date::sumarDias(date('Y-m-d'), 0);

    // si el dia del mes es menor a 3 se envia reporte del mes anterior
    if ((int) date('d') < 4) {
        $desde = Date::getPrimeraFechaMesAnterior();
        $hasta = Date::getUltimaFechaMesAnterior();
    }
    // ---------------------------------------------------------------------    
}

// -----------------------------------------------------------------------------
// se determina el tipo de periodicidad
// -----------------------------------------------------------------------------
$diferencia_tiempo = Date::getDiferenciaTiempo('d', $desde, $hasta);
if($diferencia_tiempo >= 60){
    $periodicidad = Date::PERIODICIDAD_MENSUAL;
}else{
    $periodicidad = Date::PERIODICIDAD_DIARIO;
}

$arr_widget = GenWidget::getWidgetFndCajaFlujoEfectivoTimeline($periodicidad, $desde, $hasta, $widget_cmb_gral_caja_id, $widget_cmb_fnd_cajero_id, $widget_cmb_fnd_caja_tipo_estado_id);
//Gral::prr($arr_widget);
$arr_linea_dataset_json     = json_encode($arr_widget['arr_linea_dataset']);
$arr_dato_descripcions_json = json_encode($arr_widget['arr_descripcion']);

$arr_fechas_json         = json_encode($arr_widget['arr_fechas']);
$arr_valores_lineas_timeline_json = json_encode($arr_widget['arr_valores_lineas_timeline']);
?>

<div class="buscador">
    <?php include "parts/buscador.php"; ?>
</div>

<div class="subtitulo">
    Calculado en base al flujo de efectivo en caja entre el <?php echo Gral::getFechaToWEB($desde) ?> y <?php echo Gral::getFechaToWEB($hasta) ?>.<br />
</div>

<div class="datos">

    <div class="loading"></div>
    <!------------  GRAFICO  -------------->
    <canvas id="canvas_<?php echo $widget_key ?>" class="canvas"></canvas>

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
                        return datasetLabel + ': $ ' + number_format(tooltipItem.yLabel, 2);
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
                            labelString: 'Flujo de Efectivo ($)'
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
