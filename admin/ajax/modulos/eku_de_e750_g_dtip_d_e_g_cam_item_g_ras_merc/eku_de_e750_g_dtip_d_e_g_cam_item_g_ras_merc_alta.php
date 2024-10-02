<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('EKU_DE_E750_G_DTIP_D_E_G_CAM_ITEM_G_RAS_MERC_ALTA')){
    echo "No tiene asignada la credencial EKU_DE_E750_G_DTIP_D_E_G_CAM_ITEM_G_RAS_MERC_ALTA. ";
    return false;
}

$db_nombre_objeto = 'eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc';
$db_nombre_pagina = 'eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta';

$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc = new EkuDeE750GDtipDEGCamItemGRasMerc();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc = new EkuDeE750GDtipDEGCamItemGRasMerc();
	if(trim($hdn_id) != '') $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setId($hdn_id, false);
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setDescripcion(Gral::getVars(1, "eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_descripcion"));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuDeId(Gral::getVars(1, "eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_cmb_eku_de_id", null));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuDeE700GDtipDEGCamItemId(Gral::getVars(1, "eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id", null));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE751Dnumlote(Gral::getVars(1, "eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e751_dnumlote"));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE752Dvencmerc(Gral::getVars(1, "eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e752_dvencmerc"));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE753Dnserie(Gral::getVars(1, "eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e753_dnserie"));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE754Dnumpedi(Gral::getVars(1, "eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e754_dnumpedi"));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE755Dnumsegui(Gral::getVars(1, "eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e755_dnumsegui"));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE756Dnomimp(Gral::getVars(1, "eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e756_dnomimp"));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE757Ddirimp(Gral::getVars(1, "eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e757_ddirimp"));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE758Dnumfir(Gral::getVars(1, "eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e758_dnumfir"));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE759Dnumreg(Gral::getVars(1, "eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e759_dnumreg"));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE760Dnumregentcom(Gral::getVars(1, "eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e760_dnumregentcom"));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setCodigo(Gral::getVars(1, "eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_codigo"));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setObservacion(Gral::getVars(1, "eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txa_observacion"));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setOrden(Gral::getVars(1, "eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_orden", 0));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEstado(Gral::getVars(1, "eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_cmb_estado", 0));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_creado")));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setCreadoPor(Gral::getVars(1, "eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc__creado_por", 0));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_modificado")));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setModificadoPor(Gral::getVars(1, "eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc__modificado_por", 0));

	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_estado = new EkuDeE750GDtipDEGCamItemGRasMerc();
	if(trim($hdn_id) != ''){
		$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_estado->setId($hdn_id);
		$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEstado($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_estado->getEstado());
				
	}else{
		$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->control();
			if(!$error->getExisteError()){
				$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta.php?cs=1&id='.$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getId());
			}
		break;
		case 'guardarnvo':
			$error = $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->control();
			if(!$error->getExisteError()){
				$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta.php?cs=1');
				$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc = new EkuDeE750GDtipDEGCamItemGRasMerc();
			}
		break;
	}
	Gral::setSes('EkuDeE750GDtipDEGCamItemGRasMerc_ULTIMO_INSERTADO', $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_id = Gral::getVars(2, $prefijo.'cmb_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_id', 0);
	if($cmb_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_id != 0){
		$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc = EkuDeE750GDtipDEGCamItemGRasMerc::getOxId($cmb_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_id);
	}else{
	
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuDeE700GDtipDEGCamItemId(Gral::getVars(2, "eku_de_e700_g_dtip_d_e_g_cam_item_id", 'null'));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE751Dnumlote(Gral::getVars(2, "eku_e751_dnumlote", ''));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE752Dvencmerc(Gral::getVars(2, "eku_e752_dvencmerc", ''));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE753Dnserie(Gral::getVars(2, "eku_e753_dnserie", ''));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE754Dnumpedi(Gral::getVars(2, "eku_e754_dnumpedi", ''));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE755Dnumsegui(Gral::getVars(2, "eku_e755_dnumsegui", ''));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE756Dnomimp(Gral::getVars(2, "eku_e756_dnomimp", ''));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE757Ddirimp(Gral::getVars(2, "eku_e757_ddirimp", ''));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE758Dnumfir(Gral::getVars(2, "eku_e758_dnumfir", ''));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE759Dnumreg(Gral::getVars(2, "eku_e759_dnumreg", ''));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE760Dnumregentcom(Gral::getVars(2, "eku_e760_dnumregentcom", ''));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setCodigo(Gral::getVars(2, "codigo", ''));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setObservacion(Gral::getVars(2, "observacion", ''));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setOrden(Gral::getVars(2, "orden", 0));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEstado(Gral::getVars(2, "estado", 0));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc' width='90%'>
        
				<tr>
				  <td  id="label_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_descripcion' value='<?php Gral::_echoTxt($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_cmb_eku_de_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >
				  
                                        <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_cmb_eku_de_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(), '...'), $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuDeId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_E750_G_DTIP_D_E_G_CAM_ITEM_G_RAS_MERC_ALTA_CMB_EDIT_EKU_DE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_cmb_eku_de_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_e700_g_dtip_d_e_g_cam_item_id' ?>" >
				  
                                        <?php Lang::_lang('EkuDeE700GDtipDEGCamItem', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_de_e700_g_dtip_d_e_g_cam_item_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id', Gral::getCmbFiltro(EkuDeE700GDtipDEGCamItem::getEkuDeE700GDtipDEGCamItemsCmb(), '...'), $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuDeE700GDtipDEGCamItemId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_E750_G_DTIP_D_E_G_CAM_ITEM_G_RAS_MERC_ALTA_CMB_EDIT_EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" clase_id="eku_de_e700_g_dtip_d_e_g_cam_item" prefijo='eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" <?php echo ($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuDeE700GDtipDEGCamItemId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" clase_id="eku_de_e700_g_dtip_d_e_g_cam_item" prefijo='eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_de_e700_g_dtip_d_e_g_cam_item_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_de_e700_g_dtip_d_e_g_cam_item_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_de_e700_g_dtip_d_e_g_cam_item_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_de_e700_g_dtip_d_e_g_cam_item_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_e700_g_dtip_d_e_g_cam_item_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e751_dnumlote" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e751_dnumlote' ?>" >
				  
                                        <?php Lang::_lang('eku_e751_dnumlote', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e751_dnumlote" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e751_dnumlote')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e751_dnumlote' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e751_dnumlote' value='<?php Gral::_echoTxt($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE751Dnumlote(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e751_dnumlote', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e751_dnumlote', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e751_dnumlote', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e751_dnumlote', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e751_dnumlote')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e752_dvencmerc" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e752_dvencmerc' ?>" >
				  
                                        <?php Lang::_lang('eku_e752_dvencmerc', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e752_dvencmerc" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e752_dvencmerc')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e752_dvencmerc' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e752_dvencmerc' value='<?php Gral::_echoTxt($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE752Dvencmerc(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e752_dvencmerc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e752_dvencmerc', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e752_dvencmerc', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e752_dvencmerc', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e752_dvencmerc')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e753_dnserie" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e753_dnserie' ?>" >
				  
                                        <?php Lang::_lang('eku_e753_dnserie', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e753_dnserie" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e753_dnserie')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e753_dnserie' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e753_dnserie' value='<?php Gral::_echoTxt($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE753Dnserie(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e753_dnserie', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e753_dnserie', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e753_dnserie', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e753_dnserie', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e753_dnserie')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e754_dnumpedi" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e754_dnumpedi' ?>" >
				  
                                        <?php Lang::_lang('eku_e754_dnumpedi', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e754_dnumpedi" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e754_dnumpedi')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e754_dnumpedi' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e754_dnumpedi' value='<?php Gral::_echoTxt($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE754Dnumpedi(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e754_dnumpedi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e754_dnumpedi', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e754_dnumpedi', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e754_dnumpedi', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e754_dnumpedi')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e755_dnumsegui" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e755_dnumsegui' ?>" >
				  
                                        <?php Lang::_lang('eku_e755_dnumsegui', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e755_dnumsegui" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e755_dnumsegui')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e755_dnumsegui' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e755_dnumsegui' value='<?php Gral::_echoTxt($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE755Dnumsegui(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e755_dnumsegui', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e755_dnumsegui', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e755_dnumsegui', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e755_dnumsegui', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e755_dnumsegui')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e756_dnomimp" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e756_dnomimp' ?>" >
				  
                                        <?php Lang::_lang('eku_e756_dnomimp', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e756_dnomimp" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e756_dnomimp')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e756_dnomimp' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e756_dnomimp' value='<?php Gral::_echoTxt($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE756Dnomimp(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e756_dnomimp', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e756_dnomimp', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e756_dnomimp', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e756_dnomimp', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e756_dnomimp')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e757_ddirimp" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e757_ddirimp' ?>" >
				  
                                        <?php Lang::_lang('eku_e757_ddirimp', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e757_ddirimp" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e757_ddirimp')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e757_ddirimp' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e757_ddirimp' value='<?php Gral::_echoTxt($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE757Ddirimp(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e757_ddirimp', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e757_ddirimp', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e757_ddirimp', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e757_ddirimp', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e757_ddirimp')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e758_dnumfir" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e758_dnumfir' ?>" >
				  
                                        <?php Lang::_lang('eku_e758_dnumfir', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e758_dnumfir" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e758_dnumfir')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e758_dnumfir' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e758_dnumfir' value='<?php Gral::_echoTxt($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE758Dnumfir(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e758_dnumfir', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e758_dnumfir', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e758_dnumfir', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e758_dnumfir', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e758_dnumfir')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e759_dnumreg" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e759_dnumreg' ?>" >
				  
                                        <?php Lang::_lang('eku_e759_dnumreg', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e759_dnumreg" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e759_dnumreg')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e759_dnumreg' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e759_dnumreg' value='<?php Gral::_echoTxt($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE759Dnumreg(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e759_dnumreg', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e759_dnumreg', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e759_dnumreg', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e759_dnumreg', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e759_dnumreg')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e760_dnumregentcom" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e760_dnumregentcom' ?>" >
				  
                                        <?php Lang::_lang('eku_e760_dnumregentcom', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e760_dnumregentcom" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e760_dnumregentcom')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e760_dnumregentcom' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_eku_e760_dnumregentcom' value='<?php Gral::_echoTxt($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE760Dnumregentcom(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e760_dnumregentcom', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e760_dnumregentcom', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e760_dnumregentcom', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_eku_e760_dnumregentcom', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e760_dnumregentcom')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txt_codigo' value='<?php Gral::_echoTxt($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getCodigo(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txa_observacion' rows='10' cols='50' id='eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc'/>
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

