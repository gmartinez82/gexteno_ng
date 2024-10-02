<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('US_MEMO_ALTA')){
    echo "No tiene asignada la credencial US_MEMO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'us_memo';
$db_nombre_pagina = 'us_memo_alta';

$us_memo = new UsMemo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$us_memo = new UsMemo();
	if(trim($hdn_id) != '') $us_memo->setId($hdn_id, false);
	$us_memo->setDescripcion(Gral::getVars(1, "us_memo_txt_descripcion"));
	$us_memo->setUsUsuarioId(Gral::getVars(1, "us_memo_cmb_us_usuario_id", null));
	$us_memo->setUsMemoTipoEstadoId(Gral::getVars(1, "us_memo_cmb_us_memo_tipo_estado_id", null));
	$us_memo->setUsMemoTipoId(Gral::getVars(1, "us_memo_cmb_us_memo_tipo_id", null));
	$us_memo->setCodigo(Gral::getVars(1, "us_memo_txt_codigo"));
	$us_memo->setObservacion(Gral::getVars(1, "us_memo_txa_observacion"));
	$us_memo->setOrden(Gral::getVars(1, "us_memo_txt_orden", 0));
	$us_memo->setEstado(Gral::getVars(1, "us_memo_cmb_estado", 0));
	$us_memo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "us_memo_txt_creado")));
	$us_memo->setCreadoPor(Gral::getVars(1, "us_memo__creado_por", 0));
	$us_memo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "us_memo_txt_modificado")));
	$us_memo->setModificadoPor(Gral::getVars(1, "us_memo__modificado_por", 0));

	$us_memo_estado = new UsMemo();
	if(trim($hdn_id) != ''){
		$us_memo_estado->setId($hdn_id);
		$us_memo->setEstado($us_memo_estado->getEstado());
				
	}else{
		$us_memo->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $us_memo->control();
			if(!$error->getExisteError()){
				$us_memo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: us_memo_alta.php?cs=1&id='.$us_memo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $us_memo->control();
			if(!$error->getExisteError()){
				$us_memo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: us_memo_alta.php?cs=1');
				$us_memo = new UsMemo();
			}
		break;
	}
	Gral::setSes('UsMemo_ULTIMO_INSERTADO', $us_memo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_us_memo_id = Gral::getVars(2, $prefijo.'cmb_us_memo_id', 0);
	if($cmb_us_memo_id != 0){
		$us_memo = UsMemo::getOxId($cmb_us_memo_id);
	}else{
	
	$us_memo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$us_memo->setUsUsuarioId(Gral::getVars(2, "us_usuario_id", 'null'));
	$us_memo->setUsMemoTipoEstadoId(Gral::getVars(2, "us_memo_tipo_estado_id", 'null'));
	$us_memo->setUsMemoTipoId(Gral::getVars(2, "us_memo_tipo_id", 'null'));
	$us_memo->setCodigo(Gral::getVars(2, "codigo", ''));
	$us_memo->setObservacion(Gral::getVars(2, "observacion", ''));
	$us_memo->setOrden(Gral::getVars(2, "orden", 0));
	$us_memo->setEstado(Gral::getVars(2, "estado", 0));
	$us_memo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$us_memo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$us_memo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$us_memo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $us_memo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/us_memo/us_memo_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_us_memo' width='90%'>
        
				<tr>
				  <td  id="label_us_memo_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_memo_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='us_memo_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='us_memo_txt_descripcion' value='<?php Gral::_echoTxt($us_memo->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_us_memo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_memo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_memo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_memo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_memo_cmb_us_memo_tipo_estado_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_us_memo_tipo_estado_id' ?>" >
				  
                                        <?php Lang::_lang('UsMemoTipoEstado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_memo_cmb_us_memo_tipo_estado_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('us_memo_tipo_estado_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'us_memo_cmb_us_memo_tipo_estado_id', Gral::getCmbFiltro(UsMemoTipoEstado::getUsMemoTipoEstadosCmb(), '...'), $us_memo->getUsMemoTipoEstadoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('US_MEMO_ALTA_CMB_EDIT_US_MEMO_TIPO_ESTADO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="us_memo_cmb_us_memo_tipo_estado_id" clase_id="us_memo_tipo_estado" prefijo='us_memo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_us_memo_tipo_estado_id" <?php echo ($us_memo->getUsMemoTipoEstadoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="us_memo_cmb_us_memo_tipo_estado_id" clase_id="us_memo_tipo_estado" prefijo='us_memo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_us_memo_cmb_us_memo_tipo_estado_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_us_memo_alta_us_memo_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_memo_alta_us_memo_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_memo_alta_us_memo_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_memo_alta_us_memo_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('us_memo_tipo_estado_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_memo_cmb_us_memo_tipo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_us_memo_tipo_id' ?>" >
				  
                                        <?php Lang::_lang('UsMemoTipo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_memo_cmb_us_memo_tipo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('us_memo_tipo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'us_memo_cmb_us_memo_tipo_id', Gral::getCmbFiltro(UsMemoTipo::getUsMemoTiposCmb(), '...'), $us_memo->getUsMemoTipoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('US_MEMO_ALTA_CMB_EDIT_US_MEMO_TIPO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="us_memo_cmb_us_memo_tipo_id" clase_id="us_memo_tipo" prefijo='us_memo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_us_memo_tipo_id" <?php echo ($us_memo->getUsMemoTipoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="us_memo_cmb_us_memo_tipo_id" clase_id="us_memo_tipo" prefijo='us_memo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_us_memo_cmb_us_memo_tipo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_us_memo_alta_us_memo_tipo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_memo_alta_us_memo_tipo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_memo_alta_us_memo_tipo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_memo_alta_us_memo_tipo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('us_memo_tipo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_memo_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_memo_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='us_memo_txa_observacion' rows='10' cols='60' id='us_memo_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($us_memo->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_us_memo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_memo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_memo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_memo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($us_memo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_us_memo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='us_memo'/>
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

