<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('INS_TIPO_INSUMO_ALTA')){
    echo "No tiene asignada la credencial INS_TIPO_INSUMO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'ins_tipo_insumo';
$db_nombre_pagina = 'ins_tipo_insumo_alta';

$ins_tipo_insumo = new InsTipoInsumo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$ins_tipo_insumo = new InsTipoInsumo();
	if(trim($hdn_id) != '') $ins_tipo_insumo->setId($hdn_id, false);
	$ins_tipo_insumo->setDescripcion(Gral::getVars(1, "ins_tipo_insumo_txt_descripcion"));
	$ins_tipo_insumo->setCodigo(Gral::getVars(1, "ins_tipo_insumo_txt_codigo"));
	$ins_tipo_insumo->setCntbCuentaCompra(Gral::getVars(1, "ins_tipo_insumo_dbsug_cntb_cuenta_compra_id", null));
	$ins_tipo_insumo->setCntbCuentaVenta(Gral::getVars(1, "ins_tipo_insumo_dbsug_cntb_cuenta_venta_id", null));
	$ins_tipo_insumo->setObservacion(Gral::getVars(1, "ins_tipo_insumo_txa_observacion"));
	$ins_tipo_insumo->setOrden(Gral::getVars(1, "ins_tipo_insumo_txt_orden", 0));
	$ins_tipo_insumo->setEstado(Gral::getVars(1, "ins_tipo_insumo__estado", 0));
	$ins_tipo_insumo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_tipo_insumo_txt_creado")));
	$ins_tipo_insumo->setCreadoPor(Gral::getVars(1, "ins_tipo_insumo__creado_por", 0));
	$ins_tipo_insumo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_tipo_insumo_txt_modificado")));
	$ins_tipo_insumo->setModificadoPor(Gral::getVars(1, "ins_tipo_insumo__modificado_por", 0));

	$ins_tipo_insumo_estado = new InsTipoInsumo();
	if(trim($hdn_id) != ''){
		$ins_tipo_insumo_estado->setId($hdn_id);
		$ins_tipo_insumo->setEstado($ins_tipo_insumo_estado->getEstado());
				
	}else{
		$ins_tipo_insumo->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $ins_tipo_insumo->control();
			if(!$error->getExisteError()){
				$ins_tipo_insumo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: ins_tipo_insumo_alta.php?cs=1&id='.$ins_tipo_insumo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ins_tipo_insumo->control();
			if(!$error->getExisteError()){
				$ins_tipo_insumo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: ins_tipo_insumo_alta.php?cs=1');
				$ins_tipo_insumo = new InsTipoInsumo();
			}
		break;
	}
	Gral::setSes('InsTipoInsumo_ULTIMO_INSERTADO', $ins_tipo_insumo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_ins_tipo_insumo_id = Gral::getVars(2, $prefijo.'cmb_ins_tipo_insumo_id', 0);
	if($cmb_ins_tipo_insumo_id != 0){
		$ins_tipo_insumo = InsTipoInsumo::getOxId($cmb_ins_tipo_insumo_id);
	}else{
	
	$ins_tipo_insumo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$ins_tipo_insumo->setCodigo(Gral::getVars(2, "codigo", ''));
	$ins_tipo_insumo->setCntbCuentaCompra(Gral::getVars(2, "cntb_cuenta_compra", 'null'));
	$ins_tipo_insumo->setCntbCuentaVenta(Gral::getVars(2, "cntb_cuenta_venta", 'null'));
	$ins_tipo_insumo->setObservacion(Gral::getVars(2, "observacion", ''));
	$ins_tipo_insumo->setOrden(Gral::getVars(2, "orden", 0));
	$ins_tipo_insumo->setEstado(Gral::getVars(2, "estado", 0));
	$ins_tipo_insumo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ins_tipo_insumo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ins_tipo_insumo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ins_tipo_insumo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $ins_tipo_insumo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ins_tipo_insumo/ins_tipo_insumo_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ins_tipo_insumo' width='90%'>
        
				<tr>
				  <td  id="label_ins_tipo_insumo_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_tipo_insumo_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_tipo_insumo_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_tipo_insumo_txt_descripcion' value='<?php Gral::_echoTxt($ins_tipo_insumo->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_ins_tipo_insumo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_tipo_insumo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_tipo_insumo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_tipo_insumo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_tipo_insumo_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_tipo_insumo_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_tipo_insumo_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_tipo_insumo_txt_codigo' value='<?php Gral::_echoTxt($ins_tipo_insumo->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_tipo_insumo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_tipo_insumo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_tipo_insumo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_tipo_insumo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_tipo_insumo_dbsug_cntb_cuenta_compra" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cntb_cuenta_compra' ?>" >
				  
                                        <?php Lang::_lang('CntbCuentaCompra', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_tipo_insumo_dbsug_cntb_cuenta_compra" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cntb_cuenta_compra')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'ins_tipo_insumo_dbsug_cntb_cuenta_compra', 'ajax/modulos/cntb_cuenta/cntb_cuenta_dbsuggest_custom.php', false, true, '', 'Ingrese ...', $ins_tipo_insumo->getCntbCuentaCompra(), ($ins_tipo_insumo->getCntbCuentaCompra() != 'null') ? CntbCuenta::getOxId($ins_tipo_insumo->getCntbCuentaCompra())->getDescripcion(): '') ?>            
                    <?php if(Lang::_lang('help_ins_tipo_insumo_alta_cntb_cuenta_compra', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_tipo_insumo_alta_cntb_cuenta_compra', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_tipo_insumo_alta_cntb_cuenta_compra', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_tipo_insumo_alta_cntb_cuenta_compra', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cntb_cuenta_compra')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_tipo_insumo_dbsug_cntb_cuenta_venta" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cntb_cuenta_venta' ?>" >
				  
                                        <?php Lang::_lang('CntbCuentaVenta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_tipo_insumo_dbsug_cntb_cuenta_venta" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cntb_cuenta_venta')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'ins_tipo_insumo_dbsug_cntb_cuenta_venta', 'ajax/modulos/cntb_cuenta/cntb_cuenta_dbsuggest_custom.php', false, true, '', 'Ingrese ...', $ins_tipo_insumo->getCntbCuentaVenta(), ($ins_tipo_insumo->getCntbCuentaVenta() != 'null') ? CntbCuenta::getOxId($ins_tipo_insumo->getCntbCuentaVenta())->getDescripcion(): '') ?>            
                    <?php if(Lang::_lang('help_ins_tipo_insumo_alta_cntb_cuenta_venta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_tipo_insumo_alta_cntb_cuenta_venta', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_tipo_insumo_alta_cntb_cuenta_venta', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_tipo_insumo_alta_cntb_cuenta_venta', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cntb_cuenta_venta')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_tipo_insumo_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_tipo_insumo_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='ins_tipo_insumo_txa_observacion' rows='10' cols='50' id='ins_tipo_insumo_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($ins_tipo_insumo->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_ins_tipo_insumo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_tipo_insumo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_tipo_insumo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_tipo_insumo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ins_tipo_insumo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ins_tipo_insumo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ins_tipo_insumo'/>
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

