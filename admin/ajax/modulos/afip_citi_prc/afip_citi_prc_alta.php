<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('AFIP_CITI_PRC_ALTA')){
    echo "No tiene asignada la credencial AFIP_CITI_PRC_ALTA. ";
    return false;
}

$db_nombre_objeto = 'afip_citi_prc';
$db_nombre_pagina = 'afip_citi_prc_alta';

$afip_citi_prc = new AfipCitiPrc();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$afip_citi_prc = new AfipCitiPrc();
	if(trim($hdn_id) != '') $afip_citi_prc->setId($hdn_id, false);
	$afip_citi_prc->setDescripcion(Gral::getVars(1, "afip_citi_prc_txt_descripcion"));
	$afip_citi_prc->setCodigo(Gral::getVars(1, "afip_citi_prc_txt_codigo"));
	$afip_citi_prc->setGralEmpresaId(Gral::getVars(1, "afip_citi_prc_cmb_gral_empresa_id", null));
	$afip_citi_prc->setAnio(Gral::getVars(1, "afip_citi_prc_txt_anio", 0));
	$afip_citi_prc->setGralMesId(Gral::getVars(1, "afip_citi_prc_cmb_gral_mes_id", null));
	$afip_citi_prc->setObservacion(Gral::getVars(1, "afip_citi_prc_txa_observacion"));
	$afip_citi_prc->setOrden(Gral::getVars(1, "afip_citi_prc_txt_orden", 0));
	$afip_citi_prc->setEstado(Gral::getVars(1, "afip_citi_prc__estado", 0));
	$afip_citi_prc->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "afip_citi_prc_txt_creado")));
	$afip_citi_prc->setCreadoPor(Gral::getVars(1, "afip_citi_prc__creado_por", null));
	$afip_citi_prc->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "afip_citi_prc_txt_modificado")));
	$afip_citi_prc->setModificadoPor(Gral::getVars(1, "afip_citi_prc__modificado_por", null));

	$afip_citi_prc_estado = new AfipCitiPrc();
	if(trim($hdn_id) != ''){
		$afip_citi_prc_estado->setId($hdn_id);
		$afip_citi_prc->setEstado($afip_citi_prc_estado->getEstado());
				
	}else{
		$afip_citi_prc->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $afip_citi_prc->control();
			if(!$error->getExisteError()){
				$afip_citi_prc->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: afip_citi_prc_alta.php?cs=1&id='.$afip_citi_prc->getId());
			}
		break;
		case 'guardarnvo':
			$error = $afip_citi_prc->control();
			if(!$error->getExisteError()){
				$afip_citi_prc->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: afip_citi_prc_alta.php?cs=1');
				$afip_citi_prc = new AfipCitiPrc();
			}
		break;
	}
	Gral::setSes('AfipCitiPrc_ULTIMO_INSERTADO', $afip_citi_prc->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_afip_citi_prc_id = Gral::getVars(2, $prefijo.'cmb_afip_citi_prc_id', 0);
	if($cmb_afip_citi_prc_id != 0){
		$afip_citi_prc = AfipCitiPrc::getOxId($cmb_afip_citi_prc_id);
	}else{
	
	$afip_citi_prc->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$afip_citi_prc->setCodigo(Gral::getVars(2, "codigo", ''));
	$afip_citi_prc->setGralEmpresaId(Gral::getVars(2, "gral_empresa_id", 'null'));
	$afip_citi_prc->setAnio(Gral::getVars(2, "anio", 0));
	$afip_citi_prc->setGralMesId(Gral::getVars(2, "gral_mes_id", 'null'));
	$afip_citi_prc->setObservacion(Gral::getVars(2, "observacion", ''));
	$afip_citi_prc->setOrden(Gral::getVars(2, "orden", 0));
	$afip_citi_prc->setEstado(Gral::getVars(2, "estado", 0));
	$afip_citi_prc->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$afip_citi_prc->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$afip_citi_prc->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$afip_citi_prc->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $afip_citi_prc->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/afip_citi_prc/afip_citi_prc_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_afip_citi_prc' width='90%'>
        
				<tr>
				  <td  id="label_afip_citi_prc_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_afip_citi_prc_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='afip_citi_prc_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='afip_citi_prc_txt_descripcion' value='<?php Gral::_echoTxt($afip_citi_prc->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_afip_citi_prc_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_afip_citi_prc_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_afip_citi_prc_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_afip_citi_prc_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_afip_citi_prc_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_afip_citi_prc_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='afip_citi_prc_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='afip_citi_prc_txt_codigo' value='<?php Gral::_echoTxt($afip_citi_prc->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_afip_citi_prc_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_afip_citi_prc_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_afip_citi_prc_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_afip_citi_prc_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_afip_citi_prc_cmb_gral_empresa_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_empresa_id' ?>" >
				  
                                        <?php Lang::_lang('GralEmpresa', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_afip_citi_prc_cmb_gral_empresa_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_empresa_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'afip_citi_prc_cmb_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(), '...'), $afip_citi_prc->getGralEmpresaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_PRC_ALTA_CMB_EDIT_GRAL_EMPRESA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="afip_citi_prc_cmb_gral_empresa_id" clase_id="gral_empresa" prefijo='afip_citi_prc_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_empresa_id" <?php echo ($afip_citi_prc->getGralEmpresaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="afip_citi_prc_cmb_gral_empresa_id" clase_id="gral_empresa" prefijo='afip_citi_prc_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_afip_citi_prc_cmb_gral_empresa_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_afip_citi_prc_alta_gral_empresa_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_afip_citi_prc_alta_gral_empresa_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_afip_citi_prc_alta_gral_empresa_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_afip_citi_prc_alta_gral_empresa_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_empresa_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_afip_citi_prc_txt_anio" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_anio' ?>" >
				  
                                        <?php Lang::_lang('Anio', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_afip_citi_prc_txt_anio" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('anio')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='afip_citi_prc_txt_anio' type='text' class='textbox <?php echo $error_input_css ?> ' id='afip_citi_prc_txt_anio' value='<?php Gral::_echoTxt($afip_citi_prc->getAnio(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_afip_citi_prc_alta_anio', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_afip_citi_prc_alta_anio', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_afip_citi_prc_alta_anio', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_afip_citi_prc_alta_anio', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('anio')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_afip_citi_prc_cmb_gral_mes_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_mes_id' ?>" >
				  
                                        <?php Lang::_lang('GralMes', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_afip_citi_prc_cmb_gral_mes_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_mes_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'afip_citi_prc_cmb_gral_mes_id', Gral::getCmbFiltro(GralMes::getGralMessCmb(), '...'), $afip_citi_prc->getGralMesId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_PRC_ALTA_CMB_EDIT_GRAL_MES')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="afip_citi_prc_cmb_gral_mes_id" clase_id="gral_mes" prefijo='afip_citi_prc_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_mes_id" <?php echo ($afip_citi_prc->getGralMesId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="afip_citi_prc_cmb_gral_mes_id" clase_id="gral_mes" prefijo='afip_citi_prc_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_afip_citi_prc_cmb_gral_mes_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_afip_citi_prc_alta_gral_mes_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_afip_citi_prc_alta_gral_mes_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_afip_citi_prc_alta_gral_mes_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_afip_citi_prc_alta_gral_mes_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_mes_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_afip_citi_prc_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_afip_citi_prc_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='afip_citi_prc_txa_observacion' rows='10' cols='50' id='afip_citi_prc_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($afip_citi_prc->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_afip_citi_prc_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_afip_citi_prc_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_afip_citi_prc_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_afip_citi_prc_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($afip_citi_prc->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_afip_citi_prc_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='afip_citi_prc'/>
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

