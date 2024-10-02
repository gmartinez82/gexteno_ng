<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BVtaVendedorValoracionTipoItem
{ 
	
	const SES_PAGINACION = 'adm_vtavendedorvaloraciontipoitem_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_vtavendedorvaloraciontipoitem_paginas_registros';
	const SES_CRITERIOS = 'adm_vtavendedorvaloraciontipoitem_criterios';
	
	const GEN_CLASE = 'VtaVendedorValoracionTipoItem';
	const GEN_TABLA = 'vta_vendedor_valoracion_tipo_item';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BVtaVendedorValoracionTipoItem */ 
	const GEN_ATTR_ID = 'vta_vendedor_valoracion_tipo_item.id';
	const GEN_ATTR_DESCRIPCION = 'vta_vendedor_valoracion_tipo_item.descripcion';
	const GEN_ATTR_DESCRIPCION_CORTA = 'vta_vendedor_valoracion_tipo_item.descripcion_corta';
	const GEN_ATTR_DESCRIPCION_PUBLICA = 'vta_vendedor_valoracion_tipo_item.descripcion_publica';
	const GEN_ATTR_COLOR = 'vta_vendedor_valoracion_tipo_item.color';
	const GEN_ATTR_COLOR_SECUNDARIO = 'vta_vendedor_valoracion_tipo_item.color_secundario';
	const GEN_ATTR_CODIGO = 'vta_vendedor_valoracion_tipo_item.codigo';
	const GEN_ATTR_OBSERVACION = 'vta_vendedor_valoracion_tipo_item.observacion';
	const GEN_ATTR_ORDEN = 'vta_vendedor_valoracion_tipo_item.orden';
	const GEN_ATTR_ESTADO = 'vta_vendedor_valoracion_tipo_item.estado';
	const GEN_ATTR_CREADO = 'vta_vendedor_valoracion_tipo_item.creado';
	const GEN_ATTR_CREADO_POR = 'vta_vendedor_valoracion_tipo_item.creado_por';
	const GEN_ATTR_MODIFICADO = 'vta_vendedor_valoracion_tipo_item.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'vta_vendedor_valoracion_tipo_item.modificado_por';

	/* Constantes de Atributos Min de BVtaVendedorValoracionTipoItem */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_DESCRIPCION_CORTA = 'descripcion_corta';
	const GEN_ATTR_MIN_DESCRIPCION_PUBLICA = 'descripcion_publica';
	const GEN_ATTR_MIN_COLOR = 'color';
	const GEN_ATTR_MIN_COLOR_SECUNDARIO = 'color_secundario';
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
	

	/* Atributos de BVtaVendedorValoracionTipoItem */ 
	private $id;
	private $descripcion;
	private $descripcion_corta;
	private $descripcion_publica;
	private $color;
	private $color_secundario;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BVtaVendedorValoracionTipoItem */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getDescripcionCorta(){ if(isset($this->descripcion_corta)){ return $this->descripcion_corta; }else{ return ''; } }
	public function getDescripcionPublica(){ if(isset($this->descripcion_publica)){ return $this->descripcion_publica; }else{ return ''; } }
	public function getColor(){ if(isset($this->color)){ return $this->color; }else{ return ''; } }
	public function getColorSecundario(){ if(isset($this->color_secundario)){ return $this->color_secundario; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BVtaVendedorValoracionTipoItem */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_DESCRIPCION_CORTA."
				, ".self::GEN_ATTR_DESCRIPCION_PUBLICA."
				, ".self::GEN_ATTR_COLOR."
				, ".self::GEN_ATTR_COLOR_SECUNDARIO."
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
				$this->setDescripcionCorta($fila[self::GEN_ATTR_MIN_DESCRIPCION_CORTA]);
				$this->setDescripcionPublica($fila[self::GEN_ATTR_MIN_DESCRIPCION_PUBLICA]);
				$this->setColor($fila[self::GEN_ATTR_MIN_COLOR]);
				$this->setColorSecundario($fila[self::GEN_ATTR_MIN_COLOR_SECUNDARIO]);
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
	public function setDescripcionCorta($v){ $this->descripcion_corta = $v; }
	public function setDescripcionPublica($v){ $this->descripcion_publica = $v; }
	public function setColor($v){ $this->color = $v; }
	public function setColorSecundario($v){ $this->color_secundario = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new VtaVendedorValoracionTipoItem();
            $o->setId($fila[VtaVendedorValoracionTipoItem::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setDescripcionCorta($fila[self::GEN_ATTR_MIN_DESCRIPCION_CORTA]);
			$o->setDescripcionPublica($fila[self::GEN_ATTR_MIN_DESCRIPCION_PUBLICA]);
			$o->setColor($fila[self::GEN_ATTR_MIN_COLOR]);
			$o->setColorSecundario($fila[self::GEN_ATTR_MIN_COLOR_SECUNDARIO]);
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

	/* Control de BVtaVendedorValoracionTipoItem */ 	
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

	/* Cambia el estado de BVtaVendedorValoracionTipoItem */ 	
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

	/* Save de BVtaVendedorValoracionTipoItem */ 	
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
						, ".self::GEN_ATTR_MIN_DESCRIPCION_CORTA."
						, ".self::GEN_ATTR_MIN_DESCRIPCION_PUBLICA."
						, ".self::GEN_ATTR_MIN_COLOR."
						, ".self::GEN_ATTR_MIN_COLOR_SECUNDARIO."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('vta_vendedor_valoracion_tipo_item_seq'), 
                '".$this->getDescripcion()."'
						, '".$this->getDescripcionCorta()."'
						, '".$this->getDescripcionPublica()."'
						, '".$this->getColor()."'
						, '".$this->getColorSecundario()."'
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('vta_vendedor_valoracion_tipo_item_seq')";
            
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
                 
				 ".VtaVendedorValoracionTipoItem::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_DESCRIPCION_CORTA." = '".$this->getDescripcionCorta()."'
						, ".self::GEN_ATTR_MIN_DESCRIPCION_PUBLICA." = '".$this->getDescripcionPublica()."'
						, ".self::GEN_ATTR_MIN_COLOR." = '".$this->getColor()."'
						, ".self::GEN_ATTR_MIN_COLOR_SECUNDARIO." = '".$this->getColorSecundario()."'
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
						, ".self::GEN_ATTR_MIN_DESCRIPCION_CORTA."
						, ".self::GEN_ATTR_MIN_DESCRIPCION_PUBLICA."
						, ".self::GEN_ATTR_MIN_COLOR."
						, ".self::GEN_ATTR_MIN_COLOR_SECUNDARIO."
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
						, '".$this->getDescripcionCorta()."'
						, '".$this->getDescripcionPublica()."'
						, '".$this->getColor()."'
						, '".$this->getColorSecundario()."'
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
                     
				 ".VtaVendedorValoracionTipoItem::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_DESCRIPCION_CORTA." = '".$this->getDescripcionCorta()."'
						, ".self::GEN_ATTR_MIN_DESCRIPCION_PUBLICA." = '".$this->getDescripcionPublica()."'
						, ".self::GEN_ATTR_MIN_COLOR." = '".$this->getColor()."'
						, ".self::GEN_ATTR_MIN_COLOR_SECUNDARIO." = '".$this->getColorSecundario()."'
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
            $o = new VtaVendedorValoracionTipoItem();
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

	/* Delete de BVtaVendedorValoracionTipoItem */ 	
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
	
            // se elimina la coleccion de VtaVendedorValoracions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaVendedorValoracion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaVendedorValoracions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaVendedorValoracionTipoItemVtaVendedors relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaVendedorValoracionTipoItemVtaVendedor::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaVendedorValoracionTipoItemVtaVendedors(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarVtaVendedorValoracionTipoItem(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getVtaVendedorValoracionTipoItems($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = VtaVendedorValoracionTipoItem::setAplicarFiltrosDeAlcance($criterio);

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
	
		$vtavendedorvaloraciontipoitems = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $vtavendedorvaloraciontipoitem = new VtaVendedorValoracionTipoItem();
                    $vtavendedorvaloraciontipoitem->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $vtavendedorvaloraciontipoitem->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$vtavendedorvaloraciontipoitem->setDescripcionCorta($fila[self::GEN_ATTR_MIN_DESCRIPCION_CORTA]);
			$vtavendedorvaloraciontipoitem->setDescripcionPublica($fila[self::GEN_ATTR_MIN_DESCRIPCION_PUBLICA]);
			$vtavendedorvaloraciontipoitem->setColor($fila[self::GEN_ATTR_MIN_COLOR]);
			$vtavendedorvaloraciontipoitem->setColorSecundario($fila[self::GEN_ATTR_MIN_COLOR_SECUNDARIO]);
			$vtavendedorvaloraciontipoitem->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$vtavendedorvaloraciontipoitem->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$vtavendedorvaloraciontipoitem->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$vtavendedorvaloraciontipoitem->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$vtavendedorvaloraciontipoitem->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$vtavendedorvaloraciontipoitem->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$vtavendedorvaloraciontipoitem->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$vtavendedorvaloraciontipoitem->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $vtavendedorvaloraciontipoitems[] = $vtavendedorvaloraciontipoitem;
		}
		
		return $vtavendedorvaloraciontipoitems;
	}	
	

	/* Método getVtaVendedorValoracionTipoItems Habilitados */ 	
	static function getVtaVendedorValoracionTipoItemsHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return VtaVendedorValoracionTipoItem::getVtaVendedorValoracionTipoItems($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getVtaVendedorValoracionTipoItems para listado de Backend */ 	
	static function getVtaVendedorValoracionTipoItemsDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return VtaVendedorValoracionTipoItem::getVtaVendedorValoracionTipoItems($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getVtaVendedorValoracionTipoItemsCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = VtaVendedorValoracionTipoItem::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = VtaVendedorValoracionTipoItem::getVtaVendedorValoracionTipoItems($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaVendedorValoracionTipoItems filtrado para select */ 	
	static function getVtaVendedorValoracionTipoItemsCmbF($paginador = null, $criterio = null){
            $col = VtaVendedorValoracionTipoItem::getVtaVendedorValoracionTipoItems($paginador, $criterio);

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
            $url = 'vta_vendedor_valoracion_tipo_item_adm.php';
            $url_gestion = 'vta_vendedor_valoracion_tipo_item_gestion.php';
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
	

	/* Metodo getVtaVendedorValoracions */ 	
	public function getVtaVendedorValoracions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaVendedorValoracion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaVendedorValoracion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaVendedorValoracion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaVendedorValoracion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaVendedorValoracion::GEN_ATTR_VTA_VENDEDOR_VALORACION_TIPO_ITEM_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaVendedorValoracion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaVendedorValoracion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaVendedorValoracion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtavendedorvaloracions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtavendedorvaloracion = VtaVendedorValoracion::hidratarObjeto($fila);			
                $vtavendedorvaloracions[] = $vtavendedorvaloracion;
            }

            return $vtavendedorvaloracions;
	}	
	

	/* Método getVtaVendedorValoracionsBloque para MasInfo */ 	
	public function getVtaVendedorValoracionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaVendedorValoracions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaVendedorValoracions Habilitados */ 	
	public function getVtaVendedorValoracionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaVendedorValoracions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaVendedorValoracion */ 	
	public function getVtaVendedorValoracion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaVendedorValoracions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaVendedorValoracion relacionadas */ 	
	public function deleteVtaVendedorValoracions(){
            $obs = $this->getVtaVendedorValoracions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaVendedorValoracionsCmb() VtaVendedorValoracion relacionadas */ 	
	public function getVtaVendedorValoracionsCmb(){
            $c = new Criterio();
            $c->add(VtaVendedorValoracion::GEN_ATTR_VTA_VENDEDOR_VALORACION_TIPO_ITEM_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedorValoracion::GEN_TABLA);
            $c->setCriterios();

            $os = VtaVendedorValoracion::getVtaVendedorValoracionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaVendedorValoracionAgrupacions (Coleccion) relacionados a traves de VtaVendedorValoracion */ 	
	public function getVtaVendedorValoracionAgrupacionsXVtaVendedorValoracion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaVendedorValoracionAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaVendedorValoracion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaVendedorValoracion::GEN_ATTR_VTA_VENDEDOR_VALORACION_TIPO_ITEM_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedorValoracionAgrupacion::GEN_TABLA);
            $c->addRealJoin(VtaVendedorValoracion::GEN_TABLA, VtaVendedorValoracion::GEN_ATTR_VTA_VENDEDOR_VALORACION_AGRUPACION_ID, VtaVendedorValoracionAgrupacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaVendedorValoracionAgrupacion::getVtaVendedorValoracionAgrupacions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaVendedorValoracionAgrupacions relacionados a traves de VtaVendedorValoracion */ 	
	public function getCantidadVtaVendedorValoracionAgrupacionsXVtaVendedorValoracion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaVendedorValoracionAgrupacion::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaVendedorValoracionAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaVendedorValoracion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaVendedorValoracion::GEN_ATTR_VTA_VENDEDOR_VALORACION_TIPO_ITEM_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedorValoracionAgrupacion::GEN_TABLA);
            $c->addRealJoin(VtaVendedorValoracion::GEN_TABLA, VtaVendedorValoracion::GEN_ATTR_VTA_VENDEDOR_VALORACION_AGRUPACION_ID, VtaVendedorValoracionAgrupacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaVendedorValoracionAgrupacion::getVtaVendedorValoracionAgrupacions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaVendedorValoracionAgrupacion (Objeto) relacionado a traves de VtaVendedorValoracion */ 	
	public function getVtaVendedorValoracionAgrupacionXVtaVendedorValoracion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaVendedorValoracionAgrupacionsXVtaVendedorValoracion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaVendedorValoracionTipoItemVtaVendedors */ 	
	public function getVtaVendedorValoracionTipoItemVtaVendedors($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaVendedorValoracionTipoItemVtaVendedor::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaVendedorValoracionTipoItemVtaVendedor::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaVendedorValoracionTipoItemVtaVendedor::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaVendedorValoracionTipoItemVtaVendedor::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaVendedorValoracionTipoItemVtaVendedor::GEN_ATTR_VTA_VENDEDOR_VALORACION_TIPO_ITEM_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaVendedorValoracionTipoItemVtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaVendedorValoracionTipoItemVtaVendedor::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaVendedorValoracionTipoItemVtaVendedor::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtavendedorvaloraciontipoitemvtavendedors = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtavendedorvaloraciontipoitemvtavendedor = VtaVendedorValoracionTipoItemVtaVendedor::hidratarObjeto($fila);			
                $vtavendedorvaloraciontipoitemvtavendedors[] = $vtavendedorvaloraciontipoitemvtavendedor;
            }

            return $vtavendedorvaloraciontipoitemvtavendedors;
	}	
	

	/* Método getVtaVendedorValoracionTipoItemVtaVendedorsBloque para MasInfo */ 	
	public function getVtaVendedorValoracionTipoItemVtaVendedorsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaVendedorValoracionTipoItemVtaVendedors($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaVendedorValoracionTipoItemVtaVendedors Habilitados */ 	
	public function getVtaVendedorValoracionTipoItemVtaVendedorsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaVendedorValoracionTipoItemVtaVendedors($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaVendedorValoracionTipoItemVtaVendedor */ 	
	public function getVtaVendedorValoracionTipoItemVtaVendedor($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaVendedorValoracionTipoItemVtaVendedors($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaVendedorValoracionTipoItemVtaVendedor relacionadas */ 	
	public function deleteVtaVendedorValoracionTipoItemVtaVendedors(){
            $obs = $this->getVtaVendedorValoracionTipoItemVtaVendedors();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaVendedorValoracionTipoItemVtaVendedorsCmb() VtaVendedorValoracionTipoItemVtaVendedor relacionadas */ 	
	public function getVtaVendedorValoracionTipoItemVtaVendedorsCmb(){
            $c = new Criterio();
            $c->add(VtaVendedorValoracionTipoItemVtaVendedor::GEN_ATTR_VTA_VENDEDOR_VALORACION_TIPO_ITEM_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedorValoracionTipoItemVtaVendedor::GEN_TABLA);
            $c->setCriterios();

            $os = VtaVendedorValoracionTipoItemVtaVendedor::getVtaVendedorValoracionTipoItemVtaVendedorsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaVendedors (Coleccion) relacionados a traves de VtaVendedorValoracionTipoItemVtaVendedor */ 	
	public function getVtaVendedorsXVtaVendedorValoracionTipoItemVtaVendedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaVendedorValoracionTipoItemVtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaVendedorValoracionTipoItemVtaVendedor::GEN_ATTR_VTA_VENDEDOR_VALORACION_TIPO_ITEM_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedor::GEN_TABLA);
            $c->addRealJoin(VtaVendedorValoracionTipoItemVtaVendedor::GEN_TABLA, VtaVendedorValoracionTipoItemVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, VtaVendedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaVendedor::getVtaVendedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaVendedors relacionados a traves de VtaVendedorValoracionTipoItemVtaVendedor */ 	
	public function getCantidadVtaVendedorsXVtaVendedorValoracionTipoItemVtaVendedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaVendedor::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaVendedorValoracionTipoItemVtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaVendedorValoracionTipoItemVtaVendedor::GEN_ATTR_VTA_VENDEDOR_VALORACION_TIPO_ITEM_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedor::GEN_TABLA);
            $c->addRealJoin(VtaVendedorValoracionTipoItemVtaVendedor::GEN_TABLA, VtaVendedorValoracionTipoItemVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, VtaVendedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaVendedor::getVtaVendedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaVendedor (Objeto) relacionado a traves de VtaVendedorValoracionTipoItemVtaVendedor */ 	
	public function getVtaVendedorXVtaVendedorValoracionTipoItemVtaVendedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaVendedorsXVtaVendedorValoracionTipoItemVtaVendedor($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los VtaVendedors asignados a VtaVendedorValoracionTipoItem */ 	
	public function getVtaVendedorValoracionTipoItemVtaVendedorsId(){
            $ids = array();
            foreach($this->getVtaVendedorValoracionTipoItemVtaVendedors() as $o){
            
                $ids[] = $o->getVtaVendedorId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaVendedors asignados al VtaVendedorValoracionTipoItem */ 	
	public function setVtaVendedorValoracionTipoItemVtaVendedors($ids){
            $this->deleteVtaVendedorValoracionTipoItemVtaVendedors();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaVendedorValoracionTipoItemVtaVendedor();
                    $o->setVtaVendedorId($id);
                    $o->setVtaVendedorValoracionTipoItemId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaVendedor en el alta de VtaVendedorValoracionTipoItem */ 	
	public function getAltaMostrarBloqueRelacionVtaVendedorValoracionTipoItemVtaVendedor(){
            return true;
	}
	

	/* Metodo que retorna la HASH del objeto */ 	
    public function getHash(){
        return md5($this->getId().$this->getCreado());
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM vta_vendedor_valoracion_tipo_item'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'vta_vendedor_valoracion_tipo_item';");
            
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

            $obs = self::getVtaVendedorValoracionTipoItems($paginador, $criterio);
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

            $obs = self::getVtaVendedorValoracionTipoItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedorValoracionTipoItems($paginador, $criterio);
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

            $obs = self::getVtaVendedorValoracionTipoItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion_corta' */ 	
	static function getOxDescripcionCorta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION_CORTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedorValoracionTipoItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'descripcion_corta' */ 	
	static function getOsxDescripcionCorta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION_CORTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaVendedorValoracionTipoItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion_publica' */ 	
	static function getOxDescripcionPublica($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION_PUBLICA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedorValoracionTipoItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'descripcion_publica' */ 	
	static function getOsxDescripcionPublica($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION_PUBLICA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaVendedorValoracionTipoItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'color' */ 	
	static function getOxColor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_COLOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedorValoracionTipoItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'color' */ 	
	static function getOsxColor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_COLOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaVendedorValoracionTipoItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'color_secundario' */ 	
	static function getOxColorSecundario($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_COLOR_SECUNDARIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedorValoracionTipoItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'color_secundario' */ 	
	static function getOsxColorSecundario($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_COLOR_SECUNDARIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaVendedorValoracionTipoItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedorValoracionTipoItems($paginador, $criterio);
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

            $obs = self::getVtaVendedorValoracionTipoItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedorValoracionTipoItems($paginador, $criterio);
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

            $obs = self::getVtaVendedorValoracionTipoItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedorValoracionTipoItems($paginador, $criterio);
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

            $obs = self::getVtaVendedorValoracionTipoItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedorValoracionTipoItems($paginador, $criterio);
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

            $obs = self::getVtaVendedorValoracionTipoItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedorValoracionTipoItems($paginador, $criterio);
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

            $obs = self::getVtaVendedorValoracionTipoItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedorValoracionTipoItems($paginador, $criterio);
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

            $obs = self::getVtaVendedorValoracionTipoItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedorValoracionTipoItems($paginador, $criterio);
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

            $obs = self::getVtaVendedorValoracionTipoItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedorValoracionTipoItems($paginador, $criterio);
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

            $obs = self::getVtaVendedorValoracionTipoItems(null, $criterio);
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

            $obs = self::getVtaVendedorValoracionTipoItems($paginador, $criterio);
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

            $obs = self::getVtaVendedorValoracionTipoItems($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'vta_vendedor_valoracion_tipo_item_adm');
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
                $c->addTabla(VtaVendedorValoracionTipoItem::GEN_TABLA);
                $c->addOrden(VtaVendedorValoracionTipoItem::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $vta_vendedor_valoracion_tipo_items = VtaVendedorValoracionTipoItem::getVtaVendedorValoracionTipoItems(null, $c);

                $arr = array();
                foreach($vta_vendedor_valoracion_tipo_items as $vta_vendedor_valoracion_tipo_item){
                    $descripcion = $vta_vendedor_valoracion_tipo_item->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>