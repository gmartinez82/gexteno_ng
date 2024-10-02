<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('GEO_PAIS_ALTA')){
    echo "No tiene asignada la credencial GEO_PAIS_ALTA. ";
    return false;
}

$db_nombre_objeto = 'geo_pais';
$db_nombre_pagina = 'geo_pais_alta';

$geo_pais = new GeoPais();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$geo_pais = new GeoPais();
	if(trim($hdn_id) != '') $geo_pais->setId($hdn_id, false);
	$geo_pais->setDescripcion(Gral::getVars(1, "geo_pais_txt_descripcion"));
	$geo_pais->setGralLenguajeId(Gral::getVars(1, "geo_pais_cmb_gral_lenguaje_id", null));
	$geo_pais->setCodigo(Gral::getVars(1, "geo_pais_txt_codigo"));
	$geo_pais->setCodigoAlpha2(Gral::getVars(1, "geo_pais_txt_codigo_alpha_2"));
	$geo_pais->setCodigoAlpha3(Gral::getVars(1, "geo_pais_txt_codigo_alpha_3"));
	$geo_pais->setCodigoTelefonico(Gral::getVars(1, "geo_pais_txt_codigo_telefonico"));
	$geo_pais->setObservacion(Gral::getVars(1, "geo_pais_txa_observacion"));
	$geo_pais->setOrden(Gral::getVars(1, "geo_pais_txt_orden", 0));
	$geo_pais->setEstado(Gral::getVars(1, "geo_pais_cmb_estado", 0));
	$geo_pais->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "geo_pais_txt_creado")));
	$geo_pais->setCreadoPor(Gral::getVars(1, "geo_pais__creado_por", 0));
	$geo_pais->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "geo_pais_txt_modificado")));
	$geo_pais->setModificadoPor(Gral::getVars(1, "geo_pais__modificado_por", 0));

	$geo_pais_estado = new GeoPais();
	if(trim($hdn_id) != ''){
		$geo_pais_estado->setId($hdn_id);
		$geo_pais->setEstado($geo_pais_estado->getEstado());
				
	}else{
		$geo_pais->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $geo_pais->control();
			if(!$error->getExisteError()){
				$geo_pais->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: geo_pais_alta.php?cs=1&id='.$geo_pais->getId());
			}
		break;
		case 'guardarnvo':
			$error = $geo_pais->control();
			if(!$error->getExisteError()){
				$geo_pais->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: geo_pais_alta.php?cs=1');
				$geo_pais = new GeoPais();
			}
		break;
	}
	Gral::setSes('GeoPais_ULTIMO_INSERTADO', $geo_pais->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_geo_pais_id = Gral::getVars(2, $prefijo.'cmb_geo_pais_id', 0);
	if($cmb_geo_pais_id != 0){
		$geo_pais = GeoPais::getOxId($cmb_geo_pais_id);
	}else{
	
	$geo_pais->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$geo_pais->setGralLenguajeId(Gral::getVars(2, "gral_lenguaje_id", 'null'));
	$geo_pais->setCodigo(Gral::getVars(2, "codigo", ''));
	$geo_pais->setCodigoAlpha2(Gral::getVars(2, "codigo_alpha_2", ''));
	$geo_pais->setCodigoAlpha3(Gral::getVars(2, "codigo_alpha_3", ''));
	$geo_pais->setCodigoTelefonico(Gral::getVars(2, "codigo_telefonico", ''));
	$geo_pais->setObservacion(Gral::getVars(2, "observacion", ''));
	$geo_pais->setOrden(Gral::getVars(2, "orden", 0));
	$geo_pais->setEstado(Gral::getVars(2, "estado", 0));
	$geo_pais->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$geo_pais->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$geo_pais->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$geo_pais->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $geo_pais->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/geo_pais/geo_pais_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_geo_pais' width='90%'>
        
				<tr>
				  <td  id="label_geo_pais_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_geo_pais_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='geo_pais_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='geo_pais_txt_descripcion' value='<?php Gral::_echoTxt($geo_pais->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_geo_pais_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_geo_pais_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_geo_pais_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_geo_pais_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_geo_pais_cmb_gral_lenguaje_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_lenguaje_id' ?>" >
				  
                                        <?php Lang::_lang('Lenguaje', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_geo_pais_cmb_gral_lenguaje_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_lenguaje_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'geo_pais_cmb_gral_lenguaje_id', Gral::getCmbFiltro(GralLenguaje::getGralLenguajesCmb(), '...'), $geo_pais->getGralLenguajeId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('GEO_PAIS_ALTA_CMB_EDIT_GRAL_LENGUAJE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="geo_pais_cmb_gral_lenguaje_id" clase_id="gral_lenguaje" prefijo='geo_pais_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_lenguaje_id" <?php echo ($geo_pais->getGralLenguajeId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="geo_pais_cmb_gral_lenguaje_id" clase_id="gral_lenguaje" prefijo='geo_pais_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_geo_pais_cmb_gral_lenguaje_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_geo_pais_alta_gral_lenguaje_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_geo_pais_alta_gral_lenguaje_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_geo_pais_alta_gral_lenguaje_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_geo_pais_alta_gral_lenguaje_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_lenguaje_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_geo_pais_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_geo_pais_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='geo_pais_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='geo_pais_txt_codigo' value='<?php Gral::_echoTxt($geo_pais->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_geo_pais_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_geo_pais_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_geo_pais_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_geo_pais_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_geo_pais_txt_codigo_alpha_2" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo_alpha_2' ?>" >
				  
                                        <?php Lang::_lang('Codigo Alpha 2', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_geo_pais_txt_codigo_alpha_2" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo_alpha_2')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='geo_pais_txt_codigo_alpha_2' type='text' class='textbox <?php echo $error_input_css ?> ' id='geo_pais_txt_codigo_alpha_2' value='<?php Gral::_echoTxt($geo_pais->getCodigoAlpha2(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_geo_pais_alta_codigo_alpha_2', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_geo_pais_alta_codigo_alpha_2', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_geo_pais_alta_codigo_alpha_2', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_geo_pais_alta_codigo_alpha_2', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo_alpha_2')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_geo_pais_txt_codigo_alpha_3" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo_alpha_3' ?>" >
				  
                                        <?php Lang::_lang('Codigo Alpha 3', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_geo_pais_txt_codigo_alpha_3" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo_alpha_3')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='geo_pais_txt_codigo_alpha_3' type='text' class='textbox <?php echo $error_input_css ?> ' id='geo_pais_txt_codigo_alpha_3' value='<?php Gral::_echoTxt($geo_pais->getCodigoAlpha3(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_geo_pais_alta_codigo_alpha_3', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_geo_pais_alta_codigo_alpha_3', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_geo_pais_alta_codigo_alpha_3', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_geo_pais_alta_codigo_alpha_3', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo_alpha_3')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_geo_pais_txt_codigo_telefonico" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo_telefonico' ?>" >
				  
                                        <?php Lang::_lang('Codigo Telefonico', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_geo_pais_txt_codigo_telefonico" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo_telefonico')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='geo_pais_txt_codigo_telefonico' type='text' class='textbox <?php echo $error_input_css ?> ' id='geo_pais_txt_codigo_telefonico' value='<?php Gral::_echoTxt($geo_pais->getCodigoTelefonico(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_geo_pais_alta_codigo_telefonico', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_geo_pais_alta_codigo_telefonico', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_geo_pais_alta_codigo_telefonico', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_geo_pais_alta_codigo_telefonico', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo_telefonico')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_geo_pais_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_geo_pais_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='geo_pais_txa_observacion' rows='10' cols='50' id='geo_pais_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($geo_pais->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_geo_pais_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_geo_pais_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_geo_pais_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_geo_pais_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($geo_pais->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_geo_pais_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='geo_pais'/>
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

