<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('APP_MOV_VERSION_ALTA')){
    echo "No tiene asignada la credencial APP_MOV_VERSION_ALTA. ";
    return false;
}

$db_nombre_objeto = 'app_mov_version';
$db_nombre_pagina = 'app_mov_version_alta';

$app_mov_version = new AppMovVersion();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$app_mov_version = new AppMovVersion();
	if(trim($hdn_id) != '') $app_mov_version->setId($hdn_id, false);
	$app_mov_version->setDescripcion(Gral::getVars(1, "app_mov_version_txt_descripcion"));
	$app_mov_version->setAppMovModuloId(Gral::getVars(1, "app_mov_version_cmb_app_mov_modulo_id", null));
	$app_mov_version->setCodigo(Gral::getVars(1, "app_mov_version_txt_codigo"));
	$app_mov_version->setVersion(Gral::getVars(1, "app_mov_version_txt_version"));
	$app_mov_version->setVersionMinima(Gral::getVars(1, "app_mov_version_txt_version_minima"));
	$app_mov_version->setFecha(Gral::getFechaToDb(Gral::getVars(1, "app_mov_version_txt_fecha")));
	$app_mov_version->setActual(Gral::getVars(1, "app_mov_version_cmb_actual", 0));
	$app_mov_version->setObservacion(Gral::getVars(1, "app_mov_version_txa_observacion"));
	$app_mov_version->setOrden(Gral::getVars(1, "app_mov_version_txt_orden", 0));
	$app_mov_version->setEstado(Gral::getVars(1, "app_mov_version__estado", 0));
	$app_mov_version->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "app_mov_version_txt_creado")));
	$app_mov_version->setCreadoPor(Gral::getVars(1, "app_mov_version__creado_por", null));
	$app_mov_version->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "app_mov_version_txt_modificado")));
	$app_mov_version->setModificadoPor(Gral::getVars(1, "app_mov_version__modificado_por", null));

	$app_mov_version_estado = new AppMovVersion();
	if(trim($hdn_id) != ''){
		$app_mov_version_estado->setId($hdn_id);
		$app_mov_version->setEstado($app_mov_version_estado->getEstado());
				
	}else{
		$app_mov_version->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $app_mov_version->control();
			if(!$error->getExisteError()){
				$app_mov_version->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: app_mov_version_alta.php?cs=1&id='.$app_mov_version->getId());
			}
		break;
		case 'guardarnvo':
			$error = $app_mov_version->control();
			if(!$error->getExisteError()){
				$app_mov_version->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: app_mov_version_alta.php?cs=1');
				$app_mov_version = new AppMovVersion();
			}
		break;
	}
	Gral::setSes('AppMovVersion_ULTIMO_INSERTADO', $app_mov_version->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_app_mov_version_id = Gral::getVars(2, $prefijo.'cmb_app_mov_version_id', 0);
	if($cmb_app_mov_version_id != 0){
		$app_mov_version = AppMovVersion::getOxId($cmb_app_mov_version_id);
	}else{
	
	$app_mov_version->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$app_mov_version->setAppMovModuloId(Gral::getVars(2, "app_mov_modulo_id", 'null'));
	$app_mov_version->setCodigo(Gral::getVars(2, "codigo", ''));
	$app_mov_version->setVersion(Gral::getVars(2, "version", ''));
	$app_mov_version->setVersionMinima(Gral::getVars(2, "version_minima", ''));
	$app_mov_version->setFecha(Gral::getVars(2, "fecha", date('Y-m-d')));
	$app_mov_version->setActual(Gral::getVars(2, "actual", 0));
	$app_mov_version->setObservacion(Gral::getVars(2, "observacion", ''));
	$app_mov_version->setOrden(Gral::getVars(2, "orden", 0));
	$app_mov_version->setEstado(Gral::getVars(2, "estado", 0));
	$app_mov_version->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$app_mov_version->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$app_mov_version->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$app_mov_version->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $app_mov_version->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/app_mov_version/app_mov_version_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_app_mov_version' width='90%'>
        
				<tr>
				  <td  id="label_app_mov_version_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_app_mov_version_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='app_mov_version_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='app_mov_version_txt_descripcion' value='<?php Gral::_echoTxt($app_mov_version->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_app_mov_version_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_app_mov_version_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_app_mov_version_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_app_mov_version_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_app_mov_version_cmb_app_mov_modulo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_app_mov_modulo_id' ?>" >
				  
                                        <?php Lang::_lang('AppMovModulo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_app_mov_version_cmb_app_mov_modulo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('app_mov_modulo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'app_mov_version_cmb_app_mov_modulo_id', Gral::getCmbFiltro(AppMovModulo::getAppMovModulosCmb(), '...'), $app_mov_version->getAppMovModuloId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('APP_MOV_VERSION_ALTA_CMB_EDIT_APP_MOV_MODULO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="app_mov_version_cmb_app_mov_modulo_id" clase_id="app_mov_modulo" prefijo='app_mov_version_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_app_mov_modulo_id" <?php echo ($app_mov_version->getAppMovModuloId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="app_mov_version_cmb_app_mov_modulo_id" clase_id="app_mov_modulo" prefijo='app_mov_version_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_app_mov_version_cmb_app_mov_modulo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_app_mov_version_alta_app_mov_modulo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_app_mov_version_alta_app_mov_modulo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_app_mov_version_alta_app_mov_modulo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_app_mov_version_alta_app_mov_modulo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('app_mov_modulo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_app_mov_version_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_app_mov_version_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='app_mov_version_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='app_mov_version_txt_codigo' value='<?php Gral::_echoTxt($app_mov_version->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_app_mov_version_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_app_mov_version_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_app_mov_version_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_app_mov_version_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_app_mov_version_txt_version" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_version' ?>" >
				  
                                        <?php Lang::_lang('Version', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_app_mov_version_txt_version" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('version')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='app_mov_version_txt_version' type='text' class='textbox <?php echo $error_input_css ?> ' id='app_mov_version_txt_version' value='<?php Gral::_echoTxt($app_mov_version->getVersion(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_app_mov_version_alta_version', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_app_mov_version_alta_version', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_app_mov_version_alta_version', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_app_mov_version_alta_version', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('version')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_app_mov_version_txt_version_minima" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_version_minima' ?>" >
				  
                                        <?php Lang::_lang('Version Min', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_app_mov_version_txt_version_minima" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('version_minima')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='app_mov_version_txt_version_minima' type='text' class='textbox <?php echo $error_input_css ?> ' id='app_mov_version_txt_version_minima' value='<?php Gral::_echoTxt($app_mov_version->getVersionMinima(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_app_mov_version_alta_version_minima', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_app_mov_version_alta_version_minima', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_app_mov_version_alta_version_minima', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_app_mov_version_alta_version_minima', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('version_minima')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_app_mov_version_txt_fecha" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha' ?>" >
				  
                                        <?php Lang::_lang('Fecha', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_app_mov_version_txt_fecha" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='app_mov_version_txt_fecha' type='text' class='textbox <?php echo $error_input_css ?> date' id='app_mov_version_txt_fecha' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($app_mov_version->getFecha()), true) ?>' size='40' />
					<input type='button' id='cal_app_mov_version_txt_fecha' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'app_mov_version_txt_fecha', ifFormat: '%d/%m/%Y', button: 'cal_app_mov_version_txt_fecha'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_app_mov_version_alta_fecha', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_app_mov_version_alta_fecha', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_app_mov_version_alta_fecha', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_app_mov_version_alta_fecha', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_app_mov_version_cmb_actual" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_actual' ?>" >
				  
                                        <?php Lang::_lang('Actual', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_app_mov_version_cmb_actual" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('actual')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'app_mov_version_cmb_actual', GralSiNo::getGralSiNosCmb(), $app_mov_version->getActual(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_app_mov_version_alta_actual', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_app_mov_version_alta_actual', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_app_mov_version_alta_actual', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_app_mov_version_alta_actual', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('actual')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_app_mov_version_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_app_mov_version_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='app_mov_version_txa_observacion' rows='10' cols='50' id='app_mov_version_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($app_mov_version->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_app_mov_version_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_app_mov_version_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_app_mov_version_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_app_mov_version_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($app_mov_version->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_app_mov_version_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='app_mov_version'/>
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

