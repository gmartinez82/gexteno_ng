<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PDI_URGENCIA_ALTA')){
    echo "No tiene asignada la credencial PDI_URGENCIA_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pdi_urgencia';
$db_nombre_pagina = 'pdi_urgencia_alta';

$pdi_urgencia = new PdiUrgencia();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pdi_urgencia = new PdiUrgencia();
	if(trim($hdn_id) != '') $pdi_urgencia->setId($hdn_id, false);
	$pdi_urgencia->setDescripcion(Gral::getVars(1, "pdi_urgencia_txt_descripcion"));
	$pdi_urgencia->setCodigo(Gral::getVars(1, "pdi_urgencia_txt_codigo"));
	$pdi_urgencia->setObservacion(Gral::getVars(1, "pdi_urgencia_txa_observacion"));
	$pdi_urgencia->setOrden(Gral::getVars(1, "pdi_urgencia_txt_orden", 0));
	$pdi_urgencia->setEstado(Gral::getVars(1, "pdi_urgencia__estado", 0));
	$pdi_urgencia->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pdi_urgencia_txt_creado")));
	$pdi_urgencia->setCreadoPor(Gral::getVars(1, "pdi_urgencia__creado_por", null));
	$pdi_urgencia->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pdi_urgencia_txt_modificado")));
	$pdi_urgencia->setModificadoPor(Gral::getVars(1, "pdi_urgencia__modificado_por", null));

	$pdi_urgencia_estado = new PdiUrgencia();
	if(trim($hdn_id) != ''){
		$pdi_urgencia_estado->setId($hdn_id);
		$pdi_urgencia->setEstado($pdi_urgencia_estado->getEstado());
				
	}else{
		$pdi_urgencia->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $pdi_urgencia->control();
			if(!$error->getExisteError()){
				$pdi_urgencia->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pdi_urgencia_alta.php?cs=1&id='.$pdi_urgencia->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pdi_urgencia->control();
			if(!$error->getExisteError()){
				$pdi_urgencia->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pdi_urgencia_alta.php?cs=1');
				$pdi_urgencia = new PdiUrgencia();
			}
		break;
	}
	Gral::setSes('PdiUrgencia_ULTIMO_INSERTADO', $pdi_urgencia->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pdi_urgencia_id = Gral::getVars(2, $prefijo.'cmb_pdi_urgencia_id', 0);
	if($cmb_pdi_urgencia_id != 0){
		$pdi_urgencia = PdiUrgencia::getOxId($cmb_pdi_urgencia_id);
	}else{
	
	$pdi_urgencia->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pdi_urgencia->setCodigo(Gral::getVars(2, "codigo", ''));
	$pdi_urgencia->setObservacion(Gral::getVars(2, "observacion", ''));
	$pdi_urgencia->setOrden(Gral::getVars(2, "orden", 0));
	$pdi_urgencia->setEstado(Gral::getVars(2, "estado", 0));
	$pdi_urgencia->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pdi_urgencia->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pdi_urgencia->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pdi_urgencia->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pdi_urgencia->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pdi_urgencia/pdi_urgencia_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pdi_urgencia' width='90%'>
        
				<tr>
				  <td  id="label_pdi_urgencia_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_urgencia_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pdi_urgencia_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pdi_urgencia_txt_descripcion' value='<?php Gral::_echoTxt($pdi_urgencia->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pdi_urgencia_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_urgencia_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_urgencia_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_urgencia_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_urgencia_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_urgencia_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pdi_urgencia_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pdi_urgencia_txt_codigo' value='<?php Gral::_echoTxt($pdi_urgencia->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pdi_urgencia_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_urgencia_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_urgencia_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_urgencia_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_urgencia_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_urgencia_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pdi_urgencia_txa_observacion' rows='10' cols='50' id='pdi_urgencia_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pdi_urgencia->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pdi_urgencia_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_urgencia_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_urgencia_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_urgencia_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pdi_urgencia->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pdi_urgencia_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pdi_urgencia'/>
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

