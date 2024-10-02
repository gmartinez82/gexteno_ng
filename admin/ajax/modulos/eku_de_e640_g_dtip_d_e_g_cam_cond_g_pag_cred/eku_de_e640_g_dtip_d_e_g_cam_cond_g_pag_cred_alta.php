<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('EKU_DE_E640_G_DTIP_D_E_G_CAM_COND_G_PAG_CRED_ALTA')){
    echo "No tiene asignada la credencial EKU_DE_E640_G_DTIP_D_E_G_CAM_COND_G_PAG_CRED_ALTA. ";
    return false;
}

$db_nombre_objeto = 'eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred';
$db_nombre_pagina = 'eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta';

$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred = new EkuDeE640GDtipDEGCamCondGPagCred();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred = new EkuDeE640GDtipDEGCamCondGPagCred();
	if(trim($hdn_id) != '') $eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setId($hdn_id, false);
	$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setDescripcion(Gral::getVars(1, "eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_descripcion"));
	$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setEkuDeId(Gral::getVars(1, "eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_cmb_eku_de_id", null));
	$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setEkuE641Icondcred(Gral::getVars(1, "eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_eku_e641_icondcred"));
	$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setEkuE642Ddcondcred(Gral::getVars(1, "eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_eku_e642_ddcondcred"));
	$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setEkuE643Dplazocre(Gral::getVars(1, "eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_eku_e643_dplazocre"));
	$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setEkuE644Dcuotas(Gral::getVars(1, "eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_eku_e644_dcuotas"));
	$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setEkuE645Dmonent(Gral::getVars(1, "eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_eku_e645_dmonent"));
	$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setCodigo(Gral::getVars(1, "eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_codigo"));
	$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setObservacion(Gral::getVars(1, "eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txa_observacion"));
	$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setOrden(Gral::getVars(1, "eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_orden", 0));
	$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setEstado(Gral::getVars(1, "eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_cmb_estado", 0));
	$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_creado")));
	$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setCreadoPor(Gral::getVars(1, "eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred__creado_por", 0));
	$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_modificado")));
	$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setModificadoPor(Gral::getVars(1, "eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred__modificado_por", 0));

	$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_estado = new EkuDeE640GDtipDEGCamCondGPagCred();
	if(trim($hdn_id) != ''){
		$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_estado->setId($hdn_id);
		$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setEstado($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_estado->getEstado());
				
	}else{
		$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->control();
			if(!$error->getExisteError()){
				$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta.php?cs=1&id='.$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getId());
			}
		break;
		case 'guardarnvo':
			$error = $eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->control();
			if(!$error->getExisteError()){
				$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta.php?cs=1');
				$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred = new EkuDeE640GDtipDEGCamCondGPagCred();
			}
		break;
	}
	Gral::setSes('EkuDeE640GDtipDEGCamCondGPagCred_ULTIMO_INSERTADO', $eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_id = Gral::getVars(2, $prefijo.'cmb_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_id', 0);
	if($cmb_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_id != 0){
		$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred = EkuDeE640GDtipDEGCamCondGPagCred::getOxId($cmb_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_id);
	}else{
	
	$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
	$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setEkuE641Icondcred(Gral::getVars(2, "eku_e641_icondcred", ''));
	$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setEkuE642Ddcondcred(Gral::getVars(2, "eku_e642_ddcondcred", ''));
	$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setEkuE643Dplazocre(Gral::getVars(2, "eku_e643_dplazocre", ''));
	$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setEkuE644Dcuotas(Gral::getVars(2, "eku_e644_dcuotas", ''));
	$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setEkuE645Dmonent(Gral::getVars(2, "eku_e645_dmonent", ''));
	$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setCodigo(Gral::getVars(2, "codigo", ''));
	$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setObservacion(Gral::getVars(2, "observacion", ''));
	$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setOrden(Gral::getVars(2, "orden", 0));
	$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setEstado(Gral::getVars(2, "estado", 0));
	$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred/eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred' width='90%'>
        
				<tr>
				  <td  id="label_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_descripcion' value='<?php Gral::_echoTxt($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_cmb_eku_de_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >
				  
                                        <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_cmb_eku_de_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(), '...'), $eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getEkuDeId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_E640_G_DTIP_D_E_G_CAM_COND_G_PAG_CRED_ALTA_CMB_EDIT_EKU_DE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_cmb_eku_de_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_eku_e641_icondcred" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e641_icondcred' ?>" >
				  
                                        <?php Lang::_lang('eku_e641_icondcred', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_eku_e641_icondcred" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e641_icondcred')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_eku_e641_icondcred' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_eku_e641_icondcred' value='<?php Gral::_echoTxt($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getEkuE641Icondcred(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta_eku_e641_icondcred', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta_eku_e641_icondcred', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta_eku_e641_icondcred', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta_eku_e641_icondcred', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e641_icondcred')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_eku_e642_ddcondcred" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e642_ddcondcred' ?>" >
				  
                                        <?php Lang::_lang('eku_e642_ddcondcred', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_eku_e642_ddcondcred" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e642_ddcondcred')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_eku_e642_ddcondcred' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_eku_e642_ddcondcred' value='<?php Gral::_echoTxt($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getEkuE642Ddcondcred(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta_eku_e642_ddcondcred', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta_eku_e642_ddcondcred', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta_eku_e642_ddcondcred', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta_eku_e642_ddcondcred', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e642_ddcondcred')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_eku_e643_dplazocre" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e643_dplazocre' ?>" >
				  
                                        <?php Lang::_lang('eku_e643_dplazocre', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_eku_e643_dplazocre" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e643_dplazocre')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_eku_e643_dplazocre' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_eku_e643_dplazocre' value='<?php Gral::_echoTxt($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getEkuE643Dplazocre(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta_eku_e643_dplazocre', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta_eku_e643_dplazocre', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta_eku_e643_dplazocre', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta_eku_e643_dplazocre', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e643_dplazocre')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_eku_e644_dcuotas" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e644_dcuotas' ?>" >
				  
                                        <?php Lang::_lang('eku_e644_dcuotas', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_eku_e644_dcuotas" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e644_dcuotas')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_eku_e644_dcuotas' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_eku_e644_dcuotas' value='<?php Gral::_echoTxt($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getEkuE644Dcuotas(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta_eku_e644_dcuotas', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta_eku_e644_dcuotas', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta_eku_e644_dcuotas', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta_eku_e644_dcuotas', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e644_dcuotas')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_eku_e645_dmonent" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e645_dmonent' ?>" >
				  
                                        <?php Lang::_lang('eku_e645_dmonent', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_eku_e645_dmonent" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e645_dmonent')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_eku_e645_dmonent' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_eku_e645_dmonent' value='<?php Gral::_echoTxt($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getEkuE645Dmonent(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta_eku_e645_dmonent', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta_eku_e645_dmonent', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta_eku_e645_dmonent', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta_eku_e645_dmonent', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e645_dmonent')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txt_codigo' value='<?php Gral::_echoTxt($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getCodigo(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txa_observacion' rows='10' cols='50' id='eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred'/>
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

