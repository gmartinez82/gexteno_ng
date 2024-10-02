<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('VTA_VENDEDOR_DESCUENTO_ALTA')){
    echo "No tiene asignada la credencial VTA_VENDEDOR_DESCUENTO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'vta_vendedor_descuento';
$db_nombre_pagina = 'vta_vendedor_descuento_alta';

$vta_vendedor_descuento = new VtaVendedorDescuento();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$vta_vendedor_descuento = new VtaVendedorDescuento();
	if(trim($hdn_id) != '') $vta_vendedor_descuento->setId($hdn_id, false);
	$vta_vendedor_descuento->setDescripcion(Gral::getVars(1, "vta_vendedor_descuento_txt_descripcion"));
	$vta_vendedor_descuento->setVtaVendedorId(Gral::getVars(1, "vta_vendedor_descuento_cmb_vta_vendedor_id", null));
	$vta_vendedor_descuento->setInsEtiquetaId(Gral::getVars(1, "vta_vendedor_descuento_cmb_ins_etiqueta_id", null));
	$vta_vendedor_descuento->setDescuentoMaximo(Gral::getVars(1, "vta_vendedor_descuento_txt_descuento_maximo", 0));
	$vta_vendedor_descuento->setCodigo(Gral::getVars(1, "vta_vendedor_descuento_txt_codigo"));
	$vta_vendedor_descuento->setObservacion(Gral::getVars(1, "vta_vendedor_descuento_txa_observacion"));
	$vta_vendedor_descuento->setOrden(Gral::getVars(1, "vta_vendedor_descuento_txt_orden", 0));
	$vta_vendedor_descuento->setEstado(Gral::getVars(1, "vta_vendedor_descuento__estado", 0));
	$vta_vendedor_descuento->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_vendedor_descuento_txt_creado")));
	$vta_vendedor_descuento->setCreadoPor(Gral::getVars(1, "vta_vendedor_descuento__creado_por", 0));
	$vta_vendedor_descuento->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_vendedor_descuento_txt_modificado")));
	$vta_vendedor_descuento->setModificadoPor(Gral::getVars(1, "vta_vendedor_descuento__modificado_por", 0));

	$vta_vendedor_descuento_estado = new VtaVendedorDescuento();
	if(trim($hdn_id) != ''){
		$vta_vendedor_descuento_estado->setId($hdn_id);
		$vta_vendedor_descuento->setEstado($vta_vendedor_descuento_estado->getEstado());
				
	}else{
		$vta_vendedor_descuento->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $vta_vendedor_descuento->control();
			if(!$error->getExisteError()){
				$vta_vendedor_descuento->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: vta_vendedor_descuento_alta.php?cs=1&id='.$vta_vendedor_descuento->getId());
			}
		break;
		case 'guardarnvo':
			$error = $vta_vendedor_descuento->control();
			if(!$error->getExisteError()){
				$vta_vendedor_descuento->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: vta_vendedor_descuento_alta.php?cs=1');
				$vta_vendedor_descuento = new VtaVendedorDescuento();
			}
		break;
	}
	Gral::setSes('VtaVendedorDescuento_ULTIMO_INSERTADO', $vta_vendedor_descuento->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_vta_vendedor_descuento_id = Gral::getVars(2, $prefijo.'cmb_vta_vendedor_descuento_id', 0);
	if($cmb_vta_vendedor_descuento_id != 0){
		$vta_vendedor_descuento = VtaVendedorDescuento::getOxId($cmb_vta_vendedor_descuento_id);
	}else{
	
	$vta_vendedor_descuento->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$vta_vendedor_descuento->setVtaVendedorId(Gral::getVars(2, "vta_vendedor_id", 'null'));
	$vta_vendedor_descuento->setInsEtiquetaId(Gral::getVars(2, "ins_etiqueta_id", 'null'));
	$vta_vendedor_descuento->setDescuentoMaximo(Gral::getVars(2, "descuento_maximo", 0));
	$vta_vendedor_descuento->setCodigo(Gral::getVars(2, "codigo", ''));
	$vta_vendedor_descuento->setObservacion(Gral::getVars(2, "observacion", ''));
	$vta_vendedor_descuento->setOrden(Gral::getVars(2, "orden", 0));
	$vta_vendedor_descuento->setEstado(Gral::getVars(2, "estado", 0));
	$vta_vendedor_descuento->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$vta_vendedor_descuento->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$vta_vendedor_descuento->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$vta_vendedor_descuento->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $vta_vendedor_descuento->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/vta_vendedor_descuento/vta_vendedor_descuento_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_vta_vendedor_descuento' width='90%'>
        
				<tr>
				  <td  id="label_vta_vendedor_descuento_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_vendedor_descuento_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_vendedor_descuento_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_vendedor_descuento_txt_descripcion' value='<?php Gral::_echoTxt($vta_vendedor_descuento->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_vta_vendedor_descuento_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_vendedor_descuento_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_vendedor_descuento_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_vendedor_descuento_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_vendedor_descuento_cmb_vta_vendedor_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_vendedor_id' ?>" >
				  
                                        <?php Lang::_lang('VtaVendedor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_vendedor_descuento_cmb_vta_vendedor_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_vendedor_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_vendedor_descuento_cmb_vta_vendedor_id', Gral::getCmbFiltro(VtaVendedor::getVtaVendedorsCmb(), '...'), $vta_vendedor_descuento->getVtaVendedorId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_DESCUENTO_ALTA_CMB_EDIT_VTA_VENDEDOR')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_vendedor_descuento_cmb_vta_vendedor_id" clase_id="vta_vendedor" prefijo='vta_vendedor_descuento_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_vendedor_id" <?php echo ($vta_vendedor_descuento->getVtaVendedorId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_vendedor_descuento_cmb_vta_vendedor_id" clase_id="vta_vendedor" prefijo='vta_vendedor_descuento_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_vendedor_descuento_cmb_vta_vendedor_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_vendedor_descuento_alta_vta_vendedor_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_vendedor_descuento_alta_vta_vendedor_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_vendedor_descuento_alta_vta_vendedor_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_vendedor_descuento_alta_vta_vendedor_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_vendedor_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_vendedor_descuento_cmb_ins_etiqueta_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_etiqueta_id' ?>" >
				  
                                        <?php Lang::_lang('InsEtiqueta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_vendedor_descuento_cmb_ins_etiqueta_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_etiqueta_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_vendedor_descuento_cmb_ins_etiqueta_id', Gral::getCmbFiltro(InsEtiqueta::getInsEtiquetasCmb(), '...'), $vta_vendedor_descuento->getInsEtiquetaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_DESCUENTO_ALTA_CMB_EDIT_INS_ETIQUETA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_vendedor_descuento_cmb_ins_etiqueta_id" clase_id="ins_etiqueta" prefijo='vta_vendedor_descuento_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_etiqueta_id" <?php echo ($vta_vendedor_descuento->getInsEtiquetaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_vendedor_descuento_cmb_ins_etiqueta_id" clase_id="ins_etiqueta" prefijo='vta_vendedor_descuento_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_vendedor_descuento_cmb_ins_etiqueta_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_vendedor_descuento_alta_ins_etiqueta_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_vendedor_descuento_alta_ins_etiqueta_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_vendedor_descuento_alta_ins_etiqueta_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_vendedor_descuento_alta_ins_etiqueta_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_etiqueta_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_vendedor_descuento_txt_descuento_maximo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descuento_maximo' ?>" >
				  
                                        <?php Lang::_lang('Descuento Maximo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_vendedor_descuento_txt_descuento_maximo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descuento_maximo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_vendedor_descuento_txt_descuento_maximo' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_vendedor_descuento_txt_descuento_maximo' value='<?php Gral::_echoTxt($vta_vendedor_descuento->getDescuentoMaximo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_vendedor_descuento_alta_descuento_maximo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_vendedor_descuento_alta_descuento_maximo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_vendedor_descuento_alta_descuento_maximo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_vendedor_descuento_alta_descuento_maximo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descuento_maximo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_vendedor_descuento_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_vendedor_descuento_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_vendedor_descuento_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_vendedor_descuento_txt_codigo' value='<?php Gral::_echoTxt($vta_vendedor_descuento->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_vendedor_descuento_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_vendedor_descuento_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_vendedor_descuento_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_vendedor_descuento_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_vendedor_descuento_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_vendedor_descuento_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='vta_vendedor_descuento_txa_observacion' rows='10' cols='50' id='vta_vendedor_descuento_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_vendedor_descuento->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_vta_vendedor_descuento_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_vendedor_descuento_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_vendedor_descuento_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_vendedor_descuento_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_vendedor_descuento->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_vta_vendedor_descuento_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='vta_vendedor_descuento'/>
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

