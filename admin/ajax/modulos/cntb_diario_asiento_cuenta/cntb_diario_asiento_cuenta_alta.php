<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_CUENTA_ALTA')){
    echo "No tiene asignada la credencial CNTB_DIARIO_ASIENTO_CUENTA_ALTA. ";
    return false;
}

$db_nombre_objeto = 'cntb_diario_asiento_cuenta';
$db_nombre_pagina = 'cntb_diario_asiento_cuenta_alta';

$cntb_diario_asiento_cuenta = new CntbDiarioAsientoCuenta();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$cntb_diario_asiento_cuenta = new CntbDiarioAsientoCuenta();
	if(trim($hdn_id) != '') $cntb_diario_asiento_cuenta->setId($hdn_id, false);
	$cntb_diario_asiento_cuenta->setDescripcion(Gral::getVars(1, "cntb_diario_asiento_cuenta_txt_descripcion"));
	$cntb_diario_asiento_cuenta->setCntbDiarioAsientoId(Gral::getVars(1, "cntb_diario_asiento_cuenta_cmb_cntb_diario_asiento_id", null));
	$cntb_diario_asiento_cuenta->setCntbTipoSaldoId(Gral::getVars(1, "cntb_diario_asiento_cuenta_cmb_cntb_tipo_saldo_id", null));
	$cntb_diario_asiento_cuenta->setCntbCuentaId(Gral::getVars(1, "cntb_diario_asiento_cuenta_dbsug_cntb_cuenta_id", null));
	$cntb_diario_asiento_cuenta->setImporteDebe(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "cntb_diario_asiento_cuenta_txt_importe_debe", 0)));
	$cntb_diario_asiento_cuenta->setImporteHaber(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "cntb_diario_asiento_cuenta_txt_importe_haber", 0)));
	$cntb_diario_asiento_cuenta->setImporteSaldo(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "cntb_diario_asiento_cuenta_txt_importe_saldo", 0)));
	$cntb_diario_asiento_cuenta->setCodigo(Gral::getVars(1, "cntb_diario_asiento_cuenta_txt_codigo"));
	$cntb_diario_asiento_cuenta->setCodigoComprobante(Gral::getVars(1, "cntb_diario_asiento_cuenta_txt_codigo_comprobante"));
	$cntb_diario_asiento_cuenta->setObservacion(Gral::getVars(1, "cntb_diario_asiento_cuenta_txa_observacion"));
	$cntb_diario_asiento_cuenta->setOrden(Gral::getVars(1, "cntb_diario_asiento_cuenta_txt_orden", 0));
	$cntb_diario_asiento_cuenta->setEstado(Gral::getVars(1, "cntb_diario_asiento_cuenta__estado", 0));
	$cntb_diario_asiento_cuenta->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "cntb_diario_asiento_cuenta_txt_creado")));
	$cntb_diario_asiento_cuenta->setCreadoPor(Gral::getVars(1, "cntb_diario_asiento_cuenta__creado_por", 0));
	$cntb_diario_asiento_cuenta->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "cntb_diario_asiento_cuenta_txt_modificado")));
	$cntb_diario_asiento_cuenta->setModificadoPor(Gral::getVars(1, "cntb_diario_asiento_cuenta__modificado_por", 0));

	$cntb_diario_asiento_cuenta_estado = new CntbDiarioAsientoCuenta();
	if(trim($hdn_id) != ''){
		$cntb_diario_asiento_cuenta_estado->setId($hdn_id);
		$cntb_diario_asiento_cuenta->setEstado($cntb_diario_asiento_cuenta_estado->getEstado());
				
	}else{
		$cntb_diario_asiento_cuenta->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $cntb_diario_asiento_cuenta->control();
			if(!$error->getExisteError()){
				$cntb_diario_asiento_cuenta->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: cntb_diario_asiento_cuenta_alta.php?cs=1&id='.$cntb_diario_asiento_cuenta->getId());
			}
		break;
		case 'guardarnvo':
			$error = $cntb_diario_asiento_cuenta->control();
			if(!$error->getExisteError()){
				$cntb_diario_asiento_cuenta->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: cntb_diario_asiento_cuenta_alta.php?cs=1');
				$cntb_diario_asiento_cuenta = new CntbDiarioAsientoCuenta();
			}
		break;
	}
	Gral::setSes('CntbDiarioAsientoCuenta_ULTIMO_INSERTADO', $cntb_diario_asiento_cuenta->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_cntb_diario_asiento_cuenta_id = Gral::getVars(2, $prefijo.'cmb_cntb_diario_asiento_cuenta_id', 0);
	if($cmb_cntb_diario_asiento_cuenta_id != 0){
		$cntb_diario_asiento_cuenta = CntbDiarioAsientoCuenta::getOxId($cmb_cntb_diario_asiento_cuenta_id);
	}else{
	
	$cntb_diario_asiento_cuenta->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$cntb_diario_asiento_cuenta->setCntbDiarioAsientoId(Gral::getVars(2, "cntb_diario_asiento_id", 'null'));
	$cntb_diario_asiento_cuenta->setCntbTipoSaldoId(Gral::getVars(2, "cntb_tipo_saldo_id", 'null'));
	$cntb_diario_asiento_cuenta->setCntbCuentaId(Gral::getVars(2, "cntb_cuenta_id", 'null'));
	$cntb_diario_asiento_cuenta->setImporteDebe(Gral::getVars(2, "importe_debe", 0));
	$cntb_diario_asiento_cuenta->setImporteHaber(Gral::getVars(2, "importe_haber", 0));
	$cntb_diario_asiento_cuenta->setImporteSaldo(Gral::getVars(2, "importe_saldo", 0));
	$cntb_diario_asiento_cuenta->setCodigo(Gral::getVars(2, "codigo", ''));
	$cntb_diario_asiento_cuenta->setCodigoComprobante(Gral::getVars(2, "codigo_comprobante", ''));
	$cntb_diario_asiento_cuenta->setObservacion(Gral::getVars(2, "observacion", ''));
	$cntb_diario_asiento_cuenta->setOrden(Gral::getVars(2, "orden", 0));
	$cntb_diario_asiento_cuenta->setEstado(Gral::getVars(2, "estado", 0));
	$cntb_diario_asiento_cuenta->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$cntb_diario_asiento_cuenta->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$cntb_diario_asiento_cuenta->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$cntb_diario_asiento_cuenta->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $cntb_diario_asiento_cuenta->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/cntb_diario_asiento_cuenta/cntb_diario_asiento_cuenta_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_cntb_diario_asiento_cuenta' width='90%'>
        
				<tr>
				  <td  id="label_cntb_diario_asiento_cuenta_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_diario_asiento_cuenta_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cntb_diario_asiento_cuenta_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='cntb_diario_asiento_cuenta_txt_descripcion' value='<?php Gral::_echoTxt($cntb_diario_asiento_cuenta->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_cntb_diario_asiento_cuenta_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_diario_asiento_cuenta_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_diario_asiento_cuenta_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_diario_asiento_cuenta_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_diario_asiento_cuenta_cmb_cntb_diario_asiento_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cntb_diario_asiento_id' ?>" >
				  
                                        <?php Lang::_lang('CntbDiarioAsiento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_diario_asiento_cuenta_cmb_cntb_diario_asiento_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cntb_diario_asiento_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'cntb_diario_asiento_cuenta_cmb_cntb_diario_asiento_id', Gral::getCmbFiltro(CntbDiarioAsiento::getCntbDiarioAsientosCmb(), '...'), $cntb_diario_asiento_cuenta->getCntbDiarioAsientoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_CUENTA_ALTA_CMB_EDIT_CNTB_DIARIO_ASIENTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="cntb_diario_asiento_cuenta_cmb_cntb_diario_asiento_id" clase_id="cntb_diario_asiento" prefijo='cntb_diario_asiento_cuenta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_cntb_diario_asiento_id" <?php echo ($cntb_diario_asiento_cuenta->getCntbDiarioAsientoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="cntb_diario_asiento_cuenta_cmb_cntb_diario_asiento_id" clase_id="cntb_diario_asiento" prefijo='cntb_diario_asiento_cuenta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_cntb_diario_asiento_cuenta_cmb_cntb_diario_asiento_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_cntb_diario_asiento_cuenta_alta_cntb_diario_asiento_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_diario_asiento_cuenta_alta_cntb_diario_asiento_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_diario_asiento_cuenta_alta_cntb_diario_asiento_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_diario_asiento_cuenta_alta_cntb_diario_asiento_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cntb_diario_asiento_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_diario_asiento_cuenta_cmb_cntb_tipo_saldo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cntb_tipo_saldo_id' ?>" >
				  
                                        <?php Lang::_lang('CntbTipoSaldo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_diario_asiento_cuenta_cmb_cntb_tipo_saldo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cntb_tipo_saldo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'cntb_diario_asiento_cuenta_cmb_cntb_tipo_saldo_id', Gral::getCmbFiltro(CntbTipoSaldo::getCntbTipoSaldosCmb(), '...'), $cntb_diario_asiento_cuenta->getCntbTipoSaldoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_CUENTA_ALTA_CMB_EDIT_CNTB_TIPO_SALDO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="cntb_diario_asiento_cuenta_cmb_cntb_tipo_saldo_id" clase_id="cntb_tipo_saldo" prefijo='cntb_diario_asiento_cuenta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_cntb_tipo_saldo_id" <?php echo ($cntb_diario_asiento_cuenta->getCntbTipoSaldoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="cntb_diario_asiento_cuenta_cmb_cntb_tipo_saldo_id" clase_id="cntb_tipo_saldo" prefijo='cntb_diario_asiento_cuenta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_cntb_diario_asiento_cuenta_cmb_cntb_tipo_saldo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_cntb_diario_asiento_cuenta_alta_cntb_tipo_saldo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_diario_asiento_cuenta_alta_cntb_tipo_saldo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_diario_asiento_cuenta_alta_cntb_tipo_saldo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_diario_asiento_cuenta_alta_cntb_tipo_saldo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cntb_tipo_saldo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_diario_asiento_cuenta_dbsug_cntb_cuenta_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cntb_cuenta_id' ?>" >
				  
                                        <?php Lang::_lang('CntbCuenta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_diario_asiento_cuenta_dbsug_cntb_cuenta_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cntb_cuenta_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'cntb_diario_asiento_cuenta_dbsug_cntb_cuenta', 'ajax/modulos/cntb_cuenta/cntb_cuenta_dbsuggest_custom.php', false, true, '', 'Ingrese ...', $cntb_diario_asiento_cuenta->getCntbCuentaId(), $cntb_diario_asiento_cuenta->getCntbCuenta()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_cntb_diario_asiento_cuenta_alta_cntb_cuenta_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_diario_asiento_cuenta_alta_cntb_cuenta_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_diario_asiento_cuenta_alta_cntb_cuenta_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_diario_asiento_cuenta_alta_cntb_cuenta_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cntb_cuenta_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_diario_asiento_cuenta_txt_importe_debe" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_importe_debe' ?>" >
				  
                                        <?php Lang::_lang('Importe Debe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_diario_asiento_cuenta_txt_importe_debe" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('importe_debe')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cntb_diario_asiento_cuenta_txt_importe_debe' type='text' class='textbox <?php echo $error_input_css ?> moneda' id='cntb_diario_asiento_cuenta_txt_importe_debe' value='<?php Gral::_echoTxt(Gral::getImporteDesdeDbToPriceFormat($cntb_diario_asiento_cuenta->getImporteDebe()), true) ?>' size='10' />            
                    <?php if(Lang::_lang('help_cntb_diario_asiento_cuenta_alta_importe_debe', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_diario_asiento_cuenta_alta_importe_debe', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_diario_asiento_cuenta_alta_importe_debe', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_diario_asiento_cuenta_alta_importe_debe', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('importe_debe')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_diario_asiento_cuenta_txt_importe_haber" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_importe_haber' ?>" >
				  
                                        <?php Lang::_lang('Importe Haber', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_diario_asiento_cuenta_txt_importe_haber" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('importe_haber')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cntb_diario_asiento_cuenta_txt_importe_haber' type='text' class='textbox <?php echo $error_input_css ?> moneda' id='cntb_diario_asiento_cuenta_txt_importe_haber' value='<?php Gral::_echoTxt(Gral::getImporteDesdeDbToPriceFormat($cntb_diario_asiento_cuenta->getImporteHaber()), true) ?>' size='10' />            
                    <?php if(Lang::_lang('help_cntb_diario_asiento_cuenta_alta_importe_haber', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_diario_asiento_cuenta_alta_importe_haber', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_diario_asiento_cuenta_alta_importe_haber', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_diario_asiento_cuenta_alta_importe_haber', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('importe_haber')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_diario_asiento_cuenta_txt_importe_saldo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_importe_saldo' ?>" >
				  
                                        <?php Lang::_lang('Importe Saldo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_diario_asiento_cuenta_txt_importe_saldo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('importe_saldo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cntb_diario_asiento_cuenta_txt_importe_saldo' type='text' class='textbox <?php echo $error_input_css ?> moneda' id='cntb_diario_asiento_cuenta_txt_importe_saldo' value='<?php Gral::_echoTxt(Gral::getImporteDesdeDbToPriceFormat($cntb_diario_asiento_cuenta->getImporteSaldo()), true) ?>' size='10' />            
                    <?php if(Lang::_lang('help_cntb_diario_asiento_cuenta_alta_importe_saldo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_diario_asiento_cuenta_alta_importe_saldo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_diario_asiento_cuenta_alta_importe_saldo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_diario_asiento_cuenta_alta_importe_saldo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('importe_saldo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_diario_asiento_cuenta_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_diario_asiento_cuenta_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cntb_diario_asiento_cuenta_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='cntb_diario_asiento_cuenta_txt_codigo' value='<?php Gral::_echoTxt($cntb_diario_asiento_cuenta->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_cntb_diario_asiento_cuenta_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_diario_asiento_cuenta_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_diario_asiento_cuenta_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_diario_asiento_cuenta_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_diario_asiento_cuenta_txt_codigo_comprobante" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo_comprobante' ?>" >
				  
                                        <?php Lang::_lang('Cod Comprobante', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_diario_asiento_cuenta_txt_codigo_comprobante" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo_comprobante')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cntb_diario_asiento_cuenta_txt_codigo_comprobante' type='text' class='textbox <?php echo $error_input_css ?> ' id='cntb_diario_asiento_cuenta_txt_codigo_comprobante' value='<?php Gral::_echoTxt($cntb_diario_asiento_cuenta->getCodigoComprobante(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_cntb_diario_asiento_cuenta_alta_codigo_comprobante', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_diario_asiento_cuenta_alta_codigo_comprobante', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_diario_asiento_cuenta_alta_codigo_comprobante', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_diario_asiento_cuenta_alta_codigo_comprobante', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo_comprobante')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_diario_asiento_cuenta_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_diario_asiento_cuenta_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='cntb_diario_asiento_cuenta_txa_observacion' rows='10' cols='50' id='cntb_diario_asiento_cuenta_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($cntb_diario_asiento_cuenta->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_cntb_diario_asiento_cuenta_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_diario_asiento_cuenta_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_diario_asiento_cuenta_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_diario_asiento_cuenta_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($cntb_diario_asiento_cuenta->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_cntb_diario_asiento_cuenta_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='cntb_diario_asiento_cuenta'/>
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

