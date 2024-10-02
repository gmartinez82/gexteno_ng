<?php

require_once "base/BPerMovMovimiento.php";

class PerMovMovimiento extends BPerMovMovimiento {

    public function control() {
        $error = new DbError();

        if (Ctrl::esNull($this->getPerPersonaId())) {
            $error->addError(100, "Persona", "per_persona_id");
        }

        if (Ctrl::esNull($this->getPerMovTipoMovimientoId())) {
            $error->addError(100, "Tipo Movimiento", "per_mov_tipo_movimiento_id");
        }

        return $error;
    }

    public function saveDesdeBackend() {
        $descripcion = $this->getPerPersona()->getDescripcion() . ' - ';
        $descripcion.= $this->getPerPersona()->getGralEmpresa()->getDescripcion();

        $this->setDescripcion($descripcion);

        if ($this->getId() != '') {
            $per_mov_movimiento = PerMovMovimiento::getOxId($this->getId());
        }


        parent::saveDesdeBackend();
    }

    static function controlMovimiento($credencial, $club_sector) {
        // falta reprogramar
    }

    static function registrarMovimiento($tipo, $credencial, $per_mov_tipo_movimiento = false, $per_mov_tipo_estado, $per_persona = false, $ctrl_equipo = false, $hashCode = "") {

        // se registra estado activo del equipo
        $equipo = Gral::getSes('CDN_HORARIOS_CTRL_EQUIPO');

        if ($equipo != '') {
            $ctrl_equipo = CtrlEquipo::getOxCodigo($equipo);
            if ($ctrl_equipo) {
                //$ctrl_equipo->setEnviarEstadoActivo('Control de Acceso');
            }
        }

        // se reconoce el sector donde se encuentra el equipo
        $ctrl_sector = $ctrl_equipo->getCtrlSectorActualDelEquipo();
        //$ctrl_sector = CtrlSector::getOxId(1);
        // se registra el movimiento de la persona
        $es_persona = false;
        $descripcion = 'Desconocido';

        //$per_persona = PerPersona::getOxCodigoCredencial($credencial);
        //$per_persona = PerPersona::identificarPersonaXCodigo($credencial, false);
        if(!$per_persona){
            switch ($tipo) {
                case 'BIO':
                    //codigo
                    $per_persona = PerPersona::getOxId($credencial);
                    break;
                case 'RFID':
                    //codigo
                    $per_persona = PerPersona::getOxCodigoCredencial($credencial);
                    break;
                case 'OLD':
                    //codigo
                    $per_persona = PerPersona::getOxCodigoCredencial($credencial);
                    break;
            }
        }
        //Gral::prr($per_persona);

        if ($per_persona) { // si es persona reconocida
            $es_persona = true;

            $descripcion = $per_persona->getDescripcion() . ' - ' .
                    $per_persona->getGralEmpresa()->getDescripcion()
            ;
        }

        // se reconoce el ultimo movimiento para evitar dobles registros en periodos de segundos
        $const_diferencia_segundos_margen = 15;
        $per_mov_movimiento_ultimo = self::getPerMovMovimientoUltimoXPerPersona($per_persona->getId());
        if ($per_mov_movimiento_ultimo) {
            $creado_ultimo = $per_mov_movimiento_ultimo->getCreado();
            $diferencia_segundos = strtotime('now') - strtotime($creado_ultimo);
            if ($diferencia_segundos <= $const_diferencia_segundos_margen) {
                return $per_mov_movimiento_ultimo; // si se registra dentro del margen de segundos para evitar duplicidad, no se registra.
            }
        }

        // se reconoce el tipo de movimiento automaticamente
        if (!$per_mov_tipo_movimiento) {
            $per_mov_tipo_movimiento = self::reconocerTipoMovimientoSiguienteXPersona($per_persona->getId(), $per_mov_movimiento_ultimo);
        }
        //Gral::prr($per_mov_tipo_movimiento);

        $per_mov_movimiento = new PerMovMovimiento();
        $per_mov_movimiento->setDescripcion($descripcion);
        $per_mov_movimiento->setPerPersonaId($per_persona->getId());
        $per_mov_movimiento->setCtrlEquipoId($ctrl_equipo->getId());
        if ($ctrl_sector) {
            $per_mov_movimiento->setCtrlSectorId($ctrl_sector->getId());
        }
        $per_mov_movimiento->setCodigo($credencial);
        $per_mov_movimiento->setGralEmpresaId($per_persona->getGralEmpresaId());
       // $per_mov_movimiento->setGralEmpresaSectorId($per_persona->getGralEmpresaSectorId());
        $per_mov_movimiento->setPerMovTipoMovimientoId($per_mov_tipo_movimiento->getId());
        $per_mov_movimiento->setPerMovTipoEstadoId($per_mov_tipo_estado->getId());
        $per_mov_movimiento->setFechahora(date('Y-m-d H:i:s'));
        $per_mov_movimiento->setObservacion($hashCode);
        $per_mov_movimiento->setEstado(1);

        $per_mov_movimiento->save();
        
        $arr_parametros = array("persona_id" => $per_persona->getId(), "fecha" => date('Y-m-d'));
        PrcProcesoResumen::execProcesoPerMovimientos($arr_parametros);

        // ---------------------------------------------------------------------
        // se registra el movimiento de la persona en la sucursal
        // ---------------------------------------------------------------------
        $ctrl_sector = $ctrl_equipo->getCtrlSectorActualDelEquipo();
        $gral_sucursal = $ctrl_sector->getGralSucursal();   
        
        if($per_persona){
            $per_persona->setAsignarSucursal($gral_sucursal);
        }

        return $per_mov_movimiento;
    }

    static function getPerMovMovimientosXPerPersona($per_persona_id) {
        $c = new Criterio();
        $c->add(PerMovMovimiento::GEN_ATTR_PER_PERSONA_ID, $per_persona_id, Criterio::IGUAL);
        $c->addTabla(PerMovMovimiento::GEN_TABLA);
        $c->addOrden(PerMovMovimiento::GEN_ATTR_ID, 'desc');
        $c->setCriterios();

        $per_mov_movimientos = PerMovMovimiento::getPerMovMovimientos(null, $c);
        return $per_mov_movimientos;
    }

    static function getPerMovMovimientoUltimoXPerPersona($per_persona_id) {
        $c = new Criterio();
        $c->add(PerMovMovimiento::GEN_ATTR_PER_PERSONA_ID, $per_persona_id, Criterio::IGUAL);
        $c->addTabla(PerMovMovimiento::GEN_TABLA);
        $c->addOrden(PerMovMovimiento::GEN_ATTR_ID, 'desc');
        $c->setCriterios();

        $p = new Paginador(1, 1);

        $per_mov_movimientos = PerMovMovimiento::getPerMovMovimientos($p, $c);
        foreach ($per_mov_movimientos as $per_mov_movimiento) {
            return $per_mov_movimiento;
        }
        return false;
    }

    static function reconocerTipoMovimientoSiguienteXPersona($per_persona_id, $per_mov_movimiento_ultimo = false) {
        if(!$per_mov_movimiento_ultimo){
            $per_mov_movimiento_ultimo = self::getPerMovMovimientoUltimoXPerPersona($per_persona_id);
        }
        
        $per_mov_tipo_movimiento = PerMovTipoMovimiento::getOxCodigo(PerMovTipoMovimiento::TIPO_ENTRADA); // default
        if ($per_mov_movimiento_ultimo) {
            $per_mov_tipo_movimiento_ultimo = $per_mov_movimiento_ultimo->getPerMovTipoMovimiento();

            switch ($per_mov_tipo_movimiento_ultimo->getCodigo()) {
                case PerMovTipoMovimiento::TIPO_ENTRADA:
                    $per_mov_tipo_movimiento = PerMovTipoMovimiento::getOxCodigo(PerMovTipoMovimiento::TIPO_SALIDA);
                    break;
                case PerMovTipoMovimiento::TIPO_SALIDA:
                    $per_mov_tipo_movimiento = PerMovTipoMovimiento::getOxCodigo(PerMovTipoMovimiento::TIPO_ENTRADA);
                    break;
            }
        }
        return $per_mov_tipo_movimiento;
    }

    public function getPerMovMovimientoParContrario_original() {
        $per_mov_movimiento_par_contrario = new PerMovMovimiento();
        $per_mov_tipo_movimiento_entrada = PerMovTipoMovimiento::getOxCodigo(PerMovTipoMovimiento::TIPO_ENTRADA);
        $per_mov_tipo_movimiento_salida = PerMovTipoMovimiento::getOxCodigo(PerMovTipoMovimiento::TIPO_SALIDA);

        // si el movimiento es de entrada, busca la salida
        if ($this->getPerMovTipoMovimiento()->getCodigo() == PerMovTipoMovimiento::TIPO_ENTRADA) {
            $c = new Criterio();
            $c->add(PerMovMovimiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            $c->add(PerMovMovimiento::GEN_ATTR_PER_MOV_TIPO_MOVIMIENTO_ID, $per_mov_tipo_movimiento_salida->getId(), Criterio::IGUAL);
            $c->add(PerMovMovimiento::GEN_ATTR_PER_PERSONA_ID, $this->getPerPersonaId(), Criterio::IGUAL);
            $c->add(PerMovMovimiento::GEN_ATTR_FECHAHORA, $this->getFechahora(), Criterio::MAYOR);
            $c->addTabla(PerMovMovimiento::GEN_TABLA);
            $c->addOrden(PerMovMovimiento::GEN_ATTR_FECHAHORA, 'asc');
            $c->setCriterios();

            $p = new Paginador(1, 1);
            $os = PerMovMovimiento::getPerMovMovimientos($p, $c);
            foreach ($os as $o) {
                $per_mov_movimiento_par_contrario = $o;
            }
        }

        // si el movimiento es de salida, busca la entrada
        if ($this->getPerMovTipoMovimiento()->getCodigo() == PerMovTipoMovimiento::TIPO_SALIDA) {
            $c = new Criterio();
            $c->add(PerMovMovimiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            $c->add(PerMovMovimiento::GEN_ATTR_PER_MOV_TIPO_MOVIMIENTO_ID, $per_mov_tipo_movimiento_entrada->getId(), Criterio::IGUAL);
            $c->add(PerMovMovimiento::GEN_ATTR_PER_PERSONA_ID, $this->getPerPersonaId(), Criterio::IGUAL);
            $c->add(PerMovMovimiento::GEN_ATTR_FECHAHORA, $this->getFechahora(), Criterio::MENOR);
            $c->addTabla(PerMovMovimiento::GEN_TABLA);
            $c->addOrden(PerMovMovimiento::GEN_ATTR_FECHAHORA, 'desc');
            $c->setCriterios();

            $p = new Paginador(1, 1);
            $os = PerMovMovimiento::getPerMovMovimientos($p, $c);
            foreach ($os as $o) {
                $per_mov_movimiento_par_contrario = $o;
            }
        }

        return $per_mov_movimiento_par_contrario;
    }

    public function getPerMovMovimientoParContrario() {
        $per_mov_movimiento_par_contrario = new PerMovMovimiento();
        $per_mov_tipo_movimiento_entrada = PerMovTipoMovimiento::getOxCodigo(PerMovTipoMovimiento::TIPO_ENTRADA);
        $per_mov_tipo_movimiento_salida = PerMovTipoMovimiento::getOxCodigo(PerMovTipoMovimiento::TIPO_SALIDA);

        // si el movimiento es de entrada, busca la salida
        if ($this->getPerMovTipoMovimiento()->getCodigo() == PerMovTipoMovimiento::TIPO_ENTRADA) {
            $c = new Criterio();
            $c->add(PerMovMovimiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            //$c->add(PerMovMovimiento::GEN_ATTR_PER_MOV_TIPO_MOVIMIENTO_ID, $per_mov_tipo_movimiento_salida->getId(), Criterio::IGUAL);
            $c->add(PerMovMovimiento::GEN_ATTR_PER_PERSONA_ID, $this->getPerPersonaId(), Criterio::IGUAL);
            $c->add(PerMovMovimiento::GEN_ATTR_FECHAHORA, $this->getFechahora(), Criterio::MAYOR);
            $c->addTabla(PerMovMovimiento::GEN_TABLA);
            $c->addOrden(PerMovMovimiento::GEN_ATTR_FECHAHORA, 'asc');
            $c->setCriterios();

            $p = new Paginador(1, 1);
            $os = PerMovMovimiento::getPerMovMovimientos($p, $c);
            foreach ($os as $o) {
                if ($o->getPerMovTipoMovimientoId() == $per_mov_tipo_movimiento_salida->getId()) {
                    $per_mov_movimiento_par_contrario = $o;
                }
            }
        }

        // si el movimiento es de salida, busca la entrada
        if ($this->getPerMovTipoMovimiento()->getCodigo() == PerMovTipoMovimiento::TIPO_SALIDA) {
            $c = new Criterio();
            $c->add(PerMovMovimiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            //$c->add(PerMovMovimiento::GEN_ATTR_PER_MOV_TIPO_MOVIMIENTO_ID, $per_mov_tipo_movimiento_entrada->getId(), Criterio::IGUAL);
            $c->add(PerMovMovimiento::GEN_ATTR_PER_PERSONA_ID, $this->getPerPersonaId(), Criterio::IGUAL);
            $c->add(PerMovMovimiento::GEN_ATTR_FECHAHORA, $this->getFechahora(), Criterio::MENOR);
            $c->addTabla(PerMovMovimiento::GEN_TABLA);
            $c->addOrden(PerMovMovimiento::GEN_ATTR_FECHAHORA, 'desc');
            $c->setCriterios();

            $p = new Paginador(1, 1);
            $os = PerMovMovimiento::getPerMovMovimientos($p, $c);
            foreach ($os as $o) {
                if ($o->getPerMovTipoMovimientoId() == $per_mov_tipo_movimiento_entrada->getId()) {
                    $per_mov_movimiento_par_contrario = $o;
                }
            }
        }

        return $per_mov_movimiento_par_contrario;
    }

    static function getGrillaHorariosParaRepDiario($per_mov_movimientos) {
        $arr = array();

        foreach ($per_mov_movimientos as $per_mov_movimiento) {
            $per_persona = $per_mov_movimiento->getPerPersona();
            $fecha = Gral::getFechaToWeb($per_mov_movimiento->getFechahora());

            //Gral::pr('ENTRADA');
            //Gral::prr($per_mov_movimiento);

            $per_mov_movimiento_par_contrario = $per_mov_movimiento->getPerMovMovimientoParContrario();

            // -----------------------------------------------------------------
            // se determina si los registros fueron editados manualmente
            // -----------------------------------------------------------------
            $editado = 0;
            if ($per_mov_movimiento->getModificadoPor() != 'null' || $per_mov_movimiento_par_contrario->getModificadoPor() != 'null') {
                $editado = 1;
            }
            // -----------------------------------------------------------------
            //Gral::pr('SALIDA');
            //Gral::prr($per_mov_movimiento_par_contrario);

            $arr_tiempo_trabajado = self::getCalculoTiempoTrabajo('h', $per_mov_movimiento, $per_mov_movimiento_par_contrario);

            $arr[$per_persona->getId()][$fecha][] = array(
                PerMovTipoMovimiento::TIPO_ENTRADA => $per_mov_movimiento,
                PerMovTipoMovimiento::TIPO_SALIDA => $per_mov_movimiento_par_contrario,
                'TIEMPO' => $arr_tiempo_trabajado,
                'EDITADO' => $editado,
            );
        }

        //Gral::prr($arr);exit;
        return $arr;
    }

    static function getCalculoTiempoTrabajo($tipo, $per_mov_movimiento, $per_mov_movimiento_par_contrario) {
        if ($per_mov_movimiento->getId() == '' or $per_mov_movimiento_par_contrario->getId() == '') {
            $arr['tiempo_desc'] = '';
            $arr['horas'] = 0;
            $arr['minutos'] = 0;
            $arr['minutos_a_horas'] = 0;
            $arr['horas_real'] = 0;
            $arr['periodo_truncado'] = 1;

            return $arr;
        }

        $caso = $tipo;

        $date2 = $per_mov_movimiento->getFechahora();
        $date1 = $per_mov_movimiento_par_contrario->getFechahora();

        $date2 = substr_replace($date2, '00', -2);
        $date1 = substr_replace($date1, '00', -2);

        $s = strtotime($date1) - strtotime($date2);

        $d = intval($s / 86400);
        $s -= $d * 86400;
        $h = intval($s / 3600);
        $s -= $h * 3600;
        $m = intval($s / 60);
        $s -= $m * 60;
        $dif1 = (($d * 24) + $h) . hrs . " " . $m . "min";

        $horas = (($d * 24) + $h);
        $minutos = $m;
        $minutos_a_horas = round(($minutos / 60), 2);
        $horas_real = $horas + $minutos_a_horas;

        $arr['tiempo_desc'] = $dif1;
        $arr['horas'] = $horas;
        $arr['minutos'] = $minutos;
        $arr['minutos_a_horas'] = $minutos_a_horas;
        $arr['horas_real'] = $horas_real;
        $arr['periodo_truncado'] = 0;

        //Gral::prr($arr);
        return $arr;
    }

    static function getHorasFormateada($tiempo) {
        $horas_formateada = $tiempo;

        $arr = explode('.', (string) $tiempo);

        $horas = $arr[0];
        $minutos = $arr[1];

        $horas_formateada = $horas . ' hs ' . ceil(((float) ('0.' . $minutos)) * 60) . "'";

        return $horas_formateada;
    }

    static function getGrillaCantidadHorasParaCalendario(
    $desde = false, $hasta = false, $per_persona_id = 0, $gral_empresa_id = 0
    ) {
        $user = UsUsuario::autenticado();
        if ($user) {
            $arr_personas_ids = $user->getArrayIdsAutorizados($tabla = 'per_persona');
            //Gral::prr($arr_personas_ids);        
        }

        $sql = "
        SELECT
            *
        FROM
            resumen.per_movimientos
        WHERE TRUE 
            AND fecha BETWEEN '" . $desde . "' AND '" . $hasta . "'
            ";
        if ($arr_personas_ids) {
            $sql.=" AND per_persona_id IN (" . implode(',', $arr_personas_ids) . ")";
        }
        if ($per_persona_id != 0) {
            $sql.=" AND per_persona_id = " . $per_persona_id;
        }
        if ($gral_empresa_id != 0) {
            $sql.=" AND gral_empresa_id = " . $gral_empresa_id;
        }

        $sql.=" 
        ORDER BY fecha, per_persona_descripcion ASC 
        ;
    ";
        //echo $sql;
        $cons = new Consulta();
        $cons->setSQL($sql);
        $cons->execute();

        //Armo el array
        $arr_datos = array();
        while ($row = pg_fetch_object($cons->getResultado())) {
            
            $criterio = new Criterio();
            $criterio->addTabla(PerMovPlanificacion::GEN_TABLA);
            $criterio->add(PerMovPlanificacion::GEN_ATTR_PER_PERSONA_ID, $row->per_persona_id, Criterio::IGUAL);
            $criterio->add(PerMovPlanificacion::GEN_ATTR_FECHA, $row->fecha, Criterio::IGUAL);
            //$criterio->add(PerMovPlanificacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            $criterio->add(PerMovPlanificacion::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
            $criterio->setCriterios();
            
            $per_mov_planificacions = PerMovPlanificacion::getPerMovPlanificacions(null, $criterio);
            foreach ($per_mov_planificacions as $per_mov_planificacion) {
                $per_mov_planificacion_id = $per_mov_planificacion->getId();
                $per_mov_planificacion_horas = $per_mov_planificacion->getHoras();
                $gral_novedad_id = $per_mov_planificacion->getGralNovedadId();
                $gral_novedad = $per_mov_planificacion->getGralNovedad();
                $gral_novedad_descripcion = $gral_novedad->getDescripcion();
                $gral_novedad_laboral = $gral_novedad->getLaboral();

                $arr_novedades[$per_mov_planificacion_id]["per_mov_planificacion_id"] = $per_mov_planificacion_id;
                $arr_novedades[$per_mov_planificacion_id]["per_mov_planificacion_horas"] = $per_mov_planificacion_horas;
                $arr_novedades[$per_mov_planificacion_id]["gral_novedad_id"] = $gral_novedad_id;
                $arr_novedades[$per_mov_planificacion_id]["gral_novedad_descripcion"] = $gral_novedad_descripcion;
                $arr_novedades[$per_mov_planificacion_id]["gral_novedad_laboral"] = $gral_novedad_laboral;
            }

            $arr_datos[$row->co_sector_id][$row->per_persona_id][$row->fecha] = array(
                'sector' => $row->co_sector_descripcion,
                'per_persona_descripcion' => $row->per_persona_descripcion,
                'cantidad_horas' => $row->cantidad_horas,
                'fecha' => $row->fecha,
                'estado' => $row->estado,
                'editado' => $row->editado,
                'novedades' => $arr_novedades,
                'error' => $row->error,
                'periodos' => $row->periodos,
                'mensaje' => $row->mensaje,
            );
        }
        $array = $arr_datos;
        return $array;
    }

    public function getPerMovMovimientoSiguiente() {
        $c = new Criterio();
        $c->add(PerMovMovimiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        //$c->add(PerMovMovimiento::GEN_ATTR_PER_MOV_TIPO_MOVIMIENTO_ID, $per_mov_tipo_movimiento_salida->getId(), Criterio::IGUAL);
        $c->add(PerMovMovimiento::GEN_ATTR_PER_PERSONA_ID, $this->getPerPersonaId(), Criterio::IGUAL);
        $c->add(PerMovMovimiento::GEN_ATTR_FECHAHORA, $this->getFechahora(), Criterio::MAYOR);
        $c->addTabla(PerMovMovimiento::GEN_TABLA);
        $c->addOrden(PerMovMovimiento::GEN_ATTR_FECHAHORA, Criterio::_ASC);
        $c->setCriterios();

        $p = new Paginador(1, 1);
        $os = PerMovMovimiento::getPerMovMovimientos($p, $c);
        if ($os) {
            foreach ($os as $o) {
                $per_mov_movimiento_siguiente = $o;
            }
            return $per_mov_movimiento_siguiente;
        } else {
            return false;
        }
    }

    public function getPerMovMovimientoAnterior() {
        $c = new Criterio();
        $c->add(PerMovMovimiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        //$c->add(PerMovMovimiento::GEN_ATTR_PER_MOV_TIPO_MOVIMIENTO_ID, $per_mov_tipo_movimiento_salida->getId(), Criterio::IGUAL);
        $c->add(PerMovMovimiento::GEN_ATTR_PER_PERSONA_ID, $this->getPerPersonaId(), Criterio::IGUAL);
        $c->add(PerMovMovimiento::GEN_ATTR_FECHAHORA, $this->getFechahora(), Criterio::MENOR);
        $c->addTabla(PerMovMovimiento::GEN_TABLA);
        $c->addOrden(PerMovMovimiento::GEN_ATTR_FECHAHORA, Criterio::_DESC);
        $c->setCriterios();

        $p = new Paginador(1, 1);
        $os = PerMovMovimiento::getPerMovMovimientos($p, $c);
        if ($os) {
            foreach ($os as $o) {
                $per_mov_movimiento_siguiente = $o;
            }
            return $per_mov_movimiento_siguiente;
        } else {
            return false;
        }
    }

}

?>