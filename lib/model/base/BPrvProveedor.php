<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BPrvProveedor
{ 
	
	const SES_PAGINACION = 'adm_prvproveedor_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_prvproveedor_paginas_registros';
	const SES_CRITERIOS = 'adm_prvproveedor_criterios';
	
	const GEN_CLASE = 'PrvProveedor';
	const GEN_TABLA = 'prv_proveedor';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BPrvProveedor */ 
	const GEN_ATTR_ID = 'prv_proveedor.id';
	const GEN_ATTR_DESCRIPCION = 'prv_proveedor.descripcion';
	const GEN_ATTR_PRV_TIPO_ID = 'prv_proveedor.prv_tipo_id';
	const GEN_ATTR_GRAL_TIPO_PERSONERIA_ID = 'prv_proveedor.gral_tipo_personeria_id';
	const GEN_ATTR_GRAL_CONDICION_IVA_ID = 'prv_proveedor.gral_condicion_iva_id';
	const GEN_ATTR_GEO_LOCALIDAD_ID = 'prv_proveedor.geo_localidad_id';
	const GEN_ATTR_RAZON_SOCIAL = 'prv_proveedor.razon_social';
	const GEN_ATTR_CUIT = 'prv_proveedor.cuit';
	const GEN_ATTR_DOMICILIO_LEGAL = 'prv_proveedor.domicilio_legal';
	const GEN_ATTR_CODIGO_POSTAL = 'prv_proveedor.codigo_postal';
	const GEN_ATTR_TELEFONO = 'prv_proveedor.telefono';
	const GEN_ATTR_EMAIL = 'prv_proveedor.email';
	const GEN_ATTR_CODIGO = 'prv_proveedor.codigo';
	const GEN_ATTR_CODIGO_MIN = 'prv_proveedor.codigo_min';
	const GEN_ATTR_PRV_GRUPO_ID = 'prv_proveedor.prv_grupo_id';
	const GEN_ATTR_PRV_CATEGORIA_ID = 'prv_proveedor.prv_categoria_id';
	const GEN_ATTR_CONVENIO_MULTILATERAL = 'prv_proveedor.convenio_multilateral';
	const GEN_ATTR_IVA_INCLUIDO = 'prv_proveedor.iva_incluido';
	const GEN_ATTR_PUNTAJE_PROMEDIO = 'prv_proveedor.puntaje_promedio';
	const GEN_ATTR_OBSERVACION = 'prv_proveedor.observacion';
	const GEN_ATTR_DATOS_MIGRACION = 'prv_proveedor.datos_migracion';
	const GEN_ATTR_CLAVES = 'prv_proveedor.claves';
	const GEN_ATTR_ORDEN = 'prv_proveedor.orden';
	const GEN_ATTR_ESTADO = 'prv_proveedor.estado';
	const GEN_ATTR_CREADO = 'prv_proveedor.creado';
	const GEN_ATTR_CREADO_POR = 'prv_proveedor.creado_por';
	const GEN_ATTR_MODIFICADO = 'prv_proveedor.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'prv_proveedor.modificado_por';

	/* Constantes de Atributos Min de BPrvProveedor */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_PRV_TIPO_ID = 'prv_tipo_id';
	const GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID = 'gral_tipo_personeria_id';
	const GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID = 'gral_condicion_iva_id';
	const GEN_ATTR_MIN_GEO_LOCALIDAD_ID = 'geo_localidad_id';
	const GEN_ATTR_MIN_RAZON_SOCIAL = 'razon_social';
	const GEN_ATTR_MIN_CUIT = 'cuit';
	const GEN_ATTR_MIN_DOMICILIO_LEGAL = 'domicilio_legal';
	const GEN_ATTR_MIN_CODIGO_POSTAL = 'codigo_postal';
	const GEN_ATTR_MIN_TELEFONO = 'telefono';
	const GEN_ATTR_MIN_EMAIL = 'email';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_CODIGO_MIN = 'codigo_min';
	const GEN_ATTR_MIN_PRV_GRUPO_ID = 'prv_grupo_id';
	const GEN_ATTR_MIN_PRV_CATEGORIA_ID = 'prv_categoria_id';
	const GEN_ATTR_MIN_CONVENIO_MULTILATERAL = 'convenio_multilateral';
	const GEN_ATTR_MIN_IVA_INCLUIDO = 'iva_incluido';
	const GEN_ATTR_MIN_PUNTAJE_PROMEDIO = 'puntaje_promedio';
	const GEN_ATTR_MIN_OBSERVACION = 'observacion';
	const GEN_ATTR_MIN_DATOS_MIGRACION = 'datos_migracion';
	const GEN_ATTR_MIN_CLAVES = 'claves';
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
	

	/* Atributos de BPrvProveedor */ 
	private $id;
	private $descripcion;
	private $prv_tipo_id;
	private $gral_tipo_personeria_id;
	private $gral_condicion_iva_id;
	private $geo_localidad_id;
	private $razon_social;
	private $cuit;
	private $domicilio_legal;
	private $codigo_postal;
	private $telefono;
	private $email;
	private $codigo;
	private $codigo_min;
	private $prv_grupo_id;
	private $prv_categoria_id;
	private $convenio_multilateral;
	private $iva_incluido;
	private $puntaje_promedio;
	private $observacion;
	private $datos_migracion;
	private $claves;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BPrvProveedor */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getPrvTipoId(){ if(isset($this->prv_tipo_id)){ return $this->prv_tipo_id; }else{ return 'null'; } }
	public function getGralTipoPersoneriaId(){ if(isset($this->gral_tipo_personeria_id)){ return $this->gral_tipo_personeria_id; }else{ return 'null'; } }
	public function getGralCondicionIvaId(){ if(isset($this->gral_condicion_iva_id)){ return $this->gral_condicion_iva_id; }else{ return 'null'; } }
	public function getGeoLocalidadId(){ if(isset($this->geo_localidad_id)){ return $this->geo_localidad_id; }else{ return 'null'; } }
	public function getRazonSocial(){ if(isset($this->razon_social)){ return $this->razon_social; }else{ return ''; } }
	public function getCuit(){ if(isset($this->cuit)){ return $this->cuit; }else{ return ''; } }
	public function getDomicilioLegal(){ if(isset($this->domicilio_legal)){ return $this->domicilio_legal; }else{ return ''; } }
	public function getCodigoPostal(){ if(isset($this->codigo_postal)){ return $this->codigo_postal; }else{ return ''; } }
	public function getTelefono(){ if(isset($this->telefono)){ return $this->telefono; }else{ return ''; } }
	public function getEmail(){ if(isset($this->email)){ return $this->email; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getCodigoMin(){ if(isset($this->codigo_min)){ return $this->codigo_min; }else{ return ''; } }
	public function getPrvGrupoId(){ if(isset($this->prv_grupo_id)){ return $this->prv_grupo_id; }else{ return 'null'; } }
	public function getPrvCategoriaId(){ if(isset($this->prv_categoria_id)){ return $this->prv_categoria_id; }else{ return 'null'; } }
	public function getConvenioMultilateral(){ if(isset($this->convenio_multilateral)){ return $this->convenio_multilateral; }else{ return 0; } }
	public function getIvaIncluido(){ if(isset($this->iva_incluido)){ return $this->iva_incluido; }else{ return 0; } }
	public function getPuntajePromedio(){ if(isset($this->puntaje_promedio)){ return $this->puntaje_promedio; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getDatosMigracion(){ if(isset($this->datos_migracion)){ return $this->datos_migracion; }else{ return ''; } }
	public function getClaves(){ if(isset($this->claves)){ return $this->claves; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BPrvProveedor */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_PRV_TIPO_ID."
				, ".self::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID."
				, ".self::GEN_ATTR_GRAL_CONDICION_IVA_ID."
				, ".self::GEN_ATTR_GEO_LOCALIDAD_ID."
				, ".self::GEN_ATTR_RAZON_SOCIAL."
				, ".self::GEN_ATTR_CUIT."
				, ".self::GEN_ATTR_DOMICILIO_LEGAL."
				, ".self::GEN_ATTR_CODIGO_POSTAL."
				, ".self::GEN_ATTR_TELEFONO."
				, ".self::GEN_ATTR_EMAIL."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_CODIGO_MIN."
				, ".self::GEN_ATTR_PRV_GRUPO_ID."
				, ".self::GEN_ATTR_PRV_CATEGORIA_ID."
				, ".self::GEN_ATTR_CONVENIO_MULTILATERAL."
				, ".self::GEN_ATTR_IVA_INCLUIDO."
				, ".self::GEN_ATTR_PUNTAJE_PROMEDIO."
				, ".self::GEN_ATTR_OBSERVACION."
				, ".self::GEN_ATTR_DATOS_MIGRACION."
				, ".self::GEN_ATTR_CLAVES."
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
				$this->setPrvTipoId($fila[self::GEN_ATTR_MIN_PRV_TIPO_ID]);
				$this->setGralTipoPersoneriaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID]);
				$this->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
				$this->setGeoLocalidadId($fila[self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID]);
				$this->setRazonSocial($fila[self::GEN_ATTR_MIN_RAZON_SOCIAL]);
				$this->setCuit($fila[self::GEN_ATTR_MIN_CUIT]);
				$this->setDomicilioLegal($fila[self::GEN_ATTR_MIN_DOMICILIO_LEGAL]);
				$this->setCodigoPostal($fila[self::GEN_ATTR_MIN_CODIGO_POSTAL]);
				$this->setTelefono($fila[self::GEN_ATTR_MIN_TELEFONO]);
				$this->setEmail($fila[self::GEN_ATTR_MIN_EMAIL]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setCodigoMin($fila[self::GEN_ATTR_MIN_CODIGO_MIN]);
				$this->setPrvGrupoId($fila[self::GEN_ATTR_MIN_PRV_GRUPO_ID]);
				$this->setPrvCategoriaId($fila[self::GEN_ATTR_MIN_PRV_CATEGORIA_ID]);
				$this->setConvenioMultilateral($fila[self::GEN_ATTR_MIN_CONVENIO_MULTILATERAL]);
				$this->setIvaIncluido($fila[self::GEN_ATTR_MIN_IVA_INCLUIDO]);
				$this->setPuntajePromedio($fila[self::GEN_ATTR_MIN_PUNTAJE_PROMEDIO]);
				$this->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
				$this->setDatosMigracion($fila[self::GEN_ATTR_MIN_DATOS_MIGRACION]);
				$this->setClaves($fila[self::GEN_ATTR_MIN_CLAVES]);
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
	public function setPrvTipoId($v){ $this->prv_tipo_id = $v; }
	public function setGralTipoPersoneriaId($v){ $this->gral_tipo_personeria_id = $v; }
	public function setGralCondicionIvaId($v){ $this->gral_condicion_iva_id = $v; }
	public function setGeoLocalidadId($v){ $this->geo_localidad_id = $v; }
	public function setRazonSocial($v){ $this->razon_social = $v; }
	public function setCuit($v){ $this->cuit = $v; }
	public function setDomicilioLegal($v){ $this->domicilio_legal = $v; }
	public function setCodigoPostal($v){ $this->codigo_postal = $v; }
	public function setTelefono($v){ $this->telefono = $v; }
	public function setEmail($v){ $this->email = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setCodigoMin($v){ $this->codigo_min = $v; }
	public function setPrvGrupoId($v){ $this->prv_grupo_id = $v; }
	public function setPrvCategoriaId($v){ $this->prv_categoria_id = $v; }
	public function setConvenioMultilateral($v){ $this->convenio_multilateral = $v; }
	public function setIvaIncluido($v){ $this->iva_incluido = $v; }
	public function setPuntajePromedio($v){ $this->puntaje_promedio = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setDatosMigracion($v){ $this->datos_migracion = $v; }
	public function setClaves($v){ $this->claves = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new PrvProveedor();
            $o->setId($fila[PrvProveedor::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setPrvTipoId($fila[self::GEN_ATTR_MIN_PRV_TIPO_ID]);
			$o->setGralTipoPersoneriaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID]);
			$o->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
			$o->setGeoLocalidadId($fila[self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID]);
			$o->setRazonSocial($fila[self::GEN_ATTR_MIN_RAZON_SOCIAL]);
			$o->setCuit($fila[self::GEN_ATTR_MIN_CUIT]);
			$o->setDomicilioLegal($fila[self::GEN_ATTR_MIN_DOMICILIO_LEGAL]);
			$o->setCodigoPostal($fila[self::GEN_ATTR_MIN_CODIGO_POSTAL]);
			$o->setTelefono($fila[self::GEN_ATTR_MIN_TELEFONO]);
			$o->setEmail($fila[self::GEN_ATTR_MIN_EMAIL]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setCodigoMin($fila[self::GEN_ATTR_MIN_CODIGO_MIN]);
			$o->setPrvGrupoId($fila[self::GEN_ATTR_MIN_PRV_GRUPO_ID]);
			$o->setPrvCategoriaId($fila[self::GEN_ATTR_MIN_PRV_CATEGORIA_ID]);
			$o->setConvenioMultilateral($fila[self::GEN_ATTR_MIN_CONVENIO_MULTILATERAL]);
			$o->setIvaIncluido($fila[self::GEN_ATTR_MIN_IVA_INCLUIDO]);
			$o->setPuntajePromedio($fila[self::GEN_ATTR_MIN_PUNTAJE_PROMEDIO]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setDatosMigracion($fila[self::GEN_ATTR_MIN_DATOS_MIGRACION]);
			$o->setClaves($fila[self::GEN_ATTR_MIN_CLAVES]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BPrvProveedor */ 	
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

	/* Cambia el estado de BPrvProveedor */ 	
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

	/* Save de BPrvProveedor */ 	
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
						, ".self::GEN_ATTR_MIN_PRV_TIPO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID."
						, ".self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID."
						, ".self::GEN_ATTR_MIN_RAZON_SOCIAL."
						, ".self::GEN_ATTR_MIN_CUIT."
						, ".self::GEN_ATTR_MIN_DOMICILIO_LEGAL."
						, ".self::GEN_ATTR_MIN_CODIGO_POSTAL."
						, ".self::GEN_ATTR_MIN_TELEFONO."
						, ".self::GEN_ATTR_MIN_EMAIL."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_CODIGO_MIN."
						, ".self::GEN_ATTR_MIN_PRV_GRUPO_ID."
						, ".self::GEN_ATTR_MIN_PRV_CATEGORIA_ID."
						, ".self::GEN_ATTR_MIN_CONVENIO_MULTILATERAL."
						, ".self::GEN_ATTR_MIN_IVA_INCLUIDO."
						, ".self::GEN_ATTR_MIN_PUNTAJE_PROMEDIO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_DATOS_MIGRACION."
						, ".self::GEN_ATTR_MIN_CLAVES."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('prv_proveedor_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getPrvTipoId()."
						, ".$this->getGralTipoPersoneriaId()."
						, ".$this->getGralCondicionIvaId()."
						, ".$this->getGeoLocalidadId()."
						, '".$this->getRazonSocial()."'
						, '".$this->getCuit()."'
						, '".$this->getDomicilioLegal()."'
						, '".$this->getCodigoPostal()."'
						, '".$this->getTelefono()."'
						, '".$this->getEmail()."'
						, '".$this->getCodigo()."'
						, '".$this->getCodigoMin()."'
						, ".$this->getPrvGrupoId()."
						, ".$this->getPrvCategoriaId()."
						, ".$this->getConvenioMultilateral()."
						, ".$this->getIvaIncluido()."
						, '".$this->getPuntajePromedio()."'
						, '".$this->getObservacion()."'
						, '".$this->getDatosMigracion()."'
						, '".$this->getClaves()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('prv_proveedor_seq')";
            
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
                 
				 ".PrvProveedor::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_PRV_TIPO_ID." = ".$this->getPrvTipoId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID." = ".$this->getGralTipoPersoneriaId()."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID." = ".$this->getGralCondicionIvaId()."
						, ".self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID." = ".$this->getGeoLocalidadId()."
						, ".self::GEN_ATTR_MIN_RAZON_SOCIAL." = '".$this->getRazonSocial()."'
						, ".self::GEN_ATTR_MIN_CUIT." = '".$this->getCuit()."'
						, ".self::GEN_ATTR_MIN_DOMICILIO_LEGAL." = '".$this->getDomicilioLegal()."'
						, ".self::GEN_ATTR_MIN_CODIGO_POSTAL." = '".$this->getCodigoPostal()."'
						, ".self::GEN_ATTR_MIN_TELEFONO." = '".$this->getTelefono()."'
						, ".self::GEN_ATTR_MIN_EMAIL." = '".$this->getEmail()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_CODIGO_MIN." = '".$this->getCodigoMin()."'
						, ".self::GEN_ATTR_MIN_PRV_GRUPO_ID." = ".$this->getPrvGrupoId()."
						, ".self::GEN_ATTR_MIN_PRV_CATEGORIA_ID." = ".$this->getPrvCategoriaId()."
						, ".self::GEN_ATTR_MIN_CONVENIO_MULTILATERAL." = ".$this->getConvenioMultilateral()."
						, ".self::GEN_ATTR_MIN_IVA_INCLUIDO." = ".$this->getIvaIncluido()."
						, ".self::GEN_ATTR_MIN_PUNTAJE_PROMEDIO." = '".$this->getPuntajePromedio()."'
						, ".self::GEN_ATTR_MIN_OBSERVACION." = '".$this->getObservacion()."'
						, ".self::GEN_ATTR_MIN_DATOS_MIGRACION." = '".$this->getDatosMigracion()."'
						, ".self::GEN_ATTR_MIN_CLAVES." = '".$this->getClaves()."'
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
						, ".self::GEN_ATTR_MIN_PRV_TIPO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID."
						, ".self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID."
						, ".self::GEN_ATTR_MIN_RAZON_SOCIAL."
						, ".self::GEN_ATTR_MIN_CUIT."
						, ".self::GEN_ATTR_MIN_DOMICILIO_LEGAL."
						, ".self::GEN_ATTR_MIN_CODIGO_POSTAL."
						, ".self::GEN_ATTR_MIN_TELEFONO."
						, ".self::GEN_ATTR_MIN_EMAIL."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_CODIGO_MIN."
						, ".self::GEN_ATTR_MIN_PRV_GRUPO_ID."
						, ".self::GEN_ATTR_MIN_PRV_CATEGORIA_ID."
						, ".self::GEN_ATTR_MIN_CONVENIO_MULTILATERAL."
						, ".self::GEN_ATTR_MIN_IVA_INCLUIDO."
						, ".self::GEN_ATTR_MIN_PUNTAJE_PROMEDIO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_DATOS_MIGRACION."
						, ".self::GEN_ATTR_MIN_CLAVES."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getDescripcion()."'
						, ".$this->getPrvTipoId()."
						, ".$this->getGralTipoPersoneriaId()."
						, ".$this->getGralCondicionIvaId()."
						, ".$this->getGeoLocalidadId()."
						, '".$this->getRazonSocial()."'
						, '".$this->getCuit()."'
						, '".$this->getDomicilioLegal()."'
						, '".$this->getCodigoPostal()."'
						, '".$this->getTelefono()."'
						, '".$this->getEmail()."'
						, '".$this->getCodigo()."'
						, '".$this->getCodigoMin()."'
						, ".$this->getPrvGrupoId()."
						, ".$this->getPrvCategoriaId()."
						, ".$this->getConvenioMultilateral()."
						, ".$this->getIvaIncluido()."
						, '".$this->getPuntajePromedio()."'
						, '".$this->getObservacion()."'
						, '".$this->getDatosMigracion()."'
						, '".$this->getClaves()."'
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
                     
				 ".PrvProveedor::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_PRV_TIPO_ID." = ".$this->getPrvTipoId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID." = ".$this->getGralTipoPersoneriaId()."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID." = ".$this->getGralCondicionIvaId()."
						, ".self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID." = ".$this->getGeoLocalidadId()."
						, ".self::GEN_ATTR_MIN_RAZON_SOCIAL." = '".$this->getRazonSocial()."'
						, ".self::GEN_ATTR_MIN_CUIT." = '".$this->getCuit()."'
						, ".self::GEN_ATTR_MIN_DOMICILIO_LEGAL." = '".$this->getDomicilioLegal()."'
						, ".self::GEN_ATTR_MIN_CODIGO_POSTAL." = '".$this->getCodigoPostal()."'
						, ".self::GEN_ATTR_MIN_TELEFONO." = '".$this->getTelefono()."'
						, ".self::GEN_ATTR_MIN_EMAIL." = '".$this->getEmail()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_CODIGO_MIN." = '".$this->getCodigoMin()."'
						, ".self::GEN_ATTR_MIN_PRV_GRUPO_ID." = ".$this->getPrvGrupoId()."
						, ".self::GEN_ATTR_MIN_PRV_CATEGORIA_ID." = ".$this->getPrvCategoriaId()."
						, ".self::GEN_ATTR_MIN_CONVENIO_MULTILATERAL." = ".$this->getConvenioMultilateral()."
						, ".self::GEN_ATTR_MIN_IVA_INCLUIDO." = ".$this->getIvaIncluido()."
						, ".self::GEN_ATTR_MIN_PUNTAJE_PROMEDIO." = '".$this->getPuntajePromedio()."'
						, ".self::GEN_ATTR_MIN_OBSERVACION." = '".$this->getObservacion()."'
						, ".self::GEN_ATTR_MIN_DATOS_MIGRACION." = '".$this->getDatosMigracion()."'
						, ".self::GEN_ATTR_MIN_CLAVES." = '".$this->getClaves()."'
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
            $o = new PrvProveedor();
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

	/* Delete de BPrvProveedor */ 	
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
	
            // se elimina la coleccion de GralCentroCostoPrvProveedors relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralCentroCostoPrvProveedor::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralCentroCostoPrvProveedors(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de InsInsumoPrvProveedors relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsInsumoPrvProveedor::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsInsumoPrvProveedors(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de InsInsumoCostos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsInsumoCosto::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsInsumoCostos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrvPreventistas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrvPreventista::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrvPreventistas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrvConvenioDescuentos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrvConvenioDescuento::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrvConvenioDescuentos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrvDescuentoFinancieros relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrvDescuentoFinanciero::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrvDescuentoFinancieros(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrvDescuentoComercials relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrvDescuentoComercial::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrvDescuentoComercials(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrvProveedorUsUsuarios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrvProveedorUsUsuario::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrvProveedorUsUsuarios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrvProveedorInsMarcas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrvProveedorInsMarca::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrvProveedorInsMarcas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrvTelefonos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrvTelefono::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrvTelefonos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrvEmails relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrvEmail::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrvEmails(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrvDomicilios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrvDomicilio::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrvDomicilios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrvProveedorPrvRubros relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrvProveedorPrvRubro::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrvProveedorPrvRubros(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrvInsumos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrvInsumo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrvInsumos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrvImportacions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrvImportacion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrvImportacions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdePedidoEnviados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdePedidoEnviado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdePedidoEnviados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdePedidoPrvProveedors relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdePedidoPrvProveedor::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdePedidoPrvProveedors(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdePedidoPrvProveedorAvisados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdePedidoPrvProveedorAvisado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdePedidoPrvProveedorAvisados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeCotizacions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeCotizacion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeCotizacions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeOcAgrupacions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOcAgrupacion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOcAgrupacions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeOcs relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOc::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOcs(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeRecepcionAgrupacions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeRecepcionAgrupacion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeRecepcionAgrupacions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeRecepcions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeRecepcion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeRecepcions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeCentroPedidoPrvProveedors relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeCentroPedidoPrvProveedor::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeCentroPedidoPrvProveedors(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeOcReclamos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOcReclamo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOcReclamos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeTributoExencions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeTributoExencion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeTributoExencions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeFacturas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeFacturas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeNotaCreditos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaCreditos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeNotaDebitos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaDebito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaDebitos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeRecibos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeRecibo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeRecibos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeOrdenPagos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOrdenPago::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOrdenPagos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarPrvProveedor(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getPrvProveedors($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = PrvProveedor::setAplicarFiltrosDeAlcance($criterio);

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
	
		$prvproveedors = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $prvproveedor = new PrvProveedor();
                    $prvproveedor->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $prvproveedor->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$prvproveedor->setPrvTipoId($fila[self::GEN_ATTR_MIN_PRV_TIPO_ID]);
			$prvproveedor->setGralTipoPersoneriaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID]);
			$prvproveedor->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
			$prvproveedor->setGeoLocalidadId($fila[self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID]);
			$prvproveedor->setRazonSocial($fila[self::GEN_ATTR_MIN_RAZON_SOCIAL]);
			$prvproveedor->setCuit($fila[self::GEN_ATTR_MIN_CUIT]);
			$prvproveedor->setDomicilioLegal($fila[self::GEN_ATTR_MIN_DOMICILIO_LEGAL]);
			$prvproveedor->setCodigoPostal($fila[self::GEN_ATTR_MIN_CODIGO_POSTAL]);
			$prvproveedor->setTelefono($fila[self::GEN_ATTR_MIN_TELEFONO]);
			$prvproveedor->setEmail($fila[self::GEN_ATTR_MIN_EMAIL]);
			$prvproveedor->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$prvproveedor->setCodigoMin($fila[self::GEN_ATTR_MIN_CODIGO_MIN]);
			$prvproveedor->setPrvGrupoId($fila[self::GEN_ATTR_MIN_PRV_GRUPO_ID]);
			$prvproveedor->setPrvCategoriaId($fila[self::GEN_ATTR_MIN_PRV_CATEGORIA_ID]);
			$prvproveedor->setConvenioMultilateral($fila[self::GEN_ATTR_MIN_CONVENIO_MULTILATERAL]);
			$prvproveedor->setIvaIncluido($fila[self::GEN_ATTR_MIN_IVA_INCLUIDO]);
			$prvproveedor->setPuntajePromedio($fila[self::GEN_ATTR_MIN_PUNTAJE_PROMEDIO]);
			$prvproveedor->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$prvproveedor->setDatosMigracion($fila[self::GEN_ATTR_MIN_DATOS_MIGRACION]);
			$prvproveedor->setClaves($fila[self::GEN_ATTR_MIN_CLAVES]);
			$prvproveedor->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$prvproveedor->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$prvproveedor->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$prvproveedor->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$prvproveedor->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$prvproveedor->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $prvproveedors[] = $prvproveedor;
		}
		
		return $prvproveedors;
	}	
	

	/* Método getPrvProveedors Habilitados */ 	
	static function getPrvProveedorsHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return PrvProveedor::getPrvProveedors($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getPrvProveedors para listado de Backend */ 	
	static function getPrvProveedorsDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return PrvProveedor::getPrvProveedors($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getPrvProveedorsCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = PrvProveedor::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = PrvProveedor::getPrvProveedors($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPrvProveedors filtrado para select */ 	
	static function getPrvProveedorsCmbF($paginador = null, $criterio = null){
            $col = PrvProveedor::getPrvProveedors($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPrvProveedors filtrado por una coleccion de objetos foraneos de PrvTipo */ 	
	static function getPrvProveedorsXPrvTipos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PrvProveedor::GEN_ATTR_PRV_TIPO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addOrden(PrvProveedor::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PrvProveedor::getPrvProveedors($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrvTipoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPrvProveedors filtrado por una coleccion de objetos foraneos de GralTipoPersoneria */ 	
	static function getPrvProveedorsXGralTipoPersonerias($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PrvProveedor::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addOrden(PrvProveedor::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PrvProveedor::getPrvProveedors($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralTipoPersoneriaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPrvProveedors filtrado por una coleccion de objetos foraneos de GralCondicionIva */ 	
	static function getPrvProveedorsXGralCondicionIvas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PrvProveedor::GEN_ATTR_GRAL_CONDICION_IVA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addOrden(PrvProveedor::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PrvProveedor::getPrvProveedors($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralCondicionIvaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPrvProveedors filtrado por una coleccion de objetos foraneos de GeoLocalidad */ 	
	static function getPrvProveedorsXGeoLocalidads($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PrvProveedor::GEN_ATTR_GEO_LOCALIDAD_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addOrden(PrvProveedor::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PrvProveedor::getPrvProveedors($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGeoLocalidadId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPrvProveedors filtrado por una coleccion de objetos foraneos de PrvGrupo */ 	
	static function getPrvProveedorsXPrvGrupos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PrvProveedor::GEN_ATTR_PRV_GRUPO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addOrden(PrvProveedor::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PrvProveedor::getPrvProveedors($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrvGrupoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPrvProveedors filtrado por una coleccion de objetos foraneos de PrvCategoria */ 	
	static function getPrvProveedorsXPrvCategorias($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PrvProveedor::GEN_ATTR_PRV_CATEGORIA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addOrden(PrvProveedor::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PrvProveedor::getPrvProveedors($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrvCategoriaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'prv_proveedor_adm.php';
            $url_gestion = 'prv_proveedor_gestion.php';
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
	

	/* Metodo getGralCentroCostoPrvProveedors */ 	
	public function getGralCentroCostoPrvProveedors($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralCentroCostoPrvProveedor::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralCentroCostoPrvProveedor::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralCentroCostoPrvProveedor::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralCentroCostoPrvProveedor::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralCentroCostoPrvProveedor::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralCentroCostoPrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralCentroCostoPrvProveedor::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralCentroCostoPrvProveedor::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralcentrocostoprvproveedors = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralcentrocostoprvproveedor = GralCentroCostoPrvProveedor::hidratarObjeto($fila);			
                $gralcentrocostoprvproveedors[] = $gralcentrocostoprvproveedor;
            }

            return $gralcentrocostoprvproveedors;
	}	
	

	/* Método getGralCentroCostoPrvProveedorsBloque para MasInfo */ 	
	public function getGralCentroCostoPrvProveedorsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralCentroCostoPrvProveedors($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralCentroCostoPrvProveedors Habilitados */ 	
	public function getGralCentroCostoPrvProveedorsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralCentroCostoPrvProveedors($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralCentroCostoPrvProveedor */ 	
	public function getGralCentroCostoPrvProveedor($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralCentroCostoPrvProveedors($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralCentroCostoPrvProveedor relacionadas */ 	
	public function deleteGralCentroCostoPrvProveedors(){
            $obs = $this->getGralCentroCostoPrvProveedors();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralCentroCostoPrvProveedorsCmb() GralCentroCostoPrvProveedor relacionadas */ 	
	public function getGralCentroCostoPrvProveedorsCmb(){
            $c = new Criterio();
            $c->add(GralCentroCostoPrvProveedor::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralCentroCostoPrvProveedor::GEN_TABLA);
            $c->setCriterios();

            $os = GralCentroCostoPrvProveedor::getGralCentroCostoPrvProveedorsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralCentroCostos (Coleccion) relacionados a traves de GralCentroCostoPrvProveedor */ 	
	public function getGralCentroCostosXGralCentroCostoPrvProveedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralCentroCosto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralCentroCostoPrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralCentroCostoPrvProveedor::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralCentroCosto::GEN_TABLA);
            $c->addRealJoin(GralCentroCostoPrvProveedor::GEN_TABLA, GralCentroCostoPrvProveedor::GEN_ATTR_GRAL_CENTRO_COSTO_ID, GralCentroCosto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralCentroCosto::getGralCentroCostos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralCentroCostos relacionados a traves de GralCentroCostoPrvProveedor */ 	
	public function getCantidadGralCentroCostosXGralCentroCostoPrvProveedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralCentroCosto::GEN_ATTR_ID);
            if($estado){
                $c->add(GralCentroCosto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralCentroCostoPrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralCentroCostoPrvProveedor::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralCentroCosto::GEN_TABLA);
            $c->addRealJoin(GralCentroCostoPrvProveedor::GEN_TABLA, GralCentroCostoPrvProveedor::GEN_ATTR_GRAL_CENTRO_COSTO_ID, GralCentroCosto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralCentroCosto::getGralCentroCostos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralCentroCosto (Objeto) relacionado a traves de GralCentroCostoPrvProveedor */ 	
	public function getGralCentroCostoXGralCentroCostoPrvProveedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralCentroCostosXGralCentroCostoPrvProveedor($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getInsInsumoPrvProveedors */ 	
	public function getInsInsumoPrvProveedors($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsInsumoPrvProveedor::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsInsumoPrvProveedor::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsInsumoPrvProveedor::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsInsumoPrvProveedor::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsInsumoPrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsInsumoPrvProveedor::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsInsumoPrvProveedor::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insinsumoprvproveedors = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insinsumoprvproveedor = InsInsumoPrvProveedor::hidratarObjeto($fila);			
                $insinsumoprvproveedors[] = $insinsumoprvproveedor;
            }

            return $insinsumoprvproveedors;
	}	
	

	/* Método getInsInsumoPrvProveedorsBloque para MasInfo */ 	
	public function getInsInsumoPrvProveedorsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsInsumoPrvProveedors($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsInsumoPrvProveedors Habilitados */ 	
	public function getInsInsumoPrvProveedorsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsInsumoPrvProveedors($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsInsumoPrvProveedor */ 	
	public function getInsInsumoPrvProveedor($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsInsumoPrvProveedors($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsInsumoPrvProveedor relacionadas */ 	
	public function deleteInsInsumoPrvProveedors(){
            $obs = $this->getInsInsumoPrvProveedors();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsInsumoPrvProveedorsCmb() InsInsumoPrvProveedor relacionadas */ 	
	public function getInsInsumoPrvProveedorsCmb(){
            $c = new Criterio();
            $c->add(InsInsumoPrvProveedor::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumoPrvProveedor::GEN_TABLA);
            $c->setCriterios();

            $os = InsInsumoPrvProveedor::getInsInsumoPrvProveedorsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsInsumos (Coleccion) relacionados a traves de InsInsumoPrvProveedor */ 	
	public function getInsInsumosXInsInsumoPrvProveedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoPrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoPrvProveedor::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(InsInsumoPrvProveedor::GEN_TABLA, InsInsumoPrvProveedor::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsInsumos relacionados a traves de InsInsumoPrvProveedor */ 	
	public function getCantidadInsInsumosXInsInsumoPrvProveedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsInsumo::GEN_ATTR_ID);
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoPrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoPrvProveedor::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(InsInsumoPrvProveedor::GEN_TABLA, InsInsumoPrvProveedor::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsInsumo (Objeto) relacionado a traves de InsInsumoPrvProveedor */ 	
	public function getInsInsumoXInsInsumoPrvProveedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsInsumosXInsInsumoPrvProveedor($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getInsInsumoCostos */ 	
	public function getInsInsumoCostos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsInsumoCosto::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsInsumoCosto::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsInsumoCosto::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(InsInsumoCosto::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsInsumoCosto::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsInsumoCosto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsInsumoCosto::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsInsumoCosto::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insinsumocostos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insinsumocosto = InsInsumoCosto::hidratarObjeto($fila);			
                $insinsumocostos[] = $insinsumocosto;
            }

            return $insinsumocostos;
	}	
	

	/* Método getInsInsumoCostosBloque para MasInfo */ 	
	public function getInsInsumoCostosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsInsumoCostos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsInsumoCostos Habilitados */ 	
	public function getInsInsumoCostosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsInsumoCostos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsInsumoCosto */ 	
	public function getInsInsumoCosto($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsInsumoCostos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsInsumoCosto relacionadas */ 	
	public function deleteInsInsumoCostos(){
            $obs = $this->getInsInsumoCostos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsInsumoCostosCmb() InsInsumoCosto relacionadas */ 	
	public function getInsInsumoCostosCmb(){
            $c = new Criterio();
            $c->add(InsInsumoCosto::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumoCosto::GEN_TABLA);
            $c->setCriterios();

            $os = InsInsumoCosto::getInsInsumoCostosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsInsumos (Coleccion) relacionados a traves de InsInsumoCosto */ 	
	public function getInsInsumosXInsInsumoCosto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoCosto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoCosto::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(InsInsumoCosto::GEN_TABLA, InsInsumoCosto::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsInsumos relacionados a traves de InsInsumoCosto */ 	
	public function getCantidadInsInsumosXInsInsumoCosto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsInsumo::GEN_ATTR_ID);
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoCosto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoCosto::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(InsInsumoCosto::GEN_TABLA, InsInsumoCosto::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsInsumo (Objeto) relacionado a traves de InsInsumoCosto */ 	
	public function getInsInsumoXInsInsumoCosto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsInsumosXInsInsumoCosto($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPrvPreventistas */ 	
	public function getPrvPreventistas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrvPreventista::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrvPreventista::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrvPreventista::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PrvPreventista::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrvPreventista::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrvPreventista::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrvPreventista::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrvPreventista::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prvpreventistas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prvpreventista = PrvPreventista::hidratarObjeto($fila);			
                $prvpreventistas[] = $prvpreventista;
            }

            return $prvpreventistas;
	}	
	

	/* Método getPrvPreventistasBloque para MasInfo */ 	
	public function getPrvPreventistasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrvPreventistas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrvPreventistas Habilitados */ 	
	public function getPrvPreventistasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrvPreventistas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrvPreventista */ 	
	public function getPrvPreventista($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrvPreventistas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrvPreventista relacionadas */ 	
	public function deletePrvPreventistas(){
            $obs = $this->getPrvPreventistas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrvPreventistasCmb() PrvPreventista relacionadas */ 	
	public function getPrvPreventistasCmb(){
            $c = new Criterio();
            $c->add(PrvPreventista::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvPreventista::GEN_TABLA);
            $c->setCriterios();

            $os = PrvPreventista::getPrvPreventistasCmbF(null, $c);
            return $os;
	}

	/* Metodo getPrvConvenioDescuentos */ 	
	public function getPrvConvenioDescuentos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrvConvenioDescuento::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrvConvenioDescuento::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrvConvenioDescuento::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PrvConvenioDescuento::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrvConvenioDescuento::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrvConvenioDescuento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrvConvenioDescuento::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrvConvenioDescuento::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prvconveniodescuentos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prvconveniodescuento = PrvConvenioDescuento::hidratarObjeto($fila);			
                $prvconveniodescuentos[] = $prvconveniodescuento;
            }

            return $prvconveniodescuentos;
	}	
	

	/* Método getPrvConvenioDescuentosBloque para MasInfo */ 	
	public function getPrvConvenioDescuentosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrvConvenioDescuentos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrvConvenioDescuentos Habilitados */ 	
	public function getPrvConvenioDescuentosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrvConvenioDescuentos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrvConvenioDescuento */ 	
	public function getPrvConvenioDescuento($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrvConvenioDescuentos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrvConvenioDescuento relacionadas */ 	
	public function deletePrvConvenioDescuentos(){
            $obs = $this->getPrvConvenioDescuentos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrvConvenioDescuentosCmb() PrvConvenioDescuento relacionadas */ 	
	public function getPrvConvenioDescuentosCmb(){
            $c = new Criterio();
            $c->add(PrvConvenioDescuento::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvConvenioDescuento::GEN_TABLA);
            $c->setCriterios();

            $os = PrvConvenioDescuento::getPrvConvenioDescuentosCmbF(null, $c);
            return $os;
	}

	/* Metodo getPrvDescuentoFinancieros */ 	
	public function getPrvDescuentoFinancieros($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrvDescuentoFinanciero::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrvDescuentoFinanciero::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrvDescuentoFinanciero::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PrvDescuentoFinanciero::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrvDescuentoFinanciero::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrvDescuentoFinanciero::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrvDescuentoFinanciero::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrvDescuentoFinanciero::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prvdescuentofinancieros = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prvdescuentofinanciero = PrvDescuentoFinanciero::hidratarObjeto($fila);			
                $prvdescuentofinancieros[] = $prvdescuentofinanciero;
            }

            return $prvdescuentofinancieros;
	}	
	

	/* Método getPrvDescuentoFinancierosBloque para MasInfo */ 	
	public function getPrvDescuentoFinancierosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrvDescuentoFinancieros($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrvDescuentoFinancieros Habilitados */ 	
	public function getPrvDescuentoFinancierosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrvDescuentoFinancieros($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrvDescuentoFinanciero */ 	
	public function getPrvDescuentoFinanciero($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrvDescuentoFinancieros($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrvDescuentoFinanciero relacionadas */ 	
	public function deletePrvDescuentoFinancieros(){
            $obs = $this->getPrvDescuentoFinancieros();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrvDescuentoFinancierosCmb() PrvDescuentoFinanciero relacionadas */ 	
	public function getPrvDescuentoFinancierosCmb(){
            $c = new Criterio();
            $c->add(PrvDescuentoFinanciero::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvDescuentoFinanciero::GEN_TABLA);
            $c->setCriterios();

            $os = PrvDescuentoFinanciero::getPrvDescuentoFinancierosCmbF(null, $c);
            return $os;
	}

	/* Metodo getPrvDescuentoComercials */ 	
	public function getPrvDescuentoComercials($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrvDescuentoComercial::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrvDescuentoComercial::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrvDescuentoComercial::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PrvDescuentoComercial::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrvDescuentoComercial::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrvDescuentoComercial::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrvDescuentoComercial::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrvDescuentoComercial::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prvdescuentocomercials = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prvdescuentocomercial = PrvDescuentoComercial::hidratarObjeto($fila);			
                $prvdescuentocomercials[] = $prvdescuentocomercial;
            }

            return $prvdescuentocomercials;
	}	
	

	/* Método getPrvDescuentoComercialsBloque para MasInfo */ 	
	public function getPrvDescuentoComercialsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrvDescuentoComercials($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrvDescuentoComercials Habilitados */ 	
	public function getPrvDescuentoComercialsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrvDescuentoComercials($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrvDescuentoComercial */ 	
	public function getPrvDescuentoComercial($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrvDescuentoComercials($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrvDescuentoComercial relacionadas */ 	
	public function deletePrvDescuentoComercials(){
            $obs = $this->getPrvDescuentoComercials();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrvDescuentoComercialsCmb() PrvDescuentoComercial relacionadas */ 	
	public function getPrvDescuentoComercialsCmb(){
            $c = new Criterio();
            $c->add(PrvDescuentoComercial::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvDescuentoComercial::GEN_TABLA);
            $c->setCriterios();

            $os = PrvDescuentoComercial::getPrvDescuentoComercialsCmbF(null, $c);
            return $os;
	}

	/* Metodo getPrvProveedorUsUsuarios */ 	
	public function getPrvProveedorUsUsuarios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrvProveedorUsUsuario::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrvProveedorUsUsuario::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrvProveedorUsUsuario::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrvProveedorUsUsuario::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrvProveedorUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrvProveedorUsUsuario::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrvProveedorUsUsuario::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prvproveedorususuarios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prvproveedorususuario = PrvProveedorUsUsuario::hidratarObjeto($fila);			
                $prvproveedorususuarios[] = $prvproveedorususuario;
            }

            return $prvproveedorususuarios;
	}	
	

	/* Método getPrvProveedorUsUsuariosBloque para MasInfo */ 	
	public function getPrvProveedorUsUsuariosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrvProveedorUsUsuarios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrvProveedorUsUsuarios Habilitados */ 	
	public function getPrvProveedorUsUsuariosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrvProveedorUsUsuarios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrvProveedorUsUsuario */ 	
	public function getPrvProveedorUsUsuario($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrvProveedorUsUsuarios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrvProveedorUsUsuario relacionadas */ 	
	public function deletePrvProveedorUsUsuarios(){
            $obs = $this->getPrvProveedorUsUsuarios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrvProveedorUsUsuariosCmb() PrvProveedorUsUsuario relacionadas */ 	
	public function getPrvProveedorUsUsuariosCmb(){
            $c = new Criterio();
            $c->add(PrvProveedorUsUsuario::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedorUsUsuario::GEN_TABLA);
            $c->setCriterios();

            $os = PrvProveedorUsUsuario::getPrvProveedorUsUsuariosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener UsUsuarios (Coleccion) relacionados a traves de PrvProveedorUsUsuario */ 	
	public function getUsUsuariosXPrvProveedorUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(UsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrvProveedorUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrvProveedorUsUsuario::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsUsuario::GEN_TABLA);
            $c->addRealJoin(PrvProveedorUsUsuario::GEN_TABLA, PrvProveedorUsUsuario::GEN_ATTR_US_USUARIO_ID, UsUsuario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = UsUsuario::getUsUsuarios($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de UsUsuarios relacionados a traves de PrvProveedorUsUsuario */ 	
	public function getCantidadUsUsuariosXPrvProveedorUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(UsUsuario::GEN_ATTR_ID);
            if($estado){
                $c->add(UsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrvProveedorUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrvProveedorUsUsuario::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsUsuario::GEN_TABLA);
            $c->addRealJoin(PrvProveedorUsUsuario::GEN_TABLA, PrvProveedorUsUsuario::GEN_ATTR_US_USUARIO_ID, UsUsuario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = UsUsuario::getUsUsuarios($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener UsUsuario (Objeto) relacionado a traves de PrvProveedorUsUsuario */ 	
	public function getUsUsuarioXPrvProveedorUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getUsUsuariosXPrvProveedorUsUsuario($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPrvProveedorInsMarcas */ 	
	public function getPrvProveedorInsMarcas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrvProveedorInsMarca::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrvProveedorInsMarca::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrvProveedorInsMarca::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrvProveedorInsMarca::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrvProveedorInsMarca::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrvProveedorInsMarca::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrvProveedorInsMarca::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prvproveedorinsmarcas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prvproveedorinsmarca = PrvProveedorInsMarca::hidratarObjeto($fila);			
                $prvproveedorinsmarcas[] = $prvproveedorinsmarca;
            }

            return $prvproveedorinsmarcas;
	}	
	

	/* Método getPrvProveedorInsMarcasBloque para MasInfo */ 	
	public function getPrvProveedorInsMarcasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrvProveedorInsMarcas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrvProveedorInsMarcas Habilitados */ 	
	public function getPrvProveedorInsMarcasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrvProveedorInsMarcas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrvProveedorInsMarca */ 	
	public function getPrvProveedorInsMarca($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrvProveedorInsMarcas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrvProveedorInsMarca relacionadas */ 	
	public function deletePrvProveedorInsMarcas(){
            $obs = $this->getPrvProveedorInsMarcas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrvProveedorInsMarcasCmb() PrvProveedorInsMarca relacionadas */ 	
	public function getPrvProveedorInsMarcasCmb(){
            $c = new Criterio();
            $c->add(PrvProveedorInsMarca::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedorInsMarca::GEN_TABLA);
            $c->setCriterios();

            $os = PrvProveedorInsMarca::getPrvProveedorInsMarcasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsMarcas (Coleccion) relacionados a traves de PrvProveedorInsMarca */ 	
	public function getInsMarcasXPrvProveedorInsMarca($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsMarca::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrvProveedorInsMarca::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrvProveedorInsMarca::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsMarca::GEN_TABLA);
            $c->addRealJoin(PrvProveedorInsMarca::GEN_TABLA, PrvProveedorInsMarca::GEN_ATTR_INS_MARCA_ID, InsMarca::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsMarca::getInsMarcas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsMarcas relacionados a traves de PrvProveedorInsMarca */ 	
	public function getCantidadInsMarcasXPrvProveedorInsMarca($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsMarca::GEN_ATTR_ID);
            if($estado){
                $c->add(InsMarca::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrvProveedorInsMarca::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrvProveedorInsMarca::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsMarca::GEN_TABLA);
            $c->addRealJoin(PrvProveedorInsMarca::GEN_TABLA, PrvProveedorInsMarca::GEN_ATTR_INS_MARCA_ID, InsMarca::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsMarca::getInsMarcas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsMarca (Objeto) relacionado a traves de PrvProveedorInsMarca */ 	
	public function getInsMarcaXPrvProveedorInsMarca($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsMarcasXPrvProveedorInsMarca($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPrvTelefonos */ 	
	public function getPrvTelefonos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrvTelefono::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrvTelefono::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrvTelefono::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PrvTelefono::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrvTelefono::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrvTelefono::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrvTelefono::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrvTelefono::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prvtelefonos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prvtelefono = PrvTelefono::hidratarObjeto($fila);			
                $prvtelefonos[] = $prvtelefono;
            }

            return $prvtelefonos;
	}	
	

	/* Método getPrvTelefonosBloque para MasInfo */ 	
	public function getPrvTelefonosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrvTelefonos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrvTelefonos Habilitados */ 	
	public function getPrvTelefonosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrvTelefonos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrvTelefono */ 	
	public function getPrvTelefono($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrvTelefonos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrvTelefono relacionadas */ 	
	public function deletePrvTelefonos(){
            $obs = $this->getPrvTelefonos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrvTelefonosCmb() PrvTelefono relacionadas */ 	
	public function getPrvTelefonosCmb(){
            $c = new Criterio();
            $c->add(PrvTelefono::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvTelefono::GEN_TABLA);
            $c->setCriterios();

            $os = PrvTelefono::getPrvTelefonosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvTelefonoTipos (Coleccion) relacionados a traves de PrvTelefono */ 	
	public function getPrvTelefonoTiposXPrvTelefono($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvTelefonoTipo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrvTelefono::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrvTelefono::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvTelefonoTipo::GEN_TABLA);
            $c->addRealJoin(PrvTelefono::GEN_TABLA, PrvTelefono::GEN_ATTR_PRV_TELEFONO_TIPO_ID, PrvTelefonoTipo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvTelefonoTipo::getPrvTelefonoTipos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvTelefonoTipos relacionados a traves de PrvTelefono */ 	
	public function getCantidadPrvTelefonoTiposXPrvTelefono($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvTelefonoTipo::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvTelefonoTipo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrvTelefono::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrvTelefono::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvTelefonoTipo::GEN_TABLA);
            $c->addRealJoin(PrvTelefono::GEN_TABLA, PrvTelefono::GEN_ATTR_PRV_TELEFONO_TIPO_ID, PrvTelefonoTipo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvTelefonoTipo::getPrvTelefonoTipos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvTelefonoTipo (Objeto) relacionado a traves de PrvTelefono */ 	
	public function getPrvTelefonoTipoXPrvTelefono($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvTelefonoTiposXPrvTelefono($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPrvEmails */ 	
	public function getPrvEmails($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrvEmail::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrvEmail::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrvEmail::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PrvEmail::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrvEmail::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrvEmail::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrvEmail::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrvEmail::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prvemails = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prvemail = PrvEmail::hidratarObjeto($fila);			
                $prvemails[] = $prvemail;
            }

            return $prvemails;
	}	
	

	/* Método getPrvEmailsBloque para MasInfo */ 	
	public function getPrvEmailsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrvEmails($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrvEmails Habilitados */ 	
	public function getPrvEmailsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrvEmails($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrvEmail */ 	
	public function getPrvEmail($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrvEmails($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrvEmail relacionadas */ 	
	public function deletePrvEmails(){
            $obs = $this->getPrvEmails();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrvEmailsCmb() PrvEmail relacionadas */ 	
	public function getPrvEmailsCmb(){
            $c = new Criterio();
            $c->add(PrvEmail::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvEmail::GEN_TABLA);
            $c->setCriterios();

            $os = PrvEmail::getPrvEmailsCmbF(null, $c);
            return $os;
	}

	/* Metodo getPrvDomicilios */ 	
	public function getPrvDomicilios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrvDomicilio::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrvDomicilio::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrvDomicilio::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PrvDomicilio::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrvDomicilio::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrvDomicilio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrvDomicilio::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrvDomicilio::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prvdomicilios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prvdomicilio = PrvDomicilio::hidratarObjeto($fila);			
                $prvdomicilios[] = $prvdomicilio;
            }

            return $prvdomicilios;
	}	
	

	/* Método getPrvDomiciliosBloque para MasInfo */ 	
	public function getPrvDomiciliosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrvDomicilios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrvDomicilios Habilitados */ 	
	public function getPrvDomiciliosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrvDomicilios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrvDomicilio */ 	
	public function getPrvDomicilio($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrvDomicilios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrvDomicilio relacionadas */ 	
	public function deletePrvDomicilios(){
            $obs = $this->getPrvDomicilios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrvDomiciliosCmb() PrvDomicilio relacionadas */ 	
	public function getPrvDomiciliosCmb(){
            $c = new Criterio();
            $c->add(PrvDomicilio::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvDomicilio::GEN_TABLA);
            $c->setCriterios();

            $os = PrvDomicilio::getPrvDomiciliosCmbF(null, $c);
            return $os;
	}

	/* Metodo getPrvProveedorPrvRubros */ 	
	public function getPrvProveedorPrvRubros($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrvProveedorPrvRubro::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrvProveedorPrvRubro::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrvProveedorPrvRubro::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrvProveedorPrvRubro::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrvProveedorPrvRubro::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrvProveedorPrvRubro::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrvProveedorPrvRubro::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prvproveedorprvrubros = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prvproveedorprvrubro = PrvProveedorPrvRubro::hidratarObjeto($fila);			
                $prvproveedorprvrubros[] = $prvproveedorprvrubro;
            }

            return $prvproveedorprvrubros;
	}	
	

	/* Método getPrvProveedorPrvRubrosBloque para MasInfo */ 	
	public function getPrvProveedorPrvRubrosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrvProveedorPrvRubros($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrvProveedorPrvRubros Habilitados */ 	
	public function getPrvProveedorPrvRubrosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrvProveedorPrvRubros($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrvProveedorPrvRubro */ 	
	public function getPrvProveedorPrvRubro($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrvProveedorPrvRubros($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrvProveedorPrvRubro relacionadas */ 	
	public function deletePrvProveedorPrvRubros(){
            $obs = $this->getPrvProveedorPrvRubros();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrvProveedorPrvRubrosCmb() PrvProveedorPrvRubro relacionadas */ 	
	public function getPrvProveedorPrvRubrosCmb(){
            $c = new Criterio();
            $c->add(PrvProveedorPrvRubro::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedorPrvRubro::GEN_TABLA);
            $c->setCriterios();

            $os = PrvProveedorPrvRubro::getPrvProveedorPrvRubrosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvRubros (Coleccion) relacionados a traves de PrvProveedorPrvRubro */ 	
	public function getPrvRubrosXPrvProveedorPrvRubro($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvRubro::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrvProveedorPrvRubro::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrvProveedorPrvRubro::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvRubro::GEN_TABLA);
            $c->addRealJoin(PrvProveedorPrvRubro::GEN_TABLA, PrvProveedorPrvRubro::GEN_ATTR_PRV_RUBRO_ID, PrvRubro::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvRubro::getPrvRubros($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvRubros relacionados a traves de PrvProveedorPrvRubro */ 	
	public function getCantidadPrvRubrosXPrvProveedorPrvRubro($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvRubro::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvRubro::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrvProveedorPrvRubro::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrvProveedorPrvRubro::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvRubro::GEN_TABLA);
            $c->addRealJoin(PrvProveedorPrvRubro::GEN_TABLA, PrvProveedorPrvRubro::GEN_ATTR_PRV_RUBRO_ID, PrvRubro::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvRubro::getPrvRubros($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvRubro (Objeto) relacionado a traves de PrvProveedorPrvRubro */ 	
	public function getPrvRubroXPrvProveedorPrvRubro($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvRubrosXPrvProveedorPrvRubro($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(PrvInsumo::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(PrvInsumo::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(PrvInsumo::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(PrvInsumo::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
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

	/* Metodo getPrvImportacions */ 	
	public function getPrvImportacions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrvImportacion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrvImportacion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrvImportacion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PrvImportacion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrvImportacion::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrvImportacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrvImportacion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrvImportacion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prvimportacions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prvimportacion = PrvImportacion::hidratarObjeto($fila);			
                $prvimportacions[] = $prvimportacion;
            }

            return $prvimportacions;
	}	
	

	/* Método getPrvImportacionsBloque para MasInfo */ 	
	public function getPrvImportacionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrvImportacions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrvImportacions Habilitados */ 	
	public function getPrvImportacionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrvImportacions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrvImportacion */ 	
	public function getPrvImportacion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrvImportacions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrvImportacion relacionadas */ 	
	public function deletePrvImportacions(){
            $obs = $this->getPrvImportacions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrvImportacionsCmb() PrvImportacion relacionadas */ 	
	public function getPrvImportacionsCmb(){
            $c = new Criterio();
            $c->add(PrvImportacion::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvImportacion::GEN_TABLA);
            $c->setCriterios();

            $os = PrvImportacion::getPrvImportacionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvImportacionTipoEstados (Coleccion) relacionados a traves de PrvImportacion */ 	
	public function getPrvImportacionTipoEstadosXPrvImportacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvImportacionTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrvImportacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrvImportacion::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvImportacionTipoEstado::GEN_TABLA);
            $c->addRealJoin(PrvImportacion::GEN_TABLA, PrvImportacion::GEN_ATTR_PRV_IMPORTACION_TIPO_ESTADO_ID, PrvImportacionTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvImportacionTipoEstado::getPrvImportacionTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvImportacionTipoEstados relacionados a traves de PrvImportacion */ 	
	public function getCantidadPrvImportacionTipoEstadosXPrvImportacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvImportacionTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvImportacionTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrvImportacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrvImportacion::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvImportacionTipoEstado::GEN_TABLA);
            $c->addRealJoin(PrvImportacion::GEN_TABLA, PrvImportacion::GEN_ATTR_PRV_IMPORTACION_TIPO_ESTADO_ID, PrvImportacionTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvImportacionTipoEstado::getPrvImportacionTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvImportacionTipoEstado (Objeto) relacionado a traves de PrvImportacion */ 	
	public function getPrvImportacionTipoEstadoXPrvImportacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvImportacionTipoEstadosXPrvImportacion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdePedidoEnviados */ 	
	public function getPdePedidoEnviados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdePedidoEnviado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdePedidoEnviado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdePedidoEnviado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdePedidoEnviado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdePedidoEnviado::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdePedidoEnviado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdePedidoEnviado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdePedidoEnviado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdepedidoenviados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdepedidoenviado = PdePedidoEnviado::hidratarObjeto($fila);			
                $pdepedidoenviados[] = $pdepedidoenviado;
            }

            return $pdepedidoenviados;
	}	
	

	/* Método getPdePedidoEnviadosBloque para MasInfo */ 	
	public function getPdePedidoEnviadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdePedidoEnviados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdePedidoEnviados Habilitados */ 	
	public function getPdePedidoEnviadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdePedidoEnviados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdePedidoEnviado */ 	
	public function getPdePedidoEnviado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdePedidoEnviados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdePedidoEnviado relacionadas */ 	
	public function deletePdePedidoEnviados(){
            $obs = $this->getPdePedidoEnviados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdePedidoEnviadosCmb() PdePedidoEnviado relacionadas */ 	
	public function getPdePedidoEnviadosCmb(){
            $c = new Criterio();
            $c->add(PdePedidoEnviado::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdePedidoEnviado::GEN_TABLA);
            $c->setCriterios();

            $os = PdePedidoEnviado::getPdePedidoEnviadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdePedidos (Coleccion) relacionados a traves de PdePedidoEnviado */ 	
	public function getPdePedidosXPdePedidoEnviado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdePedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdePedidoEnviado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdePedidoEnviado::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdePedido::GEN_TABLA);
            $c->addRealJoin(PdePedidoEnviado::GEN_TABLA, PdePedidoEnviado::GEN_ATTR_PDE_PEDIDO_ID, PdePedido::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdePedido::getPdePedidos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdePedidos relacionados a traves de PdePedidoEnviado */ 	
	public function getCantidadPdePedidosXPdePedidoEnviado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdePedido::GEN_ATTR_ID);
            if($estado){
                $c->add(PdePedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdePedidoEnviado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdePedidoEnviado::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdePedido::GEN_TABLA);
            $c->addRealJoin(PdePedidoEnviado::GEN_TABLA, PdePedidoEnviado::GEN_ATTR_PDE_PEDIDO_ID, PdePedido::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdePedido::getPdePedidos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdePedido (Objeto) relacionado a traves de PdePedidoEnviado */ 	
	public function getPdePedidoXPdePedidoEnviado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdePedidosXPdePedidoEnviado($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdePedidoPrvProveedors */ 	
	public function getPdePedidoPrvProveedors($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdePedidoPrvProveedor::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdePedidoPrvProveedor::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdePedidoPrvProveedor::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdePedidoPrvProveedor::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdePedidoPrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdePedidoPrvProveedor::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdePedidoPrvProveedor::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdepedidoprvproveedors = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdepedidoprvproveedor = PdePedidoPrvProveedor::hidratarObjeto($fila);			
                $pdepedidoprvproveedors[] = $pdepedidoprvproveedor;
            }

            return $pdepedidoprvproveedors;
	}	
	

	/* Método getPdePedidoPrvProveedorsBloque para MasInfo */ 	
	public function getPdePedidoPrvProveedorsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdePedidoPrvProveedors($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdePedidoPrvProveedors Habilitados */ 	
	public function getPdePedidoPrvProveedorsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdePedidoPrvProveedors($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdePedidoPrvProveedor */ 	
	public function getPdePedidoPrvProveedor($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdePedidoPrvProveedors($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdePedidoPrvProveedor relacionadas */ 	
	public function deletePdePedidoPrvProveedors(){
            $obs = $this->getPdePedidoPrvProveedors();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdePedidoPrvProveedorsCmb() PdePedidoPrvProveedor relacionadas */ 	
	public function getPdePedidoPrvProveedorsCmb(){
            $c = new Criterio();
            $c->add(PdePedidoPrvProveedor::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdePedidoPrvProveedor::GEN_TABLA);
            $c->setCriterios();

            $os = PdePedidoPrvProveedor::getPdePedidoPrvProveedorsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdePedidos (Coleccion) relacionados a traves de PdePedidoPrvProveedor */ 	
	public function getPdePedidosXPdePedidoPrvProveedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdePedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdePedidoPrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdePedidoPrvProveedor::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdePedido::GEN_TABLA);
            $c->addRealJoin(PdePedidoPrvProveedor::GEN_TABLA, PdePedidoPrvProveedor::GEN_ATTR_PDE_PEDIDO_ID, PdePedido::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdePedido::getPdePedidos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdePedidos relacionados a traves de PdePedidoPrvProveedor */ 	
	public function getCantidadPdePedidosXPdePedidoPrvProveedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdePedido::GEN_ATTR_ID);
            if($estado){
                $c->add(PdePedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdePedidoPrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdePedidoPrvProveedor::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdePedido::GEN_TABLA);
            $c->addRealJoin(PdePedidoPrvProveedor::GEN_TABLA, PdePedidoPrvProveedor::GEN_ATTR_PDE_PEDIDO_ID, PdePedido::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdePedido::getPdePedidos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdePedido (Objeto) relacionado a traves de PdePedidoPrvProveedor */ 	
	public function getPdePedidoXPdePedidoPrvProveedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdePedidosXPdePedidoPrvProveedor($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdePedidoPrvProveedorAvisados */ 	
	public function getPdePedidoPrvProveedorAvisados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdePedidoPrvProveedorAvisado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdePedidoPrvProveedorAvisado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdePedidoPrvProveedorAvisado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdePedidoPrvProveedorAvisado::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdePedidoPrvProveedorAvisado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdePedidoPrvProveedorAvisado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdePedidoPrvProveedorAvisado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdepedidoprvproveedoravisados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdepedidoprvproveedoravisado = PdePedidoPrvProveedorAvisado::hidratarObjeto($fila);			
                $pdepedidoprvproveedoravisados[] = $pdepedidoprvproveedoravisado;
            }

            return $pdepedidoprvproveedoravisados;
	}	
	

	/* Método getPdePedidoPrvProveedorAvisadosBloque para MasInfo */ 	
	public function getPdePedidoPrvProveedorAvisadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdePedidoPrvProveedorAvisados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdePedidoPrvProveedorAvisados Habilitados */ 	
	public function getPdePedidoPrvProveedorAvisadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdePedidoPrvProveedorAvisados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdePedidoPrvProveedorAvisado */ 	
	public function getPdePedidoPrvProveedorAvisado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdePedidoPrvProveedorAvisados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdePedidoPrvProveedorAvisado relacionadas */ 	
	public function deletePdePedidoPrvProveedorAvisados(){
            $obs = $this->getPdePedidoPrvProveedorAvisados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdePedidoPrvProveedorAvisadosCmb() PdePedidoPrvProveedorAvisado relacionadas */ 	
	public function getPdePedidoPrvProveedorAvisadosCmb(){
            $c = new Criterio();
            $c->add(PdePedidoPrvProveedorAvisado::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdePedidoPrvProveedorAvisado::GEN_TABLA);
            $c->setCriterios();

            $os = PdePedidoPrvProveedorAvisado::getPdePedidoPrvProveedorAvisadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdePedidos (Coleccion) relacionados a traves de PdePedidoPrvProveedorAvisado */ 	
	public function getPdePedidosXPdePedidoPrvProveedorAvisado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdePedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdePedidoPrvProveedorAvisado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdePedidoPrvProveedorAvisado::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdePedido::GEN_TABLA);
            $c->addRealJoin(PdePedidoPrvProveedorAvisado::GEN_TABLA, PdePedidoPrvProveedorAvisado::GEN_ATTR_PDE_PEDIDO_ID, PdePedido::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdePedido::getPdePedidos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdePedidos relacionados a traves de PdePedidoPrvProveedorAvisado */ 	
	public function getCantidadPdePedidosXPdePedidoPrvProveedorAvisado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdePedido::GEN_ATTR_ID);
            if($estado){
                $c->add(PdePedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdePedidoPrvProveedorAvisado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdePedidoPrvProveedorAvisado::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdePedido::GEN_TABLA);
            $c->addRealJoin(PdePedidoPrvProveedorAvisado::GEN_TABLA, PdePedidoPrvProveedorAvisado::GEN_ATTR_PDE_PEDIDO_ID, PdePedido::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdePedido::getPdePedidos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdePedido (Objeto) relacionado a traves de PdePedidoPrvProveedorAvisado */ 	
	public function getPdePedidoXPdePedidoPrvProveedorAvisado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdePedidosXPdePedidoPrvProveedorAvisado($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeCotizacions */ 	
	public function getPdeCotizacions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeCotizacion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeCotizacion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeCotizacion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeCotizacion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeCotizacion::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeCotizacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeCotizacion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeCotizacion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdecotizacions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdecotizacion = PdeCotizacion::hidratarObjeto($fila);			
                $pdecotizacions[] = $pdecotizacion;
            }

            return $pdecotizacions;
	}	
	

	/* Método getPdeCotizacionsBloque para MasInfo */ 	
	public function getPdeCotizacionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeCotizacions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeCotizacions Habilitados */ 	
	public function getPdeCotizacionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeCotizacions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeCotizacion */ 	
	public function getPdeCotizacion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeCotizacions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeCotizacion relacionadas */ 	
	public function deletePdeCotizacions(){
            $obs = $this->getPdeCotizacions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeCotizacionsCmb() PdeCotizacion relacionadas */ 	
	public function getPdeCotizacionsCmb(){
            $c = new Criterio();
            $c->add(PdeCotizacion::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeCotizacion::GEN_TABLA);
            $c->setCriterios();

            $os = PdeCotizacion::getPdeCotizacionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdePedidos (Coleccion) relacionados a traves de PdeCotizacion */ 	
	public function getPdePedidosXPdeCotizacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdePedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeCotizacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeCotizacion::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdePedido::GEN_TABLA);
            $c->addRealJoin(PdeCotizacion::GEN_TABLA, PdeCotizacion::GEN_ATTR_PDE_PEDIDO_ID, PdePedido::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdePedido::getPdePedidos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdePedidos relacionados a traves de PdeCotizacion */ 	
	public function getCantidadPdePedidosXPdeCotizacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdePedido::GEN_ATTR_ID);
            if($estado){
                $c->add(PdePedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeCotizacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeCotizacion::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdePedido::GEN_TABLA);
            $c->addRealJoin(PdeCotizacion::GEN_TABLA, PdeCotizacion::GEN_ATTR_PDE_PEDIDO_ID, PdePedido::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdePedido::getPdePedidos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdePedido (Objeto) relacionado a traves de PdeCotizacion */ 	
	public function getPdePedidoXPdeCotizacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdePedidosXPdeCotizacion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeOcAgrupacions */ 	
	public function getPdeOcAgrupacions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeOcAgrupacion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeOcAgrupacion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeOcAgrupacion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeOcAgrupacion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeOcAgrupacion::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeOcAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeOcAgrupacion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeOcAgrupacion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdeocagrupacions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdeocagrupacion = PdeOcAgrupacion::hidratarObjeto($fila);			
                $pdeocagrupacions[] = $pdeocagrupacion;
            }

            return $pdeocagrupacions;
	}	
	

	/* Método getPdeOcAgrupacionsBloque para MasInfo */ 	
	public function getPdeOcAgrupacionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeOcAgrupacions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeOcAgrupacions Habilitados */ 	
	public function getPdeOcAgrupacionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeOcAgrupacions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeOcAgrupacion */ 	
	public function getPdeOcAgrupacion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeOcAgrupacions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeOcAgrupacion relacionadas */ 	
	public function deletePdeOcAgrupacions(){
            $obs = $this->getPdeOcAgrupacions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeOcAgrupacionsCmb() PdeOcAgrupacion relacionadas */ 	
	public function getPdeOcAgrupacionsCmb(){
            $c = new Criterio();
            $c->add(PdeOcAgrupacion::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcAgrupacion::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOcAgrupacion::getPdeOcAgrupacionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeOcTipoOrigens (Coleccion) relacionados a traves de PdeOcAgrupacion */ 	
	public function getPdeOcTipoOrigensXPdeOcAgrupacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeOcTipoOrigen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOcAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOcAgrupacion::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcTipoOrigen::GEN_TABLA);
            $c->addRealJoin(PdeOcAgrupacion::GEN_TABLA, PdeOcAgrupacion::GEN_ATTR_PDE_OC_TIPO_ORIGEN_ID, PdeOcTipoOrigen::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOcTipoOrigen::getPdeOcTipoOrigens($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeOcTipoOrigens relacionados a traves de PdeOcAgrupacion */ 	
	public function getCantidadPdeOcTipoOrigensXPdeOcAgrupacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeOcTipoOrigen::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeOcTipoOrigen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOcAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOcAgrupacion::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcTipoOrigen::GEN_TABLA);
            $c->addRealJoin(PdeOcAgrupacion::GEN_TABLA, PdeOcAgrupacion::GEN_ATTR_PDE_OC_TIPO_ORIGEN_ID, PdeOcTipoOrigen::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOcTipoOrigen::getPdeOcTipoOrigens($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeOcTipoOrigen (Objeto) relacionado a traves de PdeOcAgrupacion */ 	
	public function getPdeOcTipoOrigenXPdeOcAgrupacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeOcTipoOrigensXPdeOcAgrupacion($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(PdeOc::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(PdeOc::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(PdeOc::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(PdeOc::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
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

	/* Metodo getPdeRecepcionAgrupacions */ 	
	public function getPdeRecepcionAgrupacions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeRecepcionAgrupacion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeRecepcionAgrupacion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeRecepcionAgrupacion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeRecepcionAgrupacion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeRecepcionAgrupacion::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeRecepcionAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeRecepcionAgrupacion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeRecepcionAgrupacion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pderecepcionagrupacions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pderecepcionagrupacion = PdeRecepcionAgrupacion::hidratarObjeto($fila);			
                $pderecepcionagrupacions[] = $pderecepcionagrupacion;
            }

            return $pderecepcionagrupacions;
	}	
	

	/* Método getPdeRecepcionAgrupacionsBloque para MasInfo */ 	
	public function getPdeRecepcionAgrupacionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeRecepcionAgrupacions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeRecepcionAgrupacions Habilitados */ 	
	public function getPdeRecepcionAgrupacionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeRecepcionAgrupacions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeRecepcionAgrupacion */ 	
	public function getPdeRecepcionAgrupacion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeRecepcionAgrupacions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeRecepcionAgrupacion relacionadas */ 	
	public function deletePdeRecepcionAgrupacions(){
            $obs = $this->getPdeRecepcionAgrupacions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeRecepcionAgrupacionsCmb() PdeRecepcionAgrupacion relacionadas */ 	
	public function getPdeRecepcionAgrupacionsCmb(){
            $c = new Criterio();
            $c->add(PdeRecepcionAgrupacion::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeRecepcionAgrupacion::GEN_TABLA);
            $c->setCriterios();

            $os = PdeRecepcionAgrupacion::getPdeRecepcionAgrupacionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeTipoRecepcions (Coleccion) relacionados a traves de PdeRecepcionAgrupacion */ 	
	public function getPdeTipoRecepcionsXPdeRecepcionAgrupacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeTipoRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeRecepcionAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeRecepcionAgrupacion::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTipoRecepcion::GEN_TABLA);
            $c->addRealJoin(PdeRecepcionAgrupacion::GEN_TABLA, PdeRecepcionAgrupacion::GEN_ATTR_PDE_TIPO_RECEPCION_ID, PdeTipoRecepcion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTipoRecepcion::getPdeTipoRecepcions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeTipoRecepcions relacionados a traves de PdeRecepcionAgrupacion */ 	
	public function getCantidadPdeTipoRecepcionsXPdeRecepcionAgrupacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeTipoRecepcion::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeTipoRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeRecepcionAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeRecepcionAgrupacion::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTipoRecepcion::GEN_TABLA);
            $c->addRealJoin(PdeRecepcionAgrupacion::GEN_TABLA, PdeRecepcionAgrupacion::GEN_ATTR_PDE_TIPO_RECEPCION_ID, PdeTipoRecepcion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTipoRecepcion::getPdeTipoRecepcions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeTipoRecepcion (Objeto) relacionado a traves de PdeRecepcionAgrupacion */ 	
	public function getPdeTipoRecepcionXPdeRecepcionAgrupacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeTipoRecepcionsXPdeRecepcionAgrupacion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeRecepcions */ 	
	public function getPdeRecepcions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeRecepcion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeRecepcion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeRecepcion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeRecepcion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeRecepcion::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeRecepcion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeRecepcion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pderecepcions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pderecepcion = PdeRecepcion::hidratarObjeto($fila);			
                $pderecepcions[] = $pderecepcion;
            }

            return $pderecepcions;
	}	
	

	/* Método getPdeRecepcionsBloque para MasInfo */ 	
	public function getPdeRecepcionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeRecepcions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeRecepcions Habilitados */ 	
	public function getPdeRecepcionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeRecepcions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeRecepcion */ 	
	public function getPdeRecepcion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeRecepcions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeRecepcion relacionadas */ 	
	public function deletePdeRecepcions(){
            $obs = $this->getPdeRecepcions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeRecepcionsCmb() PdeRecepcion relacionadas */ 	
	public function getPdeRecepcionsCmb(){
            $c = new Criterio();
            $c->add(PdeRecepcion::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeRecepcion::GEN_TABLA);
            $c->setCriterios();

            $os = PdeRecepcion::getPdeRecepcionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeTipoRecepcions (Coleccion) relacionados a traves de PdeRecepcion */ 	
	public function getPdeTipoRecepcionsXPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeTipoRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeRecepcion::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTipoRecepcion::GEN_TABLA);
            $c->addRealJoin(PdeRecepcion::GEN_TABLA, PdeRecepcion::GEN_ATTR_PDE_TIPO_RECEPCION_ID, PdeTipoRecepcion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTipoRecepcion::getPdeTipoRecepcions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeTipoRecepcions relacionados a traves de PdeRecepcion */ 	
	public function getCantidadPdeTipoRecepcionsXPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeTipoRecepcion::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeTipoRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeRecepcion::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTipoRecepcion::GEN_TABLA);
            $c->addRealJoin(PdeRecepcion::GEN_TABLA, PdeRecepcion::GEN_ATTR_PDE_TIPO_RECEPCION_ID, PdeTipoRecepcion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTipoRecepcion::getPdeTipoRecepcions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeTipoRecepcion (Objeto) relacionado a traves de PdeRecepcion */ 	
	public function getPdeTipoRecepcionXPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeTipoRecepcionsXPdeRecepcion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeCentroPedidoPrvProveedors */ 	
	public function getPdeCentroPedidoPrvProveedors($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeCentroPedidoPrvProveedor::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeCentroPedidoPrvProveedor::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeCentroPedidoPrvProveedor::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeCentroPedidoPrvProveedor::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeCentroPedidoPrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeCentroPedidoPrvProveedor::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeCentroPedidoPrvProveedor::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdecentropedidoprvproveedors = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdecentropedidoprvproveedor = PdeCentroPedidoPrvProveedor::hidratarObjeto($fila);			
                $pdecentropedidoprvproveedors[] = $pdecentropedidoprvproveedor;
            }

            return $pdecentropedidoprvproveedors;
	}	
	

	/* Método getPdeCentroPedidoPrvProveedorsBloque para MasInfo */ 	
	public function getPdeCentroPedidoPrvProveedorsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeCentroPedidoPrvProveedors($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeCentroPedidoPrvProveedors Habilitados */ 	
	public function getPdeCentroPedidoPrvProveedorsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeCentroPedidoPrvProveedors($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeCentroPedidoPrvProveedor */ 	
	public function getPdeCentroPedidoPrvProveedor($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeCentroPedidoPrvProveedors($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeCentroPedidoPrvProveedor relacionadas */ 	
	public function deletePdeCentroPedidoPrvProveedors(){
            $obs = $this->getPdeCentroPedidoPrvProveedors();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeCentroPedidoPrvProveedorsCmb() PdeCentroPedidoPrvProveedor relacionadas */ 	
	public function getPdeCentroPedidoPrvProveedorsCmb(){
            $c = new Criterio();
            $c->add(PdeCentroPedidoPrvProveedor::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeCentroPedidoPrvProveedor::GEN_TABLA);
            $c->setCriterios();

            $os = PdeCentroPedidoPrvProveedor::getPdeCentroPedidoPrvProveedorsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeCentroPedidos (Coleccion) relacionados a traves de PdeCentroPedidoPrvProveedor */ 	
	public function getPdeCentroPedidosXPdeCentroPedidoPrvProveedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeCentroPedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeCentroPedidoPrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeCentroPedidoPrvProveedor::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeCentroPedido::GEN_TABLA);
            $c->addRealJoin(PdeCentroPedidoPrvProveedor::GEN_TABLA, PdeCentroPedidoPrvProveedor::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, PdeCentroPedido::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeCentroPedido::getPdeCentroPedidos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeCentroPedidos relacionados a traves de PdeCentroPedidoPrvProveedor */ 	
	public function getCantidadPdeCentroPedidosXPdeCentroPedidoPrvProveedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeCentroPedido::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeCentroPedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeCentroPedidoPrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeCentroPedidoPrvProveedor::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeCentroPedido::GEN_TABLA);
            $c->addRealJoin(PdeCentroPedidoPrvProveedor::GEN_TABLA, PdeCentroPedidoPrvProveedor::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, PdeCentroPedido::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeCentroPedido::getPdeCentroPedidos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeCentroPedido (Objeto) relacionado a traves de PdeCentroPedidoPrvProveedor */ 	
	public function getPdeCentroPedidoXPdeCentroPedidoPrvProveedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeCentroPedidosXPdeCentroPedidoPrvProveedor($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeOcReclamos */ 	
	public function getPdeOcReclamos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeOcReclamo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeOcReclamo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeOcReclamo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeOcReclamo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeOcReclamo::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeOcReclamo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeOcReclamo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeOcReclamo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdeocreclamos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdeocreclamo = PdeOcReclamo::hidratarObjeto($fila);			
                $pdeocreclamos[] = $pdeocreclamo;
            }

            return $pdeocreclamos;
	}	
	

	/* Método getPdeOcReclamosBloque para MasInfo */ 	
	public function getPdeOcReclamosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeOcReclamos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeOcReclamos Habilitados */ 	
	public function getPdeOcReclamosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeOcReclamos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeOcReclamo */ 	
	public function getPdeOcReclamo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeOcReclamos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeOcReclamo relacionadas */ 	
	public function deletePdeOcReclamos(){
            $obs = $this->getPdeOcReclamos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeOcReclamosCmb() PdeOcReclamo relacionadas */ 	
	public function getPdeOcReclamosCmb(){
            $c = new Criterio();
            $c->add(PdeOcReclamo::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcReclamo::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOcReclamo::getPdeOcReclamosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeOcs (Coleccion) relacionados a traves de PdeOcReclamo */ 	
	public function getPdeOcsXPdeOcReclamo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOcReclamo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOcReclamo::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOc::GEN_TABLA);
            $c->addRealJoin(PdeOcReclamo::GEN_TABLA, PdeOcReclamo::GEN_ATTR_PDE_OC_ID, PdeOc::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOc::getPdeOcs($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeOcs relacionados a traves de PdeOcReclamo */ 	
	public function getCantidadPdeOcsXPdeOcReclamo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeOc::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOcReclamo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOcReclamo::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOc::GEN_TABLA);
            $c->addRealJoin(PdeOcReclamo::GEN_TABLA, PdeOcReclamo::GEN_ATTR_PDE_OC_ID, PdeOc::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOc::getPdeOcs($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeOc (Objeto) relacionado a traves de PdeOcReclamo */ 	
	public function getPdeOcXPdeOcReclamo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeOcsXPdeOcReclamo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeTributoExencions */ 	
	public function getPdeTributoExencions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeTributoExencion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeTributoExencion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeTributoExencion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeTributoExencion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeTributoExencion::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeTributoExencion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeTributoExencion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeTributoExencion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdetributoexencions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdetributoexencion = PdeTributoExencion::hidratarObjeto($fila);			
                $pdetributoexencions[] = $pdetributoexencion;
            }

            return $pdetributoexencions;
	}	
	

	/* Método getPdeTributoExencionsBloque para MasInfo */ 	
	public function getPdeTributoExencionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeTributoExencions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeTributoExencions Habilitados */ 	
	public function getPdeTributoExencionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeTributoExencions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeTributoExencion */ 	
	public function getPdeTributoExencion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeTributoExencions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeTributoExencion relacionadas */ 	
	public function deletePdeTributoExencions(){
            $obs = $this->getPdeTributoExencions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeTributoExencionsCmb() PdeTributoExencion relacionadas */ 	
	public function getPdeTributoExencionsCmb(){
            $c = new Criterio();
            $c->add(PdeTributoExencion::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTributoExencion::GEN_TABLA);
            $c->setCriterios();

            $os = PdeTributoExencion::getPdeTributoExencionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeTributos (Coleccion) relacionados a traves de PdeTributoExencion */ 	
	public function getPdeTributosXPdeTributoExencion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeTributoExencion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeTributoExencion::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTributo::GEN_TABLA);
            $c->addRealJoin(PdeTributoExencion::GEN_TABLA, PdeTributoExencion::GEN_ATTR_PDE_TRIBUTO_ID, PdeTributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTributo::getPdeTributos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeTributos relacionados a traves de PdeTributoExencion */ 	
	public function getCantidadPdeTributosXPdeTributoExencion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeTributo::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeTributoExencion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeTributoExencion::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTributo::GEN_TABLA);
            $c->addRealJoin(PdeTributoExencion::GEN_TABLA, PdeTributoExencion::GEN_ATTR_PDE_TRIBUTO_ID, PdeTributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTributo::getPdeTributos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeTributo (Objeto) relacionado a traves de PdeTributoExencion */ 	
	public function getPdeTributoXPdeTributoExencion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeTributosXPdeTributoExencion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeFacturas */ 	
	public function getPdeFacturas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeFactura::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeFactura::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeFactura::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeFactura::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeFactura::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeFactura::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeFactura::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdefacturas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdefactura = PdeFactura::hidratarObjeto($fila);			
                $pdefacturas[] = $pdefactura;
            }

            return $pdefacturas;
	}	
	

	/* Método getPdeFacturasBloque para MasInfo */ 	
	public function getPdeFacturasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeFacturas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeFacturas Habilitados */ 	
	public function getPdeFacturasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeFacturas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeFactura */ 	
	public function getPdeFactura($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeFacturas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeFactura relacionadas */ 	
	public function deletePdeFacturas(){
            $obs = $this->getPdeFacturas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeFacturasCmb() PdeFactura relacionadas */ 	
	public function getPdeFacturasCmb(){
            $c = new Criterio();
            $c->add(PdeFactura::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->setCriterios();

            $os = PdeFactura::getPdeFacturasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeFacturaTipoEstados (Coleccion) relacionados a traves de PdeFactura */ 	
	public function getPdeFacturaTipoEstadosXPdeFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeFacturaTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFactura::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFacturaTipoEstado::GEN_TABLA);
            $c->addRealJoin(PdeFactura::GEN_TABLA, PdeFactura::GEN_ATTR_PDE_FACTURA_TIPO_ESTADO_ID, PdeFacturaTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFacturaTipoEstado::getPdeFacturaTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeFacturaTipoEstados relacionados a traves de PdeFactura */ 	
	public function getCantidadPdeFacturaTipoEstadosXPdeFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeFacturaTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeFacturaTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFactura::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFacturaTipoEstado::GEN_TABLA);
            $c->addRealJoin(PdeFactura::GEN_TABLA, PdeFactura::GEN_ATTR_PDE_FACTURA_TIPO_ESTADO_ID, PdeFacturaTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFacturaTipoEstado::getPdeFacturaTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeFacturaTipoEstado (Objeto) relacionado a traves de PdeFactura */ 	
	public function getPdeFacturaTipoEstadoXPdeFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeFacturaTipoEstadosXPdeFactura($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeNotaCreditos */ 	
	public function getPdeNotaCreditos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeNotaCredito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeNotaCredito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeNotaCredito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeNotaCredito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeNotaCredito::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeNotaCredito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeNotaCredito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdenotacreditos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdenotacredito = PdeNotaCredito::hidratarObjeto($fila);			
                $pdenotacreditos[] = $pdenotacredito;
            }

            return $pdenotacreditos;
	}	
	

	/* Método getPdeNotaCreditosBloque para MasInfo */ 	
	public function getPdeNotaCreditosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeNotaCreditos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeNotaCreditos Habilitados */ 	
	public function getPdeNotaCreditosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeNotaCreditos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeNotaCredito */ 	
	public function getPdeNotaCredito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeNotaCreditos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeNotaCredito relacionadas */ 	
	public function deletePdeNotaCreditos(){
            $obs = $this->getPdeNotaCreditos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeNotaCreditosCmb() PdeNotaCredito relacionadas */ 	
	public function getPdeNotaCreditosCmb(){
            $c = new Criterio();
            $c->add(PdeNotaCredito::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaCredito::getPdeNotaCreditosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeTipoNotaCreditos (Coleccion) relacionados a traves de PdeNotaCredito */ 	
	public function getPdeTipoNotaCreditosXPdeNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeTipoNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaCredito::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTipoNotaCredito::GEN_TABLA);
            $c->addRealJoin(PdeNotaCredito::GEN_TABLA, PdeNotaCredito::GEN_ATTR_PDE_TIPO_NOTA_CREDITO_ID, PdeTipoNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTipoNotaCredito::getPdeTipoNotaCreditos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeTipoNotaCreditos relacionados a traves de PdeNotaCredito */ 	
	public function getCantidadPdeTipoNotaCreditosXPdeNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeTipoNotaCredito::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeTipoNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaCredito::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTipoNotaCredito::GEN_TABLA);
            $c->addRealJoin(PdeNotaCredito::GEN_TABLA, PdeNotaCredito::GEN_ATTR_PDE_TIPO_NOTA_CREDITO_ID, PdeTipoNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTipoNotaCredito::getPdeTipoNotaCreditos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeTipoNotaCredito (Objeto) relacionado a traves de PdeNotaCredito */ 	
	public function getPdeTipoNotaCreditoXPdeNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeTipoNotaCreditosXPdeNotaCredito($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(PdeNotaDebito::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(PdeNotaDebito::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaDebito::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaDebito::getPdeNotaDebitosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeTipoNotaDebitos (Coleccion) relacionados a traves de PdeNotaDebito */ 	
	public function getPdeTipoNotaDebitosXPdeNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeTipoNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaDebito::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTipoNotaDebito::GEN_TABLA);
            $c->addRealJoin(PdeNotaDebito::GEN_TABLA, PdeNotaDebito::GEN_ATTR_PDE_TIPO_NOTA_DEBITO_ID, PdeTipoNotaDebito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTipoNotaDebito::getPdeTipoNotaDebitos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeTipoNotaDebitos relacionados a traves de PdeNotaDebito */ 	
	public function getCantidadPdeTipoNotaDebitosXPdeNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeTipoNotaDebito::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeTipoNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaDebito::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTipoNotaDebito::GEN_TABLA);
            $c->addRealJoin(PdeNotaDebito::GEN_TABLA, PdeNotaDebito::GEN_ATTR_PDE_TIPO_NOTA_DEBITO_ID, PdeTipoNotaDebito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTipoNotaDebito::getPdeTipoNotaDebitos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeTipoNotaDebito (Objeto) relacionado a traves de PdeNotaDebito */ 	
	public function getPdeTipoNotaDebitoXPdeNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeTipoNotaDebitosXPdeNotaDebito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeRecibos */ 	
	public function getPdeRecibos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeRecibo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeRecibo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeRecibo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeRecibo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeRecibo::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeRecibo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeRecibo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pderecibos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pderecibo = PdeRecibo::hidratarObjeto($fila);			
                $pderecibos[] = $pderecibo;
            }

            return $pderecibos;
	}	
	

	/* Método getPdeRecibosBloque para MasInfo */ 	
	public function getPdeRecibosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeRecibos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeRecibos Habilitados */ 	
	public function getPdeRecibosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeRecibos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeRecibo */ 	
	public function getPdeRecibo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeRecibos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeRecibo relacionadas */ 	
	public function deletePdeRecibos(){
            $obs = $this->getPdeRecibos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeRecibosCmb() PdeRecibo relacionadas */ 	
	public function getPdeRecibosCmb(){
            $c = new Criterio();
            $c->add(PdeRecibo::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeRecibo::GEN_TABLA);
            $c->setCriterios();

            $os = PdeRecibo::getPdeRecibosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeTipoRecibos (Coleccion) relacionados a traves de PdeRecibo */ 	
	public function getPdeTipoRecibosXPdeRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeTipoRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeRecibo::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTipoRecibo::GEN_TABLA);
            $c->addRealJoin(PdeRecibo::GEN_TABLA, PdeRecibo::GEN_ATTR_PDE_TIPO_RECIBO_ID, PdeTipoRecibo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTipoRecibo::getPdeTipoRecibos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeTipoRecibos relacionados a traves de PdeRecibo */ 	
	public function getCantidadPdeTipoRecibosXPdeRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeTipoRecibo::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeTipoRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeRecibo::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTipoRecibo::GEN_TABLA);
            $c->addRealJoin(PdeRecibo::GEN_TABLA, PdeRecibo::GEN_ATTR_PDE_TIPO_RECIBO_ID, PdeTipoRecibo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTipoRecibo::getPdeTipoRecibos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeTipoRecibo (Objeto) relacionado a traves de PdeRecibo */ 	
	public function getPdeTipoReciboXPdeRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeTipoRecibosXPdeRecibo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeOrdenPagos */ 	
	public function getPdeOrdenPagos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeOrdenPago::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeOrdenPago::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeOrdenPago::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeOrdenPago::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeOrdenPago::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeOrdenPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeOrdenPago::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeOrdenPago::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdeordenpagos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdeordenpago = PdeOrdenPago::hidratarObjeto($fila);			
                $pdeordenpagos[] = $pdeordenpago;
            }

            return $pdeordenpagos;
	}	
	

	/* Método getPdeOrdenPagosBloque para MasInfo */ 	
	public function getPdeOrdenPagosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeOrdenPagos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeOrdenPagos Habilitados */ 	
	public function getPdeOrdenPagosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeOrdenPagos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeOrdenPago */ 	
	public function getPdeOrdenPago($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeOrdenPagos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeOrdenPago relacionadas */ 	
	public function deletePdeOrdenPagos(){
            $obs = $this->getPdeOrdenPagos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeOrdenPagosCmb() PdeOrdenPago relacionadas */ 	
	public function getPdeOrdenPagosCmb(){
            $c = new Criterio();
            $c->add(PdeOrdenPago::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOrdenPago::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOrdenPago::getPdeOrdenPagosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeOrdenPagoTipoEstados (Coleccion) relacionados a traves de PdeOrdenPago */ 	
	public function getPdeOrdenPagoTipoEstadosXPdeOrdenPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeOrdenPagoTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOrdenPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOrdenPago::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOrdenPagoTipoEstado::GEN_TABLA);
            $c->addRealJoin(PdeOrdenPago::GEN_TABLA, PdeOrdenPago::GEN_ATTR_PDE_ORDEN_PAGO_TIPO_ESTADO_ID, PdeOrdenPagoTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOrdenPagoTipoEstado::getPdeOrdenPagoTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeOrdenPagoTipoEstados relacionados a traves de PdeOrdenPago */ 	
	public function getCantidadPdeOrdenPagoTipoEstadosXPdeOrdenPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeOrdenPagoTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeOrdenPagoTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOrdenPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOrdenPago::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOrdenPagoTipoEstado::GEN_TABLA);
            $c->addRealJoin(PdeOrdenPago::GEN_TABLA, PdeOrdenPago::GEN_ATTR_PDE_ORDEN_PAGO_TIPO_ESTADO_ID, PdeOrdenPagoTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOrdenPagoTipoEstado::getPdeOrdenPagoTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeOrdenPagoTipoEstado (Objeto) relacionado a traves de PdeOrdenPago */ 	
	public function getPdeOrdenPagoTipoEstadoXPdeOrdenPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeOrdenPagoTipoEstadosXPdeOrdenPago($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los GralCentroCostos asignados a PrvProveedor */ 	
	public function getGralCentroCostoPrvProveedorsId(){
            $ids = array();
            foreach($this->getGralCentroCostoPrvProveedors() as $o){
            
                $ids[] = $o->getGralCentroCostoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos GralCentroCostos asignados al PrvProveedor */ 	
	public function setGralCentroCostoPrvProveedors($ids){
            $this->deleteGralCentroCostoPrvProveedors();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new GralCentroCostoPrvProveedor();
                    $o->setGralCentroCostoId($id);
                    $o->setPrvProveedorId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion GralCentroCosto en el alta de PrvProveedor */ 	
	public function getAltaMostrarBloqueRelacionGralCentroCostoPrvProveedor(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los InsInsumos asignados a PrvProveedor */ 	
	public function getInsInsumoPrvProveedorsId(){
            $ids = array();
            foreach($this->getInsInsumoPrvProveedors() as $o){
            
                $ids[] = $o->getInsInsumoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos InsInsumos asignados al PrvProveedor */ 	
	public function setInsInsumoPrvProveedors($ids){
            $this->deleteInsInsumoPrvProveedors();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new InsInsumoPrvProveedor();
                    $o->setInsInsumoId($id);
                    $o->setPrvProveedorId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion InsInsumo en el alta de PrvProveedor */ 	
	public function getAltaMostrarBloqueRelacionInsInsumoPrvProveedor(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los UsUsuarios asignados a PrvProveedor */ 	
	public function getPrvProveedorUsUsuariosId(){
            $ids = array();
            foreach($this->getPrvProveedorUsUsuarios() as $o){
            
                $ids[] = $o->getUsUsuarioId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos UsUsuarios asignados al PrvProveedor */ 	
	public function setPrvProveedorUsUsuarios($ids){
            $this->deletePrvProveedorUsUsuarios();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new PrvProveedorUsUsuario();
                    $o->setUsUsuarioId($id);
                    $o->setPrvProveedorId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion UsUsuario en el alta de PrvProveedor */ 	
	public function getAltaMostrarBloqueRelacionPrvProveedorUsUsuario(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los InsMarcas asignados a PrvProveedor */ 	
	public function getPrvProveedorInsMarcasId(){
            $ids = array();
            foreach($this->getPrvProveedorInsMarcas() as $o){
            
                $ids[] = $o->getInsMarcaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos InsMarcas asignados al PrvProveedor */ 	
	public function setPrvProveedorInsMarcas($ids){
            $this->deletePrvProveedorInsMarcas();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new PrvProveedorInsMarca();
                    $o->setInsMarcaId($id);
                    $o->setPrvProveedorId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion InsMarca en el alta de PrvProveedor */ 	
	public function getAltaMostrarBloqueRelacionPrvProveedorInsMarca(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los PrvRubros asignados a PrvProveedor */ 	
	public function getPrvProveedorPrvRubrosId(){
            $ids = array();
            foreach($this->getPrvProveedorPrvRubros() as $o){
            
                $ids[] = $o->getPrvRubroId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos PrvRubros asignados al PrvProveedor */ 	
	public function setPrvProveedorPrvRubros($ids){
            $this->deletePrvProveedorPrvRubros();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new PrvProveedorPrvRubro();
                    $o->setPrvRubroId($id);
                    $o->setPrvProveedorId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion PrvRubro en el alta de PrvProveedor */ 	
	public function getAltaMostrarBloqueRelacionPrvProveedorPrvRubro(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los PdePedidos asignados a PrvProveedor */ 	
	public function getPdePedidoPrvProveedorsId(){
            $ids = array();
            foreach($this->getPdePedidoPrvProveedors() as $o){
            
                $ids[] = $o->getPdePedidoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos PdePedidos asignados al PrvProveedor */ 	
	public function setPdePedidoPrvProveedors($ids){
            $this->deletePdePedidoPrvProveedors();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new PdePedidoPrvProveedor();
                    $o->setPdePedidoId($id);
                    $o->setPrvProveedorId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion PdePedido en el alta de PrvProveedor */ 	
	public function getAltaMostrarBloqueRelacionPdePedidoPrvProveedor(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los PdeCentroPedidos asignados a PrvProveedor */ 	
	public function getPdeCentroPedidoPrvProveedorsId(){
            $ids = array();
            foreach($this->getPdeCentroPedidoPrvProveedors() as $o){
            
                $ids[] = $o->getPdeCentroPedidoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos PdeCentroPedidos asignados al PrvProveedor */ 	
	public function setPdeCentroPedidoPrvProveedors($ids){
            $this->deletePdeCentroPedidoPrvProveedors();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new PdeCentroPedidoPrvProveedor();
                    $o->setPdeCentroPedidoId($id);
                    $o->setPrvProveedorId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion PdeCentroPedido en el alta de PrvProveedor */ 	
	public function getAltaMostrarBloqueRelacionPdeCentroPedidoPrvProveedor(){
            return true;
	}
	

	/* Metodo que retorna el PrvTipo (Clave Foranea) */ 	
    public function getPrvTipo(){
        $o = new PrvTipo();
        $o->setId($this->getPrvTipoId());
        return $o;			
    }

	/* Metodo que retorna el PrvTipo (Clave Foranea) en Array */ 	
    public function getPrvTipoEnArray(&$arr_os){
        if($this->getPrvTipoId() != 'null'){
            if(isset($arr_os[$this->getPrvTipoId()])){
                $o = $arr_os[$this->getPrvTipoId()];
            }else{
                $o = PrvTipo::getOxId($this->getPrvTipoId());
                if($o){
                    $arr_os[$this->getPrvTipoId()] = $o;
                }
            }
        }else{
            $o = new PrvTipo();
        }
        return $o;		
    }

	/* Metodo que retorna el GralTipoPersoneria (Clave Foranea) */ 	
    public function getGralTipoPersoneria(){
        $o = new GralTipoPersoneria();
        $o->setId($this->getGralTipoPersoneriaId());
        return $o;			
    }

	/* Metodo que retorna el GralTipoPersoneria (Clave Foranea) en Array */ 	
    public function getGralTipoPersoneriaEnArray(&$arr_os){
        if($this->getGralTipoPersoneriaId() != 'null'){
            if(isset($arr_os[$this->getGralTipoPersoneriaId()])){
                $o = $arr_os[$this->getGralTipoPersoneriaId()];
            }else{
                $o = GralTipoPersoneria::getOxId($this->getGralTipoPersoneriaId());
                if($o){
                    $arr_os[$this->getGralTipoPersoneriaId()] = $o;
                }
            }
        }else{
            $o = new GralTipoPersoneria();
        }
        return $o;		
    }

	/* Metodo que retorna el GralCondicionIva (Clave Foranea) */ 	
    public function getGralCondicionIva(){
        $o = new GralCondicionIva();
        $o->setId($this->getGralCondicionIvaId());
        return $o;			
    }

	/* Metodo que retorna el GralCondicionIva (Clave Foranea) en Array */ 	
    public function getGralCondicionIvaEnArray(&$arr_os){
        if($this->getGralCondicionIvaId() != 'null'){
            if(isset($arr_os[$this->getGralCondicionIvaId()])){
                $o = $arr_os[$this->getGralCondicionIvaId()];
            }else{
                $o = GralCondicionIva::getOxId($this->getGralCondicionIvaId());
                if($o){
                    $arr_os[$this->getGralCondicionIvaId()] = $o;
                }
            }
        }else{
            $o = new GralCondicionIva();
        }
        return $o;		
    }

	/* Metodo que retorna el GeoLocalidad (Clave Foranea) */ 	
    public function getGeoLocalidad(){
        $o = new GeoLocalidad();
        $o->setId($this->getGeoLocalidadId());
        return $o;			
    }

	/* Metodo que retorna el GeoLocalidad (Clave Foranea) en Array */ 	
    public function getGeoLocalidadEnArray(&$arr_os){
        if($this->getGeoLocalidadId() != 'null'){
            if(isset($arr_os[$this->getGeoLocalidadId()])){
                $o = $arr_os[$this->getGeoLocalidadId()];
            }else{
                $o = GeoLocalidad::getOxId($this->getGeoLocalidadId());
                if($o){
                    $arr_os[$this->getGeoLocalidadId()] = $o;
                }
            }
        }else{
            $o = new GeoLocalidad();
        }
        return $o;		
    }

	/* Metodo que retorna el PrvGrupo (Clave Foranea) */ 	
    public function getPrvGrupo(){
        $o = new PrvGrupo();
        $o->setId($this->getPrvGrupoId());
        return $o;			
    }

	/* Metodo que retorna el PrvGrupo (Clave Foranea) en Array */ 	
    public function getPrvGrupoEnArray(&$arr_os){
        if($this->getPrvGrupoId() != 'null'){
            if(isset($arr_os[$this->getPrvGrupoId()])){
                $o = $arr_os[$this->getPrvGrupoId()];
            }else{
                $o = PrvGrupo::getOxId($this->getPrvGrupoId());
                if($o){
                    $arr_os[$this->getPrvGrupoId()] = $o;
                }
            }
        }else{
            $o = new PrvGrupo();
        }
        return $o;		
    }

	/* Metodo que retorna el PrvCategoria (Clave Foranea) */ 	
    public function getPrvCategoria(){
        $o = new PrvCategoria();
        $o->setId($this->getPrvCategoriaId());
        return $o;			
    }

	/* Metodo que retorna el PrvCategoria (Clave Foranea) en Array */ 	
    public function getPrvCategoriaEnArray(&$arr_os){
        if($this->getPrvCategoriaId() != 'null'){
            if(isset($arr_os[$this->getPrvCategoriaId()])){
                $o = $arr_os[$this->getPrvCategoriaId()];
            }else{
                $o = PrvCategoria::getOxId($this->getPrvCategoriaId());
                if($o){
                    $arr_os[$this->getPrvCategoriaId()] = $o;
                }
            }
        }else{
            $o = new PrvCategoria();
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
            		
        if($contexto_solicitante != PrvTipo::GEN_CLASE){
            if($this->getPrvTipo()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PrvTipo::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPrvTipo()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralTipoPersoneria::GEN_CLASE){
            if($this->getGralTipoPersoneria()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralTipoPersoneria::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralTipoPersoneria()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralCondicionIva::GEN_CLASE){
            if($this->getGralCondicionIva()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralCondicionIva::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralCondicionIva()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GeoLocalidad::GEN_CLASE){
            if($this->getGeoLocalidad()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GeoLocalidad::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGeoLocalidad()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PrvGrupo::GEN_CLASE){
            if($this->getPrvGrupo()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PrvGrupo::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPrvGrupo()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PrvCategoria::GEN_CLASE){
            if($this->getPrvCategoria()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PrvCategoria::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPrvCategoria()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM prv_proveedor'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'prv_proveedor';");
            
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

            $obs = self::getPrvProveedors($paginador, $criterio);
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

            $obs = self::getPrvProveedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvProveedors($paginador, $criterio);
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

            $obs = self::getPrvProveedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prv_tipo_id' */ 	
	static function getOxPrvTipoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_TIPO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvProveedors($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'prv_tipo_id' */ 	
	static function getOsxPrvTipoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_TIPO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvProveedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_tipo_personeria_id' */ 	
	static function getOxGralTipoPersoneriaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvProveedors($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_tipo_personeria_id' */ 	
	static function getOsxGralTipoPersoneriaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvProveedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_condicion_iva_id' */ 	
	static function getOxGralCondicionIvaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_CONDICION_IVA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvProveedors($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_condicion_iva_id' */ 	
	static function getOsxGralCondicionIvaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_CONDICION_IVA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvProveedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'geo_localidad_id' */ 	
	static function getOxGeoLocalidadId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GEO_LOCALIDAD_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvProveedors($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'geo_localidad_id' */ 	
	static function getOsxGeoLocalidadId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GEO_LOCALIDAD_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvProveedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'razon_social' */ 	
	static function getOxRazonSocial($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_RAZON_SOCIAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvProveedors($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'razon_social' */ 	
	static function getOsxRazonSocial($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_RAZON_SOCIAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvProveedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cuit' */ 	
	static function getOxCuit($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUIT, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvProveedors($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cuit' */ 	
	static function getOsxCuit($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUIT, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvProveedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'domicilio_legal' */ 	
	static function getOxDomicilioLegal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DOMICILIO_LEGAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvProveedors($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'domicilio_legal' */ 	
	static function getOsxDomicilioLegal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DOMICILIO_LEGAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvProveedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo_postal' */ 	
	static function getOxCodigoPostal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_POSTAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvProveedors($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'codigo_postal' */ 	
	static function getOsxCodigoPostal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_POSTAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvProveedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'telefono' */ 	
	static function getOxTelefono($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_TELEFONO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvProveedors($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'telefono' */ 	
	static function getOsxTelefono($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_TELEFONO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvProveedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'email' */ 	
	static function getOxEmail($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EMAIL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvProveedors($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'email' */ 	
	static function getOsxEmail($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EMAIL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvProveedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvProveedors($paginador, $criterio);
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

            $obs = self::getPrvProveedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo_min' */ 	
	static function getOxCodigoMin($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_MIN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvProveedors($paginador, $criterio);
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

            $obs = self::getPrvProveedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prv_grupo_id' */ 	
	static function getOxPrvGrupoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_GRUPO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvProveedors($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'prv_grupo_id' */ 	
	static function getOsxPrvGrupoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_GRUPO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvProveedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prv_categoria_id' */ 	
	static function getOxPrvCategoriaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_CATEGORIA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvProveedors($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'prv_categoria_id' */ 	
	static function getOsxPrvCategoriaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_CATEGORIA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvProveedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'convenio_multilateral' */ 	
	static function getOxConvenioMultilateral($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CONVENIO_MULTILATERAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvProveedors($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'convenio_multilateral' */ 	
	static function getOsxConvenioMultilateral($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CONVENIO_MULTILATERAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvProveedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'iva_incluido' */ 	
	static function getOxIvaIncluido($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IVA_INCLUIDO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvProveedors($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'iva_incluido' */ 	
	static function getOsxIvaIncluido($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IVA_INCLUIDO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvProveedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'puntaje_promedio' */ 	
	static function getOxPuntajePromedio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PUNTAJE_PROMEDIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvProveedors($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'puntaje_promedio' */ 	
	static function getOsxPuntajePromedio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PUNTAJE_PROMEDIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvProveedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvProveedors($paginador, $criterio);
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

            $obs = self::getPrvProveedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'datos_migracion' */ 	
	static function getOxDatosMigracion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DATOS_MIGRACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvProveedors($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'datos_migracion' */ 	
	static function getOsxDatosMigracion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DATOS_MIGRACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvProveedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'claves' */ 	
	static function getOxClaves($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLAVES, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvProveedors($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'claves' */ 	
	static function getOsxClaves($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLAVES, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvProveedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvProveedors($paginador, $criterio);
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

            $obs = self::getPrvProveedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvProveedors($paginador, $criterio);
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

            $obs = self::getPrvProveedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvProveedors($paginador, $criterio);
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

            $obs = self::getPrvProveedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvProveedors($paginador, $criterio);
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

            $obs = self::getPrvProveedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvProveedors($paginador, $criterio);
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

            $obs = self::getPrvProveedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvProveedors($paginador, $criterio);
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

            $obs = self::getPrvProveedors(null, $criterio);
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

            $obs = self::getPrvProveedors($paginador, $criterio);
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

            $obs = self::getPrvProveedors($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'prv_proveedor_adm');
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

	/* retorna coleccion para mostrar en bloque vinculos 'modificado_por' */ 	
	public function getPrvPreventistasParaBloqueVinculo($palabra, $pagina){
            $c = new Criterio();

            $c->addInicioSubconsulta();
            $c->add(PrvPreventista::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL, false, '');
            $c->addFinSubconsulta();

            $c->addInicioSubconsulta();
            $c->add(PrvPreventista::GEN_ATTR_ID, '%'.$palabra.'%', Criterio::LIKE);
            
                $c->add(PrvPreventista::GEN_ATTR_DESCRIPCION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(PrvPreventista::GEN_ATTR_APELLIDO, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(PrvPreventista::GEN_ATTR_NOMBRE, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(PrvPreventista::GEN_ATTR_CODIGO, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(PrvPreventista::GEN_ATTR_OBSERVACION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
            $c->addFinSubconsulta();

            $c->addTabla(PrvPreventista::GEN_TABLA);
            $c->addOrden('2');
            $c->setCriterios();

            $paginador = new Paginador(50, $pagina);

            $prv_preventistas = PrvPreventista::getPrvPreventistas($paginador, $c);

            $arr['COLECCION'] = $prv_preventistas;
            $arr['PAGINADOR'] = $paginador;
            return $arr;
	}

	/* retorna coleccion para mostrar en bloque vinculos 'modificado_por' */ 	
	public function getPrvConvenioDescuentosParaBloqueVinculo($palabra, $pagina){
            $c = new Criterio();

            $c->addInicioSubconsulta();
            $c->add(PrvConvenioDescuento::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL, false, '');
            $c->addFinSubconsulta();

            $c->addInicioSubconsulta();
            $c->add(PrvConvenioDescuento::GEN_ATTR_ID, '%'.$palabra.'%', Criterio::LIKE);
            
                $c->add(PrvConvenioDescuento::GEN_ATTR_DESCRIPCION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(PrvConvenioDescuento::GEN_ATTR_CODIGO, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(PrvConvenioDescuento::GEN_ATTR_OBSERVACION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
            $c->addFinSubconsulta();

            $c->addTabla(PrvConvenioDescuento::GEN_TABLA);
            $c->addOrden('2');
            $c->setCriterios();

            $paginador = new Paginador(50, $pagina);

            $prv_convenio_descuentos = PrvConvenioDescuento::getPrvConvenioDescuentos($paginador, $c);

            $arr['COLECCION'] = $prv_convenio_descuentos;
            $arr['PAGINADOR'] = $paginador;
            return $arr;
	}

	/* retorna coleccion para mostrar en bloque vinculos 'modificado_por' */ 	
	public function getPrvDescuentoFinancierosParaBloqueVinculo($palabra, $pagina){
            $c = new Criterio();

            $c->addInicioSubconsulta();
            $c->add(PrvDescuentoFinanciero::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL, false, '');
            $c->addFinSubconsulta();

            $c->addInicioSubconsulta();
            $c->add(PrvDescuentoFinanciero::GEN_ATTR_ID, '%'.$palabra.'%', Criterio::LIKE);
            
                $c->add(PrvDescuentoFinanciero::GEN_ATTR_DESCRIPCION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(PrvDescuentoFinanciero::GEN_ATTR_CODIGO, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(PrvDescuentoFinanciero::GEN_ATTR_OBSERVACION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
            $c->addFinSubconsulta();

            $c->addTabla(PrvDescuentoFinanciero::GEN_TABLA);
            $c->addOrden('2');
            $c->setCriterios();

            $paginador = new Paginador(50, $pagina);

            $prv_descuento_financieros = PrvDescuentoFinanciero::getPrvDescuentoFinancieros($paginador, $c);

            $arr['COLECCION'] = $prv_descuento_financieros;
            $arr['PAGINADOR'] = $paginador;
            return $arr;
	}

	/* retorna coleccion para mostrar en bloque vinculos 'modificado_por' */ 	
	public function getPrvDescuentoComercialsParaBloqueVinculo($palabra, $pagina){
            $c = new Criterio();

            $c->addInicioSubconsulta();
            $c->add(PrvDescuentoComercial::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL, false, '');
            $c->addFinSubconsulta();

            $c->addInicioSubconsulta();
            $c->add(PrvDescuentoComercial::GEN_ATTR_ID, '%'.$palabra.'%', Criterio::LIKE);
            
                $c->add(PrvDescuentoComercial::GEN_ATTR_DESCRIPCION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(PrvDescuentoComercial::GEN_ATTR_CODIGO, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(PrvDescuentoComercial::GEN_ATTR_OBSERVACION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
            $c->addFinSubconsulta();

            $c->addTabla(PrvDescuentoComercial::GEN_TABLA);
            $c->addOrden('2');
            $c->setCriterios();

            $paginador = new Paginador(50, $pagina);

            $prv_descuento_comercials = PrvDescuentoComercial::getPrvDescuentoComercials($paginador, $c);

            $arr['COLECCION'] = $prv_descuento_comercials;
            $arr['PAGINADOR'] = $paginador;
            return $arr;
	}

	/* retorna coleccion para mostrar en bloque vinculos 'modificado_por' */ 	
	public function getPrvTelefonosParaBloqueVinculo($palabra, $pagina){
            $c = new Criterio();

            $c->addInicioSubconsulta();
            $c->add(PrvTelefono::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL, false, '');
            $c->addFinSubconsulta();

            $c->addInicioSubconsulta();
            $c->add(PrvTelefono::GEN_ATTR_ID, '%'.$palabra.'%', Criterio::LIKE);
            
                $c->add(PrvTelefono::GEN_ATTR_DESCRIPCION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(PrvTelefono::GEN_ATTR_CODIGO, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(PrvTelefono::GEN_ATTR_OBSERVACION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
            $c->addFinSubconsulta();

            $c->addTabla(PrvTelefono::GEN_TABLA);
            $c->addOrden('2');
            $c->setCriterios();

            $paginador = new Paginador(50, $pagina);

            $prv_telefonos = PrvTelefono::getPrvTelefonos($paginador, $c);

            $arr['COLECCION'] = $prv_telefonos;
            $arr['PAGINADOR'] = $paginador;
            return $arr;
	}

	/* retorna coleccion para mostrar en bloque vinculos 'modificado_por' */ 	
	public function getPrvEmailsParaBloqueVinculo($palabra, $pagina){
            $c = new Criterio();

            $c->addInicioSubconsulta();
            $c->add(PrvEmail::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL, false, '');
            $c->addFinSubconsulta();

            $c->addInicioSubconsulta();
            $c->add(PrvEmail::GEN_ATTR_ID, '%'.$palabra.'%', Criterio::LIKE);
            
                $c->add(PrvEmail::GEN_ATTR_DESCRIPCION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(PrvEmail::GEN_ATTR_CODIGO, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(PrvEmail::GEN_ATTR_OBSERVACION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
            $c->addFinSubconsulta();

            $c->addTabla(PrvEmail::GEN_TABLA);
            $c->addOrden('2');
            $c->setCriterios();

            $paginador = new Paginador(50, $pagina);

            $prv_emails = PrvEmail::getPrvEmails($paginador, $c);

            $arr['COLECCION'] = $prv_emails;
            $arr['PAGINADOR'] = $paginador;
            return $arr;
	}

	/* retorna coleccion para mostrar en bloque vinculos 'modificado_por' */ 	
	public function getPrvDomiciliosParaBloqueVinculo($palabra, $pagina){
            $c = new Criterio();

            $c->addInicioSubconsulta();
            $c->add(PrvDomicilio::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL, false, '');
            $c->addFinSubconsulta();

            $c->addInicioSubconsulta();
            $c->add(PrvDomicilio::GEN_ATTR_ID, '%'.$palabra.'%', Criterio::LIKE);
            
                $c->add(PrvDomicilio::GEN_ATTR_DESCRIPCION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(PrvDomicilio::GEN_ATTR_CODIGO, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(PrvDomicilio::GEN_ATTR_OBSERVACION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
            $c->addFinSubconsulta();

            $c->addTabla(PrvDomicilio::GEN_TABLA);
            $c->addOrden('2');
            $c->setCriterios();

            $paginador = new Paginador(50, $pagina);

            $prv_domicilios = PrvDomicilio::getPrvDomicilios($paginador, $c);

            $arr['COLECCION'] = $prv_domicilios;
            $arr['PAGINADOR'] = $paginador;
            return $arr;
	}

	/* retorna coleccion para mostrar en bloque vinculos 'modificado_por' */ 	
	public function getPdeTributoExencionsParaBloqueVinculo($palabra, $pagina){
            $c = new Criterio();

            $c->addInicioSubconsulta();
            $c->add(PdeTributoExencion::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL, false, '');
            $c->addFinSubconsulta();

            $c->addInicioSubconsulta();
            $c->add(PdeTributoExencion::GEN_ATTR_ID, '%'.$palabra.'%', Criterio::LIKE);
            
                $c->add(PdeTributoExencion::GEN_ATTR_DESCRIPCION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(PdeTributoExencion::GEN_ATTR_CODIGO, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(PdeTributoExencion::GEN_ATTR_OBSERVACION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
            $c->addFinSubconsulta();

            $c->addTabla(PdeTributoExencion::GEN_TABLA);
            $c->addOrden('2');
            $c->setCriterios();

            $paginador = new Paginador(50, $pagina);

            $pde_tributo_exencions = PdeTributoExencion::getPdeTributoExencions($paginador, $c);

            $arr['COLECCION'] = $pde_tributo_exencions;
            $arr['PAGINADOR'] = $paginador;
            return $arr;
	}
	
            /**
             * Metodo que retorna una coleccion de descripciones unificada para usar en autosuggest
             */
            static function getArrDescripcionsUnificado(){
                $c = new Criterio();
                $c->addTabla(PrvProveedor::GEN_TABLA);
                $c->addOrden(PrvProveedor::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $prv_proveedors = PrvProveedor::getPrvProveedors(null, $c);

                $arr = array();
                foreach($prv_proveedors as $prv_proveedor){
                    $descripcion = $prv_proveedor->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>