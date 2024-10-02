<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('VTA_RECIBO_ITEM_CHEQUE_ALTA')){
    echo "No tiene asignada la credencial VTA_RECIBO_ITEM_CHEQUE_ALTA. ";
    return false;
}

$db_nombre_objeto = 'vta_recibo_item_cheque';
$db_nombre_pagina = 'vta_recibo_item_cheque_alta';

$vta_recibo_item_cheque = new VtaReciboItemCheque();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$vta_recibo_item_cheque = new VtaReciboItemCheque();
	if(trim($hdn_id) != '') $vta_recibo_item_cheque->setId($hdn_id, false);
	$vta_recibo_item_cheque->setDescripcion(Gral::getVars(1, "vta_recibo_item_cheque_txt_descripcion"));
	$vta_recibo_item_cheque->setVtaReciboId(Gral::getVars(1, "vta_recibo_item_cheque_cmb_vta_recibo_id", null));
	$vta_recibo_item_cheque->setVtaReciboItemId(Gral::getVars(1, "vta_recibo_item_cheque_cmb_vta_recibo_item_id", null));
	$vta_recibo_item_cheque->setGralBancoId(Gral::getVars(1, "vta_recibo_item_cheque_cmb_gral_banco_id", null));
	$vta_recibo_item_cheque->setNumeroCheque(Gral::getVars(1, "vta_recibo_item_cheque_txt_numero_cheque"));
	$vta_recibo_item_cheque->setFechaEmision(Gral::getFechaToDb(Gral::getVars(1, "vta_recibo_item_cheque_txt_fecha_emision")));
	$vta_recibo_item_cheque->setFechaCobro(Gral::getFechaToDb(Gral::getVars(1, "vta_recibo_item_cheque_txt_fecha_cobro")));
	$vta_recibo_item_cheque->setFirmante(Gral::getVars(1, "vta_recibo_item_cheque_txt_firmante"));
	$vta_recibo_item_cheque->setEntregador(Gral::getVars(1, "vta_recibo_item_cheque_txt_entregador"));
	$vta_recibo_item_cheque->setCodigo(Gral::getVars(1, "vta_recibo_item_cheque_txt_codigo"));
	$vta_recibo_item_cheque->setObservacion(Gral::getVars(1, "vta_recibo_item_cheque_txa_observacion"));
	$vta_recibo_item_cheque->setOrden(Gral::getVars(1, "vta_recibo_item_cheque_txt_orden", 0));
	$vta_recibo_item_cheque->setEstado(Gral::getVars(1, "vta_recibo_item_cheque_cmb_estado", 0));
	$vta_recibo_item_cheque->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_recibo_item_cheque_txt_creado")));
	$vta_recibo_item_cheque->setCreadoPor(Gral::getVars(1, "vta_recibo_item_cheque__creado_por", 0));
	$vta_recibo_item_cheque->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_recibo_item_cheque_txt_modificado")));
	$vta_recibo_item_cheque->setModificadoPor(Gral::getVars(1, "vta_recibo_item_cheque__modificado_por", 0));

	$vta_recibo_item_cheque_estado = new VtaReciboItemCheque();
	if(trim($hdn_id) != ''){
		$vta_recibo_item_cheque_estado->setId($hdn_id);
		$vta_recibo_item_cheque->setEstado($vta_recibo_item_cheque_estado->getEstado());
				
	}else{
		$vta_recibo_item_cheque->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $vta_recibo_item_cheque->control();
			if(!$error->getExisteError()){
				$vta_recibo_item_cheque->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: vta_recibo_item_cheque_alta.php?cs=1&id='.$vta_recibo_item_cheque->getId());
			}
		break;
		case 'guardarnvo':
			$error = $vta_recibo_item_cheque->control();
			if(!$error->getExisteError()){
				$vta_recibo_item_cheque->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: vta_recibo_item_cheque_alta.php?cs=1');
				$vta_recibo_item_cheque = new VtaReciboItemCheque();
			}
		break;
	}
	Gral::setSes('VtaReciboItemCheque_ULTIMO_INSERTADO', $vta_recibo_item_cheque->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_vta_recibo_item_cheque_id = Gral::getVars(2, $prefijo.'cmb_vta_recibo_item_cheque_id', 0);
	if($cmb_vta_recibo_item_cheque_id != 0){
		$vta_recibo_item_cheque = VtaReciboItemCheque::getOxId($cmb_vta_recibo_item_cheque_id);
	}else{
	
	$vta_recibo_item_cheque->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$vta_recibo_item_cheque->setVtaReciboId(Gral::getVars(2, "vta_recibo_id", 'null'));
	$vta_recibo_item_cheque->setVtaReciboItemId(Gral::getVars(2, "vta_recibo_item_id", 'null'));
	$vta_recibo_item_cheque->setGralBancoId(Gral::getVars(2, "gral_banco_id", 'null'));
	$vta_recibo_item_cheque->setNumeroCheque(Gral::getVars(2, "numero_cheque", ''));
	$vta_recibo_item_cheque->setFechaEmision(Gral::getVars(2, "fecha_emision", date('Y-m-d')));
	$vta_recibo_item_cheque->setFechaCobro(Gral::getVars(2, "fecha_cobro", date('Y-m-d')));
	$vta_recibo_item_cheque->setFirmante(Gral::getVars(2, "firmante", ''));
	$vta_recibo_item_cheque->setEntregador(Gral::getVars(2, "entregador", ''));
	$vta_recibo_item_cheque->setCodigo(Gral::getVars(2, "codigo", ''));
	$vta_recibo_item_cheque->setObservacion(Gral::getVars(2, "observacion", ''));
	$vta_recibo_item_cheque->setOrden(Gral::getVars(2, "orden", 0));
	$vta_recibo_item_cheque->setEstado(Gral::getVars(2, "estado", 0));
	$vta_recibo_item_cheque->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$vta_recibo_item_cheque->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$vta_recibo_item_cheque->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$vta_recibo_item_cheque->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $vta_recibo_item_cheque->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/vta_recibo_item_cheque/vta_recibo_item_cheque_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_vta_recibo_item_cheque' width='90%'>
        
				<tr>
				  <td  id="label_vta_recibo_item_cheque_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_recibo_item_cheque_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_recibo_item_cheque_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_recibo_item_cheque_txt_descripcion' value='<?php Gral::_echoTxt($vta_recibo_item_cheque->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_vta_recibo_item_cheque_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_recibo_item_cheque_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_recibo_item_cheque_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_recibo_item_cheque_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_recibo_item_cheque_cmb_vta_recibo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_recibo_id' ?>" >
				  
                                        <?php Lang::_lang('VtaRecibo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_recibo_item_cheque_cmb_vta_recibo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_recibo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_recibo_item_cheque_cmb_vta_recibo_id', Gral::getCmbFiltro(VtaRecibo::getVtaRecibosCmb(), '...'), $vta_recibo_item_cheque->getVtaReciboId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ITEM_CHEQUE_ALTA_CMB_EDIT_VTA_RECIBO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_recibo_item_cheque_cmb_vta_recibo_id" clase_id="vta_recibo" prefijo='vta_recibo_item_cheque_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_recibo_id" <?php echo ($vta_recibo_item_cheque->getVtaReciboId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_recibo_item_cheque_cmb_vta_recibo_id" clase_id="vta_recibo" prefijo='vta_recibo_item_cheque_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_recibo_item_cheque_cmb_vta_recibo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_recibo_item_cheque_alta_vta_recibo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_recibo_item_cheque_alta_vta_recibo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_recibo_item_cheque_alta_vta_recibo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_recibo_item_cheque_alta_vta_recibo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_recibo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_recibo_item_cheque_cmb_vta_recibo_item_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_recibo_item_id' ?>" >
				  
                                        <?php Lang::_lang('VtaReciboItem', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_recibo_item_cheque_cmb_vta_recibo_item_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_recibo_item_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_recibo_item_cheque_cmb_vta_recibo_item_id', Gral::getCmbFiltro(VtaReciboItem::getVtaReciboItemsCmb(), '...'), $vta_recibo_item_cheque->getVtaReciboItemId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ITEM_CHEQUE_ALTA_CMB_EDIT_VTA_RECIBO_ITEM')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_recibo_item_cheque_cmb_vta_recibo_item_id" clase_id="vta_recibo_item" prefijo='vta_recibo_item_cheque_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_recibo_item_id" <?php echo ($vta_recibo_item_cheque->getVtaReciboItemId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_recibo_item_cheque_cmb_vta_recibo_item_id" clase_id="vta_recibo_item" prefijo='vta_recibo_item_cheque_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_recibo_item_cheque_cmb_vta_recibo_item_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_recibo_item_cheque_alta_vta_recibo_item_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_recibo_item_cheque_alta_vta_recibo_item_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_recibo_item_cheque_alta_vta_recibo_item_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_recibo_item_cheque_alta_vta_recibo_item_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_recibo_item_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_recibo_item_cheque_cmb_gral_banco_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_banco_id' ?>" >
				  
                                        <?php Lang::_lang('GralBanco', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_recibo_item_cheque_cmb_gral_banco_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_banco_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_recibo_item_cheque_cmb_gral_banco_id', Gral::getCmbFiltro(GralBanco::getGralBancosCmb(), '...'), $vta_recibo_item_cheque->getGralBancoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ITEM_CHEQUE_ALTA_CMB_EDIT_GRAL_BANCO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_recibo_item_cheque_cmb_gral_banco_id" clase_id="gral_banco" prefijo='vta_recibo_item_cheque_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_banco_id" <?php echo ($vta_recibo_item_cheque->getGralBancoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_recibo_item_cheque_cmb_gral_banco_id" clase_id="gral_banco" prefijo='vta_recibo_item_cheque_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_recibo_item_cheque_cmb_gral_banco_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_recibo_item_cheque_alta_gral_banco_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_recibo_item_cheque_alta_gral_banco_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_recibo_item_cheque_alta_gral_banco_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_recibo_item_cheque_alta_gral_banco_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_banco_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_recibo_item_cheque_txt_numero_cheque" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_numero_cheque' ?>" >
				  
                                        <?php Lang::_lang('Numero de Cheque', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_recibo_item_cheque_txt_numero_cheque" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('numero_cheque')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_recibo_item_cheque_txt_numero_cheque' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_recibo_item_cheque_txt_numero_cheque' value='<?php Gral::_echoTxt($vta_recibo_item_cheque->getNumeroCheque(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_recibo_item_cheque_alta_numero_cheque', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_recibo_item_cheque_alta_numero_cheque', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_recibo_item_cheque_alta_numero_cheque', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_recibo_item_cheque_alta_numero_cheque', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('numero_cheque')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_recibo_item_cheque_txt_fecha_emision" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_emision' ?>" >
				  
                                        <?php Lang::_lang('Fecha de Emision', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_recibo_item_cheque_txt_fecha_emision" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_emision')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_recibo_item_cheque_txt_fecha_emision' type='text' class='textbox <?php echo $error_input_css ?> date' id='vta_recibo_item_cheque_txt_fecha_emision' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($vta_recibo_item_cheque->getFechaEmision()), true) ?>' size='40' />
					<input type='button' id='cal_vta_recibo_item_cheque_txt_fecha_emision' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'vta_recibo_item_cheque_txt_fecha_emision', ifFormat: '%d/%m/%Y', button: 'cal_vta_recibo_item_cheque_txt_fecha_emision'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_vta_recibo_item_cheque_alta_fecha_emision', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_recibo_item_cheque_alta_fecha_emision', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_recibo_item_cheque_alta_fecha_emision', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_recibo_item_cheque_alta_fecha_emision', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_emision')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_recibo_item_cheque_txt_fecha_cobro" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_cobro' ?>" >
				  
                                        <?php Lang::_lang('Fecha de Cobro', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_recibo_item_cheque_txt_fecha_cobro" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_cobro')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_recibo_item_cheque_txt_fecha_cobro' type='text' class='textbox <?php echo $error_input_css ?> date' id='vta_recibo_item_cheque_txt_fecha_cobro' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($vta_recibo_item_cheque->getFechaCobro()), true) ?>' size='40' />
					<input type='button' id='cal_vta_recibo_item_cheque_txt_fecha_cobro' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'vta_recibo_item_cheque_txt_fecha_cobro', ifFormat: '%d/%m/%Y', button: 'cal_vta_recibo_item_cheque_txt_fecha_cobro'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_vta_recibo_item_cheque_alta_fecha_cobro', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_recibo_item_cheque_alta_fecha_cobro', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_recibo_item_cheque_alta_fecha_cobro', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_recibo_item_cheque_alta_fecha_cobro', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_cobro')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_recibo_item_cheque_txt_firmante" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_firmante' ?>" >
				  
                                        <?php Lang::_lang('Firmante', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_recibo_item_cheque_txt_firmante" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('firmante')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_recibo_item_cheque_txt_firmante' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_recibo_item_cheque_txt_firmante' value='<?php Gral::_echoTxt($vta_recibo_item_cheque->getFirmante(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_recibo_item_cheque_alta_firmante', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_recibo_item_cheque_alta_firmante', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_recibo_item_cheque_alta_firmante', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_recibo_item_cheque_alta_firmante', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('firmante')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_recibo_item_cheque_txt_entregador" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_entregador' ?>" >
				  
                                        <?php Lang::_lang('Entregador', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_recibo_item_cheque_txt_entregador" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('entregador')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_recibo_item_cheque_txt_entregador' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_recibo_item_cheque_txt_entregador' value='<?php Gral::_echoTxt($vta_recibo_item_cheque->getEntregador(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_recibo_item_cheque_alta_entregador', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_recibo_item_cheque_alta_entregador', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_recibo_item_cheque_alta_entregador', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_recibo_item_cheque_alta_entregador', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('entregador')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_recibo_item_cheque_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_recibo_item_cheque_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_recibo_item_cheque_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_recibo_item_cheque_txt_codigo' value='<?php Gral::_echoTxt($vta_recibo_item_cheque->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_recibo_item_cheque_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_recibo_item_cheque_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_recibo_item_cheque_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_recibo_item_cheque_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_recibo_item_cheque_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_recibo_item_cheque_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='vta_recibo_item_cheque_txa_observacion' rows='10' cols='50' id='vta_recibo_item_cheque_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_recibo_item_cheque->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_vta_recibo_item_cheque_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_recibo_item_cheque_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_recibo_item_cheque_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_recibo_item_cheque_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_recibo_item_cheque->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_vta_recibo_item_cheque_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='vta_recibo_item_cheque'/>
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

