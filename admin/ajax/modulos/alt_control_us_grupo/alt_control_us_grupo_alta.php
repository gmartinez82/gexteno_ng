<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('ALT_CONTROL_US_GRUPO_ALTA')){
    echo "No tiene asignada la credencial ALT_CONTROL_US_GRUPO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'alt_control_us_grupo';
$db_nombre_pagina = 'alt_control_us_grupo_alta';

$alt_control_us_grupo = new AltControlUsGrupo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$alt_control_us_grupo = new AltControlUsGrupo();
	if(trim($hdn_id) != '') $alt_control_us_grupo->setId($hdn_id, false);
	$alt_control_us_grupo->setAltControlId(Gral::getVars(1, "alt_control_us_grupo_cmb_alt_control_id", null));
	$alt_control_us_grupo->setUsGrupoId(Gral::getVars(1, "alt_control_us_grupo_cmb_us_grupo_id", null));
	$alt_control_us_grupo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "alt_control_us_grupo_txt_creado")));
	$alt_control_us_grupo->setCreadoPor(Gral::getVars(1, "alt_control_us_grupo__creado_por", 0));
	switch($accion){
		case 'guardar':
			$error = $alt_control_us_grupo->control();
			if(!$error->getExisteError()){
				$alt_control_us_grupo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: alt_control_us_grupo_alta.php?cs=1&id='.$alt_control_us_grupo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $alt_control_us_grupo->control();
			if(!$error->getExisteError()){
				$alt_control_us_grupo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: alt_control_us_grupo_alta.php?cs=1');
				$alt_control_us_grupo = new AltControlUsGrupo();
			}
		break;
	}
	Gral::setSes('AltControlUsGrupo_ULTIMO_INSERTADO', $alt_control_us_grupo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_alt_control_us_grupo_id = Gral::getVars(2, $prefijo.'cmb_alt_control_us_grupo_id', 0);
	if($cmb_alt_control_us_grupo_id != 0){
		$alt_control_us_grupo = AltControlUsGrupo::getOxId($cmb_alt_control_us_grupo_id);
	}else{
	
	$alt_control_us_grupo->setAltControlId(Gral::getVars(2, "alt_control_id", 'null'));
	$alt_control_us_grupo->setUsGrupoId(Gral::getVars(2, "us_grupo_id", 'null'));
	$alt_control_us_grupo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$alt_control_us_grupo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $alt_control_us_grupo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/alt_control_us_grupo/alt_control_us_grupo_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_alt_control_us_grupo' width='90%'>
        
				<tr>
				  <td  id="label_alt_control_us_grupo_cmb_alt_control_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_alt_control_id' ?>" >
				  
                                        <?php Lang::_lang('Control', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_alt_control_us_grupo_cmb_alt_control_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('alt_control_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'alt_control_us_grupo_cmb_alt_control_id', Gral::getCmbFiltro(AltControl::getAltControlsCmb(), '...'), $alt_control_us_grupo->getAltControlId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('ALT_CONTROL_US_GRUPO_ALTA_CMB_EDIT_ALT_CONTROL')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="alt_control_us_grupo_cmb_alt_control_id" clase_id="alt_control" prefijo='alt_control_us_grupo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_alt_control_id" <?php echo ($alt_control_us_grupo->getAltControlId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="alt_control_us_grupo_cmb_alt_control_id" clase_id="alt_control" prefijo='alt_control_us_grupo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_alt_control_us_grupo_cmb_alt_control_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_alt_control_us_grupo_alta_alt_control_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_alt_control_us_grupo_alta_alt_control_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_alt_control_us_grupo_alta_alt_control_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_alt_control_us_grupo_alta_alt_control_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('alt_control_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_alt_control_us_grupo_cmb_us_grupo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_us_grupo_id' ?>" >
				  
                                        <?php Lang::_lang('Grupo de Usuarios', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_alt_control_us_grupo_cmb_us_grupo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('us_grupo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'alt_control_us_grupo_cmb_us_grupo_id', Gral::getCmbFiltro(UsGrupo::getUsGruposCmb(), '...'), $alt_control_us_grupo->getUsGrupoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('ALT_CONTROL_US_GRUPO_ALTA_CMB_EDIT_US_GRUPO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="alt_control_us_grupo_cmb_us_grupo_id" clase_id="us_grupo" prefijo='alt_control_us_grupo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_us_grupo_id" <?php echo ($alt_control_us_grupo->getUsGrupoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="alt_control_us_grupo_cmb_us_grupo_id" clase_id="us_grupo" prefijo='alt_control_us_grupo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_alt_control_us_grupo_cmb_us_grupo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_alt_control_us_grupo_alta_us_grupo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_alt_control_us_grupo_alta_us_grupo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_alt_control_us_grupo_alta_us_grupo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_alt_control_us_grupo_alta_us_grupo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('us_grupo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($alt_control_us_grupo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_alt_control_us_grupo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='alt_control_us_grupo'/>
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

