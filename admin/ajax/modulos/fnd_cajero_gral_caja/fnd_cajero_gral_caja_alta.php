<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('FND_CAJERO_GRAL_CAJA_ALTA')){
    echo "No tiene asignada la credencial FND_CAJERO_GRAL_CAJA_ALTA. ";
    return false;
}

$db_nombre_objeto = 'fnd_cajero_gral_caja';
$db_nombre_pagina = 'fnd_cajero_gral_caja_alta';

$fnd_cajero_gral_caja = new FndCajeroGralCaja();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$fnd_cajero_gral_caja = new FndCajeroGralCaja();
	if(trim($hdn_id) != '') $fnd_cajero_gral_caja->setId($hdn_id, false);
	$fnd_cajero_gral_caja->setFndCajeroId(Gral::getVars(1, "fnd_cajero_gral_caja_cmb_fnd_cajero_id", null));
	$fnd_cajero_gral_caja->setGralCajaId(Gral::getVars(1, "fnd_cajero_gral_caja_cmb_gral_caja_id", null));
	$fnd_cajero_gral_caja->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "fnd_cajero_gral_caja_txt_creado")));
	$fnd_cajero_gral_caja->setCreadoPor(Gral::getVars(1, "fnd_cajero_gral_caja__creado_por", 0));
	switch($accion){
		case 'guardar':
			$error = $fnd_cajero_gral_caja->control();
			if(!$error->getExisteError()){
				$fnd_cajero_gral_caja->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: fnd_cajero_gral_caja_alta.php?cs=1&id='.$fnd_cajero_gral_caja->getId());
			}
		break;
		case 'guardarnvo':
			$error = $fnd_cajero_gral_caja->control();
			if(!$error->getExisteError()){
				$fnd_cajero_gral_caja->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: fnd_cajero_gral_caja_alta.php?cs=1');
				$fnd_cajero_gral_caja = new FndCajeroGralCaja();
			}
		break;
	}
	Gral::setSes('FndCajeroGralCaja_ULTIMO_INSERTADO', $fnd_cajero_gral_caja->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_fnd_cajero_gral_caja_id = Gral::getVars(2, $prefijo.'cmb_fnd_cajero_gral_caja_id', 0);
	if($cmb_fnd_cajero_gral_caja_id != 0){
		$fnd_cajero_gral_caja = FndCajeroGralCaja::getOxId($cmb_fnd_cajero_gral_caja_id);
	}else{
	
	$fnd_cajero_gral_caja->setFndCajeroId(Gral::getVars(2, "fnd_cajero_id", 'null'));
	$fnd_cajero_gral_caja->setGralCajaId(Gral::getVars(2, "gral_caja_id", 'null'));
	$fnd_cajero_gral_caja->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$fnd_cajero_gral_caja->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $fnd_cajero_gral_caja->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/fnd_cajero_gral_caja/fnd_cajero_gral_caja_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_fnd_cajero_gral_caja' width='90%'>
        
				<tr>
				  <td  id="label_fnd_cajero_gral_caja_cmb_fnd_cajero_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fnd_cajero_id' ?>" >
				  
                                        <?php Lang::_lang('FndCajero', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_cajero_gral_caja_cmb_fnd_cajero_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fnd_cajero_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_cajero_gral_caja_cmb_fnd_cajero_id', Gral::getCmbFiltro(FndCajero::getFndCajerosCmb(), '...'), $fnd_cajero_gral_caja->getFndCajeroId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('FND_CAJERO_GRAL_CAJA_ALTA_CMB_EDIT_FND_CAJERO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="fnd_cajero_gral_caja_cmb_fnd_cajero_id" clase_id="fnd_cajero" prefijo='fnd_cajero_gral_caja_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_fnd_cajero_id" <?php echo ($fnd_cajero_gral_caja->getFndCajeroId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="fnd_cajero_gral_caja_cmb_fnd_cajero_id" clase_id="fnd_cajero" prefijo='fnd_cajero_gral_caja_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_fnd_cajero_gral_caja_cmb_fnd_cajero_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_fnd_cajero_gral_caja_alta_fnd_cajero_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_cajero_gral_caja_alta_fnd_cajero_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_cajero_gral_caja_alta_fnd_cajero_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_cajero_gral_caja_alta_fnd_cajero_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fnd_cajero_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_cajero_gral_caja_cmb_gral_caja_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_caja_id' ?>" >
				  
                                        <?php Lang::_lang('GralCaja', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_cajero_gral_caja_cmb_gral_caja_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_caja_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_cajero_gral_caja_cmb_gral_caja_id', Gral::getCmbFiltro(GralCaja::getGralCajasCmb(), '...'), $fnd_cajero_gral_caja->getGralCajaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('FND_CAJERO_GRAL_CAJA_ALTA_CMB_EDIT_GRAL_CAJA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="fnd_cajero_gral_caja_cmb_gral_caja_id" clase_id="gral_caja" prefijo='fnd_cajero_gral_caja_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_caja_id" <?php echo ($fnd_cajero_gral_caja->getGralCajaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="fnd_cajero_gral_caja_cmb_gral_caja_id" clase_id="gral_caja" prefijo='fnd_cajero_gral_caja_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_fnd_cajero_gral_caja_cmb_gral_caja_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_fnd_cajero_gral_caja_alta_gral_caja_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_cajero_gral_caja_alta_gral_caja_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_cajero_gral_caja_alta_gral_caja_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_cajero_gral_caja_alta_gral_caja_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_caja_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($fnd_cajero_gral_caja->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_fnd_cajero_gral_caja_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='fnd_cajero_gral_caja'/>
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

