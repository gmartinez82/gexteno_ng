<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_WS_FE_PARAM_TIPO_DOCUMENTO_ALTA')){
    echo "No tiene asignada la credencial GRAL_TIPO_DOCUMENTO_WS_FE_PARAM_TIPO_DOCUMENTO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'gral_tipo_documento_ws_fe_param_tipo_documento';
$db_nombre_pagina = 'gral_tipo_documento_ws_fe_param_tipo_documento_alta';

$gral_tipo_documento_ws_fe_param_tipo_documento = new GralTipoDocumentoWsFeParamTipoDocumento();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$gral_tipo_documento_ws_fe_param_tipo_documento = new GralTipoDocumentoWsFeParamTipoDocumento();
	if(trim($hdn_id) != '') $gral_tipo_documento_ws_fe_param_tipo_documento->setId($hdn_id, false);
	$gral_tipo_documento_ws_fe_param_tipo_documento->setDescripcion(Gral::getVars(1, "gral_tipo_documento_ws_fe_param_tipo_documento_txt_descripcion"));
	$gral_tipo_documento_ws_fe_param_tipo_documento->setGralTipoDocumentoId(Gral::getVars(1, "gral_tipo_documento_ws_fe_param_tipo_documento_cmb_gral_tipo_documento_id", null));
	$gral_tipo_documento_ws_fe_param_tipo_documento->setWsFeParamTipoDocumentoId(Gral::getVars(1, "gral_tipo_documento_ws_fe_param_tipo_documento_cmb_ws_fe_param_tipo_documento_id", null));
	$gral_tipo_documento_ws_fe_param_tipo_documento->setCodigo(Gral::getVars(1, "gral_tipo_documento_ws_fe_param_tipo_documento_txt_codigo"));
	$gral_tipo_documento_ws_fe_param_tipo_documento->setObservacion(Gral::getVars(1, "gral_tipo_documento_ws_fe_param_tipo_documento_txa_observacion"));
	$gral_tipo_documento_ws_fe_param_tipo_documento->setOrden(Gral::getVars(1, "gral_tipo_documento_ws_fe_param_tipo_documento_txt_orden", 0));
	$gral_tipo_documento_ws_fe_param_tipo_documento->setEstado(Gral::getVars(1, "gral_tipo_documento_ws_fe_param_tipo_documento_cmb_estado", 0));
	$gral_tipo_documento_ws_fe_param_tipo_documento->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_tipo_documento_ws_fe_param_tipo_documento_txt_creado")));
	$gral_tipo_documento_ws_fe_param_tipo_documento->setCreadoPor(Gral::getVars(1, "gral_tipo_documento_ws_fe_param_tipo_documento__creado_por", 0));
	$gral_tipo_documento_ws_fe_param_tipo_documento->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_tipo_documento_ws_fe_param_tipo_documento_txt_modificado")));
	$gral_tipo_documento_ws_fe_param_tipo_documento->setModificadoPor(Gral::getVars(1, "gral_tipo_documento_ws_fe_param_tipo_documento__modificado_por", 0));

	$gral_tipo_documento_ws_fe_param_tipo_documento_estado = new GralTipoDocumentoWsFeParamTipoDocumento();
	if(trim($hdn_id) != ''){
		$gral_tipo_documento_ws_fe_param_tipo_documento_estado->setId($hdn_id);
		$gral_tipo_documento_ws_fe_param_tipo_documento->setEstado($gral_tipo_documento_ws_fe_param_tipo_documento_estado->getEstado());
				
	}else{
		$gral_tipo_documento_ws_fe_param_tipo_documento->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $gral_tipo_documento_ws_fe_param_tipo_documento->control();
			if(!$error->getExisteError()){
				$gral_tipo_documento_ws_fe_param_tipo_documento->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: gral_tipo_documento_ws_fe_param_tipo_documento_alta.php?cs=1&id='.$gral_tipo_documento_ws_fe_param_tipo_documento->getId());
			}
		break;
		case 'guardarnvo':
			$error = $gral_tipo_documento_ws_fe_param_tipo_documento->control();
			if(!$error->getExisteError()){
				$gral_tipo_documento_ws_fe_param_tipo_documento->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: gral_tipo_documento_ws_fe_param_tipo_documento_alta.php?cs=1');
				$gral_tipo_documento_ws_fe_param_tipo_documento = new GralTipoDocumentoWsFeParamTipoDocumento();
			}
		break;
	}
	Gral::setSes('GralTipoDocumentoWsFeParamTipoDocumento_ULTIMO_INSERTADO', $gral_tipo_documento_ws_fe_param_tipo_documento->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_gral_tipo_documento_ws_fe_param_tipo_documento_id = Gral::getVars(2, $prefijo.'cmb_gral_tipo_documento_ws_fe_param_tipo_documento_id', 0);
	if($cmb_gral_tipo_documento_ws_fe_param_tipo_documento_id != 0){
		$gral_tipo_documento_ws_fe_param_tipo_documento = GralTipoDocumentoWsFeParamTipoDocumento::getOxId($cmb_gral_tipo_documento_ws_fe_param_tipo_documento_id);
	}else{
	
	$gral_tipo_documento_ws_fe_param_tipo_documento->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$gral_tipo_documento_ws_fe_param_tipo_documento->setGralTipoDocumentoId(Gral::getVars(2, "gral_tipo_documento_id", 'null'));
	$gral_tipo_documento_ws_fe_param_tipo_documento->setWsFeParamTipoDocumentoId(Gral::getVars(2, "ws_fe_param_tipo_documento_id", 'null'));
	$gral_tipo_documento_ws_fe_param_tipo_documento->setCodigo(Gral::getVars(2, "codigo", ''));
	$gral_tipo_documento_ws_fe_param_tipo_documento->setObservacion(Gral::getVars(2, "observacion", ''));
	$gral_tipo_documento_ws_fe_param_tipo_documento->setOrden(Gral::getVars(2, "orden", 0));
	$gral_tipo_documento_ws_fe_param_tipo_documento->setEstado(Gral::getVars(2, "estado", 0));
	$gral_tipo_documento_ws_fe_param_tipo_documento->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$gral_tipo_documento_ws_fe_param_tipo_documento->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$gral_tipo_documento_ws_fe_param_tipo_documento->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$gral_tipo_documento_ws_fe_param_tipo_documento->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $gral_tipo_documento_ws_fe_param_tipo_documento->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/gral_tipo_documento_ws_fe_param_tipo_documento/gral_tipo_documento_ws_fe_param_tipo_documento_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_gral_tipo_documento_ws_fe_param_tipo_documento' width='90%'>
        
				<tr>
				  <td  id="label_gral_tipo_documento_ws_fe_param_tipo_documento_cmb_gral_tipo_documento_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_tipo_documento_id' ?>" >
				  
                                        <?php Lang::_lang('GralTipoDocumento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_tipo_documento_ws_fe_param_tipo_documento_cmb_gral_tipo_documento_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_tipo_documento_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gral_tipo_documento_ws_fe_param_tipo_documento_cmb_gral_tipo_documento_id', Gral::getCmbFiltro(GralTipoDocumento::getGralTipoDocumentosCmb(), '...'), $gral_tipo_documento_ws_fe_param_tipo_documento->getGralTipoDocumentoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_WS_FE_PARAM_TIPO_DOCUMENTO_ALTA_CMB_EDIT_GRAL_TIPO_DOCUMENTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="gral_tipo_documento_ws_fe_param_tipo_documento_cmb_gral_tipo_documento_id" clase_id="gral_tipo_documento" prefijo='gral_tipo_documento_ws_fe_param_tipo_documento_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_tipo_documento_id" <?php echo ($gral_tipo_documento_ws_fe_param_tipo_documento->getGralTipoDocumentoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="gral_tipo_documento_ws_fe_param_tipo_documento_cmb_gral_tipo_documento_id" clase_id="gral_tipo_documento" prefijo='gral_tipo_documento_ws_fe_param_tipo_documento_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_gral_tipo_documento_ws_fe_param_tipo_documento_cmb_gral_tipo_documento_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_gral_tipo_documento_ws_fe_param_tipo_documento_alta_gral_tipo_documento_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_tipo_documento_ws_fe_param_tipo_documento_alta_gral_tipo_documento_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_tipo_documento_ws_fe_param_tipo_documento_alta_gral_tipo_documento_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_tipo_documento_ws_fe_param_tipo_documento_alta_gral_tipo_documento_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_tipo_documento_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_tipo_documento_ws_fe_param_tipo_documento_cmb_ws_fe_param_tipo_documento_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_param_tipo_documento_id' ?>" >
				  
                                        <?php Lang::_lang('WsFeParamTipoDocumento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_tipo_documento_ws_fe_param_tipo_documento_cmb_ws_fe_param_tipo_documento_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_param_tipo_documento_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gral_tipo_documento_ws_fe_param_tipo_documento_cmb_ws_fe_param_tipo_documento_id', Gral::getCmbFiltro(WsFeParamTipoDocumento::getWsFeParamTipoDocumentosCmb(), '...'), $gral_tipo_documento_ws_fe_param_tipo_documento->getWsFeParamTipoDocumentoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_WS_FE_PARAM_TIPO_DOCUMENTO_ALTA_CMB_EDIT_WS_FE_PARAM_TIPO_DOCUMENTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="gral_tipo_documento_ws_fe_param_tipo_documento_cmb_ws_fe_param_tipo_documento_id" clase_id="ws_fe_param_tipo_documento" prefijo='gral_tipo_documento_ws_fe_param_tipo_documento_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ws_fe_param_tipo_documento_id" <?php echo ($gral_tipo_documento_ws_fe_param_tipo_documento->getWsFeParamTipoDocumentoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="gral_tipo_documento_ws_fe_param_tipo_documento_cmb_ws_fe_param_tipo_documento_id" clase_id="ws_fe_param_tipo_documento" prefijo='gral_tipo_documento_ws_fe_param_tipo_documento_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_gral_tipo_documento_ws_fe_param_tipo_documento_cmb_ws_fe_param_tipo_documento_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_gral_tipo_documento_ws_fe_param_tipo_documento_alta_ws_fe_param_tipo_documento_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_tipo_documento_ws_fe_param_tipo_documento_alta_ws_fe_param_tipo_documento_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_tipo_documento_ws_fe_param_tipo_documento_alta_ws_fe_param_tipo_documento_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_tipo_documento_ws_fe_param_tipo_documento_alta_ws_fe_param_tipo_documento_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_param_tipo_documento_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_tipo_documento_ws_fe_param_tipo_documento_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_tipo_documento_ws_fe_param_tipo_documento_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='gral_tipo_documento_ws_fe_param_tipo_documento_txa_observacion' rows='10' cols='50' id='gral_tipo_documento_ws_fe_param_tipo_documento_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($gral_tipo_documento_ws_fe_param_tipo_documento->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_gral_tipo_documento_ws_fe_param_tipo_documento_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_tipo_documento_ws_fe_param_tipo_documento_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_tipo_documento_ws_fe_param_tipo_documento_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_tipo_documento_ws_fe_param_tipo_documento_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($gral_tipo_documento_ws_fe_param_tipo_documento->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_gral_tipo_documento_ws_fe_param_tipo_documento_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='gral_tipo_documento_ws_fe_param_tipo_documento'/>
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

