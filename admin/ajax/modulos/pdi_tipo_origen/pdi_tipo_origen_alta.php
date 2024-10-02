<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PDI_TIPO_ORIGEN_ALTA')){
    echo "No tiene asignada la credencial PDI_TIPO_ORIGEN_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pdi_tipo_origen';
$db_nombre_pagina = 'pdi_tipo_origen_alta';

$pdi_tipo_origen = new PdiTipoOrigen();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pdi_tipo_origen = new PdiTipoOrigen();
	if(trim($hdn_id) != '') $pdi_tipo_origen->setId($hdn_id, false);
	$pdi_tipo_origen->setDescripcion(Gral::getVars(1, "pdi_tipo_origen_txt_descripcion"));
	$pdi_tipo_origen->setCodigo(Gral::getVars(1, "pdi_tipo_origen_txt_codigo"));
	$pdi_tipo_origen->setRequiereAtencion(Gral::getVars(1, "pdi_tipo_origen_cmb_requiere_atencion", 0));
	$pdi_tipo_origen->setObservacion(Gral::getVars(1, "pdi_tipo_origen_txa_observacion"));
	$pdi_tipo_origen->setOrden(Gral::getVars(1, "pdi_tipo_origen_txt_orden", 0));
	$pdi_tipo_origen->setEstado(Gral::getVars(1, "pdi_tipo_origen__estado", 0));
	$pdi_tipo_origen->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pdi_tipo_origen_txt_creado")));
	$pdi_tipo_origen->setCreadoPor(Gral::getVars(1, "pdi_tipo_origen__creado_por", null));
	$pdi_tipo_origen->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pdi_tipo_origen_txt_modificado")));
	$pdi_tipo_origen->setModificadoPor(Gral::getVars(1, "pdi_tipo_origen__modificado_por", null));

	$pdi_tipo_origen_estado = new PdiTipoOrigen();
	if(trim($hdn_id) != ''){
		$pdi_tipo_origen_estado->setId($hdn_id);
		$pdi_tipo_origen->setEstado($pdi_tipo_origen_estado->getEstado());
				
	}else{
		$pdi_tipo_origen->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $pdi_tipo_origen->control();
			if(!$error->getExisteError()){
				$pdi_tipo_origen->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pdi_tipo_origen_alta.php?cs=1&id='.$pdi_tipo_origen->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pdi_tipo_origen->control();
			if(!$error->getExisteError()){
				$pdi_tipo_origen->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pdi_tipo_origen_alta.php?cs=1');
				$pdi_tipo_origen = new PdiTipoOrigen();
			}
		break;
	}
	Gral::setSes('PdiTipoOrigen_ULTIMO_INSERTADO', $pdi_tipo_origen->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pdi_tipo_origen_id = Gral::getVars(2, $prefijo.'cmb_pdi_tipo_origen_id', 0);
	if($cmb_pdi_tipo_origen_id != 0){
		$pdi_tipo_origen = PdiTipoOrigen::getOxId($cmb_pdi_tipo_origen_id);
	}else{
	
	$pdi_tipo_origen->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pdi_tipo_origen->setCodigo(Gral::getVars(2, "codigo", ''));
	$pdi_tipo_origen->setRequiereAtencion(Gral::getVars(2, "requiere_atencion", 0));
	$pdi_tipo_origen->setObservacion(Gral::getVars(2, "observacion", ''));
	$pdi_tipo_origen->setOrden(Gral::getVars(2, "orden", 0));
	$pdi_tipo_origen->setEstado(Gral::getVars(2, "estado", 0));
	$pdi_tipo_origen->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pdi_tipo_origen->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pdi_tipo_origen->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pdi_tipo_origen->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pdi_tipo_origen->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pdi_tipo_origen/pdi_tipo_origen_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pdi_tipo_origen' width='90%'>
        
				<tr>
				  <td  id="label_pdi_tipo_origen_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_tipo_origen_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pdi_tipo_origen_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pdi_tipo_origen_txt_descripcion' value='<?php Gral::_echoTxt($pdi_tipo_origen->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pdi_tipo_origen_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_tipo_origen_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_tipo_origen_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_tipo_origen_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_tipo_origen_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_tipo_origen_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pdi_tipo_origen_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pdi_tipo_origen_txt_codigo' value='<?php Gral::_echoTxt($pdi_tipo_origen->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pdi_tipo_origen_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_tipo_origen_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_tipo_origen_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_tipo_origen_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_tipo_origen_cmb_requiere_atencion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_requiere_atencion' ?>" >
				  
                                        <?php Lang::_lang('Requiere Atencion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_tipo_origen_cmb_requiere_atencion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('requiere_atencion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pdi_tipo_origen_cmb_requiere_atencion', GralSiNo::getGralSiNosCmb(), $pdi_tipo_origen->getRequiereAtencion(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_pdi_tipo_origen_alta_requiere_atencion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_tipo_origen_alta_requiere_atencion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_tipo_origen_alta_requiere_atencion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_tipo_origen_alta_requiere_atencion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('requiere_atencion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_tipo_origen_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_tipo_origen_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pdi_tipo_origen_txa_observacion' rows='10' cols='50' id='pdi_tipo_origen_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pdi_tipo_origen->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pdi_tipo_origen_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_tipo_origen_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_tipo_origen_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_tipo_origen_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pdi_tipo_origen->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pdi_tipo_origen_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pdi_tipo_origen'/>
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

