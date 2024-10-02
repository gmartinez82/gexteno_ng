<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PRD_PARAM_OPERACION_ALTA')){
    echo "No tiene asignada la credencial PRD_PARAM_OPERACION_ALTA. ";
    return false;
}

$db_nombre_objeto = 'prd_param_operacion';
$db_nombre_pagina = 'prd_param_operacion_alta';

$prd_param_operacion = new PrdParamOperacion();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$prd_param_operacion = new PrdParamOperacion();
	if(trim($hdn_id) != '') $prd_param_operacion->setId($hdn_id, false);
	$prd_param_operacion->setDescripcion(Gral::getVars(1, "prd_param_operacion_txt_descripcion"));
	$prd_param_operacion->setDescripcionCorta(Gral::getVars(1, "prd_param_operacion_txt_descripcion_corta"));
	$prd_param_operacion->setPrdParamTipoOperacionId(Gral::getVars(1, "prd_param_operacion_cmb_prd_param_tipo_operacion_id", null));
	$prd_param_operacion->setNumero(Gral::getVars(1, "prd_param_operacion_txt_numero", 0));
	$prd_param_operacion->setPrdProcesoProductivoId(Gral::getVars(1, "prd_param_operacion_cmb_prd_proceso_productivo_id", null));
	$prd_param_operacion->setPrdLineaProduccionId(Gral::getVars(1, "prd_param_operacion_cmb_prd_linea_produccion_id", null));
	$prd_param_operacion->setPrdEquipoId(Gral::getVars(1, "prd_param_operacion_cmb_prd_equipo_id", null));
	$prd_param_operacion->setCantidadOperarios(Gral::getVars(1, "prd_param_operacion_txt_cantidad_operarios", 0));
	$prd_param_operacion->setCantidadEquipos(Gral::getVars(1, "prd_param_operacion_txt_cantidad_equipos", 0));
	$prd_param_operacion->setCodigo(Gral::getVars(1, "prd_param_operacion_txt_codigo"));
	$prd_param_operacion->setObservacion(Gral::getVars(1, "prd_param_operacion_txa_observacion"));
	$prd_param_operacion->setOrden(Gral::getVars(1, "prd_param_operacion_txt_orden", 0));
	$prd_param_operacion->setEstado(Gral::getVars(1, "prd_param_operacion_cmb_estado", 0));
	$prd_param_operacion->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "prd_param_operacion_txt_creado")));
	$prd_param_operacion->setCreadoPor(Gral::getVars(1, "prd_param_operacion__creado_por", 0));
	$prd_param_operacion->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "prd_param_operacion_txt_modificado")));
	$prd_param_operacion->setModificadoPor(Gral::getVars(1, "prd_param_operacion__modificado_por", 0));

	$prd_param_operacion_estado = new PrdParamOperacion();
	if(trim($hdn_id) != ''){
		$prd_param_operacion_estado->setId($hdn_id);
		$prd_param_operacion->setEstado($prd_param_operacion_estado->getEstado());
				
	}else{
		$prd_param_operacion->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $prd_param_operacion->control();
			if(!$error->getExisteError()){
				$prd_param_operacion->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: prd_param_operacion_alta.php?cs=1&id='.$prd_param_operacion->getId());
			}
		break;
		case 'guardarnvo':
			$error = $prd_param_operacion->control();
			if(!$error->getExisteError()){
				$prd_param_operacion->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: prd_param_operacion_alta.php?cs=1');
				$prd_param_operacion = new PrdParamOperacion();
			}
		break;
	}
	Gral::setSes('PrdParamOperacion_ULTIMO_INSERTADO', $prd_param_operacion->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_prd_param_operacion_id = Gral::getVars(2, $prefijo.'cmb_prd_param_operacion_id', 0);
	if($cmb_prd_param_operacion_id != 0){
		$prd_param_operacion = PrdParamOperacion::getOxId($cmb_prd_param_operacion_id);
	}else{
	
	$prd_param_operacion->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$prd_param_operacion->setDescripcionCorta(Gral::getVars(2, "descripcion_corta", ''));
	$prd_param_operacion->setPrdParamTipoOperacionId(Gral::getVars(2, "prd_param_tipo_operacion_id", 'null'));
	$prd_param_operacion->setNumero(Gral::getVars(2, "numero", 0));
	$prd_param_operacion->setPrdProcesoProductivoId(Gral::getVars(2, "prd_proceso_productivo_id", 'null'));
	$prd_param_operacion->setPrdLineaProduccionId(Gral::getVars(2, "prd_linea_produccion_id", 'null'));
	$prd_param_operacion->setPrdEquipoId(Gral::getVars(2, "prd_equipo_id", 'null'));
	$prd_param_operacion->setCantidadOperarios(Gral::getVars(2, "cantidad_operarios", 0));
	$prd_param_operacion->setCantidadEquipos(Gral::getVars(2, "cantidad_equipos", 0));
	$prd_param_operacion->setCodigo(Gral::getVars(2, "codigo", ''));
	$prd_param_operacion->setObservacion(Gral::getVars(2, "observacion", ''));
	$prd_param_operacion->setOrden(Gral::getVars(2, "orden", 0));
	$prd_param_operacion->setEstado(Gral::getVars(2, "estado", 0));
	$prd_param_operacion->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$prd_param_operacion->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$prd_param_operacion->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$prd_param_operacion->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $prd_param_operacion->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/prd_param_operacion/prd_param_operacion_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_prd_param_operacion' width='90%'>
        
				<tr>
				  <td  id="label_prd_param_operacion_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_param_operacion_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prd_param_operacion_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='prd_param_operacion_txt_descripcion' value='<?php Gral::_echoTxt($prd_param_operacion->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_prd_param_operacion_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_param_operacion_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_param_operacion_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_param_operacion_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_param_operacion_txt_descripcion_corta" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion_corta' ?>" >
				  
                                        <?php Lang::_lang('Descripcion Corta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_param_operacion_txt_descripcion_corta" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion_corta')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prd_param_operacion_txt_descripcion_corta' type='text' class='textbox <?php echo $error_input_css ?> ' id='prd_param_operacion_txt_descripcion_corta' value='<?php Gral::_echoTxt($prd_param_operacion->getDescripcionCorta(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_prd_param_operacion_alta_descripcion_corta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_param_operacion_alta_descripcion_corta', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_param_operacion_alta_descripcion_corta', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_param_operacion_alta_descripcion_corta', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion_corta')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_param_operacion_cmb_prd_param_tipo_operacion_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prd_param_tipo_operacion_id' ?>" >
				  
                                        <?php Lang::_lang('PrdParamTipoOperacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_param_operacion_cmb_prd_param_tipo_operacion_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prd_param_tipo_operacion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prd_param_operacion_cmb_prd_param_tipo_operacion_id', Gral::getCmbFiltro(PrdParamTipoOperacion::getPrdParamTipoOperacionsCmb(), '...'), $prd_param_operacion->getPrdParamTipoOperacionId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PRD_PARAM_OPERACION_ALTA_CMB_EDIT_PRD_PARAM_TIPO_OPERACION')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="prd_param_operacion_cmb_prd_param_tipo_operacion_id" clase_id="prd_param_tipo_operacion" prefijo='prd_param_operacion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prd_param_tipo_operacion_id" <?php echo ($prd_param_operacion->getPrdParamTipoOperacionId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="prd_param_operacion_cmb_prd_param_tipo_operacion_id" clase_id="prd_param_tipo_operacion" prefijo='prd_param_operacion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_prd_param_operacion_cmb_prd_param_tipo_operacion_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_prd_param_operacion_alta_prd_param_tipo_operacion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_param_operacion_alta_prd_param_tipo_operacion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_param_operacion_alta_prd_param_tipo_operacion_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_param_operacion_alta_prd_param_tipo_operacion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prd_param_tipo_operacion_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_param_operacion_txt_numero" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_numero' ?>" >
				  
                                        <?php Lang::_lang('Numero', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_param_operacion_txt_numero" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('numero')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prd_param_operacion_txt_numero' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='prd_param_operacion_txt_numero' value='<?php Gral::_echoTxt($prd_param_operacion->getNumero(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prd_param_operacion_alta_numero', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_param_operacion_alta_numero', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_param_operacion_alta_numero', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_param_operacion_alta_numero', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('numero')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_param_operacion_cmb_prd_proceso_productivo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prd_proceso_productivo_id' ?>" >
				  
                                        <?php Lang::_lang('PrdProcesoProductivo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_param_operacion_cmb_prd_proceso_productivo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prd_proceso_productivo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prd_param_operacion_cmb_prd_proceso_productivo_id', Gral::getCmbFiltro(PrdProcesoProductivo::getPrdProcesoProductivosCmb(), '...'), $prd_param_operacion->getPrdProcesoProductivoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PRD_PARAM_OPERACION_ALTA_CMB_EDIT_PRD_PROCESO_PRODUCTIVO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="prd_param_operacion_cmb_prd_proceso_productivo_id" clase_id="prd_proceso_productivo" prefijo='prd_param_operacion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prd_proceso_productivo_id" <?php echo ($prd_param_operacion->getPrdProcesoProductivoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="prd_param_operacion_cmb_prd_proceso_productivo_id" clase_id="prd_proceso_productivo" prefijo='prd_param_operacion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_prd_param_operacion_cmb_prd_proceso_productivo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_prd_param_operacion_alta_prd_proceso_productivo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_param_operacion_alta_prd_proceso_productivo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_param_operacion_alta_prd_proceso_productivo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_param_operacion_alta_prd_proceso_productivo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prd_proceso_productivo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_param_operacion_cmb_prd_linea_produccion_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prd_linea_produccion_id' ?>" >
				  
                                        <?php Lang::_lang('PrdLineaProduccion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_param_operacion_cmb_prd_linea_produccion_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prd_linea_produccion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prd_param_operacion_cmb_prd_linea_produccion_id', Gral::getCmbFiltro(PrdLineaProduccion::getPrdLineaProduccionsCmb(), '...'), $prd_param_operacion->getPrdLineaProduccionId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PRD_PARAM_OPERACION_ALTA_CMB_EDIT_PRD_LINEA_PRODUCCION')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="prd_param_operacion_cmb_prd_linea_produccion_id" clase_id="prd_linea_produccion" prefijo='prd_param_operacion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prd_linea_produccion_id" <?php echo ($prd_param_operacion->getPrdLineaProduccionId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="prd_param_operacion_cmb_prd_linea_produccion_id" clase_id="prd_linea_produccion" prefijo='prd_param_operacion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_prd_param_operacion_cmb_prd_linea_produccion_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_prd_param_operacion_alta_prd_linea_produccion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_param_operacion_alta_prd_linea_produccion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_param_operacion_alta_prd_linea_produccion_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_param_operacion_alta_prd_linea_produccion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prd_linea_produccion_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_param_operacion_cmb_prd_equipo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prd_equipo_id' ?>" >
				  
                                        <?php Lang::_lang('PrdEquipo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_param_operacion_cmb_prd_equipo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prd_equipo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prd_param_operacion_cmb_prd_equipo_id', Gral::getCmbFiltro(PrdEquipo::getPrdEquiposCmb(), '...'), $prd_param_operacion->getPrdEquipoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PRD_PARAM_OPERACION_ALTA_CMB_EDIT_PRD_EQUIPO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="prd_param_operacion_cmb_prd_equipo_id" clase_id="prd_equipo" prefijo='prd_param_operacion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prd_equipo_id" <?php echo ($prd_param_operacion->getPrdEquipoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="prd_param_operacion_cmb_prd_equipo_id" clase_id="prd_equipo" prefijo='prd_param_operacion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_prd_param_operacion_cmb_prd_equipo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_prd_param_operacion_alta_prd_equipo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_param_operacion_alta_prd_equipo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_param_operacion_alta_prd_equipo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_param_operacion_alta_prd_equipo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prd_equipo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_param_operacion_txt_cantidad_operarios" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cantidad_operarios' ?>" >
				  
                                        <?php Lang::_lang('Cant Operarios', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_param_operacion_txt_cantidad_operarios" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cantidad_operarios')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prd_param_operacion_txt_cantidad_operarios' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='prd_param_operacion_txt_cantidad_operarios' value='<?php Gral::_echoTxt($prd_param_operacion->getCantidadOperarios(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prd_param_operacion_alta_cantidad_operarios', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_param_operacion_alta_cantidad_operarios', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_param_operacion_alta_cantidad_operarios', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_param_operacion_alta_cantidad_operarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cantidad_operarios')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_param_operacion_txt_cantidad_equipos" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cantidad_equipos' ?>" >
				  
                                        <?php Lang::_lang('Cant Equipo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_param_operacion_txt_cantidad_equipos" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cantidad_equipos')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prd_param_operacion_txt_cantidad_equipos' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='prd_param_operacion_txt_cantidad_equipos' value='<?php Gral::_echoTxt($prd_param_operacion->getCantidadEquipos(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prd_param_operacion_alta_cantidad_equipos', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_param_operacion_alta_cantidad_equipos', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_param_operacion_alta_cantidad_equipos', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_param_operacion_alta_cantidad_equipos', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cantidad_equipos')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_param_operacion_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_param_operacion_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prd_param_operacion_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='prd_param_operacion_txt_codigo' value='<?php Gral::_echoTxt($prd_param_operacion->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prd_param_operacion_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_param_operacion_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_param_operacion_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_param_operacion_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_param_operacion_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_param_operacion_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='prd_param_operacion_txa_observacion' rows='10' cols='50' id='prd_param_operacion_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($prd_param_operacion->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_prd_param_operacion_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_param_operacion_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_param_operacion_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_param_operacion_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($prd_param_operacion->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_prd_param_operacion_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='prd_param_operacion'/>
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

