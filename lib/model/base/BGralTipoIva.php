<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:46 hs */ 
class BGralTipoIva
{ 
	
	const SES_PAGINACION = 'adm_graltipoiva_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_graltipoiva_paginas_registros';
	const SES_CRITERIOS = 'adm_graltipoiva_criterios';
	
	const GEN_CLASE = 'GralTipoIva';
	const GEN_TABLA = 'gral_tipo_iva';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BGralTipoIva */ 
	const GEN_ATTR_ID = 'gral_tipo_iva.id';
	const GEN_ATTR_DESCRIPCION = 'gral_tipo_iva.descripcion';
	const GEN_ATTR_CODIGO = 'gral_tipo_iva.codigo';
	const GEN_ATTR_VALOR_IVA = 'gral_tipo_iva.valor_iva';
	const GEN_ATTR_GRAVADO = 'gral_tipo_iva.gravado';
	const GEN_ATTR_PARA_COMPRA = 'gral_tipo_iva.para_compra';
	const GEN_ATTR_PARA_VENTA = 'gral_tipo_iva.para_venta';
	const GEN_ATTR_OBSERVACION = 'gral_tipo_iva.observacion';
	const GEN_ATTR_ORDEN = 'gral_tipo_iva.orden';
	const GEN_ATTR_ESTADO = 'gral_tipo_iva.estado';
	const GEN_ATTR_CREADO = 'gral_tipo_iva.creado';
	const GEN_ATTR_CREADO_POR = 'gral_tipo_iva.creado_por';
	const GEN_ATTR_MODIFICADO = 'gral_tipo_iva.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'gral_tipo_iva.modificado_por';

	/* Constantes de Atributos Min de BGralTipoIva */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_VALOR_IVA = 'valor_iva';
	const GEN_ATTR_MIN_GRAVADO = 'gravado';
	const GEN_ATTR_MIN_PARA_COMPRA = 'para_compra';
	const GEN_ATTR_MIN_PARA_VENTA = 'para_venta';
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
	

	/* Atributos de BGralTipoIva */ 
	private $id;
	private $descripcion;
	private $codigo;
	private $valor_iva;
	private $gravado;
	private $para_compra;
	private $para_venta;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BGralTipoIva */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getValorIva(){ if(isset($this->valor_iva)){ return $this->valor_iva; }else{ return 0; } }
	public function getGravado(){ if(isset($this->gravado)){ return $this->gravado; }else{ return 0; } }
	public function getParaCompra(){ if(isset($this->para_compra)){ return $this->para_compra; }else{ return 0; } }
	public function getParaVenta(){ if(isset($this->para_venta)){ return $this->para_venta; }else{ return 0; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BGralTipoIva */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_VALOR_IVA."
				, ".self::GEN_ATTR_GRAVADO."
				, ".self::GEN_ATTR_PARA_COMPRA."
				, ".self::GEN_ATTR_PARA_VENTA."
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
				$this->setValorIva($fila[self::GEN_ATTR_MIN_VALOR_IVA]);
				$this->setGravado($fila[self::GEN_ATTR_MIN_GRAVADO]);
				$this->setParaCompra($fila[self::GEN_ATTR_MIN_PARA_COMPRA]);
				$this->setParaVenta($fila[self::GEN_ATTR_MIN_PARA_VENTA]);
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
	public function setValorIva($v){ $this->valor_iva = $v; }
	public function setGravado($v){ $this->gravado = $v; }
	public function setParaCompra($v){ $this->para_compra = $v; }
	public function setParaVenta($v){ $this->para_venta = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new GralTipoIva();
            $o->setId($fila[GralTipoIva::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setValorIva($fila[self::GEN_ATTR_MIN_VALOR_IVA]);
			$o->setGravado($fila[self::GEN_ATTR_MIN_GRAVADO]);
			$o->setParaCompra($fila[self::GEN_ATTR_MIN_PARA_COMPRA]);
			$o->setParaVenta($fila[self::GEN_ATTR_MIN_PARA_VENTA]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BGralTipoIva */ 	
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

	/* Cambia el estado de BGralTipoIva */ 	
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

	/* Save de BGralTipoIva */ 	
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
						, ".self::GEN_ATTR_MIN_VALOR_IVA."
						, ".self::GEN_ATTR_MIN_GRAVADO."
						, ".self::GEN_ATTR_MIN_PARA_COMPRA."
						, ".self::GEN_ATTR_MIN_PARA_VENTA."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('gral_tipo_iva_seq'), 
                '".$this->getDescripcion()."'
						, '".$this->getCodigo()."'
						, '".$this->getValorIva()."'
						, ".$this->getGravado()."
						, ".$this->getParaCompra()."
						, ".$this->getParaVenta()."
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('gral_tipo_iva_seq')";
            
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
                 
				 ".GralTipoIva::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_VALOR_IVA." = '".$this->getValorIva()."'
						, ".self::GEN_ATTR_MIN_GRAVADO." = ".$this->getGravado()."
						, ".self::GEN_ATTR_MIN_PARA_COMPRA." = ".$this->getParaCompra()."
						, ".self::GEN_ATTR_MIN_PARA_VENTA." = ".$this->getParaVenta()."
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
						, ".self::GEN_ATTR_MIN_VALOR_IVA."
						, ".self::GEN_ATTR_MIN_GRAVADO."
						, ".self::GEN_ATTR_MIN_PARA_COMPRA."
						, ".self::GEN_ATTR_MIN_PARA_VENTA."
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
						, '".$this->getValorIva()."'
						, ".$this->getGravado()."
						, ".$this->getParaCompra()."
						, ".$this->getParaVenta()."
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
                     
				 ".GralTipoIva::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_VALOR_IVA." = '".$this->getValorIva()."'
						, ".self::GEN_ATTR_MIN_GRAVADO." = ".$this->getGravado()."
						, ".self::GEN_ATTR_MIN_PARA_COMPRA." = ".$this->getParaCompra()."
						, ".self::GEN_ATTR_MIN_PARA_VENTA." = ".$this->getParaVenta()."
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
            $o = new GralTipoIva();
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

	/* Delete de BGralTipoIva */ 	
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
	
            // se elimina la coleccion de GralTipoIvaWsFeParamTipoIvas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralTipoIvaWsFeParamTipoIva::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralTipoIvaWsFeParamTipoIvas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrvInsumos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrvInsumo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrvInsumos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaPresupuestoInsInsumos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaPresupuestoInsInsumo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaPresupuestoInsInsumos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaNotaCreditoVtaFacturaVtaOrdenVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaNotaCreditoVtaFacturaVtaOrdenVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaNotaCreditoItems relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaNotaCreditoItem::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaNotaCreditoItems(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaNotaDebitoItems relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaNotaDebitoItem::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaNotaDebitoItems(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaReciboItems relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaReciboItem::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaReciboItems(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaOrdenVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaOrdenVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaFacturaItems relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaFacturaItem::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaFacturaItems(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaFacturaVtaOrdenVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaFacturaVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaFacturaVtaOrdenVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeOcAgrupacionItems relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOcAgrupacionItem::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOcAgrupacionItems(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeOcs relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOc::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOcs(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeFacturaItems relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeFacturaItem::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeFacturaItems(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeFacturaPdeOcs relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeFacturaPdeOc::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeFacturaPdeOcs(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeFacturaPdeRecepcions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeFacturaPdeRecepcion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeFacturaPdeRecepcions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeNotaCreditoPdeFacturaPdeRecepcions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaCreditoPdeFacturaPdeRecepcions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeNotaCreditoPdeFacturaPdeOcs relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaCreditoPdeFacturaPdeOc::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaCreditoPdeFacturaPdeOcs(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeNotaCreditoItems relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaCreditoItem::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaCreditoItems(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeNotaDebitoItems relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaDebitoItem::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaDebitoItems(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeReciboItems relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeReciboItem::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeReciboItems(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteDebeVtaOrdenVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteDebeVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteDebeVtaOrdenVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteDebeItems relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteDebeItem::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteDebeItems(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteHaberItems relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteHaberItem::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteHaberItems(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteHaberVtaAjusteDebeVtaOrdenVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuParamTipoAfectacionTributariaGralTipoIvas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuParamTipoAfectacionTributariaGralTipoIva::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuParamTipoAfectacionTributariaGralTipoIvas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarGralTipoIva(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getGralTipoIvas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = GralTipoIva::setAplicarFiltrosDeAlcance($criterio);

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
	
		$graltipoivas = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $graltipoiva = new GralTipoIva();
                    $graltipoiva->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $graltipoiva->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$graltipoiva->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$graltipoiva->setValorIva($fila[self::GEN_ATTR_MIN_VALOR_IVA]);
			$graltipoiva->setGravado($fila[self::GEN_ATTR_MIN_GRAVADO]);
			$graltipoiva->setParaCompra($fila[self::GEN_ATTR_MIN_PARA_COMPRA]);
			$graltipoiva->setParaVenta($fila[self::GEN_ATTR_MIN_PARA_VENTA]);
			$graltipoiva->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$graltipoiva->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$graltipoiva->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$graltipoiva->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$graltipoiva->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$graltipoiva->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$graltipoiva->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $graltipoivas[] = $graltipoiva;
		}
		
		return $graltipoivas;
	}	
	

	/* Método getGralTipoIvas Habilitados */ 	
	static function getGralTipoIvasHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return GralTipoIva::getGralTipoIvas($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getGralTipoIvas para listado de Backend */ 	
	static function getGralTipoIvasDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return GralTipoIva::getGralTipoIvas($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getGralTipoIvasCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = GralTipoIva::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = GralTipoIva::getGralTipoIvas($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getGralTipoIvas filtrado para select */ 	
	static function getGralTipoIvasCmbF($paginador = null, $criterio = null){
            $col = GralTipoIva::getGralTipoIvas($paginador, $criterio);

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
            $url = 'gral_tipo_iva_adm.php';
            $url_gestion = 'gral_tipo_iva_gestion.php';
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
	

	/* Metodo getGralTipoIvaWsFeParamTipoIvas */ 	
	public function getGralTipoIvaWsFeParamTipoIvas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralTipoIvaWsFeParamTipoIva::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralTipoIvaWsFeParamTipoIva::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralTipoIvaWsFeParamTipoIva::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralTipoIvaWsFeParamTipoIva::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralTipoIvaWsFeParamTipoIva::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralTipoIvaWsFeParamTipoIva::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralTipoIvaWsFeParamTipoIva::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralTipoIvaWsFeParamTipoIva::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $graltipoivawsfeparamtipoivas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $graltipoivawsfeparamtipoiva = GralTipoIvaWsFeParamTipoIva::hidratarObjeto($fila);			
                $graltipoivawsfeparamtipoivas[] = $graltipoivawsfeparamtipoiva;
            }

            return $graltipoivawsfeparamtipoivas;
	}	
	

	/* Método getGralTipoIvaWsFeParamTipoIvasBloque para MasInfo */ 	
	public function getGralTipoIvaWsFeParamTipoIvasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralTipoIvaWsFeParamTipoIvas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralTipoIvaWsFeParamTipoIvas Habilitados */ 	
	public function getGralTipoIvaWsFeParamTipoIvasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralTipoIvaWsFeParamTipoIvas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralTipoIvaWsFeParamTipoIva */ 	
	public function getGralTipoIvaWsFeParamTipoIva($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralTipoIvaWsFeParamTipoIvas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralTipoIvaWsFeParamTipoIva relacionadas */ 	
	public function deleteGralTipoIvaWsFeParamTipoIvas(){
            $obs = $this->getGralTipoIvaWsFeParamTipoIvas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralTipoIvaWsFeParamTipoIvasCmb() GralTipoIvaWsFeParamTipoIva relacionadas */ 	
	public function getGralTipoIvaWsFeParamTipoIvasCmb(){
            $c = new Criterio();
            $c->add(GralTipoIvaWsFeParamTipoIva::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralTipoIvaWsFeParamTipoIva::GEN_TABLA);
            $c->setCriterios();

            $os = GralTipoIvaWsFeParamTipoIva::getGralTipoIvaWsFeParamTipoIvasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener WsFeParamTipoIvas (Coleccion) relacionados a traves de GralTipoIvaWsFeParamTipoIva */ 	
	public function getWsFeParamTipoIvasXGralTipoIvaWsFeParamTipoIva($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(WsFeParamTipoIva::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralTipoIvaWsFeParamTipoIva::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralTipoIvaWsFeParamTipoIva::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeParamTipoIva::GEN_TABLA);
            $c->addRealJoin(GralTipoIvaWsFeParamTipoIva::GEN_TABLA, GralTipoIvaWsFeParamTipoIva::GEN_ATTR_WS_FE_PARAM_TIPO_IVA_ID, WsFeParamTipoIva::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = WsFeParamTipoIva::getWsFeParamTipoIvas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de WsFeParamTipoIvas relacionados a traves de GralTipoIvaWsFeParamTipoIva */ 	
	public function getCantidadWsFeParamTipoIvasXGralTipoIvaWsFeParamTipoIva($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(WsFeParamTipoIva::GEN_ATTR_ID);
            if($estado){
                $c->add(WsFeParamTipoIva::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralTipoIvaWsFeParamTipoIva::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralTipoIvaWsFeParamTipoIva::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeParamTipoIva::GEN_TABLA);
            $c->addRealJoin(GralTipoIvaWsFeParamTipoIva::GEN_TABLA, GralTipoIvaWsFeParamTipoIva::GEN_ATTR_WS_FE_PARAM_TIPO_IVA_ID, WsFeParamTipoIva::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = WsFeParamTipoIva::getWsFeParamTipoIvas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener WsFeParamTipoIva (Objeto) relacionado a traves de GralTipoIvaWsFeParamTipoIva */ 	
	public function getWsFeParamTipoIvaXGralTipoIvaWsFeParamTipoIva($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getWsFeParamTipoIvasXGralTipoIvaWsFeParamTipoIva($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPrvInsumos */ 	
	public function getPrvInsumos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrvInsumo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrvInsumo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrvInsumo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PrvInsumo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrvInsumo::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrvInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrvInsumo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrvInsumo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prvinsumos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prvinsumo = PrvInsumo::hidratarObjeto($fila);			
                $prvinsumos[] = $prvinsumo;
            }

            return $prvinsumos;
	}	
	

	/* Método getPrvInsumosBloque para MasInfo */ 	
	public function getPrvInsumosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrvInsumos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrvInsumos Habilitados */ 	
	public function getPrvInsumosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrvInsumos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrvInsumo */ 	
	public function getPrvInsumo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrvInsumos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrvInsumo relacionadas */ 	
	public function deletePrvInsumos(){
            $obs = $this->getPrvInsumos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrvInsumosCmb() PrvInsumo relacionadas */ 	
	public function getPrvInsumosCmb(){
            $c = new Criterio();
            $c->add(PrvInsumo::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvInsumo::GEN_TABLA);
            $c->setCriterios();

            $os = PrvInsumo::getPrvInsumosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsInsumos (Coleccion) relacionados a traves de PrvInsumo */ 	
	public function getInsInsumosXPrvInsumo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrvInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrvInsumo::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(PrvInsumo::GEN_TABLA, PrvInsumo::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsInsumos relacionados a traves de PrvInsumo */ 	
	public function getCantidadInsInsumosXPrvInsumo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsInsumo::GEN_ATTR_ID);
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrvInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrvInsumo::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(PrvInsumo::GEN_TABLA, PrvInsumo::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsInsumo (Objeto) relacionado a traves de PrvInsumo */ 	
	public function getInsInsumoXPrvInsumo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsInsumosXPrvInsumo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaPresupuestoInsInsumos */ 	
	public function getVtaPresupuestoInsInsumos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaPresupuestoInsInsumo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaPresupuestoInsInsumo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaPresupuestoInsInsumo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaPresupuestoInsInsumo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaPresupuestoInsInsumo::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaPresupuestoInsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaPresupuestoInsInsumo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaPresupuestoInsInsumo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtapresupuestoinsinsumos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtapresupuestoinsinsumo = VtaPresupuestoInsInsumo::hidratarObjeto($fila);			
                $vtapresupuestoinsinsumos[] = $vtapresupuestoinsinsumo;
            }

            return $vtapresupuestoinsinsumos;
	}	
	

	/* Método getVtaPresupuestoInsInsumosBloque para MasInfo */ 	
	public function getVtaPresupuestoInsInsumosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaPresupuestoInsInsumos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaPresupuestoInsInsumos Habilitados */ 	
	public function getVtaPresupuestoInsInsumosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaPresupuestoInsInsumos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaPresupuestoInsInsumo */ 	
	public function getVtaPresupuestoInsInsumo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaPresupuestoInsInsumos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaPresupuestoInsInsumo relacionadas */ 	
	public function deleteVtaPresupuestoInsInsumos(){
            $obs = $this->getVtaPresupuestoInsInsumos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaPresupuestoInsInsumosCmb() VtaPresupuestoInsInsumo relacionadas */ 	
	public function getVtaPresupuestoInsInsumosCmb(){
            $c = new Criterio();
            $c->add(VtaPresupuestoInsInsumo::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuestoInsInsumo::GEN_TABLA);
            $c->setCriterios();

            $os = VtaPresupuestoInsInsumo::getVtaPresupuestoInsInsumosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaPresupuestos (Coleccion) relacionados a traves de VtaPresupuestoInsInsumo */ 	
	public function getVtaPresupuestosXVtaPresupuestoInsInsumo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPresupuestoInsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPresupuestoInsInsumo::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addRealJoin(VtaPresupuestoInsInsumo::GEN_TABLA, VtaPresupuestoInsInsumo::GEN_ATTR_VTA_PRESUPUESTO_ID, VtaPresupuesto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPresupuesto::getVtaPresupuestos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaPresupuestos relacionados a traves de VtaPresupuestoInsInsumo */ 	
	public function getCantidadVtaPresupuestosXVtaPresupuestoInsInsumo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaPresupuesto::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPresupuestoInsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPresupuestoInsInsumo::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addRealJoin(VtaPresupuestoInsInsumo::GEN_TABLA, VtaPresupuestoInsInsumo::GEN_ATTR_VTA_PRESUPUESTO_ID, VtaPresupuesto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPresupuesto::getVtaPresupuestos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaPresupuesto (Objeto) relacionado a traves de VtaPresupuestoInsInsumo */ 	
	public function getVtaPresupuestoXVtaPresupuestoInsInsumo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaPresupuestosXVtaPresupuestoInsInsumo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaNotaCreditoVtaFacturaVtaOrdenVentas */ 	
	public function getVtaNotaCreditoVtaFacturaVtaOrdenVentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaNotaCreditoVtaFacturaVtaOrdenVenta::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaNotaCreditoVtaFacturaVtaOrdenVenta::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtanotacreditovtafacturavtaordenventas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtanotacreditovtafacturavtaordenventa = VtaNotaCreditoVtaFacturaVtaOrdenVenta::hidratarObjeto($fila);			
                $vtanotacreditovtafacturavtaordenventas[] = $vtanotacreditovtafacturavtaordenventa;
            }

            return $vtanotacreditovtafacturavtaordenventas;
	}	
	

	/* Método getVtaNotaCreditoVtaFacturaVtaOrdenVentasBloque para MasInfo */ 	
	public function getVtaNotaCreditoVtaFacturaVtaOrdenVentasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaNotaCreditoVtaFacturaVtaOrdenVentas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaNotaCreditoVtaFacturaVtaOrdenVentas Habilitados */ 	
	public function getVtaNotaCreditoVtaFacturaVtaOrdenVentasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaNotaCreditoVtaFacturaVtaOrdenVentas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaNotaCreditoVtaFacturaVtaOrdenVenta */ 	
	public function getVtaNotaCreditoVtaFacturaVtaOrdenVenta($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaNotaCreditoVtaFacturaVtaOrdenVentas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaNotaCreditoVtaFacturaVtaOrdenVenta relacionadas */ 	
	public function deleteVtaNotaCreditoVtaFacturaVtaOrdenVentas(){
            $obs = $this->getVtaNotaCreditoVtaFacturaVtaOrdenVentas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaNotaCreditoVtaFacturaVtaOrdenVentasCmb() VtaNotaCreditoVtaFacturaVtaOrdenVenta relacionadas */ 	
	public function getVtaNotaCreditoVtaFacturaVtaOrdenVentasCmb(){
            $c = new Criterio();
            $c->add(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();

            $os = VtaNotaCreditoVtaFacturaVtaOrdenVenta::getVtaNotaCreditoVtaFacturaVtaOrdenVentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaNotaCreditos (Coleccion) relacionados a traves de VtaNotaCreditoVtaFacturaVtaOrdenVenta */ 	
	public function getVtaNotaCreditosXVtaNotaCreditoVtaFacturaVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaCredito::GEN_TABLA);
            $c->addRealJoin(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_TABLA, VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_NOTA_CREDITO_ID, VtaNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaCredito::getVtaNotaCreditos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaNotaCreditos relacionados a traves de VtaNotaCreditoVtaFacturaVtaOrdenVenta */ 	
	public function getCantidadVtaNotaCreditosXVtaNotaCreditoVtaFacturaVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaNotaCredito::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaCredito::GEN_TABLA);
            $c->addRealJoin(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_TABLA, VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_NOTA_CREDITO_ID, VtaNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaCredito::getVtaNotaCreditos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaNotaCredito (Objeto) relacionado a traves de VtaNotaCreditoVtaFacturaVtaOrdenVenta */ 	
	public function getVtaNotaCreditoXVtaNotaCreditoVtaFacturaVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaNotaCreditosXVtaNotaCreditoVtaFacturaVtaOrdenVenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaNotaCreditoItems */ 	
	public function getVtaNotaCreditoItems($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaNotaCreditoItem::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaNotaCreditoItem::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaNotaCreditoItem::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaNotaCreditoItem::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaNotaCreditoItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaNotaCreditoItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaNotaCreditoItem::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaNotaCreditoItem::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtanotacreditoitems = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtanotacreditoitem = VtaNotaCreditoItem::hidratarObjeto($fila);			
                $vtanotacreditoitems[] = $vtanotacreditoitem;
            }

            return $vtanotacreditoitems;
	}	
	

	/* Método getVtaNotaCreditoItemsBloque para MasInfo */ 	
	public function getVtaNotaCreditoItemsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaNotaCreditoItems($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaNotaCreditoItems Habilitados */ 	
	public function getVtaNotaCreditoItemsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaNotaCreditoItems($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaNotaCreditoItem */ 	
	public function getVtaNotaCreditoItem($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaNotaCreditoItems($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaNotaCreditoItem relacionadas */ 	
	public function deleteVtaNotaCreditoItems(){
            $obs = $this->getVtaNotaCreditoItems();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaNotaCreditoItemsCmb() VtaNotaCreditoItem relacionadas */ 	
	public function getVtaNotaCreditoItemsCmb(){
            $c = new Criterio();
            $c->add(VtaNotaCreditoItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaCreditoItem::GEN_TABLA);
            $c->setCriterios();

            $os = VtaNotaCreditoItem::getVtaNotaCreditoItemsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaNotaCreditos (Coleccion) relacionados a traves de VtaNotaCreditoItem */ 	
	public function getVtaNotaCreditosXVtaNotaCreditoItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaCreditoItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaCreditoItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaCredito::GEN_TABLA);
            $c->addRealJoin(VtaNotaCreditoItem::GEN_TABLA, VtaNotaCreditoItem::GEN_ATTR_VTA_NOTA_CREDITO_ID, VtaNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaCredito::getVtaNotaCreditos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaNotaCreditos relacionados a traves de VtaNotaCreditoItem */ 	
	public function getCantidadVtaNotaCreditosXVtaNotaCreditoItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaNotaCredito::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaCreditoItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaCreditoItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaCredito::GEN_TABLA);
            $c->addRealJoin(VtaNotaCreditoItem::GEN_TABLA, VtaNotaCreditoItem::GEN_ATTR_VTA_NOTA_CREDITO_ID, VtaNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaCredito::getVtaNotaCreditos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaNotaCredito (Objeto) relacionado a traves de VtaNotaCreditoItem */ 	
	public function getVtaNotaCreditoXVtaNotaCreditoItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaNotaCreditosXVtaNotaCreditoItem($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaNotaDebitoItems */ 	
	public function getVtaNotaDebitoItems($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaNotaDebitoItem::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaNotaDebitoItem::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaNotaDebitoItem::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaNotaDebitoItem::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaNotaDebitoItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaNotaDebitoItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaNotaDebitoItem::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaNotaDebitoItem::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtanotadebitoitems = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtanotadebitoitem = VtaNotaDebitoItem::hidratarObjeto($fila);			
                $vtanotadebitoitems[] = $vtanotadebitoitem;
            }

            return $vtanotadebitoitems;
	}	
	

	/* Método getVtaNotaDebitoItemsBloque para MasInfo */ 	
	public function getVtaNotaDebitoItemsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaNotaDebitoItems($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaNotaDebitoItems Habilitados */ 	
	public function getVtaNotaDebitoItemsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaNotaDebitoItems($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaNotaDebitoItem */ 	
	public function getVtaNotaDebitoItem($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaNotaDebitoItems($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaNotaDebitoItem relacionadas */ 	
	public function deleteVtaNotaDebitoItems(){
            $obs = $this->getVtaNotaDebitoItems();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaNotaDebitoItemsCmb() VtaNotaDebitoItem relacionadas */ 	
	public function getVtaNotaDebitoItemsCmb(){
            $c = new Criterio();
            $c->add(VtaNotaDebitoItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaDebitoItem::GEN_TABLA);
            $c->setCriterios();

            $os = VtaNotaDebitoItem::getVtaNotaDebitoItemsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaNotaDebitos (Coleccion) relacionados a traves de VtaNotaDebitoItem */ 	
	public function getVtaNotaDebitosXVtaNotaDebitoItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaDebitoItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaDebitoItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->addRealJoin(VtaNotaDebitoItem::GEN_TABLA, VtaNotaDebitoItem::GEN_ATTR_VTA_NOTA_DEBITO_ID, VtaNotaDebito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaDebito::getVtaNotaDebitos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaNotaDebitos relacionados a traves de VtaNotaDebitoItem */ 	
	public function getCantidadVtaNotaDebitosXVtaNotaDebitoItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaNotaDebito::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaDebitoItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaDebitoItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->addRealJoin(VtaNotaDebitoItem::GEN_TABLA, VtaNotaDebitoItem::GEN_ATTR_VTA_NOTA_DEBITO_ID, VtaNotaDebito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaDebito::getVtaNotaDebitos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaNotaDebito (Objeto) relacionado a traves de VtaNotaDebitoItem */ 	
	public function getVtaNotaDebitoXVtaNotaDebitoItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaNotaDebitosXVtaNotaDebitoItem($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaReciboItems */ 	
	public function getVtaReciboItems($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaReciboItem::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaReciboItem::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaReciboItem::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaReciboItem::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaReciboItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaReciboItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaReciboItem::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaReciboItem::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtareciboitems = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtareciboitem = VtaReciboItem::hidratarObjeto($fila);			
                $vtareciboitems[] = $vtareciboitem;
            }

            return $vtareciboitems;
	}	
	

	/* Método getVtaReciboItemsBloque para MasInfo */ 	
	public function getVtaReciboItemsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaReciboItems($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaReciboItems Habilitados */ 	
	public function getVtaReciboItemsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaReciboItems($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaReciboItem */ 	
	public function getVtaReciboItem($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaReciboItems($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaReciboItem relacionadas */ 	
	public function deleteVtaReciboItems(){
            $obs = $this->getVtaReciboItems();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaReciboItemsCmb() VtaReciboItem relacionadas */ 	
	public function getVtaReciboItemsCmb(){
            $c = new Criterio();
            $c->add(VtaReciboItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaReciboItem::GEN_TABLA);
            $c->setCriterios();

            $os = VtaReciboItem::getVtaReciboItemsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaRecibos (Coleccion) relacionados a traves de VtaReciboItem */ 	
	public function getVtaRecibosXVtaReciboItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaReciboItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaReciboItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->addRealJoin(VtaReciboItem::GEN_TABLA, VtaReciboItem::GEN_ATTR_VTA_RECIBO_ID, VtaRecibo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaRecibo::getVtaRecibos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaRecibos relacionados a traves de VtaReciboItem */ 	
	public function getCantidadVtaRecibosXVtaReciboItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaRecibo::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaReciboItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaReciboItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->addRealJoin(VtaReciboItem::GEN_TABLA, VtaReciboItem::GEN_ATTR_VTA_RECIBO_ID, VtaRecibo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaRecibo::getVtaRecibos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaRecibo (Objeto) relacionado a traves de VtaReciboItem */ 	
	public function getVtaReciboXVtaReciboItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaRecibosXVtaReciboItem($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaOrdenVentas */ 	
	public function getVtaOrdenVentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaOrdenVenta::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaOrdenVenta::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaOrdenVenta::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaOrdenVenta::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaOrdenVenta::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaOrdenVenta::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaOrdenVenta::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaordenventas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaordenventa = VtaOrdenVenta::hidratarObjeto($fila);			
                $vtaordenventas[] = $vtaordenventa;
            }

            return $vtaordenventas;
	}	
	

	/* Método getVtaOrdenVentasBloque para MasInfo */ 	
	public function getVtaOrdenVentasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaOrdenVentas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaOrdenVentas Habilitados */ 	
	public function getVtaOrdenVentasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaOrdenVentas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaOrdenVenta */ 	
	public function getVtaOrdenVenta($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaOrdenVentas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaOrdenVenta relacionadas */ 	
	public function deleteVtaOrdenVentas(){
            $obs = $this->getVtaOrdenVentas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaOrdenVentasCmb() VtaOrdenVenta relacionadas */ 	
	public function getVtaOrdenVentasCmb(){
            $c = new Criterio();
            $c->add(VtaOrdenVenta::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();

            $os = VtaOrdenVenta::getVtaOrdenVentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaPresupuestos (Coleccion) relacionados a traves de VtaOrdenVenta */ 	
	public function getVtaPresupuestosXVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaOrdenVenta::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addRealJoin(VtaOrdenVenta::GEN_TABLA, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID, VtaPresupuesto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPresupuesto::getVtaPresupuestos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaPresupuestos relacionados a traves de VtaOrdenVenta */ 	
	public function getCantidadVtaPresupuestosXVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaPresupuesto::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaOrdenVenta::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addRealJoin(VtaOrdenVenta::GEN_TABLA, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID, VtaPresupuesto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPresupuesto::getVtaPresupuestos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaPresupuesto (Objeto) relacionado a traves de VtaOrdenVenta */ 	
	public function getVtaPresupuestoXVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaPresupuestosXVtaOrdenVenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaFacturaItems */ 	
	public function getVtaFacturaItems($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaFacturaItem::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaFacturaItem::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaFacturaItem::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaFacturaItem::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaFacturaItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaFacturaItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaFacturaItem::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaFacturaItem::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtafacturaitems = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtafacturaitem = VtaFacturaItem::hidratarObjeto($fila);			
                $vtafacturaitems[] = $vtafacturaitem;
            }

            return $vtafacturaitems;
	}	
	

	/* Método getVtaFacturaItemsBloque para MasInfo */ 	
	public function getVtaFacturaItemsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaFacturaItems($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaFacturaItems Habilitados */ 	
	public function getVtaFacturaItemsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaFacturaItems($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaFacturaItem */ 	
	public function getVtaFacturaItem($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaFacturaItems($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaFacturaItem relacionadas */ 	
	public function deleteVtaFacturaItems(){
            $obs = $this->getVtaFacturaItems();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaFacturaItemsCmb() VtaFacturaItem relacionadas */ 	
	public function getVtaFacturaItemsCmb(){
            $c = new Criterio();
            $c->add(VtaFacturaItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFacturaItem::GEN_TABLA);
            $c->setCriterios();

            $os = VtaFacturaItem::getVtaFacturaItemsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaFacturas (Coleccion) relacionados a traves de VtaFacturaItem */ 	
	public function getVtaFacturasXVtaFacturaItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addRealJoin(VtaFacturaItem::GEN_TABLA, VtaFacturaItem::GEN_ATTR_VTA_FACTURA_ID, VtaFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaFactura::getVtaFacturas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaFacturas relacionados a traves de VtaFacturaItem */ 	
	public function getCantidadVtaFacturasXVtaFacturaItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaFactura::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addRealJoin(VtaFacturaItem::GEN_TABLA, VtaFacturaItem::GEN_ATTR_VTA_FACTURA_ID, VtaFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaFactura::getVtaFacturas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaFactura (Objeto) relacionado a traves de VtaFacturaItem */ 	
	public function getVtaFacturaXVtaFacturaItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaFacturasXVtaFacturaItem($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaFacturaVtaOrdenVentas */ 	
	public function getVtaFacturaVtaOrdenVentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaFacturaVtaOrdenVenta::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaFacturaVtaOrdenVenta::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaFacturaVtaOrdenVenta::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaFacturaVtaOrdenVenta::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaFacturaVtaOrdenVenta::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtafacturavtaordenventas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtafacturavtaordenventa = VtaFacturaVtaOrdenVenta::hidratarObjeto($fila);			
                $vtafacturavtaordenventas[] = $vtafacturavtaordenventa;
            }

            return $vtafacturavtaordenventas;
	}	
	

	/* Método getVtaFacturaVtaOrdenVentasBloque para MasInfo */ 	
	public function getVtaFacturaVtaOrdenVentasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaFacturaVtaOrdenVentas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaFacturaVtaOrdenVentas Habilitados */ 	
	public function getVtaFacturaVtaOrdenVentasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaFacturaVtaOrdenVentas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaFacturaVtaOrdenVenta */ 	
	public function getVtaFacturaVtaOrdenVenta($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaFacturaVtaOrdenVentas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaFacturaVtaOrdenVenta relacionadas */ 	
	public function deleteVtaFacturaVtaOrdenVentas(){
            $obs = $this->getVtaFacturaVtaOrdenVentas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaFacturaVtaOrdenVentasCmb() VtaFacturaVtaOrdenVenta relacionadas */ 	
	public function getVtaFacturaVtaOrdenVentasCmb(){
            $c = new Criterio();
            $c->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFacturaVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();

            $os = VtaFacturaVtaOrdenVenta::getVtaFacturaVtaOrdenVentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaFacturas (Coleccion) relacionados a traves de VtaFacturaVtaOrdenVenta */ 	
	public function getVtaFacturasXVtaFacturaVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addRealJoin(VtaFacturaVtaOrdenVenta::GEN_TABLA, VtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_FACTURA_ID, VtaFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaFactura::getVtaFacturas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaFacturas relacionados a traves de VtaFacturaVtaOrdenVenta */ 	
	public function getCantidadVtaFacturasXVtaFacturaVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaFactura::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addRealJoin(VtaFacturaVtaOrdenVenta::GEN_TABLA, VtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_FACTURA_ID, VtaFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaFactura::getVtaFacturas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaFactura (Objeto) relacionado a traves de VtaFacturaVtaOrdenVenta */ 	
	public function getVtaFacturaXVtaFacturaVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaFacturasXVtaFacturaVtaOrdenVenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeOcAgrupacionItems */ 	
	public function getPdeOcAgrupacionItems($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeOcAgrupacionItem::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeOcAgrupacionItem::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeOcAgrupacionItem::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeOcAgrupacionItem::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeOcAgrupacionItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeOcAgrupacionItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeOcAgrupacionItem::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeOcAgrupacionItem::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdeocagrupacionitems = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdeocagrupacionitem = PdeOcAgrupacionItem::hidratarObjeto($fila);			
                $pdeocagrupacionitems[] = $pdeocagrupacionitem;
            }

            return $pdeocagrupacionitems;
	}	
	

	/* Método getPdeOcAgrupacionItemsBloque para MasInfo */ 	
	public function getPdeOcAgrupacionItemsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeOcAgrupacionItems($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeOcAgrupacionItems Habilitados */ 	
	public function getPdeOcAgrupacionItemsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeOcAgrupacionItems($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeOcAgrupacionItem */ 	
	public function getPdeOcAgrupacionItem($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeOcAgrupacionItems($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeOcAgrupacionItem relacionadas */ 	
	public function deletePdeOcAgrupacionItems(){
            $obs = $this->getPdeOcAgrupacionItems();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeOcAgrupacionItemsCmb() PdeOcAgrupacionItem relacionadas */ 	
	public function getPdeOcAgrupacionItemsCmb(){
            $c = new Criterio();
            $c->add(PdeOcAgrupacionItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcAgrupacionItem::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOcAgrupacionItem::getPdeOcAgrupacionItemsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeOcAgrupacions (Coleccion) relacionados a traves de PdeOcAgrupacionItem */ 	
	public function getPdeOcAgrupacionsXPdeOcAgrupacionItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeOcAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOcAgrupacionItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOcAgrupacionItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcAgrupacion::GEN_TABLA);
            $c->addRealJoin(PdeOcAgrupacionItem::GEN_TABLA, PdeOcAgrupacionItem::GEN_ATTR_PDE_OC_AGRUPACION_ID, PdeOcAgrupacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOcAgrupacion::getPdeOcAgrupacions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeOcAgrupacions relacionados a traves de PdeOcAgrupacionItem */ 	
	public function getCantidadPdeOcAgrupacionsXPdeOcAgrupacionItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeOcAgrupacion::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeOcAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOcAgrupacionItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOcAgrupacionItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcAgrupacion::GEN_TABLA);
            $c->addRealJoin(PdeOcAgrupacionItem::GEN_TABLA, PdeOcAgrupacionItem::GEN_ATTR_PDE_OC_AGRUPACION_ID, PdeOcAgrupacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOcAgrupacion::getPdeOcAgrupacions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeOcAgrupacion (Objeto) relacionado a traves de PdeOcAgrupacionItem */ 	
	public function getPdeOcAgrupacionXPdeOcAgrupacionItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeOcAgrupacionsXPdeOcAgrupacionItem($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(PdeOc::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(PdeOc::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOc::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOc::getPdeOcsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdePedidos (Coleccion) relacionados a traves de PdeOc */ 	
	public function getPdePedidosXPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdePedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOc::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdePedido::GEN_TABLA);
            $c->addRealJoin(PdeOc::GEN_TABLA, PdeOc::GEN_ATTR_PDE_PEDIDO_ID, PdePedido::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdePedido::getPdePedidos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdePedidos relacionados a traves de PdeOc */ 	
	public function getCantidadPdePedidosXPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdePedido::GEN_ATTR_ID);
            if($estado){
                $c->add(PdePedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOc::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdePedido::GEN_TABLA);
            $c->addRealJoin(PdeOc::GEN_TABLA, PdeOc::GEN_ATTR_PDE_PEDIDO_ID, PdePedido::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdePedido::getPdePedidos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdePedido (Objeto) relacionado a traves de PdeOc */ 	
	public function getPdePedidoXPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdePedidosXPdeOc($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeFacturaItems */ 	
	public function getPdeFacturaItems($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeFacturaItem::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeFacturaItem::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeFacturaItem::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeFacturaItem::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeFacturaItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeFacturaItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeFacturaItem::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeFacturaItem::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdefacturaitems = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdefacturaitem = PdeFacturaItem::hidratarObjeto($fila);			
                $pdefacturaitems[] = $pdefacturaitem;
            }

            return $pdefacturaitems;
	}	
	

	/* Método getPdeFacturaItemsBloque para MasInfo */ 	
	public function getPdeFacturaItemsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeFacturaItems($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeFacturaItems Habilitados */ 	
	public function getPdeFacturaItemsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeFacturaItems($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeFacturaItem */ 	
	public function getPdeFacturaItem($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeFacturaItems($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeFacturaItem relacionadas */ 	
	public function deletePdeFacturaItems(){
            $obs = $this->getPdeFacturaItems();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeFacturaItemsCmb() PdeFacturaItem relacionadas */ 	
	public function getPdeFacturaItemsCmb(){
            $c = new Criterio();
            $c->add(PdeFacturaItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFacturaItem::GEN_TABLA);
            $c->setCriterios();

            $os = PdeFacturaItem::getPdeFacturaItemsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeFacturas (Coleccion) relacionados a traves de PdeFacturaItem */ 	
	public function getPdeFacturasXPdeFacturaItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addRealJoin(PdeFacturaItem::GEN_TABLA, PdeFacturaItem::GEN_ATTR_PDE_FACTURA_ID, PdeFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFactura::getPdeFacturas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeFacturas relacionados a traves de PdeFacturaItem */ 	
	public function getCantidadPdeFacturasXPdeFacturaItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeFactura::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addRealJoin(PdeFacturaItem::GEN_TABLA, PdeFacturaItem::GEN_ATTR_PDE_FACTURA_ID, PdeFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFactura::getPdeFacturas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeFactura (Objeto) relacionado a traves de PdeFacturaItem */ 	
	public function getPdeFacturaXPdeFacturaItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeFacturasXPdeFacturaItem($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeFacturaPdeOcs */ 	
	public function getPdeFacturaPdeOcs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeFacturaPdeOc::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeFacturaPdeOc::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeFacturaPdeOc::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeFacturaPdeOc::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeFacturaPdeOc::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeFacturaPdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeFacturaPdeOc::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeFacturaPdeOc::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdefacturapdeocs = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdefacturapdeoc = PdeFacturaPdeOc::hidratarObjeto($fila);			
                $pdefacturapdeocs[] = $pdefacturapdeoc;
            }

            return $pdefacturapdeocs;
	}	
	

	/* Método getPdeFacturaPdeOcsBloque para MasInfo */ 	
	public function getPdeFacturaPdeOcsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeFacturaPdeOcs($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeFacturaPdeOcs Habilitados */ 	
	public function getPdeFacturaPdeOcsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeFacturaPdeOcs($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeFacturaPdeOc */ 	
	public function getPdeFacturaPdeOc($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeFacturaPdeOcs($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeFacturaPdeOc relacionadas */ 	
	public function deletePdeFacturaPdeOcs(){
            $obs = $this->getPdeFacturaPdeOcs();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeFacturaPdeOcsCmb() PdeFacturaPdeOc relacionadas */ 	
	public function getPdeFacturaPdeOcsCmb(){
            $c = new Criterio();
            $c->add(PdeFacturaPdeOc::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFacturaPdeOc::GEN_TABLA);
            $c->setCriterios();

            $os = PdeFacturaPdeOc::getPdeFacturaPdeOcsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeFacturas (Coleccion) relacionados a traves de PdeFacturaPdeOc */ 	
	public function getPdeFacturasXPdeFacturaPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaPdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaPdeOc::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addRealJoin(PdeFacturaPdeOc::GEN_TABLA, PdeFacturaPdeOc::GEN_ATTR_PDE_FACTURA_ID, PdeFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFactura::getPdeFacturas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeFacturas relacionados a traves de PdeFacturaPdeOc */ 	
	public function getCantidadPdeFacturasXPdeFacturaPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeFactura::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaPdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaPdeOc::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addRealJoin(PdeFacturaPdeOc::GEN_TABLA, PdeFacturaPdeOc::GEN_ATTR_PDE_FACTURA_ID, PdeFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFactura::getPdeFacturas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeFactura (Objeto) relacionado a traves de PdeFacturaPdeOc */ 	
	public function getPdeFacturaXPdeFacturaPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeFacturasXPdeFacturaPdeOc($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeFacturaPdeRecepcions */ 	
	public function getPdeFacturaPdeRecepcions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeFacturaPdeRecepcion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeFacturaPdeRecepcion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeFacturaPdeRecepcion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeFacturaPdeRecepcion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeFacturaPdeRecepcion::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeFacturaPdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeFacturaPdeRecepcion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeFacturaPdeRecepcion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdefacturapderecepcions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdefacturapderecepcion = PdeFacturaPdeRecepcion::hidratarObjeto($fila);			
                $pdefacturapderecepcions[] = $pdefacturapderecepcion;
            }

            return $pdefacturapderecepcions;
	}	
	

	/* Método getPdeFacturaPdeRecepcionsBloque para MasInfo */ 	
	public function getPdeFacturaPdeRecepcionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeFacturaPdeRecepcions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeFacturaPdeRecepcions Habilitados */ 	
	public function getPdeFacturaPdeRecepcionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeFacturaPdeRecepcions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeFacturaPdeRecepcion */ 	
	public function getPdeFacturaPdeRecepcion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeFacturaPdeRecepcions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeFacturaPdeRecepcion relacionadas */ 	
	public function deletePdeFacturaPdeRecepcions(){
            $obs = $this->getPdeFacturaPdeRecepcions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeFacturaPdeRecepcionsCmb() PdeFacturaPdeRecepcion relacionadas */ 	
	public function getPdeFacturaPdeRecepcionsCmb(){
            $c = new Criterio();
            $c->add(PdeFacturaPdeRecepcion::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFacturaPdeRecepcion::GEN_TABLA);
            $c->setCriterios();

            $os = PdeFacturaPdeRecepcion::getPdeFacturaPdeRecepcionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeFacturas (Coleccion) relacionados a traves de PdeFacturaPdeRecepcion */ 	
	public function getPdeFacturasXPdeFacturaPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaPdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaPdeRecepcion::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addRealJoin(PdeFacturaPdeRecepcion::GEN_TABLA, PdeFacturaPdeRecepcion::GEN_ATTR_PDE_FACTURA_ID, PdeFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFactura::getPdeFacturas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeFacturas relacionados a traves de PdeFacturaPdeRecepcion */ 	
	public function getCantidadPdeFacturasXPdeFacturaPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeFactura::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaPdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaPdeRecepcion::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addRealJoin(PdeFacturaPdeRecepcion::GEN_TABLA, PdeFacturaPdeRecepcion::GEN_ATTR_PDE_FACTURA_ID, PdeFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFactura::getPdeFacturas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeFactura (Objeto) relacionado a traves de PdeFacturaPdeRecepcion */ 	
	public function getPdeFacturaXPdeFacturaPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeFacturasXPdeFacturaPdeRecepcion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeNotaCreditoPdeFacturaPdeRecepcions */ 	
	public function getPdeNotaCreditoPdeFacturaPdeRecepcions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeNotaCreditoPdeFacturaPdeRecepcion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeNotaCreditoPdeFacturaPdeRecepcion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdenotacreditopdefacturapderecepcions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdenotacreditopdefacturapderecepcion = PdeNotaCreditoPdeFacturaPdeRecepcion::hidratarObjeto($fila);			
                $pdenotacreditopdefacturapderecepcions[] = $pdenotacreditopdefacturapderecepcion;
            }

            return $pdenotacreditopdefacturapderecepcions;
	}	
	

	/* Método getPdeNotaCreditoPdeFacturaPdeRecepcionsBloque para MasInfo */ 	
	public function getPdeNotaCreditoPdeFacturaPdeRecepcionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeNotaCreditoPdeFacturaPdeRecepcions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeNotaCreditoPdeFacturaPdeRecepcions Habilitados */ 	
	public function getPdeNotaCreditoPdeFacturaPdeRecepcionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeNotaCreditoPdeFacturaPdeRecepcions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeNotaCreditoPdeFacturaPdeRecepcion */ 	
	public function getPdeNotaCreditoPdeFacturaPdeRecepcion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeNotaCreditoPdeFacturaPdeRecepcions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeNotaCreditoPdeFacturaPdeRecepcion relacionadas */ 	
	public function deletePdeNotaCreditoPdeFacturaPdeRecepcions(){
            $obs = $this->getPdeNotaCreditoPdeFacturaPdeRecepcions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeNotaCreditoPdeFacturaPdeRecepcionsCmb() PdeNotaCreditoPdeFacturaPdeRecepcion relacionadas */ 	
	public function getPdeNotaCreditoPdeFacturaPdeRecepcionsCmb(){
            $c = new Criterio();
            $c->add(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaCreditoPdeFacturaPdeRecepcion::getPdeNotaCreditoPdeFacturaPdeRecepcionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeNotaCreditos (Coleccion) relacionados a traves de PdeNotaCreditoPdeFacturaPdeRecepcion */ 	
	public function getPdeNotaCreditosXPdeNotaCreditoPdeFacturaPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->addRealJoin(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_TABLA, PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_PDE_NOTA_CREDITO_ID, PdeNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeNotaCredito::getPdeNotaCreditos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeNotaCreditos relacionados a traves de PdeNotaCreditoPdeFacturaPdeRecepcion */ 	
	public function getCantidadPdeNotaCreditosXPdeNotaCreditoPdeFacturaPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeNotaCredito::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->addRealJoin(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_TABLA, PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_PDE_NOTA_CREDITO_ID, PdeNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeNotaCredito::getPdeNotaCreditos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeNotaCredito (Objeto) relacionado a traves de PdeNotaCreditoPdeFacturaPdeRecepcion */ 	
	public function getPdeNotaCreditoXPdeNotaCreditoPdeFacturaPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeNotaCreditosXPdeNotaCreditoPdeFacturaPdeRecepcion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeNotaCreditoPdeFacturaPdeOcs */ 	
	public function getPdeNotaCreditoPdeFacturaPdeOcs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeNotaCreditoPdeFacturaPdeOc::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeNotaCreditoPdeFacturaPdeOc::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeNotaCreditoPdeFacturaPdeOc::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeNotaCreditoPdeFacturaPdeOc::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdenotacreditopdefacturapdeocs = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdenotacreditopdefacturapdeoc = PdeNotaCreditoPdeFacturaPdeOc::hidratarObjeto($fila);			
                $pdenotacreditopdefacturapdeocs[] = $pdenotacreditopdefacturapdeoc;
            }

            return $pdenotacreditopdefacturapdeocs;
	}	
	

	/* Método getPdeNotaCreditoPdeFacturaPdeOcsBloque para MasInfo */ 	
	public function getPdeNotaCreditoPdeFacturaPdeOcsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeNotaCreditoPdeFacturaPdeOcs($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeNotaCreditoPdeFacturaPdeOcs Habilitados */ 	
	public function getPdeNotaCreditoPdeFacturaPdeOcsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeNotaCreditoPdeFacturaPdeOcs($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeNotaCreditoPdeFacturaPdeOc */ 	
	public function getPdeNotaCreditoPdeFacturaPdeOc($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeNotaCreditoPdeFacturaPdeOcs($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeNotaCreditoPdeFacturaPdeOc relacionadas */ 	
	public function deletePdeNotaCreditoPdeFacturaPdeOcs(){
            $obs = $this->getPdeNotaCreditoPdeFacturaPdeOcs();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeNotaCreditoPdeFacturaPdeOcsCmb() PdeNotaCreditoPdeFacturaPdeOc relacionadas */ 	
	public function getPdeNotaCreditoPdeFacturaPdeOcsCmb(){
            $c = new Criterio();
            $c->add(PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCreditoPdeFacturaPdeOc::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaCreditoPdeFacturaPdeOc::getPdeNotaCreditoPdeFacturaPdeOcsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeNotaCreditos (Coleccion) relacionados a traves de PdeNotaCreditoPdeFacturaPdeOc */ 	
	public function getPdeNotaCreditosXPdeNotaCreditoPdeFacturaPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->addRealJoin(PdeNotaCreditoPdeFacturaPdeOc::GEN_TABLA, PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_PDE_NOTA_CREDITO_ID, PdeNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeNotaCredito::getPdeNotaCreditos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeNotaCreditos relacionados a traves de PdeNotaCreditoPdeFacturaPdeOc */ 	
	public function getCantidadPdeNotaCreditosXPdeNotaCreditoPdeFacturaPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeNotaCredito::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->addRealJoin(PdeNotaCreditoPdeFacturaPdeOc::GEN_TABLA, PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_PDE_NOTA_CREDITO_ID, PdeNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeNotaCredito::getPdeNotaCreditos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeNotaCredito (Objeto) relacionado a traves de PdeNotaCreditoPdeFacturaPdeOc */ 	
	public function getPdeNotaCreditoXPdeNotaCreditoPdeFacturaPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeNotaCreditosXPdeNotaCreditoPdeFacturaPdeOc($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeNotaCreditoItems */ 	
	public function getPdeNotaCreditoItems($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeNotaCreditoItem::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeNotaCreditoItem::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeNotaCreditoItem::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeNotaCreditoItem::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeNotaCreditoItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeNotaCreditoItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeNotaCreditoItem::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeNotaCreditoItem::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdenotacreditoitems = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdenotacreditoitem = PdeNotaCreditoItem::hidratarObjeto($fila);			
                $pdenotacreditoitems[] = $pdenotacreditoitem;
            }

            return $pdenotacreditoitems;
	}	
	

	/* Método getPdeNotaCreditoItemsBloque para MasInfo */ 	
	public function getPdeNotaCreditoItemsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeNotaCreditoItems($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeNotaCreditoItems Habilitados */ 	
	public function getPdeNotaCreditoItemsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeNotaCreditoItems($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeNotaCreditoItem */ 	
	public function getPdeNotaCreditoItem($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeNotaCreditoItems($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeNotaCreditoItem relacionadas */ 	
	public function deletePdeNotaCreditoItems(){
            $obs = $this->getPdeNotaCreditoItems();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeNotaCreditoItemsCmb() PdeNotaCreditoItem relacionadas */ 	
	public function getPdeNotaCreditoItemsCmb(){
            $c = new Criterio();
            $c->add(PdeNotaCreditoItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCreditoItem::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaCreditoItem::getPdeNotaCreditoItemsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeNotaCreditos (Coleccion) relacionados a traves de PdeNotaCreditoItem */ 	
	public function getPdeNotaCreditosXPdeNotaCreditoItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaCreditoItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaCreditoItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->addRealJoin(PdeNotaCreditoItem::GEN_TABLA, PdeNotaCreditoItem::GEN_ATTR_PDE_NOTA_CREDITO_ID, PdeNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeNotaCredito::getPdeNotaCreditos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeNotaCreditos relacionados a traves de PdeNotaCreditoItem */ 	
	public function getCantidadPdeNotaCreditosXPdeNotaCreditoItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeNotaCredito::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaCreditoItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaCreditoItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->addRealJoin(PdeNotaCreditoItem::GEN_TABLA, PdeNotaCreditoItem::GEN_ATTR_PDE_NOTA_CREDITO_ID, PdeNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeNotaCredito::getPdeNotaCreditos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeNotaCredito (Objeto) relacionado a traves de PdeNotaCreditoItem */ 	
	public function getPdeNotaCreditoXPdeNotaCreditoItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeNotaCreditosXPdeNotaCreditoItem($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeNotaDebitoItems */ 	
	public function getPdeNotaDebitoItems($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeNotaDebitoItem::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeNotaDebitoItem::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeNotaDebitoItem::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeNotaDebitoItem::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeNotaDebitoItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeNotaDebitoItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeNotaDebitoItem::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeNotaDebitoItem::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdenotadebitoitems = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdenotadebitoitem = PdeNotaDebitoItem::hidratarObjeto($fila);			
                $pdenotadebitoitems[] = $pdenotadebitoitem;
            }

            return $pdenotadebitoitems;
	}	
	

	/* Método getPdeNotaDebitoItemsBloque para MasInfo */ 	
	public function getPdeNotaDebitoItemsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeNotaDebitoItems($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeNotaDebitoItems Habilitados */ 	
	public function getPdeNotaDebitoItemsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeNotaDebitoItems($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeNotaDebitoItem */ 	
	public function getPdeNotaDebitoItem($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeNotaDebitoItems($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeNotaDebitoItem relacionadas */ 	
	public function deletePdeNotaDebitoItems(){
            $obs = $this->getPdeNotaDebitoItems();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeNotaDebitoItemsCmb() PdeNotaDebitoItem relacionadas */ 	
	public function getPdeNotaDebitoItemsCmb(){
            $c = new Criterio();
            $c->add(PdeNotaDebitoItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaDebitoItem::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaDebitoItem::getPdeNotaDebitoItemsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeNotaDebitos (Coleccion) relacionados a traves de PdeNotaDebitoItem */ 	
	public function getPdeNotaDebitosXPdeNotaDebitoItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaDebitoItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaDebitoItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaDebito::GEN_TABLA);
            $c->addRealJoin(PdeNotaDebitoItem::GEN_TABLA, PdeNotaDebitoItem::GEN_ATTR_PDE_NOTA_DEBITO_ID, PdeNotaDebito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeNotaDebito::getPdeNotaDebitos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeNotaDebitos relacionados a traves de PdeNotaDebitoItem */ 	
	public function getCantidadPdeNotaDebitosXPdeNotaDebitoItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeNotaDebito::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaDebitoItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaDebitoItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaDebito::GEN_TABLA);
            $c->addRealJoin(PdeNotaDebitoItem::GEN_TABLA, PdeNotaDebitoItem::GEN_ATTR_PDE_NOTA_DEBITO_ID, PdeNotaDebito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeNotaDebito::getPdeNotaDebitos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeNotaDebito (Objeto) relacionado a traves de PdeNotaDebitoItem */ 	
	public function getPdeNotaDebitoXPdeNotaDebitoItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeNotaDebitosXPdeNotaDebitoItem($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeReciboItems */ 	
	public function getPdeReciboItems($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeReciboItem::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeReciboItem::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeReciboItem::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeReciboItem::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeReciboItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeReciboItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeReciboItem::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeReciboItem::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdereciboitems = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdereciboitem = PdeReciboItem::hidratarObjeto($fila);			
                $pdereciboitems[] = $pdereciboitem;
            }

            return $pdereciboitems;
	}	
	

	/* Método getPdeReciboItemsBloque para MasInfo */ 	
	public function getPdeReciboItemsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeReciboItems($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeReciboItems Habilitados */ 	
	public function getPdeReciboItemsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeReciboItems($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeReciboItem */ 	
	public function getPdeReciboItem($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeReciboItems($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeReciboItem relacionadas */ 	
	public function deletePdeReciboItems(){
            $obs = $this->getPdeReciboItems();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeReciboItemsCmb() PdeReciboItem relacionadas */ 	
	public function getPdeReciboItemsCmb(){
            $c = new Criterio();
            $c->add(PdeReciboItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeReciboItem::GEN_TABLA);
            $c->setCriterios();

            $os = PdeReciboItem::getPdeReciboItemsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeRecibos (Coleccion) relacionados a traves de PdeReciboItem */ 	
	public function getPdeRecibosXPdeReciboItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeReciboItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeReciboItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeRecibo::GEN_TABLA);
            $c->addRealJoin(PdeReciboItem::GEN_TABLA, PdeReciboItem::GEN_ATTR_PDE_RECIBO_ID, PdeRecibo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeRecibo::getPdeRecibos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeRecibos relacionados a traves de PdeReciboItem */ 	
	public function getCantidadPdeRecibosXPdeReciboItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeRecibo::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeReciboItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeReciboItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeRecibo::GEN_TABLA);
            $c->addRealJoin(PdeReciboItem::GEN_TABLA, PdeReciboItem::GEN_ATTR_PDE_RECIBO_ID, PdeRecibo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeRecibo::getPdeRecibos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeRecibo (Objeto) relacionado a traves de PdeReciboItem */ 	
	public function getPdeReciboXPdeReciboItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeRecibosXPdeReciboItem($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteDebeVtaOrdenVentas */ 	
	public function getVtaAjusteDebeVtaOrdenVentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteDebeVtaOrdenVenta::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteDebeVtaOrdenVenta::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteDebeVtaOrdenVenta::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteDebeVtaOrdenVenta::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustedebevtaordenventas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustedebevtaordenventa = VtaAjusteDebeVtaOrdenVenta::hidratarObjeto($fila);			
                $vtaajustedebevtaordenventas[] = $vtaajustedebevtaordenventa;
            }

            return $vtaajustedebevtaordenventas;
	}	
	

	/* Método getVtaAjusteDebeVtaOrdenVentasBloque para MasInfo */ 	
	public function getVtaAjusteDebeVtaOrdenVentasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteDebeVtaOrdenVentas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteDebeVtaOrdenVentas Habilitados */ 	
	public function getVtaAjusteDebeVtaOrdenVentasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteDebeVtaOrdenVentas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteDebeVtaOrdenVenta */ 	
	public function getVtaAjusteDebeVtaOrdenVenta($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteDebeVtaOrdenVentas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteDebeVtaOrdenVenta relacionadas */ 	
	public function deleteVtaAjusteDebeVtaOrdenVentas(){
            $obs = $this->getVtaAjusteDebeVtaOrdenVentas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteDebeVtaOrdenVentasCmb() VtaAjusteDebeVtaOrdenVenta relacionadas */ 	
	public function getVtaAjusteDebeVtaOrdenVentasCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebeVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteDebeVtaOrdenVenta::getVtaAjusteDebeVtaOrdenVentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaAjusteDebes (Coleccion) relacionados a traves de VtaAjusteDebeVtaOrdenVenta */ 	
	public function getVtaAjusteDebesXVtaAjusteDebeVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeVtaOrdenVenta::GEN_TABLA, VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_VTA_AJUSTE_DEBE_ID, VtaAjusteDebe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebe::getVtaAjusteDebes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaAjusteDebes relacionados a traves de VtaAjusteDebeVtaOrdenVenta */ 	
	public function getCantidadVtaAjusteDebesXVtaAjusteDebeVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaAjusteDebe::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeVtaOrdenVenta::GEN_TABLA, VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_VTA_AJUSTE_DEBE_ID, VtaAjusteDebe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebe::getVtaAjusteDebes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaAjusteDebe (Objeto) relacionado a traves de VtaAjusteDebeVtaOrdenVenta */ 	
	public function getVtaAjusteDebeXVtaAjusteDebeVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaAjusteDebesXVtaAjusteDebeVtaOrdenVenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteDebeItems */ 	
	public function getVtaAjusteDebeItems($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteDebeItem::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteDebeItem::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteDebeItem::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteDebeItem::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteDebeItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteDebeItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteDebeItem::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteDebeItem::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustedebeitems = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustedebeitem = VtaAjusteDebeItem::hidratarObjeto($fila);			
                $vtaajustedebeitems[] = $vtaajustedebeitem;
            }

            return $vtaajustedebeitems;
	}	
	

	/* Método getVtaAjusteDebeItemsBloque para MasInfo */ 	
	public function getVtaAjusteDebeItemsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteDebeItems($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteDebeItems Habilitados */ 	
	public function getVtaAjusteDebeItemsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteDebeItems($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteDebeItem */ 	
	public function getVtaAjusteDebeItem($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteDebeItems($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteDebeItem relacionadas */ 	
	public function deleteVtaAjusteDebeItems(){
            $obs = $this->getVtaAjusteDebeItems();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteDebeItemsCmb() VtaAjusteDebeItem relacionadas */ 	
	public function getVtaAjusteDebeItemsCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteDebeItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebeItem::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteDebeItem::getVtaAjusteDebeItemsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaAjusteDebes (Coleccion) relacionados a traves de VtaAjusteDebeItem */ 	
	public function getVtaAjusteDebesXVtaAjusteDebeItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeItem::GEN_TABLA, VtaAjusteDebeItem::GEN_ATTR_VTA_AJUSTE_DEBE_ID, VtaAjusteDebe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebe::getVtaAjusteDebes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaAjusteDebes relacionados a traves de VtaAjusteDebeItem */ 	
	public function getCantidadVtaAjusteDebesXVtaAjusteDebeItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaAjusteDebe::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeItem::GEN_TABLA, VtaAjusteDebeItem::GEN_ATTR_VTA_AJUSTE_DEBE_ID, VtaAjusteDebe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebe::getVtaAjusteDebes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaAjusteDebe (Objeto) relacionado a traves de VtaAjusteDebeItem */ 	
	public function getVtaAjusteDebeXVtaAjusteDebeItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaAjusteDebesXVtaAjusteDebeItem($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteHaberItems */ 	
	public function getVtaAjusteHaberItems($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteHaberItem::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteHaberItem::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteHaberItem::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteHaberItem::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteHaberItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteHaberItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteHaberItem::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteHaberItem::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustehaberitems = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustehaberitem = VtaAjusteHaberItem::hidratarObjeto($fila);			
                $vtaajustehaberitems[] = $vtaajustehaberitem;
            }

            return $vtaajustehaberitems;
	}	
	

	/* Método getVtaAjusteHaberItemsBloque para MasInfo */ 	
	public function getVtaAjusteHaberItemsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteHaberItems($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteHaberItems Habilitados */ 	
	public function getVtaAjusteHaberItemsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteHaberItems($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteHaberItem */ 	
	public function getVtaAjusteHaberItem($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteHaberItems($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteHaberItem relacionadas */ 	
	public function deleteVtaAjusteHaberItems(){
            $obs = $this->getVtaAjusteHaberItems();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteHaberItemsCmb() VtaAjusteHaberItem relacionadas */ 	
	public function getVtaAjusteHaberItemsCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteHaberItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaberItem::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteHaberItem::getVtaAjusteHaberItemsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaAjusteHabers (Coleccion) relacionados a traves de VtaAjusteHaberItem */ 	
	public function getVtaAjusteHabersXVtaAjusteHaberItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaberItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaberItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaberItem::GEN_TABLA, VtaAjusteHaberItem::GEN_ATTR_VTA_AJUSTE_HABER_ID, VtaAjusteHaber::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteHaber::getVtaAjusteHabers($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaAjusteHabers relacionados a traves de VtaAjusteHaberItem */ 	
	public function getCantidadVtaAjusteHabersXVtaAjusteHaberItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaAjusteHaber::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaberItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaberItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaberItem::GEN_TABLA, VtaAjusteHaberItem::GEN_ATTR_VTA_AJUSTE_HABER_ID, VtaAjusteHaber::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteHaber::getVtaAjusteHabers($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaAjusteHaber (Objeto) relacionado a traves de VtaAjusteHaberItem */ 	
	public function getVtaAjusteHaberXVtaAjusteHaberItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaAjusteHabersXVtaAjusteHaberItem($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentas */ 	
	public function getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustehabervtaajustedebevtaordenventas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustehabervtaajustedebevtaordenventa = VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::hidratarObjeto($fila);			
                $vtaajustehabervtaajustedebevtaordenventas[] = $vtaajustehabervtaajustedebevtaordenventa;
            }

            return $vtaajustehabervtaajustedebevtaordenventas;
	}	
	

	/* Método getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentasBloque para MasInfo */ 	
	public function getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentas Habilitados */ 	
	public function getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteHaberVtaAjusteDebeVtaOrdenVenta */ 	
	public function getVtaAjusteHaberVtaAjusteDebeVtaOrdenVenta($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta relacionadas */ 	
	public function deleteVtaAjusteHaberVtaAjusteDebeVtaOrdenVentas(){
            $obs = $this->getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentasCmb() VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta relacionadas */ 	
	public function getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentasCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaAjusteHabers (Coleccion) relacionados a traves de VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta */ 	
	public function getVtaAjusteHabersXVtaAjusteHaberVtaAjusteDebeVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_TABLA, VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_VTA_AJUSTE_HABER_ID, VtaAjusteHaber::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteHaber::getVtaAjusteHabers($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaAjusteHabers relacionados a traves de VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta */ 	
	public function getCantidadVtaAjusteHabersXVtaAjusteHaberVtaAjusteDebeVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaAjusteHaber::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_TABLA, VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_VTA_AJUSTE_HABER_ID, VtaAjusteHaber::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteHaber::getVtaAjusteHabers($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaAjusteHaber (Objeto) relacionado a traves de VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta */ 	
	public function getVtaAjusteHaberXVtaAjusteHaberVtaAjusteDebeVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaAjusteHabersXVtaAjusteHaberVtaAjusteDebeVtaOrdenVenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getEkuParamTipoAfectacionTributariaGralTipoIvas */ 	
	public function getEkuParamTipoAfectacionTributariaGralTipoIvas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuParamTipoAfectacionTributariaGralTipoIva::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuParamTipoAfectacionTributariaGralTipoIva::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuParamTipoAfectacionTributariaGralTipoIva::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuParamTipoAfectacionTributariaGralTipoIva::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuParamTipoAfectacionTributariaGralTipoIva::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuParamTipoAfectacionTributariaGralTipoIva::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuParamTipoAfectacionTributariaGralTipoIva::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekuparamtipoafectaciontributariagraltipoivas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekuparamtipoafectaciontributariagraltipoiva = EkuParamTipoAfectacionTributariaGralTipoIva::hidratarObjeto($fila);			
                $ekuparamtipoafectaciontributariagraltipoivas[] = $ekuparamtipoafectaciontributariagraltipoiva;
            }

            return $ekuparamtipoafectaciontributariagraltipoivas;
	}	
	

	/* Método getEkuParamTipoAfectacionTributariaGralTipoIvasBloque para MasInfo */ 	
	public function getEkuParamTipoAfectacionTributariaGralTipoIvasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuParamTipoAfectacionTributariaGralTipoIvas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuParamTipoAfectacionTributariaGralTipoIvas Habilitados */ 	
	public function getEkuParamTipoAfectacionTributariaGralTipoIvasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuParamTipoAfectacionTributariaGralTipoIvas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuParamTipoAfectacionTributariaGralTipoIva */ 	
	public function getEkuParamTipoAfectacionTributariaGralTipoIva($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuParamTipoAfectacionTributariaGralTipoIvas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuParamTipoAfectacionTributariaGralTipoIva relacionadas */ 	
	public function deleteEkuParamTipoAfectacionTributariaGralTipoIvas(){
            $obs = $this->getEkuParamTipoAfectacionTributariaGralTipoIvas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuParamTipoAfectacionTributariaGralTipoIvasCmb() EkuParamTipoAfectacionTributariaGralTipoIva relacionadas */ 	
	public function getEkuParamTipoAfectacionTributariaGralTipoIvasCmb(){
            $c = new Criterio();
            $c->add(EkuParamTipoAfectacionTributariaGralTipoIva::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuParamTipoAfectacionTributariaGralTipoIva::GEN_TABLA);
            $c->setCriterios();

            $os = EkuParamTipoAfectacionTributariaGralTipoIva::getEkuParamTipoAfectacionTributariaGralTipoIvasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener EkuParamTipoAfectacionTributarias (Coleccion) relacionados a traves de EkuParamTipoAfectacionTributariaGralTipoIva */ 	
	public function getEkuParamTipoAfectacionTributariasXEkuParamTipoAfectacionTributariaGralTipoIva($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(EkuParamTipoAfectacionTributaria::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuParamTipoAfectacionTributariaGralTipoIva::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuParamTipoAfectacionTributariaGralTipoIva::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuParamTipoAfectacionTributaria::GEN_TABLA);
            $c->addRealJoin(EkuParamTipoAfectacionTributariaGralTipoIva::GEN_TABLA, EkuParamTipoAfectacionTributariaGralTipoIva::GEN_ATTR_EKU_PARAM_TIPO_AFECTACION_TRIBUTARIA_ID, EkuParamTipoAfectacionTributaria::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuParamTipoAfectacionTributaria::getEkuParamTipoAfectacionTributarias($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de EkuParamTipoAfectacionTributarias relacionados a traves de EkuParamTipoAfectacionTributariaGralTipoIva */ 	
	public function getCantidadEkuParamTipoAfectacionTributariasXEkuParamTipoAfectacionTributariaGralTipoIva($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(EkuParamTipoAfectacionTributaria::GEN_ATTR_ID);
            if($estado){
                $c->add(EkuParamTipoAfectacionTributaria::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuParamTipoAfectacionTributariaGralTipoIva::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuParamTipoAfectacionTributariaGralTipoIva::GEN_ATTR_GRAL_TIPO_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuParamTipoAfectacionTributaria::GEN_TABLA);
            $c->addRealJoin(EkuParamTipoAfectacionTributariaGralTipoIva::GEN_TABLA, EkuParamTipoAfectacionTributariaGralTipoIva::GEN_ATTR_EKU_PARAM_TIPO_AFECTACION_TRIBUTARIA_ID, EkuParamTipoAfectacionTributaria::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuParamTipoAfectacionTributaria::getEkuParamTipoAfectacionTributarias($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener EkuParamTipoAfectacionTributaria (Objeto) relacionado a traves de EkuParamTipoAfectacionTributariaGralTipoIva */ 	
	public function getEkuParamTipoAfectacionTributariaXEkuParamTipoAfectacionTributariaGralTipoIva($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getEkuParamTipoAfectacionTributariasXEkuParamTipoAfectacionTributariaGralTipoIva($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los WsFeParamTipoIvas asignados a GralTipoIva */ 	
	public function getGralTipoIvaWsFeParamTipoIvasId(){
            $ids = array();
            foreach($this->getGralTipoIvaWsFeParamTipoIvas() as $o){
            
                $ids[] = $o->getWsFeParamTipoIvaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos WsFeParamTipoIvas asignados al GralTipoIva */ 	
	public function setGralTipoIvaWsFeParamTipoIvas($ids){
            $this->deleteGralTipoIvaWsFeParamTipoIvas();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new GralTipoIvaWsFeParamTipoIva();
                    $o->setWsFeParamTipoIvaId($id);
                    $o->setGralTipoIvaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion WsFeParamTipoIva en el alta de GralTipoIva */ 	
	public function getAltaMostrarBloqueRelacionGralTipoIvaWsFeParamTipoIva(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los EkuParamTipoAfectacionTributarias asignados a GralTipoIva */ 	
	public function getEkuParamTipoAfectacionTributariaGralTipoIvasId(){
            $ids = array();
            foreach($this->getEkuParamTipoAfectacionTributariaGralTipoIvas() as $o){
            
                $ids[] = $o->getEkuParamTipoAfectacionTributariaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos EkuParamTipoAfectacionTributarias asignados al GralTipoIva */ 	
	public function setEkuParamTipoAfectacionTributariaGralTipoIvas($ids){
            $this->deleteEkuParamTipoAfectacionTributariaGralTipoIvas();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new EkuParamTipoAfectacionTributariaGralTipoIva();
                    $o->setEkuParamTipoAfectacionTributariaId($id);
                    $o->setGralTipoIvaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion EkuParamTipoAfectacionTributaria en el alta de GralTipoIva */ 	
	public function getAltaMostrarBloqueRelacionEkuParamTipoAfectacionTributariaGralTipoIva(){
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM gral_tipo_iva'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'gral_tipo_iva';");
            
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

            $obs = self::getGralTipoIvas($paginador, $criterio);
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

            $obs = self::getGralTipoIvas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralTipoIvas($paginador, $criterio);
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

            $obs = self::getGralTipoIvas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralTipoIvas($paginador, $criterio);
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

            $obs = self::getGralTipoIvas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'valor_iva' */ 	
	static function getOxValorIva($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VALOR_IVA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralTipoIvas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'valor_iva' */ 	
	static function getOsxValorIva($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VALOR_IVA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGralTipoIvas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gravado' */ 	
	static function getOxGravado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAVADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralTipoIvas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gravado' */ 	
	static function getOsxGravado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAVADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGralTipoIvas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'para_compra' */ 	
	static function getOxParaCompra($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PARA_COMPRA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralTipoIvas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'para_compra' */ 	
	static function getOsxParaCompra($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PARA_COMPRA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGralTipoIvas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'para_venta' */ 	
	static function getOxParaVenta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PARA_VENTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralTipoIvas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'para_venta' */ 	
	static function getOsxParaVenta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PARA_VENTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGralTipoIvas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralTipoIvas($paginador, $criterio);
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

            $obs = self::getGralTipoIvas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralTipoIvas($paginador, $criterio);
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

            $obs = self::getGralTipoIvas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralTipoIvas($paginador, $criterio);
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

            $obs = self::getGralTipoIvas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralTipoIvas($paginador, $criterio);
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

            $obs = self::getGralTipoIvas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralTipoIvas($paginador, $criterio);
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

            $obs = self::getGralTipoIvas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralTipoIvas($paginador, $criterio);
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

            $obs = self::getGralTipoIvas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralTipoIvas($paginador, $criterio);
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

            $obs = self::getGralTipoIvas(null, $criterio);
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

            $obs = self::getGralTipoIvas($paginador, $criterio);
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

            $obs = self::getGralTipoIvas($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'gral_tipo_iva_adm');
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
                $c->addTabla(GralTipoIva::GEN_TABLA);
                $c->addOrden(GralTipoIva::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $gral_tipo_ivas = GralTipoIva::getGralTipoIvas(null, $c);

                $arr = array();
                foreach($gral_tipo_ivas as $gral_tipo_iva){
                    $descripcion = $gral_tipo_iva->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>