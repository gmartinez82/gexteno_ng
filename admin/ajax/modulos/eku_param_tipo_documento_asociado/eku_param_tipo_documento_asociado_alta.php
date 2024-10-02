<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_DOCUMENTO_ASOCIADO_ALTA')){
    echo "No tiene asignada la credencial EKU_PARAM_TIPO_DOCUMENTO_ASOCIADO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'eku_param_tipo_documento_asociado';
$db_nombre_pagina = 'eku_param_tipo_documento_asociado_alta';

$eku_param_tipo_documento_asociado = new EkuParamTipoDocumentoAsociado();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$eku_param_tipo_documento_asociado = new EkuParamTipoDocumentoAsociado();
	if(trim($hdn_id) != '') $eku_param_tipo_documento_asociado->setId($hdn_id, false);
	$eku_param_tipo_documento_asociado->setDescripcion(Gral::getVars(1, "eku_param_tipo_documento_asociado_txt_descripcion"));
	$eku_param_tipo_documento_asociado->setCodigo(Gral::getVars(1, "eku_param_tipo_documento_asociado_txt_codigo"));
	$eku_param_tipo_documento_asociado->setCodigoEku(Gral::getVars(1, "eku_param_tipo_documento_asociado_txt_codigo_eku"));
	$eku_param_tipo_documento_asociado->setObservacion(Gral::getVars(1, "eku_param_tipo_documento_asociado_txa_observacion"));
	$eku_param_tipo_documento_asociado->setOrden(Gral::getVars(1, "eku_param_tipo_documento_asociado_txt_orden", 0));
	$eku_param_tipo_documento_asociado->setEstado(Gral::getVars(1, "eku_param_tipo_documento_asociado_cmb_estado", 0));
	$eku_param_tipo_documento_asociado->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_param_tipo_documento_asociado_txt_creado")));
	$eku_param_tipo_documento_asociado->setCreadoPor(Gral::getVars(1, "eku_param_tipo_documento_asociado__creado_por", 0));
	$eku_param_tipo_documento_asociado->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_param_tipo_documento_asociado_txt_modificado")));
	$eku_param_tipo_documento_asociado->setModificadoPor(Gral::getVars(1, "eku_param_tipo_documento_asociado__modificado_por", 0));

	$eku_param_tipo_documento_asociado_estado = new EkuParamTipoDocumentoAsociado();
	if(trim($hdn_id) != ''){
		$eku_param_tipo_documento_asociado_estado->setId($hdn_id);
		$eku_param_tipo_documento_asociado->setEstado($eku_param_tipo_documento_asociado_estado->getEstado());
				
	}else{
		$eku_param_tipo_documento_asociado->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $eku_param_tipo_documento_asociado->control();
			if(!$error->getExisteError()){
				$eku_param_tipo_documento_asociado->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: eku_param_tipo_documento_asociado_alta.php?cs=1&id='.$eku_param_tipo_documento_asociado->getId());
			}
		break;
		case 'guardarnvo':
			$error = $eku_param_tipo_documento_asociado->control();
			if(!$error->getExisteError()){
				$eku_param_tipo_documento_asociado->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: eku_param_tipo_documento_asociado_alta.php?cs=1');
				$eku_param_tipo_documento_asociado = new EkuParamTipoDocumentoAsociado();
			}
		break;
	}
	Gral::setSes('EkuParamTipoDocumentoAsociado_ULTIMO_INSERTADO', $eku_param_tipo_documento_asociado->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_eku_param_tipo_documento_asociado_id = Gral::getVars(2, $prefijo.'cmb_eku_param_tipo_documento_asociado_id', 0);
	if($cmb_eku_param_tipo_documento_asociado_id != 0){
		$eku_param_tipo_documento_asociado = EkuParamTipoDocumentoAsociado::getOxId($cmb_eku_param_tipo_documento_asociado_id);
	}else{
	
	$eku_param_tipo_documento_asociado->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$eku_param_tipo_documento_asociado->setCodigo(Gral::getVars(2, "codigo", ''));
	$eku_param_tipo_documento_asociado->setCodigoEku(Gral::getVars(2, "codigo_eku", ''));
	$eku_param_tipo_documento_asociado->setObservacion(Gral::getVars(2, "observacion", ''));
	$eku_param_tipo_documento_asociado->setOrden(Gral::getVars(2, "orden", 0));
	$eku_param_tipo_documento_asociado->setEstado(Gral::getVars(2, "estado", 0));
	$eku_param_tipo_documento_asociado->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$eku_param_tipo_documento_asociado->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$eku_param_tipo_documento_asociado->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$eku_param_tipo_documento_asociado->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $eku_param_tipo_documento_asociado->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/eku_param_tipo_documento_asociado/eku_param_tipo_documento_asociado_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_eku_param_tipo_documento_asociado' width='90%'>
        
				<tr>
				  <td  id="label_eku_param_tipo_documento_asociado_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_param_tipo_documento_asociado_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_param_tipo_documento_asociado_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_param_tipo_documento_asociado_txt_descripcion' value='<?php Gral::_echoTxt($eku_param_tipo_documento_asociado->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_param_tipo_documento_asociado_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_param_tipo_documento_asociado_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_param_tipo_documento_asociado_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_param_tipo_documento_asociado_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_param_tipo_documento_asociado_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_param_tipo_documento_asociado_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_param_tipo_documento_asociado_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_param_tipo_documento_asociado_txt_codigo' value='<?php Gral::_echoTxt($eku_param_tipo_documento_asociado->getCodigo(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_param_tipo_documento_asociado_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_param_tipo_documento_asociado_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_param_tipo_documento_asociado_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_param_tipo_documento_asociado_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_param_tipo_documento_asociado_txt_codigo_eku" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo_eku' ?>" >
				  
                                        <?php Lang::_lang('Codigo Eku', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_param_tipo_documento_asociado_txt_codigo_eku" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo_eku')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_param_tipo_documento_asociado_txt_codigo_eku' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_param_tipo_documento_asociado_txt_codigo_eku' value='<?php Gral::_echoTxt($eku_param_tipo_documento_asociado->getCodigoEku(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_param_tipo_documento_asociado_alta_codigo_eku', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_param_tipo_documento_asociado_alta_codigo_eku', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_param_tipo_documento_asociado_alta_codigo_eku', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_param_tipo_documento_asociado_alta_codigo_eku', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo_eku')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_param_tipo_documento_asociado_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_param_tipo_documento_asociado_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='eku_param_tipo_documento_asociado_txa_observacion' rows='10' cols='50' id='eku_param_tipo_documento_asociado_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($eku_param_tipo_documento_asociado->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_eku_param_tipo_documento_asociado_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_param_tipo_documento_asociado_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_param_tipo_documento_asociado_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_param_tipo_documento_asociado_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_param_tipo_documento_asociado->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_eku_param_tipo_documento_asociado_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='eku_param_tipo_documento_asociado'/>
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

