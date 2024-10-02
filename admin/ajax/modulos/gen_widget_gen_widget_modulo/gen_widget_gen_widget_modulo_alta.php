<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('GEN_WIDGET_GEN_WIDGET_MODULO_ALTA')){
    echo "No tiene asignada la credencial GEN_WIDGET_GEN_WIDGET_MODULO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'gen_widget_gen_widget_modulo';
$db_nombre_pagina = 'gen_widget_gen_widget_modulo_alta';

$gen_widget_gen_widget_modulo = new GenWidgetGenWidgetModulo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$gen_widget_gen_widget_modulo = new GenWidgetGenWidgetModulo();
	if(trim($hdn_id) != '') $gen_widget_gen_widget_modulo->setId($hdn_id, false);
	$gen_widget_gen_widget_modulo->setDescripcion(Gral::getVars(1, "gen_widget_gen_widget_modulo_txt_descripcion"));
	$gen_widget_gen_widget_modulo->setGenWidgetId(Gral::getVars(1, "gen_widget_gen_widget_modulo_cmb_gen_widget_id", null));
	$gen_widget_gen_widget_modulo->setGenWidgetModuloId(Gral::getVars(1, "gen_widget_gen_widget_modulo_cmb_gen_widget_modulo_id", null));
	$gen_widget_gen_widget_modulo->setCodigo(Gral::getVars(1, "gen_widget_gen_widget_modulo_txt_codigo"));
	$gen_widget_gen_widget_modulo->setObservacion(Gral::getVars(1, "gen_widget_gen_widget_modulo_txa_observacion"));
	$gen_widget_gen_widget_modulo->setOrden(Gral::getVars(1, "gen_widget_gen_widget_modulo_txt_orden", 0));
	$gen_widget_gen_widget_modulo->setEstado(Gral::getVars(1, "gen_widget_gen_widget_modulo_cmb_estado", 0));
	$gen_widget_gen_widget_modulo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "gen_widget_gen_widget_modulo_txt_creado")));
	$gen_widget_gen_widget_modulo->setCreadoPor(Gral::getVars(1, "gen_widget_gen_widget_modulo__creado_por", 0));
	$gen_widget_gen_widget_modulo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "gen_widget_gen_widget_modulo_txt_modificado")));
	$gen_widget_gen_widget_modulo->setModificadoPor(Gral::getVars(1, "gen_widget_gen_widget_modulo__modificado_por", 0));

	$gen_widget_gen_widget_modulo_estado = new GenWidgetGenWidgetModulo();
	if(trim($hdn_id) != ''){
		$gen_widget_gen_widget_modulo_estado->setId($hdn_id);
		$gen_widget_gen_widget_modulo->setEstado($gen_widget_gen_widget_modulo_estado->getEstado());
				
	}else{
		$gen_widget_gen_widget_modulo->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $gen_widget_gen_widget_modulo->control();
			if(!$error->getExisteError()){
				$gen_widget_gen_widget_modulo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: gen_widget_gen_widget_modulo_alta.php?cs=1&id='.$gen_widget_gen_widget_modulo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $gen_widget_gen_widget_modulo->control();
			if(!$error->getExisteError()){
				$gen_widget_gen_widget_modulo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: gen_widget_gen_widget_modulo_alta.php?cs=1');
				$gen_widget_gen_widget_modulo = new GenWidgetGenWidgetModulo();
			}
		break;
	}
	Gral::setSes('GenWidgetGenWidgetModulo_ULTIMO_INSERTADO', $gen_widget_gen_widget_modulo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_gen_widget_gen_widget_modulo_id = Gral::getVars(2, $prefijo.'cmb_gen_widget_gen_widget_modulo_id', 0);
	if($cmb_gen_widget_gen_widget_modulo_id != 0){
		$gen_widget_gen_widget_modulo = GenWidgetGenWidgetModulo::getOxId($cmb_gen_widget_gen_widget_modulo_id);
	}else{
	
	$gen_widget_gen_widget_modulo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$gen_widget_gen_widget_modulo->setGenWidgetId(Gral::getVars(2, "gen_widget_id", 'null'));
	$gen_widget_gen_widget_modulo->setGenWidgetModuloId(Gral::getVars(2, "gen_widget_modulo_id", 'null'));
	$gen_widget_gen_widget_modulo->setCodigo(Gral::getVars(2, "codigo", ''));
	$gen_widget_gen_widget_modulo->setObservacion(Gral::getVars(2, "observacion", ''));
	$gen_widget_gen_widget_modulo->setOrden(Gral::getVars(2, "orden", 0));
	$gen_widget_gen_widget_modulo->setEstado(Gral::getVars(2, "estado", 0));
	$gen_widget_gen_widget_modulo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$gen_widget_gen_widget_modulo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$gen_widget_gen_widget_modulo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$gen_widget_gen_widget_modulo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $gen_widget_gen_widget_modulo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/gen_widget_gen_widget_modulo/gen_widget_gen_widget_modulo_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_gen_widget_gen_widget_modulo' width='90%'>
        
				<tr>
				  <td  id="label_gen_widget_gen_widget_modulo_cmb_gen_widget_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gen_widget_id' ?>" >
				  
                                        <?php Lang::_lang('GenWidget', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_widget_gen_widget_modulo_cmb_gen_widget_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gen_widget_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gen_widget_gen_widget_modulo_cmb_gen_widget_id', Gral::getCmbFiltro(GenWidget::getGenWidgetsCmb(), '...'), $gen_widget_gen_widget_modulo->getGenWidgetId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('GEN_WIDGET_GEN_WIDGET_MODULO_ALTA_CMB_EDIT_GEN_WIDGET')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="gen_widget_gen_widget_modulo_cmb_gen_widget_id" clase_id="gen_widget" prefijo='gen_widget_gen_widget_modulo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gen_widget_id" <?php echo ($gen_widget_gen_widget_modulo->getGenWidgetId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="gen_widget_gen_widget_modulo_cmb_gen_widget_id" clase_id="gen_widget" prefijo='gen_widget_gen_widget_modulo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_gen_widget_gen_widget_modulo_cmb_gen_widget_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_gen_widget_gen_widget_modulo_alta_gen_widget_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_widget_gen_widget_modulo_alta_gen_widget_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_widget_gen_widget_modulo_alta_gen_widget_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_widget_gen_widget_modulo_alta_gen_widget_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gen_widget_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_widget_gen_widget_modulo_cmb_gen_widget_modulo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gen_widget_modulo_id' ?>" >
				  
                                        <?php Lang::_lang('GenWidgetModulo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_widget_gen_widget_modulo_cmb_gen_widget_modulo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gen_widget_modulo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gen_widget_gen_widget_modulo_cmb_gen_widget_modulo_id', Gral::getCmbFiltro(GenWidgetModulo::getGenWidgetModulosCmb(), '...'), $gen_widget_gen_widget_modulo->getGenWidgetModuloId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('GEN_WIDGET_GEN_WIDGET_MODULO_ALTA_CMB_EDIT_GEN_WIDGET_MODULO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="gen_widget_gen_widget_modulo_cmb_gen_widget_modulo_id" clase_id="gen_widget_modulo" prefijo='gen_widget_gen_widget_modulo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gen_widget_modulo_id" <?php echo ($gen_widget_gen_widget_modulo->getGenWidgetModuloId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="gen_widget_gen_widget_modulo_cmb_gen_widget_modulo_id" clase_id="gen_widget_modulo" prefijo='gen_widget_gen_widget_modulo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_gen_widget_gen_widget_modulo_cmb_gen_widget_modulo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_gen_widget_gen_widget_modulo_alta_gen_widget_modulo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_widget_gen_widget_modulo_alta_gen_widget_modulo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_widget_gen_widget_modulo_alta_gen_widget_modulo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_widget_gen_widget_modulo_alta_gen_widget_modulo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gen_widget_modulo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_widget_gen_widget_modulo_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_widget_gen_widget_modulo_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='gen_widget_gen_widget_modulo_txa_observacion' rows='10' cols='50' id='gen_widget_gen_widget_modulo_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($gen_widget_gen_widget_modulo->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_gen_widget_gen_widget_modulo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_widget_gen_widget_modulo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_widget_gen_widget_modulo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_widget_gen_widget_modulo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($gen_widget_gen_widget_modulo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_gen_widget_gen_widget_modulo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='gen_widget_gen_widget_modulo'/>
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

