<?php
include_once '_autoload.php';
$user = UsUsuario::autenticado();

$widget_key            = 'facturas_emitidas';
$widget_codigo         = 'WIDGET_HOME_FACTURAS_EMITIDAS_TIMELINE';
$widget_key_camelizado = Gral::setDbCamelizar($widget_key, '_');

$filtrar = Gral::getVars(2, 'filtrar', 0);
if ($filtrar) {
    // ---------------------------------------------------------------------
    // se recuperan filtros elegidos pro el usuario
    // ---------------------------------------------------------------------
    $desde = Gral::getVars(2, 'widget_facturas_emitidas_txt_desde', '');
    $hasta = Gral::getVars(2, 'widget_facturas_emitidas_txt_hasta', '');
    $widget_cmb_vta_preventista_id   = Gral::getVars(Gral::VARS_GET, 'widget_'.$widget_key.'_cmb_vta_preventista_id', 0);
    $widget_cmb_vta_vendedor_id = Gral::getVars(Gral::VARS_GET, 'widget_'.$widget_key.'_cmb_vta_vendedor_id', 0);
    $widget_cmb_gral_sucursal_id   = Gral::getVars(Gral::VARS_GET, 'widget_'.$widget_key.'_cmb_gral_sucursal_id', 0);
    $widget_cmb_gral_actividad_id = Gral::getVars(Gral::VARS_GET, 'widget_'.$widget_key.'_cmb_gral_actividad_id', 0);
    $widget_cmb_gral_escenario_id = Gral::getVars(Gral::VARS_GET, 'widget_'.$widget_key.'_cmb_gral_escenario_id', 0);
    $widget_cmb_cli_cliente_id = Gral::getVars(Gral::VARS_GET, 'widget_'.$widget_key.'_cmb_cli_cliente_id', 0);


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

    $widget_cmb_vta_preventista_id = 0;
    $widget_facturas_emitidas_cmb_vta_preventista_id = 0;
    $widget_cmb_vta_vendedor_id = 0;
}

// ---------------------------------------------------------------------
// se obtienen los datos
// ---------------------------------------------------------------------

$sql = "
        SELECT 
            vta_factura.fecha_emision, 
            count(vta_factura.id) as cantidad_emitido,
            count(CASE WHEN vta_factura_tipo_estado.aprobado_afip = 1 THEN 1 ELSE null END) as cantidad_aprobado_afip,
            count(CASE WHEN vta_factura_tipo_estado.codigo = 'SALDADO' THEN 1 ELSE null END) as cantidad_saldado,
            sum(vta_factura_importe.importe_total) as importe_emitido,
            sum(CASE WHEN vta_factura_tipo_estado.aprobado_afip = 1 THEN vta_factura_importe.importe_total ELSE null END) as importe_aprobado_afip,
            sum(CASE WHEN vta_factura_tipo_estado.codigo = 'SALDADO' THEN vta_factura_importe.importe_total ELSE null END) as importe_saldado
        FROM
            vta_factura
            LEFT JOIN vta_factura_importe on vta_factura_importe.vta_factura_id = vta_factura.id
        LEFT JOIN vta_factura_tipo_estado on vta_factura_tipo_estado.id = vta_factura.vta_factura_tipo_estado_id
        LEFT JOIN gral_sucursal on gral_sucursal.id = vta_factura.gral_sucursal_id 
        LEFT JOIN cli_cliente on cli_cliente.id = vta_factura.cli_cliente_id
        LEFT JOIN gral_escenario on gral_escenario.id = vta_factura.gral_escenario_id
        LEFT JOIN gral_actividad on gral_actividad.id = gral_escenario.gral_actividad_id
        WHERE TRUE
            AND vta_factura.fecha_emision BETWEEN '" . $desde . "' AND '" . $hasta . "'
                ";

        if ($widget_cmb_vta_preventista_id != 0) {
            $sql .= "
                    AND vta_factura.vta_preventista_id = " . $widget_cmb_vta_preventista_id;
        }

        if ($widget_cmb_vta_vendedor_id != 0) {
            $sql .= "
                    AND vta_factura.vta_vendedor_id = " . $widget_cmb_vta_vendedor_id;
        }

        if ($widget_cmb_gral_sucursal_id != 0) {
            $sql .= " AND gral_sucursal.id = " . $widget_cmb_gral_sucursal_id;
        }

        if ($widget_cmb_gral_actividad_id != 0) {
            $sql .= " AND gral_actividad.id = " . $widget_cmb_gral_actividad_id;
        }

        if ($widget_cmb_gral_escenario_id != 0) {
            $sql .= " AND gral_escenario.id = " . $widget_cmb_gral_escenario_id;
        }

        if ($widget_cmb_cli_cliente_id != 0) {
            $sql .= " AND cli_cliente.id = " . $widget_cmb_cli_cliente_id;
        }

$sql .= "
            GROUP BY 
                vta_factura.fecha_emision
            ORDER BY
                vta_factura.fecha_emision ASC
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
$arr_linea_facturas_emitidas_x_vendedor = array();

while ($fila = pg_fetch_object($cons->getResultado())) {
    $fecha_emision = $fila->fecha_emision;
    $cantidad_emitido = $fila->cantidad_emitido;
    $cantidad_aprobado_afip = $fila->cantidad_aprobado_afip;
    $cantidad_saldado = $fila->cantidad_saldado;

    //$cantidad_emitido = $fila->importe_emitido;
    //$cantidad_aprobado_afip = $fila->importe_aprobado_afip;
    //$cantidad_saldado = $fila->importe_saldado;

    // se calcula el tope para el grafico
    $cantidad_maxima = ($cantidad_aprobado_afip > $cantidad_maxima) ? $cantidad_aprobado_afip : $cantidad_maxima;

    $arr_fechas[] = Gral::getFechaToWeb($fecha_emision);
    $arr_cantidad_aprobado_afip[] = $cantidad_aprobado_afip;
    $arr_cantidad_saldado[] = $cantidad_saldado;
}

$arr_fechas_json = json_encode($arr_fechas);

$graph_yAxes_max = (int) ($cantidad_maxima * 1.2);
$graph_yAxes_step = (int) ($graph_yAxes_max / 5);

//$graph_yAxes_max = (int) ($cantidad_maxima * 1.1);
//$graph_yAxes_step = (int) ($graph_yAxes_max / 10);

// array con la info de la linea de aprobadas por afip
$arr_linea_facturas_emitidas[] = array(
    "label" => 'Facturas Emitidas (Autorizadas por AFIP)',
    "backgroundColor" => '#02adf7',
    "borderColor" => '#02adf7',
    "data" => $arr_cantidad_aprobado_afip,
    "fill" => false,
);

// array con la info de la linea de aprobadas por afip
$arr_linea_facturas_emitidas[] = array(
    "label" => 'Facturas Saldadas (al 100%)',
    "backgroundColor" => '#1e8c18',
    "borderColor" => '#1e8c18',
    "data" => $arr_cantidad_saldado,
    "fill" => false,
);

// se agregan al gran array que se envia al grafico
$arr_linea_facturas_emitidas_json = json_encode($arr_linea_facturas_emitidas);
?>

<style>

</style>

<div class="buscador">
    <?php include "parts/buscador.php"; ?>
</div>

<div class="subtitulo">
    Facturas emitidas entre el <?php echo Gral::getFechaToWEB($desde) ?> y <?php echo Gral::getFechaToWEB($hasta) ?>.<br />
    <strong>Mientras mayor nivel de convergencia tengan las lineas mayor cantidad de facturas emitidas son cobradas por completo.</strong>
</div>

<div class="datos">

    <!------------  GRAFICO  -------------->
    <canvas id="canvas_facturas_emitidas"></canvas>

</div>

<script>
    var config_facturas_emitidas = {
        type: 'line',
        data: {
            labels: <?php echo $arr_fechas_json ?>,
            datasets: <?php echo $arr_linea_facturas_emitidas_json ?>
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
                            labelString: 'Cantidad'
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
        var ctx = document.getElementById("canvas_facturas_emitidas").getContext("2d");
        window.myLine = new Chart(ctx, config_facturas_emitidas);
    });
</script>                            


<script>
    $(function ($) {
        setInitWidgetFacturasEmitidas();
    });

    function setInitWidgetFacturasEmitidas()
    {
        setClickFacturasEmitidasBtnBuscar();
    }

    function setClickFacturasEmitidasBtnBuscar()
    {
        $("#widget_facturas_emitidas_btn_buscar").unbind();
        $("#widget_facturas_emitidas_btn_buscar").click(function ()
        {
            var elem = $(this);
            var form = $(this).parents('form');
            $.ajax(
                    {
                        type: 'GET',
                        url: "gen_widget/WIDGET_HOME_FACTURAS_TIMELINE/index.php",
                        data: form.serialize() + "&filtrar=1",
                        dataType: "html",
                        beforeSend: function (objeto) {
                            //elem.parents('#cuerpo_widget_WIDGET_HOME_FACTURAS_TIMELINE .contenedor').html(img_loading);
                        },
                        success: function (data) {
                            elem.parents('#cuerpo_widget_WIDGET_HOME_FACTURAS_TIMELINE .contenedor').html(data);
                        },
                        error: function (objeto, quepaso, otroobj) {
                            //alert("errorx "+ objeto.status);
                        }
                    });
        });
    }

</script>