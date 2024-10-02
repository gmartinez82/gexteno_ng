<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BPrdParamOperacion
{ 
	
	const SES_PAGINACION = 'adm_prdparamoperacion_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_prdparamoperacion_paginas_registros';
	const SES_CRITERIOS = 'adm_prdparamoperacion_criterios';
	
	const GEN_CLASE = 'PrdParamOperacion';
	const GEN_TABLA = 'prd_param_operacion';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BPrdParamOperacion */ 
	const GEN_ATTR_ID = 'prd_param_operacion.id';
	const GEN_ATTR_DESCRIPCION = 'prd_param_operacion.descripcion';
	const GEN_ATTR_DESCRIPCION_CORTA = 'prd_param_operacion.descripcion_corta';
	const GEN_ATTR_PRD_PARAM_TIPO_OPERACION_ID = 'prd_param_operacion.prd_param_tipo_operacion_id';
	const GEN_ATTR_NUMERO = 'prd_param_operacion.numero';
	const GEN_ATTR_PRD_PROCESO_PRODUCTIVO_ID = 'prd_param_operacion.prd_proceso_productivo_id';
	const GEN_ATTR_PRD_LINEA_PRODUCCION_ID = 'prd_param_operacion.prd_linea_produccion_id';
	const GEN_ATTR_PRD_EQUIPO_ID = 'prd_param_operacion.prd_equipo_id';
	const GEN_ATTR_CANTIDAD_OPERARIOS = 'prd_param_operacion.cantidad_operarios';
	const GEN_ATTR_CANTIDAD_EQUIPOS = 'prd_param_operacion.cantidad_equipos';
	const GEN_ATTR_CODIGO = 'prd_param_operacion.codigo';
	const GEN_ATTR_OBSERVACION = 'prd_param_operacion.observacion';
	const GEN_ATTR_ORDEN = 'prd_param_operacion.orden';
	const GEN_ATTR_ESTADO = 'prd_param_operacion.estado';
	const GEN_ATTR_CREADO = 'prd_param_operacion.creado';
	const GEN_ATTR_CREADO_POR = 'prd_param_operacion.creado_por';
	const GEN_ATTR_MODIFICADO = 'prd_param_operacion.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'prd_param_operacion.modificado_por';

	/* Constantes de Atributos Min de BPrdParamOperacion */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_DESCRIPCION_CORTA = 'descripcion_corta';
	const GEN_ATTR_MIN_PRD_PARAM_TIPO_OPERACION_ID = 'prd_param_tipo_operacion_id';
	const GEN_ATTR_MIN_NUMERO = 'numero';
	const GEN_ATTR_MIN_PRD_PROCESO_PRODUCTIVO_ID = 'prd_proceso_productivo_id';
	const GEN_ATTR_MIN_PRD_LINEA_PRODUCCION_ID = 'prd_linea_produccion_id';
	const GEN_ATTR_MIN_PRD_EQUIPO_ID = 'prd_equipo_id';
	const GEN_ATTR_MIN_CANTIDAD_OPERARIOS = 'cantidad_operarios';
	const GEN_ATTR_MIN_CANTIDAD_EQUIPOS = 'cantidad_equipos';
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
	

	/* Atributos de BPrdParamOperacion */ 
	private $id;
	private $descripcion;
	private $descripcion_corta;
	private $prd_param_tipo_operacion_id;
	private $numero;
	private $prd_proceso_productivo_id;
	private $prd_linea_produccion_id;
	private $prd_equipo_id;
	private $cantidad_operarios;
	private $cantidad_equipos;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BPrdParamOperacion */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getDescripcionCorta(){ if(isset($this->descripcion_corta)){ return $this->descripcion_corta; }else{ return ''; } }
	public function getPrdParamTipoOperacionId(){ if(isset($this->prd_param_tipo_operacion_id)){ return $this->prd_param_tipo_operacion_id; }else{ return 'null'; } }
	public function getNumero(){ if(isset($this->numero)){ return $this->numero; }else{ return 0; } }
	public function getPrdProcesoProductivoId(){ if(isset($this->prd_proceso_productivo_id)){ return $this->prd_proceso_productivo_id; }else{ return 'null'; } }
	public function getPrdLineaProduccionId(){ if(isset($this->prd_linea_produccion_id)){ return $this->prd_linea_produccion_id; }else{ return 'null'; } }
	public function getPrdEquipoId(){ if(isset($this->prd_equipo_id)){ return $this->prd_equipo_id; }else{ return 'null'; } }
	public function getCantidadOperarios(){ if(isset($this->cantidad_operarios)){ return $this->cantidad_operarios; }else{ return 0; } }
	public function getCantidadEquipos(){ if(isset($this->cantidad_equipos)){ return $this->cantidad_equipos; }else{ return 0; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BPrdParamOperacion */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_DESCRIPCION_CORTA."
				, ".self::GEN_ATTR_PRD_PARAM_TIPO_OPERACION_ID."
				, ".self::GEN_ATTR_NUMERO."
				, ".self::GEN_ATTR_PRD_PROCESO_PRODUCTIVO_ID."
				, ".self::GEN_ATTR_PRD_LINEA_PRODUCCION_ID."
				, ".self::GEN_ATTR_PRD_EQUIPO_ID."
				, ".self::GEN_ATTR_CANTIDAD_OPERARIOS."
				, ".self::GEN_ATTR_CANTIDAD_EQUIPOS."
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
				$this->setDescripcionCorta($fila[self::GEN_ATTR_MIN_DESCRIPCION_CORTA]);
				$this->setPrdParamTipoOperacionId($fila[self::GEN_ATTR_MIN_PRD_PARAM_TIPO_OPERACION_ID]);
				$this->setNumero($fila[self::GEN_ATTR_MIN_NUMERO]);
				$this->setPrdProcesoProductivoId($fila[self::GEN_ATTR_MIN_PRD_PROCESO_PRODUCTIVO_ID]);
				$this->setPrdLineaProduccionId($fila[self::GEN_ATTR_MIN_PRD_LINEA_PRODUCCION_ID]);
				$this->setPrdEquipoId($fila[self::GEN_ATTR_MIN_PRD_EQUIPO_ID]);
				$this->setCantidadOperarios($fila[self::GEN_ATTR_MIN_CANTIDAD_OPERARIOS]);
				$this->setCantidadEquipos($fila[self::GEN_ATTR_MIN_CANTIDAD_EQUIPOS]);
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
	public function setDescripcionCorta($v){ $this->descripcion_corta = $v; }
	public function setPrdParamTipoOperacionId($v){ $this->prd_param_tipo_operacion_id = $v; }
	public function setNumero($v){ $this->numero = $v; }
	public function setPrdProcesoProductivoId($v){ $this->prd_proceso_productivo_id = $v; }
	public function setPrdLineaProduccionId($v){ $this->prd_linea_produccion_id = $v; }
	public function setPrdEquipoId($v){ $this->prd_equipo_id = $v; }
	public function setCantidadOperarios($v){ $this->cantidad_operarios = $v; }
	public function setCantidadEquipos($v){ $this->cantidad_equipos = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new PrdParamOperacion();
            $o->setId($fila[PrdParamOperacion::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setDescripcionCorta($fila[self::GEN_ATTR_MIN_DESCRIPCION_CORTA]);
			$o->setPrdParamTipoOperacionId($fila[self::GEN_ATTR_MIN_PRD_PARAM_TIPO_OPERACION_ID]);
			$o->setNumero($fila[self::GEN_ATTR_MIN_NUMERO]);
			$o->setPrdProcesoProductivoId($fila[self::GEN_ATTR_MIN_PRD_PROCESO_PRODUCTIVO_ID]);
			$o->setPrdLineaProduccionId($fila[self::GEN_ATTR_MIN_PRD_LINEA_PRODUCCION_ID]);
			$o->setPrdEquipoId($fila[self::GEN_ATTR_MIN_PRD_EQUIPO_ID]);
			$o->setCantidadOperarios($fila[self::GEN_ATTR_MIN_CANTIDAD_OPERARIOS]);
			$o->setCantidadEquipos($fila[self::GEN_ATTR_MIN_CANTIDAD_EQUIPOS]);
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

	/* Control de BPrdParamOperacion */ 	
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

	/* Cambia el estado de BPrdParamOperacion */ 	
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

	/* Save de BPrdParamOperacion */ 	
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
						, ".self::GEN_ATTR_MIN_PRD_PARAM_TIPO_OPERACION_ID."
						, ".self::GEN_ATTR_MIN_NUMERO."
						, ".self::GEN_ATTR_MIN_PRD_PROCESO_PRODUCTIVO_ID."
						, ".self::GEN_ATTR_MIN_PRD_LINEA_PRODUCCION_ID."
						, ".self::GEN_ATTR_MIN_PRD_EQUIPO_ID."
						, ".self::GEN_ATTR_MIN_CANTIDAD_OPERARIOS."
						, ".self::GEN_ATTR_MIN_CANTIDAD_EQUIPOS."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('prd_param_operacion_seq'), 
                '".$this->getDescripcion()."'
						, '".$this->getDescripcionCorta()."'
						, ".$this->getPrdParamTipoOperacionId()."
						, ".$this->getNumero()."
						, ".$this->getPrdProcesoProductivoId()."
						, ".$this->getPrdLineaProduccionId()."
						, ".$this->getPrdEquipoId()."
						, ".$this->getCantidadOperarios()."
						, ".$this->getCantidadEquipos()."
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('prd_param_operacion_seq')";
            
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
                 
				 ".PrdParamOperacion::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_DESCRIPCION_CORTA." = '".$this->getDescripcionCorta()."'
						, ".self::GEN_ATTR_MIN_PRD_PARAM_TIPO_OPERACION_ID." = ".$this->getPrdParamTipoOperacionId()."
						, ".self::GEN_ATTR_MIN_NUMERO." = ".$this->getNumero()."
						, ".self::GEN_ATTR_MIN_PRD_PROCESO_PRODUCTIVO_ID." = ".$this->getPrdProcesoProductivoId()."
						, ".self::GEN_ATTR_MIN_PRD_LINEA_PRODUCCION_ID." = ".$this->getPrdLineaProduccionId()."
						, ".self::GEN_ATTR_MIN_PRD_EQUIPO_ID." = ".$this->getPrdEquipoId()."
						, ".self::GEN_ATTR_MIN_CANTIDAD_OPERARIOS." = ".$this->getCantidadOperarios()."
						, ".self::GEN_ATTR_MIN_CANTIDAD_EQUIPOS." = ".$this->getCantidadEquipos()."
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
						, ".self::GEN_ATTR_MIN_DESCRIPCION_CORTA."
						, ".self::GEN_ATTR_MIN_PRD_PARAM_TIPO_OPERACION_ID."
						, ".self::GEN_ATTR_MIN_NUMERO."
						, ".self::GEN_ATTR_MIN_PRD_PROCESO_PRODUCTIVO_ID."
						, ".self::GEN_ATTR_MIN_PRD_LINEA_PRODUCCION_ID."
						, ".self::GEN_ATTR_MIN_PRD_EQUIPO_ID."
						, ".self::GEN_ATTR_MIN_CANTIDAD_OPERARIOS."
						, ".self::GEN_ATTR_MIN_CANTIDAD_EQUIPOS."
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
						, '".$this->getDescripcionCorta()."'
						, ".$this->getPrdParamTipoOperacionId()."
						, ".$this->getNumero()."
						, ".$this->getPrdProcesoProductivoId()."
						, ".$this->getPrdLineaProduccionId()."
						, ".$this->getPrdEquipoId()."
						, ".$this->getCantidadOperarios()."
						, ".$this->getCantidadEquipos()."
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
                     
				 ".PrdParamOperacion::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_DESCRIPCION_CORTA." = '".$this->getDescripcionCorta()."'
						, ".self::GEN_ATTR_MIN_PRD_PARAM_TIPO_OPERACION_ID." = ".$this->getPrdParamTipoOperacionId()."
						, ".self::GEN_ATTR_MIN_NUMERO." = ".$this->getNumero()."
						, ".self::GEN_ATTR_MIN_PRD_PROCESO_PRODUCTIVO_ID." = ".$this->getPrdProcesoProductivoId()."
						, ".self::GEN_ATTR_MIN_PRD_LINEA_PRODUCCION_ID." = ".$this->getPrdLineaProduccionId()."
						, ".self::GEN_ATTR_MIN_PRD_EQUIPO_ID." = ".$this->getPrdEquipoId()."
						, ".self::GEN_ATTR_MIN_CANTIDAD_OPERARIOS." = ".$this->getCantidadOperarios()."
						, ".self::GEN_ATTR_MIN_CANTIDAD_EQUIPOS." = ".$this->getCantidadEquipos()."
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
            $o = new PrdParamOperacion();
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

	/* Delete de BPrdParamOperacion */ 	
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
	
            // se elimina la coleccion de PrdOrdenTrabajoOperacions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrdOrdenTrabajoOperacion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrdOrdenTrabajoOperacions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrdParamOperacionPrdEquipos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrdParamOperacionPrdEquipo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrdParamOperacionPrdEquipos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrdParamOperacionOpeOperarios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrdParamOperacionOpeOperario::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrdParamOperacionOpeOperarios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrdLineaProduccionPrdParamOperacionPrdEquipos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrdLineaProduccionPrdParamOperacionPrdEquipo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrdLineaProduccionPrdParamOperacionPrdEquipos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarPrdParamOperacion(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getPrdParamOperacions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = PrdParamOperacion::setAplicarFiltrosDeAlcance($criterio);

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
	
		$prdparamoperacions = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $prdparamoperacion = new PrdParamOperacion();
                    $prdparamoperacion->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $prdparamoperacion->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$prdparamoperacion->setDescripcionCorta($fila[self::GEN_ATTR_MIN_DESCRIPCION_CORTA]);
			$prdparamoperacion->setPrdParamTipoOperacionId($fila[self::GEN_ATTR_MIN_PRD_PARAM_TIPO_OPERACION_ID]);
			$prdparamoperacion->setNumero($fila[self::GEN_ATTR_MIN_NUMERO]);
			$prdparamoperacion->setPrdProcesoProductivoId($fila[self::GEN_ATTR_MIN_PRD_PROCESO_PRODUCTIVO_ID]);
			$prdparamoperacion->setPrdLineaProduccionId($fila[self::GEN_ATTR_MIN_PRD_LINEA_PRODUCCION_ID]);
			$prdparamoperacion->setPrdEquipoId($fila[self::GEN_ATTR_MIN_PRD_EQUIPO_ID]);
			$prdparamoperacion->setCantidadOperarios($fila[self::GEN_ATTR_MIN_CANTIDAD_OPERARIOS]);
			$prdparamoperacion->setCantidadEquipos($fila[self::GEN_ATTR_MIN_CANTIDAD_EQUIPOS]);
			$prdparamoperacion->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$prdparamoperacion->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$prdparamoperacion->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$prdparamoperacion->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$prdparamoperacion->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$prdparamoperacion->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$prdparamoperacion->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$prdparamoperacion->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $prdparamoperacions[] = $prdparamoperacion;
		}
		
		return $prdparamoperacions;
	}	
	

	/* Método getPrdParamOperacions Habilitados */ 	
	static function getPrdParamOperacionsHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return PrdParamOperacion::getPrdParamOperacions($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getPrdParamOperacions para listado de Backend */ 	
	static function getPrdParamOperacionsDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return PrdParamOperacion::getPrdParamOperacions($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getPrdParamOperacionsCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = PrdParamOperacion::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = PrdParamOperacion::getPrdParamOperacions($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPrdParamOperacions filtrado para select */ 	
	static function getPrdParamOperacionsCmbF($paginador = null, $criterio = null){
            $col = PrdParamOperacion::getPrdParamOperacions($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPrdParamOperacions filtrado por una coleccion de objetos foraneos de PrdParamTipoOperacion */ 	
	static function getPrdParamOperacionsXPrdParamTipoOperacions($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PrdParamOperacion::GEN_ATTR_PRD_PARAM_TIPO_OPERACION_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PrdParamOperacion::GEN_TABLA);
            $c->addOrden(PrdParamOperacion::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PrdParamOperacion::getPrdParamOperacions($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrdParamTipoOperacionId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPrdParamOperacions filtrado por una coleccion de objetos foraneos de PrdProcesoProductivo */ 	
	static function getPrdParamOperacionsXPrdProcesoProductivos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PrdParamOperacion::GEN_ATTR_PRD_PROCESO_PRODUCTIVO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PrdParamOperacion::GEN_TABLA);
            $c->addOrden(PrdParamOperacion::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PrdParamOperacion::getPrdParamOperacions($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrdProcesoProductivoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPrdParamOperacions filtrado por una coleccion de objetos foraneos de PrdLineaProduccion */ 	
	static function getPrdParamOperacionsXPrdLineaProduccions($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PrdParamOperacion::GEN_ATTR_PRD_LINEA_PRODUCCION_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PrdParamOperacion::GEN_TABLA);
            $c->addOrden(PrdParamOperacion::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PrdParamOperacion::getPrdParamOperacions($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrdLineaProduccionId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPrdParamOperacions filtrado por una coleccion de objetos foraneos de PrdEquipo */ 	
	static function getPrdParamOperacionsXPrdEquipos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PrdParamOperacion::GEN_ATTR_PRD_EQUIPO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PrdParamOperacion::GEN_TABLA);
            $c->addOrden(PrdParamOperacion::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PrdParamOperacion::getPrdParamOperacions($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrdEquipoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'prd_param_operacion_adm.php';
            $url_gestion = 'prd_param_operacion_gestion.php';
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
	

	/* Metodo getPrdOrdenTrabajoOperacions */ 	
	public function getPrdOrdenTrabajoOperacions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrdOrdenTrabajoOperacion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrdOrdenTrabajoOperacion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrdOrdenTrabajoOperacion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PrdOrdenTrabajoOperacion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrdOrdenTrabajoOperacion::GEN_ATTR_PRD_PARAM_OPERACION_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrdOrdenTrabajoOperacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrdOrdenTrabajoOperacion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrdOrdenTrabajoOperacion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prdordentrabajooperacions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prdordentrabajooperacion = PrdOrdenTrabajoOperacion::hidratarObjeto($fila);			
                $prdordentrabajooperacions[] = $prdordentrabajooperacion;
            }

            return $prdordentrabajooperacions;
	}	
	

	/* Método getPrdOrdenTrabajoOperacionsBloque para MasInfo */ 	
	public function getPrdOrdenTrabajoOperacionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrdOrdenTrabajoOperacions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrdOrdenTrabajoOperacions Habilitados */ 	
	public function getPrdOrdenTrabajoOperacionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrdOrdenTrabajoOperacions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrdOrdenTrabajoOperacion */ 	
	public function getPrdOrdenTrabajoOperacion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrdOrdenTrabajoOperacions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrdOrdenTrabajoOperacion relacionadas */ 	
	public function deletePrdOrdenTrabajoOperacions(){
            $obs = $this->getPrdOrdenTrabajoOperacions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrdOrdenTrabajoOperacionsCmb() PrdOrdenTrabajoOperacion relacionadas */ 	
	public function getPrdOrdenTrabajoOperacionsCmb(){
            $c = new Criterio();
            $c->add(PrdOrdenTrabajoOperacion::GEN_ATTR_PRD_PARAM_OPERACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdOrdenTrabajoOperacion::GEN_TABLA);
            $c->setCriterios();

            $os = PrdOrdenTrabajoOperacion::getPrdOrdenTrabajoOperacionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrdOrdenTrabajoCiclos (Coleccion) relacionados a traves de PrdOrdenTrabajoOperacion */ 	
	public function getPrdOrdenTrabajoCiclosXPrdOrdenTrabajoOperacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrdOrdenTrabajoCiclo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdOrdenTrabajoOperacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdOrdenTrabajoOperacion::GEN_ATTR_PRD_PARAM_OPERACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdOrdenTrabajoCiclo::GEN_TABLA);
            $c->addRealJoin(PrdOrdenTrabajoOperacion::GEN_TABLA, PrdOrdenTrabajoOperacion::GEN_ATTR_PRD_ORDEN_TRABAJO_CICLO_ID, PrdOrdenTrabajoCiclo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrdOrdenTrabajoCiclo::getPrdOrdenTrabajoCiclos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrdOrdenTrabajoCiclos relacionados a traves de PrdOrdenTrabajoOperacion */ 	
	public function getCantidadPrdOrdenTrabajoCiclosXPrdOrdenTrabajoOperacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrdOrdenTrabajoCiclo::GEN_ATTR_ID);
            if($estado){
                $c->add(PrdOrdenTrabajoCiclo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdOrdenTrabajoOperacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdOrdenTrabajoOperacion::GEN_ATTR_PRD_PARAM_OPERACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdOrdenTrabajoCiclo::GEN_TABLA);
            $c->addRealJoin(PrdOrdenTrabajoOperacion::GEN_TABLA, PrdOrdenTrabajoOperacion::GEN_ATTR_PRD_ORDEN_TRABAJO_CICLO_ID, PrdOrdenTrabajoCiclo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrdOrdenTrabajoCiclo::getPrdOrdenTrabajoCiclos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrdOrdenTrabajoCiclo (Objeto) relacionado a traves de PrdOrdenTrabajoOperacion */ 	
	public function getPrdOrdenTrabajoCicloXPrdOrdenTrabajoOperacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrdOrdenTrabajoCiclosXPrdOrdenTrabajoOperacion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPrdParamOperacionPrdEquipos */ 	
	public function getPrdParamOperacionPrdEquipos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrdParamOperacionPrdEquipo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrdParamOperacionPrdEquipo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrdParamOperacionPrdEquipo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PrdParamOperacionPrdEquipo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrdParamOperacionPrdEquipo::GEN_ATTR_PRD_PARAM_OPERACION_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrdParamOperacionPrdEquipo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrdParamOperacionPrdEquipo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrdParamOperacionPrdEquipo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prdparamoperacionprdequipos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prdparamoperacionprdequipo = PrdParamOperacionPrdEquipo::hidratarObjeto($fila);			
                $prdparamoperacionprdequipos[] = $prdparamoperacionprdequipo;
            }

            return $prdparamoperacionprdequipos;
	}	
	

	/* Método getPrdParamOperacionPrdEquiposBloque para MasInfo */ 	
	public function getPrdParamOperacionPrdEquiposParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrdParamOperacionPrdEquipos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrdParamOperacionPrdEquipos Habilitados */ 	
	public function getPrdParamOperacionPrdEquiposHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrdParamOperacionPrdEquipos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrdParamOperacionPrdEquipo */ 	
	public function getPrdParamOperacionPrdEquipo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrdParamOperacionPrdEquipos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrdParamOperacionPrdEquipo relacionadas */ 	
	public function deletePrdParamOperacionPrdEquipos(){
            $obs = $this->getPrdParamOperacionPrdEquipos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrdParamOperacionPrdEquiposCmb() PrdParamOperacionPrdEquipo relacionadas */ 	
	public function getPrdParamOperacionPrdEquiposCmb(){
            $c = new Criterio();
            $c->add(PrdParamOperacionPrdEquipo::GEN_ATTR_PRD_PARAM_OPERACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdParamOperacionPrdEquipo::GEN_TABLA);
            $c->setCriterios();

            $os = PrdParamOperacionPrdEquipo::getPrdParamOperacionPrdEquiposCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrdEquipos (Coleccion) relacionados a traves de PrdParamOperacionPrdEquipo */ 	
	public function getPrdEquiposXPrdParamOperacionPrdEquipo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrdEquipo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdParamOperacionPrdEquipo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdParamOperacionPrdEquipo::GEN_ATTR_PRD_PARAM_OPERACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdEquipo::GEN_TABLA);
            $c->addRealJoin(PrdParamOperacionPrdEquipo::GEN_TABLA, PrdParamOperacionPrdEquipo::GEN_ATTR_PRD_EQUIPO_ID, PrdEquipo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrdEquipo::getPrdEquipos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrdEquipos relacionados a traves de PrdParamOperacionPrdEquipo */ 	
	public function getCantidadPrdEquiposXPrdParamOperacionPrdEquipo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrdEquipo::GEN_ATTR_ID);
            if($estado){
                $c->add(PrdEquipo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdParamOperacionPrdEquipo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdParamOperacionPrdEquipo::GEN_ATTR_PRD_PARAM_OPERACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdEquipo::GEN_TABLA);
            $c->addRealJoin(PrdParamOperacionPrdEquipo::GEN_TABLA, PrdParamOperacionPrdEquipo::GEN_ATTR_PRD_EQUIPO_ID, PrdEquipo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrdEquipo::getPrdEquipos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrdEquipo (Objeto) relacionado a traves de PrdParamOperacionPrdEquipo */ 	
	public function getPrdEquipoXPrdParamOperacionPrdEquipo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrdEquiposXPrdParamOperacionPrdEquipo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPrdParamOperacionOpeOperarios */ 	
	public function getPrdParamOperacionOpeOperarios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrdParamOperacionOpeOperario::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrdParamOperacionOpeOperario::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrdParamOperacionOpeOperario::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PrdParamOperacionOpeOperario::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrdParamOperacionOpeOperario::GEN_ATTR_PRD_PARAM_OPERACION_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrdParamOperacionOpeOperario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrdParamOperacionOpeOperario::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrdParamOperacionOpeOperario::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prdparamoperacionopeoperarios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prdparamoperacionopeoperario = PrdParamOperacionOpeOperario::hidratarObjeto($fila);			
                $prdparamoperacionopeoperarios[] = $prdparamoperacionopeoperario;
            }

            return $prdparamoperacionopeoperarios;
	}	
	

	/* Método getPrdParamOperacionOpeOperariosBloque para MasInfo */ 	
	public function getPrdParamOperacionOpeOperariosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrdParamOperacionOpeOperarios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrdParamOperacionOpeOperarios Habilitados */ 	
	public function getPrdParamOperacionOpeOperariosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrdParamOperacionOpeOperarios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrdParamOperacionOpeOperario */ 	
	public function getPrdParamOperacionOpeOperario($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrdParamOperacionOpeOperarios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrdParamOperacionOpeOperario relacionadas */ 	
	public function deletePrdParamOperacionOpeOperarios(){
            $obs = $this->getPrdParamOperacionOpeOperarios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrdParamOperacionOpeOperariosCmb() PrdParamOperacionOpeOperario relacionadas */ 	
	public function getPrdParamOperacionOpeOperariosCmb(){
            $c = new Criterio();
            $c->add(PrdParamOperacionOpeOperario::GEN_ATTR_PRD_PARAM_OPERACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdParamOperacionOpeOperario::GEN_TABLA);
            $c->setCriterios();

            $os = PrdParamOperacionOpeOperario::getPrdParamOperacionOpeOperariosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener OpeOperarios (Coleccion) relacionados a traves de PrdParamOperacionOpeOperario */ 	
	public function getOpeOperariosXPrdParamOperacionOpeOperario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(OpeOperario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdParamOperacionOpeOperario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdParamOperacionOpeOperario::GEN_ATTR_PRD_PARAM_OPERACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(OpeOperario::GEN_TABLA);
            $c->addRealJoin(PrdParamOperacionOpeOperario::GEN_TABLA, PrdParamOperacionOpeOperario::GEN_ATTR_OPE_OPERARIO_ID, OpeOperario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = OpeOperario::getOpeOperarios($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de OpeOperarios relacionados a traves de PrdParamOperacionOpeOperario */ 	
	public function getCantidadOpeOperariosXPrdParamOperacionOpeOperario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(OpeOperario::GEN_ATTR_ID);
            if($estado){
                $c->add(OpeOperario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdParamOperacionOpeOperario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdParamOperacionOpeOperario::GEN_ATTR_PRD_PARAM_OPERACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(OpeOperario::GEN_TABLA);
            $c->addRealJoin(PrdParamOperacionOpeOperario::GEN_TABLA, PrdParamOperacionOpeOperario::GEN_ATTR_OPE_OPERARIO_ID, OpeOperario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = OpeOperario::getOpeOperarios($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener OpeOperario (Objeto) relacionado a traves de PrdParamOperacionOpeOperario */ 	
	public function getOpeOperarioXPrdParamOperacionOpeOperario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getOpeOperariosXPrdParamOperacionOpeOperario($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPrdLineaProduccionPrdParamOperacionPrdEquipos */ 	
	public function getPrdLineaProduccionPrdParamOperacionPrdEquipos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrdLineaProduccionPrdParamOperacionPrdEquipo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrdLineaProduccionPrdParamOperacionPrdEquipo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrdLineaProduccionPrdParamOperacionPrdEquipo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PrdLineaProduccionPrdParamOperacionPrdEquipo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrdLineaProduccionPrdParamOperacionPrdEquipo::GEN_ATTR_PRD_PARAM_OPERACION_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrdLineaProduccionPrdParamOperacionPrdEquipo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrdLineaProduccionPrdParamOperacionPrdEquipo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrdLineaProduccionPrdParamOperacionPrdEquipo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prdlineaproduccionprdparamoperacionprdequipos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prdlineaproduccionprdparamoperacionprdequipo = PrdLineaProduccionPrdParamOperacionPrdEquipo::hidratarObjeto($fila);			
                $prdlineaproduccionprdparamoperacionprdequipos[] = $prdlineaproduccionprdparamoperacionprdequipo;
            }

            return $prdlineaproduccionprdparamoperacionprdequipos;
	}	
	

	/* Método getPrdLineaProduccionPrdParamOperacionPrdEquiposBloque para MasInfo */ 	
	public function getPrdLineaProduccionPrdParamOperacionPrdEquiposParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrdLineaProduccionPrdParamOperacionPrdEquipos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrdLineaProduccionPrdParamOperacionPrdEquipos Habilitados */ 	
	public function getPrdLineaProduccionPrdParamOperacionPrdEquiposHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrdLineaProduccionPrdParamOperacionPrdEquipos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrdLineaProduccionPrdParamOperacionPrdEquipo */ 	
	public function getPrdLineaProduccionPrdParamOperacionPrdEquipo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrdLineaProduccionPrdParamOperacionPrdEquipos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrdLineaProduccionPrdParamOperacionPrdEquipo relacionadas */ 	
	public function deletePrdLineaProduccionPrdParamOperacionPrdEquipos(){
            $obs = $this->getPrdLineaProduccionPrdParamOperacionPrdEquipos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrdLineaProduccionPrdParamOperacionPrdEquiposCmb() PrdLineaProduccionPrdParamOperacionPrdEquipo relacionadas */ 	
	public function getPrdLineaProduccionPrdParamOperacionPrdEquiposCmb(){
            $c = new Criterio();
            $c->add(PrdLineaProduccionPrdParamOperacionPrdEquipo::GEN_ATTR_PRD_PARAM_OPERACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdLineaProduccionPrdParamOperacionPrdEquipo::GEN_TABLA);
            $c->setCriterios();

            $os = PrdLineaProduccionPrdParamOperacionPrdEquipo::getPrdLineaProduccionPrdParamOperacionPrdEquiposCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrdLineaProduccions (Coleccion) relacionados a traves de PrdLineaProduccionPrdParamOperacionPrdEquipo */ 	
	public function getPrdLineaProduccionsXPrdLineaProduccionPrdParamOperacionPrdEquipo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrdLineaProduccion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdLineaProduccionPrdParamOperacionPrdEquipo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdLineaProduccionPrdParamOperacionPrdEquipo::GEN_ATTR_PRD_PARAM_OPERACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdLineaProduccion::GEN_TABLA);
            $c->addRealJoin(PrdLineaProduccionPrdParamOperacionPrdEquipo::GEN_TABLA, PrdLineaProduccionPrdParamOperacionPrdEquipo::GEN_ATTR_PRD_LINEA_PRODUCCION_ID, PrdLineaProduccion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrdLineaProduccion::getPrdLineaProduccions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrdLineaProduccions relacionados a traves de PrdLineaProduccionPrdParamOperacionPrdEquipo */ 	
	public function getCantidadPrdLineaProduccionsXPrdLineaProduccionPrdParamOperacionPrdEquipo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrdLineaProduccion::GEN_ATTR_ID);
            if($estado){
                $c->add(PrdLineaProduccion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdLineaProduccionPrdParamOperacionPrdEquipo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdLineaProduccionPrdParamOperacionPrdEquipo::GEN_ATTR_PRD_PARAM_OPERACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdLineaProduccion::GEN_TABLA);
            $c->addRealJoin(PrdLineaProduccionPrdParamOperacionPrdEquipo::GEN_TABLA, PrdLineaProduccionPrdParamOperacionPrdEquipo::GEN_ATTR_PRD_LINEA_PRODUCCION_ID, PrdLineaProduccion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrdLineaProduccion::getPrdLineaProduccions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrdLineaProduccion (Objeto) relacionado a traves de PrdLineaProduccionPrdParamOperacionPrdEquipo */ 	
	public function getPrdLineaProduccionXPrdLineaProduccionPrdParamOperacionPrdEquipo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrdLineaProduccionsXPrdLineaProduccionPrdParamOperacionPrdEquipo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los PrdEquipos asignados a PrdParamOperacion */ 	
	public function getPrdParamOperacionPrdEquiposId(){
            $ids = array();
            foreach($this->getPrdParamOperacionPrdEquipos() as $o){
            
                $ids[] = $o->getPrdEquipoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos PrdEquipos asignados al PrdParamOperacion */ 	
	public function setPrdParamOperacionPrdEquipos($ids){
            $this->deletePrdParamOperacionPrdEquipos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new PrdParamOperacionPrdEquipo();
                    $o->setPrdEquipoId($id);
                    $o->setPrdParamOperacionId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion PrdEquipo en el alta de PrdParamOperacion */ 	
	public function getAltaMostrarBloqueRelacionPrdParamOperacionPrdEquipo(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los OpeOperarios asignados a PrdParamOperacion */ 	
	public function getPrdParamOperacionOpeOperariosId(){
            $ids = array();
            foreach($this->getPrdParamOperacionOpeOperarios() as $o){
            
                $ids[] = $o->getOpeOperarioId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos OpeOperarios asignados al PrdParamOperacion */ 	
	public function setPrdParamOperacionOpeOperarios($ids){
            $this->deletePrdParamOperacionOpeOperarios();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new PrdParamOperacionOpeOperario();
                    $o->setOpeOperarioId($id);
                    $o->setPrdParamOperacionId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion OpeOperario en el alta de PrdParamOperacion */ 	
	public function getAltaMostrarBloqueRelacionPrdParamOperacionOpeOperario(){
            return true;
	}
	

	/* Metodo que retorna el PrdParamTipoOperacion (Clave Foranea) */ 	
    public function getPrdParamTipoOperacion(){
        $o = new PrdParamTipoOperacion();
        $o->setId($this->getPrdParamTipoOperacionId());
        return $o;			
    }

	/* Metodo que retorna el PrdParamTipoOperacion (Clave Foranea) en Array */ 	
    public function getPrdParamTipoOperacionEnArray(&$arr_os){
        if($this->getPrdParamTipoOperacionId() != 'null'){
            if(isset($arr_os[$this->getPrdParamTipoOperacionId()])){
                $o = $arr_os[$this->getPrdParamTipoOperacionId()];
            }else{
                $o = PrdParamTipoOperacion::getOxId($this->getPrdParamTipoOperacionId());
                if($o){
                    $arr_os[$this->getPrdParamTipoOperacionId()] = $o;
                }
            }
        }else{
            $o = new PrdParamTipoOperacion();
        }
        return $o;		
    }

	/* Metodo que retorna el PrdProcesoProductivo (Clave Foranea) */ 	
    public function getPrdProcesoProductivo(){
        $o = new PrdProcesoProductivo();
        $o->setId($this->getPrdProcesoProductivoId());
        return $o;			
    }

	/* Metodo que retorna el PrdProcesoProductivo (Clave Foranea) en Array */ 	
    public function getPrdProcesoProductivoEnArray(&$arr_os){
        if($this->getPrdProcesoProductivoId() != 'null'){
            if(isset($arr_os[$this->getPrdProcesoProductivoId()])){
                $o = $arr_os[$this->getPrdProcesoProductivoId()];
            }else{
                $o = PrdProcesoProductivo::getOxId($this->getPrdProcesoProductivoId());
                if($o){
                    $arr_os[$this->getPrdProcesoProductivoId()] = $o;
                }
            }
        }else{
            $o = new PrdProcesoProductivo();
        }
        return $o;		
    }

	/* Metodo que retorna el PrdLineaProduccion (Clave Foranea) */ 	
    public function getPrdLineaProduccion(){
        $o = new PrdLineaProduccion();
        $o->setId($this->getPrdLineaProduccionId());
        return $o;			
    }

	/* Metodo que retorna el PrdLineaProduccion (Clave Foranea) en Array */ 	
    public function getPrdLineaProduccionEnArray(&$arr_os){
        if($this->getPrdLineaProduccionId() != 'null'){
            if(isset($arr_os[$this->getPrdLineaProduccionId()])){
                $o = $arr_os[$this->getPrdLineaProduccionId()];
            }else{
                $o = PrdLineaProduccion::getOxId($this->getPrdLineaProduccionId());
                if($o){
                    $arr_os[$this->getPrdLineaProduccionId()] = $o;
                }
            }
        }else{
            $o = new PrdLineaProduccion();
        }
        return $o;		
    }

	/* Metodo que retorna el PrdEquipo (Clave Foranea) */ 	
    public function getPrdEquipo(){
        $o = new PrdEquipo();
        $o->setId($this->getPrdEquipoId());
        return $o;			
    }

	/* Metodo que retorna el PrdEquipo (Clave Foranea) en Array */ 	
    public function getPrdEquipoEnArray(&$arr_os){
        if($this->getPrdEquipoId() != 'null'){
            if(isset($arr_os[$this->getPrdEquipoId()])){
                $o = $arr_os[$this->getPrdEquipoId()];
            }else{
                $o = PrdEquipo::getOxId($this->getPrdEquipoId());
                if($o){
                    $arr_os[$this->getPrdEquipoId()] = $o;
                }
            }
        }else{
            $o = new PrdEquipo();
        }
        return $o;		
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
            		
        if($contexto_solicitante != PrdParamTipoOperacion::GEN_CLASE){
            if($this->getPrdParamTipoOperacion()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PrdParamTipoOperacion::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPrdParamTipoOperacion()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PrdProcesoProductivo::GEN_CLASE){
            if($this->getPrdProcesoProductivo()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PrdProcesoProductivo::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPrdProcesoProductivo()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PrdLineaProduccion::GEN_CLASE){
            if($this->getPrdLineaProduccion()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PrdLineaProduccion::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPrdLineaProduccion()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PrdEquipo::GEN_CLASE){
            if($this->getPrdEquipo()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PrdEquipo::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPrdEquipo()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM prd_param_operacion'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'prd_param_operacion';");
            
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

            $obs = self::getPrdParamOperacions($paginador, $criterio);
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

            $obs = self::getPrdParamOperacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdParamOperacions($paginador, $criterio);
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

            $obs = self::getPrdParamOperacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion_corta' */ 	
	static function getOxDescripcionCorta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION_CORTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdParamOperacions($paginador, $criterio);
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

            $obs = self::getPrdParamOperacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prd_param_tipo_operacion_id' */ 	
	static function getOxPrdParamTipoOperacionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRD_PARAM_TIPO_OPERACION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdParamOperacions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'prd_param_tipo_operacion_id' */ 	
	static function getOsxPrdParamTipoOperacionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRD_PARAM_TIPO_OPERACION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrdParamOperacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero' */ 	
	static function getOxNumero($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdParamOperacions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'numero' */ 	
	static function getOsxNumero($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrdParamOperacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prd_proceso_productivo_id' */ 	
	static function getOxPrdProcesoProductivoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRD_PROCESO_PRODUCTIVO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdParamOperacions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'prd_proceso_productivo_id' */ 	
	static function getOsxPrdProcesoProductivoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRD_PROCESO_PRODUCTIVO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrdParamOperacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prd_linea_produccion_id' */ 	
	static function getOxPrdLineaProduccionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRD_LINEA_PRODUCCION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdParamOperacions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'prd_linea_produccion_id' */ 	
	static function getOsxPrdLineaProduccionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRD_LINEA_PRODUCCION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrdParamOperacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prd_equipo_id' */ 	
	static function getOxPrdEquipoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRD_EQUIPO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdParamOperacions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'prd_equipo_id' */ 	
	static function getOsxPrdEquipoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRD_EQUIPO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrdParamOperacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cantidad_operarios' */ 	
	static function getOxCantidadOperarios($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD_OPERARIOS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdParamOperacions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cantidad_operarios' */ 	
	static function getOsxCantidadOperarios($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD_OPERARIOS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrdParamOperacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cantidad_equipos' */ 	
	static function getOxCantidadEquipos($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD_EQUIPOS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdParamOperacions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cantidad_equipos' */ 	
	static function getOsxCantidadEquipos($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD_EQUIPOS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrdParamOperacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdParamOperacions($paginador, $criterio);
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

            $obs = self::getPrdParamOperacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdParamOperacions($paginador, $criterio);
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

            $obs = self::getPrdParamOperacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdParamOperacions($paginador, $criterio);
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

            $obs = self::getPrdParamOperacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdParamOperacions($paginador, $criterio);
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

            $obs = self::getPrdParamOperacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdParamOperacions($paginador, $criterio);
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

            $obs = self::getPrdParamOperacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdParamOperacions($paginador, $criterio);
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

            $obs = self::getPrdParamOperacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdParamOperacions($paginador, $criterio);
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

            $obs = self::getPrdParamOperacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdParamOperacions($paginador, $criterio);
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

            $obs = self::getPrdParamOperacions(null, $criterio);
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

            $obs = self::getPrdParamOperacions($paginador, $criterio);
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

            $obs = self::getPrdParamOperacions($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'prd_param_operacion_adm');
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
                $c->addTabla(PrdParamOperacion::GEN_TABLA);
                $c->addOrden(PrdParamOperacion::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $prd_param_operacions = PrdParamOperacion::getPrdParamOperacions(null, $c);

                $arr = array();
                foreach($prd_param_operacions as $prd_param_operacion){
                    $descripcion = $prd_param_operacion->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>