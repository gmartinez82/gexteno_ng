<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('CTRL_EQUIPO_CTRL_SECTOR_ALTA')){
    echo "No tiene asignada la credencial CTRL_EQUIPO_CTRL_SECTOR_ALTA. ";
    return false;
}

$db_nombre_objeto = 'ctrl_equipo_ctrl_sector';
$db_nombre_pagina = 'ctrl_equipo_ctrl_sector_alta';

$ctrl_equipo_ctrl_sector = new CtrlEquipoCtrlSector();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$ctrl_equipo_ctrl_sector = new CtrlEquipoCtrlSector();
	if(trim($hdn_id) != '') $ctrl_equipo_ctrl_sector->setId($hdn_id, false);
	$ctrl_equipo_ctrl_sector->setCtrlEquipoId(Gral::getVars(1, "ctrl_equipo_ctrl_sector_cmb_ctrl_equipo_id", null));
	$ctrl_equipo_ctrl_sector->setCtrlSectorId(Gral::getVars(1, "ctrl_equipo_ctrl_sector_cmb_ctrl_sector_id", null));
	$ctrl_equipo_ctrl_sector->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ctrl_equipo_ctrl_sector_txt_creado")));
	$ctrl_equipo_ctrl_sector->setCreadoPor(Gral::getVars(1, "ctrl_equipo_ctrl_sector__creado_por", 0));
	switch($accion){
		case 'guardar':
			$error = $ctrl_equipo_ctrl_sector->control();
			if(!$error->getExisteError()){
				$ctrl_equipo_ctrl_sector->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: ctrl_equipo_ctrl_sector_alta.php?cs=1&id='.$ctrl_equipo_ctrl_sector->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ctrl_equipo_ctrl_sector->control();
			if(!$error->getExisteError()){
				$ctrl_equipo_ctrl_sector->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: ctrl_equipo_ctrl_sector_alta.php?cs=1');
				$ctrl_equipo_ctrl_sector = new CtrlEquipoCtrlSector();
			}
		break;
	}
	Gral::setSes('CtrlEquipoCtrlSector_ULTIMO_INSERTADO', $ctrl_equipo_ctrl_sector->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_ctrl_equipo_ctrl_sector_id = Gral::getVars(2, $prefijo.'cmb_ctrl_equipo_ctrl_sector_id', 0);
	if($cmb_ctrl_equipo_ctrl_sector_id != 0){
		$ctrl_equipo_ctrl_sector = CtrlEquipoCtrlSector::getOxId($cmb_ctrl_equipo_ctrl_sector_id);
	}else{
	
	$ctrl_equipo_ctrl_sector->setCtrlEquipoId(Gral::getVars(2, "ctrl_equipo_id", 'null'));
	$ctrl_equipo_ctrl_sector->setCtrlSectorId(Gral::getVars(2, "ctrl_sector_id", 'null'));
	$ctrl_equipo_ctrl_sector->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ctrl_equipo_ctrl_sector->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $ctrl_equipo_ctrl_sector->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ctrl_equipo_ctrl_sector/ctrl_equipo_ctrl_sector_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ctrl_equipo_ctrl_sector' width='90%'>
        
				<tr>
				  <td  id="label_ctrl_equipo_ctrl_sector_cmb_ctrl_equipo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ctrl_equipo_id' ?>" >
				  
                                        <?php Lang::_lang('CtrlEquipo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ctrl_equipo_ctrl_sector_cmb_ctrl_equipo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ctrl_equipo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ctrl_equipo_ctrl_sector_cmb_ctrl_equipo_id', Gral::getCmbFiltro(CtrlEquipo::getCtrlEquiposCmb(), '...'), $ctrl_equipo_ctrl_sector->getCtrlEquipoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('CTRL_EQUIPO_CTRL_SECTOR_ALTA_CMB_EDIT_CTRL_EQUIPO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ctrl_equipo_ctrl_sector_cmb_ctrl_equipo_id" clase_id="ctrl_equipo" prefijo='ctrl_equipo_ctrl_sector_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ctrl_equipo_id" <?php echo ($ctrl_equipo_ctrl_sector->getCtrlEquipoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ctrl_equipo_ctrl_sector_cmb_ctrl_equipo_id" clase_id="ctrl_equipo" prefijo='ctrl_equipo_ctrl_sector_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ctrl_equipo_ctrl_sector_cmb_ctrl_equipo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ctrl_equipo_ctrl_sector_alta_ctrl_equipo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ctrl_equipo_ctrl_sector_alta_ctrl_equipo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ctrl_equipo_ctrl_sector_alta_ctrl_equipo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ctrl_equipo_ctrl_sector_alta_ctrl_equipo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ctrl_equipo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ctrl_equipo_ctrl_sector_cmb_ctrl_sector_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ctrl_sector_id' ?>" >
				  
                                        <?php Lang::_lang('CtrlSector', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ctrl_equipo_ctrl_sector_cmb_ctrl_sector_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ctrl_sector_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ctrl_equipo_ctrl_sector_cmb_ctrl_sector_id', Gral::getCmbFiltro(CtrlSector::getCtrlSectorsCmb(), '...'), $ctrl_equipo_ctrl_sector->getCtrlSectorId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('CTRL_EQUIPO_CTRL_SECTOR_ALTA_CMB_EDIT_CTRL_SECTOR')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ctrl_equipo_ctrl_sector_cmb_ctrl_sector_id" clase_id="ctrl_sector" prefijo='ctrl_equipo_ctrl_sector_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ctrl_sector_id" <?php echo ($ctrl_equipo_ctrl_sector->getCtrlSectorId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ctrl_equipo_ctrl_sector_cmb_ctrl_sector_id" clase_id="ctrl_sector" prefijo='ctrl_equipo_ctrl_sector_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ctrl_equipo_ctrl_sector_cmb_ctrl_sector_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ctrl_equipo_ctrl_sector_alta_ctrl_sector_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ctrl_equipo_ctrl_sector_alta_ctrl_sector_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ctrl_equipo_ctrl_sector_alta_ctrl_sector_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ctrl_equipo_ctrl_sector_alta_ctrl_sector_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ctrl_sector_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ctrl_equipo_ctrl_sector->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ctrl_equipo_ctrl_sector_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ctrl_equipo_ctrl_sector'/>
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

