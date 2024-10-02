<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('INS_VENTA_WEB_INFO_ALTA')){
    echo "No tiene asignada la credencial INS_VENTA_WEB_INFO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'ins_venta_web_info';
$db_nombre_pagina = 'ins_venta_web_info_alta';

$ins_venta_web_info = new InsVentaWebInfo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$ins_venta_web_info = new InsVentaWebInfo();
	if(trim($hdn_id) != '') $ins_venta_web_info->setId($hdn_id, false);
	$ins_venta_web_info->setInsInsumoId(Gral::getVars(1, "ins_venta_web_info_dbsug_ins_insumo_id", null));
	$ins_venta_web_info->setDescripcion(Gral::getVars(1, "ins_venta_web_info_txt_descripcion"));
	$ins_venta_web_info->setCodigo(Gral::getVars(1, "ins_venta_web_info_txt_codigo"));
	$ins_venta_web_info->setDestacado(Gral::getVars(1, "ins_venta_web_info_cmb_destacado", 0));
	$ins_venta_web_info->setBadge(Gral::getVars(1, "ins_venta_web_info_txt_badge"));
	$ins_venta_web_info->setDescripcionBreve(Gral::getVars(1, "ins_venta_web_info_txa_descripcion_breve"));
	$ins_venta_web_info->setDescripcionExt(Gral::getVars(1, "ins_venta_web_info_txa_descripcion_ext"));
	$ins_venta_web_info->setObservacion(Gral::getVars(1, "ins_venta_web_info_txa_observacion"));
	$ins_venta_web_info->setOrden(Gral::getVars(1, "ins_venta_web_info__orden", 0));
	$ins_venta_web_info->setEstado(Gral::getVars(1, "ins_venta_web_info__estado", 0));
	$ins_venta_web_info->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_venta_web_info_txt_creado")));
	$ins_venta_web_info->setCreadoPor(Gral::getVars(1, "ins_venta_web_info__creado_por", null));
	$ins_venta_web_info->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_venta_web_info_txt_modificado")));
	$ins_venta_web_info->setModificadoPor(Gral::getVars(1, "ins_venta_web_info__modificado_por", null));

	$ins_venta_web_info_estado = new InsVentaWebInfo();
	if(trim($hdn_id) != ''){
		$ins_venta_web_info_estado->setId($hdn_id);
		$ins_venta_web_info->setEstado($ins_venta_web_info_estado->getEstado());
				
	}else{
		$ins_venta_web_info->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $ins_venta_web_info->control();
			if(!$error->getExisteError()){
				$ins_venta_web_info->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: ins_venta_web_info_alta.php?cs=1&id='.$ins_venta_web_info->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ins_venta_web_info->control();
			if(!$error->getExisteError()){
				$ins_venta_web_info->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: ins_venta_web_info_alta.php?cs=1');
				$ins_venta_web_info = new InsVentaWebInfo();
			}
		break;
	}
	Gral::setSes('InsVentaWebInfo_ULTIMO_INSERTADO', $ins_venta_web_info->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_ins_venta_web_info_id = Gral::getVars(2, $prefijo.'cmb_ins_venta_web_info_id', 0);
	if($cmb_ins_venta_web_info_id != 0){
		$ins_venta_web_info = InsVentaWebInfo::getOxId($cmb_ins_venta_web_info_id);
	}else{
	
	$ins_venta_web_info->setInsInsumoId(Gral::getVars(2, "ins_insumo_id", 'null'));
	$ins_venta_web_info->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$ins_venta_web_info->setCodigo(Gral::getVars(2, "codigo", ''));
	$ins_venta_web_info->setDestacado(Gral::getVars(2, "destacado", 0));
	$ins_venta_web_info->setBadge(Gral::getVars(2, "badge", ''));
	$ins_venta_web_info->setDescripcionBreve(Gral::getVars(2, "descripcion_breve", ''));
	$ins_venta_web_info->setDescripcionExt(Gral::getVars(2, "descripcion_ext", ''));
	$ins_venta_web_info->setObservacion(Gral::getVars(2, "observacion", ''));
	$ins_venta_web_info->setOrden(Gral::getVars(2, "orden", 0));
	$ins_venta_web_info->setEstado(Gral::getVars(2, "estado", 0));
	$ins_venta_web_info->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ins_venta_web_info->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ins_venta_web_info->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ins_venta_web_info->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $ins_venta_web_info->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ins_venta_web_info/ins_venta_web_info_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ins_venta_web_info' width='90%'>
        
				<tr>
				  <td  id="label_ins_venta_web_info_dbsug_ins_insumo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_insumo_id' ?>" >
				  
                                        <?php Lang::_lang('InsInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_web_info_dbsug_ins_insumo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'ins_venta_web_info_dbsug_ins_insumo', 'ajax/modulos/ins_insumo/ins_insumo_dbsuggest.php', false, true, '', 'Ingrese ...', $ins_venta_web_info->getInsInsumoId(), $ins_venta_web_info->getInsInsumo()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_ins_venta_web_info_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_web_info_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_web_info_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_web_info_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_venta_web_info_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Titulo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_web_info_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_venta_web_info_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_venta_web_info_txt_descripcion' value='<?php Gral::_echoTxt($ins_venta_web_info->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_ins_venta_web_info_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_web_info_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_web_info_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_web_info_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_venta_web_info_cmb_destacado" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_destacado' ?>" >
				  
                                        <?php Lang::_lang('Destacado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_web_info_cmb_destacado" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('destacado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_venta_web_info_cmb_destacado', GralSiNo::getGralSiNosCmb(), $ins_venta_web_info->getDestacado(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_ins_venta_web_info_alta_destacado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_web_info_alta_destacado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_web_info_alta_destacado', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_web_info_alta_destacado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('destacado')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_venta_web_info_txa_descripcion_breve" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion_breve' ?>" >
				  
                                        <?php Lang::_lang('Desc Breve', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_web_info_txa_descripcion_breve" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion_breve')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='ins_venta_web_info_txa_descripcion_breve' rows='5' cols='50' id='ins_venta_web_info_txa_descripcion_breve' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($ins_venta_web_info->getDescripcionBreve(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_ins_venta_web_info_alta_descripcion_breve', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_web_info_alta_descripcion_breve', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_web_info_alta_descripcion_breve', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_web_info_alta_descripcion_breve', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion_breve')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_venta_web_info_txa_descripcion_ext" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion_ext' ?>" >
				  
                                        <?php Lang::_lang('Desc Extendida', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_web_info_txa_descripcion_ext" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion_ext')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='ins_venta_web_info_txa_descripcion_ext' rows='5' cols='50' id='ins_venta_web_info_txa_descripcion_ext' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($ins_venta_web_info->getDescripcionExt(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_ins_venta_web_info_alta_descripcion_ext', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_web_info_alta_descripcion_ext', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_web_info_alta_descripcion_ext', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_web_info_alta_descripcion_ext', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion_ext')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ins_venta_web_info->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ins_venta_web_info_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ins_venta_web_info'/>
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

