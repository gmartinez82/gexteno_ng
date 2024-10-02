<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('EKU_DE_E300_G_DTIP_D_E_G_CAM_A_E_ALTA')){
    echo "No tiene asignada la credencial EKU_DE_E300_G_DTIP_D_E_G_CAM_A_E_ALTA. ";
    return false;
}

$db_nombre_objeto = 'eku_de_e300_g_dtip_d_e_g_cam_a_e';
$db_nombre_pagina = 'eku_de_e300_g_dtip_d_e_g_cam_a_e_alta';

$eku_de_e300_g_dtip_d_e_g_cam_a_e = new EkuDeE300GDtipDEGCamAE();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$eku_de_e300_g_dtip_d_e_g_cam_a_e = new EkuDeE300GDtipDEGCamAE();
	if(trim($hdn_id) != '') $eku_de_e300_g_dtip_d_e_g_cam_a_e->setId($hdn_id, false);
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setDescripcion(Gral::getVars(1, "eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_descripcion"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuDeId(Gral::getVars(1, "eku_de_e300_g_dtip_d_e_g_cam_a_e_cmb_eku_de_id", null));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE301Inatven(Gral::getVars(1, "eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e301_inatven"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE302Ddesnatven(Gral::getVars(1, "eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e302_ddesnatven"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE304Itipidven(Gral::getVars(1, "eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e304_itipidven"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE305Ddtipidven(Gral::getVars(1, "eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e305_ddtipidven"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE306Dnumidven(Gral::getVars(1, "eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e306_dnumidven"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE307Dnomven(Gral::getVars(1, "eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e307_dnomven"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE308Ddirven(Gral::getVars(1, "eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e308_ddirven"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE309Dnumcasven(Gral::getVars(1, "eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e309_dnumcasven"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE310Cdepven(Gral::getVars(1, "eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e310_cdepven"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE311Ddesdepven(Gral::getVars(1, "eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e311_ddesdepven"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE312Cdisven(Gral::getVars(1, "eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e312_cdisven"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE313Ddesdisven(Gral::getVars(1, "eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e313_ddesdisven"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE314Cciuven(Gral::getVars(1, "eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e314_cciuven"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE315Ddesciuven(Gral::getVars(1, "eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e315_ddesciuven"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE316Ddirprov(Gral::getVars(1, "eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e316_ddirprov"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE317Cdepprov(Gral::getVars(1, "eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e317_cdepprov"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE318Ddesdepprov(Gral::getVars(1, "eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e318_ddesdepprov"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE319Cdisprov(Gral::getVars(1, "eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e319_cdisprov"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE320Ddesdisprov(Gral::getVars(1, "eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e320_ddesdisprov"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE321Cciuprov(Gral::getVars(1, "eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e321_cciuprov"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE322Ddesciuprov(Gral::getVars(1, "eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e322_ddesciuprov"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setCodigo(Gral::getVars(1, "eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_codigo"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setObservacion(Gral::getVars(1, "eku_de_e300_g_dtip_d_e_g_cam_a_e_txa_observacion"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setOrden(Gral::getVars(1, "eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_orden", 0));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEstado(Gral::getVars(1, "eku_de_e300_g_dtip_d_e_g_cam_a_e_cmb_estado", 0));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_creado")));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setCreadoPor(Gral::getVars(1, "eku_de_e300_g_dtip_d_e_g_cam_a_e__creado_por", 0));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_modificado")));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setModificadoPor(Gral::getVars(1, "eku_de_e300_g_dtip_d_e_g_cam_a_e__modificado_por", 0));

	$eku_de_e300_g_dtip_d_e_g_cam_a_e_estado = new EkuDeE300GDtipDEGCamAE();
	if(trim($hdn_id) != ''){
		$eku_de_e300_g_dtip_d_e_g_cam_a_e_estado->setId($hdn_id);
		$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEstado($eku_de_e300_g_dtip_d_e_g_cam_a_e_estado->getEstado());
				
	}else{
		$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $eku_de_e300_g_dtip_d_e_g_cam_a_e->control();
			if(!$error->getExisteError()){
				$eku_de_e300_g_dtip_d_e_g_cam_a_e->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: eku_de_e300_g_dtip_d_e_g_cam_a_e_alta.php?cs=1&id='.$eku_de_e300_g_dtip_d_e_g_cam_a_e->getId());
			}
		break;
		case 'guardarnvo':
			$error = $eku_de_e300_g_dtip_d_e_g_cam_a_e->control();
			if(!$error->getExisteError()){
				$eku_de_e300_g_dtip_d_e_g_cam_a_e->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: eku_de_e300_g_dtip_d_e_g_cam_a_e_alta.php?cs=1');
				$eku_de_e300_g_dtip_d_e_g_cam_a_e = new EkuDeE300GDtipDEGCamAE();
			}
		break;
	}
	Gral::setSes('EkuDeE300GDtipDEGCamAE_ULTIMO_INSERTADO', $eku_de_e300_g_dtip_d_e_g_cam_a_e->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_eku_de_e300_g_dtip_d_e_g_cam_a_e_id = Gral::getVars(2, $prefijo.'cmb_eku_de_e300_g_dtip_d_e_g_cam_a_e_id', 0);
	if($cmb_eku_de_e300_g_dtip_d_e_g_cam_a_e_id != 0){
		$eku_de_e300_g_dtip_d_e_g_cam_a_e = EkuDeE300GDtipDEGCamAE::getOxId($cmb_eku_de_e300_g_dtip_d_e_g_cam_a_e_id);
	}else{
	
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE301Inatven(Gral::getVars(2, "eku_e301_inatven", ''));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE302Ddesnatven(Gral::getVars(2, "eku_e302_ddesnatven", ''));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE304Itipidven(Gral::getVars(2, "eku_e304_itipidven", ''));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE305Ddtipidven(Gral::getVars(2, "eku_e305_ddtipidven", ''));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE306Dnumidven(Gral::getVars(2, "eku_e306_dnumidven", ''));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE307Dnomven(Gral::getVars(2, "eku_e307_dnomven", ''));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE308Ddirven(Gral::getVars(2, "eku_e308_ddirven", ''));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE309Dnumcasven(Gral::getVars(2, "eku_e309_dnumcasven", ''));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE310Cdepven(Gral::getVars(2, "eku_e310_cdepven", ''));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE311Ddesdepven(Gral::getVars(2, "eku_e311_ddesdepven", ''));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE312Cdisven(Gral::getVars(2, "eku_e312_cdisven", ''));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE313Ddesdisven(Gral::getVars(2, "eku_e313_ddesdisven", ''));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE314Cciuven(Gral::getVars(2, "eku_e314_cciuven", ''));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE315Ddesciuven(Gral::getVars(2, "eku_e315_ddesciuven", ''));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE316Ddirprov(Gral::getVars(2, "eku_e316_ddirprov", ''));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE317Cdepprov(Gral::getVars(2, "eku_e317_cdepprov", ''));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE318Ddesdepprov(Gral::getVars(2, "eku_e318_ddesdepprov", ''));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE319Cdisprov(Gral::getVars(2, "eku_e319_cdisprov", ''));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE320Ddesdisprov(Gral::getVars(2, "eku_e320_ddesdisprov", ''));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE321Cciuprov(Gral::getVars(2, "eku_e321_cciuprov", ''));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE322Ddesciuprov(Gral::getVars(2, "eku_e322_ddesciuprov", ''));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setCodigo(Gral::getVars(2, "codigo", ''));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setObservacion(Gral::getVars(2, "observacion", ''));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setOrden(Gral::getVars(2, "orden", 0));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEstado(Gral::getVars(2, "estado", 0));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $eku_de_e300_g_dtip_d_e_g_cam_a_e->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_eku_de_e300_g_dtip_d_e_g_cam_a_e' width='90%'>
        
				<tr>
				  <td  id="label_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_descripcion' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e300_g_dtip_d_e_g_cam_a_e_cmb_eku_de_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >
				  
                                        <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e300_g_dtip_d_e_g_cam_a_e_cmb_eku_de_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_de_e300_g_dtip_d_e_g_cam_a_e_cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(), '...'), $eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuDeId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_E300_G_DTIP_D_E_G_CAM_A_E_ALTA_CMB_EDIT_EKU_DE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="eku_de_e300_g_dtip_d_e_g_cam_a_e_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_e300_g_dtip_d_e_g_cam_a_e_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="eku_de_e300_g_dtip_d_e_g_cam_a_e_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_e300_g_dtip_d_e_g_cam_a_e_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_eku_de_e300_g_dtip_d_e_g_cam_a_e_cmb_eku_de_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e301_inatven" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e301_inatven' ?>" >
				  
                                        <?php Lang::_lang('eku_e301_inatven', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e301_inatven" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e301_inatven')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e301_inatven' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e301_inatven' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE301Inatven(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e301_inatven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e301_inatven', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e301_inatven', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e301_inatven', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e301_inatven')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e302_ddesnatven" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e302_ddesnatven' ?>" >
				  
                                        <?php Lang::_lang('eku_e302_ddesnatven', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e302_ddesnatven" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e302_ddesnatven')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e302_ddesnatven' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e302_ddesnatven' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE302Ddesnatven(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e302_ddesnatven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e302_ddesnatven', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e302_ddesnatven', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e302_ddesnatven', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e302_ddesnatven')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e304_itipidven" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e304_itipidven' ?>" >
				  
                                        <?php Lang::_lang('eku_e304_itipidven', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e304_itipidven" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e304_itipidven')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e304_itipidven' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e304_itipidven' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE304Itipidven(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e304_itipidven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e304_itipidven', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e304_itipidven', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e304_itipidven', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e304_itipidven')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e305_ddtipidven" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e305_ddtipidven' ?>" >
				  
                                        <?php Lang::_lang('eku_e305_ddtipidven', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e305_ddtipidven" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e305_ddtipidven')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e305_ddtipidven' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e305_ddtipidven' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE305Ddtipidven(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e305_ddtipidven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e305_ddtipidven', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e305_ddtipidven', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e305_ddtipidven', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e305_ddtipidven')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e306_dnumidven" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e306_dnumidven' ?>" >
				  
                                        <?php Lang::_lang('eku_e306_dnumidven', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e306_dnumidven" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e306_dnumidven')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e306_dnumidven' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e306_dnumidven' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE306Dnumidven(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e306_dnumidven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e306_dnumidven', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e306_dnumidven', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e306_dnumidven', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e306_dnumidven')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e307_dnomven" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e307_dnomven' ?>" >
				  
                                        <?php Lang::_lang('eku_e307_dnomven', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e307_dnomven" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e307_dnomven')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e307_dnomven' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e307_dnomven' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE307Dnomven(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e307_dnomven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e307_dnomven', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e307_dnomven', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e307_dnomven', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e307_dnomven')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e308_ddirven" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e308_ddirven' ?>" >
				  
                                        <?php Lang::_lang('eku_e308_ddirven', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e308_ddirven" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e308_ddirven')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e308_ddirven' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e308_ddirven' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE308Ddirven(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e308_ddirven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e308_ddirven', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e308_ddirven', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e308_ddirven', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e308_ddirven')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e309_dnumcasven" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e309_dnumcasven' ?>" >
				  
                                        <?php Lang::_lang('eku_e309_dnumcasven', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e309_dnumcasven" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e309_dnumcasven')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e309_dnumcasven' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e309_dnumcasven' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE309Dnumcasven(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e309_dnumcasven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e309_dnumcasven', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e309_dnumcasven', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e309_dnumcasven', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e309_dnumcasven')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e310_cdepven" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e310_cdepven' ?>" >
				  
                                        <?php Lang::_lang('eku_e310_cdepven', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e310_cdepven" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e310_cdepven')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e310_cdepven' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e310_cdepven' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE310Cdepven(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e310_cdepven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e310_cdepven', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e310_cdepven', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e310_cdepven', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e310_cdepven')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e311_ddesdepven" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e311_ddesdepven' ?>" >
				  
                                        <?php Lang::_lang('eku_e311_ddesdepven', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e311_ddesdepven" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e311_ddesdepven')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e311_ddesdepven' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e311_ddesdepven' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE311Ddesdepven(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e311_ddesdepven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e311_ddesdepven', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e311_ddesdepven', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e311_ddesdepven', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e311_ddesdepven')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e312_cdisven" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e312_cdisven' ?>" >
				  
                                        <?php Lang::_lang('eku_e312_cdisven', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e312_cdisven" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e312_cdisven')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e312_cdisven' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e312_cdisven' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE312Cdisven(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e312_cdisven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e312_cdisven', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e312_cdisven', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e312_cdisven', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e312_cdisven')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e313_ddesdisven" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e313_ddesdisven' ?>" >
				  
                                        <?php Lang::_lang('eku_e313_ddesdisven', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e313_ddesdisven" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e313_ddesdisven')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e313_ddesdisven' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e313_ddesdisven' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE313Ddesdisven(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e313_ddesdisven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e313_ddesdisven', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e313_ddesdisven', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e313_ddesdisven', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e313_ddesdisven')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e314_cciuven" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e314_cciuven' ?>" >
				  
                                        <?php Lang::_lang('eku_e314_cciuven', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e314_cciuven" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e314_cciuven')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e314_cciuven' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e314_cciuven' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE314Cciuven(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e314_cciuven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e314_cciuven', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e314_cciuven', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e314_cciuven', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e314_cciuven')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e315_ddesciuven" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e315_ddesciuven' ?>" >
				  
                                        <?php Lang::_lang('eku_e315_ddesciuven', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e315_ddesciuven" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e315_ddesciuven')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e315_ddesciuven' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e315_ddesciuven' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE315Ddesciuven(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e315_ddesciuven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e315_ddesciuven', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e315_ddesciuven', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e315_ddesciuven', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e315_ddesciuven')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e316_ddirprov" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e316_ddirprov' ?>" >
				  
                                        <?php Lang::_lang('eku_e316_ddirprov', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e316_ddirprov" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e316_ddirprov')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e316_ddirprov' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e316_ddirprov' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE316Ddirprov(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e316_ddirprov', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e316_ddirprov', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e316_ddirprov', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e316_ddirprov', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e316_ddirprov')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e317_cdepprov" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e317_cdepprov' ?>" >
				  
                                        <?php Lang::_lang('eku_e317_cdepprov', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e317_cdepprov" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e317_cdepprov')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e317_cdepprov' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e317_cdepprov' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE317Cdepprov(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e317_cdepprov', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e317_cdepprov', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e317_cdepprov', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e317_cdepprov', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e317_cdepprov')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e318_ddesdepprov" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e318_ddesdepprov' ?>" >
				  
                                        <?php Lang::_lang('eku_e318_ddesdepprov', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e318_ddesdepprov" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e318_ddesdepprov')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e318_ddesdepprov' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e318_ddesdepprov' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE318Ddesdepprov(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e318_ddesdepprov', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e318_ddesdepprov', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e318_ddesdepprov', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e318_ddesdepprov', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e318_ddesdepprov')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e319_cdisprov" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e319_cdisprov' ?>" >
				  
                                        <?php Lang::_lang('eku_e319_cdisprov', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e319_cdisprov" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e319_cdisprov')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e319_cdisprov' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e319_cdisprov' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE319Cdisprov(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e319_cdisprov', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e319_cdisprov', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e319_cdisprov', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e319_cdisprov', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e319_cdisprov')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e320_ddesdisprov" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e320_ddesdisprov' ?>" >
				  
                                        <?php Lang::_lang('eku_e320_ddesdisprov', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e320_ddesdisprov" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e320_ddesdisprov')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e320_ddesdisprov' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e320_ddesdisprov' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE320Ddesdisprov(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e320_ddesdisprov', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e320_ddesdisprov', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e320_ddesdisprov', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e320_ddesdisprov', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e320_ddesdisprov')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e321_cciuprov" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e321_cciuprov' ?>" >
				  
                                        <?php Lang::_lang('eku_e321_cciuprov', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e321_cciuprov" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e321_cciuprov')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e321_cciuprov' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e321_cciuprov' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE321Cciuprov(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e321_cciuprov', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e321_cciuprov', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e321_cciuprov', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e321_cciuprov', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e321_cciuprov')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e322_ddesciuprov" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e322_ddesciuprov' ?>" >
				  
                                        <?php Lang::_lang('eku_e322_ddesciuprov', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e322_ddesciuprov" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e322_ddesciuprov')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e322_ddesciuprov' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_eku_e322_ddesciuprov' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE322Ddesciuprov(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e322_ddesciuprov', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e322_ddesciuprov', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e322_ddesciuprov', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_eku_e322_ddesciuprov', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e322_ddesciuprov')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e300_g_dtip_d_e_g_cam_a_e_txt_codigo' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getCodigo(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e300_g_dtip_d_e_g_cam_a_e_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e300_g_dtip_d_e_g_cam_a_e_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='eku_de_e300_g_dtip_d_e_g_cam_a_e_txa_observacion' rows='10' cols='50' id='eku_de_e300_g_dtip_d_e_g_cam_a_e_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_eku_de_e300_g_dtip_d_e_g_cam_a_e_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='eku_de_e300_g_dtip_d_e_g_cam_a_e'/>
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

