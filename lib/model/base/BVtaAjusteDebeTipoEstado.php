<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BVtaAjusteDebeTipoEstado
{ 
	
	const SES_PAGINACION = 'adm_vtaajustedebetipoestado_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_vtaajustedebetipoestado_paginas_registros';
	const SES_CRITERIOS = 'adm_vtaajustedebetipoestado_criterios';
	
	const GEN_CLASE = 'VtaAjusteDebeTipoEstado';
	const GEN_TABLA = 'vta_ajuste_debe_tipo_estado';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BVtaAjusteDebeTipoEstado */ 
	const GEN_ATTR_ID = 'vta_ajuste_debe_tipo_estado.id';
	const GEN_ATTR_DESCRIPCION = 'vta_ajuste_debe_tipo_estado.descripcion';
	const GEN_ATTR_CODIGO = 'vta_ajuste_debe_tipo_estado.codigo';
	const GEN_ATTR_ACTIVO = 'vta_ajuste_debe_tipo_estado.activo';
	const GEN_ATTR_TERMINAL = 'vta_ajuste_debe_tipo_estado.terminal';
	const GEN_ATTR_IMPUTABLE = 'vta_ajuste_debe_tipo_estado.imputable';
	const GEN_ATTR_GESTIONABLE = 'vta_ajuste_debe_tipo_estado.gestionable';
	const GEN_ATTR_APROBADO_AFIP = 'vta_ajuste_debe_tipo_estado.aprobado_afip';
	const GEN_ATTR_CONTABILIZABLE = 'vta_ajuste_debe_tipo_estado.contabilizable';
	const GEN_ATTR_ANULADO = 'vta_ajuste_debe_tipo_estado.anulado';
	const GEN_ATTR_OBSERVACION = 'vta_ajuste_debe_tipo_estado.observacion';
	const GEN_ATTR_ORDEN = 'vta_ajuste_debe_tipo_estado.orden';
	const GEN_ATTR_ESTADO = 'vta_ajuste_debe_tipo_estado.estado';
	const GEN_ATTR_CREADO = 'vta_ajuste_debe_tipo_estado.creado';
	const GEN_ATTR_CREADO_POR = 'vta_ajuste_debe_tipo_estado.creado_por';
	const GEN_ATTR_MODIFICADO = 'vta_ajuste_debe_tipo_estado.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'vta_ajuste_debe_tipo_estado.modificado_por';

	/* Constantes de Atributos Min de BVtaAjusteDebeTipoEstado */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_ACTIVO = 'activo';
	const GEN_ATTR_MIN_TERMINAL = 'terminal';
	const GEN_ATTR_MIN_IMPUTABLE = 'imputable';
	const GEN_ATTR_MIN_GESTIONABLE = 'gestionable';
	const GEN_ATTR_MIN_APROBADO_AFIP = 'aprobado_afip';
	const GEN_ATTR_MIN_CONTABILIZABLE = 'contabilizable';
	const GEN_ATTR_MIN_ANULADO = 'anulado';
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
	

	/* Atributos de BVtaAjusteDebeTipoEstado */ 
	private $id;
	private $descripcion;
	private $codigo;
	private $activo;
	private $terminal;
	private $imputable;
	private $gestionable;
	private $aprobado_afip;
	private $contabilizable;
	private $anulado;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BVtaAjusteDebeTipoEstado */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getActivo(){ if(isset($this->activo)){ return $this->activo; }else{ return 0; } }
	public function getTerminal(){ if(isset($this->terminal)){ return $this->terminal; }else{ return 0; } }
	public function getImputable(){ if(isset($this->imputable)){ return $this->imputable; }else{ return 0; } }
	public function getGestionable(){ if(isset($this->gestionable)){ return $this->gestionable; }else{ return 0; } }
	public function getAprobadoAfip(){ if(isset($this->aprobado_afip)){ return $this->aprobado_afip; }else{ return 0; } }
	public function getContabilizable(){ if(isset($this->contabilizable)){ return $this->contabilizable; }else{ return 0; } }
	public function getAnulado(){ if(isset($this->anulado)){ return $this->anulado; }else{ return 0; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BVtaAjusteDebeTipoEstado */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_ACTIVO."
				, ".self::GEN_ATTR_TERMINAL."
				, ".self::GEN_ATTR_IMPUTABLE."
				, ".self::GEN_ATTR_GESTIONABLE."
				, ".self::GEN_ATTR_APROBADO_AFIP."
				, ".self::GEN_ATTR_CONTABILIZABLE."
				, ".self::GEN_ATTR_ANULADO."
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
				$this->setActivo($fila[self::GEN_ATTR_MIN_ACTIVO]);
				$this->setTerminal($fila[self::GEN_ATTR_MIN_TERMINAL]);
				$this->setImputable($fila[self::GEN_ATTR_MIN_IMPUTABLE]);
				$this->setGestionable($fila[self::GEN_ATTR_MIN_GESTIONABLE]);
				$this->setAprobadoAfip($fila[self::GEN_ATTR_MIN_APROBADO_AFIP]);
				$this->setContabilizable($fila[self::GEN_ATTR_MIN_CONTABILIZABLE]);
				$this->setAnulado($fila[self::GEN_ATTR_MIN_ANULADO]);
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
	public function setActivo($v){ $this->activo = $v; }
	public function setTerminal($v){ $this->terminal = $v; }
	public function setImputable($v){ $this->imputable = $v; }
	public function setGestionable($v){ $this->gestionable = $v; }
	public function setAprobadoAfip($v){ $this->aprobado_afip = $v; }
	public function setContabilizable($v){ $this->contabilizable = $v; }
	public function setAnulado($v){ $this->anulado = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new VtaAjusteDebeTipoEstado();
            $o->setId($fila[VtaAjusteDebeTipoEstado::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setActivo($fila[self::GEN_ATTR_MIN_ACTIVO]);
			$o->setTerminal($fila[self::GEN_ATTR_MIN_TERMINAL]);
			$o->setImputable($fila[self::GEN_ATTR_MIN_IMPUTABLE]);
			$o->setGestionable($fila[self::GEN_ATTR_MIN_GESTIONABLE]);
			$o->setAprobadoAfip($fila[self::GEN_ATTR_MIN_APROBADO_AFIP]);
			$o->setContabilizable($fila[self::GEN_ATTR_MIN_CONTABILIZABLE]);
			$o->setAnulado($fila[self::GEN_ATTR_MIN_ANULADO]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BVtaAjusteDebeTipoEstado */ 	
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

	/* Cambia el estado de BVtaAjusteDebeTipoEstado */ 	
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

	/* Save de BVtaAjusteDebeTipoEstado */ 	
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
						, ".self::GEN_ATTR_MIN_ACTIVO."
						, ".self::GEN_ATTR_MIN_TERMINAL."
						, ".self::GEN_ATTR_MIN_IMPUTABLE."
						, ".self::GEN_ATTR_MIN_GESTIONABLE."
						, ".self::GEN_ATTR_MIN_APROBADO_AFIP."
						, ".self::GEN_ATTR_MIN_CONTABILIZABLE."
						, ".self::GEN_ATTR_MIN_ANULADO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('vta_ajuste_debe_tipo_estado_seq'), 
                '".$this->getDescripcion()."'
						, '".$this->getCodigo()."'
						, ".$this->getActivo()."
						, ".$this->getTerminal()."
						, ".$this->getImputable()."
						, ".$this->getGestionable()."
						, ".$this->getAprobadoAfip()."
						, ".$this->getContabilizable()."
						, ".$this->getAnulado()."
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('vta_ajuste_debe_tipo_estado_seq')";
            
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
                 
				 ".VtaAjusteDebeTipoEstado::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_ACTIVO." = ".$this->getActivo()."
						, ".self::GEN_ATTR_MIN_TERMINAL." = ".$this->getTerminal()."
						, ".self::GEN_ATTR_MIN_IMPUTABLE." = ".$this->getImputable()."
						, ".self::GEN_ATTR_MIN_GESTIONABLE." = ".$this->getGestionable()."
						, ".self::GEN_ATTR_MIN_APROBADO_AFIP." = ".$this->getAprobadoAfip()."
						, ".self::GEN_ATTR_MIN_CONTABILIZABLE." = ".$this->getContabilizable()."
						, ".self::GEN_ATTR_MIN_ANULADO." = ".$this->getAnulado()."
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
						, ".self::GEN_ATTR_MIN_ACTIVO."
						, ".self::GEN_ATTR_MIN_TERMINAL."
						, ".self::GEN_ATTR_MIN_IMPUTABLE."
						, ".self::GEN_ATTR_MIN_GESTIONABLE."
						, ".self::GEN_ATTR_MIN_APROBADO_AFIP."
						, ".self::GEN_ATTR_MIN_CONTABILIZABLE."
						, ".self::GEN_ATTR_MIN_ANULADO."
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
						, ".$this->getActivo()."
						, ".$this->getTerminal()."
						, ".$this->getImputable()."
						, ".$this->getGestionable()."
						, ".$this->getAprobadoAfip()."
						, ".$this->getContabilizable()."
						, ".$this->getAnulado()."
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
                     
				 ".VtaAjusteDebeTipoEstado::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_ACTIVO." = ".$this->getActivo()."
						, ".self::GEN_ATTR_MIN_TERMINAL." = ".$this->getTerminal()."
						, ".self::GEN_ATTR_MIN_IMPUTABLE." = ".$this->getImputable()."
						, ".self::GEN_ATTR_MIN_GESTIONABLE." = ".$this->getGestionable()."
						, ".self::GEN_ATTR_MIN_APROBADO_AFIP." = ".$this->getAprobadoAfip()."
						, ".self::GEN_ATTR_MIN_CONTABILIZABLE." = ".$this->getContabilizable()."
						, ".self::GEN_ATTR_MIN_ANULADO." = ".$this->getAnulado()."
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
            $o = new VtaAjusteDebeTipoEstado();
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

	/* Delete de BVtaAjusteDebeTipoEstado */ 	
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
	
            // se elimina la coleccion de VtaAjusteDebes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteDebes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteDebeEstados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteDebeEstado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteDebeEstados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarVtaAjusteDebeTipoEstado(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getVtaAjusteDebeTipoEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = VtaAjusteDebeTipoEstado::setAplicarFiltrosDeAlcance($criterio);

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
	
		$vtaajustedebetipoestados = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $vtaajustedebetipoestado = new VtaAjusteDebeTipoEstado();
                    $vtaajustedebetipoestado->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $vtaajustedebetipoestado->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$vtaajustedebetipoestado->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$vtaajustedebetipoestado->setActivo($fila[self::GEN_ATTR_MIN_ACTIVO]);
			$vtaajustedebetipoestado->setTerminal($fila[self::GEN_ATTR_MIN_TERMINAL]);
			$vtaajustedebetipoestado->setImputable($fila[self::GEN_ATTR_MIN_IMPUTABLE]);
			$vtaajustedebetipoestado->setGestionable($fila[self::GEN_ATTR_MIN_GESTIONABLE]);
			$vtaajustedebetipoestado->setAprobadoAfip($fila[self::GEN_ATTR_MIN_APROBADO_AFIP]);
			$vtaajustedebetipoestado->setContabilizable($fila[self::GEN_ATTR_MIN_CONTABILIZABLE]);
			$vtaajustedebetipoestado->setAnulado($fila[self::GEN_ATTR_MIN_ANULADO]);
			$vtaajustedebetipoestado->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$vtaajustedebetipoestado->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$vtaajustedebetipoestado->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$vtaajustedebetipoestado->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$vtaajustedebetipoestado->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$vtaajustedebetipoestado->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$vtaajustedebetipoestado->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $vtaajustedebetipoestados[] = $vtaajustedebetipoestado;
		}
		
		return $vtaajustedebetipoestados;
	}	
	

	/* Método getVtaAjusteDebeTipoEstados Habilitados */ 	
	static function getVtaAjusteDebeTipoEstadosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return VtaAjusteDebeTipoEstado::getVtaAjusteDebeTipoEstados($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getVtaAjusteDebeTipoEstados para listado de Backend */ 	
	static function getVtaAjusteDebeTipoEstadosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return VtaAjusteDebeTipoEstado::getVtaAjusteDebeTipoEstados($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getVtaAjusteDebeTipoEstadosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = VtaAjusteDebeTipoEstado::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = VtaAjusteDebeTipoEstado::getVtaAjusteDebeTipoEstados($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaAjusteDebeTipoEstados filtrado para select */ 	
	static function getVtaAjusteDebeTipoEstadosCmbF($paginador = null, $criterio = null){
            $col = VtaAjusteDebeTipoEstado::getVtaAjusteDebeTipoEstados($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'vta_ajuste_debe_tipo_estado_adm.php';
            $url_gestion = 'vta_ajuste_debe_tipo_estado_gestion.php';
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
                
            $criterio->add(VtaAjusteDebe::GEN_ATTR_VTA_AJUSTE_DEBE_TIPO_ESTADO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaAjusteDebe::GEN_ATTR_VTA_AJUSTE_DEBE_TIPO_ESTADO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaAjusteDebe::GEN_ATTR_VTA_AJUSTE_DEBE_TIPO_ESTADO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaAjusteDebe::GEN_ATTR_VTA_AJUSTE_DEBE_TIPO_ESTADO_ID, $this->getId(), Criterio::IGUAL);
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

	/* Metodo getVtaAjusteDebeEstados */ 	
	public function getVtaAjusteDebeEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteDebeEstado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteDebeEstado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteDebeEstado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteDebeEstado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteDebeEstado::GEN_ATTR_VTA_AJUSTE_DEBE_TIPO_ESTADO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteDebeEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteDebeEstado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteDebeEstado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustedebeestados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustedebeestado = VtaAjusteDebeEstado::hidratarObjeto($fila);			
                $vtaajustedebeestados[] = $vtaajustedebeestado;
            }

            return $vtaajustedebeestados;
	}	
	

	/* Método getVtaAjusteDebeEstadosBloque para MasInfo */ 	
	public function getVtaAjusteDebeEstadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteDebeEstados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteDebeEstados Habilitados */ 	
	public function getVtaAjusteDebeEstadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteDebeEstados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteDebeEstado */ 	
	public function getVtaAjusteDebeEstado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteDebeEstados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteDebeEstado relacionadas */ 	
	public function deleteVtaAjusteDebeEstados(){
            $obs = $this->getVtaAjusteDebeEstados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteDebeEstadosCmb() VtaAjusteDebeEstado relacionadas */ 	
	public function getVtaAjusteDebeEstadosCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteDebeEstado::GEN_ATTR_VTA_AJUSTE_DEBE_TIPO_ESTADO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebeEstado::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteDebeEstado::getVtaAjusteDebeEstadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaAjusteDebes (Coleccion) relacionados a traves de VtaAjusteDebeEstado */ 	
	public function getVtaAjusteDebesXVtaAjusteDebeEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeEstado::GEN_ATTR_VTA_AJUSTE_DEBE_TIPO_ESTADO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeEstado::GEN_TABLA, VtaAjusteDebeEstado::GEN_ATTR_VTA_AJUSTE_DEBE_ID, VtaAjusteDebe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebe::getVtaAjusteDebes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaAjusteDebes relacionados a traves de VtaAjusteDebeEstado */ 	
	public function getCantidadVtaAjusteDebesXVtaAjusteDebeEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaAjusteDebe::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeEstado::GEN_ATTR_VTA_AJUSTE_DEBE_TIPO_ESTADO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeEstado::GEN_TABLA, VtaAjusteDebeEstado::GEN_ATTR_VTA_AJUSTE_DEBE_ID, VtaAjusteDebe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebe::getVtaAjusteDebes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaAjusteDebe (Objeto) relacionado a traves de VtaAjusteDebeEstado */ 	
	public function getVtaAjusteDebeXVtaAjusteDebeEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaAjusteDebesXVtaAjusteDebeEstado($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM vta_ajuste_debe_tipo_estado'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'vta_ajuste_debe_tipo_estado';");
            
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

            $obs = self::getVtaAjusteDebeTipoEstados($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebeTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebeTipoEstados($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebeTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebeTipoEstados($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebeTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'activo' */ 	
	static function getOxActivo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ACTIVO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebeTipoEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'activo' */ 	
	static function getOsxActivo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ACTIVO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaAjusteDebeTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'terminal' */ 	
	static function getOxTerminal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_TERMINAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebeTipoEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'terminal' */ 	
	static function getOsxTerminal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_TERMINAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaAjusteDebeTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'imputable' */ 	
	static function getOxImputable($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPUTABLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebeTipoEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'imputable' */ 	
	static function getOsxImputable($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPUTABLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaAjusteDebeTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gestionable' */ 	
	static function getOxGestionable($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GESTIONABLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebeTipoEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gestionable' */ 	
	static function getOsxGestionable($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GESTIONABLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaAjusteDebeTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'aprobado_afip' */ 	
	static function getOxAprobadoAfip($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_APROBADO_AFIP, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebeTipoEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'aprobado_afip' */ 	
	static function getOsxAprobadoAfip($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_APROBADO_AFIP, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaAjusteDebeTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'contabilizable' */ 	
	static function getOxContabilizable($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CONTABILIZABLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebeTipoEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'contabilizable' */ 	
	static function getOsxContabilizable($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CONTABILIZABLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaAjusteDebeTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'anulado' */ 	
	static function getOxAnulado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ANULADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebeTipoEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'anulado' */ 	
	static function getOsxAnulado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ANULADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaAjusteDebeTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebeTipoEstados($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebeTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebeTipoEstados($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebeTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebeTipoEstados($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebeTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebeTipoEstados($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebeTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebeTipoEstados($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebeTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebeTipoEstados($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebeTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebeTipoEstados($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebeTipoEstados(null, $criterio);
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

            $obs = self::getVtaAjusteDebeTipoEstados($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebeTipoEstados($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'vta_ajuste_debe_tipo_estado_adm');
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
                $c->addTabla(VtaAjusteDebeTipoEstado::GEN_TABLA);
                $c->addOrden(VtaAjusteDebeTipoEstado::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $vta_ajuste_debe_tipo_estados = VtaAjusteDebeTipoEstado::getVtaAjusteDebeTipoEstados(null, $c);

                $arr = array();
                foreach($vta_ajuste_debe_tipo_estados as $vta_ajuste_debe_tipo_estado){
                    $descripcion = $vta_ajuste_debe_tipo_estado->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>