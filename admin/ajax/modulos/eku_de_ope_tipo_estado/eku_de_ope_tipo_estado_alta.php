<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('EKU_DE_OPE_TIPO_ESTADO_ALTA')){
    echo "No tiene asignada la credencial EKU_DE_OPE_TIPO_ESTADO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'eku_de_ope_tipo_estado';
$db_nombre_pagina = 'eku_de_ope_tipo_estado_alta';

$eku_de_ope_tipo_estado = new EkuDeOpeTipoEstado();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$eku_de_ope_tipo_estado = new EkuDeOpeTipoEstado();
	if(trim($hdn_id) != '') $eku_de_ope_tipo_estado->setId($hdn_id, false);
	$eku_de_ope_tipo_estado->setDescripcion(Gral::getVars(1, "eku_de_ope_tipo_estado_txt_descripcion"));
	$eku_de_ope_tipo_estado->setDescripcionCorta(Gral::getVars(1, "eku_de_ope_tipo_estado_txt_descripcion_corta"));
	$eku_de_ope_tipo_estado->setAprobado(Gral::getVars(1, "eku_de_ope_tipo_estado_cmb_aprobado", 0));
	$eku_de_ope_tipo_estado->setActivo(Gral::getVars(1, "eku_de_ope_tipo_estado_cmb_activo", 0));
	$eku_de_ope_tipo_estado->setTerminal(Gral::getVars(1, "eku_de_ope_tipo_estado_cmb_terminal", 0));
	$eku_de_ope_tipo_estado->setAnulado(Gral::getVars(1, "eku_de_ope_tipo_estado_cmb_anulado", 0));
	$eku_de_ope_tipo_estado->setGestionable(Gral::getVars(1, "eku_de_ope_tipo_estado_cmb_gestionable", 0));
	$eku_de_ope_tipo_estado->setColor(Gral::getVars(1, "eku_de_ope_tipo_estado_txt_color"));
	$eku_de_ope_tipo_estado->setColorSecundario(Gral::getVars(1, "eku_de_ope_tipo_estado_txt_color_secundario"));
	$eku_de_ope_tipo_estado->setCodigo(Gral::getVars(1, "eku_de_ope_tipo_estado_txt_codigo"));
	$eku_de_ope_tipo_estado->setObservacion(Gral::getVars(1, "eku_de_ope_tipo_estado_txa_observacion"));
	$eku_de_ope_tipo_estado->setOrden(Gral::getVars(1, "eku_de_ope_tipo_estado_txt_orden", 0));
	$eku_de_ope_tipo_estado->setEstado(Gral::getVars(1, "eku_de_ope_tipo_estado_cmb_estado", 0));
	$eku_de_ope_tipo_estado->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_ope_tipo_estado_txt_creado")));
	$eku_de_ope_tipo_estado->setCreadoPor(Gral::getVars(1, "eku_de_ope_tipo_estado__creado_por", 0));
	$eku_de_ope_tipo_estado->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_ope_tipo_estado_txt_modificado")));
	$eku_de_ope_tipo_estado->setModificadoPor(Gral::getVars(1, "eku_de_ope_tipo_estado__modificado_por", 0));

	$eku_de_ope_tipo_estado_estado = new EkuDeOpeTipoEstado();
	if(trim($hdn_id) != ''){
		$eku_de_ope_tipo_estado_estado->setId($hdn_id);
		$eku_de_ope_tipo_estado->setEstado($eku_de_ope_tipo_estado_estado->getEstado());
				
	}else{
		$eku_de_ope_tipo_estado->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $eku_de_ope_tipo_estado->control();
			if(!$error->getExisteError()){
				$eku_de_ope_tipo_estado->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: eku_de_ope_tipo_estado_alta.php?cs=1&id='.$eku_de_ope_tipo_estado->getId());
			}
		break;
		case 'guardarnvo':
			$error = $eku_de_ope_tipo_estado->control();
			if(!$error->getExisteError()){
				$eku_de_ope_tipo_estado->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: eku_de_ope_tipo_estado_alta.php?cs=1');
				$eku_de_ope_tipo_estado = new EkuDeOpeTipoEstado();
			}
		break;
	}
	Gral::setSes('EkuDeOpeTipoEstado_ULTIMO_INSERTADO', $eku_de_ope_tipo_estado->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_eku_de_ope_tipo_estado_id = Gral::getVars(2, $prefijo.'cmb_eku_de_ope_tipo_estado_id', 0);
	if($cmb_eku_de_ope_tipo_estado_id != 0){
		$eku_de_ope_tipo_estado = EkuDeOpeTipoEstado::getOxId($cmb_eku_de_ope_tipo_estado_id);
	}else{
	
	$eku_de_ope_tipo_estado->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$eku_de_ope_tipo_estado->setDescripcionCorta(Gral::getVars(2, "descripcion_corta", ''));
	$eku_de_ope_tipo_estado->setAprobado(Gral::getVars(2, "aprobado", 0));
	$eku_de_ope_tipo_estado->setActivo(Gral::getVars(2, "activo", 0));
	$eku_de_ope_tipo_estado->setTerminal(Gral::getVars(2, "terminal", 0));
	$eku_de_ope_tipo_estado->setAnulado(Gral::getVars(2, "anulado", 0));
	$eku_de_ope_tipo_estado->setGestionable(Gral::getVars(2, "gestionable", 0));
	$eku_de_ope_tipo_estado->setColor(Gral::getVars(2, "color", ''));
	$eku_de_ope_tipo_estado->setColorSecundario(Gral::getVars(2, "color_secundario", ''));
	$eku_de_ope_tipo_estado->setCodigo(Gral::getVars(2, "codigo", ''));
	$eku_de_ope_tipo_estado->setObservacion(Gral::getVars(2, "observacion", ''));
	$eku_de_ope_tipo_estado->setOrden(Gral::getVars(2, "orden", 0));
	$eku_de_ope_tipo_estado->setEstado(Gral::getVars(2, "estado", 0));
	$eku_de_ope_tipo_estado->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$eku_de_ope_tipo_estado->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$eku_de_ope_tipo_estado->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$eku_de_ope_tipo_estado->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $eku_de_ope_tipo_estado->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/eku_de_ope_tipo_estado/eku_de_ope_tipo_estado_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_eku_de_ope_tipo_estado' width='90%'>
        
				<tr>
				  <td  id="label_eku_de_ope_tipo_estado_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_ope_tipo_estado_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_ope_tipo_estado_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_ope_tipo_estado_txt_descripcion' value='<?php Gral::_echoTxt($eku_de_ope_tipo_estado->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_ope_tipo_estado_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_ope_tipo_estado_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_ope_tipo_estado_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_ope_tipo_estado_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_ope_tipo_estado_txt_descripcion_corta" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion_corta' ?>" >
				  
                                        <?php Lang::_lang('Descripcion Corta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_ope_tipo_estado_txt_descripcion_corta" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion_corta')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_ope_tipo_estado_txt_descripcion_corta' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_ope_tipo_estado_txt_descripcion_corta' value='<?php Gral::_echoTxt($eku_de_ope_tipo_estado->getDescripcionCorta(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_ope_tipo_estado_alta_descripcion_corta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_ope_tipo_estado_alta_descripcion_corta', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_ope_tipo_estado_alta_descripcion_corta', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_ope_tipo_estado_alta_descripcion_corta', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion_corta')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_ope_tipo_estado_cmb_aprobado" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_aprobado' ?>" >
				  
                                        <?php Lang::_lang('Aprobado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_ope_tipo_estado_cmb_aprobado" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('aprobado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_de_ope_tipo_estado_cmb_aprobado', GralSiNo::getGralSiNosCmb(), $eku_de_ope_tipo_estado->getAprobado(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_eku_de_ope_tipo_estado_alta_aprobado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_ope_tipo_estado_alta_aprobado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_ope_tipo_estado_alta_aprobado', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_ope_tipo_estado_alta_aprobado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('aprobado')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_ope_tipo_estado_cmb_activo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_activo' ?>" >
				  
                                        <?php Lang::_lang('Activo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_ope_tipo_estado_cmb_activo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('activo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_de_ope_tipo_estado_cmb_activo', GralSiNo::getGralSiNosCmb(), $eku_de_ope_tipo_estado->getActivo(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_eku_de_ope_tipo_estado_alta_activo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_ope_tipo_estado_alta_activo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_ope_tipo_estado_alta_activo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_ope_tipo_estado_alta_activo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('activo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_ope_tipo_estado_cmb_terminal" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_terminal' ?>" >
				  
                                        <?php Lang::_lang('Terminal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_ope_tipo_estado_cmb_terminal" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('terminal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_de_ope_tipo_estado_cmb_terminal', GralSiNo::getGralSiNosCmb(), $eku_de_ope_tipo_estado->getTerminal(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_eku_de_ope_tipo_estado_alta_terminal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_ope_tipo_estado_alta_terminal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_ope_tipo_estado_alta_terminal', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_ope_tipo_estado_alta_terminal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('terminal')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_ope_tipo_estado_cmb_anulado" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_anulado' ?>" >
				  
                                        <?php Lang::_lang('Anulado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_ope_tipo_estado_cmb_anulado" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('anulado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_de_ope_tipo_estado_cmb_anulado', GralSiNo::getGralSiNosCmb(), $eku_de_ope_tipo_estado->getAnulado(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_eku_de_ope_tipo_estado_alta_anulado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_ope_tipo_estado_alta_anulado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_ope_tipo_estado_alta_anulado', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_ope_tipo_estado_alta_anulado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('anulado')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_ope_tipo_estado_cmb_gestionable" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gestionable' ?>" >
				  
                                        <?php Lang::_lang('Gestionable', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_ope_tipo_estado_cmb_gestionable" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gestionable')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_de_ope_tipo_estado_cmb_gestionable', GralSiNo::getGralSiNosCmb(), $eku_de_ope_tipo_estado->getGestionable(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_eku_de_ope_tipo_estado_alta_gestionable', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_ope_tipo_estado_alta_gestionable', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_ope_tipo_estado_alta_gestionable', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_ope_tipo_estado_alta_gestionable', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gestionable')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_ope_tipo_estado_txt_color" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_color' ?>" >
				  
                                        <?php Lang::_lang('Color', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_ope_tipo_estado_txt_color" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('color')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_ope_tipo_estado_txt_color' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_ope_tipo_estado_txt_color' value='<?php Gral::_echoTxt($eku_de_ope_tipo_estado->getColor(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_eku_de_ope_tipo_estado_alta_color', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_ope_tipo_estado_alta_color', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_ope_tipo_estado_alta_color', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_ope_tipo_estado_alta_color', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('color')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_ope_tipo_estado_txt_color_secundario" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_color_secundario' ?>" >
				  
                                        <?php Lang::_lang('Color Secundario', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_ope_tipo_estado_txt_color_secundario" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('color_secundario')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_ope_tipo_estado_txt_color_secundario' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_ope_tipo_estado_txt_color_secundario' value='<?php Gral::_echoTxt($eku_de_ope_tipo_estado->getColorSecundario(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_eku_de_ope_tipo_estado_alta_color_secundario', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_ope_tipo_estado_alta_color_secundario', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_ope_tipo_estado_alta_color_secundario', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_ope_tipo_estado_alta_color_secundario', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('color_secundario')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_ope_tipo_estado_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_ope_tipo_estado_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_ope_tipo_estado_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_ope_tipo_estado_txt_codigo' value='<?php Gral::_echoTxt($eku_de_ope_tipo_estado->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_eku_de_ope_tipo_estado_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_ope_tipo_estado_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_ope_tipo_estado_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_ope_tipo_estado_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_ope_tipo_estado_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_ope_tipo_estado_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='eku_de_ope_tipo_estado_txa_observacion' rows='10' cols='50' id='eku_de_ope_tipo_estado_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($eku_de_ope_tipo_estado->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_eku_de_ope_tipo_estado_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_ope_tipo_estado_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_ope_tipo_estado_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_ope_tipo_estado_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_ope_tipo_estado->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_eku_de_ope_tipo_estado_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='eku_de_ope_tipo_estado'/>
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

