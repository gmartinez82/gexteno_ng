<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('GRAL_CAJA_ALTA')){
    echo "No tiene asignada la credencial GRAL_CAJA_ALTA. ";
    return false;
}

$db_nombre_objeto = 'gral_caja';
$db_nombre_pagina = 'gral_caja_alta';

$gral_caja = new GralCaja();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$gral_caja = new GralCaja();
	if(trim($hdn_id) != '') $gral_caja->setId($hdn_id, false);
	$gral_caja->setDescripcion(Gral::getVars(1, "gral_caja_txt_descripcion"));
	$gral_caja->setGralCajaTipoId(Gral::getVars(1, "gral_caja_cmb_gral_caja_tipo_id", null));
	$gral_caja->setNumero(Gral::getVars(1, "gral_caja_txt_numero"));
	$gral_caja->setCodigo(Gral::getVars(1, "gral_caja_txt_codigo"));
	$gral_caja->setObservacion(Gral::getVars(1, "gral_caja_txa_observacion"));
	$gral_caja->setOrden(Gral::getVars(1, "gral_caja_txt_orden", 0));
	$gral_caja->setEstado(Gral::getVars(1, "gral_caja__estado", 0));
	$gral_caja->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_caja_txt_creado")));
	$gral_caja->setCreadoPor(Gral::getVars(1, "gral_caja__creado_por", 0));
	$gral_caja->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_caja_txt_modificado")));
	$gral_caja->setModificadoPor(Gral::getVars(1, "gral_caja__modificado_por", 0));

	$gral_caja_estado = new GralCaja();
	if(trim($hdn_id) != ''){
		$gral_caja_estado->setId($hdn_id);
		$gral_caja->setEstado($gral_caja_estado->getEstado());
				
	}else{
		$gral_caja->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $gral_caja->control();
			if(!$error->getExisteError()){
				$gral_caja->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: gral_caja_alta.php?cs=1&id='.$gral_caja->getId());
			}
		break;
		case 'guardarnvo':
			$error = $gral_caja->control();
			if(!$error->getExisteError()){
				$gral_caja->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: gral_caja_alta.php?cs=1');
				$gral_caja = new GralCaja();
			}
		break;
	}
	Gral::setSes('GralCaja_ULTIMO_INSERTADO', $gral_caja->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_gral_caja_id = Gral::getVars(2, $prefijo.'cmb_gral_caja_id', 0);
	if($cmb_gral_caja_id != 0){
		$gral_caja = GralCaja::getOxId($cmb_gral_caja_id);
	}else{
	
	$gral_caja->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$gral_caja->setGralCajaTipoId(Gral::getVars(2, "gral_caja_tipo_id", 'null'));
	$gral_caja->setNumero(Gral::getVars(2, "numero", ''));
	$gral_caja->setCodigo(Gral::getVars(2, "codigo", ''));
	$gral_caja->setObservacion(Gral::getVars(2, "observacion", ''));
	$gral_caja->setOrden(Gral::getVars(2, "orden", 0));
	$gral_caja->setEstado(Gral::getVars(2, "estado", 0));
	$gral_caja->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$gral_caja->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$gral_caja->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$gral_caja->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $gral_caja->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/gral_caja/gral_caja_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_gral_caja' width='90%'>
        
				<tr>
				  <td  id="label_gral_caja_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_caja_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_caja_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_caja_txt_descripcion' value='<?php Gral::_echoTxt($gral_caja->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_gral_caja_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_caja_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_caja_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_caja_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_caja_cmb_gral_caja_tipo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_caja_tipo_id' ?>" >
				  
                                        <?php Lang::_lang('GralCajaTipo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_caja_cmb_gral_caja_tipo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_caja_tipo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gral_caja_cmb_gral_caja_tipo_id', Gral::getCmbFiltro(GralCajaTipo::getGralCajaTiposCmb(), '...'), $gral_caja->getGralCajaTipoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('GRAL_CAJA_ALTA_CMB_EDIT_GRAL_CAJA_TIPO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="gral_caja_cmb_gral_caja_tipo_id" clase_id="gral_caja_tipo" prefijo='gral_caja_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_caja_tipo_id" <?php echo ($gral_caja->getGralCajaTipoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="gral_caja_cmb_gral_caja_tipo_id" clase_id="gral_caja_tipo" prefijo='gral_caja_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_gral_caja_cmb_gral_caja_tipo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_gral_caja_alta_gral_caja_tipo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_caja_alta_gral_caja_tipo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_caja_alta_gral_caja_tipo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_caja_alta_gral_caja_tipo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_caja_tipo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_caja_txt_numero" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_numero' ?>" >
				  
                                        <?php Lang::_lang('Numero', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_caja_txt_numero" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('numero')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_caja_txt_numero' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_caja_txt_numero' value='<?php Gral::_echoTxt($gral_caja->getNumero(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gral_caja_alta_numero', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_caja_alta_numero', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_caja_alta_numero', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_caja_alta_numero', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('numero')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_caja_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_caja_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_caja_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_caja_txt_codigo' value='<?php Gral::_echoTxt($gral_caja->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gral_caja_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_caja_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_caja_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_caja_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_caja_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_caja_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='gral_caja_txa_observacion' rows='10' cols='50' id='gral_caja_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($gral_caja->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_gral_caja_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_caja_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_caja_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_caja_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($gral_caja->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_gral_caja_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='gral_caja'/>
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

