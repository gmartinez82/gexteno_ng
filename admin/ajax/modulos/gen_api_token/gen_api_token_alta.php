<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('GEN_API_TOKEN_ALTA')){
    echo "No tiene asignada la credencial GEN_API_TOKEN_ALTA. ";
    return false;
}

$db_nombre_objeto = 'gen_api_token';
$db_nombre_pagina = 'gen_api_token_alta';

$gen_api_token = new GenApiToken();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$gen_api_token = new GenApiToken();
	if(trim($hdn_id) != '') $gen_api_token->setId($hdn_id, false);
	$gen_api_token->setDescripcion(Gral::getVars(1, "gen_api_token_txt_descripcion"));
	$gen_api_token->setGenApiConsumerId(Gral::getVars(1, "gen_api_token_cmb_gen_api_consumer_id", null));
	$gen_api_token->setGenApiProyectoId(Gral::getVars(1, "gen_api_token_cmb_gen_api_proyecto_id", null));
	$gen_api_token->setVencimiento(Gral::getFechaHoraToDb(Gral::getVars(1, "gen_api_token_txt_vencimiento")));
	$gen_api_token->setActivo(Gral::getVars(1, "gen_api_token_cmb_activo", 0));
	$gen_api_token->setCodigo(Gral::getVars(1, "gen_api_token_txt_codigo"));
	$gen_api_token->setObservacion(Gral::getVars(1, "gen_api_token_txa_observacion"));
	$gen_api_token->setOrden(Gral::getVars(1, "gen_api_token_txt_orden", 0));
	$gen_api_token->setEstado(Gral::getVars(1, "gen_api_token__estado", 0));
	$gen_api_token->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "gen_api_token_txt_creado")));
	$gen_api_token->setCreadoPor(Gral::getVars(1, "gen_api_token__creado_por", null));
	$gen_api_token->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "gen_api_token_txt_modificado")));
	$gen_api_token->setModificadoPor(Gral::getVars(1, "gen_api_token__modificado_por", null));

	$gen_api_token_estado = new GenApiToken();
	if(trim($hdn_id) != ''){
		$gen_api_token_estado->setId($hdn_id);
		$gen_api_token->setEstado($gen_api_token_estado->getEstado());
				
	}else{
		$gen_api_token->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $gen_api_token->control();
			if(!$error->getExisteError()){
				$gen_api_token->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: gen_api_token_alta.php?cs=1&id='.$gen_api_token->getId());
			}
		break;
		case 'guardarnvo':
			$error = $gen_api_token->control();
			if(!$error->getExisteError()){
				$gen_api_token->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: gen_api_token_alta.php?cs=1');
				$gen_api_token = new GenApiToken();
			}
		break;
	}
	Gral::setSes('GenApiToken_ULTIMO_INSERTADO', $gen_api_token->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_gen_api_token_id = Gral::getVars(2, $prefijo.'cmb_gen_api_token_id', 0);
	if($cmb_gen_api_token_id != 0){
		$gen_api_token = GenApiToken::getOxId($cmb_gen_api_token_id);
	}else{
	
	$gen_api_token->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$gen_api_token->setGenApiConsumerId(Gral::getVars(2, "gen_api_consumer_id", 'null'));
	$gen_api_token->setGenApiProyectoId(Gral::getVars(2, "gen_api_proyecto_id", 'null'));
	$gen_api_token->setVencimiento(Gral::getVars(2, "vencimiento", date('Y-m-d H:m:s')));
	$gen_api_token->setActivo(Gral::getVars(2, "activo", 0));
	$gen_api_token->setCodigo(Gral::getVars(2, "codigo", ''));
	$gen_api_token->setObservacion(Gral::getVars(2, "observacion", ''));
	$gen_api_token->setOrden(Gral::getVars(2, "orden", 0));
	$gen_api_token->setEstado(Gral::getVars(2, "estado", 0));
	$gen_api_token->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$gen_api_token->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$gen_api_token->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$gen_api_token->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $gen_api_token->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/gen_api_token/gen_api_token_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_gen_api_token' width='90%'>
        
				<tr>
				  <td  id="label_gen_api_token_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_api_token_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gen_api_token_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='gen_api_token_txt_descripcion' value='<?php Gral::_echoTxt($gen_api_token->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_gen_api_token_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_api_token_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_api_token_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_api_token_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_api_token_cmb_gen_api_consumer_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gen_api_consumer_id' ?>" >
				  
                                        <?php Lang::_lang('GenApiConsumer', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_api_token_cmb_gen_api_consumer_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gen_api_consumer_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gen_api_token_cmb_gen_api_consumer_id', Gral::getCmbFiltro(GenApiConsumer::getGenApiConsumersCmb(), '...'), $gen_api_token->getGenApiConsumerId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('GEN_API_TOKEN_ALTA_CMB_EDIT_GEN_API_CONSUMER')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="gen_api_token_cmb_gen_api_consumer_id" clase_id="gen_api_consumer" prefijo='gen_api_token_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gen_api_consumer_id" <?php echo ($gen_api_token->getGenApiConsumerId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="gen_api_token_cmb_gen_api_consumer_id" clase_id="gen_api_consumer" prefijo='gen_api_token_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_gen_api_token_cmb_gen_api_consumer_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_gen_api_token_alta_gen_api_consumer_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_api_token_alta_gen_api_consumer_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_api_token_alta_gen_api_consumer_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_api_token_alta_gen_api_consumer_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gen_api_consumer_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_api_token_cmb_gen_api_proyecto_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gen_api_proyecto_id' ?>" >
				  
                                        <?php Lang::_lang('GenApiProyecto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_api_token_cmb_gen_api_proyecto_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gen_api_proyecto_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gen_api_token_cmb_gen_api_proyecto_id', Gral::getCmbFiltro(GenApiProyecto::getGenApiProyectosCmb(), '...'), $gen_api_token->getGenApiProyectoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('GEN_API_TOKEN_ALTA_CMB_EDIT_GEN_API_PROYECTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="gen_api_token_cmb_gen_api_proyecto_id" clase_id="gen_api_proyecto" prefijo='gen_api_token_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gen_api_proyecto_id" <?php echo ($gen_api_token->getGenApiProyectoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="gen_api_token_cmb_gen_api_proyecto_id" clase_id="gen_api_proyecto" prefijo='gen_api_token_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_gen_api_token_cmb_gen_api_proyecto_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_gen_api_token_alta_gen_api_proyecto_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_api_token_alta_gen_api_proyecto_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_api_token_alta_gen_api_proyecto_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_api_token_alta_gen_api_proyecto_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gen_api_proyecto_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_api_token_txt_vencimiento" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vencimiento' ?>" >
				  
                                        <?php Lang::_lang('Vencimiento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_api_token_txt_vencimiento" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vencimiento')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gen_api_token_txt_vencimiento' type='text' class='textbox <?php echo $error_input_css ?> datetime' id='gen_api_token_txt_vencimiento' value='<?php Gral::_echoTxt(Gral::getFechaHoraToWeb($gen_api_token->getVencimiento()), true) ?>' size='40' />
					<input type='button' id='cal_gen_api_token_txt_vencimiento' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'gen_api_token_txt_vencimiento', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_gen_api_token_txt_vencimiento'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_gen_api_token_alta_vencimiento', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_api_token_alta_vencimiento', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_api_token_alta_vencimiento', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_api_token_alta_vencimiento', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vencimiento')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_api_token_cmb_activo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_activo' ?>" >
				  
                                        <?php Lang::_lang('Activo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_api_token_cmb_activo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('activo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gen_api_token_cmb_activo', GralSiNo::getGralSiNosCmb(), $gen_api_token->getActivo(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_gen_api_token_alta_activo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_api_token_alta_activo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_api_token_alta_activo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_api_token_alta_activo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('activo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_api_token_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_api_token_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gen_api_token_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='gen_api_token_txt_codigo' value='<?php Gral::_echoTxt($gen_api_token->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gen_api_token_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_api_token_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_api_token_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_api_token_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_api_token_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_api_token_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='gen_api_token_txa_observacion' rows='10' cols='50' id='gen_api_token_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($gen_api_token->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_gen_api_token_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_api_token_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_api_token_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_api_token_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($gen_api_token->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_gen_api_token_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='gen_api_token'/>
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

