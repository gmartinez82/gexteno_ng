<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('EKU_DE_E400_G_DTIP_D_E_G_CAM_N_C_D_E_ALTA')){
    echo "No tiene asignada la credencial EKU_DE_E400_G_DTIP_D_E_G_CAM_N_C_D_E_ALTA. ";
    return false;
}

$db_nombre_objeto = 'eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e';
$db_nombre_pagina = 'eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_alta';

$eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e = new EkuDeE400GDtipDEGCamNCDE();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e = new EkuDeE400GDtipDEGCamNCDE();
	if(trim($hdn_id) != '') $eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->setId($hdn_id, false);
	$eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->setDescripcion(Gral::getVars(1, "eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_txt_descripcion"));
	$eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->setEkuDeId(Gral::getVars(1, "eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_cmb_eku_de_id", null));
	$eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->setEkuE401Imotemi(Gral::getVars(1, "eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_txt_eku_e401_imotemi"));
	$eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->setEkuE402Ddesmotemi(Gral::getVars(1, "eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_txt_eku_e402_ddesmotemi"));
	$eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->setCodigo(Gral::getVars(1, "eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_txt_codigo"));
	$eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->setObservacion(Gral::getVars(1, "eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_txa_observacion"));
	$eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->setOrden(Gral::getVars(1, "eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_txt_orden", 0));
	$eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->setEstado(Gral::getVars(1, "eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_cmb_estado", 0));
	$eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_txt_creado")));
	$eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->setCreadoPor(Gral::getVars(1, "eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e__creado_por", 0));
	$eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_txt_modificado")));
	$eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->setModificadoPor(Gral::getVars(1, "eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e__modificado_por", 0));

	$eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_estado = new EkuDeE400GDtipDEGCamNCDE();
	if(trim($hdn_id) != ''){
		$eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_estado->setId($hdn_id);
		$eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->setEstado($eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_estado->getEstado());
				
	}else{
		$eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->control();
			if(!$error->getExisteError()){
				$eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_alta.php?cs=1&id='.$eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getId());
			}
		break;
		case 'guardarnvo':
			$error = $eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->control();
			if(!$error->getExisteError()){
				$eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_alta.php?cs=1');
				$eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e = new EkuDeE400GDtipDEGCamNCDE();
			}
		break;
	}
	Gral::setSes('EkuDeE400GDtipDEGCamNCDE_ULTIMO_INSERTADO', $eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_id = Gral::getVars(2, $prefijo.'cmb_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_id', 0);
	if($cmb_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_id != 0){
		$eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e = EkuDeE400GDtipDEGCamNCDE::getOxId($cmb_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_id);
	}else{
	
	$eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
	$eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->setEkuE401Imotemi(Gral::getVars(2, "eku_e401_imotemi", ''));
	$eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->setEkuE402Ddesmotemi(Gral::getVars(2, "eku_e402_ddesmotemi", ''));
	$eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->setCodigo(Gral::getVars(2, "codigo", ''));
	$eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->setObservacion(Gral::getVars(2, "observacion", ''));
	$eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->setOrden(Gral::getVars(2, "orden", 0));
	$eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->setEstado(Gral::getVars(2, "estado", 0));
	$eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e/eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e' width='90%'>
        
				<tr>
				  <td  id="label_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_txt_descripcion' value='<?php Gral::_echoTxt($eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_cmb_eku_de_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >
				  
                                        <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_cmb_eku_de_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(), '...'), $eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getEkuDeId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_E400_G_DTIP_D_E_G_CAM_N_C_D_E_ALTA_CMB_EDIT_EKU_DE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_cmb_eku_de_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_txt_eku_e401_imotemi" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e401_imotemi' ?>" >
				  
                                        <?php Lang::_lang('eku_e401_imotemi', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_txt_eku_e401_imotemi" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e401_imotemi')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_txt_eku_e401_imotemi' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_txt_eku_e401_imotemi' value='<?php Gral::_echoTxt($eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getEkuE401Imotemi(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_alta_eku_e401_imotemi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_alta_eku_e401_imotemi', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_alta_eku_e401_imotemi', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_alta_eku_e401_imotemi', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e401_imotemi')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_txt_eku_e402_ddesmotemi" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e402_ddesmotemi' ?>" >
				  
                                        <?php Lang::_lang('eku_e402_ddesmotemi', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_txt_eku_e402_ddesmotemi" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e402_ddesmotemi')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_txt_eku_e402_ddesmotemi' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_txt_eku_e402_ddesmotemi' value='<?php Gral::_echoTxt($eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getEkuE402Ddesmotemi(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_alta_eku_e402_ddesmotemi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_alta_eku_e402_ddesmotemi', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_alta_eku_e402_ddesmotemi', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_alta_eku_e402_ddesmotemi', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e402_ddesmotemi')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_txt_codigo' value='<?php Gral::_echoTxt($eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getCodigo(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_txa_observacion' rows='10' cols='50' id='eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e'/>
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

