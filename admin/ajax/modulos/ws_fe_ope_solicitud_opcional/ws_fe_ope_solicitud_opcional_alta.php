<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_OPCIONAL_ALTA')){
    echo "No tiene asignada la credencial WS_FE_OPE_SOLICITUD_OPCIONAL_ALTA. ";
    return false;
}

$db_nombre_objeto = 'ws_fe_ope_solicitud_opcional';
$db_nombre_pagina = 'ws_fe_ope_solicitud_opcional_alta';

$ws_fe_ope_solicitud_opcional = new WsFeOpeSolicitudOpcional();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$ws_fe_ope_solicitud_opcional = new WsFeOpeSolicitudOpcional();
	if(trim($hdn_id) != '') $ws_fe_ope_solicitud_opcional->setId($hdn_id, false);
	$ws_fe_ope_solicitud_opcional->setDescripcion(Gral::getVars(1, "ws_fe_ope_solicitud_opcional_txt_descripcion"));
	$ws_fe_ope_solicitud_opcional->setWsFeOpeSolicitudId(Gral::getVars(1, "ws_fe_ope_solicitud_opcional_cmb_ws_fe_ope_solicitud_id", null));
	$ws_fe_ope_solicitud_opcional->setWsFeAfipCodigo(Gral::getVars(1, "ws_fe_ope_solicitud_opcional_txt_ws_fe_afip_codigo"));
	$ws_fe_ope_solicitud_opcional->setWsFeAfipValor(Gral::getVars(1, "ws_fe_ope_solicitud_opcional_txt_ws_fe_afip_valor"));
	$ws_fe_ope_solicitud_opcional->setCodigo(Gral::getVars(1, "ws_fe_ope_solicitud_opcional_txt_codigo"));
	$ws_fe_ope_solicitud_opcional->setObservacion(Gral::getVars(1, "ws_fe_ope_solicitud_opcional_txa_observacion"));
	$ws_fe_ope_solicitud_opcional->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ws_fe_ope_solicitud_opcional_txt_creado")));
	$ws_fe_ope_solicitud_opcional->setCreadoPor(Gral::getVars(1, "ws_fe_ope_solicitud_opcional__creado_por", null));
	$ws_fe_ope_solicitud_opcional->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "ws_fe_ope_solicitud_opcional_txt_modificado")));
	$ws_fe_ope_solicitud_opcional->setModificadoPor(Gral::getVars(1, "ws_fe_ope_solicitud_opcional__modificado_por", null));

	$ws_fe_ope_solicitud_opcional_estado = new WsFeOpeSolicitudOpcional();
	if(trim($hdn_id) != ''){
		$ws_fe_ope_solicitud_opcional_estado->setId($hdn_id);
		$ws_fe_ope_solicitud_opcional->setEstado($ws_fe_ope_solicitud_opcional_estado->getEstado());
				
	}else{
		$ws_fe_ope_solicitud_opcional->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $ws_fe_ope_solicitud_opcional->control();
			if(!$error->getExisteError()){
				$ws_fe_ope_solicitud_opcional->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: ws_fe_ope_solicitud_opcional_alta.php?cs=1&id='.$ws_fe_ope_solicitud_opcional->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ws_fe_ope_solicitud_opcional->control();
			if(!$error->getExisteError()){
				$ws_fe_ope_solicitud_opcional->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: ws_fe_ope_solicitud_opcional_alta.php?cs=1');
				$ws_fe_ope_solicitud_opcional = new WsFeOpeSolicitudOpcional();
			}
		break;
	}
	Gral::setSes('WsFeOpeSolicitudOpcional_ULTIMO_INSERTADO', $ws_fe_ope_solicitud_opcional->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_ws_fe_ope_solicitud_opcional_id = Gral::getVars(2, $prefijo.'cmb_ws_fe_ope_solicitud_opcional_id', 0);
	if($cmb_ws_fe_ope_solicitud_opcional_id != 0){
		$ws_fe_ope_solicitud_opcional = WsFeOpeSolicitudOpcional::getOxId($cmb_ws_fe_ope_solicitud_opcional_id);
	}else{
	
	$ws_fe_ope_solicitud_opcional->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$ws_fe_ope_solicitud_opcional->setWsFeOpeSolicitudId(Gral::getVars(2, "ws_fe_ope_solicitud_id", 'null'));
	$ws_fe_ope_solicitud_opcional->setWsFeAfipCodigo(Gral::getVars(2, "ws_fe_afip_codigo", ''));
	$ws_fe_ope_solicitud_opcional->setWsFeAfipValor(Gral::getVars(2, "ws_fe_afip_valor", ''));
	$ws_fe_ope_solicitud_opcional->setCodigo(Gral::getVars(2, "codigo", ''));
	$ws_fe_ope_solicitud_opcional->setObservacion(Gral::getVars(2, "observacion", ''));
	$ws_fe_ope_solicitud_opcional->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ws_fe_ope_solicitud_opcional->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ws_fe_ope_solicitud_opcional->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ws_fe_ope_solicitud_opcional->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $ws_fe_ope_solicitud_opcional->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ws_fe_ope_solicitud_opcional/ws_fe_ope_solicitud_opcional_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ws_fe_ope_solicitud_opcional' width='90%'>
        
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_opcional_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_opcional_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_opcional_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_opcional_txt_descripcion' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_opcional->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_opcional_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_opcional_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_opcional_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_opcional_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_opcional_cmb_ws_fe_ope_solicitud_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_ope_solicitud_id' ?>" >
				  
                                        <?php Lang::_lang('WsFeOpeSolicitud', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_opcional_cmb_ws_fe_ope_solicitud_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_ope_solicitud_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ws_fe_ope_solicitud_opcional_cmb_ws_fe_ope_solicitud_id', Gral::getCmbFiltro(WsFeOpeSolicitud::getWsFeOpeSolicitudsCmb(), '...'), $ws_fe_ope_solicitud_opcional->getWsFeOpeSolicitudId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_OPCIONAL_ALTA_CMB_EDIT_WS_FE_OPE_SOLICITUD')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ws_fe_ope_solicitud_opcional_cmb_ws_fe_ope_solicitud_id" clase_id="ws_fe_ope_solicitud" prefijo='ws_fe_ope_solicitud_opcional_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ws_fe_ope_solicitud_id" <?php echo ($ws_fe_ope_solicitud_opcional->getWsFeOpeSolicitudId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ws_fe_ope_solicitud_opcional_cmb_ws_fe_ope_solicitud_id" clase_id="ws_fe_ope_solicitud" prefijo='ws_fe_ope_solicitud_opcional_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ws_fe_ope_solicitud_opcional_cmb_ws_fe_ope_solicitud_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_opcional_alta_ws_fe_ope_solicitud_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_opcional_alta_ws_fe_ope_solicitud_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_opcional_alta_ws_fe_ope_solicitud_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_opcional_alta_ws_fe_ope_solicitud_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_ope_solicitud_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_opcional_txt_ws_fe_afip_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_opcional_txt_ws_fe_afip_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_opcional_txt_ws_fe_afip_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_opcional_txt_ws_fe_afip_codigo' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_opcional->getWsFeAfipCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_opcional_alta_ws_fe_afip_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_opcional_alta_ws_fe_afip_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_opcional_alta_ws_fe_afip_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_opcional_alta_ws_fe_afip_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_opcional_txt_ws_fe_afip_valor" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_valor' ?>" >
				  
                                        <?php Lang::_lang('Valor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_opcional_txt_ws_fe_afip_valor" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_valor')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_opcional_txt_ws_fe_afip_valor' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_opcional_txt_ws_fe_afip_valor' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_opcional->getWsFeAfipValor(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_opcional_alta_ws_fe_afip_valor', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_opcional_alta_ws_fe_afip_valor', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_opcional_alta_ws_fe_afip_valor', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_opcional_alta_ws_fe_afip_valor', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_valor')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_opcional_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_opcional_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_opcional_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_opcional_txt_codigo' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_opcional->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_opcional_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_opcional_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_opcional_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_opcional_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_opcional_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_opcional_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='ws_fe_ope_solicitud_opcional_txa_observacion' rows='10' cols='50' id='ws_fe_ope_solicitud_opcional_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($ws_fe_ope_solicitud_opcional->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_opcional_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_opcional_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_opcional_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_opcional_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_opcional->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ws_fe_ope_solicitud_opcional_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ws_fe_ope_solicitud_opcional'/>
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

