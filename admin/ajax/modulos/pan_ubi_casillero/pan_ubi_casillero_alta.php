<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PAN_UBI_CASILLERO_ALTA')){
    echo "No tiene asignada la credencial PAN_UBI_CASILLERO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pan_ubi_casillero';
$db_nombre_pagina = 'pan_ubi_casillero_alta';

$pan_ubi_casillero = new PanUbiCasillero();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pan_ubi_casillero = new PanUbiCasillero();
	if(trim($hdn_id) != '') $pan_ubi_casillero->setId($hdn_id, false);
	$pan_ubi_casillero->setDescripcion(Gral::getVars(1, "pan_ubi_casillero_txt_descripcion"));
	$pan_ubi_casillero->setCodigo(Gral::getVars(1, "pan_ubi_casillero_txt_codigo"));
	$pan_ubi_casillero->setObservacion(Gral::getVars(1, "pan_ubi_casillero_txa_observacion"));
	$pan_ubi_casillero->setOrden(Gral::getVars(1, "pan_ubi_casillero_txt_orden", 0));
	$pan_ubi_casillero->setEstado(Gral::getVars(1, "pan_ubi_casillero__estado", 0));
	$pan_ubi_casillero->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pan_ubi_casillero_txt_creado")));
	$pan_ubi_casillero->setCreadoPor(Gral::getVars(1, "pan_ubi_casillero__creado_por", null));
	$pan_ubi_casillero->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pan_ubi_casillero_txt_modificado")));
	$pan_ubi_casillero->setModificadoPor(Gral::getVars(1, "pan_ubi_casillero__modificado_por", null));

	$pan_ubi_casillero_estado = new PanUbiCasillero();
	if(trim($hdn_id) != ''){
		$pan_ubi_casillero_estado->setId($hdn_id);
		$pan_ubi_casillero->setEstado($pan_ubi_casillero_estado->getEstado());
				
	}else{
		$pan_ubi_casillero->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $pan_ubi_casillero->control();
			if(!$error->getExisteError()){
				$pan_ubi_casillero->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pan_ubi_casillero_alta.php?cs=1&id='.$pan_ubi_casillero->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pan_ubi_casillero->control();
			if(!$error->getExisteError()){
				$pan_ubi_casillero->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pan_ubi_casillero_alta.php?cs=1');
				$pan_ubi_casillero = new PanUbiCasillero();
			}
		break;
	}
	Gral::setSes('PanUbiCasillero_ULTIMO_INSERTADO', $pan_ubi_casillero->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pan_ubi_casillero_id = Gral::getVars(2, $prefijo.'cmb_pan_ubi_casillero_id', 0);
	if($cmb_pan_ubi_casillero_id != 0){
		$pan_ubi_casillero = PanUbiCasillero::getOxId($cmb_pan_ubi_casillero_id);
	}else{
	
	$pan_ubi_casillero->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pan_ubi_casillero->setCodigo(Gral::getVars(2, "codigo", ''));
	$pan_ubi_casillero->setObservacion(Gral::getVars(2, "observacion", ''));
	$pan_ubi_casillero->setOrden(Gral::getVars(2, "orden", 0));
	$pan_ubi_casillero->setEstado(Gral::getVars(2, "estado", 0));
	$pan_ubi_casillero->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pan_ubi_casillero->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pan_ubi_casillero->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pan_ubi_casillero->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pan_ubi_casillero->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pan_ubi_casillero/pan_ubi_casillero_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pan_ubi_casillero' width='90%'>
        
				<tr>
				  <td  id="label_pan_ubi_casillero_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pan_ubi_casillero_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pan_ubi_casillero_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pan_ubi_casillero_txt_descripcion' value='<?php Gral::_echoTxt($pan_ubi_casillero->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pan_ubi_casillero_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pan_ubi_casillero_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pan_ubi_casillero_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pan_ubi_casillero_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pan_ubi_casillero_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pan_ubi_casillero_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pan_ubi_casillero_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pan_ubi_casillero_txt_codigo' value='<?php Gral::_echoTxt($pan_ubi_casillero->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pan_ubi_casillero_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pan_ubi_casillero_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pan_ubi_casillero_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pan_ubi_casillero_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pan_ubi_casillero_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pan_ubi_casillero_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pan_ubi_casillero_txa_observacion' rows='10' cols='50' id='pan_ubi_casillero_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pan_ubi_casillero->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pan_ubi_casillero_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pan_ubi_casillero_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pan_ubi_casillero_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pan_ubi_casillero_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pan_ubi_casillero->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pan_ubi_casillero_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pan_ubi_casillero'/>
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

