<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PDE_OC_RECLAMO_MOTIVO_ALTA')){
    echo "No tiene asignada la credencial PDE_OC_RECLAMO_MOTIVO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pde_oc_reclamo_motivo';
$db_nombre_pagina = 'pde_oc_reclamo_motivo_alta';

$pde_oc_reclamo_motivo = new PdeOcReclamoMotivo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pde_oc_reclamo_motivo = new PdeOcReclamoMotivo();
	if(trim($hdn_id) != '') $pde_oc_reclamo_motivo->setId($hdn_id, false);
	$pde_oc_reclamo_motivo->setDescripcion(Gral::getVars(1, "pde_oc_reclamo_motivo_txt_descripcion"));
	$pde_oc_reclamo_motivo->setCodigo(Gral::getVars(1, "pde_oc_reclamo_motivo_txt_codigo"));
	$pde_oc_reclamo_motivo->setPuntaje(Gral::getVars(1, "pde_oc_reclamo_motivo_txt_puntaje", 0));
	$pde_oc_reclamo_motivo->setObservacion(Gral::getVars(1, "pde_oc_reclamo_motivo_txa_observacion"));
	$pde_oc_reclamo_motivo->setOrden(Gral::getVars(1, "pde_oc_reclamo_motivo_txt_orden", 0));
	$pde_oc_reclamo_motivo->setEstado(Gral::getVars(1, "pde_oc_reclamo_motivo__estado", 0));
	$pde_oc_reclamo_motivo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_oc_reclamo_motivo_txt_creado")));
	$pde_oc_reclamo_motivo->setCreadoPor(Gral::getVars(1, "pde_oc_reclamo_motivo__creado_por", null));
	$pde_oc_reclamo_motivo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_oc_reclamo_motivo_txt_modificado")));
	$pde_oc_reclamo_motivo->setModificadoPor(Gral::getVars(1, "pde_oc_reclamo_motivo__modificado_por", null));

	$pde_oc_reclamo_motivo_estado = new PdeOcReclamoMotivo();
	if(trim($hdn_id) != ''){
		$pde_oc_reclamo_motivo_estado->setId($hdn_id);
		$pde_oc_reclamo_motivo->setEstado($pde_oc_reclamo_motivo_estado->getEstado());
				
	}else{
		$pde_oc_reclamo_motivo->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $pde_oc_reclamo_motivo->control();
			if(!$error->getExisteError()){
				$pde_oc_reclamo_motivo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pde_oc_reclamo_motivo_alta.php?cs=1&id='.$pde_oc_reclamo_motivo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pde_oc_reclamo_motivo->control();
			if(!$error->getExisteError()){
				$pde_oc_reclamo_motivo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pde_oc_reclamo_motivo_alta.php?cs=1');
				$pde_oc_reclamo_motivo = new PdeOcReclamoMotivo();
			}
		break;
	}
	Gral::setSes('PdeOcReclamoMotivo_ULTIMO_INSERTADO', $pde_oc_reclamo_motivo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pde_oc_reclamo_motivo_id = Gral::getVars(2, $prefijo.'cmb_pde_oc_reclamo_motivo_id', 0);
	if($cmb_pde_oc_reclamo_motivo_id != 0){
		$pde_oc_reclamo_motivo = PdeOcReclamoMotivo::getOxId($cmb_pde_oc_reclamo_motivo_id);
	}else{
	
	$pde_oc_reclamo_motivo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pde_oc_reclamo_motivo->setCodigo(Gral::getVars(2, "codigo", ''));
	$pde_oc_reclamo_motivo->setPuntaje(Gral::getVars(2, "puntaje", 0));
	$pde_oc_reclamo_motivo->setObservacion(Gral::getVars(2, "observacion", ''));
	$pde_oc_reclamo_motivo->setOrden(Gral::getVars(2, "orden", 0));
	$pde_oc_reclamo_motivo->setEstado(Gral::getVars(2, "estado", 0));
	$pde_oc_reclamo_motivo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pde_oc_reclamo_motivo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pde_oc_reclamo_motivo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pde_oc_reclamo_motivo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pde_oc_reclamo_motivo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pde_oc_reclamo_motivo/pde_oc_reclamo_motivo_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pde_oc_reclamo_motivo' width='90%'>
        
				<tr>
				  <td  id="label_pde_oc_reclamo_motivo_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_reclamo_motivo_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_oc_reclamo_motivo_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_oc_reclamo_motivo_txt_descripcion' value='<?php Gral::_echoTxt($pde_oc_reclamo_motivo->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pde_oc_reclamo_motivo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_reclamo_motivo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_reclamo_motivo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_reclamo_motivo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_reclamo_motivo_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_reclamo_motivo_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_oc_reclamo_motivo_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_oc_reclamo_motivo_txt_codigo' value='<?php Gral::_echoTxt($pde_oc_reclamo_motivo->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_oc_reclamo_motivo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_reclamo_motivo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_reclamo_motivo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_reclamo_motivo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_reclamo_motivo_txt_puntaje" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_puntaje' ?>" >
				  
                                        <?php Lang::_lang('Puntaje', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_reclamo_motivo_txt_puntaje" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('puntaje')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_oc_reclamo_motivo_txt_puntaje' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_oc_reclamo_motivo_txt_puntaje' value='<?php Gral::_echoTxt($pde_oc_reclamo_motivo->getPuntaje(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_oc_reclamo_motivo_alta_puntaje', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_reclamo_motivo_alta_puntaje', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_reclamo_motivo_alta_puntaje', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_reclamo_motivo_alta_puntaje', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('puntaje')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_reclamo_motivo_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_reclamo_motivo_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_oc_reclamo_motivo_txa_observacion' rows='10' cols='50' id='pde_oc_reclamo_motivo_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_oc_reclamo_motivo->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_oc_reclamo_motivo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_reclamo_motivo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_reclamo_motivo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_reclamo_motivo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_oc_reclamo_motivo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pde_oc_reclamo_motivo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pde_oc_reclamo_motivo'/>
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

