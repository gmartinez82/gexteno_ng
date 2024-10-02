<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('GRAL_FP_FORMA_PAGO_ALTA')){
    echo "No tiene asignada la credencial GRAL_FP_FORMA_PAGO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'gral_fp_forma_pago';
$db_nombre_pagina = 'gral_fp_forma_pago_alta';

$gral_fp_forma_pago = new GralFpFormaPago();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$gral_fp_forma_pago = new GralFpFormaPago();
	if(trim($hdn_id) != '') $gral_fp_forma_pago->setId($hdn_id, false);
	$gral_fp_forma_pago->setDescripcion(Gral::getVars(1, "gral_fp_forma_pago_txt_descripcion"));
	$gral_fp_forma_pago->setDescripcionCorta(Gral::getVars(1, "gral_fp_forma_pago_txt_descripcion_corta"));
	$gral_fp_forma_pago->setCodigo(Gral::getVars(1, "gral_fp_forma_pago_txt_codigo"));
	$gral_fp_forma_pago->setContado(Gral::getVars(1, "gral_fp_forma_pago_cmb_contado", 0));
	$gral_fp_forma_pago->setCredito(Gral::getVars(1, "gral_fp_forma_pago_cmb_credito", 0));
	$gral_fp_forma_pago->setInmediato(Gral::getVars(1, "gral_fp_forma_pago_cmb_inmediato", 0));
	$gral_fp_forma_pago->setReciboAutomatico(Gral::getVars(1, "gral_fp_forma_pago_cmb_recibo_automatico", 0));
	$gral_fp_forma_pago->setParaCompra(Gral::getVars(1, "gral_fp_forma_pago_cmb_para_compra", 0));
	$gral_fp_forma_pago->setParaVenta(Gral::getVars(1, "gral_fp_forma_pago_cmb_para_venta", 0));
	$gral_fp_forma_pago->setParaCobro(Gral::getVars(1, "gral_fp_forma_pago_cmb_para_cobro", 0));
	$gral_fp_forma_pago->setParaPago(Gral::getVars(1, "gral_fp_forma_pago_cmb_para_pago", 0));
	$gral_fp_forma_pago->setCntbCuentaCompra(Gral::getVars(1, "gral_fp_forma_pago_dbsug_cntb_cuenta_compra_id", null));
	$gral_fp_forma_pago->setCntbCuentaVenta(Gral::getVars(1, "gral_fp_forma_pago_dbsug_cntb_cuenta_venta_id", null));
	$gral_fp_forma_pago->setRequiereReferencia(Gral::getVars(1, "gral_fp_forma_pago_cmb_requiere_referencia", 0));
	$gral_fp_forma_pago->setRequiereInfoExtendida(Gral::getVars(1, "gral_fp_forma_pago_cmb_requiere_info_extendida", 0));
	$gral_fp_forma_pago->setRequiereConciliacion(Gral::getVars(1, "gral_fp_forma_pago_cmb_requiere_conciliacion", 0));
	$gral_fp_forma_pago->setObservacion(Gral::getVars(1, "gral_fp_forma_pago_txa_observacion"));
	$gral_fp_forma_pago->setOrden(Gral::getVars(1, "gral_fp_forma_pago_txt_orden", 0));
	$gral_fp_forma_pago->setEstado(Gral::getVars(1, "gral_fp_forma_pago_cmb_estado", 0));
	$gral_fp_forma_pago->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_fp_forma_pago_txt_creado")));
	$gral_fp_forma_pago->setCreadoPor(Gral::getVars(1, "gral_fp_forma_pago__creado_por", 0));
	$gral_fp_forma_pago->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_fp_forma_pago_txt_modificado")));
	$gral_fp_forma_pago->setModificadoPor(Gral::getVars(1, "gral_fp_forma_pago__modificado_por", 0));

	$gral_fp_forma_pago_estado = new GralFpFormaPago();
	if(trim($hdn_id) != ''){
		$gral_fp_forma_pago_estado->setId($hdn_id);
		$gral_fp_forma_pago->setEstado($gral_fp_forma_pago_estado->getEstado());
				
	}else{
		$gral_fp_forma_pago->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $gral_fp_forma_pago->control();
			if(!$error->getExisteError()){
				$gral_fp_forma_pago->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: gral_fp_forma_pago_alta.php?cs=1&id='.$gral_fp_forma_pago->getId());
			}
		break;
		case 'guardarnvo':
			$error = $gral_fp_forma_pago->control();
			if(!$error->getExisteError()){
				$gral_fp_forma_pago->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: gral_fp_forma_pago_alta.php?cs=1');
				$gral_fp_forma_pago = new GralFpFormaPago();
			}
		break;
	}
	Gral::setSes('GralFpFormaPago_ULTIMO_INSERTADO', $gral_fp_forma_pago->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_gral_fp_forma_pago_id = Gral::getVars(2, $prefijo.'cmb_gral_fp_forma_pago_id', 0);
	if($cmb_gral_fp_forma_pago_id != 0){
		$gral_fp_forma_pago = GralFpFormaPago::getOxId($cmb_gral_fp_forma_pago_id);
	}else{
	
	$gral_fp_forma_pago->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$gral_fp_forma_pago->setDescripcionCorta(Gral::getVars(2, "descripcion_corta", ''));
	$gral_fp_forma_pago->setCodigo(Gral::getVars(2, "codigo", ''));
	$gral_fp_forma_pago->setContado(Gral::getVars(2, "contado", 0));
	$gral_fp_forma_pago->setCredito(Gral::getVars(2, "credito", 0));
	$gral_fp_forma_pago->setInmediato(Gral::getVars(2, "inmediato", 0));
	$gral_fp_forma_pago->setReciboAutomatico(Gral::getVars(2, "recibo_automatico", 0));
	$gral_fp_forma_pago->setParaCompra(Gral::getVars(2, "para_compra", 0));
	$gral_fp_forma_pago->setParaVenta(Gral::getVars(2, "para_venta", 0));
	$gral_fp_forma_pago->setParaCobro(Gral::getVars(2, "para_cobro", 0));
	$gral_fp_forma_pago->setParaPago(Gral::getVars(2, "para_pago", 0));
	$gral_fp_forma_pago->setCntbCuentaCompra(Gral::getVars(2, "cntb_cuenta_compra", 'null'));
	$gral_fp_forma_pago->setCntbCuentaVenta(Gral::getVars(2, "cntb_cuenta_venta", 'null'));
	$gral_fp_forma_pago->setRequiereReferencia(Gral::getVars(2, "requiere_referencia", 0));
	$gral_fp_forma_pago->setRequiereInfoExtendida(Gral::getVars(2, "requiere_info_extendida", 0));
	$gral_fp_forma_pago->setRequiereConciliacion(Gral::getVars(2, "requiere_conciliacion", 0));
	$gral_fp_forma_pago->setObservacion(Gral::getVars(2, "observacion", ''));
	$gral_fp_forma_pago->setOrden(Gral::getVars(2, "orden", 0));
	$gral_fp_forma_pago->setEstado(Gral::getVars(2, "estado", 0));
	$gral_fp_forma_pago->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$gral_fp_forma_pago->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$gral_fp_forma_pago->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$gral_fp_forma_pago->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $gral_fp_forma_pago->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/gral_fp_forma_pago/gral_fp_forma_pago_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_gral_fp_forma_pago' width='90%'>
        
				<tr>
				  <td  id="label_gral_fp_forma_pago_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_fp_forma_pago_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_fp_forma_pago_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_fp_forma_pago_txt_descripcion' value='<?php Gral::_echoTxt($gral_fp_forma_pago->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_gral_fp_forma_pago_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_fp_forma_pago_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_fp_forma_pago_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_fp_forma_pago_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_fp_forma_pago_txt_descripcion_corta" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion_corta' ?>" >
				  
                                        <?php Lang::_lang('Descripcion Corta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_fp_forma_pago_txt_descripcion_corta" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion_corta')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_fp_forma_pago_txt_descripcion_corta' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_fp_forma_pago_txt_descripcion_corta' value='<?php Gral::_echoTxt($gral_fp_forma_pago->getDescripcionCorta(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_gral_fp_forma_pago_alta_descripcion_corta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_fp_forma_pago_alta_descripcion_corta', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_fp_forma_pago_alta_descripcion_corta', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_fp_forma_pago_alta_descripcion_corta', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion_corta')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_fp_forma_pago_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_fp_forma_pago_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_fp_forma_pago_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_fp_forma_pago_txt_codigo' value='<?php Gral::_echoTxt($gral_fp_forma_pago->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gral_fp_forma_pago_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_fp_forma_pago_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_fp_forma_pago_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_fp_forma_pago_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_fp_forma_pago_cmb_contado" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_contado' ?>" >
				  
                                        <?php Lang::_lang('Contado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_fp_forma_pago_cmb_contado" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('contado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gral_fp_forma_pago_cmb_contado', GralSiNo::getGralSiNosCmb(), $gral_fp_forma_pago->getContado(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_gral_fp_forma_pago_alta_contado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_fp_forma_pago_alta_contado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_fp_forma_pago_alta_contado', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_fp_forma_pago_alta_contado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('contado')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_fp_forma_pago_cmb_credito" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_credito' ?>" >
				  
                                        <?php Lang::_lang('Credito', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_fp_forma_pago_cmb_credito" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('credito')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gral_fp_forma_pago_cmb_credito', GralSiNo::getGralSiNosCmb(), $gral_fp_forma_pago->getCredito(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_gral_fp_forma_pago_alta_credito', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_fp_forma_pago_alta_credito', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_fp_forma_pago_alta_credito', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_fp_forma_pago_alta_credito', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('credito')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_fp_forma_pago_cmb_inmediato" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_inmediato' ?>" >
				  
                                        <?php Lang::_lang('Inmediato', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_fp_forma_pago_cmb_inmediato" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('inmediato')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gral_fp_forma_pago_cmb_inmediato', GralSiNo::getGralSiNosCmb(), $gral_fp_forma_pago->getInmediato(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_gral_fp_forma_pago_alta_inmediato', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_fp_forma_pago_alta_inmediato', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_fp_forma_pago_alta_inmediato', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_fp_forma_pago_alta_inmediato', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('inmediato')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_fp_forma_pago_cmb_recibo_automatico" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_recibo_automatico' ?>" >
				  
                                        <?php Lang::_lang('Recibo Automatico', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_fp_forma_pago_cmb_recibo_automatico" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('recibo_automatico')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gral_fp_forma_pago_cmb_recibo_automatico', GralSiNo::getGralSiNosCmb(), $gral_fp_forma_pago->getReciboAutomatico(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_gral_fp_forma_pago_alta_recibo_automatico', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_fp_forma_pago_alta_recibo_automatico', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_fp_forma_pago_alta_recibo_automatico', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_fp_forma_pago_alta_recibo_automatico', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('recibo_automatico')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_fp_forma_pago_cmb_para_compra" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_para_compra' ?>" >
				  
                                        <?php Lang::_lang('Para Compra', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_fp_forma_pago_cmb_para_compra" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('para_compra')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gral_fp_forma_pago_cmb_para_compra', GralSiNo::getGralSiNosCmb(), $gral_fp_forma_pago->getParaCompra(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_gral_fp_forma_pago_alta_para_compra', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_fp_forma_pago_alta_para_compra', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_fp_forma_pago_alta_para_compra', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_fp_forma_pago_alta_para_compra', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('para_compra')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_fp_forma_pago_cmb_para_venta" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_para_venta' ?>" >
				  
                                        <?php Lang::_lang('Para Venta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_fp_forma_pago_cmb_para_venta" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('para_venta')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gral_fp_forma_pago_cmb_para_venta', GralSiNo::getGralSiNosCmb(), $gral_fp_forma_pago->getParaVenta(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_gral_fp_forma_pago_alta_para_venta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_fp_forma_pago_alta_para_venta', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_fp_forma_pago_alta_para_venta', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_fp_forma_pago_alta_para_venta', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('para_venta')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_fp_forma_pago_cmb_para_cobro" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_para_cobro' ?>" >
				  
                                        <?php Lang::_lang('Para Cobro', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_fp_forma_pago_cmb_para_cobro" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('para_cobro')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gral_fp_forma_pago_cmb_para_cobro', GralSiNo::getGralSiNosCmb(), $gral_fp_forma_pago->getParaCobro(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_gral_fp_forma_pago_alta_para_cobro', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_fp_forma_pago_alta_para_cobro', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_fp_forma_pago_alta_para_cobro', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_fp_forma_pago_alta_para_cobro', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('para_cobro')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_fp_forma_pago_cmb_para_pago" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_para_pago' ?>" >
				  
                                        <?php Lang::_lang('Para Pago', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_fp_forma_pago_cmb_para_pago" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('para_pago')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gral_fp_forma_pago_cmb_para_pago', GralSiNo::getGralSiNosCmb(), $gral_fp_forma_pago->getParaPago(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_gral_fp_forma_pago_alta_para_pago', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_fp_forma_pago_alta_para_pago', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_fp_forma_pago_alta_para_pago', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_fp_forma_pago_alta_para_pago', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('para_pago')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_fp_forma_pago_dbsug_cntb_cuenta_compra" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cntb_cuenta_compra' ?>" >
				  
                                        <?php Lang::_lang('CntbCuentaCompra', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_fp_forma_pago_dbsug_cntb_cuenta_compra" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cntb_cuenta_compra')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'gral_fp_forma_pago_dbsug_cntb_cuenta_compra', 'ajax/modulos/cntb_cuenta/cntb_cuenta_dbsuggest_custom.php', false, true, '', 'Ingrese ...', $gral_fp_forma_pago->getCntbCuentaCompra(), ($gral_fp_forma_pago->getCntbCuentaCompra() != 'null') ? CntbCuenta::getOxId($gral_fp_forma_pago->getCntbCuentaCompra())->getDescripcion(): '') ?>            
                    <?php if(Lang::_lang('help_gral_fp_forma_pago_alta_cntb_cuenta_compra', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_fp_forma_pago_alta_cntb_cuenta_compra', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_fp_forma_pago_alta_cntb_cuenta_compra', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_fp_forma_pago_alta_cntb_cuenta_compra', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cntb_cuenta_compra')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_fp_forma_pago_dbsug_cntb_cuenta_venta" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cntb_cuenta_venta' ?>" >
				  
                                        <?php Lang::_lang('CntbCuentaVenta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_fp_forma_pago_dbsug_cntb_cuenta_venta" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cntb_cuenta_venta')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'gral_fp_forma_pago_dbsug_cntb_cuenta_venta', 'ajax/modulos/cntb_cuenta/cntb_cuenta_dbsuggest_custom.php', false, true, '', 'Ingrese ...', $gral_fp_forma_pago->getCntbCuentaVenta(), ($gral_fp_forma_pago->getCntbCuentaVenta() != 'null') ? CntbCuenta::getOxId($gral_fp_forma_pago->getCntbCuentaVenta())->getDescripcion(): '') ?>            
                    <?php if(Lang::_lang('help_gral_fp_forma_pago_alta_cntb_cuenta_venta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_fp_forma_pago_alta_cntb_cuenta_venta', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_fp_forma_pago_alta_cntb_cuenta_venta', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_fp_forma_pago_alta_cntb_cuenta_venta', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cntb_cuenta_venta')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_fp_forma_pago_cmb_requiere_referencia" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_requiere_referencia' ?>" >
				  
                                        <?php Lang::_lang('Req Referencia', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_fp_forma_pago_cmb_requiere_referencia" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('requiere_referencia')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gral_fp_forma_pago_cmb_requiere_referencia', GralSiNo::getGralSiNosCmb(), $gral_fp_forma_pago->getRequiereReferencia(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_gral_fp_forma_pago_alta_requiere_referencia', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_fp_forma_pago_alta_requiere_referencia', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_fp_forma_pago_alta_requiere_referencia', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_fp_forma_pago_alta_requiere_referencia', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('requiere_referencia')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_fp_forma_pago_cmb_requiere_info_extendida" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_requiere_info_extendida' ?>" >
				  
                                        <?php Lang::_lang('Req Info Ext', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_fp_forma_pago_cmb_requiere_info_extendida" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('requiere_info_extendida')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gral_fp_forma_pago_cmb_requiere_info_extendida', GralSiNo::getGralSiNosCmb(), $gral_fp_forma_pago->getRequiereInfoExtendida(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_gral_fp_forma_pago_alta_requiere_info_extendida', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_fp_forma_pago_alta_requiere_info_extendida', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_fp_forma_pago_alta_requiere_info_extendida', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_fp_forma_pago_alta_requiere_info_extendida', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('requiere_info_extendida')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_fp_forma_pago_cmb_requiere_conciliacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_requiere_conciliacion' ?>" >
				  
                                        <?php Lang::_lang('Req Conciliacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_fp_forma_pago_cmb_requiere_conciliacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('requiere_conciliacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gral_fp_forma_pago_cmb_requiere_conciliacion', GralSiNo::getGralSiNosCmb(), $gral_fp_forma_pago->getRequiereConciliacion(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_gral_fp_forma_pago_alta_requiere_conciliacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_fp_forma_pago_alta_requiere_conciliacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_fp_forma_pago_alta_requiere_conciliacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_fp_forma_pago_alta_requiere_conciliacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('requiere_conciliacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_fp_forma_pago_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_fp_forma_pago_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='gral_fp_forma_pago_txa_observacion' rows='10' cols='50' id='gral_fp_forma_pago_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($gral_fp_forma_pago->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_gral_fp_forma_pago_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_fp_forma_pago_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_fp_forma_pago_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_fp_forma_pago_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($gral_fp_forma_pago->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_gral_fp_forma_pago_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='gral_fp_forma_pago'/>
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

