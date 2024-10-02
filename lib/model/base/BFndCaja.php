<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BFndCaja
{ 
	
	const SES_PAGINACION = 'adm_fndcaja_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_fndcaja_paginas_registros';
	const SES_CRITERIOS = 'adm_fndcaja_criterios';
	
	const GEN_CLASE = 'FndCaja';
	const GEN_TABLA = 'fnd_caja';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BFndCaja */ 
	const GEN_ATTR_ID = 'fnd_caja.id';
	const GEN_ATTR_DESCRIPCION = 'fnd_caja.descripcion';
	const GEN_ATTR_FND_CAJERO_ID = 'fnd_caja.fnd_cajero_id';
	const GEN_ATTR_GRAL_CAJA_ID = 'fnd_caja.gral_caja_id';
	const GEN_ATTR_FND_CAJA_TIPO_ESTADO_ID = 'fnd_caja.fnd_caja_tipo_estado_id';
	const GEN_ATTR_FECHA_APERTURA = 'fnd_caja.fecha_apertura';
	const GEN_ATTR_FECHA_CIERRE = 'fnd_caja.fecha_cierre';
	const GEN_ATTR_FECHA_RENDICION = 'fnd_caja.fecha_rendicion';
	const GEN_ATTR_IMPORTE_SALDO_INICIAL_ESPERADO = 'fnd_caja.importe_saldo_inicial_esperado';
	const GEN_ATTR_IMPORTE_SALDO_INICIAL_REAL = 'fnd_caja.importe_saldo_inicial_real';
	const GEN_ATTR_IMPORTE_SALDO_INICIAL_DIFERENCIA = 'fnd_caja.importe_saldo_inicial_diferencia';
	const GEN_ATTR_IMPORTE_SALDO_FINAL = 'fnd_caja.importe_saldo_final';
	const GEN_ATTR_IMPORTE_EFECTIVO_FINAL_REGISTRADO = 'fnd_caja.importe_efectivo_final_registrado';
	const GEN_ATTR_IMPORTE_EFECTIVO_FINAL_INFORMADO = 'fnd_caja.importe_efectivo_final_informado';
	const GEN_ATTR_IMPORTE_EFECTIVO_FINAL_DIFERENCIA = 'fnd_caja.importe_efectivo_final_diferencia';
	const GEN_ATTR_CODIGO = 'fnd_caja.codigo';
	const GEN_ATTR_OBSERVACION = 'fnd_caja.observacion';
	const GEN_ATTR_ORDEN = 'fnd_caja.orden';
	const GEN_ATTR_ESTADO = 'fnd_caja.estado';
	const GEN_ATTR_CREADO = 'fnd_caja.creado';
	const GEN_ATTR_CREADO_POR = 'fnd_caja.creado_por';
	const GEN_ATTR_MODIFICADO = 'fnd_caja.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'fnd_caja.modificado_por';

	/* Constantes de Atributos Min de BFndCaja */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_FND_CAJERO_ID = 'fnd_cajero_id';
	const GEN_ATTR_MIN_GRAL_CAJA_ID = 'gral_caja_id';
	const GEN_ATTR_MIN_FND_CAJA_TIPO_ESTADO_ID = 'fnd_caja_tipo_estado_id';
	const GEN_ATTR_MIN_FECHA_APERTURA = 'fecha_apertura';
	const GEN_ATTR_MIN_FECHA_CIERRE = 'fecha_cierre';
	const GEN_ATTR_MIN_FECHA_RENDICION = 'fecha_rendicion';
	const GEN_ATTR_MIN_IMPORTE_SALDO_INICIAL_ESPERADO = 'importe_saldo_inicial_esperado';
	const GEN_ATTR_MIN_IMPORTE_SALDO_INICIAL_REAL = 'importe_saldo_inicial_real';
	const GEN_ATTR_MIN_IMPORTE_SALDO_INICIAL_DIFERENCIA = 'importe_saldo_inicial_diferencia';
	const GEN_ATTR_MIN_IMPORTE_SALDO_FINAL = 'importe_saldo_final';
	const GEN_ATTR_MIN_IMPORTE_EFECTIVO_FINAL_REGISTRADO = 'importe_efectivo_final_registrado';
	const GEN_ATTR_MIN_IMPORTE_EFECTIVO_FINAL_INFORMADO = 'importe_efectivo_final_informado';
	const GEN_ATTR_MIN_IMPORTE_EFECTIVO_FINAL_DIFERENCIA = 'importe_efectivo_final_diferencia';
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
	

	/* Atributos de BFndCaja */ 
	private $id;
	private $descripcion;
	private $fnd_cajero_id;
	private $gral_caja_id;
	private $fnd_caja_tipo_estado_id;
	private $fecha_apertura;
	private $fecha_cierre;
	private $fecha_rendicion;
	private $importe_saldo_inicial_esperado;
	private $importe_saldo_inicial_real;
	private $importe_saldo_inicial_diferencia;
	private $importe_saldo_final;
	private $importe_efectivo_final_registrado;
	private $importe_efectivo_final_informado;
	private $importe_efectivo_final_diferencia;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BFndCaja */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getFndCajeroId(){ if(isset($this->fnd_cajero_id)){ return $this->fnd_cajero_id; }else{ return 'null'; } }
	public function getGralCajaId(){ if(isset($this->gral_caja_id)){ return $this->gral_caja_id; }else{ return 'null'; } }
	public function getFndCajaTipoEstadoId(){ if(isset($this->fnd_caja_tipo_estado_id)){ return $this->fnd_caja_tipo_estado_id; }else{ return 'null'; } }
	public function getFechaApertura(){ if(isset($this->fecha_apertura)){ return $this->fecha_apertura; }else{ return ''; } }
	public function getFechaCierre(){ if(isset($this->fecha_cierre)){ return $this->fecha_cierre; }else{ return ''; } }
	public function getFechaRendicion(){ if(isset($this->fecha_rendicion)){ return $this->fecha_rendicion; }else{ return ''; } }
	public function getImporteSaldoInicialEsperado(){ if(isset($this->importe_saldo_inicial_esperado)){ return $this->importe_saldo_inicial_esperado; }else{ return 0; } }
	public function getImporteSaldoInicialReal(){ if(isset($this->importe_saldo_inicial_real)){ return $this->importe_saldo_inicial_real; }else{ return 0; } }
	public function getImporteSaldoInicialDiferencia(){ if(isset($this->importe_saldo_inicial_diferencia)){ return $this->importe_saldo_inicial_diferencia; }else{ return 0; } }
	public function getImporteSaldoFinal(){ if(isset($this->importe_saldo_final)){ return $this->importe_saldo_final; }else{ return 0; } }
	public function getImporteEfectivoFinalRegistrado(){ if(isset($this->importe_efectivo_final_registrado)){ return $this->importe_efectivo_final_registrado; }else{ return 0; } }
	public function getImporteEfectivoFinalInformado(){ if(isset($this->importe_efectivo_final_informado)){ return $this->importe_efectivo_final_informado; }else{ return 0; } }
	public function getImporteEfectivoFinalDiferencia(){ if(isset($this->importe_efectivo_final_diferencia)){ return $this->importe_efectivo_final_diferencia; }else{ return 0; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BFndCaja */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_FND_CAJERO_ID."
				, ".self::GEN_ATTR_GRAL_CAJA_ID."
				, ".self::GEN_ATTR_FND_CAJA_TIPO_ESTADO_ID."
				, ".self::GEN_ATTR_FECHA_APERTURA."
				, ".self::GEN_ATTR_FECHA_CIERRE."
				, ".self::GEN_ATTR_FECHA_RENDICION."
				, ".self::GEN_ATTR_IMPORTE_SALDO_INICIAL_ESPERADO."
				, ".self::GEN_ATTR_IMPORTE_SALDO_INICIAL_REAL."
				, ".self::GEN_ATTR_IMPORTE_SALDO_INICIAL_DIFERENCIA."
				, ".self::GEN_ATTR_IMPORTE_SALDO_FINAL."
				, ".self::GEN_ATTR_IMPORTE_EFECTIVO_FINAL_REGISTRADO."
				, ".self::GEN_ATTR_IMPORTE_EFECTIVO_FINAL_INFORMADO."
				, ".self::GEN_ATTR_IMPORTE_EFECTIVO_FINAL_DIFERENCIA."
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
				$this->setFndCajeroId($fila[self::GEN_ATTR_MIN_FND_CAJERO_ID]);
				$this->setGralCajaId($fila[self::GEN_ATTR_MIN_GRAL_CAJA_ID]);
				$this->setFndCajaTipoEstadoId($fila[self::GEN_ATTR_MIN_FND_CAJA_TIPO_ESTADO_ID]);
				$this->setFechaApertura($fila[self::GEN_ATTR_MIN_FECHA_APERTURA]);
				$this->setFechaCierre($fila[self::GEN_ATTR_MIN_FECHA_CIERRE]);
				$this->setFechaRendicion($fila[self::GEN_ATTR_MIN_FECHA_RENDICION]);
				$this->setImporteSaldoInicialEsperado($fila[self::GEN_ATTR_MIN_IMPORTE_SALDO_INICIAL_ESPERADO]);
				$this->setImporteSaldoInicialReal($fila[self::GEN_ATTR_MIN_IMPORTE_SALDO_INICIAL_REAL]);
				$this->setImporteSaldoInicialDiferencia($fila[self::GEN_ATTR_MIN_IMPORTE_SALDO_INICIAL_DIFERENCIA]);
				$this->setImporteSaldoFinal($fila[self::GEN_ATTR_MIN_IMPORTE_SALDO_FINAL]);
				$this->setImporteEfectivoFinalRegistrado($fila[self::GEN_ATTR_MIN_IMPORTE_EFECTIVO_FINAL_REGISTRADO]);
				$this->setImporteEfectivoFinalInformado($fila[self::GEN_ATTR_MIN_IMPORTE_EFECTIVO_FINAL_INFORMADO]);
				$this->setImporteEfectivoFinalDiferencia($fila[self::GEN_ATTR_MIN_IMPORTE_EFECTIVO_FINAL_DIFERENCIA]);
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
	public function setFndCajeroId($v){ $this->fnd_cajero_id = $v; }
	public function setGralCajaId($v){ $this->gral_caja_id = $v; }
	public function setFndCajaTipoEstadoId($v){ $this->fnd_caja_tipo_estado_id = $v; }
	public function setFechaApertura($v){ $this->fecha_apertura = $v; }
	public function setFechaCierre($v){ $this->fecha_cierre = $v; }
	public function setFechaRendicion($v){ $this->fecha_rendicion = $v; }
	public function setImporteSaldoInicialEsperado($v){ $this->importe_saldo_inicial_esperado = $v; }
	public function setImporteSaldoInicialReal($v){ $this->importe_saldo_inicial_real = $v; }
	public function setImporteSaldoInicialDiferencia($v){ $this->importe_saldo_inicial_diferencia = $v; }
	public function setImporteSaldoFinal($v){ $this->importe_saldo_final = $v; }
	public function setImporteEfectivoFinalRegistrado($v){ $this->importe_efectivo_final_registrado = $v; }
	public function setImporteEfectivoFinalInformado($v){ $this->importe_efectivo_final_informado = $v; }
	public function setImporteEfectivoFinalDiferencia($v){ $this->importe_efectivo_final_diferencia = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new FndCaja();
            $o->setId($fila[FndCaja::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setFndCajeroId($fila[self::GEN_ATTR_MIN_FND_CAJERO_ID]);
			$o->setGralCajaId($fila[self::GEN_ATTR_MIN_GRAL_CAJA_ID]);
			$o->setFndCajaTipoEstadoId($fila[self::GEN_ATTR_MIN_FND_CAJA_TIPO_ESTADO_ID]);
			$o->setFechaApertura($fila[self::GEN_ATTR_MIN_FECHA_APERTURA]);
			$o->setFechaCierre($fila[self::GEN_ATTR_MIN_FECHA_CIERRE]);
			$o->setFechaRendicion($fila[self::GEN_ATTR_MIN_FECHA_RENDICION]);
			$o->setImporteSaldoInicialEsperado($fila[self::GEN_ATTR_MIN_IMPORTE_SALDO_INICIAL_ESPERADO]);
			$o->setImporteSaldoInicialReal($fila[self::GEN_ATTR_MIN_IMPORTE_SALDO_INICIAL_REAL]);
			$o->setImporteSaldoInicialDiferencia($fila[self::GEN_ATTR_MIN_IMPORTE_SALDO_INICIAL_DIFERENCIA]);
			$o->setImporteSaldoFinal($fila[self::GEN_ATTR_MIN_IMPORTE_SALDO_FINAL]);
			$o->setImporteEfectivoFinalRegistrado($fila[self::GEN_ATTR_MIN_IMPORTE_EFECTIVO_FINAL_REGISTRADO]);
			$o->setImporteEfectivoFinalInformado($fila[self::GEN_ATTR_MIN_IMPORTE_EFECTIVO_FINAL_INFORMADO]);
			$o->setImporteEfectivoFinalDiferencia($fila[self::GEN_ATTR_MIN_IMPORTE_EFECTIVO_FINAL_DIFERENCIA]);
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

	/* Control de BFndCaja */ 	
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

	/* Cambia el estado de BFndCaja */ 	
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

	/* Save de BFndCaja */ 	
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
						, ".self::GEN_ATTR_MIN_FND_CAJERO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_CAJA_ID."
						, ".self::GEN_ATTR_MIN_FND_CAJA_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_FECHA_APERTURA."
						, ".self::GEN_ATTR_MIN_FECHA_CIERRE."
						, ".self::GEN_ATTR_MIN_FECHA_RENDICION."
						, ".self::GEN_ATTR_MIN_IMPORTE_SALDO_INICIAL_ESPERADO."
						, ".self::GEN_ATTR_MIN_IMPORTE_SALDO_INICIAL_REAL."
						, ".self::GEN_ATTR_MIN_IMPORTE_SALDO_INICIAL_DIFERENCIA."
						, ".self::GEN_ATTR_MIN_IMPORTE_SALDO_FINAL."
						, ".self::GEN_ATTR_MIN_IMPORTE_EFECTIVO_FINAL_REGISTRADO."
						, ".self::GEN_ATTR_MIN_IMPORTE_EFECTIVO_FINAL_INFORMADO."
						, ".self::GEN_ATTR_MIN_IMPORTE_EFECTIVO_FINAL_DIFERENCIA."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('fnd_caja_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getFndCajeroId()."
						, ".$this->getGralCajaId()."
						, ".$this->getFndCajaTipoEstadoId()."
						, '".$this->getFechaApertura()."'
						, '".$this->getFechaCierre()."'
						, '".$this->getFechaRendicion()."'
						, '".$this->getImporteSaldoInicialEsperado()."'
						, '".$this->getImporteSaldoInicialReal()."'
						, '".$this->getImporteSaldoInicialDiferencia()."'
						, '".$this->getImporteSaldoFinal()."'
						, '".$this->getImporteEfectivoFinalRegistrado()."'
						, '".$this->getImporteEfectivoFinalInformado()."'
						, '".$this->getImporteEfectivoFinalDiferencia()."'
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('fnd_caja_seq')";
            
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
                 
				 ".FndCaja::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_FND_CAJERO_ID." = ".$this->getFndCajeroId()."
						, ".self::GEN_ATTR_MIN_GRAL_CAJA_ID." = ".$this->getGralCajaId()."
						, ".self::GEN_ATTR_MIN_FND_CAJA_TIPO_ESTADO_ID." = ".$this->getFndCajaTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_FECHA_APERTURA." = '".$this->getFechaApertura()."'
						, ".self::GEN_ATTR_MIN_FECHA_CIERRE." = '".$this->getFechaCierre()."'
						, ".self::GEN_ATTR_MIN_FECHA_RENDICION." = '".$this->getFechaRendicion()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_SALDO_INICIAL_ESPERADO." = '".$this->getImporteSaldoInicialEsperado()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_SALDO_INICIAL_REAL." = '".$this->getImporteSaldoInicialReal()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_SALDO_INICIAL_DIFERENCIA." = '".$this->getImporteSaldoInicialDiferencia()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_SALDO_FINAL." = '".$this->getImporteSaldoFinal()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_EFECTIVO_FINAL_REGISTRADO." = '".$this->getImporteEfectivoFinalRegistrado()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_EFECTIVO_FINAL_INFORMADO." = '".$this->getImporteEfectivoFinalInformado()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_EFECTIVO_FINAL_DIFERENCIA." = '".$this->getImporteEfectivoFinalDiferencia()."'
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
						, ".self::GEN_ATTR_MIN_FND_CAJERO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_CAJA_ID."
						, ".self::GEN_ATTR_MIN_FND_CAJA_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_FECHA_APERTURA."
						, ".self::GEN_ATTR_MIN_FECHA_CIERRE."
						, ".self::GEN_ATTR_MIN_FECHA_RENDICION."
						, ".self::GEN_ATTR_MIN_IMPORTE_SALDO_INICIAL_ESPERADO."
						, ".self::GEN_ATTR_MIN_IMPORTE_SALDO_INICIAL_REAL."
						, ".self::GEN_ATTR_MIN_IMPORTE_SALDO_INICIAL_DIFERENCIA."
						, ".self::GEN_ATTR_MIN_IMPORTE_SALDO_FINAL."
						, ".self::GEN_ATTR_MIN_IMPORTE_EFECTIVO_FINAL_REGISTRADO."
						, ".self::GEN_ATTR_MIN_IMPORTE_EFECTIVO_FINAL_INFORMADO."
						, ".self::GEN_ATTR_MIN_IMPORTE_EFECTIVO_FINAL_DIFERENCIA."
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
						, ".$this->getFndCajeroId()."
						, ".$this->getGralCajaId()."
						, ".$this->getFndCajaTipoEstadoId()."
						, '".$this->getFechaApertura()."'
						, '".$this->getFechaCierre()."'
						, '".$this->getFechaRendicion()."'
						, '".$this->getImporteSaldoInicialEsperado()."'
						, '".$this->getImporteSaldoInicialReal()."'
						, '".$this->getImporteSaldoInicialDiferencia()."'
						, '".$this->getImporteSaldoFinal()."'
						, '".$this->getImporteEfectivoFinalRegistrado()."'
						, '".$this->getImporteEfectivoFinalInformado()."'
						, '".$this->getImporteEfectivoFinalDiferencia()."'
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
                     
				 ".FndCaja::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_FND_CAJERO_ID." = ".$this->getFndCajeroId()."
						, ".self::GEN_ATTR_MIN_GRAL_CAJA_ID." = ".$this->getGralCajaId()."
						, ".self::GEN_ATTR_MIN_FND_CAJA_TIPO_ESTADO_ID." = ".$this->getFndCajaTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_FECHA_APERTURA." = '".$this->getFechaApertura()."'
						, ".self::GEN_ATTR_MIN_FECHA_CIERRE." = '".$this->getFechaCierre()."'
						, ".self::GEN_ATTR_MIN_FECHA_RENDICION." = '".$this->getFechaRendicion()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_SALDO_INICIAL_ESPERADO." = '".$this->getImporteSaldoInicialEsperado()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_SALDO_INICIAL_REAL." = '".$this->getImporteSaldoInicialReal()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_SALDO_INICIAL_DIFERENCIA." = '".$this->getImporteSaldoInicialDiferencia()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_SALDO_FINAL." = '".$this->getImporteSaldoFinal()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_EFECTIVO_FINAL_REGISTRADO." = '".$this->getImporteEfectivoFinalRegistrado()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_EFECTIVO_FINAL_INFORMADO." = '".$this->getImporteEfectivoFinalInformado()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_EFECTIVO_FINAL_DIFERENCIA." = '".$this->getImporteEfectivoFinalDiferencia()."'
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
            $o = new FndCaja();
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

	/* Delete de BFndCaja */ 	
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
	
            // se elimina la coleccion de VtaRecibos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaRecibos(null, $c) as $o){
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
            
            // se elimina la coleccion de FndCajaEstados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(FndCajaEstado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getFndCajaEstados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de FndCajaGralBilletes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(FndCajaGralBillete::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getFndCajaGralBilletes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de FndCajaIngresos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(FndCajaIngreso::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getFndCajaIngresos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de FndCajaEgresos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(FndCajaEgreso::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getFndCajaEgresos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de FndChqEstados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(FndChqEstado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getFndChqEstados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de FndChqCheques relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getFndChqCheques(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteHabers relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteHabers(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarFndCaja(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getFndCajas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = FndCaja::setAplicarFiltrosDeAlcance($criterio);

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
	
		$fndcajas = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $fndcaja = new FndCaja();
                    $fndcaja->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $fndcaja->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$fndcaja->setFndCajeroId($fila[self::GEN_ATTR_MIN_FND_CAJERO_ID]);
			$fndcaja->setGralCajaId($fila[self::GEN_ATTR_MIN_GRAL_CAJA_ID]);
			$fndcaja->setFndCajaTipoEstadoId($fila[self::GEN_ATTR_MIN_FND_CAJA_TIPO_ESTADO_ID]);
			$fndcaja->setFechaApertura($fila[self::GEN_ATTR_MIN_FECHA_APERTURA]);
			$fndcaja->setFechaCierre($fila[self::GEN_ATTR_MIN_FECHA_CIERRE]);
			$fndcaja->setFechaRendicion($fila[self::GEN_ATTR_MIN_FECHA_RENDICION]);
			$fndcaja->setImporteSaldoInicialEsperado($fila[self::GEN_ATTR_MIN_IMPORTE_SALDO_INICIAL_ESPERADO]);
			$fndcaja->setImporteSaldoInicialReal($fila[self::GEN_ATTR_MIN_IMPORTE_SALDO_INICIAL_REAL]);
			$fndcaja->setImporteSaldoInicialDiferencia($fila[self::GEN_ATTR_MIN_IMPORTE_SALDO_INICIAL_DIFERENCIA]);
			$fndcaja->setImporteSaldoFinal($fila[self::GEN_ATTR_MIN_IMPORTE_SALDO_FINAL]);
			$fndcaja->setImporteEfectivoFinalRegistrado($fila[self::GEN_ATTR_MIN_IMPORTE_EFECTIVO_FINAL_REGISTRADO]);
			$fndcaja->setImporteEfectivoFinalInformado($fila[self::GEN_ATTR_MIN_IMPORTE_EFECTIVO_FINAL_INFORMADO]);
			$fndcaja->setImporteEfectivoFinalDiferencia($fila[self::GEN_ATTR_MIN_IMPORTE_EFECTIVO_FINAL_DIFERENCIA]);
			$fndcaja->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$fndcaja->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$fndcaja->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$fndcaja->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$fndcaja->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$fndcaja->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$fndcaja->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$fndcaja->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $fndcajas[] = $fndcaja;
		}
		
		return $fndcajas;
	}	
	

	/* Método getFndCajas Habilitados */ 	
	static function getFndCajasHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return FndCaja::getFndCajas($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getFndCajas para listado de Backend */ 	
	static function getFndCajasDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return FndCaja::getFndCajas($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getFndCajasCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = FndCaja::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = FndCaja::getFndCajas($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getFndCajas filtrado para select */ 	
	static function getFndCajasCmbF($paginador = null, $criterio = null){
            $col = FndCaja::getFndCajas($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getFndCajas filtrado por una coleccion de objetos foraneos de FndCajero */ 	
	static function getFndCajasXFndCajeros($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(FndCaja::GEN_ATTR_FND_CAJERO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(FndCaja::GEN_TABLA);
            $c->addOrden(FndCaja::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = FndCaja::getFndCajas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getFndCajeroId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getFndCajas filtrado por una coleccion de objetos foraneos de GralCaja */ 	
	static function getFndCajasXGralCajas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(FndCaja::GEN_ATTR_GRAL_CAJA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(FndCaja::GEN_TABLA);
            $c->addOrden(FndCaja::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = FndCaja::getFndCajas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralCajaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getFndCajas filtrado por una coleccion de objetos foraneos de FndCajaTipoEstado */ 	
	static function getFndCajasXFndCajaTipoEstados($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(FndCaja::GEN_ATTR_FND_CAJA_TIPO_ESTADO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(FndCaja::GEN_TABLA);
            $c->addOrden(FndCaja::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = FndCaja::getFndCajas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getFndCajaTipoEstadoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'fnd_caja_adm.php';
            $url_gestion = 'fnd_caja_gestion.php';
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
                
            $criterio->add(VtaRecibo::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaRecibo::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->setCriterios();

            $os = VtaRecibo::getVtaRecibosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaRecibo */ 	
	public function getCliClientesXVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRecibo::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaRecibo::GEN_TABLA, VtaRecibo::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaRecibo */ 	
	public function getCantidadCliClientesXVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRecibo::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaRecibo::GEN_TABLA, VtaRecibo::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaRecibo */ 	
	public function getCliClienteXVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaRecibo($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(PdeRecibo::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(PdeRecibo::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeRecibo::GEN_TABLA);
            $c->setCriterios();

            $os = PdeRecibo::getPdeRecibosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvProveedors (Coleccion) relacionados a traves de PdeRecibo */ 	
	public function getPrvProveedorsXPdeRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeRecibo::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeRecibo::GEN_TABLA, PdeRecibo::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvProveedors relacionados a traves de PdeRecibo */ 	
	public function getCantidadPrvProveedorsXPdeRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvProveedor::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeRecibo::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeRecibo::GEN_TABLA, PdeRecibo::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvProveedor (Objeto) relacionado a traves de PdeRecibo */ 	
	public function getPrvProveedorXPdeRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvProveedorsXPdeRecibo($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(PdeOrdenPago::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(PdeOrdenPago::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOrdenPago::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOrdenPago::getPdeOrdenPagosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvProveedors (Coleccion) relacionados a traves de PdeOrdenPago */ 	
	public function getPrvProveedorsXPdeOrdenPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOrdenPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOrdenPago::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeOrdenPago::GEN_TABLA, PdeOrdenPago::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvProveedors relacionados a traves de PdeOrdenPago */ 	
	public function getCantidadPrvProveedorsXPdeOrdenPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvProveedor::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOrdenPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOrdenPago::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeOrdenPago::GEN_TABLA, PdeOrdenPago::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvProveedor (Objeto) relacionado a traves de PdeOrdenPago */ 	
	public function getPrvProveedorXPdeOrdenPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvProveedorsXPdeOrdenPago($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getFndCajaEstados */ 	
	public function getFndCajaEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(FndCajaEstado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(FndCajaEstado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(FndCajaEstado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(FndCajaEstado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(FndCajaEstado::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(FndCajaEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(FndCajaEstado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".FndCajaEstado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $fndcajaestados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $fndcajaestado = FndCajaEstado::hidratarObjeto($fila);			
                $fndcajaestados[] = $fndcajaestado;
            }

            return $fndcajaestados;
	}	
	

	/* Método getFndCajaEstadosBloque para MasInfo */ 	
	public function getFndCajaEstadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getFndCajaEstados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getFndCajaEstados Habilitados */ 	
	public function getFndCajaEstadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getFndCajaEstados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getFndCajaEstado */ 	
	public function getFndCajaEstado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getFndCajaEstados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de FndCajaEstado relacionadas */ 	
	public function deleteFndCajaEstados(){
            $obs = $this->getFndCajaEstados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getFndCajaEstadosCmb() FndCajaEstado relacionadas */ 	
	public function getFndCajaEstadosCmb(){
            $c = new Criterio();
            $c->add(FndCajaEstado::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndCajaEstado::GEN_TABLA);
            $c->setCriterios();

            $os = FndCajaEstado::getFndCajaEstadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener FndCajaTipoEstados (Coleccion) relacionados a traves de FndCajaEstado */ 	
	public function getFndCajaTipoEstadosXFndCajaEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(FndCajaTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(FndCajaEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(FndCajaEstado::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndCajaTipoEstado::GEN_TABLA);
            $c->addRealJoin(FndCajaEstado::GEN_TABLA, FndCajaEstado::GEN_ATTR_FND_CAJA_TIPO_ESTADO_ID, FndCajaTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = FndCajaTipoEstado::getFndCajaTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de FndCajaTipoEstados relacionados a traves de FndCajaEstado */ 	
	public function getCantidadFndCajaTipoEstadosXFndCajaEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(FndCajaTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(FndCajaTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(FndCajaEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(FndCajaEstado::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndCajaTipoEstado::GEN_TABLA);
            $c->addRealJoin(FndCajaEstado::GEN_TABLA, FndCajaEstado::GEN_ATTR_FND_CAJA_TIPO_ESTADO_ID, FndCajaTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = FndCajaTipoEstado::getFndCajaTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener FndCajaTipoEstado (Objeto) relacionado a traves de FndCajaEstado */ 	
	public function getFndCajaTipoEstadoXFndCajaEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getFndCajaTipoEstadosXFndCajaEstado($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getFndCajaGralBilletes */ 	
	public function getFndCajaGralBilletes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(FndCajaGralBillete::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(FndCajaGralBillete::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(FndCajaGralBillete::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(FndCajaGralBillete::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(FndCajaGralBillete::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(FndCajaGralBillete::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(FndCajaGralBillete::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".FndCajaGralBillete::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $fndcajagralbilletes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $fndcajagralbillete = FndCajaGralBillete::hidratarObjeto($fila);			
                $fndcajagralbilletes[] = $fndcajagralbillete;
            }

            return $fndcajagralbilletes;
	}	
	

	/* Método getFndCajaGralBilletesBloque para MasInfo */ 	
	public function getFndCajaGralBilletesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getFndCajaGralBilletes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getFndCajaGralBilletes Habilitados */ 	
	public function getFndCajaGralBilletesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getFndCajaGralBilletes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getFndCajaGralBillete */ 	
	public function getFndCajaGralBillete($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getFndCajaGralBilletes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de FndCajaGralBillete relacionadas */ 	
	public function deleteFndCajaGralBilletes(){
            $obs = $this->getFndCajaGralBilletes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getFndCajaGralBilletesCmb() FndCajaGralBillete relacionadas */ 	
	public function getFndCajaGralBilletesCmb(){
            $c = new Criterio();
            $c->add(FndCajaGralBillete::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndCajaGralBillete::GEN_TABLA);
            $c->setCriterios();

            $os = FndCajaGralBillete::getFndCajaGralBilletesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralBilletes (Coleccion) relacionados a traves de FndCajaGralBillete */ 	
	public function getGralBilletesXFndCajaGralBillete($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralBillete::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(FndCajaGralBillete::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(FndCajaGralBillete::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralBillete::GEN_TABLA);
            $c->addRealJoin(FndCajaGralBillete::GEN_TABLA, FndCajaGralBillete::GEN_ATTR_GRAL_BILLETE_ID, GralBillete::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralBillete::getGralBilletes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralBilletes relacionados a traves de FndCajaGralBillete */ 	
	public function getCantidadGralBilletesXFndCajaGralBillete($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralBillete::GEN_ATTR_ID);
            if($estado){
                $c->add(GralBillete::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(FndCajaGralBillete::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(FndCajaGralBillete::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralBillete::GEN_TABLA);
            $c->addRealJoin(FndCajaGralBillete::GEN_TABLA, FndCajaGralBillete::GEN_ATTR_GRAL_BILLETE_ID, GralBillete::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralBillete::getGralBilletes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralBillete (Objeto) relacionado a traves de FndCajaGralBillete */ 	
	public function getGralBilleteXFndCajaGralBillete($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralBilletesXFndCajaGralBillete($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getFndCajaIngresos */ 	
	public function getFndCajaIngresos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(FndCajaIngreso::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(FndCajaIngreso::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(FndCajaIngreso::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(FndCajaIngreso::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(FndCajaIngreso::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(FndCajaIngreso::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(FndCajaIngreso::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".FndCajaIngreso::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $fndcajaingresos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $fndcajaingreso = FndCajaIngreso::hidratarObjeto($fila);			
                $fndcajaingresos[] = $fndcajaingreso;
            }

            return $fndcajaingresos;
	}	
	

	/* Método getFndCajaIngresosBloque para MasInfo */ 	
	public function getFndCajaIngresosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getFndCajaIngresos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getFndCajaIngresos Habilitados */ 	
	public function getFndCajaIngresosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getFndCajaIngresos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getFndCajaIngreso */ 	
	public function getFndCajaIngreso($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getFndCajaIngresos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de FndCajaIngreso relacionadas */ 	
	public function deleteFndCajaIngresos(){
            $obs = $this->getFndCajaIngresos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getFndCajaIngresosCmb() FndCajaIngreso relacionadas */ 	
	public function getFndCajaIngresosCmb(){
            $c = new Criterio();
            $c->add(FndCajaIngreso::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndCajaIngreso::GEN_TABLA);
            $c->setCriterios();

            $os = FndCajaIngreso::getFndCajaIngresosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener FndCajaTipoIngresos (Coleccion) relacionados a traves de FndCajaIngreso */ 	
	public function getFndCajaTipoIngresosXFndCajaIngreso($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(FndCajaTipoIngreso::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(FndCajaIngreso::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(FndCajaIngreso::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndCajaTipoIngreso::GEN_TABLA);
            $c->addRealJoin(FndCajaIngreso::GEN_TABLA, FndCajaIngreso::GEN_ATTR_FND_CAJA_TIPO_INGRESO_ID, FndCajaTipoIngreso::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = FndCajaTipoIngreso::getFndCajaTipoIngresos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de FndCajaTipoIngresos relacionados a traves de FndCajaIngreso */ 	
	public function getCantidadFndCajaTipoIngresosXFndCajaIngreso($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(FndCajaTipoIngreso::GEN_ATTR_ID);
            if($estado){
                $c->add(FndCajaTipoIngreso::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(FndCajaIngreso::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(FndCajaIngreso::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndCajaTipoIngreso::GEN_TABLA);
            $c->addRealJoin(FndCajaIngreso::GEN_TABLA, FndCajaIngreso::GEN_ATTR_FND_CAJA_TIPO_INGRESO_ID, FndCajaTipoIngreso::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = FndCajaTipoIngreso::getFndCajaTipoIngresos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener FndCajaTipoIngreso (Objeto) relacionado a traves de FndCajaIngreso */ 	
	public function getFndCajaTipoIngresoXFndCajaIngreso($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getFndCajaTipoIngresosXFndCajaIngreso($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getFndCajaEgresos */ 	
	public function getFndCajaEgresos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(FndCajaEgreso::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(FndCajaEgreso::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(FndCajaEgreso::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(FndCajaEgreso::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(FndCajaEgreso::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(FndCajaEgreso::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(FndCajaEgreso::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".FndCajaEgreso::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $fndcajaegresos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $fndcajaegreso = FndCajaEgreso::hidratarObjeto($fila);			
                $fndcajaegresos[] = $fndcajaegreso;
            }

            return $fndcajaegresos;
	}	
	

	/* Método getFndCajaEgresosBloque para MasInfo */ 	
	public function getFndCajaEgresosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getFndCajaEgresos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getFndCajaEgresos Habilitados */ 	
	public function getFndCajaEgresosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getFndCajaEgresos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getFndCajaEgreso */ 	
	public function getFndCajaEgreso($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getFndCajaEgresos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de FndCajaEgreso relacionadas */ 	
	public function deleteFndCajaEgresos(){
            $obs = $this->getFndCajaEgresos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getFndCajaEgresosCmb() FndCajaEgreso relacionadas */ 	
	public function getFndCajaEgresosCmb(){
            $c = new Criterio();
            $c->add(FndCajaEgreso::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndCajaEgreso::GEN_TABLA);
            $c->setCriterios();

            $os = FndCajaEgreso::getFndCajaEgresosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener FndCajaTipoEgresos (Coleccion) relacionados a traves de FndCajaEgreso */ 	
	public function getFndCajaTipoEgresosXFndCajaEgreso($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(FndCajaTipoEgreso::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(FndCajaEgreso::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(FndCajaEgreso::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndCajaTipoEgreso::GEN_TABLA);
            $c->addRealJoin(FndCajaEgreso::GEN_TABLA, FndCajaEgreso::GEN_ATTR_FND_CAJA_TIPO_EGRESO_ID, FndCajaTipoEgreso::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = FndCajaTipoEgreso::getFndCajaTipoEgresos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de FndCajaTipoEgresos relacionados a traves de FndCajaEgreso */ 	
	public function getCantidadFndCajaTipoEgresosXFndCajaEgreso($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(FndCajaTipoEgreso::GEN_ATTR_ID);
            if($estado){
                $c->add(FndCajaTipoEgreso::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(FndCajaEgreso::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(FndCajaEgreso::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndCajaTipoEgreso::GEN_TABLA);
            $c->addRealJoin(FndCajaEgreso::GEN_TABLA, FndCajaEgreso::GEN_ATTR_FND_CAJA_TIPO_EGRESO_ID, FndCajaTipoEgreso::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = FndCajaTipoEgreso::getFndCajaTipoEgresos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener FndCajaTipoEgreso (Objeto) relacionado a traves de FndCajaEgreso */ 	
	public function getFndCajaTipoEgresoXFndCajaEgreso($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getFndCajaTipoEgresosXFndCajaEgreso($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getFndChqEstados */ 	
	public function getFndChqEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(FndChqEstado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(FndChqEstado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(FndChqEstado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(FndChqEstado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(FndChqEstado::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(FndChqEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(FndChqEstado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".FndChqEstado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $fndchqestados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $fndchqestado = FndChqEstado::hidratarObjeto($fila);			
                $fndchqestados[] = $fndchqestado;
            }

            return $fndchqestados;
	}	
	

	/* Método getFndChqEstadosBloque para MasInfo */ 	
	public function getFndChqEstadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getFndChqEstados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getFndChqEstados Habilitados */ 	
	public function getFndChqEstadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getFndChqEstados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getFndChqEstado */ 	
	public function getFndChqEstado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getFndChqEstados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de FndChqEstado relacionadas */ 	
	public function deleteFndChqEstados(){
            $obs = $this->getFndChqEstados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getFndChqEstadosCmb() FndChqEstado relacionadas */ 	
	public function getFndChqEstadosCmb(){
            $c = new Criterio();
            $c->add(FndChqEstado::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndChqEstado::GEN_TABLA);
            $c->setCriterios();

            $os = FndChqEstado::getFndChqEstadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener FndChqCheques (Coleccion) relacionados a traves de FndChqEstado */ 	
	public function getFndChqChequesXFndChqEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(FndChqCheque::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(FndChqEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(FndChqEstado::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->addRealJoin(FndChqEstado::GEN_TABLA, FndChqEstado::GEN_ATTR_FND_CHQ_CHEQUE_ID, FndChqCheque::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = FndChqCheque::getFndChqCheques($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de FndChqCheques relacionados a traves de FndChqEstado */ 	
	public function getCantidadFndChqChequesXFndChqEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(FndChqCheque::GEN_ATTR_ID);
            if($estado){
                $c->add(FndChqCheque::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(FndChqEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(FndChqEstado::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->addRealJoin(FndChqEstado::GEN_TABLA, FndChqEstado::GEN_ATTR_FND_CHQ_CHEQUE_ID, FndChqCheque::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = FndChqCheque::getFndChqCheques($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener FndChqCheque (Objeto) relacionado a traves de FndChqEstado */ 	
	public function getFndChqChequeXFndChqEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getFndChqChequesXFndChqEstado($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getFndChqCheques */ 	
	public function getFndChqCheques($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(FndChqCheque::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(FndChqCheque::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(FndChqCheque::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(FndChqCheque::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(FndChqCheque::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(FndChqCheque::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(FndChqCheque::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".FndChqCheque::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $fndchqcheques = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $fndchqcheque = FndChqCheque::hidratarObjeto($fila);			
                $fndchqcheques[] = $fndchqcheque;
            }

            return $fndchqcheques;
	}	
	

	/* Método getFndChqChequesBloque para MasInfo */ 	
	public function getFndChqChequesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getFndChqCheques($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getFndChqCheques Habilitados */ 	
	public function getFndChqChequesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getFndChqCheques($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getFndChqCheque */ 	
	public function getFndChqCheque($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getFndChqCheques($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de FndChqCheque relacionadas */ 	
	public function deleteFndChqCheques(){
            $obs = $this->getFndChqCheques();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getFndChqChequesCmb() FndChqCheque relacionadas */ 	
	public function getFndChqChequesCmb(){
            $c = new Criterio();
            $c->add(FndChqCheque::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->setCriterios();

            $os = FndChqCheque::getFndChqChequesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener FndChqChequeras (Coleccion) relacionados a traves de FndChqCheque */ 	
	public function getFndChqChequerasXFndChqCheque($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(FndChqChequera::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(FndChqCheque::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(FndChqCheque::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndChqChequera::GEN_TABLA);
            $c->addRealJoin(FndChqCheque::GEN_TABLA, FndChqCheque::GEN_ATTR_FND_CHQ_CHEQUERA_ID, FndChqChequera::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = FndChqChequera::getFndChqChequeras($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de FndChqChequeras relacionados a traves de FndChqCheque */ 	
	public function getCantidadFndChqChequerasXFndChqCheque($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(FndChqChequera::GEN_ATTR_ID);
            if($estado){
                $c->add(FndChqChequera::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(FndChqCheque::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(FndChqCheque::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndChqChequera::GEN_TABLA);
            $c->addRealJoin(FndChqCheque::GEN_TABLA, FndChqCheque::GEN_ATTR_FND_CHQ_CHEQUERA_ID, FndChqChequera::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = FndChqChequera::getFndChqChequeras($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener FndChqChequera (Objeto) relacionado a traves de FndChqCheque */ 	
	public function getFndChqChequeraXFndChqCheque($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getFndChqChequerasXFndChqCheque($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(VtaAjusteHaber::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaAjusteHaber::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteHaber::getVtaAjusteHabersCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaAjusteHaber */ 	
	public function getCliClientesXVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaber::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaber::GEN_TABLA, VtaAjusteHaber::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaAjusteHaber */ 	
	public function getCantidadCliClientesXVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaber::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaber::GEN_TABLA, VtaAjusteHaber::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaAjusteHaber */ 	
	public function getCliClienteXVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaAjusteHaber($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los GralBilletes asignados a FndCaja */ 	
	public function getFndCajaGralBilletesId(){
            $ids = array();
            foreach($this->getFndCajaGralBilletes() as $o){
            
                $ids[] = $o->getGralBilleteId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos GralBilletes asignados al FndCaja */ 	
	public function setFndCajaGralBilletes($ids){
            $this->deleteFndCajaGralBilletes();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new FndCajaGralBillete();
                    $o->setGralBilleteId($id);
                    $o->setFndCajaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion GralBillete en el alta de FndCaja */ 	
	public function getAltaMostrarBloqueRelacionFndCajaGralBillete(){
            return true;
	}
	

	/* Metodo que retorna el FndCajero (Clave Foranea) */ 	
    public function getFndCajero(){
        $o = new FndCajero();
        $o->setId($this->getFndCajeroId());
        return $o;			
    }

	/* Metodo que retorna el FndCajero (Clave Foranea) en Array */ 	
    public function getFndCajeroEnArray(&$arr_os){
        if($this->getFndCajeroId() != 'null'){
            if(isset($arr_os[$this->getFndCajeroId()])){
                $o = $arr_os[$this->getFndCajeroId()];
            }else{
                $o = FndCajero::getOxId($this->getFndCajeroId());
                if($o){
                    $arr_os[$this->getFndCajeroId()] = $o;
                }
            }
        }else{
            $o = new FndCajero();
        }
        return $o;		
    }

	/* Metodo que retorna el GralCaja (Clave Foranea) */ 	
    public function getGralCaja(){
        $o = new GralCaja();
        $o->setId($this->getGralCajaId());
        return $o;			
    }

	/* Metodo que retorna el GralCaja (Clave Foranea) en Array */ 	
    public function getGralCajaEnArray(&$arr_os){
        if($this->getGralCajaId() != 'null'){
            if(isset($arr_os[$this->getGralCajaId()])){
                $o = $arr_os[$this->getGralCajaId()];
            }else{
                $o = GralCaja::getOxId($this->getGralCajaId());
                if($o){
                    $arr_os[$this->getGralCajaId()] = $o;
                }
            }
        }else{
            $o = new GralCaja();
        }
        return $o;		
    }

	/* Metodo que retorna el FndCajaTipoEstado (Clave Foranea) */ 	
    public function getFndCajaTipoEstado(){
        $o = new FndCajaTipoEstado();
        $o->setId($this->getFndCajaTipoEstadoId());
        return $o;			
    }

	/* Metodo que retorna el FndCajaTipoEstado (Clave Foranea) en Array */ 	
    public function getFndCajaTipoEstadoEnArray(&$arr_os){
        if($this->getFndCajaTipoEstadoId() != 'null'){
            if(isset($arr_os[$this->getFndCajaTipoEstadoId()])){
                $o = $arr_os[$this->getFndCajaTipoEstadoId()];
            }else{
                $o = FndCajaTipoEstado::getOxId($this->getFndCajaTipoEstadoId());
                if($o){
                    $arr_os[$this->getFndCajaTipoEstadoId()] = $o;
                }
            }
        }else{
            $o = new FndCajaTipoEstado();
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
            		
        if($contexto_solicitante != FndCajero::GEN_CLASE){
            if($this->getFndCajero()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(FndCajero::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getFndCajero()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralCaja::GEN_CLASE){
            if($this->getGralCaja()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralCaja::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralCaja()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != FndCajaTipoEstado::GEN_CLASE){
            if($this->getFndCajaTipoEstado()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(FndCajaTipoEstado::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getFndCajaTipoEstado()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM fnd_caja'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'fnd_caja';");
            
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

            $obs = self::getFndCajas($paginador, $criterio);
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

            $obs = self::getFndCajas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajas($paginador, $criterio);
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

            $obs = self::getFndCajas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fnd_cajero_id' */ 	
	static function getOxFndCajeroId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CAJERO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fnd_cajero_id' */ 	
	static function getOsxFndCajeroId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CAJERO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndCajas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_caja_id' */ 	
	static function getOxGralCajaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_CAJA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_caja_id' */ 	
	static function getOsxGralCajaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_CAJA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndCajas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fnd_caja_tipo_estado_id' */ 	
	static function getOxFndCajaTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CAJA_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fnd_caja_tipo_estado_id' */ 	
	static function getOsxFndCajaTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CAJA_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndCajas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_apertura' */ 	
	static function getOxFechaApertura($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_APERTURA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha_apertura' */ 	
	static function getOsxFechaApertura($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_APERTURA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndCajas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_cierre' */ 	
	static function getOxFechaCierre($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_CIERRE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha_cierre' */ 	
	static function getOsxFechaCierre($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_CIERRE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndCajas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_rendicion' */ 	
	static function getOxFechaRendicion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_RENDICION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha_rendicion' */ 	
	static function getOsxFechaRendicion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_RENDICION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndCajas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_saldo_inicial_esperado' */ 	
	static function getOxImporteSaldoInicialEsperado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_SALDO_INICIAL_ESPERADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_saldo_inicial_esperado' */ 	
	static function getOsxImporteSaldoInicialEsperado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_SALDO_INICIAL_ESPERADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndCajas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_saldo_inicial_real' */ 	
	static function getOxImporteSaldoInicialReal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_SALDO_INICIAL_REAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_saldo_inicial_real' */ 	
	static function getOsxImporteSaldoInicialReal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_SALDO_INICIAL_REAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndCajas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_saldo_inicial_diferencia' */ 	
	static function getOxImporteSaldoInicialDiferencia($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_SALDO_INICIAL_DIFERENCIA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_saldo_inicial_diferencia' */ 	
	static function getOsxImporteSaldoInicialDiferencia($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_SALDO_INICIAL_DIFERENCIA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndCajas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_saldo_final' */ 	
	static function getOxImporteSaldoFinal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_SALDO_FINAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_saldo_final' */ 	
	static function getOsxImporteSaldoFinal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_SALDO_FINAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndCajas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_efectivo_final_registrado' */ 	
	static function getOxImporteEfectivoFinalRegistrado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_EFECTIVO_FINAL_REGISTRADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_efectivo_final_registrado' */ 	
	static function getOsxImporteEfectivoFinalRegistrado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_EFECTIVO_FINAL_REGISTRADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndCajas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_efectivo_final_informado' */ 	
	static function getOxImporteEfectivoFinalInformado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_EFECTIVO_FINAL_INFORMADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_efectivo_final_informado' */ 	
	static function getOsxImporteEfectivoFinalInformado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_EFECTIVO_FINAL_INFORMADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndCajas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_efectivo_final_diferencia' */ 	
	static function getOxImporteEfectivoFinalDiferencia($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_EFECTIVO_FINAL_DIFERENCIA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_efectivo_final_diferencia' */ 	
	static function getOsxImporteEfectivoFinalDiferencia($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_EFECTIVO_FINAL_DIFERENCIA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndCajas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajas($paginador, $criterio);
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

            $obs = self::getFndCajas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajas($paginador, $criterio);
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

            $obs = self::getFndCajas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajas($paginador, $criterio);
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

            $obs = self::getFndCajas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajas($paginador, $criterio);
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

            $obs = self::getFndCajas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajas($paginador, $criterio);
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

            $obs = self::getFndCajas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajas($paginador, $criterio);
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

            $obs = self::getFndCajas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajas($paginador, $criterio);
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

            $obs = self::getFndCajas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajas($paginador, $criterio);
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

            $obs = self::getFndCajas(null, $criterio);
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

            $obs = self::getFndCajas($paginador, $criterio);
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

            $obs = self::getFndCajas($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'fnd_caja_adm');
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

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha_apertura' */ 	
	public function getFechaAperturaDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFechaApertura(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaAperturaDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaAperturaDiferenciaDias();
        
            if ($fecha_hace > 0) {
                $fecha_hace = 'hace ' . abs($fecha_hace) . ' dias';
            } elseif ($fecha_hace < 0) {
                $fecha_hace = 'faltan ' . abs($fecha_hace) . ' dias';
            } else {
                $fecha_hace = 'hoy';
            }
            return $fecha_hace;
	}

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha_cierre' */ 	
	public function getFechaCierreDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFechaCierre(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaCierreDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaCierreDiferenciaDias();
        
            if ($fecha_hace > 0) {
                $fecha_hace = 'hace ' . abs($fecha_hace) . ' dias';
            } elseif ($fecha_hace < 0) {
                $fecha_hace = 'faltan ' . abs($fecha_hace) . ' dias';
            } else {
                $fecha_hace = 'hoy';
            }
            return $fecha_hace;
	}

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha_rendicion' */ 	
	public function getFechaRendicionDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFechaRendicion(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaRendicionDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaRendicionDiferenciaDias();
        
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
	public function getFndCajaIngresosParaBloqueVinculo($palabra, $pagina){
            $c = new Criterio();

            $c->addInicioSubconsulta();
            $c->add(FndCajaIngreso::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL, false, '');
            $c->addFinSubconsulta();

            $c->addInicioSubconsulta();
            $c->add(FndCajaIngreso::GEN_ATTR_ID, '%'.$palabra.'%', Criterio::LIKE);
            
                $c->add(FndCajaIngreso::GEN_ATTR_DESCRIPCION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(FndCajaIngreso::GEN_ATTR_CODIGO, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(FndCajaIngreso::GEN_ATTR_OBSERVACION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
            $c->addFinSubconsulta();

            $c->addTabla(FndCajaIngreso::GEN_TABLA);
            $c->addOrden('2');
            $c->setCriterios();

            $paginador = new Paginador(50, $pagina);

            $fnd_caja_ingresos = FndCajaIngreso::getFndCajaIngresos($paginador, $c);

            $arr['COLECCION'] = $fnd_caja_ingresos;
            $arr['PAGINADOR'] = $paginador;
            return $arr;
	}

	/* retorna coleccion para mostrar en bloque vinculos 'modificado_por' */ 	
	public function getFndCajaEgresosParaBloqueVinculo($palabra, $pagina){
            $c = new Criterio();

            $c->addInicioSubconsulta();
            $c->add(FndCajaEgreso::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL, false, '');
            $c->addFinSubconsulta();

            $c->addInicioSubconsulta();
            $c->add(FndCajaEgreso::GEN_ATTR_ID, '%'.$palabra.'%', Criterio::LIKE);
            
                $c->add(FndCajaEgreso::GEN_ATTR_DESCRIPCION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(FndCajaEgreso::GEN_ATTR_CODIGO, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(FndCajaEgreso::GEN_ATTR_OBSERVACION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
            $c->addFinSubconsulta();

            $c->addTabla(FndCajaEgreso::GEN_TABLA);
            $c->addOrden('2');
            $c->setCriterios();

            $paginador = new Paginador(50, $pagina);

            $fnd_caja_egresos = FndCajaEgreso::getFndCajaEgresos($paginador, $c);

            $arr['COLECCION'] = $fnd_caja_egresos;
            $arr['PAGINADOR'] = $paginador;
            return $arr;
	}
	
            /**
             * Metodo que retorna una coleccion de descripciones unificada para usar en autosuggest
             */
            static function getArrDescripcionsUnificado(){
                $c = new Criterio();
                $c->addTabla(FndCaja::GEN_TABLA);
                $c->addOrden(FndCaja::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $fnd_cajas = FndCaja::getFndCajas(null, $c);

                $arr = array();
                foreach($fnd_cajas as $fnd_caja){
                    $descripcion = $fnd_caja->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>