<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('GRAL_RUTA_GEO_LOCALIDAD_CLI_CENTRO_RECEPCION_ALTA')){
    echo "No tiene asignada la credencial GRAL_RUTA_GEO_LOCALIDAD_CLI_CENTRO_RECEPCION_ALTA. ";
    return false;
}

$db_nombre_objeto = 'gral_ruta_geo_localidad_cli_centro_recepcion';
$db_nombre_pagina = 'gral_ruta_geo_localidad_cli_centro_recepcion_alta';

$gral_ruta_geo_localidad_cli_centro_recepcion = new GralRutaGeoLocalidadCliCentroRecepcion();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$gral_ruta_geo_localidad_cli_centro_recepcion = new GralRutaGeoLocalidadCliCentroRecepcion();
	if(trim($hdn_id) != '') $gral_ruta_geo_localidad_cli_centro_recepcion->setId($hdn_id, false);
	$gral_ruta_geo_localidad_cli_centro_recepcion->setDescripcion(Gral::getVars(1, "gral_ruta_geo_localidad_cli_centro_recepcion_txt_descripcion"));
	$gral_ruta_geo_localidad_cli_centro_recepcion->setGralRutaId(Gral::getVars(1, "gral_ruta_geo_localidad_cli_centro_recepcion_cmb_gral_ruta_id", null));
	$gral_ruta_geo_localidad_cli_centro_recepcion->setGeoLocalidadId(Gral::getVars(1, "gral_ruta_geo_localidad_cli_centro_recepcion_dbsug_geo_localidad_id", null));
	$gral_ruta_geo_localidad_cli_centro_recepcion->setCliCentroRecepcionId(Gral::getVars(1, "gral_ruta_geo_localidad_cli_centro_recepcion_dbsug_cli_centro_recepcion_id", null));
	$gral_ruta_geo_localidad_cli_centro_recepcion->setCliClienteId(Gral::getVars(1, "gral_ruta_geo_localidad_cli_centro_recepcion_dbsug_cli_cliente_id", null));
	$gral_ruta_geo_localidad_cli_centro_recepcion->setCodigo(Gral::getVars(1, "gral_ruta_geo_localidad_cli_centro_recepcion_txt_codigo"));
	$gral_ruta_geo_localidad_cli_centro_recepcion->setObservacion(Gral::getVars(1, "gral_ruta_geo_localidad_cli_centro_recepcion_txa_observacion"));
	$gral_ruta_geo_localidad_cli_centro_recepcion->setOrden(Gral::getVars(1, "gral_ruta_geo_localidad_cli_centro_recepcion_txt_orden", 0));
	$gral_ruta_geo_localidad_cli_centro_recepcion->setEstado(Gral::getVars(1, "gral_ruta_geo_localidad_cli_centro_recepcion_cmb_estado", 0));
	$gral_ruta_geo_localidad_cli_centro_recepcion->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_ruta_geo_localidad_cli_centro_recepcion_txt_creado")));
	$gral_ruta_geo_localidad_cli_centro_recepcion->setCreadoPor(Gral::getVars(1, "gral_ruta_geo_localidad_cli_centro_recepcion__creado_por", 0));
	$gral_ruta_geo_localidad_cli_centro_recepcion->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_ruta_geo_localidad_cli_centro_recepcion_txt_modificado")));
	$gral_ruta_geo_localidad_cli_centro_recepcion->setModificadoPor(Gral::getVars(1, "gral_ruta_geo_localidad_cli_centro_recepcion__modificado_por", 0));

	$gral_ruta_geo_localidad_cli_centro_recepcion_estado = new GralRutaGeoLocalidadCliCentroRecepcion();
	if(trim($hdn_id) != ''){
		$gral_ruta_geo_localidad_cli_centro_recepcion_estado->setId($hdn_id);
		$gral_ruta_geo_localidad_cli_centro_recepcion->setEstado($gral_ruta_geo_localidad_cli_centro_recepcion_estado->getEstado());
				
	}else{
		$gral_ruta_geo_localidad_cli_centro_recepcion->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $gral_ruta_geo_localidad_cli_centro_recepcion->control();
			if(!$error->getExisteError()){
				$gral_ruta_geo_localidad_cli_centro_recepcion->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: gral_ruta_geo_localidad_cli_centro_recepcion_alta.php?cs=1&id='.$gral_ruta_geo_localidad_cli_centro_recepcion->getId());
			}
		break;
		case 'guardarnvo':
			$error = $gral_ruta_geo_localidad_cli_centro_recepcion->control();
			if(!$error->getExisteError()){
				$gral_ruta_geo_localidad_cli_centro_recepcion->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: gral_ruta_geo_localidad_cli_centro_recepcion_alta.php?cs=1');
				$gral_ruta_geo_localidad_cli_centro_recepcion = new GralRutaGeoLocalidadCliCentroRecepcion();
			}
		break;
	}
	Gral::setSes('GralRutaGeoLocalidadCliCentroRecepcion_ULTIMO_INSERTADO', $gral_ruta_geo_localidad_cli_centro_recepcion->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_gral_ruta_geo_localidad_cli_centro_recepcion_id = Gral::getVars(2, $prefijo.'cmb_gral_ruta_geo_localidad_cli_centro_recepcion_id', 0);
	if($cmb_gral_ruta_geo_localidad_cli_centro_recepcion_id != 0){
		$gral_ruta_geo_localidad_cli_centro_recepcion = GralRutaGeoLocalidadCliCentroRecepcion::getOxId($cmb_gral_ruta_geo_localidad_cli_centro_recepcion_id);
	}else{
	
	$gral_ruta_geo_localidad_cli_centro_recepcion->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$gral_ruta_geo_localidad_cli_centro_recepcion->setGralRutaId(Gral::getVars(2, "gral_ruta_id", 'null'));
	$gral_ruta_geo_localidad_cli_centro_recepcion->setGeoLocalidadId(Gral::getVars(2, "geo_localidad_id", 'null'));
	$gral_ruta_geo_localidad_cli_centro_recepcion->setCliCentroRecepcionId(Gral::getVars(2, "cli_centro_recepcion_id", 'null'));
	$gral_ruta_geo_localidad_cli_centro_recepcion->setCliClienteId(Gral::getVars(2, "cli_cliente_id", 'null'));
	$gral_ruta_geo_localidad_cli_centro_recepcion->setCodigo(Gral::getVars(2, "codigo", ''));
	$gral_ruta_geo_localidad_cli_centro_recepcion->setObservacion(Gral::getVars(2, "observacion", ''));
	$gral_ruta_geo_localidad_cli_centro_recepcion->setOrden(Gral::getVars(2, "orden", 0));
	$gral_ruta_geo_localidad_cli_centro_recepcion->setEstado(Gral::getVars(2, "estado", 0));
	$gral_ruta_geo_localidad_cli_centro_recepcion->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$gral_ruta_geo_localidad_cli_centro_recepcion->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$gral_ruta_geo_localidad_cli_centro_recepcion->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$gral_ruta_geo_localidad_cli_centro_recepcion->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $gral_ruta_geo_localidad_cli_centro_recepcion->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/gral_ruta_geo_localidad_cli_centro_recepcion/gral_ruta_geo_localidad_cli_centro_recepcion_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_gral_ruta_geo_localidad_cli_centro_recepcion' width='90%'>
        
				<tr>
				  <td  id="label_gral_ruta_geo_localidad_cli_centro_recepcion_cmb_gral_ruta_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_ruta_id' ?>" >
				  
                                        <?php Lang::_lang('GralRuta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_ruta_geo_localidad_cli_centro_recepcion_cmb_gral_ruta_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_ruta_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gral_ruta_geo_localidad_cli_centro_recepcion_cmb_gral_ruta_id', Gral::getCmbFiltro(GralRuta::getGralRutasCmb(), '...'), $gral_ruta_geo_localidad_cli_centro_recepcion->getGralRutaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('GRAL_RUTA_GEO_LOCALIDAD_CLI_CENTRO_RECEPCION_ALTA_CMB_EDIT_GRAL_RUTA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="gral_ruta_geo_localidad_cli_centro_recepcion_cmb_gral_ruta_id" clase_id="gral_ruta" prefijo='gral_ruta_geo_localidad_cli_centro_recepcion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_ruta_id" <?php echo ($gral_ruta_geo_localidad_cli_centro_recepcion->getGralRutaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="gral_ruta_geo_localidad_cli_centro_recepcion_cmb_gral_ruta_id" clase_id="gral_ruta" prefijo='gral_ruta_geo_localidad_cli_centro_recepcion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_gral_ruta_geo_localidad_cli_centro_recepcion_cmb_gral_ruta_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_gral_ruta_geo_localidad_cli_centro_recepcion_alta_gral_ruta_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_ruta_geo_localidad_cli_centro_recepcion_alta_gral_ruta_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_ruta_geo_localidad_cli_centro_recepcion_alta_gral_ruta_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_ruta_geo_localidad_cli_centro_recepcion_alta_gral_ruta_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_ruta_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_ruta_geo_localidad_cli_centro_recepcion_dbsug_geo_localidad_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_geo_localidad_id' ?>" >
				  
                                        <?php Lang::_lang('GeoLocalidad', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_ruta_geo_localidad_cli_centro_recepcion_dbsug_geo_localidad_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('geo_localidad_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'gral_ruta_geo_localidad_cli_centro_recepcion_dbsug_geo_localidad', 'ajax/modulos/geo_localidad/geo_localidad_dbsuggest.php', false, true, '', 'Ingrese ...', $gral_ruta_geo_localidad_cli_centro_recepcion->getGeoLocalidadId(), $gral_ruta_geo_localidad_cli_centro_recepcion->getGeoLocalidad()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_gral_ruta_geo_localidad_cli_centro_recepcion_alta_geo_localidad_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_ruta_geo_localidad_cli_centro_recepcion_alta_geo_localidad_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_ruta_geo_localidad_cli_centro_recepcion_alta_geo_localidad_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_ruta_geo_localidad_cli_centro_recepcion_alta_geo_localidad_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('geo_localidad_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_ruta_geo_localidad_cli_centro_recepcion_dbsug_cli_centro_recepcion_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cli_centro_recepcion_id' ?>" >
				  
                                        <?php Lang::_lang('CliCentroRecepcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_ruta_geo_localidad_cli_centro_recepcion_dbsug_cli_centro_recepcion_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cli_centro_recepcion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'gral_ruta_geo_localidad_cli_centro_recepcion_dbsug_cli_centro_recepcion', 'ajax/modulos/cli_centro_recepcion/cli_centro_recepcion_dbsuggest.php', false, true, '', 'Ingrese ...', $gral_ruta_geo_localidad_cli_centro_recepcion->getCliCentroRecepcionId(), $gral_ruta_geo_localidad_cli_centro_recepcion->getCliCentroRecepcion()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_gral_ruta_geo_localidad_cli_centro_recepcion_alta_cli_centro_recepcion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_ruta_geo_localidad_cli_centro_recepcion_alta_cli_centro_recepcion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_ruta_geo_localidad_cli_centro_recepcion_alta_cli_centro_recepcion_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_ruta_geo_localidad_cli_centro_recepcion_alta_cli_centro_recepcion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cli_centro_recepcion_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_ruta_geo_localidad_cli_centro_recepcion_dbsug_cli_cliente_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cli_cliente_id' ?>" >
				  
                                        <?php Lang::_lang('CliCliente', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_ruta_geo_localidad_cli_centro_recepcion_dbsug_cli_cliente_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cli_cliente_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'gral_ruta_geo_localidad_cli_centro_recepcion_dbsug_cli_cliente', 'ajax/modulos/cli_cliente/cli_cliente_dbsuggest.php', false, true, '', 'Ingrese ...', $gral_ruta_geo_localidad_cli_centro_recepcion->getCliClienteId(), $gral_ruta_geo_localidad_cli_centro_recepcion->getCliCliente()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_gral_ruta_geo_localidad_cli_centro_recepcion_alta_cli_cliente_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_ruta_geo_localidad_cli_centro_recepcion_alta_cli_cliente_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_ruta_geo_localidad_cli_centro_recepcion_alta_cli_cliente_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_ruta_geo_localidad_cli_centro_recepcion_alta_cli_cliente_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cli_cliente_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_ruta_geo_localidad_cli_centro_recepcion_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_ruta_geo_localidad_cli_centro_recepcion_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='gral_ruta_geo_localidad_cli_centro_recepcion_txa_observacion' rows='10' cols='50' id='gral_ruta_geo_localidad_cli_centro_recepcion_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($gral_ruta_geo_localidad_cli_centro_recepcion->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_gral_ruta_geo_localidad_cli_centro_recepcion_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_ruta_geo_localidad_cli_centro_recepcion_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_ruta_geo_localidad_cli_centro_recepcion_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_ruta_geo_localidad_cli_centro_recepcion_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($gral_ruta_geo_localidad_cli_centro_recepcion->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_gral_ruta_geo_localidad_cli_centro_recepcion_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='gral_ruta_geo_localidad_cli_centro_recepcion'/>
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

