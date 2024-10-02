<?php

require_once "base/BGenWidget.php";

class GenWidgetTienda extends BGenWidget {
    
    const CANTIDAD_CAMBIO_COLOR = 7;
    
    static function getArrColoresHardcodeados($cantidad = 10) {

        if($cantidad > self::CANTIDAD_CAMBIO_COLOR){
            $arr_colores_hardcodeado = array(
                '#661A00',
                '#9B2F00',
                '#D64B0D',
                '#ED6420',
                '#FC9130',
                '#FFA861',
                '#002235',
                '#013254',
                '#0283BC',
                '#33D9FF',
                '#7C7C7C',
                '#CCCCCC',
            );            
        }else{
            $arr_colores_hardcodeado = array(
                '#FFA861',
                '#9B2F00',
                '#7C7C7C',
                '#ED6420',
                '#013254',
                '#CCCCCC',
                '#661A00',
                '#33D9FF',
                '#D64B0D',
                '#002235',
                '#FC9130',
                '#0283BC',
            );
        }

        $indice = 0;
        for ($i = 0; $i < $cantidad; $i++) {            
            if ($indice < count($arr_colores_hardcodeado)) {
                    $arr_colores_hardcodeado_completo[$i] = $arr_colores_hardcodeado[$indice];
                } else {
                    $indice = 0;
                    $arr_colores_hardcodeado_completo[$i] = $arr_colores_hardcodeado[$indice];
                }
                $indice++;      
        }
        
        return $arr_colores_hardcodeado_completo;
    }
    
    static function getArrCantidadFormateado($cantidad){
        $arr_cantidad = explode('-', $cantidad);
        if(count($arr_cantidad) > 1){
            $cantidad_desde = $arr_cantidad[0] - 1;
            $cantidad_hasta = $arr_cantidad[1];
            $cantidad = $cantidad_hasta - $cantidad_desde;
        }else{
            $cantidad_desde = 0;            
        }
        
        return array('cantidad' => $cantidad, 'desde' => $cantidad_desde);
    }
    
    /**
     * Procesa los array de datos requeridos para terminar de armar el grafico bar
     * @param  [array]  $arr_cantidad         [las cantidades]
     * @param  [array]  $arr_dato_descripcion [las descripciones]
     * @param  [array]  $arr_dato_color       [los colores]
     * @return [array]  $arr_datos_widget     [array completo con el dataset y description]
     */
    static function getDatosParaWidgetTipoBar($arr_cantidad, $arr_dato_descripcion, $arr_dato_color = false) {
        $arr_datos_widget = array();

        if (!$arr_dato_color) {
            //armar un array de colores random
        }

        // ---------------------------------------------------------------------
        // Se prepara un array con todos los colores correspondientes para cada dato
        // Se conoce el largo del array
        // ---------------------------------------------------------------------
        $arr_background_color = array();
        for ($i = 0; $i < count($arr_dato_descripcion); $i++) {
            $arr_background_color[$i] = $arr_dato_color[$i];
        }

        // ---------------------------------------------------------------------
        // Se prepara un gran array del largo de la cantidad de descripciones para el dataset 
        // en donde en cada indice 'data' hay un array con el largo con la cantidad de datos
        // Se conoce el largo del array. 
        // Se recorre el array de las descripciones de datos que es del mismo largo para poder acceder a la descripcion facil
        // ---------------------------------------------------------------------
        foreach ($arr_dato_descripcion as $indice => $dato_descripcion) {
            $arr_data = array();

            // ---------------------------------------------------------------------
            //  Sirve para poder mostrar la info en el tooltip que se dispara al pasar por un bar
            //  Unicamente muestra el dato en el indice que corresponde
            // ---------------------------------------------------------------------
            for ($i = 0; $i < count($arr_dato_descripcion); $i++) {
                if ($i == $indice) {
                    $arr_data[$indice] = $arr_cantidad[$indice];
                } else {
                    $arr_data[$i] = 0;
                }
            }

            // ---------------------------------------------------------------------
            // Se prepara el array para el dataset con sus indices requeridos
            // El indice 'data' es un array que tiene el mismo largo que la cantidad de info mostrada
            // ---------------------------------------------------------------------
            $arr_linea_dataset[$indice] = array(
                'label' => $dato_descripcion,
                'data' => $arr_data,
                'backgroundColor' => $arr_background_color[$indice],
                'borderColor' => $arr_background_color[$indice],
                'fill' => false,
            );
        }

        $arr_datos_widget['arr_descripcion'] = $arr_dato_descripcion;
        $arr_datos_widget['arr_linea_dataset'] = $arr_linea_dataset;

        return $arr_datos_widget;
    }
    
    /**
     * Procesa los array de datos requeridos  de forma un poco mas simplificada para terminar de armar el grafico bar
     * @param  [array]  $arr_cantidad         [las cantidades]
     * @param  [array]  $arr_dato_descripcion [las descripciones]
     * @param  [array]  $arr_dato_color       [los colores]
     * @return [array]  $arr_datos_widget     [array completo con el dataset y description]
     */
    static function getDatosSimpleParaWidgetTipoBar($arr_cantidad, $arr_dato_descripcion, $arr_dato_color = false) {
        $arr_datos_widget = array();

        if (!$arr_dato_color) {
            //armar un array de colores random
            $arr_colores_hardcodeado = self::getArrColoresHardcodeados(count($arr_dato_descripcion));
            for ($i = 0; $i < count($arr_dato_descripcion); $i++) {
                //$arr_dato_color[$i] = $arr_colores_hardcodeado[array_rand($arr_colores_hardcodeado)];
                $arr_dato_color[$i] = $arr_colores_hardcodeado[$i];
            }
        }
        
        // ---------------------------------------------------------------------
        // Se prepara un array con todos los colores correspondientes para cada dato
        // Se conoce el largo del array
        // ---------------------------------------------------------------------
        $arr_background_color = array();
        for ($i = 0; $i < count($arr_dato_descripcion); $i++) {
            $arr_background_color[$i] = $arr_dato_color[$i];
        }

        $arr_linea_dataset[] = array(
            'label' => 'Cantidad',
            'data' => $arr_cantidad,
            'backgroundColor' => $arr_background_color,
            'borderColor' => $arr_background_color,
            'fill' => false,
        );

        $arr_datos_widget['arr_descripcion'] = $arr_dato_descripcion;
        $arr_datos_widget['arr_linea_dataset'] = $arr_linea_dataset;

        return $arr_datos_widget;
    }
    
    static function getDatosSimpleParaWidgetTipoTimeline($arr_cantidads, $arr_descripcions, $arr_fechas, $arr_dato_color = false) {
        $arr_datos_widget = array();

        if (!$arr_dato_color) {
            //armar un array de colores random
            $arr_colores_hardcodeado = self::getArrColoresHardcodeados();
            for ($i = 0; $i < count($arr_descripcions); $i++) {//for($i = 0; $i < count($arr_cantidads[0]); $i++)
                //$arr_dato_color[$i] = $arr_colores_hardcodeado[array_rand($arr_colores_hardcodeado)];
                $arr_dato_color[$i] = $arr_colores_hardcodeado[$i * 4];
            }
        }
        //Gral::prr($arr_dato_color);
        // ---------------------------------------------------------------------
        // Se prepara un array con todos los colores correspondientes para cada dato
        // Se conoce el largo del array
        // ---------------------------------------------------------------------
        $arr_background_color = array();
        for ($i = 0; $i < count($arr_descripcions); $i++) {
            $arr_background_color[$i] = $arr_dato_color[$i];
        }
        //Gral::prr($arr_background_color);
        $arr_linea_dataset = array();
        for ($i = 0; $i < count($arr_descripcions); $i++) {
            $arr_linea_dataset[] = array(
                "label" => $arr_descripcions[$i],
                "backgroundColor" => $arr_background_color[$i],
                "borderColor" => $arr_background_color[$i],
                "data" => $arr_cantidads[$i],
                "fill" => false,
            );
        }
        //Gral::prr($arr_linea_dataset);
        $arr_datos_widget['arr_descripcion'] = $arr_fechas;
        $arr_datos_widget['arr_linea_dataset'] = $arr_linea_dataset;
        //Gral::prr($arr_datos_widget);
        return $arr_datos_widget;
    }
    
    static function getWidgetTiendaInsInsumoCantidadBar($fecha_desde, $fecha_hasta, $cantidad = 10, $cli_cliente_id = false) {
        $arr_widget = array();
        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------

            $sql = "SELECT DISTINCT 
                    ins_insumo.descripcion as descripcion,
                    ins_insumo.codigo_interno as codigo_interno,
                    SUM(vta_orden_venta.cantidad) as cantidad
                    FROM vta_orden_venta
                    LEFT JOIN vta_orden_venta_tipo_estado on vta_orden_venta_tipo_estado.id = vta_orden_venta.vta_orden_venta_tipo_estado_id
                    JOIN ins_insumo on ins_insumo.id = vta_orden_venta.ins_insumo_id
                    LEFT JOIN vta_presupuesto on vta_presupuesto.id = vta_orden_venta.vta_presupuesto_id
                    LEFT JOIN cli_cliente on cli_cliente.id = vta_presupuesto.cli_cliente_id
                    WHERE TRUE
                    AND vta_orden_venta.creado::DATE BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "' 
                    AND vta_orden_venta_tipo_estado.codigo <> '".VtaOrdenVentaTipoEstado::TIPO_CANCELADO."'
                    ";
            
            if ($cli_cliente_id) {
                $sql .= " AND cli_cliente.id = " . $cli_cliente_id;
            }

            $sql .= " GROUP BY 1, 2
                      ORDER BY cantidad DESC";
            
            $sql .= " LIMIT " . self::getArrCantidadFormateado($cantidad)['cantidad'] . " OFFSET ".self::getArrCantidadFormateado($cantidad)['desde']."; ";
            //Gral::echoSqlSentence($sql);
            
            $cons = new Consulta();
            $cons->setSQL($sql);
            $cons->execute();

            $cantidad_maxima = 0;
            $arr_cantidad = array();
            $arr_dato_descripcion = array();
            $arr_linea_dataset = array();
            while ($fila = pg_fetch_object($cons->getResultado())) {
                $cantidad = $fila->cantidad;
                $dato_descripcion = substr($fila->descripcion, 0, 100) . '...';
                $dato_codigo = $fila->tipo_estado_codigo;

                $arr_cantidad[] = $cantidad;
                $arr_dato_descripcion[] = $dato_descripcion;

                $obj_tipo_estado = VtaOrdenVentaTipoEstado::getOxCodigo($dato_codigo);
                $arr_dato_color[] = $obj_tipo_estado->getColor();
            }

            $graph_yAxes_max = (int) ($cantidad_maxima * 1.1);
            $graph_yAxes_step = (int) ($graph_yAxes_max / 5);

            $arr_datos_para_widget_tipo_bar = GenWidget::getDatosSimpleParaWidgetTipoBar($arr_cantidad, $arr_dato_descripcion, false);

            $arr_widget['arr_linea_dataset'] = $arr_datos_para_widget_tipo_bar['arr_linea_dataset'];
            $arr_widget['arr_descripcion'] = $arr_datos_para_widget_tipo_bar['arr_descripcion'];
            $arr_widget['graph_yAxes_max'] = $graph_yAxes_max;
            $arr_widget['graph_yAxes_step'] = $graph_yAxes_step;
        }

        return $arr_widget;
    }
    
    static function getWidgetTiendaVtaFacturaBar($fecha_desde, $fecha_hasta, $cli_cliente_id = false, $visualizacion) {
        $arr_widget = array();
        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------

            $sql = "SELECT 
                    vta_factura_tipo_estado.descripcion as tipo_estado_descripcion,
                    vta_factura_tipo_estado.codigo as tipo_estado_codigo,
                    vta_factura_tipo_estado.orden as tipo_estado_orden,
                    ";
            if ($visualizacion == GralSiNo::GRAL_SINO_CI_CANTIDAD) {
                $sql .= "count(vta_factura.id) as cantidad ";
            } elseif (GralSiNo::GRAL_SINO_CI_IMPORTE) {
                $sql .= "sum(vta_factura_importe.importe_total) as cantidad ";
            }
            $sql .= "FROM vta_factura
                    LEFT JOIN vta_factura_importe on vta_factura_importe.vta_factura_id = vta_factura.id
                    LEFT JOIN cli_cliente on cli_cliente.id = vta_factura.cli_cliente_id
                    LEFT JOIN vta_factura_tipo_estado on vta_factura_tipo_estado.id = vta_factura.vta_factura_tipo_estado_id
                    WHERE TRUE
                    AND vta_factura.fecha_emision BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'                    
                        ";

            if ($cli_cliente_id != 0) {
                $sql .= " AND cli_cliente.id = " . $cli_cliente_id;
            }

            $sql .= "
                        GROUP BY tipo_estado_descripcion, tipo_estado_codigo, tipo_estado_orden
                        ORDER BY tipo_estado_orden ASC 
                        ;
                    ";
            //Gral::echoSqlSentence($sql);

            $cons = new Consulta();
            $cons->setSQL($sql);
            $cons->execute();

            $cantidad_maxima = 0;
            $arr_cantidad = array();
            $arr_dato_descripcion = array();
            $arr_linea_dataset = array();
            while ($fila = pg_fetch_object($cons->getResultado())) {
                $cantidad = $fila->cantidad;
                $dato_descripcion = $fila->tipo_estado_descripcion;
                $dato_codigo = $fila->tipo_estado_codigo;

                $arr_cantidad[] = $cantidad;
                $arr_dato_descripcion[] = $dato_descripcion;

                $obj_tipo_estado = VtaFacturaTipoEstado::getOxCodigo($dato_codigo);
                $arr_dato_color[] = $obj_tipo_estado->getColor();
            }

            $graph_yAxes_max = (int) ($cantidad_maxima * 1.1);
            $graph_yAxes_step = (int) ($graph_yAxes_max / 5);
            //Gral::prr($arr_cantidad);
            //Gral::prr($arr_dato_descripcion);
            //Gral::prr($arr_dato_color);
            $arr_datos_para_widget_tipo_bar = GenWidget::getDatosParaWidgetTipoBar($arr_cantidad, $arr_dato_descripcion, $arr_dato_color);

            $arr_widget['arr_linea_dataset'] = $arr_datos_para_widget_tipo_bar['arr_linea_dataset'];
            $arr_widget['arr_descripcion'] = $arr_datos_para_widget_tipo_bar['arr_descripcion'];
            $arr_widget['graph_yAxes_max'] = $graph_yAxes_max;
            $arr_widget['graph_yAxes_step'] = $graph_yAxes_step;
        }

        return $arr_widget;
    }
    
    static function getWidgetTiendaVtaRemitoBar($fecha_desde, $fecha_hasta, $cli_cliente_id = false) {
        $arr_widget = array();
        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------

            $sql = "SELECT
                    vta_remito_tipo_estado.descripcion as tipo_estado_descripcion,
                    vta_remito_tipo_estado.codigo as tipo_estado_codigo,
                    vta_remito_tipo_estado.orden as tipo_estado_orden,
                    COUNT(vta_remito_tipo_estado.codigo) as cantidad
                    FROM vta_remito
                    LEFT JOIN vta_remito_tipo_estado on vta_remito_tipo_estado.id = vta_remito.vta_remito_tipo_estado_id
                    LEFT JOIN cli_cliente on cli_cliente.id = vta_remito.cli_cliente_id
                    WHERE vta_remito.fecha::DATE BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'
                        ";
            
            if ($cli_cliente_id != 0) {
                $sql .= " AND cli_cliente.id = " . $cli_cliente_id;
            }
            
            $sql .= "
                        GROUP BY tipo_estado_descripcion, tipo_estado_codigo, tipo_estado_orden
                        ORDER BY tipo_estado_orden ASC 
                        ;
                    ";
            //Gral::echoSqlSentence($sql);

            $cons = new Consulta();
            $cons->setSQL($sql);
            $cons->execute();

            $cantidad_maxima = 0;
            $arr_cantidad = array();
            $arr_dato_descripcion = array();
            $arr_linea_dataset = array();
            while ($fila = pg_fetch_object($cons->getResultado())) {
                $cantidad = $fila->cantidad;
                $dato_descripcion = $fila->tipo_estado_descripcion;
                $dato_codigo = $fila->tipo_estado_codigo;

                $arr_cantidad[] = $cantidad;
                $arr_dato_descripcion[] = $dato_descripcion;

                $obj_tipo_estado = VtaRemitoTipoEstado::getOxCodigo($dato_codigo);
                $arr_dato_color[] = $obj_tipo_estado->getColor();
            }

            $graph_yAxes_max = (int) ($cantidad_maxima * 1.1);
            $graph_yAxes_step = (int) ($graph_yAxes_max / 5);

            $arr_datos_para_widget_tipo_bar = GenWidget::getDatosParaWidgetTipoBar($arr_cantidad, $arr_dato_descripcion, $arr_dato_color);

            $arr_widget['arr_linea_dataset'] = $arr_datos_para_widget_tipo_bar['arr_linea_dataset'];
            $arr_widget['arr_descripcion'] = $arr_datos_para_widget_tipo_bar['arr_descripcion'];
            $arr_widget['graph_yAxes_max'] = $graph_yAxes_max;
            $arr_widget['graph_yAxes_step'] = $graph_yAxes_step;
        }

        return $arr_widget;
    }
    
    static function getWidgetTiendaCliClienteTiendaNavegacionPaginasVisitadasPorHorasBar($fecha_desde, $fecha_hasta, $cantidad = 10, $cli_cliente_tienda_id) {
        $arr_widget = array();
        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------
            
            $sql = "SELECT
                    EXTRACT(hour from cli_cliente_tienda_navegacion.creado) hora,
                    EXTRACT(hour from cli_cliente_tienda_navegacion.creado) || ':00' hora_formateada,
                    count(cli_cliente_tienda_navegacion.id) cantidad
                    FROM cli_cliente_tienda_navegacion
                    LEFT JOIN cli_cliente_tienda on cli_cliente_tienda.id = cli_cliente_tienda_navegacion.cli_cliente_tienda_id
                    LEFT JOIN cli_cliente on cli_cliente.id = cli_cliente_tienda.cli_cliente_id
                    LEFT JOIN cli_cliente_vta_vendedor on cli_cliente_vta_vendedor.cli_cliente_id = cli_cliente.id
                    LEFT JOIN vta_vendedor on vta_vendedor.id = cli_cliente_vta_vendedor.vta_vendedor_id
                    LEFT JOIN gral_zona_cli_cliente on gral_zona_cli_cliente.cli_cliente_id = cli_cliente.id
                    LEFT JOIN gral_zona on gral_zona.id = gral_zona_cli_cliente.gral_zona_id
                    WHERE TRUE
                    AND pagina = ANY('{". CliClienteTiendaNavegacion::getPaginasRelevantesParaANY()."}')
                    AND cli_cliente_tienda_navegacion.creado::DATE BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'
                        ";
            
            if ($cli_cliente_tienda_id != 0) {
                $sql .= " AND cli_cliente_tienda_navegacion.cli_cliente_tienda_id = " . $cli_cliente_tienda_id;
            }

            $sql .= "
                        GROUP BY 1, 2
                        ORDER BY hora ASC
                    ";

            $sql .= " LIMIT " . self::getArrCantidadFormateado($cantidad)['cantidad'] . " OFFSET ".self::getArrCantidadFormateado($cantidad)['desde']."; ";

            //Gral::echoSqlSentence($sql);
            $cons = new Consulta();
            $cons->setSQL($sql);
            $cons->execute();

            $cantidad_maxima = 0;
            $arr_cantidad = array();
            $arr_dato_descripcion = array();
            $arr_linea_dataset = array();
            while ($fila = pg_fetch_object($cons->getResultado())) {
                $cantidad = $fila->cantidad;
                $dato_descripcion = $fila->hora_formateada;

                $arr_cantidad[] = $cantidad;
                $arr_dato_descripcion[] = $dato_descripcion;

                //$arr_dato_color[] = $obj_us_navegacion->getColor();
            }

            $graph_yAxes_max = (int) ($cantidad_maxima * 1.1);
            $graph_yAxes_step = (int) ($graph_yAxes_max / 5);

            $arr_datos_para_widget_tipo_bar = GenWidget::getDatosSimpleParaWidgetTipoBar($arr_cantidad, $arr_dato_descripcion, $arr_dato_color);

            $arr_widget['arr_linea_dataset'] = $arr_datos_para_widget_tipo_bar['arr_linea_dataset'];
            $arr_widget['arr_descripcion'] = $arr_datos_para_widget_tipo_bar['arr_descripcion'];
            $arr_widget['graph_yAxes_max'] = $graph_yAxes_max;
            $arr_widget['graph_yAxes_step'] = $graph_yAxes_step;
        }

        return $arr_widget;
    }
    
}

?>