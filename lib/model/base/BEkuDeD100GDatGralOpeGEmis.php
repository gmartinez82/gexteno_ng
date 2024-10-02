<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BEkuDeD100GDatGralOpeGEmis
{ 
	
	const SES_PAGINACION = 'adm_ekuded100gdatgralopegemis_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_ekuded100gdatgralopegemis_paginas_registros';
	const SES_CRITERIOS = 'adm_ekuded100gdatgralopegemis_criterios';
	
	const GEN_CLASE = 'EkuDeD100GDatGralOpeGEmis';
	const GEN_TABLA = 'eku_de_d100_g_dat_gral_ope_g_emis';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BEkuDeD100GDatGralOpeGEmis */ 
	const GEN_ATTR_ID = 'eku_de_d100_g_dat_gral_ope_g_emis.id';
	const GEN_ATTR_DESCRIPCION = 'eku_de_d100_g_dat_gral_ope_g_emis.descripcion';
	const GEN_ATTR_EKU_DE_ID = 'eku_de_d100_g_dat_gral_ope_g_emis.eku_de_id';
	const GEN_ATTR_EKU_D101_DRUCEM = 'eku_de_d100_g_dat_gral_ope_g_emis.eku_d101_drucem';
	const GEN_ATTR_EKU_D102_DDVEMI = 'eku_de_d100_g_dat_gral_ope_g_emis.eku_d102_ddvemi';
	const GEN_ATTR_EKU_D103_ITIPCONT = 'eku_de_d100_g_dat_gral_ope_g_emis.eku_d103_itipcont';
	const GEN_ATTR_EKU_D104_CTIPREG = 'eku_de_d100_g_dat_gral_ope_g_emis.eku_d104_ctipreg';
	const GEN_ATTR_EKU_D105_DNOMEMI = 'eku_de_d100_g_dat_gral_ope_g_emis.eku_d105_dnomemi';
	const GEN_ATTR_EKU_D106_DNOMFANEMI = 'eku_de_d100_g_dat_gral_ope_g_emis.eku_d106_dnomfanemi';
	const GEN_ATTR_EKU_D107_DDIREMI = 'eku_de_d100_g_dat_gral_ope_g_emis.eku_d107_ddiremi';
	const GEN_ATTR_EKU_D108_DNUMCAS = 'eku_de_d100_g_dat_gral_ope_g_emis.eku_d108_dnumcas';
	const GEN_ATTR_EKU_D109_DCOMPDIR1 = 'eku_de_d100_g_dat_gral_ope_g_emis.eku_d109_dcompdir1';
	const GEN_ATTR_EKU_D110_DCOMPDIR2 = 'eku_de_d100_g_dat_gral_ope_g_emis.eku_d110_dcompdir2';
	const GEN_ATTR_EKU_D111_CDEPEMI = 'eku_de_d100_g_dat_gral_ope_g_emis.eku_d111_cdepemi';
	const GEN_ATTR_EKU_D112_DDESDEPEMI = 'eku_de_d100_g_dat_gral_ope_g_emis.eku_d112_ddesdepemi';
	const GEN_ATTR_EKU_D113_CDISEMI = 'eku_de_d100_g_dat_gral_ope_g_emis.eku_d113_cdisemi';
	const GEN_ATTR_EKU_D114_DDESDISEMI = 'eku_de_d100_g_dat_gral_ope_g_emis.eku_d114_ddesdisemi';
	const GEN_ATTR_EKU_D115_CCIUEMI = 'eku_de_d100_g_dat_gral_ope_g_emis.eku_d115_cciuemi';
	const GEN_ATTR_EKU_D116_DDESCIUEMI = 'eku_de_d100_g_dat_gral_ope_g_emis.eku_d116_ddesciuemi';
	const GEN_ATTR_EKU_D117_DTELEMI = 'eku_de_d100_g_dat_gral_ope_g_emis.eku_d117_dtelemi';
	const GEN_ATTR_EKU_D118_DEMAILE = 'eku_de_d100_g_dat_gral_ope_g_emis.eku_d118_demaile';
	const GEN_ATTR_EKU_D119_DDENSUC = 'eku_de_d100_g_dat_gral_ope_g_emis.eku_d119_ddensuc';
	const GEN_ATTR_CODIGO = 'eku_de_d100_g_dat_gral_ope_g_emis.codigo';
	const GEN_ATTR_OBSERVACION = 'eku_de_d100_g_dat_gral_ope_g_emis.observacion';
	const GEN_ATTR_ORDEN = 'eku_de_d100_g_dat_gral_ope_g_emis.orden';
	const GEN_ATTR_ESTADO = 'eku_de_d100_g_dat_gral_ope_g_emis.estado';
	const GEN_ATTR_CREADO = 'eku_de_d100_g_dat_gral_ope_g_emis.creado';
	const GEN_ATTR_CREADO_POR = 'eku_de_d100_g_dat_gral_ope_g_emis.creado_por';
	const GEN_ATTR_MODIFICADO = 'eku_de_d100_g_dat_gral_ope_g_emis.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'eku_de_d100_g_dat_gral_ope_g_emis.modificado_por';

	/* Constantes de Atributos Min de BEkuDeD100GDatGralOpeGEmis */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_EKU_DE_ID = 'eku_de_id';
	const GEN_ATTR_MIN_EKU_D101_DRUCEM = 'eku_d101_drucem';
	const GEN_ATTR_MIN_EKU_D102_DDVEMI = 'eku_d102_ddvemi';
	const GEN_ATTR_MIN_EKU_D103_ITIPCONT = 'eku_d103_itipcont';
	const GEN_ATTR_MIN_EKU_D104_CTIPREG = 'eku_d104_ctipreg';
	const GEN_ATTR_MIN_EKU_D105_DNOMEMI = 'eku_d105_dnomemi';
	const GEN_ATTR_MIN_EKU_D106_DNOMFANEMI = 'eku_d106_dnomfanemi';
	const GEN_ATTR_MIN_EKU_D107_DDIREMI = 'eku_d107_ddiremi';
	const GEN_ATTR_MIN_EKU_D108_DNUMCAS = 'eku_d108_dnumcas';
	const GEN_ATTR_MIN_EKU_D109_DCOMPDIR1 = 'eku_d109_dcompdir1';
	const GEN_ATTR_MIN_EKU_D110_DCOMPDIR2 = 'eku_d110_dcompdir2';
	const GEN_ATTR_MIN_EKU_D111_CDEPEMI = 'eku_d111_cdepemi';
	const GEN_ATTR_MIN_EKU_D112_DDESDEPEMI = 'eku_d112_ddesdepemi';
	const GEN_ATTR_MIN_EKU_D113_CDISEMI = 'eku_d113_cdisemi';
	const GEN_ATTR_MIN_EKU_D114_DDESDISEMI = 'eku_d114_ddesdisemi';
	const GEN_ATTR_MIN_EKU_D115_CCIUEMI = 'eku_d115_cciuemi';
	const GEN_ATTR_MIN_EKU_D116_DDESCIUEMI = 'eku_d116_ddesciuemi';
	const GEN_ATTR_MIN_EKU_D117_DTELEMI = 'eku_d117_dtelemi';
	const GEN_ATTR_MIN_EKU_D118_DEMAILE = 'eku_d118_demaile';
	const GEN_ATTR_MIN_EKU_D119_DDENSUC = 'eku_d119_ddensuc';
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
	

	/* Atributos de BEkuDeD100GDatGralOpeGEmis */ 
	private $id;
	private $descripcion;
	private $eku_de_id;
	private $eku_d101_drucem;
	private $eku_d102_ddvemi;
	private $eku_d103_itipcont;
	private $eku_d104_ctipreg;
	private $eku_d105_dnomemi;
	private $eku_d106_dnomfanemi;
	private $eku_d107_ddiremi;
	private $eku_d108_dnumcas;
	private $eku_d109_dcompdir1;
	private $eku_d110_dcompdir2;
	private $eku_d111_cdepemi;
	private $eku_d112_ddesdepemi;
	private $eku_d113_cdisemi;
	private $eku_d114_ddesdisemi;
	private $eku_d115_cciuemi;
	private $eku_d116_ddesciuemi;
	private $eku_d117_dtelemi;
	private $eku_d118_demaile;
	private $eku_d119_ddensuc;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BEkuDeD100GDatGralOpeGEmis */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getEkuDeId(){ if(isset($this->eku_de_id)){ return $this->eku_de_id; }else{ return 'null'; } }
	public function getEkuD101Drucem(){ if(isset($this->eku_d101_drucem)){ return $this->eku_d101_drucem; }else{ return ''; } }
	public function getEkuD102Ddvemi(){ if(isset($this->eku_d102_ddvemi)){ return $this->eku_d102_ddvemi; }else{ return ''; } }
	public function getEkuD103Itipcont(){ if(isset($this->eku_d103_itipcont)){ return $this->eku_d103_itipcont; }else{ return ''; } }
	public function getEkuD104Ctipreg(){ if(isset($this->eku_d104_ctipreg)){ return $this->eku_d104_ctipreg; }else{ return ''; } }
	public function getEkuD105Dnomemi(){ if(isset($this->eku_d105_dnomemi)){ return $this->eku_d105_dnomemi; }else{ return ''; } }
	public function getEkuD106Dnomfanemi(){ if(isset($this->eku_d106_dnomfanemi)){ return $this->eku_d106_dnomfanemi; }else{ return ''; } }
	public function getEkuD107Ddiremi(){ if(isset($this->eku_d107_ddiremi)){ return $this->eku_d107_ddiremi; }else{ return ''; } }
	public function getEkuD108Dnumcas(){ if(isset($this->eku_d108_dnumcas)){ return $this->eku_d108_dnumcas; }else{ return ''; } }
	public function getEkuD109Dcompdir1(){ if(isset($this->eku_d109_dcompdir1)){ return $this->eku_d109_dcompdir1; }else{ return ''; } }
	public function getEkuD110Dcompdir2(){ if(isset($this->eku_d110_dcompdir2)){ return $this->eku_d110_dcompdir2; }else{ return ''; } }
	public function getEkuD111Cdepemi(){ if(isset($this->eku_d111_cdepemi)){ return $this->eku_d111_cdepemi; }else{ return ''; } }
	public function getEkuD112Ddesdepemi(){ if(isset($this->eku_d112_ddesdepemi)){ return $this->eku_d112_ddesdepemi; }else{ return ''; } }
	public function getEkuD113Cdisemi(){ if(isset($this->eku_d113_cdisemi)){ return $this->eku_d113_cdisemi; }else{ return ''; } }
	public function getEkuD114Ddesdisemi(){ if(isset($this->eku_d114_ddesdisemi)){ return $this->eku_d114_ddesdisemi; }else{ return ''; } }
	public function getEkuD115Cciuemi(){ if(isset($this->eku_d115_cciuemi)){ return $this->eku_d115_cciuemi; }else{ return ''; } }
	public function getEkuD116Ddesciuemi(){ if(isset($this->eku_d116_ddesciuemi)){ return $this->eku_d116_ddesciuemi; }else{ return ''; } }
	public function getEkuD117Dtelemi(){ if(isset($this->eku_d117_dtelemi)){ return $this->eku_d117_dtelemi; }else{ return ''; } }
	public function getEkuD118Demaile(){ if(isset($this->eku_d118_demaile)){ return $this->eku_d118_demaile; }else{ return ''; } }
	public function getEkuD119Ddensuc(){ if(isset($this->eku_d119_ddensuc)){ return $this->eku_d119_ddensuc; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BEkuDeD100GDatGralOpeGEmis */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_EKU_DE_ID."
				, ".self::GEN_ATTR_EKU_D101_DRUCEM."
				, ".self::GEN_ATTR_EKU_D102_DDVEMI."
				, ".self::GEN_ATTR_EKU_D103_ITIPCONT."
				, ".self::GEN_ATTR_EKU_D104_CTIPREG."
				, ".self::GEN_ATTR_EKU_D105_DNOMEMI."
				, ".self::GEN_ATTR_EKU_D106_DNOMFANEMI."
				, ".self::GEN_ATTR_EKU_D107_DDIREMI."
				, ".self::GEN_ATTR_EKU_D108_DNUMCAS."
				, ".self::GEN_ATTR_EKU_D109_DCOMPDIR1."
				, ".self::GEN_ATTR_EKU_D110_DCOMPDIR2."
				, ".self::GEN_ATTR_EKU_D111_CDEPEMI."
				, ".self::GEN_ATTR_EKU_D112_DDESDEPEMI."
				, ".self::GEN_ATTR_EKU_D113_CDISEMI."
				, ".self::GEN_ATTR_EKU_D114_DDESDISEMI."
				, ".self::GEN_ATTR_EKU_D115_CCIUEMI."
				, ".self::GEN_ATTR_EKU_D116_DDESCIUEMI."
				, ".self::GEN_ATTR_EKU_D117_DTELEMI."
				, ".self::GEN_ATTR_EKU_D118_DEMAILE."
				, ".self::GEN_ATTR_EKU_D119_DDENSUC."
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
				$this->setEkuD101Drucem($fila[self::GEN_ATTR_MIN_EKU_D101_DRUCEM]);
				$this->setEkuD102Ddvemi($fila[self::GEN_ATTR_MIN_EKU_D102_DDVEMI]);
				$this->setEkuD103Itipcont($fila[self::GEN_ATTR_MIN_EKU_D103_ITIPCONT]);
				$this->setEkuD104Ctipreg($fila[self::GEN_ATTR_MIN_EKU_D104_CTIPREG]);
				$this->setEkuD105Dnomemi($fila[self::GEN_ATTR_MIN_EKU_D105_DNOMEMI]);
				$this->setEkuD106Dnomfanemi($fila[self::GEN_ATTR_MIN_EKU_D106_DNOMFANEMI]);
				$this->setEkuD107Ddiremi($fila[self::GEN_ATTR_MIN_EKU_D107_DDIREMI]);
				$this->setEkuD108Dnumcas($fila[self::GEN_ATTR_MIN_EKU_D108_DNUMCAS]);
				$this->setEkuD109Dcompdir1($fila[self::GEN_ATTR_MIN_EKU_D109_DCOMPDIR1]);
				$this->setEkuD110Dcompdir2($fila[self::GEN_ATTR_MIN_EKU_D110_DCOMPDIR2]);
				$this->setEkuD111Cdepemi($fila[self::GEN_ATTR_MIN_EKU_D111_CDEPEMI]);
				$this->setEkuD112Ddesdepemi($fila[self::GEN_ATTR_MIN_EKU_D112_DDESDEPEMI]);
				$this->setEkuD113Cdisemi($fila[self::GEN_ATTR_MIN_EKU_D113_CDISEMI]);
				$this->setEkuD114Ddesdisemi($fila[self::GEN_ATTR_MIN_EKU_D114_DDESDISEMI]);
				$this->setEkuD115Cciuemi($fila[self::GEN_ATTR_MIN_EKU_D115_CCIUEMI]);
				$this->setEkuD116Ddesciuemi($fila[self::GEN_ATTR_MIN_EKU_D116_DDESCIUEMI]);
				$this->setEkuD117Dtelemi($fila[self::GEN_ATTR_MIN_EKU_D117_DTELEMI]);
				$this->setEkuD118Demaile($fila[self::GEN_ATTR_MIN_EKU_D118_DEMAILE]);
				$this->setEkuD119Ddensuc($fila[self::GEN_ATTR_MIN_EKU_D119_DDENSUC]);
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
	public function setEkuD101Drucem($v){ $this->eku_d101_drucem = $v; }
	public function setEkuD102Ddvemi($v){ $this->eku_d102_ddvemi = $v; }
	public function setEkuD103Itipcont($v){ $this->eku_d103_itipcont = $v; }
	public function setEkuD104Ctipreg($v){ $this->eku_d104_ctipreg = $v; }
	public function setEkuD105Dnomemi($v){ $this->eku_d105_dnomemi = $v; }
	public function setEkuD106Dnomfanemi($v){ $this->eku_d106_dnomfanemi = $v; }
	public function setEkuD107Ddiremi($v){ $this->eku_d107_ddiremi = $v; }
	public function setEkuD108Dnumcas($v){ $this->eku_d108_dnumcas = $v; }
	public function setEkuD109Dcompdir1($v){ $this->eku_d109_dcompdir1 = $v; }
	public function setEkuD110Dcompdir2($v){ $this->eku_d110_dcompdir2 = $v; }
	public function setEkuD111Cdepemi($v){ $this->eku_d111_cdepemi = $v; }
	public function setEkuD112Ddesdepemi($v){ $this->eku_d112_ddesdepemi = $v; }
	public function setEkuD113Cdisemi($v){ $this->eku_d113_cdisemi = $v; }
	public function setEkuD114Ddesdisemi($v){ $this->eku_d114_ddesdisemi = $v; }
	public function setEkuD115Cciuemi($v){ $this->eku_d115_cciuemi = $v; }
	public function setEkuD116Ddesciuemi($v){ $this->eku_d116_ddesciuemi = $v; }
	public function setEkuD117Dtelemi($v){ $this->eku_d117_dtelemi = $v; }
	public function setEkuD118Demaile($v){ $this->eku_d118_demaile = $v; }
	public function setEkuD119Ddensuc($v){ $this->eku_d119_ddensuc = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new EkuDeD100GDatGralOpeGEmis();
            $o->setId($fila[EkuDeD100GDatGralOpeGEmis::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setEkuDeId($fila[self::GEN_ATTR_MIN_EKU_DE_ID]);
			$o->setEkuD101Drucem($fila[self::GEN_ATTR_MIN_EKU_D101_DRUCEM]);
			$o->setEkuD102Ddvemi($fila[self::GEN_ATTR_MIN_EKU_D102_DDVEMI]);
			$o->setEkuD103Itipcont($fila[self::GEN_ATTR_MIN_EKU_D103_ITIPCONT]);
			$o->setEkuD104Ctipreg($fila[self::GEN_ATTR_MIN_EKU_D104_CTIPREG]);
			$o->setEkuD105Dnomemi($fila[self::GEN_ATTR_MIN_EKU_D105_DNOMEMI]);
			$o->setEkuD106Dnomfanemi($fila[self::GEN_ATTR_MIN_EKU_D106_DNOMFANEMI]);
			$o->setEkuD107Ddiremi($fila[self::GEN_ATTR_MIN_EKU_D107_DDIREMI]);
			$o->setEkuD108Dnumcas($fila[self::GEN_ATTR_MIN_EKU_D108_DNUMCAS]);
			$o->setEkuD109Dcompdir1($fila[self::GEN_ATTR_MIN_EKU_D109_DCOMPDIR1]);
			$o->setEkuD110Dcompdir2($fila[self::GEN_ATTR_MIN_EKU_D110_DCOMPDIR2]);
			$o->setEkuD111Cdepemi($fila[self::GEN_ATTR_MIN_EKU_D111_CDEPEMI]);
			$o->setEkuD112Ddesdepemi($fila[self::GEN_ATTR_MIN_EKU_D112_DDESDEPEMI]);
			$o->setEkuD113Cdisemi($fila[self::GEN_ATTR_MIN_EKU_D113_CDISEMI]);
			$o->setEkuD114Ddesdisemi($fila[self::GEN_ATTR_MIN_EKU_D114_DDESDISEMI]);
			$o->setEkuD115Cciuemi($fila[self::GEN_ATTR_MIN_EKU_D115_CCIUEMI]);
			$o->setEkuD116Ddesciuemi($fila[self::GEN_ATTR_MIN_EKU_D116_DDESCIUEMI]);
			$o->setEkuD117Dtelemi($fila[self::GEN_ATTR_MIN_EKU_D117_DTELEMI]);
			$o->setEkuD118Demaile($fila[self::GEN_ATTR_MIN_EKU_D118_DEMAILE]);
			$o->setEkuD119Ddensuc($fila[self::GEN_ATTR_MIN_EKU_D119_DDENSUC]);
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

	/* Control de BEkuDeD100GDatGralOpeGEmis */ 	
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

	/* Cambia el estado de BEkuDeD100GDatGralOpeGEmis */ 	
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

	/* Save de BEkuDeD100GDatGralOpeGEmis */ 	
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
						, ".self::GEN_ATTR_MIN_EKU_D101_DRUCEM."
						, ".self::GEN_ATTR_MIN_EKU_D102_DDVEMI."
						, ".self::GEN_ATTR_MIN_EKU_D103_ITIPCONT."
						, ".self::GEN_ATTR_MIN_EKU_D104_CTIPREG."
						, ".self::GEN_ATTR_MIN_EKU_D105_DNOMEMI."
						, ".self::GEN_ATTR_MIN_EKU_D106_DNOMFANEMI."
						, ".self::GEN_ATTR_MIN_EKU_D107_DDIREMI."
						, ".self::GEN_ATTR_MIN_EKU_D108_DNUMCAS."
						, ".self::GEN_ATTR_MIN_EKU_D109_DCOMPDIR1."
						, ".self::GEN_ATTR_MIN_EKU_D110_DCOMPDIR2."
						, ".self::GEN_ATTR_MIN_EKU_D111_CDEPEMI."
						, ".self::GEN_ATTR_MIN_EKU_D112_DDESDEPEMI."
						, ".self::GEN_ATTR_MIN_EKU_D113_CDISEMI."
						, ".self::GEN_ATTR_MIN_EKU_D114_DDESDISEMI."
						, ".self::GEN_ATTR_MIN_EKU_D115_CCIUEMI."
						, ".self::GEN_ATTR_MIN_EKU_D116_DDESCIUEMI."
						, ".self::GEN_ATTR_MIN_EKU_D117_DTELEMI."
						, ".self::GEN_ATTR_MIN_EKU_D118_DEMAILE."
						, ".self::GEN_ATTR_MIN_EKU_D119_DDENSUC."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('eku_de_d100_g_dat_gral_ope_g_emis_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getEkuDeId()."
						, '".$this->getEkuD101Drucem()."'
						, '".$this->getEkuD102Ddvemi()."'
						, '".$this->getEkuD103Itipcont()."'
						, '".$this->getEkuD104Ctipreg()."'
						, '".$this->getEkuD105Dnomemi()."'
						, '".$this->getEkuD106Dnomfanemi()."'
						, '".$this->getEkuD107Ddiremi()."'
						, '".$this->getEkuD108Dnumcas()."'
						, '".$this->getEkuD109Dcompdir1()."'
						, '".$this->getEkuD110Dcompdir2()."'
						, '".$this->getEkuD111Cdepemi()."'
						, '".$this->getEkuD112Ddesdepemi()."'
						, '".$this->getEkuD113Cdisemi()."'
						, '".$this->getEkuD114Ddesdisemi()."'
						, '".$this->getEkuD115Cciuemi()."'
						, '".$this->getEkuD116Ddesciuemi()."'
						, '".$this->getEkuD117Dtelemi()."'
						, '".$this->getEkuD118Demaile()."'
						, '".$this->getEkuD119Ddensuc()."'
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('eku_de_d100_g_dat_gral_ope_g_emis_seq')";
            
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
                 
				 ".EkuDeD100GDatGralOpeGEmis::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_EKU_DE_ID." = ".$this->getEkuDeId()."
						, ".self::GEN_ATTR_MIN_EKU_D101_DRUCEM." = '".$this->getEkuD101Drucem()."'
						, ".self::GEN_ATTR_MIN_EKU_D102_DDVEMI." = '".$this->getEkuD102Ddvemi()."'
						, ".self::GEN_ATTR_MIN_EKU_D103_ITIPCONT." = '".$this->getEkuD103Itipcont()."'
						, ".self::GEN_ATTR_MIN_EKU_D104_CTIPREG." = '".$this->getEkuD104Ctipreg()."'
						, ".self::GEN_ATTR_MIN_EKU_D105_DNOMEMI." = '".$this->getEkuD105Dnomemi()."'
						, ".self::GEN_ATTR_MIN_EKU_D106_DNOMFANEMI." = '".$this->getEkuD106Dnomfanemi()."'
						, ".self::GEN_ATTR_MIN_EKU_D107_DDIREMI." = '".$this->getEkuD107Ddiremi()."'
						, ".self::GEN_ATTR_MIN_EKU_D108_DNUMCAS." = '".$this->getEkuD108Dnumcas()."'
						, ".self::GEN_ATTR_MIN_EKU_D109_DCOMPDIR1." = '".$this->getEkuD109Dcompdir1()."'
						, ".self::GEN_ATTR_MIN_EKU_D110_DCOMPDIR2." = '".$this->getEkuD110Dcompdir2()."'
						, ".self::GEN_ATTR_MIN_EKU_D111_CDEPEMI." = '".$this->getEkuD111Cdepemi()."'
						, ".self::GEN_ATTR_MIN_EKU_D112_DDESDEPEMI." = '".$this->getEkuD112Ddesdepemi()."'
						, ".self::GEN_ATTR_MIN_EKU_D113_CDISEMI." = '".$this->getEkuD113Cdisemi()."'
						, ".self::GEN_ATTR_MIN_EKU_D114_DDESDISEMI." = '".$this->getEkuD114Ddesdisemi()."'
						, ".self::GEN_ATTR_MIN_EKU_D115_CCIUEMI." = '".$this->getEkuD115Cciuemi()."'
						, ".self::GEN_ATTR_MIN_EKU_D116_DDESCIUEMI." = '".$this->getEkuD116Ddesciuemi()."'
						, ".self::GEN_ATTR_MIN_EKU_D117_DTELEMI." = '".$this->getEkuD117Dtelemi()."'
						, ".self::GEN_ATTR_MIN_EKU_D118_DEMAILE." = '".$this->getEkuD118Demaile()."'
						, ".self::GEN_ATTR_MIN_EKU_D119_DDENSUC." = '".$this->getEkuD119Ddensuc()."'
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
						, ".self::GEN_ATTR_MIN_EKU_D101_DRUCEM."
						, ".self::GEN_ATTR_MIN_EKU_D102_DDVEMI."
						, ".self::GEN_ATTR_MIN_EKU_D103_ITIPCONT."
						, ".self::GEN_ATTR_MIN_EKU_D104_CTIPREG."
						, ".self::GEN_ATTR_MIN_EKU_D105_DNOMEMI."
						, ".self::GEN_ATTR_MIN_EKU_D106_DNOMFANEMI."
						, ".self::GEN_ATTR_MIN_EKU_D107_DDIREMI."
						, ".self::GEN_ATTR_MIN_EKU_D108_DNUMCAS."
						, ".self::GEN_ATTR_MIN_EKU_D109_DCOMPDIR1."
						, ".self::GEN_ATTR_MIN_EKU_D110_DCOMPDIR2."
						, ".self::GEN_ATTR_MIN_EKU_D111_CDEPEMI."
						, ".self::GEN_ATTR_MIN_EKU_D112_DDESDEPEMI."
						, ".self::GEN_ATTR_MIN_EKU_D113_CDISEMI."
						, ".self::GEN_ATTR_MIN_EKU_D114_DDESDISEMI."
						, ".self::GEN_ATTR_MIN_EKU_D115_CCIUEMI."
						, ".self::GEN_ATTR_MIN_EKU_D116_DDESCIUEMI."
						, ".self::GEN_ATTR_MIN_EKU_D117_DTELEMI."
						, ".self::GEN_ATTR_MIN_EKU_D118_DEMAILE."
						, ".self::GEN_ATTR_MIN_EKU_D119_DDENSUC."
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
						, '".$this->getEkuD101Drucem()."'
						, '".$this->getEkuD102Ddvemi()."'
						, '".$this->getEkuD103Itipcont()."'
						, '".$this->getEkuD104Ctipreg()."'
						, '".$this->getEkuD105Dnomemi()."'
						, '".$this->getEkuD106Dnomfanemi()."'
						, '".$this->getEkuD107Ddiremi()."'
						, '".$this->getEkuD108Dnumcas()."'
						, '".$this->getEkuD109Dcompdir1()."'
						, '".$this->getEkuD110Dcompdir2()."'
						, '".$this->getEkuD111Cdepemi()."'
						, '".$this->getEkuD112Ddesdepemi()."'
						, '".$this->getEkuD113Cdisemi()."'
						, '".$this->getEkuD114Ddesdisemi()."'
						, '".$this->getEkuD115Cciuemi()."'
						, '".$this->getEkuD116Ddesciuemi()."'
						, '".$this->getEkuD117Dtelemi()."'
						, '".$this->getEkuD118Demaile()."'
						, '".$this->getEkuD119Ddensuc()."'
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
                     
				 ".EkuDeD100GDatGralOpeGEmis::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_EKU_DE_ID." = ".$this->getEkuDeId()."
						, ".self::GEN_ATTR_MIN_EKU_D101_DRUCEM." = '".$this->getEkuD101Drucem()."'
						, ".self::GEN_ATTR_MIN_EKU_D102_DDVEMI." = '".$this->getEkuD102Ddvemi()."'
						, ".self::GEN_ATTR_MIN_EKU_D103_ITIPCONT." = '".$this->getEkuD103Itipcont()."'
						, ".self::GEN_ATTR_MIN_EKU_D104_CTIPREG." = '".$this->getEkuD104Ctipreg()."'
						, ".self::GEN_ATTR_MIN_EKU_D105_DNOMEMI." = '".$this->getEkuD105Dnomemi()."'
						, ".self::GEN_ATTR_MIN_EKU_D106_DNOMFANEMI." = '".$this->getEkuD106Dnomfanemi()."'
						, ".self::GEN_ATTR_MIN_EKU_D107_DDIREMI." = '".$this->getEkuD107Ddiremi()."'
						, ".self::GEN_ATTR_MIN_EKU_D108_DNUMCAS." = '".$this->getEkuD108Dnumcas()."'
						, ".self::GEN_ATTR_MIN_EKU_D109_DCOMPDIR1." = '".$this->getEkuD109Dcompdir1()."'
						, ".self::GEN_ATTR_MIN_EKU_D110_DCOMPDIR2." = '".$this->getEkuD110Dcompdir2()."'
						, ".self::GEN_ATTR_MIN_EKU_D111_CDEPEMI." = '".$this->getEkuD111Cdepemi()."'
						, ".self::GEN_ATTR_MIN_EKU_D112_DDESDEPEMI." = '".$this->getEkuD112Ddesdepemi()."'
						, ".self::GEN_ATTR_MIN_EKU_D113_CDISEMI." = '".$this->getEkuD113Cdisemi()."'
						, ".self::GEN_ATTR_MIN_EKU_D114_DDESDISEMI." = '".$this->getEkuD114Ddesdisemi()."'
						, ".self::GEN_ATTR_MIN_EKU_D115_CCIUEMI." = '".$this->getEkuD115Cciuemi()."'
						, ".self::GEN_ATTR_MIN_EKU_D116_DDESCIUEMI." = '".$this->getEkuD116Ddesciuemi()."'
						, ".self::GEN_ATTR_MIN_EKU_D117_DTELEMI." = '".$this->getEkuD117Dtelemi()."'
						, ".self::GEN_ATTR_MIN_EKU_D118_DEMAILE." = '".$this->getEkuD118Demaile()."'
						, ".self::GEN_ATTR_MIN_EKU_D119_DDENSUC." = '".$this->getEkuD119Ddensuc()."'
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
            $o = new EkuDeD100GDatGralOpeGEmis();
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

	/* Delete de BEkuDeD100GDatGralOpeGEmis */ 	
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
	
	public function duplicarEkuDeD100GDatGralOpeGEmis(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getEkuDeD100GDatGralOpeGEmiss($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = EkuDeD100GDatGralOpeGEmis::setAplicarFiltrosDeAlcance($criterio);

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
	
		$ekuded100gdatgralopegemiss = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $ekuded100gdatgralopegemis = new EkuDeD100GDatGralOpeGEmis();
                    $ekuded100gdatgralopegemis->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $ekuded100gdatgralopegemis->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$ekuded100gdatgralopegemis->setEkuDeId($fila[self::GEN_ATTR_MIN_EKU_DE_ID]);
			$ekuded100gdatgralopegemis->setEkuD101Drucem($fila[self::GEN_ATTR_MIN_EKU_D101_DRUCEM]);
			$ekuded100gdatgralopegemis->setEkuD102Ddvemi($fila[self::GEN_ATTR_MIN_EKU_D102_DDVEMI]);
			$ekuded100gdatgralopegemis->setEkuD103Itipcont($fila[self::GEN_ATTR_MIN_EKU_D103_ITIPCONT]);
			$ekuded100gdatgralopegemis->setEkuD104Ctipreg($fila[self::GEN_ATTR_MIN_EKU_D104_CTIPREG]);
			$ekuded100gdatgralopegemis->setEkuD105Dnomemi($fila[self::GEN_ATTR_MIN_EKU_D105_DNOMEMI]);
			$ekuded100gdatgralopegemis->setEkuD106Dnomfanemi($fila[self::GEN_ATTR_MIN_EKU_D106_DNOMFANEMI]);
			$ekuded100gdatgralopegemis->setEkuD107Ddiremi($fila[self::GEN_ATTR_MIN_EKU_D107_DDIREMI]);
			$ekuded100gdatgralopegemis->setEkuD108Dnumcas($fila[self::GEN_ATTR_MIN_EKU_D108_DNUMCAS]);
			$ekuded100gdatgralopegemis->setEkuD109Dcompdir1($fila[self::GEN_ATTR_MIN_EKU_D109_DCOMPDIR1]);
			$ekuded100gdatgralopegemis->setEkuD110Dcompdir2($fila[self::GEN_ATTR_MIN_EKU_D110_DCOMPDIR2]);
			$ekuded100gdatgralopegemis->setEkuD111Cdepemi($fila[self::GEN_ATTR_MIN_EKU_D111_CDEPEMI]);
			$ekuded100gdatgralopegemis->setEkuD112Ddesdepemi($fila[self::GEN_ATTR_MIN_EKU_D112_DDESDEPEMI]);
			$ekuded100gdatgralopegemis->setEkuD113Cdisemi($fila[self::GEN_ATTR_MIN_EKU_D113_CDISEMI]);
			$ekuded100gdatgralopegemis->setEkuD114Ddesdisemi($fila[self::GEN_ATTR_MIN_EKU_D114_DDESDISEMI]);
			$ekuded100gdatgralopegemis->setEkuD115Cciuemi($fila[self::GEN_ATTR_MIN_EKU_D115_CCIUEMI]);
			$ekuded100gdatgralopegemis->setEkuD116Ddesciuemi($fila[self::GEN_ATTR_MIN_EKU_D116_DDESCIUEMI]);
			$ekuded100gdatgralopegemis->setEkuD117Dtelemi($fila[self::GEN_ATTR_MIN_EKU_D117_DTELEMI]);
			$ekuded100gdatgralopegemis->setEkuD118Demaile($fila[self::GEN_ATTR_MIN_EKU_D118_DEMAILE]);
			$ekuded100gdatgralopegemis->setEkuD119Ddensuc($fila[self::GEN_ATTR_MIN_EKU_D119_DDENSUC]);
			$ekuded100gdatgralopegemis->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$ekuded100gdatgralopegemis->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$ekuded100gdatgralopegemis->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$ekuded100gdatgralopegemis->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$ekuded100gdatgralopegemis->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$ekuded100gdatgralopegemis->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$ekuded100gdatgralopegemis->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$ekuded100gdatgralopegemis->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $ekuded100gdatgralopegemiss[] = $ekuded100gdatgralopegemis;
		}
		
		return $ekuded100gdatgralopegemiss;
	}	
	

	/* Método getEkuDeD100GDatGralOpeGEmiss Habilitados */ 	
	static function getEkuDeD100GDatGralOpeGEmissHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return EkuDeD100GDatGralOpeGEmis::getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getEkuDeD100GDatGralOpeGEmiss para listado de Backend */ 	
	static function getEkuDeD100GDatGralOpeGEmissDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return EkuDeD100GDatGralOpeGEmis::getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getEkuDeD100GDatGralOpeGEmissCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = EkuDeD100GDatGralOpeGEmis::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = EkuDeD100GDatGralOpeGEmis::getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getEkuDeD100GDatGralOpeGEmiss filtrado para select */ 	
	static function getEkuDeD100GDatGralOpeGEmissCmbF($paginador = null, $criterio = null){
            $col = EkuDeD100GDatGralOpeGEmis::getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getEkuDeD100GDatGralOpeGEmiss filtrado por una coleccion de objetos foraneos de EkuDe */ 	
	static function getEkuDeD100GDatGralOpeGEmissXEkuDes($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(EkuDeD100GDatGralOpeGEmis::GEN_ATTR_EKU_DE_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(EkuDeD100GDatGralOpeGEmis::GEN_TABLA);
            $c->addOrden(EkuDeD100GDatGralOpeGEmis::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = EkuDeD100GDatGralOpeGEmis::getEkuDeD100GDatGralOpeGEmiss($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getEkuDeId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'eku_de_d100_g_dat_gral_ope_g_emis_adm.php';
            $url_gestion = 'eku_de_d100_g_dat_gral_ope_g_emis_gestion.php';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM eku_de_d100_g_dat_gral_ope_g_emis'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'eku_de_d100_g_dat_gral_ope_g_emis';");
            
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

            $obs = self::getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio);
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

            $obs = self::getEkuDeD100GDatGralOpeGEmiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio);
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

            $obs = self::getEkuDeD100GDatGralOpeGEmiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_de_id' */ 	
	static function getOxEkuDeId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_DE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio);
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

            $obs = self::getEkuDeD100GDatGralOpeGEmiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d101_drucem' */ 	
	static function getOxEkuD101Drucem($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D101_DRUCEM, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d101_drucem' */ 	
	static function getOsxEkuD101Drucem($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D101_DRUCEM, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD100GDatGralOpeGEmiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d102_ddvemi' */ 	
	static function getOxEkuD102Ddvemi($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D102_DDVEMI, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d102_ddvemi' */ 	
	static function getOsxEkuD102Ddvemi($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D102_DDVEMI, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD100GDatGralOpeGEmiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d103_itipcont' */ 	
	static function getOxEkuD103Itipcont($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D103_ITIPCONT, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d103_itipcont' */ 	
	static function getOsxEkuD103Itipcont($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D103_ITIPCONT, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD100GDatGralOpeGEmiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d104_ctipreg' */ 	
	static function getOxEkuD104Ctipreg($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D104_CTIPREG, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d104_ctipreg' */ 	
	static function getOsxEkuD104Ctipreg($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D104_CTIPREG, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD100GDatGralOpeGEmiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d105_dnomemi' */ 	
	static function getOxEkuD105Dnomemi($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D105_DNOMEMI, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d105_dnomemi' */ 	
	static function getOsxEkuD105Dnomemi($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D105_DNOMEMI, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD100GDatGralOpeGEmiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d106_dnomfanemi' */ 	
	static function getOxEkuD106Dnomfanemi($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D106_DNOMFANEMI, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d106_dnomfanemi' */ 	
	static function getOsxEkuD106Dnomfanemi($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D106_DNOMFANEMI, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD100GDatGralOpeGEmiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d107_ddiremi' */ 	
	static function getOxEkuD107Ddiremi($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D107_DDIREMI, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d107_ddiremi' */ 	
	static function getOsxEkuD107Ddiremi($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D107_DDIREMI, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD100GDatGralOpeGEmiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d108_dnumcas' */ 	
	static function getOxEkuD108Dnumcas($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D108_DNUMCAS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d108_dnumcas' */ 	
	static function getOsxEkuD108Dnumcas($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D108_DNUMCAS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD100GDatGralOpeGEmiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d109_dcompdir1' */ 	
	static function getOxEkuD109Dcompdir1($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D109_DCOMPDIR1, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d109_dcompdir1' */ 	
	static function getOsxEkuD109Dcompdir1($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D109_DCOMPDIR1, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD100GDatGralOpeGEmiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d110_dcompdir2' */ 	
	static function getOxEkuD110Dcompdir2($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D110_DCOMPDIR2, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d110_dcompdir2' */ 	
	static function getOsxEkuD110Dcompdir2($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D110_DCOMPDIR2, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD100GDatGralOpeGEmiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d111_cdepemi' */ 	
	static function getOxEkuD111Cdepemi($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D111_CDEPEMI, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d111_cdepemi' */ 	
	static function getOsxEkuD111Cdepemi($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D111_CDEPEMI, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD100GDatGralOpeGEmiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d112_ddesdepemi' */ 	
	static function getOxEkuD112Ddesdepemi($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D112_DDESDEPEMI, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d112_ddesdepemi' */ 	
	static function getOsxEkuD112Ddesdepemi($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D112_DDESDEPEMI, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD100GDatGralOpeGEmiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d113_cdisemi' */ 	
	static function getOxEkuD113Cdisemi($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D113_CDISEMI, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d113_cdisemi' */ 	
	static function getOsxEkuD113Cdisemi($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D113_CDISEMI, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD100GDatGralOpeGEmiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d114_ddesdisemi' */ 	
	static function getOxEkuD114Ddesdisemi($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D114_DDESDISEMI, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d114_ddesdisemi' */ 	
	static function getOsxEkuD114Ddesdisemi($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D114_DDESDISEMI, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD100GDatGralOpeGEmiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d115_cciuemi' */ 	
	static function getOxEkuD115Cciuemi($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D115_CCIUEMI, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d115_cciuemi' */ 	
	static function getOsxEkuD115Cciuemi($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D115_CCIUEMI, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD100GDatGralOpeGEmiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d116_ddesciuemi' */ 	
	static function getOxEkuD116Ddesciuemi($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D116_DDESCIUEMI, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d116_ddesciuemi' */ 	
	static function getOsxEkuD116Ddesciuemi($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D116_DDESCIUEMI, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD100GDatGralOpeGEmiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d117_dtelemi' */ 	
	static function getOxEkuD117Dtelemi($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D117_DTELEMI, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d117_dtelemi' */ 	
	static function getOsxEkuD117Dtelemi($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D117_DTELEMI, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD100GDatGralOpeGEmiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d118_demaile' */ 	
	static function getOxEkuD118Demaile($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D118_DEMAILE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d118_demaile' */ 	
	static function getOsxEkuD118Demaile($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D118_DEMAILE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD100GDatGralOpeGEmiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_d119_ddensuc' */ 	
	static function getOxEkuD119Ddensuc($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D119_DDENSUC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_d119_ddensuc' */ 	
	static function getOsxEkuD119Ddensuc($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_D119_DDENSUC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeD100GDatGralOpeGEmiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio);
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

            $obs = self::getEkuDeD100GDatGralOpeGEmiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio);
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

            $obs = self::getEkuDeD100GDatGralOpeGEmiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio);
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

            $obs = self::getEkuDeD100GDatGralOpeGEmiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio);
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

            $obs = self::getEkuDeD100GDatGralOpeGEmiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio);
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

            $obs = self::getEkuDeD100GDatGralOpeGEmiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio);
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

            $obs = self::getEkuDeD100GDatGralOpeGEmiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio);
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

            $obs = self::getEkuDeD100GDatGralOpeGEmiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio);
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

            $obs = self::getEkuDeD100GDatGralOpeGEmiss(null, $criterio);
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

            $obs = self::getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio);
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

            $obs = self::getEkuDeD100GDatGralOpeGEmiss($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'eku_de_d100_g_dat_gral_ope_g_emis_adm');
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
                $c->addTabla(EkuDeD100GDatGralOpeGEmis::GEN_TABLA);
                $c->addOrden(EkuDeD100GDatGralOpeGEmis::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $eku_de_d100_g_dat_gral_ope_g_emiss = EkuDeD100GDatGralOpeGEmis::getEkuDeD100GDatGralOpeGEmiss(null, $c);

                $arr = array();
                foreach($eku_de_d100_g_dat_gral_ope_g_emiss as $eku_de_d100_g_dat_gral_ope_g_emis){
                    $descripcion = $eku_de_d100_g_dat_gral_ope_g_emis->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>