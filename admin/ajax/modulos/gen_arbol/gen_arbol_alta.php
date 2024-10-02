<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('GEN_ARBOL_ALTA')){
    echo "No tiene asignada la credencial GEN_ARBOL_ALTA. ";
    return false;
}

$db_nombre_objeto = 'gen_arbol';
$db_nombre_pagina = 'gen_arbol_alta';

$gen_arbol = new GenArbol();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$gen_arbol = new GenArbol();
	if(trim($hdn_id) != '') $gen_arbol->setId($hdn_id, false);
	$gen_arbol->setDescripcion(Gral::getVars(1, "gen_arbol_txt_descripcion"));
	$gen_arbol->setGenArbolTipoId(Gral::getVars(1, "gen_arbol_cmb_gen_arbol_tipo_id", null));
	$gen_arbol->setCodigo(Gral::getVars(1, "gen_arbol_txt_codigo"));
	$gen_arbol->setPhpClase(Gral::getVars(1, "gen_arbol_txt_php_clase"));
	$gen_arbol->setBdTabla(Gral::getVars(1, "gen_arbol_txt_bd_tabla"));
	$gen_arbol->setObservacion(Gral::getVars(1, "gen_arbol_txa_observacion"));
	$gen_arbol->setOrden(Gral::getVars(1, "gen_arbol_txt_orden", 0));
	$gen_arbol->setEstado(Gral::getVars(1, "gen_arbol_cmb_estado", 0));
	$gen_arbol->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "gen_arbol_txt_creado")));
	$gen_arbol->setCreadoPor(Gral::getVars(1, "gen_arbol__creado_por", 0));
	$gen_arbol->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "gen_arbol_txt_modificado")));
	$gen_arbol->setModificadoPor(Gral::getVars(1, "gen_arbol__modificado_por", 0));

	$gen_arbol_estado = new GenArbol();
	if(trim($hdn_id) != ''){
		$gen_arbol_estado->setId($hdn_id);
		$gen_arbol->setEstado($gen_arbol_estado->getEstado());
				
	}else{
		$gen_arbol->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $gen_arbol->control();
			if(!$error->getExisteError()){
				$gen_arbol->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: gen_arbol_alta.php?cs=1&id='.$gen_arbol->getId());
			}
		break;
		case 'guardarnvo':
			$error = $gen_arbol->control();
			if(!$error->getExisteError()){
				$gen_arbol->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: gen_arbol_alta.php?cs=1');
				$gen_arbol = new GenArbol();
			}
		break;
	}
	Gral::setSes('GenArbol_ULTIMO_INSERTADO', $gen_arbol->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_gen_arbol_id = Gral::getVars(2, $prefijo.'cmb_gen_arbol_id', 0);
	if($cmb_gen_arbol_id != 0){
		$gen_arbol = GenArbol::getOxId($cmb_gen_arbol_id);
	}else{
	
	$gen_arbol->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$gen_arbol->setGenArbolTipoId(Gral::getVars(2, "gen_arbol_tipo_id", 'null'));
	$gen_arbol->setCodigo(Gral::getVars(2, "codigo", ''));
	$gen_arbol->setPhpClase(Gral::getVars(2, "php_clase", ''));
	$gen_arbol->setBdTabla(Gral::getVars(2, "bd_tabla", ''));
	$gen_arbol->setObservacion(Gral::getVars(2, "observacion", ''));
	$gen_arbol->setOrden(Gral::getVars(2, "orden", 0));
	$gen_arbol->setEstado(Gral::getVars(2, "estado", 0));
	$gen_arbol->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$gen_arbol->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$gen_arbol->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$gen_arbol->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $gen_arbol->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/gen_arbol/gen_arbol_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_gen_arbol' width='90%'>
        
				<tr>
				  <td  id="label_gen_arbol_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_arbol_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gen_arbol_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='gen_arbol_txt_descripcion' value='<?php Gral::_echoTxt($gen_arbol->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_gen_arbol_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_arbol_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_arbol_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_arbol_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_arbol_cmb_gen_arbol_tipo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gen_arbol_tipo_id' ?>" >
				  
                                        <?php Lang::_lang('GenArbolTipo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_arbol_cmb_gen_arbol_tipo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gen_arbol_tipo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gen_arbol_cmb_gen_arbol_tipo_id', Gral::getCmbFiltro(GenArbolTipo::getGenArbolTiposCmb(), '...'), $gen_arbol->getGenArbolTipoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('GEN_ARBOL_ALTA_CMB_EDIT_GEN_ARBOL_TIPO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="gen_arbol_cmb_gen_arbol_tipo_id" clase_id="gen_arbol_tipo" prefijo='gen_arbol_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gen_arbol_tipo_id" <?php echo ($gen_arbol->getGenArbolTipoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="gen_arbol_cmb_gen_arbol_tipo_id" clase_id="gen_arbol_tipo" prefijo='gen_arbol_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_gen_arbol_cmb_gen_arbol_tipo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_gen_arbol_alta_gen_arbol_tipo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_arbol_alta_gen_arbol_tipo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_arbol_alta_gen_arbol_tipo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_arbol_alta_gen_arbol_tipo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gen_arbol_tipo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_arbol_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_arbol_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gen_arbol_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='gen_arbol_txt_codigo' value='<?php Gral::_echoTxt($gen_arbol->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gen_arbol_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_arbol_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_arbol_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_arbol_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_arbol_txt_php_clase" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_php_clase' ?>" >
				  
                                        <?php Lang::_lang('PHP Clase', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_arbol_txt_php_clase" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('php_clase')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gen_arbol_txt_php_clase' type='text' class='textbox <?php echo $error_input_css ?> ' id='gen_arbol_txt_php_clase' value='<?php Gral::_echoTxt($gen_arbol->getPhpClase(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gen_arbol_alta_php_clase', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_arbol_alta_php_clase', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_arbol_alta_php_clase', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_arbol_alta_php_clase', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('php_clase')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_arbol_txt_bd_tabla" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_bd_tabla' ?>" >
				  
                                        <?php Lang::_lang('BD Tabla', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_arbol_txt_bd_tabla" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('bd_tabla')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gen_arbol_txt_bd_tabla' type='text' class='textbox <?php echo $error_input_css ?> ' id='gen_arbol_txt_bd_tabla' value='<?php Gral::_echoTxt($gen_arbol->getBdTabla(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gen_arbol_alta_bd_tabla', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_arbol_alta_bd_tabla', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_arbol_alta_bd_tabla', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_arbol_alta_bd_tabla', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('bd_tabla')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_arbol_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_arbol_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='gen_arbol_txa_observacion' rows='10' cols='50' id='gen_arbol_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($gen_arbol->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_gen_arbol_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_arbol_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_arbol_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_arbol_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($gen_arbol->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_gen_arbol_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='gen_arbol'/>
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

