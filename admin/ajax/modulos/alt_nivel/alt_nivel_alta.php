<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('ALT_NIVEL_ALTA')){
    echo "No tiene asignada la credencial ALT_NIVEL_ALTA. ";
    return false;
}

$db_nombre_objeto = 'alt_nivel';
$db_nombre_pagina = 'alt_nivel_alta';

$alt_nivel = new AltNivel();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$alt_nivel = new AltNivel();
	if(trim($hdn_id) != '') $alt_nivel->setId($hdn_id, false);
	$alt_nivel->setDescripcion(Gral::getVars(1, "alt_nivel_txt_descripcion"));
	$alt_nivel->setCodigo(Gral::getVars(1, "alt_nivel_txt_codigo"));
	$alt_nivel->setObservacion(Gral::getVars(1, "alt_nivel_txa_observacion"));
	$alt_nivel->setOrden(Gral::getVars(1, "alt_nivel_txt_orden", 0));
	$alt_nivel->setEstado(Gral::getVars(1, "alt_nivel__estado", 0));
	$alt_nivel->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "alt_nivel_txt_creado")));
	$alt_nivel->setCreadoPor(Gral::getVars(1, "alt_nivel__creado_por", 0));
	$alt_nivel->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "alt_nivel_txt_modificado")));
	$alt_nivel->setModificadoPor(Gral::getVars(1, "alt_nivel__modificado_por", 0));

	$alt_nivel_estado = new AltNivel();
	if(trim($hdn_id) != ''){
		$alt_nivel_estado->setId($hdn_id);
		$alt_nivel->setEstado($alt_nivel_estado->getEstado());
				
	}else{
		$alt_nivel->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $alt_nivel->control();
			if(!$error->getExisteError()){
				$alt_nivel->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: alt_nivel_alta.php?cs=1&id='.$alt_nivel->getId());
			}
		break;
		case 'guardarnvo':
			$error = $alt_nivel->control();
			if(!$error->getExisteError()){
				$alt_nivel->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: alt_nivel_alta.php?cs=1');
				$alt_nivel = new AltNivel();
			}
		break;
	}
	Gral::setSes('AltNivel_ULTIMO_INSERTADO', $alt_nivel->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_alt_nivel_id = Gral::getVars(2, $prefijo.'cmb_alt_nivel_id', 0);
	if($cmb_alt_nivel_id != 0){
		$alt_nivel = AltNivel::getOxId($cmb_alt_nivel_id);
	}else{
	
	$alt_nivel->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$alt_nivel->setCodigo(Gral::getVars(2, "codigo", ''));
	$alt_nivel->setObservacion(Gral::getVars(2, "observacion", ''));
	$alt_nivel->setOrden(Gral::getVars(2, "orden", 0));
	$alt_nivel->setEstado(Gral::getVars(2, "estado", 0));
	$alt_nivel->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$alt_nivel->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$alt_nivel->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$alt_nivel->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $alt_nivel->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/alt_nivel/alt_nivel_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_alt_nivel' width='90%'>
        
				<tr>
				  <td  id="label_alt_nivel_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_alt_nivel_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='alt_nivel_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='alt_nivel_txt_descripcion' value='<?php Gral::_echoTxt($alt_nivel->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_alt_nivel_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_alt_nivel_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_alt_nivel_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_alt_nivel_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_alt_nivel_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_alt_nivel_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='alt_nivel_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='alt_nivel_txt_codigo' value='<?php Gral::_echoTxt($alt_nivel->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_alt_nivel_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_alt_nivel_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_alt_nivel_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_alt_nivel_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_alt_nivel_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_alt_nivel_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='alt_nivel_txa_observacion' rows='10' cols='50' id='alt_nivel_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($alt_nivel->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_alt_nivel_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_alt_nivel_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_alt_nivel_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_alt_nivel_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($alt_nivel->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_alt_nivel_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='alt_nivel'/>
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

