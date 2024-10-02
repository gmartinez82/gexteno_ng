<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('INS_INSUMO_IMAGEN_ALTA')){
    echo "No tiene asignada la credencial INS_INSUMO_IMAGEN_ALTA. ";
    return false;
}

$db_nombre_objeto = 'ins_insumo_imagen';
$db_nombre_pagina = 'ins_insumo_imagen_alta';

$ins_insumo_imagen = new InsInsumoImagen();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$ins_insumo_imagen = new InsInsumoImagen();
	if(trim($hdn_id) != '') $ins_insumo_imagen->setId($hdn_id, false);
	$ins_insumo_imagen->setInsInsumoId(Gral::getVars(1, "ins_insumo_imagen_dbsug_ins_insumo_id", null));
	$ins_insumo_imagen->setInsTipoImagenId(Gral::getVars(1, "ins_insumo_imagen_cmb_ins_tipo_imagen_id", null));
	$ins_insumo_imagen->setDescripcion(Gral::getVars(1, "ins_insumo_imagen_txt_descripcion"));
	$ins_insumo_imagen->setCodigo(Gral::getVars(1, "ins_insumo_imagen_txt_codigo"));
	$ins_insumo_imagen->setObservacion(Gral::getVars(1, "ins_insumo_imagen_txa_observacion"));
	$ins_insumo_imagen->setArchivo(Gral::getVars(1, "ins_insumo_imagen_file_archivo"));
	$ins_insumo_imagen->setPeso(Gral::getVars(1, "ins_insumo_imagen_txt_peso"));
	$ins_insumo_imagen->setTipo(Gral::getVars(1, "ins_insumo_imagen_txt_tipo"));
	$ins_insumo_imagen->setAlto(Gral::getVars(1, "ins_insumo_imagen_txt_alto"));
	$ins_insumo_imagen->setAncho(Gral::getVars(1, "ins_insumo_imagen_txt_ancho"));
	$ins_insumo_imagen->setOrden(Gral::getVars(1, "ins_insumo_imagen_txt_orden", 0));
	$ins_insumo_imagen->setEstado(Gral::getVars(1, "ins_insumo_imagen__estado", 0));
	$ins_insumo_imagen->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_insumo_imagen_txt_creado")));
	$ins_insumo_imagen->setCreadoPor(Gral::getVars(1, "ins_insumo_imagen__creado_por", null));
	$ins_insumo_imagen->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_insumo_imagen_txt_modificado")));
	$ins_insumo_imagen->setModificadoPor(Gral::getVars(1, "ins_insumo_imagen__modificado_por", null));

	$ins_insumo_imagen_estado = new InsInsumoImagen();
	if(trim($hdn_id) != ''){
		$ins_insumo_imagen_estado->setId($hdn_id);
		$ins_insumo_imagen->setEstado($ins_insumo_imagen_estado->getEstado());
				
	}else{
		$ins_insumo_imagen->setEstado(1);
				
	}
	

	$ins_insumo_imagen_existente = new InsInsumoImagen();
	if(trim($hdn_id) != ''){
		$ins_insumo_imagen_existente->setId($hdn_id);
		$ins_insumo_imagen->setArchivo($ins_insumo_imagen_existente->getArchivo());
		$ins_insumo_imagen->setPeso($ins_insumo_imagen_existente->getPeso());
		$ins_insumo_imagen->setTipo($ins_insumo_imagen_existente->getTipo());
		$ins_insumo_imagen->setOrden($ins_insumo_imagen_existente->getOrden());
		$ins_insumo_imagen->setAlto($ins_insumo_imagen_existente->getAlto());
		$ins_insumo_imagen->setAncho($ins_insumo_imagen_existente->getAncho());
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $ins_insumo_imagen->control();
			if(!$error->getExisteError()){
				$ins_insumo_imagen->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: ins_insumo_imagen_alta.php?cs=1&id='.$ins_insumo_imagen->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ins_insumo_imagen->control();
			if(!$error->getExisteError()){
				$ins_insumo_imagen->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: ins_insumo_imagen_alta.php?cs=1');
				$ins_insumo_imagen = new InsInsumoImagen();
			}
		break;
	}
	Gral::setSes('InsInsumoImagen_ULTIMO_INSERTADO', $ins_insumo_imagen->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_ins_insumo_imagen_id = Gral::getVars(2, $prefijo.'cmb_ins_insumo_imagen_id', 0);
	if($cmb_ins_insumo_imagen_id != 0){
		$ins_insumo_imagen = InsInsumoImagen::getOxId($cmb_ins_insumo_imagen_id);
	}else{
	
	$ins_insumo_imagen->setInsInsumoId(Gral::getVars(2, "ins_insumo_id", 'null'));
	$ins_insumo_imagen->setInsTipoImagenId(Gral::getVars(2, "ins_tipo_imagen_id", 'null'));
	$ins_insumo_imagen->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$ins_insumo_imagen->setCodigo(Gral::getVars(2, "codigo", ''));
	$ins_insumo_imagen->setObservacion(Gral::getVars(2, "observacion", ''));
	$ins_insumo_imagen->setArchivo(Gral::getVars(2, "archivo", ''));
	$ins_insumo_imagen->setPeso(Gral::getVars(2, "peso", ''));
	$ins_insumo_imagen->setTipo(Gral::getVars(2, "tipo", ''));
	$ins_insumo_imagen->setAlto(Gral::getVars(2, "alto", ''));
	$ins_insumo_imagen->setAncho(Gral::getVars(2, "ancho", ''));
	$ins_insumo_imagen->setOrden(Gral::getVars(2, "orden", 0));
	$ins_insumo_imagen->setEstado(Gral::getVars(2, "estado", 0));
	$ins_insumo_imagen->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ins_insumo_imagen->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ins_insumo_imagen->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ins_insumo_imagen->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $ins_insumo_imagen->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ins_insumo_imagen/ins_insumo_imagen_alta.php' enctype="multipart/form-data">
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ins_insumo_imagen' width='90%'>
        
				<tr>
				  <td  id="label_ins_insumo_imagen_dbsug_ins_insumo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_insumo_id' ?>" >
				  
                                        <?php Lang::_lang('InsInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_imagen_dbsug_ins_insumo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'ins_insumo_imagen_dbsug_ins_insumo', 'ajax/modulos/ins_insumo/ins_insumo_dbsuggest.php', false, true, '', 'Ingrese ...', $ins_insumo_imagen->getInsInsumoId(), $ins_insumo_imagen->getInsInsumo()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_ins_insumo_imagen_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_imagen_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_imagen_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_imagen_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_imagen_cmb_ins_tipo_imagen_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_tipo_imagen_id' ?>" >
				  
                                        <?php Lang::_lang('InsTipoImagen', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_imagen_cmb_ins_tipo_imagen_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_tipo_imagen_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_insumo_imagen_cmb_ins_tipo_imagen_id', Gral::getCmbFiltro(InsTipoImagen::getInsTipoImagensCmb(), '...'), $ins_insumo_imagen->getInsTipoImagenId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_IMAGEN_ALTA_CMB_EDIT_INS_TIPO_IMAGEN')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ins_insumo_imagen_cmb_ins_tipo_imagen_id" clase_id="ins_tipo_imagen" prefijo='ins_insumo_imagen_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_tipo_imagen_id" <?php echo ($ins_insumo_imagen->getInsTipoImagenId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ins_insumo_imagen_cmb_ins_tipo_imagen_id" clase_id="ins_tipo_imagen" prefijo='ins_insumo_imagen_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ins_insumo_imagen_cmb_ins_tipo_imagen_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ins_insumo_imagen_alta_ins_tipo_imagen_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_imagen_alta_ins_tipo_imagen_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_imagen_alta_ins_tipo_imagen_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_imagen_alta_ins_tipo_imagen_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_tipo_imagen_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_imagen_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_imagen_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_insumo_imagen_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_insumo_imagen_txt_descripcion' value='<?php Gral::_echoTxt($ins_insumo_imagen->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_ins_insumo_imagen_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_imagen_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_imagen_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_imagen_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_imagen_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_imagen_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_insumo_imagen_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_insumo_imagen_txt_codigo' value='<?php Gral::_echoTxt($ins_insumo_imagen->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_insumo_imagen_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_imagen_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_imagen_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_imagen_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_imagen_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_imagen_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='ins_insumo_imagen_txa_observacion' rows='10' cols='50' id='ins_insumo_imagen_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($ins_insumo_imagen->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_ins_insumo_imagen_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_imagen_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_imagen_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_imagen_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ins_insumo_imagen->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ins_insumo_imagen_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ins_insumo_imagen'/>
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

