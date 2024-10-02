<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('US_MEMO_TIPO_ALTA')){
    echo "No tiene asignada la credencial US_MEMO_TIPO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'us_memo_tipo';
$db_nombre_pagina = 'us_memo_tipo_alta';

$us_memo_tipo = new UsMemoTipo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$us_memo_tipo = new UsMemoTipo();
	if(trim($hdn_id) != '') $us_memo_tipo->setId($hdn_id, false);
	$us_memo_tipo->setDescripcion(Gral::getVars(1, "us_memo_tipo_txt_descripcion"));
	$us_memo_tipo->setCodigo(Gral::getVars(1, "us_memo_tipo_txt_codigo"));
	$us_memo_tipo->setObservacion(Gral::getVars(1, "us_memo_tipo_txa_observacion"));
	$us_memo_tipo->setOrden(Gral::getVars(1, "us_memo_tipo_txt_orden", 0));
	$us_memo_tipo->setEstado(Gral::getVars(1, "us_memo_tipo_cmb_estado", 0));
	$us_memo_tipo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "us_memo_tipo_txt_creado")));
	$us_memo_tipo->setCreadoPor(Gral::getVars(1, "us_memo_tipo__creado_por", 0));
	$us_memo_tipo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "us_memo_tipo_txt_modificado")));
	$us_memo_tipo->setModificadoPor(Gral::getVars(1, "us_memo_tipo__modificado_por", 0));

	$us_memo_tipo_estado = new UsMemoTipo();
	if(trim($hdn_id) != ''){
		$us_memo_tipo_estado->setId($hdn_id);
		$us_memo_tipo->setEstado($us_memo_tipo_estado->getEstado());
				
	}else{
		$us_memo_tipo->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $us_memo_tipo->control();
			if(!$error->getExisteError()){
				$us_memo_tipo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: us_memo_tipo_alta.php?cs=1&id='.$us_memo_tipo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $us_memo_tipo->control();
			if(!$error->getExisteError()){
				$us_memo_tipo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: us_memo_tipo_alta.php?cs=1');
				$us_memo_tipo = new UsMemoTipo();
			}
		break;
	}
	Gral::setSes('UsMemoTipo_ULTIMO_INSERTADO', $us_memo_tipo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_us_memo_tipo_id = Gral::getVars(2, $prefijo.'cmb_us_memo_tipo_id', 0);
	if($cmb_us_memo_tipo_id != 0){
		$us_memo_tipo = UsMemoTipo::getOxId($cmb_us_memo_tipo_id);
	}else{
	
	$us_memo_tipo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$us_memo_tipo->setCodigo(Gral::getVars(2, "codigo", ''));
	$us_memo_tipo->setObservacion(Gral::getVars(2, "observacion", ''));
	$us_memo_tipo->setOrden(Gral::getVars(2, "orden", 0));
	$us_memo_tipo->setEstado(Gral::getVars(2, "estado", 0));
	$us_memo_tipo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$us_memo_tipo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$us_memo_tipo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$us_memo_tipo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $us_memo_tipo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/us_memo_tipo/us_memo_tipo_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_us_memo_tipo' width='90%'>
        
				<tr>
				  <td  id="label_us_memo_tipo_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_memo_tipo_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='us_memo_tipo_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='us_memo_tipo_txt_descripcion' value='<?php Gral::_echoTxt($us_memo_tipo->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_us_memo_tipo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_memo_tipo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_memo_tipo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_memo_tipo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_memo_tipo_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_memo_tipo_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='us_memo_tipo_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='us_memo_tipo_txt_codigo' value='<?php Gral::_echoTxt($us_memo_tipo->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_us_memo_tipo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_memo_tipo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_memo_tipo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_memo_tipo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_memo_tipo_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_memo_tipo_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='us_memo_tipo_txa_observacion' rows='10' cols='50' id='us_memo_tipo_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($us_memo_tipo->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_us_memo_tipo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_memo_tipo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_memo_tipo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_memo_tipo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($us_memo_tipo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_us_memo_tipo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='us_memo_tipo'/>
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

