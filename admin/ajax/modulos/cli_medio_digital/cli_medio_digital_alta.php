<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('CLI_MEDIO_DIGITAL_ALTA')){
    echo "No tiene asignada la credencial CLI_MEDIO_DIGITAL_ALTA. ";
    return false;
}

$db_nombre_objeto = 'cli_medio_digital';
$db_nombre_pagina = 'cli_medio_digital_alta';

$cli_medio_digital = new CliMedioDigital();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$cli_medio_digital = new CliMedioDigital();
	if(trim($hdn_id) != '') $cli_medio_digital->setId($hdn_id, false);
	$cli_medio_digital->setDescripcion(Gral::getVars(1, "cli_medio_digital_txt_descripcion"));
	$cli_medio_digital->setCliClienteId(Gral::getVars(1, "cli_medio_digital_cmb_cli_cliente_id", null));
	$cli_medio_digital->setCliTipoMedioDigitalId(Gral::getVars(1, "cli_medio_digital_cmb_cli_tipo_medio_digital_id", null));
	$cli_medio_digital->setCodigo(Gral::getVars(1, "cli_medio_digital_txt_codigo"));
	$cli_medio_digital->setObservacion(Gral::getVars(1, "cli_medio_digital_txa_observacion"));
	$cli_medio_digital->setOrden(Gral::getVars(1, "cli_medio_digital_txt_orden", 0));
	$cli_medio_digital->setEstado(Gral::getVars(1, "cli_medio_digital_cmb_estado", 0));
	$cli_medio_digital->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "cli_medio_digital_txt_creado")));
	$cli_medio_digital->setCreadoPor(Gral::getVars(1, "cli_medio_digital__creado_por", 0));
	$cli_medio_digital->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "cli_medio_digital_txt_modificado")));
	$cli_medio_digital->setModificadoPor(Gral::getVars(1, "cli_medio_digital__modificado_por", 0));

	$cli_medio_digital_estado = new CliMedioDigital();
	if(trim($hdn_id) != ''){
		$cli_medio_digital_estado->setId($hdn_id);
		$cli_medio_digital->setEstado($cli_medio_digital_estado->getEstado());
				
	}else{
		$cli_medio_digital->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $cli_medio_digital->control();
			if(!$error->getExisteError()){
				$cli_medio_digital->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: cli_medio_digital_alta.php?cs=1&id='.$cli_medio_digital->getId());
			}
		break;
		case 'guardarnvo':
			$error = $cli_medio_digital->control();
			if(!$error->getExisteError()){
				$cli_medio_digital->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: cli_medio_digital_alta.php?cs=1');
				$cli_medio_digital = new CliMedioDigital();
			}
		break;
	}
	Gral::setSes('CliMedioDigital_ULTIMO_INSERTADO', $cli_medio_digital->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_cli_medio_digital_id = Gral::getVars(2, $prefijo.'cmb_cli_medio_digital_id', 0);
	if($cmb_cli_medio_digital_id != 0){
		$cli_medio_digital = CliMedioDigital::getOxId($cmb_cli_medio_digital_id);
	}else{
	
	$cli_medio_digital->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$cli_medio_digital->setCliClienteId(Gral::getVars(2, "cli_cliente_id", 'null'));
	$cli_medio_digital->setCliTipoMedioDigitalId(Gral::getVars(2, "cli_tipo_medio_digital_id", 'null'));
	$cli_medio_digital->setCodigo(Gral::getVars(2, "codigo", ''));
	$cli_medio_digital->setObservacion(Gral::getVars(2, "observacion", ''));
	$cli_medio_digital->setOrden(Gral::getVars(2, "orden", 0));
	$cli_medio_digital->setEstado(Gral::getVars(2, "estado", 0));
	$cli_medio_digital->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$cli_medio_digital->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$cli_medio_digital->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$cli_medio_digital->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $cli_medio_digital->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/cli_medio_digital/cli_medio_digital_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_cli_medio_digital' width='90%'>
        
				<tr>
				  <td  id="label_cli_medio_digital_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Enlace', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cli_medio_digital_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cli_medio_digital_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='cli_medio_digital_txt_descripcion' value='<?php Gral::_echoTxt($cli_medio_digital->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_cli_medio_digital_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cli_medio_digital_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cli_medio_digital_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cli_medio_digital_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cli_medio_digital_cmb_cli_cliente_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cli_cliente_id' ?>" >
				  
                                        <?php Lang::_lang('CliCliente', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cli_medio_digital_cmb_cli_cliente_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cli_cliente_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'cli_medio_digital_cmb_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(), '...'), $cli_medio_digital->getCliClienteId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('CLI_MEDIO_DIGITAL_ALTA_CMB_EDIT_CLI_CLIENTE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="cli_medio_digital_cmb_cli_cliente_id" clase_id="cli_cliente" prefijo='cli_medio_digital_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_cli_cliente_id" <?php echo ($cli_medio_digital->getCliClienteId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="cli_medio_digital_cmb_cli_cliente_id" clase_id="cli_cliente" prefijo='cli_medio_digital_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_cli_medio_digital_cmb_cli_cliente_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_cli_medio_digital_alta_cli_cliente_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cli_medio_digital_alta_cli_cliente_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cli_medio_digital_alta_cli_cliente_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cli_medio_digital_alta_cli_cliente_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cli_cliente_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cli_medio_digital_cmb_cli_tipo_medio_digital_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cli_tipo_medio_digital_id' ?>" >
				  
                                        <?php Lang::_lang('CliTipoMedioDigital', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cli_medio_digital_cmb_cli_tipo_medio_digital_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cli_tipo_medio_digital_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'cli_medio_digital_cmb_cli_tipo_medio_digital_id', Gral::getCmbFiltro(CliTipoMedioDigital::getCliTipoMedioDigitalsCmb(), '...'), $cli_medio_digital->getCliTipoMedioDigitalId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('CLI_MEDIO_DIGITAL_ALTA_CMB_EDIT_CLI_TIPO_MEDIO_DIGITAL')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="cli_medio_digital_cmb_cli_tipo_medio_digital_id" clase_id="cli_tipo_medio_digital" prefijo='cli_medio_digital_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_cli_tipo_medio_digital_id" <?php echo ($cli_medio_digital->getCliTipoMedioDigitalId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="cli_medio_digital_cmb_cli_tipo_medio_digital_id" clase_id="cli_tipo_medio_digital" prefijo='cli_medio_digital_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_cli_medio_digital_cmb_cli_tipo_medio_digital_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_cli_medio_digital_alta_cli_tipo_medio_digital_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cli_medio_digital_alta_cli_tipo_medio_digital_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cli_medio_digital_alta_cli_tipo_medio_digital_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cli_medio_digital_alta_cli_tipo_medio_digital_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cli_tipo_medio_digital_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cli_medio_digital_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cli_medio_digital_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='cli_medio_digital_txa_observacion' rows='10' cols='50' id='cli_medio_digital_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($cli_medio_digital->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_cli_medio_digital_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cli_medio_digital_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cli_medio_digital_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cli_medio_digital_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($cli_medio_digital->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_cli_medio_digital_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='cli_medio_digital'/>
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

