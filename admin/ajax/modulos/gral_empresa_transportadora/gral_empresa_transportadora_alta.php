<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('GRAL_EMPRESA_TRANSPORTADORA_ALTA')){
    echo "No tiene asignada la credencial GRAL_EMPRESA_TRANSPORTADORA_ALTA. ";
    return false;
}

$db_nombre_objeto = 'gral_empresa_transportadora';
$db_nombre_pagina = 'gral_empresa_transportadora_alta';

$gral_empresa_transportadora = new GralEmpresaTransportadora();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$gral_empresa_transportadora = new GralEmpresaTransportadora();
	if(trim($hdn_id) != '') $gral_empresa_transportadora->setId($hdn_id, false);
	$gral_empresa_transportadora->setDescripcion(Gral::getVars(1, "gral_empresa_transportadora_txt_descripcion"));
	$gral_empresa_transportadora->setCodigo(Gral::getVars(1, "gral_empresa_transportadora_txt_codigo"));
	$gral_empresa_transportadora->setDocumento(Gral::getVars(1, "gral_empresa_transportadora_txt_documento"));
	$gral_empresa_transportadora->setDomicilio(Gral::getVars(1, "gral_empresa_transportadora_txt_domicilio"));
	$gral_empresa_transportadora->setPublica(Gral::getVars(1, "gral_empresa_transportadora_cmb_publica", 0));
	$gral_empresa_transportadora->setObservacion(Gral::getVars(1, "gral_empresa_transportadora_txa_observacion"));
	$gral_empresa_transportadora->setOrden(Gral::getVars(1, "gral_empresa_transportadora_txt_orden", 0));
	$gral_empresa_transportadora->setEstado(Gral::getVars(1, "gral_empresa_transportadora_cmb_estado", 0));
	$gral_empresa_transportadora->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_empresa_transportadora_txt_creado")));
	$gral_empresa_transportadora->setCreadoPor(Gral::getVars(1, "gral_empresa_transportadora__creado_por", 0));
	$gral_empresa_transportadora->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_empresa_transportadora_txt_modificado")));
	$gral_empresa_transportadora->setModificadoPor(Gral::getVars(1, "gral_empresa_transportadora__modificado_por", 0));

	$gral_empresa_transportadora_estado = new GralEmpresaTransportadora();
	if(trim($hdn_id) != ''){
		$gral_empresa_transportadora_estado->setId($hdn_id);
		$gral_empresa_transportadora->setEstado($gral_empresa_transportadora_estado->getEstado());
				
	}else{
		$gral_empresa_transportadora->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $gral_empresa_transportadora->control();
			if(!$error->getExisteError()){
				$gral_empresa_transportadora->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: gral_empresa_transportadora_alta.php?cs=1&id='.$gral_empresa_transportadora->getId());
			}
		break;
		case 'guardarnvo':
			$error = $gral_empresa_transportadora->control();
			if(!$error->getExisteError()){
				$gral_empresa_transportadora->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: gral_empresa_transportadora_alta.php?cs=1');
				$gral_empresa_transportadora = new GralEmpresaTransportadora();
			}
		break;
	}
	Gral::setSes('GralEmpresaTransportadora_ULTIMO_INSERTADO', $gral_empresa_transportadora->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_gral_empresa_transportadora_id = Gral::getVars(2, $prefijo.'cmb_gral_empresa_transportadora_id', 0);
	if($cmb_gral_empresa_transportadora_id != 0){
		$gral_empresa_transportadora = GralEmpresaTransportadora::getOxId($cmb_gral_empresa_transportadora_id);
	}else{
	
	$gral_empresa_transportadora->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$gral_empresa_transportadora->setCodigo(Gral::getVars(2, "codigo", ''));
	$gral_empresa_transportadora->setDocumento(Gral::getVars(2, "documento", ''));
	$gral_empresa_transportadora->setDomicilio(Gral::getVars(2, "domicilio", ''));
	$gral_empresa_transportadora->setPublica(Gral::getVars(2, "publica", 0));
	$gral_empresa_transportadora->setObservacion(Gral::getVars(2, "observacion", ''));
	$gral_empresa_transportadora->setOrden(Gral::getVars(2, "orden", 0));
	$gral_empresa_transportadora->setEstado(Gral::getVars(2, "estado", 0));
	$gral_empresa_transportadora->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$gral_empresa_transportadora->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$gral_empresa_transportadora->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$gral_empresa_transportadora->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $gral_empresa_transportadora->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/gral_empresa_transportadora/gral_empresa_transportadora_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_gral_empresa_transportadora' width='90%'>
        
				<tr>
				  <td  id="label_gral_empresa_transportadora_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_empresa_transportadora_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_empresa_transportadora_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_empresa_transportadora_txt_descripcion' value='<?php Gral::_echoTxt($gral_empresa_transportadora->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_gral_empresa_transportadora_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_empresa_transportadora_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_empresa_transportadora_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_empresa_transportadora_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_empresa_transportadora_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_empresa_transportadora_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_empresa_transportadora_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_empresa_transportadora_txt_codigo' value='<?php Gral::_echoTxt($gral_empresa_transportadora->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gral_empresa_transportadora_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_empresa_transportadora_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_empresa_transportadora_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_empresa_transportadora_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_empresa_transportadora_txt_documento" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_documento' ?>" >
				  
                                        <?php Lang::_lang('Documento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_empresa_transportadora_txt_documento" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('documento')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_empresa_transportadora_txt_documento' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_empresa_transportadora_txt_documento' value='<?php Gral::_echoTxt($gral_empresa_transportadora->getDocumento(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gral_empresa_transportadora_alta_documento', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_empresa_transportadora_alta_documento', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_empresa_transportadora_alta_documento', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_empresa_transportadora_alta_documento', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('documento')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_empresa_transportadora_txt_domicilio" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_domicilio' ?>" >
				  
                                        <?php Lang::_lang('Domicilio', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_empresa_transportadora_txt_domicilio" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('domicilio')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_empresa_transportadora_txt_domicilio' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_empresa_transportadora_txt_domicilio' value='<?php Gral::_echoTxt($gral_empresa_transportadora->getDomicilio(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gral_empresa_transportadora_alta_domicilio', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_empresa_transportadora_alta_domicilio', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_empresa_transportadora_alta_domicilio', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_empresa_transportadora_alta_domicilio', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('domicilio')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_empresa_transportadora_cmb_publica" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_publica' ?>" >
				  
                                        <?php Lang::_lang('Publica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_empresa_transportadora_cmb_publica" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('publica')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gral_empresa_transportadora_cmb_publica', GralSiNo::getGralSiNosCmb(), $gral_empresa_transportadora->getPublica(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_gral_empresa_transportadora_alta_publica', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_empresa_transportadora_alta_publica', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_empresa_transportadora_alta_publica', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_empresa_transportadora_alta_publica', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('publica')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_empresa_transportadora_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_empresa_transportadora_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='gral_empresa_transportadora_txa_observacion' rows='10' cols='50' id='gral_empresa_transportadora_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($gral_empresa_transportadora->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_gral_empresa_transportadora_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_empresa_transportadora_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_empresa_transportadora_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_empresa_transportadora_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($gral_empresa_transportadora->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_gral_empresa_transportadora_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='gral_empresa_transportadora'/>
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

