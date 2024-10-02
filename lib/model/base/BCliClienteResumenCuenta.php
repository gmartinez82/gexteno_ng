<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BCliClienteResumenCuenta
{ 
	
	const SES_PAGINACION = 'adm_cliclienteresumencuenta_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_cliclienteresumencuenta_paginas_registros';
	const SES_CRITERIOS = 'adm_cliclienteresumencuenta_criterios';
	
	const GEN_CLASE = 'CliClienteResumenCuenta';
	const GEN_TABLA = 'cli_cliente_resumen_cuenta';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BCliClienteResumenCuenta */ 
	const GEN_ATTR_ID = 'cli_cliente_resumen_cuenta.id';
	const GEN_ATTR_DESCRIPCION = 'cli_cliente_resumen_cuenta.descripcion';
	const GEN_ATTR_CLI_CLIENTE_ID = 'cli_cliente_resumen_cuenta.cli_cliente_id';
	const GEN_ATTR_CODIGO = 'cli_cliente_resumen_cuenta.codigo';
	const GEN_ATTR_CUENTA_LIMITE = 'cli_cliente_resumen_cuenta.cuenta_limite';
	const GEN_ATTR_CUENTA_ACTUAL = 'cli_cliente_resumen_cuenta.cuenta_actual';
	const GEN_ATTR_CUENTA_ACTUAL_PORCENTAJE = 'cli_cliente_resumen_cuenta.cuenta_actual_porcentaje';
	const GEN_ATTR_CUENTA_SALDO = 'cli_cliente_resumen_cuenta.cuenta_saldo';
	const GEN_ATTR_CUENTA_SALDO_PORCENTAJE = 'cli_cliente_resumen_cuenta.cuenta_saldo_porcentaje';
	const GEN_ATTR_CUENTA_MAXIMO_DIAS = 'cli_cliente_resumen_cuenta.cuenta_maximo_dias';
	const GEN_ATTR_CUENTA_ACTUAL_DIAS = 'cli_cliente_resumen_cuenta.cuenta_actual_dias';
	const GEN_ATTR_CUENTA_ACTUAL_FECHA = 'cli_cliente_resumen_cuenta.cuenta_actual_fecha';
	const GEN_ATTR_CUENTA_ACTUAL_CANTIDAD = 'cli_cliente_resumen_cuenta.cuenta_actual_cantidad';
	const GEN_ATTR_CUENTA_BLOQUEADA = 'cli_cliente_resumen_cuenta.cuenta_bloqueada';
	const GEN_ATTR_OBSERVACION = 'cli_cliente_resumen_cuenta.observacion';
	const GEN_ATTR_ORDEN = 'cli_cliente_resumen_cuenta.orden';
	const GEN_ATTR_ESTADO = 'cli_cliente_resumen_cuenta.estado';
	const GEN_ATTR_CREADO = 'cli_cliente_resumen_cuenta.creado';
	const GEN_ATTR_CREADO_POR = 'cli_cliente_resumen_cuenta.creado_por';
	const GEN_ATTR_MODIFICADO = 'cli_cliente_resumen_cuenta.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'cli_cliente_resumen_cuenta.modificado_por';

	/* Constantes de Atributos Min de BCliClienteResumenCuenta */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_CLI_CLIENTE_ID = 'cli_cliente_id';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_CUENTA_LIMITE = 'cuenta_limite';
	const GEN_ATTR_MIN_CUENTA_ACTUAL = 'cuenta_actual';
	const GEN_ATTR_MIN_CUENTA_ACTUAL_PORCENTAJE = 'cuenta_actual_porcentaje';
	const GEN_ATTR_MIN_CUENTA_SALDO = 'cuenta_saldo';
	const GEN_ATTR_MIN_CUENTA_SALDO_PORCENTAJE = 'cuenta_saldo_porcentaje';
	const GEN_ATTR_MIN_CUENTA_MAXIMO_DIAS = 'cuenta_maximo_dias';
	const GEN_ATTR_MIN_CUENTA_ACTUAL_DIAS = 'cuenta_actual_dias';
	const GEN_ATTR_MIN_CUENTA_ACTUAL_FECHA = 'cuenta_actual_fecha';
	const GEN_ATTR_MIN_CUENTA_ACTUAL_CANTIDAD = 'cuenta_actual_cantidad';
	const GEN_ATTR_MIN_CUENTA_BLOQUEADA = 'cuenta_bloqueada';
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
	

	/* Atributos de BCliClienteResumenCuenta */ 
	private $id;
	private $descripcion;
	private $cli_cliente_id;
	private $codigo;
	private $cuenta_limite;
	private $cuenta_actual;
	private $cuenta_actual_porcentaje;
	private $cuenta_saldo;
	private $cuenta_saldo_porcentaje;
	private $cuenta_maximo_dias;
	private $cuenta_actual_dias;
	private $cuenta_actual_fecha;
	private $cuenta_actual_cantidad;
	private $cuenta_bloqueada;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BCliClienteResumenCuenta */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getCliClienteId(){ if(isset($this->cli_cliente_id)){ return $this->cli_cliente_id; }else{ return 'null'; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getCuentaLimite(){ if(isset($this->cuenta_limite)){ return $this->cuenta_limite; }else{ return 0; } }
	public function getCuentaActual(){ if(isset($this->cuenta_actual)){ return $this->cuenta_actual; }else{ return 0; } }
	public function getCuentaActualPorcentaje(){ if(isset($this->cuenta_actual_porcentaje)){ return $this->cuenta_actual_porcentaje; }else{ return 0; } }
	public function getCuentaSaldo(){ if(isset($this->cuenta_saldo)){ return $this->cuenta_saldo; }else{ return 0; } }
	public function getCuentaSaldoPorcentaje(){ if(isset($this->cuenta_saldo_porcentaje)){ return $this->cuenta_saldo_porcentaje; }else{ return 0; } }
	public function getCuentaMaximoDias(){ if(isset($this->cuenta_maximo_dias)){ return $this->cuenta_maximo_dias; }else{ return 0; } }
	public function getCuentaActualDias(){ if(isset($this->cuenta_actual_dias)){ return $this->cuenta_actual_dias; }else{ return 0; } }
	public function getCuentaActualFecha(){ if(isset($this->cuenta_actual_fecha)){ return $this->cuenta_actual_fecha; }else{ return ''; } }
	public function getCuentaActualCantidad(){ if(isset($this->cuenta_actual_cantidad)){ return $this->cuenta_actual_cantidad; }else{ return 0; } }
	public function getCuentaBloqueada(){ if(isset($this->cuenta_bloqueada)){ return $this->cuenta_bloqueada; }else{ return 0; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BCliClienteResumenCuenta */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_CLI_CLIENTE_ID."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_CUENTA_LIMITE."
				, ".self::GEN_ATTR_CUENTA_ACTUAL."
				, ".self::GEN_ATTR_CUENTA_ACTUAL_PORCENTAJE."
				, ".self::GEN_ATTR_CUENTA_SALDO."
				, ".self::GEN_ATTR_CUENTA_SALDO_PORCENTAJE."
				, ".self::GEN_ATTR_CUENTA_MAXIMO_DIAS."
				, ".self::GEN_ATTR_CUENTA_ACTUAL_DIAS."
				, ".self::GEN_ATTR_CUENTA_ACTUAL_FECHA."
				, ".self::GEN_ATTR_CUENTA_ACTUAL_CANTIDAD."
				, ".self::GEN_ATTR_CUENTA_BLOQUEADA."
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
				$this->setCliClienteId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_ID]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setCuentaLimite($fila[self::GEN_ATTR_MIN_CUENTA_LIMITE]);
				$this->setCuentaActual($fila[self::GEN_ATTR_MIN_CUENTA_ACTUAL]);
				$this->setCuentaActualPorcentaje($fila[self::GEN_ATTR_MIN_CUENTA_ACTUAL_PORCENTAJE]);
				$this->setCuentaSaldo($fila[self::GEN_ATTR_MIN_CUENTA_SALDO]);
				$this->setCuentaSaldoPorcentaje($fila[self::GEN_ATTR_MIN_CUENTA_SALDO_PORCENTAJE]);
				$this->setCuentaMaximoDias($fila[self::GEN_ATTR_MIN_CUENTA_MAXIMO_DIAS]);
				$this->setCuentaActualDias($fila[self::GEN_ATTR_MIN_CUENTA_ACTUAL_DIAS]);
				$this->setCuentaActualFecha($fila[self::GEN_ATTR_MIN_CUENTA_ACTUAL_FECHA]);
				$this->setCuentaActualCantidad($fila[self::GEN_ATTR_MIN_CUENTA_ACTUAL_CANTIDAD]);
				$this->setCuentaBloqueada($fila[self::GEN_ATTR_MIN_CUENTA_BLOQUEADA]);
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
	public function setCliClienteId($v){ $this->cli_cliente_id = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setCuentaLimite($v){ $this->cuenta_limite = $v; }
	public function setCuentaActual($v){ $this->cuenta_actual = $v; }
	public function setCuentaActualPorcentaje($v){ $this->cuenta_actual_porcentaje = $v; }
	public function setCuentaSaldo($v){ $this->cuenta_saldo = $v; }
	public function setCuentaSaldoPorcentaje($v){ $this->cuenta_saldo_porcentaje = $v; }
	public function setCuentaMaximoDias($v){ $this->cuenta_maximo_dias = $v; }
	public function setCuentaActualDias($v){ $this->cuenta_actual_dias = $v; }
	public function setCuentaActualFecha($v){ $this->cuenta_actual_fecha = $v; }
	public function setCuentaActualCantidad($v){ $this->cuenta_actual_cantidad = $v; }
	public function setCuentaBloqueada($v){ $this->cuenta_bloqueada = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new CliClienteResumenCuenta();
            $o->setId($fila[CliClienteResumenCuenta::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setCliClienteId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_ID]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setCuentaLimite($fila[self::GEN_ATTR_MIN_CUENTA_LIMITE]);
			$o->setCuentaActual($fila[self::GEN_ATTR_MIN_CUENTA_ACTUAL]);
			$o->setCuentaActualPorcentaje($fila[self::GEN_ATTR_MIN_CUENTA_ACTUAL_PORCENTAJE]);
			$o->setCuentaSaldo($fila[self::GEN_ATTR_MIN_CUENTA_SALDO]);
			$o->setCuentaSaldoPorcentaje($fila[self::GEN_ATTR_MIN_CUENTA_SALDO_PORCENTAJE]);
			$o->setCuentaMaximoDias($fila[self::GEN_ATTR_MIN_CUENTA_MAXIMO_DIAS]);
			$o->setCuentaActualDias($fila[self::GEN_ATTR_MIN_CUENTA_ACTUAL_DIAS]);
			$o->setCuentaActualFecha($fila[self::GEN_ATTR_MIN_CUENTA_ACTUAL_FECHA]);
			$o->setCuentaActualCantidad($fila[self::GEN_ATTR_MIN_CUENTA_ACTUAL_CANTIDAD]);
			$o->setCuentaBloqueada($fila[self::GEN_ATTR_MIN_CUENTA_BLOQUEADA]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BCliClienteResumenCuenta */ 	
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

	/* Cambia el estado de BCliClienteResumenCuenta */ 	
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

	/* Save de BCliClienteResumenCuenta */ 	
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
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_CUENTA_LIMITE."
						, ".self::GEN_ATTR_MIN_CUENTA_ACTUAL."
						, ".self::GEN_ATTR_MIN_CUENTA_ACTUAL_PORCENTAJE."
						, ".self::GEN_ATTR_MIN_CUENTA_SALDO."
						, ".self::GEN_ATTR_MIN_CUENTA_SALDO_PORCENTAJE."
						, ".self::GEN_ATTR_MIN_CUENTA_MAXIMO_DIAS."
						, ".self::GEN_ATTR_MIN_CUENTA_ACTUAL_DIAS."
						, ".self::GEN_ATTR_MIN_CUENTA_ACTUAL_FECHA."
						, ".self::GEN_ATTR_MIN_CUENTA_ACTUAL_CANTIDAD."
						, ".self::GEN_ATTR_MIN_CUENTA_BLOQUEADA."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('cli_cliente_resumen_cuenta_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getCliClienteId()."
						, '".$this->getCodigo()."'
						, '".$this->getCuentaLimite()."'
						, '".$this->getCuentaActual()."'
						, '".$this->getCuentaActualPorcentaje()."'
						, '".$this->getCuentaSaldo()."'
						, '".$this->getCuentaSaldoPorcentaje()."'
						, ".$this->getCuentaMaximoDias()."
						, ".$this->getCuentaActualDias()."
						, '".$this->getCuentaActualFecha()."'
						, ".$this->getCuentaActualCantidad()."
						, ".$this->getCuentaBloqueada()."
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('cli_cliente_resumen_cuenta_seq')";
            
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
                 
				 ".CliClienteResumenCuenta::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID." = ".$this->getCliClienteId()."
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_CUENTA_LIMITE." = '".$this->getCuentaLimite()."'
						, ".self::GEN_ATTR_MIN_CUENTA_ACTUAL." = '".$this->getCuentaActual()."'
						, ".self::GEN_ATTR_MIN_CUENTA_ACTUAL_PORCENTAJE." = '".$this->getCuentaActualPorcentaje()."'
						, ".self::GEN_ATTR_MIN_CUENTA_SALDO." = '".$this->getCuentaSaldo()."'
						, ".self::GEN_ATTR_MIN_CUENTA_SALDO_PORCENTAJE." = '".$this->getCuentaSaldoPorcentaje()."'
						, ".self::GEN_ATTR_MIN_CUENTA_MAXIMO_DIAS." = ".$this->getCuentaMaximoDias()."
						, ".self::GEN_ATTR_MIN_CUENTA_ACTUAL_DIAS." = ".$this->getCuentaActualDias()."
						, ".self::GEN_ATTR_MIN_CUENTA_ACTUAL_FECHA." = '".$this->getCuentaActualFecha()."'
						, ".self::GEN_ATTR_MIN_CUENTA_ACTUAL_CANTIDAD." = ".$this->getCuentaActualCantidad()."
						, ".self::GEN_ATTR_MIN_CUENTA_BLOQUEADA." = ".$this->getCuentaBloqueada()."
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
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_CUENTA_LIMITE."
						, ".self::GEN_ATTR_MIN_CUENTA_ACTUAL."
						, ".self::GEN_ATTR_MIN_CUENTA_ACTUAL_PORCENTAJE."
						, ".self::GEN_ATTR_MIN_CUENTA_SALDO."
						, ".self::GEN_ATTR_MIN_CUENTA_SALDO_PORCENTAJE."
						, ".self::GEN_ATTR_MIN_CUENTA_MAXIMO_DIAS."
						, ".self::GEN_ATTR_MIN_CUENTA_ACTUAL_DIAS."
						, ".self::GEN_ATTR_MIN_CUENTA_ACTUAL_FECHA."
						, ".self::GEN_ATTR_MIN_CUENTA_ACTUAL_CANTIDAD."
						, ".self::GEN_ATTR_MIN_CUENTA_BLOQUEADA."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getDescripcion()."'
						, ".$this->getCliClienteId()."
						, '".$this->getCodigo()."'
						, '".$this->getCuentaLimite()."'
						, '".$this->getCuentaActual()."'
						, '".$this->getCuentaActualPorcentaje()."'
						, '".$this->getCuentaSaldo()."'
						, '".$this->getCuentaSaldoPorcentaje()."'
						, ".$this->getCuentaMaximoDias()."
						, ".$this->getCuentaActualDias()."
						, '".$this->getCuentaActualFecha()."'
						, ".$this->getCuentaActualCantidad()."
						, ".$this->getCuentaBloqueada()."
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
                     
				 ".CliClienteResumenCuenta::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID." = ".$this->getCliClienteId()."
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_CUENTA_LIMITE." = '".$this->getCuentaLimite()."'
						, ".self::GEN_ATTR_MIN_CUENTA_ACTUAL." = '".$this->getCuentaActual()."'
						, ".self::GEN_ATTR_MIN_CUENTA_ACTUAL_PORCENTAJE." = '".$this->getCuentaActualPorcentaje()."'
						, ".self::GEN_ATTR_MIN_CUENTA_SALDO." = '".$this->getCuentaSaldo()."'
						, ".self::GEN_ATTR_MIN_CUENTA_SALDO_PORCENTAJE." = '".$this->getCuentaSaldoPorcentaje()."'
						, ".self::GEN_ATTR_MIN_CUENTA_MAXIMO_DIAS." = ".$this->getCuentaMaximoDias()."
						, ".self::GEN_ATTR_MIN_CUENTA_ACTUAL_DIAS." = ".$this->getCuentaActualDias()."
						, ".self::GEN_ATTR_MIN_CUENTA_ACTUAL_FECHA." = '".$this->getCuentaActualFecha()."'
						, ".self::GEN_ATTR_MIN_CUENTA_ACTUAL_CANTIDAD." = ".$this->getCuentaActualCantidad()."
						, ".self::GEN_ATTR_MIN_CUENTA_BLOQUEADA." = ".$this->getCuentaBloqueada()."
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
            $o = new CliClienteResumenCuenta();
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

	/* Delete de BCliClienteResumenCuenta */ 	
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
	
	public function duplicarCliClienteResumenCuenta(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getCliClienteResumenCuentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = CliClienteResumenCuenta::setAplicarFiltrosDeAlcance($criterio);

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
	
		$cliclienteresumencuentas = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $cliclienteresumencuenta = new CliClienteResumenCuenta();
                    $cliclienteresumencuenta->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $cliclienteresumencuenta->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$cliclienteresumencuenta->setCliClienteId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_ID]);
			$cliclienteresumencuenta->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$cliclienteresumencuenta->setCuentaLimite($fila[self::GEN_ATTR_MIN_CUENTA_LIMITE]);
			$cliclienteresumencuenta->setCuentaActual($fila[self::GEN_ATTR_MIN_CUENTA_ACTUAL]);
			$cliclienteresumencuenta->setCuentaActualPorcentaje($fila[self::GEN_ATTR_MIN_CUENTA_ACTUAL_PORCENTAJE]);
			$cliclienteresumencuenta->setCuentaSaldo($fila[self::GEN_ATTR_MIN_CUENTA_SALDO]);
			$cliclienteresumencuenta->setCuentaSaldoPorcentaje($fila[self::GEN_ATTR_MIN_CUENTA_SALDO_PORCENTAJE]);
			$cliclienteresumencuenta->setCuentaMaximoDias($fila[self::GEN_ATTR_MIN_CUENTA_MAXIMO_DIAS]);
			$cliclienteresumencuenta->setCuentaActualDias($fila[self::GEN_ATTR_MIN_CUENTA_ACTUAL_DIAS]);
			$cliclienteresumencuenta->setCuentaActualFecha($fila[self::GEN_ATTR_MIN_CUENTA_ACTUAL_FECHA]);
			$cliclienteresumencuenta->setCuentaActualCantidad($fila[self::GEN_ATTR_MIN_CUENTA_ACTUAL_CANTIDAD]);
			$cliclienteresumencuenta->setCuentaBloqueada($fila[self::GEN_ATTR_MIN_CUENTA_BLOQUEADA]);
			$cliclienteresumencuenta->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$cliclienteresumencuenta->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$cliclienteresumencuenta->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$cliclienteresumencuenta->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$cliclienteresumencuenta->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$cliclienteresumencuenta->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$cliclienteresumencuenta->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $cliclienteresumencuentas[] = $cliclienteresumencuenta;
		}
		
		return $cliclienteresumencuentas;
	}	
	

	/* Método getCliClienteResumenCuentas Habilitados */ 	
	static function getCliClienteResumenCuentasHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return CliClienteResumenCuenta::getCliClienteResumenCuentas($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getCliClienteResumenCuentas para listado de Backend */ 	
	static function getCliClienteResumenCuentasDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return CliClienteResumenCuenta::getCliClienteResumenCuentas($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getCliClienteResumenCuentasCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = CliClienteResumenCuenta::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = CliClienteResumenCuenta::getCliClienteResumenCuentas($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getCliClienteResumenCuentas filtrado para select */ 	
	static function getCliClienteResumenCuentasCmbF($paginador = null, $criterio = null){
            $col = CliClienteResumenCuenta::getCliClienteResumenCuentas($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getCliClienteResumenCuentas filtrado por una coleccion de objetos foraneos de CliCliente */ 	
	static function getCliClienteResumenCuentasXCliClientes($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(CliClienteResumenCuenta::GEN_ATTR_CLI_CLIENTE_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(CliClienteResumenCuenta::GEN_TABLA);
            $c->addOrden(CliClienteResumenCuenta::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = CliClienteResumenCuenta::getCliClienteResumenCuentas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCliClienteId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'cli_cliente_resumen_cuenta_adm.php';
            $url_gestion = 'cli_cliente_resumen_cuenta_gestion.php';
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
	

	/* Metodo que retorna el CliCliente (Clave Foranea) */ 	
    public function getCliCliente(){
        $o = new CliCliente();
        $o->setId($this->getCliClienteId());
        return $o;			
    }

	/* Metodo que retorna el CliCliente (Clave Foranea) en Array */ 	
    public function getCliClienteEnArray(&$arr_os){
        if($this->getCliClienteId() != 'null'){
            if(isset($arr_os[$this->getCliClienteId()])){
                $o = $arr_os[$this->getCliClienteId()];
            }else{
                $o = CliCliente::getOxId($this->getCliClienteId());
                if($o){
                    $arr_os[$this->getCliClienteId()] = $o;
                }
            }
        }else{
            $o = new CliCliente();
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
            		
        if($contexto_solicitante != CliCliente::GEN_CLASE){
            if($this->getCliCliente()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(CliCliente::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getCliCliente()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM cli_cliente_resumen_cuenta'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'cli_cliente_resumen_cuenta';");
            
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

            $obs = self::getCliClienteResumenCuentas($paginador, $criterio);
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

            $obs = self::getCliClienteResumenCuentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteResumenCuentas($paginador, $criterio);
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

            $obs = self::getCliClienteResumenCuentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cli_cliente_id' */ 	
	static function getOxCliClienteId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CLIENTE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteResumenCuentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cli_cliente_id' */ 	
	static function getOsxCliClienteId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CLIENTE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClienteResumenCuentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteResumenCuentas($paginador, $criterio);
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

            $obs = self::getCliClienteResumenCuentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cuenta_limite' */ 	
	static function getOxCuentaLimite($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUENTA_LIMITE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteResumenCuentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cuenta_limite' */ 	
	static function getOsxCuentaLimite($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUENTA_LIMITE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClienteResumenCuentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cuenta_actual' */ 	
	static function getOxCuentaActual($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUENTA_ACTUAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteResumenCuentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cuenta_actual' */ 	
	static function getOsxCuentaActual($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUENTA_ACTUAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClienteResumenCuentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cuenta_actual_porcentaje' */ 	
	static function getOxCuentaActualPorcentaje($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUENTA_ACTUAL_PORCENTAJE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteResumenCuentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cuenta_actual_porcentaje' */ 	
	static function getOsxCuentaActualPorcentaje($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUENTA_ACTUAL_PORCENTAJE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClienteResumenCuentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cuenta_saldo' */ 	
	static function getOxCuentaSaldo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUENTA_SALDO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteResumenCuentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cuenta_saldo' */ 	
	static function getOsxCuentaSaldo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUENTA_SALDO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClienteResumenCuentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cuenta_saldo_porcentaje' */ 	
	static function getOxCuentaSaldoPorcentaje($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUENTA_SALDO_PORCENTAJE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteResumenCuentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cuenta_saldo_porcentaje' */ 	
	static function getOsxCuentaSaldoPorcentaje($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUENTA_SALDO_PORCENTAJE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClienteResumenCuentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cuenta_maximo_dias' */ 	
	static function getOxCuentaMaximoDias($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUENTA_MAXIMO_DIAS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteResumenCuentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cuenta_maximo_dias' */ 	
	static function getOsxCuentaMaximoDias($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUENTA_MAXIMO_DIAS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClienteResumenCuentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cuenta_actual_dias' */ 	
	static function getOxCuentaActualDias($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUENTA_ACTUAL_DIAS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteResumenCuentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cuenta_actual_dias' */ 	
	static function getOsxCuentaActualDias($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUENTA_ACTUAL_DIAS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClienteResumenCuentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cuenta_actual_fecha' */ 	
	static function getOxCuentaActualFecha($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUENTA_ACTUAL_FECHA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteResumenCuentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cuenta_actual_fecha' */ 	
	static function getOsxCuentaActualFecha($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUENTA_ACTUAL_FECHA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClienteResumenCuentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cuenta_actual_cantidad' */ 	
	static function getOxCuentaActualCantidad($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUENTA_ACTUAL_CANTIDAD, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteResumenCuentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cuenta_actual_cantidad' */ 	
	static function getOsxCuentaActualCantidad($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUENTA_ACTUAL_CANTIDAD, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClienteResumenCuentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cuenta_bloqueada' */ 	
	static function getOxCuentaBloqueada($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUENTA_BLOQUEADA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteResumenCuentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cuenta_bloqueada' */ 	
	static function getOsxCuentaBloqueada($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUENTA_BLOQUEADA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClienteResumenCuentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteResumenCuentas($paginador, $criterio);
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

            $obs = self::getCliClienteResumenCuentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteResumenCuentas($paginador, $criterio);
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

            $obs = self::getCliClienteResumenCuentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteResumenCuentas($paginador, $criterio);
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

            $obs = self::getCliClienteResumenCuentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteResumenCuentas($paginador, $criterio);
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

            $obs = self::getCliClienteResumenCuentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteResumenCuentas($paginador, $criterio);
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

            $obs = self::getCliClienteResumenCuentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteResumenCuentas($paginador, $criterio);
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

            $obs = self::getCliClienteResumenCuentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteResumenCuentas($paginador, $criterio);
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

            $obs = self::getCliClienteResumenCuentas(null, $criterio);
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

            $obs = self::getCliClienteResumenCuentas($paginador, $criterio);
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

            $obs = self::getCliClienteResumenCuentas($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'cli_cliente_resumen_cuenta_adm');
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

	/* Metodos anexos a manejo de fechas (date y datetime) 'cuenta_actual_fecha' */ 	
	public function getCuentaActualFechaDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getCuentaActualFecha(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getCuentaActualFechaDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getCuentaActualFechaDiferenciaDias();
        
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
	
            /**
             * Metodo que retorna una coleccion de descripciones unificada para usar en autosuggest
             */
            static function getArrDescripcionsUnificado(){
                $c = new Criterio();
                $c->addTabla(CliClienteResumenCuenta::GEN_TABLA);
                $c->addOrden(CliClienteResumenCuenta::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $cli_cliente_resumen_cuentas = CliClienteResumenCuenta::getCliClienteResumenCuentas(null, $c);

                $arr = array();
                foreach($cli_cliente_resumen_cuentas as $cli_cliente_resumen_cuenta){
                    $descripcion = $cli_cliente_resumen_cuenta->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>