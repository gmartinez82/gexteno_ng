<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PDE_TIPO_RECIBO_ALTA')){
    echo "No tiene asignada la credencial PDE_TIPO_RECIBO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pde_tipo_recibo';
$db_nombre_pagina = 'pde_tipo_recibo_alta';

$pde_tipo_recibo = new PdeTipoRecibo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pde_tipo_recibo = new PdeTipoRecibo();
	if(trim($hdn_id) != '') $pde_tipo_recibo->setId($hdn_id, false);
	$pde_tipo_recibo->setDescripcion(Gral::getVars(1, "pde_tipo_recibo_txt_descripcion"));
	$pde_tipo_recibo->setCodigoMin(Gral::getVars(1, "pde_tipo_recibo_txt_codigo_min"));
	$pde_tipo_recibo->setCodigo(Gral::getVars(1, "pde_tipo_recibo_txt_codigo"));
	$pde_tipo_recibo->setInforma(Gral::getVars(1, "pde_tipo_recibo_cmb_informa", 0));
	$pde_tipo_recibo->setObservacion(Gral::getVars(1, "pde_tipo_recibo_txa_observacion"));
	$pde_tipo_recibo->setOrden(Gral::getVars(1, "pde_tipo_recibo_txt_orden", 0));
	$pde_tipo_recibo->setEstado(Gral::getVars(1, "pde_tipo_recibo_cmb_estado", 0));
	$pde_tipo_recibo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_tipo_recibo_txt_creado")));
	$pde_tipo_recibo->setCreadoPor(Gral::getVars(1, "pde_tipo_recibo__creado_por", 0));
	$pde_tipo_recibo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_tipo_recibo_txt_modificado")));
	$pde_tipo_recibo->setModificadoPor(Gral::getVars(1, "pde_tipo_recibo__modificado_por", 0));

	$pde_tipo_recibo_estado = new PdeTipoRecibo();
	if(trim($hdn_id) != ''){
		$pde_tipo_recibo_estado->setId($hdn_id);
		$pde_tipo_recibo->setEstado($pde_tipo_recibo_estado->getEstado());
				
	}else{
		$pde_tipo_recibo->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $pde_tipo_recibo->control();
			if(!$error->getExisteError()){
				$pde_tipo_recibo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pde_tipo_recibo_alta.php?cs=1&id='.$pde_tipo_recibo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pde_tipo_recibo->control();
			if(!$error->getExisteError()){
				$pde_tipo_recibo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pde_tipo_recibo_alta.php?cs=1');
				$pde_tipo_recibo = new PdeTipoRecibo();
			}
		break;
	}
	Gral::setSes('PdeTipoRecibo_ULTIMO_INSERTADO', $pde_tipo_recibo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pde_tipo_recibo_id = Gral::getVars(2, $prefijo.'cmb_pde_tipo_recibo_id', 0);
	if($cmb_pde_tipo_recibo_id != 0){
		$pde_tipo_recibo = PdeTipoRecibo::getOxId($cmb_pde_tipo_recibo_id);
	}else{
	
	$pde_tipo_recibo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pde_tipo_recibo->setCodigoMin(Gral::getVars(2, "codigo_min", ''));
	$pde_tipo_recibo->setCodigo(Gral::getVars(2, "codigo", ''));
	$pde_tipo_recibo->setInforma(Gral::getVars(2, "informa", 0));
	$pde_tipo_recibo->setObservacion(Gral::getVars(2, "observacion", ''));
	$pde_tipo_recibo->setOrden(Gral::getVars(2, "orden", 0));
	$pde_tipo_recibo->setEstado(Gral::getVars(2, "estado", 0));
	$pde_tipo_recibo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pde_tipo_recibo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pde_tipo_recibo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pde_tipo_recibo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pde_tipo_recibo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pde_tipo_recibo/pde_tipo_recibo_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pde_tipo_recibo' width='90%'>
        
				<tr>
				  <td  id="label_pde_tipo_recibo_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_tipo_recibo_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_tipo_recibo_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_tipo_recibo_txt_descripcion' value='<?php Gral::_echoTxt($pde_tipo_recibo->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pde_tipo_recibo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_tipo_recibo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_tipo_recibo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_tipo_recibo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_tipo_recibo_txt_codigo_min" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo_min' ?>" >
				  
                                        <?php Lang::_lang('Codigo Min', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_tipo_recibo_txt_codigo_min" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo_min')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_tipo_recibo_txt_codigo_min' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_tipo_recibo_txt_codigo_min' value='<?php Gral::_echoTxt($pde_tipo_recibo->getCodigoMin(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_tipo_recibo_alta_codigo_min', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_tipo_recibo_alta_codigo_min', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_tipo_recibo_alta_codigo_min', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_tipo_recibo_alta_codigo_min', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo_min')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_tipo_recibo_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_tipo_recibo_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_tipo_recibo_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_tipo_recibo_txt_codigo' value='<?php Gral::_echoTxt($pde_tipo_recibo->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_tipo_recibo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_tipo_recibo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_tipo_recibo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_tipo_recibo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_tipo_recibo_cmb_informa" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_informa' ?>" >
				  
                                        <?php Lang::_lang('Informa', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_tipo_recibo_cmb_informa" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('informa')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_tipo_recibo_cmb_informa', GralSiNo::getGralSiNosCmb(), $pde_tipo_recibo->getInforma(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_pde_tipo_recibo_alta_informa', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_tipo_recibo_alta_informa', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_tipo_recibo_alta_informa', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_tipo_recibo_alta_informa', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('informa')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_tipo_recibo_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_tipo_recibo_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_tipo_recibo_txa_observacion' rows='10' cols='50' id='pde_tipo_recibo_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_tipo_recibo->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_tipo_recibo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_tipo_recibo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_tipo_recibo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_tipo_recibo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_tipo_recibo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pde_tipo_recibo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pde_tipo_recibo'/>
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

