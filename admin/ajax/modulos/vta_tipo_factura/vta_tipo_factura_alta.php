<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('VTA_TIPO_FACTURA_ALTA')){
    echo "No tiene asignada la credencial VTA_TIPO_FACTURA_ALTA. ";
    return false;
}

$db_nombre_objeto = 'vta_tipo_factura';
$db_nombre_pagina = 'vta_tipo_factura_alta';

$vta_tipo_factura = new VtaTipoFactura();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$vta_tipo_factura = new VtaTipoFactura();
	if(trim($hdn_id) != '') $vta_tipo_factura->setId($hdn_id, false);
	$vta_tipo_factura->setDescripcion(Gral::getVars(1, "vta_tipo_factura_txt_descripcion"));
	$vta_tipo_factura->setCodigo(Gral::getVars(1, "vta_tipo_factura_txt_codigo"));
	$vta_tipo_factura->setCodigoMin(Gral::getVars(1, "vta_tipo_factura_txt_codigo_min"));
	$vta_tipo_factura->setInforma(Gral::getVars(1, "vta_tipo_factura_cmb_informa", 0));
	$vta_tipo_factura->setObservacion(Gral::getVars(1, "vta_tipo_factura_txa_observacion"));
	$vta_tipo_factura->setOrden(Gral::getVars(1, "vta_tipo_factura_txt_orden", 0));
	$vta_tipo_factura->setEstado(Gral::getVars(1, "vta_tipo_factura__estado", 0));
	$vta_tipo_factura->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_tipo_factura_txt_creado")));
	$vta_tipo_factura->setCreadoPor(Gral::getVars(1, "vta_tipo_factura__creado_por", 0));
	$vta_tipo_factura->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_tipo_factura_txt_modificado")));
	$vta_tipo_factura->setModificadoPor(Gral::getVars(1, "vta_tipo_factura__modificado_por", 0));

	$vta_tipo_factura_estado = new VtaTipoFactura();
	if(trim($hdn_id) != ''){
		$vta_tipo_factura_estado->setId($hdn_id);
		$vta_tipo_factura->setEstado($vta_tipo_factura_estado->getEstado());
				
	}else{
		$vta_tipo_factura->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $vta_tipo_factura->control();
			if(!$error->getExisteError()){
				$vta_tipo_factura->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: vta_tipo_factura_alta.php?cs=1&id='.$vta_tipo_factura->getId());
			}
		break;
		case 'guardarnvo':
			$error = $vta_tipo_factura->control();
			if(!$error->getExisteError()){
				$vta_tipo_factura->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: vta_tipo_factura_alta.php?cs=1');
				$vta_tipo_factura = new VtaTipoFactura();
			}
		break;
	}
	Gral::setSes('VtaTipoFactura_ULTIMO_INSERTADO', $vta_tipo_factura->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_vta_tipo_factura_id = Gral::getVars(2, $prefijo.'cmb_vta_tipo_factura_id', 0);
	if($cmb_vta_tipo_factura_id != 0){
		$vta_tipo_factura = VtaTipoFactura::getOxId($cmb_vta_tipo_factura_id);
	}else{
	
	$vta_tipo_factura->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$vta_tipo_factura->setCodigo(Gral::getVars(2, "codigo", ''));
	$vta_tipo_factura->setCodigoMin(Gral::getVars(2, "codigo_min", ''));
	$vta_tipo_factura->setInforma(Gral::getVars(2, "informa", 0));
	$vta_tipo_factura->setObservacion(Gral::getVars(2, "observacion", ''));
	$vta_tipo_factura->setOrden(Gral::getVars(2, "orden", 0));
	$vta_tipo_factura->setEstado(Gral::getVars(2, "estado", 0));
	$vta_tipo_factura->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$vta_tipo_factura->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$vta_tipo_factura->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$vta_tipo_factura->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $vta_tipo_factura->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/vta_tipo_factura/vta_tipo_factura_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_vta_tipo_factura' width='90%'>
        
				<tr>
				  <td  id="label_vta_tipo_factura_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_tipo_factura_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_tipo_factura_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_tipo_factura_txt_descripcion' value='<?php Gral::_echoTxt($vta_tipo_factura->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_vta_tipo_factura_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_tipo_factura_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_tipo_factura_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_tipo_factura_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_tipo_factura_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_tipo_factura_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_tipo_factura_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_tipo_factura_txt_codigo' value='<?php Gral::_echoTxt($vta_tipo_factura->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_tipo_factura_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_tipo_factura_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_tipo_factura_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_tipo_factura_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_tipo_factura_txt_codigo_min" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo_min' ?>" >
				  
                                        <?php Lang::_lang('Codigo Min', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_tipo_factura_txt_codigo_min" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo_min')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_tipo_factura_txt_codigo_min' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_tipo_factura_txt_codigo_min' value='<?php Gral::_echoTxt($vta_tipo_factura->getCodigoMin(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_tipo_factura_alta_codigo_min', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_tipo_factura_alta_codigo_min', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_tipo_factura_alta_codigo_min', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_tipo_factura_alta_codigo_min', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo_min')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_tipo_factura_cmb_informa" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_informa' ?>" >
				  
                                        <?php Lang::_lang('Informa', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_tipo_factura_cmb_informa" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('informa')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_tipo_factura_cmb_informa', GralSiNo::getGralSiNosCmb(), $vta_tipo_factura->getInforma(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_vta_tipo_factura_alta_informa', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_tipo_factura_alta_informa', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_tipo_factura_alta_informa', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_tipo_factura_alta_informa', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('informa')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_tipo_factura_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_tipo_factura_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='vta_tipo_factura_txa_observacion' rows='10' cols='50' id='vta_tipo_factura_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_tipo_factura->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_vta_tipo_factura_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_tipo_factura_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_tipo_factura_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_tipo_factura_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_tipo_factura->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_vta_tipo_factura_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='vta_tipo_factura'/>
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

