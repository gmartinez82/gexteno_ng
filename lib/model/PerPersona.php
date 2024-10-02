<?php

require_once "base/BPerPersona.php";

class PerPersona extends BPerPersona {

    const SES_DIAS_PANTALLA_CANTIDAD = 'adm_permovmovimientocalendario_dias_pantalla_cantidad';
    const SES_FILTRO_FECHA_DESDE = 'adm_permovmovimientocalendario_filtro_fecha_desde';
    const SES_FILTRO_BUSCADOR = 'adm_permovmovimientocalendario_filtro_buscador';

    public function control() {

        $error = new DbError();
        // control Documento

        if (Ctrl::esNull($this->getGralEmpresaId())) {
            $error->addError(100, "Empresa", "gral_empresa_id");
        }

        if (Ctrl::esVacio($this->getLegajo())) {
            $error->addError(100, "Legajo", "legajo");
        }

        if (!Ctrl::esNull($this->getGralEmpresaId()) && !Ctrl::esVacio($this->getLegajo())) {
            $gral_empresa = $this->getGralEmpresa();
            //$o = self::getOxLegajo(trim($this->getLegajo()));

            $arr_cri = array(
                array("campo" => "per_persona.legajo", "valor" => $this->getLegajo()),
                array("campo" => "per_persona.gral_empresa_id", "valor" => $gral_empresa->getId())
            );

            $o = PerPersona::getOxArray($arr_cri);

            if ($o && $o->getId() != $this->getId()) {
                // se controla que no sea el mismo  
                $error->addError("Legajo " . $o->getLegajo() . " ya se encuentra registrado para la empresa indicada. Legajo: " . $o->getLegajo() . " - " . $o->getDescripcion(), "Legajo ", "legajo");
            }
        }       
        
        // control Apellido
        if (!Ctrl::esVacio($this->getApellido())) {
            if (Ctrl::esMaxCaracteres(100, $this->getApellido())) {
                $error->addError(505, "Apellido", "apellido");
            }
        } else {
            $error->addError(100, "Apellido", "apellido");
        }

        // control Nombre
        if (!Ctrl::esVacio($this->getNombre())) {
            if (Ctrl::esMaxCaracteres(100, $this->getNombre())) {
                $error->addError(505, "Nombre", "nombre");
            }
        } else {
            $error->addError(100, "Nombre", "nombre");
        }

        // control Tipo de Documento
        if (Ctrl::esNull($this->getGralTipoDocumentoId())) {
            $error->addError(100, "Tipo de Documento", "gral_tipo_documento_id");
        }

        if (!Ctrl::esDigito($this->getDocumento())) {
            $error->addError(102, "Documento", "documento");
        } elseif (!Ctrl::esNull($this->getGralEmpresaId()) && Ctrl::esDigito($this->getDocumento())) {
            $arr_cri = array(
                array("campo" => "per_persona.gral_empresa_id", "valor" => $gral_empresa->getId()),
                array("campo" => "gral_tipo_documento_id", "valor" => $this->getGralTipoDocumentoId()),
                array("campo" => "documento", "valor" => $this->getDocumento())
            );

            $o = PerPersona::getOxArray($arr_cri);
            if ($o && $o->getId() != $this->getId()) {
                // se controla que no se el mismo
                $error->addError("Ya vinculado a: " . $o->getLegajo() . " - " . $o->getDescripcion() . " (" . $this->getDocumento() . ") en la empresa " . $gral_empresa->getDescripcion(), "Documento", "documento");
            }
        }

        if (Ctrl::esVacio($this->getCuil())) {
            //$error->addError(102, "Cuil", "cuil");
        }

        if (!Ctrl::esFechaValida($this->getNacimiento())) {
            $error->addError(121, "Nacimiento", "nacimiento");
        }

        if (Ctrl::esNull($this->getGralSexoId())) {
            $error->addError(100, "GralSexo", "gral_sexo_id");
        }

        if (Ctrl::esNull($this->getGeoLocalidadId())) {
            $error->addError(100, "GeoLocalidad", "geo_localidad_id");
        }

        if (Ctrl::esNull($this->getPerTipoEstadoId())) {
            $error->addError("Debe ingresar el tipo de estado de la persona", "PerTipoEstado", "per_tipo_estado_id");
        }

        return $error;
    }

    static function getSesDiasPantallaCantidad() {
        if (trim(Gral::getSes(self::SES_DIAS_PANTALLA_CANTIDAD)) == '') {
            return 10;
        }
        return Gral::getSes(self::SES_DIAS_PANTALLA_CANTIDAD);
    }

    static function setSesDiasPantallaCantidad($v) {
        Gral::setSes(self::SES_DIAS_PANTALLA_CANTIDAD, $v);
    }

    static function getSesFiltroFechaDesde() {
        if (trim(Gral::getSes(self::SES_FILTRO_FECHA_DESDE)) == Date::FECHA_EMPTY) {
            return Date::sumarDias(date('Y-m-d'), -9);
        }
        return Gral::getSes(self::SES_FILTRO_FECHA_DESDE);
    }

    static function setSesFiltroFechaDesde($v) {
        Gral::setSes(self::SES_FILTRO_FECHA_DESDE, $v);
    }

    public function getDescripcion() {
        $nombre_completo = $this->getApellido() . ", " . $this->getNombre();
        return $nombre_completo;
    }

    public function saveDesdeBackend() {

        $this->setApellido(strtoupper($this->getApellido()));
        $this->setNombre(strtoupper($this->getNombre()));
        $this->setDescripcion($this->getApellido() . ', ' . $this->getNombre());
        $this->setFechaAlta('1901-01-01');
        $this->setFechaBaja('1901-01-01');

        if ($this->getId() != '') {
            $per_persona = PerPersona::getOxId($this->getId());
            if ($per_persona) {
                $this->setFechaAlta($per_persona->getFechaAlta());
                $this->setFechaBaja($per_persona->getFechaBaja());
                $this->setPerTipoEstadoId($per_persona->getPerTipoEstadoId());
                $this->setCodigoCredencial($per_persona->getCodigoCredencial());
            }
        }


        parent::saveDesdeBackend();

        // se carga el hash
        $hash = md5($this->getId());
        $this->setHash($hash);
        $this->save();


        // se cambia estado de sincroniacion de la persona

        // se importa la imagen desde clubgestion
        //PrcProceso::importarPersonaImagenesDesdeClubGestionXDocumento($this->getDocumento(), $this->getId());


    }

    /**
     * se reprograma el metodo cambiar estado para contemplar BAJAS
     */
    public function cambiarEstado() {
        parent::cambiarEstado();

        if ($this->getEstado()) {
            // socio HABILITADO
            $tipo_estado_codigo = PerTipoEstado::TIPO_ACTIVO;
            $this->setPerEstadoNuevo($tipo_estado_codigo, true);
        } else {
            // socio BAJA
            $tipo_estado_codigo = PerTipoEstado::TIPO_BAJA;
            $this->setPerEstadoNuevo($tipo_estado_codigo, true);
        }
    }

    /**
     * Metodo que setea el nuevo estado de una persona
     * @param type $tipo_estado_codigo
     * @param type $evitar_duplicidad
     * @return \PerEstado
     */
    public function setPerEstadoNuevo($tipo_estado_codigo, $evitar_duplicidad = false) {
        $per_estado_actual = $this->getPerEstadoActual();

        $inicial = 1;

        $agregar_nuevo_estado = true;
        $per_tipo_estado = PerTipoEstado::getOxCodigo($tipo_estado_codigo);


        if ($evitar_duplicidad) {
            if ($per_estado_actual) {
                if ($per_estado_actual->getPerTipoEstadoId() == $per_tipo_estado->getId()) {
                    $agregar_nuevo_estado = false;
                }
            }
        }

        if ($agregar_nuevo_estado) {
            foreach ($this->getPerEstados() as $o) {
                $o->setActual(0);
                $o->save();

                $inicial = 0;
            }
            $o = new PerEstado();
            $o->setPerPersonaId($this->getId());
            $o->setPerTipoEstadoId($per_tipo_estado->getId());
            $o->setInicial($inicial);
            $o->setActual(1);
            $o->save();

            // se actualiza tambien el estado en SocSocio
            $this->setPerTipoEstadoId($per_tipo_estado->getId());
            $this->save();
        }

        // excepcion de carga de SocTipoEstado para la inicializacion del socio
        if ($this->getPerTipoEstado()->getId() == 'null') {
            $this->setPerTipoEstadoId($per_tipo_estado->getId());
            $this->save();
        }

        return $o;
    }

    /**
     * Metodo que retorna el estado actual de una persona
     * @return boolean
     */
    public function getPerEstadoActual() {
        $c = new Criterio();
        $c->add(PerEstado::GEN_ATTR_PER_PERSONA_ID, $this->getId(), Criterio::IGUAL);
        $c->add(PerEstado::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
        $c->addTabla(PerEstado::GEN_TABLA);
        $c->setCriterios();

        $per_estados = PerEstado::getPerEstados(null, $c);
        //Gral::prr($per_estados);
        foreach ($per_estados as $per_estado) {
            //Gral::prr($soc_estado);
            return $per_estado;
        }
        return false;
    }

    /**
     * Metodo que identifica a una persona por su codigo
     * @param type $codigo
     * @param type $migrar
     * @return boolean
     */
    public function identificarPersonaXCodigo($codigo, $migrar = false) {

        // se recupera primero desde el campo de la persona (codigo principal)
        $per_persona = PerPersona::getOxCodigoCredencial($codigo);
        //Gral::prr($per_persona);

        if (!$per_persona) {
            // si no se encontro se busca en las multicredenciales de la persona
            $per_persona_gral_entorno = PerPersonaGralEntorno::getOxCodigoCredencial($codigo);
            if ($per_persona_gral_entorno) {
                $per_persona = $per_persona_gral_entorno->getPerPersona();
            }
        }

        if (!$per_persona) {
            if ($migrar) {
                //$per_persona = PrcProceso::importarPersonaDesdeClubGestion($codigo);

                if (!$per_persona) {
                    //$per_persona = PrcProceso::importarPersonaDesdeMecano($codigo);
                }
            }
        }
        //Gral::prr($per_persona);
        //exit;

        if (!$per_persona) {
            return false;
        }

        return $per_persona;
    }

    static function calcularCuit($numero_dni, $sexo) {
        $cuit = "";
        $dni = "";

        $dni = $numero_dni;

        if (strtoupper($sexo) == "M") { // cuit masculino
            $dni1 = "20" . $dni;
            $dni2 = "23" . $dni;
        } else {
            $dni1 = "27" . $dni;
            $dni2 = "23" . $dni;
        }

        $dnih = "5432765432";
        $n1 = 0;

        for ($j = 0; $j < 10; $j++) {
            $n1 = $n1 + (substr($dni1, $j, 1) * substr($dnih, $j, 1));
            $n2 = $n2 + (substr($dni2, $j, 1) * substr($dnih, $j, 1));
        }

        $resto1 = $n1 % 11;
        $resto2 = $n2 % 11;
        $ultimo1 = 11 - $resto1;
        $ultimo2 = 11 - $resto2;

        if ($resto1 == "1") {
            //CG::pr("Entro 1. Ultimo2: ".$ultimo2." - Resto2: ".$resto2);
            $cuit = $dni2 . $ultimo2;
        } else {
            if ($resto1 == "0") {
                $cuit = $dni1 . "0";
            } else {
                $cuit = $dni1 . $ultimo1;
            }
        }

        return $cuit;
    }

    public function getPerPersonaDedoPorNroDedo($nro_dedo) {
        $c = new Criterio();
        $c->add(PerPersonaDedo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(PerPersonaDedo::GEN_ATTR_PER_PERSONA_ID, $this->getId(), Criterio::IGUAL);
        $c->add(PerPersonaDedo::GEN_ATTR_DEDO_NUMERO, $nro_dedo, Criterio::IGUAL);
        $c->addTabla(PerPersonaDedo::GEN_TABLA);
        $c->setCriterios();

        $p = new Paginador(1, 1);

        $per_persona_dedos = PerPersonaDedo::getPerPersonaDedos($p, $c);
        foreach ($per_persona_dedos as $per_persona_dedo) {
            return $per_persona_dedo;
        }
        return false;
    }

    /**
     * Metodo que retorna la cantidad de horas trabajadas por una persona en una fecha
     * @param type $fecha
     * @return type
     */
    public function getArrHorasEnFecha($fecha) {
        $arr_horas_trabajadas = array(
            'ESTADO' => 1,
            'EDITADO' => 0,
            'CANTIDAD_HORAS' => 0,
        );
        $c = new Criterio();
        $c->addDistinct(false);

        $c->add('per_mov_movimiento.per_persona_id', $this->getId(), Criterio::IGUAL);
        $c->add('per_mov_movimiento.fechahora::DATE', $fecha, Criterio::IGUAL);
        $c->add('per_mov_movimiento.fechahora::DATE', $fecha, Criterio::IGUAL);
        $c->add(PerMovMovimiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add('per_mov_tipo_movimiento.codigo', PerMovTipoMovimiento::TIPO_ENTRADA, Criterio::IGUAL); // solo ENTRADA
        $c->addTabla('per_mov_movimiento');
        $c->addRealJoin('per_persona', 'per_persona.id', 'per_mov_movimiento.per_persona_id');
        $c->addRealJoin('per_mov_tipo_movimiento', 'per_mov_tipo_movimiento.id', 'per_mov_movimiento.per_mov_tipo_movimiento_id');
        $c->addOrden('per_persona.descripcion', 'asc');
        $c->addOrden('per_mov_movimiento.fechahora', 'asc');
        $c->setCriterios();
        $per_mov_movimientos = PerMovMovimiento::getPerMovMovimientos(null, $c);
        //Gral::prr($per_mov_movimientos);
        //exit;

        if (count($per_mov_movimientos) > 0) {
            $recordset = PerMovMovimiento::getGrillaHorariosParaRepDiario($per_mov_movimientos);
            //Gral::prr($recordset);
            //exit;

            $arr_grilla_persona_en_fecha = $recordset[$this->getId()][Gral::getFechaToWeb($fecha)];
            //Gral::prr($arr_grilla_persona_en_fecha);
            //exit;

            $editado = 0;
            $periodo_truncado = 0;
            $cont_par = 0;
            foreach ($arr_grilla_persona_en_fecha as $i_par => $fila_par) {
                $cont_par++;
                $editado = $fila_par['EDITADO'];
                $arr_horas = $fila_par['TIEMPO'];
                $cantidad_horas+= $arr_horas['horas_real'];

                if ($arr_horas['periodo_truncado'] == 1) {
                    $periodo_truncado = 1;
                }
            }

            // -----------------------------------------------------------------
            // Cantidad de Horas por Dia (Dias Habiles)
            // -----------------------------------------------------------------
            $cantidad_horas_minimas_alerta = 7;
            $cantidad_horas_maximas_alerta = 10;

            if (date('w', strtotime($fecha)) == 6) { // SABADO
                // -----------------------------------------------------------------
                // Cantidad de Horas por Dia (Sabados)
                // -----------------------------------------------------------------
                $cantidad_horas_minimas_alerta = 4;
                $cantidad_horas_maximas_alerta = 6;
            }

            if ($periodo_truncado != 1) {


                if ($cantidad_horas > $cantidad_horas_maximas_alerta) {
                    // si trabajo mas de 10 horas en el dia
                    $arr_horas_trabajadas = array(
                        'ESTADO' => 1,
                        'EDITADO' => $editado,
                        'CANTIDAD_HORAS' => $cantidad_horas,
                        'PERIODOS' => $cont_par,
                        'MENSAJE' => $cantidad_horas . ' horas trabajadas el ' . Gral::getFechaToWeb($fecha) . ' en ' . $cont_par . ' periodos',
                        'ERROR' => 150,
                    );
                } elseif ($cantidad_horas < $cantidad_horas_minimas_alerta) {
                    // si trabajo menos de 6 horas en el dia
                    $arr_horas_trabajadas = array(
                        'ESTADO' => 1,
                        'EDITADO' => $editado,
                        'CANTIDAD_HORAS' => $cantidad_horas,
                        'PERIODOS' => $cont_par,
                        'MENSAJE' => $cantidad_horas . ' horas trabajadas el ' . Gral::getFechaToWeb($fecha) . ' en ' . $cont_par . ' periodos',
                        'ERROR' => 152,
                    );
                } else {
                    // si trabajo entre 6 y 10 horas
                    $arr_horas_trabajadas = array(
                        'ESTADO' => 1,
                        'EDITADO' => $editado,
                        'CANTIDAD_HORAS' => $cantidad_horas,
                        'PERIODOS' => $cont_par,
                        'MENSAJE' => $cantidad_horas . ' horas trabajadas el ' . Gral::getFechaToWeb($fecha) . ' en ' . $cont_par . ' periodos',
                    );
                }
            } else {
                $arr_horas_trabajadas = array(
                    'ESTADO' => 0,
                    'EDITADO' => $editado,
                    'CANTIDAD_HORAS' => $cantidad_horas,
                    'PERIODOS' => $cont_par,
                    'MENSAJE' => 'No se detectó salida para el ' . Gral::getFechaToWeb($fecha),
                    'ERROR' => 100,
                );
            }
        } else {
            $arr_horas_trabajadas = array(
                'ESTADO' => 1,
                'EDITADO' => 0,
                'CANTIDAD_HORAS' => $cantidad_horas,
                'MENSAJE' => 'No se registraron movimientos para el ' . Gral::getFechaToWeb($fecha),
            );
        }

        return $arr_horas_trabajadas;
    }

    static function getPerPersonasCmbOrdenadas($estado = true, $filtrados = false) {
        $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
        $criterio = new Criterio();

        if ($estado) {
            $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        }
        $criterio->addTabla(self::GEN_TABLA);

        $criterio->addOrden('descripcion', 'asc');
        $criterio->setCriterios();

        if ($filtrados) {
            //$col = PerPersona::getPerPersonasFiltrados($paginador, $criterio);
            $col = PerPersona::getPerPersonas($paginador, $criterio);
        } else {
            $col = PerPersona::getPerPersonas($paginador, $criterio);
        }

        $cont = 0;
        $arr = array();
        foreach ($col as $o) {
            $cont++;
            $arr[$cont]['cod'] = $o->getId();
            $arr[$cont]['descripcion'] = $o->getDescripcion();
        }
        return $arr;
    }

    static function getInfoBtnVolver($indice = false) {
        $array = array(
            'url' => 'per_persona_gestion.php',
            'label' => 'Volver a Personas',
        );

        return ($indice) ? $array[$indice] : $array;
    }

    public function getPerMovMovimientosEnFecha($fecha, $tipo_movimiento_codigo = false, $orden = "ASC") {
        $c = new Criterio();
        $c->add(PerMovMovimiento::GEN_ATTR_PER_PERSONA_ID, $this->getId(), Criterio::IGUAL);
        if (!$condicion_fecha) {
            $condicion_fecha = Criterio::IGUAL;
        }

        $c->add('per_mov_movimiento.fechahora::DATE', $fecha, Criterio::IGUAL);

        if ($tipo_movimiento_codigo) {
            $c->add(PerMovTipoMovimiento::GEN_ATTR_CODIGO, $tipo_movimiento_codigo, Criterio::IGUAL);
        }
        $c->addTabla(PerMovMovimiento::GEN_TABLA);
        $c->addRealJoin(PerMovTipoMovimiento::GEN_TABLA, PerMovTipoMovimiento::GEN_ATTR_ID, PerMovMovimiento::GEN_ATTR_PER_MOV_TIPO_MOVIMIENTO_ID);
        $c->addOrden(PerMovMovimiento::GEN_ATTR_FECHAHORA, $orden);
        $c->add(PerMovMovimiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL); //
        $c->setCriterios();
        $per_mov_movimientos = PerMovMovimiento::getPerMovMovimientos(null, $c);
        return $per_mov_movimientos;
    }
    
    
    public function setAsignarSucursal($gral_sucursal) {
        
        // FALTA TERMINAR ***************************
        
        // ---------------------------------------------------------------------
        // vincular la sucursal a la persona
        // ---------------------------------------------------------------------
        $this->setGralSucursalId($gral_sucursal->getId());
        $this->save();
        
        // ---------------------------------------------------------------------
        // registrar el historial de sucursales donde esta la persona
        // ---------------------------------------------------------------------
        $per_persona_gral_sucursal = new PerPersonaGralSucursal();
        $per_persona_gral_sucursal->setPerPersonaId($this->getId());
        $per_persona_gral_sucursal->setGralSucursalId($gral_sucursal->getId());
        $per_persona_gral_sucursal->setEstado(1);
        $per_persona_gral_sucursal->save();
        
        // ---------------------------------------------------------------------
        // reasignar sucursal al vendedor vinculado a la persona
        // ---------------------------------------------------------------------
        //$vta_vendedor = $per_persona->getVtaVendedor();
        $us_usuario = $this->getUsUsuarioXPerPersonaUsUsuario();
        if($us_usuario){
            $vta_vendedor = $us_usuario->getVtaVendedor();
            if($vta_vendedor){
                $vta_vendedor->setGralSucursalId($gral_sucursal->getId());
                $vta_vendedor->save();
                
                $vta_vendedor->setAsignarSucursal();
            }
        }
        
    }    

}

?>
