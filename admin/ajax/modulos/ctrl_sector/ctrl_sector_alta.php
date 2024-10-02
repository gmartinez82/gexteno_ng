<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('CTRL_SECTOR_ALTA')){
    echo "No tiene asignada la credencial CTRL_SECTOR_ALTA. ";
    return false;
}

$db_nombre_objeto = 'ctrl_sector';
$db_nombre_pagina = 'ctrl_sector_alta';

$ctrl_sector = new CtrlSector();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$ctrl_sector = new CtrlSector();
	if(trim($hdn_id) != '') $ctrl_sector->setId($hdn_id, false);
	$ctrl_sector->setGralSucursalId(Gral::getVars(1, "ctrl_sector_cmb_gral_sucursal_id", null));
	$ctrl_sector->setDescripcion(Gral::getVars(1, "ctrl_sector_txt_descripcion"));
	$ctrl_sector->setCodigo(Gral::getVars(1, "ctrl_sector_txt_codigo"));
	$ctrl_sector->setObservacion(Gral::getVars(1, "ctrl_sector_txa_observacion"));
	$ctrl_sector->setOrden(Gral::getVars(1, "ctrl_sector_txt_orden", 0));
	$ctrl_sector->setEstado(Gral::getVars(1, "ctrl_sector_cmb_estado", 0));
	$ctrl_sector->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ctrl_sector_txt_creado")));
	$ctrl_sector->setCreadoPor(Gral::getVars(1, "ctrl_sector__creado_por", 0));
	$ctrl_sector->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "ctrl_sector_txt_modificado")));
	$ctrl_sector->setModificadoPor(Gral::getVars(1, "ctrl_sector__modificado_por", 0));

	$ctrl_sector_estado = new CtrlSector();
	if(trim($hdn_id) != ''){
		$ctrl_sector_estado->setId($hdn_id);
		$ctrl_sector->setEstado($ctrl_sector_estado->getEstado());
				
	}else{
		$ctrl_sector->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $ctrl_sector->control();
			if(!$error->getExisteError()){
				$ctrl_sector->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: ctrl_sector_alta.php?cs=1&id='.$ctrl_sector->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ctrl_sector->control();
			if(!$error->getExisteError()){
				$ctrl_sector->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: ctrl_sector_alta.php?cs=1');
				$ctrl_sector = new CtrlSector();
			}
		break;
	}
	Gral::setSes('CtrlSector_ULTIMO_INSERTADO', $ctrl_sector->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_ctrl_sector_id = Gral::getVars(2, $prefijo.'cmb_ctrl_sector_id', 0);
	if($cmb_ctrl_sector_id != 0){
		$ctrl_sector = CtrlSector::getOxId($cmb_ctrl_sector_id);
	}else{
	
	$ctrl_sector->setGralSucursalId(Gral::getVars(2, "gral_sucursal_id", 'null'));
	$ctrl_sector->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$ctrl_sector->setCodigo(Gral::getVars(2, "codigo", ''));
	$ctrl_sector->setObservacion(Gral::getVars(2, "observacion", ''));
	$ctrl_sector->setOrden(Gral::getVars(2, "orden", 0));
	$ctrl_sector->setEstado(Gral::getVars(2, "estado", 0));
	$ctrl_sector->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ctrl_sector->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ctrl_sector->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ctrl_sector->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $ctrl_sector->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ctrl_sector/ctrl_sector_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ctrl_sector' width='90%'>
        
				<tr>
				  <td  id="label_ctrl_sector_cmb_gral_sucursal_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_sucursal_id' ?>" >
				  
                                        <?php Lang::_lang('GralSucursal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ctrl_sector_cmb_gral_sucursal_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_sucursal_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ctrl_sector_cmb_gral_sucursal_id', Gral::getCmbFiltro(GralSucursal::getGralSucursalsCmb(), '...'), $ctrl_sector->getGralSucursalId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('CTRL_SECTOR_ALTA_CMB_EDIT_GRAL_SUCURSAL')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ctrl_sector_cmb_gral_sucursal_id" clase_id="gral_sucursal" prefijo='ctrl_sector_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_sucursal_id" <?php echo ($ctrl_sector->getGralSucursalId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ctrl_sector_cmb_gral_sucursal_id" clase_id="gral_sucursal" prefijo='ctrl_sector_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ctrl_sector_cmb_gral_sucursal_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ctrl_sector_alta_gral_sucursal_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ctrl_sector_alta_gral_sucursal_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ctrl_sector_alta_gral_sucursal_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ctrl_sector_alta_gral_sucursal_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_sucursal_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ctrl_sector_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ctrl_sector_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ctrl_sector_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='ctrl_sector_txt_descripcion' value='<?php Gral::_echoTxt($ctrl_sector->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_ctrl_sector_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ctrl_sector_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ctrl_sector_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ctrl_sector_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ctrl_sector_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ctrl_sector_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='ctrl_sector_txa_observacion' rows='10' cols='50' id='ctrl_sector_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($ctrl_sector->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_ctrl_sector_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ctrl_sector_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ctrl_sector_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ctrl_sector_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ctrl_sector->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ctrl_sector_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ctrl_sector'/>
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

