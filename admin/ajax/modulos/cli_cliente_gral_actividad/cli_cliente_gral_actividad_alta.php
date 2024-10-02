<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('CLI_CLIENTE_GRAL_ACTIVIDAD_ALTA')){
    echo "No tiene asignada la credencial CLI_CLIENTE_GRAL_ACTIVIDAD_ALTA. ";
    return false;
}

$db_nombre_objeto = 'cli_cliente_gral_actividad';
$db_nombre_pagina = 'cli_cliente_gral_actividad_alta';

$cli_cliente_gral_actividad = new CliClienteGralActividad();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$cli_cliente_gral_actividad = new CliClienteGralActividad();
	if(trim($hdn_id) != '') $cli_cliente_gral_actividad->setId($hdn_id, false);
	$cli_cliente_gral_actividad->setDescripcion(Gral::getVars(1, "cli_cliente_gral_actividad_txt_descripcion"));
	$cli_cliente_gral_actividad->setCliClienteId(Gral::getVars(1, "cli_cliente_gral_actividad_cmb_cli_cliente_id", null));
	$cli_cliente_gral_actividad->setGralActividadId(Gral::getVars(1, "cli_cliente_gral_actividad_cmb_gral_actividad_id", null));
	$cli_cliente_gral_actividad->setCodigo(Gral::getVars(1, "cli_cliente_gral_actividad_txt_codigo"));
	$cli_cliente_gral_actividad->setObservacion(Gral::getVars(1, "cli_cliente_gral_actividad_txa_observacion"));
	$cli_cliente_gral_actividad->setOrden(Gral::getVars(1, "cli_cliente_gral_actividad_txt_orden", 0));
	$cli_cliente_gral_actividad->setEstado(Gral::getVars(1, "cli_cliente_gral_actividad_cmb_estado", 0));
	$cli_cliente_gral_actividad->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "cli_cliente_gral_actividad_txt_creado")));
	$cli_cliente_gral_actividad->setCreadoPor(Gral::getVars(1, "cli_cliente_gral_actividad__creado_por", 0));
	$cli_cliente_gral_actividad->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "cli_cliente_gral_actividad_txt_modificado")));
	$cli_cliente_gral_actividad->setModificadoPor(Gral::getVars(1, "cli_cliente_gral_actividad__modificado_por", 0));

	$cli_cliente_gral_actividad_estado = new CliClienteGralActividad();
	if(trim($hdn_id) != ''){
		$cli_cliente_gral_actividad_estado->setId($hdn_id);
		$cli_cliente_gral_actividad->setEstado($cli_cliente_gral_actividad_estado->getEstado());
				
	}else{
		$cli_cliente_gral_actividad->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $cli_cliente_gral_actividad->control();
			if(!$error->getExisteError()){
				$cli_cliente_gral_actividad->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: cli_cliente_gral_actividad_alta.php?cs=1&id='.$cli_cliente_gral_actividad->getId());
			}
		break;
		case 'guardarnvo':
			$error = $cli_cliente_gral_actividad->control();
			if(!$error->getExisteError()){
				$cli_cliente_gral_actividad->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: cli_cliente_gral_actividad_alta.php?cs=1');
				$cli_cliente_gral_actividad = new CliClienteGralActividad();
			}
		break;
	}
	Gral::setSes('CliClienteGralActividad_ULTIMO_INSERTADO', $cli_cliente_gral_actividad->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_cli_cliente_gral_actividad_id = Gral::getVars(2, $prefijo.'cmb_cli_cliente_gral_actividad_id', 0);
	if($cmb_cli_cliente_gral_actividad_id != 0){
		$cli_cliente_gral_actividad = CliClienteGralActividad::getOxId($cmb_cli_cliente_gral_actividad_id);
	}else{
	
	$cli_cliente_gral_actividad->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$cli_cliente_gral_actividad->setCliClienteId(Gral::getVars(2, "cli_cliente_id", 'null'));
	$cli_cliente_gral_actividad->setGralActividadId(Gral::getVars(2, "gral_actividad_id", 'null'));
	$cli_cliente_gral_actividad->setCodigo(Gral::getVars(2, "codigo", ''));
	$cli_cliente_gral_actividad->setObservacion(Gral::getVars(2, "observacion", ''));
	$cli_cliente_gral_actividad->setOrden(Gral::getVars(2, "orden", 0));
	$cli_cliente_gral_actividad->setEstado(Gral::getVars(2, "estado", 0));
	$cli_cliente_gral_actividad->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$cli_cliente_gral_actividad->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$cli_cliente_gral_actividad->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$cli_cliente_gral_actividad->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $cli_cliente_gral_actividad->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/cli_cliente_gral_actividad/cli_cliente_gral_actividad_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_cli_cliente_gral_actividad' width='90%'>
        
				<tr>
				  <td  id="label_cli_cliente_gral_actividad_cmb_cli_cliente_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cli_cliente_id' ?>" >
				  
                                        <?php Lang::_lang('CliCliente', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cli_cliente_gral_actividad_cmb_cli_cliente_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cli_cliente_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'cli_cliente_gral_actividad_cmb_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(), '...'), $cli_cliente_gral_actividad->getCliClienteId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_GRAL_ACTIVIDAD_ALTA_CMB_EDIT_CLI_CLIENTE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="cli_cliente_gral_actividad_cmb_cli_cliente_id" clase_id="cli_cliente" prefijo='cli_cliente_gral_actividad_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_cli_cliente_id" <?php echo ($cli_cliente_gral_actividad->getCliClienteId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="cli_cliente_gral_actividad_cmb_cli_cliente_id" clase_id="cli_cliente" prefijo='cli_cliente_gral_actividad_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_cli_cliente_gral_actividad_cmb_cli_cliente_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_cli_cliente_gral_actividad_alta_cli_cliente_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cli_cliente_gral_actividad_alta_cli_cliente_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cli_cliente_gral_actividad_alta_cli_cliente_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cli_cliente_gral_actividad_alta_cli_cliente_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cli_cliente_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cli_cliente_gral_actividad_cmb_gral_actividad_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_actividad_id' ?>" >
				  
                                        <?php Lang::_lang('GralActividad', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cli_cliente_gral_actividad_cmb_gral_actividad_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_actividad_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'cli_cliente_gral_actividad_cmb_gral_actividad_id', Gral::getCmbFiltro(GralActividad::getGralActividadsCmb(), '...'), $cli_cliente_gral_actividad->getGralActividadId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_GRAL_ACTIVIDAD_ALTA_CMB_EDIT_GRAL_ACTIVIDAD')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="cli_cliente_gral_actividad_cmb_gral_actividad_id" clase_id="gral_actividad" prefijo='cli_cliente_gral_actividad_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_actividad_id" <?php echo ($cli_cliente_gral_actividad->getGralActividadId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="cli_cliente_gral_actividad_cmb_gral_actividad_id" clase_id="gral_actividad" prefijo='cli_cliente_gral_actividad_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_cli_cliente_gral_actividad_cmb_gral_actividad_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_cli_cliente_gral_actividad_alta_gral_actividad_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cli_cliente_gral_actividad_alta_gral_actividad_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cli_cliente_gral_actividad_alta_gral_actividad_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cli_cliente_gral_actividad_alta_gral_actividad_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_actividad_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cli_cliente_gral_actividad_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cli_cliente_gral_actividad_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='cli_cliente_gral_actividad_txa_observacion' rows='10' cols='50' id='cli_cliente_gral_actividad_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($cli_cliente_gral_actividad->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_cli_cliente_gral_actividad_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cli_cliente_gral_actividad_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cli_cliente_gral_actividad_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cli_cliente_gral_actividad_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($cli_cliente_gral_actividad->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_cli_cliente_gral_actividad_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='cli_cliente_gral_actividad'/>
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

