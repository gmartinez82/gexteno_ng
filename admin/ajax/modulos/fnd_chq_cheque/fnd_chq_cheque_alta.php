<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA')){
    echo "No tiene asignada la credencial FND_CHQ_CHEQUE_ALTA. ";
    return false;
}

$db_nombre_objeto = 'fnd_chq_cheque';
$db_nombre_pagina = 'fnd_chq_cheque_alta';

$fnd_chq_cheque = new FndChqCheque();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$fnd_chq_cheque = new FndChqCheque();
	if(trim($hdn_id) != '') $fnd_chq_cheque->setId($hdn_id, false);
	$fnd_chq_cheque->setDescripcion(Gral::getVars(1, "fnd_chq_cheque_txt_descripcion"));
	$fnd_chq_cheque->setFndChqChequeraId(Gral::getVars(1, "fnd_chq_cheque_cmb_fnd_chq_chequera_id", null));
	$fnd_chq_cheque->setGralBancoId(Gral::getVars(1, "fnd_chq_cheque_cmb_gral_banco_id", null));
	$fnd_chq_cheque->setCodigoSucursal(Gral::getVars(1, "fnd_chq_cheque_txt_codigo_sucursal"));
	$fnd_chq_cheque->setNumero(Gral::getVars(1, "fnd_chq_cheque_txt_numero"));
	$fnd_chq_cheque->setFechaEmision(Gral::getFechaToDb(Gral::getVars(1, "fnd_chq_cheque_txt_fecha_emision")));
	$fnd_chq_cheque->setFechaCobro(Gral::getFechaToDb(Gral::getVars(1, "fnd_chq_cheque_txt_fecha_cobro")));
	$fnd_chq_cheque->setFechaAcreditacion(Gral::getFechaToDb(Gral::getVars(1, "fnd_chq_cheque_txt_fecha_acreditacion")));
	$fnd_chq_cheque->setFechaVencimiento(Gral::getFechaToDb(Gral::getVars(1, "fnd_chq_cheque_txt_fecha_vencimiento")));
	$fnd_chq_cheque->setFirmante(Gral::getVars(1, "fnd_chq_cheque_txt_firmante"));
	$fnd_chq_cheque->setEntregador(Gral::getVars(1, "fnd_chq_cheque_txt_entregador"));
	$fnd_chq_cheque->setFndChqTipoEmisorId(Gral::getVars(1, "fnd_chq_cheque_cmb_fnd_chq_tipo_emisor_id", null));
	$fnd_chq_cheque->setFndChqTipoEmisionId(Gral::getVars(1, "fnd_chq_cheque_cmb_fnd_chq_tipo_emision_id", null));
	$fnd_chq_cheque->setFndChqTipoPagoId(Gral::getVars(1, "fnd_chq_cheque_cmb_fnd_chq_tipo_pago_id", null));
	$fnd_chq_cheque->setFndChqTipoEstadoId(Gral::getVars(1, "fnd_chq_cheque_cmb_fnd_chq_tipo_estado_id", null));
	$fnd_chq_cheque->setImporte(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "fnd_chq_cheque_txt_importe", 0)));
	$fnd_chq_cheque->setCruzado(Gral::getVars(1, "fnd_chq_cheque_cmb_cruzado", 0));
	$fnd_chq_cheque->setVtaReciboId(Gral::getVars(1, "fnd_chq_cheque_cmb_vta_recibo_id", null));
	$fnd_chq_cheque->setVtaReciboItemId(Gral::getVars(1, "fnd_chq_cheque_cmb_vta_recibo_item_id", null));
	$fnd_chq_cheque->setVtaComisionId(Gral::getVars(1, "fnd_chq_cheque_cmb_vta_comision_id", null));
	$fnd_chq_cheque->setVtaComisionGralFpFormaPagoId(Gral::getVars(1, "fnd_chq_cheque_cmb_vta_comision_gral_fp_forma_pago_id", null));
	$fnd_chq_cheque->setPdeOrdenPagoId(Gral::getVars(1, "fnd_chq_cheque_cmb_pde_orden_pago_id", null));
	$fnd_chq_cheque->setPdeOrdenPagoGralFpFormaPagoId(Gral::getVars(1, "fnd_chq_cheque_cmb_pde_orden_pago_gral_fp_forma_pago_id", null));
	$fnd_chq_cheque->setPdeReciboId(Gral::getVars(1, "fnd_chq_cheque_cmb_pde_recibo_id", null));
	$fnd_chq_cheque->setPdeReciboItemId(Gral::getVars(1, "fnd_chq_cheque_cmb_pde_recibo_item_id", null));
	$fnd_chq_cheque->setFndCajaMovimientoId(Gral::getVars(1, "fnd_chq_cheque_cmb_fnd_caja_movimiento_id", null));
	$fnd_chq_cheque->setFndCajaMovimientoItemId(Gral::getVars(1, "fnd_chq_cheque_cmb_fnd_caja_movimiento_item_id", null));
	$fnd_chq_cheque->setFndCajaId(Gral::getVars(1, "fnd_chq_cheque_cmb_fnd_caja_id", null));
	$fnd_chq_cheque->setGralCajaId(Gral::getVars(1, "fnd_chq_cheque_cmb_gral_caja_id", null));
	$fnd_chq_cheque->setFndCajaIngresoId(Gral::getVars(1, "fnd_chq_cheque_cmb_fnd_caja_ingreso_id", null));
	$fnd_chq_cheque->setFndCajaEgresoId(Gral::getVars(1, "fnd_chq_cheque_cmb_fnd_caja_egreso_id", null));
	$fnd_chq_cheque->setCodigo(Gral::getVars(1, "fnd_chq_cheque_txt_codigo"));
	$fnd_chq_cheque->setObservacion(Gral::getVars(1, "fnd_chq_cheque_txa_observacion"));
	$fnd_chq_cheque->setOrden(Gral::getVars(1, "fnd_chq_cheque_txt_orden", 0));
	$fnd_chq_cheque->setEstado(Gral::getVars(1, "fnd_chq_cheque__estado", 0));
	$fnd_chq_cheque->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "fnd_chq_cheque_txt_creado")));
	$fnd_chq_cheque->setCreadoPor(Gral::getVars(1, "fnd_chq_cheque__creado_por", 0));
	$fnd_chq_cheque->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "fnd_chq_cheque_txt_modificado")));
	$fnd_chq_cheque->setModificadoPor(Gral::getVars(1, "fnd_chq_cheque__modificado_por", 0));

	$fnd_chq_cheque_estado = new FndChqCheque();
	if(trim($hdn_id) != ''){
		$fnd_chq_cheque_estado->setId($hdn_id);
		$fnd_chq_cheque->setEstado($fnd_chq_cheque_estado->getEstado());
				
	}else{
		$fnd_chq_cheque->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $fnd_chq_cheque->control();
			if(!$error->getExisteError()){
				$fnd_chq_cheque->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: fnd_chq_cheque_alta.php?cs=1&id='.$fnd_chq_cheque->getId());
			}
		break;
		case 'guardarnvo':
			$error = $fnd_chq_cheque->control();
			if(!$error->getExisteError()){
				$fnd_chq_cheque->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: fnd_chq_cheque_alta.php?cs=1');
				$fnd_chq_cheque = new FndChqCheque();
			}
		break;
	}
	Gral::setSes('FndChqCheque_ULTIMO_INSERTADO', $fnd_chq_cheque->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_fnd_chq_cheque_id = Gral::getVars(2, $prefijo.'cmb_fnd_chq_cheque_id', 0);
	if($cmb_fnd_chq_cheque_id != 0){
		$fnd_chq_cheque = FndChqCheque::getOxId($cmb_fnd_chq_cheque_id);
	}else{
	
	$fnd_chq_cheque->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$fnd_chq_cheque->setFndChqChequeraId(Gral::getVars(2, "fnd_chq_chequera_id", 'null'));
	$fnd_chq_cheque->setGralBancoId(Gral::getVars(2, "gral_banco_id", 'null'));
	$fnd_chq_cheque->setCodigoSucursal(Gral::getVars(2, "codigo_sucursal", ''));
	$fnd_chq_cheque->setNumero(Gral::getVars(2, "numero", ''));
	$fnd_chq_cheque->setFechaEmision(Gral::getVars(2, "fecha_emision", date('Y-m-d')));
	$fnd_chq_cheque->setFechaCobro(Gral::getVars(2, "fecha_cobro", date('Y-m-d')));
	$fnd_chq_cheque->setFechaAcreditacion(Gral::getVars(2, "fecha_acreditacion", date('Y-m-d')));
	$fnd_chq_cheque->setFechaVencimiento(Gral::getVars(2, "fecha_vencimiento", date('Y-m-d')));
	$fnd_chq_cheque->setFirmante(Gral::getVars(2, "firmante", ''));
	$fnd_chq_cheque->setEntregador(Gral::getVars(2, "entregador", ''));
	$fnd_chq_cheque->setFndChqTipoEmisorId(Gral::getVars(2, "fnd_chq_tipo_emisor_id", 'null'));
	$fnd_chq_cheque->setFndChqTipoEmisionId(Gral::getVars(2, "fnd_chq_tipo_emision_id", 'null'));
	$fnd_chq_cheque->setFndChqTipoPagoId(Gral::getVars(2, "fnd_chq_tipo_pago_id", 'null'));
	$fnd_chq_cheque->setFndChqTipoEstadoId(Gral::getVars(2, "fnd_chq_tipo_estado_id", 'null'));
	$fnd_chq_cheque->setImporte(Gral::getVars(2, "importe", 0));
	$fnd_chq_cheque->setCruzado(Gral::getVars(2, "cruzado", 0));
	$fnd_chq_cheque->setVtaReciboId(Gral::getVars(2, "vta_recibo_id", 'null'));
	$fnd_chq_cheque->setVtaReciboItemId(Gral::getVars(2, "vta_recibo_item_id", 'null'));
	$fnd_chq_cheque->setVtaComisionId(Gral::getVars(2, "vta_comision_id", 'null'));
	$fnd_chq_cheque->setVtaComisionGralFpFormaPagoId(Gral::getVars(2, "vta_comision_gral_fp_forma_pago_id", 'null'));
	$fnd_chq_cheque->setPdeOrdenPagoId(Gral::getVars(2, "pde_orden_pago_id", 'null'));
	$fnd_chq_cheque->setPdeOrdenPagoGralFpFormaPagoId(Gral::getVars(2, "pde_orden_pago_gral_fp_forma_pago_id", 'null'));
	$fnd_chq_cheque->setPdeReciboId(Gral::getVars(2, "pde_recibo_id", 'null'));
	$fnd_chq_cheque->setPdeReciboItemId(Gral::getVars(2, "pde_recibo_item_id", 'null'));
	$fnd_chq_cheque->setFndCajaMovimientoId(Gral::getVars(2, "fnd_caja_movimiento_id", 'null'));
	$fnd_chq_cheque->setFndCajaMovimientoItemId(Gral::getVars(2, "fnd_caja_movimiento_item_id", 'null'));
	$fnd_chq_cheque->setFndCajaId(Gral::getVars(2, "fnd_caja_id", 'null'));
	$fnd_chq_cheque->setGralCajaId(Gral::getVars(2, "gral_caja_id", 'null'));
	$fnd_chq_cheque->setFndCajaIngresoId(Gral::getVars(2, "fnd_caja_ingreso_id", 'null'));
	$fnd_chq_cheque->setFndCajaEgresoId(Gral::getVars(2, "fnd_caja_egreso_id", 'null'));
	$fnd_chq_cheque->setCodigo(Gral::getVars(2, "codigo", ''));
	$fnd_chq_cheque->setObservacion(Gral::getVars(2, "observacion", ''));
	$fnd_chq_cheque->setOrden(Gral::getVars(2, "orden", 0));
	$fnd_chq_cheque->setEstado(Gral::getVars(2, "estado", 0));
	$fnd_chq_cheque->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$fnd_chq_cheque->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$fnd_chq_cheque->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$fnd_chq_cheque->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $fnd_chq_cheque->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/fnd_chq_cheque/fnd_chq_cheque_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_fnd_chq_cheque' width='90%'>
        
				<tr>
				  <td  id="label_fnd_chq_cheque_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_chq_cheque_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='fnd_chq_cheque_txt_descripcion' value='<?php Gral::_echoTxt($fnd_chq_cheque->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_fnd_chq_cheque_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_cheque_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_cheque_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_cheque_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_cmb_fnd_chq_chequera_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fnd_chq_chequera_id' ?>" >
				  
                                        <?php Lang::_lang('FndChqChequera', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_cmb_fnd_chq_chequera_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fnd_chq_chequera_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_cheque_cmb_fnd_chq_chequera_id', Gral::getCmbFiltro(FndChqChequera::getFndChqChequerasCmb(), '...'), $fnd_chq_cheque->getFndChqChequeraId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA_CMB_EDIT_FND_CHQ_CHEQUERA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="fnd_chq_cheque_cmb_fnd_chq_chequera_id" clase_id="fnd_chq_chequera" prefijo='fnd_chq_cheque_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_fnd_chq_chequera_id" <?php echo ($fnd_chq_cheque->getFndChqChequeraId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="fnd_chq_cheque_cmb_fnd_chq_chequera_id" clase_id="fnd_chq_chequera" prefijo='fnd_chq_cheque_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_fnd_chq_cheque_cmb_fnd_chq_chequera_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_fnd_chq_cheque_alta_fnd_chq_chequera_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_cheque_alta_fnd_chq_chequera_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_cheque_alta_fnd_chq_chequera_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_cheque_alta_fnd_chq_chequera_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fnd_chq_chequera_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_cmb_gral_banco_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_banco_id' ?>" >
				  
                                        <?php Lang::_lang('GralBanco', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_cmb_gral_banco_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_banco_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_cheque_cmb_gral_banco_id', Gral::getCmbFiltro(GralBanco::getGralBancosCmb(), '...'), $fnd_chq_cheque->getGralBancoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA_CMB_EDIT_GRAL_BANCO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="fnd_chq_cheque_cmb_gral_banco_id" clase_id="gral_banco" prefijo='fnd_chq_cheque_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_banco_id" <?php echo ($fnd_chq_cheque->getGralBancoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="fnd_chq_cheque_cmb_gral_banco_id" clase_id="gral_banco" prefijo='fnd_chq_cheque_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_fnd_chq_cheque_cmb_gral_banco_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_fnd_chq_cheque_alta_gral_banco_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_cheque_alta_gral_banco_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_cheque_alta_gral_banco_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_cheque_alta_gral_banco_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_banco_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_txt_codigo_sucursal" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo_sucursal' ?>" >
				  
                                        <?php Lang::_lang('Codigo Sucursal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_txt_codigo_sucursal" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo_sucursal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_chq_cheque_txt_codigo_sucursal' type='text' class='textbox <?php echo $error_input_css ?> ' id='fnd_chq_cheque_txt_codigo_sucursal' value='<?php Gral::_echoTxt($fnd_chq_cheque->getCodigoSucursal(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_fnd_chq_cheque_alta_codigo_sucursal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_cheque_alta_codigo_sucursal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_cheque_alta_codigo_sucursal', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_cheque_alta_codigo_sucursal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo_sucursal')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_txt_numero" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_numero' ?>" >
				  
                                        <?php Lang::_lang('Numero', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_txt_numero" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('numero')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_chq_cheque_txt_numero' type='text' class='textbox <?php echo $error_input_css ?> ' id='fnd_chq_cheque_txt_numero' value='<?php Gral::_echoTxt($fnd_chq_cheque->getNumero(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_fnd_chq_cheque_alta_numero', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_cheque_alta_numero', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_cheque_alta_numero', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_cheque_alta_numero', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('numero')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_txt_fecha_emision" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_emision' ?>" >
				  
                                        <?php Lang::_lang('Fecha Emision', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_txt_fecha_emision" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_emision')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_chq_cheque_txt_fecha_emision' type='text' class='textbox <?php echo $error_input_css ?> date' id='fnd_chq_cheque_txt_fecha_emision' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($fnd_chq_cheque->getFechaEmision()), true) ?>' size='40' />
					<input type='button' id='cal_fnd_chq_cheque_txt_fecha_emision' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'fnd_chq_cheque_txt_fecha_emision', ifFormat: '%d/%m/%Y', button: 'cal_fnd_chq_cheque_txt_fecha_emision'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_fnd_chq_cheque_alta_fecha_emision', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_cheque_alta_fecha_emision', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_cheque_alta_fecha_emision', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_cheque_alta_fecha_emision', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_emision')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_txt_fecha_cobro" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_cobro' ?>" >
				  
                                        <?php Lang::_lang('Fecha Cobro', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_txt_fecha_cobro" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_cobro')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_chq_cheque_txt_fecha_cobro' type='text' class='textbox <?php echo $error_input_css ?> date' id='fnd_chq_cheque_txt_fecha_cobro' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($fnd_chq_cheque->getFechaCobro()), true) ?>' size='40' />
					<input type='button' id='cal_fnd_chq_cheque_txt_fecha_cobro' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'fnd_chq_cheque_txt_fecha_cobro', ifFormat: '%d/%m/%Y', button: 'cal_fnd_chq_cheque_txt_fecha_cobro'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_fnd_chq_cheque_alta_fecha_cobro', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_cheque_alta_fecha_cobro', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_cheque_alta_fecha_cobro', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_cheque_alta_fecha_cobro', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_cobro')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_txt_fecha_acreditacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_acreditacion' ?>" >
				  
                                        <?php Lang::_lang('Fecha Acreditacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_txt_fecha_acreditacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_acreditacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_chq_cheque_txt_fecha_acreditacion' type='text' class='textbox <?php echo $error_input_css ?> date' id='fnd_chq_cheque_txt_fecha_acreditacion' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($fnd_chq_cheque->getFechaAcreditacion()), true) ?>' size='40' />
					<input type='button' id='cal_fnd_chq_cheque_txt_fecha_acreditacion' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'fnd_chq_cheque_txt_fecha_acreditacion', ifFormat: '%d/%m/%Y', button: 'cal_fnd_chq_cheque_txt_fecha_acreditacion'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_fnd_chq_cheque_alta_fecha_acreditacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_cheque_alta_fecha_acreditacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_cheque_alta_fecha_acreditacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_cheque_alta_fecha_acreditacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_acreditacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_txt_fecha_vencimiento" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_vencimiento' ?>" >
				  
                                        <?php Lang::_lang('Fecha Vencimiento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_txt_fecha_vencimiento" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_vencimiento')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_chq_cheque_txt_fecha_vencimiento' type='text' class='textbox <?php echo $error_input_css ?> date' id='fnd_chq_cheque_txt_fecha_vencimiento' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($fnd_chq_cheque->getFechaVencimiento()), true) ?>' size='40' />
					<input type='button' id='cal_fnd_chq_cheque_txt_fecha_vencimiento' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'fnd_chq_cheque_txt_fecha_vencimiento', ifFormat: '%d/%m/%Y', button: 'cal_fnd_chq_cheque_txt_fecha_vencimiento'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_fnd_chq_cheque_alta_fecha_vencimiento', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_cheque_alta_fecha_vencimiento', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_cheque_alta_fecha_vencimiento', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_cheque_alta_fecha_vencimiento', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_vencimiento')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_txt_firmante" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_firmante' ?>" >
				  
                                        <?php Lang::_lang('Firmante', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_txt_firmante" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('firmante')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_chq_cheque_txt_firmante' type='text' class='textbox <?php echo $error_input_css ?> ' id='fnd_chq_cheque_txt_firmante' value='<?php Gral::_echoTxt($fnd_chq_cheque->getFirmante(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_fnd_chq_cheque_alta_firmante', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_cheque_alta_firmante', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_cheque_alta_firmante', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_cheque_alta_firmante', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('firmante')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_txt_entregador" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_entregador' ?>" >
				  
                                        <?php Lang::_lang('Entregador', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_txt_entregador" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('entregador')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_chq_cheque_txt_entregador' type='text' class='textbox <?php echo $error_input_css ?> ' id='fnd_chq_cheque_txt_entregador' value='<?php Gral::_echoTxt($fnd_chq_cheque->getEntregador(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_fnd_chq_cheque_alta_entregador', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_cheque_alta_entregador', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_cheque_alta_entregador', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_cheque_alta_entregador', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('entregador')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_cmb_fnd_chq_tipo_emisor_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fnd_chq_tipo_emisor_id' ?>" >
				  
                                        <?php Lang::_lang('FndChqTipoEmisor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_cmb_fnd_chq_tipo_emisor_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fnd_chq_tipo_emisor_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_cheque_cmb_fnd_chq_tipo_emisor_id', Gral::getCmbFiltro(FndChqTipoEmisor::getFndChqTipoEmisorsCmb(), '...'), $fnd_chq_cheque->getFndChqTipoEmisorId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA_CMB_EDIT_FND_CHQ_TIPO_EMISOR')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="fnd_chq_cheque_cmb_fnd_chq_tipo_emisor_id" clase_id="fnd_chq_tipo_emisor" prefijo='fnd_chq_cheque_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_fnd_chq_tipo_emisor_id" <?php echo ($fnd_chq_cheque->getFndChqTipoEmisorId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="fnd_chq_cheque_cmb_fnd_chq_tipo_emisor_id" clase_id="fnd_chq_tipo_emisor" prefijo='fnd_chq_cheque_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_fnd_chq_cheque_cmb_fnd_chq_tipo_emisor_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_fnd_chq_cheque_alta_fnd_chq_tipo_emisor_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_cheque_alta_fnd_chq_tipo_emisor_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_cheque_alta_fnd_chq_tipo_emisor_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_cheque_alta_fnd_chq_tipo_emisor_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fnd_chq_tipo_emisor_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_cmb_fnd_chq_tipo_emision_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fnd_chq_tipo_emision_id' ?>" >
				  
                                        <?php Lang::_lang('FndChqTipoEmision', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_cmb_fnd_chq_tipo_emision_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fnd_chq_tipo_emision_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_cheque_cmb_fnd_chq_tipo_emision_id', Gral::getCmbFiltro(FndChqTipoEmision::getFndChqTipoEmisionsCmb(), '...'), $fnd_chq_cheque->getFndChqTipoEmisionId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA_CMB_EDIT_FND_CHQ_TIPO_EMISION')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="fnd_chq_cheque_cmb_fnd_chq_tipo_emision_id" clase_id="fnd_chq_tipo_emision" prefijo='fnd_chq_cheque_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_fnd_chq_tipo_emision_id" <?php echo ($fnd_chq_cheque->getFndChqTipoEmisionId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="fnd_chq_cheque_cmb_fnd_chq_tipo_emision_id" clase_id="fnd_chq_tipo_emision" prefijo='fnd_chq_cheque_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_fnd_chq_cheque_cmb_fnd_chq_tipo_emision_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_fnd_chq_cheque_alta_fnd_chq_tipo_emision_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_cheque_alta_fnd_chq_tipo_emision_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_cheque_alta_fnd_chq_tipo_emision_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_cheque_alta_fnd_chq_tipo_emision_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fnd_chq_tipo_emision_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_cmb_fnd_chq_tipo_pago_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fnd_chq_tipo_pago_id' ?>" >
				  
                                        <?php Lang::_lang('FndChqTipoPago', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_cmb_fnd_chq_tipo_pago_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fnd_chq_tipo_pago_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_cheque_cmb_fnd_chq_tipo_pago_id', Gral::getCmbFiltro(FndChqTipoPago::getFndChqTipoPagosCmb(), '...'), $fnd_chq_cheque->getFndChqTipoPagoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA_CMB_EDIT_FND_CHQ_TIPO_PAGO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="fnd_chq_cheque_cmb_fnd_chq_tipo_pago_id" clase_id="fnd_chq_tipo_pago" prefijo='fnd_chq_cheque_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_fnd_chq_tipo_pago_id" <?php echo ($fnd_chq_cheque->getFndChqTipoPagoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="fnd_chq_cheque_cmb_fnd_chq_tipo_pago_id" clase_id="fnd_chq_tipo_pago" prefijo='fnd_chq_cheque_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_fnd_chq_cheque_cmb_fnd_chq_tipo_pago_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_fnd_chq_cheque_alta_fnd_chq_tipo_pago_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_cheque_alta_fnd_chq_tipo_pago_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_cheque_alta_fnd_chq_tipo_pago_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_cheque_alta_fnd_chq_tipo_pago_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fnd_chq_tipo_pago_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_cmb_fnd_chq_tipo_estado_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fnd_chq_tipo_estado_id' ?>" >
				  
                                        <?php Lang::_lang('FndChqTipoEstado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_cmb_fnd_chq_tipo_estado_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fnd_chq_tipo_estado_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_cheque_cmb_fnd_chq_tipo_estado_id', Gral::getCmbFiltro(FndChqTipoEstado::getFndChqTipoEstadosCmb(), '...'), $fnd_chq_cheque->getFndChqTipoEstadoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA_CMB_EDIT_FND_CHQ_TIPO_ESTADO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="fnd_chq_cheque_cmb_fnd_chq_tipo_estado_id" clase_id="fnd_chq_tipo_estado" prefijo='fnd_chq_cheque_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_fnd_chq_tipo_estado_id" <?php echo ($fnd_chq_cheque->getFndChqTipoEstadoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="fnd_chq_cheque_cmb_fnd_chq_tipo_estado_id" clase_id="fnd_chq_tipo_estado" prefijo='fnd_chq_cheque_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_fnd_chq_cheque_cmb_fnd_chq_tipo_estado_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_fnd_chq_cheque_alta_fnd_chq_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_cheque_alta_fnd_chq_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_cheque_alta_fnd_chq_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_cheque_alta_fnd_chq_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fnd_chq_tipo_estado_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_cmb_cruzado" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cruzado' ?>" >
				  
                                        <?php Lang::_lang('Cruzado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_cmb_cruzado" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cruzado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_cheque_cmb_cruzado', GralSiNo::getGralSiNosCmb(), $fnd_chq_cheque->getCruzado(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_fnd_chq_cheque_alta_cruzado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_cheque_alta_cruzado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_cheque_alta_cruzado', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_cheque_alta_cruzado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cruzado')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_cmb_vta_recibo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_recibo_id' ?>" >
				  
                                        <?php Lang::_lang('VtaRecibo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_cmb_vta_recibo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_recibo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_cheque_cmb_vta_recibo_id', Gral::getCmbFiltro(VtaRecibo::getVtaRecibosCmb(), '...'), $fnd_chq_cheque->getVtaReciboId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA_CMB_EDIT_VTA_RECIBO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="fnd_chq_cheque_cmb_vta_recibo_id" clase_id="vta_recibo" prefijo='fnd_chq_cheque_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_recibo_id" <?php echo ($fnd_chq_cheque->getVtaReciboId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="fnd_chq_cheque_cmb_vta_recibo_id" clase_id="vta_recibo" prefijo='fnd_chq_cheque_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_fnd_chq_cheque_cmb_vta_recibo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_fnd_chq_cheque_alta_vta_recibo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_cheque_alta_vta_recibo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_cheque_alta_vta_recibo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_cheque_alta_vta_recibo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_recibo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_cmb_vta_recibo_item_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_recibo_item_id' ?>" >
				  
                                        <?php Lang::_lang('VtaReciboItem', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_cmb_vta_recibo_item_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_recibo_item_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_cheque_cmb_vta_recibo_item_id', Gral::getCmbFiltro(VtaReciboItem::getVtaReciboItemsCmb(), '...'), $fnd_chq_cheque->getVtaReciboItemId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA_CMB_EDIT_VTA_RECIBO_ITEM')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="fnd_chq_cheque_cmb_vta_recibo_item_id" clase_id="vta_recibo_item" prefijo='fnd_chq_cheque_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_recibo_item_id" <?php echo ($fnd_chq_cheque->getVtaReciboItemId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="fnd_chq_cheque_cmb_vta_recibo_item_id" clase_id="vta_recibo_item" prefijo='fnd_chq_cheque_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_fnd_chq_cheque_cmb_vta_recibo_item_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_fnd_chq_cheque_alta_vta_recibo_item_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_cheque_alta_vta_recibo_item_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_cheque_alta_vta_recibo_item_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_cheque_alta_vta_recibo_item_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_recibo_item_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_cmb_vta_comision_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_comision_id' ?>" >
				  
                                        <?php Lang::_lang('VtaComision', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_cmb_vta_comision_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_comision_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_cheque_cmb_vta_comision_id', Gral::getCmbFiltro(VtaComision::getVtaComisionsCmb(), '...'), $fnd_chq_cheque->getVtaComisionId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA_CMB_EDIT_VTA_COMISION')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="fnd_chq_cheque_cmb_vta_comision_id" clase_id="vta_comision" prefijo='fnd_chq_cheque_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_comision_id" <?php echo ($fnd_chq_cheque->getVtaComisionId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="fnd_chq_cheque_cmb_vta_comision_id" clase_id="vta_comision" prefijo='fnd_chq_cheque_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_fnd_chq_cheque_cmb_vta_comision_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_fnd_chq_cheque_alta_vta_comision_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_cheque_alta_vta_comision_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_cheque_alta_vta_comision_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_cheque_alta_vta_comision_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_comision_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_cmb_vta_comision_gral_fp_forma_pago_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_comision_gral_fp_forma_pago_id' ?>" >
				  
                                        <?php Lang::_lang('VtaComisionGralFpFormaPago', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_cmb_vta_comision_gral_fp_forma_pago_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_comision_gral_fp_forma_pago_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_cheque_cmb_vta_comision_gral_fp_forma_pago_id', Gral::getCmbFiltro(VtaComisionGralFpFormaPago::getVtaComisionGralFpFormaPagosCmb(), '...'), $fnd_chq_cheque->getVtaComisionGralFpFormaPagoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA_CMB_EDIT_VTA_COMISION_GRAL_FP_FORMA_PAGO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="fnd_chq_cheque_cmb_vta_comision_gral_fp_forma_pago_id" clase_id="vta_comision_gral_fp_forma_pago" prefijo='fnd_chq_cheque_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_comision_gral_fp_forma_pago_id" <?php echo ($fnd_chq_cheque->getVtaComisionGralFpFormaPagoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="fnd_chq_cheque_cmb_vta_comision_gral_fp_forma_pago_id" clase_id="vta_comision_gral_fp_forma_pago" prefijo='fnd_chq_cheque_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_fnd_chq_cheque_cmb_vta_comision_gral_fp_forma_pago_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_fnd_chq_cheque_alta_vta_comision_gral_fp_forma_pago_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_cheque_alta_vta_comision_gral_fp_forma_pago_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_cheque_alta_vta_comision_gral_fp_forma_pago_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_cheque_alta_vta_comision_gral_fp_forma_pago_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_comision_gral_fp_forma_pago_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_cmb_pde_orden_pago_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_orden_pago_id' ?>" >
				  
                                        <?php Lang::_lang('OrdenPago', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_cmb_pde_orden_pago_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_orden_pago_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_cheque_cmb_pde_orden_pago_id', Gral::getCmbFiltro(PdeOrdenPago::getPdeOrdenPagosCmb(), '...'), $fnd_chq_cheque->getPdeOrdenPagoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA_CMB_EDIT_PDE_ORDEN_PAGO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="fnd_chq_cheque_cmb_pde_orden_pago_id" clase_id="pde_orden_pago" prefijo='fnd_chq_cheque_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_orden_pago_id" <?php echo ($fnd_chq_cheque->getPdeOrdenPagoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="fnd_chq_cheque_cmb_pde_orden_pago_id" clase_id="pde_orden_pago" prefijo='fnd_chq_cheque_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_fnd_chq_cheque_cmb_pde_orden_pago_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_fnd_chq_cheque_alta_pde_orden_pago_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_cheque_alta_pde_orden_pago_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_cheque_alta_pde_orden_pago_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_cheque_alta_pde_orden_pago_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_orden_pago_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_cmb_pde_orden_pago_gral_fp_forma_pago_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_orden_pago_gral_fp_forma_pago_id' ?>" >
				  
                                        <?php Lang::_lang('PdeOrdenPagoGralFpFormaPago', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_cmb_pde_orden_pago_gral_fp_forma_pago_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_orden_pago_gral_fp_forma_pago_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_cheque_cmb_pde_orden_pago_gral_fp_forma_pago_id', Gral::getCmbFiltro(PdeOrdenPagoGralFpFormaPago::getPdeOrdenPagoGralFpFormaPagosCmb(), '...'), $fnd_chq_cheque->getPdeOrdenPagoGralFpFormaPagoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA_CMB_EDIT_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="fnd_chq_cheque_cmb_pde_orden_pago_gral_fp_forma_pago_id" clase_id="pde_orden_pago_gral_fp_forma_pago" prefijo='fnd_chq_cheque_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_orden_pago_gral_fp_forma_pago_id" <?php echo ($fnd_chq_cheque->getPdeOrdenPagoGralFpFormaPagoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="fnd_chq_cheque_cmb_pde_orden_pago_gral_fp_forma_pago_id" clase_id="pde_orden_pago_gral_fp_forma_pago" prefijo='fnd_chq_cheque_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_fnd_chq_cheque_cmb_pde_orden_pago_gral_fp_forma_pago_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_fnd_chq_cheque_alta_pde_orden_pago_gral_fp_forma_pago_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_cheque_alta_pde_orden_pago_gral_fp_forma_pago_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_cheque_alta_pde_orden_pago_gral_fp_forma_pago_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_cheque_alta_pde_orden_pago_gral_fp_forma_pago_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_orden_pago_gral_fp_forma_pago_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_cmb_pde_recibo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_recibo_id' ?>" >
				  
                                        <?php Lang::_lang('PdeRecibo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_cmb_pde_recibo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_recibo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_cheque_cmb_pde_recibo_id', Gral::getCmbFiltro(PdeRecibo::getPdeRecibosCmb(), '...'), $fnd_chq_cheque->getPdeReciboId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA_CMB_EDIT_PDE_RECIBO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="fnd_chq_cheque_cmb_pde_recibo_id" clase_id="pde_recibo" prefijo='fnd_chq_cheque_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_recibo_id" <?php echo ($fnd_chq_cheque->getPdeReciboId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="fnd_chq_cheque_cmb_pde_recibo_id" clase_id="pde_recibo" prefijo='fnd_chq_cheque_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_fnd_chq_cheque_cmb_pde_recibo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_fnd_chq_cheque_alta_pde_recibo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_cheque_alta_pde_recibo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_cheque_alta_pde_recibo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_cheque_alta_pde_recibo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_recibo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_cmb_pde_recibo_item_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_recibo_item_id' ?>" >
				  
                                        <?php Lang::_lang('PdeReciboItem', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_cmb_pde_recibo_item_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_recibo_item_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_cheque_cmb_pde_recibo_item_id', Gral::getCmbFiltro(PdeReciboItem::getPdeReciboItemsCmb(), '...'), $fnd_chq_cheque->getPdeReciboItemId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA_CMB_EDIT_PDE_RECIBO_ITEM')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="fnd_chq_cheque_cmb_pde_recibo_item_id" clase_id="pde_recibo_item" prefijo='fnd_chq_cheque_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_recibo_item_id" <?php echo ($fnd_chq_cheque->getPdeReciboItemId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="fnd_chq_cheque_cmb_pde_recibo_item_id" clase_id="pde_recibo_item" prefijo='fnd_chq_cheque_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_fnd_chq_cheque_cmb_pde_recibo_item_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_fnd_chq_cheque_alta_pde_recibo_item_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_cheque_alta_pde_recibo_item_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_cheque_alta_pde_recibo_item_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_cheque_alta_pde_recibo_item_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_recibo_item_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_cmb_fnd_caja_movimiento_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fnd_caja_movimiento_id' ?>" >
				  
                                        <?php Lang::_lang('FndCajaMovimiento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_cmb_fnd_caja_movimiento_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fnd_caja_movimiento_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_cheque_cmb_fnd_caja_movimiento_id', Gral::getCmbFiltro(FndCajaMovimiento::getFndCajaMovimientosCmb(), '...'), $fnd_chq_cheque->getFndCajaMovimientoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA_CMB_EDIT_FND_CAJA_MOVIMIENTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="fnd_chq_cheque_cmb_fnd_caja_movimiento_id" clase_id="fnd_caja_movimiento" prefijo='fnd_chq_cheque_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_fnd_caja_movimiento_id" <?php echo ($fnd_chq_cheque->getFndCajaMovimientoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="fnd_chq_cheque_cmb_fnd_caja_movimiento_id" clase_id="fnd_caja_movimiento" prefijo='fnd_chq_cheque_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_fnd_chq_cheque_cmb_fnd_caja_movimiento_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_fnd_chq_cheque_alta_fnd_caja_movimiento_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_cheque_alta_fnd_caja_movimiento_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_cheque_alta_fnd_caja_movimiento_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_cheque_alta_fnd_caja_movimiento_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fnd_caja_movimiento_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_cmb_fnd_caja_movimiento_item_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fnd_caja_movimiento_item_id' ?>" >
				  
                                        <?php Lang::_lang('FndCajaMovimientoItem', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_cmb_fnd_caja_movimiento_item_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fnd_caja_movimiento_item_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_cheque_cmb_fnd_caja_movimiento_item_id', Gral::getCmbFiltro(FndCajaMovimientoItem::getFndCajaMovimientoItemsCmb(), '...'), $fnd_chq_cheque->getFndCajaMovimientoItemId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA_CMB_EDIT_FND_CAJA_MOVIMIENTO_ITEM')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="fnd_chq_cheque_cmb_fnd_caja_movimiento_item_id" clase_id="fnd_caja_movimiento_item" prefijo='fnd_chq_cheque_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_fnd_caja_movimiento_item_id" <?php echo ($fnd_chq_cheque->getFndCajaMovimientoItemId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="fnd_chq_cheque_cmb_fnd_caja_movimiento_item_id" clase_id="fnd_caja_movimiento_item" prefijo='fnd_chq_cheque_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_fnd_chq_cheque_cmb_fnd_caja_movimiento_item_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_fnd_chq_cheque_alta_fnd_caja_movimiento_item_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_cheque_alta_fnd_caja_movimiento_item_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_cheque_alta_fnd_caja_movimiento_item_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_cheque_alta_fnd_caja_movimiento_item_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fnd_caja_movimiento_item_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_cmb_fnd_caja_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fnd_caja_id' ?>" >
				  
                                        <?php Lang::_lang('FndCaja', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_cmb_fnd_caja_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fnd_caja_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_cheque_cmb_fnd_caja_id', Gral::getCmbFiltro(FndCaja::getFndCajasCmb(), '...'), $fnd_chq_cheque->getFndCajaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA_CMB_EDIT_FND_CAJA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="fnd_chq_cheque_cmb_fnd_caja_id" clase_id="fnd_caja" prefijo='fnd_chq_cheque_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_fnd_caja_id" <?php echo ($fnd_chq_cheque->getFndCajaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="fnd_chq_cheque_cmb_fnd_caja_id" clase_id="fnd_caja" prefijo='fnd_chq_cheque_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_fnd_chq_cheque_cmb_fnd_caja_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_fnd_chq_cheque_alta_fnd_caja_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_cheque_alta_fnd_caja_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_cheque_alta_fnd_caja_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_cheque_alta_fnd_caja_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fnd_caja_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_cmb_gral_caja_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_caja_id' ?>" >
				  
                                        <?php Lang::_lang('GralCaja', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_cmb_gral_caja_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_caja_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_cheque_cmb_gral_caja_id', Gral::getCmbFiltro(GralCaja::getGralCajasCmb(), '...'), $fnd_chq_cheque->getGralCajaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA_CMB_EDIT_GRAL_CAJA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="fnd_chq_cheque_cmb_gral_caja_id" clase_id="gral_caja" prefijo='fnd_chq_cheque_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_caja_id" <?php echo ($fnd_chq_cheque->getGralCajaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="fnd_chq_cheque_cmb_gral_caja_id" clase_id="gral_caja" prefijo='fnd_chq_cheque_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_fnd_chq_cheque_cmb_gral_caja_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_fnd_chq_cheque_alta_gral_caja_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_cheque_alta_gral_caja_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_cheque_alta_gral_caja_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_cheque_alta_gral_caja_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_caja_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_cmb_fnd_caja_ingreso_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fnd_caja_ingreso_id' ?>" >
				  
                                        <?php Lang::_lang('FndCajaIngreso', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_cmb_fnd_caja_ingreso_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fnd_caja_ingreso_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_cheque_cmb_fnd_caja_ingreso_id', Gral::getCmbFiltro(FndCajaIngreso::getFndCajaIngresosCmb(), '...'), $fnd_chq_cheque->getFndCajaIngresoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA_CMB_EDIT_FND_CAJA_INGRESO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="fnd_chq_cheque_cmb_fnd_caja_ingreso_id" clase_id="fnd_caja_ingreso" prefijo='fnd_chq_cheque_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_fnd_caja_ingreso_id" <?php echo ($fnd_chq_cheque->getFndCajaIngresoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="fnd_chq_cheque_cmb_fnd_caja_ingreso_id" clase_id="fnd_caja_ingreso" prefijo='fnd_chq_cheque_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_fnd_chq_cheque_cmb_fnd_caja_ingreso_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_fnd_chq_cheque_alta_fnd_caja_ingreso_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_cheque_alta_fnd_caja_ingreso_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_cheque_alta_fnd_caja_ingreso_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_cheque_alta_fnd_caja_ingreso_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fnd_caja_ingreso_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_cmb_fnd_caja_egreso_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fnd_caja_egreso_id' ?>" >
				  
                                        <?php Lang::_lang('FndCajaEgreso', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_cmb_fnd_caja_egreso_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fnd_caja_egreso_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_cheque_cmb_fnd_caja_egreso_id', Gral::getCmbFiltro(FndCajaEgreso::getFndCajaEgresosCmb(), '...'), $fnd_chq_cheque->getFndCajaEgresoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA_CMB_EDIT_FND_CAJA_EGRESO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="fnd_chq_cheque_cmb_fnd_caja_egreso_id" clase_id="fnd_caja_egreso" prefijo='fnd_chq_cheque_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_fnd_caja_egreso_id" <?php echo ($fnd_chq_cheque->getFndCajaEgresoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="fnd_chq_cheque_cmb_fnd_caja_egreso_id" clase_id="fnd_caja_egreso" prefijo='fnd_chq_cheque_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_fnd_chq_cheque_cmb_fnd_caja_egreso_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_fnd_chq_cheque_alta_fnd_caja_egreso_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_cheque_alta_fnd_caja_egreso_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_cheque_alta_fnd_caja_egreso_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_cheque_alta_fnd_caja_egreso_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fnd_caja_egreso_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_chq_cheque_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='fnd_chq_cheque_txt_codigo' value='<?php Gral::_echoTxt($fnd_chq_cheque->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_fnd_chq_cheque_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_cheque_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_cheque_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_cheque_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='fnd_chq_cheque_txa_observacion' rows='10' cols='50' id='fnd_chq_cheque_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($fnd_chq_cheque->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_fnd_chq_cheque_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_cheque_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_cheque_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_cheque_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($fnd_chq_cheque->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_fnd_chq_cheque_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='fnd_chq_cheque'/>
                    <input name='hdn_prefijo' type='hidden' class='hdn_prefijo' size='1' value='<?php echo $prefijo ?>'/>

                    <input name='hdn_error' type='hidden' class='hdn_error' value='<?php echo $hdn_error ?>' />

                    <input name='btn_cerrar' type='button' class='btn_cerrar' value='<?php Lang::_lang('Cerrar') ?>' />
			  
	
                    <input name='btn_guardarnvo' type='button' class='btn_guardarnvo' value="<?php Lang::_lang('Guardar y Agregar Nuevo') ?>" />
                    <input name='btn_guardar' type='button' class='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
                </td>
            </tr>
      </table>
      
	  
</form>
</body>
</html>
<script>
    setInit();
    setInitDbSuggest();
    setInitDbContext();
</script>

