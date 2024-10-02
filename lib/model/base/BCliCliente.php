<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BCliCliente
{ 
	
	const SES_PAGINACION = 'adm_clicliente_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_clicliente_paginas_registros';
	const SES_CRITERIOS = 'adm_clicliente_criterios';
	
	const GEN_CLASE = 'CliCliente';
	const GEN_TABLA = 'cli_cliente';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BCliCliente */ 
	const GEN_ATTR_ID = 'cli_cliente.id';
	const GEN_ATTR_DESCRIPCION = 'cli_cliente.descripcion';
	const GEN_ATTR_GRAL_TIPO_PERSONERIA_ID = 'cli_cliente.gral_tipo_personeria_id';
	const GEN_ATTR_GRAL_CONDICION_IVA_ID = 'cli_cliente.gral_condicion_iva_id';
	const GEN_ATTR_CLI_TIPO_CLIENTE_ID = 'cli_cliente.cli_tipo_cliente_id';
	const GEN_ATTR_RAZON_SOCIAL = 'cli_cliente.razon_social';
	const GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID = 'cli_cliente.gral_tipo_documento_id';
	const GEN_ATTR_CUIT = 'cli_cliente.cuit';
	const GEN_ATTR_DOMICILIO_LEGAL = 'cli_cliente.domicilio_legal';
	const GEN_ATTR_NUMERO_CASA = 'cli_cliente.numero_casa';
	const GEN_ATTR_TELEFONO = 'cli_cliente.telefono';
	const GEN_ATTR_TELEFONO_WHATSAPP = 'cli_cliente.telefono_whatsapp';
	const GEN_ATTR_EMAIL = 'cli_cliente.email';
	const GEN_ATTR_CODIGO_POSTAL = 'cli_cliente.codigo_postal';
	const GEN_ATTR_GEO_LOCALIDAD_ID = 'cli_cliente.geo_localidad_id';
	const GEN_ATTR_GEO_ZONA_ID = 'cli_cliente.geo_zona_id';
	const GEN_ATTR_CODIGO = 'cli_cliente.codigo';
	const GEN_ATTR_CLI_GRUPO_ID = 'cli_cliente.cli_grupo_id';
	const GEN_ATTR_GRAL_EMPRESA_TRANSPORTADORA_ID = 'cli_cliente.gral_empresa_transportadora_id';
	const GEN_ATTR_CLI_CATEGORIA_ID = 'cli_cliente.cli_categoria_id';
	const GEN_ATTR_CLI_SUBCATEGORIA_ID = 'cli_cliente.cli_subcategoria_id';
	const GEN_ATTR_LIMITE_CTACTE_IMPORTE = 'cli_cliente.limite_ctacte_importe';
	const GEN_ATTR_LIMITE_CTACTE_DIAS = 'cli_cliente.limite_ctacte_dias';
	const GEN_ATTR_CLI_CLIENTE_TIPO_GESTION_ID = 'cli_cliente.cli_cliente_tipo_gestion_id';
	const GEN_ATTR_CLI_CLIENTE_PERIODICIDAD_GESTION_ID = 'cli_cliente.cli_cliente_periodicidad_gestion_id';
	const GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_ID = 'cli_cliente.cli_cliente_tipo_estado_id';
	const GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_VENTA_ID = 'cli_cliente.cli_cliente_tipo_estado_venta_id';
	const GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_COBRO_ID = 'cli_cliente.cli_cliente_tipo_estado_cobro_id';
	const GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_CUENTA_ID = 'cli_cliente.cli_cliente_tipo_estado_cuenta_id';
	const GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_SATISFACCION_ID = 'cli_cliente.cli_cliente_tipo_estado_satisfaccion_id';
	const GEN_ATTR_IVA_EXCEPTUADO = 'cli_cliente.iva_exceptuado';
	const GEN_ATTR_OBSERVACION = 'cli_cliente.observacion';
	const GEN_ATTR_DATOS_MIGRACION = 'cli_cliente.datos_migracion';
	const GEN_ATTR_CLAVES = 'cli_cliente.claves';
	const GEN_ATTR_ORDEN = 'cli_cliente.orden';
	const GEN_ATTR_ESTADO = 'cli_cliente.estado';
	const GEN_ATTR_CREADO = 'cli_cliente.creado';
	const GEN_ATTR_CREADO_POR = 'cli_cliente.creado_por';
	const GEN_ATTR_MODIFICADO = 'cli_cliente.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'cli_cliente.modificado_por';

	/* Constantes de Atributos Min de BCliCliente */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID = 'gral_tipo_personeria_id';
	const GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID = 'gral_condicion_iva_id';
	const GEN_ATTR_MIN_CLI_TIPO_CLIENTE_ID = 'cli_tipo_cliente_id';
	const GEN_ATTR_MIN_RAZON_SOCIAL = 'razon_social';
	const GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID = 'gral_tipo_documento_id';
	const GEN_ATTR_MIN_CUIT = 'cuit';
	const GEN_ATTR_MIN_DOMICILIO_LEGAL = 'domicilio_legal';
	const GEN_ATTR_MIN_NUMERO_CASA = 'numero_casa';
	const GEN_ATTR_MIN_TELEFONO = 'telefono';
	const GEN_ATTR_MIN_TELEFONO_WHATSAPP = 'telefono_whatsapp';
	const GEN_ATTR_MIN_EMAIL = 'email';
	const GEN_ATTR_MIN_CODIGO_POSTAL = 'codigo_postal';
	const GEN_ATTR_MIN_GEO_LOCALIDAD_ID = 'geo_localidad_id';
	const GEN_ATTR_MIN_GEO_ZONA_ID = 'geo_zona_id';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_CLI_GRUPO_ID = 'cli_grupo_id';
	const GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID = 'gral_empresa_transportadora_id';
	const GEN_ATTR_MIN_CLI_CATEGORIA_ID = 'cli_categoria_id';
	const GEN_ATTR_MIN_CLI_SUBCATEGORIA_ID = 'cli_subcategoria_id';
	const GEN_ATTR_MIN_LIMITE_CTACTE_IMPORTE = 'limite_ctacte_importe';
	const GEN_ATTR_MIN_LIMITE_CTACTE_DIAS = 'limite_ctacte_dias';
	const GEN_ATTR_MIN_CLI_CLIENTE_TIPO_GESTION_ID = 'cli_cliente_tipo_gestion_id';
	const GEN_ATTR_MIN_CLI_CLIENTE_PERIODICIDAD_GESTION_ID = 'cli_cliente_periodicidad_gestion_id';
	const GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_ID = 'cli_cliente_tipo_estado_id';
	const GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_VENTA_ID = 'cli_cliente_tipo_estado_venta_id';
	const GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_COBRO_ID = 'cli_cliente_tipo_estado_cobro_id';
	const GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_CUENTA_ID = 'cli_cliente_tipo_estado_cuenta_id';
	const GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_SATISFACCION_ID = 'cli_cliente_tipo_estado_satisfaccion_id';
	const GEN_ATTR_MIN_IVA_EXCEPTUADO = 'iva_exceptuado';
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
	

	/* Atributos de BCliCliente */ 
	private $id;
	private $descripcion;
	private $gral_tipo_personeria_id;
	private $gral_condicion_iva_id;
	private $cli_tipo_cliente_id;
	private $razon_social;
	private $gral_tipo_documento_id;
	private $cuit;
	private $domicilio_legal;
	private $numero_casa;
	private $telefono;
	private $telefono_whatsapp;
	private $email;
	private $codigo_postal;
	private $geo_localidad_id;
	private $geo_zona_id;
	private $codigo;
	private $cli_grupo_id;
	private $gral_empresa_transportadora_id;
	private $cli_categoria_id;
	private $cli_subcategoria_id;
	private $limite_ctacte_importe;
	private $limite_ctacte_dias;
	private $cli_cliente_tipo_gestion_id;
	private $cli_cliente_periodicidad_gestion_id;
	private $cli_cliente_tipo_estado_id;
	private $cli_cliente_tipo_estado_venta_id;
	private $cli_cliente_tipo_estado_cobro_id;
	private $cli_cliente_tipo_estado_cuenta_id;
	private $cli_cliente_tipo_estado_satisfaccion_id;
	private $iva_exceptuado;
	private $observacion;
	private $datos_migracion;
	private $claves;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BCliCliente */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getGralTipoPersoneriaId(){ if(isset($this->gral_tipo_personeria_id)){ return $this->gral_tipo_personeria_id; }else{ return 'null'; } }
	public function getGralCondicionIvaId(){ if(isset($this->gral_condicion_iva_id)){ return $this->gral_condicion_iva_id; }else{ return 'null'; } }
	public function getCliTipoClienteId(){ if(isset($this->cli_tipo_cliente_id)){ return $this->cli_tipo_cliente_id; }else{ return 'null'; } }
	public function getRazonSocial(){ if(isset($this->razon_social)){ return $this->razon_social; }else{ return ''; } }
	public function getGralTipoDocumentoId(){ if(isset($this->gral_tipo_documento_id)){ return $this->gral_tipo_documento_id; }else{ return 'null'; } }
	public function getCuit(){ if(isset($this->cuit)){ return $this->cuit; }else{ return ''; } }
	public function getDomicilioLegal(){ if(isset($this->domicilio_legal)){ return $this->domicilio_legal; }else{ return ''; } }
	public function getNumeroCasa(){ if(isset($this->numero_casa)){ return $this->numero_casa; }else{ return ''; } }
	public function getTelefono(){ if(isset($this->telefono)){ return $this->telefono; }else{ return ''; } }
	public function getTelefonoWhatsapp(){ if(isset($this->telefono_whatsapp)){ return $this->telefono_whatsapp; }else{ return ''; } }
	public function getEmail(){ if(isset($this->email)){ return $this->email; }else{ return ''; } }
	public function getCodigoPostal(){ if(isset($this->codigo_postal)){ return $this->codigo_postal; }else{ return ''; } }
	public function getGeoLocalidadId(){ if(isset($this->geo_localidad_id)){ return $this->geo_localidad_id; }else{ return 'null'; } }
	public function getGeoZonaId(){ if(isset($this->geo_zona_id)){ return $this->geo_zona_id; }else{ return 'null'; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getCliGrupoId(){ if(isset($this->cli_grupo_id)){ return $this->cli_grupo_id; }else{ return 'null'; } }
	public function getGralEmpresaTransportadoraId(){ if(isset($this->gral_empresa_transportadora_id)){ return $this->gral_empresa_transportadora_id; }else{ return 'null'; } }
	public function getCliCategoriaId(){ if(isset($this->cli_categoria_id)){ return $this->cli_categoria_id; }else{ return 'null'; } }
	public function getCliSubcategoriaId(){ if(isset($this->cli_subcategoria_id)){ return $this->cli_subcategoria_id; }else{ return 'null'; } }
	public function getLimiteCtacteImporte(){ if(isset($this->limite_ctacte_importe)){ return $this->limite_ctacte_importe; }else{ return 0; } }
	public function getLimiteCtacteDias(){ if(isset($this->limite_ctacte_dias)){ return $this->limite_ctacte_dias; }else{ return 0; } }
	public function getCliClienteTipoGestionId(){ if(isset($this->cli_cliente_tipo_gestion_id)){ return $this->cli_cliente_tipo_gestion_id; }else{ return 'null'; } }
	public function getCliClientePeriodicidadGestionId(){ if(isset($this->cli_cliente_periodicidad_gestion_id)){ return $this->cli_cliente_periodicidad_gestion_id; }else{ return 'null'; } }
	public function getCliClienteTipoEstadoId(){ if(isset($this->cli_cliente_tipo_estado_id)){ return $this->cli_cliente_tipo_estado_id; }else{ return 'null'; } }
	public function getCliClienteTipoEstadoVentaId(){ if(isset($this->cli_cliente_tipo_estado_venta_id)){ return $this->cli_cliente_tipo_estado_venta_id; }else{ return 'null'; } }
	public function getCliClienteTipoEstadoCobroId(){ if(isset($this->cli_cliente_tipo_estado_cobro_id)){ return $this->cli_cliente_tipo_estado_cobro_id; }else{ return 'null'; } }
	public function getCliClienteTipoEstadoCuentaId(){ if(isset($this->cli_cliente_tipo_estado_cuenta_id)){ return $this->cli_cliente_tipo_estado_cuenta_id; }else{ return 'null'; } }
	public function getCliClienteTipoEstadoSatisfaccionId(){ if(isset($this->cli_cliente_tipo_estado_satisfaccion_id)){ return $this->cli_cliente_tipo_estado_satisfaccion_id; }else{ return 'null'; } }
	public function getIvaExceptuado(){ if(isset($this->iva_exceptuado)){ return $this->iva_exceptuado; }else{ return 0; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getDatosMigracion(){ if(isset($this->datos_migracion)){ return $this->datos_migracion; }else{ return ''; } }
	public function getClaves(){ if(isset($this->claves)){ return $this->claves; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BCliCliente */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID."
				, ".self::GEN_ATTR_GRAL_CONDICION_IVA_ID."
				, ".self::GEN_ATTR_CLI_TIPO_CLIENTE_ID."
				, ".self::GEN_ATTR_RAZON_SOCIAL."
				, ".self::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID."
				, ".self::GEN_ATTR_CUIT."
				, ".self::GEN_ATTR_DOMICILIO_LEGAL."
				, ".self::GEN_ATTR_NUMERO_CASA."
				, ".self::GEN_ATTR_TELEFONO."
				, ".self::GEN_ATTR_TELEFONO_WHATSAPP."
				, ".self::GEN_ATTR_EMAIL."
				, ".self::GEN_ATTR_CODIGO_POSTAL."
				, ".self::GEN_ATTR_GEO_LOCALIDAD_ID."
				, ".self::GEN_ATTR_GEO_ZONA_ID."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_CLI_GRUPO_ID."
				, ".self::GEN_ATTR_GRAL_EMPRESA_TRANSPORTADORA_ID."
				, ".self::GEN_ATTR_CLI_CATEGORIA_ID."
				, ".self::GEN_ATTR_CLI_SUBCATEGORIA_ID."
				, ".self::GEN_ATTR_LIMITE_CTACTE_IMPORTE."
				, ".self::GEN_ATTR_LIMITE_CTACTE_DIAS."
				, ".self::GEN_ATTR_CLI_CLIENTE_TIPO_GESTION_ID."
				, ".self::GEN_ATTR_CLI_CLIENTE_PERIODICIDAD_GESTION_ID."
				, ".self::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_ID."
				, ".self::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_VENTA_ID."
				, ".self::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_COBRO_ID."
				, ".self::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_CUENTA_ID."
				, ".self::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_SATISFACCION_ID."
				, ".self::GEN_ATTR_IVA_EXCEPTUADO."
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
				$this->setGralTipoPersoneriaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID]);
				$this->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
				$this->setCliTipoClienteId($fila[self::GEN_ATTR_MIN_CLI_TIPO_CLIENTE_ID]);
				$this->setRazonSocial($fila[self::GEN_ATTR_MIN_RAZON_SOCIAL]);
				$this->setGralTipoDocumentoId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID]);
				$this->setCuit($fila[self::GEN_ATTR_MIN_CUIT]);
				$this->setDomicilioLegal($fila[self::GEN_ATTR_MIN_DOMICILIO_LEGAL]);
				$this->setNumeroCasa($fila[self::GEN_ATTR_MIN_NUMERO_CASA]);
				$this->setTelefono($fila[self::GEN_ATTR_MIN_TELEFONO]);
				$this->setTelefonoWhatsapp($fila[self::GEN_ATTR_MIN_TELEFONO_WHATSAPP]);
				$this->setEmail($fila[self::GEN_ATTR_MIN_EMAIL]);
				$this->setCodigoPostal($fila[self::GEN_ATTR_MIN_CODIGO_POSTAL]);
				$this->setGeoLocalidadId($fila[self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID]);
				$this->setGeoZonaId($fila[self::GEN_ATTR_MIN_GEO_ZONA_ID]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setCliGrupoId($fila[self::GEN_ATTR_MIN_CLI_GRUPO_ID]);
				$this->setGralEmpresaTransportadoraId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID]);
				$this->setCliCategoriaId($fila[self::GEN_ATTR_MIN_CLI_CATEGORIA_ID]);
				$this->setCliSubcategoriaId($fila[self::GEN_ATTR_MIN_CLI_SUBCATEGORIA_ID]);
				$this->setLimiteCtacteImporte($fila[self::GEN_ATTR_MIN_LIMITE_CTACTE_IMPORTE]);
				$this->setLimiteCtacteDias($fila[self::GEN_ATTR_MIN_LIMITE_CTACTE_DIAS]);
				$this->setCliClienteTipoGestionId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_GESTION_ID]);
				$this->setCliClientePeriodicidadGestionId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_PERIODICIDAD_GESTION_ID]);
				$this->setCliClienteTipoEstadoId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_ID]);
				$this->setCliClienteTipoEstadoVentaId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_VENTA_ID]);
				$this->setCliClienteTipoEstadoCobroId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_COBRO_ID]);
				$this->setCliClienteTipoEstadoCuentaId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_CUENTA_ID]);
				$this->setCliClienteTipoEstadoSatisfaccionId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_SATISFACCION_ID]);
				$this->setIvaExceptuado($fila[self::GEN_ATTR_MIN_IVA_EXCEPTUADO]);
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
	public function setGralTipoPersoneriaId($v){ $this->gral_tipo_personeria_id = $v; }
	public function setGralCondicionIvaId($v){ $this->gral_condicion_iva_id = $v; }
	public function setCliTipoClienteId($v){ $this->cli_tipo_cliente_id = $v; }
	public function setRazonSocial($v){ $this->razon_social = $v; }
	public function setGralTipoDocumentoId($v){ $this->gral_tipo_documento_id = $v; }
	public function setCuit($v){ $this->cuit = $v; }
	public function setDomicilioLegal($v){ $this->domicilio_legal = $v; }
	public function setNumeroCasa($v){ $this->numero_casa = $v; }
	public function setTelefono($v){ $this->telefono = $v; }
	public function setTelefonoWhatsapp($v){ $this->telefono_whatsapp = $v; }
	public function setEmail($v){ $this->email = $v; }
	public function setCodigoPostal($v){ $this->codigo_postal = $v; }
	public function setGeoLocalidadId($v){ $this->geo_localidad_id = $v; }
	public function setGeoZonaId($v){ $this->geo_zona_id = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setCliGrupoId($v){ $this->cli_grupo_id = $v; }
	public function setGralEmpresaTransportadoraId($v){ $this->gral_empresa_transportadora_id = $v; }
	public function setCliCategoriaId($v){ $this->cli_categoria_id = $v; }
	public function setCliSubcategoriaId($v){ $this->cli_subcategoria_id = $v; }
	public function setLimiteCtacteImporte($v){ $this->limite_ctacte_importe = $v; }
	public function setLimiteCtacteDias($v){ $this->limite_ctacte_dias = $v; }
	public function setCliClienteTipoGestionId($v){ $this->cli_cliente_tipo_gestion_id = $v; }
	public function setCliClientePeriodicidadGestionId($v){ $this->cli_cliente_periodicidad_gestion_id = $v; }
	public function setCliClienteTipoEstadoId($v){ $this->cli_cliente_tipo_estado_id = $v; }
	public function setCliClienteTipoEstadoVentaId($v){ $this->cli_cliente_tipo_estado_venta_id = $v; }
	public function setCliClienteTipoEstadoCobroId($v){ $this->cli_cliente_tipo_estado_cobro_id = $v; }
	public function setCliClienteTipoEstadoCuentaId($v){ $this->cli_cliente_tipo_estado_cuenta_id = $v; }
	public function setCliClienteTipoEstadoSatisfaccionId($v){ $this->cli_cliente_tipo_estado_satisfaccion_id = $v; }
	public function setIvaExceptuado($v){ $this->iva_exceptuado = $v; }
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
            $o = new CliCliente();
            $o->setId($fila[CliCliente::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setGralTipoPersoneriaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID]);
			$o->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
			$o->setCliTipoClienteId($fila[self::GEN_ATTR_MIN_CLI_TIPO_CLIENTE_ID]);
			$o->setRazonSocial($fila[self::GEN_ATTR_MIN_RAZON_SOCIAL]);
			$o->setGralTipoDocumentoId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID]);
			$o->setCuit($fila[self::GEN_ATTR_MIN_CUIT]);
			$o->setDomicilioLegal($fila[self::GEN_ATTR_MIN_DOMICILIO_LEGAL]);
			$o->setNumeroCasa($fila[self::GEN_ATTR_MIN_NUMERO_CASA]);
			$o->setTelefono($fila[self::GEN_ATTR_MIN_TELEFONO]);
			$o->setTelefonoWhatsapp($fila[self::GEN_ATTR_MIN_TELEFONO_WHATSAPP]);
			$o->setEmail($fila[self::GEN_ATTR_MIN_EMAIL]);
			$o->setCodigoPostal($fila[self::GEN_ATTR_MIN_CODIGO_POSTAL]);
			$o->setGeoLocalidadId($fila[self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID]);
			$o->setGeoZonaId($fila[self::GEN_ATTR_MIN_GEO_ZONA_ID]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setCliGrupoId($fila[self::GEN_ATTR_MIN_CLI_GRUPO_ID]);
			$o->setGralEmpresaTransportadoraId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID]);
			$o->setCliCategoriaId($fila[self::GEN_ATTR_MIN_CLI_CATEGORIA_ID]);
			$o->setCliSubcategoriaId($fila[self::GEN_ATTR_MIN_CLI_SUBCATEGORIA_ID]);
			$o->setLimiteCtacteImporte($fila[self::GEN_ATTR_MIN_LIMITE_CTACTE_IMPORTE]);
			$o->setLimiteCtacteDias($fila[self::GEN_ATTR_MIN_LIMITE_CTACTE_DIAS]);
			$o->setCliClienteTipoGestionId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_GESTION_ID]);
			$o->setCliClientePeriodicidadGestionId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_PERIODICIDAD_GESTION_ID]);
			$o->setCliClienteTipoEstadoId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_ID]);
			$o->setCliClienteTipoEstadoVentaId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_VENTA_ID]);
			$o->setCliClienteTipoEstadoCobroId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_COBRO_ID]);
			$o->setCliClienteTipoEstadoCuentaId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_CUENTA_ID]);
			$o->setCliClienteTipoEstadoSatisfaccionId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_SATISFACCION_ID]);
			$o->setIvaExceptuado($fila[self::GEN_ATTR_MIN_IVA_EXCEPTUADO]);
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

	/* Control de BCliCliente */ 	
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

	/* Cambia el estado de BCliCliente */ 	
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

	/* Save de BCliCliente */ 	
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
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID."
						, ".self::GEN_ATTR_MIN_CLI_TIPO_CLIENTE_ID."
						, ".self::GEN_ATTR_MIN_RAZON_SOCIAL."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID."
						, ".self::GEN_ATTR_MIN_CUIT."
						, ".self::GEN_ATTR_MIN_DOMICILIO_LEGAL."
						, ".self::GEN_ATTR_MIN_NUMERO_CASA."
						, ".self::GEN_ATTR_MIN_TELEFONO."
						, ".self::GEN_ATTR_MIN_TELEFONO_WHATSAPP."
						, ".self::GEN_ATTR_MIN_EMAIL."
						, ".self::GEN_ATTR_MIN_CODIGO_POSTAL."
						, ".self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID."
						, ".self::GEN_ATTR_MIN_GEO_ZONA_ID."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_CLI_GRUPO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID."
						, ".self::GEN_ATTR_MIN_CLI_CATEGORIA_ID."
						, ".self::GEN_ATTR_MIN_CLI_SUBCATEGORIA_ID."
						, ".self::GEN_ATTR_MIN_LIMITE_CTACTE_IMPORTE."
						, ".self::GEN_ATTR_MIN_LIMITE_CTACTE_DIAS."
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_GESTION_ID."
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_PERIODICIDAD_GESTION_ID."
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_VENTA_ID."
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_COBRO_ID."
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_CUENTA_ID."
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_SATISFACCION_ID."
						, ".self::GEN_ATTR_MIN_IVA_EXCEPTUADO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_DATOS_MIGRACION."
						, ".self::GEN_ATTR_MIN_CLAVES."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('cli_cliente_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getGralTipoPersoneriaId()."
						, ".$this->getGralCondicionIvaId()."
						, ".$this->getCliTipoClienteId()."
						, '".$this->getRazonSocial()."'
						, ".$this->getGralTipoDocumentoId()."
						, '".$this->getCuit()."'
						, '".$this->getDomicilioLegal()."'
						, '".$this->getNumeroCasa()."'
						, '".$this->getTelefono()."'
						, '".$this->getTelefonoWhatsapp()."'
						, '".$this->getEmail()."'
						, '".$this->getCodigoPostal()."'
						, ".$this->getGeoLocalidadId()."
						, ".$this->getGeoZonaId()."
						, '".$this->getCodigo()."'
						, ".$this->getCliGrupoId()."
						, ".$this->getGralEmpresaTransportadoraId()."
						, ".$this->getCliCategoriaId()."
						, ".$this->getCliSubcategoriaId()."
						, '".$this->getLimiteCtacteImporte()."'
						, '".$this->getLimiteCtacteDias()."'
						, ".$this->getCliClienteTipoGestionId()."
						, ".$this->getCliClientePeriodicidadGestionId()."
						, ".$this->getCliClienteTipoEstadoId()."
						, ".$this->getCliClienteTipoEstadoVentaId()."
						, ".$this->getCliClienteTipoEstadoCobroId()."
						, ".$this->getCliClienteTipoEstadoCuentaId()."
						, ".$this->getCliClienteTipoEstadoSatisfaccionId()."
						, ".$this->getIvaExceptuado()."
						, '".$this->getObservacion()."'
						, '".$this->getDatosMigracion()."'
						, '".$this->getClaves()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('cli_cliente_seq')";
            
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
                 
				 ".CliCliente::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID." = ".$this->getGralTipoPersoneriaId()."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID." = ".$this->getGralCondicionIvaId()."
						, ".self::GEN_ATTR_MIN_CLI_TIPO_CLIENTE_ID." = ".$this->getCliTipoClienteId()."
						, ".self::GEN_ATTR_MIN_RAZON_SOCIAL." = '".$this->getRazonSocial()."'
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID." = ".$this->getGralTipoDocumentoId()."
						, ".self::GEN_ATTR_MIN_CUIT." = '".$this->getCuit()."'
						, ".self::GEN_ATTR_MIN_DOMICILIO_LEGAL." = '".$this->getDomicilioLegal()."'
						, ".self::GEN_ATTR_MIN_NUMERO_CASA." = '".$this->getNumeroCasa()."'
						, ".self::GEN_ATTR_MIN_TELEFONO." = '".$this->getTelefono()."'
						, ".self::GEN_ATTR_MIN_TELEFONO_WHATSAPP." = '".$this->getTelefonoWhatsapp()."'
						, ".self::GEN_ATTR_MIN_EMAIL." = '".$this->getEmail()."'
						, ".self::GEN_ATTR_MIN_CODIGO_POSTAL." = '".$this->getCodigoPostal()."'
						, ".self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID." = ".$this->getGeoLocalidadId()."
						, ".self::GEN_ATTR_MIN_GEO_ZONA_ID." = ".$this->getGeoZonaId()."
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_CLI_GRUPO_ID." = ".$this->getCliGrupoId()."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID." = ".$this->getGralEmpresaTransportadoraId()."
						, ".self::GEN_ATTR_MIN_CLI_CATEGORIA_ID." = ".$this->getCliCategoriaId()."
						, ".self::GEN_ATTR_MIN_CLI_SUBCATEGORIA_ID." = ".$this->getCliSubcategoriaId()."
						, ".self::GEN_ATTR_MIN_LIMITE_CTACTE_IMPORTE." = '".$this->getLimiteCtacteImporte()."'
						, ".self::GEN_ATTR_MIN_LIMITE_CTACTE_DIAS." = '".$this->getLimiteCtacteDias()."'
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_GESTION_ID." = ".$this->getCliClienteTipoGestionId()."
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_PERIODICIDAD_GESTION_ID." = ".$this->getCliClientePeriodicidadGestionId()."
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_ID." = ".$this->getCliClienteTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_VENTA_ID." = ".$this->getCliClienteTipoEstadoVentaId()."
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_COBRO_ID." = ".$this->getCliClienteTipoEstadoCobroId()."
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_CUENTA_ID." = ".$this->getCliClienteTipoEstadoCuentaId()."
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_SATISFACCION_ID." = ".$this->getCliClienteTipoEstadoSatisfaccionId()."
						, ".self::GEN_ATTR_MIN_IVA_EXCEPTUADO." = ".$this->getIvaExceptuado()."
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
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID."
						, ".self::GEN_ATTR_MIN_CLI_TIPO_CLIENTE_ID."
						, ".self::GEN_ATTR_MIN_RAZON_SOCIAL."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID."
						, ".self::GEN_ATTR_MIN_CUIT."
						, ".self::GEN_ATTR_MIN_DOMICILIO_LEGAL."
						, ".self::GEN_ATTR_MIN_NUMERO_CASA."
						, ".self::GEN_ATTR_MIN_TELEFONO."
						, ".self::GEN_ATTR_MIN_TELEFONO_WHATSAPP."
						, ".self::GEN_ATTR_MIN_EMAIL."
						, ".self::GEN_ATTR_MIN_CODIGO_POSTAL."
						, ".self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID."
						, ".self::GEN_ATTR_MIN_GEO_ZONA_ID."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_CLI_GRUPO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID."
						, ".self::GEN_ATTR_MIN_CLI_CATEGORIA_ID."
						, ".self::GEN_ATTR_MIN_CLI_SUBCATEGORIA_ID."
						, ".self::GEN_ATTR_MIN_LIMITE_CTACTE_IMPORTE."
						, ".self::GEN_ATTR_MIN_LIMITE_CTACTE_DIAS."
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_GESTION_ID."
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_PERIODICIDAD_GESTION_ID."
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_VENTA_ID."
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_COBRO_ID."
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_CUENTA_ID."
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_SATISFACCION_ID."
						, ".self::GEN_ATTR_MIN_IVA_EXCEPTUADO."
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
						, ".$this->getGralTipoPersoneriaId()."
						, ".$this->getGralCondicionIvaId()."
						, ".$this->getCliTipoClienteId()."
						, '".$this->getRazonSocial()."'
						, ".$this->getGralTipoDocumentoId()."
						, '".$this->getCuit()."'
						, '".$this->getDomicilioLegal()."'
						, '".$this->getNumeroCasa()."'
						, '".$this->getTelefono()."'
						, '".$this->getTelefonoWhatsapp()."'
						, '".$this->getEmail()."'
						, '".$this->getCodigoPostal()."'
						, ".$this->getGeoLocalidadId()."
						, ".$this->getGeoZonaId()."
						, '".$this->getCodigo()."'
						, ".$this->getCliGrupoId()."
						, ".$this->getGralEmpresaTransportadoraId()."
						, ".$this->getCliCategoriaId()."
						, ".$this->getCliSubcategoriaId()."
						, '".$this->getLimiteCtacteImporte()."'
						, '".$this->getLimiteCtacteDias()."'
						, ".$this->getCliClienteTipoGestionId()."
						, ".$this->getCliClientePeriodicidadGestionId()."
						, ".$this->getCliClienteTipoEstadoId()."
						, ".$this->getCliClienteTipoEstadoVentaId()."
						, ".$this->getCliClienteTipoEstadoCobroId()."
						, ".$this->getCliClienteTipoEstadoCuentaId()."
						, ".$this->getCliClienteTipoEstadoSatisfaccionId()."
						, ".$this->getIvaExceptuado()."
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
                     
				 ".CliCliente::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID." = ".$this->getGralTipoPersoneriaId()."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID." = ".$this->getGralCondicionIvaId()."
						, ".self::GEN_ATTR_MIN_CLI_TIPO_CLIENTE_ID." = ".$this->getCliTipoClienteId()."
						, ".self::GEN_ATTR_MIN_RAZON_SOCIAL." = '".$this->getRazonSocial()."'
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID." = ".$this->getGralTipoDocumentoId()."
						, ".self::GEN_ATTR_MIN_CUIT." = '".$this->getCuit()."'
						, ".self::GEN_ATTR_MIN_DOMICILIO_LEGAL." = '".$this->getDomicilioLegal()."'
						, ".self::GEN_ATTR_MIN_NUMERO_CASA." = '".$this->getNumeroCasa()."'
						, ".self::GEN_ATTR_MIN_TELEFONO." = '".$this->getTelefono()."'
						, ".self::GEN_ATTR_MIN_TELEFONO_WHATSAPP." = '".$this->getTelefonoWhatsapp()."'
						, ".self::GEN_ATTR_MIN_EMAIL." = '".$this->getEmail()."'
						, ".self::GEN_ATTR_MIN_CODIGO_POSTAL." = '".$this->getCodigoPostal()."'
						, ".self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID." = ".$this->getGeoLocalidadId()."
						, ".self::GEN_ATTR_MIN_GEO_ZONA_ID." = ".$this->getGeoZonaId()."
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_CLI_GRUPO_ID." = ".$this->getCliGrupoId()."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID." = ".$this->getGralEmpresaTransportadoraId()."
						, ".self::GEN_ATTR_MIN_CLI_CATEGORIA_ID." = ".$this->getCliCategoriaId()."
						, ".self::GEN_ATTR_MIN_CLI_SUBCATEGORIA_ID." = ".$this->getCliSubcategoriaId()."
						, ".self::GEN_ATTR_MIN_LIMITE_CTACTE_IMPORTE." = '".$this->getLimiteCtacteImporte()."'
						, ".self::GEN_ATTR_MIN_LIMITE_CTACTE_DIAS." = '".$this->getLimiteCtacteDias()."'
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_GESTION_ID." = ".$this->getCliClienteTipoGestionId()."
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_PERIODICIDAD_GESTION_ID." = ".$this->getCliClientePeriodicidadGestionId()."
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_ID." = ".$this->getCliClienteTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_VENTA_ID." = ".$this->getCliClienteTipoEstadoVentaId()."
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_COBRO_ID." = ".$this->getCliClienteTipoEstadoCobroId()."
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_CUENTA_ID." = ".$this->getCliClienteTipoEstadoCuentaId()."
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_SATISFACCION_ID." = ".$this->getCliClienteTipoEstadoSatisfaccionId()."
						, ".self::GEN_ATTR_MIN_IVA_EXCEPTUADO." = ".$this->getIvaExceptuado()."
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
            $o = new CliCliente();
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

	/* Delete de BCliCliente */ 	
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
	
            // se elimina la coleccion de GralSucursalValoracions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralSucursalValoracion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralSucursalValoracions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de GralSucursalValoracionAgrupacions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralSucursalValoracionAgrupacion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralSucursalValoracionAgrupacions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de GralSucursalCliClientes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralSucursalCliCliente::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralSucursalCliClientes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de GralRutaGeoLocalidadCliCentroRecepcions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralRutaGeoLocalidadCliCentroRecepcion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralRutaGeoLocalidadCliCentroRecepcions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de GralZonaCliClientes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralZonaCliCliente::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralZonaCliClientes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliClienteResumenCuentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliClienteResumenCuenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliClienteResumenCuentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliClienteEstados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliClienteEstado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliClienteEstados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliClienteEstadoVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliClienteEstadoVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliClienteEstadoVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliClienteEstadoCobros relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliClienteEstadoCobro::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliClienteEstadoCobros(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliClienteEstadoCuentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliClienteEstadoCuenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliClienteEstadoCuentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliClienteEstadoSatisfaccions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliClienteEstadoSatisfaccion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliClienteEstadoSatisfaccions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliTelefonos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliTelefono::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliTelefonos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliEmails relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliEmail::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliEmails(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliDomicilios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliDomicilio::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliDomicilios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliClienteCliRubros relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliClienteCliRubro::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliClienteCliRubros(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliCentroRecepcions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliCentroRecepcion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliCentroRecepcions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliCentroPedidos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliCentroPedido::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliCentroPedidos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliMedioDigitals relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliMedioDigital::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliMedioDigitals(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliClienteVtaVendedors relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliClienteVtaVendedor::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliClienteVtaVendedors(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliClienteInsTipoListaPrecios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliClienteInsTipoListaPrecio::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliClienteInsTipoListaPrecios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliClienteVtaPreventistas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliClienteVtaPreventista::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliClienteVtaPreventistas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliClienteVtaCompradors relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliClienteVtaComprador::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliClienteVtaCompradors(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliClienteGralFpAgrupacions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliClienteGralFpAgrupacion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliClienteGralFpAgrupacions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliClienteGralFpCuotas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliClienteGralFpCuota::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliClienteGralFpCuotas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliClienteGralActividads relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliClienteGralActividad::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliClienteGralActividads(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliClienteVtaPuntoVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliClienteVtaPuntoVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliClienteVtaPuntoVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliClienteInfoSifens relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliClienteInfoSifen::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliClienteInfoSifens(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaVendedorValoracions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaVendedorValoracion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaVendedorValoracions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaVendedorValoracionAgrupacions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaVendedorValoracionAgrupacion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaVendedorValoracionAgrupacions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaPresupuestos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaPresupuestos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaTributoExencions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaTributoExencion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaTributoExencions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaNotaCreditos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaNotaCredito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaNotaCreditos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaNotaDebitos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaNotaDebitos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaRecibos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaRecibos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaRemitos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaRemito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaRemitos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaFacturas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaFacturas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteDebes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteDebes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteHabers relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteHabers(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaRemitoAjustes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaRemitoAjuste::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaRemitoAjustes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CatCatalogoCliClientes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CatCatalogoCliCliente::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCatCatalogoCliClientes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliClienteTiendas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliClienteTienda::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliClienteTiendas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliClienteTiendaClaves relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliClienteTiendaClave::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliClienteTiendaClaves(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliClienteTiendaLogins relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliClienteTiendaLogin::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliClienteTiendaLogins(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliClienteTiendaNavegacions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliClienteTiendaNavegacion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliClienteTiendaNavegacions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de TndTiendaBusquedas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(TndTiendaBusqueda::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getTndTiendaBusquedas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrdOrdenTrabajos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrdOrdenTrabajo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrdOrdenTrabajos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarCliCliente(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getCliClientes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = CliCliente::setAplicarFiltrosDeAlcance($criterio);

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
	
		$cliclientes = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $clicliente = new CliCliente();
                    $clicliente->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $clicliente->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$clicliente->setGralTipoPersoneriaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID]);
			$clicliente->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
			$clicliente->setCliTipoClienteId($fila[self::GEN_ATTR_MIN_CLI_TIPO_CLIENTE_ID]);
			$clicliente->setRazonSocial($fila[self::GEN_ATTR_MIN_RAZON_SOCIAL]);
			$clicliente->setGralTipoDocumentoId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID]);
			$clicliente->setCuit($fila[self::GEN_ATTR_MIN_CUIT]);
			$clicliente->setDomicilioLegal($fila[self::GEN_ATTR_MIN_DOMICILIO_LEGAL]);
			$clicliente->setNumeroCasa($fila[self::GEN_ATTR_MIN_NUMERO_CASA]);
			$clicliente->setTelefono($fila[self::GEN_ATTR_MIN_TELEFONO]);
			$clicliente->setTelefonoWhatsapp($fila[self::GEN_ATTR_MIN_TELEFONO_WHATSAPP]);
			$clicliente->setEmail($fila[self::GEN_ATTR_MIN_EMAIL]);
			$clicliente->setCodigoPostal($fila[self::GEN_ATTR_MIN_CODIGO_POSTAL]);
			$clicliente->setGeoLocalidadId($fila[self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID]);
			$clicliente->setGeoZonaId($fila[self::GEN_ATTR_MIN_GEO_ZONA_ID]);
			$clicliente->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$clicliente->setCliGrupoId($fila[self::GEN_ATTR_MIN_CLI_GRUPO_ID]);
			$clicliente->setGralEmpresaTransportadoraId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID]);
			$clicliente->setCliCategoriaId($fila[self::GEN_ATTR_MIN_CLI_CATEGORIA_ID]);
			$clicliente->setCliSubcategoriaId($fila[self::GEN_ATTR_MIN_CLI_SUBCATEGORIA_ID]);
			$clicliente->setLimiteCtacteImporte($fila[self::GEN_ATTR_MIN_LIMITE_CTACTE_IMPORTE]);
			$clicliente->setLimiteCtacteDias($fila[self::GEN_ATTR_MIN_LIMITE_CTACTE_DIAS]);
			$clicliente->setCliClienteTipoGestionId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_GESTION_ID]);
			$clicliente->setCliClientePeriodicidadGestionId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_PERIODICIDAD_GESTION_ID]);
			$clicliente->setCliClienteTipoEstadoId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_ID]);
			$clicliente->setCliClienteTipoEstadoVentaId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_VENTA_ID]);
			$clicliente->setCliClienteTipoEstadoCobroId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_COBRO_ID]);
			$clicliente->setCliClienteTipoEstadoCuentaId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_CUENTA_ID]);
			$clicliente->setCliClienteTipoEstadoSatisfaccionId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_TIPO_ESTADO_SATISFACCION_ID]);
			$clicliente->setIvaExceptuado($fila[self::GEN_ATTR_MIN_IVA_EXCEPTUADO]);
			$clicliente->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$clicliente->setDatosMigracion($fila[self::GEN_ATTR_MIN_DATOS_MIGRACION]);
			$clicliente->setClaves($fila[self::GEN_ATTR_MIN_CLAVES]);
			$clicliente->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$clicliente->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$clicliente->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$clicliente->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$clicliente->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$clicliente->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $cliclientes[] = $clicliente;
		}
		
		return $cliclientes;
	}	
	

	/* Método getCliClientes Habilitados */ 	
	static function getCliClientesHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return CliCliente::getCliClientes($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getCliClientes para listado de Backend */ 	
	static function getCliClientesDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return CliCliente::getCliClientes($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getCliClientesCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = CliCliente::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = CliCliente::getCliClientes($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getCliClientes filtrado para select */ 	
	static function getCliClientesCmbF($paginador = null, $criterio = null){
            $col = CliCliente::getCliClientes($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getCliClientes filtrado por una coleccion de objetos foraneos de GralTipoPersoneria */ 	
	static function getCliClientesXGralTipoPersonerias($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(CliCliente::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addOrden(CliCliente::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = CliCliente::getCliClientes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralTipoPersoneriaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getCliClientes filtrado por una coleccion de objetos foraneos de GralCondicionIva */ 	
	static function getCliClientesXGralCondicionIvas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(CliCliente::GEN_ATTR_GRAL_CONDICION_IVA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addOrden(CliCliente::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = CliCliente::getCliClientes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralCondicionIvaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getCliClientes filtrado por una coleccion de objetos foraneos de CliTipoCliente */ 	
	static function getCliClientesXCliTipoClientes($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(CliCliente::GEN_ATTR_CLI_TIPO_CLIENTE_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addOrden(CliCliente::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = CliCliente::getCliClientes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCliTipoClienteId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getCliClientes filtrado por una coleccion de objetos foraneos de GralTipoDocumento */ 	
	static function getCliClientesXGralTipoDocumentos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(CliCliente::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addOrden(CliCliente::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = CliCliente::getCliClientes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralTipoDocumentoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getCliClientes filtrado por una coleccion de objetos foraneos de GeoLocalidad */ 	
	static function getCliClientesXGeoLocalidads($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(CliCliente::GEN_ATTR_GEO_LOCALIDAD_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addOrden(CliCliente::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = CliCliente::getCliClientes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGeoLocalidadId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getCliClientes filtrado por una coleccion de objetos foraneos de GeoZona */ 	
	static function getCliClientesXGeoZonas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(CliCliente::GEN_ATTR_GEO_ZONA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addOrden(CliCliente::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = CliCliente::getCliClientes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGeoZonaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getCliClientes filtrado por una coleccion de objetos foraneos de CliGrupo */ 	
	static function getCliClientesXCliGrupos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(CliCliente::GEN_ATTR_CLI_GRUPO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addOrden(CliCliente::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = CliCliente::getCliClientes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCliGrupoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getCliClientes filtrado por una coleccion de objetos foraneos de GralEmpresaTransportadora */ 	
	static function getCliClientesXGralEmpresaTransportadoras($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(CliCliente::GEN_ATTR_GRAL_EMPRESA_TRANSPORTADORA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addOrden(CliCliente::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = CliCliente::getCliClientes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralEmpresaTransportadoraId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getCliClientes filtrado por una coleccion de objetos foraneos de CliCategoria */ 	
	static function getCliClientesXCliCategorias($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(CliCliente::GEN_ATTR_CLI_CATEGORIA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addOrden(CliCliente::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = CliCliente::getCliClientes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCliCategoriaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getCliClientes filtrado por una coleccion de objetos foraneos de CliSubcategoria */ 	
	static function getCliClientesXCliSubcategorias($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(CliCliente::GEN_ATTR_CLI_SUBCATEGORIA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addOrden(CliCliente::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = CliCliente::getCliClientes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCliSubcategoriaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getCliClientes filtrado por una coleccion de objetos foraneos de CliClienteTipoGestion */ 	
	static function getCliClientesXCliClienteTipoGestions($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(CliCliente::GEN_ATTR_CLI_CLIENTE_TIPO_GESTION_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addOrden(CliCliente::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = CliCliente::getCliClientes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCliClienteTipoGestionId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getCliClientes filtrado por una coleccion de objetos foraneos de CliClientePeriodicidadGestion */ 	
	static function getCliClientesXCliClientePeriodicidadGestions($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(CliCliente::GEN_ATTR_CLI_CLIENTE_PERIODICIDAD_GESTION_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addOrden(CliCliente::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = CliCliente::getCliClientes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCliClientePeriodicidadGestionId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getCliClientes filtrado por una coleccion de objetos foraneos de CliClienteTipoEstado */ 	
	static function getCliClientesXCliClienteTipoEstados($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(CliCliente::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addOrden(CliCliente::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = CliCliente::getCliClientes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCliClienteTipoEstadoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getCliClientes filtrado por una coleccion de objetos foraneos de CliClienteTipoEstadoVenta */ 	
	static function getCliClientesXCliClienteTipoEstadoVentas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(CliCliente::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_VENTA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addOrden(CliCliente::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = CliCliente::getCliClientes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCliClienteTipoEstadoVentaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getCliClientes filtrado por una coleccion de objetos foraneos de CliClienteTipoEstadoCobro */ 	
	static function getCliClientesXCliClienteTipoEstadoCobros($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(CliCliente::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_COBRO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addOrden(CliCliente::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = CliCliente::getCliClientes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCliClienteTipoEstadoCobroId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getCliClientes filtrado por una coleccion de objetos foraneos de CliClienteTipoEstadoCuenta */ 	
	static function getCliClientesXCliClienteTipoEstadoCuentas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(CliCliente::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_CUENTA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addOrden(CliCliente::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = CliCliente::getCliClientes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCliClienteTipoEstadoCuentaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getCliClientes filtrado por una coleccion de objetos foraneos de CliClienteTipoEstadoSatisfaccion */ 	
	static function getCliClientesXCliClienteTipoEstadoSatisfaccions($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(CliCliente::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_SATISFACCION_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addOrden(CliCliente::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = CliCliente::getCliClientes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCliClienteTipoEstadoSatisfaccionId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'cli_cliente_adm.php';
            $url_gestion = 'cli_cliente_gestion.php';
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
	

	/* Metodo getGralSucursalValoracions */ 	
	public function getGralSucursalValoracions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralSucursalValoracion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralSucursalValoracion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralSucursalValoracion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralSucursalValoracion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralSucursalValoracion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralSucursalValoracion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralSucursalValoracion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralSucursalValoracion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralsucursalvaloracions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralsucursalvaloracion = GralSucursalValoracion::hidratarObjeto($fila);			
                $gralsucursalvaloracions[] = $gralsucursalvaloracion;
            }

            return $gralsucursalvaloracions;
	}	
	

	/* Método getGralSucursalValoracionsBloque para MasInfo */ 	
	public function getGralSucursalValoracionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralSucursalValoracions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralSucursalValoracions Habilitados */ 	
	public function getGralSucursalValoracionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralSucursalValoracions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralSucursalValoracion */ 	
	public function getGralSucursalValoracion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralSucursalValoracions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralSucursalValoracion relacionadas */ 	
	public function deleteGralSucursalValoracions(){
            $obs = $this->getGralSucursalValoracions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralSucursalValoracionsCmb() GralSucursalValoracion relacionadas */ 	
	public function getGralSucursalValoracionsCmb(){
            $c = new Criterio();
            $c->add(GralSucursalValoracion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralSucursalValoracion::GEN_TABLA);
            $c->setCriterios();

            $os = GralSucursalValoracion::getGralSucursalValoracionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralSucursalValoracionAgrupacions (Coleccion) relacionados a traves de GralSucursalValoracion */ 	
	public function getGralSucursalValoracionAgrupacionsXGralSucursalValoracion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralSucursalValoracionAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralSucursalValoracion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralSucursalValoracion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralSucursalValoracionAgrupacion::GEN_TABLA);
            $c->addRealJoin(GralSucursalValoracion::GEN_TABLA, GralSucursalValoracion::GEN_ATTR_GRAL_SUCURSAL_VALORACION_AGRUPACION_ID, GralSucursalValoracionAgrupacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralSucursalValoracionAgrupacion::getGralSucursalValoracionAgrupacions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralSucursalValoracionAgrupacions relacionados a traves de GralSucursalValoracion */ 	
	public function getCantidadGralSucursalValoracionAgrupacionsXGralSucursalValoracion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralSucursalValoracionAgrupacion::GEN_ATTR_ID);
            if($estado){
                $c->add(GralSucursalValoracionAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralSucursalValoracion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralSucursalValoracion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralSucursalValoracionAgrupacion::GEN_TABLA);
            $c->addRealJoin(GralSucursalValoracion::GEN_TABLA, GralSucursalValoracion::GEN_ATTR_GRAL_SUCURSAL_VALORACION_AGRUPACION_ID, GralSucursalValoracionAgrupacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralSucursalValoracionAgrupacion::getGralSucursalValoracionAgrupacions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralSucursalValoracionAgrupacion (Objeto) relacionado a traves de GralSucursalValoracion */ 	
	public function getGralSucursalValoracionAgrupacionXGralSucursalValoracion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralSucursalValoracionAgrupacionsXGralSucursalValoracion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getGralSucursalValoracionAgrupacions */ 	
	public function getGralSucursalValoracionAgrupacions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralSucursalValoracionAgrupacion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralSucursalValoracionAgrupacion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralSucursalValoracionAgrupacion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralSucursalValoracionAgrupacion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralSucursalValoracionAgrupacion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralSucursalValoracionAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralSucursalValoracionAgrupacion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralSucursalValoracionAgrupacion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralsucursalvaloracionagrupacions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralsucursalvaloracionagrupacion = GralSucursalValoracionAgrupacion::hidratarObjeto($fila);			
                $gralsucursalvaloracionagrupacions[] = $gralsucursalvaloracionagrupacion;
            }

            return $gralsucursalvaloracionagrupacions;
	}	
	

	/* Método getGralSucursalValoracionAgrupacionsBloque para MasInfo */ 	
	public function getGralSucursalValoracionAgrupacionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralSucursalValoracionAgrupacions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralSucursalValoracionAgrupacions Habilitados */ 	
	public function getGralSucursalValoracionAgrupacionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralSucursalValoracionAgrupacions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralSucursalValoracionAgrupacion */ 	
	public function getGralSucursalValoracionAgrupacion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralSucursalValoracionAgrupacions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralSucursalValoracionAgrupacion relacionadas */ 	
	public function deleteGralSucursalValoracionAgrupacions(){
            $obs = $this->getGralSucursalValoracionAgrupacions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralSucursalValoracionAgrupacionsCmb() GralSucursalValoracionAgrupacion relacionadas */ 	
	public function getGralSucursalValoracionAgrupacionsCmb(){
            $c = new Criterio();
            $c->add(GralSucursalValoracionAgrupacion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralSucursalValoracionAgrupacion::GEN_TABLA);
            $c->setCriterios();

            $os = GralSucursalValoracionAgrupacion::getGralSucursalValoracionAgrupacionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralSucursals (Coleccion) relacionados a traves de GralSucursalValoracionAgrupacion */ 	
	public function getGralSucursalsXGralSucursalValoracionAgrupacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralSucursal::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralSucursalValoracionAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralSucursalValoracionAgrupacion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralSucursal::GEN_TABLA);
            $c->addRealJoin(GralSucursalValoracionAgrupacion::GEN_TABLA, GralSucursalValoracionAgrupacion::GEN_ATTR_GRAL_SUCURSAL_ID, GralSucursal::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralSucursal::getGralSucursals($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralSucursals relacionados a traves de GralSucursalValoracionAgrupacion */ 	
	public function getCantidadGralSucursalsXGralSucursalValoracionAgrupacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralSucursal::GEN_ATTR_ID);
            if($estado){
                $c->add(GralSucursal::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralSucursalValoracionAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralSucursalValoracionAgrupacion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralSucursal::GEN_TABLA);
            $c->addRealJoin(GralSucursalValoracionAgrupacion::GEN_TABLA, GralSucursalValoracionAgrupacion::GEN_ATTR_GRAL_SUCURSAL_ID, GralSucursal::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralSucursal::getGralSucursals($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralSucursal (Objeto) relacionado a traves de GralSucursalValoracionAgrupacion */ 	
	public function getGralSucursalXGralSucursalValoracionAgrupacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralSucursalsXGralSucursalValoracionAgrupacion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getGralSucursalCliClientes */ 	
	public function getGralSucursalCliClientes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralSucursalCliCliente::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralSucursalCliCliente::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralSucursalCliCliente::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralSucursalCliCliente::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralSucursalCliCliente::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralSucursalCliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralSucursalCliCliente::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralSucursalCliCliente::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralsucursalcliclientes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralsucursalclicliente = GralSucursalCliCliente::hidratarObjeto($fila);			
                $gralsucursalcliclientes[] = $gralsucursalclicliente;
            }

            return $gralsucursalcliclientes;
	}	
	

	/* Método getGralSucursalCliClientesBloque para MasInfo */ 	
	public function getGralSucursalCliClientesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralSucursalCliClientes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralSucursalCliClientes Habilitados */ 	
	public function getGralSucursalCliClientesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralSucursalCliClientes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralSucursalCliCliente */ 	
	public function getGralSucursalCliCliente($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralSucursalCliClientes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralSucursalCliCliente relacionadas */ 	
	public function deleteGralSucursalCliClientes(){
            $obs = $this->getGralSucursalCliClientes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralSucursalCliClientesCmb() GralSucursalCliCliente relacionadas */ 	
	public function getGralSucursalCliClientesCmb(){
            $c = new Criterio();
            $c->add(GralSucursalCliCliente::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralSucursalCliCliente::GEN_TABLA);
            $c->setCriterios();

            $os = GralSucursalCliCliente::getGralSucursalCliClientesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralSucursals (Coleccion) relacionados a traves de GralSucursalCliCliente */ 	
	public function getGralSucursalsXGralSucursalCliCliente($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralSucursal::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralSucursalCliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralSucursalCliCliente::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralSucursal::GEN_TABLA);
            $c->addRealJoin(GralSucursalCliCliente::GEN_TABLA, GralSucursalCliCliente::GEN_ATTR_GRAL_SUCURSAL_ID, GralSucursal::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralSucursal::getGralSucursals($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralSucursals relacionados a traves de GralSucursalCliCliente */ 	
	public function getCantidadGralSucursalsXGralSucursalCliCliente($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralSucursal::GEN_ATTR_ID);
            if($estado){
                $c->add(GralSucursal::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralSucursalCliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralSucursalCliCliente::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralSucursal::GEN_TABLA);
            $c->addRealJoin(GralSucursalCliCliente::GEN_TABLA, GralSucursalCliCliente::GEN_ATTR_GRAL_SUCURSAL_ID, GralSucursal::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralSucursal::getGralSucursals($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralSucursal (Objeto) relacionado a traves de GralSucursalCliCliente */ 	
	public function getGralSucursalXGralSucursalCliCliente($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralSucursalsXGralSucursalCliCliente($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getGralRutaGeoLocalidadCliCentroRecepcions */ 	
	public function getGralRutaGeoLocalidadCliCentroRecepcions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralRutaGeoLocalidadCliCentroRecepcion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralRutaGeoLocalidadCliCentroRecepcion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralRutaGeoLocalidadCliCentroRecepcion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralRutaGeoLocalidadCliCentroRecepcion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralrutageolocalidadclicentrorecepcions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralrutageolocalidadclicentrorecepcion = GralRutaGeoLocalidadCliCentroRecepcion::hidratarObjeto($fila);			
                $gralrutageolocalidadclicentrorecepcions[] = $gralrutageolocalidadclicentrorecepcion;
            }

            return $gralrutageolocalidadclicentrorecepcions;
	}	
	

	/* Método getGralRutaGeoLocalidadCliCentroRecepcionsBloque para MasInfo */ 	
	public function getGralRutaGeoLocalidadCliCentroRecepcionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralRutaGeoLocalidadCliCentroRecepcions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralRutaGeoLocalidadCliCentroRecepcions Habilitados */ 	
	public function getGralRutaGeoLocalidadCliCentroRecepcionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralRutaGeoLocalidadCliCentroRecepcions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralRutaGeoLocalidadCliCentroRecepcion */ 	
	public function getGralRutaGeoLocalidadCliCentroRecepcion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralRutaGeoLocalidadCliCentroRecepcions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralRutaGeoLocalidadCliCentroRecepcion relacionadas */ 	
	public function deleteGralRutaGeoLocalidadCliCentroRecepcions(){
            $obs = $this->getGralRutaGeoLocalidadCliCentroRecepcions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralRutaGeoLocalidadCliCentroRecepcionsCmb() GralRutaGeoLocalidadCliCentroRecepcion relacionadas */ 	
	public function getGralRutaGeoLocalidadCliCentroRecepcionsCmb(){
            $c = new Criterio();
            $c->add(GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralRutaGeoLocalidadCliCentroRecepcion::GEN_TABLA);
            $c->setCriterios();

            $os = GralRutaGeoLocalidadCliCentroRecepcion::getGralRutaGeoLocalidadCliCentroRecepcionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralRutas (Coleccion) relacionados a traves de GralRutaGeoLocalidadCliCentroRecepcion */ 	
	public function getGralRutasXGralRutaGeoLocalidadCliCentroRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralRuta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralRuta::GEN_TABLA);
            $c->addRealJoin(GralRutaGeoLocalidadCliCentroRecepcion::GEN_TABLA, GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_GRAL_RUTA_ID, GralRuta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralRuta::getGralRutas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralRutas relacionados a traves de GralRutaGeoLocalidadCliCentroRecepcion */ 	
	public function getCantidadGralRutasXGralRutaGeoLocalidadCliCentroRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralRuta::GEN_ATTR_ID);
            if($estado){
                $c->add(GralRuta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralRuta::GEN_TABLA);
            $c->addRealJoin(GralRutaGeoLocalidadCliCentroRecepcion::GEN_TABLA, GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_GRAL_RUTA_ID, GralRuta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralRuta::getGralRutas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralRuta (Objeto) relacionado a traves de GralRutaGeoLocalidadCliCentroRecepcion */ 	
	public function getGralRutaXGralRutaGeoLocalidadCliCentroRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralRutasXGralRutaGeoLocalidadCliCentroRecepcion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getGralZonaCliClientes */ 	
	public function getGralZonaCliClientes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralZonaCliCliente::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralZonaCliCliente::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralZonaCliCliente::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralZonaCliCliente::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralZonaCliCliente::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralZonaCliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralZonaCliCliente::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralZonaCliCliente::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralzonacliclientes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralzonaclicliente = GralZonaCliCliente::hidratarObjeto($fila);			
                $gralzonacliclientes[] = $gralzonaclicliente;
            }

            return $gralzonacliclientes;
	}	
	

	/* Método getGralZonaCliClientesBloque para MasInfo */ 	
	public function getGralZonaCliClientesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralZonaCliClientes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralZonaCliClientes Habilitados */ 	
	public function getGralZonaCliClientesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralZonaCliClientes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralZonaCliCliente */ 	
	public function getGralZonaCliCliente($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralZonaCliClientes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralZonaCliCliente relacionadas */ 	
	public function deleteGralZonaCliClientes(){
            $obs = $this->getGralZonaCliClientes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralZonaCliClientesCmb() GralZonaCliCliente relacionadas */ 	
	public function getGralZonaCliClientesCmb(){
            $c = new Criterio();
            $c->add(GralZonaCliCliente::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralZonaCliCliente::GEN_TABLA);
            $c->setCriterios();

            $os = GralZonaCliCliente::getGralZonaCliClientesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralZonas (Coleccion) relacionados a traves de GralZonaCliCliente */ 	
	public function getGralZonasXGralZonaCliCliente($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralZona::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralZonaCliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralZonaCliCliente::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralZona::GEN_TABLA);
            $c->addRealJoin(GralZonaCliCliente::GEN_TABLA, GralZonaCliCliente::GEN_ATTR_GRAL_ZONA_ID, GralZona::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralZona::getGralZonas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralZonas relacionados a traves de GralZonaCliCliente */ 	
	public function getCantidadGralZonasXGralZonaCliCliente($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralZona::GEN_ATTR_ID);
            if($estado){
                $c->add(GralZona::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralZonaCliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralZonaCliCliente::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralZona::GEN_TABLA);
            $c->addRealJoin(GralZonaCliCliente::GEN_TABLA, GralZonaCliCliente::GEN_ATTR_GRAL_ZONA_ID, GralZona::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralZona::getGralZonas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralZona (Objeto) relacionado a traves de GralZonaCliCliente */ 	
	public function getGralZonaXGralZonaCliCliente($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralZonasXGralZonaCliCliente($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliClienteResumenCuentas */ 	
	public function getCliClienteResumenCuentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliClienteResumenCuenta::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliClienteResumenCuenta::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliClienteResumenCuenta::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliClienteResumenCuenta::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliClienteResumenCuenta::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliClienteResumenCuenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliClienteResumenCuenta::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliClienteResumenCuenta::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cliclienteresumencuentas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cliclienteresumencuenta = CliClienteResumenCuenta::hidratarObjeto($fila);			
                $cliclienteresumencuentas[] = $cliclienteresumencuenta;
            }

            return $cliclienteresumencuentas;
	}	
	

	/* Método getCliClienteResumenCuentasBloque para MasInfo */ 	
	public function getCliClienteResumenCuentasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliClienteResumenCuentas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliClienteResumenCuentas Habilitados */ 	
	public function getCliClienteResumenCuentasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliClienteResumenCuentas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliClienteResumenCuenta */ 	
	public function getCliClienteResumenCuenta($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliClienteResumenCuentas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliClienteResumenCuenta relacionadas */ 	
	public function deleteCliClienteResumenCuentas(){
            $obs = $this->getCliClienteResumenCuentas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliClienteResumenCuentasCmb() CliClienteResumenCuenta relacionadas */ 	
	public function getCliClienteResumenCuentasCmb(){
            $c = new Criterio();
            $c->add(CliClienteResumenCuenta::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteResumenCuenta::GEN_TABLA);
            $c->setCriterios();

            $os = CliClienteResumenCuenta::getCliClienteResumenCuentasCmbF(null, $c);
            return $os;
	}

	/* Metodo getCliClienteEstados */ 	
	public function getCliClienteEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliClienteEstado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliClienteEstado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliClienteEstado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliClienteEstado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliClienteEstado::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliClienteEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliClienteEstado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliClienteEstado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cliclienteestados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cliclienteestado = CliClienteEstado::hidratarObjeto($fila);			
                $cliclienteestados[] = $cliclienteestado;
            }

            return $cliclienteestados;
	}	
	

	/* Método getCliClienteEstadosBloque para MasInfo */ 	
	public function getCliClienteEstadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliClienteEstados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliClienteEstados Habilitados */ 	
	public function getCliClienteEstadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliClienteEstados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliClienteEstado */ 	
	public function getCliClienteEstado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliClienteEstados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliClienteEstado relacionadas */ 	
	public function deleteCliClienteEstados(){
            $obs = $this->getCliClienteEstados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliClienteEstadosCmb() CliClienteEstado relacionadas */ 	
	public function getCliClienteEstadosCmb(){
            $c = new Criterio();
            $c->add(CliClienteEstado::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteEstado::GEN_TABLA);
            $c->setCriterios();

            $os = CliClienteEstado::getCliClienteEstadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClienteTipoEstados (Coleccion) relacionados a traves de CliClienteEstado */ 	
	public function getCliClienteTipoEstadosXCliClienteEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliClienteTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteEstado::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteTipoEstado::GEN_TABLA);
            $c->addRealJoin(CliClienteEstado::GEN_TABLA, CliClienteEstado::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_ID, CliClienteTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliClienteTipoEstado::getCliClienteTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClienteTipoEstados relacionados a traves de CliClienteEstado */ 	
	public function getCantidadCliClienteTipoEstadosXCliClienteEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliClienteTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(CliClienteTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteEstado::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteTipoEstado::GEN_TABLA);
            $c->addRealJoin(CliClienteEstado::GEN_TABLA, CliClienteEstado::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_ID, CliClienteTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliClienteTipoEstado::getCliClienteTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliClienteTipoEstado (Objeto) relacionado a traves de CliClienteEstado */ 	
	public function getCliClienteTipoEstadoXCliClienteEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClienteTipoEstadosXCliClienteEstado($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliClienteEstadoVentas */ 	
	public function getCliClienteEstadoVentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliClienteEstadoVenta::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliClienteEstadoVenta::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliClienteEstadoVenta::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliClienteEstadoVenta::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliClienteEstadoVenta::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliClienteEstadoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliClienteEstadoVenta::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliClienteEstadoVenta::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cliclienteestadoventas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cliclienteestadoventa = CliClienteEstadoVenta::hidratarObjeto($fila);			
                $cliclienteestadoventas[] = $cliclienteestadoventa;
            }

            return $cliclienteestadoventas;
	}	
	

	/* Método getCliClienteEstadoVentasBloque para MasInfo */ 	
	public function getCliClienteEstadoVentasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliClienteEstadoVentas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliClienteEstadoVentas Habilitados */ 	
	public function getCliClienteEstadoVentasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliClienteEstadoVentas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliClienteEstadoVenta */ 	
	public function getCliClienteEstadoVenta($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliClienteEstadoVentas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliClienteEstadoVenta relacionadas */ 	
	public function deleteCliClienteEstadoVentas(){
            $obs = $this->getCliClienteEstadoVentas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliClienteEstadoVentasCmb() CliClienteEstadoVenta relacionadas */ 	
	public function getCliClienteEstadoVentasCmb(){
            $c = new Criterio();
            $c->add(CliClienteEstadoVenta::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteEstadoVenta::GEN_TABLA);
            $c->setCriterios();

            $os = CliClienteEstadoVenta::getCliClienteEstadoVentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClienteTipoEstadoVentas (Coleccion) relacionados a traves de CliClienteEstadoVenta */ 	
	public function getCliClienteTipoEstadoVentasXCliClienteEstadoVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliClienteTipoEstadoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteEstadoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteEstadoVenta::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteTipoEstadoVenta::GEN_TABLA);
            $c->addRealJoin(CliClienteEstadoVenta::GEN_TABLA, CliClienteEstadoVenta::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_VENTA_ID, CliClienteTipoEstadoVenta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliClienteTipoEstadoVenta::getCliClienteTipoEstadoVentas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClienteTipoEstadoVentas relacionados a traves de CliClienteEstadoVenta */ 	
	public function getCantidadCliClienteTipoEstadoVentasXCliClienteEstadoVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliClienteTipoEstadoVenta::GEN_ATTR_ID);
            if($estado){
                $c->add(CliClienteTipoEstadoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteEstadoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteEstadoVenta::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteTipoEstadoVenta::GEN_TABLA);
            $c->addRealJoin(CliClienteEstadoVenta::GEN_TABLA, CliClienteEstadoVenta::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_VENTA_ID, CliClienteTipoEstadoVenta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliClienteTipoEstadoVenta::getCliClienteTipoEstadoVentas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliClienteTipoEstadoVenta (Objeto) relacionado a traves de CliClienteEstadoVenta */ 	
	public function getCliClienteTipoEstadoVentaXCliClienteEstadoVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClienteTipoEstadoVentasXCliClienteEstadoVenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliClienteEstadoCobros */ 	
	public function getCliClienteEstadoCobros($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliClienteEstadoCobro::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliClienteEstadoCobro::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliClienteEstadoCobro::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliClienteEstadoCobro::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliClienteEstadoCobro::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliClienteEstadoCobro::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliClienteEstadoCobro::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliClienteEstadoCobro::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cliclienteestadocobros = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cliclienteestadocobro = CliClienteEstadoCobro::hidratarObjeto($fila);			
                $cliclienteestadocobros[] = $cliclienteestadocobro;
            }

            return $cliclienteestadocobros;
	}	
	

	/* Método getCliClienteEstadoCobrosBloque para MasInfo */ 	
	public function getCliClienteEstadoCobrosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliClienteEstadoCobros($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliClienteEstadoCobros Habilitados */ 	
	public function getCliClienteEstadoCobrosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliClienteEstadoCobros($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliClienteEstadoCobro */ 	
	public function getCliClienteEstadoCobro($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliClienteEstadoCobros($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliClienteEstadoCobro relacionadas */ 	
	public function deleteCliClienteEstadoCobros(){
            $obs = $this->getCliClienteEstadoCobros();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliClienteEstadoCobrosCmb() CliClienteEstadoCobro relacionadas */ 	
	public function getCliClienteEstadoCobrosCmb(){
            $c = new Criterio();
            $c->add(CliClienteEstadoCobro::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteEstadoCobro::GEN_TABLA);
            $c->setCriterios();

            $os = CliClienteEstadoCobro::getCliClienteEstadoCobrosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClienteTipoEstadoCobros (Coleccion) relacionados a traves de CliClienteEstadoCobro */ 	
	public function getCliClienteTipoEstadoCobrosXCliClienteEstadoCobro($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliClienteTipoEstadoCobro::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteEstadoCobro::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteEstadoCobro::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteTipoEstadoCobro::GEN_TABLA);
            $c->addRealJoin(CliClienteEstadoCobro::GEN_TABLA, CliClienteEstadoCobro::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_COBRO_ID, CliClienteTipoEstadoCobro::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliClienteTipoEstadoCobro::getCliClienteTipoEstadoCobros($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClienteTipoEstadoCobros relacionados a traves de CliClienteEstadoCobro */ 	
	public function getCantidadCliClienteTipoEstadoCobrosXCliClienteEstadoCobro($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliClienteTipoEstadoCobro::GEN_ATTR_ID);
            if($estado){
                $c->add(CliClienteTipoEstadoCobro::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteEstadoCobro::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteEstadoCobro::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteTipoEstadoCobro::GEN_TABLA);
            $c->addRealJoin(CliClienteEstadoCobro::GEN_TABLA, CliClienteEstadoCobro::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_COBRO_ID, CliClienteTipoEstadoCobro::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliClienteTipoEstadoCobro::getCliClienteTipoEstadoCobros($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliClienteTipoEstadoCobro (Objeto) relacionado a traves de CliClienteEstadoCobro */ 	
	public function getCliClienteTipoEstadoCobroXCliClienteEstadoCobro($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClienteTipoEstadoCobrosXCliClienteEstadoCobro($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliClienteEstadoCuentas */ 	
	public function getCliClienteEstadoCuentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliClienteEstadoCuenta::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliClienteEstadoCuenta::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliClienteEstadoCuenta::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliClienteEstadoCuenta::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliClienteEstadoCuenta::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliClienteEstadoCuenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliClienteEstadoCuenta::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliClienteEstadoCuenta::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cliclienteestadocuentas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cliclienteestadocuenta = CliClienteEstadoCuenta::hidratarObjeto($fila);			
                $cliclienteestadocuentas[] = $cliclienteestadocuenta;
            }

            return $cliclienteestadocuentas;
	}	
	

	/* Método getCliClienteEstadoCuentasBloque para MasInfo */ 	
	public function getCliClienteEstadoCuentasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliClienteEstadoCuentas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliClienteEstadoCuentas Habilitados */ 	
	public function getCliClienteEstadoCuentasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliClienteEstadoCuentas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliClienteEstadoCuenta */ 	
	public function getCliClienteEstadoCuenta($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliClienteEstadoCuentas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliClienteEstadoCuenta relacionadas */ 	
	public function deleteCliClienteEstadoCuentas(){
            $obs = $this->getCliClienteEstadoCuentas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliClienteEstadoCuentasCmb() CliClienteEstadoCuenta relacionadas */ 	
	public function getCliClienteEstadoCuentasCmb(){
            $c = new Criterio();
            $c->add(CliClienteEstadoCuenta::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteEstadoCuenta::GEN_TABLA);
            $c->setCriterios();

            $os = CliClienteEstadoCuenta::getCliClienteEstadoCuentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClienteTipoEstadoCuentas (Coleccion) relacionados a traves de CliClienteEstadoCuenta */ 	
	public function getCliClienteTipoEstadoCuentasXCliClienteEstadoCuenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliClienteTipoEstadoCuenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteEstadoCuenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteEstadoCuenta::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteTipoEstadoCuenta::GEN_TABLA);
            $c->addRealJoin(CliClienteEstadoCuenta::GEN_TABLA, CliClienteEstadoCuenta::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_CUENTA_ID, CliClienteTipoEstadoCuenta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliClienteTipoEstadoCuenta::getCliClienteTipoEstadoCuentas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClienteTipoEstadoCuentas relacionados a traves de CliClienteEstadoCuenta */ 	
	public function getCantidadCliClienteTipoEstadoCuentasXCliClienteEstadoCuenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliClienteTipoEstadoCuenta::GEN_ATTR_ID);
            if($estado){
                $c->add(CliClienteTipoEstadoCuenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteEstadoCuenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteEstadoCuenta::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteTipoEstadoCuenta::GEN_TABLA);
            $c->addRealJoin(CliClienteEstadoCuenta::GEN_TABLA, CliClienteEstadoCuenta::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_CUENTA_ID, CliClienteTipoEstadoCuenta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliClienteTipoEstadoCuenta::getCliClienteTipoEstadoCuentas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliClienteTipoEstadoCuenta (Objeto) relacionado a traves de CliClienteEstadoCuenta */ 	
	public function getCliClienteTipoEstadoCuentaXCliClienteEstadoCuenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClienteTipoEstadoCuentasXCliClienteEstadoCuenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliClienteEstadoSatisfaccions */ 	
	public function getCliClienteEstadoSatisfaccions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliClienteEstadoSatisfaccion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliClienteEstadoSatisfaccion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliClienteEstadoSatisfaccion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliClienteEstadoSatisfaccion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliClienteEstadoSatisfaccion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliClienteEstadoSatisfaccion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliClienteEstadoSatisfaccion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliClienteEstadoSatisfaccion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cliclienteestadosatisfaccions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cliclienteestadosatisfaccion = CliClienteEstadoSatisfaccion::hidratarObjeto($fila);			
                $cliclienteestadosatisfaccions[] = $cliclienteestadosatisfaccion;
            }

            return $cliclienteestadosatisfaccions;
	}	
	

	/* Método getCliClienteEstadoSatisfaccionsBloque para MasInfo */ 	
	public function getCliClienteEstadoSatisfaccionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliClienteEstadoSatisfaccions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliClienteEstadoSatisfaccions Habilitados */ 	
	public function getCliClienteEstadoSatisfaccionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliClienteEstadoSatisfaccions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliClienteEstadoSatisfaccion */ 	
	public function getCliClienteEstadoSatisfaccion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliClienteEstadoSatisfaccions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliClienteEstadoSatisfaccion relacionadas */ 	
	public function deleteCliClienteEstadoSatisfaccions(){
            $obs = $this->getCliClienteEstadoSatisfaccions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliClienteEstadoSatisfaccionsCmb() CliClienteEstadoSatisfaccion relacionadas */ 	
	public function getCliClienteEstadoSatisfaccionsCmb(){
            $c = new Criterio();
            $c->add(CliClienteEstadoSatisfaccion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteEstadoSatisfaccion::GEN_TABLA);
            $c->setCriterios();

            $os = CliClienteEstadoSatisfaccion::getCliClienteEstadoSatisfaccionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClienteTipoEstadoSatisfaccions (Coleccion) relacionados a traves de CliClienteEstadoSatisfaccion */ 	
	public function getCliClienteTipoEstadoSatisfaccionsXCliClienteEstadoSatisfaccion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliClienteTipoEstadoSatisfaccion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteEstadoSatisfaccion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteEstadoSatisfaccion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteTipoEstadoSatisfaccion::GEN_TABLA);
            $c->addRealJoin(CliClienteEstadoSatisfaccion::GEN_TABLA, CliClienteEstadoSatisfaccion::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_SATISFACCION_ID, CliClienteTipoEstadoSatisfaccion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliClienteTipoEstadoSatisfaccion::getCliClienteTipoEstadoSatisfaccions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClienteTipoEstadoSatisfaccions relacionados a traves de CliClienteEstadoSatisfaccion */ 	
	public function getCantidadCliClienteTipoEstadoSatisfaccionsXCliClienteEstadoSatisfaccion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliClienteTipoEstadoSatisfaccion::GEN_ATTR_ID);
            if($estado){
                $c->add(CliClienteTipoEstadoSatisfaccion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteEstadoSatisfaccion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteEstadoSatisfaccion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteTipoEstadoSatisfaccion::GEN_TABLA);
            $c->addRealJoin(CliClienteEstadoSatisfaccion::GEN_TABLA, CliClienteEstadoSatisfaccion::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_SATISFACCION_ID, CliClienteTipoEstadoSatisfaccion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliClienteTipoEstadoSatisfaccion::getCliClienteTipoEstadoSatisfaccions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliClienteTipoEstadoSatisfaccion (Objeto) relacionado a traves de CliClienteEstadoSatisfaccion */ 	
	public function getCliClienteTipoEstadoSatisfaccionXCliClienteEstadoSatisfaccion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClienteTipoEstadoSatisfaccionsXCliClienteEstadoSatisfaccion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliTelefonos */ 	
	public function getCliTelefonos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliTelefono::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliTelefono::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliTelefono::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliTelefono::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliTelefono::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliTelefono::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliTelefono::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliTelefono::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $clitelefonos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $clitelefono = CliTelefono::hidratarObjeto($fila);			
                $clitelefonos[] = $clitelefono;
            }

            return $clitelefonos;
	}	
	

	/* Método getCliTelefonosBloque para MasInfo */ 	
	public function getCliTelefonosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliTelefonos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliTelefonos Habilitados */ 	
	public function getCliTelefonosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliTelefonos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliTelefono */ 	
	public function getCliTelefono($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliTelefonos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliTelefono relacionadas */ 	
	public function deleteCliTelefonos(){
            $obs = $this->getCliTelefonos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliTelefonosCmb() CliTelefono relacionadas */ 	
	public function getCliTelefonosCmb(){
            $c = new Criterio();
            $c->add(CliTelefono::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliTelefono::GEN_TABLA);
            $c->setCriterios();

            $os = CliTelefono::getCliTelefonosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliTelefonoTipos (Coleccion) relacionados a traves de CliTelefono */ 	
	public function getCliTelefonoTiposXCliTelefono($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliTelefonoTipo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliTelefono::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliTelefono::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliTelefonoTipo::GEN_TABLA);
            $c->addRealJoin(CliTelefono::GEN_TABLA, CliTelefono::GEN_ATTR_CLI_TELEFONO_TIPO_ID, CliTelefonoTipo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliTelefonoTipo::getCliTelefonoTipos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliTelefonoTipos relacionados a traves de CliTelefono */ 	
	public function getCantidadCliTelefonoTiposXCliTelefono($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliTelefonoTipo::GEN_ATTR_ID);
            if($estado){
                $c->add(CliTelefonoTipo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliTelefono::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliTelefono::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliTelefonoTipo::GEN_TABLA);
            $c->addRealJoin(CliTelefono::GEN_TABLA, CliTelefono::GEN_ATTR_CLI_TELEFONO_TIPO_ID, CliTelefonoTipo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliTelefonoTipo::getCliTelefonoTipos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliTelefonoTipo (Objeto) relacionado a traves de CliTelefono */ 	
	public function getCliTelefonoTipoXCliTelefono($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliTelefonoTiposXCliTelefono($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliEmails */ 	
	public function getCliEmails($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliEmail::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliEmail::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliEmail::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliEmail::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliEmail::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliEmail::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliEmail::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliEmail::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cliemails = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cliemail = CliEmail::hidratarObjeto($fila);			
                $cliemails[] = $cliemail;
            }

            return $cliemails;
	}	
	

	/* Método getCliEmailsBloque para MasInfo */ 	
	public function getCliEmailsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliEmails($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliEmails Habilitados */ 	
	public function getCliEmailsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliEmails($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliEmail */ 	
	public function getCliEmail($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliEmails($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliEmail relacionadas */ 	
	public function deleteCliEmails(){
            $obs = $this->getCliEmails();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliEmailsCmb() CliEmail relacionadas */ 	
	public function getCliEmailsCmb(){
            $c = new Criterio();
            $c->add(CliEmail::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliEmail::GEN_TABLA);
            $c->setCriterios();

            $os = CliEmail::getCliEmailsCmbF(null, $c);
            return $os;
	}

	/* Metodo getCliDomicilios */ 	
	public function getCliDomicilios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliDomicilio::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliDomicilio::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliDomicilio::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliDomicilio::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliDomicilio::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliDomicilio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliDomicilio::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliDomicilio::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $clidomicilios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $clidomicilio = CliDomicilio::hidratarObjeto($fila);			
                $clidomicilios[] = $clidomicilio;
            }

            return $clidomicilios;
	}	
	

	/* Método getCliDomiciliosBloque para MasInfo */ 	
	public function getCliDomiciliosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliDomicilios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliDomicilios Habilitados */ 	
	public function getCliDomiciliosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliDomicilios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliDomicilio */ 	
	public function getCliDomicilio($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliDomicilios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliDomicilio relacionadas */ 	
	public function deleteCliDomicilios(){
            $obs = $this->getCliDomicilios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliDomiciliosCmb() CliDomicilio relacionadas */ 	
	public function getCliDomiciliosCmb(){
            $c = new Criterio();
            $c->add(CliDomicilio::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliDomicilio::GEN_TABLA);
            $c->setCriterios();

            $os = CliDomicilio::getCliDomiciliosCmbF(null, $c);
            return $os;
	}

	/* Metodo getCliClienteCliRubros */ 	
	public function getCliClienteCliRubros($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliClienteCliRubro::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliClienteCliRubro::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliClienteCliRubro::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliClienteCliRubro::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliClienteCliRubro::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliClienteCliRubro::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliClienteCliRubro::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cliclienteclirubros = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cliclienteclirubro = CliClienteCliRubro::hidratarObjeto($fila);			
                $cliclienteclirubros[] = $cliclienteclirubro;
            }

            return $cliclienteclirubros;
	}	
	

	/* Método getCliClienteCliRubrosBloque para MasInfo */ 	
	public function getCliClienteCliRubrosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliClienteCliRubros($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliClienteCliRubros Habilitados */ 	
	public function getCliClienteCliRubrosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliClienteCliRubros($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliClienteCliRubro */ 	
	public function getCliClienteCliRubro($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliClienteCliRubros($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliClienteCliRubro relacionadas */ 	
	public function deleteCliClienteCliRubros(){
            $obs = $this->getCliClienteCliRubros();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliClienteCliRubrosCmb() CliClienteCliRubro relacionadas */ 	
	public function getCliClienteCliRubrosCmb(){
            $c = new Criterio();
            $c->add(CliClienteCliRubro::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteCliRubro::GEN_TABLA);
            $c->setCriterios();

            $os = CliClienteCliRubro::getCliClienteCliRubrosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliRubros (Coleccion) relacionados a traves de CliClienteCliRubro */ 	
	public function getCliRubrosXCliClienteCliRubro($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliRubro::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteCliRubro::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteCliRubro::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliRubro::GEN_TABLA);
            $c->addRealJoin(CliClienteCliRubro::GEN_TABLA, CliClienteCliRubro::GEN_ATTR_CLI_RUBRO_ID, CliRubro::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliRubro::getCliRubros($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliRubros relacionados a traves de CliClienteCliRubro */ 	
	public function getCantidadCliRubrosXCliClienteCliRubro($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliRubro::GEN_ATTR_ID);
            if($estado){
                $c->add(CliRubro::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteCliRubro::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteCliRubro::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliRubro::GEN_TABLA);
            $c->addRealJoin(CliClienteCliRubro::GEN_TABLA, CliClienteCliRubro::GEN_ATTR_CLI_RUBRO_ID, CliRubro::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliRubro::getCliRubros($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliRubro (Objeto) relacionado a traves de CliClienteCliRubro */ 	
	public function getCliRubroXCliClienteCliRubro($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliRubrosXCliClienteCliRubro($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliCentroRecepcions */ 	
	public function getCliCentroRecepcions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliCentroRecepcion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliCentroRecepcion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliCentroRecepcion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliCentroRecepcion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliCentroRecepcion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliCentroRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliCentroRecepcion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliCentroRecepcion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $clicentrorecepcions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $clicentrorecepcion = CliCentroRecepcion::hidratarObjeto($fila);			
                $clicentrorecepcions[] = $clicentrorecepcion;
            }

            return $clicentrorecepcions;
	}	
	

	/* Método getCliCentroRecepcionsBloque para MasInfo */ 	
	public function getCliCentroRecepcionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliCentroRecepcions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliCentroRecepcions Habilitados */ 	
	public function getCliCentroRecepcionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliCentroRecepcions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliCentroRecepcion */ 	
	public function getCliCentroRecepcion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliCentroRecepcions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliCentroRecepcion relacionadas */ 	
	public function deleteCliCentroRecepcions(){
            $obs = $this->getCliCentroRecepcions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliCentroRecepcionsCmb() CliCentroRecepcion relacionadas */ 	
	public function getCliCentroRecepcionsCmb(){
            $c = new Criterio();
            $c->add(CliCentroRecepcion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCentroRecepcion::GEN_TABLA);
            $c->setCriterios();

            $os = CliCentroRecepcion::getCliCentroRecepcionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GeoLocalidads (Coleccion) relacionados a traves de CliCentroRecepcion */ 	
	public function getGeoLocalidadsXCliCentroRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GeoLocalidad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliCentroRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliCentroRecepcion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GeoLocalidad::GEN_TABLA);
            $c->addRealJoin(CliCentroRecepcion::GEN_TABLA, CliCentroRecepcion::GEN_ATTR_GEO_LOCALIDAD_ID, GeoLocalidad::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GeoLocalidad::getGeoLocalidads($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GeoLocalidads relacionados a traves de CliCentroRecepcion */ 	
	public function getCantidadGeoLocalidadsXCliCentroRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GeoLocalidad::GEN_ATTR_ID);
            if($estado){
                $c->add(GeoLocalidad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliCentroRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliCentroRecepcion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GeoLocalidad::GEN_TABLA);
            $c->addRealJoin(CliCentroRecepcion::GEN_TABLA, CliCentroRecepcion::GEN_ATTR_GEO_LOCALIDAD_ID, GeoLocalidad::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GeoLocalidad::getGeoLocalidads($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GeoLocalidad (Objeto) relacionado a traves de CliCentroRecepcion */ 	
	public function getGeoLocalidadXCliCentroRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGeoLocalidadsXCliCentroRecepcion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliCentroPedidos */ 	
	public function getCliCentroPedidos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliCentroPedido::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliCentroPedido::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliCentroPedido::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliCentroPedido::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliCentroPedido::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliCentroPedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliCentroPedido::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliCentroPedido::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $clicentropedidos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $clicentropedido = CliCentroPedido::hidratarObjeto($fila);			
                $clicentropedidos[] = $clicentropedido;
            }

            return $clicentropedidos;
	}	
	

	/* Método getCliCentroPedidosBloque para MasInfo */ 	
	public function getCliCentroPedidosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliCentroPedidos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliCentroPedidos Habilitados */ 	
	public function getCliCentroPedidosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliCentroPedidos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliCentroPedido */ 	
	public function getCliCentroPedido($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliCentroPedidos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliCentroPedido relacionadas */ 	
	public function deleteCliCentroPedidos(){
            $obs = $this->getCliCentroPedidos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliCentroPedidosCmb() CliCentroPedido relacionadas */ 	
	public function getCliCentroPedidosCmb(){
            $c = new Criterio();
            $c->add(CliCentroPedido::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCentroPedido::GEN_TABLA);
            $c->setCriterios();

            $os = CliCentroPedido::getCliCentroPedidosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaCompradors (Coleccion) relacionados a traves de CliCentroPedido */ 	
	public function getVtaCompradorsXCliCentroPedido($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaComprador::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliCentroPedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliCentroPedido::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaComprador::GEN_TABLA);
            $c->addRealJoin(CliCentroPedido::GEN_TABLA, CliCentroPedido::GEN_ATTR_VTA_COMPRADOR_ID, VtaComprador::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaComprador::getVtaCompradors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaCompradors relacionados a traves de CliCentroPedido */ 	
	public function getCantidadVtaCompradorsXCliCentroPedido($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaComprador::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaComprador::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliCentroPedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliCentroPedido::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaComprador::GEN_TABLA);
            $c->addRealJoin(CliCentroPedido::GEN_TABLA, CliCentroPedido::GEN_ATTR_VTA_COMPRADOR_ID, VtaComprador::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaComprador::getVtaCompradors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaComprador (Objeto) relacionado a traves de CliCentroPedido */ 	
	public function getVtaCompradorXCliCentroPedido($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaCompradorsXCliCentroPedido($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliMedioDigitals */ 	
	public function getCliMedioDigitals($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliMedioDigital::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliMedioDigital::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliMedioDigital::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliMedioDigital::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliMedioDigital::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliMedioDigital::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliMedioDigital::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliMedioDigital::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $climediodigitals = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $climediodigital = CliMedioDigital::hidratarObjeto($fila);			
                $climediodigitals[] = $climediodigital;
            }

            return $climediodigitals;
	}	
	

	/* Método getCliMedioDigitalsBloque para MasInfo */ 	
	public function getCliMedioDigitalsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliMedioDigitals($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliMedioDigitals Habilitados */ 	
	public function getCliMedioDigitalsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliMedioDigitals($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliMedioDigital */ 	
	public function getCliMedioDigital($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliMedioDigitals($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliMedioDigital relacionadas */ 	
	public function deleteCliMedioDigitals(){
            $obs = $this->getCliMedioDigitals();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliMedioDigitalsCmb() CliMedioDigital relacionadas */ 	
	public function getCliMedioDigitalsCmb(){
            $c = new Criterio();
            $c->add(CliMedioDigital::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliMedioDigital::GEN_TABLA);
            $c->setCriterios();

            $os = CliMedioDigital::getCliMedioDigitalsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliTipoMedioDigitals (Coleccion) relacionados a traves de CliMedioDigital */ 	
	public function getCliTipoMedioDigitalsXCliMedioDigital($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliTipoMedioDigital::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliMedioDigital::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliMedioDigital::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliTipoMedioDigital::GEN_TABLA);
            $c->addRealJoin(CliMedioDigital::GEN_TABLA, CliMedioDigital::GEN_ATTR_CLI_TIPO_MEDIO_DIGITAL_ID, CliTipoMedioDigital::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliTipoMedioDigital::getCliTipoMedioDigitals($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliTipoMedioDigitals relacionados a traves de CliMedioDigital */ 	
	public function getCantidadCliTipoMedioDigitalsXCliMedioDigital($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliTipoMedioDigital::GEN_ATTR_ID);
            if($estado){
                $c->add(CliTipoMedioDigital::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliMedioDigital::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliMedioDigital::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliTipoMedioDigital::GEN_TABLA);
            $c->addRealJoin(CliMedioDigital::GEN_TABLA, CliMedioDigital::GEN_ATTR_CLI_TIPO_MEDIO_DIGITAL_ID, CliTipoMedioDigital::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliTipoMedioDigital::getCliTipoMedioDigitals($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliTipoMedioDigital (Objeto) relacionado a traves de CliMedioDigital */ 	
	public function getCliTipoMedioDigitalXCliMedioDigital($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliTipoMedioDigitalsXCliMedioDigital($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliClienteVtaVendedors */ 	
	public function getCliClienteVtaVendedors($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliClienteVtaVendedor::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliClienteVtaVendedor::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliClienteVtaVendedor::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliClienteVtaVendedor::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliClienteVtaVendedor::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliClienteVtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliClienteVtaVendedor::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliClienteVtaVendedor::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cliclientevtavendedors = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cliclientevtavendedor = CliClienteVtaVendedor::hidratarObjeto($fila);			
                $cliclientevtavendedors[] = $cliclientevtavendedor;
            }

            return $cliclientevtavendedors;
	}	
	

	/* Método getCliClienteVtaVendedorsBloque para MasInfo */ 	
	public function getCliClienteVtaVendedorsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliClienteVtaVendedors($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliClienteVtaVendedors Habilitados */ 	
	public function getCliClienteVtaVendedorsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliClienteVtaVendedors($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliClienteVtaVendedor */ 	
	public function getCliClienteVtaVendedor($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliClienteVtaVendedors($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliClienteVtaVendedor relacionadas */ 	
	public function deleteCliClienteVtaVendedors(){
            $obs = $this->getCliClienteVtaVendedors();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliClienteVtaVendedorsCmb() CliClienteVtaVendedor relacionadas */ 	
	public function getCliClienteVtaVendedorsCmb(){
            $c = new Criterio();
            $c->add(CliClienteVtaVendedor::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteVtaVendedor::GEN_TABLA);
            $c->setCriterios();

            $os = CliClienteVtaVendedor::getCliClienteVtaVendedorsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaVendedors (Coleccion) relacionados a traves de CliClienteVtaVendedor */ 	
	public function getVtaVendedorsXCliClienteVtaVendedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteVtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteVtaVendedor::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedor::GEN_TABLA);
            $c->addRealJoin(CliClienteVtaVendedor::GEN_TABLA, CliClienteVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, VtaVendedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaVendedor::getVtaVendedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaVendedors relacionados a traves de CliClienteVtaVendedor */ 	
	public function getCantidadVtaVendedorsXCliClienteVtaVendedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaVendedor::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteVtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteVtaVendedor::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedor::GEN_TABLA);
            $c->addRealJoin(CliClienteVtaVendedor::GEN_TABLA, CliClienteVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, VtaVendedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaVendedor::getVtaVendedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaVendedor (Objeto) relacionado a traves de CliClienteVtaVendedor */ 	
	public function getVtaVendedorXCliClienteVtaVendedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaVendedorsXCliClienteVtaVendedor($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(CliClienteInsTipoListaPrecio::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(CliClienteInsTipoListaPrecio::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteInsTipoListaPrecio::GEN_TABLA);
            $c->setCriterios();

            $os = CliClienteInsTipoListaPrecio::getCliClienteInsTipoListaPreciosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsTipoListaPrecios (Coleccion) relacionados a traves de CliClienteInsTipoListaPrecio */ 	
	public function getInsTipoListaPreciosXCliClienteInsTipoListaPrecio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteInsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteInsTipoListaPrecio::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsTipoListaPrecio::GEN_TABLA);
            $c->addRealJoin(CliClienteInsTipoListaPrecio::GEN_TABLA, CliClienteInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, InsTipoListaPrecio::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsTipoListaPrecio::getInsTipoListaPrecios($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsTipoListaPrecios relacionados a traves de CliClienteInsTipoListaPrecio */ 	
	public function getCantidadInsTipoListaPreciosXCliClienteInsTipoListaPrecio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsTipoListaPrecio::GEN_ATTR_ID);
            if($estado){
                $c->add(InsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteInsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteInsTipoListaPrecio::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsTipoListaPrecio::GEN_TABLA);
            $c->addRealJoin(CliClienteInsTipoListaPrecio::GEN_TABLA, CliClienteInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, InsTipoListaPrecio::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsTipoListaPrecio::getInsTipoListaPrecios($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsTipoListaPrecio (Objeto) relacionado a traves de CliClienteInsTipoListaPrecio */ 	
	public function getInsTipoListaPrecioXCliClienteInsTipoListaPrecio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsTipoListaPreciosXCliClienteInsTipoListaPrecio($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliClienteVtaPreventistas */ 	
	public function getCliClienteVtaPreventistas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliClienteVtaPreventista::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliClienteVtaPreventista::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliClienteVtaPreventista::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliClienteVtaPreventista::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliClienteVtaPreventista::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliClienteVtaPreventista::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliClienteVtaPreventista::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliClienteVtaPreventista::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cliclientevtapreventistas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cliclientevtapreventista = CliClienteVtaPreventista::hidratarObjeto($fila);			
                $cliclientevtapreventistas[] = $cliclientevtapreventista;
            }

            return $cliclientevtapreventistas;
	}	
	

	/* Método getCliClienteVtaPreventistasBloque para MasInfo */ 	
	public function getCliClienteVtaPreventistasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliClienteVtaPreventistas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliClienteVtaPreventistas Habilitados */ 	
	public function getCliClienteVtaPreventistasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliClienteVtaPreventistas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliClienteVtaPreventista */ 	
	public function getCliClienteVtaPreventista($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliClienteVtaPreventistas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliClienteVtaPreventista relacionadas */ 	
	public function deleteCliClienteVtaPreventistas(){
            $obs = $this->getCliClienteVtaPreventistas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliClienteVtaPreventistasCmb() CliClienteVtaPreventista relacionadas */ 	
	public function getCliClienteVtaPreventistasCmb(){
            $c = new Criterio();
            $c->add(CliClienteVtaPreventista::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteVtaPreventista::GEN_TABLA);
            $c->setCriterios();

            $os = CliClienteVtaPreventista::getCliClienteVtaPreventistasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaPreventistas (Coleccion) relacionados a traves de CliClienteVtaPreventista */ 	
	public function getVtaPreventistasXCliClienteVtaPreventista($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaPreventista::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteVtaPreventista::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteVtaPreventista::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPreventista::GEN_TABLA);
            $c->addRealJoin(CliClienteVtaPreventista::GEN_TABLA, CliClienteVtaPreventista::GEN_ATTR_VTA_PREVENTISTA_ID, VtaPreventista::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPreventista::getVtaPreventistas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaPreventistas relacionados a traves de CliClienteVtaPreventista */ 	
	public function getCantidadVtaPreventistasXCliClienteVtaPreventista($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaPreventista::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaPreventista::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteVtaPreventista::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteVtaPreventista::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPreventista::GEN_TABLA);
            $c->addRealJoin(CliClienteVtaPreventista::GEN_TABLA, CliClienteVtaPreventista::GEN_ATTR_VTA_PREVENTISTA_ID, VtaPreventista::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPreventista::getVtaPreventistas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaPreventista (Objeto) relacionado a traves de CliClienteVtaPreventista */ 	
	public function getVtaPreventistaXCliClienteVtaPreventista($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaPreventistasXCliClienteVtaPreventista($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliClienteVtaCompradors */ 	
	public function getCliClienteVtaCompradors($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliClienteVtaComprador::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliClienteVtaComprador::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliClienteVtaComprador::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliClienteVtaComprador::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliClienteVtaComprador::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliClienteVtaComprador::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliClienteVtaComprador::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliClienteVtaComprador::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cliclientevtacompradors = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cliclientevtacomprador = CliClienteVtaComprador::hidratarObjeto($fila);			
                $cliclientevtacompradors[] = $cliclientevtacomprador;
            }

            return $cliclientevtacompradors;
	}	
	

	/* Método getCliClienteVtaCompradorsBloque para MasInfo */ 	
	public function getCliClienteVtaCompradorsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliClienteVtaCompradors($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliClienteVtaCompradors Habilitados */ 	
	public function getCliClienteVtaCompradorsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliClienteVtaCompradors($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliClienteVtaComprador */ 	
	public function getCliClienteVtaComprador($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliClienteVtaCompradors($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliClienteVtaComprador relacionadas */ 	
	public function deleteCliClienteVtaCompradors(){
            $obs = $this->getCliClienteVtaCompradors();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliClienteVtaCompradorsCmb() CliClienteVtaComprador relacionadas */ 	
	public function getCliClienteVtaCompradorsCmb(){
            $c = new Criterio();
            $c->add(CliClienteVtaComprador::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteVtaComprador::GEN_TABLA);
            $c->setCriterios();

            $os = CliClienteVtaComprador::getCliClienteVtaCompradorsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaCompradors (Coleccion) relacionados a traves de CliClienteVtaComprador */ 	
	public function getVtaCompradorsXCliClienteVtaComprador($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaComprador::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteVtaComprador::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteVtaComprador::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaComprador::GEN_TABLA);
            $c->addRealJoin(CliClienteVtaComprador::GEN_TABLA, CliClienteVtaComprador::GEN_ATTR_VTA_COMPRADOR_ID, VtaComprador::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaComprador::getVtaCompradors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaCompradors relacionados a traves de CliClienteVtaComprador */ 	
	public function getCantidadVtaCompradorsXCliClienteVtaComprador($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaComprador::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaComprador::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteVtaComprador::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteVtaComprador::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaComprador::GEN_TABLA);
            $c->addRealJoin(CliClienteVtaComprador::GEN_TABLA, CliClienteVtaComprador::GEN_ATTR_VTA_COMPRADOR_ID, VtaComprador::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaComprador::getVtaCompradors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaComprador (Objeto) relacionado a traves de CliClienteVtaComprador */ 	
	public function getVtaCompradorXCliClienteVtaComprador($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaCompradorsXCliClienteVtaComprador($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliClienteGralFpAgrupacions */ 	
	public function getCliClienteGralFpAgrupacions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliClienteGralFpAgrupacion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliClienteGralFpAgrupacion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliClienteGralFpAgrupacion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliClienteGralFpAgrupacion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliClienteGralFpAgrupacion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliClienteGralFpAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliClienteGralFpAgrupacion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliClienteGralFpAgrupacion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cliclientegralfpagrupacions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cliclientegralfpagrupacion = CliClienteGralFpAgrupacion::hidratarObjeto($fila);			
                $cliclientegralfpagrupacions[] = $cliclientegralfpagrupacion;
            }

            return $cliclientegralfpagrupacions;
	}	
	

	/* Método getCliClienteGralFpAgrupacionsBloque para MasInfo */ 	
	public function getCliClienteGralFpAgrupacionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliClienteGralFpAgrupacions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliClienteGralFpAgrupacions Habilitados */ 	
	public function getCliClienteGralFpAgrupacionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliClienteGralFpAgrupacions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliClienteGralFpAgrupacion */ 	
	public function getCliClienteGralFpAgrupacion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliClienteGralFpAgrupacions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliClienteGralFpAgrupacion relacionadas */ 	
	public function deleteCliClienteGralFpAgrupacions(){
            $obs = $this->getCliClienteGralFpAgrupacions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliClienteGralFpAgrupacionsCmb() CliClienteGralFpAgrupacion relacionadas */ 	
	public function getCliClienteGralFpAgrupacionsCmb(){
            $c = new Criterio();
            $c->add(CliClienteGralFpAgrupacion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteGralFpAgrupacion::GEN_TABLA);
            $c->setCriterios();

            $os = CliClienteGralFpAgrupacion::getCliClienteGralFpAgrupacionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralFpAgrupacions (Coleccion) relacionados a traves de CliClienteGralFpAgrupacion */ 	
	public function getGralFpAgrupacionsXCliClienteGralFpAgrupacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralFpAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteGralFpAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteGralFpAgrupacion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralFpAgrupacion::GEN_TABLA);
            $c->addRealJoin(CliClienteGralFpAgrupacion::GEN_TABLA, CliClienteGralFpAgrupacion::GEN_ATTR_GRAL_FP_AGRUPACION_ID, GralFpAgrupacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralFpAgrupacion::getGralFpAgrupacions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralFpAgrupacions relacionados a traves de CliClienteGralFpAgrupacion */ 	
	public function getCantidadGralFpAgrupacionsXCliClienteGralFpAgrupacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralFpAgrupacion::GEN_ATTR_ID);
            if($estado){
                $c->add(GralFpAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteGralFpAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteGralFpAgrupacion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralFpAgrupacion::GEN_TABLA);
            $c->addRealJoin(CliClienteGralFpAgrupacion::GEN_TABLA, CliClienteGralFpAgrupacion::GEN_ATTR_GRAL_FP_AGRUPACION_ID, GralFpAgrupacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralFpAgrupacion::getGralFpAgrupacions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralFpAgrupacion (Objeto) relacionado a traves de CliClienteGralFpAgrupacion */ 	
	public function getGralFpAgrupacionXCliClienteGralFpAgrupacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralFpAgrupacionsXCliClienteGralFpAgrupacion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliClienteGralFpCuotas */ 	
	public function getCliClienteGralFpCuotas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliClienteGralFpCuota::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliClienteGralFpCuota::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliClienteGralFpCuota::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliClienteGralFpCuota::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliClienteGralFpCuota::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliClienteGralFpCuota::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliClienteGralFpCuota::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliClienteGralFpCuota::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cliclientegralfpcuotas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cliclientegralfpcuota = CliClienteGralFpCuota::hidratarObjeto($fila);			
                $cliclientegralfpcuotas[] = $cliclientegralfpcuota;
            }

            return $cliclientegralfpcuotas;
	}	
	

	/* Método getCliClienteGralFpCuotasBloque para MasInfo */ 	
	public function getCliClienteGralFpCuotasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliClienteGralFpCuotas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliClienteGralFpCuotas Habilitados */ 	
	public function getCliClienteGralFpCuotasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliClienteGralFpCuotas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliClienteGralFpCuota */ 	
	public function getCliClienteGralFpCuota($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliClienteGralFpCuotas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliClienteGralFpCuota relacionadas */ 	
	public function deleteCliClienteGralFpCuotas(){
            $obs = $this->getCliClienteGralFpCuotas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliClienteGralFpCuotasCmb() CliClienteGralFpCuota relacionadas */ 	
	public function getCliClienteGralFpCuotasCmb(){
            $c = new Criterio();
            $c->add(CliClienteGralFpCuota::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteGralFpCuota::GEN_TABLA);
            $c->setCriterios();

            $os = CliClienteGralFpCuota::getCliClienteGralFpCuotasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralFpCuotas (Coleccion) relacionados a traves de CliClienteGralFpCuota */ 	
	public function getGralFpCuotasXCliClienteGralFpCuota($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralFpCuota::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteGralFpCuota::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteGralFpCuota::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralFpCuota::GEN_TABLA);
            $c->addRealJoin(CliClienteGralFpCuota::GEN_TABLA, CliClienteGralFpCuota::GEN_ATTR_GRAL_FP_CUOTA_ID, GralFpCuota::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralFpCuota::getGralFpCuotas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralFpCuotas relacionados a traves de CliClienteGralFpCuota */ 	
	public function getCantidadGralFpCuotasXCliClienteGralFpCuota($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralFpCuota::GEN_ATTR_ID);
            if($estado){
                $c->add(GralFpCuota::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteGralFpCuota::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteGralFpCuota::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralFpCuota::GEN_TABLA);
            $c->addRealJoin(CliClienteGralFpCuota::GEN_TABLA, CliClienteGralFpCuota::GEN_ATTR_GRAL_FP_CUOTA_ID, GralFpCuota::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralFpCuota::getGralFpCuotas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralFpCuota (Objeto) relacionado a traves de CliClienteGralFpCuota */ 	
	public function getGralFpCuotaXCliClienteGralFpCuota($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralFpCuotasXCliClienteGralFpCuota($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliClienteGralActividads */ 	
	public function getCliClienteGralActividads($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliClienteGralActividad::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliClienteGralActividad::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliClienteGralActividad::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliClienteGralActividad::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliClienteGralActividad::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliClienteGralActividad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliClienteGralActividad::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliClienteGralActividad::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cliclientegralactividads = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cliclientegralactividad = CliClienteGralActividad::hidratarObjeto($fila);			
                $cliclientegralactividads[] = $cliclientegralactividad;
            }

            return $cliclientegralactividads;
	}	
	

	/* Método getCliClienteGralActividadsBloque para MasInfo */ 	
	public function getCliClienteGralActividadsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliClienteGralActividads($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliClienteGralActividads Habilitados */ 	
	public function getCliClienteGralActividadsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliClienteGralActividads($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliClienteGralActividad */ 	
	public function getCliClienteGralActividad($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliClienteGralActividads($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliClienteGralActividad relacionadas */ 	
	public function deleteCliClienteGralActividads(){
            $obs = $this->getCliClienteGralActividads();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliClienteGralActividadsCmb() CliClienteGralActividad relacionadas */ 	
	public function getCliClienteGralActividadsCmb(){
            $c = new Criterio();
            $c->add(CliClienteGralActividad::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteGralActividad::GEN_TABLA);
            $c->setCriterios();

            $os = CliClienteGralActividad::getCliClienteGralActividadsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralActividads (Coleccion) relacionados a traves de CliClienteGralActividad */ 	
	public function getGralActividadsXCliClienteGralActividad($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralActividad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteGralActividad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteGralActividad::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralActividad::GEN_TABLA);
            $c->addRealJoin(CliClienteGralActividad::GEN_TABLA, CliClienteGralActividad::GEN_ATTR_GRAL_ACTIVIDAD_ID, GralActividad::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralActividad::getGralActividads($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralActividads relacionados a traves de CliClienteGralActividad */ 	
	public function getCantidadGralActividadsXCliClienteGralActividad($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralActividad::GEN_ATTR_ID);
            if($estado){
                $c->add(GralActividad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteGralActividad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteGralActividad::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralActividad::GEN_TABLA);
            $c->addRealJoin(CliClienteGralActividad::GEN_TABLA, CliClienteGralActividad::GEN_ATTR_GRAL_ACTIVIDAD_ID, GralActividad::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralActividad::getGralActividads($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralActividad (Objeto) relacionado a traves de CliClienteGralActividad */ 	
	public function getGralActividadXCliClienteGralActividad($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralActividadsXCliClienteGralActividad($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliClienteVtaPuntoVentas */ 	
	public function getCliClienteVtaPuntoVentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliClienteVtaPuntoVenta::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliClienteVtaPuntoVenta::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliClienteVtaPuntoVenta::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliClienteVtaPuntoVenta::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliClienteVtaPuntoVenta::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliClienteVtaPuntoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliClienteVtaPuntoVenta::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliClienteVtaPuntoVenta::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cliclientevtapuntoventas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cliclientevtapuntoventa = CliClienteVtaPuntoVenta::hidratarObjeto($fila);			
                $cliclientevtapuntoventas[] = $cliclientevtapuntoventa;
            }

            return $cliclientevtapuntoventas;
	}	
	

	/* Método getCliClienteVtaPuntoVentasBloque para MasInfo */ 	
	public function getCliClienteVtaPuntoVentasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliClienteVtaPuntoVentas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliClienteVtaPuntoVentas Habilitados */ 	
	public function getCliClienteVtaPuntoVentasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliClienteVtaPuntoVentas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliClienteVtaPuntoVenta */ 	
	public function getCliClienteVtaPuntoVenta($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliClienteVtaPuntoVentas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliClienteVtaPuntoVenta relacionadas */ 	
	public function deleteCliClienteVtaPuntoVentas(){
            $obs = $this->getCliClienteVtaPuntoVentas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliClienteVtaPuntoVentasCmb() CliClienteVtaPuntoVenta relacionadas */ 	
	public function getCliClienteVtaPuntoVentasCmb(){
            $c = new Criterio();
            $c->add(CliClienteVtaPuntoVenta::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteVtaPuntoVenta::GEN_TABLA);
            $c->setCriterios();

            $os = CliClienteVtaPuntoVenta::getCliClienteVtaPuntoVentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaPuntoVentas (Coleccion) relacionados a traves de CliClienteVtaPuntoVenta */ 	
	public function getVtaPuntoVentasXCliClienteVtaPuntoVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaPuntoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteVtaPuntoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteVtaPuntoVenta::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPuntoVenta::GEN_TABLA);
            $c->addRealJoin(CliClienteVtaPuntoVenta::GEN_TABLA, CliClienteVtaPuntoVenta::GEN_ATTR_VTA_PUNTO_VENTA_ID, VtaPuntoVenta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPuntoVenta::getVtaPuntoVentas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaPuntoVentas relacionados a traves de CliClienteVtaPuntoVenta */ 	
	public function getCantidadVtaPuntoVentasXCliClienteVtaPuntoVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaPuntoVenta::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaPuntoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteVtaPuntoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteVtaPuntoVenta::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPuntoVenta::GEN_TABLA);
            $c->addRealJoin(CliClienteVtaPuntoVenta::GEN_TABLA, CliClienteVtaPuntoVenta::GEN_ATTR_VTA_PUNTO_VENTA_ID, VtaPuntoVenta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPuntoVenta::getVtaPuntoVentas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaPuntoVenta (Objeto) relacionado a traves de CliClienteVtaPuntoVenta */ 	
	public function getVtaPuntoVentaXCliClienteVtaPuntoVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaPuntoVentasXCliClienteVtaPuntoVenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliClienteInfoSifens */ 	
	public function getCliClienteInfoSifens($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliClienteInfoSifen::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliClienteInfoSifen::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliClienteInfoSifen::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliClienteInfoSifen::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliClienteInfoSifen::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliClienteInfoSifen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliClienteInfoSifen::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliClienteInfoSifen::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cliclienteinfosifens = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cliclienteinfosifen = CliClienteInfoSifen::hidratarObjeto($fila);			
                $cliclienteinfosifens[] = $cliclienteinfosifen;
            }

            return $cliclienteinfosifens;
	}	
	

	/* Método getCliClienteInfoSifensBloque para MasInfo */ 	
	public function getCliClienteInfoSifensParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliClienteInfoSifens($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliClienteInfoSifens Habilitados */ 	
	public function getCliClienteInfoSifensHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliClienteInfoSifens($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliClienteInfoSifen */ 	
	public function getCliClienteInfoSifen($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliClienteInfoSifens($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliClienteInfoSifen relacionadas */ 	
	public function deleteCliClienteInfoSifens(){
            $obs = $this->getCliClienteInfoSifens();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliClienteInfoSifensCmb() CliClienteInfoSifen relacionadas */ 	
	public function getCliClienteInfoSifensCmb(){
            $c = new Criterio();
            $c->add(CliClienteInfoSifen::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteInfoSifen::GEN_TABLA);
            $c->setCriterios();

            $os = CliClienteInfoSifen::getCliClienteInfoSifensCmbF(null, $c);
            return $os;
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
                
            $criterio->add(VtaVendedorValoracion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaVendedorValoracion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaVendedorValoracion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaVendedorValoracion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
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

	/* Metodo getVtaVendedorValoracionAgrupacions */ 	
	public function getVtaVendedorValoracionAgrupacions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaVendedorValoracionAgrupacion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaVendedorValoracionAgrupacion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaVendedorValoracionAgrupacion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaVendedorValoracionAgrupacion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaVendedorValoracionAgrupacion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaVendedorValoracionAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaVendedorValoracionAgrupacion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaVendedorValoracionAgrupacion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtavendedorvaloracionagrupacions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtavendedorvaloracionagrupacion = VtaVendedorValoracionAgrupacion::hidratarObjeto($fila);			
                $vtavendedorvaloracionagrupacions[] = $vtavendedorvaloracionagrupacion;
            }

            return $vtavendedorvaloracionagrupacions;
	}	
	

	/* Método getVtaVendedorValoracionAgrupacionsBloque para MasInfo */ 	
	public function getVtaVendedorValoracionAgrupacionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaVendedorValoracionAgrupacions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaVendedorValoracionAgrupacions Habilitados */ 	
	public function getVtaVendedorValoracionAgrupacionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaVendedorValoracionAgrupacions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaVendedorValoracionAgrupacion */ 	
	public function getVtaVendedorValoracionAgrupacion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaVendedorValoracionAgrupacions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaVendedorValoracionAgrupacion relacionadas */ 	
	public function deleteVtaVendedorValoracionAgrupacions(){
            $obs = $this->getVtaVendedorValoracionAgrupacions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaVendedorValoracionAgrupacionsCmb() VtaVendedorValoracionAgrupacion relacionadas */ 	
	public function getVtaVendedorValoracionAgrupacionsCmb(){
            $c = new Criterio();
            $c->add(VtaVendedorValoracionAgrupacion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedorValoracionAgrupacion::GEN_TABLA);
            $c->setCriterios();

            $os = VtaVendedorValoracionAgrupacion::getVtaVendedorValoracionAgrupacionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaVendedors (Coleccion) relacionados a traves de VtaVendedorValoracionAgrupacion */ 	
	public function getVtaVendedorsXVtaVendedorValoracionAgrupacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaVendedorValoracionAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaVendedorValoracionAgrupacion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedor::GEN_TABLA);
            $c->addRealJoin(VtaVendedorValoracionAgrupacion::GEN_TABLA, VtaVendedorValoracionAgrupacion::GEN_ATTR_VTA_VENDEDOR_ID, VtaVendedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaVendedor::getVtaVendedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaVendedors relacionados a traves de VtaVendedorValoracionAgrupacion */ 	
	public function getCantidadVtaVendedorsXVtaVendedorValoracionAgrupacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaVendedor::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaVendedorValoracionAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaVendedorValoracionAgrupacion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedor::GEN_TABLA);
            $c->addRealJoin(VtaVendedorValoracionAgrupacion::GEN_TABLA, VtaVendedorValoracionAgrupacion::GEN_ATTR_VTA_VENDEDOR_ID, VtaVendedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaVendedor::getVtaVendedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaVendedor (Objeto) relacionado a traves de VtaVendedorValoracionAgrupacion */ 	
	public function getVtaVendedorXVtaVendedorValoracionAgrupacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaVendedorsXVtaVendedorValoracionAgrupacion($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(VtaPresupuesto::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaPresupuesto::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->setCriterios();

            $os = VtaPresupuesto::getVtaPresupuestosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaVendedors (Coleccion) relacionados a traves de VtaPresupuesto */ 	
	public function getVtaVendedorsXVtaPresupuesto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPresupuesto::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedor::GEN_TABLA);
            $c->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_VTA_VENDEDOR_ID, VtaVendedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaVendedor::getVtaVendedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaVendedors relacionados a traves de VtaPresupuesto */ 	
	public function getCantidadVtaVendedorsXVtaPresupuesto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaVendedor::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPresupuesto::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedor::GEN_TABLA);
            $c->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_VTA_VENDEDOR_ID, VtaVendedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaVendedor::getVtaVendedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaVendedor (Objeto) relacionado a traves de VtaPresupuesto */ 	
	public function getVtaVendedorXVtaPresupuesto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaVendedorsXVtaPresupuesto($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaTributoExencions */ 	
	public function getVtaTributoExencions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaTributoExencion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaTributoExencion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaTributoExencion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaTributoExencion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaTributoExencion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaTributoExencion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaTributoExencion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaTributoExencion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtatributoexencions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtatributoexencion = VtaTributoExencion::hidratarObjeto($fila);			
                $vtatributoexencions[] = $vtatributoexencion;
            }

            return $vtatributoexencions;
	}	
	

	/* Método getVtaTributoExencionsBloque para MasInfo */ 	
	public function getVtaTributoExencionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaTributoExencions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaTributoExencions Habilitados */ 	
	public function getVtaTributoExencionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaTributoExencions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaTributoExencion */ 	
	public function getVtaTributoExencion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaTributoExencions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaTributoExencion relacionadas */ 	
	public function deleteVtaTributoExencions(){
            $obs = $this->getVtaTributoExencions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaTributoExencionsCmb() VtaTributoExencion relacionadas */ 	
	public function getVtaTributoExencionsCmb(){
            $c = new Criterio();
            $c->add(VtaTributoExencion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTributoExencion::GEN_TABLA);
            $c->setCriterios();

            $os = VtaTributoExencion::getVtaTributoExencionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaTributos (Coleccion) relacionados a traves de VtaTributoExencion */ 	
	public function getVtaTributosXVtaTributoExencion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaTributoExencion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaTributoExencion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTributo::GEN_TABLA);
            $c->addRealJoin(VtaTributoExencion::GEN_TABLA, VtaTributoExencion::GEN_ATTR_VTA_TRIBUTO_ID, VtaTributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTributo::getVtaTributos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaTributos relacionados a traves de VtaTributoExencion */ 	
	public function getCantidadVtaTributosXVtaTributoExencion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaTributo::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaTributoExencion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaTributoExencion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTributo::GEN_TABLA);
            $c->addRealJoin(VtaTributoExencion::GEN_TABLA, VtaTributoExencion::GEN_ATTR_VTA_TRIBUTO_ID, VtaTributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTributo::getVtaTributos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaTributo (Objeto) relacionado a traves de VtaTributoExencion */ 	
	public function getVtaTributoXVtaTributoExencion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaTributosXVtaTributoExencion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaNotaCreditos */ 	
	public function getVtaNotaCreditos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaNotaCredito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaNotaCredito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaNotaCredito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaNotaCredito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaNotaCredito::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaNotaCredito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaNotaCredito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtanotacreditos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtanotacredito = VtaNotaCredito::hidratarObjeto($fila);			
                $vtanotacreditos[] = $vtanotacredito;
            }

            return $vtanotacreditos;
	}	
	

	/* Método getVtaNotaCreditosBloque para MasInfo */ 	
	public function getVtaNotaCreditosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaNotaCreditos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaNotaCreditos Habilitados */ 	
	public function getVtaNotaCreditosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaNotaCreditos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaNotaCredito */ 	
	public function getVtaNotaCredito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaNotaCreditos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaNotaCredito relacionadas */ 	
	public function deleteVtaNotaCreditos(){
            $obs = $this->getVtaNotaCreditos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaNotaCreditosCmb() VtaNotaCredito relacionadas */ 	
	public function getVtaNotaCreditosCmb(){
            $c = new Criterio();
            $c->add(VtaNotaCredito::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaCredito::GEN_TABLA);
            $c->setCriterios();

            $os = VtaNotaCredito::getVtaNotaCreditosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaTipoNotaCreditos (Coleccion) relacionados a traves de VtaNotaCredito */ 	
	public function getVtaTipoNotaCreditosXVtaNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaTipoNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaCredito::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoNotaCredito::GEN_TABLA);
            $c->addRealJoin(VtaNotaCredito::GEN_TABLA, VtaNotaCredito::GEN_ATTR_VTA_TIPO_NOTA_CREDITO_ID, VtaTipoNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoNotaCredito::getVtaTipoNotaCreditos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaTipoNotaCreditos relacionados a traves de VtaNotaCredito */ 	
	public function getCantidadVtaTipoNotaCreditosXVtaNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaTipoNotaCredito::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaTipoNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaCredito::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoNotaCredito::GEN_TABLA);
            $c->addRealJoin(VtaNotaCredito::GEN_TABLA, VtaNotaCredito::GEN_ATTR_VTA_TIPO_NOTA_CREDITO_ID, VtaTipoNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoNotaCredito::getVtaTipoNotaCreditos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaTipoNotaCredito (Objeto) relacionado a traves de VtaNotaCredito */ 	
	public function getVtaTipoNotaCreditoXVtaNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaTipoNotaCreditosXVtaNotaCredito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaNotaDebitos */ 	
	public function getVtaNotaDebitos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaNotaDebito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaNotaDebito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaNotaDebito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaNotaDebito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaNotaDebito::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaNotaDebito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaNotaDebito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtanotadebitos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtanotadebito = VtaNotaDebito::hidratarObjeto($fila);			
                $vtanotadebitos[] = $vtanotadebito;
            }

            return $vtanotadebitos;
	}	
	

	/* Método getVtaNotaDebitosBloque para MasInfo */ 	
	public function getVtaNotaDebitosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaNotaDebitos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaNotaDebitos Habilitados */ 	
	public function getVtaNotaDebitosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaNotaDebitos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaNotaDebito */ 	
	public function getVtaNotaDebito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaNotaDebitos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaNotaDebito relacionadas */ 	
	public function deleteVtaNotaDebitos(){
            $obs = $this->getVtaNotaDebitos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaNotaDebitosCmb() VtaNotaDebito relacionadas */ 	
	public function getVtaNotaDebitosCmb(){
            $c = new Criterio();
            $c->add(VtaNotaDebito::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->setCriterios();

            $os = VtaNotaDebito::getVtaNotaDebitosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaTipoNotaDebitos (Coleccion) relacionados a traves de VtaNotaDebito */ 	
	public function getVtaTipoNotaDebitosXVtaNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaTipoNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaDebito::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoNotaDebito::GEN_TABLA);
            $c->addRealJoin(VtaNotaDebito::GEN_TABLA, VtaNotaDebito::GEN_ATTR_VTA_TIPO_NOTA_DEBITO_ID, VtaTipoNotaDebito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoNotaDebito::getVtaTipoNotaDebitos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaTipoNotaDebitos relacionados a traves de VtaNotaDebito */ 	
	public function getCantidadVtaTipoNotaDebitosXVtaNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaTipoNotaDebito::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaTipoNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaDebito::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoNotaDebito::GEN_TABLA);
            $c->addRealJoin(VtaNotaDebito::GEN_TABLA, VtaNotaDebito::GEN_ATTR_VTA_TIPO_NOTA_DEBITO_ID, VtaTipoNotaDebito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoNotaDebito::getVtaTipoNotaDebitos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaTipoNotaDebito (Objeto) relacionado a traves de VtaNotaDebito */ 	
	public function getVtaTipoNotaDebitoXVtaNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaTipoNotaDebitosXVtaNotaDebito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaRecibos */ 	
	public function getVtaRecibos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaRecibo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaRecibo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaRecibo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaRecibo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaRecibo::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaRecibo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaRecibo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtarecibos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtarecibo = VtaRecibo::hidratarObjeto($fila);			
                $vtarecibos[] = $vtarecibo;
            }

            return $vtarecibos;
	}	
	

	/* Método getVtaRecibosBloque para MasInfo */ 	
	public function getVtaRecibosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaRecibos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaRecibos Habilitados */ 	
	public function getVtaRecibosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaRecibos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaRecibo */ 	
	public function getVtaRecibo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaRecibos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaRecibo relacionadas */ 	
	public function deleteVtaRecibos(){
            $obs = $this->getVtaRecibos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaRecibosCmb() VtaRecibo relacionadas */ 	
	public function getVtaRecibosCmb(){
            $c = new Criterio();
            $c->add(VtaRecibo::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->setCriterios();

            $os = VtaRecibo::getVtaRecibosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaTipoRecibos (Coleccion) relacionados a traves de VtaRecibo */ 	
	public function getVtaTipoRecibosXVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaTipoRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRecibo::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoRecibo::GEN_TABLA);
            $c->addRealJoin(VtaRecibo::GEN_TABLA, VtaRecibo::GEN_ATTR_VTA_TIPO_RECIBO_ID, VtaTipoRecibo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoRecibo::getVtaTipoRecibos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaTipoRecibos relacionados a traves de VtaRecibo */ 	
	public function getCantidadVtaTipoRecibosXVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaTipoRecibo::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaTipoRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRecibo::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoRecibo::GEN_TABLA);
            $c->addRealJoin(VtaRecibo::GEN_TABLA, VtaRecibo::GEN_ATTR_VTA_TIPO_RECIBO_ID, VtaTipoRecibo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoRecibo::getVtaTipoRecibos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaTipoRecibo (Objeto) relacionado a traves de VtaRecibo */ 	
	public function getVtaTipoReciboXVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaTipoRecibosXVtaRecibo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaRemitos */ 	
	public function getVtaRemitos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaRemito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaRemito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaRemito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaRemito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaRemito::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaRemito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaRemito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaRemito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaremitos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaremito = VtaRemito::hidratarObjeto($fila);			
                $vtaremitos[] = $vtaremito;
            }

            return $vtaremitos;
	}	
	

	/* Método getVtaRemitosBloque para MasInfo */ 	
	public function getVtaRemitosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaRemitos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaRemitos Habilitados */ 	
	public function getVtaRemitosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaRemitos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaRemito */ 	
	public function getVtaRemito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaRemitos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaRemito relacionadas */ 	
	public function deleteVtaRemitos(){
            $obs = $this->getVtaRemitos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaRemitosCmb() VtaRemito relacionadas */ 	
	public function getVtaRemitosCmb(){
            $c = new Criterio();
            $c->add(VtaRemito::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRemito::GEN_TABLA);
            $c->setCriterios();

            $os = VtaRemito::getVtaRemitosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaRemitoTipoDespachos (Coleccion) relacionados a traves de VtaRemito */ 	
	public function getVtaRemitoTipoDespachosXVtaRemito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaRemitoTipoDespacho::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRemito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRemito::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRemitoTipoDespacho::GEN_TABLA);
            $c->addRealJoin(VtaRemito::GEN_TABLA, VtaRemito::GEN_ATTR_VTA_REMITO_TIPO_DESPACHO_ID, VtaRemitoTipoDespacho::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaRemitoTipoDespacho::getVtaRemitoTipoDespachos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaRemitoTipoDespachos relacionados a traves de VtaRemito */ 	
	public function getCantidadVtaRemitoTipoDespachosXVtaRemito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaRemitoTipoDespacho::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaRemitoTipoDespacho::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRemito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRemito::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRemitoTipoDespacho::GEN_TABLA);
            $c->addRealJoin(VtaRemito::GEN_TABLA, VtaRemito::GEN_ATTR_VTA_REMITO_TIPO_DESPACHO_ID, VtaRemitoTipoDespacho::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaRemitoTipoDespacho::getVtaRemitoTipoDespachos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaRemitoTipoDespacho (Objeto) relacionado a traves de VtaRemito */ 	
	public function getVtaRemitoTipoDespachoXVtaRemito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaRemitoTipoDespachosXVtaRemito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaFacturas */ 	
	public function getVtaFacturas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaFactura::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaFactura::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaFactura::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaFactura::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaFactura::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaFactura::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaFactura::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtafacturas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtafactura = VtaFactura::hidratarObjeto($fila);			
                $vtafacturas[] = $vtafactura;
            }

            return $vtafacturas;
	}	
	

	/* Método getVtaFacturasBloque para MasInfo */ 	
	public function getVtaFacturasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaFacturas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaFacturas Habilitados */ 	
	public function getVtaFacturasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaFacturas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaFactura */ 	
	public function getVtaFactura($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaFacturas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaFactura relacionadas */ 	
	public function deleteVtaFacturas(){
            $obs = $this->getVtaFacturas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaFacturasCmb() VtaFactura relacionadas */ 	
	public function getVtaFacturasCmb(){
            $c = new Criterio();
            $c->add(VtaFactura::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->setCriterios();

            $os = VtaFactura::getVtaFacturasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaFacturaTipoEstados (Coleccion) relacionados a traves de VtaFactura */ 	
	public function getVtaFacturaTipoEstadosXVtaFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaFacturaTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFactura::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFacturaTipoEstado::GEN_TABLA);
            $c->addRealJoin(VtaFactura::GEN_TABLA, VtaFactura::GEN_ATTR_VTA_FACTURA_TIPO_ESTADO_ID, VtaFacturaTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaFacturaTipoEstado::getVtaFacturaTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaFacturaTipoEstados relacionados a traves de VtaFactura */ 	
	public function getCantidadVtaFacturaTipoEstadosXVtaFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaFacturaTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaFacturaTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFactura::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFacturaTipoEstado::GEN_TABLA);
            $c->addRealJoin(VtaFactura::GEN_TABLA, VtaFactura::GEN_ATTR_VTA_FACTURA_TIPO_ESTADO_ID, VtaFacturaTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaFacturaTipoEstado::getVtaFacturaTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaFacturaTipoEstado (Objeto) relacionado a traves de VtaFactura */ 	
	public function getVtaFacturaTipoEstadoXVtaFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaFacturaTipoEstadosXVtaFactura($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteDebes */ 	
	public function getVtaAjusteDebes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteDebe::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteDebe::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteDebe::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteDebe::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteDebe::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteDebe::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustedebes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustedebe = VtaAjusteDebe::hidratarObjeto($fila);			
                $vtaajustedebes[] = $vtaajustedebe;
            }

            return $vtaajustedebes;
	}	
	

	/* Método getVtaAjusteDebesBloque para MasInfo */ 	
	public function getVtaAjusteDebesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteDebes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteDebes Habilitados */ 	
	public function getVtaAjusteDebesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteDebes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteDebe */ 	
	public function getVtaAjusteDebe($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteDebes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteDebe relacionadas */ 	
	public function deleteVtaAjusteDebes(){
            $obs = $this->getVtaAjusteDebes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteDebesCmb() VtaAjusteDebe relacionadas */ 	
	public function getVtaAjusteDebesCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteDebe::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteDebe::getVtaAjusteDebesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaAjusteDebeTipoEstados (Coleccion) relacionados a traves de VtaAjusteDebe */ 	
	public function getVtaAjusteDebeTipoEstadosXVtaAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaAjusteDebeTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebe::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebeTipoEstado::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebe::GEN_TABLA, VtaAjusteDebe::GEN_ATTR_VTA_AJUSTE_DEBE_TIPO_ESTADO_ID, VtaAjusteDebeTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebeTipoEstado::getVtaAjusteDebeTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaAjusteDebeTipoEstados relacionados a traves de VtaAjusteDebe */ 	
	public function getCantidadVtaAjusteDebeTipoEstadosXVtaAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaAjusteDebeTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaAjusteDebeTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebe::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebeTipoEstado::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebe::GEN_TABLA, VtaAjusteDebe::GEN_ATTR_VTA_AJUSTE_DEBE_TIPO_ESTADO_ID, VtaAjusteDebeTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebeTipoEstado::getVtaAjusteDebeTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaAjusteDebeTipoEstado (Objeto) relacionado a traves de VtaAjusteDebe */ 	
	public function getVtaAjusteDebeTipoEstadoXVtaAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaAjusteDebeTipoEstadosXVtaAjusteDebe($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteHabers */ 	
	public function getVtaAjusteHabers($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteHaber::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteHaber::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteHaber::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteHaber::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteHaber::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteHaber::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustehabers = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustehaber = VtaAjusteHaber::hidratarObjeto($fila);			
                $vtaajustehabers[] = $vtaajustehaber;
            }

            return $vtaajustehabers;
	}	
	

	/* Método getVtaAjusteHabersBloque para MasInfo */ 	
	public function getVtaAjusteHabersParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteHabers($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteHabers Habilitados */ 	
	public function getVtaAjusteHabersHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteHabers($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteHaber */ 	
	public function getVtaAjusteHaber($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteHabers($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteHaber relacionadas */ 	
	public function deleteVtaAjusteHabers(){
            $obs = $this->getVtaAjusteHabers();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteHabersCmb() VtaAjusteHaber relacionadas */ 	
	public function getVtaAjusteHabersCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteHaber::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteHaber::getVtaAjusteHabersCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaTipoAjusteHabers (Coleccion) relacionados a traves de VtaAjusteHaber */ 	
	public function getVtaTipoAjusteHabersXVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaTipoAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaber::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoAjusteHaber::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaber::GEN_TABLA, VtaAjusteHaber::GEN_ATTR_VTA_TIPO_AJUSTE_HABER_ID, VtaTipoAjusteHaber::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoAjusteHaber::getVtaTipoAjusteHabers($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaTipoAjusteHabers relacionados a traves de VtaAjusteHaber */ 	
	public function getCantidadVtaTipoAjusteHabersXVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaTipoAjusteHaber::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaTipoAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaber::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoAjusteHaber::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaber::GEN_TABLA, VtaAjusteHaber::GEN_ATTR_VTA_TIPO_AJUSTE_HABER_ID, VtaTipoAjusteHaber::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoAjusteHaber::getVtaTipoAjusteHabers($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaTipoAjusteHaber (Objeto) relacionado a traves de VtaAjusteHaber */ 	
	public function getVtaTipoAjusteHaberXVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaTipoAjusteHabersXVtaAjusteHaber($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaRemitoAjustes */ 	
	public function getVtaRemitoAjustes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaRemitoAjuste::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaRemitoAjuste::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaRemitoAjuste::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaRemitoAjuste::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaRemitoAjuste::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaRemitoAjuste::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaRemitoAjuste::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaRemitoAjuste::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaremitoajustes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaremitoajuste = VtaRemitoAjuste::hidratarObjeto($fila);			
                $vtaremitoajustes[] = $vtaremitoajuste;
            }

            return $vtaremitoajustes;
	}	
	

	/* Método getVtaRemitoAjustesBloque para MasInfo */ 	
	public function getVtaRemitoAjustesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaRemitoAjustes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaRemitoAjustes Habilitados */ 	
	public function getVtaRemitoAjustesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaRemitoAjustes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaRemitoAjuste */ 	
	public function getVtaRemitoAjuste($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaRemitoAjustes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaRemitoAjuste relacionadas */ 	
	public function deleteVtaRemitoAjustes(){
            $obs = $this->getVtaRemitoAjustes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaRemitoAjustesCmb() VtaRemitoAjuste relacionadas */ 	
	public function getVtaRemitoAjustesCmb(){
            $c = new Criterio();
            $c->add(VtaRemitoAjuste::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRemitoAjuste::GEN_TABLA);
            $c->setCriterios();

            $os = VtaRemitoAjuste::getVtaRemitoAjustesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaRemitoAjusteTipoDespachos (Coleccion) relacionados a traves de VtaRemitoAjuste */ 	
	public function getVtaRemitoAjusteTipoDespachosXVtaRemitoAjuste($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaRemitoAjusteTipoDespacho::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRemitoAjuste::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRemitoAjuste::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRemitoAjusteTipoDespacho::GEN_TABLA);
            $c->addRealJoin(VtaRemitoAjuste::GEN_TABLA, VtaRemitoAjuste::GEN_ATTR_VTA_REMITO_AJUSTE_TIPO_DESPACHO_ID, VtaRemitoAjusteTipoDespacho::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaRemitoAjusteTipoDespacho::getVtaRemitoAjusteTipoDespachos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaRemitoAjusteTipoDespachos relacionados a traves de VtaRemitoAjuste */ 	
	public function getCantidadVtaRemitoAjusteTipoDespachosXVtaRemitoAjuste($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaRemitoAjusteTipoDespacho::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaRemitoAjusteTipoDespacho::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRemitoAjuste::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRemitoAjuste::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRemitoAjusteTipoDespacho::GEN_TABLA);
            $c->addRealJoin(VtaRemitoAjuste::GEN_TABLA, VtaRemitoAjuste::GEN_ATTR_VTA_REMITO_AJUSTE_TIPO_DESPACHO_ID, VtaRemitoAjusteTipoDespacho::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaRemitoAjusteTipoDespacho::getVtaRemitoAjusteTipoDespachos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaRemitoAjusteTipoDespacho (Objeto) relacionado a traves de VtaRemitoAjuste */ 	
	public function getVtaRemitoAjusteTipoDespachoXVtaRemitoAjuste($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaRemitoAjusteTipoDespachosXVtaRemitoAjuste($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCatCatalogoCliClientes */ 	
	public function getCatCatalogoCliClientes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CatCatalogoCliCliente::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CatCatalogoCliCliente::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CatCatalogoCliCliente::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CatCatalogoCliCliente::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CatCatalogoCliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CatCatalogoCliCliente::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CatCatalogoCliCliente::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $catcatalogocliclientes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $catcatalogoclicliente = CatCatalogoCliCliente::hidratarObjeto($fila);			
                $catcatalogocliclientes[] = $catcatalogoclicliente;
            }

            return $catcatalogocliclientes;
	}	
	

	/* Método getCatCatalogoCliClientesBloque para MasInfo */ 	
	public function getCatCatalogoCliClientesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCatCatalogoCliClientes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCatCatalogoCliClientes Habilitados */ 	
	public function getCatCatalogoCliClientesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCatCatalogoCliClientes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCatCatalogoCliCliente */ 	
	public function getCatCatalogoCliCliente($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCatCatalogoCliClientes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CatCatalogoCliCliente relacionadas */ 	
	public function deleteCatCatalogoCliClientes(){
            $obs = $this->getCatCatalogoCliClientes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCatCatalogoCliClientesCmb() CatCatalogoCliCliente relacionadas */ 	
	public function getCatCatalogoCliClientesCmb(){
            $c = new Criterio();
            $c->add(CatCatalogoCliCliente::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CatCatalogoCliCliente::GEN_TABLA);
            $c->setCriterios();

            $os = CatCatalogoCliCliente::getCatCatalogoCliClientesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CatCatalogos (Coleccion) relacionados a traves de CatCatalogoCliCliente */ 	
	public function getCatCatalogosXCatCatalogoCliCliente($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CatCatalogo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CatCatalogoCliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CatCatalogoCliCliente::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CatCatalogo::GEN_TABLA);
            $c->addRealJoin(CatCatalogoCliCliente::GEN_TABLA, CatCatalogoCliCliente::GEN_ATTR_CAT_CATALOGO_ID, CatCatalogo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CatCatalogo::getCatCatalogos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CatCatalogos relacionados a traves de CatCatalogoCliCliente */ 	
	public function getCantidadCatCatalogosXCatCatalogoCliCliente($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CatCatalogo::GEN_ATTR_ID);
            if($estado){
                $c->add(CatCatalogo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CatCatalogoCliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CatCatalogoCliCliente::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CatCatalogo::GEN_TABLA);
            $c->addRealJoin(CatCatalogoCliCliente::GEN_TABLA, CatCatalogoCliCliente::GEN_ATTR_CAT_CATALOGO_ID, CatCatalogo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CatCatalogo::getCatCatalogos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CatCatalogo (Objeto) relacionado a traves de CatCatalogoCliCliente */ 	
	public function getCatCatalogoXCatCatalogoCliCliente($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCatCatalogosXCatCatalogoCliCliente($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliClienteTiendas */ 	
	public function getCliClienteTiendas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliClienteTienda::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliClienteTienda::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliClienteTienda::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliClienteTienda::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliClienteTienda::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliClienteTienda::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliClienteTienda::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliClienteTienda::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cliclientetiendas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cliclientetienda = CliClienteTienda::hidratarObjeto($fila);			
                $cliclientetiendas[] = $cliclientetienda;
            }

            return $cliclientetiendas;
	}	
	

	/* Método getCliClienteTiendasBloque para MasInfo */ 	
	public function getCliClienteTiendasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliClienteTiendas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliClienteTiendas Habilitados */ 	
	public function getCliClienteTiendasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliClienteTiendas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliClienteTienda */ 	
	public function getCliClienteTienda($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliClienteTiendas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliClienteTienda relacionadas */ 	
	public function deleteCliClienteTiendas(){
            $obs = $this->getCliClienteTiendas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliClienteTiendasCmb() CliClienteTienda relacionadas */ 	
	public function getCliClienteTiendasCmb(){
            $c = new Criterio();
            $c->add(CliClienteTienda::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteTienda::GEN_TABLA);
            $c->setCriterios();

            $os = CliClienteTienda::getCliClienteTiendasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliCentroPedidos (Coleccion) relacionados a traves de CliClienteTienda */ 	
	public function getCliCentroPedidosXCliClienteTienda($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCentroPedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteTienda::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteTienda::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCentroPedido::GEN_TABLA);
            $c->addRealJoin(CliClienteTienda::GEN_TABLA, CliClienteTienda::GEN_ATTR_CLI_CENTRO_PEDIDO_ID, CliCentroPedido::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCentroPedido::getCliCentroPedidos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliCentroPedidos relacionados a traves de CliClienteTienda */ 	
	public function getCantidadCliCentroPedidosXCliClienteTienda($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCentroPedido::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCentroPedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteTienda::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteTienda::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCentroPedido::GEN_TABLA);
            $c->addRealJoin(CliClienteTienda::GEN_TABLA, CliClienteTienda::GEN_ATTR_CLI_CENTRO_PEDIDO_ID, CliCentroPedido::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCentroPedido::getCliCentroPedidos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCentroPedido (Objeto) relacionado a traves de CliClienteTienda */ 	
	public function getCliCentroPedidoXCliClienteTienda($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliCentroPedidosXCliClienteTienda($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliClienteTiendaClaves */ 	
	public function getCliClienteTiendaClaves($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliClienteTiendaClave::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliClienteTiendaClave::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliClienteTiendaClave::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliClienteTiendaClave::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliClienteTiendaClave::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliClienteTiendaClave::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliClienteTiendaClave::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cliclientetiendaclaves = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cliclientetiendaclave = CliClienteTiendaClave::hidratarObjeto($fila);			
                $cliclientetiendaclaves[] = $cliclientetiendaclave;
            }

            return $cliclientetiendaclaves;
	}	
	

	/* Método getCliClienteTiendaClavesBloque para MasInfo */ 	
	public function getCliClienteTiendaClavesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliClienteTiendaClaves($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliClienteTiendaClaves Habilitados */ 	
	public function getCliClienteTiendaClavesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliClienteTiendaClaves($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliClienteTiendaClave */ 	
	public function getCliClienteTiendaClave($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliClienteTiendaClaves($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliClienteTiendaClave relacionadas */ 	
	public function deleteCliClienteTiendaClaves(){
            $obs = $this->getCliClienteTiendaClaves();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliClienteTiendaClavesCmb() CliClienteTiendaClave relacionadas */ 	
	public function getCliClienteTiendaClavesCmb(){
            $c = new Criterio();
            $c->add(CliClienteTiendaClave::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteTiendaClave::GEN_TABLA);
            $c->setCriterios();

            $os = CliClienteTiendaClave::getCliClienteTiendaClavesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClienteTiendas (Coleccion) relacionados a traves de CliClienteTiendaClave */ 	
	public function getCliClienteTiendasXCliClienteTiendaClave($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliClienteTienda::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteTiendaClave::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteTiendaClave::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteTienda::GEN_TABLA);
            $c->addRealJoin(CliClienteTiendaClave::GEN_TABLA, CliClienteTiendaClave::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, CliClienteTienda::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliClienteTienda::getCliClienteTiendas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClienteTiendas relacionados a traves de CliClienteTiendaClave */ 	
	public function getCantidadCliClienteTiendasXCliClienteTiendaClave($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliClienteTienda::GEN_ATTR_ID);
            if($estado){
                $c->add(CliClienteTienda::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteTiendaClave::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteTiendaClave::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteTienda::GEN_TABLA);
            $c->addRealJoin(CliClienteTiendaClave::GEN_TABLA, CliClienteTiendaClave::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, CliClienteTienda::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliClienteTienda::getCliClienteTiendas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliClienteTienda (Objeto) relacionado a traves de CliClienteTiendaClave */ 	
	public function getCliClienteTiendaXCliClienteTiendaClave($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClienteTiendasXCliClienteTiendaClave($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliClienteTiendaLogins */ 	
	public function getCliClienteTiendaLogins($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliClienteTiendaLogin::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliClienteTiendaLogin::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliClienteTiendaLogin::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliClienteTiendaLogin::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliClienteTiendaLogin::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliClienteTiendaLogin::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliClienteTiendaLogin::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliClienteTiendaLogin::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cliclientetiendalogins = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cliclientetiendalogin = CliClienteTiendaLogin::hidratarObjeto($fila);			
                $cliclientetiendalogins[] = $cliclientetiendalogin;
            }

            return $cliclientetiendalogins;
	}	
	

	/* Método getCliClienteTiendaLoginsBloque para MasInfo */ 	
	public function getCliClienteTiendaLoginsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliClienteTiendaLogins($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliClienteTiendaLogins Habilitados */ 	
	public function getCliClienteTiendaLoginsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliClienteTiendaLogins($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliClienteTiendaLogin */ 	
	public function getCliClienteTiendaLogin($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliClienteTiendaLogins($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliClienteTiendaLogin relacionadas */ 	
	public function deleteCliClienteTiendaLogins(){
            $obs = $this->getCliClienteTiendaLogins();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliClienteTiendaLoginsCmb() CliClienteTiendaLogin relacionadas */ 	
	public function getCliClienteTiendaLoginsCmb(){
            $c = new Criterio();
            $c->add(CliClienteTiendaLogin::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteTiendaLogin::GEN_TABLA);
            $c->setCriterios();

            $os = CliClienteTiendaLogin::getCliClienteTiendaLoginsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClienteTiendas (Coleccion) relacionados a traves de CliClienteTiendaLogin */ 	
	public function getCliClienteTiendasXCliClienteTiendaLogin($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliClienteTienda::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteTiendaLogin::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteTiendaLogin::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteTienda::GEN_TABLA);
            $c->addRealJoin(CliClienteTiendaLogin::GEN_TABLA, CliClienteTiendaLogin::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, CliClienteTienda::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliClienteTienda::getCliClienteTiendas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClienteTiendas relacionados a traves de CliClienteTiendaLogin */ 	
	public function getCantidadCliClienteTiendasXCliClienteTiendaLogin($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliClienteTienda::GEN_ATTR_ID);
            if($estado){
                $c->add(CliClienteTienda::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteTiendaLogin::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteTiendaLogin::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteTienda::GEN_TABLA);
            $c->addRealJoin(CliClienteTiendaLogin::GEN_TABLA, CliClienteTiendaLogin::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, CliClienteTienda::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliClienteTienda::getCliClienteTiendas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliClienteTienda (Objeto) relacionado a traves de CliClienteTiendaLogin */ 	
	public function getCliClienteTiendaXCliClienteTiendaLogin($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClienteTiendasXCliClienteTiendaLogin($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliClienteTiendaNavegacions */ 	
	public function getCliClienteTiendaNavegacions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliClienteTiendaNavegacion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliClienteTiendaNavegacion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliClienteTiendaNavegacion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliClienteTiendaNavegacion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliClienteTiendaNavegacion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliClienteTiendaNavegacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliClienteTiendaNavegacion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliClienteTiendaNavegacion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cliclientetiendanavegacions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cliclientetiendanavegacion = CliClienteTiendaNavegacion::hidratarObjeto($fila);			
                $cliclientetiendanavegacions[] = $cliclientetiendanavegacion;
            }

            return $cliclientetiendanavegacions;
	}	
	

	/* Método getCliClienteTiendaNavegacionsBloque para MasInfo */ 	
	public function getCliClienteTiendaNavegacionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliClienteTiendaNavegacions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliClienteTiendaNavegacions Habilitados */ 	
	public function getCliClienteTiendaNavegacionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliClienteTiendaNavegacions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliClienteTiendaNavegacion */ 	
	public function getCliClienteTiendaNavegacion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliClienteTiendaNavegacions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliClienteTiendaNavegacion relacionadas */ 	
	public function deleteCliClienteTiendaNavegacions(){
            $obs = $this->getCliClienteTiendaNavegacions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliClienteTiendaNavegacionsCmb() CliClienteTiendaNavegacion relacionadas */ 	
	public function getCliClienteTiendaNavegacionsCmb(){
            $c = new Criterio();
            $c->add(CliClienteTiendaNavegacion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteTiendaNavegacion::GEN_TABLA);
            $c->setCriterios();

            $os = CliClienteTiendaNavegacion::getCliClienteTiendaNavegacionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClienteTiendas (Coleccion) relacionados a traves de CliClienteTiendaNavegacion */ 	
	public function getCliClienteTiendasXCliClienteTiendaNavegacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliClienteTienda::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteTiendaNavegacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteTiendaNavegacion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteTienda::GEN_TABLA);
            $c->addRealJoin(CliClienteTiendaNavegacion::GEN_TABLA, CliClienteTiendaNavegacion::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, CliClienteTienda::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliClienteTienda::getCliClienteTiendas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClienteTiendas relacionados a traves de CliClienteTiendaNavegacion */ 	
	public function getCantidadCliClienteTiendasXCliClienteTiendaNavegacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliClienteTienda::GEN_ATTR_ID);
            if($estado){
                $c->add(CliClienteTienda::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteTiendaNavegacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteTiendaNavegacion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteTienda::GEN_TABLA);
            $c->addRealJoin(CliClienteTiendaNavegacion::GEN_TABLA, CliClienteTiendaNavegacion::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, CliClienteTienda::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliClienteTienda::getCliClienteTiendas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliClienteTienda (Objeto) relacionado a traves de CliClienteTiendaNavegacion */ 	
	public function getCliClienteTiendaXCliClienteTiendaNavegacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClienteTiendasXCliClienteTiendaNavegacion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getTndTiendaBusquedas */ 	
	public function getTndTiendaBusquedas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(TndTiendaBusqueda::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(TndTiendaBusqueda::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(TndTiendaBusqueda::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(TndTiendaBusqueda::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(TndTiendaBusqueda::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(TndTiendaBusqueda::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(TndTiendaBusqueda::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".TndTiendaBusqueda::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $tndtiendabusquedas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $tndtiendabusqueda = TndTiendaBusqueda::hidratarObjeto($fila);			
                $tndtiendabusquedas[] = $tndtiendabusqueda;
            }

            return $tndtiendabusquedas;
	}	
	

	/* Método getTndTiendaBusquedasBloque para MasInfo */ 	
	public function getTndTiendaBusquedasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getTndTiendaBusquedas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getTndTiendaBusquedas Habilitados */ 	
	public function getTndTiendaBusquedasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getTndTiendaBusquedas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getTndTiendaBusqueda */ 	
	public function getTndTiendaBusqueda($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getTndTiendaBusquedas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de TndTiendaBusqueda relacionadas */ 	
	public function deleteTndTiendaBusquedas(){
            $obs = $this->getTndTiendaBusquedas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getTndTiendaBusquedasCmb() TndTiendaBusqueda relacionadas */ 	
	public function getTndTiendaBusquedasCmb(){
            $c = new Criterio();
            $c->add(TndTiendaBusqueda::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(TndTiendaBusqueda::GEN_TABLA);
            $c->setCriterios();

            $os = TndTiendaBusqueda::getTndTiendaBusquedasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClienteTiendas (Coleccion) relacionados a traves de TndTiendaBusqueda */ 	
	public function getCliClienteTiendasXTndTiendaBusqueda($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliClienteTienda::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(TndTiendaBusqueda::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(TndTiendaBusqueda::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteTienda::GEN_TABLA);
            $c->addRealJoin(TndTiendaBusqueda::GEN_TABLA, TndTiendaBusqueda::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, CliClienteTienda::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliClienteTienda::getCliClienteTiendas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClienteTiendas relacionados a traves de TndTiendaBusqueda */ 	
	public function getCantidadCliClienteTiendasXTndTiendaBusqueda($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliClienteTienda::GEN_ATTR_ID);
            if($estado){
                $c->add(CliClienteTienda::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(TndTiendaBusqueda::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(TndTiendaBusqueda::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteTienda::GEN_TABLA);
            $c->addRealJoin(TndTiendaBusqueda::GEN_TABLA, TndTiendaBusqueda::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, CliClienteTienda::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliClienteTienda::getCliClienteTiendas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliClienteTienda (Objeto) relacionado a traves de TndTiendaBusqueda */ 	
	public function getCliClienteTiendaXTndTiendaBusqueda($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClienteTiendasXTndTiendaBusqueda($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPrdOrdenTrabajos */ 	
	public function getPrdOrdenTrabajos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrdOrdenTrabajo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrdOrdenTrabajo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrdOrdenTrabajo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PrdOrdenTrabajo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrdOrdenTrabajo::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrdOrdenTrabajo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrdOrdenTrabajo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrdOrdenTrabajo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prdordentrabajos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prdordentrabajo = PrdOrdenTrabajo::hidratarObjeto($fila);			
                $prdordentrabajos[] = $prdordentrabajo;
            }

            return $prdordentrabajos;
	}	
	

	/* Método getPrdOrdenTrabajosBloque para MasInfo */ 	
	public function getPrdOrdenTrabajosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrdOrdenTrabajos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrdOrdenTrabajos Habilitados */ 	
	public function getPrdOrdenTrabajosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrdOrdenTrabajos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrdOrdenTrabajo */ 	
	public function getPrdOrdenTrabajo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrdOrdenTrabajos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrdOrdenTrabajo relacionadas */ 	
	public function deletePrdOrdenTrabajos(){
            $obs = $this->getPrdOrdenTrabajos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrdOrdenTrabajosCmb() PrdOrdenTrabajo relacionadas */ 	
	public function getPrdOrdenTrabajosCmb(){
            $c = new Criterio();
            $c->add(PrdOrdenTrabajo::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdOrdenTrabajo::GEN_TABLA);
            $c->setCriterios();

            $os = PrdOrdenTrabajo::getPrdOrdenTrabajosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaPresupuestos (Coleccion) relacionados a traves de PrdOrdenTrabajo */ 	
	public function getVtaPresupuestosXPrdOrdenTrabajo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdOrdenTrabajo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdOrdenTrabajo::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addRealJoin(PrdOrdenTrabajo::GEN_TABLA, PrdOrdenTrabajo::GEN_ATTR_VTA_PRESUPUESTO_ID, VtaPresupuesto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPresupuesto::getVtaPresupuestos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaPresupuestos relacionados a traves de PrdOrdenTrabajo */ 	
	public function getCantidadVtaPresupuestosXPrdOrdenTrabajo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaPresupuesto::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdOrdenTrabajo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdOrdenTrabajo::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addRealJoin(PrdOrdenTrabajo::GEN_TABLA, PrdOrdenTrabajo::GEN_ATTR_VTA_PRESUPUESTO_ID, VtaPresupuesto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPresupuesto::getVtaPresupuestos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaPresupuesto (Objeto) relacionado a traves de PrdOrdenTrabajo */ 	
	public function getVtaPresupuestoXPrdOrdenTrabajo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaPresupuestosXPrdOrdenTrabajo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los GralSucursals asignados a CliCliente */ 	
	public function getGralSucursalCliClientesId(){
            $ids = array();
            foreach($this->getGralSucursalCliClientes() as $o){
            
                $ids[] = $o->getGralSucursalId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos GralSucursals asignados al CliCliente */ 	
	public function setGralSucursalCliClientes($ids){
            $this->deleteGralSucursalCliClientes();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new GralSucursalCliCliente();
                    $o->setGralSucursalId($id);
                    $o->setCliClienteId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion GralSucursal en el alta de CliCliente */ 	
	public function getAltaMostrarBloqueRelacionGralSucursalCliCliente(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los GralZonas asignados a CliCliente */ 	
	public function getGralZonaCliClientesId(){
            $ids = array();
            foreach($this->getGralZonaCliClientes() as $o){
            
                $ids[] = $o->getGralZonaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos GralZonas asignados al CliCliente */ 	
	public function setGralZonaCliClientes($ids){
            $this->deleteGralZonaCliClientes();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new GralZonaCliCliente();
                    $o->setGralZonaId($id);
                    $o->setCliClienteId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion GralZona en el alta de CliCliente */ 	
	public function getAltaMostrarBloqueRelacionGralZonaCliCliente(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los CliRubros asignados a CliCliente */ 	
	public function getCliClienteCliRubrosId(){
            $ids = array();
            foreach($this->getCliClienteCliRubros() as $o){
            
                $ids[] = $o->getCliRubroId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos CliRubros asignados al CliCliente */ 	
	public function setCliClienteCliRubros($ids){
            $this->deleteCliClienteCliRubros();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new CliClienteCliRubro();
                    $o->setCliRubroId($id);
                    $o->setCliClienteId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion CliRubro en el alta de CliCliente */ 	
	public function getAltaMostrarBloqueRelacionCliClienteCliRubro(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaVendedors asignados a CliCliente */ 	
	public function getCliClienteVtaVendedorsId(){
            $ids = array();
            foreach($this->getCliClienteVtaVendedors() as $o){
            
                $ids[] = $o->getVtaVendedorId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaVendedors asignados al CliCliente */ 	
	public function setCliClienteVtaVendedors($ids){
            $this->deleteCliClienteVtaVendedors();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new CliClienteVtaVendedor();
                    $o->setVtaVendedorId($id);
                    $o->setCliClienteId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaVendedor en el alta de CliCliente */ 	
	public function getAltaMostrarBloqueRelacionCliClienteVtaVendedor(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los InsTipoListaPrecios asignados a CliCliente */ 	
	public function getCliClienteInsTipoListaPreciosId(){
            $ids = array();
            foreach($this->getCliClienteInsTipoListaPrecios() as $o){
            
                $ids[] = $o->getInsTipoListaPrecioId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos InsTipoListaPrecios asignados al CliCliente */ 	
	public function setCliClienteInsTipoListaPrecios($ids){
            $this->deleteCliClienteInsTipoListaPrecios();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new CliClienteInsTipoListaPrecio();
                    $o->setInsTipoListaPrecioId($id);
                    $o->setCliClienteId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion InsTipoListaPrecio en el alta de CliCliente */ 	
	public function getAltaMostrarBloqueRelacionCliClienteInsTipoListaPrecio(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaPreventistas asignados a CliCliente */ 	
	public function getCliClienteVtaPreventistasId(){
            $ids = array();
            foreach($this->getCliClienteVtaPreventistas() as $o){
            
                $ids[] = $o->getVtaPreventistaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaPreventistas asignados al CliCliente */ 	
	public function setCliClienteVtaPreventistas($ids){
            $this->deleteCliClienteVtaPreventistas();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new CliClienteVtaPreventista();
                    $o->setVtaPreventistaId($id);
                    $o->setCliClienteId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaPreventista en el alta de CliCliente */ 	
	public function getAltaMostrarBloqueRelacionCliClienteVtaPreventista(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaCompradors asignados a CliCliente */ 	
	public function getCliClienteVtaCompradorsId(){
            $ids = array();
            foreach($this->getCliClienteVtaCompradors() as $o){
            
                $ids[] = $o->getVtaCompradorId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaCompradors asignados al CliCliente */ 	
	public function setCliClienteVtaCompradors($ids){
            $this->deleteCliClienteVtaCompradors();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new CliClienteVtaComprador();
                    $o->setVtaCompradorId($id);
                    $o->setCliClienteId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaComprador en el alta de CliCliente */ 	
	public function getAltaMostrarBloqueRelacionCliClienteVtaComprador(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los GralFpAgrupacions asignados a CliCliente */ 	
	public function getCliClienteGralFpAgrupacionsId(){
            $ids = array();
            foreach($this->getCliClienteGralFpAgrupacions() as $o){
            
                $ids[] = $o->getGralFpAgrupacionId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos GralFpAgrupacions asignados al CliCliente */ 	
	public function setCliClienteGralFpAgrupacions($ids){
            $this->deleteCliClienteGralFpAgrupacions();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new CliClienteGralFpAgrupacion();
                    $o->setGralFpAgrupacionId($id);
                    $o->setCliClienteId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion GralFpAgrupacion en el alta de CliCliente */ 	
	public function getAltaMostrarBloqueRelacionCliClienteGralFpAgrupacion(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los GralFpCuotas asignados a CliCliente */ 	
	public function getCliClienteGralFpCuotasId(){
            $ids = array();
            foreach($this->getCliClienteGralFpCuotas() as $o){
            
                $ids[] = $o->getGralFpCuotaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos GralFpCuotas asignados al CliCliente */ 	
	public function setCliClienteGralFpCuotas($ids){
            $this->deleteCliClienteGralFpCuotas();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new CliClienteGralFpCuota();
                    $o->setGralFpCuotaId($id);
                    $o->setCliClienteId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion GralFpCuota en el alta de CliCliente */ 	
	public function getAltaMostrarBloqueRelacionCliClienteGralFpCuota(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los GralActividads asignados a CliCliente */ 	
	public function getCliClienteGralActividadsId(){
            $ids = array();
            foreach($this->getCliClienteGralActividads() as $o){
            
                $ids[] = $o->getGralActividadId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos GralActividads asignados al CliCliente */ 	
	public function setCliClienteGralActividads($ids){
            $this->deleteCliClienteGralActividads();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new CliClienteGralActividad();
                    $o->setGralActividadId($id);
                    $o->setCliClienteId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion GralActividad en el alta de CliCliente */ 	
	public function getAltaMostrarBloqueRelacionCliClienteGralActividad(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaPuntoVentas asignados a CliCliente */ 	
	public function getCliClienteVtaPuntoVentasId(){
            $ids = array();
            foreach($this->getCliClienteVtaPuntoVentas() as $o){
            
                $ids[] = $o->getVtaPuntoVentaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaPuntoVentas asignados al CliCliente */ 	
	public function setCliClienteVtaPuntoVentas($ids){
            $this->deleteCliClienteVtaPuntoVentas();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new CliClienteVtaPuntoVenta();
                    $o->setVtaPuntoVentaId($id);
                    $o->setCliClienteId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaPuntoVenta en el alta de CliCliente */ 	
	public function getAltaMostrarBloqueRelacionCliClienteVtaPuntoVenta(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los CatCatalogos asignados a CliCliente */ 	
	public function getCatCatalogoCliClientesId(){
            $ids = array();
            foreach($this->getCatCatalogoCliClientes() as $o){
            
                $ids[] = $o->getCatCatalogoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos CatCatalogos asignados al CliCliente */ 	
	public function setCatCatalogoCliClientes($ids){
            $this->deleteCatCatalogoCliClientes();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new CatCatalogoCliCliente();
                    $o->setCatCatalogoId($id);
                    $o->setCliClienteId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion CatCatalogo en el alta de CliCliente */ 	
	public function getAltaMostrarBloqueRelacionCatCatalogoCliCliente(){
            return true;
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

	/* Metodo que retorna el CliTipoCliente (Clave Foranea) */ 	
    public function getCliTipoCliente(){
        $o = new CliTipoCliente();
        $o->setId($this->getCliTipoClienteId());
        return $o;			
    }

	/* Metodo que retorna el CliTipoCliente (Clave Foranea) en Array */ 	
    public function getCliTipoClienteEnArray(&$arr_os){
        if($this->getCliTipoClienteId() != 'null'){
            if(isset($arr_os[$this->getCliTipoClienteId()])){
                $o = $arr_os[$this->getCliTipoClienteId()];
            }else{
                $o = CliTipoCliente::getOxId($this->getCliTipoClienteId());
                if($o){
                    $arr_os[$this->getCliTipoClienteId()] = $o;
                }
            }
        }else{
            $o = new CliTipoCliente();
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

	/* Metodo que retorna el GeoZona (Clave Foranea) */ 	
    public function getGeoZona(){
        $o = new GeoZona();
        $o->setId($this->getGeoZonaId());
        return $o;			
    }

	/* Metodo que retorna el GeoZona (Clave Foranea) en Array */ 	
    public function getGeoZonaEnArray(&$arr_os){
        if($this->getGeoZonaId() != 'null'){
            if(isset($arr_os[$this->getGeoZonaId()])){
                $o = $arr_os[$this->getGeoZonaId()];
            }else{
                $o = GeoZona::getOxId($this->getGeoZonaId());
                if($o){
                    $arr_os[$this->getGeoZonaId()] = $o;
                }
            }
        }else{
            $o = new GeoZona();
        }
        return $o;		
    }

	/* Metodo que retorna el CliGrupo (Clave Foranea) */ 	
    public function getCliGrupo(){
        $o = new CliGrupo();
        $o->setId($this->getCliGrupoId());
        return $o;			
    }

	/* Metodo que retorna el CliGrupo (Clave Foranea) en Array */ 	
    public function getCliGrupoEnArray(&$arr_os){
        if($this->getCliGrupoId() != 'null'){
            if(isset($arr_os[$this->getCliGrupoId()])){
                $o = $arr_os[$this->getCliGrupoId()];
            }else{
                $o = CliGrupo::getOxId($this->getCliGrupoId());
                if($o){
                    $arr_os[$this->getCliGrupoId()] = $o;
                }
            }
        }else{
            $o = new CliGrupo();
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

	/* Metodo que retorna el CliCategoria (Clave Foranea) */ 	
    public function getCliCategoria(){
        $o = new CliCategoria();
        $o->setId($this->getCliCategoriaId());
        return $o;			
    }

	/* Metodo que retorna el CliCategoria (Clave Foranea) en Array */ 	
    public function getCliCategoriaEnArray(&$arr_os){
        if($this->getCliCategoriaId() != 'null'){
            if(isset($arr_os[$this->getCliCategoriaId()])){
                $o = $arr_os[$this->getCliCategoriaId()];
            }else{
                $o = CliCategoria::getOxId($this->getCliCategoriaId());
                if($o){
                    $arr_os[$this->getCliCategoriaId()] = $o;
                }
            }
        }else{
            $o = new CliCategoria();
        }
        return $o;		
    }

	/* Metodo que retorna el CliSubcategoria (Clave Foranea) */ 	
    public function getCliSubcategoria(){
        $o = new CliSubcategoria();
        $o->setId($this->getCliSubcategoriaId());
        return $o;			
    }

	/* Metodo que retorna el CliSubcategoria (Clave Foranea) en Array */ 	
    public function getCliSubcategoriaEnArray(&$arr_os){
        if($this->getCliSubcategoriaId() != 'null'){
            if(isset($arr_os[$this->getCliSubcategoriaId()])){
                $o = $arr_os[$this->getCliSubcategoriaId()];
            }else{
                $o = CliSubcategoria::getOxId($this->getCliSubcategoriaId());
                if($o){
                    $arr_os[$this->getCliSubcategoriaId()] = $o;
                }
            }
        }else{
            $o = new CliSubcategoria();
        }
        return $o;		
    }

	/* Metodo que retorna el CliClienteTipoGestion (Clave Foranea) */ 	
    public function getCliClienteTipoGestion(){
        $o = new CliClienteTipoGestion();
        $o->setId($this->getCliClienteTipoGestionId());
        return $o;			
    }

	/* Metodo que retorna el CliClienteTipoGestion (Clave Foranea) en Array */ 	
    public function getCliClienteTipoGestionEnArray(&$arr_os){
        if($this->getCliClienteTipoGestionId() != 'null'){
            if(isset($arr_os[$this->getCliClienteTipoGestionId()])){
                $o = $arr_os[$this->getCliClienteTipoGestionId()];
            }else{
                $o = CliClienteTipoGestion::getOxId($this->getCliClienteTipoGestionId());
                if($o){
                    $arr_os[$this->getCliClienteTipoGestionId()] = $o;
                }
            }
        }else{
            $o = new CliClienteTipoGestion();
        }
        return $o;		
    }

	/* Metodo que retorna el CliClientePeriodicidadGestion (Clave Foranea) */ 	
    public function getCliClientePeriodicidadGestion(){
        $o = new CliClientePeriodicidadGestion();
        $o->setId($this->getCliClientePeriodicidadGestionId());
        return $o;			
    }

	/* Metodo que retorna el CliClientePeriodicidadGestion (Clave Foranea) en Array */ 	
    public function getCliClientePeriodicidadGestionEnArray(&$arr_os){
        if($this->getCliClientePeriodicidadGestionId() != 'null'){
            if(isset($arr_os[$this->getCliClientePeriodicidadGestionId()])){
                $o = $arr_os[$this->getCliClientePeriodicidadGestionId()];
            }else{
                $o = CliClientePeriodicidadGestion::getOxId($this->getCliClientePeriodicidadGestionId());
                if($o){
                    $arr_os[$this->getCliClientePeriodicidadGestionId()] = $o;
                }
            }
        }else{
            $o = new CliClientePeriodicidadGestion();
        }
        return $o;		
    }

	/* Metodo que retorna el CliClienteTipoEstado (Clave Foranea) */ 	
    public function getCliClienteTipoEstado(){
        $o = new CliClienteTipoEstado();
        $o->setId($this->getCliClienteTipoEstadoId());
        return $o;			
    }

	/* Metodo que retorna el CliClienteTipoEstado (Clave Foranea) en Array */ 	
    public function getCliClienteTipoEstadoEnArray(&$arr_os){
        if($this->getCliClienteTipoEstadoId() != 'null'){
            if(isset($arr_os[$this->getCliClienteTipoEstadoId()])){
                $o = $arr_os[$this->getCliClienteTipoEstadoId()];
            }else{
                $o = CliClienteTipoEstado::getOxId($this->getCliClienteTipoEstadoId());
                if($o){
                    $arr_os[$this->getCliClienteTipoEstadoId()] = $o;
                }
            }
        }else{
            $o = new CliClienteTipoEstado();
        }
        return $o;		
    }

	/* Metodo que retorna el CliClienteTipoEstadoVenta (Clave Foranea) */ 	
    public function getCliClienteTipoEstadoVenta(){
        $o = new CliClienteTipoEstadoVenta();
        $o->setId($this->getCliClienteTipoEstadoVentaId());
        return $o;			
    }

	/* Metodo que retorna el CliClienteTipoEstadoVenta (Clave Foranea) en Array */ 	
    public function getCliClienteTipoEstadoVentaEnArray(&$arr_os){
        if($this->getCliClienteTipoEstadoVentaId() != 'null'){
            if(isset($arr_os[$this->getCliClienteTipoEstadoVentaId()])){
                $o = $arr_os[$this->getCliClienteTipoEstadoVentaId()];
            }else{
                $o = CliClienteTipoEstadoVenta::getOxId($this->getCliClienteTipoEstadoVentaId());
                if($o){
                    $arr_os[$this->getCliClienteTipoEstadoVentaId()] = $o;
                }
            }
        }else{
            $o = new CliClienteTipoEstadoVenta();
        }
        return $o;		
    }

	/* Metodo que retorna el CliClienteTipoEstadoCobro (Clave Foranea) */ 	
    public function getCliClienteTipoEstadoCobro(){
        $o = new CliClienteTipoEstadoCobro();
        $o->setId($this->getCliClienteTipoEstadoCobroId());
        return $o;			
    }

	/* Metodo que retorna el CliClienteTipoEstadoCobro (Clave Foranea) en Array */ 	
    public function getCliClienteTipoEstadoCobroEnArray(&$arr_os){
        if($this->getCliClienteTipoEstadoCobroId() != 'null'){
            if(isset($arr_os[$this->getCliClienteTipoEstadoCobroId()])){
                $o = $arr_os[$this->getCliClienteTipoEstadoCobroId()];
            }else{
                $o = CliClienteTipoEstadoCobro::getOxId($this->getCliClienteTipoEstadoCobroId());
                if($o){
                    $arr_os[$this->getCliClienteTipoEstadoCobroId()] = $o;
                }
            }
        }else{
            $o = new CliClienteTipoEstadoCobro();
        }
        return $o;		
    }

	/* Metodo que retorna el CliClienteTipoEstadoCuenta (Clave Foranea) */ 	
    public function getCliClienteTipoEstadoCuenta(){
        $o = new CliClienteTipoEstadoCuenta();
        $o->setId($this->getCliClienteTipoEstadoCuentaId());
        return $o;			
    }

	/* Metodo que retorna el CliClienteTipoEstadoCuenta (Clave Foranea) en Array */ 	
    public function getCliClienteTipoEstadoCuentaEnArray(&$arr_os){
        if($this->getCliClienteTipoEstadoCuentaId() != 'null'){
            if(isset($arr_os[$this->getCliClienteTipoEstadoCuentaId()])){
                $o = $arr_os[$this->getCliClienteTipoEstadoCuentaId()];
            }else{
                $o = CliClienteTipoEstadoCuenta::getOxId($this->getCliClienteTipoEstadoCuentaId());
                if($o){
                    $arr_os[$this->getCliClienteTipoEstadoCuentaId()] = $o;
                }
            }
        }else{
            $o = new CliClienteTipoEstadoCuenta();
        }
        return $o;		
    }

	/* Metodo que retorna el CliClienteTipoEstadoSatisfaccion (Clave Foranea) */ 	
    public function getCliClienteTipoEstadoSatisfaccion(){
        $o = new CliClienteTipoEstadoSatisfaccion();
        $o->setId($this->getCliClienteTipoEstadoSatisfaccionId());
        return $o;			
    }

	/* Metodo que retorna el CliClienteTipoEstadoSatisfaccion (Clave Foranea) en Array */ 	
    public function getCliClienteTipoEstadoSatisfaccionEnArray(&$arr_os){
        if($this->getCliClienteTipoEstadoSatisfaccionId() != 'null'){
            if(isset($arr_os[$this->getCliClienteTipoEstadoSatisfaccionId()])){
                $o = $arr_os[$this->getCliClienteTipoEstadoSatisfaccionId()];
            }else{
                $o = CliClienteTipoEstadoSatisfaccion::getOxId($this->getCliClienteTipoEstadoSatisfaccionId());
                if($o){
                    $arr_os[$this->getCliClienteTipoEstadoSatisfaccionId()] = $o;
                }
            }
        }else{
            $o = new CliClienteTipoEstadoSatisfaccion();
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
            		
        if($contexto_solicitante != CliTipoCliente::GEN_CLASE){
            if($this->getCliTipoCliente()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(CliTipoCliente::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getCliTipoCliente()->getDescripcion().'</strong>';
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
            		
        if($contexto_solicitante != GeoLocalidad::GEN_CLASE){
            if($this->getGeoLocalidad()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GeoLocalidad::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGeoLocalidad()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GeoZona::GEN_CLASE){
            if($this->getGeoZona()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GeoZona::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGeoZona()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != CliGrupo::GEN_CLASE){
            if($this->getCliGrupo()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(CliGrupo::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getCliGrupo()->getDescripcion().'</strong>';
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
            		
        if($contexto_solicitante != CliCategoria::GEN_CLASE){
            if($this->getCliCategoria()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(CliCategoria::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getCliCategoria()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != CliSubcategoria::GEN_CLASE){
            if($this->getCliSubcategoria()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(CliSubcategoria::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getCliSubcategoria()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != CliClienteTipoGestion::GEN_CLASE){
            if($this->getCliClienteTipoGestion()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(CliClienteTipoGestion::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getCliClienteTipoGestion()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != CliClientePeriodicidadGestion::GEN_CLASE){
            if($this->getCliClientePeriodicidadGestion()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(CliClientePeriodicidadGestion::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getCliClientePeriodicidadGestion()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != CliClienteTipoEstado::GEN_CLASE){
            if($this->getCliClienteTipoEstado()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(CliClienteTipoEstado::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getCliClienteTipoEstado()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != CliClienteTipoEstadoVenta::GEN_CLASE){
            if($this->getCliClienteTipoEstadoVenta()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(CliClienteTipoEstadoVenta::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getCliClienteTipoEstadoVenta()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != CliClienteTipoEstadoCobro::GEN_CLASE){
            if($this->getCliClienteTipoEstadoCobro()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(CliClienteTipoEstadoCobro::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getCliClienteTipoEstadoCobro()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != CliClienteTipoEstadoCuenta::GEN_CLASE){
            if($this->getCliClienteTipoEstadoCuenta()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(CliClienteTipoEstadoCuenta::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getCliClienteTipoEstadoCuenta()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != CliClienteTipoEstadoSatisfaccion::GEN_CLASE){
            if($this->getCliClienteTipoEstadoSatisfaccion()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(CliClienteTipoEstadoSatisfaccion::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getCliClienteTipoEstadoSatisfaccion()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM cli_cliente'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'cli_cliente';");
            
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

            $obs = self::getCliClientes($paginador, $criterio);
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

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
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

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_tipo_personeria_id' */ 	
	static function getOxGralTipoPersoneriaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
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

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_condicion_iva_id' */ 	
	static function getOxGralCondicionIvaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_CONDICION_IVA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
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

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cli_tipo_cliente_id' */ 	
	static function getOxCliTipoClienteId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_TIPO_CLIENTE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cli_tipo_cliente_id' */ 	
	static function getOsxCliTipoClienteId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_TIPO_CLIENTE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'razon_social' */ 	
	static function getOxRazonSocial($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_RAZON_SOCIAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
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

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_tipo_documento_id' */ 	
	static function getOxGralTipoDocumentoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
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

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cuit' */ 	
	static function getOxCuit($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUIT, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
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

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'domicilio_legal' */ 	
	static function getOxDomicilioLegal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DOMICILIO_LEGAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
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

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_casa' */ 	
	static function getOxNumeroCasa($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_CASA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'numero_casa' */ 	
	static function getOsxNumeroCasa($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_CASA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'telefono' */ 	
	static function getOxTelefono($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_TELEFONO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
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

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'telefono_whatsapp' */ 	
	static function getOxTelefonoWhatsapp($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_TELEFONO_WHATSAPP, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'telefono_whatsapp' */ 	
	static function getOsxTelefonoWhatsapp($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_TELEFONO_WHATSAPP, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'email' */ 	
	static function getOxEmail($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EMAIL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
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

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo_postal' */ 	
	static function getOxCodigoPostal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_POSTAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
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

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'geo_localidad_id' */ 	
	static function getOxGeoLocalidadId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GEO_LOCALIDAD_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
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

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'geo_zona_id' */ 	
	static function getOxGeoZonaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GEO_ZONA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'geo_zona_id' */ 	
	static function getOsxGeoZonaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GEO_ZONA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
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

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cli_grupo_id' */ 	
	static function getOxCliGrupoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_GRUPO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cli_grupo_id' */ 	
	static function getOsxCliGrupoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_GRUPO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_empresa_transportadora_id' */ 	
	static function getOxGralEmpresaTransportadoraId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_EMPRESA_TRANSPORTADORA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
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

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cli_categoria_id' */ 	
	static function getOxCliCategoriaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CATEGORIA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cli_categoria_id' */ 	
	static function getOsxCliCategoriaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CATEGORIA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cli_subcategoria_id' */ 	
	static function getOxCliSubcategoriaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_SUBCATEGORIA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cli_subcategoria_id' */ 	
	static function getOsxCliSubcategoriaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_SUBCATEGORIA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'limite_ctacte_importe' */ 	
	static function getOxLimiteCtacteImporte($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_LIMITE_CTACTE_IMPORTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'limite_ctacte_importe' */ 	
	static function getOsxLimiteCtacteImporte($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_LIMITE_CTACTE_IMPORTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'limite_ctacte_dias' */ 	
	static function getOxLimiteCtacteDias($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_LIMITE_CTACTE_DIAS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'limite_ctacte_dias' */ 	
	static function getOsxLimiteCtacteDias($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_LIMITE_CTACTE_DIAS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cli_cliente_tipo_gestion_id' */ 	
	static function getOxCliClienteTipoGestionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CLIENTE_TIPO_GESTION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cli_cliente_tipo_gestion_id' */ 	
	static function getOsxCliClienteTipoGestionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CLIENTE_TIPO_GESTION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cli_cliente_periodicidad_gestion_id' */ 	
	static function getOxCliClientePeriodicidadGestionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CLIENTE_PERIODICIDAD_GESTION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cli_cliente_periodicidad_gestion_id' */ 	
	static function getOsxCliClientePeriodicidadGestionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CLIENTE_PERIODICIDAD_GESTION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cli_cliente_tipo_estado_id' */ 	
	static function getOxCliClienteTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cli_cliente_tipo_estado_id' */ 	
	static function getOsxCliClienteTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cli_cliente_tipo_estado_venta_id' */ 	
	static function getOxCliClienteTipoEstadoVentaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_VENTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cli_cliente_tipo_estado_venta_id' */ 	
	static function getOsxCliClienteTipoEstadoVentaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_VENTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cli_cliente_tipo_estado_cobro_id' */ 	
	static function getOxCliClienteTipoEstadoCobroId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_COBRO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cli_cliente_tipo_estado_cobro_id' */ 	
	static function getOsxCliClienteTipoEstadoCobroId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_COBRO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cli_cliente_tipo_estado_cuenta_id' */ 	
	static function getOxCliClienteTipoEstadoCuentaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_CUENTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cli_cliente_tipo_estado_cuenta_id' */ 	
	static function getOsxCliClienteTipoEstadoCuentaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_CUENTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cli_cliente_tipo_estado_satisfaccion_id' */ 	
	static function getOxCliClienteTipoEstadoSatisfaccionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_SATISFACCION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cli_cliente_tipo_estado_satisfaccion_id' */ 	
	static function getOsxCliClienteTipoEstadoSatisfaccionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_SATISFACCION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'iva_exceptuado' */ 	
	static function getOxIvaExceptuado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IVA_EXCEPTUADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'iva_exceptuado' */ 	
	static function getOsxIvaExceptuado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IVA_EXCEPTUADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
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

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'datos_migracion' */ 	
	static function getOxDatosMigracion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DATOS_MIGRACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
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

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'claves' */ 	
	static function getOxClaves($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLAVES, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
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

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
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

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
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

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
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

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
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

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
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

            $obs = self::getCliClientes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClientes($paginador, $criterio);
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

            $obs = self::getCliClientes(null, $criterio);
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

            $obs = self::getCliClientes($paginador, $criterio);
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

            $obs = self::getCliClientes($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'cli_cliente_adm');
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
	public function getCliClienteEstadosParaBloqueVinculo($palabra, $pagina){
            $c = new Criterio();

            $c->addInicioSubconsulta();
            $c->add(CliClienteEstado::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL, false, '');
            $c->addFinSubconsulta();

            $c->addInicioSubconsulta();
            $c->add(CliClienteEstado::GEN_ATTR_ID, '%'.$palabra.'%', Criterio::LIKE);
            
                $c->add(CliClienteEstado::GEN_ATTR_DESCRIPCION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(CliClienteEstado::GEN_ATTR_CODIGO, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(CliClienteEstado::GEN_ATTR_OBSERVACION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
            $c->addFinSubconsulta();

            $c->addTabla(CliClienteEstado::GEN_TABLA);
            $c->addOrden('2');
            $c->setCriterios();

            $paginador = new Paginador(50, $pagina);

            $cli_cliente_estados = CliClienteEstado::getCliClienteEstados($paginador, $c);

            $arr['COLECCION'] = $cli_cliente_estados;
            $arr['PAGINADOR'] = $paginador;
            return $arr;
	}

	/* retorna coleccion para mostrar en bloque vinculos 'modificado_por' */ 	
	public function getCliClienteEstadoVentasParaBloqueVinculo($palabra, $pagina){
            $c = new Criterio();

            $c->addInicioSubconsulta();
            $c->add(CliClienteEstadoVenta::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL, false, '');
            $c->addFinSubconsulta();

            $c->addInicioSubconsulta();
            $c->add(CliClienteEstadoVenta::GEN_ATTR_ID, '%'.$palabra.'%', Criterio::LIKE);
            
                $c->add(CliClienteEstadoVenta::GEN_ATTR_DESCRIPCION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(CliClienteEstadoVenta::GEN_ATTR_CODIGO, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(CliClienteEstadoVenta::GEN_ATTR_OBSERVACION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
            $c->addFinSubconsulta();

            $c->addTabla(CliClienteEstadoVenta::GEN_TABLA);
            $c->addOrden('2');
            $c->setCriterios();

            $paginador = new Paginador(50, $pagina);

            $cli_cliente_estado_ventas = CliClienteEstadoVenta::getCliClienteEstadoVentas($paginador, $c);

            $arr['COLECCION'] = $cli_cliente_estado_ventas;
            $arr['PAGINADOR'] = $paginador;
            return $arr;
	}

	/* retorna coleccion para mostrar en bloque vinculos 'modificado_por' */ 	
	public function getCliClienteEstadoCobrosParaBloqueVinculo($palabra, $pagina){
            $c = new Criterio();

            $c->addInicioSubconsulta();
            $c->add(CliClienteEstadoCobro::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL, false, '');
            $c->addFinSubconsulta();

            $c->addInicioSubconsulta();
            $c->add(CliClienteEstadoCobro::GEN_ATTR_ID, '%'.$palabra.'%', Criterio::LIKE);
            
                $c->add(CliClienteEstadoCobro::GEN_ATTR_DESCRIPCION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(CliClienteEstadoCobro::GEN_ATTR_CODIGO, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(CliClienteEstadoCobro::GEN_ATTR_OBSERVACION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
            $c->addFinSubconsulta();

            $c->addTabla(CliClienteEstadoCobro::GEN_TABLA);
            $c->addOrden('2');
            $c->setCriterios();

            $paginador = new Paginador(50, $pagina);

            $cli_cliente_estado_cobros = CliClienteEstadoCobro::getCliClienteEstadoCobros($paginador, $c);

            $arr['COLECCION'] = $cli_cliente_estado_cobros;
            $arr['PAGINADOR'] = $paginador;
            return $arr;
	}

	/* retorna coleccion para mostrar en bloque vinculos 'modificado_por' */ 	
	public function getCliClienteEstadoCuentasParaBloqueVinculo($palabra, $pagina){
            $c = new Criterio();

            $c->addInicioSubconsulta();
            $c->add(CliClienteEstadoCuenta::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL, false, '');
            $c->addFinSubconsulta();

            $c->addInicioSubconsulta();
            $c->add(CliClienteEstadoCuenta::GEN_ATTR_ID, '%'.$palabra.'%', Criterio::LIKE);
            
                $c->add(CliClienteEstadoCuenta::GEN_ATTR_DESCRIPCION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(CliClienteEstadoCuenta::GEN_ATTR_CODIGO, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(CliClienteEstadoCuenta::GEN_ATTR_OBSERVACION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
            $c->addFinSubconsulta();

            $c->addTabla(CliClienteEstadoCuenta::GEN_TABLA);
            $c->addOrden('2');
            $c->setCriterios();

            $paginador = new Paginador(50, $pagina);

            $cli_cliente_estado_cuentas = CliClienteEstadoCuenta::getCliClienteEstadoCuentas($paginador, $c);

            $arr['COLECCION'] = $cli_cliente_estado_cuentas;
            $arr['PAGINADOR'] = $paginador;
            return $arr;
	}

	/* retorna coleccion para mostrar en bloque vinculos 'modificado_por' */ 	
	public function getCliClienteEstadoSatisfaccionsParaBloqueVinculo($palabra, $pagina){
            $c = new Criterio();

            $c->addInicioSubconsulta();
            $c->add(CliClienteEstadoSatisfaccion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL, false, '');
            $c->addFinSubconsulta();

            $c->addInicioSubconsulta();
            $c->add(CliClienteEstadoSatisfaccion::GEN_ATTR_ID, '%'.$palabra.'%', Criterio::LIKE);
            
                $c->add(CliClienteEstadoSatisfaccion::GEN_ATTR_DESCRIPCION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(CliClienteEstadoSatisfaccion::GEN_ATTR_CODIGO, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(CliClienteEstadoSatisfaccion::GEN_ATTR_OBSERVACION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
            $c->addFinSubconsulta();

            $c->addTabla(CliClienteEstadoSatisfaccion::GEN_TABLA);
            $c->addOrden('2');
            $c->setCriterios();

            $paginador = new Paginador(50, $pagina);

            $cli_cliente_estado_satisfaccions = CliClienteEstadoSatisfaccion::getCliClienteEstadoSatisfaccions($paginador, $c);

            $arr['COLECCION'] = $cli_cliente_estado_satisfaccions;
            $arr['PAGINADOR'] = $paginador;
            return $arr;
	}

	/* retorna coleccion para mostrar en bloque vinculos 'modificado_por' */ 	
	public function getCliTelefonosParaBloqueVinculo($palabra, $pagina){
            $c = new Criterio();

            $c->addInicioSubconsulta();
            $c->add(CliTelefono::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL, false, '');
            $c->addFinSubconsulta();

            $c->addInicioSubconsulta();
            $c->add(CliTelefono::GEN_ATTR_ID, '%'.$palabra.'%', Criterio::LIKE);
            
                $c->add(CliTelefono::GEN_ATTR_DESCRIPCION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(CliTelefono::GEN_ATTR_CODIGO, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(CliTelefono::GEN_ATTR_OBSERVACION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
            $c->addFinSubconsulta();

            $c->addTabla(CliTelefono::GEN_TABLA);
            $c->addOrden('2');
            $c->setCriterios();

            $paginador = new Paginador(50, $pagina);

            $cli_telefonos = CliTelefono::getCliTelefonos($paginador, $c);

            $arr['COLECCION'] = $cli_telefonos;
            $arr['PAGINADOR'] = $paginador;
            return $arr;
	}

	/* retorna coleccion para mostrar en bloque vinculos 'modificado_por' */ 	
	public function getCliEmailsParaBloqueVinculo($palabra, $pagina){
            $c = new Criterio();

            $c->addInicioSubconsulta();
            $c->add(CliEmail::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL, false, '');
            $c->addFinSubconsulta();

            $c->addInicioSubconsulta();
            $c->add(CliEmail::GEN_ATTR_ID, '%'.$palabra.'%', Criterio::LIKE);
            
                $c->add(CliEmail::GEN_ATTR_DESCRIPCION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(CliEmail::GEN_ATTR_CODIGO, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(CliEmail::GEN_ATTR_OBSERVACION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
            $c->addFinSubconsulta();

            $c->addTabla(CliEmail::GEN_TABLA);
            $c->addOrden('2');
            $c->setCriterios();

            $paginador = new Paginador(50, $pagina);

            $cli_emails = CliEmail::getCliEmails($paginador, $c);

            $arr['COLECCION'] = $cli_emails;
            $arr['PAGINADOR'] = $paginador;
            return $arr;
	}

	/* retorna coleccion para mostrar en bloque vinculos 'modificado_por' */ 	
	public function getCliDomiciliosParaBloqueVinculo($palabra, $pagina){
            $c = new Criterio();

            $c->addInicioSubconsulta();
            $c->add(CliDomicilio::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL, false, '');
            $c->addFinSubconsulta();

            $c->addInicioSubconsulta();
            $c->add(CliDomicilio::GEN_ATTR_ID, '%'.$palabra.'%', Criterio::LIKE);
            
                $c->add(CliDomicilio::GEN_ATTR_DESCRIPCION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(CliDomicilio::GEN_ATTR_CODIGO, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(CliDomicilio::GEN_ATTR_OBSERVACION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
            $c->addFinSubconsulta();

            $c->addTabla(CliDomicilio::GEN_TABLA);
            $c->addOrden('2');
            $c->setCriterios();

            $paginador = new Paginador(50, $pagina);

            $cli_domicilios = CliDomicilio::getCliDomicilios($paginador, $c);

            $arr['COLECCION'] = $cli_domicilios;
            $arr['PAGINADOR'] = $paginador;
            return $arr;
	}

	/* retorna coleccion para mostrar en bloque vinculos 'modificado_por' */ 	
	public function getCliCentroRecepcionsParaBloqueVinculo($palabra, $pagina){
            $c = new Criterio();

            $c->addInicioSubconsulta();
            $c->add(CliCentroRecepcion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL, false, '');
            $c->addFinSubconsulta();

            $c->addInicioSubconsulta();
            $c->add(CliCentroRecepcion::GEN_ATTR_ID, '%'.$palabra.'%', Criterio::LIKE);
            
                $c->add(CliCentroRecepcion::GEN_ATTR_DESCRIPCION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(CliCentroRecepcion::GEN_ATTR_CODIGO, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(CliCentroRecepcion::GEN_ATTR_OBSERVACION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
            $c->addFinSubconsulta();

            $c->addTabla(CliCentroRecepcion::GEN_TABLA);
            $c->addOrden('2');
            $c->setCriterios();

            $paginador = new Paginador(50, $pagina);

            $cli_centro_recepcions = CliCentroRecepcion::getCliCentroRecepcions($paginador, $c);

            $arr['COLECCION'] = $cli_centro_recepcions;
            $arr['PAGINADOR'] = $paginador;
            return $arr;
	}

	/* retorna coleccion para mostrar en bloque vinculos 'modificado_por' */ 	
	public function getCliCentroPedidosParaBloqueVinculo($palabra, $pagina){
            $c = new Criterio();

            $c->addInicioSubconsulta();
            $c->add(CliCentroPedido::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL, false, '');
            $c->addFinSubconsulta();

            $c->addInicioSubconsulta();
            $c->add(CliCentroPedido::GEN_ATTR_ID, '%'.$palabra.'%', Criterio::LIKE);
            
                $c->add(CliCentroPedido::GEN_ATTR_DESCRIPCION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(CliCentroPedido::GEN_ATTR_CODIGO, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(CliCentroPedido::GEN_ATTR_OBSERVACION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
            $c->addFinSubconsulta();

            $c->addTabla(CliCentroPedido::GEN_TABLA);
            $c->addOrden('2');
            $c->setCriterios();

            $paginador = new Paginador(50, $pagina);

            $cli_centro_pedidos = CliCentroPedido::getCliCentroPedidos($paginador, $c);

            $arr['COLECCION'] = $cli_centro_pedidos;
            $arr['PAGINADOR'] = $paginador;
            return $arr;
	}

	/* retorna coleccion para mostrar en bloque vinculos 'modificado_por' */ 	
	public function getCliMedioDigitalsParaBloqueVinculo($palabra, $pagina){
            $c = new Criterio();

            $c->addInicioSubconsulta();
            $c->add(CliMedioDigital::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL, false, '');
            $c->addFinSubconsulta();

            $c->addInicioSubconsulta();
            $c->add(CliMedioDigital::GEN_ATTR_ID, '%'.$palabra.'%', Criterio::LIKE);
            
                $c->add(CliMedioDigital::GEN_ATTR_DESCRIPCION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(CliMedioDigital::GEN_ATTR_CODIGO, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(CliMedioDigital::GEN_ATTR_OBSERVACION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
            $c->addFinSubconsulta();

            $c->addTabla(CliMedioDigital::GEN_TABLA);
            $c->addOrden('2');
            $c->setCriterios();

            $paginador = new Paginador(50, $pagina);

            $cli_medio_digitals = CliMedioDigital::getCliMedioDigitals($paginador, $c);

            $arr['COLECCION'] = $cli_medio_digitals;
            $arr['PAGINADOR'] = $paginador;
            return $arr;
	}

	/* retorna coleccion para mostrar en bloque vinculos 'modificado_por' */ 	
	public function getCliClienteInfoSifensParaBloqueVinculo($palabra, $pagina){
            $c = new Criterio();

            $c->addInicioSubconsulta();
            $c->add(CliClienteInfoSifen::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL, false, '');
            $c->addFinSubconsulta();

            $c->addInicioSubconsulta();
            $c->add(CliClienteInfoSifen::GEN_ATTR_ID, '%'.$palabra.'%', Criterio::LIKE);
            
                $c->add(CliClienteInfoSifen::GEN_ATTR_DESCRIPCION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(CliClienteInfoSifen::GEN_ATTR_CODIGO, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(CliClienteInfoSifen::GEN_ATTR_OBSERVACION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
            $c->addFinSubconsulta();

            $c->addTabla(CliClienteInfoSifen::GEN_TABLA);
            $c->addOrden('2');
            $c->setCriterios();

            $paginador = new Paginador(50, $pagina);

            $cli_cliente_info_sifens = CliClienteInfoSifen::getCliClienteInfoSifens($paginador, $c);

            $arr['COLECCION'] = $cli_cliente_info_sifens;
            $arr['PAGINADOR'] = $paginador;
            return $arr;
	}

	/* retorna coleccion para mostrar en bloque vinculos 'modificado_por' */ 	
	public function getVtaTributoExencionsParaBloqueVinculo($palabra, $pagina){
            $c = new Criterio();

            $c->addInicioSubconsulta();
            $c->add(VtaTributoExencion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL, false, '');
            $c->addFinSubconsulta();

            $c->addInicioSubconsulta();
            $c->add(VtaTributoExencion::GEN_ATTR_ID, '%'.$palabra.'%', Criterio::LIKE);
            
                $c->add(VtaTributoExencion::GEN_ATTR_DESCRIPCION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(VtaTributoExencion::GEN_ATTR_CODIGO, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(VtaTributoExencion::GEN_ATTR_OBSERVACION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
            $c->addFinSubconsulta();

            $c->addTabla(VtaTributoExencion::GEN_TABLA);
            $c->addOrden('2');
            $c->setCriterios();

            $paginador = new Paginador(50, $pagina);

            $vta_tributo_exencions = VtaTributoExencion::getVtaTributoExencions($paginador, $c);

            $arr['COLECCION'] = $vta_tributo_exencions;
            $arr['PAGINADOR'] = $paginador;
            return $arr;
	}

	/* setea CliClienteEstado actual del 'CliCliente' */ 	
	public function setCliClienteEstadoDesdeBackend($codigo, $observacion){
            return $this->setCliClienteEstado($codigo, $observacion);
        }
        

	/* setea CliClienteEstado actual del 'CliCliente' */ 	
	public function setCliClienteEstado($codigo, $observacion){
            
            // --------------------------------------------------------------------
            // se actualizan los campos actual de todos los CliClienteEstado del CliCliente
            // --------------------------------------------------------------------
            $inicial = 1;
            foreach ($this->getCliClienteEstados() as $cli_cliente_estado) {
                $cli_cliente_estado->setActual(0);
                $cli_cliente_estado->save();

                $inicial = 0;
            }

            // --------------------------------------------------------------------
            // se agrega el nuevo CliClienteEstado del CliCliente        
            // --------------------------------------------------------------------
            $cli_cliente_tipo_estado = CliClienteTipoEstado::getOxCodigo($codigo);

            $cli_cliente_estado = new CliClienteEstado();
            $cli_cliente_estado->setCliClienteId($this->getId());
            $cli_cliente_estado->setCliClienteTipoEstadoId($cli_cliente_tipo_estado->getId());
            $cli_cliente_estado->setInicial($inicial);
            $cli_cliente_estado->setActual(1);
            $cli_cliente_estado->setEstado(1);
            $cli_cliente_estado->setObservacion($observacion);
            $cli_cliente_estado->save();

            // --------------------------------------------------------------------
            // se actualiza el CliClienteEstado en CliCliente        
            // --------------------------------------------------------------------
            $this->setCliClienteTipoEstadoId($cli_cliente_tipo_estado->getId());
            $this->saveDesdeProceso();

            return $cli_cliente_estado;
	}

	/* devuelve el CliClienteEstado actual del 'CliCliente' */ 	
	public function getCliClienteEstadoActual(){
            
            $c = new Criterio();
            $c->add(CliClienteEstado::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->add(CliClienteEstado::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
            $c->addTabla(CliClienteEstado::GEN_TABLA);
            $c->setCriterios();

            $cli_cliente_estados = CliClienteEstado::getCliClienteEstados(null, $c);
            foreach ($cli_cliente_estados as $cli_cliente_estado) {
                return $cli_cliente_estado;
            }
            return false;
	}

	/* devuelve el CliClienteTipoEstado potenciales para el 'CliCliente' */ 	
	public function getCliClienteTipoEstadosPotenciales(){
            $cli_cliente_tipo_estados = CliClienteTipoEstado::getCliClienteTipoEstados(null, null, true);
            return $cli_cliente_tipo_estados;
	}

	/* devuelve el CliClienteTipoEstado en CMB potenciales para el 'CliCliente' */ 	
	public function getCliClienteTipoEstadosPotencialesCmb(){
            $cont = 0;
            $arr = array();
            foreach ($this->getCliClienteTipoEstadosPotenciales() as $cli_cliente_tipo_estado) {
                $cont++;
                $arr[$cont]['cod'] = $cli_cliente_tipo_estado->getId();
                $arr[$cont]['descripcion'] = $cli_cliente_tipo_estado->getDescripcionParaSelect();
            }
            return $arr;
	}

	/* setea CliClienteEstadoVenta actual del 'CliCliente' */ 	
	public function setCliClienteEstadoVentaDesdeBackend($codigo, $observacion){
            return $this->setCliClienteEstadoVenta($codigo, $observacion);
        }
        

	/* setea CliClienteEstadoVenta actual del 'CliCliente' */ 	
	public function setCliClienteEstadoVenta($codigo, $observacion){
            
            // --------------------------------------------------------------------
            // se actualizan los campos actual de todos los CliClienteEstadoVenta del CliCliente
            // --------------------------------------------------------------------
            $inicial = 1;
            foreach ($this->getCliClienteEstadoVentas() as $cli_cliente_estado_venta) {
                $cli_cliente_estado_venta->setActual(0);
                $cli_cliente_estado_venta->save();

                $inicial = 0;
            }

            // --------------------------------------------------------------------
            // se agrega el nuevo CliClienteEstadoVenta del CliCliente        
            // --------------------------------------------------------------------
            $cli_cliente_tipo_estado_venta = CliClienteTipoEstadoVenta::getOxCodigo($codigo);

            $cli_cliente_estado_venta = new CliClienteEstadoVenta();
            $cli_cliente_estado_venta->setCliClienteId($this->getId());
            $cli_cliente_estado_venta->setCliClienteTipoEstadoVentaId($cli_cliente_tipo_estado_venta->getId());
            $cli_cliente_estado_venta->setInicial($inicial);
            $cli_cliente_estado_venta->setActual(1);
            $cli_cliente_estado_venta->setEstado(1);
            $cli_cliente_estado_venta->setObservacion($observacion);
            $cli_cliente_estado_venta->save();

            // --------------------------------------------------------------------
            // se actualiza el CliClienteEstadoVenta en CliCliente        
            // --------------------------------------------------------------------
            $this->setCliClienteTipoEstadoVentaId($cli_cliente_tipo_estado_venta->getId());
            $this->saveDesdeProceso();

            return $cli_cliente_estado_venta;
	}

	/* devuelve el CliClienteEstadoVenta actual del 'CliCliente' */ 	
	public function getCliClienteEstadoVentaActual(){
            
            $c = new Criterio();
            $c->add(CliClienteEstadoVenta::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->add(CliClienteEstadoVenta::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
            $c->addTabla(CliClienteEstadoVenta::GEN_TABLA);
            $c->setCriterios();

            $cli_cliente_estado_ventas = CliClienteEstadoVenta::getCliClienteEstadoVentas(null, $c);
            foreach ($cli_cliente_estado_ventas as $cli_cliente_estado_venta) {
                return $cli_cliente_estado_venta;
            }
            return false;
	}

	/* devuelve el CliClienteTipoEstadoVenta potenciales para el 'CliCliente' */ 	
	public function getCliClienteTipoEstadoVentasPotenciales(){
            $cli_cliente_tipo_estado_ventas = CliClienteTipoEstadoVenta::getCliClienteTipoEstadoVentas(null, null, true);
            return $cli_cliente_tipo_estado_ventas;
	}

	/* devuelve el CliClienteTipoEstadoVenta en CMB potenciales para el 'CliCliente' */ 	
	public function getCliClienteTipoEstadoVentasPotencialesCmb(){
            $cont = 0;
            $arr = array();
            foreach ($this->getCliClienteTipoEstadoVentasPotenciales() as $cli_cliente_tipo_estado_venta) {
                $cont++;
                $arr[$cont]['cod'] = $cli_cliente_tipo_estado_venta->getId();
                $arr[$cont]['descripcion'] = $cli_cliente_tipo_estado_venta->getDescripcionParaSelect();
            }
            return $arr;
	}

	/* setea CliClienteEstadoCobro actual del 'CliCliente' */ 	
	public function setCliClienteEstadoCobroDesdeBackend($codigo, $observacion){
            return $this->setCliClienteEstadoCobro($codigo, $observacion);
        }
        

	/* setea CliClienteEstadoCobro actual del 'CliCliente' */ 	
	public function setCliClienteEstadoCobro($codigo, $observacion){
            
            // --------------------------------------------------------------------
            // se actualizan los campos actual de todos los CliClienteEstadoCobro del CliCliente
            // --------------------------------------------------------------------
            $inicial = 1;
            foreach ($this->getCliClienteEstadoCobros() as $cli_cliente_estado_cobro) {
                $cli_cliente_estado_cobro->setActual(0);
                $cli_cliente_estado_cobro->save();

                $inicial = 0;
            }

            // --------------------------------------------------------------------
            // se agrega el nuevo CliClienteEstadoCobro del CliCliente        
            // --------------------------------------------------------------------
            $cli_cliente_tipo_estado_cobro = CliClienteTipoEstadoCobro::getOxCodigo($codigo);

            $cli_cliente_estado_cobro = new CliClienteEstadoCobro();
            $cli_cliente_estado_cobro->setCliClienteId($this->getId());
            $cli_cliente_estado_cobro->setCliClienteTipoEstadoCobroId($cli_cliente_tipo_estado_cobro->getId());
            $cli_cliente_estado_cobro->setInicial($inicial);
            $cli_cliente_estado_cobro->setActual(1);
            $cli_cliente_estado_cobro->setEstado(1);
            $cli_cliente_estado_cobro->setObservacion($observacion);
            $cli_cliente_estado_cobro->save();

            // --------------------------------------------------------------------
            // se actualiza el CliClienteEstadoCobro en CliCliente        
            // --------------------------------------------------------------------
            $this->setCliClienteTipoEstadoCobroId($cli_cliente_tipo_estado_cobro->getId());
            $this->saveDesdeProceso();

            return $cli_cliente_estado_cobro;
	}

	/* devuelve el CliClienteEstadoCobro actual del 'CliCliente' */ 	
	public function getCliClienteEstadoCobroActual(){
            
            $c = new Criterio();
            $c->add(CliClienteEstadoCobro::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->add(CliClienteEstadoCobro::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
            $c->addTabla(CliClienteEstadoCobro::GEN_TABLA);
            $c->setCriterios();

            $cli_cliente_estado_cobros = CliClienteEstadoCobro::getCliClienteEstadoCobros(null, $c);
            foreach ($cli_cliente_estado_cobros as $cli_cliente_estado_cobro) {
                return $cli_cliente_estado_cobro;
            }
            return false;
	}

	/* devuelve el CliClienteTipoEstadoCobro potenciales para el 'CliCliente' */ 	
	public function getCliClienteTipoEstadoCobrosPotenciales(){
            $cli_cliente_tipo_estado_cobros = CliClienteTipoEstadoCobro::getCliClienteTipoEstadoCobros(null, null, true);
            return $cli_cliente_tipo_estado_cobros;
	}

	/* devuelve el CliClienteTipoEstadoCobro en CMB potenciales para el 'CliCliente' */ 	
	public function getCliClienteTipoEstadoCobrosPotencialesCmb(){
            $cont = 0;
            $arr = array();
            foreach ($this->getCliClienteTipoEstadoCobrosPotenciales() as $cli_cliente_tipo_estado_cobro) {
                $cont++;
                $arr[$cont]['cod'] = $cli_cliente_tipo_estado_cobro->getId();
                $arr[$cont]['descripcion'] = $cli_cliente_tipo_estado_cobro->getDescripcionParaSelect();
            }
            return $arr;
	}

	/* setea CliClienteEstadoCuenta actual del 'CliCliente' */ 	
	public function setCliClienteEstadoCuentaDesdeBackend($codigo, $observacion){
            return $this->setCliClienteEstadoCuenta($codigo, $observacion);
        }
        

	/* setea CliClienteEstadoCuenta actual del 'CliCliente' */ 	
	public function setCliClienteEstadoCuenta($codigo, $observacion){
            
            // --------------------------------------------------------------------
            // se actualizan los campos actual de todos los CliClienteEstadoCuenta del CliCliente
            // --------------------------------------------------------------------
            $inicial = 1;
            foreach ($this->getCliClienteEstadoCuentas() as $cli_cliente_estado_cuenta) {
                $cli_cliente_estado_cuenta->setActual(0);
                $cli_cliente_estado_cuenta->save();

                $inicial = 0;
            }

            // --------------------------------------------------------------------
            // se agrega el nuevo CliClienteEstadoCuenta del CliCliente        
            // --------------------------------------------------------------------
            $cli_cliente_tipo_estado_cuenta = CliClienteTipoEstadoCuenta::getOxCodigo($codigo);

            $cli_cliente_estado_cuenta = new CliClienteEstadoCuenta();
            $cli_cliente_estado_cuenta->setCliClienteId($this->getId());
            $cli_cliente_estado_cuenta->setCliClienteTipoEstadoCuentaId($cli_cliente_tipo_estado_cuenta->getId());
            $cli_cliente_estado_cuenta->setInicial($inicial);
            $cli_cliente_estado_cuenta->setActual(1);
            $cli_cliente_estado_cuenta->setEstado(1);
            $cli_cliente_estado_cuenta->setObservacion($observacion);
            $cli_cliente_estado_cuenta->save();

            // --------------------------------------------------------------------
            // se actualiza el CliClienteEstadoCuenta en CliCliente        
            // --------------------------------------------------------------------
            $this->setCliClienteTipoEstadoCuentaId($cli_cliente_tipo_estado_cuenta->getId());
            $this->saveDesdeProceso();

            return $cli_cliente_estado_cuenta;
	}

	/* devuelve el CliClienteEstadoCuenta actual del 'CliCliente' */ 	
	public function getCliClienteEstadoCuentaActual(){
            
            $c = new Criterio();
            $c->add(CliClienteEstadoCuenta::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->add(CliClienteEstadoCuenta::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
            $c->addTabla(CliClienteEstadoCuenta::GEN_TABLA);
            $c->setCriterios();

            $cli_cliente_estado_cuentas = CliClienteEstadoCuenta::getCliClienteEstadoCuentas(null, $c);
            foreach ($cli_cliente_estado_cuentas as $cli_cliente_estado_cuenta) {
                return $cli_cliente_estado_cuenta;
            }
            return false;
	}

	/* devuelve el CliClienteTipoEstadoCuenta potenciales para el 'CliCliente' */ 	
	public function getCliClienteTipoEstadoCuentasPotenciales(){
            $cli_cliente_tipo_estado_cuentas = CliClienteTipoEstadoCuenta::getCliClienteTipoEstadoCuentas(null, null, true);
            return $cli_cliente_tipo_estado_cuentas;
	}

	/* devuelve el CliClienteTipoEstadoCuenta en CMB potenciales para el 'CliCliente' */ 	
	public function getCliClienteTipoEstadoCuentasPotencialesCmb(){
            $cont = 0;
            $arr = array();
            foreach ($this->getCliClienteTipoEstadoCuentasPotenciales() as $cli_cliente_tipo_estado_cuenta) {
                $cont++;
                $arr[$cont]['cod'] = $cli_cliente_tipo_estado_cuenta->getId();
                $arr[$cont]['descripcion'] = $cli_cliente_tipo_estado_cuenta->getDescripcionParaSelect();
            }
            return $arr;
	}

	/* setea CliClienteEstadoSatisfaccion actual del 'CliCliente' */ 	
	public function setCliClienteEstadoSatisfaccionDesdeBackend($codigo, $observacion){
            return $this->setCliClienteEstadoSatisfaccion($codigo, $observacion);
        }
        

	/* setea CliClienteEstadoSatisfaccion actual del 'CliCliente' */ 	
	public function setCliClienteEstadoSatisfaccion($codigo, $observacion){
            
            // --------------------------------------------------------------------
            // se actualizan los campos actual de todos los CliClienteEstadoSatisfaccion del CliCliente
            // --------------------------------------------------------------------
            $inicial = 1;
            foreach ($this->getCliClienteEstadoSatisfaccions() as $cli_cliente_estado_satisfaccion) {
                $cli_cliente_estado_satisfaccion->setActual(0);
                $cli_cliente_estado_satisfaccion->save();

                $inicial = 0;
            }

            // --------------------------------------------------------------------
            // se agrega el nuevo CliClienteEstadoSatisfaccion del CliCliente        
            // --------------------------------------------------------------------
            $cli_cliente_tipo_estado_satisfaccion = CliClienteTipoEstadoSatisfaccion::getOxCodigo($codigo);

            $cli_cliente_estado_satisfaccion = new CliClienteEstadoSatisfaccion();
            $cli_cliente_estado_satisfaccion->setCliClienteId($this->getId());
            $cli_cliente_estado_satisfaccion->setCliClienteTipoEstadoSatisfaccionId($cli_cliente_tipo_estado_satisfaccion->getId());
            $cli_cliente_estado_satisfaccion->setInicial($inicial);
            $cli_cliente_estado_satisfaccion->setActual(1);
            $cli_cliente_estado_satisfaccion->setEstado(1);
            $cli_cliente_estado_satisfaccion->setObservacion($observacion);
            $cli_cliente_estado_satisfaccion->save();

            // --------------------------------------------------------------------
            // se actualiza el CliClienteEstadoSatisfaccion en CliCliente        
            // --------------------------------------------------------------------
            $this->setCliClienteTipoEstadoSatisfaccionId($cli_cliente_tipo_estado_satisfaccion->getId());
            $this->saveDesdeProceso();

            return $cli_cliente_estado_satisfaccion;
	}

	/* devuelve el CliClienteEstadoSatisfaccion actual del 'CliCliente' */ 	
	public function getCliClienteEstadoSatisfaccionActual(){
            
            $c = new Criterio();
            $c->add(CliClienteEstadoSatisfaccion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
            $c->add(CliClienteEstadoSatisfaccion::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
            $c->addTabla(CliClienteEstadoSatisfaccion::GEN_TABLA);
            $c->setCriterios();

            $cli_cliente_estado_satisfaccions = CliClienteEstadoSatisfaccion::getCliClienteEstadoSatisfaccions(null, $c);
            foreach ($cli_cliente_estado_satisfaccions as $cli_cliente_estado_satisfaccion) {
                return $cli_cliente_estado_satisfaccion;
            }
            return false;
	}

	/* devuelve el CliClienteTipoEstadoSatisfaccion potenciales para el 'CliCliente' */ 	
	public function getCliClienteTipoEstadoSatisfaccionsPotenciales(){
            $cli_cliente_tipo_estado_satisfaccions = CliClienteTipoEstadoSatisfaccion::getCliClienteTipoEstadoSatisfaccions(null, null, true);
            return $cli_cliente_tipo_estado_satisfaccions;
	}

	/* devuelve el CliClienteTipoEstadoSatisfaccion en CMB potenciales para el 'CliCliente' */ 	
	public function getCliClienteTipoEstadoSatisfaccionsPotencialesCmb(){
            $cont = 0;
            $arr = array();
            foreach ($this->getCliClienteTipoEstadoSatisfaccionsPotenciales() as $cli_cliente_tipo_estado_satisfaccion) {
                $cont++;
                $arr[$cont]['cod'] = $cli_cliente_tipo_estado_satisfaccion->getId();
                $arr[$cont]['descripcion'] = $cli_cliente_tipo_estado_satisfaccion->getDescripcionParaSelect();
            }
            return $arr;
	}
	
            /**
             * Metodo que retorna una coleccion de descripciones unificada para usar en autosuggest
             */
            static function getArrDescripcionsUnificado(){
                $c = new Criterio();
                $c->addTabla(CliCliente::GEN_TABLA);
                $c->addOrden(CliCliente::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $cli_clientes = CliCliente::getCliClientes(null, $c);

                $arr = array();
                foreach($cli_clientes as $cli_cliente){
                    $descripcion = $cli_cliente->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>