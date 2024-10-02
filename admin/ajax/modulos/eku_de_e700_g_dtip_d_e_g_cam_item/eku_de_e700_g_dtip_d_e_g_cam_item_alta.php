<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_ALTA')){
    echo "No tiene asignada la credencial EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_ALTA. ";
    return false;
}

$db_nombre_objeto = 'eku_de_e700_g_dtip_d_e_g_cam_item';
$db_nombre_pagina = 'eku_de_e700_g_dtip_d_e_g_cam_item_alta';

$eku_de_e700_g_dtip_d_e_g_cam_item = new EkuDeE700GDtipDEGCamItem();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$eku_de_e700_g_dtip_d_e_g_cam_item = new EkuDeE700GDtipDEGCamItem();
	if(trim($hdn_id) != '') $eku_de_e700_g_dtip_d_e_g_cam_item->setId($hdn_id, false);
	$eku_de_e700_g_dtip_d_e_g_cam_item->setDescripcion(Gral::getVars(1, "eku_de_e700_g_dtip_d_e_g_cam_item_txt_descripcion"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuDeId(Gral::getVars(1, "eku_de_e700_g_dtip_d_e_g_cam_item_cmb_eku_de_id", null));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE701Dcodint(Gral::getVars(1, "eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e701_dcodint"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE702Dpararanc(Gral::getVars(1, "eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e702_dpararanc"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE703Dncm(Gral::getVars(1, "eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e703_dncm"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE704Ddncpg(Gral::getVars(1, "eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e704_ddncpg"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE705Ddncpe(Gral::getVars(1, "eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e705_ddncpe"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE706Dgtin(Gral::getVars(1, "eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e706_dgtin"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE707Dgtinpq(Gral::getVars(1, "eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e707_dgtinpq"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE708Ddesproser(Gral::getVars(1, "eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e708_ddesproser"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE709Cunimed(Gral::getVars(1, "eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e709_cunimed"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE710Ddesunimed(Gral::getVars(1, "eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e710_ddesunimed"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE711Dcantproser(Gral::getVars(1, "eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e711_dcantproser"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE712Cpaisorig(Gral::getVars(1, "eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e712_cpaisorig"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE713Ddespaisorig(Gral::getVars(1, "eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e713_ddespaisorig"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE714Dinfitem(Gral::getVars(1, "eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e714_dinfitem"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE715Crelmerc(Gral::getVars(1, "eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e715_crelmerc"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE716Ddesrelmerc(Gral::getVars(1, "eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e716_ddesrelmerc"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE717Dcanquimer(Gral::getVars(1, "eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e717_dcanquimer"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE718Dporquimer(Gral::getVars(1, "eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e718_dporquimer"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE719Dcdcanticipo(Gral::getVars(1, "eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e719_dcdcanticipo"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setCodigo(Gral::getVars(1, "eku_de_e700_g_dtip_d_e_g_cam_item_txt_codigo"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setObservacion(Gral::getVars(1, "eku_de_e700_g_dtip_d_e_g_cam_item_txa_observacion"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setOrden(Gral::getVars(1, "eku_de_e700_g_dtip_d_e_g_cam_item_txt_orden", 0));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEstado(Gral::getVars(1, "eku_de_e700_g_dtip_d_e_g_cam_item_cmb_estado", 0));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_e700_g_dtip_d_e_g_cam_item_txt_creado")));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setCreadoPor(Gral::getVars(1, "eku_de_e700_g_dtip_d_e_g_cam_item__creado_por", 0));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_e700_g_dtip_d_e_g_cam_item_txt_modificado")));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setModificadoPor(Gral::getVars(1, "eku_de_e700_g_dtip_d_e_g_cam_item__modificado_por", 0));

	$eku_de_e700_g_dtip_d_e_g_cam_item_estado = new EkuDeE700GDtipDEGCamItem();
	if(trim($hdn_id) != ''){
		$eku_de_e700_g_dtip_d_e_g_cam_item_estado->setId($hdn_id);
		$eku_de_e700_g_dtip_d_e_g_cam_item->setEstado($eku_de_e700_g_dtip_d_e_g_cam_item_estado->getEstado());
				
	}else{
		$eku_de_e700_g_dtip_d_e_g_cam_item->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $eku_de_e700_g_dtip_d_e_g_cam_item->control();
			if(!$error->getExisteError()){
				$eku_de_e700_g_dtip_d_e_g_cam_item->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: eku_de_e700_g_dtip_d_e_g_cam_item_alta.php?cs=1&id='.$eku_de_e700_g_dtip_d_e_g_cam_item->getId());
			}
		break;
		case 'guardarnvo':
			$error = $eku_de_e700_g_dtip_d_e_g_cam_item->control();
			if(!$error->getExisteError()){
				$eku_de_e700_g_dtip_d_e_g_cam_item->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: eku_de_e700_g_dtip_d_e_g_cam_item_alta.php?cs=1');
				$eku_de_e700_g_dtip_d_e_g_cam_item = new EkuDeE700GDtipDEGCamItem();
			}
		break;
	}
	Gral::setSes('EkuDeE700GDtipDEGCamItem_ULTIMO_INSERTADO', $eku_de_e700_g_dtip_d_e_g_cam_item->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id = Gral::getVars(2, $prefijo.'cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id', 0);
	if($cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id != 0){
		$eku_de_e700_g_dtip_d_e_g_cam_item = EkuDeE700GDtipDEGCamItem::getOxId($cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id);
	}else{
	
	$eku_de_e700_g_dtip_d_e_g_cam_item->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE701Dcodint(Gral::getVars(2, "eku_e701_dcodint", ''));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE702Dpararanc(Gral::getVars(2, "eku_e702_dpararanc", ''));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE703Dncm(Gral::getVars(2, "eku_e703_dncm", ''));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE704Ddncpg(Gral::getVars(2, "eku_e704_ddncpg", ''));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE705Ddncpe(Gral::getVars(2, "eku_e705_ddncpe", ''));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE706Dgtin(Gral::getVars(2, "eku_e706_dgtin", ''));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE707Dgtinpq(Gral::getVars(2, "eku_e707_dgtinpq", ''));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE708Ddesproser(Gral::getVars(2, "eku_e708_ddesproser", ''));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE709Cunimed(Gral::getVars(2, "eku_e709_cunimed", ''));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE710Ddesunimed(Gral::getVars(2, "eku_e710_ddesunimed", ''));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE711Dcantproser(Gral::getVars(2, "eku_e711_dcantproser", ''));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE712Cpaisorig(Gral::getVars(2, "eku_e712_cpaisorig", ''));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE713Ddespaisorig(Gral::getVars(2, "eku_e713_ddespaisorig", ''));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE714Dinfitem(Gral::getVars(2, "eku_e714_dinfitem", ''));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE715Crelmerc(Gral::getVars(2, "eku_e715_crelmerc", ''));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE716Ddesrelmerc(Gral::getVars(2, "eku_e716_ddesrelmerc", ''));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE717Dcanquimer(Gral::getVars(2, "eku_e717_dcanquimer", ''));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE718Dporquimer(Gral::getVars(2, "eku_e718_dporquimer", ''));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE719Dcdcanticipo(Gral::getVars(2, "eku_e719_dcdcanticipo", ''));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setCodigo(Gral::getVars(2, "codigo", ''));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setObservacion(Gral::getVars(2, "observacion", ''));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setOrden(Gral::getVars(2, "orden", 0));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEstado(Gral::getVars(2, "estado", 0));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $eku_de_e700_g_dtip_d_e_g_cam_item->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_eku_de_e700_g_dtip_d_e_g_cam_item' width='90%'>
        
				<tr>
				  <td  id="label_eku_de_e700_g_dtip_d_e_g_cam_item_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e700_g_dtip_d_e_g_cam_item_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e700_g_dtip_d_e_g_cam_item_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e700_g_dtip_d_e_g_cam_item_txt_descripcion' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e700_g_dtip_d_e_g_cam_item_cmb_eku_de_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >
				  
                                        <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e700_g_dtip_d_e_g_cam_item_cmb_eku_de_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_de_e700_g_dtip_d_e_g_cam_item_cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(), '...'), $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuDeId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_ALTA_CMB_EDIT_EKU_DE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="eku_de_e700_g_dtip_d_e_g_cam_item_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_e700_g_dtip_d_e_g_cam_item_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="eku_de_e700_g_dtip_d_e_g_cam_item_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_e700_g_dtip_d_e_g_cam_item_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_eku_de_e700_g_dtip_d_e_g_cam_item_cmb_eku_de_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e701_dcodint" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e701_dcodint' ?>" >
				  
                                        <?php Lang::_lang('eku_e701_dcodint', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e701_dcodint" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e701_dcodint')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e701_dcodint' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e701_dcodint' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE701Dcodint(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e701_dcodint', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e701_dcodint', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e701_dcodint', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e701_dcodint', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e701_dcodint')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e702_dpararanc" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e702_dpararanc' ?>" >
				  
                                        <?php Lang::_lang('eku_e702_dpararanc', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e702_dpararanc" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e702_dpararanc')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e702_dpararanc' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e702_dpararanc' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE702Dpararanc(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e702_dpararanc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e702_dpararanc', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e702_dpararanc', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e702_dpararanc', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e702_dpararanc')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e703_dncm" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e703_dncm' ?>" >
				  
                                        <?php Lang::_lang('eku_e703_dncm', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e703_dncm" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e703_dncm')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e703_dncm' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e703_dncm' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE703Dncm(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e703_dncm', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e703_dncm', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e703_dncm', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e703_dncm', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e703_dncm')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e704_ddncpg" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e704_ddncpg' ?>" >
				  
                                        <?php Lang::_lang('eku_e704_ddncpg', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e704_ddncpg" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e704_ddncpg')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e704_ddncpg' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e704_ddncpg' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE704Ddncpg(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e704_ddncpg', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e704_ddncpg', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e704_ddncpg', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e704_ddncpg', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e704_ddncpg')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e705_ddncpe" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e705_ddncpe' ?>" >
				  
                                        <?php Lang::_lang('eku_e705_ddncpe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e705_ddncpe" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e705_ddncpe')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e705_ddncpe' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e705_ddncpe' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE705Ddncpe(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e705_ddncpe', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e705_ddncpe', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e705_ddncpe', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e705_ddncpe', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e705_ddncpe')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e706_dgtin" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e706_dgtin' ?>" >
				  
                                        <?php Lang::_lang('eku_e706_dgtin', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e706_dgtin" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e706_dgtin')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e706_dgtin' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e706_dgtin' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE706Dgtin(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e706_dgtin', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e706_dgtin', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e706_dgtin', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e706_dgtin', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e706_dgtin')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e707_dgtinpq" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e707_dgtinpq' ?>" >
				  
                                        <?php Lang::_lang('eku_e707_dgtinpq', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e707_dgtinpq" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e707_dgtinpq')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e707_dgtinpq' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e707_dgtinpq' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE707Dgtinpq(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e707_dgtinpq', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e707_dgtinpq', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e707_dgtinpq', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e707_dgtinpq', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e707_dgtinpq')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e708_ddesproser" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e708_ddesproser' ?>" >
				  
                                        <?php Lang::_lang('eku_e708_ddesproser', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e708_ddesproser" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e708_ddesproser')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e708_ddesproser' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e708_ddesproser' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE708Ddesproser(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e708_ddesproser', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e708_ddesproser', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e708_ddesproser', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e708_ddesproser', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e708_ddesproser')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e709_cunimed" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e709_cunimed' ?>" >
				  
                                        <?php Lang::_lang('eku_e709_cunimed', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e709_cunimed" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e709_cunimed')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e709_cunimed' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e709_cunimed' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE709Cunimed(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e709_cunimed', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e709_cunimed', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e709_cunimed', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e709_cunimed', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e709_cunimed')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e710_ddesunimed" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e710_ddesunimed' ?>" >
				  
                                        <?php Lang::_lang('eku_e710_ddesunimed', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e710_ddesunimed" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e710_ddesunimed')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e710_ddesunimed' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e710_ddesunimed' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE710Ddesunimed(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e710_ddesunimed', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e710_ddesunimed', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e710_ddesunimed', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e710_ddesunimed', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e710_ddesunimed')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e711_dcantproser" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e711_dcantproser' ?>" >
				  
                                        <?php Lang::_lang('eku_e711_dcantproser', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e711_dcantproser" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e711_dcantproser')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e711_dcantproser' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e711_dcantproser' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE711Dcantproser(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e711_dcantproser', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e711_dcantproser', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e711_dcantproser', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e711_dcantproser', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e711_dcantproser')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e712_cpaisorig" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e712_cpaisorig' ?>" >
				  
                                        <?php Lang::_lang('eku_e712_cpaisorig', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e712_cpaisorig" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e712_cpaisorig')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e712_cpaisorig' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e712_cpaisorig' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE712Cpaisorig(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e712_cpaisorig', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e712_cpaisorig', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e712_cpaisorig', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e712_cpaisorig', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e712_cpaisorig')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e713_ddespaisorig" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e713_ddespaisorig' ?>" >
				  
                                        <?php Lang::_lang('eku_e713_ddespaisorig', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e713_ddespaisorig" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e713_ddespaisorig')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e713_ddespaisorig' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e713_ddespaisorig' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE713Ddespaisorig(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e713_ddespaisorig', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e713_ddespaisorig', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e713_ddespaisorig', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e713_ddespaisorig', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e713_ddespaisorig')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e714_dinfitem" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e714_dinfitem' ?>" >
				  
                                        <?php Lang::_lang('eku_e714_dinfitem', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e714_dinfitem" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e714_dinfitem')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e714_dinfitem' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e714_dinfitem' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE714Dinfitem(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e714_dinfitem', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e714_dinfitem', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e714_dinfitem', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e714_dinfitem', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e714_dinfitem')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e715_crelmerc" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e715_crelmerc' ?>" >
				  
                                        <?php Lang::_lang('eku_e715_crelmerc', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e715_crelmerc" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e715_crelmerc')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e715_crelmerc' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e715_crelmerc' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE715Crelmerc(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e715_crelmerc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e715_crelmerc', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e715_crelmerc', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e715_crelmerc', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e715_crelmerc')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e716_ddesrelmerc" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e716_ddesrelmerc' ?>" >
				  
                                        <?php Lang::_lang('eku_e716_ddesrelmerc', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e716_ddesrelmerc" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e716_ddesrelmerc')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e716_ddesrelmerc' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e716_ddesrelmerc' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE716Ddesrelmerc(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e716_ddesrelmerc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e716_ddesrelmerc', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e716_ddesrelmerc', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e716_ddesrelmerc', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e716_ddesrelmerc')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e717_dcanquimer" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e717_dcanquimer' ?>" >
				  
                                        <?php Lang::_lang('eku_e717_dcanquimer', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e717_dcanquimer" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e717_dcanquimer')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e717_dcanquimer' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e717_dcanquimer' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE717Dcanquimer(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e717_dcanquimer', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e717_dcanquimer', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e717_dcanquimer', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e717_dcanquimer', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e717_dcanquimer')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e718_dporquimer" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e718_dporquimer' ?>" >
				  
                                        <?php Lang::_lang('eku_e718_dporquimer', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e718_dporquimer" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e718_dporquimer')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e718_dporquimer' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e718_dporquimer' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE718Dporquimer(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e718_dporquimer', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e718_dporquimer', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e718_dporquimer', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e718_dporquimer', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e718_dporquimer')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e719_dcdcanticipo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e719_dcdcanticipo' ?>" >
				  
                                        <?php Lang::_lang('eku_e719_dcdcanticipo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e719_dcdcanticipo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e719_dcdcanticipo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e719_dcdcanticipo' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e700_g_dtip_d_e_g_cam_item_txt_eku_e719_dcdcanticipo' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE719Dcdcanticipo(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e719_dcdcanticipo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e719_dcdcanticipo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e719_dcdcanticipo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_eku_e719_dcdcanticipo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e719_dcdcanticipo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e700_g_dtip_d_e_g_cam_item_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e700_g_dtip_d_e_g_cam_item_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e700_g_dtip_d_e_g_cam_item_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e700_g_dtip_d_e_g_cam_item_txt_codigo' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getCodigo(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e700_g_dtip_d_e_g_cam_item_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e700_g_dtip_d_e_g_cam_item_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='eku_de_e700_g_dtip_d_e_g_cam_item_txa_observacion' rows='10' cols='50' id='eku_de_e700_g_dtip_d_e_g_cam_item_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e700_g_dtip_d_e_g_cam_item_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e700_g_dtip_d_e_g_cam_item_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='eku_de_e700_g_dtip_d_e_g_cam_item'/>
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

