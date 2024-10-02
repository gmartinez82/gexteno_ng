<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BEkuDeC001GTimb
{ 
	
	const SES_PAGINACION = 'adm_ekudec001gtimb_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_ekudec001gtimb_paginas_registros';
	const SES_CRITERIOS = 'adm_ekudec001gtimb_criterios';
	
	const GEN_CLASE = 'EkuDeC001GTimb';
	const GEN_TABLA = 'eku_de_c001_g_timb';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BEkuDeC001GTimb */ 
	const GEN_ATTR_ID = 'eku_de_c001_g_timb.id';
	const GEN_ATTR_DESCRIPCION = 'eku_de_c001_g_timb.descripcion';
	const GEN_ATTR_EKU_DE_ID = 'eku_de_c001_g_timb.eku_de_id';
	const GEN_ATTR_EKU_C002_ITIDE = 'eku_de_c001_g_timb.eku_c002_itide';
	const GEN_ATTR_EKU_C003_DDESTIDE = 'eku_de_c001_g_timb.eku_c003_ddestide';
	const GEN_ATTR_EKU_C004_DNUMTIM = 'eku_de_c001_g_timb.eku_c004_dnumtim';
	const GEN_ATTR_EKU_C005_DEST = 'eku_de_c001_g_timb.eku_c005_dest';
	const GEN_ATTR_EKU_C006_DPUNEXP = 'eku_de_c001_g_timb.eku_c006_dpunexp';
	const GEN_ATTR_EKU_C007_DNUMDOC = 'eku_de_c001_g_timb.eku_c007_dnumdoc';
	const GEN_ATTR_EKU_C010_DSERIENUM = 'eku_de_c001_g_timb.eku_c010_dserienum';
	const GEN_ATTR_EKU_C008_DFEINIT = 'eku_de_c001_g_timb.eku_c008_dfeinit';
	const GEN_ATTR_EKU_C009_DFEFINT = 'eku_de_c001_g_timb.eku_c009_dfefint';
	const GEN_ATTR_CODIGO = 'eku_de_c001_g_timb.codigo';
	const GEN_ATTR_OBSERVACION = 'eku_de_c001_g_timb.observacion';
	const GEN_ATTR_ORDEN = 'eku_de_c001_g_timb.orden';
	const GEN_ATTR_ESTADO = 'eku_de_c001_g_timb.estado';
	const GEN_ATTR_CREADO = 'eku_de_c001_g_timb.creado';
	const GEN_ATTR_CREADO_POR = 'eku_de_c001_g_timb.creado_por';
	const GEN_ATTR_MODIFICADO = 'eku_de_c001_g_timb.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'eku_de_c001_g_timb.modificado_por';

	/* Constantes de Atributos Min de BEkuDeC001GTimb */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_EKU_DE_ID = 'eku_de_id';
	const GEN_ATTR_MIN_EKU_C002_ITIDE = 'eku_c002_itide';
	const GEN_ATTR_MIN_EKU_C003_DDESTIDE = 'eku_c003_ddestide';
	const GEN_ATTR_MIN_EKU_C004_DNUMTIM = 'eku_c004_dnumtim';
	const GEN_ATTR_MIN_EKU_C005_DEST = 'eku_c005_dest';
	const GEN_ATTR_MIN_EKU_C006_DPUNEXP = 'eku_c006_dpunexp';
	const GEN_ATTR_MIN_EKU_C007_DNUMDOC = 'eku_c007_dnumdoc';
	const GEN_ATTR_MIN_EKU_C010_DSERIENUM = 'eku_c010_dserienum';
	const GEN_ATTR_MIN_EKU_C008_DFEINIT = 'eku_c008_dfeinit';
	const GEN_ATTR_MIN_EKU_C009_DFEFINT = 'eku_c009_dfefint';
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
	

	/* Atributos de BEkuDeC001GTimb */ 
	private $id;
	private $descripcion;
	private $eku_de_id;
	private $eku_c002_itide;
	private $eku_c003_ddestide;
	private $eku_c004_dnumtim;
	private $eku_c005_dest;
	private $eku_c006_dpunexp;
	private $eku_c007_dnumdoc;
	private $eku_c010_dserienum;
	private $eku_c008_dfeinit;
	private $eku_c009_dfefint;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BEkuDeC001GTimb */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getEkuDeId(){ if(isset($this->eku_de_id)){ return $this->eku_de_id; }else{ return 'null'; } }
	public function getEkuC002Itide(){ if(isset($this->eku_c002_itide)){ return $this->eku_c002_itide; }else{ return ''; } }
	public function getEkuC003Ddestide(){ if(isset($this->eku_c003_ddestide)){ return $this->eku_c003_ddestide; }else{ return ''; } }
	public function getEkuC004Dnumtim(){ if(isset($this->eku_c004_dnumtim)){ return $this->eku_c004_dnumtim; }else{ return ''; } }
	public function getEkuC005Dest(){ if(isset($this->eku_c005_dest)){ return $this->eku_c005_dest; }else{ return ''; } }
	public function getEkuC006Dpunexp(){ if(isset($this->eku_c006_dpunexp)){ return $this->eku_c006_dpunexp; }else{ return ''; } }
	public function getEkuC007Dnumdoc(){ if(isset($this->eku_c007_dnumdoc)){ return $this->eku_c007_dnumdoc; }else{ return ''; } }
	public function getEkuC010Dserienum(){ if(isset($this->eku_c010_dserienum)){ return $this->eku_c010_dserienum; }else{ return ''; } }
	public function getEkuC008Dfeinit(){ if(isset($this->eku_c008_dfeinit)){ return $this->eku_c008_dfeinit; }else{ return ''; } }
	public function getEkuC009Dfefint(){ if(isset($this->eku_c009_dfefint)){ return $this->eku_c009_dfefint; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BEkuDeC001GTimb */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_EKU_DE_ID."
				, ".self::GEN_ATTR_EKU_C002_ITIDE."
				, ".self::GEN_ATTR_EKU_C003_DDESTIDE."
				, ".self::GEN_ATTR_EKU_C004_DNUMTIM."
				, ".self::GEN_ATTR_EKU_C005_DEST."
				, ".self::GEN_ATTR_EKU_C006_DPUNEXP."
				, ".self::GEN_ATTR_EKU_C007_DNUMDOC."
				, ".self::GEN_ATTR_EKU_C010_DSERIENUM."
				, ".self::GEN_ATTR_EKU_C008_DFEINIT."
				, ".self::GEN_ATTR_EKU_C009_DFEFINT."
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
				$this->setEkuDeId($fila[self::GEN_ATTR_MIN_EKU_DE_ID]);
				$this->setEkuC002Itide($fila[self::GEN_ATTR_MIN_EKU_C002_ITIDE]);
				$this->setEkuC003Ddestide($fila[self::GEN_ATTR_MIN_EKU_C003_DDESTIDE]);
				$this->setEkuC004Dnumtim($fila[self::GEN_ATTR_MIN_EKU_C004_DNUMTIM]);
				$this->setEkuC005Dest($fila[self::GEN_ATTR_MIN_EKU_C005_DEST]);
				$this->setEkuC006Dpunexp($fila[self::GEN_ATTR_MIN_EKU_C006_DPUNEXP]);
				$this->setEkuC007Dnumdoc($fila[self::GEN_ATTR_MIN_EKU_C007_DNUMDOC]);
				$this->setEkuC010Dserienum($fila[self::GEN_ATTR_MIN_EKU_C010_DSERIENUM]);
				$this->setEkuC008Dfeinit($fila[self::GEN_ATTR_MIN_EKU_C008_DFEINIT]);
				$this->setEkuC009Dfefint($fila[self::GEN_ATTR_MIN_EKU_C009_DFEFINT]);
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
	public function setEkuDeId($v){ $this->eku_de_id = $v; }
	public function setEkuC002Itide($v){ $this->eku_c002_itide = $v; }
	public function setEkuC003Ddestide($v){ $this->eku_c003_ddestide = $v; }
	public function setEkuC004Dnumtim($v){ $this->eku_c004_dnumtim = $v; }
	public function setEkuC005Dest($v){ $this->eku_c005_dest = $v; }
	public function setEkuC006Dpunexp($v){ $this->eku_c006_dpunexp = $v; }
	public function setEkuC007Dnumdoc($v){ $this->eku_c007_dnumdoc = $v; }
	public function setEkuC010Dserienum($v){ $this->eku_c010_dserienum = $v; }
	public function setEkuC008Dfeinit($v){ $this->eku_c008_dfeinit = $v; }
	public function setEkuC009Dfefint($v){ $this->eku_c009_dfefint = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new EkuDeC001GTimb();
            $o->setId($fila[EkuDeC001GTimb::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setEkuDeId($fila[self::GEN_ATTR_MIN_EKU_DE_ID]);
			$o->setEkuC002Itide($fila[self::GEN_ATTR_MIN_EKU_C002_ITIDE]);
			$o->setEkuC003Ddestide($fila[self::GEN_ATTR_MIN_EKU_C003_DDESTIDE]);
			$o->setEkuC004Dnumtim($fila[self::GEN_ATTR_MIN_EKU_C004_DNUMTIM]);
			$o->setEkuC005Dest($fila[self::GEN_ATTR_MIN_EKU_C005_DEST]);
			$o->setEkuC006Dpunexp($fila[self::GEN_ATTR_MIN_EKU_C006_DPUNEXP]);
			$o->setEkuC007Dnumdoc($fila[self::GEN_ATTR_MIN_EKU_C007_DNUMDOC]);
			$o->setEkuC010Dserienum($fila[self::GEN_ATTR_MIN_EKU_C010_DSERIENUM]);
			$o->setEkuC008Dfeinit($fila[self::GEN_ATTR_MIN_EKU_C008_DFEINIT]);
			$o->setEkuC009Dfefint($fila[self::GEN_ATTR_MIN_EKU_C009_DFEFINT]);
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

	/* Control de BEkuDeC001GTimb */ 	
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

	/* Cambia el estado de BEkuDeC001GTimb */ 	
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

	/* Save de BEkuDeC001GTimb */ 	
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
						, ".self::GEN_ATTR_MIN_EKU_DE_ID."
						, ".self::GEN_ATTR_MIN_EKU_C002_ITIDE."
						, ".self::GEN_ATTR_MIN_EKU_C003_DDESTIDE."
						, ".self::GEN_ATTR_MIN_EKU_C004_DNUMTIM."
						, ".self::GEN_ATTR_MIN_EKU_C005_DEST."
						, ".self::GEN_ATTR_MIN_EKU_C006_DPUNEXP."
						, ".self::GEN_ATTR_MIN_EKU_C007_DNUMDOC."
						, ".self::GEN_ATTR_MIN_EKU_C010_DSERIENUM."
						, ".self::GEN_ATTR_MIN_EKU_C008_DFEINIT."
						, ".self::GEN_ATTR_MIN_EKU_C009_DFEFINT."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('eku_de_c001_g_timb_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getEkuDeId()."
						, '".$this->getEkuC002Itide()."'
						, '".$this->getEkuC003Ddestide()."'
						, '".$this->getEkuC004Dnumtim()."'
						, '".$this->getEkuC005Dest()."'
						, '".$this->getEkuC006Dpunexp()."'
						, '".$this->getEkuC007Dnumdoc()."'
						, '".$this->getEkuC010Dserienum()."'
						, '".$this->getEkuC008Dfeinit()."'
						, '".$this->getEkuC009Dfefint()."'
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('eku_de_c001_g_timb_seq')";
            
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
                 
				 ".EkuDeC001GTimb::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_EKU_DE_ID." = ".$this->getEkuDeId()."
						, ".self::GEN_ATTR_MIN_EKU_C002_ITIDE." = '".$this->getEkuC002Itide()."'
						, ".self::GEN_ATTR_MIN_EKU_C003_DDESTIDE." = '".$this->getEkuC003Ddestide()."'
						, ".self::GEN_ATTR_MIN_EKU_C004_DNUMTIM." = '".$this->getEkuC004Dnumtim()."'
						, ".self::GEN_ATTR_MIN_EKU_C005_DEST." = '".$this->getEkuC005Dest()."'
						, ".self::GEN_ATTR_MIN_EKU_C006_DPUNEXP." = '".$this->getEkuC006Dpunexp()."'
						, ".self::GEN_ATTR_MIN_EKU_C007_DNUMDOC." = '".$this->getEkuC007Dnumdoc()."'
						, ".self::GEN_ATTR_MIN_EKU_C010_DSERIENUM." = '".$this->getEkuC010Dserienum()."'
						, ".self::GEN_ATTR_MIN_EKU_C008_DFEINIT." = '".$this->getEkuC008Dfeinit()."'
						, ".self::GEN_ATTR_MIN_EKU_C009_DFEFINT." = '".$this->getEkuC009Dfefint()."'
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
						, ".self::GEN_ATTR_MIN_EKU_DE_ID."
						, ".self::GEN_ATTR_MIN_EKU_C002_ITIDE."
						, ".self::GEN_ATTR_MIN_EKU_C003_DDESTIDE."
						, ".self::GEN_ATTR_MIN_EKU_C004_DNUMTIM."
						, ".self::GEN_ATTR_MIN_EKU_C005_DEST."
						, ".self::GEN_ATTR_MIN_EKU_C006_DPUNEXP."
						, ".self::GEN_ATTR_MIN_EKU_C007_DNUMDOC."
						, ".self::GEN_ATTR_MIN_EKU_C010_DSERIENUM."
						, ".self::GEN_ATTR_MIN_EKU_C008_DFEINIT."
						, ".self::GEN_ATTR_MIN_EKU_C009_DFEFINT."
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
						, ".$this->getEkuDeId()."
						, '".$this->getEkuC002Itide()."'
						, '".$this->getEkuC003Ddestide()."'
						, '".$this->getEkuC004Dnumtim()."'
						, '".$this->getEkuC005Dest()."'
						, '".$this->getEkuC006Dpunexp()."'
						, '".$this->getEkuC007Dnumdoc()."'
						, '".$this->getEkuC010Dserienum()."'
						, '".$this->getEkuC008Dfeinit()."'
						, '".$this->getEkuC009Dfefint()."'
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
                     
				 ".EkuDeC001GTimb::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_EKU_DE_ID." = ".$this->getEkuDeId()."
						, ".self::GEN_ATTR_MIN_EKU_C002_ITIDE." = '".$this->getEkuC002Itide()."'
						, ".self::GEN_ATTR_MIN_EKU_C003_DDESTIDE." = '".$this->getEkuC003Ddestide()."'
						, ".self::GEN_ATTR_MIN_EKU_C004_DNUMTIM." = '".$this->getEkuC004Dnumtim()."'
						, ".self::GEN_ATTR_MIN_EKU_C005_DEST." = '".$this->getEkuC005Dest()."'
						, ".self::GEN_ATTR_MIN_EKU_C006_DPUNEXP." = '".$this->getEkuC006Dpunexp()."'
						, ".self::GEN_ATTR_MIN_EKU_C007_DNUMDOC." = '".$this->getEkuC007Dnumdoc()."'
						, ".self::GEN_ATTR_MIN_EKU_C010_DSERIENUM." = '".$this->getEkuC010Dserienum()."'
						, ".self::GEN_ATTR_MIN_EKU_C008_DFEINIT." = '".$this->getEkuC008Dfeinit()."'
						, ".self::GEN_ATTR_MIN_EKU_C009_DFEFINT." = '".$this->getEkuC009Dfefint()."'
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
            $o = new EkuDeC001GTimb();
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

	/* Delete de BEkuDeC001GTimb */ 	
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
	
	public function duplicarEkuDeC001GTimb(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getEkuDeC001GTimbs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = EkuDeC001GTimb::setAplicarFiltrosDeAlcance($criterio);

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
	
		$ekudec001gtimbs = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $ekudec001gtimb = new EkuDeC001GTimb();
                    $ekudec001gtimb->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $ekudec001gtimb->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$ekudec001gtimb->setEkuDeId($fila[self::GEN_ATTR_MIN_EKU_DE_ID]);
			$ekudec001gtimb->setEkuC002Itide($fila[self::GEN_ATTR_MIN_EKU_C002_ITIDE]);
			$ekudec001gtimb->setEkuC003Ddestide($fila[self::GEN_ATTR_MIN_EKU_C003_DDESTIDE]);
			$ekudec001gtimb->setEkuC004Dnumtim($fila[self::GEN_ATTR_MIN_EKU_C004_DNUMTIM]);
			$ekudec001gtimb->setEkuC005Dest($fila[self::GEN_ATTR_MIN_EKU_C005_DEST]);
			$ekudec001gtimb->setEkuC006Dpunexp($fila[self::GEN_ATTR_MIN_EKU_C006_DPUNEXP]);
			$ekudec001gtimb->setEkuC007Dnumdoc($fila[self::GEN_ATTR_MIN_EKU_C007_DNUMDOC]);
			$ekudec001gtimb->setEkuC010Dserienum($fila[self::GEN_ATTR_MIN_EKU_C010_DSERIENUM]);
			$ekudec001gtimb->setEkuC008Dfeinit($fila[self::GEN_ATTR_MIN_EKU_C008_DFEINIT]);
			$ekudec001gtimb->setEkuC009Dfefint($fila[self::GEN_ATTR_MIN_EKU_C009_DFEFINT]);
			$ekudec001gtimb->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$ekudec001gtimb->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$ekudec001gtimb->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$ekudec001gtimb->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$ekudec001gtimb->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$ekudec001gtimb->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$ekudec001gtimb->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$ekudec001gtimb->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $ekudec001gtimbs[] = $ekudec001gtimb;
		}
		
		return $ekudec001gtimbs;
	}	
	

	/* Método getEkuDeC001GTimbs Habilitados */ 	
	static function getEkuDeC001GTimbsHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return EkuDeC001GTimb::getEkuDeC001GTimbs($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getEkuDeC001GTimbs para listado de Backend */ 	
	static function getEkuDeC001GTimbsDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return EkuDeC001GTimb::getEkuDeC001GTimbs($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getEkuDeC001GTimbsCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = EkuDeC001GTimb::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = EkuDeC001GTimb::getEkuDeC001GTimbs($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getEkuDeC001GTimbs filtrado para select */ 	
	static function getEkuDeC001GTimbsCmbF($paginador = null, $criterio = null){
            $col = EkuDeC001GTimb::getEkuDeC001GTimbs($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getEkuDeC001GTimbs filtrado por una coleccion de objetos foraneos de EkuDe */ 	
	static function getEkuDeC001GTimbsXEkuDes($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(EkuDeC001GTimb::GEN_ATTR_EKU_DE_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(EkuDeC001GTimb::GEN_TABLA);
            $c->addOrden(EkuDeC001GTimb::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = EkuDeC001GTimb::getEkuDeC001GTimbs($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getEkuDeId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'eku_de_c001_g_timb_adm.php';
            $url_gestion = 'eku_de_c001_g_timb_gestion.php';
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
	

	/* Metodo que retorna el EkuDe (Clave Foranea) */ 	
    public function getEkuDe(){
        $o = new EkuDe();
        $o->setId($this->getEkuDeId());
        return $o;			
    }

	/* Metodo que retorna el EkuDe (Clave Foranea) en Array */ 	
    public function getEkuDeEnArray(&$arr_os){
        if($this->getEkuDeId() != 'null'){
            if(isset($arr_os[$this->getEkuDeId()])){
                $o = $arr_os[$this->getEkuDeId()];
            }else{
                $o = EkuDe::getOxId($this->getEkuDeId());
                if($o){
                    $arr_os[$this->getEkuDeId()] = $o;
                }
            }
        }else{
            $o = new EkuDe();
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
            		
        if($contexto_solicitante != EkuDe::GEN_CLASE){
            if($this->getEkuDe()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(EkuDe::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getEkuDe()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM eku_de_c001_g_timb'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'eku_de_c001_g_timb';");
            
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

            $obs = self::getEkuDeC001GTimbs($paginador, $criterio);
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

            $obs = self::getEkuDeC001GTimbs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeC001GTimbs($paginador, $criterio);
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

            $obs = self::getEkuDeC001GTimbs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_de_id' */ 	
	static function getOxEkuDeId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_DE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeC001GTimbs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_de_id' */ 	
	static function getOsxEkuDeId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_DE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeC001GTimbs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_c002_itide' */ 	
	static function getOxEkuC002Itide($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_C002_ITIDE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeC001GTimbs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_c002_itide' */ 	
	static function getOsxEkuC002Itide($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_C002_ITIDE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeC001GTimbs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_c003_ddestide' */ 	
	static function getOxEkuC003Ddestide($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_C003_DDESTIDE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeC001GTimbs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_c003_ddestide' */ 	
	static function getOsxEkuC003Ddestide($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_C003_DDESTIDE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeC001GTimbs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_c004_dnumtim' */ 	
	static function getOxEkuC004Dnumtim($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_C004_DNUMTIM, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeC001GTimbs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_c004_dnumtim' */ 	
	static function getOsxEkuC004Dnumtim($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_C004_DNUMTIM, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeC001GTimbs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_c005_dest' */ 	
	static function getOxEkuC005Dest($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_C005_DEST, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeC001GTimbs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_c005_dest' */ 	
	static function getOsxEkuC005Dest($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_C005_DEST, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeC001GTimbs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_c006_dpunexp' */ 	
	static function getOxEkuC006Dpunexp($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_C006_DPUNEXP, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeC001GTimbs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_c006_dpunexp' */ 	
	static function getOsxEkuC006Dpunexp($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_C006_DPUNEXP, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeC001GTimbs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_c007_dnumdoc' */ 	
	static function getOxEkuC007Dnumdoc($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_C007_DNUMDOC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeC001GTimbs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_c007_dnumdoc' */ 	
	static function getOsxEkuC007Dnumdoc($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_C007_DNUMDOC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeC001GTimbs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_c010_dserienum' */ 	
	static function getOxEkuC010Dserienum($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_C010_DSERIENUM, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeC001GTimbs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_c010_dserienum' */ 	
	static function getOsxEkuC010Dserienum($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_C010_DSERIENUM, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeC001GTimbs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_c008_dfeinit' */ 	
	static function getOxEkuC008Dfeinit($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_C008_DFEINIT, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeC001GTimbs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_c008_dfeinit' */ 	
	static function getOsxEkuC008Dfeinit($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_C008_DFEINIT, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeC001GTimbs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_c009_dfefint' */ 	
	static function getOxEkuC009Dfefint($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_C009_DFEFINT, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeC001GTimbs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_c009_dfefint' */ 	
	static function getOsxEkuC009Dfefint($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_C009_DFEFINT, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeC001GTimbs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeC001GTimbs($paginador, $criterio);
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

            $obs = self::getEkuDeC001GTimbs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeC001GTimbs($paginador, $criterio);
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

            $obs = self::getEkuDeC001GTimbs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeC001GTimbs($paginador, $criterio);
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

            $obs = self::getEkuDeC001GTimbs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeC001GTimbs($paginador, $criterio);
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

            $obs = self::getEkuDeC001GTimbs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeC001GTimbs($paginador, $criterio);
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

            $obs = self::getEkuDeC001GTimbs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeC001GTimbs($paginador, $criterio);
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

            $obs = self::getEkuDeC001GTimbs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeC001GTimbs($paginador, $criterio);
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

            $obs = self::getEkuDeC001GTimbs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeC001GTimbs($paginador, $criterio);
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

            $obs = self::getEkuDeC001GTimbs(null, $criterio);
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

            $obs = self::getEkuDeC001GTimbs($paginador, $criterio);
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

            $obs = self::getEkuDeC001GTimbs($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'eku_de_c001_g_timb_adm');
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
                $c->addTabla(EkuDeC001GTimb::GEN_TABLA);
                $c->addOrden(EkuDeC001GTimb::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $eku_de_c001_g_timbs = EkuDeC001GTimb::getEkuDeC001GTimbs(null, $c);

                $arr = array();
                foreach($eku_de_c001_g_timbs as $eku_de_c001_g_timb){
                    $descripcion = $eku_de_c001_g_timb->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>