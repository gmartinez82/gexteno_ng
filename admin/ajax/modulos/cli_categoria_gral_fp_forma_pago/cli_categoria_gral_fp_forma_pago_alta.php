<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('CLI_CATEGORIA_GRAL_FP_FORMA_PAGO_ALTA')){
    echo "No tiene asignada la credencial CLI_CATEGORIA_GRAL_FP_FORMA_PAGO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'cli_categoria_gral_fp_forma_pago';
$db_nombre_pagina = 'cli_categoria_gral_fp_forma_pago_alta';

$cli_categoria_gral_fp_forma_pago = new CliCategoriaGralFpFormaPago();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$cli_categoria_gral_fp_forma_pago = new CliCategoriaGralFpFormaPago();
	if(trim($hdn_id) != '') $cli_categoria_gral_fp_forma_pago->setId($hdn_id, false);
	$cli_categoria_gral_fp_forma_pago->setDescripcion(Gral::getVars(1, "cli_categoria_gral_fp_forma_pago_txt_descripcion"));
	$cli_categoria_gral_fp_forma_pago->setCliCategoriaId(Gral::getVars(1, "cli_categoria_gral_fp_forma_pago_cmb_cli_categoria_id", null));
	$cli_categoria_gral_fp_forma_pago->setGralFpFormaPagoId(Gral::getVars(1, "cli_categoria_gral_fp_forma_pago_cmb_gral_fp_forma_pago_id", null));
	$cli_categoria_gral_fp_forma_pago->setPredeterminado(Gral::getVars(1, "cli_categoria_gral_fp_forma_pago_cmb_predeterminado", 0));
	$cli_categoria_gral_fp_forma_pago->setCodigo(Gral::getVars(1, "cli_categoria_gral_fp_forma_pago_txt_codigo"));
	$cli_categoria_gral_fp_forma_pago->setObservacion(Gral::getVars(1, "cli_categoria_gral_fp_forma_pago_txa_observacion"));
	$cli_categoria_gral_fp_forma_pago->setOrden(Gral::getVars(1, "cli_categoria_gral_fp_forma_pago_txt_orden", 0));
	$cli_categoria_gral_fp_forma_pago->setEstado(Gral::getVars(1, "cli_categoria_gral_fp_forma_pago_cmb_estado", 0));
	$cli_categoria_gral_fp_forma_pago->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "cli_categoria_gral_fp_forma_pago_txt_creado")));
	$cli_categoria_gral_fp_forma_pago->setCreadoPor(Gral::getVars(1, "cli_categoria_gral_fp_forma_pago__creado_por", 0));
	$cli_categoria_gral_fp_forma_pago->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "cli_categoria_gral_fp_forma_pago_txt_modificado")));
	$cli_categoria_gral_fp_forma_pago->setModificadoPor(Gral::getVars(1, "cli_categoria_gral_fp_forma_pago__modificado_por", 0));

	$cli_categoria_gral_fp_forma_pago_estado = new CliCategoriaGralFpFormaPago();
	if(trim($hdn_id) != ''){
		$cli_categoria_gral_fp_forma_pago_estado->setId($hdn_id);
		$cli_categoria_gral_fp_forma_pago->setEstado($cli_categoria_gral_fp_forma_pago_estado->getEstado());
				
	}else{
		$cli_categoria_gral_fp_forma_pago->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $cli_categoria_gral_fp_forma_pago->control();
			if(!$error->getExisteError()){
				$cli_categoria_gral_fp_forma_pago->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: cli_categoria_gral_fp_forma_pago_alta.php?cs=1&id='.$cli_categoria_gral_fp_forma_pago->getId());
			}
		break;
		case 'guardarnvo':
			$error = $cli_categoria_gral_fp_forma_pago->control();
			if(!$error->getExisteError()){
				$cli_categoria_gral_fp_forma_pago->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: cli_categoria_gral_fp_forma_pago_alta.php?cs=1');
				$cli_categoria_gral_fp_forma_pago = new CliCategoriaGralFpFormaPago();
			}
		break;
	}
	Gral::setSes('CliCategoriaGralFpFormaPago_ULTIMO_INSERTADO', $cli_categoria_gral_fp_forma_pago->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_cli_categoria_gral_fp_forma_pago_id = Gral::getVars(2, $prefijo.'cmb_cli_categoria_gral_fp_forma_pago_id', 0);
	if($cmb_cli_categoria_gral_fp_forma_pago_id != 0){
		$cli_categoria_gral_fp_forma_pago = CliCategoriaGralFpFormaPago::getOxId($cmb_cli_categoria_gral_fp_forma_pago_id);
	}else{
	
	$cli_categoria_gral_fp_forma_pago->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$cli_categoria_gral_fp_forma_pago->setCliCategoriaId(Gral::getVars(2, "cli_categoria_id", 'null'));
	$cli_categoria_gral_fp_forma_pago->setGralFpFormaPagoId(Gral::getVars(2, "gral_fp_forma_pago_id", 'null'));
	$cli_categoria_gral_fp_forma_pago->setPredeterminado(Gral::getVars(2, "predeterminado", 0));
	$cli_categoria_gral_fp_forma_pago->setCodigo(Gral::getVars(2, "codigo", ''));
	$cli_categoria_gral_fp_forma_pago->setObservacion(Gral::getVars(2, "observacion", ''));
	$cli_categoria_gral_fp_forma_pago->setOrden(Gral::getVars(2, "orden", 0));
	$cli_categoria_gral_fp_forma_pago->setEstado(Gral::getVars(2, "estado", 0));
	$cli_categoria_gral_fp_forma_pago->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$cli_categoria_gral_fp_forma_pago->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$cli_categoria_gral_fp_forma_pago->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$cli_categoria_gral_fp_forma_pago->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $cli_categoria_gral_fp_forma_pago->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/cli_categoria_gral_fp_forma_pago/cli_categoria_gral_fp_forma_pago_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_cli_categoria_gral_fp_forma_pago' width='90%'>
        
				<tr>
				  <td  id="label_cli_categoria_gral_fp_forma_pago_cmb_cli_categoria_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cli_categoria_id' ?>" >
				  
                                        <?php Lang::_lang('CliCategoria', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cli_categoria_gral_fp_forma_pago_cmb_cli_categoria_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cli_categoria_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'cli_categoria_gral_fp_forma_pago_cmb_cli_categoria_id', Gral::getCmbFiltro(CliCategoria::getCliCategoriasCmb(), '...'), $cli_categoria_gral_fp_forma_pago->getCliCategoriaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('CLI_CATEGORIA_GRAL_FP_FORMA_PAGO_ALTA_CMB_EDIT_CLI_CATEGORIA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="cli_categoria_gral_fp_forma_pago_cmb_cli_categoria_id" clase_id="cli_categoria" prefijo='cli_categoria_gral_fp_forma_pago_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_cli_categoria_id" <?php echo ($cli_categoria_gral_fp_forma_pago->getCliCategoriaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="cli_categoria_gral_fp_forma_pago_cmb_cli_categoria_id" clase_id="cli_categoria" prefijo='cli_categoria_gral_fp_forma_pago_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_cli_categoria_gral_fp_forma_pago_cmb_cli_categoria_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_cli_categoria_gral_fp_forma_pago_alta_cli_categoria_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cli_categoria_gral_fp_forma_pago_alta_cli_categoria_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cli_categoria_gral_fp_forma_pago_alta_cli_categoria_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cli_categoria_gral_fp_forma_pago_alta_cli_categoria_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cli_categoria_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cli_categoria_gral_fp_forma_pago_cmb_gral_fp_forma_pago_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_fp_forma_pago_id' ?>" >
				  
                                        <?php Lang::_lang('GralFpFormaPago', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cli_categoria_gral_fp_forma_pago_cmb_gral_fp_forma_pago_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_fp_forma_pago_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'cli_categoria_gral_fp_forma_pago_cmb_gral_fp_forma_pago_id', Gral::getCmbFiltro(GralFpFormaPago::getGralFpFormaPagosCmb(), '...'), $cli_categoria_gral_fp_forma_pago->getGralFpFormaPagoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('CLI_CATEGORIA_GRAL_FP_FORMA_PAGO_ALTA_CMB_EDIT_GRAL_FP_FORMA_PAGO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="cli_categoria_gral_fp_forma_pago_cmb_gral_fp_forma_pago_id" clase_id="gral_fp_forma_pago" prefijo='cli_categoria_gral_fp_forma_pago_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_fp_forma_pago_id" <?php echo ($cli_categoria_gral_fp_forma_pago->getGralFpFormaPagoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="cli_categoria_gral_fp_forma_pago_cmb_gral_fp_forma_pago_id" clase_id="gral_fp_forma_pago" prefijo='cli_categoria_gral_fp_forma_pago_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_cli_categoria_gral_fp_forma_pago_cmb_gral_fp_forma_pago_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_cli_categoria_gral_fp_forma_pago_alta_gral_fp_forma_pago_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cli_categoria_gral_fp_forma_pago_alta_gral_fp_forma_pago_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cli_categoria_gral_fp_forma_pago_alta_gral_fp_forma_pago_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cli_categoria_gral_fp_forma_pago_alta_gral_fp_forma_pago_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_fp_forma_pago_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cli_categoria_gral_fp_forma_pago_cmb_predeterminado" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_predeterminado' ?>" >
				  
                                        <?php Lang::_lang('Predeterminado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cli_categoria_gral_fp_forma_pago_cmb_predeterminado" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('predeterminado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'cli_categoria_gral_fp_forma_pago_cmb_predeterminado', GralSiNo::getGralSiNosCmb(), $cli_categoria_gral_fp_forma_pago->getPredeterminado(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_cli_categoria_gral_fp_forma_pago_alta_predeterminado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cli_categoria_gral_fp_forma_pago_alta_predeterminado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cli_categoria_gral_fp_forma_pago_alta_predeterminado', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cli_categoria_gral_fp_forma_pago_alta_predeterminado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('predeterminado')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cli_categoria_gral_fp_forma_pago_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cli_categoria_gral_fp_forma_pago_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='cli_categoria_gral_fp_forma_pago_txa_observacion' rows='10' cols='50' id='cli_categoria_gral_fp_forma_pago_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($cli_categoria_gral_fp_forma_pago->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_cli_categoria_gral_fp_forma_pago_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cli_categoria_gral_fp_forma_pago_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cli_categoria_gral_fp_forma_pago_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cli_categoria_gral_fp_forma_pago_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($cli_categoria_gral_fp_forma_pago->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_cli_categoria_gral_fp_forma_pago_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='cli_categoria_gral_fp_forma_pago'/>
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

