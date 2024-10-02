<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('EKU_DE_E620_G_DTIP_D_E_G_CAM_COND_G_PAG_TAR_C_D_ALTA')){
    echo "No tiene asignada la credencial EKU_DE_E620_G_DTIP_D_E_G_CAM_COND_G_PAG_TAR_C_D_ALTA. ";
    return false;
}

$db_nombre_objeto = 'eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d';
$db_nombre_pagina = 'eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta';

$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d = new EkuDeE620GDtipDEGCamCondGPagTarCD();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d = new EkuDeE620GDtipDEGCamCondGPagTarCD();
	if(trim($hdn_id) != '') $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setId($hdn_id, false);
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setDescripcion(Gral::getVars(1, "eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_descripcion"));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuDeId(Gral::getVars(1, "eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_cmb_eku_de_id", null));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE621Identarj(Gral::getVars(1, "eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e621_identarj"));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE622Ddesdentarj(Gral::getVars(1, "eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e622_ddesdentarj"));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE623Drsprotar(Gral::getVars(1, "eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e623_drsprotar"));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE624Drucprotar(Gral::getVars(1, "eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e624_drucprotar"));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE625Ddvprotar(Gral::getVars(1, "eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e625_ddvprotar"));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE626Iforpropa(Gral::getVars(1, "eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e626_iforpropa"));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE627Dcodauope(Gral::getVars(1, "eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e627_dcodauope"));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE628Dnomtit(Gral::getVars(1, "eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e628_dnomtit"));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE629Dnumtarj(Gral::getVars(1, "eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e629_dnumtarj"));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setCodigo(Gral::getVars(1, "eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_codigo"));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setObservacion(Gral::getVars(1, "eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txa_observacion"));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setOrden(Gral::getVars(1, "eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_orden", 0));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEstado(Gral::getVars(1, "eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_cmb_estado", 0));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_creado")));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setCreadoPor(Gral::getVars(1, "eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d__creado_por", 0));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_modificado")));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setModificadoPor(Gral::getVars(1, "eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d__modificado_por", 0));

	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_estado = new EkuDeE620GDtipDEGCamCondGPagTarCD();
	if(trim($hdn_id) != ''){
		$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_estado->setId($hdn_id);
		$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEstado($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_estado->getEstado());
				
	}else{
		$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->control();
			if(!$error->getExisteError()){
				$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta.php?cs=1&id='.$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getId());
			}
		break;
		case 'guardarnvo':
			$error = $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->control();
			if(!$error->getExisteError()){
				$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta.php?cs=1');
				$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d = new EkuDeE620GDtipDEGCamCondGPagTarCD();
			}
		break;
	}
	Gral::setSes('EkuDeE620GDtipDEGCamCondGPagTarCD_ULTIMO_INSERTADO', $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_id = Gral::getVars(2, $prefijo.'cmb_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_id', 0);
	if($cmb_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_id != 0){
		$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d = EkuDeE620GDtipDEGCamCondGPagTarCD::getOxId($cmb_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_id);
	}else{
	
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE621Identarj(Gral::getVars(2, "eku_e621_identarj", ''));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE622Ddesdentarj(Gral::getVars(2, "eku_e622_ddesdentarj", ''));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE623Drsprotar(Gral::getVars(2, "eku_e623_drsprotar", ''));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE624Drucprotar(Gral::getVars(2, "eku_e624_drucprotar", ''));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE625Ddvprotar(Gral::getVars(2, "eku_e625_ddvprotar", ''));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE626Iforpropa(Gral::getVars(2, "eku_e626_iforpropa", ''));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE627Dcodauope(Gral::getVars(2, "eku_e627_dcodauope", ''));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE628Dnomtit(Gral::getVars(2, "eku_e628_dnomtit", ''));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE629Dnumtarj(Gral::getVars(2, "eku_e629_dnumtarj", ''));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setCodigo(Gral::getVars(2, "codigo", ''));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setObservacion(Gral::getVars(2, "observacion", ''));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setOrden(Gral::getVars(2, "orden", 0));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEstado(Gral::getVars(2, "estado", 0));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d' width='90%'>
        
				<tr>
				  <td  id="label_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_descripcion' value='<?php Gral::_echoTxt($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_cmb_eku_de_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >
				  
                                        <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_cmb_eku_de_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(), '...'), $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuDeId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_E620_G_DTIP_D_E_G_CAM_COND_G_PAG_TAR_C_D_ALTA_CMB_EDIT_EKU_DE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_cmb_eku_de_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e621_identarj" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e621_identarj' ?>" >
				  
                                        <?php Lang::_lang('eku_e621_identarj', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e621_identarj" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e621_identarj')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e621_identarj' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e621_identarj' value='<?php Gral::_echoTxt($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE621Identarj(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_e621_identarj', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_e621_identarj', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_e621_identarj', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_e621_identarj', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e621_identarj')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e622_ddesdentarj" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e622_ddesdentarj' ?>" >
				  
                                        <?php Lang::_lang('eku_e622_ddesdentarj', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e622_ddesdentarj" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e622_ddesdentarj')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e622_ddesdentarj' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e622_ddesdentarj' value='<?php Gral::_echoTxt($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE622Ddesdentarj(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_e622_ddesdentarj', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_e622_ddesdentarj', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_e622_ddesdentarj', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_e622_ddesdentarj', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e622_ddesdentarj')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e623_drsprotar" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e623_drsprotar' ?>" >
				  
                                        <?php Lang::_lang('eku_e623_drsprotar', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e623_drsprotar" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e623_drsprotar')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e623_drsprotar' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e623_drsprotar' value='<?php Gral::_echoTxt($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE623Drsprotar(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_e623_drsprotar', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_e623_drsprotar', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_e623_drsprotar', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_e623_drsprotar', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e623_drsprotar')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e624_drucprotar" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e624_drucprotar' ?>" >
				  
                                        <?php Lang::_lang('eku_e624_drucprotar', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e624_drucprotar" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e624_drucprotar')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e624_drucprotar' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e624_drucprotar' value='<?php Gral::_echoTxt($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE624Drucprotar(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_e624_drucprotar', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_e624_drucprotar', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_e624_drucprotar', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_e624_drucprotar', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e624_drucprotar')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e625_ddvprotar" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e625_ddvprotar' ?>" >
				  
                                        <?php Lang::_lang('eku_e625_ddvprotar', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e625_ddvprotar" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e625_ddvprotar')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e625_ddvprotar' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e625_ddvprotar' value='<?php Gral::_echoTxt($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE625Ddvprotar(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_e625_ddvprotar', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_e625_ddvprotar', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_e625_ddvprotar', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_e625_ddvprotar', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e625_ddvprotar')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e626_iforpropa" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e626_iforpropa' ?>" >
				  
                                        <?php Lang::_lang('eku_e626_iforpropa', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e626_iforpropa" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e626_iforpropa')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e626_iforpropa' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e626_iforpropa' value='<?php Gral::_echoTxt($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE626Iforpropa(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_e626_iforpropa', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_e626_iforpropa', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_e626_iforpropa', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_e626_iforpropa', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e626_iforpropa')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e627_dcodauope" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e627_dcodauope' ?>" >
				  
                                        <?php Lang::_lang('eku_e627_dcodauope', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e627_dcodauope" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e627_dcodauope')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e627_dcodauope' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e627_dcodauope' value='<?php Gral::_echoTxt($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE627Dcodauope(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_e627_dcodauope', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_e627_dcodauope', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_e627_dcodauope', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_e627_dcodauope', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e627_dcodauope')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e628_dnomtit" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e628_dnomtit' ?>" >
				  
                                        <?php Lang::_lang('eku_e628_dnomtit', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e628_dnomtit" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e628_dnomtit')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e628_dnomtit' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e628_dnomtit' value='<?php Gral::_echoTxt($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE628Dnomtit(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_e628_dnomtit', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_e628_dnomtit', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_e628_dnomtit', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_e628_dnomtit', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e628_dnomtit')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e629_dnumtarj" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e629_dnumtarj' ?>" >
				  
                                        <?php Lang::_lang('eku_e629_dnumtarj', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e629_dnumtarj" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e629_dnumtarj')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e629_dnumtarj' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_eku_e629_dnumtarj' value='<?php Gral::_echoTxt($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE629Dnumtarj(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_e629_dnumtarj', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_e629_dnumtarj', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_e629_dnumtarj', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_eku_e629_dnumtarj', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e629_dnumtarj')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txt_codigo' value='<?php Gral::_echoTxt($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getCodigo(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txa_observacion' rows='10' cols='50' id='eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d'/>
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

