<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BVtaPresupuestoConflicto
{ 
	
	const SES_PAGINACION = 'adm_vtapresupuestoconflicto_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_vtapresupuestoconflicto_paginas_registros';
	const SES_CRITERIOS = 'adm_vtapresupuestoconflicto_criterios';
	
	const GEN_CLASE = 'VtaPresupuestoConflicto';
	const GEN_TABLA = 'vta_presupuesto_conflicto';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BVtaPresupuestoConflicto */ 
	const GEN_ATTR_ID = 'vta_presupuesto_conflicto.id';
	const GEN_ATTR_DESCRIPCION = 'vta_presupuesto_conflicto.descripcion';
	const GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID = 'vta_presupuesto_conflicto.vta_presupuesto_ins_insumo_id';
	const GEN_ATTR_IMPORTE_INICIAL = 'vta_presupuesto_conflicto.importe_inicial';
	const GEN_ATTR_IMPORTE_ACTUALIZADO = 'vta_presupuesto_conflicto.importe_actualizado';
	const GEN_ATTR_IMPORTE_DIFERENCIA = 'vta_presupuesto_conflicto.importe_diferencia';
	const GEN_ATTR_IMPORTE_RESUELTO = 'vta_presupuesto_conflicto.importe_resuelto';
	const GEN_ATTR_FECHA_CONFLICTO = 'vta_presupuesto_conflicto.fecha_conflicto';
	const GEN_ATTR_FECHA_RESOLUCION = 'vta_presupuesto_conflicto.fecha_resolucion';
	const GEN_ATTR_US_USUARIO_RESOLUCION = 'vta_presupuesto_conflicto.us_usuario_resolucion';
	const GEN_ATTR_RESUELTO = 'vta_presupuesto_conflicto.resuelto';
	const GEN_ATTR_CODIGO = 'vta_presupuesto_conflicto.codigo';
	const GEN_ATTR_OBSERVACION = 'vta_presupuesto_conflicto.observacion';
	const GEN_ATTR_ORDEN = 'vta_presupuesto_conflicto.orden';
	const GEN_ATTR_ESTADO = 'vta_presupuesto_conflicto.estado';
	const GEN_ATTR_CREADO = 'vta_presupuesto_conflicto.creado';
	const GEN_ATTR_CREADO_POR = 'vta_presupuesto_conflicto.creado_por';
	const GEN_ATTR_MODIFICADO = 'vta_presupuesto_conflicto.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'vta_presupuesto_conflicto.modificado_por';

	/* Constantes de Atributos Min de BVtaPresupuestoConflicto */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_VTA_PRESUPUESTO_INS_INSUMO_ID = 'vta_presupuesto_ins_insumo_id';
	const GEN_ATTR_MIN_IMPORTE_INICIAL = 'importe_inicial';
	const GEN_ATTR_MIN_IMPORTE_ACTUALIZADO = 'importe_actualizado';
	const GEN_ATTR_MIN_IMPORTE_DIFERENCIA = 'importe_diferencia';
	const GEN_ATTR_MIN_IMPORTE_RESUELTO = 'importe_resuelto';
	const GEN_ATTR_MIN_FECHA_CONFLICTO = 'fecha_conflicto';
	const GEN_ATTR_MIN_FECHA_RESOLUCION = 'fecha_resolucion';
	const GEN_ATTR_MIN_US_USUARIO_RESOLUCION = 'us_usuario_resolucion';
	const GEN_ATTR_MIN_RESUELTO = 'resuelto';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
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
	

	/* Atributos de BVtaPresupuestoConflicto */ 
	private $id;
	private $descripcion;
	private $vta_presupuesto_ins_insumo_id;
	private $importe_inicial;
	private $importe_actualizado;
	private $importe_diferencia;
	private $importe_resuelto;
	private $fecha_conflicto;
	private $fecha_resolucion;
	private $us_usuario_resolucion;
	private $resuelto;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BVtaPresupuestoConflicto */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getVtaPresupuestoInsInsumoId(){ if(isset($this->vta_presupuesto_ins_insumo_id)){ return $this->vta_presupuesto_ins_insumo_id; }else{ return 'null'; } }
	public function getImporteInicial(){ if(isset($this->importe_inicial)){ return $this->importe_inicial; }else{ return 0; } }
	public function getImporteActualizado(){ if(isset($this->importe_actualizado)){ return $this->importe_actualizado; }else{ return 0; } }
	public function getImporteDiferencia(){ if(isset($this->importe_diferencia)){ return $this->importe_diferencia; }else{ return 0; } }
	public function getImporteResuelto(){ if(isset($this->importe_resuelto)){ return $this->importe_resuelto; }else{ return 0; } }
	public function getFechaConflicto(){ if(isset($this->fecha_conflicto)){ return $this->fecha_conflicto; }else{ return ''; } }
	public function getFechaResolucion(){ if(isset($this->fecha_resolucion)){ return $this->fecha_resolucion; }else{ return ''; } }
	public function getUsUsuarioResolucion(){ if(isset($this->us_usuario_resolucion)){ return $this->us_usuario_resolucion; }else{ return 'null'; } }
	public function getUsUsuarioResolucionObj(){ if(isset($this->us_usuario_resolucion)){ return UsUsuario::getOxId($this->us_usuario_resolucion); }else{ return new UsUsuario(); } }
	public function getResuelto(){ if(isset($this->resuelto)){ return $this->resuelto; }else{ return 0; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BVtaPresupuestoConflicto */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID."
				, ".self::GEN_ATTR_IMPORTE_INICIAL."
				, ".self::GEN_ATTR_IMPORTE_ACTUALIZADO."
				, ".self::GEN_ATTR_IMPORTE_DIFERENCIA."
				, ".self::GEN_ATTR_IMPORTE_RESUELTO."
				, ".self::GEN_ATTR_FECHA_CONFLICTO."
				, ".self::GEN_ATTR_FECHA_RESOLUCION."
				, ".self::GEN_ATTR_US_USUARIO_RESOLUCION."
				, ".self::GEN_ATTR_RESUELTO."
				, ".self::GEN_ATTR_CODIGO."
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
				$this->setVtaPresupuestoInsInsumoId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_INS_INSUMO_ID]);
				$this->setImporteInicial($fila[self::GEN_ATTR_MIN_IMPORTE_INICIAL]);
				$this->setImporteActualizado($fila[self::GEN_ATTR_MIN_IMPORTE_ACTUALIZADO]);
				$this->setImporteDiferencia($fila[self::GEN_ATTR_MIN_IMPORTE_DIFERENCIA]);
				$this->setImporteResuelto($fila[self::GEN_ATTR_MIN_IMPORTE_RESUELTO]);
				$this->setFechaConflicto($fila[self::GEN_ATTR_MIN_FECHA_CONFLICTO]);
				$this->setFechaResolucion($fila[self::GEN_ATTR_MIN_FECHA_RESOLUCION]);
				$this->setUsUsuarioResolucion($fila[self::GEN_ATTR_MIN_US_USUARIO_RESOLUCION]);
				$this->setResuelto($fila[self::GEN_ATTR_MIN_RESUELTO]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
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
	public function setVtaPresupuestoInsInsumoId($v){ $this->vta_presupuesto_ins_insumo_id = $v; }
	public function setImporteInicial($v){ $this->importe_inicial = $v; }
	public function setImporteActualizado($v){ $this->importe_actualizado = $v; }
	public function setImporteDiferencia($v){ $this->importe_diferencia = $v; }
	public function setImporteResuelto($v){ $this->importe_resuelto = $v; }
	public function setFechaConflicto($v){ $this->fecha_conflicto = $v; }
	public function setFechaResolucion($v){ $this->fecha_resolucion = $v; }
	public function setUsUsuarioResolucion($v){ $this->us_usuario_resolucion = $v; }
	public function setResuelto($v){ $this->resuelto = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new VtaPresupuestoConflicto();
            $o->setId($fila[VtaPresupuestoConflicto::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setVtaPresupuestoInsInsumoId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_INS_INSUMO_ID]);
			$o->setImporteInicial($fila[self::GEN_ATTR_MIN_IMPORTE_INICIAL]);
			$o->setImporteActualizado($fila[self::GEN_ATTR_MIN_IMPORTE_ACTUALIZADO]);
			$o->setImporteDiferencia($fila[self::GEN_ATTR_MIN_IMPORTE_DIFERENCIA]);
			$o->setImporteResuelto($fila[self::GEN_ATTR_MIN_IMPORTE_RESUELTO]);
			$o->setFechaConflicto($fila[self::GEN_ATTR_MIN_FECHA_CONFLICTO]);
			$o->setFechaResolucion($fila[self::GEN_ATTR_MIN_FECHA_RESOLUCION]);
			$o->setUsUsuarioResolucion($fila[self::GEN_ATTR_MIN_US_USUARIO_RESOLUCION]);
			$o->setResuelto($fila[self::GEN_ATTR_MIN_RESUELTO]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BVtaPresupuestoConflicto */ 	
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

	/* Cambia el estado de BVtaPresupuestoConflicto */ 	
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

	/* Save de BVtaPresupuestoConflicto */ 	
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
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_INS_INSUMO_ID."
						, ".self::GEN_ATTR_MIN_IMPORTE_INICIAL."
						, ".self::GEN_ATTR_MIN_IMPORTE_ACTUALIZADO."
						, ".self::GEN_ATTR_MIN_IMPORTE_DIFERENCIA."
						, ".self::GEN_ATTR_MIN_IMPORTE_RESUELTO."
						, ".self::GEN_ATTR_MIN_FECHA_CONFLICTO."
						, ".self::GEN_ATTR_MIN_FECHA_RESOLUCION."
						, ".self::GEN_ATTR_MIN_US_USUARIO_RESOLUCION."
						, ".self::GEN_ATTR_MIN_RESUELTO."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('vta_presupuesto_conflicto_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getVtaPresupuestoInsInsumoId()."
						, '".$this->getImporteInicial()."'
						, '".$this->getImporteActualizado()."'
						, '".$this->getImporteDiferencia()."'
						, '".$this->getImporteResuelto()."'
						, '".$this->getFechaConflicto()."'
						, '".$this->getFechaResolucion()."'
						, ".$this->getUsUsuarioResolucion()."
						, ".$this->getResuelto()."
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('vta_presupuesto_conflicto_seq')";
            
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
                 
				 ".VtaPresupuestoConflicto::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_INS_INSUMO_ID." = ".$this->getVtaPresupuestoInsInsumoId()."
						, ".self::GEN_ATTR_MIN_IMPORTE_INICIAL." = '".$this->getImporteInicial()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_ACTUALIZADO." = '".$this->getImporteActualizado()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_DIFERENCIA." = '".$this->getImporteDiferencia()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_RESUELTO." = '".$this->getImporteResuelto()."'
						, ".self::GEN_ATTR_MIN_FECHA_CONFLICTO." = '".$this->getFechaConflicto()."'
						, ".self::GEN_ATTR_MIN_FECHA_RESOLUCION." = '".$this->getFechaResolucion()."'
						, ".self::GEN_ATTR_MIN_US_USUARIO_RESOLUCION." = ".$this->getUsUsuarioResolucion()."
						, ".self::GEN_ATTR_MIN_RESUELTO." = ".$this->getResuelto()."
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
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
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_INS_INSUMO_ID."
						, ".self::GEN_ATTR_MIN_IMPORTE_INICIAL."
						, ".self::GEN_ATTR_MIN_IMPORTE_ACTUALIZADO."
						, ".self::GEN_ATTR_MIN_IMPORTE_DIFERENCIA."
						, ".self::GEN_ATTR_MIN_IMPORTE_RESUELTO."
						, ".self::GEN_ATTR_MIN_FECHA_CONFLICTO."
						, ".self::GEN_ATTR_MIN_FECHA_RESOLUCION."
						, ".self::GEN_ATTR_MIN_US_USUARIO_RESOLUCION."
						, ".self::GEN_ATTR_MIN_RESUELTO."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getDescripcion()."'
						, ".$this->getVtaPresupuestoInsInsumoId()."
						, '".$this->getImporteInicial()."'
						, '".$this->getImporteActualizado()."'
						, '".$this->getImporteDiferencia()."'
						, '".$this->getImporteResuelto()."'
						, '".$this->getFechaConflicto()."'
						, '".$this->getFechaResolucion()."'
						, ".$this->getUsUsuarioResolucion()."
						, ".$this->getResuelto()."
						, '".$this->getCodigo()."'
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
                     
				 ".VtaPresupuestoConflicto::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_INS_INSUMO_ID." = ".$this->getVtaPresupuestoInsInsumoId()."
						, ".self::GEN_ATTR_MIN_IMPORTE_INICIAL." = '".$this->getImporteInicial()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_ACTUALIZADO." = '".$this->getImporteActualizado()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_DIFERENCIA." = '".$this->getImporteDiferencia()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_RESUELTO." = '".$this->getImporteResuelto()."'
						, ".self::GEN_ATTR_MIN_FECHA_CONFLICTO." = '".$this->getFechaConflicto()."'
						, ".self::GEN_ATTR_MIN_FECHA_RESOLUCION." = '".$this->getFechaResolucion()."'
						, ".self::GEN_ATTR_MIN_US_USUARIO_RESOLUCION." = ".$this->getUsUsuarioResolucion()."
						, ".self::GEN_ATTR_MIN_RESUELTO." = ".$this->getResuelto()."
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
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
            $o = new VtaPresupuestoConflicto();
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

	/* Delete de BVtaPresupuestoConflicto */ 	
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
	
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarVtaPresupuestoConflicto(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getVtaPresupuestoConflictos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = VtaPresupuestoConflicto::setAplicarFiltrosDeAlcance($criterio);

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
	
		$vtapresupuestoconflictos = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $vtapresupuestoconflicto = new VtaPresupuestoConflicto();
                    $vtapresupuestoconflicto->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $vtapresupuestoconflicto->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$vtapresupuestoconflicto->setVtaPresupuestoInsInsumoId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_INS_INSUMO_ID]);
			$vtapresupuestoconflicto->setImporteInicial($fila[self::GEN_ATTR_MIN_IMPORTE_INICIAL]);
			$vtapresupuestoconflicto->setImporteActualizado($fila[self::GEN_ATTR_MIN_IMPORTE_ACTUALIZADO]);
			$vtapresupuestoconflicto->setImporteDiferencia($fila[self::GEN_ATTR_MIN_IMPORTE_DIFERENCIA]);
			$vtapresupuestoconflicto->setImporteResuelto($fila[self::GEN_ATTR_MIN_IMPORTE_RESUELTO]);
			$vtapresupuestoconflicto->setFechaConflicto($fila[self::GEN_ATTR_MIN_FECHA_CONFLICTO]);
			$vtapresupuestoconflicto->setFechaResolucion($fila[self::GEN_ATTR_MIN_FECHA_RESOLUCION]);
			$vtapresupuestoconflicto->setUsUsuarioResolucion($fila[self::GEN_ATTR_MIN_US_USUARIO_RESOLUCION]);
			$vtapresupuestoconflicto->setResuelto($fila[self::GEN_ATTR_MIN_RESUELTO]);
			$vtapresupuestoconflicto->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$vtapresupuestoconflicto->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$vtapresupuestoconflicto->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$vtapresupuestoconflicto->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$vtapresupuestoconflicto->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$vtapresupuestoconflicto->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$vtapresupuestoconflicto->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$vtapresupuestoconflicto->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $vtapresupuestoconflictos[] = $vtapresupuestoconflicto;
		}
		
		return $vtapresupuestoconflictos;
	}	
	

	/* Método getVtaPresupuestoConflictos Habilitados */ 	
	static function getVtaPresupuestoConflictosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return VtaPresupuestoConflicto::getVtaPresupuestoConflictos($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getVtaPresupuestoConflictos para listado de Backend */ 	
	static function getVtaPresupuestoConflictosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return VtaPresupuestoConflicto::getVtaPresupuestoConflictos($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getVtaPresupuestoConflictosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = VtaPresupuestoConflicto::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = VtaPresupuestoConflicto::getVtaPresupuestoConflictos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaPresupuestoConflictos filtrado para select */ 	
	static function getVtaPresupuestoConflictosCmbF($paginador = null, $criterio = null){
            $col = VtaPresupuestoConflicto::getVtaPresupuestoConflictos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaPresupuestoConflictos filtrado por una coleccion de objetos foraneos de VtaPresupuestoInsInsumo */ 	
	static function getVtaPresupuestoConflictosXVtaPresupuestoInsInsumos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaPresupuestoConflicto::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaPresupuestoConflicto::GEN_TABLA);
            $c->addOrden(VtaPresupuestoConflicto::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaPresupuestoConflicto::getVtaPresupuestoConflictos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaPresupuestoInsInsumoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'vta_presupuesto_conflicto_adm.php';
            $url_gestion = 'vta_presupuesto_conflicto_gestion.php';
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
	

	/* Metodo que retorna el VtaPresupuestoInsInsumo (Clave Foranea) */ 	
    public function getVtaPresupuestoInsInsumo(){
        $o = new VtaPresupuestoInsInsumo();
        $o->setId($this->getVtaPresupuestoInsInsumoId());
        return $o;			
    }

	/* Metodo que retorna el VtaPresupuestoInsInsumo (Clave Foranea) en Array */ 	
    public function getVtaPresupuestoInsInsumoEnArray(&$arr_os){
        if($this->getVtaPresupuestoInsInsumoId() != 'null'){
            if(isset($arr_os[$this->getVtaPresupuestoInsInsumoId()])){
                $o = $arr_os[$this->getVtaPresupuestoInsInsumoId()];
            }else{
                $o = VtaPresupuestoInsInsumo::getOxId($this->getVtaPresupuestoInsInsumoId());
                if($o){
                    $arr_os[$this->getVtaPresupuestoInsInsumoId()] = $o;
                }
            }
        }else{
            $o = new VtaPresupuestoInsInsumo();
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
            		
        if($contexto_solicitante != VtaPresupuestoInsInsumo::GEN_CLASE){
            if($this->getVtaPresupuestoInsInsumo()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaPresupuestoInsInsumo::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaPresupuestoInsInsumo()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != UsUsuario::GEN_CLASE){
            if($this->getUsUsuario()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(UsUsuario::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getUsUsuario()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM vta_presupuesto_conflicto'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'vta_presupuesto_conflicto';");
            
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

            $obs = self::getVtaPresupuestoConflictos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoConflictos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoConflictos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoConflictos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_presupuesto_ins_insumo_id' */ 	
	static function getOxVtaPresupuestoInsInsumoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoConflictos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_presupuesto_ins_insumo_id' */ 	
	static function getOsxVtaPresupuestoInsInsumoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestoConflictos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_inicial' */ 	
	static function getOxImporteInicial($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_INICIAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoConflictos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_inicial' */ 	
	static function getOsxImporteInicial($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_INICIAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestoConflictos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_actualizado' */ 	
	static function getOxImporteActualizado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_ACTUALIZADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoConflictos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_actualizado' */ 	
	static function getOsxImporteActualizado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_ACTUALIZADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestoConflictos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_diferencia' */ 	
	static function getOxImporteDiferencia($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_DIFERENCIA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoConflictos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_diferencia' */ 	
	static function getOsxImporteDiferencia($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_DIFERENCIA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestoConflictos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_resuelto' */ 	
	static function getOxImporteResuelto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_RESUELTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoConflictos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_resuelto' */ 	
	static function getOsxImporteResuelto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_RESUELTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestoConflictos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_conflicto' */ 	
	static function getOxFechaConflicto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_CONFLICTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoConflictos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha_conflicto' */ 	
	static function getOsxFechaConflicto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_CONFLICTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestoConflictos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_resolucion' */ 	
	static function getOxFechaResolucion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_RESOLUCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoConflictos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha_resolucion' */ 	
	static function getOsxFechaResolucion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_RESOLUCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestoConflictos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'us_usuario_resolucion' */ 	
	static function getOxUsUsuarioResolucion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_US_USUARIO_RESOLUCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoConflictos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'us_usuario_resolucion' */ 	
	static function getOsxUsUsuarioResolucion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_US_USUARIO_RESOLUCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestoConflictos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'resuelto' */ 	
	static function getOxResuelto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_RESUELTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoConflictos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'resuelto' */ 	
	static function getOsxResuelto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_RESUELTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestoConflictos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoConflictos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoConflictos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoConflictos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoConflictos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoConflictos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoConflictos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoConflictos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoConflictos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoConflictos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoConflictos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoConflictos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoConflictos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoConflictos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoConflictos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoConflictos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoConflictos(null, $criterio);
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

            $obs = self::getVtaPresupuestoConflictos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoConflictos($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'vta_presupuesto_conflicto_adm');
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

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha_conflicto' */ 	
	public function getFechaConflictoDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFechaConflicto(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaConflictoDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaConflictoDiferenciaDias();
        
            if ($fecha_hace > 0) {
                $fecha_hace = 'hace ' . abs($fecha_hace) . ' dias';
            } elseif ($fecha_hace < 0) {
                $fecha_hace = 'faltan ' . abs($fecha_hace) . ' dias';
            } else {
                $fecha_hace = 'hoy';
            }
            return $fecha_hace;
	}

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha_resolucion' */ 	
	public function getFechaResolucionDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFechaResolucion(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaResolucionDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaResolucionDiferenciaDias();
        
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
	
            /**
             * Metodo que retorna una coleccion de descripciones unificada para usar en autosuggest
             */
            static function getArrDescripcionsUnificado(){
                $c = new Criterio();
                $c->addTabla(VtaPresupuestoConflicto::GEN_TABLA);
                $c->addOrden(VtaPresupuestoConflicto::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $vta_presupuesto_conflictos = VtaPresupuestoConflicto::getVtaPresupuestoConflictos(null, $c);

                $arr = array();
                foreach($vta_presupuesto_conflictos as $vta_presupuesto_conflicto){
                    $descripcion = $vta_presupuesto_conflicto->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>