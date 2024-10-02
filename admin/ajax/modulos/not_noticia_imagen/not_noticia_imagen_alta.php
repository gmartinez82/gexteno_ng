<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('NOT_NOTICIA_IMAGEN_ALTA')){
    echo "No tiene asignada la credencial NOT_NOTICIA_IMAGEN_ALTA. ";
    return false;
}

$db_nombre_objeto = 'not_noticia_imagen';
$db_nombre_pagina = 'not_noticia_imagen_alta';

$not_noticia_imagen = new NotNoticiaImagen();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$not_noticia_imagen = new NotNoticiaImagen();
	if(trim($hdn_id) != '') $not_noticia_imagen->setId($hdn_id, false);
	$not_noticia_imagen->setDescripcion(Gral::getVars(1, "not_noticia_imagen_txt_descripcion"));
	$not_noticia_imagen->setNotNoticiaId(Gral::getVars(1, "not_noticia_imagen_dbsug_not_noticia_id", null));
	$not_noticia_imagen->setNotTipoImagenId(Gral::getVars(1, "not_noticia_imagen_cmb_not_tipo_imagen_id", null));
	$not_noticia_imagen->setCodigo(Gral::getVars(1, "not_noticia_imagen_txt_codigo"));
	$not_noticia_imagen->setObservacion(Gral::getVars(1, "not_noticia_imagen_txa_observacion"));
	$not_noticia_imagen->setOrden(Gral::getVars(1, "not_noticia_imagen_txt_orden", 0));
	$not_noticia_imagen->setEstado(Gral::getVars(1, "not_noticia_imagen__estado", 0));
	$not_noticia_imagen->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "not_noticia_imagen_txt_creado")));
	$not_noticia_imagen->setCreadoPor(Gral::getVars(1, "not_noticia_imagen__creado_por", 0));
	$not_noticia_imagen->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "not_noticia_imagen_txt_modificado")));
	$not_noticia_imagen->setModificadoPor(Gral::getVars(1, "not_noticia_imagen__modificado_por", 0));
	$not_noticia_imagen->setArchivo(Gral::getVars(1, "not_noticia_imagen_file_archivo"));
	$not_noticia_imagen->setPeso(Gral::getVars(1, "not_noticia_imagen_txt_peso"));
	$not_noticia_imagen->setTipo(Gral::getVars(1, "not_noticia_imagen_txt_tipo"));
	$not_noticia_imagen->setAlto(Gral::getVars(1, "not_noticia_imagen_txt_alto"));
	$not_noticia_imagen->setAncho(Gral::getVars(1, "not_noticia_imagen_txt_ancho"));

	$not_noticia_imagen_estado = new NotNoticiaImagen();
	if(trim($hdn_id) != ''){
		$not_noticia_imagen_estado->setId($hdn_id);
		$not_noticia_imagen->setEstado($not_noticia_imagen_estado->getEstado());
				
	}else{
		$not_noticia_imagen->setEstado(1);
				
	}
	

	$not_noticia_imagen_existente = new NotNoticiaImagen();
	if(trim($hdn_id) != ''){
		$not_noticia_imagen_existente->setId($hdn_id);
		$not_noticia_imagen->setArchivo($not_noticia_imagen_existente->getArchivo());
		$not_noticia_imagen->setPeso($not_noticia_imagen_existente->getPeso());
		$not_noticia_imagen->setTipo($not_noticia_imagen_existente->getTipo());
		$not_noticia_imagen->setOrden($not_noticia_imagen_existente->getOrden());
		$not_noticia_imagen->setAlto($not_noticia_imagen_existente->getAlto());
		$not_noticia_imagen->setAncho($not_noticia_imagen_existente->getAncho());
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $not_noticia_imagen->control();
			if(!$error->getExisteError()){
				$not_noticia_imagen->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: not_noticia_imagen_alta.php?cs=1&id='.$not_noticia_imagen->getId());
			}
		break;
		case 'guardarnvo':
			$error = $not_noticia_imagen->control();
			if(!$error->getExisteError()){
				$not_noticia_imagen->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: not_noticia_imagen_alta.php?cs=1');
				$not_noticia_imagen = new NotNoticiaImagen();
			}
		break;
	}
	Gral::setSes('NotNoticiaImagen_ULTIMO_INSERTADO', $not_noticia_imagen->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_not_noticia_imagen_id = Gral::getVars(2, $prefijo.'cmb_not_noticia_imagen_id', 0);
	if($cmb_not_noticia_imagen_id != 0){
		$not_noticia_imagen = NotNoticiaImagen::getOxId($cmb_not_noticia_imagen_id);
	}else{
	
	$not_noticia_imagen->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$not_noticia_imagen->setNotNoticiaId(Gral::getVars(2, "not_noticia_id", 'null'));
	$not_noticia_imagen->setNotTipoImagenId(Gral::getVars(2, "not_tipo_imagen_id", 'null'));
	$not_noticia_imagen->setCodigo(Gral::getVars(2, "codigo", ''));
	$not_noticia_imagen->setObservacion(Gral::getVars(2, "observacion", ''));
	$not_noticia_imagen->setOrden(Gral::getVars(2, "orden", 0));
	$not_noticia_imagen->setEstado(Gral::getVars(2, "estado", 0));
	$not_noticia_imagen->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$not_noticia_imagen->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$not_noticia_imagen->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$not_noticia_imagen->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	$not_noticia_imagen->setArchivo(Gral::getVars(2, "archivo", ''));
	$not_noticia_imagen->setPeso(Gral::getVars(2, "peso", ''));
	$not_noticia_imagen->setTipo(Gral::getVars(2, "tipo", ''));
	$not_noticia_imagen->setAlto(Gral::getVars(2, "alto", ''));
	$not_noticia_imagen->setAncho(Gral::getVars(2, "ancho", ''));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $not_noticia_imagen->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/not_noticia_imagen/not_noticia_imagen_alta.php' enctype="multipart/form-data">
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_not_noticia_imagen' width='90%'>
        
				<tr>
				  <td  id="label_not_noticia_imagen_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_not_noticia_imagen_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='not_noticia_imagen_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='not_noticia_imagen_txt_descripcion' value='<?php Gral::_echoTxt($not_noticia_imagen->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_not_noticia_imagen_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_not_noticia_imagen_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_not_noticia_imagen_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_not_noticia_imagen_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_not_noticia_imagen_dbsug_not_noticia_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_not_noticia_id' ?>" >
				  
                                        <?php Lang::_lang('NotNoticia', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_not_noticia_imagen_dbsug_not_noticia_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('not_noticia_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'not_noticia_imagen_dbsug_not_noticia', 'ajax/modulos/not_noticia/not_noticia_dbsuggest.php', false, true, '', 'Ingrese ...', $not_noticia_imagen->getNotNoticiaId(), $not_noticia_imagen->getNotNoticia()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_not_noticia_imagen_alta_not_noticia_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_not_noticia_imagen_alta_not_noticia_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_not_noticia_imagen_alta_not_noticia_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_not_noticia_imagen_alta_not_noticia_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('not_noticia_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_not_noticia_imagen_cmb_not_tipo_imagen_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_not_tipo_imagen_id' ?>" >
				  
                                        <?php Lang::_lang('NotTipoImagen', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_not_noticia_imagen_cmb_not_tipo_imagen_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('not_tipo_imagen_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'not_noticia_imagen_cmb_not_tipo_imagen_id', Gral::getCmbFiltro(NotTipoImagen::getNotTipoImagensCmb(), '...'), $not_noticia_imagen->getNotTipoImagenId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_IMAGEN_ALTA_CMB_EDIT_NOT_TIPO_IMAGEN')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="not_noticia_imagen_cmb_not_tipo_imagen_id" clase_id="not_tipo_imagen" prefijo='not_noticia_imagen_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_not_tipo_imagen_id" <?php echo ($not_noticia_imagen->getNotTipoImagenId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="not_noticia_imagen_cmb_not_tipo_imagen_id" clase_id="not_tipo_imagen" prefijo='not_noticia_imagen_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_not_noticia_imagen_cmb_not_tipo_imagen_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_not_noticia_imagen_alta_not_tipo_imagen_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_not_noticia_imagen_alta_not_tipo_imagen_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_not_noticia_imagen_alta_not_tipo_imagen_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_not_noticia_imagen_alta_not_tipo_imagen_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('not_tipo_imagen_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_not_noticia_imagen_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_not_noticia_imagen_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='not_noticia_imagen_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='not_noticia_imagen_txt_codigo' value='<?php Gral::_echoTxt($not_noticia_imagen->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_not_noticia_imagen_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_not_noticia_imagen_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_not_noticia_imagen_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_not_noticia_imagen_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_not_noticia_imagen_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_not_noticia_imagen_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='not_noticia_imagen_txa_observacion' rows='10' cols='50' id='not_noticia_imagen_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($not_noticia_imagen->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_not_noticia_imagen_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_not_noticia_imagen_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_not_noticia_imagen_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_not_noticia_imagen_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($not_noticia_imagen->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_not_noticia_imagen_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='not_noticia_imagen'/>
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

