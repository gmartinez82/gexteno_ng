<?php
include_once '_autoload.php';
$user = UsUsuario::autenticado();

$filtrar = Gral::getVars(2, 'filtrar', 0);
if ($filtrar) {
    // ---------------------------------------------------------------------
    // se recuperan filtros elegidos pro el usuario
    // ---------------------------------------------------------------------
    $desde = Gral::getVars(2, 'widget_compras_vs_ventas_txt_desde', '');
    $hasta = Gral::getVars(2, 'widget_compras_vs_ventas_txt_hasta', '');


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

// ---------------------------------------------------------------------
// se obtienen los datos de COMPRAS y VENTAS usando las vistas
// ---------------------------------------------------------------------
$sql = "
        SELECT 
            CURRENT_DATE + i as fecha_emision,
            coalesce((select sum(pde_factura_importe.importe_total) from pde_factura JOIN pde_factura_importe ON pde_factura_importe.pde_factura_id = pde_factura.id where pde_factura.fecha_emision = CURRENT_DATE + i), 0) as importe_total_compras,
            coalesce((select sum(vta_factura_importe.importe_total) from vta_factura JOIN vta_factura_importe ON vta_factura_importe.vta_factura_id = vta_factura.id where vta_factura.fecha_emision = CURRENT_DATE + i), 0) as importe_total_ventas
        FROM generate_series(date '" . $desde . "'- CURRENT_DATE, date '" . $hasta . "' - CURRENT_DATE ) i
        ;
        ";
$sql = "
        SELECT 
            CURRENT_DATE + i as fecha_emision,
            coalesce((SELECT sum(pde_factura_importe.importe_total) FROM pde_factura JOIN pde_factura_importe ON pde_factura_importe.pde_factura_id = pde_factura.id WHERE pde_factura.fecha_emision = CURRENT_DATE + i AND pde_factura.pde_tipo_origen_factura_id = 1), 0) as importe_total_compras, -- FATURAS DE OC
            coalesce((SELECT sum(pde_factura_importe.importe_total) FROM pde_factura JOIN pde_factura_importe ON pde_factura_importe.pde_factura_id = pde_factura.id WHERE pde_factura.fecha_emision = CURRENT_DATE + i AND pde_factura.pde_tipo_origen_factura_id = 3), 0) as importe_total_gastos, -- FACTURAS DE GASTOS
            coalesce((SELECT sum(vta_factura_importe.importe_total_real) FROM vta_factura JOIN vta_factura_importe ON vta_factura_importe.vta_factura_id = vta_factura.id WHERE vta_factura.fecha_emision = CURRENT_DATE + i), 0) as importe_total_ventas, -- FACTURAS DE VENTA
            coalesce((SELECT sum(vta_ajuste_debe_importe.importe_total_real) FROM vta_ajuste_debe JOIN vta_ajuste_debe_importe ON vta_ajuste_debe_importe.vta_ajuste_debe_id = vta_ajuste_debe.id WHERE vta_ajuste_debe.fecha_emision = CURRENT_DATE + i), 0) as importe_total_ventas_z -- AJUSTES DE VENTA
        FROM generate_series(date '" . $desde . "'- CURRENT_DATE, date '" . $hasta . "' - CURRENT_DATE ) i
        ;
        ";
//Gral::echoSqlSentence($sql);
$resultado = pg_exec($connect, $sql);


$cons = new Consulta();
$cons->setSQL($sql);
$cons->execute();

$cantidad_maxima = 0;

$arr_fechas = array();
$arr_cantidad_aprobado_afip = array();
$arr_cantidad_saldado = array();
$arr_linea_compras_vs_ventas_x_vendedor = array();

while ($fila = pg_fetch_object($cons->getResultado())) {
    $fecha_emision = $fila->fecha_emision;

    $importe_total_compras = $fila->importe_total_compras;
    $importe_total_gastos = $fila->importe_total_gastos;
    $importe_total_ventas = $fila->importe_total_ventas;
    $importe_total_ventas_z = $fila->importe_total_ventas_z;

    //$arr_fechas[] = substr(Gral::getFechaToWeb($fecha_emision), 0, 5);
    $arr_fechas[] = Gral::getFechaToWeb($fecha_emision, 'INCLUIR_DIA_NOMBRE');
    $arr_importe_total_compras[] = $importe_total_compras;
    $arr_importe_total_gastos[] = $importe_total_gastos;
    $arr_importe_total_ventas[] = $importe_total_ventas;
    $arr_importe_total_ventas_z[] = $importe_total_ventas_z;

    $total_importe_total_compras += $importe_total_compras;
    $total_importe_total_gastos += $importe_total_gastos;
    $total_importe_total_ventas += $importe_total_ventas;
    $total_importe_total_ventas_z += $importe_total_ventas_z;
}

$arr_fechas_json = json_encode($arr_fechas);


// array con la info de la linea de aprobadas por afip
$arr_linea_compras_vs_ventas[] = array(
    "label" => 'Compras',
    "backgroundColor" => '#1e8c18',
    "borderColor" => '#1e8c18',
    "data" => $arr_importe_total_compras,
    "fill" => false,
);

// array con la info de la linea de aprobadas por afip
$arr_linea_compras_vs_ventas[] = array(
    "label" => 'Gastos',
    "backgroundColor" => '#9ed61a',
    "borderColor" => '#9ed61a',
    "data" => $arr_importe_total_gastos,
    "fill" => false,
);

// array con la info de la linea de aprobadas por afip
$arr_linea_compras_vs_ventas[] = array(
    "label" => 'Ventas',
    "backgroundColor" => '#02adf7',
    "borderColor" => '#02adf7',
    "data" => $arr_importe_total_ventas,
    "fill" => false,
);

// array con la info de la linea de aprobadas por afip
$arr_linea_compras_vs_ventas[] = array(
    "label" => 'Presupuestos',
    "backgroundColor" => '#013254',
    "borderColor" => '#013254',
    "data" => $arr_importe_total_ventas_z,
    "fill" => false,
);

// se agregan al gran array que se envia al grafico
$arr_linea_compras_vs_ventas_json = json_encode($arr_linea_compras_vs_ventas);
?>

<style>
    .widget-resumen{
        background-color: #ddd;
        padding: 5px;

        margin: 3px auto;
        width: 70%;
    }
    .widget-resumen .par{
        padding: 1px;
    }
    .widget-resumen .par .label{
        color: #666;
    }
    .widget-resumen .par .dato{
        background-color: #fff;
        font-weight: bold;
        font-size: 14px;
        color: #fff;
    }
    .widget-resumen .par.compras .dato{
        color: #1e8c18;
    }    
    .widget-resumen .par.gastos .dato{
        color: #9ed61a;
    }    
    .widget-resumen .par.ventas .dato{
        color: #02adf7;
    }    
    .widget-resumen .par.ventas-z .dato{
        color: #013254;
    }    
</style>

<div class="buscador">
    <?php include "parts/buscador.php"; ?>
</div>

<div class="subtitulo">
    Calculado en base a facturas de "Compras" y "Ventas" emitidas entre el <?php echo Gral::getFechaToWEB($desde) ?> y <?php echo Gral::getFechaToWEB($hasta) ?>.<br />
</div>

<div class="widget-resumen">
    <div class="par compras">
        <div class="label">Total Compras</div>
        <div class="dato"><?php Gral::_echoImp($total_importe_total_compras) ?></div>
    </div>
    <div class="par gastos">
        <div class="label">Total Gastos</div>
        <div class="dato"><?php Gral::_echoImp($total_importe_total_gastos) ?></div>
    </div>
    <div class="par ventas">
        <div class="label">Total Ventas</div>
        <div class="dato"><?php Gral::_echoImp($total_importe_total_ventas) ?></div>
    </div>
    <div class="par ventas-z">
        <div class="label">Total Presupuestos</div>
        <div class="dato"><?php Gral::_echoImp($total_importe_total_ventas_z) ?></div>
</div>
</div>

<div class="datos">

    <div class="loading"></div>
    
    <!------------  GRAFICO  -------------->
    <canvas id="canvas_compras_vs_ventas"></canvas>

</div>
<?php
/*
Viejo
labels: <?php echo $arr_fechas_json ?>,
            datasets: <?php echo $arr_linea_compras_vs_ventas_json ?>

Nuevo
labels: <?php echo $arr_dato_descripcions_json ?>,
            datasets: <?php echo $arr_linea_dataset_json ?>
*/
?>
<script>
    var config_compras_vs_ventas = {
        type: 'line',
        data: {
            labels: <?php echo $arr_fechas_json ?>,
            datasets: <?php echo $arr_linea_compras_vs_ventas_json ?>
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
                            labelString: 'Fechas del Rango Indicado'
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
                            labelString: 'Importe de Factura ($)'
                        },
                        ticks: {
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
    $(function ($) {
        var ctx = document.getElementById("canvas_compras_vs_ventas").getContext("2d");
        window.myLine = new Chart(ctx, config_compras_vs_ventas);
    });
</script>                            


<script>
    $(function ($) {
        setInitWidgetComprasVsVentas();
    });

    function setInitWidgetComprasVsVentas()
    {
        setClickComprasVsVentasBtnBuscar();
    }

    function setClickComprasVsVentasBtnBuscar()
    {
        $("#widget_compras_vs_ventas_btn_buscar").unbind();
        $("#widget_compras_vs_ventas_btn_buscar").click(function ()
        {
            var elem = $(this);
            var form = $(this).parents('form');
            $.ajax({
                type: 'GET',
                url: "gen_widget/WIDGET_HOME_COMPRAS_VS_VENTAS/index.php",
                data: form.serialize() + "&filtrar=1",
                dataType: "html",
                beforeSend: function (objeto) {
                    //elem.parents('#cuerpo_widget_WIDGET_HOME_COMPRAS_VS_VENTAS .contenedor').html(img_loading);
                elem.parents('.cuerpo_widget .contenedor').find('.loading').html(img_loading);
                elem.parents('.cuerpo_widget .contenedor').find('.canvas').hide();
            },
                success: function (data) {
                //elem.parents('#cuerpo_widget_WIDGET_HOME_COMPRAS_VS_VENTAS .contenedor').html(data);
                elem.parents('.cuerpo_widget .contenedor').html(data);
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("errorx "+ objeto.status);
                }
            });
        });
    }

</script>
