<?php

require_once "base/BGenWidget.php";

class GenWidget extends BGenWidget {
    
    const CANTIDAD_CAMBIO_COLOR = 7;
    
    static function getArrColoresHardcodeados($cantidad = 10) {

        if($cantidad > self::CANTIDAD_CAMBIO_COLOR){
            $arr_colores_hardcodeado = array(
                '#002235',
                '#02293F',
                '#013254',
                '#00638E',
                '#0283BC',
                '#00B5E5',
                '#33D9FF',
                '#447F00',
                '#5BAD04',
                '#97CC05',
                '#C4FF22',
                '#DDFF61',
                '#7C7C7C',
                '#A8A8A8',
                '#CCCCCC',
            );            
        }else{
            $arr_colores_hardcodeado = array(
                '#002235',            
                '#013254',            
                '#0283BC',            
                '#33D9FF',            
                '#5BAD04',            
                '#C4FF22',            
                '#7C7C7C',            
                '#02293F',
                '#00638E',
                '#00B5E5',
                '#447F00',
                '#97CC05',
                '#DDFF61',
                '#A8A8A8',
                '#CCCCCC',
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

    /**
     * [getDatosSimpleParaWidgetTipoTimeline description]
     * @param  [type]  $arr_cantidads    [description]
     * @param  [type]  $arr_descripcions [description]
     * @param  [type]  $arr_fechas       [description]
     * @param  boolean $arr_dato_color   [description]
     * @return [type]                    [description]
     */
    static function getDatosSimpleParaWidgetTipoTimeline($arr_cantidads, $arr_descripcions, $arr_fechas, $arr_dato_color = false) {
        $arr_datos_widget = array();

        if (!$arr_dato_color) {
            //armar un array de colores random
            $arr_colores_hardcodeado = self::getArrColoresHardcodeados(count($arr_descripcions));
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
                //"borderWidth" => 3,
                //"lineTension" => 1,
                //"pointRadius" => 3,
                "spanGaps" => true,
            );
        }
        //Gral::prr($arr_linea_dataset);
        $arr_datos_widget['arr_descripcion'] = $arr_fechas;
        $arr_datos_widget['arr_linea_dataset'] = $arr_linea_dataset;
        //Gral::prr($arr_datos_widget);
        return $arr_datos_widget;
    }

    /**
     * Prepara el SQL de presupuestos y devuelve un array con informacion para poder graficar
     * @param  [string] $fecha_desde    [description]
     * @param  [string] $fecha_hasta    [description]
     * @param  [int] $vta_vendedor_id   [description]
     * @param  [int] $gral_actividad_id [description]
     * @return [array] $arr_widget  [array con el resultado]
     */
    static function getWidgetVtaPresupuestoBar($fecha_desde, $fecha_hasta, $vta_vendedor_id = false, $gral_sucursal_id = false, $gral_actividad_id = false, $gral_escenario_id = false, $vta_preventista_id = false, $cli_cliente_id = false, $visualizacion) {
        $arr_widget = array();

        // ---------------------------------------------------------------------
        // se consulta el alcance de sucursales del usuario
        // ---------------------------------------------------------------------
//        $us_usuario_autenticado = UsUsuario::autenticado();
//        if ($us_usuario_autenticado) {
//            $gral_sucursals_autorizadas_ids = $us_usuario_autenticado->getGralSucursalUsUsuariosId();
//            if(is_array($gral_sucursals_autorizadas_ids)){
//                $gral_sucursals_autorizadas_ids_string = implode(',', $gral_sucursals_autorizadas_ids);
//                $gral_sucursals_autorizadas_ids_string = "(".$gral_sucursals_autorizadas_ids_string.")";
//                //Gral::pr($gral_sucursals_autorizadas_ids_string);                
//            }else{
//                $gral_sucursals_autorizadas_ids_string = "(0)";
//            }
//        }
        
        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------

            $sql = "SELECT 
                            vta_presupuesto_tipo_estado.descripcion as tipo_estado_descripcion,
                            vta_presupuesto_tipo_estado.codigo as tipo_estado_codigo,
                    vta_presupuesto_tipo_estado.orden as tipo_estado_orden,
                    ";
            if ($visualizacion == GralSiNo::GRAL_SINO_CI_CANTIDAD) {
                $sql .= "count(vta_presupuesto.id) as cantidad ";
            } elseif (GralSiNo::GRAL_SINO_CI_IMPORTE) {
                $sql .= "sum(vta_presupuesto.importe_total) as cantidad ";
            }
            $sql .= "FROM vta_presupuesto                
                    LEFT JOIN vta_vendedor on vta_vendedor.id = vta_presupuesto.vta_vendedor_id
                    LEFT JOIN gral_sucursal on gral_sucursal.id = vta_presupuesto.gral_sucursal_id
                    LEFT JOIN vta_presupuesto_tipo_estado on vta_presupuesto_tipo_estado.id = vta_presupuesto.vta_presupuesto_tipo_estado_id
                    LEFT JOIN gral_actividad on gral_actividad.id = vta_presupuesto.gral_actividad_id
                    LEFT JOIN ins_tipo_lista_precio on ins_tipo_lista_precio.id = vta_presupuesto.ins_tipo_lista_precio_id
                    LEFT JOIN vta_preventista on vta_preventista.id = vta_presupuesto.vta_preventista_id
                    LEFT JOIN cli_cliente on cli_cliente.id = vta_presupuesto.cli_cliente_id
                    LEFT JOIN gral_escenario on gral_escenario.id = vta_presupuesto.gral_escenario_id
                    WHERE TRUE
                    --AND vta_presupuesto.gral_sucursal_id IN ".$gral_sucursals_autorizadas_ids_string."                    
                    AND vta_presupuesto.fecha::DATE BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'                    
                        ";
            if ($vta_vendedor_id != 0) {
                $sql .= " AND vta_vendedor.id = " . $vta_vendedor_id;
            }

            if ($gral_sucursal_id != 0) {
                $sql .= " AND gral_sucursal.id = " . $gral_sucursal_id;
            }

            if ($gral_actividad_id != 0) {
                $sql .= " AND gral_actividad.id = " . $gral_actividad_id;
            }

            if ($gral_escenario_id != 0) {
                $sql .= " AND gral_escenario.id = " . $gral_escenario_id;
            }

            if ($vta_preventista_id != 0) {
                $sql .= " AND vta_preventista.id = " . $vta_preventista_id;
            }

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

                $obj_tipo_estado = VtaPresupuestoTipoEstado::getOxCodigo($dato_codigo);
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

    /**
     * Prepara el SQL de presupuestos y devuelve un array con informacion para poder graficar
     * @param  [string]  $fecha_desde       [description]
     * @param  [string]  $fecha_hasta       [description]
     * @param  [int] $vta_vendedor_id   [description]
     * @param  [int] $gral_actividad_id [description]
     * @return [array] $arr_widget  [array con el resultado]
     */
    static function getWidgetVtaPresupuestoPie($fecha_desde, $fecha_hasta, $vta_vendedor_id = false, $gral_sucursal_id = false, $gral_actividad_id = false, $gral_escenario_id = false, $vta_preventista_id = false, $cli_cliente_id = false, $visualizacion) {
        $arr_widget = array();
        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------
            $sql = "SELECT 
                    vta_presupuesto_tipo_estado.descripcion as tipo_estado_descripcion,
                            vta_presupuesto_tipo_estado.codigo as tipo_estado_codigo,
                    vta_presupuesto_tipo_estado.orden as tipo_estado_orden,
                    ";
            if ($visualizacion == GralSiNo::GRAL_SINO_CI_CANTIDAD) {
                $sql .= "count(vta_presupuesto.id) as cantidad ";
            } elseif (GralSiNo::GRAL_SINO_CI_IMPORTE) {
                $sql .= "sum(vta_presupuesto.importe_total) as cantidad ";
            }
            $sql .= "FROM vta_presupuesto           
                    LEFT JOIN vta_vendedor on vta_vendedor.id = vta_presupuesto.vta_vendedor_id
                    LEFT JOIN gral_sucursal on gral_sucursal.id = vta_presupuesto.gral_sucursal_id
                    LEFT JOIN vta_presupuesto_tipo_estado on vta_presupuesto_tipo_estado.id = vta_presupuesto.vta_presupuesto_tipo_estado_id
                    LEFT JOIN gral_actividad on gral_actividad.id = vta_presupuesto.gral_actividad_id
                    LEFT JOIN ins_tipo_lista_precio on ins_tipo_lista_precio.id = vta_presupuesto.ins_tipo_lista_precio_id
                    LEFT JOIN vta_preventista on vta_preventista.id = vta_presupuesto.vta_preventista_id
                    LEFT JOIN cli_cliente on cli_cliente.id = vta_presupuesto.cli_cliente_id
                    LEFT JOIN gral_escenario on gral_escenario.id = vta_presupuesto.gral_escenario_id
                    WHERE vta_presupuesto.fecha::DATE BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'
                    ";
            if ($vta_vendedor_id != 0) {
                $sql .= " AND vta_vendedor.id = " . $vta_vendedor_id;
            }

            if ($gral_sucursal_id != 0) {
                $sql .= " AND gral_sucursal.id = " . $gral_sucursal_id;
            }

            if ($gral_actividad_id != 0) {
                $sql .= " AND gral_actividad.id = " . $gral_actividad_id;
            }

            if ($gral_escenario_id != 0) {
                $sql .= " AND gral_escenario.id = " . $gral_escenario_id;
            }

            if ($vta_preventista_id != 0) {
                $sql .= " AND vta_preventista.id = " . $vta_preventista_id;
            }

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

            $total = 0;
            $arr_cantidad = array();
            $arr_dato_descripcion = array();
            $arr_dato_color = array();

            $resultado = $cons->getResultado();
            while ($fila = pg_fetch_object($resultado)) {
                $total += $fila->cantidad;
            }

            pg_result_seek($resultado, 0); //Se reinicia el puntero para poder volver a iterar y tomar el valor total para obtener un porcentaje

            while ($fila = pg_fetch_object($resultado)) {
                $cantidad = $fila->cantidad;
                $porcentaje = ($cantidad / $total) * 100;
                $porcentaje = number_format($porcentaje, 0); //calculo del porcentaje
                $dato_descripcion = $fila->tipo_estado_descripcion . ' (' . $porcentaje . '%)';
                $dato_codigo = $fila->tipo_estado_codigo;

                $obj_tipo_estado = VtaPresupuestoTipoEstado::getOxCodigo($dato_codigo);

                $arr_cantidad[] = $cantidad;
                $arr_dato_descripcion[] = $dato_descripcion;
                $arr_dato_color[] = $obj_tipo_estado->getColor(); //$rand_background;
            }

            $arr_widget['arr_cantidad'] = $arr_cantidad;
            $arr_widget['arr_dato_descripcion'] = $arr_dato_descripcion;
            $arr_widget['arr_dato_color'] = $arr_dato_color;
            $arr_widget['total'] = $total;
        }
        return $arr_widget;
    }

    /**
     * Prepara el SQL de remitos y devuelve un array con informacion para poder graficar
     * @param  [string] $fecha_desde    [description]
     * @param  [string] $fecha_hasta    [description]
     * @return [array]  $arr_widget  [array con el resultado]
     */
    static function getWidgetVtaRemitoBar($fecha_desde, $fecha_hasta, $pan_panol_id = false, $cli_cliente_id = false) {
        $arr_widget = array();
        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------

            $sql = "SELECT  vta_remito_tipo_estado.descripcion as tipo_estado_descripcion,
                        vta_remito_tipo_estado.codigo as tipo_estado_codigo,
                            vta_remito_tipo_estado.orden as tipo_estado_orden,
                            COUNT(vta_remito_tipo_estado.codigo) as cantidad
                    FROM vta_remito
                    LEFT JOIN vta_remito_tipo_estado on vta_remito_tipo_estado.id = vta_remito.vta_remito_tipo_estado_id
                    LEFT JOIN cli_cliente on cli_cliente.id = vta_remito.cli_cliente_id
                    LEFT JOIN pan_panol on pan_panol.id = vta_remito.pan_panol_id
                    WHERE vta_remito.fecha::DATE BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'                    
                    ";

            if ($pan_panol_id != 0) {
                $sql .= " AND pan_panol.id = " . $pan_panol_id;
            }
            
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

    /**
     * Prepara el SQL de remitos y devuelve un array con informacion para poder graficar
     * @param  [string] $fecha_desde [description]
     * @param  [string] $fecha_hasta [description]
     * @return [array]  $arr_widget  [array con el resultado]
     */
    static function getWidgetVtaRemitoPie($fecha_desde, $fecha_hasta, $pan_panol_id = false, $cli_cliente_id = false) {
        $arr_widget = array();
        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------
            $sql = "SELECT  vta_remito_tipo_estado.descripcion as tipo_estado_descripcion,
                            vta_remito_tipo_estado.codigo as tipo_estado_codigo,
                            vta_remito_tipo_estado.orden as tipo_estado_orden,
                            COUNT(vta_remito_tipo_estado.codigo) as cantidad
                    FROM vta_remito
                    LEFT JOIN vta_remito_tipo_estado on vta_remito_tipo_estado.id = vta_remito.vta_remito_tipo_estado_id
                    LEFT JOIN cli_cliente on cli_cliente.id = vta_remito.cli_cliente_id
                    LEFT JOIN pan_panol on pan_panol.id = vta_remito.pan_panol_id
                    WHERE vta_remito.fecha::DATE BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'
                        ";

            if ($pan_panol_id != 0) {
                $sql .= " AND pan_panol.id = " . $pan_panol_id;
            }
            
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

            $total = 0;
            $arr_cantidad = array();
            $arr_dato_descripcion = array();
            $arr_dato_color = array();

            $resultado = $cons->getResultado();
            while ($fila = pg_fetch_object($resultado)) {
                $total += $fila->cantidad;
            }

            pg_result_seek($resultado, 0); //Se reinicia el puntero para poder volver a iterar y tomar el valor total para obtener un porcentaje

            while ($fila = pg_fetch_object($resultado)) {
                $cantidad = $fila->cantidad;
                $porcentaje = ($cantidad / $total) * 100;
                $porcentaje = number_format($porcentaje, 0); //calculo del porcentaje
                $dato_descripcion = $fila->tipo_estado_descripcion . ' (' . $porcentaje . '%)';
                $dato_codigo = $fila->tipo_estado_codigo;

                $obj_tipo_estado = VtaRemitoTipoEstado::getOxCodigo($dato_codigo);

                $arr_cantidad[] = $cantidad;
                $arr_dato_descripcion[] = $dato_descripcion;
                $arr_dato_color[] = $obj_tipo_estado->getColor(); //$rand_background;
            }

            $arr_widget['arr_cantidad'] = $arr_cantidad;
            $arr_widget['arr_dato_descripcion'] = $arr_dato_descripcion;
            $arr_widget['arr_dato_color'] = $arr_dato_color;
            $arr_widget['total'] = $total;
        }

        return $arr_widget;
    }

    /**
     * Prepara el SQL de OC y devuelve un array con informacion para poder graficar
     * @param  [string] $fecha_desde [fecha desde]
     * @param  [string] $fecha_hasta [fecha hasta]
     * @return [array]  $arr_widget  [array con el resultado]
     */
    static function getWidgetPdeOcBar($fecha_desde, $fecha_hasta, $ins_categoria_id = false, $prv_proveedor_id = false, $visualizacion, $visualizacion_oc) {
        $arr_widget = array();
        
        if ($visualizacion_oc == GralSiNo::GRAL_SINO_OC_TIPO_ESTADO) {
            $estado = 'pde_oc_tipo_estado';
        }
        if ($visualizacion_oc == GralSiNo::GRAL_SINO_OC_TIPO_ESTADO_RECEPCION) {
            $estado = 'pde_oc_tipo_estado_recepcion';
        }
        if ($visualizacion_oc == GralSiNo::GRAL_SINO_OC_TIPO_ESTADO_FACTURACION) {
            $estado = 'pde_oc_tipo_estado_facturacion';
        }
        
        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------

            $sql = "SELECT 
                    " . $estado . ".descripcion as tipo_estado_descripcion,
                    " . $estado . ".codigo as tipo_estado_codigo,
                    " . $estado . ".orden as tipo_estado_orden,";
            if ($visualizacion == GralSiNo::GRAL_SINO_CI_CANTIDAD) {
                $sql .= "count(pde_oc.id) as cantidad ";
            } elseif (GralSiNo::GRAL_SINO_CI_IMPORTE) {
                $sql .= "sum(pde_oc_importe.importe_total) as cantidad ";
            }
            $sql .= "FROM pde_oc
                    LEFT JOIN pde_oc_importe on pde_oc_importe.pde_oc_id = pde_oc.id
                    LEFT JOIN " . $estado . " on " . $estado . ".id = pde_oc." . $estado . "_id 
                    LEFT JOIN ins_insumo on ins_insumo.id = pde_oc.ins_insumo_id
                    LEFT JOIN ins_categoria on ins_categoria.id = ins_insumo.ins_categoria_id
                    LEFT JOIN prv_proveedor on prv_proveedor.id = pde_oc.prv_proveedor_id    
                    WHERE pde_oc.creado::DATE BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'
                    ";

            if ($ins_categoria_id != 0) {
                $ins_categoria = InsCategoria::getOxId($ins_categoria_id);
                $sql .= " AND ins_categoria.codigo LIKE '" . $ins_categoria->getCodigo()."%'";
                //$sql .= " AND ins_categoria.id = " . $ins_categoria_id;
            }
            
            if ($prv_proveedor_id != 0) {
                $sql .= " AND prv_proveedor.id = " . $prv_proveedor_id;
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

                if ($visualizacion_oc == GralSiNo::GRAL_SINO_OC_TIPO_ESTADO) {
                $obj_tipo_estado = PdeOcTipoEstado::getOxCodigo($dato_codigo);
                }
                if ($visualizacion_oc == GralSiNo::GRAL_SINO_OC_TIPO_ESTADO_RECEPCION) {
                    $obj_tipo_estado = PdeOcTipoEstado::getOxCodigo($dato_codigo);
                }
                if ($visualizacion_oc == GralSiNo::GRAL_SINO_OC_TIPO_ESTADO_FACTURACION) {
                    $obj_tipo_estado = PdeOcTipoEstado::getOxCodigo($dato_codigo);
                }
              
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

    /**
     * Prepara el SQL de OC y devuelve un array con informacion para poder graficar
     * @param  [string] $fecha_desde [fecha desde]
     * @param  [string] $fecha_hasta [fecha desde]
     * @return [array] $arr_widget  [array con el resultado]
     */
    static function getWidgetPdeOcPie($fecha_desde, $fecha_hasta, $ins_categoria_id = false, $prv_proveedor_id = false, $visualizacion, $visualizacion_oc) {
        $arr_widget = array();
        
        if ($visualizacion_oc == GralSiNo::GRAL_SINO_OC_TIPO_ESTADO) {
            $estado = 'pde_oc_tipo_estado';
        }
        if ($visualizacion_oc == GralSiNo::GRAL_SINO_OC_TIPO_ESTADO_RECEPCION) {
            $estado = 'pde_oc_tipo_estado_recepcion';
        }
        if ($visualizacion_oc == GralSiNo::GRAL_SINO_OC_TIPO_ESTADO_FACTURACION) {
            $estado = 'pde_oc_tipo_estado_facturacion';
        }
        
        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------
            $sql = "SELECT 
                    " . $estado . ".descripcion as tipo_estado_descripcion,
                    " . $estado . ".codigo as tipo_estado_codigo,
                    " . $estado . ".orden as tipo_estado_orden,";
            if ($visualizacion == GralSiNo::GRAL_SINO_CI_CANTIDAD) {
                $sql .= "count(pde_oc.id) as cantidad ";
            } elseif (GralSiNo::GRAL_SINO_CI_IMPORTE) {
                $sql .= "sum(pde_oc_importe.importe_total) as cantidad ";
            }
            $sql .= "FROM pde_oc
                    LEFT JOIN pde_oc_importe on pde_oc_importe.pde_oc_id = pde_oc.id
                    LEFT JOIN " . $estado . " on " . $estado . ".id = pde_oc." . $estado . "_id 
                    LEFT JOIN ins_insumo on ins_insumo.id = pde_oc.ins_insumo_id
                    LEFT JOIN ins_categoria on ins_categoria.id = ins_insumo.ins_categoria_id
                    LEFT JOIN prv_proveedor on prv_proveedor.id = pde_oc.prv_proveedor_id
                    WHERE pde_oc.creado::DATE BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'
                    ";

            if ($ins_categoria_id != 0) {
                $ins_categoria = InsCategoria::getOxId($ins_categoria_id);
                $sql .= " AND ins_categoria.codigo LIKE '" . $ins_categoria->getCodigo()."%'";
                //$sql .= " AND ins_categoria.id = " . $ins_categoria_id;
            }

            if ($prv_proveedor_id != 0) {
                $sql .= " AND prv_proveedor.id = " . $prv_proveedor_id;
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

            $total = 0;
            $arr_cantidad = array();
            $arr_dato_descripcion = array();
            $arr_dato_color = array();

            $resultado = $cons->getResultado();
            while ($fila = pg_fetch_object($resultado)) {
                $total += $fila->cantidad;
            }

            pg_result_seek($resultado, 0); //Se reinicia el puntero para poder volver a iterar y tomar el valor total para obtener un porcentaje

            while ($fila = pg_fetch_object($resultado)) {
                $cantidad = $fila->cantidad;
                $porcentaje = ($cantidad / $total) * 100;
                $porcentaje = number_format($porcentaje, 0); //calculo del porcentaje
                $dato_descripcion = $fila->tipo_estado_descripcion . ' (' . $porcentaje . '%)';
                $dato_codigo = $fila->tipo_estado_codigo;

                if ($visualizacion_oc == GralSiNo::GRAL_SINO_OC_TIPO_ESTADO) {
                $obj_tipo_estado = PdeOcTipoEstado::getOxCodigo($dato_codigo);
                }
                if ($visualizacion_oc == GralSiNo::GRAL_SINO_OC_TIPO_ESTADO_RECEPCION) {
                    $obj_tipo_estado = PdeOcTipoEstado::getOxCodigo($dato_codigo);
                }
                if ($visualizacion_oc == GralSiNo::GRAL_SINO_OC_TIPO_ESTADO_FACTURACION) {
                    $obj_tipo_estado = PdeOcTipoEstado::getOxCodigo($dato_codigo);
                }

                $arr_cantidad[] = $cantidad;
                $arr_dato_descripcion[] = $dato_descripcion;
                $arr_dato_color[] = $obj_tipo_estado->getColor(); //$rand_background;
            }

            $arr_widget['arr_cantidad'] = $arr_cantidad;
            $arr_widget['arr_dato_descripcion'] = $arr_dato_descripcion;
            $arr_widget['arr_dato_color'] = $arr_dato_color;
            $arr_widget['total'] = $total;
        }
        return $arr_widget;
    }

    /**
     * Prepara el SQL de Orden Pago y devuelve un array con informacion para poder graficar
     * @param  [string] $fecha_desde [fecha desde]
     * @param  [string] $fecha_hasta [fecha hasta]
     * @return [array]  $arr_widget  [array con el resultado]
     */
    static function getWidgetPdeOrdenPagoBar($fecha_desde, $fecha_hasta, $prv_proveedor_id = false, $visualizacion) {
        $arr_widget = array();
        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------
            $sql = "SELECT 
                    pde_orden_pago_tipo_estado.descripcion as tipo_estado_descripcion,
                            pde_orden_pago_tipo_estado.codigo as tipo_estado_codigo,
                    pde_orden_pago_tipo_estado.orden as tipo_estado_orden,";
            if ($visualizacion == GralSiNo::GRAL_SINO_CI_CANTIDAD) {
                $sql .= "count(pde_orden_pago.id) as cantidad ";
            } elseif (GralSiNo::GRAL_SINO_CI_IMPORTE) {
                $sql .= "sum(pde_orden_pago_importe.importe_total) as cantidad ";
            }
            $sql .= "FROM pde_orden_pago
                    LEFT JOIN pde_orden_pago_importe on pde_orden_pago_importe.pde_orden_pago_id = pde_orden_pago.id 
                    LEFT JOIN pde_orden_pago_tipo_estado on pde_orden_pago_tipo_estado.id = pde_orden_pago.pde_orden_pago_tipo_estado_id
                    LEFT JOIN prv_proveedor on prv_proveedor.id = pde_orden_pago.prv_proveedor_id
                    WHERE pde_orden_pago.fecha_emision::DATE BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'
                    ";

            if ($prv_proveedor_id != 0) {
                $sql .= " AND prv_proveedor.id = " . $prv_proveedor_id;
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

                $obj_tipo_estado = PdeOrdenPagoTipoEstado::getOxCodigo($dato_codigo);
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

    /**
     * Prepara el SQL de Orden Pago y devuelve un array con informacion para poder graficar
     * @param  [string] $fecha_desde [fecha desde]
     * @param  [string] $fecha_hasta [fecha desde]
     * @return [array] $arr_widget  [array con el resultado]
     */
    static function getWidgetPdeOrdenPagoPie($fecha_desde, $fecha_hasta, $prv_proveedor_id = false, $visualizacion) {
        $arr_widget = array();
        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------
            $sql = "SELECT 
                    pde_orden_pago_tipo_estado.descripcion as tipo_estado_descripcion,
                            pde_orden_pago_tipo_estado.codigo as tipo_estado_codigo,
                    pde_orden_pago_tipo_estado.orden as tipo_estado_orden,";
            if ($visualizacion == GralSiNo::GRAL_SINO_CI_CANTIDAD) {
                $sql .= "count(pde_orden_pago.id) as cantidad ";
            } elseif (GralSiNo::GRAL_SINO_CI_IMPORTE) {
                $sql .= "sum(pde_orden_pago_importe.importe_total) as cantidad ";
            }
            $sql .= "FROM pde_orden_pago
                    LEFT JOIN pde_orden_pago_importe on pde_orden_pago_importe.pde_orden_pago_id = pde_orden_pago.id 
                    LEFT JOIN pde_orden_pago_tipo_estado on pde_orden_pago_tipo_estado.id = pde_orden_pago.pde_orden_pago_tipo_estado_id
                    LEFT JOIN prv_proveedor on prv_proveedor.id = pde_orden_pago.prv_proveedor_id
                    WHERE pde_orden_pago.fecha_emision::DATE BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'
                    ";

            if ($prv_proveedor_id != 0) {
                $sql .= " AND prv_proveedor.id = " . $prv_proveedor_id;
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

            $total = 0;
            $arr_cantidad = array();
            $arr_dato_descripcion = array();
            $arr_dato_color = array();

            $resultado = $cons->getResultado();
            while ($fila = pg_fetch_object($resultado)) {
                $total += $fila->cantidad;
            }

            pg_result_seek($resultado, 0); //Se reinicia el puntero para poder volver a iterar y tomar el valor total para obtener un porcentaje

            while ($fila = pg_fetch_object($resultado)) {
                $cantidad = $fila->cantidad;
                $porcentaje = ($cantidad / $total) * 100;
                $porcentaje = number_format($porcentaje, 0); //calculo del porcentaje
                $dato_descripcion = $fila->tipo_estado_descripcion . ' (' . $porcentaje . '%)';
                $dato_codigo = $fila->tipo_estado_codigo;

                $obj_tipo_estado = PdeOrdenPagoTipoEstado::getOxCodigo($dato_codigo);

                $arr_cantidad[] = $cantidad;
                $arr_dato_descripcion[] = $dato_descripcion;
                $arr_dato_color[] = $obj_tipo_estado->getColor(); //$rand_background;
            }

            $arr_widget['arr_cantidad'] = $arr_cantidad;
            $arr_widget['arr_dato_descripcion'] = $arr_dato_descripcion;
            $arr_widget['arr_dato_color'] = $arr_dato_color;
            $arr_widget['total'] = $total;
        }
        return $arr_widget;
    }

    static function getWidgetInsInsumoCantidadBar($fecha_desde, $fecha_hasta, $cantidad = 10, $ins_etiqueta_id = false, $ins_tipo_insumo_id = false, $importe_desde = false, $importe_hasta = false, $cli_cliente_id = false, $gral_sucursal_id = false, $ins_categoria_id = false, $gral_actividad_id = false, $ins_marca_id = false, $visualizacion, $cmb_ordenes) {
        $arr_widget = array();
        if ($fecha_desde && $fecha_hasta) {
        // ---------------------------------------------------------------------
        // se obtienen los datos
        // ---------------------------------------------------------------------

            $sql = "SELECT DISTINCT 
                    ins_insumo.descripcion as descripcion,
                    ins_insumo.codigo_interno as codigo_interno,";
            if ($visualizacion == GralSiNo::GRAL_SINO_CI_CANTIDAD) {
                if ($cmb_ordenes == GralSiNo::GRAL_SINO_OV_CANTIDAD_VENTAS) {
                    $sql .= "count(vta_orden_venta.id) as cantidad ";
                } elseif (GralSiNo::GRAL_SINO_OV_CANTIDAD_VENDIDA) {
                    $sql .= "SUM(vta_orden_venta.cantidad) as cantidad ";
                }
            } elseif (GralSiNo::GRAL_SINO_CI_IMPORTE) {
                $sql .= "SUM(vta_orden_venta_importe.importe_total) as cantidad ";
            }
            $sql .= "FROM vta_orden_venta
                    LEFT JOIN vta_orden_venta_importe on vta_orden_venta_importe.vta_orden_venta_id = vta_orden_venta.id
                    LEFT JOIN vta_orden_venta_tipo_estado on vta_orden_venta_tipo_estado.id = vta_orden_venta.vta_orden_venta_tipo_estado_id
                    LEFT JOIN ins_insumo on ins_insumo.id = vta_orden_venta.ins_insumo_id
                    LEFT JOIN ins_tipo_insumo on ins_tipo_insumo.id = ins_insumo.ins_tipo_insumo_id
                    LEFT JOIN vta_presupuesto on vta_presupuesto.id = vta_orden_venta.vta_presupuesto_id
                    LEFT JOIN cli_cliente on cli_cliente.id = vta_presupuesto.cli_cliente_id
                    LEFT JOIN gral_sucursal on gral_sucursal.id = vta_presupuesto.gral_sucursal_id
                    LEFT JOIN ins_categoria on ins_categoria.id = ins_insumo.ins_categoria_id
                    LEFT JOIN ins_marca on ins_marca.id = ins_insumo.ins_marca_id
                    LEFT JOIN gral_actividad on gral_actividad.id = vta_presupuesto.gral_actividad_id
                    ";
            
            if ($ins_etiqueta_id) {
            $sql .= "                 
                    LEFT JOIN ins_insumo_ins_etiqueta on ins_insumo_ins_etiqueta.ins_insumo_id = ins_insumo.id
                    LEFT JOIN ins_etiqueta on ins_etiqueta.id = ins_insumo_ins_etiqueta.ins_etiqueta_id
                    ";
            }
            $sql .= "                 
                    WHERE vta_orden_venta.creado::DATE BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'
                    AND vta_orden_venta_tipo_estado.codigo <> '".VtaOrdenVentaTipoEstado::TIPO_CANCELADO."' 
                    ";
        if ($ins_etiqueta_id) {
            $sql .= " AND ins_etiqueta.id = " . $ins_etiqueta_id;
        }

        if ($ins_tipo_insumo_id) {
            $sql .= " AND ins_tipo_insumo.id = " . $ins_tipo_insumo_id;
        }

        if ($importe_desde) {
            $sql .= " AND vta_orden_venta.importe_unitario >= " . $importe_desde;
        }

        if ($importe_hasta) {
            $sql .= " AND vta_orden_venta.importe_unitario <= " . $importe_hasta;
        }

            if ($cli_cliente_id) {
                $sql .= " AND cli_cliente.id = " . $cli_cliente_id;
            }
            
            if ($gral_sucursal_id != 0) {
                $sql .= " AND gral_sucursal.id = " . $gral_sucursal_id;
            }
            
            if ($ins_categoria_id != 0) {
                $ins_categoria = InsCategoria::getOxId($ins_categoria_id);
                $sql .= " AND ins_categoria.codigo LIKE '" . $ins_categoria->getCodigo()."%'";
                //$sql .= " AND ins_categoria.id = " . $ins_categoria_id;
            }
            
            if ($gral_actividad_id != 0) {
                $sql .= " AND gral_actividad.id = " . $gral_actividad_id;
            }
            
            if ($ins_marca_id != 0) {
                $sql .= " AND ins_marca.id = " . $ins_marca_id;
            }

            $sql .= " GROUP BY 1, 2
                      ORDER BY cantidad DESC";
        $sql .= " LIMIT " . $cantidad . " OFFSET 0; ";
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

    /**
     * Prepara el SQL de presupuestos y devuelve un array con informacion para poder graficar
     * @param  [string] $fecha_desde    [description]
     * @param  [string] $fecha_hasta    [description]
     * @param  [int] $vta_vendedor_id   [description]
     * @param  [int] $gral_actividad_id [description]
     * @return [array] $arr_widget  [array con el resultado]
     */
    static function getWidgetVtaFacturaBar($fecha_desde, $fecha_hasta, $vta_vendedor_id = false, $gral_sucursal_id = false, $gral_actividad_id = false, $gral_escenario_id = false, $vta_preventista_id = false, $cli_cliente_id = false, $visualizacion) {
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
                    LEFT JOIN vta_vendedor on vta_vendedor.id = vta_factura.vta_vendedor_id
                    LEFT JOIN gral_sucursal on gral_sucursal.id = vta_factura.gral_sucursal_id
                    LEFT JOIN vta_factura_tipo_estado on vta_factura_tipo_estado.id = vta_factura.vta_factura_tipo_estado_id
                    LEFT JOIN gral_actividad on gral_actividad.id = vta_factura.gral_actividad_id  
                    LEFT JOIN vta_preventista on vta_preventista.id = vta_factura.vta_preventista_id
                    LEFT JOIN cli_cliente on cli_cliente.id = vta_factura.cli_cliente_id
                    LEFT JOIN gral_escenario on gral_escenario.id = vta_factura.gral_escenario_id
                    WHERE TRUE
                    AND vta_factura.fecha_emision BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'                    
                        ";

            if ($vta_vendedor_id != 0) {
                $sql .= " AND vta_vendedor.id = " . $vta_vendedor_id;
            }

            if ($gral_sucursal_id != 0) {
                $sql .= " AND gral_sucursal.id = " . $gral_sucursal_id;
            }

            if ($gral_actividad_id != 0) {
                $sql .= " AND gral_actividad.id = " . $gral_actividad_id;
            }

            if ($gral_escenario_id != 0) {
                $sql .= " AND gral_escenario.id = " . $gral_escenario_id;
            }

            if ($vta_preventista_id != 0) {
                $sql .= " AND vta_preventista.id = " . $vta_preventista_id;
            }
            
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

    /**
     * Prepara el SQL de presupuestos y devuelve un array con informacion para poder graficar
     * @param  [string]  $fecha_desde       [description]
     * @param  [string]  $fecha_hasta       [description]
     * @param  [int] $vta_vendedor_id   [description]
     * @param  [int] $gral_actividad_id [description]
     * @return [array] $arr_widget  [array con el resultado]
     */
    static function getWidgetVtaFacturaPie($fecha_desde, $fecha_hasta, $vta_vendedor_id = false, $gral_sucursal_id = false, $gral_actividad_id = false, $gral_escenario_id = false, $vta_preventista_id = false, $cli_cliente_id = false, $visualizacion) {
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
                    LEFT JOIN vta_vendedor on vta_vendedor.id = vta_factura.vta_vendedor_id
                    LEFT JOIN gral_sucursal on gral_sucursal.id = vta_factura.gral_sucursal_id
                    LEFT JOIN vta_factura_tipo_estado on vta_factura_tipo_estado.id = vta_factura.vta_factura_tipo_estado_id
                    LEFT JOIN gral_actividad on gral_actividad.id = vta_factura.gral_actividad_id      
                    LEFT JOIN vta_preventista on vta_preventista.id = vta_factura.vta_preventista_id
                    LEFT JOIN cli_cliente on cli_cliente.id = vta_factura.cli_cliente_id
                    LEFT JOIN gral_escenario on gral_escenario.id = vta_factura.gral_escenario_id
                    WHERE vta_factura.fecha_emision BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'                    
                        ";

            if ($vta_vendedor_id != 0) {
                $sql .= " AND vta_vendedor.id = " . $vta_vendedor_id;
            }

            if ($gral_sucursal_id != 0) {
                $sql .= " AND gral_sucursal.id = " . $gral_sucursal_id;
            }

            if ($gral_actividad_id != 0) {
                $sql .= " AND gral_actividad.id = " . $gral_actividad_id;
            }

            if ($gral_escenario_id != 0) {
                $sql .= " AND gral_escenario.id = " . $gral_escenario_id;
            }

            if ($vta_preventista_id != 0) {
                $sql .= " AND vta_preventista.id = " . $vta_preventista_id;
            }

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

            $total = 0;
            $arr_cantidad = array();
            $arr_dato_descripcion = array();
            $arr_dato_color = array();

            $resultado = $cons->getResultado();
            while ($fila = pg_fetch_object($resultado)) {
                $total += $fila->cantidad;
            }

            pg_result_seek($resultado, 0); //Se reinicia el puntero para poder volver a iterar y tomar el valor total para obtener un porcentaje

            while ($fila = pg_fetch_object($resultado)) {
                $cantidad = $fila->cantidad;
                $porcentaje = ($cantidad / $total) * 100;
                $porcentaje = number_format($porcentaje, 0); //calculo del porcentaje
                $dato_descripcion = $fila->tipo_estado_descripcion . ' (' . $porcentaje . '%)';
                $dato_codigo = $fila->tipo_estado_codigo;

                $obj_tipo_estado = VtaFacturaTipoEstado::getOxCodigo($dato_codigo);

                $arr_cantidad[] = $cantidad;
                $arr_dato_descripcion[] = $dato_descripcion;
                $arr_dato_color[] = $obj_tipo_estado->getColor(); //$rand_background;
            }

            $arr_widget['arr_cantidad'] = $arr_cantidad;
            $arr_widget['arr_dato_descripcion'] = $arr_dato_descripcion;
            $arr_widget['arr_dato_color'] = $arr_dato_color;
            $arr_widget['total'] = $total;
        }
        return $arr_widget;
    }

    /**
     * Prepara el SQL de presupuestos y devuelve un array con informacion para poder graficar
     * @param  [string] $fecha_desde    [description]
     * @param  [string] $fecha_hasta    [description]
     * @param  [int] $vta_vendedor_id   [description]
     * @param  [int] $gral_actividad_id [description]
     * @return [array] $arr_widget  [array con el resultado]
     */
    static function getWidgetVtaOrdenVentaBar($fecha_desde, $fecha_hasta, $vta_vendedor_id = false, $gral_sucursal_id = false, $gral_actividad_id = false, $gral_escenario_id = false, $ins_categoria_id = false, $vta_preventista_id = false, $cli_cliente_id = false, $visualizacion, $visualizacion_ov) {
        $arr_widget = array();

        if ($visualizacion_ov == GralSiNo::GRAL_SINO_OV_TIPO_ESTADO) {
            $estado = 'vta_orden_venta_tipo_estado';
        }
        if ($visualizacion_ov == GralSiNo::GRAL_SINO_OV_TIPO_ESTADO_REMISION) {
            $estado = 'vta_orden_venta_tipo_estado_remision';
        }
        if ($visualizacion_ov == GralSiNo::GRAL_SINO_OV_TIPO_ESTADO_FACTURACION) {
            $estado = 'vta_orden_venta_tipo_estado_facturacion';
        }

        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------

            $sql = "SELECT 
                    " . $estado . ".descripcion as tipo_estado_descripcion,
                    " . $estado . ".codigo as tipo_estado_codigo,
                    " . $estado . ".orden as tipo_estado_orden,";
            if ($visualizacion == GralSiNo::GRAL_SINO_CI_CANTIDAD) {
                $sql .= "count(vta_orden_venta.id) as cantidad ";
            } elseif (GralSiNo::GRAL_SINO_CI_IMPORTE) {
                $sql .= "sum(vta_orden_venta_importe.importe_total) as cantidad ";
            }
            $sql .= "FROM vta_orden_venta
                    LEFT JOIN vta_orden_venta_importe on vta_orden_venta_importe.vta_orden_venta_id = vta_orden_venta.id
                    LEFT JOIN " . $estado . " on " . $estado . ".id = vta_orden_venta." . $estado . "_id                    
                    LEFT JOIN vta_presupuesto on (vta_presupuesto.id = vta_orden_venta.vta_presupuesto_id)
                    LEFT JOIN vta_vendedor on vta_vendedor.id = vta_presupuesto.vta_vendedor_id
                    LEFT JOIN gral_actividad on gral_actividad.id = vta_presupuesto.gral_actividad_id
                    LEFT JOIN gral_sucursal on gral_sucursal.id = vta_presupuesto.gral_sucursal_id
                    LEFT JOIN ins_insumo on ins_insumo.id = vta_orden_venta.ins_insumo_id
                    LEFT JOIN ins_categoria on ins_categoria.id = ins_insumo.ins_categoria_id
                    LEFT JOIN vta_preventista on vta_preventista.id = vta_presupuesto.vta_preventista_id
                    LEFT JOIN cli_cliente on cli_cliente.id = vta_presupuesto.cli_cliente_id
                    LEFT JOIN gral_escenario on gral_escenario.id = vta_presupuesto.gral_escenario_id
                    WHERE vta_orden_venta.creado::DATE BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "' 
                        ";

            if ($vta_vendedor_id != 0) {
                $sql .= " AND vta_vendedor.id = " . $vta_vendedor_id;
            }

            if ($gral_sucursal_id != 0) {
                $sql .= " AND gral_sucursal.id = " . $gral_sucursal_id;
            }

            if ($gral_actividad_id != 0) {
                $sql .= " AND gral_actividad.id = " . $gral_actividad_id;
            }

            if ($gral_escenario_id != 0) {
                $sql .= " AND gral_escenario.id = " . $gral_escenario_id;
            }

            if ($ins_categoria_id != 0) {
                $ins_categoria = InsCategoria::getOxId($ins_categoria_id);
                $sql .= " AND ins_categoria.codigo LIKE '" . $ins_categoria->getCodigo()."%'";
                //$sql .= " AND ins_categoria.id = " . $ins_categoria_id;
            }

            if ($vta_preventista_id != 0) {
                $sql .= " AND vta_preventista.id = " . $vta_preventista_id;
            }
            
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

                if ($visualizacion_ov == GralSiNo::GRAL_SINO_OV_TIPO_ESTADO) {
                    $obj_tipo_estado = VtaOrdenVentaTipoEstado::getOxCodigo($dato_codigo);
                }
                if ($visualizacion_ov == GralSiNo::GRAL_SINO_OV_TIPO_ESTADO_REMISION) {
                    $obj_tipo_estado = VtaOrdenVentaTipoEstadoRemision::getOxCodigo($dato_codigo);
                }
                if ($visualizacion_ov == GralSiNo::GRAL_SINO_OV_TIPO_ESTADO_FACTURACION) {
                    $obj_tipo_estado = VtaOrdenVentaTipoEstadoFacturacion::getOxCodigo($dato_codigo);
                }

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

    /**
     * Prepara el SQL de presupuestos y devuelve un array con informacion para poder graficar
     * @param  [string]  $fecha_desde       [description]
     * @param  [string]  $fecha_hasta       [description]
     * @param  [int] $vta_vendedor_id   [description]
     * @param  [int] $gral_actividad_id [description]
     * @return [array] $arr_widget  [array con el resultado]
     */
    static function getWidgetVtaOrdenVentaPie($fecha_desde, $fecha_hasta, $vta_vendedor_id = false, $gral_sucursal_id = false, $gral_actividad_id = false, $gral_escenario_id = false, $ins_categoria_id = false, $vta_preventista_id = false, $cli_cliente_id = false, $visualizacion, $visualizacion_ov) {
        $arr_widget = array();

        if ($visualizacion_ov == GralSiNo::GRAL_SINO_OV_TIPO_ESTADO) {
            $estado = 'vta_orden_venta_tipo_estado';
        }
        if ($visualizacion_ov == GralSiNo::GRAL_SINO_OV_TIPO_ESTADO_REMISION) {
            $estado = 'vta_orden_venta_tipo_estado_remision';
        }
        if ($visualizacion_ov == GralSiNo::GRAL_SINO_OV_TIPO_ESTADO_FACTURACION) {
            $estado = 'vta_orden_venta_tipo_estado_facturacion';
        }

        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------

            $sql = "SELECT 
                    " . $estado . ".descripcion as tipo_estado_descripcion,
                    " . $estado . ".codigo as tipo_estado_codigo,
                    " . $estado . ".orden as tipo_estado_orden,";
            if ($visualizacion == GralSiNo::GRAL_SINO_CI_CANTIDAD) {
                $sql .= "count(vta_orden_venta.id) as cantidad ";
            } elseif (GralSiNo::GRAL_SINO_CI_IMPORTE) {
                $sql .= "sum(vta_orden_venta_importe.importe_total) as cantidad ";
            }
            $sql .= "FROM vta_orden_venta
                    LEFT JOIN vta_orden_venta_importe on vta_orden_venta_importe.vta_orden_venta_id = vta_orden_venta.id
                    LEFT JOIN " . $estado . " on " . $estado . ".id = vta_orden_venta." . $estado . "_id                    
                    LEFT JOIN vta_presupuesto on (vta_presupuesto.id = vta_orden_venta.vta_presupuesto_id)
                    LEFT JOIN vta_vendedor on vta_vendedor.id = vta_presupuesto.vta_vendedor_id
                    LEFT JOIN gral_actividad on gral_actividad.id = vta_presupuesto.gral_actividad_id
                    LEFT JOIN gral_sucursal on gral_sucursal.id = vta_presupuesto.gral_sucursal_id
                    LEFT JOIN ins_insumo on ins_insumo.id = vta_orden_venta.ins_insumo_id
                    LEFT JOIN ins_categoria on ins_categoria.id = ins_insumo.ins_categoria_id
                    LEFT JOIN vta_preventista on vta_preventista.id = vta_presupuesto.vta_preventista_id
                    LEFT JOIN cli_cliente on cli_cliente.id = vta_presupuesto.cli_cliente_id
                    LEFT JOIN gral_escenario on gral_escenario.id = vta_presupuesto.gral_escenario_id
                    WHERE vta_orden_venta.creado::DATE BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "' 
                        ";

            if ($vta_vendedor_id != 0) {
                $sql .= " AND vta_vendedor.id = " . $vta_vendedor_id;
            }

            if ($gral_sucursal_id != 0) {
                $sql .= " AND gral_sucursal.id = " . $gral_sucursal_id;
            }

            if ($gral_actividad_id != 0) {
                $sql .= " AND gral_actividad.id = " . $gral_actividad_id;
            }

            if ($gral_escenario_id != 0) {
                $sql .= " AND gral_escenario.id = " . $gral_escenario_id;
            }
            
            if ($ins_categoria_id != 0) {
                $ins_categoria = InsCategoria::getOxId($ins_categoria_id);
                $sql .= " AND ins_categoria.codigo LIKE '" . $ins_categoria->getCodigo()."%'";
                //$sql .= " AND ins_categoria.id = " . $ins_categoria_id;
            }

            if ($vta_preventista_id != 0) {
                $sql .= " AND vta_preventista.id = " . $vta_preventista_id;
            }

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

            $total = 0;
            $arr_cantidad = array();
            $arr_dato_descripcion = array();
            $arr_dato_color = array();

            $resultado = $cons->getResultado();
            while ($fila = pg_fetch_object($resultado)) {
                $total += $fila->cantidad;
            }

            pg_result_seek($resultado, 0); //Se reinicia el puntero para poder volver a iterar y tomar el valor total para obtener un porcentaje

            while ($fila = pg_fetch_object($resultado)) {
                $cantidad = $fila->cantidad;
                $porcentaje = ($cantidad / $total) * 100;
                $porcentaje = number_format($porcentaje, 0); //calculo del porcentaje
                $dato_descripcion = $fila->tipo_estado_descripcion . ' (' . $porcentaje . '%)';
                $dato_codigo = $fila->tipo_estado_codigo;

                if ($visualizacion_ov == GralSiNo::GRAL_SINO_OV_TIPO_ESTADO) {
                    $obj_tipo_estado = VtaOrdenVentaTipoEstado::getOxCodigo($dato_codigo);
                }
                if ($visualizacion_ov == GralSiNo::GRAL_SINO_OV_TIPO_ESTADO_REMISION) {
                    $obj_tipo_estado = VtaOrdenVentaTipoEstadoRemision::getOxCodigo($dato_codigo);
                }
                if ($visualizacion_ov == GralSiNo::GRAL_SINO_OV_TIPO_ESTADO_FACTURACION) {
                    $obj_tipo_estado = VtaOrdenVentaTipoEstadoFacturacion::getOxCodigo($dato_codigo);
                }

                $arr_cantidad[] = $cantidad;
                $arr_dato_descripcion[] = $dato_descripcion;
                $arr_dato_color[] = $obj_tipo_estado->getColor(); //$rand_background;
            }

            $arr_widget['arr_cantidad'] = $arr_cantidad;
            $arr_widget['arr_dato_descripcion'] = $arr_dato_descripcion;
            $arr_widget['arr_dato_color'] = $arr_dato_color;
            $arr_widget['total'] = $total;
        }
        return $arr_widget;
    }

    /**
     * Prepara el SQL de presupuestos y devuelve un array con informacion para poder graficar
     * @param  [string] $fecha_desde    [description]
     * @param  [string] $fecha_hasta    [description]
     * @param  [int] $gral_actividad_id [description]
     * @return [array] $arr_widget  [array con el resultado]
     */
    static function getWidgetPdeFacturaBar($fecha_desde, $fecha_hasta, $gral_actividad_id = false, $gral_escenario_id = false, $prv_proveedor_id = false, $visualizacion) {
        $arr_widget = array();
        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------

            $sql = "SELECT 
                    pde_factura_tipo_estado.descripcion as tipo_estado_descripcion,
                    pde_factura_tipo_estado.codigo as tipo_estado_codigo,
                    pde_factura_tipo_estado.orden as tipo_estado_orden,";
            if ($visualizacion == GralSiNo::GRAL_SINO_CI_CANTIDAD) {
                $sql .= "count(pde_factura.id) as cantidad ";
            } elseif (GralSiNo::GRAL_SINO_CI_IMPORTE) {
                $sql .= "sum(pde_factura_importe.importe_total) as cantidad ";
            }
            $sql .= "FROM pde_factura
                    LEFT JOIN pde_factura_importe on pde_factura_importe.pde_factura_id = pde_factura.id
                    LEFT JOIN pde_factura_tipo_estado on pde_factura_tipo_estado.id = pde_factura.pde_factura_tipo_estado_id
                    LEFT JOIN gral_actividad on gral_actividad.id = pde_factura.gral_actividad_id  
                    LEFT JOIN prv_proveedor on prv_proveedor.id = pde_factura.prv_proveedor_id
                    LEFT JOIN gral_escenario on gral_escenario.id = pde_factura.gral_escenario_id
                    WHERE pde_factura.fecha_emision BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'                    
                        ";

            if ($gral_actividad_id != 0) {
                $sql .= " AND gral_actividad.id = " . $gral_actividad_id;
            }

            if ($gral_escenario_id != 0) {
                $sql .= " AND gral_escenario.id = " . $gral_escenario_id;
            }

            if ($prv_proveedor_id != 0) {
                $sql .= " AND prv_proveedor.id = " . $prv_proveedor_id;
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

                $obj_tipo_estado = PdeFacturaTipoEstado::getOxCodigo($dato_codigo);
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

    /**
     * Prepara el SQL de presupuestos y devuelve un array con informacion para poder graficar
     * @param  [string]  $fecha_desde       [description]
     * @param  [string]  $fecha_hasta       [description]
     * @param  [int] $gral_actividad_id [description]
     * @return [array] $arr_widget  [array con el resultado]
     */
    static function getWidgetPdeFacturaPie($fecha_desde, $fecha_hasta, $gral_actividad_id = false, $gral_escenario_id = false, $prv_proveedor_id = false, $visualizacion) {
        $arr_widget = array();
        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------

            $sql = "SELECT 
                    pde_factura_tipo_estado.descripcion as tipo_estado_descripcion,
                    pde_factura_tipo_estado.codigo as tipo_estado_codigo,
                    pde_factura_tipo_estado.orden as tipo_estado_orden,";
            if ($visualizacion == GralSiNo::GRAL_SINO_CI_CANTIDAD) {
                $sql .= "count(pde_factura.id) as cantidad ";
            } elseif (GralSiNo::GRAL_SINO_CI_IMPORTE) {
                $sql .= "sum(pde_factura_importe.importe_total) as cantidad ";
            }
            $sql .= "FROM pde_factura
                    LEFT JOIN pde_factura_importe on pde_factura_importe.pde_factura_id = pde_factura.id
                    LEFT JOIN pde_factura_tipo_estado on pde_factura_tipo_estado.id = pde_factura.pde_factura_tipo_estado_id
                    LEFT JOIN gral_actividad on gral_actividad.id = pde_factura.gral_actividad_id  
                    LEFT JOIN prv_proveedor on prv_proveedor.id = pde_factura.prv_proveedor_id
                    LEFT JOIN gral_escenario on gral_escenario.id = pde_factura.gral_escenario_id
                    WHERE pde_factura.fecha_emision BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'                    
                        ";

            if ($gral_actividad_id != 0) {
                $sql .= " AND gral_actividad.id = " . $gral_actividad_id;
            }

            if ($gral_escenario_id != 0) {
                $sql .= " AND gral_escenario.id = " . $gral_escenario_id;
            }

            if ($prv_proveedor_id != 0) {
                $sql .= " AND prv_proveedor.id = " . $prv_proveedor_id;
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

            $total = 0;
            $arr_cantidad = array();
            $arr_dato_descripcion = array();
            $arr_dato_color = array();

            $resultado = $cons->getResultado();
            while ($fila = pg_fetch_object($resultado)) {
                $total += $fila->cantidad;
            }

            pg_result_seek($resultado, 0); //Se reinicia el puntero para poder volver a iterar y tomar el valor total para obtener un porcentaje

            while ($fila = pg_fetch_object($resultado)) {
                $cantidad = $fila->cantidad;
                $porcentaje = ($cantidad / $total) * 100;
                $porcentaje = number_format($porcentaje, 0); //calculo del porcentaje
                $dato_descripcion = $fila->tipo_estado_descripcion . ' (' . $porcentaje . '%)';
                $dato_codigo = $fila->tipo_estado_codigo;

                $obj_tipo_estado = PdeFacturaTipoEstado::getOxCodigo($dato_codigo);

                $arr_cantidad[] = $cantidad;
                $arr_dato_descripcion[] = $dato_descripcion;
                $arr_dato_color[] = $obj_tipo_estado->getColor(); //$rand_background;
            }

            $arr_widget['arr_cantidad'] = $arr_cantidad;
            $arr_widget['arr_dato_descripcion'] = $arr_dato_descripcion;
            $arr_widget['arr_dato_color'] = $arr_dato_color;
            $arr_widget['total'] = $total;
        }
        return $arr_widget;
    }

    static function getWidgetPdiPedidoBar($fecha_desde, $fecha_hasta, $pan_panol_origen, $pan_panol_destino, $activo) {
        $arr_widget = array();
        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------
            $sql = "SELECT 
                    pdi_tipo_estado.descripcion as tipo_estado_descripcion,
                    pdi_tipo_estado.codigo as tipo_estado_codigo,
                    pdi_tipo_estado.orden as tipo_estado_orden,
                    count(pdi_pedido.id) as cantidad
                    FROM pdi_pedido
                    LEFT JOIN pdi_tipo_estado on pdi_tipo_estado.id = pdi_pedido.pdi_tipo_estado_id
                    LEFT JOIN pan_panol AS pan_panol_origen on pan_panol_origen.id = pdi_pedido.pan_panol_origen
                    LEFT JOIN pan_panol AS pan_panol_destino on pan_panol_destino.id = pdi_pedido.pan_panol_destino
                    WHERE TRUE                   
                    AND pdi_tipo_estado.gestionable = 1
                    AND pdi_pedido.creado::DATE BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'
                        ";

            if ($pan_panol_origen != 0) {
                $sql .= " AND pan_panol_origen.id = " . $pan_panol_origen;
            }

            if ($pan_panol_destino != 0) {
                $sql .= " AND pan_panol_destino.id = " . $pan_panol_destino;
            }

            if ($activo != -1) {
                $sql .= " AND pdi_tipo_estado.activo = " . $activo;
            }

            $sql .= "
                        GROUP BY tipo_estado_descripcion, tipo_estado_codigo, tipo_estado_orden
                        ORDER BY tipo_estado_orden ASC 
                        ;
                    ";
            //Gral::pr($sql);

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

                $obj_tipo_estado = PdiTipoEstado::getOxCodigo($dato_codigo);
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

    static function getWidgetPdiPedidoPie($fecha_desde, $fecha_hasta, $pan_panol_origen, $pan_panol_destino, $activo) {
        $arr_widget = array();
        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------

            $sql = "SELECT 
                    pdi_tipo_estado.descripcion as tipo_estado_descripcion,
                    pdi_tipo_estado.codigo as tipo_estado_codigo,
                    pdi_tipo_estado.orden as tipo_estado_orden,
                    count(pdi_pedido.id) as cantidad
                    FROM pdi_pedido
                    LEFT JOIN pdi_tipo_estado on pdi_tipo_estado.id = pdi_pedido.pdi_tipo_estado_id
                    LEFT JOIN pan_panol AS pan_panol_origen on pan_panol_origen.id = pdi_pedido.pan_panol_origen
                    LEFT JOIN pan_panol AS pan_panol_destino on pan_panol_destino.id = pdi_pedido.pan_panol_destino
                    WHERE TRUE      
                    AND pdi_tipo_estado.gestionable = 1
                    AND pdi_pedido.creado::DATE BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'
                        ";

            if ($pan_panol_origen != 0) {
                $sql .= " AND pan_panol_origen.id = " . $pan_panol_origen;
            }

            if ($pan_panol_destino != 0) {
                $sql .= " AND pan_panol_destino.id = " . $pan_panol_destino;
            }

            if ($activo != -1) {
                $sql .= " AND pdi_tipo_estado.activo = " . $activo;
            }

            $sql .= "
                        GROUP BY tipo_estado_descripcion, tipo_estado_codigo, tipo_estado_orden
                        ORDER BY tipo_estado_orden ASC 
                        ;
                    ";
            //Gral::pr($sql);

            $cons = new Consulta();
            $cons->setSQL($sql);
            $cons->execute();

            $total = 0;
            $arr_cantidad = array();
            $arr_dato_descripcion = array();
            $arr_dato_color = array();

            $resultado = $cons->getResultado();
            while ($fila = pg_fetch_object($resultado)) {
                $total += $fila->cantidad;
            }

            pg_result_seek($resultado, 0); //Se reinicia el puntero para poder volver a iterar y tomar el valor total para obtener un porcentaje

            while ($fila = pg_fetch_object($resultado)) {
                $cantidad = $fila->cantidad;
                $porcentaje = ($cantidad / $total) * 100;
                $porcentaje = number_format($porcentaje, 0); //calculo del porcentaje
                $dato_descripcion = $fila->tipo_estado_descripcion . ' (' . $porcentaje . '%)';
                $dato_codigo = $fila->tipo_estado_codigo;

                $obj_tipo_estado = PdiTipoEstado::getOxCodigo($dato_codigo);

                $arr_cantidad[] = $cantidad;
                $arr_dato_descripcion[] = $dato_descripcion;
                $arr_dato_color[] = $obj_tipo_estado->getColor(); //$rand_background;
            }

            $arr_widget['arr_cantidad'] = $arr_cantidad;
            $arr_widget['arr_dato_descripcion'] = $arr_dato_descripcion;
            $arr_widget['arr_dato_color'] = $arr_dato_color;
            $arr_widget['total'] = $total;
        }
        return $arr_widget;
    }

    static function getWidgetFndCajaBar($fecha_desde, $fecha_hasta, $gral_caja_id, $fnd_cajero_id, $visualizacion) {
        $arr_widget = array();
        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------

            $sql = "SELECT 
                    fnd_caja_tipo_estado.descripcion as tipo_estado_descripcion,
                    fnd_caja_tipo_estado.codigo as tipo_estado_codigo,
                    fnd_caja_tipo_estado.orden as tipo_estado_orden,";
            if ($visualizacion == GralSiNo::GRAL_SINO_CI_CANTIDAD) {
                $sql .= "count(fnd_caja.id) as cantidad ";
            } elseif (GralSiNo::GRAL_SINO_CI_IMPORTE) {
                $sql .= "sum(fnd_caja.importe_efectivo_final_informado) as cantidad ";
            }
            $sql .= "FROM fnd_caja
                    LEFT JOIN fnd_caja_tipo_estado on fnd_caja_tipo_estado.id = fnd_caja.fnd_caja_tipo_estado_id
                    LEFT JOIN gral_caja on gral_caja.id = fnd_caja.gral_caja_id  
                    LEFT JOIN fnd_cajero on fnd_cajero.id = fnd_caja.fnd_cajero_id
                    WHERE TRUE
                    AND fnd_caja.fecha_apertura BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'                    
                        ";

            if ($gral_caja_id != 0) {
                $sql .= " AND gral_caja.id = " . $gral_caja_id;
            }

            if ($fnd_cajero_id != 0) {
                $sql .= " AND fnd_cajero.id = " . $fnd_cajero_id;
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

                $obj_tipo_estado = FndCajaTipoEstado::getOxCodigo($dato_codigo);
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

    static function getWidgetFndCajaPie($fecha_desde, $fecha_hasta, $gral_caja_id, $fnd_cajero_id, $visualizacion) {
        $arr_widget = array();
        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------

            $sql = "SELECT 
                    fnd_caja_tipo_estado.descripcion as tipo_estado_descripcion,
                    fnd_caja_tipo_estado.codigo as tipo_estado_codigo,
                    fnd_caja_tipo_estado.orden as tipo_estado_orden,";
            if ($visualizacion == GralSiNo::GRAL_SINO_CI_CANTIDAD) {
                $sql .= "count(fnd_caja.id) as cantidad ";
            } elseif (GralSiNo::GRAL_SINO_CI_IMPORTE) {
                $sql .= "sum(fnd_caja.importe_efectivo_final_informado) as cantidad ";
            }
            $sql .= "FROM fnd_caja
                    LEFT JOIN fnd_caja_tipo_estado on fnd_caja_tipo_estado.id = fnd_caja.fnd_caja_tipo_estado_id
                    LEFT JOIN gral_caja on gral_caja.id = fnd_caja.gral_caja_id  
                    LEFT JOIN fnd_cajero on fnd_cajero.id = fnd_caja.fnd_cajero_id
                    WHERE TRUE
                    AND fnd_caja.fecha_apertura BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'                    
                        ";

            if ($gral_caja_id != 0) {
                $sql .= " AND gral_caja.id = " . $gral_caja_id;
            }

            if ($fnd_cajero_id != 0) {
                $sql .= " AND fnd_cajero.id = " . $fnd_cajero_id;
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

            $total = 0;
            $arr_cantidad = array();
            $arr_dato_descripcion = array();
            $arr_dato_color = array();

            $resultado = $cons->getResultado();
            while ($fila = pg_fetch_object($resultado)) {
                $total += $fila->cantidad;
            }

            pg_result_seek($resultado, 0); //Se reinicia el puntero para poder volver a iterar y tomar el valor total para obtener un porcentaje

            while ($fila = pg_fetch_object($resultado)) {
                $cantidad = $fila->cantidad;
                $porcentaje = ($cantidad / $total) * 100;
                $porcentaje = number_format($porcentaje, 0); //calculo del porcentaje
                $dato_descripcion = $fila->tipo_estado_descripcion . ' (' . $porcentaje . '%)';
                $dato_codigo = $fila->tipo_estado_codigo;

                $obj_tipo_estado = FndCajaTipoEstado::getOxCodigo($dato_codigo);

                $arr_cantidad[] = $cantidad;
                $arr_dato_descripcion[] = $dato_descripcion;
                $arr_dato_color[] = $obj_tipo_estado->getColor(); //$rand_background;
            }

            $arr_widget['arr_cantidad'] = $arr_cantidad;
            $arr_widget['arr_dato_descripcion'] = $arr_dato_descripcion;
            $arr_widget['arr_dato_color'] = $arr_dato_color;
            $arr_widget['total'] = $total;
        }
        return $arr_widget;
    }
    
    /**
     * Prepara el SQL de presupuestos y devuelve un array con informacion para poder graficar
     * @param  [string] $fecha_desde    [description]
     * @param  [string] $fecha_hasta    [description]
     * @param  [int] $vta_vendedor_id   [description]
     * @param  [int] $gral_actividad_id [description]
     * @return [array] $arr_widget  [array con el resultado]
     */
    static function getWidgetVtaReciboBar($fecha_desde, $fecha_hasta, $fnd_cajero_id = false, $gral_sucursal_id = false, $cli_cliente_id = false, $vta_recibo_tipo_pago_id = false, $vta_recibo_condicion_pago_id = false, $visualizacion) {
        $arr_widget = array();
        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------

            $sql = "SELECT 
                    vta_recibo_tipo_estado.descripcion as tipo_estado_descripcion,
                    vta_recibo_tipo_estado.codigo as tipo_estado_codigo,
                    vta_recibo_tipo_estado.orden as tipo_estado_orden,";
            if ($visualizacion == GralSiNo::GRAL_SINO_CI_CANTIDAD) {
                $sql .= "count(vta_recibo.id) as cantidad ";
            } elseif (GralSiNo::GRAL_SINO_CI_IMPORTE) {
                $sql .= "sum(vta_recibo_importe.importe_total) as cantidad ";
            }
            $sql .= "FROM vta_recibo
                    LEFT JOIN vta_recibo_importe on vta_recibo_importe.vta_recibo_id = vta_recibo.id
                    LEFT JOIN fnd_caja on fnd_caja.id = vta_recibo.fnd_caja_id
                    LEFT JOIN fnd_cajero on fnd_cajero.id = fnd_caja.fnd_cajero_id
                    LEFT JOIN gral_sucursal on gral_sucursal.id = vta_recibo.gral_sucursal_id
                    LEFT JOIN vta_recibo_tipo_estado on vta_recibo_tipo_estado.id = vta_recibo.vta_recibo_tipo_estado_id
                    LEFT JOIN cli_cliente on cli_cliente.id = vta_recibo.cli_cliente_id
                    LEFT JOIN vta_recibo_tipo_pago on vta_recibo_tipo_pago.id = vta_recibo.vta_recibo_tipo_pago_id
                    LEFT JOIN vta_recibo_condicion_pago on vta_recibo_condicion_pago.id = vta_recibo.vta_recibo_condicion_pago_id
                    WHERE TRUE
                    AND vta_recibo.fecha_emision BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'                    
                        ";

            if ($fnd_cajero_id != 0) {
                $sql .= " AND fnd_cajero.id = " . $fnd_cajero_id;
            }

            if ($gral_sucursal_id != 0) {
                $sql .= " AND gral_sucursal.id = " . $gral_sucursal_id;
            }

            if ($cli_cliente_id != 0) {
                $sql .= " AND cli_cliente.id = " . $cli_cliente_id;
            }
            
            if ($vta_recibo_tipo_pago_id != 0) {
                $sql .= " AND vta_recibo_tipo_pago.id = " . $vta_recibo_tipo_pago_id;
            }
            
            if ($vta_recibo_condicion_pago_id != 0) {
                $sql .= " AND vta_recibo_condicion_pago.id = " . $vta_recibo_condicion_pago_id;
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

                $obj_tipo_estado = VtaReciboTipoEstado::getOxCodigo($dato_codigo);
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
    
    /**
     * Prepara el SQL de presupuestos y devuelve un array con informacion para poder graficar
     * @param  [string]  $fecha_desde       [description]
     * @param  [string]  $fecha_hasta       [description]
     * @param  [int] $vta_vendedor_id   [description]
     * @param  [int] $gral_actividad_id [description]
     * @return [array] $arr_widget  [array con el resultado]
     */
    static function getWidgetVtaReciboPie($fecha_desde, $fecha_hasta, $fnd_cajero_id = false, $gral_sucursal_id = false, $cli_cliente_id = false, $vta_recibo_tipo_pago_id = false, $vta_recibo_condicion_pago_id = false, $visualizacion) {
        $arr_widget = array();
        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------
            
            $sql = "SELECT 
                    vta_recibo_tipo_estado.descripcion as tipo_estado_descripcion,
                    vta_recibo_tipo_estado.codigo as tipo_estado_codigo,
                    vta_recibo_tipo_estado.orden as tipo_estado_orden,";
            if ($visualizacion == GralSiNo::GRAL_SINO_CI_CANTIDAD) {
                $sql .= "count(vta_recibo.id) as cantidad ";
            } elseif (GralSiNo::GRAL_SINO_CI_IMPORTE) {
                $sql .= "sum(vta_recibo_importe.importe_total) as cantidad ";
            }
            $sql .= "FROM vta_recibo
                    LEFT JOIN vta_recibo_importe on vta_recibo_importe.vta_recibo_id = vta_recibo.id
                    LEFT JOIN fnd_caja on fnd_caja.id = vta_recibo.fnd_caja_id
                    LEFT JOIN fnd_cajero on fnd_cajero.id = fnd_caja.fnd_cajero_id
                    LEFT JOIN gral_sucursal on gral_sucursal.id = vta_recibo.gral_sucursal_id
                    LEFT JOIN vta_recibo_tipo_estado on vta_recibo_tipo_estado.id = vta_recibo.vta_recibo_tipo_estado_id
                    LEFT JOIN cli_cliente on cli_cliente.id = vta_recibo.cli_cliente_id
                    LEFT JOIN vta_recibo_tipo_pago on vta_recibo_tipo_pago.id = vta_recibo.vta_recibo_tipo_pago_id
                    LEFT JOIN vta_recibo_condicion_pago on vta_recibo_condicion_pago.id = vta_recibo.vta_recibo_condicion_pago_id
                    WHERE TRUE
                    AND vta_recibo.fecha_emision BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'                    
                        ";

            if ($fnd_cajero_id != 0) {
                $sql .= " AND fnd_cajero.id = " . $fnd_cajero_id;
            }

            if ($gral_sucursal_id != 0) {
                $sql .= " AND gral_sucursal.id = " . $gral_sucursal_id;
            }

            if ($cli_cliente_id != 0) {
                $sql .= " AND cli_cliente.id = " . $cli_cliente_id;
            }
            
            if ($vta_recibo_tipo_pago_id != 0) {
                $sql .= " AND vta_recibo_tipo_pago.id = " . $vta_recibo_tipo_pago_id;
            }
            
            if ($vta_recibo_condicion_pago_id != 0) {
                $sql .= " AND vta_recibo_condicion_pago.id = " . $vta_recibo_condicion_pago_id;
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

            $total = 0;
            $arr_cantidad = array();
            $arr_dato_descripcion = array();
            $arr_dato_color = array();

            $resultado = $cons->getResultado();
            while ($fila = pg_fetch_object($resultado)) {
                $total += $fila->cantidad;
            }

            pg_result_seek($resultado, 0); //Se reinicia el puntero para poder volver a iterar y tomar el valor total para obtener un porcentaje

            while ($fila = pg_fetch_object($resultado)) {
                $cantidad = $fila->cantidad;
                $porcentaje = ($cantidad / $total) * 100;
                $porcentaje = number_format($porcentaje, 0); //calculo del porcentaje
                $dato_descripcion = $fila->tipo_estado_descripcion . ' (' . $porcentaje . '%)';
                $dato_codigo = $fila->tipo_estado_codigo;

                $obj_tipo_estado = VtaReciboTipoEstado::getOxCodigo($dato_codigo);

                $arr_cantidad[] = $cantidad;
                $arr_dato_descripcion[] = $dato_descripcion;
                $arr_dato_color[] = $obj_tipo_estado->getColor(); //$rand_background;
            }

            $arr_widget['arr_cantidad'] = $arr_cantidad;
            $arr_widget['arr_dato_descripcion'] = $arr_dato_descripcion;
            $arr_widget['arr_dato_color'] = $arr_dato_color;
            $arr_widget['total'] = $total;
        }
        return $arr_widget;
    }
    
    static function getWidgetFndCajaFlujoEfectivoTimeline($periodicidad, $fecha_desde, $fecha_hasta, $gral_caja_id, $fnd_cajero_id, $fnd_caja_tipo_estado_id) {
        $arr_widget = array();
        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------

            $sql = "SELECT 
                    fnd_caja.id as fnd_caja_id,
                    gral_caja.id as gral_caja_id,
                    gral_caja.descripcion as gral_caja_descripcion
                    FROM fnd_caja
                    LEFT JOIN fnd_caja_tipo_estado on fnd_caja_tipo_estado.id = fnd_caja.fnd_caja_tipo_estado_id
                    LEFT JOIN gral_caja on gral_caja.id = fnd_caja.gral_caja_id  
                    LEFT JOIN fnd_cajero on fnd_cajero.id = fnd_caja.fnd_cajero_id
                    WHERE TRUE
                    AND fnd_caja.fecha_apertura BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'   
                    AND fnd_caja.estado = 1
                        ";
            if ($gral_caja_id != 0) {
                $sql .= " AND gral_caja.id = " . $gral_caja_id;
            }

            if ($fnd_cajero_id != 0) {
                $sql .= " AND fnd_cajero.id = " . $fnd_cajero_id;
            }

            if ($fnd_caja_tipo_estado_id != 0) {
                $sql .= " AND fnd_caja_tipo_estado.id = " . $fnd_caja_tipo_estado_id;
            }

            $sql .= "
                    ORDER BY 
                        fnd_caja.id ASC
                        ;
                    ";
            //Gral::echoSqlSentence($sql);
            
            $cons = new Consulta();
            $cons->setSQL($sql);
            $cons->execute();


            // --------------------------------------------------------------
            // se comienza a procesar los datos
            // --------------------------------------------------------------
            $arr_periodos_unicos = array();
            $arr_cantidads_en_crudo = array();

            $arr_grafico_descripcions = array();
            $arr_grafico_fechas = array();
            $arr_grafico_dato_color = array();
            $arr_grafico_cantidads = array();


            // --------------------------------------------------------------
            // se recorre la consulta inicial para armar el array de cantidad crudo
            // --------------------------------------------------------------
            while ($fila = pg_fetch_object($cons->getResultado())) {

                $fnd_caja_id = $fila->fnd_caja_id;
                $fnd_caja = FndCaja::getOxId($fnd_caja_id);

                $gral_caja = $fnd_caja->getGralCaja();
                                
                $codigo = $gral_caja->getCodigo();
                $importe = $fnd_caja->getImporteEfectivoFinalRegistrado();
                $fecha = $fnd_caja->getFechaApertura();

                switch ($periodicidad) {
                    case Date::PERIODICIDAD_DIARIO:
                        $periodo_valor = $fecha;
                        break;
                    case Date::PERIODICIDAD_MENSUAL:
                        $arr_fecha = Date::getArrFecha($fecha);
                        $periodo_valor = $arr_fecha['mes'];
                        break;
                }

                $arr_cantidads_en_crudo[$codigo][$periodo_valor]+= $importe;
            }

            // -----------------------------------------------------------------
            // se arma un array completo con todas las fechas del rango para incluir las fechas donde 
            // no hay informacion desde la consulta
            // -----------------------------------------------------------------
            $arr_periodos_unicos = Date::getArrayFechasXRango($fecha_desde, $fecha_hasta, $periodicidad);
            foreach ($arr_periodos_unicos as $arr_periodo_unico) {
                switch ($periodicidad) {
                    case Date::PERIODICIDAD_DIARIO:                        
                        $arr_grafico_fechas[] = Gral::getFechaToWEB($arr_periodo_unico, 'DD/MM'); // formatea el indice del array para el grafico
                        break;
                    case Date::PERIODICIDAD_MENSUAL:
                        $arr_grafico_fechas[] = Date::getMesLetras($arr_periodo_unico); // formatea el indice del array para el grafico
                        break;
                }
            }

            // -----------------------------------------------------------------
            // se procesa array crudo para obtener array cantidads para el grafico
            // -----------------------------------------------------------------
            foreach ($arr_cantidads_en_crudo as $codigo => $arr_cantidad_por_periodo) {
                $arr_cantidad = array();
                $cantidad_total_por_linea = 0;

                $gral_caja = GralCaja::getOxCodigo($codigo);

                // --------------------------------------------------------------
                // se genera el array de cantidads, pero limpio, como lo necesita el grafico
                // --------------------------------------------------------------
                foreach ($arr_periodos_unicos as $periodo => $arr_periodo_unico) {
                    $arr_cantidad[] = (!empty($arr_cantidad_por_periodo[$periodo])) ? $arr_cantidad_por_periodo[$periodo] : 0;
                }
                $arr_grafico_cantidads[] = $arr_cantidad;

                // --------------------------------------------------------------
                // se carga array de descripcion de cada linea
                // --------------------------------------------------------------
                $arr_grafico_descripcions[] = $gral_caja->getDescripcion();
                //$arr_grafico_dato_color[] = $fnd_caja->getColor();
            }
            
            // -----------------------------------------------------------------
            // aplicacion del limite de registros por cantidad elegida (simil paginador)
            // -----------------------------------------------------------------
            if($cantidad){
                $cont = 0;
                foreach($arr_grafico_descripcions as $arr_grafico_descripcion){
                    $cont++;
                    if($cont <= $cantidad){
                        $arr_grafico_descripcions_paginado[] = $arr_grafico_descripcion;                
                    }
                }
                $arr_grafico_descripcions = $arr_grafico_descripcions_paginado;
            }
            
            //Gral::prr($arr_cantidads_en_crudo);
            //Gral::prr($arr_grafico_cantidads);
            //Gral::prr($arr_grafico_fechas);
            //Gral::prr($arr_grafico_descripcions);
            //Gral::prr($arr_grafico_dato_color);


            $arr_datos_para_widget_tipo_timeline = GenWidget::getDatosSimpleParaWidgetTipoTimeline($arr_grafico_cantidads, $arr_grafico_descripcions, $arr_grafico_fechas, $arr_grafico_dato_color);

            $arr_widget['arr_descripcion'] = $arr_datos_para_widget_tipo_timeline['arr_descripcion'];
            $arr_widget['arr_linea_dataset'] = $arr_datos_para_widget_tipo_timeline['arr_linea_dataset'];
        }
        return $arr_widget;
    }
    
    static function getWidgetFndCajaFlujoEfectivoTimeline_OLD($fecha_desde, $fecha_hasta, $gral_caja_id, $fnd_cajero_id, $fnd_caja_tipo_estado_id) {
        $arr_widget = array();
        if ($fecha_desde && $fecha_hasta) {
            // -----------------------------------------------------------------
            // se obtienen los datos
            // -----------------------------------------------------------------
            $sql = "
                SELECT 
                    CURRENT_DATE + i as fecha_emision,
                    coalesce((
                        SELECT SUM(importe_efectivo_final_informado) 
                        FROM fnd_caja 
                        LEFT JOIN fnd_caja_tipo_estado on fnd_caja_tipo_estado.id = fnd_caja.fnd_caja_tipo_estado_id
                        LEFT JOIN gral_caja on gral_caja.id = fnd_caja.gral_caja_id  
                        LEFT JOIN fnd_cajero on fnd_cajero.id = fnd_caja.fnd_cajero_id
                        WHERE TRUE
                        AND fecha_apertura = CURRENT_DATE + i
                        ";

            if ($gral_caja_id != 0) {
                $sql .= " AND gral_caja.id = " . $gral_caja_id;
            }

            if ($fnd_cajero_id != 0) {
                $sql .= " AND fnd_cajero.id = " . $fnd_cajero_id;
            }

            if ($fnd_caja_tipo_estado_id != 0) {
                $sql .= " AND fnd_caja_tipo_estado.id = " . $fnd_caja_tipo_estado_id;
            }
            $sql .= "
                    ), 0) as valor_linea_efectivo
                FROM generate_series(date '" . $fecha_desde . "'- CURRENT_DATE, date '" . $fecha_hasta . "' - CURRENT_DATE ) i
            ";
            //Gral::echoSqlSentence($sql);

            $resultado = pg_exec($connect, $sql);

            $cons = new Consulta();
            $cons->setSQL($sql);
            $cons->execute();

            $arr_fechas = array();
            $arr_valor_linea_efectivo = array();
            
            while ($fila = pg_fetch_object($cons->getResultado())) {
                $fecha_emision = $fila->fecha_emision;

                $valor_linea_efectivo = $fila->valor_linea_efectivo;

                $arr_fechas[] = Gral::getFechaToWeb($fecha_emision, 'INCLUIR_DIA_NOMBRE');
                $arr_valor_linea_efectivo[] = $valor_linea_efectivo;

                $arr_total_lineas['linea_efectivo']+=$valor_linea_efectivo;
            }

            // -----------------------------------------------------------------------------
            // array de una linea
            // -----------------------------------------------------------------------------
            $arr_valor_linea_efectivo_chart = array(
                "codigo" => 'linea_efectivo',
                "label" => 'Cobros en Efectivo en Caja',
                "backgroundColor" => '#1e8c18',
                "borderColor" => '#1e8c18',
                "data" => $arr_valor_linea_efectivo,
                "fill" => false,
            );            
            
            // -----------------------------------------------------------------------------
            // array con la info de todas las lineas
            // -----------------------------------------------------------------------------
            $arr_valores_lineas_timeline[] = $arr_valor_linea_efectivo_chart;

            // -----------------------------------------------------------------------------
            // se cargan arrays para retornar
            // -----------------------------------------------------------------------------
            $arr_widget['arr_fechas'] = $arr_fechas;
            $arr_widget['arr_valores_lineas_timeline'] = $arr_valores_lineas_timeline;
            $arr_widget['arr_total_lineas'] = $arr_total_lineas;
        }
        return $arr_widget;
    }
    
    /**
     * Prepara el SQL de presupuestos y devuelve un array con informacion para poder graficar
     * @param  [string] $fecha_desde    [description]
     * @param  [string] $fecha_hasta    [description]
     * @param  [int] $gral_actividad_id [description]
     * @return [array] $arr_widget  [array con el resultado]
     */
    static function getWidgetInsStockResumenBar($pan_panol_id = false, $prv_proveedor_id = false, $ins_categoria_id = false, $ins_etiqueta_id = false, $ins_marca_id = false, $gral_requiere_pedido) {
        $arr_widget = array();
        if (true) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------
            $sql = "SELECT DISTINCT
                    ins_stock_resumen_tipo_estado.descripcion as tipo_estado_descripcion,
                    ins_stock_resumen_tipo_estado.codigo as tipo_estado_codigo,
                    ins_stock_resumen_tipo_estado.orden as tipo_estado_orden,
                    count(ins_stock_resumen.id) as cantidad
                    FROM ins_stock_resumen
                    LEFT JOIN ins_stock_resumen_tipo_estado on ins_stock_resumen_tipo_estado.id = ins_stock_resumen.ins_stock_resumen_tipo_estado_id
                    LEFT JOIN ins_insumo on ins_insumo.id = ins_stock_resumen.ins_insumo_id
                    LEFT JOIN pan_panol on pan_panol.id = ins_stock_resumen.pan_panol_id
                    LEFT JOIN ins_categoria on ins_categoria.id = ins_insumo.ins_categoria_id
                    LEFT JOIN ins_marca on ins_marca.id = ins_insumo.ins_marca_id
                    --LEFT JOIN prv_insumo on prv_insumo.ins_insumo_id = ins_insumo.id
                    LEFT JOIN ins_insumo_prv_proveedor on ins_insumo_prv_proveedor.ins_insumo_id = ins_insumo.id
                    LEFT JOIN prv_proveedor on prv_proveedor.id = ins_insumo_prv_proveedor.prv_proveedor_id
            ";
            
            if ($ins_etiqueta_id != 0) {
                $sql .= "            
                LEFT JOIN ins_insumo_ins_etiqueta on ins_insumo_ins_etiqueta.ins_insumo_id = ins_insumo.id
                LEFT JOIN ins_etiqueta on ins_etiqueta.id = ins_insumo_ins_etiqueta.ins_etiqueta_id    
                ";
            } 
            
            $sql .= "
                    WHERE TRUE
            ";
            
            if ($pan_panol_id != 0) {
                $sql .= " AND pan_panol.id = " . $pan_panol_id;
            }

            if ($prv_proveedor_id != 0) {
                $sql .= " AND prv_proveedor.id = " . $prv_proveedor_id;
            }

            if ($ins_categoria_id != 0) {
                $ins_categoria = InsCategoria::getOxId($ins_categoria_id);
                $sql .= " AND ins_categoria.codigo LIKE '" . $ins_categoria->getCodigo()."%'";
                //$sql .= " AND ins_categoria.id = " . $ins_categoria_id;
            }

            if ($ins_etiqueta_id != 0) {
                $sql .= " AND ins_etiqueta.id = " . $ins_etiqueta_id;
            }

            if ($ins_marca_id != 0) {
                $sql .= " AND ins_marca.id = " . $ins_marca_id;
            }
            
            if ($gral_requiere_pedido != -1) {
                $sql .= " AND ins_stock_resumen_tipo_estado.requiere_reabastecimiento = " . $gral_requiere_pedido;
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

                $obj_tipo_estado = InsStockResumenTipoEstado::getOxCodigo($dato_codigo);
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
    
    /**
     * Prepara el SQL de presupuestos y devuelve un array con informacion para poder graficar
     * @param  [string]  $fecha_desde       [description]
     * @param  [string]  $fecha_hasta       [description]
     * @param  [int] $gral_actividad_id [description]
     * @return [array] $arr_widget  [array con el resultado]
     */
    static function getWidgetInsStockResumenPie($pan_panol_id = false, $prv_proveedor_id = false, $ins_categoria_id = false, $ins_etiqueta_id = false, $ins_marca_id = false, $gral_requiere_pedido) {
        $arr_widget = array();
        if (true) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------

            $sql = "SELECT DISTINCT
                    ins_stock_resumen_tipo_estado.descripcion as tipo_estado_descripcion,
                    ins_stock_resumen_tipo_estado.codigo as tipo_estado_codigo,
                    ins_stock_resumen_tipo_estado.orden as tipo_estado_orden,
                    count(ins_stock_resumen.id) as cantidad
                    FROM ins_stock_resumen
                    LEFT JOIN ins_stock_resumen_tipo_estado on ins_stock_resumen_tipo_estado.id = ins_stock_resumen.ins_stock_resumen_tipo_estado_id
                    LEFT JOIN ins_insumo on ins_insumo.id = ins_stock_resumen.ins_insumo_id
                    LEFT JOIN pan_panol on pan_panol.id = ins_stock_resumen.pan_panol_id
                    LEFT JOIN ins_categoria on ins_categoria.id = ins_insumo.ins_categoria_id
                    LEFT JOIN ins_marca on ins_marca.id = ins_insumo.ins_marca_id
                    --LEFT JOIN prv_insumo on prv_insumo.ins_insumo_id = ins_insumo.id
                    LEFT JOIN ins_insumo_prv_proveedor on ins_insumo_prv_proveedor.ins_insumo_id = ins_insumo.id
                    LEFT JOIN prv_proveedor on prv_proveedor.id = ins_insumo_prv_proveedor.prv_proveedor_id
            ";
            
            if ($ins_etiqueta_id != 0) {
                $sql .= "            
                LEFT JOIN ins_insumo_ins_etiqueta on ins_insumo_ins_etiqueta.ins_insumo_id = ins_insumo.id
                LEFT JOIN ins_etiqueta on ins_etiqueta.id = ins_insumo_ins_etiqueta.ins_etiqueta_id    
                ";
            } 
            
            $sql .= "
                    WHERE TRUE
            ";
            
            if ($pan_panol_id != 0) {
                $sql .= " AND pan_panol.id = " . $pan_panol_id;
            }

            if ($prv_proveedor_id != 0) {
                $sql .= " AND prv_proveedor.id = " . $prv_proveedor_id;
            }

            if ($ins_categoria_id != 0) {
                $ins_categoria = InsCategoria::getOxId($ins_categoria_id);
                $sql .= " AND ins_categoria.codigo LIKE '" . $ins_categoria->getCodigo()."%'";
                //$sql .= " AND ins_categoria.id = " . $ins_categoria_id;
            }

            if ($ins_etiqueta_id != 0) {
                $sql .= " AND ins_etiqueta.id = " . $ins_etiqueta_id;
            }

            if ($ins_marca_id != 0) {
                $sql .= " AND ins_marca.id = " . $ins_marca_id;
            }
            
            if ($gral_requiere_pedido != -1) {
                $sql .= " AND ins_stock_resumen_tipo_estado.requiere_reabastecimiento = " . $gral_requiere_pedido;
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

            $total = 0;
            $arr_cantidad = array();
            $arr_dato_descripcion = array();
            $arr_dato_color = array();

            $resultado = $cons->getResultado();
            while ($fila = pg_fetch_object($resultado)) {
                $total += $fila->cantidad;
            }

            pg_result_seek($resultado, 0); //Se reinicia el puntero para poder volver a iterar y tomar el valor total para obtener un porcentaje

            while ($fila = pg_fetch_object($resultado)) {
                $cantidad = $fila->cantidad;
                $porcentaje = ($cantidad / $total) * 100;
                $porcentaje = number_format($porcentaje, 0); //calculo del porcentaje
                $dato_descripcion = $fila->tipo_estado_descripcion . ' (' . $porcentaje . '%)';
                $dato_codigo = $fila->tipo_estado_codigo;

                $obj_tipo_estado = InsStockResumenTipoEstado::getOxCodigo($dato_codigo);

                $arr_cantidad[] = $cantidad;
                $arr_dato_descripcion[] = $dato_descripcion;
                $arr_dato_color[] = $obj_tipo_estado->getColor(); //$rand_background;
            }

            $arr_widget['arr_cantidad'] = $arr_cantidad;
            $arr_widget['arr_dato_descripcion'] = $arr_dato_descripcion;
            $arr_widget['arr_dato_color'] = $arr_dato_color;
            $arr_widget['total'] = $total;
        }
        return $arr_widget;
    }
    
    static function getWidgetInsEtiquetaCantidadBar($fecha_desde, $fecha_hasta, $cantidad = 10, $ins_tipo_insumo_id = false, $importe_desde = false, $importe_hasta = false, $cli_cliente_id = false, $gral_sucursal_id = false, $ins_categoria_id = false, $gral_actividad_id = false, $ins_marca_id = false, $visualizacion) {
        $arr_widget = array();
        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------

            $sql = "SELECT DISTINCT 
                    ins_etiqueta.descripcion as descripcion,";
            if ($visualizacion == GralSiNo::GRAL_SINO_CI_CANTIDAD) {
                $sql .= "count(vta_orden_venta.id) as cantidad ";
            } elseif (GralSiNo::GRAL_SINO_CI_IMPORTE) {
                $sql .= "SUM(vta_orden_venta_importe.importe_total) as cantidad ";
            }
            $sql .= "FROM vta_orden_venta
                    LEFT JOIN vta_orden_venta_importe on vta_orden_venta_importe.vta_orden_venta_id = vta_orden_venta.id
                    LEFT JOIN vta_orden_venta_tipo_estado on vta_orden_venta_tipo_estado.id = vta_orden_venta.vta_orden_venta_tipo_estado_id
                    LEFT JOIN ins_insumo on ins_insumo.id = vta_orden_venta.ins_insumo_id
                    LEFT JOIN ins_tipo_insumo on ins_tipo_insumo.id = ins_insumo.ins_tipo_insumo_id
                    LEFT JOIN vta_presupuesto on vta_presupuesto.id = vta_orden_venta.vta_presupuesto_id
                    LEFT JOIN cli_cliente on cli_cliente.id = vta_presupuesto.cli_cliente_id
                    LEFT JOIN gral_sucursal on gral_sucursal.id = vta_presupuesto.gral_sucursal_id
                    LEFT JOIN ins_insumo_ins_etiqueta on ins_insumo_ins_etiqueta.ins_insumo_id = ins_insumo.id
                    LEFT JOIN ins_etiqueta on ins_etiqueta.id = ins_insumo_ins_etiqueta.ins_etiqueta_id                  
                    LEFT JOIN ins_categoria on ins_categoria.id = ins_insumo.ins_categoria_id
                    LEFT JOIN ins_marca on ins_marca.id = ins_insumo.ins_marca_id
                    LEFT JOIN gral_actividad on gral_actividad.id = vta_presupuesto.gral_actividad_id
                    WHERE TRUE
                    AND vta_orden_venta.creado::DATE BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "' 
                    AND vta_orden_venta_tipo_estado.codigo <> '" . VtaOrdenVentaTipoEstado::TIPO_CANCELADO . "' 
                    ";
            if ($ins_tipo_insumo_id) {
                $sql .= " AND ins_tipo_insumo.id = " . $ins_tipo_insumo_id;
            }

            if ($importe_desde) {
                $sql .= " AND vta_orden_venta.importe_unitario >= " . $importe_desde;
            }

            if ($importe_hasta) {
                $sql .= " AND vta_orden_venta.importe_unitario <= " . $importe_hasta;
            }
            
            if ($cli_cliente_id) {
                $sql .= " AND cli_cliente.id = " . $cli_cliente_id;
            }
            
            if ($gral_sucursal_id != 0) {
                $sql .= " AND gral_sucursal.id = " . $gral_sucursal_id;
            }
            
            if ($ins_categoria_id != 0) {
                $ins_categoria = InsCategoria::getOxId($ins_categoria_id);
                $sql .= " AND ins_categoria.codigo LIKE '" . $ins_categoria->getCodigo()."%'";
                //$sql .= " AND ins_categoria.id = " . $ins_categoria_id;
            }
            
            if ($gral_actividad_id != 0) {
                $sql .= " AND gral_actividad.id = " . $gral_actividad_id;
            }
            
            if ($ins_marca_id != 0) {
                $sql .= " AND ins_marca.id = " . $ins_marca_id;
            }

            $sql .= " GROUP BY 1
                      ORDER BY cantidad DESC";
            $sql .= " LIMIT " . $cantidad . " OFFSET 0; ";
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
                $dato_descripcion = substr($fila->descripcion, 0, 40);
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
    
    /**
     * Prepara el SQL de presupuestos y devuelve un array con informacion para poder graficar
     * @param  [string] $fecha_desde    [description]
     * @param  [string] $fecha_hasta    [description]
     * @param  [int] $vta_vendedor_id   [description]
     * @param  [int] $gral_actividad_id [description]
     * @return [array] $arr_widget  [array con el resultado]
     */
    static function getWidgetVtaReciboXCondicionPagoBar($fecha_desde, $fecha_hasta, $fnd_cajero_id = false, $gral_sucursal_id = false, $cli_cliente_id = false, $vta_recibo_tipo_pago_id = false, $vta_recibo_tipo_estado_id = false, $visualizacion) {
        $arr_widget = array();
        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------

            $sql = "SELECT 
                    vta_recibo_condicion_pago.descripcion as condicion_pago_descripcion,
                    vta_recibo_condicion_pago.codigo as condicion_pago_codigo,
                    vta_recibo_condicion_pago.orden as condicion_pago_orden,";
            if ($visualizacion == GralSiNo::GRAL_SINO_CI_CANTIDAD) {
                $sql .= "count(vta_recibo.id) as cantidad ";
            } elseif (GralSiNo::GRAL_SINO_CI_IMPORTE) {
                $sql .= "sum(vta_recibo_importe.importe_total) as cantidad ";
            }
            $sql .= "FROM vta_recibo
                    LEFT JOIN vta_recibo_importe on vta_recibo_importe.vta_recibo_id = vta_recibo.id
                    LEFT JOIN fnd_caja on fnd_caja.id = vta_recibo.fnd_caja_id
                    LEFT JOIN fnd_cajero on fnd_cajero.id = fnd_caja.fnd_cajero_id
                    LEFT JOIN gral_sucursal on gral_sucursal.id = vta_recibo.gral_sucursal_id
                    LEFT JOIN vta_recibo_tipo_estado on vta_recibo_tipo_estado.id = vta_recibo.vta_recibo_tipo_estado_id
                    LEFT JOIN cli_cliente on cli_cliente.id = vta_recibo.cli_cliente_id
                    LEFT JOIN vta_recibo_tipo_pago on vta_recibo_tipo_pago.id = vta_recibo.vta_recibo_tipo_pago_id
                    LEFT JOIN vta_recibo_condicion_pago on vta_recibo_condicion_pago.id = vta_recibo.vta_recibo_condicion_pago_id
                    WHERE TRUE
                    AND vta_recibo.fecha_emision BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'                    
                        ";

            if ($fnd_cajero_id != 0) {
                $sql .= " AND fnd_cajero.id = " . $fnd_cajero_id;
            }

            if ($gral_sucursal_id != 0) {
                $sql .= " AND gral_sucursal.id = " . $gral_sucursal_id;
            }

            if ($cli_cliente_id != 0) {
                $sql .= " AND cli_cliente.id = " . $cli_cliente_id;
            }
            
            if ($vta_recibo_tipo_pago_id != 0) {
                $sql .= " AND vta_recibo_tipo_pago.id = " . $vta_recibo_tipo_pago_id;
            }
            
            if ($vta_recibo_tipo_estado_id != 0) {
                $sql .= " AND vta_recibo_tipo_estado.id = " . $vta_recibo_tipo_estado_id;
            }

            $sql .= "
                        GROUP BY condicion_pago_descripcion, condicion_pago_codigo, condicion_pago_orden
                        ORDER BY condicion_pago_orden ASC 
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
                $dato_descripcion = $fila->condicion_pago_descripcion;
                $dato_codigo = $fila->condicion_pago_codigo;

                $arr_cantidad[] = $cantidad;
                $arr_dato_descripcion[] = $dato_descripcion;

                $obj_tipo_estado = VtaReciboCondicionPago::getOxCodigo($dato_codigo);
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
    
    /**
     * Prepara el SQL de presupuestos y devuelve un array con informacion para poder graficar
     * @param  [string]  $fecha_desde       [description]
     * @param  [string]  $fecha_hasta       [description]
     * @param  [int] $vta_vendedor_id   [description]
     * @param  [int] $gral_actividad_id [description]
     * @return [array] $arr_widget  [array con el resultado]
     */
    static function getWidgetVtaReciboXCondicionPagoPie($fecha_desde, $fecha_hasta, $fnd_cajero_id = false, $gral_sucursal_id = false, $cli_cliente_id = false, $vta_recibo_tipo_pago_id = false, $vta_recibo_tipo_estado_id = false, $visualizacion) {
        $arr_widget = array();
        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------
            
            $sql = "SELECT 
                    vta_recibo_condicion_pago.descripcion as condicion_pago_descripcion,
                    vta_recibo_condicion_pago.codigo as condicion_pago_codigo,
                    vta_recibo_condicion_pago.orden as condicion_pago_orden,";
            if ($visualizacion == GralSiNo::GRAL_SINO_CI_CANTIDAD) {
                $sql .= "count(vta_recibo.id) as cantidad ";
            } elseif (GralSiNo::GRAL_SINO_CI_IMPORTE) {
                $sql .= "sum(vta_recibo_importe.importe_total) as cantidad ";
            }
            $sql .= "FROM vta_recibo
                    LEFT JOIN vta_recibo_importe on vta_recibo_importe.vta_recibo_id = vta_recibo.id
                    LEFT JOIN fnd_caja on fnd_caja.id = vta_recibo.fnd_caja_id
                    LEFT JOIN fnd_cajero on fnd_cajero.id = fnd_caja.fnd_cajero_id
                    LEFT JOIN gral_sucursal on gral_sucursal.id = vta_recibo.gral_sucursal_id
                    LEFT JOIN vta_recibo_tipo_estado on vta_recibo_tipo_estado.id = vta_recibo.vta_recibo_tipo_estado_id
                    LEFT JOIN cli_cliente on cli_cliente.id = vta_recibo.cli_cliente_id
                    LEFT JOIN vta_recibo_tipo_pago on vta_recibo_tipo_pago.id = vta_recibo.vta_recibo_tipo_pago_id     
                    LEFT JOIN vta_recibo_condicion_pago on vta_recibo_condicion_pago.id = vta_recibo.vta_recibo_condicion_pago_id
                    WHERE TRUE
                    AND vta_recibo.fecha_emision BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'                    
                        ";

            if ($fnd_cajero_id != 0) {
                $sql .= " AND fnd_cajero.id = " . $fnd_cajero_id;
            }

            if ($gral_sucursal_id != 0) {
                $sql .= " AND gral_sucursal.id = " . $gral_sucursal_id;
            }

            if ($cli_cliente_id != 0) {
                $sql .= " AND cli_cliente.id = " . $cli_cliente_id;
            }
            
            if ($vta_recibo_tipo_pago_id != 0) {
                $sql .= " AND vta_recibo_tipo_pago.id = " . $vta_recibo_tipo_pago_id;
            }
            
            if ($vta_recibo_tipo_estado_id != 0) {
                $sql .= " AND vta_recibo_tipo_estado.id = " . $vta_recibo_tipo_estado_id;
            }

            $sql .= "
                        GROUP BY condicion_pago_descripcion, condicion_pago_codigo, condicion_pago_orden
                        ORDER BY condicion_pago_orden ASC 
                        ;
                    ";
            //Gral::echoSqlSentence($sql);

            $cons = new Consulta();
            $cons->setSQL($sql);
            $cons->execute();

            $total = 0;
            $arr_cantidad = array();
            $arr_dato_descripcion = array();
            $arr_dato_color = array();

            $resultado = $cons->getResultado();
            while ($fila = pg_fetch_object($resultado)) {
                $total += $fila->cantidad;
            }

            pg_result_seek($resultado, 0); //Se reinicia el puntero para poder volver a iterar y tomar el valor total para obtener un porcentaje

            while ($fila = pg_fetch_object($resultado)) {
                $cantidad = $fila->cantidad;
                $porcentaje = ($cantidad / $total) * 100;
                $porcentaje = number_format($porcentaje, 0); //calculo del porcentaje
                $dato_descripcion = $fila->condicion_pago_descripcion . ' (' . $porcentaje . '%)';
                $dato_codigo = $fila->condicion_pago_codigo;

                $obj_tipo_estado = VtaReciboCondicionPago::getOxCodigo($dato_codigo);

                $arr_cantidad[] = $cantidad;
                $arr_dato_descripcion[] = $dato_descripcion;
                $arr_dato_color[] = $obj_tipo_estado->getColor(); //$rand_background;
            }

            $arr_widget['arr_cantidad'] = $arr_cantidad;
            $arr_widget['arr_dato_descripcion'] = $arr_dato_descripcion;
            $arr_widget['arr_dato_color'] = $arr_dato_color;
            $arr_widget['total'] = $total;
        }
        return $arr_widget;
    }
    
    static function getWidgetRentabilidadOrdenVentaTimeline($periodicidad, $fecha_desde, $fecha_hasta, $ins_etiqueta_id = false, $ins_categoria_id = false, $ins_tipo_insumo_id = false, $ins_tipo_lista_precio_id = false, $gral_sucursal_id = false, $gral_actividad_id = false, $ins_marca_id = false) {
        $arr_widget = array();
        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------

            $sql = "SELECT 
                    vta_orden_venta.id as vta_orden_venta_id
                    FROM vta_orden_venta
                    LEFT JOIN ins_insumo on ins_insumo.id = vta_orden_venta.ins_insumo_id                   
                    LEFT JOIN ins_marca on ins_marca.id = ins_insumo.ins_marca_id                   
                    LEFT JOIN ins_tipo_insumo on ins_tipo_insumo.id = ins_insumo.ins_tipo_insumo_id
                    LEFT JOIN ins_categoria on ins_categoria.id = ins_insumo.ins_categoria_id
                    LEFT JOIN ins_tipo_lista_precio on ins_tipo_lista_precio.id = vta_orden_venta.ins_tipo_lista_precio_id                   
                    LEFT JOIN vta_presupuesto on vta_presupuesto.id = vta_orden_venta.vta_presupuesto_id
                    LEFT JOIN gral_sucursal on gral_sucursal.id = vta_presupuesto.gral_sucursal_id                  
                    LEFT JOIN gral_actividad on gral_actividad.id = vta_presupuesto.gral_actividad_id
                    ";
            
            if ($ins_etiqueta_id) {
            $sql .= "                 
                    LEFT JOIN ins_insumo_ins_etiqueta on ins_insumo_ins_etiqueta.ins_insumo_id = ins_insumo.id
                    LEFT JOIN ins_etiqueta on ins_etiqueta.id = ins_insumo_ins_etiqueta.ins_etiqueta_id
                    ";
            }
            
            $sql .= "
                    WHERE TRUE
                    AND vta_orden_venta.creado::DATE BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'
                    ";

            if ($ins_etiqueta_id != 0) {
                $sql .= " AND ins_etiqueta.id = " . $ins_etiqueta_id;
            }
            
            if ($ins_categoria_id != 0) {
                $ins_categoria = InsCategoria::getOxId($ins_categoria_id);
                $sql .= " AND ins_categoria.codigo LIKE '" . $ins_categoria->getCodigo()."%'";
                //$sql .= " AND ins_categoria.id = " . $ins_categoria_id;
            }
            
            if ($ins_tipo_insumo_id != 0) {
                $sql .= " AND ins_tipo_insumo.id = " . $ins_tipo_insumo_id;
            }

            if ($ins_tipo_lista_precio_id != 0) {
                $sql .= " AND ins_tipo_lista_precio.id = " . $ins_tipo_lista_precio_id;
            }
            
            if ($gral_sucursal_id != 0) {
                $sql .= " AND gral_sucursal.id = " . $gral_sucursal_id;
            }
            
            if ($gral_actividad_id != 0) {
                $sql .= " AND gral_actividad.id = " . $gral_actividad_id;
            }
            
            if ($ins_marca_id != 0) {
                $sql .= " AND ins_marca.id = " . $ins_marca_id;
            }
            
            $sql .= " ORDER BY 1 ASC";
            //Gral::echoSqlSentence($sql);
            
            $cons = new Consulta();
            $cons->setSQL($sql);
            $cons->execute();


            // --------------------------------------------------------------
            // se comienza a procesar los datos
            // --------------------------------------------------------------
            $arr_periodos_unicos = array();
            $arr_cantidads_en_crudo = array();

            $arr_grafico_descripcions = array();
            $arr_grafico_fechas = array();
            $arr_grafico_dato_color = array();
            $arr_grafico_cantidads = array();


            // --------------------------------------------------------------
            // se recorre la consulta inicial para armar el array de cantidad crudo
            // --------------------------------------------------------------
            while ($fila = pg_fetch_object($cons->getResultado())) {

                $vta_orden_venta_id = $fila->vta_orden_venta_id;
                $vta_orden_venta = VtaOrdenVenta::getOxId($vta_orden_venta_id);
                $fecha = substr($vta_orden_venta->getCreado(), 0, 10);
                   
                $codigo_costo = 'COSTO';
                $codigo_unitario = 'UNITARIO';
                $codigo_unitario_con_descuento = 'UNITARIO_CON_DESCUENTO';
                
                $importe_costo = $vta_orden_venta->getImporteCosto();
                $importe_unitario = $vta_orden_venta->getImporteUnitario();
                $importe_unitario_con_descuento = $vta_orden_venta->getImporteUnitarioConDescuento();
                
                switch ($periodicidad) {
                    case Date::PERIODICIDAD_DIARIO:
                        $periodo_valor = $fecha;
                        break;
                    case Date::PERIODICIDAD_MENSUAL:
                        $arr_fecha = Date::getArrFecha($fecha);
                        $periodo_valor = $arr_fecha['mes'];
                        break;
                }

                $arr_cantidads_en_crudo[$codigo_costo][$periodo_valor]+= $importe_costo;
                $arr_cantidads_en_crudo[$codigo_unitario][$periodo_valor]+= $importe_unitario;
                $arr_cantidads_en_crudo[$codigo_unitario_con_descuento][$periodo_valor]+= $importe_unitario_con_descuento;
            }

            // -----------------------------------------------------------------
            // se arma un array completo con todas las fechas del rango para incluir las fechas donde 
            // no hay informacion desde la consulta
            // -----------------------------------------------------------------
            $arr_periodos_unicos = Date::getArrayFechasXRango($fecha_desde, $fecha_hasta, $periodicidad);
            foreach ($arr_periodos_unicos as $arr_periodo_unico) {
                switch ($periodicidad) {
                    case Date::PERIODICIDAD_DIARIO:                        
                        $arr_grafico_fechas[] = Gral::getFechaToWEB($arr_periodo_unico, 'DD/MM'); // formatea el indice del array para el grafico
                        break;
                    case Date::PERIODICIDAD_MENSUAL:
                        $arr_grafico_fechas[] = Date::getMesLetras($arr_periodo_unico); // formatea el indice del array para el grafico
                        break;
                }
            }

            // -----------------------------------------------------------------
            // se procesa array crudo para obtener array cantidads para el grafico
            // -----------------------------------------------------------------
            foreach ($arr_cantidads_en_crudo as $codigo => $arr_cantidad_por_periodo) {
                $arr_cantidad = array();
                $cantidad_total_por_linea = 0;

                //$descripcion_costo = 'COSTO';
                //$descripcion_unitario = 'UNITARIO';
                //$descripcion_unitario_con_descuento = 'UNITARIO_CON_DESCUENTO';
                
                // --------------------------------------------------------------
                // se genera el array de cantidads, pero limpio, como lo necesita el grafico
                // --------------------------------------------------------------
                foreach ($arr_periodos_unicos as $periodo => $arr_periodo_unico) {
                    $arr_cantidad[] = (!empty($arr_cantidad_por_periodo[$periodo])) ? $arr_cantidad_por_periodo[$periodo] : 0;
                }
                $arr_grafico_cantidads[] = $arr_cantidad;

                // --------------------------------------------------------------
                // se carga array de descripcion de cada linea
                // --------------------------------------------------------------
                $arr_grafico_descripcions[] = $codigo;
                //$arr_grafico_descripcions[] = $descripcion_unitario;
                //$arr_grafico_descripcions[] = $descripcion_unitario_con_descuento;
            }
            
            // -----------------------------------------------------------------
            // aplicacion del limite de registros por cantidad elegida (simil paginador)
            // -----------------------------------------------------------------
            if($cantidad){
                $cont = 0;
                foreach($arr_grafico_descripcions as $arr_grafico_descripcion){
                    $cont++;
                    if($cont <= $cantidad){
                        $arr_grafico_descripcions_paginado[] = $arr_grafico_descripcion;                
                    }
                }
                $arr_grafico_descripcions = $arr_grafico_descripcions_paginado;
            }
            
            //Gral::prr($arr_cantidads_en_crudo);
            //Gral::prr($arr_grafico_cantidads);
            //Gral::prr($arr_grafico_fechas);
            //Gral::prr($arr_grafico_descripcions);
            //Gral::prr($arr_grafico_dato_color);


            $arr_datos_para_widget_tipo_timeline = GenWidget::getDatosSimpleParaWidgetTipoTimeline($arr_grafico_cantidads, $arr_grafico_descripcions, $arr_grafico_fechas, $arr_grafico_dato_color);

            $arr_widget['arr_descripcion'] = $arr_datos_para_widget_tipo_timeline['arr_descripcion'];
            $arr_widget['arr_linea_dataset'] = $arr_datos_para_widget_tipo_timeline['arr_linea_dataset'];
        }
        return $arr_widget;
    }
    
    /**
     * Prepara el SQL de presupuestos y devuelve un array con informacion para poder graficar
     * @param  [string] $fecha_desde    [description]
     * @param  [string] $fecha_hasta    [description]
     * @param  [int] $vta_vendedor_id   [description]
     * @param  [int] $gral_actividad_id [description]
     * @return [array] $arr_widget  [array con el resultado]
     */
    static function getWidgetPdeReciboXCondicionPagoBar($fecha_desde, $fecha_hasta, $prv_proveedor_id = false, $pde_recibo_tipo_pago_id = false, $pde_recibo_tipo_estado_id = false, $visualizacion) {
        $arr_widget = array();
        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------

            $sql = "SELECT 
                    pde_recibo_condicion_pago.descripcion as condicion_pago_descripcion,
                    pde_recibo_condicion_pago.codigo as condicion_pago_codigo,
                    pde_recibo_condicion_pago.orden as condicion_pago_orden,";
            if ($visualizacion == GralSiNo::GRAL_SINO_CI_CANTIDAD) {
                $sql .= "count(pde_recibo.id) as cantidad ";
            } elseif (GralSiNo::GRAL_SINO_CI_IMPORTE) {
                $sql .= "sum(pde_recibo_importe.importe_total) as cantidad ";
            }
            $sql .= "FROM pde_recibo
                    LEFT JOIN pde_recibo_importe on pde_recibo_importe.pde_recibo_id = pde_recibo.id
                    LEFT JOIN pde_recibo_tipo_estado on pde_recibo_tipo_estado.id = pde_recibo.pde_recibo_tipo_estado_id
                    LEFT JOIN prv_proveedor on prv_proveedor.id = pde_recibo.prv_proveedor_id 
                    LEFT JOIN pde_recibo_tipo_pago on pde_recibo_tipo_pago.id = pde_recibo.pde_recibo_tipo_pago_id
                    LEFT JOIN pde_recibo_condicion_pago on pde_recibo_condicion_pago.id = pde_recibo.pde_recibo_condicion_pago_id
                    WHERE TRUE
                    AND pde_recibo.fecha_emision BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'                    
                        ";

            if ($prv_proveedor_id != 0) {
                $sql .= " AND prv_proveedor.id = " . $prv_proveedor_id;
            }
            
            if ($pde_recibo_tipo_pago_id != 0) {
                $sql .= " AND pde_recibo_tipo_pago.id = " . $pde_recibo_tipo_pago_id;
            }
            
            if ($pde_recibo_tipo_estado_id != 0) {
                $sql .= " AND pde_recibo_tipo_estado.id = " . $pde_recibo_tipo_estado_id;
            }

            $sql .= "
                        GROUP BY condicion_pago_descripcion, condicion_pago_codigo, condicion_pago_orden
                        ORDER BY condicion_pago_orden ASC 
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
                $dato_descripcion = $fila->condicion_pago_descripcion;
                $dato_codigo = $fila->condicion_pago_codigo;

                $arr_cantidad[] = $cantidad;
                $arr_dato_descripcion[] = $dato_descripcion;

                $obj_tipo_estado = PdeReciboCondicionPago::getOxCodigo($dato_codigo);
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
    
    /**
     * Prepara el SQL de presupuestos y devuelve un array con informacion para poder graficar
     * @param  [string]  $fecha_desde       [description]
     * @param  [string]  $fecha_hasta       [description]
     * @param  [int] $vta_vendedor_id   [description]
     * @param  [int] $gral_actividad_id [description]
     * @return [array] $arr_widget  [array con el resultado]
     */
    static function getWidgetPdeReciboXCondicionPagoPie($fecha_desde, $fecha_hasta, $prv_proveedor_id = false, $pde_recibo_tipo_pago_id = false, $pde_recibo_tipo_estado_id = false, $visualizacion) {
        $arr_widget = array();
        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------
            
            $sql = "SELECT 
                    pde_recibo_condicion_pago.descripcion as condicion_pago_descripcion,
                    pde_recibo_condicion_pago.codigo as condicion_pago_codigo,
                    pde_recibo_condicion_pago.orden as condicion_pago_orden,";
            if ($visualizacion == GralSiNo::GRAL_SINO_CI_CANTIDAD) {
                $sql .= "count(pde_recibo.id) as cantidad ";
            } elseif (GralSiNo::GRAL_SINO_CI_IMPORTE) {
                $sql .= "sum(pde_recibo_importe.importe_total) as cantidad ";
            }
            $sql .= "FROM pde_recibo
                    LEFT JOIN pde_recibo_importe on pde_recibo_importe.pde_recibo_id = pde_recibo.id
                    LEFT JOIN pde_recibo_tipo_estado on pde_recibo_tipo_estado.id = pde_recibo.pde_recibo_tipo_estado_id
                    LEFT JOIN prv_proveedor on prv_proveedor.id = pde_recibo.prv_proveedor_id 
                    LEFT JOIN pde_recibo_tipo_pago on pde_recibo_tipo_pago.id = pde_recibo.pde_recibo_tipo_pago_id
                    LEFT JOIN pde_recibo_condicion_pago on pde_recibo_condicion_pago.id = pde_recibo.pde_recibo_condicion_pago_id
                    WHERE TRUE
                    AND pde_recibo.fecha_emision BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'                    
                        ";

            if ($prv_proveedor_id != 0) {
                $sql .= " AND prv_proveedor.id = " . $prv_proveedor_id;
            }
            
            if ($pde_recibo_tipo_pago_id != 0) {
                $sql .= " AND pde_recibo_tipo_pago.id = " . $pde_recibo_tipo_pago_id;
            }
            
            if ($pde_recibo_tipo_estado_id != 0) {
                $sql .= " AND pde_recibo_tipo_estado.id = " . $pde_recibo_tipo_estado_id;
            }

            $sql .= "
                        GROUP BY condicion_pago_descripcion, condicion_pago_codigo, condicion_pago_orden
                        ORDER BY condicion_pago_orden ASC 
                        ;
                    ";
            //Gral::echoSqlSentence($sql);

            $cons = new Consulta();
            $cons->setSQL($sql);
            $cons->execute();

            $total = 0;
            $arr_cantidad = array();
            $arr_dato_descripcion = array();
            $arr_dato_color = array();

            $resultado = $cons->getResultado();
            while ($fila = pg_fetch_object($resultado)) {
                $total += $fila->cantidad;
            }

            pg_result_seek($resultado, 0); //Se reinicia el puntero para poder volver a iterar y tomar el valor total para obtener un porcentaje

            while ($fila = pg_fetch_object($resultado)) {
                $cantidad = $fila->cantidad;
                $porcentaje = ($cantidad / $total) * 100;
                $porcentaje = number_format($porcentaje, 0); //calculo del porcentaje
                $dato_descripcion = $fila->condicion_pago_descripcion . ' (' . $porcentaje . '%)';
                $dato_codigo = $fila->condicion_pago_codigo;

                $obj_tipo_estado = PdeReciboCondicionPago::getOxCodigo($dato_codigo);

                $arr_cantidad[] = $cantidad;
                $arr_dato_descripcion[] = $dato_descripcion;
                $arr_dato_color[] = $obj_tipo_estado->getColor(); //$rand_background;
            }

            $arr_widget['arr_cantidad'] = $arr_cantidad;
            $arr_widget['arr_dato_descripcion'] = $arr_dato_descripcion;
            $arr_widget['arr_dato_color'] = $arr_dato_color;
            $arr_widget['total'] = $total;
        }
        return $arr_widget;
    }
    
    static function getWidgetFndCajaFlujoIngresosXFormaPagoTimeline($periodicidad, $fecha_desde, $fecha_hasta, $gral_caja_id, $fnd_cajero_id) {
        $arr_widget = array();
        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------

            $sql = "SELECT 
                    fnd_caja.id as fnd_caja_id,
                    gral_caja.id as gral_caja_id,
                    gral_caja.descripcion as gral_caja_descripcion
                    FROM fnd_caja
                    LEFT JOIN fnd_caja_tipo_estado on fnd_caja_tipo_estado.id = fnd_caja.fnd_caja_tipo_estado_id
                    LEFT JOIN gral_caja on gral_caja.id = fnd_caja.gral_caja_id  
                    LEFT JOIN fnd_cajero on fnd_cajero.id = fnd_caja.fnd_cajero_id
                    WHERE TRUE
                    AND fnd_caja.fecha_apertura BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'   
                    AND fnd_caja.estado = 1
                        ";
            if ($gral_caja_id != 0) {
                $sql .= " AND gral_caja.id = " . $gral_caja_id;
            }

            if ($fnd_cajero_id != 0) {
                $sql .= " AND fnd_cajero.id = " . $fnd_cajero_id;
            }

            $sql .= "
                    ORDER BY 
                        fnd_caja.id ASC
                        ;
                    ";
            //Gral::echoSqlSentence($sql);
            
            $cons = new Consulta();
            $cons->setSQL($sql);
            $cons->execute();


            // --------------------------------------------------------------
            // se comienza a procesar los datos
            // --------------------------------------------------------------
            $arr_periodos_unicos = array();
            $arr_cantidads_en_crudo = array();

            $arr_grafico_descripcions = array();
            $arr_grafico_fechas = array();
            $arr_grafico_dato_color = array();
            $arr_grafico_cantidads = array();


            // --------------------------------------------------------------
            // se recorre la consulta inicial para armar el array de cantidad crudo
            // --------------------------------------------------------------
            while ($fila = pg_fetch_object($cons->getResultado())) {

                $fnd_caja_id = $fila->fnd_caja_id;
                $fnd_caja = FndCaja::getOxId($fnd_caja_id);

                $gral_caja = $fnd_caja->getGralCaja();
                                
                $codigo = $gral_caja->getCodigo();
                $importe = $fnd_caja->getImporteEfectivoFinalRegistrado();
                $fecha = $fnd_caja->getFechaApertura();

                switch ($periodicidad) {
                    case Date::PERIODICIDAD_DIARIO:
                        $periodo_valor = $fecha;
                        break;
                    case Date::PERIODICIDAD_MENSUAL:
                        $arr_fecha = Date::getArrFecha($fecha);
                        $periodo_valor = $arr_fecha['mes'];
                        break;
                }

                $arr_cantidads_en_crudo[$codigo][$periodo_valor]+= $importe;
            }

            // -----------------------------------------------------------------
            // se arma un array completo con todas las fechas del rango para incluir las fechas donde 
            // no hay informacion desde la consulta
            // -----------------------------------------------------------------
            $arr_periodos_unicos = Date::getArrayFechasXRango($fecha_desde, $fecha_hasta, $periodicidad);
            foreach ($arr_periodos_unicos as $arr_periodo_unico) {
                switch ($periodicidad) {
                    case Date::PERIODICIDAD_DIARIO:                        
                        $arr_grafico_fechas[] = Gral::getFechaToWEB($arr_periodo_unico, 'DD/MM'); // formatea el indice del array para el grafico
                        break;
                    case Date::PERIODICIDAD_MENSUAL:
                        $arr_grafico_fechas[] = Date::getMesLetras($arr_periodo_unico); // formatea el indice del array para el grafico
                        break;
                }
            }

            // -----------------------------------------------------------------
            // se procesa array crudo para obtener array cantidads para el grafico
            // -----------------------------------------------------------------
            foreach ($arr_cantidads_en_crudo as $codigo => $arr_cantidad_por_periodo) {
                $arr_cantidad = array();
                $cantidad_total_por_linea = 0;

                $gral_caja = GralCaja::getOxCodigo($codigo);

                // --------------------------------------------------------------
                // se genera el array de cantidads, pero limpio, como lo necesita el grafico
                // --------------------------------------------------------------
                foreach ($arr_periodos_unicos as $periodo => $arr_periodo_unico) {
                    $arr_cantidad[] = (!empty($arr_cantidad_por_periodo[$periodo])) ? $arr_cantidad_por_periodo[$periodo] : 0;
                }
                $arr_grafico_cantidads[] = $arr_cantidad;

                // --------------------------------------------------------------
                // se carga array de descripcion de cada linea
                // --------------------------------------------------------------
                $arr_grafico_descripcions[] = $gral_caja->getDescripcion();
                //$arr_grafico_dato_color[] = $fnd_caja->getColor();
            }
            
            // -----------------------------------------------------------------
            // aplicacion del limite de registros por cantidad elegida (simil paginador)
            // -----------------------------------------------------------------
            if($cantidad){
                $cont = 0;
                foreach($arr_grafico_descripcions as $arr_grafico_descripcion){
                    $cont++;
                    if($cont <= $cantidad){
                        $arr_grafico_descripcions_paginado[] = $arr_grafico_descripcion;                
                    }
                }
                $arr_grafico_descripcions = $arr_grafico_descripcions_paginado;
            }
            
            //Gral::prr($arr_cantidads_en_crudo);
            //Gral::prr($arr_grafico_cantidads);
            //Gral::prr($arr_grafico_fechas);
            //Gral::prr($arr_grafico_descripcions);
            //Gral::prr($arr_grafico_dato_color);


            $arr_datos_para_widget_tipo_timeline = GenWidget::getDatosSimpleParaWidgetTipoTimeline($arr_grafico_cantidads, $arr_grafico_descripcions, $arr_grafico_fechas, $arr_grafico_dato_color);

            $arr_widget['arr_descripcion'] = $arr_datos_para_widget_tipo_timeline['arr_descripcion'];
            $arr_widget['arr_linea_dataset'] = $arr_datos_para_widget_tipo_timeline['arr_linea_dataset'];
        }
        return $arr_widget;
    }
    
    static function getWidgetPrvProveedorXCantidadBar($cantidad = 10, $ins_stock_resumen_tipo_estado_requiere_reabastecimiento, $prv_categoria_id, $pan_panol_id, $ins_clasificacion_id, $ins_etiqueta_id) {
        $arr_widget = array();

        $sql = "SELECT DISTINCT 
                prv_proveedor.descripcion as prv_proveedor_descripcion,
                COUNT(prv_proveedor.id) as cantidad
                FROM prv_proveedor
                LEFT JOIN prv_categoria on prv_categoria.id = prv_proveedor.prv_categoria_id
                LEFT JOIN ins_insumo_prv_proveedor on ins_insumo_prv_proveedor.prv_proveedor_id = prv_proveedor.id
                LEFT JOIN ins_insumo on ins_insumo.id = ins_insumo_prv_proveedor.ins_insumo_id
                LEFT JOIN ins_stock_resumen on ins_stock_resumen.ins_insumo_id = ins_insumo.id
                LEFT JOIN pan_panol on pan_panol.id = ins_stock_resumen.pan_panol_id
                LEFT JOIN pan_tipo_panol on pan_tipo_panol.id = pan_panol.pan_tipo_panol_id
                LEFT JOIN ins_stock_resumen_tipo_estado on ins_stock_resumen_tipo_estado.id = ins_stock_resumen.ins_stock_resumen_tipo_estado_id
                ";
      
        if ($ins_clasificacion_id) {
            $sql .= "                 
                LEFT JOIN ins_insumo_pan_panol on ins_insumo_pan_panol.ins_insumo_id = ins_insumo.id
                LEFT JOIN ins_clasificacion on ins_clasificacion.id = ins_insumo_pan_panol.ins_clasificacion_id
                ";
        }

        if ($ins_etiqueta_id) {
            $sql .= "                 
                LEFT JOIN ins_insumo_ins_etiqueta on ins_insumo_ins_etiqueta.ins_insumo_id = ins_insumo.id
                LEFT JOIN ins_etiqueta on ins_etiqueta.id = ins_insumo_ins_etiqueta.ins_etiqueta_id
                ";
        }
        
        $sql .= "WHERE TRUE
                ";
        
        if ($ins_stock_resumen_tipo_estado_requiere_reabastecimiento != -1) {
            $sql .= " AND ins_stock_resumen_tipo_estado.requiere_reabastecimiento = " . $ins_stock_resumen_tipo_estado_requiere_reabastecimiento;
        }
        
        if ($prv_categoria_id != 0) {
            $sql .= " AND prv_categoria.id = " . $prv_categoria_id;
        }
        
        if ($pan_panol_id != 0) {
            $sql .= " AND pan_panol.id = " . $pan_panol_id;
        }
        
        if ($ins_clasificacion_id != 0) {
            $sql .= " AND ins_clasificacion.id = " . $ins_clasificacion_id;
        }
        
        if ($ins_etiqueta_id != 0) {
            $sql .= " AND ins_etiqueta.id = " . $ins_etiqueta_id;
        }
        
        $sql .= " GROUP BY 1
                  ORDER BY cantidad DESC";
        $sql .= " LIMIT " . $cantidad . " OFFSET 0; ";
        //Gral::echoSqlSentence($sql);
        //exit;

        $cons = new Consulta();
        $cons->setSQL($sql);
        $cons->execute();

        $cantidad_maxima = 0;
        $arr_cantidad = array();
        $arr_dato_descripcion = array();
        $arr_linea_dataset = array();
        while ($fila = pg_fetch_object($cons->getResultado())) {
            $cantidad = $fila->cantidad;
            $dato_descripcion = substr($fila->prv_proveedor_descripcion, 0, 15);

            $arr_cantidad[] = $cantidad;
            $arr_dato_descripcion[] = $dato_descripcion;
        }

        $graph_yAxes_max = (int) ($cantidad_maxima * 1.1);
        $graph_yAxes_step = (int) ($graph_yAxes_max / 5);

        $arr_datos_para_widget_tipo_bar = GenWidget::getDatosSimpleParaWidgetTipoBar($arr_cantidad, $arr_dato_descripcion, false);

        $arr_widget['arr_linea_dataset'] = $arr_datos_para_widget_tipo_bar['arr_linea_dataset'];
        $arr_widget['arr_descripcion'] = $arr_datos_para_widget_tipo_bar['arr_descripcion'];
        $arr_widget['graph_yAxes_max'] = $graph_yAxes_max;
        $arr_widget['graph_yAxes_step'] = $graph_yAxes_step;

        return $arr_widget;
    }

    static function getWidgetPrvProveedorXCantidadStackedBar($cantidad = 10, $ins_stock_resumen_tipo_estado_requiere_reabastecimiento, $prv_categoria_id, $pan_panol_id, $ins_clasificacion_id, $ins_etiqueta_id, $visualizacion, $orden) {
        $ins_stock_resumen_tipo_estados = InsStockResumenTipoEstado::getInsStockResumenTipoEstados();
        $ins_stock_resumen_tipo_estado_para_orden = InsStockResumenTipoEstado::getOxId($orden);
    
        $arr_widget = array();

        $sql = "
            SELECT
                prv_proveedor_id,
                prv_proveedor_descripcion,
                TOTAL,
                ";         
        foreach($ins_stock_resumen_tipo_estados as $ins_stock_resumen_tipo_estado){
            $sql.= "        
                " . $ins_stock_resumen_tipo_estado->getCodigo() . ",
                CASE WHEN TOTAL > 0 THEN round(" . $ins_stock_resumen_tipo_estado->getCodigo() . " * 1.00 * 100 / TOTAL, 0) ELSE 0 END as " . $ins_stock_resumen_tipo_estado->getCodigo() . "_PORCENTAJE,
                ";         
        }
            $sql.= "        
            'col_ficticia' as col_ficticia
            FROM
            (
            SELECT DISTINCT
            prv_proveedor.id as prv_proveedor_id,
            prv_proveedor.descripcion as prv_proveedor_descripcion,
            (SELECT
                COUNT(prv_proveedor_x.id)
                FROM 
                prv_proveedor as prv_proveedor_x
                LEFT JOIN ins_insumo_prv_proveedor on ins_insumo_prv_proveedor.prv_proveedor_id = prv_proveedor_x.id 
                LEFT JOIN ins_insumo on ins_insumo.id = ins_insumo_prv_proveedor.ins_insumo_id 
                LEFT JOIN ins_stock_resumen on ins_stock_resumen.ins_insumo_id = ins_insumo.id 
                LEFT JOIN pan_panol on pan_panol.id = ins_stock_resumen.pan_panol_id 
                LEFT JOIN pan_tipo_panol on pan_tipo_panol.id = pan_panol.pan_tipo_panol_id 
                LEFT JOIN ins_stock_resumen_tipo_estado on ins_stock_resumen_tipo_estado.id = ins_stock_resumen.ins_stock_resumen_tipo_estado_id 
                ";
            
            if ($ins_clasificacion_id) {
                $sql .= "                 
                    LEFT JOIN ins_insumo_pan_panol on ins_insumo_pan_panol.ins_insumo_id = ins_insumo.id
                    LEFT JOIN ins_clasificacion on ins_clasificacion.id = ins_insumo_pan_panol.ins_clasificacion_id
                    ";
            }
            
            if ($ins_etiqueta_id) {
                $sql .= "                 
                    LEFT JOIN ins_insumo_ins_etiqueta on ins_insumo_ins_etiqueta.ins_insumo_id = ins_insumo.id
                    LEFT JOIN ins_etiqueta on ins_etiqueta.id = ins_insumo_ins_etiqueta.ins_etiqueta_id
                    ";
            }
            
            $sql .= "WHERE TRUE
                AND prv_proveedor_x.id = prv_proveedor.id";

            if ($ins_stock_resumen_tipo_estado_requiere_reabastecimiento != -1) {
                $sql .= " AND ins_stock_resumen_tipo_estado.requiere_reabastecimiento = " . $ins_stock_resumen_tipo_estado_requiere_reabastecimiento;
            }
            
            if ($pan_panol_id != 0) {
                $sql .= " AND pan_panol.id = " . $pan_panol_id;
            }
            
            if ($ins_clasificacion_id != 0) {
                $sql .= " AND ins_clasificacion.id = " . $ins_clasificacion_id;
            }
            
            if ($ins_etiqueta_id != 0) {
                $sql .= " AND ins_etiqueta.id = " . $ins_etiqueta_id;
            }
            
            $sql.= "        
                ) as TOTAL,
                ";         
        foreach($ins_stock_resumen_tipo_estados as $ins_stock_resumen_tipo_estado){
            $sql.= "        
            (SELECT
                COUNT(prv_proveedor_x.id)
                FROM 
                prv_proveedor as prv_proveedor_x
                LEFT JOIN ins_insumo_prv_proveedor on ins_insumo_prv_proveedor.prv_proveedor_id = prv_proveedor_x.id 
                LEFT JOIN ins_insumo on ins_insumo.id = ins_insumo_prv_proveedor.ins_insumo_id 
                LEFT JOIN ins_stock_resumen on ins_stock_resumen.ins_insumo_id = ins_insumo.id 
                LEFT JOIN pan_panol on pan_panol.id = ins_stock_resumen.pan_panol_id 
                LEFT JOIN pan_tipo_panol on pan_tipo_panol.id = pan_panol.pan_tipo_panol_id 
                LEFT JOIN ins_stock_resumen_tipo_estado on ins_stock_resumen_tipo_estado.id = ins_stock_resumen.ins_stock_resumen_tipo_estado_id 
                ";
            
            if ($ins_clasificacion_id) {
                $sql .= "                 
                    LEFT JOIN ins_insumo_pan_panol on ins_insumo_pan_panol.ins_insumo_id = ins_insumo.id
                    LEFT JOIN ins_clasificacion on ins_clasificacion.id = ins_insumo_pan_panol.ins_clasificacion_id
                    ";
            }
            
            if ($ins_etiqueta_id) {
                $sql .= "                 
                    LEFT JOIN ins_insumo_ins_etiqueta on ins_insumo_ins_etiqueta.ins_insumo_id = ins_insumo.id
                    LEFT JOIN ins_etiqueta on ins_etiqueta.id = ins_insumo_ins_etiqueta.ins_etiqueta_id
                    ";
            }
            
            $sql .= "WHERE TRUE
                AND ins_stock_resumen_tipo_estado.codigo = '" . $ins_stock_resumen_tipo_estado->getCodigo() . "'
                AND prv_proveedor_x.id = prv_proveedor.id";

            if ($ins_stock_resumen_tipo_estado_requiere_reabastecimiento != -1) {
                $sql .= " AND ins_stock_resumen_tipo_estado.requiere_reabastecimiento = " . $ins_stock_resumen_tipo_estado_requiere_reabastecimiento;
            }
            
            if ($pan_panol_id != 0) {
                $sql .= " AND pan_panol.id = " . $pan_panol_id;
            }
            
            if ($ins_clasificacion_id != 0) {
                $sql .= " AND ins_clasificacion.id = " . $ins_clasificacion_id;
            }
            
            if ($ins_etiqueta_id != 0) {
                $sql .= " AND ins_etiqueta.id = " . $ins_etiqueta_id;
            }
            
            $sql.= "        
                ) as " . $ins_stock_resumen_tipo_estado->getCodigo().",
                "; 
        }
        $sql.= "         
            'col_ficticia' as col_ficticia
        FROM
            prv_proveedor
        ) AS PRIMER_CONSULTA
            LEFT JOIN prv_proveedor on prv_proveedor.id = PRIMER_CONSULTA.prv_proveedor_id
            LEFT JOIN prv_categoria on prv_categoria.id = prv_proveedor.prv_categoria_id
        WHERE TRUE
        ";
        if ($prv_categoria_id != 0) {
            $sql .= " AND prv_categoria.id = " . $prv_categoria_id;
        }       
        if ($visualizacion == GralSiNo::GRAL_SINO_CP_PORCENTAJE) {
            $sql .= " ORDER BY " . $ins_stock_resumen_tipo_estado_para_orden->getCodigo() . "_porcentaje DESC ";
        }   else{
            $sql .= " ORDER BY " . $ins_stock_resumen_tipo_estado_para_orden->getCodigo() . " DESC ";            
        }    
        $sql.= "        
        LIMIT " . $cantidad . " OFFSET 0;
        ";
        //Gral::echoSqlSentence($sql);
        //exit;

        $cons = new Consulta();
        $cons->setSQL($sql);
        $cons->execute();
        
        $arr_dato_descripcion = array();
        $arr_linea_dataset = array();
        while ($fila = pg_fetch_object($cons->getResultado())) {
            $total_productos_proveedor = 0;

            $arr_dato_descripcion[] = substr($fila->prv_proveedor_descripcion, 0, 15);

            foreach($ins_stock_resumen_tipo_estados as $ins_stock_resumen_tipo_estado){
                 eval ("\$total_productos_proveedor+= \$fila->".strtolower($ins_stock_resumen_tipo_estado->getCodigo()).';');
            }
            
            foreach($ins_stock_resumen_tipo_estados as $ins_stock_resumen_tipo_estado){ 
                /*if ($visualizacion == GralSiNo::GRAL_SINO_CP_PORCENTAJE) {
                    if($total_productos_proveedor > 0){
                        eval ("\$arr_data[".$ins_stock_resumen_tipo_estado->getCodigo()."][] = round((\$fila->".strtolower($ins_stock_resumen_tipo_estado->getCodigo())." / \$total_productos_proveedor), 5) * 100;");
                    } else{
                        eval ("\$arr_data[".$ins_stock_resumen_tipo_estado->getCodigo()."][] = 0;");
                    }
                } else{
                 eval ("\$arr_data[".$ins_stock_resumen_tipo_estado->getCodigo()."][] = \$fila->".strtolower($ins_stock_resumen_tipo_estado->getCodigo()).';');
                }*/
                if ($visualizacion == GralSiNo::GRAL_SINO_CP_PORCENTAJE) {
                 eval ("\$arr_data[".$ins_stock_resumen_tipo_estado->getCodigo()."][] = \$fila->".strtolower($ins_stock_resumen_tipo_estado->getCodigo()).'_porcentaje;');
                } else{
                 eval ("\$arr_data[".$ins_stock_resumen_tipo_estado->getCodigo()."][] = \$fila->".strtolower($ins_stock_resumen_tipo_estado->getCodigo()).';');
                }
            }
        }
        
        foreach ($ins_stock_resumen_tipo_estados as $ins_stock_resumen_tipo_estado) {
            $arr_linea_dataset[] = array(
                'label' => $ins_stock_resumen_tipo_estado->getDescripcion(),
                'data' => $arr_data[$ins_stock_resumen_tipo_estado->getCodigo()],
                'backgroundColor' => $ins_stock_resumen_tipo_estado->getColor(),
            );
        }
        
        //Gral::prr($arr_dato_descripcion);
        //Gral::prr($arr_data);
        //Gral::prr($arr_linea_dataset);
        //exit;

        //$arr_datos_para_widget_tipo_bar = GenWidget::getDatosSimpleParaWidgetTipoBar($arr_cantidad, $arr_dato_descripcion, false);

        $arr_widget['arr_linea_dataset'] = $arr_linea_dataset;
        $arr_widget['arr_descripcion'] = $arr_dato_descripcion;

        return $arr_widget;
    }
    
    static function getWidgetVtaOrdenVentaXGeoLocalidadBar($fecha_desde, $fecha_hasta, $vta_vendedor_id, $gral_sucursal_id, $gral_actividad_id, $gral_escenario_id, $ins_categoria_id, $cli_cliente_id, $visualizacion, $cantidad) {
        $arr_widget = array();

        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------

            $sql = "SELECT
                    geo_localidad.id as geo_localidad_id,
                    geo_localidad.descripcion as geo_localidad_descripcion,";
            if ($visualizacion == GralSiNo::GRAL_SINO_CI_CANTIDAD) {
                $sql .= "count(vta_orden_venta.id) as cantidad ";
            } elseif (GralSiNo::GRAL_SINO_CI_IMPORTE) {
                $sql .= "sum(vta_orden_venta_importe.importe_total) as cantidad ";
            }
            $sql .= "FROM vta_orden_venta
                    LEFT JOIN vta_orden_venta_importe on vta_orden_venta_importe.vta_orden_venta_id = vta_orden_venta.id
                    LEFT JOIN vta_presupuesto on vta_presupuesto.id = vta_orden_venta.vta_presupuesto_id
                    LEFT JOIN vta_vendedor on vta_vendedor.id = vta_presupuesto.vta_vendedor_id
                    LEFT JOIN gral_sucursal on gral_sucursal.id = vta_presupuesto.gral_sucursal_id
                    LEFT JOIN gral_actividad on gral_actividad.id = vta_presupuesto.gral_actividad_id
                    LEFT JOIN gral_escenario on gral_escenario.id = vta_presupuesto.gral_escenario_id
                    LEFT JOIN ins_insumo on ins_insumo.id = vta_orden_venta.ins_insumo_id
                    LEFT JOIN ins_categoria on ins_categoria.id = ins_insumo.ins_categoria_id
                    JOIN cli_cliente on cli_cliente.id = vta_presupuesto.cli_cliente_id
                    JOIN geo_localidad on geo_localidad.id = cli_cliente.geo_localidad_id
                    JOIN geo_provincia on geo_provincia.id = geo_localidad.geo_provincia_id
                    WHERE vta_orden_venta.creado::DATE BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "' 
                    ";
            
            if ($vta_vendedor_id != 0) {
                $sql .= " AND vta_vendedor.id = " . $vta_vendedor_id;
            }

            if ($gral_sucursal_id != 0) {
                $sql .= " AND gral_sucursal.id = " . $gral_sucursal_id;
            }

            if ($gral_actividad_id != 0) {
                $sql .= " AND gral_actividad.id = " . $gral_actividad_id;
            }

            if ($gral_escenario_id != 0) {
                $sql .= " AND gral_escenario.id = " . $gral_escenario_id;
            }

            if ($ins_categoria_id != 0) {
                $ins_categoria = InsCategoria::getOxId($ins_categoria_id);
                $sql .= " AND ins_categoria.codigo LIKE '" . $ins_categoria->getCodigo() . "%'";
                //$sql .= " AND ins_categoria.id = " . $ins_categoria_id;
            }

            if ($cli_cliente_id != 0) {
                $sql .= " AND cli_cliente.id = " . $cli_cliente_id;
            }

            $sql .= "GROUP BY 1, 2
                    ORDER BY 3 DESC";
            
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
                $dato_descripcion = substr($fila->geo_localidad_descripcion, 0, 10);

                $arr_cantidad[] = $cantidad;
                $arr_dato_descripcion[] = $dato_descripcion;
            }
            
            $arr_colores_hardcodeado = self::getArrColoresHardcodeados();
            for ($i = 0; $i < count($arr_dato_descripcion); $i++) {
                //$arr_dato_color[$i] = $arr_colores_hardcodeado[array_rand($arr_colores_hardcodeado)];
                $arr_dato_color[$i] = $arr_colores_hardcodeado[$i];
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
    
    static function getWidgetVtaOrdenVentaXGeoProvinciaBar($fecha_desde, $fecha_hasta, $vta_vendedor_id, $gral_sucursal_id, $gral_actividad_id, $gral_escenario_id, $ins_categoria_id, $cli_cliente_id, $visualizacion, $cantidad) {
        $arr_widget = array();

        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------

            $sql = "SELECT
                    geo_provincia.id as geo_provincia_id,
                    geo_provincia.descripcion as geo_provincia_descripcion,";
            if ($visualizacion == GralSiNo::GRAL_SINO_CI_CANTIDAD) {
                $sql .= "count(vta_orden_venta.id) as cantidad ";
            } elseif (GralSiNo::GRAL_SINO_CI_IMPORTE) {
                $sql .= "sum(vta_orden_venta_importe.importe_total) as cantidad ";
            }
            $sql .= "FROM vta_orden_venta
                    LEFT JOIN vta_orden_venta_importe on vta_orden_venta_importe.vta_orden_venta_id = vta_orden_venta.id
                    LEFT JOIN vta_presupuesto on vta_presupuesto.id = vta_orden_venta.vta_presupuesto_id
                    LEFT JOIN vta_vendedor on vta_vendedor.id = vta_presupuesto.vta_vendedor_id
                    LEFT JOIN gral_sucursal on gral_sucursal.id = vta_presupuesto.gral_sucursal_id
                    LEFT JOIN gral_actividad on gral_actividad.id = vta_presupuesto.gral_actividad_id
                    LEFT JOIN gral_escenario on gral_escenario.id = vta_presupuesto.gral_escenario_id
                    LEFT JOIN ins_insumo on ins_insumo.id = vta_orden_venta.ins_insumo_id
                    LEFT JOIN ins_categoria on ins_categoria.id = ins_insumo.ins_categoria_id
                    JOIN cli_cliente on cli_cliente.id = vta_presupuesto.cli_cliente_id
                    JOIN geo_localidad on geo_localidad.id = cli_cliente.geo_localidad_id
                    JOIN geo_provincia on geo_provincia.id = geo_localidad.geo_provincia_id
                    WHERE vta_orden_venta.creado::DATE BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "' 
                    ";
            
            if ($vta_vendedor_id != 0) {
                $sql .= " AND vta_vendedor.id = " . $vta_vendedor_id;
            }

            if ($gral_sucursal_id != 0) {
                $sql .= " AND gral_sucursal.id = " . $gral_sucursal_id;
            }

            if ($gral_actividad_id != 0) {
                $sql .= " AND gral_actividad.id = " . $gral_actividad_id;
            }

            if ($gral_escenario_id != 0) {
                $sql .= " AND gral_escenario.id = " . $gral_escenario_id;
            }

            if ($ins_categoria_id != 0) {
                $ins_categoria = InsCategoria::getOxId($ins_categoria_id);
                $sql .= " AND ins_categoria.codigo LIKE '" . $ins_categoria->getCodigo() . "%'";
                //$sql .= " AND ins_categoria.id = " . $ins_categoria_id;
            }

            if ($cli_cliente_id != 0) {
                $sql .= " AND cli_cliente.id = " . $cli_cliente_id;
            }

            $sql .= "GROUP BY 1, 2
                    ORDER BY 3 DESC";
            
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
                $dato_descripcion = $fila->geo_provincia_descripcion;

                $arr_cantidad[] = $cantidad;
                $arr_dato_descripcion[] = $dato_descripcion;
            }
            
            $arr_colores_hardcodeado = self::getArrColoresHardcodeados();
            for ($i = 0; $i < count($arr_dato_descripcion); $i++) {
                //$arr_dato_color[$i] = $arr_colores_hardcodeado[array_rand($arr_colores_hardcodeado)];
                $arr_dato_color[$i] = $arr_colores_hardcodeado[$i];
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

    static function getWidgetPdeFacturaItemXGralCentroCostoBar($fecha_desde, $fecha_hasta, $pde_factura_concepto_id, $visualizacion, $cantidad) {
        $arr_widget = array();

        if ($fecha_desde && $fecha_hasta) {
            // -----------------------------------------------------------------
            // se obtienen los datos
            // -----------------------------------------------------------------
            $sql = "SELECT
                    gral_centro_costo.descripcion as gral_centro_costo_descripcion,";
            if ($visualizacion == GralSiNo::GRAL_SINO_CI_CANTIDAD) {
                $sql .= "count(pde_factura_item.id) as cantidad ";
            } elseif (GralSiNo::GRAL_SINO_CI_IMPORTE) {
                $sql .= "sum(pde_factura_item.importe_unitario * pde_factura_item.cantidad * (pde_factura_gral_centro_costo.porcentaje_afectado / 100)) as cantidad ";
}
            $sql .= "FROM pde_factura_item
                    JOIN pde_factura on pde_factura.id = pde_factura_item.pde_factura_id
                    JOIN pde_factura_gral_centro_costo on pde_factura_gral_centro_costo.pde_factura_id = pde_factura.id
                    JOIN gral_centro_costo on gral_centro_costo.id = pde_factura_gral_centro_costo.gral_centro_costo_id
                    JOIN prv_proveedor on prv_proveedor.id = pde_factura.prv_proveedor_id
                    JOIN pde_factura_concepto on pde_factura_concepto.id = pde_factura_item.pde_factura_concepto_id
                    WHERE TRUE
                    AND pde_factura.fecha_emision BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "' 
                    ";

            if ($pde_factura_concepto_id != 0) {
                $sql .= " AND pde_factura_concepto.id = " . $pde_factura_concepto_id;
            }
            
            $sql .= "GROUP BY 1
                    ORDER BY 2 DESC";
            
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
                $dato_descripcion = $fila->gral_centro_costo_descripcion;

                $arr_cantidad[] = $cantidad;
                $arr_dato_descripcion[] = $dato_descripcion;
            }
            
            $arr_colores_hardcodeado = self::getArrColoresHardcodeados();
            for ($i = 0; $i < count($arr_dato_descripcion); $i++) {
                //$arr_dato_color[$i] = $arr_colores_hardcodeado[array_rand($arr_colores_hardcodeado)];
                $arr_dato_color[$i] = $arr_colores_hardcodeado[$i];
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
    
    static function getWidgetPdeFacturaItemXPdeFacturaConceptoBar($fecha_desde, $fecha_hasta, $gral_centro_costo_id, $visualizacion, $cantidad) {
        $arr_widget = array();

        if ($fecha_desde && $fecha_hasta) {
            // -----------------------------------------------------------------
            // se obtienen los datos
            // -----------------------------------------------------------------
            $sql = "SELECT
                    pde_factura_concepto.descripcion as pde_factura_concepto_descripcion,";
            if ($visualizacion == GralSiNo::GRAL_SINO_CI_CANTIDAD) {
                $sql .= "count(pde_factura_item.id) as cantidad ";
            } elseif (GralSiNo::GRAL_SINO_CI_IMPORTE) {
                $sql .= "sum(pde_factura_item.importe_unitario * pde_factura_item.cantidad * (pde_factura_gral_centro_costo.porcentaje_afectado / 100)) as cantidad ";
            }
            $sql .= "FROM pde_factura_item
                    JOIN pde_factura on pde_factura.id = pde_factura_item.pde_factura_id
                    JOIN pde_factura_gral_centro_costo on pde_factura_gral_centro_costo.pde_factura_id = pde_factura.id
                    JOIN gral_centro_costo on gral_centro_costo.id = pde_factura_gral_centro_costo.gral_centro_costo_id
                    JOIN prv_proveedor on prv_proveedor.id = pde_factura.prv_proveedor_id
                    JOIN pde_factura_concepto on pde_factura_concepto.id = pde_factura_item.pde_factura_concepto_id
                    WHERE TRUE
                    AND pde_factura.fecha_emision BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "' 
                    ";
            
            if ($gral_centro_costo_id != 0) {
                $sql .= " AND gral_centro_costo.id = " . $gral_centro_costo_id;
            }
            
            $sql .= "GROUP BY 1
                    ORDER BY 2 DESC";
            
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
                $dato_descripcion = $fila->pde_factura_concepto_descripcion;

                $arr_cantidad[] = $cantidad;
                $arr_dato_descripcion[] = $dato_descripcion;
            }
            
            $arr_colores_hardcodeado = self::getArrColoresHardcodeados();
            for ($i = 0; $i < count($arr_dato_descripcion); $i++) {
                //$arr_dato_color[$i] = $arr_colores_hardcodeado[array_rand($arr_colores_hardcodeado)];
                $arr_dato_color[$i] = $arr_colores_hardcodeado[$i];
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

    static function getWidgetUsUsuarioPaginasVisitadasPorHorasPie($fecha_desde, $fecha_hasta, $hora_desde, $hora_hasta, $usuario_id, $cantidad = 10) {
        $arr_widget = array();

        // ---------------------------------------------------------------------
        // se obtienen los datos
        // ---------------------------------------------------------------------
        $sql = "SELECT
                EXTRACT(hour from us_navegacion.creado) hora,
                EXTRACT(hour from us_navegacion.creado) || ':00' hora_formateada,
                count(us_navegacion.id) cantidad
                FROM us_navegacion
                LEFT JOIN us_usuario on us_usuario.id = us_navegacion.us_usuario_id
                WHERE TRUE
                AND us_navegacion.creado::DATE BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'
                AND us_navegacion.creado::TIME BETWEEN '" . $hora_desde . "' AND '" . $hora_hasta . "'
                AND us_usuario.id <> 1
                --AND us_navegacion.pagina <> 'index.php'
                    ";

        if ($usuario_id != 0) {
            $sql .= " AND us_navegacion.us_usuario_id = " . $usuario_id;
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

        $total = 0;
        $arr_cantidad = array();
        $arr_dato_descripcion = array();
        $arr_dato_color = array();

        $resultado = $cons->getResultado();
        while ($fila = pg_fetch_object($resultado)) {
            $total += $fila->cantidad;
        }

        pg_result_seek($resultado, 0); //Se reinicia el puntero para poder volver a iterar y tomar el valor total para obtener un porcentaje

        while ($fila = pg_fetch_object($resultado)) {
            $cantidad = $fila->cantidad;
            $porcentaje = ($cantidad / $total) * 100;
            $porcentaje = number_format($porcentaje, 0); //calculo del porcentaje

            $dato_descripcion = $fila->hora_formateada . ' (' . $porcentaje . '%)';

            $arr_cantidad[] = $cantidad;
            $arr_dato_descripcion[] = $dato_descripcion;
        }
        
        $arr_colores_hardcodeado = self::getArrColoresHardcodeados(count($arr_dato_descripcion));
        for ($i = 0; $i < count($arr_dato_descripcion); $i++) {
            //$arr_dato_color[$i] = $arr_colores_hardcodeado[array_rand($arr_colores_hardcodeado)];
            $arr_dato_color[$i] = $arr_colores_hardcodeado[$i];
        }

        $arr_widget['arr_cantidad'] = $arr_cantidad;
        $arr_widget['arr_dato_descripcion'] = $arr_dato_descripcion;
        $arr_widget['arr_dato_color'] = $arr_dato_color;
        $arr_widget['total'] = $total;

        return $arr_widget;
    }
    
    static function getWidgetUsUsuarioPaginasVisitadasPorHorasBar($fecha_desde, $fecha_hasta, $hora_desde, $hora_hasta, $usuario_id, $cantidad = 10) {
        $arr_widget = array();
        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------
            
            $sql = "SELECT
                    EXTRACT(hour from us_navegacion.creado) hora,
                    EXTRACT(hour from us_navegacion.creado) || ':00' hora_formateada,
                    count(us_navegacion.id) cantidad
                    FROM us_navegacion
                    LEFT JOIN us_usuario on us_usuario.id = us_navegacion.us_usuario_id
                    WHERE TRUE
                    AND us_navegacion.creado::DATE BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'  
                    AND us_navegacion.creado::TIME BETWEEN '" . $hora_desde . "' AND '" . $hora_hasta . "'
                    AND us_usuario.id <> 1
                    --AND us_navegacion.pagina <> 'index.php'
                        ";
            
            if ($usuario_id != 0) {
                $sql .= " AND us_navegacion.us_usuario_id = " . $usuario_id;
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
    
    static function getWidgetUsNavegacionPorUsuarioTimeline($periodicidad, $fecha_desde, $fecha_hasta, $hora_desde, $hora_hasta, $pagina, $grupo_id, $cantidad = 10) {
        $arr_widget = array();
        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------

            $sql = "SELECT 
                    DISTINCT
                    us_navegacion.id AS us_navegacion_id
                    FROM us_navegacion
                    LEFT JOIN us_usuario on us_usuario.id = us_navegacion.us_usuario_id
                    LEFT JOIN us_agrupado on us_agrupado.us_usuario_id = us_usuario.id
                    LEFT JOIN us_grupo on us_grupo.id = us_agrupado.us_grupo_id
                    WHERE TRUE
                    AND us_navegacion.creado::DATE BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'
                    AND us_navegacion.creado::TIME BETWEEN '" . $hora_desde . "' AND '" . $hora_hasta . "'
                    AND us_usuario.id <> 1                    
                        ";

            if ($pagina != '') {
                $sql .= " AND us_navegacion.pagina = '" . $pagina . "'";
            }

            if ($grupo_id != 0) {
                $sql .= " AND us_grupo.id = " . $grupo_id;
            }

            $sql .= "
                        ORDER BY 1 ASC 
                        ;
                    ";

            //Gral::pr($sql);
            $cons = new Consulta();
            $cons->setSQL($sql);
            $cons->execute();


            // --------------------------------------------------------------
            // se comienza a procesar los datos
            // --------------------------------------------------------------
            $arr_periodos_unicos = array();
            $arr_cantidads_en_crudo = array();

            $arr_grafico_descripcions = array();
            $arr_grafico_fechas = array();
            $arr_grafico_dato_color = array();
            $arr_grafico_cantidads = array();


            // --------------------------------------------------------------
            // se recorre la consulta inicial para armar el array de cantidad crudo
            // --------------------------------------------------------------
            while ($fila = pg_fetch_object($cons->getResultado())) {

                $us_navegacion_id = $fila->us_navegacion_id;
                $us_navegacion = UsNavegacion::getOxId($us_navegacion_id);
                $us_usuario = $us_navegacion->getUsUsuario();
                $codigo = $us_usuario->getUsuario();

                $fecha = substr($us_navegacion->getCreado(), 0, 10);

                switch ($periodicidad) {
                    case Date::PERIODICIDAD_DIARIO:
                        $periodo_valor = $fecha;
                        break;
                    case Date::PERIODICIDAD_MENSUAL:
                        $arr_fecha = Date::getArrFecha($fecha);
                        $periodo_valor = $arr_fecha['mes'];
                        break;
                }

                $arr_cantidads_en_crudo[$codigo][$periodo_valor] ++;
            }

            // -----------------------------------------------------------------
            // se arma un array completo con todas las fechas del rango para incluir las fechas donde 
            // no hay informacion desde la consulta
            // -----------------------------------------------------------------
            $arr_periodos_unicos = Date::getArrayFechasXRango($fecha_desde, $fecha_hasta, $periodicidad);
            foreach ($arr_periodos_unicos as $arr_periodo_unico) {
                switch ($periodicidad) {
                    case Date::PERIODICIDAD_DIARIO:
                        $arr_grafico_fechas[] = Gral::getFechaToWEB($arr_periodo_unico); // limpia el indice del array para el grafico
                        break;
                    case Date::PERIODICIDAD_MENSUAL:
                        $arr_grafico_fechas[] = Date::getMesLetras($arr_periodo_unico); // limpia el indice del array para el grafico
                        break;
                }
            }

            // -----------------------------------------------------------------
            // se procesa array crudo para obtener array cantidads para el grafico
            // -----------------------------------------------------------------
            foreach ($arr_cantidads_en_crudo as $codigo => $arr_cantidad_por_periodo) {
                $arr_cantidad = array();
                $cantidad_total_por_linea = 0;

                $us_usuario = UsUsuario::getOxUsuario($codigo);

                // --------------------------------------------------------------
                // se genera el array de cantidads, pero limpio, como lo necesita el grafico
                // --------------------------------------------------------------
                foreach ($arr_periodos_unicos as $periodo => $arr_periodo_unico) {
                    $arr_cantidad[] = (!empty($arr_cantidad_por_periodo[$periodo])) ? $arr_cantidad_por_periodo[$periodo] : 0;
                    $cantidad_total_por_linea += (!empty($arr_cantidad_por_periodo[$periodo])) ? $arr_cantidad_por_periodo[$periodo] : 0;
                }
                $arr_grafico_cantidads[] = $arr_cantidad;

                // --------------------------------------------------------------
                // se carga array de descripcion de cada linea
                // --------------------------------------------------------------
                $arr_grafico_descripcions[] = $us_usuario->getDescripcion() . ' (' . $cantidad_total_por_linea . ')';
                //$arr_grafico_dato_color[] = $us_usuario->getColor();
            }

            // -----------------------------------------------------------------
            // aplicacion del limite de registros por cantidad elegida (simil paginador)
            // -----------------------------------------------------------------
            $cont = 0;
            foreach ($arr_grafico_descripcions as $arr_grafico_descripcion) {
                $cont++;
                if ($cont <= $cantidad) {
                    $arr_grafico_descripcions_paginado[] = $arr_grafico_descripcion;
                }
            }
            $arr_grafico_descripcions = $arr_grafico_descripcions_paginado;

            //Gral::prr($arr_cantidads_en_crudo);
            //Gral::prr($arr_grafico_cantidads);
            //Gral::prr($arr_grafico_fechas);
            //Gral::prr($arr_grafico_descripcions);
            //Gral::prr($arr_grafico_dato_color);

            $arr_datos_para_widget_tipo_timeline = GenWidget::getDatosSimpleParaWidgetTipoTimeline($arr_grafico_cantidads, $arr_grafico_descripcions, $arr_grafico_fechas, $arr_grafico_dato_color);

            $arr_widget['arr_descripcion'] = $arr_datos_para_widget_tipo_timeline['arr_descripcion'];
            $arr_widget['arr_linea_dataset'] = $arr_datos_para_widget_tipo_timeline['arr_linea_dataset'];
        }

        return $arr_widget;
    }
    
    static function getWidgetUsNavegacionPorUsuarioPie($fecha_desde, $fecha_hasta, $hora_desde, $hora_hasta, $pagina, $grupo_id, $cantidad = 10) {
        $arr_widget = array();

        // ---------------------------------------------------------------------
        // se obtienen los datos
        // ---------------------------------------------------------------------
        $sql = "SELECT
                DISTINCT
                subconsulta.us_usuario_descripcion, 
                subconsulta.us_usuario_id, 
                subconsulta.cantidad 	
        FROM (
                SELECT 
                us_usuario.descripcion as us_usuario_descripcion, 
                us_usuario.id as us_usuario_id, 
                count(us_navegacion.us_usuario_id) as cantidad 
                FROM us_navegacion 
                LEFT JOIN us_usuario on us_usuario.id = us_navegacion.us_usuario_id 
                WHERE TRUE                   
                AND us_navegacion.creado::DATE BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'
                AND us_navegacion.creado::TIME BETWEEN '" . $hora_desde . "' AND '" . $hora_hasta . "'
                AND us_usuario.id <> 1
        ";

        if ($pagina != '') {
            $sql .= " AND us_navegacion.pagina = '" . $pagina . "'";
        }

        $sql .= "GROUP BY 1, 2
            ) AS subconsulta
        LEFT JOIN us_agrupado on us_agrupado.us_usuario_id = subconsulta.us_usuario_id 
        LEFT JOIN us_grupo on us_grupo.id = us_agrupado.us_grupo_id 
        WHERE TRUE
        ";

        if ($grupo_id != 0) {
            $sql .= " AND us_grupo.id = " . $grupo_id;
        }

        $sql .= "ORDER BY cantidad DESC
        ";

        $sql .= " LIMIT " . self::getArrCantidadFormateado($cantidad)['cantidad'] . " OFFSET ".self::getArrCantidadFormateado($cantidad)['desde']."; ";

        //Gral::prr($sql);
        $cons = new Consulta();
        $cons->setSQL($sql);
        $cons->execute();

        $total = 0;
        $arr_cantidad = array();
        $arr_dato_descripcion = array();
        $arr_dato_color = array();


        $resultado = $cons->getResultado();
        while ($fila = pg_fetch_object($resultado)) {
            $total += $fila->cantidad;
        }

        pg_result_seek($resultado, 0); //Se reinicia el puntero para poder volver a iterar y tomar el valor total para obtener un porcentaje

        while ($fila = pg_fetch_object($resultado)) {
            $cantidad = $fila->cantidad;
            $porcentaje = ($cantidad / $total) * 100;
            $porcentaje = number_format($porcentaje, 0); //calculo del porcentaje
            $dato_codigo = $fila->us_usuario_id;
            $obj_us_usuario = UsUsuario::getOxId($dato_codigo);
            $dato_descripcion = $obj_us_usuario->getDescripcion() . ' (' . $porcentaje . '%)';

            $arr_cantidad[] = $cantidad;
            $arr_dato_descripcion[] = $dato_descripcion;
            //$arr_dato_color[] = $obj_us_usuario->getColor(); //$rand_background;
        }
        
        $arr_colores_hardcodeado = self::getArrColoresHardcodeados(count($arr_dato_descripcion));
        for ($i = 0; $i < count($arr_dato_descripcion); $i++) {
            //$arr_dato_color[$i] = $arr_colores_hardcodeado[array_rand($arr_colores_hardcodeado)];
            $arr_dato_color[$i] = $arr_colores_hardcodeado[$i];
        }

        $arr_widget['arr_cantidad'] = $arr_cantidad;
        $arr_widget['arr_dato_descripcion'] = $arr_dato_descripcion;
        $arr_widget['arr_dato_color'] = $arr_dato_color;
        $arr_widget['total'] = $total;

        return $arr_widget;
    }
    
    static function getWidgetUsNavegacionPorUsuarioHorarioNoLaboralPorHorasBar($fecha_desde, $fecha_hasta, $usuario_id, $cantidad = 10) {
        $arr_widget = array();
        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------
            
            $sql = "SELECT
                    EXTRACT(hour from us_navegacion.creado) hora,
                    EXTRACT(hour from us_navegacion.creado) || ':00' hora_formateada,
                    count(us_navegacion.id) cantidad
                    FROM us_navegacion
                    LEFT JOIN us_usuario on us_usuario.id = us_navegacion.us_usuario_id
                    WHERE TRUE
                    AND us_navegacion.creado::DATE BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'  
                    AND (
                        us_navegacion.creado::TIME BETWEEN '" . UsUsuario::HORA_SALIDA_SEMANAL . "' AND '23:59'
                        OR us_navegacion.creado::TIME BETWEEN '00:00' AND '" . UsUsuario::HORA_ENTRADA_SEMANAL . "'
                        )
                    AND us_usuario.id <> 1
                    --AND us_navegacion.pagina <> 'index.php'
                        ";
            
            if ($usuario_id != 0) {
                $sql .= " AND us_navegacion.us_usuario_id = " . $usuario_id;
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
    
    static function getWidgetUsNavegacionPorUsuarioHorarioNoLaboralBar($fecha_desde, $fecha_hasta, $cantidad = 10) {
        $arr_widget = array();
        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------

            $sql = "SELECT
                    DISTINCT
                    subconsulta.us_usuario_descripcion,
                    subconsulta.us_usuario_id, 
                    subconsulta.cantidad 	
            FROM (
                    SELECT 
                    us_usuario.descripcion as us_usuario_descripcion, 
                    us_usuario.id as us_usuario_id, 
                    count(us_navegacion.us_usuario_id) as cantidad 
                    FROM us_navegacion 
                    LEFT JOIN us_usuario on us_usuario.id = us_navegacion.us_usuario_id 
                    WHERE TRUE                   
                    AND us_navegacion.creado::DATE BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'
                    AND (
                        us_navegacion.creado::TIME BETWEEN '" . UsUsuario::HORA_SALIDA_SEMANAL . "' AND '23:59'
                        OR us_navegacion.creado::TIME BETWEEN '00:00' AND '" . UsUsuario::HORA_ENTRADA_SEMANAL . "'
                        )
                    AND us_usuario.id <> 1
            ";

            $sql .= "GROUP BY 1, 2
                ) AS subconsulta
            LEFT JOIN us_agrupado on us_agrupado.us_usuario_id = subconsulta.us_usuario_id 
            LEFT JOIN us_grupo on us_grupo.id = us_agrupado.us_grupo_id 
            WHERE TRUE
            ";

            $sql .= "ORDER BY cantidad DESC
            ";

            $sql .= " LIMIT " . self::getArrCantidadFormateado($cantidad)['cantidad'] . " OFFSET ".self::getArrCantidadFormateado($cantidad)['desde']."; ";

            //Gral::echoSqlSentence($sql);
            //exit;
            
            $cons = new Consulta();
            $cons->setSQL($sql);
            $cons->execute();

            $cantidad_maxima = 0;
            $arr_cantidad = array();
            $arr_dato_descripcion = array();
            $arr_linea_dataset = array();
            while ($fila = pg_fetch_object($cons->getResultado())) {
                $dato_codigo = $fila->us_usuario_id;
                $obj_us_usuario = UsUsuario::getOxId($dato_codigo);

                $cantidad = $fila->cantidad;
                $dato_descripcion = substr($obj_us_usuario->getDescripcion(), 0, 15);

                $arr_cantidad[] = $cantidad;
                $arr_dato_descripcion[] = $dato_descripcion;

                //$arr_dato_color[] = $obj_tipo_estado->getColor();
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
    
    static function getWidgetUsNavegacionPorUsuarioBar($fecha_desde, $fecha_hasta, $hora_desde, $hora_hasta, $pagina, $grupo_id, $cantidad = 10) {
        $arr_widget = array();
        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------

            $sql = "SELECT
                    DISTINCT
                    subconsulta.us_usuario_descripcion, 
                    subconsulta.us_usuario_id, 
                    subconsulta.cantidad 	
            FROM (
                    SELECT 
                    us_usuario.descripcion as us_usuario_descripcion, 
                    us_usuario.id as us_usuario_id, 
                    count(us_navegacion.us_usuario_id) as cantidad 
                    FROM us_navegacion 
                    LEFT JOIN us_usuario on us_usuario.id = us_navegacion.us_usuario_id 
                    WHERE TRUE                   
                    AND us_navegacion.creado::DATE BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'
                    AND us_navegacion.creado::TIME BETWEEN '" . $hora_desde . "' AND '" . $hora_hasta . "'
                    AND us_usuario.id <> 1
            ";

            if ($pagina != '') {
                $sql .= " AND us_navegacion.pagina = '" . $pagina . "'";
            }

            $sql .= "GROUP BY 1, 2
                ) AS subconsulta
            LEFT JOIN us_agrupado on us_agrupado.us_usuario_id = subconsulta.us_usuario_id 
            LEFT JOIN us_grupo on us_grupo.id = us_agrupado.us_grupo_id 
            WHERE TRUE
            ";

            if ($grupo_id != 0) {
                $sql .= " AND us_grupo.id = " . $grupo_id;
            }

            $sql .= "ORDER BY cantidad DESC
            ";

            $sql .= " LIMIT " . self::getArrCantidadFormateado($cantidad)['cantidad'] . " OFFSET ".self::getArrCantidadFormateado($cantidad)['desde']."; ";

            //Gral::echoSqlSentence($sql);
            //exit;
            
            $cons = new Consulta();
            $cons->setSQL($sql);
            $cons->execute();

            $cantidad_maxima = 0;
            $arr_cantidad = array();
            $arr_dato_descripcion = array();
            $arr_linea_dataset = array();
            while ($fila = pg_fetch_object($cons->getResultado())) {
                $dato_codigo = $fila->us_usuario_id;
                $obj_us_usuario = UsUsuario::getOxId($dato_codigo);

                $cantidad = $fila->cantidad;
                $dato_descripcion = $obj_us_usuario->getDescripcion();

                $arr_cantidad[] = $cantidad;
                $arr_dato_descripcion[] = $dato_descripcion;

                //$arr_dato_color[] = $obj_tipo_estado->getColor();
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
    
    static function getWidgetUsNavegacionPorIpBar($fecha_desde, $fecha_hasta, $hora_desde, $hora_hasta, $texto, $us_usuario_id, $cantidad = 10, $ordenamiento) {
        $arr_widget = array();
        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------
            $sql = "SELECT
                    us_navegacion.ip as us_navegacion_ip,
                    count(us_navegacion.ip) as cantidad
                    FROM us_navegacion
                    LEFT JOIN us_usuario on us_usuario.id = us_navegacion.us_usuario_id
                    WHERE TRUE
                    AND us_navegacion.creado::DATE BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'
                    AND us_navegacion.creado::TIME BETWEEN '" . $hora_desde . "' AND '" . $hora_hasta . "'
                    AND us_usuario.id <> 1
                    ";
            
            if($texto != ''){
                $sql .= " AND us_navegacion.ip LIKE '%" . $texto . "%'";
            }
            
            if ($us_usuario_id != 0) {
                $sql .= " AND us_usuario.id = " . $us_usuario_id;
            }
            
            $sql .= "
                        GROUP BY us_navegacion_ip
                    ";
            
            if ($ordenamiento == GralSiNo::GRAL_SINO_ORDENAMIENTO_ALFABETICO) {
                $sql .= " ORDER BY us_navegacion_ip ASC ";
            } else {
                $sql .= " ORDER BY cantidad DESC ";
            }
            
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
                $dato_descripcion = $fila->us_navegacion_ip;
                
                $dato_descripcion = str_replace(array('93.188.165.16'), '', $dato_descripcion);
                $dato_descripcion = str_replace(' - ', '', $dato_descripcion);
                
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
    
    static function getWidgetUsNavegacionPaginasVisitadasPie($fecha_desde, $fecha_hasta, $hora_desde, $hora_hasta, $usuario_id, $grupo_id, $cantidad = 10) {
        $arr_widget = array();

        // ---------------------------------------------------------------------
        // se obtienen los datos
        // ---------------------------------------------------------------------
        $sql = "SELECT
                DISTINCT
                subconsulta.us_navegacion_pagina, 
                subconsulta.cantidad 
        FROM (
                SELECT 
                us_navegacion.pagina as us_navegacion_pagina,
                count(us_navegacion.pagina) as cantidad
                FROM us_navegacion 
                LEFT JOIN us_usuario on us_usuario.id = us_navegacion.us_usuario_id 
                WHERE TRUE                   
                AND us_navegacion.creado::DATE BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'
                AND us_navegacion.creado::TIME BETWEEN '" . $hora_desde . "' AND '" . $hora_hasta . "'
                AND us_usuario.id <> 1
                AND us_navegacion.pagina <> 'index.php'            
        ";

        if ($usuario_id != 0) {
            $sql .= " AND us_navegacion.us_usuario_id = " . $usuario_id;
        }

        $sql .= "GROUP BY 1
            ) AS subconsulta
        LEFT JOIN us_navegacion on us_navegacion.pagina = subconsulta.us_navegacion_pagina 
        LEFT JOIN us_usuario on us_usuario.id = us_navegacion.us_usuario_id 
        LEFT JOIN us_agrupado on us_agrupado.us_usuario_id = us_usuario.id 
        LEFT JOIN us_grupo on us_grupo.id = us_agrupado.us_grupo_id 
        WHERE TRUE
        ";

        if ($grupo_id != 0) {
            $sql .= " AND us_grupo.id = " . $grupo_id;
        }

        $sql .= " ORDER BY cantidad DESC
        ";

        $sql .= " LIMIT " . self::getArrCantidadFormateado($cantidad)['cantidad'] . " OFFSET ".self::getArrCantidadFormateado($cantidad)['desde']."; ";

        //Gral::echoSqlSentence($sql);
        
        $cons = new Consulta();
        $cons->setSQL($sql);
        $cons->execute();

        $total = 0;
        $arr_cantidad = array();
        $arr_dato_descripcion = array();
        $arr_dato_color = array();

        $resultado = $cons->getResultado();
        while ($fila = pg_fetch_object($resultado)) {
            $total += $fila->cantidad;
        }

        pg_result_seek($resultado, 0); //Se reinicia el puntero para poder volver a iterar y tomar el valor total para obtener un porcentaje

        while ($fila = pg_fetch_object($resultado)) {
            $cantidad = $fila->cantidad;
            $porcentaje = ($cantidad / $total) * 100;
            $porcentaje = number_format($porcentaje, 0); //calculo del porcentaje

            $dato_descripcion = $fila->us_navegacion_pagina . ' (' . $porcentaje . '%)';

            $arr_cantidad[] = $cantidad;
            $arr_dato_descripcion[] = $dato_descripcion;
        }
        
        $arr_colores_hardcodeado = self::getArrColoresHardcodeados(count($arr_dato_descripcion));
        for ($i = 0; $i < count($arr_dato_descripcion); $i++) {
            //$arr_dato_color[$i] = $arr_colores_hardcodeado[array_rand($arr_colores_hardcodeado)];
            $arr_dato_color[$i] = $arr_colores_hardcodeado[$i];
        }

        $arr_widget['arr_cantidad'] = $arr_cantidad;
        $arr_widget['arr_dato_descripcion'] = $arr_dato_descripcion;
        $arr_widget['arr_dato_color'] = $arr_dato_color;
        $arr_widget['total'] = $total;

        return $arr_widget;
    }
    
    static function getWidgetUsNavegacionPaginasVisitadasBar($fecha_desde, $fecha_hasta, $hora_desde, $hora_hasta, $usuario_id, $grupo_id, $cantidad = 10) {
        $arr_widget = array();
        if ($fecha_desde && $fecha_hasta) {
            // ---------------------------------------------------------------------
            // se obtienen los datos
            // ---------------------------------------------------------------------

            $sql = "SELECT 
                    us_navegacion.pagina as us_navegacion_pagina,
                    count(us_navegacion.pagina) as cantidad
                    FROM us_navegacion
                    LEFT JOIN us_usuario on us_usuario.id = us_navegacion.us_usuario_id
                    LEFT JOIN us_agrupado on us_agrupado.us_usuario_id = us_usuario.id
                    LEFT JOIN us_grupo on us_grupo.id = us_agrupado.us_grupo_id
                    WHERE TRUE
                    AND us_navegacion.creado::DATE BETWEEN '" . $fecha_desde . "' AND '" . $fecha_hasta . "'
                    AND us_navegacion.creado::TIME BETWEEN '" . $hora_desde . "' AND '" . $hora_hasta . "'
                    AND us_usuario.id <> 1
                    AND us_navegacion.pagina <> 'index.php'
                        ";

            if ($usuario_id != 0) {
                $sql .= " AND us_navegacion.us_usuario_id = " . $usuario_id;
            }

            if ($grupo_id != 0) {
                $sql .= " AND us_grupo.id = " . $grupo_id;
            }

            $sql .= "
                        GROUP BY 1
                        ORDER BY cantidad DESC
                    ";

            $sql .= " LIMIT " . self::getArrCantidadFormateado($cantidad)['cantidad'] . " OFFSET ".self::getArrCantidadFormateado($cantidad)['desde']."; ";

            //Gral::echoSqlSentence($sql);
            //exit;
            
            $cons = new Consulta();
            $cons->setSQL($sql);
            $cons->execute();

            $cantidad_maxima = 0;
            $arr_cantidad = array();
            $arr_dato_descripcion = array();
            $arr_linea_dataset = array();
            while ($fila = pg_fetch_object($cons->getResultado())) {
                $cantidad = $fila->cantidad;
                $dato_descripcion = $fila->us_navegacion_pagina;

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
    
    /**
     *
     *
     */
    static function getWidgetVtaFacturaEmitidaVendedor($fecha_desde, $fecha_hasta, $vta_vendedor_id, $cli_cliente_id) {
        $criterio = new Criterio();
        $criterio->addDistinct(true);
        VtaFactura::setAplicarFiltrosDeAlcance($criterio);
        $criterio->add(VtaFactura::GEN_ATTR_CLI_CLIENTE_ID, Criterio::VACIO, Criterio::IS_NOT_NULL);

        if ($fecha_desde != '') {
            $criterio->add(VtaFactura::GEN_ATTR_FECHA_EMISION, $fecha_desde . ' 00:00:00', Criterio::MAYORIGUAL);
        }
        if ($fecha_hasta != '') {
            $criterio->add(VtaFactura::GEN_ATTR_FECHA_EMISION, $fecha_hasta . ' 23:59:59', Criterio::MENORIGUAL);
        }
        if ($vta_vendedor_id != 0) {
            $criterio->add(VtaVendedor::GEN_ATTR_ID, $vta_vendedor_id, Criterio::IGUAL);
        }
        if ($cli_cliente_id != 0) {
            $criterio->add(CliCliente::GEN_ATTR_ID, $cli_cliente_id, Criterio::IGUAL);
        }

        $criterio->addTabla(VtaFactura::GEN_TABLA);
        $criterio->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaFactura::GEN_ATTR_CLI_CLIENTE_ID, 'LEFT JOIN');
        $criterio->addRealJoin(VtaVendedor::GEN_TABLA, VtaVendedor::GEN_ATTR_ID, VtaFactura::GEN_ATTR_VTA_VENDEDOR_ID, 'LEFT JOIN');
        $criterio->addOrden(VtaFactura::GEN_ATTR_FECHA_EMISION, Criterio::_ASC);
        $criterio->setCriterios();
        $vta_facturas = VtaFactura::getVtaFacturas(null, $criterio);
        
        return $vta_facturas;
    }
    
    /**
     *
     *
     */
    static function getWidgetVtaAjusteDebeEmitidaVendedor($fecha_desde, $fecha_hasta, $vta_vendedor_id, $cli_cliente_id) {
        $criterio = new Criterio();
        $criterio->addDistinct(true);
        VtaAjusteDebe::setAplicarFiltrosDeAlcance($criterio);
        $criterio->add(VtaAjusteDebe::GEN_ATTR_CLI_CLIENTE_ID, Criterio::VACIO, Criterio::IS_NOT_NULL);

        if ($fecha_desde != '') {
            $criterio->add(VtaAjusteDebe::GEN_ATTR_FECHA_EMISION, $fecha_desde . ' 00:00:00', Criterio::MAYORIGUAL);
        }
        if ($fecha_hasta != '') {
            $criterio->add(VtaAjusteDebe::GEN_ATTR_FECHA_EMISION, $fecha_hasta . ' 23:59:59', Criterio::MENORIGUAL);
        }
        if ($vta_vendedor_id != 0) {
            $criterio->add(VtaVendedor::GEN_ATTR_ID, $vta_vendedor_id, Criterio::IGUAL);
        }
        if ($cli_cliente_id != 0) {
            $criterio->add(CliCliente::GEN_ATTR_ID, $cli_cliente_id, Criterio::IGUAL);
        }

        $criterio->addTabla(VtaAjusteDebe::GEN_TABLA);
        $criterio->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaAjusteDebe::GEN_ATTR_CLI_CLIENTE_ID, 'LEFT JOIN');
        $criterio->addRealJoin(VtaVendedor::GEN_TABLA, VtaVendedor::GEN_ATTR_ID, VtaAjusteDebe::GEN_ATTR_VTA_VENDEDOR_ID, 'LEFT JOIN');
        $criterio->addOrden(VtaAjusteDebe::GEN_ATTR_FECHA_EMISION, Criterio::_ASC);
        $criterio->setCriterios();
        $vta_ajuste_debes = VtaAjusteDebe::getVtaAjusteDebes(null, $criterio);
        
        return $vta_ajuste_debes;
    }
    
    /*
     * Autor: Baez Julian
     * Fecha: 28/10/2022 13:00
     */
    static function getWidgetVtaOrdenVentaEstadisticasVendedor($cmb_busqueda, $cmb_con_sucursal_vinculada, $widget_cmb_gral_sucursal_id, $cmb_con_vendedor_vinculado, $widget_cmb_vta_vendedor_id, $cmb_sucursal_vinculo_automatico, $cmb_cli_cliente_tipo_gestion_id, $cmb_cli_cliente_tipo_estado_venta_id, $cmb_cli_cliente_periodicidad_gestion_id) {
        
        // ---------------------------------------------------------------------
        // Consulta CliCliente
        // ---------------------------------------------------------------------
        $criterio = new Criterio();
        $criterio->addDistinct(true);
        $criterio->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        
        if($cmb_cli_cliente_tipo_estado_venta_id != 0){
            $criterio->add(CliClienteTipoEstadoVenta::GEN_ATTR_ID, $cmb_cli_cliente_tipo_estado_venta_id, Criterio::IGUAL);
        }
        
        if($cmb_cli_cliente_periodicidad_gestion_id != 0){
            $criterio->add(CliClientePeriodicidadGestion::GEN_ATTR_ID, $cmb_cli_cliente_periodicidad_gestion_id, Criterio::IGUAL);
        }
        
        if ($cmb_busqueda == GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_SUCURSAL) {
            if ($cmb_con_sucursal_vinculada == 1) {
                if ($widget_cmb_gral_sucursal_id != 0) {
                    $criterio->add(GralSucursal::GEN_ATTR_ID, $widget_cmb_gral_sucursal_id, Criterio::IGUAL);
                }else{
                    $criterio->add(GralSucursal::GEN_ATTR_ID, ' and true', Criterio::IS_NOT_NULL);            
                }
            }else{
                $criterio->add(GralSucursal::GEN_ATTR_ID, ' and true', Criterio::IS_NULL);
            }
            
            if($cmb_sucursal_vinculo_automatico != -1){
                // de acuerdo al tipo de vinculo, automatico o no
                $criterio->add(GralSucursalCliCliente::GEN_ATTR_AUTOMATICO, $cmb_sucursal_vinculo_automatico, Criterio::IGUAL);
            }
            
        }elseif($cmb_busqueda == GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_VENDEDOR){
            if ($cmb_con_vendedor_vinculado == 1) {
                if ($widget_cmb_vta_vendedor_id != 0) {
                    $criterio->add(VtaVendedor::GEN_ATTR_ID, $widget_cmb_vta_vendedor_id, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaVendedor::GEN_ATTR_ID, ' and true', Criterio::IS_NOT_NULL);            
                }
            }else{
                $criterio->add(VtaVendedor::GEN_ATTR_ID, ' and true', Criterio::IS_NULL);
            }
        }

        if($cmb_cli_cliente_tipo_gestion_id != 0){
            // de acuerdo al tipo de gestion
            $criterio->add(CliClienteTipoGestion::GEN_ATTR_ID, $cmb_cli_cliente_tipo_gestion_id, Criterio::IGUAL);
        }
        
        $criterio->addTabla(CliCliente::GEN_TABLA);
        if ($cmb_busqueda == GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_SUCURSAL) {
            $criterio->addRealJoin(GralSucursalCliCliente::GEN_TABLA, GralSucursalCliCliente::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
            $criterio->addRealJoin(GralSucursal::GEN_TABLA, GralSucursal::GEN_ATTR_ID, GralSucursalCliCliente::GEN_ATTR_GRAL_SUCURSAL_ID, 'LEFT JOIN');
        }elseif($cmb_busqueda == GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_VENDEDOR){
            $criterio->addRealJoin(CliClienteVtaVendedor::GEN_TABLA, CliClienteVtaVendedor::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
            $criterio->addRealJoin(VtaVendedor::GEN_TABLA, VtaVendedor::GEN_ATTR_ID, CliClienteVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, 'LEFT JOIN');
        }
        $criterio->addRealJoin(CliClienteTipoGestion::GEN_TABLA, CliClienteTipoGestion::GEN_ATTR_ID, CliCliente::GEN_ATTR_CLI_CLIENTE_TIPO_GESTION_ID, 'LEFT JOIN');
        $criterio->addRealJoin(CliClienteTipoEstadoVenta::GEN_TABLA, CliClienteTipoEstadoVenta::GEN_ATTR_ID, CliCliente::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_VENTA_ID, 'LEFT JOIN');
        $criterio->addRealJoin(CliClientePeriodicidadGestion::GEN_TABLA, CliClientePeriodicidadGestion::GEN_ATTR_ID, CliCliente::GEN_ATTR_CLI_CLIENTE_PERIODICIDAD_GESTION_ID, 'LEFT JOIN');
        $criterio->addOrden(CliCliente::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
        $criterio->setCriterios();
        
        $p = null;
        
        $cli_clientes_del_vendedor = CliCliente::getCliClientes($p, $criterio);
        //Gral::prr($cli_clientes_del_vendedor);
        //exit;
        
        return $cli_clientes_del_vendedor;
    }
    
}

?>