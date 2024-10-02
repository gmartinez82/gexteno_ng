<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('GRAL_MONEDA_ALTA')){
    echo "No tiene asignada la credencial GRAL_MONEDA_ALTA. ";
    return false;
}

$db_nombre_objeto = 'gral_moneda';
$db_nombre_pagina = 'gral_moneda_alta';

$gral_moneda = new GralMoneda();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$gral_moneda = new GralMoneda();
	if(trim($hdn_id) != '') $gral_moneda->setId($hdn_id, false);
	$gral_moneda->setDescripcion(Gral::getVars(1, "gral_moneda_txt_descripcion"));
	$gral_moneda->setCodigo(Gral::getVars(1, "gral_moneda_txt_codigo"));
	$gral_moneda->setCodigoIso(Gral::getVars(1, "gral_moneda_txt_codigo_iso"));
	$gral_moneda->setNumeroIso(Gral::getVars(1, "gral_moneda_txt_numero_iso"));
	$gral_moneda->setSimbolo(Gral::getVars(1, "gral_moneda_txt_simbolo"));
	$gral_moneda->setMonedaBase(Gral::getVars(1, "gral_moneda_cmb_moneda_base", 0));
	$gral_moneda->setPorDefault(Gral::getVars(1, "gral_moneda_cmb_por_default", 0));
	$gral_moneda->setObservacion(Gral::getVars(1, "gral_moneda_txa_observacion"));
	$gral_moneda->setOrden(Gral::getVars(1, "gral_moneda_txt_orden", 0));
	$gral_moneda->setEstado(Gral::getVars(1, "gral_moneda__estado", 0));
	$gral_moneda->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_moneda_txt_creado")));
	$gral_moneda->setCreadoPor(Gral::getVars(1, "gral_moneda__creado_por", 0));
	$gral_moneda->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_moneda_txt_modificado")));
	$gral_moneda->setModificadoPor(Gral::getVars(1, "gral_moneda__modificado_por", 0));

	$gral_moneda_estado = new GralMoneda();
	if(trim($hdn_id) != ''){
		$gral_moneda_estado->setId($hdn_id);
		$gral_moneda->setEstado($gral_moneda_estado->getEstado());
				
	}else{
		$gral_moneda->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $gral_moneda->control();
			if(!$error->getExisteError()){
				$gral_moneda->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: gral_moneda_alta.php?cs=1&id='.$gral_moneda->getId());
			}
		break;
		case 'guardarnvo':
			$error = $gral_moneda->control();
			if(!$error->getExisteError()){
				$gral_moneda->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: gral_moneda_alta.php?cs=1');
				$gral_moneda = new GralMoneda();
			}
		break;
	}
	Gral::setSes('GralMoneda_ULTIMO_INSERTADO', $gral_moneda->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_gral_moneda_id = Gral::getVars(2, $prefijo.'cmb_gral_moneda_id', 0);
	if($cmb_gral_moneda_id != 0){
		$gral_moneda = GralMoneda::getOxId($cmb_gral_moneda_id);
	}else{
	
	$gral_moneda->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$gral_moneda->setCodigo(Gral::getVars(2, "codigo", ''));
	$gral_moneda->setCodigoIso(Gral::getVars(2, "codigo_iso", ''));
	$gral_moneda->setNumeroIso(Gral::getVars(2, "numero_iso", ''));
	$gral_moneda->setSimbolo(Gral::getVars(2, "simbolo", ''));
	$gral_moneda->setMonedaBase(Gral::getVars(2, "moneda_base", 0));
	$gral_moneda->setPorDefault(Gral::getVars(2, "por_default", 0));
	$gral_moneda->setObservacion(Gral::getVars(2, "observacion", ''));
	$gral_moneda->setOrden(Gral::getVars(2, "orden", 0));
	$gral_moneda->setEstado(Gral::getVars(2, "estado", 0));
	$gral_moneda->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$gral_moneda->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$gral_moneda->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$gral_moneda->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $gral_moneda->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/gral_moneda/gral_moneda_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_gral_moneda' width='90%'>
        
				<tr>
				  <td  id="label_gral_moneda_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_moneda_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_moneda_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_moneda_txt_descripcion' value='<?php Gral::_echoTxt($gral_moneda->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_gral_moneda_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_moneda_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_moneda_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_moneda_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_moneda_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_moneda_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_moneda_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_moneda_txt_codigo' value='<?php Gral::_echoTxt($gral_moneda->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gral_moneda_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_moneda_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_moneda_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_moneda_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_moneda_txt_codigo_iso" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo_iso' ?>" >
				  
                                        <?php Lang::_lang('Codigo ISO', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_moneda_txt_codigo_iso" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo_iso')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_moneda_txt_codigo_iso' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_moneda_txt_codigo_iso' value='<?php Gral::_echoTxt($gral_moneda->getCodigoIso(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gral_moneda_alta_codigo_iso', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_moneda_alta_codigo_iso', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_moneda_alta_codigo_iso', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_moneda_alta_codigo_iso', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo_iso')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_moneda_txt_numero_iso" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_numero_iso' ?>" >
				  
                                        <?php Lang::_lang('Numero ISO', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_moneda_txt_numero_iso" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('numero_iso')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_moneda_txt_numero_iso' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_moneda_txt_numero_iso' value='<?php Gral::_echoTxt($gral_moneda->getNumeroIso(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gral_moneda_alta_numero_iso', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_moneda_alta_numero_iso', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_moneda_alta_numero_iso', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_moneda_alta_numero_iso', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('numero_iso')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_moneda_txt_simbolo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_simbolo' ?>" >
				  
                                        <?php Lang::_lang('Simbolo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_moneda_txt_simbolo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('simbolo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_moneda_txt_simbolo' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_moneda_txt_simbolo' value='<?php Gral::_echoTxt($gral_moneda->getSimbolo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gral_moneda_alta_simbolo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_moneda_alta_simbolo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_moneda_alta_simbolo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_moneda_alta_simbolo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('simbolo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_moneda_cmb_moneda_base" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_moneda_base' ?>" >
				  
                                        <?php Lang::_lang('Moneda Base', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_moneda_cmb_moneda_base" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('moneda_base')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gral_moneda_cmb_moneda_base', GralSiNo::getGralSiNosCmb(), $gral_moneda->getMonedaBase(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_gral_moneda_alta_moneda_base', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_moneda_alta_moneda_base', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_moneda_alta_moneda_base', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_moneda_alta_moneda_base', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('moneda_base')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_moneda_cmb_por_default" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_por_default' ?>" >
				  
                                        <?php Lang::_lang('Por Default', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_moneda_cmb_por_default" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('por_default')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gral_moneda_cmb_por_default', GralSiNo::getGralSiNosCmb(), $gral_moneda->getPorDefault(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_gral_moneda_alta_por_default', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_moneda_alta_por_default', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_moneda_alta_por_default', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_moneda_alta_por_default', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('por_default')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_moneda_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_moneda_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='gral_moneda_txa_observacion' rows='10' cols='50' id='gral_moneda_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($gral_moneda->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_gral_moneda_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_moneda_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_moneda_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_moneda_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_moneda_txt_orden" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_orden' ?>" >
				  
                                        <?php Lang::_lang('Orden', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_moneda_txt_orden" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('orden')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_moneda_txt_orden' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='gral_moneda_txt_orden' value='<?php Gral::_echoTxt($gral_moneda->getOrden(), true) ?>' size='5' />            
                    <?php if(Lang::_lang('help_gral_moneda_alta_orden', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_moneda_alta_orden', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_moneda_alta_orden', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_moneda_alta_orden', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('orden')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($gral_moneda->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_gral_moneda_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='gral_moneda'/>
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

