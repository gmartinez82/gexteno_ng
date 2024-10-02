<?php
include_once '_autoload.php';
$user = UsUsuario::autenticado();

$widget_key            = 'prv_proveedor_x_cantidad_bar';
$widget_codigo         = 'WIDGET_HOME_PRV_PROVEEDOR_X_CANTIDAD_BAR';
$widget_key_camelizado = Gral::setDbCamelizar($widget_key, '_');

$filtrar = Gral::getVars(Gral::VARS_GET, 'filtrar', 0);
if ($filtrar)
{
    $txt_cantidad = Gral::getVars(Gral::VARS_GET, 'widget_'.$widget_key.'_txt_cantidad', 10);
    $widget_cmb_ins_stock_resumen_tipo_estado_requiere_reabastecimiento = Gral::getVars(Gral::VARS_GET, 'widget_'.$widget_key.'_cmb_ins_stock_resumen_tipo_estado_requiere_reabastecimiento', -1);
    $widget_cmb_prv_categoria_id = Gral::getVars(Gral::VARS_GET, 'widget_'.$widget_key.'_cmb_prv_categoria_id', 0);
    $widget_cmb_pan_panol_id = Gral::getVars(Gral::VARS_GET, 'widget_'.$widget_key.'_cmb_pan_panol_id', 0);
    $widget_cmb_ins_clasificacion_id = Gral::getVars(Gral::VARS_GET, 'widget_'.$widget_key.'_cmb_ins_clasificacion_id', 0);
    $widget_cmb_ins_etiqueta_id = Gral::getVars(Gral::VARS_GET, 'widget_'.$widget_key.'_cmb_ins_etiqueta_id', 0);
}
else
{
    $txt_cantidad = 15;
    $widget_cmb_ins_stock_resumen_tipo_estado_requiere_reabastecimiento = 1;
    $widget_cmb_pan_panol_id = 1;
}

$arr_widget                 = GenWidget::getWidgetPrvProveedorXCantidadBar($txt_cantidad, $widget_cmb_ins_stock_resumen_tipo_estado_requiere_reabastecimiento, $widget_cmb_prv_categoria_id, $widget_cmb_pan_panol_id, $widget_cmb_ins_clasificacion_id, $widget_cmb_ins_etiqueta_id);
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
    <strong>Proveedores que requieren pedido</strong> - En el grafico se observa un ranking de proveedores que requieren pedido en funcion de la cantidad de productos que tengna vinculados y se encuentran en un estado stock que requiere pedido.
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
                            labelString: 'Proveedores',
                            fontSize: 12, //tamaño letra
                            fontColor: '#000000'//color del label del eje X
                        },
                        ticks:
                        {
                            display: true, //muestra los labels del eje X
                            autoSkip: false,
                            fontSize: 10,
                            maxRotation: 30,
                            minRotation: 30
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