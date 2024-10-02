<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('GRAL_BILLETE_ALTA')){
    echo "No tiene asignada la credencial GRAL_BILLETE_ALTA. ";
    return false;
}

$db_nombre_objeto = 'gral_billete';
$db_nombre_pagina = 'gral_billete_alta';

$gral_billete = new GralBillete();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$gral_billete = new GralBillete();
	if(trim($hdn_id) != '') $gral_billete->setId($hdn_id, false);
	$gral_billete->setDescripcion(Gral::getVars(1, "gral_billete_txt_descripcion"));
	$gral_billete->setGralMonedaId(Gral::getVars(1, "gral_billete_cmb_gral_moneda_id", null));
	$gral_billete->setImporte(Gral::getVars(1, "gral_billete_txt_importe", 0));
	$gral_billete->setCodigo(Gral::getVars(1, "gral_billete_txt_codigo"));
	$gral_billete->setObservacion(Gral::getVars(1, "gral_billete_txa_observacion"));
	$gral_billete->setOrden(Gral::getVars(1, "gral_billete_txt_orden", 0));
	$gral_billete->setEstado(Gral::getVars(1, "gral_billete__estado", 0));
	$gral_billete->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_billete_txt_creado")));
	$gral_billete->setCreadoPor(Gral::getVars(1, "gral_billete__creado_por", 0));
	$gral_billete->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_billete_txt_modificado")));
	$gral_billete->setModificadoPor(Gral::getVars(1, "gral_billete__modificado_por", 0));

	$gral_billete_estado = new GralBillete();
	if(trim($hdn_id) != ''){
		$gral_billete_estado->setId($hdn_id);
		$gral_billete->setEstado($gral_billete_estado->getEstado());
				
	}else{
		$gral_billete->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $gral_billete->control();
			if(!$error->getExisteError()){
				$gral_billete->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: gral_billete_alta.php?cs=1&id='.$gral_billete->getId());
			}
		break;
		case 'guardarnvo':
			$error = $gral_billete->control();
			if(!$error->getExisteError()){
				$gral_billete->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: gral_billete_alta.php?cs=1');
				$gral_billete = new GralBillete();
			}
		break;
	}
	Gral::setSes('GralBillete_ULTIMO_INSERTADO', $gral_billete->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_gral_billete_id = Gral::getVars(2, $prefijo.'cmb_gral_billete_id', 0);
	if($cmb_gral_billete_id != 0){
		$gral_billete = GralBillete::getOxId($cmb_gral_billete_id);
	}else{
	
	$gral_billete->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$gral_billete->setGralMonedaId(Gral::getVars(2, "gral_moneda_id", 'null'));
	$gral_billete->setImporte(Gral::getVars(2, "importe", 0));
	$gral_billete->setCodigo(Gral::getVars(2, "codigo", ''));
	$gral_billete->setObservacion(Gral::getVars(2, "observacion", ''));
	$gral_billete->setOrden(Gral::getVars(2, "orden", 0));
	$gral_billete->setEstado(Gral::getVars(2, "estado", 0));
	$gral_billete->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$gral_billete->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$gral_billete->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$gral_billete->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $gral_billete->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/gral_billete/gral_billete_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_gral_billete' width='90%'>
        
				<tr>
				  <td  id="label_gral_billete_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_billete_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_billete_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_billete_txt_descripcion' value='<?php Gral::_echoTxt($gral_billete->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_gral_billete_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_billete_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_billete_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_billete_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_billete_cmb_gral_moneda_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_moneda_id' ?>" >
				  
                                        <?php Lang::_lang('GralMoneda', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_billete_cmb_gral_moneda_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_moneda_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gral_billete_cmb_gral_moneda_id', Gral::getCmbFiltro(GralMoneda::getGralMonedasCmb(), '...'), $gral_billete->getGralMonedaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('GRAL_BILLETE_ALTA_CMB_EDIT_GRAL_MONEDA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="gral_billete_cmb_gral_moneda_id" clase_id="gral_moneda" prefijo='gral_billete_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_moneda_id" <?php echo ($gral_billete->getGralMonedaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="gral_billete_cmb_gral_moneda_id" clase_id="gral_moneda" prefijo='gral_billete_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_gral_billete_cmb_gral_moneda_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_gral_billete_alta_gral_moneda_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_billete_alta_gral_moneda_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_billete_alta_gral_moneda_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_billete_alta_gral_moneda_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_moneda_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_billete_txt_importe" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_importe' ?>" >
				  
                                        <?php Lang::_lang('Importe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_billete_txt_importe" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('importe')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_billete_txt_importe' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='gral_billete_txt_importe' value='<?php Gral::_echoTxt($gral_billete->getImporte(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gral_billete_alta_importe', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_billete_alta_importe', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_billete_alta_importe', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_billete_alta_importe', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('importe')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_billete_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_billete_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_billete_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_billete_txt_codigo' value='<?php Gral::_echoTxt($gral_billete->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gral_billete_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_billete_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_billete_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_billete_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_billete_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_billete_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='gral_billete_txa_observacion' rows='10' cols='50' id='gral_billete_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($gral_billete->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_gral_billete_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_billete_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_billete_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_billete_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_billete_txt_orden" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_orden' ?>" >
				  
                                        <?php Lang::_lang('Orden', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_billete_txt_orden" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('orden')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_billete_txt_orden' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='gral_billete_txt_orden' value='<?php Gral::_echoTxt($gral_billete->getOrden(), true) ?>' size='5' />            
                    <?php if(Lang::_lang('help_gral_billete_alta_orden', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_billete_alta_orden', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_billete_alta_orden', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_billete_alta_orden', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('orden')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($gral_billete->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_gral_billete_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='gral_billete'/>
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

