<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_VTA_TRIBUTO_ALTA')){
    echo "No tiene asignada la credencial VTA_NOTA_CREDITO_VTA_TRIBUTO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'vta_nota_credito_vta_tributo';
$db_nombre_pagina = 'vta_nota_credito_vta_tributo_alta';

$vta_nota_credito_vta_tributo = new VtaNotaCreditoVtaTributo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$vta_nota_credito_vta_tributo = new VtaNotaCreditoVtaTributo();
	if(trim($hdn_id) != '') $vta_nota_credito_vta_tributo->setId($hdn_id, false);
	$vta_nota_credito_vta_tributo->setDescripcion(Gral::getVars(1, "vta_nota_credito_vta_tributo_txt_descripcion"));
	$vta_nota_credito_vta_tributo->setVtaNotaCreditoId(Gral::getVars(1, "vta_nota_credito_vta_tributo_cmb_vta_nota_credito_id", null));
	$vta_nota_credito_vta_tributo->setVtaTributoId(Gral::getVars(1, "vta_nota_credito_vta_tributo_cmb_vta_tributo_id", null));
	$vta_nota_credito_vta_tributo->setImporteImponible(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "vta_nota_credito_vta_tributo_txt_importe_imponible", 0)));
	$vta_nota_credito_vta_tributo->setImporteTributo(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "vta_nota_credito_vta_tributo_txt_importe_tributo", 0)));
	$vta_nota_credito_vta_tributo->setAlicuotaPorcentual(Gral::getVars(1, "vta_nota_credito_vta_tributo_txt_alicuota_porcentual", 0));
	$vta_nota_credito_vta_tributo->setAlicuotaDecimal(Gral::getVars(1, "vta_nota_credito_vta_tributo_txt_alicuota_decimal", 0));
	$vta_nota_credito_vta_tributo->setCodigo(Gral::getVars(1, "vta_nota_credito_vta_tributo_txt_codigo"));
	$vta_nota_credito_vta_tributo->setObservacion(Gral::getVars(1, "vta_nota_credito_vta_tributo_txa_observacion"));
	$vta_nota_credito_vta_tributo->setOrden(Gral::getVars(1, "vta_nota_credito_vta_tributo_txt_orden", 0));
	$vta_nota_credito_vta_tributo->setEstado(Gral::getVars(1, "vta_nota_credito_vta_tributo_cmb_estado", 0));
	$vta_nota_credito_vta_tributo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_nota_credito_vta_tributo_txt_creado")));
	$vta_nota_credito_vta_tributo->setCreadoPor(Gral::getVars(1, "vta_nota_credito_vta_tributo__creado_por", 0));
	$vta_nota_credito_vta_tributo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_nota_credito_vta_tributo_txt_modificado")));
	$vta_nota_credito_vta_tributo->setModificadoPor(Gral::getVars(1, "vta_nota_credito_vta_tributo__modificado_por", 0));

	$vta_nota_credito_vta_tributo_estado = new VtaNotaCreditoVtaTributo();
	if(trim($hdn_id) != ''){
		$vta_nota_credito_vta_tributo_estado->setId($hdn_id);
		$vta_nota_credito_vta_tributo->setEstado($vta_nota_credito_vta_tributo_estado->getEstado());
				
	}else{
		$vta_nota_credito_vta_tributo->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $vta_nota_credito_vta_tributo->control();
			if(!$error->getExisteError()){
				$vta_nota_credito_vta_tributo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: vta_nota_credito_vta_tributo_alta.php?cs=1&id='.$vta_nota_credito_vta_tributo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $vta_nota_credito_vta_tributo->control();
			if(!$error->getExisteError()){
				$vta_nota_credito_vta_tributo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: vta_nota_credito_vta_tributo_alta.php?cs=1');
				$vta_nota_credito_vta_tributo = new VtaNotaCreditoVtaTributo();
			}
		break;
	}
	Gral::setSes('VtaNotaCreditoVtaTributo_ULTIMO_INSERTADO', $vta_nota_credito_vta_tributo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_vta_nota_credito_vta_tributo_id = Gral::getVars(2, $prefijo.'cmb_vta_nota_credito_vta_tributo_id', 0);
	if($cmb_vta_nota_credito_vta_tributo_id != 0){
		$vta_nota_credito_vta_tributo = VtaNotaCreditoVtaTributo::getOxId($cmb_vta_nota_credito_vta_tributo_id);
	}else{
	
	$vta_nota_credito_vta_tributo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$vta_nota_credito_vta_tributo->setVtaNotaCreditoId(Gral::getVars(2, "vta_nota_credito_id", 'null'));
	$vta_nota_credito_vta_tributo->setVtaTributoId(Gral::getVars(2, "vta_tributo_id", 'null'));
	$vta_nota_credito_vta_tributo->setImporteImponible(Gral::getVars(2, "importe_imponible", 0));
	$vta_nota_credito_vta_tributo->setImporteTributo(Gral::getVars(2, "importe_tributo", 0));
	$vta_nota_credito_vta_tributo->setAlicuotaPorcentual(Gral::getVars(2, "alicuota_porcentual", 0));
	$vta_nota_credito_vta_tributo->setAlicuotaDecimal(Gral::getVars(2, "alicuota_decimal", 0));
	$vta_nota_credito_vta_tributo->setCodigo(Gral::getVars(2, "codigo", ''));
	$vta_nota_credito_vta_tributo->setObservacion(Gral::getVars(2, "observacion", ''));
	$vta_nota_credito_vta_tributo->setOrden(Gral::getVars(2, "orden", 0));
	$vta_nota_credito_vta_tributo->setEstado(Gral::getVars(2, "estado", 0));
	$vta_nota_credito_vta_tributo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$vta_nota_credito_vta_tributo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$vta_nota_credito_vta_tributo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$vta_nota_credito_vta_tributo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $vta_nota_credito_vta_tributo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/vta_nota_credito_vta_tributo/vta_nota_credito_vta_tributo_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_vta_nota_credito_vta_tributo' width='90%'>
        
				<tr>
				  <td  id="label_vta_nota_credito_vta_tributo_cmb_vta_nota_credito_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_nota_credito_id' ?>" >
				  
                                        <?php Lang::_lang('VtaNotaCredito', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_nota_credito_vta_tributo_cmb_vta_nota_credito_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_nota_credito_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_nota_credito_vta_tributo_cmb_vta_nota_credito_id', Gral::getCmbFiltro(VtaNotaCredito::getVtaNotaCreditosCmb(), '...'), $vta_nota_credito_vta_tributo->getVtaNotaCreditoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_VTA_TRIBUTO_ALTA_CMB_EDIT_VTA_NOTA_CREDITO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_nota_credito_vta_tributo_cmb_vta_nota_credito_id" clase_id="vta_nota_credito" prefijo='vta_nota_credito_vta_tributo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_nota_credito_id" <?php echo ($vta_nota_credito_vta_tributo->getVtaNotaCreditoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_nota_credito_vta_tributo_cmb_vta_nota_credito_id" clase_id="vta_nota_credito" prefijo='vta_nota_credito_vta_tributo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_nota_credito_vta_tributo_cmb_vta_nota_credito_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_nota_credito_vta_tributo_alta_vta_nota_credito_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_nota_credito_vta_tributo_alta_vta_nota_credito_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_nota_credito_vta_tributo_alta_vta_nota_credito_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_nota_credito_vta_tributo_alta_vta_nota_credito_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_nota_credito_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_nota_credito_vta_tributo_cmb_vta_tributo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_tributo_id' ?>" >
				  
                                        <?php Lang::_lang('VtaTributo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_nota_credito_vta_tributo_cmb_vta_tributo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_tributo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_nota_credito_vta_tributo_cmb_vta_tributo_id', Gral::getCmbFiltro(VtaTributo::getVtaTributosCmb(), '...'), $vta_nota_credito_vta_tributo->getVtaTributoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_VTA_TRIBUTO_ALTA_CMB_EDIT_VTA_TRIBUTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_nota_credito_vta_tributo_cmb_vta_tributo_id" clase_id="vta_tributo" prefijo='vta_nota_credito_vta_tributo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_tributo_id" <?php echo ($vta_nota_credito_vta_tributo->getVtaTributoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_nota_credito_vta_tributo_cmb_vta_tributo_id" clase_id="vta_tributo" prefijo='vta_nota_credito_vta_tributo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_nota_credito_vta_tributo_cmb_vta_tributo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_nota_credito_vta_tributo_alta_vta_tributo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_nota_credito_vta_tributo_alta_vta_tributo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_nota_credito_vta_tributo_alta_vta_tributo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_nota_credito_vta_tributo_alta_vta_tributo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_tributo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_nota_credito_vta_tributo_txt_importe_imponible" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_importe_imponible' ?>" >
				  
                                        <?php Lang::_lang('Imp Imponible', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_nota_credito_vta_tributo_txt_importe_imponible" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('importe_imponible')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_nota_credito_vta_tributo_txt_importe_imponible' type='text' class='textbox <?php echo $error_input_css ?> moneda' id='vta_nota_credito_vta_tributo_txt_importe_imponible' value='<?php Gral::_echoTxt(Gral::getImporteDesdeDbToPriceFormat($vta_nota_credito_vta_tributo->getImporteImponible()), true) ?>' size='10' />            
                    <?php if(Lang::_lang('help_vta_nota_credito_vta_tributo_alta_importe_imponible', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_nota_credito_vta_tributo_alta_importe_imponible', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_nota_credito_vta_tributo_alta_importe_imponible', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_nota_credito_vta_tributo_alta_importe_imponible', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('importe_imponible')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_nota_credito_vta_tributo_txt_importe_tributo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_importe_tributo' ?>" >
				  
                                        <?php Lang::_lang('Imp Tributo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_nota_credito_vta_tributo_txt_importe_tributo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('importe_tributo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_nota_credito_vta_tributo_txt_importe_tributo' type='text' class='textbox <?php echo $error_input_css ?> moneda' id='vta_nota_credito_vta_tributo_txt_importe_tributo' value='<?php Gral::_echoTxt(Gral::getImporteDesdeDbToPriceFormat($vta_nota_credito_vta_tributo->getImporteTributo()), true) ?>' size='10' />            
                    <?php if(Lang::_lang('help_vta_nota_credito_vta_tributo_alta_importe_tributo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_nota_credito_vta_tributo_alta_importe_tributo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_nota_credito_vta_tributo_alta_importe_tributo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_nota_credito_vta_tributo_alta_importe_tributo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('importe_tributo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_nota_credito_vta_tributo_txt_alicuota_porcentual" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_alicuota_porcentual' ?>" >
				  
                                        <?php Lang::_lang('Alicuota Porcentual', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_nota_credito_vta_tributo_txt_alicuota_porcentual" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('alicuota_porcentual')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_nota_credito_vta_tributo_txt_alicuota_porcentual' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='vta_nota_credito_vta_tributo_txt_alicuota_porcentual' value='<?php Gral::_echoTxt($vta_nota_credito_vta_tributo->getAlicuotaPorcentual(), true) ?>' size='10' />            
                    <?php if(Lang::_lang('help_vta_nota_credito_vta_tributo_alta_alicuota_porcentual', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_nota_credito_vta_tributo_alta_alicuota_porcentual', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_nota_credito_vta_tributo_alta_alicuota_porcentual', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_nota_credito_vta_tributo_alta_alicuota_porcentual', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('alicuota_porcentual')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_nota_credito_vta_tributo_txt_alicuota_decimal" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_alicuota_decimal' ?>" >
				  
                                        <?php Lang::_lang('Alicuota Decimal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_nota_credito_vta_tributo_txt_alicuota_decimal" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('alicuota_decimal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_nota_credito_vta_tributo_txt_alicuota_decimal' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='vta_nota_credito_vta_tributo_txt_alicuota_decimal' value='<?php Gral::_echoTxt($vta_nota_credito_vta_tributo->getAlicuotaDecimal(), true) ?>' size='10' />            
                    <?php if(Lang::_lang('help_vta_nota_credito_vta_tributo_alta_alicuota_decimal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_nota_credito_vta_tributo_alta_alicuota_decimal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_nota_credito_vta_tributo_alta_alicuota_decimal', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_nota_credito_vta_tributo_alta_alicuota_decimal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('alicuota_decimal')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_nota_credito_vta_tributo_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_nota_credito_vta_tributo_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='vta_nota_credito_vta_tributo_txa_observacion' rows='10' cols='50' id='vta_nota_credito_vta_tributo_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_nota_credito_vta_tributo->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_vta_nota_credito_vta_tributo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_nota_credito_vta_tributo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_nota_credito_vta_tributo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_nota_credito_vta_tributo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_nota_credito_vta_tributo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_vta_nota_credito_vta_tributo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='vta_nota_credito_vta_tributo'/>
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

