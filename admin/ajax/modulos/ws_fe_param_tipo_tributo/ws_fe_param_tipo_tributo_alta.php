<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_TRIBUTO_ALTA')){
    echo "No tiene asignada la credencial WS_FE_PARAM_TIPO_TRIBUTO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'ws_fe_param_tipo_tributo';
$db_nombre_pagina = 'ws_fe_param_tipo_tributo_alta';

$ws_fe_param_tipo_tributo = new WsFeParamTipoTributo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$ws_fe_param_tipo_tributo = new WsFeParamTipoTributo();
	if(trim($hdn_id) != '') $ws_fe_param_tipo_tributo->setId($hdn_id, false);
	$ws_fe_param_tipo_tributo->setDescripcion(Gral::getVars(1, "ws_fe_param_tipo_tributo_txt_descripcion"));
	$ws_fe_param_tipo_tributo->setCodigo(Gral::getVars(1, "ws_fe_param_tipo_tributo_txt_codigo"));
	$ws_fe_param_tipo_tributo->setCodigoAfip(Gral::getVars(1, "ws_fe_param_tipo_tributo_txt_codigo_afip"));
	$ws_fe_param_tipo_tributo->setFechaDesde(Gral::getVars(1, "ws_fe_param_tipo_tributo_txt_fecha_desde"));
	$ws_fe_param_tipo_tributo->setFechaHasta(Gral::getVars(1, "ws_fe_param_tipo_tributo_txt_fecha_hasta"));
	$ws_fe_param_tipo_tributo->setObservacion(Gral::getVars(1, "ws_fe_param_tipo_tributo_txa_observacion"));
	$ws_fe_param_tipo_tributo->setOrden(Gral::getVars(1, "ws_fe_param_tipo_tributo_txt_orden", 0));
	$ws_fe_param_tipo_tributo->setEstado(Gral::getVars(1, "ws_fe_param_tipo_tributo__estado", 0));
	$ws_fe_param_tipo_tributo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ws_fe_param_tipo_tributo_txt_creado")));
	$ws_fe_param_tipo_tributo->setCreadoPor(Gral::getVars(1, "ws_fe_param_tipo_tributo__creado_por", null));
	$ws_fe_param_tipo_tributo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "ws_fe_param_tipo_tributo_txt_modificado")));
	$ws_fe_param_tipo_tributo->setModificadoPor(Gral::getVars(1, "ws_fe_param_tipo_tributo__modificado_por", null));

	$ws_fe_param_tipo_tributo_estado = new WsFeParamTipoTributo();
	if(trim($hdn_id) != ''){
		$ws_fe_param_tipo_tributo_estado->setId($hdn_id);
		$ws_fe_param_tipo_tributo->setEstado($ws_fe_param_tipo_tributo_estado->getEstado());
				
	}else{
		$ws_fe_param_tipo_tributo->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $ws_fe_param_tipo_tributo->control();
			if(!$error->getExisteError()){
				$ws_fe_param_tipo_tributo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: ws_fe_param_tipo_tributo_alta.php?cs=1&id='.$ws_fe_param_tipo_tributo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ws_fe_param_tipo_tributo->control();
			if(!$error->getExisteError()){
				$ws_fe_param_tipo_tributo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: ws_fe_param_tipo_tributo_alta.php?cs=1');
				$ws_fe_param_tipo_tributo = new WsFeParamTipoTributo();
			}
		break;
	}
	Gral::setSes('WsFeParamTipoTributo_ULTIMO_INSERTADO', $ws_fe_param_tipo_tributo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_ws_fe_param_tipo_tributo_id = Gral::getVars(2, $prefijo.'cmb_ws_fe_param_tipo_tributo_id', 0);
	if($cmb_ws_fe_param_tipo_tributo_id != 0){
		$ws_fe_param_tipo_tributo = WsFeParamTipoTributo::getOxId($cmb_ws_fe_param_tipo_tributo_id);
	}else{
	
	$ws_fe_param_tipo_tributo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$ws_fe_param_tipo_tributo->setCodigo(Gral::getVars(2, "codigo", ''));
	$ws_fe_param_tipo_tributo->setCodigoAfip(Gral::getVars(2, "codigo_afip", ''));
	$ws_fe_param_tipo_tributo->setFechaDesde(Gral::getVars(2, "fecha_desde", ''));
	$ws_fe_param_tipo_tributo->setFechaHasta(Gral::getVars(2, "fecha_hasta", ''));
	$ws_fe_param_tipo_tributo->setObservacion(Gral::getVars(2, "observacion", ''));
	$ws_fe_param_tipo_tributo->setOrden(Gral::getVars(2, "orden", 0));
	$ws_fe_param_tipo_tributo->setEstado(Gral::getVars(2, "estado", 0));
	$ws_fe_param_tipo_tributo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ws_fe_param_tipo_tributo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ws_fe_param_tipo_tributo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ws_fe_param_tipo_tributo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $ws_fe_param_tipo_tributo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ws_fe_param_tipo_tributo/ws_fe_param_tipo_tributo_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ws_fe_param_tipo_tributo' width='90%'>
        
				<tr>
				  <td  id="label_ws_fe_param_tipo_tributo_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_param_tipo_tributo_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_param_tipo_tributo_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_param_tipo_tributo_txt_descripcion' value='<?php Gral::_echoTxt($ws_fe_param_tipo_tributo->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_ws_fe_param_tipo_tributo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_param_tipo_tributo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_param_tipo_tributo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_param_tipo_tributo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_param_tipo_tributo_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_param_tipo_tributo_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_param_tipo_tributo_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_param_tipo_tributo_txt_codigo' value='<?php Gral::_echoTxt($ws_fe_param_tipo_tributo->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_param_tipo_tributo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_param_tipo_tributo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_param_tipo_tributo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_param_tipo_tributo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_param_tipo_tributo_txt_codigo_afip" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo_afip' ?>" >
				  
                                        <?php Lang::_lang('Codigo Afip', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_param_tipo_tributo_txt_codigo_afip" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo_afip')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_param_tipo_tributo_txt_codigo_afip' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_param_tipo_tributo_txt_codigo_afip' value='<?php Gral::_echoTxt($ws_fe_param_tipo_tributo->getCodigoAfip(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_param_tipo_tributo_alta_codigo_afip', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_param_tipo_tributo_alta_codigo_afip', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_param_tipo_tributo_alta_codigo_afip', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_param_tipo_tributo_alta_codigo_afip', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo_afip')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_param_tipo_tributo_txt_fecha_desde" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_desde' ?>" >
				  
                                        <?php Lang::_lang('Fecha Desde', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_param_tipo_tributo_txt_fecha_desde" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_desde')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_param_tipo_tributo_txt_fecha_desde' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_param_tipo_tributo_txt_fecha_desde' value='<?php Gral::_echoTxt($ws_fe_param_tipo_tributo->getFechaDesde(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_param_tipo_tributo_alta_fecha_desde', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_param_tipo_tributo_alta_fecha_desde', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_param_tipo_tributo_alta_fecha_desde', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_param_tipo_tributo_alta_fecha_desde', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_desde')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_param_tipo_tributo_txt_fecha_hasta" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_hasta' ?>" >
				  
                                        <?php Lang::_lang('Fecha Hasta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_param_tipo_tributo_txt_fecha_hasta" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_hasta')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_param_tipo_tributo_txt_fecha_hasta' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_param_tipo_tributo_txt_fecha_hasta' value='<?php Gral::_echoTxt($ws_fe_param_tipo_tributo->getFechaHasta(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_param_tipo_tributo_alta_fecha_hasta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_param_tipo_tributo_alta_fecha_hasta', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_param_tipo_tributo_alta_fecha_hasta', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_param_tipo_tributo_alta_fecha_hasta', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_hasta')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_param_tipo_tributo_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_param_tipo_tributo_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='ws_fe_param_tipo_tributo_txa_observacion' rows='10' cols='50' id='ws_fe_param_tipo_tributo_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($ws_fe_param_tipo_tributo->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_ws_fe_param_tipo_tributo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_param_tipo_tributo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_param_tipo_tributo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_param_tipo_tributo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ws_fe_param_tipo_tributo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ws_fe_param_tipo_tributo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ws_fe_param_tipo_tributo'/>
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

