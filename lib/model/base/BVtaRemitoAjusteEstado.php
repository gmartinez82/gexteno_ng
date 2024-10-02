<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BVtaRemitoAjusteEstado
{ 
	
	const SES_PAGINACION = 'adm_vtaremitoajusteestado_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_vtaremitoajusteestado_paginas_registros';
	const SES_CRITERIOS = 'adm_vtaremitoajusteestado_criterios';
	
	const GEN_CLASE = 'VtaRemitoAjusteEstado';
	const GEN_TABLA = 'vta_remito_ajuste_estado';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BVtaRemitoAjusteEstado */ 
	const GEN_ATTR_ID = 'vta_remito_ajuste_estado.id';
	const GEN_ATTR_DESCRIPCION = 'vta_remito_ajuste_estado.descripcion';
	const GEN_ATTR_VTA_REMITO_AJUSTE_ID = 'vta_remito_ajuste_estado.vta_remito_ajuste_id';
	const GEN_ATTR_VTA_REMITO_AJUSTE_TIPO_ESTADO_ID = 'vta_remito_ajuste_estado.vta_remito_ajuste_tipo_estado_id';
	const GEN_ATTR_INICIAL = 'vta_remito_ajuste_estado.inicial';
	const GEN_ATTR_ACTUAL = 'vta_remito_ajuste_estado.actual';
	const GEN_ATTR_CANTIDAD_BULTOS = 'vta_remito_ajuste_estado.cantidad_bultos';
	const GEN_ATTR_PESO = 'vta_remito_ajuste_estado.peso';
	const GEN_ATTR_COSTO_ENVIO = 'vta_remito_ajuste_estado.costo_envio';
	const GEN_ATTR_GRAL_EMPRESA_TRANSPORTADORA_ID = 'vta_remito_ajuste_estado.gral_empresa_transportadora_id';
	const GEN_ATTR_GUIA = 'vta_remito_ajuste_estado.guia';
	const GEN_ATTR_RETIRADO_POR = 'vta_remito_ajuste_estado.retirado_por';
	const GEN_ATTR_CODIGO = 'vta_remito_ajuste_estado.codigo';
	const GEN_ATTR_NOTA_INTERNA = 'vta_remito_ajuste_estado.nota_interna';
	const GEN_ATTR_OBSERVACION = 'vta_remito_ajuste_estado.observacion';
	const GEN_ATTR_ORDEN = 'vta_remito_ajuste_estado.orden';
	const GEN_ATTR_ESTADO = 'vta_remito_ajuste_estado.estado';
	const GEN_ATTR_CREADO = 'vta_remito_ajuste_estado.creado';
	const GEN_ATTR_CREADO_POR = 'vta_remito_ajuste_estado.creado_por';
	const GEN_ATTR_MODIFICADO = 'vta_remito_ajuste_estado.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'vta_remito_ajuste_estado.modificado_por';

	/* Constantes de Atributos Min de BVtaRemitoAjusteEstado */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_VTA_REMITO_AJUSTE_ID = 'vta_remito_ajuste_id';
	const GEN_ATTR_MIN_VTA_REMITO_AJUSTE_TIPO_ESTADO_ID = 'vta_remito_ajuste_tipo_estado_id';
	const GEN_ATTR_MIN_INICIAL = 'inicial';
	const GEN_ATTR_MIN_ACTUAL = 'actual';
	const GEN_ATTR_MIN_CANTIDAD_BULTOS = 'cantidad_bultos';
	const GEN_ATTR_MIN_PESO = 'peso';
	const GEN_ATTR_MIN_COSTO_ENVIO = 'costo_envio';
	const GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID = 'gral_empresa_transportadora_id';
	const GEN_ATTR_MIN_GUIA = 'guia';
	const GEN_ATTR_MIN_RETIRADO_POR = 'retirado_por';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
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
	

	/* Atributos de BVtaRemitoAjusteEstado */ 
	private $id;
	private $descripcion;
	private $vta_remito_ajuste_id;
	private $vta_remito_ajuste_tipo_estado_id;
	private $inicial;
	private $actual;
	private $cantidad_bultos;
	private $peso;
	private $costo_envio;
	private $gral_empresa_transportadora_id;
	private $guia;
	private $retirado_por;
	private $codigo;
	private $nota_interna;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BVtaRemitoAjusteEstado */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getVtaRemitoAjusteId(){ if(isset($this->vta_remito_ajuste_id)){ return $this->vta_remito_ajuste_id; }else{ return 'null'; } }
	public function getVtaRemitoAjusteTipoEstadoId(){ if(isset($this->vta_remito_ajuste_tipo_estado_id)){ return $this->vta_remito_ajuste_tipo_estado_id; }else{ return 'null'; } }
	public function getInicial(){ if(isset($this->inicial)){ return $this->inicial; }else{ return 0; } }
	public function getActual(){ if(isset($this->actual)){ return $this->actual; }else{ return 0; } }
	public function getCantidadBultos(){ if(isset($this->cantidad_bultos)){ return $this->cantidad_bultos; }else{ return 0; } }
	public function getPeso(){ if(isset($this->peso)){ return $this->peso; }else{ return 0; } }
	public function getCostoEnvio(){ if(isset($this->costo_envio)){ return $this->costo_envio; }else{ return 0; } }
	public function getGralEmpresaTransportadoraId(){ if(isset($this->gral_empresa_transportadora_id)){ return $this->gral_empresa_transportadora_id; }else{ return 'null'; } }
	public function getGuia(){ if(isset($this->guia)){ return $this->guia; }else{ return ''; } }
	public function getRetiradoPor(){ if(isset($this->retirado_por)){ return $this->retirado_por; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getNotaInterna(){ if(isset($this->nota_interna)){ return $this->nota_interna; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BVtaRemitoAjusteEstado */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_VTA_REMITO_AJUSTE_ID."
				, ".self::GEN_ATTR_VTA_REMITO_AJUSTE_TIPO_ESTADO_ID."
				, ".self::GEN_ATTR_INICIAL."
				, ".self::GEN_ATTR_ACTUAL."
				, ".self::GEN_ATTR_CANTIDAD_BULTOS."
				, ".self::GEN_ATTR_PESO."
				, ".self::GEN_ATTR_COSTO_ENVIO."
				, ".self::GEN_ATTR_GRAL_EMPRESA_TRANSPORTADORA_ID."
				, ".self::GEN_ATTR_GUIA."
				, ".self::GEN_ATTR_RETIRADO_POR."
				, ".self::GEN_ATTR_CODIGO."
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
				$this->setVtaRemitoAjusteId($fila[self::GEN_ATTR_MIN_VTA_REMITO_AJUSTE_ID]);
				$this->setVtaRemitoAjusteTipoEstadoId($fila[self::GEN_ATTR_MIN_VTA_REMITO_AJUSTE_TIPO_ESTADO_ID]);
				$this->setInicial($fila[self::GEN_ATTR_MIN_INICIAL]);
				$this->setActual($fila[self::GEN_ATTR_MIN_ACTUAL]);
				$this->setCantidadBultos($fila[self::GEN_ATTR_MIN_CANTIDAD_BULTOS]);
				$this->setPeso($fila[self::GEN_ATTR_MIN_PESO]);
				$this->setCostoEnvio($fila[self::GEN_ATTR_MIN_COSTO_ENVIO]);
				$this->setGralEmpresaTransportadoraId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID]);
				$this->setGuia($fila[self::GEN_ATTR_MIN_GUIA]);
				$this->setRetiradoPor($fila[self::GEN_ATTR_MIN_RETIRADO_POR]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
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
	public function setVtaRemitoAjusteId($v){ $this->vta_remito_ajuste_id = $v; }
	public function setVtaRemitoAjusteTipoEstadoId($v){ $this->vta_remito_ajuste_tipo_estado_id = $v; }
	public function setInicial($v){ $this->inicial = $v; }
	public function setActual($v){ $this->actual = $v; }
	public function setCantidadBultos($v){ $this->cantidad_bultos = $v; }
	public function setPeso($v){ $this->peso = $v; }
	public function setCostoEnvio($v){ $this->costo_envio = $v; }
	public function setGralEmpresaTransportadoraId($v){ $this->gral_empresa_transportadora_id = $v; }
	public function setGuia($v){ $this->guia = $v; }
	public function setRetiradoPor($v){ $this->retirado_por = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setNotaInterna($v){ $this->nota_interna = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new VtaRemitoAjusteEstado();
            $o->setId($fila[VtaRemitoAjusteEstado::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setVtaRemitoAjusteId($fila[self::GEN_ATTR_MIN_VTA_REMITO_AJUSTE_ID]);
			$o->setVtaRemitoAjusteTipoEstadoId($fila[self::GEN_ATTR_MIN_VTA_REMITO_AJUSTE_TIPO_ESTADO_ID]);
			$o->setInicial($fila[self::GEN_ATTR_MIN_INICIAL]);
			$o->setActual($fila[self::GEN_ATTR_MIN_ACTUAL]);
			$o->setCantidadBultos($fila[self::GEN_ATTR_MIN_CANTIDAD_BULTOS]);
			$o->setPeso($fila[self::GEN_ATTR_MIN_PESO]);
			$o->setCostoEnvio($fila[self::GEN_ATTR_MIN_COSTO_ENVIO]);
			$o->setGralEmpresaTransportadoraId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID]);
			$o->setGuia($fila[self::GEN_ATTR_MIN_GUIA]);
			$o->setRetiradoPor($fila[self::GEN_ATTR_MIN_RETIRADO_POR]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
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

	/* Control de BVtaRemitoAjusteEstado */ 	
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

	/* Cambia el estado de BVtaRemitoAjusteEstado */ 	
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

	/* Save de BVtaRemitoAjusteEstado */ 	
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
						, ".self::GEN_ATTR_MIN_VTA_REMITO_AJUSTE_ID."
						, ".self::GEN_ATTR_MIN_VTA_REMITO_AJUSTE_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_INICIAL."
						, ".self::GEN_ATTR_MIN_ACTUAL."
						, ".self::GEN_ATTR_MIN_CANTIDAD_BULTOS."
						, ".self::GEN_ATTR_MIN_PESO."
						, ".self::GEN_ATTR_MIN_COSTO_ENVIO."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID."
						, ".self::GEN_ATTR_MIN_GUIA."
						, ".self::GEN_ATTR_MIN_RETIRADO_POR."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('vta_remito_ajuste_estado_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getVtaRemitoAjusteId()."
						, ".$this->getVtaRemitoAjusteTipoEstadoId()."
						, ".$this->getInicial()."
						, ".$this->getActual()."
						, ".$this->getCantidadBultos()."
						, '".$this->getPeso()."'
						, '".$this->getCostoEnvio()."'
						, ".$this->getGralEmpresaTransportadoraId()."
						, '".$this->getGuia()."'
						, '".$this->getRetiradoPor()."'
						, '".$this->getCodigo()."'
						, '".$this->getNotaInterna()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('vta_remito_ajuste_estado_seq')";
            
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
                 
				 ".VtaRemitoAjusteEstado::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_VTA_REMITO_AJUSTE_ID." = ".$this->getVtaRemitoAjusteId()."
						, ".self::GEN_ATTR_MIN_VTA_REMITO_AJUSTE_TIPO_ESTADO_ID." = ".$this->getVtaRemitoAjusteTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_INICIAL." = ".$this->getInicial()."
						, ".self::GEN_ATTR_MIN_ACTUAL." = ".$this->getActual()."
						, ".self::GEN_ATTR_MIN_CANTIDAD_BULTOS." = ".$this->getCantidadBultos()."
						, ".self::GEN_ATTR_MIN_PESO." = '".$this->getPeso()."'
						, ".self::GEN_ATTR_MIN_COSTO_ENVIO." = '".$this->getCostoEnvio()."'
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID." = ".$this->getGralEmpresaTransportadoraId()."
						, ".self::GEN_ATTR_MIN_GUIA." = '".$this->getGuia()."'
						, ".self::GEN_ATTR_MIN_RETIRADO_POR." = '".$this->getRetiradoPor()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
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
						, ".self::GEN_ATTR_MIN_VTA_REMITO_AJUSTE_ID."
						, ".self::GEN_ATTR_MIN_VTA_REMITO_AJUSTE_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_INICIAL."
						, ".self::GEN_ATTR_MIN_ACTUAL."
						, ".self::GEN_ATTR_MIN_CANTIDAD_BULTOS."
						, ".self::GEN_ATTR_MIN_PESO."
						, ".self::GEN_ATTR_MIN_COSTO_ENVIO."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID."
						, ".self::GEN_ATTR_MIN_GUIA."
						, ".self::GEN_ATTR_MIN_RETIRADO_POR."
						, ".self::GEN_ATTR_MIN_CODIGO."
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
						, ".$this->getVtaRemitoAjusteId()."
						, ".$this->getVtaRemitoAjusteTipoEstadoId()."
						, ".$this->getInicial()."
						, ".$this->getActual()."
						, ".$this->getCantidadBultos()."
						, '".$this->getPeso()."'
						, '".$this->getCostoEnvio()."'
						, ".$this->getGralEmpresaTransportadoraId()."
						, '".$this->getGuia()."'
						, '".$this->getRetiradoPor()."'
						, '".$this->getCodigo()."'
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
                     
				 ".VtaRemitoAjusteEstado::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_VTA_REMITO_AJUSTE_ID." = ".$this->getVtaRemitoAjusteId()."
						, ".self::GEN_ATTR_MIN_VTA_REMITO_AJUSTE_TIPO_ESTADO_ID." = ".$this->getVtaRemitoAjusteTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_INICIAL." = ".$this->getInicial()."
						, ".self::GEN_ATTR_MIN_ACTUAL." = ".$this->getActual()."
						, ".self::GEN_ATTR_MIN_CANTIDAD_BULTOS." = ".$this->getCantidadBultos()."
						, ".self::GEN_ATTR_MIN_PESO." = '".$this->getPeso()."'
						, ".self::GEN_ATTR_MIN_COSTO_ENVIO." = '".$this->getCostoEnvio()."'
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID." = ".$this->getGralEmpresaTransportadoraId()."
						, ".self::GEN_ATTR_MIN_GUIA." = '".$this->getGuia()."'
						, ".self::GEN_ATTR_MIN_RETIRADO_POR." = '".$this->getRetiradoPor()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
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
            $o = new VtaRemitoAjusteEstado();
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

	/* Delete de BVtaRemitoAjusteEstado */ 	
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
	
	public function duplicarVtaRemitoAjusteEstado(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getVtaRemitoAjusteEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = VtaRemitoAjusteEstado::setAplicarFiltrosDeAlcance($criterio);

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
	
		$vtaremitoajusteestados = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $vtaremitoajusteestado = new VtaRemitoAjusteEstado();
                    $vtaremitoajusteestado->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $vtaremitoajusteestado->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$vtaremitoajusteestado->setVtaRemitoAjusteId($fila[self::GEN_ATTR_MIN_VTA_REMITO_AJUSTE_ID]);
			$vtaremitoajusteestado->setVtaRemitoAjusteTipoEstadoId($fila[self::GEN_ATTR_MIN_VTA_REMITO_AJUSTE_TIPO_ESTADO_ID]);
			$vtaremitoajusteestado->setInicial($fila[self::GEN_ATTR_MIN_INICIAL]);
			$vtaremitoajusteestado->setActual($fila[self::GEN_ATTR_MIN_ACTUAL]);
			$vtaremitoajusteestado->setCantidadBultos($fila[self::GEN_ATTR_MIN_CANTIDAD_BULTOS]);
			$vtaremitoajusteestado->setPeso($fila[self::GEN_ATTR_MIN_PESO]);
			$vtaremitoajusteestado->setCostoEnvio($fila[self::GEN_ATTR_MIN_COSTO_ENVIO]);
			$vtaremitoajusteestado->setGralEmpresaTransportadoraId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID]);
			$vtaremitoajusteestado->setGuia($fila[self::GEN_ATTR_MIN_GUIA]);
			$vtaremitoajusteestado->setRetiradoPor($fila[self::GEN_ATTR_MIN_RETIRADO_POR]);
			$vtaremitoajusteestado->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$vtaremitoajusteestado->setNotaInterna($fila[self::GEN_ATTR_MIN_NOTA_INTERNA]);
			$vtaremitoajusteestado->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$vtaremitoajusteestado->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$vtaremitoajusteestado->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$vtaremitoajusteestado->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$vtaremitoajusteestado->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$vtaremitoajusteestado->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$vtaremitoajusteestado->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $vtaremitoajusteestados[] = $vtaremitoajusteestado;
		}
		
		return $vtaremitoajusteestados;
	}	
	

	/* Método getVtaRemitoAjusteEstados Habilitados */ 	
	static function getVtaRemitoAjusteEstadosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return VtaRemitoAjusteEstado::getVtaRemitoAjusteEstados($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getVtaRemitoAjusteEstados para listado de Backend */ 	
	static function getVtaRemitoAjusteEstadosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return VtaRemitoAjusteEstado::getVtaRemitoAjusteEstados($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getVtaRemitoAjusteEstadosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = VtaRemitoAjusteEstado::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = VtaRemitoAjusteEstado::getVtaRemitoAjusteEstados($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaRemitoAjusteEstados filtrado para select */ 	
	static function getVtaRemitoAjusteEstadosCmbF($paginador = null, $criterio = null){
            $col = VtaRemitoAjusteEstado::getVtaRemitoAjusteEstados($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaRemitoAjusteEstados filtrado por una coleccion de objetos foraneos de VtaRemitoAjuste */ 	
	static function getVtaRemitoAjusteEstadosXVtaRemitoAjustes($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaRemitoAjusteEstado::GEN_ATTR_VTA_REMITO_AJUSTE_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaRemitoAjusteEstado::GEN_TABLA);
            $c->addOrden(VtaRemitoAjusteEstado::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaRemitoAjusteEstado::getVtaRemitoAjusteEstados($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaRemitoAjusteId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaRemitoAjusteEstados filtrado por una coleccion de objetos foraneos de VtaRemitoAjusteTipoEstado */ 	
	static function getVtaRemitoAjusteEstadosXVtaRemitoAjusteTipoEstados($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaRemitoAjusteEstado::GEN_ATTR_VTA_REMITO_AJUSTE_TIPO_ESTADO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaRemitoAjusteEstado::GEN_TABLA);
            $c->addOrden(VtaRemitoAjusteEstado::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaRemitoAjusteEstado::getVtaRemitoAjusteEstados($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaRemitoAjusteTipoEstadoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaRemitoAjusteEstados filtrado por una coleccion de objetos foraneos de GralEmpresaTransportadora */ 	
	static function getVtaRemitoAjusteEstadosXGralEmpresaTransportadoras($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaRemitoAjusteEstado::GEN_ATTR_GRAL_EMPRESA_TRANSPORTADORA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaRemitoAjusteEstado::GEN_TABLA);
            $c->addOrden(VtaRemitoAjusteEstado::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaRemitoAjusteEstado::getVtaRemitoAjusteEstados($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralEmpresaTransportadoraId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'vta_remito_ajuste_estado_adm.php';
            $url_gestion = 'vta_remito_ajuste_estado_gestion.php';
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
	

	/* Metodo que retorna el VtaRemitoAjuste (Clave Foranea) */ 	
    public function getVtaRemitoAjuste(){
        $o = new VtaRemitoAjuste();
        $o->setId($this->getVtaRemitoAjusteId());
        return $o;			
    }

	/* Metodo que retorna el VtaRemitoAjuste (Clave Foranea) en Array */ 	
    public function getVtaRemitoAjusteEnArray(&$arr_os){
        if($this->getVtaRemitoAjusteId() != 'null'){
            if(isset($arr_os[$this->getVtaRemitoAjusteId()])){
                $o = $arr_os[$this->getVtaRemitoAjusteId()];
            }else{
                $o = VtaRemitoAjuste::getOxId($this->getVtaRemitoAjusteId());
                if($o){
                    $arr_os[$this->getVtaRemitoAjusteId()] = $o;
                }
            }
        }else{
            $o = new VtaRemitoAjuste();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaRemitoAjusteTipoEstado (Clave Foranea) */ 	
    public function getVtaRemitoAjusteTipoEstado(){
        $o = new VtaRemitoAjusteTipoEstado();
        $o->setId($this->getVtaRemitoAjusteTipoEstadoId());
        return $o;			
    }

	/* Metodo que retorna el VtaRemitoAjusteTipoEstado (Clave Foranea) en Array */ 	
    public function getVtaRemitoAjusteTipoEstadoEnArray(&$arr_os){
        if($this->getVtaRemitoAjusteTipoEstadoId() != 'null'){
            if(isset($arr_os[$this->getVtaRemitoAjusteTipoEstadoId()])){
                $o = $arr_os[$this->getVtaRemitoAjusteTipoEstadoId()];
            }else{
                $o = VtaRemitoAjusteTipoEstado::getOxId($this->getVtaRemitoAjusteTipoEstadoId());
                if($o){
                    $arr_os[$this->getVtaRemitoAjusteTipoEstadoId()] = $o;
                }
            }
        }else{
            $o = new VtaRemitoAjusteTipoEstado();
        }
        return $o;		
    }

	/* Metodo que retorna el GralEmpresaTransportadora (Clave Foranea) */ 	
    public function getGralEmpresaTransportadora(){
        $o = new GralEmpresaTransportadora();
        $o->setId($this->getGralEmpresaTransportadoraId());
        return $o;			
    }

	/* Metodo que retorna el GralEmpresaTransportadora (Clave Foranea) en Array */ 	
    public function getGralEmpresaTransportadoraEnArray(&$arr_os){
        if($this->getGralEmpresaTransportadoraId() != 'null'){
            if(isset($arr_os[$this->getGralEmpresaTransportadoraId()])){
                $o = $arr_os[$this->getGralEmpresaTransportadoraId()];
            }else{
                $o = GralEmpresaTransportadora::getOxId($this->getGralEmpresaTransportadoraId());
                if($o){
                    $arr_os[$this->getGralEmpresaTransportadoraId()] = $o;
                }
            }
        }else{
            $o = new GralEmpresaTransportadora();
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
            		
        if($contexto_solicitante != VtaRemitoAjuste::GEN_CLASE){
            if($this->getVtaRemitoAjuste()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaRemitoAjuste::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaRemitoAjuste()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaRemitoAjusteTipoEstado::GEN_CLASE){
            if($this->getVtaRemitoAjusteTipoEstado()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaRemitoAjusteTipoEstado::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaRemitoAjusteTipoEstado()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralEmpresaTransportadora::GEN_CLASE){
            if($this->getGralEmpresaTransportadora()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralEmpresaTransportadora::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralEmpresaTransportadora()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM vta_remito_ajuste_estado'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'vta_remito_ajuste_estado';");
            
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

            $obs = self::getVtaRemitoAjusteEstados($paginador, $criterio);
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

            $obs = self::getVtaRemitoAjusteEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjusteEstados($paginador, $criterio);
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

            $obs = self::getVtaRemitoAjusteEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_remito_ajuste_id' */ 	
	static function getOxVtaRemitoAjusteId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_REMITO_AJUSTE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjusteEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_remito_ajuste_id' */ 	
	static function getOsxVtaRemitoAjusteId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_REMITO_AJUSTE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRemitoAjusteEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_remito_ajuste_tipo_estado_id' */ 	
	static function getOxVtaRemitoAjusteTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_REMITO_AJUSTE_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjusteEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_remito_ajuste_tipo_estado_id' */ 	
	static function getOsxVtaRemitoAjusteTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_REMITO_AJUSTE_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRemitoAjusteEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'inicial' */ 	
	static function getOxInicial($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INICIAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjusteEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'inicial' */ 	
	static function getOsxInicial($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INICIAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRemitoAjusteEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'actual' */ 	
	static function getOxActual($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ACTUAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjusteEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'actual' */ 	
	static function getOsxActual($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ACTUAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRemitoAjusteEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cantidad_bultos' */ 	
	static function getOxCantidadBultos($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD_BULTOS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjusteEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cantidad_bultos' */ 	
	static function getOsxCantidadBultos($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD_BULTOS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRemitoAjusteEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'peso' */ 	
	static function getOxPeso($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PESO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjusteEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'peso' */ 	
	static function getOsxPeso($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PESO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRemitoAjusteEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'costo_envio' */ 	
	static function getOxCostoEnvio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_COSTO_ENVIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjusteEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'costo_envio' */ 	
	static function getOsxCostoEnvio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_COSTO_ENVIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRemitoAjusteEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_empresa_transportadora_id' */ 	
	static function getOxGralEmpresaTransportadoraId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_EMPRESA_TRANSPORTADORA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjusteEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_empresa_transportadora_id' */ 	
	static function getOsxGralEmpresaTransportadoraId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_EMPRESA_TRANSPORTADORA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRemitoAjusteEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'guia' */ 	
	static function getOxGuia($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GUIA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjusteEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'guia' */ 	
	static function getOsxGuia($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GUIA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRemitoAjusteEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'retirado_por' */ 	
	static function getOxRetiradoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_RETIRADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjusteEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'retirado_por' */ 	
	static function getOsxRetiradoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_RETIRADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRemitoAjusteEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjusteEstados($paginador, $criterio);
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

            $obs = self::getVtaRemitoAjusteEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nota_interna' */ 	
	static function getOxNotaInterna($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTA_INTERNA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjusteEstados($paginador, $criterio);
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

            $obs = self::getVtaRemitoAjusteEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjusteEstados($paginador, $criterio);
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

            $obs = self::getVtaRemitoAjusteEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjusteEstados($paginador, $criterio);
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

            $obs = self::getVtaRemitoAjusteEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjusteEstados($paginador, $criterio);
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

            $obs = self::getVtaRemitoAjusteEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjusteEstados($paginador, $criterio);
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

            $obs = self::getVtaRemitoAjusteEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjusteEstados($paginador, $criterio);
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

            $obs = self::getVtaRemitoAjusteEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjusteEstados($paginador, $criterio);
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

            $obs = self::getVtaRemitoAjusteEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjusteEstados($paginador, $criterio);
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

            $obs = self::getVtaRemitoAjusteEstados(null, $criterio);
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

            $obs = self::getVtaRemitoAjusteEstados($paginador, $criterio);
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

            $obs = self::getVtaRemitoAjusteEstados($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'vta_remito_ajuste_estado_adm');
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
                $c->addTabla(VtaRemitoAjusteEstado::GEN_TABLA);
                $c->addOrden(VtaRemitoAjusteEstado::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $vta_remito_ajuste_estados = VtaRemitoAjusteEstado::getVtaRemitoAjusteEstados(null, $c);

                $arr = array();
                foreach($vta_remito_ajuste_estados as $vta_remito_ajuste_estado){
                    $descripcion = $vta_remito_ajuste_estado->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>