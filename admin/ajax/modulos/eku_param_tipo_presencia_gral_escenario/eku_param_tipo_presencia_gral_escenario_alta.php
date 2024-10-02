<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_PRESENCIA_GRAL_ESCENARIO_ALTA')){
    echo "No tiene asignada la credencial EKU_PARAM_TIPO_PRESENCIA_GRAL_ESCENARIO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'eku_param_tipo_presencia_gral_escenario';
$db_nombre_pagina = 'eku_param_tipo_presencia_gral_escenario_alta';

$eku_param_tipo_presencia_gral_escenario = new EkuParamTipoPresenciaGralEscenario();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$eku_param_tipo_presencia_gral_escenario = new EkuParamTipoPresenciaGralEscenario();
	if(trim($hdn_id) != '') $eku_param_tipo_presencia_gral_escenario->setId($hdn_id, false);
	$eku_param_tipo_presencia_gral_escenario->setEkuParamTipoPresenciaId(Gral::getVars(1, "eku_param_tipo_presencia_gral_escenario_cmb_eku_param_tipo_presencia_id", null));
	$eku_param_tipo_presencia_gral_escenario->setGralEscenarioId(Gral::getVars(1, "eku_param_tipo_presencia_gral_escenario_cmb_gral_escenario_id", null));
	$eku_param_tipo_presencia_gral_escenario->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_param_tipo_presencia_gral_escenario_txt_creado")));
	$eku_param_tipo_presencia_gral_escenario->setCreadoPor(Gral::getVars(1, "eku_param_tipo_presencia_gral_escenario__creado_por", 0));
	switch($accion){
		case 'guardar':
			$error = $eku_param_tipo_presencia_gral_escenario->control();
			if(!$error->getExisteError()){
				$eku_param_tipo_presencia_gral_escenario->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: eku_param_tipo_presencia_gral_escenario_alta.php?cs=1&id='.$eku_param_tipo_presencia_gral_escenario->getId());
			}
		break;
		case 'guardarnvo':
			$error = $eku_param_tipo_presencia_gral_escenario->control();
			if(!$error->getExisteError()){
				$eku_param_tipo_presencia_gral_escenario->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: eku_param_tipo_presencia_gral_escenario_alta.php?cs=1');
				$eku_param_tipo_presencia_gral_escenario = new EkuParamTipoPresenciaGralEscenario();
			}
		break;
	}
	Gral::setSes('EkuParamTipoPresenciaGralEscenario_ULTIMO_INSERTADO', $eku_param_tipo_presencia_gral_escenario->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_eku_param_tipo_presencia_gral_escenario_id = Gral::getVars(2, $prefijo.'cmb_eku_param_tipo_presencia_gral_escenario_id', 0);
	if($cmb_eku_param_tipo_presencia_gral_escenario_id != 0){
		$eku_param_tipo_presencia_gral_escenario = EkuParamTipoPresenciaGralEscenario::getOxId($cmb_eku_param_tipo_presencia_gral_escenario_id);
	}else{
	
	$eku_param_tipo_presencia_gral_escenario->setEkuParamTipoPresenciaId(Gral::getVars(2, "eku_param_tipo_presencia_id", 'null'));
	$eku_param_tipo_presencia_gral_escenario->setGralEscenarioId(Gral::getVars(2, "gral_escenario_id", 'null'));
	$eku_param_tipo_presencia_gral_escenario->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$eku_param_tipo_presencia_gral_escenario->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $eku_param_tipo_presencia_gral_escenario->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/eku_param_tipo_presencia_gral_escenario/eku_param_tipo_presencia_gral_escenario_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_eku_param_tipo_presencia_gral_escenario' width='90%'>
        
				<tr>
				  <td  id="label_eku_param_tipo_presencia_gral_escenario_cmb_eku_param_tipo_presencia_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_param_tipo_presencia_id' ?>" >
				  
                                        <?php Lang::_lang('EkuParamTipoPresencia', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_param_tipo_presencia_gral_escenario_cmb_eku_param_tipo_presencia_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_param_tipo_presencia_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_param_tipo_presencia_gral_escenario_cmb_eku_param_tipo_presencia_id', Gral::getCmbFiltro(EkuParamTipoPresencia::getEkuParamTipoPresenciasCmb(), '...'), $eku_param_tipo_presencia_gral_escenario->getEkuParamTipoPresenciaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_PRESENCIA_GRAL_ESCENARIO_ALTA_CMB_EDIT_EKU_PARAM_TIPO_PRESENCIA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="eku_param_tipo_presencia_gral_escenario_cmb_eku_param_tipo_presencia_id" clase_id="eku_param_tipo_presencia" prefijo='eku_param_tipo_presencia_gral_escenario_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_param_tipo_presencia_id" <?php echo ($eku_param_tipo_presencia_gral_escenario->getEkuParamTipoPresenciaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="eku_param_tipo_presencia_gral_escenario_cmb_eku_param_tipo_presencia_id" clase_id="eku_param_tipo_presencia" prefijo='eku_param_tipo_presencia_gral_escenario_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_eku_param_tipo_presencia_gral_escenario_cmb_eku_param_tipo_presencia_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_eku_param_tipo_presencia_gral_escenario_alta_eku_param_tipo_presencia_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_param_tipo_presencia_gral_escenario_alta_eku_param_tipo_presencia_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_param_tipo_presencia_gral_escenario_alta_eku_param_tipo_presencia_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_param_tipo_presencia_gral_escenario_alta_eku_param_tipo_presencia_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_param_tipo_presencia_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_param_tipo_presencia_gral_escenario_cmb_gral_escenario_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_escenario_id' ?>" >
				  
                                        <?php Lang::_lang('GralEscenario', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_param_tipo_presencia_gral_escenario_cmb_gral_escenario_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_escenario_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_param_tipo_presencia_gral_escenario_cmb_gral_escenario_id', Gral::getCmbFiltro(GralEscenario::getGralEscenariosCmb(), '...'), $eku_param_tipo_presencia_gral_escenario->getGralEscenarioId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_PRESENCIA_GRAL_ESCENARIO_ALTA_CMB_EDIT_GRAL_ESCENARIO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="eku_param_tipo_presencia_gral_escenario_cmb_gral_escenario_id" clase_id="gral_escenario" prefijo='eku_param_tipo_presencia_gral_escenario_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_escenario_id" <?php echo ($eku_param_tipo_presencia_gral_escenario->getGralEscenarioId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="eku_param_tipo_presencia_gral_escenario_cmb_gral_escenario_id" clase_id="gral_escenario" prefijo='eku_param_tipo_presencia_gral_escenario_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_eku_param_tipo_presencia_gral_escenario_cmb_gral_escenario_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_eku_param_tipo_presencia_gral_escenario_alta_gral_escenario_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_param_tipo_presencia_gral_escenario_alta_gral_escenario_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_param_tipo_presencia_gral_escenario_alta_gral_escenario_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_param_tipo_presencia_gral_escenario_alta_gral_escenario_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_escenario_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_param_tipo_presencia_gral_escenario->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_eku_param_tipo_presencia_gral_escenario_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='eku_param_tipo_presencia_gral_escenario'/>
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

