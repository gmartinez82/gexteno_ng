<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('CNTB_EJERCICIO_ALTA')){
    echo "No tiene asignada la credencial CNTB_EJERCICIO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'cntb_ejercicio';
$db_nombre_pagina = 'cntb_ejercicio_alta';

$cntb_ejercicio = new CntbEjercicio();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$cntb_ejercicio = new CntbEjercicio();
	if(trim($hdn_id) != '') $cntb_ejercicio->setId($hdn_id, false);
	$cntb_ejercicio->setDescripcion(Gral::getVars(1, "cntb_ejercicio_txt_descripcion"));
	$cntb_ejercicio->setGralEmpresaId(Gral::getVars(1, "cntb_ejercicio_cmb_gral_empresa_id", null));
	$cntb_ejercicio->setFechaInicio(Gral::getFechaToDb(Gral::getVars(1, "cntb_ejercicio_txt_fecha_inicio")));
	$cntb_ejercicio->setFechaFin(Gral::getFechaToDb(Gral::getVars(1, "cntb_ejercicio_txt_fecha_fin")));
	$cntb_ejercicio->setCodigo(Gral::getVars(1, "cntb_ejercicio_txt_codigo"));
	$cntb_ejercicio->setObservacion(Gral::getVars(1, "cntb_ejercicio_txa_observacion"));
	$cntb_ejercicio->setOrden(Gral::getVars(1, "cntb_ejercicio_txt_orden", 0));
	$cntb_ejercicio->setEstado(Gral::getVars(1, "cntb_ejercicio__estado", 0));
	$cntb_ejercicio->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "cntb_ejercicio_txt_creado")));
	$cntb_ejercicio->setCreadoPor(Gral::getVars(1, "cntb_ejercicio__creado_por", 0));
	$cntb_ejercicio->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "cntb_ejercicio_txt_modificado")));
	$cntb_ejercicio->setModificadoPor(Gral::getVars(1, "cntb_ejercicio__modificado_por", 0));

	$cntb_ejercicio_estado = new CntbEjercicio();
	if(trim($hdn_id) != ''){
		$cntb_ejercicio_estado->setId($hdn_id);
		$cntb_ejercicio->setEstado($cntb_ejercicio_estado->getEstado());
				
	}else{
		$cntb_ejercicio->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $cntb_ejercicio->control();
			if(!$error->getExisteError()){
				$cntb_ejercicio->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: cntb_ejercicio_alta.php?cs=1&id='.$cntb_ejercicio->getId());
			}
		break;
		case 'guardarnvo':
			$error = $cntb_ejercicio->control();
			if(!$error->getExisteError()){
				$cntb_ejercicio->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: cntb_ejercicio_alta.php?cs=1');
				$cntb_ejercicio = new CntbEjercicio();
			}
		break;
	}
	Gral::setSes('CntbEjercicio_ULTIMO_INSERTADO', $cntb_ejercicio->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_cntb_ejercicio_id = Gral::getVars(2, $prefijo.'cmb_cntb_ejercicio_id', 0);
	if($cmb_cntb_ejercicio_id != 0){
		$cntb_ejercicio = CntbEjercicio::getOxId($cmb_cntb_ejercicio_id);
	}else{
	
	$cntb_ejercicio->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$cntb_ejercicio->setGralEmpresaId(Gral::getVars(2, "gral_empresa_id", 'null'));
	$cntb_ejercicio->setFechaInicio(Gral::getVars(2, "fecha_inicio", date('Y-m-d')));
	$cntb_ejercicio->setFechaFin(Gral::getVars(2, "fecha_fin", date('Y-m-d')));
	$cntb_ejercicio->setCodigo(Gral::getVars(2, "codigo", ''));
	$cntb_ejercicio->setObservacion(Gral::getVars(2, "observacion", ''));
	$cntb_ejercicio->setOrden(Gral::getVars(2, "orden", 0));
	$cntb_ejercicio->setEstado(Gral::getVars(2, "estado", 0));
	$cntb_ejercicio->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$cntb_ejercicio->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$cntb_ejercicio->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$cntb_ejercicio->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $cntb_ejercicio->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/cntb_ejercicio/cntb_ejercicio_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_cntb_ejercicio' width='90%'>
        
				<tr>
				  <td  id="label_cntb_ejercicio_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_ejercicio_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cntb_ejercicio_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='cntb_ejercicio_txt_descripcion' value='<?php Gral::_echoTxt($cntb_ejercicio->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_cntb_ejercicio_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_ejercicio_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_ejercicio_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_ejercicio_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_ejercicio_cmb_gral_empresa_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_empresa_id' ?>" >
				  
                                        <?php Lang::_lang('GralEmpresa', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_ejercicio_cmb_gral_empresa_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_empresa_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'cntb_ejercicio_cmb_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(), '...'), $cntb_ejercicio->getGralEmpresaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('CNTB_EJERCICIO_ALTA_CMB_EDIT_GRAL_EMPRESA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="cntb_ejercicio_cmb_gral_empresa_id" clase_id="gral_empresa" prefijo='cntb_ejercicio_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_empresa_id" <?php echo ($cntb_ejercicio->getGralEmpresaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="cntb_ejercicio_cmb_gral_empresa_id" clase_id="gral_empresa" prefijo='cntb_ejercicio_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_cntb_ejercicio_cmb_gral_empresa_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_cntb_ejercicio_alta_gral_empresa_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_ejercicio_alta_gral_empresa_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_ejercicio_alta_gral_empresa_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_ejercicio_alta_gral_empresa_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_empresa_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_ejercicio_txt_fecha_inicio" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_inicio' ?>" >
				  
                                        <?php Lang::_lang('Fecha Inicio', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_ejercicio_txt_fecha_inicio" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_inicio')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cntb_ejercicio_txt_fecha_inicio' type='text' class='textbox <?php echo $error_input_css ?> date' id='cntb_ejercicio_txt_fecha_inicio' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($cntb_ejercicio->getFechaInicio()), true) ?>' size='40' />
					<input type='button' id='cal_cntb_ejercicio_txt_fecha_inicio' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'cntb_ejercicio_txt_fecha_inicio', ifFormat: '%d/%m/%Y', button: 'cal_cntb_ejercicio_txt_fecha_inicio'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_cntb_ejercicio_alta_fecha_inicio', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_ejercicio_alta_fecha_inicio', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_ejercicio_alta_fecha_inicio', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_ejercicio_alta_fecha_inicio', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_inicio')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_ejercicio_txt_fecha_fin" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_fin' ?>" >
				  
                                        <?php Lang::_lang('Fecha Fin', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_ejercicio_txt_fecha_fin" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_fin')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cntb_ejercicio_txt_fecha_fin' type='text' class='textbox <?php echo $error_input_css ?> date' id='cntb_ejercicio_txt_fecha_fin' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($cntb_ejercicio->getFechaFin()), true) ?>' size='40' />
					<input type='button' id='cal_cntb_ejercicio_txt_fecha_fin' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'cntb_ejercicio_txt_fecha_fin', ifFormat: '%d/%m/%Y', button: 'cal_cntb_ejercicio_txt_fecha_fin'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_cntb_ejercicio_alta_fecha_fin', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_ejercicio_alta_fecha_fin', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_ejercicio_alta_fecha_fin', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_ejercicio_alta_fecha_fin', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_fin')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_ejercicio_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_ejercicio_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cntb_ejercicio_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='cntb_ejercicio_txt_codigo' value='<?php Gral::_echoTxt($cntb_ejercicio->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_cntb_ejercicio_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_ejercicio_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_ejercicio_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_ejercicio_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_ejercicio_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_ejercicio_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='cntb_ejercicio_txa_observacion' rows='10' cols='50' id='cntb_ejercicio_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($cntb_ejercicio->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_cntb_ejercicio_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_ejercicio_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_ejercicio_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_ejercicio_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($cntb_ejercicio->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_cntb_ejercicio_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='cntb_ejercicio'/>
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

