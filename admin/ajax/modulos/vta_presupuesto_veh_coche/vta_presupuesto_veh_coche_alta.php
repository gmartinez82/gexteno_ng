<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_VEH_COCHE_ALTA')){
    echo "No tiene asignada la credencial VTA_PRESUPUESTO_VEH_COCHE_ALTA. ";
    return false;
}

$db_nombre_objeto = 'vta_presupuesto_veh_coche';
$db_nombre_pagina = 'vta_presupuesto_veh_coche_alta';

$vta_presupuesto_veh_coche = new VtaPresupuestoVehCoche();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$vta_presupuesto_veh_coche = new VtaPresupuestoVehCoche();
	if(trim($hdn_id) != '') $vta_presupuesto_veh_coche->setId($hdn_id, false);
	$vta_presupuesto_veh_coche->setDescripcion(Gral::getVars(1, "vta_presupuesto_veh_coche_txt_descripcion"));
	$vta_presupuesto_veh_coche->setVtaPresupuestoId(Gral::getVars(1, "vta_presupuesto_veh_coche_cmb_vta_presupuesto_id", null));
	$vta_presupuesto_veh_coche->setVehCocheId(Gral::getVars(1, "vta_presupuesto_veh_coche_cmb_veh_coche_id", null));
	$vta_presupuesto_veh_coche->setCodigo(Gral::getVars(1, "vta_presupuesto_veh_coche_txt_codigo"));
	$vta_presupuesto_veh_coche->setObservacion(Gral::getVars(1, "vta_presupuesto_veh_coche_txa_observacion"));
	$vta_presupuesto_veh_coche->setOrden(Gral::getVars(1, "vta_presupuesto_veh_coche_txt_orden", 0));
	$vta_presupuesto_veh_coche->setEstado(Gral::getVars(1, "vta_presupuesto_veh_coche_cmb_estado", 0));
	$vta_presupuesto_veh_coche->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_presupuesto_veh_coche_txt_creado")));
	$vta_presupuesto_veh_coche->setCreadoPor(Gral::getVars(1, "vta_presupuesto_veh_coche__creado_por", 0));
	$vta_presupuesto_veh_coche->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_presupuesto_veh_coche_txt_modificado")));
	$vta_presupuesto_veh_coche->setModificadoPor(Gral::getVars(1, "vta_presupuesto_veh_coche__modificado_por", 0));

	$vta_presupuesto_veh_coche_estado = new VtaPresupuestoVehCoche();
	if(trim($hdn_id) != ''){
		$vta_presupuesto_veh_coche_estado->setId($hdn_id);
		$vta_presupuesto_veh_coche->setEstado($vta_presupuesto_veh_coche_estado->getEstado());
				
	}else{
		$vta_presupuesto_veh_coche->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $vta_presupuesto_veh_coche->control();
			if(!$error->getExisteError()){
				$vta_presupuesto_veh_coche->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: vta_presupuesto_veh_coche_alta.php?cs=1&id='.$vta_presupuesto_veh_coche->getId());
			}
		break;
		case 'guardarnvo':
			$error = $vta_presupuesto_veh_coche->control();
			if(!$error->getExisteError()){
				$vta_presupuesto_veh_coche->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: vta_presupuesto_veh_coche_alta.php?cs=1');
				$vta_presupuesto_veh_coche = new VtaPresupuestoVehCoche();
			}
		break;
	}
	Gral::setSes('VtaPresupuestoVehCoche_ULTIMO_INSERTADO', $vta_presupuesto_veh_coche->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_vta_presupuesto_veh_coche_id = Gral::getVars(2, $prefijo.'cmb_vta_presupuesto_veh_coche_id', 0);
	if($cmb_vta_presupuesto_veh_coche_id != 0){
		$vta_presupuesto_veh_coche = VtaPresupuestoVehCoche::getOxId($cmb_vta_presupuesto_veh_coche_id);
	}else{
	
	$vta_presupuesto_veh_coche->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$vta_presupuesto_veh_coche->setVtaPresupuestoId(Gral::getVars(2, "vta_presupuesto_id", 'null'));
	$vta_presupuesto_veh_coche->setVehCocheId(Gral::getVars(2, "veh_coche_id", 'null'));
	$vta_presupuesto_veh_coche->setCodigo(Gral::getVars(2, "codigo", ''));
	$vta_presupuesto_veh_coche->setObservacion(Gral::getVars(2, "observacion", ''));
	$vta_presupuesto_veh_coche->setOrden(Gral::getVars(2, "orden", 0));
	$vta_presupuesto_veh_coche->setEstado(Gral::getVars(2, "estado", 0));
	$vta_presupuesto_veh_coche->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$vta_presupuesto_veh_coche->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$vta_presupuesto_veh_coche->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$vta_presupuesto_veh_coche->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $vta_presupuesto_veh_coche->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/vta_presupuesto_veh_coche/vta_presupuesto_veh_coche_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_vta_presupuesto_veh_coche' width='90%'>
        
				<tr>
				  <td  id="label_vta_presupuesto_veh_coche_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_presupuesto_veh_coche_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_presupuesto_veh_coche_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_presupuesto_veh_coche_txt_descripcion' value='<?php Gral::_echoTxt($vta_presupuesto_veh_coche->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_vta_presupuesto_veh_coche_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_presupuesto_veh_coche_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_presupuesto_veh_coche_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_presupuesto_veh_coche_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_presupuesto_veh_coche_cmb_vta_presupuesto_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_presupuesto_id' ?>" >
				  
                                        <?php Lang::_lang('VtaPresupuesto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_presupuesto_veh_coche_cmb_vta_presupuesto_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_presupuesto_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_presupuesto_veh_coche_cmb_vta_presupuesto_id', Gral::getCmbFiltro(VtaPresupuesto::getVtaPresupuestosCmb(), '...'), $vta_presupuesto_veh_coche->getVtaPresupuestoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_VEH_COCHE_ALTA_CMB_EDIT_VTA_PRESUPUESTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_presupuesto_veh_coche_cmb_vta_presupuesto_id" clase_id="vta_presupuesto" prefijo='vta_presupuesto_veh_coche_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_presupuesto_id" <?php echo ($vta_presupuesto_veh_coche->getVtaPresupuestoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_presupuesto_veh_coche_cmb_vta_presupuesto_id" clase_id="vta_presupuesto" prefijo='vta_presupuesto_veh_coche_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_presupuesto_veh_coche_cmb_vta_presupuesto_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_presupuesto_veh_coche_alta_vta_presupuesto_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_presupuesto_veh_coche_alta_vta_presupuesto_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_presupuesto_veh_coche_alta_vta_presupuesto_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_presupuesto_veh_coche_alta_vta_presupuesto_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_presupuesto_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_presupuesto_veh_coche_cmb_veh_coche_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_veh_coche_id' ?>" >
				  
                                        <?php Lang::_lang('VehCoche', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_presupuesto_veh_coche_cmb_veh_coche_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('veh_coche_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_presupuesto_veh_coche_cmb_veh_coche_id', Gral::getCmbFiltro(VehCoche::getVehCochesCmb(), '...'), $vta_presupuesto_veh_coche->getVehCocheId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_VEH_COCHE_ALTA_CMB_EDIT_VEH_COCHE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_presupuesto_veh_coche_cmb_veh_coche_id" clase_id="veh_coche" prefijo='vta_presupuesto_veh_coche_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_veh_coche_id" <?php echo ($vta_presupuesto_veh_coche->getVehCocheId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_presupuesto_veh_coche_cmb_veh_coche_id" clase_id="veh_coche" prefijo='vta_presupuesto_veh_coche_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_presupuesto_veh_coche_cmb_veh_coche_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_presupuesto_veh_coche_alta_veh_coche_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_presupuesto_veh_coche_alta_veh_coche_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_presupuesto_veh_coche_alta_veh_coche_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_presupuesto_veh_coche_alta_veh_coche_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('veh_coche_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_presupuesto_veh_coche_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_presupuesto_veh_coche_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_presupuesto_veh_coche_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_presupuesto_veh_coche_txt_codigo' value='<?php Gral::_echoTxt($vta_presupuesto_veh_coche->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_presupuesto_veh_coche_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_presupuesto_veh_coche_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_presupuesto_veh_coche_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_presupuesto_veh_coche_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_presupuesto_veh_coche_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_presupuesto_veh_coche_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='vta_presupuesto_veh_coche_txa_observacion' rows='10' cols='50' id='vta_presupuesto_veh_coche_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_presupuesto_veh_coche->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_vta_presupuesto_veh_coche_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_presupuesto_veh_coche_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_presupuesto_veh_coche_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_presupuesto_veh_coche_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_presupuesto_veh_coche->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_vta_presupuesto_veh_coche_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='vta_presupuesto_veh_coche'/>
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

