<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('EKU_DE_E920_G_DTIP_D_E_G_TRANSP_G_CAM_SAL_ALTA')){
    echo "No tiene asignada la credencial EKU_DE_E920_G_DTIP_D_E_G_TRANSP_G_CAM_SAL_ALTA. ";
    return false;
}

$db_nombre_objeto = 'eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal';
$db_nombre_pagina = 'eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta';

$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal = new EkuDeE920GDtipDEGTranspGCamSal();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal = new EkuDeE920GDtipDEGTranspGCamSal();
	if(trim($hdn_id) != '') $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setId($hdn_id, false);
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setDescripcion(Gral::getVars(1, "eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_descripcion"));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuDeId(Gral::getVars(1, "eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_cmb_eku_de_id", null));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE921Ddirlocsal(Gral::getVars(1, "eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e921_ddirlocsal"));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE922Dnumcassal(Gral::getVars(1, "eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e922_dnumcassal"));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE923Dcomp1sal(Gral::getVars(1, "eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e923_dcomp1sal"));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE924Dcomp2sal(Gral::getVars(1, "eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e924_dcomp2sal"));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE925Cdepsal(Gral::getVars(1, "eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e925_cdepsal"));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE926Ddesdepsal(Gral::getVars(1, "eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e926_ddesdepsal"));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE927Cdissal(Gral::getVars(1, "eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e927_cdissal"));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE928Ddesdissal(Gral::getVars(1, "eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e928_ddesdissal"));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE929Cciusal(Gral::getVars(1, "eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e929_cciusal"));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE930Ddesciusal(Gral::getVars(1, "eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e930_ddesciusal"));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE931Dtelsal(Gral::getVars(1, "eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e931_dtelsal"));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setCodigo(Gral::getVars(1, "eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_codigo"));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setObservacion(Gral::getVars(1, "eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txa_observacion"));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setOrden(Gral::getVars(1, "eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_orden", 0));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEstado(Gral::getVars(1, "eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_cmb_estado", 0));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_creado")));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setCreadoPor(Gral::getVars(1, "eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal__creado_por", 0));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_modificado")));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setModificadoPor(Gral::getVars(1, "eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal__modificado_por", 0));

	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_estado = new EkuDeE920GDtipDEGTranspGCamSal();
	if(trim($hdn_id) != ''){
		$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_estado->setId($hdn_id);
		$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEstado($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_estado->getEstado());
				
	}else{
		$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->control();
			if(!$error->getExisteError()){
				$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta.php?cs=1&id='.$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getId());
			}
		break;
		case 'guardarnvo':
			$error = $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->control();
			if(!$error->getExisteError()){
				$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta.php?cs=1');
				$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal = new EkuDeE920GDtipDEGTranspGCamSal();
			}
		break;
	}
	Gral::setSes('EkuDeE920GDtipDEGTranspGCamSal_ULTIMO_INSERTADO', $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_id = Gral::getVars(2, $prefijo.'cmb_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_id', 0);
	if($cmb_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_id != 0){
		$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal = EkuDeE920GDtipDEGTranspGCamSal::getOxId($cmb_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_id);
	}else{
	
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE921Ddirlocsal(Gral::getVars(2, "eku_e921_ddirlocsal", ''));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE922Dnumcassal(Gral::getVars(2, "eku_e922_dnumcassal", ''));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE923Dcomp1sal(Gral::getVars(2, "eku_e923_dcomp1sal", ''));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE924Dcomp2sal(Gral::getVars(2, "eku_e924_dcomp2sal", ''));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE925Cdepsal(Gral::getVars(2, "eku_e925_cdepsal", ''));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE926Ddesdepsal(Gral::getVars(2, "eku_e926_ddesdepsal", ''));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE927Cdissal(Gral::getVars(2, "eku_e927_cdissal", ''));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE928Ddesdissal(Gral::getVars(2, "eku_e928_ddesdissal", ''));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE929Cciusal(Gral::getVars(2, "eku_e929_cciusal", ''));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE930Ddesciusal(Gral::getVars(2, "eku_e930_ddesciusal", ''));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE931Dtelsal(Gral::getVars(2, "eku_e931_dtelsal", ''));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setCodigo(Gral::getVars(2, "codigo", ''));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setObservacion(Gral::getVars(2, "observacion", ''));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setOrden(Gral::getVars(2, "orden", 0));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEstado(Gral::getVars(2, "estado", 0));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal' width='90%'>
        
				<tr>
				  <td  id="label_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_descripcion' value='<?php Gral::_echoTxt($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_cmb_eku_de_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >
				  
                                        <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_cmb_eku_de_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(), '...'), $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuDeId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_E920_G_DTIP_D_E_G_TRANSP_G_CAM_SAL_ALTA_CMB_EDIT_EKU_DE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_cmb_eku_de_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e921_ddirlocsal" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e921_ddirlocsal' ?>" >
				  
                                        <?php Lang::_lang('eku_e921_ddirlocsal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e921_ddirlocsal" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e921_ddirlocsal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e921_ddirlocsal' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e921_ddirlocsal' value='<?php Gral::_echoTxt($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE921Ddirlocsal(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e921_ddirlocsal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e921_ddirlocsal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e921_ddirlocsal', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e921_ddirlocsal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e921_ddirlocsal')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e922_dnumcassal" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e922_dnumcassal' ?>" >
				  
                                        <?php Lang::_lang('eku_e922_dnumcassal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e922_dnumcassal" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e922_dnumcassal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e922_dnumcassal' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e922_dnumcassal' value='<?php Gral::_echoTxt($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE922Dnumcassal(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e922_dnumcassal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e922_dnumcassal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e922_dnumcassal', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e922_dnumcassal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e922_dnumcassal')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e923_dcomp1sal" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e923_dcomp1sal' ?>" >
				  
                                        <?php Lang::_lang('eku_e923_dcomp1sal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e923_dcomp1sal" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e923_dcomp1sal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e923_dcomp1sal' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e923_dcomp1sal' value='<?php Gral::_echoTxt($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE923Dcomp1sal(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e923_dcomp1sal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e923_dcomp1sal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e923_dcomp1sal', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e923_dcomp1sal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e923_dcomp1sal')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e924_dcomp2sal" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e924_dcomp2sal' ?>" >
				  
                                        <?php Lang::_lang('eku_e924_dcomp2sal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e924_dcomp2sal" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e924_dcomp2sal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e924_dcomp2sal' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e924_dcomp2sal' value='<?php Gral::_echoTxt($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE924Dcomp2sal(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e924_dcomp2sal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e924_dcomp2sal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e924_dcomp2sal', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e924_dcomp2sal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e924_dcomp2sal')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e925_cdepsal" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e925_cdepsal' ?>" >
				  
                                        <?php Lang::_lang('eku_e925_cdepsal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e925_cdepsal" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e925_cdepsal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e925_cdepsal' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e925_cdepsal' value='<?php Gral::_echoTxt($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE925Cdepsal(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e925_cdepsal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e925_cdepsal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e925_cdepsal', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e925_cdepsal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e925_cdepsal')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e926_ddesdepsal" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e926_ddesdepsal' ?>" >
				  
                                        <?php Lang::_lang('eku_e926_ddesdepsal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e926_ddesdepsal" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e926_ddesdepsal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e926_ddesdepsal' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e926_ddesdepsal' value='<?php Gral::_echoTxt($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE926Ddesdepsal(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e926_ddesdepsal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e926_ddesdepsal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e926_ddesdepsal', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e926_ddesdepsal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e926_ddesdepsal')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e927_cdissal" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e927_cdissal' ?>" >
				  
                                        <?php Lang::_lang('eku_e927_cdissal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e927_cdissal" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e927_cdissal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e927_cdissal' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e927_cdissal' value='<?php Gral::_echoTxt($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE927Cdissal(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e927_cdissal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e927_cdissal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e927_cdissal', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e927_cdissal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e927_cdissal')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e928_ddesdissal" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e928_ddesdissal' ?>" >
				  
                                        <?php Lang::_lang('eku_e928_ddesdissal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e928_ddesdissal" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e928_ddesdissal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e928_ddesdissal' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e928_ddesdissal' value='<?php Gral::_echoTxt($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE928Ddesdissal(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e928_ddesdissal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e928_ddesdissal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e928_ddesdissal', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e928_ddesdissal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e928_ddesdissal')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e929_cciusal" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e929_cciusal' ?>" >
				  
                                        <?php Lang::_lang('eku_e929_cciusal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e929_cciusal" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e929_cciusal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e929_cciusal' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e929_cciusal' value='<?php Gral::_echoTxt($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE929Cciusal(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e929_cciusal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e929_cciusal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e929_cciusal', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e929_cciusal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e929_cciusal')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e930_ddesciusal" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e930_ddesciusal' ?>" >
				  
                                        <?php Lang::_lang('eku_e930_ddesciusal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e930_ddesciusal" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e930_ddesciusal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e930_ddesciusal' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e930_ddesciusal' value='<?php Gral::_echoTxt($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE930Ddesciusal(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e930_ddesciusal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e930_ddesciusal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e930_ddesciusal', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e930_ddesciusal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e930_ddesciusal')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e931_dtelsal" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e931_dtelsal' ?>" >
				  
                                        <?php Lang::_lang('eku_e931_dtelsal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e931_dtelsal" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e931_dtelsal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e931_dtelsal' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_eku_e931_dtelsal' value='<?php Gral::_echoTxt($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE931Dtelsal(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e931_dtelsal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e931_dtelsal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e931_dtelsal', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_eku_e931_dtelsal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e931_dtelsal')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txt_codigo' value='<?php Gral::_echoTxt($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getCodigo(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txa_observacion' rows='10' cols='50' id='eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal'/>
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

