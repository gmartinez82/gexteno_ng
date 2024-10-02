<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('GEN_MENU_ITEM_ALTA')){
    echo "No tiene asignada la credencial GEN_MENU_ITEM_ALTA. ";
    return false;
}

$db_nombre_objeto = 'gen_menu_item';
$db_nombre_pagina = 'gen_menu_item_alta';

$gen_menu_item = new GenMenuItem();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$gen_menu_item = new GenMenuItem();
	if(trim($hdn_id) != '') $gen_menu_item->setId($hdn_id, false);
	$gen_menu_item->setDescripcion(Gral::getVars(1, "gen_menu_item_txt_descripcion"));
	$gen_menu_item->setGenArbolId(Gral::getVars(1, "gen_menu_item_cmb_gen_arbol_id", null));
	$gen_menu_item->setGenMenuItemPadre(Gral::getVars(1, "gen_menu_item_dbsug_gen_menu_item_padre_id", null));
	$gen_menu_item->setCodigo(Gral::getVars(1, "gen_menu_item_txt_codigo"));
	$gen_menu_item->setAlternativo(Gral::getVars(1, "gen_menu_item_txt_alternativo"));
	$gen_menu_item->setLink(Gral::getVars(1, "gen_menu_item_txt_link"));
	$gen_menu_item->setObservacion(Gral::getVars(1, "gen_menu_item_txa_observacion"));
	$gen_menu_item->setOrden(Gral::getVars(1, "gen_menu_item_txt_orden", 0));
	$gen_menu_item->setEstado(Gral::getVars(1, "gen_menu_item_cmb_estado", 0));
	$gen_menu_item->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "gen_menu_item_txt_creado")));
	$gen_menu_item->setCreadoPor(Gral::getVars(1, "gen_menu_item__creado_por", 0));
	$gen_menu_item->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "gen_menu_item_txt_modificado")));
	$gen_menu_item->setModificadoPor(Gral::getVars(1, "gen_menu_item__modificado_por", 0));

	$gen_menu_item_estado = new GenMenuItem();
	if(trim($hdn_id) != ''){
		$gen_menu_item_estado->setId($hdn_id);
		$gen_menu_item->setEstado($gen_menu_item_estado->getEstado());
				
	}else{
		$gen_menu_item->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $gen_menu_item->control();
			if(!$error->getExisteError()){
				$gen_menu_item->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: gen_menu_item_alta.php?cs=1&id='.$gen_menu_item->getId());
			}
		break;
		case 'guardarnvo':
			$error = $gen_menu_item->control();
			if(!$error->getExisteError()){
				$gen_menu_item->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: gen_menu_item_alta.php?cs=1');
				$gen_menu_item = new GenMenuItem();
			}
		break;
	}
	Gral::setSes('GenMenuItem_ULTIMO_INSERTADO', $gen_menu_item->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_gen_menu_item_id = Gral::getVars(2, $prefijo.'cmb_gen_menu_item_id', 0);
	if($cmb_gen_menu_item_id != 0){
		$gen_menu_item = GenMenuItem::getOxId($cmb_gen_menu_item_id);
	}else{
	
	$gen_menu_item->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$gen_menu_item->setGenArbolId(Gral::getVars(2, "gen_arbol_id", 'null'));
	$gen_menu_item->setGenMenuItemPadre(Gral::getVars(2, "gen_menu_item_padre", 'null'));
	$gen_menu_item->setCodigo(Gral::getVars(2, "codigo", ''));
	$gen_menu_item->setAlternativo(Gral::getVars(2, "alternativo", ''));
	$gen_menu_item->setLink(Gral::getVars(2, "link", ''));
	$gen_menu_item->setObservacion(Gral::getVars(2, "observacion", ''));
	$gen_menu_item->setOrden(Gral::getVars(2, "orden", 0));
	$gen_menu_item->setEstado(Gral::getVars(2, "estado", 0));
	$gen_menu_item->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$gen_menu_item->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$gen_menu_item->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$gen_menu_item->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $gen_menu_item->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/gen_menu_item/gen_menu_item_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_gen_menu_item' width='90%'>
        
				<tr>
				  <td  id="label_gen_menu_item_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_menu_item_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gen_menu_item_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='gen_menu_item_txt_descripcion' value='<?php Gral::_echoTxt($gen_menu_item->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_gen_menu_item_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_menu_item_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_menu_item_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_menu_item_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_menu_item_cmb_gen_arbol_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gen_arbol_id' ?>" >
				  
                                        <?php Lang::_lang('GenArbol', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_menu_item_cmb_gen_arbol_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gen_arbol_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gen_menu_item_cmb_gen_arbol_id', Gral::getCmbFiltro(GenArbol::getGenArbolsCmb(), '...'), $gen_menu_item->getGenArbolId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('GEN_MENU_ITEM_ALTA_CMB_EDIT_GEN_ARBOL')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="gen_menu_item_cmb_gen_arbol_id" clase_id="gen_arbol" prefijo='gen_menu_item_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gen_arbol_id" <?php echo ($gen_menu_item->getGenArbolId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="gen_menu_item_cmb_gen_arbol_id" clase_id="gen_arbol" prefijo='gen_menu_item_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_gen_menu_item_cmb_gen_arbol_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_gen_menu_item_alta_gen_arbol_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_menu_item_alta_gen_arbol_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_menu_item_alta_gen_arbol_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_menu_item_alta_gen_arbol_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gen_arbol_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_menu_item_dbsug_gen_menu_item_padre" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gen_menu_item_padre' ?>" >
				  
                                        <?php Lang::_lang('Padre', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_menu_item_dbsug_gen_menu_item_padre" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gen_menu_item_padre')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'gen_menu_item_dbsug_gen_menu_item_padre', 'ajax/modulos/gen_menu_item/gen_menu_item_dbsuggest.php', false, true, '', 'Ingrese ...', $gen_menu_item->getGenMenuItemPadre(), ($gen_menu_item->getGenMenuItemPadre() != 'null') ? GenMenuItem::getOxId($gen_menu_item->getGenMenuItemPadre())->getDescripcion(): '') ?>            
                    <?php if(Lang::_lang('help_gen_menu_item_alta_gen_menu_item_padre', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_menu_item_alta_gen_menu_item_padre', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_menu_item_alta_gen_menu_item_padre', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_menu_item_alta_gen_menu_item_padre', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gen_menu_item_padre')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_menu_item_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_menu_item_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gen_menu_item_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='gen_menu_item_txt_codigo' value='<?php Gral::_echoTxt($gen_menu_item->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gen_menu_item_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_menu_item_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_menu_item_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_menu_item_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_menu_item_txt_alternativo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_alternativo' ?>" >
				  
                                        <?php Lang::_lang('Alternativo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_menu_item_txt_alternativo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('alternativo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gen_menu_item_txt_alternativo' type='text' class='textbox <?php echo $error_input_css ?> ' id='gen_menu_item_txt_alternativo' value='<?php Gral::_echoTxt($gen_menu_item->getAlternativo(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_gen_menu_item_alta_alternativo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_menu_item_alta_alternativo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_menu_item_alta_alternativo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_menu_item_alta_alternativo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('alternativo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_menu_item_txt_link" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_link' ?>" >
				  
                                        <?php Lang::_lang('link', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_menu_item_txt_link" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('link')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gen_menu_item_txt_link' type='text' class='textbox <?php echo $error_input_css ?> ' id='gen_menu_item_txt_link' value='<?php Gral::_echoTxt($gen_menu_item->getLink(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_gen_menu_item_alta_link', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_menu_item_alta_link', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_menu_item_alta_link', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_menu_item_alta_link', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('link')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_menu_item_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_menu_item_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='gen_menu_item_txa_observacion' rows='10' cols='50' id='gen_menu_item_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($gen_menu_item->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_gen_menu_item_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_menu_item_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_menu_item_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_menu_item_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($gen_menu_item->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_gen_menu_item_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='gen_menu_item'/>
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

