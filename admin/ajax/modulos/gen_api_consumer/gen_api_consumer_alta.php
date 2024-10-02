<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('GEN_API_CONSUMER_ALTA')){
    echo "No tiene asignada la credencial GEN_API_CONSUMER_ALTA. ";
    return false;
}

$db_nombre_objeto = 'gen_api_consumer';
$db_nombre_pagina = 'gen_api_consumer_alta';

$gen_api_consumer = new GenApiConsumer();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$gen_api_consumer = new GenApiConsumer();
	if(trim($hdn_id) != '') $gen_api_consumer->setId($hdn_id, false);
	$gen_api_consumer->setDescripcion(Gral::getVars(1, "gen_api_consumer_txt_descripcion"));
	$gen_api_consumer->setGenApiProyectoId(Gral::getVars(1, "gen_api_consumer_cmb_gen_api_proyecto_id", null));
	$gen_api_consumer->setConsumer(Gral::getVars(1, "gen_api_consumer_txt_consumer"));
	$gen_api_consumer->setSecretCode(Gral::getVars(1, "gen_api_consumer_txt_secret_code"));
	$gen_api_consumer->setCodigo(Gral::getVars(1, "gen_api_consumer_txt_codigo"));
	$gen_api_consumer->setObservacion(Gral::getVars(1, "gen_api_consumer_txa_observacion"));
	$gen_api_consumer->setOrden(Gral::getVars(1, "gen_api_consumer_txt_orden", 0));
	$gen_api_consumer->setEstado(Gral::getVars(1, "gen_api_consumer__estado", 0));
	$gen_api_consumer->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "gen_api_consumer_txt_creado")));
	$gen_api_consumer->setCreadoPor(Gral::getVars(1, "gen_api_consumer__creado_por", null));
	$gen_api_consumer->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "gen_api_consumer_txt_modificado")));
	$gen_api_consumer->setModificadoPor(Gral::getVars(1, "gen_api_consumer__modificado_por", null));

	$gen_api_consumer_estado = new GenApiConsumer();
	if(trim($hdn_id) != ''){
		$gen_api_consumer_estado->setId($hdn_id);
		$gen_api_consumer->setEstado($gen_api_consumer_estado->getEstado());
				
	}else{
		$gen_api_consumer->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $gen_api_consumer->control();
			if(!$error->getExisteError()){
				$gen_api_consumer->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: gen_api_consumer_alta.php?cs=1&id='.$gen_api_consumer->getId());
			}
		break;
		case 'guardarnvo':
			$error = $gen_api_consumer->control();
			if(!$error->getExisteError()){
				$gen_api_consumer->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: gen_api_consumer_alta.php?cs=1');
				$gen_api_consumer = new GenApiConsumer();
			}
		break;
	}
	Gral::setSes('GenApiConsumer_ULTIMO_INSERTADO', $gen_api_consumer->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_gen_api_consumer_id = Gral::getVars(2, $prefijo.'cmb_gen_api_consumer_id', 0);
	if($cmb_gen_api_consumer_id != 0){
		$gen_api_consumer = GenApiConsumer::getOxId($cmb_gen_api_consumer_id);
	}else{
	
	$gen_api_consumer->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$gen_api_consumer->setGenApiProyectoId(Gral::getVars(2, "gen_api_proyecto_id", 'null'));
	$gen_api_consumer->setConsumer(Gral::getVars(2, "consumer", ''));
	$gen_api_consumer->setSecretCode(Gral::getVars(2, "secret_code", ''));
	$gen_api_consumer->setCodigo(Gral::getVars(2, "codigo", ''));
	$gen_api_consumer->setObservacion(Gral::getVars(2, "observacion", ''));
	$gen_api_consumer->setOrden(Gral::getVars(2, "orden", 0));
	$gen_api_consumer->setEstado(Gral::getVars(2, "estado", 0));
	$gen_api_consumer->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$gen_api_consumer->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$gen_api_consumer->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$gen_api_consumer->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $gen_api_consumer->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/gen_api_consumer/gen_api_consumer_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_gen_api_consumer' width='90%'>
        
				<tr>
				  <td  id="label_gen_api_consumer_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_api_consumer_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gen_api_consumer_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='gen_api_consumer_txt_descripcion' value='<?php Gral::_echoTxt($gen_api_consumer->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_gen_api_consumer_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_api_consumer_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_api_consumer_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_api_consumer_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_api_consumer_cmb_gen_api_proyecto_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gen_api_proyecto_id' ?>" >
				  
                                        <?php Lang::_lang('GenApiProyecto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_api_consumer_cmb_gen_api_proyecto_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gen_api_proyecto_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gen_api_consumer_cmb_gen_api_proyecto_id', Gral::getCmbFiltro(GenApiProyecto::getGenApiProyectosCmb(), '...'), $gen_api_consumer->getGenApiProyectoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('GEN_API_CONSUMER_ALTA_CMB_EDIT_GEN_API_PROYECTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="gen_api_consumer_cmb_gen_api_proyecto_id" clase_id="gen_api_proyecto" prefijo='gen_api_consumer_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gen_api_proyecto_id" <?php echo ($gen_api_consumer->getGenApiProyectoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="gen_api_consumer_cmb_gen_api_proyecto_id" clase_id="gen_api_proyecto" prefijo='gen_api_consumer_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_gen_api_consumer_cmb_gen_api_proyecto_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_gen_api_consumer_alta_gen_api_proyecto_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_api_consumer_alta_gen_api_proyecto_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_api_consumer_alta_gen_api_proyecto_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_api_consumer_alta_gen_api_proyecto_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gen_api_proyecto_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_api_consumer_txt_consumer" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_consumer' ?>" >
				  
                                        <?php Lang::_lang('Consumer', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_api_consumer_txt_consumer" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('consumer')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gen_api_consumer_txt_consumer' type='text' class='textbox <?php echo $error_input_css ?> ' id='gen_api_consumer_txt_consumer' value='<?php Gral::_echoTxt($gen_api_consumer->getConsumer(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gen_api_consumer_alta_consumer', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_api_consumer_alta_consumer', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_api_consumer_alta_consumer', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_api_consumer_alta_consumer', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('consumer')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_api_consumer_txt_secret_code" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_secret_code' ?>" >
				  
                                        <?php Lang::_lang('Secret Code', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_api_consumer_txt_secret_code" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('secret_code')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gen_api_consumer_txt_secret_code' type='text' class='textbox <?php echo $error_input_css ?> ' id='gen_api_consumer_txt_secret_code' value='<?php Gral::_echoTxt($gen_api_consumer->getSecretCode(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gen_api_consumer_alta_secret_code', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_api_consumer_alta_secret_code', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_api_consumer_alta_secret_code', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_api_consumer_alta_secret_code', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('secret_code')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_api_consumer_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_api_consumer_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gen_api_consumer_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='gen_api_consumer_txt_codigo' value='<?php Gral::_echoTxt($gen_api_consumer->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gen_api_consumer_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_api_consumer_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_api_consumer_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_api_consumer_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_api_consumer_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_api_consumer_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='gen_api_consumer_txa_observacion' rows='10' cols='50' id='gen_api_consumer_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($gen_api_consumer->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_gen_api_consumer_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_api_consumer_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_api_consumer_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_api_consumer_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($gen_api_consumer->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_gen_api_consumer_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='gen_api_consumer'/>
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

