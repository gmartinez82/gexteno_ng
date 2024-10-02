<?php
//include_once '../../../control/seguridad.php';
//include_once '../../../control/saneamiento.php';
include_once '_autoload.php';

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
<form id='formu' name='formu' method='post' action='ajax/modulos/fnd_chq_cheque_gestion/fnd_chq_cheque_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>
      
	  <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_fnd_chq_cheque'>
        
				<tr>
				  <td  id="label_fnd_chq_cheque_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_chq_cheque_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='fnd_chq_cheque_txt_descripcion' value='<?php Gral::_echoTxt($fnd_chq_cheque->getDescripcion(), true) ?>' size='50' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_cmb_fnd_chq_chequera_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fnd_chq_chequera_id' ?>" >
				  
                                        <?php Lang::_lang('FndChqChequera') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fnd_chq_chequera_id', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fnd_chq_chequera_id', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_cmb_fnd_chq_chequera_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fnd_chq_chequera_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_cheque_cmb_fnd_chq_chequera_id', Gral::getCmbFiltro(FndChqChequera::getFndChqChequerasCmb(), Lang::_lang('Seleccione FndChqChequera', true)), $fnd_chq_cheque->getFndChqChequeraId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA_CMB_EDIT_FND_CHQ_CHEQUERA')){ ?>
		<img class="img_btn_editar" elemento_id="fnd_chq_cheque_cmb_fnd_chq_chequera_id" clase_id="fnd_chq_chequera" prefijo='fnd_chq_cheque_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_fnd_chq_chequera_id" <?php echo ($fnd_chq_cheque->getFndChqChequeraId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="fnd_chq_cheque_cmb_fnd_chq_chequera_id" clase_id="fnd_chq_chequera" prefijo='fnd_chq_cheque_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_fnd_chq_cheque_cmb_fnd_chq_chequera_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fnd_chq_chequera_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_cmb_gral_banco_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_banco_id' ?>" >
				  
                                        <?php Lang::_lang('GralBanco') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_gral_banco_id', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_gral_banco_id', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_cmb_gral_banco_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_banco_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_cheque_cmb_gral_banco_id', Gral::getCmbFiltro(GralBanco::getGralBancosCmb(), Lang::_lang('Seleccione GralBanco', true)), $fnd_chq_cheque->getGralBancoId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA_CMB_EDIT_GRAL_BANCO')){ ?>
		<img class="img_btn_editar" elemento_id="fnd_chq_cheque_cmb_gral_banco_id" clase_id="gral_banco" prefijo='fnd_chq_cheque_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_banco_id" <?php echo ($fnd_chq_cheque->getGralBancoId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="fnd_chq_cheque_cmb_gral_banco_id" clase_id="gral_banco" prefijo='fnd_chq_cheque_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_fnd_chq_cheque_cmb_gral_banco_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_banco_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_txt_codigo_sucursal" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo_sucursal' ?>" >
				  
                                        <?php Lang::_lang('Codigo Sucursal') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo_sucursal', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo_sucursal', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_txt_codigo_sucursal" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo_sucursal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_chq_cheque_txt_codigo_sucursal' type='text' class='textbox <?php echo $error_input_css ?> ' id='fnd_chq_cheque_txt_codigo_sucursal' value='<?php Gral::_echoTxt($fnd_chq_cheque->getCodigoSucursal(), true) ?>' size='40' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo_sucursal')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_txt_fecha_emision" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_emision' ?>" >
				  
                                        <?php Lang::_lang('Fecha Emision') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fecha_emision', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fecha_emision', false, false) ?>" />
                                        <?php } ?>
				  
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
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_emision')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_txt_fecha_cobro" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_cobro' ?>" >
				  
                                        <?php Lang::_lang('Fecha Cobro') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fecha_cobro', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fecha_cobro', false, false) ?>" />
                                        <?php } ?>
				  
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
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_cobro')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_txt_fecha_acreditacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_acreditacion' ?>" >
				  
                                        <?php Lang::_lang('Fecha Acreditacion') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fecha_acreditacion', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fecha_acreditacion', false, false) ?>" />
                                        <?php } ?>
				  
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
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_acreditacion')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_txt_fecha_vencimiento" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_vencimiento' ?>" >
				  
                                        <?php Lang::_lang('Fecha Vencimiento') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fecha_vencimiento', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fecha_vencimiento', false, false) ?>" />
                                        <?php } ?>
				  
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
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_vencimiento')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_txt_firmante" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_firmante' ?>" >
				  
                                        <?php Lang::_lang('Firmante') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_firmante', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_firmante', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_txt_firmante" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('firmante')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_chq_cheque_txt_firmante' type='text' class='textbox <?php echo $error_input_css ?> ' id='fnd_chq_cheque_txt_firmante' value='<?php Gral::_echoTxt($fnd_chq_cheque->getFirmante(), true) ?>' size='40' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('firmante')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_txt_entregador" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_entregador' ?>" >
				  
                                        <?php Lang::_lang('Entregador') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_entregador', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_entregador', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_txt_entregador" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('entregador')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_chq_cheque_txt_entregador' type='text' class='textbox <?php echo $error_input_css ?> ' id='fnd_chq_cheque_txt_entregador' value='<?php Gral::_echoTxt($fnd_chq_cheque->getEntregador(), true) ?>' size='40' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('entregador')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_cmb_fnd_chq_tipo_emisor_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fnd_chq_tipo_emisor_id' ?>" >
				  
                                        <?php Lang::_lang('FndChqTipoEmisor') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fnd_chq_tipo_emisor_id', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fnd_chq_tipo_emisor_id', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_cmb_fnd_chq_tipo_emisor_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fnd_chq_tipo_emisor_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_cheque_cmb_fnd_chq_tipo_emisor_id', Gral::getCmbFiltro(FndChqTipoEmisor::getFndChqTipoEmisorsCmb(), Lang::_lang('Seleccione FndChqTipoEmisor', true)), $fnd_chq_cheque->getFndChqTipoEmisorId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA_CMB_EDIT_FND_CHQ_TIPO_EMISOR')){ ?>
		<img class="img_btn_editar" elemento_id="fnd_chq_cheque_cmb_fnd_chq_tipo_emisor_id" clase_id="fnd_chq_tipo_emisor" prefijo='fnd_chq_cheque_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_fnd_chq_tipo_emisor_id" <?php echo ($fnd_chq_cheque->getFndChqTipoEmisorId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="fnd_chq_cheque_cmb_fnd_chq_tipo_emisor_id" clase_id="fnd_chq_tipo_emisor" prefijo='fnd_chq_cheque_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_fnd_chq_cheque_cmb_fnd_chq_tipo_emisor_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fnd_chq_tipo_emisor_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_cmb_fnd_chq_tipo_emision_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fnd_chq_tipo_emision_id' ?>" >
				  
                                        <?php Lang::_lang('FndChqTipoEmision') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fnd_chq_tipo_emision_id', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fnd_chq_tipo_emision_id', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_cmb_fnd_chq_tipo_emision_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fnd_chq_tipo_emision_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_cheque_cmb_fnd_chq_tipo_emision_id', Gral::getCmbFiltro(FndChqTipoEmision::getFndChqTipoEmisionsCmb(), Lang::_lang('Seleccione FndChqTipoEmision', true)), $fnd_chq_cheque->getFndChqTipoEmisionId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA_CMB_EDIT_FND_CHQ_TIPO_EMISION')){ ?>
		<img class="img_btn_editar" elemento_id="fnd_chq_cheque_cmb_fnd_chq_tipo_emision_id" clase_id="fnd_chq_tipo_emision" prefijo='fnd_chq_cheque_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_fnd_chq_tipo_emision_id" <?php echo ($fnd_chq_cheque->getFndChqTipoEmisionId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="fnd_chq_cheque_cmb_fnd_chq_tipo_emision_id" clase_id="fnd_chq_tipo_emision" prefijo='fnd_chq_cheque_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_fnd_chq_cheque_cmb_fnd_chq_tipo_emision_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fnd_chq_tipo_emision_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_cmb_fnd_chq_tipo_pago_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fnd_chq_tipo_pago_id' ?>" >
				  
                                        <?php Lang::_lang('FndChqTipoPago') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fnd_chq_tipo_pago_id', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fnd_chq_tipo_pago_id', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_cmb_fnd_chq_tipo_pago_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fnd_chq_tipo_pago_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_cheque_cmb_fnd_chq_tipo_pago_id', Gral::getCmbFiltro(FndChqTipoPago::getFndChqTipoPagosCmb(), Lang::_lang('Seleccione FndChqTipoPago', true)), $fnd_chq_cheque->getFndChqTipoPagoId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA_CMB_EDIT_FND_CHQ_TIPO_PAGO')){ ?>
		<img class="img_btn_editar" elemento_id="fnd_chq_cheque_cmb_fnd_chq_tipo_pago_id" clase_id="fnd_chq_tipo_pago" prefijo='fnd_chq_cheque_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_fnd_chq_tipo_pago_id" <?php echo ($fnd_chq_cheque->getFndChqTipoPagoId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="fnd_chq_cheque_cmb_fnd_chq_tipo_pago_id" clase_id="fnd_chq_tipo_pago" prefijo='fnd_chq_cheque_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_fnd_chq_cheque_cmb_fnd_chq_tipo_pago_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fnd_chq_tipo_pago_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_cmb_fnd_chq_tipo_estado_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fnd_chq_tipo_estado_id' ?>" >
				  
                                        <?php Lang::_lang('FndChqTipoEstado') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fnd_chq_tipo_estado_id', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fnd_chq_tipo_estado_id', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_cmb_fnd_chq_tipo_estado_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fnd_chq_tipo_estado_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_cheque_cmb_fnd_chq_tipo_estado_id', Gral::getCmbFiltro(FndChqTipoEstado::getFndChqTipoEstadosCmb(), Lang::_lang('Seleccione FndChqTipoEstado', true)), $fnd_chq_cheque->getFndChqTipoEstadoId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA_CMB_EDIT_FND_CHQ_TIPO_ESTADO')){ ?>
		<img class="img_btn_editar" elemento_id="fnd_chq_cheque_cmb_fnd_chq_tipo_estado_id" clase_id="fnd_chq_tipo_estado" prefijo='fnd_chq_cheque_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_fnd_chq_tipo_estado_id" <?php echo ($fnd_chq_cheque->getFndChqTipoEstadoId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="fnd_chq_cheque_cmb_fnd_chq_tipo_estado_id" clase_id="fnd_chq_tipo_estado" prefijo='fnd_chq_cheque_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_fnd_chq_cheque_cmb_fnd_chq_tipo_estado_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fnd_chq_tipo_estado_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_cmb_cruzado" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cruzado' ?>" >
				  
                                        <?php Lang::_lang('Cruzado') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_cruzado', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_cruzado', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_cmb_cruzado" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cruzado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_cheque_cmb_cruzado', GralSiNo::getGralSiNosCmb(), $fnd_chq_cheque->getCruzado(), 'textbox '.$error_input_css) ?>
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cruzado')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_cmb_vta_recibo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_recibo_id' ?>" >
				  
                                        <?php Lang::_lang('VtaRecibo') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_vta_recibo_id', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_vta_recibo_id', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_cmb_vta_recibo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_recibo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_cheque_cmb_vta_recibo_id', Gral::getCmbFiltro(VtaRecibo::getVtaRecibosCmb(), Lang::_lang('Seleccione VtaRecibo', true)), $fnd_chq_cheque->getVtaReciboId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA_CMB_EDIT_VTA_RECIBO')){ ?>
		<img class="img_btn_editar" elemento_id="fnd_chq_cheque_cmb_vta_recibo_id" clase_id="vta_recibo" prefijo='fnd_chq_cheque_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_recibo_id" <?php echo ($fnd_chq_cheque->getVtaReciboId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="fnd_chq_cheque_cmb_vta_recibo_id" clase_id="vta_recibo" prefijo='fnd_chq_cheque_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_fnd_chq_cheque_cmb_vta_recibo_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_recibo_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_cmb_vta_recibo_item_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_recibo_item_id' ?>" >
				  
                                        <?php Lang::_lang('VtaReciboItem') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_vta_recibo_item_id', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_vta_recibo_item_id', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_cmb_vta_recibo_item_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_recibo_item_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_cheque_cmb_vta_recibo_item_id', Gral::getCmbFiltro(VtaReciboItem::getVtaReciboItemsCmb(), Lang::_lang('Seleccione VtaReciboItem', true)), $fnd_chq_cheque->getVtaReciboItemId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA_CMB_EDIT_VTA_RECIBO_ITEM')){ ?>
		<img class="img_btn_editar" elemento_id="fnd_chq_cheque_cmb_vta_recibo_item_id" clase_id="vta_recibo_item" prefijo='fnd_chq_cheque_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_recibo_item_id" <?php echo ($fnd_chq_cheque->getVtaReciboItemId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="fnd_chq_cheque_cmb_vta_recibo_item_id" clase_id="vta_recibo_item" prefijo='fnd_chq_cheque_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_fnd_chq_cheque_cmb_vta_recibo_item_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_recibo_item_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_cmb_vta_comision_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_comision_id' ?>" >
				  
                                        <?php Lang::_lang('VtaComision') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_vta_comision_id', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_vta_comision_id', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_cmb_vta_comision_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_comision_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_cheque_cmb_vta_comision_id', Gral::getCmbFiltro(VtaComision::getVtaComisionsCmb(), Lang::_lang('Seleccione VtaComision', true)), $fnd_chq_cheque->getVtaComisionId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA_CMB_EDIT_VTA_COMISION')){ ?>
		<img class="img_btn_editar" elemento_id="fnd_chq_cheque_cmb_vta_comision_id" clase_id="vta_comision" prefijo='fnd_chq_cheque_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_comision_id" <?php echo ($fnd_chq_cheque->getVtaComisionId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="fnd_chq_cheque_cmb_vta_comision_id" clase_id="vta_comision" prefijo='fnd_chq_cheque_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_fnd_chq_cheque_cmb_vta_comision_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_comision_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_cmb_vta_comision_gral_fp_forma_pago_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_comision_gral_fp_forma_pago_id' ?>" >
				  
                                        <?php Lang::_lang('VtaComisionGralFpFormaPago') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_vta_comision_gral_fp_forma_pago_id', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_vta_comision_gral_fp_forma_pago_id', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_cmb_vta_comision_gral_fp_forma_pago_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_comision_gral_fp_forma_pago_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_cheque_cmb_vta_comision_gral_fp_forma_pago_id', Gral::getCmbFiltro(VtaComisionGralFpFormaPago::getVtaComisionGralFpFormaPagosCmb(), Lang::_lang('Seleccione VtaComisionGralFpFormaPago', true)), $fnd_chq_cheque->getVtaComisionGralFpFormaPagoId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA_CMB_EDIT_VTA_COMISION_GRAL_FP_FORMA_PAGO')){ ?>
		<img class="img_btn_editar" elemento_id="fnd_chq_cheque_cmb_vta_comision_gral_fp_forma_pago_id" clase_id="vta_comision_gral_fp_forma_pago" prefijo='fnd_chq_cheque_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_comision_gral_fp_forma_pago_id" <?php echo ($fnd_chq_cheque->getVtaComisionGralFpFormaPagoId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="fnd_chq_cheque_cmb_vta_comision_gral_fp_forma_pago_id" clase_id="vta_comision_gral_fp_forma_pago" prefijo='fnd_chq_cheque_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_fnd_chq_cheque_cmb_vta_comision_gral_fp_forma_pago_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_comision_gral_fp_forma_pago_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_cmb_pde_orden_pago_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_orden_pago_id' ?>" >
				  
                                        <?php Lang::_lang('OrdenPago') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_pde_orden_pago_id', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_pde_orden_pago_id', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_cmb_pde_orden_pago_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_orden_pago_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_cheque_cmb_pde_orden_pago_id', Gral::getCmbFiltro(PdeOrdenPago::getPdeOrdenPagosCmb(), Lang::_lang('Seleccione OrdenPago', true)), $fnd_chq_cheque->getPdeOrdenPagoId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA_CMB_EDIT_PDE_ORDEN_PAGO')){ ?>
		<img class="img_btn_editar" elemento_id="fnd_chq_cheque_cmb_pde_orden_pago_id" clase_id="pde_orden_pago" prefijo='fnd_chq_cheque_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_orden_pago_id" <?php echo ($fnd_chq_cheque->getPdeOrdenPagoId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="fnd_chq_cheque_cmb_pde_orden_pago_id" clase_id="pde_orden_pago" prefijo='fnd_chq_cheque_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_fnd_chq_cheque_cmb_pde_orden_pago_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_orden_pago_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_cmb_pde_orden_pago_gral_fp_forma_pago_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_orden_pago_gral_fp_forma_pago_id' ?>" >
				  
                                        <?php Lang::_lang('PdeOrdenPagoGralFpFormaPago') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_pde_orden_pago_gral_fp_forma_pago_id', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_pde_orden_pago_gral_fp_forma_pago_id', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_cmb_pde_orden_pago_gral_fp_forma_pago_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_orden_pago_gral_fp_forma_pago_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_cheque_cmb_pde_orden_pago_gral_fp_forma_pago_id', Gral::getCmbFiltro(PdeOrdenPagoGralFpFormaPago::getPdeOrdenPagoGralFpFormaPagosCmb(), Lang::_lang('Seleccione PdeOrdenPagoGralFpFormaPago', true)), $fnd_chq_cheque->getPdeOrdenPagoGralFpFormaPagoId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA_CMB_EDIT_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO')){ ?>
		<img class="img_btn_editar" elemento_id="fnd_chq_cheque_cmb_pde_orden_pago_gral_fp_forma_pago_id" clase_id="pde_orden_pago_gral_fp_forma_pago" prefijo='fnd_chq_cheque_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_orden_pago_gral_fp_forma_pago_id" <?php echo ($fnd_chq_cheque->getPdeOrdenPagoGralFpFormaPagoId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="fnd_chq_cheque_cmb_pde_orden_pago_gral_fp_forma_pago_id" clase_id="pde_orden_pago_gral_fp_forma_pago" prefijo='fnd_chq_cheque_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_fnd_chq_cheque_cmb_pde_orden_pago_gral_fp_forma_pago_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_orden_pago_gral_fp_forma_pago_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_cmb_pde_recibo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_recibo_id' ?>" >
				  
                                        <?php Lang::_lang('PdeRecibo') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_pde_recibo_id', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_pde_recibo_id', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_cmb_pde_recibo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_recibo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_cheque_cmb_pde_recibo_id', Gral::getCmbFiltro(PdeRecibo::getPdeRecibosCmb(), Lang::_lang('Seleccione PdeRecibo', true)), $fnd_chq_cheque->getPdeReciboId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA_CMB_EDIT_PDE_RECIBO')){ ?>
		<img class="img_btn_editar" elemento_id="fnd_chq_cheque_cmb_pde_recibo_id" clase_id="pde_recibo" prefijo='fnd_chq_cheque_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_recibo_id" <?php echo ($fnd_chq_cheque->getPdeReciboId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="fnd_chq_cheque_cmb_pde_recibo_id" clase_id="pde_recibo" prefijo='fnd_chq_cheque_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_fnd_chq_cheque_cmb_pde_recibo_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_recibo_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_cmb_pde_recibo_item_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_recibo_item_id' ?>" >
				  
                                        <?php Lang::_lang('PdeReciboItem') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_pde_recibo_item_id', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_pde_recibo_item_id', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_cmb_pde_recibo_item_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_recibo_item_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_cheque_cmb_pde_recibo_item_id', Gral::getCmbFiltro(PdeReciboItem::getPdeReciboItemsCmb(), Lang::_lang('Seleccione PdeReciboItem', true)), $fnd_chq_cheque->getPdeReciboItemId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA_CMB_EDIT_PDE_RECIBO_ITEM')){ ?>
		<img class="img_btn_editar" elemento_id="fnd_chq_cheque_cmb_pde_recibo_item_id" clase_id="pde_recibo_item" prefijo='fnd_chq_cheque_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_recibo_item_id" <?php echo ($fnd_chq_cheque->getPdeReciboItemId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="fnd_chq_cheque_cmb_pde_recibo_item_id" clase_id="pde_recibo_item" prefijo='fnd_chq_cheque_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_fnd_chq_cheque_cmb_pde_recibo_item_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_recibo_item_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_chq_cheque_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='fnd_chq_cheque_txt_codigo' value='<?php Gral::_echoTxt($fnd_chq_cheque->getCodigo(), true) ?>' size='40' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_fnd_chq_cheque_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_cheque_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='fnd_chq_cheque_txa_observacion' rows='10' cols='50' id='fnd_chq_cheque_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($fnd_chq_cheque->getObservacion(), true) ?></textarea>
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
      </table>
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
		  <input name='btn_guardar' type='button' class='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' /></td>
        </tr>
      </table>
	  
	  
</form>
</body>
</html>
<script>
setInit();
</script>

