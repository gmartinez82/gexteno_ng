<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_TIPO_ESTADO_COBRO_ALTA')){
    echo "No tiene asignada la credencial VTA_ORDEN_VENTA_TIPO_ESTADO_COBRO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'vta_orden_venta_tipo_estado_cobro';
$db_nombre_pagina = 'vta_orden_venta_tipo_estado_cobro_alta';

$vta_orden_venta_tipo_estado_cobro = new VtaOrdenVentaTipoEstadoCobro();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$vta_orden_venta_tipo_estado_cobro = new VtaOrdenVentaTipoEstadoCobro();
	if(trim($hdn_id) != '') $vta_orden_venta_tipo_estado_cobro->setId($hdn_id, false);
	$vta_orden_venta_tipo_estado_cobro->setDescripcion(Gral::getVars(1, "vta_orden_venta_tipo_estado_cobro_txt_descripcion"));
	$vta_orden_venta_tipo_estado_cobro->setCodigo(Gral::getVars(1, "vta_orden_venta_tipo_estado_cobro_txt_codigo"));
	$vta_orden_venta_tipo_estado_cobro->setActivo(Gral::getVars(1, "vta_orden_venta_tipo_estado_cobro_cmb_activo", 0));
	$vta_orden_venta_tipo_estado_cobro->setTerminal(Gral::getVars(1, "vta_orden_venta_tipo_estado_cobro_cmb_terminal", 0));
	$vta_orden_venta_tipo_estado_cobro->setObservacion(Gral::getVars(1, "vta_orden_venta_tipo_estado_cobro_txa_observacion"));
	$vta_orden_venta_tipo_estado_cobro->setOrden(Gral::getVars(1, "vta_orden_venta_tipo_estado_cobro_txt_orden", 0));
	$vta_orden_venta_tipo_estado_cobro->setEstado(Gral::getVars(1, "vta_orden_venta_tipo_estado_cobro_cmb_estado", 0));
	$vta_orden_venta_tipo_estado_cobro->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_orden_venta_tipo_estado_cobro_txt_creado")));
	$vta_orden_venta_tipo_estado_cobro->setCreadoPor(Gral::getVars(1, "vta_orden_venta_tipo_estado_cobro__creado_por", 0));
	$vta_orden_venta_tipo_estado_cobro->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_orden_venta_tipo_estado_cobro_txt_modificado")));
	$vta_orden_venta_tipo_estado_cobro->setModificadoPor(Gral::getVars(1, "vta_orden_venta_tipo_estado_cobro__modificado_por", 0));

	$vta_orden_venta_tipo_estado_cobro_estado = new VtaOrdenVentaTipoEstadoCobro();
	if(trim($hdn_id) != ''){
		$vta_orden_venta_tipo_estado_cobro_estado->setId($hdn_id);
		$vta_orden_venta_tipo_estado_cobro->setEstado($vta_orden_venta_tipo_estado_cobro_estado->getEstado());
				
	}else{
		$vta_orden_venta_tipo_estado_cobro->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $vta_orden_venta_tipo_estado_cobro->control();
			if(!$error->getExisteError()){
				$vta_orden_venta_tipo_estado_cobro->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: vta_orden_venta_tipo_estado_cobro_alta.php?cs=1&id='.$vta_orden_venta_tipo_estado_cobro->getId());
			}
		break;
		case 'guardarnvo':
			$error = $vta_orden_venta_tipo_estado_cobro->control();
			if(!$error->getExisteError()){
				$vta_orden_venta_tipo_estado_cobro->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: vta_orden_venta_tipo_estado_cobro_alta.php?cs=1');
				$vta_orden_venta_tipo_estado_cobro = new VtaOrdenVentaTipoEstadoCobro();
			}
		break;
	}
	Gral::setSes('VtaOrdenVentaTipoEstadoCobro_ULTIMO_INSERTADO', $vta_orden_venta_tipo_estado_cobro->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_vta_orden_venta_tipo_estado_cobro_id = Gral::getVars(2, $prefijo.'cmb_vta_orden_venta_tipo_estado_cobro_id', 0);
	if($cmb_vta_orden_venta_tipo_estado_cobro_id != 0){
		$vta_orden_venta_tipo_estado_cobro = VtaOrdenVentaTipoEstadoCobro::getOxId($cmb_vta_orden_venta_tipo_estado_cobro_id);
	}else{
	
	$vta_orden_venta_tipo_estado_cobro->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$vta_orden_venta_tipo_estado_cobro->setCodigo(Gral::getVars(2, "codigo", ''));
	$vta_orden_venta_tipo_estado_cobro->setActivo(Gral::getVars(2, "activo", 0));
	$vta_orden_venta_tipo_estado_cobro->setTerminal(Gral::getVars(2, "terminal", 0));
	$vta_orden_venta_tipo_estado_cobro->setObservacion(Gral::getVars(2, "observacion", ''));
	$vta_orden_venta_tipo_estado_cobro->setOrden(Gral::getVars(2, "orden", 0));
	$vta_orden_venta_tipo_estado_cobro->setEstado(Gral::getVars(2, "estado", 0));
	$vta_orden_venta_tipo_estado_cobro->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$vta_orden_venta_tipo_estado_cobro->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$vta_orden_venta_tipo_estado_cobro->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$vta_orden_venta_tipo_estado_cobro->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $vta_orden_venta_tipo_estado_cobro->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/vta_orden_venta_tipo_estado_cobro/vta_orden_venta_tipo_estado_cobro_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_vta_orden_venta_tipo_estado_cobro' width='90%'>
        
				<tr>
				  <td  id="label_vta_orden_venta_tipo_estado_cobro_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_orden_venta_tipo_estado_cobro_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_orden_venta_tipo_estado_cobro_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_orden_venta_tipo_estado_cobro_txt_descripcion' value='<?php Gral::_echoTxt($vta_orden_venta_tipo_estado_cobro->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_vta_orden_venta_tipo_estado_cobro_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_orden_venta_tipo_estado_cobro_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_orden_venta_tipo_estado_cobro_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_orden_venta_tipo_estado_cobro_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_orden_venta_tipo_estado_cobro_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_orden_venta_tipo_estado_cobro_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_orden_venta_tipo_estado_cobro_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_orden_venta_tipo_estado_cobro_txt_codigo' value='<?php Gral::_echoTxt($vta_orden_venta_tipo_estado_cobro->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_orden_venta_tipo_estado_cobro_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_orden_venta_tipo_estado_cobro_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_orden_venta_tipo_estado_cobro_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_orden_venta_tipo_estado_cobro_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_orden_venta_tipo_estado_cobro_cmb_activo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_activo' ?>" >
				  
                                        <?php Lang::_lang('Activo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_orden_venta_tipo_estado_cobro_cmb_activo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('activo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_orden_venta_tipo_estado_cobro_cmb_activo', GralSiNo::getGralSiNosCmb(), $vta_orden_venta_tipo_estado_cobro->getActivo(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_vta_orden_venta_tipo_estado_cobro_alta_activo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_orden_venta_tipo_estado_cobro_alta_activo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_orden_venta_tipo_estado_cobro_alta_activo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_orden_venta_tipo_estado_cobro_alta_activo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('activo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_orden_venta_tipo_estado_cobro_cmb_terminal" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_terminal' ?>" >
				  
                                        <?php Lang::_lang('Terminal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_orden_venta_tipo_estado_cobro_cmb_terminal" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('terminal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_orden_venta_tipo_estado_cobro_cmb_terminal', GralSiNo::getGralSiNosCmb(), $vta_orden_venta_tipo_estado_cobro->getTerminal(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_vta_orden_venta_tipo_estado_cobro_alta_terminal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_orden_venta_tipo_estado_cobro_alta_terminal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_orden_venta_tipo_estado_cobro_alta_terminal', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_orden_venta_tipo_estado_cobro_alta_terminal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('terminal')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_orden_venta_tipo_estado_cobro_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_orden_venta_tipo_estado_cobro_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='vta_orden_venta_tipo_estado_cobro_txa_observacion' rows='10' cols='50' id='vta_orden_venta_tipo_estado_cobro_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_orden_venta_tipo_estado_cobro->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_vta_orden_venta_tipo_estado_cobro_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_orden_venta_tipo_estado_cobro_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_orden_venta_tipo_estado_cobro_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_orden_venta_tipo_estado_cobro_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_orden_venta_tipo_estado_cobro->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_vta_orden_venta_tipo_estado_cobro_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='vta_orden_venta_tipo_estado_cobro'/>
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

