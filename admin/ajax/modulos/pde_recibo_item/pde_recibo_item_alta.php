<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PDE_RECIBO_ITEM_ALTA')){
    echo "No tiene asignada la credencial PDE_RECIBO_ITEM_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pde_recibo_item';
$db_nombre_pagina = 'pde_recibo_item_alta';

$pde_recibo_item = new PdeReciboItem();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pde_recibo_item = new PdeReciboItem();
	if(trim($hdn_id) != '') $pde_recibo_item->setId($hdn_id, false);
	$pde_recibo_item->setDescripcion(Gral::getVars(1, "pde_recibo_item_txt_descripcion"));
	$pde_recibo_item->setPdeReciboId(Gral::getVars(1, "pde_recibo_item_cmb_pde_recibo_id", null));
	$pde_recibo_item->setGralFpFormaPagoId(Gral::getVars(1, "pde_recibo_item_cmb_gral_fp_forma_pago_id", null));
	$pde_recibo_item->setGralTipoIvaId(Gral::getVars(1, "pde_recibo_item_cmb_gral_tipo_iva_id", null));
	$pde_recibo_item->setPdeReciboConceptoId(Gral::getVars(1, "pde_recibo_item_cmb_pde_recibo_concepto_id", null));
	$pde_recibo_item->setImporteUnitario(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "pde_recibo_item_txt_importe_unitario", 0)));
	$pde_recibo_item->setCantidad(Gral::getVars(1, "pde_recibo_item_txt_cantidad", 0));
	$pde_recibo_item->setCodigo(Gral::getVars(1, "pde_recibo_item_txt_codigo"));
	$pde_recibo_item->setObservacion(Gral::getVars(1, "pde_recibo_item_txa_observacion"));
	$pde_recibo_item->setOrden(Gral::getVars(1, "pde_recibo_item_txt_orden", 0));
	$pde_recibo_item->setEstado(Gral::getVars(1, "pde_recibo_item_cmb_estado", 0));
	$pde_recibo_item->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_recibo_item_txt_creado")));
	$pde_recibo_item->setCreadoPor(Gral::getVars(1, "pde_recibo_item__creado_por", 0));
	$pde_recibo_item->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_recibo_item_txt_modificado")));
	$pde_recibo_item->setModificadoPor(Gral::getVars(1, "pde_recibo_item__modificado_por", 0));

	$pde_recibo_item_estado = new PdeReciboItem();
	if(trim($hdn_id) != ''){
		$pde_recibo_item_estado->setId($hdn_id);
		$pde_recibo_item->setEstado($pde_recibo_item_estado->getEstado());
				
	}else{
		$pde_recibo_item->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $pde_recibo_item->control();
			if(!$error->getExisteError()){
				$pde_recibo_item->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pde_recibo_item_alta.php?cs=1&id='.$pde_recibo_item->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pde_recibo_item->control();
			if(!$error->getExisteError()){
				$pde_recibo_item->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pde_recibo_item_alta.php?cs=1');
				$pde_recibo_item = new PdeReciboItem();
			}
		break;
	}
	Gral::setSes('PdeReciboItem_ULTIMO_INSERTADO', $pde_recibo_item->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pde_recibo_item_id = Gral::getVars(2, $prefijo.'cmb_pde_recibo_item_id', 0);
	if($cmb_pde_recibo_item_id != 0){
		$pde_recibo_item = PdeReciboItem::getOxId($cmb_pde_recibo_item_id);
	}else{
	
	$pde_recibo_item->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pde_recibo_item->setPdeReciboId(Gral::getVars(2, "pde_recibo_id", 'null'));
	$pde_recibo_item->setGralFpFormaPagoId(Gral::getVars(2, "gral_fp_forma_pago_id", 'null'));
	$pde_recibo_item->setGralTipoIvaId(Gral::getVars(2, "gral_tipo_iva_id", 'null'));
	$pde_recibo_item->setPdeReciboConceptoId(Gral::getVars(2, "pde_recibo_concepto_id", 'null'));
	$pde_recibo_item->setImporteUnitario(Gral::getVars(2, "importe_unitario", 0));
	$pde_recibo_item->setCantidad(Gral::getVars(2, "cantidad", 0));
	$pde_recibo_item->setCodigo(Gral::getVars(2, "codigo", ''));
	$pde_recibo_item->setObservacion(Gral::getVars(2, "observacion", ''));
	$pde_recibo_item->setOrden(Gral::getVars(2, "orden", 0));
	$pde_recibo_item->setEstado(Gral::getVars(2, "estado", 0));
	$pde_recibo_item->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pde_recibo_item->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pde_recibo_item->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pde_recibo_item->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pde_recibo_item->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pde_recibo_item/pde_recibo_item_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pde_recibo_item' width='90%'>
        
				<tr>
				  <td  id="label_pde_recibo_item_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_item_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_recibo_item_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_recibo_item_txt_descripcion' value='<?php Gral::_echoTxt($pde_recibo_item->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pde_recibo_item_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_item_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_item_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_item_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recibo_item_cmb_pde_recibo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_recibo_id' ?>" >
				  
                                        <?php Lang::_lang('PdeRecibo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_item_cmb_pde_recibo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_recibo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recibo_item_cmb_pde_recibo_id', Gral::getCmbFiltro(PdeRecibo::getPdeRecibosCmb(), '...'), $pde_recibo_item->getPdeReciboId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_ITEM_ALTA_CMB_EDIT_PDE_RECIBO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_recibo_item_cmb_pde_recibo_id" clase_id="pde_recibo" prefijo='pde_recibo_item_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_recibo_id" <?php echo ($pde_recibo_item->getPdeReciboId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_recibo_item_cmb_pde_recibo_id" clase_id="pde_recibo" prefijo='pde_recibo_item_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_recibo_item_cmb_pde_recibo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_recibo_item_alta_pde_recibo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_item_alta_pde_recibo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_item_alta_pde_recibo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_item_alta_pde_recibo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_recibo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recibo_item_cmb_gral_fp_forma_pago_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_fp_forma_pago_id' ?>" >
				  
                                        <?php Lang::_lang('GralFpFormaPago', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_item_cmb_gral_fp_forma_pago_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_fp_forma_pago_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recibo_item_cmb_gral_fp_forma_pago_id', Gral::getCmbFiltro(GralFpFormaPago::getGralFpFormaPagosCmb(), '...'), $pde_recibo_item->getGralFpFormaPagoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_ITEM_ALTA_CMB_EDIT_GRAL_FP_FORMA_PAGO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_recibo_item_cmb_gral_fp_forma_pago_id" clase_id="gral_fp_forma_pago" prefijo='pde_recibo_item_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_fp_forma_pago_id" <?php echo ($pde_recibo_item->getGralFpFormaPagoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_recibo_item_cmb_gral_fp_forma_pago_id" clase_id="gral_fp_forma_pago" prefijo='pde_recibo_item_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_recibo_item_cmb_gral_fp_forma_pago_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_recibo_item_alta_gral_fp_forma_pago_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_item_alta_gral_fp_forma_pago_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_item_alta_gral_fp_forma_pago_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_item_alta_gral_fp_forma_pago_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_fp_forma_pago_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recibo_item_cmb_gral_tipo_iva_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_tipo_iva_id' ?>" >
				  
                                        <?php Lang::_lang('GralTipoIva', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_item_cmb_gral_tipo_iva_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_tipo_iva_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recibo_item_cmb_gral_tipo_iva_id', Gral::getCmbFiltro(GralTipoIva::getGralTipoIvasCmb(), '...'), $pde_recibo_item->getGralTipoIvaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_ITEM_ALTA_CMB_EDIT_GRAL_TIPO_IVA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_recibo_item_cmb_gral_tipo_iva_id" clase_id="gral_tipo_iva" prefijo='pde_recibo_item_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_tipo_iva_id" <?php echo ($pde_recibo_item->getGralTipoIvaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_recibo_item_cmb_gral_tipo_iva_id" clase_id="gral_tipo_iva" prefijo='pde_recibo_item_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_recibo_item_cmb_gral_tipo_iva_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_recibo_item_alta_gral_tipo_iva_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_item_alta_gral_tipo_iva_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_item_alta_gral_tipo_iva_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_item_alta_gral_tipo_iva_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_tipo_iva_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recibo_item_cmb_pde_recibo_concepto_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_recibo_concepto_id' ?>" >
				  
                                        <?php Lang::_lang('PdeReciboConcepto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_item_cmb_pde_recibo_concepto_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_recibo_concepto_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recibo_item_cmb_pde_recibo_concepto_id', Gral::getCmbFiltro(PdeReciboConcepto::getPdeReciboConceptosCmb(), '...'), $pde_recibo_item->getPdeReciboConceptoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_ITEM_ALTA_CMB_EDIT_PDE_RECIBO_CONCEPTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_recibo_item_cmb_pde_recibo_concepto_id" clase_id="pde_recibo_concepto" prefijo='pde_recibo_item_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_recibo_concepto_id" <?php echo ($pde_recibo_item->getPdeReciboConceptoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_recibo_item_cmb_pde_recibo_concepto_id" clase_id="pde_recibo_concepto" prefijo='pde_recibo_item_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_recibo_item_cmb_pde_recibo_concepto_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_recibo_item_alta_pde_recibo_concepto_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_item_alta_pde_recibo_concepto_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_item_alta_pde_recibo_concepto_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_item_alta_pde_recibo_concepto_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_recibo_concepto_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recibo_item_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_item_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_recibo_item_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_recibo_item_txt_codigo' value='<?php Gral::_echoTxt($pde_recibo_item->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_recibo_item_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_item_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_item_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_item_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recibo_item_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_item_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_recibo_item_txa_observacion' rows='10' cols='50' id='pde_recibo_item_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_recibo_item->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_recibo_item_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_item_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_item_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_item_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_recibo_item->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pde_recibo_item_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pde_recibo_item'/>
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

