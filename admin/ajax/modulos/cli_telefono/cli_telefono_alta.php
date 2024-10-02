<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('CLI_TELEFONO_ALTA')){
    echo "No tiene asignada la credencial CLI_TELEFONO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'cli_telefono';
$db_nombre_pagina = 'cli_telefono_alta';

$cli_telefono = new CliTelefono();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$cli_telefono = new CliTelefono();
	if(trim($hdn_id) != '') $cli_telefono->setId($hdn_id, false);
	$cli_telefono->setCliClienteId(Gral::getVars(1, "cli_telefono_cmb_cli_cliente_id", null));
	$cli_telefono->setCliTelefonoTipoId(Gral::getVars(1, "cli_telefono_cmb_cli_telefono_tipo_id", null));
	$cli_telefono->setDescripcion(Gral::getVars(1, "cli_telefono_txt_descripcion"));
	$cli_telefono->setGeoPaisId(Gral::getVars(1, "cli_telefono_cmb_geo_pais_id", null));
	$cli_telefono->setCodigo(Gral::getVars(1, "cli_telefono_txt_codigo"));
	$cli_telefono->setTelefono(Gral::getVars(1, "cli_telefono_txt_telefono"));
	$cli_telefono->setObservacion(Gral::getVars(1, "cli_telefono_txa_observacion"));
	$cli_telefono->setOrden(Gral::getVars(1, "cli_telefono_txt_orden", 0));
	$cli_telefono->setEstado(Gral::getVars(1, "cli_telefono__estado", 0));
	$cli_telefono->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "cli_telefono_txt_creado")));
	$cli_telefono->setCreadoPor(Gral::getVars(1, "cli_telefono__creado_por", 0));
	$cli_telefono->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "cli_telefono_txt_modificado")));
	$cli_telefono->setModificadoPor(Gral::getVars(1, "cli_telefono__modificado_por", 0));

	$cli_telefono_estado = new CliTelefono();
	if(trim($hdn_id) != ''){
		$cli_telefono_estado->setId($hdn_id);
		$cli_telefono->setEstado($cli_telefono_estado->getEstado());
				
	}else{
		$cli_telefono->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $cli_telefono->control();
			if(!$error->getExisteError()){
				$cli_telefono->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: cli_telefono_alta.php?cs=1&id='.$cli_telefono->getId());
			}
		break;
		case 'guardarnvo':
			$error = $cli_telefono->control();
			if(!$error->getExisteError()){
				$cli_telefono->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: cli_telefono_alta.php?cs=1');
				$cli_telefono = new CliTelefono();
			}
		break;
	}
	Gral::setSes('CliTelefono_ULTIMO_INSERTADO', $cli_telefono->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_cli_telefono_id = Gral::getVars(2, $prefijo.'cmb_cli_telefono_id', 0);
	if($cmb_cli_telefono_id != 0){
		$cli_telefono = CliTelefono::getOxId($cmb_cli_telefono_id);
	}else{
	
	$cli_telefono->setCliClienteId(Gral::getVars(2, "cli_cliente_id", 'null'));
	$cli_telefono->setCliTelefonoTipoId(Gral::getVars(2, "cli_telefono_tipo_id", 'null'));
	$cli_telefono->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$cli_telefono->setGeoPaisId(Gral::getVars(2, "geo_pais_id", 'null'));
	$cli_telefono->setCodigo(Gral::getVars(2, "codigo", ''));
	$cli_telefono->setTelefono(Gral::getVars(2, "telefono", ''));
	$cli_telefono->setObservacion(Gral::getVars(2, "observacion", ''));
	$cli_telefono->setOrden(Gral::getVars(2, "orden", 0));
	$cli_telefono->setEstado(Gral::getVars(2, "estado", 0));
	$cli_telefono->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$cli_telefono->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$cli_telefono->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$cli_telefono->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $cli_telefono->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/cli_telefono/cli_telefono_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_cli_telefono' width='90%'>
        
				<tr>
				  <td  id="label_cli_telefono_cmb_cli_cliente_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cli_cliente_id' ?>" >
				  
                                        <?php Lang::_lang('CliCliente', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cli_telefono_cmb_cli_cliente_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cli_cliente_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'cli_telefono_cmb_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(), '...'), $cli_telefono->getCliClienteId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('CLI_TELEFONO_ALTA_CMB_EDIT_CLI_CLIENTE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="cli_telefono_cmb_cli_cliente_id" clase_id="cli_cliente" prefijo='cli_telefono_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_cli_cliente_id" <?php echo ($cli_telefono->getCliClienteId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="cli_telefono_cmb_cli_cliente_id" clase_id="cli_cliente" prefijo='cli_telefono_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_cli_telefono_cmb_cli_cliente_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_cli_telefono_alta_cli_cliente_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cli_telefono_alta_cli_cliente_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cli_telefono_alta_cli_cliente_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cli_telefono_alta_cli_cliente_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cli_cliente_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cli_telefono_cmb_cli_telefono_tipo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cli_telefono_tipo_id' ?>" >
				  
                                        <?php Lang::_lang('CliTelefonoTipo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cli_telefono_cmb_cli_telefono_tipo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cli_telefono_tipo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'cli_telefono_cmb_cli_telefono_tipo_id', Gral::getCmbFiltro(CliTelefonoTipo::getCliTelefonoTiposCmb(), '...'), $cli_telefono->getCliTelefonoTipoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('CLI_TELEFONO_ALTA_CMB_EDIT_CLI_TELEFONO_TIPO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="cli_telefono_cmb_cli_telefono_tipo_id" clase_id="cli_telefono_tipo" prefijo='cli_telefono_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_cli_telefono_tipo_id" <?php echo ($cli_telefono->getCliTelefonoTipoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="cli_telefono_cmb_cli_telefono_tipo_id" clase_id="cli_telefono_tipo" prefijo='cli_telefono_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_cli_telefono_cmb_cli_telefono_tipo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_cli_telefono_alta_cli_telefono_tipo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cli_telefono_alta_cli_telefono_tipo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cli_telefono_alta_cli_telefono_tipo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cli_telefono_alta_cli_telefono_tipo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cli_telefono_tipo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cli_telefono_cmb_geo_pais_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_geo_pais_id' ?>" >
				  
                                        <?php Lang::_lang('GeoPais', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cli_telefono_cmb_geo_pais_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('geo_pais_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'cli_telefono_cmb_geo_pais_id', Gral::getCmbFiltro(GeoPais::getGeoPaissCmb(), '...'), $cli_telefono->getGeoPaisId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('CLI_TELEFONO_ALTA_CMB_EDIT_GEO_PAIS')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="cli_telefono_cmb_geo_pais_id" clase_id="geo_pais" prefijo='cli_telefono_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_geo_pais_id" <?php echo ($cli_telefono->getGeoPaisId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="cli_telefono_cmb_geo_pais_id" clase_id="geo_pais" prefijo='cli_telefono_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_cli_telefono_cmb_geo_pais_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_cli_telefono_alta_geo_pais_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cli_telefono_alta_geo_pais_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cli_telefono_alta_geo_pais_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cli_telefono_alta_geo_pais_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('geo_pais_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cli_telefono_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Cod Area', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cli_telefono_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cli_telefono_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='cli_telefono_txt_codigo' value='<?php Gral::_echoTxt($cli_telefono->getCodigo(), true) ?>' size='10' />            
                    <?php if(Lang::_lang('help_cli_telefono_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cli_telefono_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cli_telefono_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cli_telefono_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cli_telefono_txt_telefono" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_telefono' ?>" >
				  
                                        <?php Lang::_lang('Telefono', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cli_telefono_txt_telefono" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('telefono')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cli_telefono_txt_telefono' type='text' class='textbox <?php echo $error_input_css ?> ' id='cli_telefono_txt_telefono' value='<?php Gral::_echoTxt($cli_telefono->getTelefono(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_cli_telefono_alta_telefono', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cli_telefono_alta_telefono', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cli_telefono_alta_telefono', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cli_telefono_alta_telefono', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('telefono')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cli_telefono_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cli_telefono_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='cli_telefono_txa_observacion' rows='10' cols='50' id='cli_telefono_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($cli_telefono->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_cli_telefono_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cli_telefono_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cli_telefono_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cli_telefono_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($cli_telefono->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_cli_telefono_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='cli_telefono'/>
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

