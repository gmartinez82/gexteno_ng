<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('EKU_DE_E720_G_DTIP_D_E_G_CAM_ITEM_G_VALOR_ITEM_ALTA')){
    echo "No tiene asignada la credencial EKU_DE_E720_G_DTIP_D_E_G_CAM_ITEM_G_VALOR_ITEM_ALTA. ";
    return false;
}

$db_nombre_objeto = 'eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item';
$db_nombre_pagina = 'eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta';

$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item = new EkuDeE720GDtipDEGCamItemGValorItem();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item = new EkuDeE720GDtipDEGCamItemGValorItem();
	if(trim($hdn_id) != '') $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setId($hdn_id, false);
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setDescripcion(Gral::getVars(1, "eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_descripcion"));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuDeId(Gral::getVars(1, "eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_cmb_eku_de_id", null));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuDeE700GDtipDEGCamItemId(Gral::getVars(1, "eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id", null));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuE721Dpuniproser(Gral::getVars(1, "eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_e721_dpuniproser"));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuE725Dticamit(Gral::getVars(1, "eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_e725_dticamit"));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuE727Dtotbruopeitem(Gral::getVars(1, "eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_e727_dtotbruopeitem"));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa002Ddescitem(Gral::getVars(1, "eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_ea002_ddescitem"));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa003Dporcdesit(Gral::getVars(1, "eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_ea003_dporcdesit"));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa004Ddescgloitem(Gral::getVars(1, "eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_ea004_ddescgloitem"));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa006Dantpreuniit(Gral::getVars(1, "eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_ea006_dantpreuniit"));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa007Dantglopreuniit(Gral::getVars(1, "eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_ea007_dantglopreuniit"));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa008Dtotopeitem(Gral::getVars(1, "eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_ea008_dtotopeitem"));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa009Dtotopegs(Gral::getVars(1, "eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_ea009_dtotopegs"));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setCodigo(Gral::getVars(1, "eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_codigo"));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setObservacion(Gral::getVars(1, "eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txa_observacion"));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setOrden(Gral::getVars(1, "eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_orden", 0));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEstado(Gral::getVars(1, "eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_cmb_estado", 0));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_creado")));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setCreadoPor(Gral::getVars(1, "eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item__creado_por", 0));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_modificado")));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setModificadoPor(Gral::getVars(1, "eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item__modificado_por", 0));

	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_estado = new EkuDeE720GDtipDEGCamItemGValorItem();
	if(trim($hdn_id) != ''){
		$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_estado->setId($hdn_id);
		$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEstado($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_estado->getEstado());
				
	}else{
		$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->control();
			if(!$error->getExisteError()){
				$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta.php?cs=1&id='.$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getId());
			}
		break;
		case 'guardarnvo':
			$error = $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->control();
			if(!$error->getExisteError()){
				$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta.php?cs=1');
				$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item = new EkuDeE720GDtipDEGCamItemGValorItem();
			}
		break;
	}
	Gral::setSes('EkuDeE720GDtipDEGCamItemGValorItem_ULTIMO_INSERTADO', $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_id = Gral::getVars(2, $prefijo.'cmb_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_id', 0);
	if($cmb_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_id != 0){
		$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item = EkuDeE720GDtipDEGCamItemGValorItem::getOxId($cmb_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_id);
	}else{
	
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuDeE700GDtipDEGCamItemId(Gral::getVars(2, "eku_de_e700_g_dtip_d_e_g_cam_item_id", 'null'));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuE721Dpuniproser(Gral::getVars(2, "eku_e721_dpuniproser", ''));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuE725Dticamit(Gral::getVars(2, "eku_e725_dticamit", ''));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuE727Dtotbruopeitem(Gral::getVars(2, "eku_e727_dtotbruopeitem", ''));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa002Ddescitem(Gral::getVars(2, "eku_ea002_ddescitem", ''));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa003Dporcdesit(Gral::getVars(2, "eku_ea003_dporcdesit", ''));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa004Ddescgloitem(Gral::getVars(2, "eku_ea004_ddescgloitem", ''));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa006Dantpreuniit(Gral::getVars(2, "eku_ea006_dantpreuniit", ''));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa007Dantglopreuniit(Gral::getVars(2, "eku_ea007_dantglopreuniit", ''));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa008Dtotopeitem(Gral::getVars(2, "eku_ea008_dtotopeitem", ''));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa009Dtotopegs(Gral::getVars(2, "eku_ea009_dtotopegs", ''));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setCodigo(Gral::getVars(2, "codigo", ''));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setObservacion(Gral::getVars(2, "observacion", ''));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setOrden(Gral::getVars(2, "orden", 0));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEstado(Gral::getVars(2, "estado", 0));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item' width='90%'>
        
				<tr>
				  <td  id="label_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_descripcion' value='<?php Gral::_echoTxt($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_cmb_eku_de_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >
				  
                                        <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_cmb_eku_de_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(), '...'), $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuDeId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_E720_G_DTIP_D_E_G_CAM_ITEM_G_VALOR_ITEM_ALTA_CMB_EDIT_EKU_DE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_cmb_eku_de_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_e700_g_dtip_d_e_g_cam_item_id' ?>" >
				  
                                        <?php Lang::_lang('EkuDeE700GDtipDEGCamItem', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_de_e700_g_dtip_d_e_g_cam_item_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id', Gral::getCmbFiltro(EkuDeE700GDtipDEGCamItem::getEkuDeE700GDtipDEGCamItemsCmb(), '...'), $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuDeE700GDtipDEGCamItemId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_E720_G_DTIP_D_E_G_CAM_ITEM_G_VALOR_ITEM_ALTA_CMB_EDIT_EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" clase_id="eku_de_e700_g_dtip_d_e_g_cam_item" prefijo='eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" <?php echo ($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuDeE700GDtipDEGCamItemId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" clase_id="eku_de_e700_g_dtip_d_e_g_cam_item" prefijo='eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_de_e700_g_dtip_d_e_g_cam_item_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_de_e700_g_dtip_d_e_g_cam_item_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_de_e700_g_dtip_d_e_g_cam_item_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_de_e700_g_dtip_d_e_g_cam_item_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_e700_g_dtip_d_e_g_cam_item_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_e721_dpuniproser" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e721_dpuniproser' ?>" >
				  
                                        <?php Lang::_lang('eku_e721_dpuniproser', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_e721_dpuniproser" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e721_dpuniproser')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_e721_dpuniproser' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_e721_dpuniproser' value='<?php Gral::_echoTxt($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuE721Dpuniproser(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_e721_dpuniproser', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_e721_dpuniproser', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_e721_dpuniproser', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_e721_dpuniproser', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e721_dpuniproser')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_e725_dticamit" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e725_dticamit' ?>" >
				  
                                        <?php Lang::_lang('eku_e725_dticamit', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_e725_dticamit" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e725_dticamit')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_e725_dticamit' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_e725_dticamit' value='<?php Gral::_echoTxt($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuE725Dticamit(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_e725_dticamit', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_e725_dticamit', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_e725_dticamit', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_e725_dticamit', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e725_dticamit')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_e727_dtotbruopeitem" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e727_dtotbruopeitem' ?>" >
				  
                                        <?php Lang::_lang('eku_e727_dtotbruopeitem', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_e727_dtotbruopeitem" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e727_dtotbruopeitem')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_e727_dtotbruopeitem' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_e727_dtotbruopeitem' value='<?php Gral::_echoTxt($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuE727Dtotbruopeitem(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_e727_dtotbruopeitem', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_e727_dtotbruopeitem', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_e727_dtotbruopeitem', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_e727_dtotbruopeitem', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e727_dtotbruopeitem')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_ea002_ddescitem" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_ea002_ddescitem' ?>" >
				  
                                        <?php Lang::_lang('eku_ea002_ddescitem', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_ea002_ddescitem" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_ea002_ddescitem')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_ea002_ddescitem' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_ea002_ddescitem' value='<?php Gral::_echoTxt($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa002Ddescitem(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_ea002_ddescitem', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_ea002_ddescitem', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_ea002_ddescitem', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_ea002_ddescitem', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_ea002_ddescitem')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_ea003_dporcdesit" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_ea003_dporcdesit' ?>" >
				  
                                        <?php Lang::_lang('eku_ea003_dporcdesit', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_ea003_dporcdesit" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_ea003_dporcdesit')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_ea003_dporcdesit' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_ea003_dporcdesit' value='<?php Gral::_echoTxt($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa003Dporcdesit(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_ea003_dporcdesit', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_ea003_dporcdesit', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_ea003_dporcdesit', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_ea003_dporcdesit', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_ea003_dporcdesit')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_ea004_ddescgloitem" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_ea004_ddescgloitem' ?>" >
				  
                                        <?php Lang::_lang('eku_ea004_ddescgloitem', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_ea004_ddescgloitem" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_ea004_ddescgloitem')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_ea004_ddescgloitem' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_ea004_ddescgloitem' value='<?php Gral::_echoTxt($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa004Ddescgloitem(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_ea004_ddescgloitem', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_ea004_ddescgloitem', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_ea004_ddescgloitem', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_ea004_ddescgloitem', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_ea004_ddescgloitem')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_ea006_dantpreuniit" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_ea006_dantpreuniit' ?>" >
				  
                                        <?php Lang::_lang('eku_ea006_dantpreuniit', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_ea006_dantpreuniit" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_ea006_dantpreuniit')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_ea006_dantpreuniit' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_ea006_dantpreuniit' value='<?php Gral::_echoTxt($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa006Dantpreuniit(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_ea006_dantpreuniit', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_ea006_dantpreuniit', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_ea006_dantpreuniit', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_ea006_dantpreuniit', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_ea006_dantpreuniit')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_ea007_dantglopreuniit" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_ea007_dantglopreuniit' ?>" >
				  
                                        <?php Lang::_lang('eku_ea007_dantglopreuniit', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_ea007_dantglopreuniit" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_ea007_dantglopreuniit')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_ea007_dantglopreuniit' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_ea007_dantglopreuniit' value='<?php Gral::_echoTxt($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa007Dantglopreuniit(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_ea007_dantglopreuniit', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_ea007_dantglopreuniit', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_ea007_dantglopreuniit', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_ea007_dantglopreuniit', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_ea007_dantglopreuniit')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_ea008_dtotopeitem" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_ea008_dtotopeitem' ?>" >
				  
                                        <?php Lang::_lang('eku_ea008_dtotopeitem', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_ea008_dtotopeitem" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_ea008_dtotopeitem')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_ea008_dtotopeitem' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_ea008_dtotopeitem' value='<?php Gral::_echoTxt($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa008Dtotopeitem(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_ea008_dtotopeitem', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_ea008_dtotopeitem', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_ea008_dtotopeitem', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_ea008_dtotopeitem', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_ea008_dtotopeitem')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_ea009_dtotopegs" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_ea009_dtotopegs' ?>" >
				  
                                        <?php Lang::_lang('eku_ea009_dtotopegs', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_ea009_dtotopegs" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_ea009_dtotopegs')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_ea009_dtotopegs' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_eku_ea009_dtotopegs' value='<?php Gral::_echoTxt($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa009Dtotopegs(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_ea009_dtotopegs', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_ea009_dtotopegs', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_ea009_dtotopegs', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_eku_ea009_dtotopegs', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_ea009_dtotopegs')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txt_codigo' value='<?php Gral::_echoTxt($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getCodigo(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txa_observacion' rows='10' cols='50' id='eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item'/>
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

