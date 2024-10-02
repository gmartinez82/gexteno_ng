<?php
include_once '_autoload.php';
$user = UsUsuario::autenticado();

$widget_key = 'us_navegacion_paginas_visitadas_bar';
$widget_codigo = 'WIDGET_HOME_US_NAVEGACION_PAGINAS_VISITADAS_BAR';
$widget_key_camelizado = Gral::setDbCamelizar($widget_key, '_');

$filtrar = Gral::getVars(Gral::VARS_GET, 'filtrar', 0);
if ($filtrar) {
    $txt_desde = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_txt_desde', '');
    $txt_hasta = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_txt_hasta', '');
    $txt_hora_desde = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_txt_hora_desde', '');
    $txt_hora_hasta = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_txt_hora_hasta', '');
    $cmb_usuario_id = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_usuario_id', '');
    $cmb_grupo_id = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_grupo_id', '');
    $txt_cantidad = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_txt_cantidad', 10);

    $txt_desde = Gral::getFechaToDb($txt_desde);
    $txt_hasta = Gral::getFechaToDb($txt_hasta);
} else {
    // ---------------------------------------------------------------------
    // se determinan rango de fechas del reporte (por default)
    // ---------------------------------------------------------------------
    $txt_desde = '2020-01-01';
    $txt_hasta = '2020-10-01';
    $txt_desde = date('Y-m-01'); // desde el primer dia del mes
    $txt_hasta = Date::sumarDias(date('Y-m-d'), 0);

    // si el dia del mes es menor a 3 se envia reporte del mes anterior
    if ((int) date('d') < 4) {
        $txt_desde = Date::getPrimeraFechaMesAnterior();
        $txt_hasta = Date::getUltimaFechaMesAnterior();
    }
    $txt_desde = date('Y-m-d');
    $txt_hasta = date('Y-m-d');
    // ---------------------------------------------------------------------
    
    // ---------------------------------------------------------------------
    // se determinan rango de horas del reporte (por default)
    // ---------------------------------------------------------------------
    $txt_hora_desde = '00:00';
    $txt_hora_hasta = '23:59';
    // ---------------------------------------------------------------------
    $txt_cantidad = 10;    
}

$arr_widget = GenWidget::getWidgetUsNavegacionPaginasVisitadasBar($txt_desde, $txt_hasta, $txt_hora_desde, $txt_hora_hasta, $cmb_usuario_id, $cmb_grupo_id, $txt_cantidad);
//Gral::prr($arr_widget);

$arr_linea_dataset_json = json_encode($arr_widget['arr_linea_dataset']);
$arr_dato_descripcions_json = json_encode($arr_widget['arr_descripcion']);
$graph_yAxes_max = $arr_widget['graph_yAxes_max'];
$graph_yAxes_step = $arr_widget['graph_yAxes_step'];
?>

<div class="buscador">
<?php include "parts/buscador.php"; ?>
</div>

<div class="subtitulo">
    Representa las <strong>pantallas mas visitadas</strong> entre el <strong><?php echo Gral::getFechaToWEB($txt_desde) ?> y <?php echo Gral::getFechaToWEB($txt_hasta) ?></strong> discriminado por usuario.
</div>

<div class="datos">

    <div class="loading"></div>
    <!------------  GRAFICO  -------------->
    <canvas id="canvas_<?php echo $widget_key ?>" class="canvas"></canvas>

</div>

<script>
    // --------------------------------------------------------------------------
    //Esto se utiliza solamente para la visualizacion correcta en portrait para app y landscape cuando no es app.
    // --------------------------------------------------------------------------
    var aspectRatio = (window.innerHeight > window.innerWidth) ? 1 : 2;

    var config_<?php echo $widget_key ?> =
            {
                type: 'bar',
                data:
                        {
                            labels: <?php echo $arr_dato_descripcions_json ?>,
                            datasets: <?php echo $arr_linea_dataset_json ?>
                        },
                options:
                        {
                            responsive: true,
                            maintainAspectRatio: true,
                            aspectRatio: aspectRatio,
                            legend:
                                    {
                                        display: false //anula la descripcion en un rectangulo que no forma parte de las barras
                                    },
                            tooltips:
                                    {
                                        mode: 'index', //Si no se pone nada ('') no pone tooltip
                                        intersect: true,
                                        backgroundColor: '#000000',
                                    },
                            title: {
                                display: true,
                                text: ''
                            },
                            scales:
                                    {
                                        xAxes: [{
                                                stacked: true,
                                                scaleLabel: {
                                                    display: true,
                                                    labelString: 'Paginas',
                                                    fontSize: 12, //tamaño letra
                                                    fontColor: '#000000'//color del label del eje X
                                                },
                                                 ticks:
                                                 {
                                                 display: true, //muestra los labels del eje X
                                                 autoSkip: false,
                                                 maxRotation: 45,
                                                 minRotation: 45
                                                 }
                                            }],
                                        yAxes: [{
                                                stacked: true,
                                                scaleLabel: {
                                                    display: true, //muestra los labels del eje Y
                                                    labelString: 'Cantidad',
                                                    fontSize: 12, //tamaño letra
                                                    fontColor: '#000000'//color del label del eje y
                                                },
                                                ticks:
                                                        {
                                                            display: true,
                                                            min: 0,
                                                            //max: <?php echo $graph_yAxes_max ?>,
                                                            //stepSize: <?php echo $graph_yAxes_step ?>,
                                                            beginAtZero: false,
                                                            callback: function (value, index, values) {
                                                                return value.toLocaleString();
                                                            }
                                                        }
                                            }]
                                    }
                        }
            };

    $(function ($)
    {
        var ctx = document.getElementById("canvas_<?php echo $widget_key ?>").getContext("2d");
        window.myLine = new Chart(ctx, config_<?php echo $widget_key ?>);

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
                            setInit();
                        },
                        error: function (objeto, quepaso, otroobj) {
                            //alert("errorx "+ objeto.status);
                        }
                    });
        });
    }
</script>