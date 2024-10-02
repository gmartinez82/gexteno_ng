<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('EKU_DE_E730_G_DTIP_D_E_G_CAM_ITEM_G_CAM_I_V_A_ALTA')){
    echo "No tiene asignada la credencial EKU_DE_E730_G_DTIP_D_E_G_CAM_ITEM_G_CAM_I_V_A_ALTA. ";
    return false;
}

$db_nombre_objeto = 'eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a';
$db_nombre_pagina = 'eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta';

$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a = new EkuDeE730GDtipDEGCamItemGCamIVA();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a = new EkuDeE730GDtipDEGCamItemGCamIVA();
	if(trim($hdn_id) != '') $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setId($hdn_id, false);
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setDescripcion(Gral::getVars(1, "eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_descripcion"));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuDeId(Gral::getVars(1, "eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_cmb_eku_de_id", null));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuDeE700GDtipDEGCamItemId(Gral::getVars(1, "eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id", null));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE731Iafeciva(Gral::getVars(1, "eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_eku_e731_iafeciva"));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE732Ddesafeciva(Gral::getVars(1, "eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_eku_e732_ddesafeciva"));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE733Dpropiva(Gral::getVars(1, "eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_eku_e733_dpropiva"));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE734Dtasaiva(Gral::getVars(1, "eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_eku_e734_dtasaiva"));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE735Dbasgraviva(Gral::getVars(1, "eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_eku_e735_dbasgraviva"));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE736Dliqivaitem(Gral::getVars(1, "eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_eku_e736_dliqivaitem"));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setCodigo(Gral::getVars(1, "eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_codigo"));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setObservacion(Gral::getVars(1, "eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txa_observacion"));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setOrden(Gral::getVars(1, "eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_orden", 0));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEstado(Gral::getVars(1, "eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_cmb_estado", 0));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_creado")));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setCreadoPor(Gral::getVars(1, "eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a__creado_por", 0));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_modificado")));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setModificadoPor(Gral::getVars(1, "eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a__modificado_por", 0));

	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_estado = new EkuDeE730GDtipDEGCamItemGCamIVA();
	if(trim($hdn_id) != ''){
		$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_estado->setId($hdn_id);
		$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEstado($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_estado->getEstado());
				
	}else{
		$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->control();
			if(!$error->getExisteError()){
				$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta.php?cs=1&id='.$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getId());
			}
		break;
		case 'guardarnvo':
			$error = $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->control();
			if(!$error->getExisteError()){
				$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta.php?cs=1');
				$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a = new EkuDeE730GDtipDEGCamItemGCamIVA();
			}
		break;
	}
	Gral::setSes('EkuDeE730GDtipDEGCamItemGCamIVA_ULTIMO_INSERTADO', $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_id = Gral::getVars(2, $prefijo.'cmb_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_id', 0);
	if($cmb_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_id != 0){
		$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a = EkuDeE730GDtipDEGCamItemGCamIVA::getOxId($cmb_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_id);
	}else{
	
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuDeE700GDtipDEGCamItemId(Gral::getVars(2, "eku_de_e700_g_dtip_d_e_g_cam_item_id", 'null'));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE731Iafeciva(Gral::getVars(2, "eku_e731_iafeciva", ''));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE732Ddesafeciva(Gral::getVars(2, "eku_e732_ddesafeciva", ''));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE733Dpropiva(Gral::getVars(2, "eku_e733_dpropiva", ''));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE734Dtasaiva(Gral::getVars(2, "eku_e734_dtasaiva", ''));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE735Dbasgraviva(Gral::getVars(2, "eku_e735_dbasgraviva", ''));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE736Dliqivaitem(Gral::getVars(2, "eku_e736_dliqivaitem", ''));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setCodigo(Gral::getVars(2, "codigo", ''));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setObservacion(Gral::getVars(2, "observacion", ''));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setOrden(Gral::getVars(2, "orden", 0));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEstado(Gral::getVars(2, "estado", 0));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a' width='90%'>
        
				<tr>
				  <td  id="label_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_descripcion' value='<?php Gral::_echoTxt($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_cmb_eku_de_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >
				  
                                        <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_cmb_eku_de_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(), '...'), $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuDeId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_E730_G_DTIP_D_E_G_CAM_ITEM_G_CAM_I_V_A_ALTA_CMB_EDIT_EKU_DE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_cmb_eku_de_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_e700_g_dtip_d_e_g_cam_item_id' ?>" >
				  
                                        <?php Lang::_lang('EkuDeE700GDtipDEGCamItem', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_de_e700_g_dtip_d_e_g_cam_item_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id', Gral::getCmbFiltro(EkuDeE700GDtipDEGCamItem::getEkuDeE700GDtipDEGCamItemsCmb(), '...'), $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuDeE700GDtipDEGCamItemId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_E730_G_DTIP_D_E_G_CAM_ITEM_G_CAM_I_V_A_ALTA_CMB_EDIT_EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" clase_id="eku_de_e700_g_dtip_d_e_g_cam_item" prefijo='eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" <?php echo ($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuDeE700GDtipDEGCamItemId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" clase_id="eku_de_e700_g_dtip_d_e_g_cam_item" prefijo='eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_eku_de_e700_g_dtip_d_e_g_cam_item_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_eku_de_e700_g_dtip_d_e_g_cam_item_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_eku_de_e700_g_dtip_d_e_g_cam_item_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_eku_de_e700_g_dtip_d_e_g_cam_item_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_e700_g_dtip_d_e_g_cam_item_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_eku_e731_iafeciva" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e731_iafeciva' ?>" >
				  
                                        <?php Lang::_lang('eku_e731_iafeciva', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_eku_e731_iafeciva" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e731_iafeciva')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_eku_e731_iafeciva' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_eku_e731_iafeciva' value='<?php Gral::_echoTxt($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE731Iafeciva(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_eku_e731_iafeciva', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_eku_e731_iafeciva', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_eku_e731_iafeciva', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_eku_e731_iafeciva', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e731_iafeciva')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_eku_e732_ddesafeciva" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e732_ddesafeciva' ?>" >
				  
                                        <?php Lang::_lang('eku_e732_ddesafeciva', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_eku_e732_ddesafeciva" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e732_ddesafeciva')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_eku_e732_ddesafeciva' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_eku_e732_ddesafeciva' value='<?php Gral::_echoTxt($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE732Ddesafeciva(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_eku_e732_ddesafeciva', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_eku_e732_ddesafeciva', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_eku_e732_ddesafeciva', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_eku_e732_ddesafeciva', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e732_ddesafeciva')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_eku_e733_dpropiva" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e733_dpropiva' ?>" >
				  
                                        <?php Lang::_lang('eku_e733_dpropiva', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_eku_e733_dpropiva" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e733_dpropiva')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_eku_e733_dpropiva' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_eku_e733_dpropiva' value='<?php Gral::_echoTxt($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE733Dpropiva(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_eku_e733_dpropiva', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_eku_e733_dpropiva', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_eku_e733_dpropiva', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_eku_e733_dpropiva', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e733_dpropiva')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_eku_e734_dtasaiva" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e734_dtasaiva' ?>" >
				  
                                        <?php Lang::_lang('eku_e734_dtasaiva', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_eku_e734_dtasaiva" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e734_dtasaiva')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_eku_e734_dtasaiva' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_eku_e734_dtasaiva' value='<?php Gral::_echoTxt($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE734Dtasaiva(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_eku_e734_dtasaiva', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_eku_e734_dtasaiva', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_eku_e734_dtasaiva', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_eku_e734_dtasaiva', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e734_dtasaiva')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_eku_e735_dbasgraviva" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e735_dbasgraviva' ?>" >
				  
                                        <?php Lang::_lang('eku_e735_dbasgraviva', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_eku_e735_dbasgraviva" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e735_dbasgraviva')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_eku_e735_dbasgraviva' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_eku_e735_dbasgraviva' value='<?php Gral::_echoTxt($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE735Dbasgraviva(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_eku_e735_dbasgraviva', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_eku_e735_dbasgraviva', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_eku_e735_dbasgraviva', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_eku_e735_dbasgraviva', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e735_dbasgraviva')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_eku_e736_dliqivaitem" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e736_dliqivaitem' ?>" >
				  
                                        <?php Lang::_lang('eku_e736_dliqivaitem', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_eku_e736_dliqivaitem" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e736_dliqivaitem')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_eku_e736_dliqivaitem' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_eku_e736_dliqivaitem' value='<?php Gral::_echoTxt($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE736Dliqivaitem(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_eku_e736_dliqivaitem', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_eku_e736_dliqivaitem', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_eku_e736_dliqivaitem', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_eku_e736_dliqivaitem', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e736_dliqivaitem')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txt_codigo' value='<?php Gral::_echoTxt($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getCodigo(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txa_observacion' rows='10' cols='50' id='eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a'/>
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

