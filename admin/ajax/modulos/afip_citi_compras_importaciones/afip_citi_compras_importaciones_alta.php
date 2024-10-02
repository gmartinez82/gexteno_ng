<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('AFIP_CITI_COMPRAS_IMPORTACIONES_ALTA')){
    echo "No tiene asignada la credencial AFIP_CITI_COMPRAS_IMPORTACIONES_ALTA. ";
    return false;
}

$db_nombre_objeto = 'afip_citi_compras_importaciones';
$db_nombre_pagina = 'afip_citi_compras_importaciones_alta';

$afip_citi_compras_importaciones = new AfipCitiComprasImportaciones();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$afip_citi_compras_importaciones = new AfipCitiComprasImportaciones();
	if(trim($hdn_id) != '') $afip_citi_compras_importaciones->setId($hdn_id, false);
	$afip_citi_compras_importaciones->setDescripcion(Gral::getVars(1, "afip_citi_compras_importaciones_txt_descripcion"));
	$afip_citi_compras_importaciones->setCodigo(Gral::getVars(1, "afip_citi_compras_importaciones_txt_codigo"));
	$afip_citi_compras_importaciones->setAfipCitiPrcId(Gral::getVars(1, "afip_citi_compras_importaciones_cmb_afip_citi_prc_id", null));
	$afip_citi_compras_importaciones->setAfipCitiCabeceraId(Gral::getVars(1, "afip_citi_compras_importaciones_cmb_afip_citi_cabecera_id", null));
	$afip_citi_compras_importaciones->setAfipCitiDespachoImportacion(Gral::getVars(1, "afip_citi_compras_importaciones_txt_afip_citi_despacho_importacion"));
	$afip_citi_compras_importaciones->setAfipCitiImporteNetoGravado(Gral::getVars(1, "afip_citi_compras_importaciones_txt_afip_citi_importe_neto_gravado"));
	$afip_citi_compras_importaciones->setAfipCitiAlicuotaIva(Gral::getVars(1, "afip_citi_compras_importaciones_txt_afip_citi_alicuota_iva"));
	$afip_citi_compras_importaciones->setAfipCitiImporteImpuestoLiquidado(Gral::getVars(1, "afip_citi_compras_importaciones_txt_afip_citi_importe_impuesto_liquidado"));
	$afip_citi_compras_importaciones->setPdeFacturaId(Gral::getVars(1, "afip_citi_compras_importaciones_cmb_pde_factura_id", null));
	$afip_citi_compras_importaciones->setPdeNotaCreditoId(Gral::getVars(1, "afip_citi_compras_importaciones_cmb_pde_nota_credito_id", null));
	$afip_citi_compras_importaciones->setPdeNotaDebitoId(Gral::getVars(1, "afip_citi_compras_importaciones_cmb_pde_nota_debito_id", null));
	$afip_citi_compras_importaciones->setObservacion(Gral::getVars(1, "afip_citi_compras_importaciones_txa_observacion"));
	$afip_citi_compras_importaciones->setOrden(Gral::getVars(1, "afip_citi_compras_importaciones_txt_orden", 0));
	$afip_citi_compras_importaciones->setEstado(Gral::getVars(1, "afip_citi_compras_importaciones__estado", 0));
	$afip_citi_compras_importaciones->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "afip_citi_compras_importaciones_txt_creado")));
	$afip_citi_compras_importaciones->setCreadoPor(Gral::getVars(1, "afip_citi_compras_importaciones__creado_por", null));
	$afip_citi_compras_importaciones->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "afip_citi_compras_importaciones_txt_modificado")));
	$afip_citi_compras_importaciones->setModificadoPor(Gral::getVars(1, "afip_citi_compras_importaciones__modificado_por", null));

	$afip_citi_compras_importaciones_estado = new AfipCitiComprasImportaciones();
	if(trim($hdn_id) != ''){
		$afip_citi_compras_importaciones_estado->setId($hdn_id);
		$afip_citi_compras_importaciones->setEstado($afip_citi_compras_importaciones_estado->getEstado());
				
	}else{
		$afip_citi_compras_importaciones->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $afip_citi_compras_importaciones->control();
			if(!$error->getExisteError()){
				$afip_citi_compras_importaciones->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: afip_citi_compras_importaciones_alta.php?cs=1&id='.$afip_citi_compras_importaciones->getId());
			}
		break;
		case 'guardarnvo':
			$error = $afip_citi_compras_importaciones->control();
			if(!$error->getExisteError()){
				$afip_citi_compras_importaciones->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: afip_citi_compras_importaciones_alta.php?cs=1');
				$afip_citi_compras_importaciones = new AfipCitiComprasImportaciones();
			}
		break;
	}
	Gral::setSes('AfipCitiComprasImportaciones_ULTIMO_INSERTADO', $afip_citi_compras_importaciones->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_afip_citi_compras_importaciones_id = Gral::getVars(2, $prefijo.'cmb_afip_citi_compras_importaciones_id', 0);
	if($cmb_afip_citi_compras_importaciones_id != 0){
		$afip_citi_compras_importaciones = AfipCitiComprasImportaciones::getOxId($cmb_afip_citi_compras_importaciones_id);
	}else{
	
	$afip_citi_compras_importaciones->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$afip_citi_compras_importaciones->setCodigo(Gral::getVars(2, "codigo", ''));
	$afip_citi_compras_importaciones->setAfipCitiPrcId(Gral::getVars(2, "afip_citi_prc_id", 'null'));
	$afip_citi_compras_importaciones->setAfipCitiCabeceraId(Gral::getVars(2, "afip_citi_cabecera_id", 'null'));
	$afip_citi_compras_importaciones->setAfipCitiDespachoImportacion(Gral::getVars(2, "afip_citi_despacho_importacion", ''));
	$afip_citi_compras_importaciones->setAfipCitiImporteNetoGravado(Gral::getVars(2, "afip_citi_importe_neto_gravado", ''));
	$afip_citi_compras_importaciones->setAfipCitiAlicuotaIva(Gral::getVars(2, "afip_citi_alicuota_iva", ''));
	$afip_citi_compras_importaciones->setAfipCitiImporteImpuestoLiquidado(Gral::getVars(2, "afip_citi_importe_impuesto_liquidado", ''));
	$afip_citi_compras_importaciones->setPdeFacturaId(Gral::getVars(2, "pde_factura_id", 'null'));
	$afip_citi_compras_importaciones->setPdeNotaCreditoId(Gral::getVars(2, "pde_nota_credito_id", 'null'));
	$afip_citi_compras_importaciones->setPdeNotaDebitoId(Gral::getVars(2, "pde_nota_debito_id", 'null'));
	$afip_citi_compras_importaciones->setObservacion(Gral::getVars(2, "observacion", ''));
	$afip_citi_compras_importaciones->setOrden(Gral::getVars(2, "orden", 0));
	$afip_citi_compras_importaciones->setEstado(Gral::getVars(2, "estado", 0));
	$afip_citi_compras_importaciones->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$afip_citi_compras_importaciones->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$afip_citi_compras_importaciones->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$afip_citi_compras_importaciones->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $afip_citi_compras_importaciones->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/afip_citi_compras_importaciones/afip_citi_compras_importaciones_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_afip_citi_compras_importaciones' width='90%'>
        
				<tr>
				  <td  id="label_afip_citi_compras_importaciones_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_afip_citi_compras_importaciones_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='afip_citi_compras_importaciones_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='afip_citi_compras_importaciones_txt_descripcion' value='<?php Gral::_echoTxt($afip_citi_compras_importaciones->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_afip_citi_compras_importaciones_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_afip_citi_compras_importaciones_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_afip_citi_compras_importaciones_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_afip_citi_compras_importaciones_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_afip_citi_compras_importaciones_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_afip_citi_compras_importaciones_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='afip_citi_compras_importaciones_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='afip_citi_compras_importaciones_txt_codigo' value='<?php Gral::_echoTxt($afip_citi_compras_importaciones->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_afip_citi_compras_importaciones_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_afip_citi_compras_importaciones_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_afip_citi_compras_importaciones_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_afip_citi_compras_importaciones_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_afip_citi_compras_importaciones_cmb_afip_citi_prc_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_prc_id' ?>" >
				  
                                        <?php Lang::_lang('AfipCitiPrc', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_afip_citi_compras_importaciones_cmb_afip_citi_prc_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('afip_citi_prc_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'afip_citi_compras_importaciones_cmb_afip_citi_prc_id', Gral::getCmbFiltro(AfipCitiPrc::getAfipCitiPrcsCmb(), '...'), $afip_citi_compras_importaciones->getAfipCitiPrcId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_COMPRAS_IMPORTACIONES_ALTA_CMB_EDIT_AFIP_CITI_PRC')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="afip_citi_compras_importaciones_cmb_afip_citi_prc_id" clase_id="afip_citi_prc" prefijo='afip_citi_compras_importaciones_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_afip_citi_prc_id" <?php echo ($afip_citi_compras_importaciones->getAfipCitiPrcId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="afip_citi_compras_importaciones_cmb_afip_citi_prc_id" clase_id="afip_citi_prc" prefijo='afip_citi_compras_importaciones_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_afip_citi_compras_importaciones_cmb_afip_citi_prc_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_afip_citi_compras_importaciones_alta_afip_citi_prc_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_afip_citi_compras_importaciones_alta_afip_citi_prc_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_afip_citi_compras_importaciones_alta_afip_citi_prc_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_afip_citi_compras_importaciones_alta_afip_citi_prc_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_prc_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_afip_citi_compras_importaciones_cmb_afip_citi_cabecera_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_cabecera_id' ?>" >
				  
                                        <?php Lang::_lang('AfipCitiCabecera', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_afip_citi_compras_importaciones_cmb_afip_citi_cabecera_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('afip_citi_cabecera_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'afip_citi_compras_importaciones_cmb_afip_citi_cabecera_id', Gral::getCmbFiltro(AfipCitiCabecera::getAfipCitiCabecerasCmb(), '...'), $afip_citi_compras_importaciones->getAfipCitiCabeceraId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_COMPRAS_IMPORTACIONES_ALTA_CMB_EDIT_AFIP_CITI_CABECERA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="afip_citi_compras_importaciones_cmb_afip_citi_cabecera_id" clase_id="afip_citi_cabecera" prefijo='afip_citi_compras_importaciones_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_afip_citi_cabecera_id" <?php echo ($afip_citi_compras_importaciones->getAfipCitiCabeceraId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="afip_citi_compras_importaciones_cmb_afip_citi_cabecera_id" clase_id="afip_citi_cabecera" prefijo='afip_citi_compras_importaciones_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_afip_citi_compras_importaciones_cmb_afip_citi_cabecera_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_afip_citi_compras_importaciones_alta_afip_citi_cabecera_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_afip_citi_compras_importaciones_alta_afip_citi_cabecera_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_afip_citi_compras_importaciones_alta_afip_citi_cabecera_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_afip_citi_compras_importaciones_alta_afip_citi_cabecera_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_cabecera_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_afip_citi_compras_importaciones_txt_afip_citi_despacho_importacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_despacho_importacion' ?>" >
				  
                                        <?php Lang::_lang('afip_citi_despacho_importacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_afip_citi_compras_importaciones_txt_afip_citi_despacho_importacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('afip_citi_despacho_importacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='afip_citi_compras_importaciones_txt_afip_citi_despacho_importacion' type='text' class='textbox <?php echo $error_input_css ?> ' id='afip_citi_compras_importaciones_txt_afip_citi_despacho_importacion' value='<?php Gral::_echoTxt($afip_citi_compras_importaciones->getAfipCitiDespachoImportacion(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_afip_citi_compras_importaciones_alta_afip_citi_despacho_importacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_afip_citi_compras_importaciones_alta_afip_citi_despacho_importacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_afip_citi_compras_importaciones_alta_afip_citi_despacho_importacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_afip_citi_compras_importaciones_alta_afip_citi_despacho_importacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_despacho_importacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_afip_citi_compras_importaciones_txt_afip_citi_importe_neto_gravado" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_importe_neto_gravado' ?>" >
				  
                                        <?php Lang::_lang('afip_citi_importe_neto_gravado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_afip_citi_compras_importaciones_txt_afip_citi_importe_neto_gravado" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('afip_citi_importe_neto_gravado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='afip_citi_compras_importaciones_txt_afip_citi_importe_neto_gravado' type='text' class='textbox <?php echo $error_input_css ?> ' id='afip_citi_compras_importaciones_txt_afip_citi_importe_neto_gravado' value='<?php Gral::_echoTxt($afip_citi_compras_importaciones->getAfipCitiImporteNetoGravado(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_afip_citi_compras_importaciones_alta_afip_citi_importe_neto_gravado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_afip_citi_compras_importaciones_alta_afip_citi_importe_neto_gravado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_afip_citi_compras_importaciones_alta_afip_citi_importe_neto_gravado', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_afip_citi_compras_importaciones_alta_afip_citi_importe_neto_gravado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_importe_neto_gravado')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_afip_citi_compras_importaciones_txt_afip_citi_alicuota_iva" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_alicuota_iva' ?>" >
				  
                                        <?php Lang::_lang('afip_citi_alicuota_iva', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_afip_citi_compras_importaciones_txt_afip_citi_alicuota_iva" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('afip_citi_alicuota_iva')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='afip_citi_compras_importaciones_txt_afip_citi_alicuota_iva' type='text' class='textbox <?php echo $error_input_css ?> ' id='afip_citi_compras_importaciones_txt_afip_citi_alicuota_iva' value='<?php Gral::_echoTxt($afip_citi_compras_importaciones->getAfipCitiAlicuotaIva(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_afip_citi_compras_importaciones_alta_afip_citi_alicuota_iva', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_afip_citi_compras_importaciones_alta_afip_citi_alicuota_iva', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_afip_citi_compras_importaciones_alta_afip_citi_alicuota_iva', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_afip_citi_compras_importaciones_alta_afip_citi_alicuota_iva', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_alicuota_iva')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_afip_citi_compras_importaciones_txt_afip_citi_importe_impuesto_liquidado" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_importe_impuesto_liquidado' ?>" >
				  
                                        <?php Lang::_lang('afip_citi_importe_impuesto_liquidado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_afip_citi_compras_importaciones_txt_afip_citi_importe_impuesto_liquidado" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('afip_citi_importe_impuesto_liquidado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='afip_citi_compras_importaciones_txt_afip_citi_importe_impuesto_liquidado' type='text' class='textbox <?php echo $error_input_css ?> ' id='afip_citi_compras_importaciones_txt_afip_citi_importe_impuesto_liquidado' value='<?php Gral::_echoTxt($afip_citi_compras_importaciones->getAfipCitiImporteImpuestoLiquidado(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_afip_citi_compras_importaciones_alta_afip_citi_importe_impuesto_liquidado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_afip_citi_compras_importaciones_alta_afip_citi_importe_impuesto_liquidado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_afip_citi_compras_importaciones_alta_afip_citi_importe_impuesto_liquidado', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_afip_citi_compras_importaciones_alta_afip_citi_importe_impuesto_liquidado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_importe_impuesto_liquidado')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_afip_citi_compras_importaciones_cmb_pde_factura_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_factura_id' ?>" >
				  
                                        <?php Lang::_lang('PdeFactura', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_afip_citi_compras_importaciones_cmb_pde_factura_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_factura_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'afip_citi_compras_importaciones_cmb_pde_factura_id', Gral::getCmbFiltro(PdeFactura::getPdeFacturasCmb(), '...'), $afip_citi_compras_importaciones->getPdeFacturaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_COMPRAS_IMPORTACIONES_ALTA_CMB_EDIT_PDE_FACTURA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="afip_citi_compras_importaciones_cmb_pde_factura_id" clase_id="pde_factura" prefijo='afip_citi_compras_importaciones_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_factura_id" <?php echo ($afip_citi_compras_importaciones->getPdeFacturaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="afip_citi_compras_importaciones_cmb_pde_factura_id" clase_id="pde_factura" prefijo='afip_citi_compras_importaciones_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_afip_citi_compras_importaciones_cmb_pde_factura_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_afip_citi_compras_importaciones_alta_pde_factura_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_afip_citi_compras_importaciones_alta_pde_factura_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_afip_citi_compras_importaciones_alta_pde_factura_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_afip_citi_compras_importaciones_alta_pde_factura_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_factura_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_afip_citi_compras_importaciones_cmb_pde_nota_credito_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_nota_credito_id' ?>" >
				  
                                        <?php Lang::_lang('PdeNotaCredito', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_afip_citi_compras_importaciones_cmb_pde_nota_credito_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_nota_credito_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'afip_citi_compras_importaciones_cmb_pde_nota_credito_id', Gral::getCmbFiltro(PdeNotaCredito::getPdeNotaCreditosCmb(), '...'), $afip_citi_compras_importaciones->getPdeNotaCreditoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_COMPRAS_IMPORTACIONES_ALTA_CMB_EDIT_PDE_NOTA_CREDITO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="afip_citi_compras_importaciones_cmb_pde_nota_credito_id" clase_id="pde_nota_credito" prefijo='afip_citi_compras_importaciones_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_nota_credito_id" <?php echo ($afip_citi_compras_importaciones->getPdeNotaCreditoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="afip_citi_compras_importaciones_cmb_pde_nota_credito_id" clase_id="pde_nota_credito" prefijo='afip_citi_compras_importaciones_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_afip_citi_compras_importaciones_cmb_pde_nota_credito_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_afip_citi_compras_importaciones_alta_pde_nota_credito_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_afip_citi_compras_importaciones_alta_pde_nota_credito_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_afip_citi_compras_importaciones_alta_pde_nota_credito_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_afip_citi_compras_importaciones_alta_pde_nota_credito_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_nota_credito_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_afip_citi_compras_importaciones_cmb_pde_nota_debito_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_nota_debito_id' ?>" >
				  
                                        <?php Lang::_lang('PdeNotaDebito', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_afip_citi_compras_importaciones_cmb_pde_nota_debito_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_nota_debito_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'afip_citi_compras_importaciones_cmb_pde_nota_debito_id', Gral::getCmbFiltro(PdeNotaDebito::getPdeNotaDebitosCmb(), '...'), $afip_citi_compras_importaciones->getPdeNotaDebitoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_COMPRAS_IMPORTACIONES_ALTA_CMB_EDIT_PDE_NOTA_DEBITO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="afip_citi_compras_importaciones_cmb_pde_nota_debito_id" clase_id="pde_nota_debito" prefijo='afip_citi_compras_importaciones_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_nota_debito_id" <?php echo ($afip_citi_compras_importaciones->getPdeNotaDebitoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="afip_citi_compras_importaciones_cmb_pde_nota_debito_id" clase_id="pde_nota_debito" prefijo='afip_citi_compras_importaciones_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_afip_citi_compras_importaciones_cmb_pde_nota_debito_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_afip_citi_compras_importaciones_alta_pde_nota_debito_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_afip_citi_compras_importaciones_alta_pde_nota_debito_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_afip_citi_compras_importaciones_alta_pde_nota_debito_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_afip_citi_compras_importaciones_alta_pde_nota_debito_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_nota_debito_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_afip_citi_compras_importaciones_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_afip_citi_compras_importaciones_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='afip_citi_compras_importaciones_txa_observacion' rows='10' cols='50' id='afip_citi_compras_importaciones_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($afip_citi_compras_importaciones->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_afip_citi_compras_importaciones_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_afip_citi_compras_importaciones_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_afip_citi_compras_importaciones_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_afip_citi_compras_importaciones_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($afip_citi_compras_importaciones->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_afip_citi_compras_importaciones_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='afip_citi_compras_importaciones'/>
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

