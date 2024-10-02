<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BVtaPuntoVenta
{ 
	
	const SES_PAGINACION = 'adm_vtapuntoventa_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_vtapuntoventa_paginas_registros';
	const SES_CRITERIOS = 'adm_vtapuntoventa_criterios';
	
	const GEN_CLASE = 'VtaPuntoVenta';
	const GEN_TABLA = 'vta_punto_venta';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BVtaPuntoVenta */ 
	const GEN_ATTR_ID = 'vta_punto_venta.id';
	const GEN_ATTR_DESCRIPCION = 'vta_punto_venta.descripcion';
	const GEN_ATTR_VTA_TIPO_PUNTO_VENTA_ID = 'vta_punto_venta.vta_tipo_punto_venta_id';
	const GEN_ATTR_GRAL_EMPRESA_ID = 'vta_punto_venta.gral_empresa_id';
	const GEN_ATTR_GEO_LOCALIDAD_ID = 'vta_punto_venta.geo_localidad_id';
	const GEN_ATTR_DOMICILIO_FISCAL = 'vta_punto_venta.domicilio_fiscal';
	const GEN_ATTR_CODIGO = 'vta_punto_venta.codigo';
	const GEN_ATTR_NUMERO = 'vta_punto_venta.numero';
	const GEN_ATTR_NUMERO_TIMBRADO = 'vta_punto_venta.numero_timbrado';
	const GEN_ATTR_FECHA_INICIO_TIMBRADO = 'vta_punto_venta.fecha_inicio_timbrado';
	const GEN_ATTR_SERIE = 'vta_punto_venta.serie';
	const GEN_ATTR_NUMERO_ACTUAL = 'vta_punto_venta.numero_actual';
	const GEN_ATTR_TIPO_EMISION = 'vta_punto_venta.tipo_emision';
	const GEN_ATTR_BLOQUEADO = 'vta_punto_venta.bloqueado';
	const GEN_ATTR_FECHA_BAJA = 'vta_punto_venta.fecha_baja';
	const GEN_ATTR_REQUIERE_CAE = 'vta_punto_venta.requiere_cae';
	const GEN_ATTR_SOLICITA_CAE = 'vta_punto_venta.solicita_cae';
	const GEN_ATTR_AUTOINCREMENTAL = 'vta_punto_venta.autoincremental';
	const GEN_ATTR_OBSERVACION = 'vta_punto_venta.observacion';
	const GEN_ATTR_ORDEN = 'vta_punto_venta.orden';
	const GEN_ATTR_ESTADO = 'vta_punto_venta.estado';
	const GEN_ATTR_CREADO = 'vta_punto_venta.creado';
	const GEN_ATTR_CREADO_POR = 'vta_punto_venta.creado_por';
	const GEN_ATTR_MODIFICADO = 'vta_punto_venta.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'vta_punto_venta.modificado_por';

	/* Constantes de Atributos Min de BVtaPuntoVenta */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_VTA_TIPO_PUNTO_VENTA_ID = 'vta_tipo_punto_venta_id';
	const GEN_ATTR_MIN_GRAL_EMPRESA_ID = 'gral_empresa_id';
	const GEN_ATTR_MIN_GEO_LOCALIDAD_ID = 'geo_localidad_id';
	const GEN_ATTR_MIN_DOMICILIO_FISCAL = 'domicilio_fiscal';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_NUMERO = 'numero';
	const GEN_ATTR_MIN_NUMERO_TIMBRADO = 'numero_timbrado';
	const GEN_ATTR_MIN_FECHA_INICIO_TIMBRADO = 'fecha_inicio_timbrado';
	const GEN_ATTR_MIN_SERIE = 'serie';
	const GEN_ATTR_MIN_NUMERO_ACTUAL = 'numero_actual';
	const GEN_ATTR_MIN_TIPO_EMISION = 'tipo_emision';
	const GEN_ATTR_MIN_BLOQUEADO = 'bloqueado';
	const GEN_ATTR_MIN_FECHA_BAJA = 'fecha_baja';
	const GEN_ATTR_MIN_REQUIERE_CAE = 'requiere_cae';
	const GEN_ATTR_MIN_SOLICITA_CAE = 'solicita_cae';
	const GEN_ATTR_MIN_AUTOINCREMENTAL = 'autoincremental';
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
	

	/* Atributos de BVtaPuntoVenta */ 
	private $id;
	private $descripcion;
	private $vta_tipo_punto_venta_id;
	private $gral_empresa_id;
	private $geo_localidad_id;
	private $domicilio_fiscal;
	private $codigo;
	private $numero;
	private $numero_timbrado;
	private $fecha_inicio_timbrado;
	private $serie;
	private $numero_actual;
	private $tipo_emision;
	private $bloqueado;
	private $fecha_baja;
	private $requiere_cae;
	private $solicita_cae;
	private $autoincremental;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BVtaPuntoVenta */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getVtaTipoPuntoVentaId(){ if(isset($this->vta_tipo_punto_venta_id)){ return $this->vta_tipo_punto_venta_id; }else{ return 'null'; } }
	public function getGralEmpresaId(){ if(isset($this->gral_empresa_id)){ return $this->gral_empresa_id; }else{ return 'null'; } }
	public function getGeoLocalidadId(){ if(isset($this->geo_localidad_id)){ return $this->geo_localidad_id; }else{ return 'null'; } }
	public function getDomicilioFiscal(){ if(isset($this->domicilio_fiscal)){ return $this->domicilio_fiscal; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getNumero(){ if(isset($this->numero)){ return $this->numero; }else{ return ''; } }
	public function getNumeroTimbrado(){ if(isset($this->numero_timbrado)){ return $this->numero_timbrado; }else{ return ''; } }
	public function getFechaInicioTimbrado(){ if(isset($this->fecha_inicio_timbrado)){ return $this->fecha_inicio_timbrado; }else{ return ''; } }
	public function getSerie(){ if(isset($this->serie)){ return $this->serie; }else{ return ''; } }
	public function getNumeroActual(){ if(isset($this->numero_actual)){ return $this->numero_actual; }else{ return 0; } }
	public function getTipoEmision(){ if(isset($this->tipo_emision)){ return $this->tipo_emision; }else{ return ''; } }
	public function getBloqueado(){ if(isset($this->bloqueado)){ return $this->bloqueado; }else{ return ''; } }
	public function getFechaBaja(){ if(isset($this->fecha_baja)){ return $this->fecha_baja; }else{ return ''; } }
	public function getRequiereCae(){ if(isset($this->requiere_cae)){ return $this->requiere_cae; }else{ return 0; } }
	public function getSolicitaCae(){ if(isset($this->solicita_cae)){ return $this->solicita_cae; }else{ return 0; } }
	public function getAutoincremental(){ if(isset($this->autoincremental)){ return $this->autoincremental; }else{ return 0; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 'null'; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 'null'; } }

	/* Setters de BVtaPuntoVenta */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_VTA_TIPO_PUNTO_VENTA_ID."
				, ".self::GEN_ATTR_GRAL_EMPRESA_ID."
				, ".self::GEN_ATTR_GEO_LOCALIDAD_ID."
				, ".self::GEN_ATTR_DOMICILIO_FISCAL."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_NUMERO."
				, ".self::GEN_ATTR_NUMERO_TIMBRADO."
				, ".self::GEN_ATTR_FECHA_INICIO_TIMBRADO."
				, ".self::GEN_ATTR_SERIE."
				, ".self::GEN_ATTR_NUMERO_ACTUAL."
				, ".self::GEN_ATTR_TIPO_EMISION."
				, ".self::GEN_ATTR_BLOQUEADO."
				, ".self::GEN_ATTR_FECHA_BAJA."
				, ".self::GEN_ATTR_REQUIERE_CAE."
				, ".self::GEN_ATTR_SOLICITA_CAE."
				, ".self::GEN_ATTR_AUTOINCREMENTAL."
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
				$this->setVtaTipoPuntoVentaId($fila[self::GEN_ATTR_MIN_VTA_TIPO_PUNTO_VENTA_ID]);
				$this->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
				$this->setGeoLocalidadId($fila[self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID]);
				$this->setDomicilioFiscal($fila[self::GEN_ATTR_MIN_DOMICILIO_FISCAL]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setNumero($fila[self::GEN_ATTR_MIN_NUMERO]);
				$this->setNumeroTimbrado($fila[self::GEN_ATTR_MIN_NUMERO_TIMBRADO]);
				$this->setFechaInicioTimbrado($fila[self::GEN_ATTR_MIN_FECHA_INICIO_TIMBRADO]);
				$this->setSerie($fila[self::GEN_ATTR_MIN_SERIE]);
				$this->setNumeroActual($fila[self::GEN_ATTR_MIN_NUMERO_ACTUAL]);
				$this->setTipoEmision($fila[self::GEN_ATTR_MIN_TIPO_EMISION]);
				$this->setBloqueado($fila[self::GEN_ATTR_MIN_BLOQUEADO]);
				$this->setFechaBaja($fila[self::GEN_ATTR_MIN_FECHA_BAJA]);
				$this->setRequiereCae($fila[self::GEN_ATTR_MIN_REQUIERE_CAE]);
				$this->setSolicitaCae($fila[self::GEN_ATTR_MIN_SOLICITA_CAE]);
				$this->setAutoincremental($fila[self::GEN_ATTR_MIN_AUTOINCREMENTAL]);
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
	public function setVtaTipoPuntoVentaId($v){ $this->vta_tipo_punto_venta_id = $v; }
	public function setGralEmpresaId($v){ $this->gral_empresa_id = $v; }
	public function setGeoLocalidadId($v){ $this->geo_localidad_id = $v; }
	public function setDomicilioFiscal($v){ $this->domicilio_fiscal = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setNumero($v){ $this->numero = $v; }
	public function setNumeroTimbrado($v){ $this->numero_timbrado = $v; }
	public function setFechaInicioTimbrado($v){ $this->fecha_inicio_timbrado = $v; }
	public function setSerie($v){ $this->serie = $v; }
	public function setNumeroActual($v){ $this->numero_actual = $v; }
	public function setTipoEmision($v){ $this->tipo_emision = $v; }
	public function setBloqueado($v){ $this->bloqueado = $v; }
	public function setFechaBaja($v){ $this->fecha_baja = $v; }
	public function setRequiereCae($v){ $this->requiere_cae = $v; }
	public function setSolicitaCae($v){ $this->solicita_cae = $v; }
	public function setAutoincremental($v){ $this->autoincremental = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new VtaPuntoVenta();
            $o->setId($fila[VtaPuntoVenta::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setVtaTipoPuntoVentaId($fila[self::GEN_ATTR_MIN_VTA_TIPO_PUNTO_VENTA_ID]);
			$o->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
			$o->setGeoLocalidadId($fila[self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID]);
			$o->setDomicilioFiscal($fila[self::GEN_ATTR_MIN_DOMICILIO_FISCAL]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setNumero($fila[self::GEN_ATTR_MIN_NUMERO]);
			$o->setNumeroTimbrado($fila[self::GEN_ATTR_MIN_NUMERO_TIMBRADO]);
			$o->setFechaInicioTimbrado($fila[self::GEN_ATTR_MIN_FECHA_INICIO_TIMBRADO]);
			$o->setSerie($fila[self::GEN_ATTR_MIN_SERIE]);
			$o->setNumeroActual($fila[self::GEN_ATTR_MIN_NUMERO_ACTUAL]);
			$o->setTipoEmision($fila[self::GEN_ATTR_MIN_TIPO_EMISION]);
			$o->setBloqueado($fila[self::GEN_ATTR_MIN_BLOQUEADO]);
			$o->setFechaBaja($fila[self::GEN_ATTR_MIN_FECHA_BAJA]);
			$o->setRequiereCae($fila[self::GEN_ATTR_MIN_REQUIERE_CAE]);
			$o->setSolicitaCae($fila[self::GEN_ATTR_MIN_SOLICITA_CAE]);
			$o->setAutoincremental($fila[self::GEN_ATTR_MIN_AUTOINCREMENTAL]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BVtaPuntoVenta */ 	
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

	/* Cambia el estado de BVtaPuntoVenta */ 	
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

	/* Save de BVtaPuntoVenta */ 	
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
						, ".self::GEN_ATTR_MIN_VTA_TIPO_PUNTO_VENTA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID."
						, ".self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID."
						, ".self::GEN_ATTR_MIN_DOMICILIO_FISCAL."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_NUMERO."
						, ".self::GEN_ATTR_MIN_NUMERO_TIMBRADO."
						, ".self::GEN_ATTR_MIN_FECHA_INICIO_TIMBRADO."
						, ".self::GEN_ATTR_MIN_SERIE."
						, ".self::GEN_ATTR_MIN_NUMERO_ACTUAL."
						, ".self::GEN_ATTR_MIN_TIPO_EMISION."
						, ".self::GEN_ATTR_MIN_BLOQUEADO."
						, ".self::GEN_ATTR_MIN_FECHA_BAJA."
						, ".self::GEN_ATTR_MIN_REQUIERE_CAE."
						, ".self::GEN_ATTR_MIN_SOLICITA_CAE."
						, ".self::GEN_ATTR_MIN_AUTOINCREMENTAL."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('vta_punto_venta_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getVtaTipoPuntoVentaId()."
						, ".$this->getGralEmpresaId()."
						, ".$this->getGeoLocalidadId()."
						, '".$this->getDomicilioFiscal()."'
						, '".$this->getCodigo()."'
						, '".$this->getNumero()."'
						, '".$this->getNumeroTimbrado()."'
						, '".$this->getFechaInicioTimbrado()."'
						, '".$this->getSerie()."'
						, ".$this->getNumeroActual()."
						, '".$this->getTipoEmision()."'
						, '".$this->getBloqueado()."'
						, '".$this->getFechaBaja()."'
						, ".$this->getRequiereCae()."
						, ".$this->getSolicitaCae()."
						, ".$this->getAutoincremental()."
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('vta_punto_venta_seq')";
            
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
                 
				 ".VtaPuntoVenta::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_VTA_TIPO_PUNTO_VENTA_ID." = ".$this->getVtaTipoPuntoVentaId()."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID." = ".$this->getGralEmpresaId()."
						, ".self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID." = ".$this->getGeoLocalidadId()."
						, ".self::GEN_ATTR_MIN_DOMICILIO_FISCAL." = '".$this->getDomicilioFiscal()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_NUMERO." = '".$this->getNumero()."'
						, ".self::GEN_ATTR_MIN_NUMERO_TIMBRADO." = '".$this->getNumeroTimbrado()."'
						, ".self::GEN_ATTR_MIN_FECHA_INICIO_TIMBRADO." = '".$this->getFechaInicioTimbrado()."'
						, ".self::GEN_ATTR_MIN_SERIE." = '".$this->getSerie()."'
						, ".self::GEN_ATTR_MIN_NUMERO_ACTUAL." = ".$this->getNumeroActual()."
						, ".self::GEN_ATTR_MIN_TIPO_EMISION." = '".$this->getTipoEmision()."'
						, ".self::GEN_ATTR_MIN_BLOQUEADO." = '".$this->getBloqueado()."'
						, ".self::GEN_ATTR_MIN_FECHA_BAJA." = '".$this->getFechaBaja()."'
						, ".self::GEN_ATTR_MIN_REQUIERE_CAE." = ".$this->getRequiereCae()."
						, ".self::GEN_ATTR_MIN_SOLICITA_CAE." = ".$this->getSolicitaCae()."
						, ".self::GEN_ATTR_MIN_AUTOINCREMENTAL." = ".$this->getAutoincremental()."
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
						, ".self::GEN_ATTR_MIN_VTA_TIPO_PUNTO_VENTA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID."
						, ".self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID."
						, ".self::GEN_ATTR_MIN_DOMICILIO_FISCAL."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_NUMERO."
						, ".self::GEN_ATTR_MIN_NUMERO_TIMBRADO."
						, ".self::GEN_ATTR_MIN_FECHA_INICIO_TIMBRADO."
						, ".self::GEN_ATTR_MIN_SERIE."
						, ".self::GEN_ATTR_MIN_NUMERO_ACTUAL."
						, ".self::GEN_ATTR_MIN_TIPO_EMISION."
						, ".self::GEN_ATTR_MIN_BLOQUEADO."
						, ".self::GEN_ATTR_MIN_FECHA_BAJA."
						, ".self::GEN_ATTR_MIN_REQUIERE_CAE."
						, ".self::GEN_ATTR_MIN_SOLICITA_CAE."
						, ".self::GEN_ATTR_MIN_AUTOINCREMENTAL."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getDescripcion()."'
						, ".$this->getVtaTipoPuntoVentaId()."
						, ".$this->getGralEmpresaId()."
						, ".$this->getGeoLocalidadId()."
						, '".$this->getDomicilioFiscal()."'
						, '".$this->getCodigo()."'
						, '".$this->getNumero()."'
						, '".$this->getNumeroTimbrado()."'
						, '".$this->getFechaInicioTimbrado()."'
						, '".$this->getSerie()."'
						, ".$this->getNumeroActual()."
						, '".$this->getTipoEmision()."'
						, '".$this->getBloqueado()."'
						, '".$this->getFechaBaja()."'
						, ".$this->getRequiereCae()."
						, ".$this->getSolicitaCae()."
						, ".$this->getAutoincremental()."
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
                     
				 ".VtaPuntoVenta::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_VTA_TIPO_PUNTO_VENTA_ID." = ".$this->getVtaTipoPuntoVentaId()."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID." = ".$this->getGralEmpresaId()."
						, ".self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID." = ".$this->getGeoLocalidadId()."
						, ".self::GEN_ATTR_MIN_DOMICILIO_FISCAL." = '".$this->getDomicilioFiscal()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_NUMERO." = '".$this->getNumero()."'
						, ".self::GEN_ATTR_MIN_NUMERO_TIMBRADO." = '".$this->getNumeroTimbrado()."'
						, ".self::GEN_ATTR_MIN_FECHA_INICIO_TIMBRADO." = '".$this->getFechaInicioTimbrado()."'
						, ".self::GEN_ATTR_MIN_SERIE." = '".$this->getSerie()."'
						, ".self::GEN_ATTR_MIN_NUMERO_ACTUAL." = ".$this->getNumeroActual()."
						, ".self::GEN_ATTR_MIN_TIPO_EMISION." = '".$this->getTipoEmision()."'
						, ".self::GEN_ATTR_MIN_BLOQUEADO." = '".$this->getBloqueado()."'
						, ".self::GEN_ATTR_MIN_FECHA_BAJA." = '".$this->getFechaBaja()."'
						, ".self::GEN_ATTR_MIN_REQUIERE_CAE." = ".$this->getRequiereCae()."
						, ".self::GEN_ATTR_MIN_SOLICITA_CAE." = ".$this->getSolicitaCae()."
						, ".self::GEN_ATTR_MIN_AUTOINCREMENTAL." = ".$this->getAutoincremental()."
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
            $o = new VtaPuntoVenta();
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

	/* Delete de BVtaPuntoVenta */ 	
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
	
            // se elimina la coleccion de GralSucursalVtaPuntoVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralSucursalVtaPuntoVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralSucursalVtaPuntoVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliClienteVtaPuntoVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliClienteVtaPuntoVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliClienteVtaPuntoVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaNotaCreditos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaNotaCredito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaNotaCreditos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaNotaDebitos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaNotaDebitos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaRecibos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaRecibos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaPuntoVentaActuals relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaPuntoVentaActual::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaPuntoVentaActuals(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaPuntoVentaWsFeParamPuntoVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaPuntoVentaWsFeParamPuntoVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaPuntoVentaWsFeParamPuntoVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaPuntoVentaVtaPresupuestoTipoVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaPuntoVentaVtaPresupuestoTipoVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaPuntoVentaVtaPresupuestoTipoVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaRemitos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaRemito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaRemitos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaFacturas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaFacturas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteDebes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteDebes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteHabers relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteHabers(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaRemitoAjustes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaRemitoAjuste::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaRemitoAjustes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarVtaPuntoVenta(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getVtaPuntoVentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = VtaPuntoVenta::setAplicarFiltrosDeAlcance($criterio);

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
	
		$vtapuntoventas = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $vtapuntoventa = new VtaPuntoVenta();
                    $vtapuntoventa->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $vtapuntoventa->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$vtapuntoventa->setVtaTipoPuntoVentaId($fila[self::GEN_ATTR_MIN_VTA_TIPO_PUNTO_VENTA_ID]);
			$vtapuntoventa->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
			$vtapuntoventa->setGeoLocalidadId($fila[self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID]);
			$vtapuntoventa->setDomicilioFiscal($fila[self::GEN_ATTR_MIN_DOMICILIO_FISCAL]);
			$vtapuntoventa->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$vtapuntoventa->setNumero($fila[self::GEN_ATTR_MIN_NUMERO]);
			$vtapuntoventa->setNumeroTimbrado($fila[self::GEN_ATTR_MIN_NUMERO_TIMBRADO]);
			$vtapuntoventa->setFechaInicioTimbrado($fila[self::GEN_ATTR_MIN_FECHA_INICIO_TIMBRADO]);
			$vtapuntoventa->setSerie($fila[self::GEN_ATTR_MIN_SERIE]);
			$vtapuntoventa->setNumeroActual($fila[self::GEN_ATTR_MIN_NUMERO_ACTUAL]);
			$vtapuntoventa->setTipoEmision($fila[self::GEN_ATTR_MIN_TIPO_EMISION]);
			$vtapuntoventa->setBloqueado($fila[self::GEN_ATTR_MIN_BLOQUEADO]);
			$vtapuntoventa->setFechaBaja($fila[self::GEN_ATTR_MIN_FECHA_BAJA]);
			$vtapuntoventa->setRequiereCae($fila[self::GEN_ATTR_MIN_REQUIERE_CAE]);
			$vtapuntoventa->setSolicitaCae($fila[self::GEN_ATTR_MIN_SOLICITA_CAE]);
			$vtapuntoventa->setAutoincremental($fila[self::GEN_ATTR_MIN_AUTOINCREMENTAL]);
			$vtapuntoventa->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$vtapuntoventa->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$vtapuntoventa->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$vtapuntoventa->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$vtapuntoventa->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$vtapuntoventa->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$vtapuntoventa->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $vtapuntoventas[] = $vtapuntoventa;
		}
		
		return $vtapuntoventas;
	}	
	

	/* Método getVtaPuntoVentas Habilitados */ 	
	static function getVtaPuntoVentasHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return VtaPuntoVenta::getVtaPuntoVentas($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getVtaPuntoVentas para listado de Backend */ 	
	static function getVtaPuntoVentasDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return VtaPuntoVenta::getVtaPuntoVentas($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getVtaPuntoVentasCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = VtaPuntoVenta::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = VtaPuntoVenta::getVtaPuntoVentas($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaPuntoVentas filtrado para select */ 	
	static function getVtaPuntoVentasCmbF($paginador = null, $criterio = null){
            $col = VtaPuntoVenta::getVtaPuntoVentas($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaPuntoVentas filtrado por una coleccion de objetos foraneos de VtaTipoPuntoVenta */ 	
	static function getVtaPuntoVentasXVtaTipoPuntoVentas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaPuntoVenta::GEN_ATTR_VTA_TIPO_PUNTO_VENTA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaPuntoVenta::GEN_TABLA);
            $c->addOrden(VtaPuntoVenta::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaPuntoVenta::getVtaPuntoVentas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaTipoPuntoVentaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaPuntoVentas filtrado por una coleccion de objetos foraneos de GralEmpresa */ 	
	static function getVtaPuntoVentasXGralEmpresas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaPuntoVenta::GEN_ATTR_GRAL_EMPRESA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaPuntoVenta::GEN_TABLA);
            $c->addOrden(VtaPuntoVenta::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaPuntoVenta::getVtaPuntoVentas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralEmpresaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaPuntoVentas filtrado por una coleccion de objetos foraneos de GeoLocalidad */ 	
	static function getVtaPuntoVentasXGeoLocalidads($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaPuntoVenta::GEN_ATTR_GEO_LOCALIDAD_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaPuntoVenta::GEN_TABLA);
            $c->addOrden(VtaPuntoVenta::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaPuntoVenta::getVtaPuntoVentas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGeoLocalidadId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'vta_punto_venta_adm.php';
            $url_gestion = 'vta_punto_venta_gestion.php';
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
	

	/* Metodo getGralSucursalVtaPuntoVentas */ 	
	public function getGralSucursalVtaPuntoVentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralSucursalVtaPuntoVenta::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralSucursalVtaPuntoVenta::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralSucursalVtaPuntoVenta::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralSucursalVtaPuntoVenta::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralSucursalVtaPuntoVenta::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralSucursalVtaPuntoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralSucursalVtaPuntoVenta::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralSucursalVtaPuntoVenta::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralsucursalvtapuntoventas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralsucursalvtapuntoventa = GralSucursalVtaPuntoVenta::hidratarObjeto($fila);			
                $gralsucursalvtapuntoventas[] = $gralsucursalvtapuntoventa;
            }

            return $gralsucursalvtapuntoventas;
	}	
	

	/* Método getGralSucursalVtaPuntoVentasBloque para MasInfo */ 	
	public function getGralSucursalVtaPuntoVentasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralSucursalVtaPuntoVentas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralSucursalVtaPuntoVentas Habilitados */ 	
	public function getGralSucursalVtaPuntoVentasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralSucursalVtaPuntoVentas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralSucursalVtaPuntoVenta */ 	
	public function getGralSucursalVtaPuntoVenta($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralSucursalVtaPuntoVentas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralSucursalVtaPuntoVenta relacionadas */ 	
	public function deleteGralSucursalVtaPuntoVentas(){
            $obs = $this->getGralSucursalVtaPuntoVentas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralSucursalVtaPuntoVentasCmb() GralSucursalVtaPuntoVenta relacionadas */ 	
	public function getGralSucursalVtaPuntoVentasCmb(){
            $c = new Criterio();
            $c->add(GralSucursalVtaPuntoVenta::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralSucursalVtaPuntoVenta::GEN_TABLA);
            $c->setCriterios();

            $os = GralSucursalVtaPuntoVenta::getGralSucursalVtaPuntoVentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralSucursals (Coleccion) relacionados a traves de GralSucursalVtaPuntoVenta */ 	
	public function getGralSucursalsXGralSucursalVtaPuntoVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralSucursal::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralSucursalVtaPuntoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralSucursalVtaPuntoVenta::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralSucursal::GEN_TABLA);
            $c->addRealJoin(GralSucursalVtaPuntoVenta::GEN_TABLA, GralSucursalVtaPuntoVenta::GEN_ATTR_GRAL_SUCURSAL_ID, GralSucursal::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralSucursal::getGralSucursals($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralSucursals relacionados a traves de GralSucursalVtaPuntoVenta */ 	
	public function getCantidadGralSucursalsXGralSucursalVtaPuntoVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralSucursal::GEN_ATTR_ID);
            if($estado){
                $c->add(GralSucursal::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralSucursalVtaPuntoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralSucursalVtaPuntoVenta::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralSucursal::GEN_TABLA);
            $c->addRealJoin(GralSucursalVtaPuntoVenta::GEN_TABLA, GralSucursalVtaPuntoVenta::GEN_ATTR_GRAL_SUCURSAL_ID, GralSucursal::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralSucursal::getGralSucursals($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralSucursal (Objeto) relacionado a traves de GralSucursalVtaPuntoVenta */ 	
	public function getGralSucursalXGralSucursalVtaPuntoVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralSucursalsXGralSucursalVtaPuntoVenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliClienteVtaPuntoVentas */ 	
	public function getCliClienteVtaPuntoVentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliClienteVtaPuntoVenta::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliClienteVtaPuntoVenta::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliClienteVtaPuntoVenta::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliClienteVtaPuntoVenta::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliClienteVtaPuntoVenta::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliClienteVtaPuntoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliClienteVtaPuntoVenta::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliClienteVtaPuntoVenta::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cliclientevtapuntoventas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cliclientevtapuntoventa = CliClienteVtaPuntoVenta::hidratarObjeto($fila);			
                $cliclientevtapuntoventas[] = $cliclientevtapuntoventa;
            }

            return $cliclientevtapuntoventas;
	}	
	

	/* Método getCliClienteVtaPuntoVentasBloque para MasInfo */ 	
	public function getCliClienteVtaPuntoVentasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliClienteVtaPuntoVentas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliClienteVtaPuntoVentas Habilitados */ 	
	public function getCliClienteVtaPuntoVentasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliClienteVtaPuntoVentas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliClienteVtaPuntoVenta */ 	
	public function getCliClienteVtaPuntoVenta($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliClienteVtaPuntoVentas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliClienteVtaPuntoVenta relacionadas */ 	
	public function deleteCliClienteVtaPuntoVentas(){
            $obs = $this->getCliClienteVtaPuntoVentas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliClienteVtaPuntoVentasCmb() CliClienteVtaPuntoVenta relacionadas */ 	
	public function getCliClienteVtaPuntoVentasCmb(){
            $c = new Criterio();
            $c->add(CliClienteVtaPuntoVenta::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteVtaPuntoVenta::GEN_TABLA);
            $c->setCriterios();

            $os = CliClienteVtaPuntoVenta::getCliClienteVtaPuntoVentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de CliClienteVtaPuntoVenta */ 	
	public function getCliClientesXCliClienteVtaPuntoVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteVtaPuntoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteVtaPuntoVenta::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(CliClienteVtaPuntoVenta::GEN_TABLA, CliClienteVtaPuntoVenta::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de CliClienteVtaPuntoVenta */ 	
	public function getCantidadCliClientesXCliClienteVtaPuntoVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteVtaPuntoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteVtaPuntoVenta::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(CliClienteVtaPuntoVenta::GEN_TABLA, CliClienteVtaPuntoVenta::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de CliClienteVtaPuntoVenta */ 	
	public function getCliClienteXCliClienteVtaPuntoVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXCliClienteVtaPuntoVenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaNotaCreditos */ 	
	public function getVtaNotaCreditos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaNotaCredito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaNotaCredito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaNotaCredito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaNotaCredito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaNotaCredito::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaNotaCredito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaNotaCredito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtanotacreditos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtanotacredito = VtaNotaCredito::hidratarObjeto($fila);			
                $vtanotacreditos[] = $vtanotacredito;
            }

            return $vtanotacreditos;
	}	
	

	/* Método getVtaNotaCreditosBloque para MasInfo */ 	
	public function getVtaNotaCreditosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaNotaCreditos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaNotaCreditos Habilitados */ 	
	public function getVtaNotaCreditosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaNotaCreditos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaNotaCredito */ 	
	public function getVtaNotaCredito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaNotaCreditos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaNotaCredito relacionadas */ 	
	public function deleteVtaNotaCreditos(){
            $obs = $this->getVtaNotaCreditos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaNotaCreditosCmb() VtaNotaCredito relacionadas */ 	
	public function getVtaNotaCreditosCmb(){
            $c = new Criterio();
            $c->add(VtaNotaCredito::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaCredito::GEN_TABLA);
            $c->setCriterios();

            $os = VtaNotaCredito::getVtaNotaCreditosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaNotaCredito */ 	
	public function getCliClientesXVtaNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaCredito::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaNotaCredito::GEN_TABLA, VtaNotaCredito::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaNotaCredito */ 	
	public function getCantidadCliClientesXVtaNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaCredito::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaNotaCredito::GEN_TABLA, VtaNotaCredito::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaNotaCredito */ 	
	public function getCliClienteXVtaNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaNotaCredito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaNotaDebitos */ 	
	public function getVtaNotaDebitos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaNotaDebito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaNotaDebito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaNotaDebito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaNotaDebito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaNotaDebito::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaNotaDebito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaNotaDebito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtanotadebitos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtanotadebito = VtaNotaDebito::hidratarObjeto($fila);			
                $vtanotadebitos[] = $vtanotadebito;
            }

            return $vtanotadebitos;
	}	
	

	/* Método getVtaNotaDebitosBloque para MasInfo */ 	
	public function getVtaNotaDebitosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaNotaDebitos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaNotaDebitos Habilitados */ 	
	public function getVtaNotaDebitosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaNotaDebitos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaNotaDebito */ 	
	public function getVtaNotaDebito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaNotaDebitos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaNotaDebito relacionadas */ 	
	public function deleteVtaNotaDebitos(){
            $obs = $this->getVtaNotaDebitos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaNotaDebitosCmb() VtaNotaDebito relacionadas */ 	
	public function getVtaNotaDebitosCmb(){
            $c = new Criterio();
            $c->add(VtaNotaDebito::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->setCriterios();

            $os = VtaNotaDebito::getVtaNotaDebitosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaNotaDebito */ 	
	public function getCliClientesXVtaNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaDebito::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaNotaDebito::GEN_TABLA, VtaNotaDebito::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaNotaDebito */ 	
	public function getCantidadCliClientesXVtaNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaDebito::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaNotaDebito::GEN_TABLA, VtaNotaDebito::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaNotaDebito */ 	
	public function getCliClienteXVtaNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaNotaDebito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaRecibos */ 	
	public function getVtaRecibos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaRecibo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaRecibo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaRecibo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaRecibo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaRecibo::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaRecibo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaRecibo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtarecibos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtarecibo = VtaRecibo::hidratarObjeto($fila);			
                $vtarecibos[] = $vtarecibo;
            }

            return $vtarecibos;
	}	
	

	/* Método getVtaRecibosBloque para MasInfo */ 	
	public function getVtaRecibosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaRecibos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaRecibos Habilitados */ 	
	public function getVtaRecibosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaRecibos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaRecibo */ 	
	public function getVtaRecibo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaRecibos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaRecibo relacionadas */ 	
	public function deleteVtaRecibos(){
            $obs = $this->getVtaRecibos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaRecibosCmb() VtaRecibo relacionadas */ 	
	public function getVtaRecibosCmb(){
            $c = new Criterio();
            $c->add(VtaRecibo::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->setCriterios();

            $os = VtaRecibo::getVtaRecibosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaRecibo */ 	
	public function getCliClientesXVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRecibo::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaRecibo::GEN_TABLA, VtaRecibo::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaRecibo */ 	
	public function getCantidadCliClientesXVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRecibo::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaRecibo::GEN_TABLA, VtaRecibo::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaRecibo */ 	
	public function getCliClienteXVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaRecibo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaPuntoVentaActuals */ 	
	public function getVtaPuntoVentaActuals($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaPuntoVentaActual::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaPuntoVentaActual::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaPuntoVentaActual::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaPuntoVentaActual::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaPuntoVentaActual::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaPuntoVentaActual::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaPuntoVentaActual::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaPuntoVentaActual::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtapuntoventaactuals = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtapuntoventaactual = VtaPuntoVentaActual::hidratarObjeto($fila);			
                $vtapuntoventaactuals[] = $vtapuntoventaactual;
            }

            return $vtapuntoventaactuals;
	}	
	

	/* Método getVtaPuntoVentaActualsBloque para MasInfo */ 	
	public function getVtaPuntoVentaActualsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaPuntoVentaActuals($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaPuntoVentaActuals Habilitados */ 	
	public function getVtaPuntoVentaActualsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaPuntoVentaActuals($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaPuntoVentaActual */ 	
	public function getVtaPuntoVentaActual($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaPuntoVentaActuals($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaPuntoVentaActual relacionadas */ 	
	public function deleteVtaPuntoVentaActuals(){
            $obs = $this->getVtaPuntoVentaActuals();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaPuntoVentaActualsCmb() VtaPuntoVentaActual relacionadas */ 	
	public function getVtaPuntoVentaActualsCmb(){
            $c = new Criterio();
            $c->add(VtaPuntoVentaActual::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPuntoVentaActual::GEN_TABLA);
            $c->setCriterios();

            $os = VtaPuntoVentaActual::getVtaPuntoVentaActualsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaTipoPuntoVentas (Coleccion) relacionados a traves de VtaPuntoVentaActual */ 	
	public function getVtaTipoPuntoVentasXVtaPuntoVentaActual($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaTipoPuntoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPuntoVentaActual::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPuntoVentaActual::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoPuntoVenta::GEN_TABLA);
            $c->addRealJoin(VtaPuntoVentaActual::GEN_TABLA, VtaPuntoVentaActual::GEN_ATTR_VTA_TIPO_PUNTO_VENTA_ID, VtaTipoPuntoVenta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoPuntoVenta::getVtaTipoPuntoVentas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaTipoPuntoVentas relacionados a traves de VtaPuntoVentaActual */ 	
	public function getCantidadVtaTipoPuntoVentasXVtaPuntoVentaActual($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaTipoPuntoVenta::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaTipoPuntoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPuntoVentaActual::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPuntoVentaActual::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoPuntoVenta::GEN_TABLA);
            $c->addRealJoin(VtaPuntoVentaActual::GEN_TABLA, VtaPuntoVentaActual::GEN_ATTR_VTA_TIPO_PUNTO_VENTA_ID, VtaTipoPuntoVenta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoPuntoVenta::getVtaTipoPuntoVentas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaTipoPuntoVenta (Objeto) relacionado a traves de VtaPuntoVentaActual */ 	
	public function getVtaTipoPuntoVentaXVtaPuntoVentaActual($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaTipoPuntoVentasXVtaPuntoVentaActual($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaPuntoVentaWsFeParamPuntoVentas */ 	
	public function getVtaPuntoVentaWsFeParamPuntoVentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaPuntoVentaWsFeParamPuntoVenta::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaPuntoVentaWsFeParamPuntoVenta::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaPuntoVentaWsFeParamPuntoVenta::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaPuntoVentaWsFeParamPuntoVenta::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaPuntoVentaWsFeParamPuntoVenta::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaPuntoVentaWsFeParamPuntoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaPuntoVentaWsFeParamPuntoVenta::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaPuntoVentaWsFeParamPuntoVenta::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtapuntoventawsfeparampuntoventas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtapuntoventawsfeparampuntoventa = VtaPuntoVentaWsFeParamPuntoVenta::hidratarObjeto($fila);			
                $vtapuntoventawsfeparampuntoventas[] = $vtapuntoventawsfeparampuntoventa;
            }

            return $vtapuntoventawsfeparampuntoventas;
	}	
	

	/* Método getVtaPuntoVentaWsFeParamPuntoVentasBloque para MasInfo */ 	
	public function getVtaPuntoVentaWsFeParamPuntoVentasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaPuntoVentaWsFeParamPuntoVentas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaPuntoVentaWsFeParamPuntoVentas Habilitados */ 	
	public function getVtaPuntoVentaWsFeParamPuntoVentasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaPuntoVentaWsFeParamPuntoVentas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaPuntoVentaWsFeParamPuntoVenta */ 	
	public function getVtaPuntoVentaWsFeParamPuntoVenta($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaPuntoVentaWsFeParamPuntoVentas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaPuntoVentaWsFeParamPuntoVenta relacionadas */ 	
	public function deleteVtaPuntoVentaWsFeParamPuntoVentas(){
            $obs = $this->getVtaPuntoVentaWsFeParamPuntoVentas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaPuntoVentaWsFeParamPuntoVentasCmb() VtaPuntoVentaWsFeParamPuntoVenta relacionadas */ 	
	public function getVtaPuntoVentaWsFeParamPuntoVentasCmb(){
            $c = new Criterio();
            $c->add(VtaPuntoVentaWsFeParamPuntoVenta::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPuntoVentaWsFeParamPuntoVenta::GEN_TABLA);
            $c->setCriterios();

            $os = VtaPuntoVentaWsFeParamPuntoVenta::getVtaPuntoVentaWsFeParamPuntoVentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener WsFeParamPuntoVentas (Coleccion) relacionados a traves de VtaPuntoVentaWsFeParamPuntoVenta */ 	
	public function getWsFeParamPuntoVentasXVtaPuntoVentaWsFeParamPuntoVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(WsFeParamPuntoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPuntoVentaWsFeParamPuntoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPuntoVentaWsFeParamPuntoVenta::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeParamPuntoVenta::GEN_TABLA);
            $c->addRealJoin(VtaPuntoVentaWsFeParamPuntoVenta::GEN_TABLA, VtaPuntoVentaWsFeParamPuntoVenta::GEN_ATTR_WS_FE_PARAM_PUNTO_VENTA_ID, WsFeParamPuntoVenta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = WsFeParamPuntoVenta::getWsFeParamPuntoVentas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de WsFeParamPuntoVentas relacionados a traves de VtaPuntoVentaWsFeParamPuntoVenta */ 	
	public function getCantidadWsFeParamPuntoVentasXVtaPuntoVentaWsFeParamPuntoVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(WsFeParamPuntoVenta::GEN_ATTR_ID);
            if($estado){
                $c->add(WsFeParamPuntoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPuntoVentaWsFeParamPuntoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPuntoVentaWsFeParamPuntoVenta::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeParamPuntoVenta::GEN_TABLA);
            $c->addRealJoin(VtaPuntoVentaWsFeParamPuntoVenta::GEN_TABLA, VtaPuntoVentaWsFeParamPuntoVenta::GEN_ATTR_WS_FE_PARAM_PUNTO_VENTA_ID, WsFeParamPuntoVenta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = WsFeParamPuntoVenta::getWsFeParamPuntoVentas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener WsFeParamPuntoVenta (Objeto) relacionado a traves de VtaPuntoVentaWsFeParamPuntoVenta */ 	
	public function getWsFeParamPuntoVentaXVtaPuntoVentaWsFeParamPuntoVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getWsFeParamPuntoVentasXVtaPuntoVentaWsFeParamPuntoVenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaPuntoVentaVtaPresupuestoTipoVentas */ 	
	public function getVtaPuntoVentaVtaPresupuestoTipoVentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaPuntoVentaVtaPresupuestoTipoVenta::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaPuntoVentaVtaPresupuestoTipoVenta::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaPuntoVentaVtaPresupuestoTipoVenta::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaPuntoVentaVtaPresupuestoTipoVenta::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaPuntoVentaVtaPresupuestoTipoVenta::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaPuntoVentaVtaPresupuestoTipoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaPuntoVentaVtaPresupuestoTipoVenta::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaPuntoVentaVtaPresupuestoTipoVenta::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtapuntoventavtapresupuestotipoventas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtapuntoventavtapresupuestotipoventa = VtaPuntoVentaVtaPresupuestoTipoVenta::hidratarObjeto($fila);			
                $vtapuntoventavtapresupuestotipoventas[] = $vtapuntoventavtapresupuestotipoventa;
            }

            return $vtapuntoventavtapresupuestotipoventas;
	}	
	

	/* Método getVtaPuntoVentaVtaPresupuestoTipoVentasBloque para MasInfo */ 	
	public function getVtaPuntoVentaVtaPresupuestoTipoVentasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaPuntoVentaVtaPresupuestoTipoVentas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaPuntoVentaVtaPresupuestoTipoVentas Habilitados */ 	
	public function getVtaPuntoVentaVtaPresupuestoTipoVentasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaPuntoVentaVtaPresupuestoTipoVentas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaPuntoVentaVtaPresupuestoTipoVenta */ 	
	public function getVtaPuntoVentaVtaPresupuestoTipoVenta($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaPuntoVentaVtaPresupuestoTipoVentas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaPuntoVentaVtaPresupuestoTipoVenta relacionadas */ 	
	public function deleteVtaPuntoVentaVtaPresupuestoTipoVentas(){
            $obs = $this->getVtaPuntoVentaVtaPresupuestoTipoVentas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaPuntoVentaVtaPresupuestoTipoVentasCmb() VtaPuntoVentaVtaPresupuestoTipoVenta relacionadas */ 	
	public function getVtaPuntoVentaVtaPresupuestoTipoVentasCmb(){
            $c = new Criterio();
            $c->add(VtaPuntoVentaVtaPresupuestoTipoVenta::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPuntoVentaVtaPresupuestoTipoVenta::GEN_TABLA);
            $c->setCriterios();

            $os = VtaPuntoVentaVtaPresupuestoTipoVenta::getVtaPuntoVentaVtaPresupuestoTipoVentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaPresupuestoTipoVentas (Coleccion) relacionados a traves de VtaPuntoVentaVtaPresupuestoTipoVenta */ 	
	public function getVtaPresupuestoTipoVentasXVtaPuntoVentaVtaPresupuestoTipoVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaPresupuestoTipoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPuntoVentaVtaPresupuestoTipoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPuntoVentaVtaPresupuestoTipoVenta::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuestoTipoVenta::GEN_TABLA);
            $c->addRealJoin(VtaPuntoVentaVtaPresupuestoTipoVenta::GEN_TABLA, VtaPuntoVentaVtaPresupuestoTipoVenta::GEN_ATTR_VTA_PRESUPUESTO_TIPO_VENTA_ID, VtaPresupuestoTipoVenta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPresupuestoTipoVenta::getVtaPresupuestoTipoVentas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaPresupuestoTipoVentas relacionados a traves de VtaPuntoVentaVtaPresupuestoTipoVenta */ 	
	public function getCantidadVtaPresupuestoTipoVentasXVtaPuntoVentaVtaPresupuestoTipoVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaPresupuestoTipoVenta::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaPresupuestoTipoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPuntoVentaVtaPresupuestoTipoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPuntoVentaVtaPresupuestoTipoVenta::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuestoTipoVenta::GEN_TABLA);
            $c->addRealJoin(VtaPuntoVentaVtaPresupuestoTipoVenta::GEN_TABLA, VtaPuntoVentaVtaPresupuestoTipoVenta::GEN_ATTR_VTA_PRESUPUESTO_TIPO_VENTA_ID, VtaPresupuestoTipoVenta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPresupuestoTipoVenta::getVtaPresupuestoTipoVentas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaPresupuestoTipoVenta (Objeto) relacionado a traves de VtaPuntoVentaVtaPresupuestoTipoVenta */ 	
	public function getVtaPresupuestoTipoVentaXVtaPuntoVentaVtaPresupuestoTipoVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaPresupuestoTipoVentasXVtaPuntoVentaVtaPresupuestoTipoVenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaRemitos */ 	
	public function getVtaRemitos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaRemito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaRemito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaRemito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaRemito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaRemito::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaRemito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaRemito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaRemito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaremitos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaremito = VtaRemito::hidratarObjeto($fila);			
                $vtaremitos[] = $vtaremito;
            }

            return $vtaremitos;
	}	
	

	/* Método getVtaRemitosBloque para MasInfo */ 	
	public function getVtaRemitosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaRemitos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaRemitos Habilitados */ 	
	public function getVtaRemitosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaRemitos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaRemito */ 	
	public function getVtaRemito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaRemitos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaRemito relacionadas */ 	
	public function deleteVtaRemitos(){
            $obs = $this->getVtaRemitos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaRemitosCmb() VtaRemito relacionadas */ 	
	public function getVtaRemitosCmb(){
            $c = new Criterio();
            $c->add(VtaRemito::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRemito::GEN_TABLA);
            $c->setCriterios();

            $os = VtaRemito::getVtaRemitosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaRemito */ 	
	public function getCliClientesXVtaRemito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRemito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRemito::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaRemito::GEN_TABLA, VtaRemito::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaRemito */ 	
	public function getCantidadCliClientesXVtaRemito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRemito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRemito::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaRemito::GEN_TABLA, VtaRemito::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaRemito */ 	
	public function getCliClienteXVtaRemito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaRemito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaFacturas */ 	
	public function getVtaFacturas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaFactura::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaFactura::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaFactura::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaFactura::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaFactura::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaFactura::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaFactura::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtafacturas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtafactura = VtaFactura::hidratarObjeto($fila);			
                $vtafacturas[] = $vtafactura;
            }

            return $vtafacturas;
	}	
	

	/* Método getVtaFacturasBloque para MasInfo */ 	
	public function getVtaFacturasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaFacturas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaFacturas Habilitados */ 	
	public function getVtaFacturasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaFacturas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaFactura */ 	
	public function getVtaFactura($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaFacturas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaFactura relacionadas */ 	
	public function deleteVtaFacturas(){
            $obs = $this->getVtaFacturas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaFacturasCmb() VtaFactura relacionadas */ 	
	public function getVtaFacturasCmb(){
            $c = new Criterio();
            $c->add(VtaFactura::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->setCriterios();

            $os = VtaFactura::getVtaFacturasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaFactura */ 	
	public function getCliClientesXVtaFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFactura::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaFactura::GEN_TABLA, VtaFactura::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaFactura */ 	
	public function getCantidadCliClientesXVtaFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFactura::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaFactura::GEN_TABLA, VtaFactura::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaFactura */ 	
	public function getCliClienteXVtaFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaFactura($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteDebes */ 	
	public function getVtaAjusteDebes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteDebe::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteDebe::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteDebe::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteDebe::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteDebe::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteDebe::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustedebes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustedebe = VtaAjusteDebe::hidratarObjeto($fila);			
                $vtaajustedebes[] = $vtaajustedebe;
            }

            return $vtaajustedebes;
	}	
	

	/* Método getVtaAjusteDebesBloque para MasInfo */ 	
	public function getVtaAjusteDebesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteDebes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteDebes Habilitados */ 	
	public function getVtaAjusteDebesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteDebes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteDebe */ 	
	public function getVtaAjusteDebe($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteDebes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteDebe relacionadas */ 	
	public function deleteVtaAjusteDebes(){
            $obs = $this->getVtaAjusteDebes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteDebesCmb() VtaAjusteDebe relacionadas */ 	
	public function getVtaAjusteDebesCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteDebe::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteDebe::getVtaAjusteDebesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaAjusteDebe */ 	
	public function getCliClientesXVtaAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebe::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebe::GEN_TABLA, VtaAjusteDebe::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaAjusteDebe */ 	
	public function getCantidadCliClientesXVtaAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebe::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebe::GEN_TABLA, VtaAjusteDebe::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaAjusteDebe */ 	
	public function getCliClienteXVtaAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaAjusteDebe($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteHabers */ 	
	public function getVtaAjusteHabers($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteHaber::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteHaber::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteHaber::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteHaber::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteHaber::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteHaber::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustehabers = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustehaber = VtaAjusteHaber::hidratarObjeto($fila);			
                $vtaajustehabers[] = $vtaajustehaber;
            }

            return $vtaajustehabers;
	}	
	

	/* Método getVtaAjusteHabersBloque para MasInfo */ 	
	public function getVtaAjusteHabersParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteHabers($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteHabers Habilitados */ 	
	public function getVtaAjusteHabersHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteHabers($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteHaber */ 	
	public function getVtaAjusteHaber($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteHabers($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteHaber relacionadas */ 	
	public function deleteVtaAjusteHabers(){
            $obs = $this->getVtaAjusteHabers();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteHabersCmb() VtaAjusteHaber relacionadas */ 	
	public function getVtaAjusteHabersCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteHaber::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteHaber::getVtaAjusteHabersCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaAjusteHaber */ 	
	public function getCliClientesXVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaber::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaber::GEN_TABLA, VtaAjusteHaber::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaAjusteHaber */ 	
	public function getCantidadCliClientesXVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaber::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaber::GEN_TABLA, VtaAjusteHaber::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaAjusteHaber */ 	
	public function getCliClienteXVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaAjusteHaber($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaRemitoAjustes */ 	
	public function getVtaRemitoAjustes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaRemitoAjuste::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaRemitoAjuste::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaRemitoAjuste::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaRemitoAjuste::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaRemitoAjuste::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaRemitoAjuste::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaRemitoAjuste::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaRemitoAjuste::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaremitoajustes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaremitoajuste = VtaRemitoAjuste::hidratarObjeto($fila);			
                $vtaremitoajustes[] = $vtaremitoajuste;
            }

            return $vtaremitoajustes;
	}	
	

	/* Método getVtaRemitoAjustesBloque para MasInfo */ 	
	public function getVtaRemitoAjustesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaRemitoAjustes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaRemitoAjustes Habilitados */ 	
	public function getVtaRemitoAjustesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaRemitoAjustes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaRemitoAjuste */ 	
	public function getVtaRemitoAjuste($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaRemitoAjustes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaRemitoAjuste relacionadas */ 	
	public function deleteVtaRemitoAjustes(){
            $obs = $this->getVtaRemitoAjustes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaRemitoAjustesCmb() VtaRemitoAjuste relacionadas */ 	
	public function getVtaRemitoAjustesCmb(){
            $c = new Criterio();
            $c->add(VtaRemitoAjuste::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRemitoAjuste::GEN_TABLA);
            $c->setCriterios();

            $os = VtaRemitoAjuste::getVtaRemitoAjustesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaRemitoAjuste */ 	
	public function getCliClientesXVtaRemitoAjuste($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRemitoAjuste::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRemitoAjuste::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaRemitoAjuste::GEN_TABLA, VtaRemitoAjuste::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaRemitoAjuste */ 	
	public function getCantidadCliClientesXVtaRemitoAjuste($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRemitoAjuste::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRemitoAjuste::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaRemitoAjuste::GEN_TABLA, VtaRemitoAjuste::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaRemitoAjuste */ 	
	public function getCliClienteXVtaRemitoAjuste($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaRemitoAjuste($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los GralSucursals asignados a VtaPuntoVenta */ 	
	public function getGralSucursalVtaPuntoVentasId(){
            $ids = array();
            foreach($this->getGralSucursalVtaPuntoVentas() as $o){
            
                $ids[] = $o->getGralSucursalId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos GralSucursals asignados al VtaPuntoVenta */ 	
	public function setGralSucursalVtaPuntoVentas($ids){
            $this->deleteGralSucursalVtaPuntoVentas();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new GralSucursalVtaPuntoVenta();
                    $o->setGralSucursalId($id);
                    $o->setVtaPuntoVentaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion GralSucursal en el alta de VtaPuntoVenta */ 	
	public function getAltaMostrarBloqueRelacionGralSucursalVtaPuntoVenta(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los CliClientes asignados a VtaPuntoVenta */ 	
	public function getCliClienteVtaPuntoVentasId(){
            $ids = array();
            foreach($this->getCliClienteVtaPuntoVentas() as $o){
            
                $ids[] = $o->getCliClienteId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos CliClientes asignados al VtaPuntoVenta */ 	
	public function setCliClienteVtaPuntoVentas($ids){
            $this->deleteCliClienteVtaPuntoVentas();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new CliClienteVtaPuntoVenta();
                    $o->setCliClienteId($id);
                    $o->setVtaPuntoVentaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion CliCliente en el alta de VtaPuntoVenta */ 	
	public function getAltaMostrarBloqueRelacionCliClienteVtaPuntoVenta(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los WsFeParamPuntoVentas asignados a VtaPuntoVenta */ 	
	public function getVtaPuntoVentaWsFeParamPuntoVentasId(){
            $ids = array();
            foreach($this->getVtaPuntoVentaWsFeParamPuntoVentas() as $o){
            
                $ids[] = $o->getWsFeParamPuntoVentaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos WsFeParamPuntoVentas asignados al VtaPuntoVenta */ 	
	public function setVtaPuntoVentaWsFeParamPuntoVentas($ids){
            $this->deleteVtaPuntoVentaWsFeParamPuntoVentas();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaPuntoVentaWsFeParamPuntoVenta();
                    $o->setWsFeParamPuntoVentaId($id);
                    $o->setVtaPuntoVentaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion WsFeParamPuntoVenta en el alta de VtaPuntoVenta */ 	
	public function getAltaMostrarBloqueRelacionVtaPuntoVentaWsFeParamPuntoVenta(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaPresupuestoTipoVentas asignados a VtaPuntoVenta */ 	
	public function getVtaPuntoVentaVtaPresupuestoTipoVentasId(){
            $ids = array();
            foreach($this->getVtaPuntoVentaVtaPresupuestoTipoVentas() as $o){
            
                $ids[] = $o->getVtaPresupuestoTipoVentaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaPresupuestoTipoVentas asignados al VtaPuntoVenta */ 	
	public function setVtaPuntoVentaVtaPresupuestoTipoVentas($ids){
            $this->deleteVtaPuntoVentaVtaPresupuestoTipoVentas();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaPuntoVentaVtaPresupuestoTipoVenta();
                    $o->setVtaPresupuestoTipoVentaId($id);
                    $o->setVtaPuntoVentaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaPresupuestoTipoVenta en el alta de VtaPuntoVenta */ 	
	public function getAltaMostrarBloqueRelacionVtaPuntoVentaVtaPresupuestoTipoVenta(){
            return true;
	}
	

	/* Metodo que retorna el VtaTipoPuntoVenta (Clave Foranea) */ 	
    public function getVtaTipoPuntoVenta(){
        $o = new VtaTipoPuntoVenta();
        $o->setId($this->getVtaTipoPuntoVentaId());
        return $o;			
    }

	/* Metodo que retorna el VtaTipoPuntoVenta (Clave Foranea) en Array */ 	
    public function getVtaTipoPuntoVentaEnArray(&$arr_os){
        if($this->getVtaTipoPuntoVentaId() != 'null'){
            if(isset($arr_os[$this->getVtaTipoPuntoVentaId()])){
                $o = $arr_os[$this->getVtaTipoPuntoVentaId()];
            }else{
                $o = VtaTipoPuntoVenta::getOxId($this->getVtaTipoPuntoVentaId());
                if($o){
                    $arr_os[$this->getVtaTipoPuntoVentaId()] = $o;
                }
            }
        }else{
            $o = new VtaTipoPuntoVenta();
        }
        return $o;		
    }

	/* Metodo que retorna el GralEmpresa (Clave Foranea) */ 	
    public function getGralEmpresa(){
        $o = new GralEmpresa();
        $o->setId($this->getGralEmpresaId());
        return $o;			
    }

	/* Metodo que retorna el GralEmpresa (Clave Foranea) en Array */ 	
    public function getGralEmpresaEnArray(&$arr_os){
        if($this->getGralEmpresaId() != 'null'){
            if(isset($arr_os[$this->getGralEmpresaId()])){
                $o = $arr_os[$this->getGralEmpresaId()];
            }else{
                $o = GralEmpresa::getOxId($this->getGralEmpresaId());
                if($o){
                    $arr_os[$this->getGralEmpresaId()] = $o;
                }
            }
        }else{
            $o = new GralEmpresa();
        }
        return $o;		
    }

	/* Metodo que retorna el GeoLocalidad (Clave Foranea) */ 	
    public function getGeoLocalidad(){
        $o = new GeoLocalidad();
        $o->setId($this->getGeoLocalidadId());
        return $o;			
    }

	/* Metodo que retorna el GeoLocalidad (Clave Foranea) en Array */ 	
    public function getGeoLocalidadEnArray(&$arr_os){
        if($this->getGeoLocalidadId() != 'null'){
            if(isset($arr_os[$this->getGeoLocalidadId()])){
                $o = $arr_os[$this->getGeoLocalidadId()];
            }else{
                $o = GeoLocalidad::getOxId($this->getGeoLocalidadId());
                if($o){
                    $arr_os[$this->getGeoLocalidadId()] = $o;
                }
            }
        }else{
            $o = new GeoLocalidad();
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
            		
        if($contexto_solicitante != VtaTipoPuntoVenta::GEN_CLASE){
            if($this->getVtaTipoPuntoVenta()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaTipoPuntoVenta::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaTipoPuntoVenta()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralEmpresa::GEN_CLASE){
            if($this->getGralEmpresa()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralEmpresa::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralEmpresa()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GeoLocalidad::GEN_CLASE){
            if($this->getGeoLocalidad()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GeoLocalidad::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGeoLocalidad()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM vta_punto_venta'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'vta_punto_venta';");
            
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

            $obs = self::getVtaPuntoVentas($paginador, $criterio);
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

            $obs = self::getVtaPuntoVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPuntoVentas($paginador, $criterio);
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

            $obs = self::getVtaPuntoVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_tipo_punto_venta_id' */ 	
	static function getOxVtaTipoPuntoVentaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_TIPO_PUNTO_VENTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPuntoVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_tipo_punto_venta_id' */ 	
	static function getOsxVtaTipoPuntoVentaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_TIPO_PUNTO_VENTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPuntoVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_empresa_id' */ 	
	static function getOxGralEmpresaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_EMPRESA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPuntoVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_empresa_id' */ 	
	static function getOsxGralEmpresaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_EMPRESA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPuntoVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'geo_localidad_id' */ 	
	static function getOxGeoLocalidadId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GEO_LOCALIDAD_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPuntoVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'geo_localidad_id' */ 	
	static function getOsxGeoLocalidadId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GEO_LOCALIDAD_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPuntoVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'domicilio_fiscal' */ 	
	static function getOxDomicilioFiscal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DOMICILIO_FISCAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPuntoVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'domicilio_fiscal' */ 	
	static function getOsxDomicilioFiscal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DOMICILIO_FISCAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPuntoVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPuntoVentas($paginador, $criterio);
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

            $obs = self::getVtaPuntoVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero' */ 	
	static function getOxNumero($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPuntoVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'numero' */ 	
	static function getOsxNumero($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPuntoVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_timbrado' */ 	
	static function getOxNumeroTimbrado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_TIMBRADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPuntoVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'numero_timbrado' */ 	
	static function getOsxNumeroTimbrado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_TIMBRADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPuntoVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_inicio_timbrado' */ 	
	static function getOxFechaInicioTimbrado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_INICIO_TIMBRADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPuntoVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha_inicio_timbrado' */ 	
	static function getOsxFechaInicioTimbrado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_INICIO_TIMBRADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPuntoVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'serie' */ 	
	static function getOxSerie($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_SERIE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPuntoVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'serie' */ 	
	static function getOsxSerie($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_SERIE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPuntoVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_actual' */ 	
	static function getOxNumeroActual($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_ACTUAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPuntoVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'numero_actual' */ 	
	static function getOsxNumeroActual($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_ACTUAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPuntoVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'tipo_emision' */ 	
	static function getOxTipoEmision($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_TIPO_EMISION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPuntoVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'tipo_emision' */ 	
	static function getOsxTipoEmision($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_TIPO_EMISION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPuntoVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'bloqueado' */ 	
	static function getOxBloqueado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_BLOQUEADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPuntoVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'bloqueado' */ 	
	static function getOsxBloqueado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_BLOQUEADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPuntoVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_baja' */ 	
	static function getOxFechaBaja($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_BAJA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPuntoVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha_baja' */ 	
	static function getOsxFechaBaja($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_BAJA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPuntoVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'requiere_cae' */ 	
	static function getOxRequiereCae($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_REQUIERE_CAE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPuntoVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'requiere_cae' */ 	
	static function getOsxRequiereCae($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_REQUIERE_CAE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPuntoVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'solicita_cae' */ 	
	static function getOxSolicitaCae($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_SOLICITA_CAE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPuntoVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'solicita_cae' */ 	
	static function getOsxSolicitaCae($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_SOLICITA_CAE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPuntoVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'autoincremental' */ 	
	static function getOxAutoincremental($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AUTOINCREMENTAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPuntoVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'autoincremental' */ 	
	static function getOsxAutoincremental($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AUTOINCREMENTAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPuntoVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPuntoVentas($paginador, $criterio);
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

            $obs = self::getVtaPuntoVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPuntoVentas($paginador, $criterio);
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

            $obs = self::getVtaPuntoVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPuntoVentas($paginador, $criterio);
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

            $obs = self::getVtaPuntoVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPuntoVentas($paginador, $criterio);
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

            $obs = self::getVtaPuntoVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPuntoVentas($paginador, $criterio);
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

            $obs = self::getVtaPuntoVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPuntoVentas($paginador, $criterio);
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

            $obs = self::getVtaPuntoVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPuntoVentas($paginador, $criterio);
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

            $obs = self::getVtaPuntoVentas(null, $criterio);
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

            $obs = self::getVtaPuntoVentas($paginador, $criterio);
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

            $obs = self::getVtaPuntoVentas($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'vta_punto_venta_adm');
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

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha_inicio_timbrado' */ 	
	public function getFechaInicioTimbradoDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFechaInicioTimbrado(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaInicioTimbradoDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaInicioTimbradoDiferenciaDias();
        
            if ($fecha_hace > 0) {
                $fecha_hace = 'hace ' . abs($fecha_hace) . ' dias';
            } elseif ($fecha_hace < 0) {
                $fecha_hace = 'faltan ' . abs($fecha_hace) . ' dias';
            } else {
                $fecha_hace = 'hoy';
            }
            return $fecha_hace;
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

	/* retorna coleccion para mostrar en bloque vinculos 'modificado_por' */ 	
	public function getVtaPuntoVentaActualsParaBloqueVinculo($palabra, $pagina){
            $c = new Criterio();

            $c->addInicioSubconsulta();
            $c->add(VtaPuntoVentaActual::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getId(), Criterio::IGUAL, false, '');
            $c->addFinSubconsulta();

            $c->addInicioSubconsulta();
            $c->add(VtaPuntoVentaActual::GEN_ATTR_ID, '%'.$palabra.'%', Criterio::LIKE);
            
                $c->add(VtaPuntoVentaActual::GEN_ATTR_DESCRIPCION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(VtaPuntoVentaActual::GEN_ATTR_OBSERVACION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
            $c->addFinSubconsulta();

            $c->addTabla(VtaPuntoVentaActual::GEN_TABLA);
            $c->addOrden('2');
            $c->setCriterios();

            $paginador = new Paginador(50, $pagina);

            $vta_punto_venta_actuals = VtaPuntoVentaActual::getVtaPuntoVentaActuals($paginador, $c);

            $arr['COLECCION'] = $vta_punto_venta_actuals;
            $arr['PAGINADOR'] = $paginador;
            return $arr;
	}
	
            /**
             * Metodo que retorna una coleccion de descripciones unificada para usar en autosuggest
             */
            static function getArrDescripcionsUnificado(){
                $c = new Criterio();
                $c->addTabla(VtaPuntoVenta::GEN_TABLA);
                $c->addOrden(VtaPuntoVenta::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $vta_punto_ventas = VtaPuntoVenta::getVtaPuntoVentas(null, $c);

                $arr = array();
                foreach($vta_punto_ventas as $vta_punto_venta){
                    $descripcion = $vta_punto_venta->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>