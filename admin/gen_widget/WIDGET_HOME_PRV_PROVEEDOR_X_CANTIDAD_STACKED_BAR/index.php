<?php
include_once '_autoload.php';
$user = UsUsuario::autenticado();

$widget_key            = 'prv_proveedor_x_cantidad_stacked_bar';
$widget_codigo         = 'WIDGET_HOME_PRV_PROVEEDOR_X_CANTIDAD_STACKED_BAR';
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
    $cmb_visualizacion = Gral::getVars(Gral::VARS_GET, 'widget_'.$widget_key.'_cmb_visualizacion', '');
    $widget_cmb_orden = Gral::getVars(Gral::VARS_GET, 'widget_'.$widget_key.'_cmb_orden', 0);
}
else
{
    $txt_cantidad = 15;
    $widget_cmb_ins_stock_resumen_tipo_estado_requiere_reabastecimiento = 1;
    $widget_cmb_pan_panol_id = 1;
    $widget_cmb_prv_categoria_id = 1;
    $cmb_visualizacion = GralSiNo::GRAL_SINO_CP_PORCENTAJE;
    $widget_cmb_orden = InsStockResumenTipoEstado::getOxCodigo(InsStockResumenTipoEstado::TIPO_MENOR_MINIMO)->getId();
}

$arr_widget                 = GenWidget::getWidgetPrvProveedorXCantidadStackedBar($txt_cantidad, $widget_cmb_ins_stock_resumen_tipo_estado_requiere_reabastecimiento, $widget_cmb_prv_categoria_id, $widget_cmb_pan_panol_id, $widget_cmb_ins_clasificacion_id, $widget_cmb_ins_etiqueta_id, $cmb_visualizacion, $widget_cmb_orden);
//Gral::prr($arr_widget);
$arr_linea_dataset_json     = json_encode($arr_widget['arr_linea_dataset']);
$arr_dato_descripcions_json = json_encode($arr_widget['arr_descripcion']);

?>

<div class="buscador">
    <?php include "parts/buscador.php"; ?>
</div>

<div class="subtitulo">
    <strong>Estado de Stock de Productos de Proveedores</strong> - En el grafico se observa la situacion de stock de los proveedores en funcion a la relacion con los productos que tienen vinculados.
</div>

<div class="datos">

    <div class="loading"></div>
    
    <!------------  GRAFICO  -------------->
    <canvas id="canvas_<?php echo $widget_key ?>" class="canvas"></canvas>

</div>

<script>
    var config_<?php echo $widget_key ?> = 
    {
        type: 'horizontalBar',
        data: {
           labels: <?php echo $arr_dato_descripcions_json ?>,
           datasets:<?php echo $arr_linea_dataset_json ?>
        },
        options: {
           responsive: true,
           legend: {
              position: 'right' // place legend on the right side of chart
           },
           scales: {
              xAxes: [{
                 stacked: true,
                 scaleLabel: {
                     display: true,
                     labelString: '<?php echo $cmb_visualizacion ?>',
                     fontColor: '#000000'
                 },
                 ticks:
                 {
                     display: true, //muestra los labels del eje X
                     autoSkip: false,
                     fontSize: 10,
                     maxRotation: 30,
                     minRotation: 30,
                     <?php if ($cmb_visualizacion == GralSiNo::GRAL_SINO_CP_PORCENTAJE) { ?>
                         min: 0,
                         max: 100,
                     <?php } ?>                              
                 }
              }],
              yAxes: [{
                 stacked: true,
                 scaleLabel: {
                     display: true,
                     labelString: 'Proveedores',
                     fontColor: '#000000'
                 },
                 ticks:
                 {
                     display: true, //muestra los labels del eje Y
                     autoSkip: false,
                     fontSize: 9,
                     //maxRotation: 30,
                     //minRotation: 30
                 }
              }]
           }
        }
   };

$(function ($){
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



