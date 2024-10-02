<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('GRAL_MONEDA_TIPO_CAMBIO_ALTA')){
    echo "No tiene asignada la credencial GRAL_MONEDA_TIPO_CAMBIO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'gral_moneda_tipo_cambio';
$db_nombre_pagina = 'gral_moneda_tipo_cambio_alta';

$gral_moneda_tipo_cambio = new GralMonedaTipoCambio();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$gral_moneda_tipo_cambio = new GralMonedaTipoCambio();
	if(trim($hdn_id) != '') $gral_moneda_tipo_cambio->setId($hdn_id, false);
	$gral_moneda_tipo_cambio->setDescripcion(Gral::getVars(1, "gral_moneda_tipo_cambio_txt_descripcion"));
	$gral_moneda_tipo_cambio->setFecha(Gral::getFechaToDb(Gral::getVars(1, "gral_moneda_tipo_cambio_txt_fecha")));
	$gral_moneda_tipo_cambio->setGralMonedaId(Gral::getVars(1, "gral_moneda_tipo_cambio_cmb_gral_moneda_id", null));
	$gral_moneda_tipo_cambio->setGralMonedaComparada(Gral::getVars(1, "gral_moneda_tipo_cambio_cmb_gral_moneda_comparada", null));
	$gral_moneda_tipo_cambio->setTipoCambio(Gral::getVars(1, "gral_moneda_tipo_cambio_txt_tipo_cambio", 0));
	$gral_moneda_tipo_cambio->setCoeficienteAjuste(Gral::getVars(1, "gral_moneda_tipo_cambio_txt_coeficiente_ajuste", 0));
	$gral_moneda_tipo_cambio->setTipoCambioReal(Gral::getVars(1, "gral_moneda_tipo_cambio_txt_tipo_cambio_real", 0));
	$gral_moneda_tipo_cambio->setActual(Gral::getVars(1, "gral_moneda_tipo_cambio_cmb_actual", 0));
	$gral_moneda_tipo_cambio->setCodigo(Gral::getVars(1, "gral_moneda_tipo_cambio_txt_codigo"));
	$gral_moneda_tipo_cambio->setObservacion(Gral::getVars(1, "gral_moneda_tipo_cambio_txa_observacion"));
	$gral_moneda_tipo_cambio->setOrden(Gral::getVars(1, "gral_moneda_tipo_cambio_txt_orden", 0));
	$gral_moneda_tipo_cambio->setEstado(Gral::getVars(1, "gral_moneda_tipo_cambio__estado", 0));
	$gral_moneda_tipo_cambio->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_moneda_tipo_cambio_txt_creado")));
	$gral_moneda_tipo_cambio->setCreadoPor(Gral::getVars(1, "gral_moneda_tipo_cambio__creado_por", 0));
	$gral_moneda_tipo_cambio->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_moneda_tipo_cambio_txt_modificado")));
	$gral_moneda_tipo_cambio->setModificadoPor(Gral::getVars(1, "gral_moneda_tipo_cambio__modificado_por", 0));

	$gral_moneda_tipo_cambio_estado = new GralMonedaTipoCambio();
	if(trim($hdn_id) != ''){
		$gral_moneda_tipo_cambio_estado->setId($hdn_id);
		$gral_moneda_tipo_cambio->setEstado($gral_moneda_tipo_cambio_estado->getEstado());
				
	}else{
		$gral_moneda_tipo_cambio->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $gral_moneda_tipo_cambio->control();
			if(!$error->getExisteError()){
				$gral_moneda_tipo_cambio->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: gral_moneda_tipo_cambio_alta.php?cs=1&id='.$gral_moneda_tipo_cambio->getId());
			}
		break;
		case 'guardarnvo':
			$error = $gral_moneda_tipo_cambio->control();
			if(!$error->getExisteError()){
				$gral_moneda_tipo_cambio->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: gral_moneda_tipo_cambio_alta.php?cs=1');
				$gral_moneda_tipo_cambio = new GralMonedaTipoCambio();
			}
		break;
	}
	Gral::setSes('GralMonedaTipoCambio_ULTIMO_INSERTADO', $gral_moneda_tipo_cambio->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_gral_moneda_tipo_cambio_id = Gral::getVars(2, $prefijo.'cmb_gral_moneda_tipo_cambio_id', 0);
	if($cmb_gral_moneda_tipo_cambio_id != 0){
		$gral_moneda_tipo_cambio = GralMonedaTipoCambio::getOxId($cmb_gral_moneda_tipo_cambio_id);
	}else{
	
	$gral_moneda_tipo_cambio->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$gral_moneda_tipo_cambio->setFecha(Gral::getVars(2, "fecha", date('Y-m-d')));
	$gral_moneda_tipo_cambio->setGralMonedaId(Gral::getVars(2, "gral_moneda_id", 'null'));
	$gral_moneda_tipo_cambio->setGralMonedaComparada(Gral::getVars(2, "gral_moneda_comparada", 'null'));
	$gral_moneda_tipo_cambio->setTipoCambio(Gral::getVars(2, "tipo_cambio", 0));
	$gral_moneda_tipo_cambio->setCoeficienteAjuste(Gral::getVars(2, "coeficiente_ajuste", 0));
	$gral_moneda_tipo_cambio->setTipoCambioReal(Gral::getVars(2, "tipo_cambio_real", 0));
	$gral_moneda_tipo_cambio->setActual(Gral::getVars(2, "actual", 0));
	$gral_moneda_tipo_cambio->setCodigo(Gral::getVars(2, "codigo", ''));
	$gral_moneda_tipo_cambio->setObservacion(Gral::getVars(2, "observacion", ''));
	$gral_moneda_tipo_cambio->setOrden(Gral::getVars(2, "orden", 0));
	$gral_moneda_tipo_cambio->setEstado(Gral::getVars(2, "estado", 0));
	$gral_moneda_tipo_cambio->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$gral_moneda_tipo_cambio->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$gral_moneda_tipo_cambio->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$gral_moneda_tipo_cambio->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $gral_moneda_tipo_cambio->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/gral_moneda_tipo_cambio/gral_moneda_tipo_cambio_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_gral_moneda_tipo_cambio' width='90%'>
        
				<tr>
				  <td  id="label_gral_moneda_tipo_cambio_txt_fecha" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha' ?>" >
				  
                                        <?php Lang::_lang('Fecha', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_moneda_tipo_cambio_txt_fecha" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_moneda_tipo_cambio_txt_fecha' type='text' class='textbox <?php echo $error_input_css ?> date' id='gral_moneda_tipo_cambio_txt_fecha' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($gral_moneda_tipo_cambio->getFecha()), true) ?>' size='40' />
					<input type='button' id='cal_gral_moneda_tipo_cambio_txt_fecha' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'gral_moneda_tipo_cambio_txt_fecha', ifFormat: '%d/%m/%Y', button: 'cal_gral_moneda_tipo_cambio_txt_fecha'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_gral_moneda_tipo_cambio_alta_fecha', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_moneda_tipo_cambio_alta_fecha', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_moneda_tipo_cambio_alta_fecha', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_moneda_tipo_cambio_alta_fecha', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_moneda_tipo_cambio_cmb_gral_moneda_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_moneda_id' ?>" >
				  
                                        <?php Lang::_lang('GralMoneda', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_moneda_tipo_cambio_cmb_gral_moneda_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_moneda_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gral_moneda_tipo_cambio_cmb_gral_moneda_id', Gral::getCmbFiltro(GralMoneda::getGralMonedasCmb(), '...'), $gral_moneda_tipo_cambio->getGralMonedaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('GRAL_MONEDA_TIPO_CAMBIO_ALTA_CMB_EDIT_GRAL_MONEDA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="gral_moneda_tipo_cambio_cmb_gral_moneda_id" clase_id="gral_moneda" prefijo='gral_moneda_tipo_cambio_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_moneda_id" <?php echo ($gral_moneda_tipo_cambio->getGralMonedaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="gral_moneda_tipo_cambio_cmb_gral_moneda_id" clase_id="gral_moneda" prefijo='gral_moneda_tipo_cambio_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_gral_moneda_tipo_cambio_cmb_gral_moneda_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_gral_moneda_tipo_cambio_alta_gral_moneda_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_moneda_tipo_cambio_alta_gral_moneda_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_moneda_tipo_cambio_alta_gral_moneda_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_moneda_tipo_cambio_alta_gral_moneda_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_moneda_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_moneda_tipo_cambio_cmb_gral_moneda_comparada" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_moneda_comparada' ?>" >
				  
                                        <?php Lang::_lang('Moneda Comparada', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_moneda_tipo_cambio_cmb_gral_moneda_comparada" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_moneda_comparada')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gral_moneda_tipo_cambio_cmb_gral_moneda_comparada', Gral::getCmbFiltro(GralMoneda::getGralMonedasCmb(), '...'), $gral_moneda_tipo_cambio->getGralMonedaComparada(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_gral_moneda_tipo_cambio_alta_gral_moneda_comparada', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_moneda_tipo_cambio_alta_gral_moneda_comparada', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_moneda_tipo_cambio_alta_gral_moneda_comparada', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_moneda_tipo_cambio_alta_gral_moneda_comparada', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_moneda_comparada')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_moneda_tipo_cambio_txt_tipo_cambio" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_tipo_cambio' ?>" >
				  
                                        <?php Lang::_lang('Tipo Cambio', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_moneda_tipo_cambio_txt_tipo_cambio" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('tipo_cambio')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_moneda_tipo_cambio_txt_tipo_cambio' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_moneda_tipo_cambio_txt_tipo_cambio' value='<?php Gral::_echoTxt($gral_moneda_tipo_cambio->getTipoCambio(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gral_moneda_tipo_cambio_alta_tipo_cambio', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_moneda_tipo_cambio_alta_tipo_cambio', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_moneda_tipo_cambio_alta_tipo_cambio', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_moneda_tipo_cambio_alta_tipo_cambio', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('tipo_cambio')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_moneda_tipo_cambio_txt_coeficiente_ajuste" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_coeficiente_ajuste' ?>" >
				  
                                        <?php Lang::_lang('Coeficiente Ajuste', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_moneda_tipo_cambio_txt_coeficiente_ajuste" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('coeficiente_ajuste')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_moneda_tipo_cambio_txt_coeficiente_ajuste' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_moneda_tipo_cambio_txt_coeficiente_ajuste' value='<?php Gral::_echoTxt($gral_moneda_tipo_cambio->getCoeficienteAjuste(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gral_moneda_tipo_cambio_alta_coeficiente_ajuste', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_moneda_tipo_cambio_alta_coeficiente_ajuste', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_moneda_tipo_cambio_alta_coeficiente_ajuste', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_moneda_tipo_cambio_alta_coeficiente_ajuste', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('coeficiente_ajuste')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_moneda_tipo_cambio_txt_tipo_cambio_real" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_tipo_cambio_real' ?>" >
				  
                                        <?php Lang::_lang('Tipo Cambio Real', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_moneda_tipo_cambio_txt_tipo_cambio_real" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('tipo_cambio_real')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_moneda_tipo_cambio_txt_tipo_cambio_real' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_moneda_tipo_cambio_txt_tipo_cambio_real' value='<?php Gral::_echoTxt($gral_moneda_tipo_cambio->getTipoCambioReal(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gral_moneda_tipo_cambio_alta_tipo_cambio_real', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_moneda_tipo_cambio_alta_tipo_cambio_real', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_moneda_tipo_cambio_alta_tipo_cambio_real', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_moneda_tipo_cambio_alta_tipo_cambio_real', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('tipo_cambio_real')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_moneda_tipo_cambio_cmb_actual" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_actual' ?>" >
				  
                                        <?php Lang::_lang('Actual', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_moneda_tipo_cambio_cmb_actual" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('actual')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gral_moneda_tipo_cambio_cmb_actual', GralSiNo::getGralSiNosCmb(), $gral_moneda_tipo_cambio->getActual(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_gral_moneda_tipo_cambio_alta_actual', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_moneda_tipo_cambio_alta_actual', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_moneda_tipo_cambio_alta_actual', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_moneda_tipo_cambio_alta_actual', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('actual')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_moneda_tipo_cambio_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_moneda_tipo_cambio_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='gral_moneda_tipo_cambio_txa_observacion' rows='3' cols='50' id='gral_moneda_tipo_cambio_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($gral_moneda_tipo_cambio->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_gral_moneda_tipo_cambio_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_moneda_tipo_cambio_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_moneda_tipo_cambio_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_moneda_tipo_cambio_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($gral_moneda_tipo_cambio->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_gral_moneda_tipo_cambio_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='gral_moneda_tipo_cambio'/>
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

