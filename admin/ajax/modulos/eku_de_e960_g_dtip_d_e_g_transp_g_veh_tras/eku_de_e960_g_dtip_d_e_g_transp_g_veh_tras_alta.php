<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('EKU_DE_E960_G_DTIP_D_E_G_TRANSP_G_VEH_TRAS_ALTA')){
    echo "No tiene asignada la credencial EKU_DE_E960_G_DTIP_D_E_G_TRANSP_G_VEH_TRAS_ALTA. ";
    return false;
}

$db_nombre_objeto = 'eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras';
$db_nombre_pagina = 'eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta';

$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras = new EkuDeE960GDtipDEGTranspGVehTras();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras = new EkuDeE960GDtipDEGTranspGVehTras();
	if(trim($hdn_id) != '') $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setId($hdn_id, false);
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setDescripcion(Gral::getVars(1, "eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_descripcion"));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuDeId(Gral::getVars(1, "eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_cmb_eku_de_id", null));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuE961Dtivehtras(Gral::getVars(1, "eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_eku_e961_dtivehtras"));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuE962Dmarveh(Gral::getVars(1, "eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_eku_e962_dmarveh"));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuE967Dtipidenveh(Gral::getVars(1, "eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_eku_e967_dtipidenveh"));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuE963Dnroidveh(Gral::getVars(1, "eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_eku_e963_dnroidveh"));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuE964Dadicveh(Gral::getVars(1, "eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_eku_e964_dadicveh"));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuE965Dnromatveh(Gral::getVars(1, "eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_eku_e965_dnromatveh"));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuE966Dnrovuelo(Gral::getVars(1, "eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_eku_e966_dnrovuelo"));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setCodigo(Gral::getVars(1, "eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_codigo"));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setObservacion(Gral::getVars(1, "eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txa_observacion"));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setOrden(Gral::getVars(1, "eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_orden", 0));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEstado(Gral::getVars(1, "eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_cmb_estado", 0));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_creado")));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setCreadoPor(Gral::getVars(1, "eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras__creado_por", 0));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_modificado")));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setModificadoPor(Gral::getVars(1, "eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras__modificado_por", 0));

	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_estado = new EkuDeE960GDtipDEGTranspGVehTras();
	if(trim($hdn_id) != ''){
		$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_estado->setId($hdn_id);
		$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEstado($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_estado->getEstado());
				
	}else{
		$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->control();
			if(!$error->getExisteError()){
				$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta.php?cs=1&id='.$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getId());
			}
		break;
		case 'guardarnvo':
			$error = $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->control();
			if(!$error->getExisteError()){
				$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta.php?cs=1');
				$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras = new EkuDeE960GDtipDEGTranspGVehTras();
			}
		break;
	}
	Gral::setSes('EkuDeE960GDtipDEGTranspGVehTras_ULTIMO_INSERTADO', $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_id = Gral::getVars(2, $prefijo.'cmb_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_id', 0);
	if($cmb_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_id != 0){
		$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras = EkuDeE960GDtipDEGTranspGVehTras::getOxId($cmb_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_id);
	}else{
	
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuE961Dtivehtras(Gral::getVars(2, "eku_e961_dtivehtras", ''));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuE962Dmarveh(Gral::getVars(2, "eku_e962_dmarveh", ''));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuE967Dtipidenveh(Gral::getVars(2, "eku_e967_dtipidenveh", ''));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuE963Dnroidveh(Gral::getVars(2, "eku_e963_dnroidveh", ''));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuE964Dadicveh(Gral::getVars(2, "eku_e964_dadicveh", ''));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuE965Dnromatveh(Gral::getVars(2, "eku_e965_dnromatveh", ''));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuE966Dnrovuelo(Gral::getVars(2, "eku_e966_dnrovuelo", ''));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setCodigo(Gral::getVars(2, "codigo", ''));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setObservacion(Gral::getVars(2, "observacion", ''));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setOrden(Gral::getVars(2, "orden", 0));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEstado(Gral::getVars(2, "estado", 0));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras' width='90%'>
        
				<tr>
				  <td  id="label_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_descripcion' value='<?php Gral::_echoTxt($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_cmb_eku_de_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >
				  
                                        <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_cmb_eku_de_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(), '...'), $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuDeId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_E960_G_DTIP_D_E_G_TRANSP_G_VEH_TRAS_ALTA_CMB_EDIT_EKU_DE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_cmb_eku_de_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_eku_e961_dtivehtras" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e961_dtivehtras' ?>" >
				  
                                        <?php Lang::_lang('eku_e961_dtivehtras', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_eku_e961_dtivehtras" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e961_dtivehtras')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_eku_e961_dtivehtras' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_eku_e961_dtivehtras' value='<?php Gral::_echoTxt($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE961Dtivehtras(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_eku_e961_dtivehtras', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_eku_e961_dtivehtras', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_eku_e961_dtivehtras', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_eku_e961_dtivehtras', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e961_dtivehtras')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_eku_e962_dmarveh" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e962_dmarveh' ?>" >
				  
                                        <?php Lang::_lang('eku_e962_dmarveh', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_eku_e962_dmarveh" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e962_dmarveh')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_eku_e962_dmarveh' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_eku_e962_dmarveh' value='<?php Gral::_echoTxt($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE962Dmarveh(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_eku_e962_dmarveh', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_eku_e962_dmarveh', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_eku_e962_dmarveh', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_eku_e962_dmarveh', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e962_dmarveh')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_eku_e967_dtipidenveh" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e967_dtipidenveh' ?>" >
				  
                                        <?php Lang::_lang('eku_e967_dtipidenveh', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_eku_e967_dtipidenveh" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e967_dtipidenveh')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_eku_e967_dtipidenveh' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_eku_e967_dtipidenveh' value='<?php Gral::_echoTxt($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE967Dtipidenveh(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_eku_e967_dtipidenveh', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_eku_e967_dtipidenveh', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_eku_e967_dtipidenveh', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_eku_e967_dtipidenveh', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e967_dtipidenveh')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_eku_e963_dnroidveh" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e963_dnroidveh' ?>" >
				  
                                        <?php Lang::_lang('eku_e963_dnroidveh', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_eku_e963_dnroidveh" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e963_dnroidveh')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_eku_e963_dnroidveh' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_eku_e963_dnroidveh' value='<?php Gral::_echoTxt($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE963Dnroidveh(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_eku_e963_dnroidveh', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_eku_e963_dnroidveh', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_eku_e963_dnroidveh', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_eku_e963_dnroidveh', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e963_dnroidveh')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_eku_e964_dadicveh" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e964_dadicveh' ?>" >
				  
                                        <?php Lang::_lang('eku_e964_dadicveh', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_eku_e964_dadicveh" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e964_dadicveh')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_eku_e964_dadicveh' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_eku_e964_dadicveh' value='<?php Gral::_echoTxt($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE964Dadicveh(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_eku_e964_dadicveh', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_eku_e964_dadicveh', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_eku_e964_dadicveh', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_eku_e964_dadicveh', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e964_dadicveh')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_eku_e965_dnromatveh" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e965_dnromatveh' ?>" >
				  
                                        <?php Lang::_lang('eku_e965_dnromatveh', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_eku_e965_dnromatveh" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e965_dnromatveh')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_eku_e965_dnromatveh' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_eku_e965_dnromatveh' value='<?php Gral::_echoTxt($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE965Dnromatveh(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_eku_e965_dnromatveh', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_eku_e965_dnromatveh', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_eku_e965_dnromatveh', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_eku_e965_dnromatveh', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e965_dnromatveh')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_eku_e966_dnrovuelo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e966_dnrovuelo' ?>" >
				  
                                        <?php Lang::_lang('eku_e966_dnrovuelo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_eku_e966_dnrovuelo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e966_dnrovuelo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_eku_e966_dnrovuelo' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_eku_e966_dnrovuelo' value='<?php Gral::_echoTxt($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE966Dnrovuelo(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_eku_e966_dnrovuelo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_eku_e966_dnrovuelo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_eku_e966_dnrovuelo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_eku_e966_dnrovuelo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e966_dnrovuelo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txt_codigo' value='<?php Gral::_echoTxt($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getCodigo(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txa_observacion' rows='10' cols='50' id='eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras'/>
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

