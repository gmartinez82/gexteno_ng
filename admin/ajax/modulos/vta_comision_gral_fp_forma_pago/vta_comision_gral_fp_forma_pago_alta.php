<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('VTA_COMISION_GRAL_FP_FORMA_PAGO_ALTA')){
    echo "No tiene asignada la credencial VTA_COMISION_GRAL_FP_FORMA_PAGO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'vta_comision_gral_fp_forma_pago';
$db_nombre_pagina = 'vta_comision_gral_fp_forma_pago_alta';

$vta_comision_gral_fp_forma_pago = new VtaComisionGralFpFormaPago();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$vta_comision_gral_fp_forma_pago = new VtaComisionGralFpFormaPago();
	if(trim($hdn_id) != '') $vta_comision_gral_fp_forma_pago->setId($hdn_id, false);
	$vta_comision_gral_fp_forma_pago->setDescripcion(Gral::getVars(1, "vta_comision_gral_fp_forma_pago_txt_descripcion"));
	$vta_comision_gral_fp_forma_pago->setVtaComisionId(Gral::getVars(1, "vta_comision_gral_fp_forma_pago_cmb_vta_comision_id", null));
	$vta_comision_gral_fp_forma_pago->setGralFpFormaPagoId(Gral::getVars(1, "vta_comision_gral_fp_forma_pago_cmb_gral_fp_forma_pago_id", null));
	$vta_comision_gral_fp_forma_pago->setImporteAfectado(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "vta_comision_gral_fp_forma_pago_txt_importe_afectado", 0)));
	$vta_comision_gral_fp_forma_pago->setCodigo(Gral::getVars(1, "vta_comision_gral_fp_forma_pago_txt_codigo"));
	$vta_comision_gral_fp_forma_pago->setObservacion(Gral::getVars(1, "vta_comision_gral_fp_forma_pago_txa_observacion"));
	$vta_comision_gral_fp_forma_pago->setOrden(Gral::getVars(1, "vta_comision_gral_fp_forma_pago_txt_orden", 0));
	$vta_comision_gral_fp_forma_pago->setEstado(Gral::getVars(1, "vta_comision_gral_fp_forma_pago_cmb_estado", 0));
	$vta_comision_gral_fp_forma_pago->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_comision_gral_fp_forma_pago_txt_creado")));
	$vta_comision_gral_fp_forma_pago->setCreadoPor(Gral::getVars(1, "vta_comision_gral_fp_forma_pago__creado_por", 0));
	$vta_comision_gral_fp_forma_pago->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_comision_gral_fp_forma_pago_txt_modificado")));
	$vta_comision_gral_fp_forma_pago->setModificadoPor(Gral::getVars(1, "vta_comision_gral_fp_forma_pago__modificado_por", 0));

	$vta_comision_gral_fp_forma_pago_estado = new VtaComisionGralFpFormaPago();
	if(trim($hdn_id) != ''){
		$vta_comision_gral_fp_forma_pago_estado->setId($hdn_id);
		$vta_comision_gral_fp_forma_pago->setEstado($vta_comision_gral_fp_forma_pago_estado->getEstado());
				
	}else{
		$vta_comision_gral_fp_forma_pago->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $vta_comision_gral_fp_forma_pago->control();
			if(!$error->getExisteError()){
				$vta_comision_gral_fp_forma_pago->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: vta_comision_gral_fp_forma_pago_alta.php?cs=1&id='.$vta_comision_gral_fp_forma_pago->getId());
			}
		break;
		case 'guardarnvo':
			$error = $vta_comision_gral_fp_forma_pago->control();
			if(!$error->getExisteError()){
				$vta_comision_gral_fp_forma_pago->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: vta_comision_gral_fp_forma_pago_alta.php?cs=1');
				$vta_comision_gral_fp_forma_pago = new VtaComisionGralFpFormaPago();
			}
		break;
	}
	Gral::setSes('VtaComisionGralFpFormaPago_ULTIMO_INSERTADO', $vta_comision_gral_fp_forma_pago->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_vta_comision_gral_fp_forma_pago_id = Gral::getVars(2, $prefijo.'cmb_vta_comision_gral_fp_forma_pago_id', 0);
	if($cmb_vta_comision_gral_fp_forma_pago_id != 0){
		$vta_comision_gral_fp_forma_pago = VtaComisionGralFpFormaPago::getOxId($cmb_vta_comision_gral_fp_forma_pago_id);
	}else{
	
	$vta_comision_gral_fp_forma_pago->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$vta_comision_gral_fp_forma_pago->setVtaComisionId(Gral::getVars(2, "vta_comision_id", 'null'));
	$vta_comision_gral_fp_forma_pago->setGralFpFormaPagoId(Gral::getVars(2, "gral_fp_forma_pago_id", 'null'));
	$vta_comision_gral_fp_forma_pago->setImporteAfectado(Gral::getVars(2, "importe_afectado", 0));
	$vta_comision_gral_fp_forma_pago->setCodigo(Gral::getVars(2, "codigo", ''));
	$vta_comision_gral_fp_forma_pago->setObservacion(Gral::getVars(2, "observacion", ''));
	$vta_comision_gral_fp_forma_pago->setOrden(Gral::getVars(2, "orden", 0));
	$vta_comision_gral_fp_forma_pago->setEstado(Gral::getVars(2, "estado", 0));
	$vta_comision_gral_fp_forma_pago->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$vta_comision_gral_fp_forma_pago->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$vta_comision_gral_fp_forma_pago->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$vta_comision_gral_fp_forma_pago->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $vta_comision_gral_fp_forma_pago->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/vta_comision_gral_fp_forma_pago/vta_comision_gral_fp_forma_pago_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_vta_comision_gral_fp_forma_pago' width='90%'>
        
				<tr>
				  <td  id="label_vta_comision_gral_fp_forma_pago_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_comision_gral_fp_forma_pago_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_comision_gral_fp_forma_pago_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_comision_gral_fp_forma_pago_txt_descripcion' value='<?php Gral::_echoTxt($vta_comision_gral_fp_forma_pago->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_vta_comision_gral_fp_forma_pago_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_comision_gral_fp_forma_pago_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_comision_gral_fp_forma_pago_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_comision_gral_fp_forma_pago_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_comision_gral_fp_forma_pago_cmb_vta_comision_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_comision_id' ?>" >
				  
                                        <?php Lang::_lang('VtaComision', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_comision_gral_fp_forma_pago_cmb_vta_comision_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_comision_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_comision_gral_fp_forma_pago_cmb_vta_comision_id', Gral::getCmbFiltro(VtaComision::getVtaComisionsCmb(), '...'), $vta_comision_gral_fp_forma_pago->getVtaComisionId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_COMISION_GRAL_FP_FORMA_PAGO_ALTA_CMB_EDIT_VTA_COMISION')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_comision_gral_fp_forma_pago_cmb_vta_comision_id" clase_id="vta_comision" prefijo='vta_comision_gral_fp_forma_pago_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_comision_id" <?php echo ($vta_comision_gral_fp_forma_pago->getVtaComisionId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_comision_gral_fp_forma_pago_cmb_vta_comision_id" clase_id="vta_comision" prefijo='vta_comision_gral_fp_forma_pago_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_comision_gral_fp_forma_pago_cmb_vta_comision_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_comision_gral_fp_forma_pago_alta_vta_comision_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_comision_gral_fp_forma_pago_alta_vta_comision_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_comision_gral_fp_forma_pago_alta_vta_comision_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_comision_gral_fp_forma_pago_alta_vta_comision_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_comision_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_comision_gral_fp_forma_pago_cmb_gral_fp_forma_pago_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_fp_forma_pago_id' ?>" >
				  
                                        <?php Lang::_lang('GralFpFormaPago', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_comision_gral_fp_forma_pago_cmb_gral_fp_forma_pago_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_fp_forma_pago_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_comision_gral_fp_forma_pago_cmb_gral_fp_forma_pago_id', Gral::getCmbFiltro(GralFpFormaPago::getGralFpFormaPagosCmb(), '...'), $vta_comision_gral_fp_forma_pago->getGralFpFormaPagoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_COMISION_GRAL_FP_FORMA_PAGO_ALTA_CMB_EDIT_GRAL_FP_FORMA_PAGO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_comision_gral_fp_forma_pago_cmb_gral_fp_forma_pago_id" clase_id="gral_fp_forma_pago" prefijo='vta_comision_gral_fp_forma_pago_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_fp_forma_pago_id" <?php echo ($vta_comision_gral_fp_forma_pago->getGralFpFormaPagoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_comision_gral_fp_forma_pago_cmb_gral_fp_forma_pago_id" clase_id="gral_fp_forma_pago" prefijo='vta_comision_gral_fp_forma_pago_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_comision_gral_fp_forma_pago_cmb_gral_fp_forma_pago_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_comision_gral_fp_forma_pago_alta_gral_fp_forma_pago_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_comision_gral_fp_forma_pago_alta_gral_fp_forma_pago_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_comision_gral_fp_forma_pago_alta_gral_fp_forma_pago_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_comision_gral_fp_forma_pago_alta_gral_fp_forma_pago_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_fp_forma_pago_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_comision_gral_fp_forma_pago_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_comision_gral_fp_forma_pago_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_comision_gral_fp_forma_pago_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_comision_gral_fp_forma_pago_txt_codigo' value='<?php Gral::_echoTxt($vta_comision_gral_fp_forma_pago->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_comision_gral_fp_forma_pago_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_comision_gral_fp_forma_pago_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_comision_gral_fp_forma_pago_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_comision_gral_fp_forma_pago_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_comision_gral_fp_forma_pago_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_comision_gral_fp_forma_pago_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='vta_comision_gral_fp_forma_pago_txa_observacion' rows='10' cols='50' id='vta_comision_gral_fp_forma_pago_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_comision_gral_fp_forma_pago->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_vta_comision_gral_fp_forma_pago_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_comision_gral_fp_forma_pago_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_comision_gral_fp_forma_pago_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_comision_gral_fp_forma_pago_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_comision_gral_fp_forma_pago->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_vta_comision_gral_fp_forma_pago_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='vta_comision_gral_fp_forma_pago'/>
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

