<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BInsTipoListaPrecio
{ 
	
	const SES_PAGINACION = 'adm_instipolistaprecio_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_instipolistaprecio_paginas_registros';
	const SES_CRITERIOS = 'adm_instipolistaprecio_criterios';
	
	const GEN_CLASE = 'InsTipoListaPrecio';
	const GEN_TABLA = 'ins_tipo_lista_precio';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BInsTipoListaPrecio */ 
	const GEN_ATTR_ID = 'ins_tipo_lista_precio.id';
	const GEN_ATTR_DESCRIPCION = 'ins_tipo_lista_precio.descripcion';
	const GEN_ATTR_DESCRIPCION_CORTA = 'ins_tipo_lista_precio.descripcion_corta';
	const GEN_ATTR_CODIGO = 'ins_tipo_lista_precio.codigo';
	const GEN_ATTR_PORCENTAJE_INCREMENTO = 'ins_tipo_lista_precio.porcentaje_incremento';
	const GEN_ATTR_IMPORTE_MINIMO = 'ins_tipo_lista_precio.importe_minimo';
	const GEN_ATTR_INCLUYE_LOGISTICA = 'ins_tipo_lista_precio.incluye_logistica';
	const GEN_ATTR_BULTO_CERRADO = 'ins_tipo_lista_precio.bulto_cerrado';
	const GEN_ATTR_PORCENTAJE_COMISION = 'ins_tipo_lista_precio.porcentaje_comision';
	const GEN_ATTR_PORCENTAJE_LOGISTICA = 'ins_tipo_lista_precio.porcentaje_logistica';
	const GEN_ATTR_PORCENTAJE_DESCUENTO_MAXIMO = 'ins_tipo_lista_precio.porcentaje_descuento_maximo';
	const GEN_ATTR_POR_DEFAULT = 'ins_tipo_lista_precio.por_default';
	const GEN_ATTR_OBSERVACION = 'ins_tipo_lista_precio.observacion';
	const GEN_ATTR_ORDEN = 'ins_tipo_lista_precio.orden';
	const GEN_ATTR_ESTADO = 'ins_tipo_lista_precio.estado';
	const GEN_ATTR_CREADO = 'ins_tipo_lista_precio.creado';
	const GEN_ATTR_CREADO_POR = 'ins_tipo_lista_precio.creado_por';
	const GEN_ATTR_MODIFICADO = 'ins_tipo_lista_precio.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'ins_tipo_lista_precio.modificado_por';

	/* Constantes de Atributos Min de BInsTipoListaPrecio */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_DESCRIPCION_CORTA = 'descripcion_corta';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_PORCENTAJE_INCREMENTO = 'porcentaje_incremento';
	const GEN_ATTR_MIN_IMPORTE_MINIMO = 'importe_minimo';
	const GEN_ATTR_MIN_INCLUYE_LOGISTICA = 'incluye_logistica';
	const GEN_ATTR_MIN_BULTO_CERRADO = 'bulto_cerrado';
	const GEN_ATTR_MIN_PORCENTAJE_COMISION = 'porcentaje_comision';
	const GEN_ATTR_MIN_PORCENTAJE_LOGISTICA = 'porcentaje_logistica';
	const GEN_ATTR_MIN_PORCENTAJE_DESCUENTO_MAXIMO = 'porcentaje_descuento_maximo';
	const GEN_ATTR_MIN_POR_DEFAULT = 'por_default';
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
	

	/* Atributos de BInsTipoListaPrecio */ 
	private $id;
	private $descripcion;
	private $descripcion_corta;
	private $codigo;
	private $porcentaje_incremento;
	private $importe_minimo;
	private $incluye_logistica;
	private $bulto_cerrado;
	private $porcentaje_comision;
	private $porcentaje_logistica;
	private $porcentaje_descuento_maximo;
	private $por_default;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BInsTipoListaPrecio */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getDescripcionCorta(){ if(isset($this->descripcion_corta)){ return $this->descripcion_corta; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getPorcentajeIncremento(){ if(isset($this->porcentaje_incremento)){ return $this->porcentaje_incremento; }else{ return 0; } }
	public function getImporteMinimo(){ if(isset($this->importe_minimo)){ return $this->importe_minimo; }else{ return 0; } }
	public function getIncluyeLogistica(){ if(isset($this->incluye_logistica)){ return $this->incluye_logistica; }else{ return 0; } }
	public function getBultoCerrado(){ if(isset($this->bulto_cerrado)){ return $this->bulto_cerrado; }else{ return 0; } }
	public function getPorcentajeComision(){ if(isset($this->porcentaje_comision)){ return $this->porcentaje_comision; }else{ return 0; } }
	public function getPorcentajeLogistica(){ if(isset($this->porcentaje_logistica)){ return $this->porcentaje_logistica; }else{ return 0; } }
	public function getPorcentajeDescuentoMaximo(){ if(isset($this->porcentaje_descuento_maximo)){ return $this->porcentaje_descuento_maximo; }else{ return 0; } }
	public function getPorDefault(){ if(isset($this->por_default)){ return $this->por_default; }else{ return 0; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 'null'; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 'null'; } }

	/* Setters de BInsTipoListaPrecio */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_DESCRIPCION_CORTA."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_PORCENTAJE_INCREMENTO."
				, ".self::GEN_ATTR_IMPORTE_MINIMO."
				, ".self::GEN_ATTR_INCLUYE_LOGISTICA."
				, ".self::GEN_ATTR_BULTO_CERRADO."
				, ".self::GEN_ATTR_PORCENTAJE_COMISION."
				, ".self::GEN_ATTR_PORCENTAJE_LOGISTICA."
				, ".self::GEN_ATTR_PORCENTAJE_DESCUENTO_MAXIMO."
				, ".self::GEN_ATTR_POR_DEFAULT."
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
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setPorcentajeIncremento($fila[self::GEN_ATTR_MIN_PORCENTAJE_INCREMENTO]);
				$this->setImporteMinimo($fila[self::GEN_ATTR_MIN_IMPORTE_MINIMO]);
				$this->setIncluyeLogistica($fila[self::GEN_ATTR_MIN_INCLUYE_LOGISTICA]);
				$this->setBultoCerrado($fila[self::GEN_ATTR_MIN_BULTO_CERRADO]);
				$this->setPorcentajeComision($fila[self::GEN_ATTR_MIN_PORCENTAJE_COMISION]);
				$this->setPorcentajeLogistica($fila[self::GEN_ATTR_MIN_PORCENTAJE_LOGISTICA]);
				$this->setPorcentajeDescuentoMaximo($fila[self::GEN_ATTR_MIN_PORCENTAJE_DESCUENTO_MAXIMO]);
				$this->setPorDefault($fila[self::GEN_ATTR_MIN_POR_DEFAULT]);
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
	public function setCodigo($v){ $this->codigo = $v; }
	public function setPorcentajeIncremento($v){ $this->porcentaje_incremento = $v; }
	public function setImporteMinimo($v){ $this->importe_minimo = $v; }
	public function setIncluyeLogistica($v){ $this->incluye_logistica = $v; }
	public function setBultoCerrado($v){ $this->bulto_cerrado = $v; }
	public function setPorcentajeComision($v){ $this->porcentaje_comision = $v; }
	public function setPorcentajeLogistica($v){ $this->porcentaje_logistica = $v; }
	public function setPorcentajeDescuentoMaximo($v){ $this->porcentaje_descuento_maximo = $v; }
	public function setPorDefault($v){ $this->por_default = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new InsTipoListaPrecio();
            $o->setId($fila[InsTipoListaPrecio::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setDescripcionCorta($fila[self::GEN_ATTR_MIN_DESCRIPCION_CORTA]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setPorcentajeIncremento($fila[self::GEN_ATTR_MIN_PORCENTAJE_INCREMENTO]);
			$o->setImporteMinimo($fila[self::GEN_ATTR_MIN_IMPORTE_MINIMO]);
			$o->setIncluyeLogistica($fila[self::GEN_ATTR_MIN_INCLUYE_LOGISTICA]);
			$o->setBultoCerrado($fila[self::GEN_ATTR_MIN_BULTO_CERRADO]);
			$o->setPorcentajeComision($fila[self::GEN_ATTR_MIN_PORCENTAJE_COMISION]);
			$o->setPorcentajeLogistica($fila[self::GEN_ATTR_MIN_PORCENTAJE_LOGISTICA]);
			$o->setPorcentajeDescuentoMaximo($fila[self::GEN_ATTR_MIN_PORCENTAJE_DESCUENTO_MAXIMO]);
			$o->setPorDefault($fila[self::GEN_ATTR_MIN_POR_DEFAULT]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BInsTipoListaPrecio */ 	
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

	/* Cambia el estado de BInsTipoListaPrecio */ 	
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

	/* Save de BInsTipoListaPrecio */ 	
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
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_INCREMENTO."
						, ".self::GEN_ATTR_MIN_IMPORTE_MINIMO."
						, ".self::GEN_ATTR_MIN_INCLUYE_LOGISTICA."
						, ".self::GEN_ATTR_MIN_BULTO_CERRADO."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_COMISION."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_LOGISTICA."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_DESCUENTO_MAXIMO."
						, ".self::GEN_ATTR_MIN_POR_DEFAULT."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('ins_tipo_lista_precio_seq'), 
                '".$this->getDescripcion()."'
						, '".$this->getDescripcionCorta()."'
						, '".$this->getCodigo()."'
						, '".$this->getPorcentajeIncremento()."'
						, '".$this->getImporteMinimo()."'
						, ".$this->getIncluyeLogistica()."
						, ".$this->getBultoCerrado()."
						, '".$this->getPorcentajeComision()."'
						, '".$this->getPorcentajeLogistica()."'
						, '".$this->getPorcentajeDescuentoMaximo()."'
						, ".$this->getPorDefault()."
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('ins_tipo_lista_precio_seq')";
            
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
                 
				 ".InsTipoListaPrecio::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_DESCRIPCION_CORTA." = '".$this->getDescripcionCorta()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_PORCENTAJE_INCREMENTO." = '".$this->getPorcentajeIncremento()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_MINIMO." = '".$this->getImporteMinimo()."'
						, ".self::GEN_ATTR_MIN_INCLUYE_LOGISTICA." = ".$this->getIncluyeLogistica()."
						, ".self::GEN_ATTR_MIN_BULTO_CERRADO." = ".$this->getBultoCerrado()."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_COMISION." = '".$this->getPorcentajeComision()."'
						, ".self::GEN_ATTR_MIN_PORCENTAJE_LOGISTICA." = '".$this->getPorcentajeLogistica()."'
						, ".self::GEN_ATTR_MIN_PORCENTAJE_DESCUENTO_MAXIMO." = '".$this->getPorcentajeDescuentoMaximo()."'
						, ".self::GEN_ATTR_MIN_POR_DEFAULT." = ".$this->getPorDefault()."
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
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_INCREMENTO."
						, ".self::GEN_ATTR_MIN_IMPORTE_MINIMO."
						, ".self::GEN_ATTR_MIN_INCLUYE_LOGISTICA."
						, ".self::GEN_ATTR_MIN_BULTO_CERRADO."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_COMISION."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_LOGISTICA."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_DESCUENTO_MAXIMO."
						, ".self::GEN_ATTR_MIN_POR_DEFAULT."
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
						, '".$this->getCodigo()."'
						, '".$this->getPorcentajeIncremento()."'
						, '".$this->getImporteMinimo()."'
						, ".$this->getIncluyeLogistica()."
						, ".$this->getBultoCerrado()."
						, '".$this->getPorcentajeComision()."'
						, '".$this->getPorcentajeLogistica()."'
						, '".$this->getPorcentajeDescuentoMaximo()."'
						, ".$this->getPorDefault()."
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
                     
				 ".InsTipoListaPrecio::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_DESCRIPCION_CORTA." = '".$this->getDescripcionCorta()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_PORCENTAJE_INCREMENTO." = '".$this->getPorcentajeIncremento()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_MINIMO." = '".$this->getImporteMinimo()."'
						, ".self::GEN_ATTR_MIN_INCLUYE_LOGISTICA." = ".$this->getIncluyeLogistica()."
						, ".self::GEN_ATTR_MIN_BULTO_CERRADO." = ".$this->getBultoCerrado()."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_COMISION." = '".$this->getPorcentajeComision()."'
						, ".self::GEN_ATTR_MIN_PORCENTAJE_LOGISTICA." = '".$this->getPorcentajeLogistica()."'
						, ".self::GEN_ATTR_MIN_PORCENTAJE_DESCUENTO_MAXIMO." = '".$this->getPorcentajeDescuentoMaximo()."'
						, ".self::GEN_ATTR_MIN_POR_DEFAULT." = ".$this->getPorDefault()."
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
            $o = new InsTipoListaPrecio();
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

	/* Delete de BInsTipoListaPrecio */ 	
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
	
            // se elimina la coleccion de InsInsumoBultoInsTipoListaPrecios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsInsumoBultoInsTipoListaPrecio::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsInsumoBultoInsTipoListaPrecios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de InsListaPrecios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsListaPrecio::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsListaPrecios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliCategoriaInsTipoListaPrecios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliCategoriaInsTipoListaPrecio::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliCategoriaInsTipoListaPrecios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliSubcategoriaInsTipoListaPrecios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliSubcategoriaInsTipoListaPrecio::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliSubcategoriaInsTipoListaPrecios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliClienteInsTipoListaPrecios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliClienteInsTipoListaPrecio::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliClienteInsTipoListaPrecios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaPresupuestos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaPresupuestos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaOrdenVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaOrdenVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaVendedorInsTipoListaPrecios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaVendedorInsTipoListaPrecio::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaVendedorInsTipoListaPrecios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaPoliticaDescuentoRangos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaPoliticaDescuentoRango::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaPoliticaDescuentoRangos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaPoliticaDescuentoInsTipoListaPrecios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaPoliticaDescuentoInsTipoListaPrecio::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaPoliticaDescuentoInsTipoListaPrecios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarInsTipoListaPrecio(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getInsTipoListaPrecios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = InsTipoListaPrecio::setAplicarFiltrosDeAlcance($criterio);

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
	
		$instipolistaprecios = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $instipolistaprecio = new InsTipoListaPrecio();
                    $instipolistaprecio->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $instipolistaprecio->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$instipolistaprecio->setDescripcionCorta($fila[self::GEN_ATTR_MIN_DESCRIPCION_CORTA]);
			$instipolistaprecio->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$instipolistaprecio->setPorcentajeIncremento($fila[self::GEN_ATTR_MIN_PORCENTAJE_INCREMENTO]);
			$instipolistaprecio->setImporteMinimo($fila[self::GEN_ATTR_MIN_IMPORTE_MINIMO]);
			$instipolistaprecio->setIncluyeLogistica($fila[self::GEN_ATTR_MIN_INCLUYE_LOGISTICA]);
			$instipolistaprecio->setBultoCerrado($fila[self::GEN_ATTR_MIN_BULTO_CERRADO]);
			$instipolistaprecio->setPorcentajeComision($fila[self::GEN_ATTR_MIN_PORCENTAJE_COMISION]);
			$instipolistaprecio->setPorcentajeLogistica($fila[self::GEN_ATTR_MIN_PORCENTAJE_LOGISTICA]);
			$instipolistaprecio->setPorcentajeDescuentoMaximo($fila[self::GEN_ATTR_MIN_PORCENTAJE_DESCUENTO_MAXIMO]);
			$instipolistaprecio->setPorDefault($fila[self::GEN_ATTR_MIN_POR_DEFAULT]);
			$instipolistaprecio->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$instipolistaprecio->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$instipolistaprecio->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$instipolistaprecio->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$instipolistaprecio->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$instipolistaprecio->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$instipolistaprecio->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $instipolistaprecios[] = $instipolistaprecio;
		}
		
		return $instipolistaprecios;
	}	
	

	/* Método getInsTipoListaPrecios Habilitados */ 	
	static function getInsTipoListaPreciosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return InsTipoListaPrecio::getInsTipoListaPrecios($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getInsTipoListaPrecios para listado de Backend */ 	
	static function getInsTipoListaPreciosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return InsTipoListaPrecio::getInsTipoListaPrecios($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getInsTipoListaPreciosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = InsTipoListaPrecio::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = InsTipoListaPrecio::getInsTipoListaPrecios($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getInsTipoListaPrecios filtrado para select */ 	
	static function getInsTipoListaPreciosCmbF($paginador = null, $criterio = null){
            $col = InsTipoListaPrecio::getInsTipoListaPrecios($paginador, $criterio);

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
            $url = 'ins_tipo_lista_precio_adm.php';
            $url_gestion = 'ins_tipo_lista_precio_gestion.php';
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
	

	/* Metodo getInsInsumoBultoInsTipoListaPrecios */ 	
	public function getInsInsumoBultoInsTipoListaPrecios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsInsumoBultoInsTipoListaPrecio::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsInsumoBultoInsTipoListaPrecio::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsInsumoBultoInsTipoListaPrecio::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsInsumoBultoInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsInsumoBultoInsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsInsumoBultoInsTipoListaPrecio::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsInsumoBultoInsTipoListaPrecio::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insinsumobultoinstipolistaprecios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insinsumobultoinstipolistaprecio = InsInsumoBultoInsTipoListaPrecio::hidratarObjeto($fila);			
                $insinsumobultoinstipolistaprecios[] = $insinsumobultoinstipolistaprecio;
            }

            return $insinsumobultoinstipolistaprecios;
	}	
	

	/* Método getInsInsumoBultoInsTipoListaPreciosBloque para MasInfo */ 	
	public function getInsInsumoBultoInsTipoListaPreciosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsInsumoBultoInsTipoListaPrecios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsInsumoBultoInsTipoListaPrecios Habilitados */ 	
	public function getInsInsumoBultoInsTipoListaPreciosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsInsumoBultoInsTipoListaPrecios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsInsumoBultoInsTipoListaPrecio */ 	
	public function getInsInsumoBultoInsTipoListaPrecio($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsInsumoBultoInsTipoListaPrecios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsInsumoBultoInsTipoListaPrecio relacionadas */ 	
	public function deleteInsInsumoBultoInsTipoListaPrecios(){
            $obs = $this->getInsInsumoBultoInsTipoListaPrecios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsInsumoBultoInsTipoListaPreciosCmb() InsInsumoBultoInsTipoListaPrecio relacionadas */ 	
	public function getInsInsumoBultoInsTipoListaPreciosCmb(){
            $c = new Criterio();
            $c->add(InsInsumoBultoInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumoBultoInsTipoListaPrecio::GEN_TABLA);
            $c->setCriterios();

            $os = InsInsumoBultoInsTipoListaPrecio::getInsInsumoBultoInsTipoListaPreciosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsInsumoBultos (Coleccion) relacionados a traves de InsInsumoBultoInsTipoListaPrecio */ 	
	public function getInsInsumoBultosXInsInsumoBultoInsTipoListaPrecio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsInsumoBulto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoBultoInsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoBultoInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumoBulto::GEN_TABLA);
            $c->addRealJoin(InsInsumoBultoInsTipoListaPrecio::GEN_TABLA, InsInsumoBultoInsTipoListaPrecio::GEN_ATTR_INS_INSUMO_BULTO_ID, InsInsumoBulto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumoBulto::getInsInsumoBultos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsInsumoBultos relacionados a traves de InsInsumoBultoInsTipoListaPrecio */ 	
	public function getCantidadInsInsumoBultosXInsInsumoBultoInsTipoListaPrecio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsInsumoBulto::GEN_ATTR_ID);
            if($estado){
                $c->add(InsInsumoBulto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoBultoInsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoBultoInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumoBulto::GEN_TABLA);
            $c->addRealJoin(InsInsumoBultoInsTipoListaPrecio::GEN_TABLA, InsInsumoBultoInsTipoListaPrecio::GEN_ATTR_INS_INSUMO_BULTO_ID, InsInsumoBulto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumoBulto::getInsInsumoBultos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsInsumoBulto (Objeto) relacionado a traves de InsInsumoBultoInsTipoListaPrecio */ 	
	public function getInsInsumoBultoXInsInsumoBultoInsTipoListaPrecio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsInsumoBultosXInsInsumoBultoInsTipoListaPrecio($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getInsListaPrecios */ 	
	public function getInsListaPrecios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsListaPrecio::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsListaPrecio::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsListaPrecio::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsListaPrecio::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsListaPrecio::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $inslistaprecios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $inslistaprecio = InsListaPrecio::hidratarObjeto($fila);			
                $inslistaprecios[] = $inslistaprecio;
            }

            return $inslistaprecios;
	}	
	

	/* Método getInsListaPreciosBloque para MasInfo */ 	
	public function getInsListaPreciosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsListaPrecios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsListaPrecios Habilitados */ 	
	public function getInsListaPreciosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsListaPrecios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsListaPrecio */ 	
	public function getInsListaPrecio($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsListaPrecios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsListaPrecio relacionadas */ 	
	public function deleteInsListaPrecios(){
            $obs = $this->getInsListaPrecios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsListaPreciosCmb() InsListaPrecio relacionadas */ 	
	public function getInsListaPreciosCmb(){
            $c = new Criterio();
            $c->add(InsListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsListaPrecio::GEN_TABLA);
            $c->setCriterios();

            $os = InsListaPrecio::getInsListaPreciosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsInsumos (Coleccion) relacionados a traves de InsListaPrecio */ 	
	public function getInsInsumosXInsListaPrecio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(InsListaPrecio::GEN_TABLA, InsListaPrecio::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsInsumos relacionados a traves de InsListaPrecio */ 	
	public function getCantidadInsInsumosXInsListaPrecio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsInsumo::GEN_ATTR_ID);
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(InsListaPrecio::GEN_TABLA, InsListaPrecio::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsInsumo (Objeto) relacionado a traves de InsListaPrecio */ 	
	public function getInsInsumoXInsListaPrecio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsInsumosXInsListaPrecio($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliCategoriaInsTipoListaPrecios */ 	
	public function getCliCategoriaInsTipoListaPrecios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliCategoriaInsTipoListaPrecio::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliCategoriaInsTipoListaPrecio::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliCategoriaInsTipoListaPrecio::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliCategoriaInsTipoListaPrecio::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliCategoriaInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliCategoriaInsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliCategoriaInsTipoListaPrecio::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliCategoriaInsTipoListaPrecio::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $clicategoriainstipolistaprecios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $clicategoriainstipolistaprecio = CliCategoriaInsTipoListaPrecio::hidratarObjeto($fila);			
                $clicategoriainstipolistaprecios[] = $clicategoriainstipolistaprecio;
            }

            return $clicategoriainstipolistaprecios;
	}	
	

	/* Método getCliCategoriaInsTipoListaPreciosBloque para MasInfo */ 	
	public function getCliCategoriaInsTipoListaPreciosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliCategoriaInsTipoListaPrecios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliCategoriaInsTipoListaPrecios Habilitados */ 	
	public function getCliCategoriaInsTipoListaPreciosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliCategoriaInsTipoListaPrecios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliCategoriaInsTipoListaPrecio */ 	
	public function getCliCategoriaInsTipoListaPrecio($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliCategoriaInsTipoListaPrecios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliCategoriaInsTipoListaPrecio relacionadas */ 	
	public function deleteCliCategoriaInsTipoListaPrecios(){
            $obs = $this->getCliCategoriaInsTipoListaPrecios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliCategoriaInsTipoListaPreciosCmb() CliCategoriaInsTipoListaPrecio relacionadas */ 	
	public function getCliCategoriaInsTipoListaPreciosCmb(){
            $c = new Criterio();
            $c->add(CliCategoriaInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCategoriaInsTipoListaPrecio::GEN_TABLA);
            $c->setCriterios();

            $os = CliCategoriaInsTipoListaPrecio::getCliCategoriaInsTipoListaPreciosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliCategorias (Coleccion) relacionados a traves de CliCategoriaInsTipoListaPrecio */ 	
	public function getCliCategoriasXCliCategoriaInsTipoListaPrecio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCategoria::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliCategoriaInsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliCategoriaInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCategoria::GEN_TABLA);
            $c->addRealJoin(CliCategoriaInsTipoListaPrecio::GEN_TABLA, CliCategoriaInsTipoListaPrecio::GEN_ATTR_CLI_CATEGORIA_ID, CliCategoria::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCategoria::getCliCategorias($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliCategorias relacionados a traves de CliCategoriaInsTipoListaPrecio */ 	
	public function getCantidadCliCategoriasXCliCategoriaInsTipoListaPrecio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCategoria::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCategoria::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliCategoriaInsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliCategoriaInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCategoria::GEN_TABLA);
            $c->addRealJoin(CliCategoriaInsTipoListaPrecio::GEN_TABLA, CliCategoriaInsTipoListaPrecio::GEN_ATTR_CLI_CATEGORIA_ID, CliCategoria::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCategoria::getCliCategorias($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCategoria (Objeto) relacionado a traves de CliCategoriaInsTipoListaPrecio */ 	
	public function getCliCategoriaXCliCategoriaInsTipoListaPrecio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliCategoriasXCliCategoriaInsTipoListaPrecio($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliSubcategoriaInsTipoListaPrecios */ 	
	public function getCliSubcategoriaInsTipoListaPrecios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliSubcategoriaInsTipoListaPrecio::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliSubcategoriaInsTipoListaPrecio::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliSubcategoriaInsTipoListaPrecio::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliSubcategoriaInsTipoListaPrecio::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliSubcategoriaInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliSubcategoriaInsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliSubcategoriaInsTipoListaPrecio::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliSubcategoriaInsTipoListaPrecio::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $clisubcategoriainstipolistaprecios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $clisubcategoriainstipolistaprecio = CliSubcategoriaInsTipoListaPrecio::hidratarObjeto($fila);			
                $clisubcategoriainstipolistaprecios[] = $clisubcategoriainstipolistaprecio;
            }

            return $clisubcategoriainstipolistaprecios;
	}	
	

	/* Método getCliSubcategoriaInsTipoListaPreciosBloque para MasInfo */ 	
	public function getCliSubcategoriaInsTipoListaPreciosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliSubcategoriaInsTipoListaPrecios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliSubcategoriaInsTipoListaPrecios Habilitados */ 	
	public function getCliSubcategoriaInsTipoListaPreciosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliSubcategoriaInsTipoListaPrecios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliSubcategoriaInsTipoListaPrecio */ 	
	public function getCliSubcategoriaInsTipoListaPrecio($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliSubcategoriaInsTipoListaPrecios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliSubcategoriaInsTipoListaPrecio relacionadas */ 	
	public function deleteCliSubcategoriaInsTipoListaPrecios(){
            $obs = $this->getCliSubcategoriaInsTipoListaPrecios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliSubcategoriaInsTipoListaPreciosCmb() CliSubcategoriaInsTipoListaPrecio relacionadas */ 	
	public function getCliSubcategoriaInsTipoListaPreciosCmb(){
            $c = new Criterio();
            $c->add(CliSubcategoriaInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliSubcategoriaInsTipoListaPrecio::GEN_TABLA);
            $c->setCriterios();

            $os = CliSubcategoriaInsTipoListaPrecio::getCliSubcategoriaInsTipoListaPreciosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliSubcategorias (Coleccion) relacionados a traves de CliSubcategoriaInsTipoListaPrecio */ 	
	public function getCliSubcategoriasXCliSubcategoriaInsTipoListaPrecio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliSubcategoria::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliSubcategoriaInsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliSubcategoriaInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliSubcategoria::GEN_TABLA);
            $c->addRealJoin(CliSubcategoriaInsTipoListaPrecio::GEN_TABLA, CliSubcategoriaInsTipoListaPrecio::GEN_ATTR_CLI_SUBCATEGORIA_ID, CliSubcategoria::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliSubcategoria::getCliSubcategorias($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliSubcategorias relacionados a traves de CliSubcategoriaInsTipoListaPrecio */ 	
	public function getCantidadCliSubcategoriasXCliSubcategoriaInsTipoListaPrecio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliSubcategoria::GEN_ATTR_ID);
            if($estado){
                $c->add(CliSubcategoria::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliSubcategoriaInsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliSubcategoriaInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliSubcategoria::GEN_TABLA);
            $c->addRealJoin(CliSubcategoriaInsTipoListaPrecio::GEN_TABLA, CliSubcategoriaInsTipoListaPrecio::GEN_ATTR_CLI_SUBCATEGORIA_ID, CliSubcategoria::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliSubcategoria::getCliSubcategorias($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliSubcategoria (Objeto) relacionado a traves de CliSubcategoriaInsTipoListaPrecio */ 	
	public function getCliSubcategoriaXCliSubcategoriaInsTipoListaPrecio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliSubcategoriasXCliSubcategoriaInsTipoListaPrecio($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliClienteInsTipoListaPrecios */ 	
	public function getCliClienteInsTipoListaPrecios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliClienteInsTipoListaPrecio::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliClienteInsTipoListaPrecio::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliClienteInsTipoListaPrecio::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliClienteInsTipoListaPrecio::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliClienteInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliClienteInsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliClienteInsTipoListaPrecio::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliClienteInsTipoListaPrecio::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cliclienteinstipolistaprecios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cliclienteinstipolistaprecio = CliClienteInsTipoListaPrecio::hidratarObjeto($fila);			
                $cliclienteinstipolistaprecios[] = $cliclienteinstipolistaprecio;
            }

            return $cliclienteinstipolistaprecios;
	}	
	

	/* Método getCliClienteInsTipoListaPreciosBloque para MasInfo */ 	
	public function getCliClienteInsTipoListaPreciosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliClienteInsTipoListaPrecios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliClienteInsTipoListaPrecios Habilitados */ 	
	public function getCliClienteInsTipoListaPreciosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliClienteInsTipoListaPrecios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliClienteInsTipoListaPrecio */ 	
	public function getCliClienteInsTipoListaPrecio($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliClienteInsTipoListaPrecios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliClienteInsTipoListaPrecio relacionadas */ 	
	public function deleteCliClienteInsTipoListaPrecios(){
            $obs = $this->getCliClienteInsTipoListaPrecios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliClienteInsTipoListaPreciosCmb() CliClienteInsTipoListaPrecio relacionadas */ 	
	public function getCliClienteInsTipoListaPreciosCmb(){
            $c = new Criterio();
            $c->add(CliClienteInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteInsTipoListaPrecio::GEN_TABLA);
            $c->setCriterios();

            $os = CliClienteInsTipoListaPrecio::getCliClienteInsTipoListaPreciosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de CliClienteInsTipoListaPrecio */ 	
	public function getCliClientesXCliClienteInsTipoListaPrecio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteInsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(CliClienteInsTipoListaPrecio::GEN_TABLA, CliClienteInsTipoListaPrecio::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de CliClienteInsTipoListaPrecio */ 	
	public function getCantidadCliClientesXCliClienteInsTipoListaPrecio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteInsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(CliClienteInsTipoListaPrecio::GEN_TABLA, CliClienteInsTipoListaPrecio::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de CliClienteInsTipoListaPrecio */ 	
	public function getCliClienteXCliClienteInsTipoListaPrecio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXCliClienteInsTipoListaPrecio($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaPresupuestos */ 	
	public function getVtaPresupuestos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaPresupuesto::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaPresupuesto::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaPresupuesto::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaPresupuesto::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaPresupuesto::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaPresupuesto::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaPresupuesto::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtapresupuestos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtapresupuesto = VtaPresupuesto::hidratarObjeto($fila);			
                $vtapresupuestos[] = $vtapresupuesto;
            }

            return $vtapresupuestos;
	}	
	

	/* Método getVtaPresupuestosBloque para MasInfo */ 	
	public function getVtaPresupuestosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaPresupuestos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaPresupuestos Habilitados */ 	
	public function getVtaPresupuestosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaPresupuestos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaPresupuesto */ 	
	public function getVtaPresupuesto($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaPresupuestos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaPresupuesto relacionadas */ 	
	public function deleteVtaPresupuestos(){
            $obs = $this->getVtaPresupuestos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaPresupuestosCmb() VtaPresupuesto relacionadas */ 	
	public function getVtaPresupuestosCmb(){
            $c = new Criterio();
            $c->add(VtaPresupuesto::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->setCriterios();

            $os = VtaPresupuesto::getVtaPresupuestosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaPresupuesto */ 	
	public function getCliClientesXVtaPresupuesto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPresupuesto::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaPresupuesto */ 	
	public function getCantidadCliClientesXVtaPresupuesto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPresupuesto::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaPresupuesto */ 	
	public function getCliClienteXVtaPresupuesto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaPresupuesto($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(VtaOrdenVenta::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaOrdenVenta::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaOrdenVenta::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaOrdenVenta::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
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

	/* Metodo getVtaVendedorInsTipoListaPrecios */ 	
	public function getVtaVendedorInsTipoListaPrecios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaVendedorInsTipoListaPrecio::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaVendedorInsTipoListaPrecio::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaVendedorInsTipoListaPrecio::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaVendedorInsTipoListaPrecio::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaVendedorInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaVendedorInsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaVendedorInsTipoListaPrecio::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaVendedorInsTipoListaPrecio::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtavendedorinstipolistaprecios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtavendedorinstipolistaprecio = VtaVendedorInsTipoListaPrecio::hidratarObjeto($fila);			
                $vtavendedorinstipolistaprecios[] = $vtavendedorinstipolistaprecio;
            }

            return $vtavendedorinstipolistaprecios;
	}	
	

	/* Método getVtaVendedorInsTipoListaPreciosBloque para MasInfo */ 	
	public function getVtaVendedorInsTipoListaPreciosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaVendedorInsTipoListaPrecios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaVendedorInsTipoListaPrecios Habilitados */ 	
	public function getVtaVendedorInsTipoListaPreciosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaVendedorInsTipoListaPrecios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaVendedorInsTipoListaPrecio */ 	
	public function getVtaVendedorInsTipoListaPrecio($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaVendedorInsTipoListaPrecios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaVendedorInsTipoListaPrecio relacionadas */ 	
	public function deleteVtaVendedorInsTipoListaPrecios(){
            $obs = $this->getVtaVendedorInsTipoListaPrecios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaVendedorInsTipoListaPreciosCmb() VtaVendedorInsTipoListaPrecio relacionadas */ 	
	public function getVtaVendedorInsTipoListaPreciosCmb(){
            $c = new Criterio();
            $c->add(VtaVendedorInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedorInsTipoListaPrecio::GEN_TABLA);
            $c->setCriterios();

            $os = VtaVendedorInsTipoListaPrecio::getVtaVendedorInsTipoListaPreciosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaVendedors (Coleccion) relacionados a traves de VtaVendedorInsTipoListaPrecio */ 	
	public function getVtaVendedorsXVtaVendedorInsTipoListaPrecio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaVendedorInsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaVendedorInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedor::GEN_TABLA);
            $c->addRealJoin(VtaVendedorInsTipoListaPrecio::GEN_TABLA, VtaVendedorInsTipoListaPrecio::GEN_ATTR_VTA_VENDEDOR_ID, VtaVendedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaVendedor::getVtaVendedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaVendedors relacionados a traves de VtaVendedorInsTipoListaPrecio */ 	
	public function getCantidadVtaVendedorsXVtaVendedorInsTipoListaPrecio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaVendedor::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaVendedorInsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaVendedorInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedor::GEN_TABLA);
            $c->addRealJoin(VtaVendedorInsTipoListaPrecio::GEN_TABLA, VtaVendedorInsTipoListaPrecio::GEN_ATTR_VTA_VENDEDOR_ID, VtaVendedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaVendedor::getVtaVendedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaVendedor (Objeto) relacionado a traves de VtaVendedorInsTipoListaPrecio */ 	
	public function getVtaVendedorXVtaVendedorInsTipoListaPrecio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaVendedorsXVtaVendedorInsTipoListaPrecio($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaPoliticaDescuentoRangos */ 	
	public function getVtaPoliticaDescuentoRangos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaPoliticaDescuentoRango::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaPoliticaDescuentoRango::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaPoliticaDescuentoRango::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaPoliticaDescuentoRango::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaPoliticaDescuentoRango::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaPoliticaDescuentoRango::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaPoliticaDescuentoRango::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaPoliticaDescuentoRango::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtapoliticadescuentorangos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtapoliticadescuentorango = VtaPoliticaDescuentoRango::hidratarObjeto($fila);			
                $vtapoliticadescuentorangos[] = $vtapoliticadescuentorango;
            }

            return $vtapoliticadescuentorangos;
	}	
	

	/* Método getVtaPoliticaDescuentoRangosBloque para MasInfo */ 	
	public function getVtaPoliticaDescuentoRangosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaPoliticaDescuentoRangos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaPoliticaDescuentoRangos Habilitados */ 	
	public function getVtaPoliticaDescuentoRangosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaPoliticaDescuentoRangos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaPoliticaDescuentoRango */ 	
	public function getVtaPoliticaDescuentoRango($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaPoliticaDescuentoRangos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaPoliticaDescuentoRango relacionadas */ 	
	public function deleteVtaPoliticaDescuentoRangos(){
            $obs = $this->getVtaPoliticaDescuentoRangos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaPoliticaDescuentoRangosCmb() VtaPoliticaDescuentoRango relacionadas */ 	
	public function getVtaPoliticaDescuentoRangosCmb(){
            $c = new Criterio();
            $c->add(VtaPoliticaDescuentoRango::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPoliticaDescuentoRango::GEN_TABLA);
            $c->setCriterios();

            $os = VtaPoliticaDescuentoRango::getVtaPoliticaDescuentoRangosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaPoliticaDescuentos (Coleccion) relacionados a traves de VtaPoliticaDescuentoRango */ 	
	public function getVtaPoliticaDescuentosXVtaPoliticaDescuentoRango($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaPoliticaDescuento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPoliticaDescuentoRango::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPoliticaDescuentoRango::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPoliticaDescuento::GEN_TABLA);
            $c->addRealJoin(VtaPoliticaDescuentoRango::GEN_TABLA, VtaPoliticaDescuentoRango::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, VtaPoliticaDescuento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPoliticaDescuento::getVtaPoliticaDescuentos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaPoliticaDescuentos relacionados a traves de VtaPoliticaDescuentoRango */ 	
	public function getCantidadVtaPoliticaDescuentosXVtaPoliticaDescuentoRango($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaPoliticaDescuento::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaPoliticaDescuento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPoliticaDescuentoRango::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPoliticaDescuentoRango::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPoliticaDescuento::GEN_TABLA);
            $c->addRealJoin(VtaPoliticaDescuentoRango::GEN_TABLA, VtaPoliticaDescuentoRango::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, VtaPoliticaDescuento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPoliticaDescuento::getVtaPoliticaDescuentos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaPoliticaDescuento (Objeto) relacionado a traves de VtaPoliticaDescuentoRango */ 	
	public function getVtaPoliticaDescuentoXVtaPoliticaDescuentoRango($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaPoliticaDescuentosXVtaPoliticaDescuentoRango($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaPoliticaDescuentoInsTipoListaPrecios */ 	
	public function getVtaPoliticaDescuentoInsTipoListaPrecios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaPoliticaDescuentoInsTipoListaPrecio::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaPoliticaDescuentoInsTipoListaPrecio::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaPoliticaDescuentoInsTipoListaPrecio::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaPoliticaDescuentoInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaPoliticaDescuentoInsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaPoliticaDescuentoInsTipoListaPrecio::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaPoliticaDescuentoInsTipoListaPrecio::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtapoliticadescuentoinstipolistaprecios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtapoliticadescuentoinstipolistaprecio = VtaPoliticaDescuentoInsTipoListaPrecio::hidratarObjeto($fila);			
                $vtapoliticadescuentoinstipolistaprecios[] = $vtapoliticadescuentoinstipolistaprecio;
            }

            return $vtapoliticadescuentoinstipolistaprecios;
	}	
	

	/* Método getVtaPoliticaDescuentoInsTipoListaPreciosBloque para MasInfo */ 	
	public function getVtaPoliticaDescuentoInsTipoListaPreciosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaPoliticaDescuentoInsTipoListaPrecios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaPoliticaDescuentoInsTipoListaPrecios Habilitados */ 	
	public function getVtaPoliticaDescuentoInsTipoListaPreciosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaPoliticaDescuentoInsTipoListaPrecios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaPoliticaDescuentoInsTipoListaPrecio */ 	
	public function getVtaPoliticaDescuentoInsTipoListaPrecio($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaPoliticaDescuentoInsTipoListaPrecios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaPoliticaDescuentoInsTipoListaPrecio relacionadas */ 	
	public function deleteVtaPoliticaDescuentoInsTipoListaPrecios(){
            $obs = $this->getVtaPoliticaDescuentoInsTipoListaPrecios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaPoliticaDescuentoInsTipoListaPreciosCmb() VtaPoliticaDescuentoInsTipoListaPrecio relacionadas */ 	
	public function getVtaPoliticaDescuentoInsTipoListaPreciosCmb(){
            $c = new Criterio();
            $c->add(VtaPoliticaDescuentoInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPoliticaDescuentoInsTipoListaPrecio::GEN_TABLA);
            $c->setCriterios();

            $os = VtaPoliticaDescuentoInsTipoListaPrecio::getVtaPoliticaDescuentoInsTipoListaPreciosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaPoliticaDescuentos (Coleccion) relacionados a traves de VtaPoliticaDescuentoInsTipoListaPrecio */ 	
	public function getVtaPoliticaDescuentosXVtaPoliticaDescuentoInsTipoListaPrecio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaPoliticaDescuento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPoliticaDescuentoInsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPoliticaDescuentoInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPoliticaDescuento::GEN_TABLA);
            $c->addRealJoin(VtaPoliticaDescuentoInsTipoListaPrecio::GEN_TABLA, VtaPoliticaDescuentoInsTipoListaPrecio::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, VtaPoliticaDescuento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPoliticaDescuento::getVtaPoliticaDescuentos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaPoliticaDescuentos relacionados a traves de VtaPoliticaDescuentoInsTipoListaPrecio */ 	
	public function getCantidadVtaPoliticaDescuentosXVtaPoliticaDescuentoInsTipoListaPrecio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaPoliticaDescuento::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaPoliticaDescuento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPoliticaDescuentoInsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPoliticaDescuentoInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPoliticaDescuento::GEN_TABLA);
            $c->addRealJoin(VtaPoliticaDescuentoInsTipoListaPrecio::GEN_TABLA, VtaPoliticaDescuentoInsTipoListaPrecio::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, VtaPoliticaDescuento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPoliticaDescuento::getVtaPoliticaDescuentos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaPoliticaDescuento (Objeto) relacionado a traves de VtaPoliticaDescuentoInsTipoListaPrecio */ 	
	public function getVtaPoliticaDescuentoXVtaPoliticaDescuentoInsTipoListaPrecio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaPoliticaDescuentosXVtaPoliticaDescuentoInsTipoListaPrecio($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los InsInsumoBultos asignados a InsTipoListaPrecio */ 	
	public function getInsInsumoBultoInsTipoListaPreciosId(){
            $ids = array();
            foreach($this->getInsInsumoBultoInsTipoListaPrecios() as $o){
            
                $ids[] = $o->getInsInsumoBultoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos InsInsumoBultos asignados al InsTipoListaPrecio */ 	
	public function setInsInsumoBultoInsTipoListaPrecios($ids){
            $this->deleteInsInsumoBultoInsTipoListaPrecios();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new InsInsumoBultoInsTipoListaPrecio();
                    $o->setInsInsumoBultoId($id);
                    $o->setInsTipoListaPrecioId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion InsInsumoBulto en el alta de InsTipoListaPrecio */ 	
	public function getAltaMostrarBloqueRelacionInsInsumoBultoInsTipoListaPrecio(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los InsInsumos asignados a InsTipoListaPrecio */ 	
	public function getInsListaPreciosId(){
            $ids = array();
            foreach($this->getInsListaPrecios() as $o){
            
                $ids[] = $o->getInsInsumoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos InsInsumos asignados al InsTipoListaPrecio */ 	
	public function setInsListaPrecios($ids){
            $this->deleteInsListaPrecios();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new InsListaPrecio();
                    $o->setInsInsumoId($id);
                    $o->setInsTipoListaPrecioId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion InsInsumo en el alta de InsTipoListaPrecio */ 	
	public function getAltaMostrarBloqueRelacionInsListaPrecio(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los CliCategorias asignados a InsTipoListaPrecio */ 	
	public function getCliCategoriaInsTipoListaPreciosId(){
            $ids = array();
            foreach($this->getCliCategoriaInsTipoListaPrecios() as $o){
            
                $ids[] = $o->getCliCategoriaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos CliCategorias asignados al InsTipoListaPrecio */ 	
	public function setCliCategoriaInsTipoListaPrecios($ids){
            $this->deleteCliCategoriaInsTipoListaPrecios();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new CliCategoriaInsTipoListaPrecio();
                    $o->setCliCategoriaId($id);
                    $o->setInsTipoListaPrecioId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion CliCategoria en el alta de InsTipoListaPrecio */ 	
	public function getAltaMostrarBloqueRelacionCliCategoriaInsTipoListaPrecio(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los CliSubcategorias asignados a InsTipoListaPrecio */ 	
	public function getCliSubcategoriaInsTipoListaPreciosId(){
            $ids = array();
            foreach($this->getCliSubcategoriaInsTipoListaPrecios() as $o){
            
                $ids[] = $o->getCliSubcategoriaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos CliSubcategorias asignados al InsTipoListaPrecio */ 	
	public function setCliSubcategoriaInsTipoListaPrecios($ids){
            $this->deleteCliSubcategoriaInsTipoListaPrecios();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new CliSubcategoriaInsTipoListaPrecio();
                    $o->setCliSubcategoriaId($id);
                    $o->setInsTipoListaPrecioId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion CliSubcategoria en el alta de InsTipoListaPrecio */ 	
	public function getAltaMostrarBloqueRelacionCliSubcategoriaInsTipoListaPrecio(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los CliClientes asignados a InsTipoListaPrecio */ 	
	public function getCliClienteInsTipoListaPreciosId(){
            $ids = array();
            foreach($this->getCliClienteInsTipoListaPrecios() as $o){
            
                $ids[] = $o->getCliClienteId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos CliClientes asignados al InsTipoListaPrecio */ 	
	public function setCliClienteInsTipoListaPrecios($ids){
            $this->deleteCliClienteInsTipoListaPrecios();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new CliClienteInsTipoListaPrecio();
                    $o->setCliClienteId($id);
                    $o->setInsTipoListaPrecioId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion CliCliente en el alta de InsTipoListaPrecio */ 	
	public function getAltaMostrarBloqueRelacionCliClienteInsTipoListaPrecio(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaVendedors asignados a InsTipoListaPrecio */ 	
	public function getVtaVendedorInsTipoListaPreciosId(){
            $ids = array();
            foreach($this->getVtaVendedorInsTipoListaPrecios() as $o){
            
                $ids[] = $o->getVtaVendedorId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaVendedors asignados al InsTipoListaPrecio */ 	
	public function setVtaVendedorInsTipoListaPrecios($ids){
            $this->deleteVtaVendedorInsTipoListaPrecios();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaVendedorInsTipoListaPrecio();
                    $o->setVtaVendedorId($id);
                    $o->setInsTipoListaPrecioId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaVendedor en el alta de InsTipoListaPrecio */ 	
	public function getAltaMostrarBloqueRelacionVtaVendedorInsTipoListaPrecio(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaPoliticaDescuentos asignados a InsTipoListaPrecio */ 	
	public function getVtaPoliticaDescuentoInsTipoListaPreciosId(){
            $ids = array();
            foreach($this->getVtaPoliticaDescuentoInsTipoListaPrecios() as $o){
            
                $ids[] = $o->getVtaPoliticaDescuentoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaPoliticaDescuentos asignados al InsTipoListaPrecio */ 	
	public function setVtaPoliticaDescuentoInsTipoListaPrecios($ids){
            $this->deleteVtaPoliticaDescuentoInsTipoListaPrecios();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaPoliticaDescuentoInsTipoListaPrecio();
                    $o->setVtaPoliticaDescuentoId($id);
                    $o->setInsTipoListaPrecioId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaPoliticaDescuento en el alta de InsTipoListaPrecio */ 	
	public function getAltaMostrarBloqueRelacionVtaPoliticaDescuentoInsTipoListaPrecio(){
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM ins_tipo_lista_precio'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'ins_tipo_lista_precio';");
            
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

            $obs = self::getInsTipoListaPrecios($paginador, $criterio);
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

            $obs = self::getInsTipoListaPrecios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsTipoListaPrecios($paginador, $criterio);
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

            $obs = self::getInsTipoListaPrecios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion_corta' */ 	
	static function getOxDescripcionCorta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION_CORTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsTipoListaPrecios($paginador, $criterio);
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

            $obs = self::getInsTipoListaPrecios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsTipoListaPrecios($paginador, $criterio);
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

            $obs = self::getInsTipoListaPrecios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'porcentaje_incremento' */ 	
	static function getOxPorcentajeIncremento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PORCENTAJE_INCREMENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsTipoListaPrecios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'porcentaje_incremento' */ 	
	static function getOsxPorcentajeIncremento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PORCENTAJE_INCREMENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsTipoListaPrecios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_minimo' */ 	
	static function getOxImporteMinimo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_MINIMO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsTipoListaPrecios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_minimo' */ 	
	static function getOsxImporteMinimo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_MINIMO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsTipoListaPrecios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'incluye_logistica' */ 	
	static function getOxIncluyeLogistica($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INCLUYE_LOGISTICA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsTipoListaPrecios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'incluye_logistica' */ 	
	static function getOsxIncluyeLogistica($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INCLUYE_LOGISTICA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsTipoListaPrecios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'bulto_cerrado' */ 	
	static function getOxBultoCerrado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_BULTO_CERRADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsTipoListaPrecios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'bulto_cerrado' */ 	
	static function getOsxBultoCerrado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_BULTO_CERRADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsTipoListaPrecios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'porcentaje_comision' */ 	
	static function getOxPorcentajeComision($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PORCENTAJE_COMISION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsTipoListaPrecios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'porcentaje_comision' */ 	
	static function getOsxPorcentajeComision($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PORCENTAJE_COMISION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsTipoListaPrecios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'porcentaje_logistica' */ 	
	static function getOxPorcentajeLogistica($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PORCENTAJE_LOGISTICA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsTipoListaPrecios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'porcentaje_logistica' */ 	
	static function getOsxPorcentajeLogistica($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PORCENTAJE_LOGISTICA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsTipoListaPrecios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'porcentaje_descuento_maximo' */ 	
	static function getOxPorcentajeDescuentoMaximo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PORCENTAJE_DESCUENTO_MAXIMO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsTipoListaPrecios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'porcentaje_descuento_maximo' */ 	
	static function getOsxPorcentajeDescuentoMaximo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PORCENTAJE_DESCUENTO_MAXIMO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsTipoListaPrecios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'por_default' */ 	
	static function getOxPorDefault($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_POR_DEFAULT, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsTipoListaPrecios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'por_default' */ 	
	static function getOsxPorDefault($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_POR_DEFAULT, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsTipoListaPrecios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsTipoListaPrecios($paginador, $criterio);
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

            $obs = self::getInsTipoListaPrecios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsTipoListaPrecios($paginador, $criterio);
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

            $obs = self::getInsTipoListaPrecios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsTipoListaPrecios($paginador, $criterio);
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

            $obs = self::getInsTipoListaPrecios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsTipoListaPrecios($paginador, $criterio);
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

            $obs = self::getInsTipoListaPrecios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsTipoListaPrecios($paginador, $criterio);
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

            $obs = self::getInsTipoListaPrecios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsTipoListaPrecios($paginador, $criterio);
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

            $obs = self::getInsTipoListaPrecios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsTipoListaPrecios($paginador, $criterio);
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

            $obs = self::getInsTipoListaPrecios(null, $criterio);
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

            $obs = self::getInsTipoListaPrecios($paginador, $criterio);
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

            $obs = self::getInsTipoListaPrecios($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'ins_tipo_lista_precio_adm');
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
                $c->addTabla(InsTipoListaPrecio::GEN_TABLA);
                $c->addOrden(InsTipoListaPrecio::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $ins_tipo_lista_precios = InsTipoListaPrecio::getInsTipoListaPrecios(null, $c);

                $arr = array();
                foreach($ins_tipo_lista_precios as $ins_tipo_lista_precio){
                    $descripcion = $ins_tipo_lista_precio->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>