<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BCntbPeriodo
{ 
	
	const SES_PAGINACION = 'adm_cntbperiodo_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_cntbperiodo_paginas_registros';
	const SES_CRITERIOS = 'adm_cntbperiodo_criterios';
	
	const GEN_CLASE = 'CntbPeriodo';
	const GEN_TABLA = 'cntb_periodo';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BCntbPeriodo */ 
	const GEN_ATTR_ID = 'cntb_periodo.id';
	const GEN_ATTR_DESCRIPCION = 'cntb_periodo.descripcion';
	const GEN_ATTR_GRAL_EMPRESA_ID = 'cntb_periodo.gral_empresa_id';
	const GEN_ATTR_CNTB_EJERCICIO_ID = 'cntb_periodo.cntb_ejercicio_id';
	const GEN_ATTR_ANIO = 'cntb_periodo.anio';
	const GEN_ATTR_GRAL_MES_ID = 'cntb_periodo.gral_mes_id';
	const GEN_ATTR_FECHA_INICIO = 'cntb_periodo.fecha_inicio';
	const GEN_ATTR_FECHA_FIN = 'cntb_periodo.fecha_fin';
	const GEN_ATTR_CODIGO = 'cntb_periodo.codigo';
	const GEN_ATTR_OBSERVACION = 'cntb_periodo.observacion';
	const GEN_ATTR_ORDEN = 'cntb_periodo.orden';
	const GEN_ATTR_ESTADO = 'cntb_periodo.estado';
	const GEN_ATTR_CREADO = 'cntb_periodo.creado';
	const GEN_ATTR_CREADO_POR = 'cntb_periodo.creado_por';
	const GEN_ATTR_MODIFICADO = 'cntb_periodo.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'cntb_periodo.modificado_por';

	/* Constantes de Atributos Min de BCntbPeriodo */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_GRAL_EMPRESA_ID = 'gral_empresa_id';
	const GEN_ATTR_MIN_CNTB_EJERCICIO_ID = 'cntb_ejercicio_id';
	const GEN_ATTR_MIN_ANIO = 'anio';
	const GEN_ATTR_MIN_GRAL_MES_ID = 'gral_mes_id';
	const GEN_ATTR_MIN_FECHA_INICIO = 'fecha_inicio';
	const GEN_ATTR_MIN_FECHA_FIN = 'fecha_fin';
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
	

	/* Atributos de BCntbPeriodo */ 
	private $id;
	private $descripcion;
	private $gral_empresa_id;
	private $cntb_ejercicio_id;
	private $anio;
	private $gral_mes_id;
	private $fecha_inicio;
	private $fecha_fin;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BCntbPeriodo */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getGralEmpresaId(){ if(isset($this->gral_empresa_id)){ return $this->gral_empresa_id; }else{ return 'null'; } }
	public function getCntbEjercicioId(){ if(isset($this->cntb_ejercicio_id)){ return $this->cntb_ejercicio_id; }else{ return 'null'; } }
	public function getAnio(){ if(isset($this->anio)){ return $this->anio; }else{ return 0; } }
	public function getGralMesId(){ if(isset($this->gral_mes_id)){ return $this->gral_mes_id; }else{ return 'null'; } }
	public function getFechaInicio(){ if(isset($this->fecha_inicio)){ return $this->fecha_inicio; }else{ return ''; } }
	public function getFechaFin(){ if(isset($this->fecha_fin)){ return $this->fecha_fin; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BCntbPeriodo */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_GRAL_EMPRESA_ID."
				, ".self::GEN_ATTR_CNTB_EJERCICIO_ID."
				, ".self::GEN_ATTR_ANIO."
				, ".self::GEN_ATTR_GRAL_MES_ID."
				, ".self::GEN_ATTR_FECHA_INICIO."
				, ".self::GEN_ATTR_FECHA_FIN."
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
				$this->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
				$this->setCntbEjercicioId($fila[self::GEN_ATTR_MIN_CNTB_EJERCICIO_ID]);
				$this->setAnio($fila[self::GEN_ATTR_MIN_ANIO]);
				$this->setGralMesId($fila[self::GEN_ATTR_MIN_GRAL_MES_ID]);
				$this->setFechaInicio($fila[self::GEN_ATTR_MIN_FECHA_INICIO]);
				$this->setFechaFin($fila[self::GEN_ATTR_MIN_FECHA_FIN]);
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
	public function setGralEmpresaId($v){ $this->gral_empresa_id = $v; }
	public function setCntbEjercicioId($v){ $this->cntb_ejercicio_id = $v; }
	public function setAnio($v){ $this->anio = $v; }
	public function setGralMesId($v){ $this->gral_mes_id = $v; }
	public function setFechaInicio($v){ $this->fecha_inicio = $v; }
	public function setFechaFin($v){ $this->fecha_fin = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new CntbPeriodo();
            $o->setId($fila[CntbPeriodo::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
			$o->setCntbEjercicioId($fila[self::GEN_ATTR_MIN_CNTB_EJERCICIO_ID]);
			$o->setAnio($fila[self::GEN_ATTR_MIN_ANIO]);
			$o->setGralMesId($fila[self::GEN_ATTR_MIN_GRAL_MES_ID]);
			$o->setFechaInicio($fila[self::GEN_ATTR_MIN_FECHA_INICIO]);
			$o->setFechaFin($fila[self::GEN_ATTR_MIN_FECHA_FIN]);
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

	/* Control de BCntbPeriodo */ 	
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

	/* Cambia el estado de BCntbPeriodo */ 	
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

	/* Save de BCntbPeriodo */ 	
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
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID."
						, ".self::GEN_ATTR_MIN_CNTB_EJERCICIO_ID."
						, ".self::GEN_ATTR_MIN_ANIO."
						, ".self::GEN_ATTR_MIN_GRAL_MES_ID."
						, ".self::GEN_ATTR_MIN_FECHA_INICIO."
						, ".self::GEN_ATTR_MIN_FECHA_FIN."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('cntb_periodo_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getGralEmpresaId()."
						, ".$this->getCntbEjercicioId()."
						, ".$this->getAnio()."
						, ".$this->getGralMesId()."
						, '".$this->getFechaInicio()."'
						, '".$this->getFechaFin()."'
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('cntb_periodo_seq')";
            
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
                 
				 ".CntbPeriodo::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID." = ".$this->getGralEmpresaId()."
						, ".self::GEN_ATTR_MIN_CNTB_EJERCICIO_ID." = ".$this->getCntbEjercicioId()."
						, ".self::GEN_ATTR_MIN_ANIO." = ".$this->getAnio()."
						, ".self::GEN_ATTR_MIN_GRAL_MES_ID." = ".$this->getGralMesId()."
						, ".self::GEN_ATTR_MIN_FECHA_INICIO." = '".$this->getFechaInicio()."'
						, ".self::GEN_ATTR_MIN_FECHA_FIN." = '".$this->getFechaFin()."'
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
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID."
						, ".self::GEN_ATTR_MIN_CNTB_EJERCICIO_ID."
						, ".self::GEN_ATTR_MIN_ANIO."
						, ".self::GEN_ATTR_MIN_GRAL_MES_ID."
						, ".self::GEN_ATTR_MIN_FECHA_INICIO."
						, ".self::GEN_ATTR_MIN_FECHA_FIN."
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
						, ".$this->getGralEmpresaId()."
						, ".$this->getCntbEjercicioId()."
						, ".$this->getAnio()."
						, ".$this->getGralMesId()."
						, '".$this->getFechaInicio()."'
						, '".$this->getFechaFin()."'
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
                     
				 ".CntbPeriodo::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID." = ".$this->getGralEmpresaId()."
						, ".self::GEN_ATTR_MIN_CNTB_EJERCICIO_ID." = ".$this->getCntbEjercicioId()."
						, ".self::GEN_ATTR_MIN_ANIO." = ".$this->getAnio()."
						, ".self::GEN_ATTR_MIN_GRAL_MES_ID." = ".$this->getGralMesId()."
						, ".self::GEN_ATTR_MIN_FECHA_INICIO." = '".$this->getFechaInicio()."'
						, ".self::GEN_ATTR_MIN_FECHA_FIN." = '".$this->getFechaFin()."'
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
            $o = new CntbPeriodo();
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

	/* Delete de BCntbPeriodo */ 	
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
	
            // se elimina la coleccion de CntbDiarioAsientos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CntbDiarioAsiento::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCntbDiarioAsientos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CntbDiarioAsientoVtaFacturas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CntbDiarioAsientoVtaFactura::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCntbDiarioAsientoVtaFacturas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CntbDiarioAsientoVtaNotaCreditos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CntbDiarioAsientoVtaNotaCredito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCntbDiarioAsientoVtaNotaCreditos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CntbDiarioAsientoVtaNotaDebitos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CntbDiarioAsientoVtaNotaDebito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCntbDiarioAsientoVtaNotaDebitos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CntbDiarioAsientoVtaRecibos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CntbDiarioAsientoVtaRecibo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCntbDiarioAsientoVtaRecibos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CntbDiarioAsientoPdeFacturas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CntbDiarioAsientoPdeFactura::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCntbDiarioAsientoPdeFacturas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CntbDiarioAsientoPdeNotaCreditos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CntbDiarioAsientoPdeNotaCredito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCntbDiarioAsientoPdeNotaCreditos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CntbDiarioAsientoPdeNotaDebitos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CntbDiarioAsientoPdeNotaDebito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCntbDiarioAsientoPdeNotaDebitos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CntbDiarioAsientoPdeRecibos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CntbDiarioAsientoPdeRecibo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCntbDiarioAsientoPdeRecibos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CntbDiarioAsientoVtaAjusteDebes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CntbDiarioAsientoVtaAjusteDebe::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCntbDiarioAsientoVtaAjusteDebes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CntbDiarioAsientoVtaAjusteHabers relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CntbDiarioAsientoVtaAjusteHaber::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCntbDiarioAsientoVtaAjusteHabers(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarCntbPeriodo(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getCntbPeriodos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = CntbPeriodo::setAplicarFiltrosDeAlcance($criterio);

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
	
		$cntbperiodos = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $cntbperiodo = new CntbPeriodo();
                    $cntbperiodo->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $cntbperiodo->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$cntbperiodo->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
			$cntbperiodo->setCntbEjercicioId($fila[self::GEN_ATTR_MIN_CNTB_EJERCICIO_ID]);
			$cntbperiodo->setAnio($fila[self::GEN_ATTR_MIN_ANIO]);
			$cntbperiodo->setGralMesId($fila[self::GEN_ATTR_MIN_GRAL_MES_ID]);
			$cntbperiodo->setFechaInicio($fila[self::GEN_ATTR_MIN_FECHA_INICIO]);
			$cntbperiodo->setFechaFin($fila[self::GEN_ATTR_MIN_FECHA_FIN]);
			$cntbperiodo->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$cntbperiodo->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$cntbperiodo->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$cntbperiodo->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$cntbperiodo->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$cntbperiodo->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$cntbperiodo->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$cntbperiodo->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $cntbperiodos[] = $cntbperiodo;
		}
		
		return $cntbperiodos;
	}	
	

	/* Método getCntbPeriodos Habilitados */ 	
	static function getCntbPeriodosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return CntbPeriodo::getCntbPeriodos($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getCntbPeriodos para listado de Backend */ 	
	static function getCntbPeriodosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return CntbPeriodo::getCntbPeriodos($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getCntbPeriodosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = CntbPeriodo::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = CntbPeriodo::getCntbPeriodos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getCntbPeriodos filtrado para select */ 	
	static function getCntbPeriodosCmbF($paginador = null, $criterio = null){
            $col = CntbPeriodo::getCntbPeriodos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getCntbPeriodos filtrado por una coleccion de objetos foraneos de GralEmpresa */ 	
	static function getCntbPeriodosXGralEmpresas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(CntbPeriodo::GEN_ATTR_GRAL_EMPRESA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(CntbPeriodo::GEN_TABLA);
            $c->addOrden(CntbPeriodo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = CntbPeriodo::getCntbPeriodos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralEmpresaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getCntbPeriodos filtrado por una coleccion de objetos foraneos de CntbEjercicio */ 	
	static function getCntbPeriodosXCntbEjercicios($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(CntbPeriodo::GEN_ATTR_CNTB_EJERCICIO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(CntbPeriodo::GEN_TABLA);
            $c->addOrden(CntbPeriodo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = CntbPeriodo::getCntbPeriodos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCntbEjercicioId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getCntbPeriodos filtrado por una coleccion de objetos foraneos de GralMes */ 	
	static function getCntbPeriodosXGralMess($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(CntbPeriodo::GEN_ATTR_GRAL_MES_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(CntbPeriodo::GEN_TABLA);
            $c->addOrden(CntbPeriodo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = CntbPeriodo::getCntbPeriodos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralMesId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'cntb_periodo_adm.php';
            $url_gestion = 'cntb_periodo_gestion.php';
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
	

	/* Metodo getCntbDiarioAsientos */ 	
	public function getCntbDiarioAsientos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CntbDiarioAsiento::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CntbDiarioAsiento::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CntbDiarioAsiento::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CntbDiarioAsiento::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CntbDiarioAsiento::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CntbDiarioAsiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CntbDiarioAsiento::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CntbDiarioAsiento::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cntbdiarioasientos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cntbdiarioasiento = CntbDiarioAsiento::hidratarObjeto($fila);			
                $cntbdiarioasientos[] = $cntbdiarioasiento;
            }

            return $cntbdiarioasientos;
	}	
	

	/* Método getCntbDiarioAsientosBloque para MasInfo */ 	
	public function getCntbDiarioAsientosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCntbDiarioAsientos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCntbDiarioAsientos Habilitados */ 	
	public function getCntbDiarioAsientosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCntbDiarioAsientos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCntbDiarioAsiento */ 	
	public function getCntbDiarioAsiento($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCntbDiarioAsientos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CntbDiarioAsiento relacionadas */ 	
	public function deleteCntbDiarioAsientos(){
            $obs = $this->getCntbDiarioAsientos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCntbDiarioAsientosCmb() CntbDiarioAsiento relacionadas */ 	
	public function getCntbDiarioAsientosCmb(){
            $c = new Criterio();
            $c->add(CntbDiarioAsiento::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsiento::GEN_TABLA);
            $c->setCriterios();

            $os = CntbDiarioAsiento::getCntbDiarioAsientosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CntbEjercicios (Coleccion) relacionados a traves de CntbDiarioAsiento */ 	
	public function getCntbEjerciciosXCntbDiarioAsiento($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CntbEjercicio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsiento::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbEjercicio::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsiento::GEN_TABLA, CntbDiarioAsiento::GEN_ATTR_CNTB_EJERCICIO_ID, CntbEjercicio::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbEjercicio::getCntbEjercicios($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CntbEjercicios relacionados a traves de CntbDiarioAsiento */ 	
	public function getCantidadCntbEjerciciosXCntbDiarioAsiento($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CntbEjercicio::GEN_ATTR_ID);
            if($estado){
                $c->add(CntbEjercicio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsiento::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbEjercicio::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsiento::GEN_TABLA, CntbDiarioAsiento::GEN_ATTR_CNTB_EJERCICIO_ID, CntbEjercicio::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbEjercicio::getCntbEjercicios($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CntbEjercicio (Objeto) relacionado a traves de CntbDiarioAsiento */ 	
	public function getCntbEjercicioXCntbDiarioAsiento($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCntbEjerciciosXCntbDiarioAsiento($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCntbDiarioAsientoVtaFacturas */ 	
	public function getCntbDiarioAsientoVtaFacturas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CntbDiarioAsientoVtaFactura::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CntbDiarioAsientoVtaFactura::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CntbDiarioAsientoVtaFactura::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CntbDiarioAsientoVtaFactura::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CntbDiarioAsientoVtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CntbDiarioAsientoVtaFactura::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CntbDiarioAsientoVtaFactura::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cntbdiarioasientovtafacturas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cntbdiarioasientovtafactura = CntbDiarioAsientoVtaFactura::hidratarObjeto($fila);			
                $cntbdiarioasientovtafacturas[] = $cntbdiarioasientovtafactura;
            }

            return $cntbdiarioasientovtafacturas;
	}	
	

	/* Método getCntbDiarioAsientoVtaFacturasBloque para MasInfo */ 	
	public function getCntbDiarioAsientoVtaFacturasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCntbDiarioAsientoVtaFacturas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoVtaFacturas Habilitados */ 	
	public function getCntbDiarioAsientoVtaFacturasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCntbDiarioAsientoVtaFacturas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoVtaFactura */ 	
	public function getCntbDiarioAsientoVtaFactura($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCntbDiarioAsientoVtaFacturas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CntbDiarioAsientoVtaFactura relacionadas */ 	
	public function deleteCntbDiarioAsientoVtaFacturas(){
            $obs = $this->getCntbDiarioAsientoVtaFacturas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCntbDiarioAsientoVtaFacturasCmb() CntbDiarioAsientoVtaFactura relacionadas */ 	
	public function getCntbDiarioAsientoVtaFacturasCmb(){
            $c = new Criterio();
            $c->add(CntbDiarioAsientoVtaFactura::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsientoVtaFactura::GEN_TABLA);
            $c->setCriterios();

            $os = CntbDiarioAsientoVtaFactura::getCntbDiarioAsientoVtaFacturasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CntbDiarioAsientos (Coleccion) relacionados a traves de CntbDiarioAsientoVtaFactura */ 	
	public function getCntbDiarioAsientosXCntbDiarioAsientoVtaFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CntbDiarioAsiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoVtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoVtaFactura::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsiento::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoVtaFactura::GEN_TABLA, CntbDiarioAsientoVtaFactura::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, CntbDiarioAsiento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbDiarioAsiento::getCntbDiarioAsientos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CntbDiarioAsientos relacionados a traves de CntbDiarioAsientoVtaFactura */ 	
	public function getCantidadCntbDiarioAsientosXCntbDiarioAsientoVtaFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CntbDiarioAsiento::GEN_ATTR_ID);
            if($estado){
                $c->add(CntbDiarioAsiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoVtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoVtaFactura::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsiento::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoVtaFactura::GEN_TABLA, CntbDiarioAsientoVtaFactura::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, CntbDiarioAsiento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbDiarioAsiento::getCntbDiarioAsientos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CntbDiarioAsiento (Objeto) relacionado a traves de CntbDiarioAsientoVtaFactura */ 	
	public function getCntbDiarioAsientoXCntbDiarioAsientoVtaFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCntbDiarioAsientosXCntbDiarioAsientoVtaFactura($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCntbDiarioAsientoVtaNotaCreditos */ 	
	public function getCntbDiarioAsientoVtaNotaCreditos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CntbDiarioAsientoVtaNotaCredito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CntbDiarioAsientoVtaNotaCredito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CntbDiarioAsientoVtaNotaCredito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CntbDiarioAsientoVtaNotaCredito::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CntbDiarioAsientoVtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CntbDiarioAsientoVtaNotaCredito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CntbDiarioAsientoVtaNotaCredito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cntbdiarioasientovtanotacreditos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cntbdiarioasientovtanotacredito = CntbDiarioAsientoVtaNotaCredito::hidratarObjeto($fila);			
                $cntbdiarioasientovtanotacreditos[] = $cntbdiarioasientovtanotacredito;
            }

            return $cntbdiarioasientovtanotacreditos;
	}	
	

	/* Método getCntbDiarioAsientoVtaNotaCreditosBloque para MasInfo */ 	
	public function getCntbDiarioAsientoVtaNotaCreditosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCntbDiarioAsientoVtaNotaCreditos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoVtaNotaCreditos Habilitados */ 	
	public function getCntbDiarioAsientoVtaNotaCreditosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCntbDiarioAsientoVtaNotaCreditos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoVtaNotaCredito */ 	
	public function getCntbDiarioAsientoVtaNotaCredito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCntbDiarioAsientoVtaNotaCreditos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CntbDiarioAsientoVtaNotaCredito relacionadas */ 	
	public function deleteCntbDiarioAsientoVtaNotaCreditos(){
            $obs = $this->getCntbDiarioAsientoVtaNotaCreditos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCntbDiarioAsientoVtaNotaCreditosCmb() CntbDiarioAsientoVtaNotaCredito relacionadas */ 	
	public function getCntbDiarioAsientoVtaNotaCreditosCmb(){
            $c = new Criterio();
            $c->add(CntbDiarioAsientoVtaNotaCredito::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsientoVtaNotaCredito::GEN_TABLA);
            $c->setCriterios();

            $os = CntbDiarioAsientoVtaNotaCredito::getCntbDiarioAsientoVtaNotaCreditosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CntbDiarioAsientos (Coleccion) relacionados a traves de CntbDiarioAsientoVtaNotaCredito */ 	
	public function getCntbDiarioAsientosXCntbDiarioAsientoVtaNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CntbDiarioAsiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoVtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoVtaNotaCredito::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsiento::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoVtaNotaCredito::GEN_TABLA, CntbDiarioAsientoVtaNotaCredito::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, CntbDiarioAsiento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbDiarioAsiento::getCntbDiarioAsientos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CntbDiarioAsientos relacionados a traves de CntbDiarioAsientoVtaNotaCredito */ 	
	public function getCantidadCntbDiarioAsientosXCntbDiarioAsientoVtaNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CntbDiarioAsiento::GEN_ATTR_ID);
            if($estado){
                $c->add(CntbDiarioAsiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoVtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoVtaNotaCredito::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsiento::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoVtaNotaCredito::GEN_TABLA, CntbDiarioAsientoVtaNotaCredito::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, CntbDiarioAsiento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbDiarioAsiento::getCntbDiarioAsientos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CntbDiarioAsiento (Objeto) relacionado a traves de CntbDiarioAsientoVtaNotaCredito */ 	
	public function getCntbDiarioAsientoXCntbDiarioAsientoVtaNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCntbDiarioAsientosXCntbDiarioAsientoVtaNotaCredito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCntbDiarioAsientoVtaNotaDebitos */ 	
	public function getCntbDiarioAsientoVtaNotaDebitos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CntbDiarioAsientoVtaNotaDebito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CntbDiarioAsientoVtaNotaDebito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CntbDiarioAsientoVtaNotaDebito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CntbDiarioAsientoVtaNotaDebito::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CntbDiarioAsientoVtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CntbDiarioAsientoVtaNotaDebito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CntbDiarioAsientoVtaNotaDebito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cntbdiarioasientovtanotadebitos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cntbdiarioasientovtanotadebito = CntbDiarioAsientoVtaNotaDebito::hidratarObjeto($fila);			
                $cntbdiarioasientovtanotadebitos[] = $cntbdiarioasientovtanotadebito;
            }

            return $cntbdiarioasientovtanotadebitos;
	}	
	

	/* Método getCntbDiarioAsientoVtaNotaDebitosBloque para MasInfo */ 	
	public function getCntbDiarioAsientoVtaNotaDebitosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCntbDiarioAsientoVtaNotaDebitos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoVtaNotaDebitos Habilitados */ 	
	public function getCntbDiarioAsientoVtaNotaDebitosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCntbDiarioAsientoVtaNotaDebitos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoVtaNotaDebito */ 	
	public function getCntbDiarioAsientoVtaNotaDebito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCntbDiarioAsientoVtaNotaDebitos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CntbDiarioAsientoVtaNotaDebito relacionadas */ 	
	public function deleteCntbDiarioAsientoVtaNotaDebitos(){
            $obs = $this->getCntbDiarioAsientoVtaNotaDebitos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCntbDiarioAsientoVtaNotaDebitosCmb() CntbDiarioAsientoVtaNotaDebito relacionadas */ 	
	public function getCntbDiarioAsientoVtaNotaDebitosCmb(){
            $c = new Criterio();
            $c->add(CntbDiarioAsientoVtaNotaDebito::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsientoVtaNotaDebito::GEN_TABLA);
            $c->setCriterios();

            $os = CntbDiarioAsientoVtaNotaDebito::getCntbDiarioAsientoVtaNotaDebitosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CntbDiarioAsientos (Coleccion) relacionados a traves de CntbDiarioAsientoVtaNotaDebito */ 	
	public function getCntbDiarioAsientosXCntbDiarioAsientoVtaNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CntbDiarioAsiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoVtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoVtaNotaDebito::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsiento::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoVtaNotaDebito::GEN_TABLA, CntbDiarioAsientoVtaNotaDebito::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, CntbDiarioAsiento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbDiarioAsiento::getCntbDiarioAsientos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CntbDiarioAsientos relacionados a traves de CntbDiarioAsientoVtaNotaDebito */ 	
	public function getCantidadCntbDiarioAsientosXCntbDiarioAsientoVtaNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CntbDiarioAsiento::GEN_ATTR_ID);
            if($estado){
                $c->add(CntbDiarioAsiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoVtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoVtaNotaDebito::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsiento::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoVtaNotaDebito::GEN_TABLA, CntbDiarioAsientoVtaNotaDebito::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, CntbDiarioAsiento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbDiarioAsiento::getCntbDiarioAsientos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CntbDiarioAsiento (Objeto) relacionado a traves de CntbDiarioAsientoVtaNotaDebito */ 	
	public function getCntbDiarioAsientoXCntbDiarioAsientoVtaNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCntbDiarioAsientosXCntbDiarioAsientoVtaNotaDebito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCntbDiarioAsientoVtaRecibos */ 	
	public function getCntbDiarioAsientoVtaRecibos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CntbDiarioAsientoVtaRecibo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CntbDiarioAsientoVtaRecibo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CntbDiarioAsientoVtaRecibo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CntbDiarioAsientoVtaRecibo::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CntbDiarioAsientoVtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CntbDiarioAsientoVtaRecibo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CntbDiarioAsientoVtaRecibo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cntbdiarioasientovtarecibos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cntbdiarioasientovtarecibo = CntbDiarioAsientoVtaRecibo::hidratarObjeto($fila);			
                $cntbdiarioasientovtarecibos[] = $cntbdiarioasientovtarecibo;
            }

            return $cntbdiarioasientovtarecibos;
	}	
	

	/* Método getCntbDiarioAsientoVtaRecibosBloque para MasInfo */ 	
	public function getCntbDiarioAsientoVtaRecibosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCntbDiarioAsientoVtaRecibos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoVtaRecibos Habilitados */ 	
	public function getCntbDiarioAsientoVtaRecibosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCntbDiarioAsientoVtaRecibos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoVtaRecibo */ 	
	public function getCntbDiarioAsientoVtaRecibo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCntbDiarioAsientoVtaRecibos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CntbDiarioAsientoVtaRecibo relacionadas */ 	
	public function deleteCntbDiarioAsientoVtaRecibos(){
            $obs = $this->getCntbDiarioAsientoVtaRecibos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCntbDiarioAsientoVtaRecibosCmb() CntbDiarioAsientoVtaRecibo relacionadas */ 	
	public function getCntbDiarioAsientoVtaRecibosCmb(){
            $c = new Criterio();
            $c->add(CntbDiarioAsientoVtaRecibo::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsientoVtaRecibo::GEN_TABLA);
            $c->setCriterios();

            $os = CntbDiarioAsientoVtaRecibo::getCntbDiarioAsientoVtaRecibosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CntbDiarioAsientos (Coleccion) relacionados a traves de CntbDiarioAsientoVtaRecibo */ 	
	public function getCntbDiarioAsientosXCntbDiarioAsientoVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CntbDiarioAsiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoVtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoVtaRecibo::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsiento::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoVtaRecibo::GEN_TABLA, CntbDiarioAsientoVtaRecibo::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, CntbDiarioAsiento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbDiarioAsiento::getCntbDiarioAsientos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CntbDiarioAsientos relacionados a traves de CntbDiarioAsientoVtaRecibo */ 	
	public function getCantidadCntbDiarioAsientosXCntbDiarioAsientoVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CntbDiarioAsiento::GEN_ATTR_ID);
            if($estado){
                $c->add(CntbDiarioAsiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoVtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoVtaRecibo::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsiento::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoVtaRecibo::GEN_TABLA, CntbDiarioAsientoVtaRecibo::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, CntbDiarioAsiento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbDiarioAsiento::getCntbDiarioAsientos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CntbDiarioAsiento (Objeto) relacionado a traves de CntbDiarioAsientoVtaRecibo */ 	
	public function getCntbDiarioAsientoXCntbDiarioAsientoVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCntbDiarioAsientosXCntbDiarioAsientoVtaRecibo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCntbDiarioAsientoPdeFacturas */ 	
	public function getCntbDiarioAsientoPdeFacturas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CntbDiarioAsientoPdeFactura::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CntbDiarioAsientoPdeFactura::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CntbDiarioAsientoPdeFactura::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CntbDiarioAsientoPdeFactura::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CntbDiarioAsientoPdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CntbDiarioAsientoPdeFactura::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CntbDiarioAsientoPdeFactura::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cntbdiarioasientopdefacturas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cntbdiarioasientopdefactura = CntbDiarioAsientoPdeFactura::hidratarObjeto($fila);			
                $cntbdiarioasientopdefacturas[] = $cntbdiarioasientopdefactura;
            }

            return $cntbdiarioasientopdefacturas;
	}	
	

	/* Método getCntbDiarioAsientoPdeFacturasBloque para MasInfo */ 	
	public function getCntbDiarioAsientoPdeFacturasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCntbDiarioAsientoPdeFacturas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoPdeFacturas Habilitados */ 	
	public function getCntbDiarioAsientoPdeFacturasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCntbDiarioAsientoPdeFacturas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoPdeFactura */ 	
	public function getCntbDiarioAsientoPdeFactura($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCntbDiarioAsientoPdeFacturas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CntbDiarioAsientoPdeFactura relacionadas */ 	
	public function deleteCntbDiarioAsientoPdeFacturas(){
            $obs = $this->getCntbDiarioAsientoPdeFacturas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCntbDiarioAsientoPdeFacturasCmb() CntbDiarioAsientoPdeFactura relacionadas */ 	
	public function getCntbDiarioAsientoPdeFacturasCmb(){
            $c = new Criterio();
            $c->add(CntbDiarioAsientoPdeFactura::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsientoPdeFactura::GEN_TABLA);
            $c->setCriterios();

            $os = CntbDiarioAsientoPdeFactura::getCntbDiarioAsientoPdeFacturasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CntbDiarioAsientos (Coleccion) relacionados a traves de CntbDiarioAsientoPdeFactura */ 	
	public function getCntbDiarioAsientosXCntbDiarioAsientoPdeFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CntbDiarioAsiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoPdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoPdeFactura::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsiento::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoPdeFactura::GEN_TABLA, CntbDiarioAsientoPdeFactura::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, CntbDiarioAsiento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbDiarioAsiento::getCntbDiarioAsientos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CntbDiarioAsientos relacionados a traves de CntbDiarioAsientoPdeFactura */ 	
	public function getCantidadCntbDiarioAsientosXCntbDiarioAsientoPdeFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CntbDiarioAsiento::GEN_ATTR_ID);
            if($estado){
                $c->add(CntbDiarioAsiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoPdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoPdeFactura::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsiento::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoPdeFactura::GEN_TABLA, CntbDiarioAsientoPdeFactura::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, CntbDiarioAsiento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbDiarioAsiento::getCntbDiarioAsientos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CntbDiarioAsiento (Objeto) relacionado a traves de CntbDiarioAsientoPdeFactura */ 	
	public function getCntbDiarioAsientoXCntbDiarioAsientoPdeFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCntbDiarioAsientosXCntbDiarioAsientoPdeFactura($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCntbDiarioAsientoPdeNotaCreditos */ 	
	public function getCntbDiarioAsientoPdeNotaCreditos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CntbDiarioAsientoPdeNotaCredito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CntbDiarioAsientoPdeNotaCredito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CntbDiarioAsientoPdeNotaCredito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CntbDiarioAsientoPdeNotaCredito::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CntbDiarioAsientoPdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CntbDiarioAsientoPdeNotaCredito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CntbDiarioAsientoPdeNotaCredito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cntbdiarioasientopdenotacreditos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cntbdiarioasientopdenotacredito = CntbDiarioAsientoPdeNotaCredito::hidratarObjeto($fila);			
                $cntbdiarioasientopdenotacreditos[] = $cntbdiarioasientopdenotacredito;
            }

            return $cntbdiarioasientopdenotacreditos;
	}	
	

	/* Método getCntbDiarioAsientoPdeNotaCreditosBloque para MasInfo */ 	
	public function getCntbDiarioAsientoPdeNotaCreditosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCntbDiarioAsientoPdeNotaCreditos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoPdeNotaCreditos Habilitados */ 	
	public function getCntbDiarioAsientoPdeNotaCreditosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCntbDiarioAsientoPdeNotaCreditos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoPdeNotaCredito */ 	
	public function getCntbDiarioAsientoPdeNotaCredito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCntbDiarioAsientoPdeNotaCreditos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CntbDiarioAsientoPdeNotaCredito relacionadas */ 	
	public function deleteCntbDiarioAsientoPdeNotaCreditos(){
            $obs = $this->getCntbDiarioAsientoPdeNotaCreditos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCntbDiarioAsientoPdeNotaCreditosCmb() CntbDiarioAsientoPdeNotaCredito relacionadas */ 	
	public function getCntbDiarioAsientoPdeNotaCreditosCmb(){
            $c = new Criterio();
            $c->add(CntbDiarioAsientoPdeNotaCredito::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsientoPdeNotaCredito::GEN_TABLA);
            $c->setCriterios();

            $os = CntbDiarioAsientoPdeNotaCredito::getCntbDiarioAsientoPdeNotaCreditosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CntbDiarioAsientos (Coleccion) relacionados a traves de CntbDiarioAsientoPdeNotaCredito */ 	
	public function getCntbDiarioAsientosXCntbDiarioAsientoPdeNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CntbDiarioAsiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoPdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoPdeNotaCredito::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsiento::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoPdeNotaCredito::GEN_TABLA, CntbDiarioAsientoPdeNotaCredito::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, CntbDiarioAsiento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbDiarioAsiento::getCntbDiarioAsientos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CntbDiarioAsientos relacionados a traves de CntbDiarioAsientoPdeNotaCredito */ 	
	public function getCantidadCntbDiarioAsientosXCntbDiarioAsientoPdeNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CntbDiarioAsiento::GEN_ATTR_ID);
            if($estado){
                $c->add(CntbDiarioAsiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoPdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoPdeNotaCredito::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsiento::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoPdeNotaCredito::GEN_TABLA, CntbDiarioAsientoPdeNotaCredito::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, CntbDiarioAsiento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbDiarioAsiento::getCntbDiarioAsientos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CntbDiarioAsiento (Objeto) relacionado a traves de CntbDiarioAsientoPdeNotaCredito */ 	
	public function getCntbDiarioAsientoXCntbDiarioAsientoPdeNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCntbDiarioAsientosXCntbDiarioAsientoPdeNotaCredito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCntbDiarioAsientoPdeNotaDebitos */ 	
	public function getCntbDiarioAsientoPdeNotaDebitos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CntbDiarioAsientoPdeNotaDebito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CntbDiarioAsientoPdeNotaDebito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CntbDiarioAsientoPdeNotaDebito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CntbDiarioAsientoPdeNotaDebito::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CntbDiarioAsientoPdeNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CntbDiarioAsientoPdeNotaDebito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CntbDiarioAsientoPdeNotaDebito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cntbdiarioasientopdenotadebitos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cntbdiarioasientopdenotadebito = CntbDiarioAsientoPdeNotaDebito::hidratarObjeto($fila);			
                $cntbdiarioasientopdenotadebitos[] = $cntbdiarioasientopdenotadebito;
            }

            return $cntbdiarioasientopdenotadebitos;
	}	
	

	/* Método getCntbDiarioAsientoPdeNotaDebitosBloque para MasInfo */ 	
	public function getCntbDiarioAsientoPdeNotaDebitosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCntbDiarioAsientoPdeNotaDebitos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoPdeNotaDebitos Habilitados */ 	
	public function getCntbDiarioAsientoPdeNotaDebitosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCntbDiarioAsientoPdeNotaDebitos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoPdeNotaDebito */ 	
	public function getCntbDiarioAsientoPdeNotaDebito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCntbDiarioAsientoPdeNotaDebitos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CntbDiarioAsientoPdeNotaDebito relacionadas */ 	
	public function deleteCntbDiarioAsientoPdeNotaDebitos(){
            $obs = $this->getCntbDiarioAsientoPdeNotaDebitos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCntbDiarioAsientoPdeNotaDebitosCmb() CntbDiarioAsientoPdeNotaDebito relacionadas */ 	
	public function getCntbDiarioAsientoPdeNotaDebitosCmb(){
            $c = new Criterio();
            $c->add(CntbDiarioAsientoPdeNotaDebito::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsientoPdeNotaDebito::GEN_TABLA);
            $c->setCriterios();

            $os = CntbDiarioAsientoPdeNotaDebito::getCntbDiarioAsientoPdeNotaDebitosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CntbDiarioAsientos (Coleccion) relacionados a traves de CntbDiarioAsientoPdeNotaDebito */ 	
	public function getCntbDiarioAsientosXCntbDiarioAsientoPdeNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CntbDiarioAsiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoPdeNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoPdeNotaDebito::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsiento::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoPdeNotaDebito::GEN_TABLA, CntbDiarioAsientoPdeNotaDebito::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, CntbDiarioAsiento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbDiarioAsiento::getCntbDiarioAsientos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CntbDiarioAsientos relacionados a traves de CntbDiarioAsientoPdeNotaDebito */ 	
	public function getCantidadCntbDiarioAsientosXCntbDiarioAsientoPdeNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CntbDiarioAsiento::GEN_ATTR_ID);
            if($estado){
                $c->add(CntbDiarioAsiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoPdeNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoPdeNotaDebito::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsiento::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoPdeNotaDebito::GEN_TABLA, CntbDiarioAsientoPdeNotaDebito::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, CntbDiarioAsiento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbDiarioAsiento::getCntbDiarioAsientos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CntbDiarioAsiento (Objeto) relacionado a traves de CntbDiarioAsientoPdeNotaDebito */ 	
	public function getCntbDiarioAsientoXCntbDiarioAsientoPdeNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCntbDiarioAsientosXCntbDiarioAsientoPdeNotaDebito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCntbDiarioAsientoPdeRecibos */ 	
	public function getCntbDiarioAsientoPdeRecibos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CntbDiarioAsientoPdeRecibo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CntbDiarioAsientoPdeRecibo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CntbDiarioAsientoPdeRecibo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CntbDiarioAsientoPdeRecibo::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CntbDiarioAsientoPdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CntbDiarioAsientoPdeRecibo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CntbDiarioAsientoPdeRecibo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cntbdiarioasientopderecibos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cntbdiarioasientopderecibo = CntbDiarioAsientoPdeRecibo::hidratarObjeto($fila);			
                $cntbdiarioasientopderecibos[] = $cntbdiarioasientopderecibo;
            }

            return $cntbdiarioasientopderecibos;
	}	
	

	/* Método getCntbDiarioAsientoPdeRecibosBloque para MasInfo */ 	
	public function getCntbDiarioAsientoPdeRecibosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCntbDiarioAsientoPdeRecibos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoPdeRecibos Habilitados */ 	
	public function getCntbDiarioAsientoPdeRecibosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCntbDiarioAsientoPdeRecibos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoPdeRecibo */ 	
	public function getCntbDiarioAsientoPdeRecibo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCntbDiarioAsientoPdeRecibos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CntbDiarioAsientoPdeRecibo relacionadas */ 	
	public function deleteCntbDiarioAsientoPdeRecibos(){
            $obs = $this->getCntbDiarioAsientoPdeRecibos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCntbDiarioAsientoPdeRecibosCmb() CntbDiarioAsientoPdeRecibo relacionadas */ 	
	public function getCntbDiarioAsientoPdeRecibosCmb(){
            $c = new Criterio();
            $c->add(CntbDiarioAsientoPdeRecibo::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsientoPdeRecibo::GEN_TABLA);
            $c->setCriterios();

            $os = CntbDiarioAsientoPdeRecibo::getCntbDiarioAsientoPdeRecibosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CntbDiarioAsientos (Coleccion) relacionados a traves de CntbDiarioAsientoPdeRecibo */ 	
	public function getCntbDiarioAsientosXCntbDiarioAsientoPdeRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CntbDiarioAsiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoPdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoPdeRecibo::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsiento::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoPdeRecibo::GEN_TABLA, CntbDiarioAsientoPdeRecibo::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, CntbDiarioAsiento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbDiarioAsiento::getCntbDiarioAsientos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CntbDiarioAsientos relacionados a traves de CntbDiarioAsientoPdeRecibo */ 	
	public function getCantidadCntbDiarioAsientosXCntbDiarioAsientoPdeRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CntbDiarioAsiento::GEN_ATTR_ID);
            if($estado){
                $c->add(CntbDiarioAsiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoPdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoPdeRecibo::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsiento::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoPdeRecibo::GEN_TABLA, CntbDiarioAsientoPdeRecibo::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, CntbDiarioAsiento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbDiarioAsiento::getCntbDiarioAsientos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CntbDiarioAsiento (Objeto) relacionado a traves de CntbDiarioAsientoPdeRecibo */ 	
	public function getCntbDiarioAsientoXCntbDiarioAsientoPdeRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCntbDiarioAsientosXCntbDiarioAsientoPdeRecibo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCntbDiarioAsientoVtaAjusteDebes */ 	
	public function getCntbDiarioAsientoVtaAjusteDebes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CntbDiarioAsientoVtaAjusteDebe::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CntbDiarioAsientoVtaAjusteDebe::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CntbDiarioAsientoVtaAjusteDebe::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CntbDiarioAsientoVtaAjusteDebe::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CntbDiarioAsientoVtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CntbDiarioAsientoVtaAjusteDebe::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CntbDiarioAsientoVtaAjusteDebe::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cntbdiarioasientovtaajustedebes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cntbdiarioasientovtaajustedebe = CntbDiarioAsientoVtaAjusteDebe::hidratarObjeto($fila);			
                $cntbdiarioasientovtaajustedebes[] = $cntbdiarioasientovtaajustedebe;
            }

            return $cntbdiarioasientovtaajustedebes;
	}	
	

	/* Método getCntbDiarioAsientoVtaAjusteDebesBloque para MasInfo */ 	
	public function getCntbDiarioAsientoVtaAjusteDebesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCntbDiarioAsientoVtaAjusteDebes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoVtaAjusteDebes Habilitados */ 	
	public function getCntbDiarioAsientoVtaAjusteDebesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCntbDiarioAsientoVtaAjusteDebes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoVtaAjusteDebe */ 	
	public function getCntbDiarioAsientoVtaAjusteDebe($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCntbDiarioAsientoVtaAjusteDebes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CntbDiarioAsientoVtaAjusteDebe relacionadas */ 	
	public function deleteCntbDiarioAsientoVtaAjusteDebes(){
            $obs = $this->getCntbDiarioAsientoVtaAjusteDebes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCntbDiarioAsientoVtaAjusteDebesCmb() CntbDiarioAsientoVtaAjusteDebe relacionadas */ 	
	public function getCntbDiarioAsientoVtaAjusteDebesCmb(){
            $c = new Criterio();
            $c->add(CntbDiarioAsientoVtaAjusteDebe::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsientoVtaAjusteDebe::GEN_TABLA);
            $c->setCriterios();

            $os = CntbDiarioAsientoVtaAjusteDebe::getCntbDiarioAsientoVtaAjusteDebesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CntbDiarioAsientos (Coleccion) relacionados a traves de CntbDiarioAsientoVtaAjusteDebe */ 	
	public function getCntbDiarioAsientosXCntbDiarioAsientoVtaAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CntbDiarioAsiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoVtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoVtaAjusteDebe::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsiento::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoVtaAjusteDebe::GEN_TABLA, CntbDiarioAsientoVtaAjusteDebe::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, CntbDiarioAsiento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbDiarioAsiento::getCntbDiarioAsientos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CntbDiarioAsientos relacionados a traves de CntbDiarioAsientoVtaAjusteDebe */ 	
	public function getCantidadCntbDiarioAsientosXCntbDiarioAsientoVtaAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CntbDiarioAsiento::GEN_ATTR_ID);
            if($estado){
                $c->add(CntbDiarioAsiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoVtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoVtaAjusteDebe::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsiento::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoVtaAjusteDebe::GEN_TABLA, CntbDiarioAsientoVtaAjusteDebe::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, CntbDiarioAsiento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbDiarioAsiento::getCntbDiarioAsientos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CntbDiarioAsiento (Objeto) relacionado a traves de CntbDiarioAsientoVtaAjusteDebe */ 	
	public function getCntbDiarioAsientoXCntbDiarioAsientoVtaAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCntbDiarioAsientosXCntbDiarioAsientoVtaAjusteDebe($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCntbDiarioAsientoVtaAjusteHabers */ 	
	public function getCntbDiarioAsientoVtaAjusteHabers($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CntbDiarioAsientoVtaAjusteHaber::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CntbDiarioAsientoVtaAjusteHaber::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CntbDiarioAsientoVtaAjusteHaber::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CntbDiarioAsientoVtaAjusteHaber::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CntbDiarioAsientoVtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CntbDiarioAsientoVtaAjusteHaber::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CntbDiarioAsientoVtaAjusteHaber::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cntbdiarioasientovtaajustehabers = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cntbdiarioasientovtaajustehaber = CntbDiarioAsientoVtaAjusteHaber::hidratarObjeto($fila);			
                $cntbdiarioasientovtaajustehabers[] = $cntbdiarioasientovtaajustehaber;
            }

            return $cntbdiarioasientovtaajustehabers;
	}	
	

	/* Método getCntbDiarioAsientoVtaAjusteHabersBloque para MasInfo */ 	
	public function getCntbDiarioAsientoVtaAjusteHabersParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCntbDiarioAsientoVtaAjusteHabers($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoVtaAjusteHabers Habilitados */ 	
	public function getCntbDiarioAsientoVtaAjusteHabersHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCntbDiarioAsientoVtaAjusteHabers($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoVtaAjusteHaber */ 	
	public function getCntbDiarioAsientoVtaAjusteHaber($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCntbDiarioAsientoVtaAjusteHabers($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CntbDiarioAsientoVtaAjusteHaber relacionadas */ 	
	public function deleteCntbDiarioAsientoVtaAjusteHabers(){
            $obs = $this->getCntbDiarioAsientoVtaAjusteHabers();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCntbDiarioAsientoVtaAjusteHabersCmb() CntbDiarioAsientoVtaAjusteHaber relacionadas */ 	
	public function getCntbDiarioAsientoVtaAjusteHabersCmb(){
            $c = new Criterio();
            $c->add(CntbDiarioAsientoVtaAjusteHaber::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsientoVtaAjusteHaber::GEN_TABLA);
            $c->setCriterios();

            $os = CntbDiarioAsientoVtaAjusteHaber::getCntbDiarioAsientoVtaAjusteHabersCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CntbDiarioAsientos (Coleccion) relacionados a traves de CntbDiarioAsientoVtaAjusteHaber */ 	
	public function getCntbDiarioAsientosXCntbDiarioAsientoVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CntbDiarioAsiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoVtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoVtaAjusteHaber::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsiento::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoVtaAjusteHaber::GEN_TABLA, CntbDiarioAsientoVtaAjusteHaber::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, CntbDiarioAsiento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbDiarioAsiento::getCntbDiarioAsientos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CntbDiarioAsientos relacionados a traves de CntbDiarioAsientoVtaAjusteHaber */ 	
	public function getCantidadCntbDiarioAsientosXCntbDiarioAsientoVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CntbDiarioAsiento::GEN_ATTR_ID);
            if($estado){
                $c->add(CntbDiarioAsiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoVtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoVtaAjusteHaber::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsiento::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoVtaAjusteHaber::GEN_TABLA, CntbDiarioAsientoVtaAjusteHaber::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, CntbDiarioAsiento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbDiarioAsiento::getCntbDiarioAsientos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CntbDiarioAsiento (Objeto) relacionado a traves de CntbDiarioAsientoVtaAjusteHaber */ 	
	public function getCntbDiarioAsientoXCntbDiarioAsientoVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCntbDiarioAsientosXCntbDiarioAsientoVtaAjusteHaber($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
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

	/* Metodo que retorna el CntbEjercicio (Clave Foranea) */ 	
    public function getCntbEjercicio(){
        $o = new CntbEjercicio();
        $o->setId($this->getCntbEjercicioId());
        return $o;			
    }

	/* Metodo que retorna el CntbEjercicio (Clave Foranea) en Array */ 	
    public function getCntbEjercicioEnArray(&$arr_os){
        if($this->getCntbEjercicioId() != 'null'){
            if(isset($arr_os[$this->getCntbEjercicioId()])){
                $o = $arr_os[$this->getCntbEjercicioId()];
            }else{
                $o = CntbEjercicio::getOxId($this->getCntbEjercicioId());
                if($o){
                    $arr_os[$this->getCntbEjercicioId()] = $o;
                }
            }
        }else{
            $o = new CntbEjercicio();
        }
        return $o;		
    }

	/* Metodo que retorna el GralMes (Clave Foranea) */ 	
    public function getGralMes(){
        $o = new GralMes();
        $o->setId($this->getGralMesId());
        return $o;			
    }

	/* Metodo que retorna el GralMes (Clave Foranea) en Array */ 	
    public function getGralMesEnArray(&$arr_os){
        if($this->getGralMesId() != 'null'){
            if(isset($arr_os[$this->getGralMesId()])){
                $o = $arr_os[$this->getGralMesId()];
            }else{
                $o = GralMes::getOxId($this->getGralMesId());
                if($o){
                    $arr_os[$this->getGralMesId()] = $o;
                }
            }
        }else{
            $o = new GralMes();
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
            		
        if($contexto_solicitante != GralEmpresa::GEN_CLASE){
            if($this->getGralEmpresa()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralEmpresa::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralEmpresa()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != CntbEjercicio::GEN_CLASE){
            if($this->getCntbEjercicio()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(CntbEjercicio::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getCntbEjercicio()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralMes::GEN_CLASE){
            if($this->getGralMes()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralMes::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralMes()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM cntb_periodo'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'cntb_periodo';");
            
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

            $obs = self::getCntbPeriodos($paginador, $criterio);
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

            $obs = self::getCntbPeriodos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCntbPeriodos($paginador, $criterio);
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

            $obs = self::getCntbPeriodos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_empresa_id' */ 	
	static function getOxGralEmpresaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_EMPRESA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCntbPeriodos($paginador, $criterio);
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

            $obs = self::getCntbPeriodos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cntb_ejercicio_id' */ 	
	static function getOxCntbEjercicioId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CNTB_EJERCICIO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCntbPeriodos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cntb_ejercicio_id' */ 	
	static function getOsxCntbEjercicioId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CNTB_EJERCICIO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCntbPeriodos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'anio' */ 	
	static function getOxAnio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ANIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCntbPeriodos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'anio' */ 	
	static function getOsxAnio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ANIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCntbPeriodos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_mes_id' */ 	
	static function getOxGralMesId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_MES_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCntbPeriodos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_mes_id' */ 	
	static function getOsxGralMesId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_MES_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCntbPeriodos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_inicio' */ 	
	static function getOxFechaInicio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_INICIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCntbPeriodos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha_inicio' */ 	
	static function getOsxFechaInicio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_INICIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCntbPeriodos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_fin' */ 	
	static function getOxFechaFin($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_FIN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCntbPeriodos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha_fin' */ 	
	static function getOsxFechaFin($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_FIN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCntbPeriodos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCntbPeriodos($paginador, $criterio);
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

            $obs = self::getCntbPeriodos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCntbPeriodos($paginador, $criterio);
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

            $obs = self::getCntbPeriodos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCntbPeriodos($paginador, $criterio);
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

            $obs = self::getCntbPeriodos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCntbPeriodos($paginador, $criterio);
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

            $obs = self::getCntbPeriodos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCntbPeriodos($paginador, $criterio);
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

            $obs = self::getCntbPeriodos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCntbPeriodos($paginador, $criterio);
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

            $obs = self::getCntbPeriodos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCntbPeriodos($paginador, $criterio);
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

            $obs = self::getCntbPeriodos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCntbPeriodos($paginador, $criterio);
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

            $obs = self::getCntbPeriodos(null, $criterio);
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

            $obs = self::getCntbPeriodos($paginador, $criterio);
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

            $obs = self::getCntbPeriodos($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'cntb_periodo_adm');
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

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha_inicio' */ 	
	public function getFechaInicioDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFechaInicio(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaInicioDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaInicioDiferenciaDias();
        
            if ($fecha_hace > 0) {
                $fecha_hace = 'hace ' . abs($fecha_hace) . ' dias';
            } elseif ($fecha_hace < 0) {
                $fecha_hace = 'faltan ' . abs($fecha_hace) . ' dias';
            } else {
                $fecha_hace = 'hoy';
            }
            return $fecha_hace;
	}

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha_fin' */ 	
	public function getFechaFinDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFechaFin(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaFinDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaFinDiferenciaDias();
        
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
                $c->addTabla(CntbPeriodo::GEN_TABLA);
                $c->addOrden(CntbPeriodo::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $cntb_periodos = CntbPeriodo::getCntbPeriodos(null, $c);

                $arr = array();
                foreach($cntb_periodos as $cntb_periodo){
                    $descripcion = $cntb_periodo->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>