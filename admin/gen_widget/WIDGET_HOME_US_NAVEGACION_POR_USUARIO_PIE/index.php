<?php
include_once '_autoload.php';
$user = UsUsuario::autenticado();

$widget_key = 'us_navegacion_por_usuario_pie';
$widget_codigo = 'WIDGET_HOME_US_NAVEGACION_POR_USUARIO_PIE';
$widget_key_camelizado = Gral::setDbCamelizar($widget_key, '_');

$filtrar = Gral::getVars(Gral::VARS_GET, 'filtrar', 0);
if ($filtrar) {
    $txt_desde = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_txt_desde', '');
    $txt_hasta = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_txt_hasta', '');
    $txt_hora_desde = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_txt_hora_desde', '');
    $txt_hora_hasta = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_txt_hora_hasta', '');
    $cmb_pagina = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_pagina', '');
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

$arr_widget = GenWidget::getWidgetUsNavegacionPorUsuarioPie($txt_desde, $txt_hasta, $txt_hora_desde, $txt_hora_hasta, $cmb_pagina, $cmb_grupo_id, $txt_cantidad);
//Gral::prr($arr_widget);

$arr_cantidad_json = json_encode($arr_widget['arr_cantidad']);
$arr_dato_descripcion_json = json_encode($arr_widget['arr_dato_descripcion']);
$arr_dato_color_json = json_encode($arr_widget['arr_dato_color']);
$total = $arr_widget['total'];
?>

<style>

</style>

<div class="buscador">
    <?php include "parts/buscador.php"; ?>
</div>

<div class="subtitulo">
    Representa la <strong>cantidad total de pantallas</strong> (en porcentaje) entre el <strong><?php echo Gral::getFechaToWEB($txt_desde) ?> y <?php echo Gral::getFechaToWEB($txt_hasta) ?></strong> diferenciado por usuario.
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

    var total_<?php echo $widget_key ?> = <?php echo $total; ?>;
    var config_<?php echo $widget_key ?> =
            {
                type: 'pie',
                data:
                        {
                            datasets: [{
                                    data: <?php echo $arr_cantidad_json; ?>,
                                    backgroundColor: <?php echo $arr_dato_color_json; ?>
                                }],
                            labels: <?php echo $arr_dato_descripcion_json; ?>
                        },
                options:
                        {
                            responsive: true,
                            maintainAspectRatio: true,
                            aspectRatio: aspectRatio,
                            title: {
                                display: true,
                                text: '',
                                position: 'bottom'
                            },
                            legend: {
                                display: true,
                                text: <?php echo $arr_dato_descripcion_json; ?>,
                                labels: {
                                    fontColor: 'rgb(100, 100, 100)'
                                },
                                position: 'left'
                            },
                            animation:
                                    {
                                        duration: 1200,
                                        easing: "easeOutQuart",
                                        onComplete: function ()
                                        {
                                            var ctx = this.chart.ctx;
                                            ctx.font = '12px LatoRegular, Helvetica,sans-serif';//20
                                            ctx.textAlign = 'center';
                                            ctx.textBaseline = 'bottom';
                                            this.data.datasets.forEach(function (dataset)
                                            {
                                                for (var i = 0; i < dataset.data.length; i++)
                                                {
                                                    var m = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model,
                                                            t = dataset._meta[Object.keys(dataset._meta)[0]].total_<?php echo $widget_key ?>,
                                                            mR = m.innerRadius + (m.outerRadius - m.innerRadius) / 1.3, //2
                                                            sA = m.startAngle,
                                                            eA = m.endAngle,
                                                            mA = sA + (eA - sA) / 2,
                                                            x = mR * Math.cos(mA),
                                                            y = mR * Math.sin(mA);
                                                    ctx.fillStyle = '#000';

                                                    var percent = dataset.data[i] / total_<?php echo $widget_key ?> * 100;
                                                    percent = percent.toFixed(0); // cantidad de decimales
                                                    var p = String(percent) + "%";

                                                    //var p = String(Math.round(dataset.data[i] / total_<?php echo $widget_key ?> * 100)) + "%";
                            
                                                    if (dataset.data[i] > 0)
                                                    {
                                                        ctx.fillText(p, m.x + x, m.y + y + 5);
                                                    }
                                                }
                                            });
                                        }
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
                            setInit();
                        },
                        error: function (objeto, quepaso, otroobj) {
                            //alert("errorx "+ objeto.status);
                        }
                    });
        });
    }
</script>
