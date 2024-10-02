<?php
include_once '_autoload.php';
$user = UsUsuario::autenticado();

$widget_key            = 'ins_insumo_x_cantidad_bar';
$widget_codigo         = 'WIDGET_HOME_INS_INSUMO_X_CANTIDAD_BAR';
$widget_key_camelizado = Gral::setDbCamelizar($widget_key, '_');

$filtrar = Gral::getVars(Gral::VARS_GET, 'filtrar', 0);
if ($filtrar)
{
    $txt_desde              = Gral::getVars(Gral::VARS_GET, 'widget_'.$widget_key.'_txt_desde', '');
    $txt_hasta              = Gral::getVars(Gral::VARS_GET, 'widget_'.$widget_key.'_txt_hasta', '');
    $cmb_ins_etiqueta_id    = Gral::getVars(Gral::VARS_GET, 'widget_'.$widget_key.'_cmb_ins_etiqueta_id', 0);
    $cmb_ins_tipo_insumo_id = Gral::getVars(Gral::VARS_GET, 'widget_'.$widget_key.'_cmb_ins_tipo_insumo_id', 0);
    $txt_importe_desde      = Gral::getVars(Gral::VARS_GET, 'widget_'.$widget_key.'_txt_importe_desde', 1000);
    $txt_importe_hasta      = Gral::getVars(Gral::VARS_GET, 'widget_'.$widget_key.'_txt_importe_hasta', 5000);
    $txt_cantidad           = Gral::getVars(Gral::VARS_GET, 'widget_'.$widget_key.'_txt_cantidad', 10);
    
    $txt_importe_desde = Gral::getImporteDesdePriceFormatToDB($txt_importe_desde);
    $txt_importe_hasta = Gral::getImporteDesdePriceFormatToDB($txt_importe_hasta);
    
    $desde = Gral::getFechaToDb($txt_desde);
    $hasta = Gral::getFechaToDb($txt_hasta);
}
else
{
    // ---------------------------------------------------------------------
    // se determinan rango de fechas del reporte (por default)
    // ---------------------------------------------------------------------
    $desde = '2019-10-01';
    $hasta = '2019-10-03';
    $desde = date('Y-m-01'); // desde el primer dia del mes
    $hasta = Date::sumarDias(date('Y-m-d'), 0);
    
    $txt_importe_desde = 100;
    $txt_importe_hasta = 500;
    
    $txt_cantidad = 15;
    
    // si el dia del mes es menor a 3 se envia reporte del mes anterior
    if ((int) date('d') < 4){
        $desde = Date::getPrimeraFechaMesAnterior();
        $hasta = Date::getUltimaFechaMesAnterior();
    }
    // ---------------------------------------------------------------------    
}

$arr_widget                 = GenWidget::getWidgetInsInsumoCantidadBar($desde, $hasta, $txt_cantidad, $cmb_ins_etiqueta_id, $cmb_ins_tipo_insumo_id, $txt_importe_desde, $txt_importe_hasta);
//Gral::prr($arr_widget);
$arr_linea_dataset_json     = json_encode($arr_widget['arr_linea_dataset']);
$arr_dato_descripcions_json = json_encode($arr_widget['arr_descripcion']);
$graph_yAxes_max            = $arr_widget['graph_yAxes_max'];
$graph_yAxes_step           = $arr_widget['graph_yAxes_step'];

?>

<div class="buscador">
    <?php include "parts/buscador.php"; ?>
</div>

<div class="subtitulo">
    <strong>Insumos Vendidos entre el <?php echo Gral::getFechaToWEB($desde) ?> y <?php echo Gral::getFechaToWEB($hasta) ?>.</strong>
    Se consideran OV que hayan sido aprobadas, no necesariamente facturadas.
</div>

<div class="datos">

    <div class="loading"></div>
    <!------------  GRAFICO  -------------->
    <canvas id="canvas_<?php echo $widget_key ?>" class="canvas"></canvas>

</div>

<script>
    
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
            legend:
            {
                display: false //anula la descripcion en un rectangulo que no forma parte de las barras
            },    
            tooltips:
            {
                mode: 'index',//Si no se pone nada ('') no pone tooltip
                intersect: true,
                backgroundColor: '#000000',
                //xAlign: 'left'
                //yAlign: 'bottom'
                //bodyFontColor: '#393f5b'
                //bodyFontSize: 12,
                //displayColors: false,
                //bodySpacing: 10,
                //intersect: false,
                //bodyFontStyle: 'bold',
                //xPadding: 15,
                //yPadding: 15,
                /*style: {
                    zIndex: 99999
                }*/
            },
            title:{
                    display: true,
                    text:''
                  },
            scales:
            {
                xAxes: [{
                        stacked: true,
                        /*gridLines: {
                            display: true,
                            color: "#6e6e6e26",
                            padding: 0,
                        },*/
                        
                        scaleLabel: {
                            display: true,
                            labelString: 'Insumos',
                            fontSize: 12, //tamaño letra
                            fontColor: '#000000'//color del label del eje X
                        },
                        ticks:
                        {
                            display: false, //muestra los labels del eje X
                            autoSkip: false,
                            maxRotation: 90,
                            minRotation: 90
                        }
                    }],
                yAxes: [{
                        stacked: true,
                        /*gridLines: {
                            display: false,
                            color: "#6e6e6e26",

                        },*/
                        
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
            }/*,
            animation:
            {
                duration: 1200,
                easing: "easeOutQuart",
                onComplete: function ()
                {
                    var ctx          = this.chart.ctx;
                    ctx.font         = '10px LatoRegular, Helvetica,sans-serif';
                    ctx.textAlign    = 'center';
                    ctx.textBaseline = 'bottom';
                    
                    // ---------------------------------------------------------------------
                    //Se recorre el dataset para poder mostrar datos al top de cada Bar
                    // ---------------------------------------------------------------------
                    var chartInstance = this.chart;
                    var var_x = 0;
                    var var_y = 0;
                    this.data.datasets.forEach(function (dataset, i)
                    {
                        var meta = chartInstance.controller.getDatasetMeta(i);//se obtiene el data set
                        var data = dataset.data[i];
                        console.log(meta);
                        if (typeof meta.data[i] !== 'undefined')
                        {
                            // ---------------------------------------------------------------------
                            // Requerido para el esquema NO SIMPLE de implementacion.
                            // ---------------------------------------------------------------------
                            //var_x = meta.data[i]._model.x;
                            //var_y = meta.data[i]._model.y;
                            //ctx.fillText(data, var_x,  var_y - 5);
                            //var_x = var_x + 101.4;
                            
                            // ---------------------------------------------------------------------
                            // Requerido para el esquema SIMPLE de implementacion.
                            // Iterar el meta para poder acceder a x e y pero a la vez accediendo con el indice i al dataset de datos
                            // ---------------------------------------------------------------------
                            meta.data.forEach(function (bar, i)
                            {
                                var data = dataset.data[i];
                                ctx.fillText(data, bar._model.x, bar._model.y);//ctx.fillText(data, bar._model.x, 280);
                            });
                        }
                    });
                }
            }
            */
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