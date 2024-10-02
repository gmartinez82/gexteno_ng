<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('ALT_ALERTA_ALTA')){
    echo "No tiene asignada la credencial ALT_ALERTA_ALTA. ";
    return false;
}

$db_nombre_objeto = 'alt_alerta';
$db_nombre_pagina = 'alt_alerta_alta';

$alt_alerta = new AltAlerta();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$alt_alerta = new AltAlerta();
	if(trim($hdn_id) != '') $alt_alerta->setId($hdn_id, false);
	$alt_alerta->setAltModuloId(Gral::getVars(1, "alt_alerta_cmb_alt_modulo_id", null));
	$alt_alerta->setAltTipoId(Gral::getVars(1, "alt_alerta_cmb_alt_tipo_id", null));
	$alt_alerta->setAltNivelId(Gral::getVars(1, "alt_alerta_cmb_alt_nivel_id", null));
	$alt_alerta->setAltOrigenId(Gral::getVars(1, "alt_alerta_cmb_alt_origen_id", null));
	$alt_alerta->setAltControlId(Gral::getVars(1, "alt_alerta_cmb_alt_control_id", null));
	$alt_alerta->setDescripcion(Gral::getVars(1, "alt_alerta_txt_descripcion"));
	$alt_alerta->setCodigo(Gral::getVars(1, "alt_alerta_txt_codigo"));
	$alt_alerta->setReferencia(Gral::getVars(1, "alt_alerta_txt_referencia", null));
	$alt_alerta->setUrlRedireccion(Gral::getVars(1, "alt_alerta_txt_url_redireccion", null));
	$alt_alerta->setObservacion(Gral::getVars(1, "alt_alerta_txa_observacion"));
	$alt_alerta->setOrden(Gral::getVars(1, "alt_alerta_txt_orden", 0));
	$alt_alerta->setEstado(Gral::getVars(1, "alt_alerta__estado", 0));
	$alt_alerta->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "alt_alerta_txt_creado")));
	$alt_alerta->setCreadoPor(Gral::getVars(1, "alt_alerta__creado_por", 0));
	$alt_alerta->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "alt_alerta_txt_modificado")));
	$alt_alerta->setModificadoPor(Gral::getVars(1, "alt_alerta__modificado_por", 0));

	$alt_alerta_estado = new AltAlerta();
	if(trim($hdn_id) != ''){
		$alt_alerta_estado->setId($hdn_id);
		$alt_alerta->setEstado($alt_alerta_estado->getEstado());
				
	}else{
		$alt_alerta->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $alt_alerta->control();
			if(!$error->getExisteError()){
				$alt_alerta->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: alt_alerta_alta.php?cs=1&id='.$alt_alerta->getId());
			}
		break;
		case 'guardarnvo':
			$error = $alt_alerta->control();
			if(!$error->getExisteError()){
				$alt_alerta->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: alt_alerta_alta.php?cs=1');
				$alt_alerta = new AltAlerta();
			}
		break;
	}
	Gral::setSes('AltAlerta_ULTIMO_INSERTADO', $alt_alerta->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_alt_alerta_id = Gral::getVars(2, $prefijo.'cmb_alt_alerta_id', 0);
	if($cmb_alt_alerta_id != 0){
		$alt_alerta = AltAlerta::getOxId($cmb_alt_alerta_id);
	}else{
	
	$alt_alerta->setAltModuloId(Gral::getVars(2, "alt_modulo_id", 'null'));
	$alt_alerta->setAltTipoId(Gral::getVars(2, "alt_tipo_id", 'null'));
	$alt_alerta->setAltNivelId(Gral::getVars(2, "alt_nivel_id", 'null'));
	$alt_alerta->setAltOrigenId(Gral::getVars(2, "alt_origen_id", 'null'));
	$alt_alerta->setAltControlId(Gral::getVars(2, "alt_control_id", 'null'));
	$alt_alerta->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$alt_alerta->setCodigo(Gral::getVars(2, "codigo", ''));
	$alt_alerta->setReferencia(Gral::getVars(2, "referencia", 0));
	$alt_alerta->setUrlRedireccion(Gral::getVars(2, "url_redireccion", 0));
	$alt_alerta->setObservacion(Gral::getVars(2, "observacion", ''));
	$alt_alerta->setOrden(Gral::getVars(2, "orden", 0));
	$alt_alerta->setEstado(Gral::getVars(2, "estado", 0));
	$alt_alerta->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$alt_alerta->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$alt_alerta->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$alt_alerta->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $alt_alerta->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/alt_alerta/alt_alerta_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_alt_alerta' width='90%'>
        
				<tr>
				  <td  id="label_alt_alerta_cmb_alt_modulo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_alt_modulo_id' ?>" >
				  
                                        <?php Lang::_lang('Modulo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_alt_alerta_cmb_alt_modulo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('alt_modulo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'alt_alerta_cmb_alt_modulo_id', Gral::getCmbFiltro(AltModulo::getAltModulosCmb(), '...'), $alt_alerta->getAltModuloId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('ALT_ALERTA_ALTA_CMB_EDIT_ALT_MODULO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="alt_alerta_cmb_alt_modulo_id" clase_id="alt_modulo" prefijo='alt_alerta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_alt_modulo_id" <?php echo ($alt_alerta->getAltModuloId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="alt_alerta_cmb_alt_modulo_id" clase_id="alt_modulo" prefijo='alt_alerta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_alt_alerta_cmb_alt_modulo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_alt_alerta_alta_alt_modulo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_alt_alerta_alta_alt_modulo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_alt_alerta_alta_alt_modulo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_alt_alerta_alta_alt_modulo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('alt_modulo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_alt_alerta_cmb_alt_tipo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_alt_tipo_id' ?>" >
				  
                                        <?php Lang::_lang('Tipo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_alt_alerta_cmb_alt_tipo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('alt_tipo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'alt_alerta_cmb_alt_tipo_id', Gral::getCmbFiltro(AltTipo::getAltTiposCmb(), '...'), $alt_alerta->getAltTipoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('ALT_ALERTA_ALTA_CMB_EDIT_ALT_TIPO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="alt_alerta_cmb_alt_tipo_id" clase_id="alt_tipo" prefijo='alt_alerta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_alt_tipo_id" <?php echo ($alt_alerta->getAltTipoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="alt_alerta_cmb_alt_tipo_id" clase_id="alt_tipo" prefijo='alt_alerta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_alt_alerta_cmb_alt_tipo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_alt_alerta_alta_alt_tipo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_alt_alerta_alta_alt_tipo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_alt_alerta_alta_alt_tipo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_alt_alerta_alta_alt_tipo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('alt_tipo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_alt_alerta_cmb_alt_nivel_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_alt_nivel_id' ?>" >
				  
                                        <?php Lang::_lang('Nivel', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_alt_alerta_cmb_alt_nivel_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('alt_nivel_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'alt_alerta_cmb_alt_nivel_id', Gral::getCmbFiltro(AltNivel::getAltNivelsCmb(), '...'), $alt_alerta->getAltNivelId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('ALT_ALERTA_ALTA_CMB_EDIT_ALT_NIVEL')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="alt_alerta_cmb_alt_nivel_id" clase_id="alt_nivel" prefijo='alt_alerta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_alt_nivel_id" <?php echo ($alt_alerta->getAltNivelId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="alt_alerta_cmb_alt_nivel_id" clase_id="alt_nivel" prefijo='alt_alerta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_alt_alerta_cmb_alt_nivel_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_alt_alerta_alta_alt_nivel_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_alt_alerta_alta_alt_nivel_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_alt_alerta_alta_alt_nivel_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_alt_alerta_alta_alt_nivel_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('alt_nivel_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_alt_alerta_cmb_alt_origen_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_alt_origen_id' ?>" >
				  
                                        <?php Lang::_lang('Origen', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_alt_alerta_cmb_alt_origen_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('alt_origen_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'alt_alerta_cmb_alt_origen_id', Gral::getCmbFiltro(AltOrigen::getAltOrigensCmb(), '...'), $alt_alerta->getAltOrigenId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('ALT_ALERTA_ALTA_CMB_EDIT_ALT_ORIGEN')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="alt_alerta_cmb_alt_origen_id" clase_id="alt_origen" prefijo='alt_alerta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_alt_origen_id" <?php echo ($alt_alerta->getAltOrigenId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="alt_alerta_cmb_alt_origen_id" clase_id="alt_origen" prefijo='alt_alerta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_alt_alerta_cmb_alt_origen_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_alt_alerta_alta_alt_origen_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_alt_alerta_alta_alt_origen_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_alt_alerta_alta_alt_origen_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_alt_alerta_alta_alt_origen_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('alt_origen_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_alt_alerta_cmb_alt_control_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_alt_control_id' ?>" >
				  
                                        <?php Lang::_lang('Control', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_alt_alerta_cmb_alt_control_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('alt_control_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'alt_alerta_cmb_alt_control_id', Gral::getCmbFiltro(AltControl::getAltControlsCmb(), '...'), $alt_alerta->getAltControlId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('ALT_ALERTA_ALTA_CMB_EDIT_ALT_CONTROL')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="alt_alerta_cmb_alt_control_id" clase_id="alt_control" prefijo='alt_alerta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_alt_control_id" <?php echo ($alt_alerta->getAltControlId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="alt_alerta_cmb_alt_control_id" clase_id="alt_control" prefijo='alt_alerta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_alt_alerta_cmb_alt_control_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_alt_alerta_alta_alt_control_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_alt_alerta_alta_alt_control_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_alt_alerta_alta_alt_control_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_alt_alerta_alta_alt_control_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('alt_control_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_alt_alerta_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_alt_alerta_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='alt_alerta_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='alt_alerta_txt_descripcion' value='<?php Gral::_echoTxt($alt_alerta->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_alt_alerta_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_alt_alerta_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_alt_alerta_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_alt_alerta_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_alt_alerta_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_alt_alerta_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='alt_alerta_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='alt_alerta_txt_codigo' value='<?php Gral::_echoTxt($alt_alerta->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_alt_alerta_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_alt_alerta_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_alt_alerta_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_alt_alerta_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_alt_alerta_txt_referencia" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_referencia' ?>" >
				  
                                        <?php Lang::_lang('Referencia', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_alt_alerta_txt_referencia" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('referencia')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='alt_alerta_txt_referencia' type='text' class='textbox <?php echo $error_input_css ?> ' id='alt_alerta_txt_referencia' value='<?php Gral::_echoTxt($alt_alerta->getReferencia(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_alt_alerta_alta_referencia', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_alt_alerta_alta_referencia', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_alt_alerta_alta_referencia', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_alt_alerta_alta_referencia', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('referencia')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_alt_alerta_txt_url_redireccion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_url_redireccion' ?>" >
				  
                                        <?php Lang::_lang('Url Redirecc', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_alt_alerta_txt_url_redireccion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('url_redireccion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='alt_alerta_txt_url_redireccion' type='text' class='textbox <?php echo $error_input_css ?> ' id='alt_alerta_txt_url_redireccion' value='<?php Gral::_echoTxt($alt_alerta->getUrlRedireccion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_alt_alerta_alta_url_redireccion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_alt_alerta_alta_url_redireccion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_alt_alerta_alta_url_redireccion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_alt_alerta_alta_url_redireccion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('url_redireccion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_alt_alerta_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_alt_alerta_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='alt_alerta_txa_observacion' rows='10' cols='50' id='alt_alerta_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($alt_alerta->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_alt_alerta_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_alt_alerta_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_alt_alerta_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_alt_alerta_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($alt_alerta->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_alt_alerta_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='alt_alerta'/>
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

