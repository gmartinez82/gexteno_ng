<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BPdiPedidoAgrupacion
{ 
	
	const SES_PAGINACION = 'adm_pdipedidoagrupacion_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_pdipedidoagrupacion_paginas_registros';
	const SES_CRITERIOS = 'adm_pdipedidoagrupacion_criterios';
	
	const GEN_CLASE = 'PdiPedidoAgrupacion';
	const GEN_TABLA = 'pdi_pedido_agrupacion';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BPdiPedidoAgrupacion */ 
	const GEN_ATTR_ID = 'pdi_pedido_agrupacion.id';
	const GEN_ATTR_DESCRIPCION = 'pdi_pedido_agrupacion.descripcion';
	const GEN_ATTR_CODIGO = 'pdi_pedido_agrupacion.codigo';
	const GEN_ATTR_PAN_PANOL_ORIGEN = 'pdi_pedido_agrupacion.pan_panol_origen';
	const GEN_ATTR_PAN_PANOL_DESTINO = 'pdi_pedido_agrupacion.pan_panol_destino';
	const GEN_ATTR_PDI_PEDIDO_AGRUPACION_TIPO_ESTADO_ID = 'pdi_pedido_agrupacion.pdi_pedido_agrupacion_tipo_estado_id';
	const GEN_ATTR_PDI_TIPO_ORIGEN_ID = 'pdi_pedido_agrupacion.pdi_tipo_origen_id';
	const GEN_ATTR_PDI_URGENCIA_ID = 'pdi_pedido_agrupacion.pdi_urgencia_id';
	const GEN_ATTR_NOTA_PUBLICA = 'pdi_pedido_agrupacion.nota_publica';
	const GEN_ATTR_NOTA_INTERNA = 'pdi_pedido_agrupacion.nota_interna';
	const GEN_ATTR_OBSERVACION = 'pdi_pedido_agrupacion.observacion';
	const GEN_ATTR_ORDEN = 'pdi_pedido_agrupacion.orden';
	const GEN_ATTR_ESTADO = 'pdi_pedido_agrupacion.estado';
	const GEN_ATTR_CREADO = 'pdi_pedido_agrupacion.creado';
	const GEN_ATTR_CREADO_POR = 'pdi_pedido_agrupacion.creado_por';
	const GEN_ATTR_MODIFICADO = 'pdi_pedido_agrupacion.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'pdi_pedido_agrupacion.modificado_por';

	/* Constantes de Atributos Min de BPdiPedidoAgrupacion */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_PAN_PANOL_ORIGEN = 'pan_panol_origen';
	const GEN_ATTR_MIN_PAN_PANOL_DESTINO = 'pan_panol_destino';
	const GEN_ATTR_MIN_PDI_PEDIDO_AGRUPACION_TIPO_ESTADO_ID = 'pdi_pedido_agrupacion_tipo_estado_id';
	const GEN_ATTR_MIN_PDI_TIPO_ORIGEN_ID = 'pdi_tipo_origen_id';
	const GEN_ATTR_MIN_PDI_URGENCIA_ID = 'pdi_urgencia_id';
	const GEN_ATTR_MIN_NOTA_PUBLICA = 'nota_publica';
	const GEN_ATTR_MIN_NOTA_INTERNA = 'nota_interna';
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
	

	/* Atributos de BPdiPedidoAgrupacion */ 
	private $id;
	private $descripcion;
	private $codigo;
	private $pan_panol_origen;
	private $pan_panol_destino;
	private $pdi_pedido_agrupacion_tipo_estado_id;
	private $pdi_tipo_origen_id;
	private $pdi_urgencia_id;
	private $nota_publica;
	private $nota_interna;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BPdiPedidoAgrupacion */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getPanPanolOrigen(){ if(isset($this->pan_panol_origen)){ return $this->pan_panol_origen; }else{ return 'null'; } }
	public function getPanPanolOrigenObj(){ if(isset($this->pan_panol_origen)){ return PanPanol::getOxId($this->pan_panol_origen); }else{ return new PanPanol(); } }
	public function getPanPanolDestino(){ if(isset($this->pan_panol_destino)){ return $this->pan_panol_destino; }else{ return 'null'; } }
	public function getPanPanolDestinoObj(){ if(isset($this->pan_panol_destino)){ return PanPanol::getOxId($this->pan_panol_destino); }else{ return new PanPanol(); } }
	public function getPdiPedidoAgrupacionTipoEstadoId(){ if(isset($this->pdi_pedido_agrupacion_tipo_estado_id)){ return $this->pdi_pedido_agrupacion_tipo_estado_id; }else{ return 'null'; } }
	public function getPdiTipoOrigenId(){ if(isset($this->pdi_tipo_origen_id)){ return $this->pdi_tipo_origen_id; }else{ return 'null'; } }
	public function getPdiUrgenciaId(){ if(isset($this->pdi_urgencia_id)){ return $this->pdi_urgencia_id; }else{ return 'null'; } }
	public function getNotaPublica(){ if(isset($this->nota_publica)){ return $this->nota_publica; }else{ return ''; } }
	public function getNotaInterna(){ if(isset($this->nota_interna)){ return $this->nota_interna; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 'null'; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 'null'; } }

	/* Setters de BPdiPedidoAgrupacion */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_PAN_PANOL_ORIGEN."
				, ".self::GEN_ATTR_PAN_PANOL_DESTINO."
				, ".self::GEN_ATTR_PDI_PEDIDO_AGRUPACION_TIPO_ESTADO_ID."
				, ".self::GEN_ATTR_PDI_TIPO_ORIGEN_ID."
				, ".self::GEN_ATTR_PDI_URGENCIA_ID."
				, ".self::GEN_ATTR_NOTA_PUBLICA."
				, ".self::GEN_ATTR_NOTA_INTERNA."
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
				$this->setPanPanolOrigen($fila[self::GEN_ATTR_MIN_PAN_PANOL_ORIGEN]);
				$this->setPanPanolDestino($fila[self::GEN_ATTR_MIN_PAN_PANOL_DESTINO]);
				$this->setPdiPedidoAgrupacionTipoEstadoId($fila[self::GEN_ATTR_MIN_PDI_PEDIDO_AGRUPACION_TIPO_ESTADO_ID]);
				$this->setPdiTipoOrigenId($fila[self::GEN_ATTR_MIN_PDI_TIPO_ORIGEN_ID]);
				$this->setPdiUrgenciaId($fila[self::GEN_ATTR_MIN_PDI_URGENCIA_ID]);
				$this->setNotaPublica($fila[self::GEN_ATTR_MIN_NOTA_PUBLICA]);
				$this->setNotaInterna($fila[self::GEN_ATTR_MIN_NOTA_INTERNA]);
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
	public function setPanPanolOrigen($v){ $this->pan_panol_origen = $v; }
	public function setPanPanolDestino($v){ $this->pan_panol_destino = $v; }
	public function setPdiPedidoAgrupacionTipoEstadoId($v){ $this->pdi_pedido_agrupacion_tipo_estado_id = $v; }
	public function setPdiTipoOrigenId($v){ $this->pdi_tipo_origen_id = $v; }
	public function setPdiUrgenciaId($v){ $this->pdi_urgencia_id = $v; }
	public function setNotaPublica($v){ $this->nota_publica = $v; }
	public function setNotaInterna($v){ $this->nota_interna = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new PdiPedidoAgrupacion();
            $o->setId($fila[PdiPedidoAgrupacion::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setPanPanolOrigen($fila[self::GEN_ATTR_MIN_PAN_PANOL_ORIGEN]);
			$o->setPanPanolDestino($fila[self::GEN_ATTR_MIN_PAN_PANOL_DESTINO]);
			$o->setPdiPedidoAgrupacionTipoEstadoId($fila[self::GEN_ATTR_MIN_PDI_PEDIDO_AGRUPACION_TIPO_ESTADO_ID]);
			$o->setPdiTipoOrigenId($fila[self::GEN_ATTR_MIN_PDI_TIPO_ORIGEN_ID]);
			$o->setPdiUrgenciaId($fila[self::GEN_ATTR_MIN_PDI_URGENCIA_ID]);
			$o->setNotaPublica($fila[self::GEN_ATTR_MIN_NOTA_PUBLICA]);
			$o->setNotaInterna($fila[self::GEN_ATTR_MIN_NOTA_INTERNA]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BPdiPedidoAgrupacion */ 	
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

	/* Cambia el estado de BPdiPedidoAgrupacion */ 	
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

	/* Save de BPdiPedidoAgrupacion */ 	
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
						, ".self::GEN_ATTR_MIN_PAN_PANOL_ORIGEN."
						, ".self::GEN_ATTR_MIN_PAN_PANOL_DESTINO."
						, ".self::GEN_ATTR_MIN_PDI_PEDIDO_AGRUPACION_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_PDI_TIPO_ORIGEN_ID."
						, ".self::GEN_ATTR_MIN_PDI_URGENCIA_ID."
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA."
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('pdi_pedido_agrupacion_seq'), 
                '".$this->getDescripcion()."'
						, '".$this->getCodigo()."'
						, ".$this->getPanPanolOrigen()."
						, ".$this->getPanPanolDestino()."
						, ".$this->getPdiPedidoAgrupacionTipoEstadoId()."
						, ".$this->getPdiTipoOrigenId()."
						, ".$this->getPdiUrgenciaId()."
						, '".$this->getNotaPublica()."'
						, '".$this->getNotaInterna()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('pdi_pedido_agrupacion_seq')";
            
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
                 
				 ".PdiPedidoAgrupacion::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_PAN_PANOL_ORIGEN." = ".$this->getPanPanolOrigen()."
						, ".self::GEN_ATTR_MIN_PAN_PANOL_DESTINO." = ".$this->getPanPanolDestino()."
						, ".self::GEN_ATTR_MIN_PDI_PEDIDO_AGRUPACION_TIPO_ESTADO_ID." = ".$this->getPdiPedidoAgrupacionTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_PDI_TIPO_ORIGEN_ID." = ".$this->getPdiTipoOrigenId()."
						, ".self::GEN_ATTR_MIN_PDI_URGENCIA_ID." = ".$this->getPdiUrgenciaId()."
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA." = '".$this->getNotaPublica()."'
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA." = '".$this->getNotaInterna()."'
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
						, ".self::GEN_ATTR_MIN_PAN_PANOL_ORIGEN."
						, ".self::GEN_ATTR_MIN_PAN_PANOL_DESTINO."
						, ".self::GEN_ATTR_MIN_PDI_PEDIDO_AGRUPACION_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_PDI_TIPO_ORIGEN_ID."
						, ".self::GEN_ATTR_MIN_PDI_URGENCIA_ID."
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA."
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA."
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
						, ".$this->getPanPanolOrigen()."
						, ".$this->getPanPanolDestino()."
						, ".$this->getPdiPedidoAgrupacionTipoEstadoId()."
						, ".$this->getPdiTipoOrigenId()."
						, ".$this->getPdiUrgenciaId()."
						, '".$this->getNotaPublica()."'
						, '".$this->getNotaInterna()."'
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
                     
				 ".PdiPedidoAgrupacion::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_PAN_PANOL_ORIGEN." = ".$this->getPanPanolOrigen()."
						, ".self::GEN_ATTR_MIN_PAN_PANOL_DESTINO." = ".$this->getPanPanolDestino()."
						, ".self::GEN_ATTR_MIN_PDI_PEDIDO_AGRUPACION_TIPO_ESTADO_ID." = ".$this->getPdiPedidoAgrupacionTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_PDI_TIPO_ORIGEN_ID." = ".$this->getPdiTipoOrigenId()."
						, ".self::GEN_ATTR_MIN_PDI_URGENCIA_ID." = ".$this->getPdiUrgenciaId()."
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA." = '".$this->getNotaPublica()."'
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA." = '".$this->getNotaInterna()."'
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
            $o = new PdiPedidoAgrupacion();
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

	/* Delete de BPdiPedidoAgrupacion */ 	
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
	
            // se elimina la coleccion de PdiPedidos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdiPedido::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdiPedidos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdiPedidoAgrupacionEstados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdiPedidoAgrupacionEstado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdiPedidoAgrupacionEstados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdiPedidoAgrupacionEnviados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdiPedidoAgrupacionEnviado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdiPedidoAgrupacionEnviados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdiPedidoAgrupacionItems relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdiPedidoAgrupacionItem::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdiPedidoAgrupacionItems(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarPdiPedidoAgrupacion(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getPdiPedidoAgrupacions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = PdiPedidoAgrupacion::setAplicarFiltrosDeAlcance($criterio);

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
	
		$pdipedidoagrupacions = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $pdipedidoagrupacion = new PdiPedidoAgrupacion();
                    $pdipedidoagrupacion->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $pdipedidoagrupacion->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$pdipedidoagrupacion->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$pdipedidoagrupacion->setPanPanolOrigen($fila[self::GEN_ATTR_MIN_PAN_PANOL_ORIGEN]);
			$pdipedidoagrupacion->setPanPanolDestino($fila[self::GEN_ATTR_MIN_PAN_PANOL_DESTINO]);
			$pdipedidoagrupacion->setPdiPedidoAgrupacionTipoEstadoId($fila[self::GEN_ATTR_MIN_PDI_PEDIDO_AGRUPACION_TIPO_ESTADO_ID]);
			$pdipedidoagrupacion->setPdiTipoOrigenId($fila[self::GEN_ATTR_MIN_PDI_TIPO_ORIGEN_ID]);
			$pdipedidoagrupacion->setPdiUrgenciaId($fila[self::GEN_ATTR_MIN_PDI_URGENCIA_ID]);
			$pdipedidoagrupacion->setNotaPublica($fila[self::GEN_ATTR_MIN_NOTA_PUBLICA]);
			$pdipedidoagrupacion->setNotaInterna($fila[self::GEN_ATTR_MIN_NOTA_INTERNA]);
			$pdipedidoagrupacion->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$pdipedidoagrupacion->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$pdipedidoagrupacion->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$pdipedidoagrupacion->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$pdipedidoagrupacion->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$pdipedidoagrupacion->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$pdipedidoagrupacion->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $pdipedidoagrupacions[] = $pdipedidoagrupacion;
		}
		
		return $pdipedidoagrupacions;
	}	
	

	/* Método getPdiPedidoAgrupacions Habilitados */ 	
	static function getPdiPedidoAgrupacionsHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return PdiPedidoAgrupacion::getPdiPedidoAgrupacions($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getPdiPedidoAgrupacions para listado de Backend */ 	
	static function getPdiPedidoAgrupacionsDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return PdiPedidoAgrupacion::getPdiPedidoAgrupacions($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getPdiPedidoAgrupacionsCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = PdiPedidoAgrupacion::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = PdiPedidoAgrupacion::getPdiPedidoAgrupacions($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPdiPedidoAgrupacions filtrado para select */ 	
	static function getPdiPedidoAgrupacionsCmbF($paginador = null, $criterio = null){
            $col = PdiPedidoAgrupacion::getPdiPedidoAgrupacions($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPdiPedidoAgrupacions filtrado por una coleccion de objetos foraneos de PdiPedidoAgrupacionTipoEstado */ 	
	static function getPdiPedidoAgrupacionsXPdiPedidoAgrupacionTipoEstados($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdiPedidoAgrupacion::GEN_ATTR_PDI_PEDIDO_AGRUPACION_TIPO_ESTADO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdiPedidoAgrupacion::GEN_TABLA);
            $c->addOrden(PdiPedidoAgrupacion::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdiPedidoAgrupacion::getPdiPedidoAgrupacions($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdiPedidoAgrupacionTipoEstadoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdiPedidoAgrupacions filtrado por una coleccion de objetos foraneos de PdiTipoOrigen */ 	
	static function getPdiPedidoAgrupacionsXPdiTipoOrigens($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdiPedidoAgrupacion::GEN_ATTR_PDI_TIPO_ORIGEN_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdiPedidoAgrupacion::GEN_TABLA);
            $c->addOrden(PdiPedidoAgrupacion::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdiPedidoAgrupacion::getPdiPedidoAgrupacions($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdiTipoOrigenId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdiPedidoAgrupacions filtrado por una coleccion de objetos foraneos de PdiUrgencia */ 	
	static function getPdiPedidoAgrupacionsXPdiUrgencias($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdiPedidoAgrupacion::GEN_ATTR_PDI_URGENCIA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdiPedidoAgrupacion::GEN_TABLA);
            $c->addOrden(PdiPedidoAgrupacion::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdiPedidoAgrupacion::getPdiPedidoAgrupacions($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdiUrgenciaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'pdi_pedido_agrupacion_adm.php';
            $url_gestion = 'pdi_pedido_agrupacion_gestion.php';
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
	

	/* Metodo getPdiPedidos */ 	
	public function getPdiPedidos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdiPedido::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdiPedido::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdiPedido::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdiPedido::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdiPedido::GEN_ATTR_PDI_PEDIDO_AGRUPACION_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdiPedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdiPedido::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdiPedido::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdipedidos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdipedido = PdiPedido::hidratarObjeto($fila);			
                $pdipedidos[] = $pdipedido;
            }

            return $pdipedidos;
	}	
	

	/* Método getPdiPedidosBloque para MasInfo */ 	
	public function getPdiPedidosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdiPedidos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdiPedidos Habilitados */ 	
	public function getPdiPedidosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdiPedidos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdiPedido */ 	
	public function getPdiPedido($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdiPedidos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdiPedido relacionadas */ 	
	public function deletePdiPedidos(){
            $obs = $this->getPdiPedidos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdiPedidosCmb() PdiPedido relacionadas */ 	
	public function getPdiPedidosCmb(){
            $c = new Criterio();
            $c->add(PdiPedido::GEN_ATTR_PDI_PEDIDO_AGRUPACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdiPedido::GEN_TABLA);
            $c->setCriterios();

            $os = PdiPedido::getPdiPedidosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsInsumos (Coleccion) relacionados a traves de PdiPedido */ 	
	public function getInsInsumosXPdiPedido($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdiPedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdiPedido::GEN_ATTR_PDI_PEDIDO_AGRUPACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(PdiPedido::GEN_TABLA, PdiPedido::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsInsumos relacionados a traves de PdiPedido */ 	
	public function getCantidadInsInsumosXPdiPedido($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsInsumo::GEN_ATTR_ID);
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdiPedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdiPedido::GEN_ATTR_PDI_PEDIDO_AGRUPACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(PdiPedido::GEN_TABLA, PdiPedido::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsInsumo (Objeto) relacionado a traves de PdiPedido */ 	
	public function getInsInsumoXPdiPedido($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsInsumosXPdiPedido($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdiPedidoAgrupacionEstados */ 	
	public function getPdiPedidoAgrupacionEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdiPedidoAgrupacionEstado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdiPedidoAgrupacionEstado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdiPedidoAgrupacionEstado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdiPedidoAgrupacionEstado::GEN_ATTR_PDI_PEDIDO_AGRUPACION_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdiPedidoAgrupacionEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdiPedidoAgrupacionEstado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdiPedidoAgrupacionEstado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdipedidoagrupacionestados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdipedidoagrupacionestado = PdiPedidoAgrupacionEstado::hidratarObjeto($fila);			
                $pdipedidoagrupacionestados[] = $pdipedidoagrupacionestado;
            }

            return $pdipedidoagrupacionestados;
	}	
	

	/* Método getPdiPedidoAgrupacionEstadosBloque para MasInfo */ 	
	public function getPdiPedidoAgrupacionEstadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdiPedidoAgrupacionEstados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdiPedidoAgrupacionEstados Habilitados */ 	
	public function getPdiPedidoAgrupacionEstadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdiPedidoAgrupacionEstados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdiPedidoAgrupacionEstado */ 	
	public function getPdiPedidoAgrupacionEstado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdiPedidoAgrupacionEstados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdiPedidoAgrupacionEstado relacionadas */ 	
	public function deletePdiPedidoAgrupacionEstados(){
            $obs = $this->getPdiPedidoAgrupacionEstados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdiPedidoAgrupacionEstadosCmb() PdiPedidoAgrupacionEstado relacionadas */ 	
	public function getPdiPedidoAgrupacionEstadosCmb(){
            $c = new Criterio();
            $c->add(PdiPedidoAgrupacionEstado::GEN_ATTR_PDI_PEDIDO_AGRUPACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdiPedidoAgrupacionEstado::GEN_TABLA);
            $c->setCriterios();

            $os = PdiPedidoAgrupacionEstado::getPdiPedidoAgrupacionEstadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdiPedidoAgrupacionTipoEstados (Coleccion) relacionados a traves de PdiPedidoAgrupacionEstado */ 	
	public function getPdiPedidoAgrupacionTipoEstadosXPdiPedidoAgrupacionEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdiPedidoAgrupacionTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdiPedidoAgrupacionEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdiPedidoAgrupacionEstado::GEN_ATTR_PDI_PEDIDO_AGRUPACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdiPedidoAgrupacionTipoEstado::GEN_TABLA);
            $c->addRealJoin(PdiPedidoAgrupacionEstado::GEN_TABLA, PdiPedidoAgrupacionEstado::GEN_ATTR_PDI_PEDIDO_AGRUPACION_TIPO_ESTADO_ID, PdiPedidoAgrupacionTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdiPedidoAgrupacionTipoEstado::getPdiPedidoAgrupacionTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdiPedidoAgrupacionTipoEstados relacionados a traves de PdiPedidoAgrupacionEstado */ 	
	public function getCantidadPdiPedidoAgrupacionTipoEstadosXPdiPedidoAgrupacionEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdiPedidoAgrupacionTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(PdiPedidoAgrupacionTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdiPedidoAgrupacionEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdiPedidoAgrupacionEstado::GEN_ATTR_PDI_PEDIDO_AGRUPACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdiPedidoAgrupacionTipoEstado::GEN_TABLA);
            $c->addRealJoin(PdiPedidoAgrupacionEstado::GEN_TABLA, PdiPedidoAgrupacionEstado::GEN_ATTR_PDI_PEDIDO_AGRUPACION_TIPO_ESTADO_ID, PdiPedidoAgrupacionTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdiPedidoAgrupacionTipoEstado::getPdiPedidoAgrupacionTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdiPedidoAgrupacionTipoEstado (Objeto) relacionado a traves de PdiPedidoAgrupacionEstado */ 	
	public function getPdiPedidoAgrupacionTipoEstadoXPdiPedidoAgrupacionEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdiPedidoAgrupacionTipoEstadosXPdiPedidoAgrupacionEstado($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdiPedidoAgrupacionEnviados */ 	
	public function getPdiPedidoAgrupacionEnviados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdiPedidoAgrupacionEnviado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdiPedidoAgrupacionEnviado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdiPedidoAgrupacionEnviado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdiPedidoAgrupacionEnviado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdiPedidoAgrupacionEnviado::GEN_ATTR_PDI_PEDIDO_AGRUPACION_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdiPedidoAgrupacionEnviado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdiPedidoAgrupacionEnviado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdiPedidoAgrupacionEnviado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdipedidoagrupacionenviados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdipedidoagrupacionenviado = PdiPedidoAgrupacionEnviado::hidratarObjeto($fila);			
                $pdipedidoagrupacionenviados[] = $pdipedidoagrupacionenviado;
            }

            return $pdipedidoagrupacionenviados;
	}	
	

	/* Método getPdiPedidoAgrupacionEnviadosBloque para MasInfo */ 	
	public function getPdiPedidoAgrupacionEnviadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdiPedidoAgrupacionEnviados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdiPedidoAgrupacionEnviados Habilitados */ 	
	public function getPdiPedidoAgrupacionEnviadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdiPedidoAgrupacionEnviados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdiPedidoAgrupacionEnviado */ 	
	public function getPdiPedidoAgrupacionEnviado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdiPedidoAgrupacionEnviados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdiPedidoAgrupacionEnviado relacionadas */ 	
	public function deletePdiPedidoAgrupacionEnviados(){
            $obs = $this->getPdiPedidoAgrupacionEnviados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdiPedidoAgrupacionEnviadosCmb() PdiPedidoAgrupacionEnviado relacionadas */ 	
	public function getPdiPedidoAgrupacionEnviadosCmb(){
            $c = new Criterio();
            $c->add(PdiPedidoAgrupacionEnviado::GEN_ATTR_PDI_PEDIDO_AGRUPACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdiPedidoAgrupacionEnviado::GEN_TABLA);
            $c->setCriterios();

            $os = PdiPedidoAgrupacionEnviado::getPdiPedidoAgrupacionEnviadosCmbF(null, $c);
            return $os;
	}

	/* Metodo getPdiPedidoAgrupacionItems */ 	
	public function getPdiPedidoAgrupacionItems($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdiPedidoAgrupacionItem::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdiPedidoAgrupacionItem::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdiPedidoAgrupacionItem::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdiPedidoAgrupacionItem::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdiPedidoAgrupacionItem::GEN_ATTR_PDI_PEDIDO_AGRUPACION_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdiPedidoAgrupacionItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdiPedidoAgrupacionItem::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdiPedidoAgrupacionItem::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdipedidoagrupacionitems = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdipedidoagrupacionitem = PdiPedidoAgrupacionItem::hidratarObjeto($fila);			
                $pdipedidoagrupacionitems[] = $pdipedidoagrupacionitem;
            }

            return $pdipedidoagrupacionitems;
	}	
	

	/* Método getPdiPedidoAgrupacionItemsBloque para MasInfo */ 	
	public function getPdiPedidoAgrupacionItemsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdiPedidoAgrupacionItems($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdiPedidoAgrupacionItems Habilitados */ 	
	public function getPdiPedidoAgrupacionItemsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdiPedidoAgrupacionItems($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdiPedidoAgrupacionItem */ 	
	public function getPdiPedidoAgrupacionItem($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdiPedidoAgrupacionItems($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdiPedidoAgrupacionItem relacionadas */ 	
	public function deletePdiPedidoAgrupacionItems(){
            $obs = $this->getPdiPedidoAgrupacionItems();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdiPedidoAgrupacionItemsCmb() PdiPedidoAgrupacionItem relacionadas */ 	
	public function getPdiPedidoAgrupacionItemsCmb(){
            $c = new Criterio();
            $c->add(PdiPedidoAgrupacionItem::GEN_ATTR_PDI_PEDIDO_AGRUPACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdiPedidoAgrupacionItem::GEN_TABLA);
            $c->setCriterios();

            $os = PdiPedidoAgrupacionItem::getPdiPedidoAgrupacionItemsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsInsumos (Coleccion) relacionados a traves de PdiPedidoAgrupacionItem */ 	
	public function getInsInsumosXPdiPedidoAgrupacionItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdiPedidoAgrupacionItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdiPedidoAgrupacionItem::GEN_ATTR_PDI_PEDIDO_AGRUPACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(PdiPedidoAgrupacionItem::GEN_TABLA, PdiPedidoAgrupacionItem::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsInsumos relacionados a traves de PdiPedidoAgrupacionItem */ 	
	public function getCantidadInsInsumosXPdiPedidoAgrupacionItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsInsumo::GEN_ATTR_ID);
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdiPedidoAgrupacionItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdiPedidoAgrupacionItem::GEN_ATTR_PDI_PEDIDO_AGRUPACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(PdiPedidoAgrupacionItem::GEN_TABLA, PdiPedidoAgrupacionItem::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsInsumo (Objeto) relacionado a traves de PdiPedidoAgrupacionItem */ 	
	public function getInsInsumoXPdiPedidoAgrupacionItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsInsumosXPdiPedidoAgrupacionItem($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna el PdiPedidoAgrupacionTipoEstado (Clave Foranea) */ 	
    public function getPdiPedidoAgrupacionTipoEstado(){
        $o = new PdiPedidoAgrupacionTipoEstado();
        $o->setId($this->getPdiPedidoAgrupacionTipoEstadoId());
        return $o;			
    }

	/* Metodo que retorna el PdiPedidoAgrupacionTipoEstado (Clave Foranea) en Array */ 	
    public function getPdiPedidoAgrupacionTipoEstadoEnArray(&$arr_os){
        if($this->getPdiPedidoAgrupacionTipoEstadoId() != 'null'){
            if(isset($arr_os[$this->getPdiPedidoAgrupacionTipoEstadoId()])){
                $o = $arr_os[$this->getPdiPedidoAgrupacionTipoEstadoId()];
            }else{
                $o = PdiPedidoAgrupacionTipoEstado::getOxId($this->getPdiPedidoAgrupacionTipoEstadoId());
                if($o){
                    $arr_os[$this->getPdiPedidoAgrupacionTipoEstadoId()] = $o;
                }
            }
        }else{
            $o = new PdiPedidoAgrupacionTipoEstado();
        }
        return $o;		
    }

	/* Metodo que retorna el PdiTipoOrigen (Clave Foranea) */ 	
    public function getPdiTipoOrigen(){
        $o = new PdiTipoOrigen();
        $o->setId($this->getPdiTipoOrigenId());
        return $o;			
    }

	/* Metodo que retorna el PdiTipoOrigen (Clave Foranea) en Array */ 	
    public function getPdiTipoOrigenEnArray(&$arr_os){
        if($this->getPdiTipoOrigenId() != 'null'){
            if(isset($arr_os[$this->getPdiTipoOrigenId()])){
                $o = $arr_os[$this->getPdiTipoOrigenId()];
            }else{
                $o = PdiTipoOrigen::getOxId($this->getPdiTipoOrigenId());
                if($o){
                    $arr_os[$this->getPdiTipoOrigenId()] = $o;
                }
            }
        }else{
            $o = new PdiTipoOrigen();
        }
        return $o;		
    }

	/* Metodo que retorna el PdiUrgencia (Clave Foranea) */ 	
    public function getPdiUrgencia(){
        $o = new PdiUrgencia();
        $o->setId($this->getPdiUrgenciaId());
        return $o;			
    }

	/* Metodo que retorna el PdiUrgencia (Clave Foranea) en Array */ 	
    public function getPdiUrgenciaEnArray(&$arr_os){
        if($this->getPdiUrgenciaId() != 'null'){
            if(isset($arr_os[$this->getPdiUrgenciaId()])){
                $o = $arr_os[$this->getPdiUrgenciaId()];
            }else{
                $o = PdiUrgencia::getOxId($this->getPdiUrgenciaId());
                if($o){
                    $arr_os[$this->getPdiUrgenciaId()] = $o;
                }
            }
        }else{
            $o = new PdiUrgencia();
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
            		
        if($contexto_solicitante != PanPanol::GEN_CLASE){
            if($this->getPanPanol()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PanPanol::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPanPanol()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PanPanol::GEN_CLASE){
            if($this->getPanPanol()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PanPanol::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPanPanol()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdiPedidoAgrupacionTipoEstado::GEN_CLASE){
            if($this->getPdiPedidoAgrupacionTipoEstado()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdiPedidoAgrupacionTipoEstado::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdiPedidoAgrupacionTipoEstado()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdiTipoOrigen::GEN_CLASE){
            if($this->getPdiTipoOrigen()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdiTipoOrigen::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdiTipoOrigen()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdiUrgencia::GEN_CLASE){
            if($this->getPdiUrgencia()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdiUrgencia::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdiUrgencia()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM pdi_pedido_agrupacion'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'pdi_pedido_agrupacion';");
            
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

            $obs = self::getPdiPedidoAgrupacions($paginador, $criterio);
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

            $obs = self::getPdiPedidoAgrupacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdiPedidoAgrupacions($paginador, $criterio);
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

            $obs = self::getPdiPedidoAgrupacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdiPedidoAgrupacions($paginador, $criterio);
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

            $obs = self::getPdiPedidoAgrupacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pan_panol_origen' */ 	
	static function getOxPanPanolOrigen($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PAN_PANOL_ORIGEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdiPedidoAgrupacions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pan_panol_origen' */ 	
	static function getOsxPanPanolOrigen($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PAN_PANOL_ORIGEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdiPedidoAgrupacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pan_panol_destino' */ 	
	static function getOxPanPanolDestino($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PAN_PANOL_DESTINO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdiPedidoAgrupacions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pan_panol_destino' */ 	
	static function getOsxPanPanolDestino($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PAN_PANOL_DESTINO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdiPedidoAgrupacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pdi_pedido_agrupacion_tipo_estado_id' */ 	
	static function getOxPdiPedidoAgrupacionTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDI_PEDIDO_AGRUPACION_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdiPedidoAgrupacions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pdi_pedido_agrupacion_tipo_estado_id' */ 	
	static function getOsxPdiPedidoAgrupacionTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDI_PEDIDO_AGRUPACION_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdiPedidoAgrupacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pdi_tipo_origen_id' */ 	
	static function getOxPdiTipoOrigenId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDI_TIPO_ORIGEN_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdiPedidoAgrupacions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pdi_tipo_origen_id' */ 	
	static function getOsxPdiTipoOrigenId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDI_TIPO_ORIGEN_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdiPedidoAgrupacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pdi_urgencia_id' */ 	
	static function getOxPdiUrgenciaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDI_URGENCIA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdiPedidoAgrupacions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pdi_urgencia_id' */ 	
	static function getOsxPdiUrgenciaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDI_URGENCIA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdiPedidoAgrupacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nota_publica' */ 	
	static function getOxNotaPublica($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTA_PUBLICA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdiPedidoAgrupacions($paginador, $criterio);
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

            $obs = self::getPdiPedidoAgrupacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nota_interna' */ 	
	static function getOxNotaInterna($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTA_INTERNA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdiPedidoAgrupacions($paginador, $criterio);
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

            $obs = self::getPdiPedidoAgrupacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdiPedidoAgrupacions($paginador, $criterio);
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

            $obs = self::getPdiPedidoAgrupacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdiPedidoAgrupacions($paginador, $criterio);
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

            $obs = self::getPdiPedidoAgrupacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdiPedidoAgrupacions($paginador, $criterio);
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

            $obs = self::getPdiPedidoAgrupacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdiPedidoAgrupacions($paginador, $criterio);
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

            $obs = self::getPdiPedidoAgrupacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdiPedidoAgrupacions($paginador, $criterio);
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

            $obs = self::getPdiPedidoAgrupacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdiPedidoAgrupacions($paginador, $criterio);
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

            $obs = self::getPdiPedidoAgrupacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdiPedidoAgrupacions($paginador, $criterio);
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

            $obs = self::getPdiPedidoAgrupacions(null, $criterio);
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

            $obs = self::getPdiPedidoAgrupacions($paginador, $criterio);
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

            $obs = self::getPdiPedidoAgrupacions($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'pdi_pedido_agrupacion_adm');
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
                $c->addTabla(PdiPedidoAgrupacion::GEN_TABLA);
                $c->addOrden(PdiPedidoAgrupacion::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $pdi_pedido_agrupacions = PdiPedidoAgrupacion::getPdiPedidoAgrupacions(null, $c);

                $arr = array();
                foreach($pdi_pedido_agrupacions as $pdi_pedido_agrupacion){
                    $descripcion = $pdi_pedido_agrupacion->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>