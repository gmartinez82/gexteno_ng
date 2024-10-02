<?php
include_once '_autoload.php';
$user = UsUsuario::autenticado();

$filtrar = Gral::getVars(2, 'filtrar', 0);
if ($filtrar) {
    // ---------------------------------------------------------------------
    // se recuperan filtros elegidos pro el usuario
    // ---------------------------------------------------------------------
    $desde = Gral::getVars(2, 'widget_presupuestos_emitidos_txt_desde', '');
    $hasta = Gral::getVars(2, 'widget_presupuestos_emitidos_txt_hasta', '');
    $widget_presupuestos_emitidos_cmb_vta_vendedor_id = Gral::getVars(2, 'widget_presupuestos_emitidos_cmb_vta_vendedor_id', 0);


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
        $hasta = Date::getUltimaFechaMesAnterior();
    }
    // ---------------------------------------------------------------------    
    
    $widget_presupuestos_emitidos_cmb_vta_vendedor_id = 0;
}

// ---------------------------------------------------------------------
// se obtienen los datos
// ---------------------------------------------------------------------

$sql = "
            SELECT 
                vta_presupuesto.fecha, 
                count(CASE WHEN vta_presupuesto.estado = 1 THEN 1 ELSE null END) as cantidad_emitido,
                count(CASE WHEN vta_presupuesto_tipo_estado.codigo = 'APROBADO' THEN 1 ELSE null END) as cantidad_aprobado
            FROM
                vta_presupuesto
            LEFT JOIN vta_presupuesto_tipo_estado on vta_presupuesto_tipo_estado.id = vta_presupuesto.vta_presupuesto_tipo_estado_id
            WHERE TRUE
                AND vta_presupuesto.fecha BETWEEN '" . $desde . "' AND '" . $hasta . "'
                    ";

if ($widget_presupuestos_emitidos_cmb_vta_vendedor_id != 0) {
    $sql .= "
            AND vta_presupuesto.vta_vendedor_id = ".$widget_presupuestos_emitidos_cmb_vta_vendedor_id;
}

$sql.= "
            GROUP BY 
                vta_presupuesto.fecha
            ORDER BY
                vta_presupuesto.fecha ASC
            ;
        ";
$sql;
$resultado = pg_exec($connect, $sql);

$cons = new Consulta();
$cons->setSQL($sql);
$cons->execute();

$cantidad_maxima = 0;

$arr_fechas = array();
$arr_cantidad_aprobado = array();
$arr_linea_presupuestos_emitidas_x_vendedor = array();

while ($fila = pg_fetch_object($cons->getResultado())) {
    $fecha = $fila->fecha;
    $cantidad_emitido = $fila->cantidad_emitido;
    $cantidad_aprobado = $fila->cantidad_aprobado;

    // se calcula el tope para el grafico
    $cantidad_maxima = ($cantidad_emitido > $cantidad_maxima) ? $cantidad_emitido : $cantidad_maxima;

    $arr_fechas[] = Gral::getFechaToWeb($fecha);
    $arr_cantidad_emitido[] = $cantidad_emitido;
    $arr_cantidad_aprobado[] = $cantidad_aprobado;
}

//Gral::prr($arr_fechas);

$arr_fechas_json = json_encode($arr_fechas);
$graph_yAxes_max = (int) ($cantidad_maxima * 1.1);
$graph_yAxes_step = (int) ($graph_yAxes_max / 5);

// array con la info de la linea de aprobadas por afip
$arr_linea_presupuestos_emitidas[] = array(
    "label" => 'Presupuestos Emitidos',
    "backgroundColor" => '#02adf7',
    "borderColor" => '#02adf7',
    "data" => $arr_cantidad_emitido,
    "fill" => false,
);

// array con la info de la linea de aprobadas por afip
$arr_linea_presupuestos_emitidas[] = array(
    "label" => 'Presupuestos Aprobados',
    "backgroundColor" => '#1e8c18',
    "borderColor" => '#1e8c18',
    "data" => $arr_cantidad_aprobado,
    "fill" => false,
);

//Gral::prr($arr_linea_presupuestos_emitidas);

// se agregan al gran array que se envia al grafico
$arr_linea_presupuestos_emitidos_json = json_encode($arr_linea_presupuestos_emitidas);
?>

<style>

</style>

<div class="buscador">
    <?php include "parts/buscador.php"; ?>
</div>

<div class="subtitulo">
    Presupuestos emitidos entre el <?php echo Gral::getFechaToWEB($desde) ?> y <?php echo Gral::getFechaToWEB($hasta) ?>.<br />
    <strong>Mientras mayor nivel de convergencia tengan las lineas mayor cantidad de presupuestos emitidos son aprobados.</strong>
</div>

<div class="datos">

    <!------------  GRAFICO  -------------->
    <canvas id="canvas_presupuestos_emitidos"></canvas>

</div>

<script>
    var config_presupuestos_emitidos = {
        type: 'line',
        data: {
            labels: <?php echo $arr_fechas_json ?>,
            datasets: <?php echo $arr_linea_presupuestos_emitidos_json ?>
        },
        options: {
            responsive: true,
            tooltips: {
                mode: 'index',
                intersect: false,
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
                        }
                    }],
                yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Puntaje'
                        },
                        ticks: {
                            min: 0,
                            max: <?php echo $graph_yAxes_max ?>,
                            stepSize: <?php echo $graph_yAxes_step ?>
                        }
                    }]
            }
        }
    };
    $(function ($) {
        var ctx = document.getElementById("canvas_presupuestos_emitidos").getContext("2d");
        window.myLine = new Chart(ctx, config_presupuestos_emitidos);
    });
</script>                            


<script>
    $(function ($) {
        setInitWidgetPresupuestosEmitidos();
    });

    function setInitWidgetPresupuestosEmitidos()
    {
        setClickPresupuestosEmitidosBtnBuscar();
    }

    function setClickPresupuestosEmitidosBtnBuscar()
    {
        $("#widget_presupuestos_emitidos_btn_buscar").unbind();
        $("#widget_presupuestos_emitidos_btn_buscar").click(function ()
        {
            var elem = $(this);
            var form = $(this).parents('form');
            $.ajax(
                    {
                        type: 'GET',
                        url: "gen_widget/WIDGET_HOME_PRESUPUESTOS_TIMELINE/index.php",
                        data: form.serialize() + "&filtrar=1",
                        dataType: "html",
                        beforeSend: function (objeto) {
                            //elem.parents('#cuerpo_widget .contenedor').html(img_loading);
                        },
                        success: function (data) {
                            elem.parents('#cuerpo_widget_WIDGET_HOME_PRESUPUESTOS_TIMELINE .contenedor').html(data);
                        },
                        error: function (objeto, quepaso, otroobj) {
                            //alert("errorx "+ objeto.status);
                        }
                    });
        });
    }

</script>