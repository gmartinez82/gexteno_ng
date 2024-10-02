<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BCntbCuenta
{ 
	
	const SES_PAGINACION = 'adm_cntbcuenta_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_cntbcuenta_paginas_registros';
	const SES_CRITERIOS = 'adm_cntbcuenta_criterios';
	
	const GEN_CLASE = 'CntbCuenta';
	const GEN_TABLA = 'cntb_cuenta';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	
	
        const GEN_ARBOL_SEPARADOR = ' > ';

	/* Constantes de Atributos de BCntbCuenta */ 
	const GEN_ATTR_ID = 'cntb_cuenta.id';
	const GEN_ATTR_DESCRIPCION = 'cntb_cuenta.descripcion';
	const GEN_ATTR_FAMILIA_DESCRIPCION = 'cntb_cuenta.familia_descripcion';
	const GEN_ATTR_CNTB_CUENTA_PLAN_ID = 'cntb_cuenta.cntb_cuenta_plan_id';
	const GEN_ATTR_CNTB_CUENTA_PADRE = 'cntb_cuenta.cntb_cuenta_padre';
	const GEN_ATTR_CNTB_TIPO_CUENTA_ID = 'cntb_cuenta.cntb_tipo_cuenta_id';
	const GEN_ATTR_NUMERO = 'cntb_cuenta.numero';
	const GEN_ATTR_NIVEL = 'cntb_cuenta.nivel';
	const GEN_ATTR_IMPUTABLE = 'cntb_cuenta.imputable';
	const GEN_ATTR_CODIGO = 'cntb_cuenta.codigo';
	const GEN_ATTR_OBSERVACION = 'cntb_cuenta.observacion';
	const GEN_ATTR_ORDEN = 'cntb_cuenta.orden';
	const GEN_ATTR_ESTADO = 'cntb_cuenta.estado';
	const GEN_ATTR_CREADO = 'cntb_cuenta.creado';
	const GEN_ATTR_CREADO_POR = 'cntb_cuenta.creado_por';
	const GEN_ATTR_MODIFICADO = 'cntb_cuenta.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'cntb_cuenta.modificado_por';

	/* Constantes de Atributos Min de BCntbCuenta */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_FAMILIA_DESCRIPCION = 'familia_descripcion';
	const GEN_ATTR_MIN_CNTB_CUENTA_PLAN_ID = 'cntb_cuenta_plan_id';
	const GEN_ATTR_MIN_CNTB_CUENTA_PADRE = 'cntb_cuenta_padre';
	const GEN_ATTR_MIN_CNTB_TIPO_CUENTA_ID = 'cntb_tipo_cuenta_id';
	const GEN_ATTR_MIN_NUMERO = 'numero';
	const GEN_ATTR_MIN_NIVEL = 'nivel';
	const GEN_ATTR_MIN_IMPUTABLE = 'imputable';
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
	

	/* Atributos de BCntbCuenta */ 
	private $id;
	private $descripcion;
	private $familia_descripcion;
	private $cntb_cuenta_plan_id;
	private $cntb_cuenta_padre;
	private $cntb_tipo_cuenta_id;
	private $numero;
	private $nivel;
	private $imputable;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BCntbCuenta */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getFamiliaDescripcion(){ if(isset($this->familia_descripcion)){ return $this->familia_descripcion; }else{ return ''; } }
	public function getCntbCuentaPlanId(){ if(isset($this->cntb_cuenta_plan_id)){ return $this->cntb_cuenta_plan_id; }else{ return 'null'; } }
	public function getCntbCuentaPadre(){ if(isset($this->cntb_cuenta_padre)){ return $this->cntb_cuenta_padre; }else{ return 'null'; } }
	public function getCntbCuentaPadreObj(){ if(isset($this->cntb_cuenta_padre)){ return CntbCuenta::getOxId($this->cntb_cuenta_padre); }else{ return new CntbCuenta(); } }
	public function getCntbTipoCuentaId(){ if(isset($this->cntb_tipo_cuenta_id)){ return $this->cntb_tipo_cuenta_id; }else{ return 'null'; } }
	public function getNumero(){ if(isset($this->numero)){ return $this->numero; }else{ return ''; } }
	public function getNivel(){ if(isset($this->nivel)){ return $this->nivel; }else{ return ''; } }
	public function getImputable(){ if(isset($this->imputable)){ return $this->imputable; }else{ return 0; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BCntbCuenta */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_FAMILIA_DESCRIPCION."
				, ".self::GEN_ATTR_CNTB_CUENTA_PLAN_ID."
				, ".self::GEN_ATTR_CNTB_CUENTA_PADRE."
				, ".self::GEN_ATTR_CNTB_TIPO_CUENTA_ID."
				, ".self::GEN_ATTR_NUMERO."
				, ".self::GEN_ATTR_NIVEL."
				, ".self::GEN_ATTR_IMPUTABLE."
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
				$this->setFamiliaDescripcion($fila[self::GEN_ATTR_MIN_FAMILIA_DESCRIPCION]);
				$this->setCntbCuentaPlanId($fila[self::GEN_ATTR_MIN_CNTB_CUENTA_PLAN_ID]);
				$this->setCntbCuentaPadre($fila[self::GEN_ATTR_MIN_CNTB_CUENTA_PADRE]);
				$this->setCntbTipoCuentaId($fila[self::GEN_ATTR_MIN_CNTB_TIPO_CUENTA_ID]);
				$this->setNumero($fila[self::GEN_ATTR_MIN_NUMERO]);
				$this->setNivel($fila[self::GEN_ATTR_MIN_NIVEL]);
				$this->setImputable($fila[self::GEN_ATTR_MIN_IMPUTABLE]);
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
	public function setFamiliaDescripcion($v){ $this->familia_descripcion = $v; }
	public function setCntbCuentaPlanId($v){ $this->cntb_cuenta_plan_id = $v; }
	public function setCntbCuentaPadre($v){ $this->cntb_cuenta_padre = $v; }
	public function setCntbTipoCuentaId($v){ $this->cntb_tipo_cuenta_id = $v; }
	public function setNumero($v){ $this->numero = $v; }
	public function setNivel($v){ $this->nivel = $v; }
	public function setImputable($v){ $this->imputable = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new CntbCuenta();
            $o->setId($fila[CntbCuenta::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setFamiliaDescripcion($fila[self::GEN_ATTR_MIN_FAMILIA_DESCRIPCION]);
			$o->setCntbCuentaPlanId($fila[self::GEN_ATTR_MIN_CNTB_CUENTA_PLAN_ID]);
			$o->setCntbCuentaPadre($fila[self::GEN_ATTR_MIN_CNTB_CUENTA_PADRE]);
			$o->setCntbTipoCuentaId($fila[self::GEN_ATTR_MIN_CNTB_TIPO_CUENTA_ID]);
			$o->setNumero($fila[self::GEN_ATTR_MIN_NUMERO]);
			$o->setNivel($fila[self::GEN_ATTR_MIN_NIVEL]);
			$o->setImputable($fila[self::GEN_ATTR_MIN_IMPUTABLE]);
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

	/* Control de BCntbCuenta */ 	
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

	/* Cambia el estado de BCntbCuenta */ 	
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

	/* Save de BCntbCuenta */ 	
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
						, ".self::GEN_ATTR_MIN_FAMILIA_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_CNTB_CUENTA_PLAN_ID."
						, ".self::GEN_ATTR_MIN_CNTB_CUENTA_PADRE."
						, ".self::GEN_ATTR_MIN_CNTB_TIPO_CUENTA_ID."
						, ".self::GEN_ATTR_MIN_NUMERO."
						, ".self::GEN_ATTR_MIN_NIVEL."
						, ".self::GEN_ATTR_MIN_IMPUTABLE."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('cntb_cuenta_seq'), 
                '".$this->getDescripcion()."'
						, '".$this->getFamiliaDescripcion()."'
						, ".$this->getCntbCuentaPlanId()."
						, ".$this->getCntbCuentaPadre()."
						, ".$this->getCntbTipoCuentaId()."
						, '".$this->getNumero()."'
						, '".$this->getNivel()."'
						, ".$this->getImputable()."
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('cntb_cuenta_seq')";
            
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
                 
				 ".CntbCuenta::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_FAMILIA_DESCRIPCION." = '".$this->getFamiliaDescripcion()."'
						, ".self::GEN_ATTR_MIN_CNTB_CUENTA_PLAN_ID." = ".$this->getCntbCuentaPlanId()."
						, ".self::GEN_ATTR_MIN_CNTB_CUENTA_PADRE." = ".$this->getCntbCuentaPadre()."
						, ".self::GEN_ATTR_MIN_CNTB_TIPO_CUENTA_ID." = ".$this->getCntbTipoCuentaId()."
						, ".self::GEN_ATTR_MIN_NUMERO." = '".$this->getNumero()."'
						, ".self::GEN_ATTR_MIN_NIVEL." = '".$this->getNivel()."'
						, ".self::GEN_ATTR_MIN_IMPUTABLE." = ".$this->getImputable()."
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
						, ".self::GEN_ATTR_MIN_FAMILIA_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_CNTB_CUENTA_PLAN_ID."
						, ".self::GEN_ATTR_MIN_CNTB_CUENTA_PADRE."
						, ".self::GEN_ATTR_MIN_CNTB_TIPO_CUENTA_ID."
						, ".self::GEN_ATTR_MIN_NUMERO."
						, ".self::GEN_ATTR_MIN_NIVEL."
						, ".self::GEN_ATTR_MIN_IMPUTABLE."
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
						, '".$this->getFamiliaDescripcion()."'
						, ".$this->getCntbCuentaPlanId()."
						, ".$this->getCntbCuentaPadre()."
						, ".$this->getCntbTipoCuentaId()."
						, '".$this->getNumero()."'
						, '".$this->getNivel()."'
						, ".$this->getImputable()."
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
                     
				 ".CntbCuenta::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_FAMILIA_DESCRIPCION." = '".$this->getFamiliaDescripcion()."'
						, ".self::GEN_ATTR_MIN_CNTB_CUENTA_PLAN_ID." = ".$this->getCntbCuentaPlanId()."
						, ".self::GEN_ATTR_MIN_CNTB_CUENTA_PADRE." = ".$this->getCntbCuentaPadre()."
						, ".self::GEN_ATTR_MIN_CNTB_TIPO_CUENTA_ID." = ".$this->getCntbTipoCuentaId()."
						, ".self::GEN_ATTR_MIN_NUMERO." = '".$this->getNumero()."'
						, ".self::GEN_ATTR_MIN_NIVEL." = '".$this->getNivel()."'
						, ".self::GEN_ATTR_MIN_IMPUTABLE." = ".$this->getImputable()."
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
            $o = new CntbCuenta();
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

	/* Delete de BCntbCuenta */ 	
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
	
            // se elimina la coleccion de VtaTributos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaTributo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaTributos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaNotaCreditoConceptos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaNotaCreditoConcepto::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaNotaCreditoConceptos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaNotaDebitoConceptos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaNotaDebitoConcepto::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaNotaDebitoConceptos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaReciboConceptos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaReciboConcepto::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaReciboConceptos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaFacturaConceptos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaFacturaConcepto::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaFacturaConceptos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeTributos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeTributo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeTributos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeFacturaConceptos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeFacturaConcepto::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeFacturaConceptos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeFacturaTipoConceptos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeFacturaTipoConcepto::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeFacturaTipoConceptos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeNotaCreditoConceptos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaCreditoConcepto::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaCreditoConceptos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeNotaDebitoConceptos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaDebitoConcepto::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaDebitoConceptos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeReciboConceptos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeReciboConcepto::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeReciboConceptos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CntbDiarioAsientoCuentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CntbDiarioAsientoCuenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCntbDiarioAsientoCuentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteDebeConceptos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteDebeConcepto::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteDebeConceptos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteHaberConceptos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteHaberConcepto::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteHaberConceptos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarCntbCuenta(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getCntbCuentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = CntbCuenta::setAplicarFiltrosDeAlcance($criterio);

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
	
		$cntbcuentas = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $cntbcuenta = new CntbCuenta();
                    $cntbcuenta->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $cntbcuenta->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$cntbcuenta->setFamiliaDescripcion($fila[self::GEN_ATTR_MIN_FAMILIA_DESCRIPCION]);
			$cntbcuenta->setCntbCuentaPlanId($fila[self::GEN_ATTR_MIN_CNTB_CUENTA_PLAN_ID]);
			$cntbcuenta->setCntbCuentaPadre($fila[self::GEN_ATTR_MIN_CNTB_CUENTA_PADRE]);
			$cntbcuenta->setCntbTipoCuentaId($fila[self::GEN_ATTR_MIN_CNTB_TIPO_CUENTA_ID]);
			$cntbcuenta->setNumero($fila[self::GEN_ATTR_MIN_NUMERO]);
			$cntbcuenta->setNivel($fila[self::GEN_ATTR_MIN_NIVEL]);
			$cntbcuenta->setImputable($fila[self::GEN_ATTR_MIN_IMPUTABLE]);
			$cntbcuenta->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$cntbcuenta->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$cntbcuenta->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$cntbcuenta->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$cntbcuenta->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$cntbcuenta->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$cntbcuenta->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$cntbcuenta->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $cntbcuentas[] = $cntbcuenta;
		}
		
		return $cntbcuentas;
	}	
	

	/* Método getCntbCuentas Habilitados */ 	
	static function getCntbCuentasHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return CntbCuenta::getCntbCuentas($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getCntbCuentas para listado de Backend */ 	
	static function getCntbCuentasDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return CntbCuenta::getCntbCuentas($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getCntbCuentasCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = CntbCuenta::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = CntbCuenta::getCntbCuentas($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getCntbCuentas filtrado para select */ 	
	static function getCntbCuentasCmbF($paginador = null, $criterio = null){
            $col = CntbCuenta::getCntbCuentas($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getCntbCuentas filtrado por una coleccion de objetos foraneos de CntbCuentaPlan */ 	
	static function getCntbCuentasXCntbCuentaPlans($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(CntbCuenta::GEN_ATTR_CNTB_CUENTA_PLAN_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(CntbCuenta::GEN_TABLA);
            $c->addOrden(CntbCuenta::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = CntbCuenta::getCntbCuentas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCntbCuentaPlanId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getCntbCuentas filtrado por una coleccion de objetos foraneos de CntbTipoCuenta */ 	
	static function getCntbCuentasXCntbTipoCuentas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(CntbCuenta::GEN_ATTR_CNTB_TIPO_CUENTA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(CntbCuenta::GEN_TABLA);
            $c->addOrden(CntbCuenta::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = CntbCuenta::getCntbCuentas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCntbTipoCuentaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'cntb_cuenta_adm.php';
            $url_gestion = 'cntb_cuenta_gestion.php';
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
	

	/* Metodo getVtaTributos */ 	
	public function getVtaTributos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaTributo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaTributo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaTributo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaTributo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaTributo::GEN_ATTR_CNTB_CUENTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaTributo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaTributo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtatributos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtatributo = VtaTributo::hidratarObjeto($fila);			
                $vtatributos[] = $vtatributo;
            }

            return $vtatributos;
	}	
	

	/* Método getVtaTributosBloque para MasInfo */ 	
	public function getVtaTributosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaTributos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaTributos Habilitados */ 	
	public function getVtaTributosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaTributos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaTributo */ 	
	public function getVtaTributo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaTributos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaTributo relacionadas */ 	
	public function deleteVtaTributos(){
            $obs = $this->getVtaTributos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaTributosCmb() VtaTributo relacionadas */ 	
	public function getVtaTributosCmb(){
            $c = new Criterio();
            $c->add(VtaTributo::GEN_ATTR_CNTB_CUENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTributo::GEN_TABLA);
            $c->setCriterios();

            $os = VtaTributo::getVtaTributosCmbF(null, $c);
            return $os;
	}

	/* Metodo getVtaNotaCreditoConceptos */ 	
	public function getVtaNotaCreditoConceptos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaNotaCreditoConcepto::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaNotaCreditoConcepto::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaNotaCreditoConcepto::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaNotaCreditoConcepto::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaNotaCreditoConcepto::GEN_ATTR_CNTB_CUENTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaNotaCreditoConcepto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaNotaCreditoConcepto::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaNotaCreditoConcepto::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtanotacreditoconceptos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtanotacreditoconcepto = VtaNotaCreditoConcepto::hidratarObjeto($fila);			
                $vtanotacreditoconceptos[] = $vtanotacreditoconcepto;
            }

            return $vtanotacreditoconceptos;
	}	
	

	/* Método getVtaNotaCreditoConceptosBloque para MasInfo */ 	
	public function getVtaNotaCreditoConceptosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaNotaCreditoConceptos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaNotaCreditoConceptos Habilitados */ 	
	public function getVtaNotaCreditoConceptosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaNotaCreditoConceptos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaNotaCreditoConcepto */ 	
	public function getVtaNotaCreditoConcepto($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaNotaCreditoConceptos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaNotaCreditoConcepto relacionadas */ 	
	public function deleteVtaNotaCreditoConceptos(){
            $obs = $this->getVtaNotaCreditoConceptos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaNotaCreditoConceptosCmb() VtaNotaCreditoConcepto relacionadas */ 	
	public function getVtaNotaCreditoConceptosCmb(){
            $c = new Criterio();
            $c->add(VtaNotaCreditoConcepto::GEN_ATTR_CNTB_CUENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaCreditoConcepto::GEN_TABLA);
            $c->setCriterios();

            $os = VtaNotaCreditoConcepto::getVtaNotaCreditoConceptosCmbF(null, $c);
            return $os;
	}

	/* Metodo getVtaNotaDebitoConceptos */ 	
	public function getVtaNotaDebitoConceptos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaNotaDebitoConcepto::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaNotaDebitoConcepto::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaNotaDebitoConcepto::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaNotaDebitoConcepto::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaNotaDebitoConcepto::GEN_ATTR_CNTB_CUENTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaNotaDebitoConcepto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaNotaDebitoConcepto::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaNotaDebitoConcepto::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtanotadebitoconceptos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtanotadebitoconcepto = VtaNotaDebitoConcepto::hidratarObjeto($fila);			
                $vtanotadebitoconceptos[] = $vtanotadebitoconcepto;
            }

            return $vtanotadebitoconceptos;
	}	
	

	/* Método getVtaNotaDebitoConceptosBloque para MasInfo */ 	
	public function getVtaNotaDebitoConceptosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaNotaDebitoConceptos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaNotaDebitoConceptos Habilitados */ 	
	public function getVtaNotaDebitoConceptosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaNotaDebitoConceptos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaNotaDebitoConcepto */ 	
	public function getVtaNotaDebitoConcepto($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaNotaDebitoConceptos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaNotaDebitoConcepto relacionadas */ 	
	public function deleteVtaNotaDebitoConceptos(){
            $obs = $this->getVtaNotaDebitoConceptos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaNotaDebitoConceptosCmb() VtaNotaDebitoConcepto relacionadas */ 	
	public function getVtaNotaDebitoConceptosCmb(){
            $c = new Criterio();
            $c->add(VtaNotaDebitoConcepto::GEN_ATTR_CNTB_CUENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaDebitoConcepto::GEN_TABLA);
            $c->setCriterios();

            $os = VtaNotaDebitoConcepto::getVtaNotaDebitoConceptosCmbF(null, $c);
            return $os;
	}

	/* Metodo getVtaReciboConceptos */ 	
	public function getVtaReciboConceptos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaReciboConcepto::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaReciboConcepto::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaReciboConcepto::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaReciboConcepto::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaReciboConcepto::GEN_ATTR_CNTB_CUENTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaReciboConcepto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaReciboConcepto::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaReciboConcepto::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtareciboconceptos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtareciboconcepto = VtaReciboConcepto::hidratarObjeto($fila);			
                $vtareciboconceptos[] = $vtareciboconcepto;
            }

            return $vtareciboconceptos;
	}	
	

	/* Método getVtaReciboConceptosBloque para MasInfo */ 	
	public function getVtaReciboConceptosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaReciboConceptos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaReciboConceptos Habilitados */ 	
	public function getVtaReciboConceptosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaReciboConceptos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaReciboConcepto */ 	
	public function getVtaReciboConcepto($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaReciboConceptos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaReciboConcepto relacionadas */ 	
	public function deleteVtaReciboConceptos(){
            $obs = $this->getVtaReciboConceptos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaReciboConceptosCmb() VtaReciboConcepto relacionadas */ 	
	public function getVtaReciboConceptosCmb(){
            $c = new Criterio();
            $c->add(VtaReciboConcepto::GEN_ATTR_CNTB_CUENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaReciboConcepto::GEN_TABLA);
            $c->setCriterios();

            $os = VtaReciboConcepto::getVtaReciboConceptosCmbF(null, $c);
            return $os;
	}

	/* Metodo getVtaFacturaConceptos */ 	
	public function getVtaFacturaConceptos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaFacturaConcepto::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaFacturaConcepto::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaFacturaConcepto::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaFacturaConcepto::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaFacturaConcepto::GEN_ATTR_CNTB_CUENTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaFacturaConcepto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaFacturaConcepto::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaFacturaConcepto::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtafacturaconceptos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtafacturaconcepto = VtaFacturaConcepto::hidratarObjeto($fila);			
                $vtafacturaconceptos[] = $vtafacturaconcepto;
            }

            return $vtafacturaconceptos;
	}	
	

	/* Método getVtaFacturaConceptosBloque para MasInfo */ 	
	public function getVtaFacturaConceptosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaFacturaConceptos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaFacturaConceptos Habilitados */ 	
	public function getVtaFacturaConceptosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaFacturaConceptos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaFacturaConcepto */ 	
	public function getVtaFacturaConcepto($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaFacturaConceptos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaFacturaConcepto relacionadas */ 	
	public function deleteVtaFacturaConceptos(){
            $obs = $this->getVtaFacturaConceptos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaFacturaConceptosCmb() VtaFacturaConcepto relacionadas */ 	
	public function getVtaFacturaConceptosCmb(){
            $c = new Criterio();
            $c->add(VtaFacturaConcepto::GEN_ATTR_CNTB_CUENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFacturaConcepto::GEN_TABLA);
            $c->setCriterios();

            $os = VtaFacturaConcepto::getVtaFacturaConceptosCmbF(null, $c);
            return $os;
	}

	/* Metodo getPdeTributos */ 	
	public function getPdeTributos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeTributo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeTributo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeTributo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeTributo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeTributo::GEN_ATTR_CNTB_CUENTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeTributo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeTributo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdetributos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdetributo = PdeTributo::hidratarObjeto($fila);			
                $pdetributos[] = $pdetributo;
            }

            return $pdetributos;
	}	
	

	/* Método getPdeTributosBloque para MasInfo */ 	
	public function getPdeTributosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeTributos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeTributos Habilitados */ 	
	public function getPdeTributosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeTributos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeTributo */ 	
	public function getPdeTributo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeTributos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeTributo relacionadas */ 	
	public function deletePdeTributos(){
            $obs = $this->getPdeTributos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeTributosCmb() PdeTributo relacionadas */ 	
	public function getPdeTributosCmb(){
            $c = new Criterio();
            $c->add(PdeTributo::GEN_ATTR_CNTB_CUENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTributo::GEN_TABLA);
            $c->setCriterios();

            $os = PdeTributo::getPdeTributosCmbF(null, $c);
            return $os;
	}

	/* Metodo getPdeFacturaConceptos */ 	
	public function getPdeFacturaConceptos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeFacturaConcepto::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeFacturaConcepto::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeFacturaConcepto::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeFacturaConcepto::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeFacturaConcepto::GEN_ATTR_CNTB_CUENTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeFacturaConcepto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeFacturaConcepto::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeFacturaConcepto::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdefacturaconceptos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdefacturaconcepto = PdeFacturaConcepto::hidratarObjeto($fila);			
                $pdefacturaconceptos[] = $pdefacturaconcepto;
            }

            return $pdefacturaconceptos;
	}	
	

	/* Método getPdeFacturaConceptosBloque para MasInfo */ 	
	public function getPdeFacturaConceptosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeFacturaConceptos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeFacturaConceptos Habilitados */ 	
	public function getPdeFacturaConceptosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeFacturaConceptos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeFacturaConcepto */ 	
	public function getPdeFacturaConcepto($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeFacturaConceptos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeFacturaConcepto relacionadas */ 	
	public function deletePdeFacturaConceptos(){
            $obs = $this->getPdeFacturaConceptos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeFacturaConceptosCmb() PdeFacturaConcepto relacionadas */ 	
	public function getPdeFacturaConceptosCmb(){
            $c = new Criterio();
            $c->add(PdeFacturaConcepto::GEN_ATTR_CNTB_CUENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFacturaConcepto::GEN_TABLA);
            $c->setCriterios();

            $os = PdeFacturaConcepto::getPdeFacturaConceptosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeFacturaTipoConceptos (Coleccion) relacionados a traves de PdeFacturaConcepto */ 	
	public function getPdeFacturaTipoConceptosXPdeFacturaConcepto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeFacturaTipoConcepto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaConcepto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaConcepto::GEN_ATTR_CNTB_CUENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFacturaTipoConcepto::GEN_TABLA);
            $c->addRealJoin(PdeFacturaConcepto::GEN_TABLA, PdeFacturaConcepto::GEN_ATTR_PDE_FACTURA_TIPO_CONCEPTO_ID, PdeFacturaTipoConcepto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFacturaTipoConcepto::getPdeFacturaTipoConceptos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeFacturaTipoConceptos relacionados a traves de PdeFacturaConcepto */ 	
	public function getCantidadPdeFacturaTipoConceptosXPdeFacturaConcepto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeFacturaTipoConcepto::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeFacturaTipoConcepto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaConcepto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaConcepto::GEN_ATTR_CNTB_CUENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFacturaTipoConcepto::GEN_TABLA);
            $c->addRealJoin(PdeFacturaConcepto::GEN_TABLA, PdeFacturaConcepto::GEN_ATTR_PDE_FACTURA_TIPO_CONCEPTO_ID, PdeFacturaTipoConcepto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFacturaTipoConcepto::getPdeFacturaTipoConceptos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeFacturaTipoConcepto (Objeto) relacionado a traves de PdeFacturaConcepto */ 	
	public function getPdeFacturaTipoConceptoXPdeFacturaConcepto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeFacturaTipoConceptosXPdeFacturaConcepto($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeFacturaTipoConceptos */ 	
	public function getPdeFacturaTipoConceptos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeFacturaTipoConcepto::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeFacturaTipoConcepto::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeFacturaTipoConcepto::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeFacturaTipoConcepto::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeFacturaTipoConcepto::GEN_ATTR_CNTB_CUENTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeFacturaTipoConcepto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeFacturaTipoConcepto::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeFacturaTipoConcepto::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdefacturatipoconceptos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdefacturatipoconcepto = PdeFacturaTipoConcepto::hidratarObjeto($fila);			
                $pdefacturatipoconceptos[] = $pdefacturatipoconcepto;
            }

            return $pdefacturatipoconceptos;
	}	
	

	/* Método getPdeFacturaTipoConceptosBloque para MasInfo */ 	
	public function getPdeFacturaTipoConceptosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeFacturaTipoConceptos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeFacturaTipoConceptos Habilitados */ 	
	public function getPdeFacturaTipoConceptosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeFacturaTipoConceptos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeFacturaTipoConcepto */ 	
	public function getPdeFacturaTipoConcepto($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeFacturaTipoConceptos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeFacturaTipoConcepto relacionadas */ 	
	public function deletePdeFacturaTipoConceptos(){
            $obs = $this->getPdeFacturaTipoConceptos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeFacturaTipoConceptosCmb() PdeFacturaTipoConcepto relacionadas */ 	
	public function getPdeFacturaTipoConceptosCmb(){
            $c = new Criterio();
            $c->add(PdeFacturaTipoConcepto::GEN_ATTR_CNTB_CUENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFacturaTipoConcepto::GEN_TABLA);
            $c->setCriterios();

            $os = PdeFacturaTipoConcepto::getPdeFacturaTipoConceptosCmbF(null, $c);
            return $os;
	}

	/* Metodo getPdeNotaCreditoConceptos */ 	
	public function getPdeNotaCreditoConceptos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeNotaCreditoConcepto::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeNotaCreditoConcepto::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeNotaCreditoConcepto::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeNotaCreditoConcepto::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeNotaCreditoConcepto::GEN_ATTR_CNTB_CUENTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeNotaCreditoConcepto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeNotaCreditoConcepto::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeNotaCreditoConcepto::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdenotacreditoconceptos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdenotacreditoconcepto = PdeNotaCreditoConcepto::hidratarObjeto($fila);			
                $pdenotacreditoconceptos[] = $pdenotacreditoconcepto;
            }

            return $pdenotacreditoconceptos;
	}	
	

	/* Método getPdeNotaCreditoConceptosBloque para MasInfo */ 	
	public function getPdeNotaCreditoConceptosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeNotaCreditoConceptos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeNotaCreditoConceptos Habilitados */ 	
	public function getPdeNotaCreditoConceptosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeNotaCreditoConceptos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeNotaCreditoConcepto */ 	
	public function getPdeNotaCreditoConcepto($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeNotaCreditoConceptos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeNotaCreditoConcepto relacionadas */ 	
	public function deletePdeNotaCreditoConceptos(){
            $obs = $this->getPdeNotaCreditoConceptos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeNotaCreditoConceptosCmb() PdeNotaCreditoConcepto relacionadas */ 	
	public function getPdeNotaCreditoConceptosCmb(){
            $c = new Criterio();
            $c->add(PdeNotaCreditoConcepto::GEN_ATTR_CNTB_CUENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCreditoConcepto::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaCreditoConcepto::getPdeNotaCreditoConceptosCmbF(null, $c);
            return $os;
	}

	/* Metodo getPdeNotaDebitoConceptos */ 	
	public function getPdeNotaDebitoConceptos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeNotaDebitoConcepto::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeNotaDebitoConcepto::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeNotaDebitoConcepto::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeNotaDebitoConcepto::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeNotaDebitoConcepto::GEN_ATTR_CNTB_CUENTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeNotaDebitoConcepto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeNotaDebitoConcepto::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeNotaDebitoConcepto::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdenotadebitoconceptos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdenotadebitoconcepto = PdeNotaDebitoConcepto::hidratarObjeto($fila);			
                $pdenotadebitoconceptos[] = $pdenotadebitoconcepto;
            }

            return $pdenotadebitoconceptos;
	}	
	

	/* Método getPdeNotaDebitoConceptosBloque para MasInfo */ 	
	public function getPdeNotaDebitoConceptosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeNotaDebitoConceptos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeNotaDebitoConceptos Habilitados */ 	
	public function getPdeNotaDebitoConceptosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeNotaDebitoConceptos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeNotaDebitoConcepto */ 	
	public function getPdeNotaDebitoConcepto($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeNotaDebitoConceptos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeNotaDebitoConcepto relacionadas */ 	
	public function deletePdeNotaDebitoConceptos(){
            $obs = $this->getPdeNotaDebitoConceptos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeNotaDebitoConceptosCmb() PdeNotaDebitoConcepto relacionadas */ 	
	public function getPdeNotaDebitoConceptosCmb(){
            $c = new Criterio();
            $c->add(PdeNotaDebitoConcepto::GEN_ATTR_CNTB_CUENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaDebitoConcepto::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaDebitoConcepto::getPdeNotaDebitoConceptosCmbF(null, $c);
            return $os;
	}

	/* Metodo getPdeReciboConceptos */ 	
	public function getPdeReciboConceptos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeReciboConcepto::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeReciboConcepto::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeReciboConcepto::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeReciboConcepto::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeReciboConcepto::GEN_ATTR_CNTB_CUENTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeReciboConcepto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeReciboConcepto::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeReciboConcepto::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdereciboconceptos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdereciboconcepto = PdeReciboConcepto::hidratarObjeto($fila);			
                $pdereciboconceptos[] = $pdereciboconcepto;
            }

            return $pdereciboconceptos;
	}	
	

	/* Método getPdeReciboConceptosBloque para MasInfo */ 	
	public function getPdeReciboConceptosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeReciboConceptos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeReciboConceptos Habilitados */ 	
	public function getPdeReciboConceptosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeReciboConceptos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeReciboConcepto */ 	
	public function getPdeReciboConcepto($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeReciboConceptos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeReciboConcepto relacionadas */ 	
	public function deletePdeReciboConceptos(){
            $obs = $this->getPdeReciboConceptos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeReciboConceptosCmb() PdeReciboConcepto relacionadas */ 	
	public function getPdeReciboConceptosCmb(){
            $c = new Criterio();
            $c->add(PdeReciboConcepto::GEN_ATTR_CNTB_CUENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeReciboConcepto::GEN_TABLA);
            $c->setCriterios();

            $os = PdeReciboConcepto::getPdeReciboConceptosCmbF(null, $c);
            return $os;
	}

	/* Metodo getCntbDiarioAsientoCuentas */ 	
	public function getCntbDiarioAsientoCuentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CntbDiarioAsientoCuenta::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CntbDiarioAsientoCuenta::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CntbDiarioAsientoCuenta::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CntbDiarioAsientoCuenta::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CntbDiarioAsientoCuenta::GEN_ATTR_CNTB_CUENTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CntbDiarioAsientoCuenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CntbDiarioAsientoCuenta::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CntbDiarioAsientoCuenta::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cntbdiarioasientocuentas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cntbdiarioasientocuenta = CntbDiarioAsientoCuenta::hidratarObjeto($fila);			
                $cntbdiarioasientocuentas[] = $cntbdiarioasientocuenta;
            }

            return $cntbdiarioasientocuentas;
	}	
	

	/* Método getCntbDiarioAsientoCuentasBloque para MasInfo */ 	
	public function getCntbDiarioAsientoCuentasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCntbDiarioAsientoCuentas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoCuentas Habilitados */ 	
	public function getCntbDiarioAsientoCuentasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCntbDiarioAsientoCuentas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoCuenta */ 	
	public function getCntbDiarioAsientoCuenta($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCntbDiarioAsientoCuentas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CntbDiarioAsientoCuenta relacionadas */ 	
	public function deleteCntbDiarioAsientoCuentas(){
            $obs = $this->getCntbDiarioAsientoCuentas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCntbDiarioAsientoCuentasCmb() CntbDiarioAsientoCuenta relacionadas */ 	
	public function getCntbDiarioAsientoCuentasCmb(){
            $c = new Criterio();
            $c->add(CntbDiarioAsientoCuenta::GEN_ATTR_CNTB_CUENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsientoCuenta::GEN_TABLA);
            $c->setCriterios();

            $os = CntbDiarioAsientoCuenta::getCntbDiarioAsientoCuentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CntbDiarioAsientos (Coleccion) relacionados a traves de CntbDiarioAsientoCuenta */ 	
	public function getCntbDiarioAsientosXCntbDiarioAsientoCuenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CntbDiarioAsiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoCuenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoCuenta::GEN_ATTR_CNTB_CUENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsiento::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoCuenta::GEN_TABLA, CntbDiarioAsientoCuenta::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, CntbDiarioAsiento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbDiarioAsiento::getCntbDiarioAsientos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CntbDiarioAsientos relacionados a traves de CntbDiarioAsientoCuenta */ 	
	public function getCantidadCntbDiarioAsientosXCntbDiarioAsientoCuenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CntbDiarioAsiento::GEN_ATTR_ID);
            if($estado){
                $c->add(CntbDiarioAsiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoCuenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoCuenta::GEN_ATTR_CNTB_CUENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsiento::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoCuenta::GEN_TABLA, CntbDiarioAsientoCuenta::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, CntbDiarioAsiento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbDiarioAsiento::getCntbDiarioAsientos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CntbDiarioAsiento (Objeto) relacionado a traves de CntbDiarioAsientoCuenta */ 	
	public function getCntbDiarioAsientoXCntbDiarioAsientoCuenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCntbDiarioAsientosXCntbDiarioAsientoCuenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteDebeConceptos */ 	
	public function getVtaAjusteDebeConceptos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteDebeConcepto::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteDebeConcepto::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteDebeConcepto::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteDebeConcepto::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteDebeConcepto::GEN_ATTR_CNTB_CUENTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteDebeConcepto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteDebeConcepto::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteDebeConcepto::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustedebeconceptos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustedebeconcepto = VtaAjusteDebeConcepto::hidratarObjeto($fila);			
                $vtaajustedebeconceptos[] = $vtaajustedebeconcepto;
            }

            return $vtaajustedebeconceptos;
	}	
	

	/* Método getVtaAjusteDebeConceptosBloque para MasInfo */ 	
	public function getVtaAjusteDebeConceptosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteDebeConceptos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteDebeConceptos Habilitados */ 	
	public function getVtaAjusteDebeConceptosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteDebeConceptos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteDebeConcepto */ 	
	public function getVtaAjusteDebeConcepto($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteDebeConceptos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteDebeConcepto relacionadas */ 	
	public function deleteVtaAjusteDebeConceptos(){
            $obs = $this->getVtaAjusteDebeConceptos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteDebeConceptosCmb() VtaAjusteDebeConcepto relacionadas */ 	
	public function getVtaAjusteDebeConceptosCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteDebeConcepto::GEN_ATTR_CNTB_CUENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebeConcepto::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteDebeConcepto::getVtaAjusteDebeConceptosCmbF(null, $c);
            return $os;
	}

	/* Metodo getVtaAjusteHaberConceptos */ 	
	public function getVtaAjusteHaberConceptos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteHaberConcepto::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteHaberConcepto::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteHaberConcepto::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteHaberConcepto::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteHaberConcepto::GEN_ATTR_CNTB_CUENTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteHaberConcepto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteHaberConcepto::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteHaberConcepto::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustehaberconceptos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustehaberconcepto = VtaAjusteHaberConcepto::hidratarObjeto($fila);			
                $vtaajustehaberconceptos[] = $vtaajustehaberconcepto;
            }

            return $vtaajustehaberconceptos;
	}	
	

	/* Método getVtaAjusteHaberConceptosBloque para MasInfo */ 	
	public function getVtaAjusteHaberConceptosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteHaberConceptos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteHaberConceptos Habilitados */ 	
	public function getVtaAjusteHaberConceptosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteHaberConceptos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteHaberConcepto */ 	
	public function getVtaAjusteHaberConcepto($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteHaberConceptos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteHaberConcepto relacionadas */ 	
	public function deleteVtaAjusteHaberConceptos(){
            $obs = $this->getVtaAjusteHaberConceptos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteHaberConceptosCmb() VtaAjusteHaberConcepto relacionadas */ 	
	public function getVtaAjusteHaberConceptosCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteHaberConcepto::GEN_ATTR_CNTB_CUENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaberConcepto::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteHaberConcepto::getVtaAjusteHaberConceptosCmbF(null, $c);
            return $os;
	}

	/* Metodo que retorna el CntbCuentaPlan (Clave Foranea) */ 	
    public function getCntbCuentaPlan(){
        $o = new CntbCuentaPlan();
        $o->setId($this->getCntbCuentaPlanId());
        return $o;			
    }

	/* Metodo que retorna el CntbCuentaPlan (Clave Foranea) en Array */ 	
    public function getCntbCuentaPlanEnArray(&$arr_os){
        if($this->getCntbCuentaPlanId() != 'null'){
            if(isset($arr_os[$this->getCntbCuentaPlanId()])){
                $o = $arr_os[$this->getCntbCuentaPlanId()];
            }else{
                $o = CntbCuentaPlan::getOxId($this->getCntbCuentaPlanId());
                if($o){
                    $arr_os[$this->getCntbCuentaPlanId()] = $o;
                }
            }
        }else{
            $o = new CntbCuentaPlan();
        }
        return $o;		
    }

	/* Metodo que retorna el CntbTipoCuenta (Clave Foranea) */ 	
    public function getCntbTipoCuenta(){
        $o = new CntbTipoCuenta();
        $o->setId($this->getCntbTipoCuentaId());
        return $o;			
    }

	/* Metodo que retorna el CntbTipoCuenta (Clave Foranea) en Array */ 	
    public function getCntbTipoCuentaEnArray(&$arr_os){
        if($this->getCntbTipoCuentaId() != 'null'){
            if(isset($arr_os[$this->getCntbTipoCuentaId()])){
                $o = $arr_os[$this->getCntbTipoCuentaId()];
            }else{
                $o = CntbTipoCuenta::getOxId($this->getCntbTipoCuentaId());
                if($o){
                    $arr_os[$this->getCntbTipoCuentaId()] = $o;
                }
            }
        }else{
            $o = new CntbTipoCuenta();
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
            		
        if($contexto_solicitante != CntbCuentaPlan::GEN_CLASE){
            if($this->getCntbCuentaPlan()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(CntbCuentaPlan::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getCntbCuentaPlan()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != CntbCuenta::GEN_CLASE){
            if($this->getCntbCuenta()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(CntbCuenta::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getCntbCuenta()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != CntbTipoCuenta::GEN_CLASE){
            if($this->getCntbTipoCuenta()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(CntbTipoCuenta::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getCntbTipoCuenta()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM cntb_cuenta'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'cntb_cuenta';");
            
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

            $obs = self::getCntbCuentas($paginador, $criterio);
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

            $obs = self::getCntbCuentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCntbCuentas($paginador, $criterio);
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

            $obs = self::getCntbCuentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'familia_descripcion' */ 	
	static function getOxFamiliaDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FAMILIA_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCntbCuentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'familia_descripcion' */ 	
	static function getOsxFamiliaDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FAMILIA_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCntbCuentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cntb_cuenta_plan_id' */ 	
	static function getOxCntbCuentaPlanId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CNTB_CUENTA_PLAN_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCntbCuentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cntb_cuenta_plan_id' */ 	
	static function getOsxCntbCuentaPlanId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CNTB_CUENTA_PLAN_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCntbCuentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cntb_cuenta_padre' */ 	
	static function getOxCntbCuentaPadre($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CNTB_CUENTA_PADRE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCntbCuentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cntb_cuenta_padre' */ 	
	static function getOsxCntbCuentaPadre($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CNTB_CUENTA_PADRE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCntbCuentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cntb_tipo_cuenta_id' */ 	
	static function getOxCntbTipoCuentaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CNTB_TIPO_CUENTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCntbCuentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cntb_tipo_cuenta_id' */ 	
	static function getOsxCntbTipoCuentaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CNTB_TIPO_CUENTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCntbCuentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero' */ 	
	static function getOxNumero($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCntbCuentas($paginador, $criterio);
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

            $obs = self::getCntbCuentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nivel' */ 	
	static function getOxNivel($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NIVEL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCntbCuentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'nivel' */ 	
	static function getOsxNivel($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NIVEL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCntbCuentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'imputable' */ 	
	static function getOxImputable($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPUTABLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCntbCuentas($paginador, $criterio);
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

            $obs = self::getCntbCuentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCntbCuentas($paginador, $criterio);
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

            $obs = self::getCntbCuentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCntbCuentas($paginador, $criterio);
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

            $obs = self::getCntbCuentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCntbCuentas($paginador, $criterio);
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

            $obs = self::getCntbCuentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCntbCuentas($paginador, $criterio);
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

            $obs = self::getCntbCuentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCntbCuentas($paginador, $criterio);
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

            $obs = self::getCntbCuentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCntbCuentas($paginador, $criterio);
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

            $obs = self::getCntbCuentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCntbCuentas($paginador, $criterio);
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

            $obs = self::getCntbCuentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCntbCuentas($paginador, $criterio);
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

            $obs = self::getCntbCuentas(null, $criterio);
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

            $obs = self::getCntbCuentas($paginador, $criterio);
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

            $obs = self::getCntbCuentas($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'cntb_cuenta_adm');
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

	/* Metodos de ARBOL */ 	
	/* Metodo que escribe el archivo XML del Arbol */
	public function wrArchivoXML($arbol){
            $fp = fopen(Gral::getPathAbs()."xml/cntb_cuenta/".$arbol->getCodigo().".xml","w+");

            // cabecera
            fwrite($fp, '<?xml version="1.0" encoding="utf-8" ?>
<!-- Arbol: '.$arbol->getDescripcion().' -->
<arbol>
	<clase>'.CntbCuentaPlan::GEN_CLASE.'</clase>
	<tabla>'.CntbCuentaPlan::GEN_TABLA.'</tabla>
	<item_clase>'.CntbCuenta::GEN_CLASE.'</item_clase>
	<id>'.$arbol->getId().'</id>
' . PHP_EOL);
	
            // cuerpo
            $c = new Criterio('CRITERIO_MENU');
            $c->add(CntbCuenta::GEN_ATTR_CNTB_CUENTA_PLAN_ID, $arbol->getId(), Criterio::IGUAL);
            $c->add(CntbCuenta::GEN_ATTR_CNTB_CUENTA_PADRE.' is null', ' and true', '');
            $c->addTabla(CntbCuenta::GEN_TABLA);
            $c->addOrden(CntbCuenta::GEN_ATTR_ORDEN, 'asc');
            $c->setCriterios();

            $items = $this->getCntbCuentas(null, $c);
            //Gral::prr();
            foreach($items as $item){
                self::wrItemXML($fp, $item);
            }

            // pie
            fwrite($fp, '</arbol>' . PHP_EOL);
            fclose($fp);
	}
	
	/* Metodo que escribe el Item XML del Arbol */
	static function wrItemXML($fp, $item){
	
            $texto = '
		<item>			
		
                    <id>' . $item->getId() . '</id>
                    <descripcion>' . $item->getDescripcion() . '</descripcion>
                    <familia_descripcion>' . $item->getFamiliaDescripcion() . '</familia_descripcion>
                    <cntb_cuenta_plan_id>' . $item->getCntbCuentaPlanId() . '</cntb_cuenta_plan_id>
                    <cntb_cuenta_padre>' . $item->getCntbCuentaPadre() . '</cntb_cuenta_padre>
                    <cntb_tipo_cuenta_id>' . $item->getCntbTipoCuentaId() . '</cntb_tipo_cuenta_id>
                    <numero>' . $item->getNumero() . '</numero>
                    <nivel>' . $item->getNivel() . '</nivel>
                    <imputable>' . $item->getImputable() . '</imputable>
                    <codigo>' . $item->getCodigo() . '</codigo>
                    <observacion>' . $item->getObservacion() . '</observacion>
                    <orden>' . $item->getOrden() . '</orden>
                    <estado>' . $item->getEstado() . '</estado>
                    <creado>' . $item->getCreado() . '</creado>
                    <creado_por>' . $item->getCreadoPor() . '</creado_por>
                    <modificado>' . $item->getModificado() . '</modificado>
                    <modificado_por>' . $item->getModificadoPor() . '</modificado_por>
                    <familia_descripcion>' . $item->getArbolFamiliaDescripcion() . '</familia_descripcion>
            ';		
            fwrite($fp, $texto . PHP_EOL);

            $cr_hijos = new Criterio();
            $cr_hijos->add(CntbCuenta::GEN_ATTR_CNTB_CUENTA_PADRE, $item->getId(), Criterio::IGUAL);
            $cr_hijos->addTabla(CntbCuenta::GEN_TABLA);
            $cr_hijos->addOrden(CntbCuenta::GEN_ATTR_ORDEN, 'asc');
            $cr_hijos->setCriterios();
            $items_hijo = CntbCuenta::getCntbCuentas(null, $cr_hijos);

            if(!empty($items_hijo)){
                foreach($items_hijo as $item_hijo){
                    self::wrItemXML($fp, $item_hijo);
                }
            }
		
            $texto = '
                </item>';
            fwrite($fp, $texto . PHP_EOL);
	}
	
	/* Metodo que dibuja en HTML el Arbol */
	static function listarArbol($codigo = '', $caso){
            $file = Gral::getPathAbs().'/xml/cntb_cuenta/'.$codigo.'.xml';


            if(file_exists($file)){
                $xml = simplexml_load_file($file);
                $arbol = $xml->xpath('//arbol');
                $items = $xml->xpath('item');

                switch($caso){
                    case 'MENU':
                        foreach($items as $item){
                            self::echoItem($arbol, $item);
                        }
                    break;

                    case 'GESTION':
                        echo "<div class='raiz' arbol_tabla='".$arbol[0]->tabla."' arbol_clase='".$arbol[0]->clase."' arbol_id='".$arbol[0]->id."' item_clase='".$arbol[0]->item_clase."'>Mueva aqui los elementos que quiera ubicar en la raiz del arbol";
                        echo " <div class='acciones' arbol_tabla='".$arbol[0]->tabla."' arbol_clase='".$arbol[0]->clase."' arbol_id='".$arbol[0]->id."'  item_clase='".$arbol[0]->item_clase."'>";
                                    
                        if(UsCredencial::getEsAcreditado('CNTB_CUENTA_ARBOL_ACCION_AGREGAR')){
                        echo "     <div class='accion agregar' archivo='ajax/modulos/cntb_cuenta/cntb_cuenta_alta.php'>
                                        <img src='imgs/btn_add.gif' width='22' border='0' title='Agregar Nuevo Item' />
                                    </div>";
                        }

                        echo "     

                                <div class='accion expandir-all'>
                                    <img src='imgs/icon_arbol_expandir.png' width='16' border='0' title='Expandir Arbol Completo' />
                                </div>
                                
                                <div class='accion colapsar-all'>
                                    <img src='imgs/icon_arbol_colapsar.png' width='18' border='0' title='Contraer Arbol Completo' />
                                </div>

                                <div class='accion refresh'>
                                    <img src='imgs/btn_refresh.gif' width='18' border='0' title='Regenerar Arbol' />
                                </div>
                                    
                                </div>";

                        echo "</div>";

                        echo "<ul arbol_clase='".$arbol[0]->clase."' arbol_id='".$arbol[0]->id."' item_clase='".$arbol[0]->item_clase."'>";
                        foreach($items as $item){
                                self::echoItemGestion($arbol, $item);
                        }
                        echo "</ul>";
                    break;				
                }						  

            }
	}
	
	/* Metodo que dibuja en HTML el Item del Arbol */
	static function echoItem($arbol, $item){
            if($item->estado != 1) return;

            echo "<li>";
                echo "<a title='".$item->alternativo."' href='".$item->link."'>".$item->descripcion."</a>";

            if($item->item){
                echo "<ul>";
                $items = $item->xpath('item');
                foreach($items as $item){
                    self::echoItem($arbol, $item);
                }
                echo "</ul>";
            }				
            echo "</li>";	
	}
	
	/* Metodo que dibuja en HTML Item del Arbol para Gestion */
	static function echoItemGestion($arbol, $item){
            echo "<li id='item_".$item->id."'>";
                echo "<div class='uno' id='div_item_".$item->id."' arbol_tabla='".$arbol[0]->tabla."' arbol_clase='".$arbol[0]->clase."' arbol_id='".$arbol[0]->id."' item_clase='".$arbol[0]->item_clase."' item_id='".$item->id."'>";
                self::echoItemGestionDiv($arbol, $item);
                echo "</div>";

                echo "<div class='hijos' id='div_item_hijos_".$item->id."'>";
                if($item->item){
                    echo "<ul arbol_clase='".$arbol[0]->clase."' arbol_id='".$arbol[0]->id."' item_clase='".$arbol[0]->item_clase."'>";
                    $items = $item->xpath('item');
                    foreach($items as $item){
                        self::echoItemGestion($arbol, $item);
                    }
                    echo "</ul>";
                }				
                echo "</div>";
            echo "</li>";
	}
	
	/* Metodo que dibuja en HTML el DIV descriptivo del Item del Arbol */	
	static function echoItemGestionDiv($arbol, $item){
                
		echo "  <div class='arbol-acciones' arbol_tabla='".$arbol[0]->tabla."' arbol_clase='".$arbol[0]->clase."' arbol_id='".$arbol[0]->id."'  item_clase='".$arbol[0]->item_clase."' item_id='".$item->id."'>";
                            
                            if(UsCredencial::getEsAcreditado('CNTB_CUENTA_ARBOL_ACCION_MODIFICAR')){
                echo "     <div class='accion modificar' archivo='ajax/modulos/cntb_cuenta/cntb_cuenta_alta.php'>
                                <img src='imgs/btn_modi.gif' width='20' border='0' title='Modificar Datos' />
                            </div>";
                            }
                            
                            if(UsCredencial::getEsAcreditado('CNTB_CUENTA_ARBOL_ACCION_ESTADO')){
                echo "     <div class='accion estado'>
                                <img src='imgs/btn_estado_".$item->estado.".gif' width='20' border='0' title='Habilitar/Deshabilitar' />
                            </div>";
                            }
                            
                            if(UsCredencial::getEsAcreditado('CNTB_CUENTA_ARBOL_ACCION_AGREGAR_HIJO')){
                echo "     <div class='accion agregar-hijo'>
                                <img src='imgs/btn_add.gif' width='22' border='0' title='Agregar Hijo' />
                            </div>";
                            }

                            if(UsCredencial::getEsAcreditado('CNTB_CUENTA_ARBOL_ACCION_ORDENAR')){
                echo "     <div class='accion ordenar'>
                                <img src='imgs/btn_sort.png' width='20' border='0' title='Arrastre para reordenar' />
                            </div>";
                            }

                            if(UsCredencial::getEsAcreditado('CNTB_CUENTA_ARBOL_ACCION_CAMBIAR_PADRE')){
                echo "     <div class='accion mover'>
                                <img src='imgs/btn_move.png' width='21' border='0' title='Cambiar de Padre, Arrastre hasta el nuevo Padre' />
                            </div>";
                            }
                            
                            if(UsCredencial::getEsAcreditado('CNTB_CUENTA_ARBOL_ACCION_ELIMINAR')){
                echo "     <div class='accion eliminar'>
                                <img src='imgs/btn_elim.gif' width='21' border='0' title='Eliminar' />
                            </div>";
                            }
                            
                echo "     <div class='accion expandir-item'>
                                <img src='imgs/icon_arbol_expandir.png' width='15' border='0' title='Expandir Hijos' />
                            </div>";
                            
                echo "     <div class='accion colapsar-item'>
                                <img src='imgs/icon_arbol_colapsar.png' width='16' border='0' title='Contraer Hijos' />
                            </div>";

                echo " </div>";
                
		echo "	<div class='arbol-info'>";
		
		echo " <div class='par id'>
                            <label class='label'>Id</label>
                            <label class='dato'>".$item->id."</label>
                        </div>";
				
		echo " <div class='par nivel'>
                            <label class='label'>Nivel</label>
                            <label class='dato'>".$item->nivel."</label>
                        </div>";
						
		echo "	</div>";
                
		echo "  <div class='arbol-descripcion'>".$item->descripcion."</div>";
		echo "  <div class='arbol-familia-descripcion'>".$item->familia_descripcion."</div>";
	}
	
	/* Metodo que retorna una coleccion de los padres de acuerdo a un hijo indicado */	
	static function getArbolItemPadres($hijo, &$arr_padres){
            $o_padre = $hijo->tieneArbolItemPadre();

            $tiene_padre = false;
            if($o_padre){
                $tiene_padre = true;
            }
            if($tiene_padre){
                $arr_padres[] = $o_padre;
                //self::getArbolItemPadres($o_padre, $arr_padres);
                self::getArbolItemPadres($o_padre, $arr_padres);
            }	
	}
	
	/* Metodo que retorna la descripcion completa del item, considerando su familia completa */	
	public function getArbolFamiliaDescripcion(){
            $arr_padres = array();
            //$padres = self::getArbolItemPadres($this, $arr_padres);
            $padres = self::getArbolItemPadres($this, $arr_padres);

            krsort($arr_padres);
            $familia_descripcion = '';
            foreach($arr_padres as $padre){
                    $familia_descripcion.= $padre->getDescripcion().CntbCuenta::GEN_ARBOL_SEPARADOR;
            }
            return $familia_descripcion.$this->getDescripcion();
	}
	
	/* Metodo que retorna si el item tiene padre */		
	public function tieneArbolItemPadre(){
            if($this->getCntbCuentaPadre() != 'null'){
                $o_padre = CntbCuenta::getOxId($this->getCntbCuentaPadre());
                return $o_padre;
            }
            return false;
	}
	
	/* Metodo que retorna una coleccion de los Items Hijo de una Item en Particular */		
	static function getArbolItemHijos($padre_id = null){
		$c = new Criterio();
		if(is_null($padre_id)){
                    $c->add(CntbCuenta::GEN_ATTR_CNTB_CUENTA_PADRE, 'and true', Criterio::IS_NULL);
		}else{
                    $c->add(CntbCuenta::GEN_ATTR_CNTB_CUENTA_PADRE, $padre_id, Criterio::IGUAL);
		}
		$c->addOrden(CntbCuenta::GEN_ATTR_ORDEN, 'asc');
		$c->addTabla(CntbCuenta::GEN_TABLA);
		$c->setCriterios();

		$os_hijos = self::getCntbCuentas(null, $c);
		return $os_hijos;
	}
	
	/* metodo que va cargando en la coleccion hijos todos los hijos a partir de un padre */
	//static function getArbolColeccionAbsolutaHijosDependientes($hijos, $padre_id = null){
	static function getArbolColeccionAbsolutaHijosDependientes($hijos, $padre_id = null){
            $hijos_propios = self::getArbolItemHijos($padre_id);
            foreach($hijos_propios as $hijo){
                if($hijo){
                    $hijos[] = $hijo;
                    self::getArbolColeccionAbsolutaHijosDependientes($hijos, $hijo->getId());
                }
            }
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
                $c->addTabla(CntbCuenta::GEN_TABLA);
                $c->addOrden(CntbCuenta::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $cntb_cuentas = CntbCuenta::getCntbCuentas(null, $c);

                $arr = array();
                foreach($cntb_cuentas as $cntb_cuenta){
                    $descripcion = $cntb_cuenta->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>