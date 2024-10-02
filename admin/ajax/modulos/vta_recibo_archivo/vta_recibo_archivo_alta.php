<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('VTA_RECIBO_ARCHIVO_ALTA')){
    echo "No tiene asignada la credencial VTA_RECIBO_ARCHIVO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'vta_recibo_archivo';
$db_nombre_pagina = 'vta_recibo_archivo_alta';

$vta_recibo_archivo = new VtaReciboArchivo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$vta_recibo_archivo = new VtaReciboArchivo();
	if(trim($hdn_id) != '') $vta_recibo_archivo->setId($hdn_id, false);
	$vta_recibo_archivo->setDescripcion(Gral::getVars(1, "vta_recibo_archivo_txt_descripcion"));
	$vta_recibo_archivo->setVtaReciboId(Gral::getVars(1, "vta_recibo_archivo_dbsug_vta_recibo_id", null));
	$vta_recibo_archivo->setCodigo(Gral::getVars(1, "vta_recibo_archivo_txt_codigo"));
	$vta_recibo_archivo->setObservacion(Gral::getVars(1, "vta_recibo_archivo_txa_observacion"));
	$vta_recibo_archivo->setOrden(Gral::getVars(1, "vta_recibo_archivo_txt_orden", 0));
	$vta_recibo_archivo->setEstado(Gral::getVars(1, "vta_recibo_archivo__estado", 0));
	$vta_recibo_archivo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_recibo_archivo_txt_creado")));
	$vta_recibo_archivo->setCreadoPor(Gral::getVars(1, "vta_recibo_archivo__creado_por", 0));
	$vta_recibo_archivo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_recibo_archivo_txt_modificado")));
	$vta_recibo_archivo->setModificadoPor(Gral::getVars(1, "vta_recibo_archivo__modificado_por", 0));
	$vta_recibo_archivo->setArchivo(Gral::getVars(1, "vta_recibo_archivo__archivo"));
	$vta_recibo_archivo->setPeso(Gral::getVars(1, "vta_recibo_archivo_txt_peso"));
	$vta_recibo_archivo->setTipo(Gral::getVars(1, "vta_recibo_archivo_txt_tipo"));

	$vta_recibo_archivo_estado = new VtaReciboArchivo();
	if(trim($hdn_id) != ''){
		$vta_recibo_archivo_estado->setId($hdn_id);
		$vta_recibo_archivo->setEstado($vta_recibo_archivo_estado->getEstado());
				
	}else{
		$vta_recibo_archivo->setEstado(1);
				
	}
	

	$vta_recibo_archivo_existente = new VtaReciboArchivo();
	if(trim($hdn_id) != ''){
		$vta_recibo_archivo_existente->setId($hdn_id);
		$vta_recibo_archivo->setArchivo($vta_recibo_archivo_existente->getArchivo());
		$vta_recibo_archivo->setPeso($vta_recibo_archivo_existente->getPeso());
		$vta_recibo_archivo->setTipo($vta_recibo_archivo_existente->getTipo());
		$vta_recibo_archivo->setOrden($vta_recibo_archivo_existente->getOrden());
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $vta_recibo_archivo->control();
			if(!$error->getExisteError()){
				$vta_recibo_archivo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: vta_recibo_archivo_alta.php?cs=1&id='.$vta_recibo_archivo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $vta_recibo_archivo->control();
			if(!$error->getExisteError()){
				$vta_recibo_archivo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: vta_recibo_archivo_alta.php?cs=1');
				$vta_recibo_archivo = new VtaReciboArchivo();
			}
		break;
	}
	Gral::setSes('VtaReciboArchivo_ULTIMO_INSERTADO', $vta_recibo_archivo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_vta_recibo_archivo_id = Gral::getVars(2, $prefijo.'cmb_vta_recibo_archivo_id', 0);
	if($cmb_vta_recibo_archivo_id != 0){
		$vta_recibo_archivo = VtaReciboArchivo::getOxId($cmb_vta_recibo_archivo_id);
	}else{
	
	$vta_recibo_archivo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$vta_recibo_archivo->setVtaReciboId(Gral::getVars(2, "vta_recibo_id", 'null'));
	$vta_recibo_archivo->setCodigo(Gral::getVars(2, "codigo", ''));
	$vta_recibo_archivo->setObservacion(Gral::getVars(2, "observacion", ''));
	$vta_recibo_archivo->setOrden(Gral::getVars(2, "orden", 0));
	$vta_recibo_archivo->setEstado(Gral::getVars(2, "estado", 0));
	$vta_recibo_archivo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$vta_recibo_archivo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$vta_recibo_archivo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$vta_recibo_archivo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	$vta_recibo_archivo->setArchivo(Gral::getVars(2, "archivo", ''));
	$vta_recibo_archivo->setPeso(Gral::getVars(2, "peso", ''));
	$vta_recibo_archivo->setTipo(Gral::getVars(2, "tipo", ''));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $vta_recibo_archivo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/vta_recibo_archivo/vta_recibo_archivo_alta.php' enctype="multipart/form-data">
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_vta_recibo_archivo' width='90%'>
        
				<tr>
				  <td  id="label_vta_recibo_archivo_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_recibo_archivo_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_recibo_archivo_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_recibo_archivo_txt_descripcion' value='<?php Gral::_echoTxt($vta_recibo_archivo->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_vta_recibo_archivo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_recibo_archivo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_recibo_archivo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_recibo_archivo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_recibo_archivo_dbsug_vta_recibo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_recibo_id' ?>" >
				  
                                        <?php Lang::_lang('VtaRecibo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_recibo_archivo_dbsug_vta_recibo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_recibo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'vta_recibo_archivo_dbsug_vta_recibo', 'ajax/modulos/vta_recibo/vta_recibo_dbsuggest.php', false, true, '', 'Ingrese ...', $vta_recibo_archivo->getVtaReciboId(), $vta_recibo_archivo->getVtaRecibo()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_vta_recibo_archivo_alta_vta_recibo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_recibo_archivo_alta_vta_recibo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_recibo_archivo_alta_vta_recibo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_recibo_archivo_alta_vta_recibo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_recibo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_recibo_archivo_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_recibo_archivo_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_recibo_archivo_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_recibo_archivo_txt_codigo' value='<?php Gral::_echoTxt($vta_recibo_archivo->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_recibo_archivo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_recibo_archivo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_recibo_archivo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_recibo_archivo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_recibo_archivo_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_recibo_archivo_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='vta_recibo_archivo_txa_observacion' rows='10' cols='50' id='vta_recibo_archivo_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_recibo_archivo->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_vta_recibo_archivo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_recibo_archivo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_recibo_archivo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_recibo_archivo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_recibo_archivo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_vta_recibo_archivo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='vta_recibo_archivo'/>
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

