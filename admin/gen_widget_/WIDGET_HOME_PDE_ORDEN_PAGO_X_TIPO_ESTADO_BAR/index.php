<?php
include_once '_autoload.php';
$user = UsUsuario::autenticado();

$widget_key            = 'pde_orden_pago_x_tipo_estado_bar';
$widget_codigo         = 'WIDGET_HOME_PDE_ORDEN_PAGO_X_TIPO_ESTADO_BAR';
$widget_key_camelizado = Gral::setDbCamelizar($widget_key, '_');

$filtrar = Gral::getVars(Gral::VARS_GET, 'filtrar', 0);
if ($filtrar)
{
    $desde = Gral::getVars(Gral::VARS_GET, 'widget_'.$widget_key.'_txt_desde', '');
    $hasta = Gral::getVars(Gral::VARS_GET, 'widget_'.$widget_key.'_txt_hasta', '');
        
    $desde = Gral::getFechaToDb($desde);
    $hasta = Gral::getFechaToDb($hasta);
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
    
    // si el dia del mes es menor a 3 se envia reporte del mes anterior
    if ((int) date('d') < 4){
        $desde = Date::getPrimeraFechaMesAnterior();
        $hasta = Date::getUltimaFechaMesAnterior();
    }
    // ---------------------------------------------------------------------    
    
}

$arr_widget                 = GenWidget::getWidgetPdeOrdenPagoBar($desde, $hasta);

$arr_linea_dataset_json     = json_encode($arr_widget['arr_linea_dataset']);
$arr_dato_descripcions_json = json_encode($arr_widget['arr_descripcion']);
$graph_yAxes_max            = $arr_widget['graph_yAxes_max'];
$graph_yAxes_step           = $arr_widget['graph_yAxes_step'];

?>

<div class="buscador">
    <?php include "parts/buscador.php"; ?>
</div>

<div class="subtitulo">
    <strong>OP entre el <?php echo Gral::getFechaToWEB($desde) ?> y <?php echo Gral::getFechaToWEB($hasta) ?>.</strong>
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
                mode: '',
                intersect: false,
                
            },
            title:{
                    display:true,
                    text:''
                  },
            scales:
            {
                xAxes: [{
                        stacked: true,
                        
                        scaleLabel: {
                            display: true,
                            labelString: 'Estado',
                            fontColor: '#000000'
                        }
                    }],
                yAxes: [{
                        stacked: true,
                        
                        scaleLabel: {
                            display: true,
                            labelString: 'Cantidad',
                            fontColor: '#000000'
                        },
                        ticks:
                        {
                            min: 0,
                            //max: <?php echo $graph_yAxes_max ?>,
                            //stepSize: <?php echo $graph_yAxes_step ?>,
                            beginAtZero: false,
                            callback: function (value, index, values) {
                                return value.toLocaleString();
                            }
                        }
                    }]
            },
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
                        
                        var_x = meta.data[i]._model.x;
                        var_y = meta.data[i]._model.y;

                        // ---------------------------------------------------------------------
                        // No es necesario recorrer el BAR ya que el objeto meta contiene el datasets
                        // Si se le indica el indice se puede acceder al indice objeto _model y a las variables x e y requeridas. 
                        // Igual que se usa al recorrer en una nueva iteracion el BAR 
                        // ---------------------------------------------------------------------
                        /*meta.data.forEach(function (bar, i)
                        {
                            //var data = dataset.data[i];
                            //ctx.fillText(data, bar._model.x, bar._model.y - 5);
                        });*/
                        ctx.fillText(data, var_x,  var_y - 5);
                        var_x = var_x + 101.4;
                    });
                }
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
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("errorx "+ objeto.status);
                }
            });
        });
    }
</script>