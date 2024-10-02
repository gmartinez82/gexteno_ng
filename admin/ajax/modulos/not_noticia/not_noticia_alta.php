<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('NOT_NOTICIA_ALTA')){
    echo "No tiene asignada la credencial NOT_NOTICIA_ALTA. ";
    return false;
}

$db_nombre_objeto = 'not_noticia';
$db_nombre_pagina = 'not_noticia_alta';

$not_noticia = new NotNoticia();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$not_noticia = new NotNoticia();
	if(trim($hdn_id) != '') $not_noticia->setId($hdn_id, false);
	$not_noticia->setDescripcion(Gral::getVars(1, "not_noticia_txt_descripcion"));
	$not_noticia->setNotCategoriaId(Gral::getVars(1, "not_noticia_cmb_not_categoria_id", null));
	$not_noticia->setCodigo(Gral::getVars(1, "not_noticia_txt_codigo"));
	$not_noticia->setCopete(Gral::getVars(1, "not_noticia_txa_copete"));
	$not_noticia->setCuerpo(Gral::getVars(1, "not_noticia_rtf_cuerpo"));
	$not_noticia->setFecha(Gral::getFechaToDb(Gral::getVars(1, "not_noticia_txt_fecha")));
	$not_noticia->setDestacado(Gral::getVars(1, "not_noticia_cmb_destacado", 0));
	$not_noticia->setObservacion(Gral::getVars(1, "not_noticia_txa_observacion"));
	$not_noticia->setOrden(Gral::getVars(1, "not_noticia_txt_orden", 0));
	$not_noticia->setEstado(Gral::getVars(1, "not_noticia__estado", 0));
	$not_noticia->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "not_noticia_txt_creado")));
	$not_noticia->setCreadoPor(Gral::getVars(1, "not_noticia__creado_por", 0));
	$not_noticia->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "not_noticia_txt_modificado")));
	$not_noticia->setModificadoPor(Gral::getVars(1, "not_noticia__modificado_por", 0));

	$not_noticia_estado = new NotNoticia();
	if(trim($hdn_id) != ''){
		$not_noticia_estado->setId($hdn_id);
		$not_noticia->setEstado($not_noticia_estado->getEstado());
				
	}else{
		$not_noticia->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $not_noticia->control();
			if(!$error->getExisteError()){
				$not_noticia->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: not_noticia_alta.php?cs=1&id='.$not_noticia->getId());
			}
		break;
		case 'guardarnvo':
			$error = $not_noticia->control();
			if(!$error->getExisteError()){
				$not_noticia->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: not_noticia_alta.php?cs=1');
				$not_noticia = new NotNoticia();
			}
		break;
	}
	Gral::setSes('NotNoticia_ULTIMO_INSERTADO', $not_noticia->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_not_noticia_id = Gral::getVars(2, $prefijo.'cmb_not_noticia_id', 0);
	if($cmb_not_noticia_id != 0){
		$not_noticia = NotNoticia::getOxId($cmb_not_noticia_id);
	}else{
	
	$not_noticia->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$not_noticia->setNotCategoriaId(Gral::getVars(2, "not_categoria_id", 'null'));
	$not_noticia->setCodigo(Gral::getVars(2, "codigo", ''));
	$not_noticia->setCopete(Gral::getVars(2, "copete", ''));
	$not_noticia->setCuerpo(Gral::getVars(2, "cuerpo", ''));
	$not_noticia->setFecha(Gral::getVars(2, "fecha", date('Y-m-d')));
	$not_noticia->setDestacado(Gral::getVars(2, "destacado", 0));
	$not_noticia->setObservacion(Gral::getVars(2, "observacion", ''));
	$not_noticia->setOrden(Gral::getVars(2, "orden", 0));
	$not_noticia->setEstado(Gral::getVars(2, "estado", 0));
	$not_noticia->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$not_noticia->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$not_noticia->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$not_noticia->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $not_noticia->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/not_noticia/not_noticia_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_not_noticia' width='90%'>
        
				<tr>
				  <td  id="label_not_noticia_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Titulo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_not_noticia_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='not_noticia_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='not_noticia_txt_descripcion' value='<?php Gral::_echoTxt($not_noticia->getDescripcion(), true) ?>' size='70' />            
                    <?php if(Lang::_lang('help_not_noticia_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_not_noticia_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_not_noticia_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_not_noticia_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_not_noticia_cmb_not_categoria_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_not_categoria_id' ?>" >
				  
                                        <?php Lang::_lang('NotCategoria', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_not_noticia_cmb_not_categoria_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('not_categoria_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'not_noticia_cmb_not_categoria_id', Gral::getCmbFiltro(NotCategoria::getNotCategoriasCmb(), '...'), $not_noticia->getNotCategoriaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_ALTA_CMB_EDIT_NOT_CATEGORIA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="not_noticia_cmb_not_categoria_id" clase_id="not_categoria" prefijo='not_noticia_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_not_categoria_id" <?php echo ($not_noticia->getNotCategoriaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="not_noticia_cmb_not_categoria_id" clase_id="not_categoria" prefijo='not_noticia_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_not_noticia_cmb_not_categoria_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_not_noticia_alta_not_categoria_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_not_noticia_alta_not_categoria_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_not_noticia_alta_not_categoria_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_not_noticia_alta_not_categoria_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('not_categoria_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_not_noticia_txa_copete" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_copete' ?>" >
				  
                                        <?php Lang::_lang('Copete', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_not_noticia_txa_copete" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('copete')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='not_noticia_txa_copete' rows='4' cols='70' id='not_noticia_txa_copete' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($not_noticia->getCopete(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_not_noticia_alta_copete', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_not_noticia_alta_copete', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_not_noticia_alta_copete', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_not_noticia_alta_copete', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('copete')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_not_noticia_rtf_cuerpo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cuerpo' ?>" >
				  
                                        <?php Lang::_lang('Cuerpo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_not_noticia_rtf_cuerpo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cuerpo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='not_noticia_rtf_cuerpo' rows='20' cols='60' id='not_noticia_rtf_cuerpo' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($not_noticia->getCuerpo(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_not_noticia_alta_cuerpo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_not_noticia_alta_cuerpo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_not_noticia_alta_cuerpo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_not_noticia_alta_cuerpo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cuerpo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_not_noticia_txt_fecha" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha' ?>" >
				  
                                        <?php Lang::_lang('Fecha', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_not_noticia_txt_fecha" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='not_noticia_txt_fecha' type='text' class='textbox <?php echo $error_input_css ?> date' id='not_noticia_txt_fecha' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($not_noticia->getFecha()), true) ?>' size='10' />
					<input type='button' id='cal_not_noticia_txt_fecha' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'not_noticia_txt_fecha', ifFormat: '%d/%m/%Y', button: 'cal_not_noticia_txt_fecha'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_not_noticia_alta_fecha', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_not_noticia_alta_fecha', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_not_noticia_alta_fecha', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_not_noticia_alta_fecha', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_not_noticia_cmb_destacado" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_destacado' ?>" >
				  
                                        <?php Lang::_lang('Destacado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_not_noticia_cmb_destacado" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('destacado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'not_noticia_cmb_destacado', GralSiNo::getGralSiNosCmb(), $not_noticia->getDestacado(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_not_noticia_alta_destacado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_not_noticia_alta_destacado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_not_noticia_alta_destacado', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_not_noticia_alta_destacado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('destacado')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_not_noticia_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_not_noticia_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='not_noticia_txa_observacion' rows='7' cols='60' id='not_noticia_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($not_noticia->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_not_noticia_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_not_noticia_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_not_noticia_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_not_noticia_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($not_noticia->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_not_noticia_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='not_noticia'/>
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

