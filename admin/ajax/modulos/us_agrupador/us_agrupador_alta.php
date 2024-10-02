<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('US_AGRUPADOR_ALTA')){
    echo "No tiene asignada la credencial US_AGRUPADOR_ALTA. ";
    return false;
}

$db_nombre_objeto = 'us_agrupador';
$db_nombre_pagina = 'us_agrupador_alta';

$us_agrupador = new UsAgrupador();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$us_agrupador = new UsAgrupador();
	if(trim($hdn_id) != '') $us_agrupador->setId($hdn_id, false);
	$us_agrupador->setUsCredencialId(Gral::getVars(1, "us_agrupador_cmb_us_credencial_id", null));
	$us_agrupador->setUsGrupoId(Gral::getVars(1, "us_agrupador_cmb_us_grupo_id", null));
	$us_agrupador->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "us_agrupador_txt_creado")));
	$us_agrupador->setCreadoPor(Gral::getVars(1, "us_agrupador__creado_por", 0));
	switch($accion){
		case 'guardar':
			$error = $us_agrupador->control();
			if(!$error->getExisteError()){
				$us_agrupador->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: us_agrupador_alta.php?cs=1&id='.$us_agrupador->getId());
			}
		break;
		case 'guardarnvo':
			$error = $us_agrupador->control();
			if(!$error->getExisteError()){
				$us_agrupador->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: us_agrupador_alta.php?cs=1');
				$us_agrupador = new UsAgrupador();
			}
		break;
	}
	Gral::setSes('UsAgrupador_ULTIMO_INSERTADO', $us_agrupador->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_us_agrupador_id = Gral::getVars(2, $prefijo.'cmb_us_agrupador_id', 0);
	if($cmb_us_agrupador_id != 0){
		$us_agrupador = UsAgrupador::getOxId($cmb_us_agrupador_id);
	}else{
	
	$us_agrupador->setUsCredencialId(Gral::getVars(2, "us_credencial_id", 'null'));
	$us_agrupador->setUsGrupoId(Gral::getVars(2, "us_grupo_id", 'null'));
	$us_agrupador->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$us_agrupador->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $us_agrupador->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/us_agrupador/us_agrupador_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_us_agrupador' width='90%'>
        
				<tr>
				  <td  id="label_us_agrupador_cmb_us_credencial_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_us_credencial_id' ?>" >
				  
                                        <?php Lang::_lang('Credencial', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_agrupador_cmb_us_credencial_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('us_credencial_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'us_agrupador_cmb_us_credencial_id', Gral::getCmbFiltro(UsCredencial::getUsCredencialsCmb(), '...'), $us_agrupador->getUsCredencialId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('US_AGRUPADOR_ALTA_CMB_EDIT_US_CREDENCIAL')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="us_agrupador_cmb_us_credencial_id" clase_id="us_credencial" prefijo='us_agrupador_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_us_credencial_id" <?php echo ($us_agrupador->getUsCredencialId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="us_agrupador_cmb_us_credencial_id" clase_id="us_credencial" prefijo='us_agrupador_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_us_agrupador_cmb_us_credencial_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_us_agrupador_alta_us_credencial_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_agrupador_alta_us_credencial_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_agrupador_alta_us_credencial_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_agrupador_alta_us_credencial_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('us_credencial_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_agrupador_cmb_us_grupo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_us_grupo_id' ?>" >
				  
                                        <?php Lang::_lang('Grupo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_agrupador_cmb_us_grupo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('us_grupo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'us_agrupador_cmb_us_grupo_id', Gral::getCmbFiltro(UsGrupo::getUsGruposCmb(), '...'), $us_agrupador->getUsGrupoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('US_AGRUPADOR_ALTA_CMB_EDIT_US_GRUPO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="us_agrupador_cmb_us_grupo_id" clase_id="us_grupo" prefijo='us_agrupador_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_us_grupo_id" <?php echo ($us_agrupador->getUsGrupoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="us_agrupador_cmb_us_grupo_id" clase_id="us_grupo" prefijo='us_agrupador_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_us_agrupador_cmb_us_grupo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_us_agrupador_alta_us_grupo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_agrupador_alta_us_grupo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_agrupador_alta_us_grupo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_agrupador_alta_us_grupo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('us_grupo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($us_agrupador->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_us_agrupador_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='us_agrupador'/>
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

