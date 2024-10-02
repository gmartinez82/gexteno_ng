<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BPdeTipoNotaDebito
{ 
	
	const SES_PAGINACION = 'adm_pdetiponotadebito_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_pdetiponotadebito_paginas_registros';
	const SES_CRITERIOS = 'adm_pdetiponotadebito_criterios';
	
	const GEN_CLASE = 'PdeTipoNotaDebito';
	const GEN_TABLA = 'pde_tipo_nota_debito';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BPdeTipoNotaDebito */ 
	const GEN_ATTR_ID = 'pde_tipo_nota_debito.id';
	const GEN_ATTR_DESCRIPCION = 'pde_tipo_nota_debito.descripcion';
	const GEN_ATTR_CODIGO_MIN = 'pde_tipo_nota_debito.codigo_min';
	const GEN_ATTR_CODIGO = 'pde_tipo_nota_debito.codigo';
	const GEN_ATTR_INFORMA = 'pde_tipo_nota_debito.informa';
	const GEN_ATTR_OBSERVACION = 'pde_tipo_nota_debito.observacion';
	const GEN_ATTR_ORDEN = 'pde_tipo_nota_debito.orden';
	const GEN_ATTR_ESTADO = 'pde_tipo_nota_debito.estado';
	const GEN_ATTR_CREADO = 'pde_tipo_nota_debito.creado';
	const GEN_ATTR_CREADO_POR = 'pde_tipo_nota_debito.creado_por';
	const GEN_ATTR_MODIFICADO = 'pde_tipo_nota_debito.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'pde_tipo_nota_debito.modificado_por';

	/* Constantes de Atributos Min de BPdeTipoNotaDebito */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_CODIGO_MIN = 'codigo_min';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_INFORMA = 'informa';
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
	

	/* Atributos de BPdeTipoNotaDebito */ 
	private $id;
	private $descripcion;
	private $codigo_min;
	private $codigo;
	private $informa;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BPdeTipoNotaDebito */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getCodigoMin(){ if(isset($this->codigo_min)){ return $this->codigo_min; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getInforma(){ if(isset($this->informa)){ return $this->informa; }else{ return 0; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BPdeTipoNotaDebito */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_CODIGO_MIN."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_INFORMA."
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
				$this->setCodigoMin($fila[self::GEN_ATTR_MIN_CODIGO_MIN]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setInforma($fila[self::GEN_ATTR_MIN_INFORMA]);
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
	public function setCodigoMin($v){ $this->codigo_min = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setInforma($v){ $this->informa = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new PdeTipoNotaDebito();
            $o->setId($fila[PdeTipoNotaDebito::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setCodigoMin($fila[self::GEN_ATTR_MIN_CODIGO_MIN]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setInforma($fila[self::GEN_ATTR_MIN_INFORMA]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BPdeTipoNotaDebito */ 	
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

	/* Cambia el estado de BPdeTipoNotaDebito */ 	
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

	/* Save de BPdeTipoNotaDebito */ 	
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
						, ".self::GEN_ATTR_MIN_CODIGO_MIN."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_INFORMA."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('pde_tipo_nota_debito_seq'), 
                '".$this->getDescripcion()."'
						, '".$this->getCodigoMin()."'
						, '".$this->getCodigo()."'
						, ".$this->getInforma()."
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('pde_tipo_nota_debito_seq')";
            
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
                 
				 ".PdeTipoNotaDebito::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CODIGO_MIN." = '".$this->getCodigoMin()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_INFORMA." = ".$this->getInforma()."
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
						, ".self::GEN_ATTR_MIN_CODIGO_MIN."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_INFORMA."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getDescripcion()."'
						, '".$this->getCodigoMin()."'
						, '".$this->getCodigo()."'
						, ".$this->getInforma()."
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
                     
				 ".PdeTipoNotaDebito::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CODIGO_MIN." = '".$this->getCodigoMin()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_INFORMA." = ".$this->getInforma()."
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
            $o = new PdeTipoNotaDebito();
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

	/* Delete de BPdeTipoNotaDebito */ 	
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
	
            // se elimina la coleccion de GralCondicionIvaPdeTipoNotaDebitos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralCondicionIvaPdeTipoNotaDebito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralCondicionIvaPdeTipoNotaDebitos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeTipoNotaDebitoWsFeParamTipoComprobantes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeTipoNotaDebitoWsFeParamTipoComprobante::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeTipoNotaDebitoWsFeParamTipoComprobantes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeNotaDebitos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaDebito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaDebitos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarPdeTipoNotaDebito(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getPdeTipoNotaDebitos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = PdeTipoNotaDebito::setAplicarFiltrosDeAlcance($criterio);

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
	
		$pdetiponotadebitos = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $pdetiponotadebito = new PdeTipoNotaDebito();
                    $pdetiponotadebito->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $pdetiponotadebito->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$pdetiponotadebito->setCodigoMin($fila[self::GEN_ATTR_MIN_CODIGO_MIN]);
			$pdetiponotadebito->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$pdetiponotadebito->setInforma($fila[self::GEN_ATTR_MIN_INFORMA]);
			$pdetiponotadebito->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$pdetiponotadebito->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$pdetiponotadebito->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$pdetiponotadebito->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$pdetiponotadebito->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$pdetiponotadebito->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$pdetiponotadebito->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $pdetiponotadebitos[] = $pdetiponotadebito;
		}
		
		return $pdetiponotadebitos;
	}	
	

	/* Método getPdeTipoNotaDebitos Habilitados */ 	
	static function getPdeTipoNotaDebitosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return PdeTipoNotaDebito::getPdeTipoNotaDebitos($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getPdeTipoNotaDebitos para listado de Backend */ 	
	static function getPdeTipoNotaDebitosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return PdeTipoNotaDebito::getPdeTipoNotaDebitos($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getPdeTipoNotaDebitosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = PdeTipoNotaDebito::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = PdeTipoNotaDebito::getPdeTipoNotaDebitos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPdeTipoNotaDebitos filtrado para select */ 	
	static function getPdeTipoNotaDebitosCmbF($paginador = null, $criterio = null){
            $col = PdeTipoNotaDebito::getPdeTipoNotaDebitos($paginador, $criterio);

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
            $url = 'pde_tipo_nota_debito_adm.php';
            $url_gestion = 'pde_tipo_nota_debito_gestion.php';
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
	

	/* Metodo getGralCondicionIvaPdeTipoNotaDebitos */ 	
	public function getGralCondicionIvaPdeTipoNotaDebitos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralCondicionIvaPdeTipoNotaDebito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralCondicionIvaPdeTipoNotaDebito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralCondicionIvaPdeTipoNotaDebito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralCondicionIvaPdeTipoNotaDebito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralCondicionIvaPdeTipoNotaDebito::GEN_ATTR_PDE_TIPO_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralCondicionIvaPdeTipoNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralCondicionIvaPdeTipoNotaDebito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralCondicionIvaPdeTipoNotaDebito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralcondicionivapdetiponotadebitos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralcondicionivapdetiponotadebito = GralCondicionIvaPdeTipoNotaDebito::hidratarObjeto($fila);			
                $gralcondicionivapdetiponotadebitos[] = $gralcondicionivapdetiponotadebito;
            }

            return $gralcondicionivapdetiponotadebitos;
	}	
	

	/* Método getGralCondicionIvaPdeTipoNotaDebitosBloque para MasInfo */ 	
	public function getGralCondicionIvaPdeTipoNotaDebitosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralCondicionIvaPdeTipoNotaDebitos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralCondicionIvaPdeTipoNotaDebitos Habilitados */ 	
	public function getGralCondicionIvaPdeTipoNotaDebitosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralCondicionIvaPdeTipoNotaDebitos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralCondicionIvaPdeTipoNotaDebito */ 	
	public function getGralCondicionIvaPdeTipoNotaDebito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralCondicionIvaPdeTipoNotaDebitos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralCondicionIvaPdeTipoNotaDebito relacionadas */ 	
	public function deleteGralCondicionIvaPdeTipoNotaDebitos(){
            $obs = $this->getGralCondicionIvaPdeTipoNotaDebitos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralCondicionIvaPdeTipoNotaDebitosCmb() GralCondicionIvaPdeTipoNotaDebito relacionadas */ 	
	public function getGralCondicionIvaPdeTipoNotaDebitosCmb(){
            $c = new Criterio();
            $c->add(GralCondicionIvaPdeTipoNotaDebito::GEN_ATTR_PDE_TIPO_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralCondicionIvaPdeTipoNotaDebito::GEN_TABLA);
            $c->setCriterios();

            $os = GralCondicionIvaPdeTipoNotaDebito::getGralCondicionIvaPdeTipoNotaDebitosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralCondicionIvas (Coleccion) relacionados a traves de GralCondicionIvaPdeTipoNotaDebito */ 	
	public function getGralCondicionIvasXGralCondicionIvaPdeTipoNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralCondicionIva::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralCondicionIvaPdeTipoNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralCondicionIvaPdeTipoNotaDebito::GEN_ATTR_PDE_TIPO_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralCondicionIva::GEN_TABLA);
            $c->addRealJoin(GralCondicionIvaPdeTipoNotaDebito::GEN_TABLA, GralCondicionIvaPdeTipoNotaDebito::GEN_ATTR_GRAL_CONDICION_IVA_ID, GralCondicionIva::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralCondicionIva::getGralCondicionIvas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralCondicionIvas relacionados a traves de GralCondicionIvaPdeTipoNotaDebito */ 	
	public function getCantidadGralCondicionIvasXGralCondicionIvaPdeTipoNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralCondicionIva::GEN_ATTR_ID);
            if($estado){
                $c->add(GralCondicionIva::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralCondicionIvaPdeTipoNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralCondicionIvaPdeTipoNotaDebito::GEN_ATTR_PDE_TIPO_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralCondicionIva::GEN_TABLA);
            $c->addRealJoin(GralCondicionIvaPdeTipoNotaDebito::GEN_TABLA, GralCondicionIvaPdeTipoNotaDebito::GEN_ATTR_GRAL_CONDICION_IVA_ID, GralCondicionIva::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralCondicionIva::getGralCondicionIvas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralCondicionIva (Objeto) relacionado a traves de GralCondicionIvaPdeTipoNotaDebito */ 	
	public function getGralCondicionIvaXGralCondicionIvaPdeTipoNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralCondicionIvasXGralCondicionIvaPdeTipoNotaDebito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeTipoNotaDebitoWsFeParamTipoComprobantes */ 	
	public function getPdeTipoNotaDebitoWsFeParamTipoComprobantes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeTipoNotaDebitoWsFeParamTipoComprobante::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeTipoNotaDebitoWsFeParamTipoComprobante::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeTipoNotaDebitoWsFeParamTipoComprobante::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_PDE_TIPO_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeTipoNotaDebitoWsFeParamTipoComprobante::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdetiponotadebitowsfeparamtipocomprobantes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdetiponotadebitowsfeparamtipocomprobante = PdeTipoNotaDebitoWsFeParamTipoComprobante::hidratarObjeto($fila);			
                $pdetiponotadebitowsfeparamtipocomprobantes[] = $pdetiponotadebitowsfeparamtipocomprobante;
            }

            return $pdetiponotadebitowsfeparamtipocomprobantes;
	}	
	

	/* Método getPdeTipoNotaDebitoWsFeParamTipoComprobantesBloque para MasInfo */ 	
	public function getPdeTipoNotaDebitoWsFeParamTipoComprobantesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeTipoNotaDebitoWsFeParamTipoComprobantes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeTipoNotaDebitoWsFeParamTipoComprobantes Habilitados */ 	
	public function getPdeTipoNotaDebitoWsFeParamTipoComprobantesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeTipoNotaDebitoWsFeParamTipoComprobantes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeTipoNotaDebitoWsFeParamTipoComprobante */ 	
	public function getPdeTipoNotaDebitoWsFeParamTipoComprobante($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeTipoNotaDebitoWsFeParamTipoComprobantes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeTipoNotaDebitoWsFeParamTipoComprobante relacionadas */ 	
	public function deletePdeTipoNotaDebitoWsFeParamTipoComprobantes(){
            $obs = $this->getPdeTipoNotaDebitoWsFeParamTipoComprobantes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeTipoNotaDebitoWsFeParamTipoComprobantesCmb() PdeTipoNotaDebitoWsFeParamTipoComprobante relacionadas */ 	
	public function getPdeTipoNotaDebitoWsFeParamTipoComprobantesCmb(){
            $c = new Criterio();
            $c->add(PdeTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_PDE_TIPO_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTipoNotaDebitoWsFeParamTipoComprobante::GEN_TABLA);
            $c->setCriterios();

            $os = PdeTipoNotaDebitoWsFeParamTipoComprobante::getPdeTipoNotaDebitoWsFeParamTipoComprobantesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener WsFeParamTipoComprobantes (Coleccion) relacionados a traves de PdeTipoNotaDebitoWsFeParamTipoComprobante */ 	
	public function getWsFeParamTipoComprobantesXPdeTipoNotaDebitoWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(WsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_PDE_TIPO_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeParamTipoComprobante::GEN_TABLA);
            $c->addRealJoin(PdeTipoNotaDebitoWsFeParamTipoComprobante::GEN_TABLA, PdeTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, WsFeParamTipoComprobante::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = WsFeParamTipoComprobante::getWsFeParamTipoComprobantes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de WsFeParamTipoComprobantes relacionados a traves de PdeTipoNotaDebitoWsFeParamTipoComprobante */ 	
	public function getCantidadWsFeParamTipoComprobantesXPdeTipoNotaDebitoWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(WsFeParamTipoComprobante::GEN_ATTR_ID);
            if($estado){
                $c->add(WsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_PDE_TIPO_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeParamTipoComprobante::GEN_TABLA);
            $c->addRealJoin(PdeTipoNotaDebitoWsFeParamTipoComprobante::GEN_TABLA, PdeTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, WsFeParamTipoComprobante::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = WsFeParamTipoComprobante::getWsFeParamTipoComprobantes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener WsFeParamTipoComprobante (Objeto) relacionado a traves de PdeTipoNotaDebitoWsFeParamTipoComprobante */ 	
	public function getWsFeParamTipoComprobanteXPdeTipoNotaDebitoWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getWsFeParamTipoComprobantesXPdeTipoNotaDebitoWsFeParamTipoComprobante($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeNotaDebitos */ 	
	public function getPdeNotaDebitos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeNotaDebito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeNotaDebito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeNotaDebito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeNotaDebito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeNotaDebito::GEN_ATTR_PDE_TIPO_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeNotaDebito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeNotaDebito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdenotadebitos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdenotadebito = PdeNotaDebito::hidratarObjeto($fila);			
                $pdenotadebitos[] = $pdenotadebito;
            }

            return $pdenotadebitos;
	}	
	

	/* Método getPdeNotaDebitosBloque para MasInfo */ 	
	public function getPdeNotaDebitosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeNotaDebitos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeNotaDebitos Habilitados */ 	
	public function getPdeNotaDebitosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeNotaDebitos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeNotaDebito */ 	
	public function getPdeNotaDebito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeNotaDebitos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeNotaDebito relacionadas */ 	
	public function deletePdeNotaDebitos(){
            $obs = $this->getPdeNotaDebitos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeNotaDebitosCmb() PdeNotaDebito relacionadas */ 	
	public function getPdeNotaDebitosCmb(){
            $c = new Criterio();
            $c->add(PdeNotaDebito::GEN_ATTR_PDE_TIPO_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaDebito::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaDebito::getPdeNotaDebitosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvProveedors (Coleccion) relacionados a traves de PdeNotaDebito */ 	
	public function getPrvProveedorsXPdeNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaDebito::GEN_ATTR_PDE_TIPO_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeNotaDebito::GEN_TABLA, PdeNotaDebito::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvProveedors relacionados a traves de PdeNotaDebito */ 	
	public function getCantidadPrvProveedorsXPdeNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvProveedor::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaDebito::GEN_ATTR_PDE_TIPO_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeNotaDebito::GEN_TABLA, PdeNotaDebito::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvProveedor (Objeto) relacionado a traves de PdeNotaDebito */ 	
	public function getPrvProveedorXPdeNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvProveedorsXPdeNotaDebito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los GralCondicionIvas asignados a PdeTipoNotaDebito */ 	
	public function getGralCondicionIvaPdeTipoNotaDebitosId(){
            $ids = array();
            foreach($this->getGralCondicionIvaPdeTipoNotaDebitos() as $o){
            
                $ids[] = $o->getGralCondicionIvaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos GralCondicionIvas asignados al PdeTipoNotaDebito */ 	
	public function setGralCondicionIvaPdeTipoNotaDebitos($ids){
            $this->deleteGralCondicionIvaPdeTipoNotaDebitos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new GralCondicionIvaPdeTipoNotaDebito();
                    $o->setGralCondicionIvaId($id);
                    $o->setPdeTipoNotaDebitoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion GralCondicionIva en el alta de PdeTipoNotaDebito */ 	
	public function getAltaMostrarBloqueRelacionGralCondicionIvaPdeTipoNotaDebito(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los WsFeParamTipoComprobantes asignados a PdeTipoNotaDebito */ 	
	public function getPdeTipoNotaDebitoWsFeParamTipoComprobantesId(){
            $ids = array();
            foreach($this->getPdeTipoNotaDebitoWsFeParamTipoComprobantes() as $o){
            
                $ids[] = $o->getWsFeParamTipoComprobanteId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos WsFeParamTipoComprobantes asignados al PdeTipoNotaDebito */ 	
	public function setPdeTipoNotaDebitoWsFeParamTipoComprobantes($ids){
            $this->deletePdeTipoNotaDebitoWsFeParamTipoComprobantes();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new PdeTipoNotaDebitoWsFeParamTipoComprobante();
                    $o->setWsFeParamTipoComprobanteId($id);
                    $o->setPdeTipoNotaDebitoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion WsFeParamTipoComprobante en el alta de PdeTipoNotaDebito */ 	
	public function getAltaMostrarBloqueRelacionPdeTipoNotaDebitoWsFeParamTipoComprobante(){
            return true;
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM pde_tipo_nota_debito'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'pde_tipo_nota_debito';");
            
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

            $obs = self::getPdeTipoNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeTipoNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeTipoNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeTipoNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo_min' */ 	
	static function getOxCodigoMin($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_MIN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeTipoNotaDebitos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'codigo_min' */ 	
	static function getOsxCodigoMin($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_MIN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeTipoNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeTipoNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeTipoNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'informa' */ 	
	static function getOxInforma($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INFORMA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeTipoNotaDebitos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'informa' */ 	
	static function getOsxInforma($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INFORMA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeTipoNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeTipoNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeTipoNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeTipoNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeTipoNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeTipoNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeTipoNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeTipoNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeTipoNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeTipoNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeTipoNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeTipoNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeTipoNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeTipoNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeTipoNotaDebitos(null, $criterio);
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

            $obs = self::getPdeTipoNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeTipoNotaDebitos($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'pde_tipo_nota_debito_adm');
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
                $c->addTabla(PdeTipoNotaDebito::GEN_TABLA);
                $c->addOrden(PdeTipoNotaDebito::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $pde_tipo_nota_debitos = PdeTipoNotaDebito::getPdeTipoNotaDebitos(null, $c);

                $arr = array();
                foreach($pde_tipo_nota_debitos as $pde_tipo_nota_debito){
                    $descripcion = $pde_tipo_nota_debito->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>