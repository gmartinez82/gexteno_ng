<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('GEN_WIDGET_ALTA')){
    echo "No tiene asignada la credencial GEN_WIDGET_ALTA. ";
    return false;
}

$db_nombre_objeto = 'gen_widget';
$db_nombre_pagina = 'gen_widget_alta';

$gen_widget = new GenWidget();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$gen_widget = new GenWidget();
	if(trim($hdn_id) != '') $gen_widget->setId($hdn_id, false);
	$gen_widget->setDescripcion(Gral::getVars(1, "gen_widget_txt_descripcion"));
	$gen_widget->setGenWidgetSectorId(Gral::getVars(1, "gen_widget_cmb_gen_widget_sector_id", null));
	$gen_widget->setGenWidgetModuloId(Gral::getVars(1, "gen_widget_cmb_gen_widget_modulo_id", null));
	$gen_widget->setAncho(Gral::getVars(1, "gen_widget_txt_ancho", 0));
	$gen_widget->setCodigo(Gral::getVars(1, "gen_widget_txt_codigo"));
	$gen_widget->setObservacion(Gral::getVars(1, "gen_widget_txa_observacion"));
	$gen_widget->setOrden(Gral::getVars(1, "gen_widget_txt_orden", 0));
	$gen_widget->setEstado(Gral::getVars(1, "gen_widget_cmb_estado", 0));
	$gen_widget->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "gen_widget_txt_creado")));
	$gen_widget->setCreadoPor(Gral::getVars(1, "gen_widget__creado_por", 0));
	$gen_widget->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "gen_widget_txt_modificado")));
	$gen_widget->setModificadoPor(Gral::getVars(1, "gen_widget__modificado_por", 0));

	$gen_widget_estado = new GenWidget();
	if(trim($hdn_id) != ''){
		$gen_widget_estado->setId($hdn_id);
		$gen_widget->setEstado($gen_widget_estado->getEstado());
				
	}else{
		$gen_widget->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $gen_widget->control();
			if(!$error->getExisteError()){
				$gen_widget->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: gen_widget_alta.php?cs=1&id='.$gen_widget->getId());
			}
		break;
		case 'guardarnvo':
			$error = $gen_widget->control();
			if(!$error->getExisteError()){
				$gen_widget->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: gen_widget_alta.php?cs=1');
				$gen_widget = new GenWidget();
			}
		break;
	}
	Gral::setSes('GenWidget_ULTIMO_INSERTADO', $gen_widget->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_gen_widget_id = Gral::getVars(2, $prefijo.'cmb_gen_widget_id', 0);
	if($cmb_gen_widget_id != 0){
		$gen_widget = GenWidget::getOxId($cmb_gen_widget_id);
	}else{
	
	$gen_widget->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$gen_widget->setGenWidgetSectorId(Gral::getVars(2, "gen_widget_sector_id", 'null'));
	$gen_widget->setGenWidgetModuloId(Gral::getVars(2, "gen_widget_modulo_id", 'null'));
	$gen_widget->setAncho(Gral::getVars(2, "ancho", 0));
	$gen_widget->setCodigo(Gral::getVars(2, "codigo", ''));
	$gen_widget->setObservacion(Gral::getVars(2, "observacion", ''));
	$gen_widget->setOrden(Gral::getVars(2, "orden", 0));
	$gen_widget->setEstado(Gral::getVars(2, "estado", 0));
	$gen_widget->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$gen_widget->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$gen_widget->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$gen_widget->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $gen_widget->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/gen_widget/gen_widget_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_gen_widget' width='90%'>
        
				<tr>
				  <td  id="label_gen_widget_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_widget_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gen_widget_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='gen_widget_txt_descripcion' value='<?php Gral::_echoTxt($gen_widget->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_gen_widget_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_widget_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_widget_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_widget_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_widget_cmb_gen_widget_sector_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gen_widget_sector_id' ?>" >
				  
                                        <?php Lang::_lang('Widget Sector', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_widget_cmb_gen_widget_sector_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gen_widget_sector_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gen_widget_cmb_gen_widget_sector_id', Gral::getCmbFiltro(GenWidgetSector::getGenWidgetSectorsCmb(), '...'), $gen_widget->getGenWidgetSectorId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('GEN_WIDGET_ALTA_CMB_EDIT_GEN_WIDGET_SECTOR')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="gen_widget_cmb_gen_widget_sector_id" clase_id="gen_widget_sector" prefijo='gen_widget_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gen_widget_sector_id" <?php echo ($gen_widget->getGenWidgetSectorId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="gen_widget_cmb_gen_widget_sector_id" clase_id="gen_widget_sector" prefijo='gen_widget_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_gen_widget_cmb_gen_widget_sector_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_gen_widget_alta_gen_widget_sector_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_widget_alta_gen_widget_sector_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_widget_alta_gen_widget_sector_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_widget_alta_gen_widget_sector_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gen_widget_sector_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_widget_cmb_gen_widget_modulo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gen_widget_modulo_id' ?>" >
				  
                                        <?php Lang::_lang('Widget Modulo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_widget_cmb_gen_widget_modulo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gen_widget_modulo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gen_widget_cmb_gen_widget_modulo_id', Gral::getCmbFiltro(GenWidgetModulo::getGenWidgetModulosCmb(), '...'), $gen_widget->getGenWidgetModuloId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('GEN_WIDGET_ALTA_CMB_EDIT_GEN_WIDGET_MODULO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="gen_widget_cmb_gen_widget_modulo_id" clase_id="gen_widget_modulo" prefijo='gen_widget_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gen_widget_modulo_id" <?php echo ($gen_widget->getGenWidgetModuloId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="gen_widget_cmb_gen_widget_modulo_id" clase_id="gen_widget_modulo" prefijo='gen_widget_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_gen_widget_cmb_gen_widget_modulo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_gen_widget_alta_gen_widget_modulo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_widget_alta_gen_widget_modulo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_widget_alta_gen_widget_modulo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_widget_alta_gen_widget_modulo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gen_widget_modulo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_widget_txt_ancho" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ancho' ?>" >
				  
                                        <?php Lang::_lang('Ancho', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_widget_txt_ancho" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ancho')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gen_widget_txt_ancho' type='text' class='textbox <?php echo $error_input_css ?> ' id='gen_widget_txt_ancho' value='<?php Gral::_echoTxt($gen_widget->getAncho(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gen_widget_alta_ancho', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_widget_alta_ancho', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_widget_alta_ancho', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_widget_alta_ancho', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ancho')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_widget_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_widget_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gen_widget_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='gen_widget_txt_codigo' value='<?php Gral::_echoTxt($gen_widget->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gen_widget_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_widget_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_widget_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_widget_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_widget_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_widget_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='gen_widget_txa_observacion' rows='10' cols='50' id='gen_widget_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($gen_widget->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_gen_widget_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_widget_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_widget_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_widget_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_widget_txt_orden" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_orden' ?>" >
				  
                                        <?php Lang::_lang('Orden', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_widget_txt_orden" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('orden')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gen_widget_txt_orden' type='text' class='textbox <?php echo $error_input_css ?> ' id='gen_widget_txt_orden' value='<?php Gral::_echoTxt($gen_widget->getOrden(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gen_widget_alta_orden', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_widget_alta_orden', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_widget_alta_orden', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_widget_alta_orden', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('orden')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($gen_widget->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_gen_widget_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='gen_widget'/>
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

