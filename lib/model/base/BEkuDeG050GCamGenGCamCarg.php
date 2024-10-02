<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BEkuDeG050GCamGenGCamCarg
{ 
	
	const SES_PAGINACION = 'adm_ekudeg050gcamgengcamcarg_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_ekudeg050gcamgengcamcarg_paginas_registros';
	const SES_CRITERIOS = 'adm_ekudeg050gcamgengcamcarg_criterios';
	
	const GEN_CLASE = 'EkuDeG050GCamGenGCamCarg';
	const GEN_TABLA = 'eku_de_g050_g_cam_gen_g_cam_carg';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BEkuDeG050GCamGenGCamCarg */ 
	const GEN_ATTR_ID = 'eku_de_g050_g_cam_gen_g_cam_carg.id';
	const GEN_ATTR_DESCRIPCION = 'eku_de_g050_g_cam_gen_g_cam_carg.descripcion';
	const GEN_ATTR_EKU_DE_ID = 'eku_de_g050_g_cam_gen_g_cam_carg.eku_de_id';
	const GEN_ATTR_EKU_G051_CUNIMEDTOTVOL = 'eku_de_g050_g_cam_gen_g_cam_carg.eku_g051_cunimedtotvol';
	const GEN_ATTR_EKU_G052_DDESUNIMEDTOTVOL = 'eku_de_g050_g_cam_gen_g_cam_carg.eku_g052_ddesunimedtotvol';
	const GEN_ATTR_EKU_G053_DTOTVOLMERC = 'eku_de_g050_g_cam_gen_g_cam_carg.eku_g053_dtotvolmerc';
	const GEN_ATTR_EKU_G054_CUNIMEDTOTPES = 'eku_de_g050_g_cam_gen_g_cam_carg.eku_g054_cunimedtotpes';
	const GEN_ATTR_EKU_G055_DDESUNIMEDTOTPES = 'eku_de_g050_g_cam_gen_g_cam_carg.eku_g055_ddesunimedtotpes';
	const GEN_ATTR_EKU_G056_DTOTPESMERC = 'eku_de_g050_g_cam_gen_g_cam_carg.eku_g056_dtotpesmerc';
	const GEN_ATTR_EKU_G057_ICARCARGA = 'eku_de_g050_g_cam_gen_g_cam_carg.eku_g057_icarcarga';
	const GEN_ATTR_EKU_G058_DDESCARCARGA = 'eku_de_g050_g_cam_gen_g_cam_carg.eku_g058_ddescarcarga';
	const GEN_ATTR_CODIGO = 'eku_de_g050_g_cam_gen_g_cam_carg.codigo';
	const GEN_ATTR_OBSERVACION = 'eku_de_g050_g_cam_gen_g_cam_carg.observacion';
	const GEN_ATTR_ORDEN = 'eku_de_g050_g_cam_gen_g_cam_carg.orden';
	const GEN_ATTR_ESTADO = 'eku_de_g050_g_cam_gen_g_cam_carg.estado';
	const GEN_ATTR_CREADO = 'eku_de_g050_g_cam_gen_g_cam_carg.creado';
	const GEN_ATTR_CREADO_POR = 'eku_de_g050_g_cam_gen_g_cam_carg.creado_por';
	const GEN_ATTR_MODIFICADO = 'eku_de_g050_g_cam_gen_g_cam_carg.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'eku_de_g050_g_cam_gen_g_cam_carg.modificado_por';

	/* Constantes de Atributos Min de BEkuDeG050GCamGenGCamCarg */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_EKU_DE_ID = 'eku_de_id';
	const GEN_ATTR_MIN_EKU_G051_CUNIMEDTOTVOL = 'eku_g051_cunimedtotvol';
	const GEN_ATTR_MIN_EKU_G052_DDESUNIMEDTOTVOL = 'eku_g052_ddesunimedtotvol';
	const GEN_ATTR_MIN_EKU_G053_DTOTVOLMERC = 'eku_g053_dtotvolmerc';
	const GEN_ATTR_MIN_EKU_G054_CUNIMEDTOTPES = 'eku_g054_cunimedtotpes';
	const GEN_ATTR_MIN_EKU_G055_DDESUNIMEDTOTPES = 'eku_g055_ddesunimedtotpes';
	const GEN_ATTR_MIN_EKU_G056_DTOTPESMERC = 'eku_g056_dtotpesmerc';
	const GEN_ATTR_MIN_EKU_G057_ICARCARGA = 'eku_g057_icarcarga';
	const GEN_ATTR_MIN_EKU_G058_DDESCARCARGA = 'eku_g058_ddescarcarga';
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
	

	/* Atributos de BEkuDeG050GCamGenGCamCarg */ 
	private $id;
	private $descripcion;
	private $eku_de_id;
	private $eku_g051_cunimedtotvol;
	private $eku_g052_ddesunimedtotvol;
	private $eku_g053_dtotvolmerc;
	private $eku_g054_cunimedtotpes;
	private $eku_g055_ddesunimedtotpes;
	private $eku_g056_dtotpesmerc;
	private $eku_g057_icarcarga;
	private $eku_g058_ddescarcarga;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BEkuDeG050GCamGenGCamCarg */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getEkuDeId(){ if(isset($this->eku_de_id)){ return $this->eku_de_id; }else{ return 'null'; } }
	public function getEkuG051Cunimedtotvol(){ if(isset($this->eku_g051_cunimedtotvol)){ return $this->eku_g051_cunimedtotvol; }else{ return ''; } }
	public function getEkuG052Ddesunimedtotvol(){ if(isset($this->eku_g052_ddesunimedtotvol)){ return $this->eku_g052_ddesunimedtotvol; }else{ return ''; } }
	public function getEkuG053Dtotvolmerc(){ if(isset($this->eku_g053_dtotvolmerc)){ return $this->eku_g053_dtotvolmerc; }else{ return ''; } }
	public function getEkuG054Cunimedtotpes(){ if(isset($this->eku_g054_cunimedtotpes)){ return $this->eku_g054_cunimedtotpes; }else{ return ''; } }
	public function getEkuG055Ddesunimedtotpes(){ if(isset($this->eku_g055_ddesunimedtotpes)){ return $this->eku_g055_ddesunimedtotpes; }else{ return ''; } }
	public function getEkuG056Dtotpesmerc(){ if(isset($this->eku_g056_dtotpesmerc)){ return $this->eku_g056_dtotpesmerc; }else{ return ''; } }
	public function getEkuG057Icarcarga(){ if(isset($this->eku_g057_icarcarga)){ return $this->eku_g057_icarcarga; }else{ return ''; } }
	public function getEkuG058Ddescarcarga(){ if(isset($this->eku_g058_ddescarcarga)){ return $this->eku_g058_ddescarcarga; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BEkuDeG050GCamGenGCamCarg */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_EKU_DE_ID."
				, ".self::GEN_ATTR_EKU_G051_CUNIMEDTOTVOL."
				, ".self::GEN_ATTR_EKU_G052_DDESUNIMEDTOTVOL."
				, ".self::GEN_ATTR_EKU_G053_DTOTVOLMERC."
				, ".self::GEN_ATTR_EKU_G054_CUNIMEDTOTPES."
				, ".self::GEN_ATTR_EKU_G055_DDESUNIMEDTOTPES."
				, ".self::GEN_ATTR_EKU_G056_DTOTPESMERC."
				, ".self::GEN_ATTR_EKU_G057_ICARCARGA."
				, ".self::GEN_ATTR_EKU_G058_DDESCARCARGA."
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
				$this->setEkuG051Cunimedtotvol($fila[self::GEN_ATTR_MIN_EKU_G051_CUNIMEDTOTVOL]);
				$this->setEkuG052Ddesunimedtotvol($fila[self::GEN_ATTR_MIN_EKU_G052_DDESUNIMEDTOTVOL]);
				$this->setEkuG053Dtotvolmerc($fila[self::GEN_ATTR_MIN_EKU_G053_DTOTVOLMERC]);
				$this->setEkuG054Cunimedtotpes($fila[self::GEN_ATTR_MIN_EKU_G054_CUNIMEDTOTPES]);
				$this->setEkuG055Ddesunimedtotpes($fila[self::GEN_ATTR_MIN_EKU_G055_DDESUNIMEDTOTPES]);
				$this->setEkuG056Dtotpesmerc($fila[self::GEN_ATTR_MIN_EKU_G056_DTOTPESMERC]);
				$this->setEkuG057Icarcarga($fila[self::GEN_ATTR_MIN_EKU_G057_ICARCARGA]);
				$this->setEkuG058Ddescarcarga($fila[self::GEN_ATTR_MIN_EKU_G058_DDESCARCARGA]);
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
	public function setEkuG051Cunimedtotvol($v){ $this->eku_g051_cunimedtotvol = $v; }
	public function setEkuG052Ddesunimedtotvol($v){ $this->eku_g052_ddesunimedtotvol = $v; }
	public function setEkuG053Dtotvolmerc($v){ $this->eku_g053_dtotvolmerc = $v; }
	public function setEkuG054Cunimedtotpes($v){ $this->eku_g054_cunimedtotpes = $v; }
	public function setEkuG055Ddesunimedtotpes($v){ $this->eku_g055_ddesunimedtotpes = $v; }
	public function setEkuG056Dtotpesmerc($v){ $this->eku_g056_dtotpesmerc = $v; }
	public function setEkuG057Icarcarga($v){ $this->eku_g057_icarcarga = $v; }
	public function setEkuG058Ddescarcarga($v){ $this->eku_g058_ddescarcarga = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new EkuDeG050GCamGenGCamCarg();
            $o->setId($fila[EkuDeG050GCamGenGCamCarg::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setEkuDeId($fila[self::GEN_ATTR_MIN_EKU_DE_ID]);
			$o->setEkuG051Cunimedtotvol($fila[self::GEN_ATTR_MIN_EKU_G051_CUNIMEDTOTVOL]);
			$o->setEkuG052Ddesunimedtotvol($fila[self::GEN_ATTR_MIN_EKU_G052_DDESUNIMEDTOTVOL]);
			$o->setEkuG053Dtotvolmerc($fila[self::GEN_ATTR_MIN_EKU_G053_DTOTVOLMERC]);
			$o->setEkuG054Cunimedtotpes($fila[self::GEN_ATTR_MIN_EKU_G054_CUNIMEDTOTPES]);
			$o->setEkuG055Ddesunimedtotpes($fila[self::GEN_ATTR_MIN_EKU_G055_DDESUNIMEDTOTPES]);
			$o->setEkuG056Dtotpesmerc($fila[self::GEN_ATTR_MIN_EKU_G056_DTOTPESMERC]);
			$o->setEkuG057Icarcarga($fila[self::GEN_ATTR_MIN_EKU_G057_ICARCARGA]);
			$o->setEkuG058Ddescarcarga($fila[self::GEN_ATTR_MIN_EKU_G058_DDESCARCARGA]);
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

	/* Control de BEkuDeG050GCamGenGCamCarg */ 	
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

	/* Cambia el estado de BEkuDeG050GCamGenGCamCarg */ 	
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

	/* Save de BEkuDeG050GCamGenGCamCarg */ 	
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
						, ".self::GEN_ATTR_MIN_EKU_G051_CUNIMEDTOTVOL."
						, ".self::GEN_ATTR_MIN_EKU_G052_DDESUNIMEDTOTVOL."
						, ".self::GEN_ATTR_MIN_EKU_G053_DTOTVOLMERC."
						, ".self::GEN_ATTR_MIN_EKU_G054_CUNIMEDTOTPES."
						, ".self::GEN_ATTR_MIN_EKU_G055_DDESUNIMEDTOTPES."
						, ".self::GEN_ATTR_MIN_EKU_G056_DTOTPESMERC."
						, ".self::GEN_ATTR_MIN_EKU_G057_ICARCARGA."
						, ".self::GEN_ATTR_MIN_EKU_G058_DDESCARCARGA."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('eku_de_g050_g_cam_gen_g_cam_carg_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getEkuDeId()."
						, '".$this->getEkuG051Cunimedtotvol()."'
						, '".$this->getEkuG052Ddesunimedtotvol()."'
						, '".$this->getEkuG053Dtotvolmerc()."'
						, '".$this->getEkuG054Cunimedtotpes()."'
						, '".$this->getEkuG055Ddesunimedtotpes()."'
						, '".$this->getEkuG056Dtotpesmerc()."'
						, '".$this->getEkuG057Icarcarga()."'
						, '".$this->getEkuG058Ddescarcarga()."'
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('eku_de_g050_g_cam_gen_g_cam_carg_seq')";
            
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
                 
				 ".EkuDeG050GCamGenGCamCarg::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_EKU_DE_ID." = ".$this->getEkuDeId()."
						, ".self::GEN_ATTR_MIN_EKU_G051_CUNIMEDTOTVOL." = '".$this->getEkuG051Cunimedtotvol()."'
						, ".self::GEN_ATTR_MIN_EKU_G052_DDESUNIMEDTOTVOL." = '".$this->getEkuG052Ddesunimedtotvol()."'
						, ".self::GEN_ATTR_MIN_EKU_G053_DTOTVOLMERC." = '".$this->getEkuG053Dtotvolmerc()."'
						, ".self::GEN_ATTR_MIN_EKU_G054_CUNIMEDTOTPES." = '".$this->getEkuG054Cunimedtotpes()."'
						, ".self::GEN_ATTR_MIN_EKU_G055_DDESUNIMEDTOTPES." = '".$this->getEkuG055Ddesunimedtotpes()."'
						, ".self::GEN_ATTR_MIN_EKU_G056_DTOTPESMERC." = '".$this->getEkuG056Dtotpesmerc()."'
						, ".self::GEN_ATTR_MIN_EKU_G057_ICARCARGA." = '".$this->getEkuG057Icarcarga()."'
						, ".self::GEN_ATTR_MIN_EKU_G058_DDESCARCARGA." = '".$this->getEkuG058Ddescarcarga()."'
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
						, ".self::GEN_ATTR_MIN_EKU_G051_CUNIMEDTOTVOL."
						, ".self::GEN_ATTR_MIN_EKU_G052_DDESUNIMEDTOTVOL."
						, ".self::GEN_ATTR_MIN_EKU_G053_DTOTVOLMERC."
						, ".self::GEN_ATTR_MIN_EKU_G054_CUNIMEDTOTPES."
						, ".self::GEN_ATTR_MIN_EKU_G055_DDESUNIMEDTOTPES."
						, ".self::GEN_ATTR_MIN_EKU_G056_DTOTPESMERC."
						, ".self::GEN_ATTR_MIN_EKU_G057_ICARCARGA."
						, ".self::GEN_ATTR_MIN_EKU_G058_DDESCARCARGA."
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
						, '".$this->getEkuG051Cunimedtotvol()."'
						, '".$this->getEkuG052Ddesunimedtotvol()."'
						, '".$this->getEkuG053Dtotvolmerc()."'
						, '".$this->getEkuG054Cunimedtotpes()."'
						, '".$this->getEkuG055Ddesunimedtotpes()."'
						, '".$this->getEkuG056Dtotpesmerc()."'
						, '".$this->getEkuG057Icarcarga()."'
						, '".$this->getEkuG058Ddescarcarga()."'
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
                     
				 ".EkuDeG050GCamGenGCamCarg::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_EKU_DE_ID." = ".$this->getEkuDeId()."
						, ".self::GEN_ATTR_MIN_EKU_G051_CUNIMEDTOTVOL." = '".$this->getEkuG051Cunimedtotvol()."'
						, ".self::GEN_ATTR_MIN_EKU_G052_DDESUNIMEDTOTVOL." = '".$this->getEkuG052Ddesunimedtotvol()."'
						, ".self::GEN_ATTR_MIN_EKU_G053_DTOTVOLMERC." = '".$this->getEkuG053Dtotvolmerc()."'
						, ".self::GEN_ATTR_MIN_EKU_G054_CUNIMEDTOTPES." = '".$this->getEkuG054Cunimedtotpes()."'
						, ".self::GEN_ATTR_MIN_EKU_G055_DDESUNIMEDTOTPES." = '".$this->getEkuG055Ddesunimedtotpes()."'
						, ".self::GEN_ATTR_MIN_EKU_G056_DTOTPESMERC." = '".$this->getEkuG056Dtotpesmerc()."'
						, ".self::GEN_ATTR_MIN_EKU_G057_ICARCARGA." = '".$this->getEkuG057Icarcarga()."'
						, ".self::GEN_ATTR_MIN_EKU_G058_DDESCARCARGA." = '".$this->getEkuG058Ddescarcarga()."'
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
            $o = new EkuDeG050GCamGenGCamCarg();
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

	/* Delete de BEkuDeG050GCamGenGCamCarg */ 	
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
	
	public function duplicarEkuDeG050GCamGenGCamCarg(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getEkuDeG050GCamGenGCamCargs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = EkuDeG050GCamGenGCamCarg::setAplicarFiltrosDeAlcance($criterio);

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
	
		$ekudeg050gcamgengcamcargs = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $ekudeg050gcamgengcamcarg = new EkuDeG050GCamGenGCamCarg();
                    $ekudeg050gcamgengcamcarg->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $ekudeg050gcamgengcamcarg->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$ekudeg050gcamgengcamcarg->setEkuDeId($fila[self::GEN_ATTR_MIN_EKU_DE_ID]);
			$ekudeg050gcamgengcamcarg->setEkuG051Cunimedtotvol($fila[self::GEN_ATTR_MIN_EKU_G051_CUNIMEDTOTVOL]);
			$ekudeg050gcamgengcamcarg->setEkuG052Ddesunimedtotvol($fila[self::GEN_ATTR_MIN_EKU_G052_DDESUNIMEDTOTVOL]);
			$ekudeg050gcamgengcamcarg->setEkuG053Dtotvolmerc($fila[self::GEN_ATTR_MIN_EKU_G053_DTOTVOLMERC]);
			$ekudeg050gcamgengcamcarg->setEkuG054Cunimedtotpes($fila[self::GEN_ATTR_MIN_EKU_G054_CUNIMEDTOTPES]);
			$ekudeg050gcamgengcamcarg->setEkuG055Ddesunimedtotpes($fila[self::GEN_ATTR_MIN_EKU_G055_DDESUNIMEDTOTPES]);
			$ekudeg050gcamgengcamcarg->setEkuG056Dtotpesmerc($fila[self::GEN_ATTR_MIN_EKU_G056_DTOTPESMERC]);
			$ekudeg050gcamgengcamcarg->setEkuG057Icarcarga($fila[self::GEN_ATTR_MIN_EKU_G057_ICARCARGA]);
			$ekudeg050gcamgengcamcarg->setEkuG058Ddescarcarga($fila[self::GEN_ATTR_MIN_EKU_G058_DDESCARCARGA]);
			$ekudeg050gcamgengcamcarg->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$ekudeg050gcamgengcamcarg->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$ekudeg050gcamgengcamcarg->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$ekudeg050gcamgengcamcarg->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$ekudeg050gcamgengcamcarg->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$ekudeg050gcamgengcamcarg->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$ekudeg050gcamgengcamcarg->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$ekudeg050gcamgengcamcarg->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $ekudeg050gcamgengcamcargs[] = $ekudeg050gcamgengcamcarg;
		}
		
		return $ekudeg050gcamgengcamcargs;
	}	
	

	/* Método getEkuDeG050GCamGenGCamCargs Habilitados */ 	
	static function getEkuDeG050GCamGenGCamCargsHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return EkuDeG050GCamGenGCamCarg::getEkuDeG050GCamGenGCamCargs($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getEkuDeG050GCamGenGCamCargs para listado de Backend */ 	
	static function getEkuDeG050GCamGenGCamCargsDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return EkuDeG050GCamGenGCamCarg::getEkuDeG050GCamGenGCamCargs($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getEkuDeG050GCamGenGCamCargsCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = EkuDeG050GCamGenGCamCarg::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = EkuDeG050GCamGenGCamCarg::getEkuDeG050GCamGenGCamCargs($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getEkuDeG050GCamGenGCamCargs filtrado para select */ 	
	static function getEkuDeG050GCamGenGCamCargsCmbF($paginador = null, $criterio = null){
            $col = EkuDeG050GCamGenGCamCarg::getEkuDeG050GCamGenGCamCargs($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getEkuDeG050GCamGenGCamCargs filtrado por una coleccion de objetos foraneos de EkuDe */ 	
	static function getEkuDeG050GCamGenGCamCargsXEkuDes($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(EkuDeG050GCamGenGCamCarg::GEN_ATTR_EKU_DE_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(EkuDeG050GCamGenGCamCarg::GEN_TABLA);
            $c->addOrden(EkuDeG050GCamGenGCamCarg::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = EkuDeG050GCamGenGCamCarg::getEkuDeG050GCamGenGCamCargs($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getEkuDeId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'eku_de_g050_g_cam_gen_g_cam_carg_adm.php';
            $url_gestion = 'eku_de_g050_g_cam_gen_g_cam_carg_gestion.php';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM eku_de_g050_g_cam_gen_g_cam_carg'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'eku_de_g050_g_cam_gen_g_cam_carg';");
            
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

            $obs = self::getEkuDeG050GCamGenGCamCargs($paginador, $criterio);
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

            $obs = self::getEkuDeG050GCamGenGCamCargs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeG050GCamGenGCamCargs($paginador, $criterio);
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

            $obs = self::getEkuDeG050GCamGenGCamCargs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_de_id' */ 	
	static function getOxEkuDeId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_DE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeG050GCamGenGCamCargs($paginador, $criterio);
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

            $obs = self::getEkuDeG050GCamGenGCamCargs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_g051_cunimedtotvol' */ 	
	static function getOxEkuG051Cunimedtotvol($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_G051_CUNIMEDTOTVOL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeG050GCamGenGCamCargs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_g051_cunimedtotvol' */ 	
	static function getOsxEkuG051Cunimedtotvol($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_G051_CUNIMEDTOTVOL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeG050GCamGenGCamCargs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_g052_ddesunimedtotvol' */ 	
	static function getOxEkuG052Ddesunimedtotvol($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_G052_DDESUNIMEDTOTVOL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeG050GCamGenGCamCargs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_g052_ddesunimedtotvol' */ 	
	static function getOsxEkuG052Ddesunimedtotvol($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_G052_DDESUNIMEDTOTVOL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeG050GCamGenGCamCargs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_g053_dtotvolmerc' */ 	
	static function getOxEkuG053Dtotvolmerc($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_G053_DTOTVOLMERC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeG050GCamGenGCamCargs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_g053_dtotvolmerc' */ 	
	static function getOsxEkuG053Dtotvolmerc($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_G053_DTOTVOLMERC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeG050GCamGenGCamCargs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_g054_cunimedtotpes' */ 	
	static function getOxEkuG054Cunimedtotpes($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_G054_CUNIMEDTOTPES, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeG050GCamGenGCamCargs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_g054_cunimedtotpes' */ 	
	static function getOsxEkuG054Cunimedtotpes($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_G054_CUNIMEDTOTPES, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeG050GCamGenGCamCargs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_g055_ddesunimedtotpes' */ 	
	static function getOxEkuG055Ddesunimedtotpes($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_G055_DDESUNIMEDTOTPES, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeG050GCamGenGCamCargs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_g055_ddesunimedtotpes' */ 	
	static function getOsxEkuG055Ddesunimedtotpes($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_G055_DDESUNIMEDTOTPES, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeG050GCamGenGCamCargs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_g056_dtotpesmerc' */ 	
	static function getOxEkuG056Dtotpesmerc($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_G056_DTOTPESMERC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeG050GCamGenGCamCargs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_g056_dtotpesmerc' */ 	
	static function getOsxEkuG056Dtotpesmerc($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_G056_DTOTPESMERC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeG050GCamGenGCamCargs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_g057_icarcarga' */ 	
	static function getOxEkuG057Icarcarga($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_G057_ICARCARGA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeG050GCamGenGCamCargs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_g057_icarcarga' */ 	
	static function getOsxEkuG057Icarcarga($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_G057_ICARCARGA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeG050GCamGenGCamCargs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_g058_ddescarcarga' */ 	
	static function getOxEkuG058Ddescarcarga($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_G058_DDESCARCARGA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeG050GCamGenGCamCargs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_g058_ddescarcarga' */ 	
	static function getOsxEkuG058Ddescarcarga($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_G058_DDESCARCARGA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeG050GCamGenGCamCargs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeG050GCamGenGCamCargs($paginador, $criterio);
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

            $obs = self::getEkuDeG050GCamGenGCamCargs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeG050GCamGenGCamCargs($paginador, $criterio);
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

            $obs = self::getEkuDeG050GCamGenGCamCargs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeG050GCamGenGCamCargs($paginador, $criterio);
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

            $obs = self::getEkuDeG050GCamGenGCamCargs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeG050GCamGenGCamCargs($paginador, $criterio);
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

            $obs = self::getEkuDeG050GCamGenGCamCargs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeG050GCamGenGCamCargs($paginador, $criterio);
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

            $obs = self::getEkuDeG050GCamGenGCamCargs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeG050GCamGenGCamCargs($paginador, $criterio);
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

            $obs = self::getEkuDeG050GCamGenGCamCargs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeG050GCamGenGCamCargs($paginador, $criterio);
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

            $obs = self::getEkuDeG050GCamGenGCamCargs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeG050GCamGenGCamCargs($paginador, $criterio);
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

            $obs = self::getEkuDeG050GCamGenGCamCargs(null, $criterio);
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

            $obs = self::getEkuDeG050GCamGenGCamCargs($paginador, $criterio);
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

            $obs = self::getEkuDeG050GCamGenGCamCargs($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'eku_de_g050_g_cam_gen_g_cam_carg_adm');
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
                $c->addTabla(EkuDeG050GCamGenGCamCarg::GEN_TABLA);
                $c->addOrden(EkuDeG050GCamGenGCamCarg::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $eku_de_g050_g_cam_gen_g_cam_cargs = EkuDeG050GCamGenGCamCarg::getEkuDeG050GCamGenGCamCargs(null, $c);

                $arr = array();
                foreach($eku_de_g050_g_cam_gen_g_cam_cargs as $eku_de_g050_g_cam_gen_g_cam_carg){
                    $descripcion = $eku_de_g050_g_cam_gen_g_cam_carg->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>