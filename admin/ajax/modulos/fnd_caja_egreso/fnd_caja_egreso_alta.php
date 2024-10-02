<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('FND_CAJA_EGRESO_ALTA')){
    echo "No tiene asignada la credencial FND_CAJA_EGRESO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'fnd_caja_egreso';
$db_nombre_pagina = 'fnd_caja_egreso_alta';

$fnd_caja_egreso = new FndCajaEgreso();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$fnd_caja_egreso = new FndCajaEgreso();
	if(trim($hdn_id) != '') $fnd_caja_egreso->setId($hdn_id, false);
	$fnd_caja_egreso->setDescripcion(Gral::getVars(1, "fnd_caja_egreso_txt_descripcion"));
	$fnd_caja_egreso->setFndCajaId(Gral::getVars(1, "fnd_caja_egreso_dbsug_fnd_caja_id", null));
	$fnd_caja_egreso->setFndCajaTipoEgresoId(Gral::getVars(1, "fnd_caja_egreso_cmb_fnd_caja_tipo_egreso_id", null));
	$fnd_caja_egreso->setCodigoReferencia(Gral::getVars(1, "fnd_caja_egreso_txt_codigo_referencia"));
	$fnd_caja_egreso->setImporte(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "fnd_caja_egreso_txt_importe", 0)));
	$fnd_caja_egreso->setGralFpFormaPagoId(Gral::getVars(1, "fnd_caja_egreso_cmb_gral_fp_forma_pago_id", null));
	$fnd_caja_egreso->setCodigo(Gral::getVars(1, "fnd_caja_egreso_txt_codigo"));
	$fnd_caja_egreso->setObservacion(Gral::getVars(1, "fnd_caja_egreso_txa_observacion"));
	$fnd_caja_egreso->setOrden(Gral::getVars(1, "fnd_caja_egreso_txt_orden", 0));
	$fnd_caja_egreso->setEstado(Gral::getVars(1, "fnd_caja_egreso_cmb_estado", 0));
	$fnd_caja_egreso->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "fnd_caja_egreso_txt_creado")));
	$fnd_caja_egreso->setCreadoPor(Gral::getVars(1, "fnd_caja_egreso__creado_por", 0));
	$fnd_caja_egreso->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "fnd_caja_egreso_txt_modificado")));
	$fnd_caja_egreso->setModificadoPor(Gral::getVars(1, "fnd_caja_egreso__modificado_por", 0));

	$fnd_caja_egreso_estado = new FndCajaEgreso();
	if(trim($hdn_id) != ''){
		$fnd_caja_egreso_estado->setId($hdn_id);
		$fnd_caja_egreso->setEstado($fnd_caja_egreso_estado->getEstado());
				
	}else{
		$fnd_caja_egreso->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $fnd_caja_egreso->control();
			if(!$error->getExisteError()){
				$fnd_caja_egreso->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: fnd_caja_egreso_alta.php?cs=1&id='.$fnd_caja_egreso->getId());
			}
		break;
		case 'guardarnvo':
			$error = $fnd_caja_egreso->control();
			if(!$error->getExisteError()){
				$fnd_caja_egreso->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: fnd_caja_egreso_alta.php?cs=1');
				$fnd_caja_egreso = new FndCajaEgreso();
			}
		break;
	}
	Gral::setSes('FndCajaEgreso_ULTIMO_INSERTADO', $fnd_caja_egreso->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_fnd_caja_egreso_id = Gral::getVars(2, $prefijo.'cmb_fnd_caja_egreso_id', 0);
	if($cmb_fnd_caja_egreso_id != 0){
		$fnd_caja_egreso = FndCajaEgreso::getOxId($cmb_fnd_caja_egreso_id);
	}else{
	
	$fnd_caja_egreso->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$fnd_caja_egreso->setFndCajaId(Gral::getVars(2, "fnd_caja_id", 'null'));
	$fnd_caja_egreso->setFndCajaTipoEgresoId(Gral::getVars(2, "fnd_caja_tipo_egreso_id", 'null'));
	$fnd_caja_egreso->setCodigoReferencia(Gral::getVars(2, "codigo_referencia", ''));
	$fnd_caja_egreso->setImporte(Gral::getVars(2, "importe", 0));
	$fnd_caja_egreso->setGralFpFormaPagoId(Gral::getVars(2, "gral_fp_forma_pago_id", 'null'));
	$fnd_caja_egreso->setCodigo(Gral::getVars(2, "codigo", ''));
	$fnd_caja_egreso->setObservacion(Gral::getVars(2, "observacion", ''));
	$fnd_caja_egreso->setOrden(Gral::getVars(2, "orden", 0));
	$fnd_caja_egreso->setEstado(Gral::getVars(2, "estado", 0));
	$fnd_caja_egreso->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$fnd_caja_egreso->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$fnd_caja_egreso->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$fnd_caja_egreso->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $fnd_caja_egreso->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/fnd_caja_egreso/fnd_caja_egreso_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_fnd_caja_egreso' width='90%'>
        
				<tr>
				  <td  id="label_fnd_caja_egreso_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_caja_egreso_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_caja_egreso_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='fnd_caja_egreso_txt_descripcion' value='<?php Gral::_echoTxt($fnd_caja_egreso->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_fnd_caja_egreso_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_caja_egreso_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_caja_egreso_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_caja_egreso_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_caja_egreso_dbsug_fnd_caja_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fnd_caja_id' ?>" >
				  
                                        <?php Lang::_lang('FndCaja', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_caja_egreso_dbsug_fnd_caja_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fnd_caja_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'fnd_caja_egreso_dbsug_fnd_caja', 'ajax/modulos/fnd_caja/fnd_caja_dbsuggest.php', false, true, '', 'Ingrese ...', $fnd_caja_egreso->getFndCajaId(), $fnd_caja_egreso->getFndCaja()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_fnd_caja_egreso_alta_fnd_caja_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_caja_egreso_alta_fnd_caja_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_caja_egreso_alta_fnd_caja_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_caja_egreso_alta_fnd_caja_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fnd_caja_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_caja_egreso_cmb_fnd_caja_tipo_egreso_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fnd_caja_tipo_egreso_id' ?>" >
				  
                                        <?php Lang::_lang('FndCajaTipoEgreso', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_caja_egreso_cmb_fnd_caja_tipo_egreso_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fnd_caja_tipo_egreso_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_caja_egreso_cmb_fnd_caja_tipo_egreso_id', Gral::getCmbFiltro(FndCajaTipoEgreso::getFndCajaTipoEgresosCmb(), '...'), $fnd_caja_egreso->getFndCajaTipoEgresoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('FND_CAJA_EGRESO_ALTA_CMB_EDIT_FND_CAJA_TIPO_EGRESO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="fnd_caja_egreso_cmb_fnd_caja_tipo_egreso_id" clase_id="fnd_caja_tipo_egreso" prefijo='fnd_caja_egreso_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_fnd_caja_tipo_egreso_id" <?php echo ($fnd_caja_egreso->getFndCajaTipoEgresoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="fnd_caja_egreso_cmb_fnd_caja_tipo_egreso_id" clase_id="fnd_caja_tipo_egreso" prefijo='fnd_caja_egreso_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_fnd_caja_egreso_cmb_fnd_caja_tipo_egreso_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_fnd_caja_egreso_alta_fnd_caja_tipo_egreso_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_caja_egreso_alta_fnd_caja_tipo_egreso_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_caja_egreso_alta_fnd_caja_tipo_egreso_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_caja_egreso_alta_fnd_caja_tipo_egreso_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fnd_caja_tipo_egreso_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_caja_egreso_txt_codigo_referencia" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo_referencia' ?>" >
				  
                                        <?php Lang::_lang('Cod Ref', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_caja_egreso_txt_codigo_referencia" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo_referencia')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_caja_egreso_txt_codigo_referencia' type='text' class='textbox <?php echo $error_input_css ?> ' id='fnd_caja_egreso_txt_codigo_referencia' value='<?php Gral::_echoTxt($fnd_caja_egreso->getCodigoReferencia(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_fnd_caja_egreso_alta_codigo_referencia', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_caja_egreso_alta_codigo_referencia', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_caja_egreso_alta_codigo_referencia', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_caja_egreso_alta_codigo_referencia', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo_referencia')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_caja_egreso_txt_importe" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_importe' ?>" >
				  
                                        <?php Lang::_lang('Importe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_caja_egreso_txt_importe" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('importe')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_caja_egreso_txt_importe' type='text' class='textbox <?php echo $error_input_css ?> moneda' id='fnd_caja_egreso_txt_importe' value='<?php Gral::_echoTxt(Gral::getImporteDesdeDbToPriceFormat($fnd_caja_egreso->getImporte()), true) ?>' size='10' />            
                    <?php if(Lang::_lang('help_fnd_caja_egreso_alta_importe', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_caja_egreso_alta_importe', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_caja_egreso_alta_importe', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_caja_egreso_alta_importe', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('importe')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_caja_egreso_cmb_gral_fp_forma_pago_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_fp_forma_pago_id' ?>" >
				  
                                        <?php Lang::_lang('GralFpFormaPago', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_caja_egreso_cmb_gral_fp_forma_pago_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_fp_forma_pago_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_caja_egreso_cmb_gral_fp_forma_pago_id', Gral::getCmbFiltro(GralFpFormaPago::getGralFpFormaPagosCmb(), '...'), $fnd_caja_egreso->getGralFpFormaPagoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('FND_CAJA_EGRESO_ALTA_CMB_EDIT_GRAL_FP_FORMA_PAGO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="fnd_caja_egreso_cmb_gral_fp_forma_pago_id" clase_id="gral_fp_forma_pago" prefijo='fnd_caja_egreso_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_fp_forma_pago_id" <?php echo ($fnd_caja_egreso->getGralFpFormaPagoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="fnd_caja_egreso_cmb_gral_fp_forma_pago_id" clase_id="gral_fp_forma_pago" prefijo='fnd_caja_egreso_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_fnd_caja_egreso_cmb_gral_fp_forma_pago_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_fnd_caja_egreso_alta_gral_fp_forma_pago_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_caja_egreso_alta_gral_fp_forma_pago_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_caja_egreso_alta_gral_fp_forma_pago_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_caja_egreso_alta_gral_fp_forma_pago_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_fp_forma_pago_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_caja_egreso_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_caja_egreso_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_caja_egreso_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='fnd_caja_egreso_txt_codigo' value='<?php Gral::_echoTxt($fnd_caja_egreso->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_fnd_caja_egreso_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_caja_egreso_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_caja_egreso_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_caja_egreso_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_caja_egreso_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_caja_egreso_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='fnd_caja_egreso_txa_observacion' rows='10' cols='50' id='fnd_caja_egreso_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($fnd_caja_egreso->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_fnd_caja_egreso_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_caja_egreso_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_caja_egreso_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_caja_egreso_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($fnd_caja_egreso->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_fnd_caja_egreso_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='fnd_caja_egreso'/>
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

