<?php
include_once '_autoload.php';
$user = UsUsuario::autenticado();

$widget_key            = 'facturas_emitidas_x_vendedor';
$widget_codigo         = 'WIDGET_HOME_FACTURAS_EMITIDAS_X_VENDEDOR_TIMELINE';
$widget_key_camelizado = Gral::setDbCamelizar($widget_key, '_');

$filtrar = Gral::getVars(2, 'filtrar', 0);
if ($filtrar) {
    // ---------------------------------------------------------------------
    // se recuperan filtros elegidos pro el usuario
    // ---------------------------------------------------------------------
    $desde = Gral::getVars(2, 'widget_facturas_emitidas_x_vendedor_txt_desde', '');
    $hasta = Gral::getVars(2, 'widget_facturas_emitidas_x_vendedor_txt_hasta', '');
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
}

// ---------------------------------------------------------------------
// se obtienen los datos
// ---------------------------------------------------------------------

$sql = "
            SELECT 
                vta_factura.fecha_emision, 
                vta_vendedor.id as vendedor_id, 
                vta_vendedor.descripcion as vendedor_descripcion, 
                count(vta_factura.id) as cantidad_emitido, 
                count(CASE WHEN vta_factura_tipo_estado.aprobado_afip = 1 THEN 1 ELSE null END) as cantidad_aprobado_afip
            FROM
                vta_factura
                LEFT JOIN vta_factura_tipo_estado on vta_factura_tipo_estado.id = vta_factura.vta_factura_tipo_estado_id
                LEFT JOIN vta_vendedor on vta_vendedor.id = vta_factura.vta_vendedor_id 
                LEFT JOIN gral_sucursal on gral_sucursal.id = vta_factura.gral_sucursal_id 
                LEFT JOIN cli_cliente on cli_cliente.id = vta_factura.cli_cliente_id
                LEFT JOIN gral_escenario on gral_escenario.id = vta_factura.gral_escenario_id
                LEFT JOIN gral_actividad on gral_actividad.id = gral_escenario.gral_actividad_id        
            WHERE TRUE
                AND vta_factura.fecha_emision BETWEEN '" . $desde . "' AND '" . $hasta . "'
        ";

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

$sql.= "
            GROUP BY 
                vta_factura.fecha_emision, 
                vta_vendedor.id, 
                vta_vendedor.descripcion 
            ORDER BY
                vta_factura.fecha_emision ASC
            ;
        ";
$resultado = pg_exec($connect, $sql);

$cons = new Consulta();
$cons->setSQL($sql);
$cons->execute();
$recordset = $cons->getResultado();

$cantidad_maxima = 0;

$arr_fechas = array();
$arr_cantidad_aprobado_afip = array();
$arr_linea_facturas_emitidas_x_vendedor = array();

while ($fila = pg_fetch_object($recordset)) {
    $fecha_emision = $fila->fecha_emision;
    $cantidad_emitido = $fila->cantidad_emitido;
    $cantidad_aprobado_afip = $fila->cantidad_aprobado_afip;
    $vendedor_id = $fila->vendedor_id;
    $vendedor_descripcion = $fila->vendedor_descripcion;

    // se calcula el tope para el grafico
    $cantidad_maxima = ($cantidad_aprobado_afip > $cantidad_maxima) ? $cantidad_aprobado_afip : $cantidad_maxima;

    if (!in_array(Gral::getFechaToWeb($fecha_emision), $arr_fechas)) {
        $arr_fechas[] = Gral::getFechaToWeb($fecha_emision);
    }
    $arr_vendedores[$vendedor_id] = $vendedor_descripcion;
}

//Gral::prr($arr_fechas);
//Gral::prr($arr_vendedores);

foreach ($arr_vendedores as $vendedor_id => $vendedor_descripcion) {
    foreach ($arr_fechas as $fecha_key => $fecha) {
        $arr_cantidad_aprobado_afip[$vendedor_id][$fecha_key] = 0;
    }
}
//Gral::prr($arr_cantidad_aprobado_afip);

//Se reinicia el puntero. Para poder volver a recorrer desde el principio
pg_result_seek($recordset, 0);

while ($fila = pg_fetch_object($recordset)) {
    $fecha_emision = $fila->fecha_emision;
    $cantidad_emitido = $fila->cantidad_emitido;
    $cantidad_aprobado_afip = $fila->cantidad_aprobado_afip;
    $cantidad_saldado = $fila->cantidad_saldado;
    $vendedor_id = $fila->vendedor_id;
    $vendedor_descripcion = $fila->vendedor_descripcion;

    $arr_fecha_key = array_search(Gral::getFechaToWeb($fecha_emision), $arr_fechas);

    if ($arr_fecha_key !== false) {
        $arr_cantidad_aprobado_afip[$vendedor_id][$arr_fecha_key] = $cantidad_aprobado_afip;
    }
}

$arr_fechas_json = json_encode($arr_fechas);
$graph_yAxes_max = (int) ($cantidad_maxima * 1.1);
$graph_yAxes_step = (int) ($graph_yAxes_max / 2);

foreach ($arr_vendedores as $i => $arr_vendedor) {
    $vendedor_descripcion = $arr_vendedor;

    $color = '#'.rand(0, 6).rand(0, 6).rand(0, 6);
    $color = '#'.str_pad(dechex(rand(0x000000, 0xFFFFFF)), 6, 0, STR_PAD_LEFT);
    $color = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
    $color = GenWidget::getArrColoresHardcodeados()[rand(1, (count(GenWidget::getArrColoresHardcodeados()) - 1) )];
    
    $arr_linea_facturas_emitidas_x_vendedor[] = array(
        "label" => $vendedor_descripcion,
        "backgroundColor" => $color,
        "borderColor" => $color,
        "data" => $arr_cantidad_aprobado_afip[$i],
        "fill" => false,
    );
}
//Gral::prr($arr_linea_facturas_emitidas_x_vendedor);

// se agregan al gran array que se envia al grafico
$arr_linea_facturas_emitidas_x_vendedor_json = json_encode($arr_linea_facturas_emitidas_x_vendedor);

?>

<style>

</style>

<div class="buscador">
    <?php include "parts/buscador.php"; ?>
</div>

<div class="subtitulo">
    Facturas emitidas por vendedor entre el <?php echo Gral::getFechaToWEB($desde) ?> y <?php echo Gral::getFechaToWEB($hasta) ?>.<br />
    <strong>Se visualiza la cantidad de facturas emitidas (autorizadas) por vendedor, independientemente de si la misma se encuentra saldada (cobrada) o no.</strong>
</div>
<div class="datos">

    <!------------  GRAFICO  -------------->
    <canvas id="canvas_facturas_x_vendedor"></canvas>

</div>

<script>
    var config_canvas_facturas_x_vendedor = {
        type: 'line',
        data: {
            labels: <?php echo $arr_fechas_json ?>,
            datasets: <?php echo $arr_linea_facturas_emitidas_x_vendedor_json ?>
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
        var ctx = document.getElementById("canvas_facturas_x_vendedor").getContext("2d");
        window.myLine = new Chart(ctx, config_canvas_facturas_x_vendedor);
    });
</script>                            


<script>
    $(function ($) {
        setInitWidgetFacturasEmitidasXVendedor();
    });

    function setInitWidgetFacturasEmitidasXVendedor()
    {
        setClickFacturasEmitidasXVendedorBtnBuscar();
    }

    function setClickFacturasEmitidasXVendedorBtnBuscar()
    {
        $("#widget_facturas_emitidas_x_vendedor_btn_buscar").unbind();
        $("#widget_facturas_emitidas_x_vendedor_btn_buscar").click(function ()
        {
            var elem = $(this);
            var form = $(this).parents('form');
            $.ajax(
                    {
                        type: 'GET',
                        url: "gen_widget/WIDGET_HOME_FACTURAS_X_VENDEDOR_TIMELINE/index.php",
                        data: form.serialize() + "&filtrar=1",
                        dataType: "html",
                        beforeSend: function (objeto) {
                            //elem.parents('#cuerpo_widget_WIDGET_HOME_FACTURAS_X_VENDEDOR_TIMELINE .contenedor').html(img_loading);
                        },
                        success: function (data) {
                            elem.parents('#cuerpo_widget_WIDGET_HOME_FACTURAS_X_VENDEDOR_TIMELINE .contenedor').html(data);
                        },
                        error: function (objeto, quepaso, otroobj) {
                            //alert("errorx "+ objeto.status);
                        }
                    });
        });
    }

</script>