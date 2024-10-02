<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PLN_JORNADA_US_USUARIO_ALTA')){
    echo "No tiene asignada la credencial PLN_JORNADA_US_USUARIO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pln_jornada_us_usuario';
$db_nombre_pagina = 'pln_jornada_us_usuario_alta';

$pln_jornada_us_usuario = new PlnJornadaUsUsuario();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pln_jornada_us_usuario = new PlnJornadaUsUsuario();
	if(trim($hdn_id) != '') $pln_jornada_us_usuario->setId($hdn_id, false);
	$pln_jornada_us_usuario->setPlnJornadaId(Gral::getVars(1, "pln_jornada_us_usuario_cmb_pln_jornada_id", null));
	$pln_jornada_us_usuario->setUsUsuarioId(Gral::getVars(1, "pln_jornada_us_usuario_cmb_us_usuario_id", null));
	$pln_jornada_us_usuario->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pln_jornada_us_usuario_txt_creado")));
	$pln_jornada_us_usuario->setCreadoPor(Gral::getVars(1, "pln_jornada_us_usuario__creado_por", 0));
	switch($accion){
		case 'guardar':
			$error = $pln_jornada_us_usuario->control();
			if(!$error->getExisteError()){
				$pln_jornada_us_usuario->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pln_jornada_us_usuario_alta.php?cs=1&id='.$pln_jornada_us_usuario->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pln_jornada_us_usuario->control();
			if(!$error->getExisteError()){
				$pln_jornada_us_usuario->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pln_jornada_us_usuario_alta.php?cs=1');
				$pln_jornada_us_usuario = new PlnJornadaUsUsuario();
			}
		break;
	}
	Gral::setSes('PlnJornadaUsUsuario_ULTIMO_INSERTADO', $pln_jornada_us_usuario->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pln_jornada_us_usuario_id = Gral::getVars(2, $prefijo.'cmb_pln_jornada_us_usuario_id', 0);
	if($cmb_pln_jornada_us_usuario_id != 0){
		$pln_jornada_us_usuario = PlnJornadaUsUsuario::getOxId($cmb_pln_jornada_us_usuario_id);
	}else{
	
	$pln_jornada_us_usuario->setPlnJornadaId(Gral::getVars(2, "pln_jornada_id", 'null'));
	$pln_jornada_us_usuario->setUsUsuarioId(Gral::getVars(2, "us_usuario_id", 'null'));
	$pln_jornada_us_usuario->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pln_jornada_us_usuario->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pln_jornada_us_usuario->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pln_jornada_us_usuario/pln_jornada_us_usuario_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pln_jornada_us_usuario' width='90%'>
        
				<tr>
				  <td  id="label_pln_jornada_us_usuario_cmb_pln_jornada_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pln_jornada_id' ?>" >
				  
                                        <?php Lang::_lang('PlnJornada', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pln_jornada_us_usuario_cmb_pln_jornada_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pln_jornada_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pln_jornada_us_usuario_cmb_pln_jornada_id', Gral::getCmbFiltro(PlnJornada::getPlnJornadasCmb(), '...'), $pln_jornada_us_usuario->getPlnJornadaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PLN_JORNADA_US_USUARIO_ALTA_CMB_EDIT_PLN_JORNADA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pln_jornada_us_usuario_cmb_pln_jornada_id" clase_id="pln_jornada" prefijo='pln_jornada_us_usuario_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pln_jornada_id" <?php echo ($pln_jornada_us_usuario->getPlnJornadaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pln_jornada_us_usuario_cmb_pln_jornada_id" clase_id="pln_jornada" prefijo='pln_jornada_us_usuario_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pln_jornada_us_usuario_cmb_pln_jornada_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pln_jornada_us_usuario_alta_pln_jornada_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pln_jornada_us_usuario_alta_pln_jornada_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pln_jornada_us_usuario_alta_pln_jornada_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pln_jornada_us_usuario_alta_pln_jornada_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pln_jornada_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pln_jornada_us_usuario_cmb_us_usuario_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_us_usuario_id' ?>" >
				  
                                        <?php Lang::_lang('Usuario', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pln_jornada_us_usuario_cmb_us_usuario_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('us_usuario_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pln_jornada_us_usuario_cmb_us_usuario_id', Gral::getCmbFiltro(UsUsuario::getUsUsuariosCmb(), '...'), $pln_jornada_us_usuario->getUsUsuarioId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PLN_JORNADA_US_USUARIO_ALTA_CMB_EDIT_US_USUARIO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pln_jornada_us_usuario_cmb_us_usuario_id" clase_id="us_usuario" prefijo='pln_jornada_us_usuario_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_us_usuario_id" <?php echo ($pln_jornada_us_usuario->getUsUsuarioId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pln_jornada_us_usuario_cmb_us_usuario_id" clase_id="us_usuario" prefijo='pln_jornada_us_usuario_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pln_jornada_us_usuario_cmb_us_usuario_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pln_jornada_us_usuario_alta_us_usuario_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pln_jornada_us_usuario_alta_us_usuario_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pln_jornada_us_usuario_alta_us_usuario_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pln_jornada_us_usuario_alta_us_usuario_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('us_usuario_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pln_jornada_us_usuario->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pln_jornada_us_usuario_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pln_jornada_us_usuario'/>
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

