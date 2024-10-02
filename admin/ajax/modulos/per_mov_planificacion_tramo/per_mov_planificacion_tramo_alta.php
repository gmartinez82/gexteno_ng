<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PER_MOV_PLANIFICACION_TRAMO_ALTA')){
    echo "No tiene asignada la credencial PER_MOV_PLANIFICACION_TRAMO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'per_mov_planificacion_tramo';
$db_nombre_pagina = 'per_mov_planificacion_tramo_alta';

$per_mov_planificacion_tramo = new PerMovPlanificacionTramo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$per_mov_planificacion_tramo = new PerMovPlanificacionTramo();
	if(trim($hdn_id) != '') $per_mov_planificacion_tramo->setId($hdn_id, false);
	$per_mov_planificacion_tramo->setDescripcion(Gral::getVars(1, "per_mov_planificacion_tramo_txt_descripcion"));
	$per_mov_planificacion_tramo->setPerMovPlanificacionId(Gral::getVars(1, "per_mov_planificacion_tramo_cmb_per_mov_planificacion_id", null));
	$per_mov_planificacion_tramo->setPlnJornadaTramoId(Gral::getVars(1, "per_mov_planificacion_tramo_cmb_pln_jornada_tramo_id", null));
	$per_mov_planificacion_tramo->setTramoDesde(Gral::getVars(1, "per_mov_planificacion_tramo_txt_tramo_desde"));
	$per_mov_planificacion_tramo->setTramoHasta(Gral::getVars(1, "per_mov_planificacion_tramo_txt_tramo_hasta"));
	$per_mov_planificacion_tramo->setHorasTramo(Gral::getVars(1, "per_mov_planificacion_tramo_txt_horas_tramo"));
	$per_mov_planificacion_tramo->setCodigo(Gral::getVars(1, "per_mov_planificacion_tramo_txt_codigo"));
	$per_mov_planificacion_tramo->setObservacion(Gral::getVars(1, "per_mov_planificacion_tramo_txa_observacion"));
	$per_mov_planificacion_tramo->setOrden(Gral::getVars(1, "per_mov_planificacion_tramo_txt_orden", 0));
	$per_mov_planificacion_tramo->setEstado(Gral::getVars(1, "per_mov_planificacion_tramo_cmb_estado", 0));
	$per_mov_planificacion_tramo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "per_mov_planificacion_tramo_txt_creado")));
	$per_mov_planificacion_tramo->setCreadoPor(Gral::getVars(1, "per_mov_planificacion_tramo__creado_por", 0));
	$per_mov_planificacion_tramo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "per_mov_planificacion_tramo_txt_modificado")));
	$per_mov_planificacion_tramo->setModificadoPor(Gral::getVars(1, "per_mov_planificacion_tramo__modificado_por", 0));

	$per_mov_planificacion_tramo_estado = new PerMovPlanificacionTramo();
	if(trim($hdn_id) != ''){
		$per_mov_planificacion_tramo_estado->setId($hdn_id);
		$per_mov_planificacion_tramo->setEstado($per_mov_planificacion_tramo_estado->getEstado());
				
	}else{
		$per_mov_planificacion_tramo->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $per_mov_planificacion_tramo->control();
			if(!$error->getExisteError()){
				$per_mov_planificacion_tramo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: per_mov_planificacion_tramo_alta.php?cs=1&id='.$per_mov_planificacion_tramo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $per_mov_planificacion_tramo->control();
			if(!$error->getExisteError()){
				$per_mov_planificacion_tramo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: per_mov_planificacion_tramo_alta.php?cs=1');
				$per_mov_planificacion_tramo = new PerMovPlanificacionTramo();
			}
		break;
	}
	Gral::setSes('PerMovPlanificacionTramo_ULTIMO_INSERTADO', $per_mov_planificacion_tramo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_per_mov_planificacion_tramo_id = Gral::getVars(2, $prefijo.'cmb_per_mov_planificacion_tramo_id', 0);
	if($cmb_per_mov_planificacion_tramo_id != 0){
		$per_mov_planificacion_tramo = PerMovPlanificacionTramo::getOxId($cmb_per_mov_planificacion_tramo_id);
	}else{
	
	$per_mov_planificacion_tramo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$per_mov_planificacion_tramo->setPerMovPlanificacionId(Gral::getVars(2, "per_mov_planificacion_id", 'null'));
	$per_mov_planificacion_tramo->setPlnJornadaTramoId(Gral::getVars(2, "pln_jornada_tramo_id", 'null'));
	$per_mov_planificacion_tramo->setTramoDesde(Gral::getVars(2, "tramo_desde", ''));
	$per_mov_planificacion_tramo->setTramoHasta(Gral::getVars(2, "tramo_hasta", ''));
	$per_mov_planificacion_tramo->setHorasTramo(Gral::getVars(2, "horas_tramo", ''));
	$per_mov_planificacion_tramo->setCodigo(Gral::getVars(2, "codigo", ''));
	$per_mov_planificacion_tramo->setObservacion(Gral::getVars(2, "observacion", ''));
	$per_mov_planificacion_tramo->setOrden(Gral::getVars(2, "orden", 0));
	$per_mov_planificacion_tramo->setEstado(Gral::getVars(2, "estado", 0));
	$per_mov_planificacion_tramo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$per_mov_planificacion_tramo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$per_mov_planificacion_tramo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$per_mov_planificacion_tramo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $per_mov_planificacion_tramo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/per_mov_planificacion_tramo/per_mov_planificacion_tramo_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_per_mov_planificacion_tramo' width='90%'>
        
				<tr>
				  <td  id="label_per_mov_planificacion_tramo_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_mov_planificacion_tramo_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='per_mov_planificacion_tramo_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='per_mov_planificacion_tramo_txt_descripcion' value='<?php Gral::_echoTxt($per_mov_planificacion_tramo->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_per_mov_planificacion_tramo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_mov_planificacion_tramo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_mov_planificacion_tramo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_mov_planificacion_tramo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_per_mov_planificacion_tramo_cmb_per_mov_planificacion_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_per_mov_planificacion_id' ?>" >
				  
                                        <?php Lang::_lang('PerMovPlanificacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_mov_planificacion_tramo_cmb_per_mov_planificacion_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('per_mov_planificacion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'per_mov_planificacion_tramo_cmb_per_mov_planificacion_id', Gral::getCmbFiltro(PerMovPlanificacion::getPerMovPlanificacionsCmb(), '...'), $per_mov_planificacion_tramo->getPerMovPlanificacionId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PER_MOV_PLANIFICACION_TRAMO_ALTA_CMB_EDIT_PER_MOV_PLANIFICACION')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="per_mov_planificacion_tramo_cmb_per_mov_planificacion_id" clase_id="per_mov_planificacion" prefijo='per_mov_planificacion_tramo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_per_mov_planificacion_id" <?php echo ($per_mov_planificacion_tramo->getPerMovPlanificacionId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="per_mov_planificacion_tramo_cmb_per_mov_planificacion_id" clase_id="per_mov_planificacion" prefijo='per_mov_planificacion_tramo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_per_mov_planificacion_tramo_cmb_per_mov_planificacion_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_per_mov_planificacion_tramo_alta_per_mov_planificacion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_mov_planificacion_tramo_alta_per_mov_planificacion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_mov_planificacion_tramo_alta_per_mov_planificacion_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_mov_planificacion_tramo_alta_per_mov_planificacion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('per_mov_planificacion_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_per_mov_planificacion_tramo_cmb_pln_jornada_tramo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pln_jornada_tramo_id' ?>" >
				  
                                        <?php Lang::_lang('PlnJornadaTramo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_mov_planificacion_tramo_cmb_pln_jornada_tramo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pln_jornada_tramo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'per_mov_planificacion_tramo_cmb_pln_jornada_tramo_id', Gral::getCmbFiltro(PlnJornadaTramo::getPlnJornadaTramosCmb(), '...'), $per_mov_planificacion_tramo->getPlnJornadaTramoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PER_MOV_PLANIFICACION_TRAMO_ALTA_CMB_EDIT_PLN_JORNADA_TRAMO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="per_mov_planificacion_tramo_cmb_pln_jornada_tramo_id" clase_id="pln_jornada_tramo" prefijo='per_mov_planificacion_tramo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pln_jornada_tramo_id" <?php echo ($per_mov_planificacion_tramo->getPlnJornadaTramoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="per_mov_planificacion_tramo_cmb_pln_jornada_tramo_id" clase_id="pln_jornada_tramo" prefijo='per_mov_planificacion_tramo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_per_mov_planificacion_tramo_cmb_pln_jornada_tramo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_per_mov_planificacion_tramo_alta_pln_jornada_tramo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_mov_planificacion_tramo_alta_pln_jornada_tramo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_mov_planificacion_tramo_alta_pln_jornada_tramo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_mov_planificacion_tramo_alta_pln_jornada_tramo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pln_jornada_tramo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_per_mov_planificacion_tramo_txt_tramo_desde" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_tramo_desde' ?>" >
				  
                                        <?php Lang::_lang('Tramo Desde', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_mov_planificacion_tramo_txt_tramo_desde" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('tramo_desde')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='per_mov_planificacion_tramo_txt_tramo_desde' type='text' class='textbox <?php echo $error_input_css ?> ' id='per_mov_planificacion_tramo_txt_tramo_desde' value='<?php Gral::_echoTxt($per_mov_planificacion_tramo->getTramoDesde(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_per_mov_planificacion_tramo_alta_tramo_desde', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_mov_planificacion_tramo_alta_tramo_desde', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_mov_planificacion_tramo_alta_tramo_desde', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_mov_planificacion_tramo_alta_tramo_desde', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('tramo_desde')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_per_mov_planificacion_tramo_txt_tramo_hasta" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_tramo_hasta' ?>" >
				  
                                        <?php Lang::_lang('Tramo Hasta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_mov_planificacion_tramo_txt_tramo_hasta" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('tramo_hasta')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='per_mov_planificacion_tramo_txt_tramo_hasta' type='text' class='textbox <?php echo $error_input_css ?> ' id='per_mov_planificacion_tramo_txt_tramo_hasta' value='<?php Gral::_echoTxt($per_mov_planificacion_tramo->getTramoHasta(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_per_mov_planificacion_tramo_alta_tramo_hasta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_mov_planificacion_tramo_alta_tramo_hasta', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_mov_planificacion_tramo_alta_tramo_hasta', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_mov_planificacion_tramo_alta_tramo_hasta', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('tramo_hasta')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_per_mov_planificacion_tramo_txt_horas_tramo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_horas_tramo' ?>" >
				  
                                        <?php Lang::_lang('Horas Tramo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_mov_planificacion_tramo_txt_horas_tramo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('horas_tramo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='per_mov_planificacion_tramo_txt_horas_tramo' type='text' class='textbox <?php echo $error_input_css ?> ' id='per_mov_planificacion_tramo_txt_horas_tramo' value='<?php Gral::_echoTxt($per_mov_planificacion_tramo->getHorasTramo(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_per_mov_planificacion_tramo_alta_horas_tramo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_mov_planificacion_tramo_alta_horas_tramo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_mov_planificacion_tramo_alta_horas_tramo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_mov_planificacion_tramo_alta_horas_tramo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('horas_tramo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_per_mov_planificacion_tramo_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Credencial', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_mov_planificacion_tramo_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='per_mov_planificacion_tramo_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='per_mov_planificacion_tramo_txt_codigo' value='<?php Gral::_echoTxt($per_mov_planificacion_tramo->getCodigo(), true) ?>' size='20' />            
                    <?php if(Lang::_lang('help_per_mov_planificacion_tramo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_mov_planificacion_tramo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_mov_planificacion_tramo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_mov_planificacion_tramo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_per_mov_planificacion_tramo_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_mov_planificacion_tramo_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='per_mov_planificacion_tramo_txa_observacion' rows='10' cols='50' id='per_mov_planificacion_tramo_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($per_mov_planificacion_tramo->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_per_mov_planificacion_tramo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_mov_planificacion_tramo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_mov_planificacion_tramo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_mov_planificacion_tramo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($per_mov_planificacion_tramo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_per_mov_planificacion_tramo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='per_mov_planificacion_tramo'/>
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

