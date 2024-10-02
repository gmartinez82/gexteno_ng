<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('CNTB_PERIODO_ALTA')){
    echo "No tiene asignada la credencial CNTB_PERIODO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'cntb_periodo';
$db_nombre_pagina = 'cntb_periodo_alta';

$cntb_periodo = new CntbPeriodo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$cntb_periodo = new CntbPeriodo();
	if(trim($hdn_id) != '') $cntb_periodo->setId($hdn_id, false);
	$cntb_periodo->setDescripcion(Gral::getVars(1, "cntb_periodo_txt_descripcion"));
	$cntb_periodo->setGralEmpresaId(Gral::getVars(1, "cntb_periodo_cmb_gral_empresa_id", null));
	$cntb_periodo->setCntbEjercicioId(Gral::getVars(1, "cntb_periodo_cmb_cntb_ejercicio_id", null));
	$cntb_periodo->setAnio(Gral::getVars(1, "cntb_periodo_txt_anio", 0));
	$cntb_periodo->setGralMesId(Gral::getVars(1, "cntb_periodo_cmb_gral_mes_id", null));
	$cntb_periodo->setFechaInicio(Gral::getFechaToDb(Gral::getVars(1, "cntb_periodo_txt_fecha_inicio")));
	$cntb_periodo->setFechaFin(Gral::getFechaToDb(Gral::getVars(1, "cntb_periodo_txt_fecha_fin")));
	$cntb_periodo->setCodigo(Gral::getVars(1, "cntb_periodo_txt_codigo"));
	$cntb_periodo->setObservacion(Gral::getVars(1, "cntb_periodo_txa_observacion"));
	$cntb_periodo->setOrden(Gral::getVars(1, "cntb_periodo_txt_orden", 0));
	$cntb_periodo->setEstado(Gral::getVars(1, "cntb_periodo__estado", 0));
	$cntb_periodo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "cntb_periodo_txt_creado")));
	$cntb_periodo->setCreadoPor(Gral::getVars(1, "cntb_periodo__creado_por", 0));
	$cntb_periodo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "cntb_periodo_txt_modificado")));
	$cntb_periodo->setModificadoPor(Gral::getVars(1, "cntb_periodo__modificado_por", 0));

	$cntb_periodo_estado = new CntbPeriodo();
	if(trim($hdn_id) != ''){
		$cntb_periodo_estado->setId($hdn_id);
		$cntb_periodo->setEstado($cntb_periodo_estado->getEstado());
				
	}else{
		$cntb_periodo->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $cntb_periodo->control();
			if(!$error->getExisteError()){
				$cntb_periodo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: cntb_periodo_alta.php?cs=1&id='.$cntb_periodo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $cntb_periodo->control();
			if(!$error->getExisteError()){
				$cntb_periodo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: cntb_periodo_alta.php?cs=1');
				$cntb_periodo = new CntbPeriodo();
			}
		break;
	}
	Gral::setSes('CntbPeriodo_ULTIMO_INSERTADO', $cntb_periodo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_cntb_periodo_id = Gral::getVars(2, $prefijo.'cmb_cntb_periodo_id', 0);
	if($cmb_cntb_periodo_id != 0){
		$cntb_periodo = CntbPeriodo::getOxId($cmb_cntb_periodo_id);
	}else{
	
	$cntb_periodo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$cntb_periodo->setGralEmpresaId(Gral::getVars(2, "gral_empresa_id", 'null'));
	$cntb_periodo->setCntbEjercicioId(Gral::getVars(2, "cntb_ejercicio_id", 'null'));
	$cntb_periodo->setAnio(Gral::getVars(2, "anio", 0));
	$cntb_periodo->setGralMesId(Gral::getVars(2, "gral_mes_id", 'null'));
	$cntb_periodo->setFechaInicio(Gral::getVars(2, "fecha_inicio", date('Y-m-d')));
	$cntb_periodo->setFechaFin(Gral::getVars(2, "fecha_fin", date('Y-m-d')));
	$cntb_periodo->setCodigo(Gral::getVars(2, "codigo", ''));
	$cntb_periodo->setObservacion(Gral::getVars(2, "observacion", ''));
	$cntb_periodo->setOrden(Gral::getVars(2, "orden", 0));
	$cntb_periodo->setEstado(Gral::getVars(2, "estado", 0));
	$cntb_periodo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$cntb_periodo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$cntb_periodo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$cntb_periodo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $cntb_periodo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/cntb_periodo/cntb_periodo_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_cntb_periodo' width='90%'>
        
				<tr>
				  <td  id="label_cntb_periodo_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_periodo_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cntb_periodo_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='cntb_periodo_txt_descripcion' value='<?php Gral::_echoTxt($cntb_periodo->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_cntb_periodo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_periodo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_periodo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_periodo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_periodo_cmb_gral_empresa_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_empresa_id' ?>" >
				  
                                        <?php Lang::_lang('GralEmpresa', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_periodo_cmb_gral_empresa_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_empresa_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'cntb_periodo_cmb_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(), '...'), $cntb_periodo->getGralEmpresaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('CNTB_PERIODO_ALTA_CMB_EDIT_GRAL_EMPRESA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="cntb_periodo_cmb_gral_empresa_id" clase_id="gral_empresa" prefijo='cntb_periodo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_empresa_id" <?php echo ($cntb_periodo->getGralEmpresaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="cntb_periodo_cmb_gral_empresa_id" clase_id="gral_empresa" prefijo='cntb_periodo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_cntb_periodo_cmb_gral_empresa_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_cntb_periodo_alta_gral_empresa_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_periodo_alta_gral_empresa_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_periodo_alta_gral_empresa_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_periodo_alta_gral_empresa_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_empresa_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_periodo_cmb_cntb_ejercicio_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cntb_ejercicio_id' ?>" >
				  
                                        <?php Lang::_lang('CntbEjercicio', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_periodo_cmb_cntb_ejercicio_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cntb_ejercicio_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'cntb_periodo_cmb_cntb_ejercicio_id', Gral::getCmbFiltro(CntbEjercicio::getCntbEjerciciosCmb(), '...'), $cntb_periodo->getCntbEjercicioId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('CNTB_PERIODO_ALTA_CMB_EDIT_CNTB_EJERCICIO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="cntb_periodo_cmb_cntb_ejercicio_id" clase_id="cntb_ejercicio" prefijo='cntb_periodo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_cntb_ejercicio_id" <?php echo ($cntb_periodo->getCntbEjercicioId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="cntb_periodo_cmb_cntb_ejercicio_id" clase_id="cntb_ejercicio" prefijo='cntb_periodo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_cntb_periodo_cmb_cntb_ejercicio_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_cntb_periodo_alta_cntb_ejercicio_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_periodo_alta_cntb_ejercicio_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_periodo_alta_cntb_ejercicio_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_periodo_alta_cntb_ejercicio_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cntb_ejercicio_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_periodo_txt_anio" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_anio' ?>" >
				  
                                        <?php Lang::_lang('Anio', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_periodo_txt_anio" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('anio')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cntb_periodo_txt_anio' type='text' class='textbox <?php echo $error_input_css ?> ' id='cntb_periodo_txt_anio' value='<?php Gral::_echoTxt($cntb_periodo->getAnio(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_cntb_periodo_alta_anio', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_periodo_alta_anio', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_periodo_alta_anio', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_periodo_alta_anio', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('anio')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_periodo_cmb_gral_mes_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_mes_id' ?>" >
				  
                                        <?php Lang::_lang('GralMes', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_periodo_cmb_gral_mes_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_mes_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'cntb_periodo_cmb_gral_mes_id', Gral::getCmbFiltro(GralMes::getGralMessCmb(), '...'), $cntb_periodo->getGralMesId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('CNTB_PERIODO_ALTA_CMB_EDIT_GRAL_MES')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="cntb_periodo_cmb_gral_mes_id" clase_id="gral_mes" prefijo='cntb_periodo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_mes_id" <?php echo ($cntb_periodo->getGralMesId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="cntb_periodo_cmb_gral_mes_id" clase_id="gral_mes" prefijo='cntb_periodo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_cntb_periodo_cmb_gral_mes_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_cntb_periodo_alta_gral_mes_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_periodo_alta_gral_mes_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_periodo_alta_gral_mes_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_periodo_alta_gral_mes_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_mes_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_periodo_txt_fecha_inicio" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_inicio' ?>" >
				  
                                        <?php Lang::_lang('Fecha Inicio', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_periodo_txt_fecha_inicio" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_inicio')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cntb_periodo_txt_fecha_inicio' type='text' class='textbox <?php echo $error_input_css ?> date' id='cntb_periodo_txt_fecha_inicio' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($cntb_periodo->getFechaInicio()), true) ?>' size='40' />
					<input type='button' id='cal_cntb_periodo_txt_fecha_inicio' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'cntb_periodo_txt_fecha_inicio', ifFormat: '%d/%m/%Y', button: 'cal_cntb_periodo_txt_fecha_inicio'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_cntb_periodo_alta_fecha_inicio', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_periodo_alta_fecha_inicio', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_periodo_alta_fecha_inicio', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_periodo_alta_fecha_inicio', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_inicio')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_periodo_txt_fecha_fin" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_fin' ?>" >
				  
                                        <?php Lang::_lang('Fecha Fin', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_periodo_txt_fecha_fin" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_fin')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cntb_periodo_txt_fecha_fin' type='text' class='textbox <?php echo $error_input_css ?> date' id='cntb_periodo_txt_fecha_fin' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($cntb_periodo->getFechaFin()), true) ?>' size='40' />
					<input type='button' id='cal_cntb_periodo_txt_fecha_fin' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'cntb_periodo_txt_fecha_fin', ifFormat: '%d/%m/%Y', button: 'cal_cntb_periodo_txt_fecha_fin'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_cntb_periodo_alta_fecha_fin', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_periodo_alta_fecha_fin', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_periodo_alta_fecha_fin', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_periodo_alta_fecha_fin', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_fin')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_periodo_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_periodo_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cntb_periodo_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='cntb_periodo_txt_codigo' value='<?php Gral::_echoTxt($cntb_periodo->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_cntb_periodo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_periodo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_periodo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_periodo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_periodo_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_periodo_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='cntb_periodo_txa_observacion' rows='10' cols='50' id='cntb_periodo_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($cntb_periodo->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_cntb_periodo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_periodo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_periodo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_periodo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($cntb_periodo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_cntb_periodo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='cntb_periodo'/>
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

