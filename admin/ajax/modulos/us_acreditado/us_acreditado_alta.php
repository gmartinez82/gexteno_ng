<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('US_ACREDITADO_ALTA')){
    echo "No tiene asignada la credencial US_ACREDITADO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'us_acreditado';
$db_nombre_pagina = 'us_acreditado_alta';

$us_acreditado = new UsAcreditado();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$us_acreditado = new UsAcreditado();
	if(trim($hdn_id) != '') $us_acreditado->setId($hdn_id, false);
	$us_acreditado->setUsCredencialId(Gral::getVars(1, "us_acreditado_cmb_us_credencial_id", null));
	$us_acreditado->setUsUsuarioId(Gral::getVars(1, "us_acreditado_cmb_us_usuario_id", null));
	$us_acreditado->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "us_acreditado_txt_creado")));
	$us_acreditado->setCreadoPor(Gral::getVars(1, "us_acreditado__creado_por", 0));
	switch($accion){
		case 'guardar':
			$error = $us_acreditado->control();
			if(!$error->getExisteError()){
				$us_acreditado->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: us_acreditado_alta.php?cs=1&id='.$us_acreditado->getId());
			}
		break;
		case 'guardarnvo':
			$error = $us_acreditado->control();
			if(!$error->getExisteError()){
				$us_acreditado->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: us_acreditado_alta.php?cs=1');
				$us_acreditado = new UsAcreditado();
			}
		break;
	}
	Gral::setSes('UsAcreditado_ULTIMO_INSERTADO', $us_acreditado->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_us_acreditado_id = Gral::getVars(2, $prefijo.'cmb_us_acreditado_id', 0);
	if($cmb_us_acreditado_id != 0){
		$us_acreditado = UsAcreditado::getOxId($cmb_us_acreditado_id);
	}else{
	
	$us_acreditado->setUsCredencialId(Gral::getVars(2, "us_credencial_id", 'null'));
	$us_acreditado->setUsUsuarioId(Gral::getVars(2, "us_usuario_id", 'null'));
	$us_acreditado->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$us_acreditado->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $us_acreditado->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/us_acreditado/us_acreditado_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_us_acreditado' width='90%'>
        
				<tr>
				  <td  id="label_us_acreditado_cmb_us_credencial_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_us_credencial_id' ?>" >
				  
                                        <?php Lang::_lang('Credencial', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_acreditado_cmb_us_credencial_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('us_credencial_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'us_acreditado_cmb_us_credencial_id', Gral::getCmbFiltro(UsCredencial::getUsCredencialsCmb(), '...'), $us_acreditado->getUsCredencialId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('US_ACREDITADO_ALTA_CMB_EDIT_US_CREDENCIAL')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="us_acreditado_cmb_us_credencial_id" clase_id="us_credencial" prefijo='us_acreditado_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_us_credencial_id" <?php echo ($us_acreditado->getUsCredencialId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="us_acreditado_cmb_us_credencial_id" clase_id="us_credencial" prefijo='us_acreditado_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_us_acreditado_cmb_us_credencial_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_us_acreditado_alta_us_credencial_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_acreditado_alta_us_credencial_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_acreditado_alta_us_credencial_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_acreditado_alta_us_credencial_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('us_credencial_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_acreditado_cmb_us_usuario_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_us_usuario_id' ?>" >
				  
                                        <?php Lang::_lang('Usuario', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_acreditado_cmb_us_usuario_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('us_usuario_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'us_acreditado_cmb_us_usuario_id', Gral::getCmbFiltro(UsUsuario::getUsUsuariosCmb(), '...'), $us_acreditado->getUsUsuarioId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('US_ACREDITADO_ALTA_CMB_EDIT_US_USUARIO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="us_acreditado_cmb_us_usuario_id" clase_id="us_usuario" prefijo='us_acreditado_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_us_usuario_id" <?php echo ($us_acreditado->getUsUsuarioId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="us_acreditado_cmb_us_usuario_id" clase_id="us_usuario" prefijo='us_acreditado_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_us_acreditado_cmb_us_usuario_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_us_acreditado_alta_us_usuario_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_acreditado_alta_us_usuario_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_acreditado_alta_us_usuario_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_acreditado_alta_us_usuario_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('us_usuario_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($us_acreditado->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_us_acreditado_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='us_acreditado'/>
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

