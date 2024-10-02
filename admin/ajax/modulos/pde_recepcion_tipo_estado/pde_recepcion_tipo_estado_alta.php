<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PDE_RECEPCION_TIPO_ESTADO_ALTA')){
    echo "No tiene asignada la credencial PDE_RECEPCION_TIPO_ESTADO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pde_recepcion_tipo_estado';
$db_nombre_pagina = 'pde_recepcion_tipo_estado_alta';

$pde_recepcion_tipo_estado = new PdeRecepcionTipoEstado();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pde_recepcion_tipo_estado = new PdeRecepcionTipoEstado();
	if(trim($hdn_id) != '') $pde_recepcion_tipo_estado->setId($hdn_id, false);
	$pde_recepcion_tipo_estado->setDescripcion(Gral::getVars(1, "pde_recepcion_tipo_estado_txt_descripcion"));
	$pde_recepcion_tipo_estado->setCodigo(Gral::getVars(1, "pde_recepcion_tipo_estado_txt_codigo"));
	$pde_recepcion_tipo_estado->setActivo(Gral::getVars(1, "pde_recepcion_tipo_estado_cmb_activo", 0));
	$pde_recepcion_tipo_estado->setTerminal(Gral::getVars(1, "pde_recepcion_tipo_estado_cmb_terminal", 0));
	$pde_recepcion_tipo_estado->setAfectaStock(Gral::getVars(1, "pde_recepcion_tipo_estado_cmb_afecta_stock", 0));
	$pde_recepcion_tipo_estado->setObservacion(Gral::getVars(1, "pde_recepcion_tipo_estado_txa_observacion"));
	$pde_recepcion_tipo_estado->setOrden(Gral::getVars(1, "pde_recepcion_tipo_estado_txt_orden", 0));
	$pde_recepcion_tipo_estado->setEstado(Gral::getVars(1, "pde_recepcion_tipo_estado__estado", 0));
	$pde_recepcion_tipo_estado->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_recepcion_tipo_estado_txt_creado")));
	$pde_recepcion_tipo_estado->setCreadoPor(Gral::getVars(1, "pde_recepcion_tipo_estado__creado_por", null));
	$pde_recepcion_tipo_estado->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_recepcion_tipo_estado_txt_modificado")));
	$pde_recepcion_tipo_estado->setModificadoPor(Gral::getVars(1, "pde_recepcion_tipo_estado__modificado_por", null));

	$pde_recepcion_tipo_estado_estado = new PdeRecepcionTipoEstado();
	if(trim($hdn_id) != ''){
		$pde_recepcion_tipo_estado_estado->setId($hdn_id);
		$pde_recepcion_tipo_estado->setEstado($pde_recepcion_tipo_estado_estado->getEstado());
				
	}else{
		$pde_recepcion_tipo_estado->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $pde_recepcion_tipo_estado->control();
			if(!$error->getExisteError()){
				$pde_recepcion_tipo_estado->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pde_recepcion_tipo_estado_alta.php?cs=1&id='.$pde_recepcion_tipo_estado->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pde_recepcion_tipo_estado->control();
			if(!$error->getExisteError()){
				$pde_recepcion_tipo_estado->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pde_recepcion_tipo_estado_alta.php?cs=1');
				$pde_recepcion_tipo_estado = new PdeRecepcionTipoEstado();
			}
		break;
	}
	Gral::setSes('PdeRecepcionTipoEstado_ULTIMO_INSERTADO', $pde_recepcion_tipo_estado->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pde_recepcion_tipo_estado_id = Gral::getVars(2, $prefijo.'cmb_pde_recepcion_tipo_estado_id', 0);
	if($cmb_pde_recepcion_tipo_estado_id != 0){
		$pde_recepcion_tipo_estado = PdeRecepcionTipoEstado::getOxId($cmb_pde_recepcion_tipo_estado_id);
	}else{
	
	$pde_recepcion_tipo_estado->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pde_recepcion_tipo_estado->setCodigo(Gral::getVars(2, "codigo", ''));
	$pde_recepcion_tipo_estado->setActivo(Gral::getVars(2, "activo", 0));
	$pde_recepcion_tipo_estado->setTerminal(Gral::getVars(2, "terminal", 0));
	$pde_recepcion_tipo_estado->setAfectaStock(Gral::getVars(2, "afecta_stock", 0));
	$pde_recepcion_tipo_estado->setObservacion(Gral::getVars(2, "observacion", ''));
	$pde_recepcion_tipo_estado->setOrden(Gral::getVars(2, "orden", 0));
	$pde_recepcion_tipo_estado->setEstado(Gral::getVars(2, "estado", 0));
	$pde_recepcion_tipo_estado->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pde_recepcion_tipo_estado->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pde_recepcion_tipo_estado->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pde_recepcion_tipo_estado->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pde_recepcion_tipo_estado->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pde_recepcion_tipo_estado/pde_recepcion_tipo_estado_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pde_recepcion_tipo_estado' width='90%'>
        
				<tr>
				  <td  id="label_pde_recepcion_tipo_estado_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recepcion_tipo_estado_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_recepcion_tipo_estado_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_recepcion_tipo_estado_txt_descripcion' value='<?php Gral::_echoTxt($pde_recepcion_tipo_estado->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pde_recepcion_tipo_estado_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recepcion_tipo_estado_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recepcion_tipo_estado_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recepcion_tipo_estado_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recepcion_tipo_estado_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recepcion_tipo_estado_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_recepcion_tipo_estado_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_recepcion_tipo_estado_txt_codigo' value='<?php Gral::_echoTxt($pde_recepcion_tipo_estado->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_recepcion_tipo_estado_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recepcion_tipo_estado_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recepcion_tipo_estado_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recepcion_tipo_estado_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recepcion_tipo_estado_cmb_activo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_activo' ?>" >
				  
                                        <?php Lang::_lang('Activo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recepcion_tipo_estado_cmb_activo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('activo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recepcion_tipo_estado_cmb_activo', GralSiNo::getGralSiNosCmb(), $pde_recepcion_tipo_estado->getActivo(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_pde_recepcion_tipo_estado_alta_activo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recepcion_tipo_estado_alta_activo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recepcion_tipo_estado_alta_activo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recepcion_tipo_estado_alta_activo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('activo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recepcion_tipo_estado_cmb_terminal" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_terminal' ?>" >
				  
                                        <?php Lang::_lang('Terminal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recepcion_tipo_estado_cmb_terminal" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('terminal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recepcion_tipo_estado_cmb_terminal', GralSiNo::getGralSiNosCmb(), $pde_recepcion_tipo_estado->getTerminal(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_pde_recepcion_tipo_estado_alta_terminal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recepcion_tipo_estado_alta_terminal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recepcion_tipo_estado_alta_terminal', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recepcion_tipo_estado_alta_terminal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('terminal')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recepcion_tipo_estado_cmb_afecta_stock" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_afecta_stock' ?>" >
				  
                                        <?php Lang::_lang('Afecta Stock', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recepcion_tipo_estado_cmb_afecta_stock" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('afecta_stock')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recepcion_tipo_estado_cmb_afecta_stock', GralSiNo::getGralSiNosCmb(), $pde_recepcion_tipo_estado->getAfectaStock(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_pde_recepcion_tipo_estado_alta_afecta_stock', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recepcion_tipo_estado_alta_afecta_stock', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recepcion_tipo_estado_alta_afecta_stock', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recepcion_tipo_estado_alta_afecta_stock', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afecta_stock')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recepcion_tipo_estado_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recepcion_tipo_estado_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_recepcion_tipo_estado_txa_observacion' rows='10' cols='50' id='pde_recepcion_tipo_estado_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_recepcion_tipo_estado->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_recepcion_tipo_estado_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recepcion_tipo_estado_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recepcion_tipo_estado_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recepcion_tipo_estado_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_recepcion_tipo_estado->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pde_recepcion_tipo_estado_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pde_recepcion_tipo_estado'/>
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

