<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('US_AGRUPADO_ALTA')){
    echo "No tiene asignada la credencial US_AGRUPADO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'us_agrupado';
$db_nombre_pagina = 'us_agrupado_alta';

$us_agrupado = new UsAgrupado();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$us_agrupado = new UsAgrupado();
	if(trim($hdn_id) != '') $us_agrupado->setId($hdn_id, false);
	$us_agrupado->setUsGrupoId(Gral::getVars(1, "us_agrupado_cmb_us_grupo_id", null));
	$us_agrupado->setUsUsuarioId(Gral::getVars(1, "us_agrupado_cmb_us_usuario_id", null));
	$us_agrupado->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "us_agrupado_txt_creado")));
	$us_agrupado->setCreadoPor(Gral::getVars(1, "us_agrupado__creado_por", 0));
	switch($accion){
		case 'guardar':
			$error = $us_agrupado->control();
			if(!$error->getExisteError()){
				$us_agrupado->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: us_agrupado_alta.php?cs=1&id='.$us_agrupado->getId());
			}
		break;
		case 'guardarnvo':
			$error = $us_agrupado->control();
			if(!$error->getExisteError()){
				$us_agrupado->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: us_agrupado_alta.php?cs=1');
				$us_agrupado = new UsAgrupado();
			}
		break;
	}
	Gral::setSes('UsAgrupado_ULTIMO_INSERTADO', $us_agrupado->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_us_agrupado_id = Gral::getVars(2, $prefijo.'cmb_us_agrupado_id', 0);
	if($cmb_us_agrupado_id != 0){
		$us_agrupado = UsAgrupado::getOxId($cmb_us_agrupado_id);
	}else{
	
	$us_agrupado->setUsGrupoId(Gral::getVars(2, "us_grupo_id", 'null'));
	$us_agrupado->setUsUsuarioId(Gral::getVars(2, "us_usuario_id", 'null'));
	$us_agrupado->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$us_agrupado->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $us_agrupado->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/us_agrupado/us_agrupado_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_us_agrupado' width='90%'>
        
				<tr>
				  <td  id="label_us_agrupado_cmb_us_grupo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_us_grupo_id' ?>" >
				  
                                        <?php Lang::_lang('Grupo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_agrupado_cmb_us_grupo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('us_grupo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'us_agrupado_cmb_us_grupo_id', Gral::getCmbFiltro(UsGrupo::getUsGruposCmb(), '...'), $us_agrupado->getUsGrupoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('US_AGRUPADO_ALTA_CMB_EDIT_US_GRUPO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="us_agrupado_cmb_us_grupo_id" clase_id="us_grupo" prefijo='us_agrupado_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_us_grupo_id" <?php echo ($us_agrupado->getUsGrupoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="us_agrupado_cmb_us_grupo_id" clase_id="us_grupo" prefijo='us_agrupado_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_us_agrupado_cmb_us_grupo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_us_agrupado_alta_us_grupo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_agrupado_alta_us_grupo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_agrupado_alta_us_grupo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_agrupado_alta_us_grupo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('us_grupo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_agrupado_cmb_us_usuario_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_us_usuario_id' ?>" >
				  
                                        <?php Lang::_lang('Usuario', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_agrupado_cmb_us_usuario_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('us_usuario_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'us_agrupado_cmb_us_usuario_id', Gral::getCmbFiltro(UsUsuario::getUsUsuariosCmb(), '...'), $us_agrupado->getUsUsuarioId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('US_AGRUPADO_ALTA_CMB_EDIT_US_USUARIO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="us_agrupado_cmb_us_usuario_id" clase_id="us_usuario" prefijo='us_agrupado_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_us_usuario_id" <?php echo ($us_agrupado->getUsUsuarioId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="us_agrupado_cmb_us_usuario_id" clase_id="us_usuario" prefijo='us_agrupado_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_us_agrupado_cmb_us_usuario_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_us_agrupado_alta_us_usuario_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_agrupado_alta_us_usuario_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_agrupado_alta_us_usuario_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_agrupado_alta_us_usuario_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('us_usuario_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($us_agrupado->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_us_agrupado_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='us_agrupado'/>
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

