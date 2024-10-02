<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BVtaFacturaImporte
{ 
	
	const SES_PAGINACION = 'adm_vtafacturaimporte_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_vtafacturaimporte_paginas_registros';
	const SES_CRITERIOS = 'adm_vtafacturaimporte_criterios';
	
	const GEN_CLASE = 'VtaFacturaImporte';
	const GEN_TABLA = 'vta_factura_importe';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BVtaFacturaImporte */ 
	const GEN_ATTR_ID = 'vta_factura_importe.id';
	const GEN_ATTR_DESCRIPCION = 'vta_factura_importe.descripcion';
	const GEN_ATTR_VTA_FACTURA_ID = 'vta_factura_importe.vta_factura_id';
	const GEN_ATTR_IMPORTE_SUBTOTAL = 'vta_factura_importe.importe_subtotal';
	const GEN_ATTR_IMPORTE_IVA = 'vta_factura_importe.importe_iva';
	const GEN_ATTR_IMPORTE_TRIBUTO = 'vta_factura_importe.importe_tributo';
	const GEN_ATTR_IMPORTE_TOTAL = 'vta_factura_importe.importe_total';
	const GEN_ATTR_IMPORTE_SALDADO = 'vta_factura_importe.importe_saldado';
	const GEN_ATTR_IMPORTE_SALDO = 'vta_factura_importe.importe_saldo';
	const GEN_ATTR_IMPORTE_TOTAL_REAL = 'vta_factura_importe.importe_total_real';
	const GEN_ATTR_IMPORTE_COSTO = 'vta_factura_importe.importe_costo';
	const GEN_ATTR_IMPORTE_COSTO_REAL = 'vta_factura_importe.importe_costo_real';
	const GEN_ATTR_IMPORTE_NC_ANULACION_AFECTADO = 'vta_factura_importe.importe_nc_anulacion_afectado';
	const GEN_ATTR_IMPORTE_NC_DESCUENTO_AFECTADO = 'vta_factura_importe.importe_nc_descuento_afectado';
	const GEN_ATTR_IMPORTE_RBO_AFECTADO = 'vta_factura_importe.importe_rbo_afectado';
	const GEN_ATTR_CODIGO = 'vta_factura_importe.codigo';
	const GEN_ATTR_OBSERVACION = 'vta_factura_importe.observacion';
	const GEN_ATTR_ORDEN = 'vta_factura_importe.orden';
	const GEN_ATTR_ESTADO = 'vta_factura_importe.estado';
	const GEN_ATTR_CREADO = 'vta_factura_importe.creado';
	const GEN_ATTR_CREADO_POR = 'vta_factura_importe.creado_por';
	const GEN_ATTR_MODIFICADO = 'vta_factura_importe.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'vta_factura_importe.modificado_por';

	/* Constantes de Atributos Min de BVtaFacturaImporte */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_VTA_FACTURA_ID = 'vta_factura_id';
	const GEN_ATTR_MIN_IMPORTE_SUBTOTAL = 'importe_subtotal';
	const GEN_ATTR_MIN_IMPORTE_IVA = 'importe_iva';
	const GEN_ATTR_MIN_IMPORTE_TRIBUTO = 'importe_tributo';
	const GEN_ATTR_MIN_IMPORTE_TOTAL = 'importe_total';
	const GEN_ATTR_MIN_IMPORTE_SALDADO = 'importe_saldado';
	const GEN_ATTR_MIN_IMPORTE_SALDO = 'importe_saldo';
	const GEN_ATTR_MIN_IMPORTE_TOTAL_REAL = 'importe_total_real';
	const GEN_ATTR_MIN_IMPORTE_COSTO = 'importe_costo';
	const GEN_ATTR_MIN_IMPORTE_COSTO_REAL = 'importe_costo_real';
	const GEN_ATTR_MIN_IMPORTE_NC_ANULACION_AFECTADO = 'importe_nc_anulacion_afectado';
	const GEN_ATTR_MIN_IMPORTE_NC_DESCUENTO_AFECTADO = 'importe_nc_descuento_afectado';
	const GEN_ATTR_MIN_IMPORTE_RBO_AFECTADO = 'importe_rbo_afectado';
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
	

	/* Atributos de BVtaFacturaImporte */ 
	private $id;
	private $descripcion;
	private $vta_factura_id;
	private $importe_subtotal;
	private $importe_iva;
	private $importe_tributo;
	private $importe_total;
	private $importe_saldado;
	private $importe_saldo;
	private $importe_total_real;
	private $importe_costo;
	private $importe_costo_real;
	private $importe_nc_anulacion_afectado;
	private $importe_nc_descuento_afectado;
	private $importe_rbo_afectado;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BVtaFacturaImporte */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getVtaFacturaId(){ if(isset($this->vta_factura_id)){ return $this->vta_factura_id; }else{ return 'null'; } }
	public function getImporteSubtotal(){ if(isset($this->importe_subtotal)){ return $this->importe_subtotal; }else{ return 0; } }
	public function getImporteIva(){ if(isset($this->importe_iva)){ return $this->importe_iva; }else{ return 0; } }
	public function getImporteTributo(){ if(isset($this->importe_tributo)){ return $this->importe_tributo; }else{ return 0; } }
	public function getImporteTotal(){ if(isset($this->importe_total)){ return $this->importe_total; }else{ return 0; } }
	public function getImporteSaldado(){ if(isset($this->importe_saldado)){ return $this->importe_saldado; }else{ return 0; } }
	public function getImporteSaldo(){ if(isset($this->importe_saldo)){ return $this->importe_saldo; }else{ return 0; } }
	public function getImporteTotalReal(){ if(isset($this->importe_total_real)){ return $this->importe_total_real; }else{ return 0; } }
	public function getImporteCosto(){ if(isset($this->importe_costo)){ return $this->importe_costo; }else{ return 0; } }
	public function getImporteCostoReal(){ if(isset($this->importe_costo_real)){ return $this->importe_costo_real; }else{ return 0; } }
	public function getImporteNcAnulacionAfectado(){ if(isset($this->importe_nc_anulacion_afectado)){ return $this->importe_nc_anulacion_afectado; }else{ return 0; } }
	public function getImporteNcDescuentoAfectado(){ if(isset($this->importe_nc_descuento_afectado)){ return $this->importe_nc_descuento_afectado; }else{ return 0; } }
	public function getImporteRboAfectado(){ if(isset($this->importe_rbo_afectado)){ return $this->importe_rbo_afectado; }else{ return 0; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BVtaFacturaImporte */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_VTA_FACTURA_ID."
				, ".self::GEN_ATTR_IMPORTE_SUBTOTAL."
				, ".self::GEN_ATTR_IMPORTE_IVA."
				, ".self::GEN_ATTR_IMPORTE_TRIBUTO."
				, ".self::GEN_ATTR_IMPORTE_TOTAL."
				, ".self::GEN_ATTR_IMPORTE_SALDADO."
				, ".self::GEN_ATTR_IMPORTE_SALDO."
				, ".self::GEN_ATTR_IMPORTE_TOTAL_REAL."
				, ".self::GEN_ATTR_IMPORTE_COSTO."
				, ".self::GEN_ATTR_IMPORTE_COSTO_REAL."
				, ".self::GEN_ATTR_IMPORTE_NC_ANULACION_AFECTADO."
				, ".self::GEN_ATTR_IMPORTE_NC_DESCUENTO_AFECTADO."
				, ".self::GEN_ATTR_IMPORTE_RBO_AFECTADO."
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
				$this->setVtaFacturaId($fila[self::GEN_ATTR_MIN_VTA_FACTURA_ID]);
				$this->setImporteSubtotal($fila[self::GEN_ATTR_MIN_IMPORTE_SUBTOTAL]);
				$this->setImporteIva($fila[self::GEN_ATTR_MIN_IMPORTE_IVA]);
				$this->setImporteTributo($fila[self::GEN_ATTR_MIN_IMPORTE_TRIBUTO]);
				$this->setImporteTotal($fila[self::GEN_ATTR_MIN_IMPORTE_TOTAL]);
				$this->setImporteSaldado($fila[self::GEN_ATTR_MIN_IMPORTE_SALDADO]);
				$this->setImporteSaldo($fila[self::GEN_ATTR_MIN_IMPORTE_SALDO]);
				$this->setImporteTotalReal($fila[self::GEN_ATTR_MIN_IMPORTE_TOTAL_REAL]);
				$this->setImporteCosto($fila[self::GEN_ATTR_MIN_IMPORTE_COSTO]);
				$this->setImporteCostoReal($fila[self::GEN_ATTR_MIN_IMPORTE_COSTO_REAL]);
				$this->setImporteNcAnulacionAfectado($fila[self::GEN_ATTR_MIN_IMPORTE_NC_ANULACION_AFECTADO]);
				$this->setImporteNcDescuentoAfectado($fila[self::GEN_ATTR_MIN_IMPORTE_NC_DESCUENTO_AFECTADO]);
				$this->setImporteRboAfectado($fila[self::GEN_ATTR_MIN_IMPORTE_RBO_AFECTADO]);
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
	public function setVtaFacturaId($v){ $this->vta_factura_id = $v; }
	public function setImporteSubtotal($v){ $this->importe_subtotal = $v; }
	public function setImporteIva($v){ $this->importe_iva = $v; }
	public function setImporteTributo($v){ $this->importe_tributo = $v; }
	public function setImporteTotal($v){ $this->importe_total = $v; }
	public function setImporteSaldado($v){ $this->importe_saldado = $v; }
	public function setImporteSaldo($v){ $this->importe_saldo = $v; }
	public function setImporteTotalReal($v){ $this->importe_total_real = $v; }
	public function setImporteCosto($v){ $this->importe_costo = $v; }
	public function setImporteCostoReal($v){ $this->importe_costo_real = $v; }
	public function setImporteNcAnulacionAfectado($v){ $this->importe_nc_anulacion_afectado = $v; }
	public function setImporteNcDescuentoAfectado($v){ $this->importe_nc_descuento_afectado = $v; }
	public function setImporteRboAfectado($v){ $this->importe_rbo_afectado = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new VtaFacturaImporte();
            $o->setId($fila[VtaFacturaImporte::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setVtaFacturaId($fila[self::GEN_ATTR_MIN_VTA_FACTURA_ID]);
			$o->setImporteSubtotal($fila[self::GEN_ATTR_MIN_IMPORTE_SUBTOTAL]);
			$o->setImporteIva($fila[self::GEN_ATTR_MIN_IMPORTE_IVA]);
			$o->setImporteTributo($fila[self::GEN_ATTR_MIN_IMPORTE_TRIBUTO]);
			$o->setImporteTotal($fila[self::GEN_ATTR_MIN_IMPORTE_TOTAL]);
			$o->setImporteSaldado($fila[self::GEN_ATTR_MIN_IMPORTE_SALDADO]);
			$o->setImporteSaldo($fila[self::GEN_ATTR_MIN_IMPORTE_SALDO]);
			$o->setImporteTotalReal($fila[self::GEN_ATTR_MIN_IMPORTE_TOTAL_REAL]);
			$o->setImporteCosto($fila[self::GEN_ATTR_MIN_IMPORTE_COSTO]);
			$o->setImporteCostoReal($fila[self::GEN_ATTR_MIN_IMPORTE_COSTO_REAL]);
			$o->setImporteNcAnulacionAfectado($fila[self::GEN_ATTR_MIN_IMPORTE_NC_ANULACION_AFECTADO]);
			$o->setImporteNcDescuentoAfectado($fila[self::GEN_ATTR_MIN_IMPORTE_NC_DESCUENTO_AFECTADO]);
			$o->setImporteRboAfectado($fila[self::GEN_ATTR_MIN_IMPORTE_RBO_AFECTADO]);
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

	/* Control de BVtaFacturaImporte */ 	
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

	/* Cambia el estado de BVtaFacturaImporte */ 	
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

	/* Save de BVtaFacturaImporte */ 	
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
						, ".self::GEN_ATTR_MIN_VTA_FACTURA_ID."
						, ".self::GEN_ATTR_MIN_IMPORTE_SUBTOTAL."
						, ".self::GEN_ATTR_MIN_IMPORTE_IVA."
						, ".self::GEN_ATTR_MIN_IMPORTE_TRIBUTO."
						, ".self::GEN_ATTR_MIN_IMPORTE_TOTAL."
						, ".self::GEN_ATTR_MIN_IMPORTE_SALDADO."
						, ".self::GEN_ATTR_MIN_IMPORTE_SALDO."
						, ".self::GEN_ATTR_MIN_IMPORTE_TOTAL_REAL."
						, ".self::GEN_ATTR_MIN_IMPORTE_COSTO."
						, ".self::GEN_ATTR_MIN_IMPORTE_COSTO_REAL."
						, ".self::GEN_ATTR_MIN_IMPORTE_NC_ANULACION_AFECTADO."
						, ".self::GEN_ATTR_MIN_IMPORTE_NC_DESCUENTO_AFECTADO."
						, ".self::GEN_ATTR_MIN_IMPORTE_RBO_AFECTADO."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('vta_factura_importe_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getVtaFacturaId()."
						, '".$this->getImporteSubtotal()."'
						, '".$this->getImporteIva()."'
						, '".$this->getImporteTributo()."'
						, '".$this->getImporteTotal()."'
						, '".$this->getImporteSaldado()."'
						, '".$this->getImporteSaldo()."'
						, '".$this->getImporteTotalReal()."'
						, '".$this->getImporteCosto()."'
						, '".$this->getImporteCostoReal()."'
						, '".$this->getImporteNcAnulacionAfectado()."'
						, '".$this->getImporteNcDescuentoAfectado()."'
						, '".$this->getImporteRboAfectado()."'
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('vta_factura_importe_seq')";
            
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
                 
				 ".VtaFacturaImporte::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_VTA_FACTURA_ID." = ".$this->getVtaFacturaId()."
						, ".self::GEN_ATTR_MIN_IMPORTE_SUBTOTAL." = '".$this->getImporteSubtotal()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_IVA." = '".$this->getImporteIva()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_TRIBUTO." = '".$this->getImporteTributo()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_TOTAL." = '".$this->getImporteTotal()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_SALDADO." = '".$this->getImporteSaldado()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_SALDO." = '".$this->getImporteSaldo()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_TOTAL_REAL." = '".$this->getImporteTotalReal()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_COSTO." = '".$this->getImporteCosto()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_COSTO_REAL." = '".$this->getImporteCostoReal()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_NC_ANULACION_AFECTADO." = '".$this->getImporteNcAnulacionAfectado()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_NC_DESCUENTO_AFECTADO." = '".$this->getImporteNcDescuentoAfectado()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_RBO_AFECTADO." = '".$this->getImporteRboAfectado()."'
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
						, ".self::GEN_ATTR_MIN_VTA_FACTURA_ID."
						, ".self::GEN_ATTR_MIN_IMPORTE_SUBTOTAL."
						, ".self::GEN_ATTR_MIN_IMPORTE_IVA."
						, ".self::GEN_ATTR_MIN_IMPORTE_TRIBUTO."
						, ".self::GEN_ATTR_MIN_IMPORTE_TOTAL."
						, ".self::GEN_ATTR_MIN_IMPORTE_SALDADO."
						, ".self::GEN_ATTR_MIN_IMPORTE_SALDO."
						, ".self::GEN_ATTR_MIN_IMPORTE_TOTAL_REAL."
						, ".self::GEN_ATTR_MIN_IMPORTE_COSTO."
						, ".self::GEN_ATTR_MIN_IMPORTE_COSTO_REAL."
						, ".self::GEN_ATTR_MIN_IMPORTE_NC_ANULACION_AFECTADO."
						, ".self::GEN_ATTR_MIN_IMPORTE_NC_DESCUENTO_AFECTADO."
						, ".self::GEN_ATTR_MIN_IMPORTE_RBO_AFECTADO."
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
						, ".$this->getVtaFacturaId()."
						, '".$this->getImporteSubtotal()."'
						, '".$this->getImporteIva()."'
						, '".$this->getImporteTributo()."'
						, '".$this->getImporteTotal()."'
						, '".$this->getImporteSaldado()."'
						, '".$this->getImporteSaldo()."'
						, '".$this->getImporteTotalReal()."'
						, '".$this->getImporteCosto()."'
						, '".$this->getImporteCostoReal()."'
						, '".$this->getImporteNcAnulacionAfectado()."'
						, '".$this->getImporteNcDescuentoAfectado()."'
						, '".$this->getImporteRboAfectado()."'
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
                     
				 ".VtaFacturaImporte::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_VTA_FACTURA_ID." = ".$this->getVtaFacturaId()."
						, ".self::GEN_ATTR_MIN_IMPORTE_SUBTOTAL." = '".$this->getImporteSubtotal()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_IVA." = '".$this->getImporteIva()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_TRIBUTO." = '".$this->getImporteTributo()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_TOTAL." = '".$this->getImporteTotal()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_SALDADO." = '".$this->getImporteSaldado()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_SALDO." = '".$this->getImporteSaldo()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_TOTAL_REAL." = '".$this->getImporteTotalReal()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_COSTO." = '".$this->getImporteCosto()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_COSTO_REAL." = '".$this->getImporteCostoReal()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_NC_ANULACION_AFECTADO." = '".$this->getImporteNcAnulacionAfectado()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_NC_DESCUENTO_AFECTADO." = '".$this->getImporteNcDescuentoAfectado()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_RBO_AFECTADO." = '".$this->getImporteRboAfectado()."'
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
            $o = new VtaFacturaImporte();
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

	/* Delete de BVtaFacturaImporte */ 	
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
	
	public function duplicarVtaFacturaImporte(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getVtaFacturaImportes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = VtaFacturaImporte::setAplicarFiltrosDeAlcance($criterio);

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
	
		$vtafacturaimportes = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $vtafacturaimporte = new VtaFacturaImporte();
                    $vtafacturaimporte->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $vtafacturaimporte->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$vtafacturaimporte->setVtaFacturaId($fila[self::GEN_ATTR_MIN_VTA_FACTURA_ID]);
			$vtafacturaimporte->setImporteSubtotal($fila[self::GEN_ATTR_MIN_IMPORTE_SUBTOTAL]);
			$vtafacturaimporte->setImporteIva($fila[self::GEN_ATTR_MIN_IMPORTE_IVA]);
			$vtafacturaimporte->setImporteTributo($fila[self::GEN_ATTR_MIN_IMPORTE_TRIBUTO]);
			$vtafacturaimporte->setImporteTotal($fila[self::GEN_ATTR_MIN_IMPORTE_TOTAL]);
			$vtafacturaimporte->setImporteSaldado($fila[self::GEN_ATTR_MIN_IMPORTE_SALDADO]);
			$vtafacturaimporte->setImporteSaldo($fila[self::GEN_ATTR_MIN_IMPORTE_SALDO]);
			$vtafacturaimporte->setImporteTotalReal($fila[self::GEN_ATTR_MIN_IMPORTE_TOTAL_REAL]);
			$vtafacturaimporte->setImporteCosto($fila[self::GEN_ATTR_MIN_IMPORTE_COSTO]);
			$vtafacturaimporte->setImporteCostoReal($fila[self::GEN_ATTR_MIN_IMPORTE_COSTO_REAL]);
			$vtafacturaimporte->setImporteNcAnulacionAfectado($fila[self::GEN_ATTR_MIN_IMPORTE_NC_ANULACION_AFECTADO]);
			$vtafacturaimporte->setImporteNcDescuentoAfectado($fila[self::GEN_ATTR_MIN_IMPORTE_NC_DESCUENTO_AFECTADO]);
			$vtafacturaimporte->setImporteRboAfectado($fila[self::GEN_ATTR_MIN_IMPORTE_RBO_AFECTADO]);
			$vtafacturaimporte->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$vtafacturaimporte->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$vtafacturaimporte->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$vtafacturaimporte->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$vtafacturaimporte->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$vtafacturaimporte->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$vtafacturaimporte->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$vtafacturaimporte->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $vtafacturaimportes[] = $vtafacturaimporte;
		}
		
		return $vtafacturaimportes;
	}	
	

	/* Método getVtaFacturaImportes Habilitados */ 	
	static function getVtaFacturaImportesHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return VtaFacturaImporte::getVtaFacturaImportes($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getVtaFacturaImportes para listado de Backend */ 	
	static function getVtaFacturaImportesDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return VtaFacturaImporte::getVtaFacturaImportes($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getVtaFacturaImportesCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = VtaFacturaImporte::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = VtaFacturaImporte::getVtaFacturaImportes($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaFacturaImportes filtrado para select */ 	
	static function getVtaFacturaImportesCmbF($paginador = null, $criterio = null){
            $col = VtaFacturaImporte::getVtaFacturaImportes($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaFacturaImportes filtrado por una coleccion de objetos foraneos de VtaFactura */ 	
	static function getVtaFacturaImportesXVtaFacturas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaFacturaImporte::GEN_ATTR_VTA_FACTURA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaFacturaImporte::GEN_TABLA);
            $c->addOrden(VtaFacturaImporte::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaFacturaImporte::getVtaFacturaImportes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaFacturaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'vta_factura_importe_adm.php';
            $url_gestion = 'vta_factura_importe_gestion.php';
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
	

	/* Metodo que retorna el VtaFactura (Clave Foranea) */ 	
    public function getVtaFactura(){
        $o = new VtaFactura();
        $o->setId($this->getVtaFacturaId());
        return $o;			
    }

	/* Metodo que retorna el VtaFactura (Clave Foranea) en Array */ 	
    public function getVtaFacturaEnArray(&$arr_os){
        if($this->getVtaFacturaId() != 'null'){
            if(isset($arr_os[$this->getVtaFacturaId()])){
                $o = $arr_os[$this->getVtaFacturaId()];
            }else{
                $o = VtaFactura::getOxId($this->getVtaFacturaId());
                if($o){
                    $arr_os[$this->getVtaFacturaId()] = $o;
                }
            }
        }else{
            $o = new VtaFactura();
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
            		
        if($contexto_solicitante != VtaFactura::GEN_CLASE){
            if($this->getVtaFactura()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaFactura::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaFactura()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM vta_factura_importe'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'vta_factura_importe';");
            
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

            $obs = self::getVtaFacturaImportes($paginador, $criterio);
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

            $obs = self::getVtaFacturaImportes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaImportes($paginador, $criterio);
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

            $obs = self::getVtaFacturaImportes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_factura_id' */ 	
	static function getOxVtaFacturaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_FACTURA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaImportes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_factura_id' */ 	
	static function getOsxVtaFacturaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_FACTURA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaFacturaImportes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_subtotal' */ 	
	static function getOxImporteSubtotal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_SUBTOTAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaImportes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_subtotal' */ 	
	static function getOsxImporteSubtotal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_SUBTOTAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaFacturaImportes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_iva' */ 	
	static function getOxImporteIva($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_IVA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaImportes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_iva' */ 	
	static function getOsxImporteIva($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_IVA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaFacturaImportes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_tributo' */ 	
	static function getOxImporteTributo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_TRIBUTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaImportes($paginador, $criterio);
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

            $obs = self::getVtaFacturaImportes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_total' */ 	
	static function getOxImporteTotal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_TOTAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaImportes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_total' */ 	
	static function getOsxImporteTotal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_TOTAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaFacturaImportes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_saldado' */ 	
	static function getOxImporteSaldado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_SALDADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaImportes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_saldado' */ 	
	static function getOsxImporteSaldado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_SALDADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaFacturaImportes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_saldo' */ 	
	static function getOxImporteSaldo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_SALDO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaImportes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_saldo' */ 	
	static function getOsxImporteSaldo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_SALDO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaFacturaImportes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_total_real' */ 	
	static function getOxImporteTotalReal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_TOTAL_REAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaImportes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_total_real' */ 	
	static function getOsxImporteTotalReal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_TOTAL_REAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaFacturaImportes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_costo' */ 	
	static function getOxImporteCosto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_COSTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaImportes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_costo' */ 	
	static function getOsxImporteCosto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_COSTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaFacturaImportes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_costo_real' */ 	
	static function getOxImporteCostoReal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_COSTO_REAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaImportes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_costo_real' */ 	
	static function getOsxImporteCostoReal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_COSTO_REAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaFacturaImportes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_nc_anulacion_afectado' */ 	
	static function getOxImporteNcAnulacionAfectado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_NC_ANULACION_AFECTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaImportes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_nc_anulacion_afectado' */ 	
	static function getOsxImporteNcAnulacionAfectado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_NC_ANULACION_AFECTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaFacturaImportes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_nc_descuento_afectado' */ 	
	static function getOxImporteNcDescuentoAfectado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_NC_DESCUENTO_AFECTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaImportes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_nc_descuento_afectado' */ 	
	static function getOsxImporteNcDescuentoAfectado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_NC_DESCUENTO_AFECTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaFacturaImportes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_rbo_afectado' */ 	
	static function getOxImporteRboAfectado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_RBO_AFECTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaImportes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_rbo_afectado' */ 	
	static function getOsxImporteRboAfectado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_RBO_AFECTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaFacturaImportes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaImportes($paginador, $criterio);
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

            $obs = self::getVtaFacturaImportes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaImportes($paginador, $criterio);
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

            $obs = self::getVtaFacturaImportes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaImportes($paginador, $criterio);
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

            $obs = self::getVtaFacturaImportes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaImportes($paginador, $criterio);
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

            $obs = self::getVtaFacturaImportes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaImportes($paginador, $criterio);
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

            $obs = self::getVtaFacturaImportes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaImportes($paginador, $criterio);
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

            $obs = self::getVtaFacturaImportes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaImportes($paginador, $criterio);
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

            $obs = self::getVtaFacturaImportes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaImportes($paginador, $criterio);
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

            $obs = self::getVtaFacturaImportes(null, $criterio);
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

            $obs = self::getVtaFacturaImportes($paginador, $criterio);
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

            $obs = self::getVtaFacturaImportes($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'vta_factura_importe_adm');
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
                $c->addTabla(VtaFacturaImporte::GEN_TABLA);
                $c->addOrden(VtaFacturaImporte::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $vta_factura_importes = VtaFacturaImporte::getVtaFacturaImportes(null, $c);

                $arr = array();
                foreach($vta_factura_importes as $vta_factura_importe){
                    $descripcion = $vta_factura_importe->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>