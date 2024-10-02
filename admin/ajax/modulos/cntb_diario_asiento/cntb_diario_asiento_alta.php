<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_ALTA')){
    echo "No tiene asignada la credencial CNTB_DIARIO_ASIENTO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'cntb_diario_asiento';
$db_nombre_pagina = 'cntb_diario_asiento_alta';

$cntb_diario_asiento = new CntbDiarioAsiento();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$cntb_diario_asiento = new CntbDiarioAsiento();
	if(trim($hdn_id) != '') $cntb_diario_asiento->setId($hdn_id, false);
	$cntb_diario_asiento->setDescripcion(Gral::getVars(1, "cntb_diario_asiento_txt_descripcion"));
	$cntb_diario_asiento->setCntbEjercicioId(Gral::getVars(1, "cntb_diario_asiento_cmb_cntb_ejercicio_id", null));
	$cntb_diario_asiento->setCntbPeriodoId(Gral::getVars(1, "cntb_diario_asiento_cmb_cntb_periodo_id", null));
	$cntb_diario_asiento->setCntbTipoAsientoId(Gral::getVars(1, "cntb_diario_asiento_cmb_cntb_tipo_asiento_id", null));
	$cntb_diario_asiento->setCntbTipoOrigenId(Gral::getVars(1, "cntb_diario_asiento_cmb_cntb_tipo_origen_id", null));
	$cntb_diario_asiento->setCntbTipoMovimientoId(Gral::getVars(1, "cntb_diario_asiento_cmb_cntb_tipo_movimiento_id", null));
	$cntb_diario_asiento->setGralActividadId(Gral::getVars(1, "cntb_diario_asiento_cmb_gral_actividad_id", null));
	$cntb_diario_asiento->setFecha(Gral::getFechaToDb(Gral::getVars(1, "cntb_diario_asiento_txt_fecha")));
	$cntb_diario_asiento->setNumero(Gral::getVars(1, "cntb_diario_asiento_txt_numero", 0));
	$cntb_diario_asiento->setCodigo(Gral::getVars(1, "cntb_diario_asiento_txt_codigo"));
	$cntb_diario_asiento->setObservacion(Gral::getVars(1, "cntb_diario_asiento_txa_observacion"));
	$cntb_diario_asiento->setOrden(Gral::getVars(1, "cntb_diario_asiento_txt_orden", 0));
	$cntb_diario_asiento->setEstado(Gral::getVars(1, "cntb_diario_asiento__estado", 0));
	$cntb_diario_asiento->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "cntb_diario_asiento_txt_creado")));
	$cntb_diario_asiento->setCreadoPor(Gral::getVars(1, "cntb_diario_asiento__creado_por", 0));
	$cntb_diario_asiento->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "cntb_diario_asiento_txt_modificado")));
	$cntb_diario_asiento->setModificadoPor(Gral::getVars(1, "cntb_diario_asiento__modificado_por", 0));

	$cntb_diario_asiento_estado = new CntbDiarioAsiento();
	if(trim($hdn_id) != ''){
		$cntb_diario_asiento_estado->setId($hdn_id);
		$cntb_diario_asiento->setEstado($cntb_diario_asiento_estado->getEstado());
				
	}else{
		$cntb_diario_asiento->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $cntb_diario_asiento->control();
			if(!$error->getExisteError()){
				$cntb_diario_asiento->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: cntb_diario_asiento_alta.php?cs=1&id='.$cntb_diario_asiento->getId());
			}
		break;
		case 'guardarnvo':
			$error = $cntb_diario_asiento->control();
			if(!$error->getExisteError()){
				$cntb_diario_asiento->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: cntb_diario_asiento_alta.php?cs=1');
				$cntb_diario_asiento = new CntbDiarioAsiento();
			}
		break;
	}
	Gral::setSes('CntbDiarioAsiento_ULTIMO_INSERTADO', $cntb_diario_asiento->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_cntb_diario_asiento_id = Gral::getVars(2, $prefijo.'cmb_cntb_diario_asiento_id', 0);
	if($cmb_cntb_diario_asiento_id != 0){
		$cntb_diario_asiento = CntbDiarioAsiento::getOxId($cmb_cntb_diario_asiento_id);
	}else{
	
	$cntb_diario_asiento->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$cntb_diario_asiento->setCntbEjercicioId(Gral::getVars(2, "cntb_ejercicio_id", 'null'));
	$cntb_diario_asiento->setCntbPeriodoId(Gral::getVars(2, "cntb_periodo_id", 'null'));
	$cntb_diario_asiento->setCntbTipoAsientoId(Gral::getVars(2, "cntb_tipo_asiento_id", 'null'));
	$cntb_diario_asiento->setCntbTipoOrigenId(Gral::getVars(2, "cntb_tipo_origen_id", 'null'));
	$cntb_diario_asiento->setCntbTipoMovimientoId(Gral::getVars(2, "cntb_tipo_movimiento_id", 'null'));
	$cntb_diario_asiento->setGralActividadId(Gral::getVars(2, "gral_actividad_id", 'null'));
	$cntb_diario_asiento->setFecha(Gral::getVars(2, "fecha", date('Y-m-d')));
	$cntb_diario_asiento->setNumero(Gral::getVars(2, "numero", 0));
	$cntb_diario_asiento->setCodigo(Gral::getVars(2, "codigo", ''));
	$cntb_diario_asiento->setObservacion(Gral::getVars(2, "observacion", ''));
	$cntb_diario_asiento->setOrden(Gral::getVars(2, "orden", 0));
	$cntb_diario_asiento->setEstado(Gral::getVars(2, "estado", 0));
	$cntb_diario_asiento->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$cntb_diario_asiento->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$cntb_diario_asiento->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$cntb_diario_asiento->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $cntb_diario_asiento->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/cntb_diario_asiento/cntb_diario_asiento_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_cntb_diario_asiento' width='90%'>
        
				<tr>
				  <td  id="label_cntb_diario_asiento_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_diario_asiento_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cntb_diario_asiento_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='cntb_diario_asiento_txt_descripcion' value='<?php Gral::_echoTxt($cntb_diario_asiento->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_cntb_diario_asiento_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_diario_asiento_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_diario_asiento_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_diario_asiento_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_diario_asiento_cmb_cntb_ejercicio_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cntb_ejercicio_id' ?>" >
				  
                                        <?php Lang::_lang('CntbEjercicio', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_diario_asiento_cmb_cntb_ejercicio_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cntb_ejercicio_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'cntb_diario_asiento_cmb_cntb_ejercicio_id', Gral::getCmbFiltro(CntbEjercicio::getCntbEjerciciosCmb(), '...'), $cntb_diario_asiento->getCntbEjercicioId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_ALTA_CMB_EDIT_CNTB_EJERCICIO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="cntb_diario_asiento_cmb_cntb_ejercicio_id" clase_id="cntb_ejercicio" prefijo='cntb_diario_asiento_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_cntb_ejercicio_id" <?php echo ($cntb_diario_asiento->getCntbEjercicioId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="cntb_diario_asiento_cmb_cntb_ejercicio_id" clase_id="cntb_ejercicio" prefijo='cntb_diario_asiento_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_cntb_diario_asiento_cmb_cntb_ejercicio_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_cntb_diario_asiento_alta_cntb_ejercicio_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_diario_asiento_alta_cntb_ejercicio_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_diario_asiento_alta_cntb_ejercicio_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_diario_asiento_alta_cntb_ejercicio_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cntb_ejercicio_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_diario_asiento_cmb_cntb_periodo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cntb_periodo_id' ?>" >
				  
                                        <?php Lang::_lang('CntbPeriodo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_diario_asiento_cmb_cntb_periodo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cntb_periodo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'cntb_diario_asiento_cmb_cntb_periodo_id', Gral::getCmbFiltro(CntbPeriodo::getCntbPeriodosCmb(), '...'), $cntb_diario_asiento->getCntbPeriodoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_ALTA_CMB_EDIT_CNTB_PERIODO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="cntb_diario_asiento_cmb_cntb_periodo_id" clase_id="cntb_periodo" prefijo='cntb_diario_asiento_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_cntb_periodo_id" <?php echo ($cntb_diario_asiento->getCntbPeriodoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="cntb_diario_asiento_cmb_cntb_periodo_id" clase_id="cntb_periodo" prefijo='cntb_diario_asiento_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_cntb_diario_asiento_cmb_cntb_periodo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_cntb_diario_asiento_alta_cntb_periodo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_diario_asiento_alta_cntb_periodo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_diario_asiento_alta_cntb_periodo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_diario_asiento_alta_cntb_periodo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cntb_periodo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_diario_asiento_cmb_cntb_tipo_asiento_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cntb_tipo_asiento_id' ?>" >
				  
                                        <?php Lang::_lang('CntbTipoAsiento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_diario_asiento_cmb_cntb_tipo_asiento_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cntb_tipo_asiento_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'cntb_diario_asiento_cmb_cntb_tipo_asiento_id', Gral::getCmbFiltro(CntbTipoAsiento::getCntbTipoAsientosCmb(), '...'), $cntb_diario_asiento->getCntbTipoAsientoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_ALTA_CMB_EDIT_CNTB_TIPO_ASIENTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="cntb_diario_asiento_cmb_cntb_tipo_asiento_id" clase_id="cntb_tipo_asiento" prefijo='cntb_diario_asiento_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_cntb_tipo_asiento_id" <?php echo ($cntb_diario_asiento->getCntbTipoAsientoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="cntb_diario_asiento_cmb_cntb_tipo_asiento_id" clase_id="cntb_tipo_asiento" prefijo='cntb_diario_asiento_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_cntb_diario_asiento_cmb_cntb_tipo_asiento_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_cntb_diario_asiento_alta_cntb_tipo_asiento_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_diario_asiento_alta_cntb_tipo_asiento_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_diario_asiento_alta_cntb_tipo_asiento_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_diario_asiento_alta_cntb_tipo_asiento_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cntb_tipo_asiento_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_diario_asiento_cmb_cntb_tipo_origen_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cntb_tipo_origen_id' ?>" >
				  
                                        <?php Lang::_lang('CntbTipoOrigen', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_diario_asiento_cmb_cntb_tipo_origen_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cntb_tipo_origen_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'cntb_diario_asiento_cmb_cntb_tipo_origen_id', Gral::getCmbFiltro(CntbTipoOrigen::getCntbTipoOrigensCmb(), '...'), $cntb_diario_asiento->getCntbTipoOrigenId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_ALTA_CMB_EDIT_CNTB_TIPO_ORIGEN')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="cntb_diario_asiento_cmb_cntb_tipo_origen_id" clase_id="cntb_tipo_origen" prefijo='cntb_diario_asiento_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_cntb_tipo_origen_id" <?php echo ($cntb_diario_asiento->getCntbTipoOrigenId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="cntb_diario_asiento_cmb_cntb_tipo_origen_id" clase_id="cntb_tipo_origen" prefijo='cntb_diario_asiento_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_cntb_diario_asiento_cmb_cntb_tipo_origen_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_cntb_diario_asiento_alta_cntb_tipo_origen_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_diario_asiento_alta_cntb_tipo_origen_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_diario_asiento_alta_cntb_tipo_origen_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_diario_asiento_alta_cntb_tipo_origen_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cntb_tipo_origen_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_diario_asiento_cmb_cntb_tipo_movimiento_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cntb_tipo_movimiento_id' ?>" >
				  
                                        <?php Lang::_lang('CntbTipoMovimiento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_diario_asiento_cmb_cntb_tipo_movimiento_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cntb_tipo_movimiento_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'cntb_diario_asiento_cmb_cntb_tipo_movimiento_id', Gral::getCmbFiltro(CntbTipoMovimiento::getCntbTipoMovimientosCmb(), '...'), $cntb_diario_asiento->getCntbTipoMovimientoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_ALTA_CMB_EDIT_CNTB_TIPO_MOVIMIENTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="cntb_diario_asiento_cmb_cntb_tipo_movimiento_id" clase_id="cntb_tipo_movimiento" prefijo='cntb_diario_asiento_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_cntb_tipo_movimiento_id" <?php echo ($cntb_diario_asiento->getCntbTipoMovimientoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="cntb_diario_asiento_cmb_cntb_tipo_movimiento_id" clase_id="cntb_tipo_movimiento" prefijo='cntb_diario_asiento_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_cntb_diario_asiento_cmb_cntb_tipo_movimiento_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_cntb_diario_asiento_alta_cntb_tipo_movimiento_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_diario_asiento_alta_cntb_tipo_movimiento_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_diario_asiento_alta_cntb_tipo_movimiento_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_diario_asiento_alta_cntb_tipo_movimiento_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cntb_tipo_movimiento_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_diario_asiento_cmb_gral_actividad_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_actividad_id' ?>" >
				  
                                        <?php Lang::_lang('GralActividad', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_diario_asiento_cmb_gral_actividad_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_actividad_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'cntb_diario_asiento_cmb_gral_actividad_id', Gral::getCmbFiltro(GralActividad::getGralActividadsCmb(), '...'), $cntb_diario_asiento->getGralActividadId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_ALTA_CMB_EDIT_GRAL_ACTIVIDAD')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="cntb_diario_asiento_cmb_gral_actividad_id" clase_id="gral_actividad" prefijo='cntb_diario_asiento_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_actividad_id" <?php echo ($cntb_diario_asiento->getGralActividadId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="cntb_diario_asiento_cmb_gral_actividad_id" clase_id="gral_actividad" prefijo='cntb_diario_asiento_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_cntb_diario_asiento_cmb_gral_actividad_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_cntb_diario_asiento_alta_gral_actividad_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_diario_asiento_alta_gral_actividad_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_diario_asiento_alta_gral_actividad_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_diario_asiento_alta_gral_actividad_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_actividad_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_diario_asiento_txt_fecha" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha' ?>" >
				  
                                        <?php Lang::_lang('Fecha', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_diario_asiento_txt_fecha" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cntb_diario_asiento_txt_fecha' type='text' class='textbox <?php echo $error_input_css ?> date' id='cntb_diario_asiento_txt_fecha' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($cntb_diario_asiento->getFecha()), true) ?>' size='40' />
					<input type='button' id='cal_cntb_diario_asiento_txt_fecha' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'cntb_diario_asiento_txt_fecha', ifFormat: '%d/%m/%Y', button: 'cal_cntb_diario_asiento_txt_fecha'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_cntb_diario_asiento_alta_fecha', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_diario_asiento_alta_fecha', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_diario_asiento_alta_fecha', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_diario_asiento_alta_fecha', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_diario_asiento_txt_numero" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_numero' ?>" >
				  
                                        <?php Lang::_lang('Numero', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_diario_asiento_txt_numero" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('numero')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cntb_diario_asiento_txt_numero' type='text' class='textbox <?php echo $error_input_css ?> ' id='cntb_diario_asiento_txt_numero' value='<?php Gral::_echoTxt($cntb_diario_asiento->getNumero(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_cntb_diario_asiento_alta_numero', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_diario_asiento_alta_numero', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_diario_asiento_alta_numero', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_diario_asiento_alta_numero', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('numero')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_diario_asiento_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_diario_asiento_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cntb_diario_asiento_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='cntb_diario_asiento_txt_codigo' value='<?php Gral::_echoTxt($cntb_diario_asiento->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_cntb_diario_asiento_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_diario_asiento_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_diario_asiento_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_diario_asiento_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_diario_asiento_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_diario_asiento_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='cntb_diario_asiento_txa_observacion' rows='10' cols='50' id='cntb_diario_asiento_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($cntb_diario_asiento->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_cntb_diario_asiento_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_diario_asiento_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_diario_asiento_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_diario_asiento_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($cntb_diario_asiento->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_cntb_diario_asiento_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='cntb_diario_asiento'/>
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

