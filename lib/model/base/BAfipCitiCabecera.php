<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BAfipCitiCabecera
{ 
	
	const SES_PAGINACION = 'adm_afipciticabecera_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_afipciticabecera_paginas_registros';
	const SES_CRITERIOS = 'adm_afipciticabecera_criterios';
	
	const GEN_CLASE = 'AfipCitiCabecera';
	const GEN_TABLA = 'afip_citi_cabecera';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BAfipCitiCabecera */ 
	const GEN_ATTR_ID = 'afip_citi_cabecera.id';
	const GEN_ATTR_DESCRIPCION = 'afip_citi_cabecera.descripcion';
	const GEN_ATTR_CODIGO = 'afip_citi_cabecera.codigo';
	const GEN_ATTR_AFIP_CITI_PRC_ID = 'afip_citi_cabecera.afip_citi_prc_id';
	const GEN_ATTR_INICIAL = 'afip_citi_cabecera.inicial';
	const GEN_ATTR_ACTUAL = 'afip_citi_cabecera.actual';
	const GEN_ATTR_AFIP_CITI_CUIT_INFORMANTE = 'afip_citi_cabecera.afip_citi_cuit_informante';
	const GEN_ATTR_AFIP_CITI_PERIODO = 'afip_citi_cabecera.afip_citi_periodo';
	const GEN_ATTR_AFIP_CITI_SECUENCIA = 'afip_citi_cabecera.afip_citi_secuencia';
	const GEN_ATTR_AFIP_CITI_SIN_MOVIMIENTO = 'afip_citi_cabecera.afip_citi_sin_movimiento';
	const GEN_ATTR_AFIP_CITI_PRORRATEAR_CF_COMPUTABLE = 'afip_citi_cabecera.afip_citi_prorratear_cf_computable';
	const GEN_ATTR_AFIP_CITI_CF_COMPUTABLE_O_COMPROBANTE = 'afip_citi_cabecera.afip_citi_cf_computable_o_comprobante';
	const GEN_ATTR_AFIP_CITI_IMPORTE_CF_COMPUTABLE_GLOBAL = 'afip_citi_cabecera.afip_citi_importe_cf_computable_global';
	const GEN_ATTR_AFIP_CITI_IMPORTE_CF_COMPUTABLE_ASIGNACION_DIRECTA = 'afip_citi_cabecera.afip_citi_importe_cf_computable_asignacion_directa';
	const GEN_ATTR_AFIP_CITI_IMPORTE_CF_COMPUTABLE_PRORRATEO = 'afip_citi_cabecera.afip_citi_importe_cf_computable_prorrateo';
	const GEN_ATTR_AFIP_CITI_IMPORTE_CF_NO_COMPUTABLE_GLOBAL = 'afip_citi_cabecera.afip_citi_importe_cf_no_computable_global';
	const GEN_ATTR_AFIP_CITI_IMPORTE_CF_CONTRIBUYENTE_SS_Y_OC = 'afip_citi_cabecera.afip_citi_importe_cf_contribuyente_ss_y_oc';
	const GEN_ATTR_AFIP_CITI_IMPORTE_CF_COMPUTABLE_SS_Y_OC = 'afip_citi_cabecera.afip_citi_importe_cf_computable_ss_y_oc';
	const GEN_ATTR_OBSERVACION = 'afip_citi_cabecera.observacion';
	const GEN_ATTR_ORDEN = 'afip_citi_cabecera.orden';
	const GEN_ATTR_ESTADO = 'afip_citi_cabecera.estado';
	const GEN_ATTR_CREADO = 'afip_citi_cabecera.creado';
	const GEN_ATTR_CREADO_POR = 'afip_citi_cabecera.creado_por';
	const GEN_ATTR_MODIFICADO = 'afip_citi_cabecera.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'afip_citi_cabecera.modificado_por';

	/* Constantes de Atributos Min de BAfipCitiCabecera */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_AFIP_CITI_PRC_ID = 'afip_citi_prc_id';
	const GEN_ATTR_MIN_INICIAL = 'inicial';
	const GEN_ATTR_MIN_ACTUAL = 'actual';
	const GEN_ATTR_MIN_AFIP_CITI_CUIT_INFORMANTE = 'afip_citi_cuit_informante';
	const GEN_ATTR_MIN_AFIP_CITI_PERIODO = 'afip_citi_periodo';
	const GEN_ATTR_MIN_AFIP_CITI_SECUENCIA = 'afip_citi_secuencia';
	const GEN_ATTR_MIN_AFIP_CITI_SIN_MOVIMIENTO = 'afip_citi_sin_movimiento';
	const GEN_ATTR_MIN_AFIP_CITI_PRORRATEAR_CF_COMPUTABLE = 'afip_citi_prorratear_cf_computable';
	const GEN_ATTR_MIN_AFIP_CITI_CF_COMPUTABLE_O_COMPROBANTE = 'afip_citi_cf_computable_o_comprobante';
	const GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE_GLOBAL = 'afip_citi_importe_cf_computable_global';
	const GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE_ASIGNACION_DIRECTA = 'afip_citi_importe_cf_computable_asignacion_directa';
	const GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE_PRORRATEO = 'afip_citi_importe_cf_computable_prorrateo';
	const GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_NO_COMPUTABLE_GLOBAL = 'afip_citi_importe_cf_no_computable_global';
	const GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_CONTRIBUYENTE_SS_Y_OC = 'afip_citi_importe_cf_contribuyente_ss_y_oc';
	const GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE_SS_Y_OC = 'afip_citi_importe_cf_computable_ss_y_oc';
	const GEN_ATTR_MIN_OBSERVACION = 'observacion';
	const GEN_ATTR_MIN_ORDEN = 'orden';
	const GEN_ATTR_MIN_ESTADO = 'estado';
	const GEN_ATTR_MIN_CREADO = 'creado';
	const GEN_ATTR_MIN_CREADO_POR = 'creado_por';
	const GEN_ATTR_MIN_MODIFICADO = 'modificado';
	const GEN_ATTR_MIN_MODIFICADO_POR = 'modificado_por';
	
		
	private $error;
	
	/* Seteo y Geteo de Pagina Actual */
	static function getSesPag(){
            if(trim(Gral::getSes(self::SES_PAGINACION)) == '') return 1;
            return Gral::getSes(self::SES_PAGINACION);
	}
	static function setSesPag($v){ Gral::setSes(self::SES_PAGINACION, $v); }

	/* Seteo y Geteo de Cantidad de Registros por Pagina */
	static function getSesPagCantidad(){
            if(trim(Gral::getSes(self::SES_PAGINACION_REGISTROS)) == '') return 10;
            return Gral::getSes(self::SES_PAGINACION_REGISTROS);
	}
	static function setSesPagCantidad($v){ Gral::setSes(self::SES_PAGINACION_REGISTROS, $v); }
		
	public function getError(){ return $this->error; }
	

	/* Atributos de BAfipCitiCabecera */ 
	private $id;
	private $descripcion;
	private $codigo;
	private $afip_citi_prc_id;
	private $inicial;
	private $actual;
	private $afip_citi_cuit_informante;
	private $afip_citi_periodo;
	private $afip_citi_secuencia;
	private $afip_citi_sin_movimiento;
	private $afip_citi_prorratear_cf_computable;
	private $afip_citi_cf_computable_o_comprobante;
	private $afip_citi_importe_cf_computable_global;
	private $afip_citi_importe_cf_computable_asignacion_directa;
	private $afip_citi_importe_cf_computable_prorrateo;
	private $afip_citi_importe_cf_no_computable_global;
	private $afip_citi_importe_cf_contribuyente_ss_y_oc;
	private $afip_citi_importe_cf_computable_ss_y_oc;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BAfipCitiCabecera */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getAfipCitiPrcId(){ if(isset($this->afip_citi_prc_id)){ return $this->afip_citi_prc_id; }else{ return 'null'; } }
	public function getInicial(){ if(isset($this->inicial)){ return $this->inicial; }else{ return 0; } }
	public function getActual(){ if(isset($this->actual)){ return $this->actual; }else{ return 0; } }
	public function getAfipCitiCuitInformante(){ if(isset($this->afip_citi_cuit_informante)){ return $this->afip_citi_cuit_informante; }else{ return ''; } }
	public function getAfipCitiPeriodo(){ if(isset($this->afip_citi_periodo)){ return $this->afip_citi_periodo; }else{ return ''; } }
	public function getAfipCitiSecuencia(){ if(isset($this->afip_citi_secuencia)){ return $this->afip_citi_secuencia; }else{ return ''; } }
	public function getAfipCitiSinMovimiento(){ if(isset($this->afip_citi_sin_movimiento)){ return $this->afip_citi_sin_movimiento; }else{ return ''; } }
	public function getAfipCitiProrratearCfComputable(){ if(isset($this->afip_citi_prorratear_cf_computable)){ return $this->afip_citi_prorratear_cf_computable; }else{ return ''; } }
	public function getAfipCitiCfComputableOComprobante(){ if(isset($this->afip_citi_cf_computable_o_comprobante)){ return $this->afip_citi_cf_computable_o_comprobante; }else{ return ''; } }
	public function getAfipCitiImporteCfComputableGlobal(){ if(isset($this->afip_citi_importe_cf_computable_global)){ return $this->afip_citi_importe_cf_computable_global; }else{ return ''; } }
	public function getAfipCitiImporteCfComputableAsignacionDirecta(){ if(isset($this->afip_citi_importe_cf_computable_asignacion_directa)){ return $this->afip_citi_importe_cf_computable_asignacion_directa; }else{ return ''; } }
	public function getAfipCitiImporteCfComputableProrrateo(){ if(isset($this->afip_citi_importe_cf_computable_prorrateo)){ return $this->afip_citi_importe_cf_computable_prorrateo; }else{ return ''; } }
	public function getAfipCitiImporteCfNoComputableGlobal(){ if(isset($this->afip_citi_importe_cf_no_computable_global)){ return $this->afip_citi_importe_cf_no_computable_global; }else{ return ''; } }
	public function getAfipCitiImporteCfContribuyenteSsYOc(){ if(isset($this->afip_citi_importe_cf_contribuyente_ss_y_oc)){ return $this->afip_citi_importe_cf_contribuyente_ss_y_oc; }else{ return ''; } }
	public function getAfipCitiImporteCfComputableSsYOc(){ if(isset($this->afip_citi_importe_cf_computable_ss_y_oc)){ return $this->afip_citi_importe_cf_computable_ss_y_oc; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 'null'; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 'null'; } }

	/* Setters de BAfipCitiCabecera */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_AFIP_CITI_PRC_ID."
				, ".self::GEN_ATTR_INICIAL."
				, ".self::GEN_ATTR_ACTUAL."
				, ".self::GEN_ATTR_AFIP_CITI_CUIT_INFORMANTE."
				, ".self::GEN_ATTR_AFIP_CITI_PERIODO."
				, ".self::GEN_ATTR_AFIP_CITI_SECUENCIA."
				, ".self::GEN_ATTR_AFIP_CITI_SIN_MOVIMIENTO."
				, ".self::GEN_ATTR_AFIP_CITI_PRORRATEAR_CF_COMPUTABLE."
				, ".self::GEN_ATTR_AFIP_CITI_CF_COMPUTABLE_O_COMPROBANTE."
				, ".self::GEN_ATTR_AFIP_CITI_IMPORTE_CF_COMPUTABLE_GLOBAL."
				, ".self::GEN_ATTR_AFIP_CITI_IMPORTE_CF_COMPUTABLE_ASIGNACION_DIRECTA."
				, ".self::GEN_ATTR_AFIP_CITI_IMPORTE_CF_COMPUTABLE_PRORRATEO."
				, ".self::GEN_ATTR_AFIP_CITI_IMPORTE_CF_NO_COMPUTABLE_GLOBAL."
				, ".self::GEN_ATTR_AFIP_CITI_IMPORTE_CF_CONTRIBUYENTE_SS_Y_OC."
				, ".self::GEN_ATTR_AFIP_CITI_IMPORTE_CF_COMPUTABLE_SS_Y_OC."
				, ".self::GEN_ATTR_OBSERVACION."
				, ".self::GEN_ATTR_ORDEN."
				, ".self::GEN_ATTR_ESTADO."
				, ".self::GEN_ATTR_CREADO."
				, ".self::GEN_ATTR_CREADO_POR."
				, ".self::GEN_ATTR_MODIFICADO."
				, ".self::GEN_ATTR_MODIFICADO_POR."
			 FROM ".self::GEN_TABLA."
			 WHERE ". self::GEN_ATTR_ID." = ".$this->getId();

                $cons = new Consulta();
                $cons->setSQL($sql);
                $cons->execute();

                while($fila = pg_fetch_array($cons->getResultado())){
                    				$this->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setAfipCitiPrcId($fila[self::GEN_ATTR_MIN_AFIP_CITI_PRC_ID]);
				$this->setInicial($fila[self::GEN_ATTR_MIN_INICIAL]);
				$this->setActual($fila[self::GEN_ATTR_MIN_ACTUAL]);
				$this->setAfipCitiCuitInformante($fila[self::GEN_ATTR_MIN_AFIP_CITI_CUIT_INFORMANTE]);
				$this->setAfipCitiPeriodo($fila[self::GEN_ATTR_MIN_AFIP_CITI_PERIODO]);
				$this->setAfipCitiSecuencia($fila[self::GEN_ATTR_MIN_AFIP_CITI_SECUENCIA]);
				$this->setAfipCitiSinMovimiento($fila[self::GEN_ATTR_MIN_AFIP_CITI_SIN_MOVIMIENTO]);
				$this->setAfipCitiProrratearCfComputable($fila[self::GEN_ATTR_MIN_AFIP_CITI_PRORRATEAR_CF_COMPUTABLE]);
				$this->setAfipCitiCfComputableOComprobante($fila[self::GEN_ATTR_MIN_AFIP_CITI_CF_COMPUTABLE_O_COMPROBANTE]);
				$this->setAfipCitiImporteCfComputableGlobal($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE_GLOBAL]);
				$this->setAfipCitiImporteCfComputableAsignacionDirecta($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE_ASIGNACION_DIRECTA]);
				$this->setAfipCitiImporteCfComputableProrrateo($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE_PRORRATEO]);
				$this->setAfipCitiImporteCfNoComputableGlobal($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_NO_COMPUTABLE_GLOBAL]);
				$this->setAfipCitiImporteCfContribuyenteSsYOc($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_CONTRIBUYENTE_SS_Y_OC]);
				$this->setAfipCitiImporteCfComputableSsYOc($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE_SS_Y_OC]);
				$this->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
				$this->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
				$this->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
				$this->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
				$this->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
				$this->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
				$this->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
    
                }
            }
	}
	public function setDescripcion($v){ $this->descripcion = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setAfipCitiPrcId($v){ $this->afip_citi_prc_id = $v; }
	public function setInicial($v){ $this->inicial = $v; }
	public function setActual($v){ $this->actual = $v; }
	public function setAfipCitiCuitInformante($v){ $this->afip_citi_cuit_informante = $v; }
	public function setAfipCitiPeriodo($v){ $this->afip_citi_periodo = $v; }
	public function setAfipCitiSecuencia($v){ $this->afip_citi_secuencia = $v; }
	public function setAfipCitiSinMovimiento($v){ $this->afip_citi_sin_movimiento = $v; }
	public function setAfipCitiProrratearCfComputable($v){ $this->afip_citi_prorratear_cf_computable = $v; }
	public function setAfipCitiCfComputableOComprobante($v){ $this->afip_citi_cf_computable_o_comprobante = $v; }
	public function setAfipCitiImporteCfComputableGlobal($v){ $this->afip_citi_importe_cf_computable_global = $v; }
	public function setAfipCitiImporteCfComputableAsignacionDirecta($v){ $this->afip_citi_importe_cf_computable_asignacion_directa = $v; }
	public function setAfipCitiImporteCfComputableProrrateo($v){ $this->afip_citi_importe_cf_computable_prorrateo = $v; }
	public function setAfipCitiImporteCfNoComputableGlobal($v){ $this->afip_citi_importe_cf_no_computable_global = $v; }
	public function setAfipCitiImporteCfContribuyenteSsYOc($v){ $this->afip_citi_importe_cf_contribuyente_ss_y_oc = $v; }
	public function setAfipCitiImporteCfComputableSsYOc($v){ $this->afip_citi_importe_cf_computable_ss_y_oc = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new AfipCitiCabecera();
            $o->setId($fila[AfipCitiCabecera::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setAfipCitiPrcId($fila[self::GEN_ATTR_MIN_AFIP_CITI_PRC_ID]);
			$o->setInicial($fila[self::GEN_ATTR_MIN_INICIAL]);
			$o->setActual($fila[self::GEN_ATTR_MIN_ACTUAL]);
			$o->setAfipCitiCuitInformante($fila[self::GEN_ATTR_MIN_AFIP_CITI_CUIT_INFORMANTE]);
			$o->setAfipCitiPeriodo($fila[self::GEN_ATTR_MIN_AFIP_CITI_PERIODO]);
			$o->setAfipCitiSecuencia($fila[self::GEN_ATTR_MIN_AFIP_CITI_SECUENCIA]);
			$o->setAfipCitiSinMovimiento($fila[self::GEN_ATTR_MIN_AFIP_CITI_SIN_MOVIMIENTO]);
			$o->setAfipCitiProrratearCfComputable($fila[self::GEN_ATTR_MIN_AFIP_CITI_PRORRATEAR_CF_COMPUTABLE]);
			$o->setAfipCitiCfComputableOComprobante($fila[self::GEN_ATTR_MIN_AFIP_CITI_CF_COMPUTABLE_O_COMPROBANTE]);
			$o->setAfipCitiImporteCfComputableGlobal($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE_GLOBAL]);
			$o->setAfipCitiImporteCfComputableAsignacionDirecta($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE_ASIGNACION_DIRECTA]);
			$o->setAfipCitiImporteCfComputableProrrateo($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE_PRORRATEO]);
			$o->setAfipCitiImporteCfNoComputableGlobal($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_NO_COMPUTABLE_GLOBAL]);
			$o->setAfipCitiImporteCfContribuyenteSsYOc($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_CONTRIBUYENTE_SS_Y_OC]);
			$o->setAfipCitiImporteCfComputableSsYOc($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE_SS_Y_OC]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BAfipCitiCabecera */ 	
	public function control(){
            $error = new DbError();
        
                // ---------------------------------------------------------------------
                // descripcion
                // ---------------------------------------------------------------------
                if (!Ctrl::esVacio(trim($this->getDescripcion()))) {
                    if (Ctrl::esMaxCaracteres(100, $this->getDescripcion())) {
                        $error->addError(505, 'Descripcion', 'descripcion');
                    }else{
                        $o = self::getOxDescripcion(trim($this->getDescripcion()));
                        if ($o && $o->getId() != $this->getId()) {
                            $error->addError(140, 'Descripcion', 'descripcion');
                        }                
                    }
                } else {
                    $error->addError(100, 'Descripcion', 'descripcion');
                }
            
                // ---------------------------------------------------------------------
                // codigo
                // ---------------------------------------------------------------------
                if (!Ctrl::esVacio(trim($this->getCodigo()))) {
                    if (Ctrl::esMaxCaracteres(100, $this->getCodigo())) {
                        $error->addError(505, 'Codigo', 'codigo');
                    }else{
                        $o = self::getOxCodigo(trim($this->getCodigo()));
                        if ($o && $o->getId() != $this->getId()) {
                            $error->addError(140, 'Codigo', 'codigo');
                        }                
                    }
                } else {
                    //$error->addError(100, 'Codigo', 'codigo');
                }
            
            
            $this->error = $error;
            return $error;
	}

	/* Cambia el estado de BAfipCitiCabecera */ 	
	public function cambiarEstado(){
            $sql = "UPDATE ".self::GEN_TABLA." SET ".self::GEN_ATTR_MIN_ESTADO." = ".$this->getEstado()." WHERE ".self::GEN_ATTR_MIN_ID." = ".$this->getId();
            
            // -----------------------------------------------------------------
            // inicializa registro de auditoria
            // -----------------------------------------------------------------
            $us_usuario_auditoria = UsUsuarioAuditoria::setRegistrarAuditoria($tabla = self::GEN_TABLA, $clase = self::GEN_CLASE, $o = $this, $accion = UsUsuarioAuditoria::ACCION_UPDATE_ESTADO, $comando = $sql);
            // -----------------------------------------------------------------
        
            $ejec = new Ejecucion();
            $ejec->setSql($sql);
            $ejec->execute();
            
            // -----------------------------------------------------------------
            // confirma registro de auditoria
            // -----------------------------------------------------------------
            if($us_usuario_auditoria){
                $us_usuario_auditoria->setConfirmarAuditoria($clase = self::GEN_CLASE, $o = $this);
            }
            // -----------------------------------------------------------------
	}

	/* Save de BAfipCitiCabecera */ 	
	public function save($array_datos_auditoria = false){
            $ejec = new Ejecucion();
            if(!isset($this->id)){
            
                if($array_datos_auditoria){
                    // ---------------------------------------------------------
                    // se toman datos desde el array de auditoria
                    // ---------------------------------------------------------
                    $this->creado = $array_datos_auditoria['creado'];
                    $this->modificado = $array_datos_auditoria['modificado'];				
                    $this->creado_por = $array_datos_auditoria['creado_por'];
                    $this->modificado_por = $array_datos_auditoria['modificado_por'];                    
                }else{
                    // ---------------------------------------------------------
                    // se deducen datos de acuerdo al contexto
                    // ---------------------------------------------------------
                    $this->creado = Gral::getFechaHoraActual();
                    $this->modificado = Gral::getFechaHoraActual();				
                    if(UsUsuario::autenticado()) $this->creado_por = UsUsuario::autenticado()->getId(); else $this->creado_por = 'null';
                    if(UsUsuario::autenticado()) $this->modificado_por = UsUsuario::autenticado()->getId(); else $this->modificado_por = 'null';	
                }            
                    
                $sql = "
				 INSERT INTO ".self::GEN_TABLA." (".self::GEN_ATTR_MIN_ID.", ".self::GEN_ATTR_MIN_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_PRC_ID."
						, ".self::GEN_ATTR_MIN_INICIAL."
						, ".self::GEN_ATTR_MIN_ACTUAL."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CUIT_INFORMANTE."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_PERIODO."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_SECUENCIA."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_SIN_MOVIMIENTO."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_PRORRATEAR_CF_COMPUTABLE."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CF_COMPUTABLE_O_COMPROBANTE."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE_GLOBAL."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE_ASIGNACION_DIRECTA."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE_PRORRATEO."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_NO_COMPUTABLE_GLOBAL."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_CONTRIBUYENTE_SS_Y_OC."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE_SS_Y_OC."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('afip_citi_cabecera_seq'), 
                '".$this->getDescripcion()."'
						, '".$this->getCodigo()."'
						, ".$this->getAfipCitiPrcId()."
						, ".$this->getInicial()."
						, ".$this->getActual()."
						, '".$this->getAfipCitiCuitInformante()."'
						, '".$this->getAfipCitiPeriodo()."'
						, '".$this->getAfipCitiSecuencia()."'
						, '".$this->getAfipCitiSinMovimiento()."'
						, '".$this->getAfipCitiProrratearCfComputable()."'
						, '".$this->getAfipCitiCfComputableOComprobante()."'
						, '".$this->getAfipCitiImporteCfComputableGlobal()."'
						, '".$this->getAfipCitiImporteCfComputableAsignacionDirecta()."'
						, '".$this->getAfipCitiImporteCfComputableProrrateo()."'
						, '".$this->getAfipCitiImporteCfNoComputableGlobal()."'
						, '".$this->getAfipCitiImporteCfContribuyenteSsYOc()."'
						, '".$this->getAfipCitiImporteCfComputableSsYOc()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('afip_citi_cabecera_seq')";
            
                // -----------------------------------------------------------------
                // inicializa registro de auditoria
                // -----------------------------------------------------------------
                $us_usuario_auditoria = UsUsuarioAuditoria::setRegistrarAuditoria($tabla = self::GEN_TABLA, $clase = self::GEN_CLASE, $o = $this, $accion = UsUsuarioAuditoria::ACCION_INSERT, $comando = $sql, $o_before = false);
                // -----------------------------------------------------------------

            }else{
                
                if($array_datos_auditoria){
                    // ---------------------------------------------------------
                    // se toman datos desde el array de auditoria
                    // ---------------------------------------------------------
                    $this->modificado = $array_datos_auditoria['modificado'];				
                    $this->modificado_por = $array_datos_auditoria['modificado_por'];                    
                }else{
                    // ---------------------------------------------------------
                    // se deducen datos de acuerdo al contexto
                    // ---------------------------------------------------------
                    $this->modificado = Gral::getFechaHoraActual();				
                    if(UsUsuario::autenticado()) $this->modificado_por = UsUsuario::autenticado()->getId(); else $this->modificado_por = 'null';	
                }            

                $sql = "
				 UPDATE 
                 
				 ".AfipCitiCabecera::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_PRC_ID." = ".$this->getAfipCitiPrcId()."
						, ".self::GEN_ATTR_MIN_INICIAL." = ".$this->getInicial()."
						, ".self::GEN_ATTR_MIN_ACTUAL." = ".$this->getActual()."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CUIT_INFORMANTE." = '".$this->getAfipCitiCuitInformante()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_PERIODO." = '".$this->getAfipCitiPeriodo()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_SECUENCIA." = '".$this->getAfipCitiSecuencia()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_SIN_MOVIMIENTO." = '".$this->getAfipCitiSinMovimiento()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_PRORRATEAR_CF_COMPUTABLE." = '".$this->getAfipCitiProrratearCfComputable()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CF_COMPUTABLE_O_COMPROBANTE." = '".$this->getAfipCitiCfComputableOComprobante()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE_GLOBAL." = '".$this->getAfipCitiImporteCfComputableGlobal()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE_ASIGNACION_DIRECTA." = '".$this->getAfipCitiImporteCfComputableAsignacionDirecta()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE_PRORRATEO." = '".$this->getAfipCitiImporteCfComputableProrrateo()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_NO_COMPUTABLE_GLOBAL." = '".$this->getAfipCitiImporteCfNoComputableGlobal()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_CONTRIBUYENTE_SS_Y_OC." = '".$this->getAfipCitiImporteCfContribuyenteSsYOc()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE_SS_Y_OC." = '".$this->getAfipCitiImporteCfComputableSsYOc()."'
						, ".self::GEN_ATTR_MIN_OBSERVACION." = '".$this->getObservacion()."'
						, ".self::GEN_ATTR_MIN_ORDEN." = ".$this->getOrden()."
						, ".self::GEN_ATTR_MIN_ESTADO." = ".$this->getEstado()."
						, ".self::GEN_ATTR_MIN_MODIFICADO." = '".$this->getModificado()."'
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR." = ".$this->getModificadoPor()."
				 WHERE ".self::GEN_ATTR_MIN_ID." = ".$this->getId();
                    
                // -----------------------------------------------------------------
                // inicializa registro de auditoria
                // -----------------------------------------------------------------
                $us_usuario_auditoria = UsUsuarioAuditoria::setRegistrarAuditoria($tabla = self::GEN_TABLA, $clase = self::GEN_CLASE, $o = $this, $accion = UsUsuarioAuditoria::ACCION_UPDATE, $comando = $sql, $o_before);
                // -----------------------------------------------------------------
            }
            //Gral::echoSqlSentence($sql);
            
            $ejec->setSql($sql);
            $ejec->execute();

            if(!isset($this->id)){ $this->setId($ejec->getUltimoId(), false); }

            // -----------------------------------------------------------------
            // confirma registro de auditoria
            // -----------------------------------------------------------------
            if($us_usuario_auditoria){
                $us_usuario_auditoria->setConfirmarAuditoria($clase = self::GEN_CLASE, $o = $this);
            }
            // -----------------------------------------------------------------

            return true;

	}
	
	public function saveMigracion($mantener_datos_creado = false){
            $ejec = new Ejecucion();

            $o = self::getOxId($this->id);

            if(!$o){
                if(!$mantener_datos_creado){
                    $this->creado = Gral::getFechaHoraActual();
                    $this->modificado = Gral::getFechaHoraActual();				
                    if(UsUsuario::autenticado()) $this->creado_por = UsUsuario::autenticado()->getId(); else $this->creado_por = 'null';
                    if(UsUsuario::autenticado()) $this->modificado_por = UsUsuario::autenticado()->getId(); else $this->modificado_por = 'null';	
                }
                $sql = "
				 INSERT INTO ".self::GEN_TABLA." (".self::GEN_ATTR_MIN_ID.", ".self::GEN_ATTR_MIN_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_PRC_ID."
						, ".self::GEN_ATTR_MIN_INICIAL."
						, ".self::GEN_ATTR_MIN_ACTUAL."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CUIT_INFORMANTE."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_PERIODO."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_SECUENCIA."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_SIN_MOVIMIENTO."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_PRORRATEAR_CF_COMPUTABLE."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CF_COMPUTABLE_O_COMPROBANTE."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE_GLOBAL."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE_ASIGNACION_DIRECTA."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE_PRORRATEO."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_NO_COMPUTABLE_GLOBAL."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_CONTRIBUYENTE_SS_Y_OC."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE_SS_Y_OC."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getDescripcion()."'
						, '".$this->getCodigo()."'
						, ".$this->getAfipCitiPrcId()."
						, ".$this->getInicial()."
						, ".$this->getActual()."
						, '".$this->getAfipCitiCuitInformante()."'
						, '".$this->getAfipCitiPeriodo()."'
						, '".$this->getAfipCitiSecuencia()."'
						, '".$this->getAfipCitiSinMovimiento()."'
						, '".$this->getAfipCitiProrratearCfComputable()."'
						, '".$this->getAfipCitiCfComputableOComprobante()."'
						, '".$this->getAfipCitiImporteCfComputableGlobal()."'
						, '".$this->getAfipCitiImporteCfComputableAsignacionDirecta()."'
						, '".$this->getAfipCitiImporteCfComputableProrrateo()."'
						, '".$this->getAfipCitiImporteCfNoComputableGlobal()."'
						, '".$this->getAfipCitiImporteCfContribuyenteSsYOc()."'
						, '".$this->getAfipCitiImporteCfComputableSsYOc()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    )";
		}else{
                    if(!$mantener_datos_creado){                
                        $this->modificado = Gral::getFechaHoraActual();
                        if(UsUsuario::autenticado()) $this->modificado_por = UsUsuario::autenticado()->getId(); else $this->modificado_por = 'null';
                    }
                    
                    $sql = "
				 UPDATE 
                     
				 ".AfipCitiCabecera::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_PRC_ID." = ".$this->getAfipCitiPrcId()."
						, ".self::GEN_ATTR_MIN_INICIAL." = ".$this->getInicial()."
						, ".self::GEN_ATTR_MIN_ACTUAL." = ".$this->getActual()."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CUIT_INFORMANTE." = '".$this->getAfipCitiCuitInformante()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_PERIODO." = '".$this->getAfipCitiPeriodo()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_SECUENCIA." = '".$this->getAfipCitiSecuencia()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_SIN_MOVIMIENTO." = '".$this->getAfipCitiSinMovimiento()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_PRORRATEAR_CF_COMPUTABLE." = '".$this->getAfipCitiProrratearCfComputable()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CF_COMPUTABLE_O_COMPROBANTE." = '".$this->getAfipCitiCfComputableOComprobante()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE_GLOBAL." = '".$this->getAfipCitiImporteCfComputableGlobal()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE_ASIGNACION_DIRECTA." = '".$this->getAfipCitiImporteCfComputableAsignacionDirecta()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE_PRORRATEO." = '".$this->getAfipCitiImporteCfComputableProrrateo()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_NO_COMPUTABLE_GLOBAL." = '".$this->getAfipCitiImporteCfNoComputableGlobal()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_CONTRIBUYENTE_SS_Y_OC." = '".$this->getAfipCitiImporteCfContribuyenteSsYOc()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE_SS_Y_OC." = '".$this->getAfipCitiImporteCfComputableSsYOc()."'
						, ".self::GEN_ATTR_MIN_OBSERVACION." = '".$this->getObservacion()."'
						, ".self::GEN_ATTR_MIN_ORDEN." = ".$this->getOrden()."
						, ".self::GEN_ATTR_MIN_ESTADO." = ".$this->getEstado()."
						, ".self::GEN_ATTR_MIN_MODIFICADO." = '".$this->getModificado()."'
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR." = ".$this->getModificadoPor()."
				 WHERE ".self::GEN_ATTR_MIN_ID." = ".$this->getId();
		}
		$ejec->setSql($sql);
		$ejec->execute();
                
		if(!isset($this->id)){ $this->setId($ejec->getUltimoId(), false); }		

                // -------------------------------------------------------------
                // se actualiza la secuencia con el valor del id mas alto
                // -------------------------------------------------------------
                $sql_alter_sequence = "SELECT setval('".self::GEN_TABLA."_seq', (SELECT max(id) FROM ".self::GEN_TABLA."));";
                $ejec->setSql($sql_alter_sequence);
		$ejec->execute();
                // -------------------------------------------------------------                

		return true;

	}
	
        /**
        * 
        */
	public function saveDesdeBackend(){
            $this->save();
            $this->execBDOtimization();
	}
	
        /**
        * 
        */
	public function saveDesdeRelacion(){
            $this->save();
            $this->execBDOtimization();
	}
	
        /**
        * 
        */
	public function saveDesdeVinculo(){
            $this->save();
            $this->execBDOtimization();
	}
	
        /**
        * Metodo que guarda el objeto sin afectar datos de auditoria.
        * Generalmente usado para procesos internos que modifican algun campo.
        */
	public function saveDesdeProceso(){
        
            // -----------------------------------------------------------------
            // se mantentienen los datos de auditoria
            // -----------------------------------------------------------------
            $creado_por = $this->getCreadoPor();
            $creado = $this->getCreado();
            $modificado_por = $this->getModificadoPor();
            $modificado = $this->getModificado();
            
            $array = array(
                'creado_por' => $creado_por,
                'creado' => $creado,
                'modificado_por' => $modificado_por,
                'modificado' => $modificado,
            );
            $this->save($array);
            //$this->execBDOtimization();

	}
	
        /**
        * Metodo que guarda el objeto afectando datos de auditoria con datos informados.
        * Generalmente utilizados en aplicaciones externas que podrian operar sin internet.
        */
	public function saveDesdeSincronizacion($creado_por, $creado, $modificado_por, $modificado){
            
            // -----------------------------------------------------------------
            // Se utilizan los datos de auditoria recibidos por parametro
            // -----------------------------------------------------------------
            $array = array(
                'creado_por' => $creado_por,
                'creado' => $creado,
                'modificado_por' => $modificado_por,
                'modificado' => $modificado,
            );
            $this->save($array);
            //$this->execBDOtimization();
	}
	
	public function execBDOtimization(){

            // -------------------------------------------------------------
            // se fuerza el vacuum de la tabla (solo para PostgreSQL)
            // -------------------------------------------------------------
            $ejec = new Ejecucion();
            $sql_vacuum = "VACUUM (ANALYZE) ".self::GEN_TABLA.";";
            $ejec->setSql($sql_vacuum);
            $ejec->execute();
            // -------------------------------------------------------------                
                
	}
	
        /**
        * 
        */
	public function saveDesdeListado($campo, $valor){
            $this->saveCampoValor($campo, $valor);
	}
	
        /**
        * 
        */
	public function saveCampoValor($campo, $valor){
            $us_usuario = UsUsuario::autenticado();

            // ---------------------------------------------------------
            // se deducen datos de acuerdo al contexto
            // ---------------------------------------------------------
            $modificado = Gral::getFechaHoraActual();	
            $modificado_por = 'null';
            if($us_usuario){ 
                $modificado_por = $us_usuario->getId();
            }

            $sql = "UPDATE ".self::GEN_TABLA." SET "
                    .$campo." = '".$valor."', "
                    .self::GEN_ATTR_MIN_MODIFICADO." = '".$modificado."', "
                    .self::GEN_ATTR_MIN_MODIFICADO_POR." = ".$modificado_por." "
                    . "WHERE ".self::GEN_ATTR_MIN_ID." = ".$this->getId();
            //Gral::echoSqlSentence($sql);

            $ejec = new Ejecucion();
            $ejec->setSql($sql);
            $ejec->execute();
	}
	
        /**
        * 
        */
	static function setInicializarRegistroSimple(){
            $o = new AfipCitiCabecera();
            $o->saveDesdeBackend();

            return $o;
	}
	
        /**
        * 
        */
	static function getSaneamientoParaRegistroSimple($campo, $valor, $type = '', $mascara = ''){
        
            // -----------------------------------------------------------------
            // se sanean espacios laterales en el valor
            // -----------------------------------------------------------------            
            $valor = trim($valor);
        
            // agregar codigo aqui ...
            
            return $valor;
	}

	/* Delete de BAfipCitiCabecera */ 	
	public function delete(){
            $sql = "DELETE FROM ".self::GEN_TABLA." WHERE ".self::GEN_ATTR_MIN_ID." = ".$this->getId();
        
            // -----------------------------------------------------------------
            // inicializa registro de auditoria
            // -----------------------------------------------------------------
            $us_usuario_auditoria = UsUsuarioAuditoria::setRegistrarAuditoria($tabla = self::GEN_TABLA, $clase = self::GEN_CLASE, $o = $this, $accion = UsUsuarioAuditoria::ACCION_DELETE, $comando = $sql, $o_before);
            // -----------------------------------------------------------------

            $ejec = new Ejecucion();
            $ejec->setSql($sql);
            $ejec->execute();
            
            // -----------------------------------------------------------------
            // confirma registro de auditoria
            // -----------------------------------------------------------------
            if($us_usuario_auditoria){
                $us_usuario_auditoria->setConfirmarAuditoria($clase = self::GEN_CLASE, $o = $this);
            }
            // -----------------------------------------------------------------            
	}
	
	public function deleteDesdeRelacion(){
            $this->delete();
	}
	
	public function deleteDesdeVinculo(){
            $this->delete();
	}

	/* Delete de todas las clases relacionadas */ 	
	public function deleteAll(){
	
            // se elimina la coleccion de AfipCitiVentasCbtes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(AfipCitiVentasCbte::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getAfipCitiVentasCbtes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de AfipCitiVentasAlicuotass relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(AfipCitiVentasAlicuotas::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getAfipCitiVentasAlicuotass(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de AfipCitiComprasCbtes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(AfipCitiComprasCbte::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getAfipCitiComprasCbtes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de AfipCitiComprasAlicuotass relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(AfipCitiComprasAlicuotas::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getAfipCitiComprasAlicuotass(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de AfipCitiComprasImportacioness relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(AfipCitiComprasImportaciones::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getAfipCitiComprasImportacioness(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarAfipCitiCabecera(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getAfipCitiCabeceras($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
		// inicializacion de variables
		if(is_null($paginador)){
                    $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
		}
		if(is_null($criterio)){
                    $criterio = new Criterio(self::SES_CRITERIOS);
                    if(!is_null($estado)){
                        if($estado){
                            $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                        }else{
                            $criterio->add(self::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                        }
                    }
                    $criterio->addTabla(self::GEN_TABLA);
                    $criterio = AfipCitiCabecera::setAplicarFiltrosDeAlcance($criterio);

                    if(is_array($arr_ordens)){
                        foreach($arr_ordens as $arr_orden){
                            $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                        }
                    }

	
                    $criterio->addOrden(self::GEN_ATTR_ORDEN, 'asc');                            
                    $criterio->addOrden('2', 'asc');			
                    $criterio->setCriterios();
		}

		$cons = new Consulta();
		$sql = "SELECT ".$criterio->getDistinct()." ".self::GEN_TABLA.".* ".$criterio->getSelects()." FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

		$cons->setSql($sql);
		$cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
		$cons->execute();
                
                //Gral::echoSqlSentence($cons->getSql());

		$paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */
	
		$afipciticabeceras = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $afipciticabecera = new AfipCitiCabecera();
                    $afipciticabecera->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $afipciticabecera->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$afipciticabecera->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$afipciticabecera->setAfipCitiPrcId($fila[self::GEN_ATTR_MIN_AFIP_CITI_PRC_ID]);
			$afipciticabecera->setInicial($fila[self::GEN_ATTR_MIN_INICIAL]);
			$afipciticabecera->setActual($fila[self::GEN_ATTR_MIN_ACTUAL]);
			$afipciticabecera->setAfipCitiCuitInformante($fila[self::GEN_ATTR_MIN_AFIP_CITI_CUIT_INFORMANTE]);
			$afipciticabecera->setAfipCitiPeriodo($fila[self::GEN_ATTR_MIN_AFIP_CITI_PERIODO]);
			$afipciticabecera->setAfipCitiSecuencia($fila[self::GEN_ATTR_MIN_AFIP_CITI_SECUENCIA]);
			$afipciticabecera->setAfipCitiSinMovimiento($fila[self::GEN_ATTR_MIN_AFIP_CITI_SIN_MOVIMIENTO]);
			$afipciticabecera->setAfipCitiProrratearCfComputable($fila[self::GEN_ATTR_MIN_AFIP_CITI_PRORRATEAR_CF_COMPUTABLE]);
			$afipciticabecera->setAfipCitiCfComputableOComprobante($fila[self::GEN_ATTR_MIN_AFIP_CITI_CF_COMPUTABLE_O_COMPROBANTE]);
			$afipciticabecera->setAfipCitiImporteCfComputableGlobal($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE_GLOBAL]);
			$afipciticabecera->setAfipCitiImporteCfComputableAsignacionDirecta($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE_ASIGNACION_DIRECTA]);
			$afipciticabecera->setAfipCitiImporteCfComputableProrrateo($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE_PRORRATEO]);
			$afipciticabecera->setAfipCitiImporteCfNoComputableGlobal($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_NO_COMPUTABLE_GLOBAL]);
			$afipciticabecera->setAfipCitiImporteCfContribuyenteSsYOc($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_CONTRIBUYENTE_SS_Y_OC]);
			$afipciticabecera->setAfipCitiImporteCfComputableSsYOc($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE_SS_Y_OC]);
			$afipciticabecera->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$afipciticabecera->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$afipciticabecera->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$afipciticabecera->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$afipciticabecera->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$afipciticabecera->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$afipciticabecera->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $afipciticabeceras[] = $afipciticabecera;
		}
		
		return $afipciticabeceras;
	}	
	

	/* Método getAfipCitiCabeceras Habilitados */ 	
	static function getAfipCitiCabecerasHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return AfipCitiCabecera::getAfipCitiCabeceras($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getAfipCitiCabeceras para listado de Backend */ 	
	static function getAfipCitiCabecerasDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return AfipCitiCabecera::getAfipCitiCabeceras($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getAfipCitiCabecerasCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = AfipCitiCabecera::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = AfipCitiCabecera::getAfipCitiCabeceras($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getAfipCitiCabeceras filtrado para select */ 	
	static function getAfipCitiCabecerasCmbF($paginador = null, $criterio = null){
            $col = AfipCitiCabecera::getAfipCitiCabeceras($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getAfipCitiCabeceras filtrado por una coleccion de objetos foraneos de AfipCitiPrc */ 	
	static function getAfipCitiCabecerasXAfipCitiPrcs($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(AfipCitiCabecera::GEN_ATTR_AFIP_CITI_PRC_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(AfipCitiCabecera::GEN_TABLA);
            $c->addOrden(AfipCitiCabecera::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = AfipCitiCabecera::getAfipCitiCabeceras($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getAfipCitiPrcId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'afip_citi_cabecera_adm.php';
            $url_gestion = 'afip_citi_cabecera_gestion.php';
            if(file_exists($url_gestion)){
                $url = $url_gestion;
            }
            $array = array(
                'url' => $url,
                'label' => 'Volver al Listado',
            );

            return ($indice) ? $array[$indice] : $array;		
	}	
	

	/* Metodo que permite configurar el alcance a nivel de registros de los usuarios */ 	
	static function setAplicarFiltrosDeAlcance($criterio){

            // personalizar codigo para determinar el alcance 
            // de un usuario a nivel de registros

            return $criterio;	
	}	
	

	/* Metodo getAfipCitiVentasCbtes */ 	
	public function getAfipCitiVentasCbtes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(AfipCitiVentasCbte::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(AfipCitiVentasCbte::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(AfipCitiVentasCbte::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(AfipCitiVentasCbte::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(AfipCitiVentasCbte::GEN_ATTR_AFIP_CITI_CABECERA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(AfipCitiVentasCbte::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(AfipCitiVentasCbte::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".AfipCitiVentasCbte::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $afipcitiventascbtes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $afipcitiventascbte = AfipCitiVentasCbte::hidratarObjeto($fila);			
                $afipcitiventascbtes[] = $afipcitiventascbte;
            }

            return $afipcitiventascbtes;
	}	
	

	/* Método getAfipCitiVentasCbtesBloque para MasInfo */ 	
	public function getAfipCitiVentasCbtesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getAfipCitiVentasCbtes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getAfipCitiVentasCbtes Habilitados */ 	
	public function getAfipCitiVentasCbtesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getAfipCitiVentasCbtes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getAfipCitiVentasCbte */ 	
	public function getAfipCitiVentasCbte($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getAfipCitiVentasCbtes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de AfipCitiVentasCbte relacionadas */ 	
	public function deleteAfipCitiVentasCbtes(){
            $obs = $this->getAfipCitiVentasCbtes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getAfipCitiVentasCbtesCmb() AfipCitiVentasCbte relacionadas */ 	
	public function getAfipCitiVentasCbtesCmb(){
            $c = new Criterio();
            $c->add(AfipCitiVentasCbte::GEN_ATTR_AFIP_CITI_CABECERA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AfipCitiVentasCbte::GEN_TABLA);
            $c->setCriterios();

            $os = AfipCitiVentasCbte::getAfipCitiVentasCbtesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener AfipCitiPrcs (Coleccion) relacionados a traves de AfipCitiVentasCbte */ 	
	public function getAfipCitiPrcsXAfipCitiVentasCbte($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(AfipCitiPrc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(AfipCitiVentasCbte::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(AfipCitiVentasCbte::GEN_ATTR_AFIP_CITI_CABECERA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AfipCitiPrc::GEN_TABLA);
            $c->addRealJoin(AfipCitiVentasCbte::GEN_TABLA, AfipCitiVentasCbte::GEN_ATTR_AFIP_CITI_PRC_ID, AfipCitiPrc::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = AfipCitiPrc::getAfipCitiPrcs($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de AfipCitiPrcs relacionados a traves de AfipCitiVentasCbte */ 	
	public function getCantidadAfipCitiPrcsXAfipCitiVentasCbte($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(AfipCitiPrc::GEN_ATTR_ID);
            if($estado){
                $c->add(AfipCitiPrc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(AfipCitiVentasCbte::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(AfipCitiVentasCbte::GEN_ATTR_AFIP_CITI_CABECERA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AfipCitiPrc::GEN_TABLA);
            $c->addRealJoin(AfipCitiVentasCbte::GEN_TABLA, AfipCitiVentasCbte::GEN_ATTR_AFIP_CITI_PRC_ID, AfipCitiPrc::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = AfipCitiPrc::getAfipCitiPrcs($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener AfipCitiPrc (Objeto) relacionado a traves de AfipCitiVentasCbte */ 	
	public function getAfipCitiPrcXAfipCitiVentasCbte($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getAfipCitiPrcsXAfipCitiVentasCbte($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getAfipCitiVentasAlicuotass */ 	
	public function getAfipCitiVentasAlicuotass($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(AfipCitiVentasAlicuotas::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(AfipCitiVentasAlicuotas::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(AfipCitiVentasAlicuotas::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(AfipCitiVentasAlicuotas::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(AfipCitiVentasAlicuotas::GEN_ATTR_AFIP_CITI_CABECERA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(AfipCitiVentasAlicuotas::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(AfipCitiVentasAlicuotas::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".AfipCitiVentasAlicuotas::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $afipcitiventasalicuotass = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $afipcitiventasalicuotas = AfipCitiVentasAlicuotas::hidratarObjeto($fila);			
                $afipcitiventasalicuotass[] = $afipcitiventasalicuotas;
            }

            return $afipcitiventasalicuotass;
	}	
	

	/* Método getAfipCitiVentasAlicuotassBloque para MasInfo */ 	
	public function getAfipCitiVentasAlicuotassParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getAfipCitiVentasAlicuotass($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getAfipCitiVentasAlicuotass Habilitados */ 	
	public function getAfipCitiVentasAlicuotassHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getAfipCitiVentasAlicuotass($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getAfipCitiVentasAlicuotas */ 	
	public function getAfipCitiVentasAlicuotas($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getAfipCitiVentasAlicuotass($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de AfipCitiVentasAlicuotas relacionadas */ 	
	public function deleteAfipCitiVentasAlicuotass(){
            $obs = $this->getAfipCitiVentasAlicuotass();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getAfipCitiVentasAlicuotassCmb() AfipCitiVentasAlicuotas relacionadas */ 	
	public function getAfipCitiVentasAlicuotassCmb(){
            $c = new Criterio();
            $c->add(AfipCitiVentasAlicuotas::GEN_ATTR_AFIP_CITI_CABECERA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AfipCitiVentasAlicuotas::GEN_TABLA);
            $c->setCriterios();

            $os = AfipCitiVentasAlicuotas::getAfipCitiVentasAlicuotassCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener AfipCitiPrcs (Coleccion) relacionados a traves de AfipCitiVentasAlicuotas */ 	
	public function getAfipCitiPrcsXAfipCitiVentasAlicuotas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(AfipCitiPrc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(AfipCitiVentasAlicuotas::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(AfipCitiVentasAlicuotas::GEN_ATTR_AFIP_CITI_CABECERA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AfipCitiPrc::GEN_TABLA);
            $c->addRealJoin(AfipCitiVentasAlicuotas::GEN_TABLA, AfipCitiVentasAlicuotas::GEN_ATTR_AFIP_CITI_PRC_ID, AfipCitiPrc::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = AfipCitiPrc::getAfipCitiPrcs($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de AfipCitiPrcs relacionados a traves de AfipCitiVentasAlicuotas */ 	
	public function getCantidadAfipCitiPrcsXAfipCitiVentasAlicuotas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(AfipCitiPrc::GEN_ATTR_ID);
            if($estado){
                $c->add(AfipCitiPrc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(AfipCitiVentasAlicuotas::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(AfipCitiVentasAlicuotas::GEN_ATTR_AFIP_CITI_CABECERA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AfipCitiPrc::GEN_TABLA);
            $c->addRealJoin(AfipCitiVentasAlicuotas::GEN_TABLA, AfipCitiVentasAlicuotas::GEN_ATTR_AFIP_CITI_PRC_ID, AfipCitiPrc::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = AfipCitiPrc::getAfipCitiPrcs($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener AfipCitiPrc (Objeto) relacionado a traves de AfipCitiVentasAlicuotas */ 	
	public function getAfipCitiPrcXAfipCitiVentasAlicuotas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getAfipCitiPrcsXAfipCitiVentasAlicuotas($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getAfipCitiComprasCbtes */ 	
	public function getAfipCitiComprasCbtes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(AfipCitiComprasCbte::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(AfipCitiComprasCbte::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(AfipCitiComprasCbte::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(AfipCitiComprasCbte::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(AfipCitiComprasCbte::GEN_ATTR_AFIP_CITI_CABECERA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(AfipCitiComprasCbte::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(AfipCitiComprasCbte::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".AfipCitiComprasCbte::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $afipciticomprascbtes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $afipciticomprascbte = AfipCitiComprasCbte::hidratarObjeto($fila);			
                $afipciticomprascbtes[] = $afipciticomprascbte;
            }

            return $afipciticomprascbtes;
	}	
	

	/* Método getAfipCitiComprasCbtesBloque para MasInfo */ 	
	public function getAfipCitiComprasCbtesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getAfipCitiComprasCbtes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getAfipCitiComprasCbtes Habilitados */ 	
	public function getAfipCitiComprasCbtesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getAfipCitiComprasCbtes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getAfipCitiComprasCbte */ 	
	public function getAfipCitiComprasCbte($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getAfipCitiComprasCbtes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de AfipCitiComprasCbte relacionadas */ 	
	public function deleteAfipCitiComprasCbtes(){
            $obs = $this->getAfipCitiComprasCbtes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getAfipCitiComprasCbtesCmb() AfipCitiComprasCbte relacionadas */ 	
	public function getAfipCitiComprasCbtesCmb(){
            $c = new Criterio();
            $c->add(AfipCitiComprasCbte::GEN_ATTR_AFIP_CITI_CABECERA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AfipCitiComprasCbte::GEN_TABLA);
            $c->setCriterios();

            $os = AfipCitiComprasCbte::getAfipCitiComprasCbtesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener AfipCitiPrcs (Coleccion) relacionados a traves de AfipCitiComprasCbte */ 	
	public function getAfipCitiPrcsXAfipCitiComprasCbte($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(AfipCitiPrc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(AfipCitiComprasCbte::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(AfipCitiComprasCbte::GEN_ATTR_AFIP_CITI_CABECERA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AfipCitiPrc::GEN_TABLA);
            $c->addRealJoin(AfipCitiComprasCbte::GEN_TABLA, AfipCitiComprasCbte::GEN_ATTR_AFIP_CITI_PRC_ID, AfipCitiPrc::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = AfipCitiPrc::getAfipCitiPrcs($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de AfipCitiPrcs relacionados a traves de AfipCitiComprasCbte */ 	
	public function getCantidadAfipCitiPrcsXAfipCitiComprasCbte($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(AfipCitiPrc::GEN_ATTR_ID);
            if($estado){
                $c->add(AfipCitiPrc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(AfipCitiComprasCbte::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(AfipCitiComprasCbte::GEN_ATTR_AFIP_CITI_CABECERA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AfipCitiPrc::GEN_TABLA);
            $c->addRealJoin(AfipCitiComprasCbte::GEN_TABLA, AfipCitiComprasCbte::GEN_ATTR_AFIP_CITI_PRC_ID, AfipCitiPrc::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = AfipCitiPrc::getAfipCitiPrcs($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener AfipCitiPrc (Objeto) relacionado a traves de AfipCitiComprasCbte */ 	
	public function getAfipCitiPrcXAfipCitiComprasCbte($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getAfipCitiPrcsXAfipCitiComprasCbte($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getAfipCitiComprasAlicuotass */ 	
	public function getAfipCitiComprasAlicuotass($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(AfipCitiComprasAlicuotas::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(AfipCitiComprasAlicuotas::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(AfipCitiComprasAlicuotas::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(AfipCitiComprasAlicuotas::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(AfipCitiComprasAlicuotas::GEN_ATTR_AFIP_CITI_CABECERA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(AfipCitiComprasAlicuotas::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(AfipCitiComprasAlicuotas::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".AfipCitiComprasAlicuotas::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $afipciticomprasalicuotass = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $afipciticomprasalicuotas = AfipCitiComprasAlicuotas::hidratarObjeto($fila);			
                $afipciticomprasalicuotass[] = $afipciticomprasalicuotas;
            }

            return $afipciticomprasalicuotass;
	}	
	

	/* Método getAfipCitiComprasAlicuotassBloque para MasInfo */ 	
	public function getAfipCitiComprasAlicuotassParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getAfipCitiComprasAlicuotass($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getAfipCitiComprasAlicuotass Habilitados */ 	
	public function getAfipCitiComprasAlicuotassHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getAfipCitiComprasAlicuotass($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getAfipCitiComprasAlicuotas */ 	
	public function getAfipCitiComprasAlicuotas($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getAfipCitiComprasAlicuotass($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de AfipCitiComprasAlicuotas relacionadas */ 	
	public function deleteAfipCitiComprasAlicuotass(){
            $obs = $this->getAfipCitiComprasAlicuotass();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getAfipCitiComprasAlicuotassCmb() AfipCitiComprasAlicuotas relacionadas */ 	
	public function getAfipCitiComprasAlicuotassCmb(){
            $c = new Criterio();
            $c->add(AfipCitiComprasAlicuotas::GEN_ATTR_AFIP_CITI_CABECERA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AfipCitiComprasAlicuotas::GEN_TABLA);
            $c->setCriterios();

            $os = AfipCitiComprasAlicuotas::getAfipCitiComprasAlicuotassCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener AfipCitiPrcs (Coleccion) relacionados a traves de AfipCitiComprasAlicuotas */ 	
	public function getAfipCitiPrcsXAfipCitiComprasAlicuotas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(AfipCitiPrc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(AfipCitiComprasAlicuotas::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(AfipCitiComprasAlicuotas::GEN_ATTR_AFIP_CITI_CABECERA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AfipCitiPrc::GEN_TABLA);
            $c->addRealJoin(AfipCitiComprasAlicuotas::GEN_TABLA, AfipCitiComprasAlicuotas::GEN_ATTR_AFIP_CITI_PRC_ID, AfipCitiPrc::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = AfipCitiPrc::getAfipCitiPrcs($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de AfipCitiPrcs relacionados a traves de AfipCitiComprasAlicuotas */ 	
	public function getCantidadAfipCitiPrcsXAfipCitiComprasAlicuotas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(AfipCitiPrc::GEN_ATTR_ID);
            if($estado){
                $c->add(AfipCitiPrc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(AfipCitiComprasAlicuotas::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(AfipCitiComprasAlicuotas::GEN_ATTR_AFIP_CITI_CABECERA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AfipCitiPrc::GEN_TABLA);
            $c->addRealJoin(AfipCitiComprasAlicuotas::GEN_TABLA, AfipCitiComprasAlicuotas::GEN_ATTR_AFIP_CITI_PRC_ID, AfipCitiPrc::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = AfipCitiPrc::getAfipCitiPrcs($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener AfipCitiPrc (Objeto) relacionado a traves de AfipCitiComprasAlicuotas */ 	
	public function getAfipCitiPrcXAfipCitiComprasAlicuotas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getAfipCitiPrcsXAfipCitiComprasAlicuotas($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getAfipCitiComprasImportacioness */ 	
	public function getAfipCitiComprasImportacioness($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(AfipCitiComprasImportaciones::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(AfipCitiComprasImportaciones::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(AfipCitiComprasImportaciones::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(AfipCitiComprasImportaciones::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(AfipCitiComprasImportaciones::GEN_ATTR_AFIP_CITI_CABECERA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(AfipCitiComprasImportaciones::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(AfipCitiComprasImportaciones::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".AfipCitiComprasImportaciones::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $afipciticomprasimportacioness = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $afipciticomprasimportaciones = AfipCitiComprasImportaciones::hidratarObjeto($fila);			
                $afipciticomprasimportacioness[] = $afipciticomprasimportaciones;
            }

            return $afipciticomprasimportacioness;
	}	
	

	/* Método getAfipCitiComprasImportacionessBloque para MasInfo */ 	
	public function getAfipCitiComprasImportacionessParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getAfipCitiComprasImportacioness($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getAfipCitiComprasImportacioness Habilitados */ 	
	public function getAfipCitiComprasImportacionessHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getAfipCitiComprasImportacioness($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getAfipCitiComprasImportaciones */ 	
	public function getAfipCitiComprasImportaciones($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getAfipCitiComprasImportacioness($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de AfipCitiComprasImportaciones relacionadas */ 	
	public function deleteAfipCitiComprasImportacioness(){
            $obs = $this->getAfipCitiComprasImportacioness();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getAfipCitiComprasImportacionessCmb() AfipCitiComprasImportaciones relacionadas */ 	
	public function getAfipCitiComprasImportacionessCmb(){
            $c = new Criterio();
            $c->add(AfipCitiComprasImportaciones::GEN_ATTR_AFIP_CITI_CABECERA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AfipCitiComprasImportaciones::GEN_TABLA);
            $c->setCriterios();

            $os = AfipCitiComprasImportaciones::getAfipCitiComprasImportacionessCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener AfipCitiPrcs (Coleccion) relacionados a traves de AfipCitiComprasImportaciones */ 	
	public function getAfipCitiPrcsXAfipCitiComprasImportaciones($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(AfipCitiPrc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(AfipCitiComprasImportaciones::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(AfipCitiComprasImportaciones::GEN_ATTR_AFIP_CITI_CABECERA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AfipCitiPrc::GEN_TABLA);
            $c->addRealJoin(AfipCitiComprasImportaciones::GEN_TABLA, AfipCitiComprasImportaciones::GEN_ATTR_AFIP_CITI_PRC_ID, AfipCitiPrc::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = AfipCitiPrc::getAfipCitiPrcs($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de AfipCitiPrcs relacionados a traves de AfipCitiComprasImportaciones */ 	
	public function getCantidadAfipCitiPrcsXAfipCitiComprasImportaciones($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(AfipCitiPrc::GEN_ATTR_ID);
            if($estado){
                $c->add(AfipCitiPrc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(AfipCitiComprasImportaciones::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(AfipCitiComprasImportaciones::GEN_ATTR_AFIP_CITI_CABECERA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AfipCitiPrc::GEN_TABLA);
            $c->addRealJoin(AfipCitiComprasImportaciones::GEN_TABLA, AfipCitiComprasImportaciones::GEN_ATTR_AFIP_CITI_PRC_ID, AfipCitiPrc::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = AfipCitiPrc::getAfipCitiPrcs($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener AfipCitiPrc (Objeto) relacionado a traves de AfipCitiComprasImportaciones */ 	
	public function getAfipCitiPrcXAfipCitiComprasImportaciones($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getAfipCitiPrcsXAfipCitiComprasImportaciones($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna el AfipCitiPrc (Clave Foranea) */ 	
    public function getAfipCitiPrc(){
        $o = new AfipCitiPrc();
        $o->setId($this->getAfipCitiPrcId());
        return $o;			
    }

	/* Metodo que retorna el AfipCitiPrc (Clave Foranea) en Array */ 	
    public function getAfipCitiPrcEnArray(&$arr_os){
        if($this->getAfipCitiPrcId() != 'null'){
            if(isset($arr_os[$this->getAfipCitiPrcId()])){
                $o = $arr_os[$this->getAfipCitiPrcId()];
            }else{
                $o = AfipCitiPrc::getOxId($this->getAfipCitiPrcId());
                if($o){
                    $arr_os[$this->getAfipCitiPrcId()] = $o;
                }
            }
        }else{
            $o = new AfipCitiPrc();
        }
        return $o;		
    }

	/* Metodo que retorna la HASH del objeto */ 	
    public function getHash(){
        return md5($this->getId().$this->getCreado());
    }

	/* Metodo que retorna la descripcion corta del objeto */ 	
    public function getDescripcionCorta($cantidad = 2){
        $descripcion_corta = '';
        $matches = array();

        preg_match_all('/(?<=\s|^)[a-z]/i', $this->getDescripcion(), $matches);
        if(count($matches[0]) > 1){
            $descripcion_corta = implode('', $matches[0]);
        }else{
            $descripcion_corta = strtoupper(substr($this->getDescripcion(), 0, $cantidad));
        }

        return $descripcion_corta;
    }

	/* Metodo que retorna un array con la descripcion extendida del objeto */ 	
    public function getArrDescripcionExtendidaParaBackend(){
        $array = array();            
        
        $array = array(
            'observacion' => array(
                'label' => 'Obs',
                'dato' => $this->getObservacion(),
                ),
        );            
        
        return $array;
    }

	/* Metodo que retorna la descripcion para el bloque de mas info */ 	
    public function getDescripcionBloqueMasInfo(){
        return $this->getDescripcion();			
    }

	/* Metodo que retorna la descripcion usada en los SELECT OPTION */ 	
    public function getDescripcionParaSelect(){
        return $this->getDescripcion();			
    }

	/* Metodo que retorna la descripcion usada en bloque relaciones */ 	
    public function getDescripcionParaRelacion(){
        return $this->getDescripcion();			
    }

	/* Metodo que retorna la descripcion vinculante del objeto */ 	
    public function getDescripcionVinculante($contexto_solicitante = ''){
        $descripcion = '';
            		
        if($contexto_solicitante != AfipCitiPrc::GEN_CLASE){
            if($this->getAfipCitiPrc()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(AfipCitiPrc::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getAfipCitiPrc()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        return $descripcion;

    }

	/* Metodo que retorna la descripcion del usuario creador del registro */ 	
    public function getCreadoPorDescripcion(){
        $o = UsUsuario::getOxId($this->getCreadoPor());
        if($o) return $o->getDescripcion();

        return '-';
    }

	/* Metodo que retorna la descripcion del usuario ultimo modificador del registro */ 	
    public function getModificadoPorDescripcion(){
        $o = UsUsuario::getOxId($this->getModificadoPor());
        if($o) return $o->getDescripcion();

        return '-';
    }

	/* Metodo que retorna la cantidad total de registros */ 	
    static function getCantidadTotalDeRegistros(){
            $cons = new Consulta();
            
            //$cons->setSQL('SELECT count(id) cantidad FROM afip_citi_cabecera'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'afip_citi_cabecera';");
            
            $cons->execute();

            $fila = pg_fetch_array($cons->getResultado());
            $cantidad = $fila['cantidad'];

            // -------------------------------------------------------------
            // excepcion para controlar bug de pocos registros por falta 
            // de vacuum al utilizar reltuples
            // reltuples hace muchisimo mas eficiente la ejecucion
            // -------------------------------------------------------------
            if($cantidad < 100){
                return 100;
            }

            return $cantidad;
    }

	/* retorna un objeto de acuerdo al 'id' */ 	
	static function getOxId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiCabeceras($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'id' */ 	
	static function getOsxId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiCabeceras(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiCabeceras($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'descripcion' */ 	
	static function getOsxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiCabeceras(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiCabeceras($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'codigo' */ 	
	static function getOsxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiCabeceras(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_prc_id' */ 	
	static function getOxAfipCitiPrcId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_PRC_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiCabeceras($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_prc_id' */ 	
	static function getOsxAfipCitiPrcId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_PRC_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiCabeceras(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'inicial' */ 	
	static function getOxInicial($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INICIAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiCabeceras($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'inicial' */ 	
	static function getOsxInicial($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INICIAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiCabeceras(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'actual' */ 	
	static function getOxActual($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ACTUAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiCabeceras($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'actual' */ 	
	static function getOsxActual($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ACTUAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiCabeceras(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_cuit_informante' */ 	
	static function getOxAfipCitiCuitInformante($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_CUIT_INFORMANTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiCabeceras($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_cuit_informante' */ 	
	static function getOsxAfipCitiCuitInformante($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_CUIT_INFORMANTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiCabeceras(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_periodo' */ 	
	static function getOxAfipCitiPeriodo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_PERIODO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiCabeceras($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_periodo' */ 	
	static function getOsxAfipCitiPeriodo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_PERIODO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiCabeceras(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_secuencia' */ 	
	static function getOxAfipCitiSecuencia($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_SECUENCIA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiCabeceras($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_secuencia' */ 	
	static function getOsxAfipCitiSecuencia($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_SECUENCIA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiCabeceras(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_sin_movimiento' */ 	
	static function getOxAfipCitiSinMovimiento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_SIN_MOVIMIENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiCabeceras($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_sin_movimiento' */ 	
	static function getOsxAfipCitiSinMovimiento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_SIN_MOVIMIENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiCabeceras(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_prorratear_cf_computable' */ 	
	static function getOxAfipCitiProrratearCfComputable($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_PRORRATEAR_CF_COMPUTABLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiCabeceras($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_prorratear_cf_computable' */ 	
	static function getOsxAfipCitiProrratearCfComputable($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_PRORRATEAR_CF_COMPUTABLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiCabeceras(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_cf_computable_o_comprobante' */ 	
	static function getOxAfipCitiCfComputableOComprobante($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_CF_COMPUTABLE_O_COMPROBANTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiCabeceras($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_cf_computable_o_comprobante' */ 	
	static function getOsxAfipCitiCfComputableOComprobante($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_CF_COMPUTABLE_O_COMPROBANTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiCabeceras(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_importe_cf_computable_global' */ 	
	static function getOxAfipCitiImporteCfComputableGlobal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_CF_COMPUTABLE_GLOBAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiCabeceras($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_importe_cf_computable_global' */ 	
	static function getOsxAfipCitiImporteCfComputableGlobal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_CF_COMPUTABLE_GLOBAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiCabeceras(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_importe_cf_computable_asignacion_directa' */ 	
	static function getOxAfipCitiImporteCfComputableAsignacionDirecta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_CF_COMPUTABLE_ASIGNACION_DIRECTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiCabeceras($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_importe_cf_computable_asignacion_directa' */ 	
	static function getOsxAfipCitiImporteCfComputableAsignacionDirecta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_CF_COMPUTABLE_ASIGNACION_DIRECTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiCabeceras(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_importe_cf_computable_prorrateo' */ 	
	static function getOxAfipCitiImporteCfComputableProrrateo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_CF_COMPUTABLE_PRORRATEO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiCabeceras($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_importe_cf_computable_prorrateo' */ 	
	static function getOsxAfipCitiImporteCfComputableProrrateo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_CF_COMPUTABLE_PRORRATEO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiCabeceras(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_importe_cf_no_computable_global' */ 	
	static function getOxAfipCitiImporteCfNoComputableGlobal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_CF_NO_COMPUTABLE_GLOBAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiCabeceras($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_importe_cf_no_computable_global' */ 	
	static function getOsxAfipCitiImporteCfNoComputableGlobal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_CF_NO_COMPUTABLE_GLOBAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiCabeceras(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_importe_cf_contribuyente_ss_y_oc' */ 	
	static function getOxAfipCitiImporteCfContribuyenteSsYOc($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_CF_CONTRIBUYENTE_SS_Y_OC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiCabeceras($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_importe_cf_contribuyente_ss_y_oc' */ 	
	static function getOsxAfipCitiImporteCfContribuyenteSsYOc($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_CF_CONTRIBUYENTE_SS_Y_OC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiCabeceras(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_importe_cf_computable_ss_y_oc' */ 	
	static function getOxAfipCitiImporteCfComputableSsYOc($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_CF_COMPUTABLE_SS_Y_OC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiCabeceras($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_importe_cf_computable_ss_y_oc' */ 	
	static function getOsxAfipCitiImporteCfComputableSsYOc($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_CF_COMPUTABLE_SS_Y_OC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiCabeceras(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiCabeceras($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'observacion' */ 	
	static function getOsxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiCabeceras(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiCabeceras($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'orden' */ 	
	static function getOsxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiCabeceras(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiCabeceras($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'estado' */ 	
	static function getOsxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiCabeceras(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiCabeceras($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'creado' */ 	
	static function getOsxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiCabeceras(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiCabeceras($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'creado_por' */ 	
	static function getOsxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiCabeceras(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiCabeceras($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'modificado' */ 	
	static function getOsxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiCabeceras(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiCabeceras($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'modificado_por' */ 	
	static function getOsxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiCabeceras(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo un array asociativo indicado */ 	
        /*
	Ejemplo de Array que debe recibir:
	 = array(
            array('campo' => 'id', 'valor' => '6'),
            array('campo' => 'gen_clase_id', 'valor' => '6')
	);	
	*/
	static function getOxArray($array){
            $criterio = new Criterio();
            foreach($array as $dato){
                $criterio->add($dato['campo'], $dato['valor'], Criterio::IGUAL);
            }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiCabeceras($paginador, $criterio);
            foreach($obs as $o){
                return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo un array asociativo indicado */ 	
	/*
	Ejemplo de Array que debe recibir:
	 = array(
            array('campo' => 'id', 'valor' => '6'),
            array('campo' => 'gen_clase_id', 'valor' => '6')
	);	
	*/
	static function getOsxArray($array){
            $criterio = new Criterio();
            foreach($array as $dato){
                $criterio->add($dato['campo'], $dato['valor'], Criterio::IGUAL);
            }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiCabeceras($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'afip_citi_cabecera_adm');
            }else{
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => $archivo);
            }
            $arr = serialize($arr);
            $arr = urlencode($arr);
            return $arr;
	}

	/* metodos static general para atributos para el menu contextual */ 	
	public function getFiltrosArrXCampo($clase_relacion, $campo){
            eval("
            \$arr = 
            array(
                array('campo' => \$campo, 'valor' => \$this->get".$clase_relacion."()->getId()),
            );
            ");
            $arr = serialize($arr);
            $arr = urlencode($arr);
            return $arr;		
	}

	/* Metodos anexos a manejo de fechas (date y datetime) 'creado' */ 	
	public function getCreadoDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getCreado(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getCreadoDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getCreadoDiferenciaDias();
        
            if ($fecha_hace > 0) {
                $fecha_hace = 'hace ' . abs($fecha_hace) . ' dias';
            } elseif ($fecha_hace < 0) {
                $fecha_hace = 'faltan ' . abs($fecha_hace) . ' dias';
            } else {
                $fecha_hace = 'hoy';
            }
            return $fecha_hace;
	}

	/* Metodos anexos a manejo de fechas (date y datetime) 'modificado' */ 	
	public function getModificadoDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getModificado(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getModificadoDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getModificadoDiferenciaDias();
        
            if ($fecha_hace > 0) {
                $fecha_hace = 'hace ' . abs($fecha_hace) . ' dias';
            } elseif ($fecha_hace < 0) {
                $fecha_hace = 'faltan ' . abs($fecha_hace) . ' dias';
            } else {
                $fecha_hace = 'hoy';
            }
            return $fecha_hace;
	}
	
            /**
             * Metodo que retorna una coleccion de descripciones unificada para usar en autosuggest
             */
            static function getArrDescripcionsUnificado(){
                $c = new Criterio();
                $c->addTabla(AfipCitiCabecera::GEN_TABLA);
                $c->addOrden(AfipCitiCabecera::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $afip_citi_cabeceras = AfipCitiCabecera::getAfipCitiCabeceras(null, $c);

                $arr = array();
                foreach($afip_citi_cabeceras as $afip_citi_cabecera){
                    $descripcion = $afip_citi_cabecera->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>