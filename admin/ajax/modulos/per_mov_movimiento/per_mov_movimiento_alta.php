<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PER_MOV_MOVIMIENTO_ALTA')){
    echo "No tiene asignada la credencial PER_MOV_MOVIMIENTO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'per_mov_movimiento';
$db_nombre_pagina = 'per_mov_movimiento_alta';

$per_mov_movimiento = new PerMovMovimiento();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$per_mov_movimiento = new PerMovMovimiento();
	if(trim($hdn_id) != '') $per_mov_movimiento->setId($hdn_id, false);
	$per_mov_movimiento->setDescripcion(Gral::getVars(1, "per_mov_movimiento_txt_descripcion"));
	$per_mov_movimiento->setGralEmpresaId(Gral::getVars(1, "per_mov_movimiento_cmb_gral_empresa_id", null));
	$per_mov_movimiento->setPerPersonaId(Gral::getVars(1, "per_mov_movimiento_cmb_per_persona_id", null));
	$per_mov_movimiento->setCodigo(Gral::getVars(1, "per_mov_movimiento_txt_codigo"));
	$per_mov_movimiento->setPerMovTipoMovimientoId(Gral::getVars(1, "per_mov_movimiento_cmb_per_mov_tipo_movimiento_id", null));
	$per_mov_movimiento->setFechahora(Gral::getFechaHoraToDb(Gral::getVars(1, "per_mov_movimiento_txt_fechahora")));
	$per_mov_movimiento->setCtrlSectorId(Gral::getVars(1, "per_mov_movimiento_cmb_ctrl_sector_id", null));
	$per_mov_movimiento->setCtrlEquipoId(Gral::getVars(1, "per_mov_movimiento_cmb_ctrl_equipo_id", null));
	$per_mov_movimiento->setPerMovTipoEstadoId(Gral::getVars(1, "per_mov_movimiento_cmb_per_mov_tipo_estado_id", null));
	$per_mov_movimiento->setObservacion(Gral::getVars(1, "per_mov_movimiento_txa_observacion"));
	$per_mov_movimiento->setOrden(Gral::getVars(1, "per_mov_movimiento_txt_orden", 0));
	$per_mov_movimiento->setEstado(Gral::getVars(1, "per_mov_movimiento_cmb_estado", 0));
	$per_mov_movimiento->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "per_mov_movimiento_txt_creado")));
	$per_mov_movimiento->setCreadoPor(Gral::getVars(1, "per_mov_movimiento__creado_por", 0));
	$per_mov_movimiento->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "per_mov_movimiento_txt_modificado")));
	$per_mov_movimiento->setModificadoPor(Gral::getVars(1, "per_mov_movimiento__modificado_por", 0));

	$per_mov_movimiento_estado = new PerMovMovimiento();
	if(trim($hdn_id) != ''){
		$per_mov_movimiento_estado->setId($hdn_id);
		$per_mov_movimiento->setEstado($per_mov_movimiento_estado->getEstado());
				
	}else{
		$per_mov_movimiento->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $per_mov_movimiento->control();
			if(!$error->getExisteError()){
				$per_mov_movimiento->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: per_mov_movimiento_alta.php?cs=1&id='.$per_mov_movimiento->getId());
			}
		break;
		case 'guardarnvo':
			$error = $per_mov_movimiento->control();
			if(!$error->getExisteError()){
				$per_mov_movimiento->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: per_mov_movimiento_alta.php?cs=1');
				$per_mov_movimiento = new PerMovMovimiento();
			}
		break;
	}
	Gral::setSes('PerMovMovimiento_ULTIMO_INSERTADO', $per_mov_movimiento->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_per_mov_movimiento_id = Gral::getVars(2, $prefijo.'cmb_per_mov_movimiento_id', 0);
	if($cmb_per_mov_movimiento_id != 0){
		$per_mov_movimiento = PerMovMovimiento::getOxId($cmb_per_mov_movimiento_id);
	}else{
	
	$per_mov_movimiento->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$per_mov_movimiento->setGralEmpresaId(Gral::getVars(2, "gral_empresa_id", 'null'));
	$per_mov_movimiento->setPerPersonaId(Gral::getVars(2, "per_persona_id", 'null'));
	$per_mov_movimiento->setCodigo(Gral::getVars(2, "codigo", ''));
	$per_mov_movimiento->setPerMovTipoMovimientoId(Gral::getVars(2, "per_mov_tipo_movimiento_id", 'null'));
	$per_mov_movimiento->setFechahora(Gral::getVars(2, "fechahora", date('Y-m-d H:m:s')));
	$per_mov_movimiento->setCtrlSectorId(Gral::getVars(2, "ctrl_sector_id", 'null'));
	$per_mov_movimiento->setCtrlEquipoId(Gral::getVars(2, "ctrl_equipo_id", 'null'));
	$per_mov_movimiento->setPerMovTipoEstadoId(Gral::getVars(2, "per_mov_tipo_estado_id", 'null'));
	$per_mov_movimiento->setObservacion(Gral::getVars(2, "observacion", ''));
	$per_mov_movimiento->setOrden(Gral::getVars(2, "orden", 0));
	$per_mov_movimiento->setEstado(Gral::getVars(2, "estado", 0));
	$per_mov_movimiento->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$per_mov_movimiento->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$per_mov_movimiento->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$per_mov_movimiento->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $per_mov_movimiento->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/per_mov_movimiento/per_mov_movimiento_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_per_mov_movimiento' width='90%'>
        
				<tr>
				  <td  id="label_per_mov_movimiento_cmb_per_persona_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_per_persona_id' ?>" >
				  
                                        <?php Lang::_lang('PerPersona', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_mov_movimiento_cmb_per_persona_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('per_persona_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'per_mov_movimiento_cmb_per_persona_id', Gral::getCmbFiltro(PerPersona::getPerPersonasCmb(), '...'), $per_mov_movimiento->getPerPersonaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PER_MOV_MOVIMIENTO_ALTA_CMB_EDIT_PER_PERSONA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="per_mov_movimiento_cmb_per_persona_id" clase_id="per_persona" prefijo='per_mov_movimiento_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_per_persona_id" <?php echo ($per_mov_movimiento->getPerPersonaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="per_mov_movimiento_cmb_per_persona_id" clase_id="per_persona" prefijo='per_mov_movimiento_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_per_mov_movimiento_cmb_per_persona_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_per_mov_movimiento_alta_per_persona_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_mov_movimiento_alta_per_persona_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_mov_movimiento_alta_per_persona_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_mov_movimiento_alta_per_persona_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('per_persona_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_per_mov_movimiento_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Credencial', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_mov_movimiento_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='per_mov_movimiento_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='per_mov_movimiento_txt_codigo' value='<?php Gral::_echoTxt($per_mov_movimiento->getCodigo(), true) ?>' size='20' />            
                    <?php if(Lang::_lang('help_per_mov_movimiento_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_mov_movimiento_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_mov_movimiento_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_mov_movimiento_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_per_mov_movimiento_cmb_per_mov_tipo_movimiento_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_per_mov_tipo_movimiento_id' ?>" >
				  
                                        <?php Lang::_lang('PerMovTipoMovimiento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_mov_movimiento_cmb_per_mov_tipo_movimiento_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('per_mov_tipo_movimiento_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'per_mov_movimiento_cmb_per_mov_tipo_movimiento_id', Gral::getCmbFiltro(PerMovTipoMovimiento::getPerMovTipoMovimientosCmb(), '...'), $per_mov_movimiento->getPerMovTipoMovimientoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PER_MOV_MOVIMIENTO_ALTA_CMB_EDIT_PER_MOV_TIPO_MOVIMIENTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="per_mov_movimiento_cmb_per_mov_tipo_movimiento_id" clase_id="per_mov_tipo_movimiento" prefijo='per_mov_movimiento_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_per_mov_tipo_movimiento_id" <?php echo ($per_mov_movimiento->getPerMovTipoMovimientoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="per_mov_movimiento_cmb_per_mov_tipo_movimiento_id" clase_id="per_mov_tipo_movimiento" prefijo='per_mov_movimiento_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_per_mov_movimiento_cmb_per_mov_tipo_movimiento_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_per_mov_movimiento_alta_per_mov_tipo_movimiento_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_mov_movimiento_alta_per_mov_tipo_movimiento_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_mov_movimiento_alta_per_mov_tipo_movimiento_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_mov_movimiento_alta_per_mov_tipo_movimiento_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('per_mov_tipo_movimiento_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_per_mov_movimiento_txt_fechahora" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fechahora' ?>" >
				  
                                        <?php Lang::_lang('Fecha Hora', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_mov_movimiento_txt_fechahora" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fechahora')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='per_mov_movimiento_txt_fechahora' type='text' class='textbox <?php echo $error_input_css ?> ' id='per_mov_movimiento_txt_fechahora' value='<?php Gral::_echoTxt(Gral::getFechaHoraToWeb($per_mov_movimiento->getFechahora()), true) ?>' size='20' />
					<input type='button' id='cal_per_mov_movimiento_txt_fechahora' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'per_mov_movimiento_txt_fechahora', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_per_mov_movimiento_txt_fechahora'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_per_mov_movimiento_alta_fechahora', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_mov_movimiento_alta_fechahora', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_mov_movimiento_alta_fechahora', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_mov_movimiento_alta_fechahora', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fechahora')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_per_mov_movimiento_cmb_ctrl_sector_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ctrl_sector_id' ?>" >
				  
                                        <?php Lang::_lang('CtrlSector', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_mov_movimiento_cmb_ctrl_sector_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ctrl_sector_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'per_mov_movimiento_cmb_ctrl_sector_id', Gral::getCmbFiltro(CtrlSector::getCtrlSectorsCmb(), '...'), $per_mov_movimiento->getCtrlSectorId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PER_MOV_MOVIMIENTO_ALTA_CMB_EDIT_CTRL_SECTOR')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="per_mov_movimiento_cmb_ctrl_sector_id" clase_id="ctrl_sector" prefijo='per_mov_movimiento_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ctrl_sector_id" <?php echo ($per_mov_movimiento->getCtrlSectorId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="per_mov_movimiento_cmb_ctrl_sector_id" clase_id="ctrl_sector" prefijo='per_mov_movimiento_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_per_mov_movimiento_cmb_ctrl_sector_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_per_mov_movimiento_alta_ctrl_sector_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_mov_movimiento_alta_ctrl_sector_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_mov_movimiento_alta_ctrl_sector_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_mov_movimiento_alta_ctrl_sector_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ctrl_sector_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_per_mov_movimiento_cmb_ctrl_equipo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ctrl_equipo_id' ?>" >
				  
                                        <?php Lang::_lang('CtrlEquipo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_mov_movimiento_cmb_ctrl_equipo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ctrl_equipo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'per_mov_movimiento_cmb_ctrl_equipo_id', Gral::getCmbFiltro(CtrlEquipo::getCtrlEquiposCmb(), '...'), $per_mov_movimiento->getCtrlEquipoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PER_MOV_MOVIMIENTO_ALTA_CMB_EDIT_CTRL_EQUIPO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="per_mov_movimiento_cmb_ctrl_equipo_id" clase_id="ctrl_equipo" prefijo='per_mov_movimiento_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ctrl_equipo_id" <?php echo ($per_mov_movimiento->getCtrlEquipoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="per_mov_movimiento_cmb_ctrl_equipo_id" clase_id="ctrl_equipo" prefijo='per_mov_movimiento_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_per_mov_movimiento_cmb_ctrl_equipo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_per_mov_movimiento_alta_ctrl_equipo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_mov_movimiento_alta_ctrl_equipo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_mov_movimiento_alta_ctrl_equipo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_mov_movimiento_alta_ctrl_equipo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ctrl_equipo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_per_mov_movimiento_cmb_per_mov_tipo_estado_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_per_mov_tipo_estado_id' ?>" >
				  
                                        <?php Lang::_lang('PerMovTipoEstado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_mov_movimiento_cmb_per_mov_tipo_estado_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('per_mov_tipo_estado_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'per_mov_movimiento_cmb_per_mov_tipo_estado_id', Gral::getCmbFiltro(PerMovTipoEstado::getPerMovTipoEstadosCmb(), '...'), $per_mov_movimiento->getPerMovTipoEstadoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PER_MOV_MOVIMIENTO_ALTA_CMB_EDIT_PER_MOV_TIPO_ESTADO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="per_mov_movimiento_cmb_per_mov_tipo_estado_id" clase_id="per_mov_tipo_estado" prefijo='per_mov_movimiento_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_per_mov_tipo_estado_id" <?php echo ($per_mov_movimiento->getPerMovTipoEstadoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="per_mov_movimiento_cmb_per_mov_tipo_estado_id" clase_id="per_mov_tipo_estado" prefijo='per_mov_movimiento_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_per_mov_movimiento_cmb_per_mov_tipo_estado_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_per_mov_movimiento_alta_per_mov_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_mov_movimiento_alta_per_mov_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_mov_movimiento_alta_per_mov_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_mov_movimiento_alta_per_mov_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('per_mov_tipo_estado_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_per_mov_movimiento_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_mov_movimiento_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='per_mov_movimiento_txa_observacion' rows='10' cols='50' id='per_mov_movimiento_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($per_mov_movimiento->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_per_mov_movimiento_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_mov_movimiento_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_mov_movimiento_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_mov_movimiento_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($per_mov_movimiento->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_per_mov_movimiento_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='per_mov_movimiento'/>
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

