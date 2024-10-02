<?php

require_once "base/BOsOrdenServicio.php";

class OsOrdenServicio extends BOsOrdenServicio {

    const DIAS_PARA_DESCARGO = 5;
    const DIAS_PARA_RESOLUCION = 30;
    const PREFIJO = "OS-";

    /**
     * 
     * @return type
     * @creado_por Esteban Martinez
     * @creado 15/11/2016
     */
    public function getDescripcion() {
        return $this->getCodigo();
    }

    /**
     * Metodo que registra un nuevo estado
     * @param string $tipo_estado_codigo
     * @param string $observacion
     * @param string $fecha
     * @return object
     * @author Esteban Martinez, Pablo Rosen
     * @fecha 08/10/2016
     * @modificado_por Esteban Martinez
     * @modificado 19/10/2016
     * @modificado 12/11/2016
     * @modificado 14/11/2016
     */
    public function setOsEstado($tipo_estado_codigo, $observacion = "", $fecha = "") {
        if (empty($fecha)) {
            $fecha = Date::getFechaActual();
        }

        $inicial = 1;
        foreach ($this->getOsEstados() as $os_estado) {
            $os_estado->setActual(0);
            $os_estado->save();

            $inicial = 0;
        }

        $os_tipo_estado = OsTipoEstado::getOxCodigo($tipo_estado_codigo);

        // se crea un nuevo estado
        $os_estado = new OsEstado();
        $os_estado->setOsOrdenServicioId($this->getId());
        $os_estado->setOsTipoEstadoId($os_tipo_estado->getId());
        $os_estado->setObservacion($observacion);
        $os_estado->setFecha($fecha);
        $os_estado->setActual(1);
        $os_estado->save();

        //Si cambio a notificado setear la fecha de limite para descargo.
        if ($os_tipo_estado->getCodigo() == OsTipoEstado::TIPO_NOTIFICADO) {

            $this->setFechaNotificacion($os_estado->getFecha());

            $fecha_limite_descargo = Date::sumarDias($os_estado->getFecha(), $this->getDiasParaDescargo());
            //$fecha_limite_descargo = $this->getCalcularFechaLimiteDescargo();//Date::sumarDias($this->getFecha(), $this->getDiasParaDescargo());
            $this->setFechaLimiteDescargo($fecha_limite_descargo);
        }


        //descargo realizado
        if ($os_tipo_estado->getCodigo() == OsTipoEstado::TIPO_DESCARGO_REALIZADO) {
            $this->setFechaDescargo($fecha);
        }


        //resolucion
        if ($os_tipo_estado->getCodigo() == OsTipoEstado::TIPO_RESUELTO) {
            $this->setFechaResolucion($this->getOsResolucion()->getFecha());
        }


        $this->setOsTipoEstadoId($os_tipo_estado->getId());


        $this->save();

        return $os_estado;
    }

    /**
     * Metodo que retorna el estado actual
     * @return boolean o object $os_estado
     * @author Esteban Martinez, Pablo Rosen
     * @fecha 08/10/2016
     */
    public function getOsEstadoActual() {
        $c = new Criterio();
        $c->add(OsEstado::GEN_ATTR_OS_ORDEN_SERVICIO_ID, $this->getId(), Criterio::IGUAL);
        $c->add(OsEstado::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
        $c->addTabla(RclEstado::GEN_TABLA);
        $c->setCriterios();

        $os_estados = OsEstado::getOsEstados(null, $c);
        foreach ($os_estados as $os_estado) {
            return $os_estado;
        }

        return false;
    }

    /**
     * Metodo que retorna el estado de acuerdo a un codigo de tipo de estado indicado
     * @param type $valor
     * @return boolean
     * @author Esteban Martinez, Pablo Rosen
     * @fecha 08/10/2016
     */
    public function getOsEstadoXCodigoDeOsTipoEstado($valor) {
        $c = new Criterio();
        $c->add(OsEstado::GEN_ATTR_OS_ORDEN_SERVICIO_ID, $this->getId(), Criterio::IGUAL);
        $c->add(OsTipoEstado::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
        $c->addTabla(OsEstado::GEN_TABLA);
        $c->addRealJoin(OsTipoEstado::GEN_TABLA, OsTipoEstado::GEN_ATTR_ID, OsEstado::GEN_ATTR_OS_TIPO_ESTADO_ID);
        $c->setCriterios();

        $os_estados = OsEstado::getOsEstados(null, $c);
        foreach ($os_estados as $os_estado) {
            return $os_estado;
        }
        return false;
    }

    /**
     * 
     * @return \OsOrdenServicio
     * @author Esteban Martinez, Pablo Rosen
     * @fecha 08/10/2016
     * @modificado_por Esteban Martinez
     * @modificado 19/10/2016
     * @modificado 26/10/2016
     */
    public function setInicializarOsOrdenServicio() {

        $this->setEstado(1);
        $this->setFechaResolucion("1900-01-01");
        $this->setFechaLimiteDescargo("1900-01-01");

        $this->setFechaNotificacion("1900-01-01");
        $this->setFechaDescargo("1900-01-01");
        $this->setFechaNotificadoSinDescargo("1900-01-01");

        //Se comenta porque esta fecha se debe calcular al momento de cambiar el estado de 'Generada' a 'Notificada'
        //$fecha_limite_descargo = $this->getCalcularFechaLimiteDescargo();//Date::sumarDias($this->getFecha(), $this->getDiasParaDescargo());
        //$this->setFechaLimiteDescargo($fecha_limite_descargo);

        $this->setFechaLimiteResolucion($this->getCalcularFechaLimiteResolucion());
        //$fecha_limite_resolucion = Date::sumarDias($this->getFechaHecho(), OsOrdenServicio::DIAS_PARA_RESOLUCION);
        //$this->setFechaLimiteResolucion($fecha_limite_resolucion);

        $this->save();


        // generar codigo del reclamo
        $ceros = str_pad($this->getId(), 6, "0", STR_PAD_LEFT);
        $codigo = self::PREFIJO . $ceros;
        //$codigo = self::PREFIJO.$this->getId();
        $this->setCodigo($codigo);

        $this->save();

        // se registra el cambio de estado
        $tipo_estado_codigo = OsTipoEstado::TIPO_GENERADO;
        $this->setOsEstado($tipo_estado_codigo);

        return $this;
    }

    /**
     * @author Esteban Martinez, Pablo Rosen
     * @fecha 08/10/2016
     * @modificado_por Esteban Martinez
     * @modificado 26/10/2016
     */
    public function setModificarOsOrdenServicio() {
        $fecha_limite_resolucion = $this->getCalcularFechaLimiteResolucion();
        $this->setFechaLimiteResolucion($fecha_limite_resolucion);
        //Gral::pr("Fecha Limite Resolucion: ".$this->getFechaLimiteResolucion());exit;
        $this->save();

        return $this;
    }

    /**
     * Retorna la fecha en la que vence una OS
     * @return string $fecha_limite_descargo La fecha en la cual vence la OS
     * @author Esteban Martinez
     * @creado 12/10/2016
     * @modificado_por Esteban Martinez
     * @modificado 19/10/2016
     */
    public function getCalcularFechaLimiteDescargo() {
        $fecha_limite_descargo = Date::sumarDias($this->getFecha(), $this->getDiasParaDescargo());
        return $fecha_limite_descargo;
    }

    /**
     * Retorna una fecha limite para la resolucion de una OS. <br/>
     * Esta fecha de limite se suma a partir de la fecha la 'Fecha Hecho'. 
     * @return string $fecha_limite_resolucion
     * @author Esteban Martinez
     * @creado 19/10/2016
     */
    public function getCalcularFechaLimiteResolucion() {
        $fecha_limite_resolucion = Date::sumarDias($this->getFechaHecho(), self::DIAS_PARA_RESOLUCION);
        return $fecha_limite_resolucion;
    }

    /**
     * Calcula los dias restantes para el limite de resolucion.
     * @return int $dias_restantes Los dias restantes para el limite de resolucion
     * @creado_por Esteban Martinez
     * @creado 26/10/2016
     */
    public function getCalcularDiasRestantesParaFechaLimiteResolucion() {
        $fecha_actual = Date::getFechaActual();
        $fecha_limite_resolucion = Date::getFechaVisual($this->getFechaLimiteResolucion());

        /* Gral::pr("-----");
          Gral::pr("Fecha Actual: ".$fecha_actual);
          Gral::pr("Fecha Limite: ".$fecha_limite_resolucion);
          Gral::pr("-----"); */

        $dias_restantes = Date::getDiferenciaTiempo("d", $fecha_actual, $fecha_limite_resolucion);
        //Gral::pr("Dias Restantes: ".$dias_restantes);
        return $dias_restantes;
    }

    /**
     * Retorna un texto en la forma 'Faltan 23 dias', 'Falta 1 dia', 'Han pasado 4 dias'
     * @return string $texto_completo_dias_faltantes El texto
     * @creado_por Esteban Martinez
     * @creado 26/10/2016
     * @modificado_por Esteban Martinez
     * @modificado 15/11/2016
     */
    public function getDiasRestantesEnTextoParaFechaLimiteResolucion() {
        $texto_dia = "";
        $texto_faltan = "";
        $texto_completo_dias_restantes = "";

        $arr_resultado = array();

        if ($this->getFechaLimiteResolucion()) {
            $dias_para_resolucion = $this->getCalcularDiasRestantesParaFechaLimiteResolucion();

            if ($dias_para_resolucion > 1) {
                $texto_faltan = Lang::_lang("faltan", true);
                $texto_dia = Lang::_lang("dias", true);
            } elseif ($dias_para_resolucion == 1) {
                $texto_faltan = Lang::_lang("falta", true);
                $texto_dia = Lang::_lang("dia", true);
            } elseif ($dias_para_resolucion < 1) {
                $dias_para_resolucion = $dias_para_resolucion;
                //$dias_para_resolucion = $dias_para_resolucion * -1;
                //$texto_faltan = "Han pasado";
                //$texto_dia    = "dias";
                ($dias_para_resolucion > 1) ? $texto_dia = Lang::_lang("dias", true) : $texto_dia = Lang::_lang("dia", true);
                ($dias_para_resolucion > 1) ? $texto_faltan = Lang::_lang("Han pasado", true) : $texto_faltan = Lang::_lang("Ha pasado", true);
            }


            if ($dias_para_resolucion == 0) {
                $texto_completo_dias_restantes = "Plazo Cumplido";
            } elseif ($dias_para_resolucion < 0) {
                $dias_para_resolucion = $dias_para_resolucion * -1;
                $texto_completo_dias_restantes = "Retrasado " . $dias_para_resolucion . " dias";
            } else {
                $texto_completo_dias_restantes = $texto_faltan . " " . $dias_para_resolucion . " " . $texto_dia;
            }

            //$texto_completo_dias_restantes = $texto_faltan." ".$dias_para_resolucion." ".$texto_dia;
        }//del if($this->getFechaLimiteResolucion())
        //return $arr_resultado;
        return $texto_completo_dias_restantes;
    }

    /**
     * Retorna el nombre del css que se aplica para cada caso de los dias restantes.
     * @return string $css_a_usar El css que se utiliza para el caso
     * @creado_por Esteban Martinez
     * @creado 28/10/2016
     */
    public function getCssDiasRestantesParaFechaLimiteResolucion() {
        $dias_para_resolucion = $this->getCalcularDiasRestantesParaFechaLimiteResolucion();

        if ($dias_para_resolucion > 7) {
            $css_a_usar = "tiempo_ok";
        } elseif ($dias_para_resolucion >= 1 && $dias_para_resolucion <= 7) {
            $css_a_usar = "tiempo_limite";
        } elseif ($dias_para_resolucion < 1) {
            $css_a_usar = "tiempo_vencido";
        }

        return $css_a_usar;
    }

    /**
     * Retorna un array con el texto en dias y el css a aplicar segun el caso.
     * @return array
     * @creado_por Esteban Martinez
     * @creado 28/10/2016
     */
    public function getArrDiasRestantes() {
        $texto_completo_dias_restantes = $this->getDiasRestantesEnTextoParaFechaLimiteResolucion();
        $ccc_a_usar = $this->getCssDiasRestantesParaFechaLimiteResolucion();

        $arr_resultado["dias_restantes_en_texto"] = $texto_completo_dias_restantes;
        $arr_resultado["css_a_usar"] = $ccc_a_usar;

        return $arr_resultado;
    }

    /**
     * Save de la Os Resolucion
     * @param string $fecha_resolucion La fecha de la resolucion
     * @param int $tipo_resolucion_id El Id de tipo de resolucion
     * @param string $observacion observacion de la resolucion
     * @param int $dias_suspension Opcional
     * @param string $fecha_inicio Opcional
     * @return \OsOrdenServicio
     * @creado_por Esteban Martinez
     * @creado 08/11/2016
     * @modificado_por Esteban Martinez
     * @modificado 09/11/2016
     * @modificado 10/11/2016
     * @modificado 12/11/2016
     */
    public function setInicializarOsResolucion($os_resolucion_id, $fecha_resolucion, $tipo_resolucion_id, $nota_publica, $observacion, $dias_suspension = "", $fecha_inicio = "", $afecta_haberes = 0) {
        
        //resolucion        
        $os_resolucion = OsResolucion::getOxId($os_resolucion_id);
        if($os_resolucion){
            $os_resolucion_suspension = $os_resolucion->getOsResolucionSuspension();
        }else{
            $os_resolucion = new OsResolucion();        
        }

        //tipo resolucion
        $os_tipo_resolucion = OsTipoResolucion::getOxId($tipo_resolucion_id);
        $os_tipo_resolucion_codigo = $os_tipo_resolucion->getCodigo();


        $os_resolucion->setOsOrdenServicioId($this->getId());
        $os_resolucion->setOsTipoResolucionId($tipo_resolucion_id);
        $os_resolucion->setFecha($fecha_resolucion);
        $os_resolucion->setNotaPublica($nota_publica);
        $os_resolucion->setObservacion($observacion);

        $os_resolucion->save();

        //Si es SUSPENSION
        if ($os_tipo_resolucion_codigo === OsTipoResolucion::TIPO_SUSPENSION) {
            
            if(!$os_resolucion_suspension){
                $os_resolucion_suspension = new OsResolucionSuspension();
            }

            //calcular fecha fin y fecha reintegro
            $fecha_fin = Date::sumarDias($fecha_inicio, ($dias_suspension - 1));
            $fecha_reintegro = Date::sumarDias($fecha_fin, 1);

            $os_resolucion_suspension->setOsResolucionId($os_resolucion->getId());
            $os_resolucion_suspension->setDiasSuspension($dias_suspension);
            $os_resolucion_suspension->setFechaInicio($fecha_inicio);
            $os_resolucion_suspension->setFechaFin($fecha_fin);
            $os_resolucion_suspension->setFechaReintegro($fecha_reintegro);
            $os_resolucion_suspension->setAfectaHaberes($afecta_haberes);
            $os_resolucion_suspension->setNotaPublica($nota_publica);
            $os_resolucion_suspension->setObservacion($observacion);
            $os_resolucion_suspension->save();
        }

        $tipo_estado_codigo = OsTipoEstado::TIPO_RESUELTO;
        $this->setOsEstado($tipo_estado_codigo, $os_tipo_resolucion->getDescripcion().': '.$observacion);

        return $this;
    }

    public function getFueNotificada() {
        if ($this->getFechaNotificacion() != '1900-01-01') {
            return true;
        }
        return false;
    }

    public function getFueDescargada() {
        if ($this->getFechaDescargo() != '1900-01-01') {
            return true;
        }
        return false;
    }

    public function getFueNotificadaSinDescargo() {
        if ($this->getFechaNotificadaSinDescargo() != '1900-01-01') {
            return true;
        }
        return false;
    }

    public function getFueResuelta() {
        if ($this->getFechaResolucion() != '1900-01-01') {
            return true;
        }
        return false;
    }

    /* Método getInfoBtnVolver */
    static function getInfoBtnVolver($indice = false) {
        $array = array(
            'url' => 'os_orden_servicio_gestion.php',
            'label' => 'Volver al Listado',
        );

        return ($indice) ? $array[$indice] : $array;
    }

}

?>