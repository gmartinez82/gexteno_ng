<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('GEN_API_PROYECTO_ALTA')){
    echo "No tiene asignada la credencial GEN_API_PROYECTO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'gen_api_proyecto';
$db_nombre_pagina = 'gen_api_proyecto_alta';

$gen_api_proyecto = new GenApiProyecto();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$gen_api_proyecto = new GenApiProyecto();
	if(trim($hdn_id) != '') $gen_api_proyecto->setId($hdn_id, false);
	$gen_api_proyecto->setDescripcion(Gral::getVars(1, "gen_api_proyecto_txt_descripcion"));
	$gen_api_proyecto->setUrlApi(Gral::getVars(1, "gen_api_proyecto_txt_url_api"));
	$gen_api_proyecto->setCodigo(Gral::getVars(1, "gen_api_proyecto_txt_codigo"));
	$gen_api_proyecto->setObservacion(Gral::getVars(1, "gen_api_proyecto_txa_observacion"));
	$gen_api_proyecto->setOrden(Gral::getVars(1, "gen_api_proyecto_txt_orden", 0));
	$gen_api_proyecto->setEstado(Gral::getVars(1, "gen_api_proyecto__estado", 0));
	$gen_api_proyecto->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "gen_api_proyecto_txt_creado")));
	$gen_api_proyecto->setCreadoPor(Gral::getVars(1, "gen_api_proyecto__creado_por", 0));
	$gen_api_proyecto->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "gen_api_proyecto_txt_modificado")));
	$gen_api_proyecto->setModificadoPor(Gral::getVars(1, "gen_api_proyecto__modificado_por", 0));

	$gen_api_proyecto_estado = new GenApiProyecto();
	if(trim($hdn_id) != ''){
		$gen_api_proyecto_estado->setId($hdn_id);
		$gen_api_proyecto->setEstado($gen_api_proyecto_estado->getEstado());
				
	}else{
		$gen_api_proyecto->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $gen_api_proyecto->control();
			if(!$error->getExisteError()){
				$gen_api_proyecto->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: gen_api_proyecto_alta.php?cs=1&id='.$gen_api_proyecto->getId());
			}
		break;
		case 'guardarnvo':
			$error = $gen_api_proyecto->control();
			if(!$error->getExisteError()){
				$gen_api_proyecto->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: gen_api_proyecto_alta.php?cs=1');
				$gen_api_proyecto = new GenApiProyecto();
			}
		break;
	}
	Gral::setSes('GenApiProyecto_ULTIMO_INSERTADO', $gen_api_proyecto->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_gen_api_proyecto_id = Gral::getVars(2, $prefijo.'cmb_gen_api_proyecto_id', 0);
	if($cmb_gen_api_proyecto_id != 0){
		$gen_api_proyecto = GenApiProyecto::getOxId($cmb_gen_api_proyecto_id);
	}else{
	
	$gen_api_proyecto->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$gen_api_proyecto->setUrlApi(Gral::getVars(2, "url_api", ''));
	$gen_api_proyecto->setCodigo(Gral::getVars(2, "codigo", ''));
	$gen_api_proyecto->setObservacion(Gral::getVars(2, "observacion", ''));
	$gen_api_proyecto->setOrden(Gral::getVars(2, "orden", 0));
	$gen_api_proyecto->setEstado(Gral::getVars(2, "estado", 0));
	$gen_api_proyecto->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$gen_api_proyecto->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$gen_api_proyecto->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$gen_api_proyecto->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $gen_api_proyecto->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/gen_api_proyecto/gen_api_proyecto_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_gen_api_proyecto' width='90%'>
        
				<tr>
				  <td  id="label_gen_api_proyecto_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_api_proyecto_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gen_api_proyecto_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='gen_api_proyecto_txt_descripcion' value='<?php Gral::_echoTxt($gen_api_proyecto->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_gen_api_proyecto_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_api_proyecto_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_api_proyecto_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_api_proyecto_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_api_proyecto_txt_url_api" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_url_api' ?>" >
				  
                                        <?php Lang::_lang('Url Api', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_api_proyecto_txt_url_api" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('url_api')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gen_api_proyecto_txt_url_api' type='text' class='textbox <?php echo $error_input_css ?> ' id='gen_api_proyecto_txt_url_api' value='<?php Gral::_echoTxt($gen_api_proyecto->getUrlApi(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gen_api_proyecto_alta_url_api', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_api_proyecto_alta_url_api', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_api_proyecto_alta_url_api', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_api_proyecto_alta_url_api', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('url_api')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_api_proyecto_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_api_proyecto_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gen_api_proyecto_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='gen_api_proyecto_txt_codigo' value='<?php Gral::_echoTxt($gen_api_proyecto->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gen_api_proyecto_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_api_proyecto_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_api_proyecto_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_api_proyecto_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_api_proyecto_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_api_proyecto_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='gen_api_proyecto_txa_observacion' rows='10' cols='50' id='gen_api_proyecto_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($gen_api_proyecto->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_gen_api_proyecto_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_api_proyecto_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_api_proyecto_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_api_proyecto_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($gen_api_proyecto->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_gen_api_proyecto_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='gen_api_proyecto'/>
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

