<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BPdePedido
{ 
	
	const SES_PAGINACION = 'adm_pdepedido_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_pdepedido_paginas_registros';
	const SES_CRITERIOS = 'adm_pdepedido_criterios';
	
	const GEN_CLASE = 'PdePedido';
	const GEN_TABLA = 'pde_pedido';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BPdePedido */ 
	const GEN_ATTR_ID = 'pde_pedido.id';
	const GEN_ATTR_DESCRIPCION = 'pde_pedido.descripcion';
	const GEN_ATTR_PDE_CENTRO_PEDIDO_ID = 'pde_pedido.pde_centro_pedido_id';
	const GEN_ATTR_INS_INSUMO_ID = 'pde_pedido.ins_insumo_id';
	const GEN_ATTR_PDE_URGENCIA_ID = 'pde_pedido.pde_urgencia_id';
	const GEN_ATTR_PDE_TIPO_ESTADO_ID = 'pde_pedido.pde_tipo_estado_id';
	const GEN_ATTR_CANTIDAD = 'pde_pedido.cantidad';
	const GEN_ATTR_VENCIMIENTO = 'pde_pedido.vencimiento';
	const GEN_ATTR_CODIGO = 'pde_pedido.codigo';
	const GEN_ATTR_COMENTARIO_PROVEEDOR = 'pde_pedido.comentario_proveedor';
	const GEN_ATTR_NOTA_PUBLICA = 'pde_pedido.nota_publica';
	const GEN_ATTR_NOTA_INTERNA = 'pde_pedido.nota_interna';
	const GEN_ATTR_OBSERVACION = 'pde_pedido.observacion';
	const GEN_ATTR_ORDEN = 'pde_pedido.orden';
	const GEN_ATTR_ESTADO = 'pde_pedido.estado';
	const GEN_ATTR_CREADO = 'pde_pedido.creado';
	const GEN_ATTR_CREADO_POR = 'pde_pedido.creado_por';
	const GEN_ATTR_MODIFICADO = 'pde_pedido.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'pde_pedido.modificado_por';

	/* Constantes de Atributos Min de BPdePedido */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID = 'pde_centro_pedido_id';
	const GEN_ATTR_MIN_INS_INSUMO_ID = 'ins_insumo_id';
	const GEN_ATTR_MIN_PDE_URGENCIA_ID = 'pde_urgencia_id';
	const GEN_ATTR_MIN_PDE_TIPO_ESTADO_ID = 'pde_tipo_estado_id';
	const GEN_ATTR_MIN_CANTIDAD = 'cantidad';
	const GEN_ATTR_MIN_VENCIMIENTO = 'vencimiento';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_COMENTARIO_PROVEEDOR = 'comentario_proveedor';
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
	

	/* Atributos de BPdePedido */ 
	private $id;
	private $descripcion;
	private $pde_centro_pedido_id;
	private $ins_insumo_id;
	private $pde_urgencia_id;
	private $pde_tipo_estado_id;
	private $cantidad;
	private $vencimiento;
	private $codigo;
	private $comentario_proveedor;
	private $nota_publica;
	private $nota_interna;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BPdePedido */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getPdeCentroPedidoId(){ if(isset($this->pde_centro_pedido_id)){ return $this->pde_centro_pedido_id; }else{ return 'null'; } }
	public function getInsInsumoId(){ if(isset($this->ins_insumo_id)){ return $this->ins_insumo_id; }else{ return 'null'; } }
	public function getPdeUrgenciaId(){ if(isset($this->pde_urgencia_id)){ return $this->pde_urgencia_id; }else{ return 'null'; } }
	public function getPdeTipoEstadoId(){ if(isset($this->pde_tipo_estado_id)){ return $this->pde_tipo_estado_id; }else{ return 'null'; } }
	public function getCantidad(){ if(isset($this->cantidad)){ return $this->cantidad; }else{ return 0; } }
	public function getVencimiento(){ if(isset($this->vencimiento)){ return $this->vencimiento; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getComentarioProveedor(){ if(isset($this->comentario_proveedor)){ return $this->comentario_proveedor; }else{ return ''; } }
	public function getNotaPublica(){ if(isset($this->nota_publica)){ return $this->nota_publica; }else{ return ''; } }
	public function getNotaInterna(){ if(isset($this->nota_interna)){ return $this->nota_interna; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 'null'; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 'null'; } }

	/* Setters de BPdePedido */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_PDE_CENTRO_PEDIDO_ID."
				, ".self::GEN_ATTR_INS_INSUMO_ID."
				, ".self::GEN_ATTR_PDE_URGENCIA_ID."
				, ".self::GEN_ATTR_PDE_TIPO_ESTADO_ID."
				, ".self::GEN_ATTR_CANTIDAD."
				, ".self::GEN_ATTR_VENCIMIENTO."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_COMENTARIO_PROVEEDOR."
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
				$this->setPdeCentroPedidoId($fila[self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID]);
				$this->setInsInsumoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_ID]);
				$this->setPdeUrgenciaId($fila[self::GEN_ATTR_MIN_PDE_URGENCIA_ID]);
				$this->setPdeTipoEstadoId($fila[self::GEN_ATTR_MIN_PDE_TIPO_ESTADO_ID]);
				$this->setCantidad($fila[self::GEN_ATTR_MIN_CANTIDAD]);
				$this->setVencimiento($fila[self::GEN_ATTR_MIN_VENCIMIENTO]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setComentarioProveedor($fila[self::GEN_ATTR_MIN_COMENTARIO_PROVEEDOR]);
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
	public function setPdeCentroPedidoId($v){ $this->pde_centro_pedido_id = $v; }
	public function setInsInsumoId($v){ $this->ins_insumo_id = $v; }
	public function setPdeUrgenciaId($v){ $this->pde_urgencia_id = $v; }
	public function setPdeTipoEstadoId($v){ $this->pde_tipo_estado_id = $v; }
	public function setCantidad($v){ $this->cantidad = $v; }
	public function setVencimiento($v){ $this->vencimiento = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setComentarioProveedor($v){ $this->comentario_proveedor = $v; }
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
            $o = new PdePedido();
            $o->setId($fila[PdePedido::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setPdeCentroPedidoId($fila[self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID]);
			$o->setInsInsumoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_ID]);
			$o->setPdeUrgenciaId($fila[self::GEN_ATTR_MIN_PDE_URGENCIA_ID]);
			$o->setPdeTipoEstadoId($fila[self::GEN_ATTR_MIN_PDE_TIPO_ESTADO_ID]);
			$o->setCantidad($fila[self::GEN_ATTR_MIN_CANTIDAD]);
			$o->setVencimiento($fila[self::GEN_ATTR_MIN_VENCIMIENTO]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setComentarioProveedor($fila[self::GEN_ATTR_MIN_COMENTARIO_PROVEEDOR]);
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

	/* Control de BPdePedido */ 	
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

	/* Cambia el estado de BPdePedido */ 	
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

	/* Save de BPdePedido */ 	
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
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID."
						, ".self::GEN_ATTR_MIN_PDE_URGENCIA_ID."
						, ".self::GEN_ATTR_MIN_PDE_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_CANTIDAD."
						, ".self::GEN_ATTR_MIN_VENCIMIENTO."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_COMENTARIO_PROVEEDOR."
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA."
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('pde_pedido_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getPdeCentroPedidoId()."
						, ".$this->getInsInsumoId()."
						, ".$this->getPdeUrgenciaId()."
						, ".$this->getPdeTipoEstadoId()."
						, '".$this->getCantidad()."'
						, '".$this->getVencimiento()."'
						, '".$this->getCodigo()."'
						, '".$this->getComentarioProveedor()."'
						, '".$this->getNotaPublica()."'
						, '".$this->getNotaInterna()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('pde_pedido_seq')";
            
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
                 
				 ".PdePedido::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID." = ".$this->getPdeCentroPedidoId()."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID." = ".$this->getInsInsumoId()."
						, ".self::GEN_ATTR_MIN_PDE_URGENCIA_ID." = ".$this->getPdeUrgenciaId()."
						, ".self::GEN_ATTR_MIN_PDE_TIPO_ESTADO_ID." = ".$this->getPdeTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_CANTIDAD." = '".$this->getCantidad()."'
						, ".self::GEN_ATTR_MIN_VENCIMIENTO." = '".$this->getVencimiento()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_COMENTARIO_PROVEEDOR." = '".$this->getComentarioProveedor()."'
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
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID."
						, ".self::GEN_ATTR_MIN_PDE_URGENCIA_ID."
						, ".self::GEN_ATTR_MIN_PDE_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_CANTIDAD."
						, ".self::GEN_ATTR_MIN_VENCIMIENTO."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_COMENTARIO_PROVEEDOR."
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
						, ".$this->getPdeCentroPedidoId()."
						, ".$this->getInsInsumoId()."
						, ".$this->getPdeUrgenciaId()."
						, ".$this->getPdeTipoEstadoId()."
						, '".$this->getCantidad()."'
						, '".$this->getVencimiento()."'
						, '".$this->getCodigo()."'
						, '".$this->getComentarioProveedor()."'
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
                     
				 ".PdePedido::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID." = ".$this->getPdeCentroPedidoId()."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID." = ".$this->getInsInsumoId()."
						, ".self::GEN_ATTR_MIN_PDE_URGENCIA_ID." = ".$this->getPdeUrgenciaId()."
						, ".self::GEN_ATTR_MIN_PDE_TIPO_ESTADO_ID." = ".$this->getPdeTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_CANTIDAD." = '".$this->getCantidad()."'
						, ".self::GEN_ATTR_MIN_VENCIMIENTO." = '".$this->getVencimiento()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_COMENTARIO_PROVEEDOR." = '".$this->getComentarioProveedor()."'
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
            $o = new PdePedido();
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

	/* Delete de BPdePedido */ 	
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
	
            // se elimina la coleccion de PdeEstados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeEstado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeEstados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdePedidoEnviados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdePedidoEnviado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdePedidoEnviados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdePedidoDestinatarios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdePedidoDestinatario::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdePedidoDestinatarios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdePedidoEnvioEmails relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdePedidoEnvioEmail::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdePedidoEnvioEmails(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdePedidoPrvProveedors relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdePedidoPrvProveedor::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdePedidoPrvProveedors(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdePedidoPrvProveedorAvisados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdePedidoPrvProveedorAvisado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdePedidoPrvProveedorAvisados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeCotizacions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeCotizacion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeCotizacions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeOcs relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOc::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOcs(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeRecepcions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeRecepcion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeRecepcions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarPdePedido(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getPdePedidos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = PdePedido::setAplicarFiltrosDeAlcance($criterio);

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
	
		$pdepedidos = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $pdepedido = new PdePedido();
                    $pdepedido->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $pdepedido->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$pdepedido->setPdeCentroPedidoId($fila[self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID]);
			$pdepedido->setInsInsumoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_ID]);
			$pdepedido->setPdeUrgenciaId($fila[self::GEN_ATTR_MIN_PDE_URGENCIA_ID]);
			$pdepedido->setPdeTipoEstadoId($fila[self::GEN_ATTR_MIN_PDE_TIPO_ESTADO_ID]);
			$pdepedido->setCantidad($fila[self::GEN_ATTR_MIN_CANTIDAD]);
			$pdepedido->setVencimiento($fila[self::GEN_ATTR_MIN_VENCIMIENTO]);
			$pdepedido->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$pdepedido->setComentarioProveedor($fila[self::GEN_ATTR_MIN_COMENTARIO_PROVEEDOR]);
			$pdepedido->setNotaPublica($fila[self::GEN_ATTR_MIN_NOTA_PUBLICA]);
			$pdepedido->setNotaInterna($fila[self::GEN_ATTR_MIN_NOTA_INTERNA]);
			$pdepedido->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$pdepedido->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$pdepedido->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$pdepedido->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$pdepedido->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$pdepedido->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$pdepedido->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $pdepedidos[] = $pdepedido;
		}
		
		return $pdepedidos;
	}	
	

	/* Método getPdePedidos Habilitados */ 	
	static function getPdePedidosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return PdePedido::getPdePedidos($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getPdePedidos para listado de Backend */ 	
	static function getPdePedidosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return PdePedido::getPdePedidos($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getPdePedidosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = PdePedido::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = PdePedido::getPdePedidos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPdePedidos filtrado para select */ 	
	static function getPdePedidosCmbF($paginador = null, $criterio = null){
            $col = PdePedido::getPdePedidos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPdePedidos filtrado por una coleccion de objetos foraneos de PdeCentroPedido */ 	
	static function getPdePedidosXPdeCentroPedidos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdePedido::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdePedido::GEN_TABLA);
            $c->addOrden(PdePedido::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdePedido::getPdePedidos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeCentroPedidoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdePedidos filtrado por una coleccion de objetos foraneos de InsInsumo */ 	
	static function getPdePedidosXInsInsumos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdePedido::GEN_ATTR_INS_INSUMO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdePedido::GEN_TABLA);
            $c->addOrden(PdePedido::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdePedido::getPdePedidos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsInsumoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdePedidos filtrado por una coleccion de objetos foraneos de PdeUrgencia */ 	
	static function getPdePedidosXPdeUrgencias($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdePedido::GEN_ATTR_PDE_URGENCIA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdePedido::GEN_TABLA);
            $c->addOrden(PdePedido::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdePedido::getPdePedidos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeUrgenciaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdePedidos filtrado por una coleccion de objetos foraneos de PdeTipoEstado */ 	
	static function getPdePedidosXPdeTipoEstados($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdePedido::GEN_ATTR_PDE_TIPO_ESTADO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdePedido::GEN_TABLA);
            $c->addOrden(PdePedido::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdePedido::getPdePedidos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeTipoEstadoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'pde_pedido_adm.php';
            $url_gestion = 'pde_pedido_gestion.php';
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
	

	/* Metodo getPdeEstados */ 	
	public function getPdeEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeEstado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeEstado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeEstado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeEstado::GEN_ATTR_PDE_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeEstado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeEstado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdeestados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdeestado = PdeEstado::hidratarObjeto($fila);			
                $pdeestados[] = $pdeestado;
            }

            return $pdeestados;
	}	
	

	/* Método getPdeEstadosBloque para MasInfo */ 	
	public function getPdeEstadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeEstados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeEstados Habilitados */ 	
	public function getPdeEstadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeEstados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeEstado */ 	
	public function getPdeEstado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeEstados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeEstado relacionadas */ 	
	public function deletePdeEstados(){
            $obs = $this->getPdeEstados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeEstadosCmb() PdeEstado relacionadas */ 	
	public function getPdeEstadosCmb(){
            $c = new Criterio();
            $c->add(PdeEstado::GEN_ATTR_PDE_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeEstado::GEN_TABLA);
            $c->setCriterios();

            $os = PdeEstado::getPdeEstadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeTipoEstados (Coleccion) relacionados a traves de PdeEstado */ 	
	public function getPdeTipoEstadosXPdeEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeEstado::GEN_ATTR_PDE_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTipoEstado::GEN_TABLA);
            $c->addRealJoin(PdeEstado::GEN_TABLA, PdeEstado::GEN_ATTR_PDE_TIPO_ESTADO_ID, PdeTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTipoEstado::getPdeTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeTipoEstados relacionados a traves de PdeEstado */ 	
	public function getCantidadPdeTipoEstadosXPdeEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeEstado::GEN_ATTR_PDE_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTipoEstado::GEN_TABLA);
            $c->addRealJoin(PdeEstado::GEN_TABLA, PdeEstado::GEN_ATTR_PDE_TIPO_ESTADO_ID, PdeTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTipoEstado::getPdeTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeTipoEstado (Objeto) relacionado a traves de PdeEstado */ 	
	public function getPdeTipoEstadoXPdeEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeTipoEstadosXPdeEstado($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdePedidoEnviados */ 	
	public function getPdePedidoEnviados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdePedidoEnviado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdePedidoEnviado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdePedidoEnviado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdePedidoEnviado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdePedidoEnviado::GEN_ATTR_PDE_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdePedidoEnviado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdePedidoEnviado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdePedidoEnviado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdepedidoenviados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdepedidoenviado = PdePedidoEnviado::hidratarObjeto($fila);			
                $pdepedidoenviados[] = $pdepedidoenviado;
            }

            return $pdepedidoenviados;
	}	
	

	/* Método getPdePedidoEnviadosBloque para MasInfo */ 	
	public function getPdePedidoEnviadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdePedidoEnviados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdePedidoEnviados Habilitados */ 	
	public function getPdePedidoEnviadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdePedidoEnviados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdePedidoEnviado */ 	
	public function getPdePedidoEnviado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdePedidoEnviados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdePedidoEnviado relacionadas */ 	
	public function deletePdePedidoEnviados(){
            $obs = $this->getPdePedidoEnviados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdePedidoEnviadosCmb() PdePedidoEnviado relacionadas */ 	
	public function getPdePedidoEnviadosCmb(){
            $c = new Criterio();
            $c->add(PdePedidoEnviado::GEN_ATTR_PDE_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdePedidoEnviado::GEN_TABLA);
            $c->setCriterios();

            $os = PdePedidoEnviado::getPdePedidoEnviadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvProveedors (Coleccion) relacionados a traves de PdePedidoEnviado */ 	
	public function getPrvProveedorsXPdePedidoEnviado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdePedidoEnviado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdePedidoEnviado::GEN_ATTR_PDE_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdePedidoEnviado::GEN_TABLA, PdePedidoEnviado::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvProveedors relacionados a traves de PdePedidoEnviado */ 	
	public function getCantidadPrvProveedorsXPdePedidoEnviado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvProveedor::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdePedidoEnviado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdePedidoEnviado::GEN_ATTR_PDE_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdePedidoEnviado::GEN_TABLA, PdePedidoEnviado::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvProveedor (Objeto) relacionado a traves de PdePedidoEnviado */ 	
	public function getPrvProveedorXPdePedidoEnviado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvProveedorsXPdePedidoEnviado($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdePedidoDestinatarios */ 	
	public function getPdePedidoDestinatarios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdePedidoDestinatario::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdePedidoDestinatario::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdePedidoDestinatario::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdePedidoDestinatario::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdePedidoDestinatario::GEN_ATTR_PDE_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdePedidoDestinatario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdePedidoDestinatario::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdePedidoDestinatario::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdepedidodestinatarios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdepedidodestinatario = PdePedidoDestinatario::hidratarObjeto($fila);			
                $pdepedidodestinatarios[] = $pdepedidodestinatario;
            }

            return $pdepedidodestinatarios;
	}	
	

	/* Método getPdePedidoDestinatariosBloque para MasInfo */ 	
	public function getPdePedidoDestinatariosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdePedidoDestinatarios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdePedidoDestinatarios Habilitados */ 	
	public function getPdePedidoDestinatariosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdePedidoDestinatarios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdePedidoDestinatario */ 	
	public function getPdePedidoDestinatario($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdePedidoDestinatarios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdePedidoDestinatario relacionadas */ 	
	public function deletePdePedidoDestinatarios(){
            $obs = $this->getPdePedidoDestinatarios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdePedidoDestinatariosCmb() PdePedidoDestinatario relacionadas */ 	
	public function getPdePedidoDestinatariosCmb(){
            $c = new Criterio();
            $c->add(PdePedidoDestinatario::GEN_ATTR_PDE_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdePedidoDestinatario::GEN_TABLA);
            $c->setCriterios();

            $os = PdePedidoDestinatario::getPdePedidoDestinatariosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener UsUsuarios (Coleccion) relacionados a traves de PdePedidoDestinatario */ 	
	public function getUsUsuariosXPdePedidoDestinatario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(UsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdePedidoDestinatario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdePedidoDestinatario::GEN_ATTR_PDE_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsUsuario::GEN_TABLA);
            $c->addRealJoin(PdePedidoDestinatario::GEN_TABLA, PdePedidoDestinatario::GEN_ATTR_US_USUARIO_ID, UsUsuario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = UsUsuario::getUsUsuarios($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de UsUsuarios relacionados a traves de PdePedidoDestinatario */ 	
	public function getCantidadUsUsuariosXPdePedidoDestinatario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(UsUsuario::GEN_ATTR_ID);
            if($estado){
                $c->add(UsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdePedidoDestinatario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdePedidoDestinatario::GEN_ATTR_PDE_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsUsuario::GEN_TABLA);
            $c->addRealJoin(PdePedidoDestinatario::GEN_TABLA, PdePedidoDestinatario::GEN_ATTR_US_USUARIO_ID, UsUsuario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = UsUsuario::getUsUsuarios($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener UsUsuario (Objeto) relacionado a traves de PdePedidoDestinatario */ 	
	public function getUsUsuarioXPdePedidoDestinatario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getUsUsuariosXPdePedidoDestinatario($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdePedidoEnvioEmails */ 	
	public function getPdePedidoEnvioEmails($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdePedidoEnvioEmail::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdePedidoEnvioEmail::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdePedidoEnvioEmail::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdePedidoEnvioEmail::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdePedidoEnvioEmail::GEN_ATTR_PDE_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdePedidoEnvioEmail::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdePedidoEnvioEmail::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdePedidoEnvioEmail::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdepedidoenvioemails = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdepedidoenvioemail = PdePedidoEnvioEmail::hidratarObjeto($fila);			
                $pdepedidoenvioemails[] = $pdepedidoenvioemail;
            }

            return $pdepedidoenvioemails;
	}	
	

	/* Método getPdePedidoEnvioEmailsBloque para MasInfo */ 	
	public function getPdePedidoEnvioEmailsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdePedidoEnvioEmails($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdePedidoEnvioEmails Habilitados */ 	
	public function getPdePedidoEnvioEmailsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdePedidoEnvioEmails($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdePedidoEnvioEmail */ 	
	public function getPdePedidoEnvioEmail($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdePedidoEnvioEmails($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdePedidoEnvioEmail relacionadas */ 	
	public function deletePdePedidoEnvioEmails(){
            $obs = $this->getPdePedidoEnvioEmails();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdePedidoEnvioEmailsCmb() PdePedidoEnvioEmail relacionadas */ 	
	public function getPdePedidoEnvioEmailsCmb(){
            $c = new Criterio();
            $c->add(PdePedidoEnvioEmail::GEN_ATTR_PDE_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdePedidoEnvioEmail::GEN_TABLA);
            $c->setCriterios();

            $os = PdePedidoEnvioEmail::getPdePedidoEnvioEmailsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdePedidoDestinatarios (Coleccion) relacionados a traves de PdePedidoEnvioEmail */ 	
	public function getPdePedidoDestinatariosXPdePedidoEnvioEmail($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdePedidoDestinatario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdePedidoEnvioEmail::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdePedidoEnvioEmail::GEN_ATTR_PDE_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdePedidoDestinatario::GEN_TABLA);
            $c->addRealJoin(PdePedidoEnvioEmail::GEN_TABLA, PdePedidoEnvioEmail::GEN_ATTR_PDE_PEDIDO_DESTINATARIO_ID, PdePedidoDestinatario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdePedidoDestinatario::getPdePedidoDestinatarios($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdePedidoDestinatarios relacionados a traves de PdePedidoEnvioEmail */ 	
	public function getCantidadPdePedidoDestinatariosXPdePedidoEnvioEmail($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdePedidoDestinatario::GEN_ATTR_ID);
            if($estado){
                $c->add(PdePedidoDestinatario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdePedidoEnvioEmail::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdePedidoEnvioEmail::GEN_ATTR_PDE_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdePedidoDestinatario::GEN_TABLA);
            $c->addRealJoin(PdePedidoEnvioEmail::GEN_TABLA, PdePedidoEnvioEmail::GEN_ATTR_PDE_PEDIDO_DESTINATARIO_ID, PdePedidoDestinatario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdePedidoDestinatario::getPdePedidoDestinatarios($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdePedidoDestinatario (Objeto) relacionado a traves de PdePedidoEnvioEmail */ 	
	public function getPdePedidoDestinatarioXPdePedidoEnvioEmail($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdePedidoDestinatariosXPdePedidoEnvioEmail($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdePedidoPrvProveedors */ 	
	public function getPdePedidoPrvProveedors($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdePedidoPrvProveedor::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdePedidoPrvProveedor::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdePedidoPrvProveedor::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdePedidoPrvProveedor::GEN_ATTR_PDE_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdePedidoPrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdePedidoPrvProveedor::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdePedidoPrvProveedor::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdepedidoprvproveedors = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdepedidoprvproveedor = PdePedidoPrvProveedor::hidratarObjeto($fila);			
                $pdepedidoprvproveedors[] = $pdepedidoprvproveedor;
            }

            return $pdepedidoprvproveedors;
	}	
	

	/* Método getPdePedidoPrvProveedorsBloque para MasInfo */ 	
	public function getPdePedidoPrvProveedorsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdePedidoPrvProveedors($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdePedidoPrvProveedors Habilitados */ 	
	public function getPdePedidoPrvProveedorsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdePedidoPrvProveedors($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdePedidoPrvProveedor */ 	
	public function getPdePedidoPrvProveedor($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdePedidoPrvProveedors($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdePedidoPrvProveedor relacionadas */ 	
	public function deletePdePedidoPrvProveedors(){
            $obs = $this->getPdePedidoPrvProveedors();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdePedidoPrvProveedorsCmb() PdePedidoPrvProveedor relacionadas */ 	
	public function getPdePedidoPrvProveedorsCmb(){
            $c = new Criterio();
            $c->add(PdePedidoPrvProveedor::GEN_ATTR_PDE_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdePedidoPrvProveedor::GEN_TABLA);
            $c->setCriterios();

            $os = PdePedidoPrvProveedor::getPdePedidoPrvProveedorsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvProveedors (Coleccion) relacionados a traves de PdePedidoPrvProveedor */ 	
	public function getPrvProveedorsXPdePedidoPrvProveedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdePedidoPrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdePedidoPrvProveedor::GEN_ATTR_PDE_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdePedidoPrvProveedor::GEN_TABLA, PdePedidoPrvProveedor::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvProveedors relacionados a traves de PdePedidoPrvProveedor */ 	
	public function getCantidadPrvProveedorsXPdePedidoPrvProveedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvProveedor::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdePedidoPrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdePedidoPrvProveedor::GEN_ATTR_PDE_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdePedidoPrvProveedor::GEN_TABLA, PdePedidoPrvProveedor::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvProveedor (Objeto) relacionado a traves de PdePedidoPrvProveedor */ 	
	public function getPrvProveedorXPdePedidoPrvProveedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvProveedorsXPdePedidoPrvProveedor($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdePedidoPrvProveedorAvisados */ 	
	public function getPdePedidoPrvProveedorAvisados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdePedidoPrvProveedorAvisado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdePedidoPrvProveedorAvisado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdePedidoPrvProveedorAvisado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdePedidoPrvProveedorAvisado::GEN_ATTR_PDE_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdePedidoPrvProveedorAvisado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdePedidoPrvProveedorAvisado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdePedidoPrvProveedorAvisado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdepedidoprvproveedoravisados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdepedidoprvproveedoravisado = PdePedidoPrvProveedorAvisado::hidratarObjeto($fila);			
                $pdepedidoprvproveedoravisados[] = $pdepedidoprvproveedoravisado;
            }

            return $pdepedidoprvproveedoravisados;
	}	
	

	/* Método getPdePedidoPrvProveedorAvisadosBloque para MasInfo */ 	
	public function getPdePedidoPrvProveedorAvisadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdePedidoPrvProveedorAvisados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdePedidoPrvProveedorAvisados Habilitados */ 	
	public function getPdePedidoPrvProveedorAvisadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdePedidoPrvProveedorAvisados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdePedidoPrvProveedorAvisado */ 	
	public function getPdePedidoPrvProveedorAvisado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdePedidoPrvProveedorAvisados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdePedidoPrvProveedorAvisado relacionadas */ 	
	public function deletePdePedidoPrvProveedorAvisados(){
            $obs = $this->getPdePedidoPrvProveedorAvisados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdePedidoPrvProveedorAvisadosCmb() PdePedidoPrvProveedorAvisado relacionadas */ 	
	public function getPdePedidoPrvProveedorAvisadosCmb(){
            $c = new Criterio();
            $c->add(PdePedidoPrvProveedorAvisado::GEN_ATTR_PDE_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdePedidoPrvProveedorAvisado::GEN_TABLA);
            $c->setCriterios();

            $os = PdePedidoPrvProveedorAvisado::getPdePedidoPrvProveedorAvisadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvProveedors (Coleccion) relacionados a traves de PdePedidoPrvProveedorAvisado */ 	
	public function getPrvProveedorsXPdePedidoPrvProveedorAvisado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdePedidoPrvProveedorAvisado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdePedidoPrvProveedorAvisado::GEN_ATTR_PDE_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdePedidoPrvProveedorAvisado::GEN_TABLA, PdePedidoPrvProveedorAvisado::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvProveedors relacionados a traves de PdePedidoPrvProveedorAvisado */ 	
	public function getCantidadPrvProveedorsXPdePedidoPrvProveedorAvisado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvProveedor::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdePedidoPrvProveedorAvisado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdePedidoPrvProveedorAvisado::GEN_ATTR_PDE_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdePedidoPrvProveedorAvisado::GEN_TABLA, PdePedidoPrvProveedorAvisado::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvProveedor (Objeto) relacionado a traves de PdePedidoPrvProveedorAvisado */ 	
	public function getPrvProveedorXPdePedidoPrvProveedorAvisado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvProveedorsXPdePedidoPrvProveedorAvisado($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeCotizacions */ 	
	public function getPdeCotizacions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeCotizacion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeCotizacion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeCotizacion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeCotizacion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeCotizacion::GEN_ATTR_PDE_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeCotizacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeCotizacion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeCotizacion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdecotizacions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdecotizacion = PdeCotizacion::hidratarObjeto($fila);			
                $pdecotizacions[] = $pdecotizacion;
            }

            return $pdecotizacions;
	}	
	

	/* Método getPdeCotizacionsBloque para MasInfo */ 	
	public function getPdeCotizacionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeCotizacions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeCotizacions Habilitados */ 	
	public function getPdeCotizacionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeCotizacions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeCotizacion */ 	
	public function getPdeCotizacion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeCotizacions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeCotizacion relacionadas */ 	
	public function deletePdeCotizacions(){
            $obs = $this->getPdeCotizacions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeCotizacionsCmb() PdeCotizacion relacionadas */ 	
	public function getPdeCotizacionsCmb(){
            $c = new Criterio();
            $c->add(PdeCotizacion::GEN_ATTR_PDE_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeCotizacion::GEN_TABLA);
            $c->setCriterios();

            $os = PdeCotizacion::getPdeCotizacionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvProveedors (Coleccion) relacionados a traves de PdeCotizacion */ 	
	public function getPrvProveedorsXPdeCotizacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeCotizacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeCotizacion::GEN_ATTR_PDE_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeCotizacion::GEN_TABLA, PdeCotizacion::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvProveedors relacionados a traves de PdeCotizacion */ 	
	public function getCantidadPrvProveedorsXPdeCotizacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvProveedor::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeCotizacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeCotizacion::GEN_ATTR_PDE_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeCotizacion::GEN_TABLA, PdeCotizacion::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvProveedor (Objeto) relacionado a traves de PdeCotizacion */ 	
	public function getPrvProveedorXPdeCotizacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvProveedorsXPdeCotizacion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeOcs */ 	
	public function getPdeOcs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeOc::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeOc::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeOc::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeOc::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeOc::GEN_ATTR_PDE_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeOc::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeOc::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdeocs = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdeoc = PdeOc::hidratarObjeto($fila);			
                $pdeocs[] = $pdeoc;
            }

            return $pdeocs;
	}	
	

	/* Método getPdeOcsBloque para MasInfo */ 	
	public function getPdeOcsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeOcs($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeOcs Habilitados */ 	
	public function getPdeOcsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeOcs($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeOc */ 	
	public function getPdeOc($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeOcs($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeOc relacionadas */ 	
	public function deletePdeOcs(){
            $obs = $this->getPdeOcs();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeOcsCmb() PdeOc relacionadas */ 	
	public function getPdeOcsCmb(){
            $c = new Criterio();
            $c->add(PdeOc::GEN_ATTR_PDE_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOc::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOc::getPdeOcsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeCotizacions (Coleccion) relacionados a traves de PdeOc */ 	
	public function getPdeCotizacionsXPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeCotizacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOc::GEN_ATTR_PDE_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeCotizacion::GEN_TABLA);
            $c->addRealJoin(PdeOc::GEN_TABLA, PdeOc::GEN_ATTR_PDE_COTIZACION_ID, PdeCotizacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeCotizacion::getPdeCotizacions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeCotizacions relacionados a traves de PdeOc */ 	
	public function getCantidadPdeCotizacionsXPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeCotizacion::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeCotizacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOc::GEN_ATTR_PDE_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeCotizacion::GEN_TABLA);
            $c->addRealJoin(PdeOc::GEN_TABLA, PdeOc::GEN_ATTR_PDE_COTIZACION_ID, PdeCotizacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeCotizacion::getPdeCotizacions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeCotizacion (Objeto) relacionado a traves de PdeOc */ 	
	public function getPdeCotizacionXPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeCotizacionsXPdeOc($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeRecepcions */ 	
	public function getPdeRecepcions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeRecepcion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeRecepcion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeRecepcion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeRecepcion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeRecepcion::GEN_ATTR_PDE_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeRecepcion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeRecepcion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pderecepcions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pderecepcion = PdeRecepcion::hidratarObjeto($fila);			
                $pderecepcions[] = $pderecepcion;
            }

            return $pderecepcions;
	}	
	

	/* Método getPdeRecepcionsBloque para MasInfo */ 	
	public function getPdeRecepcionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeRecepcions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeRecepcions Habilitados */ 	
	public function getPdeRecepcionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeRecepcions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeRecepcion */ 	
	public function getPdeRecepcion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeRecepcions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeRecepcion relacionadas */ 	
	public function deletePdeRecepcions(){
            $obs = $this->getPdeRecepcions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeRecepcionsCmb() PdeRecepcion relacionadas */ 	
	public function getPdeRecepcionsCmb(){
            $c = new Criterio();
            $c->add(PdeRecepcion::GEN_ATTR_PDE_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeRecepcion::GEN_TABLA);
            $c->setCriterios();

            $os = PdeRecepcion::getPdeRecepcionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeTipoRecepcions (Coleccion) relacionados a traves de PdeRecepcion */ 	
	public function getPdeTipoRecepcionsXPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeTipoRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeRecepcion::GEN_ATTR_PDE_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTipoRecepcion::GEN_TABLA);
            $c->addRealJoin(PdeRecepcion::GEN_TABLA, PdeRecepcion::GEN_ATTR_PDE_TIPO_RECEPCION_ID, PdeTipoRecepcion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTipoRecepcion::getPdeTipoRecepcions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeTipoRecepcions relacionados a traves de PdeRecepcion */ 	
	public function getCantidadPdeTipoRecepcionsXPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeTipoRecepcion::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeTipoRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeRecepcion::GEN_ATTR_PDE_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTipoRecepcion::GEN_TABLA);
            $c->addRealJoin(PdeRecepcion::GEN_TABLA, PdeRecepcion::GEN_ATTR_PDE_TIPO_RECEPCION_ID, PdeTipoRecepcion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTipoRecepcion::getPdeTipoRecepcions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeTipoRecepcion (Objeto) relacionado a traves de PdeRecepcion */ 	
	public function getPdeTipoRecepcionXPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeTipoRecepcionsXPdeRecepcion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los PrvProveedors asignados a PdePedido */ 	
	public function getPdePedidoPrvProveedorsId(){
            $ids = array();
            foreach($this->getPdePedidoPrvProveedors() as $o){
            
                $ids[] = $o->getPrvProveedorId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos PrvProveedors asignados al PdePedido */ 	
	public function setPdePedidoPrvProveedors($ids){
            $this->deletePdePedidoPrvProveedors();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new PdePedidoPrvProveedor();
                    $o->setPrvProveedorId($id);
                    $o->setPdePedidoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion PrvProveedor en el alta de PdePedido */ 	
	public function getAltaMostrarBloqueRelacionPdePedidoPrvProveedor(){
            return true;
	}
	

	/* Metodo que retorna el PdeCentroPedido (Clave Foranea) */ 	
    public function getPdeCentroPedido(){
        $o = new PdeCentroPedido();
        $o->setId($this->getPdeCentroPedidoId());
        return $o;			
    }

	/* Metodo que retorna el PdeCentroPedido (Clave Foranea) en Array */ 	
    public function getPdeCentroPedidoEnArray(&$arr_os){
        if($this->getPdeCentroPedidoId() != 'null'){
            if(isset($arr_os[$this->getPdeCentroPedidoId()])){
                $o = $arr_os[$this->getPdeCentroPedidoId()];
            }else{
                $o = PdeCentroPedido::getOxId($this->getPdeCentroPedidoId());
                if($o){
                    $arr_os[$this->getPdeCentroPedidoId()] = $o;
                }
            }
        }else{
            $o = new PdeCentroPedido();
        }
        return $o;		
    }

	/* Metodo que retorna el InsInsumo (Clave Foranea) */ 	
    public function getInsInsumo(){
        $o = new InsInsumo();
        $o->setId($this->getInsInsumoId());
        return $o;			
    }

	/* Metodo que retorna el InsInsumo (Clave Foranea) en Array */ 	
    public function getInsInsumoEnArray(&$arr_os){
        if($this->getInsInsumoId() != 'null'){
            if(isset($arr_os[$this->getInsInsumoId()])){
                $o = $arr_os[$this->getInsInsumoId()];
            }else{
                $o = InsInsumo::getOxId($this->getInsInsumoId());
                if($o){
                    $arr_os[$this->getInsInsumoId()] = $o;
                }
            }
        }else{
            $o = new InsInsumo();
        }
        return $o;		
    }

	/* Metodo que retorna el PdeUrgencia (Clave Foranea) */ 	
    public function getPdeUrgencia(){
        $o = new PdeUrgencia();
        $o->setId($this->getPdeUrgenciaId());
        return $o;			
    }

	/* Metodo que retorna el PdeUrgencia (Clave Foranea) en Array */ 	
    public function getPdeUrgenciaEnArray(&$arr_os){
        if($this->getPdeUrgenciaId() != 'null'){
            if(isset($arr_os[$this->getPdeUrgenciaId()])){
                $o = $arr_os[$this->getPdeUrgenciaId()];
            }else{
                $o = PdeUrgencia::getOxId($this->getPdeUrgenciaId());
                if($o){
                    $arr_os[$this->getPdeUrgenciaId()] = $o;
                }
            }
        }else{
            $o = new PdeUrgencia();
        }
        return $o;		
    }

	/* Metodo que retorna el PdeTipoEstado (Clave Foranea) */ 	
    public function getPdeTipoEstado(){
        $o = new PdeTipoEstado();
        $o->setId($this->getPdeTipoEstadoId());
        return $o;			
    }

	/* Metodo que retorna el PdeTipoEstado (Clave Foranea) en Array */ 	
    public function getPdeTipoEstadoEnArray(&$arr_os){
        if($this->getPdeTipoEstadoId() != 'null'){
            if(isset($arr_os[$this->getPdeTipoEstadoId()])){
                $o = $arr_os[$this->getPdeTipoEstadoId()];
            }else{
                $o = PdeTipoEstado::getOxId($this->getPdeTipoEstadoId());
                if($o){
                    $arr_os[$this->getPdeTipoEstadoId()] = $o;
                }
            }
        }else{
            $o = new PdeTipoEstado();
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
            		
        if($contexto_solicitante != PdeCentroPedido::GEN_CLASE){
            if($this->getPdeCentroPedido()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeCentroPedido::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeCentroPedido()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != InsInsumo::GEN_CLASE){
            if($this->getInsInsumo()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(InsInsumo::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getInsInsumo()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdeUrgencia::GEN_CLASE){
            if($this->getPdeUrgencia()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeUrgencia::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeUrgencia()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdeTipoEstado::GEN_CLASE){
            if($this->getPdeTipoEstado()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeTipoEstado::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeTipoEstado()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM pde_pedido'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'pde_pedido';");
            
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

            $obs = self::getPdePedidos($paginador, $criterio);
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

            $obs = self::getPdePedidos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidos($paginador, $criterio);
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

            $obs = self::getPdePedidos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_centro_pedido_id' */ 	
	static function getOxPdeCentroPedidoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_centro_pedido_id' */ 	
	static function getOsxPdeCentroPedidoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdePedidos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_insumo_id' */ 	
	static function getOxInsInsumoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_INSUMO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ins_insumo_id' */ 	
	static function getOsxInsInsumoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_INSUMO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdePedidos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_urgencia_id' */ 	
	static function getOxPdeUrgenciaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_URGENCIA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_urgencia_id' */ 	
	static function getOsxPdeUrgenciaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_URGENCIA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdePedidos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_tipo_estado_id' */ 	
	static function getOxPdeTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_tipo_estado_id' */ 	
	static function getOsxPdeTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdePedidos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cantidad' */ 	
	static function getOxCantidad($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cantidad' */ 	
	static function getOsxCantidad($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdePedidos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vencimiento' */ 	
	static function getOxVencimiento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VENCIMIENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vencimiento' */ 	
	static function getOsxVencimiento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VENCIMIENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdePedidos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidos($paginador, $criterio);
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

            $obs = self::getPdePedidos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'comentario_proveedor' */ 	
	static function getOxComentarioProveedor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_COMENTARIO_PROVEEDOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'comentario_proveedor' */ 	
	static function getOsxComentarioProveedor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_COMENTARIO_PROVEEDOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdePedidos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nota_publica' */ 	
	static function getOxNotaPublica($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTA_PUBLICA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidos($paginador, $criterio);
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

            $obs = self::getPdePedidos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nota_interna' */ 	
	static function getOxNotaInterna($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTA_INTERNA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidos($paginador, $criterio);
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

            $obs = self::getPdePedidos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidos($paginador, $criterio);
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

            $obs = self::getPdePedidos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidos($paginador, $criterio);
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

            $obs = self::getPdePedidos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidos($paginador, $criterio);
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

            $obs = self::getPdePedidos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidos($paginador, $criterio);
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

            $obs = self::getPdePedidos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidos($paginador, $criterio);
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

            $obs = self::getPdePedidos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidos($paginador, $criterio);
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

            $obs = self::getPdePedidos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidos($paginador, $criterio);
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

            $obs = self::getPdePedidos(null, $criterio);
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

            $obs = self::getPdePedidos($paginador, $criterio);
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

            $obs = self::getPdePedidos($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'pde_pedido_adm');
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

	/* Metodos anexos a manejo de fechas (date y datetime) 'vencimiento' */ 	
	public function getVencimientoDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getVencimiento(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getVencimientoDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getVencimientoDiferenciaDias();
        
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
                $c->addTabla(PdePedido::GEN_TABLA);
                $c->addOrden(PdePedido::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $pde_pedidos = PdePedido::getPdePedidos(null, $c);

                $arr = array();
                foreach($pde_pedidos as $pde_pedido){
                    $descripcion = $pde_pedido->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>