<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('EKU_PARAM_CONDICION_CREDITO_GRAL_FP_MEDIO_PAGO_ALTA')){
    echo "No tiene asignada la credencial EKU_PARAM_CONDICION_CREDITO_GRAL_FP_MEDIO_PAGO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'eku_param_condicion_credito_gral_fp_medio_pago';
$db_nombre_pagina = 'eku_param_condicion_credito_gral_fp_medio_pago_alta';

$eku_param_condicion_credito_gral_fp_medio_pago = new EkuParamCondicionCreditoGralFpMedioPago();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$eku_param_condicion_credito_gral_fp_medio_pago = new EkuParamCondicionCreditoGralFpMedioPago();
	if(trim($hdn_id) != '') $eku_param_condicion_credito_gral_fp_medio_pago->setId($hdn_id, false);
	$eku_param_condicion_credito_gral_fp_medio_pago->setEkuParamCondicionCreditoId(Gral::getVars(1, "eku_param_condicion_credito_gral_fp_medio_pago_cmb_eku_param_condicion_credito_id", null));
	$eku_param_condicion_credito_gral_fp_medio_pago->setGralFpMedioPagoId(Gral::getVars(1, "eku_param_condicion_credito_gral_fp_medio_pago_cmb_gral_fp_medio_pago_id", null));
	$eku_param_condicion_credito_gral_fp_medio_pago->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_param_condicion_credito_gral_fp_medio_pago_txt_creado")));
	$eku_param_condicion_credito_gral_fp_medio_pago->setCreadoPor(Gral::getVars(1, "eku_param_condicion_credito_gral_fp_medio_pago__creado_por", 0));
	switch($accion){
		case 'guardar':
			$error = $eku_param_condicion_credito_gral_fp_medio_pago->control();
			if(!$error->getExisteError()){
				$eku_param_condicion_credito_gral_fp_medio_pago->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: eku_param_condicion_credito_gral_fp_medio_pago_alta.php?cs=1&id='.$eku_param_condicion_credito_gral_fp_medio_pago->getId());
			}
		break;
		case 'guardarnvo':
			$error = $eku_param_condicion_credito_gral_fp_medio_pago->control();
			if(!$error->getExisteError()){
				$eku_param_condicion_credito_gral_fp_medio_pago->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: eku_param_condicion_credito_gral_fp_medio_pago_alta.php?cs=1');
				$eku_param_condicion_credito_gral_fp_medio_pago = new EkuParamCondicionCreditoGralFpMedioPago();
			}
		break;
	}
	Gral::setSes('EkuParamCondicionCreditoGralFpMedioPago_ULTIMO_INSERTADO', $eku_param_condicion_credito_gral_fp_medio_pago->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_eku_param_condicion_credito_gral_fp_medio_pago_id = Gral::getVars(2, $prefijo.'cmb_eku_param_condicion_credito_gral_fp_medio_pago_id', 0);
	if($cmb_eku_param_condicion_credito_gral_fp_medio_pago_id != 0){
		$eku_param_condicion_credito_gral_fp_medio_pago = EkuParamCondicionCreditoGralFpMedioPago::getOxId($cmb_eku_param_condicion_credito_gral_fp_medio_pago_id);
	}else{
	
	$eku_param_condicion_credito_gral_fp_medio_pago->setEkuParamCondicionCreditoId(Gral::getVars(2, "eku_param_condicion_credito_id", 'null'));
	$eku_param_condicion_credito_gral_fp_medio_pago->setGralFpMedioPagoId(Gral::getVars(2, "gral_fp_medio_pago_id", 'null'));
	$eku_param_condicion_credito_gral_fp_medio_pago->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$eku_param_condicion_credito_gral_fp_medio_pago->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $eku_param_condicion_credito_gral_fp_medio_pago->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/eku_param_condicion_credito_gral_fp_medio_pago/eku_param_condicion_credito_gral_fp_medio_pago_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_eku_param_condicion_credito_gral_fp_medio_pago' width='90%'>
        
				<tr>
				  <td  id="label_eku_param_condicion_credito_gral_fp_medio_pago_cmb_eku_param_condicion_credito_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_param_condicion_credito_id' ?>" >
				  
                                        <?php Lang::_lang('EkuParamCondicionCredito', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_param_condicion_credito_gral_fp_medio_pago_cmb_eku_param_condicion_credito_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_param_condicion_credito_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_param_condicion_credito_gral_fp_medio_pago_cmb_eku_param_condicion_credito_id', Gral::getCmbFiltro(EkuParamCondicionCredito::getEkuParamCondicionCreditosCmb(), '...'), $eku_param_condicion_credito_gral_fp_medio_pago->getEkuParamCondicionCreditoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_CONDICION_CREDITO_GRAL_FP_MEDIO_PAGO_ALTA_CMB_EDIT_EKU_PARAM_CONDICION_CREDITO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="eku_param_condicion_credito_gral_fp_medio_pago_cmb_eku_param_condicion_credito_id" clase_id="eku_param_condicion_credito" prefijo='eku_param_condicion_credito_gral_fp_medio_pago_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_param_condicion_credito_id" <?php echo ($eku_param_condicion_credito_gral_fp_medio_pago->getEkuParamCondicionCreditoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="eku_param_condicion_credito_gral_fp_medio_pago_cmb_eku_param_condicion_credito_id" clase_id="eku_param_condicion_credito" prefijo='eku_param_condicion_credito_gral_fp_medio_pago_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_eku_param_condicion_credito_gral_fp_medio_pago_cmb_eku_param_condicion_credito_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_eku_param_condicion_credito_gral_fp_medio_pago_alta_eku_param_condicion_credito_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_param_condicion_credito_gral_fp_medio_pago_alta_eku_param_condicion_credito_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_param_condicion_credito_gral_fp_medio_pago_alta_eku_param_condicion_credito_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_param_condicion_credito_gral_fp_medio_pago_alta_eku_param_condicion_credito_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_param_condicion_credito_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_param_condicion_credito_gral_fp_medio_pago_cmb_gral_fp_medio_pago_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_fp_medio_pago_id' ?>" >
				  
                                        <?php Lang::_lang('GralFpMedioPago', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_param_condicion_credito_gral_fp_medio_pago_cmb_gral_fp_medio_pago_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_fp_medio_pago_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_param_condicion_credito_gral_fp_medio_pago_cmb_gral_fp_medio_pago_id', Gral::getCmbFiltro(GralFpMedioPago::getGralFpMedioPagosCmb(), '...'), $eku_param_condicion_credito_gral_fp_medio_pago->getGralFpMedioPagoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_CONDICION_CREDITO_GRAL_FP_MEDIO_PAGO_ALTA_CMB_EDIT_GRAL_FP_MEDIO_PAGO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="eku_param_condicion_credito_gral_fp_medio_pago_cmb_gral_fp_medio_pago_id" clase_id="gral_fp_medio_pago" prefijo='eku_param_condicion_credito_gral_fp_medio_pago_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_fp_medio_pago_id" <?php echo ($eku_param_condicion_credito_gral_fp_medio_pago->getGralFpMedioPagoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="eku_param_condicion_credito_gral_fp_medio_pago_cmb_gral_fp_medio_pago_id" clase_id="gral_fp_medio_pago" prefijo='eku_param_condicion_credito_gral_fp_medio_pago_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_eku_param_condicion_credito_gral_fp_medio_pago_cmb_gral_fp_medio_pago_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_eku_param_condicion_credito_gral_fp_medio_pago_alta_gral_fp_medio_pago_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_param_condicion_credito_gral_fp_medio_pago_alta_gral_fp_medio_pago_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_param_condicion_credito_gral_fp_medio_pago_alta_gral_fp_medio_pago_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_param_condicion_credito_gral_fp_medio_pago_alta_gral_fp_medio_pago_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_fp_medio_pago_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_param_condicion_credito_gral_fp_medio_pago->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_eku_param_condicion_credito_gral_fp_medio_pago_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='eku_param_condicion_credito_gral_fp_medio_pago'/>
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

