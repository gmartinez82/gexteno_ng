<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('GRAL_NOVEDAD_MOTIVO_EXTENDIDO_ALTA')){
    echo "No tiene asignada la credencial GRAL_NOVEDAD_MOTIVO_EXTENDIDO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'gral_novedad_motivo_extendido';
$db_nombre_pagina = 'gral_novedad_motivo_extendido_alta';

$gral_novedad_motivo_extendido = new GralNovedadMotivoExtendido();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$gral_novedad_motivo_extendido = new GralNovedadMotivoExtendido();
	if(trim($hdn_id) != '') $gral_novedad_motivo_extendido->setId($hdn_id, false);
	$gral_novedad_motivo_extendido->setDescripcion(Gral::getVars(1, "gral_novedad_motivo_extendido_txt_descripcion"));
	$gral_novedad_motivo_extendido->setGralNovedadMotivoId(Gral::getVars(1, "gral_novedad_motivo_extendido_cmb_gral_novedad_motivo_id", null));
	$gral_novedad_motivo_extendido->setCodigo(Gral::getVars(1, "gral_novedad_motivo_extendido_txt_codigo"));
	$gral_novedad_motivo_extendido->setObservacion(Gral::getVars(1, "gral_novedad_motivo_extendido_txa_observacion"));
	$gral_novedad_motivo_extendido->setOrden(Gral::getVars(1, "gral_novedad_motivo_extendido_txt_orden", 0));
	$gral_novedad_motivo_extendido->setEstado(Gral::getVars(1, "gral_novedad_motivo_extendido_cmb_estado", 0));
	$gral_novedad_motivo_extendido->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_novedad_motivo_extendido_txt_creado")));
	$gral_novedad_motivo_extendido->setCreadoPor(Gral::getVars(1, "gral_novedad_motivo_extendido__creado_por", 0));
	$gral_novedad_motivo_extendido->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_novedad_motivo_extendido_txt_modificado")));
	$gral_novedad_motivo_extendido->setModificadoPor(Gral::getVars(1, "gral_novedad_motivo_extendido__modificado_por", 0));

	$gral_novedad_motivo_extendido_estado = new GralNovedadMotivoExtendido();
	if(trim($hdn_id) != ''){
		$gral_novedad_motivo_extendido_estado->setId($hdn_id);
		$gral_novedad_motivo_extendido->setEstado($gral_novedad_motivo_extendido_estado->getEstado());
				
	}else{
		$gral_novedad_motivo_extendido->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $gral_novedad_motivo_extendido->control();
			if(!$error->getExisteError()){
				$gral_novedad_motivo_extendido->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: gral_novedad_motivo_extendido_alta.php?cs=1&id='.$gral_novedad_motivo_extendido->getId());
			}
		break;
		case 'guardarnvo':
			$error = $gral_novedad_motivo_extendido->control();
			if(!$error->getExisteError()){
				$gral_novedad_motivo_extendido->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: gral_novedad_motivo_extendido_alta.php?cs=1');
				$gral_novedad_motivo_extendido = new GralNovedadMotivoExtendido();
			}
		break;
	}
	Gral::setSes('GralNovedadMotivoExtendido_ULTIMO_INSERTADO', $gral_novedad_motivo_extendido->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_gral_novedad_motivo_extendido_id = Gral::getVars(2, $prefijo.'cmb_gral_novedad_motivo_extendido_id', 0);
	if($cmb_gral_novedad_motivo_extendido_id != 0){
		$gral_novedad_motivo_extendido = GralNovedadMotivoExtendido::getOxId($cmb_gral_novedad_motivo_extendido_id);
	}else{
	
	$gral_novedad_motivo_extendido->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$gral_novedad_motivo_extendido->setGralNovedadMotivoId(Gral::getVars(2, "gral_novedad_motivo_id", 'null'));
	$gral_novedad_motivo_extendido->setCodigo(Gral::getVars(2, "codigo", ''));
	$gral_novedad_motivo_extendido->setObservacion(Gral::getVars(2, "observacion", ''));
	$gral_novedad_motivo_extendido->setOrden(Gral::getVars(2, "orden", 0));
	$gral_novedad_motivo_extendido->setEstado(Gral::getVars(2, "estado", 0));
	$gral_novedad_motivo_extendido->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$gral_novedad_motivo_extendido->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$gral_novedad_motivo_extendido->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$gral_novedad_motivo_extendido->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $gral_novedad_motivo_extendido->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/gral_novedad_motivo_extendido/gral_novedad_motivo_extendido_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_gral_novedad_motivo_extendido' width='90%'>
        
				<tr>
				  <td  id="label_gral_novedad_motivo_extendido_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_novedad_motivo_extendido_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_novedad_motivo_extendido_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_novedad_motivo_extendido_txt_descripcion' value='<?php Gral::_echoTxt($gral_novedad_motivo_extendido->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_gral_novedad_motivo_extendido_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_novedad_motivo_extendido_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_novedad_motivo_extendido_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_novedad_motivo_extendido_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_novedad_motivo_extendido_cmb_gral_novedad_motivo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_novedad_motivo_id' ?>" >
				  
                                        <?php Lang::_lang('GralNovedadMotivo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_novedad_motivo_extendido_cmb_gral_novedad_motivo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_novedad_motivo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gral_novedad_motivo_extendido_cmb_gral_novedad_motivo_id', Gral::getCmbFiltro(GralNovedadMotivo::getGralNovedadMotivosCmb(), '...'), $gral_novedad_motivo_extendido->getGralNovedadMotivoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('GRAL_NOVEDAD_MOTIVO_EXTENDIDO_ALTA_CMB_EDIT_GRAL_NOVEDAD_MOTIVO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="gral_novedad_motivo_extendido_cmb_gral_novedad_motivo_id" clase_id="gral_novedad_motivo" prefijo='gral_novedad_motivo_extendido_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_novedad_motivo_id" <?php echo ($gral_novedad_motivo_extendido->getGralNovedadMotivoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="gral_novedad_motivo_extendido_cmb_gral_novedad_motivo_id" clase_id="gral_novedad_motivo" prefijo='gral_novedad_motivo_extendido_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_gral_novedad_motivo_extendido_cmb_gral_novedad_motivo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_gral_novedad_motivo_extendido_alta_gral_novedad_motivo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_novedad_motivo_extendido_alta_gral_novedad_motivo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_novedad_motivo_extendido_alta_gral_novedad_motivo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_novedad_motivo_extendido_alta_gral_novedad_motivo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_novedad_motivo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_novedad_motivo_extendido_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_novedad_motivo_extendido_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_novedad_motivo_extendido_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_novedad_motivo_extendido_txt_codigo' value='<?php Gral::_echoTxt($gral_novedad_motivo_extendido->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gral_novedad_motivo_extendido_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_novedad_motivo_extendido_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_novedad_motivo_extendido_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_novedad_motivo_extendido_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_novedad_motivo_extendido_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_novedad_motivo_extendido_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='gral_novedad_motivo_extendido_txa_observacion' rows='10' cols='50' id='gral_novedad_motivo_extendido_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($gral_novedad_motivo_extendido->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_gral_novedad_motivo_extendido_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_novedad_motivo_extendido_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_novedad_motivo_extendido_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_novedad_motivo_extendido_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($gral_novedad_motivo_extendido->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_gral_novedad_motivo_extendido_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='gral_novedad_motivo_extendido'/>
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

