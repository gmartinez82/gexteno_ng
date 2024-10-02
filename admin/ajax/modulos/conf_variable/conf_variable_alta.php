<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('CONF_VARIABLE_ALTA')){
    echo "No tiene asignada la credencial CONF_VARIABLE_ALTA. ";
    return false;
}

$db_nombre_objeto = 'conf_variable';
$db_nombre_pagina = 'conf_variable_alta';

$conf_variable = new ConfVariable();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$conf_variable = new ConfVariable();
	if(trim($hdn_id) != '') $conf_variable->setId($hdn_id, false);
	$conf_variable->setDescripcion(Gral::getVars(1, "conf_variable_txt_descripcion"));
	$conf_variable->setConfCategoriaId(Gral::getVars(1, "conf_variable_cmb_conf_categoria_id", null));
	$conf_variable->setValor(Gral::getVars(1, "conf_variable_txt_valor"));
	$conf_variable->setCodigo(Gral::getVars(1, "conf_variable_txt_codigo"));
	$conf_variable->setObservacion(Gral::getVars(1, "conf_variable_txa_observacion"));
	$conf_variable->setOrden(Gral::getVars(1, "conf_variable_txt_orden", 0));
	$conf_variable->setEstado(Gral::getVars(1, "conf_variable_cmb_estado", 0));
	$conf_variable->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "conf_variable_txt_creado")));
	$conf_variable->setCreadoPor(Gral::getVars(1, "conf_variable__creado_por", 0));
	$conf_variable->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "conf_variable_txt_modificado")));
	$conf_variable->setModificadoPor(Gral::getVars(1, "conf_variable__modificado_por", 0));

	$conf_variable_estado = new ConfVariable();
	if(trim($hdn_id) != ''){
		$conf_variable_estado->setId($hdn_id);
		$conf_variable->setEstado($conf_variable_estado->getEstado());
				
	}else{
		$conf_variable->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $conf_variable->control();
			if(!$error->getExisteError()){
				$conf_variable->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: conf_variable_alta.php?cs=1&id='.$conf_variable->getId());
			}
		break;
		case 'guardarnvo':
			$error = $conf_variable->control();
			if(!$error->getExisteError()){
				$conf_variable->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: conf_variable_alta.php?cs=1');
				$conf_variable = new ConfVariable();
			}
		break;
	}
	Gral::setSes('ConfVariable_ULTIMO_INSERTADO', $conf_variable->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_conf_variable_id = Gral::getVars(2, $prefijo.'cmb_conf_variable_id', 0);
	if($cmb_conf_variable_id != 0){
		$conf_variable = ConfVariable::getOxId($cmb_conf_variable_id);
	}else{
	
	$conf_variable->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$conf_variable->setConfCategoriaId(Gral::getVars(2, "conf_categoria_id", 'null'));
	$conf_variable->setValor(Gral::getVars(2, "valor", ''));
	$conf_variable->setCodigo(Gral::getVars(2, "codigo", ''));
	$conf_variable->setObservacion(Gral::getVars(2, "observacion", ''));
	$conf_variable->setOrden(Gral::getVars(2, "orden", 0));
	$conf_variable->setEstado(Gral::getVars(2, "estado", 0));
	$conf_variable->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$conf_variable->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$conf_variable->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$conf_variable->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $conf_variable->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/conf_variable/conf_variable_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_conf_variable' width='90%'>
        
				<tr>
				  <td  id="label_conf_variable_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_conf_variable_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='conf_variable_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='conf_variable_txt_descripcion' value='<?php Gral::_echoTxt($conf_variable->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_conf_variable_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_conf_variable_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_conf_variable_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_conf_variable_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_conf_variable_cmb_conf_categoria_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_conf_categoria_id' ?>" >
				  
                                        <?php Lang::_lang('Categoria', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_conf_variable_cmb_conf_categoria_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('conf_categoria_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'conf_variable_cmb_conf_categoria_id', Gral::getCmbFiltro(ConfCategoria::getConfCategoriasCmb(), '...'), $conf_variable->getConfCategoriaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('CONF_VARIABLE_ALTA_CMB_EDIT_CONF_CATEGORIA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="conf_variable_cmb_conf_categoria_id" clase_id="conf_categoria" prefijo='conf_variable_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_conf_categoria_id" <?php echo ($conf_variable->getConfCategoriaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="conf_variable_cmb_conf_categoria_id" clase_id="conf_categoria" prefijo='conf_variable_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_conf_variable_cmb_conf_categoria_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_conf_variable_alta_conf_categoria_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_conf_variable_alta_conf_categoria_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_conf_variable_alta_conf_categoria_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_conf_variable_alta_conf_categoria_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('conf_categoria_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_conf_variable_txt_valor" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_valor' ?>" >
				  
                                        <?php Lang::_lang('valor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_conf_variable_txt_valor" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('valor')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='conf_variable_txt_valor' type='text' class='textbox <?php echo $error_input_css ?> ' id='conf_variable_txt_valor' value='<?php Gral::_echoTxt($conf_variable->getValor(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_conf_variable_alta_valor', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_conf_variable_alta_valor', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_conf_variable_alta_valor', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_conf_variable_alta_valor', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('valor')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_conf_variable_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_conf_variable_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='conf_variable_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='conf_variable_txt_codigo' value='<?php Gral::_echoTxt($conf_variable->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_conf_variable_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_conf_variable_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_conf_variable_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_conf_variable_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_conf_variable_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_conf_variable_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='conf_variable_txa_observacion' rows='10' cols='50' id='conf_variable_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($conf_variable->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_conf_variable_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_conf_variable_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_conf_variable_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_conf_variable_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($conf_variable->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_conf_variable_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='conf_variable'/>
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

