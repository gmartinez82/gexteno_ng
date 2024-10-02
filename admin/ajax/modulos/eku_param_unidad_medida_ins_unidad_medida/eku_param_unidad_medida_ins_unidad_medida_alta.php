<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('EKU_PARAM_UNIDAD_MEDIDA_INS_UNIDAD_MEDIDA_ALTA')){
    echo "No tiene asignada la credencial EKU_PARAM_UNIDAD_MEDIDA_INS_UNIDAD_MEDIDA_ALTA. ";
    return false;
}

$db_nombre_objeto = 'eku_param_unidad_medida_ins_unidad_medida';
$db_nombre_pagina = 'eku_param_unidad_medida_ins_unidad_medida_alta';

$eku_param_unidad_medida_ins_unidad_medida = new EkuParamUnidadMedidaInsUnidadMedida();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$eku_param_unidad_medida_ins_unidad_medida = new EkuParamUnidadMedidaInsUnidadMedida();
	if(trim($hdn_id) != '') $eku_param_unidad_medida_ins_unidad_medida->setId($hdn_id, false);
	$eku_param_unidad_medida_ins_unidad_medida->setEkuParamUnidadMedidaId(Gral::getVars(1, "eku_param_unidad_medida_ins_unidad_medida_cmb_eku_param_unidad_medida_id", null));
	$eku_param_unidad_medida_ins_unidad_medida->setInsUnidadMedidaId(Gral::getVars(1, "eku_param_unidad_medida_ins_unidad_medida_cmb_ins_unidad_medida_id", null));
	$eku_param_unidad_medida_ins_unidad_medida->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_param_unidad_medida_ins_unidad_medida_txt_creado")));
	$eku_param_unidad_medida_ins_unidad_medida->setCreadoPor(Gral::getVars(1, "eku_param_unidad_medida_ins_unidad_medida__creado_por", 0));
	switch($accion){
		case 'guardar':
			$error = $eku_param_unidad_medida_ins_unidad_medida->control();
			if(!$error->getExisteError()){
				$eku_param_unidad_medida_ins_unidad_medida->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: eku_param_unidad_medida_ins_unidad_medida_alta.php?cs=1&id='.$eku_param_unidad_medida_ins_unidad_medida->getId());
			}
		break;
		case 'guardarnvo':
			$error = $eku_param_unidad_medida_ins_unidad_medida->control();
			if(!$error->getExisteError()){
				$eku_param_unidad_medida_ins_unidad_medida->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: eku_param_unidad_medida_ins_unidad_medida_alta.php?cs=1');
				$eku_param_unidad_medida_ins_unidad_medida = new EkuParamUnidadMedidaInsUnidadMedida();
			}
		break;
	}
	Gral::setSes('EkuParamUnidadMedidaInsUnidadMedida_ULTIMO_INSERTADO', $eku_param_unidad_medida_ins_unidad_medida->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_eku_param_unidad_medida_ins_unidad_medida_id = Gral::getVars(2, $prefijo.'cmb_eku_param_unidad_medida_ins_unidad_medida_id', 0);
	if($cmb_eku_param_unidad_medida_ins_unidad_medida_id != 0){
		$eku_param_unidad_medida_ins_unidad_medida = EkuParamUnidadMedidaInsUnidadMedida::getOxId($cmb_eku_param_unidad_medida_ins_unidad_medida_id);
	}else{
	
	$eku_param_unidad_medida_ins_unidad_medida->setEkuParamUnidadMedidaId(Gral::getVars(2, "eku_param_unidad_medida_id", 'null'));
	$eku_param_unidad_medida_ins_unidad_medida->setInsUnidadMedidaId(Gral::getVars(2, "ins_unidad_medida_id", 'null'));
	$eku_param_unidad_medida_ins_unidad_medida->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$eku_param_unidad_medida_ins_unidad_medida->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $eku_param_unidad_medida_ins_unidad_medida->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/eku_param_unidad_medida_ins_unidad_medida/eku_param_unidad_medida_ins_unidad_medida_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_eku_param_unidad_medida_ins_unidad_medida' width='90%'>
        
				<tr>
				  <td  id="label_eku_param_unidad_medida_ins_unidad_medida_cmb_eku_param_unidad_medida_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_param_unidad_medida_id' ?>" >
				  
                                        <?php Lang::_lang('EkuParamUnidadMedida', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_param_unidad_medida_ins_unidad_medida_cmb_eku_param_unidad_medida_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_param_unidad_medida_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_param_unidad_medida_ins_unidad_medida_cmb_eku_param_unidad_medida_id', Gral::getCmbFiltro(EkuParamUnidadMedida::getEkuParamUnidadMedidasCmb(), '...'), $eku_param_unidad_medida_ins_unidad_medida->getEkuParamUnidadMedidaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_UNIDAD_MEDIDA_INS_UNIDAD_MEDIDA_ALTA_CMB_EDIT_EKU_PARAM_UNIDAD_MEDIDA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="eku_param_unidad_medida_ins_unidad_medida_cmb_eku_param_unidad_medida_id" clase_id="eku_param_unidad_medida" prefijo='eku_param_unidad_medida_ins_unidad_medida_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_param_unidad_medida_id" <?php echo ($eku_param_unidad_medida_ins_unidad_medida->getEkuParamUnidadMedidaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="eku_param_unidad_medida_ins_unidad_medida_cmb_eku_param_unidad_medida_id" clase_id="eku_param_unidad_medida" prefijo='eku_param_unidad_medida_ins_unidad_medida_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_eku_param_unidad_medida_ins_unidad_medida_cmb_eku_param_unidad_medida_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_eku_param_unidad_medida_ins_unidad_medida_alta_eku_param_unidad_medida_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_param_unidad_medida_ins_unidad_medida_alta_eku_param_unidad_medida_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_param_unidad_medida_ins_unidad_medida_alta_eku_param_unidad_medida_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_param_unidad_medida_ins_unidad_medida_alta_eku_param_unidad_medida_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_param_unidad_medida_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_param_unidad_medida_ins_unidad_medida_cmb_ins_unidad_medida_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_unidad_medida_id' ?>" >
				  
                                        <?php Lang::_lang('InsUnidadMedida', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_param_unidad_medida_ins_unidad_medida_cmb_ins_unidad_medida_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_unidad_medida_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_param_unidad_medida_ins_unidad_medida_cmb_ins_unidad_medida_id', Gral::getCmbFiltro(InsUnidadMedida::getInsUnidadMedidasCmb(), '...'), $eku_param_unidad_medida_ins_unidad_medida->getInsUnidadMedidaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_UNIDAD_MEDIDA_INS_UNIDAD_MEDIDA_ALTA_CMB_EDIT_INS_UNIDAD_MEDIDA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="eku_param_unidad_medida_ins_unidad_medida_cmb_ins_unidad_medida_id" clase_id="ins_unidad_medida" prefijo='eku_param_unidad_medida_ins_unidad_medida_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_unidad_medida_id" <?php echo ($eku_param_unidad_medida_ins_unidad_medida->getInsUnidadMedidaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="eku_param_unidad_medida_ins_unidad_medida_cmb_ins_unidad_medida_id" clase_id="ins_unidad_medida" prefijo='eku_param_unidad_medida_ins_unidad_medida_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_eku_param_unidad_medida_ins_unidad_medida_cmb_ins_unidad_medida_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_eku_param_unidad_medida_ins_unidad_medida_alta_ins_unidad_medida_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_param_unidad_medida_ins_unidad_medida_alta_ins_unidad_medida_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_param_unidad_medida_ins_unidad_medida_alta_ins_unidad_medida_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_param_unidad_medida_ins_unidad_medida_alta_ins_unidad_medida_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_unidad_medida_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_param_unidad_medida_ins_unidad_medida->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_eku_param_unidad_medida_ins_unidad_medida_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='eku_param_unidad_medida_ins_unidad_medida'/>
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

