<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('FND_CHQ_TIPO_EMISOR_FND_CHQ_TIPO_ESTADO_ALTA')){
    echo "No tiene asignada la credencial FND_CHQ_TIPO_EMISOR_FND_CHQ_TIPO_ESTADO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado';
$db_nombre_pagina = 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta';

$fnd_chq_tipo_emisor_fnd_chq_tipo_estado = new FndChqTipoEmisorFndChqTipoEstado();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado = new FndChqTipoEmisorFndChqTipoEstado();
	if(trim($hdn_id) != '') $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setId($hdn_id, false);
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setDescripcion(Gral::getVars(1, "fnd_chq_tipo_emisor_fnd_chq_tipo_estado_txt_descripcion"));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setFndChqTipoEmisorId(Gral::getVars(1, "fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_fnd_chq_tipo_emisor_id", null));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setFndChqTipoEstadoId(Gral::getVars(1, "fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_fnd_chq_tipo_estado_id", null));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setFndChqTipoEstadoPosible(Gral::getVars(1, "fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_fnd_chq_tipo_estado_posible", 0));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setCambioAutomatico(Gral::getVars(1, "fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_cambio_automatico", 0));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setCambioManual(Gral::getVars(1, "fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_cambio_manual", 0));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setPredeterminado(Gral::getVars(1, "fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_predeterminado", 0));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setCambioOtroComprobante(Gral::getVars(1, "fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_cambio_otro_comprobante", 0));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setCambioSimultaneo(Gral::getVars(1, "fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_cambio_simultaneo", 0));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setCodigo(Gral::getVars(1, "fnd_chq_tipo_emisor_fnd_chq_tipo_estado_txt_codigo"));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setObservacion(Gral::getVars(1, "fnd_chq_tipo_emisor_fnd_chq_tipo_estado_txa_observacion"));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setOrden(Gral::getVars(1, "fnd_chq_tipo_emisor_fnd_chq_tipo_estado_txt_orden", 0));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setEstado(Gral::getVars(1, "fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_estado", 0));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "fnd_chq_tipo_emisor_fnd_chq_tipo_estado_txt_creado")));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setCreadoPor(Gral::getVars(1, "fnd_chq_tipo_emisor_fnd_chq_tipo_estado__creado_por", 0));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "fnd_chq_tipo_emisor_fnd_chq_tipo_estado_txt_modificado")));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setModificadoPor(Gral::getVars(1, "fnd_chq_tipo_emisor_fnd_chq_tipo_estado__modificado_por", 0));

	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado_estado = new FndChqTipoEmisorFndChqTipoEstado();
	if(trim($hdn_id) != ''){
		$fnd_chq_tipo_emisor_fnd_chq_tipo_estado_estado->setId($hdn_id);
		$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setEstado($fnd_chq_tipo_emisor_fnd_chq_tipo_estado_estado->getEstado());
				
	}else{
		$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->control();
			if(!$error->getExisteError()){
				$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta.php?cs=1&id='.$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getId());
			}
		break;
		case 'guardarnvo':
			$error = $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->control();
			if(!$error->getExisteError()){
				$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta.php?cs=1');
				$fnd_chq_tipo_emisor_fnd_chq_tipo_estado = new FndChqTipoEmisorFndChqTipoEstado();
			}
		break;
	}
	Gral::setSes('FndChqTipoEmisorFndChqTipoEstado_ULTIMO_INSERTADO', $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_id = Gral::getVars(2, $prefijo.'cmb_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_id', 0);
	if($cmb_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_id != 0){
		$fnd_chq_tipo_emisor_fnd_chq_tipo_estado = FndChqTipoEmisorFndChqTipoEstado::getOxId($cmb_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_id);
	}else{
	
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setFndChqTipoEmisorId(Gral::getVars(2, "fnd_chq_tipo_emisor_id", 'null'));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setFndChqTipoEstadoId(Gral::getVars(2, "fnd_chq_tipo_estado_id", 'null'));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setFndChqTipoEstadoPosible(Gral::getVars(2, "fnd_chq_tipo_estado_posible", 'null'));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setCambioAutomatico(Gral::getVars(2, "cambio_automatico", 0));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setCambioManual(Gral::getVars(2, "cambio_manual", 0));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setPredeterminado(Gral::getVars(2, "predeterminado", 0));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setCambioOtroComprobante(Gral::getVars(2, "cambio_otro_comprobante", 0));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setCambioSimultaneo(Gral::getVars(2, "cambio_simultaneo", 0));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setCodigo(Gral::getVars(2, "codigo", ''));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setObservacion(Gral::getVars(2, "observacion", ''));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setOrden(Gral::getVars(2, "orden", 0));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setEstado(Gral::getVars(2, "estado", 0));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/fnd_chq_tipo_emisor_fnd_chq_tipo_estado/fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_fnd_chq_tipo_emisor_fnd_chq_tipo_estado' width='90%'>
        
				<tr>
				  <td  id="label_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_fnd_chq_tipo_emisor_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fnd_chq_tipo_emisor_id' ?>" >
				  
                                        <?php Lang::_lang('FndChqTipoEmisor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_fnd_chq_tipo_emisor_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fnd_chq_tipo_emisor_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_fnd_chq_tipo_emisor_id', Gral::getCmbFiltro(FndChqTipoEmisor::getFndChqTipoEmisorsCmb(), '...'), $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getFndChqTipoEmisorId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('FND_CHQ_TIPO_EMISOR_FND_CHQ_TIPO_ESTADO_ALTA_CMB_EDIT_FND_CHQ_TIPO_EMISOR')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_fnd_chq_tipo_emisor_id" clase_id="fnd_chq_tipo_emisor" prefijo='fnd_chq_tipo_emisor_fnd_chq_tipo_estado_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_fnd_chq_tipo_emisor_id" <?php echo ($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getFndChqTipoEmisorId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_fnd_chq_tipo_emisor_id" clase_id="fnd_chq_tipo_emisor" prefijo='fnd_chq_tipo_emisor_fnd_chq_tipo_estado_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_fnd_chq_tipo_emisor_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta_fnd_chq_tipo_emisor_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta_fnd_chq_tipo_emisor_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta_fnd_chq_tipo_emisor_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta_fnd_chq_tipo_emisor_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fnd_chq_tipo_emisor_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_fnd_chq_tipo_estado_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fnd_chq_tipo_estado_id' ?>" >
				  
                                        <?php Lang::_lang('FndChqTipoEstado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_fnd_chq_tipo_estado_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fnd_chq_tipo_estado_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_fnd_chq_tipo_estado_id', Gral::getCmbFiltro(FndChqTipoEstado::getFndChqTipoEstadosCmb(), '...'), $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getFndChqTipoEstadoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('FND_CHQ_TIPO_EMISOR_FND_CHQ_TIPO_ESTADO_ALTA_CMB_EDIT_FND_CHQ_TIPO_ESTADO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_fnd_chq_tipo_estado_id" clase_id="fnd_chq_tipo_estado" prefijo='fnd_chq_tipo_emisor_fnd_chq_tipo_estado_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_fnd_chq_tipo_estado_id" <?php echo ($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getFndChqTipoEstadoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_fnd_chq_tipo_estado_id" clase_id="fnd_chq_tipo_estado" prefijo='fnd_chq_tipo_emisor_fnd_chq_tipo_estado_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_fnd_chq_tipo_estado_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta_fnd_chq_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta_fnd_chq_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta_fnd_chq_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta_fnd_chq_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fnd_chq_tipo_estado_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_fnd_chq_tipo_estado_posible" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fnd_chq_tipo_estado_posible' ?>" >
				  
                                        <?php Lang::_lang('FndChqTipoEstadoPosible', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_fnd_chq_tipo_estado_posible" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fnd_chq_tipo_estado_posible')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_fnd_chq_tipo_estado_posible', Gral::getCmbFiltro(FndChqTipoEstado::getFndChqTipoEstadosCmb(), '...'), $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getFndChqTipoEstadoPosible(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta_fnd_chq_tipo_estado_posible', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta_fnd_chq_tipo_estado_posible', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta_fnd_chq_tipo_estado_posible', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta_fnd_chq_tipo_estado_posible', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fnd_chq_tipo_estado_posible')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_cambio_automatico" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cambio_automatico' ?>" >
				  
                                        <?php Lang::_lang('Cambio Automatico', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_cambio_automatico" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cambio_automatico')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_cambio_automatico', GralSiNo::getGralSiNosCmb(), $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCambioAutomatico(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta_cambio_automatico', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta_cambio_automatico', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta_cambio_automatico', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta_cambio_automatico', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cambio_automatico')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_cambio_manual" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cambio_manual' ?>" >
				  
                                        <?php Lang::_lang('Cambio Manual', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_cambio_manual" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cambio_manual')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_cambio_manual', GralSiNo::getGralSiNosCmb(), $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCambioManual(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta_cambio_manual', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta_cambio_manual', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta_cambio_manual', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta_cambio_manual', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cambio_manual')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_predeterminado" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_predeterminado' ?>" >
				  
                                        <?php Lang::_lang('Predeterminado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_predeterminado" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('predeterminado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_predeterminado', GralSiNo::getGralSiNosCmb(), $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getPredeterminado(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta_predeterminado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta_predeterminado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta_predeterminado', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta_predeterminado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('predeterminado')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_cambio_otro_comprobante" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cambio_otro_comprobante' ?>" >
				  
                                        <?php Lang::_lang('Cambio Otro Comprobante', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_cambio_otro_comprobante" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cambio_otro_comprobante')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_cambio_otro_comprobante', GralSiNo::getGralSiNosCmb(), $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCambioOtroComprobante(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta_cambio_otro_comprobante', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta_cambio_otro_comprobante', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta_cambio_otro_comprobante', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta_cambio_otro_comprobante', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cambio_otro_comprobante')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_cambio_simultaneo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cambio_simultaneo' ?>" >
				  
                                        <?php Lang::_lang('Cambio Simultaneo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_cambio_simultaneo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cambio_simultaneo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cmb_cambio_simultaneo', GralSiNo::getGralSiNosCmb(), $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCambioSimultaneo(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta_cambio_simultaneo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta_cambio_simultaneo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta_cambio_simultaneo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta_cambio_simultaneo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cambio_simultaneo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='fnd_chq_tipo_emisor_fnd_chq_tipo_estado_txa_observacion' rows='10' cols='50' id='fnd_chq_tipo_emisor_fnd_chq_tipo_estado_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='fnd_chq_tipo_emisor_fnd_chq_tipo_estado'/>
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

