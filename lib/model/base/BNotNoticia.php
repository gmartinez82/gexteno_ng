<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BNotNoticia
{ 
	
	const SES_PAGINACION = 'adm_notnoticia_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_notnoticia_paginas_registros';
	const SES_CRITERIOS = 'adm_notnoticia_criterios';
	
	const GEN_CLASE = 'NotNoticia';
	const GEN_TABLA = 'not_noticia';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BNotNoticia */ 
	const GEN_ATTR_ID = 'not_noticia.id';
	const GEN_ATTR_DESCRIPCION = 'not_noticia.descripcion';
	const GEN_ATTR_NOT_CATEGORIA_ID = 'not_noticia.not_categoria_id';
	const GEN_ATTR_CODIGO = 'not_noticia.codigo';
	const GEN_ATTR_COPETE = 'not_noticia.copete';
	const GEN_ATTR_CUERPO = 'not_noticia.cuerpo';
	const GEN_ATTR_FECHA = 'not_noticia.fecha';
	const GEN_ATTR_DESTACADO = 'not_noticia.destacado';
	const GEN_ATTR_OBSERVACION = 'not_noticia.observacion';
	const GEN_ATTR_ORDEN = 'not_noticia.orden';
	const GEN_ATTR_ESTADO = 'not_noticia.estado';
	const GEN_ATTR_CREADO = 'not_noticia.creado';
	const GEN_ATTR_CREADO_POR = 'not_noticia.creado_por';
	const GEN_ATTR_MODIFICADO = 'not_noticia.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'not_noticia.modificado_por';

	/* Constantes de Atributos Min de BNotNoticia */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_NOT_CATEGORIA_ID = 'not_categoria_id';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_COPETE = 'copete';
	const GEN_ATTR_MIN_CUERPO = 'cuerpo';
	const GEN_ATTR_MIN_FECHA = 'fecha';
	const GEN_ATTR_MIN_DESTACADO = 'destacado';
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
	

	/* Atributos de BNotNoticia */ 
	private $id;
	private $descripcion;
	private $not_categoria_id;
	private $codigo;
	private $copete;
	private $cuerpo;
	private $fecha;
	private $destacado;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BNotNoticia */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getNotCategoriaId(){ if(isset($this->not_categoria_id)){ return $this->not_categoria_id; }else{ return 'null'; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getCopete(){ if(isset($this->copete)){ return $this->copete; }else{ return ''; } }
	public function getCuerpo(){ if(isset($this->cuerpo)){ return $this->cuerpo; }else{ return ''; } }
	public function getFecha(){ if(isset($this->fecha)){ return $this->fecha; }else{ return ''; } }
	public function getDestacado(){ if(isset($this->destacado)){ return $this->destacado; }else{ return 0; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BNotNoticia */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_NOT_CATEGORIA_ID."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_COPETE."
				, ".self::GEN_ATTR_CUERPO."
				, ".self::GEN_ATTR_FECHA."
				, ".self::GEN_ATTR_DESTACADO."
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
				$this->setNotCategoriaId($fila[self::GEN_ATTR_MIN_NOT_CATEGORIA_ID]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setCopete($fila[self::GEN_ATTR_MIN_COPETE]);
				$this->setCuerpo($fila[self::GEN_ATTR_MIN_CUERPO]);
				$this->setFecha($fila[self::GEN_ATTR_MIN_FECHA]);
				$this->setDestacado($fila[self::GEN_ATTR_MIN_DESTACADO]);
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
	public function setNotCategoriaId($v){ $this->not_categoria_id = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setCopete($v){ $this->copete = $v; }
	public function setCuerpo($v){ $this->cuerpo = $v; }
	public function setFecha($v){ $this->fecha = $v; }
	public function setDestacado($v){ $this->destacado = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new NotNoticia();
            $o->setId($fila[NotNoticia::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setNotCategoriaId($fila[self::GEN_ATTR_MIN_NOT_CATEGORIA_ID]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setCopete($fila[self::GEN_ATTR_MIN_COPETE]);
			$o->setCuerpo($fila[self::GEN_ATTR_MIN_CUERPO]);
			$o->setFecha($fila[self::GEN_ATTR_MIN_FECHA]);
			$o->setDestacado($fila[self::GEN_ATTR_MIN_DESTACADO]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BNotNoticia */ 	
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

	/* Cambia el estado de BNotNoticia */ 	
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

	/* Save de BNotNoticia */ 	
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
						, ".self::GEN_ATTR_MIN_NOT_CATEGORIA_ID."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_COPETE."
						, ".self::GEN_ATTR_MIN_CUERPO."
						, ".self::GEN_ATTR_MIN_FECHA."
						, ".self::GEN_ATTR_MIN_DESTACADO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('not_noticia_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getNotCategoriaId()."
						, '".$this->getCodigo()."'
						, '".$this->getCopete()."'
						, '".$this->getCuerpo()."'
						, '".$this->getFecha()."'
						, ".$this->getDestacado()."
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('not_noticia_seq')";
            
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
                 
				 ".NotNoticia::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_NOT_CATEGORIA_ID." = ".$this->getNotCategoriaId()."
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_COPETE." = '".$this->getCopete()."'
						, ".self::GEN_ATTR_MIN_CUERPO." = '".$this->getCuerpo()."'
						, ".self::GEN_ATTR_MIN_FECHA." = '".$this->getFecha()."'
						, ".self::GEN_ATTR_MIN_DESTACADO." = ".$this->getDestacado()."
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
						, ".self::GEN_ATTR_MIN_NOT_CATEGORIA_ID."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_COPETE."
						, ".self::GEN_ATTR_MIN_CUERPO."
						, ".self::GEN_ATTR_MIN_FECHA."
						, ".self::GEN_ATTR_MIN_DESTACADO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getDescripcion()."'
						, ".$this->getNotCategoriaId()."
						, '".$this->getCodigo()."'
						, '".$this->getCopete()."'
						, '".$this->getCuerpo()."'
						, '".$this->getFecha()."'
						, ".$this->getDestacado()."
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
                     
				 ".NotNoticia::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_NOT_CATEGORIA_ID." = ".$this->getNotCategoriaId()."
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_COPETE." = '".$this->getCopete()."'
						, ".self::GEN_ATTR_MIN_CUERPO." = '".$this->getCuerpo()."'
						, ".self::GEN_ATTR_MIN_FECHA." = '".$this->getFecha()."'
						, ".self::GEN_ATTR_MIN_DESTACADO." = ".$this->getDestacado()."
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
            $o = new NotNoticia();
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

	/* Delete de BNotNoticia */ 	
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
	
            // se elimina la coleccion de NotNoticiaImagens relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(NotNoticiaImagen::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getNotNoticiaImagens(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de NotNoticiaArchivos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(NotNoticiaArchivo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getNotNoticiaArchivos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de NotVideos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(NotVideo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getNotVideos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de NotRelacionadas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(NotRelacionada::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getNotRelacionadas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de NotNoticiaLeidas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(NotNoticiaLeida::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getNotNoticiaLeidas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarNotNoticia(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getNotNoticias($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = NotNoticia::setAplicarFiltrosDeAlcance($criterio);

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
	
		$notnoticias = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $notnoticia = new NotNoticia();
                    $notnoticia->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $notnoticia->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$notnoticia->setNotCategoriaId($fila[self::GEN_ATTR_MIN_NOT_CATEGORIA_ID]);
			$notnoticia->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$notnoticia->setCopete($fila[self::GEN_ATTR_MIN_COPETE]);
			$notnoticia->setCuerpo($fila[self::GEN_ATTR_MIN_CUERPO]);
			$notnoticia->setFecha($fila[self::GEN_ATTR_MIN_FECHA]);
			$notnoticia->setDestacado($fila[self::GEN_ATTR_MIN_DESTACADO]);
			$notnoticia->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$notnoticia->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$notnoticia->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$notnoticia->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$notnoticia->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$notnoticia->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$notnoticia->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $notnoticias[] = $notnoticia;
		}
		
		return $notnoticias;
	}	
	

	/* Método getNotNoticias Habilitados */ 	
	static function getNotNoticiasHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return NotNoticia::getNotNoticias($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getNotNoticias para listado de Backend */ 	
	static function getNotNoticiasDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return NotNoticia::getNotNoticias($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getNotNoticiasCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = NotNoticia::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = NotNoticia::getNotNoticias($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getNotNoticias filtrado para select */ 	
	static function getNotNoticiasCmbF($paginador = null, $criterio = null){
            $col = NotNoticia::getNotNoticias($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getNotNoticias filtrado por una coleccion de objetos foraneos de NotCategoria */ 	
	static function getNotNoticiasXNotCategorias($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(NotNoticia::GEN_ATTR_NOT_CATEGORIA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(NotNoticia::GEN_TABLA);
            $c->addOrden(NotNoticia::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = NotNoticia::getNotNoticias($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getNotCategoriaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'not_noticia_adm.php';
            $url_gestion = 'not_noticia_gestion.php';
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
	

	/* Metodo getNotNoticiaImagens */ 	
	public function getNotNoticiaImagens($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(NotNoticiaImagen::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(NotNoticiaImagen::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(NotNoticiaImagen::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(NotNoticiaImagen::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(NotNoticiaImagen::GEN_ATTR_NOT_NOTICIA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(NotNoticiaImagen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(NotNoticiaImagen::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".NotNoticiaImagen::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $notnoticiaimagens = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $notnoticiaimagen = NotNoticiaImagen::hidratarObjeto($fila);			
                $notnoticiaimagens[] = $notnoticiaimagen;
            }

            return $notnoticiaimagens;
	}	
	

	/* Método getNotNoticiaImagensBloque para MasInfo */ 	
	public function getNotNoticiaImagensParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getNotNoticiaImagens($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getNotNoticiaImagens Habilitados */ 	
	public function getNotNoticiaImagensHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getNotNoticiaImagens($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getNotNoticiaImagen */ 	
	public function getNotNoticiaImagen($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getNotNoticiaImagens($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de NotNoticiaImagen relacionadas */ 	
	public function deleteNotNoticiaImagens(){
            $obs = $this->getNotNoticiaImagens();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getNotNoticiaImagensCmb() NotNoticiaImagen relacionadas */ 	
	public function getNotNoticiaImagensCmb(){
            $c = new Criterio();
            $c->add(NotNoticiaImagen::GEN_ATTR_NOT_NOTICIA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(NotNoticiaImagen::GEN_TABLA);
            $c->setCriterios();

            $os = NotNoticiaImagen::getNotNoticiaImagensCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener NotTipoImagens (Coleccion) relacionados a traves de NotNoticiaImagen */ 	
	public function getNotTipoImagensXNotNoticiaImagen($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(NotTipoImagen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(NotNoticiaImagen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(NotNoticiaImagen::GEN_ATTR_NOT_NOTICIA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(NotTipoImagen::GEN_TABLA);
            $c->addRealJoin(NotNoticiaImagen::GEN_TABLA, NotNoticiaImagen::GEN_ATTR_NOT_TIPO_IMAGEN_ID, NotTipoImagen::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = NotTipoImagen::getNotTipoImagens($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de NotTipoImagens relacionados a traves de NotNoticiaImagen */ 	
	public function getCantidadNotTipoImagensXNotNoticiaImagen($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(NotTipoImagen::GEN_ATTR_ID);
            if($estado){
                $c->add(NotTipoImagen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(NotNoticiaImagen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(NotNoticiaImagen::GEN_ATTR_NOT_NOTICIA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(NotTipoImagen::GEN_TABLA);
            $c->addRealJoin(NotNoticiaImagen::GEN_TABLA, NotNoticiaImagen::GEN_ATTR_NOT_TIPO_IMAGEN_ID, NotTipoImagen::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = NotTipoImagen::getNotTipoImagens($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener NotTipoImagen (Objeto) relacionado a traves de NotNoticiaImagen */ 	
	public function getNotTipoImagenXNotNoticiaImagen($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getNotTipoImagensXNotNoticiaImagen($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getNotNoticiaArchivos */ 	
	public function getNotNoticiaArchivos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(NotNoticiaArchivo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(NotNoticiaArchivo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(NotNoticiaArchivo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(NotNoticiaArchivo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(NotNoticiaArchivo::GEN_ATTR_NOT_NOTICIA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(NotNoticiaArchivo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(NotNoticiaArchivo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".NotNoticiaArchivo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $notnoticiaarchivos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $notnoticiaarchivo = NotNoticiaArchivo::hidratarObjeto($fila);			
                $notnoticiaarchivos[] = $notnoticiaarchivo;
            }

            return $notnoticiaarchivos;
	}	
	

	/* Método getNotNoticiaArchivosBloque para MasInfo */ 	
	public function getNotNoticiaArchivosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getNotNoticiaArchivos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getNotNoticiaArchivos Habilitados */ 	
	public function getNotNoticiaArchivosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getNotNoticiaArchivos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getNotNoticiaArchivo */ 	
	public function getNotNoticiaArchivo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getNotNoticiaArchivos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de NotNoticiaArchivo relacionadas */ 	
	public function deleteNotNoticiaArchivos(){
            $obs = $this->getNotNoticiaArchivos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getNotNoticiaArchivosCmb() NotNoticiaArchivo relacionadas */ 	
	public function getNotNoticiaArchivosCmb(){
            $c = new Criterio();
            $c->add(NotNoticiaArchivo::GEN_ATTR_NOT_NOTICIA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(NotNoticiaArchivo::GEN_TABLA);
            $c->setCriterios();

            $os = NotNoticiaArchivo::getNotNoticiaArchivosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener NotTipoArchivos (Coleccion) relacionados a traves de NotNoticiaArchivo */ 	
	public function getNotTipoArchivosXNotNoticiaArchivo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(NotTipoArchivo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(NotNoticiaArchivo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(NotNoticiaArchivo::GEN_ATTR_NOT_NOTICIA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(NotTipoArchivo::GEN_TABLA);
            $c->addRealJoin(NotNoticiaArchivo::GEN_TABLA, NotNoticiaArchivo::GEN_ATTR_NOT_TIPO_ARCHIVO_ID, NotTipoArchivo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = NotTipoArchivo::getNotTipoArchivos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de NotTipoArchivos relacionados a traves de NotNoticiaArchivo */ 	
	public function getCantidadNotTipoArchivosXNotNoticiaArchivo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(NotTipoArchivo::GEN_ATTR_ID);
            if($estado){
                $c->add(NotTipoArchivo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(NotNoticiaArchivo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(NotNoticiaArchivo::GEN_ATTR_NOT_NOTICIA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(NotTipoArchivo::GEN_TABLA);
            $c->addRealJoin(NotNoticiaArchivo::GEN_TABLA, NotNoticiaArchivo::GEN_ATTR_NOT_TIPO_ARCHIVO_ID, NotTipoArchivo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = NotTipoArchivo::getNotTipoArchivos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener NotTipoArchivo (Objeto) relacionado a traves de NotNoticiaArchivo */ 	
	public function getNotTipoArchivoXNotNoticiaArchivo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getNotTipoArchivosXNotNoticiaArchivo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getNotVideos */ 	
	public function getNotVideos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(NotVideo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(NotVideo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(NotVideo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(NotVideo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(NotVideo::GEN_ATTR_NOT_NOTICIA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(NotVideo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(NotVideo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".NotVideo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $notvideos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $notvideo = NotVideo::hidratarObjeto($fila);			
                $notvideos[] = $notvideo;
            }

            return $notvideos;
	}	
	

	/* Método getNotVideosBloque para MasInfo */ 	
	public function getNotVideosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getNotVideos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getNotVideos Habilitados */ 	
	public function getNotVideosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getNotVideos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getNotVideo */ 	
	public function getNotVideo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getNotVideos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de NotVideo relacionadas */ 	
	public function deleteNotVideos(){
            $obs = $this->getNotVideos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getNotVideosCmb() NotVideo relacionadas */ 	
	public function getNotVideosCmb(){
            $c = new Criterio();
            $c->add(NotVideo::GEN_ATTR_NOT_NOTICIA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(NotVideo::GEN_TABLA);
            $c->setCriterios();

            $os = NotVideo::getNotVideosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener NotTipoVideos (Coleccion) relacionados a traves de NotVideo */ 	
	public function getNotTipoVideosXNotVideo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(NotTipoVideo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(NotVideo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(NotVideo::GEN_ATTR_NOT_NOTICIA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(NotTipoVideo::GEN_TABLA);
            $c->addRealJoin(NotVideo::GEN_TABLA, NotVideo::GEN_ATTR_NOT_TIPO_VIDEO_ID, NotTipoVideo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = NotTipoVideo::getNotTipoVideos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de NotTipoVideos relacionados a traves de NotVideo */ 	
	public function getCantidadNotTipoVideosXNotVideo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(NotTipoVideo::GEN_ATTR_ID);
            if($estado){
                $c->add(NotTipoVideo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(NotVideo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(NotVideo::GEN_ATTR_NOT_NOTICIA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(NotTipoVideo::GEN_TABLA);
            $c->addRealJoin(NotVideo::GEN_TABLA, NotVideo::GEN_ATTR_NOT_TIPO_VIDEO_ID, NotTipoVideo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = NotTipoVideo::getNotTipoVideos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener NotTipoVideo (Objeto) relacionado a traves de NotVideo */ 	
	public function getNotTipoVideoXNotVideo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getNotTipoVideosXNotVideo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getNotRelacionadas */ 	
	public function getNotRelacionadas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(NotRelacionada::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(NotRelacionada::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(NotRelacionada::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(NotRelacionada::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(NotRelacionada::GEN_ATTR_NOT_NOTICIA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(NotRelacionada::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(NotRelacionada::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".NotRelacionada::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $notrelacionadas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $notrelacionada = NotRelacionada::hidratarObjeto($fila);			
                $notrelacionadas[] = $notrelacionada;
            }

            return $notrelacionadas;
	}	
	

	/* Método getNotRelacionadasBloque para MasInfo */ 	
	public function getNotRelacionadasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getNotRelacionadas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getNotRelacionadas Habilitados */ 	
	public function getNotRelacionadasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getNotRelacionadas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getNotRelacionada */ 	
	public function getNotRelacionada($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getNotRelacionadas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de NotRelacionada relacionadas */ 	
	public function deleteNotRelacionadas(){
            $obs = $this->getNotRelacionadas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getNotRelacionadasCmb() NotRelacionada relacionadas */ 	
	public function getNotRelacionadasCmb(){
            $c = new Criterio();
            $c->add(NotRelacionada::GEN_ATTR_NOT_NOTICIA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(NotRelacionada::GEN_TABLA);
            $c->setCriterios();

            $os = NotRelacionada::getNotRelacionadasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener NotNoticias (Coleccion) relacionados a traves de NotRelacionada */ 	
	public function getNotNoticiasXNotRelacionada($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(NotNoticia::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(NotRelacionada::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(NotRelacionada::GEN_ATTR_NOT_NOTICIA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(NotNoticia::GEN_TABLA);
            $c->addRealJoin(NotRelacionada::GEN_TABLA, NotRelacionada::GEN_ATTR_NOT_NOTICIA_RELACIONADA, NotNoticia::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = NotNoticia::getNotNoticias($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de NotNoticias relacionados a traves de NotRelacionada */ 	
	public function getCantidadNotNoticiasXNotRelacionada($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(NotNoticia::GEN_ATTR_ID);
            if($estado){
                $c->add(NotNoticia::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(NotRelacionada::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(NotRelacionada::GEN_ATTR_NOT_NOTICIA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(NotNoticia::GEN_TABLA);
            $c->addRealJoin(NotRelacionada::GEN_TABLA, NotRelacionada::GEN_ATTR_NOT_NOTICIA_RELACIONADA, NotNoticia::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = NotNoticia::getNotNoticias($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener NotNoticia (Objeto) relacionado a traves de NotRelacionada */ 	
	public function getNotNoticiaXNotRelacionada($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getNotNoticiasXNotRelacionada($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getNotNoticiaLeidas */ 	
	public function getNotNoticiaLeidas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(NotNoticiaLeida::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(NotNoticiaLeida::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(NotNoticiaLeida::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(NotNoticiaLeida::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(NotNoticiaLeida::GEN_ATTR_NOT_NOTICIA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(NotNoticiaLeida::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(NotNoticiaLeida::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".NotNoticiaLeida::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $notnoticialeidas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $notnoticialeida = NotNoticiaLeida::hidratarObjeto($fila);			
                $notnoticialeidas[] = $notnoticialeida;
            }

            return $notnoticialeidas;
	}	
	

	/* Método getNotNoticiaLeidasBloque para MasInfo */ 	
	public function getNotNoticiaLeidasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getNotNoticiaLeidas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getNotNoticiaLeidas Habilitados */ 	
	public function getNotNoticiaLeidasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getNotNoticiaLeidas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getNotNoticiaLeida */ 	
	public function getNotNoticiaLeida($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getNotNoticiaLeidas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de NotNoticiaLeida relacionadas */ 	
	public function deleteNotNoticiaLeidas(){
            $obs = $this->getNotNoticiaLeidas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getNotNoticiaLeidasCmb() NotNoticiaLeida relacionadas */ 	
	public function getNotNoticiaLeidasCmb(){
            $c = new Criterio();
            $c->add(NotNoticiaLeida::GEN_ATTR_NOT_NOTICIA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(NotNoticiaLeida::GEN_TABLA);
            $c->setCriterios();

            $os = NotNoticiaLeida::getNotNoticiaLeidasCmbF(null, $c);
            return $os;
	}

	/* Metodo que retorna una coleccion de IDs de los NotNoticias asignados a NotNoticia */ 	
	public function getNotRelacionadasId(){
            $ids = array();
            foreach($this->getNotRelacionadas() as $o){
            
                $ids[] = $o->getNotNoticiaRelacionada();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos NotNoticias asignados al NotNoticia */ 	
	public function setNotRelacionadas($ids){
            $this->deleteNotRelacionadas();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new NotRelacionada();
                    $o->setNotNoticiaId($id);
                    $o->setNotNoticiaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion NotNoticia en el alta de NotNoticia */ 	
	public function getAltaMostrarBloqueRelacionNotRelacionada(){
            return true;
	}
	

	/* Metodo que retorna el NotCategoria (Clave Foranea) */ 	
    public function getNotCategoria(){
        $o = new NotCategoria();
        $o->setId($this->getNotCategoriaId());
        return $o;			
    }

	/* Metodo que retorna el NotCategoria (Clave Foranea) en Array */ 	
    public function getNotCategoriaEnArray(&$arr_os){
        if($this->getNotCategoriaId() != 'null'){
            if(isset($arr_os[$this->getNotCategoriaId()])){
                $o = $arr_os[$this->getNotCategoriaId()];
            }else{
                $o = NotCategoria::getOxId($this->getNotCategoriaId());
                if($o){
                    $arr_os[$this->getNotCategoriaId()] = $o;
                }
            }
        }else{
            $o = new NotCategoria();
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
            		
        if($contexto_solicitante != NotCategoria::GEN_CLASE){
            if($this->getNotCategoria()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(NotCategoria::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getNotCategoria()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM not_noticia'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'not_noticia';");
            
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

            $obs = self::getNotNoticias($paginador, $criterio);
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

            $obs = self::getNotNoticias(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getNotNoticias($paginador, $criterio);
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

            $obs = self::getNotNoticias(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'not_categoria_id' */ 	
	static function getOxNotCategoriaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOT_CATEGORIA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getNotNoticias($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'not_categoria_id' */ 	
	static function getOsxNotCategoriaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOT_CATEGORIA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getNotNoticias(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getNotNoticias($paginador, $criterio);
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

            $obs = self::getNotNoticias(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'copete' */ 	
	static function getOxCopete($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_COPETE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getNotNoticias($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'copete' */ 	
	static function getOsxCopete($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_COPETE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getNotNoticias(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cuerpo' */ 	
	static function getOxCuerpo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUERPO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getNotNoticias($paginador, $criterio);
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

            $obs = self::getNotNoticias(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha' */ 	
	static function getOxFecha($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getNotNoticias($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha' */ 	
	static function getOsxFecha($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getNotNoticias(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'destacado' */ 	
	static function getOxDestacado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESTACADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getNotNoticias($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'destacado' */ 	
	static function getOsxDestacado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESTACADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getNotNoticias(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getNotNoticias($paginador, $criterio);
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

            $obs = self::getNotNoticias(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getNotNoticias($paginador, $criterio);
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

            $obs = self::getNotNoticias(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getNotNoticias($paginador, $criterio);
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

            $obs = self::getNotNoticias(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getNotNoticias($paginador, $criterio);
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

            $obs = self::getNotNoticias(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getNotNoticias($paginador, $criterio);
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

            $obs = self::getNotNoticias(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getNotNoticias($paginador, $criterio);
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

            $obs = self::getNotNoticias(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getNotNoticias($paginador, $criterio);
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

            $obs = self::getNotNoticias(null, $criterio);
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

            $obs = self::getNotNoticias($paginador, $criterio);
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

            $obs = self::getNotNoticias($paginador, $criterio);
            return $obs;
	}

	/* retorna el nombre de archivo de la imagen cuando no hay imagen */ 	
	public function getPathImagenNoImagen(){
            return Gral::getPath('path_http').'imgs/no-imagen.jpg';
	}

	/* retorna el nombre de archivo de la imagen */ 	
	public function getPathImagenPrincipal($thumb = false){
            $c = new Criterio();
            $c->add('estado', 1, Criterio::IGUAL);
            $c->addTabla(NotNoticiaImagen::GEN_TABLA);
            $c->addOrden(NotNoticiaImagen::GEN_ATTR_ORDEN, 'asc');
            $c->setCriterios();
		
            $imagen_principal = $this->getNotNoticiaImagen($c);
            if($imagen_principal){
		return $imagen_principal->getPathImagen($thumb);
            }
            return $this->getPathImagenNoImagen();
	}

	/* retorna la imagen principal */ 	
	public function getNotNoticiaImagenPrincipal(){
            $c = new Criterio();
            $c->add('estado', 1, Criterio::IGUAL);
            $c->addTabla(NotNoticiaImagen::GEN_TABLA);
            $c->addOrden(NotNoticiaImagen::GEN_ATTR_ORDEN, 'asc');
            $c->setCriterios();

            $imagens = $this->getNotNoticiaImagens(null, $c);
            foreach($imagens as $imagen){
                return $imagen;
            }
            return false;
	}

	/* retorna las imagenes secundarias (no incluye la principal) */ 	
	public function getNotNoticiaImagensSecundarias($imagen_principal = false){
            $arr_imagens = array();
            if(!$imagen_principal){
            $imagen_principal = $this->getNotNoticiaImagenPrincipal();
            }

            $c = new Criterio();
            if($imagen_principal){
                $c->add('id', $imagen_principal->getId(), Criterio::DISTINTO);
            }
            $c->add(NotNoticiaImagen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            $c->addTabla(NotNoticiaImagen::GEN_TABLA);
            $c->addOrden(NotNoticiaImagen::GEN_ATTR_ORDEN, 'asc');
            $c->setCriterios();

            $imagens = $this->getNotNoticiaImagens(null, $c);
            return $imagens;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'not_noticia_adm');
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

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha' */ 	
	public function getFechaDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFecha(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaDiferenciaDias();
        
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

	/* retorna coleccion para mostrar en bloque vinculos 'modificado_por' */ 	
	public function getNotVideosParaBloqueVinculo($palabra, $pagina){
            $c = new Criterio();

            $c->addInicioSubconsulta();
            $c->add(NotVideo::GEN_ATTR_NOT_NOTICIA_ID, $this->getId(), Criterio::IGUAL, false, '');
            $c->addFinSubconsulta();

            $c->addInicioSubconsulta();
            $c->add(NotVideo::GEN_ATTR_ID, '%'.$palabra.'%', Criterio::LIKE);
            
                $c->add(NotVideo::GEN_ATTR_DESCRIPCION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(NotVideo::GEN_ATTR_CODIGO, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(NotVideo::GEN_ATTR_OBSERVACION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
            $c->addFinSubconsulta();

            $c->addTabla(NotVideo::GEN_TABLA);
            $c->addOrden('2');
            $c->setCriterios();

            $paginador = new Paginador(50, $pagina);

            $not_videos = NotVideo::getNotVideos($paginador, $c);

            $arr['COLECCION'] = $not_videos;
            $arr['PAGINADOR'] = $paginador;
            return $arr;
	}
	
            /**
             * Metodo que retorna una coleccion de descripciones unificada para usar en autosuggest
             */
            static function getArrDescripcionsUnificado(){
                $c = new Criterio();
                $c->addTabla(NotNoticia::GEN_TABLA);
                $c->addOrden(NotNoticia::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $not_noticias = NotNoticia::getNotNoticias(null, $c);

                $arr = array();
                foreach($not_noticias as $not_noticia){
                    $descripcion = $not_noticia->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>