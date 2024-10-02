<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('FND_CAJA_ALTA')){
    echo "No tiene asignada la credencial FND_CAJA_ALTA. ";
    return false;
}

$db_nombre_objeto = 'fnd_caja';
$db_nombre_pagina = 'fnd_caja_alta';

$fnd_caja = new FndCaja();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$fnd_caja = new FndCaja();
	if(trim($hdn_id) != '') $fnd_caja->setId($hdn_id, false);
	$fnd_caja->setDescripcion(Gral::getVars(1, "fnd_caja_txt_descripcion"));
	$fnd_caja->setFndCajeroId(Gral::getVars(1, "fnd_caja_cmb_fnd_cajero_id", null));
	$fnd_caja->setGralCajaId(Gral::getVars(1, "fnd_caja_cmb_gral_caja_id", null));
	$fnd_caja->setFndCajaTipoEstadoId(Gral::getVars(1, "fnd_caja_cmb_fnd_caja_tipo_estado_id", null));
	$fnd_caja->setFechaApertura(Gral::getFechaToDb(Gral::getVars(1, "fnd_caja_txt_fecha_apertura")));
	$fnd_caja->setFechaCierre(Gral::getFechaToDb(Gral::getVars(1, "fnd_caja_txt_fecha_cierre")));
	$fnd_caja->setFechaRendicion(Gral::getFechaToDb(Gral::getVars(1, "fnd_caja_txt_fecha_rendicion")));
	$fnd_caja->setImporteSaldoInicialEsperado(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "fnd_caja_txt_importe_saldo_inicial_esperado", 0)));
	$fnd_caja->setImporteSaldoInicialReal(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "fnd_caja_txt_importe_saldo_inicial_real", 0)));
	$fnd_caja->setImporteSaldoInicialDiferencia(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "fnd_caja_txt_importe_saldo_inicial_diferencia", 0)));
	$fnd_caja->setImporteSaldoFinal(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "fnd_caja_txt_importe_saldo_final", 0)));
	$fnd_caja->setCodigo(Gral::getVars(1, "fnd_caja_txt_codigo"));
	$fnd_caja->setObservacion(Gral::getVars(1, "fnd_caja_txa_observacion"));
	$fnd_caja->setOrden(Gral::getVars(1, "fnd_caja_txt_orden", 0));
	$fnd_caja->setEstado(Gral::getVars(1, "fnd_caja_cmb_estado", 0));
	$fnd_caja->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "fnd_caja_txt_creado")));
	$fnd_caja->setCreadoPor(Gral::getVars(1, "fnd_caja__creado_por", 0));
	$fnd_caja->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "fnd_caja_txt_modificado")));
	$fnd_caja->setModificadoPor(Gral::getVars(1, "fnd_caja__modificado_por", 0));

	$fnd_caja_estado = new FndCaja();
	if(trim($hdn_id) != ''){
		$fnd_caja_estado->setId($hdn_id);
		$fnd_caja->setEstado($fnd_caja_estado->getEstado());
				
	}else{
		$fnd_caja->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $fnd_caja->control();
			if(!$error->getExisteError()){
				$fnd_caja->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: fnd_caja_alta.php?cs=1&id='.$fnd_caja->getId());
			}
		break;
		case 'guardarnvo':
			$error = $fnd_caja->control();
			if(!$error->getExisteError()){
				$fnd_caja->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: fnd_caja_alta.php?cs=1');
				$fnd_caja = new FndCaja();
			}
		break;
	}
	Gral::setSes('FndCaja_ULTIMO_INSERTADO', $fnd_caja->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_fnd_caja_id = Gral::getVars(2, $prefijo.'cmb_fnd_caja_id', 0);
	if($cmb_fnd_caja_id != 0){
		$fnd_caja = FndCaja::getOxId($cmb_fnd_caja_id);
	}else{
	
	$fnd_caja->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$fnd_caja->setFndCajeroId(Gral::getVars(2, "fnd_cajero_id", 'null'));
	$fnd_caja->setGralCajaId(Gral::getVars(2, "gral_caja_id", 'null'));
	$fnd_caja->setFndCajaTipoEstadoId(Gral::getVars(2, "fnd_caja_tipo_estado_id", 'null'));
	$fnd_caja->setFechaApertura(Gral::getVars(2, "fecha_apertura", date('Y-m-d')));
	$fnd_caja->setFechaCierre(Gral::getVars(2, "fecha_cierre", date('Y-m-d')));
	$fnd_caja->setFechaRendicion(Gral::getVars(2, "fecha_rendicion", date('Y-m-d')));
	$fnd_caja->setImporteSaldoInicialEsperado(Gral::getVars(2, "importe_saldo_inicial_esperado", 0));
	$fnd_caja->setImporteSaldoInicialReal(Gral::getVars(2, "importe_saldo_inicial_real", 0));
	$fnd_caja->setImporteSaldoInicialDiferencia(Gral::getVars(2, "importe_saldo_inicial_diferencia", 0));
	$fnd_caja->setImporteSaldoFinal(Gral::getVars(2, "importe_saldo_final", 0));
	$fnd_caja->setCodigo(Gral::getVars(2, "codigo", ''));
	$fnd_caja->setObservacion(Gral::getVars(2, "observacion", ''));
	$fnd_caja->setOrden(Gral::getVars(2, "orden", 0));
	$fnd_caja->setEstado(Gral::getVars(2, "estado", 0));
	$fnd_caja->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$fnd_caja->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$fnd_caja->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$fnd_caja->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $fnd_caja->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/fnd_caja/fnd_caja_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_fnd_caja' width='90%'>
        
				<tr>
				  <td  id="label_fnd_caja_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_caja_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_caja_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='fnd_caja_txt_descripcion' value='<?php Gral::_echoTxt($fnd_caja->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_fnd_caja_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_caja_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_caja_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_caja_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_caja_cmb_fnd_cajero_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fnd_cajero_id' ?>" >
				  
                                        <?php Lang::_lang('FndCajero', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_caja_cmb_fnd_cajero_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fnd_cajero_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_caja_cmb_fnd_cajero_id', Gral::getCmbFiltro(FndCajero::getFndCajerosCmb(), '...'), $fnd_caja->getFndCajeroId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('FND_CAJA_ALTA_CMB_EDIT_FND_CAJERO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="fnd_caja_cmb_fnd_cajero_id" clase_id="fnd_cajero" prefijo='fnd_caja_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_fnd_cajero_id" <?php echo ($fnd_caja->getFndCajeroId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="fnd_caja_cmb_fnd_cajero_id" clase_id="fnd_cajero" prefijo='fnd_caja_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_fnd_caja_cmb_fnd_cajero_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_fnd_caja_alta_fnd_cajero_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_caja_alta_fnd_cajero_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_caja_alta_fnd_cajero_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_caja_alta_fnd_cajero_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fnd_cajero_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_caja_cmb_gral_caja_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_caja_id' ?>" >
				  
                                        <?php Lang::_lang('GralCaja', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_caja_cmb_gral_caja_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_caja_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_caja_cmb_gral_caja_id', Gral::getCmbFiltro(GralCaja::getGralCajasCmb(), '...'), $fnd_caja->getGralCajaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('FND_CAJA_ALTA_CMB_EDIT_GRAL_CAJA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="fnd_caja_cmb_gral_caja_id" clase_id="gral_caja" prefijo='fnd_caja_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_caja_id" <?php echo ($fnd_caja->getGralCajaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="fnd_caja_cmb_gral_caja_id" clase_id="gral_caja" prefijo='fnd_caja_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_fnd_caja_cmb_gral_caja_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_fnd_caja_alta_gral_caja_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_caja_alta_gral_caja_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_caja_alta_gral_caja_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_caja_alta_gral_caja_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_caja_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_caja_cmb_fnd_caja_tipo_estado_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fnd_caja_tipo_estado_id' ?>" >
				  
                                        <?php Lang::_lang('FndCajaTipoEstado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_caja_cmb_fnd_caja_tipo_estado_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fnd_caja_tipo_estado_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_caja_cmb_fnd_caja_tipo_estado_id', Gral::getCmbFiltro(FndCajaTipoEstado::getFndCajaTipoEstadosCmb(), '...'), $fnd_caja->getFndCajaTipoEstadoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('FND_CAJA_ALTA_CMB_EDIT_FND_CAJA_TIPO_ESTADO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="fnd_caja_cmb_fnd_caja_tipo_estado_id" clase_id="fnd_caja_tipo_estado" prefijo='fnd_caja_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_fnd_caja_tipo_estado_id" <?php echo ($fnd_caja->getFndCajaTipoEstadoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="fnd_caja_cmb_fnd_caja_tipo_estado_id" clase_id="fnd_caja_tipo_estado" prefijo='fnd_caja_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_fnd_caja_cmb_fnd_caja_tipo_estado_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_fnd_caja_alta_fnd_caja_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_caja_alta_fnd_caja_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_caja_alta_fnd_caja_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_caja_alta_fnd_caja_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fnd_caja_tipo_estado_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_caja_txt_fecha_apertura" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_apertura' ?>" >
				  
                                        <?php Lang::_lang('Fecha de Apertura', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_caja_txt_fecha_apertura" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_apertura')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_caja_txt_fecha_apertura' type='text' class='textbox <?php echo $error_input_css ?> date' id='fnd_caja_txt_fecha_apertura' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($fnd_caja->getFechaApertura()), true) ?>' size='40' />
					<input type='button' id='cal_fnd_caja_txt_fecha_apertura' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'fnd_caja_txt_fecha_apertura', ifFormat: '%d/%m/%Y', button: 'cal_fnd_caja_txt_fecha_apertura'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_fnd_caja_alta_fecha_apertura', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_caja_alta_fecha_apertura', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_caja_alta_fecha_apertura', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_caja_alta_fecha_apertura', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_apertura')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_caja_txt_fecha_cierre" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_cierre' ?>" >
				  
                                        <?php Lang::_lang('Fecha de Cierre', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_caja_txt_fecha_cierre" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_cierre')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_caja_txt_fecha_cierre' type='text' class='textbox <?php echo $error_input_css ?> date' id='fnd_caja_txt_fecha_cierre' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($fnd_caja->getFechaCierre()), true) ?>' size='40' />
					<input type='button' id='cal_fnd_caja_txt_fecha_cierre' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'fnd_caja_txt_fecha_cierre', ifFormat: '%d/%m/%Y', button: 'cal_fnd_caja_txt_fecha_cierre'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_fnd_caja_alta_fecha_cierre', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_caja_alta_fecha_cierre', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_caja_alta_fecha_cierre', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_caja_alta_fecha_cierre', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_cierre')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_caja_txt_fecha_rendicion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_rendicion' ?>" >
				  
                                        <?php Lang::_lang('Fecha de Rendicion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_caja_txt_fecha_rendicion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_rendicion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_caja_txt_fecha_rendicion' type='text' class='textbox <?php echo $error_input_css ?> date' id='fnd_caja_txt_fecha_rendicion' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($fnd_caja->getFechaRendicion()), true) ?>' size='40' />
					<input type='button' id='cal_fnd_caja_txt_fecha_rendicion' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'fnd_caja_txt_fecha_rendicion', ifFormat: '%d/%m/%Y', button: 'cal_fnd_caja_txt_fecha_rendicion'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_fnd_caja_alta_fecha_rendicion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_caja_alta_fecha_rendicion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_caja_alta_fecha_rendicion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_caja_alta_fecha_rendicion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_rendicion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_caja_txt_importe_saldo_inicial_esperado" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_importe_saldo_inicial_esperado' ?>" >
				  
                                        <?php Lang::_lang('Importe Saldo Inicial Esperado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_caja_txt_importe_saldo_inicial_esperado" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('importe_saldo_inicial_esperado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_caja_txt_importe_saldo_inicial_esperado' type='text' class='textbox <?php echo $error_input_css ?> moneda' id='fnd_caja_txt_importe_saldo_inicial_esperado' value='<?php Gral::_echoTxt(Gral::getImporteDesdeDbToPriceFormat($fnd_caja->getImporteSaldoInicialEsperado()), true) ?>' size='10' />            
                    <?php if(Lang::_lang('help_fnd_caja_alta_importe_saldo_inicial_esperado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_caja_alta_importe_saldo_inicial_esperado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_caja_alta_importe_saldo_inicial_esperado', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_caja_alta_importe_saldo_inicial_esperado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('importe_saldo_inicial_esperado')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_caja_txt_importe_saldo_inicial_real" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_importe_saldo_inicial_real' ?>" >
				  
                                        <?php Lang::_lang('Importe Saldo Inicial Real', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_caja_txt_importe_saldo_inicial_real" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('importe_saldo_inicial_real')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_caja_txt_importe_saldo_inicial_real' type='text' class='textbox <?php echo $error_input_css ?> moneda' id='fnd_caja_txt_importe_saldo_inicial_real' value='<?php Gral::_echoTxt(Gral::getImporteDesdeDbToPriceFormat($fnd_caja->getImporteSaldoInicialReal()), true) ?>' size='10' />            
                    <?php if(Lang::_lang('help_fnd_caja_alta_importe_saldo_inicial_real', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_caja_alta_importe_saldo_inicial_real', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_caja_alta_importe_saldo_inicial_real', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_caja_alta_importe_saldo_inicial_real', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('importe_saldo_inicial_real')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_caja_txt_importe_saldo_inicial_diferencia" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_importe_saldo_inicial_diferencia' ?>" >
				  
                                        <?php Lang::_lang('Importe Saldo Inicial Diferencia', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_caja_txt_importe_saldo_inicial_diferencia" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('importe_saldo_inicial_diferencia')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_caja_txt_importe_saldo_inicial_diferencia' type='text' class='textbox <?php echo $error_input_css ?> moneda' id='fnd_caja_txt_importe_saldo_inicial_diferencia' value='<?php Gral::_echoTxt(Gral::getImporteDesdeDbToPriceFormat($fnd_caja->getImporteSaldoInicialDiferencia()), true) ?>' size='10' />            
                    <?php if(Lang::_lang('help_fnd_caja_alta_importe_saldo_inicial_diferencia', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_caja_alta_importe_saldo_inicial_diferencia', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_caja_alta_importe_saldo_inicial_diferencia', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_caja_alta_importe_saldo_inicial_diferencia', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('importe_saldo_inicial_diferencia')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_caja_txt_importe_saldo_final" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_importe_saldo_final' ?>" >
				  
                                        <?php Lang::_lang('Importe Saldo Final', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_caja_txt_importe_saldo_final" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('importe_saldo_final')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_caja_txt_importe_saldo_final' type='text' class='textbox <?php echo $error_input_css ?> moneda' id='fnd_caja_txt_importe_saldo_final' value='<?php Gral::_echoTxt(Gral::getImporteDesdeDbToPriceFormat($fnd_caja->getImporteSaldoFinal()), true) ?>' size='10' />            
                    <?php if(Lang::_lang('help_fnd_caja_alta_importe_saldo_final', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_caja_alta_importe_saldo_final', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_caja_alta_importe_saldo_final', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_caja_alta_importe_saldo_final', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('importe_saldo_final')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_caja_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_caja_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_caja_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='fnd_caja_txt_codigo' value='<?php Gral::_echoTxt($fnd_caja->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_fnd_caja_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_caja_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_caja_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_caja_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_caja_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_caja_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='fnd_caja_txa_observacion' rows='10' cols='50' id='fnd_caja_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($fnd_caja->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_fnd_caja_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_caja_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_caja_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_caja_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($fnd_caja->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_fnd_caja_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='fnd_caja'/>
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

