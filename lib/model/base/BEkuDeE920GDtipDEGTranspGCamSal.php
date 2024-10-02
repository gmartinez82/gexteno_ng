<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BEkuDeE920GDtipDEGTranspGCamSal
{ 
	
	const SES_PAGINACION = 'adm_ekudee920gdtipdegtranspgcamsal_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_ekudee920gdtipdegtranspgcamsal_paginas_registros';
	const SES_CRITERIOS = 'adm_ekudee920gdtipdegtranspgcamsal_criterios';
	
	const GEN_CLASE = 'EkuDeE920GDtipDEGTranspGCamSal';
	const GEN_TABLA = 'eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BEkuDeE920GDtipDEGTranspGCamSal */ 
	const GEN_ATTR_ID = 'eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.id';
	const GEN_ATTR_DESCRIPCION = 'eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.descripcion';
	const GEN_ATTR_EKU_DE_ID = 'eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.eku_de_id';
	const GEN_ATTR_EKU_E921_DDIRLOCSAL = 'eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.eku_e921_ddirlocsal';
	const GEN_ATTR_EKU_E922_DNUMCASSAL = 'eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.eku_e922_dnumcassal';
	const GEN_ATTR_EKU_E923_DCOMP1SAL = 'eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.eku_e923_dcomp1sal';
	const GEN_ATTR_EKU_E924_DCOMP2SAL = 'eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.eku_e924_dcomp2sal';
	const GEN_ATTR_EKU_E925_CDEPSAL = 'eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.eku_e925_cdepsal';
	const GEN_ATTR_EKU_E926_DDESDEPSAL = 'eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.eku_e926_ddesdepsal';
	const GEN_ATTR_EKU_E927_CDISSAL = 'eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.eku_e927_cdissal';
	const GEN_ATTR_EKU_E928_DDESDISSAL = 'eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.eku_e928_ddesdissal';
	const GEN_ATTR_EKU_E929_CCIUSAL = 'eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.eku_e929_cciusal';
	const GEN_ATTR_EKU_E930_DDESCIUSAL = 'eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.eku_e930_ddesciusal';
	const GEN_ATTR_EKU_E931_DTELSAL = 'eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.eku_e931_dtelsal';
	const GEN_ATTR_CODIGO = 'eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.codigo';
	const GEN_ATTR_OBSERVACION = 'eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.observacion';
	const GEN_ATTR_ORDEN = 'eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.orden';
	const GEN_ATTR_ESTADO = 'eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.estado';
	const GEN_ATTR_CREADO = 'eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.creado';
	const GEN_ATTR_CREADO_POR = 'eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.creado_por';
	const GEN_ATTR_MODIFICADO = 'eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.modificado_por';

	/* Constantes de Atributos Min de BEkuDeE920GDtipDEGTranspGCamSal */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_EKU_DE_ID = 'eku_de_id';
	const GEN_ATTR_MIN_EKU_E921_DDIRLOCSAL = 'eku_e921_ddirlocsal';
	const GEN_ATTR_MIN_EKU_E922_DNUMCASSAL = 'eku_e922_dnumcassal';
	const GEN_ATTR_MIN_EKU_E923_DCOMP1SAL = 'eku_e923_dcomp1sal';
	const GEN_ATTR_MIN_EKU_E924_DCOMP2SAL = 'eku_e924_dcomp2sal';
	const GEN_ATTR_MIN_EKU_E925_CDEPSAL = 'eku_e925_cdepsal';
	const GEN_ATTR_MIN_EKU_E926_DDESDEPSAL = 'eku_e926_ddesdepsal';
	const GEN_ATTR_MIN_EKU_E927_CDISSAL = 'eku_e927_cdissal';
	const GEN_ATTR_MIN_EKU_E928_DDESDISSAL = 'eku_e928_ddesdissal';
	const GEN_ATTR_MIN_EKU_E929_CCIUSAL = 'eku_e929_cciusal';
	const GEN_ATTR_MIN_EKU_E930_DDESCIUSAL = 'eku_e930_ddesciusal';
	const GEN_ATTR_MIN_EKU_E931_DTELSAL = 'eku_e931_dtelsal';
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
	

	/* Atributos de BEkuDeE920GDtipDEGTranspGCamSal */ 
	private $id;
	private $descripcion;
	private $eku_de_id;
	private $eku_e921_ddirlocsal;
	private $eku_e922_dnumcassal;
	private $eku_e923_dcomp1sal;
	private $eku_e924_dcomp2sal;
	private $eku_e925_cdepsal;
	private $eku_e926_ddesdepsal;
	private $eku_e927_cdissal;
	private $eku_e928_ddesdissal;
	private $eku_e929_cciusal;
	private $eku_e930_ddesciusal;
	private $eku_e931_dtelsal;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BEkuDeE920GDtipDEGTranspGCamSal */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getEkuDeId(){ if(isset($this->eku_de_id)){ return $this->eku_de_id; }else{ return 'null'; } }
	public function getEkuE921Ddirlocsal(){ if(isset($this->eku_e921_ddirlocsal)){ return $this->eku_e921_ddirlocsal; }else{ return ''; } }
	public function getEkuE922Dnumcassal(){ if(isset($this->eku_e922_dnumcassal)){ return $this->eku_e922_dnumcassal; }else{ return ''; } }
	public function getEkuE923Dcomp1sal(){ if(isset($this->eku_e923_dcomp1sal)){ return $this->eku_e923_dcomp1sal; }else{ return ''; } }
	public function getEkuE924Dcomp2sal(){ if(isset($this->eku_e924_dcomp2sal)){ return $this->eku_e924_dcomp2sal; }else{ return ''; } }
	public function getEkuE925Cdepsal(){ if(isset($this->eku_e925_cdepsal)){ return $this->eku_e925_cdepsal; }else{ return ''; } }
	public function getEkuE926Ddesdepsal(){ if(isset($this->eku_e926_ddesdepsal)){ return $this->eku_e926_ddesdepsal; }else{ return ''; } }
	public function getEkuE927Cdissal(){ if(isset($this->eku_e927_cdissal)){ return $this->eku_e927_cdissal; }else{ return ''; } }
	public function getEkuE928Ddesdissal(){ if(isset($this->eku_e928_ddesdissal)){ return $this->eku_e928_ddesdissal; }else{ return ''; } }
	public function getEkuE929Cciusal(){ if(isset($this->eku_e929_cciusal)){ return $this->eku_e929_cciusal; }else{ return ''; } }
	public function getEkuE930Ddesciusal(){ if(isset($this->eku_e930_ddesciusal)){ return $this->eku_e930_ddesciusal; }else{ return ''; } }
	public function getEkuE931Dtelsal(){ if(isset($this->eku_e931_dtelsal)){ return $this->eku_e931_dtelsal; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BEkuDeE920GDtipDEGTranspGCamSal */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_EKU_DE_ID."
				, ".self::GEN_ATTR_EKU_E921_DDIRLOCSAL."
				, ".self::GEN_ATTR_EKU_E922_DNUMCASSAL."
				, ".self::GEN_ATTR_EKU_E923_DCOMP1SAL."
				, ".self::GEN_ATTR_EKU_E924_DCOMP2SAL."
				, ".self::GEN_ATTR_EKU_E925_CDEPSAL."
				, ".self::GEN_ATTR_EKU_E926_DDESDEPSAL."
				, ".self::GEN_ATTR_EKU_E927_CDISSAL."
				, ".self::GEN_ATTR_EKU_E928_DDESDISSAL."
				, ".self::GEN_ATTR_EKU_E929_CCIUSAL."
				, ".self::GEN_ATTR_EKU_E930_DDESCIUSAL."
				, ".self::GEN_ATTR_EKU_E931_DTELSAL."
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
				$this->setEkuE921Ddirlocsal($fila[self::GEN_ATTR_MIN_EKU_E921_DDIRLOCSAL]);
				$this->setEkuE922Dnumcassal($fila[self::GEN_ATTR_MIN_EKU_E922_DNUMCASSAL]);
				$this->setEkuE923Dcomp1sal($fila[self::GEN_ATTR_MIN_EKU_E923_DCOMP1SAL]);
				$this->setEkuE924Dcomp2sal($fila[self::GEN_ATTR_MIN_EKU_E924_DCOMP2SAL]);
				$this->setEkuE925Cdepsal($fila[self::GEN_ATTR_MIN_EKU_E925_CDEPSAL]);
				$this->setEkuE926Ddesdepsal($fila[self::GEN_ATTR_MIN_EKU_E926_DDESDEPSAL]);
				$this->setEkuE927Cdissal($fila[self::GEN_ATTR_MIN_EKU_E927_CDISSAL]);
				$this->setEkuE928Ddesdissal($fila[self::GEN_ATTR_MIN_EKU_E928_DDESDISSAL]);
				$this->setEkuE929Cciusal($fila[self::GEN_ATTR_MIN_EKU_E929_CCIUSAL]);
				$this->setEkuE930Ddesciusal($fila[self::GEN_ATTR_MIN_EKU_E930_DDESCIUSAL]);
				$this->setEkuE931Dtelsal($fila[self::GEN_ATTR_MIN_EKU_E931_DTELSAL]);
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
	public function setEkuE921Ddirlocsal($v){ $this->eku_e921_ddirlocsal = $v; }
	public function setEkuE922Dnumcassal($v){ $this->eku_e922_dnumcassal = $v; }
	public function setEkuE923Dcomp1sal($v){ $this->eku_e923_dcomp1sal = $v; }
	public function setEkuE924Dcomp2sal($v){ $this->eku_e924_dcomp2sal = $v; }
	public function setEkuE925Cdepsal($v){ $this->eku_e925_cdepsal = $v; }
	public function setEkuE926Ddesdepsal($v){ $this->eku_e926_ddesdepsal = $v; }
	public function setEkuE927Cdissal($v){ $this->eku_e927_cdissal = $v; }
	public function setEkuE928Ddesdissal($v){ $this->eku_e928_ddesdissal = $v; }
	public function setEkuE929Cciusal($v){ $this->eku_e929_cciusal = $v; }
	public function setEkuE930Ddesciusal($v){ $this->eku_e930_ddesciusal = $v; }
	public function setEkuE931Dtelsal($v){ $this->eku_e931_dtelsal = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new EkuDeE920GDtipDEGTranspGCamSal();
            $o->setId($fila[EkuDeE920GDtipDEGTranspGCamSal::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setEkuDeId($fila[self::GEN_ATTR_MIN_EKU_DE_ID]);
			$o->setEkuE921Ddirlocsal($fila[self::GEN_ATTR_MIN_EKU_E921_DDIRLOCSAL]);
			$o->setEkuE922Dnumcassal($fila[self::GEN_ATTR_MIN_EKU_E922_DNUMCASSAL]);
			$o->setEkuE923Dcomp1sal($fila[self::GEN_ATTR_MIN_EKU_E923_DCOMP1SAL]);
			$o->setEkuE924Dcomp2sal($fila[self::GEN_ATTR_MIN_EKU_E924_DCOMP2SAL]);
			$o->setEkuE925Cdepsal($fila[self::GEN_ATTR_MIN_EKU_E925_CDEPSAL]);
			$o->setEkuE926Ddesdepsal($fila[self::GEN_ATTR_MIN_EKU_E926_DDESDEPSAL]);
			$o->setEkuE927Cdissal($fila[self::GEN_ATTR_MIN_EKU_E927_CDISSAL]);
			$o->setEkuE928Ddesdissal($fila[self::GEN_ATTR_MIN_EKU_E928_DDESDISSAL]);
			$o->setEkuE929Cciusal($fila[self::GEN_ATTR_MIN_EKU_E929_CCIUSAL]);
			$o->setEkuE930Ddesciusal($fila[self::GEN_ATTR_MIN_EKU_E930_DDESCIUSAL]);
			$o->setEkuE931Dtelsal($fila[self::GEN_ATTR_MIN_EKU_E931_DTELSAL]);
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

	/* Control de BEkuDeE920GDtipDEGTranspGCamSal */ 	
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

	/* Cambia el estado de BEkuDeE920GDtipDEGTranspGCamSal */ 	
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

	/* Save de BEkuDeE920GDtipDEGTranspGCamSal */ 	
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
						, ".self::GEN_ATTR_MIN_EKU_E921_DDIRLOCSAL."
						, ".self::GEN_ATTR_MIN_EKU_E922_DNUMCASSAL."
						, ".self::GEN_ATTR_MIN_EKU_E923_DCOMP1SAL."
						, ".self::GEN_ATTR_MIN_EKU_E924_DCOMP2SAL."
						, ".self::GEN_ATTR_MIN_EKU_E925_CDEPSAL."
						, ".self::GEN_ATTR_MIN_EKU_E926_DDESDEPSAL."
						, ".self::GEN_ATTR_MIN_EKU_E927_CDISSAL."
						, ".self::GEN_ATTR_MIN_EKU_E928_DDESDISSAL."
						, ".self::GEN_ATTR_MIN_EKU_E929_CCIUSAL."
						, ".self::GEN_ATTR_MIN_EKU_E930_DDESCIUSAL."
						, ".self::GEN_ATTR_MIN_EKU_E931_DTELSAL."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getEkuDeId()."
						, '".$this->getEkuE921Ddirlocsal()."'
						, '".$this->getEkuE922Dnumcassal()."'
						, '".$this->getEkuE923Dcomp1sal()."'
						, '".$this->getEkuE924Dcomp2sal()."'
						, '".$this->getEkuE925Cdepsal()."'
						, '".$this->getEkuE926Ddesdepsal()."'
						, '".$this->getEkuE927Cdissal()."'
						, '".$this->getEkuE928Ddesdissal()."'
						, '".$this->getEkuE929Cciusal()."'
						, '".$this->getEkuE930Ddesciusal()."'
						, '".$this->getEkuE931Dtelsal()."'
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_seq')";
            
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
                 
				 ".EkuDeE920GDtipDEGTranspGCamSal::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_EKU_DE_ID." = ".$this->getEkuDeId()."
						, ".self::GEN_ATTR_MIN_EKU_E921_DDIRLOCSAL." = '".$this->getEkuE921Ddirlocsal()."'
						, ".self::GEN_ATTR_MIN_EKU_E922_DNUMCASSAL." = '".$this->getEkuE922Dnumcassal()."'
						, ".self::GEN_ATTR_MIN_EKU_E923_DCOMP1SAL." = '".$this->getEkuE923Dcomp1sal()."'
						, ".self::GEN_ATTR_MIN_EKU_E924_DCOMP2SAL." = '".$this->getEkuE924Dcomp2sal()."'
						, ".self::GEN_ATTR_MIN_EKU_E925_CDEPSAL." = '".$this->getEkuE925Cdepsal()."'
						, ".self::GEN_ATTR_MIN_EKU_E926_DDESDEPSAL." = '".$this->getEkuE926Ddesdepsal()."'
						, ".self::GEN_ATTR_MIN_EKU_E927_CDISSAL." = '".$this->getEkuE927Cdissal()."'
						, ".self::GEN_ATTR_MIN_EKU_E928_DDESDISSAL." = '".$this->getEkuE928Ddesdissal()."'
						, ".self::GEN_ATTR_MIN_EKU_E929_CCIUSAL." = '".$this->getEkuE929Cciusal()."'
						, ".self::GEN_ATTR_MIN_EKU_E930_DDESCIUSAL." = '".$this->getEkuE930Ddesciusal()."'
						, ".self::GEN_ATTR_MIN_EKU_E931_DTELSAL." = '".$this->getEkuE931Dtelsal()."'
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
						, ".self::GEN_ATTR_MIN_EKU_E921_DDIRLOCSAL."
						, ".self::GEN_ATTR_MIN_EKU_E922_DNUMCASSAL."
						, ".self::GEN_ATTR_MIN_EKU_E923_DCOMP1SAL."
						, ".self::GEN_ATTR_MIN_EKU_E924_DCOMP2SAL."
						, ".self::GEN_ATTR_MIN_EKU_E925_CDEPSAL."
						, ".self::GEN_ATTR_MIN_EKU_E926_DDESDEPSAL."
						, ".self::GEN_ATTR_MIN_EKU_E927_CDISSAL."
						, ".self::GEN_ATTR_MIN_EKU_E928_DDESDISSAL."
						, ".self::GEN_ATTR_MIN_EKU_E929_CCIUSAL."
						, ".self::GEN_ATTR_MIN_EKU_E930_DDESCIUSAL."
						, ".self::GEN_ATTR_MIN_EKU_E931_DTELSAL."
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
						, '".$this->getEkuE921Ddirlocsal()."'
						, '".$this->getEkuE922Dnumcassal()."'
						, '".$this->getEkuE923Dcomp1sal()."'
						, '".$this->getEkuE924Dcomp2sal()."'
						, '".$this->getEkuE925Cdepsal()."'
						, '".$this->getEkuE926Ddesdepsal()."'
						, '".$this->getEkuE927Cdissal()."'
						, '".$this->getEkuE928Ddesdissal()."'
						, '".$this->getEkuE929Cciusal()."'
						, '".$this->getEkuE930Ddesciusal()."'
						, '".$this->getEkuE931Dtelsal()."'
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
                     
				 ".EkuDeE920GDtipDEGTranspGCamSal::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_EKU_DE_ID." = ".$this->getEkuDeId()."
						, ".self::GEN_ATTR_MIN_EKU_E921_DDIRLOCSAL." = '".$this->getEkuE921Ddirlocsal()."'
						, ".self::GEN_ATTR_MIN_EKU_E922_DNUMCASSAL." = '".$this->getEkuE922Dnumcassal()."'
						, ".self::GEN_ATTR_MIN_EKU_E923_DCOMP1SAL." = '".$this->getEkuE923Dcomp1sal()."'
						, ".self::GEN_ATTR_MIN_EKU_E924_DCOMP2SAL." = '".$this->getEkuE924Dcomp2sal()."'
						, ".self::GEN_ATTR_MIN_EKU_E925_CDEPSAL." = '".$this->getEkuE925Cdepsal()."'
						, ".self::GEN_ATTR_MIN_EKU_E926_DDESDEPSAL." = '".$this->getEkuE926Ddesdepsal()."'
						, ".self::GEN_ATTR_MIN_EKU_E927_CDISSAL." = '".$this->getEkuE927Cdissal()."'
						, ".self::GEN_ATTR_MIN_EKU_E928_DDESDISSAL." = '".$this->getEkuE928Ddesdissal()."'
						, ".self::GEN_ATTR_MIN_EKU_E929_CCIUSAL." = '".$this->getEkuE929Cciusal()."'
						, ".self::GEN_ATTR_MIN_EKU_E930_DDESCIUSAL." = '".$this->getEkuE930Ddesciusal()."'
						, ".self::GEN_ATTR_MIN_EKU_E931_DTELSAL." = '".$this->getEkuE931Dtelsal()."'
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
            $o = new EkuDeE920GDtipDEGTranspGCamSal();
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

	/* Delete de BEkuDeE920GDtipDEGTranspGCamSal */ 	
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
	
	public function duplicarEkuDeE920GDtipDEGTranspGCamSal(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getEkuDeE920GDtipDEGTranspGCamSals($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = EkuDeE920GDtipDEGTranspGCamSal::setAplicarFiltrosDeAlcance($criterio);

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
	
		$ekudee920gdtipdegtranspgcamsals = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $ekudee920gdtipdegtranspgcamsal = new EkuDeE920GDtipDEGTranspGCamSal();
                    $ekudee920gdtipdegtranspgcamsal->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $ekudee920gdtipdegtranspgcamsal->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$ekudee920gdtipdegtranspgcamsal->setEkuDeId($fila[self::GEN_ATTR_MIN_EKU_DE_ID]);
			$ekudee920gdtipdegtranspgcamsal->setEkuE921Ddirlocsal($fila[self::GEN_ATTR_MIN_EKU_E921_DDIRLOCSAL]);
			$ekudee920gdtipdegtranspgcamsal->setEkuE922Dnumcassal($fila[self::GEN_ATTR_MIN_EKU_E922_DNUMCASSAL]);
			$ekudee920gdtipdegtranspgcamsal->setEkuE923Dcomp1sal($fila[self::GEN_ATTR_MIN_EKU_E923_DCOMP1SAL]);
			$ekudee920gdtipdegtranspgcamsal->setEkuE924Dcomp2sal($fila[self::GEN_ATTR_MIN_EKU_E924_DCOMP2SAL]);
			$ekudee920gdtipdegtranspgcamsal->setEkuE925Cdepsal($fila[self::GEN_ATTR_MIN_EKU_E925_CDEPSAL]);
			$ekudee920gdtipdegtranspgcamsal->setEkuE926Ddesdepsal($fila[self::GEN_ATTR_MIN_EKU_E926_DDESDEPSAL]);
			$ekudee920gdtipdegtranspgcamsal->setEkuE927Cdissal($fila[self::GEN_ATTR_MIN_EKU_E927_CDISSAL]);
			$ekudee920gdtipdegtranspgcamsal->setEkuE928Ddesdissal($fila[self::GEN_ATTR_MIN_EKU_E928_DDESDISSAL]);
			$ekudee920gdtipdegtranspgcamsal->setEkuE929Cciusal($fila[self::GEN_ATTR_MIN_EKU_E929_CCIUSAL]);
			$ekudee920gdtipdegtranspgcamsal->setEkuE930Ddesciusal($fila[self::GEN_ATTR_MIN_EKU_E930_DDESCIUSAL]);
			$ekudee920gdtipdegtranspgcamsal->setEkuE931Dtelsal($fila[self::GEN_ATTR_MIN_EKU_E931_DTELSAL]);
			$ekudee920gdtipdegtranspgcamsal->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$ekudee920gdtipdegtranspgcamsal->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$ekudee920gdtipdegtranspgcamsal->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$ekudee920gdtipdegtranspgcamsal->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$ekudee920gdtipdegtranspgcamsal->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$ekudee920gdtipdegtranspgcamsal->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$ekudee920gdtipdegtranspgcamsal->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$ekudee920gdtipdegtranspgcamsal->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $ekudee920gdtipdegtranspgcamsals[] = $ekudee920gdtipdegtranspgcamsal;
		}
		
		return $ekudee920gdtipdegtranspgcamsals;
	}	
	

	/* Método getEkuDeE920GDtipDEGTranspGCamSals Habilitados */ 	
	static function getEkuDeE920GDtipDEGTranspGCamSalsHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return EkuDeE920GDtipDEGTranspGCamSal::getEkuDeE920GDtipDEGTranspGCamSals($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getEkuDeE920GDtipDEGTranspGCamSals para listado de Backend */ 	
	static function getEkuDeE920GDtipDEGTranspGCamSalsDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return EkuDeE920GDtipDEGTranspGCamSal::getEkuDeE920GDtipDEGTranspGCamSals($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getEkuDeE920GDtipDEGTranspGCamSalsCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = EkuDeE920GDtipDEGTranspGCamSal::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = EkuDeE920GDtipDEGTranspGCamSal::getEkuDeE920GDtipDEGTranspGCamSals($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getEkuDeE920GDtipDEGTranspGCamSals filtrado para select */ 	
	static function getEkuDeE920GDtipDEGTranspGCamSalsCmbF($paginador = null, $criterio = null){
            $col = EkuDeE920GDtipDEGTranspGCamSal::getEkuDeE920GDtipDEGTranspGCamSals($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getEkuDeE920GDtipDEGTranspGCamSals filtrado por una coleccion de objetos foraneos de EkuDe */ 	
	static function getEkuDeE920GDtipDEGTranspGCamSalsXEkuDes($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(EkuDeE920GDtipDEGTranspGCamSal::GEN_ATTR_EKU_DE_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(EkuDeE920GDtipDEGTranspGCamSal::GEN_TABLA);
            $c->addOrden(EkuDeE920GDtipDEGTranspGCamSal::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = EkuDeE920GDtipDEGTranspGCamSal::getEkuDeE920GDtipDEGTranspGCamSals($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getEkuDeId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_adm.php';
            $url_gestion = 'eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_gestion.php';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal';");
            
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

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals($paginador, $criterio);
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

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals($paginador, $criterio);
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

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_de_id' */ 	
	static function getOxEkuDeId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_DE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals($paginador, $criterio);
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

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_e921_ddirlocsal' */ 	
	static function getOxEkuE921Ddirlocsal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E921_DDIRLOCSAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_e921_ddirlocsal' */ 	
	static function getOsxEkuE921Ddirlocsal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E921_DDIRLOCSAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_e922_dnumcassal' */ 	
	static function getOxEkuE922Dnumcassal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E922_DNUMCASSAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_e922_dnumcassal' */ 	
	static function getOsxEkuE922Dnumcassal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E922_DNUMCASSAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_e923_dcomp1sal' */ 	
	static function getOxEkuE923Dcomp1sal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E923_DCOMP1SAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_e923_dcomp1sal' */ 	
	static function getOsxEkuE923Dcomp1sal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E923_DCOMP1SAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_e924_dcomp2sal' */ 	
	static function getOxEkuE924Dcomp2sal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E924_DCOMP2SAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_e924_dcomp2sal' */ 	
	static function getOsxEkuE924Dcomp2sal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E924_DCOMP2SAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_e925_cdepsal' */ 	
	static function getOxEkuE925Cdepsal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E925_CDEPSAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_e925_cdepsal' */ 	
	static function getOsxEkuE925Cdepsal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E925_CDEPSAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_e926_ddesdepsal' */ 	
	static function getOxEkuE926Ddesdepsal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E926_DDESDEPSAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_e926_ddesdepsal' */ 	
	static function getOsxEkuE926Ddesdepsal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E926_DDESDEPSAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_e927_cdissal' */ 	
	static function getOxEkuE927Cdissal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E927_CDISSAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_e927_cdissal' */ 	
	static function getOsxEkuE927Cdissal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E927_CDISSAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_e928_ddesdissal' */ 	
	static function getOxEkuE928Ddesdissal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E928_DDESDISSAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_e928_ddesdissal' */ 	
	static function getOsxEkuE928Ddesdissal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E928_DDESDISSAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_e929_cciusal' */ 	
	static function getOxEkuE929Cciusal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E929_CCIUSAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_e929_cciusal' */ 	
	static function getOsxEkuE929Cciusal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E929_CCIUSAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_e930_ddesciusal' */ 	
	static function getOxEkuE930Ddesciusal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E930_DDESCIUSAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_e930_ddesciusal' */ 	
	static function getOsxEkuE930Ddesciusal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E930_DDESCIUSAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_e931_dtelsal' */ 	
	static function getOxEkuE931Dtelsal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E931_DTELSAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_e931_dtelsal' */ 	
	static function getOsxEkuE931Dtelsal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E931_DTELSAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals($paginador, $criterio);
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

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals($paginador, $criterio);
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

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals($paginador, $criterio);
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

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals($paginador, $criterio);
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

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals($paginador, $criterio);
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

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals($paginador, $criterio);
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

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals($paginador, $criterio);
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

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals($paginador, $criterio);
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

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals(null, $criterio);
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

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals($paginador, $criterio);
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

            $obs = self::getEkuDeE920GDtipDEGTranspGCamSals($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_adm');
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
                $c->addTabla(EkuDeE920GDtipDEGTranspGCamSal::GEN_TABLA);
                $c->addOrden(EkuDeE920GDtipDEGTranspGCamSal::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sals = EkuDeE920GDtipDEGTranspGCamSal::getEkuDeE920GDtipDEGTranspGCamSals(null, $c);

                $arr = array();
                foreach($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sals as $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal){
                    $descripcion = $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>