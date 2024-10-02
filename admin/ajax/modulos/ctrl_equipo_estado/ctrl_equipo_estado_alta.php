<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('CTRL_EQUIPO_ESTADO_ALTA')){
    echo "No tiene asignada la credencial CTRL_EQUIPO_ESTADO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'ctrl_equipo_estado';
$db_nombre_pagina = 'ctrl_equipo_estado_alta';

$ctrl_equipo_estado = new CtrlEquipoEstado();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$ctrl_equipo_estado = new CtrlEquipoEstado();
	if(trim($hdn_id) != '') $ctrl_equipo_estado->setId($hdn_id, false);
	$ctrl_equipo_estado->setDescripcion(Gral::getVars(1, "ctrl_equipo_estado_txt_descripcion"));
	$ctrl_equipo_estado->setCodigo(Gral::getVars(1, "ctrl_equipo_estado_txt_codigo"));
	$ctrl_equipo_estado->setCtrlEquipoId(Gral::getVars(1, "ctrl_equipo_estado_cmb_ctrl_equipo_id", null));
	$ctrl_equipo_estado->setCtrlEquipoTipoEstadoId(Gral::getVars(1, "ctrl_equipo_estado_cmb_ctrl_equipo_tipo_estado_id", null));
	$ctrl_equipo_estado->setInicial(Gral::getVars(1, "ctrl_equipo_estado_cmb_inicial", 0));
	$ctrl_equipo_estado->setActual(Gral::getVars(1, "ctrl_equipo_estado_cmb_actual", 0));
	$ctrl_equipo_estado->setEstado(Gral::getVars(1, "ctrl_equipo_estado_cmb_estado", 0));
	$ctrl_equipo_estado->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ctrl_equipo_estado_txt_creado")));
	$ctrl_equipo_estado->setCreadoPor(Gral::getVars(1, "ctrl_equipo_estado__creado_por", 0));
	$ctrl_equipo_estado->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "ctrl_equipo_estado_txt_modificado")));
	$ctrl_equipo_estado->setModificadoPor(Gral::getVars(1, "ctrl_equipo_estado__modificado_por", 0));

	$ctrl_equipo_estado_estado = new CtrlEquipoEstado();
	if(trim($hdn_id) != ''){
		$ctrl_equipo_estado_estado->setId($hdn_id);
		$ctrl_equipo_estado->setEstado($ctrl_equipo_estado_estado->getEstado());
				
	}else{
		$ctrl_equipo_estado->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $ctrl_equipo_estado->control();
			if(!$error->getExisteError()){
				$ctrl_equipo_estado->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: ctrl_equipo_estado_alta.php?cs=1&id='.$ctrl_equipo_estado->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ctrl_equipo_estado->control();
			if(!$error->getExisteError()){
				$ctrl_equipo_estado->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: ctrl_equipo_estado_alta.php?cs=1');
				$ctrl_equipo_estado = new CtrlEquipoEstado();
			}
		break;
	}
	Gral::setSes('CtrlEquipoEstado_ULTIMO_INSERTADO', $ctrl_equipo_estado->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_ctrl_equipo_estado_id = Gral::getVars(2, $prefijo.'cmb_ctrl_equipo_estado_id', 0);
	if($cmb_ctrl_equipo_estado_id != 0){
		$ctrl_equipo_estado = CtrlEquipoEstado::getOxId($cmb_ctrl_equipo_estado_id);
	}else{
	
	$ctrl_equipo_estado->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$ctrl_equipo_estado->setCodigo(Gral::getVars(2, "codigo", ''));
	$ctrl_equipo_estado->setCtrlEquipoId(Gral::getVars(2, "ctrl_equipo_id", 'null'));
	$ctrl_equipo_estado->setCtrlEquipoTipoEstadoId(Gral::getVars(2, "ctrl_equipo_tipo_estado_id", 'null'));
	$ctrl_equipo_estado->setInicial(Gral::getVars(2, "inicial", 0));
	$ctrl_equipo_estado->setActual(Gral::getVars(2, "actual", 0));
	$ctrl_equipo_estado->setEstado(Gral::getVars(2, "estado", 0));
	$ctrl_equipo_estado->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ctrl_equipo_estado->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ctrl_equipo_estado->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ctrl_equipo_estado->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $ctrl_equipo_estado->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ctrl_equipo_estado/ctrl_equipo_estado_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ctrl_equipo_estado' width='90%'>
        
				<tr>
				  <td  id="label_ctrl_equipo_estado_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ctrl_equipo_estado_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ctrl_equipo_estado_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='ctrl_equipo_estado_txt_descripcion' value='<?php Gral::_echoTxt($ctrl_equipo_estado->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_ctrl_equipo_estado_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ctrl_equipo_estado_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ctrl_equipo_estado_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ctrl_equipo_estado_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ctrl_equipo_estado_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ctrl_equipo_estado_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ctrl_equipo_estado_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='ctrl_equipo_estado_txt_codigo' value='<?php Gral::_echoTxt($ctrl_equipo_estado->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ctrl_equipo_estado_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ctrl_equipo_estado_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ctrl_equipo_estado_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ctrl_equipo_estado_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ctrl_equipo_estado_cmb_ctrl_equipo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ctrl_equipo_id' ?>" >
				  
                                        <?php Lang::_lang('CtrlEquipo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ctrl_equipo_estado_cmb_ctrl_equipo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ctrl_equipo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ctrl_equipo_estado_cmb_ctrl_equipo_id', Gral::getCmbFiltro(CtrlEquipo::getCtrlEquiposCmb(), '...'), $ctrl_equipo_estado->getCtrlEquipoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('CTRL_EQUIPO_ESTADO_ALTA_CMB_EDIT_CTRL_EQUIPO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ctrl_equipo_estado_cmb_ctrl_equipo_id" clase_id="ctrl_equipo" prefijo='ctrl_equipo_estado_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ctrl_equipo_id" <?php echo ($ctrl_equipo_estado->getCtrlEquipoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ctrl_equipo_estado_cmb_ctrl_equipo_id" clase_id="ctrl_equipo" prefijo='ctrl_equipo_estado_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ctrl_equipo_estado_cmb_ctrl_equipo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ctrl_equipo_estado_alta_ctrl_equipo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ctrl_equipo_estado_alta_ctrl_equipo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ctrl_equipo_estado_alta_ctrl_equipo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ctrl_equipo_estado_alta_ctrl_equipo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ctrl_equipo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ctrl_equipo_estado_cmb_ctrl_equipo_tipo_estado_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ctrl_equipo_tipo_estado_id' ?>" >
				  
                                        <?php Lang::_lang('CtrlEquipoTipoEstado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ctrl_equipo_estado_cmb_ctrl_equipo_tipo_estado_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ctrl_equipo_tipo_estado_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ctrl_equipo_estado_cmb_ctrl_equipo_tipo_estado_id', Gral::getCmbFiltro(CtrlEquipoTipoEstado::getCtrlEquipoTipoEstadosCmb(), '...'), $ctrl_equipo_estado->getCtrlEquipoTipoEstadoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('CTRL_EQUIPO_ESTADO_ALTA_CMB_EDIT_CTRL_EQUIPO_TIPO_ESTADO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ctrl_equipo_estado_cmb_ctrl_equipo_tipo_estado_id" clase_id="ctrl_equipo_tipo_estado" prefijo='ctrl_equipo_estado_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ctrl_equipo_tipo_estado_id" <?php echo ($ctrl_equipo_estado->getCtrlEquipoTipoEstadoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ctrl_equipo_estado_cmb_ctrl_equipo_tipo_estado_id" clase_id="ctrl_equipo_tipo_estado" prefijo='ctrl_equipo_estado_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ctrl_equipo_estado_cmb_ctrl_equipo_tipo_estado_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ctrl_equipo_estado_alta_ctrl_equipo_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ctrl_equipo_estado_alta_ctrl_equipo_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ctrl_equipo_estado_alta_ctrl_equipo_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ctrl_equipo_estado_alta_ctrl_equipo_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ctrl_equipo_tipo_estado_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ctrl_equipo_estado_cmb_inicial" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_inicial' ?>" >
				  
                                        <?php Lang::_lang('Inicial', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ctrl_equipo_estado_cmb_inicial" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('inicial')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ctrl_equipo_estado_cmb_inicial', GralSiNo::getGralSiNosCmb(), $ctrl_equipo_estado->getInicial(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_ctrl_equipo_estado_alta_inicial', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ctrl_equipo_estado_alta_inicial', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ctrl_equipo_estado_alta_inicial', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ctrl_equipo_estado_alta_inicial', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('inicial')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ctrl_equipo_estado_cmb_actual" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_actual' ?>" >
				  
                                        <?php Lang::_lang('Actual', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ctrl_equipo_estado_cmb_actual" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('actual')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ctrl_equipo_estado_cmb_actual', GralSiNo::getGralSiNosCmb(), $ctrl_equipo_estado->getActual(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_ctrl_equipo_estado_alta_actual', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ctrl_equipo_estado_alta_actual', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ctrl_equipo_estado_alta_actual', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ctrl_equipo_estado_alta_actual', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('actual')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ctrl_equipo_estado->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ctrl_equipo_estado_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ctrl_equipo_estado'/>
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

