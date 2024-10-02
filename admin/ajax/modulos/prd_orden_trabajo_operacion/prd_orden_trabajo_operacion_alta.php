<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_OPERACION_ALTA')){
    echo "No tiene asignada la credencial PRD_ORDEN_TRABAJO_OPERACION_ALTA. ";
    return false;
}

$db_nombre_objeto = 'prd_orden_trabajo_operacion';
$db_nombre_pagina = 'prd_orden_trabajo_operacion_alta';

$prd_orden_trabajo_operacion = new PrdOrdenTrabajoOperacion();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$prd_orden_trabajo_operacion = new PrdOrdenTrabajoOperacion();
	if(trim($hdn_id) != '') $prd_orden_trabajo_operacion->setId($hdn_id, false);
	$prd_orden_trabajo_operacion->setDescripcion(Gral::getVars(1, "prd_orden_trabajo_operacion_txt_descripcion"));
	$prd_orden_trabajo_operacion->setPrdOrdenTrabajoCicloId(Gral::getVars(1, "prd_orden_trabajo_operacion_cmb_prd_orden_trabajo_ciclo_id", null));
	$prd_orden_trabajo_operacion->setPrdParamOperacionId(Gral::getVars(1, "prd_orden_trabajo_operacion_cmb_prd_param_operacion_id", null));
	$prd_orden_trabajo_operacion->setPrdOrdenTrabajoOperacionTipoEstadoId(Gral::getVars(1, "prd_orden_trabajo_operacion_cmb_prd_orden_trabajo_operacion_tipo_estado_id", null));
	$prd_orden_trabajo_operacion->setCantidadOperarios(Gral::getVars(1, "prd_orden_trabajo_operacion_txt_cantidad_operarios", 0));
	$prd_orden_trabajo_operacion->setCantidadEquipos(Gral::getVars(1, "prd_orden_trabajo_operacion_txt_cantidad_equipos", 0));
	$prd_orden_trabajo_operacion->setNumero(Gral::getVars(1, "prd_orden_trabajo_operacion_txt_numero", 0));
	$prd_orden_trabajo_operacion->setCodigo(Gral::getVars(1, "prd_orden_trabajo_operacion_txt_codigo"));
	$prd_orden_trabajo_operacion->setObservacion(Gral::getVars(1, "prd_orden_trabajo_operacion_txa_observacion"));
	$prd_orden_trabajo_operacion->setOrden(Gral::getVars(1, "prd_orden_trabajo_operacion_txt_orden", 0));
	$prd_orden_trabajo_operacion->setEstado(Gral::getVars(1, "prd_orden_trabajo_operacion_cmb_estado", 0));
	$prd_orden_trabajo_operacion->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "prd_orden_trabajo_operacion_txt_creado")));
	$prd_orden_trabajo_operacion->setCreadoPor(Gral::getVars(1, "prd_orden_trabajo_operacion__creado_por", 0));
	$prd_orden_trabajo_operacion->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "prd_orden_trabajo_operacion_txt_modificado")));
	$prd_orden_trabajo_operacion->setModificadoPor(Gral::getVars(1, "prd_orden_trabajo_operacion__modificado_por", 0));

	$prd_orden_trabajo_operacion_estado = new PrdOrdenTrabajoOperacion();
	if(trim($hdn_id) != ''){
		$prd_orden_trabajo_operacion_estado->setId($hdn_id);
		$prd_orden_trabajo_operacion->setEstado($prd_orden_trabajo_operacion_estado->getEstado());
				
	}else{
		$prd_orden_trabajo_operacion->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $prd_orden_trabajo_operacion->control();
			if(!$error->getExisteError()){
				$prd_orden_trabajo_operacion->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: prd_orden_trabajo_operacion_alta.php?cs=1&id='.$prd_orden_trabajo_operacion->getId());
			}
		break;
		case 'guardarnvo':
			$error = $prd_orden_trabajo_operacion->control();
			if(!$error->getExisteError()){
				$prd_orden_trabajo_operacion->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: prd_orden_trabajo_operacion_alta.php?cs=1');
				$prd_orden_trabajo_operacion = new PrdOrdenTrabajoOperacion();
			}
		break;
	}
	Gral::setSes('PrdOrdenTrabajoOperacion_ULTIMO_INSERTADO', $prd_orden_trabajo_operacion->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_prd_orden_trabajo_operacion_id = Gral::getVars(2, $prefijo.'cmb_prd_orden_trabajo_operacion_id', 0);
	if($cmb_prd_orden_trabajo_operacion_id != 0){
		$prd_orden_trabajo_operacion = PrdOrdenTrabajoOperacion::getOxId($cmb_prd_orden_trabajo_operacion_id);
	}else{
	
	$prd_orden_trabajo_operacion->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$prd_orden_trabajo_operacion->setPrdOrdenTrabajoCicloId(Gral::getVars(2, "prd_orden_trabajo_ciclo_id", 'null'));
	$prd_orden_trabajo_operacion->setPrdParamOperacionId(Gral::getVars(2, "prd_param_operacion_id", 'null'));
	$prd_orden_trabajo_operacion->setPrdOrdenTrabajoOperacionTipoEstadoId(Gral::getVars(2, "prd_orden_trabajo_operacion_tipo_estado_id", 'null'));
	$prd_orden_trabajo_operacion->setCantidadOperarios(Gral::getVars(2, "cantidad_operarios", 0));
	$prd_orden_trabajo_operacion->setCantidadEquipos(Gral::getVars(2, "cantidad_equipos", 0));
	$prd_orden_trabajo_operacion->setNumero(Gral::getVars(2, "numero", 0));
	$prd_orden_trabajo_operacion->setCodigo(Gral::getVars(2, "codigo", ''));
	$prd_orden_trabajo_operacion->setObservacion(Gral::getVars(2, "observacion", ''));
	$prd_orden_trabajo_operacion->setOrden(Gral::getVars(2, "orden", 0));
	$prd_orden_trabajo_operacion->setEstado(Gral::getVars(2, "estado", 0));
	$prd_orden_trabajo_operacion->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$prd_orden_trabajo_operacion->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$prd_orden_trabajo_operacion->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$prd_orden_trabajo_operacion->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $prd_orden_trabajo_operacion->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/prd_orden_trabajo_operacion/prd_orden_trabajo_operacion_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_prd_orden_trabajo_operacion' width='90%'>
        
				<tr>
				  <td  id="label_prd_orden_trabajo_operacion_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_orden_trabajo_operacion_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prd_orden_trabajo_operacion_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='prd_orden_trabajo_operacion_txt_descripcion' value='<?php Gral::_echoTxt($prd_orden_trabajo_operacion->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_prd_orden_trabajo_operacion_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_orden_trabajo_operacion_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_orden_trabajo_operacion_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_orden_trabajo_operacion_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_orden_trabajo_operacion_cmb_prd_orden_trabajo_ciclo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prd_orden_trabajo_ciclo_id' ?>" >
				  
                                        <?php Lang::_lang('PrdOrdenTrabajoCiclo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_orden_trabajo_operacion_cmb_prd_orden_trabajo_ciclo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prd_orden_trabajo_ciclo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prd_orden_trabajo_operacion_cmb_prd_orden_trabajo_ciclo_id', Gral::getCmbFiltro(PrdOrdenTrabajoCiclo::getPrdOrdenTrabajoCiclosCmb(), '...'), $prd_orden_trabajo_operacion->getPrdOrdenTrabajoCicloId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_OPERACION_ALTA_CMB_EDIT_PRD_ORDEN_TRABAJO_CICLO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="prd_orden_trabajo_operacion_cmb_prd_orden_trabajo_ciclo_id" clase_id="prd_orden_trabajo_ciclo" prefijo='prd_orden_trabajo_operacion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prd_orden_trabajo_ciclo_id" <?php echo ($prd_orden_trabajo_operacion->getPrdOrdenTrabajoCicloId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="prd_orden_trabajo_operacion_cmb_prd_orden_trabajo_ciclo_id" clase_id="prd_orden_trabajo_ciclo" prefijo='prd_orden_trabajo_operacion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_prd_orden_trabajo_operacion_cmb_prd_orden_trabajo_ciclo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_prd_orden_trabajo_operacion_alta_prd_orden_trabajo_ciclo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_orden_trabajo_operacion_alta_prd_orden_trabajo_ciclo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_orden_trabajo_operacion_alta_prd_orden_trabajo_ciclo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_orden_trabajo_operacion_alta_prd_orden_trabajo_ciclo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prd_orden_trabajo_ciclo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_orden_trabajo_operacion_cmb_prd_param_operacion_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prd_param_operacion_id' ?>" >
				  
                                        <?php Lang::_lang('PrdParamOperacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_orden_trabajo_operacion_cmb_prd_param_operacion_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prd_param_operacion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prd_orden_trabajo_operacion_cmb_prd_param_operacion_id', Gral::getCmbFiltro(PrdParamOperacion::getPrdParamOperacionsCmb(), '...'), $prd_orden_trabajo_operacion->getPrdParamOperacionId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_OPERACION_ALTA_CMB_EDIT_PRD_PARAM_OPERACION')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="prd_orden_trabajo_operacion_cmb_prd_param_operacion_id" clase_id="prd_param_operacion" prefijo='prd_orden_trabajo_operacion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prd_param_operacion_id" <?php echo ($prd_orden_trabajo_operacion->getPrdParamOperacionId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="prd_orden_trabajo_operacion_cmb_prd_param_operacion_id" clase_id="prd_param_operacion" prefijo='prd_orden_trabajo_operacion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_prd_orden_trabajo_operacion_cmb_prd_param_operacion_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_prd_orden_trabajo_operacion_alta_prd_param_operacion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_orden_trabajo_operacion_alta_prd_param_operacion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_orden_trabajo_operacion_alta_prd_param_operacion_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_orden_trabajo_operacion_alta_prd_param_operacion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prd_param_operacion_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_orden_trabajo_operacion_cmb_prd_orden_trabajo_operacion_tipo_estado_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prd_orden_trabajo_operacion_tipo_estado_id' ?>" >
				  
                                        <?php Lang::_lang('PrdOrdenTrabajoOperacionTipoEstado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_orden_trabajo_operacion_cmb_prd_orden_trabajo_operacion_tipo_estado_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prd_orden_trabajo_operacion_tipo_estado_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prd_orden_trabajo_operacion_cmb_prd_orden_trabajo_operacion_tipo_estado_id', Gral::getCmbFiltro(PrdOrdenTrabajoOperacionTipoEstado::getPrdOrdenTrabajoOperacionTipoEstadosCmb(), '...'), $prd_orden_trabajo_operacion->getPrdOrdenTrabajoOperacionTipoEstadoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_OPERACION_ALTA_CMB_EDIT_PRD_ORDEN_TRABAJO_OPERACION_TIPO_ESTADO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="prd_orden_trabajo_operacion_cmb_prd_orden_trabajo_operacion_tipo_estado_id" clase_id="prd_orden_trabajo_operacion_tipo_estado" prefijo='prd_orden_trabajo_operacion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prd_orden_trabajo_operacion_tipo_estado_id" <?php echo ($prd_orden_trabajo_operacion->getPrdOrdenTrabajoOperacionTipoEstadoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="prd_orden_trabajo_operacion_cmb_prd_orden_trabajo_operacion_tipo_estado_id" clase_id="prd_orden_trabajo_operacion_tipo_estado" prefijo='prd_orden_trabajo_operacion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_prd_orden_trabajo_operacion_cmb_prd_orden_trabajo_operacion_tipo_estado_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_prd_orden_trabajo_operacion_alta_prd_orden_trabajo_operacion_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_orden_trabajo_operacion_alta_prd_orden_trabajo_operacion_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_orden_trabajo_operacion_alta_prd_orden_trabajo_operacion_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_orden_trabajo_operacion_alta_prd_orden_trabajo_operacion_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prd_orden_trabajo_operacion_tipo_estado_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_orden_trabajo_operacion_txt_cantidad_operarios" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cantidad_operarios' ?>" >
				  
                                        <?php Lang::_lang('Cant Operarios', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_orden_trabajo_operacion_txt_cantidad_operarios" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cantidad_operarios')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prd_orden_trabajo_operacion_txt_cantidad_operarios' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='prd_orden_trabajo_operacion_txt_cantidad_operarios' value='<?php Gral::_echoTxt($prd_orden_trabajo_operacion->getCantidadOperarios(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prd_orden_trabajo_operacion_alta_cantidad_operarios', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_orden_trabajo_operacion_alta_cantidad_operarios', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_orden_trabajo_operacion_alta_cantidad_operarios', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_orden_trabajo_operacion_alta_cantidad_operarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cantidad_operarios')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_orden_trabajo_operacion_txt_cantidad_equipos" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cantidad_equipos' ?>" >
				  
                                        <?php Lang::_lang('Cant Equipo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_orden_trabajo_operacion_txt_cantidad_equipos" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cantidad_equipos')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prd_orden_trabajo_operacion_txt_cantidad_equipos' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='prd_orden_trabajo_operacion_txt_cantidad_equipos' value='<?php Gral::_echoTxt($prd_orden_trabajo_operacion->getCantidadEquipos(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prd_orden_trabajo_operacion_alta_cantidad_equipos', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_orden_trabajo_operacion_alta_cantidad_equipos', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_orden_trabajo_operacion_alta_cantidad_equipos', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_orden_trabajo_operacion_alta_cantidad_equipos', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cantidad_equipos')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_orden_trabajo_operacion_txt_numero" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_numero' ?>" >
				  
                                        <?php Lang::_lang('Numero', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_orden_trabajo_operacion_txt_numero" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('numero')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prd_orden_trabajo_operacion_txt_numero' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='prd_orden_trabajo_operacion_txt_numero' value='<?php Gral::_echoTxt($prd_orden_trabajo_operacion->getNumero(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prd_orden_trabajo_operacion_alta_numero', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_orden_trabajo_operacion_alta_numero', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_orden_trabajo_operacion_alta_numero', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_orden_trabajo_operacion_alta_numero', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('numero')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_orden_trabajo_operacion_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_orden_trabajo_operacion_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prd_orden_trabajo_operacion_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='prd_orden_trabajo_operacion_txt_codigo' value='<?php Gral::_echoTxt($prd_orden_trabajo_operacion->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prd_orden_trabajo_operacion_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_orden_trabajo_operacion_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_orden_trabajo_operacion_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_orden_trabajo_operacion_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_orden_trabajo_operacion_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_orden_trabajo_operacion_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='prd_orden_trabajo_operacion_txa_observacion' rows='10' cols='50' id='prd_orden_trabajo_operacion_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($prd_orden_trabajo_operacion->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_prd_orden_trabajo_operacion_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_orden_trabajo_operacion_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_orden_trabajo_operacion_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_orden_trabajo_operacion_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($prd_orden_trabajo_operacion->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_prd_orden_trabajo_operacion_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='prd_orden_trabajo_operacion'/>
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

