<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PRD_LINEA_PRODUCCION_ALTA')){
    echo "No tiene asignada la credencial PRD_LINEA_PRODUCCION_ALTA. ";
    return false;
}

$db_nombre_objeto = 'prd_linea_produccion';
$db_nombre_pagina = 'prd_linea_produccion_alta';

$prd_linea_produccion = new PrdLineaProduccion();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$prd_linea_produccion = new PrdLineaProduccion();
	if(trim($hdn_id) != '') $prd_linea_produccion->setId($hdn_id, false);
	$prd_linea_produccion->setDescripcion(Gral::getVars(1, "prd_linea_produccion_txt_descripcion"));
	$prd_linea_produccion->setDescripcionCorta(Gral::getVars(1, "prd_linea_produccion_txt_descripcion_corta"));
	$prd_linea_produccion->setPrdProcesoProductivoId(Gral::getVars(1, "prd_linea_produccion_cmb_prd_proceso_productivo_id", null));
	$prd_linea_produccion->setNumero(Gral::getVars(1, "prd_linea_produccion_txt_numero", 0));
	$prd_linea_produccion->setCodigo(Gral::getVars(1, "prd_linea_produccion_txt_codigo"));
	$prd_linea_produccion->setObservacion(Gral::getVars(1, "prd_linea_produccion_txa_observacion"));
	$prd_linea_produccion->setOrden(Gral::getVars(1, "prd_linea_produccion_txt_orden", 0));
	$prd_linea_produccion->setEstado(Gral::getVars(1, "prd_linea_produccion_cmb_estado", 0));
	$prd_linea_produccion->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "prd_linea_produccion_txt_creado")));
	$prd_linea_produccion->setCreadoPor(Gral::getVars(1, "prd_linea_produccion__creado_por", 0));
	$prd_linea_produccion->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "prd_linea_produccion_txt_modificado")));
	$prd_linea_produccion->setModificadoPor(Gral::getVars(1, "prd_linea_produccion__modificado_por", 0));

	$prd_linea_produccion_estado = new PrdLineaProduccion();
	if(trim($hdn_id) != ''){
		$prd_linea_produccion_estado->setId($hdn_id);
		$prd_linea_produccion->setEstado($prd_linea_produccion_estado->getEstado());
				
	}else{
		$prd_linea_produccion->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $prd_linea_produccion->control();
			if(!$error->getExisteError()){
				$prd_linea_produccion->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: prd_linea_produccion_alta.php?cs=1&id='.$prd_linea_produccion->getId());
			}
		break;
		case 'guardarnvo':
			$error = $prd_linea_produccion->control();
			if(!$error->getExisteError()){
				$prd_linea_produccion->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: prd_linea_produccion_alta.php?cs=1');
				$prd_linea_produccion = new PrdLineaProduccion();
			}
		break;
	}
	Gral::setSes('PrdLineaProduccion_ULTIMO_INSERTADO', $prd_linea_produccion->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_prd_linea_produccion_id = Gral::getVars(2, $prefijo.'cmb_prd_linea_produccion_id', 0);
	if($cmb_prd_linea_produccion_id != 0){
		$prd_linea_produccion = PrdLineaProduccion::getOxId($cmb_prd_linea_produccion_id);
	}else{
	
	$prd_linea_produccion->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$prd_linea_produccion->setDescripcionCorta(Gral::getVars(2, "descripcion_corta", ''));
	$prd_linea_produccion->setPrdProcesoProductivoId(Gral::getVars(2, "prd_proceso_productivo_id", 'null'));
	$prd_linea_produccion->setNumero(Gral::getVars(2, "numero", 0));
	$prd_linea_produccion->setCodigo(Gral::getVars(2, "codigo", ''));
	$prd_linea_produccion->setObservacion(Gral::getVars(2, "observacion", ''));
	$prd_linea_produccion->setOrden(Gral::getVars(2, "orden", 0));
	$prd_linea_produccion->setEstado(Gral::getVars(2, "estado", 0));
	$prd_linea_produccion->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$prd_linea_produccion->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$prd_linea_produccion->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$prd_linea_produccion->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $prd_linea_produccion->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/prd_linea_produccion/prd_linea_produccion_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_prd_linea_produccion' width='90%'>
        
				<tr>
				  <td  id="label_prd_linea_produccion_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_linea_produccion_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prd_linea_produccion_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='prd_linea_produccion_txt_descripcion' value='<?php Gral::_echoTxt($prd_linea_produccion->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_prd_linea_produccion_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_linea_produccion_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_linea_produccion_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_linea_produccion_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_linea_produccion_txt_descripcion_corta" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion_corta' ?>" >
				  
                                        <?php Lang::_lang('Descripcion Corta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_linea_produccion_txt_descripcion_corta" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion_corta')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prd_linea_produccion_txt_descripcion_corta' type='text' class='textbox <?php echo $error_input_css ?> ' id='prd_linea_produccion_txt_descripcion_corta' value='<?php Gral::_echoTxt($prd_linea_produccion->getDescripcionCorta(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_prd_linea_produccion_alta_descripcion_corta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_linea_produccion_alta_descripcion_corta', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_linea_produccion_alta_descripcion_corta', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_linea_produccion_alta_descripcion_corta', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion_corta')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_linea_produccion_cmb_prd_proceso_productivo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prd_proceso_productivo_id' ?>" >
				  
                                        <?php Lang::_lang('PrdProcesoProductivo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_linea_produccion_cmb_prd_proceso_productivo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prd_proceso_productivo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prd_linea_produccion_cmb_prd_proceso_productivo_id', Gral::getCmbFiltro(PrdProcesoProductivo::getPrdProcesoProductivosCmb(), '...'), $prd_linea_produccion->getPrdProcesoProductivoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PRD_LINEA_PRODUCCION_ALTA_CMB_EDIT_PRD_PROCESO_PRODUCTIVO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="prd_linea_produccion_cmb_prd_proceso_productivo_id" clase_id="prd_proceso_productivo" prefijo='prd_linea_produccion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prd_proceso_productivo_id" <?php echo ($prd_linea_produccion->getPrdProcesoProductivoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="prd_linea_produccion_cmb_prd_proceso_productivo_id" clase_id="prd_proceso_productivo" prefijo='prd_linea_produccion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_prd_linea_produccion_cmb_prd_proceso_productivo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_prd_linea_produccion_alta_prd_proceso_productivo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_linea_produccion_alta_prd_proceso_productivo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_linea_produccion_alta_prd_proceso_productivo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_linea_produccion_alta_prd_proceso_productivo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prd_proceso_productivo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_linea_produccion_txt_numero" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_numero' ?>" >
				  
                                        <?php Lang::_lang('Numero', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_linea_produccion_txt_numero" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('numero')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prd_linea_produccion_txt_numero' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='prd_linea_produccion_txt_numero' value='<?php Gral::_echoTxt($prd_linea_produccion->getNumero(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prd_linea_produccion_alta_numero', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_linea_produccion_alta_numero', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_linea_produccion_alta_numero', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_linea_produccion_alta_numero', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('numero')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_linea_produccion_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_linea_produccion_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prd_linea_produccion_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='prd_linea_produccion_txt_codigo' value='<?php Gral::_echoTxt($prd_linea_produccion->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prd_linea_produccion_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_linea_produccion_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_linea_produccion_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_linea_produccion_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_linea_produccion_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_linea_produccion_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='prd_linea_produccion_txa_observacion' rows='10' cols='50' id='prd_linea_produccion_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($prd_linea_produccion->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_prd_linea_produccion_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_linea_produccion_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_linea_produccion_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_linea_produccion_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($prd_linea_produccion->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_prd_linea_produccion_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='prd_linea_produccion'/>
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

