<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('GEN_PRCA_EJECUCION_DETALLE_ALTA')){
    echo "No tiene asignada la credencial GEN_PRCA_EJECUCION_DETALLE_ALTA. ";
    return false;
}

$db_nombre_objeto = 'gen_prca_ejecucion_detalle';
$db_nombre_pagina = 'gen_prca_ejecucion_detalle_alta';

$gen_prca_ejecucion_detalle = new GenPrcaEjecucionDetalle();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$gen_prca_ejecucion_detalle = new GenPrcaEjecucionDetalle();
	if(trim($hdn_id) != '') $gen_prca_ejecucion_detalle->setId($hdn_id, false);
	$gen_prca_ejecucion_detalle->setDescripcion(Gral::getVars(1, "gen_prca_ejecucion_detalle_txt_descripcion"));
	$gen_prca_ejecucion_detalle->setGenApiProyectoId(Gral::getVars(1, "gen_prca_ejecucion_detalle_cmb_gen_api_proyecto_id", null));
	$gen_prca_ejecucion_detalle->setGenPrcaProcesoId(Gral::getVars(1, "gen_prca_ejecucion_detalle_cmb_gen_prca_proceso_id", null));
	$gen_prca_ejecucion_detalle->setGenPrcaEjecucionId(Gral::getVars(1, "gen_prca_ejecucion_detalle_cmb_gen_prca_ejecucion_id", null));
	$gen_prca_ejecucion_detalle->setFechahoraInicio(Gral::getFechaHoraToDb(Gral::getVars(1, "gen_prca_ejecucion_detalle_txt_fechahora_inicio")));
	$gen_prca_ejecucion_detalle->setFechahoraFin(Gral::getFechaHoraToDb(Gral::getVars(1, "gen_prca_ejecucion_detalle_txt_fechahora_fin")));
	$gen_prca_ejecucion_detalle->setIniciado(Gral::getVars(1, "gen_prca_ejecucion_detalle_cmb_iniciado", 0));
	$gen_prca_ejecucion_detalle->setFinalizado(Gral::getVars(1, "gen_prca_ejecucion_detalle_cmb_finalizado", 0));
	$gen_prca_ejecucion_detalle->setCodigo(Gral::getVars(1, "gen_prca_ejecucion_detalle_txt_codigo"));
	$gen_prca_ejecucion_detalle->setIdRemoto(Gral::getVars(1, "gen_prca_ejecucion_detalle__id_remoto", 0));
	$gen_prca_ejecucion_detalle->setConfirmado(Gral::getVars(1, "gen_prca_ejecucion_detalle_cmb_confirmado", 0));
	$gen_prca_ejecucion_detalle->setObservacion(Gral::getVars(1, "gen_prca_ejecucion_detalle_txa_observacion"));
	$gen_prca_ejecucion_detalle->setOrden(Gral::getVars(1, "gen_prca_ejecucion_detalle_txt_orden", 0));
	$gen_prca_ejecucion_detalle->setEstado(Gral::getVars(1, "gen_prca_ejecucion_detalle__estado", 0));
	$gen_prca_ejecucion_detalle->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "gen_prca_ejecucion_detalle_txt_creado")));
	$gen_prca_ejecucion_detalle->setCreadoPor(Gral::getVars(1, "gen_prca_ejecucion_detalle__creado_por", 0));
	$gen_prca_ejecucion_detalle->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "gen_prca_ejecucion_detalle_txt_modificado")));
	$gen_prca_ejecucion_detalle->setModificadoPor(Gral::getVars(1, "gen_prca_ejecucion_detalle__modificado_por", 0));

	$gen_prca_ejecucion_detalle_estado = new GenPrcaEjecucionDetalle();
	if(trim($hdn_id) != ''){
		$gen_prca_ejecucion_detalle_estado->setId($hdn_id);
		$gen_prca_ejecucion_detalle->setEstado($gen_prca_ejecucion_detalle_estado->getEstado());
				
	}else{
		$gen_prca_ejecucion_detalle->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $gen_prca_ejecucion_detalle->control();
			if(!$error->getExisteError()){
				$gen_prca_ejecucion_detalle->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: gen_prca_ejecucion_detalle_alta.php?cs=1&id='.$gen_prca_ejecucion_detalle->getId());
			}
		break;
		case 'guardarnvo':
			$error = $gen_prca_ejecucion_detalle->control();
			if(!$error->getExisteError()){
				$gen_prca_ejecucion_detalle->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: gen_prca_ejecucion_detalle_alta.php?cs=1');
				$gen_prca_ejecucion_detalle = new GenPrcaEjecucionDetalle();
			}
		break;
	}
	Gral::setSes('GenPrcaEjecucionDetalle_ULTIMO_INSERTADO', $gen_prca_ejecucion_detalle->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_gen_prca_ejecucion_detalle_id = Gral::getVars(2, $prefijo.'cmb_gen_prca_ejecucion_detalle_id', 0);
	if($cmb_gen_prca_ejecucion_detalle_id != 0){
		$gen_prca_ejecucion_detalle = GenPrcaEjecucionDetalle::getOxId($cmb_gen_prca_ejecucion_detalle_id);
	}else{
	
	$gen_prca_ejecucion_detalle->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$gen_prca_ejecucion_detalle->setGenApiProyectoId(Gral::getVars(2, "gen_api_proyecto_id", 'null'));
	$gen_prca_ejecucion_detalle->setGenPrcaProcesoId(Gral::getVars(2, "gen_prca_proceso_id", 'null'));
	$gen_prca_ejecucion_detalle->setGenPrcaEjecucionId(Gral::getVars(2, "gen_prca_ejecucion_id", 'null'));
	$gen_prca_ejecucion_detalle->setFechahoraInicio(Gral::getVars(2, "fechahora_inicio", date('Y-m-d H:m:s')));
	$gen_prca_ejecucion_detalle->setFechahoraFin(Gral::getVars(2, "fechahora_fin", date('Y-m-d H:m:s')));
	$gen_prca_ejecucion_detalle->setIniciado(Gral::getVars(2, "iniciado", 0));
	$gen_prca_ejecucion_detalle->setFinalizado(Gral::getVars(2, "finalizado", 0));
	$gen_prca_ejecucion_detalle->setCodigo(Gral::getVars(2, "codigo", ''));
	$gen_prca_ejecucion_detalle->setIdRemoto(Gral::getVars(2, "id_remoto", 0));
	$gen_prca_ejecucion_detalle->setConfirmado(Gral::getVars(2, "confirmado", 0));
	$gen_prca_ejecucion_detalle->setObservacion(Gral::getVars(2, "observacion", ''));
	$gen_prca_ejecucion_detalle->setOrden(Gral::getVars(2, "orden", 0));
	$gen_prca_ejecucion_detalle->setEstado(Gral::getVars(2, "estado", 0));
	$gen_prca_ejecucion_detalle->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$gen_prca_ejecucion_detalle->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$gen_prca_ejecucion_detalle->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$gen_prca_ejecucion_detalle->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $gen_prca_ejecucion_detalle->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/gen_prca_ejecucion_detalle/gen_prca_ejecucion_detalle_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_gen_prca_ejecucion_detalle' width='90%'>
        
				<tr>
				  <td  id="label_gen_prca_ejecucion_detalle_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_prca_ejecucion_detalle_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gen_prca_ejecucion_detalle_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='gen_prca_ejecucion_detalle_txt_descripcion' value='<?php Gral::_echoTxt($gen_prca_ejecucion_detalle->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_gen_prca_ejecucion_detalle_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_prca_ejecucion_detalle_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_prca_ejecucion_detalle_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_prca_ejecucion_detalle_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_prca_ejecucion_detalle_cmb_gen_api_proyecto_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gen_api_proyecto_id' ?>" >
				  
                                        <?php Lang::_lang('GenApiProyecto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_prca_ejecucion_detalle_cmb_gen_api_proyecto_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gen_api_proyecto_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gen_prca_ejecucion_detalle_cmb_gen_api_proyecto_id', Gral::getCmbFiltro(GenApiProyecto::getGenApiProyectosCmb(), '...'), $gen_prca_ejecucion_detalle->getGenApiProyectoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('GEN_PRCA_EJECUCION_DETALLE_ALTA_CMB_EDIT_GEN_API_PROYECTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="gen_prca_ejecucion_detalle_cmb_gen_api_proyecto_id" clase_id="gen_api_proyecto" prefijo='gen_prca_ejecucion_detalle_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gen_api_proyecto_id" <?php echo ($gen_prca_ejecucion_detalle->getGenApiProyectoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="gen_prca_ejecucion_detalle_cmb_gen_api_proyecto_id" clase_id="gen_api_proyecto" prefijo='gen_prca_ejecucion_detalle_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_gen_prca_ejecucion_detalle_cmb_gen_api_proyecto_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_gen_prca_ejecucion_detalle_alta_gen_api_proyecto_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_prca_ejecucion_detalle_alta_gen_api_proyecto_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_prca_ejecucion_detalle_alta_gen_api_proyecto_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_prca_ejecucion_detalle_alta_gen_api_proyecto_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gen_api_proyecto_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_prca_ejecucion_detalle_cmb_gen_prca_proceso_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gen_prca_proceso_id' ?>" >
				  
                                        <?php Lang::_lang('GenPrcaProceso', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_prca_ejecucion_detalle_cmb_gen_prca_proceso_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gen_prca_proceso_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gen_prca_ejecucion_detalle_cmb_gen_prca_proceso_id', Gral::getCmbFiltro(GenPrcaProceso::getGenPrcaProcesosCmb(), '...'), $gen_prca_ejecucion_detalle->getGenPrcaProcesoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('GEN_PRCA_EJECUCION_DETALLE_ALTA_CMB_EDIT_GEN_PRCA_PROCESO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="gen_prca_ejecucion_detalle_cmb_gen_prca_proceso_id" clase_id="gen_prca_proceso" prefijo='gen_prca_ejecucion_detalle_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gen_prca_proceso_id" <?php echo ($gen_prca_ejecucion_detalle->getGenPrcaProcesoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="gen_prca_ejecucion_detalle_cmb_gen_prca_proceso_id" clase_id="gen_prca_proceso" prefijo='gen_prca_ejecucion_detalle_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_gen_prca_ejecucion_detalle_cmb_gen_prca_proceso_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_gen_prca_ejecucion_detalle_alta_gen_prca_proceso_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_prca_ejecucion_detalle_alta_gen_prca_proceso_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_prca_ejecucion_detalle_alta_gen_prca_proceso_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_prca_ejecucion_detalle_alta_gen_prca_proceso_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gen_prca_proceso_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_prca_ejecucion_detalle_cmb_gen_prca_ejecucion_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gen_prca_ejecucion_id' ?>" >
				  
                                        <?php Lang::_lang('GenPrcaEjecucion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_prca_ejecucion_detalle_cmb_gen_prca_ejecucion_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gen_prca_ejecucion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gen_prca_ejecucion_detalle_cmb_gen_prca_ejecucion_id', Gral::getCmbFiltro(GenPrcaEjecucion::getGenPrcaEjecucionsCmb(), '...'), $gen_prca_ejecucion_detalle->getGenPrcaEjecucionId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('GEN_PRCA_EJECUCION_DETALLE_ALTA_CMB_EDIT_GEN_PRCA_EJECUCION')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="gen_prca_ejecucion_detalle_cmb_gen_prca_ejecucion_id" clase_id="gen_prca_ejecucion" prefijo='gen_prca_ejecucion_detalle_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gen_prca_ejecucion_id" <?php echo ($gen_prca_ejecucion_detalle->getGenPrcaEjecucionId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="gen_prca_ejecucion_detalle_cmb_gen_prca_ejecucion_id" clase_id="gen_prca_ejecucion" prefijo='gen_prca_ejecucion_detalle_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_gen_prca_ejecucion_detalle_cmb_gen_prca_ejecucion_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_gen_prca_ejecucion_detalle_alta_gen_prca_ejecucion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_prca_ejecucion_detalle_alta_gen_prca_ejecucion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_prca_ejecucion_detalle_alta_gen_prca_ejecucion_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_prca_ejecucion_detalle_alta_gen_prca_ejecucion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gen_prca_ejecucion_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_prca_ejecucion_detalle_txt_fechahora_inicio" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fechahora_inicio' ?>" >
				  
                                        <?php Lang::_lang('Fecha Hora Inicio', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_prca_ejecucion_detalle_txt_fechahora_inicio" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fechahora_inicio')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gen_prca_ejecucion_detalle_txt_fechahora_inicio' type='text' class='textbox <?php echo $error_input_css ?> datetime' id='gen_prca_ejecucion_detalle_txt_fechahora_inicio' value='<?php Gral::_echoTxt(Gral::getFechaHoraToWeb($gen_prca_ejecucion_detalle->getFechahoraInicio()), true) ?>' size='40' />
					<input type='button' id='cal_gen_prca_ejecucion_detalle_txt_fechahora_inicio' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'gen_prca_ejecucion_detalle_txt_fechahora_inicio', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_gen_prca_ejecucion_detalle_txt_fechahora_inicio'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_gen_prca_ejecucion_detalle_alta_fechahora_inicio', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_prca_ejecucion_detalle_alta_fechahora_inicio', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_prca_ejecucion_detalle_alta_fechahora_inicio', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_prca_ejecucion_detalle_alta_fechahora_inicio', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fechahora_inicio')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_prca_ejecucion_detalle_txt_fechahora_fin" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fechahora_fin' ?>" >
				  
                                        <?php Lang::_lang('Fecha Hora Fin', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_prca_ejecucion_detalle_txt_fechahora_fin" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fechahora_fin')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gen_prca_ejecucion_detalle_txt_fechahora_fin' type='text' class='textbox <?php echo $error_input_css ?> datetime' id='gen_prca_ejecucion_detalle_txt_fechahora_fin' value='<?php Gral::_echoTxt(Gral::getFechaHoraToWeb($gen_prca_ejecucion_detalle->getFechahoraFin()), true) ?>' size='40' />
					<input type='button' id='cal_gen_prca_ejecucion_detalle_txt_fechahora_fin' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'gen_prca_ejecucion_detalle_txt_fechahora_fin', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_gen_prca_ejecucion_detalle_txt_fechahora_fin'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_gen_prca_ejecucion_detalle_alta_fechahora_fin', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_prca_ejecucion_detalle_alta_fechahora_fin', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_prca_ejecucion_detalle_alta_fechahora_fin', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_prca_ejecucion_detalle_alta_fechahora_fin', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fechahora_fin')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_prca_ejecucion_detalle_cmb_iniciado" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_iniciado' ?>" >
				  
                                        <?php Lang::_lang('Iniciado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_prca_ejecucion_detalle_cmb_iniciado" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('iniciado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gen_prca_ejecucion_detalle_cmb_iniciado', GralSiNo::getGralSiNosCmb(), $gen_prca_ejecucion_detalle->getIniciado(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_gen_prca_ejecucion_detalle_alta_iniciado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_prca_ejecucion_detalle_alta_iniciado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_prca_ejecucion_detalle_alta_iniciado', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_prca_ejecucion_detalle_alta_iniciado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('iniciado')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_prca_ejecucion_detalle_cmb_finalizado" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_finalizado' ?>" >
				  
                                        <?php Lang::_lang('Finalizado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_prca_ejecucion_detalle_cmb_finalizado" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('finalizado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gen_prca_ejecucion_detalle_cmb_finalizado', GralSiNo::getGralSiNosCmb(), $gen_prca_ejecucion_detalle->getFinalizado(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_gen_prca_ejecucion_detalle_alta_finalizado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_prca_ejecucion_detalle_alta_finalizado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_prca_ejecucion_detalle_alta_finalizado', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_prca_ejecucion_detalle_alta_finalizado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('finalizado')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_prca_ejecucion_detalle_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_prca_ejecucion_detalle_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gen_prca_ejecucion_detalle_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='gen_prca_ejecucion_detalle_txt_codigo' value='<?php Gral::_echoTxt($gen_prca_ejecucion_detalle->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gen_prca_ejecucion_detalle_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_prca_ejecucion_detalle_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_prca_ejecucion_detalle_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_prca_ejecucion_detalle_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_prca_ejecucion_detalle_cmb_confirmado" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_confirmado' ?>" >
				  
                                        <?php Lang::_lang('Confirmado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_prca_ejecucion_detalle_cmb_confirmado" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('confirmado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gen_prca_ejecucion_detalle_cmb_confirmado', GralSiNo::getGralSiNosCmb(), $gen_prca_ejecucion_detalle->getConfirmado(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_gen_prca_ejecucion_detalle_alta_confirmado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_prca_ejecucion_detalle_alta_confirmado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_prca_ejecucion_detalle_alta_confirmado', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_prca_ejecucion_detalle_alta_confirmado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('confirmado')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_prca_ejecucion_detalle_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_prca_ejecucion_detalle_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='gen_prca_ejecucion_detalle_txa_observacion' rows='10' cols='50' id='gen_prca_ejecucion_detalle_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($gen_prca_ejecucion_detalle->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_gen_prca_ejecucion_detalle_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_prca_ejecucion_detalle_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_prca_ejecucion_detalle_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_prca_ejecucion_detalle_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($gen_prca_ejecucion_detalle->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_gen_prca_ejecucion_detalle_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='gen_prca_ejecucion_detalle'/>
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

