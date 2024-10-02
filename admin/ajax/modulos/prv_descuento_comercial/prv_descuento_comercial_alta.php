<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PRV_DESCUENTO_COMERCIAL_ALTA')){
    echo "No tiene asignada la credencial PRV_DESCUENTO_COMERCIAL_ALTA. ";
    return false;
}

$db_nombre_objeto = 'prv_descuento_comercial';
$db_nombre_pagina = 'prv_descuento_comercial_alta';

$prv_descuento_comercial = new PrvDescuentoComercial();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$prv_descuento_comercial = new PrvDescuentoComercial();
	if(trim($hdn_id) != '') $prv_descuento_comercial->setId($hdn_id, false);
	$prv_descuento_comercial->setDescripcion(Gral::getVars(1, "prv_descuento_comercial_txt_descripcion"));
	$prv_descuento_comercial->setPrvProveedorId(Gral::getVars(1, "prv_descuento_comercial_cmb_prv_proveedor_id", null));
	$prv_descuento_comercial->setCodigo(Gral::getVars(1, "prv_descuento_comercial_txt_codigo"));
	$prv_descuento_comercial->setPorcentajeDescuento(Gral::getVars(1, "prv_descuento_comercial_txt_porcentaje_descuento", 0));
	$prv_descuento_comercial->setObservacion(Gral::getVars(1, "prv_descuento_comercial_txa_observacion"));
	$prv_descuento_comercial->setOrden(Gral::getVars(1, "prv_descuento_comercial_txt_orden", 0));
	$prv_descuento_comercial->setEstado(Gral::getVars(1, "prv_descuento_comercial__estado", 0));
	$prv_descuento_comercial->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "prv_descuento_comercial_txt_creado")));
	$prv_descuento_comercial->setCreadoPor(Gral::getVars(1, "prv_descuento_comercial__creado_por", 0));
	$prv_descuento_comercial->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "prv_descuento_comercial_txt_modificado")));
	$prv_descuento_comercial->setModificadoPor(Gral::getVars(1, "prv_descuento_comercial__modificado_por", 0));

	$prv_descuento_comercial_estado = new PrvDescuentoComercial();
	if(trim($hdn_id) != ''){
		$prv_descuento_comercial_estado->setId($hdn_id);
		$prv_descuento_comercial->setEstado($prv_descuento_comercial_estado->getEstado());
				
	}else{
		$prv_descuento_comercial->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $prv_descuento_comercial->control();
			if(!$error->getExisteError()){
				$prv_descuento_comercial->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: prv_descuento_comercial_alta.php?cs=1&id='.$prv_descuento_comercial->getId());
			}
		break;
		case 'guardarnvo':
			$error = $prv_descuento_comercial->control();
			if(!$error->getExisteError()){
				$prv_descuento_comercial->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: prv_descuento_comercial_alta.php?cs=1');
				$prv_descuento_comercial = new PrvDescuentoComercial();
			}
		break;
	}
	Gral::setSes('PrvDescuentoComercial_ULTIMO_INSERTADO', $prv_descuento_comercial->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_prv_descuento_comercial_id = Gral::getVars(2, $prefijo.'cmb_prv_descuento_comercial_id', 0);
	if($cmb_prv_descuento_comercial_id != 0){
		$prv_descuento_comercial = PrvDescuentoComercial::getOxId($cmb_prv_descuento_comercial_id);
	}else{
	
	$prv_descuento_comercial->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$prv_descuento_comercial->setPrvProveedorId(Gral::getVars(2, "prv_proveedor_id", 'null'));
	$prv_descuento_comercial->setCodigo(Gral::getVars(2, "codigo", ''));
	$prv_descuento_comercial->setPorcentajeDescuento(Gral::getVars(2, "porcentaje_descuento", 0));
	$prv_descuento_comercial->setObservacion(Gral::getVars(2, "observacion", ''));
	$prv_descuento_comercial->setOrden(Gral::getVars(2, "orden", 0));
	$prv_descuento_comercial->setEstado(Gral::getVars(2, "estado", 0));
	$prv_descuento_comercial->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$prv_descuento_comercial->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$prv_descuento_comercial->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$prv_descuento_comercial->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $prv_descuento_comercial->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/prv_descuento_comercial/prv_descuento_comercial_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_prv_descuento_comercial' width='90%'>
        
				<tr>
				  <td  id="label_prv_descuento_comercial_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_descuento_comercial_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prv_descuento_comercial_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='prv_descuento_comercial_txt_descripcion' value='<?php Gral::_echoTxt($prv_descuento_comercial->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_prv_descuento_comercial_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_descuento_comercial_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_descuento_comercial_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_descuento_comercial_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_descuento_comercial_cmb_prv_proveedor_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prv_proveedor_id' ?>" >
				  
                                        <?php Lang::_lang('PrvProveedor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_descuento_comercial_cmb_prv_proveedor_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prv_descuento_comercial_cmb_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), $prv_descuento_comercial->getPrvProveedorId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PRV_DESCUENTO_COMERCIAL_ALTA_CMB_EDIT_PRV_PROVEEDOR')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="prv_descuento_comercial_cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='prv_descuento_comercial_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prv_proveedor_id" <?php echo ($prv_descuento_comercial->getPrvProveedorId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="prv_descuento_comercial_cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='prv_descuento_comercial_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_prv_descuento_comercial_cmb_prv_proveedor_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_prv_descuento_comercial_alta_prv_proveedor_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_descuento_comercial_alta_prv_proveedor_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_descuento_comercial_alta_prv_proveedor_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_descuento_comercial_alta_prv_proveedor_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_descuento_comercial_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_descuento_comercial_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prv_descuento_comercial_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='prv_descuento_comercial_txt_codigo' value='<?php Gral::_echoTxt($prv_descuento_comercial->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prv_descuento_comercial_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_descuento_comercial_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_descuento_comercial_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_descuento_comercial_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_descuento_comercial_txt_porcentaje_descuento" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_porcentaje_descuento' ?>" >
				  
                                        <?php Lang::_lang('Porc Descuento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_descuento_comercial_txt_porcentaje_descuento" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('porcentaje_descuento')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prv_descuento_comercial_txt_porcentaje_descuento' type='text' class='textbox <?php echo $error_input_css ?> ' id='prv_descuento_comercial_txt_porcentaje_descuento' value='<?php Gral::_echoTxt($prv_descuento_comercial->getPorcentajeDescuento(), true) ?>' size='5' />            
                    <?php if(Lang::_lang('help_prv_descuento_comercial_alta_porcentaje_descuento', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_descuento_comercial_alta_porcentaje_descuento', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_descuento_comercial_alta_porcentaje_descuento', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_descuento_comercial_alta_porcentaje_descuento', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('porcentaje_descuento')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_descuento_comercial_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_descuento_comercial_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='prv_descuento_comercial_txa_observacion' rows='10' cols='50' id='prv_descuento_comercial_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($prv_descuento_comercial->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_prv_descuento_comercial_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_descuento_comercial_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_descuento_comercial_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_descuento_comercial_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($prv_descuento_comercial->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_prv_descuento_comercial_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='prv_descuento_comercial'/>
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

