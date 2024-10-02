<?php

class PrcProcesoResumen {

    const CANTIDAD_DIAS_PROCESO = 60;

    /**
     * 
     */
    static function execProcesoPerMovimientos($arr_parametros = false) {
        $us_usuario = UsUsuario::autenticado();

        $cantidad_dias_proceso = self::CANTIDAD_DIAS_PROCESO * (-1);
        
        // Rango de fechas a para la obtención de los datos de la BD Origen
        $desde = "2018-01-26";
        $hasta = "2018-02-02";
        $desde = Date::sumarDias(date('Y-m-d'), $cantidad_dias_proceso);
        $hasta = Date::sumarDias(date('Y-m-d'), -1);
        if ($arr_parametros) {
            $desde = $arr_parametros["fecha"];
            $hasta = $arr_parametros["fecha"];
        }

        $bd_servidor = Gral::getConfig('bd_servidor');
        $bd_usuario = Gral::getConfig('bd_usuario');
        $bd_clave = Gral::getConfig('bd_clave');
        $bd_puerto = Gral::getConfig('bd_puerto');
        $bd_base = Gral::getConfig('bd_base');

        $connect = pg_connect("host=" . $bd_servidor . " port='" . $bd_puerto . "' user=" . $bd_usuario . " password=" . $bd_clave . " dbname=" . $bd_base);

        if ($connect) {

            if (!$arr_parametros) {
                //---Elimino los registros cargados en la tabla resumen --
                //$sql = "DELETE FROM resumen.per_movimientos;";
            } elseif ($arr_parametros) {
                $persona_id = $arr_parametros["persona_id"];
                $sql = "DELETE FROM resumen.per_movimientos 
                        WHERE resumen.per_movimientos.per_persona_id = " . $persona_id . " AND resumen.per_movimientos.fecha::DATE = '" . $desde . "'";
            }
            //Gral::pr($sql, "-SQL");
            $resultado = pg_exec($connect, $sql);

            //---Obtengo a todas las personas --
            $sql = "        
                    SELECT DISTINCT
                        per_persona.id AS per_persona_id
                        ,per_persona.descripcion AS per_persona_descripcion
                        ,per_persona.legajo AS per_persona_legajo
                        ,gral_empresa.id AS gral_empresa_id
                        ,gral_empresa.descripcion AS gral_empresa_descripcion
                    FROM	
                        per_persona
                        LEFT JOIN gral_empresa ON gral_empresa.id = per_persona.gral_empresa_id
                    WHERE TRUE 
                        AND per_persona.estado = 1 
                        AND per_persona.control_horario = 1 
                        ";
            if ($arr_parametros) {
                $sql .= " AND per_persona.id = " . $arr_parametros["persona_id"];
            }

            $sql .= " ORDER BY
                        per_persona_descripcion
                        --LIMIT 10
                    ;      
            ";
            //Gral::pr($sql, "-SQL");
            $resultado = pg_exec($connect, $sql);

            //---Recorro las personas
            while ($row = pg_fetch_object($resultado)) {
                $per_persona_id = $row->per_persona_id;
                $per_persona_legajo = $row->per_persona_legajo;
                $per_persona_descripcion = $row->per_persona_descripcion;
                $gral_empresa_id = $row->gral_empresa_id;
                $gral_empresa_descripcion = $row->gral_empresa_descripcion;

                $per_persona = PerPersona::getOxId($per_persona_id);
                
                $dia = $desde;
                $total_horas = 0;
                $continuar = true;
                
                $sql = '';

                //---Recorro los días desde hasta--            
                while ($continuar) {

                    if (!Date::esRangoValido($dia, $hasta)) {
                        $continuar = false;
                    } else {
                        
                        // se consulta el arr de horas en fecha
                        $arr_cantidad_horas = $per_persona->getArrHorasEnFecha($dia);
                        
                        $cantidad_horas = $arr_cantidad_horas['CANTIDAD_HORAS'];
                        $estado = $arr_cantidad_horas['ESTADO'];
                        $editado = $arr_cantidad_horas['EDITADO'];
                        $error = $arr_cantidad_horas['ERROR'];
                        $periodos = $arr_cantidad_horas['PERIODOS'];
                        $mensaje = $arr_cantidad_horas['MENSAJE'];
                        
                        $creado = Gral::getFechaHoraActual();
                        $creado_por = ($us_usuario) ? $us_usuario->getId() : 'null';
                        

                        //---Si no tienen valor....
                        if ($cantidad_horas == NULL) {
                            $cantidad_horas = 0;
                        }
                        if ($estado == NULL) {
                            $estado = 0;
                        }
                        if ($error == NULL) {
                            $error = 0;
                        }
                        if ($periodos == NULL) {
                            $periodos = 0;
                        }
                        if ($mensaje == NULL) {
                            $mensaje = "";
                        }
                        if (!$gral_empresa_id) {
                            $gral_empresa_id = 'NULL';
                        }
                        if (!$gral_area_id) {
                            $gral_area_id = 'NULL';
                        }

                        // ---Cargo todo en la tabla--
                        $sql.= "
                            DELETE FROM resumen.per_movimientos 
                            WHERE resumen.per_movimientos.per_persona_id = " . $per_persona_id . " AND resumen.per_movimientos.fecha::DATE = '" . $dia . "';
                                
                            INSERT INTO resumen.per_movimientos
                                  (
                                  id,
                                  per_persona_id, 
                                  per_persona_legajo, 
                                  per_persona_descripcion,
                                  cantidad_horas,
                                  fecha,
                                  estado,
                                  error,
                                  periodos,
                                  mensaje,
                                  gral_empresa_id,
                                  gral_empresa_descripcion,
                                  creado,
                                  creado_por,
                                  editado
                                  )                                  
                            VALUES(
                                nextval('resumen.per_movimientos_seq'),
                                " . $per_persona_id . ","
                                . "'" . $per_persona_legajo . "',"
                                . "'" . $per_persona_descripcion . "',"
                                . "" . $cantidad_horas . ","
                                . "'" . $dia . "',"
                                . "" . $estado . ","
                                . "" . $error . ","
                                . "" . $periodos . ","
                                . "'" . $mensaje . "',"
                                . "" . $gral_empresa_id . ","
                                . "'" . $gral_empresa_descripcion . "',"
                                . "'" . $creado . "'," 
                                . "" . $creado_por . "," 
                                . "" . $editado . "" 
                                . ")
                            ;                    
                        ";

                    }
                    $dia = Date::sumarDias($dia, 1);                    
                }
                
                //Gral::pr($sql, "-SQL");
                // se insertan las fechas de 1 persona
                pg_exec($connect, $sql);
                
            }
        } else {
            echo "<p><i>No me conecte</i></p>";
        }
        pg_close($connect);
    }

}
