<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BEkuDe
{ 
	
	const SES_PAGINACION = 'adm_ekude_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_ekude_paginas_registros';
	const SES_CRITERIOS = 'adm_ekude_criterios';
	
	const GEN_CLASE = 'EkuDe';
	const GEN_TABLA = 'eku_de';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BEkuDe */ 
	const GEN_ATTR_ID = 'eku_de.id';
	const GEN_ATTR_DESCRIPCION = 'eku_de.descripcion';
	const GEN_ATTR_EKU_DE_OPE_TIPO_ESTADO_ID = 'eku_de.eku_de_ope_tipo_estado_id';
	const GEN_ATTR_EKU_DVERFOR = 'eku_de.eku_dverfor';
	const GEN_ATTR_EKU_A002_ID_CDC = 'eku_de.eku_a002_id_cdc';
	const GEN_ATTR_EKU_A003_DDVID = 'eku_de.eku_a003_ddvid';
	const GEN_ATTR_EKU_A004_DFECFIRMA = 'eku_de.eku_a004_dfecfirma';
	const GEN_ATTR_EKU_A005_DSISFACT = 'eku_de.eku_a005_dsisfact';
	const GEN_ATTR_EKU_DE_XML = 'eku_de.eku_de_xml';
	const GEN_ATTR_EKU_PP02_ID_CDC = 'eku_de.eku_pp02_id_cdc';
	const GEN_ATTR_EKU_PP03_DDECPROC = 'eku_de.eku_pp03_ddecproc';
	const GEN_ATTR_EKU_PP04_DDIGVAL = 'eku_de.eku_pp04_ddigval';
	const GEN_ATTR_EKU_PP050_DESTRES = 'eku_de.eku_pp050_destres';
	const GEN_ATTR_EKU_PP051_DPROTAUT = 'eku_de.eku_pp051_dprotaut';
	const GEN_ATTR_CODIGO = 'eku_de.codigo';
	const GEN_ATTR_OBSERVACION = 'eku_de.observacion';
	const GEN_ATTR_ORDEN = 'eku_de.orden';
	const GEN_ATTR_ESTADO = 'eku_de.estado';
	const GEN_ATTR_CREADO = 'eku_de.creado';
	const GEN_ATTR_CREADO_POR = 'eku_de.creado_por';
	const GEN_ATTR_MODIFICADO = 'eku_de.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'eku_de.modificado_por';

	/* Constantes de Atributos Min de BEkuDe */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_EKU_DE_OPE_TIPO_ESTADO_ID = 'eku_de_ope_tipo_estado_id';
	const GEN_ATTR_MIN_EKU_DVERFOR = 'eku_dverfor';
	const GEN_ATTR_MIN_EKU_A002_ID_CDC = 'eku_a002_id_cdc';
	const GEN_ATTR_MIN_EKU_A003_DDVID = 'eku_a003_ddvid';
	const GEN_ATTR_MIN_EKU_A004_DFECFIRMA = 'eku_a004_dfecfirma';
	const GEN_ATTR_MIN_EKU_A005_DSISFACT = 'eku_a005_dsisfact';
	const GEN_ATTR_MIN_EKU_DE_XML = 'eku_de_xml';
	const GEN_ATTR_MIN_EKU_PP02_ID_CDC = 'eku_pp02_id_cdc';
	const GEN_ATTR_MIN_EKU_PP03_DDECPROC = 'eku_pp03_ddecproc';
	const GEN_ATTR_MIN_EKU_PP04_DDIGVAL = 'eku_pp04_ddigval';
	const GEN_ATTR_MIN_EKU_PP050_DESTRES = 'eku_pp050_destres';
	const GEN_ATTR_MIN_EKU_PP051_DPROTAUT = 'eku_pp051_dprotaut';
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
	

	/* Atributos de BEkuDe */ 
	private $id;
	private $descripcion;
	private $eku_de_ope_tipo_estado_id;
	private $eku_dverfor;
	private $eku_a002_id_cdc;
	private $eku_a003_ddvid;
	private $eku_a004_dfecfirma;
	private $eku_a005_dsisfact;
	private $eku_de_xml;
	private $eku_pp02_id_cdc;
	private $eku_pp03_ddecproc;
	private $eku_pp04_ddigval;
	private $eku_pp050_destres;
	private $eku_pp051_dprotaut;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BEkuDe */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getEkuDeOpeTipoEstadoId(){ if(isset($this->eku_de_ope_tipo_estado_id)){ return $this->eku_de_ope_tipo_estado_id; }else{ return 'null'; } }
	public function getEkuDverfor(){ if(isset($this->eku_dverfor)){ return $this->eku_dverfor; }else{ return ''; } }
	public function getEkuA002IdCdc(){ if(isset($this->eku_a002_id_cdc)){ return $this->eku_a002_id_cdc; }else{ return ''; } }
	public function getEkuA003Ddvid(){ if(isset($this->eku_a003_ddvid)){ return $this->eku_a003_ddvid; }else{ return ''; } }
	public function getEkuA004Dfecfirma(){ if(isset($this->eku_a004_dfecfirma)){ return $this->eku_a004_dfecfirma; }else{ return ''; } }
	public function getEkuA005Dsisfact(){ if(isset($this->eku_a005_dsisfact)){ return $this->eku_a005_dsisfact; }else{ return ''; } }
	public function getEkuDeXml(){ if(isset($this->eku_de_xml)){ return $this->eku_de_xml; }else{ return ''; } }
	public function getEkuPp02IdCdc(){ if(isset($this->eku_pp02_id_cdc)){ return $this->eku_pp02_id_cdc; }else{ return ''; } }
	public function getEkuPp03Ddecproc(){ if(isset($this->eku_pp03_ddecproc)){ return $this->eku_pp03_ddecproc; }else{ return ''; } }
	public function getEkuPp04Ddigval(){ if(isset($this->eku_pp04_ddigval)){ return $this->eku_pp04_ddigval; }else{ return ''; } }
	public function getEkuPp050Destres(){ if(isset($this->eku_pp050_destres)){ return $this->eku_pp050_destres; }else{ return ''; } }
	public function getEkuPp051Dprotaut(){ if(isset($this->eku_pp051_dprotaut)){ return $this->eku_pp051_dprotaut; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BEkuDe */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_EKU_DE_OPE_TIPO_ESTADO_ID."
				, ".self::GEN_ATTR_EKU_DVERFOR."
				, ".self::GEN_ATTR_EKU_A002_ID_CDC."
				, ".self::GEN_ATTR_EKU_A003_DDVID."
				, ".self::GEN_ATTR_EKU_A004_DFECFIRMA."
				, ".self::GEN_ATTR_EKU_A005_DSISFACT."
				, ".self::GEN_ATTR_EKU_DE_XML."
				, ".self::GEN_ATTR_EKU_PP02_ID_CDC."
				, ".self::GEN_ATTR_EKU_PP03_DDECPROC."
				, ".self::GEN_ATTR_EKU_PP04_DDIGVAL."
				, ".self::GEN_ATTR_EKU_PP050_DESTRES."
				, ".self::GEN_ATTR_EKU_PP051_DPROTAUT."
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
				$this->setEkuDeOpeTipoEstadoId($fila[self::GEN_ATTR_MIN_EKU_DE_OPE_TIPO_ESTADO_ID]);
				$this->setEkuDverfor($fila[self::GEN_ATTR_MIN_EKU_DVERFOR]);
				$this->setEkuA002IdCdc($fila[self::GEN_ATTR_MIN_EKU_A002_ID_CDC]);
				$this->setEkuA003Ddvid($fila[self::GEN_ATTR_MIN_EKU_A003_DDVID]);
				$this->setEkuA004Dfecfirma($fila[self::GEN_ATTR_MIN_EKU_A004_DFECFIRMA]);
				$this->setEkuA005Dsisfact($fila[self::GEN_ATTR_MIN_EKU_A005_DSISFACT]);
				$this->setEkuDeXml($fila[self::GEN_ATTR_MIN_EKU_DE_XML]);
				$this->setEkuPp02IdCdc($fila[self::GEN_ATTR_MIN_EKU_PP02_ID_CDC]);
				$this->setEkuPp03Ddecproc($fila[self::GEN_ATTR_MIN_EKU_PP03_DDECPROC]);
				$this->setEkuPp04Ddigval($fila[self::GEN_ATTR_MIN_EKU_PP04_DDIGVAL]);
				$this->setEkuPp050Destres($fila[self::GEN_ATTR_MIN_EKU_PP050_DESTRES]);
				$this->setEkuPp051Dprotaut($fila[self::GEN_ATTR_MIN_EKU_PP051_DPROTAUT]);
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
	public function setEkuDeOpeTipoEstadoId($v){ $this->eku_de_ope_tipo_estado_id = $v; }
	public function setEkuDverfor($v){ $this->eku_dverfor = $v; }
	public function setEkuA002IdCdc($v){ $this->eku_a002_id_cdc = $v; }
	public function setEkuA003Ddvid($v){ $this->eku_a003_ddvid = $v; }
	public function setEkuA004Dfecfirma($v){ $this->eku_a004_dfecfirma = $v; }
	public function setEkuA005Dsisfact($v){ $this->eku_a005_dsisfact = $v; }
	public function setEkuDeXml($v){ $this->eku_de_xml = $v; }
	public function setEkuPp02IdCdc($v){ $this->eku_pp02_id_cdc = $v; }
	public function setEkuPp03Ddecproc($v){ $this->eku_pp03_ddecproc = $v; }
	public function setEkuPp04Ddigval($v){ $this->eku_pp04_ddigval = $v; }
	public function setEkuPp050Destres($v){ $this->eku_pp050_destres = $v; }
	public function setEkuPp051Dprotaut($v){ $this->eku_pp051_dprotaut = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new EkuDe();
            $o->setId($fila[EkuDe::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setEkuDeOpeTipoEstadoId($fila[self::GEN_ATTR_MIN_EKU_DE_OPE_TIPO_ESTADO_ID]);
			$o->setEkuDverfor($fila[self::GEN_ATTR_MIN_EKU_DVERFOR]);
			$o->setEkuA002IdCdc($fila[self::GEN_ATTR_MIN_EKU_A002_ID_CDC]);
			$o->setEkuA003Ddvid($fila[self::GEN_ATTR_MIN_EKU_A003_DDVID]);
			$o->setEkuA004Dfecfirma($fila[self::GEN_ATTR_MIN_EKU_A004_DFECFIRMA]);
			$o->setEkuA005Dsisfact($fila[self::GEN_ATTR_MIN_EKU_A005_DSISFACT]);
			$o->setEkuDeXml($fila[self::GEN_ATTR_MIN_EKU_DE_XML]);
			$o->setEkuPp02IdCdc($fila[self::GEN_ATTR_MIN_EKU_PP02_ID_CDC]);
			$o->setEkuPp03Ddecproc($fila[self::GEN_ATTR_MIN_EKU_PP03_DDECPROC]);
			$o->setEkuPp04Ddigval($fila[self::GEN_ATTR_MIN_EKU_PP04_DDIGVAL]);
			$o->setEkuPp050Destres($fila[self::GEN_ATTR_MIN_EKU_PP050_DESTRES]);
			$o->setEkuPp051Dprotaut($fila[self::GEN_ATTR_MIN_EKU_PP051_DPROTAUT]);
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

	/* Control de BEkuDe */ 	
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

	/* Cambia el estado de BEkuDe */ 	
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

	/* Save de BEkuDe */ 	
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
						, ".self::GEN_ATTR_MIN_EKU_DE_OPE_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_EKU_DVERFOR."
						, ".self::GEN_ATTR_MIN_EKU_A002_ID_CDC."
						, ".self::GEN_ATTR_MIN_EKU_A003_DDVID."
						, ".self::GEN_ATTR_MIN_EKU_A004_DFECFIRMA."
						, ".self::GEN_ATTR_MIN_EKU_A005_DSISFACT."
						, ".self::GEN_ATTR_MIN_EKU_DE_XML."
						, ".self::GEN_ATTR_MIN_EKU_PP02_ID_CDC."
						, ".self::GEN_ATTR_MIN_EKU_PP03_DDECPROC."
						, ".self::GEN_ATTR_MIN_EKU_PP04_DDIGVAL."
						, ".self::GEN_ATTR_MIN_EKU_PP050_DESTRES."
						, ".self::GEN_ATTR_MIN_EKU_PP051_DPROTAUT."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('eku_de_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getEkuDeOpeTipoEstadoId()."
						, '".$this->getEkuDverfor()."'
						, '".$this->getEkuA002IdCdc()."'
						, '".$this->getEkuA003Ddvid()."'
						, '".$this->getEkuA004Dfecfirma()."'
						, '".$this->getEkuA005Dsisfact()."'
						, '".$this->getEkuDeXml()."'
						, '".$this->getEkuPp02IdCdc()."'
						, '".$this->getEkuPp03Ddecproc()."'
						, '".$this->getEkuPp04Ddigval()."'
						, '".$this->getEkuPp050Destres()."'
						, '".$this->getEkuPp051Dprotaut()."'
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('eku_de_seq')";
            
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
                 
				 ".EkuDe::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_EKU_DE_OPE_TIPO_ESTADO_ID." = ".$this->getEkuDeOpeTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_EKU_DVERFOR." = '".$this->getEkuDverfor()."'
						, ".self::GEN_ATTR_MIN_EKU_A002_ID_CDC." = '".$this->getEkuA002IdCdc()."'
						, ".self::GEN_ATTR_MIN_EKU_A003_DDVID." = '".$this->getEkuA003Ddvid()."'
						, ".self::GEN_ATTR_MIN_EKU_A004_DFECFIRMA." = '".$this->getEkuA004Dfecfirma()."'
						, ".self::GEN_ATTR_MIN_EKU_A005_DSISFACT." = '".$this->getEkuA005Dsisfact()."'
						, ".self::GEN_ATTR_MIN_EKU_DE_XML." = '".$this->getEkuDeXml()."'
						, ".self::GEN_ATTR_MIN_EKU_PP02_ID_CDC." = '".$this->getEkuPp02IdCdc()."'
						, ".self::GEN_ATTR_MIN_EKU_PP03_DDECPROC." = '".$this->getEkuPp03Ddecproc()."'
						, ".self::GEN_ATTR_MIN_EKU_PP04_DDIGVAL." = '".$this->getEkuPp04Ddigval()."'
						, ".self::GEN_ATTR_MIN_EKU_PP050_DESTRES." = '".$this->getEkuPp050Destres()."'
						, ".self::GEN_ATTR_MIN_EKU_PP051_DPROTAUT." = '".$this->getEkuPp051Dprotaut()."'
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
						, ".self::GEN_ATTR_MIN_EKU_DE_OPE_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_EKU_DVERFOR."
						, ".self::GEN_ATTR_MIN_EKU_A002_ID_CDC."
						, ".self::GEN_ATTR_MIN_EKU_A003_DDVID."
						, ".self::GEN_ATTR_MIN_EKU_A004_DFECFIRMA."
						, ".self::GEN_ATTR_MIN_EKU_A005_DSISFACT."
						, ".self::GEN_ATTR_MIN_EKU_DE_XML."
						, ".self::GEN_ATTR_MIN_EKU_PP02_ID_CDC."
						, ".self::GEN_ATTR_MIN_EKU_PP03_DDECPROC."
						, ".self::GEN_ATTR_MIN_EKU_PP04_DDIGVAL."
						, ".self::GEN_ATTR_MIN_EKU_PP050_DESTRES."
						, ".self::GEN_ATTR_MIN_EKU_PP051_DPROTAUT."
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
						, ".$this->getEkuDeOpeTipoEstadoId()."
						, '".$this->getEkuDverfor()."'
						, '".$this->getEkuA002IdCdc()."'
						, '".$this->getEkuA003Ddvid()."'
						, '".$this->getEkuA004Dfecfirma()."'
						, '".$this->getEkuA005Dsisfact()."'
						, '".$this->getEkuDeXml()."'
						, '".$this->getEkuPp02IdCdc()."'
						, '".$this->getEkuPp03Ddecproc()."'
						, '".$this->getEkuPp04Ddigval()."'
						, '".$this->getEkuPp050Destres()."'
						, '".$this->getEkuPp051Dprotaut()."'
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
                     
				 ".EkuDe::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_EKU_DE_OPE_TIPO_ESTADO_ID." = ".$this->getEkuDeOpeTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_EKU_DVERFOR." = '".$this->getEkuDverfor()."'
						, ".self::GEN_ATTR_MIN_EKU_A002_ID_CDC." = '".$this->getEkuA002IdCdc()."'
						, ".self::GEN_ATTR_MIN_EKU_A003_DDVID." = '".$this->getEkuA003Ddvid()."'
						, ".self::GEN_ATTR_MIN_EKU_A004_DFECFIRMA." = '".$this->getEkuA004Dfecfirma()."'
						, ".self::GEN_ATTR_MIN_EKU_A005_DSISFACT." = '".$this->getEkuA005Dsisfact()."'
						, ".self::GEN_ATTR_MIN_EKU_DE_XML." = '".$this->getEkuDeXml()."'
						, ".self::GEN_ATTR_MIN_EKU_PP02_ID_CDC." = '".$this->getEkuPp02IdCdc()."'
						, ".self::GEN_ATTR_MIN_EKU_PP03_DDECPROC." = '".$this->getEkuPp03Ddecproc()."'
						, ".self::GEN_ATTR_MIN_EKU_PP04_DDIGVAL." = '".$this->getEkuPp04Ddigval()."'
						, ".self::GEN_ATTR_MIN_EKU_PP050_DESTRES." = '".$this->getEkuPp050Destres()."'
						, ".self::GEN_ATTR_MIN_EKU_PP051_DPROTAUT." = '".$this->getEkuPp051Dprotaut()."'
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
            $o = new EkuDe();
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

	/* Delete de BEkuDe */ 	
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
	
            // se elimina la coleccion de EkuDeB001GOpeDEs relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeB001GOpeDE::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeB001GOpeDEs(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeC001GTimbs relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeC001GTimb::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeC001GTimbs(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeD001GDatGralOpes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeD001GDatGralOpe::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeD001GDatGralOpes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeD010GDatGralOpeGOpeComs relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeD010GDatGralOpeGOpeCom::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeD010GDatGralOpeGOpeComs(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeD100GDatGralOpeGEmiss relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeD100GDatGralOpeGEmis::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeD100GDatGralOpeGEmiss(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeD130GDatGralOpeGEmisGActEcos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeD130GDatGralOpeGEmisGActEco::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeD130GDatGralOpeGEmisGActEcos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeD140GDatGralOpeGRespDEs relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeD140GDatGralOpeGRespDE::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeD140GDatGralOpeGRespDEs(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeD200GDatGralOpeGDatRecs relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeD200GDatGralOpeGDatRec::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeD200GDatGralOpeGDatRecs(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeE010GDtipDEGCamFEs relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeE010GDtipDEGCamFE::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeE010GDtipDEGCamFEs(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeE020GDtipDEGCompPubs relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeE020GDtipDEGCompPub::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeE020GDtipDEGCompPubs(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeE300GDtipDEGCamAEs relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeE300GDtipDEGCamAE::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeE300GDtipDEGCamAEs(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeE400GDtipDEGCamNCDEs relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeE400GDtipDEGCamNCDE::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeE400GDtipDEGCamNCDEs(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeE500GDtipDEGCamNREs relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeE500GDtipDEGCamNRE::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeE500GDtipDEGCamNREs(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeE600GDtipDEGCamConds relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeE600GDtipDEGCamCond::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeE600GDtipDEGCamConds(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeE605GDtipDEGCamCondGPaConEInis relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeE605GDtipDEGCamCondGPaConEIni::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeE605GDtipDEGCamCondGPaConEInis(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeE620GDtipDEGCamCondGPagTarCDs relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeE620GDtipDEGCamCondGPagTarCD::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeE620GDtipDEGCamCondGPagTarCDs(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeE630GDtipDEGCamCondGPagCheqs relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeE630GDtipDEGCamCondGPagCheq::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeE630GDtipDEGCamCondGPagCheqs(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeE640GDtipDEGCamCondGPagCreds relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeE640GDtipDEGCamCondGPagCred::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeE640GDtipDEGCamCondGPagCreds(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeE650GDtipDEGCamCondGPagCredGCuotass relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeE650GDtipDEGCamCondGPagCredGCuotas::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeE650GDtipDEGCamCondGPagCredGCuotass(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeE700GDtipDEGCamItems relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeE700GDtipDEGCamItem::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeE700GDtipDEGCamItems(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeE720GDtipDEGCamItemGValorItems relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeE720GDtipDEGCamItemGValorItem::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeE720GDtipDEGCamItemGValorItems(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeE730GDtipDEGCamItemGCamIVAs relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeE730GDtipDEGCamItemGCamIVA::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeE730GDtipDEGCamItemGCamIVAs(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeE750GDtipDEGCamItemGRasMercs relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeE750GDtipDEGCamItemGRasMerc::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeE750GDtipDEGCamItemGRasMercs(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeE770GDtipDEGCamItemGVehNuevos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeE770GDtipDEGCamItemGVehNuevo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeE770GDtipDEGCamItemGVehNuevos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeE791GCamEspGGrupEners relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeE791GCamEspGGrupEner::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeE791GCamEspGGrupEners(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeE800GCamEspGGrupSegs relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeE800GCamEspGGrupSeg::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeE800GCamEspGGrupSegs(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeEa790GCamEspGGrupSegGGrupPolSegs relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeEa790GCamEspGGrupSegGGrupPolSeg::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeEa790GCamEspGGrupSegGGrupPolSegs(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeE810GCamEspGGrupSups relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeE810GCamEspGGrupSup::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeE810GCamEspGGrupSups(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeE820GCamEspGGrupAdis relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeE820GCamEspGGrupAdi::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeE820GCamEspGGrupAdis(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeE900GDtipDEGTransps relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeE900GDtipDEGTransp::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeE900GDtipDEGTransps(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeE920GDtipDEGTranspGCamSals relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeE920GDtipDEGTranspGCamSal::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeE920GDtipDEGTranspGCamSals(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeE940GDtipDEGTranspGCamEnts relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeE940GDtipDEGTranspGCamEnt::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeE940GDtipDEGTranspGCamEnts(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeE960GDtipDEGTranspGVehTrass relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeE960GDtipDEGTranspGVehTras::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeE960GDtipDEGTranspGVehTrass(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeE980GDtipDEGTranspGCamTranss relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeE980GDtipDEGTranspGCamTrans::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeE980GDtipDEGTranspGCamTranss(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeF001GTotSubs relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeF001GTotSub::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeF001GTotSubs(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeG001GCamGens relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeG001GCamGen::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeG001GCamGens(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeG050GCamGenGCamCargs relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeG050GCamGenGCamCarg::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeG050GCamGenGCamCargs(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeH001GCamDEAsocs relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeH001GCamDEAsoc::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeH001GCamDEAsocs(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeI001Signatures relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeI001Signature::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeI001Signatures(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeJ001GCamFuFDs relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeJ001GCamFuFD::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeJ001GCamFuFDs(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeAsch01Reqs relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeAsch01Req::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeAsch01Reqs(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeArsch01Resps relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeArsch01Resp::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeArsch01Resps(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeArsch01RespMensajes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeArsch01RespMensaje::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeArsch01RespMensajes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeOpeEstados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeOpeEstado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeOpeEstados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeVtaFacturas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeVtaFactura::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeVtaFacturas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeVtaNotaCreditos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeVtaNotaCredito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeVtaNotaCreditos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeVtaNotaDebitos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeVtaNotaDebito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeVtaNotaDebitos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeVtaRemitos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeVtaRemito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeVtaRemitos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuEves relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuEve::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuEves(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuEveResps relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuEveResp::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuEveResps(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarEkuDe(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getEkuDes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = EkuDe::setAplicarFiltrosDeAlcance($criterio);

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
	
		$ekudes = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $ekude = new EkuDe();
                    $ekude->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $ekude->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$ekude->setEkuDeOpeTipoEstadoId($fila[self::GEN_ATTR_MIN_EKU_DE_OPE_TIPO_ESTADO_ID]);
			$ekude->setEkuDverfor($fila[self::GEN_ATTR_MIN_EKU_DVERFOR]);
			$ekude->setEkuA002IdCdc($fila[self::GEN_ATTR_MIN_EKU_A002_ID_CDC]);
			$ekude->setEkuA003Ddvid($fila[self::GEN_ATTR_MIN_EKU_A003_DDVID]);
			$ekude->setEkuA004Dfecfirma($fila[self::GEN_ATTR_MIN_EKU_A004_DFECFIRMA]);
			$ekude->setEkuA005Dsisfact($fila[self::GEN_ATTR_MIN_EKU_A005_DSISFACT]);
			$ekude->setEkuDeXml($fila[self::GEN_ATTR_MIN_EKU_DE_XML]);
			$ekude->setEkuPp02IdCdc($fila[self::GEN_ATTR_MIN_EKU_PP02_ID_CDC]);
			$ekude->setEkuPp03Ddecproc($fila[self::GEN_ATTR_MIN_EKU_PP03_DDECPROC]);
			$ekude->setEkuPp04Ddigval($fila[self::GEN_ATTR_MIN_EKU_PP04_DDIGVAL]);
			$ekude->setEkuPp050Destres($fila[self::GEN_ATTR_MIN_EKU_PP050_DESTRES]);
			$ekude->setEkuPp051Dprotaut($fila[self::GEN_ATTR_MIN_EKU_PP051_DPROTAUT]);
			$ekude->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$ekude->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$ekude->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$ekude->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$ekude->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$ekude->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$ekude->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$ekude->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $ekudes[] = $ekude;
		}
		
		return $ekudes;
	}	
	

	/* Método getEkuDes Habilitados */ 	
	static function getEkuDesHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return EkuDe::getEkuDes($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getEkuDes para listado de Backend */ 	
	static function getEkuDesDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return EkuDe::getEkuDes($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getEkuDesCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = EkuDe::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = EkuDe::getEkuDes($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getEkuDes filtrado para select */ 	
	static function getEkuDesCmbF($paginador = null, $criterio = null){
            $col = EkuDe::getEkuDes($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getEkuDes filtrado por una coleccion de objetos foraneos de EkuDeOpeTipoEstado */ 	
	static function getEkuDesXEkuDeOpeTipoEstados($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(EkuDe::GEN_ATTR_EKU_DE_OPE_TIPO_ESTADO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(EkuDe::GEN_TABLA);
            $c->addOrden(EkuDe::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = EkuDe::getEkuDes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getEkuDeOpeTipoEstadoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'eku_de_adm.php';
            $url_gestion = 'eku_de_gestion.php';
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
	

	/* Metodo getEkuDeB001GOpeDEs */ 	
	public function getEkuDeB001GOpeDEs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeB001GOpeDE::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeB001GOpeDE::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeB001GOpeDE::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeB001GOpeDE::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeB001GOpeDE::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeB001GOpeDE::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeB001GOpeDE::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeB001GOpeDE::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudeb001gopedes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudeb001gopede = EkuDeB001GOpeDE::hidratarObjeto($fila);			
                $ekudeb001gopedes[] = $ekudeb001gopede;
            }

            return $ekudeb001gopedes;
	}	
	

	/* Método getEkuDeB001GOpeDEsBloque para MasInfo */ 	
	public function getEkuDeB001GOpeDEsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeB001GOpeDEs($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeB001GOpeDEs Habilitados */ 	
	public function getEkuDeB001GOpeDEsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeB001GOpeDEs($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeB001GOpeDE */ 	
	public function getEkuDeB001GOpeDE($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeB001GOpeDEs($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeB001GOpeDE relacionadas */ 	
	public function deleteEkuDeB001GOpeDEs(){
            $obs = $this->getEkuDeB001GOpeDEs();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeB001GOpeDEsCmb() EkuDeB001GOpeDE relacionadas */ 	
	public function getEkuDeB001GOpeDEsCmb(){
            $c = new Criterio();
            $c->add(EkuDeB001GOpeDE::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeB001GOpeDE::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeB001GOpeDE::getEkuDeB001GOpeDEsCmbF(null, $c);
            return $os;
	}

	/* Metodo getEkuDeC001GTimbs */ 	
	public function getEkuDeC001GTimbs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeC001GTimb::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeC001GTimb::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeC001GTimb::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeC001GTimb::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeC001GTimb::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeC001GTimb::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeC001GTimb::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeC001GTimb::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudec001gtimbs = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudec001gtimb = EkuDeC001GTimb::hidratarObjeto($fila);			
                $ekudec001gtimbs[] = $ekudec001gtimb;
            }

            return $ekudec001gtimbs;
	}	
	

	/* Método getEkuDeC001GTimbsBloque para MasInfo */ 	
	public function getEkuDeC001GTimbsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeC001GTimbs($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeC001GTimbs Habilitados */ 	
	public function getEkuDeC001GTimbsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeC001GTimbs($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeC001GTimb */ 	
	public function getEkuDeC001GTimb($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeC001GTimbs($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeC001GTimb relacionadas */ 	
	public function deleteEkuDeC001GTimbs(){
            $obs = $this->getEkuDeC001GTimbs();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeC001GTimbsCmb() EkuDeC001GTimb relacionadas */ 	
	public function getEkuDeC001GTimbsCmb(){
            $c = new Criterio();
            $c->add(EkuDeC001GTimb::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeC001GTimb::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeC001GTimb::getEkuDeC001GTimbsCmbF(null, $c);
            return $os;
	}

	/* Metodo getEkuDeD001GDatGralOpes */ 	
	public function getEkuDeD001GDatGralOpes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeD001GDatGralOpe::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeD001GDatGralOpe::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeD001GDatGralOpe::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeD001GDatGralOpe::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeD001GDatGralOpe::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeD001GDatGralOpe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeD001GDatGralOpe::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeD001GDatGralOpe::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekuded001gdatgralopes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekuded001gdatgralope = EkuDeD001GDatGralOpe::hidratarObjeto($fila);			
                $ekuded001gdatgralopes[] = $ekuded001gdatgralope;
            }

            return $ekuded001gdatgralopes;
	}	
	

	/* Método getEkuDeD001GDatGralOpesBloque para MasInfo */ 	
	public function getEkuDeD001GDatGralOpesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeD001GDatGralOpes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeD001GDatGralOpes Habilitados */ 	
	public function getEkuDeD001GDatGralOpesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeD001GDatGralOpes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeD001GDatGralOpe */ 	
	public function getEkuDeD001GDatGralOpe($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeD001GDatGralOpes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeD001GDatGralOpe relacionadas */ 	
	public function deleteEkuDeD001GDatGralOpes(){
            $obs = $this->getEkuDeD001GDatGralOpes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeD001GDatGralOpesCmb() EkuDeD001GDatGralOpe relacionadas */ 	
	public function getEkuDeD001GDatGralOpesCmb(){
            $c = new Criterio();
            $c->add(EkuDeD001GDatGralOpe::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeD001GDatGralOpe::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeD001GDatGralOpe::getEkuDeD001GDatGralOpesCmbF(null, $c);
            return $os;
	}

	/* Metodo getEkuDeD010GDatGralOpeGOpeComs */ 	
	public function getEkuDeD010GDatGralOpeGOpeComs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeD010GDatGralOpeGOpeCom::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeD010GDatGralOpeGOpeCom::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeD010GDatGralOpeGOpeCom::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeD010GDatGralOpeGOpeCom::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeD010GDatGralOpeGOpeCom::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeD010GDatGralOpeGOpeCom::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeD010GDatGralOpeGOpeCom::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeD010GDatGralOpeGOpeCom::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekuded010gdatgralopegopecoms = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekuded010gdatgralopegopecom = EkuDeD010GDatGralOpeGOpeCom::hidratarObjeto($fila);			
                $ekuded010gdatgralopegopecoms[] = $ekuded010gdatgralopegopecom;
            }

            return $ekuded010gdatgralopegopecoms;
	}	
	

	/* Método getEkuDeD010GDatGralOpeGOpeComsBloque para MasInfo */ 	
	public function getEkuDeD010GDatGralOpeGOpeComsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeD010GDatGralOpeGOpeComs($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeD010GDatGralOpeGOpeComs Habilitados */ 	
	public function getEkuDeD010GDatGralOpeGOpeComsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeD010GDatGralOpeGOpeComs($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeD010GDatGralOpeGOpeCom */ 	
	public function getEkuDeD010GDatGralOpeGOpeCom($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeD010GDatGralOpeGOpeComs($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeD010GDatGralOpeGOpeCom relacionadas */ 	
	public function deleteEkuDeD010GDatGralOpeGOpeComs(){
            $obs = $this->getEkuDeD010GDatGralOpeGOpeComs();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeD010GDatGralOpeGOpeComsCmb() EkuDeD010GDatGralOpeGOpeCom relacionadas */ 	
	public function getEkuDeD010GDatGralOpeGOpeComsCmb(){
            $c = new Criterio();
            $c->add(EkuDeD010GDatGralOpeGOpeCom::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeD010GDatGralOpeGOpeCom::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeD010GDatGralOpeGOpeCom::getEkuDeD010GDatGralOpeGOpeComsCmbF(null, $c);
            return $os;
	}

	/* Metodo getEkuDeD100GDatGralOpeGEmiss */ 	
	public function getEkuDeD100GDatGralOpeGEmiss($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeD100GDatGralOpeGEmis::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeD100GDatGralOpeGEmis::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeD100GDatGralOpeGEmis::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeD100GDatGralOpeGEmis::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeD100GDatGralOpeGEmis::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeD100GDatGralOpeGEmis::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeD100GDatGralOpeGEmis::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeD100GDatGralOpeGEmis::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekuded100gdatgralopegemiss = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekuded100gdatgralopegemis = EkuDeD100GDatGralOpeGEmis::hidratarObjeto($fila);			
                $ekuded100gdatgralopegemiss[] = $ekuded100gdatgralopegemis;
            }

            return $ekuded100gdatgralopegemiss;
	}	
	

	/* Método getEkuDeD100GDatGralOpeGEmissBloque para MasInfo */ 	
	public function getEkuDeD100GDatGralOpeGEmissParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeD100GDatGralOpeGEmiss Habilitados */ 	
	public function getEkuDeD100GDatGralOpeGEmissHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeD100GDatGralOpeGEmis */ 	
	public function getEkuDeD100GDatGralOpeGEmis($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeD100GDatGralOpeGEmis relacionadas */ 	
	public function deleteEkuDeD100GDatGralOpeGEmiss(){
            $obs = $this->getEkuDeD100GDatGralOpeGEmiss();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeD100GDatGralOpeGEmissCmb() EkuDeD100GDatGralOpeGEmis relacionadas */ 	
	public function getEkuDeD100GDatGralOpeGEmissCmb(){
            $c = new Criterio();
            $c->add(EkuDeD100GDatGralOpeGEmis::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeD100GDatGralOpeGEmis::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeD100GDatGralOpeGEmis::getEkuDeD100GDatGralOpeGEmissCmbF(null, $c);
            return $os;
	}

	/* Metodo getEkuDeD130GDatGralOpeGEmisGActEcos */ 	
	public function getEkuDeD130GDatGralOpeGEmisGActEcos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeD130GDatGralOpeGEmisGActEco::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeD130GDatGralOpeGEmisGActEco::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeD130GDatGralOpeGEmisGActEco::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeD130GDatGralOpeGEmisGActEco::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeD130GDatGralOpeGEmisGActEco::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeD130GDatGralOpeGEmisGActEco::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeD130GDatGralOpeGEmisGActEco::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeD130GDatGralOpeGEmisGActEco::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekuded130gdatgralopegemisgactecos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekuded130gdatgralopegemisgacteco = EkuDeD130GDatGralOpeGEmisGActEco::hidratarObjeto($fila);			
                $ekuded130gdatgralopegemisgactecos[] = $ekuded130gdatgralopegemisgacteco;
            }

            return $ekuded130gdatgralopegemisgactecos;
	}	
	

	/* Método getEkuDeD130GDatGralOpeGEmisGActEcosBloque para MasInfo */ 	
	public function getEkuDeD130GDatGralOpeGEmisGActEcosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeD130GDatGralOpeGEmisGActEcos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeD130GDatGralOpeGEmisGActEcos Habilitados */ 	
	public function getEkuDeD130GDatGralOpeGEmisGActEcosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeD130GDatGralOpeGEmisGActEcos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeD130GDatGralOpeGEmisGActEco */ 	
	public function getEkuDeD130GDatGralOpeGEmisGActEco($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeD130GDatGralOpeGEmisGActEcos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeD130GDatGralOpeGEmisGActEco relacionadas */ 	
	public function deleteEkuDeD130GDatGralOpeGEmisGActEcos(){
            $obs = $this->getEkuDeD130GDatGralOpeGEmisGActEcos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeD130GDatGralOpeGEmisGActEcosCmb() EkuDeD130GDatGralOpeGEmisGActEco relacionadas */ 	
	public function getEkuDeD130GDatGralOpeGEmisGActEcosCmb(){
            $c = new Criterio();
            $c->add(EkuDeD130GDatGralOpeGEmisGActEco::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeD130GDatGralOpeGEmisGActEco::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeD130GDatGralOpeGEmisGActEco::getEkuDeD130GDatGralOpeGEmisGActEcosCmbF(null, $c);
            return $os;
	}

	/* Metodo getEkuDeD140GDatGralOpeGRespDEs */ 	
	public function getEkuDeD140GDatGralOpeGRespDEs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeD140GDatGralOpeGRespDE::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeD140GDatGralOpeGRespDE::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeD140GDatGralOpeGRespDE::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeD140GDatGralOpeGRespDE::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeD140GDatGralOpeGRespDE::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeD140GDatGralOpeGRespDE::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeD140GDatGralOpeGRespDE::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeD140GDatGralOpeGRespDE::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekuded140gdatgralopegrespdes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekuded140gdatgralopegrespde = EkuDeD140GDatGralOpeGRespDE::hidratarObjeto($fila);			
                $ekuded140gdatgralopegrespdes[] = $ekuded140gdatgralopegrespde;
            }

            return $ekuded140gdatgralopegrespdes;
	}	
	

	/* Método getEkuDeD140GDatGralOpeGRespDEsBloque para MasInfo */ 	
	public function getEkuDeD140GDatGralOpeGRespDEsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeD140GDatGralOpeGRespDEs($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeD140GDatGralOpeGRespDEs Habilitados */ 	
	public function getEkuDeD140GDatGralOpeGRespDEsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeD140GDatGralOpeGRespDEs($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeD140GDatGralOpeGRespDE */ 	
	public function getEkuDeD140GDatGralOpeGRespDE($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeD140GDatGralOpeGRespDEs($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeD140GDatGralOpeGRespDE relacionadas */ 	
	public function deleteEkuDeD140GDatGralOpeGRespDEs(){
            $obs = $this->getEkuDeD140GDatGralOpeGRespDEs();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeD140GDatGralOpeGRespDEsCmb() EkuDeD140GDatGralOpeGRespDE relacionadas */ 	
	public function getEkuDeD140GDatGralOpeGRespDEsCmb(){
            $c = new Criterio();
            $c->add(EkuDeD140GDatGralOpeGRespDE::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeD140GDatGralOpeGRespDE::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeD140GDatGralOpeGRespDE::getEkuDeD140GDatGralOpeGRespDEsCmbF(null, $c);
            return $os;
	}

	/* Metodo getEkuDeD200GDatGralOpeGDatRecs */ 	
	public function getEkuDeD200GDatGralOpeGDatRecs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeD200GDatGralOpeGDatRec::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeD200GDatGralOpeGDatRec::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeD200GDatGralOpeGDatRec::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeD200GDatGralOpeGDatRec::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeD200GDatGralOpeGDatRec::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeD200GDatGralOpeGDatRec::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeD200GDatGralOpeGDatRec::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeD200GDatGralOpeGDatRec::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekuded200gdatgralopegdatrecs = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekuded200gdatgralopegdatrec = EkuDeD200GDatGralOpeGDatRec::hidratarObjeto($fila);			
                $ekuded200gdatgralopegdatrecs[] = $ekuded200gdatgralopegdatrec;
            }

            return $ekuded200gdatgralopegdatrecs;
	}	
	

	/* Método getEkuDeD200GDatGralOpeGDatRecsBloque para MasInfo */ 	
	public function getEkuDeD200GDatGralOpeGDatRecsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeD200GDatGralOpeGDatRecs Habilitados */ 	
	public function getEkuDeD200GDatGralOpeGDatRecsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeD200GDatGralOpeGDatRec */ 	
	public function getEkuDeD200GDatGralOpeGDatRec($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeD200GDatGralOpeGDatRec relacionadas */ 	
	public function deleteEkuDeD200GDatGralOpeGDatRecs(){
            $obs = $this->getEkuDeD200GDatGralOpeGDatRecs();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeD200GDatGralOpeGDatRecsCmb() EkuDeD200GDatGralOpeGDatRec relacionadas */ 	
	public function getEkuDeD200GDatGralOpeGDatRecsCmb(){
            $c = new Criterio();
            $c->add(EkuDeD200GDatGralOpeGDatRec::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeD200GDatGralOpeGDatRec::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeD200GDatGralOpeGDatRec::getEkuDeD200GDatGralOpeGDatRecsCmbF(null, $c);
            return $os;
	}

	/* Metodo getEkuDeE010GDtipDEGCamFEs */ 	
	public function getEkuDeE010GDtipDEGCamFEs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeE010GDtipDEGCamFE::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeE010GDtipDEGCamFE::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeE010GDtipDEGCamFE::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeE010GDtipDEGCamFE::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeE010GDtipDEGCamFE::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeE010GDtipDEGCamFE::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeE010GDtipDEGCamFE::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeE010GDtipDEGCamFE::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudee010gdtipdegcamfes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudee010gdtipdegcamfe = EkuDeE010GDtipDEGCamFE::hidratarObjeto($fila);			
                $ekudee010gdtipdegcamfes[] = $ekudee010gdtipdegcamfe;
            }

            return $ekudee010gdtipdegcamfes;
	}	
	

	/* Método getEkuDeE010GDtipDEGCamFEsBloque para MasInfo */ 	
	public function getEkuDeE010GDtipDEGCamFEsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeE010GDtipDEGCamFEs($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeE010GDtipDEGCamFEs Habilitados */ 	
	public function getEkuDeE010GDtipDEGCamFEsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeE010GDtipDEGCamFEs($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeE010GDtipDEGCamFE */ 	
	public function getEkuDeE010GDtipDEGCamFE($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeE010GDtipDEGCamFEs($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeE010GDtipDEGCamFE relacionadas */ 	
	public function deleteEkuDeE010GDtipDEGCamFEs(){
            $obs = $this->getEkuDeE010GDtipDEGCamFEs();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeE010GDtipDEGCamFEsCmb() EkuDeE010GDtipDEGCamFE relacionadas */ 	
	public function getEkuDeE010GDtipDEGCamFEsCmb(){
            $c = new Criterio();
            $c->add(EkuDeE010GDtipDEGCamFE::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeE010GDtipDEGCamFE::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeE010GDtipDEGCamFE::getEkuDeE010GDtipDEGCamFEsCmbF(null, $c);
            return $os;
	}

	/* Metodo getEkuDeE020GDtipDEGCompPubs */ 	
	public function getEkuDeE020GDtipDEGCompPubs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeE020GDtipDEGCompPub::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeE020GDtipDEGCompPub::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeE020GDtipDEGCompPub::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeE020GDtipDEGCompPub::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeE020GDtipDEGCompPub::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeE020GDtipDEGCompPub::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeE020GDtipDEGCompPub::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeE020GDtipDEGCompPub::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudee020gdtipdegcomppubs = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudee020gdtipdegcomppub = EkuDeE020GDtipDEGCompPub::hidratarObjeto($fila);			
                $ekudee020gdtipdegcomppubs[] = $ekudee020gdtipdegcomppub;
            }

            return $ekudee020gdtipdegcomppubs;
	}	
	

	/* Método getEkuDeE020GDtipDEGCompPubsBloque para MasInfo */ 	
	public function getEkuDeE020GDtipDEGCompPubsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeE020GDtipDEGCompPubs($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeE020GDtipDEGCompPubs Habilitados */ 	
	public function getEkuDeE020GDtipDEGCompPubsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeE020GDtipDEGCompPubs($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeE020GDtipDEGCompPub */ 	
	public function getEkuDeE020GDtipDEGCompPub($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeE020GDtipDEGCompPubs($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeE020GDtipDEGCompPub relacionadas */ 	
	public function deleteEkuDeE020GDtipDEGCompPubs(){
            $obs = $this->getEkuDeE020GDtipDEGCompPubs();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeE020GDtipDEGCompPubsCmb() EkuDeE020GDtipDEGCompPub relacionadas */ 	
	public function getEkuDeE020GDtipDEGCompPubsCmb(){
            $c = new Criterio();
            $c->add(EkuDeE020GDtipDEGCompPub::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeE020GDtipDEGCompPub::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeE020GDtipDEGCompPub::getEkuDeE020GDtipDEGCompPubsCmbF(null, $c);
            return $os;
	}

	/* Metodo getEkuDeE300GDtipDEGCamAEs */ 	
	public function getEkuDeE300GDtipDEGCamAEs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeE300GDtipDEGCamAE::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeE300GDtipDEGCamAE::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeE300GDtipDEGCamAE::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeE300GDtipDEGCamAE::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeE300GDtipDEGCamAE::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeE300GDtipDEGCamAE::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeE300GDtipDEGCamAE::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeE300GDtipDEGCamAE::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudee300gdtipdegcamaes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudee300gdtipdegcamae = EkuDeE300GDtipDEGCamAE::hidratarObjeto($fila);			
                $ekudee300gdtipdegcamaes[] = $ekudee300gdtipdegcamae;
            }

            return $ekudee300gdtipdegcamaes;
	}	
	

	/* Método getEkuDeE300GDtipDEGCamAEsBloque para MasInfo */ 	
	public function getEkuDeE300GDtipDEGCamAEsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeE300GDtipDEGCamAEs($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeE300GDtipDEGCamAEs Habilitados */ 	
	public function getEkuDeE300GDtipDEGCamAEsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeE300GDtipDEGCamAEs($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeE300GDtipDEGCamAE */ 	
	public function getEkuDeE300GDtipDEGCamAE($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeE300GDtipDEGCamAEs($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeE300GDtipDEGCamAE relacionadas */ 	
	public function deleteEkuDeE300GDtipDEGCamAEs(){
            $obs = $this->getEkuDeE300GDtipDEGCamAEs();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeE300GDtipDEGCamAEsCmb() EkuDeE300GDtipDEGCamAE relacionadas */ 	
	public function getEkuDeE300GDtipDEGCamAEsCmb(){
            $c = new Criterio();
            $c->add(EkuDeE300GDtipDEGCamAE::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeE300GDtipDEGCamAE::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeE300GDtipDEGCamAE::getEkuDeE300GDtipDEGCamAEsCmbF(null, $c);
            return $os;
	}

	/* Metodo getEkuDeE400GDtipDEGCamNCDEs */ 	
	public function getEkuDeE400GDtipDEGCamNCDEs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeE400GDtipDEGCamNCDE::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeE400GDtipDEGCamNCDE::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeE400GDtipDEGCamNCDE::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeE400GDtipDEGCamNCDE::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeE400GDtipDEGCamNCDE::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeE400GDtipDEGCamNCDE::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeE400GDtipDEGCamNCDE::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeE400GDtipDEGCamNCDE::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudee400gdtipdegcamncdes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudee400gdtipdegcamncde = EkuDeE400GDtipDEGCamNCDE::hidratarObjeto($fila);			
                $ekudee400gdtipdegcamncdes[] = $ekudee400gdtipdegcamncde;
            }

            return $ekudee400gdtipdegcamncdes;
	}	
	

	/* Método getEkuDeE400GDtipDEGCamNCDEsBloque para MasInfo */ 	
	public function getEkuDeE400GDtipDEGCamNCDEsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeE400GDtipDEGCamNCDEs($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeE400GDtipDEGCamNCDEs Habilitados */ 	
	public function getEkuDeE400GDtipDEGCamNCDEsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeE400GDtipDEGCamNCDEs($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeE400GDtipDEGCamNCDE */ 	
	public function getEkuDeE400GDtipDEGCamNCDE($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeE400GDtipDEGCamNCDEs($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeE400GDtipDEGCamNCDE relacionadas */ 	
	public function deleteEkuDeE400GDtipDEGCamNCDEs(){
            $obs = $this->getEkuDeE400GDtipDEGCamNCDEs();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeE400GDtipDEGCamNCDEsCmb() EkuDeE400GDtipDEGCamNCDE relacionadas */ 	
	public function getEkuDeE400GDtipDEGCamNCDEsCmb(){
            $c = new Criterio();
            $c->add(EkuDeE400GDtipDEGCamNCDE::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeE400GDtipDEGCamNCDE::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeE400GDtipDEGCamNCDE::getEkuDeE400GDtipDEGCamNCDEsCmbF(null, $c);
            return $os;
	}

	/* Metodo getEkuDeE500GDtipDEGCamNREs */ 	
	public function getEkuDeE500GDtipDEGCamNREs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeE500GDtipDEGCamNRE::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeE500GDtipDEGCamNRE::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeE500GDtipDEGCamNRE::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeE500GDtipDEGCamNRE::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeE500GDtipDEGCamNRE::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeE500GDtipDEGCamNRE::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeE500GDtipDEGCamNRE::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeE500GDtipDEGCamNRE::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudee500gdtipdegcamnres = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudee500gdtipdegcamnre = EkuDeE500GDtipDEGCamNRE::hidratarObjeto($fila);			
                $ekudee500gdtipdegcamnres[] = $ekudee500gdtipdegcamnre;
            }

            return $ekudee500gdtipdegcamnres;
	}	
	

	/* Método getEkuDeE500GDtipDEGCamNREsBloque para MasInfo */ 	
	public function getEkuDeE500GDtipDEGCamNREsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeE500GDtipDEGCamNREs($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeE500GDtipDEGCamNREs Habilitados */ 	
	public function getEkuDeE500GDtipDEGCamNREsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeE500GDtipDEGCamNREs($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeE500GDtipDEGCamNRE */ 	
	public function getEkuDeE500GDtipDEGCamNRE($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeE500GDtipDEGCamNREs($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeE500GDtipDEGCamNRE relacionadas */ 	
	public function deleteEkuDeE500GDtipDEGCamNREs(){
            $obs = $this->getEkuDeE500GDtipDEGCamNREs();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeE500GDtipDEGCamNREsCmb() EkuDeE500GDtipDEGCamNRE relacionadas */ 	
	public function getEkuDeE500GDtipDEGCamNREsCmb(){
            $c = new Criterio();
            $c->add(EkuDeE500GDtipDEGCamNRE::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeE500GDtipDEGCamNRE::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeE500GDtipDEGCamNRE::getEkuDeE500GDtipDEGCamNREsCmbF(null, $c);
            return $os;
	}

	/* Metodo getEkuDeE600GDtipDEGCamConds */ 	
	public function getEkuDeE600GDtipDEGCamConds($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeE600GDtipDEGCamCond::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeE600GDtipDEGCamCond::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeE600GDtipDEGCamCond::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeE600GDtipDEGCamCond::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeE600GDtipDEGCamCond::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeE600GDtipDEGCamCond::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeE600GDtipDEGCamCond::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeE600GDtipDEGCamCond::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudee600gdtipdegcamconds = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudee600gdtipdegcamcond = EkuDeE600GDtipDEGCamCond::hidratarObjeto($fila);			
                $ekudee600gdtipdegcamconds[] = $ekudee600gdtipdegcamcond;
            }

            return $ekudee600gdtipdegcamconds;
	}	
	

	/* Método getEkuDeE600GDtipDEGCamCondsBloque para MasInfo */ 	
	public function getEkuDeE600GDtipDEGCamCondsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeE600GDtipDEGCamConds($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeE600GDtipDEGCamConds Habilitados */ 	
	public function getEkuDeE600GDtipDEGCamCondsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeE600GDtipDEGCamConds($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeE600GDtipDEGCamCond */ 	
	public function getEkuDeE600GDtipDEGCamCond($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeE600GDtipDEGCamConds($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeE600GDtipDEGCamCond relacionadas */ 	
	public function deleteEkuDeE600GDtipDEGCamConds(){
            $obs = $this->getEkuDeE600GDtipDEGCamConds();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeE600GDtipDEGCamCondsCmb() EkuDeE600GDtipDEGCamCond relacionadas */ 	
	public function getEkuDeE600GDtipDEGCamCondsCmb(){
            $c = new Criterio();
            $c->add(EkuDeE600GDtipDEGCamCond::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeE600GDtipDEGCamCond::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeE600GDtipDEGCamCond::getEkuDeE600GDtipDEGCamCondsCmbF(null, $c);
            return $os;
	}

	/* Metodo getEkuDeE605GDtipDEGCamCondGPaConEInis */ 	
	public function getEkuDeE605GDtipDEGCamCondGPaConEInis($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeE605GDtipDEGCamCondGPaConEIni::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeE605GDtipDEGCamCondGPaConEIni::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeE605GDtipDEGCamCondGPaConEIni::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeE605GDtipDEGCamCondGPaConEIni::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeE605GDtipDEGCamCondGPaConEIni::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeE605GDtipDEGCamCondGPaConEIni::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeE605GDtipDEGCamCondGPaConEIni::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeE605GDtipDEGCamCondGPaConEIni::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudee605gdtipdegcamcondgpaconeinis = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudee605gdtipdegcamcondgpaconeini = EkuDeE605GDtipDEGCamCondGPaConEIni::hidratarObjeto($fila);			
                $ekudee605gdtipdegcamcondgpaconeinis[] = $ekudee605gdtipdegcamcondgpaconeini;
            }

            return $ekudee605gdtipdegcamcondgpaconeinis;
	}	
	

	/* Método getEkuDeE605GDtipDEGCamCondGPaConEInisBloque para MasInfo */ 	
	public function getEkuDeE605GDtipDEGCamCondGPaConEInisParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeE605GDtipDEGCamCondGPaConEInis($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeE605GDtipDEGCamCondGPaConEInis Habilitados */ 	
	public function getEkuDeE605GDtipDEGCamCondGPaConEInisHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeE605GDtipDEGCamCondGPaConEInis($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeE605GDtipDEGCamCondGPaConEIni */ 	
	public function getEkuDeE605GDtipDEGCamCondGPaConEIni($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeE605GDtipDEGCamCondGPaConEInis($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeE605GDtipDEGCamCondGPaConEIni relacionadas */ 	
	public function deleteEkuDeE605GDtipDEGCamCondGPaConEInis(){
            $obs = $this->getEkuDeE605GDtipDEGCamCondGPaConEInis();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeE605GDtipDEGCamCondGPaConEInisCmb() EkuDeE605GDtipDEGCamCondGPaConEIni relacionadas */ 	
	public function getEkuDeE605GDtipDEGCamCondGPaConEInisCmb(){
            $c = new Criterio();
            $c->add(EkuDeE605GDtipDEGCamCondGPaConEIni::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeE605GDtipDEGCamCondGPaConEIni::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeE605GDtipDEGCamCondGPaConEIni::getEkuDeE605GDtipDEGCamCondGPaConEInisCmbF(null, $c);
            return $os;
	}

	/* Metodo getEkuDeE620GDtipDEGCamCondGPagTarCDs */ 	
	public function getEkuDeE620GDtipDEGCamCondGPagTarCDs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeE620GDtipDEGCamCondGPagTarCD::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeE620GDtipDEGCamCondGPagTarCD::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeE620GDtipDEGCamCondGPagTarCD::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeE620GDtipDEGCamCondGPagTarCD::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeE620GDtipDEGCamCondGPagTarCD::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeE620GDtipDEGCamCondGPagTarCD::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeE620GDtipDEGCamCondGPagTarCD::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeE620GDtipDEGCamCondGPagTarCD::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudee620gdtipdegcamcondgpagtarcds = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudee620gdtipdegcamcondgpagtarcd = EkuDeE620GDtipDEGCamCondGPagTarCD::hidratarObjeto($fila);			
                $ekudee620gdtipdegcamcondgpagtarcds[] = $ekudee620gdtipdegcamcondgpagtarcd;
            }

            return $ekudee620gdtipdegcamcondgpagtarcds;
	}	
	

	/* Método getEkuDeE620GDtipDEGCamCondGPagTarCDsBloque para MasInfo */ 	
	public function getEkuDeE620GDtipDEGCamCondGPagTarCDsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeE620GDtipDEGCamCondGPagTarCDs($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeE620GDtipDEGCamCondGPagTarCDs Habilitados */ 	
	public function getEkuDeE620GDtipDEGCamCondGPagTarCDsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeE620GDtipDEGCamCondGPagTarCDs($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeE620GDtipDEGCamCondGPagTarCD */ 	
	public function getEkuDeE620GDtipDEGCamCondGPagTarCD($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeE620GDtipDEGCamCondGPagTarCDs($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeE620GDtipDEGCamCondGPagTarCD relacionadas */ 	
	public function deleteEkuDeE620GDtipDEGCamCondGPagTarCDs(){
            $obs = $this->getEkuDeE620GDtipDEGCamCondGPagTarCDs();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeE620GDtipDEGCamCondGPagTarCDsCmb() EkuDeE620GDtipDEGCamCondGPagTarCD relacionadas */ 	
	public function getEkuDeE620GDtipDEGCamCondGPagTarCDsCmb(){
            $c = new Criterio();
            $c->add(EkuDeE620GDtipDEGCamCondGPagTarCD::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeE620GDtipDEGCamCondGPagTarCD::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeE620GDtipDEGCamCondGPagTarCD::getEkuDeE620GDtipDEGCamCondGPagTarCDsCmbF(null, $c);
            return $os;
	}

	/* Metodo getEkuDeE630GDtipDEGCamCondGPagCheqs */ 	
	public function getEkuDeE630GDtipDEGCamCondGPagCheqs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeE630GDtipDEGCamCondGPagCheq::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeE630GDtipDEGCamCondGPagCheq::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeE630GDtipDEGCamCondGPagCheq::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeE630GDtipDEGCamCondGPagCheq::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeE630GDtipDEGCamCondGPagCheq::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeE630GDtipDEGCamCondGPagCheq::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeE630GDtipDEGCamCondGPagCheq::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeE630GDtipDEGCamCondGPagCheq::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudee630gdtipdegcamcondgpagcheqs = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudee630gdtipdegcamcondgpagcheq = EkuDeE630GDtipDEGCamCondGPagCheq::hidratarObjeto($fila);			
                $ekudee630gdtipdegcamcondgpagcheqs[] = $ekudee630gdtipdegcamcondgpagcheq;
            }

            return $ekudee630gdtipdegcamcondgpagcheqs;
	}	
	

	/* Método getEkuDeE630GDtipDEGCamCondGPagCheqsBloque para MasInfo */ 	
	public function getEkuDeE630GDtipDEGCamCondGPagCheqsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeE630GDtipDEGCamCondGPagCheqs($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeE630GDtipDEGCamCondGPagCheqs Habilitados */ 	
	public function getEkuDeE630GDtipDEGCamCondGPagCheqsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeE630GDtipDEGCamCondGPagCheqs($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeE630GDtipDEGCamCondGPagCheq */ 	
	public function getEkuDeE630GDtipDEGCamCondGPagCheq($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeE630GDtipDEGCamCondGPagCheqs($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeE630GDtipDEGCamCondGPagCheq relacionadas */ 	
	public function deleteEkuDeE630GDtipDEGCamCondGPagCheqs(){
            $obs = $this->getEkuDeE630GDtipDEGCamCondGPagCheqs();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeE630GDtipDEGCamCondGPagCheqsCmb() EkuDeE630GDtipDEGCamCondGPagCheq relacionadas */ 	
	public function getEkuDeE630GDtipDEGCamCondGPagCheqsCmb(){
            $c = new Criterio();
            $c->add(EkuDeE630GDtipDEGCamCondGPagCheq::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeE630GDtipDEGCamCondGPagCheq::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeE630GDtipDEGCamCondGPagCheq::getEkuDeE630GDtipDEGCamCondGPagCheqsCmbF(null, $c);
            return $os;
	}

	/* Metodo getEkuDeE640GDtipDEGCamCondGPagCreds */ 	
	public function getEkuDeE640GDtipDEGCamCondGPagCreds($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeE640GDtipDEGCamCondGPagCred::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeE640GDtipDEGCamCondGPagCred::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeE640GDtipDEGCamCondGPagCred::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeE640GDtipDEGCamCondGPagCred::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeE640GDtipDEGCamCondGPagCred::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeE640GDtipDEGCamCondGPagCred::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeE640GDtipDEGCamCondGPagCred::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeE640GDtipDEGCamCondGPagCred::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudee640gdtipdegcamcondgpagcreds = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudee640gdtipdegcamcondgpagcred = EkuDeE640GDtipDEGCamCondGPagCred::hidratarObjeto($fila);			
                $ekudee640gdtipdegcamcondgpagcreds[] = $ekudee640gdtipdegcamcondgpagcred;
            }

            return $ekudee640gdtipdegcamcondgpagcreds;
	}	
	

	/* Método getEkuDeE640GDtipDEGCamCondGPagCredsBloque para MasInfo */ 	
	public function getEkuDeE640GDtipDEGCamCondGPagCredsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeE640GDtipDEGCamCondGPagCreds($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeE640GDtipDEGCamCondGPagCreds Habilitados */ 	
	public function getEkuDeE640GDtipDEGCamCondGPagCredsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeE640GDtipDEGCamCondGPagCreds($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeE640GDtipDEGCamCondGPagCred */ 	
	public function getEkuDeE640GDtipDEGCamCondGPagCred($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeE640GDtipDEGCamCondGPagCreds($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeE640GDtipDEGCamCondGPagCred relacionadas */ 	
	public function deleteEkuDeE640GDtipDEGCamCondGPagCreds(){
            $obs = $this->getEkuDeE640GDtipDEGCamCondGPagCreds();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeE640GDtipDEGCamCondGPagCredsCmb() EkuDeE640GDtipDEGCamCondGPagCred relacionadas */ 	
	public function getEkuDeE640GDtipDEGCamCondGPagCredsCmb(){
            $c = new Criterio();
            $c->add(EkuDeE640GDtipDEGCamCondGPagCred::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeE640GDtipDEGCamCondGPagCred::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeE640GDtipDEGCamCondGPagCred::getEkuDeE640GDtipDEGCamCondGPagCredsCmbF(null, $c);
            return $os;
	}

	/* Metodo getEkuDeE650GDtipDEGCamCondGPagCredGCuotass */ 	
	public function getEkuDeE650GDtipDEGCamCondGPagCredGCuotass($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeE650GDtipDEGCamCondGPagCredGCuotas::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeE650GDtipDEGCamCondGPagCredGCuotas::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeE650GDtipDEGCamCondGPagCredGCuotas::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeE650GDtipDEGCamCondGPagCredGCuotas::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeE650GDtipDEGCamCondGPagCredGCuotas::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeE650GDtipDEGCamCondGPagCredGCuotas::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeE650GDtipDEGCamCondGPagCredGCuotas::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeE650GDtipDEGCamCondGPagCredGCuotas::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudee650gdtipdegcamcondgpagcredgcuotass = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudee650gdtipdegcamcondgpagcredgcuotas = EkuDeE650GDtipDEGCamCondGPagCredGCuotas::hidratarObjeto($fila);			
                $ekudee650gdtipdegcamcondgpagcredgcuotass[] = $ekudee650gdtipdegcamcondgpagcredgcuotas;
            }

            return $ekudee650gdtipdegcamcondgpagcredgcuotass;
	}	
	

	/* Método getEkuDeE650GDtipDEGCamCondGPagCredGCuotassBloque para MasInfo */ 	
	public function getEkuDeE650GDtipDEGCamCondGPagCredGCuotassParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeE650GDtipDEGCamCondGPagCredGCuotass($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeE650GDtipDEGCamCondGPagCredGCuotass Habilitados */ 	
	public function getEkuDeE650GDtipDEGCamCondGPagCredGCuotassHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeE650GDtipDEGCamCondGPagCredGCuotass($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeE650GDtipDEGCamCondGPagCredGCuotas */ 	
	public function getEkuDeE650GDtipDEGCamCondGPagCredGCuotas($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeE650GDtipDEGCamCondGPagCredGCuotass($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeE650GDtipDEGCamCondGPagCredGCuotas relacionadas */ 	
	public function deleteEkuDeE650GDtipDEGCamCondGPagCredGCuotass(){
            $obs = $this->getEkuDeE650GDtipDEGCamCondGPagCredGCuotass();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeE650GDtipDEGCamCondGPagCredGCuotassCmb() EkuDeE650GDtipDEGCamCondGPagCredGCuotas relacionadas */ 	
	public function getEkuDeE650GDtipDEGCamCondGPagCredGCuotassCmb(){
            $c = new Criterio();
            $c->add(EkuDeE650GDtipDEGCamCondGPagCredGCuotas::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeE650GDtipDEGCamCondGPagCredGCuotas::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeE650GDtipDEGCamCondGPagCredGCuotas::getEkuDeE650GDtipDEGCamCondGPagCredGCuotassCmbF(null, $c);
            return $os;
	}

	/* Metodo getEkuDeE700GDtipDEGCamItems */ 	
	public function getEkuDeE700GDtipDEGCamItems($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeE700GDtipDEGCamItem::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeE700GDtipDEGCamItem::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeE700GDtipDEGCamItem::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeE700GDtipDEGCamItem::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeE700GDtipDEGCamItem::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeE700GDtipDEGCamItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeE700GDtipDEGCamItem::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeE700GDtipDEGCamItem::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudee700gdtipdegcamitems = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudee700gdtipdegcamitem = EkuDeE700GDtipDEGCamItem::hidratarObjeto($fila);			
                $ekudee700gdtipdegcamitems[] = $ekudee700gdtipdegcamitem;
            }

            return $ekudee700gdtipdegcamitems;
	}	
	

	/* Método getEkuDeE700GDtipDEGCamItemsBloque para MasInfo */ 	
	public function getEkuDeE700GDtipDEGCamItemsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeE700GDtipDEGCamItems($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeE700GDtipDEGCamItems Habilitados */ 	
	public function getEkuDeE700GDtipDEGCamItemsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeE700GDtipDEGCamItems($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeE700GDtipDEGCamItem */ 	
	public function getEkuDeE700GDtipDEGCamItem($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeE700GDtipDEGCamItems($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeE700GDtipDEGCamItem relacionadas */ 	
	public function deleteEkuDeE700GDtipDEGCamItems(){
            $obs = $this->getEkuDeE700GDtipDEGCamItems();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeE700GDtipDEGCamItemsCmb() EkuDeE700GDtipDEGCamItem relacionadas */ 	
	public function getEkuDeE700GDtipDEGCamItemsCmb(){
            $c = new Criterio();
            $c->add(EkuDeE700GDtipDEGCamItem::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeE700GDtipDEGCamItem::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeE700GDtipDEGCamItem::getEkuDeE700GDtipDEGCamItemsCmbF(null, $c);
            return $os;
	}

	/* Metodo getEkuDeE720GDtipDEGCamItemGValorItems */ 	
	public function getEkuDeE720GDtipDEGCamItemGValorItems($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeE720GDtipDEGCamItemGValorItem::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeE720GDtipDEGCamItemGValorItem::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeE720GDtipDEGCamItemGValorItem::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeE720GDtipDEGCamItemGValorItem::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeE720GDtipDEGCamItemGValorItem::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeE720GDtipDEGCamItemGValorItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeE720GDtipDEGCamItemGValorItem::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeE720GDtipDEGCamItemGValorItem::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudee720gdtipdegcamitemgvaloritems = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudee720gdtipdegcamitemgvaloritem = EkuDeE720GDtipDEGCamItemGValorItem::hidratarObjeto($fila);			
                $ekudee720gdtipdegcamitemgvaloritems[] = $ekudee720gdtipdegcamitemgvaloritem;
            }

            return $ekudee720gdtipdegcamitemgvaloritems;
	}	
	

	/* Método getEkuDeE720GDtipDEGCamItemGValorItemsBloque para MasInfo */ 	
	public function getEkuDeE720GDtipDEGCamItemGValorItemsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeE720GDtipDEGCamItemGValorItems($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeE720GDtipDEGCamItemGValorItems Habilitados */ 	
	public function getEkuDeE720GDtipDEGCamItemGValorItemsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeE720GDtipDEGCamItemGValorItems($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeE720GDtipDEGCamItemGValorItem */ 	
	public function getEkuDeE720GDtipDEGCamItemGValorItem($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeE720GDtipDEGCamItemGValorItems($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeE720GDtipDEGCamItemGValorItem relacionadas */ 	
	public function deleteEkuDeE720GDtipDEGCamItemGValorItems(){
            $obs = $this->getEkuDeE720GDtipDEGCamItemGValorItems();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeE720GDtipDEGCamItemGValorItemsCmb() EkuDeE720GDtipDEGCamItemGValorItem relacionadas */ 	
	public function getEkuDeE720GDtipDEGCamItemGValorItemsCmb(){
            $c = new Criterio();
            $c->add(EkuDeE720GDtipDEGCamItemGValorItem::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeE720GDtipDEGCamItemGValorItem::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeE720GDtipDEGCamItemGValorItem::getEkuDeE720GDtipDEGCamItemGValorItemsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener EkuDeE700GDtipDEGCamItems (Coleccion) relacionados a traves de EkuDeE720GDtipDEGCamItemGValorItem */ 	
	public function getEkuDeE700GDtipDEGCamItemsXEkuDeE720GDtipDEGCamItemGValorItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(EkuDeE700GDtipDEGCamItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeE720GDtipDEGCamItemGValorItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeE720GDtipDEGCamItemGValorItem::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeE700GDtipDEGCamItem::GEN_TABLA);
            $c->addRealJoin(EkuDeE720GDtipDEGCamItemGValorItem::GEN_TABLA, EkuDeE720GDtipDEGCamItemGValorItem::GEN_ATTR_EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_ID, EkuDeE700GDtipDEGCamItem::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuDeE700GDtipDEGCamItem::getEkuDeE700GDtipDEGCamItems($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de EkuDeE700GDtipDEGCamItems relacionados a traves de EkuDeE720GDtipDEGCamItemGValorItem */ 	
	public function getCantidadEkuDeE700GDtipDEGCamItemsXEkuDeE720GDtipDEGCamItemGValorItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(EkuDeE700GDtipDEGCamItem::GEN_ATTR_ID);
            if($estado){
                $c->add(EkuDeE700GDtipDEGCamItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeE720GDtipDEGCamItemGValorItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeE720GDtipDEGCamItemGValorItem::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeE700GDtipDEGCamItem::GEN_TABLA);
            $c->addRealJoin(EkuDeE720GDtipDEGCamItemGValorItem::GEN_TABLA, EkuDeE720GDtipDEGCamItemGValorItem::GEN_ATTR_EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_ID, EkuDeE700GDtipDEGCamItem::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuDeE700GDtipDEGCamItem::getEkuDeE700GDtipDEGCamItems($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener EkuDeE700GDtipDEGCamItem (Objeto) relacionado a traves de EkuDeE720GDtipDEGCamItemGValorItem */ 	
	public function getEkuDeE700GDtipDEGCamItemXEkuDeE720GDtipDEGCamItemGValorItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getEkuDeE700GDtipDEGCamItemsXEkuDeE720GDtipDEGCamItemGValorItem($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getEkuDeE730GDtipDEGCamItemGCamIVAs */ 	
	public function getEkuDeE730GDtipDEGCamItemGCamIVAs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeE730GDtipDEGCamItemGCamIVA::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeE730GDtipDEGCamItemGCamIVA::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeE730GDtipDEGCamItemGCamIVA::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeE730GDtipDEGCamItemGCamIVA::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeE730GDtipDEGCamItemGCamIVA::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeE730GDtipDEGCamItemGCamIVA::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeE730GDtipDEGCamItemGCamIVA::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeE730GDtipDEGCamItemGCamIVA::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudee730gdtipdegcamitemgcamivas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudee730gdtipdegcamitemgcamiva = EkuDeE730GDtipDEGCamItemGCamIVA::hidratarObjeto($fila);			
                $ekudee730gdtipdegcamitemgcamivas[] = $ekudee730gdtipdegcamitemgcamiva;
            }

            return $ekudee730gdtipdegcamitemgcamivas;
	}	
	

	/* Método getEkuDeE730GDtipDEGCamItemGCamIVAsBloque para MasInfo */ 	
	public function getEkuDeE730GDtipDEGCamItemGCamIVAsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeE730GDtipDEGCamItemGCamIVAs($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeE730GDtipDEGCamItemGCamIVAs Habilitados */ 	
	public function getEkuDeE730GDtipDEGCamItemGCamIVAsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeE730GDtipDEGCamItemGCamIVAs($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeE730GDtipDEGCamItemGCamIVA */ 	
	public function getEkuDeE730GDtipDEGCamItemGCamIVA($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeE730GDtipDEGCamItemGCamIVAs($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeE730GDtipDEGCamItemGCamIVA relacionadas */ 	
	public function deleteEkuDeE730GDtipDEGCamItemGCamIVAs(){
            $obs = $this->getEkuDeE730GDtipDEGCamItemGCamIVAs();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeE730GDtipDEGCamItemGCamIVAsCmb() EkuDeE730GDtipDEGCamItemGCamIVA relacionadas */ 	
	public function getEkuDeE730GDtipDEGCamItemGCamIVAsCmb(){
            $c = new Criterio();
            $c->add(EkuDeE730GDtipDEGCamItemGCamIVA::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeE730GDtipDEGCamItemGCamIVA::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeE730GDtipDEGCamItemGCamIVA::getEkuDeE730GDtipDEGCamItemGCamIVAsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener EkuDeE700GDtipDEGCamItems (Coleccion) relacionados a traves de EkuDeE730GDtipDEGCamItemGCamIVA */ 	
	public function getEkuDeE700GDtipDEGCamItemsXEkuDeE730GDtipDEGCamItemGCamIVA($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(EkuDeE700GDtipDEGCamItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeE730GDtipDEGCamItemGCamIVA::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeE730GDtipDEGCamItemGCamIVA::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeE700GDtipDEGCamItem::GEN_TABLA);
            $c->addRealJoin(EkuDeE730GDtipDEGCamItemGCamIVA::GEN_TABLA, EkuDeE730GDtipDEGCamItemGCamIVA::GEN_ATTR_EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_ID, EkuDeE700GDtipDEGCamItem::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuDeE700GDtipDEGCamItem::getEkuDeE700GDtipDEGCamItems($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de EkuDeE700GDtipDEGCamItems relacionados a traves de EkuDeE730GDtipDEGCamItemGCamIVA */ 	
	public function getCantidadEkuDeE700GDtipDEGCamItemsXEkuDeE730GDtipDEGCamItemGCamIVA($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(EkuDeE700GDtipDEGCamItem::GEN_ATTR_ID);
            if($estado){
                $c->add(EkuDeE700GDtipDEGCamItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeE730GDtipDEGCamItemGCamIVA::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeE730GDtipDEGCamItemGCamIVA::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeE700GDtipDEGCamItem::GEN_TABLA);
            $c->addRealJoin(EkuDeE730GDtipDEGCamItemGCamIVA::GEN_TABLA, EkuDeE730GDtipDEGCamItemGCamIVA::GEN_ATTR_EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_ID, EkuDeE700GDtipDEGCamItem::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuDeE700GDtipDEGCamItem::getEkuDeE700GDtipDEGCamItems($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener EkuDeE700GDtipDEGCamItem (Objeto) relacionado a traves de EkuDeE730GDtipDEGCamItemGCamIVA */ 	
	public function getEkuDeE700GDtipDEGCamItemXEkuDeE730GDtipDEGCamItemGCamIVA($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getEkuDeE700GDtipDEGCamItemsXEkuDeE730GDtipDEGCamItemGCamIVA($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getEkuDeE750GDtipDEGCamItemGRasMercs */ 	
	public function getEkuDeE750GDtipDEGCamItemGRasMercs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeE750GDtipDEGCamItemGRasMerc::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeE750GDtipDEGCamItemGRasMerc::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeE750GDtipDEGCamItemGRasMerc::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeE750GDtipDEGCamItemGRasMerc::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeE750GDtipDEGCamItemGRasMerc::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeE750GDtipDEGCamItemGRasMerc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeE750GDtipDEGCamItemGRasMerc::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeE750GDtipDEGCamItemGRasMerc::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudee750gdtipdegcamitemgrasmercs = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudee750gdtipdegcamitemgrasmerc = EkuDeE750GDtipDEGCamItemGRasMerc::hidratarObjeto($fila);			
                $ekudee750gdtipdegcamitemgrasmercs[] = $ekudee750gdtipdegcamitemgrasmerc;
            }

            return $ekudee750gdtipdegcamitemgrasmercs;
	}	
	

	/* Método getEkuDeE750GDtipDEGCamItemGRasMercsBloque para MasInfo */ 	
	public function getEkuDeE750GDtipDEGCamItemGRasMercsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeE750GDtipDEGCamItemGRasMercs($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeE750GDtipDEGCamItemGRasMercs Habilitados */ 	
	public function getEkuDeE750GDtipDEGCamItemGRasMercsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeE750GDtipDEGCamItemGRasMercs($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeE750GDtipDEGCamItemGRasMerc */ 	
	public function getEkuDeE750GDtipDEGCamItemGRasMerc($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeE750GDtipDEGCamItemGRasMercs($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeE750GDtipDEGCamItemGRasMerc relacionadas */ 	
	public function deleteEkuDeE750GDtipDEGCamItemGRasMercs(){
            $obs = $this->getEkuDeE750GDtipDEGCamItemGRasMercs();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeE750GDtipDEGCamItemGRasMercsCmb() EkuDeE750GDtipDEGCamItemGRasMerc relacionadas */ 	
	public function getEkuDeE750GDtipDEGCamItemGRasMercsCmb(){
            $c = new Criterio();
            $c->add(EkuDeE750GDtipDEGCamItemGRasMerc::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeE750GDtipDEGCamItemGRasMerc::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeE750GDtipDEGCamItemGRasMerc::getEkuDeE750GDtipDEGCamItemGRasMercsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener EkuDeE700GDtipDEGCamItems (Coleccion) relacionados a traves de EkuDeE750GDtipDEGCamItemGRasMerc */ 	
	public function getEkuDeE700GDtipDEGCamItemsXEkuDeE750GDtipDEGCamItemGRasMerc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(EkuDeE700GDtipDEGCamItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeE750GDtipDEGCamItemGRasMerc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeE750GDtipDEGCamItemGRasMerc::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeE700GDtipDEGCamItem::GEN_TABLA);
            $c->addRealJoin(EkuDeE750GDtipDEGCamItemGRasMerc::GEN_TABLA, EkuDeE750GDtipDEGCamItemGRasMerc::GEN_ATTR_EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_ID, EkuDeE700GDtipDEGCamItem::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuDeE700GDtipDEGCamItem::getEkuDeE700GDtipDEGCamItems($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de EkuDeE700GDtipDEGCamItems relacionados a traves de EkuDeE750GDtipDEGCamItemGRasMerc */ 	
	public function getCantidadEkuDeE700GDtipDEGCamItemsXEkuDeE750GDtipDEGCamItemGRasMerc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(EkuDeE700GDtipDEGCamItem::GEN_ATTR_ID);
            if($estado){
                $c->add(EkuDeE700GDtipDEGCamItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeE750GDtipDEGCamItemGRasMerc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeE750GDtipDEGCamItemGRasMerc::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeE700GDtipDEGCamItem::GEN_TABLA);
            $c->addRealJoin(EkuDeE750GDtipDEGCamItemGRasMerc::GEN_TABLA, EkuDeE750GDtipDEGCamItemGRasMerc::GEN_ATTR_EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_ID, EkuDeE700GDtipDEGCamItem::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuDeE700GDtipDEGCamItem::getEkuDeE700GDtipDEGCamItems($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener EkuDeE700GDtipDEGCamItem (Objeto) relacionado a traves de EkuDeE750GDtipDEGCamItemGRasMerc */ 	
	public function getEkuDeE700GDtipDEGCamItemXEkuDeE750GDtipDEGCamItemGRasMerc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getEkuDeE700GDtipDEGCamItemsXEkuDeE750GDtipDEGCamItemGRasMerc($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getEkuDeE770GDtipDEGCamItemGVehNuevos */ 	
	public function getEkuDeE770GDtipDEGCamItemGVehNuevos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeE770GDtipDEGCamItemGVehNuevo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeE770GDtipDEGCamItemGVehNuevo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeE770GDtipDEGCamItemGVehNuevo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeE770GDtipDEGCamItemGVehNuevo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeE770GDtipDEGCamItemGVehNuevo::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeE770GDtipDEGCamItemGVehNuevo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeE770GDtipDEGCamItemGVehNuevo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeE770GDtipDEGCamItemGVehNuevo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudee770gdtipdegcamitemgvehnuevos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudee770gdtipdegcamitemgvehnuevo = EkuDeE770GDtipDEGCamItemGVehNuevo::hidratarObjeto($fila);			
                $ekudee770gdtipdegcamitemgvehnuevos[] = $ekudee770gdtipdegcamitemgvehnuevo;
            }

            return $ekudee770gdtipdegcamitemgvehnuevos;
	}	
	

	/* Método getEkuDeE770GDtipDEGCamItemGVehNuevosBloque para MasInfo */ 	
	public function getEkuDeE770GDtipDEGCamItemGVehNuevosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeE770GDtipDEGCamItemGVehNuevos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeE770GDtipDEGCamItemGVehNuevos Habilitados */ 	
	public function getEkuDeE770GDtipDEGCamItemGVehNuevosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeE770GDtipDEGCamItemGVehNuevos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeE770GDtipDEGCamItemGVehNuevo */ 	
	public function getEkuDeE770GDtipDEGCamItemGVehNuevo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeE770GDtipDEGCamItemGVehNuevos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeE770GDtipDEGCamItemGVehNuevo relacionadas */ 	
	public function deleteEkuDeE770GDtipDEGCamItemGVehNuevos(){
            $obs = $this->getEkuDeE770GDtipDEGCamItemGVehNuevos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeE770GDtipDEGCamItemGVehNuevosCmb() EkuDeE770GDtipDEGCamItemGVehNuevo relacionadas */ 	
	public function getEkuDeE770GDtipDEGCamItemGVehNuevosCmb(){
            $c = new Criterio();
            $c->add(EkuDeE770GDtipDEGCamItemGVehNuevo::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeE770GDtipDEGCamItemGVehNuevo::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeE770GDtipDEGCamItemGVehNuevo::getEkuDeE770GDtipDEGCamItemGVehNuevosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener EkuDeE700GDtipDEGCamItems (Coleccion) relacionados a traves de EkuDeE770GDtipDEGCamItemGVehNuevo */ 	
	public function getEkuDeE700GDtipDEGCamItemsXEkuDeE770GDtipDEGCamItemGVehNuevo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(EkuDeE700GDtipDEGCamItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeE770GDtipDEGCamItemGVehNuevo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeE770GDtipDEGCamItemGVehNuevo::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeE700GDtipDEGCamItem::GEN_TABLA);
            $c->addRealJoin(EkuDeE770GDtipDEGCamItemGVehNuevo::GEN_TABLA, EkuDeE770GDtipDEGCamItemGVehNuevo::GEN_ATTR_EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_ID, EkuDeE700GDtipDEGCamItem::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuDeE700GDtipDEGCamItem::getEkuDeE700GDtipDEGCamItems($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de EkuDeE700GDtipDEGCamItems relacionados a traves de EkuDeE770GDtipDEGCamItemGVehNuevo */ 	
	public function getCantidadEkuDeE700GDtipDEGCamItemsXEkuDeE770GDtipDEGCamItemGVehNuevo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(EkuDeE700GDtipDEGCamItem::GEN_ATTR_ID);
            if($estado){
                $c->add(EkuDeE700GDtipDEGCamItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeE770GDtipDEGCamItemGVehNuevo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeE770GDtipDEGCamItemGVehNuevo::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeE700GDtipDEGCamItem::GEN_TABLA);
            $c->addRealJoin(EkuDeE770GDtipDEGCamItemGVehNuevo::GEN_TABLA, EkuDeE770GDtipDEGCamItemGVehNuevo::GEN_ATTR_EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_ID, EkuDeE700GDtipDEGCamItem::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuDeE700GDtipDEGCamItem::getEkuDeE700GDtipDEGCamItems($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener EkuDeE700GDtipDEGCamItem (Objeto) relacionado a traves de EkuDeE770GDtipDEGCamItemGVehNuevo */ 	
	public function getEkuDeE700GDtipDEGCamItemXEkuDeE770GDtipDEGCamItemGVehNuevo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getEkuDeE700GDtipDEGCamItemsXEkuDeE770GDtipDEGCamItemGVehNuevo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getEkuDeE791GCamEspGGrupEners */ 	
	public function getEkuDeE791GCamEspGGrupEners($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeE791GCamEspGGrupEner::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeE791GCamEspGGrupEner::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeE791GCamEspGGrupEner::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeE791GCamEspGGrupEner::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeE791GCamEspGGrupEner::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeE791GCamEspGGrupEner::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeE791GCamEspGGrupEner::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeE791GCamEspGGrupEner::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudee791gcamespggrupeners = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudee791gcamespggrupener = EkuDeE791GCamEspGGrupEner::hidratarObjeto($fila);			
                $ekudee791gcamespggrupeners[] = $ekudee791gcamespggrupener;
            }

            return $ekudee791gcamespggrupeners;
	}	
	

	/* Método getEkuDeE791GCamEspGGrupEnersBloque para MasInfo */ 	
	public function getEkuDeE791GCamEspGGrupEnersParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeE791GCamEspGGrupEners($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeE791GCamEspGGrupEners Habilitados */ 	
	public function getEkuDeE791GCamEspGGrupEnersHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeE791GCamEspGGrupEners($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeE791GCamEspGGrupEner */ 	
	public function getEkuDeE791GCamEspGGrupEner($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeE791GCamEspGGrupEners($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeE791GCamEspGGrupEner relacionadas */ 	
	public function deleteEkuDeE791GCamEspGGrupEners(){
            $obs = $this->getEkuDeE791GCamEspGGrupEners();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeE791GCamEspGGrupEnersCmb() EkuDeE791GCamEspGGrupEner relacionadas */ 	
	public function getEkuDeE791GCamEspGGrupEnersCmb(){
            $c = new Criterio();
            $c->add(EkuDeE791GCamEspGGrupEner::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeE791GCamEspGGrupEner::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeE791GCamEspGGrupEner::getEkuDeE791GCamEspGGrupEnersCmbF(null, $c);
            return $os;
	}

	/* Metodo getEkuDeE800GCamEspGGrupSegs */ 	
	public function getEkuDeE800GCamEspGGrupSegs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeE800GCamEspGGrupSeg::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeE800GCamEspGGrupSeg::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeE800GCamEspGGrupSeg::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeE800GCamEspGGrupSeg::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeE800GCamEspGGrupSeg::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeE800GCamEspGGrupSeg::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeE800GCamEspGGrupSeg::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeE800GCamEspGGrupSeg::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudee800gcamespggrupsegs = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudee800gcamespggrupseg = EkuDeE800GCamEspGGrupSeg::hidratarObjeto($fila);			
                $ekudee800gcamespggrupsegs[] = $ekudee800gcamespggrupseg;
            }

            return $ekudee800gcamespggrupsegs;
	}	
	

	/* Método getEkuDeE800GCamEspGGrupSegsBloque para MasInfo */ 	
	public function getEkuDeE800GCamEspGGrupSegsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeE800GCamEspGGrupSegs($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeE800GCamEspGGrupSegs Habilitados */ 	
	public function getEkuDeE800GCamEspGGrupSegsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeE800GCamEspGGrupSegs($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeE800GCamEspGGrupSeg */ 	
	public function getEkuDeE800GCamEspGGrupSeg($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeE800GCamEspGGrupSegs($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeE800GCamEspGGrupSeg relacionadas */ 	
	public function deleteEkuDeE800GCamEspGGrupSegs(){
            $obs = $this->getEkuDeE800GCamEspGGrupSegs();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeE800GCamEspGGrupSegsCmb() EkuDeE800GCamEspGGrupSeg relacionadas */ 	
	public function getEkuDeE800GCamEspGGrupSegsCmb(){
            $c = new Criterio();
            $c->add(EkuDeE800GCamEspGGrupSeg::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeE800GCamEspGGrupSeg::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeE800GCamEspGGrupSeg::getEkuDeE800GCamEspGGrupSegsCmbF(null, $c);
            return $os;
	}

	/* Metodo getEkuDeEa790GCamEspGGrupSegGGrupPolSegs */ 	
	public function getEkuDeEa790GCamEspGGrupSegGGrupPolSegs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeEa790GCamEspGGrupSegGGrupPolSeg::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeEa790GCamEspGGrupSegGGrupPolSeg::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeEa790GCamEspGGrupSegGGrupPolSeg::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeEa790GCamEspGGrupSegGGrupPolSeg::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeEa790GCamEspGGrupSegGGrupPolSeg::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeEa790GCamEspGGrupSegGGrupPolSeg::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeEa790GCamEspGGrupSegGGrupPolSeg::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeEa790GCamEspGGrupSegGGrupPolSeg::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudeea790gcamespggrupsegggruppolsegs = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudeea790gcamespggrupsegggruppolseg = EkuDeEa790GCamEspGGrupSegGGrupPolSeg::hidratarObjeto($fila);			
                $ekudeea790gcamespggrupsegggruppolsegs[] = $ekudeea790gcamespggrupsegggruppolseg;
            }

            return $ekudeea790gcamespggrupsegggruppolsegs;
	}	
	

	/* Método getEkuDeEa790GCamEspGGrupSegGGrupPolSegsBloque para MasInfo */ 	
	public function getEkuDeEa790GCamEspGGrupSegGGrupPolSegsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeEa790GCamEspGGrupSegGGrupPolSegs($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeEa790GCamEspGGrupSegGGrupPolSegs Habilitados */ 	
	public function getEkuDeEa790GCamEspGGrupSegGGrupPolSegsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeEa790GCamEspGGrupSegGGrupPolSegs($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeEa790GCamEspGGrupSegGGrupPolSeg */ 	
	public function getEkuDeEa790GCamEspGGrupSegGGrupPolSeg($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeEa790GCamEspGGrupSegGGrupPolSegs($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeEa790GCamEspGGrupSegGGrupPolSeg relacionadas */ 	
	public function deleteEkuDeEa790GCamEspGGrupSegGGrupPolSegs(){
            $obs = $this->getEkuDeEa790GCamEspGGrupSegGGrupPolSegs();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeEa790GCamEspGGrupSegGGrupPolSegsCmb() EkuDeEa790GCamEspGGrupSegGGrupPolSeg relacionadas */ 	
	public function getEkuDeEa790GCamEspGGrupSegGGrupPolSegsCmb(){
            $c = new Criterio();
            $c->add(EkuDeEa790GCamEspGGrupSegGGrupPolSeg::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeEa790GCamEspGGrupSegGGrupPolSeg::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeEa790GCamEspGGrupSegGGrupPolSeg::getEkuDeEa790GCamEspGGrupSegGGrupPolSegsCmbF(null, $c);
            return $os;
	}

	/* Metodo getEkuDeE810GCamEspGGrupSups */ 	
	public function getEkuDeE810GCamEspGGrupSups($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeE810GCamEspGGrupSup::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeE810GCamEspGGrupSup::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeE810GCamEspGGrupSup::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeE810GCamEspGGrupSup::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeE810GCamEspGGrupSup::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeE810GCamEspGGrupSup::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeE810GCamEspGGrupSup::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeE810GCamEspGGrupSup::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudee810gcamespggrupsups = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudee810gcamespggrupsup = EkuDeE810GCamEspGGrupSup::hidratarObjeto($fila);			
                $ekudee810gcamespggrupsups[] = $ekudee810gcamespggrupsup;
            }

            return $ekudee810gcamespggrupsups;
	}	
	

	/* Método getEkuDeE810GCamEspGGrupSupsBloque para MasInfo */ 	
	public function getEkuDeE810GCamEspGGrupSupsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeE810GCamEspGGrupSups($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeE810GCamEspGGrupSups Habilitados */ 	
	public function getEkuDeE810GCamEspGGrupSupsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeE810GCamEspGGrupSups($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeE810GCamEspGGrupSup */ 	
	public function getEkuDeE810GCamEspGGrupSup($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeE810GCamEspGGrupSups($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeE810GCamEspGGrupSup relacionadas */ 	
	public function deleteEkuDeE810GCamEspGGrupSups(){
            $obs = $this->getEkuDeE810GCamEspGGrupSups();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeE810GCamEspGGrupSupsCmb() EkuDeE810GCamEspGGrupSup relacionadas */ 	
	public function getEkuDeE810GCamEspGGrupSupsCmb(){
            $c = new Criterio();
            $c->add(EkuDeE810GCamEspGGrupSup::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeE810GCamEspGGrupSup::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeE810GCamEspGGrupSup::getEkuDeE810GCamEspGGrupSupsCmbF(null, $c);
            return $os;
	}

	/* Metodo getEkuDeE820GCamEspGGrupAdis */ 	
	public function getEkuDeE820GCamEspGGrupAdis($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeE820GCamEspGGrupAdi::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeE820GCamEspGGrupAdi::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeE820GCamEspGGrupAdi::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeE820GCamEspGGrupAdi::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeE820GCamEspGGrupAdi::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeE820GCamEspGGrupAdi::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeE820GCamEspGGrupAdi::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeE820GCamEspGGrupAdi::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudee820gcamespggrupadis = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudee820gcamespggrupadi = EkuDeE820GCamEspGGrupAdi::hidratarObjeto($fila);			
                $ekudee820gcamespggrupadis[] = $ekudee820gcamespggrupadi;
            }

            return $ekudee820gcamespggrupadis;
	}	
	

	/* Método getEkuDeE820GCamEspGGrupAdisBloque para MasInfo */ 	
	public function getEkuDeE820GCamEspGGrupAdisParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeE820GCamEspGGrupAdis($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeE820GCamEspGGrupAdis Habilitados */ 	
	public function getEkuDeE820GCamEspGGrupAdisHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeE820GCamEspGGrupAdis($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeE820GCamEspGGrupAdi */ 	
	public function getEkuDeE820GCamEspGGrupAdi($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeE820GCamEspGGrupAdis($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeE820GCamEspGGrupAdi relacionadas */ 	
	public function deleteEkuDeE820GCamEspGGrupAdis(){
            $obs = $this->getEkuDeE820GCamEspGGrupAdis();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeE820GCamEspGGrupAdisCmb() EkuDeE820GCamEspGGrupAdi relacionadas */ 	
	public function getEkuDeE820GCamEspGGrupAdisCmb(){
            $c = new Criterio();
            $c->add(EkuDeE820GCamEspGGrupAdi::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeE820GCamEspGGrupAdi::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeE820GCamEspGGrupAdi::getEkuDeE820GCamEspGGrupAdisCmbF(null, $c);
            return $os;
	}

	/* Metodo getEkuDeE900GDtipDEGTransps */ 	
	public function getEkuDeE900GDtipDEGTransps($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeE900GDtipDEGTransp::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeE900GDtipDEGTransp::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeE900GDtipDEGTransp::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeE900GDtipDEGTransp::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeE900GDtipDEGTransp::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeE900GDtipDEGTransp::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeE900GDtipDEGTransp::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeE900GDtipDEGTransp::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudee900gdtipdegtransps = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudee900gdtipdegtransp = EkuDeE900GDtipDEGTransp::hidratarObjeto($fila);			
                $ekudee900gdtipdegtransps[] = $ekudee900gdtipdegtransp;
            }

            return $ekudee900gdtipdegtransps;
	}	
	

	/* Método getEkuDeE900GDtipDEGTranspsBloque para MasInfo */ 	
	public function getEkuDeE900GDtipDEGTranspsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeE900GDtipDEGTransps($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeE900GDtipDEGTransps Habilitados */ 	
	public function getEkuDeE900GDtipDEGTranspsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeE900GDtipDEGTransps($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeE900GDtipDEGTransp */ 	
	public function getEkuDeE900GDtipDEGTransp($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeE900GDtipDEGTransps($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeE900GDtipDEGTransp relacionadas */ 	
	public function deleteEkuDeE900GDtipDEGTransps(){
            $obs = $this->getEkuDeE900GDtipDEGTransps();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeE900GDtipDEGTranspsCmb() EkuDeE900GDtipDEGTransp relacionadas */ 	
	public function getEkuDeE900GDtipDEGTranspsCmb(){
            $c = new Criterio();
            $c->add(EkuDeE900GDtipDEGTransp::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeE900GDtipDEGTransp::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeE900GDtipDEGTransp::getEkuDeE900GDtipDEGTranspsCmbF(null, $c);
            return $os;
	}

	/* Metodo getEkuDeE920GDtipDEGTranspGCamSals */ 	
	public function getEkuDeE920GDtipDEGTranspGCamSals($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeE920GDtipDEGTranspGCamSal::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeE920GDtipDEGTranspGCamSal::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeE920GDtipDEGTranspGCamSal::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeE920GDtipDEGTranspGCamSal::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeE920GDtipDEGTranspGCamSal::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeE920GDtipDEGTranspGCamSal::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeE920GDtipDEGTranspGCamSal::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeE920GDtipDEGTranspGCamSal::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudee920gdtipdegtranspgcamsals = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudee920gdtipdegtranspgcamsal = EkuDeE920GDtipDEGTranspGCamSal::hidratarObjeto($fila);			
                $ekudee920gdtipdegtranspgcamsals[] = $ekudee920gdtipdegtranspgcamsal;
            }

            return $ekudee920gdtipdegtranspgcamsals;
	}	
	

	/* Método getEkuDeE920GDtipDEGTranspGCamSalsBloque para MasInfo */ 	
	public function getEkuDeE920GDtipDEGTranspGCamSalsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeE920GDtipDEGTranspGCamSals($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeE920GDtipDEGTranspGCamSals Habilitados */ 	
	public function getEkuDeE920GDtipDEGTranspGCamSalsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeE920GDtipDEGTranspGCamSals($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeE920GDtipDEGTranspGCamSal */ 	
	public function getEkuDeE920GDtipDEGTranspGCamSal($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeE920GDtipDEGTranspGCamSals($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeE920GDtipDEGTranspGCamSal relacionadas */ 	
	public function deleteEkuDeE920GDtipDEGTranspGCamSals(){
            $obs = $this->getEkuDeE920GDtipDEGTranspGCamSals();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeE920GDtipDEGTranspGCamSalsCmb() EkuDeE920GDtipDEGTranspGCamSal relacionadas */ 	
	public function getEkuDeE920GDtipDEGTranspGCamSalsCmb(){
            $c = new Criterio();
            $c->add(EkuDeE920GDtipDEGTranspGCamSal::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeE920GDtipDEGTranspGCamSal::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeE920GDtipDEGTranspGCamSal::getEkuDeE920GDtipDEGTranspGCamSalsCmbF(null, $c);
            return $os;
	}

	/* Metodo getEkuDeE940GDtipDEGTranspGCamEnts */ 	
	public function getEkuDeE940GDtipDEGTranspGCamEnts($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeE940GDtipDEGTranspGCamEnt::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeE940GDtipDEGTranspGCamEnt::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeE940GDtipDEGTranspGCamEnt::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeE940GDtipDEGTranspGCamEnt::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeE940GDtipDEGTranspGCamEnt::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeE940GDtipDEGTranspGCamEnt::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeE940GDtipDEGTranspGCamEnt::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeE940GDtipDEGTranspGCamEnt::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudee940gdtipdegtranspgcaments = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudee940gdtipdegtranspgcament = EkuDeE940GDtipDEGTranspGCamEnt::hidratarObjeto($fila);			
                $ekudee940gdtipdegtranspgcaments[] = $ekudee940gdtipdegtranspgcament;
            }

            return $ekudee940gdtipdegtranspgcaments;
	}	
	

	/* Método getEkuDeE940GDtipDEGTranspGCamEntsBloque para MasInfo */ 	
	public function getEkuDeE940GDtipDEGTranspGCamEntsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeE940GDtipDEGTranspGCamEnts($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeE940GDtipDEGTranspGCamEnts Habilitados */ 	
	public function getEkuDeE940GDtipDEGTranspGCamEntsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeE940GDtipDEGTranspGCamEnts($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeE940GDtipDEGTranspGCamEnt */ 	
	public function getEkuDeE940GDtipDEGTranspGCamEnt($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeE940GDtipDEGTranspGCamEnts($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeE940GDtipDEGTranspGCamEnt relacionadas */ 	
	public function deleteEkuDeE940GDtipDEGTranspGCamEnts(){
            $obs = $this->getEkuDeE940GDtipDEGTranspGCamEnts();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeE940GDtipDEGTranspGCamEntsCmb() EkuDeE940GDtipDEGTranspGCamEnt relacionadas */ 	
	public function getEkuDeE940GDtipDEGTranspGCamEntsCmb(){
            $c = new Criterio();
            $c->add(EkuDeE940GDtipDEGTranspGCamEnt::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeE940GDtipDEGTranspGCamEnt::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeE940GDtipDEGTranspGCamEnt::getEkuDeE940GDtipDEGTranspGCamEntsCmbF(null, $c);
            return $os;
	}

	/* Metodo getEkuDeE960GDtipDEGTranspGVehTrass */ 	
	public function getEkuDeE960GDtipDEGTranspGVehTrass($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeE960GDtipDEGTranspGVehTras::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeE960GDtipDEGTranspGVehTras::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeE960GDtipDEGTranspGVehTras::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeE960GDtipDEGTranspGVehTras::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeE960GDtipDEGTranspGVehTras::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeE960GDtipDEGTranspGVehTras::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeE960GDtipDEGTranspGVehTras::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeE960GDtipDEGTranspGVehTras::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudee960gdtipdegtranspgvehtrass = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudee960gdtipdegtranspgvehtras = EkuDeE960GDtipDEGTranspGVehTras::hidratarObjeto($fila);			
                $ekudee960gdtipdegtranspgvehtrass[] = $ekudee960gdtipdegtranspgvehtras;
            }

            return $ekudee960gdtipdegtranspgvehtrass;
	}	
	

	/* Método getEkuDeE960GDtipDEGTranspGVehTrassBloque para MasInfo */ 	
	public function getEkuDeE960GDtipDEGTranspGVehTrassParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeE960GDtipDEGTranspGVehTrass($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeE960GDtipDEGTranspGVehTrass Habilitados */ 	
	public function getEkuDeE960GDtipDEGTranspGVehTrassHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeE960GDtipDEGTranspGVehTrass($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeE960GDtipDEGTranspGVehTras */ 	
	public function getEkuDeE960GDtipDEGTranspGVehTras($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeE960GDtipDEGTranspGVehTrass($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeE960GDtipDEGTranspGVehTras relacionadas */ 	
	public function deleteEkuDeE960GDtipDEGTranspGVehTrass(){
            $obs = $this->getEkuDeE960GDtipDEGTranspGVehTrass();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeE960GDtipDEGTranspGVehTrassCmb() EkuDeE960GDtipDEGTranspGVehTras relacionadas */ 	
	public function getEkuDeE960GDtipDEGTranspGVehTrassCmb(){
            $c = new Criterio();
            $c->add(EkuDeE960GDtipDEGTranspGVehTras::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeE960GDtipDEGTranspGVehTras::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeE960GDtipDEGTranspGVehTras::getEkuDeE960GDtipDEGTranspGVehTrassCmbF(null, $c);
            return $os;
	}

	/* Metodo getEkuDeE980GDtipDEGTranspGCamTranss */ 	
	public function getEkuDeE980GDtipDEGTranspGCamTranss($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeE980GDtipDEGTranspGCamTrans::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeE980GDtipDEGTranspGCamTrans::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeE980GDtipDEGTranspGCamTrans::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeE980GDtipDEGTranspGCamTrans::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeE980GDtipDEGTranspGCamTrans::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeE980GDtipDEGTranspGCamTrans::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeE980GDtipDEGTranspGCamTrans::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeE980GDtipDEGTranspGCamTrans::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudee980gdtipdegtranspgcamtranss = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudee980gdtipdegtranspgcamtrans = EkuDeE980GDtipDEGTranspGCamTrans::hidratarObjeto($fila);			
                $ekudee980gdtipdegtranspgcamtranss[] = $ekudee980gdtipdegtranspgcamtrans;
            }

            return $ekudee980gdtipdegtranspgcamtranss;
	}	
	

	/* Método getEkuDeE980GDtipDEGTranspGCamTranssBloque para MasInfo */ 	
	public function getEkuDeE980GDtipDEGTranspGCamTranssParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeE980GDtipDEGTranspGCamTranss($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeE980GDtipDEGTranspGCamTranss Habilitados */ 	
	public function getEkuDeE980GDtipDEGTranspGCamTranssHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeE980GDtipDEGTranspGCamTranss($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeE980GDtipDEGTranspGCamTrans */ 	
	public function getEkuDeE980GDtipDEGTranspGCamTrans($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeE980GDtipDEGTranspGCamTranss($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeE980GDtipDEGTranspGCamTrans relacionadas */ 	
	public function deleteEkuDeE980GDtipDEGTranspGCamTranss(){
            $obs = $this->getEkuDeE980GDtipDEGTranspGCamTranss();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeE980GDtipDEGTranspGCamTranssCmb() EkuDeE980GDtipDEGTranspGCamTrans relacionadas */ 	
	public function getEkuDeE980GDtipDEGTranspGCamTranssCmb(){
            $c = new Criterio();
            $c->add(EkuDeE980GDtipDEGTranspGCamTrans::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeE980GDtipDEGTranspGCamTrans::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeE980GDtipDEGTranspGCamTrans::getEkuDeE980GDtipDEGTranspGCamTranssCmbF(null, $c);
            return $os;
	}

	/* Metodo getEkuDeF001GTotSubs */ 	
	public function getEkuDeF001GTotSubs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeF001GTotSub::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeF001GTotSub::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeF001GTotSub::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeF001GTotSub::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeF001GTotSub::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeF001GTotSub::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeF001GTotSub::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeF001GTotSub::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudef001gtotsubs = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudef001gtotsub = EkuDeF001GTotSub::hidratarObjeto($fila);			
                $ekudef001gtotsubs[] = $ekudef001gtotsub;
            }

            return $ekudef001gtotsubs;
	}	
	

	/* Método getEkuDeF001GTotSubsBloque para MasInfo */ 	
	public function getEkuDeF001GTotSubsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeF001GTotSubs($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeF001GTotSubs Habilitados */ 	
	public function getEkuDeF001GTotSubsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeF001GTotSubs($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeF001GTotSub */ 	
	public function getEkuDeF001GTotSub($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeF001GTotSubs($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeF001GTotSub relacionadas */ 	
	public function deleteEkuDeF001GTotSubs(){
            $obs = $this->getEkuDeF001GTotSubs();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeF001GTotSubsCmb() EkuDeF001GTotSub relacionadas */ 	
	public function getEkuDeF001GTotSubsCmb(){
            $c = new Criterio();
            $c->add(EkuDeF001GTotSub::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeF001GTotSub::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeF001GTotSub::getEkuDeF001GTotSubsCmbF(null, $c);
            return $os;
	}

	/* Metodo getEkuDeG001GCamGens */ 	
	public function getEkuDeG001GCamGens($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeG001GCamGen::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeG001GCamGen::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeG001GCamGen::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeG001GCamGen::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeG001GCamGen::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeG001GCamGen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeG001GCamGen::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeG001GCamGen::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudeg001gcamgens = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudeg001gcamgen = EkuDeG001GCamGen::hidratarObjeto($fila);			
                $ekudeg001gcamgens[] = $ekudeg001gcamgen;
            }

            return $ekudeg001gcamgens;
	}	
	

	/* Método getEkuDeG001GCamGensBloque para MasInfo */ 	
	public function getEkuDeG001GCamGensParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeG001GCamGens($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeG001GCamGens Habilitados */ 	
	public function getEkuDeG001GCamGensHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeG001GCamGens($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeG001GCamGen */ 	
	public function getEkuDeG001GCamGen($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeG001GCamGens($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeG001GCamGen relacionadas */ 	
	public function deleteEkuDeG001GCamGens(){
            $obs = $this->getEkuDeG001GCamGens();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeG001GCamGensCmb() EkuDeG001GCamGen relacionadas */ 	
	public function getEkuDeG001GCamGensCmb(){
            $c = new Criterio();
            $c->add(EkuDeG001GCamGen::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeG001GCamGen::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeG001GCamGen::getEkuDeG001GCamGensCmbF(null, $c);
            return $os;
	}

	/* Metodo getEkuDeG050GCamGenGCamCargs */ 	
	public function getEkuDeG050GCamGenGCamCargs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeG050GCamGenGCamCarg::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeG050GCamGenGCamCarg::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeG050GCamGenGCamCarg::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeG050GCamGenGCamCarg::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeG050GCamGenGCamCarg::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeG050GCamGenGCamCarg::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeG050GCamGenGCamCarg::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeG050GCamGenGCamCarg::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudeg050gcamgengcamcargs = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudeg050gcamgengcamcarg = EkuDeG050GCamGenGCamCarg::hidratarObjeto($fila);			
                $ekudeg050gcamgengcamcargs[] = $ekudeg050gcamgengcamcarg;
            }

            return $ekudeg050gcamgengcamcargs;
	}	
	

	/* Método getEkuDeG050GCamGenGCamCargsBloque para MasInfo */ 	
	public function getEkuDeG050GCamGenGCamCargsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeG050GCamGenGCamCargs($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeG050GCamGenGCamCargs Habilitados */ 	
	public function getEkuDeG050GCamGenGCamCargsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeG050GCamGenGCamCargs($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeG050GCamGenGCamCarg */ 	
	public function getEkuDeG050GCamGenGCamCarg($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeG050GCamGenGCamCargs($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeG050GCamGenGCamCarg relacionadas */ 	
	public function deleteEkuDeG050GCamGenGCamCargs(){
            $obs = $this->getEkuDeG050GCamGenGCamCargs();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeG050GCamGenGCamCargsCmb() EkuDeG050GCamGenGCamCarg relacionadas */ 	
	public function getEkuDeG050GCamGenGCamCargsCmb(){
            $c = new Criterio();
            $c->add(EkuDeG050GCamGenGCamCarg::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeG050GCamGenGCamCarg::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeG050GCamGenGCamCarg::getEkuDeG050GCamGenGCamCargsCmbF(null, $c);
            return $os;
	}

	/* Metodo getEkuDeH001GCamDEAsocs */ 	
	public function getEkuDeH001GCamDEAsocs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeH001GCamDEAsoc::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeH001GCamDEAsoc::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeH001GCamDEAsoc::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeH001GCamDEAsoc::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeH001GCamDEAsoc::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeH001GCamDEAsoc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeH001GCamDEAsoc::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeH001GCamDEAsoc::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudeh001gcamdeasocs = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudeh001gcamdeasoc = EkuDeH001GCamDEAsoc::hidratarObjeto($fila);			
                $ekudeh001gcamdeasocs[] = $ekudeh001gcamdeasoc;
            }

            return $ekudeh001gcamdeasocs;
	}	
	

	/* Método getEkuDeH001GCamDEAsocsBloque para MasInfo */ 	
	public function getEkuDeH001GCamDEAsocsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeH001GCamDEAsocs($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeH001GCamDEAsocs Habilitados */ 	
	public function getEkuDeH001GCamDEAsocsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeH001GCamDEAsocs($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeH001GCamDEAsoc */ 	
	public function getEkuDeH001GCamDEAsoc($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeH001GCamDEAsocs($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeH001GCamDEAsoc relacionadas */ 	
	public function deleteEkuDeH001GCamDEAsocs(){
            $obs = $this->getEkuDeH001GCamDEAsocs();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeH001GCamDEAsocsCmb() EkuDeH001GCamDEAsoc relacionadas */ 	
	public function getEkuDeH001GCamDEAsocsCmb(){
            $c = new Criterio();
            $c->add(EkuDeH001GCamDEAsoc::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeH001GCamDEAsoc::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeH001GCamDEAsoc::getEkuDeH001GCamDEAsocsCmbF(null, $c);
            return $os;
	}

	/* Metodo getEkuDeI001Signatures */ 	
	public function getEkuDeI001Signatures($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeI001Signature::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeI001Signature::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeI001Signature::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeI001Signature::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeI001Signature::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeI001Signature::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeI001Signature::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeI001Signature::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudei001signatures = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudei001signature = EkuDeI001Signature::hidratarObjeto($fila);			
                $ekudei001signatures[] = $ekudei001signature;
            }

            return $ekudei001signatures;
	}	
	

	/* Método getEkuDeI001SignaturesBloque para MasInfo */ 	
	public function getEkuDeI001SignaturesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeI001Signatures($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeI001Signatures Habilitados */ 	
	public function getEkuDeI001SignaturesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeI001Signatures($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeI001Signature */ 	
	public function getEkuDeI001Signature($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeI001Signatures($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeI001Signature relacionadas */ 	
	public function deleteEkuDeI001Signatures(){
            $obs = $this->getEkuDeI001Signatures();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeI001SignaturesCmb() EkuDeI001Signature relacionadas */ 	
	public function getEkuDeI001SignaturesCmb(){
            $c = new Criterio();
            $c->add(EkuDeI001Signature::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeI001Signature::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeI001Signature::getEkuDeI001SignaturesCmbF(null, $c);
            return $os;
	}

	/* Metodo getEkuDeJ001GCamFuFDs */ 	
	public function getEkuDeJ001GCamFuFDs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeJ001GCamFuFD::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeJ001GCamFuFD::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeJ001GCamFuFD::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeJ001GCamFuFD::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeJ001GCamFuFD::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeJ001GCamFuFD::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeJ001GCamFuFD::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeJ001GCamFuFD::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudej001gcamfufds = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudej001gcamfufd = EkuDeJ001GCamFuFD::hidratarObjeto($fila);			
                $ekudej001gcamfufds[] = $ekudej001gcamfufd;
            }

            return $ekudej001gcamfufds;
	}	
	

	/* Método getEkuDeJ001GCamFuFDsBloque para MasInfo */ 	
	public function getEkuDeJ001GCamFuFDsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeJ001GCamFuFDs($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeJ001GCamFuFDs Habilitados */ 	
	public function getEkuDeJ001GCamFuFDsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeJ001GCamFuFDs($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeJ001GCamFuFD */ 	
	public function getEkuDeJ001GCamFuFD($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeJ001GCamFuFDs($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeJ001GCamFuFD relacionadas */ 	
	public function deleteEkuDeJ001GCamFuFDs(){
            $obs = $this->getEkuDeJ001GCamFuFDs();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeJ001GCamFuFDsCmb() EkuDeJ001GCamFuFD relacionadas */ 	
	public function getEkuDeJ001GCamFuFDsCmb(){
            $c = new Criterio();
            $c->add(EkuDeJ001GCamFuFD::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeJ001GCamFuFD::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeJ001GCamFuFD::getEkuDeJ001GCamFuFDsCmbF(null, $c);
            return $os;
	}

	/* Metodo getEkuDeAsch01Reqs */ 	
	public function getEkuDeAsch01Reqs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeAsch01Req::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeAsch01Req::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeAsch01Req::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeAsch01Req::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeAsch01Req::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeAsch01Req::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeAsch01Req::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeAsch01Req::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudeasch01reqs = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudeasch01req = EkuDeAsch01Req::hidratarObjeto($fila);			
                $ekudeasch01reqs[] = $ekudeasch01req;
            }

            return $ekudeasch01reqs;
	}	
	

	/* Método getEkuDeAsch01ReqsBloque para MasInfo */ 	
	public function getEkuDeAsch01ReqsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeAsch01Reqs($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeAsch01Reqs Habilitados */ 	
	public function getEkuDeAsch01ReqsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeAsch01Reqs($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeAsch01Req */ 	
	public function getEkuDeAsch01Req($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeAsch01Reqs($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeAsch01Req relacionadas */ 	
	public function deleteEkuDeAsch01Reqs(){
            $obs = $this->getEkuDeAsch01Reqs();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeAsch01ReqsCmb() EkuDeAsch01Req relacionadas */ 	
	public function getEkuDeAsch01ReqsCmb(){
            $c = new Criterio();
            $c->add(EkuDeAsch01Req::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeAsch01Req::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeAsch01Req::getEkuDeAsch01ReqsCmbF(null, $c);
            return $os;
	}

	/* Metodo getEkuDeArsch01Resps */ 	
	public function getEkuDeArsch01Resps($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeArsch01Resp::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeArsch01Resp::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeArsch01Resp::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeArsch01Resp::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeArsch01Resp::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeArsch01Resp::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeArsch01Resp::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeArsch01Resp::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudearsch01resps = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudearsch01resp = EkuDeArsch01Resp::hidratarObjeto($fila);			
                $ekudearsch01resps[] = $ekudearsch01resp;
            }

            return $ekudearsch01resps;
	}	
	

	/* Método getEkuDeArsch01RespsBloque para MasInfo */ 	
	public function getEkuDeArsch01RespsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeArsch01Resps($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeArsch01Resps Habilitados */ 	
	public function getEkuDeArsch01RespsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeArsch01Resps($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeArsch01Resp */ 	
	public function getEkuDeArsch01Resp($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeArsch01Resps($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeArsch01Resp relacionadas */ 	
	public function deleteEkuDeArsch01Resps(){
            $obs = $this->getEkuDeArsch01Resps();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeArsch01RespsCmb() EkuDeArsch01Resp relacionadas */ 	
	public function getEkuDeArsch01RespsCmb(){
            $c = new Criterio();
            $c->add(EkuDeArsch01Resp::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeArsch01Resp::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeArsch01Resp::getEkuDeArsch01RespsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener EkuDeAsch01Reqs (Coleccion) relacionados a traves de EkuDeArsch01Resp */ 	
	public function getEkuDeAsch01ReqsXEkuDeArsch01Resp($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(EkuDeAsch01Req::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeArsch01Resp::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeArsch01Resp::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeAsch01Req::GEN_TABLA);
            $c->addRealJoin(EkuDeArsch01Resp::GEN_TABLA, EkuDeArsch01Resp::GEN_ATTR_EKU_DE_ASCH01_REQ_ID, EkuDeAsch01Req::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuDeAsch01Req::getEkuDeAsch01Reqs($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de EkuDeAsch01Reqs relacionados a traves de EkuDeArsch01Resp */ 	
	public function getCantidadEkuDeAsch01ReqsXEkuDeArsch01Resp($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(EkuDeAsch01Req::GEN_ATTR_ID);
            if($estado){
                $c->add(EkuDeAsch01Req::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeArsch01Resp::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeArsch01Resp::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeAsch01Req::GEN_TABLA);
            $c->addRealJoin(EkuDeArsch01Resp::GEN_TABLA, EkuDeArsch01Resp::GEN_ATTR_EKU_DE_ASCH01_REQ_ID, EkuDeAsch01Req::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuDeAsch01Req::getEkuDeAsch01Reqs($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener EkuDeAsch01Req (Objeto) relacionado a traves de EkuDeArsch01Resp */ 	
	public function getEkuDeAsch01ReqXEkuDeArsch01Resp($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getEkuDeAsch01ReqsXEkuDeArsch01Resp($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getEkuDeArsch01RespMensajes */ 	
	public function getEkuDeArsch01RespMensajes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeArsch01RespMensaje::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeArsch01RespMensaje::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeArsch01RespMensaje::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeArsch01RespMensaje::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeArsch01RespMensaje::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeArsch01RespMensaje::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeArsch01RespMensaje::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeArsch01RespMensaje::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudearsch01respmensajes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudearsch01respmensaje = EkuDeArsch01RespMensaje::hidratarObjeto($fila);			
                $ekudearsch01respmensajes[] = $ekudearsch01respmensaje;
            }

            return $ekudearsch01respmensajes;
	}	
	

	/* Método getEkuDeArsch01RespMensajesBloque para MasInfo */ 	
	public function getEkuDeArsch01RespMensajesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeArsch01RespMensajes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeArsch01RespMensajes Habilitados */ 	
	public function getEkuDeArsch01RespMensajesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeArsch01RespMensajes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeArsch01RespMensaje */ 	
	public function getEkuDeArsch01RespMensaje($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeArsch01RespMensajes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeArsch01RespMensaje relacionadas */ 	
	public function deleteEkuDeArsch01RespMensajes(){
            $obs = $this->getEkuDeArsch01RespMensajes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeArsch01RespMensajesCmb() EkuDeArsch01RespMensaje relacionadas */ 	
	public function getEkuDeArsch01RespMensajesCmb(){
            $c = new Criterio();
            $c->add(EkuDeArsch01RespMensaje::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeArsch01RespMensaje::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeArsch01RespMensaje::getEkuDeArsch01RespMensajesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener EkuDeAsch01Reqs (Coleccion) relacionados a traves de EkuDeArsch01RespMensaje */ 	
	public function getEkuDeAsch01ReqsXEkuDeArsch01RespMensaje($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(EkuDeAsch01Req::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeArsch01RespMensaje::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeArsch01RespMensaje::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeAsch01Req::GEN_TABLA);
            $c->addRealJoin(EkuDeArsch01RespMensaje::GEN_TABLA, EkuDeArsch01RespMensaje::GEN_ATTR_EKU_DE_ASCH01_REQ_ID, EkuDeAsch01Req::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuDeAsch01Req::getEkuDeAsch01Reqs($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de EkuDeAsch01Reqs relacionados a traves de EkuDeArsch01RespMensaje */ 	
	public function getCantidadEkuDeAsch01ReqsXEkuDeArsch01RespMensaje($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(EkuDeAsch01Req::GEN_ATTR_ID);
            if($estado){
                $c->add(EkuDeAsch01Req::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeArsch01RespMensaje::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeArsch01RespMensaje::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeAsch01Req::GEN_TABLA);
            $c->addRealJoin(EkuDeArsch01RespMensaje::GEN_TABLA, EkuDeArsch01RespMensaje::GEN_ATTR_EKU_DE_ASCH01_REQ_ID, EkuDeAsch01Req::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuDeAsch01Req::getEkuDeAsch01Reqs($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener EkuDeAsch01Req (Objeto) relacionado a traves de EkuDeArsch01RespMensaje */ 	
	public function getEkuDeAsch01ReqXEkuDeArsch01RespMensaje($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getEkuDeAsch01ReqsXEkuDeArsch01RespMensaje($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getEkuDeOpeEstados */ 	
	public function getEkuDeOpeEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeOpeEstado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeOpeEstado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeOpeEstado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeOpeEstado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeOpeEstado::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeOpeEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeOpeEstado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeOpeEstado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudeopeestados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudeopeestado = EkuDeOpeEstado::hidratarObjeto($fila);			
                $ekudeopeestados[] = $ekudeopeestado;
            }

            return $ekudeopeestados;
	}	
	

	/* Método getEkuDeOpeEstadosBloque para MasInfo */ 	
	public function getEkuDeOpeEstadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeOpeEstados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeOpeEstados Habilitados */ 	
	public function getEkuDeOpeEstadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeOpeEstados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeOpeEstado */ 	
	public function getEkuDeOpeEstado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeOpeEstados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeOpeEstado relacionadas */ 	
	public function deleteEkuDeOpeEstados(){
            $obs = $this->getEkuDeOpeEstados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeOpeEstadosCmb() EkuDeOpeEstado relacionadas */ 	
	public function getEkuDeOpeEstadosCmb(){
            $c = new Criterio();
            $c->add(EkuDeOpeEstado::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeOpeEstado::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeOpeEstado::getEkuDeOpeEstadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener EkuDeOpeTipoEstados (Coleccion) relacionados a traves de EkuDeOpeEstado */ 	
	public function getEkuDeOpeTipoEstadosXEkuDeOpeEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(EkuDeOpeTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeOpeEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeOpeEstado::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeOpeTipoEstado::GEN_TABLA);
            $c->addRealJoin(EkuDeOpeEstado::GEN_TABLA, EkuDeOpeEstado::GEN_ATTR_EKU_DE_OPE_TIPO_ESTADO_ID, EkuDeOpeTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuDeOpeTipoEstado::getEkuDeOpeTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de EkuDeOpeTipoEstados relacionados a traves de EkuDeOpeEstado */ 	
	public function getCantidadEkuDeOpeTipoEstadosXEkuDeOpeEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(EkuDeOpeTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(EkuDeOpeTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeOpeEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeOpeEstado::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeOpeTipoEstado::GEN_TABLA);
            $c->addRealJoin(EkuDeOpeEstado::GEN_TABLA, EkuDeOpeEstado::GEN_ATTR_EKU_DE_OPE_TIPO_ESTADO_ID, EkuDeOpeTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuDeOpeTipoEstado::getEkuDeOpeTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener EkuDeOpeTipoEstado (Objeto) relacionado a traves de EkuDeOpeEstado */ 	
	public function getEkuDeOpeTipoEstadoXEkuDeOpeEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getEkuDeOpeTipoEstadosXEkuDeOpeEstado($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getEkuDeVtaFacturas */ 	
	public function getEkuDeVtaFacturas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeVtaFactura::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeVtaFactura::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeVtaFactura::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeVtaFactura::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeVtaFactura::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeVtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeVtaFactura::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeVtaFactura::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudevtafacturas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudevtafactura = EkuDeVtaFactura::hidratarObjeto($fila);			
                $ekudevtafacturas[] = $ekudevtafactura;
            }

            return $ekudevtafacturas;
	}	
	

	/* Método getEkuDeVtaFacturasBloque para MasInfo */ 	
	public function getEkuDeVtaFacturasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeVtaFacturas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeVtaFacturas Habilitados */ 	
	public function getEkuDeVtaFacturasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeVtaFacturas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeVtaFactura */ 	
	public function getEkuDeVtaFactura($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeVtaFacturas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeVtaFactura relacionadas */ 	
	public function deleteEkuDeVtaFacturas(){
            $obs = $this->getEkuDeVtaFacturas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeVtaFacturasCmb() EkuDeVtaFactura relacionadas */ 	
	public function getEkuDeVtaFacturasCmb(){
            $c = new Criterio();
            $c->add(EkuDeVtaFactura::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeVtaFactura::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeVtaFactura::getEkuDeVtaFacturasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaFacturas (Coleccion) relacionados a traves de EkuDeVtaFactura */ 	
	public function getVtaFacturasXEkuDeVtaFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeVtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeVtaFactura::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addRealJoin(EkuDeVtaFactura::GEN_TABLA, EkuDeVtaFactura::GEN_ATTR_VTA_FACTURA_ID, VtaFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaFactura::getVtaFacturas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaFacturas relacionados a traves de EkuDeVtaFactura */ 	
	public function getCantidadVtaFacturasXEkuDeVtaFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaFactura::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeVtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeVtaFactura::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addRealJoin(EkuDeVtaFactura::GEN_TABLA, EkuDeVtaFactura::GEN_ATTR_VTA_FACTURA_ID, VtaFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaFactura::getVtaFacturas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaFactura (Objeto) relacionado a traves de EkuDeVtaFactura */ 	
	public function getVtaFacturaXEkuDeVtaFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaFacturasXEkuDeVtaFactura($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getEkuDeVtaNotaCreditos */ 	
	public function getEkuDeVtaNotaCreditos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeVtaNotaCredito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeVtaNotaCredito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeVtaNotaCredito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeVtaNotaCredito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeVtaNotaCredito::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeVtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeVtaNotaCredito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeVtaNotaCredito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudevtanotacreditos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudevtanotacredito = EkuDeVtaNotaCredito::hidratarObjeto($fila);			
                $ekudevtanotacreditos[] = $ekudevtanotacredito;
            }

            return $ekudevtanotacreditos;
	}	
	

	/* Método getEkuDeVtaNotaCreditosBloque para MasInfo */ 	
	public function getEkuDeVtaNotaCreditosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeVtaNotaCreditos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeVtaNotaCreditos Habilitados */ 	
	public function getEkuDeVtaNotaCreditosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeVtaNotaCreditos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeVtaNotaCredito */ 	
	public function getEkuDeVtaNotaCredito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeVtaNotaCreditos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeVtaNotaCredito relacionadas */ 	
	public function deleteEkuDeVtaNotaCreditos(){
            $obs = $this->getEkuDeVtaNotaCreditos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeVtaNotaCreditosCmb() EkuDeVtaNotaCredito relacionadas */ 	
	public function getEkuDeVtaNotaCreditosCmb(){
            $c = new Criterio();
            $c->add(EkuDeVtaNotaCredito::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeVtaNotaCredito::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeVtaNotaCredito::getEkuDeVtaNotaCreditosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaNotaCreditos (Coleccion) relacionados a traves de EkuDeVtaNotaCredito */ 	
	public function getVtaNotaCreditosXEkuDeVtaNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeVtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeVtaNotaCredito::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaCredito::GEN_TABLA);
            $c->addRealJoin(EkuDeVtaNotaCredito::GEN_TABLA, EkuDeVtaNotaCredito::GEN_ATTR_VTA_NOTA_CREDITO_ID, VtaNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaCredito::getVtaNotaCreditos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaNotaCreditos relacionados a traves de EkuDeVtaNotaCredito */ 	
	public function getCantidadVtaNotaCreditosXEkuDeVtaNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaNotaCredito::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeVtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeVtaNotaCredito::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaCredito::GEN_TABLA);
            $c->addRealJoin(EkuDeVtaNotaCredito::GEN_TABLA, EkuDeVtaNotaCredito::GEN_ATTR_VTA_NOTA_CREDITO_ID, VtaNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaCredito::getVtaNotaCreditos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaNotaCredito (Objeto) relacionado a traves de EkuDeVtaNotaCredito */ 	
	public function getVtaNotaCreditoXEkuDeVtaNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaNotaCreditosXEkuDeVtaNotaCredito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getEkuDeVtaNotaDebitos */ 	
	public function getEkuDeVtaNotaDebitos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeVtaNotaDebito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeVtaNotaDebito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeVtaNotaDebito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeVtaNotaDebito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeVtaNotaDebito::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeVtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeVtaNotaDebito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeVtaNotaDebito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudevtanotadebitos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudevtanotadebito = EkuDeVtaNotaDebito::hidratarObjeto($fila);			
                $ekudevtanotadebitos[] = $ekudevtanotadebito;
            }

            return $ekudevtanotadebitos;
	}	
	

	/* Método getEkuDeVtaNotaDebitosBloque para MasInfo */ 	
	public function getEkuDeVtaNotaDebitosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeVtaNotaDebitos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeVtaNotaDebitos Habilitados */ 	
	public function getEkuDeVtaNotaDebitosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeVtaNotaDebitos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeVtaNotaDebito */ 	
	public function getEkuDeVtaNotaDebito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeVtaNotaDebitos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeVtaNotaDebito relacionadas */ 	
	public function deleteEkuDeVtaNotaDebitos(){
            $obs = $this->getEkuDeVtaNotaDebitos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeVtaNotaDebitosCmb() EkuDeVtaNotaDebito relacionadas */ 	
	public function getEkuDeVtaNotaDebitosCmb(){
            $c = new Criterio();
            $c->add(EkuDeVtaNotaDebito::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeVtaNotaDebito::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeVtaNotaDebito::getEkuDeVtaNotaDebitosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaNotaDebitos (Coleccion) relacionados a traves de EkuDeVtaNotaDebito */ 	
	public function getVtaNotaDebitosXEkuDeVtaNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeVtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeVtaNotaDebito::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->addRealJoin(EkuDeVtaNotaDebito::GEN_TABLA, EkuDeVtaNotaDebito::GEN_ATTR_VTA_NOTA_DEBITO_ID, VtaNotaDebito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaDebito::getVtaNotaDebitos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaNotaDebitos relacionados a traves de EkuDeVtaNotaDebito */ 	
	public function getCantidadVtaNotaDebitosXEkuDeVtaNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaNotaDebito::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeVtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeVtaNotaDebito::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->addRealJoin(EkuDeVtaNotaDebito::GEN_TABLA, EkuDeVtaNotaDebito::GEN_ATTR_VTA_NOTA_DEBITO_ID, VtaNotaDebito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaDebito::getVtaNotaDebitos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaNotaDebito (Objeto) relacionado a traves de EkuDeVtaNotaDebito */ 	
	public function getVtaNotaDebitoXEkuDeVtaNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaNotaDebitosXEkuDeVtaNotaDebito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getEkuDeVtaRemitos */ 	
	public function getEkuDeVtaRemitos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeVtaRemito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeVtaRemito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeVtaRemito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeVtaRemito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeVtaRemito::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeVtaRemito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeVtaRemito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeVtaRemito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudevtaremitos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudevtaremito = EkuDeVtaRemito::hidratarObjeto($fila);			
                $ekudevtaremitos[] = $ekudevtaremito;
            }

            return $ekudevtaremitos;
	}	
	

	/* Método getEkuDeVtaRemitosBloque para MasInfo */ 	
	public function getEkuDeVtaRemitosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeVtaRemitos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeVtaRemitos Habilitados */ 	
	public function getEkuDeVtaRemitosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeVtaRemitos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeVtaRemito */ 	
	public function getEkuDeVtaRemito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeVtaRemitos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeVtaRemito relacionadas */ 	
	public function deleteEkuDeVtaRemitos(){
            $obs = $this->getEkuDeVtaRemitos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeVtaRemitosCmb() EkuDeVtaRemito relacionadas */ 	
	public function getEkuDeVtaRemitosCmb(){
            $c = new Criterio();
            $c->add(EkuDeVtaRemito::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeVtaRemito::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeVtaRemito::getEkuDeVtaRemitosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaRemitos (Coleccion) relacionados a traves de EkuDeVtaRemito */ 	
	public function getVtaRemitosXEkuDeVtaRemito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaRemito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeVtaRemito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeVtaRemito::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRemito::GEN_TABLA);
            $c->addRealJoin(EkuDeVtaRemito::GEN_TABLA, EkuDeVtaRemito::GEN_ATTR_VTA_REMITO_ID, VtaRemito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaRemito::getVtaRemitos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaRemitos relacionados a traves de EkuDeVtaRemito */ 	
	public function getCantidadVtaRemitosXEkuDeVtaRemito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaRemito::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaRemito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeVtaRemito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeVtaRemito::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRemito::GEN_TABLA);
            $c->addRealJoin(EkuDeVtaRemito::GEN_TABLA, EkuDeVtaRemito::GEN_ATTR_VTA_REMITO_ID, VtaRemito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaRemito::getVtaRemitos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaRemito (Objeto) relacionado a traves de EkuDeVtaRemito */ 	
	public function getVtaRemitoXEkuDeVtaRemito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaRemitosXEkuDeVtaRemito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getEkuEves */ 	
	public function getEkuEves($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuEve::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuEve::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuEve::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuEve::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuEve::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuEve::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuEve::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuEve::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekueves = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekueve = EkuEve::hidratarObjeto($fila);			
                $ekueves[] = $ekueve;
            }

            return $ekueves;
	}	
	

	/* Método getEkuEvesBloque para MasInfo */ 	
	public function getEkuEvesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuEves($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuEves Habilitados */ 	
	public function getEkuEvesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuEves($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuEve */ 	
	public function getEkuEve($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuEves($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuEve relacionadas */ 	
	public function deleteEkuEves(){
            $obs = $this->getEkuEves();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuEvesCmb() EkuEve relacionadas */ 	
	public function getEkuEvesCmb(){
            $c = new Criterio();
            $c->add(EkuEve::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuEve::GEN_TABLA);
            $c->setCriterios();

            $os = EkuEve::getEkuEvesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener EkuEveTipoEventos (Coleccion) relacionados a traves de EkuEve */ 	
	public function getEkuEveTipoEventosXEkuEve($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(EkuEveTipoEvento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuEve::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuEve::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuEveTipoEvento::GEN_TABLA);
            $c->addRealJoin(EkuEve::GEN_TABLA, EkuEve::GEN_ATTR_EKU_EVE_TIPO_EVENTO_ID, EkuEveTipoEvento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuEveTipoEvento::getEkuEveTipoEventos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de EkuEveTipoEventos relacionados a traves de EkuEve */ 	
	public function getCantidadEkuEveTipoEventosXEkuEve($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(EkuEveTipoEvento::GEN_ATTR_ID);
            if($estado){
                $c->add(EkuEveTipoEvento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuEve::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuEve::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuEveTipoEvento::GEN_TABLA);
            $c->addRealJoin(EkuEve::GEN_TABLA, EkuEve::GEN_ATTR_EKU_EVE_TIPO_EVENTO_ID, EkuEveTipoEvento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuEveTipoEvento::getEkuEveTipoEventos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener EkuEveTipoEvento (Objeto) relacionado a traves de EkuEve */ 	
	public function getEkuEveTipoEventoXEkuEve($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getEkuEveTipoEventosXEkuEve($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getEkuEveResps */ 	
	public function getEkuEveResps($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuEveResp::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuEveResp::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuEveResp::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuEveResp::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuEveResp::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuEveResp::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuEveResp::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuEveResp::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekueveresps = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekueveresp = EkuEveResp::hidratarObjeto($fila);			
                $ekueveresps[] = $ekueveresp;
            }

            return $ekueveresps;
	}	
	

	/* Método getEkuEveRespsBloque para MasInfo */ 	
	public function getEkuEveRespsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuEveResps($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuEveResps Habilitados */ 	
	public function getEkuEveRespsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuEveResps($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuEveResp */ 	
	public function getEkuEveResp($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuEveResps($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuEveResp relacionadas */ 	
	public function deleteEkuEveResps(){
            $obs = $this->getEkuEveResps();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuEveRespsCmb() EkuEveResp relacionadas */ 	
	public function getEkuEveRespsCmb(){
            $c = new Criterio();
            $c->add(EkuEveResp::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuEveResp::GEN_TABLA);
            $c->setCriterios();

            $os = EkuEveResp::getEkuEveRespsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener EkuEves (Coleccion) relacionados a traves de EkuEveResp */ 	
	public function getEkuEvesXEkuEveResp($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(EkuEve::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuEveResp::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuEveResp::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuEve::GEN_TABLA);
            $c->addRealJoin(EkuEveResp::GEN_TABLA, EkuEveResp::GEN_ATTR_EKU_EVE_ID, EkuEve::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuEve::getEkuEves($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de EkuEves relacionados a traves de EkuEveResp */ 	
	public function getCantidadEkuEvesXEkuEveResp($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(EkuEve::GEN_ATTR_ID);
            if($estado){
                $c->add(EkuEve::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuEveResp::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuEveResp::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuEve::GEN_TABLA);
            $c->addRealJoin(EkuEveResp::GEN_TABLA, EkuEveResp::GEN_ATTR_EKU_EVE_ID, EkuEve::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuEve::getEkuEves($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener EkuEve (Objeto) relacionado a traves de EkuEveResp */ 	
	public function getEkuEveXEkuEveResp($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getEkuEvesXEkuEveResp($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los VtaFacturas asignados a EkuDe */ 	
	public function getEkuDeVtaFacturasId(){
            $ids = array();
            foreach($this->getEkuDeVtaFacturas() as $o){
            
                $ids[] = $o->getVtaFacturaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaFacturas asignados al EkuDe */ 	
	public function setEkuDeVtaFacturas($ids){
            $this->deleteEkuDeVtaFacturas();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new EkuDeVtaFactura();
                    $o->setVtaFacturaId($id);
                    $o->setEkuDeId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaFactura en el alta de EkuDe */ 	
	public function getAltaMostrarBloqueRelacionEkuDeVtaFactura(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaNotaCreditos asignados a EkuDe */ 	
	public function getEkuDeVtaNotaCreditosId(){
            $ids = array();
            foreach($this->getEkuDeVtaNotaCreditos() as $o){
            
                $ids[] = $o->getVtaNotaCreditoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaNotaCreditos asignados al EkuDe */ 	
	public function setEkuDeVtaNotaCreditos($ids){
            $this->deleteEkuDeVtaNotaCreditos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new EkuDeVtaNotaCredito();
                    $o->setVtaNotaCreditoId($id);
                    $o->setEkuDeId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaNotaCredito en el alta de EkuDe */ 	
	public function getAltaMostrarBloqueRelacionEkuDeVtaNotaCredito(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaNotaDebitos asignados a EkuDe */ 	
	public function getEkuDeVtaNotaDebitosId(){
            $ids = array();
            foreach($this->getEkuDeVtaNotaDebitos() as $o){
            
                $ids[] = $o->getVtaNotaDebitoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaNotaDebitos asignados al EkuDe */ 	
	public function setEkuDeVtaNotaDebitos($ids){
            $this->deleteEkuDeVtaNotaDebitos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new EkuDeVtaNotaDebito();
                    $o->setVtaNotaDebitoId($id);
                    $o->setEkuDeId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaNotaDebito en el alta de EkuDe */ 	
	public function getAltaMostrarBloqueRelacionEkuDeVtaNotaDebito(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaRemitos asignados a EkuDe */ 	
	public function getEkuDeVtaRemitosId(){
            $ids = array();
            foreach($this->getEkuDeVtaRemitos() as $o){
            
                $ids[] = $o->getVtaRemitoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaRemitos asignados al EkuDe */ 	
	public function setEkuDeVtaRemitos($ids){
            $this->deleteEkuDeVtaRemitos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new EkuDeVtaRemito();
                    $o->setVtaRemitoId($id);
                    $o->setEkuDeId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaRemito en el alta de EkuDe */ 	
	public function getAltaMostrarBloqueRelacionEkuDeVtaRemito(){
            return true;
	}
	

	/* Metodo que retorna el EkuDeOpeTipoEstado (Clave Foranea) */ 	
    public function getEkuDeOpeTipoEstado(){
        $o = new EkuDeOpeTipoEstado();
        $o->setId($this->getEkuDeOpeTipoEstadoId());
        return $o;			
    }

	/* Metodo que retorna el EkuDeOpeTipoEstado (Clave Foranea) en Array */ 	
    public function getEkuDeOpeTipoEstadoEnArray(&$arr_os){
        if($this->getEkuDeOpeTipoEstadoId() != 'null'){
            if(isset($arr_os[$this->getEkuDeOpeTipoEstadoId()])){
                $o = $arr_os[$this->getEkuDeOpeTipoEstadoId()];
            }else{
                $o = EkuDeOpeTipoEstado::getOxId($this->getEkuDeOpeTipoEstadoId());
                if($o){
                    $arr_os[$this->getEkuDeOpeTipoEstadoId()] = $o;
                }
            }
        }else{
            $o = new EkuDeOpeTipoEstado();
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
            		
        if($contexto_solicitante != EkuDeOpeTipoEstado::GEN_CLASE){
            if($this->getEkuDeOpeTipoEstado()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(EkuDeOpeTipoEstado::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getEkuDeOpeTipoEstado()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM eku_de'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'eku_de';");
            
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

            $obs = self::getEkuDes($paginador, $criterio);
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

            $obs = self::getEkuDes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDes($paginador, $criterio);
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

            $obs = self::getEkuDes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_de_ope_tipo_estado_id' */ 	
	static function getOxEkuDeOpeTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_DE_OPE_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_de_ope_tipo_estado_id' */ 	
	static function getOsxEkuDeOpeTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_DE_OPE_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_dverfor' */ 	
	static function getOxEkuDverfor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_DVERFOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_dverfor' */ 	
	static function getOsxEkuDverfor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_DVERFOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_a002_id_cdc' */ 	
	static function getOxEkuA002IdCdc($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_A002_ID_CDC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_a002_id_cdc' */ 	
	static function getOsxEkuA002IdCdc($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_A002_ID_CDC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_a003_ddvid' */ 	
	static function getOxEkuA003Ddvid($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_A003_DDVID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_a003_ddvid' */ 	
	static function getOsxEkuA003Ddvid($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_A003_DDVID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_a004_dfecfirma' */ 	
	static function getOxEkuA004Dfecfirma($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_A004_DFECFIRMA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_a004_dfecfirma' */ 	
	static function getOsxEkuA004Dfecfirma($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_A004_DFECFIRMA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_a005_dsisfact' */ 	
	static function getOxEkuA005Dsisfact($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_A005_DSISFACT, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_a005_dsisfact' */ 	
	static function getOsxEkuA005Dsisfact($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_A005_DSISFACT, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_de_xml' */ 	
	static function getOxEkuDeXml($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_DE_XML, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_de_xml' */ 	
	static function getOsxEkuDeXml($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_DE_XML, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_pp02_id_cdc' */ 	
	static function getOxEkuPp02IdCdc($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_PP02_ID_CDC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_pp02_id_cdc' */ 	
	static function getOsxEkuPp02IdCdc($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_PP02_ID_CDC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_pp03_ddecproc' */ 	
	static function getOxEkuPp03Ddecproc($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_PP03_DDECPROC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_pp03_ddecproc' */ 	
	static function getOsxEkuPp03Ddecproc($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_PP03_DDECPROC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_pp04_ddigval' */ 	
	static function getOxEkuPp04Ddigval($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_PP04_DDIGVAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_pp04_ddigval' */ 	
	static function getOsxEkuPp04Ddigval($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_PP04_DDIGVAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_pp050_destres' */ 	
	static function getOxEkuPp050Destres($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_PP050_DESTRES, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_pp050_destres' */ 	
	static function getOsxEkuPp050Destres($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_PP050_DESTRES, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_pp051_dprotaut' */ 	
	static function getOxEkuPp051Dprotaut($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_PP051_DPROTAUT, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_pp051_dprotaut' */ 	
	static function getOsxEkuPp051Dprotaut($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_PP051_DPROTAUT, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDes($paginador, $criterio);
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

            $obs = self::getEkuDes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDes($paginador, $criterio);
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

            $obs = self::getEkuDes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDes($paginador, $criterio);
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

            $obs = self::getEkuDes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDes($paginador, $criterio);
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

            $obs = self::getEkuDes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDes($paginador, $criterio);
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

            $obs = self::getEkuDes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDes($paginador, $criterio);
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

            $obs = self::getEkuDes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDes($paginador, $criterio);
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

            $obs = self::getEkuDes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDes($paginador, $criterio);
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

            $obs = self::getEkuDes(null, $criterio);
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

            $obs = self::getEkuDes($paginador, $criterio);
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

            $obs = self::getEkuDes($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'eku_de_adm');
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

	/* setea EkuDeOpeEstado actual del 'EkuDe' */ 	
	public function setEkuDeOpeEstadoDesdeBackend($codigo, $observacion){
            return $this->setEkuDeOpeEstado($codigo, $observacion);
        }
        

	/* setea EkuDeOpeEstado actual del 'EkuDe' */ 	
	public function setEkuDeOpeEstado($codigo, $observacion){
            
            // --------------------------------------------------------------------
            // se actualizan los campos actual de todos los EkuDeOpeEstado del EkuDe
            // --------------------------------------------------------------------
            $inicial = 1;
            foreach ($this->getEkuDeOpeEstados() as $eku_de_ope_estado) {
                $eku_de_ope_estado->setActual(0);
                $eku_de_ope_estado->save();

                $inicial = 0;
            }

            // --------------------------------------------------------------------
            // se agrega el nuevo EkuDeOpeEstado del EkuDe        
            // --------------------------------------------------------------------
            $eku_de_ope_tipo_estado = EkuDeOpeTipoEstado::getOxCodigo($codigo);

            $eku_de_ope_estado = new EkuDeOpeEstado();
            $eku_de_ope_estado->setEkuDeId($this->getId());
            $eku_de_ope_estado->setEkuDeOpeTipoEstadoId($eku_de_ope_tipo_estado->getId());
            $eku_de_ope_estado->setInicial($inicial);
            $eku_de_ope_estado->setActual(1);
            $eku_de_ope_estado->setEstado(1);
            $eku_de_ope_estado->setObservacion($observacion);
            $eku_de_ope_estado->save();

            // --------------------------------------------------------------------
            // se actualiza el EkuDeOpeEstado en EkuDe        
            // --------------------------------------------------------------------
            $this->setEkuDeOpeTipoEstadoId($eku_de_ope_tipo_estado->getId());
            $this->saveDesdeProceso();

            return $eku_de_ope_estado;
	}

	/* devuelve el EkuDeOpeEstado actual del 'EkuDe' */ 	
	public function getEkuDeOpeEstadoActual(){
            
            $c = new Criterio();
            $c->add(EkuDeOpeEstado::GEN_ATTR_EKU_DE_ID, $this->getId(), Criterio::IGUAL);
            $c->add(EkuDeOpeEstado::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
            $c->addTabla(EkuDeOpeEstado::GEN_TABLA);
            $c->setCriterios();

            $eku_de_ope_estados = EkuDeOpeEstado::getEkuDeOpeEstados(null, $c);
            foreach ($eku_de_ope_estados as $eku_de_ope_estado) {
                return $eku_de_ope_estado;
            }
            return false;
	}

	/* devuelve el EkuDeOpeTipoEstado potenciales para el 'EkuDe' */ 	
	public function getEkuDeOpeTipoEstadosPotenciales(){
            $eku_de_ope_tipo_estados = EkuDeOpeTipoEstado::getEkuDeOpeTipoEstados(null, null, true);
            return $eku_de_ope_tipo_estados;
	}

	/* devuelve el EkuDeOpeTipoEstado en CMB potenciales para el 'EkuDe' */ 	
	public function getEkuDeOpeTipoEstadosPotencialesCmb(){
            $cont = 0;
            $arr = array();
            foreach ($this->getEkuDeOpeTipoEstadosPotenciales() as $eku_de_ope_tipo_estado) {
                $cont++;
                $arr[$cont]['cod'] = $eku_de_ope_tipo_estado->getId();
                $arr[$cont]['descripcion'] = $eku_de_ope_tipo_estado->getDescripcionParaSelect();
            }
            return $arr;
	}
	
            /**
             * Metodo que retorna una coleccion de descripciones unificada para usar en autosuggest
             */
            static function getArrDescripcionsUnificado(){
                $c = new Criterio();
                $c->addTabla(EkuDe::GEN_TABLA);
                $c->addOrden(EkuDe::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $eku_des = EkuDe::getEkuDes(null, $c);

                $arr = array();
                foreach($eku_des as $eku_de){
                    $descripcion = $eku_de->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>