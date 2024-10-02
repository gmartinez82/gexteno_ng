<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('INS_CATEGORIA_ALTA')){
    echo "No tiene asignada la credencial INS_CATEGORIA_ALTA. ";
    return false;
}

$db_nombre_objeto = 'ins_categoria';
$db_nombre_pagina = 'ins_categoria_alta';

$ins_categoria = new InsCategoria();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$ins_categoria = new InsCategoria();
	if(trim($hdn_id) != '') $ins_categoria->setId($hdn_id, false);
	$ins_categoria->setDescripcion(Gral::getVars(1, "ins_categoria_txt_descripcion"));
	$ins_categoria->setGenArbolId(Gral::getVars(1, "ins_categoria_cmb_gen_arbol_id", null));
	$ins_categoria->setInsCategoriaPadre(Gral::getVars(1, "ins_categoria_dbsug_ins_categoria_padre_id", null));
	$ins_categoria->setCodigo(Gral::getVars(1, "ins_categoria_txt_codigo"));
	$ins_categoria->setFamiliaDescripcion(Gral::getVars(1, "ins_categoria_txt_familia_descripcion"));
	$ins_categoria->setObservacion(Gral::getVars(1, "ins_categoria_txa_observacion"));
	$ins_categoria->setOrden(Gral::getVars(1, "ins_categoria_txt_orden", 0));
	$ins_categoria->setEstado(Gral::getVars(1, "ins_categoria__estado", 0));
	$ins_categoria->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_categoria_txt_creado")));
	$ins_categoria->setCreadoPor(Gral::getVars(1, "ins_categoria__creado_por", 0));
	$ins_categoria->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_categoria_txt_modificado")));
	$ins_categoria->setModificadoPor(Gral::getVars(1, "ins_categoria__modificado_por", 0));

	$ins_categoria_estado = new InsCategoria();
	if(trim($hdn_id) != ''){
		$ins_categoria_estado->setId($hdn_id);
		$ins_categoria->setEstado($ins_categoria_estado->getEstado());
				
	}else{
		$ins_categoria->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $ins_categoria->control();
			if(!$error->getExisteError()){
				$ins_categoria->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: ins_categoria_alta.php?cs=1&id='.$ins_categoria->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ins_categoria->control();
			if(!$error->getExisteError()){
				$ins_categoria->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: ins_categoria_alta.php?cs=1');
				$ins_categoria = new InsCategoria();
			}
		break;
	}
	Gral::setSes('InsCategoria_ULTIMO_INSERTADO', $ins_categoria->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_ins_categoria_id = Gral::getVars(2, $prefijo.'cmb_ins_categoria_id', 0);
	if($cmb_ins_categoria_id != 0){
		$ins_categoria = InsCategoria::getOxId($cmb_ins_categoria_id);
	}else{
	
	$ins_categoria->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$ins_categoria->setGenArbolId(Gral::getVars(2, "gen_arbol_id", 'null'));
	$ins_categoria->setInsCategoriaPadre(Gral::getVars(2, "ins_categoria_padre", 'null'));
	$ins_categoria->setCodigo(Gral::getVars(2, "codigo", ''));
	$ins_categoria->setFamiliaDescripcion(Gral::getVars(2, "familia_descripcion", ''));
	$ins_categoria->setObservacion(Gral::getVars(2, "observacion", ''));
	$ins_categoria->setOrden(Gral::getVars(2, "orden", 0));
	$ins_categoria->setEstado(Gral::getVars(2, "estado", 0));
	$ins_categoria->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ins_categoria->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ins_categoria->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ins_categoria->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $ins_categoria->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ins_categoria/ins_categoria_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ins_categoria' width='90%'>
        
				<tr>
				  <td  id="label_ins_categoria_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_categoria_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_categoria_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_categoria_txt_descripcion' value='<?php Gral::_echoTxt($ins_categoria->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_ins_categoria_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_categoria_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_categoria_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_categoria_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_categoria_cmb_gen_arbol_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gen_arbol_id' ?>" >
				  
                                        <?php Lang::_lang('GenArbol', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_categoria_cmb_gen_arbol_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gen_arbol_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_categoria_cmb_gen_arbol_id', Gral::getCmbFiltro(GenArbol::getGenArbolsCmb(), '...'), $ins_categoria->getGenArbolId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('INS_CATEGORIA_ALTA_CMB_EDIT_GEN_ARBOL')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ins_categoria_cmb_gen_arbol_id" clase_id="gen_arbol" prefijo='ins_categoria_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gen_arbol_id" <?php echo ($ins_categoria->getGenArbolId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ins_categoria_cmb_gen_arbol_id" clase_id="gen_arbol" prefijo='ins_categoria_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ins_categoria_cmb_gen_arbol_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ins_categoria_alta_gen_arbol_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_categoria_alta_gen_arbol_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_categoria_alta_gen_arbol_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_categoria_alta_gen_arbol_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gen_arbol_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_categoria_dbsug_ins_categoria_padre" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_categoria_padre' ?>" >
				  
                                        <?php Lang::_lang('InsCategoriaPadre', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_categoria_dbsug_ins_categoria_padre" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_categoria_padre')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'ins_categoria_dbsug_ins_categoria_padre', 'ajax/modulos/ins_categoria/ins_categoria_dbsuggest.php', false, true, '', 'Ingrese ...', $ins_categoria->getInsCategoriaPadre(), ($ins_categoria->getInsCategoriaPadre() != 'null') ? InsCategoria::getOxId($ins_categoria->getInsCategoriaPadre())->getDescripcion(): '') ?>            
                    <?php if(Lang::_lang('help_ins_categoria_alta_ins_categoria_padre', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_categoria_alta_ins_categoria_padre', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_categoria_alta_ins_categoria_padre', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_categoria_alta_ins_categoria_padre', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_categoria_padre')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_categoria_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_categoria_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_categoria_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_categoria_txt_codigo' value='<?php Gral::_echoTxt($ins_categoria->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_categoria_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_categoria_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_categoria_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_categoria_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_categoria_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_categoria_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='ins_categoria_txa_observacion' rows='10' cols='50' id='ins_categoria_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($ins_categoria->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_ins_categoria_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_categoria_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_categoria_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_categoria_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ins_categoria->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ins_categoria_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ins_categoria'/>
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

