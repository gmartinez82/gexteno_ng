<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BEkuDeH001GCamDEAsoc
{ 
	
	const SES_PAGINACION = 'adm_ekudeh001gcamdeasoc_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_ekudeh001gcamdeasoc_paginas_registros';
	const SES_CRITERIOS = 'adm_ekudeh001gcamdeasoc_criterios';
	
	const GEN_CLASE = 'EkuDeH001GCamDEAsoc';
	const GEN_TABLA = 'eku_de_h001_g_cam_d_e_asoc';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BEkuDeH001GCamDEAsoc */ 
	const GEN_ATTR_ID = 'eku_de_h001_g_cam_d_e_asoc.id';
	const GEN_ATTR_DESCRIPCION = 'eku_de_h001_g_cam_d_e_asoc.descripcion';
	const GEN_ATTR_EKU_DE_ID = 'eku_de_h001_g_cam_d_e_asoc.eku_de_id';
	const GEN_ATTR_EKU_H002_ITIPDOCASO = 'eku_de_h001_g_cam_d_e_asoc.eku_h002_itipdocaso';
	const GEN_ATTR_EKU_H003_DDESTIPDOCASO = 'eku_de_h001_g_cam_d_e_asoc.eku_h003_ddestipdocaso';
	const GEN_ATTR_EKU_H004_DCDCDEREF = 'eku_de_h001_g_cam_d_e_asoc.eku_h004_dcdcderef';
	const GEN_ATTR_EKU_H005_DNTIMDI = 'eku_de_h001_g_cam_d_e_asoc.eku_h005_dntimdi';
	const GEN_ATTR_EKU_H006_DESTDOCASO = 'eku_de_h001_g_cam_d_e_asoc.eku_h006_destdocaso';
	const GEN_ATTR_EKU_H007_DPEXPDOCASO = 'eku_de_h001_g_cam_d_e_asoc.eku_h007_dpexpdocaso';
	const GEN_ATTR_EKU_H008_DNUMDOCASO = 'eku_de_h001_g_cam_d_e_asoc.eku_h008_dnumdocaso';
	const GEN_ATTR_EKU_H009_ITIPODOCASO = 'eku_de_h001_g_cam_d_e_asoc.eku_h009_itipodocaso';
	const GEN_ATTR_EKU_H010_DDTIPODOCASO = 'eku_de_h001_g_cam_d_e_asoc.eku_h010_ddtipodocaso';
	const GEN_ATTR_EKU_H011_DFECEMIDI = 'eku_de_h001_g_cam_d_e_asoc.eku_h011_dfecemidi';
	const GEN_ATTR_EKU_H012_DNUMCOMRET = 'eku_de_h001_g_cam_d_e_asoc.eku_h012_dnumcomret';
	const GEN_ATTR_EKU_H013_DNUMRESCF = 'eku_de_h001_g_cam_d_e_asoc.eku_h013_dnumrescf';
	const GEN_ATTR_EKU_H014_ITIPCONS = 'eku_de_h001_g_cam_d_e_asoc.eku_h014_itipcons';
	const GEN_ATTR_EKU_H015_DDESTIPCONS = 'eku_de_h001_g_cam_d_e_asoc.eku_h015_ddestipcons';
	const GEN_ATTR_EKU_H016_DNUMCONS = 'eku_de_h001_g_cam_d_e_asoc.eku_h016_dnumcons';
	const GEN_ATTR_EKU_H017_DNUMCONTROL = 'eku_de_h001_g_cam_d_e_asoc.eku_h017_dnumcontrol';
	const GEN_ATTR_CODIGO = 'eku_de_h001_g_cam_d_e_asoc.codigo';
	const GEN_ATTR_OBSERVACION = 'eku_de_h001_g_cam_d_e_asoc.observacion';
	const GEN_ATTR_ORDEN = 'eku_de_h001_g_cam_d_e_asoc.orden';
	const GEN_ATTR_ESTADO = 'eku_de_h001_g_cam_d_e_asoc.estado';
	const GEN_ATTR_CREADO = 'eku_de_h001_g_cam_d_e_asoc.creado';
	const GEN_ATTR_CREADO_POR = 'eku_de_h001_g_cam_d_e_asoc.creado_por';
	const GEN_ATTR_MODIFICADO = 'eku_de_h001_g_cam_d_e_asoc.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'eku_de_h001_g_cam_d_e_asoc.modificado_por';

	/* Constantes de Atributos Min de BEkuDeH001GCamDEAsoc */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_EKU_DE_ID = 'eku_de_id';
	const GEN_ATTR_MIN_EKU_H002_ITIPDOCASO = 'eku_h002_itipdocaso';
	const GEN_ATTR_MIN_EKU_H003_DDESTIPDOCASO = 'eku_h003_ddestipdocaso';
	const GEN_ATTR_MIN_EKU_H004_DCDCDEREF = 'eku_h004_dcdcderef';
	const GEN_ATTR_MIN_EKU_H005_DNTIMDI = 'eku_h005_dntimdi';
	const GEN_ATTR_MIN_EKU_H006_DESTDOCASO = 'eku_h006_destdocaso';
	const GEN_ATTR_MIN_EKU_H007_DPEXPDOCASO = 'eku_h007_dpexpdocaso';
	const GEN_ATTR_MIN_EKU_H008_DNUMDOCASO = 'eku_h008_dnumdocaso';
	const GEN_ATTR_MIN_EKU_H009_ITIPODOCASO = 'eku_h009_itipodocaso';
	const GEN_ATTR_MIN_EKU_H010_DDTIPODOCASO = 'eku_h010_ddtipodocaso';
	const GEN_ATTR_MIN_EKU_H011_DFECEMIDI = 'eku_h011_dfecemidi';
	const GEN_ATTR_MIN_EKU_H012_DNUMCOMRET = 'eku_h012_dnumcomret';
	const GEN_ATTR_MIN_EKU_H013_DNUMRESCF = 'eku_h013_dnumrescf';
	const GEN_ATTR_MIN_EKU_H014_ITIPCONS = 'eku_h014_itipcons';
	const GEN_ATTR_MIN_EKU_H015_DDESTIPCONS = 'eku_h015_ddestipcons';
	const GEN_ATTR_MIN_EKU_H016_DNUMCONS = 'eku_h016_dnumcons';
	const GEN_ATTR_MIN_EKU_H017_DNUMCONTROL = 'eku_h017_dnumcontrol';
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
	

	/* Atributos de BEkuDeH001GCamDEAsoc */ 
	private $id;
	private $descripcion;
	private $eku_de_id;
	private $eku_h002_itipdocaso;
	private $eku_h003_ddestipdocaso;
	private $eku_h004_dcdcderef;
	private $eku_h005_dntimdi;
	private $eku_h006_destdocaso;
	private $eku_h007_dpexpdocaso;
	private $eku_h008_dnumdocaso;
	private $eku_h009_itipodocaso;
	private $eku_h010_ddtipodocaso;
	private $eku_h011_dfecemidi;
	private $eku_h012_dnumcomret;
	private $eku_h013_dnumrescf;
	private $eku_h014_itipcons;
	private $eku_h015_ddestipcons;
	private $eku_h016_dnumcons;
	private $eku_h017_dnumcontrol;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BEkuDeH001GCamDEAsoc */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getEkuDeId(){ if(isset($this->eku_de_id)){ return $this->eku_de_id; }else{ return 'null'; } }
	public function getEkuH002Itipdocaso(){ if(isset($this->eku_h002_itipdocaso)){ return $this->eku_h002_itipdocaso; }else{ return ''; } }
	public function getEkuH003Ddestipdocaso(){ if(isset($this->eku_h003_ddestipdocaso)){ return $this->eku_h003_ddestipdocaso; }else{ return ''; } }
	public function getEkuH004Dcdcderef(){ if(isset($this->eku_h004_dcdcderef)){ return $this->eku_h004_dcdcderef; }else{ return ''; } }
	public function getEkuH005Dntimdi(){ if(isset($this->eku_h005_dntimdi)){ return $this->eku_h005_dntimdi; }else{ return ''; } }
	public function getEkuH006Destdocaso(){ if(isset($this->eku_h006_destdocaso)){ return $this->eku_h006_destdocaso; }else{ return ''; } }
	public function getEkuH007Dpexpdocaso(){ if(isset($this->eku_h007_dpexpdocaso)){ return $this->eku_h007_dpexpdocaso; }else{ return ''; } }
	public function getEkuH008Dnumdocaso(){ if(isset($this->eku_h008_dnumdocaso)){ return $this->eku_h008_dnumdocaso; }else{ return ''; } }
	public function getEkuH009Itipodocaso(){ if(isset($this->eku_h009_itipodocaso)){ return $this->eku_h009_itipodocaso; }else{ return ''; } }
	public function getEkuH010Ddtipodocaso(){ if(isset($this->eku_h010_ddtipodocaso)){ return $this->eku_h010_ddtipodocaso; }else{ return ''; } }
	public function getEkuH011Dfecemidi(){ if(isset($this->eku_h011_dfecemidi)){ return $this->eku_h011_dfecemidi; }else{ return ''; } }
	public function getEkuH012Dnumcomret(){ if(isset($this->eku_h012_dnumcomret)){ return $this->eku_h012_dnumcomret; }else{ return ''; } }
	public function getEkuH013Dnumrescf(){ if(isset($this->eku_h013_dnumrescf)){ return $this->eku_h013_dnumrescf; }else{ return ''; } }
	public function getEkuH014Itipcons(){ if(isset($this->eku_h014_itipcons)){ return $this->eku_h014_itipcons; }else{ return ''; } }
	public function getEkuH015Ddestipcons(){ if(isset($this->eku_h015_ddestipcons)){ return $this->eku_h015_ddestipcons; }else{ return ''; } }
	public function getEkuH016Dnumcons(){ if(isset($this->eku_h016_dnumcons)){ return $this->eku_h016_dnumcons; }else{ return ''; } }
	public function getEkuH017Dnumcontrol(){ if(isset($this->eku_h017_dnumcontrol)){ return $this->eku_h017_dnumcontrol; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BEkuDeH001GCamDEAsoc */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_EKU_DE_ID."
				, ".self::GEN_ATTR_EKU_H002_ITIPDOCASO."
				, ".self::GEN_ATTR_EKU_H003_DDESTIPDOCASO."
				, ".self::GEN_ATTR_EKU_H004_DCDCDEREF."
				, ".self::GEN_ATTR_EKU_H005_DNTIMDI."
				, ".self::GEN_ATTR_EKU_H006_DESTDOCASO."
				, ".self::GEN_ATTR_EKU_H007_DPEXPDOCASO."
				, ".self::GEN_ATTR_EKU_H008_DNUMDOCASO."
				, ".self::GEN_ATTR_EKU_H009_ITIPODOCASO."
				, ".self::GEN_ATTR_EKU_H010_DDTIPODOCASO."
				, ".self::GEN_ATTR_EKU_H011_DFECEMIDI."
				, ".self::GEN_ATTR_EKU_H012_DNUMCOMRET."
				, ".self::GEN_ATTR_EKU_H013_DNUMRESCF."
				, ".self::GEN_ATTR_EKU_H014_ITIPCONS."
				, ".self::GEN_ATTR_EKU_H015_DDESTIPCONS."
				, ".self::GEN_ATTR_EKU_H016_DNUMCONS."
				, ".self::GEN_ATTR_EKU_H017_DNUMCONTROL."
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
				$this->setEkuH002Itipdocaso($fila[self::GEN_ATTR_MIN_EKU_H002_ITIPDOCASO]);
				$this->setEkuH003Ddestipdocaso($fila[self::GEN_ATTR_MIN_EKU_H003_DDESTIPDOCASO]);
				$this->setEkuH004Dcdcderef($fila[self::GEN_ATTR_MIN_EKU_H004_DCDCDEREF]);
				$this->setEkuH005Dntimdi($fila[self::GEN_ATTR_MIN_EKU_H005_DNTIMDI]);
				$this->setEkuH006Destdocaso($fila[self::GEN_ATTR_MIN_EKU_H006_DESTDOCASO]);
				$this->setEkuH007Dpexpdocaso($fila[self::GEN_ATTR_MIN_EKU_H007_DPEXPDOCASO]);
				$this->setEkuH008Dnumdocaso($fila[self::GEN_ATTR_MIN_EKU_H008_DNUMDOCASO]);
				$this->setEkuH009Itipodocaso($fila[self::GEN_ATTR_MIN_EKU_H009_ITIPODOCASO]);
				$this->setEkuH010Ddtipodocaso($fila[self::GEN_ATTR_MIN_EKU_H010_DDTIPODOCASO]);
				$this->setEkuH011Dfecemidi($fila[self::GEN_ATTR_MIN_EKU_H011_DFECEMIDI]);
				$this->setEkuH012Dnumcomret($fila[self::GEN_ATTR_MIN_EKU_H012_DNUMCOMRET]);
				$this->setEkuH013Dnumrescf($fila[self::GEN_ATTR_MIN_EKU_H013_DNUMRESCF]);
				$this->setEkuH014Itipcons($fila[self::GEN_ATTR_MIN_EKU_H014_ITIPCONS]);
				$this->setEkuH015Ddestipcons($fila[self::GEN_ATTR_MIN_EKU_H015_DDESTIPCONS]);
				$this->setEkuH016Dnumcons($fila[self::GEN_ATTR_MIN_EKU_H016_DNUMCONS]);
				$this->setEkuH017Dnumcontrol($fila[self::GEN_ATTR_MIN_EKU_H017_DNUMCONTROL]);
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
	public function setEkuH002Itipdocaso($v){ $this->eku_h002_itipdocaso = $v; }
	public function setEkuH003Ddestipdocaso($v){ $this->eku_h003_ddestipdocaso = $v; }
	public function setEkuH004Dcdcderef($v){ $this->eku_h004_dcdcderef = $v; }
	public function setEkuH005Dntimdi($v){ $this->eku_h005_dntimdi = $v; }
	public function setEkuH006Destdocaso($v){ $this->eku_h006_destdocaso = $v; }
	public function setEkuH007Dpexpdocaso($v){ $this->eku_h007_dpexpdocaso = $v; }
	public function setEkuH008Dnumdocaso($v){ $this->eku_h008_dnumdocaso = $v; }
	public function setEkuH009Itipodocaso($v){ $this->eku_h009_itipodocaso = $v; }
	public function setEkuH010Ddtipodocaso($v){ $this->eku_h010_ddtipodocaso = $v; }
	public function setEkuH011Dfecemidi($v){ $this->eku_h011_dfecemidi = $v; }
	public function setEkuH012Dnumcomret($v){ $this->eku_h012_dnumcomret = $v; }
	public function setEkuH013Dnumrescf($v){ $this->eku_h013_dnumrescf = $v; }
	public function setEkuH014Itipcons($v){ $this->eku_h014_itipcons = $v; }
	public function setEkuH015Ddestipcons($v){ $this->eku_h015_ddestipcons = $v; }
	public function setEkuH016Dnumcons($v){ $this->eku_h016_dnumcons = $v; }
	public function setEkuH017Dnumcontrol($v){ $this->eku_h017_dnumcontrol = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new EkuDeH001GCamDEAsoc();
            $o->setId($fila[EkuDeH001GCamDEAsoc::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setEkuDeId($fila[self::GEN_ATTR_MIN_EKU_DE_ID]);
			$o->setEkuH002Itipdocaso($fila[self::GEN_ATTR_MIN_EKU_H002_ITIPDOCASO]);
			$o->setEkuH003Ddestipdocaso($fila[self::GEN_ATTR_MIN_EKU_H003_DDESTIPDOCASO]);
			$o->setEkuH004Dcdcderef($fila[self::GEN_ATTR_MIN_EKU_H004_DCDCDEREF]);
			$o->setEkuH005Dntimdi($fila[self::GEN_ATTR_MIN_EKU_H005_DNTIMDI]);
			$o->setEkuH006Destdocaso($fila[self::GEN_ATTR_MIN_EKU_H006_DESTDOCASO]);
			$o->setEkuH007Dpexpdocaso($fila[self::GEN_ATTR_MIN_EKU_H007_DPEXPDOCASO]);
			$o->setEkuH008Dnumdocaso($fila[self::GEN_ATTR_MIN_EKU_H008_DNUMDOCASO]);
			$o->setEkuH009Itipodocaso($fila[self::GEN_ATTR_MIN_EKU_H009_ITIPODOCASO]);
			$o->setEkuH010Ddtipodocaso($fila[self::GEN_ATTR_MIN_EKU_H010_DDTIPODOCASO]);
			$o->setEkuH011Dfecemidi($fila[self::GEN_ATTR_MIN_EKU_H011_DFECEMIDI]);
			$o->setEkuH012Dnumcomret($fila[self::GEN_ATTR_MIN_EKU_H012_DNUMCOMRET]);
			$o->setEkuH013Dnumrescf($fila[self::GEN_ATTR_MIN_EKU_H013_DNUMRESCF]);
			$o->setEkuH014Itipcons($fila[self::GEN_ATTR_MIN_EKU_H014_ITIPCONS]);
			$o->setEkuH015Ddestipcons($fila[self::GEN_ATTR_MIN_EKU_H015_DDESTIPCONS]);
			$o->setEkuH016Dnumcons($fila[self::GEN_ATTR_MIN_EKU_H016_DNUMCONS]);
			$o->setEkuH017Dnumcontrol($fila[self::GEN_ATTR_MIN_EKU_H017_DNUMCONTROL]);
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

	/* Control de BEkuDeH001GCamDEAsoc */ 	
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

	/* Cambia el estado de BEkuDeH001GCamDEAsoc */ 	
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

	/* Save de BEkuDeH001GCamDEAsoc */ 	
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
						, ".self::GEN_ATTR_MIN_EKU_H002_ITIPDOCASO."
						, ".self::GEN_ATTR_MIN_EKU_H003_DDESTIPDOCASO."
						, ".self::GEN_ATTR_MIN_EKU_H004_DCDCDEREF."
						, ".self::GEN_ATTR_MIN_EKU_H005_DNTIMDI."
						, ".self::GEN_ATTR_MIN_EKU_H006_DESTDOCASO."
						, ".self::GEN_ATTR_MIN_EKU_H007_DPEXPDOCASO."
						, ".self::GEN_ATTR_MIN_EKU_H008_DNUMDOCASO."
						, ".self::GEN_ATTR_MIN_EKU_H009_ITIPODOCASO."
						, ".self::GEN_ATTR_MIN_EKU_H010_DDTIPODOCASO."
						, ".self::GEN_ATTR_MIN_EKU_H011_DFECEMIDI."
						, ".self::GEN_ATTR_MIN_EKU_H012_DNUMCOMRET."
						, ".self::GEN_ATTR_MIN_EKU_H013_DNUMRESCF."
						, ".self::GEN_ATTR_MIN_EKU_H014_ITIPCONS."
						, ".self::GEN_ATTR_MIN_EKU_H015_DDESTIPCONS."
						, ".self::GEN_ATTR_MIN_EKU_H016_DNUMCONS."
						, ".self::GEN_ATTR_MIN_EKU_H017_DNUMCONTROL."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('eku_de_h001_g_cam_d_e_asoc_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getEkuDeId()."
						, '".$this->getEkuH002Itipdocaso()."'
						, '".$this->getEkuH003Ddestipdocaso()."'
						, '".$this->getEkuH004Dcdcderef()."'
						, '".$this->getEkuH005Dntimdi()."'
						, '".$this->getEkuH006Destdocaso()."'
						, '".$this->getEkuH007Dpexpdocaso()."'
						, '".$this->getEkuH008Dnumdocaso()."'
						, '".$this->getEkuH009Itipodocaso()."'
						, '".$this->getEkuH010Ddtipodocaso()."'
						, '".$this->getEkuH011Dfecemidi()."'
						, '".$this->getEkuH012Dnumcomret()."'
						, '".$this->getEkuH013Dnumrescf()."'
						, '".$this->getEkuH014Itipcons()."'
						, '".$this->getEkuH015Ddestipcons()."'
						, '".$this->getEkuH016Dnumcons()."'
						, '".$this->getEkuH017Dnumcontrol()."'
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('eku_de_h001_g_cam_d_e_asoc_seq')";
            
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
                 
				 ".EkuDeH001GCamDEAsoc::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_EKU_DE_ID." = ".$this->getEkuDeId()."
						, ".self::GEN_ATTR_MIN_EKU_H002_ITIPDOCASO." = '".$this->getEkuH002Itipdocaso()."'
						, ".self::GEN_ATTR_MIN_EKU_H003_DDESTIPDOCASO." = '".$this->getEkuH003Ddestipdocaso()."'
						, ".self::GEN_ATTR_MIN_EKU_H004_DCDCDEREF." = '".$this->getEkuH004Dcdcderef()."'
						, ".self::GEN_ATTR_MIN_EKU_H005_DNTIMDI." = '".$this->getEkuH005Dntimdi()."'
						, ".self::GEN_ATTR_MIN_EKU_H006_DESTDOCASO." = '".$this->getEkuH006Destdocaso()."'
						, ".self::GEN_ATTR_MIN_EKU_H007_DPEXPDOCASO." = '".$this->getEkuH007Dpexpdocaso()."'
						, ".self::GEN_ATTR_MIN_EKU_H008_DNUMDOCASO." = '".$this->getEkuH008Dnumdocaso()."'
						, ".self::GEN_ATTR_MIN_EKU_H009_ITIPODOCASO." = '".$this->getEkuH009Itipodocaso()."'
						, ".self::GEN_ATTR_MIN_EKU_H010_DDTIPODOCASO." = '".$this->getEkuH010Ddtipodocaso()."'
						, ".self::GEN_ATTR_MIN_EKU_H011_DFECEMIDI." = '".$this->getEkuH011Dfecemidi()."'
						, ".self::GEN_ATTR_MIN_EKU_H012_DNUMCOMRET." = '".$this->getEkuH012Dnumcomret()."'
						, ".self::GEN_ATTR_MIN_EKU_H013_DNUMRESCF." = '".$this->getEkuH013Dnumrescf()."'
						, ".self::GEN_ATTR_MIN_EKU_H014_ITIPCONS." = '".$this->getEkuH014Itipcons()."'
						, ".self::GEN_ATTR_MIN_EKU_H015_DDESTIPCONS." = '".$this->getEkuH015Ddestipcons()."'
						, ".self::GEN_ATTR_MIN_EKU_H016_DNUMCONS." = '".$this->getEkuH016Dnumcons()."'
						, ".self::GEN_ATTR_MIN_EKU_H017_DNUMCONTROL." = '".$this->getEkuH017Dnumcontrol()."'
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
						, ".self::GEN_ATTR_MIN_EKU_H002_ITIPDOCASO."
						, ".self::GEN_ATTR_MIN_EKU_H003_DDESTIPDOCASO."
						, ".self::GEN_ATTR_MIN_EKU_H004_DCDCDEREF."
						, ".self::GEN_ATTR_MIN_EKU_H005_DNTIMDI."
						, ".self::GEN_ATTR_MIN_EKU_H006_DESTDOCASO."
						, ".self::GEN_ATTR_MIN_EKU_H007_DPEXPDOCASO."
						, ".self::GEN_ATTR_MIN_EKU_H008_DNUMDOCASO."
						, ".self::GEN_ATTR_MIN_EKU_H009_ITIPODOCASO."
						, ".self::GEN_ATTR_MIN_EKU_H010_DDTIPODOCASO."
						, ".self::GEN_ATTR_MIN_EKU_H011_DFECEMIDI."
						, ".self::GEN_ATTR_MIN_EKU_H012_DNUMCOMRET."
						, ".self::GEN_ATTR_MIN_EKU_H013_DNUMRESCF."
						, ".self::GEN_ATTR_MIN_EKU_H014_ITIPCONS."
						, ".self::GEN_ATTR_MIN_EKU_H015_DDESTIPCONS."
						, ".self::GEN_ATTR_MIN_EKU_H016_DNUMCONS."
						, ".self::GEN_ATTR_MIN_EKU_H017_DNUMCONTROL."
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
						, '".$this->getEkuH002Itipdocaso()."'
						, '".$this->getEkuH003Ddestipdocaso()."'
						, '".$this->getEkuH004Dcdcderef()."'
						, '".$this->getEkuH005Dntimdi()."'
						, '".$this->getEkuH006Destdocaso()."'
						, '".$this->getEkuH007Dpexpdocaso()."'
						, '".$this->getEkuH008Dnumdocaso()."'
						, '".$this->getEkuH009Itipodocaso()."'
						, '".$this->getEkuH010Ddtipodocaso()."'
						, '".$this->getEkuH011Dfecemidi()."'
						, '".$this->getEkuH012Dnumcomret()."'
						, '".$this->getEkuH013Dnumrescf()."'
						, '".$this->getEkuH014Itipcons()."'
						, '".$this->getEkuH015Ddestipcons()."'
						, '".$this->getEkuH016Dnumcons()."'
						, '".$this->getEkuH017Dnumcontrol()."'
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
                     
				 ".EkuDeH001GCamDEAsoc::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_EKU_DE_ID." = ".$this->getEkuDeId()."
						, ".self::GEN_ATTR_MIN_EKU_H002_ITIPDOCASO." = '".$this->getEkuH002Itipdocaso()."'
						, ".self::GEN_ATTR_MIN_EKU_H003_DDESTIPDOCASO." = '".$this->getEkuH003Ddestipdocaso()."'
						, ".self::GEN_ATTR_MIN_EKU_H004_DCDCDEREF." = '".$this->getEkuH004Dcdcderef()."'
						, ".self::GEN_ATTR_MIN_EKU_H005_DNTIMDI." = '".$this->getEkuH005Dntimdi()."'
						, ".self::GEN_ATTR_MIN_EKU_H006_DESTDOCASO." = '".$this->getEkuH006Destdocaso()."'
						, ".self::GEN_ATTR_MIN_EKU_H007_DPEXPDOCASO." = '".$this->getEkuH007Dpexpdocaso()."'
						, ".self::GEN_ATTR_MIN_EKU_H008_DNUMDOCASO." = '".$this->getEkuH008Dnumdocaso()."'
						, ".self::GEN_ATTR_MIN_EKU_H009_ITIPODOCASO." = '".$this->getEkuH009Itipodocaso()."'
						, ".self::GEN_ATTR_MIN_EKU_H010_DDTIPODOCASO." = '".$this->getEkuH010Ddtipodocaso()."'
						, ".self::GEN_ATTR_MIN_EKU_H011_DFECEMIDI." = '".$this->getEkuH011Dfecemidi()."'
						, ".self::GEN_ATTR_MIN_EKU_H012_DNUMCOMRET." = '".$this->getEkuH012Dnumcomret()."'
						, ".self::GEN_ATTR_MIN_EKU_H013_DNUMRESCF." = '".$this->getEkuH013Dnumrescf()."'
						, ".self::GEN_ATTR_MIN_EKU_H014_ITIPCONS." = '".$this->getEkuH014Itipcons()."'
						, ".self::GEN_ATTR_MIN_EKU_H015_DDESTIPCONS." = '".$this->getEkuH015Ddestipcons()."'
						, ".self::GEN_ATTR_MIN_EKU_H016_DNUMCONS." = '".$this->getEkuH016Dnumcons()."'
						, ".self::GEN_ATTR_MIN_EKU_H017_DNUMCONTROL." = '".$this->getEkuH017Dnumcontrol()."'
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
            $o = new EkuDeH001GCamDEAsoc();
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

	/* Delete de BEkuDeH001GCamDEAsoc */ 	
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
	
	public function duplicarEkuDeH001GCamDEAsoc(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getEkuDeH001GCamDEAsocs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = EkuDeH001GCamDEAsoc::setAplicarFiltrosDeAlcance($criterio);

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
	
		$ekudeh001gcamdeasocs = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $ekudeh001gcamdeasoc = new EkuDeH001GCamDEAsoc();
                    $ekudeh001gcamdeasoc->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $ekudeh001gcamdeasoc->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$ekudeh001gcamdeasoc->setEkuDeId($fila[self::GEN_ATTR_MIN_EKU_DE_ID]);
			$ekudeh001gcamdeasoc->setEkuH002Itipdocaso($fila[self::GEN_ATTR_MIN_EKU_H002_ITIPDOCASO]);
			$ekudeh001gcamdeasoc->setEkuH003Ddestipdocaso($fila[self::GEN_ATTR_MIN_EKU_H003_DDESTIPDOCASO]);
			$ekudeh001gcamdeasoc->setEkuH004Dcdcderef($fila[self::GEN_ATTR_MIN_EKU_H004_DCDCDEREF]);
			$ekudeh001gcamdeasoc->setEkuH005Dntimdi($fila[self::GEN_ATTR_MIN_EKU_H005_DNTIMDI]);
			$ekudeh001gcamdeasoc->setEkuH006Destdocaso($fila[self::GEN_ATTR_MIN_EKU_H006_DESTDOCASO]);
			$ekudeh001gcamdeasoc->setEkuH007Dpexpdocaso($fila[self::GEN_ATTR_MIN_EKU_H007_DPEXPDOCASO]);
			$ekudeh001gcamdeasoc->setEkuH008Dnumdocaso($fila[self::GEN_ATTR_MIN_EKU_H008_DNUMDOCASO]);
			$ekudeh001gcamdeasoc->setEkuH009Itipodocaso($fila[self::GEN_ATTR_MIN_EKU_H009_ITIPODOCASO]);
			$ekudeh001gcamdeasoc->setEkuH010Ddtipodocaso($fila[self::GEN_ATTR_MIN_EKU_H010_DDTIPODOCASO]);
			$ekudeh001gcamdeasoc->setEkuH011Dfecemidi($fila[self::GEN_ATTR_MIN_EKU_H011_DFECEMIDI]);
			$ekudeh001gcamdeasoc->setEkuH012Dnumcomret($fila[self::GEN_ATTR_MIN_EKU_H012_DNUMCOMRET]);
			$ekudeh001gcamdeasoc->setEkuH013Dnumrescf($fila[self::GEN_ATTR_MIN_EKU_H013_DNUMRESCF]);
			$ekudeh001gcamdeasoc->setEkuH014Itipcons($fila[self::GEN_ATTR_MIN_EKU_H014_ITIPCONS]);
			$ekudeh001gcamdeasoc->setEkuH015Ddestipcons($fila[self::GEN_ATTR_MIN_EKU_H015_DDESTIPCONS]);
			$ekudeh001gcamdeasoc->setEkuH016Dnumcons($fila[self::GEN_ATTR_MIN_EKU_H016_DNUMCONS]);
			$ekudeh001gcamdeasoc->setEkuH017Dnumcontrol($fila[self::GEN_ATTR_MIN_EKU_H017_DNUMCONTROL]);
			$ekudeh001gcamdeasoc->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$ekudeh001gcamdeasoc->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$ekudeh001gcamdeasoc->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$ekudeh001gcamdeasoc->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$ekudeh001gcamdeasoc->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$ekudeh001gcamdeasoc->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$ekudeh001gcamdeasoc->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$ekudeh001gcamdeasoc->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $ekudeh001gcamdeasocs[] = $ekudeh001gcamdeasoc;
		}
		
		return $ekudeh001gcamdeasocs;
	}	
	

	/* Método getEkuDeH001GCamDEAsocs Habilitados */ 	
	static function getEkuDeH001GCamDEAsocsHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return EkuDeH001GCamDEAsoc::getEkuDeH001GCamDEAsocs($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getEkuDeH001GCamDEAsocs para listado de Backend */ 	
	static function getEkuDeH001GCamDEAsocsDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return EkuDeH001GCamDEAsoc::getEkuDeH001GCamDEAsocs($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getEkuDeH001GCamDEAsocsCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = EkuDeH001GCamDEAsoc::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = EkuDeH001GCamDEAsoc::getEkuDeH001GCamDEAsocs($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getEkuDeH001GCamDEAsocs filtrado para select */ 	
	static function getEkuDeH001GCamDEAsocsCmbF($paginador = null, $criterio = null){
            $col = EkuDeH001GCamDEAsoc::getEkuDeH001GCamDEAsocs($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getEkuDeH001GCamDEAsocs filtrado por una coleccion de objetos foraneos de EkuDe */ 	
	static function getEkuDeH001GCamDEAsocsXEkuDes($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(EkuDeH001GCamDEAsoc::GEN_ATTR_EKU_DE_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(EkuDeH001GCamDEAsoc::GEN_TABLA);
            $c->addOrden(EkuDeH001GCamDEAsoc::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = EkuDeH001GCamDEAsoc::getEkuDeH001GCamDEAsocs($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getEkuDeId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'eku_de_h001_g_cam_d_e_asoc_adm.php';
            $url_gestion = 'eku_de_h001_g_cam_d_e_asoc_gestion.php';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM eku_de_h001_g_cam_d_e_asoc'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'eku_de_h001_g_cam_d_e_asoc';");
            
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

            $obs = self::getEkuDeH001GCamDEAsocs($paginador, $criterio);
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

            $obs = self::getEkuDeH001GCamDEAsocs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeH001GCamDEAsocs($paginador, $criterio);
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

            $obs = self::getEkuDeH001GCamDEAsocs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_de_id' */ 	
	static function getOxEkuDeId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_DE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeH001GCamDEAsocs($paginador, $criterio);
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

            $obs = self::getEkuDeH001GCamDEAsocs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_h002_itipdocaso' */ 	
	static function getOxEkuH002Itipdocaso($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_H002_ITIPDOCASO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeH001GCamDEAsocs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_h002_itipdocaso' */ 	
	static function getOsxEkuH002Itipdocaso($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_H002_ITIPDOCASO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeH001GCamDEAsocs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_h003_ddestipdocaso' */ 	
	static function getOxEkuH003Ddestipdocaso($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_H003_DDESTIPDOCASO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeH001GCamDEAsocs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_h003_ddestipdocaso' */ 	
	static function getOsxEkuH003Ddestipdocaso($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_H003_DDESTIPDOCASO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeH001GCamDEAsocs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_h004_dcdcderef' */ 	
	static function getOxEkuH004Dcdcderef($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_H004_DCDCDEREF, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeH001GCamDEAsocs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_h004_dcdcderef' */ 	
	static function getOsxEkuH004Dcdcderef($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_H004_DCDCDEREF, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeH001GCamDEAsocs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_h005_dntimdi' */ 	
	static function getOxEkuH005Dntimdi($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_H005_DNTIMDI, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeH001GCamDEAsocs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_h005_dntimdi' */ 	
	static function getOsxEkuH005Dntimdi($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_H005_DNTIMDI, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeH001GCamDEAsocs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_h006_destdocaso' */ 	
	static function getOxEkuH006Destdocaso($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_H006_DESTDOCASO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeH001GCamDEAsocs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_h006_destdocaso' */ 	
	static function getOsxEkuH006Destdocaso($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_H006_DESTDOCASO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeH001GCamDEAsocs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_h007_dpexpdocaso' */ 	
	static function getOxEkuH007Dpexpdocaso($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_H007_DPEXPDOCASO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeH001GCamDEAsocs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_h007_dpexpdocaso' */ 	
	static function getOsxEkuH007Dpexpdocaso($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_H007_DPEXPDOCASO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeH001GCamDEAsocs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_h008_dnumdocaso' */ 	
	static function getOxEkuH008Dnumdocaso($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_H008_DNUMDOCASO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeH001GCamDEAsocs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_h008_dnumdocaso' */ 	
	static function getOsxEkuH008Dnumdocaso($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_H008_DNUMDOCASO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeH001GCamDEAsocs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_h009_itipodocaso' */ 	
	static function getOxEkuH009Itipodocaso($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_H009_ITIPODOCASO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeH001GCamDEAsocs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_h009_itipodocaso' */ 	
	static function getOsxEkuH009Itipodocaso($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_H009_ITIPODOCASO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeH001GCamDEAsocs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_h010_ddtipodocaso' */ 	
	static function getOxEkuH010Ddtipodocaso($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_H010_DDTIPODOCASO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeH001GCamDEAsocs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_h010_ddtipodocaso' */ 	
	static function getOsxEkuH010Ddtipodocaso($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_H010_DDTIPODOCASO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeH001GCamDEAsocs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_h011_dfecemidi' */ 	
	static function getOxEkuH011Dfecemidi($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_H011_DFECEMIDI, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeH001GCamDEAsocs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_h011_dfecemidi' */ 	
	static function getOsxEkuH011Dfecemidi($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_H011_DFECEMIDI, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeH001GCamDEAsocs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_h012_dnumcomret' */ 	
	static function getOxEkuH012Dnumcomret($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_H012_DNUMCOMRET, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeH001GCamDEAsocs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_h012_dnumcomret' */ 	
	static function getOsxEkuH012Dnumcomret($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_H012_DNUMCOMRET, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeH001GCamDEAsocs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_h013_dnumrescf' */ 	
	static function getOxEkuH013Dnumrescf($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_H013_DNUMRESCF, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeH001GCamDEAsocs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_h013_dnumrescf' */ 	
	static function getOsxEkuH013Dnumrescf($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_H013_DNUMRESCF, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeH001GCamDEAsocs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_h014_itipcons' */ 	
	static function getOxEkuH014Itipcons($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_H014_ITIPCONS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeH001GCamDEAsocs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_h014_itipcons' */ 	
	static function getOsxEkuH014Itipcons($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_H014_ITIPCONS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeH001GCamDEAsocs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_h015_ddestipcons' */ 	
	static function getOxEkuH015Ddestipcons($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_H015_DDESTIPCONS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeH001GCamDEAsocs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_h015_ddestipcons' */ 	
	static function getOsxEkuH015Ddestipcons($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_H015_DDESTIPCONS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeH001GCamDEAsocs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_h016_dnumcons' */ 	
	static function getOxEkuH016Dnumcons($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_H016_DNUMCONS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeH001GCamDEAsocs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_h016_dnumcons' */ 	
	static function getOsxEkuH016Dnumcons($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_H016_DNUMCONS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeH001GCamDEAsocs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_h017_dnumcontrol' */ 	
	static function getOxEkuH017Dnumcontrol($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_H017_DNUMCONTROL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeH001GCamDEAsocs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_h017_dnumcontrol' */ 	
	static function getOsxEkuH017Dnumcontrol($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_H017_DNUMCONTROL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeH001GCamDEAsocs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeH001GCamDEAsocs($paginador, $criterio);
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

            $obs = self::getEkuDeH001GCamDEAsocs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeH001GCamDEAsocs($paginador, $criterio);
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

            $obs = self::getEkuDeH001GCamDEAsocs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeH001GCamDEAsocs($paginador, $criterio);
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

            $obs = self::getEkuDeH001GCamDEAsocs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeH001GCamDEAsocs($paginador, $criterio);
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

            $obs = self::getEkuDeH001GCamDEAsocs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeH001GCamDEAsocs($paginador, $criterio);
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

            $obs = self::getEkuDeH001GCamDEAsocs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeH001GCamDEAsocs($paginador, $criterio);
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

            $obs = self::getEkuDeH001GCamDEAsocs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeH001GCamDEAsocs($paginador, $criterio);
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

            $obs = self::getEkuDeH001GCamDEAsocs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeH001GCamDEAsocs($paginador, $criterio);
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

            $obs = self::getEkuDeH001GCamDEAsocs(null, $criterio);
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

            $obs = self::getEkuDeH001GCamDEAsocs($paginador, $criterio);
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

            $obs = self::getEkuDeH001GCamDEAsocs($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'eku_de_h001_g_cam_d_e_asoc_adm');
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
                $c->addTabla(EkuDeH001GCamDEAsoc::GEN_TABLA);
                $c->addOrden(EkuDeH001GCamDEAsoc::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $eku_de_h001_g_cam_d_e_asocs = EkuDeH001GCamDEAsoc::getEkuDeH001GCamDEAsocs(null, $c);

                $arr = array();
                foreach($eku_de_h001_g_cam_d_e_asocs as $eku_de_h001_g_cam_d_e_asoc){
                    $descripcion = $eku_de_h001_g_cam_d_e_asoc->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>