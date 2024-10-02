<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('CLI_SUBCATEGORIA_ALTA')){
    echo "No tiene asignada la credencial CLI_SUBCATEGORIA_ALTA. ";
    return false;
}

$db_nombre_objeto = 'cli_subcategoria';
$db_nombre_pagina = 'cli_subcategoria_alta';

$cli_subcategoria = new CliSubcategoria();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$cli_subcategoria = new CliSubcategoria();
	if(trim($hdn_id) != '') $cli_subcategoria->setId($hdn_id, false);
	$cli_subcategoria->setDescripcion(Gral::getVars(1, "cli_subcategoria_txt_descripcion"));
	$cli_subcategoria->setCliCategoriaId(Gral::getVars(1, "cli_subcategoria_cmb_cli_categoria_id", null));
	$cli_subcategoria->setLimiteCtacteImporte(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "cli_subcategoria_txt_limite_ctacte_importe", 0)));
	$cli_subcategoria->setLimiteCtacteDias(Gral::getVars(1, "cli_subcategoria_txt_limite_ctacte_dias", 0));
	$cli_subcategoria->setCodigo(Gral::getVars(1, "cli_subcategoria_txt_codigo"));
	$cli_subcategoria->setObservacion(Gral::getVars(1, "cli_subcategoria_txa_observacion"));
	$cli_subcategoria->setOrden(Gral::getVars(1, "cli_subcategoria_txt_orden", 0));
	$cli_subcategoria->setEstado(Gral::getVars(1, "cli_subcategoria_cmb_estado", 0));
	$cli_subcategoria->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "cli_subcategoria_txt_creado")));
	$cli_subcategoria->setCreadoPor(Gral::getVars(1, "cli_subcategoria__creado_por", 0));
	$cli_subcategoria->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "cli_subcategoria_txt_modificado")));
	$cli_subcategoria->setModificadoPor(Gral::getVars(1, "cli_subcategoria__modificado_por", 0));

	$cli_subcategoria_estado = new CliSubcategoria();
	if(trim($hdn_id) != ''){
		$cli_subcategoria_estado->setId($hdn_id);
		$cli_subcategoria->setEstado($cli_subcategoria_estado->getEstado());
				
	}else{
		$cli_subcategoria->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $cli_subcategoria->control();
			if(!$error->getExisteError()){
				$cli_subcategoria->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: cli_subcategoria_alta.php?cs=1&id='.$cli_subcategoria->getId());
			}
		break;
		case 'guardarnvo':
			$error = $cli_subcategoria->control();
			if(!$error->getExisteError()){
				$cli_subcategoria->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: cli_subcategoria_alta.php?cs=1');
				$cli_subcategoria = new CliSubcategoria();
			}
		break;
	}
	Gral::setSes('CliSubcategoria_ULTIMO_INSERTADO', $cli_subcategoria->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_cli_subcategoria_id = Gral::getVars(2, $prefijo.'cmb_cli_subcategoria_id', 0);
	if($cmb_cli_subcategoria_id != 0){
		$cli_subcategoria = CliSubcategoria::getOxId($cmb_cli_subcategoria_id);
	}else{
	
	$cli_subcategoria->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$cli_subcategoria->setCliCategoriaId(Gral::getVars(2, "cli_categoria_id", 'null'));
	$cli_subcategoria->setLimiteCtacteImporte(Gral::getVars(2, "limite_ctacte_importe", 0));
	$cli_subcategoria->setLimiteCtacteDias(Gral::getVars(2, "limite_ctacte_dias", 0));
	$cli_subcategoria->setCodigo(Gral::getVars(2, "codigo", ''));
	$cli_subcategoria->setObservacion(Gral::getVars(2, "observacion", ''));
	$cli_subcategoria->setOrden(Gral::getVars(2, "orden", 0));
	$cli_subcategoria->setEstado(Gral::getVars(2, "estado", 0));
	$cli_subcategoria->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$cli_subcategoria->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$cli_subcategoria->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$cli_subcategoria->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $cli_subcategoria->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/cli_subcategoria/cli_subcategoria_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_cli_subcategoria' width='90%'>
        
				<tr>
				  <td  id="label_cli_subcategoria_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cli_subcategoria_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cli_subcategoria_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='cli_subcategoria_txt_descripcion' value='<?php Gral::_echoTxt($cli_subcategoria->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_cli_subcategoria_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cli_subcategoria_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cli_subcategoria_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cli_subcategoria_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cli_subcategoria_cmb_cli_categoria_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cli_categoria_id' ?>" >
				  
                                        <?php Lang::_lang('CliCategoria', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cli_subcategoria_cmb_cli_categoria_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cli_categoria_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'cli_subcategoria_cmb_cli_categoria_id', Gral::getCmbFiltro(CliCategoria::getCliCategoriasCmb(), '...'), $cli_subcategoria->getCliCategoriaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('CLI_SUBCATEGORIA_ALTA_CMB_EDIT_CLI_CATEGORIA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="cli_subcategoria_cmb_cli_categoria_id" clase_id="cli_categoria" prefijo='cli_subcategoria_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_cli_categoria_id" <?php echo ($cli_subcategoria->getCliCategoriaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="cli_subcategoria_cmb_cli_categoria_id" clase_id="cli_categoria" prefijo='cli_subcategoria_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_cli_subcategoria_cmb_cli_categoria_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_cli_subcategoria_alta_cli_categoria_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cli_subcategoria_alta_cli_categoria_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cli_subcategoria_alta_cli_categoria_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cli_subcategoria_alta_cli_categoria_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cli_categoria_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cli_subcategoria_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cli_subcategoria_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cli_subcategoria_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='cli_subcategoria_txt_codigo' value='<?php Gral::_echoTxt($cli_subcategoria->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_cli_subcategoria_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cli_subcategoria_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cli_subcategoria_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cli_subcategoria_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cli_subcategoria_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cli_subcategoria_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='cli_subcategoria_txa_observacion' rows='10' cols='50' id='cli_subcategoria_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($cli_subcategoria->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_cli_subcategoria_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cli_subcategoria_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cli_subcategoria_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cli_subcategoria_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($cli_subcategoria->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_cli_subcategoria_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='cli_subcategoria'/>
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

