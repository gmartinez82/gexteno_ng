<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_DOCUMENTO_ALTA')){
    echo "No tiene asignada la credencial WS_FE_PARAM_TIPO_DOCUMENTO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'ws_fe_param_tipo_documento';
$db_nombre_pagina = 'ws_fe_param_tipo_documento_alta';

$ws_fe_param_tipo_documento = new WsFeParamTipoDocumento();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$ws_fe_param_tipo_documento = new WsFeParamTipoDocumento();
	if(trim($hdn_id) != '') $ws_fe_param_tipo_documento->setId($hdn_id, false);
	$ws_fe_param_tipo_documento->setDescripcion(Gral::getVars(1, "ws_fe_param_tipo_documento_txt_descripcion"));
	$ws_fe_param_tipo_documento->setCodigo(Gral::getVars(1, "ws_fe_param_tipo_documento_txt_codigo"));
	$ws_fe_param_tipo_documento->setCodigoAfip(Gral::getVars(1, "ws_fe_param_tipo_documento_txt_codigo_afip"));
	$ws_fe_param_tipo_documento->setFechaDesde(Gral::getVars(1, "ws_fe_param_tipo_documento_txt_fecha_desde"));
	$ws_fe_param_tipo_documento->setFechaHasta(Gral::getVars(1, "ws_fe_param_tipo_documento_txt_fecha_hasta"));
	$ws_fe_param_tipo_documento->setObservacion(Gral::getVars(1, "ws_fe_param_tipo_documento_txa_observacion"));
	$ws_fe_param_tipo_documento->setOrden(Gral::getVars(1, "ws_fe_param_tipo_documento_txt_orden", 0));
	$ws_fe_param_tipo_documento->setEstado(Gral::getVars(1, "ws_fe_param_tipo_documento__estado", 0));
	$ws_fe_param_tipo_documento->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ws_fe_param_tipo_documento_txt_creado")));
	$ws_fe_param_tipo_documento->setCreadoPor(Gral::getVars(1, "ws_fe_param_tipo_documento__creado_por", null));
	$ws_fe_param_tipo_documento->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "ws_fe_param_tipo_documento_txt_modificado")));
	$ws_fe_param_tipo_documento->setModificadoPor(Gral::getVars(1, "ws_fe_param_tipo_documento__modificado_por", null));

	$ws_fe_param_tipo_documento_estado = new WsFeParamTipoDocumento();
	if(trim($hdn_id) != ''){
		$ws_fe_param_tipo_documento_estado->setId($hdn_id);
		$ws_fe_param_tipo_documento->setEstado($ws_fe_param_tipo_documento_estado->getEstado());
				
	}else{
		$ws_fe_param_tipo_documento->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $ws_fe_param_tipo_documento->control();
			if(!$error->getExisteError()){
				$ws_fe_param_tipo_documento->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: ws_fe_param_tipo_documento_alta.php?cs=1&id='.$ws_fe_param_tipo_documento->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ws_fe_param_tipo_documento->control();
			if(!$error->getExisteError()){
				$ws_fe_param_tipo_documento->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: ws_fe_param_tipo_documento_alta.php?cs=1');
				$ws_fe_param_tipo_documento = new WsFeParamTipoDocumento();
			}
		break;
	}
	Gral::setSes('WsFeParamTipoDocumento_ULTIMO_INSERTADO', $ws_fe_param_tipo_documento->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_ws_fe_param_tipo_documento_id = Gral::getVars(2, $prefijo.'cmb_ws_fe_param_tipo_documento_id', 0);
	if($cmb_ws_fe_param_tipo_documento_id != 0){
		$ws_fe_param_tipo_documento = WsFeParamTipoDocumento::getOxId($cmb_ws_fe_param_tipo_documento_id);
	}else{
	
	$ws_fe_param_tipo_documento->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$ws_fe_param_tipo_documento->setCodigo(Gral::getVars(2, "codigo", ''));
	$ws_fe_param_tipo_documento->setCodigoAfip(Gral::getVars(2, "codigo_afip", ''));
	$ws_fe_param_tipo_documento->setFechaDesde(Gral::getVars(2, "fecha_desde", ''));
	$ws_fe_param_tipo_documento->setFechaHasta(Gral::getVars(2, "fecha_hasta", ''));
	$ws_fe_param_tipo_documento->setObservacion(Gral::getVars(2, "observacion", ''));
	$ws_fe_param_tipo_documento->setOrden(Gral::getVars(2, "orden", 0));
	$ws_fe_param_tipo_documento->setEstado(Gral::getVars(2, "estado", 0));
	$ws_fe_param_tipo_documento->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ws_fe_param_tipo_documento->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ws_fe_param_tipo_documento->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ws_fe_param_tipo_documento->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $ws_fe_param_tipo_documento->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ws_fe_param_tipo_documento/ws_fe_param_tipo_documento_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ws_fe_param_tipo_documento' width='90%'>
        
				<tr>
				  <td  id="label_ws_fe_param_tipo_documento_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_param_tipo_documento_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_param_tipo_documento_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_param_tipo_documento_txt_descripcion' value='<?php Gral::_echoTxt($ws_fe_param_tipo_documento->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_ws_fe_param_tipo_documento_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_param_tipo_documento_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_param_tipo_documento_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_param_tipo_documento_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_param_tipo_documento_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_param_tipo_documento_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_param_tipo_documento_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_param_tipo_documento_txt_codigo' value='<?php Gral::_echoTxt($ws_fe_param_tipo_documento->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_param_tipo_documento_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_param_tipo_documento_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_param_tipo_documento_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_param_tipo_documento_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_param_tipo_documento_txt_codigo_afip" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo_afip' ?>" >
				  
                                        <?php Lang::_lang('Codigo Afip', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_param_tipo_documento_txt_codigo_afip" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo_afip')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_param_tipo_documento_txt_codigo_afip' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_param_tipo_documento_txt_codigo_afip' value='<?php Gral::_echoTxt($ws_fe_param_tipo_documento->getCodigoAfip(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_param_tipo_documento_alta_codigo_afip', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_param_tipo_documento_alta_codigo_afip', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_param_tipo_documento_alta_codigo_afip', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_param_tipo_documento_alta_codigo_afip', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo_afip')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_param_tipo_documento_txt_fecha_desde" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_desde' ?>" >
				  
                                        <?php Lang::_lang('Fecha Desde', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_param_tipo_documento_txt_fecha_desde" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_desde')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_param_tipo_documento_txt_fecha_desde' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_param_tipo_documento_txt_fecha_desde' value='<?php Gral::_echoTxt($ws_fe_param_tipo_documento->getFechaDesde(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_param_tipo_documento_alta_fecha_desde', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_param_tipo_documento_alta_fecha_desde', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_param_tipo_documento_alta_fecha_desde', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_param_tipo_documento_alta_fecha_desde', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_desde')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_param_tipo_documento_txt_fecha_hasta" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_hasta' ?>" >
				  
                                        <?php Lang::_lang('Fecha Hasta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_param_tipo_documento_txt_fecha_hasta" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_hasta')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_param_tipo_documento_txt_fecha_hasta' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_param_tipo_documento_txt_fecha_hasta' value='<?php Gral::_echoTxt($ws_fe_param_tipo_documento->getFechaHasta(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_param_tipo_documento_alta_fecha_hasta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_param_tipo_documento_alta_fecha_hasta', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_param_tipo_documento_alta_fecha_hasta', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_param_tipo_documento_alta_fecha_hasta', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_hasta')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_param_tipo_documento_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_param_tipo_documento_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='ws_fe_param_tipo_documento_txa_observacion' rows='10' cols='50' id='ws_fe_param_tipo_documento_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($ws_fe_param_tipo_documento->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_ws_fe_param_tipo_documento_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_param_tipo_documento_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_param_tipo_documento_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_param_tipo_documento_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ws_fe_param_tipo_documento->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ws_fe_param_tipo_documento_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ws_fe_param_tipo_documento'/>
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

