<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('SLD_TIPO_IMAGEN_ALTA')){
    echo "No tiene asignada la credencial SLD_TIPO_IMAGEN_ALTA. ";
    return false;
}

$db_nombre_objeto = 'sld_tipo_imagen';
$db_nombre_pagina = 'sld_tipo_imagen_alta';

$sld_tipo_imagen = new SldTipoImagen();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$sld_tipo_imagen = new SldTipoImagen();
	if(trim($hdn_id) != '') $sld_tipo_imagen->setId($hdn_id, false);
	$sld_tipo_imagen->setDescripcion(Gral::getVars(1, "sld_tipo_imagen_txt_descripcion"));
	$sld_tipo_imagen->setCodigo(Gral::getVars(1, "sld_tipo_imagen_txt_codigo"));
	$sld_tipo_imagen->setObservacion(Gral::getVars(1, "sld_tipo_imagen_txa_observacion"));
	$sld_tipo_imagen->setOrden(Gral::getVars(1, "sld_tipo_imagen_txt_orden", 0));
	$sld_tipo_imagen->setEstado(Gral::getVars(1, "sld_tipo_imagen__estado", 0));
	$sld_tipo_imagen->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "sld_tipo_imagen_txt_creado")));
	$sld_tipo_imagen->setCreadoPor(Gral::getVars(1, "sld_tipo_imagen__creado_por", null));
	$sld_tipo_imagen->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "sld_tipo_imagen_txt_modificado")));
	$sld_tipo_imagen->setModificadoPor(Gral::getVars(1, "sld_tipo_imagen__modificado_por", null));

	$sld_tipo_imagen_estado = new SldTipoImagen();
	if(trim($hdn_id) != ''){
		$sld_tipo_imagen_estado->setId($hdn_id);
		$sld_tipo_imagen->setEstado($sld_tipo_imagen_estado->getEstado());
				
	}else{
		$sld_tipo_imagen->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $sld_tipo_imagen->control();
			if(!$error->getExisteError()){
				$sld_tipo_imagen->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: sld_tipo_imagen_alta.php?cs=1&id='.$sld_tipo_imagen->getId());
			}
		break;
		case 'guardarnvo':
			$error = $sld_tipo_imagen->control();
			if(!$error->getExisteError()){
				$sld_tipo_imagen->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: sld_tipo_imagen_alta.php?cs=1');
				$sld_tipo_imagen = new SldTipoImagen();
			}
		break;
	}
	Gral::setSes('SldTipoImagen_ULTIMO_INSERTADO', $sld_tipo_imagen->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_sld_tipo_imagen_id = Gral::getVars(2, $prefijo.'cmb_sld_tipo_imagen_id', 0);
	if($cmb_sld_tipo_imagen_id != 0){
		$sld_tipo_imagen = SldTipoImagen::getOxId($cmb_sld_tipo_imagen_id);
	}else{
	
	$sld_tipo_imagen->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$sld_tipo_imagen->setCodigo(Gral::getVars(2, "codigo", ''));
	$sld_tipo_imagen->setObservacion(Gral::getVars(2, "observacion", ''));
	$sld_tipo_imagen->setOrden(Gral::getVars(2, "orden", 0));
	$sld_tipo_imagen->setEstado(Gral::getVars(2, "estado", 0));
	$sld_tipo_imagen->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$sld_tipo_imagen->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$sld_tipo_imagen->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$sld_tipo_imagen->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $sld_tipo_imagen->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/sld_tipo_imagen/sld_tipo_imagen_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_sld_tipo_imagen' width='90%'>
        
				<tr>
				  <td  id="label_sld_tipo_imagen_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_sld_tipo_imagen_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='sld_tipo_imagen_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='sld_tipo_imagen_txt_descripcion' value='<?php Gral::_echoTxt($sld_tipo_imagen->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_sld_tipo_imagen_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_sld_tipo_imagen_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_sld_tipo_imagen_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_sld_tipo_imagen_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_sld_tipo_imagen_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_sld_tipo_imagen_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='sld_tipo_imagen_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='sld_tipo_imagen_txt_codigo' value='<?php Gral::_echoTxt($sld_tipo_imagen->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_sld_tipo_imagen_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_sld_tipo_imagen_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_sld_tipo_imagen_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_sld_tipo_imagen_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_sld_tipo_imagen_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_sld_tipo_imagen_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='sld_tipo_imagen_txa_observacion' rows='10' cols='50' id='sld_tipo_imagen_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($sld_tipo_imagen->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_sld_tipo_imagen_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_sld_tipo_imagen_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_sld_tipo_imagen_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_sld_tipo_imagen_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($sld_tipo_imagen->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_sld_tipo_imagen_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='sld_tipo_imagen'/>
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

