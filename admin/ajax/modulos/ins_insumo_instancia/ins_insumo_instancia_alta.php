<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('INS_INSUMO_INSTANCIA_ALTA')){
    echo "No tiene asignada la credencial INS_INSUMO_INSTANCIA_ALTA. ";
    return false;
}

$db_nombre_objeto = 'ins_insumo_instancia';
$db_nombre_pagina = 'ins_insumo_instancia_alta';

$ins_insumo_instancia = new InsInsumoInstancia();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$ins_insumo_instancia = new InsInsumoInstancia();
	if(trim($hdn_id) != '') $ins_insumo_instancia->setId($hdn_id, false);
	$ins_insumo_instancia->setDescripcion(Gral::getVars(1, "ins_insumo_instancia_txt_descripcion"));
	$ins_insumo_instancia->setInsInsumoId(Gral::getVars(1, "ins_insumo_instancia_dbsug_ins_insumo_id", null));
	$ins_insumo_instancia->setVidaUtil(Gral::getVars(1, "ins_insumo_instancia_txt_vida_util", 0));
	$ins_insumo_instancia->setMargen(Gral::getVars(1, "ins_insumo_instancia_txt_margen", 0));
	$ins_insumo_instancia->setCodigo(Gral::getVars(1, "ins_insumo_instancia_txt_codigo"));
	$ins_insumo_instancia->setObservacion(Gral::getVars(1, "ins_insumo_instancia_txa_observacion"));
	$ins_insumo_instancia->setOrden(Gral::getVars(1, "ins_insumo_instancia_txt_orden", 0));
	$ins_insumo_instancia->setEstado(Gral::getVars(1, "ins_insumo_instancia__estado", 0));
	$ins_insumo_instancia->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_insumo_instancia_txt_creado")));
	$ins_insumo_instancia->setCreadoPor(Gral::getVars(1, "ins_insumo_instancia__creado_por", null));
	$ins_insumo_instancia->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_insumo_instancia_txt_modificado")));
	$ins_insumo_instancia->setModificadoPor(Gral::getVars(1, "ins_insumo_instancia__modificado_por", null));

	$ins_insumo_instancia_estado = new InsInsumoInstancia();
	if(trim($hdn_id) != ''){
		$ins_insumo_instancia_estado->setId($hdn_id);
		$ins_insumo_instancia->setEstado($ins_insumo_instancia_estado->getEstado());
				
	}else{
		$ins_insumo_instancia->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $ins_insumo_instancia->control();
			if(!$error->getExisteError()){
				$ins_insumo_instancia->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: ins_insumo_instancia_alta.php?cs=1&id='.$ins_insumo_instancia->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ins_insumo_instancia->control();
			if(!$error->getExisteError()){
				$ins_insumo_instancia->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: ins_insumo_instancia_alta.php?cs=1');
				$ins_insumo_instancia = new InsInsumoInstancia();
			}
		break;
	}
	Gral::setSes('InsInsumoInstancia_ULTIMO_INSERTADO', $ins_insumo_instancia->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_ins_insumo_instancia_id = Gral::getVars(2, $prefijo.'cmb_ins_insumo_instancia_id', 0);
	if($cmb_ins_insumo_instancia_id != 0){
		$ins_insumo_instancia = InsInsumoInstancia::getOxId($cmb_ins_insumo_instancia_id);
	}else{
	
	$ins_insumo_instancia->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$ins_insumo_instancia->setInsInsumoId(Gral::getVars(2, "ins_insumo_id", 'null'));
	$ins_insumo_instancia->setVidaUtil(Gral::getVars(2, "vida_util", 0));
	$ins_insumo_instancia->setMargen(Gral::getVars(2, "margen", 0));
	$ins_insumo_instancia->setCodigo(Gral::getVars(2, "codigo", ''));
	$ins_insumo_instancia->setObservacion(Gral::getVars(2, "observacion", ''));
	$ins_insumo_instancia->setOrden(Gral::getVars(2, "orden", 0));
	$ins_insumo_instancia->setEstado(Gral::getVars(2, "estado", 0));
	$ins_insumo_instancia->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ins_insumo_instancia->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ins_insumo_instancia->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ins_insumo_instancia->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $ins_insumo_instancia->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ins_insumo_instancia/ins_insumo_instancia_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ins_insumo_instancia' width='90%'>
        
				<tr>
				  <td  id="label_ins_insumo_instancia_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_instancia_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_insumo_instancia_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_insumo_instancia_txt_descripcion' value='<?php Gral::_echoTxt($ins_insumo_instancia->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_ins_insumo_instancia_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_instancia_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_instancia_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_instancia_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_instancia_dbsug_ins_insumo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_insumo_id' ?>" >
				  
                                        <?php Lang::_lang('InsInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_instancia_dbsug_ins_insumo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'ins_insumo_instancia_dbsug_ins_insumo', 'ajax/modulos/ins_insumo/ins_insumo_dbsuggest.php', false, true, '', 'Ingrese ...', $ins_insumo_instancia->getInsInsumoId(), $ins_insumo_instancia->getInsInsumo()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_ins_insumo_instancia_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_instancia_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_instancia_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_instancia_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_instancia_txt_vida_util" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vida_util' ?>" >
				  
                                        <?php Lang::_lang('Vida Util', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_instancia_txt_vida_util" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vida_util')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_insumo_instancia_txt_vida_util' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_insumo_instancia_txt_vida_util' value='<?php Gral::_echoTxt($ins_insumo_instancia->getVidaUtil(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_insumo_instancia_alta_vida_util', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_instancia_alta_vida_util', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_instancia_alta_vida_util', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_instancia_alta_vida_util', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vida_util')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_instancia_txt_margen" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_margen' ?>" >
				  
                                        <?php Lang::_lang('Margen', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_instancia_txt_margen" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('margen')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_insumo_instancia_txt_margen' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_insumo_instancia_txt_margen' value='<?php Gral::_echoTxt($ins_insumo_instancia->getMargen(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_insumo_instancia_alta_margen', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_instancia_alta_margen', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_instancia_alta_margen', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_instancia_alta_margen', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('margen')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_instancia_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_instancia_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_insumo_instancia_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_insumo_instancia_txt_codigo' value='<?php Gral::_echoTxt($ins_insumo_instancia->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_insumo_instancia_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_instancia_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_instancia_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_instancia_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_instancia_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_instancia_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='ins_insumo_instancia_txa_observacion' rows='10' cols='50' id='ins_insumo_instancia_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($ins_insumo_instancia->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_ins_insumo_instancia_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_instancia_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_instancia_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_instancia_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_instancia_txt_orden" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_orden' ?>" >
				  
                                        <?php Lang::_lang('Orden', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_instancia_txt_orden" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('orden')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_insumo_instancia_txt_orden' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='ins_insumo_instancia_txt_orden' value='<?php Gral::_echoTxt($ins_insumo_instancia->getOrden(), true) ?>' size='5' />            
                    <?php if(Lang::_lang('help_ins_insumo_instancia_alta_orden', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_instancia_alta_orden', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_instancia_alta_orden', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_instancia_alta_orden', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('orden')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ins_insumo_instancia->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ins_insumo_instancia_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ins_insumo_instancia'/>
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

