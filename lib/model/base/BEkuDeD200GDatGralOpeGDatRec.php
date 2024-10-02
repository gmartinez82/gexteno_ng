<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BEkuDeD200GDatGralOpeGDatRec
{ 
	
	const SES_PAGINACION = 'adm_ekuded200gdatgralopegdatrec_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_ekuded200gdatgralopegdatrec_paginas_registros';
	const SES_CRITERIOS = 'adm_ekuded200gdatgralopegdatrec_criterios';
	
	const GEN_CLASE = 'EkuDeD200GDatGralOpeGDatRec';
	const GEN_TABLA = 'eku_de_d200_g_dat_gral_ope_g_dat_rec';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BEkuDeD200GDatGralOpeGDatRec */ 
	const GEN_ATTR_ID = 'eku_de_d200_g_dat_gral_ope_g_dat_rec.id';
	const GEN_ATTR_DESCRIPCION = 'eku_de_d200_g_dat_gral_ope_g_dat_rec.descripcion';
	const GEN_ATTR_EKU_DE_ID = 'eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_de_id';
	const GEN_ATTR_EKU_D201_INATREC = 'eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d201_inatrec';
	const GEN_ATTR_EKU_D202_ITIOPE = 'eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d202_itiope';
	const GEN_ATTR_EKU_D203_CPAISREC = 'eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d203_cpaisrec';
	const GEN_ATTR_EKU_D204_DDESPAISRE = 'eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d204_ddespaisre';
	const GEN_ATTR_EKU_D205_ITICONTREC = 'eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d205_iticontrec';
	const GEN_ATTR_EKU_D206_DRUCREC = 'eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d206_drucrec';
	const GEN_ATTR_EKU_D207_DDVREC = 'eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d207_ddvrec';
	const GEN_ATTR_EKU_D208_ITIPIDREC = 'eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d208_itipidrec';
	const GEN_ATTR_EKU_D209_DDTIPIDREC = 'eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d209_ddtipidrec';
	const GEN_ATTR_EKU_D210_DNUMIDREC = 'eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d210_dnumidrec';
	const GEN_ATTR_EKU_D211_DNOMREC = 'eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d211_dnomrec';
	const GEN_ATTR_EKU_D212_DNOMFANREC = 'eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d212_dnomfanrec';
	const GEN_ATTR_EKU_D213_DDIRREC = 'eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d213_ddirrec';
	const GEN_ATTR_EKU_D218_DNUMCASREC = 'eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d218_dnumcasrec';
	const GEN_ATTR_EKU_D219_CDEPREC = 'eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d219_cdeprec';
	const GEN_ATTR_EKU_D220_DDESDEPREC = 'eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d220_ddesdeprec';
	const GEN_ATTR_EKU_D221_CDISREC = 'eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d221_cdisrec';
	const GEN_ATTR_EKU_D222_DDESDISREC = 'eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d222_ddesdisrec';
	const GEN_ATTR_EKU_D223_CCIUREC = 'eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d223_cciurec';
	const GEN_ATTR_EKU_D224_DDESCIUREC = 'eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d224_ddesciurec';
	const GEN_ATTR_EKU_D214_DTELREC = 'eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d214_dtelrec';
	const GEN_ATTR_EKU_D215_DCELREC = 'eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d215_dcelrec';
	const GEN_ATTR_EKU_D216_DEMAILREC = 'eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d216_demailrec';
	const GEN_ATTR_EKU_D217_DCODCLIENTE = 'eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d217_dcodcliente';
	const GEN_ATTR_CODIGO = 'eku_de_d200_g_dat_gral_ope_g_dat_rec.codigo';
	const GEN_ATTR_OBSERVACION = 'eku_de_d200_g_dat_gral_ope_g_dat_rec.observacion';
	const GEN_ATTR_ORDEN = 'eku_de_d200_g_dat_gral_ope_g_dat_rec.orden';
	const GEN_ATTR_ESTADO = 'eku_de_d200_g_dat_gral_ope_g_dat_rec.estado';
	const GEN_ATTR_CREADO = 'eku_de_d200_g_dat_gral_ope_g_dat_rec.creado';
	const GEN_ATTR_CREADO_POR = 'eku_de_d200_g_dat_gral_ope_g_dat_rec.creado_por';
	const GEN_ATTR_MODIFICADO = 'eku_de_d200_g_dat_gral_ope_g_dat_rec.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'eku_de_d200_g_dat_gral_ope_g_dat_rec.modificado_por';

	/* Constantes de Atributos Min de BEkuDeD200GDatGralOpeGDatRec */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_EKU_DE_ID = 'eku_de_id';
	const GEN_ATTR_MIN_EKU_D201_INATREC = 'eku_d201_inatrec';
	const GEN_ATTR_MIN_EKU_D202_ITIOPE = 'eku_d202_itiope';
	const GEN_ATTR_MIN_EKU_D203_CPAISREC = 'eku_d203_cpaisrec';
	const GEN_ATTR_MIN_EKU_D204_DDESPAISRE = 'eku_d204_ddespaisre';
	const GEN_ATTR_MIN_EKU_D205_ITICONTREC = 'eku_d205_iticontrec';
	const GEN_ATTR_MIN_EKU_D206_DRUCREC = 'eku_d206_drucrec';
	const GEN_ATTR_MIN_EKU_D207_DDVREC = 'eku_d207_ddvrec';
	const GEN_ATTR_MIN_EKU_D208_ITIPIDREC = 'eku_d208_itipidrec';
	const GEN_ATTR_MIN_EKU_D209_DDTIPIDREC = 'eku_d209_ddtipidrec';
	const GEN_ATTR_MIN_EKU_D210_DNUMIDREC = 'eku_d210_dnumidrec';
	const GEN_ATTR_MIN_EKU_D211_DNOMREC = 'eku_d211_dnomrec';
	const GEN_ATTR_MIN_EKU_D212_DNOMFANREC = 'eku_d212_dnomfanrec';
	const GEN_ATTR_MIN_EKU_D213_DDIRREC = 'eku_d213_ddirrec';
	const GEN_ATTR_MIN_EKU_D218_DNUMCASREC = 'eku_d218_dnumcasrec';
	const GEN_ATTR_MIN_EKU_D219_CDEPREC = 'eku_d219_cdeprec';
	const GEN_ATTR_MIN_EKU_D220_DDESDEPREC = 'eku_d220_ddesdeprec';
	const GEN_ATTR_MIN_EKU_D221_CDISREC = 'eku_d221_cdisrec';
	const GEN_ATTR_MIN_EKU_D222_DDESDISREC = 'eku_d222_ddesdisrec';
	const GEN_ATTR_MIN_EKU_D223_CCIUREC = 'eku_d223_cciurec';
	const GEN_ATTR_MIN_EKU_D224_DDESCIUREC = 'eku_d224_ddesciurec';
	const GEN_ATTR_MIN_EKU_D214_DTELREC = 'eku_d214_dtelrec';
	const GEN_ATTR_MIN_EKU_D215_DCELREC = 'eku_d215_dcelrec';
	const GEN_ATTR_MIN_EKU_D216_DEMAILREC = 'eku_d216_demailrec';
	const GEN_ATTR_MIN_EKU_D217_DCODCLIENTE = 'eku_d217_dcodcliente';
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
	

	/* Atributos de BEkuDeD200GDatGralOpeGDatRec */ 
	private $id;
	private $descripcion;
	private $eku_de_id;
	private $eku_d201_inatrec;
	private $eku_d202_itiope;
	private $eku_d203_cpaisrec;
	private $eku_d204_ddespaisre;
	private $eku_d205_iticontrec;
	private $eku_d206_drucrec;
	private $eku_d207_ddvrec;
	private $eku_d208_itipidrec;
	private $eku_d209_ddtipidrec;
	private $eku_d210_dnumidrec;
	private $eku_d211_dnomrec;
	private $eku_d212_dnomfanrec;
	private $eku_d213_ddirrec;
	private $eku_d218_dnumcasrec;
	private $eku_d219_cdeprec;
	private $eku_d220_ddesdeprec;
	private $eku_d221_cdisrec;
	private $eku_d222_ddesdisrec;
	private $eku_d223_cciurec;
	private $eku_d224_ddesciurec;
	private $eku_d214_dtelrec;
	private $eku_d215_dcelrec;
	private $eku_d216_demailrec;
	private $eku_d217_dcodcliente;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BEkuDeD200GDatGralOpeGDatRec */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getEkuDeId(){ if(isset($this->eku_de_id)){ return $this->eku_de_id; }else{ return 'null'; } }
	public function getEkuD201Inatrec(){ if(isset($this->eku_d201_inatrec)){ return $this->eku_d201_inatrec; }else{ return ''; } }
	public function getEkuD202Itiope(){ if(isset($this->eku_d202_itiope)){ return $this->eku_d202_itiope; }else{ return ''; } }
	public function getEkuD203Cpaisrec(){ if(isset($this->eku_d203_cpaisrec)){ return $this->eku_d203_cpaisrec; }else{ return ''; } }
	public function getEkuD204Ddespaisre(){ if(isset($this->eku_d204_ddespaisre)){ return $this->eku_d204_ddespaisre; }else{ return ''; } }
	public function getEkuD205Iticontrec(){ if(isset($this->eku_d205_iticontrec)){ return $this->eku_d205_iticontrec; }else{ return ''; } }
	public function getEkuD206Drucrec(){ if(isset($this->eku_d206_drucrec)){ return $this->eku_d206_drucrec; }else{ return ''; } }
	public function getEkuD207Ddvrec(){ if(isset($this->eku_d207_ddvrec)){ return $this->eku_d207_ddvrec; }else{ return ''; } }
	public function getEkuD208Itipidrec(){ if(isset($this->eku_d208_itipidrec)){ return $this->eku_d208_itipidrec; }else{ return ''; } }
	public function getEkuD209Ddtipidrec(){ if(isset($this->eku_d209_ddtipidrec)){ return $this->eku_d209_ddtipidrec; }else{ return ''; } }
	public function getEkuD210Dnumidrec(){ if(isset($this->eku_d210_dnumidrec)){ return $this->eku_d210_dnumidrec; }else{ return ''; } }
	public function getEkuD211Dnomrec(){ if(isset($this->eku_d211_dnomrec)){ return $this->eku_d211_dnomrec; }else{ return ''; } }
	public function getEkuD212Dnomfanrec(){ if(isset($this->eku_d212_dnomfanrec)){ return $this->eku_d212_dnomfanrec; }else{ return ''; } }
	public function getEkuD213Ddirrec(){ if(isset($this->eku_d213_ddirrec)){ return $this->eku_d213_ddirrec; }else{ return ''; } }
	public function getEkuD218Dnumcasrec(){ if(isset($this->eku_d218_dnumcasrec)){ return $this->eku_d218_dnumcasrec; }else{ return ''; } }
	public function getEkuD219Cdeprec(){ if(isset($this->eku_d219_cdeprec)){ return $this->eku_d219_cdeprec; }else{ return ''; } }
	public function getEkuD220Ddesdeprec(){ if(isset($this->eku_d220_ddesdeprec)){ return $this->eku_d220_ddesdeprec; }else{ return ''; } }
	public function getEkuD221Cdisrec(){ if(isset($this->eku_d221_cdisrec)){ return $this->eku_d221_cdisrec; }else{ return ''; } }
	public function getEkuD222Ddesdisrec(){ if(isset($this->eku_d222_ddesdisrec)){ return $this->eku_d222_ddesdisrec; }else{ return ''; } }
	public function getEkuD223Cciurec(){ if(isset($this->eku_d223_cciurec)){ return $this->eku_d223_cciurec; }else{ return ''; } }
	public function getEkuD224Ddesciurec(){ if(isset($this->eku_d224_ddesciurec)){ return $this->eku_d224_ddesciurec; }else{ return ''; } }
	public function getEkuD214Dtelrec(){ if(isset($this->eku_d214_dtelrec)){ return $this->eku_d214_dtelrec; }else{ return ''; } }
	public function getEkuD215Dcelrec(){ if(isset($this->eku_d215_dcelrec)){ return $this->eku_d215_dcelrec; }else{ return ''; } }
	public function getEkuD216Demailrec(){ if(isset($this->eku_d216_demailrec)){ return $this->eku_d216_demailrec; }else{ return ''; } }
	public function getEkuD217Dcodcliente(){ if(isset($this->eku_d217_dcodcliente)){ return $this->eku_d217_dcodcliente; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BEkuDeD200GDatGralOpeGDatRec */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_EKU_DE_ID."
				, ".self::GEN_ATTR_EKU_D201_INATREC."
				, ".self::GEN_ATTR_EKU_D202_ITIOPE."
				, ".self::GEN_ATTR_EKU_D203_CPAISREC."
				, ".self::GEN_ATTR_EKU_D204_DDESPAISRE."
				, ".self::GEN_ATTR_EKU_D205_ITICONTREC."
				, ".self::GEN_ATTR_EKU_D206_DRUCREC."
				, ".self::GEN_ATTR_EKU_D207_DDVREC."
				, ".self::GEN_ATTR_EKU_D208_ITIPIDREC."
				, ".self::GEN_ATTR_EKU_D209_DDTIPIDREC."
				, ".self::GEN_ATTR_EKU_D210_DNUMIDREC."
				, ".self::GEN_ATTR_EKU_D211_DNOMREC."
				, ".self::GEN_ATTR_EKU_D212_DNOMFANREC."
				, ".self::GEN_ATTR_EKU_D213_DDIRREC."
				, ".self::GEN_ATTR_EKU_D218_DNUMCASREC."
				, ".self::GEN_ATTR_EKU_D219_CDEPREC."
				, ".self::GEN_ATTR_EKU_D220_DDESDEPREC."
				, ".self::GEN_ATTR_EKU_D221_CDISREC."
				, ".self::GEN_ATTR_EKU_D222_DDESDISREC."
				, ".self::GEN_ATTR_EKU_D223_CCIUREC."
				, ".self::GEN_ATTR_EKU_D224_DDESCIUREC."
				, ".self::GEN_ATTR_EKU_D214_DTELREC."
				, ".self::GEN_ATTR_EKU_D215_DCELREC."
				, ".self::GEN_ATTR_EKU_D216_DEMAILREC."
				, ".self::GEN_ATTR_EKU_D217_DCODCLIENTE."
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
				$this->setEkuD201Inatrec($fila[self::GEN_ATTR_MIN_EKU_D201_INATREC]);
				$this->setEkuD202Itiope($fila[self::GEN_ATTR_MIN_EKU_D202_ITIOPE]);
				$this->setEkuD203Cpaisrec($fila[self::GEN_ATTR_MIN_EKU_D203_CPAISREC]);
				$this->setEkuD204Ddespaisre($fila[self::GEN_ATTR_MIN_EKU_D204_DDESPAISRE]);
				$this->setEkuD205Iticontrec($fila[self::GEN_ATTR_MIN_EKU_D205_ITICONTREC]);
				$this->setEkuD206Drucrec($fila[self::GEN_ATTR_MIN_EKU_D206_DRUCREC]);
				$this->setEkuD207Ddvrec($fila[self::GEN_ATTR_MIN_EKU_D207_DDVREC]);
				$this->setEkuD208Itipidrec($fila[self::GEN_ATTR_MIN_EKU_D208_ITIPIDREC]);
				$this->setEkuD209Ddtipidrec($fila[self::GEN_ATTR_MIN_EKU_D209_DDTIPIDREC]);
				$this->setEkuD210Dnumidrec($fila[self::GEN_ATTR_MIN_EKU_D210_DNUMIDREC]);
				$this->setEkuD211Dnomrec($fila[self::GEN_ATTR_MIN_EKU_D211_DNOMREC]);
				$this->setEkuD212Dnomfanrec($fila[self::GEN_ATTR_MIN_EKU_D212_DNOMFANREC]);
				$this->setEkuD213Ddirrec($fila[self::GEN_ATTR_MIN_EKU_D213_DDIRREC]);
				$this->setEkuD218Dnumcasrec($fila[self::GEN_ATTR_MIN_EKU_D218_DNUMCASREC]);
				$this->setEkuD219Cdeprec($fila[self::GEN_ATTR_MIN_EKU_D219_CDEPREC]);
				$this->setEkuD220Ddesdeprec($fila[self::GEN_ATTR_MIN_EKU_D220_DDESDEPREC]);
				$this->setEkuD221Cdisrec($fila[self::GEN_ATTR_MIN_EKU_D221_CDISREC]);
				$this->setEkuD222Ddesdisrec($fila[self::GEN_ATTR_MIN_EKU_D222_DDESDISREC]);
				$this->setEkuD223Cciurec($fila[self::GEN_ATTR_MIN_EKU_D223_CCIUREC]);
				$this->setEkuD224Ddesciurec($fila[self::GEN_ATTR_MIN_EKU_D224_DDESCIUREC]);
				$this->setEkuD214Dtelrec($fila[self::GEN_ATTR_MIN_EKU_D214_DTELREC]);
				$this->setEkuD215Dcelrec($fila[self::GEN_ATTR_MIN_EKU_D215_DCELREC]);
				$this->setEkuD216Demailrec($fila[self::GEN_ATTR_MIN_EKU_D216_DEMAILREC]);
				$this->setEkuD217Dcodcliente($fila[self::GEN_ATTR_MIN_EKU_D217_DCODCLIENTE]);
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
	public function setEkuD201Inatrec($v){ $this->eku_d201_inatrec = $v; }
	public function setEkuD202Itiope($v){ $this->eku_d202_itiope = $v; }
	public function setEkuD203Cpaisrec($v){ $this->eku_d203_cpaisrec = $v; }
	public function setEkuD204Ddespaisre($v){ $this->eku_d204_ddespaisre = $v; }
	public function setEkuD205Iticontrec($v){ $this->eku_d205_iticontrec = $v; }
	public function setEkuD206Drucrec($v){ $this->eku_d206_drucrec = $v; }
	public function setEkuD207Ddvrec($v){ $this->eku_d207_ddvrec = $v; }
	public function setEkuD208Itipidrec($v){ $this->eku_d208_itipidrec = $v; }
	public function setEkuD209Ddtipidrec($v){ $this->eku_d209_ddtipidrec = $v; }
	public function setEkuD210Dnumidrec($v){ $this->eku_d210_dnumidrec = $v; }
	public function setEkuD211Dnomrec($v){ $this->eku_d211_dnomrec = $v; }
	public function setEkuD212Dnomfanrec($v){ $this->eku_d212_dnomfanrec = $v; }
	public function setEkuD213Ddirrec($v){ $this->eku_d213_ddirrec = $v; }
	public function setEkuD218Dnumcasrec($v){ $this->eku_d218_dnumcasrec = $v; }
	public function setEkuD219Cdeprec($v){ $this->eku_d219_cdeprec = $v; }
	public function setEkuD220Ddesdeprec($v){ $this->eku_d220_ddesdeprec = $v; }
	public function setEkuD221Cdisrec($v){ $this->eku_d221_cdisrec = $v; }
	public function setEkuD222Ddesdisrec($v){ $this->eku_d222_ddesdisrec = $v; }
	public function setEkuD223Cciurec($v){ $this->eku_d223_cciurec = $v; }
	public function setEkuD224Ddesciurec($v){ $this->eku_d224_ddesciurec = $v; }
	public function setEkuD214Dtelrec($v){ $this->eku_d214_dtelrec = $v; }
	public function setEkuD215Dcelrec($v){ $this->eku_d215_dcelrec = $v; }
	public function setEkuD216Demailrec($v){ $this->eku_d216_demailrec = $v; }
	public function setEkuD217Dcodcliente($v){ $this->eku_d217_dcodcliente = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new EkuDeD200GDatGralOpeGDatRec();
            $o->setId($fila[EkuDeD200GDatGralOpeGDatRec::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setEkuDeId($fila[self::GEN_ATTR_MIN_EKU_DE_ID]);
			$o->setEkuD201Inatrec($fila[self::GEN_ATTR_MIN_EKU_D201_INATREC]);
			$o->setEkuD202Itiope($fila[self::GEN_ATTR_MIN_EKU_D202_ITIOPE]);
			$o->setEkuD203Cpaisrec($fila[self::GEN_ATTR_MIN_EKU_D203_CPAISREC]);
			$o->setEkuD204Ddespaisre($fila[self::GEN_ATTR_MIN_EKU_D204_DDESPAISRE]);
			$o->setEkuD205Iticontrec($fila[self::GEN_ATTR_MIN_EKU_D205_ITICONTREC]);
			$o->setEkuD206Drucrec($fila[self::GEN_ATTR_MIN_EKU_D206_DRUCREC]);
			$o->setEkuD207Ddvrec($fila[self::GEN_ATTR_MIN_EKU_D207_DDVREC]);
			$o->setEkuD208Itipidrec($fila[self::GEN_ATTR_MIN_EKU_D208_ITIPIDREC]);
			$o->setEkuD209Ddtipidrec($fila[self::GEN_ATTR_MIN_EKU_D209_DDTIPIDREC]);
			$o->setEkuD210Dnumidrec($fila[self::GEN_ATTR_MIN_EKU_D210_DNUMIDREC]);
			$o->setEkuD211Dnomrec($fila[self::GEN_ATTR_MIN_EKU_D211_DNOMREC]);
			$o->setEkuD212Dnomfanrec($fila[self::GEN_ATTR_MIN_EKU_D212_DNOMFANREC]);
			$o->setEkuD213Ddirrec($fila[self::GEN_ATTR_MIN_EKU_D213_DDIRREC]);
			$o->setEkuD218Dnumcasrec($fila[self::GEN_ATTR_MIN_EKU_D218_DNUMCASREC]);
			$o->setEkuD219Cdeprec($fila[self::GEN_ATTR_MIN_EKU_D219_CDEPREC]);
			$o->setEkuD220Ddesdeprec($fila[self::GEN_ATTR_MIN_EKU_D220_DDESDEPREC]);
			$o->setEkuD221Cdisrec($fila[self::GEN_ATTR_MIN_EKU_D221_CDISREC]);
			$o->setEkuD222Ddesdisrec($fila[self::GEN_ATTR_MIN_EKU_D222_DDESDISREC]);
			$o->setEkuD223Cciurec($fila[self::GEN_ATTR_MIN_EKU_D223_CCIUREC]);
			$o->setEkuD224Ddesciurec($fila[self::GEN_ATTR_MIN_EKU_D224_DDESCIUREC]);
			$o->setEkuD214Dtelrec($fila[self::GEN_ATTR_MIN_EKU_D214_DTELREC]);
			$o->setEkuD215Dcelrec($fila[self::GEN_ATTR_MIN_EKU_D215_DCELREC]);
			$o->setEkuD216Demailrec($fila[self::GEN_ATTR_MIN_EKU_D216_DEMAILREC]);
			$o->setEkuD217Dcodcliente($fila[self::GEN_ATTR_MIN_EKU_D217_DCODCLIENTE]);
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

	/* Control de BEkuDeD200GDatGralOpeGDatRec */ 	
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

	/* Cambia el estado de BEkuDeD200GDatGralOpeGDatRec */ 	
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

	/* Save de BEkuDeD200GDatGralOpeGDatRec */ 	
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
						, ".self::GEN_ATTR_MIN_EKU_D201_INATREC."
						, ".self::GEN_ATTR_MIN_EKU_D202_ITIOPE."
						, ".self::GEN_ATTR_MIN_EKU_D203_CPAISREC."
						, ".self::GEN_ATTR_MIN_EKU_D204_DDESPAISRE."
						, ".self::GEN_ATTR_MIN_EKU_D205_ITICONTREC."
						, ".self::GEN_ATTR_MIN_EKU_D206_DRUCREC."
						, ".self::GEN_ATTR_MIN_EKU_D207_DDVREC."
						, ".self::GEN_ATTR_MIN_EKU_D208_ITIPIDREC."
						, ".self::GEN_ATTR_MIN_EKU_D209_DDTIPIDREC."
						, ".self::GEN_ATTR_MIN_EKU_D210_DNUMIDREC."
						, ".self::GEN_ATTR_MIN_EKU_D211_DNOMREC."
						, ".self::GEN_ATTR_MIN_EKU_D212_DNOMFANREC."
						, ".self::GEN_ATTR_MIN_EKU_D213_DDIRREC."
						, ".self::GEN_ATTR_MIN_EKU_D218_DNUMCASREC."
						, ".self::GEN_ATTR_MIN_EKU_D219_CDEPREC."
						, ".self::GEN_ATTR_MIN_EKU_D220_DDESDEPREC."
						, ".self::GEN_ATTR_MIN_EKU_D221_CDISREC."
						, ".self::GEN_ATTR_MIN_EKU_D222_DDESDISREC."
						, ".self::GEN_ATTR_MIN_EKU_D223_CCIUREC."
						, ".self::GEN_ATTR_MIN_EKU_D224_DDESCIUREC."
						, ".self::GEN_ATTR_MIN_EKU_D214_DTELREC."
						, ".self::GEN_ATTR_MIN_EKU_D215_DCELREC."
						, ".self::GEN_ATTR_MIN_EKU_D216_DEMAILREC."
						, ".self::GEN_ATTR_MIN_EKU_D217_DCODCLIENTE."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('eku_de_d200_g_dat_gral_ope_g_dat_rec_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getEkuDeId()."
						, '".$this->getEkuD201Inatrec()."'
						, '".$this->getEkuD202Itiope()."'
						, '".$this->getEkuD203Cpaisrec()."'
						, '".$this->getEkuD204Ddespaisre()."'
						, '".$this->getEkuD205Iticontrec()."'
						, '".$this->getEkuD206Drucrec()."'
						, '".$this->getEkuD207Ddvrec()."'
						, '".$this->getEkuD208Itipidrec()."'
						, '".$this->getEkuD209Ddtipidrec()."'
						, '".$this->getEkuD210Dnumidrec()."'
						, '".$this->getEkuD211Dnomrec()."'
						, '".$this->getEkuD212Dnomfanrec()."'
						, '".$this->getEkuD213Ddirrec()."'
						, '".$this->getEkuD218Dnumcasrec()."'
						, '".$this->getEkuD219Cdeprec()."'
						, '".$this->getEkuD220Ddesdeprec()."'
						, '".$this->getEkuD221Cdisrec()."'
						, '".$this->getEkuD222Ddesdisrec()."'
						, '".$this->getEkuD223Cciurec()."'
						, '".$this->getEkuD224Ddesciurec()."'
						, '".$this->getEkuD214Dtelrec()."'
						, '".$this->getEkuD215Dcelrec()."'
						, '".$this->getEkuD216Demailrec()."'
						, '".$this->getEkuD217Dcodcliente()."'
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('eku_de_d200_g_dat_gral_ope_g_dat_rec_seq')";
            
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
                 
				 ".EkuDeD200GDatGralOpeGDatRec::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_EKU_DE_ID." = ".$this->getEkuDeId()."
						, ".self::GEN_ATTR_MIN_EKU_D201_INATREC." = '".$this->getEkuD201Inatrec()."'
						, ".self::GEN_ATTR_MIN_EKU_D202_ITIOPE." = '".$this->getEkuD202Itiope()."'
						, ".self::GEN_ATTR_MIN_EKU_D203_CPAISREC." = '".$this->getEkuD203Cpaisrec()."'
						, ".self::GEN_ATTR_MIN_EKU_D204_DDESPAISRE." = '".$this->getEkuD204Ddespaisre()."'
						, ".self::GEN_ATTR_MIN_EKU_D205_ITICONTREC." = '".$this->getEkuD205Iticontrec()."'
						, ".self::GEN_ATTR_MIN_EKU_D206_DRUCREC." = '".$this->getEkuD206Drucrec()."'
						, ".self::GEN_ATTR_MIN_EKU_D207_DDVREC." = '".$this->getEkuD207Ddvrec()."'
						, ".self::GEN_ATTR_MIN_EKU_D208_ITIPIDREC." = '".$this->getEkuD208Itipidrec()."'
						, ".self::GEN_ATTR_MIN_EKU_D209_DDTIPIDREC." = '".$this->getEkuD209Ddtipidrec()."'
						, ".self::GEN_ATTR_MIN_EKU_D210_DNUMIDREC." = '".$this->getEkuD210Dnumidrec()."'
						, ".self::GEN_ATTR_MIN_EKU_D211_DNOMREC." = '".$this->getEkuD211Dnomrec()."'
						, ".self::GEN_ATTR_MIN_EKU_D212_DNOMFANREC." = '".$this->getEkuD212Dnomfanrec()."'
						, ".self::GEN_ATTR_MIN_EKU_D213_DDIRREC." = '".$this->getEkuD213Ddirrec()."'
						, ".self::GEN_ATTR_MIN_EKU_D218_DNUMCASREC." = '".$this->getEkuD218Dnumcasrec()."'
						, ".self::GEN_ATTR_MIN_EKU_D219_CDEPREC." = '".$this->getEkuD219Cdeprec()."'
						, ".self::GEN_ATTR_MIN_EKU_D220_DDESDEPREC." = '".$this->getEkuD220Ddesdeprec()."'
						, ".self::GEN_ATTR_MIN_EKU_D221_CDISREC." = '".$this->getEkuD221Cdisrec()."'
						, ".self::GEN_ATTR_MIN_EKU_D222_DDESDISREC." = '".$this->getEkuD222Ddesdisrec()."'
						, ".self::GEN_ATTR_MIN_EKU_D223_CCIUREC." = '".$this->getEkuD223Cciurec()."'
						, ".self::GEN_ATTR_MIN_EKU_D224_DDESCIUREC." = '".$this->getEkuD224Ddesciurec()."'
						, ".self::GEN_ATTR_MIN_EKU_D214_DTELREC." = '".$this->getEkuD214Dtelrec()."'
						, ".self::GEN_ATTR_MIN_EKU_D215_DCELREC." = '".$this->getEkuD215Dcelrec()."'
						, ".self::GEN_ATTR_MIN_EKU_D216_DEMAILREC." = '".$this->getEkuD216Demailrec()."'
						, ".self::GEN_ATTR_MIN_EKU_D217_DCODCLIENTE." = '".$this->getEkuD217Dcodcliente()."'
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
						, ".self::GEN_ATTR_MIN_EKU_D201_INATREC."
						, ".self::GEN_ATTR_MIN_EKU_D202_ITIOPE."
						, ".self::GEN_ATTR_MIN_EKU_D203_CPAISREC."
						, ".self::GEN_ATTR_MIN_EKU_D204_DDESPAISRE."
						, ".self::GEN_ATTR_MIN_EKU_D205_ITICONTREC."
						, ".self::GEN_ATTR_MIN_EKU_D206_DRUCREC."
						, ".self::GEN_ATTR_MIN_EKU_D207_DDVREC."
						, ".self::GEN_ATTR_MIN_EKU_D208_ITIPIDREC."
						, ".self::GEN_ATTR_MIN_EKU_D209_DDTIPIDREC."
						, ".self::GEN_ATTR_MIN_EKU_D210_DNUMIDREC."
						, ".self::GEN_ATTR_MIN_EKU_D211_DNOMREC."
						, ".self::GEN_ATTR_MIN_EKU_D212_DNOMFANREC."
						, ".self::GEN_ATTR_MIN_EKU_D213_DDIRREC."
						, ".self::GEN_ATTR_MIN_EKU_D218_DNUMCASREC."
						, ".self::GEN_ATTR_MIN_EKU_D219_CDEPREC."
						, ".self::GEN_ATTR_MIN_EKU_D220_DDESDEPREC."
						, ".self::GEN_ATTR_MIN_EKU_D221_CDISREC."
						, ".self::GEN_ATTR_MIN_EKU_D222_DDESDISREC."
						, ".self::GEN_ATTR_MIN_EKU_D223_CCIUREC."
						, ".self::GEN_ATTR_MIN_EKU_D224_DDESCIUREC."
						, ".self::GEN_ATTR_MIN_EKU_D214_DTELREC."
						, ".self::GEN_ATTR_MIN_EKU_D215_DCELREC."
						, ".self::GEN_ATTR_MIN_EKU_D216_DEMAILREC."
						, ".self::GEN_ATTR_MIN_EKU_D217_DCODCLIENTE."
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
						, '".$this->getEkuD201Inatrec()."'
						, '".$this->getEkuD202Itiope()."'
						, '".$this->getEkuD203Cpaisrec()."'
						, '".$this->getEkuD204Ddespaisre()."'
						, '".$this->getEkuD205Iticontrec()."'
						, '".$this->getEkuD206Drucrec()."'
						, '".$this->getEkuD207Ddvrec()."'
						, '".$this->getEkuD208Itipidrec()."'
						, '".$this->getEkuD209Ddtipidrec()."'
						, '".$this->getEkuD210Dnumidrec()."'
						, '".$this->getEkuD211Dnomrec()."'
						, '".$this->getEkuD212Dnomfanrec()."'
						, '".$this->getEkuD213Ddirrec()."'
						, '".$this->getEkuD218Dnumcasrec()."'
						, '".$this->getEkuD219Cdeprec()."'
						, '".$this->getEkuD220Ddesdeprec()."'
						, '".$this->getEkuD221Cdisrec()."'
						, '".$this->getEkuD222Ddesdisrec()."'
						, '".$this->getEkuD223Cciurec()."'
						, '".$this->getEkuD224Ddesciurec()."'
						, '".$this->getEkuD214Dtelrec()."'
						, '".$this->getEkuD215Dcelrec()."'
						, '".$this->getEkuD216Demailrec()."'
						, '".$this->getEkuD217Dcodcliente()."'
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
                     
				 ".EkuDeD200GDatGralOpeGDatRec::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_EKU_DE_ID." = ".$this->getEkuDeId()."
						, ".self::GEN_ATTR_MIN_EKU_D201_INATREC." = '".$this->getEkuD201Inatrec()."'
						, ".self::GEN_ATTR_MIN_EKU_D202_ITIOPE." = '".$this->getEkuD202Itiope()."'
						, ".self::GEN_ATTR_MIN_EKU_D203_CPAISREC." = '".$this->getEkuD203Cpaisrec()."'
						, ".self::GEN_ATTR_MIN_EKU_D204_DDESPAISRE." = '".$this->getEkuD204Ddespaisre()."'
						, ".self::GEN_ATTR_MIN_EKU_D205_ITICONTREC." = '".$this->getEkuD205Iticontrec()."'
						, ".self::GEN_ATTR_MIN_EKU_D206_DRUCREC." = '".$this->getEkuD206Drucrec()."'
						, ".self::GEN_ATTR_MIN_EKU_D207_DDVREC." = '".$this->getEkuD207Ddvrec()."'
						, ".self::GEN_ATTR_MIN_EKU_D208_ITIPIDREC." = '".$this->getEkuD208Itipidrec()."'
						, ".self::GEN_ATTR_MIN_EKU_D209_DDTIPIDREC." = '".$this->getEkuD209Ddtipidrec()."'
						, ".self::GEN_ATTR_MIN_EKU_D210_DNUMIDREC." = '".$this->getEkuD210Dnumidrec()."'
						, ".self::GEN_ATTR_MIN_EKU_D211_DNOMREC." = '".$this->getEkuD211Dnomrec()."'
						, ".self::GEN_ATTR_MIN_EKU_D212_DNOMFANREC." = '".$this->getEkuD212Dnomfanrec()."'
						, ".self::GEN_ATTR_MIN_EKU_D213_DDIRREC." = '".$this->getEkuD213Ddirrec()."'
						, ".self::GEN_ATTR_MIN_EKU_D218_DNUMCASREC." = '".$this->getEkuD218Dnumcasrec()."'
						, ".self::GEN_ATTR_MIN_EKU_D219_CDEPREC." = '".$this->getEkuD219Cdeprec()."'
						, ".self::GEN_ATTR_MIN_EKU_D220_DDESDEPREC." = '".$this->getEkuD220Ddesdeprec()."'
						, ".self::GEN_ATTR_MIN_EKU_D221_CDISREC." = '".$this->getEkuD221Cdisrec()."'
						, ".self::GEN_ATTR_MIN_EKU_D222_DDESDISREC." = '".$this->getEkuD222Ddesdisrec()."'
						, ".self::GEN_ATTR_MIN_EKU_D223_CCIUREC." = '".$this->getEkuD223Cciurec()."'
						, ".self::GEN_ATTR_MIN_EKU_D224_DDESCIUREC." = '".$this->getEkuD224Ddesciurec()."'
						, ".self::GEN_ATTR_MIN_EKU_D214_DTELREC." = '".$this->getEkuD214Dtelrec()."'
						, ".self::GEN_ATTR_MIN_EKU_D215_DCELREC." = '".$this->getEkuD215Dcelrec()."'
						, ".self::GEN_ATTR_MIN_EKU_D216_DEMAILREC." = '".$this->getEkuD216Demailrec()."'
						, ".self::GEN_ATTR_MIN_EKU_D217_DCODCLIENTE." = '".$this->getEkuD217Dcodcliente()."'
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
            $o = new EkuDeD200GDatGralOpeGDatRec();
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

	/* Delete de BEkuDeD200GDatGralOpeGDatRec */ 	
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
	
	public function duplicarEkuDeD200GDatGralOpeGDatRec(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getEkuDeD200GDatGralOpeGDatRecs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = EkuDeD200GDatGralOpeGDatRec::setAplicarFiltrosDeAlcance($criterio);

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
	
		$ekuded200gdatgralopegdatrecs = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $ekuded200gdatgralopegdatrec = new EkuDeD200GDatGralOpeGDatRec();
                    $ekuded200gdatgralopegdatrec->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $ekuded200gdatgralopegdatrec->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$ekuded200gdatgralopegdatrec->setEkuDeId($fila[self::GEN_ATTR_MIN_EKU_DE_ID]);
			$ekuded200gdatgralopegdatrec->setEkuD201Inatrec($fila[self::GEN_ATTR_MIN_EKU_D201_INATREC]);
			$ekuded200gdatgralopegdatrec->setEkuD202Itiope($fila[self::GEN_ATTR_MIN_EKU_D202_ITIOPE]);
			$ekuded200gdatgralopegdatrec->setEkuD203Cpaisrec($fila[self::GEN_ATTR_MIN_EKU_D203_CPAISREC]);
			$ekuded200gdatgralopegdatrec->setEkuD204Ddespaisre($fila[self::GEN_ATTR_MIN_EKU_D204_DDESPAISRE]);
			$ekuded200gdatgralopegdatrec->setEkuD205Iticontrec($fila[self::GEN_ATTR_MIN_EKU_D205_ITICONTREC]);
			$ekuded200gdatgralopegdatrec->setEkuD206Drucrec($fila[self::GEN_ATTR_MIN_EKU_D206_DRUCREC]);
			$ekuded200gdatgralopegdatrec->setEkuD207Ddvrec($fila[self::GEN_ATTR_MIN_EKU_D207_DDVREC]);
			$ekuded200gdatgralopegdatrec->setEkuD208Itipidrec($fila[self::GEN_ATTR_MIN_EKU_D208_ITIPIDREC]);
			$ekuded200gdatgralopegdatrec->setEkuD209Ddtipidrec($fila[self::GEN_ATTR_MIN_EKU_D209_DDTIPIDREC]);
			$ekuded200gdatgralopegdatrec->setEkuD210Dnumidrec($fila[self::GEN_ATTR_MIN_EKU_D210_DNUMIDREC]);
			$ekuded200gdatgralopegdatrec->setEkuD211Dnomrec($fila[self::GEN_ATTR_MIN_EKU_D211_DNOMREC]);
			$ekuded200gdatgralopegdatrec->setEkuD212Dnomfanrec($fila[self::GEN_ATTR_MIN_EKU_D212_DNOMFANREC]);
			$ekuded200gdatgralopegdatrec->setEkuD213Ddirrec($fila[self::GEN_ATTR_MIN_EKU_D213_DDIRREC]);
			$ekuded200gdatgralopegdatrec->setEkuD218Dnumcasrec($fila[self::GEN_ATTR_MIN_EKU_D218_DNUMCASREC]);
			$ekuded200gdatgralopegdatrec->setEkuD219Cdeprec($fila[self::GEN_ATTR_MIN_EKU_D219_CDEPREC]);
			$ekuded200gdatgralopegdatrec->setEkuD220Ddesdeprec($fila[self::GEN_ATTR_MIN_EKU_D220_DDESDEPREC]);
			$ekuded200gdatgralopegdatrec->setEkuD221Cdisrec($fila[self::GEN_ATTR_MIN_EKU_D221_CDISREC]);
			$ekuded200gdatgralopegdatrec->setEkuD222Ddesdisrec($fila[self::GEN_ATTR_MIN_EKU_D222_DDESDISREC]);
			$ekuded200gdatgralopegdatrec->setEkuD223Cciurec($fila[self::GEN_ATTR_MIN_EKU_D223_CCIUREC]);
			$ekuded200gdatgralopegdatrec->setEkuD224Ddesciurec($fila[self::GEN_ATTR_MIN_EKU_D224_DDESCIUREC]);
			$ekuded200gdatgralopegdatrec->setEkuD214Dtelrec($fila[self::GEN_ATTR_MIN_EKU_D214_DTELREC]);
			$ekuded200gdatgralopegdatrec->setEkuD215Dcelrec($fila[self::GEN_ATTR_MIN_EKU_D215_DCELREC]);
			$ekuded200gdatgralopegdatrec->setEkuD216Demailrec($fila[self::GEN_ATTR_MIN_EKU_D216_DEMAILREC]);
			$ekuded200gdatgralopegdatrec->setEkuD217Dcodcliente($fila[self::GEN_ATTR_MIN_EKU_D217_DCODCLIENTE]);
			$ekuded200gdatgralopegdatrec->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$ekuded200gdatgralopegdatrec->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$ekuded200gdatgralopegdatrec->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$ekuded200gdatgralopegdatrec->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$ekuded200gdatgralopegdatrec->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$ekuded200gdatgralopegdatrec->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$ekuded200gdatgralopegdatrec->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$ekuded200gdatgralopegdatrec->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $ekuded200gdatgralopegdatrecs[] = $ekuded200gdatgralopegdatrec;
		}
		
		return $ekuded200gdatgralopegdatrecs;
	}	
	

	/* Método getEkuDeD200GDatGralOpeGDatRecs Habilitados */ 	
	static function getEkuDeD200GDatGralOpeGDatRecsHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return EkuDeD200GDatGralOpeGDatRec::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getEkuDeD200GDatGralOpeGDatRecs para listado de Backend */ 	
	static function getEkuDeD200GDatGralOpeGDatRecsDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return EkuDeD200GDatGralOpeGDatRec::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getEkuDeD200GDatGralOpeGDatRecsCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = EkuDeD200GDatGralOpeGDatRec::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = EkuDeD200GDatGralOpeGDatRec::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getEkuDeD200GDatGralOpeGDatRecs filtrado para select */ 	
	static function getEkuDeD200GDatGralOpeGDatRecsCmbF($paginador = null, $criterio = null){
            $col = EkuDeD200GDatGralOpeGDatRec::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getEkuDeD200GDatGralOpeGDatRecs filtrado por una coleccion de objetos foraneos de EkuDe */ 	
	static function getEkuDeD200GDatGralOpeGDatRecsXEkuDes($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(EkuDeD200GDatGralOpeGDatRec::GEN_ATTR_EKU_DE_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(EkuDeD200GDatGralOpeGDatRec::GEN_TABLA);
            $c->addOrden(EkuDeD200GDatGralOpeGDatRec::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = EkuDeD200GDatGralOpeGDatRec::getEkuDeD200GDatGralOpeGDatRecs($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getEkuDeId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'eku_de_d200_g_dat_gral_ope_g_dat_rec_adm.php';
            $url_gestion = 'eku_de_d200_g_dat_gral_ope_g_dat_rec_gestion.php';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM eku_de_d200_g_dat_gral_ope_g_dat_rec'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'eku_de_d200_g_dat_gral_ope_g_dat_rec';");
            
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

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
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

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
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

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_de_id' */ 	
	static function getOxEkuDeId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_DE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
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

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d201_inatrec' */ 	
	static function getOxEkuD201Inatrec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D201_INATREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d201_inatrec' */ 	
	static function getOsxEkuD201Inatrec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D201_INATREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d202_itiope' */ 	
	static function getOxEkuD202Itiope($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D202_ITIOPE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d202_itiope' */ 	
	static function getOsxEkuD202Itiope($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D202_ITIOPE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d203_cpaisrec' */ 	
	static function getOxEkuD203Cpaisrec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D203_CPAISREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d203_cpaisrec' */ 	
	static function getOsxEkuD203Cpaisrec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D203_CPAISREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d204_ddespaisre' */ 	
	static function getOxEkuD204Ddespaisre($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D204_DDESPAISRE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d204_ddespaisre' */ 	
	static function getOsxEkuD204Ddespaisre($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D204_DDESPAISRE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d205_iticontrec' */ 	
	static function getOxEkuD205Iticontrec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D205_ITICONTREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d205_iticontrec' */ 	
	static function getOsxEkuD205Iticontrec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D205_ITICONTREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d206_drucrec' */ 	
	static function getOxEkuD206Drucrec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D206_DRUCREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d206_drucrec' */ 	
	static function getOsxEkuD206Drucrec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D206_DRUCREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d207_ddvrec' */ 	
	static function getOxEkuD207Ddvrec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D207_DDVREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d207_ddvrec' */ 	
	static function getOsxEkuD207Ddvrec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D207_DDVREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d208_itipidrec' */ 	
	static function getOxEkuD208Itipidrec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D208_ITIPIDREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d208_itipidrec' */ 	
	static function getOsxEkuD208Itipidrec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D208_ITIPIDREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d209_ddtipidrec' */ 	
	static function getOxEkuD209Ddtipidrec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D209_DDTIPIDREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d209_ddtipidrec' */ 	
	static function getOsxEkuD209Ddtipidrec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D209_DDTIPIDREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d210_dnumidrec' */ 	
	static function getOxEkuD210Dnumidrec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D210_DNUMIDREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d210_dnumidrec' */ 	
	static function getOsxEkuD210Dnumidrec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D210_DNUMIDREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d211_dnomrec' */ 	
	static function getOxEkuD211Dnomrec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D211_DNOMREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d211_dnomrec' */ 	
	static function getOsxEkuD211Dnomrec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D211_DNOMREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d212_dnomfanrec' */ 	
	static function getOxEkuD212Dnomfanrec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D212_DNOMFANREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d212_dnomfanrec' */ 	
	static function getOsxEkuD212Dnomfanrec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D212_DNOMFANREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d213_ddirrec' */ 	
	static function getOxEkuD213Ddirrec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D213_DDIRREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d213_ddirrec' */ 	
	static function getOsxEkuD213Ddirrec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D213_DDIRREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d218_dnumcasrec' */ 	
	static function getOxEkuD218Dnumcasrec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D218_DNUMCASREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d218_dnumcasrec' */ 	
	static function getOsxEkuD218Dnumcasrec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D218_DNUMCASREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d219_cdeprec' */ 	
	static function getOxEkuD219Cdeprec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D219_CDEPREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d219_cdeprec' */ 	
	static function getOsxEkuD219Cdeprec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D219_CDEPREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d220_ddesdeprec' */ 	
	static function getOxEkuD220Ddesdeprec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D220_DDESDEPREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d220_ddesdeprec' */ 	
	static function getOsxEkuD220Ddesdeprec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D220_DDESDEPREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d221_cdisrec' */ 	
	static function getOxEkuD221Cdisrec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D221_CDISREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d221_cdisrec' */ 	
	static function getOsxEkuD221Cdisrec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D221_CDISREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d222_ddesdisrec' */ 	
	static function getOxEkuD222Ddesdisrec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D222_DDESDISREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d222_ddesdisrec' */ 	
	static function getOsxEkuD222Ddesdisrec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D222_DDESDISREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d223_cciurec' */ 	
	static function getOxEkuD223Cciurec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D223_CCIUREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d223_cciurec' */ 	
	static function getOsxEkuD223Cciurec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D223_CCIUREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d224_ddesciurec' */ 	
	static function getOxEkuD224Ddesciurec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D224_DDESCIUREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d224_ddesciurec' */ 	
	static function getOsxEkuD224Ddesciurec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D224_DDESCIUREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d214_dtelrec' */ 	
	static function getOxEkuD214Dtelrec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D214_DTELREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d214_dtelrec' */ 	
	static function getOsxEkuD214Dtelrec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D214_DTELREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d215_dcelrec' */ 	
	static function getOxEkuD215Dcelrec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D215_DCELREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d215_dcelrec' */ 	
	static function getOsxEkuD215Dcelrec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D215_DCELREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d216_demailrec' */ 	
	static function getOxEkuD216Demailrec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D216_DEMAILREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d216_demailrec' */ 	
	static function getOsxEkuD216Demailrec($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D216_DEMAILREC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d217_dcodcliente' */ 	
	static function getOxEkuD217Dcodcliente($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D217_DCODCLIENTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d217_dcodcliente' */ 	
	static function getOsxEkuD217Dcodcliente($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D217_DCODCLIENTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
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

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
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

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
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

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
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

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
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

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
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

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
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

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
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

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs(null, $criterio);
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

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
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

            $obs = self::getEkuDeD200GDatGralOpeGDatRecs($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'eku_de_d200_g_dat_gral_ope_g_dat_rec_adm');
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
                $c->addTabla(EkuDeD200GDatGralOpeGDatRec::GEN_TABLA);
                $c->addOrden(EkuDeD200GDatGralOpeGDatRec::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $eku_de_d200_g_dat_gral_ope_g_dat_recs = EkuDeD200GDatGralOpeGDatRec::getEkuDeD200GDatGralOpeGDatRecs(null, $c);

                $arr = array();
                foreach($eku_de_d200_g_dat_gral_ope_g_dat_recs as $eku_de_d200_g_dat_gral_ope_g_dat_rec){
                    $descripcion = $eku_de_d200_g_dat_gral_ope_g_dat_rec->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>