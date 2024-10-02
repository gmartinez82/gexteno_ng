<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BEkuDeE605GDtipDEGCamCondGPaConEIni
{ 
	
	const SES_PAGINACION = 'adm_ekudee605gdtipdegcamcondgpaconeini_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_ekudee605gdtipdegcamcondgpaconeini_paginas_registros';
	const SES_CRITERIOS = 'adm_ekudee605gdtipdegcamcondgpaconeini_criterios';
	
	const GEN_CLASE = 'EkuDeE605GDtipDEGCamCondGPaConEIni';
	const GEN_TABLA = 'eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BEkuDeE605GDtipDEGCamCondGPaConEIni */ 
	const GEN_ATTR_ID = 'eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.id';
	const GEN_ATTR_DESCRIPCION = 'eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.descripcion';
	const GEN_ATTR_EKU_DE_ID = 'eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.eku_de_id';
	const GEN_ATTR_EKU_E606_ITIPAGO = 'eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.eku_e606_itipago';
	const GEN_ATTR_EKU_E607_DDESTIPAG = 'eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.eku_e607_ddestipag';
	const GEN_ATTR_EKU_E608_DMONTIPAG = 'eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.eku_e608_dmontipag';
	const GEN_ATTR_EKU_E609_CMONETIPAG = 'eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.eku_e609_cmonetipag';
	const GEN_ATTR_EKU_E610_DDMONETIPAG = 'eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.eku_e610_ddmonetipag';
	const GEN_ATTR_EKU_E611_DTICAMTIPA = 'eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.eku_e611_dticamtipa';
	const GEN_ATTR_CODIGO = 'eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.codigo';
	const GEN_ATTR_OBSERVACION = 'eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.observacion';
	const GEN_ATTR_ORDEN = 'eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.orden';
	const GEN_ATTR_ESTADO = 'eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.estado';
	const GEN_ATTR_CREADO = 'eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.creado';
	const GEN_ATTR_CREADO_POR = 'eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.creado_por';
	const GEN_ATTR_MODIFICADO = 'eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.modificado_por';

	/* Constantes de Atributos Min de BEkuDeE605GDtipDEGCamCondGPaConEIni */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_EKU_DE_ID = 'eku_de_id';
	const GEN_ATTR_MIN_EKU_E606_ITIPAGO = 'eku_e606_itipago';
	const GEN_ATTR_MIN_EKU_E607_DDESTIPAG = 'eku_e607_ddestipag';
	const GEN_ATTR_MIN_EKU_E608_DMONTIPAG = 'eku_e608_dmontipag';
	const GEN_ATTR_MIN_EKU_E609_CMONETIPAG = 'eku_e609_cmonetipag';
	const GEN_ATTR_MIN_EKU_E610_DDMONETIPAG = 'eku_e610_ddmonetipag';
	const GEN_ATTR_MIN_EKU_E611_DTICAMTIPA = 'eku_e611_dticamtipa';
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
	

	/* Atributos de BEkuDeE605GDtipDEGCamCondGPaConEIni */ 
	private $id;
	private $descripcion;
	private $eku_de_id;
	private $eku_e606_itipago;
	private $eku_e607_ddestipag;
	private $eku_e608_dmontipag;
	private $eku_e609_cmonetipag;
	private $eku_e610_ddmonetipag;
	private $eku_e611_dticamtipa;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BEkuDeE605GDtipDEGCamCondGPaConEIni */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getEkuDeId(){ if(isset($this->eku_de_id)){ return $this->eku_de_id; }else{ return 'null'; } }
	public function getEkuE606Itipago(){ if(isset($this->eku_e606_itipago)){ return $this->eku_e606_itipago; }else{ return ''; } }
	public function getEkuE607Ddestipag(){ if(isset($this->eku_e607_ddestipag)){ return $this->eku_e607_ddestipag; }else{ return ''; } }
	public function getEkuE608Dmontipag(){ if(isset($this->eku_e608_dmontipag)){ return $this->eku_e608_dmontipag; }else{ return ''; } }
	public function getEkuE609Cmonetipag(){ if(isset($this->eku_e609_cmonetipag)){ return $this->eku_e609_cmonetipag; }else{ return ''; } }
	public function getEkuE610Ddmonetipag(){ if(isset($this->eku_e610_ddmonetipag)){ return $this->eku_e610_ddmonetipag; }else{ return ''; } }
	public function getEkuE611Dticamtipa(){ if(isset($this->eku_e611_dticamtipa)){ return $this->eku_e611_dticamtipa; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BEkuDeE605GDtipDEGCamCondGPaConEIni */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_EKU_DE_ID."
				, ".self::GEN_ATTR_EKU_E606_ITIPAGO."
				, ".self::GEN_ATTR_EKU_E607_DDESTIPAG."
				, ".self::GEN_ATTR_EKU_E608_DMONTIPAG."
				, ".self::GEN_ATTR_EKU_E609_CMONETIPAG."
				, ".self::GEN_ATTR_EKU_E610_DDMONETIPAG."
				, ".self::GEN_ATTR_EKU_E611_DTICAMTIPA."
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
				$this->setEkuE606Itipago($fila[self::GEN_ATTR_MIN_EKU_E606_ITIPAGO]);
				$this->setEkuE607Ddestipag($fila[self::GEN_ATTR_MIN_EKU_E607_DDESTIPAG]);
				$this->setEkuE608Dmontipag($fila[self::GEN_ATTR_MIN_EKU_E608_DMONTIPAG]);
				$this->setEkuE609Cmonetipag($fila[self::GEN_ATTR_MIN_EKU_E609_CMONETIPAG]);
				$this->setEkuE610Ddmonetipag($fila[self::GEN_ATTR_MIN_EKU_E610_DDMONETIPAG]);
				$this->setEkuE611Dticamtipa($fila[self::GEN_ATTR_MIN_EKU_E611_DTICAMTIPA]);
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
	public function setEkuE606Itipago($v){ $this->eku_e606_itipago = $v; }
	public function setEkuE607Ddestipag($v){ $this->eku_e607_ddestipag = $v; }
	public function setEkuE608Dmontipag($v){ $this->eku_e608_dmontipag = $v; }
	public function setEkuE609Cmonetipag($v){ $this->eku_e609_cmonetipag = $v; }
	public function setEkuE610Ddmonetipag($v){ $this->eku_e610_ddmonetipag = $v; }
	public function setEkuE611Dticamtipa($v){ $this->eku_e611_dticamtipa = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new EkuDeE605GDtipDEGCamCondGPaConEIni();
            $o->setId($fila[EkuDeE605GDtipDEGCamCondGPaConEIni::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setEkuDeId($fila[self::GEN_ATTR_MIN_EKU_DE_ID]);
			$o->setEkuE606Itipago($fila[self::GEN_ATTR_MIN_EKU_E606_ITIPAGO]);
			$o->setEkuE607Ddestipag($fila[self::GEN_ATTR_MIN_EKU_E607_DDESTIPAG]);
			$o->setEkuE608Dmontipag($fila[self::GEN_ATTR_MIN_EKU_E608_DMONTIPAG]);
			$o->setEkuE609Cmonetipag($fila[self::GEN_ATTR_MIN_EKU_E609_CMONETIPAG]);
			$o->setEkuE610Ddmonetipag($fila[self::GEN_ATTR_MIN_EKU_E610_DDMONETIPAG]);
			$o->setEkuE611Dticamtipa($fila[self::GEN_ATTR_MIN_EKU_E611_DTICAMTIPA]);
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

	/* Control de BEkuDeE605GDtipDEGCamCondGPaConEIni */ 	
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

	/* Cambia el estado de BEkuDeE605GDtipDEGCamCondGPaConEIni */ 	
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

	/* Save de BEkuDeE605GDtipDEGCamCondGPaConEIni */ 	
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
						, ".self::GEN_ATTR_MIN_EKU_E606_ITIPAGO."
						, ".self::GEN_ATTR_MIN_EKU_E607_DDESTIPAG."
						, ".self::GEN_ATTR_MIN_EKU_E608_DMONTIPAG."
						, ".self::GEN_ATTR_MIN_EKU_E609_CMONETIPAG."
						, ".self::GEN_ATTR_MIN_EKU_E610_DDMONETIPAG."
						, ".self::GEN_ATTR_MIN_EKU_E611_DTICAMTIPA."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getEkuDeId()."
						, '".$this->getEkuE606Itipago()."'
						, '".$this->getEkuE607Ddestipag()."'
						, '".$this->getEkuE608Dmontipag()."'
						, '".$this->getEkuE609Cmonetipag()."'
						, '".$this->getEkuE610Ddmonetipag()."'
						, '".$this->getEkuE611Dticamtipa()."'
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini_seq')";
            
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
                 
				 ".EkuDeE605GDtipDEGCamCondGPaConEIni::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_EKU_DE_ID." = ".$this->getEkuDeId()."
						, ".self::GEN_ATTR_MIN_EKU_E606_ITIPAGO." = '".$this->getEkuE606Itipago()."'
						, ".self::GEN_ATTR_MIN_EKU_E607_DDESTIPAG." = '".$this->getEkuE607Ddestipag()."'
						, ".self::GEN_ATTR_MIN_EKU_E608_DMONTIPAG." = '".$this->getEkuE608Dmontipag()."'
						, ".self::GEN_ATTR_MIN_EKU_E609_CMONETIPAG." = '".$this->getEkuE609Cmonetipag()."'
						, ".self::GEN_ATTR_MIN_EKU_E610_DDMONETIPAG." = '".$this->getEkuE610Ddmonetipag()."'
						, ".self::GEN_ATTR_MIN_EKU_E611_DTICAMTIPA." = '".$this->getEkuE611Dticamtipa()."'
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
						, ".self::GEN_ATTR_MIN_EKU_E606_ITIPAGO."
						, ".self::GEN_ATTR_MIN_EKU_E607_DDESTIPAG."
						, ".self::GEN_ATTR_MIN_EKU_E608_DMONTIPAG."
						, ".self::GEN_ATTR_MIN_EKU_E609_CMONETIPAG."
						, ".self::GEN_ATTR_MIN_EKU_E610_DDMONETIPAG."
						, ".self::GEN_ATTR_MIN_EKU_E611_DTICAMTIPA."
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
						, '".$this->getEkuE606Itipago()."'
						, '".$this->getEkuE607Ddestipag()."'
						, '".$this->getEkuE608Dmontipag()."'
						, '".$this->getEkuE609Cmonetipag()."'
						, '".$this->getEkuE610Ddmonetipag()."'
						, '".$this->getEkuE611Dticamtipa()."'
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
                     
				 ".EkuDeE605GDtipDEGCamCondGPaConEIni::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_EKU_DE_ID." = ".$this->getEkuDeId()."
						, ".self::GEN_ATTR_MIN_EKU_E606_ITIPAGO." = '".$this->getEkuE606Itipago()."'
						, ".self::GEN_ATTR_MIN_EKU_E607_DDESTIPAG." = '".$this->getEkuE607Ddestipag()."'
						, ".self::GEN_ATTR_MIN_EKU_E608_DMONTIPAG." = '".$this->getEkuE608Dmontipag()."'
						, ".self::GEN_ATTR_MIN_EKU_E609_CMONETIPAG." = '".$this->getEkuE609Cmonetipag()."'
						, ".self::GEN_ATTR_MIN_EKU_E610_DDMONETIPAG." = '".$this->getEkuE610Ddmonetipag()."'
						, ".self::GEN_ATTR_MIN_EKU_E611_DTICAMTIPA." = '".$this->getEkuE611Dticamtipa()."'
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
            $o = new EkuDeE605GDtipDEGCamCondGPaConEIni();
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

	/* Delete de BEkuDeE605GDtipDEGCamCondGPaConEIni */ 	
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
	
	public function duplicarEkuDeE605GDtipDEGCamCondGPaConEIni(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getEkuDeE605GDtipDEGCamCondGPaConEInis($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = EkuDeE605GDtipDEGCamCondGPaConEIni::setAplicarFiltrosDeAlcance($criterio);

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
	
		$ekudee605gdtipdegcamcondgpaconeinis = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $ekudee605gdtipdegcamcondgpaconeini = new EkuDeE605GDtipDEGCamCondGPaConEIni();
                    $ekudee605gdtipdegcamcondgpaconeini->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $ekudee605gdtipdegcamcondgpaconeini->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$ekudee605gdtipdegcamcondgpaconeini->setEkuDeId($fila[self::GEN_ATTR_MIN_EKU_DE_ID]);
			$ekudee605gdtipdegcamcondgpaconeini->setEkuE606Itipago($fila[self::GEN_ATTR_MIN_EKU_E606_ITIPAGO]);
			$ekudee605gdtipdegcamcondgpaconeini->setEkuE607Ddestipag($fila[self::GEN_ATTR_MIN_EKU_E607_DDESTIPAG]);
			$ekudee605gdtipdegcamcondgpaconeini->setEkuE608Dmontipag($fila[self::GEN_ATTR_MIN_EKU_E608_DMONTIPAG]);
			$ekudee605gdtipdegcamcondgpaconeini->setEkuE609Cmonetipag($fila[self::GEN_ATTR_MIN_EKU_E609_CMONETIPAG]);
			$ekudee605gdtipdegcamcondgpaconeini->setEkuE610Ddmonetipag($fila[self::GEN_ATTR_MIN_EKU_E610_DDMONETIPAG]);
			$ekudee605gdtipdegcamcondgpaconeini->setEkuE611Dticamtipa($fila[self::GEN_ATTR_MIN_EKU_E611_DTICAMTIPA]);
			$ekudee605gdtipdegcamcondgpaconeini->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$ekudee605gdtipdegcamcondgpaconeini->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$ekudee605gdtipdegcamcondgpaconeini->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$ekudee605gdtipdegcamcondgpaconeini->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$ekudee605gdtipdegcamcondgpaconeini->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$ekudee605gdtipdegcamcondgpaconeini->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$ekudee605gdtipdegcamcondgpaconeini->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$ekudee605gdtipdegcamcondgpaconeini->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $ekudee605gdtipdegcamcondgpaconeinis[] = $ekudee605gdtipdegcamcondgpaconeini;
		}
		
		return $ekudee605gdtipdegcamcondgpaconeinis;
	}	
	

	/* Método getEkuDeE605GDtipDEGCamCondGPaConEInis Habilitados */ 	
	static function getEkuDeE605GDtipDEGCamCondGPaConEInisHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return EkuDeE605GDtipDEGCamCondGPaConEIni::getEkuDeE605GDtipDEGCamCondGPaConEInis($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getEkuDeE605GDtipDEGCamCondGPaConEInis para listado de Backend */ 	
	static function getEkuDeE605GDtipDEGCamCondGPaConEInisDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return EkuDeE605GDtipDEGCamCondGPaConEIni::getEkuDeE605GDtipDEGCamCondGPaConEInis($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getEkuDeE605GDtipDEGCamCondGPaConEInisCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = EkuDeE605GDtipDEGCamCondGPaConEIni::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = EkuDeE605GDtipDEGCamCondGPaConEIni::getEkuDeE605GDtipDEGCamCondGPaConEInis($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getEkuDeE605GDtipDEGCamCondGPaConEInis filtrado para select */ 	
	static function getEkuDeE605GDtipDEGCamCondGPaConEInisCmbF($paginador = null, $criterio = null){
            $col = EkuDeE605GDtipDEGCamCondGPaConEIni::getEkuDeE605GDtipDEGCamCondGPaConEInis($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getEkuDeE605GDtipDEGCamCondGPaConEInis filtrado por una coleccion de objetos foraneos de EkuDe */ 	
	static function getEkuDeE605GDtipDEGCamCondGPaConEInisXEkuDes($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(EkuDeE605GDtipDEGCamCondGPaConEIni::GEN_ATTR_EKU_DE_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(EkuDeE605GDtipDEGCamCondGPaConEIni::GEN_TABLA);
            $c->addOrden(EkuDeE605GDtipDEGCamCondGPaConEIni::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = EkuDeE605GDtipDEGCamCondGPaConEIni::getEkuDeE605GDtipDEGCamCondGPaConEInis($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getEkuDeId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini_adm.php';
            $url_gestion = 'eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini_gestion.php';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini';");
            
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

            $obs = self::getEkuDeE605GDtipDEGCamCondGPaConEInis($paginador, $criterio);
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

            $obs = self::getEkuDeE605GDtipDEGCamCondGPaConEInis(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE605GDtipDEGCamCondGPaConEInis($paginador, $criterio);
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

            $obs = self::getEkuDeE605GDtipDEGCamCondGPaConEInis(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_de_id' */ 	
	static function getOxEkuDeId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_DE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE605GDtipDEGCamCondGPaConEInis($paginador, $criterio);
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

            $obs = self::getEkuDeE605GDtipDEGCamCondGPaConEInis(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_e606_itipago' */ 	
	static function getOxEkuE606Itipago($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E606_ITIPAGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE605GDtipDEGCamCondGPaConEInis($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_e606_itipago' */ 	
	static function getOsxEkuE606Itipago($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E606_ITIPAGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeE605GDtipDEGCamCondGPaConEInis(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_e607_ddestipag' */ 	
	static function getOxEkuE607Ddestipag($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E607_DDESTIPAG, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE605GDtipDEGCamCondGPaConEInis($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_e607_ddestipag' */ 	
	static function getOsxEkuE607Ddestipag($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E607_DDESTIPAG, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeE605GDtipDEGCamCondGPaConEInis(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_e608_dmontipag' */ 	
	static function getOxEkuE608Dmontipag($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E608_DMONTIPAG, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE605GDtipDEGCamCondGPaConEInis($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_e608_dmontipag' */ 	
	static function getOsxEkuE608Dmontipag($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E608_DMONTIPAG, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeE605GDtipDEGCamCondGPaConEInis(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_e609_cmonetipag' */ 	
	static function getOxEkuE609Cmonetipag($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E609_CMONETIPAG, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE605GDtipDEGCamCondGPaConEInis($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_e609_cmonetipag' */ 	
	static function getOsxEkuE609Cmonetipag($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E609_CMONETIPAG, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeE605GDtipDEGCamCondGPaConEInis(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_e610_ddmonetipag' */ 	
	static function getOxEkuE610Ddmonetipag($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E610_DDMONETIPAG, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE605GDtipDEGCamCondGPaConEInis($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_e610_ddmonetipag' */ 	
	static function getOsxEkuE610Ddmonetipag($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E610_DDMONETIPAG, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeE605GDtipDEGCamCondGPaConEInis(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_e611_dticamtipa' */ 	
	static function getOxEkuE611Dticamtipa($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E611_DTICAMTIPA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE605GDtipDEGCamCondGPaConEInis($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_e611_dticamtipa' */ 	
	static function getOsxEkuE611Dticamtipa($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E611_DTICAMTIPA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeE605GDtipDEGCamCondGPaConEInis(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE605GDtipDEGCamCondGPaConEInis($paginador, $criterio);
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

            $obs = self::getEkuDeE605GDtipDEGCamCondGPaConEInis(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE605GDtipDEGCamCondGPaConEInis($paginador, $criterio);
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

            $obs = self::getEkuDeE605GDtipDEGCamCondGPaConEInis(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE605GDtipDEGCamCondGPaConEInis($paginador, $criterio);
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

            $obs = self::getEkuDeE605GDtipDEGCamCondGPaConEInis(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE605GDtipDEGCamCondGPaConEInis($paginador, $criterio);
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

            $obs = self::getEkuDeE605GDtipDEGCamCondGPaConEInis(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE605GDtipDEGCamCondGPaConEInis($paginador, $criterio);
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

            $obs = self::getEkuDeE605GDtipDEGCamCondGPaConEInis(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE605GDtipDEGCamCondGPaConEInis($paginador, $criterio);
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

            $obs = self::getEkuDeE605GDtipDEGCamCondGPaConEInis(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE605GDtipDEGCamCondGPaConEInis($paginador, $criterio);
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

            $obs = self::getEkuDeE605GDtipDEGCamCondGPaConEInis(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE605GDtipDEGCamCondGPaConEInis($paginador, $criterio);
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

            $obs = self::getEkuDeE605GDtipDEGCamCondGPaConEInis(null, $criterio);
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

            $obs = self::getEkuDeE605GDtipDEGCamCondGPaConEInis($paginador, $criterio);
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

            $obs = self::getEkuDeE605GDtipDEGCamCondGPaConEInis($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini_adm');
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
                $c->addTabla(EkuDeE605GDtipDEGCamCondGPaConEIni::GEN_TABLA);
                $c->addOrden(EkuDeE605GDtipDEGCamCondGPaConEIni::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_inis = EkuDeE605GDtipDEGCamCondGPaConEIni::getEkuDeE605GDtipDEGCamCondGPaConEInis(null, $c);

                $arr = array();
                foreach($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_inis as $eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini){
                    $descripcion = $eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>