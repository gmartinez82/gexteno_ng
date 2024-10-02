<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PER_MOV_PLANIFICACION_ALTA')){
    echo "No tiene asignada la credencial PER_MOV_PLANIFICACION_ALTA. ";
    return false;
}

$db_nombre_objeto = 'per_mov_planificacion';
$db_nombre_pagina = 'per_mov_planificacion_alta';

$per_mov_planificacion = new PerMovPlanificacion();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$per_mov_planificacion = new PerMovPlanificacion();
	if(trim($hdn_id) != '') $per_mov_planificacion->setId($hdn_id, false);
	$per_mov_planificacion->setDescripcion(Gral::getVars(1, "per_mov_planificacion_txt_descripcion"));
	$per_mov_planificacion->setPerPersonaId(Gral::getVars(1, "per_mov_planificacion_cmb_per_persona_id", null));
	$per_mov_planificacion->setGralNovedadId(Gral::getVars(1, "per_mov_planificacion_cmb_gral_novedad_id", null));
	$per_mov_planificacion->setPlnJornadaId(Gral::getVars(1, "per_mov_planificacion_cmb_pln_jornada_id", null));
	$per_mov_planificacion->setPlnTurnoNovedadId(Gral::getVars(1, "per_mov_planificacion_cmb_pln_turno_novedad_id", null));
	$per_mov_planificacion->setGralNovedadMotivoId(Gral::getVars(1, "per_mov_planificacion_cmb_gral_novedad_motivo_id", null));
	$per_mov_planificacion->setGralNovedadMotivoExtendidoId(Gral::getVars(1, "per_mov_planificacion_cmb_gral_novedad_motivo_extendido_id", null));
	$per_mov_planificacion->setFecha(Gral::getFechaToDb(Gral::getVars(1, "per_mov_planificacion_txt_fecha")));
	$per_mov_planificacion->setHoras(Gral::getVars(1, "per_mov_planificacion_txt_horas", 0));
	$per_mov_planificacion->setInicial(Gral::getVars(1, "per_mov_planificacion_cmb_inicial", 0));
	$per_mov_planificacion->setActual(Gral::getVars(1, "per_mov_planificacion_cmb_actual", 0));
	$per_mov_planificacion->setJornadaEditada(Gral::getVars(1, "per_mov_planificacion_txt_jornada_editada", 0));
	$per_mov_planificacion->setGralDiaId(Gral::getVars(1, "per_mov_planificacion_txt_gral_dia_id", 0));
	$per_mov_planificacion->setCodigo(Gral::getVars(1, "per_mov_planificacion_txt_codigo"));
	$per_mov_planificacion->setObservacion(Gral::getVars(1, "per_mov_planificacion_txa_observacion"));
	$per_mov_planificacion->setConfirmado(Gral::getVars(1, "per_mov_planificacion_cmb_confirmado", 0));
	$per_mov_planificacion->setConfirmadoObservacion(Gral::getVars(1, "per_mov_planificacion_txa_confirmado_observacion"));
	$per_mov_planificacion->setOrden(Gral::getVars(1, "per_mov_planificacion_txt_orden", 0));
	$per_mov_planificacion->setEstado(Gral::getVars(1, "per_mov_planificacion_cmb_estado", 0));
	$per_mov_planificacion->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "per_mov_planificacion_txt_creado")));
	$per_mov_planificacion->setCreadoPor(Gral::getVars(1, "per_mov_planificacion__creado_por", 0));
	$per_mov_planificacion->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "per_mov_planificacion_txt_modificado")));
	$per_mov_planificacion->setModificadoPor(Gral::getVars(1, "per_mov_planificacion__modificado_por", 0));

	$per_mov_planificacion_estado = new PerMovPlanificacion();
	if(trim($hdn_id) != ''){
		$per_mov_planificacion_estado->setId($hdn_id);
		$per_mov_planificacion->setEstado($per_mov_planificacion_estado->getEstado());
				
	}else{
		$per_mov_planificacion->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $per_mov_planificacion->control();
			if(!$error->getExisteError()){
				$per_mov_planificacion->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: per_mov_planificacion_alta.php?cs=1&id='.$per_mov_planificacion->getId());
			}
		break;
		case 'guardarnvo':
			$error = $per_mov_planificacion->control();
			if(!$error->getExisteError()){
				$per_mov_planificacion->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: per_mov_planificacion_alta.php?cs=1');
				$per_mov_planificacion = new PerMovPlanificacion();
			}
		break;
	}
	Gral::setSes('PerMovPlanificacion_ULTIMO_INSERTADO', $per_mov_planificacion->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_per_mov_planificacion_id = Gral::getVars(2, $prefijo.'cmb_per_mov_planificacion_id', 0);
	if($cmb_per_mov_planificacion_id != 0){
		$per_mov_planificacion = PerMovPlanificacion::getOxId($cmb_per_mov_planificacion_id);
	}else{
	
	$per_mov_planificacion->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$per_mov_planificacion->setPerPersonaId(Gral::getVars(2, "per_persona_id", 'null'));
	$per_mov_planificacion->setGralNovedadId(Gral::getVars(2, "gral_novedad_id", 'null'));
	$per_mov_planificacion->setPlnJornadaId(Gral::getVars(2, "pln_jornada_id", 'null'));
	$per_mov_planificacion->setPlnTurnoNovedadId(Gral::getVars(2, "pln_turno_novedad_id", 'null'));
	$per_mov_planificacion->setGralNovedadMotivoId(Gral::getVars(2, "gral_novedad_motivo_id", 'null'));
	$per_mov_planificacion->setGralNovedadMotivoExtendidoId(Gral::getVars(2, "gral_novedad_motivo_extendido_id", 'null'));
	$per_mov_planificacion->setFecha(Gral::getVars(2, "fecha", date('Y-m-d')));
	$per_mov_planificacion->setHoras(Gral::getVars(2, "horas", 0));
	$per_mov_planificacion->setInicial(Gral::getVars(2, "inicial", 0));
	$per_mov_planificacion->setActual(Gral::getVars(2, "actual", 0));
	$per_mov_planificacion->setJornadaEditada(Gral::getVars(2, "jornada_editada", 0));
	$per_mov_planificacion->setGralDiaId(Gral::getVars(2, "gral_dia_id", 'null'));
	$per_mov_planificacion->setCodigo(Gral::getVars(2, "codigo", ''));
	$per_mov_planificacion->setObservacion(Gral::getVars(2, "observacion", ''));
	$per_mov_planificacion->setConfirmado(Gral::getVars(2, "confirmado", 0));
	$per_mov_planificacion->setConfirmadoObservacion(Gral::getVars(2, "confirmado_observacion", ''));
	$per_mov_planificacion->setOrden(Gral::getVars(2, "orden", 0));
	$per_mov_planificacion->setEstado(Gral::getVars(2, "estado", 0));
	$per_mov_planificacion->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$per_mov_planificacion->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$per_mov_planificacion->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$per_mov_planificacion->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $per_mov_planificacion->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/per_mov_planificacion/per_mov_planificacion_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_per_mov_planificacion' width='90%'>
        
				<tr>
				  <td  id="label_per_mov_planificacion_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_mov_planificacion_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='per_mov_planificacion_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='per_mov_planificacion_txt_descripcion' value='<?php Gral::_echoTxt($per_mov_planificacion->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_per_mov_planificacion_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_mov_planificacion_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_mov_planificacion_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_mov_planificacion_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_per_mov_planificacion_cmb_per_persona_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_per_persona_id' ?>" >
				  
                                        <?php Lang::_lang('PerPersona', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_mov_planificacion_cmb_per_persona_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('per_persona_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'per_mov_planificacion_cmb_per_persona_id', Gral::getCmbFiltro(PerPersona::getPerPersonasCmb(), '...'), $per_mov_planificacion->getPerPersonaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PER_MOV_PLANIFICACION_ALTA_CMB_EDIT_PER_PERSONA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="per_mov_planificacion_cmb_per_persona_id" clase_id="per_persona" prefijo='per_mov_planificacion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_per_persona_id" <?php echo ($per_mov_planificacion->getPerPersonaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="per_mov_planificacion_cmb_per_persona_id" clase_id="per_persona" prefijo='per_mov_planificacion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_per_mov_planificacion_cmb_per_persona_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_per_mov_planificacion_alta_per_persona_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_mov_planificacion_alta_per_persona_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_mov_planificacion_alta_per_persona_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_mov_planificacion_alta_per_persona_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('per_persona_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_per_mov_planificacion_cmb_gral_novedad_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_novedad_id' ?>" >
				  
                                        <?php Lang::_lang('GralNovedad', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_mov_planificacion_cmb_gral_novedad_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_novedad_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'per_mov_planificacion_cmb_gral_novedad_id', Gral::getCmbFiltro(GralNovedad::getGralNovedadsCmb(), '...'), $per_mov_planificacion->getGralNovedadId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PER_MOV_PLANIFICACION_ALTA_CMB_EDIT_GRAL_NOVEDAD')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="per_mov_planificacion_cmb_gral_novedad_id" clase_id="gral_novedad" prefijo='per_mov_planificacion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_novedad_id" <?php echo ($per_mov_planificacion->getGralNovedadId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="per_mov_planificacion_cmb_gral_novedad_id" clase_id="gral_novedad" prefijo='per_mov_planificacion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_per_mov_planificacion_cmb_gral_novedad_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_per_mov_planificacion_alta_gral_novedad_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_mov_planificacion_alta_gral_novedad_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_mov_planificacion_alta_gral_novedad_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_mov_planificacion_alta_gral_novedad_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_novedad_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_per_mov_planificacion_cmb_pln_jornada_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pln_jornada_id' ?>" >
				  
                                        <?php Lang::_lang('PlnJornada', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_mov_planificacion_cmb_pln_jornada_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pln_jornada_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'per_mov_planificacion_cmb_pln_jornada_id', Gral::getCmbFiltro(PlnJornada::getPlnJornadasCmb(), '...'), $per_mov_planificacion->getPlnJornadaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PER_MOV_PLANIFICACION_ALTA_CMB_EDIT_PLN_JORNADA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="per_mov_planificacion_cmb_pln_jornada_id" clase_id="pln_jornada" prefijo='per_mov_planificacion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pln_jornada_id" <?php echo ($per_mov_planificacion->getPlnJornadaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="per_mov_planificacion_cmb_pln_jornada_id" clase_id="pln_jornada" prefijo='per_mov_planificacion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_per_mov_planificacion_cmb_pln_jornada_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_per_mov_planificacion_alta_pln_jornada_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_mov_planificacion_alta_pln_jornada_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_mov_planificacion_alta_pln_jornada_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_mov_planificacion_alta_pln_jornada_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pln_jornada_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_per_mov_planificacion_cmb_pln_turno_novedad_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pln_turno_novedad_id' ?>" >
				  
                                        <?php Lang::_lang('PlnTurnoNovedad', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_mov_planificacion_cmb_pln_turno_novedad_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pln_turno_novedad_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'per_mov_planificacion_cmb_pln_turno_novedad_id', Gral::getCmbFiltro(PlnTurnoNovedad::getPlnTurnoNovedadsCmb(), '...'), $per_mov_planificacion->getPlnTurnoNovedadId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PER_MOV_PLANIFICACION_ALTA_CMB_EDIT_PLN_TURNO_NOVEDAD')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="per_mov_planificacion_cmb_pln_turno_novedad_id" clase_id="pln_turno_novedad" prefijo='per_mov_planificacion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pln_turno_novedad_id" <?php echo ($per_mov_planificacion->getPlnTurnoNovedadId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="per_mov_planificacion_cmb_pln_turno_novedad_id" clase_id="pln_turno_novedad" prefijo='per_mov_planificacion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_per_mov_planificacion_cmb_pln_turno_novedad_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_per_mov_planificacion_alta_pln_turno_novedad_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_mov_planificacion_alta_pln_turno_novedad_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_mov_planificacion_alta_pln_turno_novedad_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_mov_planificacion_alta_pln_turno_novedad_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pln_turno_novedad_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_per_mov_planificacion_cmb_gral_novedad_motivo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_novedad_motivo_id' ?>" >
				  
                                        <?php Lang::_lang('GralNovedadMotivo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_mov_planificacion_cmb_gral_novedad_motivo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_novedad_motivo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'per_mov_planificacion_cmb_gral_novedad_motivo_id', Gral::getCmbFiltro(GralNovedadMotivo::getGralNovedadMotivosCmb(), '...'), $per_mov_planificacion->getGralNovedadMotivoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PER_MOV_PLANIFICACION_ALTA_CMB_EDIT_GRAL_NOVEDAD_MOTIVO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="per_mov_planificacion_cmb_gral_novedad_motivo_id" clase_id="gral_novedad_motivo" prefijo='per_mov_planificacion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_novedad_motivo_id" <?php echo ($per_mov_planificacion->getGralNovedadMotivoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="per_mov_planificacion_cmb_gral_novedad_motivo_id" clase_id="gral_novedad_motivo" prefijo='per_mov_planificacion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_per_mov_planificacion_cmb_gral_novedad_motivo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_per_mov_planificacion_alta_gral_novedad_motivo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_mov_planificacion_alta_gral_novedad_motivo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_mov_planificacion_alta_gral_novedad_motivo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_mov_planificacion_alta_gral_novedad_motivo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_novedad_motivo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_per_mov_planificacion_cmb_gral_novedad_motivo_extendido_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_novedad_motivo_extendido_id' ?>" >
				  
                                        <?php Lang::_lang('GralNovedadMotivoExtendido', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_mov_planificacion_cmb_gral_novedad_motivo_extendido_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_novedad_motivo_extendido_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'per_mov_planificacion_cmb_gral_novedad_motivo_extendido_id', Gral::getCmbFiltro(GralNovedadMotivoExtendido::getGralNovedadMotivoExtendidosCmb(), '...'), $per_mov_planificacion->getGralNovedadMotivoExtendidoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PER_MOV_PLANIFICACION_ALTA_CMB_EDIT_GRAL_NOVEDAD_MOTIVO_EXTENDIDO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="per_mov_planificacion_cmb_gral_novedad_motivo_extendido_id" clase_id="gral_novedad_motivo_extendido" prefijo='per_mov_planificacion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_novedad_motivo_extendido_id" <?php echo ($per_mov_planificacion->getGralNovedadMotivoExtendidoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="per_mov_planificacion_cmb_gral_novedad_motivo_extendido_id" clase_id="gral_novedad_motivo_extendido" prefijo='per_mov_planificacion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_per_mov_planificacion_cmb_gral_novedad_motivo_extendido_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_per_mov_planificacion_alta_gral_novedad_motivo_extendido_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_mov_planificacion_alta_gral_novedad_motivo_extendido_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_mov_planificacion_alta_gral_novedad_motivo_extendido_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_mov_planificacion_alta_gral_novedad_motivo_extendido_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_novedad_motivo_extendido_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_per_mov_planificacion_txt_fecha" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha' ?>" >
				  
                                        <?php Lang::_lang('Fecha', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_mov_planificacion_txt_fecha" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='per_mov_planificacion_txt_fecha' type='text' class='textbox <?php echo $error_input_css ?> ' id='per_mov_planificacion_txt_fecha' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($per_mov_planificacion->getFecha()), true) ?>' size='20' />
					<input type='button' id='cal_per_mov_planificacion_txt_fecha' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'per_mov_planificacion_txt_fecha', ifFormat: '%d/%m/%Y', button: 'cal_per_mov_planificacion_txt_fecha'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_per_mov_planificacion_alta_fecha', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_mov_planificacion_alta_fecha', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_mov_planificacion_alta_fecha', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_mov_planificacion_alta_fecha', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_per_mov_planificacion_txt_horas" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_horas' ?>" >
				  
                                        <?php Lang::_lang('Horas', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_mov_planificacion_txt_horas" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('horas')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='per_mov_planificacion_txt_horas' type='text' class='textbox <?php echo $error_input_css ?> ' id='per_mov_planificacion_txt_horas' value='<?php Gral::_echoTxt($per_mov_planificacion->getHoras(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_per_mov_planificacion_alta_horas', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_mov_planificacion_alta_horas', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_mov_planificacion_alta_horas', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_mov_planificacion_alta_horas', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('horas')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_per_mov_planificacion_cmb_inicial" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_inicial' ?>" >
				  
                                        <?php Lang::_lang('Inicial', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_mov_planificacion_cmb_inicial" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('inicial')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'per_mov_planificacion_cmb_inicial', GralSiNo::getGralSiNosCmb(), $per_mov_planificacion->getInicial(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_per_mov_planificacion_alta_inicial', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_mov_planificacion_alta_inicial', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_mov_planificacion_alta_inicial', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_mov_planificacion_alta_inicial', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('inicial')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_per_mov_planificacion_cmb_actual" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_actual' ?>" >
				  
                                        <?php Lang::_lang('Actual', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_mov_planificacion_cmb_actual" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('actual')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'per_mov_planificacion_cmb_actual', GralSiNo::getGralSiNosCmb(), $per_mov_planificacion->getActual(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_per_mov_planificacion_alta_actual', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_mov_planificacion_alta_actual', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_mov_planificacion_alta_actual', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_mov_planificacion_alta_actual', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('actual')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_per_mov_planificacion_txt_jornada_editada" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_jornada_editada' ?>" >
				  
                                        <?php Lang::_lang('Jornada Editada', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_mov_planificacion_txt_jornada_editada" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('jornada_editada')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='per_mov_planificacion_txt_jornada_editada' type='text' class='textbox <?php echo $error_input_css ?> ' id='per_mov_planificacion_txt_jornada_editada' value='<?php Gral::_echoTxt($per_mov_planificacion->getJornadaEditada(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_per_mov_planificacion_alta_jornada_editada', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_mov_planificacion_alta_jornada_editada', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_mov_planificacion_alta_jornada_editada', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_mov_planificacion_alta_jornada_editada', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('jornada_editada')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_per_mov_planificacion_txt_gral_dia_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_dia_id' ?>" >
				  
                                        <?php Lang::_lang('Dia', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_mov_planificacion_txt_gral_dia_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_dia_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='per_mov_planificacion_txt_gral_dia_id' type='text' class='textbox <?php echo $error_input_css ?> ' id='per_mov_planificacion_txt_gral_dia_id' value='<?php Gral::_echoTxt($per_mov_planificacion->getGralDiaId(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_per_mov_planificacion_alta_gral_dia_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_mov_planificacion_alta_gral_dia_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_mov_planificacion_alta_gral_dia_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_mov_planificacion_alta_gral_dia_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_dia_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_per_mov_planificacion_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_mov_planificacion_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='per_mov_planificacion_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='per_mov_planificacion_txt_codigo' value='<?php Gral::_echoTxt($per_mov_planificacion->getCodigo(), true) ?>' size='20' />            
                    <?php if(Lang::_lang('help_per_mov_planificacion_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_mov_planificacion_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_mov_planificacion_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_mov_planificacion_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_per_mov_planificacion_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_mov_planificacion_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='per_mov_planificacion_txa_observacion' rows='10' cols='50' id='per_mov_planificacion_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($per_mov_planificacion->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_per_mov_planificacion_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_mov_planificacion_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_mov_planificacion_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_mov_planificacion_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_per_mov_planificacion_cmb_confirmado" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_confirmado' ?>" >
				  
                                        <?php Lang::_lang('Confirmado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_mov_planificacion_cmb_confirmado" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('confirmado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'per_mov_planificacion_cmb_confirmado', GralSiNo::getGralSiNosCmb(), $per_mov_planificacion->getConfirmado(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_per_mov_planificacion_alta_confirmado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_mov_planificacion_alta_confirmado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_mov_planificacion_alta_confirmado', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_mov_planificacion_alta_confirmado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('confirmado')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_per_mov_planificacion_txa_confirmado_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_confirmado_observacion' ?>" >
				  
                                        <?php Lang::_lang('Conf Obs', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_mov_planificacion_txa_confirmado_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('confirmado_observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='per_mov_planificacion_txa_confirmado_observacion' rows='10' cols='50' id='per_mov_planificacion_txa_confirmado_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($per_mov_planificacion->getConfirmadoObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_per_mov_planificacion_alta_confirmado_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_mov_planificacion_alta_confirmado_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_mov_planificacion_alta_confirmado_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_mov_planificacion_alta_confirmado_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('confirmado_observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($per_mov_planificacion->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_per_mov_planificacion_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='per_mov_planificacion'/>
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

