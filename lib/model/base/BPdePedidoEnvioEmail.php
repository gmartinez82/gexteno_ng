<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BPdePedidoEnvioEmail
{ 
	
	const SES_PAGINACION = 'adm_pdepedidoenvioemail_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_pdepedidoenvioemail_paginas_registros';
	const SES_CRITERIOS = 'adm_pdepedidoenvioemail_criterios';
	
	const GEN_CLASE = 'PdePedidoEnvioEmail';
	const GEN_TABLA = 'pde_pedido_envio_email';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BPdePedidoEnvioEmail */ 
	const GEN_ATTR_ID = 'pde_pedido_envio_email.id';
	const GEN_ATTR_DESCRIPCION = 'pde_pedido_envio_email.descripcion';
	const GEN_ATTR_PDE_PEDIDO_ID = 'pde_pedido_envio_email.pde_pedido_id';
	const GEN_ATTR_PDE_PEDIDO_DESTINATARIO_ID = 'pde_pedido_envio_email.pde_pedido_destinatario_id';
	const GEN_ATTR_ASUNTO = 'pde_pedido_envio_email.asunto';
	const GEN_ATTR_EMAIL = 'pde_pedido_envio_email.email';
	const GEN_ATTR_CUERPO = 'pde_pedido_envio_email.cuerpo';
	const GEN_ATTR_ADJUNTO = 'pde_pedido_envio_email.adjunto';
	const GEN_ATTR_CODIGO_ENVIO = 'pde_pedido_envio_email.codigo_envio';
	const GEN_ATTR_CODIGO = 'pde_pedido_envio_email.codigo';
	const GEN_ATTR_OBSERVACION = 'pde_pedido_envio_email.observacion';
	const GEN_ATTR_ORDEN = 'pde_pedido_envio_email.orden';
	const GEN_ATTR_ESTADO = 'pde_pedido_envio_email.estado';
	const GEN_ATTR_CREADO = 'pde_pedido_envio_email.creado';
	const GEN_ATTR_CREADO_POR = 'pde_pedido_envio_email.creado_por';
	const GEN_ATTR_MODIFICADO = 'pde_pedido_envio_email.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'pde_pedido_envio_email.modificado_por';

	/* Constantes de Atributos Min de BPdePedidoEnvioEmail */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_PDE_PEDIDO_ID = 'pde_pedido_id';
	const GEN_ATTR_MIN_PDE_PEDIDO_DESTINATARIO_ID = 'pde_pedido_destinatario_id';
	const GEN_ATTR_MIN_ASUNTO = 'asunto';
	const GEN_ATTR_MIN_EMAIL = 'email';
	const GEN_ATTR_MIN_CUERPO = 'cuerpo';
	const GEN_ATTR_MIN_ADJUNTO = 'adjunto';
	const GEN_ATTR_MIN_CODIGO_ENVIO = 'codigo_envio';
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
	

	/* Atributos de BPdePedidoEnvioEmail */ 
	private $id;
	private $descripcion;
	private $pde_pedido_id;
	private $pde_pedido_destinatario_id;
	private $asunto;
	private $email;
	private $cuerpo;
	private $adjunto;
	private $codigo_envio;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BPdePedidoEnvioEmail */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getPdePedidoId(){ if(isset($this->pde_pedido_id)){ return $this->pde_pedido_id; }else{ return 'null'; } }
	public function getPdePedidoDestinatarioId(){ if(isset($this->pde_pedido_destinatario_id)){ return $this->pde_pedido_destinatario_id; }else{ return 'null'; } }
	public function getAsunto(){ if(isset($this->asunto)){ return $this->asunto; }else{ return ''; } }
	public function getEmail(){ if(isset($this->email)){ return $this->email; }else{ return ''; } }
	public function getCuerpo(){ if(isset($this->cuerpo)){ return $this->cuerpo; }else{ return ''; } }
	public function getAdjunto(){ if(isset($this->adjunto)){ return $this->adjunto; }else{ return ''; } }
	public function getCodigoEnvio(){ if(isset($this->codigo_envio)){ return $this->codigo_envio; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BPdePedidoEnvioEmail */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_PDE_PEDIDO_ID."
				, ".self::GEN_ATTR_PDE_PEDIDO_DESTINATARIO_ID."
				, ".self::GEN_ATTR_ASUNTO."
				, ".self::GEN_ATTR_EMAIL."
				, ".self::GEN_ATTR_CUERPO."
				, ".self::GEN_ATTR_ADJUNTO."
				, ".self::GEN_ATTR_CODIGO_ENVIO."
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
				$this->setPdePedidoId($fila[self::GEN_ATTR_MIN_PDE_PEDIDO_ID]);
				$this->setPdePedidoDestinatarioId($fila[self::GEN_ATTR_MIN_PDE_PEDIDO_DESTINATARIO_ID]);
				$this->setAsunto($fila[self::GEN_ATTR_MIN_ASUNTO]);
				$this->setEmail($fila[self::GEN_ATTR_MIN_EMAIL]);
				$this->setCuerpo($fila[self::GEN_ATTR_MIN_CUERPO]);
				$this->setAdjunto($fila[self::GEN_ATTR_MIN_ADJUNTO]);
				$this->setCodigoEnvio($fila[self::GEN_ATTR_MIN_CODIGO_ENVIO]);
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
	public function setPdePedidoId($v){ $this->pde_pedido_id = $v; }
	public function setPdePedidoDestinatarioId($v){ $this->pde_pedido_destinatario_id = $v; }
	public function setAsunto($v){ $this->asunto = $v; }
	public function setEmail($v){ $this->email = $v; }
	public function setCuerpo($v){ $this->cuerpo = $v; }
	public function setAdjunto($v){ $this->adjunto = $v; }
	public function setCodigoEnvio($v){ $this->codigo_envio = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new PdePedidoEnvioEmail();
            $o->setId($fila[PdePedidoEnvioEmail::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setPdePedidoId($fila[self::GEN_ATTR_MIN_PDE_PEDIDO_ID]);
			$o->setPdePedidoDestinatarioId($fila[self::GEN_ATTR_MIN_PDE_PEDIDO_DESTINATARIO_ID]);
			$o->setAsunto($fila[self::GEN_ATTR_MIN_ASUNTO]);
			$o->setEmail($fila[self::GEN_ATTR_MIN_EMAIL]);
			$o->setCuerpo($fila[self::GEN_ATTR_MIN_CUERPO]);
			$o->setAdjunto($fila[self::GEN_ATTR_MIN_ADJUNTO]);
			$o->setCodigoEnvio($fila[self::GEN_ATTR_MIN_CODIGO_ENVIO]);
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

	/* Control de BPdePedidoEnvioEmail */ 	
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

	/* Cambia el estado de BPdePedidoEnvioEmail */ 	
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

	/* Save de BPdePedidoEnvioEmail */ 	
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
						, ".self::GEN_ATTR_MIN_PDE_PEDIDO_ID."
						, ".self::GEN_ATTR_MIN_PDE_PEDIDO_DESTINATARIO_ID."
						, ".self::GEN_ATTR_MIN_ASUNTO."
						, ".self::GEN_ATTR_MIN_EMAIL."
						, ".self::GEN_ATTR_MIN_CUERPO."
						, ".self::GEN_ATTR_MIN_ADJUNTO."
						, ".self::GEN_ATTR_MIN_CODIGO_ENVIO."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('pde_pedido_envio_email_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getPdePedidoId()."
						, ".$this->getPdePedidoDestinatarioId()."
						, '".$this->getAsunto()."'
						, '".$this->getEmail()."'
						, '".$this->getCuerpo()."'
						, '".$this->getAdjunto()."'
						, '".$this->getCodigoEnvio()."'
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('pde_pedido_envio_email_seq')";
            
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
                 
				 ".PdePedidoEnvioEmail::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_PDE_PEDIDO_ID." = ".$this->getPdePedidoId()."
						, ".self::GEN_ATTR_MIN_PDE_PEDIDO_DESTINATARIO_ID." = ".$this->getPdePedidoDestinatarioId()."
						, ".self::GEN_ATTR_MIN_ASUNTO." = '".$this->getAsunto()."'
						, ".self::GEN_ATTR_MIN_EMAIL." = '".$this->getEmail()."'
						, ".self::GEN_ATTR_MIN_CUERPO." = '".$this->getCuerpo()."'
						, ".self::GEN_ATTR_MIN_ADJUNTO." = '".$this->getAdjunto()."'
						, ".self::GEN_ATTR_MIN_CODIGO_ENVIO." = '".$this->getCodigoEnvio()."'
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
						, ".self::GEN_ATTR_MIN_PDE_PEDIDO_ID."
						, ".self::GEN_ATTR_MIN_PDE_PEDIDO_DESTINATARIO_ID."
						, ".self::GEN_ATTR_MIN_ASUNTO."
						, ".self::GEN_ATTR_MIN_EMAIL."
						, ".self::GEN_ATTR_MIN_CUERPO."
						, ".self::GEN_ATTR_MIN_ADJUNTO."
						, ".self::GEN_ATTR_MIN_CODIGO_ENVIO."
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
						, ".$this->getPdePedidoId()."
						, ".$this->getPdePedidoDestinatarioId()."
						, '".$this->getAsunto()."'
						, '".$this->getEmail()."'
						, '".$this->getCuerpo()."'
						, '".$this->getAdjunto()."'
						, '".$this->getCodigoEnvio()."'
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
                     
				 ".PdePedidoEnvioEmail::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_PDE_PEDIDO_ID." = ".$this->getPdePedidoId()."
						, ".self::GEN_ATTR_MIN_PDE_PEDIDO_DESTINATARIO_ID." = ".$this->getPdePedidoDestinatarioId()."
						, ".self::GEN_ATTR_MIN_ASUNTO." = '".$this->getAsunto()."'
						, ".self::GEN_ATTR_MIN_EMAIL." = '".$this->getEmail()."'
						, ".self::GEN_ATTR_MIN_CUERPO." = '".$this->getCuerpo()."'
						, ".self::GEN_ATTR_MIN_ADJUNTO." = '".$this->getAdjunto()."'
						, ".self::GEN_ATTR_MIN_CODIGO_ENVIO." = '".$this->getCodigoEnvio()."'
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
            $o = new PdePedidoEnvioEmail();
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

	/* Delete de BPdePedidoEnvioEmail */ 	
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
	
	public function duplicarPdePedidoEnvioEmail(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getPdePedidoEnvioEmails($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = PdePedidoEnvioEmail::setAplicarFiltrosDeAlcance($criterio);

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
	
		$pdepedidoenvioemails = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $pdepedidoenvioemail = new PdePedidoEnvioEmail();
                    $pdepedidoenvioemail->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $pdepedidoenvioemail->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$pdepedidoenvioemail->setPdePedidoId($fila[self::GEN_ATTR_MIN_PDE_PEDIDO_ID]);
			$pdepedidoenvioemail->setPdePedidoDestinatarioId($fila[self::GEN_ATTR_MIN_PDE_PEDIDO_DESTINATARIO_ID]);
			$pdepedidoenvioemail->setAsunto($fila[self::GEN_ATTR_MIN_ASUNTO]);
			$pdepedidoenvioemail->setEmail($fila[self::GEN_ATTR_MIN_EMAIL]);
			$pdepedidoenvioemail->setCuerpo($fila[self::GEN_ATTR_MIN_CUERPO]);
			$pdepedidoenvioemail->setAdjunto($fila[self::GEN_ATTR_MIN_ADJUNTO]);
			$pdepedidoenvioemail->setCodigoEnvio($fila[self::GEN_ATTR_MIN_CODIGO_ENVIO]);
			$pdepedidoenvioemail->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$pdepedidoenvioemail->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$pdepedidoenvioemail->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$pdepedidoenvioemail->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$pdepedidoenvioemail->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$pdepedidoenvioemail->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$pdepedidoenvioemail->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$pdepedidoenvioemail->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $pdepedidoenvioemails[] = $pdepedidoenvioemail;
		}
		
		return $pdepedidoenvioemails;
	}	
	

	/* Método getPdePedidoEnvioEmails Habilitados */ 	
	static function getPdePedidoEnvioEmailsHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return PdePedidoEnvioEmail::getPdePedidoEnvioEmails($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getPdePedidoEnvioEmails para listado de Backend */ 	
	static function getPdePedidoEnvioEmailsDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return PdePedidoEnvioEmail::getPdePedidoEnvioEmails($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getPdePedidoEnvioEmailsCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = PdePedidoEnvioEmail::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = PdePedidoEnvioEmail::getPdePedidoEnvioEmails($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPdePedidoEnvioEmails filtrado para select */ 	
	static function getPdePedidoEnvioEmailsCmbF($paginador = null, $criterio = null){
            $col = PdePedidoEnvioEmail::getPdePedidoEnvioEmails($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPdePedidoEnvioEmails filtrado por una coleccion de objetos foraneos de PdePedido */ 	
	static function getPdePedidoEnvioEmailsXPdePedidos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdePedidoEnvioEmail::GEN_ATTR_PDE_PEDIDO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdePedidoEnvioEmail::GEN_TABLA);
            $c->addOrden(PdePedidoEnvioEmail::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdePedidoEnvioEmail::getPdePedidoEnvioEmails($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdePedidoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdePedidoEnvioEmails filtrado por una coleccion de objetos foraneos de PdePedidoDestinatario */ 	
	static function getPdePedidoEnvioEmailsXPdePedidoDestinatarios($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdePedidoEnvioEmail::GEN_ATTR_PDE_PEDIDO_DESTINATARIO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdePedidoEnvioEmail::GEN_TABLA);
            $c->addOrden(PdePedidoEnvioEmail::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdePedidoEnvioEmail::getPdePedidoEnvioEmails($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdePedidoDestinatarioId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'pde_pedido_envio_email_adm.php';
            $url_gestion = 'pde_pedido_envio_email_gestion.php';
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
	

	/* Metodo que retorna el PdePedido (Clave Foranea) */ 	
    public function getPdePedido(){
        $o = new PdePedido();
        $o->setId($this->getPdePedidoId());
        return $o;			
    }

	/* Metodo que retorna el PdePedido (Clave Foranea) en Array */ 	
    public function getPdePedidoEnArray(&$arr_os){
        if($this->getPdePedidoId() != 'null'){
            if(isset($arr_os[$this->getPdePedidoId()])){
                $o = $arr_os[$this->getPdePedidoId()];
            }else{
                $o = PdePedido::getOxId($this->getPdePedidoId());
                if($o){
                    $arr_os[$this->getPdePedidoId()] = $o;
                }
            }
        }else{
            $o = new PdePedido();
        }
        return $o;		
    }

	/* Metodo que retorna el PdePedidoDestinatario (Clave Foranea) */ 	
    public function getPdePedidoDestinatario(){
        $o = new PdePedidoDestinatario();
        $o->setId($this->getPdePedidoDestinatarioId());
        return $o;			
    }

	/* Metodo que retorna el PdePedidoDestinatario (Clave Foranea) en Array */ 	
    public function getPdePedidoDestinatarioEnArray(&$arr_os){
        if($this->getPdePedidoDestinatarioId() != 'null'){
            if(isset($arr_os[$this->getPdePedidoDestinatarioId()])){
                $o = $arr_os[$this->getPdePedidoDestinatarioId()];
            }else{
                $o = PdePedidoDestinatario::getOxId($this->getPdePedidoDestinatarioId());
                if($o){
                    $arr_os[$this->getPdePedidoDestinatarioId()] = $o;
                }
            }
        }else{
            $o = new PdePedidoDestinatario();
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
            		
        if($contexto_solicitante != PdePedido::GEN_CLASE){
            if($this->getPdePedido()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdePedido::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdePedido()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdePedidoDestinatario::GEN_CLASE){
            if($this->getPdePedidoDestinatario()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdePedidoDestinatario::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdePedidoDestinatario()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM pde_pedido_envio_email'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'pde_pedido_envio_email';");
            
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

            $obs = self::getPdePedidoEnvioEmails($paginador, $criterio);
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

            $obs = self::getPdePedidoEnvioEmails(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidoEnvioEmails($paginador, $criterio);
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

            $obs = self::getPdePedidoEnvioEmails(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_pedido_id' */ 	
	static function getOxPdePedidoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_PEDIDO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidoEnvioEmails($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_pedido_id' */ 	
	static function getOsxPdePedidoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_PEDIDO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdePedidoEnvioEmails(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_pedido_destinatario_id' */ 	
	static function getOxPdePedidoDestinatarioId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_PEDIDO_DESTINATARIO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidoEnvioEmails($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_pedido_destinatario_id' */ 	
	static function getOsxPdePedidoDestinatarioId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_PEDIDO_DESTINATARIO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdePedidoEnvioEmails(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'asunto' */ 	
	static function getOxAsunto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ASUNTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidoEnvioEmails($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'asunto' */ 	
	static function getOsxAsunto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ASUNTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdePedidoEnvioEmails(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'email' */ 	
	static function getOxEmail($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EMAIL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidoEnvioEmails($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'email' */ 	
	static function getOsxEmail($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EMAIL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdePedidoEnvioEmails(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cuerpo' */ 	
	static function getOxCuerpo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUERPO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidoEnvioEmails($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cuerpo' */ 	
	static function getOsxCuerpo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUERPO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdePedidoEnvioEmails(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'adjunto' */ 	
	static function getOxAdjunto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ADJUNTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidoEnvioEmails($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'adjunto' */ 	
	static function getOsxAdjunto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ADJUNTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdePedidoEnvioEmails(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo_envio' */ 	
	static function getOxCodigoEnvio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_ENVIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidoEnvioEmails($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'codigo_envio' */ 	
	static function getOsxCodigoEnvio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_ENVIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdePedidoEnvioEmails(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidoEnvioEmails($paginador, $criterio);
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

            $obs = self::getPdePedidoEnvioEmails(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidoEnvioEmails($paginador, $criterio);
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

            $obs = self::getPdePedidoEnvioEmails(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidoEnvioEmails($paginador, $criterio);
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

            $obs = self::getPdePedidoEnvioEmails(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidoEnvioEmails($paginador, $criterio);
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

            $obs = self::getPdePedidoEnvioEmails(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidoEnvioEmails($paginador, $criterio);
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

            $obs = self::getPdePedidoEnvioEmails(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidoEnvioEmails($paginador, $criterio);
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

            $obs = self::getPdePedidoEnvioEmails(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidoEnvioEmails($paginador, $criterio);
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

            $obs = self::getPdePedidoEnvioEmails(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidoEnvioEmails($paginador, $criterio);
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

            $obs = self::getPdePedidoEnvioEmails(null, $criterio);
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

            $obs = self::getPdePedidoEnvioEmails($paginador, $criterio);
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

            $obs = self::getPdePedidoEnvioEmails($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'pde_pedido_envio_email_adm');
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
                $c->addTabla(PdePedidoEnvioEmail::GEN_TABLA);
                $c->addOrden(PdePedidoEnvioEmail::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $pde_pedido_envio_emails = PdePedidoEnvioEmail::getPdePedidoEnvioEmails(null, $c);

                $arr = array();
                foreach($pde_pedido_envio_emails as $pde_pedido_envio_email){
                    $descripcion = $pde_pedido_envio_email->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>