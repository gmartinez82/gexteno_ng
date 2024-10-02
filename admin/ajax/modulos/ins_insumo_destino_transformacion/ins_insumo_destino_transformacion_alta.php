<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('INS_INSUMO_DESTINO_TRANSFORMACION_ALTA')){
    echo "No tiene asignada la credencial INS_INSUMO_DESTINO_TRANSFORMACION_ALTA. ";
    return false;
}

$db_nombre_objeto = 'ins_insumo_destino_transformacion';
$db_nombre_pagina = 'ins_insumo_destino_transformacion_alta';

$ins_insumo_destino_transformacion = new InsInsumoDestinoTransformacion();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$ins_insumo_destino_transformacion = new InsInsumoDestinoTransformacion();
	if(trim($hdn_id) != '') $ins_insumo_destino_transformacion->setId($hdn_id, false);
	$ins_insumo_destino_transformacion->setInsInsumoId(Gral::getVars(1, "ins_insumo_destino_transformacion_dbsug_ins_insumo_id", null));
	$ins_insumo_destino_transformacion->setInsInsumoDestino(Gral::getVars(1, "ins_insumo_destino_transformacion_dbsug_ins_insumo_destino_id", null));
	$ins_insumo_destino_transformacion->setCantidad(Gral::getVars(1, "ins_insumo_destino_transformacion_txt_cantidad", 0));
	$ins_insumo_destino_transformacion->setDescripcion(Gral::getVars(1, "ins_insumo_destino_transformacion_txt_descripcion"));
	$ins_insumo_destino_transformacion->setCodigo(Gral::getVars(1, "ins_insumo_destino_transformacion_txt_codigo"));
	$ins_insumo_destino_transformacion->setObservacion(Gral::getVars(1, "ins_insumo_destino_transformacion_txa_observacion"));
	$ins_insumo_destino_transformacion->setOrden(Gral::getVars(1, "ins_insumo_destino_transformacion__orden", 0));
	$ins_insumo_destino_transformacion->setEstado(Gral::getVars(1, "ins_insumo_destino_transformacion__estado", 0));
	$ins_insumo_destino_transformacion->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_insumo_destino_transformacion_txt_creado")));
	$ins_insumo_destino_transformacion->setCreadoPor(Gral::getVars(1, "ins_insumo_destino_transformacion__creado_por", null));
	$ins_insumo_destino_transformacion->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_insumo_destino_transformacion_txt_modificado")));
	$ins_insumo_destino_transformacion->setModificadoPor(Gral::getVars(1, "ins_insumo_destino_transformacion__modificado_por", null));

	$ins_insumo_destino_transformacion_estado = new InsInsumoDestinoTransformacion();
	if(trim($hdn_id) != ''){
		$ins_insumo_destino_transformacion_estado->setId($hdn_id);
		$ins_insumo_destino_transformacion->setEstado($ins_insumo_destino_transformacion_estado->getEstado());
				
	}else{
		$ins_insumo_destino_transformacion->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $ins_insumo_destino_transformacion->control();
			if(!$error->getExisteError()){
				$ins_insumo_destino_transformacion->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: ins_insumo_destino_transformacion_alta.php?cs=1&id='.$ins_insumo_destino_transformacion->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ins_insumo_destino_transformacion->control();
			if(!$error->getExisteError()){
				$ins_insumo_destino_transformacion->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: ins_insumo_destino_transformacion_alta.php?cs=1');
				$ins_insumo_destino_transformacion = new InsInsumoDestinoTransformacion();
			}
		break;
	}
	Gral::setSes('InsInsumoDestinoTransformacion_ULTIMO_INSERTADO', $ins_insumo_destino_transformacion->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_ins_insumo_destino_transformacion_id = Gral::getVars(2, $prefijo.'cmb_ins_insumo_destino_transformacion_id', 0);
	if($cmb_ins_insumo_destino_transformacion_id != 0){
		$ins_insumo_destino_transformacion = InsInsumoDestinoTransformacion::getOxId($cmb_ins_insumo_destino_transformacion_id);
	}else{
	
	$ins_insumo_destino_transformacion->setInsInsumoId(Gral::getVars(2, "ins_insumo_id", 'null'));
	$ins_insumo_destino_transformacion->setInsInsumoDestino(Gral::getVars(2, "ins_insumo_destino", 'null'));
	$ins_insumo_destino_transformacion->setCantidad(Gral::getVars(2, "cantidad", 0));
	$ins_insumo_destino_transformacion->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$ins_insumo_destino_transformacion->setCodigo(Gral::getVars(2, "codigo", ''));
	$ins_insumo_destino_transformacion->setObservacion(Gral::getVars(2, "observacion", ''));
	$ins_insumo_destino_transformacion->setOrden(Gral::getVars(2, "orden", 0));
	$ins_insumo_destino_transformacion->setEstado(Gral::getVars(2, "estado", 0));
	$ins_insumo_destino_transformacion->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ins_insumo_destino_transformacion->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ins_insumo_destino_transformacion->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ins_insumo_destino_transformacion->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $ins_insumo_destino_transformacion->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ins_insumo_destino_transformacion/ins_insumo_destino_transformacion_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ins_insumo_destino_transformacion' width='90%'>
        
				<tr>
				  <td  id="label_ins_insumo_destino_transformacion_dbsug_ins_insumo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_insumo_id' ?>" >
				  
                                        <?php Lang::_lang('InsInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_destino_transformacion_dbsug_ins_insumo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'ins_insumo_destino_transformacion_dbsug_ins_insumo', 'ajax/modulos/ins_insumo/ins_insumo_dbsuggest.php', false, true, '', 'Ingrese ...', $ins_insumo_destino_transformacion->getInsInsumoId(), $ins_insumo_destino_transformacion->getInsInsumo()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_ins_insumo_destino_transformacion_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_destino_transformacion_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_destino_transformacion_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_destino_transformacion_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_destino_transformacion_dbsug_ins_insumo_destino" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_insumo_destino' ?>" >
				  
                                        <?php Lang::_lang('InsInsumo Destino', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_destino_transformacion_dbsug_ins_insumo_destino" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_insumo_destino')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'ins_insumo_destino_transformacion_dbsug_ins_insumo_destino', 'ajax/modulos/ins_insumo/ins_insumo_dbsuggest.php', false, true, '', 'Ingrese ...', $ins_insumo_destino_transformacion->getInsInsumoDestino(), ($ins_insumo_destino_transformacion->getInsInsumoDestino() != 'null') ? InsInsumo::getOxId($ins_insumo_destino_transformacion->getInsInsumoDestino())->getDescripcion(): '') ?>            
                    <?php if(Lang::_lang('help_ins_insumo_destino_transformacion_alta_ins_insumo_destino', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_destino_transformacion_alta_ins_insumo_destino', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_destino_transformacion_alta_ins_insumo_destino', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_destino_transformacion_alta_ins_insumo_destino', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_insumo_destino')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_destino_transformacion_txt_cantidad" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cantidad' ?>" >
				  
                                        <?php Lang::_lang('Cantidad', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_destino_transformacion_txt_cantidad" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cantidad')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_insumo_destino_transformacion_txt_cantidad' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='ins_insumo_destino_transformacion_txt_cantidad' value='<?php Gral::_echoTxt($ins_insumo_destino_transformacion->getCantidad(), true) ?>' size='10' />            
                    <?php if(Lang::_lang('help_ins_insumo_destino_transformacion_alta_cantidad', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_destino_transformacion_alta_cantidad', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_destino_transformacion_alta_cantidad', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_destino_transformacion_alta_cantidad', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cantidad')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_destino_transformacion_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_destino_transformacion_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='ins_insumo_destino_transformacion_txa_observacion' rows='5' cols='50' id='ins_insumo_destino_transformacion_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($ins_insumo_destino_transformacion->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_ins_insumo_destino_transformacion_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_destino_transformacion_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_destino_transformacion_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_destino_transformacion_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ins_insumo_destino_transformacion->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ins_insumo_destino_transformacion_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ins_insumo_destino_transformacion'/>
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

