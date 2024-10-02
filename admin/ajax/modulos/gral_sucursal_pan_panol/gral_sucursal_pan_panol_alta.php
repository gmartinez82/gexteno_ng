<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('GRAL_SUCURSAL_PAN_PANOL_ALTA')){
    echo "No tiene asignada la credencial GRAL_SUCURSAL_PAN_PANOL_ALTA. ";
    return false;
}

$db_nombre_objeto = 'gral_sucursal_pan_panol';
$db_nombre_pagina = 'gral_sucursal_pan_panol_alta';

$gral_sucursal_pan_panol = new GralSucursalPanPanol();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$gral_sucursal_pan_panol = new GralSucursalPanPanol();
	if(trim($hdn_id) != '') $gral_sucursal_pan_panol->setId($hdn_id, false);
	$gral_sucursal_pan_panol->setDescripcion(Gral::getVars(1, "gral_sucursal_pan_panol_txt_descripcion"));
	$gral_sucursal_pan_panol->setGralSucursalId(Gral::getVars(1, "gral_sucursal_pan_panol_cmb_gral_sucursal_id", null));
	$gral_sucursal_pan_panol->setPanPanolId(Gral::getVars(1, "gral_sucursal_pan_panol_cmb_pan_panol_id", null));
	$gral_sucursal_pan_panol->setCodigo(Gral::getVars(1, "gral_sucursal_pan_panol_txt_codigo"));
	$gral_sucursal_pan_panol->setObservacion(Gral::getVars(1, "gral_sucursal_pan_panol_txa_observacion"));
	$gral_sucursal_pan_panol->setOrden(Gral::getVars(1, "gral_sucursal_pan_panol_txt_orden", 0));
	$gral_sucursal_pan_panol->setEstado(Gral::getVars(1, "gral_sucursal_pan_panol_cmb_estado", 0));
	$gral_sucursal_pan_panol->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_sucursal_pan_panol_txt_creado")));
	$gral_sucursal_pan_panol->setCreadoPor(Gral::getVars(1, "gral_sucursal_pan_panol__creado_por", 0));
	$gral_sucursal_pan_panol->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_sucursal_pan_panol_txt_modificado")));
	$gral_sucursal_pan_panol->setModificadoPor(Gral::getVars(1, "gral_sucursal_pan_panol__modificado_por", 0));

	$gral_sucursal_pan_panol_estado = new GralSucursalPanPanol();
	if(trim($hdn_id) != ''){
		$gral_sucursal_pan_panol_estado->setId($hdn_id);
		$gral_sucursal_pan_panol->setEstado($gral_sucursal_pan_panol_estado->getEstado());
				
	}else{
		$gral_sucursal_pan_panol->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $gral_sucursal_pan_panol->control();
			if(!$error->getExisteError()){
				$gral_sucursal_pan_panol->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: gral_sucursal_pan_panol_alta.php?cs=1&id='.$gral_sucursal_pan_panol->getId());
			}
		break;
		case 'guardarnvo':
			$error = $gral_sucursal_pan_panol->control();
			if(!$error->getExisteError()){
				$gral_sucursal_pan_panol->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: gral_sucursal_pan_panol_alta.php?cs=1');
				$gral_sucursal_pan_panol = new GralSucursalPanPanol();
			}
		break;
	}
	Gral::setSes('GralSucursalPanPanol_ULTIMO_INSERTADO', $gral_sucursal_pan_panol->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_gral_sucursal_pan_panol_id = Gral::getVars(2, $prefijo.'cmb_gral_sucursal_pan_panol_id', 0);
	if($cmb_gral_sucursal_pan_panol_id != 0){
		$gral_sucursal_pan_panol = GralSucursalPanPanol::getOxId($cmb_gral_sucursal_pan_panol_id);
	}else{
	
	$gral_sucursal_pan_panol->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$gral_sucursal_pan_panol->setGralSucursalId(Gral::getVars(2, "gral_sucursal_id", 'null'));
	$gral_sucursal_pan_panol->setPanPanolId(Gral::getVars(2, "pan_panol_id", 'null'));
	$gral_sucursal_pan_panol->setCodigo(Gral::getVars(2, "codigo", ''));
	$gral_sucursal_pan_panol->setObservacion(Gral::getVars(2, "observacion", ''));
	$gral_sucursal_pan_panol->setOrden(Gral::getVars(2, "orden", 0));
	$gral_sucursal_pan_panol->setEstado(Gral::getVars(2, "estado", 0));
	$gral_sucursal_pan_panol->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$gral_sucursal_pan_panol->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$gral_sucursal_pan_panol->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$gral_sucursal_pan_panol->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $gral_sucursal_pan_panol->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/gral_sucursal_pan_panol/gral_sucursal_pan_panol_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_gral_sucursal_pan_panol' width='90%'>
        
				<tr>
				  <td  id="label_gral_sucursal_pan_panol_cmb_gral_sucursal_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_sucursal_id' ?>" >
				  
                                        <?php Lang::_lang('GralSucursal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_sucursal_pan_panol_cmb_gral_sucursal_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_sucursal_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gral_sucursal_pan_panol_cmb_gral_sucursal_id', Gral::getCmbFiltro(GralSucursal::getGralSucursalsCmb(), '...'), $gral_sucursal_pan_panol->getGralSucursalId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_PAN_PANOL_ALTA_CMB_EDIT_GRAL_SUCURSAL')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="gral_sucursal_pan_panol_cmb_gral_sucursal_id" clase_id="gral_sucursal" prefijo='gral_sucursal_pan_panol_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_sucursal_id" <?php echo ($gral_sucursal_pan_panol->getGralSucursalId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="gral_sucursal_pan_panol_cmb_gral_sucursal_id" clase_id="gral_sucursal" prefijo='gral_sucursal_pan_panol_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_gral_sucursal_pan_panol_cmb_gral_sucursal_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_gral_sucursal_pan_panol_alta_gral_sucursal_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_sucursal_pan_panol_alta_gral_sucursal_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_sucursal_pan_panol_alta_gral_sucursal_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_sucursal_pan_panol_alta_gral_sucursal_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_sucursal_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_sucursal_pan_panol_cmb_pan_panol_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pan_panol_id' ?>" >
				  
                                        <?php Lang::_lang('PanPanol', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_sucursal_pan_panol_cmb_pan_panol_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pan_panol_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gral_sucursal_pan_panol_cmb_pan_panol_id', Gral::getCmbFiltro(PanPanol::getPanPanolsCmb(), '...'), $gral_sucursal_pan_panol->getPanPanolId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_PAN_PANOL_ALTA_CMB_EDIT_PAN_PANOL')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="gral_sucursal_pan_panol_cmb_pan_panol_id" clase_id="pan_panol" prefijo='gral_sucursal_pan_panol_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pan_panol_id" <?php echo ($gral_sucursal_pan_panol->getPanPanolId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="gral_sucursal_pan_panol_cmb_pan_panol_id" clase_id="pan_panol" prefijo='gral_sucursal_pan_panol_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_gral_sucursal_pan_panol_cmb_pan_panol_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_gral_sucursal_pan_panol_alta_pan_panol_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_sucursal_pan_panol_alta_pan_panol_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_sucursal_pan_panol_alta_pan_panol_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_sucursal_pan_panol_alta_pan_panol_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pan_panol_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_sucursal_pan_panol_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_sucursal_pan_panol_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='gral_sucursal_pan_panol_txa_observacion' rows='10' cols='50' id='gral_sucursal_pan_panol_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($gral_sucursal_pan_panol->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_gral_sucursal_pan_panol_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_sucursal_pan_panol_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_sucursal_pan_panol_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_sucursal_pan_panol_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($gral_sucursal_pan_panol->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_gral_sucursal_pan_panol_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='gral_sucursal_pan_panol'/>
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

