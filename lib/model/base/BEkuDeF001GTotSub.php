<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BEkuDeF001GTotSub
{ 
	
	const SES_PAGINACION = 'adm_ekudef001gtotsub_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_ekudef001gtotsub_paginas_registros';
	const SES_CRITERIOS = 'adm_ekudef001gtotsub_criterios';
	
	const GEN_CLASE = 'EkuDeF001GTotSub';
	const GEN_TABLA = 'eku_de_f001_g_tot_sub';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BEkuDeF001GTotSub */ 
	const GEN_ATTR_ID = 'eku_de_f001_g_tot_sub.id';
	const GEN_ATTR_DESCRIPCION = 'eku_de_f001_g_tot_sub.descripcion';
	const GEN_ATTR_EKU_DE_ID = 'eku_de_f001_g_tot_sub.eku_de_id';
	const GEN_ATTR_EKU_F002_DSUBEXE = 'eku_de_f001_g_tot_sub.eku_f002_dsubexe';
	const GEN_ATTR_EKU_F003_DSUBEXO = 'eku_de_f001_g_tot_sub.eku_f003_dsubexo';
	const GEN_ATTR_EKU_F004_DSUB5 = 'eku_de_f001_g_tot_sub.eku_f004_dsub5';
	const GEN_ATTR_EKU_F005_DSUB10 = 'eku_de_f001_g_tot_sub.eku_f005_dsub10';
	const GEN_ATTR_EKU_F008_DTOTOPE = 'eku_de_f001_g_tot_sub.eku_f008_dtotope';
	const GEN_ATTR_EKU_F009_DTOTDESC = 'eku_de_f001_g_tot_sub.eku_f009_dtotdesc';
	const GEN_ATTR_EKU_F033_DTOTDESCGLOTEM = 'eku_de_f001_g_tot_sub.eku_f033_dtotdescglotem';
	const GEN_ATTR_EKU_F034_DTOTANTITEM = 'eku_de_f001_g_tot_sub.eku_f034_dtotantitem';
	const GEN_ATTR_EKU_F035_DTOTANT = 'eku_de_f001_g_tot_sub.eku_f035_dtotant';
	const GEN_ATTR_EKU_F010_DPORCDESCTOTAL = 'eku_de_f001_g_tot_sub.eku_f010_dporcdesctotal';
	const GEN_ATTR_EKU_F011_DDESCTOTAL = 'eku_de_f001_g_tot_sub.eku_f011_ddesctotal';
	const GEN_ATTR_EKU_F012_DANTICIPO = 'eku_de_f001_g_tot_sub.eku_f012_danticipo';
	const GEN_ATTR_EKU_F013_DREDON = 'eku_de_f001_g_tot_sub.eku_f013_dredon';
	const GEN_ATTR_EKU_F025_DCOMI = 'eku_de_f001_g_tot_sub.eku_f025_dcomi';
	const GEN_ATTR_EKU_F014_DTOTGRALOPE = 'eku_de_f001_g_tot_sub.eku_f014_dtotgralope';
	const GEN_ATTR_EKU_F015_DIVA5 = 'eku_de_f001_g_tot_sub.eku_f015_diva5';
	const GEN_ATTR_EKU_F016_DIVA10 = 'eku_de_f001_g_tot_sub.eku_f016_diva10';
	const GEN_ATTR_EKU_F036_DLIQTOTIVA5 = 'eku_de_f001_g_tot_sub.eku_f036_dliqtotiva5';
	const GEN_ATTR_EKU_F037_DLIQTOTIVA10 = 'eku_de_f001_g_tot_sub.eku_f037_dliqtotiva10';
	const GEN_ATTR_EKU_F026_DIVACOMI = 'eku_de_f001_g_tot_sub.eku_f026_divacomi';
	const GEN_ATTR_EKU_F017_DTOTIVA = 'eku_de_f001_g_tot_sub.eku_f017_dtotiva';
	const GEN_ATTR_EKU_F018_DBASEGRAV5 = 'eku_de_f001_g_tot_sub.eku_f018_dbasegrav5';
	const GEN_ATTR_EKU_F019_DBASEGRAV10 = 'eku_de_f001_g_tot_sub.eku_f019_dbasegrav10';
	const GEN_ATTR_EKU_F020_DTBASGRAIVA = 'eku_de_f001_g_tot_sub.eku_f020_dtbasgraiva';
	const GEN_ATTR_EKU_F023_DTOTALGS = 'eku_de_f001_g_tot_sub.eku_f023_dtotalgs';
	const GEN_ATTR_EKU_F024_DTOTCOM = 'eku_de_f001_g_tot_sub.eku_f024_dtotcom';
	const GEN_ATTR_CODIGO = 'eku_de_f001_g_tot_sub.codigo';
	const GEN_ATTR_OBSERVACION = 'eku_de_f001_g_tot_sub.observacion';
	const GEN_ATTR_ORDEN = 'eku_de_f001_g_tot_sub.orden';
	const GEN_ATTR_ESTADO = 'eku_de_f001_g_tot_sub.estado';
	const GEN_ATTR_CREADO = 'eku_de_f001_g_tot_sub.creado';
	const GEN_ATTR_CREADO_POR = 'eku_de_f001_g_tot_sub.creado_por';
	const GEN_ATTR_MODIFICADO = 'eku_de_f001_g_tot_sub.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'eku_de_f001_g_tot_sub.modificado_por';

	/* Constantes de Atributos Min de BEkuDeF001GTotSub */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_EKU_DE_ID = 'eku_de_id';
	const GEN_ATTR_MIN_EKU_F002_DSUBEXE = 'eku_f002_dsubexe';
	const GEN_ATTR_MIN_EKU_F003_DSUBEXO = 'eku_f003_dsubexo';
	const GEN_ATTR_MIN_EKU_F004_DSUB5 = 'eku_f004_dsub5';
	const GEN_ATTR_MIN_EKU_F005_DSUB10 = 'eku_f005_dsub10';
	const GEN_ATTR_MIN_EKU_F008_DTOTOPE = 'eku_f008_dtotope';
	const GEN_ATTR_MIN_EKU_F009_DTOTDESC = 'eku_f009_dtotdesc';
	const GEN_ATTR_MIN_EKU_F033_DTOTDESCGLOTEM = 'eku_f033_dtotdescglotem';
	const GEN_ATTR_MIN_EKU_F034_DTOTANTITEM = 'eku_f034_dtotantitem';
	const GEN_ATTR_MIN_EKU_F035_DTOTANT = 'eku_f035_dtotant';
	const GEN_ATTR_MIN_EKU_F010_DPORCDESCTOTAL = 'eku_f010_dporcdesctotal';
	const GEN_ATTR_MIN_EKU_F011_DDESCTOTAL = 'eku_f011_ddesctotal';
	const GEN_ATTR_MIN_EKU_F012_DANTICIPO = 'eku_f012_danticipo';
	const GEN_ATTR_MIN_EKU_F013_DREDON = 'eku_f013_dredon';
	const GEN_ATTR_MIN_EKU_F025_DCOMI = 'eku_f025_dcomi';
	const GEN_ATTR_MIN_EKU_F014_DTOTGRALOPE = 'eku_f014_dtotgralope';
	const GEN_ATTR_MIN_EKU_F015_DIVA5 = 'eku_f015_diva5';
	const GEN_ATTR_MIN_EKU_F016_DIVA10 = 'eku_f016_diva10';
	const GEN_ATTR_MIN_EKU_F036_DLIQTOTIVA5 = 'eku_f036_dliqtotiva5';
	const GEN_ATTR_MIN_EKU_F037_DLIQTOTIVA10 = 'eku_f037_dliqtotiva10';
	const GEN_ATTR_MIN_EKU_F026_DIVACOMI = 'eku_f026_divacomi';
	const GEN_ATTR_MIN_EKU_F017_DTOTIVA = 'eku_f017_dtotiva';
	const GEN_ATTR_MIN_EKU_F018_DBASEGRAV5 = 'eku_f018_dbasegrav5';
	const GEN_ATTR_MIN_EKU_F019_DBASEGRAV10 = 'eku_f019_dbasegrav10';
	const GEN_ATTR_MIN_EKU_F020_DTBASGRAIVA = 'eku_f020_dtbasgraiva';
	const GEN_ATTR_MIN_EKU_F023_DTOTALGS = 'eku_f023_dtotalgs';
	const GEN_ATTR_MIN_EKU_F024_DTOTCOM = 'eku_f024_dtotcom';
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
	

	/* Atributos de BEkuDeF001GTotSub */ 
	private $id;
	private $descripcion;
	private $eku_de_id;
	private $eku_f002_dsubexe;
	private $eku_f003_dsubexo;
	private $eku_f004_dsub5;
	private $eku_f005_dsub10;
	private $eku_f008_dtotope;
	private $eku_f009_dtotdesc;
	private $eku_f033_dtotdescglotem;
	private $eku_f034_dtotantitem;
	private $eku_f035_dtotant;
	private $eku_f010_dporcdesctotal;
	private $eku_f011_ddesctotal;
	private $eku_f012_danticipo;
	private $eku_f013_dredon;
	private $eku_f025_dcomi;
	private $eku_f014_dtotgralope;
	private $eku_f015_diva5;
	private $eku_f016_diva10;
	private $eku_f036_dliqtotiva5;
	private $eku_f037_dliqtotiva10;
	private $eku_f026_divacomi;
	private $eku_f017_dtotiva;
	private $eku_f018_dbasegrav5;
	private $eku_f019_dbasegrav10;
	private $eku_f020_dtbasgraiva;
	private $eku_f023_dtotalgs;
	private $eku_f024_dtotcom;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BEkuDeF001GTotSub */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getEkuDeId(){ if(isset($this->eku_de_id)){ return $this->eku_de_id; }else{ return 'null'; } }
	public function getEkuF002Dsubexe(){ if(isset($this->eku_f002_dsubexe)){ return $this->eku_f002_dsubexe; }else{ return ''; } }
	public function getEkuF003Dsubexo(){ if(isset($this->eku_f003_dsubexo)){ return $this->eku_f003_dsubexo; }else{ return ''; } }
	public function getEkuF004Dsub5(){ if(isset($this->eku_f004_dsub5)){ return $this->eku_f004_dsub5; }else{ return ''; } }
	public function getEkuF005Dsub10(){ if(isset($this->eku_f005_dsub10)){ return $this->eku_f005_dsub10; }else{ return ''; } }
	public function getEkuF008Dtotope(){ if(isset($this->eku_f008_dtotope)){ return $this->eku_f008_dtotope; }else{ return ''; } }
	public function getEkuF009Dtotdesc(){ if(isset($this->eku_f009_dtotdesc)){ return $this->eku_f009_dtotdesc; }else{ return ''; } }
	public function getEkuF033Dtotdescglotem(){ if(isset($this->eku_f033_dtotdescglotem)){ return $this->eku_f033_dtotdescglotem; }else{ return ''; } }
	public function getEkuF034Dtotantitem(){ if(isset($this->eku_f034_dtotantitem)){ return $this->eku_f034_dtotantitem; }else{ return ''; } }
	public function getEkuF035Dtotant(){ if(isset($this->eku_f035_dtotant)){ return $this->eku_f035_dtotant; }else{ return ''; } }
	public function getEkuF010Dporcdesctotal(){ if(isset($this->eku_f010_dporcdesctotal)){ return $this->eku_f010_dporcdesctotal; }else{ return ''; } }
	public function getEkuF011Ddesctotal(){ if(isset($this->eku_f011_ddesctotal)){ return $this->eku_f011_ddesctotal; }else{ return ''; } }
	public function getEkuF012Danticipo(){ if(isset($this->eku_f012_danticipo)){ return $this->eku_f012_danticipo; }else{ return ''; } }
	public function getEkuF013Dredon(){ if(isset($this->eku_f013_dredon)){ return $this->eku_f013_dredon; }else{ return ''; } }
	public function getEkuF025Dcomi(){ if(isset($this->eku_f025_dcomi)){ return $this->eku_f025_dcomi; }else{ return ''; } }
	public function getEkuF014Dtotgralope(){ if(isset($this->eku_f014_dtotgralope)){ return $this->eku_f014_dtotgralope; }else{ return ''; } }
	public function getEkuF015Diva5(){ if(isset($this->eku_f015_diva5)){ return $this->eku_f015_diva5; }else{ return ''; } }
	public function getEkuF016Diva10(){ if(isset($this->eku_f016_diva10)){ return $this->eku_f016_diva10; }else{ return ''; } }
	public function getEkuF036Dliqtotiva5(){ if(isset($this->eku_f036_dliqtotiva5)){ return $this->eku_f036_dliqtotiva5; }else{ return ''; } }
	public function getEkuF037Dliqtotiva10(){ if(isset($this->eku_f037_dliqtotiva10)){ return $this->eku_f037_dliqtotiva10; }else{ return ''; } }
	public function getEkuF026Divacomi(){ if(isset($this->eku_f026_divacomi)){ return $this->eku_f026_divacomi; }else{ return ''; } }
	public function getEkuF017Dtotiva(){ if(isset($this->eku_f017_dtotiva)){ return $this->eku_f017_dtotiva; }else{ return ''; } }
	public function getEkuF018Dbasegrav5(){ if(isset($this->eku_f018_dbasegrav5)){ return $this->eku_f018_dbasegrav5; }else{ return ''; } }
	public function getEkuF019Dbasegrav10(){ if(isset($this->eku_f019_dbasegrav10)){ return $this->eku_f019_dbasegrav10; }else{ return ''; } }
	public function getEkuF020Dtbasgraiva(){ if(isset($this->eku_f020_dtbasgraiva)){ return $this->eku_f020_dtbasgraiva; }else{ return ''; } }
	public function getEkuF023Dtotalgs(){ if(isset($this->eku_f023_dtotalgs)){ return $this->eku_f023_dtotalgs; }else{ return ''; } }
	public function getEkuF024Dtotcom(){ if(isset($this->eku_f024_dtotcom)){ return $this->eku_f024_dtotcom; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BEkuDeF001GTotSub */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_EKU_DE_ID."
				, ".self::GEN_ATTR_EKU_F002_DSUBEXE."
				, ".self::GEN_ATTR_EKU_F003_DSUBEXO."
				, ".self::GEN_ATTR_EKU_F004_DSUB5."
				, ".self::GEN_ATTR_EKU_F005_DSUB10."
				, ".self::GEN_ATTR_EKU_F008_DTOTOPE."
				, ".self::GEN_ATTR_EKU_F009_DTOTDESC."
				, ".self::GEN_ATTR_EKU_F033_DTOTDESCGLOTEM."
				, ".self::GEN_ATTR_EKU_F034_DTOTANTITEM."
				, ".self::GEN_ATTR_EKU_F035_DTOTANT."
				, ".self::GEN_ATTR_EKU_F010_DPORCDESCTOTAL."
				, ".self::GEN_ATTR_EKU_F011_DDESCTOTAL."
				, ".self::GEN_ATTR_EKU_F012_DANTICIPO."
				, ".self::GEN_ATTR_EKU_F013_DREDON."
				, ".self::GEN_ATTR_EKU_F025_DCOMI."
				, ".self::GEN_ATTR_EKU_F014_DTOTGRALOPE."
				, ".self::GEN_ATTR_EKU_F015_DIVA5."
				, ".self::GEN_ATTR_EKU_F016_DIVA10."
				, ".self::GEN_ATTR_EKU_F036_DLIQTOTIVA5."
				, ".self::GEN_ATTR_EKU_F037_DLIQTOTIVA10."
				, ".self::GEN_ATTR_EKU_F026_DIVACOMI."
				, ".self::GEN_ATTR_EKU_F017_DTOTIVA."
				, ".self::GEN_ATTR_EKU_F018_DBASEGRAV5."
				, ".self::GEN_ATTR_EKU_F019_DBASEGRAV10."
				, ".self::GEN_ATTR_EKU_F020_DTBASGRAIVA."
				, ".self::GEN_ATTR_EKU_F023_DTOTALGS."
				, ".self::GEN_ATTR_EKU_F024_DTOTCOM."
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
				$this->setEkuF002Dsubexe($fila[self::GEN_ATTR_MIN_EKU_F002_DSUBEXE]);
				$this->setEkuF003Dsubexo($fila[self::GEN_ATTR_MIN_EKU_F003_DSUBEXO]);
				$this->setEkuF004Dsub5($fila[self::GEN_ATTR_MIN_EKU_F004_DSUB5]);
				$this->setEkuF005Dsub10($fila[self::GEN_ATTR_MIN_EKU_F005_DSUB10]);
				$this->setEkuF008Dtotope($fila[self::GEN_ATTR_MIN_EKU_F008_DTOTOPE]);
				$this->setEkuF009Dtotdesc($fila[self::GEN_ATTR_MIN_EKU_F009_DTOTDESC]);
				$this->setEkuF033Dtotdescglotem($fila[self::GEN_ATTR_MIN_EKU_F033_DTOTDESCGLOTEM]);
				$this->setEkuF034Dtotantitem($fila[self::GEN_ATTR_MIN_EKU_F034_DTOTANTITEM]);
				$this->setEkuF035Dtotant($fila[self::GEN_ATTR_MIN_EKU_F035_DTOTANT]);
				$this->setEkuF010Dporcdesctotal($fila[self::GEN_ATTR_MIN_EKU_F010_DPORCDESCTOTAL]);
				$this->setEkuF011Ddesctotal($fila[self::GEN_ATTR_MIN_EKU_F011_DDESCTOTAL]);
				$this->setEkuF012Danticipo($fila[self::GEN_ATTR_MIN_EKU_F012_DANTICIPO]);
				$this->setEkuF013Dredon($fila[self::GEN_ATTR_MIN_EKU_F013_DREDON]);
				$this->setEkuF025Dcomi($fila[self::GEN_ATTR_MIN_EKU_F025_DCOMI]);
				$this->setEkuF014Dtotgralope($fila[self::GEN_ATTR_MIN_EKU_F014_DTOTGRALOPE]);
				$this->setEkuF015Diva5($fila[self::GEN_ATTR_MIN_EKU_F015_DIVA5]);
				$this->setEkuF016Diva10($fila[self::GEN_ATTR_MIN_EKU_F016_DIVA10]);
				$this->setEkuF036Dliqtotiva5($fila[self::GEN_ATTR_MIN_EKU_F036_DLIQTOTIVA5]);
				$this->setEkuF037Dliqtotiva10($fila[self::GEN_ATTR_MIN_EKU_F037_DLIQTOTIVA10]);
				$this->setEkuF026Divacomi($fila[self::GEN_ATTR_MIN_EKU_F026_DIVACOMI]);
				$this->setEkuF017Dtotiva($fila[self::GEN_ATTR_MIN_EKU_F017_DTOTIVA]);
				$this->setEkuF018Dbasegrav5($fila[self::GEN_ATTR_MIN_EKU_F018_DBASEGRAV5]);
				$this->setEkuF019Dbasegrav10($fila[self::GEN_ATTR_MIN_EKU_F019_DBASEGRAV10]);
				$this->setEkuF020Dtbasgraiva($fila[self::GEN_ATTR_MIN_EKU_F020_DTBASGRAIVA]);
				$this->setEkuF023Dtotalgs($fila[self::GEN_ATTR_MIN_EKU_F023_DTOTALGS]);
				$this->setEkuF024Dtotcom($fila[self::GEN_ATTR_MIN_EKU_F024_DTOTCOM]);
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
	public function setEkuF002Dsubexe($v){ $this->eku_f002_dsubexe = $v; }
	public function setEkuF003Dsubexo($v){ $this->eku_f003_dsubexo = $v; }
	public function setEkuF004Dsub5($v){ $this->eku_f004_dsub5 = $v; }
	public function setEkuF005Dsub10($v){ $this->eku_f005_dsub10 = $v; }
	public function setEkuF008Dtotope($v){ $this->eku_f008_dtotope = $v; }
	public function setEkuF009Dtotdesc($v){ $this->eku_f009_dtotdesc = $v; }
	public function setEkuF033Dtotdescglotem($v){ $this->eku_f033_dtotdescglotem = $v; }
	public function setEkuF034Dtotantitem($v){ $this->eku_f034_dtotantitem = $v; }
	public function setEkuF035Dtotant($v){ $this->eku_f035_dtotant = $v; }
	public function setEkuF010Dporcdesctotal($v){ $this->eku_f010_dporcdesctotal = $v; }
	public function setEkuF011Ddesctotal($v){ $this->eku_f011_ddesctotal = $v; }
	public function setEkuF012Danticipo($v){ $this->eku_f012_danticipo = $v; }
	public function setEkuF013Dredon($v){ $this->eku_f013_dredon = $v; }
	public function setEkuF025Dcomi($v){ $this->eku_f025_dcomi = $v; }
	public function setEkuF014Dtotgralope($v){ $this->eku_f014_dtotgralope = $v; }
	public function setEkuF015Diva5($v){ $this->eku_f015_diva5 = $v; }
	public function setEkuF016Diva10($v){ $this->eku_f016_diva10 = $v; }
	public function setEkuF036Dliqtotiva5($v){ $this->eku_f036_dliqtotiva5 = $v; }
	public function setEkuF037Dliqtotiva10($v){ $this->eku_f037_dliqtotiva10 = $v; }
	public function setEkuF026Divacomi($v){ $this->eku_f026_divacomi = $v; }
	public function setEkuF017Dtotiva($v){ $this->eku_f017_dtotiva = $v; }
	public function setEkuF018Dbasegrav5($v){ $this->eku_f018_dbasegrav5 = $v; }
	public function setEkuF019Dbasegrav10($v){ $this->eku_f019_dbasegrav10 = $v; }
	public function setEkuF020Dtbasgraiva($v){ $this->eku_f020_dtbasgraiva = $v; }
	public function setEkuF023Dtotalgs($v){ $this->eku_f023_dtotalgs = $v; }
	public function setEkuF024Dtotcom($v){ $this->eku_f024_dtotcom = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new EkuDeF001GTotSub();
            $o->setId($fila[EkuDeF001GTotSub::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setEkuDeId($fila[self::GEN_ATTR_MIN_EKU_DE_ID]);
			$o->setEkuF002Dsubexe($fila[self::GEN_ATTR_MIN_EKU_F002_DSUBEXE]);
			$o->setEkuF003Dsubexo($fila[self::GEN_ATTR_MIN_EKU_F003_DSUBEXO]);
			$o->setEkuF004Dsub5($fila[self::GEN_ATTR_MIN_EKU_F004_DSUB5]);
			$o->setEkuF005Dsub10($fila[self::GEN_ATTR_MIN_EKU_F005_DSUB10]);
			$o->setEkuF008Dtotope($fila[self::GEN_ATTR_MIN_EKU_F008_DTOTOPE]);
			$o->setEkuF009Dtotdesc($fila[self::GEN_ATTR_MIN_EKU_F009_DTOTDESC]);
			$o->setEkuF033Dtotdescglotem($fila[self::GEN_ATTR_MIN_EKU_F033_DTOTDESCGLOTEM]);
			$o->setEkuF034Dtotantitem($fila[self::GEN_ATTR_MIN_EKU_F034_DTOTANTITEM]);
			$o->setEkuF035Dtotant($fila[self::GEN_ATTR_MIN_EKU_F035_DTOTANT]);
			$o->setEkuF010Dporcdesctotal($fila[self::GEN_ATTR_MIN_EKU_F010_DPORCDESCTOTAL]);
			$o->setEkuF011Ddesctotal($fila[self::GEN_ATTR_MIN_EKU_F011_DDESCTOTAL]);
			$o->setEkuF012Danticipo($fila[self::GEN_ATTR_MIN_EKU_F012_DANTICIPO]);
			$o->setEkuF013Dredon($fila[self::GEN_ATTR_MIN_EKU_F013_DREDON]);
			$o->setEkuF025Dcomi($fila[self::GEN_ATTR_MIN_EKU_F025_DCOMI]);
			$o->setEkuF014Dtotgralope($fila[self::GEN_ATTR_MIN_EKU_F014_DTOTGRALOPE]);
			$o->setEkuF015Diva5($fila[self::GEN_ATTR_MIN_EKU_F015_DIVA5]);
			$o->setEkuF016Diva10($fila[self::GEN_ATTR_MIN_EKU_F016_DIVA10]);
			$o->setEkuF036Dliqtotiva5($fila[self::GEN_ATTR_MIN_EKU_F036_DLIQTOTIVA5]);
			$o->setEkuF037Dliqtotiva10($fila[self::GEN_ATTR_MIN_EKU_F037_DLIQTOTIVA10]);
			$o->setEkuF026Divacomi($fila[self::GEN_ATTR_MIN_EKU_F026_DIVACOMI]);
			$o->setEkuF017Dtotiva($fila[self::GEN_ATTR_MIN_EKU_F017_DTOTIVA]);
			$o->setEkuF018Dbasegrav5($fila[self::GEN_ATTR_MIN_EKU_F018_DBASEGRAV5]);
			$o->setEkuF019Dbasegrav10($fila[self::GEN_ATTR_MIN_EKU_F019_DBASEGRAV10]);
			$o->setEkuF020Dtbasgraiva($fila[self::GEN_ATTR_MIN_EKU_F020_DTBASGRAIVA]);
			$o->setEkuF023Dtotalgs($fila[self::GEN_ATTR_MIN_EKU_F023_DTOTALGS]);
			$o->setEkuF024Dtotcom($fila[self::GEN_ATTR_MIN_EKU_F024_DTOTCOM]);
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

	/* Control de BEkuDeF001GTotSub */ 	
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

	/* Cambia el estado de BEkuDeF001GTotSub */ 	
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

	/* Save de BEkuDeF001GTotSub */ 	
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
						, ".self::GEN_ATTR_MIN_EKU_F002_DSUBEXE."
						, ".self::GEN_ATTR_MIN_EKU_F003_DSUBEXO."
						, ".self::GEN_ATTR_MIN_EKU_F004_DSUB5."
						, ".self::GEN_ATTR_MIN_EKU_F005_DSUB10."
						, ".self::GEN_ATTR_MIN_EKU_F008_DTOTOPE."
						, ".self::GEN_ATTR_MIN_EKU_F009_DTOTDESC."
						, ".self::GEN_ATTR_MIN_EKU_F033_DTOTDESCGLOTEM."
						, ".self::GEN_ATTR_MIN_EKU_F034_DTOTANTITEM."
						, ".self::GEN_ATTR_MIN_EKU_F035_DTOTANT."
						, ".self::GEN_ATTR_MIN_EKU_F010_DPORCDESCTOTAL."
						, ".self::GEN_ATTR_MIN_EKU_F011_DDESCTOTAL."
						, ".self::GEN_ATTR_MIN_EKU_F012_DANTICIPO."
						, ".self::GEN_ATTR_MIN_EKU_F013_DREDON."
						, ".self::GEN_ATTR_MIN_EKU_F025_DCOMI."
						, ".self::GEN_ATTR_MIN_EKU_F014_DTOTGRALOPE."
						, ".self::GEN_ATTR_MIN_EKU_F015_DIVA5."
						, ".self::GEN_ATTR_MIN_EKU_F016_DIVA10."
						, ".self::GEN_ATTR_MIN_EKU_F036_DLIQTOTIVA5."
						, ".self::GEN_ATTR_MIN_EKU_F037_DLIQTOTIVA10."
						, ".self::GEN_ATTR_MIN_EKU_F026_DIVACOMI."
						, ".self::GEN_ATTR_MIN_EKU_F017_DTOTIVA."
						, ".self::GEN_ATTR_MIN_EKU_F018_DBASEGRAV5."
						, ".self::GEN_ATTR_MIN_EKU_F019_DBASEGRAV10."
						, ".self::GEN_ATTR_MIN_EKU_F020_DTBASGRAIVA."
						, ".self::GEN_ATTR_MIN_EKU_F023_DTOTALGS."
						, ".self::GEN_ATTR_MIN_EKU_F024_DTOTCOM."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('eku_de_f001_g_tot_sub_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getEkuDeId()."
						, '".$this->getEkuF002Dsubexe()."'
						, '".$this->getEkuF003Dsubexo()."'
						, '".$this->getEkuF004Dsub5()."'
						, '".$this->getEkuF005Dsub10()."'
						, '".$this->getEkuF008Dtotope()."'
						, '".$this->getEkuF009Dtotdesc()."'
						, '".$this->getEkuF033Dtotdescglotem()."'
						, '".$this->getEkuF034Dtotantitem()."'
						, '".$this->getEkuF035Dtotant()."'
						, '".$this->getEkuF010Dporcdesctotal()."'
						, '".$this->getEkuF011Ddesctotal()."'
						, '".$this->getEkuF012Danticipo()."'
						, '".$this->getEkuF013Dredon()."'
						, '".$this->getEkuF025Dcomi()."'
						, '".$this->getEkuF014Dtotgralope()."'
						, '".$this->getEkuF015Diva5()."'
						, '".$this->getEkuF016Diva10()."'
						, '".$this->getEkuF036Dliqtotiva5()."'
						, '".$this->getEkuF037Dliqtotiva10()."'
						, '".$this->getEkuF026Divacomi()."'
						, '".$this->getEkuF017Dtotiva()."'
						, '".$this->getEkuF018Dbasegrav5()."'
						, '".$this->getEkuF019Dbasegrav10()."'
						, '".$this->getEkuF020Dtbasgraiva()."'
						, '".$this->getEkuF023Dtotalgs()."'
						, '".$this->getEkuF024Dtotcom()."'
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('eku_de_f001_g_tot_sub_seq')";
            
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
                 
				 ".EkuDeF001GTotSub::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_EKU_DE_ID." = ".$this->getEkuDeId()."
						, ".self::GEN_ATTR_MIN_EKU_F002_DSUBEXE." = '".$this->getEkuF002Dsubexe()."'
						, ".self::GEN_ATTR_MIN_EKU_F003_DSUBEXO." = '".$this->getEkuF003Dsubexo()."'
						, ".self::GEN_ATTR_MIN_EKU_F004_DSUB5." = '".$this->getEkuF004Dsub5()."'
						, ".self::GEN_ATTR_MIN_EKU_F005_DSUB10." = '".$this->getEkuF005Dsub10()."'
						, ".self::GEN_ATTR_MIN_EKU_F008_DTOTOPE." = '".$this->getEkuF008Dtotope()."'
						, ".self::GEN_ATTR_MIN_EKU_F009_DTOTDESC." = '".$this->getEkuF009Dtotdesc()."'
						, ".self::GEN_ATTR_MIN_EKU_F033_DTOTDESCGLOTEM." = '".$this->getEkuF033Dtotdescglotem()."'
						, ".self::GEN_ATTR_MIN_EKU_F034_DTOTANTITEM." = '".$this->getEkuF034Dtotantitem()."'
						, ".self::GEN_ATTR_MIN_EKU_F035_DTOTANT." = '".$this->getEkuF035Dtotant()."'
						, ".self::GEN_ATTR_MIN_EKU_F010_DPORCDESCTOTAL." = '".$this->getEkuF010Dporcdesctotal()."'
						, ".self::GEN_ATTR_MIN_EKU_F011_DDESCTOTAL." = '".$this->getEkuF011Ddesctotal()."'
						, ".self::GEN_ATTR_MIN_EKU_F012_DANTICIPO." = '".$this->getEkuF012Danticipo()."'
						, ".self::GEN_ATTR_MIN_EKU_F013_DREDON." = '".$this->getEkuF013Dredon()."'
						, ".self::GEN_ATTR_MIN_EKU_F025_DCOMI." = '".$this->getEkuF025Dcomi()."'
						, ".self::GEN_ATTR_MIN_EKU_F014_DTOTGRALOPE." = '".$this->getEkuF014Dtotgralope()."'
						, ".self::GEN_ATTR_MIN_EKU_F015_DIVA5." = '".$this->getEkuF015Diva5()."'
						, ".self::GEN_ATTR_MIN_EKU_F016_DIVA10." = '".$this->getEkuF016Diva10()."'
						, ".self::GEN_ATTR_MIN_EKU_F036_DLIQTOTIVA5." = '".$this->getEkuF036Dliqtotiva5()."'
						, ".self::GEN_ATTR_MIN_EKU_F037_DLIQTOTIVA10." = '".$this->getEkuF037Dliqtotiva10()."'
						, ".self::GEN_ATTR_MIN_EKU_F026_DIVACOMI." = '".$this->getEkuF026Divacomi()."'
						, ".self::GEN_ATTR_MIN_EKU_F017_DTOTIVA." = '".$this->getEkuF017Dtotiva()."'
						, ".self::GEN_ATTR_MIN_EKU_F018_DBASEGRAV5." = '".$this->getEkuF018Dbasegrav5()."'
						, ".self::GEN_ATTR_MIN_EKU_F019_DBASEGRAV10." = '".$this->getEkuF019Dbasegrav10()."'
						, ".self::GEN_ATTR_MIN_EKU_F020_DTBASGRAIVA." = '".$this->getEkuF020Dtbasgraiva()."'
						, ".self::GEN_ATTR_MIN_EKU_F023_DTOTALGS." = '".$this->getEkuF023Dtotalgs()."'
						, ".self::GEN_ATTR_MIN_EKU_F024_DTOTCOM." = '".$this->getEkuF024Dtotcom()."'
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
						, ".self::GEN_ATTR_MIN_EKU_F002_DSUBEXE."
						, ".self::GEN_ATTR_MIN_EKU_F003_DSUBEXO."
						, ".self::GEN_ATTR_MIN_EKU_F004_DSUB5."
						, ".self::GEN_ATTR_MIN_EKU_F005_DSUB10."
						, ".self::GEN_ATTR_MIN_EKU_F008_DTOTOPE."
						, ".self::GEN_ATTR_MIN_EKU_F009_DTOTDESC."
						, ".self::GEN_ATTR_MIN_EKU_F033_DTOTDESCGLOTEM."
						, ".self::GEN_ATTR_MIN_EKU_F034_DTOTANTITEM."
						, ".self::GEN_ATTR_MIN_EKU_F035_DTOTANT."
						, ".self::GEN_ATTR_MIN_EKU_F010_DPORCDESCTOTAL."
						, ".self::GEN_ATTR_MIN_EKU_F011_DDESCTOTAL."
						, ".self::GEN_ATTR_MIN_EKU_F012_DANTICIPO."
						, ".self::GEN_ATTR_MIN_EKU_F013_DREDON."
						, ".self::GEN_ATTR_MIN_EKU_F025_DCOMI."
						, ".self::GEN_ATTR_MIN_EKU_F014_DTOTGRALOPE."
						, ".self::GEN_ATTR_MIN_EKU_F015_DIVA5."
						, ".self::GEN_ATTR_MIN_EKU_F016_DIVA10."
						, ".self::GEN_ATTR_MIN_EKU_F036_DLIQTOTIVA5."
						, ".self::GEN_ATTR_MIN_EKU_F037_DLIQTOTIVA10."
						, ".self::GEN_ATTR_MIN_EKU_F026_DIVACOMI."
						, ".self::GEN_ATTR_MIN_EKU_F017_DTOTIVA."
						, ".self::GEN_ATTR_MIN_EKU_F018_DBASEGRAV5."
						, ".self::GEN_ATTR_MIN_EKU_F019_DBASEGRAV10."
						, ".self::GEN_ATTR_MIN_EKU_F020_DTBASGRAIVA."
						, ".self::GEN_ATTR_MIN_EKU_F023_DTOTALGS."
						, ".self::GEN_ATTR_MIN_EKU_F024_DTOTCOM."
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
						, '".$this->getEkuF002Dsubexe()."'
						, '".$this->getEkuF003Dsubexo()."'
						, '".$this->getEkuF004Dsub5()."'
						, '".$this->getEkuF005Dsub10()."'
						, '".$this->getEkuF008Dtotope()."'
						, '".$this->getEkuF009Dtotdesc()."'
						, '".$this->getEkuF033Dtotdescglotem()."'
						, '".$this->getEkuF034Dtotantitem()."'
						, '".$this->getEkuF035Dtotant()."'
						, '".$this->getEkuF010Dporcdesctotal()."'
						, '".$this->getEkuF011Ddesctotal()."'
						, '".$this->getEkuF012Danticipo()."'
						, '".$this->getEkuF013Dredon()."'
						, '".$this->getEkuF025Dcomi()."'
						, '".$this->getEkuF014Dtotgralope()."'
						, '".$this->getEkuF015Diva5()."'
						, '".$this->getEkuF016Diva10()."'
						, '".$this->getEkuF036Dliqtotiva5()."'
						, '".$this->getEkuF037Dliqtotiva10()."'
						, '".$this->getEkuF026Divacomi()."'
						, '".$this->getEkuF017Dtotiva()."'
						, '".$this->getEkuF018Dbasegrav5()."'
						, '".$this->getEkuF019Dbasegrav10()."'
						, '".$this->getEkuF020Dtbasgraiva()."'
						, '".$this->getEkuF023Dtotalgs()."'
						, '".$this->getEkuF024Dtotcom()."'
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
                     
				 ".EkuDeF001GTotSub::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_EKU_DE_ID." = ".$this->getEkuDeId()."
						, ".self::GEN_ATTR_MIN_EKU_F002_DSUBEXE." = '".$this->getEkuF002Dsubexe()."'
						, ".self::GEN_ATTR_MIN_EKU_F003_DSUBEXO." = '".$this->getEkuF003Dsubexo()."'
						, ".self::GEN_ATTR_MIN_EKU_F004_DSUB5." = '".$this->getEkuF004Dsub5()."'
						, ".self::GEN_ATTR_MIN_EKU_F005_DSUB10." = '".$this->getEkuF005Dsub10()."'
						, ".self::GEN_ATTR_MIN_EKU_F008_DTOTOPE." = '".$this->getEkuF008Dtotope()."'
						, ".self::GEN_ATTR_MIN_EKU_F009_DTOTDESC." = '".$this->getEkuF009Dtotdesc()."'
						, ".self::GEN_ATTR_MIN_EKU_F033_DTOTDESCGLOTEM." = '".$this->getEkuF033Dtotdescglotem()."'
						, ".self::GEN_ATTR_MIN_EKU_F034_DTOTANTITEM." = '".$this->getEkuF034Dtotantitem()."'
						, ".self::GEN_ATTR_MIN_EKU_F035_DTOTANT." = '".$this->getEkuF035Dtotant()."'
						, ".self::GEN_ATTR_MIN_EKU_F010_DPORCDESCTOTAL." = '".$this->getEkuF010Dporcdesctotal()."'
						, ".self::GEN_ATTR_MIN_EKU_F011_DDESCTOTAL." = '".$this->getEkuF011Ddesctotal()."'
						, ".self::GEN_ATTR_MIN_EKU_F012_DANTICIPO." = '".$this->getEkuF012Danticipo()."'
						, ".self::GEN_ATTR_MIN_EKU_F013_DREDON." = '".$this->getEkuF013Dredon()."'
						, ".self::GEN_ATTR_MIN_EKU_F025_DCOMI." = '".$this->getEkuF025Dcomi()."'
						, ".self::GEN_ATTR_MIN_EKU_F014_DTOTGRALOPE." = '".$this->getEkuF014Dtotgralope()."'
						, ".self::GEN_ATTR_MIN_EKU_F015_DIVA5." = '".$this->getEkuF015Diva5()."'
						, ".self::GEN_ATTR_MIN_EKU_F016_DIVA10." = '".$this->getEkuF016Diva10()."'
						, ".self::GEN_ATTR_MIN_EKU_F036_DLIQTOTIVA5." = '".$this->getEkuF036Dliqtotiva5()."'
						, ".self::GEN_ATTR_MIN_EKU_F037_DLIQTOTIVA10." = '".$this->getEkuF037Dliqtotiva10()."'
						, ".self::GEN_ATTR_MIN_EKU_F026_DIVACOMI." = '".$this->getEkuF026Divacomi()."'
						, ".self::GEN_ATTR_MIN_EKU_F017_DTOTIVA." = '".$this->getEkuF017Dtotiva()."'
						, ".self::GEN_ATTR_MIN_EKU_F018_DBASEGRAV5." = '".$this->getEkuF018Dbasegrav5()."'
						, ".self::GEN_ATTR_MIN_EKU_F019_DBASEGRAV10." = '".$this->getEkuF019Dbasegrav10()."'
						, ".self::GEN_ATTR_MIN_EKU_F020_DTBASGRAIVA." = '".$this->getEkuF020Dtbasgraiva()."'
						, ".self::GEN_ATTR_MIN_EKU_F023_DTOTALGS." = '".$this->getEkuF023Dtotalgs()."'
						, ".self::GEN_ATTR_MIN_EKU_F024_DTOTCOM." = '".$this->getEkuF024Dtotcom()."'
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
            $o = new EkuDeF001GTotSub();
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

	/* Delete de BEkuDeF001GTotSub */ 	
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
	
	public function duplicarEkuDeF001GTotSub(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getEkuDeF001GTotSubs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = EkuDeF001GTotSub::setAplicarFiltrosDeAlcance($criterio);

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
	
		$ekudef001gtotsubs = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $ekudef001gtotsub = new EkuDeF001GTotSub();
                    $ekudef001gtotsub->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $ekudef001gtotsub->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$ekudef001gtotsub->setEkuDeId($fila[self::GEN_ATTR_MIN_EKU_DE_ID]);
			$ekudef001gtotsub->setEkuF002Dsubexe($fila[self::GEN_ATTR_MIN_EKU_F002_DSUBEXE]);
			$ekudef001gtotsub->setEkuF003Dsubexo($fila[self::GEN_ATTR_MIN_EKU_F003_DSUBEXO]);
			$ekudef001gtotsub->setEkuF004Dsub5($fila[self::GEN_ATTR_MIN_EKU_F004_DSUB5]);
			$ekudef001gtotsub->setEkuF005Dsub10($fila[self::GEN_ATTR_MIN_EKU_F005_DSUB10]);
			$ekudef001gtotsub->setEkuF008Dtotope($fila[self::GEN_ATTR_MIN_EKU_F008_DTOTOPE]);
			$ekudef001gtotsub->setEkuF009Dtotdesc($fila[self::GEN_ATTR_MIN_EKU_F009_DTOTDESC]);
			$ekudef001gtotsub->setEkuF033Dtotdescglotem($fila[self::GEN_ATTR_MIN_EKU_F033_DTOTDESCGLOTEM]);
			$ekudef001gtotsub->setEkuF034Dtotantitem($fila[self::GEN_ATTR_MIN_EKU_F034_DTOTANTITEM]);
			$ekudef001gtotsub->setEkuF035Dtotant($fila[self::GEN_ATTR_MIN_EKU_F035_DTOTANT]);
			$ekudef001gtotsub->setEkuF010Dporcdesctotal($fila[self::GEN_ATTR_MIN_EKU_F010_DPORCDESCTOTAL]);
			$ekudef001gtotsub->setEkuF011Ddesctotal($fila[self::GEN_ATTR_MIN_EKU_F011_DDESCTOTAL]);
			$ekudef001gtotsub->setEkuF012Danticipo($fila[self::GEN_ATTR_MIN_EKU_F012_DANTICIPO]);
			$ekudef001gtotsub->setEkuF013Dredon($fila[self::GEN_ATTR_MIN_EKU_F013_DREDON]);
			$ekudef001gtotsub->setEkuF025Dcomi($fila[self::GEN_ATTR_MIN_EKU_F025_DCOMI]);
			$ekudef001gtotsub->setEkuF014Dtotgralope($fila[self::GEN_ATTR_MIN_EKU_F014_DTOTGRALOPE]);
			$ekudef001gtotsub->setEkuF015Diva5($fila[self::GEN_ATTR_MIN_EKU_F015_DIVA5]);
			$ekudef001gtotsub->setEkuF016Diva10($fila[self::GEN_ATTR_MIN_EKU_F016_DIVA10]);
			$ekudef001gtotsub->setEkuF036Dliqtotiva5($fila[self::GEN_ATTR_MIN_EKU_F036_DLIQTOTIVA5]);
			$ekudef001gtotsub->setEkuF037Dliqtotiva10($fila[self::GEN_ATTR_MIN_EKU_F037_DLIQTOTIVA10]);
			$ekudef001gtotsub->setEkuF026Divacomi($fila[self::GEN_ATTR_MIN_EKU_F026_DIVACOMI]);
			$ekudef001gtotsub->setEkuF017Dtotiva($fila[self::GEN_ATTR_MIN_EKU_F017_DTOTIVA]);
			$ekudef001gtotsub->setEkuF018Dbasegrav5($fila[self::GEN_ATTR_MIN_EKU_F018_DBASEGRAV5]);
			$ekudef001gtotsub->setEkuF019Dbasegrav10($fila[self::GEN_ATTR_MIN_EKU_F019_DBASEGRAV10]);
			$ekudef001gtotsub->setEkuF020Dtbasgraiva($fila[self::GEN_ATTR_MIN_EKU_F020_DTBASGRAIVA]);
			$ekudef001gtotsub->setEkuF023Dtotalgs($fila[self::GEN_ATTR_MIN_EKU_F023_DTOTALGS]);
			$ekudef001gtotsub->setEkuF024Dtotcom($fila[self::GEN_ATTR_MIN_EKU_F024_DTOTCOM]);
			$ekudef001gtotsub->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$ekudef001gtotsub->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$ekudef001gtotsub->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$ekudef001gtotsub->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$ekudef001gtotsub->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$ekudef001gtotsub->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$ekudef001gtotsub->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$ekudef001gtotsub->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $ekudef001gtotsubs[] = $ekudef001gtotsub;
		}
		
		return $ekudef001gtotsubs;
	}	
	

	/* Método getEkuDeF001GTotSubs Habilitados */ 	
	static function getEkuDeF001GTotSubsHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return EkuDeF001GTotSub::getEkuDeF001GTotSubs($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getEkuDeF001GTotSubs para listado de Backend */ 	
	static function getEkuDeF001GTotSubsDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return EkuDeF001GTotSub::getEkuDeF001GTotSubs($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getEkuDeF001GTotSubsCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = EkuDeF001GTotSub::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = EkuDeF001GTotSub::getEkuDeF001GTotSubs($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getEkuDeF001GTotSubs filtrado para select */ 	
	static function getEkuDeF001GTotSubsCmbF($paginador = null, $criterio = null){
            $col = EkuDeF001GTotSub::getEkuDeF001GTotSubs($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getEkuDeF001GTotSubs filtrado por una coleccion de objetos foraneos de EkuDe */ 	
	static function getEkuDeF001GTotSubsXEkuDes($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(EkuDeF001GTotSub::GEN_ATTR_EKU_DE_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(EkuDeF001GTotSub::GEN_TABLA);
            $c->addOrden(EkuDeF001GTotSub::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = EkuDeF001GTotSub::getEkuDeF001GTotSubs($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getEkuDeId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'eku_de_f001_g_tot_sub_adm.php';
            $url_gestion = 'eku_de_f001_g_tot_sub_gestion.php';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM eku_de_f001_g_tot_sub'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'eku_de_f001_g_tot_sub';");
            
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

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
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

            $obs = self::getEkuDeF001GTotSubs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
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

            $obs = self::getEkuDeF001GTotSubs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_de_id' */ 	
	static function getOxEkuDeId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_DE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
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

            $obs = self::getEkuDeF001GTotSubs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_f002_dsubexe' */ 	
	static function getOxEkuF002Dsubexe($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F002_DSUBEXE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_f002_dsubexe' */ 	
	static function getOsxEkuF002Dsubexe($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F002_DSUBEXE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeF001GTotSubs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_f003_dsubexo' */ 	
	static function getOxEkuF003Dsubexo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F003_DSUBEXO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_f003_dsubexo' */ 	
	static function getOsxEkuF003Dsubexo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F003_DSUBEXO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeF001GTotSubs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_f004_dsub5' */ 	
	static function getOxEkuF004Dsub5($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F004_DSUB5, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_f004_dsub5' */ 	
	static function getOsxEkuF004Dsub5($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F004_DSUB5, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeF001GTotSubs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_f005_dsub10' */ 	
	static function getOxEkuF005Dsub10($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F005_DSUB10, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_f005_dsub10' */ 	
	static function getOsxEkuF005Dsub10($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F005_DSUB10, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeF001GTotSubs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_f008_dtotope' */ 	
	static function getOxEkuF008Dtotope($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F008_DTOTOPE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_f008_dtotope' */ 	
	static function getOsxEkuF008Dtotope($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F008_DTOTOPE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeF001GTotSubs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_f009_dtotdesc' */ 	
	static function getOxEkuF009Dtotdesc($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F009_DTOTDESC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_f009_dtotdesc' */ 	
	static function getOsxEkuF009Dtotdesc($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F009_DTOTDESC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeF001GTotSubs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_f033_dtotdescglotem' */ 	
	static function getOxEkuF033Dtotdescglotem($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F033_DTOTDESCGLOTEM, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_f033_dtotdescglotem' */ 	
	static function getOsxEkuF033Dtotdescglotem($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F033_DTOTDESCGLOTEM, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeF001GTotSubs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_f034_dtotantitem' */ 	
	static function getOxEkuF034Dtotantitem($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F034_DTOTANTITEM, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_f034_dtotantitem' */ 	
	static function getOsxEkuF034Dtotantitem($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F034_DTOTANTITEM, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeF001GTotSubs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_f035_dtotant' */ 	
	static function getOxEkuF035Dtotant($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F035_DTOTANT, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_f035_dtotant' */ 	
	static function getOsxEkuF035Dtotant($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F035_DTOTANT, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeF001GTotSubs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_f010_dporcdesctotal' */ 	
	static function getOxEkuF010Dporcdesctotal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F010_DPORCDESCTOTAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_f010_dporcdesctotal' */ 	
	static function getOsxEkuF010Dporcdesctotal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F010_DPORCDESCTOTAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeF001GTotSubs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_f011_ddesctotal' */ 	
	static function getOxEkuF011Ddesctotal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F011_DDESCTOTAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_f011_ddesctotal' */ 	
	static function getOsxEkuF011Ddesctotal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F011_DDESCTOTAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeF001GTotSubs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_f012_danticipo' */ 	
	static function getOxEkuF012Danticipo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F012_DANTICIPO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_f012_danticipo' */ 	
	static function getOsxEkuF012Danticipo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F012_DANTICIPO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeF001GTotSubs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_f013_dredon' */ 	
	static function getOxEkuF013Dredon($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F013_DREDON, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_f013_dredon' */ 	
	static function getOsxEkuF013Dredon($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F013_DREDON, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeF001GTotSubs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_f025_dcomi' */ 	
	static function getOxEkuF025Dcomi($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F025_DCOMI, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_f025_dcomi' */ 	
	static function getOsxEkuF025Dcomi($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F025_DCOMI, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeF001GTotSubs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_f014_dtotgralope' */ 	
	static function getOxEkuF014Dtotgralope($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F014_DTOTGRALOPE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_f014_dtotgralope' */ 	
	static function getOsxEkuF014Dtotgralope($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F014_DTOTGRALOPE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeF001GTotSubs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_f015_diva5' */ 	
	static function getOxEkuF015Diva5($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F015_DIVA5, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_f015_diva5' */ 	
	static function getOsxEkuF015Diva5($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F015_DIVA5, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeF001GTotSubs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_f016_diva10' */ 	
	static function getOxEkuF016Diva10($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F016_DIVA10, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_f016_diva10' */ 	
	static function getOsxEkuF016Diva10($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F016_DIVA10, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeF001GTotSubs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_f036_dliqtotiva5' */ 	
	static function getOxEkuF036Dliqtotiva5($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F036_DLIQTOTIVA5, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_f036_dliqtotiva5' */ 	
	static function getOsxEkuF036Dliqtotiva5($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F036_DLIQTOTIVA5, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeF001GTotSubs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_f037_dliqtotiva10' */ 	
	static function getOxEkuF037Dliqtotiva10($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F037_DLIQTOTIVA10, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_f037_dliqtotiva10' */ 	
	static function getOsxEkuF037Dliqtotiva10($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F037_DLIQTOTIVA10, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeF001GTotSubs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_f026_divacomi' */ 	
	static function getOxEkuF026Divacomi($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F026_DIVACOMI, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_f026_divacomi' */ 	
	static function getOsxEkuF026Divacomi($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F026_DIVACOMI, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeF001GTotSubs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_f017_dtotiva' */ 	
	static function getOxEkuF017Dtotiva($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F017_DTOTIVA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_f017_dtotiva' */ 	
	static function getOsxEkuF017Dtotiva($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F017_DTOTIVA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeF001GTotSubs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_f018_dbasegrav5' */ 	
	static function getOxEkuF018Dbasegrav5($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F018_DBASEGRAV5, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_f018_dbasegrav5' */ 	
	static function getOsxEkuF018Dbasegrav5($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F018_DBASEGRAV5, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeF001GTotSubs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_f019_dbasegrav10' */ 	
	static function getOxEkuF019Dbasegrav10($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F019_DBASEGRAV10, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_f019_dbasegrav10' */ 	
	static function getOsxEkuF019Dbasegrav10($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F019_DBASEGRAV10, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeF001GTotSubs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_f020_dtbasgraiva' */ 	
	static function getOxEkuF020Dtbasgraiva($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F020_DTBASGRAIVA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_f020_dtbasgraiva' */ 	
	static function getOsxEkuF020Dtbasgraiva($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F020_DTBASGRAIVA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeF001GTotSubs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_f023_dtotalgs' */ 	
	static function getOxEkuF023Dtotalgs($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F023_DTOTALGS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_f023_dtotalgs' */ 	
	static function getOsxEkuF023Dtotalgs($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F023_DTOTALGS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeF001GTotSubs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_f024_dtotcom' */ 	
	static function getOxEkuF024Dtotcom($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F024_DTOTCOM, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_f024_dtotcom' */ 	
	static function getOsxEkuF024Dtotcom($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_F024_DTOTCOM, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeF001GTotSubs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
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

            $obs = self::getEkuDeF001GTotSubs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
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

            $obs = self::getEkuDeF001GTotSubs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
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

            $obs = self::getEkuDeF001GTotSubs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
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

            $obs = self::getEkuDeF001GTotSubs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
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

            $obs = self::getEkuDeF001GTotSubs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
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

            $obs = self::getEkuDeF001GTotSubs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
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

            $obs = self::getEkuDeF001GTotSubs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
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

            $obs = self::getEkuDeF001GTotSubs(null, $criterio);
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

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
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

            $obs = self::getEkuDeF001GTotSubs($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'eku_de_f001_g_tot_sub_adm');
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
                $c->addTabla(EkuDeF001GTotSub::GEN_TABLA);
                $c->addOrden(EkuDeF001GTotSub::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $eku_de_f001_g_tot_subs = EkuDeF001GTotSub::getEkuDeF001GTotSubs(null, $c);

                $arr = array();
                foreach($eku_de_f001_g_tot_subs as $eku_de_f001_g_tot_sub){
                    $descripcion = $eku_de_f001_g_tot_sub->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>