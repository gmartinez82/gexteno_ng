<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('VTA_TRIBUTO_EXENCION_ALTA')){
    echo "No tiene asignada la credencial VTA_TRIBUTO_EXENCION_ALTA. ";
    return false;
}

$db_nombre_objeto = 'vta_tributo_exencion';
$db_nombre_pagina = 'vta_tributo_exencion_alta';

$vta_tributo_exencion = new VtaTributoExencion();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$vta_tributo_exencion = new VtaTributoExencion();
	if(trim($hdn_id) != '') $vta_tributo_exencion->setId($hdn_id, false);
	$vta_tributo_exencion->setDescripcion(Gral::getVars(1, "vta_tributo_exencion_txt_descripcion"));
	$vta_tributo_exencion->setVtaTributoId(Gral::getVars(1, "vta_tributo_exencion_cmb_vta_tributo_id", null));
	$vta_tributo_exencion->setCliClienteId(Gral::getVars(1, "vta_tributo_exencion_dbsug_cli_cliente_id", null));
	$vta_tributo_exencion->setFechaInicio(Gral::getFechaToDb(Gral::getVars(1, "vta_tributo_exencion_txt_fecha_inicio")));
	$vta_tributo_exencion->setFechaFin(Gral::getFechaToDb(Gral::getVars(1, "vta_tributo_exencion_txt_fecha_fin")));
	$vta_tributo_exencion->setCodigo(Gral::getVars(1, "vta_tributo_exencion_txt_codigo"));
	$vta_tributo_exencion->setObservacion(Gral::getVars(1, "vta_tributo_exencion_txa_observacion"));
	$vta_tributo_exencion->setOrden(Gral::getVars(1, "vta_tributo_exencion_txt_orden", 0));
	$vta_tributo_exencion->setEstado(Gral::getVars(1, "vta_tributo_exencion_cmb_estado", 0));
	$vta_tributo_exencion->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_tributo_exencion_txt_creado")));
	$vta_tributo_exencion->setCreadoPor(Gral::getVars(1, "vta_tributo_exencion__creado_por", 0));
	$vta_tributo_exencion->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_tributo_exencion_txt_modificado")));
	$vta_tributo_exencion->setModificadoPor(Gral::getVars(1, "vta_tributo_exencion__modificado_por", 0));

	$vta_tributo_exencion_estado = new VtaTributoExencion();
	if(trim($hdn_id) != ''){
		$vta_tributo_exencion_estado->setId($hdn_id);
		$vta_tributo_exencion->setEstado($vta_tributo_exencion_estado->getEstado());
				
	}else{
		$vta_tributo_exencion->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $vta_tributo_exencion->control();
			if(!$error->getExisteError()){
				$vta_tributo_exencion->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: vta_tributo_exencion_alta.php?cs=1&id='.$vta_tributo_exencion->getId());
			}
		break;
		case 'guardarnvo':
			$error = $vta_tributo_exencion->control();
			if(!$error->getExisteError()){
				$vta_tributo_exencion->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: vta_tributo_exencion_alta.php?cs=1');
				$vta_tributo_exencion = new VtaTributoExencion();
			}
		break;
	}
	Gral::setSes('VtaTributoExencion_ULTIMO_INSERTADO', $vta_tributo_exencion->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_vta_tributo_exencion_id = Gral::getVars(2, $prefijo.'cmb_vta_tributo_exencion_id', 0);
	if($cmb_vta_tributo_exencion_id != 0){
		$vta_tributo_exencion = VtaTributoExencion::getOxId($cmb_vta_tributo_exencion_id);
	}else{
	
	$vta_tributo_exencion->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$vta_tributo_exencion->setVtaTributoId(Gral::getVars(2, "vta_tributo_id", 'null'));
	$vta_tributo_exencion->setCliClienteId(Gral::getVars(2, "cli_cliente_id", 'null'));
	$vta_tributo_exencion->setFechaInicio(Gral::getVars(2, "fecha_inicio", date('Y-m-d')));
	$vta_tributo_exencion->setFechaFin(Gral::getVars(2, "fecha_fin", date('Y-m-d')));
	$vta_tributo_exencion->setCodigo(Gral::getVars(2, "codigo", ''));
	$vta_tributo_exencion->setObservacion(Gral::getVars(2, "observacion", ''));
	$vta_tributo_exencion->setOrden(Gral::getVars(2, "orden", 0));
	$vta_tributo_exencion->setEstado(Gral::getVars(2, "estado", 0));
	$vta_tributo_exencion->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$vta_tributo_exencion->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$vta_tributo_exencion->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$vta_tributo_exencion->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $vta_tributo_exencion->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/vta_tributo_exencion/vta_tributo_exencion_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_vta_tributo_exencion' width='90%'>
        
				<tr>
				  <td  id="label_vta_tributo_exencion_cmb_vta_tributo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_tributo_id' ?>" >
				  
                                        <?php Lang::_lang('VtaTributo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_tributo_exencion_cmb_vta_tributo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_tributo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_tributo_exencion_cmb_vta_tributo_id', Gral::getCmbFiltro(VtaTributo::getVtaTributosCmb(), '...'), $vta_tributo_exencion->getVtaTributoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_TRIBUTO_EXENCION_ALTA_CMB_EDIT_VTA_TRIBUTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_tributo_exencion_cmb_vta_tributo_id" clase_id="vta_tributo" prefijo='vta_tributo_exencion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_tributo_id" <?php echo ($vta_tributo_exencion->getVtaTributoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_tributo_exencion_cmb_vta_tributo_id" clase_id="vta_tributo" prefijo='vta_tributo_exencion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_tributo_exencion_cmb_vta_tributo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_tributo_exencion_alta_vta_tributo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_tributo_exencion_alta_vta_tributo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_tributo_exencion_alta_vta_tributo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_tributo_exencion_alta_vta_tributo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_tributo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_tributo_exencion_dbsug_cli_cliente_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cli_cliente_id' ?>" >
				  
                                        <?php Lang::_lang('CliCliente', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_tributo_exencion_dbsug_cli_cliente_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cli_cliente_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'vta_tributo_exencion_dbsug_cli_cliente', 'ajax/modulos/cli_cliente/cli_cliente_dbsuggest.php', false, true, '', 'Ingrese ...', $vta_tributo_exencion->getCliClienteId(), $vta_tributo_exencion->getCliCliente()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_vta_tributo_exencion_alta_cli_cliente_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_tributo_exencion_alta_cli_cliente_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_tributo_exencion_alta_cli_cliente_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_tributo_exencion_alta_cli_cliente_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cli_cliente_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_tributo_exencion_txt_fecha_inicio" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_inicio' ?>" >
				  
                                        <?php Lang::_lang('Fecha de Inicio', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_tributo_exencion_txt_fecha_inicio" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_inicio')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_tributo_exencion_txt_fecha_inicio' type='text' class='textbox <?php echo $error_input_css ?> date' id='vta_tributo_exencion_txt_fecha_inicio' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($vta_tributo_exencion->getFechaInicio()), true) ?>' size='40' />
					<input type='button' id='cal_vta_tributo_exencion_txt_fecha_inicio' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'vta_tributo_exencion_txt_fecha_inicio', ifFormat: '%d/%m/%Y', button: 'cal_vta_tributo_exencion_txt_fecha_inicio'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_vta_tributo_exencion_alta_fecha_inicio', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_tributo_exencion_alta_fecha_inicio', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_tributo_exencion_alta_fecha_inicio', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_tributo_exencion_alta_fecha_inicio', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_inicio')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_tributo_exencion_txt_fecha_fin" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_fin' ?>" >
				  
                                        <?php Lang::_lang('Fecha de Fin', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_tributo_exencion_txt_fecha_fin" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_fin')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_tributo_exencion_txt_fecha_fin' type='text' class='textbox <?php echo $error_input_css ?> date' id='vta_tributo_exencion_txt_fecha_fin' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($vta_tributo_exencion->getFechaFin()), true) ?>' size='40' />
					<input type='button' id='cal_vta_tributo_exencion_txt_fecha_fin' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'vta_tributo_exencion_txt_fecha_fin', ifFormat: '%d/%m/%Y', button: 'cal_vta_tributo_exencion_txt_fecha_fin'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_vta_tributo_exencion_alta_fecha_fin', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_tributo_exencion_alta_fecha_fin', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_tributo_exencion_alta_fecha_fin', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_tributo_exencion_alta_fecha_fin', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_fin')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_tributo_exencion_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_tributo_exencion_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='vta_tributo_exencion_txa_observacion' rows='10' cols='50' id='vta_tributo_exencion_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_tributo_exencion->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_vta_tributo_exencion_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_tributo_exencion_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_tributo_exencion_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_tributo_exencion_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_tributo_exencion->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_vta_tributo_exencion_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='vta_tributo_exencion'/>
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

