<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BEkuDeE700GDtipDEGCamItem
{ 
	
	const SES_PAGINACION = 'adm_ekudee700gdtipdegcamitem_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_ekudee700gdtipdegcamitem_paginas_registros';
	const SES_CRITERIOS = 'adm_ekudee700gdtipdegcamitem_criterios';
	
	const GEN_CLASE = 'EkuDeE700GDtipDEGCamItem';
	const GEN_TABLA = 'eku_de_e700_g_dtip_d_e_g_cam_item';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BEkuDeE700GDtipDEGCamItem */ 
	const GEN_ATTR_ID = 'eku_de_e700_g_dtip_d_e_g_cam_item.id';
	const GEN_ATTR_DESCRIPCION = 'eku_de_e700_g_dtip_d_e_g_cam_item.descripcion';
	const GEN_ATTR_EKU_DE_ID = 'eku_de_e700_g_dtip_d_e_g_cam_item.eku_de_id';
	const GEN_ATTR_EKU_E701_DCODINT = 'eku_de_e700_g_dtip_d_e_g_cam_item.eku_e701_dcodint';
	const GEN_ATTR_EKU_E702_DPARARANC = 'eku_de_e700_g_dtip_d_e_g_cam_item.eku_e702_dpararanc';
	const GEN_ATTR_EKU_E703_DNCM = 'eku_de_e700_g_dtip_d_e_g_cam_item.eku_e703_dncm';
	const GEN_ATTR_EKU_E704_DDNCPG = 'eku_de_e700_g_dtip_d_e_g_cam_item.eku_e704_ddncpg';
	const GEN_ATTR_EKU_E705_DDNCPE = 'eku_de_e700_g_dtip_d_e_g_cam_item.eku_e705_ddncpe';
	const GEN_ATTR_EKU_E706_DGTIN = 'eku_de_e700_g_dtip_d_e_g_cam_item.eku_e706_dgtin';
	const GEN_ATTR_EKU_E707_DGTINPQ = 'eku_de_e700_g_dtip_d_e_g_cam_item.eku_e707_dgtinpq';
	const GEN_ATTR_EKU_E708_DDESPROSER = 'eku_de_e700_g_dtip_d_e_g_cam_item.eku_e708_ddesproser';
	const GEN_ATTR_EKU_E709_CUNIMED = 'eku_de_e700_g_dtip_d_e_g_cam_item.eku_e709_cunimed';
	const GEN_ATTR_EKU_E710_DDESUNIMED = 'eku_de_e700_g_dtip_d_e_g_cam_item.eku_e710_ddesunimed';
	const GEN_ATTR_EKU_E711_DCANTPROSER = 'eku_de_e700_g_dtip_d_e_g_cam_item.eku_e711_dcantproser';
	const GEN_ATTR_EKU_E712_CPAISORIG = 'eku_de_e700_g_dtip_d_e_g_cam_item.eku_e712_cpaisorig';
	const GEN_ATTR_EKU_E713_DDESPAISORIG = 'eku_de_e700_g_dtip_d_e_g_cam_item.eku_e713_ddespaisorig';
	const GEN_ATTR_EKU_E714_DINFITEM = 'eku_de_e700_g_dtip_d_e_g_cam_item.eku_e714_dinfitem';
	const GEN_ATTR_EKU_E715_CRELMERC = 'eku_de_e700_g_dtip_d_e_g_cam_item.eku_e715_crelmerc';
	const GEN_ATTR_EKU_E716_DDESRELMERC = 'eku_de_e700_g_dtip_d_e_g_cam_item.eku_e716_ddesrelmerc';
	const GEN_ATTR_EKU_E717_DCANQUIMER = 'eku_de_e700_g_dtip_d_e_g_cam_item.eku_e717_dcanquimer';
	const GEN_ATTR_EKU_E718_DPORQUIMER = 'eku_de_e700_g_dtip_d_e_g_cam_item.eku_e718_dporquimer';
	const GEN_ATTR_EKU_E719_DCDCANTICIPO = 'eku_de_e700_g_dtip_d_e_g_cam_item.eku_e719_dcdcanticipo';
	const GEN_ATTR_CODIGO = 'eku_de_e700_g_dtip_d_e_g_cam_item.codigo';
	const GEN_ATTR_OBSERVACION = 'eku_de_e700_g_dtip_d_e_g_cam_item.observacion';
	const GEN_ATTR_ORDEN = 'eku_de_e700_g_dtip_d_e_g_cam_item.orden';
	const GEN_ATTR_ESTADO = 'eku_de_e700_g_dtip_d_e_g_cam_item.estado';
	const GEN_ATTR_CREADO = 'eku_de_e700_g_dtip_d_e_g_cam_item.creado';
	const GEN_ATTR_CREADO_POR = 'eku_de_e700_g_dtip_d_e_g_cam_item.creado_por';
	const GEN_ATTR_MODIFICADO = 'eku_de_e700_g_dtip_d_e_g_cam_item.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'eku_de_e700_g_dtip_d_e_g_cam_item.modificado_por';

	/* Constantes de Atributos Min de BEkuDeE700GDtipDEGCamItem */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_EKU_DE_ID = 'eku_de_id';
	const GEN_ATTR_MIN_EKU_E701_DCODINT = 'eku_e701_dcodint';
	const GEN_ATTR_MIN_EKU_E702_DPARARANC = 'eku_e702_dpararanc';
	const GEN_ATTR_MIN_EKU_E703_DNCM = 'eku_e703_dncm';
	const GEN_ATTR_MIN_EKU_E704_DDNCPG = 'eku_e704_ddncpg';
	const GEN_ATTR_MIN_EKU_E705_DDNCPE = 'eku_e705_ddncpe';
	const GEN_ATTR_MIN_EKU_E706_DGTIN = 'eku_e706_dgtin';
	const GEN_ATTR_MIN_EKU_E707_DGTINPQ = 'eku_e707_dgtinpq';
	const GEN_ATTR_MIN_EKU_E708_DDESPROSER = 'eku_e708_ddesproser';
	const GEN_ATTR_MIN_EKU_E709_CUNIMED = 'eku_e709_cunimed';
	const GEN_ATTR_MIN_EKU_E710_DDESUNIMED = 'eku_e710_ddesunimed';
	const GEN_ATTR_MIN_EKU_E711_DCANTPROSER = 'eku_e711_dcantproser';
	const GEN_ATTR_MIN_EKU_E712_CPAISORIG = 'eku_e712_cpaisorig';
	const GEN_ATTR_MIN_EKU_E713_DDESPAISORIG = 'eku_e713_ddespaisorig';
	const GEN_ATTR_MIN_EKU_E714_DINFITEM = 'eku_e714_dinfitem';
	const GEN_ATTR_MIN_EKU_E715_CRELMERC = 'eku_e715_crelmerc';
	const GEN_ATTR_MIN_EKU_E716_DDESRELMERC = 'eku_e716_ddesrelmerc';
	const GEN_ATTR_MIN_EKU_E717_DCANQUIMER = 'eku_e717_dcanquimer';
	const GEN_ATTR_MIN_EKU_E718_DPORQUIMER = 'eku_e718_dporquimer';
	const GEN_ATTR_MIN_EKU_E719_DCDCANTICIPO = 'eku_e719_dcdcanticipo';
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
	

	/* Atributos de BEkuDeE700GDtipDEGCamItem */ 
	private $id;
	private $descripcion;
	private $eku_de_id;
	private $eku_e701_dcodint;
	private $eku_e702_dpararanc;
	private $eku_e703_dncm;
	private $eku_e704_ddncpg;
	private $eku_e705_ddncpe;
	private $eku_e706_dgtin;
	private $eku_e707_dgtinpq;
	private $eku_e708_ddesproser;
	private $eku_e709_cunimed;
	private $eku_e710_ddesunimed;
	private $eku_e711_dcantproser;
	private $eku_e712_cpaisorig;
	private $eku_e713_ddespaisorig;
	private $eku_e714_dinfitem;
	private $eku_e715_crelmerc;
	private $eku_e716_ddesrelmerc;
	private $eku_e717_dcanquimer;
	private $eku_e718_dporquimer;
	private $eku_e719_dcdcanticipo;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BEkuDeE700GDtipDEGCamItem */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getEkuDeId(){ if(isset($this->eku_de_id)){ return $this->eku_de_id; }else{ return 'null'; } }
	public function getEkuE701Dcodint(){ if(isset($this->eku_e701_dcodint)){ return $this->eku_e701_dcodint; }else{ return ''; } }
	public function getEkuE702Dpararanc(){ if(isset($this->eku_e702_dpararanc)){ return $this->eku_e702_dpararanc; }else{ return ''; } }
	public function getEkuE703Dncm(){ if(isset($this->eku_e703_dncm)){ return $this->eku_e703_dncm; }else{ return ''; } }
	public function getEkuE704Ddncpg(){ if(isset($this->eku_e704_ddncpg)){ return $this->eku_e704_ddncpg; }else{ return ''; } }
	public function getEkuE705Ddncpe(){ if(isset($this->eku_e705_ddncpe)){ return $this->eku_e705_ddncpe; }else{ return ''; } }
	public function getEkuE706Dgtin(){ if(isset($this->eku_e706_dgtin)){ return $this->eku_e706_dgtin; }else{ return ''; } }
	public function getEkuE707Dgtinpq(){ if(isset($this->eku_e707_dgtinpq)){ return $this->eku_e707_dgtinpq; }else{ return ''; } }
	public function getEkuE708Ddesproser(){ if(isset($this->eku_e708_ddesproser)){ return $this->eku_e708_ddesproser; }else{ return ''; } }
	public function getEkuE709Cunimed(){ if(isset($this->eku_e709_cunimed)){ return $this->eku_e709_cunimed; }else{ return ''; } }
	public function getEkuE710Ddesunimed(){ if(isset($this->eku_e710_ddesunimed)){ return $this->eku_e710_ddesunimed; }else{ return ''; } }
	public function getEkuE711Dcantproser(){ if(isset($this->eku_e711_dcantproser)){ return $this->eku_e711_dcantproser; }else{ return ''; } }
	public function getEkuE712Cpaisorig(){ if(isset($this->eku_e712_cpaisorig)){ return $this->eku_e712_cpaisorig; }else{ return ''; } }
	public function getEkuE713Ddespaisorig(){ if(isset($this->eku_e713_ddespaisorig)){ return $this->eku_e713_ddespaisorig; }else{ return ''; } }
	public function getEkuE714Dinfitem(){ if(isset($this->eku_e714_dinfitem)){ return $this->eku_e714_dinfitem; }else{ return ''; } }
	public function getEkuE715Crelmerc(){ if(isset($this->eku_e715_crelmerc)){ return $this->eku_e715_crelmerc; }else{ return ''; } }
	public function getEkuE716Ddesrelmerc(){ if(isset($this->eku_e716_ddesrelmerc)){ return $this->eku_e716_ddesrelmerc; }else{ return ''; } }
	public function getEkuE717Dcanquimer(){ if(isset($this->eku_e717_dcanquimer)){ return $this->eku_e717_dcanquimer; }else{ return ''; } }
	public function getEkuE718Dporquimer(){ if(isset($this->eku_e718_dporquimer)){ return $this->eku_e718_dporquimer; }else{ return ''; } }
	public function getEkuE719Dcdcanticipo(){ if(isset($this->eku_e719_dcdcanticipo)){ return $this->eku_e719_dcdcanticipo; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BEkuDeE700GDtipDEGCamItem */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_EKU_DE_ID."
				, ".self::GEN_ATTR_EKU_E701_DCODINT."
				, ".self::GEN_ATTR_EKU_E702_DPARARANC."
				, ".self::GEN_ATTR_EKU_E703_DNCM."
				, ".self::GEN_ATTR_EKU_E704_DDNCPG."
				, ".self::GEN_ATTR_EKU_E705_DDNCPE."
				, ".self::GEN_ATTR_EKU_E706_DGTIN."
				, ".self::GEN_ATTR_EKU_E707_DGTINPQ."
				, ".self::GEN_ATTR_EKU_E708_DDESPROSER."
				, ".self::GEN_ATTR_EKU_E709_CUNIMED."
				, ".self::GEN_ATTR_EKU_E710_DDESUNIMED."
				, ".self::GEN_ATTR_EKU_E711_DCANTPROSER."
				, ".self::GEN_ATTR_EKU_E712_CPAISORIG."
				, ".self::GEN_ATTR_EKU_E713_DDESPAISORIG."
				, ".self::GEN_ATTR_EKU_E714_DINFITEM."
				, ".self::GEN_ATTR_EKU_E715_CRELMERC."
				, ".self::GEN_ATTR_EKU_E716_DDESRELMERC."
				, ".self::GEN_ATTR_EKU_E717_DCANQUIMER."
				, ".self::GEN_ATTR_EKU_E718_DPORQUIMER."
				, ".self::GEN_ATTR_EKU_E719_DCDCANTICIPO."
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
				$this->setEkuE701Dcodint($fila[self::GEN_ATTR_MIN_EKU_E701_DCODINT]);
				$this->setEkuE702Dpararanc($fila[self::GEN_ATTR_MIN_EKU_E702_DPARARANC]);
				$this->setEkuE703Dncm($fila[self::GEN_ATTR_MIN_EKU_E703_DNCM]);
				$this->setEkuE704Ddncpg($fila[self::GEN_ATTR_MIN_EKU_E704_DDNCPG]);
				$this->setEkuE705Ddncpe($fila[self::GEN_ATTR_MIN_EKU_E705_DDNCPE]);
				$this->setEkuE706Dgtin($fila[self::GEN_ATTR_MIN_EKU_E706_DGTIN]);
				$this->setEkuE707Dgtinpq($fila[self::GEN_ATTR_MIN_EKU_E707_DGTINPQ]);
				$this->setEkuE708Ddesproser($fila[self::GEN_ATTR_MIN_EKU_E708_DDESPROSER]);
				$this->setEkuE709Cunimed($fila[self::GEN_ATTR_MIN_EKU_E709_CUNIMED]);
				$this->setEkuE710Ddesunimed($fila[self::GEN_ATTR_MIN_EKU_E710_DDESUNIMED]);
				$this->setEkuE711Dcantproser($fila[self::GEN_ATTR_MIN_EKU_E711_DCANTPROSER]);
				$this->setEkuE712Cpaisorig($fila[self::GEN_ATTR_MIN_EKU_E712_CPAISORIG]);
				$this->setEkuE713Ddespaisorig($fila[self::GEN_ATTR_MIN_EKU_E713_DDESPAISORIG]);
				$this->setEkuE714Dinfitem($fila[self::GEN_ATTR_MIN_EKU_E714_DINFITEM]);
				$this->setEkuE715Crelmerc($fila[self::GEN_ATTR_MIN_EKU_E715_CRELMERC]);
				$this->setEkuE716Ddesrelmerc($fila[self::GEN_ATTR_MIN_EKU_E716_DDESRELMERC]);
				$this->setEkuE717Dcanquimer($fila[self::GEN_ATTR_MIN_EKU_E717_DCANQUIMER]);
				$this->setEkuE718Dporquimer($fila[self::GEN_ATTR_MIN_EKU_E718_DPORQUIMER]);
				$this->setEkuE719Dcdcanticipo($fila[self::GEN_ATTR_MIN_EKU_E719_DCDCANTICIPO]);
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
	public function setEkuE701Dcodint($v){ $this->eku_e701_dcodint = $v; }
	public function setEkuE702Dpararanc($v){ $this->eku_e702_dpararanc = $v; }
	public function setEkuE703Dncm($v){ $this->eku_e703_dncm = $v; }
	public function setEkuE704Ddncpg($v){ $this->eku_e704_ddncpg = $v; }
	public function setEkuE705Ddncpe($v){ $this->eku_e705_ddncpe = $v; }
	public function setEkuE706Dgtin($v){ $this->eku_e706_dgtin = $v; }
	public function setEkuE707Dgtinpq($v){ $this->eku_e707_dgtinpq = $v; }
	public function setEkuE708Ddesproser($v){ $this->eku_e708_ddesproser = $v; }
	public function setEkuE709Cunimed($v){ $this->eku_e709_cunimed = $v; }
	public function setEkuE710Ddesunimed($v){ $this->eku_e710_ddesunimed = $v; }
	public function setEkuE711Dcantproser($v){ $this->eku_e711_dcantproser = $v; }
	public function setEkuE712Cpaisorig($v){ $this->eku_e712_cpaisorig = $v; }
	public function setEkuE713Ddespaisorig($v){ $this->eku_e713_ddespaisorig = $v; }
	public function setEkuE714Dinfitem($v){ $this->eku_e714_dinfitem = $v; }
	public function setEkuE715Crelmerc($v){ $this->eku_e715_crelmerc = $v; }
	public function setEkuE716Ddesrelmerc($v){ $this->eku_e716_ddesrelmerc = $v; }
	public function setEkuE717Dcanquimer($v){ $this->eku_e717_dcanquimer = $v; }
	public function setEkuE718Dporquimer($v){ $this->eku_e718_dporquimer = $v; }
	public function setEkuE719Dcdcanticipo($v){ $this->eku_e719_dcdcanticipo = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new EkuDeE700GDtipDEGCamItem();
            $o->setId($fila[EkuDeE700GDtipDEGCamItem::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setEkuDeId($fila[self::GEN_ATTR_MIN_EKU_DE_ID]);
			$o->setEkuE701Dcodint($fila[self::GEN_ATTR_MIN_EKU_E701_DCODINT]);
			$o->setEkuE702Dpararanc($fila[self::GEN_ATTR_MIN_EKU_E702_DPARARANC]);
			$o->setEkuE703Dncm($fila[self::GEN_ATTR_MIN_EKU_E703_DNCM]);
			$o->setEkuE704Ddncpg($fila[self::GEN_ATTR_MIN_EKU_E704_DDNCPG]);
			$o->setEkuE705Ddncpe($fila[self::GEN_ATTR_MIN_EKU_E705_DDNCPE]);
			$o->setEkuE706Dgtin($fila[self::GEN_ATTR_MIN_EKU_E706_DGTIN]);
			$o->setEkuE707Dgtinpq($fila[self::GEN_ATTR_MIN_EKU_E707_DGTINPQ]);
			$o->setEkuE708Ddesproser($fila[self::GEN_ATTR_MIN_EKU_E708_DDESPROSER]);
			$o->setEkuE709Cunimed($fila[self::GEN_ATTR_MIN_EKU_E709_CUNIMED]);
			$o->setEkuE710Ddesunimed($fila[self::GEN_ATTR_MIN_EKU_E710_DDESUNIMED]);
			$o->setEkuE711Dcantproser($fila[self::GEN_ATTR_MIN_EKU_E711_DCANTPROSER]);
			$o->setEkuE712Cpaisorig($fila[self::GEN_ATTR_MIN_EKU_E712_CPAISORIG]);
			$o->setEkuE713Ddespaisorig($fila[self::GEN_ATTR_MIN_EKU_E713_DDESPAISORIG]);
			$o->setEkuE714Dinfitem($fila[self::GEN_ATTR_MIN_EKU_E714_DINFITEM]);
			$o->setEkuE715Crelmerc($fila[self::GEN_ATTR_MIN_EKU_E715_CRELMERC]);
			$o->setEkuE716Ddesrelmerc($fila[self::GEN_ATTR_MIN_EKU_E716_DDESRELMERC]);
			$o->setEkuE717Dcanquimer($fila[self::GEN_ATTR_MIN_EKU_E717_DCANQUIMER]);
			$o->setEkuE718Dporquimer($fila[self::GEN_ATTR_MIN_EKU_E718_DPORQUIMER]);
			$o->setEkuE719Dcdcanticipo($fila[self::GEN_ATTR_MIN_EKU_E719_DCDCANTICIPO]);
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

	/* Control de BEkuDeE700GDtipDEGCamItem */ 	
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

	/* Cambia el estado de BEkuDeE700GDtipDEGCamItem */ 	
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

	/* Save de BEkuDeE700GDtipDEGCamItem */ 	
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
						, ".self::GEN_ATTR_MIN_EKU_E701_DCODINT."
						, ".self::GEN_ATTR_MIN_EKU_E702_DPARARANC."
						, ".self::GEN_ATTR_MIN_EKU_E703_DNCM."
						, ".self::GEN_ATTR_MIN_EKU_E704_DDNCPG."
						, ".self::GEN_ATTR_MIN_EKU_E705_DDNCPE."
						, ".self::GEN_ATTR_MIN_EKU_E706_DGTIN."
						, ".self::GEN_ATTR_MIN_EKU_E707_DGTINPQ."
						, ".self::GEN_ATTR_MIN_EKU_E708_DDESPROSER."
						, ".self::GEN_ATTR_MIN_EKU_E709_CUNIMED."
						, ".self::GEN_ATTR_MIN_EKU_E710_DDESUNIMED."
						, ".self::GEN_ATTR_MIN_EKU_E711_DCANTPROSER."
						, ".self::GEN_ATTR_MIN_EKU_E712_CPAISORIG."
						, ".self::GEN_ATTR_MIN_EKU_E713_DDESPAISORIG."
						, ".self::GEN_ATTR_MIN_EKU_E714_DINFITEM."
						, ".self::GEN_ATTR_MIN_EKU_E715_CRELMERC."
						, ".self::GEN_ATTR_MIN_EKU_E716_DDESRELMERC."
						, ".self::GEN_ATTR_MIN_EKU_E717_DCANQUIMER."
						, ".self::GEN_ATTR_MIN_EKU_E718_DPORQUIMER."
						, ".self::GEN_ATTR_MIN_EKU_E719_DCDCANTICIPO."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('eku_de_e700_g_dtip_d_e_g_cam_item_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getEkuDeId()."
						, '".$this->getEkuE701Dcodint()."'
						, '".$this->getEkuE702Dpararanc()."'
						, '".$this->getEkuE703Dncm()."'
						, '".$this->getEkuE704Ddncpg()."'
						, '".$this->getEkuE705Ddncpe()."'
						, '".$this->getEkuE706Dgtin()."'
						, '".$this->getEkuE707Dgtinpq()."'
						, '".$this->getEkuE708Ddesproser()."'
						, '".$this->getEkuE709Cunimed()."'
						, '".$this->getEkuE710Ddesunimed()."'
						, '".$this->getEkuE711Dcantproser()."'
						, '".$this->getEkuE712Cpaisorig()."'
						, '".$this->getEkuE713Ddespaisorig()."'
						, '".$this->getEkuE714Dinfitem()."'
						, '".$this->getEkuE715Crelmerc()."'
						, '".$this->getEkuE716Ddesrelmerc()."'
						, '".$this->getEkuE717Dcanquimer()."'
						, '".$this->getEkuE718Dporquimer()."'
						, '".$this->getEkuE719Dcdcanticipo()."'
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('eku_de_e700_g_dtip_d_e_g_cam_item_seq')";
            
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
                 
				 ".EkuDeE700GDtipDEGCamItem::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_EKU_DE_ID." = ".$this->getEkuDeId()."
						, ".self::GEN_ATTR_MIN_EKU_E701_DCODINT." = '".$this->getEkuE701Dcodint()."'
						, ".self::GEN_ATTR_MIN_EKU_E702_DPARARANC." = '".$this->getEkuE702Dpararanc()."'
						, ".self::GEN_ATTR_MIN_EKU_E703_DNCM." = '".$this->getEkuE703Dncm()."'
						, ".self::GEN_ATTR_MIN_EKU_E704_DDNCPG." = '".$this->getEkuE704Ddncpg()."'
						, ".self::GEN_ATTR_MIN_EKU_E705_DDNCPE." = '".$this->getEkuE705Ddncpe()."'
						, ".self::GEN_ATTR_MIN_EKU_E706_DGTIN." = '".$this->getEkuE706Dgtin()."'
						, ".self::GEN_ATTR_MIN_EKU_E707_DGTINPQ." = '".$this->getEkuE707Dgtinpq()."'
						, ".self::GEN_ATTR_MIN_EKU_E708_DDESPROSER." = '".$this->getEkuE708Ddesproser()."'
						, ".self::GEN_ATTR_MIN_EKU_E709_CUNIMED." = '".$this->getEkuE709Cunimed()."'
						, ".self::GEN_ATTR_MIN_EKU_E710_DDESUNIMED." = '".$this->getEkuE710Ddesunimed()."'
						, ".self::GEN_ATTR_MIN_EKU_E711_DCANTPROSER." = '".$this->getEkuE711Dcantproser()."'
						, ".self::GEN_ATTR_MIN_EKU_E712_CPAISORIG." = '".$this->getEkuE712Cpaisorig()."'
						, ".self::GEN_ATTR_MIN_EKU_E713_DDESPAISORIG." = '".$this->getEkuE713Ddespaisorig()."'
						, ".self::GEN_ATTR_MIN_EKU_E714_DINFITEM." = '".$this->getEkuE714Dinfitem()."'
						, ".self::GEN_ATTR_MIN_EKU_E715_CRELMERC." = '".$this->getEkuE715Crelmerc()."'
						, ".self::GEN_ATTR_MIN_EKU_E716_DDESRELMERC." = '".$this->getEkuE716Ddesrelmerc()."'
						, ".self::GEN_ATTR_MIN_EKU_E717_DCANQUIMER." = '".$this->getEkuE717Dcanquimer()."'
						, ".self::GEN_ATTR_MIN_EKU_E718_DPORQUIMER." = '".$this->getEkuE718Dporquimer()."'
						, ".self::GEN_ATTR_MIN_EKU_E719_DCDCANTICIPO." = '".$this->getEkuE719Dcdcanticipo()."'
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
						, ".self::GEN_ATTR_MIN_EKU_E701_DCODINT."
						, ".self::GEN_ATTR_MIN_EKU_E702_DPARARANC."
						, ".self::GEN_ATTR_MIN_EKU_E703_DNCM."
						, ".self::GEN_ATTR_MIN_EKU_E704_DDNCPG."
						, ".self::GEN_ATTR_MIN_EKU_E705_DDNCPE."
						, ".self::GEN_ATTR_MIN_EKU_E706_DGTIN."
						, ".self::GEN_ATTR_MIN_EKU_E707_DGTINPQ."
						, ".self::GEN_ATTR_MIN_EKU_E708_DDESPROSER."
						, ".self::GEN_ATTR_MIN_EKU_E709_CUNIMED."
						, ".self::GEN_ATTR_MIN_EKU_E710_DDESUNIMED."
						, ".self::GEN_ATTR_MIN_EKU_E711_DCANTPROSER."
						, ".self::GEN_ATTR_MIN_EKU_E712_CPAISORIG."
						, ".self::GEN_ATTR_MIN_EKU_E713_DDESPAISORIG."
						, ".self::GEN_ATTR_MIN_EKU_E714_DINFITEM."
						, ".self::GEN_ATTR_MIN_EKU_E715_CRELMERC."
						, ".self::GEN_ATTR_MIN_EKU_E716_DDESRELMERC."
						, ".self::GEN_ATTR_MIN_EKU_E717_DCANQUIMER."
						, ".self::GEN_ATTR_MIN_EKU_E718_DPORQUIMER."
						, ".self::GEN_ATTR_MIN_EKU_E719_DCDCANTICIPO."
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
						, '".$this->getEkuE701Dcodint()."'
						, '".$this->getEkuE702Dpararanc()."'
						, '".$this->getEkuE703Dncm()."'
						, '".$this->getEkuE704Ddncpg()."'
						, '".$this->getEkuE705Ddncpe()."'
						, '".$this->getEkuE706Dgtin()."'
						, '".$this->getEkuE707Dgtinpq()."'
						, '".$this->getEkuE708Ddesproser()."'
						, '".$this->getEkuE709Cunimed()."'
						, '".$this->getEkuE710Ddesunimed()."'
						, '".$this->getEkuE711Dcantproser()."'
						, '".$this->getEkuE712Cpaisorig()."'
						, '".$this->getEkuE713Ddespaisorig()."'
						, '".$this->getEkuE714Dinfitem()."'
						, '".$this->getEkuE715Crelmerc()."'
						, '".$this->getEkuE716Ddesrelmerc()."'
						, '".$this->getEkuE717Dcanquimer()."'
						, '".$this->getEkuE718Dporquimer()."'
						, '".$this->getEkuE719Dcdcanticipo()."'
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
                     
				 ".EkuDeE700GDtipDEGCamItem::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_EKU_DE_ID." = ".$this->getEkuDeId()."
						, ".self::GEN_ATTR_MIN_EKU_E701_DCODINT." = '".$this->getEkuE701Dcodint()."'
						, ".self::GEN_ATTR_MIN_EKU_E702_DPARARANC." = '".$this->getEkuE702Dpararanc()."'
						, ".self::GEN_ATTR_MIN_EKU_E703_DNCM." = '".$this->getEkuE703Dncm()."'
						, ".self::GEN_ATTR_MIN_EKU_E704_DDNCPG." = '".$this->getEkuE704Ddncpg()."'
						, ".self::GEN_ATTR_MIN_EKU_E705_DDNCPE." = '".$this->getEkuE705Ddncpe()."'
						, ".self::GEN_ATTR_MIN_EKU_E706_DGTIN." = '".$this->getEkuE706Dgtin()."'
						, ".self::GEN_ATTR_MIN_EKU_E707_DGTINPQ." = '".$this->getEkuE707Dgtinpq()."'
						, ".self::GEN_ATTR_MIN_EKU_E708_DDESPROSER." = '".$this->getEkuE708Ddesproser()."'
						, ".self::GEN_ATTR_MIN_EKU_E709_CUNIMED." = '".$this->getEkuE709Cunimed()."'
						, ".self::GEN_ATTR_MIN_EKU_E710_DDESUNIMED." = '".$this->getEkuE710Ddesunimed()."'
						, ".self::GEN_ATTR_MIN_EKU_E711_DCANTPROSER." = '".$this->getEkuE711Dcantproser()."'
						, ".self::GEN_ATTR_MIN_EKU_E712_CPAISORIG." = '".$this->getEkuE712Cpaisorig()."'
						, ".self::GEN_ATTR_MIN_EKU_E713_DDESPAISORIG." = '".$this->getEkuE713Ddespaisorig()."'
						, ".self::GEN_ATTR_MIN_EKU_E714_DINFITEM." = '".$this->getEkuE714Dinfitem()."'
						, ".self::GEN_ATTR_MIN_EKU_E715_CRELMERC." = '".$this->getEkuE715Crelmerc()."'
						, ".self::GEN_ATTR_MIN_EKU_E716_DDESRELMERC." = '".$this->getEkuE716Ddesrelmerc()."'
						, ".self::GEN_ATTR_MIN_EKU_E717_DCANQUIMER." = '".$this->getEkuE717Dcanquimer()."'
						, ".self::GEN_ATTR_MIN_EKU_E718_DPORQUIMER." = '".$this->getEkuE718Dporquimer()."'
						, ".self::GEN_ATTR_MIN_EKU_E719_DCDCANTICIPO." = '".$this->getEkuE719Dcdcanticipo()."'
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
            $o = new EkuDeE700GDtipDEGCamItem();
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

	/* Delete de BEkuDeE700GDtipDEGCamItem */ 	
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
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarEkuDeE700GDtipDEGCamItem(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getEkuDeE700GDtipDEGCamItems($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = EkuDeE700GDtipDEGCamItem::setAplicarFiltrosDeAlcance($criterio);

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
	
		$ekudee700gdtipdegcamitems = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $ekudee700gdtipdegcamitem = new EkuDeE700GDtipDEGCamItem();
                    $ekudee700gdtipdegcamitem->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $ekudee700gdtipdegcamitem->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$ekudee700gdtipdegcamitem->setEkuDeId($fila[self::GEN_ATTR_MIN_EKU_DE_ID]);
			$ekudee700gdtipdegcamitem->setEkuE701Dcodint($fila[self::GEN_ATTR_MIN_EKU_E701_DCODINT]);
			$ekudee700gdtipdegcamitem->setEkuE702Dpararanc($fila[self::GEN_ATTR_MIN_EKU_E702_DPARARANC]);
			$ekudee700gdtipdegcamitem->setEkuE703Dncm($fila[self::GEN_ATTR_MIN_EKU_E703_DNCM]);
			$ekudee700gdtipdegcamitem->setEkuE704Ddncpg($fila[self::GEN_ATTR_MIN_EKU_E704_DDNCPG]);
			$ekudee700gdtipdegcamitem->setEkuE705Ddncpe($fila[self::GEN_ATTR_MIN_EKU_E705_DDNCPE]);
			$ekudee700gdtipdegcamitem->setEkuE706Dgtin($fila[self::GEN_ATTR_MIN_EKU_E706_DGTIN]);
			$ekudee700gdtipdegcamitem->setEkuE707Dgtinpq($fila[self::GEN_ATTR_MIN_EKU_E707_DGTINPQ]);
			$ekudee700gdtipdegcamitem->setEkuE708Ddesproser($fila[self::GEN_ATTR_MIN_EKU_E708_DDESPROSER]);
			$ekudee700gdtipdegcamitem->setEkuE709Cunimed($fila[self::GEN_ATTR_MIN_EKU_E709_CUNIMED]);
			$ekudee700gdtipdegcamitem->setEkuE710Ddesunimed($fila[self::GEN_ATTR_MIN_EKU_E710_DDESUNIMED]);
			$ekudee700gdtipdegcamitem->setEkuE711Dcantproser($fila[self::GEN_ATTR_MIN_EKU_E711_DCANTPROSER]);
			$ekudee700gdtipdegcamitem->setEkuE712Cpaisorig($fila[self::GEN_ATTR_MIN_EKU_E712_CPAISORIG]);
			$ekudee700gdtipdegcamitem->setEkuE713Ddespaisorig($fila[self::GEN_ATTR_MIN_EKU_E713_DDESPAISORIG]);
			$ekudee700gdtipdegcamitem->setEkuE714Dinfitem($fila[self::GEN_ATTR_MIN_EKU_E714_DINFITEM]);
			$ekudee700gdtipdegcamitem->setEkuE715Crelmerc($fila[self::GEN_ATTR_MIN_EKU_E715_CRELMERC]);
			$ekudee700gdtipdegcamitem->setEkuE716Ddesrelmerc($fila[self::GEN_ATTR_MIN_EKU_E716_DDESRELMERC]);
			$ekudee700gdtipdegcamitem->setEkuE717Dcanquimer($fila[self::GEN_ATTR_MIN_EKU_E717_DCANQUIMER]);
			$ekudee700gdtipdegcamitem->setEkuE718Dporquimer($fila[self::GEN_ATTR_MIN_EKU_E718_DPORQUIMER]);
			$ekudee700gdtipdegcamitem->setEkuE719Dcdcanticipo($fila[self::GEN_ATTR_MIN_EKU_E719_DCDCANTICIPO]);
			$ekudee700gdtipdegcamitem->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$ekudee700gdtipdegcamitem->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$ekudee700gdtipdegcamitem->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$ekudee700gdtipdegcamitem->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$ekudee700gdtipdegcamitem->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$ekudee700gdtipdegcamitem->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$ekudee700gdtipdegcamitem->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$ekudee700gdtipdegcamitem->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $ekudee700gdtipdegcamitems[] = $ekudee700gdtipdegcamitem;
		}
		
		return $ekudee700gdtipdegcamitems;
	}	
	

	/* Método getEkuDeE700GDtipDEGCamItems Habilitados */ 	
	static function getEkuDeE700GDtipDEGCamItemsHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return EkuDeE700GDtipDEGCamItem::getEkuDeE700GDtipDEGCamItems($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getEkuDeE700GDtipDEGCamItems para listado de Backend */ 	
	static function getEkuDeE700GDtipDEGCamItemsDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return EkuDeE700GDtipDEGCamItem::getEkuDeE700GDtipDEGCamItems($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getEkuDeE700GDtipDEGCamItemsCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = EkuDeE700GDtipDEGCamItem::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = EkuDeE700GDtipDEGCamItem::getEkuDeE700GDtipDEGCamItems($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getEkuDeE700GDtipDEGCamItems filtrado para select */ 	
	static function getEkuDeE700GDtipDEGCamItemsCmbF($paginador = null, $criterio = null){
            $col = EkuDeE700GDtipDEGCamItem::getEkuDeE700GDtipDEGCamItems($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getEkuDeE700GDtipDEGCamItems filtrado por una coleccion de objetos foraneos de EkuDe */ 	
	static function getEkuDeE700GDtipDEGCamItemsXEkuDes($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(EkuDeE700GDtipDEGCamItem::GEN_ATTR_EKU_DE_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(EkuDeE700GDtipDEGCamItem::GEN_TABLA);
            $c->addOrden(EkuDeE700GDtipDEGCamItem::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = EkuDeE700GDtipDEGCamItem::getEkuDeE700GDtipDEGCamItems($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getEkuDeId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'eku_de_e700_g_dtip_d_e_g_cam_item_adm.php';
            $url_gestion = 'eku_de_e700_g_dtip_d_e_g_cam_item_gestion.php';
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
                
            $criterio->add(EkuDeE720GDtipDEGCamItemGValorItem::GEN_ATTR_EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(EkuDeE720GDtipDEGCamItemGValorItem::GEN_ATTR_EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeE720GDtipDEGCamItemGValorItem::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeE720GDtipDEGCamItemGValorItem::getEkuDeE720GDtipDEGCamItemGValorItemsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener EkuDes (Coleccion) relacionados a traves de EkuDeE720GDtipDEGCamItemGValorItem */ 	
	public function getEkuDesXEkuDeE720GDtipDEGCamItemGValorItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(EkuDe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeE720GDtipDEGCamItemGValorItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeE720GDtipDEGCamItemGValorItem::GEN_ATTR_EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDe::GEN_TABLA);
            $c->addRealJoin(EkuDeE720GDtipDEGCamItemGValorItem::GEN_TABLA, EkuDeE720GDtipDEGCamItemGValorItem::GEN_ATTR_EKU_DE_ID, EkuDe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuDe::getEkuDes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de EkuDes relacionados a traves de EkuDeE720GDtipDEGCamItemGValorItem */ 	
	public function getCantidadEkuDesXEkuDeE720GDtipDEGCamItemGValorItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(EkuDe::GEN_ATTR_ID);
            if($estado){
                $c->add(EkuDe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeE720GDtipDEGCamItemGValorItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeE720GDtipDEGCamItemGValorItem::GEN_ATTR_EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDe::GEN_TABLA);
            $c->addRealJoin(EkuDeE720GDtipDEGCamItemGValorItem::GEN_TABLA, EkuDeE720GDtipDEGCamItemGValorItem::GEN_ATTR_EKU_DE_ID, EkuDe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuDe::getEkuDes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener EkuDe (Objeto) relacionado a traves de EkuDeE720GDtipDEGCamItemGValorItem */ 	
	public function getEkuDeXEkuDeE720GDtipDEGCamItemGValorItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getEkuDesXEkuDeE720GDtipDEGCamItemGValorItem($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(EkuDeE730GDtipDEGCamItemGCamIVA::GEN_ATTR_EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(EkuDeE730GDtipDEGCamItemGCamIVA::GEN_ATTR_EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeE730GDtipDEGCamItemGCamIVA::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeE730GDtipDEGCamItemGCamIVA::getEkuDeE730GDtipDEGCamItemGCamIVAsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener EkuDes (Coleccion) relacionados a traves de EkuDeE730GDtipDEGCamItemGCamIVA */ 	
	public function getEkuDesXEkuDeE730GDtipDEGCamItemGCamIVA($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(EkuDe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeE730GDtipDEGCamItemGCamIVA::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeE730GDtipDEGCamItemGCamIVA::GEN_ATTR_EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDe::GEN_TABLA);
            $c->addRealJoin(EkuDeE730GDtipDEGCamItemGCamIVA::GEN_TABLA, EkuDeE730GDtipDEGCamItemGCamIVA::GEN_ATTR_EKU_DE_ID, EkuDe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuDe::getEkuDes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de EkuDes relacionados a traves de EkuDeE730GDtipDEGCamItemGCamIVA */ 	
	public function getCantidadEkuDesXEkuDeE730GDtipDEGCamItemGCamIVA($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(EkuDe::GEN_ATTR_ID);
            if($estado){
                $c->add(EkuDe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeE730GDtipDEGCamItemGCamIVA::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeE730GDtipDEGCamItemGCamIVA::GEN_ATTR_EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDe::GEN_TABLA);
            $c->addRealJoin(EkuDeE730GDtipDEGCamItemGCamIVA::GEN_TABLA, EkuDeE730GDtipDEGCamItemGCamIVA::GEN_ATTR_EKU_DE_ID, EkuDe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuDe::getEkuDes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener EkuDe (Objeto) relacionado a traves de EkuDeE730GDtipDEGCamItemGCamIVA */ 	
	public function getEkuDeXEkuDeE730GDtipDEGCamItemGCamIVA($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getEkuDesXEkuDeE730GDtipDEGCamItemGCamIVA($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(EkuDeE750GDtipDEGCamItemGRasMerc::GEN_ATTR_EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(EkuDeE750GDtipDEGCamItemGRasMerc::GEN_ATTR_EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeE750GDtipDEGCamItemGRasMerc::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeE750GDtipDEGCamItemGRasMerc::getEkuDeE750GDtipDEGCamItemGRasMercsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener EkuDes (Coleccion) relacionados a traves de EkuDeE750GDtipDEGCamItemGRasMerc */ 	
	public function getEkuDesXEkuDeE750GDtipDEGCamItemGRasMerc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(EkuDe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeE750GDtipDEGCamItemGRasMerc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeE750GDtipDEGCamItemGRasMerc::GEN_ATTR_EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDe::GEN_TABLA);
            $c->addRealJoin(EkuDeE750GDtipDEGCamItemGRasMerc::GEN_TABLA, EkuDeE750GDtipDEGCamItemGRasMerc::GEN_ATTR_EKU_DE_ID, EkuDe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuDe::getEkuDes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de EkuDes relacionados a traves de EkuDeE750GDtipDEGCamItemGRasMerc */ 	
	public function getCantidadEkuDesXEkuDeE750GDtipDEGCamItemGRasMerc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(EkuDe::GEN_ATTR_ID);
            if($estado){
                $c->add(EkuDe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeE750GDtipDEGCamItemGRasMerc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeE750GDtipDEGCamItemGRasMerc::GEN_ATTR_EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDe::GEN_TABLA);
            $c->addRealJoin(EkuDeE750GDtipDEGCamItemGRasMerc::GEN_TABLA, EkuDeE750GDtipDEGCamItemGRasMerc::GEN_ATTR_EKU_DE_ID, EkuDe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuDe::getEkuDes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener EkuDe (Objeto) relacionado a traves de EkuDeE750GDtipDEGCamItemGRasMerc */ 	
	public function getEkuDeXEkuDeE750GDtipDEGCamItemGRasMerc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getEkuDesXEkuDeE750GDtipDEGCamItemGRasMerc($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(EkuDeE770GDtipDEGCamItemGVehNuevo::GEN_ATTR_EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(EkuDeE770GDtipDEGCamItemGVehNuevo::GEN_ATTR_EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeE770GDtipDEGCamItemGVehNuevo::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeE770GDtipDEGCamItemGVehNuevo::getEkuDeE770GDtipDEGCamItemGVehNuevosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener EkuDes (Coleccion) relacionados a traves de EkuDeE770GDtipDEGCamItemGVehNuevo */ 	
	public function getEkuDesXEkuDeE770GDtipDEGCamItemGVehNuevo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(EkuDe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeE770GDtipDEGCamItemGVehNuevo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeE770GDtipDEGCamItemGVehNuevo::GEN_ATTR_EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDe::GEN_TABLA);
            $c->addRealJoin(EkuDeE770GDtipDEGCamItemGVehNuevo::GEN_TABLA, EkuDeE770GDtipDEGCamItemGVehNuevo::GEN_ATTR_EKU_DE_ID, EkuDe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuDe::getEkuDes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de EkuDes relacionados a traves de EkuDeE770GDtipDEGCamItemGVehNuevo */ 	
	public function getCantidadEkuDesXEkuDeE770GDtipDEGCamItemGVehNuevo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(EkuDe::GEN_ATTR_ID);
            if($estado){
                $c->add(EkuDe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeE770GDtipDEGCamItemGVehNuevo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeE770GDtipDEGCamItemGVehNuevo::GEN_ATTR_EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDe::GEN_TABLA);
            $c->addRealJoin(EkuDeE770GDtipDEGCamItemGVehNuevo::GEN_TABLA, EkuDeE770GDtipDEGCamItemGVehNuevo::GEN_ATTR_EKU_DE_ID, EkuDe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuDe::getEkuDes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener EkuDe (Objeto) relacionado a traves de EkuDeE770GDtipDEGCamItemGVehNuevo */ 	
	public function getEkuDeXEkuDeE770GDtipDEGCamItemGVehNuevo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getEkuDesXEkuDeE770GDtipDEGCamItemGVehNuevo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM eku_de_e700_g_dtip_d_e_g_cam_item'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'eku_de_e700_g_dtip_d_e_g_cam_item';");
            
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

            $obs = self::getEkuDeE700GDtipDEGCamItems($paginador, $criterio);
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

            $obs = self::getEkuDeE700GDtipDEGCamItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE700GDtipDEGCamItems($paginador, $criterio);
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

            $obs = self::getEkuDeE700GDtipDEGCamItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_de_id' */ 	
	static function getOxEkuDeId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_DE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE700GDtipDEGCamItems($paginador, $criterio);
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

            $obs = self::getEkuDeE700GDtipDEGCamItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_e701_dcodint' */ 	
	static function getOxEkuE701Dcodint($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E701_DCODINT, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE700GDtipDEGCamItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_e701_dcodint' */ 	
	static function getOsxEkuE701Dcodint($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E701_DCODINT, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeE700GDtipDEGCamItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_e702_dpararanc' */ 	
	static function getOxEkuE702Dpararanc($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E702_DPARARANC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE700GDtipDEGCamItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_e702_dpararanc' */ 	
	static function getOsxEkuE702Dpararanc($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E702_DPARARANC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeE700GDtipDEGCamItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_e703_dncm' */ 	
	static function getOxEkuE703Dncm($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E703_DNCM, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE700GDtipDEGCamItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_e703_dncm' */ 	
	static function getOsxEkuE703Dncm($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E703_DNCM, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeE700GDtipDEGCamItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_e704_ddncpg' */ 	
	static function getOxEkuE704Ddncpg($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E704_DDNCPG, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE700GDtipDEGCamItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_e704_ddncpg' */ 	
	static function getOsxEkuE704Ddncpg($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E704_DDNCPG, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeE700GDtipDEGCamItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_e705_ddncpe' */ 	
	static function getOxEkuE705Ddncpe($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E705_DDNCPE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE700GDtipDEGCamItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_e705_ddncpe' */ 	
	static function getOsxEkuE705Ddncpe($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E705_DDNCPE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeE700GDtipDEGCamItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_e706_dgtin' */ 	
	static function getOxEkuE706Dgtin($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E706_DGTIN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE700GDtipDEGCamItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_e706_dgtin' */ 	
	static function getOsxEkuE706Dgtin($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E706_DGTIN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeE700GDtipDEGCamItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_e707_dgtinpq' */ 	
	static function getOxEkuE707Dgtinpq($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E707_DGTINPQ, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE700GDtipDEGCamItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_e707_dgtinpq' */ 	
	static function getOsxEkuE707Dgtinpq($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E707_DGTINPQ, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeE700GDtipDEGCamItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_e708_ddesproser' */ 	
	static function getOxEkuE708Ddesproser($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E708_DDESPROSER, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE700GDtipDEGCamItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_e708_ddesproser' */ 	
	static function getOsxEkuE708Ddesproser($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E708_DDESPROSER, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeE700GDtipDEGCamItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_e709_cunimed' */ 	
	static function getOxEkuE709Cunimed($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E709_CUNIMED, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE700GDtipDEGCamItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_e709_cunimed' */ 	
	static function getOsxEkuE709Cunimed($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E709_CUNIMED, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeE700GDtipDEGCamItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_e710_ddesunimed' */ 	
	static function getOxEkuE710Ddesunimed($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E710_DDESUNIMED, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE700GDtipDEGCamItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_e710_ddesunimed' */ 	
	static function getOsxEkuE710Ddesunimed($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E710_DDESUNIMED, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeE700GDtipDEGCamItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_e711_dcantproser' */ 	
	static function getOxEkuE711Dcantproser($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E711_DCANTPROSER, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE700GDtipDEGCamItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_e711_dcantproser' */ 	
	static function getOsxEkuE711Dcantproser($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E711_DCANTPROSER, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeE700GDtipDEGCamItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_e712_cpaisorig' */ 	
	static function getOxEkuE712Cpaisorig($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E712_CPAISORIG, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE700GDtipDEGCamItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_e712_cpaisorig' */ 	
	static function getOsxEkuE712Cpaisorig($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E712_CPAISORIG, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeE700GDtipDEGCamItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_e713_ddespaisorig' */ 	
	static function getOxEkuE713Ddespaisorig($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E713_DDESPAISORIG, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE700GDtipDEGCamItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_e713_ddespaisorig' */ 	
	static function getOsxEkuE713Ddespaisorig($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E713_DDESPAISORIG, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeE700GDtipDEGCamItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_e714_dinfitem' */ 	
	static function getOxEkuE714Dinfitem($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E714_DINFITEM, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE700GDtipDEGCamItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_e714_dinfitem' */ 	
	static function getOsxEkuE714Dinfitem($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E714_DINFITEM, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeE700GDtipDEGCamItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_e715_crelmerc' */ 	
	static function getOxEkuE715Crelmerc($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E715_CRELMERC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE700GDtipDEGCamItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_e715_crelmerc' */ 	
	static function getOsxEkuE715Crelmerc($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E715_CRELMERC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeE700GDtipDEGCamItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_e716_ddesrelmerc' */ 	
	static function getOxEkuE716Ddesrelmerc($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E716_DDESRELMERC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE700GDtipDEGCamItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_e716_ddesrelmerc' */ 	
	static function getOsxEkuE716Ddesrelmerc($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E716_DDESRELMERC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeE700GDtipDEGCamItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_e717_dcanquimer' */ 	
	static function getOxEkuE717Dcanquimer($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E717_DCANQUIMER, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE700GDtipDEGCamItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_e717_dcanquimer' */ 	
	static function getOsxEkuE717Dcanquimer($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E717_DCANQUIMER, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeE700GDtipDEGCamItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_e718_dporquimer' */ 	
	static function getOxEkuE718Dporquimer($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E718_DPORQUIMER, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE700GDtipDEGCamItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_e718_dporquimer' */ 	
	static function getOsxEkuE718Dporquimer($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E718_DPORQUIMER, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeE700GDtipDEGCamItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_e719_dcdcanticipo' */ 	
	static function getOxEkuE719Dcdcanticipo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E719_DCDCANTICIPO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE700GDtipDEGCamItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_e719_dcdcanticipo' */ 	
	static function getOsxEkuE719Dcdcanticipo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_E719_DCDCANTICIPO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeE700GDtipDEGCamItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE700GDtipDEGCamItems($paginador, $criterio);
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

            $obs = self::getEkuDeE700GDtipDEGCamItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE700GDtipDEGCamItems($paginador, $criterio);
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

            $obs = self::getEkuDeE700GDtipDEGCamItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE700GDtipDEGCamItems($paginador, $criterio);
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

            $obs = self::getEkuDeE700GDtipDEGCamItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE700GDtipDEGCamItems($paginador, $criterio);
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

            $obs = self::getEkuDeE700GDtipDEGCamItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE700GDtipDEGCamItems($paginador, $criterio);
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

            $obs = self::getEkuDeE700GDtipDEGCamItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE700GDtipDEGCamItems($paginador, $criterio);
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

            $obs = self::getEkuDeE700GDtipDEGCamItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE700GDtipDEGCamItems($paginador, $criterio);
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

            $obs = self::getEkuDeE700GDtipDEGCamItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeE700GDtipDEGCamItems($paginador, $criterio);
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

            $obs = self::getEkuDeE700GDtipDEGCamItems(null, $criterio);
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

            $obs = self::getEkuDeE700GDtipDEGCamItems($paginador, $criterio);
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

            $obs = self::getEkuDeE700GDtipDEGCamItems($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'eku_de_e700_g_dtip_d_e_g_cam_item_adm');
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
                $c->addTabla(EkuDeE700GDtipDEGCamItem::GEN_TABLA);
                $c->addOrden(EkuDeE700GDtipDEGCamItem::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $eku_de_e700_g_dtip_d_e_g_cam_items = EkuDeE700GDtipDEGCamItem::getEkuDeE700GDtipDEGCamItems(null, $c);

                $arr = array();
                foreach($eku_de_e700_g_dtip_d_e_g_cam_items as $eku_de_e700_g_dtip_d_e_g_cam_item){
                    $descripcion = $eku_de_e700_g_dtip_d_e_g_cam_item->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>