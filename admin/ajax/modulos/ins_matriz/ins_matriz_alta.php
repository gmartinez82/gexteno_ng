<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('INS_MATRIZ_ALTA')){
    echo "No tiene asignada la credencial INS_MATRIZ_ALTA. ";
    return false;
}

$db_nombre_objeto = 'ins_matriz';
$db_nombre_pagina = 'ins_matriz_alta';

$ins_matriz = new InsMatriz();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$ins_matriz = new InsMatriz();
	if(trim($hdn_id) != '') $ins_matriz->setId($hdn_id, false);
	$ins_matriz->setInsMarcaId(Gral::getVars(1, "ins_matriz_cmb_ins_marca_id", null));
	$ins_matriz->setCodigoPieza(Gral::getVars(1, "ins_matriz_txt_codigo_pieza"));
	$ins_matriz->setCodigo(Gral::getVars(1, "ins_matriz_txt_codigo"));
	$ins_matriz->setDescripcion(Gral::getVars(1, "ins_matriz_txt_descripcion"));
	$ins_matriz->setObservacion(Gral::getVars(1, "ins_matriz_txa_observacion"));
	$ins_matriz->setOrden(Gral::getVars(1, "ins_matriz_txt_orden", 0));
	$ins_matriz->setEstado(Gral::getVars(1, "ins_matriz__estado", 0));
	$ins_matriz->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_matriz_txt_creado")));
	$ins_matriz->setCreadoPor(Gral::getVars(1, "ins_matriz__creado_por", null));
	$ins_matriz->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_matriz_txt_modificado")));
	$ins_matriz->setModificadoPor(Gral::getVars(1, "ins_matriz__modificado_por", null));

	$ins_matriz_estado = new InsMatriz();
	if(trim($hdn_id) != ''){
		$ins_matriz_estado->setId($hdn_id);
		$ins_matriz->setEstado($ins_matriz_estado->getEstado());
				
	}else{
		$ins_matriz->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $ins_matriz->control();
			if(!$error->getExisteError()){
				$ins_matriz->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: ins_matriz_alta.php?cs=1&id='.$ins_matriz->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ins_matriz->control();
			if(!$error->getExisteError()){
				$ins_matriz->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: ins_matriz_alta.php?cs=1');
				$ins_matriz = new InsMatriz();
			}
		break;
	}
	Gral::setSes('InsMatriz_ULTIMO_INSERTADO', $ins_matriz->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_ins_matriz_id = Gral::getVars(2, $prefijo.'cmb_ins_matriz_id', 0);
	if($cmb_ins_matriz_id != 0){
		$ins_matriz = InsMatriz::getOxId($cmb_ins_matriz_id);
	}else{
	
	$ins_matriz->setInsMarcaId(Gral::getVars(2, "ins_marca_id", 'null'));
	$ins_matriz->setCodigoPieza(Gral::getVars(2, "codigo_pieza", ''));
	$ins_matriz->setCodigo(Gral::getVars(2, "codigo", ''));
	$ins_matriz->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$ins_matriz->setObservacion(Gral::getVars(2, "observacion", ''));
	$ins_matriz->setOrden(Gral::getVars(2, "orden", 0));
	$ins_matriz->setEstado(Gral::getVars(2, "estado", 0));
	$ins_matriz->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ins_matriz->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ins_matriz->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ins_matriz->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $ins_matriz->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ins_matriz/ins_matriz_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ins_matriz' width='90%'>
        
				<tr>
				  <td  id="label_ins_matriz_cmb_ins_marca_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_marca_id' ?>" >
				  
                                        <?php Lang::_lang('InsMarca', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_matriz_cmb_ins_marca_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_marca_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_matriz_cmb_ins_marca_id', Gral::getCmbFiltro(InsMarca::getInsMarcasCmb(), '...'), $ins_matriz->getInsMarcaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('INS_MATRIZ_ALTA_CMB_EDIT_INS_MARCA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ins_matriz_cmb_ins_marca_id" clase_id="ins_marca" prefijo='ins_matriz_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_marca_id" <?php echo ($ins_matriz->getInsMarcaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ins_matriz_cmb_ins_marca_id" clase_id="ins_marca" prefijo='ins_matriz_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ins_matriz_cmb_ins_marca_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ins_matriz_alta_ins_marca_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_matriz_alta_ins_marca_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_matriz_alta_ins_marca_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_matriz_alta_ins_marca_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_marca_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_matriz_txt_codigo_pieza" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo_pieza' ?>" >
				  
                                        <?php Lang::_lang('CodigoPieza', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_matriz_txt_codigo_pieza" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo_pieza')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_matriz_txt_codigo_pieza' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_matriz_txt_codigo_pieza' value='<?php Gral::_echoTxt($ins_matriz->getCodigoPieza(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_matriz_alta_codigo_pieza', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_matriz_alta_codigo_pieza', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_matriz_alta_codigo_pieza', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_matriz_alta_codigo_pieza', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo_pieza')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_matriz_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_matriz_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_matriz_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_matriz_txt_descripcion' value='<?php Gral::_echoTxt($ins_matriz->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_ins_matriz_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_matriz_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_matriz_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_matriz_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_matriz_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_matriz_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='ins_matriz_txa_observacion' rows='10' cols='50' id='ins_matriz_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($ins_matriz->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_ins_matriz_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_matriz_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_matriz_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_matriz_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ins_matriz->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ins_matriz_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ins_matriz'/>
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

