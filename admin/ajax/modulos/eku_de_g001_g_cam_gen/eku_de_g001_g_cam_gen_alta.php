<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('EKU_DE_G001_G_CAM_GEN_ALTA')){
    echo "No tiene asignada la credencial EKU_DE_G001_G_CAM_GEN_ALTA. ";
    return false;
}

$db_nombre_objeto = 'eku_de_g001_g_cam_gen';
$db_nombre_pagina = 'eku_de_g001_g_cam_gen_alta';

$eku_de_g001_g_cam_gen = new EkuDeG001GCamGen();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$eku_de_g001_g_cam_gen = new EkuDeG001GCamGen();
	if(trim($hdn_id) != '') $eku_de_g001_g_cam_gen->setId($hdn_id, false);
	$eku_de_g001_g_cam_gen->setDescripcion(Gral::getVars(1, "eku_de_g001_g_cam_gen_txt_descripcion"));
	$eku_de_g001_g_cam_gen->setEkuDeId(Gral::getVars(1, "eku_de_g001_g_cam_gen_cmb_eku_de_id", null));
	$eku_de_g001_g_cam_gen->setEkuG002Dordcompra(Gral::getVars(1, "eku_de_g001_g_cam_gen_txt_eku_g002_dordcompra"));
	$eku_de_g001_g_cam_gen->setEkuG003Dordvta(Gral::getVars(1, "eku_de_g001_g_cam_gen_txt_eku_g003_dordvta"));
	$eku_de_g001_g_cam_gen->setEkuG004Dasiento(Gral::getVars(1, "eku_de_g001_g_cam_gen_txt_eku_g004_dasiento"));
	$eku_de_g001_g_cam_gen->setCodigo(Gral::getVars(1, "eku_de_g001_g_cam_gen_txt_codigo"));
	$eku_de_g001_g_cam_gen->setObservacion(Gral::getVars(1, "eku_de_g001_g_cam_gen_txa_observacion"));
	$eku_de_g001_g_cam_gen->setOrden(Gral::getVars(1, "eku_de_g001_g_cam_gen_txt_orden", 0));
	$eku_de_g001_g_cam_gen->setEstado(Gral::getVars(1, "eku_de_g001_g_cam_gen_cmb_estado", 0));
	$eku_de_g001_g_cam_gen->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_g001_g_cam_gen_txt_creado")));
	$eku_de_g001_g_cam_gen->setCreadoPor(Gral::getVars(1, "eku_de_g001_g_cam_gen__creado_por", 0));
	$eku_de_g001_g_cam_gen->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_g001_g_cam_gen_txt_modificado")));
	$eku_de_g001_g_cam_gen->setModificadoPor(Gral::getVars(1, "eku_de_g001_g_cam_gen__modificado_por", 0));

	$eku_de_g001_g_cam_gen_estado = new EkuDeG001GCamGen();
	if(trim($hdn_id) != ''){
		$eku_de_g001_g_cam_gen_estado->setId($hdn_id);
		$eku_de_g001_g_cam_gen->setEstado($eku_de_g001_g_cam_gen_estado->getEstado());
				
	}else{
		$eku_de_g001_g_cam_gen->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $eku_de_g001_g_cam_gen->control();
			if(!$error->getExisteError()){
				$eku_de_g001_g_cam_gen->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: eku_de_g001_g_cam_gen_alta.php?cs=1&id='.$eku_de_g001_g_cam_gen->getId());
			}
		break;
		case 'guardarnvo':
			$error = $eku_de_g001_g_cam_gen->control();
			if(!$error->getExisteError()){
				$eku_de_g001_g_cam_gen->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: eku_de_g001_g_cam_gen_alta.php?cs=1');
				$eku_de_g001_g_cam_gen = new EkuDeG001GCamGen();
			}
		break;
	}
	Gral::setSes('EkuDeG001GCamGen_ULTIMO_INSERTADO', $eku_de_g001_g_cam_gen->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_eku_de_g001_g_cam_gen_id = Gral::getVars(2, $prefijo.'cmb_eku_de_g001_g_cam_gen_id', 0);
	if($cmb_eku_de_g001_g_cam_gen_id != 0){
		$eku_de_g001_g_cam_gen = EkuDeG001GCamGen::getOxId($cmb_eku_de_g001_g_cam_gen_id);
	}else{
	
	$eku_de_g001_g_cam_gen->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$eku_de_g001_g_cam_gen->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
	$eku_de_g001_g_cam_gen->setEkuG002Dordcompra(Gral::getVars(2, "eku_g002_dordcompra", ''));
	$eku_de_g001_g_cam_gen->setEkuG003Dordvta(Gral::getVars(2, "eku_g003_dordvta", ''));
	$eku_de_g001_g_cam_gen->setEkuG004Dasiento(Gral::getVars(2, "eku_g004_dasiento", ''));
	$eku_de_g001_g_cam_gen->setCodigo(Gral::getVars(2, "codigo", ''));
	$eku_de_g001_g_cam_gen->setObservacion(Gral::getVars(2, "observacion", ''));
	$eku_de_g001_g_cam_gen->setOrden(Gral::getVars(2, "orden", 0));
	$eku_de_g001_g_cam_gen->setEstado(Gral::getVars(2, "estado", 0));
	$eku_de_g001_g_cam_gen->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$eku_de_g001_g_cam_gen->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$eku_de_g001_g_cam_gen->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$eku_de_g001_g_cam_gen->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $eku_de_g001_g_cam_gen->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/eku_de_g001_g_cam_gen/eku_de_g001_g_cam_gen_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_eku_de_g001_g_cam_gen' width='90%'>
        
				<tr>
				  <td  id="label_eku_de_g001_g_cam_gen_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_g001_g_cam_gen_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_g001_g_cam_gen_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_g001_g_cam_gen_txt_descripcion' value='<?php Gral::_echoTxt($eku_de_g001_g_cam_gen->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_g001_g_cam_gen_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_g001_g_cam_gen_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_g001_g_cam_gen_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_g001_g_cam_gen_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_g001_g_cam_gen_cmb_eku_de_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >
				  
                                        <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_g001_g_cam_gen_cmb_eku_de_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_de_g001_g_cam_gen_cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(), '...'), $eku_de_g001_g_cam_gen->getEkuDeId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_G001_G_CAM_GEN_ALTA_CMB_EDIT_EKU_DE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="eku_de_g001_g_cam_gen_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_g001_g_cam_gen_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_g001_g_cam_gen->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="eku_de_g001_g_cam_gen_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_g001_g_cam_gen_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_eku_de_g001_g_cam_gen_cmb_eku_de_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_eku_de_g001_g_cam_gen_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_g001_g_cam_gen_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_g001_g_cam_gen_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_g001_g_cam_gen_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_g001_g_cam_gen_txt_eku_g002_dordcompra" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_g002_dordcompra' ?>" >
				  
                                        <?php Lang::_lang('eku_g002_dordcompra', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_g001_g_cam_gen_txt_eku_g002_dordcompra" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_g002_dordcompra')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_g001_g_cam_gen_txt_eku_g002_dordcompra' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_g001_g_cam_gen_txt_eku_g002_dordcompra' value='<?php Gral::_echoTxt($eku_de_g001_g_cam_gen->getEkuG002Dordcompra(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_g001_g_cam_gen_alta_eku_g002_dordcompra', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_g001_g_cam_gen_alta_eku_g002_dordcompra', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_g001_g_cam_gen_alta_eku_g002_dordcompra', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_g001_g_cam_gen_alta_eku_g002_dordcompra', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_g002_dordcompra')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_g001_g_cam_gen_txt_eku_g003_dordvta" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_g003_dordvta' ?>" >
				  
                                        <?php Lang::_lang('eku_g003_dordvta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_g001_g_cam_gen_txt_eku_g003_dordvta" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_g003_dordvta')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_g001_g_cam_gen_txt_eku_g003_dordvta' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_g001_g_cam_gen_txt_eku_g003_dordvta' value='<?php Gral::_echoTxt($eku_de_g001_g_cam_gen->getEkuG003Dordvta(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_g001_g_cam_gen_alta_eku_g003_dordvta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_g001_g_cam_gen_alta_eku_g003_dordvta', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_g001_g_cam_gen_alta_eku_g003_dordvta', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_g001_g_cam_gen_alta_eku_g003_dordvta', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_g003_dordvta')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_g001_g_cam_gen_txt_eku_g004_dasiento" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_g004_dasiento' ?>" >
				  
                                        <?php Lang::_lang('eku_g004_dasiento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_g001_g_cam_gen_txt_eku_g004_dasiento" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_g004_dasiento')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_g001_g_cam_gen_txt_eku_g004_dasiento' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_g001_g_cam_gen_txt_eku_g004_dasiento' value='<?php Gral::_echoTxt($eku_de_g001_g_cam_gen->getEkuG004Dasiento(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_g001_g_cam_gen_alta_eku_g004_dasiento', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_g001_g_cam_gen_alta_eku_g004_dasiento', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_g001_g_cam_gen_alta_eku_g004_dasiento', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_g001_g_cam_gen_alta_eku_g004_dasiento', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_g004_dasiento')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_g001_g_cam_gen_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_g001_g_cam_gen_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_g001_g_cam_gen_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_g001_g_cam_gen_txt_codigo' value='<?php Gral::_echoTxt($eku_de_g001_g_cam_gen->getCodigo(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_g001_g_cam_gen_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_g001_g_cam_gen_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_g001_g_cam_gen_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_g001_g_cam_gen_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_g001_g_cam_gen_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_g001_g_cam_gen_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='eku_de_g001_g_cam_gen_txa_observacion' rows='10' cols='50' id='eku_de_g001_g_cam_gen_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($eku_de_g001_g_cam_gen->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_eku_de_g001_g_cam_gen_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_g001_g_cam_gen_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_g001_g_cam_gen_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_g001_g_cam_gen_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_g001_g_cam_gen->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_eku_de_g001_g_cam_gen_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='eku_de_g001_g_cam_gen'/>
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

