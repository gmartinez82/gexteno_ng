<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('EKU_DE_E940_G_DTIP_D_E_G_TRANSP_G_CAM_ENT_ALTA')){
    echo "No tiene asignada la credencial EKU_DE_E940_G_DTIP_D_E_G_TRANSP_G_CAM_ENT_ALTA. ";
    return false;
}

$db_nombre_objeto = 'eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent';
$db_nombre_pagina = 'eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta';

$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent = new EkuDeE940GDtipDEGTranspGCamEnt();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent = new EkuDeE940GDtipDEGTranspGCamEnt();
	if(trim($hdn_id) != '') $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setId($hdn_id, false);
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setDescripcion(Gral::getVars(1, "eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_descripcion"));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuDeId(Gral::getVars(1, "eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_cmb_eku_de_id", null));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE941Ddirlocent(Gral::getVars(1, "eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e941_ddirlocent"));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE942Dnumcasent(Gral::getVars(1, "eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e942_dnumcasent"));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE943Dcomp1ent(Gral::getVars(1, "eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e943_dcomp1ent"));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE944Dcomp2ent(Gral::getVars(1, "eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e944_dcomp2ent"));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE945Cdepent(Gral::getVars(1, "eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e945_cdepent"));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE946Ddesdepent(Gral::getVars(1, "eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e946_ddesdepent"));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE947Cdisent(Gral::getVars(1, "eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e947_cdisent"));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE948Ddesdisent(Gral::getVars(1, "eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e948_ddesdisent"));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE949Cciuent(Gral::getVars(1, "eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e949_cciuent"));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE950Ddesciuent(Gral::getVars(1, "eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e950_ddesciuent"));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE951Dtelent(Gral::getVars(1, "eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e951_dtelent"));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setCodigo(Gral::getVars(1, "eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_codigo"));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setObservacion(Gral::getVars(1, "eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txa_observacion"));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setOrden(Gral::getVars(1, "eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_orden", 0));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEstado(Gral::getVars(1, "eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_cmb_estado", 0));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_creado")));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setCreadoPor(Gral::getVars(1, "eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent__creado_por", 0));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_modificado")));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setModificadoPor(Gral::getVars(1, "eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent__modificado_por", 0));

	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_estado = new EkuDeE940GDtipDEGTranspGCamEnt();
	if(trim($hdn_id) != ''){
		$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_estado->setId($hdn_id);
		$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEstado($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_estado->getEstado());
				
	}else{
		$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->control();
			if(!$error->getExisteError()){
				$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta.php?cs=1&id='.$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getId());
			}
		break;
		case 'guardarnvo':
			$error = $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->control();
			if(!$error->getExisteError()){
				$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta.php?cs=1');
				$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent = new EkuDeE940GDtipDEGTranspGCamEnt();
			}
		break;
	}
	Gral::setSes('EkuDeE940GDtipDEGTranspGCamEnt_ULTIMO_INSERTADO', $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_id = Gral::getVars(2, $prefijo.'cmb_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_id', 0);
	if($cmb_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_id != 0){
		$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent = EkuDeE940GDtipDEGTranspGCamEnt::getOxId($cmb_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_id);
	}else{
	
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE941Ddirlocent(Gral::getVars(2, "eku_e941_ddirlocent", ''));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE942Dnumcasent(Gral::getVars(2, "eku_e942_dnumcasent", ''));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE943Dcomp1ent(Gral::getVars(2, "eku_e943_dcomp1ent", ''));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE944Dcomp2ent(Gral::getVars(2, "eku_e944_dcomp2ent", ''));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE945Cdepent(Gral::getVars(2, "eku_e945_cdepent", ''));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE946Ddesdepent(Gral::getVars(2, "eku_e946_ddesdepent", ''));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE947Cdisent(Gral::getVars(2, "eku_e947_cdisent", ''));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE948Ddesdisent(Gral::getVars(2, "eku_e948_ddesdisent", ''));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE949Cciuent(Gral::getVars(2, "eku_e949_cciuent", ''));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE950Ddesciuent(Gral::getVars(2, "eku_e950_ddesciuent", ''));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE951Dtelent(Gral::getVars(2, "eku_e951_dtelent", ''));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setCodigo(Gral::getVars(2, "codigo", ''));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setObservacion(Gral::getVars(2, "observacion", ''));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setOrden(Gral::getVars(2, "orden", 0));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEstado(Gral::getVars(2, "estado", 0));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent' width='90%'>
        
				<tr>
				  <td  id="label_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_descripcion' value='<?php Gral::_echoTxt($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_cmb_eku_de_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >
				  
                                        <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_cmb_eku_de_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(), '...'), $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuDeId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_E940_G_DTIP_D_E_G_TRANSP_G_CAM_ENT_ALTA_CMB_EDIT_EKU_DE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_cmb_eku_de_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e941_ddirlocent" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e941_ddirlocent' ?>" >
				  
                                        <?php Lang::_lang('eku_e941_ddirlocent', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e941_ddirlocent" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e941_ddirlocent')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e941_ddirlocent' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e941_ddirlocent' value='<?php Gral::_echoTxt($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE941Ddirlocent(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e941_ddirlocent', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e941_ddirlocent', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e941_ddirlocent', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e941_ddirlocent', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e941_ddirlocent')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e942_dnumcasent" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e942_dnumcasent' ?>" >
				  
                                        <?php Lang::_lang('eku_e942_dnumcasent', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e942_dnumcasent" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e942_dnumcasent')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e942_dnumcasent' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e942_dnumcasent' value='<?php Gral::_echoTxt($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE942Dnumcasent(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e942_dnumcasent', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e942_dnumcasent', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e942_dnumcasent', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e942_dnumcasent', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e942_dnumcasent')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e943_dcomp1ent" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e943_dcomp1ent' ?>" >
				  
                                        <?php Lang::_lang('eku_e943_dcomp1ent', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e943_dcomp1ent" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e943_dcomp1ent')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e943_dcomp1ent' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e943_dcomp1ent' value='<?php Gral::_echoTxt($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE943Dcomp1ent(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e943_dcomp1ent', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e943_dcomp1ent', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e943_dcomp1ent', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e943_dcomp1ent', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e943_dcomp1ent')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e944_dcomp2ent" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e944_dcomp2ent' ?>" >
				  
                                        <?php Lang::_lang('eku_e944_dcomp2ent', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e944_dcomp2ent" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e944_dcomp2ent')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e944_dcomp2ent' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e944_dcomp2ent' value='<?php Gral::_echoTxt($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE944Dcomp2ent(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e944_dcomp2ent', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e944_dcomp2ent', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e944_dcomp2ent', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e944_dcomp2ent', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e944_dcomp2ent')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e945_cdepent" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e945_cdepent' ?>" >
				  
                                        <?php Lang::_lang('eku_e945_cdepent', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e945_cdepent" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e945_cdepent')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e945_cdepent' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e945_cdepent' value='<?php Gral::_echoTxt($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE945Cdepent(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e945_cdepent', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e945_cdepent', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e945_cdepent', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e945_cdepent', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e945_cdepent')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e946_ddesdepent" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e946_ddesdepent' ?>" >
				  
                                        <?php Lang::_lang('eku_e946_ddesdepent', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e946_ddesdepent" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e946_ddesdepent')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e946_ddesdepent' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e946_ddesdepent' value='<?php Gral::_echoTxt($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE946Ddesdepent(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e946_ddesdepent', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e946_ddesdepent', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e946_ddesdepent', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e946_ddesdepent', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e946_ddesdepent')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e947_cdisent" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e947_cdisent' ?>" >
				  
                                        <?php Lang::_lang('eku_e947_cdisent', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e947_cdisent" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e947_cdisent')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e947_cdisent' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e947_cdisent' value='<?php Gral::_echoTxt($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE947Cdisent(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e947_cdisent', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e947_cdisent', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e947_cdisent', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e947_cdisent', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e947_cdisent')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e948_ddesdisent" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e948_ddesdisent' ?>" >
				  
                                        <?php Lang::_lang('eku_e948_ddesdisent', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e948_ddesdisent" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e948_ddesdisent')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e948_ddesdisent' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e948_ddesdisent' value='<?php Gral::_echoTxt($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE948Ddesdisent(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e948_ddesdisent', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e948_ddesdisent', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e948_ddesdisent', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e948_ddesdisent', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e948_ddesdisent')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e949_cciuent" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e949_cciuent' ?>" >
				  
                                        <?php Lang::_lang('eku_e949_cciuent', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e949_cciuent" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e949_cciuent')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e949_cciuent' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e949_cciuent' value='<?php Gral::_echoTxt($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE949Cciuent(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e949_cciuent', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e949_cciuent', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e949_cciuent', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e949_cciuent', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e949_cciuent')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e950_ddesciuent" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e950_ddesciuent' ?>" >
				  
                                        <?php Lang::_lang('eku_e950_ddesciuent', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e950_ddesciuent" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e950_ddesciuent')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e950_ddesciuent' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e950_ddesciuent' value='<?php Gral::_echoTxt($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE950Ddesciuent(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e950_ddesciuent', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e950_ddesciuent', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e950_ddesciuent', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e950_ddesciuent', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e950_ddesciuent')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e951_dtelent" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e951_dtelent' ?>" >
				  
                                        <?php Lang::_lang('eku_e951_dtelent', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e951_dtelent" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e951_dtelent')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e951_dtelent' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_eku_e951_dtelent' value='<?php Gral::_echoTxt($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE951Dtelent(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e951_dtelent', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e951_dtelent', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e951_dtelent', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_eku_e951_dtelent', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e951_dtelent')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txt_codigo' value='<?php Gral::_echoTxt($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getCodigo(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txa_observacion' rows='10' cols='50' id='eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent'/>
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

