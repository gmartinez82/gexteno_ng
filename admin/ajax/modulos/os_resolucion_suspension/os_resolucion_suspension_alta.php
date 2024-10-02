<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('OS_RESOLUCION_SUSPENSION_ALTA')){
    echo "No tiene asignada la credencial OS_RESOLUCION_SUSPENSION_ALTA. ";
    return false;
}

$db_nombre_objeto = 'os_resolucion_suspension';
$db_nombre_pagina = 'os_resolucion_suspension_alta';

$os_resolucion_suspension = new OsResolucionSuspension();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$os_resolucion_suspension = new OsResolucionSuspension();
	if(trim($hdn_id) != '') $os_resolucion_suspension->setId($hdn_id, false);
	$os_resolucion_suspension->setOsResolucionId(Gral::getVars(1, "os_resolucion_suspension_cmb_os_resolucion_id", null));
	$os_resolucion_suspension->setDiasSuspension(Gral::getVars(1, "os_resolucion_suspension_txt_dias_suspension", 0));
	$os_resolucion_suspension->setFechaInicio(Gral::getFechaToDb(Gral::getVars(1, "os_resolucion_suspension_txt_fecha_inicio")));
	$os_resolucion_suspension->setFechaFin(Gral::getFechaToDb(Gral::getVars(1, "os_resolucion_suspension_txt_fecha_fin")));
	$os_resolucion_suspension->setFechaReintegro(Gral::getFechaToDb(Gral::getVars(1, "os_resolucion_suspension_txt_fecha_reintegro")));
	$os_resolucion_suspension->setDescripcion(Gral::getVars(1, "os_resolucion_suspension_txt_descripcion"));
	$os_resolucion_suspension->setCodigo(Gral::getVars(1, "os_resolucion_suspension_txt_codigo"));
	$os_resolucion_suspension->setAfectaHaberes(Gral::getVars(1, "os_resolucion_suspension_cmb_afecta_haberes", 0));
	$os_resolucion_suspension->setNotaPublica(Gral::getVars(1, "os_resolucion_suspension_txa_nota_publica"));
	$os_resolucion_suspension->setObservacion(Gral::getVars(1, "os_resolucion_suspension_txa_observacion"));
	$os_resolucion_suspension->setOrden(Gral::getVars(1, "os_resolucion_suspension_txt_orden", 0));
	$os_resolucion_suspension->setEstado(Gral::getVars(1, "os_resolucion_suspension_cmb_estado", 0));
	$os_resolucion_suspension->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "os_resolucion_suspension_txt_creado")));
	$os_resolucion_suspension->setCreadoPor(Gral::getVars(1, "os_resolucion_suspension__creado_por", 0));
	$os_resolucion_suspension->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "os_resolucion_suspension_txt_modificado")));
	$os_resolucion_suspension->setModificadoPor(Gral::getVars(1, "os_resolucion_suspension__modificado_por", 0));

	$os_resolucion_suspension_estado = new OsResolucionSuspension();
	if(trim($hdn_id) != ''){
		$os_resolucion_suspension_estado->setId($hdn_id);
		$os_resolucion_suspension->setEstado($os_resolucion_suspension_estado->getEstado());
				
	}else{
		$os_resolucion_suspension->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $os_resolucion_suspension->control();
			if(!$error->getExisteError()){
				$os_resolucion_suspension->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: os_resolucion_suspension_alta.php?cs=1&id='.$os_resolucion_suspension->getId());
			}
		break;
		case 'guardarnvo':
			$error = $os_resolucion_suspension->control();
			if(!$error->getExisteError()){
				$os_resolucion_suspension->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: os_resolucion_suspension_alta.php?cs=1');
				$os_resolucion_suspension = new OsResolucionSuspension();
			}
		break;
	}
	Gral::setSes('OsResolucionSuspension_ULTIMO_INSERTADO', $os_resolucion_suspension->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_os_resolucion_suspension_id = Gral::getVars(2, $prefijo.'cmb_os_resolucion_suspension_id', 0);
	if($cmb_os_resolucion_suspension_id != 0){
		$os_resolucion_suspension = OsResolucionSuspension::getOxId($cmb_os_resolucion_suspension_id);
	}else{
	
	$os_resolucion_suspension->setOsResolucionId(Gral::getVars(2, "os_resolucion_id", 'null'));
	$os_resolucion_suspension->setDiasSuspension(Gral::getVars(2, "dias_suspension", 0));
	$os_resolucion_suspension->setFechaInicio(Gral::getVars(2, "fecha_inicio", date('Y-m-d')));
	$os_resolucion_suspension->setFechaFin(Gral::getVars(2, "fecha_fin", date('Y-m-d')));
	$os_resolucion_suspension->setFechaReintegro(Gral::getVars(2, "fecha_reintegro", date('Y-m-d')));
	$os_resolucion_suspension->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$os_resolucion_suspension->setCodigo(Gral::getVars(2, "codigo", ''));
	$os_resolucion_suspension->setAfectaHaberes(Gral::getVars(2, "afecta_haberes", 0));
	$os_resolucion_suspension->setNotaPublica(Gral::getVars(2, "nota_publica", ''));
	$os_resolucion_suspension->setObservacion(Gral::getVars(2, "observacion", ''));
	$os_resolucion_suspension->setOrden(Gral::getVars(2, "orden", 0));
	$os_resolucion_suspension->setEstado(Gral::getVars(2, "estado", 0));
	$os_resolucion_suspension->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$os_resolucion_suspension->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$os_resolucion_suspension->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$os_resolucion_suspension->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $os_resolucion_suspension->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/os_resolucion_suspension/os_resolucion_suspension_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_os_resolucion_suspension' width='90%'>
        
				<tr>
				  <td  id="label_os_resolucion_suspension_txt_fecha_inicio" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_inicio' ?>" >
				  
                                        <?php Lang::_lang('Fecha Inicio', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_os_resolucion_suspension_txt_fecha_inicio" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_inicio')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='os_resolucion_suspension_txt_fecha_inicio' type='text' class='textbox <?php echo $error_input_css ?> date' id='os_resolucion_suspension_txt_fecha_inicio' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($os_resolucion_suspension->getFechaInicio()), true) ?>' size='10' />
					<input type='button' id='cal_os_resolucion_suspension_txt_fecha_inicio' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'os_resolucion_suspension_txt_fecha_inicio', ifFormat: '%d/%m/%Y', button: 'cal_os_resolucion_suspension_txt_fecha_inicio'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_os_resolucion_suspension_alta_fecha_inicio', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_os_resolucion_suspension_alta_fecha_inicio', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_os_resolucion_suspension_alta_fecha_inicio', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_os_resolucion_suspension_alta_fecha_inicio', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_inicio')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_os_resolucion_suspension_txt_fecha_fin" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_fin' ?>" >
				  
                                        <?php Lang::_lang('Fecha Fin', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_os_resolucion_suspension_txt_fecha_fin" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_fin')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='os_resolucion_suspension_txt_fecha_fin' type='text' class='textbox <?php echo $error_input_css ?> date' id='os_resolucion_suspension_txt_fecha_fin' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($os_resolucion_suspension->getFechaFin()), true) ?>' size='10' />
					<input type='button' id='cal_os_resolucion_suspension_txt_fecha_fin' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'os_resolucion_suspension_txt_fecha_fin', ifFormat: '%d/%m/%Y', button: 'cal_os_resolucion_suspension_txt_fecha_fin'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_os_resolucion_suspension_alta_fecha_fin', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_os_resolucion_suspension_alta_fecha_fin', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_os_resolucion_suspension_alta_fecha_fin', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_os_resolucion_suspension_alta_fecha_fin', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_fin')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_os_resolucion_suspension_txt_fecha_reintegro" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_reintegro' ?>" >
				  
                                        <?php Lang::_lang('Fecha Reintegro', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_os_resolucion_suspension_txt_fecha_reintegro" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_reintegro')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='os_resolucion_suspension_txt_fecha_reintegro' type='text' class='textbox <?php echo $error_input_css ?> date' id='os_resolucion_suspension_txt_fecha_reintegro' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($os_resolucion_suspension->getFechaReintegro()), true) ?>' size='10' />
					<input type='button' id='cal_os_resolucion_suspension_txt_fecha_reintegro' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'os_resolucion_suspension_txt_fecha_reintegro', ifFormat: '%d/%m/%Y', button: 'cal_os_resolucion_suspension_txt_fecha_reintegro'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_os_resolucion_suspension_alta_fecha_reintegro', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_os_resolucion_suspension_alta_fecha_reintegro', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_os_resolucion_suspension_alta_fecha_reintegro', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_os_resolucion_suspension_alta_fecha_reintegro', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_reintegro')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_os_resolucion_suspension_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_os_resolucion_suspension_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='os_resolucion_suspension_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='os_resolucion_suspension_txt_descripcion' value='<?php Gral::_echoTxt($os_resolucion_suspension->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_os_resolucion_suspension_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_os_resolucion_suspension_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_os_resolucion_suspension_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_os_resolucion_suspension_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_os_resolucion_suspension_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_os_resolucion_suspension_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='os_resolucion_suspension_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='os_resolucion_suspension_txt_codigo' value='<?php Gral::_echoTxt($os_resolucion_suspension->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_os_resolucion_suspension_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_os_resolucion_suspension_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_os_resolucion_suspension_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_os_resolucion_suspension_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_os_resolucion_suspension_cmb_afecta_haberes" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_afecta_haberes' ?>" >
				  
                                        <?php Lang::_lang('Afecta Haberes', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_os_resolucion_suspension_cmb_afecta_haberes" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('afecta_haberes')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'os_resolucion_suspension_cmb_afecta_haberes', GralSiNo::getGralSiNosCmb(), $os_resolucion_suspension->getAfectaHaberes(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_os_resolucion_suspension_alta_afecta_haberes', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_os_resolucion_suspension_alta_afecta_haberes', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_os_resolucion_suspension_alta_afecta_haberes', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_os_resolucion_suspension_alta_afecta_haberes', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afecta_haberes')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_os_resolucion_suspension_txa_nota_publica" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_nota_publica' ?>" >
				  
                                        <?php Lang::_lang('Nota Publica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_os_resolucion_suspension_txa_nota_publica" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('nota_publica')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='os_resolucion_suspension_txa_nota_publica' rows='10' cols='50' id='os_resolucion_suspension_txa_nota_publica' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($os_resolucion_suspension->getNotaPublica(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_os_resolucion_suspension_alta_nota_publica', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_os_resolucion_suspension_alta_nota_publica', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_os_resolucion_suspension_alta_nota_publica', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_os_resolucion_suspension_alta_nota_publica', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('nota_publica')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_os_resolucion_suspension_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_os_resolucion_suspension_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='os_resolucion_suspension_txa_observacion' rows='10' cols='50' id='os_resolucion_suspension_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($os_resolucion_suspension->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_os_resolucion_suspension_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_os_resolucion_suspension_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_os_resolucion_suspension_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_os_resolucion_suspension_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($os_resolucion_suspension->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_os_resolucion_suspension_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='os_resolucion_suspension'/>
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

