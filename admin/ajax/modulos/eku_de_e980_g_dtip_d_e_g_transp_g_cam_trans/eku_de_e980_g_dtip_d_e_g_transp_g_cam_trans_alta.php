<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('EKU_DE_E980_G_DTIP_D_E_G_TRANSP_G_CAM_TRANS_ALTA')){
    echo "No tiene asignada la credencial EKU_DE_E980_G_DTIP_D_E_G_TRANSP_G_CAM_TRANS_ALTA. ";
    return false;
}

$db_nombre_objeto = 'eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans';
$db_nombre_pagina = 'eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta';

$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans = new EkuDeE980GDtipDEGTranspGCamTrans();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans = new EkuDeE980GDtipDEGTranspGCamTrans();
	if(trim($hdn_id) != '') $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setId($hdn_id, false);
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setDescripcion(Gral::getVars(1, "eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_descripcion"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuDeId(Gral::getVars(1, "eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_cmb_eku_de_id", null));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE981Inattrans(Gral::getVars(1, "eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e981_inattrans"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE982Dnomtrans(Gral::getVars(1, "eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e982_dnomtrans"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE983Dructrans(Gral::getVars(1, "eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e983_dructrans"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE984Ddvtrans(Gral::getVars(1, "eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e984_ddvtrans"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE985Itipidtrans(Gral::getVars(1, "eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e985_itipidtrans"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE986Ddtipidtrans(Gral::getVars(1, "eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e986_ddtipidtrans"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE987Dnumidtrans(Gral::getVars(1, "eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e987_dnumidtrans"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE988Cnactrans(Gral::getVars(1, "eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e988_cnactrans"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE989Ddesnactrans(Gral::getVars(1, "eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e989_ddesnactrans"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE990Dnumidchof(Gral::getVars(1, "eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e990_dnumidchof"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE991Dnomchof(Gral::getVars(1, "eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e991_dnomchof"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE992Ddomfisc(Gral::getVars(1, "eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e992_ddomfisc"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE993Ddirchof(Gral::getVars(1, "eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e993_ddirchof"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE994Dnombag(Gral::getVars(1, "eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e994_dnombag"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE995Drucag(Gral::getVars(1, "eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e995_drucag"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE996Ddvag(Gral::getVars(1, "eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e996_ddvag"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE997Ddirage(Gral::getVars(1, "eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e997_ddirage"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setCodigo(Gral::getVars(1, "eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_codigo"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setObservacion(Gral::getVars(1, "eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txa_observacion"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setOrden(Gral::getVars(1, "eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_orden", 0));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEstado(Gral::getVars(1, "eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_cmb_estado", 0));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_creado")));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setCreadoPor(Gral::getVars(1, "eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans__creado_por", 0));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_modificado")));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setModificadoPor(Gral::getVars(1, "eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans__modificado_por", 0));

	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_estado = new EkuDeE980GDtipDEGTranspGCamTrans();
	if(trim($hdn_id) != ''){
		$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_estado->setId($hdn_id);
		$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEstado($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_estado->getEstado());
				
	}else{
		$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->control();
			if(!$error->getExisteError()){
				$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta.php?cs=1&id='.$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getId());
			}
		break;
		case 'guardarnvo':
			$error = $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->control();
			if(!$error->getExisteError()){
				$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta.php?cs=1');
				$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans = new EkuDeE980GDtipDEGTranspGCamTrans();
			}
		break;
	}
	Gral::setSes('EkuDeE980GDtipDEGTranspGCamTrans_ULTIMO_INSERTADO', $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_id = Gral::getVars(2, $prefijo.'cmb_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_id', 0);
	if($cmb_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_id != 0){
		$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans = EkuDeE980GDtipDEGTranspGCamTrans::getOxId($cmb_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_id);
	}else{
	
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE981Inattrans(Gral::getVars(2, "eku_e981_inattrans", ''));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE982Dnomtrans(Gral::getVars(2, "eku_e982_dnomtrans", ''));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE983Dructrans(Gral::getVars(2, "eku_e983_dructrans", ''));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE984Ddvtrans(Gral::getVars(2, "eku_e984_ddvtrans", ''));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE985Itipidtrans(Gral::getVars(2, "eku_e985_itipidtrans", ''));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE986Ddtipidtrans(Gral::getVars(2, "eku_e986_ddtipidtrans", ''));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE987Dnumidtrans(Gral::getVars(2, "eku_e987_dnumidtrans", ''));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE988Cnactrans(Gral::getVars(2, "eku_e988_cnactrans", ''));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE989Ddesnactrans(Gral::getVars(2, "eku_e989_ddesnactrans", ''));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE990Dnumidchof(Gral::getVars(2, "eku_e990_dnumidchof", ''));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE991Dnomchof(Gral::getVars(2, "eku_e991_dnomchof", ''));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE992Ddomfisc(Gral::getVars(2, "eku_e992_ddomfisc", ''));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE993Ddirchof(Gral::getVars(2, "eku_e993_ddirchof", ''));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE994Dnombag(Gral::getVars(2, "eku_e994_dnombag", ''));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE995Drucag(Gral::getVars(2, "eku_e995_drucag", ''));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE996Ddvag(Gral::getVars(2, "eku_e996_ddvag", ''));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE997Ddirage(Gral::getVars(2, "eku_e997_ddirage", ''));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setCodigo(Gral::getVars(2, "codigo", ''));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setObservacion(Gral::getVars(2, "observacion", ''));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setOrden(Gral::getVars(2, "orden", 0));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEstado(Gral::getVars(2, "estado", 0));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans' width='90%'>
        
				<tr>
				  <td  id="label_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_descripcion' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_cmb_eku_de_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >
				  
                                        <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_cmb_eku_de_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(), '...'), $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuDeId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_E980_G_DTIP_D_E_G_TRANSP_G_CAM_TRANS_ALTA_CMB_EDIT_EKU_DE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_cmb_eku_de_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e981_inattrans" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e981_inattrans' ?>" >
				  
                                        <?php Lang::_lang('eku_e981_inattrans', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e981_inattrans" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e981_inattrans')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e981_inattrans' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e981_inattrans' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE981Inattrans(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e981_inattrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e981_inattrans', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e981_inattrans', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e981_inattrans', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e981_inattrans')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e982_dnomtrans" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e982_dnomtrans' ?>" >
				  
                                        <?php Lang::_lang('eku_e982_dnomtrans', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e982_dnomtrans" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e982_dnomtrans')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e982_dnomtrans' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e982_dnomtrans' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE982Dnomtrans(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e982_dnomtrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e982_dnomtrans', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e982_dnomtrans', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e982_dnomtrans', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e982_dnomtrans')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e983_dructrans" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e983_dructrans' ?>" >
				  
                                        <?php Lang::_lang('eku_e983_dructrans', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e983_dructrans" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e983_dructrans')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e983_dructrans' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e983_dructrans' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE983Dructrans(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e983_dructrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e983_dructrans', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e983_dructrans', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e983_dructrans', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e983_dructrans')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e984_ddvtrans" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e984_ddvtrans' ?>" >
				  
                                        <?php Lang::_lang('eku_e984_ddvtrans', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e984_ddvtrans" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e984_ddvtrans')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e984_ddvtrans' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e984_ddvtrans' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE984Ddvtrans(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e984_ddvtrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e984_ddvtrans', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e984_ddvtrans', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e984_ddvtrans', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e984_ddvtrans')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e985_itipidtrans" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e985_itipidtrans' ?>" >
				  
                                        <?php Lang::_lang('eku_e985_itipidtrans', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e985_itipidtrans" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e985_itipidtrans')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e985_itipidtrans' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e985_itipidtrans' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE985Itipidtrans(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e985_itipidtrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e985_itipidtrans', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e985_itipidtrans', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e985_itipidtrans', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e985_itipidtrans')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e986_ddtipidtrans" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e986_ddtipidtrans' ?>" >
				  
                                        <?php Lang::_lang('eku_e986_ddtipidtrans', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e986_ddtipidtrans" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e986_ddtipidtrans')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e986_ddtipidtrans' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e986_ddtipidtrans' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE986Ddtipidtrans(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e986_ddtipidtrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e986_ddtipidtrans', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e986_ddtipidtrans', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e986_ddtipidtrans', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e986_ddtipidtrans')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e987_dnumidtrans" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e987_dnumidtrans' ?>" >
				  
                                        <?php Lang::_lang('eku_e987_dnumidtrans', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e987_dnumidtrans" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e987_dnumidtrans')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e987_dnumidtrans' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e987_dnumidtrans' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE987Dnumidtrans(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e987_dnumidtrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e987_dnumidtrans', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e987_dnumidtrans', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e987_dnumidtrans', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e987_dnumidtrans')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e988_cnactrans" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e988_cnactrans' ?>" >
				  
                                        <?php Lang::_lang('eku_e988_cnactrans', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e988_cnactrans" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e988_cnactrans')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e988_cnactrans' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e988_cnactrans' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE988Cnactrans(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e988_cnactrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e988_cnactrans', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e988_cnactrans', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e988_cnactrans', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e988_cnactrans')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e989_ddesnactrans" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e989_ddesnactrans' ?>" >
				  
                                        <?php Lang::_lang('eku_e989_ddesnactrans', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e989_ddesnactrans" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e989_ddesnactrans')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e989_ddesnactrans' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e989_ddesnactrans' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE989Ddesnactrans(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e989_ddesnactrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e989_ddesnactrans', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e989_ddesnactrans', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e989_ddesnactrans', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e989_ddesnactrans')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e990_dnumidchof" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e990_dnumidchof' ?>" >
				  
                                        <?php Lang::_lang('eku_e990_dnumidchof', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e990_dnumidchof" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e990_dnumidchof')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e990_dnumidchof' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e990_dnumidchof' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE990Dnumidchof(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e990_dnumidchof', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e990_dnumidchof', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e990_dnumidchof', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e990_dnumidchof', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e990_dnumidchof')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e991_dnomchof" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e991_dnomchof' ?>" >
				  
                                        <?php Lang::_lang('eku_e991_dnomchof', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e991_dnomchof" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e991_dnomchof')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e991_dnomchof' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e991_dnomchof' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE991Dnomchof(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e991_dnomchof', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e991_dnomchof', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e991_dnomchof', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e991_dnomchof', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e991_dnomchof')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e992_ddomfisc" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e992_ddomfisc' ?>" >
				  
                                        <?php Lang::_lang('eku_e992_ddomfisc', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e992_ddomfisc" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e992_ddomfisc')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e992_ddomfisc' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e992_ddomfisc' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE992Ddomfisc(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e992_ddomfisc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e992_ddomfisc', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e992_ddomfisc', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e992_ddomfisc', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e992_ddomfisc')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e993_ddirchof" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e993_ddirchof' ?>" >
				  
                                        <?php Lang::_lang('eku_e993_ddirchof', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e993_ddirchof" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e993_ddirchof')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e993_ddirchof' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e993_ddirchof' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE993Ddirchof(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e993_ddirchof', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e993_ddirchof', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e993_ddirchof', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e993_ddirchof', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e993_ddirchof')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e994_dnombag" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e994_dnombag' ?>" >
				  
                                        <?php Lang::_lang('eku_e994_dnombag', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e994_dnombag" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e994_dnombag')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e994_dnombag' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e994_dnombag' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE994Dnombag(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e994_dnombag', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e994_dnombag', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e994_dnombag', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e994_dnombag', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e994_dnombag')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e995_drucag" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e995_drucag' ?>" >
				  
                                        <?php Lang::_lang('eku_e995_drucag', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e995_drucag" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e995_drucag')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e995_drucag' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e995_drucag' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE995Drucag(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e995_drucag', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e995_drucag', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e995_drucag', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e995_drucag', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e995_drucag')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e996_ddvag" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e996_ddvag' ?>" >
				  
                                        <?php Lang::_lang('eku_e996_ddvag', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e996_ddvag" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e996_ddvag')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e996_ddvag' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e996_ddvag' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE996Ddvag(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e996_ddvag', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e996_ddvag', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e996_ddvag', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e996_ddvag', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e996_ddvag')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e997_ddirage" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e997_ddirage' ?>" >
				  
                                        <?php Lang::_lang('eku_e997_ddirage', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e997_ddirage" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e997_ddirage')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e997_ddirage' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_eku_e997_ddirage' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE997Ddirage(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e997_ddirage', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e997_ddirage', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e997_ddirage', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_eku_e997_ddirage', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e997_ddirage')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txt_codigo' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getCodigo(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txa_observacion' rows='10' cols='50' id='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans'/>
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

