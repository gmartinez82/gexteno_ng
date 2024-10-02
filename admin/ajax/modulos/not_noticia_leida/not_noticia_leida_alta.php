<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('NOT_NOTICIA_LEIDA_ALTA')){
    echo "No tiene asignada la credencial NOT_NOTICIA_LEIDA_ALTA. ";
    return false;
}

$db_nombre_objeto = 'not_noticia_leida';
$db_nombre_pagina = 'not_noticia_leida_alta';

$not_noticia_leida = new NotNoticiaLeida();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$not_noticia_leida = new NotNoticiaLeida();
	if(trim($hdn_id) != '') $not_noticia_leida->setId($hdn_id, false);
	$not_noticia_leida->setDescripcion(Gral::getVars(1, "not_noticia_leida_txt_descripcion"));
	$not_noticia_leida->setNotNoticiaId(Gral::getVars(1, "not_noticia_leida_cmb_not_noticia_id", null));
	$not_noticia_leida->setCodigo(Gral::getVars(1, "not_noticia_leida_txt_codigo"));
	$not_noticia_leida->setSesion(Gral::getVars(1, "not_noticia_leida_txt_sesion"));
	$not_noticia_leida->setNumeroIp(Gral::getVars(1, "not_noticia_leida_txt_numero_ip"));
	$not_noticia_leida->setObservacion(Gral::getVars(1, "not_noticia_leida_txa_observacion"));
	$not_noticia_leida->setOrden(Gral::getVars(1, "not_noticia_leida_txt_orden", 0));
	$not_noticia_leida->setEstado(Gral::getVars(1, "not_noticia_leida__estado", 0));
	$not_noticia_leida->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "not_noticia_leida_txt_creado")));
	$not_noticia_leida->setCreadoPor(Gral::getVars(1, "not_noticia_leida__creado_por", 0));
	$not_noticia_leida->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "not_noticia_leida_txt_modificado")));
	$not_noticia_leida->setModificadoPor(Gral::getVars(1, "not_noticia_leida__modificado_por", 0));

	$not_noticia_leida_estado = new NotNoticiaLeida();
	if(trim($hdn_id) != ''){
		$not_noticia_leida_estado->setId($hdn_id);
		$not_noticia_leida->setEstado($not_noticia_leida_estado->getEstado());
				
	}else{
		$not_noticia_leida->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $not_noticia_leida->control();
			if(!$error->getExisteError()){
				$not_noticia_leida->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: not_noticia_leida_alta.php?cs=1&id='.$not_noticia_leida->getId());
			}
		break;
		case 'guardarnvo':
			$error = $not_noticia_leida->control();
			if(!$error->getExisteError()){
				$not_noticia_leida->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: not_noticia_leida_alta.php?cs=1');
				$not_noticia_leida = new NotNoticiaLeida();
			}
		break;
	}
	Gral::setSes('NotNoticiaLeida_ULTIMO_INSERTADO', $not_noticia_leida->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_not_noticia_leida_id = Gral::getVars(2, $prefijo.'cmb_not_noticia_leida_id', 0);
	if($cmb_not_noticia_leida_id != 0){
		$not_noticia_leida = NotNoticiaLeida::getOxId($cmb_not_noticia_leida_id);
	}else{
	
	$not_noticia_leida->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$not_noticia_leida->setNotNoticiaId(Gral::getVars(2, "not_noticia_id", 'null'));
	$not_noticia_leida->setCodigo(Gral::getVars(2, "codigo", ''));
	$not_noticia_leida->setSesion(Gral::getVars(2, "sesion", ''));
	$not_noticia_leida->setNumeroIp(Gral::getVars(2, "numero_ip", ''));
	$not_noticia_leida->setObservacion(Gral::getVars(2, "observacion", ''));
	$not_noticia_leida->setOrden(Gral::getVars(2, "orden", 0));
	$not_noticia_leida->setEstado(Gral::getVars(2, "estado", 0));
	$not_noticia_leida->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$not_noticia_leida->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$not_noticia_leida->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$not_noticia_leida->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $not_noticia_leida->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/not_noticia_leida/not_noticia_leida_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_not_noticia_leida' width='90%'>
        
				<tr>
				  <td  id="label_not_noticia_leida_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_not_noticia_leida_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='not_noticia_leida_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='not_noticia_leida_txt_descripcion' value='<?php Gral::_echoTxt($not_noticia_leida->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_not_noticia_leida_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_not_noticia_leida_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_not_noticia_leida_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_not_noticia_leida_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_not_noticia_leida_cmb_not_noticia_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_not_noticia_id' ?>" >
				  
                                        <?php Lang::_lang('NotNoticia', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_not_noticia_leida_cmb_not_noticia_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('not_noticia_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'not_noticia_leida_cmb_not_noticia_id', Gral::getCmbFiltro(NotNoticia::getNotNoticiasCmb(), '...'), $not_noticia_leida->getNotNoticiaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_LEIDA_ALTA_CMB_EDIT_NOT_NOTICIA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="not_noticia_leida_cmb_not_noticia_id" clase_id="not_noticia" prefijo='not_noticia_leida_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_not_noticia_id" <?php echo ($not_noticia_leida->getNotNoticiaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="not_noticia_leida_cmb_not_noticia_id" clase_id="not_noticia" prefijo='not_noticia_leida_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_not_noticia_leida_cmb_not_noticia_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_not_noticia_leida_alta_not_noticia_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_not_noticia_leida_alta_not_noticia_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_not_noticia_leida_alta_not_noticia_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_not_noticia_leida_alta_not_noticia_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('not_noticia_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_not_noticia_leida_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_not_noticia_leida_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='not_noticia_leida_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='not_noticia_leida_txt_codigo' value='<?php Gral::_echoTxt($not_noticia_leida->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_not_noticia_leida_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_not_noticia_leida_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_not_noticia_leida_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_not_noticia_leida_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_not_noticia_leida_txt_sesion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_sesion' ?>" >
				  
                                        <?php Lang::_lang('Sesion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_not_noticia_leida_txt_sesion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('sesion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='not_noticia_leida_txt_sesion' type='text' class='textbox <?php echo $error_input_css ?> ' id='not_noticia_leida_txt_sesion' value='<?php Gral::_echoTxt($not_noticia_leida->getSesion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_not_noticia_leida_alta_sesion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_not_noticia_leida_alta_sesion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_not_noticia_leida_alta_sesion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_not_noticia_leida_alta_sesion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('sesion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_not_noticia_leida_txt_numero_ip" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_numero_ip' ?>" >
				  
                                        <?php Lang::_lang('IP', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_not_noticia_leida_txt_numero_ip" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('numero_ip')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='not_noticia_leida_txt_numero_ip' type='text' class='textbox <?php echo $error_input_css ?> ' id='not_noticia_leida_txt_numero_ip' value='<?php Gral::_echoTxt($not_noticia_leida->getNumeroIp(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_not_noticia_leida_alta_numero_ip', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_not_noticia_leida_alta_numero_ip', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_not_noticia_leida_alta_numero_ip', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_not_noticia_leida_alta_numero_ip', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('numero_ip')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_not_noticia_leida_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_not_noticia_leida_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='not_noticia_leida_txa_observacion' rows='10' cols='50' id='not_noticia_leida_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($not_noticia_leida->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_not_noticia_leida_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_not_noticia_leida_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_not_noticia_leida_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_not_noticia_leida_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($not_noticia_leida->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_not_noticia_leida_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='not_noticia_leida'/>
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

