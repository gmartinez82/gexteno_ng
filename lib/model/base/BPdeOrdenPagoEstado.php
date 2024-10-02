<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BPdeOrdenPagoEstado
{ 
	
	const SES_PAGINACION = 'adm_pdeordenpagoestado_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_pdeordenpagoestado_paginas_registros';
	const SES_CRITERIOS = 'adm_pdeordenpagoestado_criterios';
	
	const GEN_CLASE = 'PdeOrdenPagoEstado';
	const GEN_TABLA = 'pde_orden_pago_estado';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BPdeOrdenPagoEstado */ 
	const GEN_ATTR_ID = 'pde_orden_pago_estado.id';
	const GEN_ATTR_DESCRIPCION = 'pde_orden_pago_estado.descripcion';
	const GEN_ATTR_PDE_ORDEN_PAGO_ID = 'pde_orden_pago_estado.pde_orden_pago_id';
	const GEN_ATTR_PDE_ORDEN_PAGO_TIPO_ESTADO_ID = 'pde_orden_pago_estado.pde_orden_pago_tipo_estado_id';
	const GEN_ATTR_INICIAL = 'pde_orden_pago_estado.inicial';
	const GEN_ATTR_ACTUAL = 'pde_orden_pago_estado.actual';
	const GEN_ATTR_PRV_PREVENTISTA_ID = 'pde_orden_pago_estado.prv_preventista_id';
	const GEN_ATTR_GRAL_EMPRESA_TRANSPORTADORA_ID = 'pde_orden_pago_estado.gral_empresa_transportadora_id';
	const GEN_ATTR_GUIA = 'pde_orden_pago_estado.guia';
	const GEN_ATTR_CODIGO = 'pde_orden_pago_estado.codigo';
	const GEN_ATTR_NOTA_INTERNA = 'pde_orden_pago_estado.nota_interna';
	const GEN_ATTR_NOTA_PUBLICA = 'pde_orden_pago_estado.nota_publica';
	const GEN_ATTR_OBSERVACION = 'pde_orden_pago_estado.observacion';
	const GEN_ATTR_ORDEN = 'pde_orden_pago_estado.orden';
	const GEN_ATTR_ESTADO = 'pde_orden_pago_estado.estado';
	const GEN_ATTR_CREADO = 'pde_orden_pago_estado.creado';
	const GEN_ATTR_CREADO_POR = 'pde_orden_pago_estado.creado_por';
	const GEN_ATTR_MODIFICADO = 'pde_orden_pago_estado.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'pde_orden_pago_estado.modificado_por';

	/* Constantes de Atributos Min de BPdeOrdenPagoEstado */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_PDE_ORDEN_PAGO_ID = 'pde_orden_pago_id';
	const GEN_ATTR_MIN_PDE_ORDEN_PAGO_TIPO_ESTADO_ID = 'pde_orden_pago_tipo_estado_id';
	const GEN_ATTR_MIN_INICIAL = 'inicial';
	const GEN_ATTR_MIN_ACTUAL = 'actual';
	const GEN_ATTR_MIN_PRV_PREVENTISTA_ID = 'prv_preventista_id';
	const GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID = 'gral_empresa_transportadora_id';
	const GEN_ATTR_MIN_GUIA = 'guia';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_NOTA_INTERNA = 'nota_interna';
	const GEN_ATTR_MIN_NOTA_PUBLICA = 'nota_publica';
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
	

	/* Atributos de BPdeOrdenPagoEstado */ 
	private $id;
	private $descripcion;
	private $pde_orden_pago_id;
	private $pde_orden_pago_tipo_estado_id;
	private $inicial;
	private $actual;
	private $prv_preventista_id;
	private $gral_empresa_transportadora_id;
	private $guia;
	private $codigo;
	private $nota_interna;
	private $nota_publica;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BPdeOrdenPagoEstado */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getPdeOrdenPagoId(){ if(isset($this->pde_orden_pago_id)){ return $this->pde_orden_pago_id; }else{ return 'null'; } }
	public function getPdeOrdenPagoTipoEstadoId(){ if(isset($this->pde_orden_pago_tipo_estado_id)){ return $this->pde_orden_pago_tipo_estado_id; }else{ return 'null'; } }
	public function getInicial(){ if(isset($this->inicial)){ return $this->inicial; }else{ return 0; } }
	public function getActual(){ if(isset($this->actual)){ return $this->actual; }else{ return 0; } }
	public function getPrvPreventistaId(){ if(isset($this->prv_preventista_id)){ return $this->prv_preventista_id; }else{ return 'null'; } }
	public function getGralEmpresaTransportadoraId(){ if(isset($this->gral_empresa_transportadora_id)){ return $this->gral_empresa_transportadora_id; }else{ return 'null'; } }
	public function getGuia(){ if(isset($this->guia)){ return $this->guia; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getNotaInterna(){ if(isset($this->nota_interna)){ return $this->nota_interna; }else{ return ''; } }
	public function getNotaPublica(){ if(isset($this->nota_publica)){ return $this->nota_publica; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BPdeOrdenPagoEstado */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_PDE_ORDEN_PAGO_ID."
				, ".self::GEN_ATTR_PDE_ORDEN_PAGO_TIPO_ESTADO_ID."
				, ".self::GEN_ATTR_INICIAL."
				, ".self::GEN_ATTR_ACTUAL."
				, ".self::GEN_ATTR_PRV_PREVENTISTA_ID."
				, ".self::GEN_ATTR_GRAL_EMPRESA_TRANSPORTADORA_ID."
				, ".self::GEN_ATTR_GUIA."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_NOTA_INTERNA."
				, ".self::GEN_ATTR_NOTA_PUBLICA."
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
				$this->setPdeOrdenPagoId($fila[self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_ID]);
				$this->setPdeOrdenPagoTipoEstadoId($fila[self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_TIPO_ESTADO_ID]);
				$this->setInicial($fila[self::GEN_ATTR_MIN_INICIAL]);
				$this->setActual($fila[self::GEN_ATTR_MIN_ACTUAL]);
				$this->setPrvPreventistaId($fila[self::GEN_ATTR_MIN_PRV_PREVENTISTA_ID]);
				$this->setGralEmpresaTransportadoraId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID]);
				$this->setGuia($fila[self::GEN_ATTR_MIN_GUIA]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setNotaInterna($fila[self::GEN_ATTR_MIN_NOTA_INTERNA]);
				$this->setNotaPublica($fila[self::GEN_ATTR_MIN_NOTA_PUBLICA]);
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
	public function setPdeOrdenPagoId($v){ $this->pde_orden_pago_id = $v; }
	public function setPdeOrdenPagoTipoEstadoId($v){ $this->pde_orden_pago_tipo_estado_id = $v; }
	public function setInicial($v){ $this->inicial = $v; }
	public function setActual($v){ $this->actual = $v; }
	public function setPrvPreventistaId($v){ $this->prv_preventista_id = $v; }
	public function setGralEmpresaTransportadoraId($v){ $this->gral_empresa_transportadora_id = $v; }
	public function setGuia($v){ $this->guia = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setNotaInterna($v){ $this->nota_interna = $v; }
	public function setNotaPublica($v){ $this->nota_publica = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new PdeOrdenPagoEstado();
            $o->setId($fila[PdeOrdenPagoEstado::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setPdeOrdenPagoId($fila[self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_ID]);
			$o->setPdeOrdenPagoTipoEstadoId($fila[self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_TIPO_ESTADO_ID]);
			$o->setInicial($fila[self::GEN_ATTR_MIN_INICIAL]);
			$o->setActual($fila[self::GEN_ATTR_MIN_ACTUAL]);
			$o->setPrvPreventistaId($fila[self::GEN_ATTR_MIN_PRV_PREVENTISTA_ID]);
			$o->setGralEmpresaTransportadoraId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID]);
			$o->setGuia($fila[self::GEN_ATTR_MIN_GUIA]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setNotaInterna($fila[self::GEN_ATTR_MIN_NOTA_INTERNA]);
			$o->setNotaPublica($fila[self::GEN_ATTR_MIN_NOTA_PUBLICA]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BPdeOrdenPagoEstado */ 	
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

	/* Cambia el estado de BPdeOrdenPagoEstado */ 	
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

	/* Save de BPdeOrdenPagoEstado */ 	
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
						, ".self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_ID."
						, ".self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_INICIAL."
						, ".self::GEN_ATTR_MIN_ACTUAL."
						, ".self::GEN_ATTR_MIN_PRV_PREVENTISTA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID."
						, ".self::GEN_ATTR_MIN_GUIA."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA."
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('pde_orden_pago_estado_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getPdeOrdenPagoId()."
						, ".$this->getPdeOrdenPagoTipoEstadoId()."
						, ".$this->getInicial()."
						, ".$this->getActual()."
						, ".$this->getPrvPreventistaId()."
						, ".$this->getGralEmpresaTransportadoraId()."
						, '".$this->getGuia()."'
						, '".$this->getCodigo()."'
						, '".$this->getNotaInterna()."'
						, '".$this->getNotaPublica()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('pde_orden_pago_estado_seq')";
            
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
                 
				 ".PdeOrdenPagoEstado::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_ID." = ".$this->getPdeOrdenPagoId()."
						, ".self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_TIPO_ESTADO_ID." = ".$this->getPdeOrdenPagoTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_INICIAL." = ".$this->getInicial()."
						, ".self::GEN_ATTR_MIN_ACTUAL." = ".$this->getActual()."
						, ".self::GEN_ATTR_MIN_PRV_PREVENTISTA_ID." = ".$this->getPrvPreventistaId()."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID." = ".$this->getGralEmpresaTransportadoraId()."
						, ".self::GEN_ATTR_MIN_GUIA." = '".$this->getGuia()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA." = '".$this->getNotaInterna()."'
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA." = '".$this->getNotaPublica()."'
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
						, ".self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_ID."
						, ".self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_INICIAL."
						, ".self::GEN_ATTR_MIN_ACTUAL."
						, ".self::GEN_ATTR_MIN_PRV_PREVENTISTA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID."
						, ".self::GEN_ATTR_MIN_GUIA."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA."
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getDescripcion()."'
						, ".$this->getPdeOrdenPagoId()."
						, ".$this->getPdeOrdenPagoTipoEstadoId()."
						, ".$this->getInicial()."
						, ".$this->getActual()."
						, ".$this->getPrvPreventistaId()."
						, ".$this->getGralEmpresaTransportadoraId()."
						, '".$this->getGuia()."'
						, '".$this->getCodigo()."'
						, '".$this->getNotaInterna()."'
						, '".$this->getNotaPublica()."'
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
                     
				 ".PdeOrdenPagoEstado::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_ID." = ".$this->getPdeOrdenPagoId()."
						, ".self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_TIPO_ESTADO_ID." = ".$this->getPdeOrdenPagoTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_INICIAL." = ".$this->getInicial()."
						, ".self::GEN_ATTR_MIN_ACTUAL." = ".$this->getActual()."
						, ".self::GEN_ATTR_MIN_PRV_PREVENTISTA_ID." = ".$this->getPrvPreventistaId()."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID." = ".$this->getGralEmpresaTransportadoraId()."
						, ".self::GEN_ATTR_MIN_GUIA." = '".$this->getGuia()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA." = '".$this->getNotaInterna()."'
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA." = '".$this->getNotaPublica()."'
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
            $o = new PdeOrdenPagoEstado();
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

	/* Delete de BPdeOrdenPagoEstado */ 	
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
	
	public function duplicarPdeOrdenPagoEstado(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getPdeOrdenPagoEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = PdeOrdenPagoEstado::setAplicarFiltrosDeAlcance($criterio);

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
	
		$pdeordenpagoestados = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $pdeordenpagoestado = new PdeOrdenPagoEstado();
                    $pdeordenpagoestado->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $pdeordenpagoestado->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$pdeordenpagoestado->setPdeOrdenPagoId($fila[self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_ID]);
			$pdeordenpagoestado->setPdeOrdenPagoTipoEstadoId($fila[self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_TIPO_ESTADO_ID]);
			$pdeordenpagoestado->setInicial($fila[self::GEN_ATTR_MIN_INICIAL]);
			$pdeordenpagoestado->setActual($fila[self::GEN_ATTR_MIN_ACTUAL]);
			$pdeordenpagoestado->setPrvPreventistaId($fila[self::GEN_ATTR_MIN_PRV_PREVENTISTA_ID]);
			$pdeordenpagoestado->setGralEmpresaTransportadoraId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID]);
			$pdeordenpagoestado->setGuia($fila[self::GEN_ATTR_MIN_GUIA]);
			$pdeordenpagoestado->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$pdeordenpagoestado->setNotaInterna($fila[self::GEN_ATTR_MIN_NOTA_INTERNA]);
			$pdeordenpagoestado->setNotaPublica($fila[self::GEN_ATTR_MIN_NOTA_PUBLICA]);
			$pdeordenpagoestado->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$pdeordenpagoestado->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$pdeordenpagoestado->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$pdeordenpagoestado->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$pdeordenpagoestado->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$pdeordenpagoestado->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$pdeordenpagoestado->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $pdeordenpagoestados[] = $pdeordenpagoestado;
		}
		
		return $pdeordenpagoestados;
	}	
	

	/* Método getPdeOrdenPagoEstados Habilitados */ 	
	static function getPdeOrdenPagoEstadosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return PdeOrdenPagoEstado::getPdeOrdenPagoEstados($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getPdeOrdenPagoEstados para listado de Backend */ 	
	static function getPdeOrdenPagoEstadosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return PdeOrdenPagoEstado::getPdeOrdenPagoEstados($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getPdeOrdenPagoEstadosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = PdeOrdenPagoEstado::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = PdeOrdenPagoEstado::getPdeOrdenPagoEstados($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPdeOrdenPagoEstados filtrado para select */ 	
	static function getPdeOrdenPagoEstadosCmbF($paginador = null, $criterio = null){
            $col = PdeOrdenPagoEstado::getPdeOrdenPagoEstados($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPdeOrdenPagoEstados filtrado por una coleccion de objetos foraneos de PdeOrdenPago */ 	
	static function getPdeOrdenPagoEstadosXPdeOrdenPagos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOrdenPagoEstado::GEN_ATTR_PDE_ORDEN_PAGO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOrdenPagoEstado::GEN_TABLA);
            $c->addOrden(PdeOrdenPagoEstado::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOrdenPagoEstado::getPdeOrdenPagoEstados($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeOrdenPagoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeOrdenPagoEstados filtrado por una coleccion de objetos foraneos de PdeOrdenPagoTipoEstado */ 	
	static function getPdeOrdenPagoEstadosXPdeOrdenPagoTipoEstados($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOrdenPagoEstado::GEN_ATTR_PDE_ORDEN_PAGO_TIPO_ESTADO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOrdenPagoEstado::GEN_TABLA);
            $c->addOrden(PdeOrdenPagoEstado::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOrdenPagoEstado::getPdeOrdenPagoEstados($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeOrdenPagoTipoEstadoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeOrdenPagoEstados filtrado por una coleccion de objetos foraneos de PrvPreventista */ 	
	static function getPdeOrdenPagoEstadosXPrvPreventistas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOrdenPagoEstado::GEN_ATTR_PRV_PREVENTISTA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOrdenPagoEstado::GEN_TABLA);
            $c->addOrden(PdeOrdenPagoEstado::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOrdenPagoEstado::getPdeOrdenPagoEstados($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrvPreventistaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeOrdenPagoEstados filtrado por una coleccion de objetos foraneos de GralEmpresaTransportadora */ 	
	static function getPdeOrdenPagoEstadosXGralEmpresaTransportadoras($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOrdenPagoEstado::GEN_ATTR_GRAL_EMPRESA_TRANSPORTADORA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOrdenPagoEstado::GEN_TABLA);
            $c->addOrden(PdeOrdenPagoEstado::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOrdenPagoEstado::getPdeOrdenPagoEstados($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralEmpresaTransportadoraId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'pde_orden_pago_estado_adm.php';
            $url_gestion = 'pde_orden_pago_estado_gestion.php';
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
	

	/* Metodo que retorna el PdeOrdenPago (Clave Foranea) */ 	
    public function getPdeOrdenPago(){
        $o = new PdeOrdenPago();
        $o->setId($this->getPdeOrdenPagoId());
        return $o;			
    }

	/* Metodo que retorna el PdeOrdenPago (Clave Foranea) en Array */ 	
    public function getPdeOrdenPagoEnArray(&$arr_os){
        if($this->getPdeOrdenPagoId() != 'null'){
            if(isset($arr_os[$this->getPdeOrdenPagoId()])){
                $o = $arr_os[$this->getPdeOrdenPagoId()];
            }else{
                $o = PdeOrdenPago::getOxId($this->getPdeOrdenPagoId());
                if($o){
                    $arr_os[$this->getPdeOrdenPagoId()] = $o;
                }
            }
        }else{
            $o = new PdeOrdenPago();
        }
        return $o;		
    }

	/* Metodo que retorna el PdeOrdenPagoTipoEstado (Clave Foranea) */ 	
    public function getPdeOrdenPagoTipoEstado(){
        $o = new PdeOrdenPagoTipoEstado();
        $o->setId($this->getPdeOrdenPagoTipoEstadoId());
        return $o;			
    }

	/* Metodo que retorna el PdeOrdenPagoTipoEstado (Clave Foranea) en Array */ 	
    public function getPdeOrdenPagoTipoEstadoEnArray(&$arr_os){
        if($this->getPdeOrdenPagoTipoEstadoId() != 'null'){
            if(isset($arr_os[$this->getPdeOrdenPagoTipoEstadoId()])){
                $o = $arr_os[$this->getPdeOrdenPagoTipoEstadoId()];
            }else{
                $o = PdeOrdenPagoTipoEstado::getOxId($this->getPdeOrdenPagoTipoEstadoId());
                if($o){
                    $arr_os[$this->getPdeOrdenPagoTipoEstadoId()] = $o;
                }
            }
        }else{
            $o = new PdeOrdenPagoTipoEstado();
        }
        return $o;		
    }

	/* Metodo que retorna el PrvPreventista (Clave Foranea) */ 	
    public function getPrvPreventista(){
        $o = new PrvPreventista();
        $o->setId($this->getPrvPreventistaId());
        return $o;			
    }

	/* Metodo que retorna el PrvPreventista (Clave Foranea) en Array */ 	
    public function getPrvPreventistaEnArray(&$arr_os){
        if($this->getPrvPreventistaId() != 'null'){
            if(isset($arr_os[$this->getPrvPreventistaId()])){
                $o = $arr_os[$this->getPrvPreventistaId()];
            }else{
                $o = PrvPreventista::getOxId($this->getPrvPreventistaId());
                if($o){
                    $arr_os[$this->getPrvPreventistaId()] = $o;
                }
            }
        }else{
            $o = new PrvPreventista();
        }
        return $o;		
    }

	/* Metodo que retorna el GralEmpresaTransportadora (Clave Foranea) */ 	
    public function getGralEmpresaTransportadora(){
        $o = new GralEmpresaTransportadora();
        $o->setId($this->getGralEmpresaTransportadoraId());
        return $o;			
    }

	/* Metodo que retorna el GralEmpresaTransportadora (Clave Foranea) en Array */ 	
    public function getGralEmpresaTransportadoraEnArray(&$arr_os){
        if($this->getGralEmpresaTransportadoraId() != 'null'){
            if(isset($arr_os[$this->getGralEmpresaTransportadoraId()])){
                $o = $arr_os[$this->getGralEmpresaTransportadoraId()];
            }else{
                $o = GralEmpresaTransportadora::getOxId($this->getGralEmpresaTransportadoraId());
                if($o){
                    $arr_os[$this->getGralEmpresaTransportadoraId()] = $o;
                }
            }
        }else{
            $o = new GralEmpresaTransportadora();
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
            		
        if($contexto_solicitante != PdeOrdenPago::GEN_CLASE){
            if($this->getPdeOrdenPago()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeOrdenPago::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeOrdenPago()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdeOrdenPagoTipoEstado::GEN_CLASE){
            if($this->getPdeOrdenPagoTipoEstado()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeOrdenPagoTipoEstado::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeOrdenPagoTipoEstado()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PrvPreventista::GEN_CLASE){
            if($this->getPrvPreventista()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PrvPreventista::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPrvPreventista()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralEmpresaTransportadora::GEN_CLASE){
            if($this->getGralEmpresaTransportadora()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralEmpresaTransportadora::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralEmpresaTransportadora()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM pde_orden_pago_estado'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'pde_orden_pago_estado';");
            
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

            $obs = self::getPdeOrdenPagoEstados($paginador, $criterio);
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

            $obs = self::getPdeOrdenPagoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagoEstados($paginador, $criterio);
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

            $obs = self::getPdeOrdenPagoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_orden_pago_id' */ 	
	static function getOxPdeOrdenPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_ORDEN_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagoEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_orden_pago_id' */ 	
	static function getOsxPdeOrdenPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_ORDEN_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOrdenPagoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_orden_pago_tipo_estado_id' */ 	
	static function getOxPdeOrdenPagoTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_ORDEN_PAGO_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagoEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_orden_pago_tipo_estado_id' */ 	
	static function getOsxPdeOrdenPagoTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_ORDEN_PAGO_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOrdenPagoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'inicial' */ 	
	static function getOxInicial($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INICIAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagoEstados($paginador, $criterio);
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

            $obs = self::getPdeOrdenPagoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'actual' */ 	
	static function getOxActual($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ACTUAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagoEstados($paginador, $criterio);
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

            $obs = self::getPdeOrdenPagoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prv_preventista_id' */ 	
	static function getOxPrvPreventistaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_PREVENTISTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagoEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'prv_preventista_id' */ 	
	static function getOsxPrvPreventistaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_PREVENTISTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOrdenPagoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_empresa_transportadora_id' */ 	
	static function getOxGralEmpresaTransportadoraId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_EMPRESA_TRANSPORTADORA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagoEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_empresa_transportadora_id' */ 	
	static function getOsxGralEmpresaTransportadoraId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_EMPRESA_TRANSPORTADORA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOrdenPagoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'guia' */ 	
	static function getOxGuia($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GUIA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagoEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'guia' */ 	
	static function getOsxGuia($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GUIA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOrdenPagoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagoEstados($paginador, $criterio);
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

            $obs = self::getPdeOrdenPagoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nota_interna' */ 	
	static function getOxNotaInterna($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTA_INTERNA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagoEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'nota_interna' */ 	
	static function getOsxNotaInterna($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTA_INTERNA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOrdenPagoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nota_publica' */ 	
	static function getOxNotaPublica($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTA_PUBLICA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagoEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'nota_publica' */ 	
	static function getOsxNotaPublica($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTA_PUBLICA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOrdenPagoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagoEstados($paginador, $criterio);
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

            $obs = self::getPdeOrdenPagoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagoEstados($paginador, $criterio);
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

            $obs = self::getPdeOrdenPagoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagoEstados($paginador, $criterio);
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

            $obs = self::getPdeOrdenPagoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagoEstados($paginador, $criterio);
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

            $obs = self::getPdeOrdenPagoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagoEstados($paginador, $criterio);
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

            $obs = self::getPdeOrdenPagoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagoEstados($paginador, $criterio);
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

            $obs = self::getPdeOrdenPagoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagoEstados($paginador, $criterio);
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

            $obs = self::getPdeOrdenPagoEstados(null, $criterio);
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

            $obs = self::getPdeOrdenPagoEstados($paginador, $criterio);
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

            $obs = self::getPdeOrdenPagoEstados($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'pde_orden_pago_estado_adm');
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
                $c->addTabla(PdeOrdenPagoEstado::GEN_TABLA);
                $c->addOrden(PdeOrdenPagoEstado::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $pde_orden_pago_estados = PdeOrdenPagoEstado::getPdeOrdenPagoEstados(null, $c);

                $arr = array();
                foreach($pde_orden_pago_estados as $pde_orden_pago_estado){
                    $descripcion = $pde_orden_pago_estado->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>