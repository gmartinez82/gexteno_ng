<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('VTA_REMITO_ALTA')){
    echo "No tiene asignada la credencial VTA_REMITO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'vta_remito';
$db_nombre_pagina = 'vta_remito_alta';

$vta_remito = new VtaRemito();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$vta_remito = new VtaRemito();
	if(trim($hdn_id) != '') $vta_remito->setId($hdn_id, false);
	$vta_remito->setDescripcion(Gral::getVars(1, "vta_remito_txt_descripcion"));
	$vta_remito->setCliClienteId(Gral::getVars(1, "vta_remito_cmb_cli_cliente_id", null));
	$vta_remito->setVtaRemitoTipoEstadoId(Gral::getVars(1, "vta_remito_cmb_vta_remito_tipo_estado_id", null));
	$vta_remito->setGralTipoDocumentoId(Gral::getVars(1, "vta_remito_cmb_gral_tipo_documento_id", null));
	$vta_remito->setPersonaDescripcion(Gral::getVars(1, "vta_remito_txt_persona_descripcion"));
	$vta_remito->setPersonaDocumento(Gral::getVars(1, "vta_remito_txt_persona_documento"));
	$vta_remito->setPersonaEmail(Gral::getVars(1, "vta_remito_txt_persona_email"));
	$vta_remito->setFecha(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_remito_txt_fecha")));
	$vta_remito->setCodigo(Gral::getVars(1, "vta_remito_txt_codigo"));
	$vta_remito->setVtaPresupuestoId(Gral::getVars(1, "vta_remito_cmb_vta_presupuesto_id", null));
	$vta_remito->setCliCentroRecepcionId(Gral::getVars(1, "vta_remito_cmb_cli_centro_recepcion_id", null));
	$vta_remito->setPanPanolId(Gral::getVars(1, "vta_remito_cmb_pan_panol_id", null));
	$vta_remito->setGralSucursalId(Gral::getVars(1, "vta_remito_cmb_gral_sucursal_id", null));
	$vta_remito->setEnDomicilio(Gral::getVars(1, "vta_remito_cmb_en_domicilio", 0));
	$vta_remito->setObservacion(Gral::getVars(1, "vta_remito_txa_observacion"));
	$vta_remito->setOrden(Gral::getVars(1, "vta_remito_txt_orden", 0));
	$vta_remito->setEstado(Gral::getVars(1, "vta_remito_cmb_estado", 0));
	$vta_remito->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_remito_txt_creado")));
	$vta_remito->setCreadoPor(Gral::getVars(1, "vta_remito__creado_por", 0));
	$vta_remito->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_remito_txt_modificado")));
	$vta_remito->setModificadoPor(Gral::getVars(1, "vta_remito__modificado_por", 0));

	$vta_remito_estado = new VtaRemito();
	if(trim($hdn_id) != ''){
		$vta_remito_estado->setId($hdn_id);
		$vta_remito->setEstado($vta_remito_estado->getEstado());
				
	}else{
		$vta_remito->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $vta_remito->control();
			if(!$error->getExisteError()){
				$vta_remito->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: vta_remito_alta.php?cs=1&id='.$vta_remito->getId());
			}
		break;
		case 'guardarnvo':
			$error = $vta_remito->control();
			if(!$error->getExisteError()){
				$vta_remito->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: vta_remito_alta.php?cs=1');
				$vta_remito = new VtaRemito();
			}
		break;
	}
	Gral::setSes('VtaRemito_ULTIMO_INSERTADO', $vta_remito->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_vta_remito_id = Gral::getVars(2, $prefijo.'cmb_vta_remito_id', 0);
	if($cmb_vta_remito_id != 0){
		$vta_remito = VtaRemito::getOxId($cmb_vta_remito_id);
	}else{
	
	$vta_remito->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$vta_remito->setCliClienteId(Gral::getVars(2, "cli_cliente_id", 'null'));
	$vta_remito->setVtaRemitoTipoEstadoId(Gral::getVars(2, "vta_remito_tipo_estado_id", 'null'));
	$vta_remito->setGralTipoDocumentoId(Gral::getVars(2, "gral_tipo_documento_id", 'null'));
	$vta_remito->setPersonaDescripcion(Gral::getVars(2, "persona_descripcion", ''));
	$vta_remito->setPersonaDocumento(Gral::getVars(2, "persona_documento", ''));
	$vta_remito->setPersonaEmail(Gral::getVars(2, "persona_email", ''));
	$vta_remito->setFecha(Gral::getVars(2, "fecha", date('Y-m-d H:m:s')));
	$vta_remito->setCodigo(Gral::getVars(2, "codigo", ''));
	$vta_remito->setVtaPresupuestoId(Gral::getVars(2, "vta_presupuesto_id", 'null'));
	$vta_remito->setCliCentroRecepcionId(Gral::getVars(2, "cli_centro_recepcion_id", 'null'));
	$vta_remito->setPanPanolId(Gral::getVars(2, "pan_panol_id", 'null'));
	$vta_remito->setGralSucursalId(Gral::getVars(2, "gral_sucursal_id", 'null'));
	$vta_remito->setEnDomicilio(Gral::getVars(2, "en_domicilio", 0));
	$vta_remito->setObservacion(Gral::getVars(2, "observacion", ''));
	$vta_remito->setOrden(Gral::getVars(2, "orden", 0));
	$vta_remito->setEstado(Gral::getVars(2, "estado", 0));
	$vta_remito->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$vta_remito->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$vta_remito->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$vta_remito->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $vta_remito->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/vta_remito/vta_remito_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_vta_remito' width='90%'>
        
				<tr>
				  <td  id="label_vta_remito_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_remito_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_remito_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_remito_txt_descripcion' value='<?php Gral::_echoTxt($vta_remito->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_vta_remito_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_remito_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_remito_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_remito_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_remito_cmb_cli_cliente_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cli_cliente_id' ?>" >
				  
                                        <?php Lang::_lang('CliCliente', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_remito_cmb_cli_cliente_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cli_cliente_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_remito_cmb_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(), '...'), $vta_remito->getCliClienteId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_REMITO_ALTA_CMB_EDIT_CLI_CLIENTE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_remito_cmb_cli_cliente_id" clase_id="cli_cliente" prefijo='vta_remito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_cli_cliente_id" <?php echo ($vta_remito->getCliClienteId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_remito_cmb_cli_cliente_id" clase_id="cli_cliente" prefijo='vta_remito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_remito_cmb_cli_cliente_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_remito_alta_cli_cliente_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_remito_alta_cli_cliente_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_remito_alta_cli_cliente_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_remito_alta_cli_cliente_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cli_cliente_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_remito_cmb_vta_remito_tipo_estado_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_remito_tipo_estado_id' ?>" >
				  
                                        <?php Lang::_lang('VtaRemitoTipoEstado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_remito_cmb_vta_remito_tipo_estado_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_remito_tipo_estado_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_remito_cmb_vta_remito_tipo_estado_id', Gral::getCmbFiltro(VtaRemitoTipoEstado::getVtaRemitoTipoEstadosCmb(), '...'), $vta_remito->getVtaRemitoTipoEstadoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_REMITO_ALTA_CMB_EDIT_VTA_REMITO_TIPO_ESTADO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_remito_cmb_vta_remito_tipo_estado_id" clase_id="vta_remito_tipo_estado" prefijo='vta_remito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_remito_tipo_estado_id" <?php echo ($vta_remito->getVtaRemitoTipoEstadoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_remito_cmb_vta_remito_tipo_estado_id" clase_id="vta_remito_tipo_estado" prefijo='vta_remito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_remito_cmb_vta_remito_tipo_estado_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_remito_alta_vta_remito_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_remito_alta_vta_remito_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_remito_alta_vta_remito_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_remito_alta_vta_remito_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_remito_tipo_estado_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_remito_cmb_gral_tipo_documento_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_tipo_documento_id' ?>" >
				  
                                        <?php Lang::_lang('GralTipoDocumento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_remito_cmb_gral_tipo_documento_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_tipo_documento_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_remito_cmb_gral_tipo_documento_id', Gral::getCmbFiltro(GralTipoDocumento::getGralTipoDocumentosCmb(), '...'), $vta_remito->getGralTipoDocumentoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_REMITO_ALTA_CMB_EDIT_GRAL_TIPO_DOCUMENTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_remito_cmb_gral_tipo_documento_id" clase_id="gral_tipo_documento" prefijo='vta_remito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_tipo_documento_id" <?php echo ($vta_remito->getGralTipoDocumentoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_remito_cmb_gral_tipo_documento_id" clase_id="gral_tipo_documento" prefijo='vta_remito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_remito_cmb_gral_tipo_documento_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_remito_alta_gral_tipo_documento_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_remito_alta_gral_tipo_documento_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_remito_alta_gral_tipo_documento_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_remito_alta_gral_tipo_documento_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_tipo_documento_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_remito_txt_fecha" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha' ?>" >
				  
                                        <?php Lang::_lang('Fecha', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_remito_txt_fecha" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_remito_txt_fecha' type='text' class='textbox <?php echo $error_input_css ?> datetime' id='vta_remito_txt_fecha' value='<?php Gral::_echoTxt(Gral::getFechaHoraToWeb($vta_remito->getFecha()), true) ?>' size='40' />
					<input type='button' id='cal_vta_remito_txt_fecha' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'vta_remito_txt_fecha', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_vta_remito_txt_fecha'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_vta_remito_alta_fecha', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_remito_alta_fecha', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_remito_alta_fecha', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_remito_alta_fecha', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_remito_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_remito_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_remito_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_remito_txt_codigo' value='<?php Gral::_echoTxt($vta_remito->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_remito_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_remito_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_remito_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_remito_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_remito_cmb_vta_presupuesto_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_presupuesto_id' ?>" >
				  
                                        <?php Lang::_lang('VtaPresupuesto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_remito_cmb_vta_presupuesto_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_presupuesto_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_remito_cmb_vta_presupuesto_id', Gral::getCmbFiltro(VtaPresupuesto::getVtaPresupuestosCmb(), '...'), $vta_remito->getVtaPresupuestoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_REMITO_ALTA_CMB_EDIT_VTA_PRESUPUESTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_remito_cmb_vta_presupuesto_id" clase_id="vta_presupuesto" prefijo='vta_remito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_presupuesto_id" <?php echo ($vta_remito->getVtaPresupuestoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_remito_cmb_vta_presupuesto_id" clase_id="vta_presupuesto" prefijo='vta_remito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_remito_cmb_vta_presupuesto_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_remito_alta_vta_presupuesto_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_remito_alta_vta_presupuesto_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_remito_alta_vta_presupuesto_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_remito_alta_vta_presupuesto_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_presupuesto_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_remito_cmb_cli_centro_recepcion_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cli_centro_recepcion_id' ?>" >
				  
                                        <?php Lang::_lang('CliCentroRecepcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_remito_cmb_cli_centro_recepcion_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cli_centro_recepcion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_remito_cmb_cli_centro_recepcion_id', Gral::getCmbFiltro(CliCentroRecepcion::getCliCentroRecepcionsCmb(), '...'), $vta_remito->getCliCentroRecepcionId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_REMITO_ALTA_CMB_EDIT_CLI_CENTRO_RECEPCION')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_remito_cmb_cli_centro_recepcion_id" clase_id="cli_centro_recepcion" prefijo='vta_remito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_cli_centro_recepcion_id" <?php echo ($vta_remito->getCliCentroRecepcionId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_remito_cmb_cli_centro_recepcion_id" clase_id="cli_centro_recepcion" prefijo='vta_remito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_remito_cmb_cli_centro_recepcion_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_remito_alta_cli_centro_recepcion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_remito_alta_cli_centro_recepcion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_remito_alta_cli_centro_recepcion_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_remito_alta_cli_centro_recepcion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cli_centro_recepcion_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_remito_cmb_pan_panol_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pan_panol_id' ?>" >
				  
                                        <?php Lang::_lang('PanPanol', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_remito_cmb_pan_panol_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pan_panol_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_remito_cmb_pan_panol_id', Gral::getCmbFiltro(PanPanol::getPanPanolsCmb(), '...'), $vta_remito->getPanPanolId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_REMITO_ALTA_CMB_EDIT_PAN_PANOL')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_remito_cmb_pan_panol_id" clase_id="pan_panol" prefijo='vta_remito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pan_panol_id" <?php echo ($vta_remito->getPanPanolId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_remito_cmb_pan_panol_id" clase_id="pan_panol" prefijo='vta_remito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_remito_cmb_pan_panol_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_remito_alta_pan_panol_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_remito_alta_pan_panol_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_remito_alta_pan_panol_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_remito_alta_pan_panol_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pan_panol_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_remito_cmb_gral_sucursal_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_sucursal_id' ?>" >
				  
                                        <?php Lang::_lang('GralSucursal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_remito_cmb_gral_sucursal_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_sucursal_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_remito_cmb_gral_sucursal_id', Gral::getCmbFiltro(GralSucursal::getGralSucursalsCmb(), '...'), $vta_remito->getGralSucursalId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_REMITO_ALTA_CMB_EDIT_GRAL_SUCURSAL')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_remito_cmb_gral_sucursal_id" clase_id="gral_sucursal" prefijo='vta_remito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_sucursal_id" <?php echo ($vta_remito->getGralSucursalId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_remito_cmb_gral_sucursal_id" clase_id="gral_sucursal" prefijo='vta_remito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_remito_cmb_gral_sucursal_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_remito_alta_gral_sucursal_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_remito_alta_gral_sucursal_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_remito_alta_gral_sucursal_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_remito_alta_gral_sucursal_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_sucursal_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_remito_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_remito_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='vta_remito_txa_observacion' rows='10' cols='50' id='vta_remito_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_remito->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_vta_remito_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_remito_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_remito_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_remito_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_remito->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_vta_remito_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='vta_remito'/>
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

