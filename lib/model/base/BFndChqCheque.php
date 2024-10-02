<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BFndChqCheque
{ 
	
	const SES_PAGINACION = 'adm_fndchqcheque_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_fndchqcheque_paginas_registros';
	const SES_CRITERIOS = 'adm_fndchqcheque_criterios';
	
	const GEN_CLASE = 'FndChqCheque';
	const GEN_TABLA = 'fnd_chq_cheque';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BFndChqCheque */ 
	const GEN_ATTR_ID = 'fnd_chq_cheque.id';
	const GEN_ATTR_DESCRIPCION = 'fnd_chq_cheque.descripcion';
	const GEN_ATTR_FND_CHQ_CHEQUERA_ID = 'fnd_chq_cheque.fnd_chq_chequera_id';
	const GEN_ATTR_GRAL_BANCO_ID = 'fnd_chq_cheque.gral_banco_id';
	const GEN_ATTR_CODIGO_SUCURSAL = 'fnd_chq_cheque.codigo_sucursal';
	const GEN_ATTR_NUMERO = 'fnd_chq_cheque.numero';
	const GEN_ATTR_FECHA_EMISION = 'fnd_chq_cheque.fecha_emision';
	const GEN_ATTR_FECHA_COBRO = 'fnd_chq_cheque.fecha_cobro';
	const GEN_ATTR_FECHA_ACREDITACION = 'fnd_chq_cheque.fecha_acreditacion';
	const GEN_ATTR_FECHA_VENCIMIENTO = 'fnd_chq_cheque.fecha_vencimiento';
	const GEN_ATTR_FIRMANTE = 'fnd_chq_cheque.firmante';
	const GEN_ATTR_ENTREGADOR = 'fnd_chq_cheque.entregador';
	const GEN_ATTR_FND_CHQ_TIPO_EMISOR_ID = 'fnd_chq_cheque.fnd_chq_tipo_emisor_id';
	const GEN_ATTR_FND_CHQ_TIPO_EMISION_ID = 'fnd_chq_cheque.fnd_chq_tipo_emision_id';
	const GEN_ATTR_FND_CHQ_TIPO_PAGO_ID = 'fnd_chq_cheque.fnd_chq_tipo_pago_id';
	const GEN_ATTR_FND_CHQ_TIPO_ESTADO_ID = 'fnd_chq_cheque.fnd_chq_tipo_estado_id';
	const GEN_ATTR_IMPORTE = 'fnd_chq_cheque.importe';
	const GEN_ATTR_CRUZADO = 'fnd_chq_cheque.cruzado';
	const GEN_ATTR_VTA_RECIBO_ID = 'fnd_chq_cheque.vta_recibo_id';
	const GEN_ATTR_VTA_RECIBO_ITEM_ID = 'fnd_chq_cheque.vta_recibo_item_id';
	const GEN_ATTR_VTA_COMISION_ID = 'fnd_chq_cheque.vta_comision_id';
	const GEN_ATTR_VTA_COMISION_GRAL_FP_FORMA_PAGO_ID = 'fnd_chq_cheque.vta_comision_gral_fp_forma_pago_id';
	const GEN_ATTR_PDE_ORDEN_PAGO_ID = 'fnd_chq_cheque.pde_orden_pago_id';
	const GEN_ATTR_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_ID = 'fnd_chq_cheque.pde_orden_pago_gral_fp_forma_pago_id';
	const GEN_ATTR_PDE_RECIBO_ID = 'fnd_chq_cheque.pde_recibo_id';
	const GEN_ATTR_PDE_RECIBO_ITEM_ID = 'fnd_chq_cheque.pde_recibo_item_id';
	const GEN_ATTR_VTA_AJUSTE_DEBE_ID = 'fnd_chq_cheque.vta_ajuste_debe_id';
	const GEN_ATTR_VTA_AJUSTE_DEBE_ITEM_ID = 'fnd_chq_cheque.vta_ajuste_debe_item_id';
	const GEN_ATTR_VTA_AJUSTE_HABER_ID = 'fnd_chq_cheque.vta_ajuste_haber_id';
	const GEN_ATTR_VTA_AJUSTE_HABER_ITEM_ID = 'fnd_chq_cheque.vta_ajuste_haber_item_id';
	const GEN_ATTR_FND_CAJA_MOVIMIENTO_ID = 'fnd_chq_cheque.fnd_caja_movimiento_id';
	const GEN_ATTR_FND_CAJA_MOVIMIENTO_ITEM_ID = 'fnd_chq_cheque.fnd_caja_movimiento_item_id';
	const GEN_ATTR_FND_CAJA_ID = 'fnd_chq_cheque.fnd_caja_id';
	const GEN_ATTR_GRAL_CAJA_ID = 'fnd_chq_cheque.gral_caja_id';
	const GEN_ATTR_FND_CAJA_INGRESO_ID = 'fnd_chq_cheque.fnd_caja_ingreso_id';
	const GEN_ATTR_FND_CAJA_EGRESO_ID = 'fnd_chq_cheque.fnd_caja_egreso_id';
	const GEN_ATTR_CODIGO = 'fnd_chq_cheque.codigo';
	const GEN_ATTR_OBSERVACION = 'fnd_chq_cheque.observacion';
	const GEN_ATTR_ORDEN = 'fnd_chq_cheque.orden';
	const GEN_ATTR_ESTADO = 'fnd_chq_cheque.estado';
	const GEN_ATTR_CREADO = 'fnd_chq_cheque.creado';
	const GEN_ATTR_CREADO_POR = 'fnd_chq_cheque.creado_por';
	const GEN_ATTR_MODIFICADO = 'fnd_chq_cheque.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'fnd_chq_cheque.modificado_por';

	/* Constantes de Atributos Min de BFndChqCheque */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_FND_CHQ_CHEQUERA_ID = 'fnd_chq_chequera_id';
	const GEN_ATTR_MIN_GRAL_BANCO_ID = 'gral_banco_id';
	const GEN_ATTR_MIN_CODIGO_SUCURSAL = 'codigo_sucursal';
	const GEN_ATTR_MIN_NUMERO = 'numero';
	const GEN_ATTR_MIN_FECHA_EMISION = 'fecha_emision';
	const GEN_ATTR_MIN_FECHA_COBRO = 'fecha_cobro';
	const GEN_ATTR_MIN_FECHA_ACREDITACION = 'fecha_acreditacion';
	const GEN_ATTR_MIN_FECHA_VENCIMIENTO = 'fecha_vencimiento';
	const GEN_ATTR_MIN_FIRMANTE = 'firmante';
	const GEN_ATTR_MIN_ENTREGADOR = 'entregador';
	const GEN_ATTR_MIN_FND_CHQ_TIPO_EMISOR_ID = 'fnd_chq_tipo_emisor_id';
	const GEN_ATTR_MIN_FND_CHQ_TIPO_EMISION_ID = 'fnd_chq_tipo_emision_id';
	const GEN_ATTR_MIN_FND_CHQ_TIPO_PAGO_ID = 'fnd_chq_tipo_pago_id';
	const GEN_ATTR_MIN_FND_CHQ_TIPO_ESTADO_ID = 'fnd_chq_tipo_estado_id';
	const GEN_ATTR_MIN_IMPORTE = 'importe';
	const GEN_ATTR_MIN_CRUZADO = 'cruzado';
	const GEN_ATTR_MIN_VTA_RECIBO_ID = 'vta_recibo_id';
	const GEN_ATTR_MIN_VTA_RECIBO_ITEM_ID = 'vta_recibo_item_id';
	const GEN_ATTR_MIN_VTA_COMISION_ID = 'vta_comision_id';
	const GEN_ATTR_MIN_VTA_COMISION_GRAL_FP_FORMA_PAGO_ID = 'vta_comision_gral_fp_forma_pago_id';
	const GEN_ATTR_MIN_PDE_ORDEN_PAGO_ID = 'pde_orden_pago_id';
	const GEN_ATTR_MIN_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_ID = 'pde_orden_pago_gral_fp_forma_pago_id';
	const GEN_ATTR_MIN_PDE_RECIBO_ID = 'pde_recibo_id';
	const GEN_ATTR_MIN_PDE_RECIBO_ITEM_ID = 'pde_recibo_item_id';
	const GEN_ATTR_MIN_VTA_AJUSTE_DEBE_ID = 'vta_ajuste_debe_id';
	const GEN_ATTR_MIN_VTA_AJUSTE_DEBE_ITEM_ID = 'vta_ajuste_debe_item_id';
	const GEN_ATTR_MIN_VTA_AJUSTE_HABER_ID = 'vta_ajuste_haber_id';
	const GEN_ATTR_MIN_VTA_AJUSTE_HABER_ITEM_ID = 'vta_ajuste_haber_item_id';
	const GEN_ATTR_MIN_FND_CAJA_MOVIMIENTO_ID = 'fnd_caja_movimiento_id';
	const GEN_ATTR_MIN_FND_CAJA_MOVIMIENTO_ITEM_ID = 'fnd_caja_movimiento_item_id';
	const GEN_ATTR_MIN_FND_CAJA_ID = 'fnd_caja_id';
	const GEN_ATTR_MIN_GRAL_CAJA_ID = 'gral_caja_id';
	const GEN_ATTR_MIN_FND_CAJA_INGRESO_ID = 'fnd_caja_ingreso_id';
	const GEN_ATTR_MIN_FND_CAJA_EGRESO_ID = 'fnd_caja_egreso_id';
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
	

	/* Atributos de BFndChqCheque */ 
	private $id;
	private $descripcion;
	private $fnd_chq_chequera_id;
	private $gral_banco_id;
	private $codigo_sucursal;
	private $numero;
	private $fecha_emision;
	private $fecha_cobro;
	private $fecha_acreditacion;
	private $fecha_vencimiento;
	private $firmante;
	private $entregador;
	private $fnd_chq_tipo_emisor_id;
	private $fnd_chq_tipo_emision_id;
	private $fnd_chq_tipo_pago_id;
	private $fnd_chq_tipo_estado_id;
	private $importe;
	private $cruzado;
	private $vta_recibo_id;
	private $vta_recibo_item_id;
	private $vta_comision_id;
	private $vta_comision_gral_fp_forma_pago_id;
	private $pde_orden_pago_id;
	private $pde_orden_pago_gral_fp_forma_pago_id;
	private $pde_recibo_id;
	private $pde_recibo_item_id;
	private $vta_ajuste_debe_id;
	private $vta_ajuste_debe_item_id;
	private $vta_ajuste_haber_id;
	private $vta_ajuste_haber_item_id;
	private $fnd_caja_movimiento_id;
	private $fnd_caja_movimiento_item_id;
	private $fnd_caja_id;
	private $gral_caja_id;
	private $fnd_caja_ingreso_id;
	private $fnd_caja_egreso_id;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BFndChqCheque */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getFndChqChequeraId(){ if(isset($this->fnd_chq_chequera_id)){ return $this->fnd_chq_chequera_id; }else{ return 'null'; } }
	public function getGralBancoId(){ if(isset($this->gral_banco_id)){ return $this->gral_banco_id; }else{ return 'null'; } }
	public function getCodigoSucursal(){ if(isset($this->codigo_sucursal)){ return $this->codigo_sucursal; }else{ return ''; } }
	public function getNumero(){ if(isset($this->numero)){ return $this->numero; }else{ return ''; } }
	public function getFechaEmision(){ if(isset($this->fecha_emision)){ return $this->fecha_emision; }else{ return ''; } }
	public function getFechaCobro(){ if(isset($this->fecha_cobro)){ return $this->fecha_cobro; }else{ return ''; } }
	public function getFechaAcreditacion(){ if(isset($this->fecha_acreditacion)){ return $this->fecha_acreditacion; }else{ return ''; } }
	public function getFechaVencimiento(){ if(isset($this->fecha_vencimiento)){ return $this->fecha_vencimiento; }else{ return ''; } }
	public function getFirmante(){ if(isset($this->firmante)){ return $this->firmante; }else{ return ''; } }
	public function getEntregador(){ if(isset($this->entregador)){ return $this->entregador; }else{ return ''; } }
	public function getFndChqTipoEmisorId(){ if(isset($this->fnd_chq_tipo_emisor_id)){ return $this->fnd_chq_tipo_emisor_id; }else{ return 'null'; } }
	public function getFndChqTipoEmisionId(){ if(isset($this->fnd_chq_tipo_emision_id)){ return $this->fnd_chq_tipo_emision_id; }else{ return 'null'; } }
	public function getFndChqTipoPagoId(){ if(isset($this->fnd_chq_tipo_pago_id)){ return $this->fnd_chq_tipo_pago_id; }else{ return 'null'; } }
	public function getFndChqTipoEstadoId(){ if(isset($this->fnd_chq_tipo_estado_id)){ return $this->fnd_chq_tipo_estado_id; }else{ return 'null'; } }
	public function getImporte(){ if(isset($this->importe)){ return $this->importe; }else{ return 0; } }
	public function getCruzado(){ if(isset($this->cruzado)){ return $this->cruzado; }else{ return 0; } }
	public function getVtaReciboId(){ if(isset($this->vta_recibo_id)){ return $this->vta_recibo_id; }else{ return 'null'; } }
	public function getVtaReciboItemId(){ if(isset($this->vta_recibo_item_id)){ return $this->vta_recibo_item_id; }else{ return 'null'; } }
	public function getVtaComisionId(){ if(isset($this->vta_comision_id)){ return $this->vta_comision_id; }else{ return 'null'; } }
	public function getVtaComisionGralFpFormaPagoId(){ if(isset($this->vta_comision_gral_fp_forma_pago_id)){ return $this->vta_comision_gral_fp_forma_pago_id; }else{ return 'null'; } }
	public function getPdeOrdenPagoId(){ if(isset($this->pde_orden_pago_id)){ return $this->pde_orden_pago_id; }else{ return 'null'; } }
	public function getPdeOrdenPagoGralFpFormaPagoId(){ if(isset($this->pde_orden_pago_gral_fp_forma_pago_id)){ return $this->pde_orden_pago_gral_fp_forma_pago_id; }else{ return 'null'; } }
	public function getPdeReciboId(){ if(isset($this->pde_recibo_id)){ return $this->pde_recibo_id; }else{ return 'null'; } }
	public function getPdeReciboItemId(){ if(isset($this->pde_recibo_item_id)){ return $this->pde_recibo_item_id; }else{ return 'null'; } }
	public function getVtaAjusteDebeId(){ if(isset($this->vta_ajuste_debe_id)){ return $this->vta_ajuste_debe_id; }else{ return 'null'; } }
	public function getVtaAjusteDebeItemId(){ if(isset($this->vta_ajuste_debe_item_id)){ return $this->vta_ajuste_debe_item_id; }else{ return 'null'; } }
	public function getVtaAjusteHaberId(){ if(isset($this->vta_ajuste_haber_id)){ return $this->vta_ajuste_haber_id; }else{ return 'null'; } }
	public function getVtaAjusteHaberItemId(){ if(isset($this->vta_ajuste_haber_item_id)){ return $this->vta_ajuste_haber_item_id; }else{ return 'null'; } }
	public function getFndCajaMovimientoId(){ if(isset($this->fnd_caja_movimiento_id)){ return $this->fnd_caja_movimiento_id; }else{ return 'null'; } }
	public function getFndCajaMovimientoItemId(){ if(isset($this->fnd_caja_movimiento_item_id)){ return $this->fnd_caja_movimiento_item_id; }else{ return 'null'; } }
	public function getFndCajaId(){ if(isset($this->fnd_caja_id)){ return $this->fnd_caja_id; }else{ return 'null'; } }
	public function getGralCajaId(){ if(isset($this->gral_caja_id)){ return $this->gral_caja_id; }else{ return 'null'; } }
	public function getFndCajaIngresoId(){ if(isset($this->fnd_caja_ingreso_id)){ return $this->fnd_caja_ingreso_id; }else{ return 'null'; } }
	public function getFndCajaEgresoId(){ if(isset($this->fnd_caja_egreso_id)){ return $this->fnd_caja_egreso_id; }else{ return 'null'; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BFndChqCheque */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_FND_CHQ_CHEQUERA_ID."
				, ".self::GEN_ATTR_GRAL_BANCO_ID."
				, ".self::GEN_ATTR_CODIGO_SUCURSAL."
				, ".self::GEN_ATTR_NUMERO."
				, ".self::GEN_ATTR_FECHA_EMISION."
				, ".self::GEN_ATTR_FECHA_COBRO."
				, ".self::GEN_ATTR_FECHA_ACREDITACION."
				, ".self::GEN_ATTR_FECHA_VENCIMIENTO."
				, ".self::GEN_ATTR_FIRMANTE."
				, ".self::GEN_ATTR_ENTREGADOR."
				, ".self::GEN_ATTR_FND_CHQ_TIPO_EMISOR_ID."
				, ".self::GEN_ATTR_FND_CHQ_TIPO_EMISION_ID."
				, ".self::GEN_ATTR_FND_CHQ_TIPO_PAGO_ID."
				, ".self::GEN_ATTR_FND_CHQ_TIPO_ESTADO_ID."
				, ".self::GEN_ATTR_IMPORTE."
				, ".self::GEN_ATTR_CRUZADO."
				, ".self::GEN_ATTR_VTA_RECIBO_ID."
				, ".self::GEN_ATTR_VTA_RECIBO_ITEM_ID."
				, ".self::GEN_ATTR_VTA_COMISION_ID."
				, ".self::GEN_ATTR_VTA_COMISION_GRAL_FP_FORMA_PAGO_ID."
				, ".self::GEN_ATTR_PDE_ORDEN_PAGO_ID."
				, ".self::GEN_ATTR_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_ID."
				, ".self::GEN_ATTR_PDE_RECIBO_ID."
				, ".self::GEN_ATTR_PDE_RECIBO_ITEM_ID."
				, ".self::GEN_ATTR_VTA_AJUSTE_DEBE_ID."
				, ".self::GEN_ATTR_VTA_AJUSTE_DEBE_ITEM_ID."
				, ".self::GEN_ATTR_VTA_AJUSTE_HABER_ID."
				, ".self::GEN_ATTR_VTA_AJUSTE_HABER_ITEM_ID."
				, ".self::GEN_ATTR_FND_CAJA_MOVIMIENTO_ID."
				, ".self::GEN_ATTR_FND_CAJA_MOVIMIENTO_ITEM_ID."
				, ".self::GEN_ATTR_FND_CAJA_ID."
				, ".self::GEN_ATTR_GRAL_CAJA_ID."
				, ".self::GEN_ATTR_FND_CAJA_INGRESO_ID."
				, ".self::GEN_ATTR_FND_CAJA_EGRESO_ID."
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
				$this->setFndChqChequeraId($fila[self::GEN_ATTR_MIN_FND_CHQ_CHEQUERA_ID]);
				$this->setGralBancoId($fila[self::GEN_ATTR_MIN_GRAL_BANCO_ID]);
				$this->setCodigoSucursal($fila[self::GEN_ATTR_MIN_CODIGO_SUCURSAL]);
				$this->setNumero($fila[self::GEN_ATTR_MIN_NUMERO]);
				$this->setFechaEmision($fila[self::GEN_ATTR_MIN_FECHA_EMISION]);
				$this->setFechaCobro($fila[self::GEN_ATTR_MIN_FECHA_COBRO]);
				$this->setFechaAcreditacion($fila[self::GEN_ATTR_MIN_FECHA_ACREDITACION]);
				$this->setFechaVencimiento($fila[self::GEN_ATTR_MIN_FECHA_VENCIMIENTO]);
				$this->setFirmante($fila[self::GEN_ATTR_MIN_FIRMANTE]);
				$this->setEntregador($fila[self::GEN_ATTR_MIN_ENTREGADOR]);
				$this->setFndChqTipoEmisorId($fila[self::GEN_ATTR_MIN_FND_CHQ_TIPO_EMISOR_ID]);
				$this->setFndChqTipoEmisionId($fila[self::GEN_ATTR_MIN_FND_CHQ_TIPO_EMISION_ID]);
				$this->setFndChqTipoPagoId($fila[self::GEN_ATTR_MIN_FND_CHQ_TIPO_PAGO_ID]);
				$this->setFndChqTipoEstadoId($fila[self::GEN_ATTR_MIN_FND_CHQ_TIPO_ESTADO_ID]);
				$this->setImporte($fila[self::GEN_ATTR_MIN_IMPORTE]);
				$this->setCruzado($fila[self::GEN_ATTR_MIN_CRUZADO]);
				$this->setVtaReciboId($fila[self::GEN_ATTR_MIN_VTA_RECIBO_ID]);
				$this->setVtaReciboItemId($fila[self::GEN_ATTR_MIN_VTA_RECIBO_ITEM_ID]);
				$this->setVtaComisionId($fila[self::GEN_ATTR_MIN_VTA_COMISION_ID]);
				$this->setVtaComisionGralFpFormaPagoId($fila[self::GEN_ATTR_MIN_VTA_COMISION_GRAL_FP_FORMA_PAGO_ID]);
				$this->setPdeOrdenPagoId($fila[self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_ID]);
				$this->setPdeOrdenPagoGralFpFormaPagoId($fila[self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_ID]);
				$this->setPdeReciboId($fila[self::GEN_ATTR_MIN_PDE_RECIBO_ID]);
				$this->setPdeReciboItemId($fila[self::GEN_ATTR_MIN_PDE_RECIBO_ITEM_ID]);
				$this->setVtaAjusteDebeId($fila[self::GEN_ATTR_MIN_VTA_AJUSTE_DEBE_ID]);
				$this->setVtaAjusteDebeItemId($fila[self::GEN_ATTR_MIN_VTA_AJUSTE_DEBE_ITEM_ID]);
				$this->setVtaAjusteHaberId($fila[self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_ID]);
				$this->setVtaAjusteHaberItemId($fila[self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_ITEM_ID]);
				$this->setFndCajaMovimientoId($fila[self::GEN_ATTR_MIN_FND_CAJA_MOVIMIENTO_ID]);
				$this->setFndCajaMovimientoItemId($fila[self::GEN_ATTR_MIN_FND_CAJA_MOVIMIENTO_ITEM_ID]);
				$this->setFndCajaId($fila[self::GEN_ATTR_MIN_FND_CAJA_ID]);
				$this->setGralCajaId($fila[self::GEN_ATTR_MIN_GRAL_CAJA_ID]);
				$this->setFndCajaIngresoId($fila[self::GEN_ATTR_MIN_FND_CAJA_INGRESO_ID]);
				$this->setFndCajaEgresoId($fila[self::GEN_ATTR_MIN_FND_CAJA_EGRESO_ID]);
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
	public function setFndChqChequeraId($v){ $this->fnd_chq_chequera_id = $v; }
	public function setGralBancoId($v){ $this->gral_banco_id = $v; }
	public function setCodigoSucursal($v){ $this->codigo_sucursal = $v; }
	public function setNumero($v){ $this->numero = $v; }
	public function setFechaEmision($v){ $this->fecha_emision = $v; }
	public function setFechaCobro($v){ $this->fecha_cobro = $v; }
	public function setFechaAcreditacion($v){ $this->fecha_acreditacion = $v; }
	public function setFechaVencimiento($v){ $this->fecha_vencimiento = $v; }
	public function setFirmante($v){ $this->firmante = $v; }
	public function setEntregador($v){ $this->entregador = $v; }
	public function setFndChqTipoEmisorId($v){ $this->fnd_chq_tipo_emisor_id = $v; }
	public function setFndChqTipoEmisionId($v){ $this->fnd_chq_tipo_emision_id = $v; }
	public function setFndChqTipoPagoId($v){ $this->fnd_chq_tipo_pago_id = $v; }
	public function setFndChqTipoEstadoId($v){ $this->fnd_chq_tipo_estado_id = $v; }
	public function setImporte($v){ $this->importe = $v; }
	public function setCruzado($v){ $this->cruzado = $v; }
	public function setVtaReciboId($v){ $this->vta_recibo_id = $v; }
	public function setVtaReciboItemId($v){ $this->vta_recibo_item_id = $v; }
	public function setVtaComisionId($v){ $this->vta_comision_id = $v; }
	public function setVtaComisionGralFpFormaPagoId($v){ $this->vta_comision_gral_fp_forma_pago_id = $v; }
	public function setPdeOrdenPagoId($v){ $this->pde_orden_pago_id = $v; }
	public function setPdeOrdenPagoGralFpFormaPagoId($v){ $this->pde_orden_pago_gral_fp_forma_pago_id = $v; }
	public function setPdeReciboId($v){ $this->pde_recibo_id = $v; }
	public function setPdeReciboItemId($v){ $this->pde_recibo_item_id = $v; }
	public function setVtaAjusteDebeId($v){ $this->vta_ajuste_debe_id = $v; }
	public function setVtaAjusteDebeItemId($v){ $this->vta_ajuste_debe_item_id = $v; }
	public function setVtaAjusteHaberId($v){ $this->vta_ajuste_haber_id = $v; }
	public function setVtaAjusteHaberItemId($v){ $this->vta_ajuste_haber_item_id = $v; }
	public function setFndCajaMovimientoId($v){ $this->fnd_caja_movimiento_id = $v; }
	public function setFndCajaMovimientoItemId($v){ $this->fnd_caja_movimiento_item_id = $v; }
	public function setFndCajaId($v){ $this->fnd_caja_id = $v; }
	public function setGralCajaId($v){ $this->gral_caja_id = $v; }
	public function setFndCajaIngresoId($v){ $this->fnd_caja_ingreso_id = $v; }
	public function setFndCajaEgresoId($v){ $this->fnd_caja_egreso_id = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new FndChqCheque();
            $o->setId($fila[FndChqCheque::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setFndChqChequeraId($fila[self::GEN_ATTR_MIN_FND_CHQ_CHEQUERA_ID]);
			$o->setGralBancoId($fila[self::GEN_ATTR_MIN_GRAL_BANCO_ID]);
			$o->setCodigoSucursal($fila[self::GEN_ATTR_MIN_CODIGO_SUCURSAL]);
			$o->setNumero($fila[self::GEN_ATTR_MIN_NUMERO]);
			$o->setFechaEmision($fila[self::GEN_ATTR_MIN_FECHA_EMISION]);
			$o->setFechaCobro($fila[self::GEN_ATTR_MIN_FECHA_COBRO]);
			$o->setFechaAcreditacion($fila[self::GEN_ATTR_MIN_FECHA_ACREDITACION]);
			$o->setFechaVencimiento($fila[self::GEN_ATTR_MIN_FECHA_VENCIMIENTO]);
			$o->setFirmante($fila[self::GEN_ATTR_MIN_FIRMANTE]);
			$o->setEntregador($fila[self::GEN_ATTR_MIN_ENTREGADOR]);
			$o->setFndChqTipoEmisorId($fila[self::GEN_ATTR_MIN_FND_CHQ_TIPO_EMISOR_ID]);
			$o->setFndChqTipoEmisionId($fila[self::GEN_ATTR_MIN_FND_CHQ_TIPO_EMISION_ID]);
			$o->setFndChqTipoPagoId($fila[self::GEN_ATTR_MIN_FND_CHQ_TIPO_PAGO_ID]);
			$o->setFndChqTipoEstadoId($fila[self::GEN_ATTR_MIN_FND_CHQ_TIPO_ESTADO_ID]);
			$o->setImporte($fila[self::GEN_ATTR_MIN_IMPORTE]);
			$o->setCruzado($fila[self::GEN_ATTR_MIN_CRUZADO]);
			$o->setVtaReciboId($fila[self::GEN_ATTR_MIN_VTA_RECIBO_ID]);
			$o->setVtaReciboItemId($fila[self::GEN_ATTR_MIN_VTA_RECIBO_ITEM_ID]);
			$o->setVtaComisionId($fila[self::GEN_ATTR_MIN_VTA_COMISION_ID]);
			$o->setVtaComisionGralFpFormaPagoId($fila[self::GEN_ATTR_MIN_VTA_COMISION_GRAL_FP_FORMA_PAGO_ID]);
			$o->setPdeOrdenPagoId($fila[self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_ID]);
			$o->setPdeOrdenPagoGralFpFormaPagoId($fila[self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_ID]);
			$o->setPdeReciboId($fila[self::GEN_ATTR_MIN_PDE_RECIBO_ID]);
			$o->setPdeReciboItemId($fila[self::GEN_ATTR_MIN_PDE_RECIBO_ITEM_ID]);
			$o->setVtaAjusteDebeId($fila[self::GEN_ATTR_MIN_VTA_AJUSTE_DEBE_ID]);
			$o->setVtaAjusteDebeItemId($fila[self::GEN_ATTR_MIN_VTA_AJUSTE_DEBE_ITEM_ID]);
			$o->setVtaAjusteHaberId($fila[self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_ID]);
			$o->setVtaAjusteHaberItemId($fila[self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_ITEM_ID]);
			$o->setFndCajaMovimientoId($fila[self::GEN_ATTR_MIN_FND_CAJA_MOVIMIENTO_ID]);
			$o->setFndCajaMovimientoItemId($fila[self::GEN_ATTR_MIN_FND_CAJA_MOVIMIENTO_ITEM_ID]);
			$o->setFndCajaId($fila[self::GEN_ATTR_MIN_FND_CAJA_ID]);
			$o->setGralCajaId($fila[self::GEN_ATTR_MIN_GRAL_CAJA_ID]);
			$o->setFndCajaIngresoId($fila[self::GEN_ATTR_MIN_FND_CAJA_INGRESO_ID]);
			$o->setFndCajaEgresoId($fila[self::GEN_ATTR_MIN_FND_CAJA_EGRESO_ID]);
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

	/* Control de BFndChqCheque */ 	
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

	/* Cambia el estado de BFndChqCheque */ 	
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

	/* Save de BFndChqCheque */ 	
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
						, ".self::GEN_ATTR_MIN_FND_CHQ_CHEQUERA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_BANCO_ID."
						, ".self::GEN_ATTR_MIN_CODIGO_SUCURSAL."
						, ".self::GEN_ATTR_MIN_NUMERO."
						, ".self::GEN_ATTR_MIN_FECHA_EMISION."
						, ".self::GEN_ATTR_MIN_FECHA_COBRO."
						, ".self::GEN_ATTR_MIN_FECHA_ACREDITACION."
						, ".self::GEN_ATTR_MIN_FECHA_VENCIMIENTO."
						, ".self::GEN_ATTR_MIN_FIRMANTE."
						, ".self::GEN_ATTR_MIN_ENTREGADOR."
						, ".self::GEN_ATTR_MIN_FND_CHQ_TIPO_EMISOR_ID."
						, ".self::GEN_ATTR_MIN_FND_CHQ_TIPO_EMISION_ID."
						, ".self::GEN_ATTR_MIN_FND_CHQ_TIPO_PAGO_ID."
						, ".self::GEN_ATTR_MIN_FND_CHQ_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_IMPORTE."
						, ".self::GEN_ATTR_MIN_CRUZADO."
						, ".self::GEN_ATTR_MIN_VTA_RECIBO_ID."
						, ".self::GEN_ATTR_MIN_VTA_RECIBO_ITEM_ID."
						, ".self::GEN_ATTR_MIN_VTA_COMISION_ID."
						, ".self::GEN_ATTR_MIN_VTA_COMISION_GRAL_FP_FORMA_PAGO_ID."
						, ".self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_ID."
						, ".self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_ID."
						, ".self::GEN_ATTR_MIN_PDE_RECIBO_ID."
						, ".self::GEN_ATTR_MIN_PDE_RECIBO_ITEM_ID."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_DEBE_ID."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_DEBE_ITEM_ID."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_ID."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_ITEM_ID."
						, ".self::GEN_ATTR_MIN_FND_CAJA_MOVIMIENTO_ID."
						, ".self::GEN_ATTR_MIN_FND_CAJA_MOVIMIENTO_ITEM_ID."
						, ".self::GEN_ATTR_MIN_FND_CAJA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_CAJA_ID."
						, ".self::GEN_ATTR_MIN_FND_CAJA_INGRESO_ID."
						, ".self::GEN_ATTR_MIN_FND_CAJA_EGRESO_ID."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('fnd_chq_cheque_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getFndChqChequeraId()."
						, ".$this->getGralBancoId()."
						, '".$this->getCodigoSucursal()."'
						, '".$this->getNumero()."'
						, '".$this->getFechaEmision()."'
						, '".$this->getFechaCobro()."'
						, '".$this->getFechaAcreditacion()."'
						, '".$this->getFechaVencimiento()."'
						, '".$this->getFirmante()."'
						, '".$this->getEntregador()."'
						, ".$this->getFndChqTipoEmisorId()."
						, ".$this->getFndChqTipoEmisionId()."
						, ".$this->getFndChqTipoPagoId()."
						, ".$this->getFndChqTipoEstadoId()."
						, '".$this->getImporte()."'
						, ".$this->getCruzado()."
						, ".$this->getVtaReciboId()."
						, ".$this->getVtaReciboItemId()."
						, ".$this->getVtaComisionId()."
						, ".$this->getVtaComisionGralFpFormaPagoId()."
						, ".$this->getPdeOrdenPagoId()."
						, ".$this->getPdeOrdenPagoGralFpFormaPagoId()."
						, ".$this->getPdeReciboId()."
						, ".$this->getPdeReciboItemId()."
						, ".$this->getVtaAjusteDebeId()."
						, ".$this->getVtaAjusteDebeItemId()."
						, ".$this->getVtaAjusteHaberId()."
						, ".$this->getVtaAjusteHaberItemId()."
						, ".$this->getFndCajaMovimientoId()."
						, ".$this->getFndCajaMovimientoItemId()."
						, ".$this->getFndCajaId()."
						, ".$this->getGralCajaId()."
						, ".$this->getFndCajaIngresoId()."
						, ".$this->getFndCajaEgresoId()."
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('fnd_chq_cheque_seq')";
            
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
                 
				 ".FndChqCheque::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_FND_CHQ_CHEQUERA_ID." = ".$this->getFndChqChequeraId()."
						, ".self::GEN_ATTR_MIN_GRAL_BANCO_ID." = ".$this->getGralBancoId()."
						, ".self::GEN_ATTR_MIN_CODIGO_SUCURSAL." = '".$this->getCodigoSucursal()."'
						, ".self::GEN_ATTR_MIN_NUMERO." = '".$this->getNumero()."'
						, ".self::GEN_ATTR_MIN_FECHA_EMISION." = '".$this->getFechaEmision()."'
						, ".self::GEN_ATTR_MIN_FECHA_COBRO." = '".$this->getFechaCobro()."'
						, ".self::GEN_ATTR_MIN_FECHA_ACREDITACION." = '".$this->getFechaAcreditacion()."'
						, ".self::GEN_ATTR_MIN_FECHA_VENCIMIENTO." = '".$this->getFechaVencimiento()."'
						, ".self::GEN_ATTR_MIN_FIRMANTE." = '".$this->getFirmante()."'
						, ".self::GEN_ATTR_MIN_ENTREGADOR." = '".$this->getEntregador()."'
						, ".self::GEN_ATTR_MIN_FND_CHQ_TIPO_EMISOR_ID." = ".$this->getFndChqTipoEmisorId()."
						, ".self::GEN_ATTR_MIN_FND_CHQ_TIPO_EMISION_ID." = ".$this->getFndChqTipoEmisionId()."
						, ".self::GEN_ATTR_MIN_FND_CHQ_TIPO_PAGO_ID." = ".$this->getFndChqTipoPagoId()."
						, ".self::GEN_ATTR_MIN_FND_CHQ_TIPO_ESTADO_ID." = ".$this->getFndChqTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_IMPORTE." = '".$this->getImporte()."'
						, ".self::GEN_ATTR_MIN_CRUZADO." = ".$this->getCruzado()."
						, ".self::GEN_ATTR_MIN_VTA_RECIBO_ID." = ".$this->getVtaReciboId()."
						, ".self::GEN_ATTR_MIN_VTA_RECIBO_ITEM_ID." = ".$this->getVtaReciboItemId()."
						, ".self::GEN_ATTR_MIN_VTA_COMISION_ID." = ".$this->getVtaComisionId()."
						, ".self::GEN_ATTR_MIN_VTA_COMISION_GRAL_FP_FORMA_PAGO_ID." = ".$this->getVtaComisionGralFpFormaPagoId()."
						, ".self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_ID." = ".$this->getPdeOrdenPagoId()."
						, ".self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_ID." = ".$this->getPdeOrdenPagoGralFpFormaPagoId()."
						, ".self::GEN_ATTR_MIN_PDE_RECIBO_ID." = ".$this->getPdeReciboId()."
						, ".self::GEN_ATTR_MIN_PDE_RECIBO_ITEM_ID." = ".$this->getPdeReciboItemId()."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_DEBE_ID." = ".$this->getVtaAjusteDebeId()."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_DEBE_ITEM_ID." = ".$this->getVtaAjusteDebeItemId()."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_ID." = ".$this->getVtaAjusteHaberId()."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_ITEM_ID." = ".$this->getVtaAjusteHaberItemId()."
						, ".self::GEN_ATTR_MIN_FND_CAJA_MOVIMIENTO_ID." = ".$this->getFndCajaMovimientoId()."
						, ".self::GEN_ATTR_MIN_FND_CAJA_MOVIMIENTO_ITEM_ID." = ".$this->getFndCajaMovimientoItemId()."
						, ".self::GEN_ATTR_MIN_FND_CAJA_ID." = ".$this->getFndCajaId()."
						, ".self::GEN_ATTR_MIN_GRAL_CAJA_ID." = ".$this->getGralCajaId()."
						, ".self::GEN_ATTR_MIN_FND_CAJA_INGRESO_ID." = ".$this->getFndCajaIngresoId()."
						, ".self::GEN_ATTR_MIN_FND_CAJA_EGRESO_ID." = ".$this->getFndCajaEgresoId()."
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
						, ".self::GEN_ATTR_MIN_FND_CHQ_CHEQUERA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_BANCO_ID."
						, ".self::GEN_ATTR_MIN_CODIGO_SUCURSAL."
						, ".self::GEN_ATTR_MIN_NUMERO."
						, ".self::GEN_ATTR_MIN_FECHA_EMISION."
						, ".self::GEN_ATTR_MIN_FECHA_COBRO."
						, ".self::GEN_ATTR_MIN_FECHA_ACREDITACION."
						, ".self::GEN_ATTR_MIN_FECHA_VENCIMIENTO."
						, ".self::GEN_ATTR_MIN_FIRMANTE."
						, ".self::GEN_ATTR_MIN_ENTREGADOR."
						, ".self::GEN_ATTR_MIN_FND_CHQ_TIPO_EMISOR_ID."
						, ".self::GEN_ATTR_MIN_FND_CHQ_TIPO_EMISION_ID."
						, ".self::GEN_ATTR_MIN_FND_CHQ_TIPO_PAGO_ID."
						, ".self::GEN_ATTR_MIN_FND_CHQ_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_IMPORTE."
						, ".self::GEN_ATTR_MIN_CRUZADO."
						, ".self::GEN_ATTR_MIN_VTA_RECIBO_ID."
						, ".self::GEN_ATTR_MIN_VTA_RECIBO_ITEM_ID."
						, ".self::GEN_ATTR_MIN_VTA_COMISION_ID."
						, ".self::GEN_ATTR_MIN_VTA_COMISION_GRAL_FP_FORMA_PAGO_ID."
						, ".self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_ID."
						, ".self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_ID."
						, ".self::GEN_ATTR_MIN_PDE_RECIBO_ID."
						, ".self::GEN_ATTR_MIN_PDE_RECIBO_ITEM_ID."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_DEBE_ID."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_DEBE_ITEM_ID."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_ID."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_ITEM_ID."
						, ".self::GEN_ATTR_MIN_FND_CAJA_MOVIMIENTO_ID."
						, ".self::GEN_ATTR_MIN_FND_CAJA_MOVIMIENTO_ITEM_ID."
						, ".self::GEN_ATTR_MIN_FND_CAJA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_CAJA_ID."
						, ".self::GEN_ATTR_MIN_FND_CAJA_INGRESO_ID."
						, ".self::GEN_ATTR_MIN_FND_CAJA_EGRESO_ID."
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
						, ".$this->getFndChqChequeraId()."
						, ".$this->getGralBancoId()."
						, '".$this->getCodigoSucursal()."'
						, '".$this->getNumero()."'
						, '".$this->getFechaEmision()."'
						, '".$this->getFechaCobro()."'
						, '".$this->getFechaAcreditacion()."'
						, '".$this->getFechaVencimiento()."'
						, '".$this->getFirmante()."'
						, '".$this->getEntregador()."'
						, ".$this->getFndChqTipoEmisorId()."
						, ".$this->getFndChqTipoEmisionId()."
						, ".$this->getFndChqTipoPagoId()."
						, ".$this->getFndChqTipoEstadoId()."
						, '".$this->getImporte()."'
						, ".$this->getCruzado()."
						, ".$this->getVtaReciboId()."
						, ".$this->getVtaReciboItemId()."
						, ".$this->getVtaComisionId()."
						, ".$this->getVtaComisionGralFpFormaPagoId()."
						, ".$this->getPdeOrdenPagoId()."
						, ".$this->getPdeOrdenPagoGralFpFormaPagoId()."
						, ".$this->getPdeReciboId()."
						, ".$this->getPdeReciboItemId()."
						, ".$this->getVtaAjusteDebeId()."
						, ".$this->getVtaAjusteDebeItemId()."
						, ".$this->getVtaAjusteHaberId()."
						, ".$this->getVtaAjusteHaberItemId()."
						, ".$this->getFndCajaMovimientoId()."
						, ".$this->getFndCajaMovimientoItemId()."
						, ".$this->getFndCajaId()."
						, ".$this->getGralCajaId()."
						, ".$this->getFndCajaIngresoId()."
						, ".$this->getFndCajaEgresoId()."
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
                     
				 ".FndChqCheque::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_FND_CHQ_CHEQUERA_ID." = ".$this->getFndChqChequeraId()."
						, ".self::GEN_ATTR_MIN_GRAL_BANCO_ID." = ".$this->getGralBancoId()."
						, ".self::GEN_ATTR_MIN_CODIGO_SUCURSAL." = '".$this->getCodigoSucursal()."'
						, ".self::GEN_ATTR_MIN_NUMERO." = '".$this->getNumero()."'
						, ".self::GEN_ATTR_MIN_FECHA_EMISION." = '".$this->getFechaEmision()."'
						, ".self::GEN_ATTR_MIN_FECHA_COBRO." = '".$this->getFechaCobro()."'
						, ".self::GEN_ATTR_MIN_FECHA_ACREDITACION." = '".$this->getFechaAcreditacion()."'
						, ".self::GEN_ATTR_MIN_FECHA_VENCIMIENTO." = '".$this->getFechaVencimiento()."'
						, ".self::GEN_ATTR_MIN_FIRMANTE." = '".$this->getFirmante()."'
						, ".self::GEN_ATTR_MIN_ENTREGADOR." = '".$this->getEntregador()."'
						, ".self::GEN_ATTR_MIN_FND_CHQ_TIPO_EMISOR_ID." = ".$this->getFndChqTipoEmisorId()."
						, ".self::GEN_ATTR_MIN_FND_CHQ_TIPO_EMISION_ID." = ".$this->getFndChqTipoEmisionId()."
						, ".self::GEN_ATTR_MIN_FND_CHQ_TIPO_PAGO_ID." = ".$this->getFndChqTipoPagoId()."
						, ".self::GEN_ATTR_MIN_FND_CHQ_TIPO_ESTADO_ID." = ".$this->getFndChqTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_IMPORTE." = '".$this->getImporte()."'
						, ".self::GEN_ATTR_MIN_CRUZADO." = ".$this->getCruzado()."
						, ".self::GEN_ATTR_MIN_VTA_RECIBO_ID." = ".$this->getVtaReciboId()."
						, ".self::GEN_ATTR_MIN_VTA_RECIBO_ITEM_ID." = ".$this->getVtaReciboItemId()."
						, ".self::GEN_ATTR_MIN_VTA_COMISION_ID." = ".$this->getVtaComisionId()."
						, ".self::GEN_ATTR_MIN_VTA_COMISION_GRAL_FP_FORMA_PAGO_ID." = ".$this->getVtaComisionGralFpFormaPagoId()."
						, ".self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_ID." = ".$this->getPdeOrdenPagoId()."
						, ".self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_ID." = ".$this->getPdeOrdenPagoGralFpFormaPagoId()."
						, ".self::GEN_ATTR_MIN_PDE_RECIBO_ID." = ".$this->getPdeReciboId()."
						, ".self::GEN_ATTR_MIN_PDE_RECIBO_ITEM_ID." = ".$this->getPdeReciboItemId()."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_DEBE_ID." = ".$this->getVtaAjusteDebeId()."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_DEBE_ITEM_ID." = ".$this->getVtaAjusteDebeItemId()."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_ID." = ".$this->getVtaAjusteHaberId()."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_ITEM_ID." = ".$this->getVtaAjusteHaberItemId()."
						, ".self::GEN_ATTR_MIN_FND_CAJA_MOVIMIENTO_ID." = ".$this->getFndCajaMovimientoId()."
						, ".self::GEN_ATTR_MIN_FND_CAJA_MOVIMIENTO_ITEM_ID." = ".$this->getFndCajaMovimientoItemId()."
						, ".self::GEN_ATTR_MIN_FND_CAJA_ID." = ".$this->getFndCajaId()."
						, ".self::GEN_ATTR_MIN_GRAL_CAJA_ID." = ".$this->getGralCajaId()."
						, ".self::GEN_ATTR_MIN_FND_CAJA_INGRESO_ID." = ".$this->getFndCajaIngresoId()."
						, ".self::GEN_ATTR_MIN_FND_CAJA_EGRESO_ID." = ".$this->getFndCajaEgresoId()."
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
            $o = new FndChqCheque();
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

	/* Delete de BFndChqCheque */ 	
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
	
            // se elimina la coleccion de FndChqEstados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(FndChqEstado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getFndChqEstados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarFndChqCheque(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getFndChqCheques($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = FndChqCheque::setAplicarFiltrosDeAlcance($criterio);

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
	
		$fndchqcheques = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $fndchqcheque = new FndChqCheque();
                    $fndchqcheque->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $fndchqcheque->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$fndchqcheque->setFndChqChequeraId($fila[self::GEN_ATTR_MIN_FND_CHQ_CHEQUERA_ID]);
			$fndchqcheque->setGralBancoId($fila[self::GEN_ATTR_MIN_GRAL_BANCO_ID]);
			$fndchqcheque->setCodigoSucursal($fila[self::GEN_ATTR_MIN_CODIGO_SUCURSAL]);
			$fndchqcheque->setNumero($fila[self::GEN_ATTR_MIN_NUMERO]);
			$fndchqcheque->setFechaEmision($fila[self::GEN_ATTR_MIN_FECHA_EMISION]);
			$fndchqcheque->setFechaCobro($fila[self::GEN_ATTR_MIN_FECHA_COBRO]);
			$fndchqcheque->setFechaAcreditacion($fila[self::GEN_ATTR_MIN_FECHA_ACREDITACION]);
			$fndchqcheque->setFechaVencimiento($fila[self::GEN_ATTR_MIN_FECHA_VENCIMIENTO]);
			$fndchqcheque->setFirmante($fila[self::GEN_ATTR_MIN_FIRMANTE]);
			$fndchqcheque->setEntregador($fila[self::GEN_ATTR_MIN_ENTREGADOR]);
			$fndchqcheque->setFndChqTipoEmisorId($fila[self::GEN_ATTR_MIN_FND_CHQ_TIPO_EMISOR_ID]);
			$fndchqcheque->setFndChqTipoEmisionId($fila[self::GEN_ATTR_MIN_FND_CHQ_TIPO_EMISION_ID]);
			$fndchqcheque->setFndChqTipoPagoId($fila[self::GEN_ATTR_MIN_FND_CHQ_TIPO_PAGO_ID]);
			$fndchqcheque->setFndChqTipoEstadoId($fila[self::GEN_ATTR_MIN_FND_CHQ_TIPO_ESTADO_ID]);
			$fndchqcheque->setImporte($fila[self::GEN_ATTR_MIN_IMPORTE]);
			$fndchqcheque->setCruzado($fila[self::GEN_ATTR_MIN_CRUZADO]);
			$fndchqcheque->setVtaReciboId($fila[self::GEN_ATTR_MIN_VTA_RECIBO_ID]);
			$fndchqcheque->setVtaReciboItemId($fila[self::GEN_ATTR_MIN_VTA_RECIBO_ITEM_ID]);
			$fndchqcheque->setVtaComisionId($fila[self::GEN_ATTR_MIN_VTA_COMISION_ID]);
			$fndchqcheque->setVtaComisionGralFpFormaPagoId($fila[self::GEN_ATTR_MIN_VTA_COMISION_GRAL_FP_FORMA_PAGO_ID]);
			$fndchqcheque->setPdeOrdenPagoId($fila[self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_ID]);
			$fndchqcheque->setPdeOrdenPagoGralFpFormaPagoId($fila[self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_ID]);
			$fndchqcheque->setPdeReciboId($fila[self::GEN_ATTR_MIN_PDE_RECIBO_ID]);
			$fndchqcheque->setPdeReciboItemId($fila[self::GEN_ATTR_MIN_PDE_RECIBO_ITEM_ID]);
			$fndchqcheque->setVtaAjusteDebeId($fila[self::GEN_ATTR_MIN_VTA_AJUSTE_DEBE_ID]);
			$fndchqcheque->setVtaAjusteDebeItemId($fila[self::GEN_ATTR_MIN_VTA_AJUSTE_DEBE_ITEM_ID]);
			$fndchqcheque->setVtaAjusteHaberId($fila[self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_ID]);
			$fndchqcheque->setVtaAjusteHaberItemId($fila[self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_ITEM_ID]);
			$fndchqcheque->setFndCajaMovimientoId($fila[self::GEN_ATTR_MIN_FND_CAJA_MOVIMIENTO_ID]);
			$fndchqcheque->setFndCajaMovimientoItemId($fila[self::GEN_ATTR_MIN_FND_CAJA_MOVIMIENTO_ITEM_ID]);
			$fndchqcheque->setFndCajaId($fila[self::GEN_ATTR_MIN_FND_CAJA_ID]);
			$fndchqcheque->setGralCajaId($fila[self::GEN_ATTR_MIN_GRAL_CAJA_ID]);
			$fndchqcheque->setFndCajaIngresoId($fila[self::GEN_ATTR_MIN_FND_CAJA_INGRESO_ID]);
			$fndchqcheque->setFndCajaEgresoId($fila[self::GEN_ATTR_MIN_FND_CAJA_EGRESO_ID]);
			$fndchqcheque->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$fndchqcheque->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$fndchqcheque->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$fndchqcheque->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$fndchqcheque->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$fndchqcheque->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$fndchqcheque->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$fndchqcheque->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $fndchqcheques[] = $fndchqcheque;
		}
		
		return $fndchqcheques;
	}	
	

	/* Método getFndChqCheques Habilitados */ 	
	static function getFndChqChequesHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return FndChqCheque::getFndChqCheques($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getFndChqCheques para listado de Backend */ 	
	static function getFndChqChequesDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return FndChqCheque::getFndChqCheques($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getFndChqChequesCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = FndChqCheque::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = FndChqCheque::getFndChqCheques($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getFndChqCheques filtrado para select */ 	
	static function getFndChqChequesCmbF($paginador = null, $criterio = null){
            $col = FndChqCheque::getFndChqCheques($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getFndChqCheques filtrado por una coleccion de objetos foraneos de FndChqChequera */ 	
	static function getFndChqChequesXFndChqChequeras($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(FndChqCheque::GEN_ATTR_FND_CHQ_CHEQUERA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->addOrden(FndChqCheque::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = FndChqCheque::getFndChqCheques($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getFndChqChequeraId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getFndChqCheques filtrado por una coleccion de objetos foraneos de GralBanco */ 	
	static function getFndChqChequesXGralBancos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(FndChqCheque::GEN_ATTR_GRAL_BANCO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->addOrden(FndChqCheque::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = FndChqCheque::getFndChqCheques($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralBancoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getFndChqCheques filtrado por una coleccion de objetos foraneos de FndChqTipoEmisor */ 	
	static function getFndChqChequesXFndChqTipoEmisors($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(FndChqCheque::GEN_ATTR_FND_CHQ_TIPO_EMISOR_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->addOrden(FndChqCheque::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = FndChqCheque::getFndChqCheques($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getFndChqTipoEmisorId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getFndChqCheques filtrado por una coleccion de objetos foraneos de FndChqTipoEmision */ 	
	static function getFndChqChequesXFndChqTipoEmisions($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(FndChqCheque::GEN_ATTR_FND_CHQ_TIPO_EMISION_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->addOrden(FndChqCheque::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = FndChqCheque::getFndChqCheques($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getFndChqTipoEmisionId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getFndChqCheques filtrado por una coleccion de objetos foraneos de FndChqTipoPago */ 	
	static function getFndChqChequesXFndChqTipoPagos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(FndChqCheque::GEN_ATTR_FND_CHQ_TIPO_PAGO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->addOrden(FndChqCheque::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = FndChqCheque::getFndChqCheques($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getFndChqTipoPagoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getFndChqCheques filtrado por una coleccion de objetos foraneos de FndChqTipoEstado */ 	
	static function getFndChqChequesXFndChqTipoEstados($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(FndChqCheque::GEN_ATTR_FND_CHQ_TIPO_ESTADO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->addOrden(FndChqCheque::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = FndChqCheque::getFndChqCheques($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getFndChqTipoEstadoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getFndChqCheques filtrado por una coleccion de objetos foraneos de VtaRecibo */ 	
	static function getFndChqChequesXVtaRecibos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(FndChqCheque::GEN_ATTR_VTA_RECIBO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->addOrden(FndChqCheque::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = FndChqCheque::getFndChqCheques($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaReciboId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getFndChqCheques filtrado por una coleccion de objetos foraneos de VtaReciboItem */ 	
	static function getFndChqChequesXVtaReciboItems($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(FndChqCheque::GEN_ATTR_VTA_RECIBO_ITEM_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->addOrden(FndChqCheque::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = FndChqCheque::getFndChqCheques($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaReciboItemId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getFndChqCheques filtrado por una coleccion de objetos foraneos de VtaComision */ 	
	static function getFndChqChequesXVtaComisions($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(FndChqCheque::GEN_ATTR_VTA_COMISION_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->addOrden(FndChqCheque::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = FndChqCheque::getFndChqCheques($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaComisionId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getFndChqCheques filtrado por una coleccion de objetos foraneos de VtaComisionGralFpFormaPago */ 	
	static function getFndChqChequesXVtaComisionGralFpFormaPagos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(FndChqCheque::GEN_ATTR_VTA_COMISION_GRAL_FP_FORMA_PAGO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->addOrden(FndChqCheque::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = FndChqCheque::getFndChqCheques($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaComisionGralFpFormaPagoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getFndChqCheques filtrado por una coleccion de objetos foraneos de PdeOrdenPago */ 	
	static function getFndChqChequesXPdeOrdenPagos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(FndChqCheque::GEN_ATTR_PDE_ORDEN_PAGO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->addOrden(FndChqCheque::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = FndChqCheque::getFndChqCheques($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeOrdenPagoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getFndChqCheques filtrado por una coleccion de objetos foraneos de PdeOrdenPagoGralFpFormaPago */ 	
	static function getFndChqChequesXPdeOrdenPagoGralFpFormaPagos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(FndChqCheque::GEN_ATTR_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->addOrden(FndChqCheque::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = FndChqCheque::getFndChqCheques($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeOrdenPagoGralFpFormaPagoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getFndChqCheques filtrado por una coleccion de objetos foraneos de PdeRecibo */ 	
	static function getFndChqChequesXPdeRecibos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(FndChqCheque::GEN_ATTR_PDE_RECIBO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->addOrden(FndChqCheque::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = FndChqCheque::getFndChqCheques($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeReciboId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getFndChqCheques filtrado por una coleccion de objetos foraneos de PdeReciboItem */ 	
	static function getFndChqChequesXPdeReciboItems($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(FndChqCheque::GEN_ATTR_PDE_RECIBO_ITEM_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->addOrden(FndChqCheque::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = FndChqCheque::getFndChqCheques($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeReciboItemId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getFndChqCheques filtrado por una coleccion de objetos foraneos de VtaAjusteDebe */ 	
	static function getFndChqChequesXVtaAjusteDebes($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(FndChqCheque::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->addOrden(FndChqCheque::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = FndChqCheque::getFndChqCheques($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaAjusteDebeId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getFndChqCheques filtrado por una coleccion de objetos foraneos de VtaAjusteDebeItem */ 	
	static function getFndChqChequesXVtaAjusteDebeItems($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(FndChqCheque::GEN_ATTR_VTA_AJUSTE_DEBE_ITEM_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->addOrden(FndChqCheque::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = FndChqCheque::getFndChqCheques($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaAjusteDebeItemId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getFndChqCheques filtrado por una coleccion de objetos foraneos de VtaAjusteHaber */ 	
	static function getFndChqChequesXVtaAjusteHabers($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(FndChqCheque::GEN_ATTR_VTA_AJUSTE_HABER_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->addOrden(FndChqCheque::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = FndChqCheque::getFndChqCheques($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaAjusteHaberId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getFndChqCheques filtrado por una coleccion de objetos foraneos de VtaAjusteHaberItem */ 	
	static function getFndChqChequesXVtaAjusteHaberItems($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(FndChqCheque::GEN_ATTR_VTA_AJUSTE_HABER_ITEM_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->addOrden(FndChqCheque::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = FndChqCheque::getFndChqCheques($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaAjusteHaberItemId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getFndChqCheques filtrado por una coleccion de objetos foraneos de FndCajaMovimiento */ 	
	static function getFndChqChequesXFndCajaMovimientos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(FndChqCheque::GEN_ATTR_FND_CAJA_MOVIMIENTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->addOrden(FndChqCheque::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = FndChqCheque::getFndChqCheques($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getFndCajaMovimientoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getFndChqCheques filtrado por una coleccion de objetos foraneos de FndCajaMovimientoItem */ 	
	static function getFndChqChequesXFndCajaMovimientoItems($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(FndChqCheque::GEN_ATTR_FND_CAJA_MOVIMIENTO_ITEM_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->addOrden(FndChqCheque::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = FndChqCheque::getFndChqCheques($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getFndCajaMovimientoItemId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getFndChqCheques filtrado por una coleccion de objetos foraneos de FndCaja */ 	
	static function getFndChqChequesXFndCajas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(FndChqCheque::GEN_ATTR_FND_CAJA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->addOrden(FndChqCheque::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = FndChqCheque::getFndChqCheques($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getFndCajaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getFndChqCheques filtrado por una coleccion de objetos foraneos de GralCaja */ 	
	static function getFndChqChequesXGralCajas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(FndChqCheque::GEN_ATTR_GRAL_CAJA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->addOrden(FndChqCheque::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = FndChqCheque::getFndChqCheques($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralCajaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getFndChqCheques filtrado por una coleccion de objetos foraneos de FndCajaIngreso */ 	
	static function getFndChqChequesXFndCajaIngresos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(FndChqCheque::GEN_ATTR_FND_CAJA_INGRESO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->addOrden(FndChqCheque::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = FndChqCheque::getFndChqCheques($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getFndCajaIngresoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getFndChqCheques filtrado por una coleccion de objetos foraneos de FndCajaEgreso */ 	
	static function getFndChqChequesXFndCajaEgresos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(FndChqCheque::GEN_ATTR_FND_CAJA_EGRESO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->addOrden(FndChqCheque::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = FndChqCheque::getFndChqCheques($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getFndCajaEgresoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'fnd_chq_cheque_adm.php';
            $url_gestion = 'fnd_chq_cheque_gestion.php';
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
	

	/* Metodo getFndChqEstados */ 	
	public function getFndChqEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(FndChqEstado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(FndChqEstado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(FndChqEstado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(FndChqEstado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(FndChqEstado::GEN_ATTR_FND_CHQ_CHEQUE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(FndChqEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(FndChqEstado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".FndChqEstado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $fndchqestados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $fndchqestado = FndChqEstado::hidratarObjeto($fila);			
                $fndchqestados[] = $fndchqestado;
            }

            return $fndchqestados;
	}	
	

	/* Método getFndChqEstadosBloque para MasInfo */ 	
	public function getFndChqEstadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getFndChqEstados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getFndChqEstados Habilitados */ 	
	public function getFndChqEstadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getFndChqEstados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getFndChqEstado */ 	
	public function getFndChqEstado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getFndChqEstados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de FndChqEstado relacionadas */ 	
	public function deleteFndChqEstados(){
            $obs = $this->getFndChqEstados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getFndChqEstadosCmb() FndChqEstado relacionadas */ 	
	public function getFndChqEstadosCmb(){
            $c = new Criterio();
            $c->add(FndChqEstado::GEN_ATTR_FND_CHQ_CHEQUE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndChqEstado::GEN_TABLA);
            $c->setCriterios();

            $os = FndChqEstado::getFndChqEstadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener FndChqTipoEstados (Coleccion) relacionados a traves de FndChqEstado */ 	
	public function getFndChqTipoEstadosXFndChqEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(FndChqTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(FndChqEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(FndChqEstado::GEN_ATTR_FND_CHQ_CHEQUE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndChqTipoEstado::GEN_TABLA);
            $c->addRealJoin(FndChqEstado::GEN_TABLA, FndChqEstado::GEN_ATTR_FND_CHQ_TIPO_ESTADO_ID, FndChqTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = FndChqTipoEstado::getFndChqTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de FndChqTipoEstados relacionados a traves de FndChqEstado */ 	
	public function getCantidadFndChqTipoEstadosXFndChqEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(FndChqTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(FndChqTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(FndChqEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(FndChqEstado::GEN_ATTR_FND_CHQ_CHEQUE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndChqTipoEstado::GEN_TABLA);
            $c->addRealJoin(FndChqEstado::GEN_TABLA, FndChqEstado::GEN_ATTR_FND_CHQ_TIPO_ESTADO_ID, FndChqTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = FndChqTipoEstado::getFndChqTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener FndChqTipoEstado (Objeto) relacionado a traves de FndChqEstado */ 	
	public function getFndChqTipoEstadoXFndChqEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getFndChqTipoEstadosXFndChqEstado($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna el FndChqChequera (Clave Foranea) */ 	
    public function getFndChqChequera(){
        $o = new FndChqChequera();
        $o->setId($this->getFndChqChequeraId());
        return $o;			
    }

	/* Metodo que retorna el FndChqChequera (Clave Foranea) en Array */ 	
    public function getFndChqChequeraEnArray(&$arr_os){
        if($this->getFndChqChequeraId() != 'null'){
            if(isset($arr_os[$this->getFndChqChequeraId()])){
                $o = $arr_os[$this->getFndChqChequeraId()];
            }else{
                $o = FndChqChequera::getOxId($this->getFndChqChequeraId());
                if($o){
                    $arr_os[$this->getFndChqChequeraId()] = $o;
                }
            }
        }else{
            $o = new FndChqChequera();
        }
        return $o;		
    }

	/* Metodo que retorna el GralBanco (Clave Foranea) */ 	
    public function getGralBanco(){
        $o = new GralBanco();
        $o->setId($this->getGralBancoId());
        return $o;			
    }

	/* Metodo que retorna el GralBanco (Clave Foranea) en Array */ 	
    public function getGralBancoEnArray(&$arr_os){
        if($this->getGralBancoId() != 'null'){
            if(isset($arr_os[$this->getGralBancoId()])){
                $o = $arr_os[$this->getGralBancoId()];
            }else{
                $o = GralBanco::getOxId($this->getGralBancoId());
                if($o){
                    $arr_os[$this->getGralBancoId()] = $o;
                }
            }
        }else{
            $o = new GralBanco();
        }
        return $o;		
    }

	/* Metodo que retorna el FndChqTipoEmisor (Clave Foranea) */ 	
    public function getFndChqTipoEmisor(){
        $o = new FndChqTipoEmisor();
        $o->setId($this->getFndChqTipoEmisorId());
        return $o;			
    }

	/* Metodo que retorna el FndChqTipoEmisor (Clave Foranea) en Array */ 	
    public function getFndChqTipoEmisorEnArray(&$arr_os){
        if($this->getFndChqTipoEmisorId() != 'null'){
            if(isset($arr_os[$this->getFndChqTipoEmisorId()])){
                $o = $arr_os[$this->getFndChqTipoEmisorId()];
            }else{
                $o = FndChqTipoEmisor::getOxId($this->getFndChqTipoEmisorId());
                if($o){
                    $arr_os[$this->getFndChqTipoEmisorId()] = $o;
                }
            }
        }else{
            $o = new FndChqTipoEmisor();
        }
        return $o;		
    }

	/* Metodo que retorna el FndChqTipoEmision (Clave Foranea) */ 	
    public function getFndChqTipoEmision(){
        $o = new FndChqTipoEmision();
        $o->setId($this->getFndChqTipoEmisionId());
        return $o;			
    }

	/* Metodo que retorna el FndChqTipoEmision (Clave Foranea) en Array */ 	
    public function getFndChqTipoEmisionEnArray(&$arr_os){
        if($this->getFndChqTipoEmisionId() != 'null'){
            if(isset($arr_os[$this->getFndChqTipoEmisionId()])){
                $o = $arr_os[$this->getFndChqTipoEmisionId()];
            }else{
                $o = FndChqTipoEmision::getOxId($this->getFndChqTipoEmisionId());
                if($o){
                    $arr_os[$this->getFndChqTipoEmisionId()] = $o;
                }
            }
        }else{
            $o = new FndChqTipoEmision();
        }
        return $o;		
    }

	/* Metodo que retorna el FndChqTipoPago (Clave Foranea) */ 	
    public function getFndChqTipoPago(){
        $o = new FndChqTipoPago();
        $o->setId($this->getFndChqTipoPagoId());
        return $o;			
    }

	/* Metodo que retorna el FndChqTipoPago (Clave Foranea) en Array */ 	
    public function getFndChqTipoPagoEnArray(&$arr_os){
        if($this->getFndChqTipoPagoId() != 'null'){
            if(isset($arr_os[$this->getFndChqTipoPagoId()])){
                $o = $arr_os[$this->getFndChqTipoPagoId()];
            }else{
                $o = FndChqTipoPago::getOxId($this->getFndChqTipoPagoId());
                if($o){
                    $arr_os[$this->getFndChqTipoPagoId()] = $o;
                }
            }
        }else{
            $o = new FndChqTipoPago();
        }
        return $o;		
    }

	/* Metodo que retorna el FndChqTipoEstado (Clave Foranea) */ 	
    public function getFndChqTipoEstado(){
        $o = new FndChqTipoEstado();
        $o->setId($this->getFndChqTipoEstadoId());
        return $o;			
    }

	/* Metodo que retorna el FndChqTipoEstado (Clave Foranea) en Array */ 	
    public function getFndChqTipoEstadoEnArray(&$arr_os){
        if($this->getFndChqTipoEstadoId() != 'null'){
            if(isset($arr_os[$this->getFndChqTipoEstadoId()])){
                $o = $arr_os[$this->getFndChqTipoEstadoId()];
            }else{
                $o = FndChqTipoEstado::getOxId($this->getFndChqTipoEstadoId());
                if($o){
                    $arr_os[$this->getFndChqTipoEstadoId()] = $o;
                }
            }
        }else{
            $o = new FndChqTipoEstado();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaRecibo (Clave Foranea) */ 	
    public function getVtaRecibo(){
        $o = new VtaRecibo();
        $o->setId($this->getVtaReciboId());
        return $o;			
    }

	/* Metodo que retorna el VtaRecibo (Clave Foranea) en Array */ 	
    public function getVtaReciboEnArray(&$arr_os){
        if($this->getVtaReciboId() != 'null'){
            if(isset($arr_os[$this->getVtaReciboId()])){
                $o = $arr_os[$this->getVtaReciboId()];
            }else{
                $o = VtaRecibo::getOxId($this->getVtaReciboId());
                if($o){
                    $arr_os[$this->getVtaReciboId()] = $o;
                }
            }
        }else{
            $o = new VtaRecibo();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaReciboItem (Clave Foranea) */ 	
    public function getVtaReciboItem(){
        $o = new VtaReciboItem();
        $o->setId($this->getVtaReciboItemId());
        return $o;			
    }

	/* Metodo que retorna el VtaReciboItem (Clave Foranea) en Array */ 	
    public function getVtaReciboItemEnArray(&$arr_os){
        if($this->getVtaReciboItemId() != 'null'){
            if(isset($arr_os[$this->getVtaReciboItemId()])){
                $o = $arr_os[$this->getVtaReciboItemId()];
            }else{
                $o = VtaReciboItem::getOxId($this->getVtaReciboItemId());
                if($o){
                    $arr_os[$this->getVtaReciboItemId()] = $o;
                }
            }
        }else{
            $o = new VtaReciboItem();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaComision (Clave Foranea) */ 	
    public function getVtaComision(){
        $o = new VtaComision();
        $o->setId($this->getVtaComisionId());
        return $o;			
    }

	/* Metodo que retorna el VtaComision (Clave Foranea) en Array */ 	
    public function getVtaComisionEnArray(&$arr_os){
        if($this->getVtaComisionId() != 'null'){
            if(isset($arr_os[$this->getVtaComisionId()])){
                $o = $arr_os[$this->getVtaComisionId()];
            }else{
                $o = VtaComision::getOxId($this->getVtaComisionId());
                if($o){
                    $arr_os[$this->getVtaComisionId()] = $o;
                }
            }
        }else{
            $o = new VtaComision();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaComisionGralFpFormaPago (Clave Foranea) */ 	
    public function getVtaComisionGralFpFormaPago(){
        $o = new VtaComisionGralFpFormaPago();
        $o->setId($this->getVtaComisionGralFpFormaPagoId());
        return $o;			
    }

	/* Metodo que retorna el VtaComisionGralFpFormaPago (Clave Foranea) en Array */ 	
    public function getVtaComisionGralFpFormaPagoEnArray(&$arr_os){
        if($this->getVtaComisionGralFpFormaPagoId() != 'null'){
            if(isset($arr_os[$this->getVtaComisionGralFpFormaPagoId()])){
                $o = $arr_os[$this->getVtaComisionGralFpFormaPagoId()];
            }else{
                $o = VtaComisionGralFpFormaPago::getOxId($this->getVtaComisionGralFpFormaPagoId());
                if($o){
                    $arr_os[$this->getVtaComisionGralFpFormaPagoId()] = $o;
                }
            }
        }else{
            $o = new VtaComisionGralFpFormaPago();
        }
        return $o;		
    }

	/* Metodo que retorna el PdeOrdenPago (Clave Foranea) */ 	
    public function getPdeOrdenPago(){
        $o = new PdeOrdenPago();
        $o->setId($this->getPdeOrdenPagoId());
        return $o;			
    }

	/* Metodo que retorna el PdeOrdenPago (Clave Foranea) en Array */ 	
    public function getPdeOrdenPagoEnArray(&$arr_os){
        if($this->getPdeOrdenPagoId() != 'null'){
            if(isset($arr_os[$this->getPdeOrdenPagoId()])){
                $o = $arr_os[$this->getPdeOrdenPagoId()];
            }else{
                $o = PdeOrdenPago::getOxId($this->getPdeOrdenPagoId());
                if($o){
                    $arr_os[$this->getPdeOrdenPagoId()] = $o;
                }
            }
        }else{
            $o = new PdeOrdenPago();
        }
        return $o;		
    }

	/* Metodo que retorna el PdeOrdenPagoGralFpFormaPago (Clave Foranea) */ 	
    public function getPdeOrdenPagoGralFpFormaPago(){
        $o = new PdeOrdenPagoGralFpFormaPago();
        $o->setId($this->getPdeOrdenPagoGralFpFormaPagoId());
        return $o;			
    }

	/* Metodo que retorna el PdeOrdenPagoGralFpFormaPago (Clave Foranea) en Array */ 	
    public function getPdeOrdenPagoGralFpFormaPagoEnArray(&$arr_os){
        if($this->getPdeOrdenPagoGralFpFormaPagoId() != 'null'){
            if(isset($arr_os[$this->getPdeOrdenPagoGralFpFormaPagoId()])){
                $o = $arr_os[$this->getPdeOrdenPagoGralFpFormaPagoId()];
            }else{
                $o = PdeOrdenPagoGralFpFormaPago::getOxId($this->getPdeOrdenPagoGralFpFormaPagoId());
                if($o){
                    $arr_os[$this->getPdeOrdenPagoGralFpFormaPagoId()] = $o;
                }
            }
        }else{
            $o = new PdeOrdenPagoGralFpFormaPago();
        }
        return $o;		
    }

	/* Metodo que retorna el PdeRecibo (Clave Foranea) */ 	
    public function getPdeRecibo(){
        $o = new PdeRecibo();
        $o->setId($this->getPdeReciboId());
        return $o;			
    }

	/* Metodo que retorna el PdeRecibo (Clave Foranea) en Array */ 	
    public function getPdeReciboEnArray(&$arr_os){
        if($this->getPdeReciboId() != 'null'){
            if(isset($arr_os[$this->getPdeReciboId()])){
                $o = $arr_os[$this->getPdeReciboId()];
            }else{
                $o = PdeRecibo::getOxId($this->getPdeReciboId());
                if($o){
                    $arr_os[$this->getPdeReciboId()] = $o;
                }
            }
        }else{
            $o = new PdeRecibo();
        }
        return $o;		
    }

	/* Metodo que retorna el PdeReciboItem (Clave Foranea) */ 	
    public function getPdeReciboItem(){
        $o = new PdeReciboItem();
        $o->setId($this->getPdeReciboItemId());
        return $o;			
    }

	/* Metodo que retorna el PdeReciboItem (Clave Foranea) en Array */ 	
    public function getPdeReciboItemEnArray(&$arr_os){
        if($this->getPdeReciboItemId() != 'null'){
            if(isset($arr_os[$this->getPdeReciboItemId()])){
                $o = $arr_os[$this->getPdeReciboItemId()];
            }else{
                $o = PdeReciboItem::getOxId($this->getPdeReciboItemId());
                if($o){
                    $arr_os[$this->getPdeReciboItemId()] = $o;
                }
            }
        }else{
            $o = new PdeReciboItem();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaAjusteDebe (Clave Foranea) */ 	
    public function getVtaAjusteDebe(){
        $o = new VtaAjusteDebe();
        $o->setId($this->getVtaAjusteDebeId());
        return $o;			
    }

	/* Metodo que retorna el VtaAjusteDebe (Clave Foranea) en Array */ 	
    public function getVtaAjusteDebeEnArray(&$arr_os){
        if($this->getVtaAjusteDebeId() != 'null'){
            if(isset($arr_os[$this->getVtaAjusteDebeId()])){
                $o = $arr_os[$this->getVtaAjusteDebeId()];
            }else{
                $o = VtaAjusteDebe::getOxId($this->getVtaAjusteDebeId());
                if($o){
                    $arr_os[$this->getVtaAjusteDebeId()] = $o;
                }
            }
        }else{
            $o = new VtaAjusteDebe();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaAjusteDebeItem (Clave Foranea) */ 	
    public function getVtaAjusteDebeItem(){
        $o = new VtaAjusteDebeItem();
        $o->setId($this->getVtaAjusteDebeItemId());
        return $o;			
    }

	/* Metodo que retorna el VtaAjusteDebeItem (Clave Foranea) en Array */ 	
    public function getVtaAjusteDebeItemEnArray(&$arr_os){
        if($this->getVtaAjusteDebeItemId() != 'null'){
            if(isset($arr_os[$this->getVtaAjusteDebeItemId()])){
                $o = $arr_os[$this->getVtaAjusteDebeItemId()];
            }else{
                $o = VtaAjusteDebeItem::getOxId($this->getVtaAjusteDebeItemId());
                if($o){
                    $arr_os[$this->getVtaAjusteDebeItemId()] = $o;
                }
            }
        }else{
            $o = new VtaAjusteDebeItem();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaAjusteHaber (Clave Foranea) */ 	
    public function getVtaAjusteHaber(){
        $o = new VtaAjusteHaber();
        $o->setId($this->getVtaAjusteHaberId());
        return $o;			
    }

	/* Metodo que retorna el VtaAjusteHaber (Clave Foranea) en Array */ 	
    public function getVtaAjusteHaberEnArray(&$arr_os){
        if($this->getVtaAjusteHaberId() != 'null'){
            if(isset($arr_os[$this->getVtaAjusteHaberId()])){
                $o = $arr_os[$this->getVtaAjusteHaberId()];
            }else{
                $o = VtaAjusteHaber::getOxId($this->getVtaAjusteHaberId());
                if($o){
                    $arr_os[$this->getVtaAjusteHaberId()] = $o;
                }
            }
        }else{
            $o = new VtaAjusteHaber();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaAjusteHaberItem (Clave Foranea) */ 	
    public function getVtaAjusteHaberItem(){
        $o = new VtaAjusteHaberItem();
        $o->setId($this->getVtaAjusteHaberItemId());
        return $o;			
    }

	/* Metodo que retorna el VtaAjusteHaberItem (Clave Foranea) en Array */ 	
    public function getVtaAjusteHaberItemEnArray(&$arr_os){
        if($this->getVtaAjusteHaberItemId() != 'null'){
            if(isset($arr_os[$this->getVtaAjusteHaberItemId()])){
                $o = $arr_os[$this->getVtaAjusteHaberItemId()];
            }else{
                $o = VtaAjusteHaberItem::getOxId($this->getVtaAjusteHaberItemId());
                if($o){
                    $arr_os[$this->getVtaAjusteHaberItemId()] = $o;
                }
            }
        }else{
            $o = new VtaAjusteHaberItem();
        }
        return $o;		
    }

	/* Metodo que retorna el FndCajaMovimiento (Clave Foranea) */ 	
    public function getFndCajaMovimiento(){
        $o = new FndCajaMovimiento();
        $o->setId($this->getFndCajaMovimientoId());
        return $o;			
    }

	/* Metodo que retorna el FndCajaMovimiento (Clave Foranea) en Array */ 	
    public function getFndCajaMovimientoEnArray(&$arr_os){
        if($this->getFndCajaMovimientoId() != 'null'){
            if(isset($arr_os[$this->getFndCajaMovimientoId()])){
                $o = $arr_os[$this->getFndCajaMovimientoId()];
            }else{
                $o = FndCajaMovimiento::getOxId($this->getFndCajaMovimientoId());
                if($o){
                    $arr_os[$this->getFndCajaMovimientoId()] = $o;
                }
            }
        }else{
            $o = new FndCajaMovimiento();
        }
        return $o;		
    }

	/* Metodo que retorna el FndCajaMovimientoItem (Clave Foranea) */ 	
    public function getFndCajaMovimientoItem(){
        $o = new FndCajaMovimientoItem();
        $o->setId($this->getFndCajaMovimientoItemId());
        return $o;			
    }

	/* Metodo que retorna el FndCajaMovimientoItem (Clave Foranea) en Array */ 	
    public function getFndCajaMovimientoItemEnArray(&$arr_os){
        if($this->getFndCajaMovimientoItemId() != 'null'){
            if(isset($arr_os[$this->getFndCajaMovimientoItemId()])){
                $o = $arr_os[$this->getFndCajaMovimientoItemId()];
            }else{
                $o = FndCajaMovimientoItem::getOxId($this->getFndCajaMovimientoItemId());
                if($o){
                    $arr_os[$this->getFndCajaMovimientoItemId()] = $o;
                }
            }
        }else{
            $o = new FndCajaMovimientoItem();
        }
        return $o;		
    }

	/* Metodo que retorna el FndCaja (Clave Foranea) */ 	
    public function getFndCaja(){
        $o = new FndCaja();
        $o->setId($this->getFndCajaId());
        return $o;			
    }

	/* Metodo que retorna el FndCaja (Clave Foranea) en Array */ 	
    public function getFndCajaEnArray(&$arr_os){
        if($this->getFndCajaId() != 'null'){
            if(isset($arr_os[$this->getFndCajaId()])){
                $o = $arr_os[$this->getFndCajaId()];
            }else{
                $o = FndCaja::getOxId($this->getFndCajaId());
                if($o){
                    $arr_os[$this->getFndCajaId()] = $o;
                }
            }
        }else{
            $o = new FndCaja();
        }
        return $o;		
    }

	/* Metodo que retorna el GralCaja (Clave Foranea) */ 	
    public function getGralCaja(){
        $o = new GralCaja();
        $o->setId($this->getGralCajaId());
        return $o;			
    }

	/* Metodo que retorna el GralCaja (Clave Foranea) en Array */ 	
    public function getGralCajaEnArray(&$arr_os){
        if($this->getGralCajaId() != 'null'){
            if(isset($arr_os[$this->getGralCajaId()])){
                $o = $arr_os[$this->getGralCajaId()];
            }else{
                $o = GralCaja::getOxId($this->getGralCajaId());
                if($o){
                    $arr_os[$this->getGralCajaId()] = $o;
                }
            }
        }else{
            $o = new GralCaja();
        }
        return $o;		
    }

	/* Metodo que retorna el FndCajaIngreso (Clave Foranea) */ 	
    public function getFndCajaIngreso(){
        $o = new FndCajaIngreso();
        $o->setId($this->getFndCajaIngresoId());
        return $o;			
    }

	/* Metodo que retorna el FndCajaIngreso (Clave Foranea) en Array */ 	
    public function getFndCajaIngresoEnArray(&$arr_os){
        if($this->getFndCajaIngresoId() != 'null'){
            if(isset($arr_os[$this->getFndCajaIngresoId()])){
                $o = $arr_os[$this->getFndCajaIngresoId()];
            }else{
                $o = FndCajaIngreso::getOxId($this->getFndCajaIngresoId());
                if($o){
                    $arr_os[$this->getFndCajaIngresoId()] = $o;
                }
            }
        }else{
            $o = new FndCajaIngreso();
        }
        return $o;		
    }

	/* Metodo que retorna el FndCajaEgreso (Clave Foranea) */ 	
    public function getFndCajaEgreso(){
        $o = new FndCajaEgreso();
        $o->setId($this->getFndCajaEgresoId());
        return $o;			
    }

	/* Metodo que retorna el FndCajaEgreso (Clave Foranea) en Array */ 	
    public function getFndCajaEgresoEnArray(&$arr_os){
        if($this->getFndCajaEgresoId() != 'null'){
            if(isset($arr_os[$this->getFndCajaEgresoId()])){
                $o = $arr_os[$this->getFndCajaEgresoId()];
            }else{
                $o = FndCajaEgreso::getOxId($this->getFndCajaEgresoId());
                if($o){
                    $arr_os[$this->getFndCajaEgresoId()] = $o;
                }
            }
        }else{
            $o = new FndCajaEgreso();
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
            		
        if($contexto_solicitante != FndChqChequera::GEN_CLASE){
            if($this->getFndChqChequera()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(FndChqChequera::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getFndChqChequera()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralBanco::GEN_CLASE){
            if($this->getGralBanco()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralBanco::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralBanco()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != FndChqTipoEmisor::GEN_CLASE){
            if($this->getFndChqTipoEmisor()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(FndChqTipoEmisor::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getFndChqTipoEmisor()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != FndChqTipoEmision::GEN_CLASE){
            if($this->getFndChqTipoEmision()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(FndChqTipoEmision::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getFndChqTipoEmision()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != FndChqTipoPago::GEN_CLASE){
            if($this->getFndChqTipoPago()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(FndChqTipoPago::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getFndChqTipoPago()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != FndChqTipoEstado::GEN_CLASE){
            if($this->getFndChqTipoEstado()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(FndChqTipoEstado::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getFndChqTipoEstado()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaRecibo::GEN_CLASE){
            if($this->getVtaRecibo()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaRecibo::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaRecibo()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaReciboItem::GEN_CLASE){
            if($this->getVtaReciboItem()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaReciboItem::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaReciboItem()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaComision::GEN_CLASE){
            if($this->getVtaComision()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaComision::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaComision()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaComisionGralFpFormaPago::GEN_CLASE){
            if($this->getVtaComisionGralFpFormaPago()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaComisionGralFpFormaPago::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaComisionGralFpFormaPago()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdeOrdenPago::GEN_CLASE){
            if($this->getPdeOrdenPago()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeOrdenPago::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeOrdenPago()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdeOrdenPagoGralFpFormaPago::GEN_CLASE){
            if($this->getPdeOrdenPagoGralFpFormaPago()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeOrdenPagoGralFpFormaPago::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeOrdenPagoGralFpFormaPago()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdeRecibo::GEN_CLASE){
            if($this->getPdeRecibo()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeRecibo::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeRecibo()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdeReciboItem::GEN_CLASE){
            if($this->getPdeReciboItem()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeReciboItem::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeReciboItem()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaAjusteDebe::GEN_CLASE){
            if($this->getVtaAjusteDebe()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaAjusteDebe::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaAjusteDebe()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaAjusteDebeItem::GEN_CLASE){
            if($this->getVtaAjusteDebeItem()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaAjusteDebeItem::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaAjusteDebeItem()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaAjusteHaber::GEN_CLASE){
            if($this->getVtaAjusteHaber()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaAjusteHaber::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaAjusteHaber()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaAjusteHaberItem::GEN_CLASE){
            if($this->getVtaAjusteHaberItem()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaAjusteHaberItem::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaAjusteHaberItem()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != FndCajaMovimiento::GEN_CLASE){
            if($this->getFndCajaMovimiento()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(FndCajaMovimiento::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getFndCajaMovimiento()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != FndCajaMovimientoItem::GEN_CLASE){
            if($this->getFndCajaMovimientoItem()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(FndCajaMovimientoItem::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getFndCajaMovimientoItem()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != FndCaja::GEN_CLASE){
            if($this->getFndCaja()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(FndCaja::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getFndCaja()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralCaja::GEN_CLASE){
            if($this->getGralCaja()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralCaja::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralCaja()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != FndCajaIngreso::GEN_CLASE){
            if($this->getFndCajaIngreso()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(FndCajaIngreso::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getFndCajaIngreso()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != FndCajaEgreso::GEN_CLASE){
            if($this->getFndCajaEgreso()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(FndCajaEgreso::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getFndCajaEgreso()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM fnd_chq_cheque'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'fnd_chq_cheque';");
            
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

            $obs = self::getFndChqCheques($paginador, $criterio);
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

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
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

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fnd_chq_chequera_id' */ 	
	static function getOxFndChqChequeraId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CHQ_CHEQUERA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fnd_chq_chequera_id' */ 	
	static function getOsxFndChqChequeraId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CHQ_CHEQUERA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_banco_id' */ 	
	static function getOxGralBancoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_BANCO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_banco_id' */ 	
	static function getOsxGralBancoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_BANCO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo_sucursal' */ 	
	static function getOxCodigoSucursal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_SUCURSAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'codigo_sucursal' */ 	
	static function getOsxCodigoSucursal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_SUCURSAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero' */ 	
	static function getOxNumero($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'numero' */ 	
	static function getOsxNumero($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_emision' */ 	
	static function getOxFechaEmision($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_EMISION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha_emision' */ 	
	static function getOsxFechaEmision($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_EMISION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_cobro' */ 	
	static function getOxFechaCobro($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_COBRO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha_cobro' */ 	
	static function getOsxFechaCobro($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_COBRO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_acreditacion' */ 	
	static function getOxFechaAcreditacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_ACREDITACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha_acreditacion' */ 	
	static function getOsxFechaAcreditacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_ACREDITACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_vencimiento' */ 	
	static function getOxFechaVencimiento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_VENCIMIENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha_vencimiento' */ 	
	static function getOsxFechaVencimiento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_VENCIMIENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'firmante' */ 	
	static function getOxFirmante($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FIRMANTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'firmante' */ 	
	static function getOsxFirmante($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FIRMANTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'entregador' */ 	
	static function getOxEntregador($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ENTREGADOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'entregador' */ 	
	static function getOsxEntregador($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ENTREGADOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fnd_chq_tipo_emisor_id' */ 	
	static function getOxFndChqTipoEmisorId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CHQ_TIPO_EMISOR_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fnd_chq_tipo_emisor_id' */ 	
	static function getOsxFndChqTipoEmisorId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CHQ_TIPO_EMISOR_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fnd_chq_tipo_emision_id' */ 	
	static function getOxFndChqTipoEmisionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CHQ_TIPO_EMISION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fnd_chq_tipo_emision_id' */ 	
	static function getOsxFndChqTipoEmisionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CHQ_TIPO_EMISION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fnd_chq_tipo_pago_id' */ 	
	static function getOxFndChqTipoPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CHQ_TIPO_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fnd_chq_tipo_pago_id' */ 	
	static function getOsxFndChqTipoPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CHQ_TIPO_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fnd_chq_tipo_estado_id' */ 	
	static function getOxFndChqTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CHQ_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fnd_chq_tipo_estado_id' */ 	
	static function getOsxFndChqTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CHQ_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe' */ 	
	static function getOxImporte($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe' */ 	
	static function getOsxImporte($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cruzado' */ 	
	static function getOxCruzado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CRUZADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cruzado' */ 	
	static function getOsxCruzado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CRUZADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_recibo_id' */ 	
	static function getOxVtaReciboId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_RECIBO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_recibo_id' */ 	
	static function getOsxVtaReciboId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_RECIBO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_recibo_item_id' */ 	
	static function getOxVtaReciboItemId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_RECIBO_ITEM_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_recibo_item_id' */ 	
	static function getOsxVtaReciboItemId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_RECIBO_ITEM_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_comision_id' */ 	
	static function getOxVtaComisionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_COMISION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_comision_id' */ 	
	static function getOsxVtaComisionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_COMISION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_comision_gral_fp_forma_pago_id' */ 	
	static function getOxVtaComisionGralFpFormaPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_COMISION_GRAL_FP_FORMA_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_comision_gral_fp_forma_pago_id' */ 	
	static function getOsxVtaComisionGralFpFormaPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_COMISION_GRAL_FP_FORMA_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_orden_pago_id' */ 	
	static function getOxPdeOrdenPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_ORDEN_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_orden_pago_id' */ 	
	static function getOsxPdeOrdenPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_ORDEN_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_orden_pago_gral_fp_forma_pago_id' */ 	
	static function getOxPdeOrdenPagoGralFpFormaPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_orden_pago_gral_fp_forma_pago_id' */ 	
	static function getOsxPdeOrdenPagoGralFpFormaPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_recibo_id' */ 	
	static function getOxPdeReciboId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_RECIBO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_recibo_id' */ 	
	static function getOsxPdeReciboId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_RECIBO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_recibo_item_id' */ 	
	static function getOxPdeReciboItemId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_RECIBO_ITEM_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_recibo_item_id' */ 	
	static function getOsxPdeReciboItemId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_RECIBO_ITEM_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_ajuste_debe_id' */ 	
	static function getOxVtaAjusteDebeId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_ajuste_debe_id' */ 	
	static function getOsxVtaAjusteDebeId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_ajuste_debe_item_id' */ 	
	static function getOxVtaAjusteDebeItemId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_AJUSTE_DEBE_ITEM_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_ajuste_debe_item_id' */ 	
	static function getOsxVtaAjusteDebeItemId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_AJUSTE_DEBE_ITEM_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_ajuste_haber_id' */ 	
	static function getOxVtaAjusteHaberId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_AJUSTE_HABER_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_ajuste_haber_id' */ 	
	static function getOsxVtaAjusteHaberId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_AJUSTE_HABER_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_ajuste_haber_item_id' */ 	
	static function getOxVtaAjusteHaberItemId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_AJUSTE_HABER_ITEM_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_ajuste_haber_item_id' */ 	
	static function getOsxVtaAjusteHaberItemId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_AJUSTE_HABER_ITEM_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fnd_caja_movimiento_id' */ 	
	static function getOxFndCajaMovimientoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CAJA_MOVIMIENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fnd_caja_movimiento_id' */ 	
	static function getOsxFndCajaMovimientoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CAJA_MOVIMIENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fnd_caja_movimiento_item_id' */ 	
	static function getOxFndCajaMovimientoItemId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CAJA_MOVIMIENTO_ITEM_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fnd_caja_movimiento_item_id' */ 	
	static function getOsxFndCajaMovimientoItemId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CAJA_MOVIMIENTO_ITEM_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fnd_caja_id' */ 	
	static function getOxFndCajaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CAJA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fnd_caja_id' */ 	
	static function getOsxFndCajaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CAJA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_caja_id' */ 	
	static function getOxGralCajaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_CAJA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_caja_id' */ 	
	static function getOsxGralCajaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_CAJA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fnd_caja_ingreso_id' */ 	
	static function getOxFndCajaIngresoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CAJA_INGRESO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fnd_caja_ingreso_id' */ 	
	static function getOsxFndCajaIngresoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CAJA_INGRESO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fnd_caja_egreso_id' */ 	
	static function getOxFndCajaEgresoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CAJA_EGRESO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fnd_caja_egreso_id' */ 	
	static function getOsxFndCajaEgresoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CAJA_EGRESO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
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

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
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

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
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

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
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

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
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

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
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

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
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

            $obs = self::getFndChqCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqCheques($paginador, $criterio);
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

            $obs = self::getFndChqCheques(null, $criterio);
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

            $obs = self::getFndChqCheques($paginador, $criterio);
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

            $obs = self::getFndChqCheques($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'fnd_chq_cheque_adm');
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

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha_emision' */ 	
	public function getFechaEmisionDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFechaEmision(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaEmisionDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaEmisionDiferenciaDias();
        
            if ($fecha_hace > 0) {
                $fecha_hace = 'hace ' . abs($fecha_hace) . ' dias';
            } elseif ($fecha_hace < 0) {
                $fecha_hace = 'faltan ' . abs($fecha_hace) . ' dias';
            } else {
                $fecha_hace = 'hoy';
            }
            return $fecha_hace;
	}

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha_cobro' */ 	
	public function getFechaCobroDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFechaCobro(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaCobroDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaCobroDiferenciaDias();
        
            if ($fecha_hace > 0) {
                $fecha_hace = 'hace ' . abs($fecha_hace) . ' dias';
            } elseif ($fecha_hace < 0) {
                $fecha_hace = 'faltan ' . abs($fecha_hace) . ' dias';
            } else {
                $fecha_hace = 'hoy';
            }
            return $fecha_hace;
	}

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha_acreditacion' */ 	
	public function getFechaAcreditacionDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFechaAcreditacion(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaAcreditacionDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaAcreditacionDiferenciaDias();
        
            if ($fecha_hace > 0) {
                $fecha_hace = 'hace ' . abs($fecha_hace) . ' dias';
            } elseif ($fecha_hace < 0) {
                $fecha_hace = 'faltan ' . abs($fecha_hace) . ' dias';
            } else {
                $fecha_hace = 'hoy';
            }
            return $fecha_hace;
	}

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha_vencimiento' */ 	
	public function getFechaVencimientoDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFechaVencimiento(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaVencimientoDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaVencimientoDiferenciaDias();
        
            if ($fecha_hace > 0) {
                $fecha_hace = 'hace ' . abs($fecha_hace) . ' dias';
            } elseif ($fecha_hace < 0) {
                $fecha_hace = 'faltan ' . abs($fecha_hace) . ' dias';
            } else {
                $fecha_hace = 'hoy';
            }
            return $fecha_hace;
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
                $c->addTabla(FndChqCheque::GEN_TABLA);
                $c->addOrden(FndChqCheque::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $fnd_chq_cheques = FndChqCheque::getFndChqCheques(null, $c);

                $arr = array();
                foreach($fnd_chq_cheques as $fnd_chq_cheque){
                    $descripcion = $fnd_chq_cheque->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>