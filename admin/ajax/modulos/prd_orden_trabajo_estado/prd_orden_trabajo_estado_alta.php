<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ESTADO_ALTA')){
    echo "No tiene asignada la credencial PRD_ORDEN_TRABAJO_ESTADO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'prd_orden_trabajo_estado';
$db_nombre_pagina = 'prd_orden_trabajo_estado_alta';

$prd_orden_trabajo_estado = new PrdOrdenTrabajoEstado();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$prd_orden_trabajo_estado = new PrdOrdenTrabajoEstado();
	if(trim($hdn_id) != '') $prd_orden_trabajo_estado->setId($hdn_id, false);
	$prd_orden_trabajo_estado->setDescripcion(Gral::getVars(1, "prd_orden_trabajo_estado_txt_descripcion"));
	$prd_orden_trabajo_estado->setPrdOrdenTrabajoId(Gral::getVars(1, "prd_orden_trabajo_estado_cmb_prd_orden_trabajo_id", null));
	$prd_orden_trabajo_estado->setPrdOrdenTrabajoTipoEstadoId(Gral::getVars(1, "prd_orden_trabajo_estado_cmb_prd_orden_trabajo_tipo_estado_id", null));
	$prd_orden_trabajo_estado->setInicial(Gral::getVars(1, "prd_orden_trabajo_estado_cmb_inicial", 0));
	$prd_orden_trabajo_estado->setActual(Gral::getVars(1, "prd_orden_trabajo_estado_cmb_actual", 0));
	$prd_orden_trabajo_estado->setCodigo(Gral::getVars(1, "prd_orden_trabajo_estado_txt_codigo"));
	$prd_orden_trabajo_estado->setObservacion(Gral::getVars(1, "prd_orden_trabajo_estado_txa_observacion"));
	$prd_orden_trabajo_estado->setOrden(Gral::getVars(1, "prd_orden_trabajo_estado_txt_orden", 0));
	$prd_orden_trabajo_estado->setEstado(Gral::getVars(1, "prd_orden_trabajo_estado_cmb_estado", 0));
	$prd_orden_trabajo_estado->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "prd_orden_trabajo_estado_txt_creado")));
	$prd_orden_trabajo_estado->setCreadoPor(Gral::getVars(1, "prd_orden_trabajo_estado__creado_por", 0));
	$prd_orden_trabajo_estado->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "prd_orden_trabajo_estado_txt_modificado")));
	$prd_orden_trabajo_estado->setModificadoPor(Gral::getVars(1, "prd_orden_trabajo_estado__modificado_por", 0));

	$prd_orden_trabajo_estado_estado = new PrdOrdenTrabajoEstado();
	if(trim($hdn_id) != ''){
		$prd_orden_trabajo_estado_estado->setId($hdn_id);
		$prd_orden_trabajo_estado->setEstado($prd_orden_trabajo_estado_estado->getEstado());
				
	}else{
		$prd_orden_trabajo_estado->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $prd_orden_trabajo_estado->control();
			if(!$error->getExisteError()){
				$prd_orden_trabajo_estado->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: prd_orden_trabajo_estado_alta.php?cs=1&id='.$prd_orden_trabajo_estado->getId());
			}
		break;
		case 'guardarnvo':
			$error = $prd_orden_trabajo_estado->control();
			if(!$error->getExisteError()){
				$prd_orden_trabajo_estado->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: prd_orden_trabajo_estado_alta.php?cs=1');
				$prd_orden_trabajo_estado = new PrdOrdenTrabajoEstado();
			}
		break;
	}
	Gral::setSes('PrdOrdenTrabajoEstado_ULTIMO_INSERTADO', $prd_orden_trabajo_estado->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_prd_orden_trabajo_estado_id = Gral::getVars(2, $prefijo.'cmb_prd_orden_trabajo_estado_id', 0);
	if($cmb_prd_orden_trabajo_estado_id != 0){
		$prd_orden_trabajo_estado = PrdOrdenTrabajoEstado::getOxId($cmb_prd_orden_trabajo_estado_id);
	}else{
	
	$prd_orden_trabajo_estado->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$prd_orden_trabajo_estado->setPrdOrdenTrabajoId(Gral::getVars(2, "prd_orden_trabajo_id", 'null'));
	$prd_orden_trabajo_estado->setPrdOrdenTrabajoTipoEstadoId(Gral::getVars(2, "prd_orden_trabajo_tipo_estado_id", 'null'));
	$prd_orden_trabajo_estado->setInicial(Gral::getVars(2, "inicial", 0));
	$prd_orden_trabajo_estado->setActual(Gral::getVars(2, "actual", 0));
	$prd_orden_trabajo_estado->setCodigo(Gral::getVars(2, "codigo", ''));
	$prd_orden_trabajo_estado->setObservacion(Gral::getVars(2, "observacion", ''));
	$prd_orden_trabajo_estado->setOrden(Gral::getVars(2, "orden", 0));
	$prd_orden_trabajo_estado->setEstado(Gral::getVars(2, "estado", 0));
	$prd_orden_trabajo_estado->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$prd_orden_trabajo_estado->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$prd_orden_trabajo_estado->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$prd_orden_trabajo_estado->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $prd_orden_trabajo_estado->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/prd_orden_trabajo_estado/prd_orden_trabajo_estado_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_prd_orden_trabajo_estado' width='90%'>
        
				<tr>
				  <td  id="label_prd_orden_trabajo_estado_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_orden_trabajo_estado_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prd_orden_trabajo_estado_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='prd_orden_trabajo_estado_txt_descripcion' value='<?php Gral::_echoTxt($prd_orden_trabajo_estado->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_prd_orden_trabajo_estado_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_orden_trabajo_estado_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_orden_trabajo_estado_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_orden_trabajo_estado_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_orden_trabajo_estado_cmb_prd_orden_trabajo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prd_orden_trabajo_id' ?>" >
				  
                                        <?php Lang::_lang('PrdOrdenTrabajo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_orden_trabajo_estado_cmb_prd_orden_trabajo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prd_orden_trabajo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prd_orden_trabajo_estado_cmb_prd_orden_trabajo_id', Gral::getCmbFiltro(PrdOrdenTrabajo::getPrdOrdenTrabajosCmb(), '...'), $prd_orden_trabajo_estado->getPrdOrdenTrabajoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ESTADO_ALTA_CMB_EDIT_PRD_ORDEN_TRABAJO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="prd_orden_trabajo_estado_cmb_prd_orden_trabajo_id" clase_id="prd_orden_trabajo" prefijo='prd_orden_trabajo_estado_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prd_orden_trabajo_id" <?php echo ($prd_orden_trabajo_estado->getPrdOrdenTrabajoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="prd_orden_trabajo_estado_cmb_prd_orden_trabajo_id" clase_id="prd_orden_trabajo" prefijo='prd_orden_trabajo_estado_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_prd_orden_trabajo_estado_cmb_prd_orden_trabajo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_prd_orden_trabajo_estado_alta_prd_orden_trabajo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_orden_trabajo_estado_alta_prd_orden_trabajo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_orden_trabajo_estado_alta_prd_orden_trabajo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_orden_trabajo_estado_alta_prd_orden_trabajo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prd_orden_trabajo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_orden_trabajo_estado_cmb_prd_orden_trabajo_tipo_estado_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prd_orden_trabajo_tipo_estado_id' ?>" >
				  
                                        <?php Lang::_lang('PrdOrdenTrabajoTipoEstado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_orden_trabajo_estado_cmb_prd_orden_trabajo_tipo_estado_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prd_orden_trabajo_tipo_estado_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prd_orden_trabajo_estado_cmb_prd_orden_trabajo_tipo_estado_id', Gral::getCmbFiltro(PrdOrdenTrabajoTipoEstado::getPrdOrdenTrabajoTipoEstadosCmb(), '...'), $prd_orden_trabajo_estado->getPrdOrdenTrabajoTipoEstadoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ESTADO_ALTA_CMB_EDIT_PRD_ORDEN_TRABAJO_TIPO_ESTADO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="prd_orden_trabajo_estado_cmb_prd_orden_trabajo_tipo_estado_id" clase_id="prd_orden_trabajo_tipo_estado" prefijo='prd_orden_trabajo_estado_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prd_orden_trabajo_tipo_estado_id" <?php echo ($prd_orden_trabajo_estado->getPrdOrdenTrabajoTipoEstadoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="prd_orden_trabajo_estado_cmb_prd_orden_trabajo_tipo_estado_id" clase_id="prd_orden_trabajo_tipo_estado" prefijo='prd_orden_trabajo_estado_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_prd_orden_trabajo_estado_cmb_prd_orden_trabajo_tipo_estado_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_prd_orden_trabajo_estado_alta_prd_orden_trabajo_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_orden_trabajo_estado_alta_prd_orden_trabajo_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_orden_trabajo_estado_alta_prd_orden_trabajo_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_orden_trabajo_estado_alta_prd_orden_trabajo_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prd_orden_trabajo_tipo_estado_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_orden_trabajo_estado_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_orden_trabajo_estado_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prd_orden_trabajo_estado_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='prd_orden_trabajo_estado_txt_codigo' value='<?php Gral::_echoTxt($prd_orden_trabajo_estado->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prd_orden_trabajo_estado_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_orden_trabajo_estado_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_orden_trabajo_estado_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_orden_trabajo_estado_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_orden_trabajo_estado_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_orden_trabajo_estado_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='prd_orden_trabajo_estado_txa_observacion' rows='10' cols='50' id='prd_orden_trabajo_estado_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($prd_orden_trabajo_estado->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_prd_orden_trabajo_estado_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_orden_trabajo_estado_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_orden_trabajo_estado_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_orden_trabajo_estado_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($prd_orden_trabajo_estado->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_prd_orden_trabajo_estado_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='prd_orden_trabajo_estado'/>
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

