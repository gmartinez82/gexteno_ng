<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BCliClienteInfoSifen
{ 
	
	const SES_PAGINACION = 'adm_cliclienteinfosifen_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_cliclienteinfosifen_paginas_registros';
	const SES_CRITERIOS = 'adm_cliclienteinfosifen_criterios';
	
	const GEN_CLASE = 'CliClienteInfoSifen';
	const GEN_TABLA = 'cli_cliente_info_sifen';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BCliClienteInfoSifen */ 
	const GEN_ATTR_ID = 'cli_cliente_info_sifen.id';
	const GEN_ATTR_DESCRIPCION = 'cli_cliente_info_sifen.descripcion';
	const GEN_ATTR_CLI_CLIENTE_ID = 'cli_cliente_info_sifen.cli_cliente_id';
	const GEN_ATTR_CODIGO = 'cli_cliente_info_sifen.codigo';
	const GEN_ATTR_SIFEN_DCODRES = 'cli_cliente_info_sifen.sifen_dcodres';
	const GEN_ATTR_SIFEN_DMSGRES = 'cli_cliente_info_sifen.sifen_dmsgres';
	const GEN_ATTR_SIFEN_XCONTRUC_DRUCCONS = 'cli_cliente_info_sifen.sifen_xcontruc_druccons';
	const GEN_ATTR_SIFEN_XCONTRUC_DRAZCONS = 'cli_cliente_info_sifen.sifen_xcontruc_drazcons';
	const GEN_ATTR_SIFEN_XCONTRUC_DCODESTCONS = 'cli_cliente_info_sifen.sifen_xcontruc_dcodestcons';
	const GEN_ATTR_SIFEN_XCONTRUC_DDESESTCONS = 'cli_cliente_info_sifen.sifen_xcontruc_ddesestcons';
	const GEN_ATTR_SIFEN_XCONTRUC_DRUCFACTELEC = 'cli_cliente_info_sifen.sifen_xcontruc_drucfactelec';
	const GEN_ATTR_OBSERVACION = 'cli_cliente_info_sifen.observacion';
	const GEN_ATTR_ORDEN = 'cli_cliente_info_sifen.orden';
	const GEN_ATTR_ESTADO = 'cli_cliente_info_sifen.estado';
	const GEN_ATTR_CREADO = 'cli_cliente_info_sifen.creado';
	const GEN_ATTR_CREADO_POR = 'cli_cliente_info_sifen.creado_por';
	const GEN_ATTR_MODIFICADO = 'cli_cliente_info_sifen.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'cli_cliente_info_sifen.modificado_por';

	/* Constantes de Atributos Min de BCliClienteInfoSifen */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_CLI_CLIENTE_ID = 'cli_cliente_id';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_SIFEN_DCODRES = 'sifen_dcodres';
	const GEN_ATTR_MIN_SIFEN_DMSGRES = 'sifen_dmsgres';
	const GEN_ATTR_MIN_SIFEN_XCONTRUC_DRUCCONS = 'sifen_xcontruc_druccons';
	const GEN_ATTR_MIN_SIFEN_XCONTRUC_DRAZCONS = 'sifen_xcontruc_drazcons';
	const GEN_ATTR_MIN_SIFEN_XCONTRUC_DCODESTCONS = 'sifen_xcontruc_dcodestcons';
	const GEN_ATTR_MIN_SIFEN_XCONTRUC_DDESESTCONS = 'sifen_xcontruc_ddesestcons';
	const GEN_ATTR_MIN_SIFEN_XCONTRUC_DRUCFACTELEC = 'sifen_xcontruc_drucfactelec';
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
	

	/* Atributos de BCliClienteInfoSifen */ 
	private $id;
	private $descripcion;
	private $cli_cliente_id;
	private $codigo;
	private $sifen_dcodres;
	private $sifen_dmsgres;
	private $sifen_xcontruc_druccons;
	private $sifen_xcontruc_drazcons;
	private $sifen_xcontruc_dcodestcons;
	private $sifen_xcontruc_ddesestcons;
	private $sifen_xcontruc_drucfactelec;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BCliClienteInfoSifen */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getCliClienteId(){ if(isset($this->cli_cliente_id)){ return $this->cli_cliente_id; }else{ return 'null'; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getSifenDcodres(){ if(isset($this->sifen_dcodres)){ return $this->sifen_dcodres; }else{ return ''; } }
	public function getSifenDmsgres(){ if(isset($this->sifen_dmsgres)){ return $this->sifen_dmsgres; }else{ return ''; } }
	public function getSifenXcontrucDruccons(){ if(isset($this->sifen_xcontruc_druccons)){ return $this->sifen_xcontruc_druccons; }else{ return ''; } }
	public function getSifenXcontrucDrazcons(){ if(isset($this->sifen_xcontruc_drazcons)){ return $this->sifen_xcontruc_drazcons; }else{ return ''; } }
	public function getSifenXcontrucDcodestcons(){ if(isset($this->sifen_xcontruc_dcodestcons)){ return $this->sifen_xcontruc_dcodestcons; }else{ return ''; } }
	public function getSifenXcontrucDdesestcons(){ if(isset($this->sifen_xcontruc_ddesestcons)){ return $this->sifen_xcontruc_ddesestcons; }else{ return ''; } }
	public function getSifenXcontrucDrucfactelec(){ if(isset($this->sifen_xcontruc_drucfactelec)){ return $this->sifen_xcontruc_drucfactelec; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BCliClienteInfoSifen */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_CLI_CLIENTE_ID."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_SIFEN_DCODRES."
				, ".self::GEN_ATTR_SIFEN_DMSGRES."
				, ".self::GEN_ATTR_SIFEN_XCONTRUC_DRUCCONS."
				, ".self::GEN_ATTR_SIFEN_XCONTRUC_DRAZCONS."
				, ".self::GEN_ATTR_SIFEN_XCONTRUC_DCODESTCONS."
				, ".self::GEN_ATTR_SIFEN_XCONTRUC_DDESESTCONS."
				, ".self::GEN_ATTR_SIFEN_XCONTRUC_DRUCFACTELEC."
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
				$this->setCliClienteId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_ID]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setSifenDcodres($fila[self::GEN_ATTR_MIN_SIFEN_DCODRES]);
				$this->setSifenDmsgres($fila[self::GEN_ATTR_MIN_SIFEN_DMSGRES]);
				$this->setSifenXcontrucDruccons($fila[self::GEN_ATTR_MIN_SIFEN_XCONTRUC_DRUCCONS]);
				$this->setSifenXcontrucDrazcons($fila[self::GEN_ATTR_MIN_SIFEN_XCONTRUC_DRAZCONS]);
				$this->setSifenXcontrucDcodestcons($fila[self::GEN_ATTR_MIN_SIFEN_XCONTRUC_DCODESTCONS]);
				$this->setSifenXcontrucDdesestcons($fila[self::GEN_ATTR_MIN_SIFEN_XCONTRUC_DDESESTCONS]);
				$this->setSifenXcontrucDrucfactelec($fila[self::GEN_ATTR_MIN_SIFEN_XCONTRUC_DRUCFACTELEC]);
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
	public function setCliClienteId($v){ $this->cli_cliente_id = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setSifenDcodres($v){ $this->sifen_dcodres = $v; }
	public function setSifenDmsgres($v){ $this->sifen_dmsgres = $v; }
	public function setSifenXcontrucDruccons($v){ $this->sifen_xcontruc_druccons = $v; }
	public function setSifenXcontrucDrazcons($v){ $this->sifen_xcontruc_drazcons = $v; }
	public function setSifenXcontrucDcodestcons($v){ $this->sifen_xcontruc_dcodestcons = $v; }
	public function setSifenXcontrucDdesestcons($v){ $this->sifen_xcontruc_ddesestcons = $v; }
	public function setSifenXcontrucDrucfactelec($v){ $this->sifen_xcontruc_drucfactelec = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new CliClienteInfoSifen();
            $o->setId($fila[CliClienteInfoSifen::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setCliClienteId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_ID]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setSifenDcodres($fila[self::GEN_ATTR_MIN_SIFEN_DCODRES]);
			$o->setSifenDmsgres($fila[self::GEN_ATTR_MIN_SIFEN_DMSGRES]);
			$o->setSifenXcontrucDruccons($fila[self::GEN_ATTR_MIN_SIFEN_XCONTRUC_DRUCCONS]);
			$o->setSifenXcontrucDrazcons($fila[self::GEN_ATTR_MIN_SIFEN_XCONTRUC_DRAZCONS]);
			$o->setSifenXcontrucDcodestcons($fila[self::GEN_ATTR_MIN_SIFEN_XCONTRUC_DCODESTCONS]);
			$o->setSifenXcontrucDdesestcons($fila[self::GEN_ATTR_MIN_SIFEN_XCONTRUC_DDESESTCONS]);
			$o->setSifenXcontrucDrucfactelec($fila[self::GEN_ATTR_MIN_SIFEN_XCONTRUC_DRUCFACTELEC]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BCliClienteInfoSifen */ 	
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

	/* Cambia el estado de BCliClienteInfoSifen */ 	
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

	/* Save de BCliClienteInfoSifen */ 	
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
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_SIFEN_DCODRES."
						, ".self::GEN_ATTR_MIN_SIFEN_DMSGRES."
						, ".self::GEN_ATTR_MIN_SIFEN_XCONTRUC_DRUCCONS."
						, ".self::GEN_ATTR_MIN_SIFEN_XCONTRUC_DRAZCONS."
						, ".self::GEN_ATTR_MIN_SIFEN_XCONTRUC_DCODESTCONS."
						, ".self::GEN_ATTR_MIN_SIFEN_XCONTRUC_DDESESTCONS."
						, ".self::GEN_ATTR_MIN_SIFEN_XCONTRUC_DRUCFACTELEC."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('cli_cliente_info_sifen_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getCliClienteId()."
						, '".$this->getCodigo()."'
						, '".$this->getSifenDcodres()."'
						, '".$this->getSifenDmsgres()."'
						, '".$this->getSifenXcontrucDruccons()."'
						, '".$this->getSifenXcontrucDrazcons()."'
						, '".$this->getSifenXcontrucDcodestcons()."'
						, '".$this->getSifenXcontrucDdesestcons()."'
						, '".$this->getSifenXcontrucDrucfactelec()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('cli_cliente_info_sifen_seq')";
            
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
                 
				 ".CliClienteInfoSifen::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID." = ".$this->getCliClienteId()."
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_SIFEN_DCODRES." = '".$this->getSifenDcodres()."'
						, ".self::GEN_ATTR_MIN_SIFEN_DMSGRES." = '".$this->getSifenDmsgres()."'
						, ".self::GEN_ATTR_MIN_SIFEN_XCONTRUC_DRUCCONS." = '".$this->getSifenXcontrucDruccons()."'
						, ".self::GEN_ATTR_MIN_SIFEN_XCONTRUC_DRAZCONS." = '".$this->getSifenXcontrucDrazcons()."'
						, ".self::GEN_ATTR_MIN_SIFEN_XCONTRUC_DCODESTCONS." = '".$this->getSifenXcontrucDcodestcons()."'
						, ".self::GEN_ATTR_MIN_SIFEN_XCONTRUC_DDESESTCONS." = '".$this->getSifenXcontrucDdesestcons()."'
						, ".self::GEN_ATTR_MIN_SIFEN_XCONTRUC_DRUCFACTELEC." = '".$this->getSifenXcontrucDrucfactelec()."'
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
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_SIFEN_DCODRES."
						, ".self::GEN_ATTR_MIN_SIFEN_DMSGRES."
						, ".self::GEN_ATTR_MIN_SIFEN_XCONTRUC_DRUCCONS."
						, ".self::GEN_ATTR_MIN_SIFEN_XCONTRUC_DRAZCONS."
						, ".self::GEN_ATTR_MIN_SIFEN_XCONTRUC_DCODESTCONS."
						, ".self::GEN_ATTR_MIN_SIFEN_XCONTRUC_DDESESTCONS."
						, ".self::GEN_ATTR_MIN_SIFEN_XCONTRUC_DRUCFACTELEC."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getDescripcion()."'
						, ".$this->getCliClienteId()."
						, '".$this->getCodigo()."'
						, '".$this->getSifenDcodres()."'
						, '".$this->getSifenDmsgres()."'
						, '".$this->getSifenXcontrucDruccons()."'
						, '".$this->getSifenXcontrucDrazcons()."'
						, '".$this->getSifenXcontrucDcodestcons()."'
						, '".$this->getSifenXcontrucDdesestcons()."'
						, '".$this->getSifenXcontrucDrucfactelec()."'
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
                     
				 ".CliClienteInfoSifen::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID." = ".$this->getCliClienteId()."
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_SIFEN_DCODRES." = '".$this->getSifenDcodres()."'
						, ".self::GEN_ATTR_MIN_SIFEN_DMSGRES." = '".$this->getSifenDmsgres()."'
						, ".self::GEN_ATTR_MIN_SIFEN_XCONTRUC_DRUCCONS." = '".$this->getSifenXcontrucDruccons()."'
						, ".self::GEN_ATTR_MIN_SIFEN_XCONTRUC_DRAZCONS." = '".$this->getSifenXcontrucDrazcons()."'
						, ".self::GEN_ATTR_MIN_SIFEN_XCONTRUC_DCODESTCONS." = '".$this->getSifenXcontrucDcodestcons()."'
						, ".self::GEN_ATTR_MIN_SIFEN_XCONTRUC_DDESESTCONS." = '".$this->getSifenXcontrucDdesestcons()."'
						, ".self::GEN_ATTR_MIN_SIFEN_XCONTRUC_DRUCFACTELEC." = '".$this->getSifenXcontrucDrucfactelec()."'
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
            $o = new CliClienteInfoSifen();
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

	/* Delete de BCliClienteInfoSifen */ 	
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
	
	public function duplicarCliClienteInfoSifen(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getCliClienteInfoSifens($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = CliClienteInfoSifen::setAplicarFiltrosDeAlcance($criterio);

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
	
		$cliclienteinfosifens = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $cliclienteinfosifen = new CliClienteInfoSifen();
                    $cliclienteinfosifen->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $cliclienteinfosifen->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$cliclienteinfosifen->setCliClienteId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_ID]);
			$cliclienteinfosifen->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$cliclienteinfosifen->setSifenDcodres($fila[self::GEN_ATTR_MIN_SIFEN_DCODRES]);
			$cliclienteinfosifen->setSifenDmsgres($fila[self::GEN_ATTR_MIN_SIFEN_DMSGRES]);
			$cliclienteinfosifen->setSifenXcontrucDruccons($fila[self::GEN_ATTR_MIN_SIFEN_XCONTRUC_DRUCCONS]);
			$cliclienteinfosifen->setSifenXcontrucDrazcons($fila[self::GEN_ATTR_MIN_SIFEN_XCONTRUC_DRAZCONS]);
			$cliclienteinfosifen->setSifenXcontrucDcodestcons($fila[self::GEN_ATTR_MIN_SIFEN_XCONTRUC_DCODESTCONS]);
			$cliclienteinfosifen->setSifenXcontrucDdesestcons($fila[self::GEN_ATTR_MIN_SIFEN_XCONTRUC_DDESESTCONS]);
			$cliclienteinfosifen->setSifenXcontrucDrucfactelec($fila[self::GEN_ATTR_MIN_SIFEN_XCONTRUC_DRUCFACTELEC]);
			$cliclienteinfosifen->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$cliclienteinfosifen->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$cliclienteinfosifen->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$cliclienteinfosifen->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$cliclienteinfosifen->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$cliclienteinfosifen->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$cliclienteinfosifen->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $cliclienteinfosifens[] = $cliclienteinfosifen;
		}
		
		return $cliclienteinfosifens;
	}	
	

	/* Método getCliClienteInfoSifens Habilitados */ 	
	static function getCliClienteInfoSifensHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return CliClienteInfoSifen::getCliClienteInfoSifens($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getCliClienteInfoSifens para listado de Backend */ 	
	static function getCliClienteInfoSifensDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return CliClienteInfoSifen::getCliClienteInfoSifens($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getCliClienteInfoSifensCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = CliClienteInfoSifen::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = CliClienteInfoSifen::getCliClienteInfoSifens($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getCliClienteInfoSifens filtrado para select */ 	
	static function getCliClienteInfoSifensCmbF($paginador = null, $criterio = null){
            $col = CliClienteInfoSifen::getCliClienteInfoSifens($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getCliClienteInfoSifens filtrado por una coleccion de objetos foraneos de CliCliente */ 	
	static function getCliClienteInfoSifensXCliClientes($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(CliClienteInfoSifen::GEN_ATTR_CLI_CLIENTE_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(CliClienteInfoSifen::GEN_TABLA);
            $c->addOrden(CliClienteInfoSifen::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = CliClienteInfoSifen::getCliClienteInfoSifens($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCliClienteId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'cli_cliente_info_sifen_adm.php';
            $url_gestion = 'cli_cliente_info_sifen_gestion.php';
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
	

	/* Metodo que retorna el CliCliente (Clave Foranea) */ 	
    public function getCliCliente(){
        $o = new CliCliente();
        $o->setId($this->getCliClienteId());
        return $o;			
    }

	/* Metodo que retorna el CliCliente (Clave Foranea) en Array */ 	
    public function getCliClienteEnArray(&$arr_os){
        if($this->getCliClienteId() != 'null'){
            if(isset($arr_os[$this->getCliClienteId()])){
                $o = $arr_os[$this->getCliClienteId()];
            }else{
                $o = CliCliente::getOxId($this->getCliClienteId());
                if($o){
                    $arr_os[$this->getCliClienteId()] = $o;
                }
            }
        }else{
            $o = new CliCliente();
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
            		
        if($contexto_solicitante != CliCliente::GEN_CLASE){
            if($this->getCliCliente()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(CliCliente::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getCliCliente()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM cli_cliente_info_sifen'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'cli_cliente_info_sifen';");
            
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

            $obs = self::getCliClienteInfoSifens($paginador, $criterio);
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

            $obs = self::getCliClienteInfoSifens(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteInfoSifens($paginador, $criterio);
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

            $obs = self::getCliClienteInfoSifens(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cli_cliente_id' */ 	
	static function getOxCliClienteId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CLIENTE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteInfoSifens($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cli_cliente_id' */ 	
	static function getOsxCliClienteId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CLIENTE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClienteInfoSifens(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteInfoSifens($paginador, $criterio);
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

            $obs = self::getCliClienteInfoSifens(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'sifen_dcodres' */ 	
	static function getOxSifenDcodres($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_SIFEN_DCODRES, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteInfoSifens($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'sifen_dcodres' */ 	
	static function getOsxSifenDcodres($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_SIFEN_DCODRES, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClienteInfoSifens(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'sifen_dmsgres' */ 	
	static function getOxSifenDmsgres($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_SIFEN_DMSGRES, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteInfoSifens($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'sifen_dmsgres' */ 	
	static function getOsxSifenDmsgres($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_SIFEN_DMSGRES, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClienteInfoSifens(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'sifen_xcontruc_druccons' */ 	
	static function getOxSifenXcontrucDruccons($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_SIFEN_XCONTRUC_DRUCCONS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteInfoSifens($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'sifen_xcontruc_druccons' */ 	
	static function getOsxSifenXcontrucDruccons($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_SIFEN_XCONTRUC_DRUCCONS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClienteInfoSifens(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'sifen_xcontruc_drazcons' */ 	
	static function getOxSifenXcontrucDrazcons($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_SIFEN_XCONTRUC_DRAZCONS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteInfoSifens($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'sifen_xcontruc_drazcons' */ 	
	static function getOsxSifenXcontrucDrazcons($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_SIFEN_XCONTRUC_DRAZCONS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClienteInfoSifens(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'sifen_xcontruc_dcodestcons' */ 	
	static function getOxSifenXcontrucDcodestcons($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_SIFEN_XCONTRUC_DCODESTCONS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteInfoSifens($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'sifen_xcontruc_dcodestcons' */ 	
	static function getOsxSifenXcontrucDcodestcons($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_SIFEN_XCONTRUC_DCODESTCONS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClienteInfoSifens(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'sifen_xcontruc_ddesestcons' */ 	
	static function getOxSifenXcontrucDdesestcons($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_SIFEN_XCONTRUC_DDESESTCONS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteInfoSifens($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'sifen_xcontruc_ddesestcons' */ 	
	static function getOsxSifenXcontrucDdesestcons($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_SIFEN_XCONTRUC_DDESESTCONS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClienteInfoSifens(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'sifen_xcontruc_drucfactelec' */ 	
	static function getOxSifenXcontrucDrucfactelec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_SIFEN_XCONTRUC_DRUCFACTELEC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteInfoSifens($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'sifen_xcontruc_drucfactelec' */ 	
	static function getOsxSifenXcontrucDrucfactelec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_SIFEN_XCONTRUC_DRUCFACTELEC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClienteInfoSifens(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteInfoSifens($paginador, $criterio);
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

            $obs = self::getCliClienteInfoSifens(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteInfoSifens($paginador, $criterio);
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

            $obs = self::getCliClienteInfoSifens(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteInfoSifens($paginador, $criterio);
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

            $obs = self::getCliClienteInfoSifens(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteInfoSifens($paginador, $criterio);
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

            $obs = self::getCliClienteInfoSifens(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteInfoSifens($paginador, $criterio);
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

            $obs = self::getCliClienteInfoSifens(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteInfoSifens($paginador, $criterio);
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

            $obs = self::getCliClienteInfoSifens(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteInfoSifens($paginador, $criterio);
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

            $obs = self::getCliClienteInfoSifens(null, $criterio);
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

            $obs = self::getCliClienteInfoSifens($paginador, $criterio);
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

            $obs = self::getCliClienteInfoSifens($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'cli_cliente_info_sifen_adm');
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
                $c->addTabla(CliClienteInfoSifen::GEN_TABLA);
                $c->addOrden(CliClienteInfoSifen::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $cli_cliente_info_sifens = CliClienteInfoSifen::getCliClienteInfoSifens(null, $c);

                $arr = array();
                foreach($cli_cliente_info_sifens as $cli_cliente_info_sifen){
                    $descripcion = $cli_cliente_info_sifen->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>