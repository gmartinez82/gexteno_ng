<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BVtaAjusteHaberVtaAjusteDebeVtaTributo
{ 
	
	const SES_PAGINACION = 'adm_vtaajustehabervtaajustedebevtatributo_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_vtaajustehabervtaajustedebevtatributo_paginas_registros';
	const SES_CRITERIOS = 'adm_vtaajustehabervtaajustedebevtatributo_criterios';
	
	const GEN_CLASE = 'VtaAjusteHaberVtaAjusteDebeVtaTributo';
	const GEN_TABLA = 'vta_ajuste_haber_vta_ajuste_debe_vta_tributo';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	
	
        const GEN_FRTN_VINCULO_UNO_ANCHO = '';
        const GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD = 20;
        const GEN_FRTN_VINCULO_CRITERIO_ORDEN = 'ASC';
        

	/* Constantes de Atributos de BVtaAjusteHaberVtaAjusteDebeVtaTributo */ 
	const GEN_ATTR_ID = 'vta_ajuste_haber_vta_ajuste_debe_vta_tributo.id';
	const GEN_ATTR_DESCRIPCION = 'vta_ajuste_haber_vta_ajuste_debe_vta_tributo.descripcion';
	const GEN_ATTR_VTA_AJUSTE_HABER_ID = 'vta_ajuste_haber_vta_ajuste_debe_vta_tributo.vta_ajuste_haber_id';
	const GEN_ATTR_VTA_AJUSTE_DEBE_VTA_TRIBUTO_ID = 'vta_ajuste_haber_vta_ajuste_debe_vta_tributo.vta_ajuste_debe_vta_tributo_id';
	const GEN_ATTR_IMPORTE_IMPONIBLE = 'vta_ajuste_haber_vta_ajuste_debe_vta_tributo.importe_imponible';
	const GEN_ATTR_IMPORTE_TRIBUTO = 'vta_ajuste_haber_vta_ajuste_debe_vta_tributo.importe_tributo';
	const GEN_ATTR_ALICUOTA_PORCENTUAL = 'vta_ajuste_haber_vta_ajuste_debe_vta_tributo.alicuota_porcentual';
	const GEN_ATTR_ALICUOTA_DECIMAL = 'vta_ajuste_haber_vta_ajuste_debe_vta_tributo.alicuota_decimal';
	const GEN_ATTR_CODIGO = 'vta_ajuste_haber_vta_ajuste_debe_vta_tributo.codigo';
	const GEN_ATTR_OBSERVACION = 'vta_ajuste_haber_vta_ajuste_debe_vta_tributo.observacion';
	const GEN_ATTR_ORDEN = 'vta_ajuste_haber_vta_ajuste_debe_vta_tributo.orden';
	const GEN_ATTR_ESTADO = 'vta_ajuste_haber_vta_ajuste_debe_vta_tributo.estado';
	const GEN_ATTR_CREADO = 'vta_ajuste_haber_vta_ajuste_debe_vta_tributo.creado';
	const GEN_ATTR_CREADO_POR = 'vta_ajuste_haber_vta_ajuste_debe_vta_tributo.creado_por';
	const GEN_ATTR_MODIFICADO = 'vta_ajuste_haber_vta_ajuste_debe_vta_tributo.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'vta_ajuste_haber_vta_ajuste_debe_vta_tributo.modificado_por';

	/* Constantes de Atributos Min de BVtaAjusteHaberVtaAjusteDebeVtaTributo */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_VTA_AJUSTE_HABER_ID = 'vta_ajuste_haber_id';
	const GEN_ATTR_MIN_VTA_AJUSTE_DEBE_VTA_TRIBUTO_ID = 'vta_ajuste_debe_vta_tributo_id';
	const GEN_ATTR_MIN_IMPORTE_IMPONIBLE = 'importe_imponible';
	const GEN_ATTR_MIN_IMPORTE_TRIBUTO = 'importe_tributo';
	const GEN_ATTR_MIN_ALICUOTA_PORCENTUAL = 'alicuota_porcentual';
	const GEN_ATTR_MIN_ALICUOTA_DECIMAL = 'alicuota_decimal';
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
	

	/* Atributos de BVtaAjusteHaberVtaAjusteDebeVtaTributo */ 
	private $id;
	private $descripcion;
	private $vta_ajuste_haber_id;
	private $vta_ajuste_debe_vta_tributo_id;
	private $importe_imponible;
	private $importe_tributo;
	private $alicuota_porcentual;
	private $alicuota_decimal;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BVtaAjusteHaberVtaAjusteDebeVtaTributo */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getVtaAjusteHaberId(){ if(isset($this->vta_ajuste_haber_id)){ return $this->vta_ajuste_haber_id; }else{ return 'null'; } }
	public function getVtaAjusteDebeVtaTributoId(){ if(isset($this->vta_ajuste_debe_vta_tributo_id)){ return $this->vta_ajuste_debe_vta_tributo_id; }else{ return 'null'; } }
	public function getImporteImponible(){ if(isset($this->importe_imponible)){ return $this->importe_imponible; }else{ return 0; } }
	public function getImporteTributo(){ if(isset($this->importe_tributo)){ return $this->importe_tributo; }else{ return 0; } }
	public function getAlicuotaPorcentual(){ if(isset($this->alicuota_porcentual)){ return $this->alicuota_porcentual; }else{ return 0; } }
	public function getAlicuotaDecimal(){ if(isset($this->alicuota_decimal)){ return $this->alicuota_decimal; }else{ return 0; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BVtaAjusteHaberVtaAjusteDebeVtaTributo */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_VTA_AJUSTE_HABER_ID."
				, ".self::GEN_ATTR_VTA_AJUSTE_DEBE_VTA_TRIBUTO_ID."
				, ".self::GEN_ATTR_IMPORTE_IMPONIBLE."
				, ".self::GEN_ATTR_IMPORTE_TRIBUTO."
				, ".self::GEN_ATTR_ALICUOTA_PORCENTUAL."
				, ".self::GEN_ATTR_ALICUOTA_DECIMAL."
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
				$this->setVtaAjusteHaberId($fila[self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_ID]);
				$this->setVtaAjusteDebeVtaTributoId($fila[self::GEN_ATTR_MIN_VTA_AJUSTE_DEBE_VTA_TRIBUTO_ID]);
				$this->setImporteImponible($fila[self::GEN_ATTR_MIN_IMPORTE_IMPONIBLE]);
				$this->setImporteTributo($fila[self::GEN_ATTR_MIN_IMPORTE_TRIBUTO]);
				$this->setAlicuotaPorcentual($fila[self::GEN_ATTR_MIN_ALICUOTA_PORCENTUAL]);
				$this->setAlicuotaDecimal($fila[self::GEN_ATTR_MIN_ALICUOTA_DECIMAL]);
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
	public function setVtaAjusteHaberId($v){ $this->vta_ajuste_haber_id = $v; }
	public function setVtaAjusteDebeVtaTributoId($v){ $this->vta_ajuste_debe_vta_tributo_id = $v; }
	public function setImporteImponible($v){ $this->importe_imponible = $v; }
	public function setImporteTributo($v){ $this->importe_tributo = $v; }
	public function setAlicuotaPorcentual($v){ $this->alicuota_porcentual = $v; }
	public function setAlicuotaDecimal($v){ $this->alicuota_decimal = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new VtaAjusteHaberVtaAjusteDebeVtaTributo();
            $o->setId($fila[VtaAjusteHaberVtaAjusteDebeVtaTributo::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setVtaAjusteHaberId($fila[self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_ID]);
			$o->setVtaAjusteDebeVtaTributoId($fila[self::GEN_ATTR_MIN_VTA_AJUSTE_DEBE_VTA_TRIBUTO_ID]);
			$o->setImporteImponible($fila[self::GEN_ATTR_MIN_IMPORTE_IMPONIBLE]);
			$o->setImporteTributo($fila[self::GEN_ATTR_MIN_IMPORTE_TRIBUTO]);
			$o->setAlicuotaPorcentual($fila[self::GEN_ATTR_MIN_ALICUOTA_PORCENTUAL]);
			$o->setAlicuotaDecimal($fila[self::GEN_ATTR_MIN_ALICUOTA_DECIMAL]);
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

	/* Control de BVtaAjusteHaberVtaAjusteDebeVtaTributo */ 	
	public function control(){
            $error = new DbError();
        
            
            $this->error = $error;
            return $error;
	}

	/* Cambia el estado de BVtaAjusteHaberVtaAjusteDebeVtaTributo */ 	
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

	/* Save de BVtaAjusteHaberVtaAjusteDebeVtaTributo */ 	
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
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_ID."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_DEBE_VTA_TRIBUTO_ID."
						, ".self::GEN_ATTR_MIN_IMPORTE_IMPONIBLE."
						, ".self::GEN_ATTR_MIN_IMPORTE_TRIBUTO."
						, ".self::GEN_ATTR_MIN_ALICUOTA_PORCENTUAL."
						, ".self::GEN_ATTR_MIN_ALICUOTA_DECIMAL."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('vta_ajuste_haber_vta_ajuste_debe_vta_tributo_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getVtaAjusteHaberId()."
						, ".$this->getVtaAjusteDebeVtaTributoId()."
						, '".$this->getImporteImponible()."'
						, '".$this->getImporteTributo()."'
						, '".$this->getAlicuotaPorcentual()."'
						, '".$this->getAlicuotaDecimal()."'
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('vta_ajuste_haber_vta_ajuste_debe_vta_tributo_seq')";
            
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
                 
				 ".VtaAjusteHaberVtaAjusteDebeVtaTributo::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_ID." = ".$this->getVtaAjusteHaberId()."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_DEBE_VTA_TRIBUTO_ID." = ".$this->getVtaAjusteDebeVtaTributoId()."
						, ".self::GEN_ATTR_MIN_IMPORTE_IMPONIBLE." = '".$this->getImporteImponible()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_TRIBUTO." = '".$this->getImporteTributo()."'
						, ".self::GEN_ATTR_MIN_ALICUOTA_PORCENTUAL." = '".$this->getAlicuotaPorcentual()."'
						, ".self::GEN_ATTR_MIN_ALICUOTA_DECIMAL." = '".$this->getAlicuotaDecimal()."'
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
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_ID."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_DEBE_VTA_TRIBUTO_ID."
						, ".self::GEN_ATTR_MIN_IMPORTE_IMPONIBLE."
						, ".self::GEN_ATTR_MIN_IMPORTE_TRIBUTO."
						, ".self::GEN_ATTR_MIN_ALICUOTA_PORCENTUAL."
						, ".self::GEN_ATTR_MIN_ALICUOTA_DECIMAL."
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
						, ".$this->getVtaAjusteHaberId()."
						, ".$this->getVtaAjusteDebeVtaTributoId()."
						, '".$this->getImporteImponible()."'
						, '".$this->getImporteTributo()."'
						, '".$this->getAlicuotaPorcentual()."'
						, '".$this->getAlicuotaDecimal()."'
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
                     
				 ".VtaAjusteHaberVtaAjusteDebeVtaTributo::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_ID." = ".$this->getVtaAjusteHaberId()."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_DEBE_VTA_TRIBUTO_ID." = ".$this->getVtaAjusteDebeVtaTributoId()."
						, ".self::GEN_ATTR_MIN_IMPORTE_IMPONIBLE." = '".$this->getImporteImponible()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_TRIBUTO." = '".$this->getImporteTributo()."'
						, ".self::GEN_ATTR_MIN_ALICUOTA_PORCENTUAL." = '".$this->getAlicuotaPorcentual()."'
						, ".self::GEN_ATTR_MIN_ALICUOTA_DECIMAL." = '".$this->getAlicuotaDecimal()."'
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
            $o = new VtaAjusteHaberVtaAjusteDebeVtaTributo();
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

	/* Delete de BVtaAjusteHaberVtaAjusteDebeVtaTributo */ 	
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
	
	public function duplicarVtaAjusteHaberVtaAjusteDebeVtaTributo(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getVtaAjusteHaberVtaAjusteDebeVtaTributos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = VtaAjusteHaberVtaAjusteDebeVtaTributo::setAplicarFiltrosDeAlcance($criterio);

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
	
		$vtaajustehabervtaajustedebevtatributos = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $vtaajustehabervtaajustedebevtatributo = new VtaAjusteHaberVtaAjusteDebeVtaTributo();
                    $vtaajustehabervtaajustedebevtatributo->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $vtaajustehabervtaajustedebevtatributo->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$vtaajustehabervtaajustedebevtatributo->setVtaAjusteHaberId($fila[self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_ID]);
			$vtaajustehabervtaajustedebevtatributo->setVtaAjusteDebeVtaTributoId($fila[self::GEN_ATTR_MIN_VTA_AJUSTE_DEBE_VTA_TRIBUTO_ID]);
			$vtaajustehabervtaajustedebevtatributo->setImporteImponible($fila[self::GEN_ATTR_MIN_IMPORTE_IMPONIBLE]);
			$vtaajustehabervtaajustedebevtatributo->setImporteTributo($fila[self::GEN_ATTR_MIN_IMPORTE_TRIBUTO]);
			$vtaajustehabervtaajustedebevtatributo->setAlicuotaPorcentual($fila[self::GEN_ATTR_MIN_ALICUOTA_PORCENTUAL]);
			$vtaajustehabervtaajustedebevtatributo->setAlicuotaDecimal($fila[self::GEN_ATTR_MIN_ALICUOTA_DECIMAL]);
			$vtaajustehabervtaajustedebevtatributo->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$vtaajustehabervtaajustedebevtatributo->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$vtaajustehabervtaajustedebevtatributo->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$vtaajustehabervtaajustedebevtatributo->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$vtaajustehabervtaajustedebevtatributo->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$vtaajustehabervtaajustedebevtatributo->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$vtaajustehabervtaajustedebevtatributo->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$vtaajustehabervtaajustedebevtatributo->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $vtaajustehabervtaajustedebevtatributos[] = $vtaajustehabervtaajustedebevtatributo;
		}
		
		return $vtaajustehabervtaajustedebevtatributos;
	}	
	

	/* Método getVtaAjusteHaberVtaAjusteDebeVtaTributos Habilitados */ 	
	static function getVtaAjusteHaberVtaAjusteDebeVtaTributosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return VtaAjusteHaberVtaAjusteDebeVtaTributo::getVtaAjusteHaberVtaAjusteDebeVtaTributos($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getVtaAjusteHaberVtaAjusteDebeVtaTributos para listado de Backend */ 	
	static function getVtaAjusteHaberVtaAjusteDebeVtaTributosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return VtaAjusteHaberVtaAjusteDebeVtaTributo::getVtaAjusteHaberVtaAjusteDebeVtaTributos($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getVtaAjusteHaberVtaAjusteDebeVtaTributosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = VtaAjusteHaberVtaAjusteDebeVtaTributo::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = VtaAjusteHaberVtaAjusteDebeVtaTributo::getVtaAjusteHaberVtaAjusteDebeVtaTributos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaAjusteHaberVtaAjusteDebeVtaTributos filtrado para select */ 	
	static function getVtaAjusteHaberVtaAjusteDebeVtaTributosCmbF($paginador = null, $criterio = null){
            $col = VtaAjusteHaberVtaAjusteDebeVtaTributo::getVtaAjusteHaberVtaAjusteDebeVtaTributos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaAjusteHaberVtaAjusteDebeVtaTributos filtrado por una coleccion de objetos foraneos de VtaAjusteHaber */ 	
	static function getVtaAjusteHaberVtaAjusteDebeVtaTributosXVtaAjusteHabers($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteHaberVtaAjusteDebeVtaTributo::GEN_ATTR_VTA_AJUSTE_HABER_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteHaberVtaAjusteDebeVtaTributo::GEN_TABLA);
            $c->addOrden(VtaAjusteHaberVtaAjusteDebeVtaTributo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteHaberVtaAjusteDebeVtaTributo::getVtaAjusteHaberVtaAjusteDebeVtaTributos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaAjusteHaberId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteHaberVtaAjusteDebeVtaTributos filtrado por una coleccion de objetos foraneos de VtaAjusteDebeVtaTributo */ 	
	static function getVtaAjusteHaberVtaAjusteDebeVtaTributosXVtaAjusteDebeVtaTributos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteHaberVtaAjusteDebeVtaTributo::GEN_ATTR_VTA_AJUSTE_DEBE_VTA_TRIBUTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteHaberVtaAjusteDebeVtaTributo::GEN_TABLA);
            $c->addOrden(VtaAjusteHaberVtaAjusteDebeVtaTributo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteHaberVtaAjusteDebeVtaTributo::getVtaAjusteHaberVtaAjusteDebeVtaTributos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaAjusteDebeVtaTributoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'vta_ajuste_haber_vta_ajuste_debe_vta_tributo_adm.php';
            $url_gestion = 'vta_ajuste_haber_vta_ajuste_debe_vta_tributo_gestion.php';
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
	

	/* Metodo que retorna el VtaAjusteHaber (Clave Foranea) */ 	
    public function getVtaAjusteHaber(){
        $o = new VtaAjusteHaber();
        $o->setId($this->getVtaAjusteHaberId());
        return $o;			
    }

	/* Metodo que retorna el VtaAjusteHaber (Clave Foranea) en Array */ 	
    public function getVtaAjusteHaberEnArray(&$arr_os){
        if($this->getVtaAjusteHaberId() != 'null'){
            if(isset($arr_os[$this->getVtaAjusteHaberId()])){
                $o = $arr_os[$this->getVtaAjusteHaberId()];
            }else{
                $o = VtaAjusteHaber::getOxId($this->getVtaAjusteHaberId());
                if($o){
                    $arr_os[$this->getVtaAjusteHaberId()] = $o;
                }
            }
        }else{
            $o = new VtaAjusteHaber();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaAjusteDebeVtaTributo (Clave Foranea) */ 	
    public function getVtaAjusteDebeVtaTributo(){
        $o = new VtaAjusteDebeVtaTributo();
        $o->setId($this->getVtaAjusteDebeVtaTributoId());
        return $o;			
    }

	/* Metodo que retorna el VtaAjusteDebeVtaTributo (Clave Foranea) en Array */ 	
    public function getVtaAjusteDebeVtaTributoEnArray(&$arr_os){
        if($this->getVtaAjusteDebeVtaTributoId() != 'null'){
            if(isset($arr_os[$this->getVtaAjusteDebeVtaTributoId()])){
                $o = $arr_os[$this->getVtaAjusteDebeVtaTributoId()];
            }else{
                $o = VtaAjusteDebeVtaTributo::getOxId($this->getVtaAjusteDebeVtaTributoId());
                if($o){
                    $arr_os[$this->getVtaAjusteDebeVtaTributoId()] = $o;
                }
            }
        }else{
            $o = new VtaAjusteDebeVtaTributo();
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
            		
        if($contexto_solicitante != VtaAjusteHaber::GEN_CLASE){
            if($this->getVtaAjusteHaber()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaAjusteHaber::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaAjusteHaber()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaAjusteDebeVtaTributo::GEN_CLASE){
            if($this->getVtaAjusteDebeVtaTributo()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaAjusteDebeVtaTributo::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaAjusteDebeVtaTributo()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM vta_ajuste_haber_vta_ajuste_debe_vta_tributo'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'vta_ajuste_haber_vta_ajuste_debe_vta_tributo';");
            
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

            $obs = self::getVtaAjusteHaberVtaAjusteDebeVtaTributos($paginador, $criterio);
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

            $obs = self::getVtaAjusteHaberVtaAjusteDebeVtaTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHaberVtaAjusteDebeVtaTributos($paginador, $criterio);
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

            $obs = self::getVtaAjusteHaberVtaAjusteDebeVtaTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_ajuste_haber_id' */ 	
	static function getOxVtaAjusteHaberId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_AJUSTE_HABER_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHaberVtaAjusteDebeVtaTributos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_ajuste_haber_id' */ 	
	static function getOsxVtaAjusteHaberId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_AJUSTE_HABER_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaAjusteHaberVtaAjusteDebeVtaTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_ajuste_debe_vta_tributo_id' */ 	
	static function getOxVtaAjusteDebeVtaTributoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_AJUSTE_DEBE_VTA_TRIBUTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHaberVtaAjusteDebeVtaTributos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_ajuste_debe_vta_tributo_id' */ 	
	static function getOsxVtaAjusteDebeVtaTributoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_AJUSTE_DEBE_VTA_TRIBUTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaAjusteHaberVtaAjusteDebeVtaTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_imponible' */ 	
	static function getOxImporteImponible($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_IMPONIBLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHaberVtaAjusteDebeVtaTributos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_imponible' */ 	
	static function getOsxImporteImponible($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_IMPONIBLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaAjusteHaberVtaAjusteDebeVtaTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_tributo' */ 	
	static function getOxImporteTributo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_TRIBUTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHaberVtaAjusteDebeVtaTributos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_tributo' */ 	
	static function getOsxImporteTributo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_TRIBUTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaAjusteHaberVtaAjusteDebeVtaTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'alicuota_porcentual' */ 	
	static function getOxAlicuotaPorcentual($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ALICUOTA_PORCENTUAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHaberVtaAjusteDebeVtaTributos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'alicuota_porcentual' */ 	
	static function getOsxAlicuotaPorcentual($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ALICUOTA_PORCENTUAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaAjusteHaberVtaAjusteDebeVtaTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'alicuota_decimal' */ 	
	static function getOxAlicuotaDecimal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ALICUOTA_DECIMAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHaberVtaAjusteDebeVtaTributos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'alicuota_decimal' */ 	
	static function getOsxAlicuotaDecimal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ALICUOTA_DECIMAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaAjusteHaberVtaAjusteDebeVtaTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHaberVtaAjusteDebeVtaTributos($paginador, $criterio);
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

            $obs = self::getVtaAjusteHaberVtaAjusteDebeVtaTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHaberVtaAjusteDebeVtaTributos($paginador, $criterio);
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

            $obs = self::getVtaAjusteHaberVtaAjusteDebeVtaTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHaberVtaAjusteDebeVtaTributos($paginador, $criterio);
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

            $obs = self::getVtaAjusteHaberVtaAjusteDebeVtaTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHaberVtaAjusteDebeVtaTributos($paginador, $criterio);
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

            $obs = self::getVtaAjusteHaberVtaAjusteDebeVtaTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHaberVtaAjusteDebeVtaTributos($paginador, $criterio);
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

            $obs = self::getVtaAjusteHaberVtaAjusteDebeVtaTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHaberVtaAjusteDebeVtaTributos($paginador, $criterio);
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

            $obs = self::getVtaAjusteHaberVtaAjusteDebeVtaTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHaberVtaAjusteDebeVtaTributos($paginador, $criterio);
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

            $obs = self::getVtaAjusteHaberVtaAjusteDebeVtaTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHaberVtaAjusteDebeVtaTributos($paginador, $criterio);
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

            $obs = self::getVtaAjusteHaberVtaAjusteDebeVtaTributos(null, $criterio);
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

            $obs = self::getVtaAjusteHaberVtaAjusteDebeVtaTributos($paginador, $criterio);
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

            $obs = self::getVtaAjusteHaberVtaAjusteDebeVtaTributos($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'vta_ajuste_haber_vta_ajuste_debe_vta_tributo_adm');
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
                $c->addTabla(VtaAjusteHaberVtaAjusteDebeVtaTributo::GEN_TABLA);
                $c->addOrden(VtaAjusteHaberVtaAjusteDebeVtaTributo::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $vta_ajuste_haber_vta_ajuste_debe_vta_tributos = VtaAjusteHaberVtaAjusteDebeVtaTributo::getVtaAjusteHaberVtaAjusteDebeVtaTributos(null, $c);

                $arr = array();
                foreach($vta_ajuste_haber_vta_ajuste_debe_vta_tributos as $vta_ajuste_haber_vta_ajuste_debe_vta_tributo){
                    $descripcion = $vta_ajuste_haber_vta_ajuste_debe_vta_tributo->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>