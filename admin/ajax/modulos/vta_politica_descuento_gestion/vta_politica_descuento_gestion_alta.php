<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_ALTA')){
    return false;
}

$db_nombre_objeto = 'vta_politica_descuento';
$db_nombre_pagina = 'vta_politica_descuento_alta';

$vta_politica_descuento = new VtaPoliticaDescuento();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$vta_politica_descuento = new VtaPoliticaDescuento();
	if(trim($hdn_id) != '') $vta_politica_descuento->setId($hdn_id, false);
	$vta_politica_descuento->setDescripcion(Gral::getVars(1, "vta_politica_descuento_txt_descripcion"));
	$vta_politica_descuento->setCodigo(Gral::getVars(1, "vta_politica_descuento_txt_codigo"));
	$vta_politica_descuento->setObservacion(Gral::getVars(1, "vta_politica_descuento_txa_observacion"));
	$vta_politica_descuento->setOrden(Gral::getVars(1, "vta_politica_descuento_txt_orden", 0));
	$vta_politica_descuento->setEstado(Gral::getVars(1, "vta_politica_descuento__estado", 0));
	$vta_politica_descuento->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_politica_descuento_txt_creado")));
	$vta_politica_descuento->setCreadoPor(Gral::getVars(1, "vta_politica_descuento__creado_por", 0));
	$vta_politica_descuento->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_politica_descuento_txt_modificado")));
	$vta_politica_descuento->setModificadoPor(Gral::getVars(1, "vta_politica_descuento__modificado_por", 0));

	$vta_politica_descuento_estado = new VtaPoliticaDescuento();
	if(trim($hdn_id) != ''){
		$vta_politica_descuento_estado->setId($hdn_id);
		$vta_politica_descuento->setEstado($vta_politica_descuento_estado->getEstado());
				
	}else{
		$vta_politica_descuento->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $vta_politica_descuento->control();
			if(!$error->getExisteError()){
				$vta_politica_descuento->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: vta_politica_descuento_alta.php?cs=1&id='.$vta_politica_descuento->getId());
			}
		break;
		case 'guardarnvo':
			$error = $vta_politica_descuento->control();
			if(!$error->getExisteError()){
				$vta_politica_descuento->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: vta_politica_descuento_alta.php?cs=1');
				$vta_politica_descuento = new VtaPoliticaDescuento();
			}
		break;
	}
	Gral::setSes('VtaPoliticaDescuento_ULTIMO_INSERTADO', $vta_politica_descuento->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_vta_politica_descuento_id = Gral::getVars(2, $prefijo.'cmb_vta_politica_descuento_id', 0);
	if($cmb_vta_politica_descuento_id != 0){
		$vta_politica_descuento = VtaPoliticaDescuento::getOxId($cmb_vta_politica_descuento_id);
	}else{
	
	$vta_politica_descuento->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$vta_politica_descuento->setCodigo(Gral::getVars(2, "codigo", ''));
	$vta_politica_descuento->setObservacion(Gral::getVars(2, "observacion", ''));
	$vta_politica_descuento->setOrden(Gral::getVars(2, "orden", 0));
	$vta_politica_descuento->setEstado(Gral::getVars(2, "estado", 0));
	$vta_politica_descuento->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$vta_politica_descuento->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$vta_politica_descuento->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$vta_politica_descuento->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $vta_politica_descuento->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/vta_politica_descuento_gestion/vta_politica_descuento_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_vta_politica_descuento' width='90%'>
        
				<tr>
				  <td  id="label_vta_politica_descuento_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_politica_descuento_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_politica_descuento_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_politica_descuento_txt_descripcion' value='<?php Gral::_echoTxt($vta_politica_descuento->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_vta_politica_descuento_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_politica_descuento_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_politica_descuento_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_politica_descuento_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_politica_descuento_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_politica_descuento_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_politica_descuento_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_politica_descuento_txt_codigo' value='<?php Gral::_echoTxt($vta_politica_descuento->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_politica_descuento_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_politica_descuento_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_politica_descuento_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_politica_descuento_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_politica_descuento_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_politica_descuento_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='vta_politica_descuento_txa_observacion' rows='10' cols='50' id='vta_politica_descuento_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_politica_descuento->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_vta_politica_descuento_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_politica_descuento_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_politica_descuento_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_politica_descuento_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_politica_descuento->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_vta_politica_descuento_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='vta_politica_descuento'/>
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

