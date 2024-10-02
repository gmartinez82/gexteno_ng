<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('AFIP_CITI_CABECERA_ALTA')){
    echo "No tiene asignada la credencial AFIP_CITI_CABECERA_ALTA. ";
    return false;
}

$db_nombre_objeto = 'afip_citi_cabecera';
$db_nombre_pagina = 'afip_citi_cabecera_alta';

$afip_citi_cabecera = new AfipCitiCabecera();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$afip_citi_cabecera = new AfipCitiCabecera();
	if(trim($hdn_id) != '') $afip_citi_cabecera->setId($hdn_id, false);
	$afip_citi_cabecera->setDescripcion(Gral::getVars(1, "afip_citi_cabecera_txt_descripcion"));
	$afip_citi_cabecera->setCodigo(Gral::getVars(1, "afip_citi_cabecera_txt_codigo"));
	$afip_citi_cabecera->setAfipCitiPrcId(Gral::getVars(1, "afip_citi_cabecera_cmb_afip_citi_prc_id", null));
	$afip_citi_cabecera->setInicial(Gral::getVars(1, "afip_citi_cabecera_cmb_inicial", 0));
	$afip_citi_cabecera->setActual(Gral::getVars(1, "afip_citi_cabecera_cmb_actual", 0));
	$afip_citi_cabecera->setAfipCitiCuitInformante(Gral::getVars(1, "afip_citi_cabecera_txt_afip_citi_cuit_informante"));
	$afip_citi_cabecera->setAfipCitiPeriodo(Gral::getVars(1, "afip_citi_cabecera_txt_afip_citi_periodo"));
	$afip_citi_cabecera->setAfipCitiSecuencia(Gral::getVars(1, "afip_citi_cabecera_txt_afip_citi_secuencia"));
	$afip_citi_cabecera->setAfipCitiSinMovimiento(Gral::getVars(1, "afip_citi_cabecera_txt_afip_citi_sin_movimiento"));
	$afip_citi_cabecera->setAfipCitiProrratearCfComputable(Gral::getVars(1, "afip_citi_cabecera_txt_afip_citi_prorratear_cf_computable"));
	$afip_citi_cabecera->setAfipCitiCfComputableOComprobante(Gral::getVars(1, "afip_citi_cabecera_txt_afip_citi_cf_computable_o_comprobante"));
	$afip_citi_cabecera->setAfipCitiImporteCfComputableGlobal(Gral::getVars(1, "afip_citi_cabecera_txt_afip_citi_importe_cf_computable_global"));
	$afip_citi_cabecera->setAfipCitiImporteCfComputableAsignacionDirecta(Gral::getVars(1, "afip_citi_cabecera_txt_afip_citi_importe_cf_computable_asignacion_directa"));
	$afip_citi_cabecera->setAfipCitiImporteCfComputableProrrateo(Gral::getVars(1, "afip_citi_cabecera_txt_afip_citi_importe_cf_computable_prorrateo"));
	$afip_citi_cabecera->setAfipCitiImporteCfNoComputableGlobal(Gral::getVars(1, "afip_citi_cabecera_txt_afip_citi_importe_cf_no_computable_global"));
	$afip_citi_cabecera->setAfipCitiImporteCfContribuyenteSsYOc(Gral::getVars(1, "afip_citi_cabecera_txt_afip_citi_importe_cf_contribuyente_ss_y_oc"));
	$afip_citi_cabecera->setAfipCitiImporteCfComputableSsYOc(Gral::getVars(1, "afip_citi_cabecera_txt_afip_citi_importe_cf_computable_ss_y_oc"));
	$afip_citi_cabecera->setObservacion(Gral::getVars(1, "afip_citi_cabecera_txa_observacion"));
	$afip_citi_cabecera->setOrden(Gral::getVars(1, "afip_citi_cabecera_txt_orden", 0));
	$afip_citi_cabecera->setEstado(Gral::getVars(1, "afip_citi_cabecera__estado", 0));
	$afip_citi_cabecera->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "afip_citi_cabecera_txt_creado")));
	$afip_citi_cabecera->setCreadoPor(Gral::getVars(1, "afip_citi_cabecera__creado_por", null));
	$afip_citi_cabecera->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "afip_citi_cabecera_txt_modificado")));
	$afip_citi_cabecera->setModificadoPor(Gral::getVars(1, "afip_citi_cabecera__modificado_por", null));

	$afip_citi_cabecera_estado = new AfipCitiCabecera();
	if(trim($hdn_id) != ''){
		$afip_citi_cabecera_estado->setId($hdn_id);
		$afip_citi_cabecera->setEstado($afip_citi_cabecera_estado->getEstado());
				
	}else{
		$afip_citi_cabecera->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $afip_citi_cabecera->control();
			if(!$error->getExisteError()){
				$afip_citi_cabecera->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: afip_citi_cabecera_alta.php?cs=1&id='.$afip_citi_cabecera->getId());
			}
		break;
		case 'guardarnvo':
			$error = $afip_citi_cabecera->control();
			if(!$error->getExisteError()){
				$afip_citi_cabecera->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: afip_citi_cabecera_alta.php?cs=1');
				$afip_citi_cabecera = new AfipCitiCabecera();
			}
		break;
	}
	Gral::setSes('AfipCitiCabecera_ULTIMO_INSERTADO', $afip_citi_cabecera->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_afip_citi_cabecera_id = Gral::getVars(2, $prefijo.'cmb_afip_citi_cabecera_id', 0);
	if($cmb_afip_citi_cabecera_id != 0){
		$afip_citi_cabecera = AfipCitiCabecera::getOxId($cmb_afip_citi_cabecera_id);
	}else{
	
	$afip_citi_cabecera->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$afip_citi_cabecera->setCodigo(Gral::getVars(2, "codigo", ''));
	$afip_citi_cabecera->setAfipCitiPrcId(Gral::getVars(2, "afip_citi_prc_id", 'null'));
	$afip_citi_cabecera->setInicial(Gral::getVars(2, "inicial", 0));
	$afip_citi_cabecera->setActual(Gral::getVars(2, "actual", 0));
	$afip_citi_cabecera->setAfipCitiCuitInformante(Gral::getVars(2, "afip_citi_cuit_informante", ''));
	$afip_citi_cabecera->setAfipCitiPeriodo(Gral::getVars(2, "afip_citi_periodo", ''));
	$afip_citi_cabecera->setAfipCitiSecuencia(Gral::getVars(2, "afip_citi_secuencia", ''));
	$afip_citi_cabecera->setAfipCitiSinMovimiento(Gral::getVars(2, "afip_citi_sin_movimiento", ''));
	$afip_citi_cabecera->setAfipCitiProrratearCfComputable(Gral::getVars(2, "afip_citi_prorratear_cf_computable", ''));
	$afip_citi_cabecera->setAfipCitiCfComputableOComprobante(Gral::getVars(2, "afip_citi_cf_computable_o_comprobante", ''));
	$afip_citi_cabecera->setAfipCitiImporteCfComputableGlobal(Gral::getVars(2, "afip_citi_importe_cf_computable_global", ''));
	$afip_citi_cabecera->setAfipCitiImporteCfComputableAsignacionDirecta(Gral::getVars(2, "afip_citi_importe_cf_computable_asignacion_directa", ''));
	$afip_citi_cabecera->setAfipCitiImporteCfComputableProrrateo(Gral::getVars(2, "afip_citi_importe_cf_computable_prorrateo", ''));
	$afip_citi_cabecera->setAfipCitiImporteCfNoComputableGlobal(Gral::getVars(2, "afip_citi_importe_cf_no_computable_global", ''));
	$afip_citi_cabecera->setAfipCitiImporteCfContribuyenteSsYOc(Gral::getVars(2, "afip_citi_importe_cf_contribuyente_ss_y_oc", ''));
	$afip_citi_cabecera->setAfipCitiImporteCfComputableSsYOc(Gral::getVars(2, "afip_citi_importe_cf_computable_ss_y_oc", ''));
	$afip_citi_cabecera->setObservacion(Gral::getVars(2, "observacion", ''));
	$afip_citi_cabecera->setOrden(Gral::getVars(2, "orden", 0));
	$afip_citi_cabecera->setEstado(Gral::getVars(2, "estado", 0));
	$afip_citi_cabecera->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$afip_citi_cabecera->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$afip_citi_cabecera->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$afip_citi_cabecera->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $afip_citi_cabecera->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/afip_citi_cabecera/afip_citi_cabecera_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_afip_citi_cabecera' width='90%'>
        
				<tr>
				  <td  id="label_afip_citi_cabecera_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_afip_citi_cabecera_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='afip_citi_cabecera_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='afip_citi_cabecera_txt_descripcion' value='<?php Gral::_echoTxt($afip_citi_cabecera->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_afip_citi_cabecera_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_afip_citi_cabecera_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_afip_citi_cabecera_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_afip_citi_cabecera_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_afip_citi_cabecera_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_afip_citi_cabecera_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='afip_citi_cabecera_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='afip_citi_cabecera_txt_codigo' value='<?php Gral::_echoTxt($afip_citi_cabecera->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_afip_citi_cabecera_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_afip_citi_cabecera_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_afip_citi_cabecera_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_afip_citi_cabecera_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_afip_citi_cabecera_cmb_afip_citi_prc_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_prc_id' ?>" >
				  
                                        <?php Lang::_lang('AfipCitiPrc', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_afip_citi_cabecera_cmb_afip_citi_prc_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('afip_citi_prc_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'afip_citi_cabecera_cmb_afip_citi_prc_id', Gral::getCmbFiltro(AfipCitiPrc::getAfipCitiPrcsCmb(), '...'), $afip_citi_cabecera->getAfipCitiPrcId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_CABECERA_ALTA_CMB_EDIT_AFIP_CITI_PRC')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="afip_citi_cabecera_cmb_afip_citi_prc_id" clase_id="afip_citi_prc" prefijo='afip_citi_cabecera_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_afip_citi_prc_id" <?php echo ($afip_citi_cabecera->getAfipCitiPrcId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="afip_citi_cabecera_cmb_afip_citi_prc_id" clase_id="afip_citi_prc" prefijo='afip_citi_cabecera_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_afip_citi_cabecera_cmb_afip_citi_prc_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_afip_citi_cabecera_alta_afip_citi_prc_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_afip_citi_cabecera_alta_afip_citi_prc_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_afip_citi_cabecera_alta_afip_citi_prc_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_afip_citi_cabecera_alta_afip_citi_prc_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_prc_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_afip_citi_cabecera_cmb_inicial" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_inicial' ?>" >
				  
                                        <?php Lang::_lang('Inicial', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_afip_citi_cabecera_cmb_inicial" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('inicial')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'afip_citi_cabecera_cmb_inicial', GralSiNo::getGralSiNosCmb(), $afip_citi_cabecera->getInicial(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_afip_citi_cabecera_alta_inicial', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_afip_citi_cabecera_alta_inicial', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_afip_citi_cabecera_alta_inicial', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_afip_citi_cabecera_alta_inicial', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('inicial')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_afip_citi_cabecera_cmb_actual" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_actual' ?>" >
				  
                                        <?php Lang::_lang('Actual', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_afip_citi_cabecera_cmb_actual" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('actual')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'afip_citi_cabecera_cmb_actual', GralSiNo::getGralSiNosCmb(), $afip_citi_cabecera->getActual(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_afip_citi_cabecera_alta_actual', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_afip_citi_cabecera_alta_actual', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_afip_citi_cabecera_alta_actual', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_afip_citi_cabecera_alta_actual', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('actual')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_afip_citi_cabecera_txt_afip_citi_cuit_informante" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_cuit_informante' ?>" >
				  
                                        <?php Lang::_lang('Cuit Informante', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_afip_citi_cabecera_txt_afip_citi_cuit_informante" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('afip_citi_cuit_informante')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='afip_citi_cabecera_txt_afip_citi_cuit_informante' type='text' class='textbox <?php echo $error_input_css ?> ' id='afip_citi_cabecera_txt_afip_citi_cuit_informante' value='<?php Gral::_echoTxt($afip_citi_cabecera->getAfipCitiCuitInformante(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_afip_citi_cabecera_alta_afip_citi_cuit_informante', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_afip_citi_cabecera_alta_afip_citi_cuit_informante', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_afip_citi_cabecera_alta_afip_citi_cuit_informante', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_afip_citi_cabecera_alta_afip_citi_cuit_informante', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_cuit_informante')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_afip_citi_cabecera_txt_afip_citi_periodo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_periodo' ?>" >
				  
                                        <?php Lang::_lang('Periodo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_afip_citi_cabecera_txt_afip_citi_periodo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('afip_citi_periodo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='afip_citi_cabecera_txt_afip_citi_periodo' type='text' class='textbox <?php echo $error_input_css ?> ' id='afip_citi_cabecera_txt_afip_citi_periodo' value='<?php Gral::_echoTxt($afip_citi_cabecera->getAfipCitiPeriodo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_afip_citi_cabecera_alta_afip_citi_periodo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_afip_citi_cabecera_alta_afip_citi_periodo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_afip_citi_cabecera_alta_afip_citi_periodo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_afip_citi_cabecera_alta_afip_citi_periodo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_periodo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_afip_citi_cabecera_txt_afip_citi_secuencia" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_secuencia' ?>" >
				  
                                        <?php Lang::_lang('Secuencia', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_afip_citi_cabecera_txt_afip_citi_secuencia" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('afip_citi_secuencia')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='afip_citi_cabecera_txt_afip_citi_secuencia' type='text' class='textbox <?php echo $error_input_css ?> ' id='afip_citi_cabecera_txt_afip_citi_secuencia' value='<?php Gral::_echoTxt($afip_citi_cabecera->getAfipCitiSecuencia(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_afip_citi_cabecera_alta_afip_citi_secuencia', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_afip_citi_cabecera_alta_afip_citi_secuencia', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_afip_citi_cabecera_alta_afip_citi_secuencia', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_afip_citi_cabecera_alta_afip_citi_secuencia', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_secuencia')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_afip_citi_cabecera_txt_afip_citi_sin_movimiento" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_sin_movimiento' ?>" >
				  
                                        <?php Lang::_lang('Sin Movimiento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_afip_citi_cabecera_txt_afip_citi_sin_movimiento" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('afip_citi_sin_movimiento')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='afip_citi_cabecera_txt_afip_citi_sin_movimiento' type='text' class='textbox <?php echo $error_input_css ?> ' id='afip_citi_cabecera_txt_afip_citi_sin_movimiento' value='<?php Gral::_echoTxt($afip_citi_cabecera->getAfipCitiSinMovimiento(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_afip_citi_cabecera_alta_afip_citi_sin_movimiento', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_afip_citi_cabecera_alta_afip_citi_sin_movimiento', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_afip_citi_cabecera_alta_afip_citi_sin_movimiento', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_afip_citi_cabecera_alta_afip_citi_sin_movimiento', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_sin_movimiento')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_afip_citi_cabecera_txt_afip_citi_prorratear_cf_computable" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_prorratear_cf_computable' ?>" >
				  
                                        <?php Lang::_lang('Prorratear Cred Fiscal computable', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_afip_citi_cabecera_txt_afip_citi_prorratear_cf_computable" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('afip_citi_prorratear_cf_computable')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='afip_citi_cabecera_txt_afip_citi_prorratear_cf_computable' type='text' class='textbox <?php echo $error_input_css ?> ' id='afip_citi_cabecera_txt_afip_citi_prorratear_cf_computable' value='<?php Gral::_echoTxt($afip_citi_cabecera->getAfipCitiProrratearCfComputable(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_afip_citi_cabecera_alta_afip_citi_prorratear_cf_computable', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_afip_citi_cabecera_alta_afip_citi_prorratear_cf_computable', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_afip_citi_cabecera_alta_afip_citi_prorratear_cf_computable', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_afip_citi_cabecera_alta_afip_citi_prorratear_cf_computable', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_prorratear_cf_computable')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_afip_citi_cabecera_txt_afip_citi_cf_computable_o_comprobante" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_cf_computable_o_comprobante' ?>" >
				  
                                        <?php Lang::_lang('Cred Fiscal Computable o Comprobante', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_afip_citi_cabecera_txt_afip_citi_cf_computable_o_comprobante" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('afip_citi_cf_computable_o_comprobante')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='afip_citi_cabecera_txt_afip_citi_cf_computable_o_comprobante' type='text' class='textbox <?php echo $error_input_css ?> ' id='afip_citi_cabecera_txt_afip_citi_cf_computable_o_comprobante' value='<?php Gral::_echoTxt($afip_citi_cabecera->getAfipCitiCfComputableOComprobante(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_afip_citi_cabecera_alta_afip_citi_cf_computable_o_comprobante', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_afip_citi_cabecera_alta_afip_citi_cf_computable_o_comprobante', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_afip_citi_cabecera_alta_afip_citi_cf_computable_o_comprobante', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_afip_citi_cabecera_alta_afip_citi_cf_computable_o_comprobante', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_cf_computable_o_comprobante')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_afip_citi_cabecera_txt_afip_citi_importe_cf_computable_global" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_importe_cf_computable_global' ?>" >
				  
                                        <?php Lang::_lang('Importe Cred Fiscal Computable Global', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_afip_citi_cabecera_txt_afip_citi_importe_cf_computable_global" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('afip_citi_importe_cf_computable_global')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='afip_citi_cabecera_txt_afip_citi_importe_cf_computable_global' type='text' class='textbox <?php echo $error_input_css ?> ' id='afip_citi_cabecera_txt_afip_citi_importe_cf_computable_global' value='<?php Gral::_echoTxt($afip_citi_cabecera->getAfipCitiImporteCfComputableGlobal(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_afip_citi_cabecera_alta_afip_citi_importe_cf_computable_global', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_afip_citi_cabecera_alta_afip_citi_importe_cf_computable_global', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_afip_citi_cabecera_alta_afip_citi_importe_cf_computable_global', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_afip_citi_cabecera_alta_afip_citi_importe_cf_computable_global', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_importe_cf_computable_global')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_afip_citi_cabecera_txt_afip_citi_importe_cf_computable_asignacion_directa" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_importe_cf_computable_asignacion_directa' ?>" >
				  
                                        <?php Lang::_lang('Importe Cred Fiscal Computable Asignacion Directa', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_afip_citi_cabecera_txt_afip_citi_importe_cf_computable_asignacion_directa" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('afip_citi_importe_cf_computable_asignacion_directa')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='afip_citi_cabecera_txt_afip_citi_importe_cf_computable_asignacion_directa' type='text' class='textbox <?php echo $error_input_css ?> ' id='afip_citi_cabecera_txt_afip_citi_importe_cf_computable_asignacion_directa' value='<?php Gral::_echoTxt($afip_citi_cabecera->getAfipCitiImporteCfComputableAsignacionDirecta(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_afip_citi_cabecera_alta_afip_citi_importe_cf_computable_asignacion_directa', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_afip_citi_cabecera_alta_afip_citi_importe_cf_computable_asignacion_directa', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_afip_citi_cabecera_alta_afip_citi_importe_cf_computable_asignacion_directa', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_afip_citi_cabecera_alta_afip_citi_importe_cf_computable_asignacion_directa', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_importe_cf_computable_asignacion_directa')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_afip_citi_cabecera_txt_afip_citi_importe_cf_computable_prorrateo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_importe_cf_computable_prorrateo' ?>" >
				  
                                        <?php Lang::_lang('Importe Cred Fiscal Computable Prorrateo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_afip_citi_cabecera_txt_afip_citi_importe_cf_computable_prorrateo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('afip_citi_importe_cf_computable_prorrateo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='afip_citi_cabecera_txt_afip_citi_importe_cf_computable_prorrateo' type='text' class='textbox <?php echo $error_input_css ?> ' id='afip_citi_cabecera_txt_afip_citi_importe_cf_computable_prorrateo' value='<?php Gral::_echoTxt($afip_citi_cabecera->getAfipCitiImporteCfComputableProrrateo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_afip_citi_cabecera_alta_afip_citi_importe_cf_computable_prorrateo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_afip_citi_cabecera_alta_afip_citi_importe_cf_computable_prorrateo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_afip_citi_cabecera_alta_afip_citi_importe_cf_computable_prorrateo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_afip_citi_cabecera_alta_afip_citi_importe_cf_computable_prorrateo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_importe_cf_computable_prorrateo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_afip_citi_cabecera_txt_afip_citi_importe_cf_no_computable_global" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_importe_cf_no_computable_global' ?>" >
				  
                                        <?php Lang::_lang('Importe Cred Fiscal No Computable Global', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_afip_citi_cabecera_txt_afip_citi_importe_cf_no_computable_global" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('afip_citi_importe_cf_no_computable_global')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='afip_citi_cabecera_txt_afip_citi_importe_cf_no_computable_global' type='text' class='textbox <?php echo $error_input_css ?> ' id='afip_citi_cabecera_txt_afip_citi_importe_cf_no_computable_global' value='<?php Gral::_echoTxt($afip_citi_cabecera->getAfipCitiImporteCfNoComputableGlobal(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_afip_citi_cabecera_alta_afip_citi_importe_cf_no_computable_global', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_afip_citi_cabecera_alta_afip_citi_importe_cf_no_computable_global', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_afip_citi_cabecera_alta_afip_citi_importe_cf_no_computable_global', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_afip_citi_cabecera_alta_afip_citi_importe_cf_no_computable_global', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_importe_cf_no_computable_global')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_afip_citi_cabecera_txt_afip_citi_importe_cf_contribuyente_ss_y_oc" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_importe_cf_contribuyente_ss_y_oc' ?>" >
				  
                                        <?php Lang::_lang('Importe Cred Fiscal Contribuyente Seg Social', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_afip_citi_cabecera_txt_afip_citi_importe_cf_contribuyente_ss_y_oc" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('afip_citi_importe_cf_contribuyente_ss_y_oc')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='afip_citi_cabecera_txt_afip_citi_importe_cf_contribuyente_ss_y_oc' type='text' class='textbox <?php echo $error_input_css ?> ' id='afip_citi_cabecera_txt_afip_citi_importe_cf_contribuyente_ss_y_oc' value='<?php Gral::_echoTxt($afip_citi_cabecera->getAfipCitiImporteCfContribuyenteSsYOc(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_afip_citi_cabecera_alta_afip_citi_importe_cf_contribuyente_ss_y_oc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_afip_citi_cabecera_alta_afip_citi_importe_cf_contribuyente_ss_y_oc', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_afip_citi_cabecera_alta_afip_citi_importe_cf_contribuyente_ss_y_oc', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_afip_citi_cabecera_alta_afip_citi_importe_cf_contribuyente_ss_y_oc', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_importe_cf_contribuyente_ss_y_oc')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_afip_citi_cabecera_txt_afip_citi_importe_cf_computable_ss_y_oc" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_importe_cf_computable_ss_y_oc' ?>" >
				  
                                        <?php Lang::_lang('Importe Cred Fiscal Computable Seg Social', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_afip_citi_cabecera_txt_afip_citi_importe_cf_computable_ss_y_oc" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('afip_citi_importe_cf_computable_ss_y_oc')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='afip_citi_cabecera_txt_afip_citi_importe_cf_computable_ss_y_oc' type='text' class='textbox <?php echo $error_input_css ?> ' id='afip_citi_cabecera_txt_afip_citi_importe_cf_computable_ss_y_oc' value='<?php Gral::_echoTxt($afip_citi_cabecera->getAfipCitiImporteCfComputableSsYOc(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_afip_citi_cabecera_alta_afip_citi_importe_cf_computable_ss_y_oc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_afip_citi_cabecera_alta_afip_citi_importe_cf_computable_ss_y_oc', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_afip_citi_cabecera_alta_afip_citi_importe_cf_computable_ss_y_oc', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_afip_citi_cabecera_alta_afip_citi_importe_cf_computable_ss_y_oc', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_importe_cf_computable_ss_y_oc')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_afip_citi_cabecera_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_afip_citi_cabecera_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='afip_citi_cabecera_txa_observacion' rows='10' cols='50' id='afip_citi_cabecera_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($afip_citi_cabecera->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_afip_citi_cabecera_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_afip_citi_cabecera_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_afip_citi_cabecera_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_afip_citi_cabecera_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($afip_citi_cabecera->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_afip_citi_cabecera_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='afip_citi_cabecera'/>
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

