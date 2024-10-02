<?php

class PrcProcesoHistorico {

    /**
     * Metodo que retorna un conn para conexion remota
     * @return type
     */
    static function conectarRemotoDestino() {
        $bd_servidor = DbConfig::CONFIG_BD_SERVIDOR;
        $bd_usuario = DbConfig::CONFIG_BD_USUARIO;
        $bd_clave = DbConfig::CONFIG_BD_CLAVE;
        $bd_base = DbConfig::CONFIG_BD_BASE_HISTORICO;
        $bd_puerto = DbConfig::CONFIG_BD_PUERTO;

        $conn = pg_connect("host=" . $bd_servidor . " port=" . $bd_puerto . " user=" . $bd_usuario . " password=" . $bd_clave . " dbname=" . $bd_base . "");
        return $conn;
    }

    /**
     * Metodo que migra un registro de importacion a bd historica
     */
    static function migrarPrvImportacionResultadoAHistoricoRemoto($cantidad_a_migrar = false) {
        $sql_insert_remoto = "";
        $sql_delete_local = "";
        $array_id_prv_importacion = array();
        $array_id_prv_importacion_existente_en_remoto = array();
        $string_ids_prv_importacion = "";

        //si no recibe cantidad por defecto es 100
        if (!$cantidad_a_migrar) {
            $cantidad_a_migrar = 100;
        }

        $sql = "SELECT * FROM prv_importacion_resultado ORDER BY id ASC LIMIT " . $cantidad_a_migrar . " OFFSET 0;";

        $paginador = new Paginador(PrvImportacionResultado::getCantidadTotalDeRegistros(), 1);

        $consulta = new Consulta();
        $consulta->setSql($sql);
        $consulta->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
        $consulta->execute();
        $paginador->setTotal($consulta->getTotal());
        $recordset = $consulta->getResultado();

        //Si hay resultado
        if ($consulta->getTotal() !== 0) {

            //Se conecta al remoto
            $conexion_remoto = self::conectarRemotoDestino();

            //Primera recorrida. Recorrer y guardar todos los ID en un array
            while ($fil = pg_fetch_object($recordset)) {
                $array_id_prv_importacion[$fil->id] = $fil->id;
            }

            //Se reinicia el puntero. Para poder volver a recorrer desde el principio
            pg_result_seek($recordset, 0);

            //El array de ID generado antes pasar a un string
            $string_ids_prv_importacion = implode(",", $array_id_prv_importacion);

            //Consultar en remoto que ID ya existen y poner en un array de existentes
            $sql_check_id_remoto = "SELECT *
                                    FROM prv_importacion_resultado 
                                    WHERE id IN (" . $string_ids_prv_importacion . ") ORDER BY id ASC";
            $resultado_check_id_remoto = pg_exec($conexion_remoto, $sql_check_id_remoto);
            while ($fila_remoto = pg_fetch_object($resultado_check_id_remoto)) {
                $array_id_prv_importacion_existente_en_remoto[$fila_remoto->id] = $fila_remoto->id;
            }

            //Segunda recorrida. Insertar en remoto y eliminar en local
            while ($fila = pg_fetch_object($recordset)) {

                //Si el ID no existe en el array de existentes en remoto
                if (!in_array($fila->id, $array_id_prv_importacion_existente_en_remoto)) {
                    $sql_insert_remoto .= "INSERT INTO prv_importacion_resultado 
                                            VALUES('" . $fila->id . "', '"
                            . $fila->descripcion . "', '"
                            . $fila->prv_importacion_id . "', '"
                            . $fila->codigo . "', '"
                            . $fila->observacion . "', '"
                            . $fila->observacion_tecnica . "', '"
                            . $fila->estado . "', '"
                            . $fila->orden . "', '"
                            . $fila->creado . "', '"
                            . $fila->creado_por . "', '"
                            . $fila->modificado . "', '"
                            . $fila->modificado_por
                            . "');";
                }

                $sql_delete_local .= "DELETE FROM prv_importacion_resultado WHERE id = " . $fila->id . ";";
            }

            //Se inserta en remoto
            $resultado = pg_exec($conexion_remoto, $sql_insert_remoto);

            //Se elimina del local los registros insertados en remoto
            $ejec = new Ejecucion();
            $ejec->setSql($sql_delete_local);
            $ejec->execute();

            return true;
        } else {
            Gral::pr("Sin resultados para migrar.");
        }
        return false;
    }
    
    /**
     * Metodo que migra un registro de importacion a bd historica
     */
    static function migrarUsUsuarioAuditoriaAHistoricoRemoto($cantidad_a_migrar = false) {
        $sql_insert_remoto = "";
        $sql_delete_local = "";
        $array_id_us_usuario_auditoria = array();
        $array_id_us_usuario_auditoria_existente_en_remoto = array();
        $string_ids_us_usuario_auditoria = "";

        //si no recibe cantidad por defecto es 100
        if (!$cantidad_a_migrar) {
            $cantidad_a_migrar = 100;
        }

        $fecha_limite = Date::sumarDias(date('Y-m-d'), -30);
        
        $sql = "SELECT * FROM us_usuario_auditoria ORDER BY id ASC LIMIT " . $cantidad_a_migrar . " OFFSET 0;";
        $sql = "SELECT * FROM us_usuario_auditoria WHERE creado::DATE < '".$fecha_limite."' ORDER BY id ASC ";

        $paginador = new Paginador($cantidad_a_migrar, 1);

        $consulta = new Consulta();
        $consulta->setSql($sql);
        $consulta->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
        $consulta->execute();
        $paginador->setTotal($consulta->getTotal());
        $recordset = $consulta->getResultado();


        //Si hay resultado
        if ($consulta->getTotal() !== 0) {

            //Se conecta al remoto
            $conexion_remoto = self::conectarRemotoDestino();

            //Primera recorrida. Recorrer y guardar todos los ID en un array
            while ($fil = pg_fetch_object($recordset)) {
                $array_id_us_usuario_auditoria[$fil->id] = $fil->id;
            }

            //Se reinicia el puntero. Para poder volver a recorrer desde el principio
            pg_result_seek($recordset, 0);

            //El array de ID generado antes pasar a un string
            $string_ids_us_usuario_auditoria = implode(",", $array_id_us_usuario_auditoria);

            //Consultar en remoto que ID ya existen y poner en un array de existentes
            $sql_check_id_remoto = "SELECT *
                                    FROM us_usuario_auditoria 
                                    WHERE id IN (" . $string_ids_us_usuario_auditoria . ") ORDER BY id ASC";
            $resultado_check_id_remoto = pg_exec($conexion_remoto, $sql_check_id_remoto);
            while ($fila_remoto = pg_fetch_object($resultado_check_id_remoto)) {
                $array_id_us_usuario_auditoria_existente_en_remoto[$fila_remoto->id] = $fila_remoto->id;
            }

            //Segunda recorrida. Insertar en remoto y eliminar en local
            while ($fila = pg_fetch_object($recordset)) {
                
                $us_usuario_id = (!is_null($fila->us_usuario_id)) ? $fila->us_usuario_id : 'null';
                $creado_por = (!is_null($fila->creado_por)) ? $fila->creado_por : 'null';
                $modificado_por = (!is_null($fila->modificado_por)) ? $fila->modificado_por : 'null';

                //Si el ID no existe en el array de existentes en remoto
                if (!in_array($fila->id, $array_id_us_usuario_auditoria_existente_en_remoto)) {
                    $sql_insert_remoto .= "INSERT INTO us_usuario_auditoria 
                                            VALUES(" . $fila->id . ", '"
                            . $fila->descripcion . "', "
                            . $us_usuario_id . ", '"
                            . $fila->tabla . "', '"
                            . $fila->accion . "', '"
                            . $fila->pagina . "', '"
                            . $fila->url . "', '"
                            . $fila->comando . "', '"
                            . $fila->dato_before . "', '"
                            . $fila->dato_after . "', '"
                            . $fila->observacion . "', '"
                            . $fila->estado . "', '"
                            . $fila->orden . "', '"
                            . $fila->creado . "', "
                            . $creado_por . ", '"
                            . $fila->modificado . "', "
                            . $modificado_por
                            . "); ";
                }
            }
            $sql_delete_local .= "DELETE FROM us_usuario_auditoria WHERE id IN (" . $string_ids_us_usuario_auditoria . "); ";

            //Gral::pr($sql_insert_remoto);
            //Gral::pr($sql_delete_local);
            
            // -----------------------------------------------------------------
            //Se inserta en remoto
            // -----------------------------------------------------------------
            $resultado = pg_exec($conexion_remoto, $sql_insert_remoto);

            // -----------------------------------------------------------------
            //Se elimina del local los registros insertados en remoto
            // -----------------------------------------------------------------
            $ejec = new Ejecucion();
            $ejec->setSql($sql_delete_local);
            $ejec->execute();

            return true;
        } else {
            Gral::pr("Sin resultados para migrar.");
        }
        return false;
    }    


}

?>