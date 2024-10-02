<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BPerPersona
{ 
	
	const SES_PAGINACION = 'adm_perpersona_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_perpersona_paginas_registros';
	const SES_CRITERIOS = 'adm_perpersona_criterios';
	
	const GEN_CLASE = 'PerPersona';
	const GEN_TABLA = 'per_persona';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BPerPersona */ 
	const GEN_ATTR_ID = 'per_persona.id';
	const GEN_ATTR_LEGAJO = 'per_persona.legajo';
	const GEN_ATTR_DESCRIPCION = 'per_persona.descripcion';
	const GEN_ATTR_GRAL_EMPRESA_ID = 'per_persona.gral_empresa_id';
	const GEN_ATTR_GRAL_SUCURSAL_ID = 'per_persona.gral_sucursal_id';
	const GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID = 'per_persona.gral_tipo_documento_id';
	const GEN_ATTR_DOCUMENTO = 'per_persona.documento';
	const GEN_ATTR_APELLIDO = 'per_persona.apellido';
	const GEN_ATTR_NOMBRE = 'per_persona.nombre';
	const GEN_ATTR_CUIL = 'per_persona.cuil';
	const GEN_ATTR_NACIMIENTO = 'per_persona.nacimiento';
	const GEN_ATTR_GRAL_SEXO_ID = 'per_persona.gral_sexo_id';
	const GEN_ATTR_GEO_LOCALIDAD_ID = 'per_persona.geo_localidad_id';
	const GEN_ATTR_CODIGO_POSTAL = 'per_persona.codigo_postal';
	const GEN_ATTR_FECHA_ALTA = 'per_persona.fecha_alta';
	const GEN_ATTR_FECHA_BAJA = 'per_persona.fecha_baja';
	const GEN_ATTR_NACIONALIDAD = 'per_persona.nacionalidad';
	const GEN_ATTR_CODIGO = 'per_persona.codigo';
	const GEN_ATTR_CODIGO_CREDENCIAL = 'per_persona.codigo_credencial';
	const GEN_ATTR_HASH = 'per_persona.hash';
	const GEN_ATTR_PER_TIPO_ESTADO_ID = 'per_persona.per_tipo_estado_id';
	const GEN_ATTR_CONTROL_HORARIO = 'per_persona.control_horario';
	const GEN_ATTR_OBSERVACION = 'per_persona.observacion';
	const GEN_ATTR_ORDEN = 'per_persona.orden';
	const GEN_ATTR_ESTADO = 'per_persona.estado';
	const GEN_ATTR_CREADO = 'per_persona.creado';
	const GEN_ATTR_CREADO_POR = 'per_persona.creado_por';
	const GEN_ATTR_MODIFICADO = 'per_persona.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'per_persona.modificado_por';

	/* Constantes de Atributos Min de BPerPersona */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_LEGAJO = 'legajo';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_GRAL_EMPRESA_ID = 'gral_empresa_id';
	const GEN_ATTR_MIN_GRAL_SUCURSAL_ID = 'gral_sucursal_id';
	const GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID = 'gral_tipo_documento_id';
	const GEN_ATTR_MIN_DOCUMENTO = 'documento';
	const GEN_ATTR_MIN_APELLIDO = 'apellido';
	const GEN_ATTR_MIN_NOMBRE = 'nombre';
	const GEN_ATTR_MIN_CUIL = 'cuil';
	const GEN_ATTR_MIN_NACIMIENTO = 'nacimiento';
	const GEN_ATTR_MIN_GRAL_SEXO_ID = 'gral_sexo_id';
	const GEN_ATTR_MIN_GEO_LOCALIDAD_ID = 'geo_localidad_id';
	const GEN_ATTR_MIN_CODIGO_POSTAL = 'codigo_postal';
	const GEN_ATTR_MIN_FECHA_ALTA = 'fecha_alta';
	const GEN_ATTR_MIN_FECHA_BAJA = 'fecha_baja';
	const GEN_ATTR_MIN_NACIONALIDAD = 'nacionalidad';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_CODIGO_CREDENCIAL = 'codigo_credencial';
	const GEN_ATTR_MIN_HASH = 'hash';
	const GEN_ATTR_MIN_PER_TIPO_ESTADO_ID = 'per_tipo_estado_id';
	const GEN_ATTR_MIN_CONTROL_HORARIO = 'control_horario';
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
	

	/* Atributos de BPerPersona */ 
	private $id;
	private $legajo;
	private $descripcion;
	private $gral_empresa_id;
	private $gral_sucursal_id;
	private $gral_tipo_documento_id;
	private $documento;
	private $apellido;
	private $nombre;
	private $cuil;
	private $nacimiento;
	private $gral_sexo_id;
	private $geo_localidad_id;
	private $codigo_postal;
	private $fecha_alta;
	private $fecha_baja;
	private $nacionalidad;
	private $codigo;
	private $codigo_credencial;
	private $hash;
	private $per_tipo_estado_id;
	private $control_horario;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BPerPersona */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getLegajo(){ if(isset($this->legajo)){ return $this->legajo; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getGralEmpresaId(){ if(isset($this->gral_empresa_id)){ return $this->gral_empresa_id; }else{ return 'null'; } }
	public function getGralSucursalId(){ if(isset($this->gral_sucursal_id)){ return $this->gral_sucursal_id; }else{ return 'null'; } }
	public function getGralTipoDocumentoId(){ if(isset($this->gral_tipo_documento_id)){ return $this->gral_tipo_documento_id; }else{ return 'null'; } }
	public function getDocumento(){ if(isset($this->documento)){ return $this->documento; }else{ return ''; } }
	public function getApellido(){ if(isset($this->apellido)){ return $this->apellido; }else{ return ''; } }
	public function getNombre(){ if(isset($this->nombre)){ return $this->nombre; }else{ return ''; } }
	public function getCuil(){ if(isset($this->cuil)){ return $this->cuil; }else{ return ''; } }
	public function getNacimiento(){ if(isset($this->nacimiento)){ return $this->nacimiento; }else{ return ''; } }
	public function getGralSexoId(){ if(isset($this->gral_sexo_id)){ return $this->gral_sexo_id; }else{ return 'null'; } }
	public function getGeoLocalidadId(){ if(isset($this->geo_localidad_id)){ return $this->geo_localidad_id; }else{ return 'null'; } }
	public function getCodigoPostal(){ if(isset($this->codigo_postal)){ return $this->codigo_postal; }else{ return ''; } }
	public function getFechaAlta(){ if(isset($this->fecha_alta)){ return $this->fecha_alta; }else{ return ''; } }
	public function getFechaBaja(){ if(isset($this->fecha_baja)){ return $this->fecha_baja; }else{ return ''; } }
	public function getNacionalidad(){ if(isset($this->nacionalidad)){ return $this->nacionalidad; }else{ return 'null'; } }
	public function getNacionalidadObj(){ if(isset($this->nacionalidad)){ return GeoPais::getOxId($this->nacionalidad); }else{ return new GeoPais(); } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getCodigoCredencial(){ if(isset($this->codigo_credencial)){ return $this->codigo_credencial; }else{ return ''; } }
	public function getHash(){ if(isset($this->hash)){ return $this->hash; }else{ return ''; } }
	public function getPerTipoEstadoId(){ if(isset($this->per_tipo_estado_id)){ return $this->per_tipo_estado_id; }else{ return 'null'; } }
	public function getControlHorario(){ if(isset($this->control_horario)){ return $this->control_horario; }else{ return 0; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BPerPersona */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_LEGAJO."
				, ".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_GRAL_EMPRESA_ID."
				, ".self::GEN_ATTR_GRAL_SUCURSAL_ID."
				, ".self::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID."
				, ".self::GEN_ATTR_DOCUMENTO."
				, ".self::GEN_ATTR_APELLIDO."
				, ".self::GEN_ATTR_NOMBRE."
				, ".self::GEN_ATTR_CUIL."
				, ".self::GEN_ATTR_NACIMIENTO."
				, ".self::GEN_ATTR_GRAL_SEXO_ID."
				, ".self::GEN_ATTR_GEO_LOCALIDAD_ID."
				, ".self::GEN_ATTR_CODIGO_POSTAL."
				, ".self::GEN_ATTR_FECHA_ALTA."
				, ".self::GEN_ATTR_FECHA_BAJA."
				, ".self::GEN_ATTR_NACIONALIDAD."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_CODIGO_CREDENCIAL."
				, ".self::GEN_ATTR_HASH."
				, ".self::GEN_ATTR_PER_TIPO_ESTADO_ID."
				, ".self::GEN_ATTR_CONTROL_HORARIO."
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
                    				$this->setLegajo($fila[self::GEN_ATTR_MIN_LEGAJO]);
				$this->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
				$this->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
				$this->setGralSucursalId($fila[self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID]);
				$this->setGralTipoDocumentoId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID]);
				$this->setDocumento($fila[self::GEN_ATTR_MIN_DOCUMENTO]);
				$this->setApellido($fila[self::GEN_ATTR_MIN_APELLIDO]);
				$this->setNombre($fila[self::GEN_ATTR_MIN_NOMBRE]);
				$this->setCuil($fila[self::GEN_ATTR_MIN_CUIL]);
				$this->setNacimiento($fila[self::GEN_ATTR_MIN_NACIMIENTO]);
				$this->setGralSexoId($fila[self::GEN_ATTR_MIN_GRAL_SEXO_ID]);
				$this->setGeoLocalidadId($fila[self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID]);
				$this->setCodigoPostal($fila[self::GEN_ATTR_MIN_CODIGO_POSTAL]);
				$this->setFechaAlta($fila[self::GEN_ATTR_MIN_FECHA_ALTA]);
				$this->setFechaBaja($fila[self::GEN_ATTR_MIN_FECHA_BAJA]);
				$this->setNacionalidad($fila[self::GEN_ATTR_MIN_NACIONALIDAD]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setCodigoCredencial($fila[self::GEN_ATTR_MIN_CODIGO_CREDENCIAL]);
				$this->setHash($fila[self::GEN_ATTR_MIN_HASH]);
				$this->setPerTipoEstadoId($fila[self::GEN_ATTR_MIN_PER_TIPO_ESTADO_ID]);
				$this->setControlHorario($fila[self::GEN_ATTR_MIN_CONTROL_HORARIO]);
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
	public function setLegajo($v){ $this->legajo = $v; }
	public function setDescripcion($v){ $this->descripcion = $v; }
	public function setGralEmpresaId($v){ $this->gral_empresa_id = $v; }
	public function setGralSucursalId($v){ $this->gral_sucursal_id = $v; }
	public function setGralTipoDocumentoId($v){ $this->gral_tipo_documento_id = $v; }
	public function setDocumento($v){ $this->documento = $v; }
	public function setApellido($v){ $this->apellido = $v; }
	public function setNombre($v){ $this->nombre = $v; }
	public function setCuil($v){ $this->cuil = $v; }
	public function setNacimiento($v){ $this->nacimiento = $v; }
	public function setGralSexoId($v){ $this->gral_sexo_id = $v; }
	public function setGeoLocalidadId($v){ $this->geo_localidad_id = $v; }
	public function setCodigoPostal($v){ $this->codigo_postal = $v; }
	public function setFechaAlta($v){ $this->fecha_alta = $v; }
	public function setFechaBaja($v){ $this->fecha_baja = $v; }
	public function setNacionalidad($v){ $this->nacionalidad = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setCodigoCredencial($v){ $this->codigo_credencial = $v; }
	public function setHash($v){ $this->hash = $v; }
	public function setPerTipoEstadoId($v){ $this->per_tipo_estado_id = $v; }
	public function setControlHorario($v){ $this->control_horario = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new PerPersona();
            $o->setId($fila[PerPersona::GEN_ATTR_MIN_ID], false);
            
			$o->setLegajo($fila[self::GEN_ATTR_MIN_LEGAJO]);
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
			$o->setGralSucursalId($fila[self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID]);
			$o->setGralTipoDocumentoId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID]);
			$o->setDocumento($fila[self::GEN_ATTR_MIN_DOCUMENTO]);
			$o->setApellido($fila[self::GEN_ATTR_MIN_APELLIDO]);
			$o->setNombre($fila[self::GEN_ATTR_MIN_NOMBRE]);
			$o->setCuil($fila[self::GEN_ATTR_MIN_CUIL]);
			$o->setNacimiento($fila[self::GEN_ATTR_MIN_NACIMIENTO]);
			$o->setGralSexoId($fila[self::GEN_ATTR_MIN_GRAL_SEXO_ID]);
			$o->setGeoLocalidadId($fila[self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID]);
			$o->setCodigoPostal($fila[self::GEN_ATTR_MIN_CODIGO_POSTAL]);
			$o->setFechaAlta($fila[self::GEN_ATTR_MIN_FECHA_ALTA]);
			$o->setFechaBaja($fila[self::GEN_ATTR_MIN_FECHA_BAJA]);
			$o->setNacionalidad($fila[self::GEN_ATTR_MIN_NACIONALIDAD]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setCodigoCredencial($fila[self::GEN_ATTR_MIN_CODIGO_CREDENCIAL]);
			$o->setHash($fila[self::GEN_ATTR_MIN_HASH]);
			$o->setPerTipoEstadoId($fila[self::GEN_ATTR_MIN_PER_TIPO_ESTADO_ID]);
			$o->setControlHorario($fila[self::GEN_ATTR_MIN_CONTROL_HORARIO]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BPerPersona */ 	
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

	/* Cambia el estado de BPerPersona */ 	
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

	/* Save de BPerPersona */ 	
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
				 INSERT INTO ".self::GEN_TABLA." (".self::GEN_ATTR_MIN_ID.", ".self::GEN_ATTR_MIN_LEGAJO."
						, ".self::GEN_ATTR_MIN_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID."
						, ".self::GEN_ATTR_MIN_DOCUMENTO."
						, ".self::GEN_ATTR_MIN_APELLIDO."
						, ".self::GEN_ATTR_MIN_NOMBRE."
						, ".self::GEN_ATTR_MIN_CUIL."
						, ".self::GEN_ATTR_MIN_NACIMIENTO."
						, ".self::GEN_ATTR_MIN_GRAL_SEXO_ID."
						, ".self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID."
						, ".self::GEN_ATTR_MIN_CODIGO_POSTAL."
						, ".self::GEN_ATTR_MIN_FECHA_ALTA."
						, ".self::GEN_ATTR_MIN_FECHA_BAJA."
						, ".self::GEN_ATTR_MIN_NACIONALIDAD."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_CODIGO_CREDENCIAL."
						, ".self::GEN_ATTR_MIN_HASH."
						, ".self::GEN_ATTR_MIN_PER_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_CONTROL_HORARIO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('per_persona_seq'), 
                '".$this->getLegajo()."'
						, '".$this->getDescripcion()."'
						, ".$this->getGralEmpresaId()."
						, ".$this->getGralSucursalId()."
						, ".$this->getGralTipoDocumentoId()."
						, '".$this->getDocumento()."'
						, '".$this->getApellido()."'
						, '".$this->getNombre()."'
						, '".$this->getCuil()."'
						, '".$this->getNacimiento()."'
						, ".$this->getGralSexoId()."
						, ".$this->getGeoLocalidadId()."
						, '".$this->getCodigoPostal()."'
						, '".$this->getFechaAlta()."'
						, '".$this->getFechaBaja()."'
						, ".$this->getNacionalidad()."
						, '".$this->getCodigo()."'
						, '".$this->getCodigoCredencial()."'
						, '".$this->getHash()."'
						, ".$this->getPerTipoEstadoId()."
						, ".$this->getControlHorario()."
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('per_persona_seq')";
            
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
                 
				 ".PerPersona::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_LEGAJO." = '".$this->getLegajo()."'
						, ".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID." = ".$this->getGralEmpresaId()."
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID." = ".$this->getGralSucursalId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID." = ".$this->getGralTipoDocumentoId()."
						, ".self::GEN_ATTR_MIN_DOCUMENTO." = '".$this->getDocumento()."'
						, ".self::GEN_ATTR_MIN_APELLIDO." = '".$this->getApellido()."'
						, ".self::GEN_ATTR_MIN_NOMBRE." = '".$this->getNombre()."'
						, ".self::GEN_ATTR_MIN_CUIL." = '".$this->getCuil()."'
						, ".self::GEN_ATTR_MIN_NACIMIENTO." = '".$this->getNacimiento()."'
						, ".self::GEN_ATTR_MIN_GRAL_SEXO_ID." = ".$this->getGralSexoId()."
						, ".self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID." = ".$this->getGeoLocalidadId()."
						, ".self::GEN_ATTR_MIN_CODIGO_POSTAL." = '".$this->getCodigoPostal()."'
						, ".self::GEN_ATTR_MIN_FECHA_ALTA." = '".$this->getFechaAlta()."'
						, ".self::GEN_ATTR_MIN_FECHA_BAJA." = '".$this->getFechaBaja()."'
						, ".self::GEN_ATTR_MIN_NACIONALIDAD." = ".$this->getNacionalidad()."
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_CODIGO_CREDENCIAL." = '".$this->getCodigoCredencial()."'
						, ".self::GEN_ATTR_MIN_HASH." = '".$this->getHash()."'
						, ".self::GEN_ATTR_MIN_PER_TIPO_ESTADO_ID." = ".$this->getPerTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_CONTROL_HORARIO." = ".$this->getControlHorario()."
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
				 INSERT INTO ".self::GEN_TABLA." (".self::GEN_ATTR_MIN_ID.", ".self::GEN_ATTR_MIN_LEGAJO."
						, ".self::GEN_ATTR_MIN_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID."
						, ".self::GEN_ATTR_MIN_DOCUMENTO."
						, ".self::GEN_ATTR_MIN_APELLIDO."
						, ".self::GEN_ATTR_MIN_NOMBRE."
						, ".self::GEN_ATTR_MIN_CUIL."
						, ".self::GEN_ATTR_MIN_NACIMIENTO."
						, ".self::GEN_ATTR_MIN_GRAL_SEXO_ID."
						, ".self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID."
						, ".self::GEN_ATTR_MIN_CODIGO_POSTAL."
						, ".self::GEN_ATTR_MIN_FECHA_ALTA."
						, ".self::GEN_ATTR_MIN_FECHA_BAJA."
						, ".self::GEN_ATTR_MIN_NACIONALIDAD."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_CODIGO_CREDENCIAL."
						, ".self::GEN_ATTR_MIN_HASH."
						, ".self::GEN_ATTR_MIN_PER_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_CONTROL_HORARIO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getLegajo()."'
						, '".$this->getDescripcion()."'
						, ".$this->getGralEmpresaId()."
						, ".$this->getGralSucursalId()."
						, ".$this->getGralTipoDocumentoId()."
						, '".$this->getDocumento()."'
						, '".$this->getApellido()."'
						, '".$this->getNombre()."'
						, '".$this->getCuil()."'
						, '".$this->getNacimiento()."'
						, ".$this->getGralSexoId()."
						, ".$this->getGeoLocalidadId()."
						, '".$this->getCodigoPostal()."'
						, '".$this->getFechaAlta()."'
						, '".$this->getFechaBaja()."'
						, ".$this->getNacionalidad()."
						, '".$this->getCodigo()."'
						, '".$this->getCodigoCredencial()."'
						, '".$this->getHash()."'
						, ".$this->getPerTipoEstadoId()."
						, ".$this->getControlHorario()."
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
                     
				 ".PerPersona::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_LEGAJO." = '".$this->getLegajo()."'
						, ".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID." = ".$this->getGralEmpresaId()."
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID." = ".$this->getGralSucursalId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID." = ".$this->getGralTipoDocumentoId()."
						, ".self::GEN_ATTR_MIN_DOCUMENTO." = '".$this->getDocumento()."'
						, ".self::GEN_ATTR_MIN_APELLIDO." = '".$this->getApellido()."'
						, ".self::GEN_ATTR_MIN_NOMBRE." = '".$this->getNombre()."'
						, ".self::GEN_ATTR_MIN_CUIL." = '".$this->getCuil()."'
						, ".self::GEN_ATTR_MIN_NACIMIENTO." = '".$this->getNacimiento()."'
						, ".self::GEN_ATTR_MIN_GRAL_SEXO_ID." = ".$this->getGralSexoId()."
						, ".self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID." = ".$this->getGeoLocalidadId()."
						, ".self::GEN_ATTR_MIN_CODIGO_POSTAL." = '".$this->getCodigoPostal()."'
						, ".self::GEN_ATTR_MIN_FECHA_ALTA." = '".$this->getFechaAlta()."'
						, ".self::GEN_ATTR_MIN_FECHA_BAJA." = '".$this->getFechaBaja()."'
						, ".self::GEN_ATTR_MIN_NACIONALIDAD." = ".$this->getNacionalidad()."
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_CODIGO_CREDENCIAL." = '".$this->getCodigoCredencial()."'
						, ".self::GEN_ATTR_MIN_HASH." = '".$this->getHash()."'
						, ".self::GEN_ATTR_MIN_PER_TIPO_ESTADO_ID." = ".$this->getPerTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_CONTROL_HORARIO." = ".$this->getControlHorario()."
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
            $o = new PerPersona();
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

	/* Delete de BPerPersona */ 	
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
	
            // se elimina la coleccion de PerPersonaImagens relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PerPersonaImagen::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPerPersonaImagens(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PerPersonaArchivos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PerPersonaArchivo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPerPersonaArchivos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PerEstados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PerEstado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPerEstados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PerPersonaDedos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PerPersonaDedo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPerPersonaDedos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PerPersonaGralSucursals relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PerPersonaGralSucursal::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPerPersonaGralSucursals(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PerPersonaUsUsuarios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PerPersonaUsUsuario::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPerPersonaUsUsuarios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PerMovMovimientos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PerMovMovimiento::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPerMovMovimientos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PerMovPlanificacions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PerMovPlanificacion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPerMovPlanificacions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de OsOrdenServicios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(OsOrdenServicio::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getOsOrdenServicios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de OpeOperarios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(OpeOperario::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getOpeOperarios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarPerPersona(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getPerPersonas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = PerPersona::setAplicarFiltrosDeAlcance($criterio);

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
	
		$perpersonas = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $perpersona = new PerPersona();
                    $perpersona->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $perpersona->setLegajo($fila[self::GEN_ATTR_MIN_LEGAJO]);
			$perpersona->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$perpersona->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
			$perpersona->setGralSucursalId($fila[self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID]);
			$perpersona->setGralTipoDocumentoId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID]);
			$perpersona->setDocumento($fila[self::GEN_ATTR_MIN_DOCUMENTO]);
			$perpersona->setApellido($fila[self::GEN_ATTR_MIN_APELLIDO]);
			$perpersona->setNombre($fila[self::GEN_ATTR_MIN_NOMBRE]);
			$perpersona->setCuil($fila[self::GEN_ATTR_MIN_CUIL]);
			$perpersona->setNacimiento($fila[self::GEN_ATTR_MIN_NACIMIENTO]);
			$perpersona->setGralSexoId($fila[self::GEN_ATTR_MIN_GRAL_SEXO_ID]);
			$perpersona->setGeoLocalidadId($fila[self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID]);
			$perpersona->setCodigoPostal($fila[self::GEN_ATTR_MIN_CODIGO_POSTAL]);
			$perpersona->setFechaAlta($fila[self::GEN_ATTR_MIN_FECHA_ALTA]);
			$perpersona->setFechaBaja($fila[self::GEN_ATTR_MIN_FECHA_BAJA]);
			$perpersona->setNacionalidad($fila[self::GEN_ATTR_MIN_NACIONALIDAD]);
			$perpersona->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$perpersona->setCodigoCredencial($fila[self::GEN_ATTR_MIN_CODIGO_CREDENCIAL]);
			$perpersona->setHash($fila[self::GEN_ATTR_MIN_HASH]);
			$perpersona->setPerTipoEstadoId($fila[self::GEN_ATTR_MIN_PER_TIPO_ESTADO_ID]);
			$perpersona->setControlHorario($fila[self::GEN_ATTR_MIN_CONTROL_HORARIO]);
			$perpersona->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$perpersona->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$perpersona->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$perpersona->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$perpersona->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$perpersona->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$perpersona->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $perpersonas[] = $perpersona;
		}
		
		return $perpersonas;
	}	
	

	/* Método getPerPersonas Habilitados */ 	
	static function getPerPersonasHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return PerPersona::getPerPersonas($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getPerPersonas para listado de Backend */ 	
	static function getPerPersonasDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return PerPersona::getPerPersonas($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getPerPersonasCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = PerPersona::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = PerPersona::getPerPersonas($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPerPersonas filtrado para select */ 	
	static function getPerPersonasCmbF($paginador = null, $criterio = null){
            $col = PerPersona::getPerPersonas($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPerPersonas filtrado por una coleccion de objetos foraneos de GralEmpresa */ 	
	static function getPerPersonasXGralEmpresas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PerPersona::GEN_ATTR_GRAL_EMPRESA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PerPersona::GEN_TABLA);
            $c->addOrden(PerPersona::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PerPersona::getPerPersonas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralEmpresaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPerPersonas filtrado por una coleccion de objetos foraneos de GralSucursal */ 	
	static function getPerPersonasXGralSucursals($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PerPersona::GEN_ATTR_GRAL_SUCURSAL_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PerPersona::GEN_TABLA);
            $c->addOrden(PerPersona::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PerPersona::getPerPersonas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralSucursalId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPerPersonas filtrado por una coleccion de objetos foraneos de GralTipoDocumento */ 	
	static function getPerPersonasXGralTipoDocumentos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PerPersona::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PerPersona::GEN_TABLA);
            $c->addOrden(PerPersona::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PerPersona::getPerPersonas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralTipoDocumentoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPerPersonas filtrado por una coleccion de objetos foraneos de GralSexo */ 	
	static function getPerPersonasXGralSexos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PerPersona::GEN_ATTR_GRAL_SEXO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PerPersona::GEN_TABLA);
            $c->addOrden(PerPersona::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PerPersona::getPerPersonas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralSexoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPerPersonas filtrado por una coleccion de objetos foraneos de GeoLocalidad */ 	
	static function getPerPersonasXGeoLocalidads($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PerPersona::GEN_ATTR_GEO_LOCALIDAD_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PerPersona::GEN_TABLA);
            $c->addOrden(PerPersona::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PerPersona::getPerPersonas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGeoLocalidadId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPerPersonas filtrado por una coleccion de objetos foraneos de PerTipoEstado */ 	
	static function getPerPersonasXPerTipoEstados($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PerPersona::GEN_ATTR_PER_TIPO_ESTADO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PerPersona::GEN_TABLA);
            $c->addOrden(PerPersona::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PerPersona::getPerPersonas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPerTipoEstadoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'per_persona_adm.php';
            $url_gestion = 'per_persona_gestion.php';
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
	

	/* Metodo getPerPersonaImagens */ 	
	public function getPerPersonaImagens($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PerPersonaImagen::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PerPersonaImagen::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PerPersonaImagen::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PerPersonaImagen::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PerPersonaImagen::GEN_ATTR_PER_PERSONA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PerPersonaImagen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PerPersonaImagen::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PerPersonaImagen::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $perpersonaimagens = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $perpersonaimagen = PerPersonaImagen::hidratarObjeto($fila);			
                $perpersonaimagens[] = $perpersonaimagen;
            }

            return $perpersonaimagens;
	}	
	

	/* Método getPerPersonaImagensBloque para MasInfo */ 	
	public function getPerPersonaImagensParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPerPersonaImagens($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPerPersonaImagens Habilitados */ 	
	public function getPerPersonaImagensHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPerPersonaImagens($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPerPersonaImagen */ 	
	public function getPerPersonaImagen($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPerPersonaImagens($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PerPersonaImagen relacionadas */ 	
	public function deletePerPersonaImagens(){
            $obs = $this->getPerPersonaImagens();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPerPersonaImagensCmb() PerPersonaImagen relacionadas */ 	
	public function getPerPersonaImagensCmb(){
            $c = new Criterio();
            $c->add(PerPersonaImagen::GEN_ATTR_PER_PERSONA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PerPersonaImagen::GEN_TABLA);
            $c->setCriterios();

            $os = PerPersonaImagen::getPerPersonaImagensCmbF(null, $c);
            return $os;
	}

	/* Metodo getPerPersonaArchivos */ 	
	public function getPerPersonaArchivos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PerPersonaArchivo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PerPersonaArchivo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PerPersonaArchivo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PerPersonaArchivo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PerPersonaArchivo::GEN_ATTR_PER_PERSONA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PerPersonaArchivo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PerPersonaArchivo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PerPersonaArchivo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $perpersonaarchivos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $perpersonaarchivo = PerPersonaArchivo::hidratarObjeto($fila);			
                $perpersonaarchivos[] = $perpersonaarchivo;
            }

            return $perpersonaarchivos;
	}	
	

	/* Método getPerPersonaArchivosBloque para MasInfo */ 	
	public function getPerPersonaArchivosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPerPersonaArchivos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPerPersonaArchivos Habilitados */ 	
	public function getPerPersonaArchivosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPerPersonaArchivos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPerPersonaArchivo */ 	
	public function getPerPersonaArchivo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPerPersonaArchivos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PerPersonaArchivo relacionadas */ 	
	public function deletePerPersonaArchivos(){
            $obs = $this->getPerPersonaArchivos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPerPersonaArchivosCmb() PerPersonaArchivo relacionadas */ 	
	public function getPerPersonaArchivosCmb(){
            $c = new Criterio();
            $c->add(PerPersonaArchivo::GEN_ATTR_PER_PERSONA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PerPersonaArchivo::GEN_TABLA);
            $c->setCriterios();

            $os = PerPersonaArchivo::getPerPersonaArchivosCmbF(null, $c);
            return $os;
	}

	/* Metodo getPerEstados */ 	
	public function getPerEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PerEstado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PerEstado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PerEstado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PerEstado::GEN_ATTR_PER_PERSONA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PerEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PerEstado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PerEstado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $perestados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $perestado = PerEstado::hidratarObjeto($fila);			
                $perestados[] = $perestado;
            }

            return $perestados;
	}	
	

	/* Método getPerEstadosBloque para MasInfo */ 	
	public function getPerEstadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPerEstados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPerEstados Habilitados */ 	
	public function getPerEstadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPerEstados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPerEstado */ 	
	public function getPerEstado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPerEstados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PerEstado relacionadas */ 	
	public function deletePerEstados(){
            $obs = $this->getPerEstados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPerEstadosCmb() PerEstado relacionadas */ 	
	public function getPerEstadosCmb(){
            $c = new Criterio();
            $c->add(PerEstado::GEN_ATTR_PER_PERSONA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PerEstado::GEN_TABLA);
            $c->setCriterios();

            $os = PerEstado::getPerEstadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PerTipoEstados (Coleccion) relacionados a traves de PerEstado */ 	
	public function getPerTipoEstadosXPerEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PerTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PerEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PerEstado::GEN_ATTR_PER_PERSONA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PerTipoEstado::GEN_TABLA);
            $c->addRealJoin(PerEstado::GEN_TABLA, PerEstado::GEN_ATTR_PER_TIPO_ESTADO_ID, PerTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PerTipoEstado::getPerTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PerTipoEstados relacionados a traves de PerEstado */ 	
	public function getCantidadPerTipoEstadosXPerEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PerTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(PerTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PerEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PerEstado::GEN_ATTR_PER_PERSONA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PerTipoEstado::GEN_TABLA);
            $c->addRealJoin(PerEstado::GEN_TABLA, PerEstado::GEN_ATTR_PER_TIPO_ESTADO_ID, PerTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PerTipoEstado::getPerTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PerTipoEstado (Objeto) relacionado a traves de PerEstado */ 	
	public function getPerTipoEstadoXPerEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPerTipoEstadosXPerEstado($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPerPersonaDedos */ 	
	public function getPerPersonaDedos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PerPersonaDedo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PerPersonaDedo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PerPersonaDedo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PerPersonaDedo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PerPersonaDedo::GEN_ATTR_PER_PERSONA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PerPersonaDedo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PerPersonaDedo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PerPersonaDedo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $perpersonadedos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $perpersonadedo = PerPersonaDedo::hidratarObjeto($fila);			
                $perpersonadedos[] = $perpersonadedo;
            }

            return $perpersonadedos;
	}	
	

	/* Método getPerPersonaDedosBloque para MasInfo */ 	
	public function getPerPersonaDedosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPerPersonaDedos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPerPersonaDedos Habilitados */ 	
	public function getPerPersonaDedosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPerPersonaDedos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPerPersonaDedo */ 	
	public function getPerPersonaDedo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPerPersonaDedos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PerPersonaDedo relacionadas */ 	
	public function deletePerPersonaDedos(){
            $obs = $this->getPerPersonaDedos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPerPersonaDedosCmb() PerPersonaDedo relacionadas */ 	
	public function getPerPersonaDedosCmb(){
            $c = new Criterio();
            $c->add(PerPersonaDedo::GEN_ATTR_PER_PERSONA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PerPersonaDedo::GEN_TABLA);
            $c->setCriterios();

            $os = PerPersonaDedo::getPerPersonaDedosCmbF(null, $c);
            return $os;
	}

	/* Metodo getPerPersonaGralSucursals */ 	
	public function getPerPersonaGralSucursals($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PerPersonaGralSucursal::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PerPersonaGralSucursal::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PerPersonaGralSucursal::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PerPersonaGralSucursal::GEN_ATTR_PER_PERSONA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PerPersonaGralSucursal::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PerPersonaGralSucursal::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PerPersonaGralSucursal::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $perpersonagralsucursals = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $perpersonagralsucursal = PerPersonaGralSucursal::hidratarObjeto($fila);			
                $perpersonagralsucursals[] = $perpersonagralsucursal;
            }

            return $perpersonagralsucursals;
	}	
	

	/* Método getPerPersonaGralSucursalsBloque para MasInfo */ 	
	public function getPerPersonaGralSucursalsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPerPersonaGralSucursals($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPerPersonaGralSucursals Habilitados */ 	
	public function getPerPersonaGralSucursalsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPerPersonaGralSucursals($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPerPersonaGralSucursal */ 	
	public function getPerPersonaGralSucursal($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPerPersonaGralSucursals($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PerPersonaGralSucursal relacionadas */ 	
	public function deletePerPersonaGralSucursals(){
            $obs = $this->getPerPersonaGralSucursals();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPerPersonaGralSucursalsCmb() PerPersonaGralSucursal relacionadas */ 	
	public function getPerPersonaGralSucursalsCmb(){
            $c = new Criterio();
            $c->add(PerPersonaGralSucursal::GEN_ATTR_PER_PERSONA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PerPersonaGralSucursal::GEN_TABLA);
            $c->setCriterios();

            $os = PerPersonaGralSucursal::getPerPersonaGralSucursalsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralSucursals (Coleccion) relacionados a traves de PerPersonaGralSucursal */ 	
	public function getGralSucursalsXPerPersonaGralSucursal($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralSucursal::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PerPersonaGralSucursal::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PerPersonaGralSucursal::GEN_ATTR_PER_PERSONA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralSucursal::GEN_TABLA);
            $c->addRealJoin(PerPersonaGralSucursal::GEN_TABLA, PerPersonaGralSucursal::GEN_ATTR_GRAL_SUCURSAL_ID, GralSucursal::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralSucursal::getGralSucursals($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralSucursals relacionados a traves de PerPersonaGralSucursal */ 	
	public function getCantidadGralSucursalsXPerPersonaGralSucursal($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralSucursal::GEN_ATTR_ID);
            if($estado){
                $c->add(GralSucursal::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PerPersonaGralSucursal::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PerPersonaGralSucursal::GEN_ATTR_PER_PERSONA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralSucursal::GEN_TABLA);
            $c->addRealJoin(PerPersonaGralSucursal::GEN_TABLA, PerPersonaGralSucursal::GEN_ATTR_GRAL_SUCURSAL_ID, GralSucursal::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralSucursal::getGralSucursals($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralSucursal (Objeto) relacionado a traves de PerPersonaGralSucursal */ 	
	public function getGralSucursalXPerPersonaGralSucursal($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralSucursalsXPerPersonaGralSucursal($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPerPersonaUsUsuarios */ 	
	public function getPerPersonaUsUsuarios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PerPersonaUsUsuario::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PerPersonaUsUsuario::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PerPersonaUsUsuario::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PerPersonaUsUsuario::GEN_ATTR_PER_PERSONA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PerPersonaUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PerPersonaUsUsuario::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PerPersonaUsUsuario::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $perpersonaususuarios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $perpersonaususuario = PerPersonaUsUsuario::hidratarObjeto($fila);			
                $perpersonaususuarios[] = $perpersonaususuario;
            }

            return $perpersonaususuarios;
	}	
	

	/* Método getPerPersonaUsUsuariosBloque para MasInfo */ 	
	public function getPerPersonaUsUsuariosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPerPersonaUsUsuarios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPerPersonaUsUsuarios Habilitados */ 	
	public function getPerPersonaUsUsuariosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPerPersonaUsUsuarios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPerPersonaUsUsuario */ 	
	public function getPerPersonaUsUsuario($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPerPersonaUsUsuarios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PerPersonaUsUsuario relacionadas */ 	
	public function deletePerPersonaUsUsuarios(){
            $obs = $this->getPerPersonaUsUsuarios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPerPersonaUsUsuariosCmb() PerPersonaUsUsuario relacionadas */ 	
	public function getPerPersonaUsUsuariosCmb(){
            $c = new Criterio();
            $c->add(PerPersonaUsUsuario::GEN_ATTR_PER_PERSONA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PerPersonaUsUsuario::GEN_TABLA);
            $c->setCriterios();

            $os = PerPersonaUsUsuario::getPerPersonaUsUsuariosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener UsUsuarios (Coleccion) relacionados a traves de PerPersonaUsUsuario */ 	
	public function getUsUsuariosXPerPersonaUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(UsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PerPersonaUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PerPersonaUsUsuario::GEN_ATTR_PER_PERSONA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsUsuario::GEN_TABLA);
            $c->addRealJoin(PerPersonaUsUsuario::GEN_TABLA, PerPersonaUsUsuario::GEN_ATTR_US_USUARIO_ID, UsUsuario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = UsUsuario::getUsUsuarios($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de UsUsuarios relacionados a traves de PerPersonaUsUsuario */ 	
	public function getCantidadUsUsuariosXPerPersonaUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(UsUsuario::GEN_ATTR_ID);
            if($estado){
                $c->add(UsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PerPersonaUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PerPersonaUsUsuario::GEN_ATTR_PER_PERSONA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsUsuario::GEN_TABLA);
            $c->addRealJoin(PerPersonaUsUsuario::GEN_TABLA, PerPersonaUsUsuario::GEN_ATTR_US_USUARIO_ID, UsUsuario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = UsUsuario::getUsUsuarios($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener UsUsuario (Objeto) relacionado a traves de PerPersonaUsUsuario */ 	
	public function getUsUsuarioXPerPersonaUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getUsUsuariosXPerPersonaUsUsuario($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPerMovMovimientos */ 	
	public function getPerMovMovimientos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PerMovMovimiento::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PerMovMovimiento::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PerMovMovimiento::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PerMovMovimiento::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PerMovMovimiento::GEN_ATTR_PER_PERSONA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PerMovMovimiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PerMovMovimiento::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PerMovMovimiento::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $permovmovimientos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $permovmovimiento = PerMovMovimiento::hidratarObjeto($fila);			
                $permovmovimientos[] = $permovmovimiento;
            }

            return $permovmovimientos;
	}	
	

	/* Método getPerMovMovimientosBloque para MasInfo */ 	
	public function getPerMovMovimientosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPerMovMovimientos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPerMovMovimientos Habilitados */ 	
	public function getPerMovMovimientosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPerMovMovimientos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPerMovMovimiento */ 	
	public function getPerMovMovimiento($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPerMovMovimientos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PerMovMovimiento relacionadas */ 	
	public function deletePerMovMovimientos(){
            $obs = $this->getPerMovMovimientos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPerMovMovimientosCmb() PerMovMovimiento relacionadas */ 	
	public function getPerMovMovimientosCmb(){
            $c = new Criterio();
            $c->add(PerMovMovimiento::GEN_ATTR_PER_PERSONA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PerMovMovimiento::GEN_TABLA);
            $c->setCriterios();

            $os = PerMovMovimiento::getPerMovMovimientosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralEmpresas (Coleccion) relacionados a traves de PerMovMovimiento */ 	
	public function getGralEmpresasXPerMovMovimiento($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralEmpresa::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PerMovMovimiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PerMovMovimiento::GEN_ATTR_PER_PERSONA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralEmpresa::GEN_TABLA);
            $c->addRealJoin(PerMovMovimiento::GEN_TABLA, PerMovMovimiento::GEN_ATTR_GRAL_EMPRESA_ID, GralEmpresa::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralEmpresa::getGralEmpresas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralEmpresas relacionados a traves de PerMovMovimiento */ 	
	public function getCantidadGralEmpresasXPerMovMovimiento($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralEmpresa::GEN_ATTR_ID);
            if($estado){
                $c->add(GralEmpresa::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PerMovMovimiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PerMovMovimiento::GEN_ATTR_PER_PERSONA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralEmpresa::GEN_TABLA);
            $c->addRealJoin(PerMovMovimiento::GEN_TABLA, PerMovMovimiento::GEN_ATTR_GRAL_EMPRESA_ID, GralEmpresa::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralEmpresa::getGralEmpresas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralEmpresa (Objeto) relacionado a traves de PerMovMovimiento */ 	
	public function getGralEmpresaXPerMovMovimiento($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralEmpresasXPerMovMovimiento($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPerMovPlanificacions */ 	
	public function getPerMovPlanificacions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PerMovPlanificacion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PerMovPlanificacion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PerMovPlanificacion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PerMovPlanificacion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PerMovPlanificacion::GEN_ATTR_PER_PERSONA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PerMovPlanificacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PerMovPlanificacion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PerMovPlanificacion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $permovplanificacions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $permovplanificacion = PerMovPlanificacion::hidratarObjeto($fila);			
                $permovplanificacions[] = $permovplanificacion;
            }

            return $permovplanificacions;
	}	
	

	/* Método getPerMovPlanificacionsBloque para MasInfo */ 	
	public function getPerMovPlanificacionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPerMovPlanificacions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPerMovPlanificacions Habilitados */ 	
	public function getPerMovPlanificacionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPerMovPlanificacions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPerMovPlanificacion */ 	
	public function getPerMovPlanificacion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPerMovPlanificacions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PerMovPlanificacion relacionadas */ 	
	public function deletePerMovPlanificacions(){
            $obs = $this->getPerMovPlanificacions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPerMovPlanificacionsCmb() PerMovPlanificacion relacionadas */ 	
	public function getPerMovPlanificacionsCmb(){
            $c = new Criterio();
            $c->add(PerMovPlanificacion::GEN_ATTR_PER_PERSONA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PerMovPlanificacion::GEN_TABLA);
            $c->setCriterios();

            $os = PerMovPlanificacion::getPerMovPlanificacionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralNovedads (Coleccion) relacionados a traves de PerMovPlanificacion */ 	
	public function getGralNovedadsXPerMovPlanificacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralNovedad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PerMovPlanificacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PerMovPlanificacion::GEN_ATTR_PER_PERSONA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralNovedad::GEN_TABLA);
            $c->addRealJoin(PerMovPlanificacion::GEN_TABLA, PerMovPlanificacion::GEN_ATTR_GRAL_NOVEDAD_ID, GralNovedad::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralNovedad::getGralNovedads($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralNovedads relacionados a traves de PerMovPlanificacion */ 	
	public function getCantidadGralNovedadsXPerMovPlanificacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralNovedad::GEN_ATTR_ID);
            if($estado){
                $c->add(GralNovedad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PerMovPlanificacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PerMovPlanificacion::GEN_ATTR_PER_PERSONA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralNovedad::GEN_TABLA);
            $c->addRealJoin(PerMovPlanificacion::GEN_TABLA, PerMovPlanificacion::GEN_ATTR_GRAL_NOVEDAD_ID, GralNovedad::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralNovedad::getGralNovedads($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralNovedad (Objeto) relacionado a traves de PerMovPlanificacion */ 	
	public function getGralNovedadXPerMovPlanificacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralNovedadsXPerMovPlanificacion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getOsOrdenServicios */ 	
	public function getOsOrdenServicios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(OsOrdenServicio::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(OsOrdenServicio::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(OsOrdenServicio::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(OsOrdenServicio::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(OsOrdenServicio::GEN_ATTR_PER_PERSONA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(OsOrdenServicio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(OsOrdenServicio::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".OsOrdenServicio::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $osordenservicios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $osordenservicio = OsOrdenServicio::hidratarObjeto($fila);			
                $osordenservicios[] = $osordenservicio;
            }

            return $osordenservicios;
	}	
	

	/* Método getOsOrdenServiciosBloque para MasInfo */ 	
	public function getOsOrdenServiciosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getOsOrdenServicios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getOsOrdenServicios Habilitados */ 	
	public function getOsOrdenServiciosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getOsOrdenServicios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getOsOrdenServicio */ 	
	public function getOsOrdenServicio($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getOsOrdenServicios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de OsOrdenServicio relacionadas */ 	
	public function deleteOsOrdenServicios(){
            $obs = $this->getOsOrdenServicios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getOsOrdenServiciosCmb() OsOrdenServicio relacionadas */ 	
	public function getOsOrdenServiciosCmb(){
            $c = new Criterio();
            $c->add(OsOrdenServicio::GEN_ATTR_PER_PERSONA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(OsOrdenServicio::GEN_TABLA);
            $c->setCriterios();

            $os = OsOrdenServicio::getOsOrdenServiciosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener OsTipos (Coleccion) relacionados a traves de OsOrdenServicio */ 	
	public function getOsTiposXOsOrdenServicio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(OsTipo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(OsOrdenServicio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(OsOrdenServicio::GEN_ATTR_PER_PERSONA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(OsTipo::GEN_TABLA);
            $c->addRealJoin(OsOrdenServicio::GEN_TABLA, OsOrdenServicio::GEN_ATTR_OS_TIPO_ID, OsTipo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = OsTipo::getOsTipos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de OsTipos relacionados a traves de OsOrdenServicio */ 	
	public function getCantidadOsTiposXOsOrdenServicio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(OsTipo::GEN_ATTR_ID);
            if($estado){
                $c->add(OsTipo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(OsOrdenServicio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(OsOrdenServicio::GEN_ATTR_PER_PERSONA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(OsTipo::GEN_TABLA);
            $c->addRealJoin(OsOrdenServicio::GEN_TABLA, OsOrdenServicio::GEN_ATTR_OS_TIPO_ID, OsTipo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = OsTipo::getOsTipos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener OsTipo (Objeto) relacionado a traves de OsOrdenServicio */ 	
	public function getOsTipoXOsOrdenServicio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getOsTiposXOsOrdenServicio($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getOpeOperarios */ 	
	public function getOpeOperarios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(OpeOperario::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(OpeOperario::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(OpeOperario::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(OpeOperario::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(OpeOperario::GEN_ATTR_PER_PERSONA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(OpeOperario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(OpeOperario::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".OpeOperario::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $opeoperarios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $opeoperario = OpeOperario::hidratarObjeto($fila);			
                $opeoperarios[] = $opeoperario;
            }

            return $opeoperarios;
	}	
	

	/* Método getOpeOperariosBloque para MasInfo */ 	
	public function getOpeOperariosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getOpeOperarios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getOpeOperarios Habilitados */ 	
	public function getOpeOperariosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getOpeOperarios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getOpeOperario */ 	
	public function getOpeOperario($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getOpeOperarios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de OpeOperario relacionadas */ 	
	public function deleteOpeOperarios(){
            $obs = $this->getOpeOperarios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getOpeOperariosCmb() OpeOperario relacionadas */ 	
	public function getOpeOperariosCmb(){
            $c = new Criterio();
            $c->add(OpeOperario::GEN_ATTR_PER_PERSONA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(OpeOperario::GEN_TABLA);
            $c->setCriterios();

            $os = OpeOperario::getOpeOperariosCmbF(null, $c);
            return $os;
	}

	/* Metodo que retorna una coleccion de IDs de los UsUsuarios asignados a PerPersona */ 	
	public function getPerPersonaUsUsuariosId(){
            $ids = array();
            foreach($this->getPerPersonaUsUsuarios() as $o){
            
                $ids[] = $o->getUsUsuarioId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos UsUsuarios asignados al PerPersona */ 	
	public function setPerPersonaUsUsuarios($ids){
            $this->deletePerPersonaUsUsuarios();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new PerPersonaUsUsuario();
                    $o->setUsUsuarioId($id);
                    $o->setPerPersonaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion UsUsuario en el alta de PerPersona */ 	
	public function getAltaMostrarBloqueRelacionPerPersonaUsUsuario(){
            return true;
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

	/* Metodo que retorna el GralSucursal (Clave Foranea) */ 	
    public function getGralSucursal(){
        $o = new GralSucursal();
        $o->setId($this->getGralSucursalId());
        return $o;			
    }

	/* Metodo que retorna el GralSucursal (Clave Foranea) en Array */ 	
    public function getGralSucursalEnArray(&$arr_os){
        if($this->getGralSucursalId() != 'null'){
            if(isset($arr_os[$this->getGralSucursalId()])){
                $o = $arr_os[$this->getGralSucursalId()];
            }else{
                $o = GralSucursal::getOxId($this->getGralSucursalId());
                if($o){
                    $arr_os[$this->getGralSucursalId()] = $o;
                }
            }
        }else{
            $o = new GralSucursal();
        }
        return $o;		
    }

	/* Metodo que retorna el GralTipoDocumento (Clave Foranea) */ 	
    public function getGralTipoDocumento(){
        $o = new GralTipoDocumento();
        $o->setId($this->getGralTipoDocumentoId());
        return $o;			
    }

	/* Metodo que retorna el GralTipoDocumento (Clave Foranea) en Array */ 	
    public function getGralTipoDocumentoEnArray(&$arr_os){
        if($this->getGralTipoDocumentoId() != 'null'){
            if(isset($arr_os[$this->getGralTipoDocumentoId()])){
                $o = $arr_os[$this->getGralTipoDocumentoId()];
            }else{
                $o = GralTipoDocumento::getOxId($this->getGralTipoDocumentoId());
                if($o){
                    $arr_os[$this->getGralTipoDocumentoId()] = $o;
                }
            }
        }else{
            $o = new GralTipoDocumento();
        }
        return $o;		
    }

	/* Metodo que retorna el GralSexo (Clave Foranea) */ 	
    public function getGralSexo(){
        $o = new GralSexo();
        $o->setId($this->getGralSexoId());
        return $o;			
    }

	/* Metodo que retorna el GralSexo (Clave Foranea) en Array */ 	
    public function getGralSexoEnArray(&$arr_os){
        if($this->getGralSexoId() != 'null'){
            if(isset($arr_os[$this->getGralSexoId()])){
                $o = $arr_os[$this->getGralSexoId()];
            }else{
                $o = GralSexo::getOxId($this->getGralSexoId());
                if($o){
                    $arr_os[$this->getGralSexoId()] = $o;
                }
            }
        }else{
            $o = new GralSexo();
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

	/* Metodo que retorna el PerTipoEstado (Clave Foranea) */ 	
    public function getPerTipoEstado(){
        $o = new PerTipoEstado();
        $o->setId($this->getPerTipoEstadoId());
        return $o;			
    }

	/* Metodo que retorna el PerTipoEstado (Clave Foranea) en Array */ 	
    public function getPerTipoEstadoEnArray(&$arr_os){
        if($this->getPerTipoEstadoId() != 'null'){
            if(isset($arr_os[$this->getPerTipoEstadoId()])){
                $o = $arr_os[$this->getPerTipoEstadoId()];
            }else{
                $o = PerTipoEstado::getOxId($this->getPerTipoEstadoId());
                if($o){
                    $arr_os[$this->getPerTipoEstadoId()] = $o;
                }
            }
        }else{
            $o = new PerTipoEstado();
        }
        return $o;		
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
            		
        if($contexto_solicitante != GralSucursal::GEN_CLASE){
            if($this->getGralSucursal()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralSucursal::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralSucursal()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralTipoDocumento::GEN_CLASE){
            if($this->getGralTipoDocumento()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralTipoDocumento::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralTipoDocumento()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralSexo::GEN_CLASE){
            if($this->getGralSexo()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralSexo::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralSexo()->getDescripcion().'</strong>';
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
            		
        if($contexto_solicitante != GeoPais::GEN_CLASE){
            if($this->getGeoPais()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GeoPais::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGeoPais()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PerTipoEstado::GEN_CLASE){
            if($this->getPerTipoEstado()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PerTipoEstado::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPerTipoEstado()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM per_persona'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'per_persona';");
            
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

            $obs = self::getPerPersonas($paginador, $criterio);
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

            $obs = self::getPerPersonas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'legajo' */ 	
	static function getOxLegajo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_LEGAJO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerPersonas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'legajo' */ 	
	static function getOsxLegajo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_LEGAJO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPerPersonas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerPersonas($paginador, $criterio);
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

            $obs = self::getPerPersonas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_empresa_id' */ 	
	static function getOxGralEmpresaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_EMPRESA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerPersonas($paginador, $criterio);
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

            $obs = self::getPerPersonas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_sucursal_id' */ 	
	static function getOxGralSucursalId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_SUCURSAL_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerPersonas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_sucursal_id' */ 	
	static function getOsxGralSucursalId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_SUCURSAL_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPerPersonas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_tipo_documento_id' */ 	
	static function getOxGralTipoDocumentoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerPersonas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_tipo_documento_id' */ 	
	static function getOsxGralTipoDocumentoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPerPersonas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'documento' */ 	
	static function getOxDocumento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DOCUMENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerPersonas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'documento' */ 	
	static function getOsxDocumento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DOCUMENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPerPersonas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'apellido' */ 	
	static function getOxApellido($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_APELLIDO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerPersonas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'apellido' */ 	
	static function getOsxApellido($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_APELLIDO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPerPersonas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nombre' */ 	
	static function getOxNombre($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOMBRE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerPersonas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'nombre' */ 	
	static function getOsxNombre($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOMBRE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPerPersonas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cuil' */ 	
	static function getOxCuil($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUIL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerPersonas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cuil' */ 	
	static function getOsxCuil($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUIL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPerPersonas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nacimiento' */ 	
	static function getOxNacimiento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NACIMIENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerPersonas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'nacimiento' */ 	
	static function getOsxNacimiento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NACIMIENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPerPersonas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_sexo_id' */ 	
	static function getOxGralSexoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_SEXO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerPersonas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_sexo_id' */ 	
	static function getOsxGralSexoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_SEXO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPerPersonas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'geo_localidad_id' */ 	
	static function getOxGeoLocalidadId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GEO_LOCALIDAD_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerPersonas($paginador, $criterio);
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

            $obs = self::getPerPersonas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo_postal' */ 	
	static function getOxCodigoPostal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_POSTAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerPersonas($paginador, $criterio);
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

            $obs = self::getPerPersonas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_alta' */ 	
	static function getOxFechaAlta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_ALTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerPersonas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha_alta' */ 	
	static function getOsxFechaAlta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_ALTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPerPersonas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_baja' */ 	
	static function getOxFechaBaja($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_BAJA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerPersonas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha_baja' */ 	
	static function getOsxFechaBaja($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_BAJA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPerPersonas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nacionalidad' */ 	
	static function getOxNacionalidad($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NACIONALIDAD, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerPersonas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'nacionalidad' */ 	
	static function getOsxNacionalidad($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NACIONALIDAD, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPerPersonas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerPersonas($paginador, $criterio);
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

            $obs = self::getPerPersonas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo_credencial' */ 	
	static function getOxCodigoCredencial($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_CREDENCIAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerPersonas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'codigo_credencial' */ 	
	static function getOsxCodigoCredencial($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_CREDENCIAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPerPersonas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'hash' */ 	
	static function getOxHash($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_HASH, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerPersonas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'hash' */ 	
	static function getOsxHash($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_HASH, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPerPersonas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'per_tipo_estado_id' */ 	
	static function getOxPerTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PER_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerPersonas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'per_tipo_estado_id' */ 	
	static function getOsxPerTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PER_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPerPersonas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'control_horario' */ 	
	static function getOxControlHorario($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CONTROL_HORARIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerPersonas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'control_horario' */ 	
	static function getOsxControlHorario($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CONTROL_HORARIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPerPersonas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerPersonas($paginador, $criterio);
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

            $obs = self::getPerPersonas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerPersonas($paginador, $criterio);
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

            $obs = self::getPerPersonas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerPersonas($paginador, $criterio);
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

            $obs = self::getPerPersonas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerPersonas($paginador, $criterio);
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

            $obs = self::getPerPersonas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerPersonas($paginador, $criterio);
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

            $obs = self::getPerPersonas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerPersonas($paginador, $criterio);
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

            $obs = self::getPerPersonas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerPersonas($paginador, $criterio);
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

            $obs = self::getPerPersonas(null, $criterio);
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

            $obs = self::getPerPersonas($paginador, $criterio);
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

            $obs = self::getPerPersonas($paginador, $criterio);
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
            $c->addTabla(PerPersonaImagen::GEN_TABLA);
            $c->addOrden(PerPersonaImagen::GEN_ATTR_ORDEN, 'asc');
            $c->setCriterios();
		
            $imagen_principal = $this->getPerPersonaImagen($c);
            if($imagen_principal){
		return $imagen_principal->getPathImagen($thumb);
            }
            return $this->getPathImagenNoImagen();
	}

	/* retorna la imagen principal */ 	
	public function getPerPersonaImagenPrincipal(){
            $c = new Criterio();
            $c->add('estado', 1, Criterio::IGUAL);
            $c->addTabla(PerPersonaImagen::GEN_TABLA);
            $c->addOrden(PerPersonaImagen::GEN_ATTR_ORDEN, 'asc');
            $c->setCriterios();

            $imagens = $this->getPerPersonaImagens(null, $c);
            foreach($imagens as $imagen){
                return $imagen;
            }
            return false;
	}

	/* retorna las imagenes secundarias (no incluye la principal) */ 	
	public function getPerPersonaImagensSecundarias($imagen_principal = false){
            $arr_imagens = array();
            if(!$imagen_principal){
            $imagen_principal = $this->getPerPersonaImagenPrincipal();
            }

            $c = new Criterio();
            if($imagen_principal){
                $c->add('id', $imagen_principal->getId(), Criterio::DISTINTO);
            }
            $c->add(PerPersonaImagen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            $c->addTabla(PerPersonaImagen::GEN_TABLA);
            $c->addOrden(PerPersonaImagen::GEN_ATTR_ORDEN, 'asc');
            $c->setCriterios();

            $imagens = $this->getPerPersonaImagens(null, $c);
            return $imagens;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'per_persona_adm');
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

	/* Metodos anexos a manejo de fechas (date y datetime) 'nacimiento' */ 	
	public function getNacimientoDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getNacimiento(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getNacimientoDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getNacimientoDiferenciaDias();
        
            if ($fecha_hace > 0) {
                $fecha_hace = 'hace ' . abs($fecha_hace) . ' dias';
            } elseif ($fecha_hace < 0) {
                $fecha_hace = 'faltan ' . abs($fecha_hace) . ' dias';
            } else {
                $fecha_hace = 'hoy';
            }
            return $fecha_hace;
	}

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha_alta' */ 	
	public function getFechaAltaDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFechaAlta(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaAltaDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaAltaDiferenciaDias();
        
            if ($fecha_hace > 0) {
                $fecha_hace = 'hace ' . abs($fecha_hace) . ' dias';
            } elseif ($fecha_hace < 0) {
                $fecha_hace = 'faltan ' . abs($fecha_hace) . ' dias';
            } else {
                $fecha_hace = 'hoy';
            }
            return $fecha_hace;
	}

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha_baja' */ 	
	public function getFechaBajaDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFechaBaja(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaBajaDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaBajaDiferenciaDias();
        
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
	public function getPerPersonaGralSucursalsParaBloqueVinculo($palabra, $pagina){
            $c = new Criterio();

            $c->addInicioSubconsulta();
            $c->add(PerPersonaGralSucursal::GEN_ATTR_PER_PERSONA_ID, $this->getId(), Criterio::IGUAL, false, '');
            $c->addFinSubconsulta();

            $c->addInicioSubconsulta();
            $c->add(PerPersonaGralSucursal::GEN_ATTR_ID, '%'.$palabra.'%', Criterio::LIKE);
            
                $c->add(PerPersonaGralSucursal::GEN_ATTR_CODIGO, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
            $c->addFinSubconsulta();

            $c->addTabla(PerPersonaGralSucursal::GEN_TABLA);
            $c->addOrden('2');
            $c->setCriterios();

            $paginador = new Paginador(50, $pagina);

            $per_persona_gral_sucursals = PerPersonaGralSucursal::getPerPersonaGralSucursals($paginador, $c);

            $arr['COLECCION'] = $per_persona_gral_sucursals;
            $arr['PAGINADOR'] = $paginador;
            return $arr;
	}
	
            /**
             * Metodo que retorna una coleccion de descripciones unificada para usar en autosuggest
             */
            static function getArrDescripcionsUnificado(){
                $c = new Criterio();
                $c->addTabla(PerPersona::GEN_TABLA);
                $c->addOrden(PerPersona::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $per_personas = PerPersona::getPerPersonas(null, $c);

                $arr = array();
                foreach($per_personas as $per_persona){
                    $descripcion = $per_persona->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>